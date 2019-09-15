<?php
if (isset($_GET['submit'])) {
    echo $_GET['name'];
    echo $_GET['university_id'];
    echo $_GET['major'];
    echo $_GET['email'];
    echo $_GET['mobile'];
}

?>
<!DOCTYPE html>
<html dir="rtl">

<head>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

</head>
<body>

    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">جامعة الأزهر</div>
            <div class="list-group list-group-flush">
                <a href="projects.php" class="list-group-item list-group-item-action bg-light">الرئيسية</a>
                <a href="add-student.php" class="list-group-item list-group-item-action bg-light">إضافة طالب</a>
                <a href="#" class="list-group-item list-group-item-action bg-light"> تعيين مجموعة طلبة</a>
                <a href="teachers.php" class="list-group-item list-group-item-action bg-light">قائمة المشرفين</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">إضافة مشروع</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">تعيين موعد</a>
            </div>
        </div>
        <div class="container" style="margin-top:5rem;">
            <form class="form-group" action="add-student.php" method="GET">
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-labe1 text-white">الإسم</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colFormLabel" name="name"
                            placeholder="اسم الطالب" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabe2" class="col-sm-2 col-form-label text-white">الرقم الجامعي</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="university_id" id="colFormLabe2"
                            placeholder="الرقم الجامعي" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabe3" class="col-sm-2 col-form-label text-white">التخصص</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colFormLabe3" name="major" placeholder="التخصص" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabe4" class="col-sm-2 col-form-label text-white">البريد</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="colFormLabe4"
                            placeholder="البريد الإلكتروني" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabe5" class="col-sm-2 col-form-label text-white">الهاتف</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="mobile" id="colFormLabe5"
                            placeholder="الهاتف" />
                    </div>
                </div>
                <button name="submit" type="submit" class="btn btn-primary text-right text-white">
                    تسجيل
                </button>
            </form>
        </div>
    </div>
</body>

</html>