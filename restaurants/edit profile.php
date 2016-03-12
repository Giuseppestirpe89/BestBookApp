<?php session_start(); 
include('../config2.php');
?>
<html>
    <head>
        <?php
        include('profilehead.php');?>
    </head>
    <body>
        
        <?php
        include ("profileheader.php");
        if(isset($_SESSION['user'])){
            
            //nav menu
            echo"<section>
                 <div class='text-content container'>
                   <div class='col-md-2'><br>
                     sideNAV<br><br>
                     TYPE<br><br>
                     STAR RATING<br><br>
                     LOCATION
                      </div>
                     <div class='col-md-10'>
                     <br>
                        <strong>Welcome ".$_SESSION['user']." TO PROFILE EDIT</strong><br><br>
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
                
            //profile photo upload
            // ref: http://www.tutorialspoint.com/php/php_file_uploading.htm
                
            // $host = "sql8.freemysqlhosting.net";
            // $user = "sql8109206";                     //Your Cloud 9 username
            // $pass = "WZMMjvQ6i8";                         //Remember, there is NO password by default!
            // $db = "sql8109206";                   //Your database name you want to connect to
            // $port = 3306; 
            
            

            //Create connection
            $conn = new mysqli($host, $user, $pass, $db );
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
                if(isset($_FILES['image'])){
                  $errors= array();
                  $file_name = $name.".jpg";
                  $file_size =$_FILES['image']['size'];
                  $file_tmp =$_FILES['image']['tmp_name'];
                  $file_type=$_FILES['image']['type'];
                  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
                  
                  $expensions= array("jpg");
                  
                  if(in_array($file_ext,$expensions)=== false){
                     $errors[]="extension not allowed, please choose a JPG file.";
                  }
                  
                  if($file_size > 2097152){
                     $errors[]='File size must be excately 2 MB';
                  }
                  
                  if(empty($errors)==true){
                     move_uploaded_file($file_tmp,"../images/profile-photos/".$file_name);
                     echo "Success";
                  }else{
                     print_r($errors);
                  }
                }
                echo"
                <form action='' method='POST' enctype='multipart/form-data'>
                    <input type='file' name='image' />
                    <input type='submit'/>
                </form>";
                
                //profile info edit
                echo
                "<br>
                <form action='updated.php' method='post'>
                    <strong>". $row['username'] . "</strong>
                    <br>
                    <br> 
                    Hours:<br><textarea id='hours' name='hours' rows='7' cols='50'>" . $row['hours'] . "</textarea><br><br> 
                    About us: <br><textarea id='summery' name='summery' rows='7' cols='50'>" . $row['summery'] . "</textarea><br><br> 
                    Our Menu:<br><textarea id='menu' name='menu' rows='10' cols='130'>" . $row['menu'] . "</textarea><br><br>
                    <input type='submit' value='Save' onClick='clicked()'/>
                </form>";
            
            }
            
        }
        else{
            echo"<br><br><br><br>sorry not logged in <br> <a href='../index.php'><p>back</p></a>";
        }
        echo"<br><br><br>
                    </div>
                </div>
            <section>
            ";
        include ("../footer.php");
        ?>
    </body>
</html>



