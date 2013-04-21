<?php
/* @var $this FindingsController */
/* @var $model Findings */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'designation'); ?>
		<?php echo $form->textField($model,'designation',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creator'); ?>
		<?php echo $form->textField($model,'creator',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'neo_score'); ?>
		<?php echo $form->textField($model,'neo_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discovery_date'); ?>
		<?php echo $form->textField($model,'discovery_date',array('size'=>24,'maxlength'=>24)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ra'); ?>
		<?php echo $form->textField($model,'ra',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'declination'); ?>
		<?php echo $form->textField($model,'declination',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v'); ?>
		<?php echo $form->textField($model,'v'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_updated'); ?>
		<?php echo $form->textField($model,'date_updated',array('size'=>24,'maxlength'=>24)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nob'); ?>
		<?php echo $form->textField($model,'nob'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arc'); ?>
		<?php echo $form->textField($model,'arc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'h'); ?>
		<?php echo $form->textField($model,'h'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viewpoint_type'); ?>
		<?php echo $form->textField($model,'viewpoint_type',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ephemeris_interval'); ?>
		<?php echo $form->textField($model,'ephemeris_interval'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_ephemerides'); ?>
		<?php echo $form->textField($model,'start_ephemerides'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'display_positions'); ?>
		<?php echo $form->textField($model,'display_positions',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'display_motions'); ?>
		<?php echo $form->textField($model,'display_motions'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motion'); ?>
		<?php echo $form->textField($model,'motion',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'output'); ?>
		<?php echo $form->textField($model,'output',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suppress_output'); ?>
		<?php echo $form->textField($model,'suppress_output',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->