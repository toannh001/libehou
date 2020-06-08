-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 04:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libehou`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clazz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `clazz`, `fullname`, `dob`, `phone`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'toannh', 'test', 'Toàn', '07-11-1993', '0373422169', '902 đường kim giang', 'huutoan.fithou@gmail.com', NULL, '$2y$10$JunWO6gGvjFnydexPkrnCeIVgUJAbJ7lxTBtQOVkavFs.MvLDxJUu', NULL, '2020-04-23 03:16:37', '2020-04-26 00:27:47'),
(4, 'toannh002', 'fdsfs', 'Nguyễn Hữu TOàn', 'fsfsd', '0373422169', 'fsdfs', 'huutoan.fithsdadsfsdfou@gmail.com', NULL, 'fdsfsdfsf', NULL, '2020-04-23 06:46:41', '2020-04-23 08:34:08'),
(8, 'toannh001', 'fdsf', 'Toàn', '07-11-1993', '0373422169', '902 đường kim giang', 'huut12323oan.fithou@gmail.com', NULL, 'fdsfs', NULL, '2020-04-23 06:51:04', '2020-04-23 06:51:04'),
(10, 'nhungnt', 'dfadf', 'fdsafdf', 'fdafd', '0373422169', 'fdasf', 't.fithou@gmail.com', NULL, '2132132132', NULL, '2020-04-23 08:34:39', '2020-04-25 23:26:03'),
(14, 'test2', 'fdsf', 'Toàn', '07-11-1993', '0373422169', '902 đường kim giang', 'huutoan.fithfffffou@gmail.com', NULL, '$2y$10$0q6C.5c9U7t1SjZTSGpY7ONQOMzztyZvBlVX3qf6Lb1U2kWbbbP8W', NULL, '2020-04-26 00:53:59', '2020-04-26 00:53:59');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
