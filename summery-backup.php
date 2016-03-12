<?php session_start(); 
include('config2.php');?>
<html>
    <head>
        
    </head>
    <body>
        <?php
        if(isset($_SESSION['user'])){
            echo"<h1>WELCOME " .$_SESSION['user'] . " </h1>
            <br>
            <a href='index.php'><p>would you like to log back in</p></a>
            <a href='welcome.php'><p>would you like to welcome</p></a>
            <a href='logout.php'><p>would you like to logout</p></a>
            ";
            
            //loop to display all restaurants
            $query = "SELECT * FROM users WHERE type = 'business'";
            $result = mysqli_query($connection, $query);
            $userName = $_SESSION['user'];
            while ($row = mysqli_fetch_assoc($result)) {
                //takes usename
                $phpFileName = $row['username'];
                echo" 
                <a href='restaurants/".$phpFileName.".php'><div>
                <img src='images/profile-photos/".$phpFileName.".jpg' width='250' height='220'> <br>" .                
                $row['username'] . "<br>" .
                $row['hours'] . "<br>" .
                $row['summery'] . "</div></a><br><br>" ;
            }    
        }
        else{
            echo"sorry not logged in <br> <a href='index.php'><p>back</p></a>";
        }
        ?>
        
        
    </body>
</html>