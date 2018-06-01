-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2018 at 05:59 PM
-- Server version: 5.7.14-log
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resthub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `restaurant_id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ad', 1, 'ad@ad.com', '$2y$10$uuhtdUn8.O6vgX0XoDVJlONQF7y.Vwz093puTICQoLisJFtQhacmu', NULL, '2018-03-15 07:35:29', '2018-03-15 07:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `timing` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `timing`, `user_id`, `restaurant_id`, `status`, `created_at`, `updated_at`) VALUES
(8, '2018-03-22 02:00:00', 1, 1, 0, '2018-03-15 07:36:42', '2018-03-15 07:44:21'),
(9, '2018-03-22 02:00:00', 1, 1, 0, '2018-03-15 07:36:43', '2018-03-15 07:39:13'),
(12, '2018-03-14 12:00:00', 1, 1, 1, '2018-03-15 10:30:40', '2018-03-15 10:30:40'),
(15, '2018-03-14 12:00:00', 1, 1, 0, '2018-03-15 10:33:24', '2018-03-15 10:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(8, '2018_03_05_170138_create_managers_table', 5),
(9, '2018_03_05_170139_create_manager_password_resets_table', 5),
(14, '2018_03_05_123517_create_admins_table', 6),
(15, '2018_03_05_175014_create_admins_table', 7),
(16, '2018_03_05_175015_create_admin_password_resets_table', 7),
(29, '2014_10_12_000000_create_users_table', 8),
(30, '2014_10_12_100000_create_password_resets_table', 8),
(31, '2018_02_22_164008_create_restaurants_table', 8),
(32, '2018_02_25_172243_create_bookings_table', 8),
(33, '2018_03_11_165221_create_admins_table', 8),
(34, '2018_03_13_123416_create_comments_table', 8);

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
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `type`, `address`, `area`, `menu`, `description`, `created_at`, `updated_at`) VALUES
(1, 'vWK', 'Chinese', '82603 Jones Plain\nNew Penelope, PA 44181-3049', 'GEC', NULL, 'Hic illum reiciendis tenetur amet libero tempore est. Sint et praesentium minus eligendi. Et corrupti aspernatur reiciendis voluptas et. Quia ut et placeat quidem et quidem.', '2018-03-15 07:33:29', '2018-03-15 07:33:29'),
(2, 'eoQ', 'Chinese', '659 Bartoletti Trace\nNew Taylor, DE 56282', 'Muradpur', NULL, 'Dolores qui nulla et est id eligendi. Est impedit et et voluptatem ea sapiente. Modi est et tempore harum. Assumenda ut repudiandae vel ut repellat nostrum qui.', '2018-03-15 07:33:29', '2018-03-15 07:33:29'),
(3, 'pX0', 'Indian', '696 Price Creek\nWest Alberta, AK 58402-2894', 'Chawkbazar', NULL, 'Et veniam alias eaque pariatur consequatur. Temporibus autem neque exercitationem tempore eos dolor. Est et et illum dolor ut occaecati.', '2018-03-15 07:33:29', '2018-03-15 07:33:29'),
(4, 'XQC', 'Deshi', '792 Nola Tunnel Suite 207\nWest Annalisefort, WI 36594-3874', '2 no. gate', NULL, 'Incidunt et earum ullam consectetur. Molestias ut repellat aut distinctio et iste in. Libero alias exercitationem sapiente voluptatem explicabo deleniti rerum.', '2018-03-15 07:33:29', '2018-03-15 07:33:29'),
(5, 'NjP', 'Chinese', '48296 Erling Glen\nSallyport, WI 74009-4688', 'Muradpur', NULL, 'Alias dignissimos vero odit accusamus. Beatae recusandae cupiditate perferendis labore. Qui beatae sint blanditiis sapiente quia et. Et nihil cupiditate dolores repellendus omnis sint autem velit.', '2018-03-15 07:33:29', '2018-03-15 07:33:29'),
(6, 'Eoi', 'Deshi', '987 Wunsch Terrace\nNorth Willhaven, ME 48113', 'Lalkhan Bazar', NULL, 'Consectetur quia laudantium accusantium eveniet aperiam. Molestiae alias neque odio laborum ratione sint. Rerum accusamus ducimus aut quos totam temporibus.', '2018-03-15 07:33:29', '2018-03-15 07:33:29'),
(7, 'sAN', 'Chinese', '3919 Kemmer Freeway Suite 728\nCruickshankborough, WY 47402', 'Agrabad', NULL, 'Molestias recusandae hic rerum praesentium. Omnis ut voluptatem ut.', '2018-03-15 07:33:30', '2018-03-15 07:33:30'),
(8, '4Rl', 'Deshi', '85965 Fidel Lake\nNikomouth, ND 07833-8641', 'Lalkhan Bazar', NULL, 'Soluta animi est vel eaque. Eos et ducimus et fuga. Consequatur officia dolorem qui corrupti quia.', '2018-03-15 07:33:30', '2018-03-15 07:33:30'),
(9, 'JC1', 'Chinese', '4146 Eliseo Mall\nBoganhaven, NC 07532-9632', 'Lalkhan Bazar', NULL, 'Possimus sit similique qui eius odit sapiente sed. Autem nobis molestiae nemo voluptatem vel ut sint. Veniam maiores est perspiciatis. Omnis consequatur error ut voluptatem sunt.', '2018-03-15 07:33:30', '2018-03-15 07:33:30'),
(10, '0cu', 'Mexican', '357 Sporer Meadow Apt. 913\nNew Yessenia, NH 58731', 'Chawkbazar', NULL, 'Sit sed sed officia. Eos molestias voluptas hic et et. Ex accusamus mollitia saepe ut porro. Esse rerum maxime accusantium dolore.', '2018-03-15 07:33:30', '2018-03-15 07:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 'a@a.com', '$2y$10$huwNASg5NX.sbAOpLOlo6uquTEJAx7/nMYIMJhy5iegE25xa5y.8m', NULL, '2018-03-15 07:34:01', '2018-03-15 07:34:01');

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
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
