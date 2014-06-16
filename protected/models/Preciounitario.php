<?php

/**
 * This is the model class for table "{{preciosunitarios}}".
 *
 * The followings are the available columns in table '{{preciosunitarios}}':
 * @property integer $id
 * @property integer $id_tipo
 * @property integer $id_tamano
 * @property double $precio
 *
 * The followings are the available model relations:
 * @property Tipos $idTipo
 * @property Tamano $idTamano
 */
class Preciounitario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Preciounitario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{preciosunitarios}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('precio', 'required'),
			array('id_tipo, id_tamano', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_tipo, id_tamano, precio', 'safe', 'on'=>'search'),
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
			'idTipo' => array(self::BELONGS_TO, 'Tipos', 'id_tipo'),
			'idTamano' => array(self::BELONGS_TO, 'Tamano', 'id_tamano'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_tipo' => 'Id Tipo',
			'id_tamano' => 'Id Tamano',
			'precio' => 'Precio',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('id_tamano',$this->id_tamano);
		$criteria->compare('precio',$this->precio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}