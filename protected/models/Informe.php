<?php

/**
 * This is the model class for table "sissalden.informe".
 *
 * The followings are the available columns in table 'sissalden.informe':
 * @property integer $id_informe
 * @property string $fch_informe
 * @property string $fch_sub_informe
 * @property integer $id_registro
 * @property integer $id_consul_popular
 * @property integer $id_asic
 * @property integer $id_parroquia
 * @property integer $id_circuito
 * @property string $nb_bd_usuario
 */
class Informe extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Informe the static model class
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
		return 'sissalden.informe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fch_informe, fch_sub_informe, id_consul_popular, id_asic, id_parroquia, id_circuito, nb_bd_usuario', 'required'),
			array('id_consul_popular, id_asic, id_parroquia, id_circuito', 'numerical', 'integerOnly'=>true),
			array('nb_bd_usuario', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_informe, fch_informe, fch_sub_informe, id_registro, id_consul_popular, id_asic, id_parroquia, id_circuito, nb_bd_usuario', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_informe' => 'Id Informe',
			'fch_informe' => 'Fch Informe',
			'fch_sub_informe' => 'Fch Sub Informe',
			'id_registro' => 'Id Registro',
			'id_consul_popular' => 'Id Consul Popular',
			'id_asic' => 'Id Asic',
			'id_parroquia' => 'Id Parroquia',
			'id_circuito' => 'Id Circuito',
			'nb_bd_usuario' => 'Nb Bd Usuario',
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

		$criteria->compare('id_informe',$this->id_informe);
		$criteria->compare('fch_informe',$this->fch_informe,true);
		$criteria->compare('fch_sub_informe',$this->fch_sub_informe,true);
		$criteria->compare('id_registro',$this->id_registro);
		$criteria->compare('id_consul_popular',$this->id_consul_popular);
		$criteria->compare('id_asic',$this->id_asic);
		$criteria->compare('id_parroquia',$this->id_parroquia);
		$criteria->compare('id_circuito',$this->id_circuito);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}