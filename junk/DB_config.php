<?php
    $db_con=mysql_connect("127.0.0.1","donwhelan","");
        if(!$db_con){
            die('could not connect'.mysql_error());
        }
        mysql_select_db("user_details",$db_con);
?>        