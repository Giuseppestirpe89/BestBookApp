<?php
session_start(); 
include('config2.php');
?>
<html>
    <head>
        
    </head>
    <body>
    <?php
        
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        $foundUser=0;
        
        //while loop checkes user details on database vs field entries
        while ($row = mysqli_fetch_assoc($result)) {
            $salt=$row['salt'];
            $dbUsername=$row['username'];
            $dbPassword=$row['password'];
            $usercheck=addslashes($_POST["username"]);
            $notEncriptedPassword=addslashes($_POST["password"]);
            $passwordcheck=sha1($salt.$notEncriptedPassword);
            
            if($usercheck == $dbUsername && $passwordcheck == $dbPassword){
                $_SESSION['user']=$_POST["username"];
                $_SESSION['password']=$passcheck;
                echo"
                <h1>WELCOME ". $_SESSION['user'] . "</h1>
                <p>would you like to go to the <a href='index.php'>login page</a></p>
                <p>would you like to go to the <a href='logout.php'>logout page</a></p>
                <br>
                <br>
                <p><a href='summery.php'>restaurant lists</a></p>
                <p></p>
                ";
                $foundUser++;
                header("Location: summery.php");
                break;
            }
            
            if(isset($_SESSION['user'])){
              echo"
              <h1>WELCOME ". $_SESSION['user'] . "</h1>
                <p>would you like to go to the <a href='index.php'>login page</a></p>
                <p>would you like to go to the <a href='logout.php'>logout page</a></p>
                <br>
                <br>
                <p><a href='summery.php'>restaurant lists</a></p>
                <p></p>
                ";
                $foundUser++;
                header("Location: summery.php");
                break;
            }
        }
        
        if($foundUser == 0){
           echo"sorry not logged in <br> <a href='index.php'><p>back</p></a>"; 
        }
    ?>
    </body>
</html>