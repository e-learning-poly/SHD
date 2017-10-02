-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 11:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Dumping data for table `_authors`
--

INSERT INTO `_authors` (`id_authors`, `author_username`, `author_password`, `author_name`, `author_age`, `author_token`, `id_categories`, `author_information`) VALUES
(1, '', '', 'Ken', 0, 0, 0, ''),
(2, '', '', 'Jerry', 0, 0, 0, ''),
(3, '', '', 'William', 0, 0, 0, ''),
(4, '', '', 'Katty', 0, 0, 0, ''),
(5, '', '', 'Jame', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `_categories`
--

CREATE TABLE `_categories` (
  `id_categories` int(11) NOT NULL,
  `category_name` varchar(30) DEFAULT NULL,
  `category_quantity` int(11) DEFAULT NULL,
  `category_classify` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_categories`
--

INSERT INTO `_categories` (`id_categories`, `category_name`, `category_quantity`, `category_classify`) VALUES
(1, 'C#', NULL, NULL),
(2, 'PHP', NULL, NULL),
(3, 'Javascript', NULL, NULL),
(4, 'Java', NULL, NULL),
(5, 'HTML5 + CSS3', NULL, NULL),
(6, 'C++', NULL, NULL),
(7, 'NodeJs', NULL, NULL),
(8, 'React Native', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_coupon`
--

CREATE TABLE `_coupon` (
  `id` int(1) NOT NULL,
  `day` varchar(50) NOT NULL,
  `active` int(1) NOT NULL,
  `code` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_coupon`
--

INSERT INTO `_coupon` (`id`, `day`, `active`, `code`) VALUES
(1, 'November 29, 2017 2:00 PM', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `_courses`
--

CREATE TABLE `_courses` (
  `id_courses` int(11) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_gallery` text,
  `id_authors` int(2) NOT NULL,
  `course_price` varchar(60) NOT NULL,
  `course_describe` text,
  `course_slug` text,
  `course_token` varchar(100) DEFAULT NULL,
  `id_categories` int(11) DEFAULT NULL,
  `course_start_day` date DEFAULT NULL,
  `course_end_day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_courses`
--

INSERT INTO `_courses` (`id_courses`, `course_name`, `course_gallery`, `id_authors`, `course_price`, `course_describe`, `course_slug`, `course_token`, `id_categories`, `course_start_day`, `course_end_day`) VALUES
(1, 'Learning HTML5 + CSS3', 'dev-1.jpg', 1, '460.000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur consequatur, soluta. Aperiam, tempore rem enim tempora.', 'learning-htm5-css3', '', 1, '2017-09-05', NULL),
(2, 'Learning PHP', 'dev-2.jpg', 2, '320.000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur consequatur, soluta. Aperiam, tempore rem enim tempora.', 'learning-php', '', 3, '2017-09-12', NULL),
(3, 'Learning Java', 'dev-3.jpg', 3, '420.000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur consequatur, soluta. Aperiam, tempore rem enim tempora.', 'learning-java', '', 3, '2017-09-15', NULL),
(4, 'Learning C#', 'dev-4.jpg', 2, '450.000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur consequatur, soluta. Aperiam, tempore rem enim tempora.', 'learning-c#', '', 4, '2017-09-18', NULL),
(5, 'Learning Javascript', 'dev-5.jpg', 5, '549.000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur consequatur, soluta. Aperiam, tempore rem enim tempora.', 'learning-javascript', '', 5, '2017-09-14', NULL),
(6, 'Learning NodeJs', 'dev-6.jpg', 4, '635.000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur consequatur, soluta. Aperiam, tempore rem enim tempora.', 'learning-nodejs', '', 6, '2017-09-19', NULL),
(7, 'Learning React Native', 'dev-8.jpg', 4, '724.000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur consequatur, soluta. Aperiam, tempore rem enim tempora.', 'learning-react-native', '', 4, '2017-09-27', NULL),
(8, 'Learning C++', 'dev-7.jpg', 1, '640.000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur consequatur, soluta. Aperiam, tempore rem enim tempora.', 'learning-c++', '', 2, '2017-09-08', NULL);

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
-- Table structure for table `_price`
--

CREATE TABLE `_price` (
  `id_price` int(5) NOT NULL,
  `price` varchar(60) NOT NULL
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
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `_coupon`
--
ALTER TABLE `_coupon`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `_price`
--
ALTER TABLE `_price`
  ADD PRIMARY KEY (`id_price`);

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
  MODIFY `id_authors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `_categories`
--
ALTER TABLE `_categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `_coupon`
--
ALTER TABLE `_coupon`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `_courses`
--
ALTER TABLE `_courses`
  MODIFY `id_courses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
-- AUTO_INCREMENT for table `_price`
--
ALTER TABLE `_price`
  MODIFY `id_price` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_users`
--
ALTER TABLE `_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
