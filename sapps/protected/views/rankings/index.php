<?php
/* @var $this RankingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rankings',
);

$this->menu=array(
	array('label'=>'Create Rankings', 'url'=>array('create')),
	array('label'=>'Manage Rankings', 'url'=>array('admin')),
);
?>

<h1>Rankings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
