-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 08:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `symptoms_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `troubles_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `symptoms_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symptom` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`symptoms_code`, `symptom`, `created_at`, `updated_at`) VALUES
('S01', 'The car is hard to stop properly', '2021-01-14 19:45:31', '2021-01-16 20:57:55'),
('S02', 'Brake wears quickly', NULL, NULL),
('S03', 'Muddy brake fluid', NULL, NULL),
('S04', 'Sounds because of the road traversed', NULL, NULL),
('S05', 'Very rough suspension dings', NULL, NULL),
('S06', 'The machine cannot be started', NULL, NULL),
('S07', 'Car lights can’t turn on', NULL, NULL),
('S08', 'Car audio can’t turn on', NULL, NULL),
('S09', 'Battery indicator lights up', NULL, NULL),
('S10', 'The engine interrupts when it is gassed', NULL, NULL),
('S11', 'The car engine cannot start when the engine is hot', NULL, NULL),
('S12', 'Engine power is low', NULL, NULL),
('S13', 'Car AC is not cold', NULL, NULL),
('S14', 'The air released by the AC smells bad', NULL, NULL),
('S15', 'The AC compressor is beeping', NULL, NULL),
('S16', 'The car engine tickles', NULL, NULL),
('S17', 'Rough car engine sound', NULL, NULL),
('S18', 'The oil indicator lights up', NULL, NULL),
('S19', 'The exhaust fumes are black', NULL, NULL),
('S20', 'The colour of the oil is solid black', NULL, NULL),
('S21', 'The brakes vibrated', NULL, NULL),
('S22', 'Brakes squeaked', NULL, NULL),
('S23', 'ABS indicator lights up', '2021-01-12 20:47:27', '2021-01-12 20:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `troubles`
--

CREATE TABLE `troubles` (
  `troubles_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trouble` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `troubles`
--

INSERT INTO `troubles` (`troubles_code`, `trouble`, `solution`, `created_at`, `updated_at`) VALUES
('D01', 'Braking System', 'Solution to the problem of the braking system, it is recommended to spray brake cleaner if there is still a problem, immediately check the car braking system at the car repair shop.', '2021-01-14 19:47:02', '2021-01-16 21:00:42'),
('D02', 'Car Suspension', 'The solution to the problem of car suspension, check all parts of the legs of the car, including the shock absorber, lower arm, stabilizer link, long tierod, if someone is thirsty or is damaged, immediately replace it with the original spare parts.', '2020-12-20 23:42:43', '2020-12-20 23:42:43'),
('D03', 'Car Battery', 'The solution to the car battery problem is to do a jump start, after that, check the condition of the car battery for the wet car battery, please check the battery water is used up or not, if there is still a problem, check whether the battery is worn out', '2020-12-20 23:45:06', '2020-12-20 23:45:06'),
('D04', 'Car Spark Plugs', 'The solution to the problem of car spark plugs is to immediately check your car\'s spark plugs, whether you are using a suitable type of spark plug for your car or if the car spark plugs you are using are not original.', '2020-12-20 23:45:23', '2020-12-20 23:45:23'),
('D05', 'AC', 'The solution to the problem of car air conditioning is to immediately check the cabin filter if it is dirty, immediately replace it with a new one. If there is still a problem, immediately check the car\'s cooling system, which might run out of freon, dama', '2020-12-20 23:45:37', '2020-12-20 23:45:37'),
('D06', 'Oil', 'The solution to oil problems is recommended to make regular oil changes and not delay by using the type of oil that suits your car so as not to cause other problems.', '2020-12-20 23:46:50', '2020-12-20 23:46:50'),
('D07', 'Car Machine', 'The solution to car engine problems is to immediately check the car engine to ensure what is happening to your car engine and it is also advisable to service your car engine regularly.', '2021-01-13 20:06:13', '2021-01-13 20:06:13');

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
(1, 'Shidqi Aditya', 'shidqi@gmail.com', NULL, '$2y$10$25QGNatsXFq1bQAlGg9HyetM7qarNxBf6fIl/o7ogrZ81Bs3xepAK', '6w9CkIbvv4QILRH63utBvqZgJ0MICxxnIOt6yB2Ml4WWAjO4MDt795t2VgiI', '2020-12-15 13:42:11', '2020-12-15 13:42:11'),
(2, 'Bintang Kusuma', 'admin@localhost', NULL, '$2y$10$uYc2Pw07ioXbPQ/2s9xZseOMFH3hGkNV7Z4yOWcx75TLaMgGDULCG', 'OlWGPrlTvnVBa3kpfHbpT6SivFK1Kekzw7n6kZ21fwZ7TgMXIRjL5WqGtPgY', '2020-12-15 13:42:11', '2020-12-15 13:42:11');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `fk_rules_symptoms` FOREIGN KEY (`symptoms_code`) REFERENCES `symptoms` (`symptoms_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rules_troubles1` FOREIGN KEY (`troubles_code`) REFERENCES `troubles` (`troubles_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
