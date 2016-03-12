<?php session_start(); 
include('../config2.php');
?>
<html>
    <head>
        
    </head>
    <body>
        <?php
            // $host = "sql8.freemysqlhosting.net";
            // $user = "sql8109206";                     //Your Cloud 9 username
            // $pass = "WZMMjvQ6i8";                         //Remember, there is NO password by default!
            // $db = "sql8109206";                   //Your database name you want to connect to
            // $port = 3306; 

            //Create connection
            $conn = new mysqli($host, $user, $pass, $db, $port);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $hours = addslashes($_POST['hours']);
            $summery = addslashes($_POST['summery']);
            $menu = addslashes($_POST['menu']);
            $name = addslashes($_SESSION['user']);
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
            
            header("Location: ".$name.".php");
            die();
        ?>
    </body>
</html>        