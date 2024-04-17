-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 10:15 AM
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
-- Database: `practicalmidterm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_type` varchar(8) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `middle_name` varchar(64) NOT NULL,
  `age` int(4) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(128) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `religion` varchar(128) NOT NULL,
  `contact_number` varchar(12) NOT NULL,
  `email_address` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_type`, `user_id`, `last_name`, `first_name`, `middle_name`, `age`, `birth_date`, `address`, `gender`, `religion`, `contact_number`, `email_address`) VALUES
('Student', 2, 'Ramirez', 'Ram', 'Kian', 23, '2000-09-06', 'Bahay', 'Male', 'Catholic', '09694206969', 'pogi@gmail.com'),
('Guest', 3, 'Penggu', 'penguin', 'pinggu', 24, '2000-01-01', 'antarctica', 'Male', 'penguin', '09994206666', 'penggu@gmail.com'),
('Staff', 4, 'Pogi', 'Mister', 'Guapo', 24, '2000-03-17', 'Pasay', 'Male', 'INC', '09143214569', 'misterg@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
