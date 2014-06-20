<?php

class BuyController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view','select','create'),
				'roles'=>array('2'),
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
		$model=new Buy;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Buy']))
		{
			$model->attributes=$_POST['Buy'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Buy']))
		{
			$model->attributes=$_POST['Buy'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Buy');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Buy('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Buy']))
			$model->attributes=$_GET['Buy'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
    
    
    public function actionSelect($id)
	{
		$dataProvider = new CActiveDataProvider('Buy', array(
            'criteria' => array(
                'with' => array('client' => array(
                    'condition' => 'user_id = :userId',
                    'params' => array(':userId' => Yii::app()->user->id),
                    'together' => true,
                )),
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));
        $this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
    
    public function actionSelectbuy()
	{
		$dataProvider = new CActiveDataProvider('Buy', array(
            'criteria' => array(
                'with' => array('client' => array(
                    'condition' => 'user_id = :userId',
                    'params' => array(':userId' => Yii::app()->user->id),
                    'together' => true,
                )),
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));
        $this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Buy the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Buy::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Buy $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='buy-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
