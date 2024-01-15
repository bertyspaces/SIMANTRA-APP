-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 04:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(2, 'admin', ''),
(3, 'pml', ''),
(4, 'ipds', ''),
(6, 'kepala', 'menerima laporan');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(2, 2),
(3, 9),
(3, 10),
(3, 11),
(4, 12),
(4, 16),
(6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(70, '::1', 'pml123@gmail.com', 3, '2023-12-11 11:33:19', 1),
(71, '::1', 'pml123@gmail.com', 3, '2023-12-11 17:04:40', 1),
(72, '::1', 'admin123@gmail.com', 2, '2023-12-11 23:28:02', 1),
(73, '::1', 'pml123@gmail.com', 3, '2023-12-12 00:10:26', 1),
(74, '::1', 'pml123@gmail.com', 3, '2023-12-12 07:49:36', 1),
(75, '::1', 'admin123@gmail.com', 2, '2023-12-12 08:11:21', 1),
(76, '::1', 'pml123@gmail.com', 3, '2023-12-12 08:13:22', 1),
(77, '::1', 'admin123@gmail.com', 2, '2023-12-12 08:37:14', 1),
(78, '::1', 'pml123@gmail.com', 3, '2023-12-12 08:38:19', 1),
(79, '::1', 'pml123@gmail.com', 3, '2023-12-13 04:27:51', 1),
(80, '::1', 'pml', NULL, '2023-12-13 18:43:13', 0),
(81, '::1', 'pml123@gmail.com', 3, '2023-12-13 18:43:35', 1),
(82, '::1', 'admin', NULL, '2023-12-13 19:02:56', 0),
(83, '::1', 'admin123@gmail.com', 2, '2023-12-13 19:03:10', 1),
(84, '::1', 'pml123@gmail.com', 3, '2023-12-13 19:59:49', 1),
(85, '::1', 'admin123@gmail.com', 2, '2023-12-14 13:44:03', 1),
(86, '::1', 'admin123@gmail.com', 2, '2023-12-14 17:03:28', 1),
(87, '::1', 'tresno@gmail.com', 5, '2023-12-14 19:32:34', 1),
(88, '::1', 'pml123@gmail.com', 3, '2023-12-15 15:33:41', 1),
(89, '::1', 'ipds', NULL, '2023-12-15 15:34:27', 0),
(90, '::1', 'admin123@gmail.com', 2, '2023-12-15 15:34:41', 1),
(91, '::1', 'tresno@gmail.com', 5, '2023-12-15 15:35:48', 1),
(92, '::1', 'admin123@gmail.com', 2, '2023-12-15 15:36:10', 1),
(93, '::1', 'kepalabps123@gmail.com', 8, '2023-12-15 15:53:43', 1),
(94, '::1', 'tresno@gmail.com', 5, '2023-12-15 15:53:59', 1),
(95, '::1', 'admin123@gmail.com', 2, '2023-12-15 15:54:56', 1),
(96, '::1', 'tresno@gmail.com', 5, '2023-12-15 15:58:35', 1),
(97, '::1', 'pml123@gmail.com', 3, '2023-12-15 15:58:49', 1),
(98, '::1', 'admin123@gmail.com', 2, '2023-12-15 15:59:29', 1),
(99, '::1', 'pml123@gmail.com', 3, '2023-12-15 18:27:06', 1),
(100, '::1', 'admin', NULL, '2023-12-15 18:27:50', 0),
(101, '::1', 'pml123@gmail.com', 3, '2023-12-15 18:28:01', 1),
(102, '::1', 'admin123@gmail.com', 2, '2023-12-15 18:28:24', 1),
(103, '::1', 'pml123@gmail.com', 3, '2023-12-15 18:30:30', 1),
(104, '::1', 'admin123@gmail.com', 2, '2023-12-15 18:30:51', 1),
(105, '::1', 'tresno@gmail.com', 5, '2023-12-15 18:31:36', 1),
(106, '::1', 'admin123@gmail.com', 2, '2023-12-15 19:13:34', 1),
(107, '::1', 'tresno@gmail.com', 5, '2023-12-15 19:15:33', 1),
(108, '::1', 'admin123@gmail.com', 2, '2023-12-15 19:16:32', 1),
(109, '::1', 'admin', NULL, '2023-12-16 05:58:44', 0),
(110, '::1', 'admin', NULL, '2023-12-16 05:59:57', 0),
(111, '::1', 'admin123@gmail.com', 2, '2023-12-16 06:00:07', 1),
(112, '::1', 'pml123@gmail.com', 3, '2023-12-16 08:46:22', 1),
(113, '::1', 'admin123@gmail.com', 2, '2023-12-18 03:57:37', 1),
(114, '::1', 'admin123@gmail.com', 2, '2023-12-18 12:08:40', 1),
(115, '::1', 'admin', NULL, '2023-12-19 07:13:19', 0),
(116, '::1', 'admin123@gmail.com', 2, '2023-12-19 07:13:32', 1),
(117, '::1', 'pml123@gmail.com', 3, '2023-12-19 07:25:42', 1),
(118, '::1', 'pml123@gmail.com', 3, '2023-12-19 07:38:42', 1),
(119, '::1', 'admin123@gmail.com', 2, '2023-12-19 07:39:06', 1),
(120, '::1', 'lina123@gmail.com', 4, '2023-12-19 07:41:18', 1),
(121, '::1', 'admin123@gmail.com', 2, '2023-12-19 23:23:09', 1),
(122, '::1', 'pml123@gmail.com', 3, '2023-12-19 23:32:07', 1),
(123, '::1', 'tresno@gmail.com', 5, '2023-12-19 23:33:13', 1),
(124, '::1', 'lina123@gmail.com', 4, '2023-12-19 23:33:38', 1),
(125, '::1', 'admin123@gmail.com', 2, '2023-12-19 23:34:05', 1),
(126, '::1', 'admin123@gmail.com', 2, '2023-12-20 17:37:05', 1),
(127, '::1', 'tresno@gmail.com', 5, '2023-12-20 17:40:22', 1),
(128, '::1', 'admin123@gmail.com', 2, '2023-12-20 17:58:07', 1),
(129, '::1', 'admin123@gmail.com', 2, '2023-12-20 18:04:16', 1),
(130, '::1', 'admin123@gmail.com', 2, '2023-12-21 23:00:49', 1),
(131, '::1', 'admin123@gmail.com', 2, '2023-12-26 20:11:18', 1),
(132, '::1', 'pm', NULL, '2023-12-27 06:17:13', 0),
(133, '::1', 'asa', NULL, '2023-12-27 06:17:40', 0),
(134, '::1', 'pml', NULL, '2023-12-27 06:17:52', 0),
(135, '::1', 'admin`1', NULL, '2023-12-27 06:18:06', 0),
(136, '::1', 'admin123@gmail.com', 2, '2023-12-27 06:23:31', 1),
(137, '::1', 'admin123@gmail.com', 2, '2023-12-27 19:35:04', 1),
(138, '::1', 'pml123@gmail.com', 3, '2023-12-27 20:03:44', 1),
(139, '::1', 'admin123@gmail.com', 2, '2023-12-27 20:08:01', 1),
(140, '::1', 'rahyudin123@gmail.com', 7, '2023-12-27 21:47:15', 1),
(141, '::1', 'admin123@gmail.com', 2, '2023-12-27 21:51:49', 1),
(142, '::1', 'rah', NULL, '2023-12-27 21:52:13', 0),
(143, '::1', 'rah', NULL, '2023-12-27 21:52:21', 0),
(144, '::1', 'rah', NULL, '2023-12-27 21:52:30', 0),
(145, '::1', 'admin123@gmail.com', 2, '2023-12-27 21:52:37', 1),
(146, '::1', 'kepalabps123@gmail.com', 8, '2023-12-27 21:53:08', 1),
(147, '::1', 'admin123@gmail.com', 2, '2023-12-27 21:54:30', 1),
(148, '::1', 'pml123@gmail.com', 3, '2023-12-28 02:15:37', 1),
(149, '::1', 'admin123@gmail.com', 2, '2023-12-28 02:16:38', 1),
(150, '::1', 'pml123@gmail.com', 3, '2023-12-28 02:17:51', 1),
(151, '::1', 'pml123@gmail.com', 3, '2023-12-28 02:21:32', 1),
(152, '::1', 'admin123@gmail.com', 2, '2023-12-28 04:12:42', 1),
(153, '::1', 'deviayu253@gmail.com', 9, '2023-12-28 05:42:36', 1),
(154, '::1', 'admin123@gmail.com', 2, '2023-12-28 05:43:20', 1),
(155, '::1', 'ayulaila213@gmail.com', 12, '2023-12-28 07:01:52', 1),
(156, '::1', 'admin123@gmail.com', 2, '2023-12-28 07:05:07', 1),
(157, '::1', 'deviayu253@gmail.com', 9, '2023-12-28 07:08:09', 1),
(158, '::1', 'admin123@gmail.com', 2, '2023-12-28 07:08:57', 1),
(159, '::1', 'deviayu', NULL, '2023-12-29 00:08:34', 0),
(160, '::1', 'deviayu', NULL, '2023-12-29 00:08:44', 0),
(161, '::1', 'deviayu253@gmail.com', 9, '2023-12-29 00:08:51', 1),
(162, '::1', 'admin123@gmail.com', 2, '2023-12-29 00:09:34', 1),
(163, '::1', 'ayulaila213@gmail.com', 12, '2023-12-29 00:10:12', 1),
(164, '::1', 'admin123@gmail.com', 2, '2023-12-29 00:10:49', 1),
(165, '::1', 'sitibarokah123@gmail.com', 10, '2023-12-29 03:38:29', 1),
(166, '::1', 'admin123@gmail.com', 2, '2023-12-29 19:08:40', 1),
(167, '::1', 'deviayu253@gmail.com', 9, '2023-12-29 19:10:02', 1),
(168, '::1', 'ayulaila213@gmail.com', 12, '2023-12-29 19:11:09', 1),
(169, '::1', 'rahyudin23456@gmail.com', 13, '2023-12-29 19:11:52', 1),
(170, '::1', 'sitibarokah123@gmail.com', 10, '2023-12-29 19:45:00', 1),
(171, '::1', 'admin', NULL, '2023-12-29 19:47:17', 0),
(172, '::1', 'admin123@gmail.com', 2, '2023-12-29 19:47:31', 1),
(173, '::1', 'ayulaila213@gmail.com', 12, '2024-01-01 21:36:52', 1),
(174, '::1', 'admin123@gmail.com', 2, '2024-01-01 21:38:18', 1),
(175, '::1', 'pml', NULL, '2024-01-01 22:34:27', 0),
(176, '::1', 'sitibarokah123@gmail.com', 10, '2024-01-01 22:34:39', 1),
(177, '::1', 'admin123@gmail.com', 2, '2024-01-01 22:40:15', 1),
(178, '::1', 'deviayu253@gmail.com', 9, '2024-01-01 22:40:41', 1),
(179, '::1', 'ayulaila', NULL, '2024-01-01 22:47:12', 0),
(180, '::1', 'ayulaila213@gmail.com', 12, '2024-01-01 22:47:19', 1),
(181, '::1', 'admin123@gmail.com', 2, '2024-01-01 22:55:59', 1),
(182, '::1', 'rahyudin23456@gmail.com', 13, '2024-01-01 23:06:57', 1),
(183, '::1', 'admin123@gmail.com', 2, '2024-01-01 23:09:04', 1),
(184, '::1', 'rahyudin', NULL, '2024-01-01 23:09:35', 0),
(185, '::1', 'rahyudin23456@gmail.com', 13, '2024-01-01 23:09:48', 1),
(186, '::1', 'admin123@gmail.com', 2, '2024-01-01 23:12:54', 1),
(187, '::1', 'udin@gmail.com', 14, '2024-01-01 23:13:38', 1),
(188, '::1', 'ayulaila213@gmail.com', 12, '2024-01-01 23:16:23', 1),
(189, '::1', 'udin@gmail.com', 14, '2024-01-01 23:16:56', 1),
(190, '::1', 'admin123@gmail.com', 2, '2024-01-01 23:17:38', 1),
(191, '::1', 'udin@gmail.com', 14, '2024-01-01 23:19:29', 1),
(192, '::1', 'admin', NULL, '2024-01-01 23:20:53', 0),
(193, '::1', 'admin123@gmail.com', 2, '2024-01-01 23:21:00', 1),
(194, '::1', 'udin@gmail.com', 14, '2024-01-01 23:21:40', 1),
(195, '::1', 'deviayu253@gmail.com', 9, '2024-01-01 23:23:21', 1),
(196, '::1', 'rahyudin23456@gmail.com', 13, '2024-01-01 23:23:38', 1),
(197, '::1', 'rahyudin23456@gmail.com', 13, '2024-01-01 23:27:46', 1),
(198, '::1', 'admin123@gmail.com', 2, '2024-01-01 23:28:16', 1),
(199, '::1', 'udin@gmail.com', 14, '2024-01-01 23:30:14', 1),
(200, '::1', 'rahyudin@gmail.com', 15, '2024-01-01 23:32:10', 1),
(201, '::1', 'admin123@gmail.com', 2, '2024-01-01 23:34:34', 1),
(202, '::1', 'rahyudin@gmail.com', 15, '2024-01-01 23:35:45', 1),
(203, '::1', 'admin123@gmail.com', 2, '2024-01-01 23:53:36', 1),
(204, '::1', 'rahyudin@gmail.com', 15, '2024-01-01 23:58:20', 1),
(205, '::1', 'admin123@gmail.com', 2, '2024-01-02 02:19:42', 1),
(206, '::1', 'admin123@gmail.com', 2, '2024-01-02 05:01:02', 1),
(207, '::1', 'deviayu', NULL, '2024-01-02 05:47:39', 0),
(208, '::1', 'deviayu253@gmail.com', 9, '2024-01-02 05:47:51', 1),
(209, '::1', 'ayulaila213@gmail.com', 12, '2024-01-02 05:51:12', 1),
(210, '::1', 'rahyudin@gmail.com', 15, '2024-01-02 06:00:03', 1),
(211, '::1', 'rahyudin@gmail.com', 15, '2024-01-02 07:26:41', 1),
(212, '::1', 'admin123@gmail.com', 2, '2024-01-02 07:31:48', 1),
(213, '::1', 'deviayu253@gmail.com', 9, '2024-01-02 07:32:08', 1),
(214, '::1', 'admin123@gmail.com', 2, '2024-01-02 07:33:03', 1),
(215, '::1', 'rahyudin@gmail.com', 15, '2024-01-02 07:34:47', 1),
(216, '::1', 'admin123@gmail.com', 2, '2024-01-02 17:39:25', 1),
(217, '::1', 'noviyanti456@gmail.com', 11, '2024-01-02 17:50:23', 1),
(218, '::1', 'sitibarkah', NULL, '2024-01-02 17:52:31', 0),
(219, '::1', 'sitibarkah', NULL, '2024-01-02 17:52:38', 0),
(220, '::1', 'sitibarokah123@gmail.com', 10, '2024-01-02 17:52:50', 1),
(221, '::1', 'noviyanti456@gmail.com', 11, '2024-01-02 17:55:30', 1),
(222, '::1', 'admin123@gmail.com', 2, '2024-01-02 17:56:16', 1),
(223, '::1', 'deviayu', NULL, '2024-01-02 18:15:19', 0),
(224, '::1', 'deviayu253@gmail.com', 9, '2024-01-02 18:15:26', 1),
(225, '::1', 'sitibarokah123@gmail.com', 10, '2024-01-02 18:17:36', 1),
(226, '::1', 'noviyanti', NULL, '2024-01-02 18:18:39', 0),
(227, '::1', 'noviyanti456@gmail.com', 11, '2024-01-02 18:18:54', 1),
(228, '::1', 'admin123@gmail.com', 2, '2024-01-02 19:12:04', 1),
(229, '::1', 'deviayu253@gmail.com', 9, '2024-01-02 19:13:21', 1),
(230, '::1', 'admin123@gmail.com', 2, '2024-01-02 19:31:56', 1),
(231, '::1', 'deviayu253@gmail.com', 9, '2024-01-02 19:36:33', 1),
(232, '::1', 'sitibarokah', NULL, '2024-01-02 19:38:35', 0),
(233, '::1', 'sitibarokah123@gmail.com', 10, '2024-01-02 19:38:42', 1),
(234, '::1', 'noviyanti456@gmail.com', 11, '2024-01-02 19:40:16', 1),
(235, '::1', 'rahyudin@gmail.com', 15, '2024-01-02 19:44:12', 1),
(236, '::1', 'admin123@gmail.com', 2, '2024-01-02 20:46:06', 1),
(237, '::1', 'sitibarokah123@gmail.com', 10, '2024-01-02 22:23:11', 1),
(238, '::1', 'admin123@gmail.com', 2, '2024-01-03 18:40:25', 1),
(239, '::1', 'deviayu', NULL, '2024-01-03 18:46:51', 0),
(240, '::1', 'deviayu253@gmail.com', 9, '2024-01-03 18:46:57', 1),
(241, '::1', 'rahyudin@gmail.com', 15, '2024-01-03 18:52:18', 1),
(242, '::1', 'admin123@gmail.com', 2, '2024-01-03 18:59:15', 1),
(243, '::1', 'rahyudin@gmail.com', 15, '2024-01-03 19:44:57', 1),
(244, '::1', 'admin123@gmail.com', 2, '2024-01-03 19:49:05', 1),
(245, '::1', 'admin', NULL, '2024-01-04 11:26:08', 0),
(246, '::1', 'admin123@gmail.com', 2, '2024-01-04 11:27:28', 1),
(247, '::1', 'admin123@gmail.com', 2, '2024-01-04 22:09:03', 1),
(248, '::1', 'deviayu253@gmail.com', 9, '2024-01-04 22:10:09', 1),
(249, '::1', 'sitibarokah123@gmail.com', 10, '2024-01-04 22:12:07', 1),
(250, '::1', 'noviyanti456@gmail.com', 11, '2024-01-04 22:13:49', 1),
(251, '::1', 'admin123@gmail.com', 2, '2024-01-04 22:15:20', 1),
(252, '::1', 'admin123@gmail.com', 2, '2024-01-05 01:23:53', 1),
(253, '::1', 'admin', NULL, '2024-01-05 17:23:54', 0),
(254, '::1', 'admin123@gmail.com', 2, '2024-01-05 17:24:02', 1),
(255, '::1', 'admin123@gmail.com', 2, '2024-01-06 19:30:28', 1),
(256, '::1', 'admin123@gmail.com', 2, '2024-01-07 09:23:44', 1),
(257, '::1', 'deviayu253@gmail.com', 9, '2024-01-07 10:29:19', 1),
(258, '::1', 'ayulaila', NULL, '2024-01-07 11:02:49', 0),
(259, '::1', 'ayulaila213@gmail.com', 12, '2024-01-07 11:03:04', 1),
(260, '::1', 'rahyudin@gmail.com', 15, '2024-01-07 13:08:03', 1),
(261, '::1', 'admin123@gmail.com', 2, '2024-01-07 13:24:11', 1),
(262, '::1', 'rahyudin@gmail.com', 15, '2024-01-07 13:24:52', 1),
(263, '::1', 'admin123@gmail.com', 2, '2024-01-08 05:37:45', 1),
(264, '::1', 'ayulaila', NULL, '2024-01-08 05:38:18', 0),
(265, '::1', 'ayulaila213@gmail.com', 12, '2024-01-08 05:38:28', 1),
(266, '::1', 'rahyudin@gmail.com', 15, '2024-01-08 06:38:42', 1),
(267, '::1', 'ayulaila213@gmail.com', 12, '2024-01-09 22:38:33', 1),
(268, '::1', 'ayulaila213@gmail.com', 12, '2024-01-10 03:24:42', 1),
(269, '::1', 'ayulaila213@gmail.com', 12, '2024-01-10 03:24:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bobot_kriteria`
--

CREATE TABLE `bobot_kriteria` (
  `kode` varchar(10) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `periode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `divisi`, `periode`) VALUES
(3, 'SAKERNAS ', 'Statisi Sosial ', 'Agustus 2022'),
(4, 'Survei IMK Tahunan', 'Statisi Produksi ', 'Januari 2022'),
(9, 'Regsosek ', 'Statisi Produksi ', 'November 2022'),
(10, 'SUSENAS', 'Statisi Sosial', 'Maret 2022'),
(11, 'Pengolahan Updating Sakernas Agustus', 'Nerwilis', 'Agustus 2023');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_mitra`
--

CREATE TABLE `kegiatan_mitra` (
  `id_kegiatan_mitra` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `status` enum('belum dinilai','dinilai') NOT NULL DEFAULT 'belum dinilai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan_mitra`
--

INSERT INTO `kegiatan_mitra` (`id_kegiatan_mitra`, `nik`, `id_kegiatan`, `id_user`, `kategori`, `status`) VALUES
(22, '332616362900', 2, 3, 'lapangan', 'dinilai'),
(23, '454636363', 2, 3, 'lapangan', 'dinilai'),
(24, '111', 2, 3, 'lapangan', 'dinilai'),
(33, '3326163620004', 2, 3, 'lapangan', 'belum dinilai'),
(57, '3326160401980021', 3, 12, 'pengolahan', 'dinilai'),
(58, '3375020708010003', 3, 12, 'pengolahan', 'dinilai'),
(59, '3375042906000006', 3, 12, 'pengolahan', 'dinilai'),
(60, '3375024305980003', 3, 12, 'pengolahan', 'belum dinilai'),
(61, '3325116304960001', 3, 12, 'pengolahan', 'belum dinilai'),
(62, '3375046706860007', 3, 12, 'pengolahan', 'belum dinilai'),
(63, '3375010804990005', 3, 12, 'pengolahan', 'dinilai'),
(64, '3327082004940086', 3, 12, 'pengolahan', 'belum dinilai'),
(65, '3375015506970012', 3, 12, 'pengolahan', 'belum dinilai'),
(66, '3375015805010005', 3, 12, 'pengolahan', 'belum dinilai'),
(67, '3375016908020008', 3, 12, 'pengolahan', 'belum dinilai'),
(93, '3375017011800004', 3, 9, 'lapangan', 'dinilai'),
(94, '3301222910980005', 2, 9, 'lapangan', 'dinilai'),
(95, '3375017011800004', 2, 9, 'lapangan', 'dinilai'),
(96, '3375016905790002', 2, 9, 'lapangan', 'dinilai'),
(97, '3375015405950001', 2, 9, 'lapangan', 'dinilai'),
(98, '3375022203750004', 2, 10, 'lapangan', 'dinilai'),
(99, '3375035510960005', 2, 10, 'lapangan', 'dinilai'),
(100, '3375045005770008', 2, 10, 'lapangan', 'dinilai'),
(101, '3375047004990010', 2, 10, 'lapangan', 'dinilai'),
(102, '3375025311890005', 2, 11, 'lapangan', 'dinilai'),
(103, '3375012005740004', 2, 11, 'lapangan', 'dinilai'),
(104, '3375046411940003', 2, 11, 'lapangan', 'dinilai'),
(105, '3375046607940004', 2, 11, 'lapangan', 'dinilai'),
(106, '3301222910980005', 9, 9, 'lapangan', 'dinilai'),
(107, '3375017011800004', 9, 9, 'lapangan', 'dinilai'),
(108, '3375016905790002', 9, 9, 'lapangan', 'dinilai'),
(109, '3375015405950001', 9, 9, 'lapangan', 'dinilai'),
(110, '3375022203750004', 9, 10, 'lapangan', 'dinilai'),
(111, '3375035510960005', 9, 10, 'lapangan', 'dinilai'),
(112, '3375045005770008', 9, 10, 'lapangan', 'dinilai'),
(113, '3375047004990010', 9, 10, 'lapangan', 'dinilai'),
(114, '3375025311890005', 9, 10, 'lapangan', 'dinilai'),
(115, '3375012005740004', 9, 11, 'lapangan', 'dinilai'),
(116, '3375046411940003', 9, 11, 'lapangan', 'dinilai'),
(117, '3375046607940004', 9, 11, 'lapangan', 'dinilai'),
(118, '3375015405950001', 3, 12, 'pengolahan', 'belum dinilai');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `nik` char(16) NOT NULL,
  `nama_mitra` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` char(5) NOT NULL,
  `pendidikan` enum('SMA/SMK','DI/DII/DIII','S1') NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`nik`, `nama_mitra`, `jenis_kelamin`, `tanggal_lahir`, `umur`, `pendidikan`, `email`) VALUES
('3301222910980005', 'Aurel Aulia Yaumil islah', 'Perempuan', '1998-10-29', '22', 'SMA/SMK', 'auliaalfatih5@gmail.com'),
('3325116304960001', 'Anggun Prasiwi', 'Perempuan', '1996-04-23', '27', 'S1', 'anggun.prasiwi04@gmail.com'),
('3326160401980021', 'Abdullah Azam', 'Laki-Laki', '1998-01-04', '25', 'DI/DII/DIII', 'abdullah123.azam@gmail.com'),
('3327082004940086', 'Detya Indrawan', 'Laki-Laki', '1994-04-20', '29', 'S1', 'detyaindrawan@gmail.com'),
('3375010804990005', 'DENDY ALVI SAPUTRA', 'Laki-Laki', '1999-04-08', '24', 'S1', 'dendyalvis@gmail.com'),
('3375012005740004', 'Subur Prayono', 'Laki-Laki', '1974-05-20', '49', 'SMA/SMK', 'Suburprayono2@gmail.com'),
('3375015405950001', 'Dwi Listianingrum', 'Perempuan', '1995-05-14', '28', 'S1', 'dwilistianewrum@gmail.com'),
('3375015506970012', 'Elfrida Fajriati Kusumawardhani Rokhmat', 'Perempuan', '1997-06-15', '26', 'S1', 'kusumawardhanie15@gmail.com'),
('3375015805010005', 'Erina Khairunnisa', 'Perempuan', '2001-05-18', '22', 'SMA/SMK', 'erina9f06@gmail.com'),
('3375016905790002', 'CHAMIDAH', 'Perempuan', '1979-05-29', '44', 'SMA/SMK', 'maddasab01@gmail.com'),
('3375016908020008', 'Farah Amalia', 'Perempuan', '2002-08-29', '21', 'SMA/SMK', 'farahamaliaaa08@gmail.com'),
('3375017011800004', 'Barkah', 'Perempuan', '1980-11-30', '43', 'DI/DII/DIII', 'akuhngangeni@gmail.com'),
('3375020708010003', 'Adnan Yakub', 'Laki-Laki', '2001-08-07', '22', 'SMA/SMK', 'adnanyakub03@gmail.com'),
('3375022203750004', 'Hasan Basri', 'Laki-Laki', '1975-03-22', '48', 'SMA/SMK', 'hb220375@gmail.com'),
('3375024305980003', 'Andrihasti Citra Nandini', 'Perempuan', '1998-05-03', '25', 'S1', 'andrihasti.citra98@gmail.com'),
('3375025311890005', 'Sri indah rahajeng', 'Perempuan', '1989-11-13', '34', 'DI/DII/DIII', 'jeng.arien@gmail.com'),
('3375035510960005', 'Nanda Sofiana', 'Perempuan', '1996-10-15', '27', 'SMA/SMK', 'nandasofiana696@gmail.com'),
('3375042906000006', 'AFIF GUSWANTO', 'Laki-Laki', '2000-06-29', '23', 'S1', 'afifgswnt@gmail.com'),
('3375045005770008', 'Nur Khusna', 'Perempuan', '1977-05-10', '46', 'SMA/SMK', 'n41294452@gmail.com'),
('3375046411940003', 'Ulfa bariroh', 'Perempuan', '1994-11-24', '29', 'S1', 'ulfabariroh7@gmail.com'),
('3375046607940004', 'Yuliana Himatul Ulya', 'Perempuan', '1994-07-26', '29', 'S1', 'ulya.yuliana@gmail.com'),
('3375046706860007', 'Anita Nur Eka Sari', 'Perempuan', '1986-06-27', '37', 'SMA/SMK', 'nesanita27@gmail.com'),
('3375047004990010', 'RISKI APRILIANI', 'Perempuan', '1999-04-30', '24', 'DI/DII/DIII', 'riski.april52@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kegiatan_mitra`
--

CREATE TABLE `nilai_kegiatan_mitra` (
  `id_nilai_kegiatan_mitra` int(11) NOT NULL,
  `id_kegiatan_mitra` int(11) NOT NULL,
  `id_rating_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_kegiatan_mitra`
--

INSERT INTO `nilai_kegiatan_mitra` (`id_nilai_kegiatan_mitra`, `id_kegiatan_mitra`, `id_rating_kriteria`) VALUES
(15, 16, 15),
(16, 16, 20),
(17, 16, 21),
(18, 16, 12),
(19, 16, 19),
(20, 16, 24),
(21, 16, 12),
(22, 16, 19),
(23, 16, 24),
(24, 23, 15),
(25, 23, 20),
(26, 23, 25),
(27, 22, 15),
(28, 22, 20),
(29, 22, 25),
(30, 24, 13),
(40, 26, 20),
(41, 26, 25),
(42, 27, 14),
(43, 27, 20),
(44, 27, 23),
(45, 29, 15),
(46, 29, 19),
(47, 29, 25),
(48, 30, 14),
(49, 30, 20),
(50, 30, 24),
(55, 31, 15),
(56, 31, 19),
(57, 31, 23),
(58, 57, 15),
(59, 57, 19),
(60, 57, 24),
(61, 58, 15),
(62, 58, 19),
(63, 58, 23),
(64, 34, 15),
(65, 34, 19),
(66, 34, 25),
(67, 35, 14),
(68, 35, 20),
(69, 35, 23),
(70, 36, 15),
(71, 36, 20),
(72, 36, 22),
(73, 63, 15),
(74, 63, 19),
(75, 63, 25),
(76, 37, 15),
(77, 37, 19),
(78, 37, 24),
(79, 34, 23),
(80, 34, 13),
(81, 34, 19),
(82, 34, 23),
(83, 34, 13),
(84, 34, 19),
(85, 42, 25),
(86, 42, 15),
(87, 42, 20),
(88, 35, 24),
(89, 35, 14),
(90, 35, 20),
(91, 37, 23),
(92, 37, 13),
(93, 37, 18),
(94, 39, 24),
(95, 39, 14),
(96, 39, 20),
(97, 40, 14),
(98, 40, 19),
(99, 40, 24),
(100, 41, 14),
(101, 41, 19),
(102, 41, 25),
(103, 81, 23),
(104, 81, 13),
(105, 81, 19),
(106, 82, 25),
(107, 82, 14),
(108, 82, 20),
(109, 83, 24),
(110, 83, 14),
(111, 83, 20),
(112, 84, 23),
(113, 84, 13),
(114, 84, 18),
(115, 85, 14),
(116, 85, 19),
(117, 85, 25),
(118, 86, 14),
(119, 86, 19),
(120, 86, 24),
(121, 87, 14),
(122, 87, 19),
(123, 87, 25),
(124, 88, 15),
(125, 88, 19),
(126, 88, 24),
(127, 89, 14),
(128, 89, 20),
(129, 89, 24),
(130, 90, 14),
(131, 90, 19),
(132, 90, 25),
(133, 91, 14),
(134, 91, 19),
(135, 91, 25),
(136, 92, 14),
(137, 92, 19),
(138, 92, 24),
(139, 93, 15),
(140, 93, 18),
(141, 93, 25),
(142, 94, 13),
(143, 94, 18),
(144, 94, 24),
(145, 95, 15),
(146, 95, 19),
(147, 95, 25),
(148, 96, 14),
(149, 96, 19),
(150, 96, 25),
(151, 97, 13),
(152, 97, 18),
(153, 97, 23),
(154, 98, 14),
(155, 98, 19),
(156, 98, 24),
(157, 99, 14),
(158, 99, 19),
(159, 99, 25),
(160, 100, 14),
(161, 100, 19),
(162, 100, 24),
(163, 101, 14),
(164, 101, 19),
(165, 101, 25),
(166, 102, 15),
(167, 102, 19),
(168, 102, 24),
(169, 103, 14),
(170, 103, 20),
(171, 103, 24),
(172, 104, 14),
(173, 104, 19),
(174, 104, 25),
(175, 105, 14),
(176, 105, 19),
(177, 105, 25),
(178, 106, 13),
(179, 106, 18),
(180, 106, 24),
(181, 107, 15),
(182, 107, 19),
(183, 107, 25),
(184, 108, 14),
(185, 108, 19),
(186, 108, 25),
(187, 109, 13),
(188, 109, 18),
(189, 109, 23),
(190, 110, 14),
(191, 110, 19),
(192, 110, 24),
(193, 111, 14),
(194, 111, 19),
(195, 111, 25),
(196, 112, 24),
(197, 112, 14),
(198, 112, 19),
(199, 113, 24),
(200, 113, 14),
(201, 113, 20),
(202, 114, 25),
(203, 114, 14),
(204, 114, 19),
(205, 115, 24),
(206, 115, 15),
(207, 115, 19),
(208, 116, 24),
(209, 116, 14),
(210, 116, 20),
(211, 117, 24),
(212, 117, 14),
(213, 117, 20),
(214, 59, 25),
(215, 59, 14),
(216, 59, 18);

-- --------------------------------------------------------

--
-- Table structure for table `rating_kriteria`
--

CREATE TABLE `rating_kriteria` (
  `id_rating_kriteria` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `bobot` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'admin123@gmail.com', 'admin', '$2y$10$HnjJgyL2qlUdzQGcNX9J/OFdQuSOqqqmb4uGgojtgKEmlRkpYi8eW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-11-10 16:56:10', '2023-11-10 16:56:10', NULL),
(9, 'deviayu253@gmail.com', 'deviayu', '$2y$10$Bdwj0ySVCYoLFGgdug8FreXgFaDycm/Lb7hMOLbxHny/6eRctAlaW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-28 05:39:46', '2023-12-28 05:39:46', NULL),
(10, 'sitibarokah123@gmail.com', 'sitibarokah', '$2y$10$z06YJRwJlEDY0eykfdWZwuTQuv21Z.oJYvKaqJdC4C2EcAjVvorqe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-28 05:40:50', '2023-12-28 05:40:50', NULL),
(11, 'noviyanti456@gmail.com', 'noviyanti', '$2y$10$RTScizKndNixF69d1Gg9hOEg2UoH9NQtxur0gLdW26YSDWugqoBT2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-28 05:44:12', '2023-12-28 05:44:12', NULL),
(12, 'ayulaila213@gmail.com', 'ayulaila', '$2y$10$Tn8pzTZ/rNJ8Y1YB1C4xm.c1bRVE6UESUVYSQMN4JrVyM7ChfgJtq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-28 05:45:14', '2023-12-28 05:45:14', NULL),
(15, 'rahyudin@gmail.com', 'rahyudin', '$2y$10$.es5K9MtiXuEgNL5nFFkJOLiXyAWNyOE.UebJH.vnLRM4aUvop1bS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-01-01 23:31:49', '2024-01-01 23:31:49', NULL),
(16, 'tresno@gmail.com', 'tresno', '$2y$10$RKorlsQZYr4WFbzuU1qIRuohc1sKLkWHxTExijJCPz/3WlxqFkiNa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-01-03 21:11:52', '2024-01-04 22:45:57', NULL);

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
  ADD PRIMARY KEY (`id_nilai_kegiatan_mitra`),
  ADD KEY `id_kegiatan_mitra` (`id_kegiatan_mitra`);

--
-- Indexes for table `rating_kriteria`
--
ALTER TABLE `rating_kriteria`
  ADD PRIMARY KEY (`id_rating_kriteria`),
  ADD KEY `kode` (`kode`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kegiatan_mitra`
--
ALTER TABLE `kegiatan_mitra`
  MODIFY `id_kegiatan_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nilai_kegiatan_mitra`
--
ALTER TABLE `nilai_kegiatan_mitra`
  MODIFY `id_nilai_kegiatan_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `rating_kriteria`
--
ALTER TABLE `rating_kriteria`
  MODIFY `id_rating_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  ADD CONSTRAINT `rating_kriteria_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `bobot_kriteria` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
