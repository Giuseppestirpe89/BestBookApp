<?php session_start(); 
include('../config2.php');
?>
<html>
    <head>
        
    </head>
    <body>
        <?php
        if(isset($_SESSION['user'])){
            
            //nav menu
            echo"<h1>WELCOME ".$_SESSION['user']." TO PROFILE EDIT</h1><br>
            <a href='../index.php'><p>would you like to log back in</p></a>
            <a href='../welcome.php'><p>would you like to welcome</p></a>
            <a href='../logout.php'><p>would you like to logout</p></a>
            <p><a href='../summery.php'>restaurant lists</a></p>            
            ";

            //SQL query for $name info
            $name = $_SESSION['user'];
            $query = "SELECT * FROM users WHERE username = '$name'";
            $result = mysqli_query($connection, $query);
            //displays content
            while ($row = mysqli_fetch_assoc($result)) {
                $QueryedUsername = $row['username'];
                $QueryedHours = $row['hours'];
                $QueryedSummery = $row['summery'];
                $Queryed = $row['menu'];
                
                echo 
                "<br>
                <form action='updated.php' method='post'>
                    <strong>". $row['username'] . "</strong>
                    <br>
                    <br> 
                    Hours:<br><textarea id='hours' name='hours' rows='7' cols='50'>" . $row['hours'] . "</textarea><br><br> 
                    About us: <br><textarea id='summery' name='summery' rows='7' cols='50'>" . $row['summery'] . "</textarea><br><br> 
                    Our Menu:<br><textarea id='menu' name='menu' rows='10' cols='150'>" . $row['menu'] . "</textarea><br><br>
                    <input type='submit' value='Save' onClick='clicked()'/>
                </form>";
    
            }    
        }
        else{
            echo"sorry not logged in <br> <a href='index.php'><p>back</p></a>";
        }
        
        ?>
    </body>
</html>



