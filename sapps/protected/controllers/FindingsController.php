<?php

class FindingsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
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
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view','stats'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'delete', 'makecomment', 'rank'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $ranking_model = Rankings::model()->findAllByAttributes(array('finding_id' => $id));
        $can_rank = Rankings::model()->findAllByAttributes(array('finding_id' => $id, 'user_id' => Yii::app()->session['user']['id']));
        $points = 0;
        foreach ($ranking_model as $rank) {
            $points++;
        }
        $data = $this->loadModel($id)->getAttributes();
        $comments = $this->loadComments($id);
        $users = array();
        foreach ($this->loadUsers() as $one_user) {
            $users[$one_user->id] = $one_user->fname . " " . $one_user->lname;
        }
        $view = explode('-', $data['viewpoint_type']);
        if ($view[0] == 'coord') {
            $view[0] = 'Coordinates ';
            $view[1] = 'Longitude  ' . $view[1] . ' (deg)E ';
            $view[2] = 'Latitude ' . $view[2] . ' (deg)';
            $view[3] = 'Altitude ' . $view[0] . ' m';
            $data['viewpoint_type'] = implode(' , ', $view);
        }
        if ($view[0] == 'observatory') {
            $view[0] = 'Observatory ';
            $data['viewpoint_type'] = implode(' , ', $view);
        }
//                var_dump($data); die;
        $this->render('view', array(
            'model' => (object) $data,
            'comments' => $comments,
            'users' => $users,
            'points' => $points,
            'can_rank' => $can_rank,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Findings;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Findings'])) {
            $data = $_POST['Findings'];
            if ($data['viewpoint_type'] == 'observatory') {
                $data['viewpoint_type'] = $data['viewpoint_type'] . '-' . $data['observatory'];
                unset($data['observatory']);
            }
            if ($data['viewpoint_type'] == 'coord') {
                $data['viewpoint_type'] = $data['viewpoint_type'] . '-' . $data['longitude'] . '-' . $data['latitude'] . '-' . $data['altitude'];
                unset($data['observatory']);
            }
//            var_dump($data);die;
            $model->attributes = $data;
            $model->image=CUploadedFile::getInstance($model,'image');
//			$model->attributes=$_POST['Findings'];
            if ($model->save()){
                if(!empty($model->image)){
                    if(!file_exists('uploads/'.Yii::app()->session['user']['id'])){
                        mkdir('uploads/'.Yii::app()->session['user']['id']);
                    }
//                    $model->image->saveAs('/home/users/web/b881/moo.webhomecamcom/bs/sapps/images/'.Yii::app()->session['user']['id']);
                    $model->image->saveAs('uploads/'.Yii::app()->session['user']['id'].'/'.$model->image);
                }
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionMakecomment() {
        $comment_model = new Comments;
        $data = array();
        if (!empty($_POST['user_id']) && !empty($_POST['finding_id']) && !empty($_POST['comment'])) {
            $data['user_id'] = $_POST['user_id'];
            $data['finding_id'] = $_POST['finding_id'];
            $data['comment'] = $_POST['comment'];

            $data['date'] = date('Y-m-d h:i:s');
            $comment_model->attributes = $data;
            if ($comment_model->save()) {
                echo '{"error":"no_error","user":"' . Yii::app()->session['user']['fname'] . Yii::app()->session['user']['lname'] . '","date":"' . $data['date'] . '"}';
            } else {
                echo '{"error":"Not Enough Data!"}';
            }
        } else {
            $this->redirect(array('index'));
        }
    }

    public function actionRank() {
        $ranking_model = new Rankings;
        $data = array();
        if (!empty($_POST['user_id']) && !empty($_POST['finding_id'])) {
            $data['user_id'] = $_POST['user_id'];
            $data['finding_id'] = $_POST['finding_id'];
            $data['rank'] = $_POST['rank'];

            $db_data = $data;
            unset($db_data['rank']);
            if (!$ranking_model->findAllByAttributes($db_data)) {
                if ($data['rank'] == 'up') {
                    $ranking_model->attributes = $db_data;
                    if ($ranking_model->save()) {
                        echo '{"error":"no_error","user":"' . Yii::app()->session['user']['fname'] . Yii::app()->session['user']['lname'] . '"}';
                    } 
                    else {
                        echo '{"error":"Bad request! Please try again!","rank":"up","data":' . json_encode($db_data) . '}';
                    }
                }
            } 
            else {
                if ($data['rank'] == 'down') {
                    if ($ranking_model->deleteAllByAttributes($db_data)) {
                        echo '{"error":"no_error","user":"' . Yii::app()->session['user']['fname'] . Yii::app()->session['user']['lname'] . '"}';
                    } 
                    else {
                        echo '{"error":"Bad request! Please try again!","rank":"down","data":' . json_encode($db_data) . '}';
                    }
                }
            }
        } 
        else {
            $this->redirect(array('index'));
        }
    }
    
    /**
     * Display statistical data 
     */

    public function actionStats(){
        
         $this->render('stats', array(
            
        ));
    }
    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $data = $model->getAttributes();
        $view = explode('-', $data['viewpoint_type']);
        if ($view[0] == 'coord') {
            unset(Yii::app()->session['Observatory']);
            $data['viewpoint_type'] = 'coord';
            Yii::app()->session['Longitude'] = $view[1];
            Yii::app()->session['Latitude'] = $view[2];
            Yii::app()->session['Altitude'] = $view[3];
        }
        if ($view[0] == 'observatory') {
            unset(Yii::app()->session['Altitude']);
            unset(Yii::app()->session['Longitude']);
            unset(Yii::app()->session['Latitude']);

            $data['viewpoint_type'] = 'observatory';
            Yii::app()->session['Observatory'] = $view[1];
        }
        $model->attributes = $data;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Findings'])) {
            $data = $_POST['Findings'];
            if ($data['viewpoint_type'] == 'observatory') {
                $data['viewpoint_type'] = $data['viewpoint_type'] . '-' . $data['observatory'];
            }
            if ($data['viewpoint_type'] == 'coord') {
                $data['viewpoint_type'] = $data['viewpoint_type'] . '-' . $data['longitude'] . '-' . $data['latitude'] . '-' . $data['altitude'];
            }
//			$model->attributes=$_POST['Findings'];
            $model->attributes = $data;
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
//        $ranking_model = Rankings::model()->findAllByAttributes(array('finding_id' => $id));
//        $points = 0;
//        foreach ($ranking_model as $rank) {
//            $points++;
//        }
        $dataProvider = new CActiveDataProvider('Findings');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
           
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Findings('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Findings']))
            $model->attributes = $_GET['Findings'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Findings the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Findings::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Returns the data model based on the finding_id given .
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Findings the loaded model
     * @throws CHttpException
     */
    public function loadComments($id) {
        $model = Comments::model()->findAllByAttributes(array('finding_id' => $id),array('order'=>'id DESC',));
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Returns the data model based on the finding_id given .
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Findings the loaded model
     * @throws CHttpException
     */
    public function loadUsers() {
        $model = Users::model()->findAll();
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Findings $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'findings-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
