<?php

/**
 * This is the model class for table "ehp_tamano".
 *
 * The followings are the available columns in table 'ehp_tamano':
 * @property integer $id
 * @property string $nombre
 *
 * The followings are the available model relations:
 * @property Piezas[] $piezases
 * @property Valorpiezas[] $valorpiezases
 */
class Tamano extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ehp_tamano';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre,id_pieza', 'required'),
			array('nombre', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'pieza' => array(self::HAS_MANY, 'Pieza', 'id_tamano'),
			'valorpieza' => array(self::HAS_MANY, 'Valorpieza', 'id_tamano'),
			'pieza' => array(self::BELONGS_TO, 'Pieza', 'id_pieza'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'id_pieza' => 'Pieza',

		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('id_pieza',$this->id_pieza);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tamano the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

		private static $_items=array();
	public static function items($tipo)
	{
 		// Devuelve todos los ítems que forman el arreglo
	 if(!isset(self::$_items[$tipo]))
 	 self::loadItems($tipo);
 	return self::$_items[$tipo];
	}

	public static function item($tipo, $id)
	{
	 // Devuelve el ítem al que le corresponde el id
	 if(!isset(self::$_items[$tipo]))
	  self::loadItems($tipo);
	 return isset(self::$_items[$tipo][$id]) ? self::$_items[$tipo][$id] : false;
	}

	private static function loadItems($tipo)
	{
 	// Obtiene los registros
 	self::$_items[$tipo]=array();
 	$models=self::model()->findAll(array(
  	'order'=>'nombre',
 	));
	 self::$_items[$tipo][""]=""; // Descomentar para incluir un campo en blanco al inicio, para cuando el campo puede ser nulo
	 foreach($models as $model)
 	 self::$_items[$tipo][$model->id]=$model->nombre;
	}
}
