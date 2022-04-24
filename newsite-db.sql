-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2022 at 07:17 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsite-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2020_07_09_140629_create_post_table', 1),
(15, '2020_07_10_064027_create_news_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `created_at`, `updated_at`, `title`, `content`, `imgUrl`, `date`) VALUES
(15, '2020-07-14 10:35:17', '2022-04-23 16:26:35', 'Huawei UK 5G Ban', 'Huawei denies it spies for China and has said the United States wants to frustrate its growth because no US company could offer the same range of technology at a competitive price.', 'https://blog.huawei.com/wp-content/uploads/2018/08/2018e585ace58fb8logo-e7ab96e78988.png', '2020-06-30'),
(16, '2020-07-14 10:49:48', '2020-07-14 10:49:48', 'Google Pixel 4a', 'Google Pixel 4a render surfaced on the Google Canada Store briefly, revealing key design details of the upcoming phone.The Pixel 4a has since then seen several leaks, but Google has made no hints of an official launch.', 'https://cdn-files.kimovil.com/default/0003/63/thumb_262022_default_big.jpeg', '2020-07-14'),
(17, '2020-07-16 06:24:55', '2020-07-16 06:24:55', 'The Lowest Price for Home Solar', 'Today we are introducing the lowest-ever cost to go solar in the United States. Our average system size is now one-third less expensive than the industry average and we have recently introduced a lowest-price guarantee.', 'https://economictimes.indiatimes.com/thumb/msid-74188131,width-1200,height-900,resizemode-4,imgsize-443321/tesla-solar-roof.jpg?from=mdr', '2020-06-19'),
(18, '2020-07-16 06:27:08', '2020-07-16 06:27:08', 'Accelerating Tesla’s Safety Culture', 'At Tesla, we believe safety in our operations is achieved through engagement, education, innovation and continual improvement. That’s why we focus not just on our overall rate of injury, but also on how to prevent individual injuries before they happen.', 'https://www.tesla.com/sites/default/files/images/blogs/safety-future.jpg', '2020-02-04'),
(19, '2020-07-16 06:44:30', '2020-07-16 06:44:30', 'NASA’s Ingenuity Mars Helicopter', 'When NASA’s Mars 2020 Perseverance rover launches from Cape Canaveral Air Force Station in Florida later this summer, an innovative experiment will ride along: the Ingenuity Mars Helicopter.', 'https://scitechdaily.com/images/NASAs-Ingenuity-Mars-Helicopter-777x437.jpg', '2020-07-15');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'David Sanosyan', 'david.sanosyan.11@mail.ru', 'on', NULL, '$2y$10$QP8XgbZQ4wGOzBTJUTyNGueciD1QcWRe/f047y.R2DSAF3HVtaDzS', NULL, '2020-07-16 06:02:35', '2020-07-16 06:02:35'),
(6, 'Varazdat', 'varazdat.simonyan@gmail.com', 'on', NULL, '$2y$10$JJTFBSHiK8PekKc93FafM.xXeNpor/m5bRhhs2sk6KUg048KSWpOO', NULL, '2020-07-16 06:03:10', '2020-07-16 07:06:40'),
(7, 'userExample', 'example.user@gmail.com', NULL, NULL, '$2y$10$ihV5NJc4wBBpx4vzxejGAegYrLKWpALtfpWIGlf//C6Aim8OYfElS', NULL, '2020-07-16 06:04:08', '2020-07-16 06:04:08'),
(10, 'sahak', 'stepanyansahak@gmail.com', 'on', NULL, '$2y$10$FQinxeVauRuuLOXyurw8WOZZxEaMDReunbVTMzGM.lIT97Ba1oj8y', NULL, '2022-04-23 15:48:59', '2022-04-23 15:59:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
