<?php
/* @var $this FindingsController */
/* @var $model Findings */

$this->breadcrumbs=array(
	'Findings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Findings', 'url'=>array('index')),
	array('label'=>'Create Findings', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#findings-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Findings</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'findings-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'designation',
		'creator',
		'neo_score',
		'discovery_date',
		/*
		'ra',
		'declination',
		'v',
		'date_updated',
		'note',
		'nob',
		'arc',
		'h',
		'viewpoint_type',
		'ephemeris_interval',
		'start_ephemerides',
		'display_positions',
		'display_motions',
		'motion',
		'output',
		'suppress_output',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
