
<!--http://stackoverflow.com/questions/8015588/writing-some-data-to-a-specific-area-within-a-file-in-php-->
<?php


// $file = "auction.php"; 
//   $fh = fopen($file, 'r+'); 
//   $contents = fread($fh, filesize($file)); 
//   $new_contents = str_replace("<!--new-->", 
//   "<div id='draggable2' onclick='showSeats($(this).children()[0].id)' class='ui-widget-content'
// 			style='position: relative;width: 50px;height: 50px;border-radius: 50px;padding: 0.3em;'>
// 				<p id='tbl_1'>Table 2</p>
// 			</div>", $contents); 
//   fclose($fh); 

//   // Open file to write 
//   $fh = fopen($file, 'r+'); 
//   fwrite($fh, $new_contents); 
//   fclose($fh); 


//  auction-table           
$myFile = "auction-table.php";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "
<?php
include('addTable.php');
?>
";
fwrite($fh, $stringData);
fclose($fh);


//header("Location: auction.php");
 //           die();            

?>