-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2020 at 05:47 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcsoftware`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `role` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_time` varchar(555) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `role`, `name`, `user_id`, `pass`, `img`, `date_time`, `date`) VALUES
(1, 'admin', 'Rajendra Prasad Dansena', 'admin', '123', '', '', NULL),
(5, 'staff', 'Mam', 'mam', '123', NULL, 'Sep 17, 2020 17:46:12', '2020-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `tc_applyforjob`
--

CREATE TABLE `tc_applyforjob` (
  `id` int(11) NOT NULL,
  `name` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `msg` text COLLATE utf8mb4_general_ci NOT NULL,
  `picture` varchar(555) COLLATE utf8mb4_general_ci NOT NULL,
  `resume` varchar(555) COLLATE utf8mb4_general_ci NOT NULL,
  `date_time` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tc_applyforjob`
--

INSERT INTO `tc_applyforjob` (`id`, `name`, `email`, `mobile`, `msg`, `picture`, `resume`, `date_time`, `date`) VALUES
(3, 'Test user', 'test@gmail.com', '9770599878', 'Hi sir, I want to work in your organization please reply if you need developer.', '1600262954_7156cYVSDML._AC_UL320_.jpg', '1600262954_1600261771_Quotation.pdf', 'Sep 16, 2020 18:59:14', '2020-09-16'),
(4, 'Admin Panel\'s', 'fsdf@edgssd.fghgfh', '1234567899', ' &lt;script&gt;alert(\'hollp\');&lt;/script&gt;', '1600335612_apply1.jpg', '1600335612_SONU.pdf', 'Sep 17, 2020 15:10:12', '2020-09-17'),
(5, 'Admin Panel', 'fsdf@edgssd.fghgfh', '1234569877', 'esdfsdf\'fsfs f \'fggg\'g &lt;script&gt;', '1600339947_1600254273_team-viewer.png', '1600339947_one-plus.jpg', 'Sep 17, 2020 16:22:27', '2020-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `tc_banner`
--

CREATE TABLE `tc_banner` (
  `id` int(11) NOT NULL,
  `altname` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(555) COLLATE utf8mb4_general_ci NOT NULL,
  `date_time` varchar(555) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tc_banner`
--

INSERT INTO `tc_banner` (`id`, `altname`, `image`, `date_time`, `date`) VALUES
(1, 'lkh hh jkhh wjkehjhwjfwfkjhdsbfsdg ', '1600242169_3bd62d1a-402c-4bf2-9ff3-ba50d0301bf1.jpg', 'Sep 16, 2020 13:12:49', '2020-09-16'),
(3, 'TC SOft', '1600244568_app1.jpg', 'Sep 16, 2020 13:52:48', '2020-09-16'),
(4, 'TC SOft', '1600244620_slider2.jpg', 'Sep 16, 2020 13:53:40', '2020-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `tc_contact`
--

CREATE TABLE `tc_contact` (
  `id` int(11) NOT NULL,
  `email` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_time` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tc_contact`
--

INSERT INTO `tc_contact` (`id`, `email`, `mobile`, `phone`, `address`, `logo`, `date_time`, `date`) VALUES
(4, 'tcsoft17@gmail.com', '7987279870', '07752402910', 'First Floor Tiwari Complex, Near Shiv Talkies Chowk Bilaspur (C.G)', '1600338863_logo.png', 'Sep 17, 2020 16:13:28', '2020-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `tc_customer`
--

CREATE TABLE `tc_customer` (
  `id` int(11) NOT NULL,
  `login_id` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mob1` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mob2` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `remark` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `reminder` date NOT NULL,
  `date_time` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tc_customer`
--

INSERT INTO `tc_customer` (`id`, `login_id`, `name`, `mob1`, `mob2`, `address`, `remark`, `reminder`, `date_time`, `date`) VALUES
(1, '', 'Admin Panel', '7777777777', '43663', 'gsdgds', 'ds', '2020-09-30', 'Sep 17, 2020 18:29:20', '2020-09-17'),
(3, '', 'aaaaaaa', '77777', '8888888', 'fdfd', 'dhfd', '2020-10-02', 'Sep 17, 2020 18:47:00', '2020-09-17'),
(4, '5', 'test', '1233455', '222222', 'ioioipo h gf ghgbhghg', 'h hjkhljkhjkdhlkjhejkbhg', '2020-10-06', 'Sep 18, 2020 11:06:44', '2020-09-18'),
(5, '5', 'Admin Panel', '98988', '9898', 'hkjhk', 'jhkjh', '2020-10-08', 'Sep 18, 2020 11:07:20', '2020-09-18'),
(6, '5', 'yuuy', '878778', '8787', 'hjh', 'uhj', '2020-10-06', 'Sep 18, 2020 11:08:24', '2020-09-18'),
(7, '5', 'Rajesh Verma', '897', '07708', 'hghg', 'hu', '2020-10-09', 'Sep 18, 2020 11:13:49', '2020-09-18'),
(8, '1', 'pppp', '00000', '000', 'hghhg', 'kh', '2020-10-05', 'Sep 18, 2020 11:14:30', '2020-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `tc_news`
--

CREATE TABLE `tc_news` (
  `id` int(11) NOT NULL,
  `tc_news` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_time` varchar(555) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tc_news`
--

INSERT INTO `tc_news` (`id`, `tc_news`, `date_time`, `date`) VALUES
(2, 'One Pro ( GST Billing Software )', 'Sep 16, 2020 11:19:08', '2020-09-16'),
(3, 'Website Development Only Rs. 10,000', 'Sep 16, 2020 13:48:08', '2020-09-16'),
(4, 'TC Software Provide Management Tools.', 'Sep 16, 2020 13:49:13', '2020-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `tc_product`
--

CREATE TABLE `tc_product` (
  `id` int(11) NOT NULL,
  `title` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(555) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_time` varchar(333) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tc_product`
--

INSERT INTO `tc_product` (`id`, `title`, `link`, `image`, `description`, `date_time`, `date`) VALUES
(3, 'One Plus', 'http://myerpsoftware.com/updates/OnePlus_Setup.exe', '1600252795_one-plus.png', 'India\'s First GST Ready Business ERP Software for Supermarkets, Mobile Shops / Computers / Electronics / FMCG Dealers, Retailers / Wholesalers / Manufacturers etc.', 'Sep 16, 2020 16:09:55', '2020-09-16'),
(4, 'TC Web Application', 'http://localhost/tcsoftware/product/039bf097-2520-44fb-8bcc-ccaa537d33d7.jpg', '1600252885_app.png', 'Now See your Outstanding & Ledger on Single click in your Mobile', 'Sep 16, 2020 16:11:25', '2020-09-16'),
(5, 'weer', 'rew', '1600253515_book.png', 'rewrwe  sid\'s. kh lhgh g', 'Sep 16, 2020 16:21:55', '2020-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `tc_reseller`
--

CREATE TABLE `tc_reseller` (
  `id` int(11) NOT NULL,
  `name` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `msg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_time` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tc_reseller`
--

INSERT INTO `tc_reseller` (`id`, `name`, `email`, `mobile`, `msg`, `date_time`, `date`) VALUES
(1, 'drtgdrgggg', 'fsdf@edgssd.fghgfhds', '4353454354636', 'dfsgdgdfgdf', 'Sep 17, 2020 13:38:36', '2020-09-17'),
(4, 'Admin Panelgggg', 'fsdf@edgssd.fghgfh', '9874563214', 'dfh', 'Sep 17, 2020 13:44:41', '2020-09-17'),
(5, 'Admin Panelgggg', 'fsdf@edgssd.fghgfh', '1234567891', 'stttttttttttttttttttttt', 'Sep 17, 2020 13:51:32', '2020-09-17'),
(6, 'Admin Panelgggg', 'fsdf@edgssd.fghgfh', '1234567899', 'sdfsdffgdggrds g dfhhdh h', 'Sep 17, 2020 14:48:45', '2020-09-17'),
(8, 'Admin Panelgggg', 'fsdf@edgssd.fghgfh', '1234567899', '$msg = test description.. &lt;script&gt;alert(\'hi\');&lt;/script&gt;', 'Sep 17, 2020 14:57:23', '2020-09-17'),
(10, 'Admin Panel', 'fsdf@edgssd.fghgfh', '1234568977', 'bhjkh', 'Sep 17, 2020 15:03:34', '2020-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `tc_services`
--

CREATE TABLE `tc_services` (
  `id` int(11) NOT NULL,
  `title` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_time` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tc_services`
--

INSERT INTO `tc_services` (`id`, `title`, `image`, `description`, `date_time`, `date`) VALUES
(1, 'Web Development', '1600328486_web-development.png', 'When there is limitations of varied solutions confronted by customers, we offer custom website development option. We have extensive experience in developing unique websites of all types, budgets and complexities. Our approach is to get down to basics and work out what the requirements of the clients are. We create the websites from the ground up, utilizing the standard development frameworks to ensure we provide a sustainable tailored solution to your requirements.', 'Sep 17, 2020 13:12:12', '2020-09-17'),
(2, 'Software Development', '1600328421_software-development.png', 'We are top-rated web design company which helps you in propelling your business to greater heights in today’s world. We take pride in delivering high-quality and robust websites to our clients and guarantee to provide a respectable and commendable business space. ', 'Sep 17, 2020 13:10:21', '2020-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `tc_support`
--

CREATE TABLE `tc_support` (
  `id` int(11) NOT NULL,
  `title` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_time` varchar(333) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tc_support`
--

INSERT INTO `tc_support` (`id`, `title`, `link`, `image`, `date_time`, `date`) VALUES
(1, 'Team Viewer', 'http://myerpsoftware.com/updates/OnePlus_Setup.exe', '1600254273_team-viewer.png', 'Sep 16, 2020 16:34:33', '2020-09-16'),
(2, 'TC Support', 'http://myerpsoftware.com/updates/OnePlus_Setup.exe	', '1600254243_support.png', 'Sep 16, 2020 16:34:03', '2020-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `tc_tutorial`
--

CREATE TABLE `tc_tutorial` (
  `id` int(11) NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_time` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tc_tutorial`
--

INSERT INTO `tc_tutorial` (`id`, `link`, `date_time`, `date`) VALUES
(2, 'https://www.youtube.com/embed/wkjogafmQrI', 'Sep 17, 2020 13:25:36', '2020-09-17'),
(3, 'https://www.youtube.com/embed/tgbNymZ7vqY', 'Sep 17, 2020 13:22:44', '2020-09-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_applyforjob`
--
ALTER TABLE `tc_applyforjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_banner`
--
ALTER TABLE `tc_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_contact`
--
ALTER TABLE `tc_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_customer`
--
ALTER TABLE `tc_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_news`
--
ALTER TABLE `tc_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_product`
--
ALTER TABLE `tc_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_reseller`
--
ALTER TABLE `tc_reseller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_services`
--
ALTER TABLE `tc_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_support`
--
ALTER TABLE `tc_support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc_tutorial`
--
ALTER TABLE `tc_tutorial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tc_applyforjob`
--
ALTER TABLE `tc_applyforjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tc_banner`
--
ALTER TABLE `tc_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tc_contact`
--
ALTER TABLE `tc_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tc_customer`
--
ALTER TABLE `tc_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tc_news`
--
ALTER TABLE `tc_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tc_product`
--
ALTER TABLE `tc_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tc_reseller`
--
ALTER TABLE `tc_reseller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tc_services`
--
ALTER TABLE `tc_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tc_support`
--
ALTER TABLE `tc_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tc_tutorial`
--
ALTER TABLE `tc_tutorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
