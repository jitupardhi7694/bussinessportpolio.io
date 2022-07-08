-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 05:50 PM
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
-- Database: `bussinessportpolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrollform`
--

CREATE TABLE `enrollform` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `education` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `course` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollform`
--

INSERT INTO `enrollform` (`id`, `firstname`, `lastname`, `email`, `password`, `contact`, `gender`, `education`, `branch`, `course`, `address`) VALUES
(7, 'JITENDRA', 'PARDHI', 'pardhijitu7694@gmail.com', '12345678', '7709840106', 'MALE', 'BACHELOR OF ENGINEERING', 'ELECTRONICS AND COMM ENGG', 'WEB DEVELOPMENT', 'MADHUBAN APARTMENT NEW BIDIPETH NAGPUR-440023'),
(8, 'KRISHNA', 'NAGPURE', 'krishnanagpure14@gmail.com', '12345678', '7756068721', 'MALE', 'BE', 'MECHANICAL', 'JAVA DEVELOPER', 'MANEWADA NAGPUR');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `password`, `confirmpassword`, `number`, `gender`, `city`, `state`, `country`) VALUES
(3, 'JITENDRA', 'PARDHI', 'pardhijitu7694@gmail.com', 'Gondia@12', 'Gondia@12', '7709840106', 'MALE', 'GONDIA', 'MAHARASHTRA', 'INDIA'),
(5, 'jhdjfhdjgjgfj', 'jrhrkrghkjh', 'pardhijitu7694@gmail.com', '67677666', '675566556', '7788778686', 'MALE', 'GONDIA', 'MH', 'INDIA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrollform`
--
ALTER TABLE `enrollform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollform`
--
ALTER TABLE `enrollform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
