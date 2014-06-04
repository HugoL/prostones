<?php

/**
 * This is the model class for table "{{presupuestos}}".
 *
 * The followings are the available columns in table '{{presupuestos}}':
 * @property integer $id
 * @property string $nombre
 * @property integer $id_cliente
 * @property integer $id_provincia
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Clientes $idCliente
 * @property Provincias $idProvincia
 * @property Valorpiezas[] $valorpiezases
 */
class Presupuesto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Presupuesto the static model class
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
		return '{{presupuestos}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, id_cliente, id_provincia, fecha', 'required'),
			array('id_cliente, id_provincia', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, id_cliente, id_provincia, fecha', 'safe', 'on'=>'search'),
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
			'valorpiezases' => array(self::HAS_MANY, 'Valorpiezas', 'id_presupuesto'),
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
			'id_cliente' => 'Id Cliente',
			'id_provincia' => 'Id Provincia',
			'fecha' => 'Fecha',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_provincia',$this->id_provincia);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}