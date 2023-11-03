-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 09:09 AM
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
-- Database: `komickuy_2599`
--

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `idkomik` int(10) NOT NULL,
  `publish_oleh` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(7) NOT NULL,
  `judulkomik` varchar(20) NOT NULL,
  `Chapter` int(11) NOT NULL,
  `kodeuser` int(10) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `dirilis` date NOT NULL,
  `filekomik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`idkomik`, `publish_oleh`, `jenis_kelamin`, `judulkomik`, `Chapter`, `kodeuser`, `genre`, `type`, `dirilis`, `filekomik`) VALUES
(22, 'faiz', 'Pria', 'Seoul Station Druid', 60, 100, 'Action, Adventure, Fantasy,Drama, Sci-Fi', 'Manhwa', '2021-06-10', 'UTS MULTIMEDIA - KELOMPOK PRIMITIF.pdf'),
(55, 'latif', 'Wanita', 'ensei Shitara Slime ', 70, 116, '	Action, Adventure, Comedy, Fantasy', 'Manga', '2015-03-26', 'Muhamad Ridwan.pdf'),
(56, 'qaqa', 'Pria', 'MookHyang – The Orig', 50, 112, 'Action, Adventure, Fantasy,Drama, Sci-Fiz', 'Manhwa', '2021-01-28', 'Muhamad Ridwan.pdf'),
(57, 'fiqi', 'Pria', 'Murim Login', 67, 117, 'Action, Adventure,Drama, Fantasy,Martial Arts', 'action', '2020-05-01', 'tugas2 safar.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `kodeuser` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`kodeuser`, `nama`, `username`, `email`, `password`, `role`) VALUES
(59, 'admin', 'admin', 'admin@gmail.com', 'admin', 1),
(89, 'Revilghost', 'fgfg', 'dfdfdfddfdfn@gmail.c', 'cdc', 0),
(100, 'faiz syafni rakhman ', 'faiz', 'faiz@gmail.com', 'faiz123', 0),
(101, 'monyy', 'monnyy', 'mony@gmail.com', 'mony1234', 0),
(112, 'qaqa', 'qaqa', 'qaqa@gmail.com', 'qq2', 0),
(116, 'latif', 'latif', 'latifardiansyah@gmai', 'latif123', 0),
(117, 'fiqi', 'fiqi', 'fiqi22@gmail.com', 'fiq111', 0),
(118, 'wid', 'wid', 'wid@hmail.com', 'ww22', 0),
(119, 'rey', 'rey', 'reyhu@gmail.com', 'rey33', 0),
(120, 'dwi', 'dwi', 'dwi@gmail.com', 'dwi123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`idkomik`),
  ADD UNIQUE KEY `kodeuser` (`kodeuser`),
  ADD KEY `kodeuser_2` (`kodeuser`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`kodeuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `idkomik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `kodeuser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komik`
--
ALTER TABLE `komik`
  ADD CONSTRAINT `komik_ibfk_1` FOREIGN KEY (`kodeuser`) REFERENCES `user_admin` (`kodeuser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
