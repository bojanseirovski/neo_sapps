<?php
/* @var $this RankingsController */
/* @var $model Rankings */

$this->breadcrumbs=array(
	'Rankings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Rankings', 'url'=>array('index')),
	array('label'=>'Create Rankings', 'url'=>array('create')),
	array('label'=>'Update Rankings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rankings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rankings', 'url'=>array('admin')),
);
?>

<h1>View Rankings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'finding_id',
	),
)); ?>
