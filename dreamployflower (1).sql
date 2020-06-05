-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 01:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamployflower`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `full_name`, `password`, `email`, `picture`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'jhon', '$2y$10$ShxHVElSvszipJWKvkCPY.pI/kFX5up4TTb3ChSCRkiLphbBsQ2C.', 'admin@admin.com', 'admin.png', 'RYtX0kNEIq6Qv9aJaAtsRw0sg9qg9WhVZoHkeM33BggYHbMQLaWkk1oAsxPn', '2018-05-22 23:16:31', '2018-05-23 04:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `order_id`, `name`, `email`, `phone`, `mobile`, `country`, `city`, `state`, `zip`, `street`, `note`, `created_at`, `updated_at`) VALUES
(27, 31, 'shams shahriar suny', 'shams.suny@gmail.com', 32423423, 0, 'Bangladesh', 'tongi', 'State', '1704', 'ovijan10,auchpara,tongi,gazipur', 'none', '2018-05-29 03:23:48', '2018-05-29 03:23:48'),
(28, 32, 'shams shahriar suny', 'shams.suny@gmail.com', 32423423, 0, 'Bangladesh', 'tongi', 'State', '1704', 'ovijan10,auchpara,tongi,gazipur', 'none', '2018-05-29 03:25:44', '2018-05-29 03:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '800001', 1, 80, '2018-05-28 22:48:49', '2018-05-28 22:48:49'),
(2, '1', '800004', 1, 220, '2018-05-28 22:49:00', '2018-05-28 22:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(700002, 'Rule Number 95', 'Hercules . Hercules . Hercules . Hercules . Hercules . Hercules . Hercules . Hercules . Hercules .', '2018-05-25 22:19:34', '2018-05-25 22:19:34'),
(700003, 'The post', 'asdas gdsg dsgsd gdsgsdg nana nanan', '2018-05-25 22:20:03', '2018-05-25 23:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_22_031438_create_admins_table', 1),
(4, '2018_05_22_044838_create_products_table', 1),
(5, '2018_05_23_034837_create_carts_table', 1),
(6, '2018_05_23_060919_create_vats_table', 2),
(7, '2018_05_24_035024_create_billings_table', 3),
(8, '2018_05_24_040700_create_shippings_table', 3),
(9, '2018_05_24_041129_create_orders_table', 3),
(10, '2018_05_24_081524_create_posts_table', 4),
(11, '2018_05_26_032056_create_faqs_table', 5),
(12, '2018_05_29_032753_create_restpasswords_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `total_price`, `date`, `payment_method`, `shipping_method`, `status`, `created_at`, `updated_at`) VALUES
(31, 1, 800008, 3, 120, '2018-05-29', 'Cash On Delivery', 'normal', 'pending', '2018-05-29 03:23:48', '2018-05-29 03:23:48'),
(32, 1, 800008, 4, 160, '2018-05-29', 'Pay Pal', 'normal', 'pending', '2018-05-29 03:25:44', '2018-05-29 03:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `description`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'blog', 'The post', 'We are one', '5b067a1b029fb.jpg', '2018-05-24 02:38:51', '2018-05-24 02:38:51'),
(2, 'blog', 'Rule Number 95', 'Hercules . Hercules . Hercules . Hercules . Hercules . Hercules . Hercules . Hercules . Hercules .', '5b08d241af36a.jpg', '2018-05-25 21:19:29', '2018-05-25 21:19:29'),
(3, 'support', 'Ei Shono', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '5b08ef834d6d7.jpg', '2018-05-25 23:24:19', '2018-05-25 23:24:19'),
(4, 'event', 'The Event Post', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '5b08fb622da39.jpg', '2018-05-26 00:14:58', '2018-05-26 00:14:58'),
(5, 'about', 'The About Me', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.', '5b08fe0146809.jpg', '2018-05-26 00:26:09', '2018-05-28 00:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productCat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occasionCat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `productCat`, `occasionCat`, `price`, `discount`, `total_price`, `picture`, `created_at`, `updated_at`) VALUES
(800000, '', '', '', 9, 1, 9, '', NULL, NULL),
(800001, 'lili', 'Callia Lillies', 'Birthday', 100, 20, 80, '5b04f9882753b.jpg', '2018-05-22 23:18:00', '2018-05-22 23:18:00'),
(800002, 'Jhon Cena', 'Callia Lillies', 'Anniversary', 100, 50, 50, '5b05026e773d5.jpg', '2018-05-22 23:55:58', '2018-05-25 23:10:54'),
(800003, 'Cuty', 'Cymbidium Orchid', 'Birthday', 300, 100, 200, '5b0b7daa5188e.jpg', '2018-05-27 21:55:22', '2018-05-27 21:55:22'),
(800004, 'Areana Lily', 'Daises', 'Birthday', 240, 20, 220, '5b0b7e6ddcb2b.jpg', '2018-05-27 21:58:37', '2018-05-27 21:58:37'),
(800005, 'Amazon rose', 'Hydrandgeas', 'Birthday', 123, 11, 112, '5b0b7eed4cbb5.jpg', '2018-05-27 22:00:45', '2018-05-27 22:00:45'),
(800006, 'Camelia', 'Callia Lillies', 'Birthday', 109, 50, 59, '5b0b84bf9a5d4.jpg', '2018-05-27 22:25:35', '2018-05-27 22:25:35'),
(800007, 'Camelia', 'Plants', 'Birthday', 200, 50, 150, '5b0b84dbc6dbe.jpg', '2018-05-27 22:26:03', '2018-05-27 22:32:59'),
(800008, 'Camelia', 'Lilies', 'Birthday', 100, 60, 40, '5b0b855a30e14.jpg', '2018-05-27 22:28:10', '2018-05-27 22:28:10'),
(800009, 'Camelia', 'Callia Lillies', 'Birthday', 210, 0, 210, '5b0b85ee9ecaa.jpg', '2018-05-27 22:30:38', '2018-05-27 23:54:48'),
(800010, 'Weeding Lily', 'Others', 'Wedding', 220, 60, 160, '5b0b87ad862bb.jpg', '2018-05-27 22:38:05', '2018-05-27 22:38:05'),
(800011, 'Weedin Camelia', 'Daises', 'Wedding', 200, 50, 150, '5b0b8aa403722.jpg', '2018-05-27 22:50:44', '2018-05-27 22:50:44'),
(800012, 'Awesome Weeding', 'Cymbidium Orchid', 'Wedding', 300, 50, 250, '5b0b8af1252e1.jpg', '2018-05-27 22:52:01', '2018-05-27 22:52:01'),
(800013, 'Weeding Camo', 'Daises', 'Wedding', 320, 60, 260, '5b0b8b0c374e2.jpg', '2018-05-27 22:52:28', '2018-05-27 22:52:28'),
(800014, 'Weedin Camelia', 'Callia Lillies', 'Wedding', 200, 100, 100, '5b0b8baea8802.jpg', '2018-05-27 22:55:10', '2018-05-27 22:55:10'),
(800015, 'Weeding Lily', 'Plants', 'Wedding', 200, 50, 150, '5b0b8bc26218e.jpg', '2018-05-27 22:55:30', '2018-05-27 22:55:30'),
(800016, 'Weeding Camo', 'Daises', 'Wedding', 100, 20, 80, '5b0b8befe7f31.jpg', '2018-05-27 22:56:15', '2018-05-27 22:56:15'),
(800017, 'love liliy', 'Lilies', 'Love & Rommance', 100, 20, 80, '5b0b8ded5383d.jpg', '2018-05-27 23:04:45', '2018-05-27 23:04:45'),
(800018, 'Love Camelia', 'Others', 'Love & Rommance', 200, 20, 180, '5b0b8e95ac3a1.jpg', '2018-05-27 23:07:33', '2018-05-27 23:07:33'),
(800019, 'Love Camelia', 'Hydrandgeas', 'Love & Rommance', 200, 10, 190, '5b0b8f46655d7.jpg', '2018-05-27 23:10:30', '2018-05-27 23:10:30'),
(800020, 'Camelia', 'Callia Lillies', 'Love & Rommance', 500, 300, 200, '5b0b8f5bb91bf.jpg', '2018-05-27 23:10:51', '2018-05-27 23:10:51'),
(800021, 'Congrats Roses', 'Plants', 'Congrats', 100, 20, 80, '5b0b903a644c8.jpg', '2018-05-27 23:14:34', '2018-05-27 23:14:34'),
(800022, 'Congrats Daisi', 'Cymbidium Orchid', 'Congrats', 200, 100, 100, '5b0b90aea5ed4.jpg', '2018-05-27 23:16:30', '2018-05-27 23:16:30'),
(800023, 'Congrats Camelia', 'Cymbidium Orchid', 'Birthday', 100, 50, 50, '5b0b90f7657d6.jpg', '2018-05-27 23:17:43', '2018-05-28 00:37:48'),
(800024, 'Camelia', 'Hydrandgeas', 'Congrats', 260, 0, 260, '5b0b96b11baed.jpg', '2018-05-27 23:42:09', '2018-05-27 23:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `restpasswords`
--

CREATE TABLE `restpasswords` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `name`, `email`, `phone`, `mobile`, `country`, `city`, `state`, `zip`, `street`, `note`, `created_at`, `updated_at`) VALUES
(16, 31, 'shams shahriar suny', 'shams.suny@gmail.com', 32423423, 0, 'Bangladesh', 'tongi', 'State', '1704', 'ovijan10,auchpara,tongi,gazipur', 'none', '2018-05-29 03:23:48', '2018-05-29 03:23:48'),
(17, 32, 'shams shahriar suny', 'shams.suny@gmail.com', 32423423, 0, 'Bangladesh', 'tongi', 'State', '1704', 'ovijan10,auchpara,tongi,gazipur', 'none', '2018-05-29 03:25:44', '2018-05-29 03:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shamssuny', 'shams.suny@gmail.com', '$2y$10$dL8KpPxDPbPhTCZCmPqWBOLT9YHB4eXK9Br1fj2CgVcteqdu4QlUq', 1234, 'ovijan10,auchpara,tongi,gazipur', 'tXUwAzbL6AmXyCdO42Zqb4DFncpQ0fNFGiCp16BM98ocYW3N5uUasttmdFT8', '2018-05-22 23:16:58', '2018-05-22 23:16:58'),
(2, 'jhon', 'jhon@doe.com', '$2y$10$G1iQS0LKudx3jpKWc.Ot2./7T/NPD0Zm7OfwJwbiUmmoQcALf68ru', 1122344, '45/A, New Capital Street, New York.', 'CMeAR5poCRwG0luyx1qOTkCt5jIJzVIVEi3eETd3sCHrE8dMtQA69vGX0YU6', '2018-05-27 23:34:14', '2018-05-28 22:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `vats`
--

CREATE TABLE `vats` (
  `id` int(10) UNSIGNED NOT NULL,
  `vat` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vats`
--

INSERT INTO `vats` (`id`, `vat`, `created_at`, `updated_at`) VALUES
(1, 1.5, NULL, '2018-05-23 01:38:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restpasswords`
--
ALTER TABLE `restpasswords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `vats`
--
ALTER TABLE `vats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=700004;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=800025;

--
-- AUTO_INCREMENT for table `restpasswords`
--
ALTER TABLE `restpasswords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vats`
--
ALTER TABLE `vats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
