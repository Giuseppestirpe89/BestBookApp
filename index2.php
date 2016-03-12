<?php 
session_start(); 
include('config2.php');
?>
<html>
    <head>
        <!--This will not run any java script, to incorparate JS ref the vid below-->
        <!--https://www.youtube.com/watch?v=j-2Rz3nL2HU-->
    </head>
    <body>
        <?php
        
        if(isset($_SESSION['user'])){
            echo"
            <p>hello ".$_SESSION['user']." you are still logged in"."
            <p>would you like to go to the <a href='welcome.php'>welcome page</a></p>
            <p>would you like to go to the <a href='logout.php'>logout page</a></p>";
        }        
        else{
            echo"
            <p>existing user ANY</p>
            <form action='welcome.php' method='post' >
                    username<input type='text' id='nameCheck' name='username'/>
                    <br>
                    password<input type='password' id='password' name='password'/>
                    <br>
                    <input type='submit' value='Login' onClick='clicked()'/>
            </form>
            <br>
            <br>
            <p>new user BUSINESS</p>
            <form action='restaurants/new-restaurant.php' method='post' >
                    username<input type='text' id='nameCheck' name='username'/>
                    <br>
                    password<input type='password' id='password' name='password'/>
                    <br>
                    <input type='submit' value='Login' onClick='clicked()'/>
            </form>
            ";
        }
        ?>
    </body>
</html>