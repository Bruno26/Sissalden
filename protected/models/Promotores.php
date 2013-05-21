<?php

/**
 * This is the model class for table "sissalden.promotores".
 *
 * The followings are the available columns in table 'sissalden.promotores':
 * @property integer $id_promotor
 * @property string $nb_promotor
 * @property string $ape_promotor
 * @property string $ci_promotor
 * @property string $tlf_promotor
 * @property string $dir_promotor
 * @property string $sexo_promotor
 * @property string $nacio_promotor
 * @property string $grado_academico_promoto
 * @property string $status_promotor
 * @property integer $id_registro
 * @property string $nb_bd_usuario
 */
class Promotores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Promotores the static model class
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
		return 'sissalden.promotores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_promotor, ape_promotor, ci_promotor, tlf_promotor, dir_promotor, sexo_promotor, nacio_promotor, grado_academico_promoto, status_promotor, nb_bd_usuario', 'required'),
			array('nb_promotor, ape_promotor, nb_bd_usuario', 'length', 'max'=>50),
			array('ci_promotor', 'length', 'max'=>8),
			array('sexo_promotor, nacio_promotor, status_promotor', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_promotor, nb_promotor, ape_promotor, ci_promotor, tlf_promotor, dir_promotor, sexo_promotor, nacio_promotor, grado_academico_promoto, status_promotor, id_registro, nb_bd_usuario', 'safe', 'on'=>'search'),
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
			'id_promotor' => 'Id Promotor',
			'nb_promotor' => 'Nombres',
			'ape_promotor' => 'Apellidos',
			'ci_promotor' => 'Cédula',
			'tlf_promotor' => 'Teléfono',
			'dir_promotor' => 'Dirección',
			'sexo_promotor' => 'Sexo ',
			'nacio_promotor' => 'Nacionalidad',
			'grado_academico_promoto' => 'Grado Academico',
			'status_promotor' => 'Estado del Promotor',
		        'id_registro' => 'Número de Registro',
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

		$criteria->compare('id_promotor',$this->id_promotor);
		$criteria->compare('nb_promotor',$this->nb_promotor,true);
		$criteria->compare('ape_promotor',$this->ape_promotor,true);
		$criteria->compare('ci_promotor',$this->ci_promotor,true);
		$criteria->compare('tlf_promotor',$this->tlf_promotor,true);
		$criteria->compare('dir_promotor',$this->dir_promotor,true);
		$criteria->compare('sexo_promotor',$this->sexo_promotor,true);
		$criteria->compare('nacio_promotor',$this->nacio_promotor,true);
		$criteria->compare('grado_academico_promoto',$this->grado_academico_promoto,true);
		$criteria->compare('status_promotor',$this->status_promotor,true);
		$criteria->compare('id_registro',$this->id_registro);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
