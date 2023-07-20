-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 09:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tire_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(12) NOT NULL,
  `brand_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Michelin'),
(2, 'Dunlop'),
(3, 'Pirelli'),
(4, 'Continetal'),
(5, 'Goodyear'),
(6, 'Cooper');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(12) NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'All seassons'),
(2, 'Winter'),
(3, 'Summer');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `message_id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_text` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`message_id`, `first_name`, `last_name`, `email`, `message_text`, `message_date`) VALUES
(1, 'Ignjat', 'Koicki', 'ignjat@gmail.com', 'first test description', '2022-02-23 21:20:38'),
(2, 'Ignjat', 'Koicki', 'ignjat@gmail.com', 'asffsafsafsa', '2022-02-26 17:10:57'),
(3, 'Ignjat', 'Koicki', 'ignjat@gmail.com', 'Probna poruka', '2022-03-06 17:57:34'),
(4, 'Jovan', 'Peric', 'jovan@gmail.com', 'Probna poruka 2', '2022-03-06 17:58:28'),
(5, 'Ignjat', 'Koicki', 'ignjat@gmail.com', 'assasaffsafsafsafsafsa', '2022-03-06 18:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `home_section`
--

CREATE TABLE `home_section` (
  `id` int(12) NOT NULL,
  `name` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `src` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `order_one` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `order_two` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `background_color` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_section`
--

INSERT INTO `home_section` (`id`, `name`, `src`, `description`, `order_one`, `order_two`, `background_color`) VALUES
(1, 'Continetal', 'brand-continetal.jpg', 'Founded in 1871, Continental is a multinational company which manufactures safe, efficient, and performance-oriented tires for passenger cars, commercial vehicles, and two-wheelers. We are one of the foremost leaders in tire technology and tire production, with a broad product range suitable for use in a variety of conditions and applications. And through continuous investment in research and development, Continental makes a significant contribution to mobility that\'s secure, cost-effective, and ecologically friendly.', 'order-1 justify-content-start', 'order-2', 'ik-bg-black'),
(2, 'Cooper', 'brand-cooper.png', 'Cooper Tire & Rubber Company is the parent company of a global family of companies that specializes in the design, manufacture, marketing, and sale of passenger cars, light trucks, medium trucks, motorcycles, and racing tires. It focuses on the manufacture and sale of passenger and light truck replacement tires. Cooper\'s headquarters is in Findlay, Ohio, with manufacturing, sales, distribution, technical and design operations within its family of companies located in more than one dozen countries around the world. As of 2019, the company has 9,027 employees and a revenue of $2,753 million.', 'order-2 justify-content-end', 'order-1', 'ik-bg-white'),
(3, 'Dunlop', 'brand-dunlop.png', 'From its very beginnings it is obvious what Dunlop set out to do, to deliver a better driving experience for drivers and a better riding experience for riders.', 'order-1 justify-content-start', 'order-2', 'ik-bg-black'),
(4, 'Good Year', 'brand-good-year.png', 'he Goodyear Tire & Rubber Company is an American multinational tire manufacturing company founded in 1898 by Frank Seiberling and based in Akron, Ohio.', 'order-2 justify-content-end', 'order-1', 'ik-bg-white'),
(5, 'Michelin', 'brand-michelin.jpg', 'Michelin, the leading mobility company, is dedicated to enhancing its customers\' mobility, and sustainably; designing and distributing the most innovative tires, services and solutions for its customers\' needs; providing digital services, maps and guides to help enrich trips and travels and make them unique experiences.', 'order-1 justify-content-start', 'order-2', 'ik-bg-black'),
(6, 'Pirelli', 'brand-pirelli.png', 'Founded in Milan in 1872, today Pirelli stands as a global brand known for its cutting edge technology, high-end production excellence and passion for innovation that draws heavily on its Italian roots.', 'order-2 justify-content-end', 'order-1', 'ik-bg-white');

-- --------------------------------------------------------

--
-- Table structure for table `ik_cart`
--

CREATE TABLE `ik_cart` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ik_cart`
--

INSERT INTO `ik_cart` (`id`, `prod_id`, `user_id`, `quantity`) VALUES
(1, 2, 5, 1),
(2, 7, 5, 1),
(3, 5, 5, 1),
(4, 3, 5, 1),
(5, 2, 5, 1),
(6, 7, 5, 1),
(7, 5, 5, 1),
(8, 3, 5, 1),
(9, 2, 5, 1),
(10, 7, 5, 1),
(11, 5, 5, 1),
(12, 3, 5, 1),
(13, 2, 5, 1),
(14, 7, 5, 1),
(15, 5, 5, 1),
(16, 3, 5, 1),
(17, 2, 5, 1),
(18, 7, 5, 1),
(19, 5, 5, 1),
(20, 3, 5, 1),
(21, 2, 5, 1),
(22, 7, 5, 1),
(23, 5, 5, 1),
(24, 3, 5, 1),
(25, 2, 5, 1),
(26, 7, 5, 1),
(27, 5, 5, 1),
(28, 3, 5, 1),
(29, 2, 5, 1),
(30, 7, 5, 1),
(31, 5, 5, 1),
(32, 3, 5, 1),
(33, 2, 5, 1),
(34, 7, 5, 1),
(35, 5, 5, 1),
(36, 3, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `nav_id` int(12) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`nav_id`, `name`, `href`) VALUES
(1, 'Home', 'index.php'),
(2, 'Shop', 'shop.php'),
(3, 'About Us', 'aboutus.php'),
(4, 'Contact', 'contact.php'),
(5, 'Author', 'author.php');

-- --------------------------------------------------------

--
-- Table structure for table `poll_choices`
--

CREATE TABLE `poll_choices` (
  `choice_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poll_choices`
--

INSERT INTO `poll_choices` (`choice_id`, `name`, `question_id`) VALUES
(9, 'Yes', 3),
(10, 'No', 3),
(11, 'Michelin', 4),
(12, 'Dunlop', 4),
(13, 'Pirelli', 4);

-- --------------------------------------------------------

--
-- Table structure for table `poll_questions`
--

CREATE TABLE `poll_questions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poll_questions`
--

INSERT INTO `poll_questions` (`id`, `name`) VALUES
(3, 'Do you like our website?'),
(4, 'What brand do you like the most?');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(12) NOT NULL,
  `prod_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price_new` decimal(10,2) DEFAULT NULL,
  `prod_price_old` decimal(10,2) NOT NULL,
  `prod_image_href` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_img_alt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(12) DEFAULT NULL,
  `size_id` int(12) DEFAULT NULL,
  `brand_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_description`, `prod_price_new`, `prod_price_old`, `prod_image_href`, `prod_img_alt`, `category_id`, `size_id`, `brand_id`) VALUES
(2, 'Pilot Sport Cup2', 'Initially developed as Original Equipment on super sports vehicles like the Ferrari 458 Speciale and Porsche 918 Spyder.', '130.00', '150.00', 'assets/img/michelin-pilot-sport-cup-2-tire.webp', 'Michelin pilot sport Tire', 3, 2, 1),
(3, 'X-Ice Snow', 'Improved hydroplaning and slush performance Outstanding traction on snow and ice Flex-ice™ 2.0 tread compound maintains flexibility in severe cold conditions Reduced rolling resistance improves fuel economy Outstanding traction on snow.', '176.00', '200.00', 'assets/img/michelin-x-Ice-snow-tire.webp', 'Michelin X Ice Snow Tire', 2, 3, 1),
(5, 'Cross Contact LX Spt', 'Outstanding handling and acceleration Low rolling resistance for greater fuel efficiency Enhanced wet-road traction.', '130.00', '164.00', 'assets/img/continental-crosscontact-lx-sport-tire.webp', 'Continetal Cross Contact LX Spt', 3, 5, 4),
(6, 'Terrain Contact AT', 'The advanced silica tread compound lowers rolling resistance and increases fuel efficiency, while shoulder groove geometry and interlocking tread sipes combine forces to deliver dependable steering and cornering.', '200.00', '220.00', 'assets/img/continental-terrain-contact-at-tire.webp', 'Continetal Terrain Contact AT tire', 2, 1, 4),
(7, 'SP Sport Maxx RT2', 'Responsive handling High speed grip and stability Improved handling on wet and dry surfaces Decreased rolling resistance.', '130.49', '169.99', 'assets/img/dunlop-sportmaxx-rt2-tire.webp', 'Dunlop Sport Maxx RT2 Tire', 1, 2, 2),
(8, 'Signature HP', 'Helps Maintain The Tire\'s Shape And Enables Smooth Performance At Highway Speeds Reduced road noise Winter handling.', '199.99', '220.00', 'assets/img/dunlop-signature-hp-tire.webp', 'Dunlop Signature-HP Tire', 2, 2, 2),
(9, 'Sport Maxx RT', 'Power braking blocks allow for shorter stops, while the low-weight construction decreases rolling resistance for better performance The Sport Maxx RT features an adaptive tread compound that helps enhance racing grip and boost braking performance.', '186.99', '200.00', 'assets/img/dunlop-sp-sport-maxx-rt-ro1-tire.webp', 'Dunlop SP Sort Maxx RT', 3, 3, 2),
(10, 'Discoverer STT Pro', 'Generates A Designed Flex Point In The Tire This Ability To Flex In A Predetermined Location Provides A Smoother Ride By Helping To Dampen The Impact Generated By Inconsistencies In Pavement, Potholes And Gravel In Tough Off-Road Situations Where Tires Are Sometimes Aired Down.', '239.99', '299.99', 'assets/img/cooper-discoverer-stt-pro-tire.webp', 'Cooper Discoverer STT Pro Tire', 1, 4, 6),
(11, 'Zeon RS3S', '20,000 Mile Treadwear Protection Free 45-Day Road Test.', '149.99', '179.99', 'assets/img/cooper-zeon-rs3-5-tire.webp', 'Dunlop Zeon RS3S Tire', 3, 5, 6),
(12, 'Discoverer AT3 XLT', 'Powerful off-road grip for boulder crawling Excellent wet-road braking Dependable mud handling Prevents stone drilling.', '186.99', '219.99', 'assets/img/cooper-discoverer-at3-xlt-tire.webp', 'Cooper Discoverer AT3 XLT Tire', 2, 1, 6),
(13, 'Eagle F1 Asymmetric 3 ROF', 'Increased road contact for outstanding grip Quick steering response Tuned for ultra-high performance suspension systems.', '129.99', '141.99', 'assets/img/goodyear-eagle-f1-asymmetric3-rof--tire.webp', 'GoodYear Eagle F1 Asymmetric 3 ROF Tire', 3, 3, 5),
(14, 'Assurance Fuel Max', 'The center rib gives road stability, even tread wear and traction in snowy conditions Strong shoulder blocks enhance handling in dry conditions.', '119.99', '139.99', 'assets/img/goodyear-assurance-fuel-max-tire.webp', 'GoodYear Assurance Fuel Max Tire', 1, 4, 5),
(15, 'Eagle F1 SuperCar 3R', 'Confident traction when cornering at high speeds Sporty, reliable driving experience for enthusiasts Reliable racing grip and stability, lap after lap Precise steering and handling on the track.', '260.99', '299.99', 'assets/img/goodyear-eagle-f1-supercar-3r-tire.webp', 'GoodYear Eagle F1 SuperCar 3R Tire', 2, 5, 5),
(17, 'Scorpion Zero Asym', 'Pirelli combined the best of their legendary P-Zero, ultra-high performance tires with the Scorpion line of versatile SUV tires to create this tire that does it all Asymmetric Tread Design With Z Profile Improves Traction And Braking Safety On All Surfaces Continuous Longitudinal Block Profiles And Compact Shoulder Blocks Provide Stability And Tread Pattern Stiffness For Precise Performance And Control Continuous Central Rib Provides Even Treadwear For Prolonged Tire Life And Reduced Noise Great Option For Changeover And Cosmetic Tuning All-season compound and deep grooves give excellent wet and dry traction.', '199.99', '221.99', 'assets/img/pirelli-scorpionzero-tire.webp', 'Pirelli Scorpion Zero Asym Tire', 2, 2, 3),
(18, 'P ZERO Nero GT', 'Materials And Tread Design Have Been Optimized, Introducing The Latest Technological Developments The New Compound Has A Balanced Content Of Silica In Order To Enhance Wear Resistance Without Compromising The Sportive Feeling Of The Product In Both Dry A High Technology Profile Structure Provides Even Footprint And Pressure Distribution For Efficient Braking In Wet And Dry Conditions.', '109.99', '129.99', 'assets/img/pirelli-pzero-nero-gt-tire.webp', 'Pirelli P ZERO Nero GT Tire', 3, 3, 3),
(20, 'Scorpion Verde', 'Promotes even tread wear for long tire life. Delivers reliable traction and improves fuel economy Increases control and handling in wet weather. Improves on-road stability for SUVs.', '140.00', '199.00', 'assets/img/pirelli-pzero-tire.webp', 'Scorpion Verde pirrelli tire', 3, 3, 3),
(24, 'Algis 3', 'Promotes even tread wear for long tire life. Delivers reliable traction and improves fuel economy Increases control and handling in wet weather. Improves on-road stability for SUVs.', '130.49', '169.99', 'assets/img/michelin_agilis-3.webp', 'Michelin Agilis 3 Tire', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(12) NOT NULL,
  `role_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(12) NOT NULL,
  `size_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`size_id`, `size_name`) VALUES
(1, '18'),
(2, '19'),
(3, '20'),
(4, '21'),
(5, '22');

-- --------------------------------------------------------

--
-- Table structure for table `sort`
--

CREATE TABLE `sort` (
  `sort_id` int(12) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(50) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sort`
--

INSERT INTO `sort` (`sort_id`, `name`, `value`) VALUES
(1, 'Low to high', 'priceAsc'),
(2, 'High to low', 'priceDesc'),
(3, 'From A to Z', 'letterAsc'),
(4, 'From Z to A', 'letterDesc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `adress`, `email`, `created_date`, `role_id`) VALUES
(1, 'ignjat9977', '8c4ca1ba3cd979670190bbe6776b0552', 'Ignjat', 'Kociki', 'Nede Spasojevic 14', 'ignjat@gmail.com', '2022-03-06 17:24:03', 1),
(3, 'jovan99', '25f9e794323b453885f5181f1b624d0b', 'Jovan', 'Jovanovic', 'Kneza Milosa 12', 'jovan@gmail.com', '2022-03-06 17:34:00', 2),
(5, 'admin', '25d55ad283aa400af464c76d713c07ad', 'Ignjatije', 'Koicki', 'Nede Spasojevic 14', 'ignjat9977@gmail.com', '2022-03-06 18:45:31', 1),
(6, 'pera', '121ddb8c34bbdae223bfc474c86ea90c', 'Petar', 'Petrovic', 'Pere Perica 12', 'petar@gmail.com', '2022-03-06 18:49:27', 2),
(16, 'peraaa11', '25d55ad283aa400af464c76d713c07ad', 'Petar', 'Petrovic', 'Nede Spasojevic 14', 'petarpetrovic@gmail.com', '2022-03-08 18:10:57', 2),
(18, 'ignjat98', '25d55ad283aa400af464c76d713c07ad', 'Ignjat', 'Koicki', 'Nede Spasojevic 14', 'ignjat.koicki.220.21@ict.edu.rs', '2022-03-11 18:01:28', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_poll`
--

CREATE TABLE `user_poll` (
  `id` int(11) NOT NULL,
  `choice_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_poll`
--

INSERT INTO `user_poll` (`id`, `choice_id`, `user_id`) VALUES
(1, 12, 5),
(2, 9, 5),
(3, 11, 1),
(4, 9, 1),
(5, 10, 3),
(6, 12, 3),
(7, 13, 6),
(8, 9, 6),
(9, 11, 16),
(10, 9, 16),
(13, 9, 18),
(14, 11, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `home_section`
--
ALTER TABLE `home_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ik_cart`
--
ALTER TABLE `ik_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `poll_choices`
--
ALTER TABLE `poll_choices`
  ADD PRIMARY KEY (`choice_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `poll_questions`
--
ALTER TABLE `poll_questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `sort`
--
ALTER TABLE `sort`
  ADD PRIMARY KEY (`sort_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_poll`
--
ALTER TABLE `user_poll`
  ADD PRIMARY KEY (`id`),
  ADD KEY `choice_id` (`choice_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_section`
--
ALTER TABLE `home_section`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ik_cart`
--
ALTER TABLE `ik_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `nav_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `poll_choices`
--
ALTER TABLE `poll_choices`
  MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `poll_questions`
--
ALTER TABLE `poll_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sort`
--
ALTER TABLE `sort`
  MODIFY `sort_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_poll`
--
ALTER TABLE `user_poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ik_cart`
--
ALTER TABLE `ik_cart`
  ADD CONSTRAINT `ik_cart_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`),
  ADD CONSTRAINT `ik_cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `poll_choices`
--
ALTER TABLE `poll_choices`
  ADD CONSTRAINT `poll_choices_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `poll_questions` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`size_id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `user_poll`
--
ALTER TABLE `user_poll`
  ADD CONSTRAINT `user_poll_ibfk_1` FOREIGN KEY (`choice_id`) REFERENCES `poll_choices` (`choice_id`),
  ADD CONSTRAINT `user_poll_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
