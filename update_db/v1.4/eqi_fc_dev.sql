-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 10:57 PM
-- Server version: 10.4.11-MariaDB
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
-- Database: `eqi_fc_dev`
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
(15, '2021_03_19_033545_create_results_table', 1),
(16, '2021_03_19_033920_create_symptom_history_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `troubles_code` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `phone_number`, `status`, `troubles_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dssff', '3355', 'False', NULL, '2021-03-23 14:43:09', '2021-03-23 14:44:04', '2021-03-23 14:44:04'),
(2, 'sss', '223', 'True', 'D01', '2021-03-23 14:47:45', '2021-03-23 14:47:45', NULL),
(3, 'sss', '223', 'True', 'D01', '2021-03-23 14:52:22', '2021-03-23 14:52:22', NULL),
(4, 'sss', '223', 'True', 'D01', '2021-03-23 14:54:29', '2021-03-23 14:54:29', NULL),
(5, 'sss', '223', 'True', 'D01', '2021-03-23 14:55:13', '2021-03-23 14:55:13', NULL),
(6, 'sss', '223', 'True', 'D01', '2021-03-23 14:55:34', '2021-03-23 14:55:34', NULL),
(7, 'd', '2', 'False', NULL, '2021-03-23 14:56:48', '2021-03-23 14:56:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `symptoms_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `troubles_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `symptoms_code`, `troubles_code`, `created_at`, `updated_at`) VALUES
(10, 'S01', 'D01', '2021-01-30 21:41:33', '2021-01-30 21:41:33'),
(11, 'S02', 'D01', '2021-01-30 21:41:38', '2021-01-30 21:41:38'),
(12, 'S03', 'D01', '2021-01-30 21:41:42', '2021-01-30 21:41:42'),
(13, 'S21', 'D01', '2021-01-30 21:42:00', '2021-01-30 21:42:00'),
(14, 'S22', 'D01', '2021-01-30 21:42:05', '2021-01-30 21:42:05'),
(15, 'S23', 'D01', '2021-01-30 21:42:19', '2021-01-30 21:42:19'),
(16, 'S04', 'D02', '2021-01-30 21:42:39', '2021-01-30 21:42:39'),
(17, 'S05', 'D02', '2021-01-30 21:42:43', '2021-01-30 21:42:43'),
(18, 'S06', 'D03', '2021-01-30 21:43:20', '2021-01-30 21:43:20'),
(19, 'S07', 'D03', '2021-01-30 21:43:25', '2021-01-30 21:43:25'),
(20, 'S08', 'D03', '2021-01-30 21:43:44', '2021-01-30 21:43:44'),
(21, 'S09', 'D03', '2021-01-30 21:43:49', '2021-01-30 21:43:49'),
(24, 'S10', 'D04', '2021-01-30 21:57:36', '2021-01-30 21:57:36'),
(25, 'S11', 'D04', '2021-01-30 21:57:40', '2021-01-30 21:57:40'),
(26, 'S12', 'D04', '2021-01-30 21:57:45', '2021-01-30 21:57:45'),
(27, 'S13', 'D05', '2021-01-30 21:58:07', '2021-01-30 21:58:07'),
(28, 'S14', 'D05', '2021-01-30 21:58:13', '2021-01-30 21:58:13'),
(29, 'S15', 'D05', '2021-01-30 21:58:19', '2021-01-30 21:58:19'),
(30, 'S16', 'D06', '2021-01-30 21:58:52', '2021-01-30 21:58:52'),
(31, 'S17', 'D06', '2021-01-30 21:58:57', '2021-01-30 21:58:57'),
(32, 'S18', 'D06', '2021-01-30 21:59:02', '2021-01-30 21:59:02'),
(33, 'S19', 'D06', '2021-01-30 21:59:06', '2021-01-30 21:59:06'),
(34, 'S20', 'D06', '2021-01-30 21:59:11', '2021-01-30 21:59:11'),
(35, 'S06', 'D07', '2021-01-30 21:59:34', '2021-01-30 21:59:34'),
(36, 'S10', 'D07', '2021-01-30 21:59:39', '2021-01-30 21:59:39'),
(37, 'S17', 'D07', '2021-01-30 21:59:46', '2021-01-30 21:59:46'),
(38, 'S19', 'D07', '2021-01-30 21:59:54', '2021-01-30 21:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `symptoms_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symptom` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`symptoms_code`, `symptom`, `created_at`, `updated_at`, `deleted_at`) VALUES
('S01', 'The car is hard to stop properly', '2021-01-14 19:45:31', '2021-03-23 14:45:23', NULL),
('S02', 'Brake wears quickly', NULL, NULL, NULL),
('S03', 'Muddy brake fluid', NULL, NULL, NULL),
('S04', 'Sounds because of the road traversed', NULL, NULL, NULL),
('S05', 'Very rough suspension dings', NULL, NULL, NULL),
('S06', 'The machine cannot be started', NULL, NULL, NULL),
('S07', 'Car lights can???t turn on', NULL, NULL, NULL),
('S08', 'Car audio can???t turn on', NULL, NULL, NULL),
('S09', 'Battery indicator lights up', NULL, NULL, NULL),
('S10', 'The engine interrupts when it is gassed', NULL, NULL, NULL),
('S11', 'The car engine cannot start when the engine is hot', NULL, NULL, NULL),
('S12', 'Engine power is low', NULL, NULL, NULL),
('S13', 'Car AC is not cold', NULL, NULL, NULL),
('S14', 'The air released by the AC smells bad', NULL, NULL, NULL),
('S15', 'The AC compressor is beeping', NULL, NULL, NULL),
('S16', 'The car engine tickles', NULL, NULL, NULL),
('S17', 'Rough car engine sound', NULL, NULL, NULL),
('S18', 'The oil indicator lights up', NULL, NULL, NULL),
('S19', 'The exhaust fumes are black', NULL, NULL, NULL),
('S20', 'The colour of the oil is solid black', NULL, NULL, NULL),
('S21', 'The brakes vibrated', NULL, NULL, NULL),
('S22', 'Brakes squeaked', NULL, NULL, NULL),
('S23', 'ABS indicator lights up', '2021-01-12 20:47:27', '2021-01-12 20:47:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `symptom_history`
--

CREATE TABLE `symptom_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `result_id` bigint(20) UNSIGNED NOT NULL,
  `symptoms_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `symptom_history`
--

INSERT INTO `symptom_history` (`id`, `result_id`, `symptoms_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'S01', '2021-03-23 14:43:09', '2021-03-23 14:43:09'),
(2, 1, 'S02', '2021-03-23 14:43:09', '2021-03-23 14:43:09'),
(3, 1, 'S03', '2021-03-23 14:43:09', '2021-03-23 14:43:09'),
(4, 2, 'S01', '2021-03-23 14:47:45', '2021-03-23 14:47:45'),
(5, 2, 'S02', '2021-03-23 14:47:46', '2021-03-23 14:47:46'),
(6, 2, 'S03', '2021-03-23 14:47:46', '2021-03-23 14:47:46'),
(7, 2, 'S21', '2021-03-23 14:47:46', '2021-03-23 14:47:46'),
(8, 2, 'S22', '2021-03-23 14:47:46', '2021-03-23 14:47:46'),
(9, 2, 'S23', '2021-03-23 14:47:46', '2021-03-23 14:47:46'),
(10, 3, 'S01', '2021-03-23 14:52:22', '2021-03-23 14:52:22'),
(11, 3, 'S02', '2021-03-23 14:52:22', '2021-03-23 14:52:22'),
(12, 3, 'S03', '2021-03-23 14:52:22', '2021-03-23 14:52:22'),
(13, 3, 'S21', '2021-03-23 14:52:23', '2021-03-23 14:52:23'),
(14, 3, 'S22', '2021-03-23 14:52:23', '2021-03-23 14:52:23'),
(15, 3, 'S23', '2021-03-23 14:52:23', '2021-03-23 14:52:23'),
(16, 4, 'S01', '2021-03-23 14:54:29', '2021-03-23 14:54:29'),
(17, 4, 'S02', '2021-03-23 14:54:29', '2021-03-23 14:54:29'),
(18, 4, 'S03', '2021-03-23 14:54:29', '2021-03-23 14:54:29'),
(19, 4, 'S21', '2021-03-23 14:54:30', '2021-03-23 14:54:30'),
(20, 4, 'S22', '2021-03-23 14:54:30', '2021-03-23 14:54:30'),
(21, 4, 'S23', '2021-03-23 14:54:30', '2021-03-23 14:54:30'),
(22, 5, 'S01', '2021-03-23 14:55:13', '2021-03-23 14:55:13'),
(23, 5, 'S02', '2021-03-23 14:55:13', '2021-03-23 14:55:13'),
(24, 5, 'S03', '2021-03-23 14:55:13', '2021-03-23 14:55:13'),
(25, 5, 'S21', '2021-03-23 14:55:13', '2021-03-23 14:55:13'),
(26, 5, 'S22', '2021-03-23 14:55:13', '2021-03-23 14:55:13'),
(27, 5, 'S23', '2021-03-23 14:55:13', '2021-03-23 14:55:13'),
(28, 6, 'S01', '2021-03-23 14:55:34', '2021-03-23 14:55:34'),
(29, 6, 'S02', '2021-03-23 14:55:35', '2021-03-23 14:55:35'),
(30, 6, 'S03', '2021-03-23 14:55:35', '2021-03-23 14:55:35'),
(31, 6, 'S21', '2021-03-23 14:55:35', '2021-03-23 14:55:35'),
(32, 6, 'S22', '2021-03-23 14:55:35', '2021-03-23 14:55:35'),
(33, 6, 'S23', '2021-03-23 14:55:35', '2021-03-23 14:55:35'),
(34, 7, 'S02', '2021-03-23 14:56:48', '2021-03-23 14:56:48'),
(35, 7, 'S03', '2021-03-23 14:56:48', '2021-03-23 14:56:48'),
(36, 7, 'S21', '2021-03-23 14:56:48', '2021-03-23 14:56:48'),
(37, 7, 'S22', '2021-03-23 14:56:48', '2021-03-23 14:56:48'),
(38, 7, 'S23', '2021-03-23 14:56:48', '2021-03-23 14:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `troubles`
--

CREATE TABLE `troubles` (
  `troubles_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trouble` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `troubles`
--

INSERT INTO `troubles` (`troubles_code`, `trouble`, `solution`, `created_at`, `updated_at`, `deleted_at`) VALUES
('D01', 'Braking System', 'Solution to the problem of the braking system, it is recommended to spray brake cleaner if there is still a problem, immediately check the car braking system at the car repair shop.', '2021-01-14 19:47:02', '2021-03-23 14:46:18', NULL),
('D02', 'Car Suspension', 'The solution to the problem of car suspension, check all parts of the legs of the car, including the shock absorber, lower arm, stabilizer link, long tierod, if someone is thirsty or is damaged, immediately replace it with the original spare parts.', '2020-12-20 23:42:43', '2020-12-20 23:42:43', NULL),
('D03', 'Car Battery', 'The solution to the car battery problem is to do a jump start, after that, check the condition of the car battery for the wet car battery, please check the battery water is used up or not, if there is still a problem, check whether the battery is worn out', '2020-12-20 23:45:06', '2020-12-20 23:45:06', NULL),
('D04', 'Car Spark Plugs', 'The solution to the problem of car spark plugs is to immediately check your car\'s spark plugs, whether you are using a suitable type of spark plug for your car or if the car spark plugs you are using are not original.', '2020-12-20 23:45:23', '2020-12-20 23:45:23', NULL),
('D05', 'AC', 'The solution to the problem of car air conditioning is to immediately check the cabin filter if it is dirty, immediately replace it with a new one. If there is still a problem, immediately check the car\'s cooling system, which might run out of freon, dama', '2020-12-20 23:45:37', '2020-12-20 23:45:37', NULL),
('D06', 'Oil', 'The solution to oil problems is recommended to make regular oil changes and not delay by using the type of oil that suits your car so as not to cause other problems.', '2020-12-20 23:46:50', '2020-12-20 23:46:50', NULL),
('D07', 'Car Machine', 'The solution to car engine problems is to immediately check the car engine to ensure what is happening to your car engine and it is also advisable to service your car engine regularly.', '2021-01-13 20:06:13', '2021-01-13 20:06:13', NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shidqi Aditya', 'shidqi@gmail.com', NULL, '$2y$10$25QGNatsXFq1bQAlGg9HyetM7qarNxBf6fIl/o7ogrZ81Bs3xepAK', 'iVSFhmlQ2MakFMHFvwKmFf8Q7ps8FAq1ZTkAl6LJwkohGBy8m0FRvjXqUCp0', '2020-12-15 13:42:11', '2020-12-15 13:42:11'),
(2, 'Bintang Kusuma', 'admin@localhost', NULL, '$2y$10$uYc2Pw07ioXbPQ/2s9xZseOMFH3hGkNV7Z4yOWcx75TLaMgGDULCG', 'OlWGPrlTvnVBa3kpfHbpT6SivFK1Kekzw7n6kZ21fwZ7TgMXIRjL5WqGtPgY', '2020-12-15 13:42:11', '2020-12-15 13:42:11');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vrules`
-- (See below for the actual view)
--
CREATE TABLE `vrules` (
`troubles_code` char(3)
,`trouble` char(255)
,`symptoms_code` text
);

-- --------------------------------------------------------

--
-- Structure for view `vrules`
--
DROP TABLE IF EXISTS `vrules`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vrules`  AS  select `rules`.`troubles_code` AS `troubles_code`,`troubles`.`trouble` AS `trouble`,cast(group_concat(`rules`.`symptoms_code` separator '|') as char(2048) charset utf8mb4) AS `symptoms_code` from (`rules` join `troubles` on(`rules`.`troubles_code` = `troubles`.`troubles_code`)) group by `troubles`.`troubles_code` ;

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
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_troubles_code_foreign` (`troubles_code`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rules_symptoms_idx` (`symptoms_code`),
  ADD KEY `fk_rules_troubles1_idx` (`troubles_code`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`symptoms_code`),
  ADD UNIQUE KEY `symptoms_symptoms_code_unique` (`symptoms_code`);

--
-- Indexes for table `symptom_history`
--
ALTER TABLE `symptom_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `symptom_history_symptoms_code_foreign` (`symptoms_code`),
  ADD KEY `symptom_history_result_id_foreign` (`result_id`);

--
-- Indexes for table `troubles`
--
ALTER TABLE `troubles`
  ADD PRIMARY KEY (`troubles_code`),
  ADD UNIQUE KEY `troubles_troubles_code_unique` (`troubles_code`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `symptom_history`
--
ALTER TABLE `symptom_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_troubles_code_foreign` FOREIGN KEY (`troubles_code`) REFERENCES `troubles` (`troubles_code`);

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `fk_rules_symptoms` FOREIGN KEY (`symptoms_code`) REFERENCES `symptoms` (`symptoms_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rules_troubles1` FOREIGN KEY (`troubles_code`) REFERENCES `troubles` (`troubles_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `symptom_history`
--
ALTER TABLE `symptom_history`
  ADD CONSTRAINT `symptom_history_result_id_foreign` FOREIGN KEY (`result_id`) REFERENCES `results` (`id`),
  ADD CONSTRAINT `symptom_history_symptoms_code_foreign` FOREIGN KEY (`symptoms_code`) REFERENCES `symptoms` (`symptoms_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
