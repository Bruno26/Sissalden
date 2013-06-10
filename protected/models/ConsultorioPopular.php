<?php

/**
 * This is the model class for table "sissalden.consultorio_popular".
 *
 * The followings are the available columns in table 'sissalden.consultorio_popular':
 * @property integer $id_consul_popular
 * @property string $nb_consul_popular
 * @property string $dir_consu_popular
 * @property string $nb_comite_salud
 * @property string $telf_comite_salud
 * @property string $nb_coordi_comite_salud
 * @property integer $id_registro
 * @property integer $id_asic
 * @property integer $id_parroquia
 * @property integer $id_circuito
 * @property string $nb_bd_usuario
 */
class ConsultorioPopular extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConsultorioPopular the static model class
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
		return 'sissalden.consultorio_popular';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_consul_popular, dir_consu_popular, nb_comite_salud, nb_coordi_comite_salud, id_asic, id_parroquia, id_circuito, nb_bd_usuario,telf_comite_salud', 'required'),
			array('id_asic, id_parroquia, id_circuito', 'numerical', 'integerOnly'=>true),
			array('nb_consul_popular', 'length', 'max'=>80),
			array('nb_comite_salud, nb_coordi_comite_salud, nb_bd_usuario', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_consul_popular, nb_consul_popular, dir_consu_popular, nb_comite_salud, telf_comite_salud, nb_coordi_comite_salud, id_registro, id_asic, id_parroquia, id_circuito, nb_bd_usuario', 'safe', 'on'=>'search'),
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
			'circuito' =>array(self::BELONGS_TO, 'Circuito', 'id_circuito'),		
			'parroquia'=>array(self::BELONGS_TO, 'Parroquia', 'id_parroquia'),					
			'asic'     =>array(self::BELONGS_TO, 'Asic', 'id_asic'),						
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_consul_popular' => 'Id Consul Popular',
			'nb_consul_popular' => 'Consultorio',
			'dir_consu_popular' => 'Dirección del Consultorio',
			'nb_comite_salud' => 'Comite Salud',
			'telf_comite_salud' => 'Telf del Comite',
			'nb_coordi_comite_salud' => 'Coord Comite Salud',
			'id_registro' => 'Id Registro',
			'id_asic' => 'Asic',
			'id_parroquia' => 'Parroquia',
			'id_circuito' => 'Circuito',
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

		$criteria->compare('id_consul_popular',$this->id_consul_popular);
		$criteria->compare('nb_consul_popular',$this->nb_consul_popular,true);
		$criteria->compare('dir_consu_popular',$this->dir_consu_popular,true);
		$criteria->compare('nb_comite_salud',$this->nb_comite_salud,true);
		$criteria->compare('telf_comite_salud',$this->telf_comite_salud,true);
		$criteria->compare('nb_coordi_comite_salud',$this->nb_coordi_comite_salud,true);
		$criteria->compare('id_registro',$this->id_registro);
		$criteria->compare('id_asic',$this->id_asic);
		//$criteria->compare('id_parroquia',$this->id_parroquia);
		//$criteria->compare('id_circuito',$this->id_circuito);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);

		$criteria->with = array('circuito');
		$criteria->addSearchCondition('circuito.nb_circuito', $this->id_circuito);
			
		/*$criteria->with =array ('asic');
		$criteria->addSearchCondition('asic.id_asic', $this->id_asic);
		*/
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
