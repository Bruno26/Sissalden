<?php

/**
 * This is the model class for table "sissalden.atencion".
 *
 * The followings are the available columns in table 'sissalden.atencion':
 * @property integer $id_atencion
 * @property string $st_atencion
 * @property string $dir_casaxcsa
 * @property integer $id_registro
 * @property integer $id_informe
 * @property string $nb_bd_usuario
 */
class Atencion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Atencion the static model class
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
		return 'sissalden.atencion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('st_atencion, dir_casaxcsa, id_informe, nb_bd_usuario', 'required'),
			array('id_informe', 'numerical', 'integerOnly'=>true),
			array('st_atencion', 'length', 'max'=>1),
			array('nb_bd_usuario', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_atencion, st_atencion, dir_casaxcsa, id_registro, id_informe, nb_bd_usuario', 'safe', 'on'=>'search'),
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
			'id_atencion' => 'Id Atencion',
			'st_atencion' => 'St Atencion',
			'dir_casaxcsa' => 'Dir Casaxcsa',
			'id_registro' => 'Id Registro',
			'id_informe' => 'Id Informe',
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

		$criteria->compare('id_atencion',$this->id_atencion);
		$criteria->compare('st_atencion',$this->st_atencion,true);
		$criteria->compare('dir_casaxcsa',$this->dir_casaxcsa,true);
		$criteria->compare('id_registro',$this->id_registro);
		$criteria->compare('id_informe',$this->id_informe);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}