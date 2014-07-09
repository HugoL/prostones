<?php

class PresupuestoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','tipos','generar'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Presupuesto;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Presupuesto']))
		{
			$model->attributes=$_POST['Presupuesto'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Presupuesto']))
		{
			$model->attributes=$_POST['Presupuesto'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete( $id )
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex( $idMaterial = null ){

		$materiales = Material::model()->findAll();
		$imagenes = array();
		$i = 0;

		foreach ($materiales as $key => $material) {
				$array = array(Yii::app()->request->baseUrl.Yii::app()->params['imagenes'].$material->imagen, 'alt'=>$material->nombre);
				$imagenes[$i] = $array;
				$i++;
		}

		if( !isset($idMaterial) ){ //si no llega id de material cojo todos
			$tipos = Tipo::model()->findAll();
		}else{ //si llega un idMaterial coge los tipos de ese material
			$criteria=new CDbCriteria;               		
        	$criteria->compare('id_material',$idMaterial);	
        	$criteria->select = '*';
			$tipos = Tipo::model()->findAll($criteria);
		}

		$piezas = Pieza::model()->findAll();

		$valorPieza = new Valorpieza;
		$terminaciones = Terminacion::model()->findAll();
		$tamanos = Tamano::model()->findAll();

		if( isset($_POST['Valorpieza']) ){			

			//$pieza = new Valorpieza;			
			$valorPieza->attributes=$_POST['Valorpieza'];

			$tamano = Tamano::model()->find('id = '.$valorPieza->id_tamano);		

			//número de piezas necesarias
        	$numeropiezas = $this->calcularNumeroPiezas($valorPieza->cantidad, $tamano->tamanopieza);
        	//precio de la pieza del tamaño dado:
			$preciounitario = Preciounitario::model()->find('id_tipo = '.$valorPieza->id.' AND id_tamano = '.$valorPieza->id_tamano );

        	//tamaño en metros de todas las piezas
        	$tamanoreal = $numeropiezas * $tamano->tamanopieza;

        	//precio de los metros correspondientes
			$precio = $tamanoreal * $preciounitario->precio;


			//CALCULAR EL PRECIO DE LA PIEZA

			//CALCULAR EL PESO
			$peso = $this->calcularPesoPiezas( $valorPieza, $numeropiezas);


			$preciofinal = $precio * $peso; // ???? esto no sé si sierá así

			//ANTES DE PODER ALMACENAR LA PIEZA HAY QUE CREAR EL PRESUPUESTO, PORQUE NO SE PUEDE CREAR UNA PIEZA QUE NO PERTENEZCA A UN PRESUPUESTO
			if( $valorPieza->id_presupuesto == 0 ){
				$presupuesto = new Presupuesto;				
				if( !$presupuesto->save() ){				
					Yii::app()->user->setFlash('danger', "¡Error al crear el presupuesto!");
					//$this->render('/presupuesto/index',array('valorpieza'=>$model));
				}
				$valorPieza->id_presupuesto = $presupuesto->getPrimaryKey();
			}else{
				$criteria=new CDbCriteria;
    			$criteria->compare('id',$valorPieza->id_presupuesto);	
    			$criteria->select = '*';
				$presupuesto = Presupuesto::model()->find($criteria);
				}

			if( $valorPieza->save() ){

				Yii::app()->user->setFlash('success', "¡Añadido al presupuesto!");
				//$this->render('/presupuesto/index',array('valorpieza'=>$model));				
			}

			// ******* //
			//$presupuesto = calcular( $valorPieza );

			$this->render('index',array(
			'materiales'=>$materiales,'imagenes'=>$imagenes,'tipos'=>$tipos,'piezas'=>$piezas,'valorpieza'=>$valorPieza, 'terminaciones'=>$terminaciones, 'tamanos'=>$tamanos, 'presupuesto'=>$presupuesto
			));
		}else{
			$this->render('index',array(
			'materiales'=>$materiales,'imagenes'=>$imagenes,'tipos'=>$tipos,'piezas'=>$piezas,'valorpieza'=>$valorPieza, 'terminaciones'=>$terminaciones, 'tamanos'=>$tamanos
			));
		}		
	}

	public function actionGenerar(  ){
		if( isset($_POST['Presupuesto']) ){
			$presupuesto = new Presupuesto;
			$presupuesto->attributes = $_POST['Presupuesto'];

			$criteria = new CDbCriteria;
			$criteria->compare('id',$presupuesto->id);
			$presupuesto = Presupuesto::model()->find($criteria);			

			//calcular precio total de todas las piezas
			$criteria=new CDbCriteria;                      
       		$criteria->compare('id_presupuesto',$presupuesto->id);  
        	$criteria->select = '*';
        	$piezas = Valorpieza::model()->findAll($criteria);
        	$total = 0;
            foreach ($piezas as $key => $pieza){
          		$total = $total + ($pieza->precio * $pieza->cantidad);
          		//si hay que añadir algo al precio total, sobre el total del presupuesto, se añade aquí          		
            }
            $presupuesto->total = $total;

            //Generar el PDF
            $this->creaPdf($presupuesto);	
		}	
	}

	public function actionTipos( $id ){
		$criteria=new CDbCriteria;               		
        $criteria->compare('id_material',$id);     		
        $criteria->select = '*';
		$tipos = Tipo::model()->findAll($criteria);

		$this->render( 'tipos',array('tipos'=>$tipos) );
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Presupuesto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Presupuesto']))
			$model->attributes=$_GET['Presupuesto'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Presupuesto the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Presupuesto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	protected function calcularPrecioUnitarioPieza( $valorPieza, $numeropiezas ){
		$precio = 0;

		//precio de la pieza del tamaño dado:
		$preciounitario = Preciounitario::model()->find('id_tipo = '.$valorPieza->id.' AND id_tamano = '.$valorPieza->id_tamano );

        //tamaño en metros de todas las piezas
        $tamanoreal = $numeropiezas * $tamano->tamanopieza;

        //precio de los metros correspondientes
		$precio = $tamanoreal * $preciounitario->precio;

		return $precio;

	}

	protected function calcularPesoPiezas( $valorPieza, $numeropiezas ){
		/*****^ PESO DEL PEDIDO +++*/

		$tipo = Tipo::model()->find('id ='.$valorPieza->id_tipo);

		$tamano = Tamano::model()->find('id = '.$valorPieza->id_tamano);

    	//$peso = 0;
		//	$tamanocubico = 0.0036;//  tabla : "ehp_tamano",  y el dato en "tamanocubico"

		//	$masavolumica = 2700;// tabla : "ehp_tipos",  y el dato en "masa_volumica"


		$pesopieza = $tamano->tamanocubico * $tipo->masavolumica * 1000;

		return $pesopieza * $numeropiezas;

	}

	protected function calcularNumeroPiezas( $cantidad, $tamano ){
		return $cantidad % $tamano;
	}


	public function creaPdf( $idpresupuesto ){
		$presupuestoPdf = new Presupuesto;

		$presupuestoPdf = Presupuesto::model()->find('id = '.$idpresupuesto);
		/*
		$presupuestoPdf = $presupuesto;*/

		# mPDF
		$mPDF1 = Yii::app()->ePdf->mpdf();

		# You can easily override default constructor's params
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		$mPDF1->SetCreator('Proston.es');
		$title = 'Proston.es';

		# Load a stylesheet
		$stylesheet = file_get_contents(Yii::getPathOfAlias('webroot.themes')."/blackboot/css/bootstrap.css");
		$mPDF1->WriteHTML($stylesheet, 1);

		# Renders image
		$mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.img').'/logo.png' ));

		# render (full page)
		$mPDF1->WriteHTML($this->renderPartial('pdf', array('presupuesto'=>$presupuestoPdf),true));			

		//ALMACENAR EL CÓDIGO EN LA BD PARA RELACIONARLO CON EL USUARIO QUE COMPRA LA PROMOCIÓN
		//$model->referencia = $clave;
		//$model->save();
		# Outputs ready PDF
		//$mPDF1->Output(); DESCOMENTAR PARA GENERAR EL PDF		
		$this->debug($presupuestoPdf);
		$this->render('pdf',array('presupuesto'=>$presupuestoPdf));
		//$this->redirect(Yii::app()->request->urlReferrer);
	}
	
	

	/**
	 * Performs the AJAX validation.
	 * @param Presupuesto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='presupuesto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/* Used to debug variables*/
	protected function Debug($var){
		$bt = debug_backtrace();
		$dump = new CVarDumper();
		$debug = '<div style="display:block;background-color:gold;border-radius:10px;border:solid 1px brown;padding:10px;z-index:10000;"><pre>';
		$debug .= '<h4>function: '.$bt[1]['function'].'() line('.$bt[0]['line'].')'.'</h4>';
		$debug .=  $dump->dumpAsString($var);
		$debug .= "</pre></div>\n";
		Yii::app()->params['debugContent'] .=$debug;
	}
}