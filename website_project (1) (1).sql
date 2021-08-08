-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 06:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `2D` varchar(255) NOT NULL,
  `3D` varchar(255) NOT NULL,
  `4D` varchar(255) NOT NULL,
  `2dprice` varchar(255) NOT NULL,
  `3dprice` varchar(255) NOT NULL,
  `4dprice` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL,
  `Sunday` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `screen11` varchar(255) NOT NULL,
  `screen12` varchar(255) NOT NULL,
  `screen13` varchar(255) NOT NULL,
  `screen21` varchar(255) NOT NULL,
  `screen22` varchar(255) NOT NULL,
  `screen23` varchar(255) NOT NULL,
  `screen31` varchar(255) NOT NULL,
  `screen32` varchar(255) NOT NULL,
  `screen33` varchar(255) NOT NULL,
  `screen41` varchar(255) NOT NULL,
  `screen42` varchar(255) NOT NULL,
  `screen43` varchar(255) NOT NULL,
  `screen51` varchar(255) NOT NULL,
  `screen52` varchar(255) NOT NULL,
  `screen53` varchar(255) NOT NULL,
  `screen61` varchar(255) NOT NULL,
  `screen62` varchar(255) NOT NULL,
  `screen63` varchar(255) NOT NULL,
  `screen71` varchar(255) NOT NULL,
  `screen72` varchar(255) NOT NULL,
  `screen73` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `movie`, `2D`, `3D`, `4D`, `2dprice`, `3dprice`, `4dprice`, `Saturday`, `Sunday`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `screen11`, `screen12`, `screen13`, `screen21`, `screen22`, `screen23`, `screen31`, `screen32`, `screen33`, `screen41`, `screen42`, `screen43`, `screen51`, `screen52`, `screen53`, `screen61`, `screen62`, `screen63`, `screen71`, `screen72`, `screen73`, `avatar`) VALUES
(208, 'Padmavaat', '2D', '3D', '', '220', '320', '', 'Saturday', '', 'Monday', '', 'Wednesday', '', '', 'Saturday Screen-1: 9.00 a.m', '', 'Saturday Screen-3: 6.00 p.m', '', '', '', '', 'Monday Screen-2: 2.00 p.m', '', '', '', '', 'Wednesday Screen-1: 9.00 a.m', '', 'Wednesday Screen-3: 6.00 p.m', '', '', '', '', '', '', 'movie1.jpg'),
(209, 'Avengers', '', '3D', '4D', '', '320', '420', 'Saturday', '', '', '', '', '', 'Friday', 'Saturday Screen-1: 9.00 a.m', 'Saturday Screen-2: 2.00 p.m', 'Saturday Screen-3: 6.00 p.m', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Friday Screen-1: 9.00 a.m', 'Friday Screen-2: 2.00 p.m', 'Friday Screen-3: 6.00 p.m', 'movie2.jpg'),
(210, 'Angrezi Medium', '2D', '3D', '', '220', '320', '', '', 'Sunday', '', 'Tuesday', '', 'Thursday', '', '', '', '', '', 'Sunday Screen-2: 2.00 p.m', '', '', '', '', 'Tuesday Screen-1: 9.00 a.m', '', 'Tuesday Screen-3: 6.00 p.m', '', '', '', '', 'Thursday Screen-2: 2.00 p.m', '', '', '', '', 'movie3.jpg'),
(211, 'Harry Potter and The Deathly Hallows', '', '3D', '4D', '', '320', '420', '', 'Sunday', 'Monday', '', '', '', 'Friday', '', '', '', '', 'Sunday Screen-2: 2.00 p.m', '', '', 'Monday Screen-2: 2.00 p.m', '', '', '', '', '', '', '', '', '', '', 'Friday Screen-1: 9.00 a.m', '', 'Friday Screen-3: 6.00 p.m', 'movie4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`id`, `username`, `password`, `avatar`) VALUES
(1, 'Shawon', 'sssss', 'pro.jpg'),
(2, 'Kashfi', 'kkkkk', 'pro1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(20) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `phone`) VALUES
(3, '01816299924'),
(4, '01969018528'),
(5, '01816299924'),
(6, '76587587');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.jpg',
  `vkey` varchar(45) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `createdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `firstname`, `surname`, `email`, `phone`, `birthday`, `gender`, `password`, `avatar`, `vkey`, `verified`, `createdate`) VALUES
(88, 'kashfi', 'kashfi', 'Shormita', 'kashfishormita66@gmail.com', '01627299790', '2020-10-07', 'female', 'kkkkkk', 'pic1.jpg', '', 1, '2020-10-19 05:30:15.908944'),
(92, 'titly', 'Sazia Afrin', 'Titly', 'tttitlyyy@gmail.com', '01819294363', '30/03/1997', 'female', 'tttttt', 'pic1.jpg', '65a0ea071a56fa577654448640145cdd', 1, '2020-11-08 03:43:44.122109'),
(93, 'Shawon', 'Tanvir Ahmed', 'Shawon', 'tanvirahmedshawon1920@gmail.com', '01816299924', '31/05/1997', 'male', '123456', 'pro.jpg', '4952e64ae489fc0bfbea6117c2a8f586', 1, '2020-11-17 14:40:26.615913'),
(96, 'Shawon1920', 'Tanvir Ahmed', 'Shawon', 'shawoncoc1920@gmail.com', '01816299924', '31/05/1997', 'male', 'sshawon1920', 'ss.png', 'f0358cd41c83ea4a59b7eac5e03e2be8', 0, '2021-04-06 16:47:50.532188'),
(97, 'Shawon1122', 'Tanvir Ahmed', 'Shawon', 'gullbaharr786@gmail.com', '01816299924', '31/05/1997', 'male', 'ssssss', 'ss.png', '7045c103b4db4de33e30bc4c54a3fe55', 1, '2021-04-06 16:53:38.240279'),
(98, 'kamrulhassan5343@gma', 'kamrul', 'hassan', 'kamrulhassan5343@gmail.com', '01981337121', '12/10/1997', 'male', '12345678', '1.jpg', '40fa26660e8dda45c0c41d1ff338d6fa', 1, '2021-07-05 04:02:49.476948'),
(99, 'kamrul1275', 'kamrul', 'hassan', 'kamrulhassan5343@gmail.com', '01981337121', '12/10/1997', 'male', '12345678', '1.jpg', 'e7b307b034cf067b03c993c97e63e568', 1, '2021-07-05 04:06:01.251437'),
(100, 'Hredoy', 'hredoy', 'khan', 'hredoykhan@gmail.com', '0198536654', '23/5/1996', 'male', '12345678', 'avatar.jpg', '197e3df3f3cbf2726d1aea8a90505dac', 1, '2021-07-05 04:45:42.745727');

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE `trailer` (
  `id` int(20) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trailer`
--

INSERT INTO `trailer` (`id`, `movie`, `link`, `avatar`) VALUES
(17, 'Padmavaat', 'https://www.youtube.com/embed/5Paw8kazId8', 'movie1.jpg'),
(18, 'Avengers', 'https://www.youtube.com/embed/TcMBFSGVi1c', 'movie2.jpg'),
(19, 'Angrezi Medium', 'https://www.youtube.com/embed/05DrDxjMEbU', 'movie3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE `upcoming` (
  `id` int(20) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`id`, `movie`, `date`, `avatar`) VALUES
(9, 'Aynabaazi', '2020-10-08', 'movie1.jpg'),
(10, 'Fast And Furious 9', '2020-10-05', 'movie2.jpg'),
(11, 'Snow White and The Huntsman', '2020-10-10', 'movie3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_trailer`
--

CREATE TABLE `upcoming_trailer` (
  `id` int(20) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming_trailer`
--

INSERT INTO `upcoming_trailer` (`id`, `movie`, `link`, `avatar`) VALUES
(15, 'Fast And Furious 9', 'https://www.youtube.com/embed/_qyw6LC5pnE', 'movie2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trailer`
--
ALTER TABLE `trailer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming`
--
ALTER TABLE `upcoming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_trailer`
--
ALTER TABLE `upcoming_trailer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `trailer`
--
ALTER TABLE `trailer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `upcoming_trailer`
--
ALTER TABLE `upcoming_trailer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
