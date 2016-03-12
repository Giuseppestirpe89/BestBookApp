<?php
//**** START Database connection script
// Connect to database script
include ("connect.php");
//**** END Database connection script
//**** START Clean out expired reservations
//**** Amount of time that reservations are held is set here 3 minutes
// Get list of expired seats from 1 table and original number of seats from another table
$clean = "SELECT r.*, a.avail
		  FROM reserves AS r
		  LEFT JOIN available AS a ON a.tablenum = r.tablenumber
		  WHERE r.restime < (NOW() - INTERVAL 3 MINUTE)";
$freequery = mysqli_query($connect, $clean) or die (mysqli_error($connect));
$num_check = mysqli_num_rows($freequery);
if ($num_check != 0){
	while ($row = mysqli_fetch_array($freequery, MYSQLI_ASSOC)){
		$dI = $row['tablenumber'];
		$dS = $row['numseats'];
		$dIdRow = $row['id'];
		$originalavail = $row['avail'];
		$date =$row['date'];
		$email =$row['email'];
		$time =$row['time'];
		// Add back the expired reserves
		$updateAvailable = $originalavail + $dS;
			
		// Delete the reserves
		$sql3 = "DELETE FROM reserves WHERE tablenumber='$dI' LIMIT 1";
		$query3 = mysqli_query($connect, $sql3);
		// Update the database with newly available seats
		$sql3 = "UPDATE available SET avail='$updateAvailable' WHERE tablenum='$dI' LIMIT 1";
		$query3 = mysqli_query($connect, $sql3);
	}
}
//**** END Clean out expired reservations

//**** START Get initial state of tables with seats after clean up
// Initialize our output to NULL
$chart = "";
// Query for tables with seats available
$sql = "SELECT * FROM available";
$query = mysqli_query($connect, $sql) or die (mysqli_error($connect));
// Loop and get all the data
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
	// Assign table data to variables
	$id = $row['id'];
	$tablenum = $row['tablenum'];
	$avail = $row['avail'];
	$date = $row['date'];
    $price = $row['price'];
    $email =$row['email'];
    $time =$row['time'];

}
$chart .= '<div class="clear">';
//**** END Get initial state of tables with seats after clean up
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include("head.php");
        ?>
        <!--draggable tables jquery function -->
        <script>
            $(function() {
                $('.ui-widget-content').resizable();
            });
            
           
            $(function() {
                $("#refresh").on("click", function() {
                    // $("#mydiv").load("auction-table.php");
                    location.reload();
                    return false;
                });
            });
            $buttonnum = 1;
            $('#btn').on('click',function(){
                $buttonnum++;
                var $newDiv=$('<div id="draggable'+$buttonnum+'" onclick="showSeats($(this).children()[0].id)" class="ui-widget-content" style="width: 50px;height: 50px;border-radius: 50px;padding: 0.3em;margin-top:-15px;"> <p id="tbl_'+ $buttonnum +'">Table '+ $buttonnum +'</p></div>');

                $( "#btn").parent().append($newDiv);
                
            });
                
            $('#btn2').on('click',function(){
                var $newDiv=$('<div id="block2"  style="background:#ffffff; width: 160px; height: 110px;padding: 0.5em; float: left;margin-top:-258px;"> <input type="text" value="Element!" /></div>');
                $( "#btn2").parent().append($newDiv);

                $('#block').resizable()({
                    start: function (event, ui) {
                        $(this).data('preventBehaviour', true);
                    }
                });
                
                $("#block:input").on('mousedown', function (e) {
                    var mdown = document.createEvent("MouseEvents");
                    mdown.initMouseEvent("mousedown", false, true, window, 0, e.screenX, e.screenY, e.clientX, e.clientY, true, false, false, true, 0, null);
                    $(this).closest('#block')[0].dispatchEvent(mdown);
                }).on('click', function (e) {
                    var $draggable = $(this).closest('#block');
                        if ($draggable.data("preventBehaviour")) {
                            e.preventDefault();
                            $draggable.data("preventBehaviour", false);
                        }
                    });
            });
        </script>
    </head>
    <body>
    <?php include("header.php"); ?>
    <!-- ============ Booking system ============= -->
    <section id="reservation mydiv" class="description_content">
        <div class="text-content container">
            <div class="col-md-6" >
                </div>
                <!-- ============ div for booking sests ============= -->
            <div class="col-md-6">
                    <div class="img-section2">
                     <div id="returnData">Click Available Tables To Book Seats</div> 
                   </div>
            </div>
            <div id="seats">
                <?php echo $chart; ?>
            </div>
            <!--DIV REFRESH-->
        	<div id="table_lay ">
        	    <button id="refresh" class="btn btn-info" >Update Layout</button>
                <div id="btn"><input name="click" class="btn btn-info" value="Add table" action="add.php" type="submit" /></div>
                <div id="btnB"><input name="click" class="btn btn-info" value="Add Block" action="add.php" type="submit" /></div>
                    <script>
                        $("#btn").click( function(){
                            $.post("writeTable.php");
                        });
                        $("#btnB").click( function(){
                            $.post("writeBlock.php");
                        });
                    </script>
            	<!--<div id="btn2"><input name="click" class="btn btn-info" value="Add element" /> </div>-->
            </div>
            <!--table floor -->
            <div id="mydiv">
                <?php
            		include("auction-table.php");
            	?>	
            </div>
		    </div> <!-- end tabl_lay -->
        </div> <!-- end conteiner wrapper -->
    </div> <!-- end container -->
        
    </section>
    <br/><br/><br/><br/><br/><br/>
    <!-- ============ social media ============= -->
        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center"><a href="#" target="_blank"> &copy; www.BestBook.ie</a></p> </div>
                 <div class="component">
                    <a href="https://www.facebook.com" class="icon icon-slide facebook">facebook</a>
                    <a href="https://www.twitter.com" class="icon icon-slide twitter">twitter</a>
                    <a href="https://www.google.com" class="icon icon-slide googleplus">google+</a>
                    <a href="https://www.github.com" class="icon icon-slide github">github</a>
                    <a href="https://www.rss.com" class="icon icon-slide rss">rss</a>
                  
                </div>
            </div>
    </body>
</html>