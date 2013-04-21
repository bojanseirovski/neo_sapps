<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';


?>

<section class="wrap white reg">

    <article class="pl10">
        <h3>Feel free to contact us at any time.</h3>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	

	<?php // echo $form->errorSummary($model); ?>
        <div class="controls controls-row">

		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>

		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
                <br/>
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="controls">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	

	<?php if(CCaptcha::checkRequirements()): ?>
	
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	<?php endif; ?>
	</div>

	<div class="controls">
		<?php echo CHtml::submitButton('Submit',array('id'=>'contact-submit','class'=>'btn btn-success input-medium mb10')); ?>
	</div>

<?php $this->endWidget(); ?>
    </article>
</section>