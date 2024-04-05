-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 05, 2024 at 08:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstconnection`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `Student_No` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Student_ID` varchar(32) NOT NULL,
  `Last_Name` varchar(32) NOT NULL,
  `First_Name` varchar(64) NOT NULL,
  `Middle_Name` varchar(32) NOT NULL,
  `Address` varchar(64) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Contact_number` varchar(16) NOT NULL,
  `Email_Address` varchar(32) NOT NULL,
  `Birthday` date DEFAULT NULL,
  `Age` int(4) NOT NULL,
  `Religion` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`Student_No`, `Username`, `Password`, `Student_ID`, `Last_Name`, `First_Name`, `Middle_Name`, `Address`, `Gender`, `Contact_number`, `Email_Address`, `Birthday`, `Age`, `Religion`) VALUES
(11, 'penggu', '12345678', 'CT21-0058', 'Ramirez', 'Ram', 'Kian', 'MI', 'Male', '09994206969', 'RKRamirez@gmail.com', '2000-07-07', 23, 'Born Again'),
(12, 'Chicks', '12345678', 'CT22-0058', 'Domingo', 'Kim', 'Malaki', 'Malate,Manila', 'Female', '09426906969', 'KimD@gmail.com', '2000-01-01', 24, 'Catholic'),
(23, 'Burger', 'burgeramoeba', 'CT21-0001', 'Anciado', 'Chariz', 'Baldovino', 'Balite', 'Female', '09426906969', 'ChaAnciado@gmail.com', '2003-04-28', 20, 'Catholic'),
(24, '', 'burgeramoeba', 'CT21-0001', 'Anciado', 'Chariz', 'Baldovino', 'Balite', 'Female', '09426906969', 'ChaAnciado@gmail.com', '2003-04-28', 20, 'Catholic'),
(25, 'Amen', 'qwerty', 'CT19-0023', 'Matsumoto', 'Jenny', 'Inin', 'Pasay, Manila', 'Female', '09994206969', 'AmenI@gmail.com', '1994-03-07', 30, 'Catholic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`Student_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `Student_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
