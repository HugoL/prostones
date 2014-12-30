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
			array('id_tipo, id_pieza, id_tamano, id_terminacion,id_terminacion_arista, id_terminacion_canto,id_tipo_canto, cantidad', 'required'),
			array('id_tipo, id_pieza, id_tamano, id_terminacion, id_terminacion_arista, id_terminacion_canto,id_tipo_canto, precio, cantidad, id_presupuesto, tamanoreal, numeropiezas, peso, largo, ancho, grosor, destino', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_tipo, id_pieza, id_tamano, id_terminacion,id_terminacion_arista, id_terminacion_canto,id_tipo_canto, precio, id_presupuesto, tamanoreal, numeropiezas, peso, destino', 'safe', 'on'=>'search'),
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
			'presupuesto' => array(self::BELONGS_TO, 'Presupuesto', 'id_presupuesto'),	
			'terminacion' => array(self::BELONGS_TO, 'Terminacion', 'id_terminacion'),
			'terminacionarista' =>array(self::BELONGS_TO, 'Terminacion', 'id_terminacion_arista'),
			'terminacioncanto' => array(self::BELONGS_TO, 'Terminacion', 'id_terminacion_canto'),
			'tipocanto' => array(self::BELONGS_TO, 'Terminacion', 'id_terminacion_canto'),
			'tamano' => array(self::BELONGS_TO, 'Tamano', 'id_tamano'),
			'tipo' => array(self::BELONGS_TO, 'Tipo', 'id_tipo'),
			'pieza' => array(self::BELONGS_TO, 'Pieza', 'id_pieza'),
			'provincia' => array(self::BELONGS_TO, 'Provincia', 'destino'),
			'biselado' => array(self::BELONGS_TO, 'Biselado', 'id_biselado'),
			'pale' => array(self::BELONGS_TO, 'Pale', 'id_pale'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_tipo' => 'Tipo',
			'id_pieza' => 'Pieza',
			'id_tamano' => 'Tamaño',
			'id_terminacion' => 'Terminacion',
			'id_presupuesto' => 'Presupuesto',
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
		$criteria->compare('id_presupuesto',$this->id_presupuesto);
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
