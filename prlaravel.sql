-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 02:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `matkuls`
--

CREATE TABLE `matkuls` (
  `id` bigint(20) NOT NULL,
  `nama_matkul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matkuls`
--

INSERT INTO `matkuls` (`id`, `nama_matkul`, `created_at`, `updated_at`) VALUES
(111, 'Logika', '2018-03-11 06:37:13', '2018-03-11 06:37:13'),
(112, 'Bhs Inggris', '2018-03-11 06:37:28', '2018-03-11 06:37:28'),
(113, 'Basis Data', '2018-03-11 06:37:44', '2018-03-11 06:37:44'),
(116, 'KP', '2018-03-11 06:38:03', '2018-03-11 06:38:03'),
(117, 'RPL', '2018-03-11 06:38:16', '2018-03-11 06:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_11_041849_tabelsiswa', 1),
(4, '2018_03_11_041911_tabelwali', 1),
(5, '2018_03_11_041933_tabelmatkul', 1),
(6, '2018_03_11_041953_tabelrapor', 1),
(7, '2018_03_11_131539_tabelraport', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raports`
--

CREATE TABLE `raports` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `id_matkul` bigint(20) NOT NULL,
  `nama_guru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `raports`
--

INSERT INTO `raports` (`id`, `id_siswa`, `id_matkul`, `nama_guru`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 773001, 111, 'Semuil', 'A', '2018-03-11 06:18:00', '2018-03-11 06:18:00'),
(2, 773001, 112, 'Eric', 'C', '2018-03-11 06:38:46', '2018-03-11 06:38:46'),
(3, 773004, 113, 'Tiur', 'B', '2018-03-11 06:39:09', '2018-03-11 06:39:09'),
(4, 773004, 112, 'Mewati', 'A', '2018-03-11 06:39:30', '2018-03-11 06:39:30'),
(5, 673004, 111, 'Semuil', 'A', '2018-03-11 06:39:56', '2018-03-11 06:39:56'),
(6, 673004, 117, 'Tanti', 'C', '2018-03-11 06:40:15', '2018-03-11 06:40:15'),
(7, 573005, 116, 'Diana', 'B', '2018-03-11 06:40:36', '2018-03-11 06:40:36'),
(9, 573005, 113, 'Daniel', 'B', '2018-03-11 06:42:44', '2018-03-11 06:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `idwali` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nama_siswa`, `tanggal_lahir`, `idwali`, `created_at`, `updated_at`) VALUES
(773001, 'Heru Sya', '2018-03-11', 72001, '2018-03-11 02:39:25', '2018-03-11 03:12:22'),
(773004, 'Raden', '1995-01-20', 72002, '2018-03-11 06:34:55', '2018-03-11 06:34:55'),
(673004, 'Kiko', '1989-08-19', 72001, '2018-03-11 06:35:32', '2018-03-11 06:35:32'),
(573005, 'Riny', '1989-08-20', 72003, '2018-03-11 06:36:07', '2018-03-11 06:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `walis`
--

CREATE TABLE `walis` (
  `id` bigint(20) NOT NULL,
  `nama_wali` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `walis`
--

INSERT INTO `walis` (`id`, `nama_wali`, `created_at`, `updated_at`) VALUES
(72001, 'Ani', '2018-03-11 06:36:27', '2018-03-11 06:36:27'),
(72002, 'Lea', '2018-03-11 06:36:44', '2018-03-11 06:36:44'),
(72003, 'Lina', '2018-03-11 06:36:58', '2018-03-11 06:36:58');

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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `raports`
--
ALTER TABLE `raports`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `raports`
--
ALTER TABLE `raports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
