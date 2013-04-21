<?php
/* @var $this FindingsController */
/* @var $model Findings */

$this->menu=array(
	array('label'=>'List', 'url'=>array('index')),
	array('label'=>'New Entry', 'url'=>array('create')),
	array('label'=>'View', 'url'=>array('view', 'id'=>$model->id)),
	
);
if(Yii::app()->user->name == 'admin@admin.com' ){
    $this->menu[] = array('label'=>'Manage Findings', 'url'=>array('admin'));
}
?>

<h1>Update Findings "<?php echo $model->designation; ?>"</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>