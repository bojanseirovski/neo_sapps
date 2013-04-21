<section class="white wrap reg">
<?php
/* @var $this FindingsController */
/* @var $model Findings */

$this->menu=array(
	array('label'=>'List', 'url'=>array('index')),
);
if(Yii::app()->user->name == 'admin@admin.com' ){
    $this->menu[]=array('label'=>'Manage Findings', 'url'=>array('admin'));
}
?>

<h1>New NEO</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</section>