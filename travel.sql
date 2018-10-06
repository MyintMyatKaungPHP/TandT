-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2018 at 02:52 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `route_id` int(11) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `confirm_price` double DEFAULT NULL,
  `user_msg` longtext COLLATE utf8mb4_unicode_ci,
  `admin_msg` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('pending','acknowledge','confirm') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `package_id`, `route_id`, `hotel_id`, `departure_date`, `qty`, `total_price`, `confirm_price`, `user_msg`, `admin_msg`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 16, 15, '2018-09-23', 5, 1370000, 1371000, 'Hello Admin', 'Price changed.', 'confirm', '2018-09-14 02:20:31', '2017-09-14 02:24:55'),
(2, 2, 2, 9, 17, '2018-09-05', 2, 450000, 450000, 'Bar Nyar', 'ok', 'confirm', '2018-09-14 02:31:36', '2018-09-14 02:32:08'),
(3, 4, 1, 1, 22, '2018-09-29', 3, 651000, 651000, 'Hello', 'Complete', 'confirm', '2018-09-14 02:55:35', '2018-09-14 02:57:08'),
(8, 2, 7, 44, 41, '2018-09-17', 2, 110000, 110000, 'Hello Admin', 'ok', 'confirm', '2018-09-16 22:27:25', '2018-09-16 22:28:56'),
(10, 2, 4, 52, 32, '2018-09-28', 11, 4169000, 4169000, NULL, NULL, 'confirm', '2018-09-16 23:03:05', '2018-09-16 23:05:21'),
(11, 2, 6, 54, 34, '2018-09-27', 3, 1344000, NULL, 'Hello Admin', NULL, 'pending', '2018-09-16 23:31:20', '2018-09-16 23:31:20'),
(12, 2, 12, 20, 23, '2018-10-19', 3, 1566000, 1566000, 'dfasfd', 'safa', 'acknowledge', '2018-10-06 06:15:45', '2018-10-06 06:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `del_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `del_status`, `created_at`, `updated_at`) VALUES
(1, 'Yangon', '0', '2018-08-30 14:48:10', '2018-08-30 14:48:10'),
(2, 'Mandalay', '0', '2018-08-30 14:48:13', '2018-08-30 14:48:13'),
(3, 'Taung Gyi', '0', '2018-08-30 14:48:22', '2018-08-30 14:48:22'),
(4, 'Maw La Myaing', '0', '2018-08-30 14:48:41', '2018-08-30 14:48:41'),
(5, 'Pyin Oo Lwin', '0', '2018-08-30 14:48:50', '2018-08-30 14:48:50'),
(6, 'Bagan', '0', '2018-08-30 14:59:14', '2018-08-30 14:59:14'),
(7, 'Ayayarwady', '0', '2018-08-30 15:05:52', '2018-08-30 15:05:52'),
(8, 'Sittway', '0', '2018-08-30 15:06:05', '2018-08-30 20:53:35'),
(9, 'Pathein', '0', '2018-08-30 15:14:45', '2018-08-30 15:14:45'),
(10, 'Taungoo', '0', '2018-08-30 20:46:47', '2018-08-30 20:46:47'),
(11, 'Pyay', '1', '2018-08-30 20:47:20', '2018-08-30 20:50:49'),
(12, 'Chaung Thar', '0', '2018-09-13 23:20:48', '2018-09-13 23:20:48'),
(13, 'Ngwe Saung', '0', '2018-09-13 23:21:50', '2018-09-13 23:21:50'),
(14, 'Ngapali', '0', '2018-09-13 23:22:02', '2018-09-13 23:22:02'),
(15, 'Sightseeing', '0', '2018-09-14 00:39:03', '2018-09-14 00:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `del_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `place`, `link`, `price`, `del_status`, `created_at`, `updated_at`) VALUES
(11, 'Sule Shangri-la', 'Yangon', 'http://www.shangri-la.com', 85000, '0', '2018-09-06 22:12:29', '2018-09-06 22:17:32'),
(12, 'Novotel Yangon Max Hotel', 'Yangon', 'https://www.accorhotels.com', 90000, '0', '2018-09-06 22:15:31', '2018-09-06 22:17:46'),
(13, 'Hotel Marvel', 'Mandalay', 'https://www.agoda.com/hotel-marvel/hotel/mandalay-mm.html', 65000, '1', '2018-09-06 22:17:10', '2018-09-06 22:43:49'),
(14, 'Mandalay Karaweik Mobile Hotel', 'Mandalay', 'https://www.agoda.com/mandalay-karaweik-mobile-hotel/hotel/mandalay-mm.html', 70000, '1', '2018-09-06 22:18:49', '2018-09-06 22:44:07'),
(15, 'Hotel A1', 'Mandalay', 'http://hotela1mandalay.com/', 68000, '0', '2018-09-06 22:21:49', '2018-09-06 22:42:48'),
(16, 'Hotel Akimomi', 'Pyin Oo Lwin', 'https://www.akimomi.com', 78000, '0', '2018-09-06 22:23:38', '2018-09-06 22:23:38'),
(17, 'Royal Park View Hotel', 'Pyin Oo Lwin', 'http://royalparkview.hotelspyinoolwin.com/', 55000, '0', '2018-09-06 22:28:20', '2018-09-06 22:41:24'),
(18, 'Royal Flower Guest Hotel', 'Pyin Oo Lwin', 'https://www.royalflowerguesthouse.com/en-us', 45000, '0', '2018-09-06 22:29:11', '2018-09-06 22:39:48'),
(19, 'Myanmar Treasure Inle Lake', 'Taung Gyi', 'https://www.tripadvisor.com/Hotel_Review-g303658-d1023658-Reviews-Myanmar_Treasure_Inle_Lake-Taunggyi_Shan_State.html', 75000, '1', '2018-09-06 22:31:28', '2018-09-06 22:44:19'),
(20, 'Vision Hotel', 'Taung Gyi', 'https://www.tripadvisor.com/Hotel_Review-g303658-d9805447-Reviews-Vision_Hotel-Taunggyi_Shan_State.html', 88000, '1', '2018-09-06 22:32:46', '2018-09-06 22:44:42'),
(21, 'Aureum Palace Hotel & Resort Bagan', 'Bagan', 'https://www.booking.com/hotel/mm/aureum-palace-amp-resort-bagan.en-us.html', 67500, '1', '2018-09-06 22:36:36', '2018-09-06 22:44:53'),
(22, 'Hotel Mandalay', 'Mandalay', 'http://hotelmandalaymyanmar.com/', 55000, '0', '2018-09-06 22:45:56', '2018-09-06 22:45:56'),
(23, 'Shwe Kyun Hotel', 'Taung Gyi', 'https://www.shwekyunhotel-myanmar.com/en-us', 77000, '0', '2018-09-06 22:48:20', '2018-09-06 22:48:20'),
(24, 'Royal Star Hotel', 'Taung Gyi', 'https://royalstarhotel.business.site/', 58000, '0', '2018-09-06 22:49:14', '2018-09-06 22:49:14'),
(25, 'Thande Hotel', 'Bagan', 'http://www.thandehotel.com/bagan/', 87983, '0', '2018-09-06 22:50:47', '2018-09-06 22:50:47'),
(26, 'The Hotel UMBRA', 'Bagan', 'https://www.thehotelumbrabagan.com/en-us', 89000, '0', '2018-09-06 22:52:13', '2018-09-06 22:52:13'),
(27, 'Hotel Yadanarbon', 'Bagan', 'http://www.hotelyadanarbonbagan.com/', 99000, '0', '2018-09-06 22:53:35', '2018-09-06 22:53:35'),
(28, 'Beller Resort Hotel', 'Chaung Thar', 'http://www.belleresorts.com/', 87000, '0', '2018-09-06 22:56:51', '2018-09-06 22:56:51'),
(29, 'Amazing Chaung Thar', 'Chaung Thar', 'http://www.amazingchaungtharesort.com/', 99000, '0', '2018-09-06 22:58:09', '2018-09-06 22:58:09'),
(30, 'Grand Hotel', 'Chaung Thar', 'http://www.grandhotelchaungtha.com/', 81000, '0', '2018-09-06 22:59:18', '2018-09-06 22:59:18'),
(31, 'Yuzana Reosrt Hotel', 'Chaung Thar', 'http://www.yuzanahotels.com/index.php/contactus-yuzana-hotel', 79000, '0', '2018-09-06 23:00:55', '2018-09-06 23:00:55'),
(32, 'Ocean Paradise Hotel', 'Chaung Thar', 'http://www.sunnyparadiseresort.net/', 88000, '0', '2018-09-06 23:02:22', '2018-09-06 23:02:22'),
(33, 'Eastern Palace Hotel', 'Mandalay', 'http://www.easternpalacehotels.com/', 65000, '0', '2018-09-13 23:48:47', '2018-09-13 23:48:47'),
(34, 'NgapaliParadise Hotel', 'Ngapali', 'http://www.ngapaliparadisehotel.com/', 66000, '0', '2018-09-13 23:49:35', '2018-09-13 23:49:35'),
(35, 'Amazing Ngaoali Resort', 'Ngapali', 'http://www.amazingngapaliresort.com/', 77000, '0', '2018-09-13 23:50:01', '2018-09-13 23:50:01'),
(36, 'The Villager Lodge', 'Ngapali', 'http://www.thevillagerlodgengapali.com/', 80000, '0', '2018-09-13 23:50:24', '2018-09-13 23:50:24'),
(37, 'Emerald Sea Resort', 'Ngwe Saung', 'http://www.emeraldseahotel.com/', 97000, '0', '2018-09-13 23:51:30', '2018-09-13 23:51:30'),
(38, 'Aureum Resort & Spa', 'Ngwe Saung', 'http://www.aureumplacehotel.com/', 150000, '0', '2018-09-13 23:52:18', '2018-09-13 23:52:18'),
(39, 'Ocean Blue Beach Hotel', 'Ngwe Saung', 'http://www.oceanbluengwesaung.com/', 70000, '0', '2018-09-13 23:53:03', '2018-09-13 23:53:03'),
(40, 'Bay of Bengal Hotel Resort', 'Ngwe Saung', 'http://www.bayofbengalresort.com/', 65000, '0', '2018-09-13 23:54:22', '2018-09-13 23:54:22'),
(41, 'Sightseeing', 'Sightseeing', 'Not Available', 0, '0', '2018-09-14 00:39:23', '2018-09-14 00:39:23');

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
(14, '2018_08_30_082518_create_cities_table', 1),
(15, '2018_08_30_113709_create_packages_table', 1),
(16, '2018_08_30_161447_create_hotels_table', 1),
(17, '2018_08_30_211536_create_routes_table', 1),
(19, '2018_09_04_065302_create_users_table', 2),
(20, '2018_09_11_163937_create_bookings_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `type` enum('normal','honeymoon','vacation','sightseeing') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `itinerary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `geo_location` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `del_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `city_id`, `price`, `type`, `description`, `itinerary`, `geo_location`, `duration`, `images`, `del_status`, `created_at`, `updated_at`) VALUES
(1, 'Shwe Mandalay', 2, 40000, 'normal', '<p>Mandalay is the second largest city in Myanmar and was established in 1857. It lies on the east bank of the Ayeyarwaddy River and in the upper part of Myanmar. Mandalay has the Royal Palace of the last Konbaung Dynasty. Mandalay inherits many cultural heritage from the ancient Myanmar Kingdoms and beautiful places to visit.</p>', '<p>Day1</p>\r\n<ul>\r\n<li>-Arrive yangon</li>\r\n<li>-Visit Shwedagon Pagoda</li>\r\n<li>-Walk around Sule Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Feel tranquillity at Swal Taw Pagoda&nbsp;</li>\r\n<li>-Visit Kyauk Taw Gyi Temple</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>Day2&nbsp;</p>\r\n<ul>\r\n<li>-Visit Musmeah Yeshua Synagogue</li>\r\n<li>-Visit the wet market on 17th Street</li>\r\n<li>-Visit Take a stroll along Inya Lake</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Ride Yangon&rsquo;s Circular Train</li>\r\n<li>-Gaze at beautiful paintings at the Yangon Gallery</li>\r\n<li>-Dinner</li>\r\n<li>&nbsp;</li>\r\n</ul>\r\n<p>day3</p>\r\n<ul>\r\n<li>-Arrive Mandaly</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Pont U-Bain Amarapura</li>\r\n<li>-Visit Cultural Museum Mandalay</li>\r\n<li>-Lunch&nbsp;</li>\r\n<li>-Visit Myan Nan San Kyaw, or Royal Palace</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>ERVICE INCLUDES:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; Sightseeing Program in Bagan Half-day tour with English Speaking Guide</p>\r\n<p>&nbsp; &nbsp; Half Day Cycling Tour in Bagan.</p>\r\n<p>&nbsp; &nbsp; Bicycle Fees</p>\r\n<p>&nbsp; &nbsp; Tour Program Sightseeing with private air- condition and good experienced car driver.</p>\r\n<p>&nbsp; &nbsp; Purify drinking water and snow Towel along in program.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118427.04428191797!2d96.00578337954974!3d21.940504297770303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d23f0d27411%3A0x24146be01e4e5646!2sMandalay!5e0!3m2!1sen!2smm!4v1536904095266', 3, '93c3aec62f29d19871d13c9523a4d606.jpg,430145e051fb9ae6d43bc5d021cbacae.jpg,ee8def548f1c9a7740177e63821864f7.jpg', '0', '2018-09-14 01:17:55', '2018-10-06 05:30:37'),
(2, 'Pyin Oo Lwin', 5, 45000, 'normal', '<p>Pyin Oo Lwin&nbsp;</p>', '<p>day1</p>\r\n<p>-Arrive Pyin Oo Lwin</p>\r\n<p>-Breakfast&nbsp;</p>\r\n<p>-Visit Maymyo Botanical Garden (National Kandawgyi Park)</p>\r\n<p>-Lunch</p>\r\n<p>-Visit Pyin Oo Lwin Trek</p>\r\n<p>-Visit Peik Chin Myaung Cave</p>\r\n<p>day2</p>\r\n<p>-Arrive yangon</p>\r\n<p>-Visit Shwedagon Pagoda</p>\r\n<p>-Walk around Sule Pagoda</p>\r\n<p>-Lunch</p>\r\n<p>-Visit Feel tranquillity at Swal Taw Pagoda&nbsp;</p>\r\n<p>-Visit Kyauk Taw Gyi Temple</p>\r\n<p>-Dinner</p>\r\n<p>day3</p>\r\n<p>-Breakfast&nbsp;</p>\r\n<p>-Visiting near yangon place</p>\r\n<p>-Lunch</p>\r\n<p>-Yangon Night see view&nbsp;</p>\r\n<p>-Dinner</p>\r\n<p>ERVICE INCLUDES:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; Sightseeing Program in Bagan Half-day tour with English Speaking Guide</p>\r\n<p>&nbsp; &nbsp; Half Day Cycling Tour in Bagan.</p>\r\n<p>&nbsp; &nbsp; Bicycle Fees</p>\r\n<p>&nbsp; &nbsp; Tour Program Sightseeing with private air- condition and good experienced car driver.</p>\r\n<p>&nbsp; &nbsp; Purify drinking water and snow Towel along in program.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118348.97178300636!2d96.40465733116375!3d22.034083792473744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cc9e9c4e50f127%3A0xe9303d2a683f438f!2sPyin+Oo+Lwin!5e0!3m2!1sen!2smm!4v1536904264534', 3, '09676f237f1d934f4e61a8e33614bdc4.jpg,b9201de1a4501109e3b7ce2b0f87bd8f.jpg,3a7f603e6b64d1726aa4986ec88e0101.jpg', '0', '2018-09-14 01:23:50', '2018-09-14 01:23:50'),
(3, 'Asian Bagan', 6, 58000, 'normal', '<p>The main tourist destination in Myanmar is Bagan, capital of the first Myanmar Empire; one of the richest archaeological sites in South-east Asia. Situated on the eastern bank of the Ayeyawaddy River. The Magic of Bagan has inspired visitors to Myanmar for nearly 1000 years.</p>', '<p>day1</p>\r\n<ul>\r\n<li>-Arrive Bagan</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Seinnyet Nyima Paya &amp; Seinnyet Ama Pahto&nbsp;</li>\r\n<li>-Visit Htilominlo Pahto Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Gawdawpalin Pahto</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>day2</p>\r\n<ul>\r\n<li>-Arrive yangon</li>\r\n<li>-Visit Shwedagon Pagoda</li>\r\n<li>-Walk around Sule Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Feel tranquillity at Swal Taw Pagoda&nbsp;</li>\r\n<li>-Visit Kyauk Taw Gyi Temple</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>day3</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; -Breakfast&nbsp;</li>\r\n<li>-Visiting near yangon place</li>\r\n<li>-Lunch</li>\r\n<li>-Yangon Night see view&nbsp;</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>ERVICE INCLUDES:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; Sightseeing Program in Bagan Half-day tour with English Speaking Guide</p>\r\n<p>&nbsp; &nbsp; Half Day Cycling Tour in Bagan.</p>\r\n<p>&nbsp; &nbsp; Bicycle Fees</p>\r\n<p>&nbsp; &nbsp; Tour Program Sightseeing with private air- condition and good experienced car driver.</p>\r\n<p>&nbsp; &nbsp; Purify drinking water and snow Towel along in program.</p>\r\n<p>&nbsp;</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7441.0035729029805!2d94.85448717343688!3d21.172216498338816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b5e50393d8ca61%3A0x371a4717c3e89981!2sOld+Bagan!5e0!3m2!1sen!2smm!4v1536904207340', 4, '4d0f2462d90086da3ec61e504ccbf011.jpg,ffcd54b60b2f3c170df3ce129f1ebd6a.jpg,ba6512b9ecf52ed511f48495e9bceec3.jpg', '0', '2018-09-14 01:27:11', '2018-09-14 01:27:11'),
(4, 'Chaung Thar', 12, 15000, 'honeymoon', '<p>Chaung-tha Beach ,is located 40 km to the west of Pathein (Bassein) in Ayeyarwaddy Division. It is a very convenient drive from Yangon via Pathein taking about 5 hours. There are bungalow type hotels along the beach with modern facilities.&nbsp;</p>\r\n<p>&nbsp;</p>', '<p>Day 1</p>\r\n<ul>\r\n<li>- breakfast at hotel</li>\r\n<li>- visit to Lovers Island</li>\r\n<li>- Annawar Patheing Sea Food Restaurant (Recommend restaurant for lunch)</li>\r\n<li>- The Seagate Restaurant &amp; Bar (Recommend restaurant for dinner)</li>\r\n</ul>\r\n<p>Day 2</p>\r\n<ul>\r\n<li>- breakfast at hotel</li>\r\n<li>- William Restaurant &amp; Guest House (Recommend restaurant for lunch)</li>\r\n<li>- Mister George (Recommend restaurant for dinner)</li>\r\n</ul>\r\n<p>Day 3</p>\r\n<ul>\r\n<li>- breakfast at hotel</li>\r\n<li>- return back to Yangon</li>\r\n</ul>\r\n<p>&nbsp;</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15264.832880292797!2d94.4354938230367!3d16.964305237421755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30bfb478a92ed553%3A0xc3d8bf0753adfb47!2sChaung+Thar!5e0!3m2!1sen!2smm!4v1536904444761', 4, '57d66c01c297a13a5c4ee89c3d449144.jpg,d9b8d720a90564101f1796d2e918efe1.jpg,f2ea86683dcde71777778f200d448569.jpg', '0', '2018-09-14 01:31:04', '2018-09-14 01:31:04'),
(5, 'Ngwe Saung Beach', 13, 20000, 'honeymoon', '<p>Ngwe Saung Beach Resort, opened in the year 2,000, is one of the loveliest and most pleasant beach resorts in Myanmar. Located in the Ayeyarwady Division, some 48 kilometres from the town of Pathein, Ngwe Saung, with a beach frontage on the Bay of Bengal with its clear blue waters, its white crested waves, sandy beaches and unspoiled and pollution-free natural surroundings, is indeed one of the best places to select for a holiday interlude of rest and relaxation.</p>', '<p>Day1</p>\r\n<ul>\r\n<li>- breakfast at hotel</li>\r\n<li>- Soe KoKo Restaruant (Recommend restaurant for lunch)</li>\r\n<li>- Golden Heart Restaurant (Recommend restaurant for dinner)</li>\r\n</ul>\r\n<p>Day2</p>\r\n<ul>\r\n<li>- breakfast at hotel</li>\r\n<li>- Garden Breeze Restaurant &amp; Bar (Recommend restaurant for lunch)</li>\r\n<li>- Brizo Restaurant (Recommend restaurant for dinner)</li>\r\n</ul>\r\n<p>Day 3</p>\r\n<ul>\r\n<li>- breakfast at hotel</li>\r\n<li>- return back to Yangon</li>\r\n</ul>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61097.33481158732!2d94.35311717968088!3d16.847009730223775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30be35516a81d903%3A0x71c4ba09c8725022!2sNgwesaung!5e0!3m2!1sen!2smm!4v1536904516760', 4, '799bad5a3b514f096e69bbc4a7896cd9.jpg,d0096ec6c83575373e3a21d129ff8fef.jpg,6ac0c67390b9cf28574e74a0109f46b2.jpg', '0', '2018-09-14 01:33:11', '2018-09-14 01:33:11'),
(6, 'Ngapali Beach', 14, 35000, 'honeymoon', '<p>It is famous for its natural and unspotted beauty up to this day. The beach stretches about 3 km with soft white sand fringed by coconut palms. Ngapali Beach is one of the loveliest places in Myanmar.</p>\r\n<p>&nbsp;</p>', '<p>day1</p>\r\n<ul>\r\n<li>-Arrive yangon</li>\r\n<li>-Visit Shwedagon Pagoda</li>\r\n<li>-Walk around Sule Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Feel tranquillity at Swal Taw Pagoda&nbsp;</li>\r\n<li>-Visit Kyauk Taw Gyi Temple</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day2&nbsp;</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; -Breakfast&nbsp;</li>\r\n<li>-Visiting near yangon place</li>\r\n<li>-Lunch</li>\r\n<li>-Yangon Night see view&nbsp;</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day3</p>\r\n<ul>\r\n<li>-Arrive yangon</li>\r\n<li>-Visit Shwedagon Pagoda</li>\r\n<li>-Walk around Sule Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Feel tranquillity at Swal Taw Pagoda&nbsp;</li>\r\n<li>-Visit Kyauk Taw Gyi Temple</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day4</p>\r\n<ul>\r\n<li>- breakfast at hotel</li>\r\n<li>- Take in the ocean scenery during the boat ride to Maung Shwe Lay</li>\r\n<li>- Sunset Viwe Beach Bar &amp; Restaruant (Recommend restaurant for lunch)</li>\r\n<li>- Learn about local history and marine life from the guide</li>\r\n<li>- Ngapali Kitchen (Recommend restaurant for dinner)</li>\r\n</ul>\r\n<p>day5</p>\r\n<ul>\r\n<li>- breakfast at hotel</li>\r\n<li>- Visit a coastal village in Myanmar that retains its fishing traditions</li>\r\n<li>- Ocean Pearl (Recommend restaurant for lunch)</li>\r\n<li>- Pleasant View Islet Restaurant (Recommend restaurant for dinner)</li>\r\n</ul>\r\n<p>SERVICE INCLUDES:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; Sightseeing Program in Bagan Half-day tour with English Speaking Guide</p>\r\n<p>&nbsp; &nbsp; Half Day Cycling Tour in Bagan.</p>\r\n<p>&nbsp; &nbsp; Bicycle Fees</p>\r\n<p>&nbsp; &nbsp; Tour Program Sightseeing with private air- condition and good experienced car driver.</p>\r\n<p>&nbsp; &nbsp; Purify drinking water and snow Towel along in program.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60550.949548910125!2d94.30389328492848!3d18.46397474913527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b91e6590582d9d%3A0x12274c0421c8e487!2sThandwe!5e0!3m2!1sen!2smm!4v1536904482618', 6, '44d8ac7e1355972e48156085e6127362.jpg,0d5b1c4c7f720f698946c7f6ab08f687.jpg,e5d67599bbb698e0cb7ec7a0713419e2.jpg', '0', '2018-09-14 01:35:23', '2018-09-14 01:35:23'),
(7, 'Yangon Sightseeing Trip', 15, 55000, 'sightseeing', '<p>Yangon, the commercial capital, is the main gateway to Myanmar. Evergreen and cool with lush tropical trees, shady parks and beautiful lakes, Yangon has earned the name of \"The Garden City of the East\". Yangon was founded by King Alaungpaya on the site of a small settlement called Dagon when he conquered Lower Myanmar in 1755.</p>', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>-Visiting Tample&nbsp;</li>\r\n<li>-Visiting near yangon place</li>\r\n<li>-Lunch&nbsp;</li>\r\n<li>-Visiting famous plase in Yangon</li>\r\n<li>-Yangon Night see view&nbsp;</li>\r\n<li>-Dinner&nbsp;</li>\r\n</ul>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244307.58873964142!2d96.01189219913104!3d16.910187746895044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1536903947075', 1, '7fdc1a630c238af0815181f9faa190f5.jpg,3e2bba0d1f2c5de6d7ef6ea20ed0c8ae.jpg,4575d15550def67719bf8293c5b91237.jpg', '0', '2018-09-14 01:38:09', '2018-09-16 20:28:34'),
(8, 'Yangon-Mandalay-Pyin Oo Lwin', 5, 65000, 'vacation', '<p>&nbsp;</p>\r\n<p>Mandalay is the second largest city in Myanmar and was established in 1857. It lies on the east bank of the Ayeyarwaddy River and in the upper part of Myanmar. Mandalay has the Royal Palace of the last Konbaung Dynasty. Mandalay inherits many cultural heritage from the ancient Myanmar Kingdoms and beautiful places to visit.</p>', '<p>day1</p>\r\n<ul>\r\n<li>-Arrive Yangon</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visiting Tample&nbsp;</li>\r\n<li>-Lunch&nbsp;</li>\r\n<li>-Visiting famous plase in Yangon</li>\r\n<li>-Dinner&nbsp;</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>day2</p>\r\n<ul>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visiting near yangon place</li>\r\n<li>-Lunch</li>\r\n<li>-Yangon Night see view&nbsp;</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>day3</p>\r\n<ul>\r\n<li>-Arrive Mandaly</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Pont U-Bain Amarapura</li>\r\n<li>-Visit Cultural Museum Mandalay</li>\r\n<li>-Lunch&nbsp;</li>\r\n<li>-Visit Myan Nan San Kyaw, or Royal Palace</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>day4</p>\r\n<ul>\r\n<li>-Breakfast</li>\r\n<li>-Visit Sandamuni Pagoda</li>\r\n<li>-visit Kyauktawgyi Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Kuthodaw Pagoda</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day5</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; -Breakfast</li>\r\n<li>-Cycling to Nyaung U Market Gubyauk Gyi,</li>\r\n<li>-Lunch</li>\r\n<li>&nbsp; &nbsp; -Shwezigone and Ahlopye Stupa</li>\r\n<li>&nbsp; &nbsp; -Htilominlo, Min Oh Chan Thar Pagoda</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>day6</p>\r\n<ul>\r\n<li>-Arrive Pyin Oo Lwin</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Maymyo Botanical Garden (National Kandawgyi Park)</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Pyin Oo Lwin Trek</li>\r\n<li>-Visit Peik Chin Myaung Cave</li>\r\n</ul>\r\n<p>day7</p>\r\n<ul>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Maha Ant Htoo Kan Thar Pagoda</li>\r\n<li>-Hampshire Falls and Caves (Pwe Kauk)</li>\r\n<li>-Lunch</li>\r\n<li>-Visit All Saints Anglican Church</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>day8</p>\r\n<ul>\r\n<li>-Breakfast</li>\r\n<li>-Visit Aung Chantha Paya</li>\r\n<li>-Lunch</li>\r\n<li>-Visit HTOO Orange Farm</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>SERVICE INCLUDES:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; Sightseeing Program in Bagan Half-day tour with English Speaking Guide</p>\r\n<p>&nbsp; &nbsp; Half Day Cycling Tour in Bagan.</p>\r\n<p>&nbsp; &nbsp; Bicycle Fees</p>\r\n<p>&nbsp; &nbsp; Tour Program Sightseeing with private air- condition and good experienced car driver.</p>\r\n<p>&nbsp; &nbsp; Purify drinking water and snow Towel along in program.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118348.97178300636!2d96.40465733116375!3d22.034083792473744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cc9e9c4e50f127%3A0xe9303d2a683f438f!2sPyin+Oo+Lwin!5e0!3m2!1sen!2smm!4v1536904264534', 9, '2760735506a5bc187a35f6c829fae70d.jpg,881ab63b3db7d21d9ad32c6c5a19597b.jpg,b8d602ab421ea80896c7eb01bd7e14e3.jpg', '0', '2018-09-14 01:42:20', '2018-09-14 01:42:20'),
(9, 'Mandalay-Yangon', 1, 55000, 'vacation', '<p>Yangon, the commercial capital, is the main gateway to Myanmar. Evergreen and cool with lush tropical trees, shady parks and beautiful lakes, Yangon has earned the name of \"The Garden City of the East\". Yangon was founded by King Alaungpaya on the site of a small settlement called Dagon when he conquered Lower Myanmar in 1755.</p>', '<p>day1</p>\r\n<ul>\r\n<li>-Arrive Mandaly</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Pont U-Bain Amarapura</li>\r\n<li>-Visit Cultural Museum Mandalay</li>\r\n<li>-Lunch&nbsp;</li>\r\n<li>-Visit Myan Nan San Kyaw, or Royal Palace</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day2</p>\r\n<ul>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Seinnyet Nyima Paya &amp; Seinnyet Ama Pahto&nbsp;</li>\r\n<li>-Visit Htilominlo Pahto Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Gawdawpalin Pahto</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day 3</p>\r\n<ul>\r\n<li>-Arrive yangon</li>\r\n<li>-Visit Shwedagon Pagoda</li>\r\n<li>-Walk around Sule Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Feel tranquillity at Swal Taw Pagoda&nbsp;</li>\r\n<li>-Visit Kyauk Taw Gyi Temple</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day4</p>\r\n<ul>\r\n<li>-Arrive Mandaly</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Pont U-Bain Amarapura</li>\r\n<li>-Visit Cultural Museum Mandalay</li>\r\n<li>-Lunch&nbsp;</li>\r\n<li>-Visit Myan Nan San Kyaw, or Royal Palace</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day5</p>\r\n<ul>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Seinnyet Nyima Paya &amp; Seinnyet Ama Pahto&nbsp;</li>\r\n<li>-Visit Htilominlo Pahto Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Gawdawpalin Pahto</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day 6</p>\r\n<ul>\r\n<li>-Arrive yangon</li>\r\n<li>-Visit Shwedagon Pagoda</li>\r\n<li>-Walk around Sule Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Feel tranquillity at Swal Taw Pagoda&nbsp;</li>\r\n<li>-Visit Kyauk Taw Gyi Temple</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>ERVICE INCLUDES:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; Sightseeing Program in Bagan Half-day tour with English Speaking Guide</p>\r\n<p>&nbsp; &nbsp; Half Day Cycling Tour in Bagan.</p>\r\n<p>&nbsp; &nbsp; Bicycle Fees</p>\r\n<p>&nbsp; &nbsp; Tour Program Sightseeing with private air- condition and good experienced car driver.</p>\r\n<p>&nbsp; &nbsp; Purify drinking water and snow Towel along in program.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244307.58873964142!2d96.01189219913104!3d16.910187746895044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1536903947075', 7, '430145e051fb9ae6d43bc5d021cbacae.jpg,93c3aec62f29d19871d13c9523a4d606.jpg,ee8def548f1c9a7740177e63821864f7.jpg', '0', '2018-09-14 01:45:50', '2018-10-06 05:06:19'),
(10, 'Pyin Oo Lwin-Yangon', 1, 43000, 'vacation', '<p>Yangon, the commercial capital, is the main gateway to Myanmar. Evergreen and cool with lush tropical trees, shady parks and beautiful lakes, Yangon has earned the name of \"The Garden City of the East\". Yangon was founded by King Alaungpaya on the site of a small settlement called Dagon when he conquered Lower Myanmar in 1755.</p>', '<p>day1</p>\r\n<ul>\r\n<li>-Arrive Pyin Oo Lwin</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Maymyo Botanical Garden (National Kandawgyi Park)</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Pyin Oo Lwin Trek</li>\r\n<li>-Visit Peik Chin Myaung Cave</li>\r\n</ul>\r\n<p>day2</p>\r\n<ul>\r\n<li>-Arrive yangon</li>\r\n<li>-Visit Shwedagon Pagoda</li>\r\n<li>-Walk around Sule Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Feel tranquillity at Swal Taw Pagoda&nbsp;</li>\r\n<li>-Visit Kyauk Taw Gyi Temple</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day3</p>\r\n<ul>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visiting near yangon place</li>\r\n<li>-Lunch</li>\r\n<li>-Yangon Night see view&nbsp;</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day4</p>\r\n<ul>\r\n<li>-Arrive Pyin Oo Lwin</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Maymyo Botanical Garden (National Kandawgyi Park)</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Pyin Oo Lwin Trek</li>\r\n<li>-Visit Peik Chin Myaung Cave</li>\r\n</ul>\r\n<p>day5</p>\r\n<ul>\r\n<li>-Arrive yangon</li>\r\n<li>-Visit Shwedagon Pagoda</li>\r\n<li>-Walk around Sule Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Feel tranquillity at Swal Taw Pagoda&nbsp;</li>\r\n<li>-Visit Kyauk Taw Gyi Temple</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day6</p>\r\n<ul>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visiting near yangon place</li>\r\n<li>-Lunch</li>\r\n<li>-Yangon Night see view&nbsp;</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>ERVICE INCLUDES:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; Sightseeing Program in Bagan Half-day tour with English Speaking Guide</p>\r\n<p>&nbsp; &nbsp; Half Day Cycling Tour in Bagan.</p>\r\n<p>&nbsp; &nbsp; Bicycle Fees</p>\r\n<p>&nbsp; &nbsp; Tour Program Sightseeing with private air- condition and good experienced car driver.</p>\r\n<p>&nbsp; &nbsp; Purify drinking water and snow Towel along in program.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244307.58873964142!2d96.01189219913104!3d16.910187746895044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1536903947075', 7, 'f3ccdd27d2000e3f9255a7e3e2c48800.jpg,7fdc1a630c238af0815181f9faa190f5.jpg,601aea1a28bf16e6a6f33e42c42c9226.jpg', '0', '2018-09-14 01:48:22', '2018-09-16 20:33:13'),
(11, 'Yangon-Bangan', 6, 38000, 'honeymoon', '<p>The main tourist destination in Myanmar is Bagan, capital of the first Myanmar Empire; one of the richest archaeological sites in South-east Asia. Situated on the eastern bank of the Ayeyawaddy River. The Magic of Bagan has inspired visitors to Myanmar for nearly 1000 years.</p>', '<p>day1&nbsp;</p>\r\n<ul>\r\n<li>-Arrive Yangon</li>\r\n<li>&nbsp; -Breakfast&nbsp;</li>\r\n<li>-Visiting Tample&nbsp;</li>\r\n<li>-Lunch&nbsp;</li>\r\n<li>-Visiting famous plase in Yangon</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day2</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; -Breakfast&nbsp;</li>\r\n<li>-Visiting near yangon place</li>\r\n<li>-Lunch</li>\r\n<li>-Yangon Night see view&nbsp;</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day3</p>\r\n<ul>\r\n<li>-Arrive Bagan</li>\r\n<li>-Visit Ananda Pahto pagoda</li>\r\n<li>-Visit Shwesandaw Paya pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Thatbyinnyu Pahto pagoda</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>day4</p>\r\n<ul>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Seinnyet Nyima Paya &amp; Seinnyet Ama Pahto&nbsp;</li>\r\n<li>-Visit Htilominlo Pahto Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Gawdawpalin Pahto</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>day5</p>\r\n<ul>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit three-storey building pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Dhammayazika Pagoda</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>ERVICE INCLUDES:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; Sightseeing Program in Bagan Half-day tour with English Speaking Guide</p>\r\n<p>&nbsp; &nbsp; Half Day Cycling Tour in Bagan.</p>\r\n<p>&nbsp; &nbsp; Bicycle Fees</p>\r\n<p>&nbsp; &nbsp; Tour Program Sightseeing with private air- condition and good experienced car driver.</p>\r\n<p>&nbsp; &nbsp; Purify drinking water and snow Towel along in program.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7441.0035729029805!2d94.85448717343688!3d21.172216498338816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b5e50393d8ca61%3A0x371a4717c3e89981!2sOld+Bagan!5e0!3m2!1sen!2smm!4v1536904207340', 6, '5938f7e89ba34b7c252d2069d7c64b55.jpg,4d0f2462d90086da3ec61e504ccbf011.jpg,ffcd54b60b2f3c170df3ce129f1ebd6a.jpg', '0', '2018-09-14 01:50:40', '2018-09-14 01:50:40'),
(12, 'Taunggyi Trip', 3, 40000, 'normal', '<p>Taunggyi is situated in the southern Shan State and is the capital town of Shan States. It is 4.712feet above the sea level and has a moderate climate.&nbsp;</p>\r\n<p>It is situated on a high plateau surrounded by high mountains. As Taunggyi lies on a hill region. the atmosphere is conducive to good health especially by means of the salubrious mountain air. It usually rains in Taunggyi from June to November and average annual rainfall is 32.68 inches. To reach Taunggyi you first have to fly to Heho. about 40 kilometers to the West. because the town itself does not boast an airfield.</p>', '<p>day1</p>\r\n<ul>\r\n<li>-Arrive Yangon</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visiting Tample&nbsp;</li>\r\n<li>-Lunch&nbsp;</li>\r\n<li>-Visiting famous plase in Yangon</li>\r\n<li>-Dinner&nbsp;</li>\r\n</ul>\r\n<p>day2</p>\r\n<ul>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visiting near yangon place</li>\r\n<li>-Lunch</li>\r\n<li>-Yangon Night see view&nbsp;</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day3</p>\r\n<ul>\r\n<li>-Arrive Taunggyi</li>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit Myanmar Vineyard</li>\r\n<li>-Visit Shwe Phone Pye Pagoda</li>\r\n<li>-Lunch</li>\r\n<li>-Visit Taunggyi\'s main downtown pagoda.</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>day4</p>\r\n<ul>\r\n<li>-Breakfast&nbsp;</li>\r\n<li>-Visit St Joseph\'s Cathedral&nbsp;</li>\r\n<li>-Lunch</li>\r\n<li>-Visit St George Anglican Church</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>day5</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; -Breakfast</li>\r\n<li>-Visit Inle lake</li>\r\n<li>-Lunch</li>\r\n<li>-Dinner</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><span style=\"white-space: pre;\">S</span>ERVICE INCLUDES:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; &nbsp; Sightseeing Program in Bagan Half-day tour with English Speaking Guide</p>\r\n<p>&nbsp; &nbsp; Half Day Cycling Tour in Bagan.</p>\r\n<p>&nbsp; &nbsp; Bicycle Fees</p>\r\n<p>&nbsp; &nbsp; Tour Program Sightseeing with private air- condition and good experienced car driver.</p>\r\n<p>&nbsp; &nbsp; Purify drinking water and snow Towel along in program.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59681.692653221886!2d97.01499914351612!3d20.787007594429326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ce86381a88cc0f%3A0xf53083c4263eb24b!2sTaunggyi!5e0!3m2!1sen!2smm!4v1536904373816', 6, '62b9a8da1ce40b29f257d33eeac3d332.jpg,75b67de2a3e6c3872d618ff9e3ea8cbc.jpg,5cfff6830d6625922b9b343c6562f849.jpg', '0', '2018-09-14 01:55:36', '2018-09-14 01:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `from_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `del_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `from_city`, `to_city`, `type`, `price`, `del_status`, `created_at`, `updated_at`) VALUES
(1, 'Yangon', 'Mandalay', 'Car', 12000, '0', '2018-08-30 15:31:20', '2018-09-13 23:28:30'),
(2, 'Yangon', 'Mandalay', 'Ship', 8000, '0', '2018-08-30 15:31:37', '2018-09-13 23:29:25'),
(3, 'Yangon', 'Mandalay', 'Locomotive', 7500, '0', '2018-08-30 15:31:51', '2018-08-30 15:50:36'),
(4, 'Yangon', 'Mandalay', 'Flight', 65000, '0', '2018-08-30 15:32:32', '2018-08-30 15:32:32'),
(5, 'Mandalay', 'Yangon', 'Car', 5500, '0', '2018-08-30 15:56:19', '2018-08-30 15:56:19'),
(6, 'Mandalay', 'Yangon', 'Ship', 5500, '0', '2018-08-30 15:56:29', '2018-08-30 15:56:29'),
(7, 'Mandalay', 'Yangon', 'Locomotive', 7000, '0', '2018-08-30 15:56:43', '2018-08-30 15:56:43'),
(8, 'Mandalay', 'Yangon', 'Flight', 65000, '0', '2018-08-30 15:56:56', '2018-08-30 15:56:56'),
(9, 'Yangon', 'Pyin Oo Lwin', 'Car', 15000, '0', '2018-08-30 15:57:10', '2018-08-30 15:57:10'),
(10, 'Pyin Oo Lwin', 'Yangon', 'Car', 15000, '0', '2018-08-30 15:57:24', '2018-08-30 15:57:24'),
(11, 'Mandalay', 'Pyin Oo Lwin', 'Locomotive', 5000, '0', '2018-08-30 15:57:46', '2018-08-30 18:16:12'),
(12, 'Mandalay', 'Pyin Oo Lwin', 'Car', 5000, '0', '2018-08-30 15:57:59', '2018-08-30 15:57:59'),
(13, 'Yangon', 'Bagan', 'Car', 25000, '0', '2018-08-30 15:59:18', '2018-08-30 15:59:18'),
(14, 'Bagan', 'Yangon', 'Car', 25000, '0', '2018-08-30 15:59:26', '2018-08-30 15:59:26'),
(15, 'Mandalay', 'Bagan', 'Car', 30000, '0', '2018-08-30 15:59:54', '2018-08-30 15:59:54'),
(16, 'Bagan', 'Mandalay', 'Car', 30000, '0', '2018-08-30 16:00:02', '2018-08-30 16:00:02'),
(17, 'Mandalay', 'Bagan', 'Ship', 16000, '0', '2018-08-30 16:00:18', '2018-08-30 16:00:18'),
(18, 'Yangon', 'Bagan', 'Locomotive', 22000, '0', '2018-08-30 16:00:37', '2018-08-31 02:33:11'),
(19, 'Yangon', 'Taung Gyi', 'Car', 18000, '0', '2018-08-30 18:17:39', '2018-08-30 18:17:39'),
(20, 'Mandalay', 'Taung Gyi', 'Car', 20000, '0', '2018-08-30 18:17:51', '2018-08-30 18:17:51'),
(21, 'Yangon', 'Taung Gyi', 'Flight', 85000, '0', '2018-08-30 18:18:02', '2018-08-30 18:18:02'),
(22, 'Mandalay', 'Taung Gyi', 'Flight', 85000, '0', '2018-08-30 18:18:15', '2018-08-30 18:18:15'),
(23, 'Yangon', 'Pathein', 'Car', 10000, '0', '2018-08-30 18:28:43', '2018-08-30 18:28:43'),
(24, 'Mandalay', 'Pathein', 'Car', 12000, '0', '2018-08-30 18:28:57', '2018-08-30 18:28:57'),
(25, 'Sightseeing', 'Sightseeing', 'Car', 0, '0', '2018-08-31 02:25:30', '2018-09-16 22:31:26'),
(26, 'Yangon', 'Bagan', 'Flight', 65000, '0', '2018-08-31 02:34:37', '2018-08-31 02:34:37'),
(27, 'Yangon', 'Bagan', 'Flight', 65000, '1', '2018-08-31 02:35:37', '2018-08-31 02:36:18'),
(28, 'Yangon', 'Taung Gyi', 'Locomotive', 21000, '0', '2018-08-31 02:37:38', '2018-08-31 02:37:38'),
(29, 'Yangon', 'Ayayarwady', 'Car', 12000, '0', '2018-08-31 02:44:33', '2018-08-31 02:44:33'),
(30, 'Yangon', 'Ayayarwady', 'Ship', 10000, '0', '2018-08-31 02:45:16', '2018-08-31 02:45:16'),
(33, 'Pyin Oo Lwin', 'Yangon', 'Locomotive', 14000, '0', '2018-08-31 02:53:47', '2018-08-31 02:53:47'),
(34, 'Pyin Oo Lwin', 'Yangon', 'Flight', 45000, '0', '2018-08-31 02:55:28', '2018-08-31 02:55:28'),
(35, 'Pyin Oo Lwin', 'Mandalay', 'Car', 5500, '0', '2018-08-31 02:57:38', '2018-08-31 02:57:38'),
(36, 'Pyin Oo Lwin', 'Pyin Oo Lwin', 'Car', 0, '0', '2018-08-31 02:57:59', '2018-08-31 02:57:59'),
(37, 'Mandalay', 'Bagan', 'Locomotive', 25000, '0', '2018-09-02 07:41:30', '2018-09-02 07:41:30'),
(38, 'Mandalay', 'Bagan', 'Flight', 85000, '0', '2018-09-02 07:41:50', '2018-09-02 07:41:50'),
(40, 'Bagan', 'Yangon', 'Locomotive', 22000, '0', '2018-09-02 07:44:58', '2018-09-02 07:44:58'),
(41, 'Bagan', 'Yangon', 'Flight', 75000, '0', '2018-09-02 07:45:17', '2018-09-02 07:45:17'),
(42, 'Bagan', 'Mandalay', 'Locomotive', 24000, '0', '2018-09-02 07:45:43', '2018-09-02 07:45:43'),
(43, 'Bagan', 'Mandalay', 'Flight', 85000, '0', '2018-09-02 07:46:02', '2018-09-02 07:46:02'),
(45, 'Taung Gyi', 'Yangon', 'Car', 18000, '0', '2018-09-02 07:47:55', '2018-09-02 07:47:55'),
(46, 'Taung Gyi', 'Yangon', 'Locomotive', 22000, '0', '2018-09-02 07:48:20', '2018-09-02 07:48:20'),
(47, 'Taung Gyi', 'Yangon', 'Flight', 85000, '0', '2018-09-02 07:48:39', '2018-09-02 07:48:39'),
(52, 'Yangon', 'Chaung Thar', 'Car', 12000, '0', '2018-09-13 23:25:06', '2018-09-13 23:25:06'),
(53, 'Yangon', 'Ngwe Saung', 'Car', 12000, '0', '2018-09-13 23:25:29', '2018-09-13 23:25:29'),
(54, 'Yangon', 'Ngapali', 'Car', 17000, '0', '2018-09-13 23:25:48', '2018-09-13 23:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `bank_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','editor','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `bank_id`, `name`, `email`, `password`, `role`, `phone`, `address`, `image`, `ban_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 4, 'Mr. Admin', 'admin@gmail.com', '$2y$10$g9wmCDVgT2GHCnhz4BmR8.1KWnLmsk0EADkX4PpalvVmVf5kq9ysy', 'admin', '0944445525', 'My Address', '1fc8381ccac933612936bb617a5ae906.png', '0', 'vpb9Gs6USCdm0GO4TVycjz1nmqts8L4V0UsYXz0E1W9M5cU84o6p6NxKDXGu', '2018-09-14 01:07:13', '2018-09-14 01:07:13'),
(2, 2, 'Myint Myat Kaung', 'myintmyatkaung.info@gmail.com', '$2y$10$Q6vR31npe/6z0Ec9UbPvz.DaAVNpoWK2bBwe2Zp/cMhO1tPn/NdFy', 'editor', '0944445525', 'My Address', '5a9877864354995ef1ed8d27160b5e9e.jpg', '0', 'T67ipb5hUAkHYym25TulX0X6ocbnM9Yk3zs7CwAg51BiIIcqXlQWxOCnNd9j', '2018-09-14 02:11:29', '2018-09-18 15:44:40'),
(3, 6, 'Yin Myat Thwe', 'yinmyatthwe@gmail.com', '$2y$10$1T3v45Cm117PXsjwJYYHXuhqlwpmPX25Kp3SaJkHJvycBqaKIZUA2', 'user', '0944445525', 'Address', 'e0682e4e7bfb76b132e54d87ba1ec579.jpg', '0', 'uPNC1cKguccxGVFy7x7ltCKWxt16rZo5NufmtlktFqVSQDTijFqlUpDAcMju', '2017-09-14 02:17:16', '2018-09-14 02:17:16'),
(4, 7, 'Htet Htet', 'htethtet@gmail.com', '$2y$10$42yyySCYQBfdeknSFQJGt..sHgZv5vNsRhKoDmgLJNUbyswrYZ/Aq', 'user', '0944445525', 'Yangon', 'e0682e4e7bfb76b132e54d87ba1ec579.jpg', '0', '', '2018-09-14 02:54:06', '2018-09-14 02:54:06'),
(5, 7, 'Editor', 'editor@gmail.com', '$2y$10$ucDqcFhPKeaS.8C5xeWv/ewpvU2p0EFdfZ5dKd0QwDIJrzY7j.4Vu', 'user', '9999999999', 'akdj;aldksdf', '1197b29c66a036a4909afb9bfc03d54c.jpg', '0', 'CZ9h9pqktbhz31rxF8L1zdSvgRMWFZhyO03hzGFohYncvMMUP45TTMgpPcET', '2018-10-06 05:34:02', '2018-10-06 05:34:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
