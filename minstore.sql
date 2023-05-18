-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 07:25 PM
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
-- Database: `minstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quatity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 'Mens', 0, 'mens', '2022-12-08 06:52:01', '2022-12-08 06:52:01', NULL),
(14, 'Womens', 0, 'womens', '2022-12-08 06:52:14', '2022-12-08 06:52:14', NULL),
(15, 'Accessories', 0, 'accessories', '2022-12-08 06:52:30', '2022-12-08 06:52:30', NULL),
(17, 'Kids', 0, 'kids', '2022-12-08 06:58:13', '2022-12-08 12:27:37', '2022-12-08 12:27:37'),
(19, 'Shoes', 0, 'shoes', '2022-12-08 06:59:06', '2022-12-08 06:59:06', NULL),
(27, 'woolly', 13, 'woolly', '2022-12-08 07:04:17', '2022-12-08 07:04:17', NULL),
(28, 'woolly', 14, 'woolly', '2022-12-08 07:04:22', '2022-12-08 07:04:22', NULL),
(29, 'woolly', 17, 'woolly', '2022-12-08 07:04:29', '2022-12-08 07:04:29', NULL),
(30, 'Nike', 19, 'nike', '2022-12-08 07:04:39', '2022-12-08 07:04:39', NULL),
(31, 'Ananas', 19, 'ananas', '2022-12-08 07:04:47', '2022-12-08 07:04:47', NULL),
(32, 'jordan', 19, 'jordan', '2022-12-08 07:05:14', '2022-12-08 07:05:14', NULL),
(33, 'dress', 14, 'dress', '2022-12-08 07:05:59', '2022-12-08 07:05:59', NULL),
(34, 't-shirt', 13, 't-shirt', '2022-12-08 07:06:27', '2022-12-08 07:06:27', NULL),
(35, 't-shirt', 17, 't-shirt', '2022-12-08 07:06:46', '2022-12-08 07:06:46', NULL),
(36, 'trousers', 13, 'trousers', '2022-12-08 07:07:40', '2022-12-08 07:07:40', NULL),
(37, 'trousers', 14, 'trousers', '2022-12-08 07:07:46', '2022-12-08 07:07:46', NULL),
(38, 'trousers', 17, 'trousers', '2022-12-08 07:07:53', '2022-12-08 07:07:53', NULL),
(39, 'clothing', 13, 'clothing', '2022-12-08 07:08:21', '2022-12-08 07:08:21', NULL),
(40, 'clothing', 14, 'clothing', '2022-12-08 07:08:27', '2022-12-08 07:08:27', NULL),
(41, 'clothing', 17, 'clothing', '2022-12-08 07:08:33', '2022-12-08 07:08:33', NULL),
(42, 'sweatshirt', 13, 'sweatshirt', '2022-12-08 07:09:17', '2022-12-08 07:09:17', NULL),
(48, 'Fashion', 0, 'fashion', '2022-12-08 12:26:23', '2022-12-09 02:11:54', '2022-12-09 02:11:54'),
(49, 'Classicals', 0, 'classicals', '2022-12-08 12:27:18', '2022-12-13 13:20:38', NULL),
(50, 'Kids', 0, 'kids', '2022-12-08 12:28:11', '2022-12-08 12:32:19', '2022-12-08 12:32:19'),
(51, 'Accessories', 15, 'accessories', '2022-12-09 02:11:27', '2022-12-09 02:47:10', '2022-12-09 02:47:10'),
(52, 'Basic', 49, 'basic', '2022-12-09 02:11:45', '2022-12-09 02:52:44', '2022-12-09 02:52:44'),
(53, 'Test', 0, 'test', '2022-12-13 13:22:31', '2022-12-13 13:22:41', '2022-12-13 13:22:41'),
(54, 'test', 0, 'test', '2022-12-13 13:28:14', '2022-12-13 13:28:37', '2022-12-13 13:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `customer_password`, `created_at`, `updated_at`) VALUES
(30, 'Nguyễn Hoàng Minh', 'nhminh26@gmail.com', '0838212991', 'Đường 106, Tăng Nhơn Phú A', '$2y$10$CUOm9pebNnzaI4ND9.ISr.M6/zRIsTGyhg9tF2xxEThVj33cA8a4q', '2022-12-12 05:17:13', '2022-12-12 05:17:13'),
(31, 'Trần Đức', 'trandc3015@gmail.com', '0999999999', 'Tân Bình', '$2y$10$d7cZ73FOU3G0GsAPVQNZCeWwphL6H88/VUcX.ZXjHY6HVlMg9PlbW', '2022-12-13 01:32:12', '2022-12-13 01:32:12'),
(32, 'Nguyễn Hữu Hạnh', 'nguyenhuuhanh480@gmail.com', '0123456789', 'ufm', '$2y$10$djaWViaxofIkeEOSNKbg8.fM/.PeVdl0CG/hnsC.jD1w9RuOlTJqG', '2022-12-13 08:32:01', '2022-12-13 08:32:01'),
(33, 'Nguyễn Hoàng Minh', 'minhne@gmail.com', '0838212991', 'Đường 106, Tăng Nhơn Phú A', '$2y$10$yUU9P7V5dnq8Rwkw58.MfuCpbIROYH/BNlBiz49ClDwCr3O02q/hq', '2022-12-13 08:34:36', '2022-12-13 08:34:36'),
(34, 'Nguyễn Hoàng Minh', 'nhminh2610@gmail.com', '0838212991', 'Đường 106, Tăng Nhơn Phú A', '$2y$10$63Hzkr/vH.rSZwkqYooqAu.QhAF3zN3IhC8CTGKPl0e0INfHxaLWe', '2022-12-13 11:45:08', '2022-12-13 11:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `slug`, `deleted_at`) VALUES
(21, 'Menu sản phẩm mùa Thu', 0, '2022-12-09 18:11:20', '2022-12-09 18:11:50', 'menu-san-pham-mua-thu', '2022-12-09 18:11:50'),
(22, 'Bộ sưu tập Xuân - Hè', 0, '2022-12-09 18:11:45', '2022-12-09 18:11:45', 'bo-suu-tap-xuan-he', NULL),
(23, 'Bộ sưu tập Thu-Đông', 0, '2022-12-09 18:11:59', '2022-12-13 13:23:03', 'bo-suu-tap-thu-dong', NULL),
(24, 'Nguyễn Hoàng Minh', 0, '2022-12-13 13:24:33', '2022-12-13 13:24:36', 'nguyen-hoang-minh', '2022-12-13 13:24:36'),
(25, 'Nguyễn Hoàng Minhdđ', 0, '2022-12-13 13:26:11', '2022-12-13 13:26:21', 'nguyen-hoang-minhdd', '2022-12-13 13:26:21'),
(26, 'Nguyễn Hoàng Minh', 0, '2022-12-13 13:29:00', '2022-12-13 13:29:52', 'nguyen-hoang-minh', '2022-12-13 13:29:52');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_13_155850_create_categories_table', 1),
(6, '2022_11_28_154540_add_colunm_deleted_at_table_categories', 2),
(7, '2022_11_28_155357_add_colunm_deleted_at_table_categories', 3),
(8, '2022_11_29_075056_create_menus_table', 4),
(9, '2022_11_29_075735_create_menus_table', 5),
(10, '2022_11_29_132513_add_colunm_slug_to_menus_table', 6),
(11, '2022_11_29_145417_add_colunm_soft_delete_to_menus_table', 7),
(12, '2022_11_30_130006_create_products_table', 8),
(13, '2022_11_30_130434_create_product_images_table', 8),
(14, '2022_11_30_130825_create_tags_table', 8),
(15, '2022_11_30_130929_create_product_tags_table', 8),
(16, '2022_12_01_135536_add_column_feature_image_name', 9),
(17, '2022_12_01_145524_add_column_image_name_to_table_product_image', 10),
(18, '2022_12_02_093823_add_column_delete_at_to_table_product', 11),
(19, '2022_12_02_154644_create_sliders_table', 12),
(20, '2022_12_03_221047_add_column_delete_at_to_table_slider', 13),
(21, '2022_12_03_222651_create_settings_table', 14),
(22, '2022_12_04_100624_add_column_type_setting_table', 15),
(23, '2022_12_05_174244_create_roles_table', 16),
(24, '2022_12_05_174323_create_permissions_table', 16),
(25, '2022_12_05_174555_create_table_user_role', 16),
(26, '2022_12_05_174636_create_table_permission_role', 16),
(27, '2022_12_06_135659_add_column_delete_at_table_user', 17),
(28, '2022_12_06_143526_add_column_parent_id_permission', 18),
(29, '2022_12_06_145931_add_column_key_permission_table', 19),
(30, '2022_12_09_150642_create_table_cart', 20),
(31, '2022_12_09_151425_create_carts_table', 21),
(32, '2022_12_09_195652_create_table_customer', 22),
(33, '2022_12_09_205509_create_table_customer', 23),
(34, '2022_12_10_003909_create_table_customer', 24),
(35, '2022_12_10_141634_create_table_shipping', 25),
(36, '2022_12_10_171406_create_table_shipping', 26);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `key_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `created_at`, `updated_at`, `parent_id`, `key_code`) VALUES
(1, 'Danh mục sản phẩm', 'Danh mục sản phẩm', NULL, NULL, 0, ''),
(2, 'Danh sách danh mục', 'Danh sách danh mục', NULL, NULL, 1, 'list_category'),
(3, 'Thêm danh mục', 'Thêm danh mục', NULL, NULL, 1, 'add_category'),
(4, 'Sửa danh mục', 'Sửa danh mục', NULL, NULL, 1, 'edit_category'),
(5, 'Xóa danh mục', 'Xóa danh mục', NULL, NULL, 1, 'delete_category'),
(6, 'Menus', 'Menu', NULL, NULL, 0, ''),
(7, 'Danh sách menu', 'Danh sách menu', NULL, NULL, 6, 'list_menu'),
(8, 'Thêm menu', 'Thêm menu', NULL, NULL, 6, 'add_menu'),
(9, 'Sửa menu', 'Sửa menu', NULL, NULL, 6, 'edit_menu'),
(10, 'Xóa menu', 'Xóa menu', NULL, NULL, 6, 'delete_menu'),
(11, 'Slider', 'Slider', NULL, NULL, 0, ''),
(12, 'Danh sách Slider', 'Danh sách Slider', NULL, NULL, 11, 'list_slider'),
(13, 'Thêm Slider', 'Thêm Slider', NULL, NULL, 11, 'add_slider'),
(14, 'Sửa Slider', 'Sửa Slider', NULL, NULL, 11, 'edit_slider'),
(15, 'Xóa Slider', 'Xóa Slider', NULL, NULL, 11, 'delete_slider'),
(16, 'Sản phẩm', 'Sản phẩm', NULL, NULL, 0, ''),
(17, 'Danh sách sản phẩm', 'Danh sách sản phẩm', NULL, NULL, 16, 'list_product'),
(18, 'Thêm sản phẩm', 'Thêm sản phẩm', NULL, NULL, 16, 'add_product'),
(19, 'Sửa sản phẩm', 'Sửa sản phẩm', NULL, NULL, 16, 'edit_product'),
(20, 'Xóa sản phẩm', 'Xóa sản phẩm', NULL, NULL, 16, 'delete_product'),
(21, 'Cài đặt', 'Cài đặt', NULL, NULL, 0, ''),
(22, 'Danh sách cài đặt', 'Danh sách cài đặt', NULL, NULL, 21, 'list_setting'),
(23, 'Thêm cài đặt', 'Thêm cài đặt', NULL, NULL, 21, 'add_setting'),
(24, 'Sửa cài đặt', 'Sửa cài đặt', NULL, NULL, 21, 'edit_setting'),
(25, 'Xóa cài đặt', 'Xóa cài đặt', NULL, NULL, 21, 'delete_setting'),
(26, 'Nhân viên', 'Nhân viên', NULL, NULL, 0, ''),
(27, 'Danh sách nhân viên', 'Danh sách nhân viên', NULL, NULL, 26, 'list_user'),
(28, 'Thêm nhân viên', 'Thêm nhân viên', NULL, NULL, 26, 'add_user'),
(29, 'Sửa nhân viên', 'Sửa nhân viên', NULL, NULL, 26, 'edit_user'),
(30, 'Xóa nhân viên', 'Xóa nhân viên', NULL, NULL, 26, 'delete_user'),
(31, 'Vai trò', 'Vai trò', NULL, NULL, 0, ''),
(32, 'Danh sách vai trò', 'Danh sách vai trò', NULL, NULL, 31, 'list_role'),
(33, 'Thêm vai trò', 'Thêm vai trò', NULL, NULL, 31, 'add_role'),
(34, 'Sửa vai trò', 'Sửa vai trò', NULL, NULL, 31, 'edit_role'),
(35, 'Xóa vai trò', 'Xóa vai trò', NULL, NULL, 31, 'delete_role'),
(41, 'Permission', 'Cho phép người dùng', NULL, NULL, 0, ''),
(42, 'Danh sách permission', 'Danh sách permissio', NULL, NULL, 41, 'list_permission'),
(43, 'Thêm permission', 'Thêm permissio', NULL, NULL, 41, 'add_permission'),
(44, 'Xóa permission', 'Xóa permissio', NULL, NULL, 41, 'delete_permission'),
(45, 'role', 'role', '2022-12-13 14:09:08', '2022-12-13 14:09:08', 0, NULL),
(46, 'Xem danh sách', 'Xem danh sách', '2022-12-13 14:09:08', '2022-12-13 14:09:08', 45, 'role_Xem danh sách'),
(47, 'Thêm', 'Thêm', '2022-12-13 14:09:08', '2022-12-13 14:09:08', 45, 'role_Thêm'),
(48, 'Sửa', 'Sửa', '2022-12-13 14:09:08', '2022-12-13 14:09:08', 45, 'role_Sửa'),
(49, 'Xóa', 'Xóa', '2022-12-13 14:09:08', '2022-12-13 14:09:08', 45, 'role_Xóa');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 5, 2, NULL, NULL),
(37, 1, 32, NULL, NULL),
(39, 1, 34, NULL, NULL),
(40, 1, 35, NULL, NULL),
(87, 3, 2, NULL, NULL),
(88, 3, 4, NULL, NULL),
(89, 3, 7, NULL, NULL),
(90, 3, 9, NULL, NULL),
(91, 3, 12, NULL, NULL),
(92, 3, 14, NULL, NULL),
(93, 3, 17, NULL, NULL),
(94, 3, 19, NULL, NULL),
(177, 2, 2, NULL, NULL),
(181, 2, 7, NULL, NULL),
(185, 2, 12, NULL, NULL),
(189, 2, 17, NULL, NULL),
(203, 1, 2, NULL, NULL),
(204, 1, 3, NULL, NULL),
(205, 1, 4, NULL, NULL),
(206, 1, 5, NULL, NULL),
(207, 1, 7, NULL, NULL),
(208, 1, 8, NULL, NULL),
(209, 1, 9, NULL, NULL),
(210, 1, 10, NULL, NULL),
(211, 1, 12, NULL, NULL),
(212, 1, 13, NULL, NULL),
(213, 1, 14, NULL, NULL),
(214, 1, 15, NULL, NULL),
(215, 1, 17, NULL, NULL),
(216, 1, 18, NULL, NULL),
(217, 1, 19, NULL, NULL),
(218, 1, 20, NULL, NULL),
(219, 1, 22, NULL, NULL),
(220, 1, 23, NULL, NULL),
(221, 1, 24, NULL, NULL),
(222, 1, 25, NULL, NULL),
(223, 1, 27, NULL, NULL),
(224, 1, 28, NULL, NULL),
(225, 1, 29, NULL, NULL),
(226, 1, 30, NULL, NULL),
(227, 1, 33, NULL, NULL),
(228, 1, 42, NULL, NULL),
(229, 1, 43, NULL, NULL),
(230, 1, 44, NULL, NULL),
(231, 3, 3, NULL, NULL),
(232, 3, 5, NULL, NULL),
(233, 3, 8, NULL, NULL),
(234, 3, 10, NULL, NULL),
(235, 3, 13, NULL, NULL),
(236, 3, 15, NULL, NULL),
(237, 3, 18, NULL, NULL),
(238, 3, 20, NULL, NULL),
(239, 3, 22, NULL, NULL),
(240, 3, 23, NULL, NULL),
(241, 3, 24, NULL, NULL),
(242, 3, 25, NULL, NULL),
(243, 3, 27, NULL, NULL),
(244, 3, 28, NULL, NULL),
(245, 3, 29, NULL, NULL),
(246, 3, 30, NULL, NULL),
(247, 3, 32, NULL, NULL),
(248, 3, 33, NULL, NULL),
(249, 3, 34, NULL, NULL),
(250, 3, 35, NULL, NULL),
(251, 3, 42, NULL, NULL),
(252, 3, 43, NULL, NULL),
(253, 3, 44, NULL, NULL),
(254, 4, 2, NULL, NULL),
(255, 4, 3, NULL, NULL),
(256, 4, 4, NULL, NULL),
(257, 4, 7, NULL, NULL),
(258, 4, 8, NULL, NULL),
(259, 4, 9, NULL, NULL),
(260, 4, 12, NULL, NULL),
(261, 4, 13, NULL, NULL),
(262, 4, 14, NULL, NULL),
(263, 4, 22, NULL, NULL),
(264, 4, 23, NULL, NULL),
(265, 4, 24, NULL, NULL),
(266, 4, 25, NULL, NULL),
(267, 6, 2, NULL, NULL),
(268, 6, 3, NULL, NULL),
(269, 6, 4, NULL, NULL),
(270, 6, 5, NULL, NULL),
(271, 1, 46, NULL, NULL),
(272, 1, 47, NULL, NULL),
(273, 1, 48, NULL, NULL),
(274, 1, 49, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `feature_image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feature_image_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `feature_image_path`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `feature_image_name`, `deleted_at`) VALUES
(20, 'Fujifilm X100T 16 MP Digital Camera', 520, '/storage/product/1/8GBsjZBJDq9UpuO7mpcw.png', 'Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis', 1, 27, '2022-12-08 08:45:36', '2022-12-09 02:13:05', 'product_9.png', NULL),
(21, 'Blue Yeti USB Microphone Blackout Edition', 120, '/storage/product/1/aynM8C12XrF1a0zOlBfT.png', 'Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...', 1, 28, '2022-12-08 08:46:47', '2022-12-09 02:12:57', 'product_3.png', NULL),
(23, 'Mắt kính chính hãng Fila SFI209', 250, '/storage/product/1/sRhJGPYcS2I1xU6bAkTr.jpg', 'The name originated from the fact that most corrective lenses were actually made of glass.', 1, 15, '2022-12-08 08:50:27', '2022-12-09 02:47:41', '2.jpg', NULL),
(24, 'Mắt kính chính hãng Fila', 250, '/storage/product/1/jLajOaIeAT6IgDrOc1zz.jpg', 'Mắt kính chính hãng Fila SFI209, sản phẩm tới từ thương hiệu thời trang của xứ sở cờ hoa – Mỹ. Thiết kế của kính Fila SFI209 với form vuông trẻ trung, hiện đại không kém phần sang trọng.', 1, 15, '2022-12-08 08:51:18', '2022-12-09 02:47:32', '1.jpg', NULL),
(25, 'Mắt kính chính hãng Fila SFI2022', 500, '/storage/product/1/DhCnlXMOEhXQXBDvZxQS.jpg', 'Sản phẩm tới từ thương hiệu thời trang của xứ sở cờ hoa – Mỹ. Thiết kế của kính Fila SFI209 với form vuông trẻ trung, hiện đại không kém phần sang trọng.', 1, 15, '2022-12-08 08:52:08', '2022-12-09 02:47:24', '2.jpg', NULL),
(26, 'Pryma Headphones, Rose Gold & Grey', 500, '/storage/product/1/vYZ4egYTqk1f3w0TzRbo.jpg', 'Pryma Headphones, Rose Gold & Grey x Pryma Headphones, Rose Gold & Grey', 1, 39, '2022-12-08 09:12:02', '2022-12-09 02:04:26', '1.jpg', NULL),
(27, 'Pryma Headphones', 150, '/storage/product/1/4xBy5zaiZFsp24I6UNes.jpg', 'Những chiếc váy mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 40, '2022-12-08 09:13:40', '2022-12-08 09:13:40', 'main.jpg', NULL),
(28, 'Samsung CF591 Series Curved 27-Inch FHD Monitor', 200, '/storage/product/1/mzFHY6oNpIG4eYfU3yEI.jpg', 'Những chiếc áo mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 40, '2022-12-08 09:14:42', '2022-12-08 09:14:42', 'main.jpg', NULL),
(29, 'Samsung CF591 Series Curved FHD', 200, '/storage/product/1/psLtbLiy8w3bj0jIWVfN.jpg', 'Những chiếc áo mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 37, '2022-12-08 09:15:46', '2022-12-09 02:10:50', 'main.jpg', NULL),
(30, 'Fujifilm X100T 16 MP Digital', 700, '/storage/product/1/rS1aFVgp2Kg2zPTWpbuc.jpg', 'Những chiếc váy mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 14, '2022-12-08 09:16:30', '2022-12-08 11:39:29', 'main.jpg', NULL),
(31, 'Samsung CF591 Series', 450, '/storage/product/1/JrK5SIjo9rjbPQuWNfss.jpg', 'Những chiếc váy mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 40, '2022-12-08 09:17:13', '2022-12-09 02:13:25', '5.jpg', NULL),
(32, 'Fujifilm X100T 16 MP', 270, '/storage/product/1/a7LUhmqSoUUJQmYm9VsB.jpg', 'Những chiếc túi mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 15, '2022-12-08 09:18:03', '2022-12-09 02:48:08', 'main.jpg', NULL),
(33, 'Samsung CF591 Series Curved 20', 500, '/storage/product/1/7maA9QulkSirvKflFAwo.jpg', 'Những chiếc ví mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 15, '2022-12-08 09:18:37', '2022-12-09 02:47:52', '1.jpg', NULL),
(34, 'Samsung  Series Curved', 500, '/storage/product/1/XcFydJYqxtzRaZUflaGz.jpg', 'Những chiếc váy mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 33, '0000-00-00 00:00:00', '2022-12-09 02:12:46', '1.jpg', NULL),
(35, 'Samsung 100 Series Curved FHD', 500, '/storage/product/1/obBrE01U4nfP971bSUB9.jpg', 'Những chiếc váy mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 33, '2022-12-08 09:19:48', '2022-12-09 02:04:11', '3.jpg', NULL),
(36, 'Samsung 200 Series Curved FHD', 750, '/storage/product/1/58P6JRAKCX7PuxW355Vx.jpg', 'Những chiếc giày mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 30, '2022-12-08 09:20:40', '2022-12-08 11:38:39', '1.jpg', NULL),
(37, 'Samsung 2000 Series Curved FHD', 100, '/storage/product/1/sSOnvxDTYxgMOpCOB87H.jpg', 'Những chiếc giày mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 30, '2022-12-08 09:21:06', '2022-12-09 02:03:44', '1.jpg', NULL),
(38, 'Fujifilm X100T 16 MP Digital 100', 100, '/storage/product/1/pKvmTJlc3Wryk6tBOfxT.jpg', 'Những chiếc giày mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 31, '2022-12-08 09:22:03', '2022-12-09 02:03:36', '1.jpg', NULL),
(39, 'Fujifilm X100T 16 MP Digital 2022', 540, '/storage/product/1/LcjxIP1UTiabYOsM7WiT.jpg', 'Những chiếc giày mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 32, '2022-12-08 09:22:39', '2022-12-09 02:10:58', 'main.jpg', NULL),
(40, 'Fujifilm X100T 16 MP Digital 1999', 300, '/storage/product/1/iqI8Ek02i66HMgt1ooo5.jpg', 'Những chiếc giày mà ngôi sao mặc đều do những nhà thiết kế giỏi nhất của Hollywood thực hiện.', 1, 31, '2022-12-08 09:23:20', '2022-12-09 02:03:23', '1.jpg', NULL),
(41, 'Basic X100T 16 MP Digital', 450, '/storage/product/1/DLCXZEBlaMFHLrsOG57g.jpg', 'Đây là sản phẩm thuộc trường phái cổ điển', 1, 49, '2022-12-09 02:53:42', '2022-12-09 02:53:42', 'main.jpg', NULL),
(42, 'Classical CF591 Series Curved FHD', 500, '/storage/product/1/ObcOuhctIbT7h2Y97u6b.jpg', 'Đây là sản phẩm đơn giản', 1, 49, '2022-12-09 02:54:32', '2022-12-09 02:54:32', 'main.jpg', NULL),
(43, 'Classic since 1997', 600, '/storage/product/1/4YXNnqz7eKdgDBzxRVHW.jpg', 'Đây là sản phẩm theo xu hướng 1997', 1, 27, '2022-12-11 10:11:53', '2022-12-11 10:11:53', '1.jpg', NULL),
(44, 'Bộ sưu tập Hè', 899, '/storage/product/1/5oZkzIuoCnm7ZSYyg46m.png', 'Bộ sưu tập theo set phối đồ thời thượng', 1, 15, '2022-12-11 15:30:50', '2022-12-13 15:15:52', 'product_4.png', NULL),
(45, 'Bộ sưu tập Xuân - Hè', 899, '/storage/product/1/vv9VKvstQmk4vaF6EFmU.png', 'Đây là bộ sưu tập lớn', 1, 13, '2022-12-12 05:30:27', '2022-12-13 15:15:46', 'product_2.png', NULL),
(46, 'SP 01000000000', 1321, NULL, 'Hehee', 1, 27, '2022-12-13 13:32:08', '2022-12-13 13:32:25', NULL, '2022-12-13 13:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `product_id`, `created_at`, `updated_at`, `image_name`) VALUES
(32, '/storage/product/1/Au2xGPr9uCX9mxE9a6Zf.jpg', 20, '2022-12-08 08:45:36', '2022-12-08 08:45:36', 'desc_1.jpg'),
(33, '/storage/product/1/Nb10rjACtD3e5LSGrnvh.jpg', 20, '2022-12-08 08:45:36', '2022-12-08 08:45:36', 'desc_2.jpg'),
(34, '/storage/product/1/vO90uEH8WfLWPm0GDL4A.jpg', 20, '2022-12-08 08:45:36', '2022-12-08 08:45:36', 'desc_3.jpg'),
(35, '/storage/product/1/AwZslQt6YRsY7fSv7jlM.png', 21, '2022-12-08 08:46:47', '2022-12-08 08:46:47', 'product_3.png'),
(39, '/storage/product/1/bUcfogM5y5EeAPA27HsU.jpg', 24, '2022-12-08 08:51:18', '2022-12-08 08:51:18', '2.jpg'),
(40, '/storage/product/1/NVxbUQt6rsyq0LSZx7X3.jpg', 24, '2022-12-08 08:51:18', '2022-12-08 08:51:18', '3.jpg'),
(41, '/storage/product/1/QG2VoJc4C9vsDXaCIjfc.jpg', 24, '2022-12-08 08:51:18', '2022-12-08 08:51:18', 'main.jpg'),
(42, '/storage/product/1/F8A4Eh9Eq4aGGadqAKEn.jpg', 25, '2022-12-08 08:52:08', '2022-12-08 08:52:08', '1.jpg'),
(43, '/storage/product/1/tQmhF3frZ9uDL6kHsvD9.jpg', 25, '2022-12-08 08:52:08', '2022-12-08 08:52:08', '2.jpg'),
(44, '/storage/product/1/yCZfcCEIBCnyKC38KTCs.jpg', 25, '2022-12-08 08:52:08', '2022-12-08 08:52:08', '3.jpg'),
(45, '/storage/product/1/vY9UDGL94KjoUrh68Jk6.jpg', 25, '2022-12-08 08:52:08', '2022-12-08 08:52:08', '4.jpg'),
(46, '/storage/product/1/lgkxaY3kWXIWBEiU40aa.jpg', 26, '2022-12-08 09:12:02', '2022-12-08 09:12:02', '3.jpg'),
(47, '/storage/product/1/YQfuTP2GkK7oX1ctVKEi.jpg', 26, '2022-12-08 09:12:02', '2022-12-08 09:12:02', '4.jpg'),
(48, '/storage/product/1/ALW7SIqiL7MBdUAUdYxM.jpg', 27, '2022-12-08 09:13:40', '2022-12-08 09:13:40', '3.jpg'),
(49, '/storage/product/1/Rc3xDMsTh6yenNobkgI6.jpg', 27, '2022-12-08 09:13:40', '2022-12-08 09:13:40', '5.jpg'),
(50, '/storage/product/1/MoO846n5LcY7XRHQpahT.jpg', 27, '2022-12-08 09:13:40', '2022-12-08 09:13:40', '6.jpg'),
(51, '/storage/product/1/2XLZqcUdw1UguMCwrGjr.jpg', 28, '2022-12-08 09:14:42', '2022-12-08 09:14:42', '3.jpg'),
(52, '/storage/product/1/oAQgCERBho5zaY64Nj9s.jpg', 28, '2022-12-08 09:14:42', '2022-12-08 09:14:42', '4.jpg'),
(53, '/storage/product/1/YGD0vhB29u9xqLS1TQAH.jpg', 28, '2022-12-08 09:14:42', '2022-12-08 09:14:42', '5.jpg'),
(54, '/storage/product/1/wv7qINnnR9J9O2nOOAnp.jpg', 29, '2022-12-08 09:15:46', '2022-12-08 09:15:46', '1.jpg'),
(55, '/storage/product/1/X9WJvsi9eGvpcuL5qBfZ.jpg', 29, '2022-12-08 09:15:46', '2022-12-08 09:15:46', '2.jpg'),
(56, '/storage/product/1/JPOD39Tp61C44YzNqC8Y.jpg', 29, '2022-12-08 09:15:46', '2022-12-08 09:15:46', '3.jpg'),
(57, '/storage/product/1/Fi6FCbzkdzIza9st9GLZ.jpg', 30, '2022-12-08 09:16:30', '2022-12-08 09:16:30', '1.jpg'),
(58, '/storage/product/1/RLZhAAJyB3kZV43m4DtI.jpg', 30, '2022-12-08 09:16:30', '2022-12-08 09:16:30', '2.jpg'),
(59, '/storage/product/1/2cMrRXhdrfvO8t47SA8P.jpg', 30, '2022-12-08 09:16:30', '2022-12-08 09:16:30', '3.jpg'),
(60, '/storage/product/1/DsmpEoYk8oEQ7MGf7pT7.jpg', 31, '2022-12-08 09:17:13', '2022-12-08 09:17:13', '1.jpg'),
(61, '/storage/product/1/BREXicBFbJMApl3hGc2y.jpg', 31, '2022-12-08 09:17:13', '2022-12-08 09:17:13', '4.jpg'),
(62, '/storage/product/1/sTBtxVLzcL2Zgiul1XWf.jpg', 31, '2022-12-08 09:17:13', '2022-12-08 09:17:13', 'main.jpg'),
(63, '/storage/product/1/Ce0QmTIEUWHe1Uo0NheW.jpg', 32, '2022-12-08 09:18:03', '2022-12-08 09:18:03', '1.jpg'),
(64, '/storage/product/1/0E7iGtg1yAVh82FSHRkQ.jpg', 32, '2022-12-08 09:18:03', '2022-12-08 09:18:03', '2.jpg'),
(65, '/storage/product/1/TgaD4lk6DZw8oev6zA3y.jpg', 32, '2022-12-08 09:18:03', '2022-12-08 09:18:03', '3.jpg'),
(66, '/storage/product/1/uK51uYaTDNx9hdETYnHd.jpg', 33, '2022-12-08 09:18:37', '2022-12-08 09:18:37', '2.jpg'),
(67, '/storage/product/1/oZTnBJXgM03q1l4K324z.jpg', 33, '2022-12-08 09:18:37', '2022-12-08 09:18:37', '3.jpg'),
(68, '/storage/product/1/xQkfd01WFMRATbGszsyA.jpg', 33, '2022-12-08 09:18:37', '2022-12-08 09:18:37', '4.jpg'),
(69, '/storage/product/1/QdSpHqdsO3xMIMgcscQH.jpg', 33, '2022-12-08 09:18:37', '2022-12-08 09:18:37', 'main.jpg'),
(70, '/storage/product/1/CQMqP5V9vefL2iiwQw0F.jpg', 34, '2022-12-08 09:19:10', '2022-12-08 09:19:10', '2.jpg'),
(71, '/storage/product/1/NFnXXB8wDaNXibjrkSjT.jpg', 34, '2022-12-08 09:19:10', '2022-12-08 09:19:10', '3.jpg'),
(72, '/storage/product/1/H3X3NtAosK3m7HjVLntU.jpg', 34, '2022-12-08 09:19:10', '2022-12-08 09:19:10', 'main.jpg'),
(73, '/storage/product/1/gM5SUYJXoFSB0pzfJK9Z.jpg', 35, '2022-12-08 09:19:48', '2022-12-08 09:19:48', '1.jpg'),
(74, '/storage/product/1/5InLx0abwuxMINJtc4Cm.jpg', 35, '2022-12-08 09:19:48', '2022-12-08 09:19:48', '2.jpg'),
(75, '/storage/product/1/YRgm1l3iK387xbTOb0jR.jpg', 35, '2022-12-08 09:19:48', '2022-12-08 09:19:48', '3.jpg'),
(76, '/storage/product/1/t3v63p8d7hQNPqs5AzLX.jpg', 35, '2022-12-08 09:19:48', '2022-12-08 09:19:48', 'main.jpg'),
(77, '/storage/product/1/Idl7mOOzsdvd8X5BqTNI.jpg', 36, '2022-12-08 09:20:40', '2022-12-08 09:20:40', '2.jpg'),
(78, '/storage/product/1/0ahXW3GozjWSZOiSyj5G.jpg', 36, '2022-12-08 09:20:40', '2022-12-08 09:20:40', '3.jpg'),
(79, '/storage/product/1/6DepArIgmBdJxmgs07FU.jpg', 36, '2022-12-08 09:20:40', '2022-12-08 09:20:40', 'main.jpg'),
(80, '/storage/product/1/6tuMqvWHMc88NlDZSsvl.jpg', 37, '2022-12-08 09:21:25', '2022-12-08 09:21:25', '2.jpg'),
(81, '/storage/product/1/ytvt6bGPnUfHgHtifd8t.jpg', 37, '2022-12-08 09:21:25', '2022-12-08 09:21:25', '3.jpg'),
(82, '/storage/product/1/8bv1sgH3jVa1b8hDZ4e4.jpg', 37, '2022-12-08 09:21:25', '2022-12-08 09:21:25', 'main.jpg'),
(83, '/storage/product/1/R0k4SeP7LY8HkJMV7GJ6.jpg', 38, '2022-12-08 09:22:03', '2022-12-08 09:22:03', '2.jpg'),
(84, '/storage/product/1/nqyYd482nrwSifLEE4sL.jpg', 38, '2022-12-08 09:22:03', '2022-12-08 09:22:03', '3.jpg'),
(85, '/storage/product/1/BiL2YyqJptDcUur6QFvt.jpg', 38, '2022-12-08 09:22:03', '2022-12-08 09:22:03', 'main.jpg'),
(86, '/storage/product/1/mgrBdOxfQgh8DmjyTihV.jpg', 39, '2022-12-08 09:22:39', '2022-12-08 09:22:39', '1.jpg'),
(87, '/storage/product/1/hiKgDZgVXgi6hhOw55xn.jpg', 39, '2022-12-08 09:22:39', '2022-12-08 09:22:39', '2.jpg'),
(88, '/storage/product/1/g6vifnrWnxTuILFXcNun.jpg', 39, '2022-12-08 09:22:39', '2022-12-08 09:22:39', '3.jpg'),
(89, '/storage/product/1/ETC7ktu7J0RWs7Xr4yno.jpg', 40, '2022-12-08 09:23:20', '2022-12-08 09:23:20', '2.jpg'),
(90, '/storage/product/1/nHasvdUibz82CMEZaCg8.jpg', 40, '2022-12-08 09:23:20', '2022-12-08 09:23:20', '3.jpg'),
(91, '/storage/product/1/Rm4qeAzDH6EjDZJWZNdy.jpg', 40, '2022-12-08 09:23:20', '2022-12-08 09:23:20', 'main.jpg'),
(97, '/storage/product/1/g6nwiZbrKwZulyiL41cm.jpg', 42, '2022-12-09 03:22:48', '2022-12-09 03:22:48', '2.jpg'),
(98, '/storage/product/1/y7MJ8DtRs8E7saN5V22d.jpg', 42, '2022-12-09 03:22:48', '2022-12-09 03:22:48', '3.jpg'),
(99, '/storage/product/1/vSW34KaoZVckdFlugqbf.jpg', 42, '2022-12-09 03:22:48', '2022-12-09 03:22:48', 'main.jpg'),
(100, '/storage/product/1/Ln4QEKfS2BZgD3TXlFha.jpg', 41, '2022-12-09 03:23:00', '2022-12-09 03:23:00', '1.jpg'),
(101, '/storage/product/1/e8bnL8IOICCGllw4HiNz.jpg', 41, '2022-12-09 03:23:00', '2022-12-09 03:23:00', '2.jpg'),
(102, '/storage/product/1/XfrbGGmPHZyPwpqEDLIg.jpg', 41, '2022-12-09 03:23:00', '2022-12-09 03:23:00', '3.jpg'),
(103, '/storage/product/1/yNnA3K3F7SyYzAFQyC8f.jpg', 41, '2022-12-09 03:23:00', '2022-12-09 03:23:00', 'main.jpg'),
(104, '/storage/product/1/WsTDpGyQzjrXdrpdD6VU.jpg', 43, '2022-12-11 10:11:53', '2022-12-11 10:11:53', '1.jpg'),
(105, '/storage/product/1/glVzsLRdQeuHZelC5EDl.jpg', 43, '2022-12-11 10:11:53', '2022-12-11 10:11:53', '2.jpg'),
(106, '/storage/product/1/HjuCwdS2OHo54nRLY47u.jpg', 43, '2022-12-11 10:11:53', '2022-12-11 10:11:53', 'main.jpg'),
(107, '/storage/product/1/nP6nA1XHX5dH2y71EZrt.png', 44, '2022-12-11 15:30:50', '2022-12-11 15:30:50', 'product_4.png'),
(108, '/storage/product/1/x9zIOAbzSYXaohgHMByc.png', 44, '2022-12-11 15:30:50', '2022-12-11 15:30:50', 'product_5.png'),
(109, '/storage/product/1/RWD8HqWHuzJDYeIIG03g.png', 44, '2022-12-11 15:30:50', '2022-12-11 15:30:50', 'product_6.png'),
(110, '/storage/product/1/QRoDyTVaivpABEXpaaxc.png', 44, '2022-12-11 15:30:50', '2022-12-11 15:30:50', 'product_8.png'),
(111, '/storage/product/1/dXzXeM0LUfqcGJmfpY4S.png', 45, '2022-12-12 05:30:27', '2022-12-12 05:30:27', 'product_8.png'),
(112, '/storage/product/1/omOw0jn0nicZjaQcBYDR.png', 45, '2022-12-12 05:30:27', '2022-12-12 05:30:27', 'product_10.png'),
(113, '/storage/product/1/oghl66G59zspXxr8hY9l.jpg', 45, '2022-12-12 05:30:27', '2022-12-12 05:30:27', 'single_1_thumb.jpg'),
(114, '/storage/product/1/D90KBXBZHdWXwmihNPDm.jpg', 45, '2022-12-12 05:30:27', '2022-12-12 05:30:27', 'single_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(20, 20, 17, '2022-12-08 08:45:36', '2022-12-08 08:45:36'),
(21, 21, 18, '2022-12-08 08:46:47', '2022-12-08 08:46:47'),
(22, 23, 19, '2022-12-08 08:50:28', '2022-12-08 08:50:28'),
(23, 24, 19, '2022-12-08 08:51:18', '2022-12-08 08:51:18'),
(24, 25, 19, '2022-12-08 08:52:08', '2022-12-08 08:52:08'),
(25, 26, 20, '2022-12-08 09:12:02', '2022-12-08 09:12:02'),
(26, 26, 17, '2022-12-08 09:12:02', '2022-12-08 09:12:02'),
(27, 27, 21, '2022-12-08 09:13:40', '2022-12-08 09:13:40'),
(28, 27, 18, '2022-12-08 09:13:40', '2022-12-08 09:13:40'),
(29, 28, 21, '2022-12-08 09:14:42', '2022-12-08 09:14:42'),
(30, 28, 18, '2022-12-08 09:14:42', '2022-12-08 09:14:42'),
(31, 29, 22, '2022-12-08 09:15:46', '2022-12-08 09:15:46'),
(32, 29, 18, '2022-12-08 09:15:46', '2022-12-08 09:15:46'),
(33, 30, 21, '2022-12-08 09:16:30', '2022-12-08 09:16:30'),
(34, 30, 18, '2022-12-08 09:16:30', '2022-12-08 09:16:30'),
(35, 31, 21, '2022-12-08 09:17:13', '2022-12-08 09:17:13'),
(36, 31, 18, '2022-12-08 09:17:13', '2022-12-08 09:17:13'),
(37, 32, 19, '2022-12-08 09:18:03', '2022-12-08 09:18:03'),
(38, 32, 18, '2022-12-08 09:18:03', '2022-12-08 09:18:03'),
(39, 33, 19, '2022-12-08 09:18:37', '2022-12-08 09:18:37'),
(40, 33, 18, '2022-12-08 09:18:37', '2022-12-08 09:18:37'),
(41, 34, 23, '2022-12-08 09:19:10', '2022-12-08 09:19:10'),
(42, 34, 18, '2022-12-08 09:19:10', '2022-12-08 09:19:10'),
(43, 35, 23, '2022-12-08 09:19:48', '2022-12-08 09:19:48'),
(44, 35, 18, '2022-12-08 09:19:48', '2022-12-08 09:19:48'),
(45, 36, 24, '2022-12-08 09:20:40', '2022-12-08 09:20:40'),
(46, 36, 25, '2022-12-08 09:20:40', '2022-12-08 09:20:40'),
(47, 37, 24, '2022-12-08 09:21:06', '2022-12-08 09:21:06'),
(48, 37, 25, '2022-12-08 09:21:06', '2022-12-08 09:21:06'),
(49, 38, 24, '2022-12-08 09:22:03', '2022-12-08 09:22:03'),
(50, 38, 25, '2022-12-08 09:22:03', '2022-12-08 09:22:03'),
(51, 39, 24, '2022-12-08 09:22:39', '2022-12-08 09:22:39'),
(52, 39, 26, '2022-12-08 09:22:39', '2022-12-08 09:22:39'),
(53, 40, 24, '2022-12-08 09:23:20', '2022-12-08 09:23:20'),
(54, 40, 26, '2022-12-08 09:23:20', '2022-12-08 09:23:20'),
(55, 41, 27, '2022-12-09 02:53:42', '2022-12-09 02:53:42'),
(56, 41, 17, '2022-12-09 02:53:42', '2022-12-09 02:53:42'),
(57, 42, 27, '2022-12-09 02:54:32', '2022-12-09 02:54:32'),
(58, 43, 17, '2022-12-11 10:11:53', '2022-12-11 10:11:53'),
(59, 43, 22, '2022-12-11 10:11:53', '2022-12-11 10:11:53'),
(60, 44, 19, '2022-12-11 15:30:50', '2022-12-11 15:30:50'),
(61, 45, 17, '2022-12-12 05:30:27', '2022-12-12 05:30:27'),
(62, 46, 28, '2022-12-13 13:32:08', '2022-12-13 13:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Quản trị hệ thống', NULL, NULL),
(2, 'guest', 'Khách hàng', NULL, NULL),
(3, 'developer', 'Phát triển hệ thống', NULL, NULL),
(4, 'content', 'Chỉnh sửa nội dung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(16, 1, 1, NULL, NULL),
(18, 1, 2, NULL, NULL),
(19, 1, 3, NULL, NULL),
(20, 1, 4, NULL, NULL),
(21, 16, 4, NULL, NULL),
(22, 17, 3, NULL, NULL),
(23, 18, 2, NULL, NULL),
(24, 19, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `config_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `config_key`, `config_value`, `created_at`, `updated_at`, `type`) VALUES
(10, 'instagram_link', 'https://www.instagram.com/nguyen_hoang_minh_2222/', '2022-12-08 12:51:15', '2022-12-08 12:51:15', 'Text'),
(11, 'facebook_link', 'https://www.facebook.com/MinhHoangNguyen2222', '2022-12-08 12:51:37', '2022-12-08 12:51:43', 'Text'),
(12, 'contactus', '+84 838 212 991', '2022-12-08 12:52:20', '2022-12-08 12:52:20', 'Text'),
(13, 'Pinterest_link', 'https://www.facebook.com/MinhHoangNguyen2222', '2022-12-08 12:52:52', '2022-12-08 12:52:52', 'Text'),
(14, 'twitter_link', 'https://www.facebook.com/MinhHoangNguyen2222', '2022-12-08 12:53:04', '2022-12-08 12:53:04', 'Text'),
(15, 'footer_infor', 'LẬP TRÌNH PHÁT TRIỂN WEBSITE SHOP THỜI TRANG MIN STORE                                                        Nguyễn Hoàng Minh 2021010199', '2022-12-08 12:55:33', '2022-12-08 13:13:28', 'Textarea'),
(16, 'email', 'minh2610@gmail.com', '2022-12-08 12:56:28', '2022-12-08 13:18:31', 'Text'),
(17, 'shipper', 'free shipping on all u.s orders over $100', '2022-12-08 13:00:20', '2022-12-08 13:10:33', 'Text'),
(18, 'blog', 'Minh', '2022-12-08 13:17:07', '2022-12-08 13:19:21', 'Text'),
(19, 'sale', 'Subscribe to our newsletter and get 20% off your first purchase', '2022-12-08 13:21:49', '2022-12-08 13:22:41', 'Text'),
(20, 'open_house', 'Open hours: 8.00-18.00 Mon-Fri\r\n					/ Sunday: Closed', '2022-12-08 13:37:02', '2022-12-08 13:37:34', 'Textarea'),
(21, 'Pages', 'https://www.facebook.com/profile.php?id=100088751558012', '2022-12-13 06:23:40', '2022-12-13 06:23:40', 'Text');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_accept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `shipping_name`, `shipping_city`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_method`, `shipping_accept`, `created_at`, `updated_at`) VALUES
(12, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-10 12:57:35', '2022-12-10 12:57:35'),
(13, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-10 12:58:40', '2022-12-10 12:58:40'),
(14, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-10 13:00:12', '2022-12-10 13:00:12'),
(15, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-10 13:04:08', '2022-12-10 13:04:08'),
(16, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-10 13:05:24', '2022-12-10 13:05:24'),
(17, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-10 13:06:55', '2022-12-10 13:06:55'),
(18, 'Tân xaolin', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'tainangcuatoi123@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-11 05:16:34', '2022-12-11 05:16:34'),
(19, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Banking', 'I have read and accept the terms and conditions', '2022-12-11 06:02:54', '2022-12-11 06:02:54'),
(20, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-11 06:03:50', '2022-12-11 06:03:50'),
(21, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-11 09:39:19', '2022-12-11 09:39:19'),
(22, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-11 09:41:58', '2022-12-11 09:41:58'),
(23, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-11 09:42:50', '2022-12-11 09:42:50'),
(24, 'MInh', 'Thành phố Hồ Chí Minh', 'Minh', '0123', 'Nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-11 09:45:28', '2022-12-11 09:45:28'),
(25, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-12 05:16:06', '2022-12-12 05:16:06'),
(26, 'Đức Fuckboy', 'Thành phố Hồ Chí Minh', 'Trịnh Trà hả em chai', '0999999999', 'trandc3015@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 01:33:10', '2022-12-13 01:33:10'),
(27, 'Đức Trà', 'Thành phố Hồ Chí Minh', 'Trịnh Trà hả em chai', '0999999999', 'trandc3015@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 01:37:25', '2022-12-13 01:37:25'),
(28, 'Hạnh', 'Thành phố Hồ Chí Minh', 'hạnh', '0111111111', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 05:57:16', '2022-12-13 05:57:16'),
(29, 'Hạnh', 'Thành phố Hồ Chí Minh', 'hạnh', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 05:58:29', '2022-12-13 05:58:29'),
(30, 'Hạnh', 'Thành phố Hồ Chí Minh', 'hạnh', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 05:58:51', '2022-12-13 05:58:51'),
(31, 'Nguyễn Hữu Hạnh', 'Thành phố Hồ Chí Minh', 'ufm', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 09:10:31', '2022-12-13 09:10:31'),
(32, 'Nguyễn Hữu Hạnh', 'Thành phố Hồ Chí Minh', 'ufm', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 09:12:10', '2022-12-13 09:12:10'),
(33, 'Nguyễn Hữu Hạnh', 'Thành phố Hồ Chí Minh', 'ufm', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 09:14:37', '2022-12-13 09:14:37'),
(34, 'Nguyễn Hữu Hạnh', 'Thành phố Hồ Chí Minh', 'ufm', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 09:21:11', '2022-12-13 09:21:11'),
(35, 'Nguyễn Hữu Hạnh', 'Thành phố Hồ Chí Minh', 'ufm', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 09:23:59', '2022-12-13 09:23:59'),
(36, 'Nguyễn Hữu Hạnh', 'Thành phố Hồ Chí Minh', 'ufm', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 09:31:45', '2022-12-13 09:31:45'),
(37, 'Nguyễn Hữu Hạnh', 'Thành phố Hồ Chí Minh', 'ufm', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 09:31:56', '2022-12-13 09:31:56'),
(38, 'Nguyễn Hữu Hạnh', 'Thành phố Hồ Chí Minh', 'ufm', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 09:33:12', '2022-12-13 09:33:12'),
(39, 'Đức Trà', 'Thành phố Hồ Chí Minh', 'Tân Bình', '0999999999', 'trandc3015@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 09:54:14', '2022-12-13 09:54:14'),
(40, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 11:45:51', '2022-12-13 11:45:51'),
(41, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 11:46:47', '2022-12-13 11:46:47'),
(42, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610111@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 11:47:25', '2022-12-13 11:47:25'),
(43, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 11:50:01', '2022-12-13 11:50:01'),
(44, 'Nguyễn Hữu Hạnh', 'Thành phố Hồ Chí Minh', 'ufm', '0123456789', 'nguyenhuuhanh480@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 11:50:58', '2022-12-13 11:50:58'),
(45, 'Minh', 'Thành phố Hồ Chí Minh', 'Minh', '0123456', 'Nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-13 15:16:48', '2022-12-13 15:16:48'),
(46, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-30 04:03:42', '2022-12-30 04:03:42'),
(47, 'Nguyễn Hoàng Minh', 'Thành phố Hồ Chí Minh', 'Đường 106, Tăng Nhơn Phú A', '0838212991', 'nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-30 04:03:52', '2022-12-30 04:03:52'),
(48, 'Minh', 'Thành phố Hồ Chí Minh', 'Minh', '0123456', 'Nhminh2610@gmail.com', 'Pay upon delivery', 'I have read and accept the terms and conditions', '2022-12-30 04:04:59', '2022-12-30 04:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `description`, `image_path`, `image_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'New Arrivals Up to 30% Off', 'New Arrivals Up to 30% Off – Min Store delivers no-nonsense everyday clothing essentials. With stylish casual wear for women and men,', '/storage/slider/1/FH3L5BpVPJa1hGL5LQjd.jpg', 'slider3.jpg', '2022-12-08 01:57:49', '2022-12-08 09:56:38', NULL),
(12, 'New Arrivals Up to 30% Off', 'New Arrivals Up to 30% Off – Min Store delivers no-nonsense everyday clothing essentials. With stylish casual wear for women and men,', '/storage/slider/1/aM9rN7s5H37hTNxphyyD.jpg', 's9Er4D2D3wgkVr977hzt.jpg', '2022-12-08 01:57:49', '2022-12-13 13:51:32', '0000-00-00 00:00:00'),
(13, 'New Arrivals Up to 30% Off', 'New Arrivals Up to 30% Off – Min Store delivers no-nonsense everyday clothing essentials. With stylish casual wear for women and men,', '/storage/slider/1/slrodM8qh6Hy2ZXTQlbI.jpg', 'slider5.jpg', '2022-12-08 01:57:49', '2022-12-11 10:08:37', NULL),
(14, 'New Arrivals Up to 30% Off', 'New Arrivals Up to 30% Off – Min Store delivers no-nonsense everyday clothing essentials. With stylish casual wear for women and men,', '/storage/slider/1/NtGKHCiYAK08uauM5GIp.jpg', 'slider_1.jpg', '2022-12-08 01:57:49', '2022-12-08 09:56:17', NULL),
(18, 'New Arrivals Up to 30% Off', 'New Arrivals Up to 30% Off – Min Store delivers no-nonsense everyday clothing essentials. With stylish casual wear for women and men,', '/storage/slider/1/NtGKHCiYAK08uauM5GIp.jpg', 'slider_1.jpg', '2022-12-08 01:57:49', '2022-12-08 09:56:17', NULL),
(20, 'New Arrivals Up to 30% Off', 'New Arrivals Up to 30% Off – Min Store delivers no-nonsense everyday clothing essentials. With stylish casual wear for women and men,', '/storage/slider/1/tI8MpKWHCMw7F9mxCu14.webp', 'slider4.webp', '2022-12-08 01:57:49', '2023-05-16 10:22:48', '2023-05-16 10:22:48'),
(21, 'New Arrivals Up to 30% Off', 'New Arrivals Up to 30% Off – Min Store delivers no-nonsense everyday clothing essentials. With stylish casual wear for women and men,', '/storage/slider/1/NtGKHCiYAK08uauM5GIp.jpg', 'slider_1.jpg', '2022-12-08 01:57:49', '2022-12-08 09:56:17', NULL),
(22, 'New Arrivals Up to 30% Off', 'New Arrivals Up to 30% Off – Min Store delivers no-nonsense everyday clothing essentials. With stylish casual wear for women and men,', '/storage/slider/1/NtGKHCiYAK08uauM5GIp.jpg', 'slider_1.jpg', '2022-12-08 01:57:49', '2022-12-08 09:56:17', NULL),
(23, 'Test', 'hehee', '/storage/slider/1/rC20hEXPsq3eWHR1Rnph.png', 'Screenshot (325).png', '2022-12-30 04:07:49', '2022-12-30 04:07:53', '2022-12-30 04:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(17, 'Mens', '2022-12-08 08:45:36', '2022-12-08 08:45:36'),
(18, 'Womens', '2022-12-08 08:46:47', '2022-12-08 08:46:47'),
(19, 'Accessories', '2022-12-08 08:50:28', '2022-12-08 08:50:28'),
(20, 'sweatshirt', '2022-12-08 09:12:02', '2022-12-08 09:12:02'),
(21, 'clothing', '2022-12-08 09:13:40', '2022-12-08 09:13:40'),
(22, 'woolly', '2022-12-08 09:15:46', '2022-12-08 09:15:46'),
(23, 'dress', '2022-12-08 09:19:10', '2022-12-08 09:19:10'),
(24, 'Shoes', '2022-12-08 09:20:40', '2022-12-08 09:20:40'),
(25, 'ananas', '2022-12-08 09:20:40', '2022-12-08 09:20:40'),
(26, 'nike', '2022-12-08 09:22:39', '2022-12-08 09:22:39'),
(27, 'Classical', '2022-12-09 02:53:42', '2022-12-09 02:53:42'),
(28, 'minh', '2022-12-13 13:32:08', '2022-12-13 13:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nguyễn Hoàng Minh', 'minh@gmail.com', '0000-00-00 00:00:00', '$2y$10$JZbEiNiBbTj6e8qR6SPAmOXkwvX1RGK8ZEIDhBEv3W2c3V02gR5I.', 'RufrOyDe0GhFHL0S2Gws3EFuAdvcX2YbwvTewnWJNSbC96PnYfbOYCGe3vxo', NULL, '2022-12-13 01:27:15', NULL),
(16, 'Nhân viên Content', 'NV01@gmail.com', NULL, '$2y$10$FPZ/yaI8uJXL.7OESomW5u12ztzptfpe.t2D6mPc0CJ7tDvQX8znC', NULL, '2022-12-12 05:32:47', '2022-12-13 08:18:35', NULL),
(17, 'Nhân viên Developer', 'developer@gmail.com', NULL, '$2y$10$ePfb9zrVa15/imqBJYba3.zvUr2wKscnjg4rG/decMI5rydR1rNR2', NULL, '2022-12-12 05:33:14', '2022-12-13 08:18:47', NULL),
(18, 'Khách hàng sỉ', 'guest@gmail.com', NULL, '$2y$10$G1rLwWmhz80JCSvZmSbNd.41HmUotXaz5IoaZp1O0dHhvVrgVGKKu', NULL, '2022-12-12 05:33:50', '2022-12-13 08:21:44', NULL),
(19, 'Nguyễn Hoàng Minh', 'minh22@gmail.com', NULL, '$2y$10$gfUR9PsYB3SKPfFO.SuEiuxqlizpUYENqtt5vZYnVxUq9n9CVuIU.', NULL, '2022-12-13 14:05:35', '2022-12-13 14:06:24', '2022-12-13 14:06:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
