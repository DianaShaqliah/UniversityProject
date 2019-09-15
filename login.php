<?php
include('include/config.php');
session_start();
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // username and password sent from form
      
       $myusername = mysqli_real_escape_string($db, $_POST['username']);
       $mypassword = mysqli_real_escape_string($db, $_POST['password']);

       $sql = "SELECT * FROM `Users` WHERE `user_uid` = '$myusername' and `user_password` = '$mypassword'";
       $result = mysqli_query($db, $sql);
       $row = mysqli_fetch_array($result);
    //    $active = $row['active'];
  
       $count = mysqli_num_rows($result);
      
       // If result matched $myusername and $mypassword, table row must be 1 row
        
       if ($count == 1) {
           $_SESSION['login_user'] = $myusername;
           header("location: index.php");
       } else {
           $error = "Your Login Name or Password is invalid";
       }
   }
