<?php
/* @var $this FindingsController */
/* @var $model Findings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'findings-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        ),    
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'user_id',array('value'=>Yii::app()->session['user']['id'])); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'designation'); ?>
		<?php echo $form->textField($model,'designation',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'designation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creator'); ?>
		<?php echo $form->textField($model,'creator',array('size'=>60,'maxlength'=>300,'value'=>Yii::app()->session['user']['username'])); ?>
		<?php echo $form->error($model,'creator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'neo_score'); ?>
		<?php echo $form->textField($model,'neo_score'); ?>
		<?php echo $form->error($model,'neo_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discovery_date'); ?>
		<?php echo $form->textField($model,'discovery_date',array('value'=> date('Y-m-d'))); ?>
		<?php echo $form->error($model,'discovery_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ra'); ?>
		<?php echo $form->textField($model,'ra',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'ra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'declination'); ?>
		<?php echo $form->textField($model,'declination',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'declination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v'); ?>
		<?php echo $form->textField($model,'v'); ?>
		<?php echo $form->error($model,'v'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_updated'); ?>
		<?php echo $form->textField($model,'date_updated',array('size'=>24,'maxlength'=>24,'value'=> date('Y-m-d'))); ?>
		<?php echo $form->error($model,'date_updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nob'); ?>
		<?php echo $form->textField($model,'nob'); ?>
		<?php echo $form->error($model,'nob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arc'); ?>
		<?php echo $form->textField($model,'arc'); ?>
		<?php echo $form->error($model,'arc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'h'); ?>
		<?php echo $form->textField($model,'h'); ?>
		<?php echo $form->error($model,'h'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viewpoint_type'); ?>
                <?php echo $form->dropDownList($model,'viewpoint_type',array('geocentric'=>'Geocentric','observatory'=>'Observatory code','coord'=>'Coordinates')); ?>
                <div id="observatory" style="display: none;">
                    Observatory code:<input type="text" name="Findings[observatory]" value="<?php echo Yii::app()->session['Observatory']; ?>">                    
                </div> 
                <div id="view_coord" style="display: none;">
                    Longitude:<input type="text" name="Findings[longitude]" value="<?php echo Yii::app()->session['Longitude']; ?>">(deg)E, 
                    Latitude:<input type="text" name="Findings[latitude]" value="<?php echo Yii::app()->session['Latitude']; ?>">(deg), 
                    Altitude:<input type="text" name="Findings[altitude]" value="<?php echo Yii::app()->session['Altitude']; ?>"> m
                </div>
                    
		<?php echo $form->error($model,'viewpoint_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ephemeris_interval'); ?>
		<?php echo $form->dropDownList($model,'ephemeris_interval',array('60'=>'1 hour','30'=>'30 min.','10'=>'10 min.','1'=>'1 min.')); ?>
		<?php echo $form->error($model,'ephemeris_interval'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_ephemerides'); ?>
		<?php echo $form->textField($model,'start_ephemerides'); ?>
		<?php echo $form->error($model,'start_ephemerides'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'display_positions'); ?>
		<?php echo $form->dropDownList($model,'display_positions',array('sec'=>'"/sec','min'=>'"/min','hr'=>'"/hr','day'=>'degC/day')); ?>
		<?php echo $form->error($model,'display_positions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'display_motions'); ?>
		<?php echo $form->textField($model,'display_motions'); ?>
		<?php echo $form->error($model,'display_motions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motion'); ?>
		<?php echo $form->textField($model,'motion',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'motion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'output'); ?>
		<?php echo $form->dropDownList($model,'output',array('full'=>'Full','brief'=>'Brief')); ?>
		<?php echo $form->error($model,'output'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suppress_output'); ?>
		<?php echo $form->dropDownList($model,'suppress_output',array('never'=>'never','sunrise_sunset'=>'sunrise/sunset','civil_twilight'=>'civil/twilight','nautical_twilight'=>'nautical/twilight','astronomical_twilight'=>'astronomical/twilight')); ?>
		<?php echo $form->error($model,'suppress_output'); ?>
	</div>

	<div class="row">
		<?php   
                        echo $form->labelEx($model, 'image');
                        echo $form->fileField($model, 'image');
                        echo $form->error($model, 'image');
                 ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->