-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8081
-- Generation Time: Oct 18, 2021 at 02:30 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` datetime NOT NULL,
  `count_of_people` int NOT NULL,
  `status` tinyint(1) NOT NULL,
  `table_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `phone`, `dateTime`, `count_of_people`, `status`, `table_id`, `created_at`, `updated_at`) VALUES
(14, 'Андрій', '0682210397', '2021-10-19 18:00:00', 8, 1, 5, '2021-10-18 07:57:24', '2021-10-18 07:57:24'),
(15, 'Юлія', '0686113497', '2021-10-18 00:00:00', 5, 0, 2, '2021-10-18 07:58:06', '2021-10-18 08:24:57'),
(16, 'Дмитрій', '0683152697', '2021-10-18 00:30:00', 1, 0, 3, '2021-10-18 08:11:35', '2021-10-18 08:24:57'),
(18, 'Олексій', '0681725342', '2021-10-20 03:32:00', 5, 1, 2, '2021-10-18 08:13:04', '2021-10-18 08:13:04'),
(22, 'Назарій', '0681725342', '2021-10-19 12:00:00', 5, 1, 2, '2021-10-18 08:23:28', '2021-10-18 08:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double NOT NULL,
  `count` int NOT NULL,
  `ingredients` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dishes_group_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `cost`, `count`, `ingredients`, `dishes_group_id`, `created_at`, `updated_at`) VALUES
(1, 'Паштет із курячої печінки', 1111, 135, 'з чатні із цибулі та тостами із чіабати', 1, NULL, '2021-10-12 08:09:15'),
(2, 'Овочевий салат зі шпинатом', 135, 200, 'горіхом кеш\'ю, сиром дор блю', 2, NULL, '2021-10-18 07:23:25'),
(3, 'Брускета з авокадо															', 119, 200, 'та томатом конфі', 1, NULL, NULL),
(4, 'М’ясний сет															', 245, 180, 'із пармезану, гауди, дор блю та камамбера', 1, NULL, NULL),
(5, 'Брускети з лососем слабосоленим															', 165, 120, 'томатом чері та авокадо ', 1, NULL, NULL),
(7, 'Класичний бургер', 170, 300, 'зі шніцелем із яловичини', 4, '2021-10-13 04:31:01', '2021-10-18 07:33:08'),
(8, 'Теплий салат із тигровими креветками', 325, 300, 'смаженими у топленому маслі з авокадо', 2, '2021-10-14 15:50:51', '2021-10-18 07:28:21'),
(9, 'Салат із свіжих овочів', 120, 260, 'з сиром фета', 2, '2021-10-14 16:26:04', '2021-10-18 07:09:51'),
(10, 'Медальйони зі свинини в беконі', 245, 170, 'Медальйони зі свинини в беконі', 4, '2021-10-18 07:34:11', '2021-10-18 07:34:11'),
(11, 'Бургер “Цезар”', 160, 300, 'зі стегном курчати, фрі та кетчупом', 4, '2021-10-18 07:35:04', '2021-10-18 07:35:04'),
(12, 'Вишнева телятина', 320, 200, 'філе з карамелізованими овочами', 4, '2021-10-18 07:35:53', '2021-10-18 07:35:53'),
(13, 'Бульйон з домашньої курки', 80, 300, 'та житніми тостами', 3, '2021-10-18 07:36:55', '2021-10-18 07:36:55'),
(14, 'Окрошка м’ясна', 85, 335, 'на кефірі', 3, '2021-10-18 07:37:41', '2021-10-18 07:37:41'),
(15, 'Борщ український', 115, 300, 'з квасолею, сметаною, тостами із салом', 3, '2021-10-18 07:38:36', '2021-10-18 07:38:36'),
(16, 'Крем-суп із шампіньйонів', 90, 200, 'житній хліб', 3, '2021-10-18 07:39:23', '2021-10-18 07:39:23'),
(17, 'Салат з курячим філе', 165, 290, 'апельсином та крем-соусом', 2, '2021-10-18 07:40:27', '2021-10-18 07:40:27'),
(18, 'Шоколадний фондан', 85, 100, 'з ванільним морозивом', 5, '2021-10-18 07:41:17', '2021-10-18 07:41:17'),
(19, 'Яблучний штрудель', 120, 180, 'з лісовим горіхом, корицею', 5, '2021-10-18 07:41:58', '2021-10-18 07:42:07'),
(20, 'Класичний чізкейк', 115, 180, 'подається з кавою', 5, '2021-10-18 07:42:48', '2021-10-18 07:42:48'),
(21, 'Наполеон', 90, 150, 'подається з капучіно', 5, '2021-10-18 07:45:11', '2021-10-18 07:45:11'),
(22, 'Піца Маргарита', 125, 500, 'з базиліком', 6, '2021-10-18 07:47:12', '2021-10-18 07:47:12'),
(23, 'Піца “4 сири”', 215, 500, 'дор блю, моцарела, пармезан, тонеро, томати', 6, '2021-10-18 07:50:23', '2021-10-18 07:50:23'),
(24, 'Піца з салямі', 185, 500, 'томати та рукола', 6, '2021-10-18 07:52:14', '2021-10-18 07:52:14'),
(25, 'Піца Цезар', 215, 550, 'з м\'ясом курки та салатом рамен', 6, '2021-10-18 07:54:49', '2021-10-18 07:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `dishes_groups`
--

CREATE TABLE `dishes_groups` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes_groups`
--

INSERT INTO `dishes_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Закуски', NULL, '2021-10-14 13:32:21'),
(2, 'Салат', NULL, '2021-10-14 17:04:49'),
(3, 'Супи', NULL, NULL),
(4, 'М\'ясо', NULL, NULL),
(5, 'Десерти', NULL, NULL),
(6, 'Піца', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_09_23_175820_create_tables_table', 1),
(4, '2021_09_23_180101_create_bookings_table', 1),
(5, '2021_09_23_191636_create_dishes_groups_table', 1),
(6, '2021_09_23_191644_create_dishes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint UNSIGNED NOT NULL,
  `count` int NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `count`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 0, '2021-10-18 07:03:36', '2021-10-18 07:03:36'),
(2, 5, 0, '2021-10-18 07:05:38', '2021-10-18 07:05:38'),
(3, 2, 0, '2021-10-18 07:05:41', '2021-10-18 07:05:41'),
(4, 6, 0, '2021-10-18 07:05:46', '2021-10-18 07:05:46'),
(5, 8, 0, '2021-10-18 07:05:50', '2021-10-18 07:05:50'),
(6, 2, 0, '2021-10-18 07:05:53', '2021-10-18 07:05:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_table_id_foreign` (`table_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dishes_dishes_group_id_foreign` (`dishes_group_id`);

--
-- Indexes for table `dishes_groups`
--
ALTER TABLE `dishes_groups`
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
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `count` (`count`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dishes_groups`
--
ALTER TABLE `dishes_groups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `booking_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `dishes_dishes_group_id_foreign` FOREIGN KEY (`dishes_group_id`) REFERENCES `dishes_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
