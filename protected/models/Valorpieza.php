<?php

/**
 * This is the model class for table "ehp_valorpiezas".
 *
 * The followings are the available columns in table 'ehp_valorpiezas':
 * @property integer $id
 * @property integer $id_tipo
 * @property integer $id_pieza
 * @property integer $id_tamano
 * @property integer $id_terminacion
 * @property integer $precio
 *
 * The followings are the available model relations:
 * @property ValorpiezaPedido[] $valorpiezaPedidos
 * @property Terminaciones $idTerminacion
 * @property Tamano $idTamano
 * @property Tipos $idTipo
 * @property Piezas $idPieza
 */
class Valorpieza extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ehp_valorpiezas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo, id_pieza, id_tamano, id_terminacion, cantidad', 'required'),
			array('id_tipo, id_pieza, id_tamano, id_terminacion, precio, cantidad', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_tipo, id_pieza, id_tamano, id_terminacion, precio', 'safe', 'on'=>'search'),
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
			'valorpiezaPedidos' => array(self::HAS_MANY, 'ValorpiezaPedido', 'id_valorpiezas'),
			'idTerminacion' => array(self::BELONGS_TO, 'Terminaciones', 'id_terminacion'),
			'idTamano' => array(self::BELONGS_TO, 'Tamano', 'id_tamano'),
			'idTipo' => array(self::BELONGS_TO, 'Tipos', 'id_tipo'),
			'idPieza' => array(self::BELONGS_TO, 'Piezas', 'id_pieza'),
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
			'id_pieza' => 'Id Pieza',
			'id_tamano' => 'Id Tamano',
			'id_terminacion' => 'Id Terminacion',
			'precio' => 'Precio',
			'cantidad'=>'Cantidad',
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
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('id_pieza',$this->id_pieza);
		$criteria->compare('id_tamano',$this->id_tamano);
		$criteria->compare('id_terminacion',$this->id_terminacion);
		$criteria->compare('precio',$this->precio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Valorpieza the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
