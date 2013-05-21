<?php

/**
 * This is the model class for table "sissalden.sub_actividades".
 *
 * The followings are the available columns in table 'sissalden.sub_actividades':
 * @property integer $id_sub_actividades
 * @property string $nb_sub_actividades
 * @property integer $id_registro
 * @property integer $id_actividades
 * @property string $nb_bd_usuario
 */
class SubActividades extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SubActividades the static model class
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
		return 'sissalden.sub_actividades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_actividades, nb_bd_usuario', 'required'),
			array('id_actividades', 'numerical', 'integerOnly'=>true),
			array('nb_sub_actividades, nb_bd_usuario', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_sub_actividades, nb_sub_actividades, id_registro, id_actividades, nb_bd_usuario', 'safe', 'on'=>'search'),
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
			'id_sub_actividades' => 'Id Sub Actividades',
			'nb_sub_actividades' => 'Nb Sub Actividades',
			'id_registro' => 'Id Registro',
			'id_actividades' => 'Id Actividades',
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

		$criteria->compare('id_sub_actividades',$this->id_sub_actividades);
		$criteria->compare('nb_sub_actividades',$this->nb_sub_actividades,true);
		$criteria->compare('id_registro',$this->id_registro);
		$criteria->compare('id_actividades',$this->id_actividades);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}