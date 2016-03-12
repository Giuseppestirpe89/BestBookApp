<?php session_start(); 
include('config2.php');?>
<html>
    <head>
        <?php
        include('head.php');?>
    </head>
    <body>
        <?php
        include ("header.php");
        ?>
        
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> Do you need a Restaurant</h2>
                    <h2 class="white second-title">" We Book it for you "</h2>
                    <hr>
                </div>
            </div>
        </div>
        
        <?php
        //NAVAGATION
        // if(isset($_SESSION['user'])){
            echo"
             <section>
                 <div class='text-content container'>
                   <div class='col-md-3'>
                     sideNAV<br><br>
                     TYPE<br><br>
                     STAR RATING<br><br>
                     LOCATION
                      </div>
                     <div class='col-md-9'>
                       <strong> Welcome " .$_SESSION['user'] . "</strong>
                        <br><br>
                        <a href='index.php'><p>would you like to log back in</p></a>
                        <a href='welcome.php'><p>would you like to welcome</p></a>
                        <a href='logout.php'><p>would you like to logout</p></a>
                        <br><br>
                        ";
        
                        //loop to display all restaurants
                        $query = "SELECT * FROM users WHERE type = 'business'";
                        $result = mysqli_query($connection, $query);
                        $userName = $_SESSION['user'];
                        while ($row = mysqli_fetch_assoc($result)) {
                            //takes usename
                            $phpFileName = $row['username'];
                            echo" 
                            
                            <a href='restaurants/".$phpFileName.".php'>
                                <table>
                                    <td>
                                    
                                        <img src='images/profile-photos/".$phpFileName.".jpg' width='250' height='220'> <br>
                                    </td>
                                    <td>". 
                                        $row['username'] . "<br>" .
                                        $row['hours'] . "<br>" .
                                        $row['summery'] . 
                                    "<td>  
                                    
                                </table>
                            </a><br><br>" ;
                        } 
                
            echo"<br><br><br>
                    </div>
                </div>
            <section>
            <br><br>
            ";
        // }
        // else{
        //     echo"sorry not logged in <br> <a href='index.php'><p>back</p></a>";
        // }
        
        include ("footer.php");
        ?>
        
        
    </body>
</html>