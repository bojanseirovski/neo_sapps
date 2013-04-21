<?php
/* @var $this RankingsController */
/* @var $model Rankings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rankings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'finding_id'); ?>
		<?php echo $form->textField($model,'finding_id'); ?>
		<?php echo $form->error($model,'finding_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->