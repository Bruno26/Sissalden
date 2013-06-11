<?php

class ConsultorioPromotoresController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'selectParroquia', 'selectasic','selectConsultorio'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ConsultorioPromotores;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ConsultorioPromotores']))
		{
			$model->attributes=$_POST['ConsultorioPromotores'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_consultorio_promotorer));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ConsultorioPromotores']))
		{
			$model->attributes=$_POST['ConsultorioPromotores'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_consultorio_promotorer));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ConsultorioPromotores');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ConsultorioPromotores('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ConsultorioPromotores']))
			$model->attributes=$_GET['ConsultorioPromotores'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ConsultorioPromotores::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='consultorio-promotores-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionSelectParroquia()//Se le otorga permiso de ejecucion en rules
        {
            $id_circuito = $_POST['ConsultorioPromotores']['id_circuito'];
            $lista = Parroquia::model()->findAll('id_circuito = :id_circuito',array(':id_circuito'=>$id_circuito));
            $lista = CHtml::listData($lista,'id_parroquia','nb_parroquia');
            
            echo CHtml::tag('option', array('value' => ''), 'Seleccione una parroquia', true);
            
            foreach ($lista as $valor => $descripcion){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true );
                
            }
            
        }

	public function actionSelectasic()
        {
            $id_parroquia = $_POST['ConsultorioPromotores']['id_parroquia'];
            $lista = Asic::model()->findAll('id_parroquia = :id_parroquia',array(':id_parroquia'=>$id_parroquia));
            $lista = CHtml::listData($lista,'id_asic','nb_asic');
            
            echo CHtml::tag('option', array('value' => ''), 'Seleccione un Asic', true);
            
            foreach ($lista as $valor => $descripcion){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true );
                
            }
            
        }

	public function actionSelectConsultorio()
        {
            $id_asic = $_POST['ConsultorioPromotores']['id_asic'];
            $lista = ConsultorioPopular::model()->findAll('id_asic = :id_asic',array(':id_asic'=>$id_asic));
            $lista = CHtml::listData($lista,'id_consul_popular','nb_consul_popular');
            
            echo CHtml::tag('option', array('value' => ''), 'Seleccione un Consultorio', true);
            
            foreach ($lista as $valor => $descripcion){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true );
                
            }
            
        }
}
