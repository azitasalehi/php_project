<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.css">

<?php
include "include/includes.php";
session_start();
if (isset($_POST['answerid'])) {
    setcookie('firstname', $_POST["firstname"], time() +60);
    setcookie('lastname', $_POST["lastname"], time() +60);
    setcookie('email', $_POST["email"], time() +60);
    setcookie('mobile', $_POST["mobile"], time() +60);
    setcookie('address', $_POST["address"], time() +60);
    setcookie('postalcode', $_POST["postalcode"], time() +60);
    if (empty($_POST["firstname"]) || $_POST["firstname"] <= 2) {
        $_SESSION["firstname"] = "نام نامعتبر است!";
    }
    if (empty($_POST["lastname"])) {
        $_SESSION["lastname"]="نام خانوادگی را وارد کنید!";
    }
    if (empty($_POST["email"]) and filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $_SESSION["email"]="فرمت ایمیل را به طور صحیح وارد کنید!";
    }
    if(empty($_POST["mobile"])|| strlen($_POST["mobile"] )!=11||substr($_POST["mobile"],0,2) !== '09') {
        $_SESSION["mobile"]="فرمت موبایل را به طور صحیح وارد کنید!";
    }
    if (empty($_POST["address"])) {
        $_SESSION["address"]="آدرس را وارد کنید.";
    }
    if (empty($_POST["city"])){
        $_SESSION["city"]="شهر خود را انتخاب کنید.";
    }
    if (empty($_POST["country"])){
        $_SESSION["country"]="کشور خود را انتخاب کنید.";
    }
    if (empty($_POST["postalcode"]) || strlen($_POST["postalcode"]) !==10) {
        $_SESSION["postalcode"]="کدپستی را به طور صحیح وارد کنید!";
    }
    if (empty($_POST["area"])){
        $_SESSION["area"]="منطقه را انتخاب کنید.";
    }
    if (empty($_POST["password"])|| strlen($_POST["password"]) < 8 && is_numeric($_POST["password"])) {
        $_SESSION["password"]="رمز عبور را به طور صحیح و عددی وارد کنید!";
    }
    if (users::isUserExist($_POST["email"])){
        $_SESSION["email"]="این ایمیل قبلا ثبت شده است!";
    }

    else {
        $userArray = array(
            'firstname' => $_POST["firstname"],
            'lastname' => $_POST["lastname"],
            'email' => $_POST["email"],
            'mobile' => $_POST["mobile"],
            'address' => $_POST["address"],
            'city' => $_POST["city"],
            'country' => $_POST["country"],
            'postalcode' => $_POST["postalcode"],
            'area' => $_POST["area"],
            'password' => $_POST["password"],
            "role"=>$_POST["role"]
        );
    users::insertUser($userArray);

    }

}
header("location:register.php");
