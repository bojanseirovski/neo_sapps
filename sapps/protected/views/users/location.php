<?php
/* @var $this UsersController */
/* @var $model Users */

?>
<input type="hidden" id="url" value="<?php echo Yii::app()->request->hostInfo.''.Yii::app()->request->baseUrl.'/index.php?r=users/savecustomloc';?>"/>
<input type="hidden" id="user_id" value="<?php echo Yii::app()->session['user']['id'];?>"/>
<h1>Locate yourself</h1>
<p>If you have a specific location(i.e. living in a non-charted area), you can "locate" yourself here, by clicking on the map </p>
Longitude<input id="xc" type="text"/> Latitude <input id="yc" type="text"/> 
   </select> <button class="btn" onclick="showLocation()">Set</button></p>
	<canvas id="indexMap" style="background-image:url('images/image.jpg'); background-position:right top" width="927px" height="467px"></canvas>
<!-- draw a dot on canvas -->
<script type="text/javascript">
	$(document).ready(function() {
	$('#indexMap').click(function(e) {
		var offset = $(this).offset();
		XX=((e.clientX - offset.left)-462)*0.3883;
		YY=(233-(e.clientY - offset.top))*0.3854
		$('#xc').val(XX);
		$('#yc').val(YY);
		});
	});
	function showLocation()
	{
		var c=document.getElementById("indexMap");
		var ctx=c.getContext("2d");
		ctx.clearRect ( 0 , 0 , 927 , 467 );
		ctx.fillStyle = "#FF0000";
		ctx.font="19pt Calibri"
		xCoord=parseFloat(document.getElementById("xc").value);
		var xx=(xCoord+180)*2.575;
		yCoord=parseFloat(document.getElementById("yc").value);
		var yy=(90-yCoord)*2.594;
		ctx.fillText('+',Math.round(xx) , Math.round(yy));
                
                $.post($('#url').val(),
                {
                    user_id: $('#user_id').val(),
                    loc: $('#yc').val()+'_'+$('#xc').val()
                },
                function(response) {
                    console.log(response);
                    if (response.status != 'OK') {
                        alert(response.error);
                    }
                    else{
                        alert("Location Changed Successfully!");                        
                    }
                },
                "json");
	};
	function notWanted()
	{
		ctx.beginPath();
		ctx.arc(xCoord, yCoord, 5, 0, Math.PI*2, true);
		ctx.closePath();
		ctx.fill();
	}
</script>

