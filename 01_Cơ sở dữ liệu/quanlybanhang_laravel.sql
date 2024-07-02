-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 04:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybanhang_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `avatar` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `avatar`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'somrCUvYiXbhgOyLx84AK5cgsNRNCDUHDC2esDFR.jpg', 'admin', 'admin1@gmail.com', '$2y$10$f6CxsY9LS4CvW.DRGY7Meehnlw5at4XezC5zNKvnZ63ky2JCYmOQe', NULL, '2024-06-18 06:37:27'),
(2, 'ounuWrPCNLL6qMM9AMWl5P8gpX3wnte46d1Ut6Ay.jpg', 'Nguyễn Xuân Tâm', 'Xuantam2701@gmail.com', '$2y$10$AeIU3rZDS0i7YOj9X/a6Qep8oHCY2kYM3nvNYuGgHtkuf/IM.zRCi', '2024-01-05 09:09:06', '2024-06-17 03:48:23'),
(3, 'd9T5IKa3mYXFUCzsCiRmWu7ksa6xvolvjdD4kk8t.jpg', 'nguyen duc toan', 'admin@gmail.com', '$2y$10$iGMnakP/rtDhcN855KWO.es7jNLurFD0BXpJ8K5.y0v1elzfT8lpW', '2024-06-18 08:41:44', '2024-06-18 08:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `ordertotal` int(11) NOT NULL,
  `payment` tinyint(4) NOT NULL,
  `shipping_address` varchar(300) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `user_id`, `ordertotal`, `payment`, `shipping_address`, `status`, `created_at`, `updated_at`) VALUES
(19, 1, 0, 1, 'Bắc Cạn', 0, '2024-01-04 11:31:31', '2024-01-04 11:31:31'),
(20, 2, 0, 1, 'Bắc Cạn', 0, '2024-01-04 11:33:05', '2024-01-04 11:33:05'),
(21, 2, 0, 1, 'Vĩnh Long', 0, '2024-01-04 11:38:57', '2024-01-04 11:38:57'),
(22, 2, 60500000, 1, 'Bắc Cạn', 0, '2024-01-04 11:51:14', '2024-01-04 11:51:14'),
(23, 1, 40000000, 2, 'Bắc Cạn', 0, '2024-01-05 09:28:18', '2024-01-05 09:28:18'),
(24, 1, 40000000, 2, 'Bắc Cạn', 0, '2024-01-05 09:28:32', '2024-01-05 09:28:32'),
(25, 1, 40000000, 2, 'Bắc Cạn', 0, '2024-01-05 09:30:36', '2024-01-05 09:30:36'),
(26, 1, 40000000, 2, 'Bắc Cạn', 0, '2024-01-05 09:31:10', '2024-01-05 09:31:10'),
(27, 1, 40000000, 2, 'Bắc Cạn', 0, '2024-01-05 09:34:07', '2024-01-05 09:34:07'),
(28, 1, 40000000, 2, 'Bắc Cạn', 0, '2024-01-05 09:34:10', '2024-01-05 09:34:10'),
(29, 1, 40000000, 2, 'Bắc Cạn', 0, '2024-01-05 09:35:11', '2024-01-05 09:35:11'),
(30, 1, 40000000, 2, 'Bắc Cạn', 0, '2024-01-05 09:35:29', '2024-01-05 09:35:29'),
(31, 1, 21, 2, 'Bắc Cạn', 0, '2024-01-05 09:36:41', '2024-01-05 09:36:41'),
(33, 1, 40000000, 2, 'Bắc Cạn', 0, '2024-01-05 09:38:07', '2024-01-05 09:38:07'),
(37, 1, 1350000, 1, '20', 0, '2024-06-17 01:33:11', '2024-06-17 01:33:11'),
(38, 3, 29050000, 1, '20', 0, '2024-06-17 01:36:40', '2024-06-17 01:36:40'),
(39, 3, 1350000, 1, '67, Bùi Ngọc Dương Thanh Nhàn Hà Nội', 0, '2024-06-17 03:58:59', '2024-06-17 03:58:59'),
(40, 3, 1350000, 2, '67, Bùi Ngọc Dương Thanh Nhàn Hà Nội', 0, '2024-06-17 03:59:13', '2024-06-17 03:59:13'),
(41, 3, 1350000, 1, '67, Bùi Ngọc Dương Thanh Nhàn Hà Nội', 0, '2024-06-17 03:59:55', '2024-06-17 03:59:55'),
(42, 5, 1350000, 1, '67, Bùi Ngọc Dương Thanh Nhàn Hà Nội', 0, '2024-06-17 06:01:51', '2024-06-17 06:01:51'),
(43, 4, 1350000, 1, '67, Bùi Ngọc Dương Thanh Nhàn Hà Nội', 0, '2024-06-17 06:08:50', '2024-06-17 06:08:50'),
(44, 4, 79760000, 1, '67, Bùi Ngọc Dương Thanh Nhàn Hà Nội', 0, '2024-06-17 10:21:02', '2024-06-17 10:21:02'),
(45, 4, 23760000, 1, '67, Bùi Ngọc Dương Thanh Nhàn Hà Nội', 0, '2024-06-18 06:40:11', '2024-06-18 06:40:11'),
(46, 4, 47520000, 1, '', 0, '2024-06-18 06:56:31', '2024-06-18 06:56:31'),
(47, 4, 71280000, 1, '', 0, '2024-06-18 06:59:18', '2024-06-18 06:59:18'),
(48, 4, 11000000, 1, '', 0, '2024-06-18 07:03:43', '2024-06-18 07:03:43'),
(49, 4, 11000000, 1, '', 0, '2024-06-18 07:05:52', '2024-06-18 07:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` bigint(20) NOT NULL,
  `bill_id` bigint(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `info` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `bill_id`, `product_name`, `image`, `quantity`, `price`, `info`, `created_at`, `updated_at`) VALUES
(13, 19, 'Lenovo G500', 'lSfplfcCyMMCiXx26ZRHFuO0JcMUS8gfZBD7sWKE.jpg', 1, 16700000, '', '2024-01-04 11:31:31', '2024-01-04 11:31:31'),
(14, 19, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-04 11:31:31', '2024-01-04 11:31:31'),
(15, 19, 'MSI GT80S', 'JKoOP3OyfxD1r7JuhLj9ZlufzHBefPJcU7u41sXn.jpg', 1, 25000000, '', '2024-01-04 11:31:31', '2024-01-04 11:31:31'),
(16, 19, 'Dell_Vostro 5568', '9889y7eqBst4ZJk1S3xUSCSzifhI2kJl7DtzbIPo.jpg', 1, 11000000, '', '2024-01-04 11:31:31', '2024-01-04 11:31:31'),
(17, 20, 'Dell 5570', 'iiCy4bV5Rd1ti15XzkCvkqTwzT2Jj02IpgyyKsQM.jpg', 3, 21999000, '', '2024-01-04 11:33:05', '2024-01-04 11:33:05'),
(18, 20, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 2, 40000000, '', '2024-01-04 11:33:05', '2024-01-04 11:33:05'),
(19, 21, 'Dell 5570', 'iiCy4bV5Rd1ti15XzkCvkqTwzT2Jj02IpgyyKsQM.jpg', 1, 21999000, '', '2024-01-04 11:38:57', '2024-01-04 11:38:57'),
(20, 22, 'Dell_Vostro 5568', '9889y7eqBst4ZJk1S3xUSCSzifhI2kJl7DtzbIPo.jpg', 2, 11000000, '', '2024-01-04 11:51:14', '2024-01-04 11:51:14'),
(21, 22, 'Legion T540', 'l1QuWxT4o3cJXKP6lu02wtXgi4VVjNPnp8C3UYQp.jpg', 1, 31000000, '', '2024-01-04 11:51:14', '2024-01-04 11:51:14'),
(22, 22, 'Hp', 'yZIBlq84kUjsQBJus4wsSMZvvZZKHMC96PObTU7X.jpg', 1, 7500000, '', '2024-01-04 11:51:14', '2024-01-04 11:51:14'),
(23, 23, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-05 09:28:18', '2024-01-05 09:28:18'),
(24, 24, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-05 09:28:32', '2024-01-05 09:28:32'),
(25, 25, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-05 09:30:36', '2024-01-05 09:30:36'),
(26, 26, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-05 09:31:10', '2024-01-05 09:31:10'),
(27, 27, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-05 09:34:07', '2024-01-05 09:34:07'),
(28, 28, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-05 09:34:10', '2024-01-05 09:34:10'),
(29, 29, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-05 09:35:11', '2024-01-05 09:35:11'),
(30, 30, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-05 09:35:29', '2024-01-05 09:35:29'),
(31, 31, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-05 09:36:41', '2024-01-05 09:36:41'),
(33, 33, 'Apple M1', 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 1, 40000000, '', '2024-01-05 09:38:07', '2024-01-05 09:38:07'),
(37, 37, 'Surface', 'yu7edbXUllJ6d1hH1250Q0Ab1bP1II6Xngnpv0cT.jpg', 1, 1350000, '', '2024-06-17 01:33:11', '2024-06-17 01:33:11'),
(38, 38, 'Surface', 'yu7edbXUllJ6d1hH1250Q0Ab1bP1II6Xngnpv0cT.jpg', 3, 1350000, '', '2024-06-17 01:36:40', '2024-06-17 01:36:40'),
(39, 38, 'MSI GT80S', 'JKoOP3OyfxD1r7JuhLj9ZlufzHBefPJcU7u41sXn.jpg', 1, 25000000, '', '2024-06-17 01:36:40', '2024-06-17 01:36:40'),
(40, 39, 'Surface', 'yu7edbXUllJ6d1hH1250Q0Ab1bP1II6Xngnpv0cT.jpg', 1, 1350000, '', '2024-06-17 03:58:59', '2024-06-17 03:58:59'),
(41, 40, 'Surface', 'yu7edbXUllJ6d1hH1250Q0Ab1bP1II6Xngnpv0cT.jpg', 1, 1350000, '', '2024-06-17 03:59:13', '2024-06-17 03:59:13'),
(42, 41, 'Surface', 'yu7edbXUllJ6d1hH1250Q0Ab1bP1II6Xngnpv0cT.jpg', 1, 1350000, '', '2024-06-17 03:59:55', '2024-06-17 03:59:55'),
(43, 42, 'Surface', 'yu7edbXUllJ6d1hH1250Q0Ab1bP1II6Xngnpv0cT.jpg', 1, 1350000, '', '2024-06-17 06:01:52', '2024-06-17 06:01:52'),
(44, 43, 'Surface', 'yu7edbXUllJ6d1hH1250Q0Ab1bP1II6Xngnpv0cT.jpg', 1, 1350000, '', '2024-06-17 06:08:50', '2024-06-17 06:08:50'),
(45, 44, 'Legion T540', 'l1QuWxT4o3cJXKP6lu02wtXgi4VVjNPnp8C3UYQp.jpg', 1, 31000000, '', '2024-06-17 10:21:02', '2024-06-17 10:21:02'),
(46, 44, 'MSI GT80S', 'JKoOP3OyfxD1r7JuhLj9ZlufzHBefPJcU7u41sXn.jpg', 1, 25000000, '', '2024-06-17 10:21:02', '2024-06-17 10:21:02'),
(47, 44, 'Iphon12 ProMax', '7rZAabXovx2LLTtiVOUBPorBicBYjyGLiTX6HanG.jpg', 1, 23760000, '', '2024-06-17 10:21:02', '2024-06-17 10:21:02'),
(48, 45, 'Iphon14 ProMax', 'rj6bb9JirbClgWJvnPM7kiNAiKMu47E1sOfzWT1b.webp', 1, 23760000, '', '2024-06-18 06:40:11', '2024-06-18 06:40:11'),
(49, 46, 'Iphon14 ProMax', 'rj6bb9JirbClgWJvnPM7kiNAiKMu47E1sOfzWT1b.webp', 2, 23760000, '', '2024-06-18 06:56:31', '2024-06-18 06:56:31'),
(50, 47, 'Iphon14 ProMax', 'rj6bb9JirbClgWJvnPM7kiNAiKMu47E1sOfzWT1b.webp', 3, 23760000, '', '2024-06-18 06:59:18', '2024-06-18 06:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `categoris`
--

CREATE TABLE `categoris` (
  `id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `admin_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoris`
--

INSERT INTO `categoris` (`id`, `status`, `admin_id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Dell', 'dell', 'abc.png', '2024-01-04 03:40:18', '2024-01-04 03:40:18'),
(2, 1, 1, 'Apple', 'apple', 'abc.png', '2024-01-04 03:40:40', '2024-01-04 03:40:40'),
(3, 1, 1, 'Lenovo', 'lenovo', 'abc.png', '2024-01-04 03:40:53', '2024-01-04 03:40:53'),
(4, 1, 1, 'Hp', 'hp', 'abc.png', '2024-01-04 03:41:02', '2024-01-04 03:41:02'),
(5, 1, 1, 'MSI', 'msi', 'abc.png', '2024-01-04 03:41:12', '2024-01-04 03:41:12'),
(6, 1, 1, 'Vivo', 'vivo', 'abc.png', '2024-01-04 03:41:43', '2024-06-18 08:38:21'),
(7, 1, 1, 'Realme', 'realme', 'abc.png', '2024-01-04 04:08:45', '2024-06-18 08:38:06'),
(8, 1, 1, 'Oppo', 'oppo', 'abc.png', '2024-01-04 04:08:56', '2024-06-18 08:37:43'),
(9, 1, 1, 'samsung', 'samsung', 'abc.png', '2024-06-18 08:37:04', '2024-06-18 08:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `star` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `admin_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `product_id`, `star`, `content`, `status`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 4, 11, 1, 'abcx', 1, 0, '2024-06-18 11:58:38', '2024-06-18 11:58:38'),
(2, 4, 11, 2, 'xxx', 1, NULL, '2024-06-18 11:59:52', '2024-06-18 11:59:52'),
(3, 4, 11, 3, 'defhgj', 0, NULL, '2024-06-18 12:25:05', '2024-06-18 12:25:05'),
(4, 4, 11, 4, 'có j dsd', 0, NULL, '2024-06-18 21:51:25', '2024-06-18 21:51:25'),
(5, 4, 11, 5, 'có j dsd', 0, NULL, '2024-06-18 21:51:26', '2024-06-18 21:51:26'),
(6, 4, 10, 5, 'znbcmzx', 0, NULL, '2024-06-19 06:56:58', '2024-06-19 06:56:58'),
(7, 4, 11, 4, 'sản phẩm tốt', 0, NULL, '2024-06-19 07:07:04', '2024-06-19 07:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2023_10_20_122231_create_tags_table', 4),
(13, '2023_10_20_122318_create_posts_table', 4),
(15, '2023_10_20_124124_create_post_tag_table', 4),
(84, '2014_10_12_000000_create_users_table', 5),
(85, '2014_10_12_100000_create_password_resets_table', 5),
(86, '2019_08_19_000000_create_failed_jobs_table', 5),
(87, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(88, '2023_10_20_120454_alter_phone_to_users_table', 5),
(89, '2023_10_20_121840_create_admins_table', 5),
(90, '2023_10_20_122155_create_categoris_table', 5),
(91, '2023_10_20_122359_create_comment_table', 5),
(92, '2023_10_30_123956_alter_avatar_to_admins_table', 5),
(93, '2023_11_18_020418_create_products_table', 5),
(94, '2024_01_04_092827_create_bill_table', 5),
(95, '2024_01_04_103416_create_bill_detail_table', 6),
(96, '2024_01_04_104604_create_products_table', 7),
(97, '2024_01_04_112942_create_bill_table', 8),
(98, '2024_01_04_113028_create_bill_detail_table', 8),
(99, '2024_01_04_114224_create_bill_detail_table', 9),
(100, '2024_01_04_114909_create_bill_detail_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `admin_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `view` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `status`, `admin_id`, `category_id`, `name`, `slug`, `image`, `description`, `content`, `view`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'tâm trạng hôm nay', 'tam-trang-hom-nay', 'post.png', 'xyz', 'hôm nay vui', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `info_detail` text NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `sold` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `info`, `info_detail`, `quantity`, `sold`, `category_id`, `status`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Dell 5570', 21999000, 'iiCy4bV5Rd1ti15XzkCvkqTwzT2Jj02IpgyyKsQM.jpg', 'CPU:  Intel Core i5 Kabylake Refresh8250U1.6GHz RAM:  4 GBDDR4 (2 khe)2400 MHz Ổ cứng:  HDD 1 TBHỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng Màn hình:  15.6\"Full HD (1920 x 1080) Card màn hình:  Card rờiAMD Radeon 530, 2 GB', 'product info_detail', 100, 4, 1, 1, 1, '2024-01-04 03:54:56', '2024-01-04 11:38:57'),
(2, 'Acer terbaru', 1350000, 'lNcdDwlCmg0inaWt8jgpG9R2Y6nt4QSdWMt1rZWB.jpg', 'CPU:  i513420H2.1GHz RAM:  16 GBDDR4 2 khe (1 khe 8 GB + 1 khe 8 GB)3200 MHz Ổ cứng:  512 GB SSD', '', 23, 0, 8, 1, 1, '2024-01-04 04:03:19', '2024-01-04 04:09:28'),
(3, 'Apple M1', 40000000, 'qW2Cn0dDj2vqYlQyDrszlLETdWHs5AM99rMr6vcR.jpg', 'CPU:  Apple M1 RAM:  16 GB Ổ cứng:  512 GB SSD Màn hình:  13.3\"Retina 2560 x 1600 Card màn hình:  Card tích hợp8 nhân GPU', '', 21, 17, 2, 1, 1, '2024-01-04 04:04:02', '2024-01-05 09:39:05'),
(4, 'Dell_Vostro 5568', 11000000, '9889y7eqBst4ZJk1S3xUSCSzifhI2kJl7DtzbIPo.jpg', 'Core i5-8300H, 8GB, SSD 128GB + HDD 500GB, GTX 1050, 15.6\' FHD IPS', '', 34, 3, 1, 1, 1, '2024-01-04 04:04:48', '2024-01-04 11:51:14'),
(5, 'Hp', 7500000, 'yZIBlq84kUjsQBJus4wsSMZvvZZKHMC96PObTU7X.jpg', 'CPU:  Intel Core i5 Kabylake Refresh8250U1.6GHz RAM:  4 GBDDR4 (2 khe)2400 MHz Ổ cứng:  HDD 1 TBHỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng Màn hình:  15.6\"Full HD (1920 x 1080) Card màn hình:  Card rờiAMD Radeon 530, 2 GB', '', 9, 5, 4, 1, 1, '2024-01-04 04:05:24', '2024-06-18 07:10:06'),
(6, 'Legion T540', 31000000, 'l1QuWxT4o3cJXKP6lu02wtXgi4VVjNPnp8C3UYQp.jpg', 'CPU:  Intel Core i5 Kabylake Refresh8250U1.6GHz RAM:  4 GBDDR4 (2 khe)2400 MHz Ổ cứng:  HDD 1 TBHỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng Màn hình:  15.6\"Full HD (1920 x 1080) Card màn hình:  Card rờiAMD Radeon 530, 2 GB', '', 19, 2, 3, 1, 1, '2024-01-04 04:06:12', '2024-06-17 10:21:02'),
(7, 'Lenovo G500', 16700000, 'lSfplfcCyMMCiXx26ZRHFuO0JcMUS8gfZBD7sWKE.jpg', 'CPU:  Intel Core i5 Kabylake Refresh8250U1.6GHz RAM:  4 GBDDR4 (2 khe)2400 MHz Ổ cứng:  HDD 1 TBHỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng Màn hình:  15.6\"Full HD (1920 x 1080) Card màn hình:  Card rờiAMD Radeon 530, 2 GB', '', 13, 1, 3, 1, 1, '2024-01-04 04:06:49', '2024-01-04 11:31:31'),
(8, 'MSI GT80S', 25000000, 'JKoOP3OyfxD1r7JuhLj9ZlufzHBefPJcU7u41sXn.jpg', 'Core i5-8300H, 8GB, SSD 128GB + HDD 500GB, GTX 1050, 15.6\' FHD IPS', '', 5, 3, 5, 0, 1, '2024-01-04 04:07:35', '2024-06-17 10:21:02'),
(9, 'Surface', 1350000, 'yu7edbXUllJ6d1hH1250Q0Ab1bP1II6Xngnpv0cT.jpg', 'Core i5-8300H, 8GB, SSD 128GB + HDD 500GB, GTX 1050, 15.6\' FHD IPS', '', 7, 11, 7, 1, 1, '2024-01-04 04:08:12', '2024-06-18 09:03:36'),
(10, 'Iphon12 ProMax', 23760000, '7rZAabXovx2LLTtiVOUBPorBicBYjyGLiTX6HanG.jpg', 'Màn hình super Retina XDR, OLED, 460 ppi, 1200 nits, Tần số quét 60 Hz, HDR display, công nghệ True Tone Wide color (P3), Haptic Touch, Lớp phủ oleophobic chống bám vân tay', '', 13, 2, 2, 1, 1, '2024-06-17 03:47:04', '2024-06-18 09:03:36'),
(11, 'Iphon14 ProMax', 23760000, 'rj6bb9JirbClgWJvnPM7kiNAiKMu47E1sOfzWT1b.webp', 'Màn hình super Retina XDR, OLED, 460 ppi, 1200 nits, Tần số quét 60 Hz, HDR display, công nghệ True Tone Wide color (P3), Haptic Touch, Lớp phủ oleophobic chống bám vân tay', 'info_detail ip14 prmsssss', 13, 8, 2, 1, 1, '2024-06-18 06:39:30', '2024-06-19 06:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `admin_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `status`, `admin_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'trạng thái', 'trang-thai', '2023-10-25 01:03:44', '2023-10-25 01:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đàm Văn Long', 'long@gmail.com', NULL, '$2y$10$rSRg3RK9wQg0M4k8tILemOvKA7Fh16wVqMNZQ1ok.Suo.EQG2peMe', '7m2LzyQGCYFowNZytYhxmoLeoBWD5Mc9bTHunolQ.png', NULL, '2024-01-04 03:39:25', '2024-01-05 09:15:25'),
(2, 'Hoàng Văn Anh', 'ha@gmail.com', NULL, '$2y$10$mH8SwlhszhhkpUfXq4C0yOvNwVHgVJmcLhiAQ13bE3RZ/YSEWHiqe', 'KkDF5njOGMf8vscLGC8NdxeuaZPR62maDHDGEjcT.png', NULL, '2024-01-04 11:32:13', '2024-01-05 09:15:06'),
(3, 'toan1', 'toan12@gmail.com', NULL, '$2y$10$Ep2ltwYuff/XfS6xLdpvs.fd9GOpF.5MWRgLLDi7K3fkHWyU/nI2i', 'CFx4siuvd7y5f4qalNwn1bHpFmv09IoSQqYV1edj.jpg', NULL, '2024-06-17 01:35:43', '2024-06-17 01:35:43'),
(4, 'toan1', 'toan123@gmail.com', NULL, '$2y$10$aynUaKQBC.SkP3y//eN6JOyTaywm86MLkMTtlTcwYfVP9IZtpV.sC', 'QfctWVGDWrD1n2KDoa9Pdsm6qsJpfaGhmdZ5qgAh.jpg', NULL, '2024-06-17 03:50:20', '2024-06-18 21:47:13'),
(5, 'Nguyễn Đức Toán', 'toan1234@gmail.com', NULL, '$2y$10$QtxMhRXAyRejBv3cFoVRkeVoDbW5E6Jc42AN/2iQL8NTNRmzC7T0y', 'GomCn9KR6coJi7a1sTdkClzUsQ2XWSTIf6gp1KfX.jpg', NULL, '2024-06-17 06:01:17', '2024-06-18 06:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 11, 4, '2024-06-19 13:58:52', '2024-06-19'),
(2, 10, 4, '2024-06-18 21:25:52', '2024-06-19'),
(3, 7, 4, '2024-06-18 21:27:01', '2024-06-19'),
(4, 6, 4, '2024-06-18 21:29:15', '2024-06-19'),
(5, 3, 4, '2024-06-18 21:29:32', '2024-06-19'),
(6, 8, 4, '2024-06-18 21:29:48', '2024-06-19'),
(7, 2, 4, '2024-06-18 21:31:34', '2024-06-19'),
(8, 4, 4, '2024-06-18 21:31:44', '2024-06-19'),
(9, 9, 4, '2024-06-18 21:33:22', '2024-06-19'),
(10, 11, 4, '2024-06-18 21:34:08', '2024-06-19'),
(11, 8, 4, '2024-06-18 21:34:37', '2024-06-19'),
(12, 8, 4, '2024-06-18 21:34:56', '2024-06-19'),
(13, 10, 4, '2024-06-18 21:35:01', '2024-06-19'),
(14, 7, 4, '2024-06-18 21:35:05', '2024-06-19'),
(15, 4, 4, '2024-06-18 21:43:43', '2024-06-19');

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
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BiUs` (`user_id`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BiDeBi` (`bill_id`);

--
-- Indexes for table `categoris`
--
ALTER TABLE `categoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CaAd` (`admin_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CoPr` (`product_id`),
  ADD KEY `FK_CoUs` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PrCa` (`category_id`),
  ADD KEY `FK_PrAd` (`admin_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `categoris`
--
ALTER TABLE `categoris`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `FK_BiUs` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `FK_BiDeBi` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`);

--
-- Constraints for table `categoris`
--
ALTER TABLE `categoris`
  ADD CONSTRAINT `FK_CaAd` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_CoPr` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `FK_CoUs` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_PrAd` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `FK_PrCa` FOREIGN KEY (`category_id`) REFERENCES `categoris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
