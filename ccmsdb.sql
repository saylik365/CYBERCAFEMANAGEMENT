-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 05:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8668773679, 'admin@gmail.com', 'e6fa195e3c0b689b97990e7a2507dc5e', '2023-02-23 04:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomputers`
--

CREATE TABLE `tblcomputers` (
  `ID` int(10) NOT NULL,
  `ComputerName` varchar(120) DEFAULT NULL,
  `ComputerLocation` varchar(120) DEFAULT NULL,
  `IPAdd` varchar(120) DEFAULT NULL,
  `EntryDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomputers`
--

INSERT INTO `tblcomputers` (`ID`, `ComputerName`, `ComputerLocation`, `IPAdd`, `EntryDate`) VALUES
(1, 'HP', 'cabin2', '127.0.1.21', '2023-03-05 08:27:46'),
(2, 'DELL', 'cabin1', '127.0.0.1', '2023-03-05 08:28:21'),
(3, 'ASUS', 'cabin1', '127.0.0.232', '2023-03-05 08:29:04'),
(4, 'LENOVO', 'cabin1', '128.0.1.12', '2023-03-05 08:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `UserAddress` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `ComputerName` varchar(120) DEFAULT NULL,
  `IDProof` varchar(120) DEFAULT NULL,
  `InTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `OutTime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Fees` varchar(120) DEFAULT NULL,
  `Remark` varchar(120) DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `UserName`, `UserAddress`, `MobileNumber`, `Email`, `ComputerName`, `IDProof`, `InTime`, `OutTime`, `Fees`, `Remark`, `Status`, `UpdationDate`) VALUES
(4, 'pratapM', 'latur', 7878789090, 'abc@gmail.com', 'HP', '6565', '2023-03-05 09:09:41', '2023-03-05 09:37:10', '', 'so', 'Out', '2023-03-05 09:37:10'),
(5, 'Saylik', 'baldava nagar latur', 7878789090, 'saylikullkarni@gmail.com', 'HP', '13456', '2023-03-05 09:13:09', '2023-03-05 09:39:11', '100', 'ok', 'Out', '2023-03-05 09:39:11'),
(14, 'Muhammadnazir', 'Savidhan Chowk,Near Dayanand College, Latur', 8180876678, 'noor345@gmail.com', 'HP', 'mns212', '2023-03-23 10:15:10', NULL, NULL, NULL, '', NULL),
(15, 'ShrutikaM', 'Kapad Line, near Ganj Golai, Latur', 8765906645, 'shrutika123@gmail.com', 'LENOVO', 'shru', '2023-03-23 10:16:02', NULL, NULL, NULL, '', NULL),
(16, 'AnushkaP', 'Amba Hanuman,Latur', 8956368221, 'anushkapatil1304@gmail.com', 'DELL', 'anupatil', '2023-03-23 10:16:43', NULL, NULL, NULL, '', NULL),
(17, 'SakshiJ', 'Ram Galli,Near Keshavraj Mandir ,Latur', 8484974512, 'sakshijoshi444@gmail.com', 'ASUS', 'sakshu', '2023-03-23 10:17:40', NULL, NULL, NULL, '', NULL),
(18, 'Akshata', 'Renapur naka,Latur ', 8765568088, 'akshatachikte0899@gmial.com', 'LENOVO', 'akshu', '2023-03-23 10:18:26', NULL, NULL, NULL, '', NULL),
(19, 'VaibhaviP', 'Ausa Road, Latur', 6578443212, 'vaibhavipawar568@gmail.com', 'DELL', 'vaibhi', '2023-03-23 10:19:56', NULL, NULL, NULL, '', NULL),
(20, 'pranita', '5 no, latur\r\nMIDC road', 9890322128, 'suleshgh@gmail.com', 'LENOVO', 'nothing', '2023-04-19 13:37:22', NULL, NULL, NULL, '', NULL),
(21, '', '', 0, '', '', '67', '2023-04-19 15:15:15', NULL, NULL, NULL, '', NULL),
(22, 'Majge Pranita Ravindra', '5 no, shrifal hotel latur', 12345678, 'noor@gmail.com', '', '67', '2023-04-19 15:16:20', NULL, NULL, NULL, '', NULL),
(23, 'Majge Pranita Ravindra', '5 no, shrifal hotel latur', 0, '', '', '', '2023-04-19 15:24:46', NULL, NULL, NULL, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcomputers`
--
ALTER TABLE `tblcomputers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcomputers`
--
ALTER TABLE `tblcomputers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
