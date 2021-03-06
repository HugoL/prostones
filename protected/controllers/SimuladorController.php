<?php 
class SimuladorController extends Controller {

	public $layout = '//layouts/column2';

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
				'actions'=>array('index','tipos','caracteristicas'),
				'users'=>array('*'),
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
	public function actionIndex($id)
	{
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



		$this->render( 'index',array('tipo'=>$tipo,'tipos'=>$tipos,'tipos2'=>$tipos2) );
	}

	public function actionTipos( $id ){
		$materiales = Material::model()->findAll();
		$imagenes = array();
		$i = 0;
		foreach ($materiales as $key => $material) {
				$array = array(Yii::app()->request->baseUrl.Yii::app()->params['imagenes'].$material->imagen, 'alt'=>$material->nombre);
				$imagenes[$i] = $array;
				$i++;
			}	

		$criteria=new CDbCriteria;               		
        $criteria->compare('id_material',$id);     		
        $criteria->select = '*';
		$tipos = Tipo::model()->findAll($criteria);
        
		$this->render( 'index',array('tipos'=>$tipos,'materiales'=>$materiales,'imagenes'=>$imagenes) );
	}

	public function actionCaracteristicas( $id ){
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



		$this->render( 'verCaracteristicas',array('tipo'=>$tipo,'tipos'=>$tipos,'tipos2'=>$tipos2) );
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
?>