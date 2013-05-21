<?php

/**
 * This is the model class for table "sissalden.consultorio_promotores".
 *
 * The followings are the available columns in table 'sissalden.consultorio_promotores':
 * @property integer $id_consul_popular
 * @property integer $id_asic
 * @property integer $id_parroquia
 * @property integer $id_circuito
 * @property integer $id_promotor
 */
class ConsultorioPromotores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConsultorioPromotores the static model class
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
		return 'sissalden.consultorio_promotores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_consul_popular, id_asic, id_parroquia, id_circuito, id_promotor', 'required'),
			array('id_consul_popular, id_asic, id_parroquia, id_circuito, id_promotor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_consul_popular, id_asic, id_parroquia, id_circuito, id_promotor', 'safe', 'on'=>'search'),
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
			'id_consul_popular' => 'Id Consul Popular',
			'id_asic' => 'Id Asic',
			'id_parroquia' => 'Id Parroquia',
			'id_circuito' => 'Id Circuito',
			'id_promotor' => 'Id Promotor',
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

		$criteria->compare('id_consul_popular',$this->id_consul_popular);
		$criteria->compare('id_asic',$this->id_asic);
		$criteria->compare('id_parroquia',$this->id_parroquia);
		$criteria->compare('id_circuito',$this->id_circuito);
		$criteria->compare('id_promotor',$this->id_promotor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}