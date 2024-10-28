-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 10:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_voting_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task` varchar(4500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `task`, `created_at`, `updated_at`) VALUES
(1, 'Ndueso Walter Okorie Logged in on 2024-05-17 11:53:18', '2024-05-17 10:53:18', '2024-05-17 10:53:18'),
(2, 'Ndueso Walter Okorie Logged in on 2024-06-13 21:19:29', '2024-06-13 20:19:29', '2024-06-13 20:19:29'),
(3, 'Ndueso Walter Okorie Logged in on 2024-06-14 05:55:54', '2024-06-14 04:55:54', '2024-06-14 04:55:54'),
(4, 'Ndueso Walter Okorie Logout on 2024-06-14 05:55:55', '2024-06-14 04:55:55', '2024-06-14 04:55:55'),
(5, 'Ndueso Walter Okorie Logged in on 2024-06-14 05:56:04', '2024-06-14 04:56:04', '2024-06-14 04:56:04'),
(6, 'Ndueso Walter Okorie Logout on 2024-06-14 05:56:07', '2024-06-14 04:56:07', '2024-06-14 04:56:07'),
(7, 'Ndueso Walter Okorie Logged in on 2024-06-14 05:56:10', '2024-06-14 04:56:10', '2024-06-14 04:56:10'),
(8, 'Ndueso Walter Okorie Logged in on 2024-06-14 08:36:33', '2024-06-14 07:36:33', '2024-06-14 07:36:33'),
(9, 'Ndueso Walter Okorie Logged in on 2024-06-21 07:27:22', '2024-06-21 06:27:22', '2024-06-21 06:27:22'),
(10, 'Ndueso Walter Okorie Logout on 2024-06-21 07:35:26', '2024-06-21 06:35:26', '2024-06-21 06:35:26'),
(11, 'Ndueso Walter Okorie Logged in on 2024-06-21 07:35:52', '2024-06-21 06:35:52', '2024-06-21 06:35:52'),
(12, 'Ngomesiegh Boris Mbiziwueh Logged in on 2024-06-21 15:46:28', '2024-06-21 14:46:28', '2024-06-21 14:46:28'),
(13, 'Ngomesiegh Boris Mbiziwueh Logged in on 2024-06-22 06:15:18', '2024-06-22 05:15:18', '2024-06-22 05:15:18'),
(14, 'Ngomesiegh Boris Mbiziwueh Logged in on 2024-06-23 08:30:46', '2024-06-23 07:30:46', '2024-06-23 07:30:46'),
(15, 'Ngomesiegh Boris Mbiziwueh Logout on 2024-06-23 09:20:23', '2024-06-23 08:20:23', '2024-06-23 08:20:23'),
(16, 'Ngomesiegh Boris Mbiziwueh Logged in on 2024-06-23 11:08:26', '2024-06-23 10:08:26', '2024-06-23 10:08:26'),
(17, 'Ngomesiegh Boris Mbiziwueh Changed Profile 2024-06-23 11:09:06', '2024-06-23 10:09:06', '2024-06-23 10:09:06'),
(18, 'Ngomesiegh Boris Mbiziwueh Logged in on 2024-06-23 15:58:31', '2024-06-23 14:58:31', '2024-06-23 14:58:31'),
(19, 'Ngomesiegh Boris Mbiziwueh Logged in on 2024-06-23 16:00:43', '2024-06-23 15:00:43', '2024-06-23 15:00:43'),
(20, 'Ngomesiegh Boris Mbiziwueh Logged in on 2024-06-23 22:20:09', '2024-06-23 21:20:09', '2024-06-23 21:20:09'),
(21, 'Ngomesiegh Boris Mbiziwueh Logout on 2024-06-23 23:33:47', '2024-06-23 22:33:47', '2024-06-23 22:33:47'),
(22, 'Ngomesiegh Boris Mbiziwueh Logged in on 2024-06-24 00:17:32', '2024-06-23 23:17:32', '2024-06-23 23:17:32'),
(23, 'Ngomesiegh Boris Mbiziwueh Changed Profile 2024-06-24 00:18:10', '2024-06-23 23:18:10', '2024-06-23 23:18:10'),
(24, 'Ngomesiegh Boris Mbiziwueh Disable_Enable an Admin on 2024-06-24 00:18:42', '2024-06-23 23:18:42', '2024-06-23 23:18:42'),
(25, 'Ngomesiegh Boris Mbiziwueh Disable_Enable an Admin on 2024-06-24 00:18:46', '2024-06-23 23:18:46', '2024-06-23 23:18:46'),
(26, 'Ngomesiegh Boris Mbiziwueh Logout on 2024-06-24 00:41:33', '2024-06-23 23:41:33', '2024-06-23 23:41:33'),
(27, 'Ngomesiegh Boris Mbiziwueh Logged in on 2024-06-24 00:41:37', '2024-06-23 23:41:37', '2024-06-23 23:41:37'),
(28, 'Ngomesiegh Boris Mbiziwueh Changed Profile 2024-06-24 00:42:17', '2024-06-23 23:42:17', '2024-06-23 23:42:17'),
(29, 'Ngomesiegh Boris xxxxx Changed Profile 2024-06-24 00:42:34', '2024-06-23 23:42:34', '2024-06-23 23:42:34'),
(30, 'Ngomesiegh Boris xxxxx Disable_Enable an Admin on 2024-06-24 00:42:55', '2024-06-23 23:42:55', '2024-06-23 23:42:55'),
(31, 'Ngomesiegh Boris xxxxx Disable_Enable an Admin on 2024-06-24 00:43:02', '2024-06-23 23:43:02', '2024-06-23 23:43:02'),
(32, 'Ngomesiegh Boris xxxxx Logout on 2024-06-24 00:44:34', '2024-06-23 23:44:34', '2024-06-23 23:44:34'),
(33, 'Ngomesiegh Boris xxxxx Logged in on 2024-07-09 11:48:35', '2024-07-09 10:48:35', '2024-07-09 10:48:35'),
(34, 'Ngomesiegh Boris xxxxx Logged in on 2024-07-10 16:10:18', '2024-07-10 15:10:18', '2024-07-10 15:10:18'),
(35, 'Ngomesiegh Boris Changed Profile 2024-07-10 16:35:11', '2024-07-10 15:35:11', '2024-07-10 15:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_21_022143_create_tblvoters_table', 1),
(5, '2024_04_21_022927_create_tblotps_table', 1),
(6, '2024_04_21_024131_create_personal_access_tokens_table', 1),
(7, '2024_04_22_102454_create_tblcandidates_table', 1),
(8, '2024_04_24_205716_create_tblpartys_table', 1),
(9, '2024_04_24_210106_create_tblelection_types_table', 1),
(10, '2024_04_28_225333_create_tblvotes_table', 1),
(11, '2024_04_30_110656_add_username_and_status_and_groupname', 1),
(12, '2024_04_30_110829_add_photo_and_lastaccess', 1),
(13, '2024_05_17_115008_create_activity_logs_table', 2),
(14, '2024_05_17_115156_create_activity_logs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\API\\tblvoter', 1, 'register', '3965145ae13b43010fcd08990e1507c99189fe10dc972d2df1b9dedd12025022', '[\"*\"]', NULL, NULL, '2024-05-12 11:56:38', '2024-05-12 11:56:38'),
(2, 'App\\Models\\API\\tblvoter', 2, 'register', '569c42156a66fe27fc028fde54ac0cdb588bd1f5a59beb15954ae528b44277c0', '[\"*\"]', NULL, NULL, '2024-05-12 11:58:18', '2024-05-12 11:58:18'),
(3, 'App\\Models\\API\\tblvoter', 3, 'register', '6ec7aacd5dc10751890bee51d2f781d79648b7bf080b9eb7cb4c8a5164afb184', '[\"*\"]', NULL, NULL, '2024-05-12 11:59:10', '2024-05-12 11:59:10'),
(4, 'App\\Models\\API\\tblvoter', 4, 'register', 'eb1e5c4be75526ca83f8429d25a6145a170dade2f686a12771f083e587c8700a', '[\"*\"]', NULL, NULL, '2024-05-12 12:00:40', '2024-05-12 12:00:40'),
(5, 'App\\Models\\API\\tblcandidate', 1, 'register_candidate', '21ba933bd9a4c53d66702d6f96067b3f85e0a8a57e759c17928ad0537c2e53a4', '[\"*\"]', NULL, NULL, '2024-05-12 12:06:22', '2024-05-12 12:06:22'),
(6, 'App\\Models\\API\\tblcandidate', 2, 'register_candidate', '937685cd0ab0817525fdb34d8a3e9bcef30d10b4746d87b1641e6668ec6e7247', '[\"*\"]', NULL, NULL, '2024-05-12 12:07:09', '2024-05-12 12:07:09'),
(7, 'App\\Models\\API\\tblcandidate', 3, 'register_candidate', '11a8340f1d03d835f4d00833cff6f5d92fa502396c94133f426d4b9c4cc75db9', '[\"*\"]', NULL, NULL, '2024-05-12 12:07:49', '2024-05-12 12:07:49'),
(8, 'App\\Models\\API\\tblcandidate', 4, 'register_candidate', '7e13590b0b0510fa0040667da94950dfbc9f7723fd501e97d165c9147f6eab15', '[\"*\"]', NULL, NULL, '2024-05-12 12:08:45', '2024-05-12 12:08:45'),
(9, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'adfe29ad3aacaa70a5a18efc1aa52608555f011ff413fb959a09829e9b249c75', '[\"*\"]', NULL, NULL, '2024-05-17 10:12:40', '2024-05-17 10:12:40'),
(10, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '6acae4d718573570aa01ebbf7b23f71c61f34bc03ebc47014f635f11afb04b0d', '[\"*\"]', NULL, NULL, '2024-05-17 10:12:51', '2024-05-17 10:12:51'),
(11, 'App\\Models\\API\\tblvoter', 4, 'resend', '6bb8a62c01a3a52526ceea5f87e10cebaf3e0d60b9a836b65dd58f4165a2d2ca', '[\"*\"]', NULL, NULL, '2024-05-17 10:16:38', '2024-05-17 10:16:38'),
(12, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '31d8bc102309c2e40c5175931a2fc409090aaee4294f44c596dbf1a539df521f', '[\"*\"]', NULL, NULL, '2024-05-17 10:17:54', '2024-05-17 10:17:54'),
(13, 'App\\Models\\API\\tblotp', 8, 'otplogin', '2d48fa77108f566460b97793f9ba097ef443b875450068095ee68416087b3623', '[\"*\"]', NULL, NULL, '2024-05-17 10:18:23', '2024-05-17 10:18:23'),
(14, 'App\\Models\\API\\tblcandidate', 5, 'register_candidate', 'bb31828e057d26bd53edcd199723f2e54906e5d692ea74f19b6d40a251b54351', '[\"*\"]', NULL, NULL, '2024-06-14 10:52:48', '2024-06-14 10:52:48'),
(15, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '74d325b9f3100020f98b62aa52dbe1f3fd1a7b1534cc0a64673ba96c677a0366', '[\"*\"]', NULL, NULL, '2024-06-14 11:32:54', '2024-06-14 11:32:54'),
(16, 'App\\Models\\API\\tblotp', 9, 'otplogin', '23ad2a4562371f4984547ce736437001d54502520338ae6cf8154094ef6ab9fb', '[\"*\"]', NULL, NULL, '2024-06-14 11:33:31', '2024-06-14 11:33:31'),
(17, 'App\\Models\\API\\tblcandidate', 6, 'register_candidate', '3e671f22cf4a5982291fe0d14296e34ceea3dcde0006a81142c7da02876b5f33', '[\"*\"]', NULL, NULL, '2024-06-14 11:35:09', '2024-06-14 11:35:09'),
(18, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '2691693141956d1c295ea29fef113427314385e8dbcb6ffc024e4ca1c135737a', '[\"*\"]', NULL, NULL, '2024-06-16 07:06:08', '2024-06-16 07:06:08'),
(19, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '094ccbcb488486a35aa771373052b2eba065fa8b835e6073408c0bbb4663428a', '[\"*\"]', NULL, NULL, '2024-06-17 12:53:52', '2024-06-17 12:53:52'),
(20, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '416faedc5e4277d9039bb0fe0bd31e45880e1036034af7d5e0c2ef2c240418f7', '[\"*\"]', NULL, NULL, '2024-06-17 13:05:52', '2024-06-17 13:05:52'),
(21, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '1a3b931e3b3d6e0f55265bed697fc1b55a53638b775f233cdf7fe3e4300ab971', '[\"*\"]', NULL, NULL, '2024-06-17 13:06:57', '2024-06-17 13:06:57'),
(22, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '3cf6d92cf012d30e2404568c50c2d57605afeb68464b1da64ee6eaabe18e64c5', '[\"*\"]', NULL, NULL, '2024-06-17 13:14:30', '2024-06-17 13:14:30'),
(23, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'b8884b87145261867e1dfe5773ebc85cad9f209c7e64a3a9e4fcdebe8ad75abe', '[\"*\"]', NULL, NULL, '2024-06-17 13:17:38', '2024-06-17 13:17:38'),
(24, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '026bbd66f479270b5d7f1c06883d87d22052169d52601a07fa9f5790f3500573', '[\"*\"]', NULL, NULL, '2024-06-17 13:18:46', '2024-06-17 13:18:46'),
(25, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '7eec84a46ce7d055b0de6f7588cd6d2025271f10e72b623c9dae1df0b676a2d7', '[\"*\"]', NULL, NULL, '2024-06-17 13:23:54', '2024-06-17 13:23:54'),
(26, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'a5795e1ff4aaad6d56a5e8e3dc9c3618354864c7a797eedc1d52ea4fe0e8b4a5', '[\"*\"]', NULL, NULL, '2024-06-17 13:25:04', '2024-06-17 13:25:04'),
(27, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'c2c90766a662acdce136edc38407b2d9871b475c418956679a1602e15deb130c', '[\"*\"]', NULL, NULL, '2024-06-17 13:33:53', '2024-06-17 13:33:53'),
(28, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '1937c6b2b4e20335dcee5b367238265f1bfe7e9faaecb9ffb2b6bbb79628f7a8', '[\"*\"]', NULL, NULL, '2024-06-17 13:56:29', '2024-06-17 13:56:29'),
(29, 'App\\Models\\API\\tblotp', 17, 'otplogin', 'd42b05de0f90ca26b8b7679bcfa8e6012121f90638b6cbcc7cc782b00db04225', '[\"*\"]', NULL, NULL, '2024-06-17 13:57:01', '2024-06-17 13:57:01'),
(30, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'c28ff244cd32a7699f6cfe649f525a2ad63a4a32525e37554c38f1a8edbe6839', '[\"*\"]', NULL, NULL, '2024-06-17 13:57:26', '2024-06-17 13:57:26'),
(31, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '714761bc35b3ce320ff50ed597be2275fceb425949fc8895780fdc005250c7e0', '[\"*\"]', NULL, NULL, '2024-06-17 13:58:51', '2024-06-17 13:58:51'),
(32, 'App\\Models\\API\\tblotp', 18, 'otplogin', '1bdb0879f7ca7d3a5b3362f6f906fb4e1febca7e2dd8d40f1e2ec5ac5766b8ab', '[\"*\"]', NULL, NULL, '2024-06-17 13:59:06', '2024-06-17 13:59:06'),
(33, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '9a80bb1579419353e8cc0e7a40a32e3e0525377898cf7b2926a3c1de2ed272a1', '[\"*\"]', NULL, NULL, '2024-06-17 13:59:30', '2024-06-17 13:59:30'),
(34, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'f7f373cc017ac78c3e0671f120e10c87b51a6f598a10fa0e1a3e6e3b647b66a7', '[\"*\"]', NULL, NULL, '2024-06-17 14:02:33', '2024-06-17 14:02:33'),
(35, 'App\\Models\\API\\tblotp', 19, 'otplogin', '9d44c2c4c6e826c0038e42df6219a2d0b2529e621e405c10c461144fd21fc723', '[\"*\"]', NULL, NULL, '2024-06-17 14:02:50', '2024-06-17 14:02:50'),
(36, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'bcb4ca9c105d78727343713bff7a3a34e5e6ea8482a5a6754bbf0d83fa61e352', '[\"*\"]', NULL, NULL, '2024-06-17 14:03:29', '2024-06-17 14:03:29'),
(37, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'de22a7773eedf992fe33fd73340176381cc8f41c92efb3f43972754a0c53aa26', '[\"*\"]', NULL, NULL, '2024-06-17 14:17:29', '2024-06-17 14:17:29'),
(38, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'c9fd56ab49b7556345303ed7353df330be4fa2396fa6fefd92251ed536ce145a', '[\"*\"]', NULL, NULL, '2024-06-17 14:20:15', '2024-06-17 14:20:15'),
(39, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'c6555f5e1caad487aab8bd8cbbec7bda2d02445a4c32ea13b5a69120d433fd8c', '[\"*\"]', NULL, NULL, '2024-06-17 14:21:15', '2024-06-17 14:21:15'),
(40, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'af7b082868a45bc0bcb12aef3ee57478b0482ca31aa525369ec05d0548419a98', '[\"*\"]', NULL, NULL, '2024-06-17 14:27:32', '2024-06-17 14:27:32'),
(41, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '88efe4b03eaac538c0130d72001459dac929465328f849e53d7d4631d50dafbd', '[\"*\"]', NULL, NULL, '2024-06-17 14:29:24', '2024-06-17 14:29:24'),
(42, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '761d2b635c4e5772ba551a29c32c350ec95d018b669543fa34c87456e4270daf', '[\"*\"]', NULL, NULL, '2024-06-17 14:30:18', '2024-06-17 14:30:18'),
(43, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '6fc4afa2728b2e6a10c96daf4eead9649d192bf8b4c51afa58e50a44aff09c23', '[\"*\"]', NULL, NULL, '2024-06-17 14:34:14', '2024-06-17 14:34:14'),
(44, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '6998cac4f1205e7b4890e64fe3f27e53be2d575d185e27ad560e495a01dd017c', '[\"*\"]', NULL, NULL, '2024-06-17 14:35:03', '2024-06-17 14:35:03'),
(45, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'a31129757ab9d04f883cc50e5c1bdf1a71d0c86a34d46c0c2735881bb4959c27', '[\"*\"]', NULL, NULL, '2024-06-17 14:38:49', '2024-06-17 14:38:49'),
(46, 'App\\Models\\API\\tblotp', 34, 'otplogin', 'e6f9b686d13046905d1587195ac054dac39c3b75eba46bb23a800997f747636b', '[\"*\"]', NULL, NULL, '2024-06-17 14:39:16', '2024-06-17 14:39:16'),
(47, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '73ff22b71e310288243cdfb26162f8bd586cb9c590619b071e3a726d7b0c85d4', '[\"*\"]', NULL, NULL, '2024-06-17 19:51:57', '2024-06-17 19:51:57'),
(48, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '91a549e586f88b10f18fdbe5f38ea8cb9859b3598e00368708b9fc0e0bdcadb5', '[\"*\"]', NULL, NULL, '2024-06-17 19:52:09', '2024-06-17 19:52:09'),
(49, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'a92f8ebd6c779ef27622fd534c3223d072b6d2fee1372a22c449b0da740a08fc', '[\"*\"]', NULL, NULL, '2024-06-17 19:54:01', '2024-06-17 19:54:01'),
(50, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'b1e8d41c55dc9ffc841433db26760256a03352dd409d9bc81f60f1a4032c70c5', '[\"*\"]', NULL, NULL, '2024-06-17 19:55:14', '2024-06-17 19:55:14'),
(51, 'App\\Models\\API\\tblotp', 35, 'otplogin', '65392e6c78c2c7dd9b2ccaa9f31e08e864e3c971b3792ce9cef337385f6f1df2', '[\"*\"]', NULL, NULL, '2024-06-17 19:55:49', '2024-06-17 19:55:49'),
(52, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'c13af6331c433e587d93e6d49fb3d726917c0051e3b5841cc29cd42d692b16c6', '[\"*\"]', NULL, NULL, '2024-06-17 20:05:57', '2024-06-17 20:05:57'),
(53, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'bef0df7a53ad6383deb1b55cf87fccbe11e4cec759c953e57b562ea0ea8856e1', '[\"*\"]', NULL, NULL, '2024-06-17 21:11:33', '2024-06-17 21:11:33'),
(54, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '4ee8a61697b40cf740f749720420cc8513bc9862859b52f44295c1b97c53da5c', '[\"*\"]', NULL, NULL, '2024-06-17 21:19:31', '2024-06-17 21:19:31'),
(55, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'dd3bf35c3456de1fa5c68e968d7873533562e65759293095c38f9ecd60069166', '[\"*\"]', NULL, NULL, '2024-06-17 21:32:20', '2024-06-17 21:32:20'),
(56, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'f9972427865e74f9ec505b5de343f3d9288399bb4a793e9c88a4d1b4c7b0ae6a', '[\"*\"]', NULL, NULL, '2024-06-17 21:33:37', '2024-06-17 21:33:37'),
(57, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '4f04d400f0f12ff4aac53c6aba22b248df6d554c61be7bd1be641efef4dcd8c2', '[\"*\"]', NULL, NULL, '2024-06-17 21:45:14', '2024-06-17 21:45:14'),
(58, 'App\\Models\\API\\tblotp', 42, 'otplogin', 'd9a3d12bea093e136c1078a72b1735e7810bed735de207aa6922aeb90cbcb742', '[\"*\"]', NULL, NULL, '2024-06-17 21:45:29', '2024-06-17 21:45:29'),
(59, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '495aedfbae1283a58f73cb87cb05ff0ee4d53e8fe701a0b907d3e8c94744677c', '[\"*\"]', NULL, NULL, '2024-06-21 13:39:01', '2024-06-21 13:39:01'),
(60, 'App\\Models\\API\\tblotp', 45, 'otplogin', 'e555cde3c23751882e1fa2035dfa3a5eff7c62163d8d18dc5afbddb21a99959a', '[\"*\"]', NULL, NULL, '2024-06-21 13:43:27', '2024-06-21 13:43:27'),
(61, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '0b6e66f09d912bb3d776edfc38ff4c1baef1a42f168c95f2e92c111564d230b6', '[\"*\"]', NULL, NULL, '2024-06-23 08:54:40', '2024-06-23 08:54:40'),
(62, 'App\\Models\\API\\tblvoter', 6, 'register', 'ff78657b17a619af4f161e1dfbbe3232d2ef726bffcf6a98c422aac635600acd', '[\"*\"]', NULL, NULL, '2024-06-23 09:35:16', '2024-06-23 09:35:16'),
(63, 'App\\Models\\API\\tblvoter', 7, 'register', '60f9e5c604277e28fc0796dd7ef4924f2ef9cc09ae22906e6c47e7affab922d8', '[\"*\"]', NULL, NULL, '2024-06-23 09:51:39', '2024-06-23 09:51:39'),
(64, 'App\\Models\\API\\tblvoter', 8, 'register', 'cd9455666783d4c50771043f5644afcfa87f4eedeeb57f2d3fadb7fe6df5560d', '[\"*\"]', NULL, NULL, '2024-06-23 09:59:17', '2024-06-23 09:59:17'),
(65, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'fecabb6914c4c06826d7ac89d723055d1558901f56231fa0237045fad84e2e91', '[\"*\"]', NULL, NULL, '2024-06-23 10:03:12', '2024-06-23 10:03:12'),
(66, 'App\\Models\\API\\tblotp', 50, 'otplogin', 'cc650ef926078f86998c834b461e103bf3c8a2c17cbbcc7e7e874dbf442ae0c6', '[\"*\"]', NULL, NULL, '2024-06-23 10:04:11', '2024-06-23 10:04:11'),
(67, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'a799173c5453dde0d6540ef18e33eb41898983b5d92f76bfeabd339274638116', '[\"*\"]', NULL, NULL, '2024-06-23 15:18:21', '2024-06-23 15:18:21'),
(68, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'cb1c9d05483f002fd8586477a09e24d611bb1a0e741179f2a6d238bf2634f0c0', '[\"*\"]', NULL, NULL, '2024-06-23 15:32:27', '2024-06-23 15:32:27'),
(69, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'f27a27172c0206e6cb20db76bb4dfd8266687ac62ae75b63b2e1350ca9c26ef2', '[\"*\"]', NULL, NULL, '2024-06-23 15:55:13', '2024-06-23 15:55:13'),
(70, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '3efd0165676a9b4a508d982f71691c2bbdeb2c724f12c14ced52027a1dff7ed4', '[\"*\"]', NULL, NULL, '2024-06-23 23:01:53', '2024-06-23 23:01:53'),
(71, 'App\\Models\\API\\tblotp', 54, 'otplogin', '29dc3beb3c9bc68bdde066c5c5aa070ed2406cf5b0f3466fe881507e8871e0f6', '[\"*\"]', NULL, NULL, '2024-06-23 23:02:46', '2024-06-23 23:02:46'),
(72, 'App\\Models\\API\\tblcandidate', 7, 'register_candidate', '3ac99d92163ff8885a654579b94857ce3fdc0c853ad91cf43f691b1cf9d0c114', '[\"*\"]', NULL, NULL, '2024-06-23 23:03:41', '2024-06-23 23:03:41'),
(73, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '8984e760b91a2f165be38845440790e0cd221863119a05b02d463a9f3a23d583', '[\"*\"]', NULL, NULL, '2024-06-23 23:12:29', '2024-06-23 23:12:29'),
(74, 'App\\Models\\API\\tblotp', 55, 'otplogin', '656674a30f0387206773e8f15736219ce20fe6d47a8e141cf20e5b2027880aaa', '[\"*\"]', NULL, NULL, '2024-06-23 23:13:09', '2024-06-23 23:13:09'),
(75, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'e21cbef6eabd2983d9c595733f8dd878f79bdea6cadb86acca047fc1d8876d9b', '[\"*\"]', NULL, NULL, '2024-06-23 23:34:34', '2024-06-23 23:34:34'),
(76, 'App\\Models\\API\\tblotp', 56, 'otplogin', 'ba9b6c4eb43e71d5a555314888d2f918f5ac95edf137cd746eb5afef65e9b033', '[\"*\"]', NULL, NULL, '2024-06-23 23:34:58', '2024-06-23 23:34:58'),
(77, 'App\\Models\\API\\tblcandidate', 8, 'register_candidate', 'd85eca6ea372411cbea9ad491b336641e00d18d24b84bec0db94e591fa6d7613', '[\"*\"]', NULL, NULL, '2024-06-23 23:35:27', '2024-06-23 23:35:27'),
(78, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '2f63ef68b2cbb92c10cf616d114dbaefddb64f3ed219511346bc32f245b87779', '[\"*\"]', NULL, NULL, '2024-06-23 23:39:33', '2024-06-23 23:39:33'),
(79, 'App\\Models\\API\\tblotp', 57, 'otplogin', '19d07da53a96563e3dbb105eab82ff19202822d897c1c29c52bb93e9859e9c73', '[\"*\"]', NULL, NULL, '2024-06-23 23:39:56', '2024-06-23 23:39:56'),
(80, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'b2dc3b77c174486b22c1bada5a252190bf75ddf238d83bd6071005c268e27a8b', '[\"*\"]', NULL, NULL, '2024-07-06 20:36:06', '2024-07-06 20:36:06'),
(81, 'App\\Models\\API\\tblvoter', 4, 'resend', '01dfee5e20161aad05d3e92b0aadefaec65c92ded3d97094bad7b13d2e954d01', '[\"*\"]', NULL, NULL, '2024-07-06 20:39:31', '2024-07-06 20:39:31'),
(82, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '332719d12173bd5ba717c5da92fe0c33d1b59aab41eeb581818b34b94f024236', '[\"*\"]', NULL, NULL, '2024-07-06 20:39:59', '2024-07-06 20:39:59'),
(83, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'd82064e059bcda3f85035aa36274c9aa0c8494ced6c243aa5b4821e7584e3efb', '[\"*\"]', NULL, NULL, '2024-07-06 20:41:43', '2024-07-06 20:41:43'),
(84, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'e44ff65df9b2383921fa3c70f02eb0730047e217a16b6d04cde1ef97024d1d4d', '[\"*\"]', NULL, NULL, '2024-07-06 21:13:49', '2024-07-06 21:13:49'),
(85, 'App\\Models\\API\\tblvoter', 4, 'resend', '74a8861754ed0d9b894a4952512fd49709f4681c6b25f1080a98c263e4b97b66', '[\"*\"]', NULL, NULL, '2024-07-06 21:14:05', '2024-07-06 21:14:05'),
(86, 'App\\Models\\API\\tblvoter', 4, 'resend', '79b7a203ebefeda8cc593d86b2d1025c04f26825c5c0feefbfa65cb7b3c2cf74', '[\"*\"]', NULL, NULL, '2024-07-06 21:18:16', '2024-07-06 21:18:16'),
(87, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '73ad283725ee7d5cbbbbade69d5c2e33e02b15f1c8b541da6117d96f69f0a6c6', '[\"*\"]', NULL, NULL, '2024-07-06 21:26:03', '2024-07-06 21:26:03'),
(88, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'ee9d70a5a6c54ca43020f189dad50e7fc0501d84706b4af957e99458a18e27e6', '[\"*\"]', NULL, NULL, '2024-07-06 21:31:44', '2024-07-06 21:31:44'),
(89, 'App\\Models\\API\\tblvoter', 4, 'resend', '9cf5064f781de3bfa16e16521588a055571510f1596c233d8ac8e8cc57f306fc', '[\"*\"]', NULL, NULL, '2024-07-06 21:32:23', '2024-07-06 21:32:23'),
(90, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '41b24cb8e1bbc904a449e0c3ef2f06a8e7f5030764dfd1cec280f5360c740ba8', '[\"*\"]', NULL, NULL, '2024-07-06 21:53:43', '2024-07-06 21:53:43'),
(91, 'App\\Models\\API\\tblotp', 68, 'otplogin', 'd9b39d03565b3d7242022225b4a614ba0e64736cba38689c903653417451a2d9', '[\"*\"]', NULL, NULL, '2024-07-06 21:54:01', '2024-07-06 21:54:01'),
(92, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '94a05bc02e9b72b68db2a120afd2b7a8a750e2dfa8ea3e067ac3dd655180732a', '[\"*\"]', NULL, NULL, '2024-07-08 12:09:54', '2024-07-08 12:09:54'),
(93, 'App\\Models\\API\\tblotp', 69, 'otplogin', '4d502976d9be4bb6887aa8bdc48dbf46d7b68896d9e1187a33f6fc523f35b214', '[\"*\"]', NULL, NULL, '2024-07-08 12:10:12', '2024-07-08 12:10:12'),
(94, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '3d2e47d91c7fbddadf04ffba64782f23241ba4993d22232231ba06518cc8a78b', '[\"*\"]', NULL, NULL, '2024-07-08 12:28:57', '2024-07-08 12:28:57'),
(95, 'App\\Models\\API\\tblvoter', 4, 'resend', '9a7795f270bc85492dcd8f697a799126a3d772285c4d46933dba8d757005cdc7', '[\"*\"]', NULL, NULL, '2024-07-08 12:34:25', '2024-07-08 12:34:25'),
(96, 'App\\Models\\API\\tblvoter', 4, 'resend', 'c3499604f2fd84e6963f31803f651a8c8c5ffbf9db3876beae7bc0564ccd251f', '[\"*\"]', NULL, NULL, '2024-07-08 12:35:16', '2024-07-08 12:35:16'),
(97, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'aa7fda18f4a7a94ef0956d6b05be78e0e3dfe731084c9e1bc882100934c5357f', '[\"*\"]', NULL, NULL, '2024-07-08 19:06:56', '2024-07-08 19:06:56'),
(98, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '0dfde916ec9baae72c61c3f7f0ab399584799f25f1430db0433fd2816b879579', '[\"*\"]', NULL, NULL, '2024-07-08 19:26:14', '2024-07-08 19:26:14'),
(99, 'App\\Models\\API\\tblotp', 74, 'otplogin', '3afe46a0e5527d348ce8c2550fbc226d9c1a468c11ae3463916b04c0510aeea4', '[\"*\"]', NULL, NULL, '2024-07-08 19:26:39', '2024-07-08 19:26:39'),
(100, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '90fb78246512282c8ed1a96e6890a46c4bb3f15dcb85103b529b36aac5876dce', '[\"*\"]', NULL, NULL, '2024-07-10 12:34:04', '2024-07-10 12:34:04'),
(101, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '22e31e13df8ebd12cb34a08a6ead1cf6580bffa4dfb9b7f599b3fac58bbfe55c', '[\"*\"]', NULL, NULL, '2024-07-10 12:34:06', '2024-07-10 12:34:06'),
(102, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '778b34d3ae3d40826213de4725ad63e66e5ceb2143233cf45254534c35632e2e', '[\"*\"]', NULL, NULL, '2024-07-10 12:34:42', '2024-07-10 12:34:42'),
(103, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '8594d81a737cb225d729dcf296110995a88030fd964389074f1089edf7879139', '[\"*\"]', NULL, NULL, '2024-07-10 15:34:35', '2024-07-10 15:34:35'),
(104, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', 'ca4ee3ba182a6f335f419b66814cdf91fc94bb9a6d4f2f64c0fcc70870d0dc92', '[\"*\"]', NULL, NULL, '2024-07-10 17:16:06', '2024-07-10 17:16:06'),
(105, 'App\\Models\\API\\tblotp', 79, 'otplogin', 'd374be95c2661ee397048182ddf6676160948a737686b5ed1cb4602a815eab92', '[\"*\"]', NULL, NULL, '2024-07-10 17:17:08', '2024-07-10 17:17:08'),
(106, 'App\\Models\\API\\tblvoter', 4, 'Auth_login', '57ccdbcd21a8baea4b7e0152c24122413b7f91c792310a6ee381edd5dc8d6a95', '[\"*\"]', NULL, NULL, '2024-07-10 22:00:31', '2024-07-10 22:00:31'),
(107, 'App\\Models\\API\\tblotp', 80, 'otplogin', 'fb8f596c70a52307740bfb29d1eb74e56e873d0b00c9dc3f03111d44d54d25a3', '[\"*\"]', NULL, NULL, '2024-07-10 22:00:48', '2024-07-10 22:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2hxFyGFegAsHrvgiE0yijJ1V9iB3cxweTnbraETU', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaktReE1nNkx6QVZmcnN4SVdibXdSYVlpYkdRMFVwVndUYmFLNG1JMyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720636651),
('43Vj4Fxokkzs9EG3BbUGiY8KO6uk3mIEZMb8uWUh', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVW9MRVZjQWRNOGMzc3c2czdSME5xNmp0d040ZHpMc3V5MndIVXVkNyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720635438),
('4tljiU2I7mtufvD3E78sJ51ZcPeg43dJ5LRQkKsp', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoick0zZHBZU2o5QWFNR2NpSUtyU0tkbjNuZjlLMHQzbTVJemdpYk95SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720470401),
('7n2ODkaUKnHIJ6opW825O346FFxtF22yqylqh7Rh', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1RleE52aWpWZEdKTVREU1c0dms0U0dNVlNCbWhCSUhIazIxSm1ucyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720444214),
('8g3DzsIb7t5jsP5giL5jjFxdSAmxki9ddIn1zExN', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNkV5OHhSMVRieVNwZ1RTNnFZbjUyUXltTzRPTTY5anAzUU5xNlZ5cCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720305788),
('9pgu6zr4ct3qNl5g4BPjkjRt0zU6otZvMqeWUxW4', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidFZYWExSU0tuNFlYT2puZTJJQTRFMmlSS05FMVJsUTdNME5HREY0SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720444902),
('AQ0ggUucGZvkxXOmcpQcxdMCbmCN5nTD8XJM8PnA', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWHlGekYxSHMxYzNpRENvdng1V2FJSjRCRzZ5WlB5TFREZDBvY0llUiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1720525715),
('Bwmk80XUkeIsXGn0hevdXUKw0UCAmK0wKS94zc32', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmt4M0lvclZkaUNlaTRQMEpnSEJpRVFlbWpDdTN6a2lsRnBMR3dMTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719189446),
('cuU5PlGrwImDHnoyyEs4bDqoNvPYsc9QZdBrYU6Z', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYXNLSWZvNEc2NGlBYUdOamhEVzZNMW9RZzFzZzltMzY2TDNEa3hpZSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720636008),
('Dfcs0QOLC2aBjoIJmhqxSvrBUWkib5iS9SoZNrbV', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicTRKam1rYVF3OTNHWERJM0x2YjRqYjY0M3NrOGFNQ0RzZldIY0tpcSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719187701),
('djRBGhpfn4FfpCy0TfI4SmzfhA8Lu6VzDOD9fsZc', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUG50aE14STJXajJXRWdqVkloSnI1OE83NkxnWldVcXNxWU0zRThxVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720306521),
('FO8yPrwk8NOkvY10GOj9c31yBXl5RzOUVe2XGHaq', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1d2YTdyYXBtSUJOd3FkczhxQ2p1OThlUVBYN2VnRTB0ZlkyQ0dHaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719189520),
('G6GvX1SlC7dxw4wopVoLUT4gt6p3cv2i0gei5i9Y', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSm02RTVOanRoUHp2ZUhtSG1rR3B1YlVIYWZzdmkwQmkweWVVQ1RuaCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcHJvZmlsZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1720629312),
('GEbRL6DMVX2olmoAiHb9EXKwb8Csu0InCS5K8K5u', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2FXMEtmMEtKVmlycG00Z294SUVwWEswOFNPTHZRSnJranpjVHM5NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720636651),
('hDdKiKQk2uka34mFYvNVy0svwMGJenBgAWmePk3V', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYVpvT3VsUXhjWnlQZE0yRW9ZSVhYaENlanBpV0IzQWJxcUt1OVdqaSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719189445),
('hlHZ7pfDUh5w64fYkFYTZuBa2W1dYi9VGt3GTzwq', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMGxxSXVmS00wbFB4TlFyU0pveE5MSHNxdWF1SW1CM2FnaGdYWTFNQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720306520),
('hXYiDtfFL0xgjCkE0JG59H0q2gNxfQCEsgg4jEL6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic3M5SkVjbTJKOVF6dnVXUWRPUlc3T0Q3bVVEQ0trakVSVkQ2eHpqWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719189874),
('It8UcjiwCNOm1taUSLZ6CCR1Y1fOnkdMzR4BxpAf', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYkNYQmZwMnpXUVRkdUhVNWxNMFJCekQwSTdNQXFPczAzQ2k5YzN6ViI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720306508),
('iTl4nTozPucfzn6iHC90JLXSBtuPRiEHUev4o7lQ', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOU42V1ljeGdsWUpUUlQxbUtuUVNvekZRN3pCOFhKNmlqeGFRdHVncCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720652451),
('iYopbKii9dxmmftf84ym04uxfFHjuWf7ARy3AeTP', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid1MwNG5aSnhyVk9lMmJrbXprbnRvaGRuSFRXZnA1R0FvUjM2cVFZQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719187814),
('J45FCjX6y6PttyaJlVLEM9OAFPTObcSWPGycx9zD', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidFRtR3d3V1BHVG9meWdxUTFwNzYwbWpOb2VoaFh5d3djdUcwYkhsQyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720305784),
('JhsiOF3CDne2TVRi1klj1cT7aDQNp2OC4rDCng0n', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiczlGMjlWVHRrUjB4TkxocTQwVkZuR2EwZG1Yam03cXk1bXpQVk1DRSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719187368),
('KaP7zEBbOwdskQX7xtNj19L2pLFOvtHx87cB3wWL', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOXd5YUc2T0JHdzJyOXRXWktqaWQzS05VVENqR0h6YXVqNHZjSUs2dyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720652450),
('kdZScPiEMIECepDz8ehHJtX8u4xyyfQJcnbcXgZn', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibDhqczNRZXVIR3RWejJwN0tUR1pmc2puOGcxU3RmZnAxYWxHM3k5RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720635444),
('L17DXvJp4Ad1RMVcBRfR690Cu5t0lSq7qlGzydq3', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidXRGcjdPTGZMamtITHhYOWRwN3M2RWQ0S0JDeHl2YUNhMXpwUXQ2UyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720635863),
('LKlM3UYTQlk8v7RDi0bqy9vxQhLXZERkVSU72WwY', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieTVOek81V21ENmlYRG96VnZmTkdlQlI5SzhHTUxaVW5acXFEVzdNZSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720635758),
('mkdxj7oqhgi32FrPHa8AT231sVc71eL6OD4zUm7Z', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0EwMGZlVlFWQ3luSDhtcGtSWjFFWTAwMkV5cURySmhQQlU1dlcxbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719187815),
('n4YQb8MZBLvAJyksThoYmQnBxJ2bLnzyaIOPHz8q', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFZPcUZwVklOYzRnUVFIN096MWllY3M0TkhEa3FNUGdQSjdzV3VaQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720635759),
('n6ybdbYrG3Lmn0RaOAoYWT0e4dMAPe8ubZDMpXa4', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaUhpNDhPTEZQZnA5ckc3cG1mZ0FKQTZoS3BidlAxQWdjUmJNNnJYSCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719189519),
('nDR1yGDH2I1I3H9R1cWhGuF5v8fUmFssiYISq9kf', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZGNPbGhEc0NDdUFoWGwxam9tMnlkclFSbTQyREtmYkdwSnZ3V0k5WiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719189171),
('NhsJLRfhKgL7bmp0T1NAfljTfLROokidlgAxy9Vk', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVDlSUDNQQ1NaOWtEMno2eUR1dFJTajBhVnJHelpoQThsU2FZYnNKeSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720306465),
('p9KcgxcZeLpbSc9nARJxfwH7uLVadE47r0Fk3Cle', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaERLQWxUdzV5bG9zbjVJZUZ0SUY2SDRGY1hSUG56UFlRb1FIcllpQyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720444900),
('PuFJpzJqeaf4HdY7EQtwUFYOs5dlxAaviVfX6BNn', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYmJuRjAwd1lTMklvMXRIVEoyRGtLUHdxMlFUa21veHNmS2FmbmJGVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719187701),
('PupitWdsW5tJu8QlmXwOer3vAw6G0AWKPPcTBjfX', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicXhXSlM5cVl0WUZ1a2VrbjRKZDMzcFhIRHNKcThMZjF5bE9oZGdiRSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720653032),
('pYVZ5FBeKdR0weY5G5bNLIunvhRdZhDSmTGvmtaK', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY05tdlVlTlZUd2NBR1ppUDNtcEFjNjlmY3I5VHp5WTMzZlZCY0FVNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719187369),
('r9h78hv8BaPeVHA9sQxdUm46dJtWqkF1XD4SSnqH', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMTUwZ1BDWWdyT3VWSkw4RUhtTHNLcmhRN3BMenBUQlBSZ2xTaWtXdCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720636109),
('rj6IlFSbtw4xyIgHYGSRNaa6QpOIwkligrmykjg0', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieTVZbWNzOWFzSGV2dnROUGEwRWUxT3ZJcVk4WjZFVFNZelozU3k2MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720653032),
('sXKNug2bbOoZdlCiNxehHZw6vfp6WrzJPBeVfWT5', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVdBOXluVHFlZVVOcU1xZ0V6eGx0SkEzeVh4RmU2cUkxOHlvOHpPbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720306443),
('VbQWgUAyUezAl8cG9o1c5vEB4sglDyZvbibMeHqE', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ3pUYXlONURaVmNJNkVzZDk3ZTlWdnNVbjEyRktWVVRWOFZLS0wxNCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720444214),
('VEueSiQ5b0pKRKKfbafxsKgZiIr4l8ugp77V0Llb', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRFpVU1hBUmtGaWI1ak9OYWd4M1MzbmhWQkNBZ2toVzBGMmFvaUtSRiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720470400),
('VQqr1bD5m2xJ4jlgcHfg65SL5nXbtozXoZcHvp3D', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQnNCTGtUSFVXMVRrdUdOWmdzdWFVTHlKR0RDRHFwSHh0ZU5VVU9SNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719189171),
('Y3d3m1Cct0ZzWSUeozzp37Rql2UnC7Q1VnuUR9bd', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaktwS1pRUlJZY0l2dVNmenhBNHJzMThsTVR6enhXbWlDRVQwQWxxbSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cDovLzEwLjAuMi4yOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720306442),
('zValtri44nsDZtnoYXPUg84JzMLtD47gMupRe90K', NULL, '127.0.0.1', 'Dart/3.3 (dart:io)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienlsNmp6U1dDNmNhV1JMWkhaYXRYT3c2c3I1S0lRMFR5ZmVqajkyayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMC4wLjIuMjo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720635863);

-- --------------------------------------------------------

--
-- Table structure for table `tblcandidates`
--

CREATE TABLE `tblcandidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voterID` varchar(255) NOT NULL,
  `candidateID` varchar(255) NOT NULL,
  `candidateName` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `office` varchar(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `election_year` varchar(22) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblcandidates`
--

INSERT INTO `tblcandidates` (`id`, `voterID`, `candidateID`, `candidateName`, `count`, `office`, `party`, `status`, `election_year`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'V50417', 'C77709', 'Paul Biya', 2, 'Governor', 'Cameroon People\'s Democratic Movement(CPDM)', '1', '2024', NULL, '2024-05-12 12:07:06', '2024-06-23 23:40:36'),
(4, 'V52944', 'C43978', 'Eze Iwobi', 0, 'Governor', 'Social Democratic Front(SDF)', '1', '2024', NULL, '2024-05-12 12:08:41', '2024-05-12 12:08:41'),
(8, 'v60315', 'C76489', 'Ngomesiegh Boris Mbiziwueh', 0, 'Governor', 'Union of Socialist Movements (USM)', '1', '2024', NULL, '2024-06-23 23:35:24', '2024-06-23 23:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblelection_types`
--

CREATE TABLE `tblelection_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblotps`
--

CREATE TABLE `tblotps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `voterID` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblotps`
--

INSERT INTO `tblotps` (`id`, `code`, `voterID`, `remember_token`, `created_at`, `updated_at`) VALUES
(81, '1234', 'v60315', NULL, NULL, NULL),
(82, '1267', 'v60315', NULL, NULL, NULL),
(83, '0999', 'v60315', NULL, NULL, NULL),
(84, '7011', 'v60315', NULL, NULL, NULL),
(85, '7654', 'v60315', NULL, NULL, NULL),
(86, '0011', 'v60315', NULL, NULL, NULL),
(87, '0000', 'v60315', NULL, NULL, NULL),
(88, '1111', 'v60315', NULL, NULL, NULL),
(89, '8909', 'v60315', NULL, NULL, NULL),
(90, '1907', 'v60315', '', NULL, NULL),
(91, '1982', 'v60315', NULL, NULL, NULL),
(92, '1009', 'v60315', NULL, NULL, NULL),
(93, '1243', 'v60315', NULL, NULL, NULL),
(94, '8912', 'v60315', NULL, NULL, NULL),
(95, '9009', 'v60315', NULL, NULL, NULL),
(96, '6755', 'v60315', NULL, NULL, NULL),
(97, '9013', 'v60315', NULL, NULL, NULL),
(98, '8023', 'v60315', NULL, NULL, NULL),
(99, '9012', 'v60315', NULL, NULL, NULL),
(100, '9870', 'v60315', NULL, NULL, NULL),
(101, '1908', 'v60315', NULL, NULL, NULL),
(102, '9076', 'v60315', NULL, NULL, NULL),
(103, '6443', 'v60315', NULL, NULL, NULL),
(104, '9101', 'v60315', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpartys`
--

CREATE TABLE `tblpartys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblpartys`
--

INSERT INTO `tblpartys` (`id`, `name`, `logo`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Cameroon People\'s Democratic Movement(CPDM)', 'uploadImage/Logo/Cameroon_People\'s_Democratic_Movement.png', NULL, NULL, NULL),
(3, 'Social Democratic Front(SDF)', 'uploadImage/logo/Cameroon_Social_Democratic_Front.png', NULL, NULL, NULL),
(4, 'Cameroon Renaissance Movement(MRC)', 'uploadImage/Logo/crm.png', NULL, NULL, NULL),
(5, 'Cameroon people\'s party', 'uploadImage/Logo/camerounpeople_party.jpg', NULL, NULL, NULL),
(6, 'Cameroonian Party for National Reconciliation(CPRN)', 'uploadImage/Logo/cameroon_party_national_reconciliation.png', NULL, NULL, NULL),
(7, 'Cameroon Democratic Union (CDU)', 'uploadImage/Logo/Cameroon Democratic Union.png', NULL, NULL, NULL),
(8, 'Cameroon National Salvation Front (CNSF)', 'uploadImage/Logo/Cameroon National Salvation Front (CNSF).png', NULL, NULL, NULL),
(10, 'National Union for Democracy and Progress(UNDP)', 'uploadImage/Logo/NUDP.png', NULL, NULL, NULL),
(11, 'Movement for the Defence of the Republic (MDR)\r\n\r\n', 'uploadImage/Logo/Movement for the Defence of the Republic (MDR).png', '', NULL, NULL),
(13, 'Union of Socialist Movements (USM)', 'uploadImage/Logo/Union of Socialist Movements (USM).png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblvoters`
--

CREATE TABLE `tblvoters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voterID` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `maritalstatus` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `educational_qualification` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblvoters`
--

INSERT INTO `tblvoters` (`id`, `voterID`, `fullname`, `maritalstatus`, `sex`, `DOB`, `phone`, `email`, `address`, `lga`, `state`, `occupation`, `status`, `educational_qualification`, `email_verified_at`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'V50417', 'Paul Biya', 'Single', 'Male', '23/09/1998', '08067361020', 'Sirp@yahoo.com', '45 Market Rd', 'Ik', 'North', 'Sailor', '1', 'Msc', NULL, 'uploadImage/Profile/Paul_Biya.png', NULL, '2024-05-12 11:56:30', '2024-05-12 11:56:30'),
(2, 'V71097', 'Bola Tinubu', 'Single', 'Male', '23/09/1978', '08067361022', 'Jagaban@yahoo.com', '45 Market Rd', 'Ik', 'North', 'Politician', '1', 'Msc', NULL, 'uploadImage/Profile/tinubu.jpg', NULL, '2024-05-12 11:58:12', '2024-05-12 11:58:12'),
(3, 'V52944', 'Eze Iwobi', 'Single', 'Female', '23/09/1998', '08067361044', '08067361023', '45 Market Rd', 'Ik', 'North', 'Sailor', '1', 'Msc', NULL, 'uploadImage/Profile/iwobi.jpg', NULL, '2024-05-12 11:59:05', '2024-05-12 11:59:05'),
(4, 'V60315', 'Ngomesiegh Boris Mbiziwueh', 'Single', 'Male', '23/09/1978', '+237676875171', 'ngomesieghboris@gmail.com', '45 Market Rd', 'Ik', 'North', 'software developer', '1', 'Msc', NULL, 'uploadImage/Profile/20240624001811.png', NULL, '2024-05-12 12:00:19', '2024-06-23 23:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblvotes`
--

CREATE TABLE `tblvotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voterID` varchar(255) NOT NULL,
  `candidateID` varchar(255) NOT NULL,
  `vote_time` varchar(255) NOT NULL,
  `election_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblvotes`
--

INSERT INTO `tblvotes` (`id`, `voterID`, `candidateID`, `vote_time`, `election_type`, `created_at`, `updated_at`) VALUES
(9, 'v60315', 'C77709', '2024-06-24 00:40:36', 'Governor', '2024-06-23 23:40:36', '2024-06-23 23:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lastaccess` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `lastaccess`, `status`, `email_verified_at`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'walterjnr1', '$2y$12$gVqOqYyqnXpJ6hmIZbJCP.5s9Zy4OP7b9QLyAExAqYeDI5brp8FWO', 'Ngomesiegh Boris', 'newleastpaysolution@gmail.com', '9/09/2000', '1', NULL, 'uploadImage/Profile/202406240042a1.jpg', NULL, '2024-06-03 08:23:37', '2024-07-10 15:35:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tblcandidates`
--
ALTER TABLE `tblcandidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tblcandidates_voterid_unique` (`voterID`),
  ADD UNIQUE KEY `tblcandidates_candidateid_unique` (`candidateID`);

--
-- Indexes for table `tblelection_types`
--
ALTER TABLE `tblelection_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblotps`
--
ALTER TABLE `tblotps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tblotps_code_unique` (`code`);

--
-- Indexes for table `tblpartys`
--
ALTER TABLE `tblpartys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvoters`
--
ALTER TABLE `tblvoters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tblvoters_voterid_unique` (`voterID`),
  ADD UNIQUE KEY `tblvoters_phone_unique` (`phone`),
  ADD UNIQUE KEY `tblvoters_email_unique` (`email`);

--
-- Indexes for table `tblvotes`
--
ALTER TABLE `tblvotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tblcandidates`
--
ALTER TABLE `tblcandidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblelection_types`
--
ALTER TABLE `tblelection_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblotps`
--
ALTER TABLE `tblotps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tblpartys`
--
ALTER TABLE `tblpartys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblvoters`
--
ALTER TABLE `tblvoters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblvotes`
--
ALTER TABLE `tblvotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
