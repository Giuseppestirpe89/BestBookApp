<?php session_start(); 
include('../config2.php');
?>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $servername = "127.0.0.1";
            $username = "donwhelan";
            $password = "";
            $dbname = "user_details";
            $port = 3306;

            //Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $hours = $_POST['hours'];
            $summery = $_POST['summery'];
            $menu = $_POST['menu'];
            $name = $_SESSION['user'];
            $query = "SELECT * FROM users WHERE username = '$name'";
            $result = mysqli_query($connection, $query);
            
            $sql = "UPDATE users
                    SET hours ='$hours', summery ='$summery', menu ='$menu'
                    WHERE username = '$name'";
            
            if ($conn->query($sql) === TRUE) {
                echo "<br>New record created successfully and is ready to be viewed by the public :)
                <br><br><a href='".$name.".php'>Back to home page</a><div>";
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
    
               
            
        ?>
    </body>
</html>        