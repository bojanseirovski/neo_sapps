<?php
/* @var $this RankingsController */
/* @var $model Rankings */

$this->breadcrumbs=array(
	'Rankings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rankings', 'url'=>array('index')),
	array('label'=>'Manage Rankings', 'url'=>array('admin')),
);
?>

<h1>Create Rankings</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>