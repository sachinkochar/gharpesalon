-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2018 at 06:31 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gharpesa_gharpesalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `cata_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `offr_price` bigint(20) NOT NULL,
  `time_pirod` varchar(255) NOT NULL,
  `extra` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `cata_id`, `name`, `price`, `offr_price`, `time_pirod`, `extra`, `status`, `date`) VALUES
(1, 2, 'D Tan Pack (Face & Neck)', 250, 0, '30 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, and Extraction', 'A', '2018-04-06 07:07:19'),
(2, 2, 'Fruit Facial', 500, 0, '60 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, Extraction, Creams, Lotions, Facial Masks, Peels, and Massage. ', 'A', '2018-04-06 07:08:24'),
(3, 2, 'Shahnaz Gold Facial', 700, 0, '60 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, Extraction, Creams, Lotions, Facial Masks, Peels, and Massage. ', 'A', '2018-04-06 07:12:23'),
(4, 2, 'Shahnaz Diamond Facial', 700, 0, '60 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, Extraction, Creams, Lotions, Facial Masks, Peels, and Massage. ', 'A', '2018-04-06 07:13:01'),
(5, 2, 'Lotus Gold Facial', 1000, 0, '60 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, Extraction, Creams, Lotions, Facial Masks, Peels, and Massage. ', 'A', '2018-04-06 07:13:49'),
(6, 2, 'Lotus Insta Fair', 1000, 0, '60 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, Extraction, Creams, Lotions, Facial Masks, Peels, and Massage. ', 'A', '2018-04-06 07:14:45'),
(7, 2, 'Lotus Radiant Gold', 1000, 0, '60 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, Extraction, Creams, Lotions, Facial Masks, Peels, and Massage. ', 'A', '2018-04-06 07:15:05'),
(8, 2, 'Cheryl\'s Dermalite Facial', 1500, 0, '60 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, Extraction, Creams, Lotions, Facial Masks, Peels, and Massage. ', 'A', '2018-04-06 07:15:31'),
(9, 2, 'Cheryl\'s Glow Vita', 1500, 0, '60 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, Extraction, Creams, Lotions, Facial Masks, Peels, and Massage. ', 'A', '2018-04-06 07:17:33'),
(10, 2, 'Cheryl\'s Tan Cleaner', 1500, 0, '60 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, Extraction, Creams, Lotions, Facial Masks, Peels, and Massage. ', 'A', '2018-04-06 07:18:00'),
(11, 2, 'O3 + Whitening Facial', 2000, 0, '60 - Min', 'It is Skin Care Treatments for the Face, which includes Steam, Exfoliation, Extraction, Creams, Lotions, Facial Masks, Peels, and Massage. ', 'A', '2018-04-06 07:18:18'),
(12, 2, 'Facial with Customer Product', 550, 0, '60 - Min', 'It is Skin Care Treatments for the Face, in which costumer have to provide the set of basics facial products so that the services for the same would be given.', 'A', '2018-04-06 07:18:41'),
(13, 3, 'Regular Clean Up', 300, 0, '45 - Min', 'It is also called â€œMini Facialâ€ for the Face, which includes Cleansing, Steam, Exfoliation, Extraction, and Facial Masks application. ', 'A', '2018-04-06 07:23:36'),
(14, 3, 'Cheryl\'s Clean Up', 550, 0, '45 - Min', 'It is also called â€œMini Facialâ€ for the Face, which includes Cleansing, Steam, Exfoliation, Extraction, and Facial Masks application. ', 'A', '2018-04-06 07:24:09'),
(15, 3, 'Lotus Clean Up', 450, 0, '45 - Min', 'It is also called â€œMini Facialâ€ for the Face, which includes Cleansing, Steam, Exfoliation, Extraction, and Facial Masks application. ', 'A', '2018-04-06 07:24:35'),
(16, 3, 'O3 + Clean Up', 1100, 0, '45 - Min', 'It is also called â€œMini Facialâ€ for the Face, which includes Cleansing, Steam, Exfoliation, Extraction, and Facial Masks application. ', 'A', '2018-04-06 07:25:00'),
(17, 4, 'Basic Manicure', 250, 0, '45 - Min', 'It is a Cosmetic Beauty Treatment for the Fingernails. It consists of Filing and Shaping the free edge, Pushing and Clipping any nonliving tissue, Treatments with various Liquids, Massage of the Hand, and the application of Fingernail Polish. ', 'A', '2018-04-06 07:29:28'),
(18, 4, 'Basic Pedicure', 350, 0, '45 - Min', 'It is a Cosmetic Beauty Treatment for the Toenails. It consists of Filing and Shaping the free edge, Pushing and Clipping any nonliving tissue, Treatments with various Liquids, Massage of the Half Legs, and the application of Toenail Polish. ', 'A', '2018-04-06 07:30:35'),
(19, 4, 'VLCC Manicure', 300, 0, '45 - Min', 'It is a Cosmetic Beauty Treatment for the Fingernails. It consists of Filing and Shaping the free edge, Pushing and Clipping any nonliving tissue, Treatments with various Liquids, Massage of the Hand, and the application of Fingernail Polish.', 'A', '2018-04-06 07:30:53'),
(20, 4, 'VLCC Pedicure', 400, 0, '45 - Min', 'It is a Cosmetic Beauty Treatment for the Toenails. It consists of Filing and Shaping the free edge, Pushing and Clipping any nonliving tissue, Treatments with various Liquids, Massage of the Half Legs, and the application of Toenail Polish.', 'A', '2018-04-06 07:31:08'),
(21, 4, 'Lotus Crystal Manicure', 450, 0, '45 - Min', 'It is a Cosmetic Beauty Treatment for the Fingernails. It consists of Filing and Shaping the free edge, Pushing and Clipping any nonliving tissue, Treatments with various Liquids, Massage of the Hand, and the application of Fingernail Polish.', 'A', '2018-04-06 07:32:01'),
(22, 4, 'Lotus Crystal Pedicure', 550, 0, '45 - Min', 'It is a Cosmetic Beauty Treatment for the Toenails. It consists of Filing and Shaping the free edge, Pushing and Clipping any nonliving tissue, Treatments with various Liquids, Massage of the Half Legs, and the application of Toenail Polish.', 'A', '2018-04-06 07:33:14'),
(23, 4, 'Cut, File & Polish', 150, 0, '20 - Min', 'It consists of Filing and Shaping the free edge, Pushing and Clipping any nonliving tissue, Treatments with various Liquids.', 'A', '2018-04-06 07:34:42'),
(24, 4, 'D Tan Pack Manicure', 150, 0, '45 - Min', 'It is a Cosmetic Beauty Treatment for the Fingernails. It consists of Filing and Shaping the free edge, Pushing and Clipping any nonliving tissue, Treatments with various Liquids, Massage of the Hand, and the application D Tan Pack and end with the applic', 'A', '2018-04-06 07:35:34'),
(25, 4, 'D Tan Pack Pedicure', 200, 0, '45 - Min', 'It is a Cosmetic Beauty Treatment for the Toenails. It consists of Filing and Shaping the free edge, Pushing and Clipping any nonliving tissue, Treatments with various Liquids, Massage of the Half Legs, and the application D Tan Pack and end with the appl', 'A', '2018-04-06 07:36:09'),
(26, 4, 'Nail Paint Application', 50, 0, '20 - Min', 'It Includes application of Fingernail Polish', 'A', '2018-04-06 07:36:25'),
(27, 5, 'Face Bleach', 120, 0, '30-Min', 'Lightens Facial Hairs', 'A', '2018-04-06 07:40:06'),
(28, 5, 'Face & Neck', 150, 0, '45-Min', 'Lightens Facial Hairs', 'A', '2018-04-06 07:44:10'),
(29, 5, 'Face, Neck & Back', 250, 0, '45 - Min', '      Lightens Facial Hairs (Including Full Back)      ', 'A', '2018-04-06 07:48:02'),
(30, 5, 'Face, Neck & Front', 250, 0, '45-Min', 'Including Stomach', 'A', '2018-04-07 04:54:39'),
(31, 5, 'Neck Bleach', 50, 0, '15-Min', 'Lightens Facial Hair', 'A', '2018-04-07 04:55:30'),
(32, 5, 'Underarms Bleach', 50, 0, '15-Min', 'Lightens Facial Hair', 'A', '2018-04-07 04:56:05'),
(33, 5, 'Full Hands', 250, 0, '20-Min', 'Lightens Facial Hair', 'A', '2018-04-07 04:56:42'),
(34, 5, 'Full Legs', 350, 0, '30-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:03:41'),
(35, 5, 'Full Back', 150, 0, '30-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:04:16'),
(36, 5, 'Full Front', 150, 0, '30 - Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:04:43'),
(37, 5, 'Feet', 100, 0, '20-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:14:50'),
(38, 5, 'Butt Bleach', 250, 0, '20-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:15:17'),
(39, 5, 'Full Body', 999, 0, '60-Min', 'Lightens Facial Hair (Excluding Bikini)', 'A', '2018-04-07 05:16:17'),
(40, 6, 'Face Bleach', 150, 0, '30-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:16:57'),
(41, 6, 'Face & Neck', 200, 0, '45-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:17:16'),
(42, 6, 'Face, Neck & Back', 300, 0, '45-Min', 'Lightens Facial Hair (Including Full Back)', 'A', '2018-04-07 05:18:05'),
(43, 6, 'Face, Neck & Front', 300, 0, '45-Min', 'Lightens Facial Hair (Stomach Including)', 'A', '2018-04-07 05:18:45'),
(44, 6, 'Neck Bleach', 70, 0, '15-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:19:16'),
(45, 6, 'Underarms Bleach', 70, 0, '15-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:19:46'),
(46, 6, 'Full Hands', 300, 0, '20-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:20:43'),
(47, 6, 'Full Legs', 450, 0, '30-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:21:19'),
(48, 6, 'Full Back', 200, 0, '30-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:21:44'),
(49, 6, 'Full Front', 200, 0, '30-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:22:24'),
(50, 6, 'Feet', 100, 0, '20-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:22:55'),
(51, 6, 'Butt Bleach', 300, 0, '20-Min', 'Lightens Facial Hair', 'A', '2018-04-07 05:23:18'),
(52, 6, 'Full Body', 1499, 0, '60-Min', 'Lightens Facial Hair (Excluding Bikini)', 'A', '2018-04-07 05:24:05'),
(53, 7, 'Underarms', 50, 0, '10 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 05:57:37'),
(54, 7, 'Half Hands', 70, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 05:58:20'),
(55, 7, 'Full Hands', 130, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 05:58:37'),
(56, 7, 'Full Hands & Underarms', 150, 0, '40 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 05:59:03'),
(57, 7, 'Half Legs', 120, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 05:59:21'),
(58, 7, 'Full Legs', 250, 0, '45 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 05:59:42'),
(59, 7, 'Half Front', 250, 0, '20 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:00:10'),
(60, 7, 'Full Front', 450, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:00:33'),
(61, 7, 'Half Back', 250, 0, '20 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:00:53'),
(62, 7, 'Full Back', 450, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:32:28'),
(63, 7, 'Full Body (Excluding Bikini Line)', 900, 0, '60 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:34:16'),
(64, 7, 'Bikini Line', 250, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:35:12'),
(65, 7, 'Bikini Wax', 500, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:35:36'),
(66, 7, 'Brazilian Chin Wax', 150, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:36:22'),
(67, 7, 'Brazilian Upper Lips Wax', 50, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:37:28'),
(68, 7, 'Brazilian Sidelocks Wax', 50, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:40:30'),
(69, 7, 'Beans Wax (Bikini Wax)', 1100, 0, '60 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:41:09'),
(70, 8, 'Underarms', 70, 0, '10 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:45:30'),
(71, 8, 'Half Hands', 90, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:46:01'),
(72, 8, 'Full Hands', 150, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:46:32'),
(73, 8, 'Full Hands & Underarms', 200, 0, '40 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:47:01'),
(74, 8, 'Half Legs', 150, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:48:10'),
(75, 8, 'Full Legs', 300, 0, '45 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:48:51'),
(76, 8, 'Half Front', 300, 0, '20 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:49:42'),
(77, 8, 'Full Front', 500, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:50:35'),
(78, 8, 'Half Back', 300, 0, '20 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:51:12'),
(79, 8, 'Full Back', 500, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:52:23'),
(80, 8, 'Full Body (Excluding Bikini Line)', 1000, 0, '60 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:52:50'),
(81, 8, 'Bikini Line', 300, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:53:09'),
(82, 8, 'Bikini Wax', 600, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:53:29'),
(83, 8, 'Brazilian Chin Wax', 150, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:54:28'),
(84, 8, 'Brazilian Upper Lips Wax', 50, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:56:06'),
(85, 8, 'Brazilian Sidelocks Wax', 50, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:56:20'),
(86, 8, 'Beans Wax (Bikini Wax)', 1100, 0, '60 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:56:40'),
(87, 9, 'Underarms', 90, 0, '10 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 06:59:56'),
(88, 9, 'Half Hands', 120, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:00:44'),
(89, 9, 'Full Hands', 170, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:01:15'),
(90, 9, 'Full Hands & Underarms', 250, 0, '40 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:02:42'),
(91, 9, 'Half Legs', 170, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:03:08'),
(92, 9, 'Full Legs', 350, 0, '45 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:05:03'),
(93, 9, 'Half Front', 400, 0, '20 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:06:54'),
(94, 9, 'Full Front', 600, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:07:44'),
(95, 9, 'Half Back', 400, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:08:02'),
(96, 9, 'Full Back', 600, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:10:04'),
(97, 9, 'Full Body (Excluding Bikini Line)', 1200, 0, '60 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:10:34'),
(98, 9, 'Bikini Line', 350, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:10:56'),
(99, 9, 'Bikini Wax', 750, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:11:16'),
(100, 9, 'Brazilian Chin Wax', 150, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:11:41'),
(101, 9, 'Brazilian Upper Lips Wax', 50, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:12:07'),
(102, 9, 'Brazilian Sidelocks Wax', 50, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:12:31'),
(103, 9, 'Beans Wax (Bikini Wax)', 1100, 0, '60 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:12:52'),
(104, 10, 'Underarms', 150, 0, '10 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:14:02'),
(105, 10, 'Half Hands', 180, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:14:36'),
(106, 10, 'Full Hands', 250, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:15:07'),
(107, 10, 'Full Hands & Underarms', 375, 0, '40 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:15:44'),
(108, 10, 'Half Legs', 220, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:16:08'),
(109, 10, 'Full Legs', 430, 0, '45 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:16:30'),
(110, 10, 'Half Front', 500, 0, '20 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:17:20'),
(111, 10, 'Full Front', 750, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:17:41'),
(112, 10, 'Half Back', 500, 0, '20 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:18:02'),
(113, 10, 'Full Back', 750, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:18:26'),
(114, 10, 'Full Body (Excluding Bikini Line)', 1500, 0, '60 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:18:47'),
(115, 10, 'Bikini Line', 400, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:19:07'),
(116, 10, 'Bikini Wax', 999, 0, '30 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:19:27'),
(117, 10, 'Brazilian Chin Wax', 150, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:19:49'),
(118, 10, 'Brazilian Upper Lips Wax', 50, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:20:14'),
(119, 10, 'Brazilian Sidelocks Wax', 50, 0, '15 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:20:31'),
(120, 10, 'Beans Wax (Bikini Wax)', 1100, 0, '60 - Min', 'It is a form of Semi-Permanent Hair Removal which Removes the Hair from the Root', 'A', '2018-04-07 07:20:49'),
(121, 11, 'Chin', 30, 0, '10-Min', '      ', 'A', '2018-04-07 07:21:22'),
(122, 11, 'Eyebrows', 30, 0, '10-Min', '      ', 'A', '2018-04-07 07:23:00'),
(123, 11, 'Upper Lips', 30, 0, '10-Min', '      ', 'A', '2018-04-07 07:23:20'),
(124, 11, 'Fore Head', 40, 0, '10-Min', '      ', 'A', '2018-04-07 07:23:38'),
(125, 11, 'Side Locks', 40, 0, '10-Min', '      ', 'A', '2018-04-07 07:24:11'),
(126, 11, 'Full Face (Excluding Side Locks)', 100, 0, '30-Min', '      ', 'A', '2018-04-07 07:24:55'),
(127, 12, 'Hair Cut', 450, 0, '60 - Min', 'This Includes The Tailor Made Hair Cut by Our Experts With a Suitable Blow Dryer. (Excluding Shampoo Service)', 'A', '2018-04-07 07:26:57'),
(128, 12, 'Hair Cut For Kids', 350, 0, '60 - Min', '      This Service is for Children Below 12 years.      ', 'A', '2018-04-07 07:27:16'),
(129, 12, 'Hair Trimming', 300, 0, '30 - Min', 'This Process is for Refine The Hair Cut and Chop Off the Split ends.', 'A', '2018-04-07 07:27:35'),
(130, 12, 'Blow Dryer', 300, 0, '30 - Min', 'In This, Our Stylists will Beautify you with Suitable Blow Dryer.', 'A', '2018-04-07 07:27:50'),
(131, 12, 'Temporary Straightening', 300, 0, '30 - Min', 'In This, Our Stylists will Beautify you with Suitable Semi-Straightening with the use of Heat Protector.', 'A', '2018-04-07 07:28:07'),
(132, 12, 'Temporary Curls (Tong)', 300, 0, '30 - Min', 'In This, Our stylists will Beautify you with suitable semi-curls (small, medium, big) with the use of Heat Protector.', 'A', '2018-04-07 07:28:47'),
(133, 12, 'Hair Style (Basic)', 500, 0, '30 - Min', 'It Includes Basin Bun with Front Styling', 'A', '2018-04-07 07:29:04'),
(134, 12, 'Hair Style (Advance)', 800, 0, '45 - Min', 'In This, You can have any Hairstyle of your choice.', 'A', '2018-04-07 07:29:21'),
(135, 13, 'L\'Oreal Hair Spa (Shoulder)', 600, 0, '60 - Min', 'It is a Scalp Purifying Treatment which includes steam, massage, application of cream bath, use of concentrate if required', 'A', '2018-04-07 07:40:48'),
(136, 13, 'L\'Oreal Hair Spa (Medium)', 800, 0, '60 - Min', 'It is Scalp Purifying Treatment which includes steam, massage, application of cream bath, use of concentrate if required                  ', 'A', '2018-04-07 07:41:18'),
(137, 13, 'L\'Oreal Hair Spa (Long)', 999, 0, '60 - Min', 'It is Scalp Purifying Treatment which includes steam, massage, application of cream bath, use of concentrate if required', 'A', '2018-04-07 07:41:59'),
(138, 13, 'L\'Oreal Anti-Dandruff', 150, 0, '20 - Min', 'This Treatment is to Cure Dandruff in Scalp', 'A', '2018-04-07 07:42:44'),
(139, 13, 'L\'Oreal Sensitive Scalp Impules', 150, 0, '20 - Min', 'This Treatment is for Sensitive and Dry Scalp', 'A', '2018-04-07 07:43:19'),
(140, 13, 'L\'Oreal Powerdose/Primer', 200, 0, '20 - Min', 'These impulses are basically applied to give smoothness and shine and strength to Frizzy and Sensitive Hair.                  ', 'A', '2018-04-07 07:43:55'),
(141, 13, 'Head Massage', 550, 0, '40 - Min', 'Head massage with suitable oil with steam', 'A', '2018-04-07 07:44:21'),
(142, 13, 'Head Spa (With Customer Product)', 500, 0, '60 - Min', 'In This, The Spa cream and concentrate (if required) will be provided by the Customer', 'A', '2018-04-07 07:44:51'),
(143, 14, 'Global Hair Colour (Shoulder)', 600, 0, '60 - Min', ' Base Color Black, Brown, Blond, Golden', 'A', '2018-04-07 07:47:13'),
(144, 14, 'Global Hair Colour (Medium)', 999, 0, '60 - Min', 'Base Color Black, Brown, Blond, Golden', 'A', '2018-04-07 07:48:01'),
(145, 14, 'Global Hair Colour (Long)', 1200, 0, '60 - Min', 'Base Color Black, Brown, Blond, Golden', 'A', '2018-04-07 07:49:01'),
(146, 14, 'Roots Touch Up (1inch)', 500, 0, '45 - Min', 'Kindly note that we do not wash hair during Root Touchup.', 'A', '2018-04-07 07:49:58'),
(147, 14, 'Roots Touch Up (2inch)', 600, 0, '45 - Min', 'Kindly note that we do not wash hair during Root Touchup.', 'A', '2018-04-07 07:50:58'),
(148, 14, 'Global Hair Colour Application (Customer Colour)', 500, 0, '60 - Min', 'In this, the Colour tube and material required for hair color is provided by the Customer', 'A', '2018-04-07 07:52:54'),
(149, 14, 'Global Roots Touch Up Application (Customer Colour)', 400, 0, '60 - Min', 'In this, the Colour tube and material required for Hair Colour is provided by the Customer ', 'A', '2018-04-07 08:01:08'),
(150, 14, 'Heena Application (Customer Heena)', 500, 0, '60 - Min', 'In this, the Heena and material required for Heena application is provided by the Customer', 'A', '2018-04-07 08:01:43'),
(151, 15, 'Global Hair Colour (Shoulder) L\'Oreal Marjirel', 800, 0, '60 - Min', 'Base color Black, Brown, Blond, Golden', 'A', '2018-04-07 08:05:31'),
(152, 15, 'Global Hair Colour (Shoulder) L\'Oreal Inoa', 999, 0, '60 - Min', 'Base color Black, Brown, Blond, Golden', 'A', '2018-04-07 08:06:10'),
(153, 15, 'Global Hair Colour (Medium) L\'Oreal Marjirel', 999, 0, '60 - Min', 'Base color Black, Brown, Blond, Golden', 'A', '2018-04-07 08:06:51'),
(154, 15, 'Global Hair Colour (Medium) L\'Oreal Inoa', 1200, 0, '60 - Min', 'Base color Black, Brown, Blond, Golden', 'A', '2018-04-07 08:07:40'),
(155, 15, 'Global Hair Colour (Long) L\'Oreal Marjirel', 1200, 0, '60 - Min', 'Base color Black, Brown, Blond, Golden', 'A', '2018-04-07 08:08:30'),
(156, 15, 'Global Hair Colour (Long) L\'Oreal Inoa', 1499, 0, '60 - Min', 'Base color Black, Brown, Blond, Golden', 'A', '2018-04-07 08:08:58'),
(157, 15, 'Roots Touch Up (1inch) L\'Oreal Marjirel', 600, 0, '45 - Min', 'Kindly note that we do not wash hair during Root Touchup.', 'A', '2018-04-07 08:09:39'),
(158, 15, 'Roots Touch Up (1inch) L\'Oreal Inoa', 700, 0, '45 - Min', 'Kindly note that we do not wash hair during Root Touchup.', 'A', '2018-04-07 08:10:06'),
(159, 15, 'Roots Touch Up (2inch) L\'Oreal Marjirel', 750, 0, '45 - Min', 'Kindly note that we do not wash hair during Root Touchup.', 'A', '2018-04-07 08:10:43'),
(160, 15, 'Roots Touch Up (2inch) L\'Oreal Inoa', 800, 0, '45 - Min', 'Kindly note that we do not wash hair during Root Touchup.', 'A', '2018-04-07 08:28:04'),
(161, 15, 'Global Hair Colour Application (Customer Colour)', 500, 0, '60 - Min', 'In this, the Colour tube and material required for Hair Colour is provided by the customer', 'A', '2018-04-07 08:28:56'),
(162, 15, 'Global Roots Touch Up Application (Customer Colour)', 400, 0, '60 - Min', 'In this, the Colour tube and material required for Hair Colour is provided by the Customer ', 'A', '2018-04-07 08:29:49'),
(163, 15, 'Heena Application (Customer Heena)', 500, 500, '50 - Min', '            In this, the Heena  and material required for Henna application is provided by the Customer            ', 'A', '2018-04-07 08:30:13'),
(165, 1, 'Hair Cut + Spa', 1449, 700, '120 - Min', '                  ', 'A', '2018-04-07 11:59:09'),
(166, 1, 'Face Bleach + Lotus Clean Up', 600, 499, '75 - Min', '                  ', 'A', '2018-04-07 12:00:32'),
(167, 1, 'Hair Cut + O3 Clean Up', 1550, 999, '105 - Min', '                  ', 'A', '2018-04-07 12:04:36'),
(168, 1, '2 Hair Cuts', 900, 700, '120 - Min', '                  ', 'A', '2018-04-07 12:05:32'),
(169, 1, 'Lotus Facial + Full Arm Wax (Honey)', 1130, 999, '90-Min', '      ', 'A', '2018-04-09 08:30:25'),
(170, 1, 'Global Hair Color(INOA) + Lotus Mani/Pedi', 2049, 1499, '105-Min', '      ', 'A', '2018-04-09 08:36:08'),
(171, 1, 'Lotus Facial + Hair Cut', 1450, 1200, '120-Min', '      ', 'A', '2018-04-09 08:38:11'),
(172, 1, 'Full Leg & Arm Wax (Honey) + O3 Clean Up', 1480, 999, '90-Min', '      ', 'A', '2018-04-09 08:45:20'),
(173, 1, 'Pre-Bridal Special (Unlimited Services)', 10000, 0, '0-Min', '      ', 'A', '2018-04-09 08:53:23'),
(174, 16, 'M.A.C Basic Make-Up', 15000, 0, '180-Min', 'This includes makeup application, Lehnga-Dupatta Setting, Jewellery Setting in it.', 'A', '2018-04-27 08:26:34'),
(175, 16, 'M.A.C HD Make Up', 21000, 0, '180-Min', 'This includes makeup application, Lehnga-Dupatta Setting, Jewellery Setting in it.', 'A', '2018-04-27 08:27:55'),
(176, 16, 'BOBBI BROWN Basic Make Up', 31000, 0, '180 - Min', '      This includes makeup application, Lehnga-Dupatta Setting, Jewellery Setting in it.      ', 'A', '2018-04-27 08:29:53'),
(177, 16, 'BOBBI BROWN HD Make Up', 38000, 0, '180-Min', 'This includes makeup application, Lehnga-Dupatta Setting, Jewellery Setting in it.', 'A', '2018-04-27 08:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `user_name` varchar(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`customer_id`, `name`, `email`, `pwd`, `phone`, `user_name`, `created_at`) VALUES
(1, 'Sourabh Jindal', 'sourabhjindal@gmail.com', 'Admin@123#', '8295700111', 'admin', '2018-03-28 07:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `id` int(11) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `mintus` varchar(255) NOT NULL,
  `orderid` bigint(20) NOT NULL,
  `uid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`id`, `address1`, `address2`, `email`, `city`, `state`, `country`, `zipcode`, `phone`, `date`, `time`, `mintus`, `orderid`, `uid`) VALUES
(93, 'Sirsa', 'Sector 4', 'info.webtemple@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-03', '09:00 am', '00', 68971558, 80),
(94, 'sirsa', 'Haryana  HR ', 'info.webtemple@gmail.com', 'Sirsa', '', 'India', '125055', '9253172338', '0000-00-00', '', '00', 95887380, 0),
(95, 'asdasd', 'Sector 6', 'info.webtemple@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-05', '09:00 am', '00', 86704978, 80),
(96, 'asdasd', 'Sector 6', 'info.webtemple@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-05', '09:00 am', '00', 77355606, 0),
(97, 'asdasd', 'Sector 6', 'info.webtemple@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-05', '09:00 am', '00', 36529555, 0),
(98, 'asdasd', 'Sector 6', 'info.webtemple@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-05', '09:00 am', '00', 27689037, 80),
(99, 'asdasd', 'Sector 6', 'info.webtemple@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-14', '14:30', '30', 38356241, 80),
(100, 'Sirsa', 'Sector 10', 'info.webtemple@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-06', '13:30', '00', 66788550, 80),
(101, 'sddsfds', '', 'sourabhjindal64@gmail.com', '', '', 'India', '125055', '9416257626', '2018-05-07', '10:30', '00', 58831273, 64),
(102, '', '', 'kocharsachin04@gmail.com', '', '', 'India', '125055', '1234567890', '0000-00-00', '', '00', 82008699, 0),
(103, 'sirsa', 'Sector 3', 'dbissu2@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-14', '15:30', '00', 77228499, 80),
(104, 'sirsa', 'Sector 3', 'dbissu2@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-14', '14:15', '00', 84201358, 80),
(105, 'sirsa', 'Sector 3', 'dbissu2@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-14', '14:15', '00', 69907546, 0),
(106, 'sirsa', 'Sector 3', 'dbissu2@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-14', '12:30', '00', 98939315, 80),
(107, 'sirsa', 'Sector 3', 'dbissu2@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-14', '12:30', '00', 43147649, 0),
(108, 'Sirsa', 'Sector 8', 'dbissu2@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-15', '9:15', '00', 53388541, 80),
(109, 'Sirsa', 'Sector 8', 'dbissu2@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-15', '9:15', '00', 29707006, 0),
(110, 'Sirsa', 'Sector 8', 'dbissu2@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-15', '9:15', '00', 27824203, 0),
(111, 'Sirsa', 'Sector 8', 'dbissu2@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-15', '9:15', '00', 73261584, 0),
(112, 'Sirsa', 'Sector 8', 'dbissu2@gmail.com', 'Chandigarh', '', 'India', '125055', '91925317', '2018-05-15', '9:15', '00', 73647144, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `pr` bigint(30) NOT NULL,
  `tpr` bigint(30) NOT NULL,
  `uid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pid`, `qty`, `pr`, `tpr`, `uid`) VALUES
(31, 1, 1, 250, 250, 103916),
(33, 1, 6, 250, 1500, 974770),
(34, 2, 2, 500, 1000, 974770),
(35, 1, 1, 250, 250, 531620),
(36, 1, 2, 250, 500, 657555),
(37, 1, 4, 250, 1000, 492302),
(38, 1, 5, 250, 1250, 73616),
(39, 3, 1, 700, 700, 73616),
(40, 1, 1, 250, 250, 363537),
(41, 2, 1, 500, 500, 363537),
(42, 12, 1, 550, 550, 838302),
(67, 1, 1, 250, 250, 252668),
(70, 2, 1, 500, 500, 281827),
(71, 1, 1, 250, 250, 563813),
(72, 1, 1, 250, 250, 345742),
(73, 1, 1, 250, 250, 401554),
(74, 1, 3, 250, 750, 385140),
(75, 1, 1, 250, 250, 3926),
(76, 1, 1, 250, 250, 819244),
(77, 1, 1, 250, 250, 670090),
(78, 1, 1, 250, 250, 771625),
(79, 1, 1, 250, 250, 254918),
(80, 3, 1, 700, 700, 105926),
(81, 1, 1, 250, 250, 161872),
(83, 4, 2, 700, 1400, 430227),
(84, 3, 1, 700, 700, 430227),
(85, 6, 1, 1000, 1000, 430227),
(86, 5, 1, 1000, 1000, 430227),
(87, 119, 1, 50, 50, 662800),
(88, 120, 1, 1100, 1100, 662800),
(89, 5, 3, 1000, 3000, 662800),
(90, 53, 1, 50, 50, 314697),
(91, 2, 1, 500, 500, 438142),
(93, 1, 1, 250, 250, 950056),
(94, 2, 1, 500, 500, 351269),
(108, 2, 1, 500, 500, 64),
(109, 1, 1, 250, 250, 38301),
(110, 6, 1, 1000, 1000, 38301),
(111, 3, 1, 700, 700, 38301),
(112, 9, 1, 1500, 1500, 38301),
(113, 1, 5, 250, 1250, 374239),
(114, 165, 2, 700, 1400, 374239),
(115, 170, 3, 1499, 4497, 374239),
(116, 171, 2, 1200, 2400, 374239),
(117, 172, 1, 999, 999, 374239),
(119, 1, 1, 250, 250, 64),
(120, 1, 1, 250, 250, 64),
(123, 1, 1, 250, 250, 64),
(124, 2, 1, 500, 500, 64),
(125, 1, 1, 250, 250, 64),
(126, 2, 1, 500, 500, 64),
(127, 165, 2, 700, 1400, 432707);

-- --------------------------------------------------------

--
-- Table structure for table `cata`
--

CREATE TABLE `cata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `itmnu` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cata`
--

INSERT INTO `cata` (`id`, `name`, `descr`, `itmnu`, `date`) VALUES
(1, 'Packages', 'Packages', 0, '2018-04-06 06:41:19'),
(2, 'Facial', 'Facial', 1, '2018-04-06 06:41:55'),
(3, 'Clean-Up', 'Clean-Up', 2, '2018-04-06 07:00:23'),
(4, 'Mani/Pedi', 'Mani/Pedi', 3, '2018-04-06 07:00:59'),
(5, 'Bleach (CHERYL\'s)', 'Bleach (CHERYL\'s)', 4, '2018-04-06 07:01:20'),
(6, 'Bleach (Oxy)', 'Bleach (Oxy)', 5, '2018-04-06 07:01:45'),
(7, 'Waxing (Honey)', 'Waxing (Honey)', 6, '2018-04-06 07:02:13'),
(8, 'Waxing (Chocolate)', 'Waxing (Chocolate)', 7, '2018-04-06 07:02:26'),
(9, 'Waxing (Milky)', 'Waxing (Milky)', 8, '2018-04-06 07:02:42'),
(10, 'Waxing (Rica)', 'Waxing (Rica)', 9, '2018-04-06 07:02:54'),
(11, 'Threading', 'Threading', 10, '2018-04-06 07:03:32'),
(12, 'Cut & Style', 'Cut & Style', 11, '2018-04-06 07:03:55'),
(13, 'Hair Spa', 'Hair Spa', 12, '2018-04-06 07:04:13'),
(14, 'Hair Color (Matrix)', 'Hair Color (Matrix)', 13, '2018-04-06 07:04:41'),
(15, 'Hair Color (L\'Oreal)', 'Hair Color (L\'Oreal)', 14, '2018-04-06 07:05:16'),
(16, 'Make-Up', 'Make-Up', 15, '2018-04-27 08:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(35, 'Chandigarh');

-- --------------------------------------------------------

--
-- Table structure for table `cityloc`
--

CREATE TABLE `cityloc` (
  `id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cityloc`
--

INSERT INTO `cityloc` (`id`, `city_name`, `name`) VALUES
(1, 'Chandigarh', 'Sector 1'),
(2, 'Chandigarh', 'Sector 2'),
(3, 'Chandigarh', 'Sector 3'),
(4, 'Chandigarh', 'Sector 4'),
(5, 'Chandigarh', 'Sector 5'),
(6, 'Chandigarh', 'Sector 6'),
(7, 'Chandigarh', 'Sector 7'),
(8, 'sirsa', 'Sector 7'),
(9, 'Chandigarh', 'Sector 8'),
(10, 'Chandigarh', 'Sector 9'),
(11, 'Chandigarh', 'Sector 10'),
(12, 'Chandigarh', 'Sector 11'),
(13, 'Chandigarh', 'Sector 12'),
(14, 'Chandigarh', 'Sector 14'),
(15, 'Chandigarh', 'Sector 15'),
(16, 'Chandigarh', 'Sector 16'),
(17, 'Chandigarh', 'Sector 17'),
(18, 'Chandigarh', 'Sector 18'),
(19, 'Chandigarh', 'Sector 19'),
(20, 'Chandigarh', 'Sector 20'),
(21, 'Chandigarh', 'Sector 21'),
(22, 'Chandigarh', 'Sector 22'),
(23, 'Chandigarh', 'Sector 23'),
(24, 'Chandigarh', 'Sector 24'),
(25, 'Chandigarh', 'Sector 25'),
(26, 'Chandigarh', 'Sector 26'),
(27, 'Chandigarh', 'Sector 27'),
(28, 'Chandigarh', 'Sector 28'),
(29, 'Chandigarh', 'Sector 29'),
(30, 'Chandigarh', 'Sector 30'),
(31, 'Chandigarh', 'Sector 31'),
(32, 'Chandigarh', 'Sector 32'),
(33, 'Chandigarh', 'Sector 33'),
(34, 'Chandigarh', 'Sector 34'),
(35, 'Chandigarh', 'Sector 35'),
(36, 'Chandigarh', 'Sector 36'),
(37, 'Chandigarh', 'Sector 37'),
(38, 'Chandigarh', 'Sector 38'),
(39, 'Chandigarh', 'Sector 38 West'),
(40, 'Chandigarh', 'Sector 39'),
(41, 'Chandigarh', 'Sector 40'),
(42, 'Chandigarh', 'Sector 41'),
(43, 'Chandigarh', 'Sector 42'),
(44, 'Chandigarh', 'Sector 43'),
(45, 'Chandigarh', 'Sector 44'),
(46, 'Chandigarh', 'Sector 45'),
(47, 'Chandigarh', 'Sector 46'),
(48, 'Chandigarh', 'Sector 47'),
(49, 'Chandigarh', 'Sector 48'),
(50, 'Chandigarh', 'Sector 49'),
(51, 'Chandigarh', 'Sector 50'),
(52, 'Chandigarh', 'Sector 51'),
(53, 'Chandigarh', 'Sector 52'),
(54, 'Chandigarh', 'Sector 53'),
(55, 'Chandigarh', 'Sector 54'),
(56, 'Chandigarh', 'Sector 55'),
(57, 'Chandigarh', 'Sector 56'),
(58, 'Chandigarh', 'Sector 61'),
(59, 'Chandigarh', 'Sector 63');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(11) NOT NULL,
  `name` char(250) DEFAULT NULL,
  `duration` varchar(50) NOT NULL,
  `price` int(250) NOT NULL,
  `details` mediumtext,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `name`, `duration`, `price`, `details`, `counter`) VALUES
(1, 'Personal', '1 Month', 10000, 'Unlimited Services', 50),
(2, 'Premium', '3 Month', 20000, 'Unlimited Services', 50),
(3, 'Platinum', '6 Month', 35000, 'Unlimited Services', 49);

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `id` int(11) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `pr` bigint(30) NOT NULL,
  `tpr` bigint(30) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `orderid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`id`, `pid`, `qty`, `pr`, `tpr`, `uid`, `orderid`) VALUES
(37, 3, 1, 700, 700, 80, 68971558),
(38, 6, 1, 1000, 1000, 80, 68971558),
(39, 4, 2, 700, 1400, 80, 68971558),
(40, 12, 1, 550, 550, 0, 95887380),
(41, 3, 1, 700, 700, 0, 95887380),
(42, 144, 1, 999, 999, 0, 95887380),
(43, 13, 1, 300, 300, 0, 95887380),
(44, 2, 1, 500, 500, 80, 86704978),
(45, 2, 1, 500, 500, 80, 27689037),
(46, 3, 2, 700, 1400, 80, 38356241),
(47, 3, 2, 700, 1400, 80, 66788550),
(48, 3, 1, 700, 700, 64, 58831273),
(49, 3, 1, 700, 700, 80, 77228499),
(50, 4, 2, 700, 1400, 80, 84201358),
(51, 7, 2, 1000, 2000, 80, 98939315),
(52, 5, 1, 1000, 1000, 80, 53388541);

-- --------------------------------------------------------

--
-- Table structure for table `order_payment`
--

CREATE TABLE `order_payment` (
  `id` int(11) NOT NULL,
  `amt` bigint(20) NOT NULL,
  `cgst` bigint(20) NOT NULL,
  `sgst` bigint(30) NOT NULL,
  `total` bigint(30) NOT NULL,
  `date_order` varchar(255) NOT NULL,
  `tran_no` varchar(255) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `orderid` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_payment`
--

INSERT INTO `order_payment` (`id`, `amt`, `cgst`, `sgst`, `total`, `date_order`, `tran_no`, `uid`, `orderid`, `status`) VALUES
(9, 3658, 329, 329, 4316, '2018-05-0309:00 am', '59219ca2c5ec231c7cfd', 80, 68971558, 'A'),
(10, 53, 5, 5, 62, '', 'b68d4dabe01b555bd325', 0, 95887380, 'P'),
(11, 590, 53, 53, 696, '2018-05-0509:00 am', '3639e0ccfe96a4a55d6e', 80, 86704978, 'A'),
(12, 590, 53, 53, 696, '2018-05-0509:00 am', '3639e0ccfe96a4a55d6e', 0, 77355606, 'P'),
(13, 590, 53, 53, 696, '2018-05-0509:00 am', '3639e0ccfe96a4a55d6e', 0, 36529555, 'P'),
(14, 590, 53, 53, 696, '2018-05-0509:00 am', 'f7461ace33a8882b2031', 80, 27689037, 'A'),
(15, 1652, 149, 149, 1949, '2018-05-0510:00 am', '113cd52397b8e3a7bb2c', 80, 38356241, 'A'),
(16, 1652, 149, 149, 1949, '2018-05-0613:30', '3afd29d274bd8ee24d7b', 80, 66788550, 'P'),
(17, 826, 74, 74, 975, '2018-05-0710:30', '60bc16248e3be2b6ecfb', 64, 58831273, 'P'),
(18, 20000, 1800, 1800, 23600, '', '2ea4fb4821af479474ac', 0, 82008699, 'P'),
(19, 743, 67, 67, 877, '2018-05-1415:30', '38f147d8655bfa59c0c0', 80, 77228499, 'P'),
(20, 1487, 134, 134, 1754, '2018-05-1414:15', 'ba4666e428e8b58fb5c9', 80, 84201358, 'P'),
(21, 1487, 134, 134, 1754, '2018-05-1414:15', 'ba4666e428e8b58fb5c9', 0, 69907546, 'P'),
(22, 2124, 191, 191, 2506, '2018-05-1412:30', '952aa9460a8193f15b83', 80, 98939315, 'P'),
(23, 2124, 191, 191, 2506, '2018-05-1412:30', '952aa9460a8193f15b83', 0, 43147649, 'P'),
(24, 1062, 0, 0, 0, '2018-05-159:15', '16f7525d9c47830ef656', 80, 53388541, 'P'),
(25, 1062, 81, 81, 1062, '2018-05-159:15', '16f7525d9c47830ef656', 0, 29707006, 'P'),
(26, 1062, 81, 81, 1062, '2018-05-159:15', '16f7525d9c47830ef656', 0, 27824203, 'P'),
(27, 1062, 81, 81, 1062, '2018-05-159:15', '16f7525d9c47830ef656', 0, 73261584, 'P'),
(28, 1062, 81, 81, 1062, '2018-05-159:15', '16f7525d9c47830ef656', 0, 73647144, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `refferal`
--

CREATE TABLE `refferal` (
  `user_reffering` int(11) DEFAULT NULL,
  `user_reffered` int(11) DEFAULT NULL,
  `date_joined` date NOT NULL,
  `reffering_points` int(100) NOT NULL,
  `reffered_points` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refferal`
--

INSERT INTO `refferal` (`user_reffering`, `user_reffered`, `date_joined`, `reffering_points`, `reffered_points`) VALUES
(55, 56, '2018-04-05', 100, 100),
(54, 57, '2018-04-06', 100, 100),
(54, 62, '2018-04-06', 100, 100),
(64, 65, '2018-04-13', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(44, 'Sunny', 'sunnyios777@gmail.com', '5f4dcb529f01eaa775b5dc5c48267bd7'),
(54, 'Sachin', 'kocharsachin034@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(55, 'Sachin', 'kocharsachin004@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(56, 'sourab', 'sourabhjindal1995@gmail.com', '5d41402abc4b2a76b9719d911017c592'),
(57, 'Sahil', 'sourabhjindal195@gmail.com', '8b1a9953c4611296a827abf8c47804d7'),
(58, 'sachin', 'sourabhjindal@gmail.com', '5d41402abc4b2a76b9719d911017c592'),
(61, 'Sourabh', 'sourabhjindal15@gmail.com', '0e27ad221c30ce0fe25b933c3a9a5d87'),
(62, 'Jaxit', 'godarajaxit@gmail.com', '5d41402abc4b2a76b9719d911017c592'),
(63, 'test', 'test@gmail.com', 'ceb6c970658f31504a901b89dcd3e461'),
(64, 'sourabh', 'sourabhjindal64@gmail.com', 'acce4cee964a485a3d2d847b31203991'),
(65, 'sourabh', 'sourabhjindal121@gmail.com', 'acce4cee964a485a3d2d847b31203991'),
(66, 'Sachin Kochar', 'kochsachin04@gmail.com', NULL),
(67, 'Sachin Kochar', 'kocharsachin@gmail.com', NULL),
(68, 'Sachin Kochar', 'kocharsan04@gmail.com', NULL),
(69, 'Sachin Kochar', 'kocharsacn04@gmail.com', NULL),
(70, 'Sahil Kumar', 'teteteetet', NULL),
(71, 'Sachin Kochar', 'kocchin04@gmail.com', NULL),
(72, 'Sachin Kochar', 'kocharsachin04@', NULL),
(73, 'Sachin Kochar', 'kocharsachin04@gmail.com', NULL),
(74, 'Sourabh Jindal', '', NULL),
(75, 'Abhimanyu', 'shacker888@gmail.com', NULL),
(76, 'GrapX Code', 'info.grapxcode@gmail.com', NULL),
(77, 'Jaxit Godara', 'jaxitgodara21@hotmail.com', NULL),
(78, 'test', 'lkj@qwedfg.com', 'ceb6c970658f31504a901b89dcd3e461'),
(79, 'test', 'gfddg@wer.com', 'ceb6c970658f31504a901b89dcd3e461'),
(80, 'Dharmveer', 'dbissu2@gmail.com', 'aed0de587f81fdfaab15660d3c72ea29'),
(81, 'Test', 'test@TEST.COM', '67c1cbb549407d754fe1894f74b40c3e'),
(82, 'Test', 'sachin@spineor.com', '67c1cbb549407d754fe1894f74b40c3e'),
(83, 'Akshay Maheshwari', 'akshayperiwal97@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_meta`
--

CREATE TABLE `users_meta` (
  `user_id` int(11) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `referral_code` varchar(20) NOT NULL,
  `points` int(100) NOT NULL,
  `pass_hash` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_meta`
--

INSERT INTO `users_meta` (`user_id`, `phone`, `address`, `referral_code`, `points`, `pass_hash`) VALUES
(44, NULL, 'Sirsa', 'JAX44SUN', 0, NULL),
(54, NULL, '121313', 'JAX54KOC', 0, NULL),
(55, NULL, '#148,Sirsa', 'JAX55KOC', 0, NULL),
(56, NULL, 'sirsa', 'JAX56SOU', 0, '$2y$10$ABz0FGOBkVc0amawn2/3UOOBUUUF.bIFV60WO56l4gxSU17EIZ.ZO'),
(57, '94162576265', 'sirsa', 'JAX57SOU', 0, NULL),
(58, '95155584544', 'sirsa', 'JAX58SOU', 0, NULL),
(61, '94162543543', 'sidjsi', 'JAX61SOU', 0, NULL),
(62, '82958544433', 'sirsa', 'JAX62GOD', 0, NULL),
(63, '1122334455', 'test', 'JAX63TES', 1000, NULL),
(64, '9416257626', 'sirsa', 'JAX64SOU', 0, NULL),
(65, '9416257625', 'sirsa', 'JAX65SOU', 1000, NULL),
(66, NULL, NULL, 'JAX66KOC', 1000, NULL),
(67, NULL, NULL, 'JAX67KOC', 1000, NULL),
(68, NULL, NULL, 'JAX68KOC', 1000, NULL),
(69, NULL, NULL, 'JAX69KOC', 1000, NULL),
(70, NULL, NULL, 'JAX70', 1000, NULL),
(71, NULL, NULL, 'JAX71KOC', 1000, NULL),
(72, NULL, NULL, 'JAX72KOC', 1000, NULL),
(73, '1234567890', 'qweqwe', 'JAX73KOC', 1000, '$2y$10$pnmxoSyl6mvfHSAm/uXjX.iW4gzC2e/9T.IZBcidV.C.8v5dayv1G'),
(74, NULL, NULL, 'JAX74', 1000, NULL),
(75, NULL, NULL, 'JAX75SHA', 1000, NULL),
(76, NULL, NULL, 'JAX76INF', 1000, NULL),
(77, NULL, NULL, 'JAX77JAX', 1000, NULL),
(78, '11109876543', 'stdd', 'JAX78LKJ', 1000, NULL),
(79, '1234563878', 'wertyu', 'JAX79GFD', 1000, NULL),
(80, '+91-92531-7', 'Sirsa', 'JAX80DBI', 1000, NULL),
(81, '91919199199', 'QWRT', 'JAX81TES', 1000, NULL),
(82, '34333123456', 'QE', 'JAX82SAC', 1000, NULL),
(83, NULL, NULL, 'JAX83AKS', 1000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_membership`
--

CREATE TABLE `user_membership` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `membership_id` int(11) NOT NULL,
  `paid` text NOT NULL,
  `date_joined` date NOT NULL,
  `expires_on` date NOT NULL,
  `transaction_id` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_membership`
--

INSERT INTO `user_membership` (`id`, `user_id`, `membership_id`, `paid`, `date_joined`, `expires_on`, `transaction_id`) VALUES
(9, 64, 2, '20000.0', '2018-05-13', '2018-08-12', '1356deaaa2f1958acc71'),
(10, 64, 3, '35000.0', '2018-05-13', '2018-08-13', 'a8083c5d0602167982fe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cata`
--
ALTER TABLE `cata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cityloc`
--
ALTER TABLE `cityloc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payment`
--
ALTER TABLE `order_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refferal`
--
ALTER TABLE `refferal`
  ADD KEY `user_reffering` (`user_reffering`) USING BTREE,
  ADD KEY `user_reffered` (`user_reffered`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_meta`
--
ALTER TABLE `users_meta`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `user_membership`
--
ALTER TABLE `user_membership`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `membership_id` (`membership_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `billing_address`
--
ALTER TABLE `billing_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `cata`
--
ALTER TABLE `cata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `cityloc`
--
ALTER TABLE `cityloc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `order_payment`
--
ALTER TABLE `order_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `users_meta`
--
ALTER TABLE `users_meta`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `user_membership`
--
ALTER TABLE `user_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `refferal`
--
ALTER TABLE `refferal`
  ADD CONSTRAINT `refferal_ibfk_1` FOREIGN KEY (`user_reffering`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `refferal_ibfk_2` FOREIGN KEY (`user_reffered`) REFERENCES `users` (`id`);

--
-- Constraints for table `users_meta`
--
ALTER TABLE `users_meta`
  ADD CONSTRAINT `users_meta_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
