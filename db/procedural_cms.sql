-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 05:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procedural_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `status`, `sort`) VALUES
(3, 'درباره ی ما2', 'این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.این یک درباره ی ما است.', 1, 2),
(4, 'خدمات ما', 'ما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیزما خیلی خدمت میکنیم به شما دوست عزیز', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `created_at`) VALUES
(1, 'masoudharooni', '$2y$10$EjOhCvYfIAzs2Np/vs4MGeSf3ibMLtOgPkRa6ctMgAhqlqVrMCaF2', 'masoudharooni50@gmail.com', 'مسعود', 'هارونی', '2021-09-25 23:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `call_us_info`
--

CREATE TABLE `call_us_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `phoneNumber` bigint(11) NOT NULL,
  `email` varchar(258) NOT NULL,
  `address` varchar(256) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `call_us_info`
--

INSERT INTO `call_us_info` (`id`, `description`, `phoneNumber`, `email`, `address`) VALUES
(1, 'این یک توضیج تستی است', 9133122939, 'masoudharooni50@gmail.com', 'خیابان دروازه شیراز ، نبش کوچه ی همت ، درخدمت شما هستیم.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `title`, `description`, `image`) VALUES
(1, 'کیان', 'این یک گواهینامه است برای اینکه به شما اطمینان بدهیم که آموزش های ما بی نتیجه نیستند.\r\n\r\n\r\n\r\nشما با این گواهینامه ی بین اللمللی میتوانید در سر تا سر دنیا پروژه بگیرید و از آن پول در بیاورید', 'assets/img/upload/4d2dc7d4d6baf6808d93804f3d175f6c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `subject` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(128) NOT NULL,
  `readed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `subject`, `description`, `email`, `readed`, `created_at`) VALUES
(41, 'مسعود ', 'تشکر از شما', 'خییلی ممنونم بابت این حجم از تلاش شما برای بهبودی کیفیت دوره ها و واقعا برای بنده قابل ستایش هستش.\r\n\r\nتشکر میکنم از شما???', 'masoudharooni50@gmail.com', 1, '2021-10-04 15:09:57'),
(42, 'مسعود هارونی', 'سلام و اهوال پرسی ', 'تشکر از شما برای ساخت چنین وب سایت خوبی', 'masoudharooni50@gmail.com', 1, '2021-10-06 08:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) UNSIGNED NOT NULL,
  `about1` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `about2` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `about3` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `about4` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `about5` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `work1` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `work2` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `work3` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `work4` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `work5` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `solution1` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `solution2` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `solution3` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `solution4` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `solution5` varchar(128) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `about1`, `about2`, `about3`, `about4`, `about5`, `work1`, `work2`, `work3`, `work4`, `work5`, `solution1`, `solution2`, `solution3`, `solution4`, `solution5`) VALUES
(1, 'تمرکز بر مشتری1', 'تجربه ی بالا در ارائه ی خدمات1', 'با بیش از 100 نیرو در سر تا سر ایران1', 'عملکرد قوی در اجرای پروژه های بزرگ1', 'عملکرد سریع در اجرای پروژه ها 1', 'مرکز ', 'پشتیبانی', 'وب سلف ', 'معیار ', 'طرح نما', 'نمونه1', 'نمونه2', 'نمونه3', 'نمونه4', 'نمونه5');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `url` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `url`, `sort`, `status`, `parent`, `created_at`) VALUES
(15, 'برنامه نویسیان', '#5', 5, 1, 0, '2021-09-27 12:19:33'),
(16, 'مسعود هارونی2', 'https:google.com', 1, 0, 15, '2021-09-27 12:19:59'),
(17, 'معلمان', 'https:teacher.com', 1, 1, 0, '2021-09-27 14:12:54'),
(18, 'اکبر الصفی', '؟الصفی=ok', 2, 1, 17, '2021-09-27 14:15:15'),
(19, 'عکافی', '#', 1, 1, 17, '2021-09-27 14:15:32'),
(20, 'سلام', 'https:google.com', 10, 1, 0, '2021-09-27 15:25:57'),
(21, 'خدافظ', 'https:google.com', 3, 1, 20, '2021-09-27 15:28:21'),
(22, 'king', '#', 1, 1, 20, '2021-09-28 16:40:57'),
(23, 'میلاد بهرامی', '#', 1, 1, 15, '2021-09-28 20:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `sort` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(512) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `cat_id`, `sort`, `status`, `image`, `created_at`) VALUES
(2, 'فیله گاو', 'توضیح دومین خبر من edited', 4, 85, 1, 'assets/img/upload/4e09b33e4e2b84c3b7ad9d94e6ef5066.jpg', '2021-09-29 17:39:05'),
(4, 'فیل های آفریقایی وحشی شده اند', 'امروز در حوالی گوآتمالا ، یک قیل بالغ آفریقایی به مردم حمله کرد و باعث آسیب به مردم در به در آفریقا شد.', 4, 5, 1, 'assets/img/upload/44a1bb04a74d4eb56b1587a44ff6f0f7.jpg', '2021-09-29 19:53:38'),
(5, 'من از یک ادیتور استفاده میکنم', '<p>من مسعود هارونی ، از یک ادیتور استفاده میکنم.<br />\r\n<span class=\"marker\">این&nbsp; ckeditor است</span></p>\r\n', 2, 2, 1, 'assets/img/upload/14f825155967175f90dec5df0de9d495.png', '2021-09-30 11:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `news_cat`
--

CREATE TABLE `news_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sort` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_cat`
--

INSERT INTO `news_cat` (`id`, `title`, `sort`, `status`, `created_at`) VALUES
(2, 'انسان ها', 85, 1, '2021-09-29 16:32:52'),
(3, 'گیاهان', 5, 1, '2021-09-29 16:39:25'),
(4, 'حیوانات', 20, 1, '2021-09-29 19:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `sort` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `cat_id`, `sort`, `status`, `image`, `created_at`) VALUES
(6, 'کت و شلوار', 'توضیحات محصول . . .', 6, 2, 1, 'assets/img/upload/d76521225d92cad7a0ffd91d79315687.png', '2021-09-28 20:11:02'),
(7, 'مسعود هارونی ', 'من مسعود هارونی هستم و عاشق برنامه نویسی ام.', 7, 1, 1, 'assets/img/upload/023e26fa5089d60ded6d189081acc624.jpg', '2021-09-28 20:13:08'),
(8, 'اولین محصول ', 'تست', 8, 5, 1, 'assets/img/upload/dd773af010532ebf5c2ebc113880eb50.png', '2021-09-28 20:14:24'),
(10, 'لوله ی پلیکا', 'لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.لوله ی پلیکا بسیار عالی است.', 12, 10, 1, 'assets/img/upload/ba6bb2f015c46d0a230032fed7725aba.jpg', '2021-10-04 17:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `products_cat`
--

CREATE TABLE `products_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_cat`
--

INSERT INTO `products_cat` (`id`, `title`, `status`, `sort`, `created_at`) VALUES
(4, 'دسته بنید جدید', 0, 3, '2021-09-27 19:26:31'),
(5, 'new category2', 0, 85, '2021-09-28 14:16:01'),
(6, 'لباس ها', 0, 1, '2021-09-28 16:00:30'),
(7, 'برنامه نویسیان', 0, 2, '2021-09-28 16:10:23'),
(8, 'تست2', 0, 155, '2021-09-28 16:41:26'),
(9, 'یک دسته بندی تست', 0, 10, '2021-09-28 20:18:09'),
(10, 'میوه جات', 0, 1, '2021-09-28 23:17:41'),
(11, 'اولین دسته بندی اخبار ', 0, 3, '2021-09-29 16:10:30'),
(12, 'لوله ها', 1, 19, '2021-10-04 17:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `companyName` varchar(30) CHARACTER SET utf8 NOT NULL,
  `companyDesc` varchar(50) CHARACTER SET utf8 NOT NULL,
  `titlePage` varchar(80) CHARACTER SET utf8 NOT NULL,
  `copyRight` varchar(128) CHARACTER SET utf8 NOT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `google` varchar(50) DEFAULT NULL,
  `colorBase` varchar(20) NOT NULL DEFAULT '17c2a4',
  `imgPage` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `companyName`, `companyDesc`, `titlePage`, `copyRight`, `instagram`, `twitter`, `facebook`, `google`, `colorBase`, `imgPage`) VALUES
(1, 'مسعود', 'programming company', 'ما اولین شرکتی هستیم که در زمینه ی برنامه نویسی فعالیت میکند.', 'کلیه ی حقوق این وبسایت برای مسعود محفوظ است.', 'https://www.instagram.com/masoud.harooni.prgm/', '', '', 'https://google.com', '#990000', 'assets/img/upload/5cc515539952314d60bd75f1bac49cab.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `sort` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `title`, `description`, `sort`, `status`, `image`, `created_at`) VALUES
(5, 'فناوری های ما', 'فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی فناوری های ما عبارتند از ، کار های تحقیقاتی و پژوهشی', 3, 1, 'assets/img/upload/15da6684f87a34d9d5ff8d33863a1a8f.jpg', '2021-10-04 16:20:06'),
(6, 'رزومه ی ما', 'این است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی مااین است قدرت رزومه ی ما ممنونم از حمایت های شما', 1, 1, 'assets/img/upload/06ed943cb99e913b1d42f782298452f8.jpg', '2021-10-04 16:20:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `call_us_info`
--
ALTER TABLE `call_us_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_cat`
--
ALTER TABLE `news_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_cat`
--
ALTER TABLE `products_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `call_us_info`
--
ALTER TABLE `call_us_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_cat`
--
ALTER TABLE `news_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products_cat`
--
ALTER TABLE `products_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
