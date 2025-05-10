
<?php include "include/includes.php";?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="ecommerce, market, shop, mart, cart, deal, multipurpose, marketplace">
    <meta name="description" content="Carrot - Multipurpose eCommerce HTML Template.">
    <meta name="author" content="ashishmaraviya">

    <title>کرت - قالب فروشگاهی چند منظوره</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/img/logo/favicon.png">

    <!-- Icon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/css/vendor/remixicon.css">

    <!-- Vendor -->
    <link rel="stylesheet" href="assets/css/vendor/animate.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.min.css">
    <link rel="stylesheet" href="assets/css/vendor/range-slider.css">
    <link rel="stylesheet" href="assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery.slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="body-bg-6">

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-header">
                        <a href="index.html" class="cr-logo">
                            <img src="assets/img/logo/logo.png" alt="logo" class="logo">
                            <img src="assets/img/logo/dark-logo.png" alt="logo" class="dark-logo">
                        </a>
                        <form class="cr-search">
                            <input class="search-input" type="text" placeholder="جستجو محصولات ...">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>همه دسته‌بندی ها</option>
                                <option value="1">مردانه</option>
                                <option value="2">زنانه</option>
                                <option value="3">الکترونیکی</option>
                              </select>
                            <a href="javascript:void(0)" class="search-btn">
                                <i class="ri-search-line"></i>
                            </a>
                        </form>
                        <div class="cr-right-bar">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle cr-right-bar-item" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>اکانت</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="register.php">ثبت نام</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="checkout.html">ادامه خرید</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="login.php">ورود</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <a href="wishlist.html" class="cr-right-bar-item">
                                <i class="ri-heart-3-line"></i>
                                <span>علاقه مندی </span>
                            </a>
                            <a href="javascript:void(0)" class="cr-right-bar-item Shopping-toggle">
                                <i class="ri-shopping-cart-line"></i>
                                <span>سبد خرید</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cr-fix" id="cr-main-menu-desk">
            <div class="container">
                <div class="cr-menu-list">
                    <div class="cr-category-icon-block">
                        <div class="cr-category-menu">
                            <div class="cr-category-toggle">
                                <i class="ri-menu-2-line"></i>
                            </div>
                        </div>
                        <div class="cr-cat-dropdown">
                            <div class="cr-cat-block">
                                <div class="cr-cat-tab">
                                    <div class="cr-tab-list nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home" type="button" role="tab"
                                            aria-controls="v-pills-home" aria-selected="true">
                                            لبنیات و نان</button>
                                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile" type="button" role="tab"
                                            aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">
                                            میوه و سبزی</button>
                                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-messages" type="button" role="tab"
                                            aria-controls="v-pills-messages" aria-selected="false" tabindex="-1">
                                           خوراکی و ادویه</button>
                                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-settings" type="button" role="tab"
                                            aria-controls="v-pills-settings" aria-selected="false" tabindex="-1">
                                            آبمیوه و نوشیدنی </button>
                                        <a class="nav-link" href="shop-left-sidebar.html">
                                            مشاهده همه </a>
                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <div class="tab-list row">
                                                <div class="col">
                                                    <h6 class="cr-col-title">لبنیات</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="shop-left-sidebar.html">شیر</a></li>
                                                        <li><a href="shop-left-sidebar.html">بستنی</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">پنیر</a></li>
                                                        <li><a href="shop-left-sidebar.html">دسر یخ زده</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">ماست یخ زده</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="cr-col-title">نان و شیرینی</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="shop-left-sidebar.html">کیک و شیرینی</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">تست  </a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">نان ها</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">بروانی شکلاتی</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">رول دارچینی </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">
                                            <div class="tab-list row">
                                                <div class="col">
                                                    <h6 class="cr-col-title">میوه</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="shop-left-sidebar.html">گل کلم</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">فلفل دلمه</a></li>
                                                        <li><a href="shop-left-sidebar.html">بروکلی</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">کلم</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">گوجه</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="cr-col-title">سبریجات</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="shop-left-sidebar.html">گل کلم</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">فلفل دلمه</a></li>
                                                        <li><a href="shop-left-sidebar.html">بروکلی</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">کلم</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">گوجه</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab">
                                            <div class="tab-list row">
                                                <div class="col">
                                                    <h6 class="cr-col-title">اسنک</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="shop-left-sidebar.html">فرنچ فرایز</a></li>
                                                        <li><a href="shop-left-sidebar.html">چیپس سیب زمینی</a></li>
                                                        <li><a href="shop-left-sidebar.html">بیسکوییت و کوکی</a></li>
                                                        <li><a href="shop-left-sidebar.html">پاپ کورن</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">کیک برنج</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="cr-col-title">ادویه</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="shop-left-sidebar.html">پودر دارچین</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">پودر کاری</a></li>
                                                        <li><a href="shop-left-sidebar.html">پودر نارگیل</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">پودر فلفل</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">پودر پاپریکا</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                            aria-labelledby="v-pills-settings-tab">
                                            <div class="tab-list row">
                                                <div class="col">
                                                    <h6 class="cr-col-title">آبمیوه</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="shop-left-sidebar.html">آب انبه</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">آب نارگیل</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">آب شاتوت</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">آب سیب</a></li>
                                                        <li><a href="shop-left-sidebar.html">آب لیچی</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="cr-col-title">نوشیدنی</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="shop-left-sidebar.html">کوکا کولا</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">کوکا کولا</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">کوکا کولا</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">کوکا کولا</a>
                                                        </li>
                                                        <li><a href="shop-left-sidebar.html">کوکا کولا</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg">
                        <a href="javascript:void(0)" class="navbar-toggler shadow-none">
                            <i class="ri-menu-3-line"></i>
                        </a>
                        <div class="cr-header-buttons">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="register.php">ثبت نام</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="checkout.html">ادامه خرید</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="login.php">ورود</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <a href="wishlist.html" class="cr-right-bar-item">
                                <i class="ri-heart-line"></i>
                            </a>
                            <a href="javascript:void(0)" class="cr-right-bar-item Shopping-toggle">
                                <i class="ri-shopping-cart-line"></i>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">
                                        خانه
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                        دسته بندی
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="shop-right-sidebar.html">
                                        فروشگاه سایدبار چپ
                                    </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="shop-left-sidebar.html">
                                        فروشگاه سایدبار راست
                                    </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="shop-full-width.html">
                                        عرض کامل
                                    </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                        محصولات
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="product-right-sidebar.html">
                                        محصول سایدبار چپ
                                    </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="product-left-sidebar.html">
                                        محصول سایدبار راست
                                    </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="product-full-width.php">
                                        محصول تمام عرض
                                    </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                        صفحات
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="about.html">درباره ما</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="contact-us.html">تماس با ما</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="cart.php">سبد خرید</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="checkout.html">ادامه خرید</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="track-order.html">پیگیری سفارش</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="wishlist.html">علاقه مندی </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="faq.html">سوالات متداول</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="login.php">ورود</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="register.php">ثبت نام</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="policy.html">سیاست</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                        بلاگ
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="blog-right-sidebar.html">
                                        سایدبار چپ
                                    </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-left-sidebar.html">
                                        سایدبار راست
                                    </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-full-width.html">
                                        عرض کامل
                                    </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-detail-right-sidebar.html">جزییات سایدبار چپ</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-detail-left-sidebar.html">جزییات سایدبار راست</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-detail-full-width.html">جزییات تمام عرض</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                        عناصر
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="elements-products.html">محصولات</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="elements-typography.html">تایپوگرافی</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="elements-buttons.html">دکمه ها</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="cr-calling">
                        <i class="ri-phone-line"></i>
                        <a href="javascript:void(0)">+123 ( 456 ) ( 7890 )</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu -->
    <div class="cr-sidebar-overlay"></div>
    <div id="cr_mobile_menu" class="cr-side-cart cr-mobile-menu">
        <div class="cr-menu-title">
            <span class="menu-title">منو</span>
            <button type="button" class="cr-close">×</button>
        </div>
        <div class="cr-menu-inner">
            <div class="cr-menu-content">
                <ul>
                    <li class="dropdown drop-list">
                        <a href="index.html">خانه</a>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)" class="dropdown-list">دسته بندی</a>
                        <ul class="sub-menu">
                            <li><a href="shop-right-sidebar.html">فروشگاه سایدبار چپ</a></li>
                            <li><a href="shop-left-sidebar.html">فروشگاه سایدبار راست</a></li>
                            <li><a href="shop-full-width.html">تمام عرض</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)" class="dropdown-list">محصول</a>
                        <ul class="sub-menu">
                            <li><a href="product-right-sidebar.html">محصول سایدبار چپ</a></li>
                            <li><a href="product-left-sidebar.html">محصول سایدبار راست</a></li>
                            <li><a href="product-full-width.php">محصول تمام عرض</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)" class="dropdown-list">صفحات</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">درباره ما</a></li>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                            <li><a href="cart.php">سبد خرید</a></li>
                            <li><a href="checkout.html">ادامه خرید</a></li>
                            <li><a href="track-order.html">پیگیری سفارش</a></li>
                            <li><a href="wishlist.html">علاقه مندی </a></li>
                            <li><a href="faq.html">سوالات متداول</a></li>
                            <li><a href="login.php">ورود</a></li>
                            <li><a href="register.php">ثبت نام</a></li>
                            <li><a href="policy.html">سیاست</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)" class="dropdown-list">بلاگ</a>
                        <ul class="sub-menu">
                            <li><a href="blog-right-sidebar.html">سایدبار چپ</a></li>
                            <li><a href="blog-left-sidebar.html">سایدبار راست</a></li>
                            <li><a href="blog-full-width.html">تمام عرض</a></li>
                            <li><a href="blog-detail-right-sidebar.html">جزییات سایدبار چپ</a></li>
                            <li><a href="blog-detail-left-sidebar.html">جزییات سایدبار راست</a></li>
                            <li><a href="blog-detail-full-width.html">جزییات تمام عرض</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <span class="menu-toggle"></span>
                        <a href="javascript:void(0)">عناصر</a>
                        <ul class="sub-menu">
                            <li><a href="elements-products.html">محصولات</a></li>
                            <li><a href="elements-typography.html">تایپوگرافی</a></li>
                            <li><a href="elements-buttons.html">دکمه ها</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>فروشگاه</h2>
                            <span> <a href="index.html">خانه</a> - فروشگاه</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop -->
    <section class="section-shop padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>دسته بندی</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.  و سطرآنچنان که لازم است</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                    <div class="row">
                        <div class="col-12">
                            <div class="cr-shop-bredekamp">
                                <div class="cr-toggle">
                                    <a href="javascript:void(0)" class="shop_side_view">
                                        <i class="ri-filter-line"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gridCol active-grid">
                                        <i class="ri-grid-line"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gridRow">
                                        <i class="ri-list-check-2"></i>
                                    </a>
                                </div>
                                <div class="center-content">
                                    <span><?php $items=products::getAll();
                                    echo sizeof($items)." مورد را برای شما پیدا کردیم";
                                    ?></span>
                                </div>
                                <div class="cr-select">
                                    <label>نمایش:</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>ویژه</option>
                                        <option value="1">یک</option>
                                        <option value="2">دو</option>
                                        <option value="3">سه</option>
                                        <option value="4">چهار</option>
                                        <option value="5">پنج</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-50 mb-minus-24">
                        <?php
                        $products=products::getAll();
                        foreach($products as $product):
                        ?>
                        <div class="col-lg-3 col-6 cr-product-box mb-24">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="<?=$product->image_1 ?>" alt="product-1">
                                    </div>
                                    <div class="cr-side-view">
                                        <a href="javascript:void(0)" class="wishlist">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                            role="button">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </div>
                                    <a class="cr-shopping-bag" href="javascript:void(0)">
                                        <i class="ri-shopping-bag-line"></i>
                                    </a>
                                </div>
                                <div class="cr-product-details">
                                    <div class="cr-brand">
                                        <a href="product-full-width.php?id=<?=$product->id?>""> <?=$product->info?> </a>
                                        <div class="cr-star">
                                            <?php
                                            $stars_fill=$product->star_filled;
                                            for ($i=1;$i<=$stars_fill;$i++):?>
                                                <i class="ri-star-smile-fill"></i>
                                            <?php endfor;
                                            $stars_unfilled=5-$stars_fill;
                                            if ($stars_unfilled!=0){
                                                for ($i=1;$i<=$stars_unfilled;$i++):?>
                                                    <i class="ri-star-line"></i>
                                                <?php endfor; }?>
                                        </div>
                                    </div>
                                    <a href="product-full-width.php?id=<?=$product->id?>" class="title"><?= $product->title ?></a>
                                    <p class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                    <p class="cr-price">
                                        <span class="new-price"><?=$product->new_price?></span>
                                        <span class="old-price"><?=$product->old_price?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                    <nav aria-label="..." class="cr-pagination">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">قبلی</span>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">بعدی</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer padding-t-100 bg-off-white">
        <div class="container">
            <div class="row footer-top padding-b-100">
                <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                    <div class="cr-footer-logo">
                        <div class="image">
                            <img src="assets/img/logo/logo.png" alt="logo" class="logo">
                            <img src="assets/img/logo/dark-logo.png" alt="logo" class="dark-logo">
                        </div>
                        <p>کرت بزرگترین بازار محصولات مواد غذایی است.نیازهای روزانه خود را از فروشگاه ما دریافت کنید.</p>
                    </div>
                    <div class="cr-footer">
                        <h4 class="cr-sub-title cr-title-hidden">
                           تماس با ما
                            <span class="cr-heading-res"></span>
                        </h4>
                        <ul class="cr-footer-links cr-footer-dropdown">
                            <li class="location-icon">
                               سک آدرس کاملا فرضی در این محل قرار دارد و شامل چند سطر میباشد
                            </li>
                            <li class="mail-icon">
                                <a href="javascript:void(0)">example@email.com</a>
                            </li>
                            <li class="phone-icon">
                                <a href="javascript:void(0)"> +91 123 4567890</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-12 col-12 cr-footer-border">
                    <div class="cr-footer">
                        <h4 class="cr-sub-title">
                            شرکت
                            <span class="cr-heading-res"></span>
                        </h4>
                        <ul class="cr-footer-links cr-footer-dropdown">
                            <li><a href="about.html">درباره ما</a></li>
                            <li><a href="track-order.html"> اطلاعات تحویل </a></li>
                            <li><a href="policy.html"> سیاست حفظ حریم خصوصی </a></li>
                            <li><a href="terms.html"> شرایط و ضوابط </a></li>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                            <li><a href="faq.html"> مرکز پشتیبانی </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-12 col-12 cr-footer-border">
                    <div class="cr-footer">
                        <h4 class="cr-sub-title">
                            دسته بندی
                            <span class="cr-heading-res"></span>
                        </h4>
                        <ul class="cr-footer-links cr-footer-dropdown">
                            <li><a href="shop-left-sidebar.html"> لبنیات و نانوایی </a></li>
                            <li><a href="shop-left-sidebar.html"> میوه و سبزی </a></li>
                            <li><a href="shop-left-sidebar.html"> میان وعده و ادویه </a></li>
                            <li><a href="shop-left-sidebar.html"> آبمیوه و نوشیدنی </a></li>
                            <li><a href="shop-left-sidebar.html"> مرغ و گوشت </a></li>
                            <li><a href="shop-left-sidebar.html"> فست فود </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-sm-12 col-12 cr-footer-border">
                    <div class="cr-footer cr-newsletter">
                        <h4 class="cr-sub-title">
                            اشتراک در خبرنامه
                            <span class="cr-heading-res"></span>
                        </h4>
                        <div class="cr-footer-links cr-footer-dropdown">
                            <form class="cr-search-footer">
                                <input class="search-input" type="text" placeholder="جستجو ... ">
                                <a href="javascript:void(0)" class="search-btn">
                                    <i class="ri-send-plane-fill"></i>
                                </a>
                            </form>
                        </div>
                        <div class="cr-social-media">
                            <span><a href="javascript:void(0)"><i class="ri-facebook-line"></i></a></span>
                            <span><a href="javascript:void(0)"><i class="ri-twitter-x-line"></i></a></span>
                            <span><a href="javascript:void(0)"><i class="ri-dribbble-line"></i></a></span>
                            <span><a href="javascript:void(0)"><i class="ri-instagram-line"></i></a></span>
                        </div>
                        <div class="cr-payment">
                            <div class="cr-insta-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="assets/img/insta/1.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="assets/img/insta/2.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="assets/img/insta/3.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="assets/img/insta/4.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="assets/img/insta/5.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="assets/img/insta/6.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="assets/img/insta/7.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="cr-payment-image">
                                            <img src="assets/img/insta/8.jpg" alt="insta">
                                            <div class="payment-overlay"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cr-last-footer">
                <p>&copy; <span>1403</span> <a href="index.html">کرت</a>, همه حقوق محفوظ است.</p>
            </div>
        </div>
    </footer>

    <!-- Tab to top -->
    <a href="#Top" class="back-to-top result-placeholder">
        <i class="ri-arrow-up-line"></i>
        <div class="back-to-top-wrap">
            <svg viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
    </a>

    <!-- Model -->
    <div class="modal fade quickview-modal" id="quickview" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered cr-modal-dialog">
            <div class="modal-content">
                <button type="button" class="cr-close-model btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="zoom-image-hover modal-border-image">
                                <img src="assets/img/product/tab-1.jpg" alt="product-tab-2" class="product-image">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="cr-size-and-weight-contain">
                                <h2 class="heading">هلو تازه با هسته اورگانیک و طبیعی</h2>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است ,</p>
                            </div>
                            <div class="cr-size-and-weight">
                                <div class="cr-review-star">
                                    <div class="cr-star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <p>( 75 نظر)</p>
                                </div>
                                <div class="cr-product-price">
                                    <span class="new-price">120 تومان</span>
                                    <span class="old-price">123 تومان</span>
                                </div>
                                <div class="cr-size-weight">
                                    <h5><span>اندازه</span>/<span>وزن</span> :</h5>
                                    <div class="cr-kg">
                                        <ul>
                                            <li class="active-color">500 گرم</li>
                                            <li>1 کیلوگرم</li>
                                            <li>2 کیلوگرم</li>
                                            <li>5 کیلوگرم</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cr-add-card">
                                    <div class="cr-qty-main">
                                        <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                            class="quantity">
                                        <button type="button" id="add_model" class="plus">+</button>
                                        <button type="button" id="sub_model" class="minus">-</button>
                                    </div>
                                    <div class="cr-add-button">
                                        <button type="button" class="cr-button">افزودن به سبد</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart -->
    <div class="cr-cart-overlay"></div>
    <div class="cr-cart-view">
        <div class="cr-cart-inner">
            <div class="cr-cart-top">
                <div class="cr-cart-title">
                    <h6>سبد خرید من</h6>
                    <button type="button" class="close-cart">×</button>
                </div>
                <ul class="crcart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img src="assets/img/product/4.jpg"
                                alt="product-1"></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title"> انار تازه </a>
                            <span class="cart-price"><span> 56 تومان</span> 1 کیلوگرم</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img src="assets/img/product/2.jpg"
                                alt="product-2"></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title"> سیب سبز </a>
                            <span class="cart-price"><span> 76 تومان</span> 1 کیلوگرم</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img src="assets/img/product/3.jpg"
                                alt="product-3"></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title"> هندوانه - کوچک </a>
                            <span class="cart-price"><span>46 تومان</span> 5 کیلوگرم</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cr-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">ریز هزینه :</td>
                                <td class="text-right">300 تومان</td>
                            </tr>
                            <tr>
                                <td class="text-left">مالیات (20%) :</td>
                                <td class="text-right">60 تومان</td>
                            </tr>
                            <tr>
                                <td class="text-left">جمع کل:</td>
                                <td class="text-right primary-color">360 تومان</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.php" class="cr-button">مشاهده سبد خرید</a>
                    <a href="checkout.html" class="cr-btn-secondary">ادامه خرید</a>
                </div>
            </div>
        </div>
    </div>

    <!-- sidebar-shop -->
    <div class="filter-sidebar-overlay"></div>
    <div class="cr-shop-leftside">
        <div class="cr-shop-leftside-inner">
            <div class="cr-title">
                <h6>فیلتر</h6>
                <a href="javascript:void(0)" class="close-shop-leftside">
                    <i class="ri-close-line"></i>
                </a>
            </div>
            <div class="cr-shop-sideview">
                <div class="cr-shop-categories">
                    <h4 class="cr-shop-sub-title">دسته بندی</h4>
                    <div class="cr-checkbox">
                        <div class="checkbox-group">
                            <input type="checkbox" id="drinks">
                            <label for="drinks"> آبمیوه و نوشیدنی </label>
                            <span>[20]</span>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="drinks1">
                            <label for="drinks1"> لبنیات و شیر </label>
                            <span>[54]</span>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="drinks2">
                            <label for="drinks2"> میان وعده و ادویه </label>
                            <span>[64]</span>
                        </div>
                    </div>
                </div>
                <div class="cr-shop-price">
                    <h4 class="cr-shop-sub-title">قیمت</h4>
                    <div class="price-range-slider">
                        <div id="slider-range" class="range-bar"></div>
                        <p class="range-value">
                            <label>قیمت :</label>
                            <input type="text" id="amount" placeholder="'" readonly>
                        </p>
                        <button type="button" class="cr-button">فیلتر</button>
                    </div>
                </div>
                <div class="cr-shop-color">
                    <h4 class="cr-shop-sub-title">رنگ ها</h4>
                    <div class="cr-checkbox">
                        <div class="checkbox-group">
                            <input type="checkbox" id="blue">
                            <label for="blue">آبی</label>
                            <span class="blue"></span>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="yellow">
                            <label for="yellow">زرد</label>
                            <span class="yellow"></span>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="red">
                            <label for="red">قرمز</label>
                            <span class="red"></span>
                        </div>
                    </div>
                </div>
                <div class="cr-shop-weight">
                    <h4 class="cr-shop-sub-title">وزن</h4>
                    <div class="cr-checkbox">
                        <div class="checkbox-group">
                            <input type="checkbox" id="2kg">
                            <label for="2kg">پک 2 کیلو</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="20kg">
                            <label for="20kg">پک 20 کیلو</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="30kg">
                            <label for="30kg">پک 30 کیلو</label>
                        </div>
                    </div>
                </div>
                <div class="cr-shop-tags">
                    <h4 class="cr-shop-sub-title">برچسب ها</h4>
                    <div class="cr-shop-tags-inner">
                        <ul class="cr-tags">
                            <li><a href="javascript:void(0)"> سبزیجات </a></li>
                            <li><a href="javascript:void(0)">آبمیوه</a></li>
                            <li><a href="javascript:void(0)">غذا</a></li>
                            <li><a href="javascript:void(0)">میوه خشک</a></li>
                            <li><a href="javascript:void(0)"> سبزیجات </a></li>
                            <li><a href="javascript:void(0)">آبمیوه</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Side-tool -->
    <div class="cr-tool-overlay"></div>
    <div class="cr-tool">
        <div class="cr-tool-btn">
            <a href="javascript:void(0)" class="btn-cr-tool result-placeholder">
                <i class="ri-settings-line"></i>
            </a>
            <div class="color-variant">
                <div class="cr-bar-title">
                    <h6>ابزار</h6>
                    <a href="javascript:void(0)" class="close-tools">
                        <i class="ri-close-line"></i>
                    </a>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>انتخاب رنگ</h2>
                    </div>
                    <ul class="cr-color">
                        <li class="colors c1 active-colors">
                        </li>
                        <li class="colors c2">
                        </li>
                        <li class="colors c3">
                        </li>
                        <li class="colors c4">
                        </li>
                        <li class="colors c5">
                        </li>
                        <li class="colors c6">
                        </li>
                        <li class="colors c7">
                        </li>
                        <li class="colors c8">
                        </li>
                        <li class="colors c9">
                        </li>
                        <li class="colors c10">
                        </li>
                    </ul>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>حالت تیره</h2>
                    </div>
                    <ul class="dark-mode">
                        <li class="dark">
                        </li>
                        <li class="white active-dark-mode">
                        </li>
                    </ul>
                </div>
                <div class="cr-tools-detail">
                    <div class="heading">
                        <h2>پشت زمینه</h2>
                    </div>
                    <ul class="bg-panel">
                        <li class="bg-1">
                            <img src="assets/img/shape/bg-shape-1.png" alt="bg-shape-1">
                        </li>
                        <li class="bg-2">
                            <img src="assets/img/shape/bg-shape-2.png" alt="bg-shape-2">
                        </li>
                        <li class="bg-3">
                            <img src="assets/img/shape/bg-shape-3.png" alt="bg-shape-3">
                        </li>
                        <li class="bg-4">
                            <img src="assets/img/shape/bg-shape-4.png" alt="bg-shape-4">
                        </li>
                        <li class="bg-5">
                            <img src="assets/img/shape/bg-shape-5.png" alt="bg-shape-5">
                        </li>
                        <li class="bg-6 active-bg-panel">
                            <img src="assets/img/shape/bg-shape-6.png" alt="bg-shape-6">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Vendor Custom -->
    <script src="assets/js/vendor/jquery-3.6.4.min.js"></script>
    <script src="assets/js/vendor/jquery.zoom.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/mixitup.min.js"></script>
    <script src="assets/js/vendor/range-slider.js"></script>
    <script src="assets/js/vendor/aos.min.js"></script>
    <script src="assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>

    <!-- Main Custom -->
    <script src="assets/js/main.js"></script>
</body>

</html>