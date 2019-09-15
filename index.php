<?php

include('include/config.php');
include('session.php');


$ann_query="SELECT * FROM `Announcements`";
$request=mysqli_query($db, $ann_query);
$Announcments = mysqli_fetch_all($request, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>جامعة الأزهر</title>
    <link rel="stylesheet" href="assets/css/project.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>

</head>

<body>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
            <a class="navbar-brand" href="#">جامعة الأزهر</a>
            <ul class="nav navbar-nav">
                <li class="nav-item active"><a href="#" class="nav-link">الرئيسية</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">الرؤية</a></li>
                <li class="nav-item"><a href="#Announcments" class="nav-link">الإعلانات</a></li>
              <?php
              if (!isset($_SESSION['login_user'])) {
                  ?>
              <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#modalPassword">تسجيل
                        الدخول</a></li>

              <?php
              } else {
                  ?> 
<li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown"
                        class="btn btn-outline-secondary dropdown-toggle"> 
                        <?php echo $login_session; ?>
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                        <li class="px-3 py-2">
                            <form class="form" role="form">
                                <div class="form-group">
                                    <a href="http://google.com">لوحة التحكم</a>
                                </div>
                                <div class="form-group">
                                    <a href="logout.php">تسجيل الخروج</a>
                                </div>
                               </form>
                        </li>
                    </ul>
                </li>
              <?php
              }
            ?>
             
            </ul>
        </nav>

        <main>
            <!-- Gallery-->
            <section style="margin: 5rem;">
                <div class="slider">
                    <ul>
                        <li><img src="assets/img/x.jpg" width="1200px" height="620"></li>
                        <li><img src="assets/img/a.jpg" width="1200px" height="620px"></li>
                        <li><img src="assets/img/v.jpg" width="1200px" height="620px"></li>
                        <li><img src="assets/img/c.jpg" width="1200px" height="620px"></li>
                    </ul>
                </div>
            </section>

            <!--About-->
            <section id="about" style="margin: 5rem;">

                <div class="card mb-1">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/img/azhar.png" width="650px" height="550px" class="card-img" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title text-right" style="color: #ff9933">
                                    جامعة الأزهر </h4>
                                <p class="card-text p-3 text-right" style="color: black ;font-size: 35px">
                                    جامعة الأزهر هي مؤسسة تعليم مستقلة غير ربحية، تهدف إلى تلبية احتياجات المجتمع
                                    الفلسطيني والعربي من موارد البشرية المؤهلة في التخصصات المعرفية المختلفة، والبحوث
                                    العلمية التطبيقية، والتنمية المستدامة مع التركيز على توظيف تكنولوجيا المعلومات
                                    والاتصالات، والمحافظة على أصالة التراث العربي الإسلامي والالتزام بمبادئ حقوق الإنسان
                                    التي تشمل العدالة والمساواة والالتزام بحكم القانون والشفافية والتسامح والاحترام وعدم
                                    التميز والتنوع والشراكة لأصحاب المصلحة.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Announcments-->
            <section id="Announcments">
                <div class="p-4">
                    <h1 class=" p-3 text-center">الإعلانات</h1>
                    <ul>
                    <?php  foreach ($Announcments as $announcment) {
                ?>
                   <li>
                   <a href="#" class="list-group-item list-group-item-action text-right disabled">
                    <span style="color:black;"> 
                           <?php echo $announcment['date']; ?>
                        </span>   <span>
                          <?php echo $announcment['content']; ?>
                      </span> 
                 </a>      
                   </li>     
<?php
            }
 ?>
                  
            </ul>
                </div>
            </section>
        </main>


        <footer style="background-color:#1a5889">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <img src="assets/img/Logo_White.png" alt="">
                    </div>
                </div>
                <div class="row text-right">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <h4 style="color: #ffe940">للتواصل مع جامعة الأزهر - غزة</h4>
                        <p>العنوان : غزة، شارع جمال عبد الناصر، دولة فلسطين</p>
                        <p>ص.ب : غزة 1277</p>
                        <p><span style="direction:ltr"> 970 - 08 - 2641884</span> : هاتف </p>
                        <p><span style="direction:ltr"> 970 - 08 - 2641888</span> : فاكس </p>
                        <p><a href="mailto:p.r@alazhar.edu.ps">p.r@alazhar.edu.ps</a></p>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <ul class="list-unstyled rtl-dir ul-margin">
                            <li><a href="https://www.facebook.com/Alazhar.Radio">إذاعة صوت الأزهر</a></li>
                            <li><a href="http://gate.alazhar.edu.ps/students/">بوابة الطالب</a></li>
                            <li><a href="http://gate.alazhar.edu.ps/studentsm/">بوابة طلبة الماجستير</a></li>
                            <li><a href="http://gate.alazhar.edu.ps/studentsphd/">بوابة طلبة الدكتوراة</a></li>
                            <li><a href="http://gts.alazhar.edu.ps">نظام متابعة الخريجين</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <ul class="list-unstyled rtl-dir ul-margin">
                            <li><a href="http://empsyndicate.alazhar.edu.ps/syn/default.asp">نقابة العاملين - جامعة
                                    الأزهر - غزة</a></li>
                            <li><a href="http://gate.alazhar.edu.ps/emps/">بوابة الموظفين</a></li>
                            <li><a href="https://mail.alazhar.edu.ps/owa/">البريد الإلكتروني</a></li>
                            <li><a href="http://www.alazhar.edu.ps/per/">المواقع الشخصية</a></li>
                            <li><a href="http://gate.alazhar.edu.ps/edu_emps/">بوابة الإشراف التربوي</a></li>
                            <li><a href="http://dstore.alazhar.edu.ps/xmlui/ldap-login">المستودع الرقمي</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <ul class="list-unstyled rtl-dir ul-margin">
                            <li><a href="#">المؤسس الشهيد ياسر عرفات</a></li>
                            <li><a href="Message.asp">رسالة الجامعة</a></li>
                            <li><a href="AboutAUG.asp">حول الجامعة</a></li>
                            <li><a href="http://www.alazhar.edu.ps/arabic/files/nashed.mp3" target="_blank">نشيد
                                    الجامعة</a></li>
                            <li><a href="#">دليل الهواتف الداخلية</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="text-center">
                            جميع الحقوق محفوظة 2017 ، جامعة الأزهر - غزة
                        </p>


                    </div>
                </div>
            </div>
        </footer>
        <!-- Model login Password-->
        <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center align-self-center">
                        <h3>تسجيل الدخول</h3>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <p class="text-center">
                                    اسم المستخدم </p>
                                <input name="username" type="text" class="form-control" 
                                   placeholder="الرقم الجامعي">
                                <small  class="text-center form-text text-muted">ادخال الرقم الجامعي الخاص
                                    بك</small>
                        
                                <p class="text-center">
                                    كلمة المرور
                                </p>
                                <input name="password" type="text" class="form-control"                                    placeholder="كلمة المرور">
                           
                                <button type="submit" name="login" class="btn btn-primary">تسجيل الدخول</button>
                     </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">نسيت كلمة المرور</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</body>

</html>
