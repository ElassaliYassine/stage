-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 11:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_new_project_0.1`
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
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id_1` bigint(20) UNSIGNED NOT NULL,
  `user_id_2` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id_1`, `user_id_2`, `created_at`, `updated_at`) VALUES
(15, 4, 2, '2023-04-25 13:22:45', '2023-04-25 13:22:45'),
(17, 1, 2, '2023-04-25 13:59:37', '2023-04-25 13:59:37'),
(18, 4, 1, '2023-04-25 14:08:54', '2023-04-25 14:08:54'),
(20, 1, 4, '2023-04-25 14:17:02', '2023-04-25 14:17:02'),
(21, 2, 4, '2023-04-25 19:18:50', '2023-04-25 19:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `images_posts`
--

CREATE TABLE `images_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images_posts`
--

INSERT INTO `images_posts` (`id`, `post_id`, `image_path`, `created_at`, `updated_at`) VALUES
(28, 29, '6442a954644121682090324-.jpg', '2023-04-21 14:18:44', '2023-04-21 14:18:44'),
(29, 29, '6442a954704351682090324-.jpg', '2023-04-21 14:18:44', '2023-04-21 14:18:44'),
(36, 30, '6442b047c54c91682092103-.jpg', '2023-04-21 14:48:23', '2023-04-21 14:48:23'),
(37, 30, '6442b047dd95f1682092103-.jpg', '2023-04-21 14:48:23', '2023-04-21 14:48:23'),
(38, 30, '6442b047ea7da1682092103-.jpg', '2023-04-21 14:48:23', '2023-04-21 14:48:23'),
(39, 30, '6442b43d7f49c1682093117-.jpg', '2023-04-21 15:05:17', '2023-04-21 15:05:17'),
(41, 31, '6442c8434a6171682098243-.jpg', '2023-04-21 16:30:43', '2023-04-21 16:30:43'),
(42, 31, '6442c84368c6f1682098243-.jpg', '2023-04-21 16:30:43', '2023-04-21 16:30:43'),
(43, 32, '6442d6cd55f5d1682101965-.png', '2023-04-21 17:32:45', '2023-04-21 17:32:45'),
(44, 32, '6442d6cd704101682101965-.png', '2023-04-21 17:32:45', '2023-04-21 17:32:45'),
(45, 32, '6442d6cd8c9941682101965-.png', '2023-04-21 17:32:45', '2023-04-21 17:32:45'),
(46, 32, '6442d6cd9dd9a1682101965-.png', '2023-04-21 17:32:45', '2023-04-21 17:32:45'),
(47, 33, '644415edd854b1682183661-.png', '2023-04-22 16:14:21', '2023-04-22 16:14:21'),
(48, 33, '644415ee3e72b1682183662-.jpg', '2023-04-22 16:14:22', '2023-04-22 16:14:22'),
(49, 33, '644415ee756c91682183662-.png', '2023-04-22 16:14:22', '2023-04-22 16:14:22'),
(50, 34, '6447993bb33a61682413883-.png', '2023-04-25 08:11:23', '2023-04-25 08:11:23'),
(51, 34, '6447993c379e21682413884-.png', '2023-04-25 08:11:24', '2023-04-25 08:11:24'),
(52, 34, '6447993ca17241682413884-.png', '2023-04-25 08:11:24', '2023-04-25 08:11:24'),
(55, 37, '64479d22381fd1682414882-.png', '2023-04-25 08:28:02', '2023-04-25 08:28:02'),
(59, 44, '6447f0eec2c481682436334-.png', '2023-04-25 14:25:34', '2023-04-25 14:25:34'),
(60, 44, '6447f0eef14971682436334-.png', '2023-04-25 14:25:34', '2023-04-25 14:25:34'),
(61, 44, '6447f0ef31da21682436335-.jpg', '2023-04-25 14:25:35', '2023-04-25 14:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(5, 1, 29, '2023-04-21 15:00:57', '2023-04-21 15:00:57'),
(6, 2, 31, '2023-04-22 16:29:07', '2023-04-22 16:29:07'),
(7, 4, 30, '2023-04-25 11:11:45', '2023-04-25 11:11:45'),
(8, 4, 29, '2023-04-25 11:11:53', '2023-04-25 11:11:53'),
(9, 4, 44, '2023-04-25 14:27:41', '2023-04-25 14:27:41');

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
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(38, '2023_04_03_141150_create_posts_table', 1),
(39, '2023_04_06_184947_create_profiles_table', 1),
(40, '2023_04_15_140459_create_likes_table', 1),
(41, '2023_04_16_183106_add_profile_to_users', 1),
(42, '2023_04_16_230708_create_skills_table', 1),
(43, '2023_04_16_231152_create_followers_table', 1),
(44, '2023_04_20_121723_images_post', 2),
(45, '2023_04_26_152027_profiles', 3);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `categorie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_whats_app` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `active`, `user_id`, `categorie`, `title`, `description`, `price`, `region`, `city`, `number_whats_app`, `created_at`, `updated_at`) VALUES
(29, 1, 1, 'categorie', 'po', 'kp', '89789', 'Tanger-Tetouan-Al-Hoceima', 'Al Hoceima', 28913, '2023-04-21 14:18:44', '2023-04-25 08:45:30'),
(30, 1, 1, 'categorie', 'zoijd', 'jposidkqsml', '23788', 'Tanger-Tetouan-Al-Hoceima', 'Fahs Anjra', 237856, '2023-04-21 14:48:23', '2023-04-21 15:05:17'),
(31, 1, 1, 'building', '9wpjofikl', 'weopjweko', '120931289', 'Marrakech-Safi', 'Safi', 29837289, '2023-04-21 16:30:42', '2023-04-21 16:30:42'),
(32, 1, 2, 'eonstruction professionals', 'zienkl', 'zkoemlf', 'check with the  seller', 'Marrakech-Safi', 'Chemaia', 23456, '2023-04-21 17:32:45', '2023-04-21 17:32:45'),
(33, 1, 2, 'building', 'VIYOIJ', 'OJPOKNPNÖ', 'check with the  seller', 'Marrakech-Safi', 'Chemaia', 753475457, '2023-04-22 16:14:21', '2023-04-22 16:14:21'),
(34, 1, 2, 'building', 'bnay', 'bnay', 'check with the  seller', 'Marrakech-Safi', 'Safi', 789126483, '2023-04-25 08:11:22', '2023-04-25 08:11:22'),
(37, 1, 2, 'building', 'mmmm', 'mmmm', 'check with the  seller', 'Marrakech-Safi', 'Marrakech', 1289398, '2023-04-25 08:28:02', '2023-04-25 08:28:02'),
(44, 1, 4, 'building', 'iuhsni', 'aaaaaaaaaaa', '1289', 'Draa-Tafilalet', 'Tinghir', 1234567890, '2023-04-25 14:25:34', '2023-04-25 14:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brithday` date DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `address`, `url_facebook`, `url_instagram`, `brithday`, `gender`, `work`, `region`, `city`) VALUES
(1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'safi ?12?'),
(2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chemaia');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brithday` date DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_admin`, `name`, `lastname`, `img_user`, `number_phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `address`, `url_facebook`, `url_instagram`, `brithday`, `gender`, `work`, `region`, `city`) VALUES
(1, 1, 'yassine', 'allme', '6440208eed435-.png', 1234567890, 'yassine@gmail.com', NULL, '$2y$10$GhwZAhjq.4W/Q6we/N1.w.y4Guqu6KyryS3jaaWS/hBJuq5EWeHx6', NULL, '2023-04-19 16:10:39', '2023-04-19 16:10:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, 'yassin1', '12', '64490e6dbdd101682509421-.jpg', 1234567899, 'user2@gmail.com', NULL, '$2y$10$8j5CiNzMQERJUM2/QB1R7OvqwtovGIEGs/LuOjIUIGLLFwG36Ffte', NULL, '2023-04-21 17:10:13', '2023-04-26 13:26:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0, 'user 3', 'lastname3', '6447af465004b-.jpg', 704371936, 'user3@gmail.com', NULL, '$2y$10$ReC9GextRUbdC.YjXSAREuvwIE6LnMS1LLVK.OV3VoSlaZHZl.L/2', NULL, '2023-04-25 09:45:26', '2023-04-25 09:45:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `followers_user_id_1_user_id_2_unique` (`user_id_1`,`user_id_2`),
  ADD KEY `followers_user_id_2_foreign` (`user_id_2`);

--
-- Indexes for table `images_posts`
--
ALTER TABLE `images_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_posts_post_id_foreign` (`post_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `likes_user_id_post_id_unique` (`user_id`,`post_id`),
  ADD KEY `likes_post_id_foreign` (`post_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `images_posts`
--
ALTER TABLE `images_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_user_id_1_foreign` FOREIGN KEY (`user_id_1`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `followers_user_id_2_foreign` FOREIGN KEY (`user_id_2`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images_posts`
--
ALTER TABLE `images_posts`
  ADD CONSTRAINT `images_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
