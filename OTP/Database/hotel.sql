-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2021 at 01:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_photo` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_photo`, `user_id`) VALUES
(1, 'Admin Satu', '/img/admin_profile/admin1.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Pihak yang mengelola data'),
(2, 'customer', 'Yang melakukan transaksi booking');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 3),
(2, 1),
(2, 2),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@admin.com', 3, '2021-12-08 07:25:36', 1),
(2, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-08 07:53:59', 1),
(3, '::1', 'pelanggan2@gmail.com', 4, '2021-12-08 08:03:05', 1),
(4, '::1', 'nrizky', NULL, '2021-12-08 08:11:35', 0),
(5, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-08 08:11:47', 1),
(6, '::1', 'admin@admin.com', 3, '2021-12-08 08:12:32', 1),
(7, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-09 02:03:48', 1),
(8, '::1', 'admin@admin.com', 3, '2021-12-09 02:05:07', 1),
(9, '::1', 'nrizky', NULL, '2021-12-09 02:08:20', 0),
(10, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-09 02:08:34', 1),
(11, '::1', 'admin@admin.com', 3, '2021-12-19 02:34:27', 1),
(12, '::1', 'pelanggan2@gmail.com', 4, '2021-12-19 02:39:32', 1),
(13, '::1', 'admin@admin.com', 3, '2021-12-19 03:07:05', 1),
(14, '::1', 'pelanggan2@gmail.com', 4, '2021-12-19 03:47:44', 1),
(15, '::1', 'admin@admin.com', 3, '2021-12-19 07:26:51', 1),
(16, '::1', 'pelanggan2@gmail.com', 4, '2021-12-19 07:28:12', 1),
(17, '::1', 'pelanggan2@gmail.com', 4, '2021-12-21 07:47:39', 1),
(18, '::1', 'admin@admin.com', 3, '2021-12-21 07:53:57', 1),
(19, '::1', 'pelanggan2@gmail.com', 4, '2021-12-21 07:55:25', 1),
(20, '::1', 'admin@admin.com', 3, '2021-12-21 08:16:46', 1),
(21, '::1', 'pelanggan2@gmail.com', 4, '2021-12-21 08:32:04', 1),
(22, '::1', 'pelanggan2@gmail.com', 4, '2021-12-21 09:41:02', 1),
(23, '::1', 'admin@admin.com', 3, '2021-12-23 18:18:38', 1),
(24, '::1', 'pelanggan2@gmail.com', 4, '2021-12-23 18:49:54', 1),
(25, '::1', 'pelanggan2@gmail.com', 4, '2021-12-24 00:05:57', 1),
(26, '::1', 'admin@admin.com', 3, '2021-12-24 00:08:46', 1),
(27, '::1', 'pelanggan2@gmail.com', 4, '2021-12-24 00:23:32', 1),
(28, '::1', 'pelanggan2', NULL, '2021-12-24 01:01:27', 0),
(29, '::1', 'pelanggan2@gmail.com', 4, '2021-12-24 01:01:40', 1),
(30, '::1', 'admin@admin.com', 3, '2021-12-24 01:07:10', 1),
(31, '::1', 'pelanggan2@gmail.com', 4, '2021-12-24 01:13:50', 1),
(32, '::1', 'pelanggan2@gmail.com', 4, '2021-12-24 01:23:54', 1),
(33, '::1', 'admin@admin.com', 3, '2021-12-24 01:39:47', 1),
(34, '::1', 'pelanggan2@gmail.com', 4, '2021-12-25 20:42:13', 1),
(35, '::1', 'admin@admin.com', 3, '2021-12-25 20:42:31', 1),
(36, '::1', 'tes@gmail.com', 5, '2021-12-25 20:46:55', 1),
(37, '::1', 'pelanggan2@gmail.com', 4, '2021-12-25 21:19:05', 1),
(38, '::1', 'admin@admin.com', 3, '2021-12-25 21:19:18', 1),
(39, '::1', 'V3420056', NULL, '2021-12-25 21:20:44', 0),
(40, '::1', 'pelanggan4@gmail.com', 7, '2021-12-25 21:20:57', 1),
(41, '::1', 'pelanggan4@gmail.com', 7, '2021-12-25 21:23:20', 1),
(42, '::1', 'admin@admin.com', 3, '2021-12-25 21:59:31', 1),
(43, '::1', 'admin@admin.com', 3, '2021-12-25 22:06:17', 1),
(44, '::1', 'pelanggan2@gmail.com', 4, '2021-12-25 23:08:35', 1),
(45, '::1', 'admin@admin.com', 3, '2021-12-25 23:10:13', 1),
(46, '::1', 'pelanggan2@gmail.com', 4, '2021-12-25 23:11:51', 1),
(47, '::1', 'pelanggan4@gmail.com', 7, '2021-12-26 00:16:06', 1),
(48, '::1', 'admin@admin.com', 3, '2021-12-26 00:18:30', 1),
(49, '::1', 'pelanggan4@gmail.com', 7, '2021-12-26 00:25:55', 1),
(50, '::1', 'pelanggan4@gmail.com', 7, '2021-12-26 00:28:57', 1),
(51, '::1', 'pelanggan2@gmail.com', 4, '2021-12-26 00:29:32', 1),
(52, '::1', 'pelanggan2@gmail.com', 4, '2021-12-26 00:30:33', 1),
(53, '::1', 'admin@admin.com', 3, '2021-12-26 00:34:31', 1),
(54, '::1', 'admin@admin.com', 3, '2021-12-26 01:26:09', 1),
(55, '::1', 'pelanggan4@gmail.com', 7, '2021-12-26 03:10:55', 1),
(56, '::1', 'admin@admin.com', 3, '2021-12-26 03:12:03', 1),
(57, '::1', 'pelanggan4@gmail.com', 7, '2021-12-26 07:40:33', 1),
(58, '::1', 'pelanggan5@gmail.com', 8, '2021-12-26 07:41:57', 1),
(59, '::1', 'pelanggan2@gmail.com', 4, '2021-12-26 07:43:42', 1),
(60, '::1', 'pelanggan5@gmail.com', 8, '2021-12-26 07:44:35', 1),
(61, '::1', 'pelanggan6@gmail.com', 9, '2021-12-26 07:51:22', 1),
(62, '::1', 'admin@admin.com', 3, '2021-12-26 07:53:23', 1),
(63, '::1', 'pelanggan6@gmail.com', 9, '2021-12-26 08:39:18', 1),
(64, '::1', 'pelanggan5', NULL, '2021-12-26 09:10:06', 0),
(65, '::1', 'pelanggan5@gmail.com', 8, '2021-12-26 09:10:19', 1),
(66, '::1', 'pelanggan7@gmail.com', 10, '2021-12-26 09:14:21', 1),
(67, '::1', 'admin@admin.com', 3, '2021-12-26 09:16:29', 1),
(68, '::1', 'pelanggan6@gmail.com', 9, '2021-12-26 11:10:13', 1),
(69, '::1', 'admin@admin.com', 3, '2021-12-26 11:10:42', 1),
(70, '::1', 'pelanggan7@gmail.com', 10, '2021-12-26 11:20:05', 1),
(71, '::1', 'admin@admin.com', 3, '2021-12-26 11:22:53', 1),
(72, '::1', 'pelanggan7@gmail.com', 10, '2021-12-26 11:23:20', 1),
(73, '::1', 'admin@admin.com', 3, '2021-12-26 11:23:40', 1),
(74, '::1', 'pelanggan7@gmail.com', 10, '2021-12-26 11:31:04', 1),
(75, '::1', 'admin@admin.com', 3, '2021-12-26 11:32:45', 1),
(76, '::1', 'pelanggan7@gmail.com', 10, '2021-12-26 12:03:29', 1),
(77, '::1', 'pelanggan8@gmail.com', 11, '2021-12-26 12:07:42', 1),
(78, '::1', 'admin@admin.com', 3, '2021-12-26 12:09:41', 1),
(79, '::1', 'pelanggan7@gmail.com', 10, '2021-12-26 12:19:17', 1),
(80, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-27 17:21:02', 1),
(81, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-27 17:37:23', 1),
(82, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-27 17:48:05', 1),
(83, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-27 17:58:30', 1),
(84, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-27 18:02:20', 1),
(85, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-27 18:09:24', 1),
(86, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-27 18:13:03', 1),
(87, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-27 18:30:51', 1),
(88, '::1', 'its.nrizky@gmail.com', 3, '2021-12-27 18:33:38', 1),
(89, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-27 18:36:08', 1),
(90, '::1', 'nrizky', NULL, '2021-12-27 18:40:06', 0),
(91, '::1', 'its.nrizky@student.uns.ac.id', 1, '2021-12-27 18:40:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-all', 'Mengelola semua CRUD terkait data hotel'),
(2, 'transaction', 'Melakukan transaksi berupa booking');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(3) NOT NULL,
  `booking_price` int(255) NOT NULL,
  `booking_date_start` varchar(255) NOT NULL,
  `booking_date_stop` varchar(255) NOT NULL,
  `booking_proof_of_payment` varchar(255) NOT NULL,
  `booking_id_items` int(3) NOT NULL,
  `booking_id_customer` int(3) NOT NULL,
  `booking_status` enum('pending','ongoing','done') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_price`, `booking_date_start`, `booking_date_stop`, `booking_proof_of_payment`, `booking_id_items`, `booking_id_customer`, `booking_status`) VALUES
(1, 10000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '/images/proof/background j2me.png', 6, 2, 'pending'),
(2, 3000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '/images/proof/Virtual Background First Gathering.jpg', 3, 2, 'done'),
(3, 1500000, '27 December, 2021', '31 December, 2021', '/images/proof/background.png', 9, 2, 'pending'),
(4, 10000000, '29 December, 2021', '31 December, 2021', '/images/proof/WhatsApp Image 2021-07-15 at 07.23.32.jpeg', 2, 3, 'done'),
(5, 10000000, '29 December, 2021', '31 December, 2021', '/images/proof/gallery-3.jpg', 2, 5, 'ongoing'),
(6, 300000, '01 January, 2022', '03 January, 2022', '/images/proof/gallery-2.jpg', 5, 4, 'pending'),
(7, 10000000, '31 December, 2021', '02 January, 2022', '/images/proof/about.jpg', 2, 6, 'done'),
(8, 350000, '30 December, 2021', '03 January, 2022', '/images/proof/destination-7.jpg', 18, 6, 'ongoing'),
(9, 550000, '29 December, 2021', '03 January, 2022', '/images/proof/gallery-5.jpg', 4, 7, 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(3) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_telp` varchar(15) NOT NULL,
  `customer_address` text NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_telp`, `customer_address`, `user_id`) VALUES
(1, 'Masukkan nama anda', 'Masukkan no hp', 'Masukkan alamat anda', 1),
(2, 'Ini Pelanggan Dua', '0812234534', 'Rumah Dua', 4),
(3, 'Ini Pelanggan 4', '081444444', 'Alamat Rumah Pelanggan 4', 7),
(4, 'Pelanggan Lima', '08155555555', 'Rumahnya Lima', 8),
(5, 'Pelanggan Enam Kan', '08166666666', 'Rumahnya Pelanggan Enam', 9),
(6, 'Pelanggan Tujuuhhh', '0817777777', 'Rumah Seven 7', 10),
(7, 'Nama Saya Delapan', '0818888888', 'Jalan Delapan', 11);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `items_id` int(3) NOT NULL,
  `items_name` varchar(255) NOT NULL,
  `items_type` enum('hotel','villa') NOT NULL,
  `items_city` varchar(255) NOT NULL,
  `items_address` text NOT NULL,
  `items_price` int(255) NOT NULL,
  `items_desc` text NOT NULL,
  `items_facility` text NOT NULL,
  `items_thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`items_id`, `items_name`, `items_type`, `items_city`, `items_address`, `items_price`, `items_desc`, `items_facility`, `items_thumbnail`) VALUES
(2, 'Sepuluh Lipa', 'villa', 'Jakarta', 'Kota Jakarta', 10000000, 'Deskripsi Villa Sepuluh Lipa', 'Fasilitas Villa Sepuluh Lipa', '/images/items/hotel-1.jpg'),
(3, 'Empat Dara', 'villa', 'Jakarta', 'Jakarta Pusat', 3000000, 'Deskripsi Hotel 3', 'Fasilitas Hotel 3', '/images/items/hotel-4.jpg'),
(4, 'Java Heritage', 'hotel', 'Purwokerto', 'Purwokerto, Jawa Tengah', 550000, 'Deskripsi Hotel 4', 'Fasilitas Hotel 4', '/images/items/hotel4-1.jpg'),
(5, 'Hotel Box', 'hotel', 'Yogyakarta', 'Sleman, Yogyakarta', 300000, 'Deskripsi hotel 5', 'hotel 5 fasilitas', '/images/items/hotel5-1.jpg'),
(6, 'Villa TW A', 'villa', 'Karanganyar', 'Tawangmangu, Karanganyar', 10000000, 'Alamat Villa TW A', 'Fasilitas Villa TW A', '/images/items/villa6-1.jpg'),
(9, 'Villa Baturraden', 'villa', 'Purwokerto', 'Baturraden, Banyumas', 1500000, 'Dekripsi Villa Baturraden', 'Fasilitas Villa Baturraden', '/images/items/villa9-1.jpg'),
(18, 'Hotel Kesekian', 'hotel', 'Tangerang', 'Nama Jalan Di Daerah Tangerang', 350000, 'Deskripsi Hotel Kesekian', 'Fasilitas yang ada di Hotel Kesekian', '/images/items/resto-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items_image`
--

CREATE TABLE `items_image` (
  `items_image_id` int(3) NOT NULL,
  `items_id` int(3) DEFAULT NULL,
  `items_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items_image`
--

INSERT INTO `items_image` (`items_image_id`, `items_id`, `items_image`) VALUES
(3, 2, '/images/items/hotel-1.jpg'),
(4, 2, '/images/items/hotel-3.jpg'),
(5, 2, '/images/items/room-3.jpg'),
(6, 3, '/images/items/hotel-4.jpg'),
(7, 3, '/images/items/room-4.jpg'),
(8, 3, '/images/items/room-5.jpg'),
(9, 4, '/images/items/hotel4-1.jpg'),
(10, 4, '/images/items/hotel4-2.jpg'),
(11, 4, '/images/items/hotel4-3.jpg'),
(12, 5, '/images/items/hotel5-1.jpg'),
(13, 5, '/images/items/hotel4-2.jpg'),
(14, 5, '/images/items/hotel4-3.jpg'),
(15, 6, '/images/items/villa6-1.jpg'),
(16, 6, '/images/items/villa6-2.jpg'),
(17, 6, '/images/items/villa6-3.jpg'),
(21, NULL, '/images/items/villa8-1.jpg'),
(22, NULL, '/images/items/villa8-2.jpg'),
(23, NULL, '/images/items/villa8-3.jpg'),
(24, 9, '/images/items/villa9-1.jpg'),
(25, 9, '/images/items/villa9-2.jpg'),
(26, 9, '/images/items/villa9-3.jpg');

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
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1638960195, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'its.nrizky@student.uns.ac.id', 'nrizky', '$2y$10$3jc/vToEZ23kUsESzU7Bu.JHgASjALujcGSYTGYkOTBTudhc6rTRm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-08 06:32:43', '2021-12-08 06:32:43', NULL),
(2, 'customer1@gmail.com', 'customer1', '$2y$10$KMJwcFf6pSxQnnFIKdt3I.L.684FLdnJl6bj6u0hchNA/33XXCGAq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-08 07:04:05', '2021-12-08 07:04:05', NULL),
(3, 'its.nrizky@gmail.com', 'admin', '$2y$10$ry/DQlFcBG5ROUOsEMQNoezwDyqpwC9zdEjnM6B4H3UQhRNrNgg1q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-08 07:07:22', '2021-12-08 07:07:22', NULL),
(4, 'pelanggan2@gmail.com', 'pelanggan2', '$2y$10$z9.n7EQAbbkDgaGtXzYQGOFywhE.aICO7DFKk.v5d0TT2AyDC/L0u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-08 08:01:48', '2021-12-08 08:01:48', NULL),
(5, 'tes@gmail.com', 'tes', '$2y$10$sTbYUUDhba7Wk5v6hol34ujEWi5BY8oFiA5hgmqNyKzNZdsHOSfVS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-25 20:46:09', '2021-12-25 20:46:09', NULL),
(6, 'pelanggan3@gmail.com', 'pelanggan3', '$2y$10$l.xb17ur1/sijjNehARQ0eYCey/9sIvtvy8e0zUEsqSXkAzxafSoW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-25 20:48:37', '2021-12-25 20:48:37', NULL),
(7, 'pelanggan4@gmail.com', 'pelanggan4', '$2y$10$j3QlIog.2rojs.D1P9US4.aoE6zm2DGsgIudN6v2lYUhb4Awimx1i', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-25 21:16:18', '2021-12-25 21:16:18', NULL),
(8, 'pelanggan5@gmail.com', 'pelanggan5', '$2y$10$AUjjX4t6wCfa0bewEfreWekzzeR4R.16OBzytwXxZgLihbByOmR/W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-26 07:41:41', '2021-12-26 07:41:41', NULL),
(9, 'pelanggan6@gmail.com', 'pelanggan6', '$2y$10$hiwKGf7QYsx1IHrxPNkcxuxxBhQDG/3BcFch10sb8j9wRraY9ycUK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-26 07:50:57', '2021-12-26 07:50:57', NULL),
(10, 'pelanggan7@gmail.com', 'pelanggan7', '$2y$10$sD9n1eIx3.yJW0bhr3cqiuCWzPwtjkO6tIenwiWkd0H5URipQSxdW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-26 09:13:47', '2021-12-26 09:13:47', NULL),
(11, 'pelanggan8@gmail.com', 'pelanggan8', '$2y$10$TqF19kNIRdBQ6VyYakhTfeitWuog4gricd1AQH6VO0KUFOuLFcMxi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-26 12:07:13', '2021-12-26 12:07:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `User Admin` (`user_id`);

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
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `Booking Items` (`booking_id_items`),
  ADD KEY `Booking Customer` (`booking_id_customer`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `User Customer` (`user_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`items_id`);

--
-- Indexes for table `items_image`
--
ALTER TABLE `items_image`
  ADD PRIMARY KEY (`items_image_id`),
  ADD KEY `Images Items` (`items_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `items_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `items_image`
--
ALTER TABLE `items_image`
  MODIFY `items_image_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `User Admin` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

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
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `Booking Customer` FOREIGN KEY (`booking_id_customer`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `Booking Items` FOREIGN KEY (`booking_id_items`) REFERENCES `items` (`items_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `User Customer` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `items_image`
--
ALTER TABLE `items_image`
  ADD CONSTRAINT `Images Items` FOREIGN KEY (`items_id`) REFERENCES `items` (`items_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
