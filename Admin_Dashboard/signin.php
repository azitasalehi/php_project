<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="admin, dashboard, ecommerce, panel" />
	<meta name="description" content="Carrot - Admin.">
	<meta name="author" content="ashishmaraviya">

	<title>کرت - ادمین</title>

	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/img/favicon/favicon.ico">

	<!-- Icon CSS -->
	<link href="assets/css/vendor/materialdesignicons.min.css" rel="stylesheet">
	<link href="assets/css/vendor/remixicon.css" rel="stylesheet">

	<!-- Vendor CSS -->
	<link href='assets/css/vendor/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/css/vendor/responsive.datatables.min.css' rel='stylesheet'>
	<link href='assets/css/vendor/daterangepicker.css' rel='stylesheet'>
	<link href="assets/css/vendor/simplebar.css" rel="stylesheet">
	<link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/vendor/apexcharts.css" rel="stylesheet">
	<link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet">

	<!-- Main CSS -->
	<link id="main-css" href="assets/css/style.css" rel="stylesheet">
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.css"

</head>
<?php
include "include/connection.php";
session_start();
function checkAdmin($email, $password,$remember_me)
{
    global $connect,$tbl_admin;

    $sql="SELECT * FROM $tbl_admin WHERE email=? AND password=?";
    $result=$connect->prepare($sql);
    $result->bindValue(1,$email);
    $result->bindValue( 2,$password);
    $result->execute();
    if ($result->rowCount()){
    $row=$result->fetch(PDO::FETCH_ASSOC);

    $admin_session=array(
    "id"=>$row['id'],
        "email"=>$row["email"],
        "firstname"=>$row["firstname"],
        "lastname"=>$row["lastname"],
        "mobile"=>$row["mobile"],
        "address"=>$row["address"],
        "bank_account"=>$row["bank_account"],
        "social_media"=>$row["social_media"]
        );
    $_SESSION["adminInfo"]=$admin_session;
    if (!empty($remember_me)) {
        setcookie("email",$email,time()+30);
        setcookie("password",$password,time()+30);
    }




    return $result;
    }
    else return false;


}
?>
<body>
	<main class="wrapper sb-default">
		<section class="auth-section anim">
			<div class="cr-login-page">
				<div class="container-fluid no-gutters">
					<div class="row">
						<div class="offset-lg-6 col-lg-6">
							<div class="content-detail">
								<div class="main-info">
									<div class="hero-container">
										<!-- Login form -->
										<form class="login-form" method="post" action="">
											<div class="imgcontainer">
												<a href="#"><img src="assets/img/logo/full-logo.png" alt="logo" class="logo"></a>
											</div>
											<div class="input-control">
<input type="text" placeholder="ایمیل را وارد کنید" name="email" required value="<?php if(isset($_COOKIE["email"])) echo $_COOKIE["email"] ; ?>">
                                                <span class="password-field-show">

<input type="password" placeholder="رمز عبور را وارد کنید" name="password" class="password-field" value="<?php if(isset($_COOKIE["password"])) echo $_COOKIE["password"] ; ?>" required>

													<span data-toggle=".password-field"
														class="fa fa-fw fa-eye field-icon toggle-password"></span>
												</span>
												<label class="label-container">مرا به خاطر بسپار
<input type="checkbox" name="remember_me"<?php if(isset($_COOKIE["password"])and isset($_COOKIE["email"])){?> checked <?php }?>>
													<span class="checkmark"></span>
												</label>
												<span class="psw"><a href="forgot.html" class="forgot-btn"> فراموشی
کلمه عبور؟</a></span>
												<div class="login-btns">
													<button type="submit" name="btn_submit">ورود</button>
												</div>
												<div class="division-lines">
													<p>یا ورود به سیستم</p>
												</div>
												<div class="login-with-btns">
													<button type="button" class="google">
														<i class="ri-google-fill"></i>
													</button>
													<button type="button" class="facebook">
														<i class="ri-facebook-fill"></i>
													</button>
													<button type="button" class="twitter">
														<i class="ri-twitter-fill"></i>
													</button>
													<button type="button" class="linkedin">
														<i class="ri-linkedin-fill"></i>
													</button>
												</div>
											</div>
										</form>
  <?php
           if (isset($_POST['btn_submit'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            if (isset($_POST["remember_me"])) $remember_me = $_POST["remember_me"] ;else$remember_me=null;
            if (checkAdmin($_POST['email'], $_POST['password'],$remember_me)) {
                header("location:index.php");
            }
            else{
             echo"<script>
              $(function (){
                  Swal.fire({
                  position: 'top-center',
                  icon: 'error',
                  title: 'این نام کاربری وجود ندارد',
                  showConfirmButton: false,
                  timer: 1500});});
              </script>";
            }
        }}?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<!-- Vendor Custom -->
	<script src="assets/js/vendor/jquery-3.6.4.min.js"></script>
	<script src="assets/js/vendor/simplebar.min.js"></script>
	<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="assets/js/vendor/apexcharts.min.js"></script>
	<script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
	<!-- Data Tables -->
	<script src='assets/js/vendor/jquery.datatables.min.js'></script>
	<script src='assets/js/vendor/datatables.bootstrap5.min.js'></script>
	<script src='assets/js/vendor/datatables.responsive.min.js'></script>
	<!-- Caleddar -->
	<script src="assets/js/vendor/jquery.simple-calendar.js"></script>
	<!-- Date Range Picker -->
	<script src="assets/js/vendor/moment.min.js"></script>
	<script src="assets/js/vendor/daterangepicker.js"></script>
	<script src="assets/js/vendor/date-range.js"></script>

	<!-- Main Custom -->
	<script src="assets/js/main.js"></script>
</body>

</html>