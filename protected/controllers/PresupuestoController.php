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
				'actions'=>array('index','view','tipos','generar','ajaxPreciounitario', 'ajaxPrecioHuella','ajaxTamanos','ajaxHuellas','ajaxTerminaciones','ajaxPrecioTermCara'),
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
				Yii::app()->user->setFlash('success', "- Ha añadido un material al presupuesto correctamente.<br>- Añada otro material adicional o continue con el presupuesto en la barra lateral derecha en <strong>Tu presupuesto</strong> ");
				//$this->render('/presupuesto/index',array('valorpieza'=>$model));				
			}else{

			}

			$tamano = Tamano::model()->find('id = '.$valorPieza->id_tamano);	

			//NUMERO DE PIEZAS NECESARIAS
			switch ($valorPieza->id_pieza) {
				case 1: //baldosas
					$tamano2 = $tamano->tamanopieza;
					$numeropiezas = $this->calcularNumeroPiezas($valorPieza->cantidad, $tamano2);
					break;
				case 2: // rodapies
					$tamano2 = $tamano->tamanolineal;
					$numeropiezas = $this->calcularNumeroPiezas($valorPieza->cantidad, $tamano2);
					break;
				case 3: // huellas
					$numeropiezas = $valorPieza->cantidad;
					break;
				case 4: // tabicas
					$numeropiezas = $valorPieza->cantidad;
					break;					
				case 5: // zanquines
					$numeropiezas = $valorPieza->cantidad;
					break;			
				default:
					$tamano2 = $tamano->tamanopieza;
					$numeropiezas = $valorPieza->cantidad;
					break;
			}
			 
            $valorPieza->numeropiezas = $numeropiezas;


        	//PRECIO DE LA PIEZA DEL TAMAÑO DADO
        	if( $valorPieza->id_pieza == 1 || $valorPieza->id_pieza == 2  || $valorPieza->id_pieza == 5   ){
				$criteria=new CDbCriteria;        
	        	$criteria->compare('id_tipo',$valorPieza->id_tipo);
	        	$criteria->addCondition( 'id_tamano >= '.$valorPieza->id_tamano );	
	        	$criteria->select = '*';
				$preciounitario = Preciounitario::model()->find( $criteria );

				$valorPieza->preciounitario = $preciounitario->precio;

			}
			if( $valorPieza->id_pieza == 3 || $valorPieza->id_pieza == 4   ){

				$largoi = strip_tags($_POST['largo']);
				$anchoi = strip_tags($_POST['ancho']);
				$grosor = strip_tags($_POST['grosor'])+1;
				$valorPieza->largo = $largoi;
				$valorPieza->ancho = $anchoi;
				$valorPieza->grosor = $grosor;
				$criteria=new CDbCriteria;        
	        	$criteria->compare('id_tipo',$valorPieza->id_tipo);
	        	$criteria->addCondition( 'id_tamano >= 8');	
	        	$criteria->select = '*';
				$preciounitario = Preciounitario::model()->find( $criteria );
				$largo = $largoi /100;
				$ancho = $anchoi/100;
				if ($largo<= 1.15 && $grosor == 2){
					$preciobasehuella = 1.7 * $preciounitario->precio;
				}
				if ($largo <= 1.15 && $grosor == 3){
					$preciobasehuella = 2.04 * $preciounitario->precio;
				}
				if ($largo > 1.15 && $grosor == 2){
					$preciobasehuella = 1.955 * $preciounitario->precio;
				}
				if ($largo > 1.15 && $grosor == 3){
					$preciobasehuella = 2.346 * $preciounitario->precio;
				}

				$areahuella = $largo * $ancho;
				$preciohuella= ($largo * $ancho * $preciobasehuella) + ($largo * 2.8);
				

				$valorPieza->preciounitario = $preciohuella;

			}


        	//TAMAÑO EN METROS de todas las piezas. m2 baldosa ; ml rodapies

			switch ($valorPieza->id_pieza) {
				case 1: //baldosas
					$tamano3 = $tamano->tamanopieza;
					break;
				case 2: // rodapies
					$tamano3 = $tamano->tamanolineal;
					break;
				case 3: //huellas
					$tamano3 = $areahuella;
					break; 
				case 4: //tabicas
					$tamano3 = $areahuella;
					break; 
				case 4: //zanquines
					$tamano3 = $areahuella;
					break; 					
				default:
					$tamano3 = $tamano->tamanopieza;
					break;
			}

        	$tamanoreal = $numeropiezas * $tamano3;


        	$valorPieza->tamanoreal = $tamanoreal;

        	//precio de los metros correspondientes
			$precio = $tamanoreal * $valorPieza->preciounitario;

			//guardo las variables desglosadas
			$preciopieza = $precio;


                  if( $valorPieza->id_tipo_canto== 1 ){
                    $longitudcanto = $valorPieza->tamano->cantolargo;
                 }else{
                   $longitudcanto = $valorPieza->tamano->cantocorto;
                 } 



          if( $valorPieza->id_pieza == 1 ){
                        $tareal = $valorPieza->numeropiezas * $longitudcanto;

                        
                     }  







			//  TERMINACION  Optimizarla reduciendo texto
				switch ($valorPieza->id_pieza) {
				case 1: //baldosas
					$precioterminacion=$valorPieza->terminacion->precio * $tamanoreal;
					$precioterminacionCanto=$valorPieza->terminacioncanto->precio * $tareal;
					$precioterminacionArista=$valorPieza->terminacionarista->precio * $tamanoreal;

					break;
				case 2: // rodapies
					$precioterminacion=$valorPieza->terminacion->precio * ($numeropiezas * $tamano->tamanopieza) ;
					$precioterminacionCanto=0;
					$precioterminacionArista=0;
					break;

				case 3: //huellas
					$precioterminacion=$valorPieza->terminacion->precio * $tamanoreal;
					$precioterminacionCanto=0;
					$precioterminacionArista=0;
					break;
				case 4: //tabicas
					$precioterminacion=$valorPieza->terminacion->precio * $tamanoreal;
					$precioterminacionCanto=0;
					$precioterminacionArista=0;
					break;
				case 5: //zanquines
					$precioterminacion=$valorPieza->terminacion->precio * $tamanoreal;
					$precioterminacionCanto=0;
					$precioterminacionArista=0;
					break;				
				default:
					$precioterminacion=$valorPieza->terminacion->precio * $tamanoreal;
					$precioterminacionCanto=0;
					$precioterminacionArista=0;
					break;
			}


		


		

			//sumo el precio de la terminación

			$precio = $precio + $precioterminacion + $precioterminacionCanto + $precioterminacionArista;

			$valorPieza->precio = $precio;			

			//CALCULAR EL PESO
			$peso = $this->calcularPesoPiezas( $valorPieza, $numeropiezas);

			$valorPieza->peso = $peso;	

			//se añade el 3.5%
			$pesotransporte = $peso + (3.5*$peso/100); 	
			
			//Se suma el precio del transporte (por palés)	
			$criteria3 = new CdbCriteria;
			$criteria3->select='max(pesomaximo) AS pesomaximo';
			$pale = Pale::model()->find( $criteria3 );		

			$pesomaximo = $pale['pesomaximo'];

			
			//si el peso supera los kg del palé con más capacidad, hay que coger varios palés
			$entero = 1;

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

			$valorPieza->pales = $entero;
			$preciotransporte = $this->damePrecioPale( $valorPieza->tipo->provincia->zona->id, $valorPieza->provincia->zona->id, $pesotransporte );
			}

		

			$valorPieza->preciotransporte = $preciotransporte ;

			$valorPieza->precio = $precio ;			
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
					'precioajax' => $preciounitario->precio,'tipo' => $preciounitario->tamano->pieza->id, 'nombretipo' => $preciounitario->tamano->pieza->nombre, 'tamano' => $preciounitario->tamano->nombre, 'nombre' => $preciounitario->tipo->nombre ), true, false);

		Yii::app()->end();
	}
	public function actionAjaxPrecioHuella(){

		//HACER CALCULO DE LAS HUELLAS
		$id_tipo = strip_tags($_POST['id_tipo']);
		$id_pieza = strip_tags($_POST['id_pieza']);

		$largo_huella = strip_tags($_POST['largo'])/100;
		$ancho_huella = strip_tags($_POST['ancho'])/100;
		$grosor = strip_tags($_POST['grosor']);
		$criteria=new CDbCriteria; 
		$criteria->addCondition( 'id_tamano = 8 AND id_tipo = '.$id_tipo);	
        $criteria->select = '*';
		$preciounitario = Preciounitario::model()->find( $criteria );
		$criteria2=new CDbCriteria; 
		$criteria2->addCondition( 'id = '.$id_pieza);	
        $criteria2->select = '*';
		$pieza = Pieza::model()->find( $criteria2 );		



		if ($largo_huella <= 1.15 && $grosor == 1){
			$preciobasehuella = 1.7 * $preciounitario->precio;
		}
		if ($largo_huella <= 1.15 && $grosor == 2){
			$preciobasehuella = 2.04 * $preciounitario->precio;
		}
		if ($largo_huella > 1.15 && $grosor == 1){
			$preciobasehuella = 1.955 * $preciounitario->precio;
		}
		if ($largo_huella > 1.15 && $grosor == 2){
			$preciobasehuella = 2.346 * $preciounitario->precio;
		}
		

		$preciohuella= ($largo_huella * $ancho_huella * $preciobasehuella) + ($largo_huella * 2.8);
		
		echo $this->renderPartial('_ajaxPrecioHuella', array(
					'area' => $preciohuella, 'largohuella' => $largo_huella, 'anchohuella' => $ancho_huella, 'grosor' => $grosor, 'nombre' => $preciounitario->tipo->nombre,'nombrepieza' => $pieza->nombre), true, false);

		Yii::app()->end();
	}	
	public function actionAjaxPrecioTermCara(){
		$id_terminacion = strip_tags($_POST['id_terminacion']);
		$criteria=new CDbCriteria;        
        //$criteria->compare('id_pieza',$id_pieza);//no se
        $criteria->addCondition( 'id = '.$id_terminacion );	//no se
        $criteria->select = '*';
		$preciounitariocara = Terminacion::model()->find( $criteria );
		//$this->renderPartial('index',array('preciounitario'=>$preciounitario))
		//$this->renderPartial('_ajaxPreciounitario', array('preciounitario'=>$preciounitario));

		echo $this->renderPartial('_ajaxPrecioTermCara', array(
					'precioajax' => $preciounitariocara->precio), true, false);

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
	public function actionAjaxHuellas(){
		$id_tipo = strip_tags($_POST['id_tipo']);
		$id_pieza = strip_tags($_POST['id_pieza']);
		$criteria=new CDbCriteria; 
		$criteria->addCondition( 'id_pieza = '.$id_pieza );
        $criteria->select = '*';
		$tamanos = Tamano::model()->findAll( $criteria );

		echo $this->renderPartial('_ajaxHuellas', array(
					'tamanos' => $tamanos, 'id_pieza' => $id_pieza), true, false);

		Yii::app()->end();
	}

	public function actionAjaxTerminaciones(){
		$id_material = strip_tags($_POST['id_material']);
		$id_pieza = strip_tags($_POST['id_pieza']);
		$id_tamano = strip_tags($_POST['id_tamano']);

		$criteria=new CDbCriteria;        
        $criteria->addCondition( 'id_material = '.$id_material .' AND formato = '.$id_pieza.' AND tipo = 1');
        $criteria->select = '*';
		$terminaciones = Terminacion::model()->findAll( $criteria );

		$criteria2=new CDbCriteria;        
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

		$criteria4=new CDbCriteria;        
        
       	$criteria4->addCondition( 'id = '.$id_tamano );
        $criteria4->select = '*';
		$tamanos = Tamano::model()->findAll( $criteria4 );

		

		echo $this->renderPartial('_ajaxTerminaciones', array(
					'terminaciones' => $terminaciones, 'terminacionesArista' => $terminacionesArista,'terminacionesCanto' => $terminacionesCanto,'tipo_pieza' => $id_pieza,'tamanos' => $tamanos), true, false);

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

		if ($valorPieza->id_pieza == 1 || $valorPieza->id_pieza == 2 || $valorPieza->id_pieza == 5) {

			$pesopieza = $tamano->tamanocubico * $tipo->masa_volumica * 1000;
		
	}else{

		$tamanocubico = ($valorPieza->largo/100) * ($valorPieza->ancho/100) * ($valorPieza->grosor/100);
		//$pesopieza = $tamanocubico * $tipo->masa_volumica * 1000;
		$pesopieza =$tamanocubico * $tipo->masa_volumica * 1000;
	}

    	//$peso = 0;
		//	$tamanocubico = 0.0036;//  tabla : "ehp_tamano",  y el dato en "tamanocubico"

		//	$masavolumica = 2700;// tabla : "ehp_tipos",  y el dato en "masa_volumica"

	

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

		# Renders image. ESTO DABA ERROR
		//$mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.img').'/logo.png' ));

		# render (full page)
		$mPDF1->WriteHTML($this->renderPartial('pdf', array('presupuesto'=>$presupuestoPdf),true));		

		# Outputs ready PDF
		$mPDF1->Output();	

		$to = $presupuestoPdf->email;
		$cco= 'info@proston.es';		
		$from = 'info@proston.es';		
		$subject = 'Presupuesto ' . $presupuestoPdf->id  . ' '. $presupuestoPdf->nombre . ' - www.proSton.es';		
		$message = 'Este email incluye el presupuesto en pdf creado en www.proston.es';	

		$mPDF1->Output(Yii::getPathOfAlias('webroot.pdfs'). DIRECTORY_SEPARATOR .'presu'. $presupuestoPdf->id .'.pdf', EYiiPdf::OUTPUT_TO_FILE);
		$rutapdf  = Yii::getPathOfAlias('webroot.pdfs'). DIRECTORY_SEPARATOR .'presu'. $presupuestoPdf->id .'.pdf';
		$this->mailsend($to,$cco,$from,$subject,$message,$rutapdf); 
		$this->render('gracias', array('presupuesto'=>$presupuestoPdf));
		/*$rutapdf  = Yii::getPathOfAlias('webroot.pdfs') .
          DIRECTORY_SEPARATOR . 'presu' .
         $presupuestoPdf->id . '.pdf';*/
         
	}


	public function mailsend($to,$cco,$from,$subject,$message,$rutapdf){

       

        $mail=Yii::app()->Smtpmail;
        $mail->SetFrom($from, 'Dept. comercial Proston');
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->AddAddress($to, "");
        $mail->AddBCC($cco);
        $mail->AddAttachment($rutapdf);
       


        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }else {
            echo "Message sent!";
        }
        //$this->render('generado');
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