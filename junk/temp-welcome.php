<?php 
include('config2.php');
session_start(); 
?>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $usercheck=$_POST["username"];
            $passcheck=$_POST["password"];
            $db_query=mysql_query("SELECT * FROM users WHERE username = '.usercheck.'");
            if(mysql_num_rows($db_query)==1){
                $record=mysql_fetch_array($db_query);
                if(md5($passcheck) == $record['password']){
                    echo"<h1>WELCOME ".$_POST["username"]." YOU SILLY BITCH! </h1>";
                    $_SESSION['user']=$_POST["username"];
                    $_SESSION['password']=$passcheck;
                    echo"
                     
                     <p>would you like to go to the <a href='index.php'>login page</a></p>
                     
                     <p>would you like to go to the <a href='logout.php'>logout page</a></p>";
                }
                else{
                    echo"nope <br> <a href='index.php'><p>back</p></a>";
                }
            }
            else{
                echo"sorry wrong username";
            }
        ?>
        
    </body>
</html>