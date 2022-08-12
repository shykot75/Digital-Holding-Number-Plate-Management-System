-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 05:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_dhnpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_21_160620_create_sessions_table', 1),
(7, '2022_05_24_135530_create_taxpayers_table', 2),
(8, '2022_05_26_145421_create_wards_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@lokkhipur.com', '$2y$10$yuz4oKRFiMnja9z7qnRvfuHn3XJ/1a0Xh8tp.ng9/PidW8uJzpxpK', '2022-05-30 08:55:04'),
('shykot1198@gmail.com', '$2y$10$33XQvsnL6QRp59keD61mIOvR.q4ArNog7K0/yobrt0wuqs83LHzH6', '2022-06-02 07:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6KjAlae5R9VHDbSQSTc8WgVy2576il8ZGpE0z0Cn', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicjFLUVRwamw2QXJPWm02NFZlRUJLamt4ajJIcjJGR2QwZWRGMzVHYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbC9ESE5QTVNfRmluYWwvcHVibGljL2xvZ2luIjt9fQ==', 1654250636);

-- --------------------------------------------------------

--
-- Table structure for table `taxpayers`
--

CREATE TABLE `taxpayers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land_quantity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_taxable_part` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `men_number` int(11) NOT NULL,
  `women_number` int(11) NOT NULL,
  `other_number` int(11) DEFAULT NULL,
  `child_number` int(11) DEFAULT NULL,
  `disabled_number` int(11) DEFAULT NULL,
  `employee_number` int(11) DEFAULT NULL,
  `unemployee_number` int(11) DEFAULT NULL,
  `govt_benefi_number` int(11) DEFAULT NULL,
  `hw_number` int(11) DEFAULT NULL,
  `water_connection_number` tinyint(4) DEFAULT NULL,
  `connection_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribers_number` int(11) DEFAULT NULL,
  `sanitation_faicilities` tinyint(4) DEFAULT NULL,
  `tubewell_facilities` tinyint(4) DEFAULT NULL,
  `fiscal_period` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `effective_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` bigint(20) NOT NULL,
  `ward_no` int(11) NOT NULL,
  `holding_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimated_price` bigint(20) DEFAULT NULL,
  `plate_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holding_plate_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxpayers`
--

INSERT INTO `taxpayers` (`id`, `house_name`, `house_owner`, `father_name`, `mother_name`, `profession`, `road_name`, `present_address`, `land_quantity`, `non_taxable_part`, `men_number`, `women_number`, `other_number`, `child_number`, `disabled_number`, `employee_number`, `unemployee_number`, `govt_benefi_number`, `hw_number`, `water_connection_number`, `connection_size`, `subscribers_number`, `sanitation_faicilities`, `tubewell_facilities`, `fiscal_period`, `effective_date`, `image`, `mobile_number`, `nid`, `ward_no`, `holding_no`, `category`, `estimated_price`, `plate_no`, `holding_plate_status`, `created_at`, `updated_at`) VALUES
(1, 'স্বপ্ন নীড়', 'মোঃ বোরহান উদ্দিন', 'মৃতঃ আঃ লতিফ মিয়া', 'মৃতঃ আশরফের নাহার', 'কৃষক', 'মাদ্রাসা রোড', 'লক্ষ্মীপুর', '১৪ শতাংশ', 'নাই', 5, 7, NULL, 2, 2, 2, 2, 2, 2, 1, '1', 4, 1, 1, '2021-2022', '01-07-2021', 'taxpayer-house-images/img.jpg', '01711320569', 19785236541293201, 9, '১৩৩/১', '4', 20000000, '৮০০', 1, '2022-05-24 09:27:38', '2022-06-03 02:33:24'),
(2, 'তালুকদার বাড়ী', 'মোঃ আলি আকবর তালুকদার', 'মৃত আলি আক্কাস তালুকদার', 'মৃত মমতাজ বেগম', 'চাকুরীজীবী', 'বঙ্গবন্ধু সড়ক', NULL, NULL, NULL, 5, 5, NULL, 2, NULL, NULL, 2, 3, 3, 1, '1.00', 8, 1, 1, '2021-2022', '01-07-2021', NULL, '1236547895', 19786795809000011, 12, '৫৬৮/১', '4', 2999999, '৮০০', 0, '2022-05-24 23:42:06', '2022-05-27 03:32:38'),
(4, 'দোলনা', 'মোঃ শামছুল  আবেদীন', 'মোঃ কেরামত  আলী মাষ্টার', 'মৃতঃ বাহুতেনছা', NULL, 'মাদ্রাসা রোড', 'মাদ্রাসা রোড', NULL, '১ তলা', 2, 3, NULL, 1, NULL, 1, NULL, NULL, NULL, 2, '0.80', 1, 1, 0, '2021-2022', '01-07-2021', NULL, '01745236985', 19786795809000024, 8, '১৫৩', '2', NULL, '৫৩৪', 0, '2022-05-26 05:03:28', '2022-06-02 08:25:42'),
(5, 'বেপারি ভিলা', 'জব্বার বেপারি', 'মৃতঃ আলতাফ বেপারি', 'কুলসুম বানু', 'ব্যাবসা', 'আমলাপাড়া', 'লক্ষ্মীপুর', '১৬ শতাংশ', NULL, 12, 13, NULL, 8, NULL, 5, 1, NULL, 6, 1, '2.7', 5, 1, 1, '2021-2022', '01-07-2021', NULL, '01741236985', 50927053, 9, '১৩৩/১', '4', NULL, '৯৮৭', 0, '2022-05-29 11:43:08', '2022-05-29 11:43:08'),
(6, 'খান বাড়ী', 'আঃ ছাত্তার খান', 'মৃত আঃ হাকিম খান', 'মৃত নোয়াব জান বেগম', NULL, 'আমলাপাড়া', NULL, NULL, NULL, 5, 5, 1, 2, 2, 2, 1, NULL, 3, 1, '0.8', 2, 1, 1, '2021-2022', '01-07-2021', NULL, '016521239875', 6463215289, 4, '২১২', '3', NULL, '৭৮৭', 0, '2022-05-30 07:55:29', '2022-05-30 07:59:44'),
(7, 'চৌধুরী ম্যানশন', 'ইমতাজ চৌধুরী', 'আউয়াল চৌধুরী', 'ফাতেমা চৌধুরী', 'ব্যাবসা', 'বৃষ্টিধারা', 'লক্ষ্মীপুর', '৮ তলা', NULL, 5, 5, NULL, 2, 2, 2, 2, NULL, 2, 1, '0.9', 4, 1, 1, '2021-2022', '01-07-2021', NULL, '01911653285', 7485963215, 14, '৯৯', '4', NULL, '৫৬৭', 0, '2022-06-01 11:00:43', '2022-06-01 11:00:43'),
(8, 'ঢালী আম্বার', 'আজিজ ঢালী', 'সুলতান ঢালী', 'জাহানারা ঢালী', NULL, 'বঙ্গবন্ধু সড়ক', 'লক্ষ্মীপুর', NULL, NULL, 4, 3, 0, 1, 1, 2, 1, 1, 1, 1, '.8', 2, 1, 1, '2021-2022', '01-07-2021', NULL, '01236547896', 2536418796, 7, '২৩৩', '4', NULL, '৪৫৬', 0, '2022-06-02 08:22:47', '2022-06-02 08:22:47'),
(9, 'মুক্ত সংঘ', 'প্রান্ত', 'সোহাগ', 'ফাতিহা', NULL, 'পূর্বপাড়া', 'লক্ষ্মীপুর', '২তলা', NULL, 2, 2, 2, NULL, 1, 1, 2, 1, 1, 1, '.5', 1, 1, 1, '2021-2022', '01-07-2021', NULL, '01811245638', 7432651985, 15, '৫১২', '3', NULL, '৩২৩', 1, '2022-06-03 04:01:58', '2022-06-03 04:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Lokkhipur Admin', 'admin@lokkhipur.com', NULL, '$2y$10$SI5ih2aRaxlVl9Vs4yCJOuMf/slpzAPB1RLnVZptwSpGJLFjWsRzq', NULL, NULL, NULL, 'RAbC9RbZFoevXxePZmH1Z9Aky7xEbWyvOBedWmsoW1Wgiit8EUNDlNYwfiPV', NULL, NULL, '2022-05-21 10:13:03', '2022-05-21 10:13:03'),
(2, 'Shykot Hasan', 'shykot1198@gmail.com', NULL, '$2y$10$Lw3GjE2RwN9INqrvwYSoZOHiakNOjZ3VWVjVuXx7px9lYTnQIAQUS', NULL, NULL, NULL, 'lJ8AvzW1EtCg6skLKvLSxvCgI5NFroFoDZWgCj4ZGHaVlhE9pDyb8Pgz0YBX', NULL, NULL, '2022-05-28 08:37:54', '2022-05-28 08:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ward_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_no` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `ward_name`, `ward_no`, `status`, `created_at`, `updated_at`) VALUES
(1, 'লক্ষ্মীপুর পৌরসভা-০১', 1, 1, '2022-05-26 09:31:53', '2022-06-03 04:03:44'),
(2, 'লক্ষ্মীপুর পৌরসভা-০২', 2, 1, '2022-05-26 09:32:44', '2022-06-03 00:40:13'),
(3, 'লক্ষ্মীপুর পৌরসভা-০৩', 3, 1, '2022-05-26 09:36:05', '2022-06-03 00:40:15'),
(4, 'লক্ষ্মীপুর পৌরসভা-০৪', 4, 1, '2022-05-26 09:36:21', '2022-06-03 03:28:08'),
(5, 'লক্ষ্মীপুর পৌরসভা-০৫', 5, 1, '2022-05-26 09:36:34', '2022-05-26 23:32:30'),
(6, 'লক্ষ্মীপুর পৌরসভা-০৬', 6, 1, '2022-05-26 09:36:44', '2022-05-26 23:32:33'),
(7, 'লক্ষ্মীপুর পৌরসভা-০৭', 7, 1, '2022-05-26 09:36:53', '2022-05-26 23:32:35'),
(8, 'লক্ষ্মীপুর পৌরসভা-০৮', 8, 1, '2022-05-26 09:37:18', '2022-06-03 04:03:48'),
(9, 'লক্ষ্মীপুর পৌরসভা-০৯', 9, 1, '2022-05-26 09:37:45', '2022-05-26 23:32:44'),
(10, 'লক্ষ্মীপুর পৌরসভা-১০', 10, 1, '2022-05-26 09:37:56', '2022-05-27 12:30:16'),
(11, 'লক্ষ্মীপুর পৌরসভা-১১', 11, 1, '2022-05-26 09:38:09', '2022-05-26 23:32:50'),
(12, 'লক্ষ্মীপুর পৌরসভা-১২', 12, 1, '2022-05-26 09:38:21', '2022-05-26 23:32:59'),
(13, 'লক্ষ্মীপুর পৌরসভা-১৩', 13, 1, '2022-05-26 09:38:33', '2022-05-26 23:33:02'),
(14, 'লক্ষ্মীপুর পৌরসভা-১৪', 14, 1, '2022-05-26 09:38:43', '2022-05-26 23:33:05'),
(16, 'লক্ষ্মীপুর পৌরসভা-১৫', 15, 1, '2022-05-27 00:14:32', '2022-05-27 00:14:47');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `taxpayers`
--
ALTER TABLE `taxpayers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taxpayers`
--
ALTER TABLE `taxpayers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
