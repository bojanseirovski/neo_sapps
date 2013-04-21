<?php
/* @var $this UsersController */
/* @var $model Users */

if (!Yii::app()->user->isGuest) {
    $this->menu = array(
        array('label' => 'List Users', 'url' => array('index')),
        array('label' => 'Manage Users', 'url' => array('admin')),
    );
}
?>
<section class="wrap white reg">
    <article class="pl10">
        <h1>Register for an account:</h1>

        <?php echo $this->renderPartial('_form', array('model' => $model, 'countries' => $countries)); ?>

    </article>

</section>