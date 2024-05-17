-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 01:00 PM
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
(12, '2024_04_30_110829_add_photo_and_lastaccess', 1);

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
(8, 'App\\Models\\API\\tblcandidate', 4, 'register_candidate', '7e13590b0b0510fa0040667da94950dfbc9f7723fd501e97d165c9147f6eab15', '[\"*\"]', NULL, NULL, '2024-05-12 12:08:45', '2024-05-12 12:08:45');

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

-- --------------------------------------------------------

--
-- Table structure for table `tblcandidates`
--

CREATE TABLE `tblcandidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voterID` varchar(255) NOT NULL,
  `candidateID` varchar(255) NOT NULL,
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

INSERT INTO `tblcandidates` (`id`, `voterID`, `candidateID`, `count`, `office`, `party`, `status`, `election_year`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'V60315', 'C27960', 87, 'President', 'Accord party (A)', '1', '2024', NULL, '2024-05-12 12:06:18', '2024-05-12 12:06:18'),
(2, 'V50417', 'C77709', 908, 'President', 'Labour Party (LP)', '1', '2024', NULL, '2024-05-12 12:07:06', '2024-05-12 12:07:06'),
(3, 'V71097', 'C84487', 111, 'President', 'Action People Congress (APC)', '1', '2024', NULL, '2024-05-12 12:07:45', '2024-05-12 12:07:45'),
(4, 'V52944', 'C43978', 788, 'President', 'People Democratic Party (PDP)', '1', '2024', NULL, '2024-05-12 12:08:41', '2024-05-12 12:08:41');

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
(1, '51061', 'V50417', NULL, '2024-05-12 11:56:37', '2024-05-12 11:56:37'),
(2, '16455', 'V71097', NULL, '2024-05-12 11:58:18', '2024-05-12 11:58:18'),
(3, '19550', 'V52944', NULL, '2024-05-12 11:59:10', '2024-05-12 11:59:10'),
(4, '67244', 'V43817', NULL, '2024-05-12 12:00:40', '2024-05-12 12:00:40');

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
(1, 'Accord party (A)', 'uploadImage/Logo/A.jpg', NULL, NULL, NULL),
(2, 'Action People Congress (APC)', 'uploadImage/Logo/APC.jpg', NULL, NULL, NULL),
(3, 'People Democratic Party (PDP)', 'uploadImage/logo/pdp.jpg', NULL, NULL, NULL),
(4, 'Labour Party (LP)', 'uploadImage/Logo/lp.jpg', NULL, NULL, NULL);

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
(1, 'V50417', 'Peter Obi', 'Single', 'Male', '23/09/1998', '08067361020', 'Sirp@yahoo.com', '45 Market Rd', 'Ik', 'North', 'Sailor', '1', 'Msc', NULL, 'uploadImage/Profile/peter-obi.jpg', NULL, '2024-05-12 11:56:30', '2024-05-12 11:56:30'),
(2, 'V71097', 'Bola Tinubu', 'Single', 'Male', '23/09/1978', '08067361022', 'Jagaban@yahoo.com', '45 Market Rd', 'Ik', 'North', 'Politician', '1', 'Msc', NULL, 'uploadImage/Profile/tinubu.jpg', NULL, '2024-05-12 11:58:12', '2024-05-12 11:58:12'),
(3, 'V52944', 'Eze Iwobi', 'Single', 'Female', '23/09/1998', '08067361023', 'Newleastpaysolution@yahoo.com', '45 Market Rd', 'Ik', 'North', 'Sailor', '1', 'Msc', NULL, 'uploadImage/Profile/iwobi.jpg', NULL, '2024-05-12 11:59:05', '2024-05-12 11:59:05'),
(4, 'V60315', 'Ndueso Walter', 'Single', 'Male', '23/09/1978', '08067361002', 'New@yahoo.com', '45 Market Rd', 'Ik', 'North', 'Lawyer', '1', 'Msc', NULL, 'uploadImage/Profile/walter.jpg', NULL, '2024-05-12 12:00:19', '2024-05-12 12:00:19');

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
-- Indexes for dumped tables
--

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcandidates`
--
ALTER TABLE `tblcandidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblelection_types`
--
ALTER TABLE `tblelection_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblotps`
--
ALTER TABLE `tblotps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpartys`
--
ALTER TABLE `tblpartys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblvoters`
--
ALTER TABLE `tblvoters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblvotes`
--
ALTER TABLE `tblvotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
