<link rel="stylesheet" href="assets/css/vendor/animate.css">
<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/vendor/aos.min.css">
<link rel="stylesheet" href="assets/css/vendor/range-slider.css">
<link rel="stylesheet" href="assets/css/vendor/swiper-bundle.min.css">
<link rel="stylesheet" href="assets/css/vendor/jquery.slick.css">
<link rel="stylesheet" href="assets/css/vendor/slick-theme.css">

<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<script src="node_modules/jquery/dist/jquery.js"></script>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
<script src="node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.css">
<?php
include "include/includes.php";
if ($_SERVER['REQUEST_METHOD']== "POST"){
    if (!empty($_POST["email"]) and !empty($_POST["password"])) {
        if (users::checkLogin($_POST["email"], $_POST["password"])) {
            echo "<script>
            $(function (){Swal.fire({position: 'top-center',icon: 'success',title: 'با   موفقیت وارد شدید',showConfirmButton: false,timer: 1500});});
            setTimeout(function(){window.location.replace('admin-html/index.php')},1200);
            </script>";
        }
        else echo "<script>
              $(function (){Swal.fire({position: 'top-center',icon: 'error',title: 'این نام کاربری          وجود ندارد',showConfirmButton: false,timer: 1500});});
            setTimeout(function(){window.location.replace('register.php')},1200);
              </script>";
    }
    else{
        echo "<script>
              $(function (){Swal.fire({position: 'top-center',icon: 'error',title: 'ایمیل یا         رمز عبور خود را وارد کنید',showConfirmButton: false,timer: 1500});});
            setTimeout(function(){window.location.replace('login.php')},1300);
              </script>";
    }

}
