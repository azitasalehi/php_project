<?php
include "include/includes.php";
session_start();?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ecommerce, market, shop, mart, cart, deal, multipurpose, marketplace">
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
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">

</head>

<body class="body-bg-6">

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>
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
                            <?php
                            $items=Top_header::getRightNav();
                            foreach ($items as $item):?>
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="<?=$item->a_class ?>" href="<?=$item->links?>">
                                            <i class=<?=$item->icon_src?>></i>
                                            <span><?php echo $item->title?></span>
                                        </a>
                                        <?php
                                        if ($item->menu=== 1) {?>
                                        <ul class="dropdown-menu">
                                            <?php
                                            $a_links=explode('-',$item->link_menu);
                                            $pages = explode('-', $item->pages);
                                            for ($i=0;$i<3;$i++){
                                                ?>
                                                <li>
                                                    <a class="dropdown-item" href=<?=$a_links[$i]?>> <?=$pages[$i]?></a>
                                                </li>
                                            <?php   }} ?>
                                        </ul>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
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
                            <div class="cr-cat-dropdown" style="right: 0">
                                <div class="cr-cat-block">
                                    <div class="cr-cat-tab">
                                        <div class="tab-list row">
                                            <div class="col d-flex ">
                                                <?php $categories=Top_category::getTopCategoryByParent_Id(0);
                                                foreach ($categories as $category) {
                                                    if ($category->id==1) {
                                                        ?>
                                                        <h6 style="height: 40px" class="btn btn-light"><?= $category->category_name ?></h6>
                                                        <ul class="cat-list dropdown" style="list-style: none">
                                                            <?php
                                                            $cats=Top_category::getTopCategory();
                                                            foreach ($cats as $cat) {
                                                                if ($cat->parent_id === 1) {?>
                                                                    <li><a href="shop-left-sidebar.html"><?=$cat->category_name ?></a>
                                                                    </li>
                                                                <?php } }?>
                                                        </ul>
                                                    <?php } }?>
                                                <?php foreach ($categories as $category) {
                                                    if ($category->id==2) {
                                                        ?><h6 style="height: 40px" class="btn btn-light m-2"><?= $category->category_name ?></h6>
                                                        <ul class="cat-list" style="list-style: none">
                                                            <?php
                                                            $cats=Top_category::getTopCategory();
                                                            foreach ($cats as $cat) {
                                                                if ($cat->parent_id === 2) {?>
                                                                    <li><a href="shop-left-sidebar.html"><?=$cat->category_name ?></a>
                                                                    </li>
                                                                <?php } }?>
                                                        </ul>
                                                    <?php } }?>
                                                <?php foreach ($categories as $category) {
                                                    if ($category->id==3) {
                                                        ?>
                                                        <h6 style="height: 40px" class="btn btn-light m-2"><?= $category->category_name ?></h6>
                                                        <ul class="cat-list" style="list-style: none">
                                                            <?php
                                                            $cats=Top_category::getTopCategory();
                                                            foreach ($cats as $cat) {
                                                                if ($cat->parent_id === 3) {?>
                                                                    <li><a href="shop-left-sidebar.html"><?=$cat->category_name ?></a>
                                                                    </li>
                                                                <?php } }?>
                                                        </ul>
                                                    <?php } }?>
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
                                <?php
                                $items=Top_header::getRightNav();
                                foreach ($items as $item):?>
                                    <ul class="navbar-nav">
                                        <li  class="nav-item dropdown">
                                            <a class="<?=$item->a_class ?>" href="<?=$item->links?>">
                                                <i class=<?=$item->icon_src?>></i></a>
                                            <?php
                                            if ($item->menu=== 1) {?>
                                            <ul class="dropdown-menu">
                                                <?php
                                                foreach ($item->link_menu as $link) {
                                                    $links=($link->link_menu);
                                                }
                                                $link=explode("-",$links);
                                                $pages = explode('-', $item->pages);
                                                foreach ($pages as $page):
                                                    ?>
                                                    <li>
                                                        <a class="dropdown-item" href=<?=$link?>> <?=$page?></a>
                                                    </li>
                                                <?php endforeach; }?>
                                            </ul>
                                        </li >
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">خانه</a>
                                    </li>
                                    <?php $M_items=Top_menu::getMenu();
                                    foreach($M_items as $items){
                                        if ($items->submenu==1){?>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="<?=$items->link?>">
                                                    <?= $items->title ?>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <?php  $contents=explode('-',$items->content);foreach ($contents as $content):?>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <?= $content ?>
                                                        </a>
                                                        <?php endforeach; ?>
                                                    </li>
                                                </ul>
                                            </li>
                                        <?php }}?>
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
                    <?php $M_items=Top_menu::getMenu();
                    foreach($M_items as $items){
                        if ($items->submenu==1){?>
                            <li class="dropdown drop-list">
                                <span class="menu-toggle"></span>
                                <a href="<?= $items->link?>" class="dropdown-list"><?= $items->title?></a>
                                <ul class="sub-menu">
                                    <?php  $contents=explode('-',$items->content);foreach ($contents as $content):?>
                                        <li><a href="#"><?=$content?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                        <?php }}?>
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
                            <h2>ثبت نام</h2>
                            <span> <a href="index.html">خانه</a> - Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Register -->
    <section class="section-register padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>ثبت نام</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.  و سطرآنچنان که لازم است</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cr-register" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="form-logo">
                            <img src="assets/img/logo/logo.png" alt="logo">
                        </div>
                        <form class="cr-content-form" method="post" action="form.php" id="sendform">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label> نام*</label>
                                        <input type="text" name="firstname" id="firstname" placeholder="نام خود را وارد نمایید" class="cr-form-control" value="<?php
                                        if (isset($_COOKIE["firstname"]))echo $_COOKIE["firstname"];?>">
                                        <?php if(isset($_SESSION["firstname"])){?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["firstname"];?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>نام خانوادگی*</label>
                                        <input type="text" name="lastname" placeholder="نام خانوادگی خود را وارد کنید" class="cr-form-control" value="<?php
                                        if (isset($_COOKIE["lastname"]))echo $_COOKIE["lastname"];
                                        ?>">
                                        <?php   if(isset($_SESSION["lastname"])):?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["lastname"];?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>پست الکترونیک*</label>
                                        <input type="email" name="email" placeholder="ایمیل خود را وارد کنید" class="cr-form-control" value="<?php
                                        if (isset($_COOKIE["email"]))echo $_COOKIE["email"];
                                        ?>">
                                        <?php   if(isset($_SESSION["email"])):?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["email"];?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>رمز عبور*</label>
                                        <input type="password" name="password" placeholder="رمزعبور خود را وارد کنید" class="cr-form-control">
                                        <?php   if(isset($_SESSION["password"])):?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["password"];?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>شماره تلفن*</label>
                                        <input type="number" name="mobile" placeholder="شماره تلفن خود را وارد کنید"
                                            class="cr-form-control" value="<?php
                                        if (isset($_COOKIE["mobile"]))echo $_COOKIE["mobile"];
                                        ?>">
                                        <?php   if(isset($_SESSION["mobile"])):?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["mobile"];?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>نشانی*</label>
                                        <input type="text" name="address" placeholder="نشانی" class="cr-form-control" value="<?php
                                        if (isset($_COOKIE["address"]))echo $_COOKIE["address"];
                                        ?>">
                                        <?php   if(isset($_SESSION["address"])):?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["address"];?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>شهر*</label>
                                        <select name="city" class="cr-form-control" aria-label="Default select example" >
                                            <option selected>شهر</option>
                                            <option value="1">تهران</option>
                                            <option value="2">استانبول</option>
                                            <option value="3">دبی</option>
                                        </select>
                                        <?php   if(isset($_SESSION["city"])):?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["city"];?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label> کد پستی </label>
                                        <input type="number" name="postalcode" placeholder="کد پستی" class="cr-form-control" value="<?php
                                        if (isset($_COOKIE["postalcode"]))echo $_COOKIE["postalcode"];
                                        ?>">
                                        <?php   if(isset($_SESSION["postalcode"])):?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["postalcode"];?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>کشور*</label>
                                        <select name="country" class="cr-form-control" aria-label="Default select example">
                                            <option selected>کشور</option>
                                            <option value="1">ایران</option>
                                            <option value="2">ترکیه</option>
                                            <option value="3">امارات</option>
                                        </select>
                                        <?php   if(isset($_SESSION["country"])):?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["country"];?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label> منطقه*</label>
                                        <select name="area" class="cr-form-control" aria-label="Default select example">
                                            <option selected>منطقه/ناحبه</option>
                                            <option value="1">یک</option>
                                            <option value="2">دو</option>
                                            <option value="3">سه</option>
                                        </select>
                                        <?php   if(isset($_SESSION["area"])):?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["area"];?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label> نقش کاربری*</label>
                                        <select name="role" class="cr-form-control" aria-label="Default select example">
                                            <option selected>نقش</option>
                                            <option value="1">ادمین</option>
                                            <option value="2">نویسنده</option>
                                            <option value="3">مشتری</option>
                                        </select>
                                        <?php   if(isset($_SESSION["role"])):?>
                                            <span style="font-size: 14px" class="text-danger"><?=$_SESSION["role"];?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="cr-register-buttons">
                                    <button type="submit" id="btn_submit" class="cr-button" data-send="true">ثبت نام</button>
                                    <a href="login.php" class="link">
                                        اکانت دارید؟
                                    </a>
                                </div>
                                <input type="hidden" name="answerid" value="0" id="answerid" />
                            </div>
                        </form>

                    </div>
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
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </a>

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
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="assets/js/shopping.js"></script>
<?php
session_unset();
session_destroy();?>
</body>

</html>