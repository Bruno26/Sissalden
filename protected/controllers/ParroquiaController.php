<?php

class ParroquiaController extends Controller
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
				'actions'=>array('index','view'),
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
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Parroquia');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


//Adaptacio de actioView con claves compuestas primaria
	public function actionView($id_circuito, $id_parroquia)
	{
		$model=$this->loadModel($id_circuito, $id_parroquia);
		$this->render('view',array('model'=>$model));
	}


//Function actionCreate con conposite 
	public function actionCreate()
	{
		$model=new Parroquia;

		if(isset($_POST['Parroquia']))
		{
			$model->attributes=$_POST['Parroquia'];
			if($model->validate())
			{
				$this->saveModel($model);
				$this->redirect(array('view','id_parroquia'=>$model->id_parroquia, 'id_circuito'=>$model->id_circuito));
			}
		}
		$this->render('create',array('model'=>$model));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
			/*/* Funtion del actionUpdate yii
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Parroquia']))
		{
			$model->attributes=$_POST['Parroquia'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Array));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
*/

//Adaptacion composite primarykey Update Bruno

	public function actionUpdate($id_circuito, $id_parroquia)
	{
		$model=$this->loadModel($id_circuito, $id_parroquia);

		if(isset($_POST['Parroquia']))
			{
				$model->attributes=$_POST['Parroquia'];
				$this->saveModel($model);
				$this->redirect(array('view','id_parroquia'=>$model->id_parroquia, 'id_circuito'=>$model->id_circuito));
			}
		$this->render('update',array('model'=>$model,));
	}


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Parroquia('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Parroquia']))
			$model->attributes=$_GET['Parroquia'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id_circuito, $id_parroquia)
	{
		$model=Parroquia::model()->findByPk(array('id_parroquia'=>$id_parroquia, 'id_circuito'=>$id_circuito));
		if($model===null)
			throw new CHttpException( 404,'La solicitud de la página no existe.');
		return $model;
	}
	
	public function saveModel($model)
	{
			$model->save();
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
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='parroquia-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	
}
