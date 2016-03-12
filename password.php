<?php           



$password="9a2146dd965358e672c7aac6c53c94c4ec23fbcb";
$salt="66600742856c368b99819a5.37742069";

            $notEncriptedPassword=addslashes($password);
            $passwordcheck=sha1($salt.$notEncriptedPassword);
            echo $passwordcheck;
?>            