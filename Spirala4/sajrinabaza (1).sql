-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 09:22 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sajrinabaza`
--
CREATE DATABASE IF NOT EXISTS `sajrinabaza` DEFAULT CHARACTER SET utf8 COLLATE utf8_slovenian_ci;
USE `sajrinabaza`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articleID` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `description` text COLLATE utf8_slovenian_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articleID`, `title`, `description`, `author`) VALUES
(15, 'Quote 3', 'Take rest; a field that has rested gives a bountiful crop.â€', 'Samed Muratovic'),
(16, 'Sarajevo', 'Sarajevo je najljepsi grad na svijetu.', 'Azra Muratovic'),
(17, 'Sajrica', 'Sajrica je bas slatka cura. I ovo je najbolji clanak, jer je u pitanju najbolja cura.', 'Amra Mujcinovic'),
(18, 'Zimska snizenja', 'Jedva cekam da idem u shoping i da kupim sebi puno puno stvari.\r\nGlava me boli.', 'Sajraaaaaaaa'),
(19, 'Da li znas', 'Kako zelim da te nadjem? Da li znas sto treba da znas?', 'Ekatarina Velika'),
(20, 'Mala garava', 'Hocu jednu malu garavu, crnu kao braca Arapi... ', 'Djordje Balasevic'),
(29, 'Sajra je slatkica', 'Sajra je slatkica najsladja u zivotu na svijetu. I jako je smijesna i skromna.', 'Sajra Muratovic');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentsID` int(11) NOT NULL,
  `username_korisnika` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `Id_artikla` int(11) NOT NULL,
  `message` text COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentsID`, `username_korisnika`, `Id_artikla`, `message`) VALUES
(1, 'sajramuratovic', 15, 'Ovo je glup komentar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('sajramuratovic', 'sajra_muratovic85@gmail.com', 'sajra123'),
('sajrica', 'sa@gmail.com', '12345678'),
('sajricaljepotica', 'sajra_muratovic85@gmail.com', '12345678'),
('samedm', 'samed_m93@gmail.com', 'sarajevojenajljepsigrad'),
('seminaprincess', 'semina_prince@gmail.com', '52dcb810931e20f7aa2f49b3510d3805');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentsID`),
  ADD KEY `username_korisnika` (`username_korisnika`),
  ADD KEY `Id_artikla` (`Id_artikla`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`username_korisnika`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`Id_artikla`) REFERENCES `articles` (`articleID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
