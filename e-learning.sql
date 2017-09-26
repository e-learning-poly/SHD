-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2017 at 07:28 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `_authors`
--

CREATE TABLE `_authors` (
  `id_authors` int(11) NOT NULL,
  `author_username` varchar(30) NOT NULL,
  `author_password` text NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `author_age` int(11) NOT NULL,
  `author_token` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `author_information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_categories`
--

CREATE TABLE `_categories` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_quantity` int(11) NOT NULL,
  `category_classify` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_courses`
--

CREATE TABLE `_courses` (
  `id_courses` int(11) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_gallery` text NOT NULL,
  `course_describe` int(11) NOT NULL,
  `course_slug` int(11) NOT NULL,
  `course_token` varchar(30) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `course_start_day` date NOT NULL,
  `course_end_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_coursesdetails`
--

CREATE TABLE `_coursesdetails` (
  `id_details` int(11) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_describ` text NOT NULL,
  `course_comment` text NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_slug` varchar(30) NOT NULL,
  `course_status` int(1) NOT NULL COMMENT '0=nonactive, 1=active',
  `course_date_active` varchar(10) NOT NULL,
  `id_rank` int(11) NOT NULL,
  `id_courses` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_orders`
--

CREATE TABLE `_orders` (
  `id_orders` int(11) NOT NULL,
  `id_details` int(11) NOT NULL,
  `id_courses` int(11) NOT NULL,
  `orders_name` varchar(30) NOT NULL,
  `orders_quantity` int(11) NOT NULL,
  `orders_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_rankcourses`
--

CREATE TABLE `_rankcourses` (
  `id_rank` int(11) NOT NULL,
  `rank_rate` int(11) NOT NULL,
  `rank_wishlist` int(11) NOT NULL,
  `rank_commnent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `_users`
--

CREATE TABLE `_users` (
  `id_user` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_address` text,
  `user_phone` varchar(10) NOT NULL,
  `user_password` text NOT NULL,
  `user_token` varchar(30) NOT NULL,
  `user_active` int(1) NOT NULL COMMENT '0=nonactive, 1=active',
  `user_role` int(1) NOT NULL COMMENT '0=admin, 1=user',
  `user_date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_users`
--

INSERT INTO `_users` (`id_user`, `user_email`, `user_name`, `user_address`, `user_phone`, `user_password`, `user_token`, `user_active`, `user_role`, `user_date_created`, `user_date_modified`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin street, HCM city', '0911795505', '21232f297a57a5a743894a0e4a801fc3', '123456789', 0, 0, '2017-09-26 04:31:02', '2017-09-22 12:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_authors`
--
ALTER TABLE `_authors`
  ADD PRIMARY KEY (`id_authors`);

--
-- Indexes for table `_categories`
--
ALTER TABLE `_categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `_courses`
--
ALTER TABLE `_courses`
  ADD PRIMARY KEY (`id_courses`);

--
-- Indexes for table `_coursesdetails`
--
ALTER TABLE `_coursesdetails`
  ADD PRIMARY KEY (`id_details`);

--
-- Indexes for table `_orders`
--
ALTER TABLE `_orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Indexes for table `_rankcourses`
--
ALTER TABLE `_rankcourses`
  ADD PRIMARY KEY (`id_rank`);

--
-- Indexes for table `_users`
--
ALTER TABLE `_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_authors`
--
ALTER TABLE `_authors`
  MODIFY `id_authors` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_categories`
--
ALTER TABLE `_categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_courses`
--
ALTER TABLE `_courses`
  MODIFY `id_courses` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_coursesdetails`
--
ALTER TABLE `_coursesdetails`
  MODIFY `id_details` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_orders`
--
ALTER TABLE `_orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_users`
--
ALTER TABLE `_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
