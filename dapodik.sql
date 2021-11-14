-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 09:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dapodik`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_28_025313_create_npsns_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `npsn`
--

CREATE TABLE `npsn` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengaju` bigint(20) UNSIGNED NOT NULL,
  `npsn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_ijin_pendirian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk_luas_tanah_milik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk_luas_bukan_milik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_papan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `npsn`
--

INSERT INTO `npsn` (`id`, `id_pengaju`, `npsn`, `nama_sekolah`, `surat_permohonan`, `surat_ijin_pendirian`, `sk_luas_tanah_milik`, `sk_luas_bukan_milik`, `foto_papan`, `foto_sekolah`, `alamat`, `koordinat`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, 'Dalam Proses', 'SD N 1 Mangkujayan Ponorogo', '1633304346_SD N 1 Mangkujayan Ponorogo_surat_permohonan_NPSN_baru.pdf', '1633304346_SD N 1 Mangkujayan Ponorogo_surat_ijin_pendirian_operasional.pdf', '1633304346_SD N 1 Mangkujayan Ponorogo_surat_keterangan_luas_tanah_milik.pdf', '1633304346_SD N 1 Mangkujayan Ponorogo_surat_keterangan_luas_tanah_bukan_milik.pdf', '1633304346_SD N 1 Mangkujayan Ponorogo_foto_papan_sekolah.jpeg', '1633304346_SD N 1 Mangkujayan Ponorogo_foto_sekolah_tampak_depan.png', 'Jl.Mangkujayan No.65 Ponorogo', '-7.864880983033872, 111.46682339395379', 'Disetujui', '2021-10-03 16:39:06', '2021-10-05 00:02:33'),
(6, 2, 'Dalam Proses', 'SMK N 1 Jenangan Ponorogo', '1633418468_SMK N 1 Jenangan Ponorogo_surat_permohonan_NPSN_baru.pdf', '1633418468_SMK N 1 Jenangan Ponorogo_surat_ijin_pendirian_operasional.pdf', '1633418468_SMK N 1 Jenangan Ponorogo_surat_keterangan_luas_tanah_milik.pdf', '1633418468_SMK N 1 Jenangan Ponorogo_surat_keterangan_luas_tanah_bukan_milik.pdf', '1633418468_SMK N 1 Jenangan Ponorogo_foto_papan_sekolah.jpg', '1633418468_SMK N 1 Jenangan Ponorogo_foto_sekolah_tampak_depan.jpg', 'Jl.Niken Gandhini No.90', '-7.864880983033872, 111.46682339395379', 'Disetujui', '2021-10-05 00:21:08', '2021-10-05 00:22:39');

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin dapodik', 'admin@gmail.com', NULL, '$2y$10$EqqH7bwuLQ44E5gRCPEs3.SjPvgwH49uDXTXnLNeYWTIeRhRTBNia', NULL, '2021-09-27 00:27:40', '2021-09-27 00:27:40'),
(2, 'User', 'Irvan dwi setiawan', 'irvan@gmail.com', NULL, '$2y$10$8WOXo6ya6xecP1HDGq.gXupqsVXd4rodX69xNN8YwIfNB0b1WGpcS', NULL, '2021-10-04 21:48:09', '2021-10-04 22:26:56');

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
-- Indexes for table `npsn`
--
ALTER TABLE `npsn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npsn_id_pengaju_foreign` (`id_pengaju`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `npsn`
--
ALTER TABLE `npsn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `npsn`
--
ALTER TABLE `npsn`
  ADD CONSTRAINT `npsn_id_pengaju_foreign` FOREIGN KEY (`id_pengaju`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
