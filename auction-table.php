<?php
$tableCounter=1;

echo"<div id='draggable' onclick='showSeats($(this).children()[0].id)' class='ui-widget-content'
	style='position: relative;width: 50px;height: 50px;border-radius: 50px;padding: 0.3em;'>
	<p id='tbl_1'>Table 1</p>
</div>";
?>

<?php
include('addTable.php');
?>
