<?php

/**
 * This is the model class for table "sissalden.circuito".
 *
 * The followings are the available columns in table 'sissalden.circuito':
 * @property integer $id_circuito
 * @property string $nb_circuito
 */
class Circuito extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Circuito the static model class
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
		return 'sissalden.circuito';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_circuito', 'required'),
			array('nb_circuito', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_circuito, nb_circuito', 'safe', 'on'=>'search'),
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
			'parroquia'=>array(self::HAS_MANY, 'Parroquia', 'id_circuito'),
			
//'asic'=>array(self::HAST_MANY, 'Asic', 'id_parrqouia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_circuito' => 'Id Circuito',
			'nb_circuito' => 'Nb Circuito',
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

		$criteria->compare('id_circuito',$this->id_circuito);
		$criteria->compare('nb_circuito',$this->nb_circuito,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
