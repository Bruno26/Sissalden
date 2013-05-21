<?php

/**
 * This is the model class for table "sissalden.usuario".
 *
 * The followings are the available columns in table 'sissalden.usuario':
 * @property string $nb_usuario
 * @property string $nu_cedula_usuario
 * @property string $nacio_usuario
 * @property string $nb_bd_usuario
 * @property integer $id_registro
 * @property boolean $st_usuario
 * @property string $in_tipo_usuario
 * @property string $nu_telefono
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'sissalden.usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_usuario, nu_cedula_usuario, nacio_usuario, nb_bd_usuario, nu_telefono', 'required'),
			array('nb_usuario', 'length', 'max'=>80),
			array('nu_cedula_usuario', 'length', 'max'=>8),
			array('nacio_usuario, in_tipo_usuario', 'length', 'max'=>2),
			array('nb_bd_usuario', 'length', 'max'=>50),
			array('nu_telefono', 'length', 'max'=>11),
			array('st_usuario', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nb_usuario, nu_cedula_usuario, nacio_usuario, nb_bd_usuario, id_registro, st_usuario, in_tipo_usuario, nu_telefono', 'safe', 'on'=>'search'),
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
			'nb_usuario' => 'Nombre',
			'nu_cedula_usuario' => 'Nu Cedula Usuario',
			'nacio_usuario' => 'Nacio Usuario',
			'nb_bd_usuario' => 'login', // logn == nb_bd_usuario 
			'id_registro' => 'Id Registro',
			'st_usuario' => 'St Usuario',
			'in_tipo_usuario' => 'In Tipo Usuario',
			'nu_telefono' => 'Nu Telefono',
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

		$criteria->compare('nb_usuario',$this->nb_usuario,true);
		$criteria->compare('nu_cedula_usuario',$this->nu_cedula_usuario,true);
		$criteria->compare('nacio_usuario',$this->nacio_usuario,true);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);
		$criteria->compare('id_registro',$this->id_registro);
		$criteria->compare('st_usuario',$this->st_usuario);
		$criteria->compare('in_tipo_usuario',$this->in_tipo_usuario,true);
		$criteria->compare('nu_telefono',$this->nu_telefono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
