-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 10:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID` int(11) NOT NULL,
  `imgURL` varchar(1000) NOT NULL,
  `Topic` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID`, `imgURL`, `Topic`, `price`) VALUES
(1, 'https://firebasestorage.googleapis.com/v0/b/km-assignment-22fbd.appspot.com/o/bfbc78c9b33a689dd89b2b7c1bbff53d--love-painting-painting-trees.jpg?alt=media&token=284ac942-1602-4be0-84de-7f1d636271df', 'Wall Design(Hand Drawing)', '2500'),
(2, 'https://firebasestorage.googleapis.com/v0/b/km-assignment-22fbd.appspot.com/o/d969af2a339ae0eb397db612f1bd05da.jpg?alt=media&token=8f519f68-a33e-438f-83b2-a1daf7714bb9', 'Pencil Drawing(trees)', '1500'),
(3, 'https://firebasestorage.googleapis.com/v0/b/km-assignment-22fbd.appspot.com/o/e70dc37e357f51daa165550c69cf8fec.jpg?alt=media&token=015335ce-a7f5-48ee-80ef-d53aacde0e30', 'Nature View(Coconut trees)', '2000'),
(4, 'https://firebasestorage.googleapis.com/v0/b/km-assignment-22fbd.appspot.com/o/59c0a3b041af4828b07ac244f8cd4b59--sunset-paintings-easy-paintings.jpg?alt=media&token=eb374ead-1d23-4bfb-b8f8-8ac73d8adec6', 'Pencil Drawing(Birds)', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
