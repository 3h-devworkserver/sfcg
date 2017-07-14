-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 07:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfcg`
--

-- --------------------------------------------------------

--
-- Table structure for table `dips`
--

CREATE TABLE `dips` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `act_type` varchar(255) DEFAULT NULL,
  `act_others` varchar(255) DEFAULT NULL,
  `obj` varchar(255) DEFAULT NULL,
  `outcome` varchar(255) DEFAULT NULL,
  `ind_act` varchar(255) DEFAULT NULL,
  `ind_no` varchar(255) DEFAULT NULL,
  `police_str` varchar(255) DEFAULT NULL,
  `imp_date` varchar(255) DEFAULT NULL,
  `imp_area` varchar(255) DEFAULT NULL,
  `eb_dis` varchar(255) DEFAULT NULL,
  `eb_female` varchar(255) DEFAULT NULL,
  `eb_male` varchar(255) DEFAULT NULL,
  `eb_total` varchar(255) DEFAULT NULL,
  `eb_dis_grp` varchar(255) DEFAULT NULL,
  `pb_type` varchar(255) DEFAULT NULL,
  `pb_travel` varchar(255) DEFAULT NULL,
  `pb_accom` varchar(255) DEFAULT NULL,
  `pb_program` varchar(255) DEFAULT NULL,
  `pb_total` varchar(255) DEFAULT NULL,
  `target_grp` varchar(255) DEFAULT NULL,
  `tg_others` varchar(255) DEFAULT NULL,
  `i_partners` varchar(255) DEFAULT NULL,
  `c_partners` varchar(255) DEFAULT NULL,
  `r_persons` varchar(255) DEFAULT NULL,
  `res_p` varchar(255) DEFAULT NULL,
  `ct_name` varchar(255) DEFAULT NULL,
  `ct_pos` varchar(255) DEFAULT NULL,
  `ct_cell` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dips`
--

INSERT INTO `dips` (`id`, `name`, `act_type`, `act_others`, `obj`, `outcome`, `ind_act`, `ind_no`, `police_str`, `imp_date`, `imp_area`, `eb_dis`, `eb_female`, `eb_male`, `eb_total`, `eb_dis_grp`, `pb_type`, `pb_travel`, `pb_accom`, `pb_program`, `pb_total`, `target_grp`, `tg_others`, `i_partners`, `c_partners`, `r_persons`, `res_p`, `ct_name`, `ct_pos`, `ct_cell`, `created_at`, `updated_at`) VALUES
(3, 'name', 'others', 'act_others', 'obj', 'outcome', '0', 'ind_no', 'police_str', '07/13/2017', 'imp_area', 'eb_dis', 'eb_female', 'eb_male', 'eb_total', 'eb_dis_grp', 'pb_type', 'pb_travel', 'pb_accom', 'pb_program', 'pb_total', 'others', 'tg_others', 'i_partners[]', 'c_partners[]', 'r_persons[]', '0', 'ct_name', 'ct_pos', 'ct_cell', '2017-07-13 06:28:01', '2017-07-13 06:28:01'),
(4, 'name', '0', '', 'obj', 'outcome', '0', 'ind_no', 'police_str', '07/13/2017', 'imp_area', 'eb_dis', 'eb_female', 'eb_male', 'eb_total', 'eb_dis_grp', 'pb_type', 'pb_travel', 'pb_accom', 'pb_program', 'pb_total', '0', '', 'i_partners[],sddss', 'c_partners[],sdsdcsdf,dsdsd', 'r_persons[]', '0', 'ct_name', 'ct_pos', 'ct_cell', '2017-07-13 06:28:31', '2017-07-13 06:28:31'),
(5, 'name', 'others', 'cxcvvxc', 'obj', 'outcome', '0', 'ind_no', 'police_str', '07/13/2017', 'imp_area', 'eb_dis', 'eb_female', 'eb_male', 'eb_total', 'eb_dis_grp', 'pb_type', 'pb_travel', 'pb_accom', 'pb_program', 'pb_total', '0', '', 'cxzcz,czcz,i_partners[]', 'c_partners[]', 'r_persons[]', '0', 'ct_name', 'ct_pos', 'ct_cell', '2017-07-13 06:29:18', '2017-07-13 06:29:18'),
(7, NULL, '0', '', NULL, NULL, '0', NULL, NULL, '07/13/2017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', '', '', '', '0', NULL, NULL, NULL, '2017-07-13 06:44:05', '2017-07-13 06:44:05'),
(8, NULL, '0', '', NULL, NULL, '0', NULL, NULL, '07/13/2017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', '', '', '', '0', NULL, NULL, NULL, '2017-07-13 06:44:53', '2017-07-13 06:44:53'),
(9, 'name', '0', '', 'obj', 'outcome', '0', 'ind_no', 'police_str', '07/13/2017', 'imp_area', 'eb_dis', 'eb_female', 'eb_male', 'eb_total', 'eb_dis_grp', 'pb_type', 'pb_travel', 'pb_accom', 'pb_program', 'pb_total', '0', '', 'i_partners[]', 'c_partners[]', 'r_persons[]', '0', 'ct_name', 'ct_pos', 'ct_cell', '2017-07-13 06:45:03', '2017-07-13 06:45:03'),
(10, NULL, '0', '', NULL, NULL, '0', NULL, NULL, '07/13/2017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', '', '', '', '0', NULL, NULL, NULL, '2017-07-13 06:55:33', '2017-07-13 06:55:33'),
(11, 'name', '0', '', 'obj', 'outcome', '0', 'ind_no', 'police_str', '07/13/2017', 'imp_area', 'eb_dis', 'eb_female', 'eb_male', 'eb_total', 'eb_dis_grp', 'pb_type', 'pb_travel', 'pb_accom', 'pb_program', 'pb_total', '0', '', 'i_partners[]', 'c_partners[]', 'r_persons[]', '0', 'ct_name', 'ct_pos', 'ct_cell', '2017-07-13 06:55:48', '2017-07-13 06:55:48'),
(12, 'name', '4', '', 'obj', 'outcome', '1', 'ind_no', 'police_str', '07/13/2017', 'imp_area', 'eb_dis', 'eb_female', 'eb_male', 'eb_total', 'eb_dis_grp', 'pb_type', 'pb_travel', 'pb_accom', 'pb_program', 'pb_total', 'others', 'tg_others', 'i_partners[],cdsvsd', 'c_partners[],dfsdf,fsfsf', 'r_persons[],dfsfs', '1,0', 'ct_name', 'ct_pos', 'ct_cell', '2017-07-13 06:56:43', '2017-07-13 06:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `district_name` varchar(100) NOT NULL,
  `district_headquarter` varchar(100) NOT NULL,
  `zone_id` int(10) UNSIGNED NOT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_id`, `district_name`, `district_headquarter`, `zone_id`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ilam', 'Ilam', 1, '26.9', '87.9333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(2, 2, 'Jhapa', 'Chandragadhi', 1, '26.63982', '87.8942451', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(3, 3, 'Panchthar', 'Phidim', 1, '27.2036401', '87.8156715', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(4, 4, 'Taplejung', 'Taplejung', 1, '27.35', '87.6666667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(5, 5, 'Dang Deukhuri', 'Ghorahi', 2, '28', '82.2666667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(6, 6, 'Pyuthan', 'Pyuthan Khalanga', 2, '28.1', '82.8666667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(7, 7, 'Rolpa', 'Liwang', 2, '28.3815621', '82.6483442', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(8, 8, 'Rukum', 'Musikot', 2, '28.7434423', '82.4752757', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(9, 9, 'Salyan', 'Salyan Khalanga', 2, '28.28', '83.79', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(10, 10, 'Bhaktapur', 'Bhaktapur', 3, '27.673031', '85.427856', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(11, 11, 'Dhading', 'Dhading Besi', 3, '27.8666667', '84.9166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(12, 12, 'Kathmandu', 'Kathmandu', 3, '27.702871', '85.318244', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(13, 13, 'Kavrepalanchok', 'Dhulikhel', 3, '27.525942', '85.56121', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(14, 14, 'Lalitpur', 'Patan', 3, '27.5419673', '85.3342973', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(15, 15, 'Nuwakot', 'Bidur', 3, '27.97', '83.06', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(16, 16, 'Rasuwa', 'Dhunche', 3, '27.083333', '86.433333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(17, 17, 'Sindhupalchok', 'Chautara', 3, '27.9512034', '85.684578', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(18, 18, 'Dolpa', 'Dolpa', 4, '28.998686', '82.816437', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(19, 19, 'Humla', 'Simikot', 4, '29.9666667', '81.8333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(20, 20, 'Jumla', 'Jumla Khalanga', 4, '29.2752778', '82.1833333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(21, 21, 'Kalikot', 'Kalikot', 4, '29.15', '81.6166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(22, 22, 'Mugu', 'Gamgadhi', 4, '29.8666667', '82.6166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(23, 23, 'Khotang', 'Diktel', 5, '27.2317177', '86.8220341', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(24, 24, 'Okhaldhunga', 'Okhaldhunga', 5, '27.3166667', '86.5', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(25, 25, 'Saptari', 'Rajbiraj', 5, '26.6172621', '86.7013894', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(26, 26, 'Siraha', 'Siraha', 5, '26.656031', '86.208847', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(27, 27, 'Solukhumbu', 'Salleri', 5, '27.7909733', '86.6611083', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(28, 28, 'Udayapur', 'Gaighat', 5, '27.57', '82.9', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(29, 29, 'Bhojpur', 'Bhojpur', 6, '27.1666667', '87.05', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(30, 30, 'Dhankuta', 'Dhankuta', 6, '26.9833333', '87.3333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(31, 31, 'Morang', 'Biratnagar', 6, '26.6799002', '87.460397', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(32, 32, 'Sankhuwasabha', 'Khandbari', 6, '27.6141916', '87.1422895', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(33, 33, 'Sunsari', 'Inaruwa', 6, '26.6275522', '87.1821709', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(34, 34, 'Terhathum', 'Manglung', 6, '27.198391', '87.5000082', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(35, 35, 'Bara', 'Kalaiya', 7, '27.0333333', '85', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(36, 36, 'Chitwan', 'Bharatpur', 7, '27.529131', '84.3542049', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(37, 37, 'Makwanpur', 'Hetauda', 7, '27.3730012', '85.1894045', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(38, 38, 'Parsa', 'Birgunj', 7, '26.8833333', '85.6333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(39, 39, 'Rautahat', 'Gaur', 7, '26.57', '86.53', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(40, 40, 'Baitadi', 'Baitadi', 8, '29.5185787', '80.4688061', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(41, 41, 'Dadeldhura', 'Dadeldhura', 8, '29.2992006', '80.5875862', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(42, 42, 'Darchula', 'Darchula', 8, '29.83', '80.55', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(43, 43, 'Kanchanpur', 'Mahendara Nagar', 8, '28.2', '82.166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(44, 44, 'Gorkha', 'Gorkha', 9, '28', '84.6333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(45, 45, 'Kaski', 'Pokhara', 9, '28.28236', '83.866028', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(46, 46, 'Lamjung', 'Bensi Sahar', 9, '28.2765491', '84.3542049', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(47, 47, 'Manang', 'Chame', 9, '28.6666667', '84.0166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(48, 48, 'Syangja', 'Syangja', 9, '28.1046333', '83.8791074', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(49, 49, 'Tanahu', 'Damauli', 9, '27.944705', '84.2278796', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(50, 50, 'Dhanusa', 'Janakpur', 10, '26.8350474', '86.0121573', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(51, 51, 'Dholkha', 'Charikot', 10, '27.7784288', '86.1751759', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(52, 52, 'Mahottari', 'Jaleswor', 10, '26.8761922', '85.80766', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(53, 53, 'Ramechhap', 'Manthali', 10, '27.3333333', '86.0833333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(54, 54, 'Sarlahi', 'Malangwa', 10, '27.0084093', '85.520024', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(55, 55, 'Sindhuli', 'Sindhuli Madhi', 10, '27.2568824', '85.971322', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(56, 56, 'Arghakhanchi', 'Sandhikharka', 11, '28.0008333', '83.2466667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(57, 57, 'Gulmi', 'Tamghas', 11, '28.088934', '83.2934086', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(58, 58, 'Kapilvastu', 'Taulihawa', 11, '27.5434407', '83.0549312', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(59, 59, 'Nawalparasi', 'Parasi', 11, '27.6498409', '83.8897057', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(60, 60, 'Palpa', 'Tansen', 11, '27.8666667', '83.55', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(61, 61, 'Rupandehi', 'Bhairahawa', 11, '27.6264239', '83.3789389', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(62, 62, 'Achham', 'Mangalsen', 12, '29.05', '81.3', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(63, 63, 'Bajhang', 'Chainpur', 12, '29.55', '81.2', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(64, 64, 'Bajura', 'Martadi', 12, '29.4469444', '81.4866667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(65, 65, 'Doti', 'Dipayal', 12, '29.266667', '80.983333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(66, 66, 'Kailali', 'Dhangadhi', 12, '28.6833333', '80.6', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(67, 67, 'Banke', 'Nepalgunj', 13, '28.05', '81.6166667', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(68, 68, 'Bardiya', 'Gulariya', 13, '28.8166667', '80.4833333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(69, 69, 'Dailekh', 'Dullu', 13, '28.8375', '81.7077778', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(70, 70, 'Jajarkot', 'Khalanga', 13, '28.73', '82.22', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(71, 71, 'Surkhet', 'Surkhet', 13, '28.6', '81.6333333', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(72, 72, 'Baglung', 'Baglung', 14, '28.2666667', '83.6', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(73, 73, 'Mustang', 'Jomsom', 14, '28.9985065', '83.8473015', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(74, 74, 'Myagdi', 'Beni', 14, '28.611176', '83.5070203', '2017-07-12 05:02:52', '2017-07-12 05:02:52'),
(75, 75, 'Parbat', 'Kusma', 14, '28.178049', '83.6986568', '2017-07-12 05:02:52', '2017-07-12 05:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(350) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `meta_keyword` text COLLATE utf8_unicode_ci,
  `misc_javascript` text COLLATE utf8_unicode_ci,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `title`, `tagline`, `meta_title`, `meta_desc`, `meta_keyword`, `misc_javascript`, `email`, `logo`, `favicon`, `created_at`, `updated_at`) VALUES
(10, 'SFCG', NULL, 'SFCG', 'DBMS', 'DBMS', NULL, 'admin@3hammers.com', 'Yh1vq-3hammers.png', '5ptZC-3hammers_footer.png', '2017-07-13 05:13:05', '2017-07-13 05:13:05');

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
(3, '2017_07_06_070905_create_projects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `established_date` varchar(255) NOT NULL,
  `primary_project` varchar(255) NOT NULL,
  `funded_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `name`, `address`, `contact_no`, `email`, `established_date`, `primary_project`, `funded_by`, `created_at`, `updated_at`) VALUES
(3, 'NGO 1', 'Lagankhel', '9841545445', 'ngo@gmail.com', '05/05/2016', 'Rural Development', 'UNESCO', '2017-07-13 14:58:38', '2017-07-13 14:58:38'),
(4, 'NGO 2', 'Bhaktapur', '9841245151', 'ngo2@gmail.com', '08/09/2016', 'Education', 'UNICEF', '2017-07-13 14:59:50', '2017-07-13 15:00:10');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partners` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `signed_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_budget` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_code`, `project_name`, `donor_code`, `partners`, `zone_id`, `district_id`, `signed_date`, `total_budget`, `created_at`, `updated_at`) VALUES
(1, 'p-45', 'Project 1', 'alsdf asdlf', 'lkasjdf askd', 0, 0, '07/20/2017', 5000, '2017-07-10 23:22:01', '2017-07-10 23:22:18'),
(5, 'PC-100', 'Project 100', 'DC-11', 'UNESCO', 3, 12, '06/27/2017', 550000, '2017-07-13 14:54:08', '2017-07-13 14:54:43'),
(6, 'dfgdfg', 'dfgfdg', 'dfgfdg', 'dfgf', 3, 14, '07/13/2017', 1, '2017-07-13 10:31:11', '2017-07-13 10:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ICDovg71pvWIiVW5IVYJLj79YGHlL6yvaDSlnkxU', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSjdhRGZPMkFMemNSOU45NW9rV1p0UEF4ZVJ5aExSSFMzamNmV0x3aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Qvc3VzYW4vcHVibGljL2hvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1499749691),
('Q0tApVowE5hfFMMc3ywCuU6kAxCqnOESF6Q9KiJ3', 1, '192.168.0.23', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0', 'ZXlKcGRpSTZJbmxyZWxCek9VcDRSRFExYVdSS1RsbzFTV052YzJjOVBTSXNJblpoYkhWbElqb2lNVTlDVG5VMWFtRkNkVkJNV1ZZcllVUkZZV2RaZVU5SVUxZExVamxQU25wUGIzRXJXazk0WVROb2FqSjJSWGhGV0RFeU5VNTZkV2RWYjFWUE1Gd3ZLemRrVURsamNXVjBNM1E1UkU0MlIwOVBhMlprV25ZNVJXMVhOV1EwUWxKQ09XcG1Ra05zUzJSRk5VdFZhbTAxWkhkTWFFUnRaRlF6YzBJMVVFVjFSMk5VVmpKMFRrRjNVa3NyVkVKRE1sZHFSWGcyVVdKbVJqUndNMnd6TUVKNlJFUjNOWHBSZDJkalJXeHRLMlF3VFhoeU1UWXhjRGx4VDJwSFVqZEtXR2xUY25rNE5YSnJTVTUwVGxSWlZWcEdWak00WWxWWWEwdzBNelJZWTBZNVZrZzVVek5PV0RnM1hDOXNTWEpFTVZ3dmVISlNhWGx3Y25sTWFFbHNkWHByUkhSelVIRjBUelozWTBaQ04zSTJRVWxXTUUxTE1XMVNWMlpaYjNkRk9IRnpkSGxRYmtSYUsxbExjM1JDV2xrck9VMXdiMFZFUzJSaVRGd3ZjMmhQWkVWSVhDOTBkbVJDWVU0MVUxTTRkRUZVWkZkV1RsTjVWRzltZDFKamNGVlRlVzByTWxGbVJEVm9iVlE0TlVWM1FrVlJjRkZWYzNkd2VuQjRZemhyYjNCS2QySklNM1JHWjBKa1YwaG9hMUZZYlZwTmJqaG1NRU1yVkhNeWVVMHJkMFExYUVacWRHOVVPRU56U0hWWGFESmtORWRXZGxVeVNEaEphak4yYlV0cGJEaG9hbk41UkRaSlZGTktaVEpUZVRBd1hDOUdSWG8wUTBsUGEyWTFURU01ZFdOeVZFWldOazQyWTNCY0wxZDVhMlJuT1V0bVlsSk1aM1p5YnpoeVYyZE5aMnREYnpabUlpd2liV0ZqSWpvaU9HWmtNbUppTkRoallUaG1aalU1WTJVMU1EQmhPRGsxTkRNMU1XWmtaalUxTWpOaU5qUXlNamMwT1RJM1pEYzNNakl6TnpRME5XWTFNelF4T1RJM1pTSjk=', 1499747864);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `joined_date` varchar(255) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `address`, `contact_no`, `email`, `joined_date`, `designation`, `salary`, `project_id`, `created_at`, `updated_at`) VALUES
(3, 'Dinesh Karki', 'Baneshwor', '9845454545', 'dinesh@gmail.com', '12/06/2016', 'Admin', '95000.00', 1, '2017-07-13 15:01:46', '2017-07-13 15:01:46'),
(4, 'Yojan Shrestha', 'Lagankhel', '98544512121', 'yojan@3hammers.com', '07/13/2016', 'Developer', '45000.00', 5, '2017-07-13 15:02:47', '2017-07-13 15:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age_group` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `professional` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `name`, `age_group`, `caste`, `gender`, `professional`, `created_at`, `updated_at`) VALUES
(5, 'Yojan Shrestha', '15-29', 'Others', 'Male', 'Activists/human rights', '2017-07-13 14:55:33', '2017-07-13 14:57:26'),
(6, 'Dinesh Karki', '30-45', 'Brahmin/Chhetri', 'Male', 'Youth leaders', '2017-07-13 14:56:06', '2017-07-13 14:56:06'),
(7, 'Sarita Shah', '45-Above', 'Madhesi/Terai', 'Female', 'Govt official', '2017-07-13 14:56:33', '2017-07-13 14:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Three Hammers', 'admin@3hammers.com', '$2y$10$NEYa6a.UqW0Fqt.m5CjJ9e5zBf0C0NEVfyc2JiueEs4wYCAQAmQ4.', 'moFRpg1Hch7dZDfo3tsYYbB6Cb8jLgkFDct12IylsYYbESG5K2eI8y8rMQ91', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(10) UNSIGNED NOT NULL,
  `zone_id` int(10) UNSIGNED NOT NULL,
  `zone_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `zone_id`, `zone_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mechi', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(2, 2, 'Rapti', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(3, 3, 'Bagmati', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(4, 4, 'Karnali', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(5, 5, 'Sagarmatha', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(6, 6, 'Koshi', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(7, 7, 'Narayani', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(8, 8, 'Mahakali', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(9, 9, 'Gandaki', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(10, 10, 'Janakpur', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(11, 11, 'Lumbini', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(12, 12, 'Seti', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(13, 13, 'Bheri', '2017-07-12 04:59:25', '2017-07-12 04:59:25'),
(14, 14, 'Dhawalagiri', '2017-07-12 04:59:25', '2017-07-12 04:59:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dips`
--
ALTER TABLE `dips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_project_code_unique` (`project_code`),
  ADD UNIQUE KEY `projects_project_name_unique` (`project_name`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dips`
--
ALTER TABLE `dips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
