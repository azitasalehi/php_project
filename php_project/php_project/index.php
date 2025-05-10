<!-- ========================================================= 
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.0
    Copyright 2024
 ============================================================-->
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
    <link rel="stylesheet" href="assets/css/vendor/flaticons.css">

    <!-- Vendor -->
    <link rel="stylesheet" href="assets/css/vendor/animate.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.min.css">
    <link rel="stylesheet" href="assets/css/vendor/range-slider.css">
    <link rel="stylesheet" href="assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery.slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/owl.carousel.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/demo-2.css">
    <link rel="stylesheet" href="assets/css/color-3.css" id="add_class">
    <script src="assets/jquery-cookie/src/jquery.cookie.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body class="body-bg-6">
<?php
include "include/includes.php";
?>
<!-- Loader -->
<!--    <div id="cr-overlay">-->
<!--        <span class="loader"></span>-->
<!--    </div>-->

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
                        <?php
                        $items = Top_header::getRightNav();
                        foreach ($items as $item):?>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a style="color: #333;text-decoration: none" class="<?= $item->a_class ?>"
                                       href="<?= $item->links ?>">
                                        <i class=<?= $item->icon_src ?>></i>
                                        <span><?php echo $item->title ?></span>
                                    </a>
                                    <?php
                                    if ($item->menu === 1) { ?>
                                    <ul class="dropdown-menu">
                                        <?php
                                        $a_links = explode('-', $item->link_menu);
                                        $pages = explode('-', $item->pages);
                                        for ($i = 0; $i < 3; $i++) {
                                            ?>
                                            <li>
                                                <a class="dropdown-item" href=<?= $a_links[$i] ?>> <?= $pages[$i] ?></a>
                                            </li>
                                        <?php }
                                        } ?>
                                    </ul>
                                </li>
                            </ul>
                        <?php endforeach; ?>
                        <div class="shop">
                            <a style="color: #333;text-decoration: none;" href="cart.php"
                               class="cr-right-bar-item p-2 m-1">
                                <span style="position:absolute;left:95px;top:40px;width: 12px;height: 15px; font-size: 10px; color: white;"
                                      class="badge badge-danger"></span>
                                <i class="ri-shopping-cart-line" style=" color: #333;"></i>
                                سبد خرید</a>
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
                        <div class="cr-cat-dropdown" style="right: 0">
                            <div class="cr-cat-block">
                                <div class="cr-cat-tab">
                                    <div class="tab-list row">
                                        <div class="col d-flex ">
                                            <?php $categories = Top_category::getTopCategoryByParent_Id(0);
                                            foreach ($categories as $category) {
                                                if ($category->id == 1) {
                                                    ?>
                                                    <h6 style="height: 40px"
                                                        class="btn btn-light"><?= $category->category_name ?></h6>
                                                    <ul class="cat-list dropdown" style="list-style: none">
                                                        <?php
                                                        $cats = Top_category::getTopCategory();
                                                        foreach ($cats as $cat) {
                                                            if ($cat->parent_id === 1) { ?>
                                                                <li>
                                                                    <a href="shop-left-sidebar.html"><?= $cat->category_name ?></a>
                                                                </li>
                                                            <?php }
                                                        } ?>
                                                    </ul>
                                                <?php }
                                            } ?>
                                            <?php foreach ($categories as $category) {
                                                if ($category->id == 2) {
                                                    ?><h6 style="height: 40px"
                                                          class="btn btn-light m-2"><?= $category->category_name ?></h6>
                                                    <ul class="cat-list" style="list-style: none">
                                                        <?php
                                                        $cats = Top_category::getTopCategory();
                                                        foreach ($cats as $cat) {
                                                            if ($cat->parent_id === 2) { ?>
                                                                <li>
                                                                    <a href="shop-left-sidebar.html"><?= $cat->category_name ?></a>
                                                                </li>
                                                            <?php }
                                                        } ?>
                                                    </ul>
                                                <?php }
                                            } ?>
                                            <?php foreach ($categories as $category) {
                                                if ($category->id == 3) {
                                                    ?>
                                                    <h6 style="height: 40px"
                                                        class="btn btn-light m-2"><?= $category->category_name ?></h6>
                                                    <ul class="cat-list" style="list-style: none">
                                                        <?php
                                                        $cats = Top_category::getTopCategory();
                                                        foreach ($cats as $cat) {
                                                            if ($cat->parent_id === 3) { ?>
                                                                <li>
                                                                    <a href="shop-left-sidebar.html"><?= $cat->category_name ?></a>
                                                                </li>
                                                            <?php }
                                                        } ?>
                                                    </ul>
                                                <?php }
                                            } ?>
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
                            $items = Top_header::getRightNav();
                            foreach ($items as $item):?>
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="<?= $item->a_class ?>" href="<?= $item->links ?>">
                                            <i class=<?= $item->icon_src ?>></i></a>
                                        <?php
                                        if ($item->menu === 1) { ?>
                                        <ul class="dropdown-menu">
                                            <?php
                                            foreach ($item->link_menu as $link) {
                                                $links = ($link->link_menu);
                                            }
                                            $link = explode("-", $links);
                                            $pages = explode('-', $item->pages);
                                            foreach ($pages as $page):
                                                ?>
                                                <li>
                                                    <a class="dropdown-item" href=<?= $link ?>> <?= $page ?></a>
                                                </li>
                                            <?php endforeach;
                                            } ?>
                                        </ul>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">خانه</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="shop-full-width.php">فروشگاه</a>
                                </li>
                                <?php $M_items = Top_menu::getMenu();
                                foreach ($M_items as $items) {
                                    if ($items->submenu == 1) {
                                        ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="<?= $items->link ?>">
                                                <?= $items->title ?>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php $contents = explode('-', $items->content);
                                                foreach ($contents
                                                as $content): ?>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <?= $content ?>
                                                    </a>
                                                    <?php endforeach; ?>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php }
                                } ?>
                            </ul>
                        </div>

                    </nav>
                    <div class="cr-location-block">
                        <div class="cr-location-menu">
                            <div class="cr-location-toggle">
                                <i class="ri-map-pin-line"></i>
                                <span class="cr-location-title d-1199 cr-location">نیویورک</span>
                                <i class="ri-arrow-down-s-line d-1199 cr-angle"></i>
                            </div>
                            <div class="cr-location-content">
                                <div class="cr-location-dropdown">
                                    <div class="row cr-location-wrapper">
                                        <ul class="loc-grid">
                                            <?php $M_items = Top_menu::getMenu();
                                            foreach ($M_items as $items) {
                                                if ($items->submenu == 0) {
                                                    $contents = explode('-', $items->content);
                                                    foreach ($contents as $content):?>
                                                        <li class="loc-list current">
                                                            <i class="ri-map-pin-line"></i>
                                                            <span class="cr-detail-current"><?= $content ?></span>
                                                        </li>
                                                    <?php endforeach; ?>
                                                <?php }
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <?php $M_items = Top_menu::getMenu();
                foreach ($M_items as $items) {
                    if ($items->submenu == 1) {
                        ?>
                        <li class="dropdown drop-list">
                            <span class="menu-toggle"></span>
                            <a href="<?= $items->link ?>" class="dropdown-list"><?= $items->title ?></a>
                            <ul class="sub-menu">
                                <?php $contents = explode('-', $items->content);
                                foreach ($contents as $content):?>
                                    <li><a href="#"><?= $content ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>

    </div>
</div>

<!-- Hero slider -->
<section class="section-hero hero-2 padding-b-100 next">
    <div class="container-fluid p-0">
        <div class="cr-slider swiper-container">
            <span class="shape"></span>
            <div class="swiper-wrapper">
                <?php $slides = hero::getHeroById(0);
                foreach ($slides as $slide) {
                    ?>
                    <div class="swiper-slide">
                        <div class="<?= $slide->banner_img ?>">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cr-left-side-contain slider-animation">
                                            <?php
                                            echo $slide->title;
                                            echo $slide->main_title;
                                            echo $slide->content;
                                            ?>
                                            <div class="cr-last-buttons">
                                                <?= $slide->button ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Category -->
<section class="section-popular margin-b-100" data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <div class="row">
            <div class="title-2 mb-30 ">
                <div class="cr-banner">
                    <h2>دسته بندی ها</h2>
                </div>
            </div>
            <div class="category-slider owl-carousel">
                <?php $cats = products_cats::getAllProduct_cats();
                foreach ($cats as $cat):
                    ?>
                    <div class="category-block">
                        <div class="<?= $cat->icon_class ?>">
                            <i class="<?= $cat->icon_src ?>"></i>
                        </div>
                        <div class="category-title">
                            <h4><?= $cat->title ?></h4>
                            <?= $cat->count ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- New Products -->
<section class="section-product padding-b-100" data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-2 mb-30">
                    <div class="title-box">
                        <div class="cr-banner">
                            <h2>تازه رسیده ها</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>در مجموعه محصولات برتر مشاهده کنید.</p>
                        </div>
                    </div>
                    <div id="dealend" class="dealend-timer"></div>
                </div>
            </div>
        </div>
        <div class="new-product-slider owl-carousel mb-minus-24">
            <?php
            $products = products::getAllProductsBySection(0);
            foreach ($products as $product) {
                ?>
                <div class="product-card-2">
                    <div class="cr-product-inner">
                        <div class="cr-pro-image-outer">
                            <div class="cr-pro-image">
                                <a href="product-full-width.php?id=<?= $product->id ?>" class="image">
                                    <img class="main-image" src=<?= $product->image_1 ?> alt="Product">
                                    <img class="hover-image" src=<?= $product->image_2 ?> alt="Product">
                                </a>
                                <span class="flags">
                        <span class=<?= $product->flag_mode ?>><?= $product->flag ?></span>
                               </span>
                                <div class="cr-pro-actions">
                                    <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                       role="button">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                    <a href="compare.html" class="cr-btn-group compare" title="مقایسه">
                                        <i class="mdi mdi-vector-arrange-below"></i>
                                    </a>
                                    <a href="javascript:void(0)" title="افزودن به سبد"
                                       class="add-to-cart cr-shopping-bag">
                                        <i data-id="<?= $product->id ?>" class="ri-shopping-cart-line"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="cr-btn-group wishlist" title="علاقه مندی">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cr-pro-content">
                            <div class="cr-info">
                                <a href="product-full-width.php"><?= $product->info ?></a>
                                <div class="cr-pro-rating">
                                    <?php
                                    $stars_fill = $product->star_filled;
                                    for ($i = 1; $i <= $stars_fill; $i++):?>
                                        <i class="ri-star-line fill"></i>
                                    <?php endfor;
                                    $stars_unfilled = 5 - $stars_fill;
                                    if ($stars_unfilled != 0) {
                                        for ($i = 1; $i <= $stars_unfilled; $i++):?>
                                            <i class="ri-star-line"></i>
                                        <?php endfor;
                                    } ?>
                                </div>
                            </div>

                            <h5 class="cr-pro-title"><a href="product-left-sidebar.html"><?= $product->title ?></a>
                            </h5>
                            <span class="cr-price">
                <span class="new-price"><?= $product->new_price ?></span>
                <span class="old-price"><?= $product->old_price ?></span>
            </span>
                            <div class="cr-pro-option">
                                <div class="cr-pro-color">
                                    <ul class="cr-opt-swatch cr-change-img">
                                        <li class="active">
                                            <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                <span style="background-color:#74c7ff;"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                <span style="background-color:#f39fab;"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cr-pro-size">
                                    <ul class="cr-opt-size">
                                        <li><a href="javascript:void(0)" class="cr-opt-sz" data-old=" 22 تومان"
                                               data-new="17 تومان" data-tooltip="Medium">M</a></li>
                                        <li><a href="javascript:void(0)" class="cr-opt-sz" data-old=" 25 تومان"
                                               data-new="20 تومان" data-tooltip="Large">L</a></li>
                                        <li><a href="javascript:void(0)" class="cr-opt-sz" data-old="27 تومان"
                                               data-new=" 22 تومان" data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Services -->
<section class="section-services padding-b-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cr-services-border" data-aos="fade-up" data-aos-duration="2000">
                    <div class="cr-service-slider swiper-container">
                        <div class="swiper-wrapper">
                            <?php $services = services::getServices();
                            foreach ($services as $service):?>
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="<?= $service->service_img ?>"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4><?= $service->title ?></h4>
                                            <p><?= $service->content ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Deal -->
<section class="section-deal padding-b-100">
    <?php $banners = timer::bannerTimer();
    foreach ($banners as $banner) {
        ?>
        <div class="<?= $banner->bg_banner ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cr-deal-rightside">
                            <div class="cr-deal-content" data-aos="fade-up" data-aos-duration="2000">
                                <?php echo $banner->discount ?>
                                <h4 class="cr-deal-title"><?= $banner->title ?></h4>
                                <p><?= $banner->paragraph ?></p>
                                <div id="timer" class="cr-counter">
                                    <div class="cr-counter-inner">
                                        <h4>
                                            <span id="days"></span>
                                            <?= $banner->day ?>
                                        </h4>
                                        <h4>
                                            <span id="hours"></span>
                                            <?= $banner->hour ?>
                                        </h4>
                                        <h4>
                                            <span id="minutes"></span>
                                            <?= $banner->minutes ?>
                                        </h4>
                                        <h4>
                                            <span id="seconds"></span>
                                            <?= $banner->seconds ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>

<!-- Product banner -->
<section class="section-product-banner padding-b-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cr-banner-slider swiper-container">
                    <div class="swiper-wrapper">
                        <?php $banner_products = hero::getHeroById(1);
                        foreach ($banner_products as $banner_product) {
                            ?>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-product-banner-image">
                                    <img src="<?= $banner_product->banner_img ?>" alt="product-banner">
                                    <div class="cr-product-banner-contain">
                                        <?= $banner_product->title ?>
                                        <?= $banner_product->content ?>
                                        <div class="cr-product-banner-buttons">
                                            <?= $banner_product->button ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Collection Area Start -->
<section class="cr-product-tab cr-products padding-b-100 wow fadeInUp">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-12">
                <div class="title-2 mb-30">
                    <?php $nav_items = titleBox::getBoxBySection(0, 1);
                    foreach ($nav_items as $nav_item):
                        $item_boxes = explode('-', $nav_item->items);
                        ?>
                        <div class="title-box">
                            <div class="cr-banner">
                                <h2><?= $nav_item->title ?></h2>
                            </div>
                            <div class="cr-banner-sub-title">
                                <p><?= $nav_item->sub_title ?></p>
                            </div>
                        </div>
                        <div class="cr-pro-tab">
                            <ul class="cr-pro-tab-nav nav">
                                <?php for ($i = 0; $i <= 6; $i += 2): ?>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                            href=<?= $item_boxes[$i + 1] ?>>     <?= $item_boxes[$i] ?> </a>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
        <!-- New Product -->
        <div class="row mb-minus-24" data-aos="fade-up" data-aos-duration="2000">
            <div class="col">
                <div class="tab-content">
                    <!-- 1st Product tab start -->
                    <div class="tab-pane fade show active product-block" id="all">
                        <div class="row">
                            <?php
                            $all_products = products::getAllProductsBySection(1);
                            foreach ($all_products as $all_product) {
                                ?>
                                <div class="col-md-4 col-sm-6 col-xs-6 cr-col-5 cr-product-box">
                                    <div class="product-card-2">
                                        <div class="cr-product-inner">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image">
                                                    <a href="product-full-width.php?id=<?= $all_product->id ?>"
                                                       class="image">
                                                        <img class="main-image"
                                                             src=<?= $all_product->image_1 ?> alt="Product">
                                                        <img class="hover-image"
                                                             src=<?= $all_product->image_2 ?> alt="Product">
                                                    </a>
                                                    <span class="flags">
                                                          <span class=<?= $all_product->flag_mode ?>><?= $all_product->flag ?></span>
                                                    </span>
                                                    <div class="cr-pro-actions">
                                                        <a class="model-oraganic-product" data-bs-toggle="modal"
                                                           href="#quickview" role="button">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare"
                                                           title="مقایسه">
                                                            <i class="mdi mdi-vector-arrange-below"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="افزودن به سبد"
                                                           class="add-to-cart cr-shopping-bag">
                                                            <i data-id="<?php echo $all_product->id ?>"
                                                               class="ri-shopping-cart-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist"
                                                           title="علاقه مندی">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content">
                                                <div class="cr-info">
                                                    <a href="shop-left-sidebar.html"><?= $all_product->info ?></a>
                                                    <div class="cr-pro-rating">
                                                        <?php $stars_fill = $all_product->star_filled;
                                                        for ($i = 1; $i <= $stars_fill; $i++):?>
                                                            <i class="ri-star-line fill"></i>
                                                        <?php endfor;
                                                        $stars_unfilled = 5 - $stars_fill;
                                                        if ($stars_unfilled != 0) {
                                                            for ($i = 1; $i <= $stars_unfilled; $i++):?>
                                                                <i class="ri-star-line"></i>
                                                            <?php endfor;
                                                        } ?>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title"><a
                                                            href="product-left-sidebar.html"><?= $all_product->title ?></a>
                                                </h5>
                                                <span class="cr-price">
                                                      <span class="new-price"><?= $all_product->new_price ?></span>
                                                    <span class="old-price"><?= $all_product->old_price ?></span>
                                                </span>
                                                <div class="cr-pro-option">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img">
                                                            <li class="active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span style="background-color:#74c7ff;"></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span style="background-color:#f39fab;"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size">
                                                            <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                                   data-old=" 22 تومان" data-new="17 تومان"
                                                                   data-tooltip="Medium">M</a></li>
                                                            <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                                   data-old=" 25 تومان" data-new="20 تومان"
                                                                   data-tooltip="Large">L</a></li>
                                                            <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                                   data-old="27 تومان" data-new=" 22 تومان"
                                                                   data-tooltip="Extra Large">XL</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- 1st Product tab end -->
                    <!-- 2nd Product tab start -->
                    <div class="tab-pane fade" id="womens">
                        <div class="row">
                            <?php $all_products = products::getProductsByCategory_Section(1, 1);
                            foreach ($all_products as $all_product) {
                                ?>
                                <div class="col-md-4 col-sm-6 col-xs-6 cr-col-5 cr-product-box">
                                    <div class="product-card-2">
                                        <div class="cr-product-inner">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                             src=<?= $all_product->image_1 ?> alt="Product">
                                                        <img class="hover-image"
                                                             src=<?= $all_product->image_2 ?> alt="Product">
                                                    </a>
                                                    <span class="flags">
                                                          <span class=<?= $all_product->flag_mode ?>><?= $all_product->flag ?></span>
                                                    </span>
                                                    <div class="cr-pro-actions">
                                                        <a class="model-oraganic-product" data-bs-toggle="modal"
                                                           href="#quickview" role="button">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare"
                                                           title="مقایسه">
                                                            <i class="mdi mdi-vector-arrange-below"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="افزودن به سبد"
                                                           class="add-to-cart cr-shopping-bag">
                                                            <i class="ri-shopping-cart-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist"
                                                           title="علاقه مندی">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content">
                                                <div class="cr-info">
                                                    <a href="shop-left-sidebar.html"><?= $all_product->info ?></a>
                                                    <div class="cr-pro-rating">
                                                        <?php $stars_fill = $all_product->star_filled;
                                                        for ($i = 1; $i <= $stars_fill; $i++):?>
                                                            <i class="ri-star-line fill"></i>
                                                        <?php endfor;
                                                        $stars_unfilled = 5 - $stars_fill;
                                                        if ($stars_unfilled != 0) {
                                                            for ($i = 1; $i <= $stars_unfilled; $i++):?>
                                                                <i class="ri-star-line"></i>
                                                            <?php endfor;
                                                        } ?>
                                                    </div>
                                                </div>

                                                <h5 class="cr-pro-title"><a
                                                            href="product-left-sidebar.html"><?= $all_product->title ?></a>
                                                </h5>
                                                <span class="cr-price">
                                                      <span class="new-price"><?= $all_product->new_price ?></span>
                                                    <span class="old-price"><?= $all_product->old_price ?></span>
                                                </span>
                                                <div class="cr-pro-option">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img">
                                                            <li class="active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span style="background-color:#74c7ff;"></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span style="background-color:#f39fab;"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size">
                                                            <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                                   data-old=" 22 تومان" data-new="17 تومان"
                                                                   data-tooltip="Medium">M</a></li>
                                                            <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                                   data-old=" 25 تومان" data-new="20 تومان"
                                                                   data-tooltip="Large">L</a></li>
                                                            <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                                   data-old="27 تومان" data-new=" 22 تومان"
                                                                   data-tooltip="Extra Large">XL</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- 2nd Product tab end -->
                    <!-- 3rd Product tab start -->
                    <div class="tab-pane fade" id="mens">
                        <?php
                        $all_products = products::getProductsByCategory_Section(2, 1);
                        foreach ($all_products as $all_product) {
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-6 cr-col-5 cr-product-box">
                                <div class="product-card-2">
                                    <div class="cr-product-inner">
                                        <div class="cr-pro-image-outer">
                                            <div class="cr-pro-image">
                                                <a href="product-full-width.php" class="image">
                                                    <img class="main-image"
                                                         src=<?= $all_product->image_1 ?> alt="Product">
                                                    <img class="hover-image"
                                                         src=<?= $all_product->image_2 ?> alt="Product">
                                                </a>
                                                <span class="flags">
                                                          <span class=<?= $all_product->flag_mode ?>><?= $all_product->flag ?></span>
                                                    </span>
                                                <div class="cr-pro-actions">
                                                    <a class="model-oraganic-product" data-bs-toggle="modal"
                                                       href="#quickview" role="button">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                    <a href="compare.html" class="cr-btn-group compare" title="مقایسه">
                                                        <i class="mdi mdi-vector-arrange-below"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" title="افزودن به سبد"
                                                       class="add-to-cart cr-shopping-bag"><i
                                                                class="ri-shopping-cart-line"
                                                                id="<?= $all_product->flag ?>"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="cr-btn-group wishlist"
                                                       title="علاقه مندی">
                                                        <i class="ri-heart-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cr-pro-content">
                                            <div class="cr-info">
                                                <a href="shop-left-sidebar.html"><?= $all_product->info ?></a>
                                                <div class="cr-pro-rating">
                                                    <?php $stars_fill = $all_product->star_filled;
                                                    for ($i = 1; $i <= $stars_fill; $i++):?>
                                                        <i class="ri-star-line fill"></i>
                                                    <?php endfor;
                                                    $stars_unfilled = 5 - $stars_fill;
                                                    if ($stars_unfilled != 0) {
                                                        for ($i = 1; $i <= $stars_unfilled; $i++):?>
                                                            <i class="ri-star-line"></i>
                                                        <?php endfor;
                                                    } ?>
                                                </div>
                                            </div>

                                            <h5 class="cr-pro-title"><a
                                                        href="product-full-width.php"><?= $all_product->title ?></a>
                                            </h5>
                                            <span class="cr-price">
                                                      <span class="new-price"><?= $all_product->new_price ?></span>
                                                    <span class="old-price"><?= $all_product->old_price ?></span>
                                                </span>
                                            <div class="cr-pro-option">
                                                <div class="cr-pro-color">
                                                    <ul class="cr-opt-swatch cr-change-img">
                                                        <li class="active">
                                                            <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                <span style="background-color:#74c7ff;"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                <span style="background-color:#f39fab;"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="cr-pro-size">
                                                    <ul class="cr-opt-size">
                                                        <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                               data-old=" 22 تومان" data-new="17 تومان"
                                                               data-tooltip="Medium">M</a></li>
                                                        <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                               data-old=" 25 تومان" data-new="20 تومان"
                                                               data-tooltip="Large">L</a></li>
                                                        <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                               data-old="27 تومان" data-new=" 22 تومان"
                                                               data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- 3rd Product tab end -->
                    <!-- 4th Product tab start -->
                    <div class="tab-pane fade" id="kids">
                        <div class="row">
                            <?php $all_products = products::getProductsByCategory_Section(3, 1);
                            foreach ($all_products as $all_product) {
                                ?>
                                <div class="col-md-4 col-sm-6 col-xs-6 cr-col-5 cr-product-box">
                                    <div class="product-card-2">
                                        <div class="cr-product-inner">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                             src=<?= $all_product->image_1 ?> alt="Product">
                                                        <img class="hover-image"
                                                             src=<?= $all_product->image_2 ?> alt="Product">
                                                    </a>
                                                    <span class="flags">
                                                          <span class=<?= $all_product->flag_mode ?>><?= $all_product->flag ?></span>
                                                    </span>
                                                    <div class="cr-pro-actions">
                                                        <a class="model-oraganic-product" data-bs-toggle="modal"
                                                           href="#quickview" role="button">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare"
                                                           title="مقایسه">
                                                            <i class="mdi mdi-vector-arrange-below"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="افزودن به سبد"
                                                           class="add-to-cart cr-shopping-bag">
                                                            <i class="ri-shopping-cart-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist"
                                                           title="علاقه مندی">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content">
                                                <div class="cr-info">
                                                    <a href="shop-left-sidebar.html"><?= $all_product->info ?></a>
                                                    <div class="cr-pro-rating">
                                                        <?php
                                                        $stars_fill = $all_product->star_filled;
                                                        for ($i = 1; $i <= $stars_fill; $i++):?>
                                                            <i class="ri-star-line fill"></i>
                                                        <?php endfor;
                                                        $stars_unfilled = 5 - $stars_fill;
                                                        if ($stars_unfilled != 0) {
                                                            for ($i = 1; $i <= $stars_unfilled; $i++):?>
                                                                <i class="ri-star-line"></i>
                                                            <?php endfor;
                                                        } ?>
                                                    </div>
                                                </div>

                                                <h5 class="cr-pro-title"><a
                                                            href="product-left-sidebar.html"><?= $all_product->title ?></a>
                                                </h5>
                                                <span class="cr-price">
                                                      <span class="new-price"><?= $all_product->new_price ?></span>
                                                    <span class="old-price"><?= $all_product->old_price ?></span>
                                                </span>
                                                <div class="cr-pro-option">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img">
                                                            <li class="active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span style="background-color:#74c7ff;"></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span style="background-color:#f39fab;"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size">
                                                            <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                                   data-old=" 22 تومان" data-new="17 تومان"
                                                                   data-tooltip="Medium">M</a></li>
                                                            <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                                   data-old=" 25 تومان" data-new="20 تومان"
                                                                   data-tooltip="Large">L</a></li>
                                                            <li><a href="javascript:void(0)" class="cr-opt-sz"
                                                                   data-old="27 تومان" data-new=" 22 تومان"
                                                                   data-tooltip="Extra Large">XL</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                    <!-- 4th Product tab end -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="section-blog padding-b-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-30" data-aos="fade-up" data-aos-duration="2000">
                    <?php $new_banners = news::getNewsById(1);
                    foreach ($new_banners as $new_banner) {
                        ?>
                        <div class="cr-banner">
                            <h2><?= $new_banner->title ?></h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p><?= $new_banner->sub_title ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-12">
                <div class="cr-blog-slider swiper-container">
                    <div class="swiper-wrapper">
                        <?php $news = news::getNews();
                        foreach ($news as $new): ?>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-blog">
                                    <div class="cr-blog-image">
                                        <img src="<?= $new->image ?>" alt="blog-2">
                                        <div class="cr-blog-date">
                                            <span>
                                              <?= $new->date ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cr-blog-content">
                                        <span><?= $new->blog_writer ?></span>
                                        <h5><?= $new->blog_txt ?></h5>
                                        <a class="read" href="<?= $new->blog_link ?>">بیشتر بخوانید</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram -->
<section class="section-insta padding-b-100" data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <h2 class="d-none">@Instagram</h2>
        <div class="cr-insta swiper-container">
            <div class="swiper-wrapper">
                <?php $posts = instagram::getPots();
                foreach ($posts as $post):?>
                    <div class="swiper-slide">
                        <a href="#" class="cr-insta-image">
                            <img src="<?= $post->image ?>" alt="insta">
                            <div class="insta-overlay"></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
</section>

<!-- Footer -->
<footer class="footer padding-t-100 bg-off-white">
    <div class="container">
        <div class="row footer-top padding-b-100">
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <?php $posts = titleBox::getBoxBySection(1, 2);
                foreach ($posts as $post) {
                    $items = explode("-", $post->items);
                    $logo = explode(",", $post->logo);
                }
                ?>
                <div class="cr-footer-logo">
                    <div class="image">
                        <img src="<?= $logo[0] ?>" alt="logo" class="logo">
                        <img src="<?= $logo[1] ?>" alt="logo" class="dark-logo">
                    </div>
                    <p><?= $items[0] ?> </p>
                </div>
                <div class="cr-footer">
                    <h4 class="cr-sub-title cr-title-hidden">
                        <?= $items[1] ?>
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <li class="location-icon">
                            <?= $items[2] ?>
                        </li>
                        <li class="mail-icon">
                            <a href="javascript:void(0)"><?= $items[3] ?> </a>
                        </li>
                        <li class="phone-icon">
                            <a href="javascript:void(0)"><?= $items[4] ?> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <?php $footer_items = titleBox::getBoxBySection(1, 3);
                foreach ($footer_items as $footer_item) {
                    $item_li = explode(",", $footer_item->items);
                } ?>
                <div class="cr-footer">
                    <h4 class="cr-sub-title">
                        <?= $footer_item->title ?>
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <?php for ($i = 0; $i <= 10; $i += 2): ?>
                            <li><a href=<?= $item_li[$i + 1] ?>><?= $item_li[$i] ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-sm-12 col-12 cr-footer-border footer-list">
                <?php $footer_items = titleBox::getBoxBySection(1, 4);
                foreach ($footer_items as $footer_item) {
                    $items_li = explode("-", $footer_item->items);
                } ?>
                <div class="cr-footer">
                    <h4 class="cr-sub-title">
                        <?= $footer_item->title ?>
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <?php foreach ($items_li as $item): ?>
                            <li><a href="shop-left-sidebar.html"><?= $item ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer cr-newsletter">
                    <h4 class="cr-sub-title">
                        خبرنامه
                        <span class="cr-heading-res"></span>
                    </h4>
                    <div class="cr-footer-links cr-footer-dropdown">
                        <p class="news">مشترک شوید تا در تماس باشید.</p>
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
                    <div class="cr-apps">
                        <a href="#" class="app-img"><img src="assets/img/apps/android.png" class="adroid"
                                                         alt="apple"></a>
                        <a href="#" class="app-img"><img src="assets/img/apps/apple.png" class="apple"
                                                         alt="apple"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cr-last-footer">
            <p>&copy; <span>1403</span> <a href="index.html">کرت</a>، کلیه حقوق محفوظ است.
            </p>
            <div class="payment-link">
                <img src="assets/img/banner/payment.png" alt="payment">
            </div>
        </div>
    </div>
</footer>

<!-- Tab to top -->
<a href="#Top" class="back-to-top result-placeholder">
    <i class="ri-arrow-up-line"></i>
    <div class="back-to-top-wrap">
        <svg viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
</a>

<!-- Model -->
<div class="modal fade quickview-modal" id="quickview" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered cr-modal-dialog">
        <div class="modal-content">
            <button type="button" class="cr-close-model btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="zoom-image-hover modal-border-image">
                            <img src="assets/img/product/18.jpg" alt="product-tab-2" class="product-image">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="cr-size-and-weight-contain">
                            <h2 class="heading">بهترین تاپ های رنگارنگ برای روند مد فصلی زنان</h2>
                            <p>ۀورم ایپسوم به سادگی متن ساختگی چاپ و
                                صنعت تایپ کردن.ۀورم ایپسوم متن ساختگی استاندارد صنعت بوده است
                                همیشه
                                از دهه 1900,</p>
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
                                <h5>
                                    <span> اندازه: </span>
                                </h5>
                                <div class="cr-kg">
                                    <ul>
                                        <li class="active-color">S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
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
<script src="assets/js/vendor/owl.carousel.min.js"></script>
<script src="assets/js/vendor/countdownTimer.js"></script>

<!-- Main Custom -->
<script src="assets/js/main.js"></script>
<script src="assets/js/demo-2.js"></script>
<script src="assets/jquery-cookie/jquery-cookie-master/src/jquery.cookie.js"></script>
<script src="shop.js"></script>
</body>

</html>