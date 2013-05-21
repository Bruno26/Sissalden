<?php

/**
 * This is the model class for table "sissalden.parroquia".
 *
 * The followings are the available columns in table 'sissalden.parroquia':
 * @property integer $id_parroquia
 * @property string $nb_parroquia
 * @property integer $id_circuito
 */
class Parroquia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Parroquia the static model class
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
		return 'sissalden.parroquia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_parroquia, id_circuito', 'required'),
			array('id_circuito', 'numerical', 'integerOnly'=>true),
			array('nb_parroquia', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_parroquia, nb_parroquia, id_circuito', 'safe', 'on'=>'search'),
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
			'id_parroquia' => 'Id Parroquia',
			'nb_parroquia' => 'Nb Parroquia',
			'id_circuito' => 'Id Circuito',
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

		$criteria->compare('id_parroquia',$this->id_parroquia);
		$criteria->compare('nb_parroquia',$this->nb_parroquia,true);
		$criteria->compare('id_circuito',$this->id_circuito);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}