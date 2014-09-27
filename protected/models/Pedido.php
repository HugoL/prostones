<?php

/**
 * This is the model class for table "{{pedidos}}".
 *
 * The followings are the available columns in table '{{pedidos}}':
 * @property integer $id
 * @property integer $id_tipo
 * @property integer $id_pieza
 * @property integer $id_tamano
 * @property integer $id_terminacion
 * @property integer $id_terminacion_arista
 * @property integer $id_terminacion_canto
 * @property integer $id_tipo_canto
 * @property integer $id_destino
 * @property integer $id_cantidad
 * @property integer $id_documento
 *
 * The followings are the available model relations:
 * @property Provincias $idDestino
 * @property Documentos $idDocumento
 * @property Tipos $idTipo
 * @property Piezas $idPieza
 * @property Tamano $idTamano
 * @property Terminaciones $idTerminacion
 * @property Terminaciones $idTerminacionArista
 * @property Terminaciones $idTerminacionCanto
 */
class Pedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{pedidos}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo, id_pieza, id_tamano, id_terminacion, id_terminacion_arista, id_terminacion_canto, id_tipo_canto, id_destino, id_cantidad, id_documento', 'required'),
			array('id_tipo, id_pieza, id_tamano, id_terminacion, id_terminacion_arista, id_terminacion_canto, id_tipo_canto, id_destino, id_cantidad, id_documento', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_tipo, id_pieza, id_tamano, id_terminacion, id_terminacion_arista, id_terminacion_canto, id_tipo_canto, id_destino, id_cantidad, id_documento', 'safe', 'on'=>'search'),
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
			'idDestino' => array(self::BELONGS_TO, 'Provincias', 'id_destino'),
			'idDocumento' => array(self::BELONGS_TO, 'Documentos', 'id_documento'),
			'idTipo' => array(self::BELONGS_TO, 'Tipos', 'id_tipo'),
			'idPieza' => array(self::BELONGS_TO, 'Piezas', 'id_pieza'),
			'idTamano' => array(self::BELONGS_TO, 'Tamano', 'id_tamano'),
			'idTerminacion' => array(self::BELONGS_TO, 'Terminaciones', 'id_terminacion'),
			'idTerminacionArista' => array(self::BELONGS_TO, 'Terminaciones', 'id_terminacion_arista'),
			'idTerminacionCanto' => array(self::BELONGS_TO, 'Terminaciones', 'id_terminacion_canto'),
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
			'id_terminacion_arista' => 'Id Terminacion Arista',
			'id_terminacion_canto' => 'Id Terminacion Canto',
			'id_tipo_canto' => 'Id Tipo Canto',
			'id_destino' => 'Id Destino',
			'id_cantidad' => 'Id Cantidad',
			'id_documento' => 'Id Documento',
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
		$criteria->compare('id_terminacion_arista',$this->id_terminacion_arista);
		$criteria->compare('id_terminacion_canto',$this->id_terminacion_canto);
		$criteria->compare('id_tipo_canto',$this->id_tipo_canto);
		$criteria->compare('id_destino',$this->id_destino);
		$criteria->compare('id_cantidad',$this->id_cantidad);
		$criteria->compare('id_documento',$this->id_documento);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
