<?php
/* @var $this FindingsController */
/* @var $data Findings */
?>

<div class="view">
    <span id="single_finding_row_left">
	<b><?php echo CHtml::encode($data->getAttributeLabel('designation')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->designation), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creator')); ?>:</b>
	<?php echo CHtml::encode($data->creator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('neo_score')); ?>:</b>
	<?php echo CHtml::encode($data->neo_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discovery_date')); ?>:</b>
	<?php echo CHtml::encode($data->discovery_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ra')); ?>:</b>
	<?php echo CHtml::encode($data->ra); ?>
	<br />
    </span>
    <span id="single_finding_row_right">
        <?php 
        $ranking_model = Rankings::model()->findAllByAttributes(array('finding_id' => $data->id));
        $points = 0;
        foreach ($ranking_model as $rank) {
            $points++;
        }
        echo $points." Users ranked this as positive."; 
        ?>
    </span>

</div>