<section class="white wrap reg">
<?php
/* @var $this UsersController */
/* @var $model Users */

if (Yii::app()->user->name == 'admin@admin.com') {
    $this->breadcrumbs = array(
        'Users' => array('index'),
        $model->id,
    );
}
if (Yii::app()->user->name == 'admin@admin.com') {
    $this->menu = array(
        array('label' => 'List Users', 'url' => array('index')),
        array('label' => 'Create Users', 'url' => array('create')),
        array('label' => 'Update Users', 'url' => array('update', 'id' => $model->id)),
        array('label' => 'Delete Users', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
        array('label' => 'Manage Users', 'url' => array('admin')),
    );
} else {
    $this->menu = array(array('label' => 'Change account', 'url' => array('update', 'id' => $model->id)));
}
?>

<h1>Profile for <?php echo Yii::app()->session['user']['fname'].' '.Yii::app()->session['user']['lname']; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'email',
        'fname',
        'lname',
        'username',
        'country',
        'twitter',
    ),
));
?>
</section>
