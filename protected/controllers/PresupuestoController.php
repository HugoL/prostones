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
				'actions'=>array('index','view','tipos'),
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
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex( $idMaterial = null )
	{
		$materiales = Material::model()->findAll();
		$imagenes = array();
		$i = 0;

		foreach ($materiales as $key => $material) {
				$array = array(Yii::app()->request->baseUrl.Yii::app()->params['imagenes'].$material->imagen, 'alt'=>$material->nombre);
				$imagenes[$i] = $array;
				$i++;
		}

		if( !isset($idMaterial) ){ 
			$tipos = null;
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
			//Debug($valorpieza);

			// CALCULAR //
			//CALCULAR EL PRECIO DE LA PIEZA
			$valorPieza->precio = 100;

			//ANTES DE PODER ALMACENAR LA PIEZA HAY QUE CREAR EL PRESUPUESTO, PORQUE NO SE PUEDE CREAR UNA PIEZA QUE NO PERTENEZCA A UN PRESUPUESTO
			if( empty($valorPieza->id_presupuesto) || $valorPieza->id_presupuesto == 0 ){
				$presupuesto = new Presupuesto;
				if( !$presupuesto->save() ){
					Yii::app()->user->setFlash('danger', "¡Error al crear el presupuesto!");
					//$this->render('/presupuesto/index',array('valorpieza'=>$model));
				}
				$valorPieza->id_presupuesto = $presupuesto->getPrimaryKey();
			}

			

			if($valorPieza->save()){
				Yii::app()->user->setFlash('success', "¡Añadido al presupuesto!");
				//$this->render('/presupuesto/index',array('valorpieza'=>$model));				
			}

			// ******* //
			//$presupuesto = calcular( $valorPieza );

			$this->render('index',array(
			'materiales'=>$materiales,'imagenes'=>$imagenes,'tipos'=>$tipos,'piezas'=>$piezas,'valorpieza'=>$valorPieza, 'terminaciones'=>$terminaciones, 'tamanos'=>$tamanos, 'presupueseto'=>$presupuesto
			));
		}else{
			$this->render('index',array(
			'materiales'=>$materiales,'imagenes'=>$imagenes,'tipos'=>$tipos,'piezas'=>$piezas,'valorpieza'=>$valorPieza, 'terminaciones'=>$terminaciones, 'tamanos'=>$tamanos
			));
		}

		
	}

	public function actionTipos( $id ){
		$criteria=new CDbCriteria;               		
        $criteria->compare('id_material',$id);     		
        $criteria->select = '*';
		$tipos = Tipo::model()->findAll($criteria);

		$this->render( 'tipos',array('tipos'=>$tipos) );
	}

	public function calcular( $model ){		

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
			
			//CALCULAR EL PRECIO DE LA PIEZA
			$model->precio = 100;

			//ANTES DE PODER ALMACENAR LA PIEZA HAY QUE CREAR EL PRESUPUESTO, PORQUE NO SE PUEDE CREAR UNA PIEZA QUE NO PERTENEZCA A UN PRESUPUESTO
			if( empty($model->id_presupuesto) || $model->id_presupuesto == 0 ){
				$presupuesto = new Presupuesto;
				if( !$presupuesto->save() ){
					Yii::app()->user->setFlash('danger', "¡Error al crear el presupuesto!");
					return $presupuesto;
					//$this->render('/presupuesto/index',array('valorpieza'=>$model));
				}
				$model->id_presupuesto = $presupuesto->getPrimaryKey();
			}

			

			if($model->save()){
				Yii::app()->user->setFlash('success', "¡Añadido al presupuesto!");
				//$this->render('/presupuesto/index',array('valorpieza'=>$model));
				return $presupuesto;
			}
			return $presupuesto;
			//$this->render('/presupuesto/index',array('valorpieza'=>$model));
			
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

	
	protected function calcularPrecioUnitarioPieza( $tipomaterial, $pieza, $medida, $cantidad ){
		$precio = 0;
		//si tenemos una tabla con los precios que corresponden con el tipo de material, la pieza y el tamaño, lo consulto

		//ejemplo: $precio = tabla_preciosMedidas('Where id_tipomaterial = X AND id_medida = Y' );

		//si tenemos fórmula calculo el precio:

		//Valor del metro cuadrado del material
		$metrocua = 10;

		//Cojo el coeficiente del precio de la medida
		$coeficiente = 0.6;

		$precio = $metrocua * $coeficiente;

		return $precio;

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
