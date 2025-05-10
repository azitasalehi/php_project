<!-----------------------------------------------------------------------------------
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.0
    Copyright 2024
----------------------------------------------------------------------------------->
<?php session_start();
include "../include/includes.php";
?>
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
	<link href="assets/css/vendor/owl.carousel.min.css" rel="stylesheet">

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

</head>

<body>
	<main class="wrapper sb-default ecom">
		<!-- Loader -->
		<div id="cr-overlay">
			<div class="loader"></div>
		</div>

		<!-- Header -->
		<header class="cr-header">
			<div class="container-fluid">
				<div class="cr-header-items">
					<div class="left-header">
						<a href="javascript:void(0)" class="cr-toggle-sidebar">
							<span class="outer-ring">
								<span class="inner-ring"></span>
							</span>
						</a>
						<div class="header-search-box">
							<div class="header-search-drop">
								<a href="javascript:void(0)" class="open-search"><i class="ri-search-line"></i></a>
								<form class="cr-search">
									<input class="search-input" type="text" placeholder="جستجو...">
									<a href="javascript:void(0)" class="search-btn"><i class="ri-search-line"></i>
									</a>
								</form>
							</div>
						</div>
					</div>
					<div class="right-header">
						<div class="cr-right-tool cr-flag-drop language">
							<div class="cr-hover-drop">
								<div class="cr-hover-tool">
									<img class="flag" src="assets/img/flag/us.png" alt="flag">
								</div>
								<div class="cr-hover-drop-panel right">
									<ul>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/us.png"
													alt="flag">انگلیسی</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/in.png"
													alt="flag">هندی</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/de.png"
													alt="flag">آلمانی</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/it.png"
													alt="flag">ایتالیایی</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/jp.png"
													alt="flag">ژاپنی</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="cr-right-tool apps">
							<div class="cr-hover-drop">
								<div class="cr-hover-tool">
									<i class="ri-apps-2-line"></i>
								</div>
								<div class="cr-hover-drop-panel right">
									<h6 class="title">برنامه ها</h6>
									<ul>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/1.png"
													alt="flag">انگلیسی</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/2.png"
													alt="flag">هندی</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/3.png"
													alt="flag">آلمانی</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/4.png"
													alt="flag">ایتالیایی</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/5.png"
													alt="flag">ژاپنی</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/6.png"
													alt="flag">ژاپنی</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="cr-right-tool display-screen">
							<a class="cr-screen full" href="javascript:void(0)"><i
									class="ri-fullscreen-line"></i></a>
							<a class="cr-screen reset" href="javascript:void(0)"><i
									class="ri-fullscreen-exit-line"></i></a>
						</div>
						<div class="cr-right-tool">
							<a class="cr-notify" href="javascript:void(0)">
								<i class="ri-notification-2-line"></i>
								<span class="label"></span>
							</a>
						</div>
						<div class="cr-right-tool display-dark">
							<a class="cr-mode dark" href="javascript:void(0)"><i class="ri-moon-clear-line"></i></a>
							<a class="cr-mode light" href="javascript:void(0)"><i class="ri-sun-line"></i></a>
						</div>
						<div class="cr-right-tool cr-user-drop">
							<div class="cr-hover-drop">
                                <?php if(isset($_SESSION["adminInfo"])){?>
                                <div class="cr-hover-tool">
									<img class="user" src="assets/img/user/7.jpg" alt="user">
								</div>
								<div class="cr-hover-drop-panel right">
                                        <div class="details">
										<h6><?= $_SESSION['adminInfo']['firstname']." ".$_SESSION['adminInfo']['lastname'];?></h6>
										<p><?=$_SESSION['adminInfo']['email'];?></p>
									</div>
									<ul class="border-top">
										<li><a href="vendor-profile.php">پروفایل</a></li>
										<li><a href="faq.html">کمک</a></li>
										<li><a href="chatapp.html">پیام</a></li>
										<li><a href="project-overview.html">پروژه ها</a></li>
										<li><a href="team-update.html">تنظیمات</a></li>
									</ul>
									<ul class="border-top">
										<li><a href="logout.php"><i class="ri-logout-circle-r-line"></i>خروج</a></li>
									</ul>
                                    <?php }
                                    else{?>
                                        <ul class="border-top">
                                            <li><a href="signin.php"><i class="ri-login-circle-line"></i>ورود</a></li>
                                        </ul>
                                    <?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- sidebar -->
		<div class="cr-sidebar-overlay"></div>
		<div class="cr-sidebar" data-mode="light">
			<div class="cr-sb-logo">
				<a href="index.php" class="sb-full"><img src="assets/img/logo/full-logo.png" alt="logo"></a>
				<a href="index.php" class="sb-collapse"><img src="assets/img/logo/collapse-logo.png" alt="logo"></a>
			</div>
			<div class="cr-sb-wrapper">
				<div class="cr-sb-content">
					<ul class="cr-sb-list">
						<li class="cr-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="cr-drop-toggle">
								<i class="ri-dashboard-3-line"></i><span class="condense">داشبرد<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="cr-sb-drop condense">
								<li><a href="index.php" class="cr-page-link drop"><i
									class="ri-checkbox-blank-circle-line"></i>ایکامرس</a></li>
								<li><a href="product-list.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>لیست محصول</a></li>
								<li><a href="add-product.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>افزودن محصول</a></li>
								<li><a href="add-category.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>افزودن دسته بندی</a></li>

								<li class="cr-sb-item sb-subdrop-item">
									<a href="javascript:void(0)" class="cr-sub-drop-toggle">
										<i class="ri-shield-user-line"></i><span class="condense">فروشنده<i
												class="drop-arrow ri-arrow-down-s-line"></i></span></a>
									<ul class="cr-sb-subdrop condense">
										<li><a href="vendor-profile.php" class="cr-page-link subdrop"><i
													class="ri-checkbox-blank-circle-line"></i>پروفایل</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="cr-sb-item-separator"></li>
						<li class="cr-sb-title condense">صفحات</li>
						<li class="cr-sb-item sb-drop-item">
							<a href="javascript:void(0)" class="cr-drop-toggle">
								<i class="ri-pages-line"></i><span class="condense">احراز هویت<i
										class="drop-arrow ri-arrow-down-s-line"></i></span></a>
							<ul class="cr-sb-drop condense">
								<li><a href="signin.php" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i></i>ورود</a></li>

								<li><a href="forgot.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>فراموشی رمز عبور</a></li>
								<li><a href="two-factor.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>دو مرحله ای</a></li>
								<li><a href="reset-password.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>ریست رمز عبور</a></li>
								<li><a href="remember.html" class="cr-page-link drop"><i
											class="ri-checkbox-blank-circle-line"></i>به خاطر بسپار</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Notify sidebar -->
		<div class="cr-notify-bar-overlay"></div>
		<div class="cr-notify-bar">
			<div class="cr-bar-title">
				<h6>اطلاعیه<span class="label">12</span></h6>
				<a href="javascript:void(0)" class="close-notify"><i class="ri-close-line"></i></a>
			</div>
			<div class="cr-bar-content">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="alert-tab" data-bs-toggle="tab" data-bs-target="#alert"
							type="button" role="tab" aria-controls="alert" aria-selected="true">هشدار</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
							type="button" role="tab" aria-controls="messages" aria-selected="false">پیام</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log" type="button"
							role="tab" aria-controls="log" aria-selected="false">لاگ</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="alert" role="tabpanel" aria-labelledby="alert-tab">
						<div class="cr-alert-list">
							<ul>
								<li>
									<div class="icon cr-alert">
										<i class="ri-alarm-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">گزارش نهایی شما به تأخیر افتاده است</div>
										<p class="time">اکنون</p>
										<p class="message"> لطفاً گزارش سه ماهه خود را قبل از آن ارسال کنید - دی 15.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title"> کمپین محصول شما متوقف شده است!</div>
										<p class="time">5:45 عصر - 25/05/1403</p>
										<p class="message"> لطفاً گزارش سه ماهه خود را قبل از آن ارسال کنید دی 15.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">پرداخت شما با موفقیت پردازش می شود</div>
										<p class="time">5:45 عصر - 25/05/1403</p>
										<p class="message">کیف پول حساب خود را بررسی کنید.اگر مشکلی وجود دارد ،تیکت پشتیبانی ایجاد کنید</p>
									</div>
								</li>
					    			<li>
									<div class="icon cr-warn">
										<i class="ri-error-warning-line"></i>
									</div>
									<div class="detail">
										<div class="title">آستانه بودجه بیش از حد</div>
										<p class="time">4:15 عصر - 01/04/1403</p>
										<p class="message">آستانه بودجه برای پروژه "کرت" فراتر رفت</p>
									</div>
								</li>
								<li>
									<div class="icon cr-warn">
										<i class="ri-close-line"></i>
									</div>
									<div class="detail">
										<div class="title">ارسال پروژه رو به کاهش بود!</div>
										<p class="time">4:15 عصر - 01/04/1403</p>
										<p class="message">پروژه شما  توسط ترزا ماراس کاهش یافته است.</p>
									</div>
								</li>
								<li>
									<div class="icon cr-success">
										<i class="ri-check-double-line"></i>
									</div>
									<div class="detail">
										<div class="title">پرداخت شما با موفقیت پردازش می شود</div>
										<p class="time">5:45 عصر - 25/05/1403</p>
										<p class="message">کیف پول حساب خود را بررسی کنید.اگر مشکلی وجود دارد ،تیکت پشتیبانی ایجاد کنید</p>
									</div>
								</li>
								<li class="check"><a class="cr-primary-btn" href="chatapp.html">مشاهده همه</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
						<div class="cr-message-list">
							<ul>
								<li>
									<a href="chatapp.html" class="reply">پاسخ</a>
									<div class="user">
										<img src="assets/img/user/9.jpg" alt="user">
										<span class="label online"></span>
									</div>
									<div class="detail">
										<a href="chatapp.html" class="name">بروس ویلی</a>
										<p class="time">5:30 عصر, امروز</p>
										<p class="message">سلام ، من در حال ارسال برخی از پرونده ها هستم.لطفا از این در فرود استفاده کنید
و اطمینان حاصل کنید که این همه پرونده ها فشرده هستند.</p>
										<span class="download-files">
											<span class="download">
												<img src="assets/img/other/1.jpg" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<img src="assets/img/other/2.jpg" alt="image">
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-ppt-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="chatapp.html" class="reply">پاسخ</a>
									<div class="user">
										<img src="assets/img/user/8.jpg" alt="user">
										<span class="label offline"></span>
									</div>
									<div class="detail">
										<a href="chatapp.html" class="name">فرانک یس</a>
										<p class="time">8:30 عصر, 05/12/1403</p>
										<p class="message">لطفا نگاهی به صفحه فرود بیندازید.برخی از اتوبوس ها برای باز کردن معین وجود دارد.و داده های فرم را ذخیره کنید.</p>
									</div>
								</li>
								<li>
									<a href="chatapp.html" class="reply">پاسخ</a>
									<div class="user">
										<img src="assets/img/user/7.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="chatapp.html" class="name">فرانک یس</a>
										<p class="time">8:30 عصر, 05/12/1403</p>
										<p class="message">لطفا نگاهی به صفحه فرود بیندازید.برخی از اتوبوس ها برای باز کردن معین وجود دارد.و داده های فرم را ذخیره کنید.</p>
										<span class="download-files">
											<span class="download">
												<span class="file">
													<i class="ri-file-zip-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-text-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
											<span class="download">
												<span class="file">
													<i class="ri-file-ppt-line"></i>
												</span>
												<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
											</span>
										</span>
									</div>
								</li>
								<li>
									<a href="chatapp.html" class="reply">پاسخ</a>
									<div class="user">
										<img src="assets/img/user/6.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="chatapp.html" class="name">پگی ترنر</a>
										<p class="time">4:30 عصر, 12/12/1403</p>
										<p class="message">مسائل صفحه فرود انجام می شود.و اکنون من روی مدیر کار می کنم
ماژول کاربر</p>
									</div>
								</li>
								<li>
									<a href="chatapp.html" class="reply">پاسخ</a>
									<div class="user">
										<img src="assets/img/user/5.jpg" alt="user">
										<span class="label busy"></span>
									</div>
									<div class="detail">
										<a href="chatapp.html" class="name">علی گیتر</a>
										<p class="time">8:30 عصر, 05/12/1403</p>
										<p class="message">وظیفه ماژول بازاریابی را انجام دهید.</p>
									</div>
								</li>
								<li class="check"><a class="cr-primary-btn" href="chatapp.html">مشاهده همه</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="log-tab">
						<div class="cr-activity-list activity-list">
							<ul>
								<li>
									<span class="date-time">8 شنبه<span class="time">11:30  صبح  -05:10 عصر 
										</span></span>
									<p class="title">پروژه ارسال شده از اسمیت</p>
									<p class="detail">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
									<span class="download-files">
										<span class="download">
											<img src="assets/img/other/1.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<img src="assets/img/other/2.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-ppt-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time warn">7 پنجشنبه<span class="time">1:30  عصر - 02:30 عصر 
										</span></span>
									<p class="title"> یادآوری پروژه مارگوش</p>
									<p class="detail">تأخیر پروژه برای برخی از اشکالات.</p>
									<span class="download-files">
										<span class="download">
											<span class="file">
												<i class="ri-file-zip-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-text-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<img src="assets/img/other/3.jpg" alt="image">
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time">6 سه شنبه<span class="time">9:30 صبح - 11:00 صبح 
										</span></span>
									<p class="title">مصاحبه برای بخش مدیریت.</p>
									<p class="detail">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و سطرآنچنان که لازم است </p>
									<span class="download-files">
										<span class="download">
											<span class="file">
												<i class="ri-file-zip-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-text-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
										<span class="download">
											<span class="file">
												<i class="ri-file-ppt-line"></i>
											</span>
											<a href="javascript:void(0)"><i class="ri-download-2-line"></i></a>
										</span>
									</span>
								</li>
								<li>
									<span class="date-time">5 دوشنبه<span class="time">3:30 صبح - 4:00 عصر
										</span></span>
									<p class="title">ملاقات با آقایکن دوی</p>
									<p class="detail">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<div class="cr-main-content">
			<div class="container-fluid">
				<!-- Page title & breadcrumb -->
				<div class="cr-page-title">
					<div class="cr-breadcrumb">
						<h5>ایکامرس</h5>
						<ul>
							<li><a href="index.html">کرت</a></li>
							<li>ایکامرس</li>
						</ul>
					</div>
					<div class="cr-tools">
						<div id="pagedate">
							<div class="cr-date-range" title="تاریخ">
								<span></span>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-xxl-6 col-xl-12">
						<div class="cr-card" id="top_product_tbl">
							<div class="cr-card-header">
								<h4 class="cr-card-title">محصولات برتر</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="m-r-10 cr-full-card" title="تمام صفحه"><i
											class="ri-fullscreen-line"></i></a>
									<div class="cr-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content card-default">
								<div class="top-product-table">
									<div class="table-responsive">
										<table id="top_product_data_table" class="table">
											<thead>
												<tr>
													<th>محصول</th>
													<th>قیمت</th>
													<th>سفارشات</th>
													<th> انبار</th>
													<th>کل</th>
												</tr>
											</thead>
											<tbody>
<?php $products=products::getAllProductsBySection(0);
                                              foreach ($products as $product): ?>
												<tr>
													<td><img class="cat-thumb" src="../<?=$product->image_1?>"
															alt="clients Image"><span class="name"><?=$product->title ?></span>
													</td>
													<td><?=$product->old_price ?></td>
													<td><?php echo rand(10,100); ?></td>
                                                    <td><?php echo rand(100,200); ?></td>
                                                    <td><?php echo rand(200,300); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer>
			<div class="container-fluid">
				<div class="copyright">
					<p><span>1403</span> © کرت ، کلیه حقوق محفوظ است. </p>
					<p>ارائه از آفرید تیم</p>
				</div>
			</div>
		</footer>

		<!-- Feature tools -->
		<div class="cr-tools-sidebar-overlay"></div>
		<div class="cr-tools-sidebar">
			<a href="javascript:void(0)" class="cr-tools-sidebar-toggle in-out">
				<i class="ri-settings-4-line"></i>
			</a>
			<div class="cr-bar-title">
				<h6>ابزار</h6>
				<a href="javascript:void(0)" class="close-tools"><i class="ri-close-line"></i></a>
			</div>
			<div class="cr-tools-detail">
				<div class="cr-tools-block">
					<h3>سایدبار</h3>
					<div class="cr-tools-info">
						<div class="cr-tools-item sidebar active" data-sidebar-mode-tool="light">
							<img src="assets/img/tools/side-light.png" alt="light">
							<p>روشن</p>
						</div>
						<div class="cr-tools-item sidebar" data-sidebar-mode-tool="dark">
							<img src="assets/img/tools/side-dark.png" alt="dark">
							<p>تیره</p>
						</div>
						<div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-1">
							<img src="assets/img/tools/side-bg-1.png" alt="background">
							<p>بکگراند-1</p>
						</div>
						<div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-2">
							<img src="assets/img/tools/side-bg-2.png" alt="background">
							<p>بکگراند-2</p>
						</div>
						<div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-3">
							<img src="assets/img/tools/side-bg-3.png" alt="background">
							<p>بکگراند-3</p>
						</div>
						<div class="cr-tools-item sidebar" data-sidebar-mode-tool="bg-4">
							<img src="assets/img/tools/side-bg-4.png" alt="background">
							<p>بکگراند-4</p>
						</div>
					</div>
				</div>
				<div class="cr-tools-block">
					<h3>هدر</h3>
					<div class="cr-tools-info">
						<div class="cr-tools-item header active" data-header-mode="light">
							<img src="assets/img/tools/header-light.png" alt="light">
							<p>روشن</p>
						</div>
						<div class="cr-tools-item header" data-header-mode="dark">
							<img src="assets/img/tools/header-dark.png" alt="dark">
							<p>تیره</p>
						</div>
					</div>
				</div>
				<div class="cr-tools-block">
					<h3>پشت زمینه</h3>
					<div class="cr-tools-info">
						<div class="cr-tools-item bg active" data-bg-mode="default">
							<img src="assets/img/tools/bg-0.png" alt="default">
							<p>پیشفرض</p>
						</div>
						<div class="cr-tools-item bg" data-bg-mode="bg-1">
							<img src="assets/img/tools/bg-1.png" alt="bg-1">
							<p>بکگراند-1</p>
						</div>
						<div class="cr-tools-item bg" data-bg-mode="bg-2">
							<img src="assets/img/tools/bg-2.png" alt="bg-2">
							<p>بکگراند-2</p>
						</div>
						<div class="cr-tools-item bg" data-bg-mode="bg-3">
							<img src="assets/img/tools/bg-3.png" alt="bg-3">
							<p>بکگراند-3</p>
						</div>
						<div class="cr-tools-item bg" data-bg-mode="bg-4">
							<img src="assets/img/tools/bg-4.png" alt="bg-4">
							<p>بکگراند-4</p>
						</div>
						<div class="cr-tools-item bg" data-bg-mode="bg-5">
							<img src="assets/img/tools/bg-5.png" alt="bg-5">
							<p>بکگراند-5</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- Vendor Custom -->

	<script src="assets/js/vendor/jquery-3.6.4.min.js"></script>
	<script src="assets/js/vendor/simplebar.min.js"></script>
	<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="assets/js/vendor/apexcharts.min.js"></script>
	<script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/js/vendor/owl.carousel.min.js"></script>
	<!-- Data Tables -->
	<script src='assets/js/vendor/jquery.datatables.min.js'></script>
	<script src='assets/js/vendor/datatables.bootstrap5.min.js'></script>
	<script src='assets/js/vendor/datatables.responsive.min.js'></script>
	<!-- Caleddar -->
	<script src="assets/js/vendor/jquery.simple-calendar.js"></script>
	

	<!-- Main Custom -->
	<script src="assets/js/main.js"></script>
	<script src="assets/js/data/ecommerce-chart-data.js"></script>

	<!-- Date Range Picker -->
	<script src="assets/js/vendor/moment.min.js"></script>
	<script src="assets/js/vendor/daterangepicker.js"></script>
	<script src="assets/plugins/vendor/bootstrap-datepicker.fa.min.js"></script>
	<script src='assets/plugins/vendor/moment.js'></script>
	<script src='assets/plugins/vendor/moment-jalaali.js'></script>
	<!-- Date Range Picker -->
	<script>moment.locale("fa");</script>
	<script src="assets/js/vendor/date-range.js"></script>
</body>

</html>