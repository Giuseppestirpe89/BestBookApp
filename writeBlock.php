<?php
$myFile = "auction-table.php";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "
<?php
include('addBlock.php');
?>
";
fwrite($fh, $stringData);
fclose($fh);
?>