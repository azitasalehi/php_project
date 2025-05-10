-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 25, 2025 at 03:52 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_persian_ci NOT NULL,
  `address` text COLLATE utf8mb4_persian_ci NOT NULL,
  `bank_account` text COLLATE utf8mb4_persian_ci NOT NULL,
  `social_media` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `firstname`, `lastname`, `mobile`, `address`, `bank_account`, `social_media`) VALUES
(1, 'imazita777@gmail.com', '56527876', 'آزیتا', 'صالحی', '09939354673', 'ایران،تهران،شهرری', 'پاسارگاد-5022291331905008', '_.imazita-imazitaa'),
(2, 'ali44@gmail.com', '12345678', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hero_slider`
--

DROP TABLE IF EXISTS `hero_slider`;
CREATE TABLE IF NOT EXISTS `hero_slider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `main_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `hero` tinyint NOT NULL,
  `banner_img` text COLLATE utf8mb4_persian_ci NOT NULL,
  `button` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `hero_slider`
--

INSERT INTO `hero_slider` (`id`, `title`, `main_title`, `content`, `hero`, `banner_img`, `button`) VALUES
(1, '<h5> <Span> 100 ٪ </span> پارچه پنبه</h5>\r\n', '<h1>فروش مد برای زنان.</h1>\r\n', '<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از\r\n                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه\r\n                                                و مجله در ستون و سطرآنچنان که لازم است.</p>', 0, 'cr-hero-banner cr-banner-image-two', '  <a href=\"shop-left-sidebar.html\" class=\"cr-button\"> خرید </a>'),
(2, '<h5> <Span> 100 ٪ </span> پارچه پنبه</h5>\r\n', '<h1>فروش تابستانی شلوار جین را کاوش کنید.</h1>', '<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از\r\n                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه\r\n                                                و مجله در ستون و سطرآنچنان که لازم است.</p>', 0, 'cr-hero-banner cr-banner-image-one', ' <a href=\"shop-left-sidebar.html\" class=\"cr-button\">خرید</a>'),
(3, '<h5> زنان <br> مد تابستان</h5>', '', '<p><span class=\"percent\">25%</span> تخفیف <span class=\"text\">در سفارش اول</span></p>', 1, 'assets/img/product-banner/4.jpg', '<a href=\"shop-left-sidebar.html\" class=\"cr-button\">خرید</a>\r\n'),
(4, '<h5> پنبه <br> ژاکت برای مردها</h5>', '', '<p><span class=\"percent\">33%</span> تخفیف <span class=\"text\">در سفارش اول</span></p>', 1, 'assets/img/product-banner/5.jpg', '<a href=\"shop-left-sidebar.html\" class=\"cr-button\">خرید</a>\r\n'),
(5, '<h5> کودکان <br> آخرین مد</h5>', '', '<p><span class=\"percent\">15%</span> تخفیف <span class=\"text\">در سفارش اول</span></p>', 1, 'assets/img/product-banner/6.jpg', '<a href=\"shop-left-sidebar.html\" class=\"cr-button\">خرید</a>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `instagram_posts`
--

DROP TABLE IF EXISTS `instagram_posts`;
CREATE TABLE IF NOT EXISTS `instagram_posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `instagram_posts`
--

INSERT INTO `instagram_posts` (`id`, `image`) VALUES
(1, './assets/img/insta/9.jpg'),
(2, 'assets/img/insta/10.jpg'),
(4, 'assets/img/insta/11.jpg'),
(5, 'assets/img/insta/12.jpg'),
(6, 'assets/img/insta/13.jpg'),
(7, 'assets/img/insta/14.jpg'),
(8, 'assets/img/insta/15.jpg'),
(9, 'assets/img/insta/16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_persian_ci NOT NULL,
  `sub_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `blog_writer` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `blog_txt` text COLLATE utf8mb4_persian_ci NOT NULL,
  `blog_link` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `sub_title`, `image`, `date`, `blog_writer`, `blog_txt`, `blog_link`) VALUES
(1, 'آخرین خبرها', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک\r\n                                است. و سطرآنچنان که لازم است', 'assets/img/blog/4.jpg', '10<code>دی</code>', '<code>توسط ادمین</code> | <a href=\"blog-left-sidebar.html\">اسنک</a>', 'توسعه دهنده قیمت مائوریس در حال اجرا در.', 'blog-detail-left-sidebar.html'),
(2, '', '', 'assets/img/blog/5.jpg', '  09<code>دی</code>', '<code>توسط ادمین</code> | <a href=\"blog-left-sidebar.html\">غذا</a>', 'بهترین راهنمای خرید مواد آلی.', 'blog-detail-left-sidebar.html'),
(3, '', '', 'assets/img/blog/6.jpg', '   12<code>دی</code>', '<code>توسط ادمین</code> | <a href=\"blog-left-sidebar.html\">اسنک</a>', 'در توسعه دهنده توسعه دهنده قیمت گلدان.', 'blog-detail-left-sidebar.html'),
(4, '', '', 'assets/img/blog/7.jpg', '  22<code>دی</code>', '<code>توسط ادمین</code> | <a href=\"blog-left-sidebar.html\">سبریجات</a>\r\n                                       ', 'برای اعضای از اعضای متنفر.', 'blog-detail-left-sidebar.html');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_1` text COLLATE utf8mb4_persian_ci NOT NULL,
  `image_2` text COLLATE utf8mb4_persian_ci NOT NULL,
  `flag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `info` text COLLATE utf8mb4_persian_ci NOT NULL,
  `new_price` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `old_price` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `star_filled` int NOT NULL,
  `flag_mode` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `section` int NOT NULL,
  `category` int NOT NULL,
  `count` int NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image_1`, `image_2`, `flag`, `info`, `new_price`, `old_price`, `title`, `star_filled`, `flag_mode`, `section`, `category`, `count`, `size`) VALUES
(1, 'assets/img/product/18.jpg', 'assets/img/product/19.jpg', '50% تخفیف', 'تاپ زنانه', '6 تومان', '9 تومان', 'تاپ زنانه رنگارنگ', 5, 'sale', 0, 0, 3, ''),
(2, 'assets/img/product/24.jpg', 'assets/img/product/25.jpg', '', 'بچه', '29 تومان', '39 تومان', 'تی شرت صورتی برای دختر', 3, '', 0, 0, 5, ''),
(3, 'assets/img/product/30.jpg', 'assets/img/product/29.jpg', 'ترند', 'تیشرت مردانه', '11 تومان', '22 تومان', 'تی شرت آبی برای مردان', 4, 'trending', 0, 0, 6, ''),
(4, 'assets/img/product/20.jpg', 'assets/img/product/21.jpg', 'جدید', 'شلوار کوتاه', '57 تومان', '62 تومان', 'شلوارک شبانه دختر', 5, 'new', 0, 0, 4, ''),
(5, 'assets/img/product/22.jpg', 'assets/img/product/23.jpg', '', 'تی شرت', '35 تومان', '42 تومان', 'تی شرت سیاه برای زنان', 5, '', 0, 0, 7, ''),
(6, 'assets/img/product/33.jpg', 'assets/img/product/34.jpg', '50% تخفیف', 'تاپ زنانه', '7 تومان', '9 تومان', 'تی شرت صورتی برای زنان', 5, 'sale', 1, 1, 10, ''),
(7, 'assets/img/product/30.jpg', 'assets/img/product/31.jpg', '', 'تی شرت', '125 تومان', '250 تومان', 'تی شرت آبی برای مردان', 4, '', 1, 2, 11, ''),
(8, 'assets/img/product/53.jpg', 'assets/img/product/53.jpg', '', 'ژاکت', '65 تومان', '95 تومان', 'ژاکت برای پسر', 3, '', 1, 3, 9, ''),
(9, 'assets/img/product/39.jpg', 'assets/img/product/40.jpg', 'جدید', 'تاپ', '44 تومان', '60 تومان', 'گل برتر برای زنان', 5, 'new', 1, 1, 55, ''),
(10, 'assets/img/product/46.jpg', 'assets/img/product/45.jpg', '', 'ژاکت', '255 تومان', '299 تومان', 'ژاکت چرمی برای مردان', 5, '', 1, 2, 45, ''),
(11, 'assets/img/product/58.jpg', 'assets/img/product/59.jpg', '', 'تی شرت', '57 تومان', '86 تومان', 'تی شرت صورتی برای دختر', 5, '', 1, 3, 12, ''),
(12, 'assets/img/product/42.jpg', 'assets/img/product/43.jpg', 'ترند', 'تی شرت', '26 تومان', '35 تومان', 'تی شرت قرمز برای زنان', 4, 'trending', 1, 1, 20, ''),
(13, 'assets/img/product/51.jpg', 'assets/img/product/52.jpg', '', 'تی شرت', '76 تومان', '82 تومان', 'تی شرت آبی برای مردان', 4, '', 1, 2, 33, ''),
(14, 'assets/img/product/27.jpg', 'assets/img/product/26.jpg', '', 'تی شرت', '50 تومان', '60 تومان', 'تی شرت سفید برای پسران', 4, '', 1, 3, 64, ''),
(15, 'assets/img/product/22.jpg', 'assets/img/product/23.jpg', 'جدید', 'تی شرت', '71 تومان', '98 تومان', 'تی شرت سیاه برای دختر', 5, 'new', 1, 1, 3, ''),
(16, 'admin-html/Upload_img/__57622.jpg', 'empty', '.........', 'تیشرت زنانه', '239', '--', 'تابستانی', 0, 'new', 1, 1, 22, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `products_cats`
--

DROP TABLE IF EXISTS `products_cats`;
CREATE TABLE IF NOT EXISTS `products_cats` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cat_id` int NOT NULL,
  `icon_class` text COLLATE utf8mb4_persian_ci NOT NULL,
  `icon_src` text COLLATE utf8mb4_persian_ci NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `count` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `content` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `products_cats`
--

INSERT INTO `products_cats` (`id`, `cat_id`, `icon_class`, `icon_src`, `title`, `count`, `content`) VALUES
(1, 0, 'category-icon icon-1', 'fi fi-tr-shirt-long-sleeve', '<a href=\"shop-left-sidebar.html\">لباس</a>', '<p>(67 موارد)</p>', ''),
(2, 0, 'category-icon icon-2', 'fi fi-tr-hat-cowboy-side', '<a href=\"shop-left-sidebar.html\">کلاه</a>', '<p>(81 موارد)</p>', ''),
(3, 0, 'category-icon icon-3', 'fi fi-tr-boot-heeled', '<a href=\"shop-left-sidebar.html\">چکمه</a>', '<p>(32 موارد)</p>', ''),
(4, 0, 'category-icon icon-4', 'fi fi-tr-shirt-tank-top', '<a href=\"shop-left-sidebar.html\">تاپ</a>', '<p>(78 موارد)</p>', ''),
(5, 0, 'category-icon icon-5', 'fi fi-tr-vest', '<a href=\"shop-left-sidebar.html\">وست</a>', '<p>(64 موارد)</p>', ''),
(6, 0, 'category-icon icon-6', 'fi fi-tr-socks', '<a href=\"shop-left-sidebar.html\">جوراب</a>', '<p>(24 موارد)</p>', ''),
(7, 0, 'category-icon icon-7', 'fi fi-tr-sunglasses', '<a href=\"shop-left-sidebar.html\">عینک آفتابی</a>', '<p>(46 موارد)</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `service_img` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_img`, `title`, `content`) VALUES
(1, 'ri-red-packet-line', ' بسته بندی محصول ', '.لورم ایپسوم متن ساختگی با تولید سادگی گرافیک است'),
(2, 'ri-customer-service-2-line', 'پشتیبانی 24 ساعته', '.لورم ایپسوم متن ساختگی با تولید سادگی گرافیک است'),
(3, 'ri-truck-line', 'ارسال 5 روزه', '.لورم ایپسوم متن ساختگی با تولید سادگی گرافیک است'),
(4, 'ri-money-dollar-box-line', 'پرداخت امن ', '.لورم ایپسوم متن ساختگی با تولید سادگی گرافیک است');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

DROP TABLE IF EXISTS `timer`;
CREATE TABLE IF NOT EXISTS `timer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `discount` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `day` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `hour` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `minutes` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `seconds` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `bg_banner` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `discount`, `title`, `paragraph`, `day`, `hour`, `minutes`, `seconds`, `bg_banner`) VALUES
(1, '<span><code>40%</code> تخفیف</span>', '.تخفیف زیادی در دسته بندی مد زنان', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. مجله در ستون و \r\n .سطرآنچنان که لازم است', 'روز', 'ساعت', 'دقیقه', 'ثانیه', 'bg-banner-deal');

-- --------------------------------------------------------

--
-- Table structure for table `title_box`
--

DROP TABLE IF EXISTS `title_box`;
CREATE TABLE IF NOT EXISTS `title_box` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `sub_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `items` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `links` text COLLATE utf8mb4_persian_ci NOT NULL,
  `logo` text COLLATE utf8mb4_persian_ci NOT NULL,
  `footer` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `title_box`
--

INSERT INTO `title_box` (`id`, `sub_title`, `items`, `title`, `links`, `logo`, `footer`) VALUES
(1, 'خرید آنلاین برای جمع آوری برتر و دریافت حمل و نقل رایگان!', 'همه-#all-زنانه-#womens-مردانه-#mens-کودکان-#kids\r\n\r\n', 'مجموعه برتر', '', '0', 0),
(2, '', 'کرت بزرگترین بازار محصولات مواد غذایی است.نیازهای .روزانه خود را از فروشگاه ما دریافت کنید-تماس با ما- سبک آدرس کاملا فرضی در این محل قرار دارد و شامل چند سطر میباشد-example@email.com- +91 123 4567890', '', '', 'assets/img/logo/logo.png,assets/img/logo/dark-logo.png', 1),
(3, '', 'درباره ما,about.html,اطلاعات تحویل,track-order.html,سیاست حفظ حریم خصوصی,policy.html,شرایط و ضوابط,terms.html,تماس با ما,contact-us.html,مرکز پشتیبانی,faq.html', 'شرکت', '', '', 1),
(4, '', 'مد و لباس-لبنیات و نانوایی-میوه و سبزی-میان وعده و ادویه-آبمیوه و نوشیدنی-فست فود', 'دسته بندی', 'shop-left-sidebar.html', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `top_category`
--

DROP TABLE IF EXISTS `top_category`;
CREATE TABLE IF NOT EXISTS `top_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `parent_id` int NOT NULL,
  `content` varchar(120) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `top_category`
--

INSERT INTO `top_category` (`id`, `category_name`, `parent_id`, `content`) VALUES
(1, 'زنانه', 0, ''),
(2, 'مردانه', 0, ''),
(3, 'کلاه', 0, ''),
(4, 'تی شرت دخترانه صورتی', 1, ''),
(5, 'شلوار دخترانه بنفش', 1, ''),
(6, 'تی شرت پسرانه قرمز', 2, ''),
(7, 'تی شرت مشکی زنانه', 1, ''),
(12, 'ژاکت چرمی مردانه', 2, ''),
(11, 'تی شرت آبی پسرانه', 2, ''),
(10, 'کت چرم کوتاه دخترانه', 1, ''),
(13, 'تی شرت سفید پسرانه', 2, ''),
(14, 'کلاه حصیری زنانه', 3, ''),
(15, 'کلاه کپ پسرانه', 3, ''),
(16, 'کلاه بافتنی دخترانه', 3, ''),
(17, 'کلاه آفتابی', 3, ''),
(20, 'کت زنانه', 4, 'پارچه مرغوب'),
(23, 'شلوار', 4, 'پارچه ای');

-- --------------------------------------------------------

--
-- Table structure for table `top_header`
--

DROP TABLE IF EXISTS `top_header`;
CREATE TABLE IF NOT EXISTS `top_header` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `pages` varchar(300) COLLATE utf8mb4_persian_ci NOT NULL,
  `links` text COLLATE utf8mb4_persian_ci NOT NULL,
  `icon_src` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `menu` tinyint NOT NULL,
  `a_class` text COLLATE utf8mb4_persian_ci NOT NULL,
  `link_menu` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `top_header`
--

INSERT INTO `top_header` (`id`, `title`, `pages`, `links`, `icon_src`, `menu`, `a_class`, `link_menu`) VALUES
(1, 'اکانت', 'ثبت نام-ادامه خرید-ورود', 'javascript:void(0)', 'ri-user-3-line', 1, 'nav-link dropdown-toggle cr-right-bar-item', 'register.php-cart.php-login.php'),
(2, 'علاقه مندی ها', '', 'javascript:void(0)', 'ri-heart-3-line', 0, 'cr-right-bar-item', '');

-- --------------------------------------------------------

--
-- Table structure for table `top_menu`
--

DROP TABLE IF EXISTS `top_menu`;
CREATE TABLE IF NOT EXISTS `top_menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `content` text COLLATE utf8mb4_persian_ci NOT NULL,
  `submenu` tinyint NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `top_menu`
--

INSERT INTO `top_menu` (`id`, `title`, `content`, `submenu`, `link`) VALUES
(2, 'دسته بندی', 'فروشگاه سایدبار چپ-فروشگاه سایدبار راست-عرض کامل', 1, 'javascript:void(0)'),
(3, 'محصولات', 'محصول سایدبار چپ-محصول سایدبار راست-محصول تمام عرض', 1, 'javascript:void(0)'),
(5, 'صفحات', 'درباره ما-تماس با ما-سبد خرید-ادامه خرید-پیگیری سفارش-علاقه مندی-سوالات متداول-ورود-ثبت نام-سیاست', 1, 'javascript:void(0)'),
(6, 'بلاگ', 'سایدبار چپ-سایدبار راست-عرض کامل-جزییات سایدبار چپ-جزییات سایدبار راست-جزییات تمام عرض', 1, 'javascript:void(0)'),
(7, 'عناصر', 'محصولات-تایپوگرافی-دکمه ها', 1, 'javascript:void(0)'),
(9, 'نیویورک', 'موقعیت فعلی-فرشتگان-شیکاگو-هیوستون-ققنوس-سن دیگو', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_persian_ci NOT NULL,
  `address` text COLLATE utf8mb4_persian_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `area` text COLLATE utf8mb4_persian_ci NOT NULL,
  `postalcode` text COLLATE utf8mb4_persian_ci NOT NULL,
  `signup_time` int NOT NULL,
  `password` int NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mobile`, `address`, `city`, `country`, `area`, `postalcode`, `signup_time`, `password`, `user_type`) VALUES
(1, 'آزیتا', 'صالحی', 'imazita777@gmail.com', '09939354673', 'ایران،تهران،شهرری', 'تهران', 'ایران', '2', '1232124567', 0, 0, 0),
(10, 'زهره', 'رضایی', 'Zrezaee2314@gmail.com', '09334567321', 'تهران شهرک غرب بن بست چهارم', '2', '2', '3', '345872312', 1722185908, 4543876, 0),
(9, 'fateme', 'karimi', 'fateme33@gmail.com', '09123234543', 'تهران،جنت اباد', '1', '1', '1', '13278', 1722185256, 567890, 0),
(8, 'azita', 'salehi', 'salehi@gmail.com', '09123425674', 'Iran,Tehran', 'tehran', 'iran', '1', '123456', 1722108324, 1234567, 0),
(11, 'azita', 'salehi', 'salehi@gmail.com', '09123425674', 'Iran,Tehran', 'tehran', 'iran', '1', '123456', 1722282016, 1234567, 0),
(12, 'fateme', 'karimi', 'fateme33@gmail.com', '9123234543', 'تهران،جنت اباد', '1', '1', '1', '4567890', 1722284188, 3456789, 0),
(13, 'علیرضا', 'صالحی', 'Ali436@gmail.com', '9123273978', 'تهران،ری', '1', '1', '3', '1234567891', 1722363535, 12345678, 0),
(15, 'آزیتا', 'صالحی', 'imazita@gamil.com', '09123456787', 'iran', '1', '2', '1', '1234567891', 0, 12367890, 0),
(16, 'شقایق', 'قهرمانی', 'shaghayegh_87@gmail.com', '9123234543', 'تهران،ری', '1', '1', '1', '1234567891', 1722372603, 12345678, 0),
(17, 'شقایق', 'قهرمانی', 'shaghayegh_8744@gmail.com', '9123234543', 'تهران،ری', '1', '3', '3', '1234567891', 1722603616, 56523344, 2),
(18, 'zahra', 'salehi', 'zahrasalehiii82@gmail.com', '9939354673', 'شهرری، خیابان یزدانخواه', '1', '1', '1', '1841894618', 1733942014, 56527876, 1),
(25, 'طاهره', 'امینی', 'tahereamini88@gmail.com', '9105248173', 'تهران-جنت اباد', '1', '1', '1', '1841894618', 1734008202, 99887766, 3),
(26, 'زینب', 'نظری', 'zeinabnazari90@gmail.com', '9123278698', 'شهرری', '1', '1', '1', '1841894618', 1734008398, 44556677, 1),
(27, 'طاهره', 'صالحی', 'zahrasalehii82@gmail.com', '9123273978', 'شهرری، خیابان یزدانخواه،پلاک 102', '2', '2', '2', '1841894618', 1734014772, 56527876, 3),
(28, 'طاهره', 'صالحی', 'zahrasalehii82@gmail.com', '9123273978', 'شهرری، خیابان یزدانخواه،پلاک 102', '2', '2', '2', '1841894618', 1734014772, 56527876, 3),
(29, 'زینب', 'امینی', 'zeinabazari90@gmail.com', '9123273978', 'شهرری، خیابان یزدانخواه،پلاک 102', '1', '1', '1', '1841894618', 1734015097, 56527876, 2),
(30, 'زینب', 'امینی', 'zeinabazari90@gmail.com', '9123273978', 'شهرری، خیابان یزدانخواه،پلاک 102', '1', '1', '1', '1841894618', 1734015097, 56527876, 2),
(31, 'فاطمه', 'حسنی', 'Fatemeh324@gmail.com', '9123245566', 'تهران کیانشهر', '1', '1', '3', '1841894618', 1735399343, 12345678, 3),
(33, 'زهرا', 'عرفانی پور', 'erfaniZahra@gmail.com', '9123273978', 'تهران،لویزان', '1', '1', '1', '1841894618', 1735401650, 11223344, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_types` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_types`) VALUES
(1, 'admin'),
(2, 'editor'),
(3, 'customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
