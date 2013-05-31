<?php

/**
 * This is the model class for table "sissalden.csaxcsa".
 *
 * The followings are the available columns in table 'sissalden.csaxcsa':
 * @property integer $id_csaxcsa
 * @property string $nb_jefe_familia
 * @property string $ci_jefe_familia
 * @property string $nacio_jefe_familia
 * @property string $perso_beneficiadas
 * @property string $tlf_csaxcsa
 * @property boolean $charla_csaxcsa
 * @property boolean $viviend_fumigada
 * @property boolean $viviend_abatizada
 * @property string $dep_encontrados
 * @property string $focos_positivos
 * @property string $focos_eliminados
 * @property string $nu_casos_dengue
 * @property string $cant_litros_abate
 * @property string $grs_abatizacion
 * @property integer $id_registro
 * @property integer $id_atencion
 * @property integer $id_abatizacion
 * @property string $nb_bd_usuario
 */
class Csaxcsa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Csaxcsa the static model class
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
		return 'sissalden.csaxcsa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_jefe_familia, ci_jefe_familia, nacio_jefe_familia, perso_beneficiadas, tlf_csaxcsa, charla_csaxcsa, viviend_fumigada, viviend_abatizada, dep_encontrados, focos_positivos, focos_eliminados, nu_casos_dengue, cant_litros_abate, id_atencion, id_abatizacion, nb_bd_usuario', 'required'),
			array('id_atencion, id_abatizacion', 'numerical', 'integerOnly'=>true),
			array('nb_jefe_familia, nb_bd_usuario', 'length', 'max'=>50),
			array('nacio_jefe_familia', 'length', 'max'=>1),
			array('tlf_csaxcsa', 'length', 'max'=>8),
			array('cant_litros_abate', 'length', 'max'=>20),
			array('grs_abatizacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_csaxcsa, nb_jefe_familia, ci_jefe_familia, nacio_jefe_familia, perso_beneficiadas, tlf_csaxcsa, charla_csaxcsa, viviend_fumigada, viviend_abatizada, dep_encontrados, focos_positivos, focos_eliminados, nu_casos_dengue, cant_litros_abate, grs_abatizacion, id_registro, id_atencion, id_abatizacion, nb_bd_usuario', 'safe', 'on'=>'search'),
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
			'id_csaxcsa' => 'Id Csaxcsa',
			'nb_jefe_familia' => 'Nb Jefe Familia',
			'ci_jefe_familia' => 'Ci Jefe Familia',
			'nacio_jefe_familia' => 'Nacio Jefe Familia',
			'perso_beneficiadas' => 'Perso Beneficiadas',
			'tlf_csaxcsa' => 'Tlf Csaxcsa',
			'charla_csaxcsa' => 'Charla Csaxcsa',
			'viviend_fumigada' => 'Viviend Fumigada',
			'viviend_abatizada' => 'Viviend Abatizada',
			'dep_encontrados' => 'Dep Encontrados',
			'focos_positivos' => 'Focos Positivos',
			'focos_eliminados' => 'Focos Eliminados',
			'nu_casos_dengue' => 'Nu Casos Dengue',
			'cant_litros_abate' => 'Cant Litros Abate',
			'grs_abatizacion' => 'Grs Abatizacion',
			'id_registro' => 'Id Registro',
			'id_atencion' => 'Id Atencion',
			'id_abatizacion' => 'Id Abatizacion',
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

		$criteria->compare('id_csaxcsa',$this->id_csaxcsa);
		$criteria->compare('nb_jefe_familia',$this->nb_jefe_familia,true);
		$criteria->compare('ci_jefe_familia',$this->ci_jefe_familia,true);
		$criteria->compare('nacio_jefe_familia',$this->nacio_jefe_familia,true);
		$criteria->compare('perso_beneficiadas',$this->perso_beneficiadas,true);
		$criteria->compare('tlf_csaxcsa',$this->tlf_csaxcsa,true);
		$criteria->compare('charla_csaxcsa',$this->charla_csaxcsa);
		$criteria->compare('viviend_fumigada',$this->viviend_fumigada);
		$criteria->compare('viviend_abatizada',$this->viviend_abatizada);
		$criteria->compare('dep_encontrados',$this->dep_encontrados,true);
		$criteria->compare('focos_positivos',$this->focos_positivos,true);
		$criteria->compare('focos_eliminados',$this->focos_eliminados,true);
		$criteria->compare('nu_casos_dengue',$this->nu_casos_dengue,true);
		$criteria->compare('cant_litros_abate',$this->cant_litros_abate,true);
		$criteria->compare('grs_abatizacion',$this->grs_abatizacion,true);
		$criteria->compare('id_registro',$this->id_registro);
		$criteria->compare('id_atencion',$this->id_atencion);
		$criteria->compare('id_abatizacion',$this->id_abatizacion);
		$criteria->compare('nb_bd_usuario',$this->nb_bd_usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
