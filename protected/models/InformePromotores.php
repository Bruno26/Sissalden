<?php

/**
 * This is the model class for table "sissalden.informe_promotores".
 *
 * The followings are the available columns in table 'sissalden.informe_promotores':
 * @property integer $id_informe
 * @property integer $id_promotor
 * @property string $nb_bd_usuario
 */
class InformePromotores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InformePromotores the static model class
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
		return 'sissalden.informe_promotores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_informe, id_promotor, nb_bd_usuario', 'required'),
			array('id_informe, id_promotor', 'numerical', 'integerOnly'=>true),
			array('nb_bd_usuario', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_informe, id_promotor, nb_bd_usuario', 'safe', 'on'=>'search'),
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
			'id_promotor' => 'Id Promotor',
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
		$criteria->compare('id_promotor',$this->id_promotor);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}