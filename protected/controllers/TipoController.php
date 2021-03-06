<?php

class TipoController extends Controller
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
				'actions'=>array('index','view','verTiposMaterial','verCaracteristicas'),
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
		$model=new Tipo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tipo']))
		{
			$model->attributes=$_POST['Tipo'];
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

		if(isset($_POST['Tipo']))
		{
			$model->attributes=$_POST['Tipo'];
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
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Tipo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tipo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tipo']))
			$model->attributes=$_GET['Tipo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionVerTiposMaterial( $id ){
		$criteria=new CDbCriteria;               		
        $criteria->compare('id_material',$id);     		
        $criteria->select = '*';
		$tipos = Tipo::model()->findAll($criteria);
		$material=Material::model()->find('id='.$id);
		$this->render( 'verTiposMaterial',array('tipos'=>$tipos,'material'=>$material) );
	}

	public function actionVerCaracteristicas( $id ){
		$criteria=new CDbCriteria;               		
        $criteria->compare('id',$id);     		
        $criteria->select = '*';
		$tipo = Tipo::model()->find($criteria);
		
		$criteria2=new CDbCriteria;  

        $criteria2->select = '*';
        $criteria2->addInCondition('id_material',array(':id_material'=>'2')); 
		$tipos = Tipo::model()->findAll($criteria2);
		


		$criteria3=new CDbCriteria; 
		$criteria3->select = '*';
        $criteria3->addInCondition('id_material',array(':id_material'=>'4')); 
		$tipos2 = Tipo::model()->findAll($criteria3);

		$criteria4=new CDbCriteria; 
		$criteria4->compare('id_tipo',$id);     		
        $criteria4->select = '*'; 
        $criteria4->order = 'orden ASC';
		$preciosunitarios = Preciounitario::model()->findAll($criteria4);

		$this->render( 'verCaracteristicas',array('tipo'=>$tipo,'tipos'=>$tipos,'tipos2'=>$tipos2,'preciosunitarios'=>$preciosunitarios) );
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tipo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tipo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tipo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tipo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
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
