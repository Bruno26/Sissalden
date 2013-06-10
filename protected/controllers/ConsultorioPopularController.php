<?php

class ConsultorioPopularController extends Controller
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
				'actions'=>array('index','view', 'selectParroquia', 'selectasic'),
				'users'=>array('@'),
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
	 
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	*/

	//Adaptacio de actioView con claves compuestas primaria
	public function actionView($id_parroquia,$id_asic, $id_circuito,$id_consul_popular)//function ver clave compuesta
	{
		$model=$this->loadModel($id_parroquia,$id_asic, $id_circuito,$id_consul_popular);
		$this->render('view',array('model'=>$model));
	}
	/** 
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	
	public function actionCreate()
	{
		$model=new ConsultorioPopular;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ConsultorioPopular']))
		{
			$model->attributes=$_POST['ConsultorioPopular'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Array));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	Fin de la Function Create de YII*/

	public function actionCreate()
	{
		
		$model=new ConsultorioPopular;

		if(isset($_POST['ConsultorioPopular']))
		{
			$model->attributes=$_POST['ConsultorioPopular'];
			if($model->validate())
			{
				$this->saveModel($model);
				$this->redirect(array('view','id_parroquia'=>$model->id_parroquia, 'id_circuito'=>$model->id_circuito, 'id_asic'=>$model->id_asic, 'id_consul_popular'=>$model->id_consul_popular));
				
			}
			
		}
		$this->render('create',array('model'=>$model));
	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ConsultorioPopular']))
		{
			$model->attributes=$_POST['ConsultorioPopular'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Array));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	*/
	public function actionUpdate($id_parroquia,$id_asic, $id_circuito,$id_consul_popular)
	{
		$model=$this->loadModel($id_parroquia,$id_asic, $id_circuito,$id_consul_popular);

		if(isset($_POST['ConsultorioPopular']))
			{
				$model->attributes=$_POST['ConsultorioPopular'];
				$this->saveModel($model);
				$this->redirect(array('view','id_parroquia'=>$model->id_parroquia, 'id_circuito'=>$model->id_circuito, 'id_asic'=>$model->id_asic, 'id_consul_popular'=>$model->id_consul_popular));
			}
		$this->render('update',array('model'=>$model,));
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
		$dataProvider=new CActiveDataProvider('ConsultorioPopular');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ConsultorioPopular('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ConsultorioPopular']))
			$model->attributes=$_GET['ConsultorioPopular'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function saveModel($model)
	{
		$model->save();
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id_parroquia,$id_asic, $id_circuito,$id_consul_popular)
	{
		$model=ConsultorioPopular::model()->findByPk(array('id_parroquia'=>$id_parroquia,'id_asic'=>$id_asic, 'id_circuito'=>$id_circuito,'id_consul_popular'=>$id_consul_popular));
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='consultorio-popular-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionSelectParroquia()//Se le otorga permiso de ejecucion en rules
        {
            $id_circuito = $_POST['ConsultorioPopular']['id_circuito'];
            $lista = Parroquia::model()->findAll('id_circuito = :id_circuito',array(':id_circuito'=>$id_circuito));
            $lista = CHtml::listData($lista,'id_parroquia','nb_parroquia');
            
            echo CHtml::tag('option', array('value' => ''), 'Seleccione una parroquia', true);
            
            foreach ($lista as $valor => $descripcion){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true );
                
            }
            
        }


	public function actionSelectasic()
        {
            $id_parroquia = $_POST['ConsultorioPopular']['id_parroquia'];
            $lista = Asic::model()->findAll('id_parroquia = :id_parroquia',array(':id_parroquia'=>$id_parroquia));
            $lista = CHtml::listData($lista,'id_asic','nb_asic');
            
            echo CHtml::tag('option', array('value' => ''), 'Seleccione un Asic', true);
            
            foreach ($lista as $valor => $descripcion){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true );
                
            }
            
        }
}
