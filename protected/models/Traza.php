<?php

/**
 * This is the model class for table "sissalden.traza".
 *
 * The followings are the available columns in table 'sissalden.traza':
 * @property integer $id
 * @property string $ip_traza
 * @property string $in_tipo_movimiento_traza
 * @property string $nb_tabla_traza
 * @property integer $id_registro_traza
 * @property string $fe_hr_traza
 * @property string $nb_bd_usuario
 * @property string $nb_esquema
 */
class Traza extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Traza the static model class
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
		return 'sissalden.traza';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('in_tipo_movimiento_traza, nb_tabla_traza, fe_hr_traza, nb_bd_usuario, nb_esquema', 'required'),
			array('id_registro_traza', 'numerical', 'integerOnly'=>true),
			array('ip_traza', 'length', 'max'=>15),
			array('in_tipo_movimiento_traza', 'length', 'max'=>6),
			array('nb_tabla_traza, nb_bd_usuario, nb_esquema', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ip_traza, in_tipo_movimiento_traza, nb_tabla_traza, id_registro_traza, fe_hr_traza, nb_bd_usuario, nb_esquema', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'ip_traza' => 'Ip Traza',
			'in_tipo_movimiento_traza' => 'In Tipo Movimiento Traza',
			'nb_tabla_traza' => 'Nb Tabla Traza',
			'id_registro_traza' => 'Id Registro Traza',
			'fe_hr_traza' => 'Fe Hr Traza',
			'nb_bd_usuario' => 'Nb Bd Usuario',
			'nb_esquema' => 'Nb Esquema',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('ip_traza',$this->ip_traza,true);
		$criteria->compare('in_tipo_movimiento_traza',$this->in_tipo_movimiento_traza,true);
		$criteria->compare('nb_tabla_traza',$this->nb_tabla_traza,true);
		$criteria->compare('id_registro_traza',$this->id_registro_traza);
		$criteria->compare('fe_hr_traza',$this->fe_hr_traza,true);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);
		$criteria->compare('nb_esquema',$this->nb_esquema,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}