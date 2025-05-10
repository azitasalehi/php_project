
<?php include "include/includes.php";?>
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
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">

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
                            <?php
                            $items=Top_header::getRightNav();
                            foreach ($items as $item):?>
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a style="color: #333;text-decoration: none" class="<?=$item->a_class ?>" href="<?=$item->links?>">
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
                            <div class="shop">
                                <a style="color: #333;text-decoration: none;" href="cart.php" class="cr-right-bar-item p-2 m-1">
                                    <span style="position:absolute;left:95px;top:40px;width: 12px;height: 15px; font-size: 10px; color: white;" class="badge badge-danger"></span>
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
                            <h2>محصول</h2>
                            <span> <a href="index.html">خانه</a> - محصول</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
    <section class="section-product padding-t-100">
        <div class="container">
            <div class="row mb-minus-24" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                <?php
                if(isset($_GET['id']) and is_numeric($_GET["id"])){
                    $product_items=products::getProductsById($_GET["id"]);
                    foreach($product_items as $product){}} ?>
                <div class="col-xxl-4 col-xl-5 col-md-6 col-12 mb-24">
                    <div class="vehicle-detail-banner banner-content clearfix">
                    <input type="hidden" id="product_id" value="<?=$product->id?>">
                        <div class="banner-slider">
                            <div class="slider slider-for">
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="<?=$product->image_1?>" alt="product-tab-1"
                                            class="product-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-md-6 col-12 mb-24">
                    <div class="cr-size-and-weight-contain">
                        <h2 class="heading">خرید بهترین - لباس ها-با تخفیفات فوق العاده-کیفیت عالی.</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                        و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                        کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت</p>
                    </div>
                    <div class="cr-size-and-weight">
                        <div class="cr-review-star">
                            <div class="cr-star">
                                <?php
                                $stars_fill=$product->star_filled;
                                for ($i=1;$i<=$stars_fill;$i++):?>
                                    <i class="ri-star-fill"></i>
                                <?php endfor;
                                $stars_unfilled=5-$stars_fill;
                                if ($stars_unfilled!=0){
                                    for ($i=1;$i<=$stars_unfilled;$i++):?>
                                        <i class="ri-star-line"></i>
                                    <?php endfor; }?>
                            </div>
                            <p>( 75 مرور )</p>
                        </div>
                        <div class="list">
                            <ul><li><label>نام محصول<span>:</span></label><label><?=$product->info?></label></li>
                                <li><label>اطلاعات محصول<span>:</span><label data-name="title"> <?=$product->title?></label></label></li>
                                <li><label>نوع<span>:</span></label>
                                    <?php
                                    $category=$product->category;
                                    switch ($category){
                                        case 1:echo "زنانه";
                                        break;
                                        case 2:echo "مردانه";
                                        break;
                                        case 3:echo "کودکان";
                                        break;
                                        default:echo "پوشاک";
                                    }
                                    ?>
                                </li>
                                <li><label>ویژگی<span>:</span></label>
                                <?php $mode=$product->flag;
                                if($mode=="")echo "پارچه مرغوب"; else echo "$mode"; ?>
                                </li>
                            </ul>
                        </div>
                        <div class="cr-product-price">
                            <span data-name="price" class="new-price"><?=$product->new_price?></span>
                            <span class="old-price"><?=$product->old_price?></span>
                        </div>
                        <div class="cr-size-weight">
                            <h5><span>اندازه</span>/<span>سایز</span> :</h5>
                            <div class="cr-kg">
                                <ul>
                                    <li class="active-color">small</li>
                                    <li>medium</li>
                                    <li>large</li>
                                    <li>X-large</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cr-add-card">
                            <div class="cr-qty-main">
                                <input type="text" name="quantify" placeholder="." value="1" minlength="1" maxlength="20"
                                    class="quantity">
                                <button type="button" class="plus">+</button>
                                <button type="button" class="minus">-</button>
                            </div>
                            <div class="cr-add-button">
                                <button type="button" class="cr-button cr-shopping-bag">به سبد خرید اضافه کنید</button>
                            </div>
                            <div class="cr-card-icon">
                                <a href="javascript:void(0)" class="wishlist">
                                    <i class="ri-heart-line"></i>
                                </a>
                                <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview" role="button">
                                    <i class="ri-eye-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                <div class="col-12">
                    <div class="cr-paking-delivery">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                    data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                    aria-selected="true">شرح</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="additional-tab" data-bs-toggle="tab"
                                    data-bs-target="#additional" type="button" role="tab" aria-controls="additional"
                                    aria-selected="false">اطلاعات</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                    type="button" role="tab" aria-controls="review"
                                    aria-selected="false">نظر</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                                        و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                                        افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت
                                        می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                                        دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    </div>
                                    <h4 class="heading">بسته بندی و تحویل</h4>
                                    <div class="cr-description">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                                        و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                                        و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت.</p>
                                    </div>
                                    <div class="list">
                                        <ul>
                                            <li><label>نام محصول<span>:</span></label><?=$product->info?></li>
                                            <li><label>اطلاعات محصول<span>:</span></label><?=$product->title?></li>
                                            <li><label>نوع<span>:</span></label>
                                                <?php
                                                $category=$product->category;
                                                switch ($category){
                                                    case 1:echo "زنانه";
                                                        break;
                                                    case 2:echo "مردانه";
                                                        break;
                                                    case 3:echo "کودکان";
                                                        break;
                                                    default:echo "پوشاک";
                                                }
                                                ?>
                                            </li>
                                            <li><label>ویژگی<span>:</span></label>
                                                <?php $mode=$product->flag;
                                                if($mode=="")echo "پارچه مرغوب"; else echo "$mode"; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="cr-tab-content-from">
                                    <div class="post">
                                        <div class="content">
                                            <img src="assets/img/review/1.jpg" alt="review">
                                            <div class="details">
                                                <span class="date">8 دی 1403</span>
                                                <span class="name">اوره</span>
                                            </div>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                                        <div class="content mt-30">
                                            <img src="assets/img/review/2.jpg" alt="review">
                                            <div class="details">
                                                <span class="date">22 دی 1403</span>
                                                <span class="name">لینا ویلسون</span>
                                            </div>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-line"></i>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                                    </div>

                                    <h4 class="heading">افزودن نظر</h4>
                                    <form action="javascript:void(0)">
                                        <div class="cr-ratting-star">
                                            <span>امتیاز شما :</span>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-line"></i>
                                                <i class="ri-star-s-line"></i>
                                                <i class="ri-star-s-line"></i>
                                            </div>
                                        </div>
                                        <div class="cr-ratting-input">
                                            <input name="your-name" placeholder="نام" type="text">
                                        </div>
                                        <div class="cr-ratting-input">
                                            <input name="your-email" placeholder="*ایمیل" type="email" required="">
                                        </div>
                                        <div class="cr-ratting-input form-submit">
                                            <textarea name="your-commemt" placeholder="افزودن نظر"></textarea>
                                            <button class="cr-button" type="submit" value="Submit">ثبت</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular products -->
    <section class="section-popular-products padding-tb-100" data-aos="fade-up" data-aos-duration="2000"
        data-aos-delay="400">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h2> محصولات محبوب </h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.  و سطرآنچنان که لازم است</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-popular-product">
                        <?php
                        $products=products::getAllProductsBySection(1);
                        foreach($products as $product){
                            ?>
                            <div class="slick-slide">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            <img src="<?=$product->image_1?>" alt="product-1">
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
                                            <div class="cr-star">
                                                  <?php
                                                $stars_fill=$product->star_filled;
                                                for ($i=1;$i<=$stars_fill;$i++):?>
                                                    <i class="ri-star-line fill"></i>
                                                <?php endfor;
                                                $stars_unfilled=5-$stars_fill;
                                                if ($stars_unfilled!=0){
                                                    for ($i=1;$i<=$stars_unfilled;$i++):?>
                                                        <i class="ri-star-line"></i>
                                                    <?php endfor; }?>
                                                <p>(4.5)</p>
                                            </div>
                                        </div>
                                        <a href="product-left-sidebar.html" class="title"><?=$product->title?></a>
                                        <p class="cr-price"><span class="new-price"><?=$product->new_price?></span> <span class="old-price"><?=$product->old_price?></span></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
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
                                <img src="assets/img/product/tab-1.jpg" alt="product-tab-2" class="product-image">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="cr-size-and-weight-contain">
                                <h2 class="heading">دانه های هلو تغییر ارگانیک ، میوه قهوه ای</h2>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                                و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت</p>
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
                                    <p>( 75 نظر )</p>
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
                                            <li>1 کیلو</li>
                                            <li>2 کیلو</li>
                                            <li>5 کیلو</li>
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
                                        <button type="button" class="cr-button cr-shopping-bag">به سبد خرید اضافه کنید</button>
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

    <!-- Main Custom -->
    <script src="assets/js/main.js"></script>
    <script src="assets/jquery-cookie/jquery-cookie-master/src/jquery.cookie.js"></script>
    <script src="shop.js"></script>
</body>

</html>