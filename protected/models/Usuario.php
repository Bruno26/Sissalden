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
 * @property string $password
 * @property string $last_login
 * @property string $create_at
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
			array('nb_usuario, nu_cedula_usuario, nacio_usuario, nb_bd_usuario, nu_telefono, password', 'required'),
			array('nb_usuario', 'length', 'max'=>80),
			array('nu_cedula_usuario', 'length', 'max'=>8),
			array('nacio_usuario', 'length', 'max'=>1),
			array('nb_bd_usuario', 'length', 'max'=>50),
			array('in_tipo_usuario', 'length', 'max'=>2),
			array('nu_telefono', 'length', 'max'=>11),
			array('password', 'length', 'max'=>128),
			array('st_usuario, last_login, create_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nb_usuario, nu_cedula_usuario, nacio_usuario, nb_bd_usuario, id_registro, st_usuario, in_tipo_usuario, nu_telefono, password, last_login, create_at', 'safe', 'on'=>'search'),
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
			'nu_cedula_usuario' => 'Cédula',
			'nacio_usuario' => 'Nacionalidad',
			'nb_bd_usuario' => 'Login',
			'id_registro' => 'Id Registro',
			'st_usuario' => 'Estatus',
			'in_tipo_usuario' => 'Tipo',
			'nu_telefono' => 'Telefono',
			'password' => 'Password',
			'last_login' => 'Last Login',
			'create_at' => 'Create At',
		);
	}

	public function validatePassword($password){
	return $this->hashPassword($password)===$this->password;
	}

	public function hashPassword($password){
	return md5($password);
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
		$criteria->compare('password',$this->password,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('create_at',$this->create_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
