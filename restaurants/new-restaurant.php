<!--http://www.w3schools.com/php/php_file_create.asp-->
<?php
session_start();
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
            // Create connection
            $conn = new mysqli($host, $user, $pass, $db, $port);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            //grabs user details from index.php form
            
            
            $username=addslashes($_POST["username"]);
            $rawPassword=addslashes($_POST["password"]);
            $userpassword = sha1($salt.$rawPassword);
            
            
            //starts session for user
            $_SESSION['user']=$username;
            $_SESSION['password']=$userpassword;
            $sql = "INSERT INTO users (username, password, type, salt)
            VALUES ('$username', '$userpassword', 'business', '$salt')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
            
            //makes file
            //http://www.w3schools.com/php/php_file_create.asp-
            $myfile = fopen($username .".php", "w") or die("Unable to open file!");
            $txt = "
            <?php session_start(); 
            include('../config2.php');?>
            <html>
                <head>
                    <?php
                    include('profilehead.php');?>
                </head>
                <body onload='load()'>
                    <?php
                    include ('profileheader.php');
                    include('restaurant template.php');
                    include ('../footer.php');
                    ?>
                </body>
            </html>";
            fwrite($myfile, $txt);
            fclose($myfile);
            end;
            //https://bestbook-donwhelan.c9users.io/restaurants/newuser.php
            echo "<a href='edit profile.php'>Your new profile is now available to view here</a>";
            header("Location: /restaurants/edit%20profile.php");
            
        ?>
    </body>
</html>







