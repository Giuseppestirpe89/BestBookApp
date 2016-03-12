
            <?php session_start(); 
            include('../config2.php');
            ?>
            <html>
                <head>
                    <?php
                    include('profilehead.php');
                    include('../googlemapapi/viewMapHead.php');
                    ?>
                </head>
                <body onload="load()">
                    <?php
                    
                    include ('profileheader.php');
                    include('restaurant template.php');
                    include ('../footer.php');
                    ?>
                    
                    <div id="map" style="width: 500px; height: 300px"></div>
                    
                </body>
            </html>