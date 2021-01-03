-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 06:49 AM
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
-- Database: `project-5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noimage.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_super_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`, `is_super_admin`) VALUES
(1, 'Laith', 'laithalenooz@gmail.com', NULL, 'Flamepeople7', '1609649146.jpg', NULL, NULL, '2021-01-03 02:45:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_image`, `created_at`, `updated_at`) VALUES
(4, 'Pasta-Noodles', '1609652817.jpg', '2021-01-02 14:36:58', '2021-01-03 03:46:57'),
(8, 'Juice', '1609605749.jpg', '2021-01-02 14:42:29', '2021-01-02 14:42:29'),
(10, 'Quarantine Cooking', '1609606183.jpg', '2021-01-02 14:49:43', '2021-01-02 14:49:43'),
(11, 'Chicken', '1609606313.jpg', '2021-01-02 14:51:53', '2021-01-02 14:52:21'),
(12, 'Air Fryer', '1609652831.jpg', '2021-01-02 14:53:30', '2021-01-03 03:47:11'),
(15, 'BREAKFAST', '1609606696.png', '2021-01-02 14:58:16', '2021-01-02 14:58:16'),
(16, 'Dessert', '1609606815.jpg', '2021-01-02 15:00:15', '2021-01-02 15:00:15'),
(17, 'Salad', '1609606996.jpg', '2021-01-02 15:03:16', '2021-01-02 15:03:16'),
(19, 'Junk food', '1609636207.jpg', '2021-01-02 15:11:19', '2021-01-02 23:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` int(10) UNSIGNED NOT NULL,
  `leader_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `follower_id`, `leader_id`, `created_at`, `updated_at`) VALUES
(11, 12, 2, '2021-01-02 22:12:19', '2021-01-02 22:12:19'),
(12, 12, 1, '2021-01-02 22:23:56', '2021-01-02 22:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(37, 1, 5, '2021-01-02 22:06:24', '2021-01-02 22:06:24'),
(38, 1, 5, '2021-01-02 22:06:27', '2021-01-02 22:06:27'),
(39, 1, 5, '2021-01-02 22:06:27', '2021-01-02 22:06:27'),
(40, 1, 5, '2021-01-02 22:06:30', '2021-01-02 22:06:30'),
(41, 1, 5, '2021-01-02 22:06:33', '2021-01-02 22:06:33'),
(42, 1, 5, '2021-01-02 22:06:36', '2021-01-02 22:06:36'),
(43, 1, 5, '2021-01-02 22:06:46', '2021-01-02 22:06:46'),
(44, 1, 1, '2021-01-02 22:23:46', '2021-01-02 22:23:46'),
(45, 5, 7, '2021-01-02 22:24:46', '2021-01-02 22:24:46'),
(46, 5, 7, '2021-01-02 22:24:50', '2021-01-02 22:24:50'),
(47, 5, 7, '2021-01-02 22:24:53', '2021-01-02 22:24:53'),
(48, 5, 7, '2021-01-02 22:24:53', '2021-01-02 22:24:53'),
(49, 5, 7, '2021-01-02 22:24:54', '2021-01-02 22:24:54'),
(50, 1, 3, '2021-01-03 01:02:30', '2021-01-03 01:02:30'),
(51, 1, 3, '2021-01-03 01:02:30', '2021-01-03 01:02:30'),
(52, 1, 1, '2021-01-03 01:02:32', '2021-01-03 01:02:32'),
(53, 1, 1, '2021-01-03 01:02:32', '2021-01-03 01:02:32'),
(54, 1, 1, '2021-01-03 01:02:32', '2021-01-03 01:02:32'),
(55, 1, 1, '2021-01-03 01:02:32', '2021-01-03 01:02:32'),
(56, 1, 1, '2021-01-03 01:02:33', '2021-01-03 01:02:33'),
(57, 1, 1, '2021-01-03 01:02:33', '2021-01-03 01:02:33'),
(58, 1, 1, '2021-01-03 01:02:33', '2021-01-03 01:02:33'),
(59, 1, 1, '2021-01-03 01:02:35', '2021-01-03 01:02:35'),
(60, 1, 1, '2021-01-03 01:02:36', '2021-01-03 01:02:36'),
(61, 1, 1, '2021-01-03 01:02:36', '2021-01-03 01:02:36'),
(62, 1, 1, '2021-01-03 01:02:36', '2021-01-03 01:02:36'),
(63, 1, 1, '2021-01-03 01:02:36', '2021-01-03 01:02:36'),
(64, 1, 1, '2021-01-03 01:02:36', '2021-01-03 01:02:36'),
(65, 1, 1, '2021-01-03 01:02:37', '2021-01-03 01:02:37'),
(66, 1, 1, '2021-01-03 01:02:37', '2021-01-03 01:02:37'),
(67, 1, 1, '2021-01-03 01:02:37', '2021-01-03 01:02:37'),
(68, 1, 1, '2021-01-03 01:02:37', '2021-01-03 01:02:37'),
(69, 1, 1, '2021-01-03 01:02:37', '2021-01-03 01:02:37'),
(70, 1, 1, '2021-01-03 01:02:37', '2021-01-03 01:02:37'),
(71, 1, 1, '2021-01-03 01:02:38', '2021-01-03 01:02:38'),
(72, 1, 1, '2021-01-03 01:02:38', '2021-01-03 01:02:38'),
(73, 1, 1, '2021-01-03 01:02:38', '2021-01-03 01:02:38'),
(74, 1, 1, '2021-01-03 01:02:38', '2021-01-03 01:02:38'),
(75, 1, 1, '2021-01-03 01:02:38', '2021-01-03 01:02:38'),
(76, 1, 1, '2021-01-03 01:02:38', '2021-01-03 01:02:38'),
(77, 1, 1, '2021-01-03 01:02:39', '2021-01-03 01:02:39'),
(78, 1, 1, '2021-01-03 01:02:39', '2021-01-03 01:02:39'),
(79, 1, 1, '2021-01-03 01:02:39', '2021-01-03 01:02:39'),
(80, 1, 1, '2021-01-03 01:02:39', '2021-01-03 01:02:39'),
(81, 1, 1, '2021-01-03 01:02:39', '2021-01-03 01:02:39'),
(82, 1, 1, '2021-01-03 01:02:39', '2021-01-03 01:02:39'),
(83, 1, 1, '2021-01-03 01:02:40', '2021-01-03 01:02:40'),
(84, 1, 1, '2021-01-03 01:02:40', '2021-01-03 01:02:40'),
(85, 1, 3, '2021-01-03 01:02:45', '2021-01-03 01:02:45'),
(86, 1, 3, '2021-01-03 01:02:45', '2021-01-03 01:02:45'),
(87, 1, 3, '2021-01-03 01:02:45', '2021-01-03 01:02:45'),
(88, 1, 3, '2021-01-03 01:02:45', '2021-01-03 01:02:45'),
(89, 1, 3, '2021-01-03 01:02:45', '2021-01-03 01:02:45'),
(90, 1, 3, '2021-01-03 01:02:46', '2021-01-03 01:02:46'),
(91, 1, 3, '2021-01-03 01:02:46', '2021-01-03 01:02:46'),
(92, 1, 3, '2021-01-03 01:02:46', '2021-01-03 01:02:46'),
(93, 1, 3, '2021-01-03 01:02:46', '2021-01-03 01:02:46'),
(94, 1, 3, '2021-01-03 01:02:47', '2021-01-03 01:02:47'),
(95, 1, 3, '2021-01-03 01:02:47', '2021-01-03 01:02:47'),
(96, 1, 3, '2021-01-03 01:02:47', '2021-01-03 01:02:47'),
(97, 1, 3, '2021-01-03 01:02:47', '2021-01-03 01:02:47'),
(98, 1, 3, '2021-01-03 01:02:48', '2021-01-03 01:02:48'),
(99, 1, 3, '2021-01-03 01:02:48', '2021-01-03 01:02:48'),
(100, 1, 3, '2021-01-03 01:02:48', '2021-01-03 01:02:48'),
(101, 1, 3, '2021-01-03 01:02:48', '2021-01-03 01:02:48'),
(102, 1, 3, '2021-01-03 01:02:49', '2021-01-03 01:02:49'),
(103, 1, 3, '2021-01-03 01:02:49', '2021-01-03 01:02:49'),
(104, 1, 3, '2021-01-03 01:02:49', '2021-01-03 01:02:49'),
(105, 1, 3, '2021-01-03 01:02:49', '2021-01-03 01:02:49'),
(106, 1, 3, '2021-01-03 01:02:49', '2021-01-03 01:02:49'),
(107, 1, 3, '2021-01-03 01:02:50', '2021-01-03 01:02:50'),
(108, 1, 3, '2021-01-03 01:02:50', '2021-01-03 01:02:50'),
(109, 1, 3, '2021-01-03 01:02:50', '2021-01-03 01:02:50'),
(110, 1, 3, '2021-01-03 01:02:50', '2021-01-03 01:02:50'),
(111, 1, 3, '2021-01-03 01:02:50', '2021-01-03 01:02:50'),
(112, 1, 3, '2021-01-03 01:02:50', '2021-01-03 01:02:50'),
(113, 1, 3, '2021-01-03 01:02:51', '2021-01-03 01:02:51'),
(114, 1, 3, '2021-01-03 01:02:51', '2021-01-03 01:02:51'),
(115, 1, 3, '2021-01-03 01:02:51', '2021-01-03 01:02:51'),
(116, 1, 3, '2021-01-03 01:02:51', '2021-01-03 01:02:51'),
(117, 1, 3, '2021-01-03 01:02:51', '2021-01-03 01:02:51'),
(118, 1, 3, '2021-01-03 01:02:51', '2021-01-03 01:02:51'),
(119, 1, 3, '2021-01-03 01:02:52', '2021-01-03 01:02:52'),
(120, 1, 3, '2021-01-03 01:02:52', '2021-01-03 01:02:52'),
(121, 1, 3, '2021-01-03 01:02:52', '2021-01-03 01:02:52'),
(122, 1, 3, '2021-01-03 01:02:52', '2021-01-03 01:02:52'),
(123, 1, 1, '2021-01-03 01:02:58', '2021-01-03 01:02:58'),
(124, 1, 1, '2021-01-03 01:02:58', '2021-01-03 01:02:58'),
(125, 1, 1, '2021-01-03 01:02:58', '2021-01-03 01:02:58'),
(126, 1, 1, '2021-01-03 01:02:58', '2021-01-03 01:02:58'),
(127, 1, 1, '2021-01-03 01:02:59', '2021-01-03 01:02:59'),
(128, 1, 1, '2021-01-03 01:02:59', '2021-01-03 01:02:59'),
(129, 1, 1, '2021-01-03 01:02:59', '2021-01-03 01:02:59'),
(130, 1, 1, '2021-01-03 01:02:59', '2021-01-03 01:02:59'),
(131, 1, 1, '2021-01-03 01:02:59', '2021-01-03 01:02:59'),
(132, 1, 1, '2021-01-03 01:02:59', '2021-01-03 01:02:59'),
(133, 1, 1, '2021-01-03 01:03:00', '2021-01-03 01:03:00'),
(134, 1, 1, '2021-01-03 01:03:00', '2021-01-03 01:03:00'),
(135, 1, 1, '2021-01-03 01:03:00', '2021-01-03 01:03:00'),
(136, 1, 1, '2021-01-03 01:03:00', '2021-01-03 01:03:00'),
(137, 1, 1, '2021-01-03 01:03:00', '2021-01-03 01:03:00'),
(138, 1, 1, '2021-01-03 01:03:01', '2021-01-03 01:03:01'),
(139, 1, 1, '2021-01-03 01:03:01', '2021-01-03 01:03:01'),
(140, 1, 1, '2021-01-03 01:03:01', '2021-01-03 01:03:01'),
(141, 1, 1, '2021-01-03 01:03:01', '2021-01-03 01:03:01'),
(142, 1, 1, '2021-01-03 01:03:01', '2021-01-03 01:03:01'),
(143, 1, 1, '2021-01-03 01:03:01', '2021-01-03 01:03:01'),
(144, 1, 1, '2021-01-03 01:03:02', '2021-01-03 01:03:02'),
(145, 1, 1, '2021-01-03 01:03:02', '2021-01-03 01:03:02'),
(146, 1, 1, '2021-01-03 01:03:02', '2021-01-03 01:03:02'),
(147, 1, 1, '2021-01-03 01:03:02', '2021-01-03 01:03:02'),
(148, 1, 1, '2021-01-03 01:03:02', '2021-01-03 01:03:02'),
(149, 1, 1, '2021-01-03 01:03:03', '2021-01-03 01:03:03'),
(150, 1, 1, '2021-01-03 01:03:03', '2021-01-03 01:03:03'),
(151, 1, 1, '2021-01-03 01:03:03', '2021-01-03 01:03:03'),
(152, 1, 1, '2021-01-03 01:03:03', '2021-01-03 01:03:03'),
(153, 1, 1, '2021-01-03 01:03:03', '2021-01-03 01:03:03'),
(154, 1, 1, '2021-01-03 01:03:03', '2021-01-03 01:03:03'),
(155, 1, 1, '2021-01-03 01:03:04', '2021-01-03 01:03:04'),
(156, 1, 1, '2021-01-03 01:03:04', '2021-01-03 01:03:04'),
(157, 1, 1, '2021-01-03 01:03:04', '2021-01-03 01:03:04'),
(158, 1, 1, '2021-01-03 01:03:04', '2021-01-03 01:03:04'),
(159, 1, 1, '2021-01-03 01:03:04', '2021-01-03 01:03:04'),
(160, 1, 1, '2021-01-03 01:03:04', '2021-01-03 01:03:04'),
(161, 1, 1, '2021-01-03 01:03:05', '2021-01-03 01:03:05'),
(162, 1, 1, '2021-01-03 01:03:05', '2021-01-03 01:03:05'),
(163, 1, 1, '2021-01-03 01:03:05', '2021-01-03 01:03:05'),
(164, 1, 1, '2021-01-03 01:03:05', '2021-01-03 01:03:05'),
(165, 1, 1, '2021-01-03 01:03:05', '2021-01-03 01:03:05'),
(166, 1, 1, '2021-01-03 01:03:05', '2021-01-03 01:03:05'),
(167, 1, 1, '2021-01-03 01:03:06', '2021-01-03 01:03:06'),
(168, 1, 1, '2021-01-03 01:03:06', '2021-01-03 01:03:06'),
(169, 1, 1, '2021-01-03 01:03:06', '2021-01-03 01:03:06'),
(170, 1, 1, '2021-01-03 01:03:06', '2021-01-03 01:03:06'),
(171, 1, 1, '2021-01-03 01:03:06', '2021-01-03 01:03:06'),
(172, 1, 3, '2021-01-03 01:03:14', '2021-01-03 01:03:14'),
(173, 1, 3, '2021-01-03 01:03:15', '2021-01-03 01:03:15'),
(174, 1, 3, '2021-01-03 01:03:15', '2021-01-03 01:03:15'),
(175, 1, 3, '2021-01-03 01:03:15', '2021-01-03 01:03:15'),
(176, 1, 3, '2021-01-03 01:03:15', '2021-01-03 01:03:15'),
(177, 1, 3, '2021-01-03 01:03:15', '2021-01-03 01:03:15'),
(178, 1, 3, '2021-01-03 01:03:16', '2021-01-03 01:03:16'),
(179, 1, 3, '2021-01-03 01:03:16', '2021-01-03 01:03:16'),
(180, 1, 3, '2021-01-03 01:03:16', '2021-01-03 01:03:16'),
(181, 1, 3, '2021-01-03 01:03:16', '2021-01-03 01:03:16'),
(182, 1, 3, '2021-01-03 01:03:16', '2021-01-03 01:03:16'),
(183, 1, 3, '2021-01-03 01:03:17', '2021-01-03 01:03:17'),
(184, 1, 3, '2021-01-03 01:03:17', '2021-01-03 01:03:17'),
(185, 1, 3, '2021-01-03 01:03:17', '2021-01-03 01:03:17'),
(186, 1, 3, '2021-01-03 01:03:17', '2021-01-03 01:03:17'),
(187, 1, 3, '2021-01-03 01:03:17', '2021-01-03 01:03:17'),
(188, 1, 3, '2021-01-03 01:03:17', '2021-01-03 01:03:17'),
(189, 1, 3, '2021-01-03 01:03:18', '2021-01-03 01:03:18'),
(190, 1, 3, '2021-01-03 01:03:18', '2021-01-03 01:03:18'),
(191, 1, 3, '2021-01-03 01:03:18', '2021-01-03 01:03:18'),
(192, 1, 3, '2021-01-03 01:03:18', '2021-01-03 01:03:18'),
(193, 1, 3, '2021-01-03 01:03:18', '2021-01-03 01:03:18'),
(194, 1, 3, '2021-01-03 01:03:18', '2021-01-03 01:03:18'),
(195, 1, 3, '2021-01-03 01:03:18', '2021-01-03 01:03:18'),
(196, 1, 1, '2021-01-03 01:05:30', '2021-01-03 01:05:30'),
(197, 1, 1, '2021-01-03 01:05:30', '2021-01-03 01:05:30'),
(198, 1, 1, '2021-01-03 01:05:30', '2021-01-03 01:05:30'),
(199, 1, 1, '2021-01-03 01:05:30', '2021-01-03 01:05:30'),
(200, 1, 1, '2021-01-03 01:05:30', '2021-01-03 01:05:30'),
(201, 1, 1, '2021-01-03 01:05:31', '2021-01-03 01:05:31'),
(202, 1, 1, '2021-01-03 01:05:31', '2021-01-03 01:05:31'),
(203, 1, 1, '2021-01-03 01:05:31', '2021-01-03 01:05:31'),
(204, 1, 1, '2021-01-03 01:05:32', '2021-01-03 01:05:32'),
(205, 1, 1, '2021-01-03 01:05:32', '2021-01-03 01:05:32'),
(206, 1, 1, '2021-01-03 01:05:32', '2021-01-03 01:05:32'),
(207, 1, 1, '2021-01-03 01:05:32', '2021-01-03 01:05:32'),
(208, 1, 1, '2021-01-03 01:05:33', '2021-01-03 01:05:33'),
(209, 1, 1, '2021-01-03 01:05:33', '2021-01-03 01:05:33'),
(210, 1, 1, '2021-01-03 01:05:33', '2021-01-03 01:05:33'),
(211, 1, 1, '2021-01-03 01:05:34', '2021-01-03 01:05:34'),
(212, 1, 1, '2021-01-03 01:05:34', '2021-01-03 01:05:34'),
(213, 1, 1, '2021-01-03 01:05:34', '2021-01-03 01:05:34'),
(214, 1, 1, '2021-01-03 01:05:34', '2021-01-03 01:05:34'),
(215, 1, 1, '2021-01-03 01:05:35', '2021-01-03 01:05:35'),
(216, 1, 1, '2021-01-03 01:05:35', '2021-01-03 01:05:35'),
(217, 1, 1, '2021-01-03 01:05:35', '2021-01-03 01:05:35'),
(218, 1, 1, '2021-01-03 01:05:35', '2021-01-03 01:05:35'),
(219, 1, 1, '2021-01-03 01:05:36', '2021-01-03 01:05:36'),
(220, 1, 1, '2021-01-03 01:05:36', '2021-01-03 01:05:36'),
(221, 1, 1, '2021-01-03 01:05:36', '2021-01-03 01:05:36'),
(222, 1, 1, '2021-01-03 01:05:36', '2021-01-03 01:05:36'),
(223, 1, 1, '2021-01-03 01:05:36', '2021-01-03 01:05:36'),
(224, 1, 1, '2021-01-03 01:05:36', '2021-01-03 01:05:36'),
(225, 1, 1, '2021-01-03 01:05:37', '2021-01-03 01:05:37'),
(226, 1, 1, '2021-01-03 01:05:37', '2021-01-03 01:05:37'),
(227, 1, 1, '2021-01-03 01:05:37', '2021-01-03 01:05:37'),
(228, 1, 1, '2021-01-03 01:05:37', '2021-01-03 01:05:37'),
(229, 1, 1, '2021-01-03 01:05:37', '2021-01-03 01:05:37'),
(230, 1, 1, '2021-01-03 01:05:38', '2021-01-03 01:05:38'),
(231, 1, 1, '2021-01-03 01:05:38', '2021-01-03 01:05:38'),
(232, 1, 1, '2021-01-03 01:05:38', '2021-01-03 01:05:38'),
(233, 1, 1, '2021-01-03 01:05:38', '2021-01-03 01:05:38'),
(234, 1, 1, '2021-01-03 01:05:38', '2021-01-03 01:05:38'),
(235, 1, 1, '2021-01-03 01:05:38', '2021-01-03 01:05:38'),
(236, 1, 1, '2021-01-03 01:05:39', '2021-01-03 01:05:39'),
(237, 1, 1, '2021-01-03 01:05:39', '2021-01-03 01:05:39'),
(238, 1, 1, '2021-01-03 01:05:39', '2021-01-03 01:05:39'),
(239, 1, 1, '2021-01-03 01:05:39', '2021-01-03 01:05:39'),
(240, 1, 1, '2021-01-03 01:05:39', '2021-01-03 01:05:39'),
(241, 1, 1, '2021-01-03 01:05:39', '2021-01-03 01:05:39'),
(242, 1, 1, '2021-01-03 01:05:40', '2021-01-03 01:05:40'),
(243, 1, 1, '2021-01-03 01:05:40', '2021-01-03 01:05:40'),
(244, 1, 1, '2021-01-03 01:05:40', '2021-01-03 01:05:40'),
(245, 1, 1, '2021-01-03 01:05:40', '2021-01-03 01:05:40'),
(246, 1, 1, '2021-01-03 01:05:40', '2021-01-03 01:05:40'),
(247, 1, 1, '2021-01-03 01:05:40', '2021-01-03 01:05:40'),
(248, 1, 1, '2021-01-03 01:05:41', '2021-01-03 01:05:41'),
(249, 1, 1, '2021-01-03 01:05:41', '2021-01-03 01:05:41'),
(250, 1, 1, '2021-01-03 01:05:41', '2021-01-03 01:05:41'),
(251, 1, 1, '2021-01-03 01:05:41', '2021-01-03 01:05:41'),
(252, 1, 1, '2021-01-03 01:05:41', '2021-01-03 01:05:41'),
(253, 1, 1, '2021-01-03 01:05:42', '2021-01-03 01:05:42'),
(254, 1, 1, '2021-01-03 01:05:42', '2021-01-03 01:05:42'),
(255, 1, 1, '2021-01-03 01:05:54', '2021-01-03 01:05:54'),
(256, 1, 1, '2021-01-03 01:05:55', '2021-01-03 01:05:55'),
(257, 1, 1, '2021-01-03 01:05:55', '2021-01-03 01:05:55'),
(258, 1, 1, '2021-01-03 01:05:55', '2021-01-03 01:05:55'),
(259, 1, 1, '2021-01-03 01:05:56', '2021-01-03 01:05:56'),
(260, 1, 1, '2021-01-03 01:05:56', '2021-01-03 01:05:56'),
(261, 1, 1, '2021-01-03 01:05:56', '2021-01-03 01:05:56'),
(262, 1, 1, '2021-01-03 01:05:56', '2021-01-03 01:05:56'),
(263, 1, 1, '2021-01-03 01:05:56', '2021-01-03 01:05:56'),
(264, 1, 1, '2021-01-03 01:05:57', '2021-01-03 01:05:57'),
(265, 1, 1, '2021-01-03 01:05:57', '2021-01-03 01:05:57'),
(266, 1, 1, '2021-01-03 01:05:57', '2021-01-03 01:05:57'),
(267, 1, 1, '2021-01-03 01:05:57', '2021-01-03 01:05:57'),
(268, 1, 1, '2021-01-03 01:05:57', '2021-01-03 01:05:57'),
(269, 1, 1, '2021-01-03 01:05:58', '2021-01-03 01:05:58'),
(270, 1, 1, '2021-01-03 01:05:58', '2021-01-03 01:05:58'),
(271, 1, 1, '2021-01-03 01:05:58', '2021-01-03 01:05:58'),
(272, 1, 1, '2021-01-03 01:05:58', '2021-01-03 01:05:58'),
(273, 1, 1, '2021-01-03 01:06:23', '2021-01-03 01:06:23'),
(274, 1, 3, '2021-01-03 01:07:45', '2021-01-03 01:07:45'),
(277, 12, 5, '2021-01-03 01:09:15', '2021-01-03 01:09:15');

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
(3, '2020_12_30_003426_create_admins_table', 1),
(4, '2020_12_30_003850_create_posts_table', 1),
(5, '2020_12_30_004053_create_categories_table', 1),
(6, '2020_12_30_004152_create_post_user_follows_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipe` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preparation_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cooking_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serving_people` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `image`, `description`, `recipe`, `preparation_time`, `cooking_time`, `serving_people`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 'Korean Fried Chicken', 'post_image_1609608213.jpg', 'You’re 30 minutes away from the crispiest, crunchiest, tastiest chicken wings ever. Korean fried chicken, if you’ve never tried it, is an extra crunchy double fried chicken tossed in a sweet and spicy sauce. It’s like the best hot wings ever.', '1.4 kg / 3 pounds whole chicken, cut into pieces or chicken wings / drumsticks / boneless chicken thigh – choose from these based on your preference, rinsed\r\n2 Tbsp rice wine\r\n2 tsp minced ginger\r\n1 tsp fine sea salt\r\n1/2 tsp ground black pepper\r\n1 cup potato starch or corn starch\r\nSome cooking oil for deep frying (I used rice bran oil)\r\nKOREAN FRIED CHICKEN SAUCE\r\n3 Tbsp tomato sauce / ketchup\r\n2 Tbsp to 2 1/2 Tbsp gochujang (Korean chilli paste)\r\n1/4 cup honey\r\n1/4 cup brown sugar\r\n2 Tbsp soy sauce\r\n2 Tbsp minced garlic\r\n1 Tbsp sesame oil\r\nOPTIONAL – TO GARNISH\r\nroasted sesame seeds\r\ngreen onion, finely chopped or shredded using this tool\r\n*1 Tbsp = 15 ml, 1 Cup = 250 ml', '23:00', '12:00', '500', '2021-01-02 15:23:33', '2021-01-02 15:23:33'),
(3, 1, 11, 'Best Chicken Thigh', 'post_image_1609609082.jpg', 'Chicken thighs are perfect for those nights when you just want to get a quick meal on the table without the fuss of worrying about whether or not your chicken breast is going to get overcooked and dry, and bonus: they’re so much more versatile too.', '- Soy sauce (use a low sodium soy to control the amount of sodium going in)\r\n- Honey\r\n- Green onions (or shallots)\r\n- Cooking oil (use a vegetable oil or canola oil)\r\n- Fresh minced garlic\r\n- White vinegar (apple cider or rice wine vinegar can be used instead)\r\n- Sesame oil (completely optional)\r\n- Fresh minced ginger\r\nAs always, you can substitute any ingredient you dislike to make these baked chicken thighs suitable to your taste.\r\n- Mix the marinade ingredients together before adding your chicken, and marinate for 30 minutes or overnight. If you don’t have time to marinate, don’t worry too much. The sauce has so much flavour, you can get away with baking them right away', '20:33', '13:00', '600', '2021-01-02 15:38:02', '2021-01-02 15:38:02'),
(5, 1, 11, 'Spinach Chicken Casserole with Cream Cheese and Mozzarella', 'post_image_1609609493.jpg', 'Spinach Chicken Casserole with Cream Cheese and Mozzarella – All of the delicious flavours of cream cheese, spinach, and chicken are packed into this delicious dinner recipe! This easy spinach chicken', '2 large boneless skinless chicken breasts, cut horizontally\r\n8 oz cream cheese, softened\r\n2 cup spinach, rinsed\r\n1 tablespoon olive oil\r\n4 oz Mozzarella cheese, shredded\r\nThe marinade:\r\n3 cloves garlic, minced\r\n1 tablespoon olive oil\r\n1/2 teaspoon red pepper flakes, optional\r\n1/2 teaspoon Italian seasoning, optional', '10:00', '20:00', '700', '2021-01-02 15:44:53', '2021-01-02 15:44:53'),
(6, 5, 11, 'Roasted Chicken with Garlic Herb Butter', 'post_image_1609609953.jpg', 'Roasted Chicken with Garlic Herb Butter – There’s nothing more satisfying than a whole roasted chicken – it feeds a crowd, looks impressive on the table, and tastes amazing.', '4 pound (2kg) whole chicken, at room temperature\r\n1/4 cup unsalted butter, melted\r\n1 lemon, halved\r\nSalt and freshly ground pepper, to taste\r\n1 teaspoon garlic powder\r\n1 teaspoon instant chicken bouillon\r\n2 tablespoons fresh chopped parsley\r\n4 garlic cloves, minced\r\n1 head of garlic roughly peeled and cut in half horizontally through the middle crosswise\r\n3 fresh whole rosemary sprigs', '06:00', '20:52', '555', '2021-01-02 15:52:33', '2021-01-02 15:52:33'),
(7, 5, 4, 'Fettuccine in Tomato Sauce', 'post_image_1609610564.jpg', 'This Fettuccine in Tomato Sauce is full of juicy tomatoes, pungent garlic, and fresh herbs. If you like your pasta full of flavour, then you\'re going to love this delicious dish.', 'Ingredients\r\n⅓ cup olive oil\r\n2 lbs. cherry tomatoes, cut in half\r\n½ tsp. salt\r\n½ tsp. pepper\r\n¼ tsp. red pepper flakes\r\n4 garlic cloves, minced\r\n¼ cup fresh parsley, chopped\r\n2 tbsp. fresh basil, chopped\r\n1 lb. fettuccine pasta, uncooked or other type of pasta\r\nInstructions\r\nStart by bringing a large pot of water to a boil. While the water is heating up, saute the tomatoes in olive oil over medium heat in a saute pan for about 15 minutes, or until the tomatoes are tender and release their juices.\r\nStart cooking your pasta according to the directions on the box. It should be cooked al dente.\r\nAdd the salt, pepper, red pepper flakes, and garlic to the tomatoes and cook for another minute.\r\nAt this point, add the basil, parsley, and cooked (not rinsed) pasta to the saute pan. Stir everything well. (Note: if the pasta is not cooked at this point, you can set the sauce aside and let it wait for the pasta to finish cooking).', '10:00', '20:00', '340', '2021-01-02 16:02:44', '2021-01-02 16:02:44'),
(10, 5, 15, 'SHAKSHUKA WITH FETA', 'post_image_1609611155.jpg', 'One of the greatest joys in life: weekend brunches. Going out for brunch is awesome but sometimes it’s also nice to just chill at home and whip up some homemade goodness. In coming – shakshuka with feta.', 'Ingredients\r\n▢4 eggs\r\n▢½ red capsicum/pepper medium sized, finely diced\r\n▢1 can diced tomatoes or 5 – 6 fresh tomatoes, roughly diced\r\n▢½ brown onion finely diced\r\n▢1 clove garlic minced\r\n▢½ tsp cumin seeds\r\n▢¼ tsp cayenne pepper add more for extra spicy\r\n▢¼ cup parsley finely chopped, separate stems from leaves\r\n▢1 tbsp dark brown sugar\r\n▢30 g /1 oz feta cheese substitute: dollops of greek yoghurt\r\n▢1½ tbsp olive oil\r\n▢⅓ tsp sea salt adjust for taste\r\n▢black pepper', '10:00', '20:10', '800', '2021-01-02 16:12:35', '2021-01-02 16:12:35'),
(11, 5, 12, 'Air Fryer Chicken Tacos', 'post_image_1609611520.jpg', 'Especially crispy air fryer tacos! Stuffed corn tortillas with juicy chicken and cheese, crisped up in \r\n the air fryer for the ultimate in crunch.', '*Ingredients\r\nChicken for Tacos\r\n1/2 cup orange juice\r\n3 cloves garlic minced\r\n1 tbsp neutral oil\r\n1 tbsp white vinegar\r\n1 tbsp chile powder chimayo chile powder preferred, optional\r\n2 tsp ground coriander\r\n2 tsp smoked paprika\r\n2 tsp dried oregano\r\n2 tsp ground cumin\r\n1 tsp black pepper\r\n1 tsp kosher salt or to taste\r\n2 lbs boneless skinless chicken thighs see notes for other meats\r\n*Tacos\r\n12 4\" corn tortillas\r\n2 cups shredded cheese Mexican cheese preferred, optional\r\n1/4 bunch fresh cilantro chopped\r\n1/4 medium onion diced\r\nguacamole optional\r\navocados diced, optional\r\nsalsa optional\r\nhot sauce optional\r\nlimes cut into wedges', '10:00', '20:18', '514', '2021-01-02 16:18:40', '2021-01-02 16:18:40'),
(13, 5, 15, 'Japanese Pancakes', 'post_image_1609612322.jpg', 'These Fluffy Japanese Soufflé Pancakes are like eating cottony clouds, but even better with homemade whipped cream and fresh berries!', 'Ingredients\r\nYolks\r\n1 egg yolk 18g\r\n1 tbsp sugar 12g\r\n2 tbsp milk 30g\r\n3 tbsp flour 30g\r\n1/4 tsp baking powder 1g\r\nWhites\r\n2 large egg whites 60g\r\n1/8 tsp cream of tartar 0.4g\r\n1.5 tbsp sugar 18g', '15:00', '14:00', '980', '2021-01-02 16:32:02', '2021-01-02 16:32:02'),
(15, 8, 4, 'Cheesy Baked Pasta with Creamy Meat Sauce', 'post_image_1609612991.jpg', 'This baked shells casserole with meat sauce is the best weeknight meal for the whole family!', '3 – 4 cups uncooked pasta shells\r\n1 lb (450g) ground beef\r\n1 (12 oz – 300g) jar of salsa\r\n8oz (225g) cream cheese (cubed)\r\n1/2 cup (125ml) beef stock\r\n1 or 2 cups shredded mozzarella cheese\r\n1/2 cup grated or shredded parmesan\r\n1/2 teaspoon black pepper', '14:42', '20:42', '890', '2021-01-02 16:43:11', '2021-01-02 16:43:11'),
(16, 8, 19, 'Garlic Herb Butter Steak in Oven', 'post_image_1609613345.jpg', 'garlic Herb Butter Steak in Oven – Impress your family with this beautiful cut of meat for the Holiday table! This roasted rib-eye steak is tender and flavorful, and the cut is sure to make a big impression. Enjoy!', '1 large and thick rib-eye steak (3lb. – 1500g, we used a tomahawk rib-eye steak for this recipe) \r\n2 onions, halved horizontally\r\n4 garlic cloves, smashed, with peel on\r\n2 teaspoon fresh cracked black pepper, divided\r\n1 1/2 teaspoon kosher salt, divided\r\n1 crumbled beef bouillon cube, optional\r\n1/3 cup soy sauce\r\n1/2 cup melted butter (or olive oil)\r\n1 tablespoon hot sauce of your choice (we used Sriracha)\r\n1 tablespoon minced garlic\r\n1 tablespoon Italian flat parsley, chopped\r\n1 tablespoon curly parsley, chopped\r\n1/2 teaspoon red chili pepper flakes, optional', '15:48', '23:48', '675', '2021-01-02 16:49:05', '2021-01-02 16:49:05'),
(18, 8, 19, 'Garlic Butter Steak Bites and Potatoes', 'post_image_1609614063.jpg', 'Garlic Butter Steak Bites and Potatoes – Super flavorful and nourishing, these garlic butter steak bites and potatoes are a one-pan wonder you’ll return to again and again Enjoy!', 'INGREDIENTS LIST FOR THE GARLIC BUTTER STEAK BITES WITH POTATOES\r\n1 1/2 lb (650g) flank steak, cut into 1-inch cubes (or ribeye steak, tenderloin, strip loin, strip steak…)\r\n1 1/2 lb (650g) baby yellow potatoes, quartered\r\n1 tablespoon olive oil\r\n3 tablespoons butter, divided (or ghee)\r\n5 garlic cloves, minced\r\n1 teaspoon fresh thyme, chopped\r\n1 teaspoon fresh rosemary, chopped\r\n1 teaspoon fresh parsley, chopped\r\nSalt and fresh cracked pepper\r\nCrushed red chili pepper flakes, optional\r\nThe marinade\r\n\r\n1/3 cup soy sauce (or coconut amino for paleo and gluten-free)\r\n1 tablespoon olive oil\r\n1 tablespoon onion powder (or less)\r\n1 tablespoon hot sauce (we used Sriracha)\r\nFresh cracked black pepper', '23:00', '23:00', '850', '2021-01-02 17:01:03', '2021-01-02 17:01:03'),
(21, 8, 10, 'Cilantro Lime Shrimp with Zucchini Noodles', 'post_image_1609614626.webp', 'Lime and cilantro combo makes for a full-flavored dish while only taking minutes to prepare! A perfect low-carb option when you’re looking for a quick healthy dinner that’s packed with flavour.', '1 lb (450g) shrimp, shelled and deveined\r\n2 + 1 tablespoons olive oil\r\n4 cloves garlic, minced\r\n1 pinch red pepper flakes (optional)\r\n1/4 cup vegetable broth\r\n1 teaspoon honey (optional for low-carb, keto diet.)\r\nJuice of 1 1/2 lime\r\n3 medium zucchini, spiralized or cut into noodles\r\nSalt and fresh cracked pepper to taste\r\n1 teaspoon lime zest\r\n2 tablespoons cilantro, chopped', '05:00', '05:10', '252', '2021-01-02 17:10:26', '2021-01-02 17:10:26'),
(23, 11, 16, 'Cream Cheese Fruit Dip', 'post_image_1609618349.webp', 'Cream Cheese Fruit Dip – Lightly sweet and super fluffy, this fruit dip is a great way to get everyone to eat more fruit this season! Made with cream cheese, concentrated orange juice, and greek yogur', '4 oz soft cream cheese at room temperature\r\n1 cup Greek yogurt\r\n1/2 cup concentrated orange juice, low acid and thawed (we used Minute Maid)', '10:00', '20:00', '10', '2021-01-02 18:12:29', '2021-01-02 18:12:29'),
(24, 11, 16, 'French Cinnamon Apple Tart', 'post_image_1609619242.jpg', 'French Cinnamon Apple Tart – This cinnamon apple tart recipe is so simple but oh so delicious! It begins with a sweet pastry crust with a wonderfully crisp texture and a sweet buttery flavour to die for.', '- The crust\r\n1-1/2 cups (150g) all-purpose flour spooned and leveled\r\n1/2 teaspoon salt\r\n2 tablespoons granulated sugar\r\n1-1/2 sticks (150g) unsalted butter, cold and cut into 1/2-inch cubes\r\n1/4 cup cold water\r\n\r\n- The apples\r\n\r\n3 – 4 baking apples\r\n2 tablespoons brown sugar, or to taste\r\n1 teaspoon vanilla extract\r\n1 teaspoon cinnamon, or to taste\r\n2 tablespoons unsalted butter, melted\r\n1/8 teaspoon salt\r\n1 tablespoon apricot jelly, optional for the glaze', '15:00', '20:00', '5', '2021-01-02 18:27:22', '2021-01-02 18:27:22'),
(25, 12, 8, 'test', 'post_image_1609631738.png', '123123123123', '123123123123', '12:03', '12:03', '123', '2021-01-02 21:55:38', '2021-01-02 21:55:38'),
(26, 12, 19, 'test', 'post_image_1609640313.png', '1232112333333333333333333333', '1322222222222222222222', '12:03', '12:03', '1', '2021-01-03 00:18:33', '2021-01-03 00:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `post_user_follows`
--

CREATE TABLE `post_user_follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noimage.png',
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `image`, `bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lara', 'Mahfouz', 'lara99@gmail.com', NULL, '$2y$10$SGNX9bCSULadsNJ2bkFmZeNl/MLXn3aZ3b.bKuD027VkrcgCFUW/2', '1609602679.jpg', 'Experienced Designer with a demonstrated history of working in the graphic design industry. Skilled in Research, Analytical Skills, Communication, Marketing, and Teamwork, Adobe Illustrator, Adobe PhotoshopAdobe InDesign, Adobe After Effect, Corel Draw,', NULL, NULL, '2021-01-02 13:51:19'),
(2, 'Laith', ' Al Enooz ', 'laith@gmail.com', NULL, '123456789', 'noimage.png', 'JR. Full stack web developer, training at Coding Academy by Orange 2nd cohort.', NULL, NULL, NULL),
(4, 'Adam', 'Abu Samra', 'adam@gmail.com', NULL, '123456789', 'noimage.png', 'Currently studying web development at Orange Coding Academy, It\'s a 6 months intensive course in addition to a 1-month internship to practice and utilize established skills.\r\n', NULL, NULL, NULL),
(5, 'Dania', 'Abutair', 'dania9@gmail.com', NULL, '$2y$10$VQKDnN3NT.TO7flywkUqWeFTSn1vX34onFVAXr.6RvIMoeuDZIdaS', 'noimage.png', 'Graduate with a Computer Engineering Degree and some relevant experience in the field.', NULL, '2021-01-02 15:49:59', '2021-01-02 15:49:59'),
(8, 'adam', 'Abusamra', 'adam20@gmail.com', NULL, '$2y$10$GCNPasSnar0zHCiFKkRv0.8Gck08N2HPvdXlenU5SZ.R4sZeIJmnu', 'noimage.png', 'Currently studying web development', NULL, '2021-01-02 16:35:52', '2021-01-02 16:35:52'),
(9, 'Dana', 'Mahfouz', 'dana@gmail.com', NULL, '$2y$10$eF4V.PMN0JYvdBtCYid/beq0qjw6IHwuDkoNJ2Vdv5SVc9E8yj2b2', 'noimage.png', 'translater', NULL, '2021-01-02 17:45:50', '2021-01-02 17:45:50'),
(11, 'Laith', 'Al Enooz', 'laith94@gmail.com', NULL, '$2y$10$MuJCyFjV7a1tm6Cy.GHy8u4ngAZQ1FXjTBrxKJig0qblm1vc7I90W', 'noimage.png', 'JR. Full stack web developer', NULL, '2021-01-02 17:55:43', '2021-01-02 17:55:43'),
(12, 'Laith', 'Enooz', 'laithalenooz@gmail.com', NULL, '$2y$10$7rW6xoQxajMbUnXuAcjaW.Pz0e7dCpaB4P1WAksKeE6Ff/ivI4mlm', 'noimage.png', '123123', NULL, '2021-01-02 21:07:14', '2021-01-02 21:07:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_user_follows`
--
ALTER TABLE `post_user_follows`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `post_user_follows`
--
ALTER TABLE `post_user_follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
