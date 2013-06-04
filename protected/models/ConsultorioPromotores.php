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
			'circuito'=>array(self::BELONGS_TO, 'Circuito', 'id_circuito'),
			'parrqouia'=>array(self::BELONGS_TO, 'Parrqouia', 'id_parrqouia'),
			'asic'=>array(self::BELONGS_TO, 'Asic', 'id_asic'),
			'promotores'=>array(self::BELONGS_TO, 'Promotores', 'id_promotor'),
			'consultorio'=>array(self::BELONGS_TO, 'ConsultorioPopular', 'id_consul_popular'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_consul_popular' => 'Consultorio Popular',
			'id_asic' => 'Asic',
			'id_parroquia' => 'Parroquia',
			'id_circuito' => 'Circuito',
			'id_promotor' => 'Promotor',
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
