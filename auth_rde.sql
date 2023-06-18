-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 05:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_rde`
--

-- --------------------------------------------------------

--
-- Table structure for table `cover_images`
--

CREATE TABLE `cover_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namagambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pencipta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lisensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_all_RDE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_locmap_RDE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_payload_RDE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_all_DE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_locmap_DE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_payload_DE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_lokal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_global` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cover_images`
--

INSERT INTO `cover_images` (`id`, `namagambar`, `slug`, `pencipta`, `lisensi`, `cap_all_RDE`, `cap_locmap_RDE`, `cap_payload_RDE`, `cap_all_DE`, `cap_locmap_DE`, `cap_payload_DE`, `url_lokal`, `url_global`, `created_at`, `updated_at`) VALUES
(1, 'Hamburger', 'hamburger', 'Unknown', 'Public Domain', '85794', '71757', '1754', '85773', '12311', '9182', 'coverdata/hamburger.png', 'https://inkscape.org/~theeagleowl/%E2%98%85hamburger', '2022-06-13 16:51:25', '2022-06-13 16:51:25'),
(2, 'Inkscape Funtastic', 'inkscape-funtastic', 'Muhammad Farlly', 'CC-BY-SA', '949584', '438422', '63895', '949293', '794014', '19409', 'coverdata/Inkscape_Funtastic.png', 'https://inkscape.org/~mfarlly/%E2%98%85inkscape-funtastic-i-muhamad-farlly', '2022-06-13 16:51:38', '2022-06-13 16:51:38'),
(3, 'Splash Screen', 'splash-screen', 'Fauzan Syukri', 'CC-BY-SA', '538393', '517919', '2559', '538010', '230307', '38462', 'coverdata/Splash_Screen.png', 'https://inkscape.org/~ozant/%E2%98%85inkscape-11-splash-screen', '2022-06-13 16:51:48', '2022-06-13 16:51:48'),
(4, 'Be Free', 'be-free', 'Tiago Oliveira', 'CC-BY-SA', '570520', '246982', '40442', '570498', '102265', '58529', 'coverdata/_bactery.png', 'https://inkscape.org/id/~TiagoOHEE/%E2%98%85be-free', '2022-06-13 16:51:55', '2022-06-13 16:51:55'),
(5, 'Travelers', 'travelers', 'Олег Машков', 'Public Domain', '389969', '71917', '39756', '389907', '31083', '44853', 'coverdata/cowb.png', 'https://inkscape.org/id/~V1Oleg/%E2%98%85travelers', '2022-06-13 16:51:59', '2022-06-13 16:51:59'),
(6, 'Ngarai Sianok', 'ngarai-sianok', 'Fauzan Syukri', 'CC-BY-SA', '660753', '334821', '40741', '660440', '604758', '6960', 'coverdata/_ngarai.png', 'https://inkscape.org/id/~ozant/%E2%98%85ngarai-sianok', '2022-06-13 16:52:06', '2022-06-13 16:52:06'),
(7, 'Red Cup', 'red-cup', 'unknown', 'Public Domain', '86528', '43192', '5417', '86528', '10571', '9494', 'coverdata/_redcup.png', 'https://inkscape.org/id/~theeagleowl/%E2%98%85red-cup', '2022-06-13 16:52:07', '2022-06-13 16:52:07'),
(8, 'Next Inkscape', 'next-inkscape', 'Muhammad Farlly', 'CC-BY-SA', '532945', '505658', '3410', '532743', '152185', '47569', 'coverdata/_tech.png', 'https://inkscape.org/id/~mfarlly/%E2%98%85next-inkscape+1', '2022-06-13 16:52:12', '2022-06-13 16:52:12'),
(9, 'Inkscape Bamboo', 'inkscape-bamboo', 'Carolinacosta', 'CC-BY-SA', '204974', '181612', '2920', '204974', '73160', '16476', 'coverdata/bambu.png', 'https://inkscape.org/id/~carolinacosta/%E2%98%85inkscape-bamboo', '2022-06-13 16:52:16', '2022-06-13 16:52:16'),
(10, 'Inkscape Funtastic Dragon', 'inkscape-funtastic-dragon', 'Muhammad Farlly', 'CC-BY-SA', '521954', '412959', '13624', '521505', '85812', '54461', 'coverdata/dragon.png', 'https://inkscape.org/id/~mfarlly/%E2%98%85inkscape-funtastic-dragon-i-muhamad-farlly', '2022-06-13 16:52:26', '2022-06-13 16:52:26');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_14_032035_create_cover_images_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverimage` bigint(20) UNSIGNED NOT NULL,
  `slug_coverimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namalengkap`, `email`, `tanggallahir`, `jeniskelamin`, `password`, `coverimage`, `slug_coverimage`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Ali Sya\'roni', 'muhammadalisyaroni240499@gmail.com', '1999-04-24', '1', '$2y$10$WZYGkabzWLWbZPqmYp6NZ.moG7KWx5NpBmu.yX60QiggEYyHWkA2m', 8, 'bXVoYW1tYWRhbGlzeWFyb25pMjQwNDk5QGdtYWlsLmNvbW5leHQtaW5rc2NhcGU2NDRjZWRhMTc2ZDJmMC4xMDU4OTg5Mw==', NULL, '2023-04-29 03:13:01', '2023-04-29 03:13:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cover_images`
--
ALTER TABLE `cover_images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cover_images_id_unique` (`id`),
  ADD UNIQUE KEY `cover_images_slug_unique` (`slug`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_slug_coverimage_unique` (`slug_coverimage`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cover_images`
--
ALTER TABLE `cover_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
