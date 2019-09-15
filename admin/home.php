<?php
include('../include/config.php');
   include('../session.php');
 ?>
<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>المنسق</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

</head>

<body>
    <?php include('sidebar.php');?>
    <div class="container">
        <h1>مرحبا بعودتك <?php echo $login_session; ?></h1>
        <h2>
            <a href="logout.php">Sign Out</a></h2>

    </div>

</body>
</body>

</html>