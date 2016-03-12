<?php
$tableCounter++;
echo"<div id='draggable".$tableCounter."' onclick='showSeats($(this).children()[0].id)' class='ui-widget-content'
	style='position: relative;width: 50px;height: 50px;border-radius: 50px;padding: 0.3em;'>
	<p id='tbl_".$tableCounter."'>Table ".$tableCounter."</p>
</div>";
?>