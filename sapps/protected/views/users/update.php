<?php
/* @var $this UsersController */
/* @var $model Users */
if (Yii::app()->user->name == 'admin@admin.com') {
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
}
?>

<h1>Change account for  <?php echo Yii::app()->session['user']['fname'].' '.Yii::app()->session['user']['lname']; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'countries'=>$countries)); ?>