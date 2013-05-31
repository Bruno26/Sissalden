<?php

/**
 * This is the model class for table "sissalden.acta".
 *
 * The followings are the available columns in table 'sissalden.acta':
 * @property integer $id_acta
 * @property string $tma_acta
 * @property string $nb_actividades
 * @property string $nb_sub_actividades
 * @property string $fch_acta
 * @property string $cant_participantes
 * @property integer $id_registro
 * @property integer $id_consul_popular
 * @property integer $id_asic
 * @property integer $id_parroquia
 * @property integer $id_circuito
 * @property integer $id_actividades
 * @property integer $id_promotor
 * @property string $nb_bd_usuario
 */
class Acta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Acta the static model class
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
		return 'sissalden.acta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tma_acta, nb_actividades, nb_sub_actividades, fch_acta, cant_participantes, id_consul_popular, id_asic, id_parroquia, id_circuito, id_actividades, id_promotor, nb_bd_usuario', 'required'),
			array('id_consul_popular, id_asic, id_parroquia, id_circuito, id_actividades, id_promotor', 'numerical', 'integerOnly'=>true),
			array('tma_acta, nb_actividades, nb_sub_actividades, nb_bd_usuario', 'length', 'max'=>50),
			array('cant_participantes', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_acta, tma_acta, nb_actividades, nb_sub_actividades, fch_acta, cant_participantes, id_registro, id_consul_popular, id_asic, id_parroquia, id_circuito, id_actividades, id_promotor, nb_bd_usuario', 'safe', 'on'=>'search'),
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
			'id_acta' => 'Id Acta',
			'tma_acta' => 'Tema ',
			'nb_actividades' => 'Actividades',
			'nb_sub_actividades' => 'Sub Actividades',
			'fch_acta' => 'Fecha ',
			'cant_participantes' => 'Cantidad de Participantes',
			'id_registro' => 'Id Registro',
			'id_consul_popular' => 'Consultorio Popular',
			'id_asic' => 'Asic',
			'id_parroquia' => 'Parroquia',
			'id_circuito' => 'Circuito',
			'id_actividades' => 'Id Actividades',
			'id_promotor' => 'Promotor',
			'nb_bd_usuario' => 'Login',
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

		$criteria->compare('id_acta',$this->id_acta);
		$criteria->compare('tma_acta',$this->tma_acta,true);
		$criteria->compare('nb_actividades',$this->nb_actividades,true);
		$criteria->compare('nb_sub_actividades',$this->nb_sub_actividades,true);
		$criteria->compare('fch_acta',$this->fch_acta,true);
		$criteria->compare('cant_participantes',$this->cant_participantes,true);
		$criteria->compare('id_registro',$this->id_registro);
		$criteria->compare('id_consul_popular',$this->id_consul_popular);
		$criteria->compare('id_asic',$this->id_asic);
		$criteria->compare('id_parroquia',$this->id_parroquia);
		$criteria->compare('id_circuito',$this->id_circuito);
		$criteria->compare('id_actividades',$this->id_actividades);
		$criteria->compare('id_promotor',$this->id_promotor);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
