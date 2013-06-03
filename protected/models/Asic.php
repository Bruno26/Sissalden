<?php

/**
 * This is the model class for table "sissalden.asic".
 *
 * The followings are the available columns in table 'sissalden.asic':
 * @property integer $id_asic
 * @property string $nb_asic
 * @property integer $id_registro
 * @property integer $id_parroquia
 * @property string $nb_bd_usuario
 * @property integer $id_circuito
 */
class Asic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Asic the static model class
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
		return 'sissalden.asic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_asic, id_parroquia, nb_bd_usuario, id_circuito', 'required'),
			array('id_parroquia, id_circuito', 'numerical', 'integerOnly'=>true),
			array('nb_asic', 'length', 'max'=>80),
			array('nb_bd_usuario', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_asic, nb_asic, id_registro, id_parroquia, nb_bd_usuario, id_circuito', 'safe', 'on'=>'search'),
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
			'circuito'=> array(self::BELONGS_TO, 'Circuito', 'id_circuito'),
			'parroquia'=>array(self::BELONGS_TO, 'Parroquia', 'id_parroquia'),
				

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_asic' => 'Id Asic',
			'nb_asic' => 'Asic',
			'id_registro' => 'Id Registro',
			'id_parroquia' => 'Parroquia',
			'nb_bd_usuario' => 'Nb Bd Usuario',
			'id_circuito' => 'Circuito',
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

		$criteria->compare('id_asic',$this->id_asic);
		$criteria->compare('nb_asic',$this->nb_asic,true);
		$criteria->compare('id_registro',$this->id_registro);
		$criteria->compare('id_parroquia',$this->id_parroquia);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);
		$criteria->compare('id_circuito',$this->id_circuito);

/*		$criteria->with =array('circuito');
		$criteria->addSearchCondition('circuito.nb_circuido', $this->id_circuito);

		$criteria->with =array('parroquia');
		$criteria->addSearchCondition('parroquia.nb_parroquia', $this->id_parroquia);
*/
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
