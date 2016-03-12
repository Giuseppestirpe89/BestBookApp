       <?php
        if(isset($_SESSION['user'])){
            //http://php.net/manual/en/function.str-replace.php
            //gets url
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            //removes http://php-login-donwhelan.c9users.io/restaurants/
            $linkWithoutPrefix=str_replace("http://php-login-donwhelan.c9users.io/restaurants/","",$actual_link);
            //removes %20 (spaces)
            $filename=str_replace("%20"," ",$linkWithoutPrefix);
            //removes .php
            $name=str_replace(".php"," ",$filename);
            
            //nav menu
            echo"<h1>WELCOME ".$_SESSION['user']." TO ".$name."</h1>
            <br>
            <a href='../index.php'><p>would you like to log back in</p></a>
            <a href='../welcome.php'><p>would you like to welcome</p></a>
            <a href='../logout.php'><p>would you like to logout</p></a>
            <p><a href='../summery.php'>restaurant lists</a></p>            
            ";
            
            //SQL query for $name info
            $query = "SELECT * FROM users WHERE username = '$name'";
            $result = mysqli_query($connection, $query);
            //displays content
            while ($row = mysqli_fetch_assoc($result)) {
                $urlName = $row['username'];
                echo 
                "<br><strong>".$row['username'] . "</strong><br><br> Hours:<br>" .
                $row['hours'] . "<br><br> About us: <br>" .
                $row['summery'] . "<br><br> Our Menu:<br>" .
                $row['menu'] 
                ;
            }    
            
            
        }
        else{
            echo"sorry not logged in <br> <a href='index.php'><p>back</p></a>";
        }
        ?>
        
    