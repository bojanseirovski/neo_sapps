<?php
/* @var $this FindingsController */
/* @var $model Findings */

$this->menu=array(
	array('label'=>'List', 'url'=>array('index')),
	array('label'=>'New Entry', 'url'=>array('create')),
);
if(Yii::app()->user->name == 'admin@admin.com' ){
    $this->menu[]=array('label'=>'Manage Findings', 'url'=>array('admin'));
}
if((Yii::app()->session['user']['id'] == $model->user_id) || (Yii::app()->user->name == 'admin@admin.com' )){
    $this->menu[]=array('label'=>'Delete', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'));
    $this->menu[]=array('label'=>'Update', 'url'=>array('update', 'id'=>$model->id));
}
?>

<h1> "<?php echo $model->designation; ?>"</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'designation',
		'creator',
		'neo_score',
		'discovery_date',
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
                array(        
                 'name'=>'image',
                 'value'=> CHtml::link($model->image,'uploads/'.Yii::app()->session['user']['id'].'/'.$model->image),
                 'type'=>'raw',
            ),
	),
)); 

$vote_link = '#';
if(Yii::app()->user->isGuest){
    $vote_link = Yii::app()->request->hostInfo.''.Yii::app()->request->baseUrl.'/index.php?r=site/login';    
}
?>

<div id="votes">
    <input type="hidden" id="rank_url" value="<?php echo Yii::app()->request->hostInfo.''.Yii::app()->request->baseUrl.'/index.php?r=findings/rank';?>">
    
    <a href="<?php echo $vote_link ;?>" id="vote_up" <?php if(!empty($can_rank)){ echo 'style="display:none;"' ;} ?>><img src="<?php echo Yii::app()->request->baseUrl.'/images/up.png'?>" ></a>
    <a href="<?php echo $vote_link ;?>" id="vote_down" <?php if(empty($can_rank)){ echo 'style="display:none;"' ;} ?>><img src="<?php echo Yii::app()->request->baseUrl.'/images/down.png'?>" ></a>
    <p></p>
    <p></p>
    <p id="rank_title">Number of people confirmed this:</p>
    <h2 id="rank_points"><?php echo $points; ?></h2>
</div>
<hr/>
<div id="new_comment">
    <p>Add your comment about this entry.</p>
    <form id="new_comment" method="post" action="<?php echo Yii::app()->request->hostInfo.''.Yii::app()->request->baseUrl.'/index.php?r=findings/makecomment';?>">
        <input type="hidden" id="user_id" name="Comment[user_id]" value="<? echo Yii::app()->session['user']['id']; ?>">
        <input type="hidden" id="finding_id" name="Comment[finding_id]" value="<? echo $model->id; ?>">
        <textarea id="finding_comment" name="Comment[comment]"></textarea>
        <input type="submit" id="post" value="Post">
    </form>
</div>
<div id="comments">
    <hr/>
    <div id="comments_title">
        What others have to say about this:
    </div>
    <hr/>
<?php 
if(!empty($comments) && !empty($users)){
    foreach ($comments as $single_comment){
        if(!empty($users[$single_comment->user_id]))
        echo '<div id="single_comment">'
               .'<p id="text">'.$single_comment->comment.'</p>'
               .'<span id="comment_by">By '.$users[$single_comment->user_id].'</span> - '
               .'<span id="date">On '.$single_comment->date.'</span>'
           .' </div>'.
            '<hr/>';
   }
}
?>
</div>