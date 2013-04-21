<?php
/* @var $this FindingsController */
/* @var $dataProvider CActiveDataProvider */

$this->menu = array(
    array('label' => 'New Entry', 'url' => array('create')),
);

?>
<section class="wrap white reg">
    <article class="pl10">    
        <h1>NEOs - Near Earth Objects</h1>

        <?php
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
        ));
        ?>

    </article>
</section>