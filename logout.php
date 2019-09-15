 <!--  
//    session_start();

//    if(session_destroy()) {
//       header("Location: index.php");
//       die();
//    }

<?php
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: index.php');
die();
?>

4276522041896509
173
12/19