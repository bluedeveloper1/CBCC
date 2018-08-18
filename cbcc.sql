-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 04:03 PM
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
-- Database: `cbcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `voucher_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `ministry` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `date`, `receiver`, `service_type`, `voucher_number`, `amount`, `ministry`) VALUES
(1, '2018-07-10 13:00:00', 'Marion Quizan', 'Main Service', 1, 5000, 'YDC');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

CREATE TABLE `ministries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `funds` double NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministries`
--

INSERT INTO `ministries` (`id`, `name`, `type`, `funds`, `updated_at`, `created_at`) VALUES
(1, 'Care', 'Main', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Ladies', 'Main', 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'M & M', 'Main', 1500, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'YDC', 'Main', 160000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Choir', 'Main', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Prayer Breakfast', 'Main', 2000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Circle of Faith', 'Main', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Creative Team', 'Main', 1200, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'DVBS', 'Main', 500, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Care', 'Main', 2000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Ladies', 'Main', 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'M & M', 'Main', 1500, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'YDC', 'Main', 160000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Choir', 'Main', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Prayer Breakfast', 'Main', 2000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Circle of Faith', 'Main', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Creative Team', 'Main', 1200, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'DVBS', 'Main', 500, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Tithes', 'Sub', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Offering', 'Sub', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'FirstFruit', 'Sub', 500000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Mission', 'Sub', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `particulars`
--

CREATE TABLE `particulars` (
  `voucher_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mikhael.maclang', 'mikhaeljohnmmaclang@gmail.com', '$2y$10$9XrcNsYm2n/VnXn3qsUWeO4JSPDjajIlnSyMxnzEdD9MRbSCSOdQ2', NULL, '2018-07-04 09:43:53', '2018-07-04 09:43:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministries`
--
ALTER TABLE `ministries`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ministries`
--
ALTER TABLE `ministries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
