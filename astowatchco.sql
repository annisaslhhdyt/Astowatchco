-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 11:53 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astowatchco`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2018_12_07_060824_create_products_table', 2),
(8, '2018_12_08_093950_create_toegoes_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` int(11) NOT NULL,
  `series` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wood` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `series`, `case`, `wood`, `strap`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Strap', 1, '', '', '', '', 200000, '2018-12-06 23:09:23', '2018-12-06 23:09:23'),
(2, 'Strap', 2, '', '', '', '', 200000, '2018-12-06 23:09:23', '2018-12-06 23:09:23'),
(3, 'Strap', 3, '', '', '', '', 200000, '2018-12-06 23:09:23', '2018-12-06 23:09:23'),
(4, 'Black Hexagonal Monjali', 4, 'Monjali', 'Hexagonal', 'Maple Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(5, 'Black Hexagonal Monjali', 5, 'Monjali', 'Hexagonal', 'Maple Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(6, 'Classic Black Cowhide Leather', 6, 'Monjali', 'Hexagonal', 'Maple Wood', 'Black Cowhide Leather', 700000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(7, 'Black Round Toegoe', 7, 'Toegoe', 'Round', 'Maple Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(8, 'Black Round Toegoe', 8, 'Toegoe', 'Round', 'Maple Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(9, 'Classic Black Cowhide Leather', 9, 'Toegoe', 'Round', 'Maple Wood', 'Black Cowhide Leather', 700000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(10, 'Black Hexagonal Monjali', 10, 'Monjali', 'Hexagonal', 'Rose Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(11, 'Black Hexagonal Monjali', 11, 'Monjali', 'Hexagonal', 'Rose Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(12, 'Classic Black Cowhide Leather', 12, 'Monjali', 'Hexagonal', 'Rose Wood', 'Black Cowhide Leather', 700000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(13, 'Black Round Toegoe', 13, 'Toegoe', 'Round', 'Rose Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(14, 'Black Round Toegoe', 14, 'Toegoe', 'Round', 'Rose Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(15, 'Classic Black Cowhide Leather', 15, 'Toegoe', 'Round', 'Rose Wood', 'Black Cowhide Leather', 700000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(16, 'White Hexagonal Monjali', 16, 'Monjali', 'Hexagonal', 'Rose Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(17, 'White Hexagonal Monjali', 17, 'Monjali', 'Hexagonal', 'Rose Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(18, 'Classic Natural Cowhide Leather', 18, 'Monjali', 'Hexagonal', 'Rose Wood', 'Natural Cowhide Leather', 700000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(19, 'White Round Toegoe', 19, 'Toegoe', 'Round', 'Rose Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(20, 'White Round Toegoe', 20, 'Toegoe', 'Round', 'Rose Wood', '', 500000, '2018-12-06 23:09:24', '2018-12-06 23:09:24'),
(21, 'Classic Natural Cowhide Leather', 21, 'Toegoe', 'Round', 'Rose Wood', 'Natural Cowhide Leather', 700000, '2018-12-06 23:09:24', '2018-12-06 23:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `toegoes`
--

CREATE TABLE `toegoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` int(11) NOT NULL,
  `series` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wood` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toegoes`
--

INSERT INTO `toegoes` (`id`, `name`, `slug`, `series`, `case`, `wood`, `strap`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Black Round Toegoe', 7, 'Toegoe', 'Round', 'Maple Wood', '', 500000, '2018-12-08 03:08:45', '2018-12-08 03:08:45'),
(2, 'Black Round Toegoe', 8, 'Toegoe', 'Round', 'Maple Wood', '', 500000, '2018-12-08 03:08:45', '2018-12-08 03:08:45'),
(3, 'Black Round Toegoe', 13, 'Toegoe', 'Round', 'Rose Wood', '', 500000, '2018-12-08 03:08:45', '2018-12-08 03:08:45'),
(4, 'Black Round Toegoe', 14, 'Toegoe', 'Round', 'Rose Wood', '', 500000, '2018-12-08 03:08:45', '2018-12-08 03:08:45'),
(5, 'White Round Toegoe', 19, 'Toegoe', 'Round', 'Rose Wood', '', 500000, '2018-12-08 03:08:45', '2018-12-08 03:08:45'),
(6, 'White Round Toegoe', 20, 'Toegoe', 'Round', 'Rose Wood', '', 500000, '2018-12-08 03:08:45', '2018-12-08 03:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mita', 'mita@gmail.com', NULL, '$2y$10$4XC2JZrSsAY/ccWSdHqDa.e6tWdw6nRnqSnFSXWOqUfc9VVVLlRki', 'v2f5OTjBcYQKECDXSO2qkfzqvOIrDX0SuY2lwASFrIzxQvvFqkEWIboSAxjY', '2018-11-28 12:31:33', '2018-11-28 12:31:33'),
(2, 'caca', 'caca@gmail.com', NULL, '$2y$10$N182szipA33Ky5qfn.wmAecQOPdsyaUQA4Ze8gGCyb5zawnf4.sjS', 'eL3Wm3u1EFcpXn5S8g151wSkujKcUcsDfbPaAgLek5SWm8PvLmRdLJgbsivn', '2018-11-28 14:17:05', '2018-11-28 14:17:05'),
(3, 'jul', 'jul@gmail.com', NULL, '$2y$10$T/rS9gH17SjepKeYGHw2CONt.ukTm3Z.3otRYuD7iiHYThoIfD6Ha', 'FkfTLsepVhhLCN6T5vwIabHxr1TpxJfSQKx9eo82ejS1PfHOMyY1Zdk5iY0k', '2018-12-08 22:37:23', '2018-12-08 22:37:23'),
(4, 'dege', 'dege@gmail.com', NULL, '$2y$10$b5gjlXoMV.2RKStTypxWieA1IwGRDQsI.BXmGYv2wrdYEDwoRXzoa', 'mjy7m2FTLgKlYOjJTkGjHdH1NPB8eApYCUkUk4msmYR55mQRqP2H8xYZ3DIu', '2018-12-09 03:01:32', '2018-12-09 03:01:32');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toegoes`
--
ALTER TABLE `toegoes`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `toegoes`
--
ALTER TABLE `toegoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
