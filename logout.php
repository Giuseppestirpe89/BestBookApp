<?php session_start(); 
include('config2.php');
session_destroy();?>
<html>
    <head>
        
    </head>
    <body>
        <?php
            echo"<h1>you are now logged out</h1>
            <br>
            <a href='index.php'><p>would you like to log back in</p></a>";
            
            header("Location: index.php");
            die();
        ?>
        
        
    </body>
</html>