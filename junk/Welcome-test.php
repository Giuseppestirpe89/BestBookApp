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
    

    // $row = mysqli_fetch_assoc($result);
    //     for($i=0;$i<$dbCount;$i++){
    //         $dbUsername=$row['username'];
    //         $dbPassword=$row['password'];
    //         $usercheck=$_POST["username"];
    //         $notEncriptedPassword=$_POST["password"];
    //         $passwordcheck=md5($notEncriptedPassword);
    //         if($usercheck == $dbUsername && $passwordcheck == $dbPassword){
    //             echo"<h1>WELCOME ".$_POST["username"]." YOU SILLY BITCH! </h1>";
    //             $_SESSION['user']=$_POST["username"];
    //             $_SESSION['password']=$passcheck;
    //             echo"<h1>your in </h1>
    //             <p>would you like to go to the <a href='index.php'>login page</a></p>
    //             <p>would you like to go to the <a href='logout.php'>logout page</a></p>";
    //             break;
    //         }
    //         else{
    //             echo"nope <br> <a href='index.php'><p>back</p></a>";
    //         }
    //     }
        $foundUser=0;
        while ($row = mysqli_fetch_assoc($result)) {
            $dbUsername=$row['username'];
            $dbPassword=$row['password'];
            $usercheck=$_POST["username"];
            $notEncriptedPassword=$_POST["password"];
            $passwordcheck=md5($notEncriptedPassword);
            
            if($usercheck == $dbUsername && $passwordcheck == $dbPassword){
                echo"<h1>WELCOME ".$_POST["username"]." YOU SILLY BITCH! </h1>";
                $_SESSION['user']=$_POST["username"];
                $_SESSION['password']=$passcheck;
                echo"
                <p>would you like to go to the <a href='index.php'>login page</a></p>
                <p>would you like to go to the <a href='logout.php'>logout page</a></p>";
                $foundUser++;
                break;
            }
            // if($foundUser>0){
                
            // }
            // else{
            //     echo"nope <br> <a href='index.php'><p>back</p></a>";
            // }
        }
        if($foundUser == 0){
           echo"sorry not logged in <br> <a href='index.php'><p>back</p></a>"; 
        }
        
        // while ($row = mysqli_fetch_assoc($result)) {
    //     echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'] . '<br>';
    // }
         
    //     $row = mysqli_fetch_assoc($result);
    //     $dbUsername=$row['username'];
    //     $dbPassword=$row['password'];
    //     $usercheck=$_POST["username"];
    //     $notEncriptedPassword=$_POST["password"];
    //     $passwordcheck=md5($notEncriptedPassword);
    //     $dbCount;
        
    //     echo"'usercheck = '. $usercheck.' <br>'.'dbuser= '. $dbUsername.' <br>'.'password= '.$passwordcheck.' <br>'.'dbpassword= '.$dbPassword' <br>'";
        
        
            // $usercheck=$_POST["username"];
            // $passcheck=$_POST["password"];
            // echo"$usercheck" . " $passcheck";
            // $db_query=mysql_query("SELECT * FROM users WHERE username = '$usercheck'");
            // if(mysql_num_rows($db_query)==1){
            //     $record=mysql_fetch_array($db_query);
            //     if(md5($passcheck) == $record['password']){
                    
            // $usercheck=$_POST["username"];
            // $passcheck=$_POST["password"];
            // echo"$usercheck" . " $passcheck";
            
            
            // if(mysql_num_rows($db_query)==1){
            //     $record=mysql_fetch_array($db_query);
            //     if(md5($passcheck) == $record['password']){        
            //         echo"<h1>WELCOME ".$_POST["username"]."</h1>";
                    // $_SESSION['user']=$_POST["username"];
                    // $_SESSION['password']=$passcheck;
                    // echo"
                     
                    //  <p>would you like to go to the <a href='index.php'>login page</a></p>
                     
                    //  <p>would you like to go to the <a href='logout.php'>logout page</a></p>";
            //     }
            //     else{
            //         echo"nope <br> <a href='index.php'><p>back</p></a>";
            //     }
            // }
            // else{
            //     echo"sorry wrong username";
            // }
         
        
        ?>
        
    </body>
</html>