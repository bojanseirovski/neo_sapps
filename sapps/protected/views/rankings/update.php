<?php
/* @var $this RankingsController */
/* @var $model Rankings */

$this->breadcrumbs=array(
	'Rankings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rankings', 'url'=>array('index')),
	array('label'=>'Create Rankings', 'url'=>array('create')),
	array('label'=>'View Rankings', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rankings', 'url'=>array('admin')),
);
?>

<h1>Update Rankings <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>