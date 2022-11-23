-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2022 at 06:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kufa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `Address` varchar(150) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL,
  `profile_pic` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_520_ci NOT NULL DEFAULT 'demo.jpg',
  `facebook` varchar(200) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL,
  `twitter` varchar(200) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL,
  `instagram` varchar(200) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL,
  `linkedin` varchar(200) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `Address`, `phone_number`, `profile_pic`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
(58, 'Florence Dyer', 'gogutylyn@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'Magnam possimus ame', '+1 (642) 271-9138', '58.jpg', 'https://www.qyvimotak.mobi', 'https://www.nyjohuvyto.ws', 'https://www.xowuvofiqiciw.cm', 'https://www.buzo.com'),
(59, 'Jykufydo', 'binyro@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL),
(60, 'Adoviz', 'qybod@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL),
(61, 'Qarywuhuco', 'kefawimu@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', '61.jpg', NULL, NULL, NULL, NULL),
(62, 'Duqobyxa', 'calafuqesy@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', '62.jpg', NULL, NULL, NULL, NULL),
(63, 'Polytyj', 'hejavi@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL),
(64, 'Sebibide', 'qurik@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL),
(65, 'Ahurysymufy', 'nyxiwyjo@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL),
(66, 'Ssukun', 'didutazul@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL),
(67, 'Wnofufof', 'gazyqunada@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '', '', '67.jfif', NULL, NULL, NULL, NULL),
(68, 'Lusysucu', 'jakeci@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL),
(69, 'Kiqobonyc', 'cyneno@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL),
(70, 'Businotemo', 'bigar@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL),
(71, 'Aybonofub', 'mewysarox@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL),
(72, 'Alozaw', 'carexu@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, 'demo.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int NOT NULL,
  `Name` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `Credit` text COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `Year` int NOT NULL,
  `Status` varchar(1000) COLLATE utf8mb3_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `Name`, `Credit`, `Year`, `Status`) VALUES
(1, 'Arsenio Foley', '27', 1991, 'inactive'),
(3, 'Eric Gaines', '17', 2008, 'active'),
(4, 'Seth Potts', '55', 2004, 'active'),
(5, 'Hanna Burke', '73', 2019, 'active'),
(6, 'Peter Cannon', '1', 1981, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `message` varchar(10000) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `name`, `email`, `message`) VALUES
(1, 'Xenos Levy', 'xuxeqyhoh@mailinator.com', 'Nulla nulla ad conse'),
(2, 'Anastasia Justice', 'lujugopami@mailinator.com', 'Consectetur doloremq'),
(3, 'Meghan Dodson', 'reazulislam704@gmail.com', 'Reprehenderit exerc'),
(4, 'Chanda Cabrera', 'Reazulislam704@gmail.com', 'Sit voluptate except'),
(5, 'Chanda Cabrera', 'Reazulislam704@gmail.com', 'Sit voluptate except'),
(6, 'Yael Sanchez', 'reazulislam704@gmail.com', 'Molestias exercitati'),
(7, 'Yael Sanchez', 'reazulislam704@gmail.com', 'Molestias exercitati'),
(8, 'Fletcher Olson', 'reazulislam704@gmail.com', 'Repudiandae odio con'),
(9, 'Glenna Church', 'reazulislam704@gmail.com', 'Ipsum quisquam moles');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `service_title` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `service_icon` varchar(50) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `service_description` text COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `service_status` varchar(10) COLLATE utf8mb3_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_icon`, `service_description`, `service_status`) VALUES
(16, 'Mollit corrupti por', 'fa fa-battery ', 'Elit tempore sed v', 'active'),
(17, 'Suscipit enim volupt', 'fa fa-adjust ', 'Minima sed ut corpor', 'active'),
(18, 'Cupiditate necessita', 'fa fa-battery-3 ', 'Qui sint culpa sint', 'active'),
(19, 'Elit quia voluptate', 'fa fa-birthday-cake ', 'Ut aut eos neque no', 'active'),
(20, 'Dolorem in eos et la', 'fa fa-bicycle ', 'Porro et voluptas sa', 'inactive'),
(21, 'Cupiditate necessita', 'fa fa-battery-3 ', 'Qui sint culpa sint', 'active'),
(29, 'Eveniet quia quibus', 'fa fa-adn ', 'Atque aute qui et ni', 'active'),
(30, 'Quas facilis sint pr', 'fa fa-align-left ', 'Aut aspernatur dolor', 'inactive'),
(31, 'Eos officiis quas mo', 'fa fa-arrow-up ', 'Eius vel ut et numqu', 'active'),
(32, 'Sunt distinctio Tot', 'fa fa-ambulance ', 'Dolore molestiae ill', 'inactive'),
(33, 'Qui sint lorem et h', 'fa fa-bath ', 'Laboriosam veniam ', 'active'),
(34, 'Commodi excepturi ve', 'fa fa-arrow-circle-up ', 'Aut dicta deserunt l', 'inactive'),
(35, 'Laborum suscipit dol', 'fa fa-address-card-o ', 'Vel cum aliquid non ', 'inactive'),
(36, 'Ipsa error placeat', 'fa fa-american-sign-language-interpreting ', 'Nihil quis enim aute', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int NOT NULL,
  `work_title` varchar(200) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `work_heading` varchar(200) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `work_descaription` text COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `work_status` varchar(200) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `work_image` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `work_title`, `work_heading`, `work_descaription`, `work_status`, `work_image`) VALUES
(3, 'Cillum eos sed volu', 'Est aliquip obcaecat', 'Irure architecto et ', 'active ', '58_1668813730.jpg'),
(4, 'Reprehenderit magna', 'Nulla repellendus A', 'Eum commodo fugiat d', 'active', '62_1668863783.jpg'),
(6, 'Incididunt quasi con', 'Pariatur Pariatur ', 'Molestiae incididunt', 'inactive ', '65_1668936017.jpg'),
(7, 'Ea sint dolor odio ', 'Nulla possimus obca', 'Quo aspernatur ex it', 'active ', '65_1668936084.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
