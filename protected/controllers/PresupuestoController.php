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
				'actions'=>array('index','view','tipos','generar','ajaxPreciounitario','ajaxTamanos','ajaxTerminaciones'),
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
		$biselados = Biselado::model()->findAll();
		$provincias = Provincia::model()->findAll();

		if( isset($_POST['Valorpieza']) ){			

			//$pieza = new Valorpieza;			
			$valorPieza->attributes=$_POST['Valorpieza'];	
			
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
				$valorPieza->id = $valorPieza->getPrimaryKey();
				Yii::app()->user->setFlash('success', "¡Añadido al presupuesto!");
				//$this->render('/presupuesto/index',array('valorpieza'=>$model));				
			}else{

			}

			$tamano = Tamano::model()->find('id = '.$valorPieza->id_tamano);	

			//número de piezas necesarias
			switch ($valorPieza->id_pieza) {
				case 1: //baldosas
					$tamano2 = $tamano->tamanopieza;
					break;
				case 2: // rodapies
					$tamano2 = $tamano->tamanolineal;
					break;
				
				default:
					$tamano2 = $tamano->tamanopieza;
					break;
			}
			 
            $numeropiezas = $this->calcularNumeroPiezas($valorPieza->cantidad, $tamano2);
            
        	

        	$valorPieza->numeropiezas = $numeropiezas;

        	//precio de la pieza del tamaño dado:
			$criteria=new CDbCriteria;        
        	$criteria->compare('id_tipo',$valorPieza->id_tipo);
        	$criteria->addCondition( 'id_tamano >= '.$valorPieza->id_tamano );	
        	$criteria->select = '*';
			$preciounitario = Preciounitario::model()->find( $criteria );

			$valorPieza->preciounitario = $preciounitario->precio;

        	//tamaño en metros de todas las piezas. m2 baldosa ; ml rodapies

			switch ($valorPieza->id_pieza) {
				case 1: //baldosas
					$tamano3 = $tamano->tamanopieza;
					break;
				case 2: // rodapies
					$tamano3 = $tamano->tamanolineal;
					break;
				
				default:
					$tamano3 = $tamano->tamanopieza;
					break;
			}

        	$tamanoreal = $numeropiezas * $tamano3;


        	$valorPieza->tamanoreal = $tamanoreal;

        	//precio de los metros correspondientes
			$precio = $tamanoreal * $preciounitario->precio;

			//guardo las variables desglosadas
			$preciopieza =$precio;

			//  TERMINACION  Optimizarla reduciendo texto
				switch ($valorPieza->id_pieza) {
				case 1: //baldosas
					$precioterminacion=$valorPieza->terminacion->precio * $tamanoreal;
					$precioterminacionCanto=$valorPieza->terminacioncanto->precio * $numeropiezas * $tamano->longitud;
					$precioterminacionArista=$valorPieza->terminacionarista->precio * $tamanoreal;

					break;
				case 2: // rodapies
					$precioterminacion=$valorPieza->terminacion->precio * $tamanoreal * $tamano->tamanopieza;
					$precioterminacionCanto=0;
					$precioterminacionArista=0;
					break;
				
				default:
					$precioterminacion=$valorPieza->terminacion->precio * $tamanoreal;
					$precioterminacionCanto=0;
					$precioterminacionArista=0;
					break;
			}


		


			$this->debug($precioterminacion);
			$this->debug($precioterminacionCanto);
			$this->debug($precioterminacionArista);

			//sumo el precio de la terminación

			$precio = $precio + $precioterminacion + $precioterminacionCanto + $precioterminacionArista;

			$valorPieza->precio = $precio;			

			//CALCULAR EL PESO
			$peso = $this->calcularPesoPiezas( $valorPieza, $numeropiezas);

			$valorPieza->peso = $peso;	

			//se añade el 20%
			$pesotransporte = $peso + (10*$peso/100); 	
			
			//Se suma el precio del transporte (por palés)	
			$criteria3 = new CdbCriteria;
			$criteria3->select='max(pesomaximo) AS pesomaximo';
			$pale = Pale::model()->find( $criteria3 );		

			$pesomaximo = $pale['pesomaximo'];

			
			//si el peso supera los kg del palé con más capacidad, hay que coger varios palés
<<<<<<< HEAD
			$entero = 0;
=======
			$entero = 1;
>>>>>>> 7b91cf8cd1b1f154bc1575820c3bfa299efe1534
			if( $pesotransporte > $pesomaximo ){
				$entero = floor( $pesotransporte / $pesomaximo );
				$decimal = $pesotransporte / $pesomaximo - $entero;
				$valorPieza->pales = $entero + 1;
 
				$kilosdecimal = $decimal * $pesomaximo;
				

				
				//CALCULO DEL ENTERO
				$precioindividual = 0;
				for ($i = 1; $i <= $entero; $i++) {	

					$precioindividual = $precioindividual + $this->damePrecioPale( $valorPieza->tipo->provincia->zona->id, $valorPieza->provincia->zona->id, $pesomaximo );
				}

			$preciodecimal = $this->damePrecioPale( $valorPieza->tipo->provincia->zona->id, $valorPieza->provincia->zona->id, $kilosdecimal );
 

				$preciotransporte = $precioindividual + $preciodecimal;

				//CALCULO DEL DECIMAL
				//$precioultimo = damePrecioPale( $valorPieza->tipo->provincia->zona->id, $valorPieza->provincia->zona->id, $pesotransporte );
			}else{

	
			$preciotransporte = $this->damePrecioPale( $valorPieza->tipo->provincia->zona->id, $valorPieza->provincia->zona->id, $pesotransporte );
			}

		

			$valorPieza->preciotransporte = $preciotransporte;

			$valorPieza->precio = $precio + $preciotransporte;			
			$valorPieza->update();

			$this->render('index',array(
			'materiales'=>$materiales,'imagenes'=>$imagenes,'tipos'=>$tipos,'piezas'=>$piezas,'valorpieza'=>$valorPieza, 'terminaciones'=>$terminaciones, 'tamanos'=>$tamanos, 'presupuesto'=>$presupuesto, 'biselados'=>$biselados,'provincias'=>$provincias,'precioterminacion'=>$precioterminacion,'preciopieza'=>$preciopieza,'preciotransporte'=>$preciotransporte, 'entero'=>$entero
			));
		}else{
			$this->render('index',array(
			'materiales'=>$materiales,'imagenes'=>$imagenes,'tipos'=>$tipos,'piezas'=>$piezas,'valorpieza'=>$valorPieza, 'terminaciones'=>$terminaciones, 'tamanos'=>$tamanos, 'biselados'=>$biselados,'provincias'=>$provincias
			));
		}	

	}

	public function actionGenerar( $id ){		
		//$presupuesto = new Presupuesto;
		if( isset($_POST['Presupuesto']) ){		
			$presupuesto = $this->loadModel($id);			
			$presupuesto->attributes = $_POST['Presupuesto'];
			
			if( $presupuesto->validate() ) {
                try {
                    if ($presupuesto->save()){
                       
                    }else{
                        print_r( $presupuesto->getErrors());  
                    }                    
               	}catch (CException $e){
                        echo $e;
                }
            }		

			//calcular precio total de todas las piezas
			$criteria2=new CDbCriteria;                      
       		$criteria2->compare('id_presupuesto',$presupuesto->id);  
        	$criteria2->select = '*';
        	$piezas = Valorpieza::model()->findAll($criteria2);
        	$total = 0;
            foreach ($piezas as $key => $pieza){
          		$total = $total + ($pieza->precio * $pieza->cantidad);
          		//si hay que añadir algo al precio total, sobre el total del presupuesto, se añade aquí          		
            }
            $presupuesto->total = $total;

            $presupuesto->update();

            //Generar el PDF
            $this->creaPdf( $presupuesto );	
		}	
	}

	public function actionTipos( $id ){
		$criteria=new CDbCriteria;               		
        $criteria->compare('id_material',$id);     		
        $criteria->select = '*';
		$tipos = Tipo::model()->findAll($criteria);

		$this->render( 'tipos',array('tipos'=>$tipos) );
	}

	public function actionAjaxPreciounitario(){
		$id_tipo = strip_tags($_POST['id_tipo']);
		$id_tamano = strip_tags($_POST['id_tamano']);
		$criteria=new CDbCriteria;        
        //$criteria->compare('id_pieza',$id_pieza);//no se
        $criteria->addCondition( 'id_tamano = '.$id_tamano .' AND id_tipo = '.$id_tipo);	//no se
        $criteria->select = '*';
		$preciounitario = Preciounitario::model()->find( $criteria );
		//$this->renderPartial('index',array('preciounitario'=>$preciounitario))
		//$this->renderPartial('_ajaxPreciounitario', array('preciounitario'=>$preciounitario));

		echo $this->renderPartial('_ajaxPreciounitario', array(
					'precioajax' => $preciounitario->precio), true, false);

		Yii::app()->end();
	}

	public function actionAjaxTamanos(){
		$id_tipo = strip_tags($_POST['id_tipo']);
		$id_pieza = strip_tags($_POST['id_pieza']);

		$criteria=new CDbCriteria;        
        //$criteria->compare('id_pieza',$id_pieza);//no se
        $criteria->addCondition( 'id_pieza = '.$id_pieza );	//no se
        $criteria->join = 'INNER JOIN ehp_preciosunitarios ON t.id = ehp_preciosunitarios.id_tamano AND ehp_preciosunitarios.id_tipo = '.$id_tipo.' AND ehp_preciosunitarios.precio IS NOT NULL';
        $criteria->select = '*';
		$tamanos = Tamano::model()->findAll( $criteria );
		//$this->renderPartial('index',array('preciounitario'=>$preciounitario))
		//$this->renderPartial('_ajaxPreciounitario', array('preciounitario'=>$preciounitario));

		echo $this->renderPartial('_ajaxTamanos', array(
					'tamanos' => $tamanos), true, false);

		Yii::app()->end();
	}


	public function actionAjaxTerminaciones(){
		$id_material = strip_tags($_POST['id_material']);
		$id_pieza = strip_tags($_POST['id_pieza']);

		$criteria=new CDbCriteria;        
        //$criteria->compare('id_pieza',$id_pieza);//no se
       	$criteria->addCondition( 'id_material = '.$id_material .' AND formato = '.$id_pieza.' AND tipo = 1');
        $criteria->select = '*';
		$terminaciones = Terminacion::model()->findAll( $criteria );

		$criteria2=new CDbCriteria;        
        //$criteria->compare('id_pieza',$id_pieza);//no se
       	$criteria2->addCondition( 'id_material = '.$id_material .' AND formato = '.$id_pieza.' AND tipo = 2');
        $criteria2->select = '*';
		$terminacionesArista = Terminacion::model()->findAll( $criteria2 );

		$criteria3=new CDbCriteria;        
        //$criteria->compare('id_pieza',$id_pieza);//no se
       	$criteria3->addCondition( 'id_material = '.$id_material .' AND formato = '.$id_pieza.' AND tipo = 3');
        $criteria3->select = '*';
		$terminacionesCanto = Terminacion::model()->findAll( $criteria3 );
		//$this->renderPartial('index',array('preciounitario'=>$preciounitario))
		//$this->renderPartial('_ajaxPreciounitario', array('preciounitario'=>$preciounitario));

		echo $this->renderPartial('_ajaxTerminaciones', array(
					'terminaciones' => $terminaciones, 'terminacionesArista' => $terminacionesArista,'terminacionesCanto' => $terminacionesCanto,'tipo_pieza' => $id_pieza), true, false);

		Yii::app()->end();
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
		/***** PESO DEL PEDIDO *****/

		$tipo = Tipo::model()->find('id ='.$valorPieza->id_tipo);

		$tamano = Tamano::model()->find('id = '.$valorPieza->id_tamano);

    	//$peso = 0;
		//	$tamanocubico = 0.0036;//  tabla : "ehp_tamano",  y el dato en "tamanocubico"

		//	$masavolumica = 2700;// tabla : "ehp_tipos",  y el dato en "masa_volumica"

		$pesopieza = $tamano->tamanocubico * $tipo->masa_volumica * 1000;

		return $pesopieza * $numeropiezas;

	}

	protected function calcularNumeroPiezas( $cantidad, $tamano ){
		$piezas = $cantidad / $tamano;		
		return ceil($piezas);
	}


	public function creaPdf( $presupuestoPdf ){
		//$presupuestoPdf = new Presupuesto;

		//$presupuestoPdf = Presupuesto::model()->find('id = '.$idpresupuesto);
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
		
		$mPDF1->Output();

		# Outputs ready PDF
		$this->enviarEmail( $presupuestoPdf->email, $path ); //DESCOMENTAR PARA GENERAR EL PDF				
		//$this->redirect(Yii::app()->request->urlReferrer);
	}
	
	public function creaPdf2( $presupuestoPdf ){
		# PDF
		$html2pd = Yii::app()->ePdf->HTML2PDF();

		# You can easily override default constructor's params
		$html2pd = Yii::app()->ePdf->mpdf('', 'A4');
		$title = 'Proston.es';

		# Load a stylesheet
		$stylesheet = file_get_contents(Yii::getPathOfAlias('webroot.themes')."/blackboot/css/bootstrap.css");
		$html2pd->WriteHTML($stylesheet, 1);

		# Renders image
		$html2pd->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.img').'/logo.png' ));

		# render (full page)
		$html2pd->WriteHTML($this->renderPartial('pdf', array('presupuesto'=>$presupuestoPdf),true));			

		# Outputs ready PDF
		$html2pd->Output(); //DESCOMENTAR PARA 

		enviarEmail2( $html2pdf );
	}

	protected function enviarEmail( $email, $path ){
		$message = 'Le enviamos el presupuesto que ha solicitado en Proston.es';
		Yii::app()->mailer->Host = 'mail.proston.es';
		Yii::app()->mailer->IsSMTP();
		Yii::app()->mailer->From = 'info@proston.es';
		Yii::app()->mailer->FromName = 'Proston.es';
		Yii::app()->mailer->AddReplyTo('info@proston.es');
		Yii::app()->mailer->AddAddress( $email );
		Yii::app()->mailer->Subject = 'Presupuesto Proston.es';
		Yii::app()->mailer->Body = $message;
		//adjunto el pdf
		AddAttachment($path, $name = "Presupuesto", $encoding = "base64",$type = "application/octet-stream");
		Yii::app()->mailer->Send();
	}
	
	protected function enviarEmail2( $html2pdf ){
		# Example from HTML2PDF wiki: Send PDF by email
        $content_PDF = $html2pdf->Output('', EYiiPdf::OUTPUT_TO_STRING);
        require_once(dirname(__FILE__).'/pjmail/pjmail.class.php');
        $mail = new PJmail();
        $mail->setAllFrom('webmaster@my_site.net', "My personal site");
        $mail->addrecipient('mail_user@my_site.net');
        $mail->addsubject("Example sending PDF");
        $mail->text = "This is an example of sending a PDF file";
        $mail->addbinattachement("my_document.pdf", $content_PDF);
        $res = $mail->sendmail();
	}

	protected function damePrecioPale( $procedencia, $destino, $peso ){
		$criteria2 = new CdbCriteria;
		$criteria2->addCondition( 'id_zona_destino = '.$destino. ' AND id_zona_procedencia = '.$procedencia.' AND pesomaximo >= '.$peso );

		$preciotransporte = Preciotransporte::model()->find( $criteria2 );

		

		return $preciotransporte->precio;
		
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