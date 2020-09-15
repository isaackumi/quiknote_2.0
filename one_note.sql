-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2020 at 04:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `one_note`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `note_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 1, 13, '2020-07-30 15:09:00', '2020-07-30 15:09:00', NULL),
(16, 1, 12, '2020-07-30 15:30:55', '2020-07-30 15:30:55', NULL),
(17, 1, 14, '2020-07-30 15:53:14', '2020-07-30 15:53:14', NULL),
(18, 1, 19, '2020-09-02 16:32:18', '2020-09-02 16:32:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note_id` int(11) NOT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `comment_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_university` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `note_id`, `photo_url`, `comment_name`, `comment_university`, `comment_message`, `created_at`, `updated_at`) VALUES
(1, 12, 'default.jpg', 'William Ampedu', 'Central University', 'nfnmfm', '2020-07-30 16:58:22', '2020-07-30 16:58:22'),
(2, 13, 'default.jpg', 'Paul', 'Ashesi', 'Interesting read', '2020-07-30 17:14:29', '2020-07-30 17:14:29'),
(3, 13, 'default.jpg', 'Herman Duse', 'Ashesi', 'Oh woow', '2020-07-30 17:16:13', '2020-07-30 17:16:13'),
(4, 13, 'default.jpg', 'Asabee', 'Legon', 'Nice', '2020-07-30 22:28:45', '2020-07-30 22:28:45'),
(5, 13, 'default.jpg', 'Obese Carter', 'Ashesi University', 'interesting.... how do i get this note?', '2020-08-01 05:28:56', '2020-08-01 05:28:56'),
(6, 12, 'default.jpg', 'Isaac Kumi', 'TTU', 'I need this note!!', '2020-08-01 05:41:35', '2020-08-01 05:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `momo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `momo`, `package_name`, `network`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '04543344444', 'Premium', 'Airtel-Tigo', 1, '2020-07-27 23:17:50', '2020-07-27 23:17:50', NULL),
(3, '87657890', 'Standard', 'hgfdfg', 3, '2020-07-28 02:30:24', '2020-07-28 02:30:24', NULL),
(4, '0548769251', 'Standard', 'Vodafone', 2, '2020-08-01 03:46:23', '2020-08-01 03:46:23', NULL),
(5, '12346777777', 'Premium', 'MTN', 5, '2020-08-01 05:19:56', '2020-08-01 05:19:56', NULL);

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2020_07_21_120644_create_memberships_table', 1),
(17, '2020_07_21_120712_create_notes_table', 1),
(18, '2020_07_22_191910_add_photo_url_to_user', 1),
(19, '2020_07_30_101934_create_carts_table', 2),
(21, '2020_07_30_160813_create_comments_table', 3),
(22, '2020_08_01_191308_add_note_status_to_notes', 4),
(23, '2020_09_02_154113_create_transaction_histories_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `note_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_pdf_image_sample` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_creator_achievements` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_price` int(11) NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `note_status`, `note_title`, `note_thumbnail`, `note_description`, `note_type`, `note_pdf`, `note_pdf_image_sample`, `note_creator_achievements`, `note_price`, `course_name`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, 'Approved', 'Note Upload Demo - premium Member', 'PIC FOR FLIER_1596260670.jpg', 'This note will appear on the homepage..', 'Study Guide', 'Screenshot 2020-07-31 at 11.50.17 AM_1596260670.png', 'Screenshot 2020-07-31 at 11.50.17 AM_1596260670.png', 'kjejkrngjl LJK LJRHTNYI', 4, 'Internet of Things', 5, '2020-08-01 05:44:30', '2020-08-15 17:54:51', NULL),
(20, 'Approved', 'nk/kjewf', '641B30_1597455691.png', 'reg', 'Research Paper', 'Python Crash Course_1597455691.pdf', 'e-voting-concept-man-women-vote-online-pros-cons-freedom-choices-democracy-flat-vector-illustration-can-be-used-191391853_1597455691.jpg', 'vaerg', 5, 'AI', 1, '2020-08-15 01:41:31', '2020-08-15 17:54:54', NULL);

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
-- Table structure for table `transaction_histories`
--

CREATE TABLE `transaction_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `major`, `university`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `photo_url`) VALUES
(1, 'isaac kumi', 'MIS', 'Ashesi', 'test@test.com', NULL, '$2y$10$y1nbCAGseza7bFKVR8.tpOTfV1mGV9lyYWrG39hz0Z2vI2cjHglbW', NULL, '2020-07-26 20:57:19', '2020-07-30 13:14:26', '1596114866.jpg'),
(2, 'test User', 'major', 'uni', 'test1@test1.com', NULL, '$2y$10$WfeVomabJyfRv2l1BG46M.7A6OxVwPFKdcOfr5nvkzqk3ceBfqjVO', NULL, '2020-07-27 20:56:51', '2020-07-27 20:56:51', 'default.jpg'),
(4, 'isaackumi', 'Major', 'UCC', 'test1@test.com', NULL, '$2y$10$7HI8Fq6ElkyKjvRIkwvzSemRtswDjm5xhxIkDTkLEFO0qKsCIhAZS', NULL, '2020-07-30 15:57:13', '2020-07-30 15:57:13', 'default.jpg'),
(5, 'I_am_a_premium_user', 'MIS', 'Premium University', 'premium@premium.com', NULL, '$2y$10$U28E7.e1MhaQqQeMbIsfE.Kc9eoW/wvVIscInJVRsALVD4Ig7AiRG', NULL, '2020-08-01 05:14:09', '2020-08-01 05:14:09', 'default.jpg'),
(6, '12343', 'wEGF', 'ERG', 'isaa@gmai', NULL, '$2y$10$szI2ee0Z0Gj9W1b4kK.hn.5Gq4UVYIx5vdaZZZmX5lpPo3zoCZoUy', NULL, '2020-09-15 10:52:49', '2020-09-15 10:52:49', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `memberships_momo_unique` (`momo`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `transaction_histories`
--
ALTER TABLE `transaction_histories`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaction_histories`
--
ALTER TABLE `transaction_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
