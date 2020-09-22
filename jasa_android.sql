-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 09:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasa_android`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `judul_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `judul_blog`, `slug`, `deskripsi`, `konten`, `foto`, `created_at`, `updated_at`) VALUES
(6, 3, 'Rahasia meningkatkan penjualan melalui website diedit', 'rahasia-meningkatkan-penjualan-melalui-website-diedit', 'meningkatkan jual beli melalui website', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse alias, quas corrupti iste porro necessitatibus exercitationem aspernatur incidunt odit molestiae sapiente ea, eius libero voluptatum sed. Sit illo omnis magnam odit, aut nobis voluptate labore reprehenderit consectetur tenetur, perspiciatis ipsa perferendis culpa quam animi sed dolore vel adipisci! Voluptates modi, ut nostrum magnam provident, culpa, illum beatae rem velit nam architecto aspernatur distinctio, eaque necessitatibus. Omnis libero tempora perferendis magnam minima dolorum aperiam porro impedit iusto? Est tempore quos libero quis iste eius facere cum debitis nam excepturi facilis laboriosam doloremque iusto in, deleniti veniam, consequatur nihil sapiente dicta optio, blanditiis. Quis optio porro blanditiis ipsum quo assumenda quaerat maxime ea perferendis ut a libero eligendi sed illo reiciendis, accusantium, qui! Distinctio, esse ducimus ab similique velit? Doloribus, eum, nostrum. Numquam voluptates magni quidem est, nemo corrupti, sequi aspernatur odit porro sunt laborum optio nisi quasi deleniti quo molestiae. Earum quam amet, explicabo ea soluta ullam inventore architecto quae ut beatae numquam, id dignissimos possimus, aspernatur rem pariatur fugit laborum, aliquam? Facere quis error dolores sint unde, aliquid nesciunt, iste explicabo saepe, distinctio ducimus debitis, vel nam! Sint nulla, adipisci qui incidunt fugit, impedit aut voluptatum assumenda odit, ut a.</p>', 'blog/BpwsrRypgdtENbDueIkmI1zli9mmlNEBve5hEKoM.jpeg', '2020-09-21 20:56:21', '2020-09-21 21:48:30'),
(7, 4, 'Google meluncurkan android 10 hari ini dengan codename \'Pie\'', 'google-meluncurkan-android-10-hari-ini-dengan-codename-pie', 'google meluncurkan android 10 hari ini', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse alias, quas corrupti iste porro necessitatibus exercitationem aspernatur incidunt odit molestiae sapiente ea, eius libero voluptatum sed. Sit illo omnis magnam odit, aut nobis voluptate labore reprehenderit consectetur tenetur, perspiciatis ipsa perferendis culpa quam animi sed dolore vel adipisci! Voluptates modi, ut nostrum magnam provident, culpa, illum beatae rem velit nam architecto aspernatur distinctio, eaque necessitatibus. Omnis libero tempora perferendis magnam minima dolorum aperiam porro impedit iusto? Est tempore quos libero quis iste eius facere cum debitis nam excepturi facilis laboriosam doloremque iusto in, deleniti veniam, consequatur nihil sapiente dicta optio, blanditiis. Quis optio porro blanditiis ipsum quo assumenda quaerat maxime ea perferendis ut a libero eligendi sed illo reiciendis, accusantium, qui! Distinctio, esse ducimus ab similique velit? Doloribus, eum, nostrum. Numquam voluptates magni quidem est, nemo corrupti, sequi aspernatur odit porro sunt laborum optio nisi quasi deleniti quo molestiae. Earum quam amet, explicabo ea soluta ullam inventore architecto quae ut beatae numquam, id dignissimos possimus, aspernatur rem pariatur fugit laborum, aliquam? Facere quis error dolores sint unde, aliquid nesciunt, iste explicabo saepe, distinctio ducimus debitis, vel nam! Sint nulla, adipisci qui incidunt fugit, impedit aut voluptatum assumenda odit, ut a.</p>', 'blog/AlMlJtbQpQeuvjuAivfi1VSPHvdNFQPbO5VNzbF6.jpeg', '2020-09-21 20:58:07', '2020-09-21 20:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(3, 'Windows', '2020-09-13 22:05:13', '2020-09-13 22:05:13'),
(4, 'Android', '2020-09-20 21:28:10', '2020-09-20 21:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kontak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nama_kontak`, `alamat`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Farhan edit', 'jl puwosari', 'farhan@gmail.com', 'asdasdaw', '2020-09-16 19:24:03', '2020-09-16 19:44:13'),
(2, 'Farhan', 'jl puwosari', 'prayogoyogi21@gmail.com', 'asd', '2020-09-20 20:08:11', '2020-09-20 20:08:11'),
(3, 'sandra', 'sutomo', 'sandra@mail.com', 'sawaa', '2020-09-20 20:10:12', '2020-09-20 20:10:12');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_07_064751_create_galleries_table', 1),
(5, '2020_09_07_065000_create_blogs_table', 1),
(6, '2020_09_07_065038_create_sliders_table', 1),
(7, '2020_09_07_065051_create_contacts_table', 1),
(8, '2020_09_07_065118_create_categories_table', 1),
(9, '2020_09_09_092618_create_testimonies_table', 1),
(10, '2020_09_17_044104_create_products_table', 2),
(11, '2020_09_22_034244_add_slug_to_blogs_table', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama_produk`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Aplikasi portal mahasiswa edit', 'aplikasi bla bla bla bla edit', 'product/fBe46iCfPFLKBT2afVFdR6fNsMxHaZCAn718Pgxl.png', '2020-09-16 21:56:41', '2020-09-16 22:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_slider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `nama_slider`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'slider1', 'slider/7cm5Cj7MkaXyjKQFO4g6ohxc3t2ONYwudYNXXB5o.jpeg', '2020-09-20 20:57:30', '2020-09-20 20:57:30'),
(3, 'slider2', 'slider/dFHlLxkYldXflt57ah0QFR3yTQbwTklWzfJg9VDP.jpeg', '2020-09-20 20:58:10', '2020-09-20 20:58:10'),
(4, 'slider3', 'slider/phkhUSUYJswAL9P0S7VZHe5wT2WjDZHyZwPRHejv.jpeg', '2020-09-20 20:58:21', '2020-09-20 20:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_testimoni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimoni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Farhan', 'farhan@gmail.com', NULL, '$2y$10$F5pR4ij.bYyWflD0U8T2EeJ.AnKww8aE.a0aTayJJdFfc73MzU0yS', NULL, '2020-09-14 19:46:49', '2020-09-14 19:46:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
