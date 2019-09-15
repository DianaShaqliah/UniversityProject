<?php
    session_start();
    if (isset($_SESSION['login_user'])) {
        // header("location:index.php");
        // die();
        $user_check = $_SESSION['login_user'];
   
        $ses_sql = mysqli_query($db, "SELECT * from `Users` where `user_uid` = '$user_check'");


        $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   
        $login_session = $row['user_name'];
    } else {


    }
