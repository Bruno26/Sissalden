<?php

/**
 * This is the model class for table "sissalden.abatizacion".
 *
 * The followings are the available columns in table 'sissalden.abatizacion':
 * @property integer $id_abatizacion
 * @property string $cant_litros_abate
 * @property string $grs_abatizacion
 */
class Abatizacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Abatizacion the static model class
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
		return 'sissalden.abatizacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cant_litros_abate, grs_abatizacion', 'required'),
			array('cant_litros_abate', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_abatizacion, cant_litros_abate, grs_abatizacion', 'safe', 'on'=>'search'),
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
			'id_abatizacion' => 'Id Abatizacion',
			'cant_litros_abate' => 'Cant Litros Abate',
			'grs_abatizacion' => 'Grs Abatizacion',
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

		$criteria->compare('id_abatizacion',$this->id_abatizacion);
		$criteria->compare('cant_litros_abate',$this->cant_litros_abate,true);
		$criteria->compare('grs_abatizacion',$this->grs_abatizacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}