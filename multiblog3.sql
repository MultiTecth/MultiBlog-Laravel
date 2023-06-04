-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 04, 2023 at 02:31 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiblog3`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `friend_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`, `created_at`, `updated_at`) VALUES
(3, 2, 1, NULL, NULL),
(4, 1, 2, NULL, NULL);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_16_033139_create_posts_table', 1),
(6, '2023_04_16_035219_create_comments_table', 1),
(7, '2023_04_16_151332_add_username_to_users', 1),
(8, '2023_05_03_150426_create_friends_table', 1),
(9, '2023_05_07_081220_create_saved_posts', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('Pendidikan','News','Novel','Short Story') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `username`, `thumbnail`, `title`, `description`, `category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'MathQnA', 'thumbnail/@MathQnA/BkTBz0pOXxGIby67iCfw0SolJdMEn7sZHZKOeki9.jpg', 'News', '<p>ini adalah news ygy</p>', 'News', '2023-05-15 05:06:55', '2023-05-15 05:06:55', NULL),
(2, 'MathQnA', 'thumbnail/@MathQnA/pdVxXMKMMMUjUFqLRlUJrN4x68PFjimiSds4pGUo.png', 'pendidikan', '<p>ini pendidikan <i><strong>ygy</strong></i></p>', 'Pendidikan', '2023-05-15 05:07:54', '2023-05-15 05:07:54', NULL),
(3, 'MathQnA', 'thumbnail/@MathQnA/eQRNkgaxdD1iSPKOjNo76c1fzzho13BUzeqLrG3L.jpg', 'Novel', '<p><strong>ini novel </strong><i>ygy</i></p>', 'Novel', '2023-05-15 05:08:18', '2023-05-15 05:08:18', NULL),
(4, 'MathQnA', 'thumbnail/@MathQnA/gJFW9GmXRWs9gZg6uUEd4s3lmuiOxNNWgrVco8SI.jpg', 'cerpen', '<p>ini <i>cerpen</i> <strong>ygy</strong></p>', 'Short Story', '2023-05-15 05:08:40', '2023-05-15 05:08:40', NULL),
(5, 'matchaLOL', 'thumbnail/@matchaLOL/aCvKjMZwWy4D81ehwUOYTpAcfD9yfLW8eNFJRJPY.jpg', 'Presiden Berkunjung Ke Palestina', '<h2>Presiden berkunjung ke Palestina ygy</h2>', 'News', '2023-06-04 10:02:24', '2023-06-04 10:02:24', NULL),
(8, 'MathQnA', 'thumbnail/@MathQnA/tu65OQouNxj4IGkoKNF554WlljHZ8TSKeLQeESSl.jpg', 'Selamat pagi pemirsa', '<p>ada yang baru niccccchhh <i>WKKWKWKKW</i></p>', 'Pendidikan', '2023-06-04 12:40:59', '2023-06-04 12:40:59', NULL),
(9, 'MathQnA', 'thumbnail/@MathQnA/P6HIck9dpQgvCB0CEiQ0PetvTOYqo4ee8OWsWrKQ.jpg', 'Ada Gerhana Bulan Coyyy', '<p>waduh ada gerhana bulan penu ygy</p>', 'News', '2023-06-04 12:49:03', '2023-06-04 12:49:03', NULL),
(10, 'matchaLOL', 'thumbnail/@matchaLOL/yp09cDTSDvgLZE5QegYob6MXT3ACrjK4ZXfmVhxG.png', 'Ada Macha? ingat ada aku', '<p>heyyyyyyoooooo</p>', 'Novel', '2023-06-04 12:53:53', '2023-06-04 12:53:53', NULL),
(11, 'matchaLOL', 'thumbnail/@matchaLOL/tKtItzlqUpF7uZrJIwus9rGgrVuzk2mkR6XtaPie.png', 'Ada Macha? ingat ada aku', '<p>heyyyyyyoooooo</p>', 'Novel', '2023-06-04 12:54:03', '2023-06-04 12:54:03', NULL),
(12, 'matchaLOL', 'thumbnail/@matchaLOL/1cnMWOtEisMjMHJiIUphwTU8zHh91bnmOIKo8YIO.jpg', 'ini testing terakhir untuk sending email', '<p>halo bang WKKWKWKK<i>KWKWKWK</i></p>', 'Pendidikan', '2023-06-04 12:59:34', '2023-06-04 12:59:34', NULL),
(13, 'matchaLOL', 'thumbnail/@matchaLOL/Vrh17xbDCYOrPX4QPYRtb3trBIzffccC4kbWDmQU.jpg', 'ini testing terakhir untuk sending email', '<p>halo bang WKKWKWKK<i>KWKWKWK</i></p>', 'Pendidikan', '2023-06-04 12:59:41', '2023-06-04 12:59:41', NULL),
(14, 'MathQnA', 'thumbnail/@MathQnA/Vx7BBnL9UM2SzYEeZv9Z44mrVT35jv0DpdkAMqs8.png', 'testing buat real GMAIL COYYY', '<p>halo banh</p>', 'Pendidikan', '2023-06-04 13:21:26', '2023-06-04 13:21:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `saved_posts`
--

CREATE TABLE `saved_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saved_posts`
--

INSERT INTO `saved_posts` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(5, 2, 3, '2023-06-04 10:20:41', '2023-06-04 10:20:41'),
(6, 2, 2, '2023-06-04 10:20:46', '2023-06-04 10:20:46'),
(7, 2, 5, '2023-06-04 10:47:12', '2023-06-04 10:47:12'),
(8, 2, 1, '2023-06-04 12:25:10', '2023-06-04 12:25:10'),
(9, 1, 3, '2023-06-04 12:30:21', '2023-06-04 12:30:21'),
(10, 1, 5, '2023-06-04 12:30:25', '2023-06-04 12:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgpp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_google`, `username`, `imgpp`, `name`, `email`, `bio`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'MathQnA', 'user-pp/HdvTmnSvmEP4fpr74szgqb2mKlWmx3wJI97chwyH.png', 'shaq', 'shaqy9center@gmail.com', NULL, NULL, '$2y$10$wliaAKLNaIceCU5n2lPm..kdB1x9SL3ZJi/TpYWEzY79DdusgCYdq', NULL, '2023-05-15 04:24:03', '2023-05-15 04:24:03'),
(2, NULL, 'matchaLOL', 'user-pp/S77hhSk1Q82WWvXVTXtrFhRXh8HJdwiDy7dZeNsa.png', 'sabda', 'sabda@gmail.com', 'halo man teman', NULL, '$2y$10$QCsDnrwOKfG4yyJ9ICNVSeI0Z2tajljXRiBqMiAtaqd1d/mqEWluu', NULL, '2023-06-04 09:55:15', '2023-06-04 09:57:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `friends_user_id_friend_id_unique` (`user_id`,`friend_id`),
  ADD KEY `friends_friend_id_foreign` (`friend_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saved_posts`
--
ALTER TABLE `saved_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saved_posts_user_id_foreign` (`user_id`),
  ADD KEY `saved_posts_post_id_foreign` (`post_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `saved_posts`
--
ALTER TABLE `saved_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_friend_id_foreign` FOREIGN KEY (`friend_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `friends_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `saved_posts`
--
ALTER TABLE `saved_posts`
  ADD CONSTRAINT `saved_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `saved_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
