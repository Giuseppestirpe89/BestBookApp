       <?php
        // if(isset($_SESSION['user'])){
            //http://php.net/manual/en/function.str-replace.php
            //gets url
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            //removes http://php-login-donwhelan.c9users.io/restaurants/
            $linkWithoutPrefix=str_replace("http://bestbook-donwhelan-3.c9users.io/restaurants/","",$actual_link);
            //removes %20 (spaces)
            $filename=str_replace("%20"," ",$linkWithoutPrefix);
            //removes .php
            $name=str_replace(".php","",$filename);

            //verifys user is page owner
            
            
            //nav menu
            echo"<section>
                 <div class='text-content container'>
                   <div class='col-md-3'>
                   <br><br>
                     sideNAV<br><br>
                     TYPE<br><br>
                     STAR RATING<br><br>
                     LOCATION
                      </div>
                     <div class='col-md-9'>
                     <br><br>
                       <strong> Welcome " .$_SESSION['user'] . "</strong>
                        <br><br>
                        <a href='index.php'><p>would you like to log back in</p></a>
                        <a href='welcome.php'><p>would you like to welcome</p></a>
                        <a href='../logout.php'><p>would you like to logout</p></a>
                        <br><br>
                        ";
            
                        if($_SESSION['user'] == $name){ 
                          echo"<p><b>This is your page which you can <a href='edit profile.php'>edit</a></b></p>";
                        }
            
                        //SQL query for $name info
                        $query = "SELECT * FROM users WHERE username = '$name'";
                        $result = mysqli_query($connection, $query);
                        //displays content
                        while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image'];
                            $urlName = $row['username'];
                            echo 
                            "<h2>".$row['username'] . "</h2><br><br> Hours:<br>" .
                            $row['hours'] . "<br><br> About us: <br>" .
                            $row['summery'] . "<br><br> Our Menu:<br>" .
                            $row['menu'] . "<br><br><img src='../images/profile-photos/".$name.".jpg' width='250' height='220'><br>"
                            
                            ;
                        } 
                        ?>
                        
                    <!--text-->
              <?php      
            echo"<br><br><br><br><br><br>
                    </div>
                </div>
            <section>
            ";
        //}
        // else{
        //     echo"sorry not logged in <br> <a href='index.php'><p>back</p></a>";
        // }
        ?>
        
    