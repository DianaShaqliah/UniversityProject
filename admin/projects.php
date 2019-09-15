
<?php

$conn = new mysqli('localhost', 'root', '', 'university');
$conn->set_charset('utf8');

$sql = 'SELECT * FROM Projects';

$result = mysqli_query($conn, $sql);

$Projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($conn);

?>

<html dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
</head>

<div class="d-flex" id="wrapper">

<?php include('sidebar.php') ; ?>

        <div class="card-columns p-3">
<?php  foreach ($Projects as $Project) {
    ?>
        <div class="card p-4">
                <div class="card-body text-right">
                    <p class="card-text"><?php echo 'اسم المشروع : '.$Project['title']; ?></p>
                    <p class="card-text"><?php echo 'وصف المشروع : '.$Project['description']; ?></p>
                    <p class="card-text"><?php echo 'مشرف المشروع '.$Project['supervisor']; ?></p>
                    <p class="card-text"><?php echo  'نوع المشروع : '.$Project['type']; ?></p>
                </div>
        </div>

<?php
}
 ?>

</div>


</div>
</div>

</html>