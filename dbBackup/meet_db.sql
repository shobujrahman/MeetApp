-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2021 at 08:36 AM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `userName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `userName`, `password`, `email`, `full_name`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$T/rlMH/XFuwbq8F/KdxRXeuTi6cyC00P0Gz82l7nIpw36b0oYdpEK', 'admin@admins', 'ProRahman', 'super_admin', '2021-04-20 04:21:45', '2021-06-02 12:35:59'),
(5, 'leo', '$2y$10$nA/49p80iUEwrRQTH4/BBeoEnSm4QDOulkOxrJNYCLIxYE9hB40Ei', 'oliahmed205@gmail.com', 'Oli Ahmed', '', '2021-06-02 12:48:34', '2021-06-02 12:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint UNSIGNED NOT NULL,
  `admob_inter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admob_native` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admob_banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admob_reward` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_inter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_native` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_reward` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startup_inter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startup_native` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startup_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startup_reward` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_types` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `admob_inter`, `admob_native`, `admob_banner`, `admob_reward`, `fb_inter`, `fb_native`, `fb_banner`, `fb_reward`, `startup_inter`, `startup_native`, `startup_banner`, `startup_reward`, `ad_types`, `created_at`, `updated_at`) VALUES
(1, 'ca-app-pub-3940256099942544/1033173712', 'ca-app-pub-3940256099942544/2247696110', 'ca-app-pub-3940256099942544/6300978111', 'ca-app-pub-3940256099942544/5224354917', 'bg', 'sde', 'dw', 'dawdf', 'abdhb', NULL, 'bhajwduyg', NULL, 'admob', NULL, '2021-06-17 09:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `reference` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `reference`, `url`, `banner_image`, `created_at`, `updated_at`) VALUES
(6, 'btv', 'https://vid-mates.com/prohor1/meet_app/public/images/banner_images/1625634606.png', '1625634606.png', '2021-06-21 04:53:48', '2021-07-12 12:52:34'),
(7, 'btv', 'dfdff', '1625634618.png', '2021-06-21 04:53:58', '2021-07-07 05:10:18'),
(8, 'fdfdf', 'dfdfdf', '1625634628.png', '2021-06-21 04:54:11', '2021-07-07 05:10:28'),
(9, 'fdfdf', 'dfdfdf', '1625634638.png', '2021-06-21 04:54:19', '2021-07-07 05:10:38'),
(10, 'btv', 'fdfdf', '1625634646.png', '2021-06-21 04:54:41', '2021-07-07 05:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `cat_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_image`, `created_at`, `updated_at`) VALUES
(6, 'songs2', '1621834498.jpg', '2021-05-23 23:34:58', '2021-06-03 10:13:58'),
(8, 'Videos120', '1621840075.jpg', '2021-05-24 01:07:55', '2021-06-03 10:42:45'),
(9, 'short film', '1622349378.jpg', '2021-05-30 04:36:18', '2021-05-30 04:36:18'),
(10, 'Web Series24', '1622714760.jpg', '2021-06-03 10:06:00', '2021-06-05 04:55:19'),
(11, 'Test', '1622868904.webp', '2021-06-05 04:55:04', '2021-06-05 04:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `id` bigint UNSIGNED NOT NULL,
  `coin` int DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdct_id_ggl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coins`
--

INSERT INTO `coins` (`id`, `coin`, `value`, `pdct_id_ggl`, `created_at`, `updated_at`) VALUES
(4, 100, '3.75', 'product_id_1', '2021-06-06 06:26:24', '2021-07-14 09:03:10'),
(5, 200, '4.55', 'product_id_2', '2021-07-01 06:57:29', '2021-07-14 09:03:27'),
(6, 300, '5.00', 'product_id_3', '2021-07-01 06:58:02', '2021-07-14 09:03:38'),
(7, 500, '5.55', 'product_id_4', '2021-07-01 06:58:36', '2021-07-14 09:03:48'),
(8, 1000, '6.88', 'product_id_5', '2021-07-01 06:58:55', '2021-07-14 09:03:58'),
(9, 5000, '9.99', 'product_id_6', '2021-07-01 06:59:11', '2021-07-14 09:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cntry_id` int DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `cntry_id`, `comment`, `created_at`, `updated_at`) VALUES
(4, 'prodip', 3, 'valo nai valo thakte parchi na', '2021-05-23 05:30:01', '2021-06-09 10:39:29'),
(5, 'admin', 5, 'Iran is a powerful Muslim country', '2021-06-03 10:05:03', '2021-06-09 10:39:40'),
(6, 'papa', 3, 'yhgfh', '2021-06-05 04:57:17', '2021-06-09 10:39:50'),
(7, 'Bom Fata', 4, 'sdsdsd', '2021-06-09 06:21:26', '2021-06-09 10:40:01'),
(8, 'lul', 4, 'gshdhdh', '2021-06-09 06:21:33', '2021-06-09 11:35:58'),
(9, 'avf', 4, 'ttthgtgtgtt', '2021-06-09 06:21:37', '2021-06-09 11:36:20'),
(10, 'dfthdhdg', 4, 'sfdbfgsfgsfgsf', '2021-06-09 06:21:41', '2021-06-09 11:36:30'),
(11, 'zdfgadge', 6, 'fdfaafaf', '2021-06-09 08:11:26', '2021-06-09 11:36:41'),
(12, 'xcfbxfdgf', 3, 'sefasdgsdgsrg', '2021-06-09 08:11:31', '2021-06-09 11:36:50'),
(13, 'ddddd', 4, 'areargarger', '2021-06-09 08:11:34', '2021-06-09 11:36:58'),
(14, 'dfdfdf', 3, 'srgsdgsdgsdfgsfdg', '2021-06-09 08:11:38', '2021-06-09 11:37:12'),
(15, 'gnghgh', 6, 'sdfgsdgsdfgsg', '2021-06-09 08:11:42', '2021-06-09 11:37:18'),
(16, 'dfgfgh', 7, 'gfhdgdhhdhdh', '2021-06-09 08:11:46', '2021-06-09 11:37:24'),
(17, 'ghnghjmj', 5, 'dthdthdtrh', '2021-06-09 08:11:51', '2021-06-09 11:37:30'),
(18, 'hmhjh', 5, 'djdghjdhjdhgjdjh', '2021-06-09 08:12:03', '2021-06-09 11:37:41'),
(19, 'hjhjh', 8, 'dyfjdghjdhdfghdfgh', '2021-06-09 08:12:09', '2021-06-09 11:37:47'),
(20, 'hghgh', 3, 'gjdghdhdgh', '2021-06-09 08:12:12', '2021-06-09 11:38:10'),
(21, 'jhjhjh', 5, 'xgnfghdgjdghjghj', '2021-06-09 08:12:25', '2021-06-09 11:38:15'),
(22, 'hjhjhyj', 3, 'fgyjfhjfhjfjkfjkh', '2021-06-09 08:12:33', '2021-06-09 11:38:00'),
(23, 'fghgh', 4, 'fyjdyjdyjdyjdyj', '2021-06-09 08:12:37', '2021-06-09 11:37:55'),
(24, 'hjhjhhj', 3, 'gfhjfghjfghjfhjfhjfhjh', '2021-06-09 08:12:47', '2021-06-09 11:38:26'),
(25, 'jkjkjkj', 4, 'dgjdhdghdhdhdgh', '2021-06-09 08:12:51', '2021-06-09 11:38:31'),
(26, 'dfdfdf', 4, 'cgfhnfghdghdcghgdh', '2021-06-09 08:12:54', '2021-06-09 11:38:38'),
(27, 'dfdfdf', 4, 'fghdgjfhjfhjfdgjdfj', '2021-06-09 08:12:58', '2021-06-09 11:38:44'),
(28, 'dfdfd', 5, 'ghjcfghjdghjfghjgdhjfghj', '2021-06-09 08:13:02', '2021-06-09 11:38:53'),
(29, 'hjhjhj', 5, 'cghhjfcghjfhgjfghjhg', '2021-06-09 08:13:05', '2021-06-09 11:38:58'),
(30, 'eredrer', 4, 'ghmghjfhgjfhjfhj', '2021-06-09 08:13:09', '2021-06-09 11:39:04'),
(31, 'eeer', 5, 'fgchdgfhdgfhdg', '2021-06-09 08:13:25', '2021-06-09 11:39:18'),
(32, 'dddd', 6, 'fghdfghdgh', '2021-06-09 08:13:28', '2021-06-09 11:39:23'),
(33, 'hjhghhj', 4, 'dghjdghjdghdgh', '2021-06-09 08:13:32', '2021-06-09 11:39:09'),
(34, 'cccc', 4, 'done', '2021-06-09 08:39:00', '2021-06-09 11:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `country_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `country_image`, `created_at`, `updated_at`) VALUES
(3, 'Argentina', '1625634078.png', '2021-05-23 04:10:24', '2021-07-07 05:01:18'),
(4, 'Austrelia', '1625634117.png', '2021-05-23 23:38:23', '2021-07-07 05:01:57'),
(5, 'Belgium', '1625634141.png', '2021-05-31 08:59:16', '2021-07-07 05:02:21'),
(6, 'Brazil', '1625634161.png', '2021-06-05 04:56:04', '2021-07-07 05:02:41'),
(7, 'Canada', '1625634191.png', '2021-06-06 09:13:29', '2021-07-07 05:03:11'),
(8, 'Chaina', '1625634208.png', '2021-06-06 09:14:11', '2021-07-07 05:03:28'),
(9, 'Colombia', '1625634234.png', '2021-07-07 05:03:54', '2021-07-07 05:03:54'),
(10, 'Cuba', '1625634247.png', '2021-07-07 05:04:07', '2021-07-07 05:04:07'),
(11, 'Denmark', '1625634259.png', '2021-07-07 05:04:19', '2021-07-07 05:04:19'),
(12, 'Egypt', '1625634277.png', '2021-07-07 05:04:37', '2021-07-07 05:04:37'),
(13, 'Espana', '1625634287.png', '2021-07-07 05:04:47', '2021-07-07 05:04:47'),
(14, 'France', '1625634299.png', '2021-07-07 05:04:59', '2021-07-07 05:04:59'),
(15, 'Germany', '1625634309.png', '2021-07-07 05:05:09', '2021-07-07 05:05:09'),
(16, 'Greece', '1625634321.png', '2021-07-07 05:05:21', '2021-07-07 05:05:21'),
(17, 'India', '1625634331.png', '2021-07-07 05:05:31', '2021-07-07 05:05:31'),
(18, 'Iran', '1625634351.png', '2021-07-07 05:05:51', '2021-07-07 05:05:51'),
(19, 'Ireland', '1625634365.png', '2021-07-07 05:06:05', '2021-07-07 05:06:05'),
(20, 'Italy', '1625634385.png', '2021-07-07 05:06:25', '2021-07-07 05:06:25'),
(21, 'Japan', '1625634407.png', '2021-07-07 05:06:47', '2021-07-07 05:06:47'),
(22, 'Korea', '1625634420.png', '2021-07-07 05:07:00', '2021-07-07 05:07:00'),
(23, 'Mexico', '1625634431.png', '2021-07-07 05:07:11', '2021-07-07 05:07:11'),
(24, 'Netherlands', '1625634442.png', '2021-07-07 05:07:22', '2021-07-07 05:07:22'),
(25, 'Norway', '1625634454.png', '2021-07-07 05:07:34', '2021-07-07 05:07:34'),
(26, 'Portugal', '1625634464.png', '2021-07-07 05:07:44', '2021-07-07 05:07:44'),
(27, 'Russia', '1625634473.png', '2021-07-07 05:07:53', '2021-07-07 05:07:53'),
(28, 'Sweden', '1625634483.png', '2021-07-07 05:08:03', '2021-07-07 05:08:03'),
(29, 'Switzerland', '1625634493.png', '2021-07-07 05:08:13', '2021-07-07 05:08:13'),
(30, 'Thailand', '1625634507.png', '2021-07-07 05:08:27', '2021-07-07 05:08:27'),
(31, 'Turkey', '1625634518.png', '2021-07-07 05:08:38', '2021-07-07 05:08:38'),
(32, 'United_Kingdom', '1625634528.png', '2021-07-07 05:08:48', '2021-07-07 05:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(1, 'abir', 'He is a good programmer', NULL, NULL),
(3, 'Rafiul Islam', 'Leave a message', '2021-06-25 23:57:23', '2021-06-25 23:57:23'),
(4, 'Rafiul Islam khan', 'Leave a big big message', '2021-06-26 06:12:18', '2021-06-26 06:12:18'),
(5, 'guest_36544', 'good ap', '2021-06-26 07:21:29', '2021-06-26 07:21:29'),
(6, 'Dinesh Surya', 'hi', '2021-07-18 19:11:56', '2021-07-18 19:11:56'),
(7, 'guest_95405', 'hi', '2021-07-29 12:30:25', '2021-07-29 12:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `id` bigint UNSIGNED NOT NULL,
  `cat_id` int NOT NULL,
  `coin` int NOT NULL,
  `tags` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gift_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`id`, `cat_id`, `coin`, `tags`, `gift_image`, `created_at`, `updated_at`) VALUES
(1, 6, 10, 'Emoji', '1623308207.png', '2021-05-29', '2021-06-10'),
(2, 8, 200, 'Emoji', '1623308215.png', '2021-05-29', '2021-06-10'),
(3, 8, 30, 'Emoji', '1623308224.png', '2021-05-29', '2021-06-10'),
(4, 9, 100, 'Hearts', '1623315568.png', '2021-05-30', '2021-06-10'),
(5, 8, 500, 'Hearts', '1623315594.png', '2021-05-31', '2021-06-10'),
(6, 6, 10, 'Emoji', '1623308348.png', '2021-06-05', '2021-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `cntry_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `cntry_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(7, 3, 'zara', '1625634741.png', '2021-06-12 12:15:08', '2021-07-07 05:12:21'),
(8, 17, 'riya', '1625634775.png', '2021-06-12 12:15:21', '2021-07-07 05:12:55'),
(9, 6, 'sakira', '1625634804.png', '2021-06-12 12:15:40', '2021-07-07 05:13:24'),
(10, 5, 'asha', '1625634872.png', '2021-06-12 12:16:02', '2021-07-07 05:14:32'),
(11, 4, 'ruma', '1625634893.png', '2021-06-12 12:16:14', '2021-07-07 05:14:53'),
(12, 12, 'kajol', '1625634921.png', '2021-06-12 12:16:25', '2021-07-07 05:15:21'),
(13, 13, 'rani', '1625634950.png', '2021-06-12 12:16:35', '2021-07-07 05:15:50'),
(14, 19, 'tamanna', '1625634970.png', '2021-06-12 12:16:45', '2021-07-07 05:16:10'),
(15, 7, 'katrina', '1625634992.png', '2021-06-12 12:17:05', '2021-07-07 05:16:32'),
(16, 3, 'labonno', '1625635009.png', '2021-06-12 12:17:32', '2021-07-07 05:16:49'),
(17, 5, 'anjel', '1625635026.png', '2021-06-12 12:17:46', '2021-07-07 05:17:06'),
(18, 7, 'akira', '1625635043.png', '2021-06-12 12:18:00', '2021-07-07 05:17:23'),
(19, 8, 'rashi', '1625635058.png', '2021-06-12 12:18:12', '2021-07-07 05:17:38'),
(20, 4, 'mira', '1625635074.png', '2021-06-12 12:18:21', '2021-07-07 05:17:54'),
(21, 6, 'kate', '1625635088.png', '2021-06-12 12:18:39', '2021-07-07 05:18:08'),
(22, 13, 'jully', '1625635114.png', '2021-07-07 05:18:34', '2021-07-07 05:18:34'),
(23, 0, 'mira', '1625635132.png', '2021-07-07 05:18:52', '2021-07-07 05:18:52'),
(24, 16, 'lili', '1625635149.png', '2021-07-07 05:19:09', '2021-07-07 05:19:09'),
(25, 31, 'ritu', '1625635167.png', '2021-07-07 05:19:27', '2021-07-07 05:19:27'),
(26, 30, 'riya', '1625635183.png', '2021-07-07 05:19:43', '2021-07-07 05:19:43'),
(27, 32, 'kate', '1625635198.png', '2021-07-07 05:19:58', '2021-07-07 05:19:58'),
(28, 32, 'susi', '1625635242.png', '2021-07-07 05:20:42', '2021-07-07 05:20:42'),
(29, 3, 'rani', '1625635280.png', '2021-07-07 05:21:20', '2021-07-07 05:21:20'),
(30, 4, 'mira', '1625635292.png', '2021-07-07 05:21:32', '2021-07-07 05:21:32'),
(31, 5, 'munny', '1625635314.png', '2021-07-07 05:21:54', '2021-07-07 05:21:54'),
(32, 6, 'mithila', '1625635326.png', '2021-07-07 05:22:06', '2021-07-07 05:22:06'),
(33, 7, 'rima', '1625635346.png', '2021-07-07 05:22:26', '2021-07-07 05:22:26'),
(34, 8, 'kate', '1625635360.png', '2021-07-07 05:22:40', '2021-07-07 05:22:40'),
(35, 16, 'lili', '1625635374.png', '2021-07-07 05:22:54', '2021-07-07 05:22:54'),
(36, 32, 'selina', '1625635396.png', '2021-07-07 05:23:16', '2021-07-07 05:23:16'),
(37, 8, 'susi', '1625635415.png', '2021-07-07 05:23:35', '2021-07-07 05:23:35'),
(38, 15, 'kate', '1625635437.png', '2021-07-07 05:23:57', '2021-07-07 05:23:57'),
(39, 15, 'runa', '1625635449.png', '2021-07-07 05:24:09', '2021-07-07 05:24:09'),
(40, 14, 'mira', '1625635472.png', '2021-07-07 05:24:32', '2021-07-07 05:24:32'),
(41, 17, 'ruhi', '1625635493.png', '2021-07-07 05:24:53', '2021-07-07 05:24:53'),
(42, 11, 'natasha', '1625635506.png', '2021-07-07 05:25:06', '2021-07-07 05:25:06'),
(43, 11, 'rupa', '1625635521.png', '2021-07-07 05:25:21', '2021-07-07 05:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(46, '2021_03_21_120852_create_admins_table', 1),
(63, '2021_05_22_121509_create_categories_table', 2),
(64, '2021_05_23_065324_create_countries_table', 3),
(65, '2021_05_23_101603_create_comments_table', 4),
(67, '2021_05_24_080037_create_images_table', 6),
(68, '2021_05_24_102107_create_names_table', 7),
(71, '2021_05_25_053756_create_advertisements_table', 9),
(72, '2021_05_25_065714_create_banners_table', 10),
(73, '2021_05_25_112522_create_coins_table', 11),
(75, '2021_05_24_113440_create_videos_table', 13),
(76, '2021_05_24_045003_create_gifts_table', 14),
(77, '2021_05_29_074328_create_vips_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `id` bigint UNSIGNED NOT NULL,
  `n_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cntry_id` int NOT NULL,
  `coin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `n_name`, `cntry_id`, `coin`, `created_at`, `updated_at`) VALUES
(2, 'New Name 3', 4, '500', '2021-05-24 05:28:04', '2021-06-08 05:48:02'),
(3, 'New Name', 3, '5000', '2021-05-29 00:06:35', '2021-06-08 05:48:09'),
(4, 'New Name 2', 3, '50', '2021-05-29 00:06:45', '2021-06-08 05:48:17'),
(5, 'New Name 4', 5, '100', '2021-05-29 00:06:53', '2021-06-08 05:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `message`, `url`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'kak tarua', 'asdfgh', 'https://www.google.com/', 'https://i.pinimg.com/736x/5c/a9/6f/5ca96fe550aab0f2cc2768d3dee9417d.jpg', '2021-06-29 05:54:11', '2021-06-29 05:54:11'),
(2, 'story Notification', 'asdfghjkl', 'https://www.google.com/', 'https://i.pinimg.com/736x/5c/a9/6f/5ca96fe550aab0f2cc2768d3dee9417d.jpg', '2021-06-29 05:57:35', '2021-06-29 05:57:35'),
(3, 'Meet Notification', 'Another Notification', 'https://www.google.com/', 'https://i.pinimg.com/736x/5c/a9/6f/5ca96fe550aab0f2cc2768d3dee9417d.jpg', '2021-06-30 02:19:41', '2021-06-30 02:19:41'),
(4, 'kak tarua', 'asdfghjk', 'https://www.google.com/', 'https://i.pinimg.com/736x/5c/a9/6f/5ca96fe550aab0f2cc2768d3dee9417d.jpg', '2021-06-30 02:31:21', '2021-06-30 02:31:21'),
(5, 'kak tarua', 'asdfghjkl', NULL, NULL, '2021-06-30 02:32:15', '2021-06-30 02:32:15'),
(6, 'kak tarua', 'asdfghjkl', NULL, NULL, '2021-06-30 02:35:32', '2021-06-30 02:35:32'),
(7, 'Meet Notification', 'new', 'https://www.google.com/', 'https://i.pinimg.com/736x/5c/a9/6f/5ca96fe550aab0f2cc2768d3dee9417d.jpg', '2021-06-30 09:44:45', '2021-06-30 09:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `video_ad_bonus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_bonus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refrl_fnd_bonus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_vdo_chrg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_version` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `set_scnds_ads` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_fcm_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy_policy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ggl_play_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `video_ad_bonus`, `login_bonus`, `refrl_fnd_bonus`, `per_vdo_chrg`, `app_version`, `set_scnds_ads`, `app_fcm_key`, `privacy_policy`, `ggl_play_id`, `updated_at`) VALUES
(1, '20', '90000000', '300', NULL, 'version2', 'gt', 'AAAA-gppO-I:APA91bFvuCAuWMSUHl3z0Lv-wmmtg-taaSYTy56IQT1thR83SSeXxHPJokyfA8UHw-mkqmibeNLkqG4_1T3qvKe2zMLWyqBoF8Mr9JdNvWzy23CRwY_GmBjni-53QlY2QpEI1Ts_2wKi', 'asdfghjkl;', 'hssw', '2021-07-15 04:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `device_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `device_token`, `device_name`, `created_at`, `updated_at`) VALUES
(1, 'fBp3cT-vRX-y0ISqVDDI0O:APA91bHslAbMJ01a74I-bT6rXAQpPrb7xkQZDMR5oPv2Kdn92Gf3gJ4a0kTcFjEcRsstPe-GAYUiBAitMlLrENN1taKQGnyKOYmj2_FCSsIuRHSB1f8KZ5S_AUe60b6MFKVyLPHC8Qx_', 'Xiaomi Mi 9 Lite', NULL, NULL),
(2, 'duaqanI4Rziw7jrrBB_pZy:APA91bHdh8j4DK-fmcTwIB74f84vLr4-qitPlmFoCqppu2DAuu_i-WqFkyFF0rNOPdDlIloyH0laig_GOBiESSFi9tj1pD0akbB0TDBSs2fwBAvHWiWImVobmQUxtVknfFqsyZP5bYpC', 'Xiaomi Mi 9 Lite', NULL, NULL),
(4, 'dTSM5jMmS0GeoXecAKal3e:APA91bEDVZCAeaF72jvz6FYmugI3LviyYKKJC_qgKYtNihUiVPG0Y4vUdovsMo8JOIYU1TH1-E2eYvSDRPOZ_CY91Xwqz_7b76lZv3SRh8F3wXezM3-AzshWJ5KOC3_SaT3cxYA9LXSW', 'M2003J15SC', '2021-07-01 06:37:51', '2021-08-02 04:57:29'),
(5, 'faPMp09cR_676BCTEgX19B:APA91bFkj9XFzGJeWjN88j73erHLCbPwoTUtu61dSaVWYR1gZqybnLO0ER3VJZecrO97EBRef151tzWSiMQyaLunHXWWlNRbChFmVqmum1Y8ZXSzyQZ0qFmeXODn1eUmbU06Hqqm_sUX', 'Mi 9 Lite', '2021-07-03 05:53:00', '2021-07-11 07:07:06'),
(6, 'eVCW8pP-SDSHFkKi5GTTe5:APA91bFfAMLvk9EG-wkrqSyT9zsEQL3bwju8pUm8MeMMQ7vhjWt7Gti-bcQgpsU49HPBw4_fRwsXZpne_OeeimQGRnkDv3KwNmTrjVJzZf49mP4E-MyXNhFeVmi80QmMYU08d9W0o1Y9', 'sdk_gphone_x86', '2021-07-14 13:16:38', '2021-07-14 13:16:38'),
(7, 'dNd82LakRRGQ5a4UMnsPG0:APA91bHeEpWi6znCVPeZ8xeluXF7xf1Dqgu3xGSVbtEkz8pIk2ux5ShlrSUUegViKt6X9O_vyM0KH1S45IzAe78ay8ZFq7WKDbJwzqLMVTAxjqIjeszeqNmXdCfm-esX0Zme-RgHvYX1', 'ONEPLUS A6000', '2021-07-14 13:31:11', '2021-07-21 07:46:17'),
(8, 'f6Bnn-RxQfWHNiqkcNMytT:APA91bGQJP00wKIYVq969KUec3Fr1YsneziNAZ3X3XiTTxWI-TJnyWApPWDtrvitZgOoALErwxYI6D0XJdZzdRu10NMsgifKuoSRqqOLhHZuTEIxqnXtyKUG3WRYH64I9_yDBsh_Q661', 'ONEPLUS A6000', '2021-07-14 13:31:11', '2021-07-14 13:31:11'),
(9, 'dTH0QodRSNmt9wyLNdkVde:APA91bE5XP47LUHMkVNTrYV4krm4hZmDZ2hlhDkat9diJmejN9GMyMzpzb5OK6RU0ga124YBB0SJd_G8vYgP5CpqyNxaWixeuT3PIMkwKjvUoDUdXCikqXgZlX6SFmzCsAx-Cmov-KoK', 'SM-N960U1', '2021-07-15 17:17:58', '2021-07-15 17:17:58'),
(10, 'eTT37ATtRYOUDMQLBvTij2:APA91bG8eBwSoycqBgGHq9lJHOYki-haoMBxSFlNZdrN3nRbOWSTQDlkZjxumfZpftoM4ihxnzESleuateeYG_Vh6iD-V2ez6_yAF92pH_hYszLni6yH3zMA_djlmq3K7IEyDl9Ua3nO', 'M2004J19C', '2021-07-15 17:37:09', '2021-07-15 20:19:30'),
(11, 'cGzKqEnTQFCYotPit1_M7U:APA91bFf-AEwKIAZW98UxRhCTt7NWVpNaVktnywcXRLxFLIdl05iqQi8U-rl_ZF-rneFk1gUSdCuVlDU35ooG0UluytllvVNuqi0NpXarILuXVbKybISlhC-NRv3Lqu8PJaGK_ez6Gj1', 'Redmi Note 8', '2021-07-15 17:41:45', '2021-07-29 04:39:02'),
(12, 'fzn-UzYuQHSqz6qvveauCe:APA91bHBt7XzeyrpklpRluJxxVAUvzccxFxCSYYvtpQUBQxa05Oze3tXCDtC_F9P3tWWpwynVJ1GryHZbl3MTstrW9gqzL0BNalTfWwImAfDc6R7akiz6lCRumId5OKwZzl-dbNnFoU8', 'Infinix X650C', '2021-07-15 18:25:25', '2021-07-15 18:25:25'),
(13, 'eyJhbGciOiJFUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHBJZCI6IjE6NTI5NjQyNzk1NTAzOmFuZHJvaWQ6ZGMyYmNkOWM0ZjYyNjQzOTM2MDYxYSIsImV4cCI6MTYyODMzNzAyNiwiZmlkIjoiZTQ4YWUtd3ZSNkdCNlFLc19SenIyNyIsInByb2plY3ROdW1iZXIiOjUyOTY0Mjc5NTUwM30.AB2LPV8wRgIhALCZqz33-_lR48HMnhIBVNkYr1', 'Mi A1', '2021-07-15 18:51:29', '2021-07-31 16:35:52'),
(14, 'e4Bx8oQuR4-DOfLW5Uj1Uo:APA91bGyY3nl_r-QnhNW9Tys12PiuAn24fyNVFpKF7swLiKUdyiVP4SdpC3s06_hadtp3QrduL5DqQYF9ZTKnJ4VvLFXt3R9_L5hNKZxE5MMLdN3WDXQ_VzpqlEXrHe7MdKnSHnHEnwO', 'Mi Note 10 Lite', '2021-07-15 19:02:19', '2021-07-15 19:02:19'),
(15, 'fO-rreYwRqqJk1O2aRa1T2:APA91bGt5U5n4mt5_Xyx_oFiVABavV_gzQNaKWc9cyw29EvfX_FqUx1jeh87UaNW1N3M1RcROW_1sqR9-2RbHg_OjJiVVg9xR8_ZIuAo7hVt4kB0nObF4w9BuIIGOWbO_gNnG1BVf7CP', 'Redmi Note 8 Pro', '2021-07-15 20:44:31', '2021-07-25 14:35:41'),
(16, 'ceb4jPeRTr6u4qddDMevMe:APA91bEx02mnQUunYKK9tgbeI3g0vxqdjl5xaJ7FLbt9J7BVG2y2PHM54aHDPNlyI7j2Bg5NOHENIclydRQErVvZkCQtUCCcx13HG_ZwJOsFUbLoJk3xv2utW2LrFKAJUaFUzc5wMFDn', 'SM-G950F', '2021-07-15 21:23:58', '2021-07-15 21:23:58'),
(17, 'euQ_XHTJQZiN5yUO7C5-uJ:APA91bEORmSQyAPDOEu-Nf07xG_VZMZFBdV7r3mN72YIps_oJRwYu7NZIemqjaaJx-ZE4SH7FT5xQA9-2-WgkhgicVsqRLisiaasskdBx4Aj1yic2gHpF1zbqlD4LCL-MzIyoGNFmY50', 'Redmi Note 9 Pro', '2021-07-15 21:48:38', '2021-07-15 21:48:38'),
(18, 'dcAk3UE9T7uVNRHEEgHX48:APA91bHmblVS9kziOH-LMhTbidTFGp3trlTlNgoR3fbQbXy_0crQ8wFEP1gyydwBQ2uFcmmRTFhm03D2VAghddE3G8fK48iz-lopA7rphLBGhg0r0rX3oN1A7oFyTU0BZiD37QnA2AyT', 'SM-M105F', '2021-07-15 21:52:33', '2021-07-15 21:52:33'),
(19, 'cSCuH6_ZQKiudPS31RWDmL:APA91bGq2Usr0AU1v0ohEPYh0C_Q0nKxCIoKrrc_HkEVc1gdqe0IH06DidDojNsqrDa8dNCrDxQq4FI882BjLrGMOz9mWPkBqEdOndbn06EOoH-RHIGodYY20Zhe4CneM6k46onpX3gP', 'SNE-LX1', '2021-07-15 23:08:30', '2021-08-01 14:07:10'),
(20, 'dldnqXb6QduDGjKeNfIgyj:APA91bEZ4pebQzRCvuaraXPreG88igDbyOc8pvmndJZgldSV3xlYwciiB46ShWX_YkjdeCIJAuMvXTvhjivcpE5UOTQHxq-L-x5BtIRc3VBPxNOesJ4ZnOhGBVXig0or-VzRGdUDS1k1', 'POCO F2 Pro', '2021-07-16 01:33:01', '2021-07-16 01:33:01'),
(21, 'faQXy1YJSQiE-wLOwfFjZ3:APA91bF0QBxv3MjcFHbF8kp7pvGe1hPBUULsaOWyKm7YRB2le7pdHAlPK_JfJvGwDhZolm7dHv0Qj4QlQw3XHYTGoy_2gdlt0Mw-itDkkDmVQcCX5EM1yUsfz9yYMeOsX4Hj3GHkgax0', 'ONEPLUS A3010', '2021-07-16 02:43:41', '2021-07-16 02:43:41'),
(22, 'd3gdru-1Rfe-cC2RcksNg5:APA91bHiPEl60_YixwVOCQRV0_fkvD9KBTQdg9x7Gt2UqS-jN5y05MMZZYFXyx27b8SKV8bVIiGIYd2BuY6hUOYNrReV904gKEYNDaXxIVZ29lkQrZHtyp20bxy9Tz63TcQwpyH05iUa', 'SM-J730GM', '2021-07-16 03:07:03', '2021-07-16 03:07:03'),
(23, 'dwz-J1iVSGaQwru6CMMfT0:APA91bHyAzwgZEADLs7z29GEnC0kwCodNfPsiQf9bqD5I7VwcHgISBxb0YmR0pQrg1XafSUFZKMe1qbghpKJcZJp-e3Ke7bIy_QKd4IzyXogj5e2m7Ylnq4D4VhXzJSYmMUsOYsGyHX3', 'CPH2127', '2021-07-16 04:30:39', '2021-07-16 04:30:39'),
(24, 'eAlOd-RQSZuqEawNOjJwol:APA91bFmQG4hGZNrz9yku64AFsG6OqTHZddihsVBj6ymJSUirk9DDKT-DsJTaVbbGIp_S8O7D77Dv3rzmVU3F2JpzcrR80qoZowwdbI9sfXoReqyJXd8H5Qfsuc6xTAvEjjkGOpfLBx3', 'SM-M307F', '2021-07-16 04:45:39', '2021-07-21 15:56:47'),
(25, 'fGtwL2DETIeVQwqZe3pXsq:APA91bEF9dvWke0Qe1fqQvVIoHVWg8tRCFIvxTm5Tvzj5THjg3WJwoyHqyEA9r7Ir_mRpTzCjCC5XTbJJvrv9BclULxPfjuWymz_VwmHhTN5WZ_EkCTGbjHxI_3ZqiB_rXZvSqymnlU2', 'SM-A505G', '2021-07-16 04:52:46', '2021-07-22 02:55:34'),
(26, 'cNNSrCUpRwCaqotX5dflkD:APA91bEvj88KlvV8YxWdfOReB0yzNdWxKOMxmvW20kaC_4XRK7uUosL7h9Ot0va9un1Y7IOVdZl_buvqQaVPWzJLBvaOp3OotDeo4wcVofRRnEMFV3TpRTERQZjMqAauaYQIAjphoG9B', 'SM-G988U', '2021-07-16 04:59:25', '2021-07-16 04:59:25'),
(27, 'crmePMseSRGC7OCSzOnXgW:APA91bGJSi2z_Dhm4_mKrfBDONz_inexBl2Iy40lcjOJJWswZDfpiATI93Crn5nzY4hocRIWhbQJ-djX_VceJoXTv3yMOqgwK0rRmwFz-lRuNN6n3b9qVvDcj1YrmMYZ3qXYSvzgdJGs', 'GM1913', '2021-07-16 05:25:20', '2021-07-19 08:45:50'),
(28, 'eB-SOR62QB69j0RZs2GlYl:APA91bG-y53F1YrSZ0-d-xDUxgdGDeZfSkAm6IzS6YDbHsa7ql2y4WXqcLwOf7Ewr8o46h5ZC25wvHTDpzNC77G6kapgDjGllUMFJB_hy_0XKgp-tYt_k9sjSZfVZnFCLtW_zqi7SXLE', 'SM-N976B', '2021-07-16 05:32:15', '2021-07-16 05:32:15'),
(29, 'ed38wFYIQ5StGxEtPqEXsp:APA91bHUQcBW72RhFv1kTgOIM62fw4n8cvwXjoJtw0vQvnL65iTeLHcT6-JG10n-zeHY5w6y4gpamB-k6UwrNrwGTbRHSW1prLvau42d3q27VIuENyWR5OlkZXxMWFP4j8nsTgasyYbI', 'vivo 1726', '2021-07-16 06:06:27', '2021-07-16 06:06:27'),
(30, 'cZWkslHSTDKSCLteEMX0_3:APA91bHD4xuv2BvhliX5mRpo79rTyM9TlqCQPsQbbxGMEiYoqwVVExDL2m3DAsVWScVGM5S6mgJ-YC2lLD0_1sW-1ABuIRfqIH2-iwLGGb9aVd75rdDOZCF-ME3mK-aXRDOOWt8L3ZI8', 'SM-J610FN', '2021-07-16 07:32:26', '2021-07-16 07:32:26'),
(31, 'ewoO1PJcShG8c5U_xcCrcs:APA91bFghb-wyvOf90M3G2-BVk8gVfrgL4kocSFTJfKdjbulARbz16LcWcGw9KvXxaLKgJbQk_Sj4M1yaQ9u1PDjV1wjXZRESYWNsJIFCKUeTz7MIPJGVhyktmO3Rj7DKfS-8AAZjStv', 'ONEPLUS A5000', '2021-07-16 07:32:53', '2021-07-16 13:47:27'),
(32, 'fkQLXyVhSVuew8F_qOutQh:APA91bEurDM3fksnNV66fy93oBguG9sCvG-V1uWLQvYtNgqBihfhiDKyieaaojUSXifqbgzvWZaNYlbHCDn_iEt_ieRVqIzc-yFcs3AZlu5KOJPztCNYIdbVMlyh1pMTWcJKr5CK2WRO', 'SM-G985F', '2021-07-16 08:56:10', '2021-07-20 17:31:43'),
(33, 'e6WOjBfgTT2-R8kk-LUwAy:APA91bE6plgRQ35qB5-uy11sr4H47IlVfc2ug0S2Dg_aVyGOm_f_T-YWtp5xxkXPm2Is71wCUus0JG6V1uP-ESpoE5bX3zMPJjFeXxixMdq7wzlBnEc0KNL7J8suMgcZEF6CsAWK47mJ', 'ONEPLUS A5010', '2021-07-16 09:14:43', '2021-07-16 09:14:43'),
(34, 'cpzQN5J8Qam424yKekrh1k:APA91bHK8qTg6d_VG-UtJId3jQATJtKfT0Gf3PJkY16KHEhOArrXpb6GXefuMtReTIBM8StxHIdpQdtDajhT_rYc3Omtyxg4CLwYIm8oCw-tplqeJN6zLxKYjjDQ-bYMpgaXbHXAtt7K', 'Redmi S2', '2021-07-16 09:39:47', '2021-07-20 13:16:07'),
(35, 'c6F9ycTHRCyI8ihwNpUYXP:APA91bGGibHgNmb-d7xbQFdH2x500_4rvFfpMo_kphNw0UN2vwzM89WjICp348e0H0PkaeUl8ILlSa2zpNvgf4BBt5TuvaE81eN-cr0d6Dw7c2Z1h2RILseLO156IZETPKHfvPtfEUA4', 'M2006C3MG', '2021-07-16 09:49:51', '2021-07-16 09:49:51'),
(36, 'eJWK4v-aQAm0jtfpJP-MpF:APA91bFXNBBmYYcR04EZyPMvf_Uq4SqNCCsLjELs1rv5hg6ZlEpxWcvE0Yl_7gcnxzyIJJSaIBhZBEEqtuA8LJ_fTX-bpEP0HNmsvP5juXX_M3dMWgeq0hHB-MKMpwTJ2BbLwB_BP5fd', 'GM 9 Pro', '2021-07-16 11:22:05', '2021-07-16 11:22:05'),
(37, 'cRE7WrX-QzakSLCJ2mfEZu:APA91bEhod3bfZGPIs0yo5Ni_GLb9jsaOiX0gfAWByZsLB3sDqAbh9NsDA8NJbQpNWVNgQu11thygQG9wjkbJ0gm6Nzs-3P_al_HgEZUiYj1VAqy9vD-d0Gtc_fsJXStdur1D9RMCUYo', 'SM-A515F', '2021-07-16 13:22:28', '2021-07-16 13:22:28'),
(38, 'dUhScrWNQZKXUf5RXg9hxu:APA91bG08sMT9MSYNrX6kXsgmUP6jd4dCgX8HnN11G3fKwU9juoc2ODqWAHVLuzoKpYQmDB0eA_Wizs8aV_DM1-UpseCdy-kKGirnc7p5NaDEkHQyZN1DlgFeg2AvmzpgcoTjZXWS_Ng', 'POCO X2', '2021-07-16 13:50:08', '2021-07-20 04:19:51'),
(39, 'ew6c3U3ZRS6Yx4ec5GefVs:APA91bFRm4aHSK0XExi_bcXOWHIqepFMc-BSXQUdn8ZnoaDdRcfYEEWCbhxxeNYeEijzPegzotwI4qw5dr8lv2GR1fqLcWIT73aL4lkxzeIJ09bA_An21PJWg8uBvTx8vkmtdftm7cLj', 'RMX2081', '2021-07-16 13:59:32', '2021-07-16 13:59:32'),
(40, 'esCizo47Rg26Ax-CuIWe6x:APA91bFZM2pobun3ImStdmKk_CNQqVgoAGvbm1804LZZqUbxWggAzxH09MUVi5jvWFHN3_23pgK4CFPoeeqIfUzAGdd9EdM-mSZNMiBag7QUlUh9NDvFSrqEdgIEYIeod3B5ZAJDzg9r', 'SM-N975F', '2021-07-16 15:54:54', '2021-07-16 15:54:54'),
(41, 'dXtOkCpTRgyI8uGNI6MAyY:APA91bHcp8-hhBsfIxOctNdCI-IlfQL1fXczbSq_2nFG1-ZqtICJ1qkrTSmNHsOIRWrILxf5gvlYuYpZX5Y8SnjXQ8qJmB007yy0mJ-NA9CsYeH98I-XBMCdyvkwc0MbCQPWp_-_RESm', 'SM-G955N', '2021-07-16 18:12:10', '2021-07-16 18:12:10'),
(42, 'eyyA3bpkTX6SnGovLB2GBi:APA91bHU_znjup3IId5EJZhBPq0UGqpdnD5phtr8q4q6RhfOBxNUGwgK1otPsAfErLTxzyEkM-tk_mPQBPZVaxy2ogCkJy7rKJGI-7jQX2HKudxVGSs5kwJUiIMeXs2ZT87YPkBwMVp-', 'SM-J400F', '2021-07-16 19:36:15', '2021-07-16 19:36:15'),
(43, 'eD3IcPP0TtuEE7Lq4a8jvh:APA91bGlHKrg3uthSZjO6o4ee_6eXgUpheUYyLckFSHxfdO8lmDlk9vTLAp5B2axB8jQdIVOchamcr9QJqrWwDHrPu1ntIVv_0SjkSkWDumwPhZ9CoNLWT0eGjyo5RwXXk2PhSnchPE9', 'SM-G610F', '2021-07-16 19:40:00', '2021-07-16 19:40:00'),
(44, 'flP05YqHRNy1HVQf5WXZTP:APA91bHgnU66bCCkokCcmLldiHpqvB6fVjKxzlu8oWF9jBlJ02gN3TEiaD3qy6-HxlbN4_YkxHuS5NlDTdObs-29bRT2dklalJe7gcdvbonf9H3ELS8Zhsf0a43mNPnR2FZr_f8BjWLA', 'TRT-LX1', '2021-07-16 20:09:39', '2021-07-22 19:49:34'),
(45, 'dTa8qdTlQsqGTpUgDAi_k1:APA91bHxQfrtInzihI3T6am9zfyInCkDUjOkD7aEbJ2IXUNYijCi-0OSCaR6NXywk3d6qKEMHjqCYo0aPJoa7vxIC0SoBrPPmCCK2G6OwWCassIykaceJ5kI_R05oaY75n9B-yJQUmtv', 'motorola one fusion+', '2021-07-16 20:13:06', '2021-07-26 16:19:43'),
(46, 'fVWa0cSaQiCAgeRQrFJgw3:APA91bF55wq2lMKMx7tEHbiJvna_nY7FKjVOps6gKkISQ-BN8zpuayWKgHDyC9YtKNHRY3zSbFizaOWqmarq8Ayu089Qbvmm4_KllZYhVacKAeavF6KCsSfQ_J9lJKo6OVc135cgmChz', 'SM-A505F', '2021-07-16 20:51:18', '2021-07-16 20:51:18'),
(47, 'eSLxpmi0STyhALEJ29IhHu:APA91bHIjVsGKNiYyKH1QGgseFbEdMoZibUzFGFjK9_tKP8FapSXCTNlVcaaS0eptxC1klZfm_vpBV-TIwYuTwBzu_h158U06rzoY2O6E6NCcnnZSIb9BAOiX4Rsp-kGxE0p4dfFiUcD', 'Infinix X660', '2021-07-16 21:20:38', '2021-07-16 21:20:38'),
(48, 'elVrqiO4SciYuP8Q7WghRD:APA91bHgCZ-qCnuQqS7qiWSu5Joi_amYoS9OIdaOSjRdQ8Q7QTfEYZv5liufo0W-BT0AJyVjWqByQi5MzvEBQ1GVCxuBLLOCw3CGAhGEQD1ppcXOn4KQTvXCMa-2LRZnuEw5gLIFSBZc', 'TECNO CF8', '2021-07-16 23:39:00', '2021-07-20 21:09:38'),
(49, 'cwwroKBuQxi5L2yWd8fvOO:APA91bHmM9iXi2sdUImxV6J_F2KIC2zrbJS5Dkhd4Bv_Ktmz_g8vvAJqsXhTbFn7TZbYesZOUc76yXC6jhnkl3Ez3jFEfVrS8jnoaEiAQjDs5qRE9usGyTLs6hKQEI6CeB_H2HOaWWG0', 'Mi A2', '2021-07-17 07:15:41', '2021-07-24 08:50:59'),
(50, 'f-lEv9D9S1CJPPojAp7Rld:APA91bHlsIBrwNKn6DDBHqW4BNgBsOeJlla93HK2F6po0x4W8WqNPfsTeXK5fGN6j6iATCHLw7eLMoh_O8ScbJ677ZLCpjSGmUPMU9GVMTslcHPAS48CT9qJMrdvl22xVFLPTs9Mol23', 'V2025', '2021-07-17 07:37:45', '2021-07-17 07:37:45'),
(51, 'cD9qp3R-TAaDZl02eO-UWZ:APA91bEX3tZltq4InqICLneg4qn2bjypq_l7LkwLW3ORcfmjvBYX3C2DbFMYSOIa34AOxLIrm4OHuxPHWisC71xwFBjb3EUTjtEq47wlhau9gKEcGsPenFINRJkLCr8uzgViBLkGJZdR', 'RMX2161', '2021-07-17 10:31:38', '2021-07-26 12:16:47'),
(52, 'd6-y0FpHQqaU-yYcjXdOAF:APA91bFqYE02N_7EaFlx5EcrU8bGdh8VcguWJBQ7b3iXJwciFxjFoRkCMX0SMIXL9t5iSxYekODdIkyFqRsBfLnTmaalNyTwPzYeeX0QFsJa-R7WSCRCrSeP6DMxHfkSfA-eUVHdKUh9', 'M2007J20CG', '2021-07-17 21:18:16', '2021-07-18 12:24:28'),
(53, 'd2jIC4tESaiIsUdIUl4vQj:APA91bEZQOi0bAQngwXwM5eW4tbemngzqal2X6nU3_s8mFbETcPJZTpgfA5LniNtoP4z4pupb19n21w6W-EXWGWCNwbOSpy7TCMElkf8lngz0Ou-X3YRDxkrlaMtwtZNum7Myh9B82go', 'RMX2020', '2021-07-18 06:51:37', '2021-07-18 06:51:37'),
(54, 'fOFBsp-rRc69vcGYIEPJej:APA91bFZ3a__tcgSUZwqdEuP4TtmiyXeyb8hXsbCWVcIRcNAw2-d47sK0Osi96mfjGFgYyQk-3jduiesRNKYYm2AWC1pzChDHqPEZzdWeKUJOeJfLBswh197bEYJabTT-HW9wIvjfjcR', 'RMX2061', '2021-07-18 10:57:07', '2021-07-18 10:57:07'),
(55, 'ccT2Xrw8RJ2DGkLc_JaROa:APA91bHu3rekDuhRq-uVMpIGNaYY_5iwHee9XhQOjRGmNkQN8DW4fn0GuGssA6XWicpj2YGsu3Pjag1Djl7xa3BLwmlMuQS0z74haLOpP-xrvqP5dfGpdLQmb8d7cgVic7iQK558cD08', 'Redmi 8A Dual', '2021-07-18 11:05:05', '2021-07-18 11:05:05'),
(56, 'eKFrzLlrSeyehNHxNTbpf9:APA91bF_VHG9t2GCBHVIS6-WmuYuAJxuvWQidjEO92ZT0rGGcD8q_RjCXBN80HKyWrCe4b5M2dnfGNa-RlSQmx2HLJGBNUA7-ipZ1ax-DJkexEZQmygXW2O3QiTMcpn7QruS4j7cR6AX', 'Redmi Note 7 Pro', '2021-07-18 12:59:03', '2021-07-29 07:16:29'),
(57, 'f36YcBI2RtG74-7cv1vFWH:APA91bHre6sn9AeJL7jHV49bzc_1r7Nfflj7Ilfet0_f2swdwMGeMPcLT4RYoDoG1bu0q-RKWcrb6WKboHkMh0WBzhp5ShigEH59TjPKTjG2vdqonfebRH7yNP0fDwUUxpxBjHZJ48CY', 'M2101K6G', '2021-07-18 14:20:29', '2021-07-18 14:20:29'),
(58, 'dyJKQ9a1Qha-5okQ_O7Yoz:APA91bF8LPd2C_tK1qMC28DhKE3futd_DzK13jXd37p2_DG7HtiiGACNAdWC0HAV5ib446XBQi2W0VtHt11Pf3sVvpi1gSJLzjkHZ46E5EPvrEN18sbOTQO5erSr6k1izqq0_9G-OSDy', 'vivo 1907', '2021-07-18 14:30:15', '2021-08-02 20:06:02'),
(59, 'dhO5yQMsTTSUWwmigNyco3:APA91bEzoYKaR7uCwdy4o8mFA8si_zePAHYh2xnqoJ43oChDZOnL-uvfJPnQrrkR7B0v0EJUEso44KsLSyq5q6dAccVbbkE-PConht7mvm3GwibkkmUiXCESWtjefuSX7YRGxpfnORqU', 'SM-G965U1', '2021-07-18 21:48:04', '2021-07-18 21:48:04'),
(60, 'e5NKbdgcQVakwGsKpJG23q:APA91bHfnNz9Pw9zjN-iZ-lNVbwgyKxYoLGkvF_jfacJNFh8OrHQH2rVwiooWshTx_h5yPybZn_oL9RSG2OV005a-eL0hC_DDLu5t8cuBHWfIPuyjacb5DzSCM7qIjP8HYlgCHr5Hc4l', 'RMX1805', '2021-07-19 04:10:12', '2021-07-19 04:10:12'),
(61, 'dLNkTb3hQ3W3lqEpOPK45r:APA91bFYegUehKPZ12XsgWHRPNXL-qEuHhcE3Uko24skGoyZRJs6NGODmn5hYDRL_jyfDVbTqbb712Ns3-LYnOz6dia_h-M62xY0dNnZ7E0AXUip28WlbcfvbDNep2C4ZN1II0IvuFbZ', 'vivo 1812', '2021-07-19 08:16:26', '2021-07-19 08:16:26'),
(62, 'fhw_GaiXRbKvFaN-OsCN4s:APA91bHrFd1yB6oN8zQwSgtu_xKnEDi4FCHN_y1uUrXypthUK_W6lJyunAmQGXfqasQALOUcfLhoa2iqIo0dFBrcvrVwVKgBBBfyoduIXLyHTN9oDDv5VIDnF9JfCKcMHX7rfhDxAcAP', 'EB2101', '2021-07-19 10:08:41', '2021-07-19 10:08:41'),
(63, 'c7VUXrfqQUWvkOe4NXGqcT:APA91bHl9PwcYtQ9D2iywPMFuMfxe6NyOtIGpCP0fQqYJqddxN0gZgCt9T1_L8IiloB3p67xGKmO4ZExJelFQ9mybng2vFfjP3dF759DXK3SeRxFUl7W_RRjz95aL_xmOrzyuZXLcevu', 'MI A3', '2021-07-19 11:45:27', '2021-07-19 11:45:27'),
(64, 'dz8SID7_SeePMfWOVm0Edm:APA91bH7U4VfRh9IzNdPwhttA9u28zfqeha-xViKEWRSjOpf1R9n_Au4GTC54dXqKqLhLKzaSui5nDE48mAG4JKJa1Mm9BBjPXG_7EYK0_sSu2tzDh_0VpURiMErtu682foRvKSd51Pa', 'SM-G998B', '2021-07-19 11:51:52', '2021-07-19 11:51:52'),
(65, 'eL2KK9gASkmD_sjBheftvI:APA91bG2fbTz3OehFq74xRy_CvlWF_q2IVbktRmy-3DLfuieEuTUjd3MSSfY_vftQ9GNSR19nw5WhGvPh9LlB60awD2Jc3p4mkmaYEATC5_1yt31Cx2eI6pm8sb4KknJ2hW-Vp_q8N9p', 'SM-G975F', '2021-07-19 14:32:03', '2021-07-25 05:07:41'),
(66, 'fKUCEVOsTliFhGz3TP9kPs:APA91bENNTh3rkS8f2U4gU5Y1jlBjrVAGyTsoSAaLVM5MTLoa082S7VFTlUX2WxPht3bngpHnhik-uq5b-vod6iY2jq-VM5cMa97-CFrgQGXEPIBfkdF5I7ao2OY9sD5DFPBpqudSPKg', 'KB2001', '2021-07-19 19:25:31', '2021-07-19 19:25:31'),
(67, 'dZqZh1ktQZG_xESKZX0SQK:APA91bGpgAB4pxA-SONSohsTBxXDATHTuRZXFmphtpGG0OR8PMIhrXr65YnIkuh6hMn_Kj_cIH_ys8mNuwz-n255858H1Y0HITD4sz6GhtD7UQrSt-FtBr0WBySkV0UidowQ2CwBr4IW', 'M2102J20SG', '2021-07-20 06:27:18', '2021-07-20 06:27:18'),
(68, 'cZWbwIkeR72q4lpMTP7h-y:APA91bFMxq5m2EU_pOmTN0Yq1tndXPKIObP0KjQFjQ9frq3lciIbIlFppFlomdPd48PLpUor6cJbGZsiE0-m_4bYiPbSsxW8jViqo5RAOb7V1y4_krXcjEW6vGNH4G7IaIf0IOKYcizN', 'SM-N950F', '2021-07-20 09:38:06', '2021-07-20 09:38:06'),
(69, 'cUzMoT_GQLOAaOAoL5XrUM:APA91bFGXhCLXHRF9LnRmP8k4Jzw0hvUL3p8IB1U3AepWCrRosOLju4FxKurcZQYoIJuMVF-Ncwkrpv5blkU3233Bo80P-qjcMlGwSvEANkbSq63jcg7a0jnGR9I-AAlQC6S2xt9EdDI', 'vivo 1803', '2021-07-20 16:09:22', '2021-07-20 16:09:22'),
(70, 'eyveqXXfTq6grLdx1qJe1K:APA91bHzxmcwLlJ9jL6KrqfKunySn-N2S7Gyj-RxDJ9CYGUHkJzerHNR84fGgu_jx-0oO97X0Jrm4-EBE0lmsjKvqp7SBl3qhwftYC3F2TT1BZfF7QKcGduEBdq9fxrLYOz0bEf_9TF6', 'CPH2125', '2021-07-20 16:37:53', '2021-07-20 16:37:53'),
(71, 'cwaqbTV0SJGXvu690iPfG7:APA91bGKsVlp1CK1zmBFagGPLWihtc_7lri3S-pw_0_6ujLDcOl9O_rGBr4LYs3pRvkEE61OvrSduUImwXDMMId3eSrNeoXC8pkzJ7KDApgDzVWwGKbagO0JnpWGtkk4lWzDAWC-JMx5', 'PRA-LA1', '2021-07-20 19:40:28', '2021-07-20 19:40:28'),
(72, 'fFv6951CQ0u_OjDD3S6ziu:APA91bGk7Y8PXvKbqImi1DocXKMcp0_giL_ZnPPZztkmkUuEONsyYcNadeO-pmFkI-evQmJMHt8PxP0X9E8DJGdd3OYRLkE_uMtD719stLQaZT5doY10q9M7ltTobDeP4cP6TUCeR1f8', 'IN1', '2021-07-21 02:38:17', '2021-07-21 02:38:17'),
(73, 'cV3qZ_lQRf6g_YkVebSt8g:APA91bGjmZy6I3Ebw4MDqeTn3T7r_KaMh_4vc4jV7UaREwIAzQO7fGm3V0y5YzLSauddwvPJAceGJpbWdYzUpL0k7cBzYa_iqDXq_Yb9Sc78xkhN2yqGHSdu2_QAOCuWKBvQOle57JfW', 'LM-K420', '2021-07-21 02:52:06', '2021-07-21 02:52:06'),
(74, 'eS56ZOAyRXu8_RIRxj2juS:APA91bGxOnl0204HMGg2vAiaftOMNwSt28eVrU4UmLbdXtqzIiTdhwxgVEqZ_cDkJ7Gy1MH_nYqYwNgtXYRni3LAVAKVgnMZimSxj8otW2JKML5PF3RfXilgApjC2o-F2V2nnFctjVqz', 'CPH2213', '2021-07-21 08:25:00', '2021-07-21 08:25:00'),
(75, 'eFupa23WRQaa3-fvxtpFoz:APA91bG4oyuWO2Vn4eXX5_p8IqhIeJRhyXkyNFu3Yr4VCLc5pKHeqRY5Iok2IPf3aCBjEhKpPYSx8fYmyEEyP6pTDFaWQuuT4NFcip0Xm3zFMlKh8colxGBK5i03xSWWQyQzWIq22JQw', 'G3311', '2021-07-21 09:38:56', '2021-07-21 09:38:56'),
(76, 'd37lphGeR4K1ZW3NPESoOw:APA91bFSRAzIKACD7CTcusB2gt_Rc4nK70p_he3w5esw8nF4u_vBACIxBcqQByBz1cAafDS_Dzp7b5gTH88nakLU3xOaRkiP6EOxktoAkiTJm77mkpLVfkV6s4-xGs4GEagtK5CVV78Y', 'TECNO KD7', '2021-07-21 09:46:23', '2021-07-21 09:46:23'),
(77, 'fr0QHl97QIC-mWDQVR4qEv:APA91bHeh9svwXRNuNYcBI313iysOhSAu-Lz5v99y9sWq1CD2HZBzBdUVH8_YsLL52SI_Oa2gEtzI42ls1LH-P0PfiqrjxC12FjNZbbuXHTePqTPBi1-rWQrpNqkhBI7sciDcQsHP-7Z', 'AMN-LX9', '2021-07-21 20:39:22', '2021-07-21 20:39:22'),
(78, 'cuuzQrP6RWCbd-K9oUuE6Z:APA91bEVqw-kU7PZVm1LBUpK0cO2l-xSDxAecOT8Ov-HzZkA19EQwkU_ImkHOR-JlJ4TQgkNh1ZpZeRKqfD0MuY9YXTuREhSpi5f0xb-zgPqdIv6w6k_dZrxDD2BTeX9dNUPum1x57ob', 'SM-A315F', '2021-07-22 00:13:42', '2021-07-22 00:13:42'),
(79, 'dMGapqWmRPyCC2-Ww4A-V2:APA91bEvHvPDLhhyq9dVHHBESmQbTPENBp7b_9A5varocWcsK4rHt3Xfr9NFtgunH9Nom2UQqzPYJb6LnuNQJRqhAG9LEub2zwdxVCSwKmDwlt5XsRc2XuNgqfDfu-iONYAcWqyI_dzf', 'SM-A105FN', '2021-07-22 07:11:06', '2021-07-22 07:11:06'),
(80, 'd87G_vzXSm-IWDkdgzQKAf:APA91bGr7tptFSvIpPTKsdZi23U-wrAr2qqjQG0DvhvsL8BU1EQESQUyh1SJKFjoevoWamOn3oi3w8ON_zMLnKkILrt8N1TrcXS8qhKuuNufLu9-42R23na1fPcfnq7PaDiEFiIaWHSO', 'Redmi Note 9 Pro Max', '2021-07-22 07:15:23', '2021-07-22 07:15:23'),
(81, 'csMHG9CJQeaYzPsHera8-8:APA91bGd3oMZt2ej332AXcGxqYbu1GZEbC1twOLTtceMNofuKyfL-DzY8vlzsuZe8busE5tN_RLzjDQAleLajmtEnIbYyhzo-xTQ47gc7yDnULNpN5D-qZ4hIgr6iWpp9tdmD_YAhtFN', 'SM-G988N', '2021-07-22 17:56:19', '2021-07-22 17:56:19'),
(82, 'f_8uG7zvSfWlyNDZgdOr_x:APA91bHDGKCKrk65pcxQIsGZqq4PoTkzNCOfXlYP5LAUNJUOh1m-IVKS1AG8V9Rsrb0qX-df1I2-Szm9jtahJ2rlA3A_7GYeqKjTNKCW9HgBccQPDCvuG0N8-xkhB3iC9Nlf7axHTlBZ', 'SM-G955F', '2021-07-22 18:06:21', '2021-08-01 10:06:31'),
(83, 'fgVPKuMNSl22uwxZV2JCck:APA91bFRAPnOt2GJuMkbW6Z4AyF4TLYcQZKNnsAJpf7rsmFQJyIRLwqX21b07V1CnU4SA11tM7F9s4gwXTT4mC0tMj8_jttQrPbcFCu45cMkBSIO6D3vUDOSIZaP09xLu_gQB2kJlAAS', 'SM-A260F', '2021-07-22 22:14:06', '2021-07-22 22:14:06'),
(84, 'e0FmmkP7QQSN0AGxYmdaRG:APA91bGDMxL24uwMFOee7oxeFrG_ooe7x1Rv03LwbKnymN-hufHL3ZRbOIm6ru5b9vcTfBfVzK9UnloRFW5axppKPNss3tT445vLo7o65W4MRHF-wn8GHXa8bnDtvlz1LFBmIextE2WY', 'RMX1801', '2021-07-23 10:33:49', '2021-07-23 10:33:49'),
(85, 'eRqWPdI9SvG2NGTb7nOqWw:APA91bF43wvi48_qk7grKd_DeS0NnddOk3GI4SGZ8pRqWdwX3lMDmnvJZ8jWOrcZsUrZotjxrbBBj0FUMxuY0agTRF4JAqpR6WYqshWW9ZZMyKqi-O31XXC9m4MYbNwPL5n_0G2Y049h', 'RMX2002', '2021-07-23 11:39:16', '2021-07-23 11:39:16'),
(86, 'f3pR2OOYRwu-0SBCco4yVj:APA91bFQ8Yubanh2yd7TvhQWau05h0XA3Z6KQ3mU6GbN-33qXjDbEB3HRtXV--pVupYDvGWMCgSXbYNuuB8rqs7dYPPdf-6JQGTsibZlmr-je6mxFpjqyqjSCH5xhFJwMbXezl7-sarK', 'vivo 1851', '2021-07-23 12:27:39', '2021-07-23 12:27:39'),
(87, 'ddHtjUspRwGUyD5joqG1-X:APA91bGxIRaWUTBNkTezVeTz-LEPOlXQ799hkOBdg8_iRVly7gOIZdE2eOCO0doJeEKjO-4kuFbczSkVlckGUdHVOlfvxSTn0sIyeYXOrk9yamGm5UnwLWD7i3ZenAWBkiS4CYfHcKfx', 'vivo 1917', '2021-07-23 14:09:00', '2021-07-23 14:09:00'),
(88, 'eMcBXdENSXC5qcyCm1bLhl:APA91bGV16YUo6ZQddlkLuZqdPVz91DeYZt9Aubf3GEhDPWuqW5zkxdU43OZzSlULM2qxFK3ujjxTGaLm32gOGqxd7R71H0aCRFjrsBeI1GXBp-qHKPnCkTFw10dJD-sPrsOe2toOhF_', 'Redmi Note 7', '2021-07-23 17:54:12', '2021-07-24 13:35:42'),
(89, 'dlQXT7u0TvGD7wtEH5KyIW:APA91bHBahfQSQkgSuyEsCkdNF31kJUNyf0t525xVeygZJknGFODMgSA0J4QDsTF9iO2JsYH4TXV7_WMU93H5g8TBoh1aAmOg_WXmT3V5ZU5_84FyeT1StEk-K9F0p_qC4R-QyL4bAOt', 'RMX2001', '2021-07-24 05:12:12', '2021-07-26 08:46:46'),
(90, 'eZZlXkx9QA2Vry4sC3WPFl:APA91bHTEYXe3Myas_4wLxw0-YUE86b9ycJqnxy9SMkCSe0H7F9xLzQrnLrjWRbTvq99i0dJ6tuM8T4-ui7oyvfW8y4ZPn9uXddXg2UNCBaSdhNP-NOoUuMPbpSwgWdU_xJAz5jx7Q50', 'Redmi 8', '2021-07-24 20:40:22', '2021-07-24 20:40:22'),
(91, 'eVw2RWPLT6KWuohFCR6mJ0:APA91bEWGHOIjgFhofkJG7d2YP9bMeONiyexW664d3_blS0d43N4-koogM0qHLMZjHMrIZunv7ok4ioG9h9mVZY6ci2_2vgLpI6nEiglElVh1AndgQxb3vjDlo4R2OcrKPnZ7hHGKugW', 'RMX2189', '2021-07-25 02:13:47', '2021-07-25 02:13:47'),
(92, 'cAY7sNm5Tf-5DDYtcCa4PE:APA91bFikTJLaw0-_8SqDQ3j3uet3wxXBIQXgEA_w-lzN8EbwB3Glh95iZAKKb1pVhwbs02ClCniiq0Ish6RLq4N9BbffNUxifth2EUhEZ7o60ZN5pZM6u2Q0IzAG6n50Ddz2w-ywHUe', 'S12 Lite', '2021-07-25 10:13:26', '2021-07-25 10:13:26'),
(93, 'drrnIv7GQYKn7b2zGVm4i8:APA91bEeipAo8W6ba1vJy3dOP0iiEyqBJcF0YH4y2N15I7F8-6l9haSl65DDHOO52FZ-ze9V6_9QWuorKSFSWLNFP8UwmFG2ieMxvoLKW1CJeADsuYRQfaVkXTVZNHjaeoazyYTYmqlz', 'CPH2083', '2021-07-25 12:27:17', '2021-07-25 12:27:17'),
(94, 'eStIduDiSAKILlbCebDody:APA91bEJ_qBhHY_qPHzeJvLqT-scDiOKUy3zZpR-m8OfN9yymNRMFQHvxvETe6Kln5Xv3sG--QsWJMaNDTAx3Bfs8PGEkkZUwQL-2WOWwlvStN1Ja5uxp-AsObM6j-FAI4G22u4wSq3h', 'DUB-LX1', '2021-07-25 13:58:20', '2021-07-25 13:58:20'),
(95, 'fuVf5JC8TXmlLAfOW3_P7i:APA91bFUkQz-36jCy6cPbZn43y4K6AEKxUFuE_D7A_IdwnmvqezDf_9Td2wdGx9xDdP1zPB4NAdGWI2w_hteW4E-MyQ9fwA7Mn8h4M1m-T6C7Uhzn9LfIfECmRbN2vDuugBr-UQLvELm', 'LDN-L21', '2021-07-26 06:23:07', '2021-07-26 06:23:07'),
(96, 'eyyuIxQ8RyOjcGs8RX0ODx:APA91bFfKMLyUjozmOmAlgUbKsYYrHmlFkXyyDyKpIBfuTGZ7xM93mliNGAak5P2nVj-w_2CRe5vogbL1fj12BPguvs6Nn1fms85T1gIgmkUfLSKo0vjHSRUf0NSZ4tPKt7KyI6e2Avo', 'vivo 1723', '2021-07-26 06:53:33', '2021-07-26 06:53:33'),
(97, 'efzZ3X5FOaFPsPEZ_psP6g:APA91bFMF-im8o97RRy4MjqmRFxY7NLJKBLWz50Le2SMdmnK8Fr_f8LPPMeu5HHIs9xVxN5S9vcTW8efvA0Xc0DJmDv6Gto5KdQWQjA_JBkDG8QKbRlC3cSMsu7jh8oZNmfPfaddrMIN', 'Redmi Note 5 Pro', '2021-07-26 09:10:25', '2021-07-26 09:10:25'),
(98, 'fDH_WuJ6R22DnZ_jIotIEN:APA91bE541_LPplNoSp_BMAwpqydL20uZgTHzAPGehtBz8LMZ2sv5adSBL-yuSC-yZcruwLhB14rcpJfFl2EA-qyJu0r606eMwjtgcTWGx31Ho1aM7R0jSFcHs-KLU-VNBPzO09I-ct_', 'SM-J510F', '2021-07-26 09:37:08', '2021-07-26 09:37:08'),
(99, 'fa7L-FtpS4-oHfgrug42Zn:APA91bHwPktss2ZhXjICsBGdcCvXL8386uqoaAW1R1ZVvVn893Z2MlI0joO3VhJcKDO0BP4HWseS00Uo7nWwHHV1MZGqIDeMXtErasC68wHFgfKoNeiBGUZVDPi9f64x9pLu_5e9HnpP', 'NX629J', '2021-07-26 11:39:38', '2021-07-26 11:39:38'),
(100, 'ccVSsjEmQsOkznzbj9WZen:APA91bGPuipAXCMwrGGxP_AhdopWbWDCzYy8ru81uubK3mKIxyRZAV4Rf262u-R2gkH2j-B2HOFCYdws7HUAnix-XRAtbCFFoYojGBLfM3DSFVPoMoXEkOI7QiU4RKr3z9b5P8G7z1Po', 'IN2011', '2021-07-26 13:34:01', '2021-07-26 13:34:01'),
(101, 'dqpSnT_YT3qHbjXKvq59ZF:APA91bGRguE7NlWMJ3awwg_ONmRvI36pyTihAfXumGF4cZ4KA-BkW_XoN1IB0XfD-Vj3Sws-dTvK9bTUxVsa9b0prz9qYXWzUEEO-gG6XI5mFaeynaY0RNKDA2HJ0iV38fK4KIZbWkp3', 'SM-F916B', '2021-07-26 23:51:47', '2021-07-26 23:51:47'),
(102, 'cTX24hJITIOnpzHyxjR4FL:APA91bHSE1wzHmW5-owWWz0Ilu0MaXXqHx423mhS4wCyGW1fQkQxV1BaYkqQux0Mc48GDeJIr4Ybss6fMZCzsADOJFU4tmpeSZBEmCCEk48k_hgZK7IrH4ykMDvxvgVPM0HtFg5ryLHm', 'SM-G930F', '2021-07-27 15:19:32', '2021-07-29 17:19:57'),
(103, 'dIw3juU-SfOwcJDg5JjPQx:APA91bGFng3M8VQ4eWp1ZCkhfxQ14IoM2lCjI2jTsY4ZlQxwxkcVuo1QCcYaexHDDJ7o5mJJI_m8kiHvhoMApHvKRjOoyIQ4Sf2owkXLz5A6Bq-Ik4Du6v_VFt6fyS1e_DToSdByg_dw', 'STK-L21', '2021-07-27 15:42:44', '2021-07-28 08:59:54'),
(104, 'eSiKD90aSNOMZMrVnYU7zv:APA91bHLjKSgEILPUEBaBP1-BvNnlSYnFGPjqJrpS6TNLcbeXDp2YcC4jaJeqUdf8YqSXohmoIWflrn9Nekv92Rbv1S25dPyvHXiSPbJVANXwKQQvC_h7oQxT5uz4MVUMLgAKvwAFv7s', 'SM-A750F', '2021-07-27 22:32:16', '2021-08-01 18:18:26'),
(105, 'e5MrUszJRSKlGeOXiPvPCT:APA91bF8_4kPJ7qNKVSWWy76FGkFMlDJNR7KUywaInSetmibSijQ91x37rLJABWNVY54vW8NDaUayIW5agro7ge-NHaZSNzXzz55nkx8nhUocW9PjB5O0ZNM4DYYSeg2GAGwnhygx0qb', 'Joy 3', '2021-07-28 04:11:28', '2021-07-28 04:11:28'),
(106, 'fvPVQXfjQFqs2ke9XRoZ-T:APA91bGBtNncLk5WLv1kpIwbHGEeVIGBvSsaPORqrnVZtfMEQxTYm4rj8pRK7GzdIaoLnMDOntd5BO7Ussn5-ay7rYWZTOcVP1M4Ewv7pxdmykS6oc1eRp4IkgVfr6lu4HVDstqkyygv', 'M2101K6I', '2021-07-28 16:05:45', '2021-07-31 05:27:10'),
(107, 'fn3iVQA6RDiJXaJ-qxOYqx:APA91bFh4hwC1He6yiC-6KPGGIlY6yC0a1YMS8WTqOiID_lfFzSnN-5Db0CJ6o9wx29ZKb8sZir7HiFzsI8fKHVvrfUJja1odEKspngpsRuM_ngyuVB6o2JZJPN09GR4hog2h7AePXi1', 'SM-A217M', '2021-07-29 03:34:32', '2021-07-29 03:34:32'),
(108, 'cOkSGXErTHKdr6Q0YVIyni:APA91bEfo-gN_3U_2PwQ3U2gtGULDfDtCdG76Yvw4deBhJ0t2Gyd_MLymhacQLLWvW471-PvmDz2_vgmht3LNZCETvTZ2uKf2J9o39u96q2yOanukbD0FdhDZY7sL6IMtS521tYi14HA', 'SM-G977N', '2021-07-29 06:20:43', '2021-07-29 06:20:43'),
(109, 'emlxK7dmT2GkjbogNp3w-5:APA91bERhtUuD2NrmNj1WS-0ez1xTXVRfRWxMLedLe0GTqjoEV7RuqfXPE8U7mienVOFbM3XnwSgFAWnWCn9EZ1r4qwwbHN7AGlQMnh9SKobKbehGCW_Ns6KyMVBgIupCZ-WaOtjjmNg', 'vivo 2018', '2021-07-29 06:35:15', '2021-07-29 06:35:15'),
(110, 'dPUwjTZDRfe6njWif1YcEA:APA91bHIRO7LNYpx4UHyfj98AFDy34lNZtHvTdcUUTAxAy10UqersGuKbMzXzwTDN0Y1F_Dvl3oYKH8rQR1DL5FDdaSB7wHsmLnPqmLYVaF2oWo3TMMPKKDQ0Fo6dcenm39fqgPoHngt', 'CPH1803', '2021-07-29 12:24:28', '2021-07-29 12:24:28'),
(111, 'eXh-b8r9QEa3fhIgt2-6pG:APA91bEEAnNN8_A8hXCQDOwaQp763YnucPJ4I9YuYpJ-5w9OGU7SkcGkpZxoMUQJ04xxnnceMftxxl5Y5bXnY3sbobsXRhmiUklsSbB4nf1qiVq6Ut6Pfrot97zYQVarFkD5mMtgEYVH', 'SM-N975U', '2021-07-29 13:17:00', '2021-07-29 13:17:00'),
(112, 'dBDXptxNSyeoEKXtRmSEnH:APA91bHsliNwdNbCRGRDUWeTH23lReUqc9n8qqRbRYo99BlwcFgO0LPtr5rE_DYfaetp8RLi8cUeMf26j2iFjwee7RPgOmBZkfvd074vkemKf_A0creTn564zqleScz_xObMD5wlKoM9', 'vivo 1933', '2021-07-30 19:50:01', '2021-07-31 08:52:40'),
(113, 'fvBVy2dQRwWxTXNr2E8rl4:APA91bGFLwAmZhJjVfUSaIsnnLq-FhQTMx9xUp79MCduea2cJ84OXnIer-f8scq8lBx2RLBoViRyglYBJ35bK60FFcrUznirZfigqhUBcKXC01p7_Iw764nT9afVwP7v8KQRPQLoZzmG', 'Moto E (4) Plus', '2021-07-31 10:03:04', '2021-07-31 10:03:04'),
(114, 'fyPtswM7RNmMVZLeKF56jv:APA91bFzqgxuplL5ZOCdjhTya8oJbHWkerKe7PmKO3oTZ7MWryEsoPdilx9SKeqThnJLejuFJ7N5qqCVhCO7H7KTK366D41WESKye3HCwzRMSaGc2w-tq_XHyE0D44WW5PqEw2JD06eJ', 'SM-A025F', '2021-08-02 03:27:42', '2021-08-02 03:27:42'),
(115, 'eYf6u1l8QX2gBo6vcTmwhS:APA91bFV1Wk92PWgJlznoQF1txYGJ-qloo8PUoF-U_SUUrXPJzPS0Rs6hChBYfbmngTOa_PkLOxVBBiqyMPYfmoBrM5fqzul1xCsf2SK0POVgDqkX5E0aXoi0mceskC_o5J48a7DM0uB', 'Infinix X683', '2021-08-02 08:30:14', '2021-08-02 08:30:14'),
(116, 'dGz16MuFR-KWPlPzya0wXj:APA91bFstGJDiDDNHHgneFRUjuiljPlPJGiVSzteFel3bOOUxyh_VmIH6Pv9alJB8CIvvo0EmmY9nCRM-chUy1LU1CI4wXT02tSrZEmvitHh1R_1XuSK6d9TZt3OPhn2hLwfcdgr692p', 'RMX3171', '2021-08-02 11:41:37', '2021-08-03 03:15:43'),
(117, 'cuT_FZ6CTJOdALJSAhB8uA:APA91bGWlKI8IMsyCu6DraOxSTWPrbJcBcNuCIDHoyGLpnBf3QWWhBiSw6hCTOX6Pjg-JDg9XoX9Wvre1SEHdz8m-tkR0bK8eVN8BMkpr76D2pMX4R6D9ducysXyOsmO75uUYOj7KSDX', 'CPH1809', '2021-08-02 13:42:59', '2021-08-02 13:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE `userprofiles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_coin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userprofiles`
--

INSERT INTO `userprofiles` (`id`, `user_name`, `user_email`, `user_coin`, `created_at`, `updated_at`) VALUES
(2, 'prohor guest', 'prohor@gmail.com', '500', NULL, NULL),
(3, 'Suvo1', 'suvo1@gmail.com', '2000', '2021-06-26 02:02:03', '2021-06-26 11:25:50'),
(4, 'Hridam B', 'bhridam@gmail.com', '90', '2021-06-26 10:33:22', '2021-06-26 12:55:46'),
(5, 'oli ahmed', 'oliahmed205@gmail.com', '319', '2021-06-26 14:06:55', '2021-06-28 10:35:29'),
(6, 'oli ahmed', 'oliahmed205@gmail.com', '799', '2021-06-28 10:26:08', '2021-06-28 10:26:08'),
(7, 'Hridam B', 'bhridam@gmail.com', '166', '2021-07-01 06:38:55', '2021-07-01 06:38:55'),
(8, 'Hridam B', 'bhridam@gmail.com', '500', '2021-07-14 14:29:29', '2021-07-14 14:29:29'),
(9, 'IN Bazar', 'inbazarcare@gmail.com', '90000000', '2021-07-15 17:42:52', '2021-07-15 17:42:52'),
(10, 'The Royal Ocean Film Society', 'mly150779@gmail.com', '89987910', '2021-07-15 19:03:02', '2021-07-15 19:09:37'),
(11, 'Emre Turan', 'emreturan211@gmail.com', '90000000', '2021-07-15 21:24:42', '2021-07-15 21:24:42'),
(12, 'Valdir Correia', 'valdircorreia2012@gmail.com', '90000000', '2021-07-15 21:49:15', '2021-07-15 21:49:15'),
(13, 'Nozo App', 'nozoapp@gmail.com', '90000000', '2021-07-15 21:53:29', '2021-07-15 21:53:29'),
(14, 'Turkey Engineers', 'elitedeveloper0@gmail.com', '90000000', '2021-07-15 23:09:13', '2021-07-15 23:09:13'),
(15, 'Jobiba Classifieds', 'jobiba.com@gmail.com', '90000000', '2021-07-16 04:46:15', '2021-07-16 04:46:15'),
(16, 'Prince Saintz', 'princesaintz@gmail.com', '90000000', '2021-07-16 07:33:45', '2021-07-16 07:33:45'),
(17, 'Hojiakbar Turgunov', 'earthplaneta03@gmail.com', '90000000', '2021-07-16 07:35:32', '2021-07-16 07:35:32'),
(18, 'Aniket Verma', 'aniket.3333@gmail.com', '90000000', '2021-07-16 07:58:23', '2021-07-16 07:58:23'),
(19, 'Monarch', 'rs692594@gmail.com', '89994510', '2021-07-16 09:15:15', '2021-07-16 10:15:10'),
(20, 'jose gonzalez', 'livesfans.spain@gmail.com', '89622520', '2021-07-16 09:50:35', '2021-07-16 23:06:05'),
(21, 'tufan gökay', 'gokaytufan622@gmail.com', '90000000', '2021-07-16 11:23:00', '2021-07-16 11:23:00'),
(22, 'Thuglife style', 'thuglifetech@gmail.com', '90000000', '2021-07-16 13:50:40', '2021-07-16 13:50:40'),
(23, 'Hasan Sincar', 'hasansincarmardin@gmail.com', '90000000', '2021-07-16 19:37:27', '2021-07-16 19:37:27'),
(24, 'Sam Karmouchi', 'houssamkarmouchi9@gmail.com', '89993980', '2021-07-16 20:10:35', '2021-07-18 00:36:58'),
(25, 'Co Comedy', 'kodavatikantisanthoes@gmail.com', '90000000', '2021-07-16 20:13:58', '2021-07-16 20:13:58'),
(26, 'Saw9', 'khasiblog@gmail.com', '90000000', '2021-07-16 21:21:22', '2021-07-16 21:21:22'),
(27, 'Temenku TV', 'dnang99@gmail.com', '90000000', '2021-07-17 07:16:14', '2021-07-17 07:16:14'),
(28, 'amit chandra', 'ami.lovehockey@gmail.com', '89999400', '2021-07-17 07:38:34', '2021-07-17 07:40:45'),
(29, 'sumer saini', 'jkardweb@gmail.com', '89993850', '2021-07-17 10:32:30', '2021-07-17 10:48:37'),
(30, 'Mad Cow', 'madcowbr@gmail.com', '90000000', '2021-07-17 13:13:11', '2021-07-17 13:13:11'),
(31, 'Kum Puno', 'punokum@gmail.com', '89995020', '2021-07-18 10:59:04', '2021-07-18 11:01:00'),
(32, 'Dinesh Surya', 'dineshjob503@gmail.com', '89376770', '2021-07-18 12:59:40', '2021-08-02 15:59:40'),
(33, 'Robert Ogundiran', 'niyijameson21@gmail.com', '90000000', '2021-07-18 14:21:07', '2021-07-18 14:21:07'),
(34, 'Mad Cow', 'madcowbr@gmail.com', '90000000', '2021-07-18 15:45:30', '2021-07-18 15:45:30'),
(35, 'Thái Phổ Hoàng', 'seoit88@gmail.com', '90000000', '2021-07-19 14:32:42', '2021-07-19 14:32:42'),
(36, 'Omar Baaj', 'omarbaaj2012@gmail.com', '90000000', '2021-07-20 09:39:15', '2021-07-20 09:39:15'),
(37, 'Mad Cow', 'madcowbr@gmail.com', '90000000', '2021-07-20 13:16:41', '2021-07-20 13:16:41'),
(38, 'TURUST GamerZz', 'loloensar@gmail.com', '90000000', '2021-07-20 16:38:20', '2021-07-20 16:38:20'),
(39, 'The Modern Chanakya', 'cabsyapp@gmail.com', '90000000', '2021-07-20 17:32:14', '2021-07-20 17:32:14'),
(40, 'Sam Karmouchi', 'houssamkarmouchi9@gmail.com', '90000000', '2021-07-20 22:17:29', '2021-07-20 22:17:29'),
(41, 'Obbily store', 'obbilystore@gmail.com', '90000000', '2021-07-21 14:09:59', '2021-07-21 14:09:59'),
(42, 'Eslam Ps', 'eslamdalaleslam@gmail.com', '90000000', '2021-07-22 00:14:36', '2021-07-22 00:14:36'),
(43, 'popz kg', 'popzkg@gmail.com', '89999900', '2021-07-22 07:16:01', '2021-07-22 07:18:42'),
(44, 'Bal Krishna', 'balkrishnashetty00@gmail.com', '90000000', '2021-07-22 13:28:03', '2021-07-22 13:28:03'),
(45, 'Phan Ân', 'an98tn@gmail.com', '90000000', '2021-07-22 18:07:40', '2021-07-22 18:07:40'),
(46, 'Obbily store', 'obbilystore@gmail.com', '90000000', '2021-07-22 19:50:32', '2021-07-22 19:50:32'),
(47, 'roshni pathak', 'roshni0087@gmail.com', '90000000', '2021-07-24 08:51:50', '2021-07-24 08:51:50'),
(48, 'black hat', 'blackhat7team@gmail.com', '90000000', '2021-07-26 06:26:06', '2021-07-26 06:26:06'),
(49, 'RA JA', 'm.rajaraja92@gmail.com', '90000000', '2021-07-26 13:34:48', '2021-07-26 13:34:48'),
(50, 'Salak Sacma', 'salaksacma30@gmail.com', '90000000', '2021-07-27 15:20:26', '2021-07-27 15:20:26'),
(51, 'HAN REMIX', 'khongtienvan@gmail.com', '90000000', '2021-07-28 04:12:38', '2021-07-28 04:12:38'),
(52, 'Mitch Luv', 'mitchluvmusic@gmail.com', '90000000', '2021-07-29 13:17:41', '2021-07-29 13:17:41'),
(53, 'Salak Sacma', 'salaksacma30@gmail.com', '90000000', '2021-07-29 17:20:39', '2021-07-29 17:20:39'),
(54, 'Arjun', 'arjun.18shah@gmail.com', '90000000', '2021-07-31 05:27:41', '2021-07-31 05:27:41'),
(55, 'Ankur Bhingaradiya', 'ankur.bhingaradiya@gmail.com', '90000000', '2021-07-31 08:54:52', '2021-07-31 08:54:52'),
(56, 'Amit Singh Rajput', 'amitsinghrajputand@gmail.com', '89999850', '2021-07-31 08:55:06', '2021-07-31 08:57:34'),
(57, 'nasser ibrah', 'nasserasr1z@gmail.com', '90000000', '2021-08-02 03:29:04', '2021-08-02 03:29:04'),
(58, 'Shima Empire', 'shimaempireng@gmail.com', '90000000', '2021-08-02 08:31:00', '2021-08-02 08:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `u_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_name`, `email`, `password`, `gender`, `phone`, `u_image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Jannat', 'shobujrahman12@gmail.com', '123456', 'Female', '01404636884', '1623172183.jpg', '0', '2021-06-08 17:09:43', '2021-06-08 17:09:43'),
(10, 'prodip', 'rahulprasad0026226@gmail.com', 'dbugstation', 'Male', '01685790965', '1623494551.png', '1', '2021-06-12 10:42:31', '2021-06-12 10:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `cntry_id` int NOT NULL,
  `v_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_upload` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `cntry_id`, `v_image`, `type`, `video_url`, `video_upload`, `created_at`, `updated_at`) VALUES
(46, 3, '1626351774.png', '5', 'http://195.154.169.77:5500/live/atv1/8888/472.ts', NULL, '2021-07-15', '2021-07-15'),
(47, 32, '1626357983.jpg', '1', 'https://www.youtube.com/watch?v=mMRaNP4fh2o', NULL, '2021-07-15', '2021-07-15'),
(48, 31, '1626358035.jpg', '1', 'https://www.youtube.com/watch?v=33eUNRqxMzA', NULL, '2021-07-15', '2021-07-15'),
(49, 17, '1626358626.jpg', '1', 'https://www.youtube.com/watch?v=vlv8oltqLjc', NULL, '2021-07-15', '2021-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `videotypes`
--

CREATE TABLE `videotypes` (
  `id` bigint UNSIGNED NOT NULL,
  `type_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vdo_typ_value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videotypes`
--

INSERT INTO `videotypes` (`id`, `type_name`, `vdo_typ_value`, `created_at`, `updated_at`) VALUES
(1, 'youtube', '0', NULL, NULL),
(2, 'hls', '1', NULL, NULL),
(3, 'rtmp', '2', NULL, NULL),
(4, 'rtsp', '3', NULL, NULL),
(5, 'ts', '4', NULL, NULL),
(6, 'mpd', '5', NULL, NULL),
(7, 'uploadVideo', '6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vips`
--

CREATE TABLE `vips` (
  `id` bigint UNSIGNED NOT NULL,
  `subcrptn_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ggl_pdct_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vips`
--

INSERT INTO `vips` (`id`, `subcrptn_date`, `ggl_pdct_id`, `created_at`, `updated_at`) VALUES
(1, '30 Days', 'btcl 2020', '2021-05-29', '2021-05-29'),
(2, '60 dys', 'bchbhwb543', '2021-05-29', '2021-05-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofiles`
--
ALTER TABLE `userprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videotypes`
--
ALTER TABLE `videotypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vips`
--
ALTER TABLE `vips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coins`
--
ALTER TABLE `coins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gifts`
--
ALTER TABLE `gifts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `userprofiles`
--
ALTER TABLE `userprofiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `videotypes`
--
ALTER TABLE `videotypes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vips`
--
ALTER TABLE `vips`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
