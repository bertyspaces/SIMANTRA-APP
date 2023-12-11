-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2023 at 11:59 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simantra`
--
CREATE DATABASE IF NOT EXISTS `simantra` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simantra`;

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(2, 'admin', ''),
(3, 'pml', ''),
(4, 'ipds', ''),
(5, 'kepala_bps\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(2, 2),
(3, 3),
(3, 4),
(4, 5),
(4, 6),
(5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin', NULL, '2023-11-10 16:52:53', 0),
(2, '::1', 'admin', NULL, '2023-11-10 16:53:27', 0),
(3, '::1', 'admin', NULL, '2023-11-10 16:54:04', 0),
(4, '::1', 'admin', NULL, '2023-11-10 16:54:53', 0),
(5, '::1', 'admin123@gmail.com', 2, '2023-11-10 16:56:50', 1),
(6, '::1', 'pml123@gmail.com', 3, '2023-11-10 16:58:36', 1),
(7, '::1', 'admin123@gmail.com', 2, '2023-11-10 16:59:04', 1),
(8, '::1', 'admin123@gmail.com', 2, '2023-11-10 23:09:58', 1),
(9, '::1', 'admin', NULL, '2023-11-10 23:25:37', 0),
(10, '::1', 'admin123@gmail.com', 2, '2023-11-10 23:25:47', 1),
(11, '::1', 'admin123@gmail.com', 2, '2023-11-12 22:58:04', 1),
(12, '::1', 'pml123@gmail.com', 3, '2023-11-12 23:17:22', 1),
(13, '::1', 'admin123@gmail.com', 2, '2023-11-12 23:18:27', 1),
(14, '::1', 'admin123@gmail.com', 2, '2023-11-13 01:13:26', 1),
(15, '::1', 'admin', NULL, '2023-11-13 07:45:21', 0),
(16, '::1', 'admin123@gmail.com', 2, '2023-11-13 07:45:29', 1),
(17, '::1', 'admin123@gmail.com', 2, '2023-11-13 07:50:40', 1),
(18, '::1', 'admin123@gmail.com', 2, '2023-11-13 07:51:39', 1),
(19, '::1', 'admin123@gmail.com', 2, '2023-11-13 07:51:56', 1),
(20, '::1', 'pml123@gmail.com', 3, '2023-11-13 08:28:26', 1),
(21, '::1', 'admin123@gmail.com', 2, '2023-11-13 08:28:55', 1),
(22, '::1', 'pml123@gmail.com', 3, '2023-11-13 08:33:40', 1),
(23, '::1', 'admin123@gmail.com', 2, '2023-11-13 09:08:44', 1),
(24, '::1', 'admin123@gmail.com', 2, '2023-11-13 21:53:47', 1),
(25, '::1', 'admin123@gmail.com', 2, '2023-11-14 06:30:01', 1),
(26, '::1', 'pml', NULL, '2023-11-14 07:36:28', 0),
(27, '::1', 'admin123@gmail.com', 2, '2023-11-14 07:36:34', 1),
(28, '::1', 'admin123@gmail.com', 2, '2023-11-14 18:43:12', 1),
(29, '::1', 'pml123@gmail.com', 3, '2023-11-14 18:59:36', 1),
(30, '::1', 'admin123@gmail.com', 2, '2023-11-14 19:01:36', 1),
(31, '::1', 'admin123@gmail.com', 2, '2023-11-15 03:55:59', 1),
(32, '::1', 'admin123@gmail.com', 2, '2023-11-15 18:59:14', 1),
(33, '::1', 'admin', NULL, '2023-11-15 21:00:40', 0),
(34, '::1', 'admin123@gmail.com', 2, '2023-11-15 21:00:48', 1),
(35, '::1', 'admin123@gmail.com', 2, '2023-11-16 23:37:10', 1),
(36, '::1', 'admin123@gmail.com', 2, '2023-11-16 23:37:13', 1),
(37, '::1', 'admin123@gmail.com', 2, '2023-11-17 05:27:43', 1),
(38, '::1', 'pml123@gmail.com', 3, '2023-11-17 06:21:00', 1),
(39, '::1', 'admin123@gmail.com', 2, '2023-11-17 06:57:43', 1),
(40, '::1', 'pml123@gmail.com', 3, '2023-11-17 18:40:06', 1),
(41, '::1', 'admin123@gmail.com', 2, '2023-11-17 18:44:17', 1),
(42, '::1', 'admin123@gmail.com', 2, '2023-11-18 07:25:51', 1),
(43, '::1', 'admin123@gmail.com', 2, '2023-11-18 07:26:08', 1),
(44, '::1', 'admin123@gmail.com', 2, '2023-11-19 05:41:32', 1),
(45, '::1', 'admin123@gmail.com', 2, '2023-11-20 18:26:47', 1),
(46, '::1', 'pml123@gmail.com', 3, '2023-11-20 18:34:58', 1),
(47, '::1', 'admin123@gmail.com', 2, '2023-11-20 18:48:32', 1),
(48, '::1', 'admin123@gmail.com', 2, '2023-11-22 19:06:26', 1),
(49, '::1', 'pml123@gmail.com', 3, '2023-11-22 19:52:06', 1),
(50, '::1', 'admin123@gmail.com', 2, '2023-11-22 20:31:17', 1),
(51, '::1', 'admin123@gmail.com', 2, '2023-11-23 20:35:41', 1),
(52, '::1', 'admin123@gmail.com', 2, '2023-12-04 07:43:22', 1),
(53, '::1', 'admin123@gmail.com', 2, '2023-12-04 07:58:19', 1),
(54, '::1', 'tresno21@gmail.com', 6, '2023-12-04 08:03:03', 1),
(55, '::1', 'admin123@gmail.com', 2, '2023-12-04 08:04:15', 1),
(56, '::1', 'pml123@gmail.com', 3, '2023-12-05 15:59:09', 1),
(57, '::1', 'admin123@gmail.com', 2, '2023-12-05 16:37:57', 1),
(58, '::1', 'khj', NULL, '2023-12-06 02:12:10', 0),
(59, '::1', 'admin123@gmail.com', 2, '2023-12-06 09:29:12', 1),
(60, '::1', 'admin123@gmail.com', 2, '2023-12-06 09:50:51', 1),
(61, '::1', 'pml123@gmail.com', 3, '2023-12-06 09:54:14', 1),
(62, '::1', 'pml123@gmail.com', 3, '2023-12-06 10:20:59', 1),
(63, '::1', 'admin123@gmail.com', 2, '2023-12-06 10:32:27', 1),
(64, '::1', 'retrt', NULL, '2023-12-06 10:47:06', 0),
(65, '::1', 'admin123@gmail.com', 2, '2023-12-06 10:53:41', 1),
(66, '::1', 'admin123@gmail.com', 2, '2023-12-07 10:30:40', 1),
(67, '::1', 'rahyudin123@gmail.com', 7, '2023-12-07 10:49:00', 1),
(68, '::1', 'rahyudin123@gmail.com', 7, '2023-12-07 11:15:05', 1),
(69, '::1', 'pml', NULL, '2023-12-11 11:33:10', 0),
(70, '::1', 'pml123@gmail.com', 3, '2023-12-11 11:33:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int UNSIGNED NOT NULL,
  `selector` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hashedValidator` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bobot_kriteria`
--

CREATE TABLE `bobot_kriteria` (
  `kode` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `kriteria` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `bobot` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bobot_kriteria`
--

INSERT INTO `bobot_kriteria` (`kode`, `kriteria`, `bobot`) VALUES
('K1', 'Nilai Kinerja', 30),
('K2', 'Nilai Kerja Sama', 30),
('K3', 'Nilai Kualitas Data', 40);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int NOT NULL,
  `nama_kegiatan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `periode` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `divisi`, `periode`) VALUES
(2, 'SAKERNAS ', 'Statisi Sosial ', 'Agustus 2022'),
(3, 'Regsosek ', 'Statisi Sosial ', 'November 2022'),
(4, 'Survei IMK Tahunan', 'Statisi Produksi ', 'Januari 2022');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_mitra`
--

CREATE TABLE `kegiatan_mitra` (
  `id_kegiatan_mitra` int NOT NULL,
  `nik` char(16) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kegiatan` int NOT NULL,
  `id_user` int NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan_mitra`
--

INSERT INTO `kegiatan_mitra` (`id_kegiatan_mitra`, `nik`, `id_kegiatan`, `id_user`, `kategori`) VALUES
(9, '454636363', 8, 0, 'lapangan'),
(10, '213131', 8, 0, 'pengolahan'),
(11, '3326163620002', 9, 0, 'lapangan'),
(12, '3326163620002', 3, 0, 'lapangan'),
(13, '332616362900', 3, 0, 'pengolahan'),
(14, '3326163620002', 2, 0, 'lapangan'),
(15, '332616362900', 2, 0, 'pengolahan'),
(16, '333526719', 2, 0, 'lapangan');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(18, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1699634915, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `nik` char(16) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_mitra` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` char(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` char(5) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`nik`, `nama_mitra`, `jenis_kelamin`, `tanggal_lahir`, `umur`, `pendidikan`, `email`, `kategori`) VALUES
('3326163620002', 'Marchellina Berty', 'Perempuan', '2002-03-25', '21', 'S1', 'linaberty253@gmail.com', 'Mitra Pengolahan'),
('332616362900', 'Hakim Firman', 'Laki-Laki', '2023-11-01', '25', 'SMA/SMK', 'hakimff@gmail.com', 'mitra lapangan'),
('333526719', 'Berty Lina', 'Perempuan', '2023-11-18', '23', 'DI/DII/DIII', 'machel253@gmail.com', 'mitra lapangan'),
('454636363', 'Fatris Faradilla', 'Perempuan', '2002-02-07', '23', 'S1', 'fatris@gmail.com', 'Mitra Pengolahan');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kegiatan_mitra`
--

CREATE TABLE `nilai_kegiatan_mitra` (
  `id_nilai_kegiatan_mitra` int NOT NULL,
  `id_kegiatan_mitra` int NOT NULL,
  `id_ratting_kriteria` int NOT NULL,
  `nilai_kinerja` int NOT NULL,
  `nilai_kerja_sama` int NOT NULL,
  `nilai_kualitas_data` int NOT NULL,
  `total_nilai` int NOT NULL,
  `keterangan` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating_kriteria`
--

CREATE TABLE `rating_kriteria` (
  `id_rating_kriteria` int NOT NULL,
  `kode` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `bobot` int NOT NULL,
  `keterangan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_kriteria`
--

INSERT INTO `rating_kriteria` (`id_rating_kriteria`, `kode`, `bobot`, `keterangan`) VALUES
(11, 'K1', 1, 'Tidak Baik'),
(12, 'K1', 2, 'Kurang Baik'),
(13, 'K1', 3, 'Cukup Baik'),
(14, 'K1', 4, 'Baik'),
(15, 'K1', 5, 'Sangat Baik'),
(16, 'K2', 1, 'Tidak Baik'),
(17, 'K2', 2, 'Kurang Baik'),
(18, 'K2', 3, 'Cukup Baik'),
(19, 'K2', 4, 'Baik'),
(20, 'K2', 5, 'Sangat Baik'),
(21, 'K3', 1, 'Tidak Baik'),
(22, 'K3', 2, 'Kurang Baik'),
(23, 'K3', 3, 'Cukup Baik'),
(24, 'K3', 4, 'Baik'),
(25, 'K3', 5, 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_nilai_mitra`
--

CREATE TABLE `rekap_nilai_mitra` (
  `id_rekap_nilai_mitra` int NOT NULL,
  `id_nilai_kegiatan_mitra` int NOT NULL,
  `nama_mitra` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nilai_rata` int NOT NULL,
  `jumlah_kegiatan` int NOT NULL,
  `bobot_nilai` int NOT NULL,
  `nila_akhir` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `reset_hash` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_message` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'admin123@gmail.com', 'admin', '$2y$10$HnjJgyL2qlUdzQGcNX9J/OFdQuSOqqqmb4uGgojtgKEmlRkpYi8eW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-11-10 16:56:10', '2023-11-10 16:56:10', NULL),
(3, 'pml123@gmail.com', 'pml', '$2y$10$wSdKUS3xFVDM9DnkpXs4j.INsAs0uez3JhXz3WlnRYzr74mC91tuu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-11-10 16:57:48', '2023-11-10 16:57:48', NULL),
(4, 'lina123@gmail.com', 'lina', '$2y$10$Lnz2sSemZ.mb05Sk1K.SSOBVKm5WTIw51P9a/LvfjrEy2YeOgZRcG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-04 07:45:31', '2023-12-04 07:45:31', NULL),
(5, 'tresno@gmail.com', 'tresno', '$2y$10$m38XYP4BogcIa/xfhvnfjOrIvo/2fWIRSuZexYduEIO1lQ5bpPBAa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-04 07:59:29', '2023-12-04 07:59:29', NULL),
(6, 'tresno21@gmail.com', 'Tresno1', '$2y$10$.8UUWfmTNNuHEcWeeh2km.vtbvHkh09OpJ1D6UVGDfve8YJme0zoy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-04 08:00:18', '2023-12-04 08:00:18', NULL),
(7, 'rahyudin123@gmail.com', 'rahyudin', '$2y$10$ATH1rNd2afx1U5AH6izTy.UZ2.pzVKJA/WrlQbIauoiB5tS0btSly', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-07 10:46:42', '2023-12-07 10:46:42', NULL),
(8, 'kepalabps123@gmail.com', 'rah', '$2y$10$cAKJc9uMltEGbGcgDixuROV7LNCpMgwR1sgwpxVXVvawqdNUOAhCu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-07 10:48:14', '2023-12-07 10:48:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kegiatan_mitra`
--
ALTER TABLE `kegiatan_mitra`
  ADD PRIMARY KEY (`id_kegiatan_mitra`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `nilai_kegiatan_mitra`
--
ALTER TABLE `nilai_kegiatan_mitra`
  ADD PRIMARY KEY (`id_nilai_kegiatan_mitra`);

--
-- Indexes for table `rating_kriteria`
--
ALTER TABLE `rating_kriteria`
  ADD PRIMARY KEY (`id_rating_kriteria`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `rekap_nilai_mitra`
--
ALTER TABLE `rekap_nilai_mitra`
  ADD PRIMARY KEY (`id_rekap_nilai_mitra`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kegiatan_mitra`
--
ALTER TABLE `kegiatan_mitra`
  MODIFY `id_kegiatan_mitra` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rating_kriteria`
--
ALTER TABLE `rating_kriteria`
  MODIFY `id_rating_kriteria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rating_kriteria`
--
ALTER TABLE `rating_kriteria`
  ADD CONSTRAINT `rating_kriteria_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `bobot_kriteria` (`kode`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
