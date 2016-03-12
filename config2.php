<?php
    
    //Connect to the database
    $host = "sql8.freemysqlhosting.net";
    $user = "sql8109206";                     //Your Cloud 9 username
    $pass = "WZMMjvQ6i8";                         //Remember, there is NO password by default!
    $db = "sql8109206";                   //Your database name you want to connect to
    $port = 3306;                       //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    $salt = uniqid(mt_rand(), true);
//  TEST LOOP peps pizza
    // And now to perform a simple query to make sure it's working
    
    // $query = "SELECT * FROM users";
    // $result = mysqli_query($connection, $query);
    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'] . '<br>';
    // }
    
    
    
    // $name = "peps pizza";
    // $query = "SELECT * FROM users WHERE username = '$name'";
    //                     $result = mysqli_query($connection, $query);
    //                     //displays content
    //                     while ($row = mysqli_fetch_assoc($result)) {
    //                         $image = $row['image'];
    //                         $urlName = $row['username'];
    //                         echo 
    //                         "<h2>".$row['username'] . "</h2><br><br> Hours:<br>" .
    //                         $row['hours'] . "<br><br> About us: <br>" .
    //                         $row['summery'] . "<br><br> Our Menu:<br>" .
    //                         $row['menu'] . "<br><br><img src='../images/profile-photos/".$name.".jpg' width='250' height='220'><br>"
                            
    //                         ;
    //                     } 
   
    
    //TEST LOOP peps pizza 2
    //And now to perform a simple query to make sure it's working
    // $name = "peps pizza";
    // $query = "SELECT * FROM users WHERE username = '$name'";
    // $result = mysqli_query($connection, $query);
    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'] . '<br>';
    // .}
    
    
    

?>