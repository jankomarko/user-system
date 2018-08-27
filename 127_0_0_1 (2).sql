-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 27, 2018 at 08:17 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--
CREATE DATABASE IF NOT EXISTS `biblioteka` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biblioteka`;

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

DROP TABLE IF EXISTS `clanovi`;
CREATE TABLE IF NOT EXISTS `clanovi` (
  `id_clana` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `korisnicko_ime` varchar(30) NOT NULL,
  `sifra` varchar(50) NOT NULL,
  PRIMARY KEY (`id_clana`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`id_clana`, `ime`, `prezime`, `korisnicko_ime`, `sifra`) VALUES
(1, 'Marko', 'Djurovic', 'janko', '2222'),
(2, 'marko', 'petrovic', 'ma', '234'),
(3, 'marko', 'markovic', 'mare', '1234'),
(4, 'marko', 'markovic', 'mareeeee', '1234'),
(12, 'Nikola', 'Nikolic', 'Dzoni44', '1111'),
(10, 'marko', 'djordjevic', 'janko3', '1234'),
(23, 'ivan', 'ivanovic', 'ivke', '1111'),
(22, 'ivan', 'ivanovic', 'ivke', '1111'),
(17, 'dd', 'dd', 'ddd', 'ddd'),
(25, 'nikola', 'ivanovic', 'ivke', '1111'),
(24, 'ivan', 'ivanovic', 'ivke', '1111'),
(21, 'miodrag', 'djordjevic', 'mile', '1111'),
(27, 'Petar', 'Petrovic', 'pera', '1234'),
(28, 'Dejan', 'Dejanovic', 'deja', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `knjige`
--

DROP TABLE IF EXISTS `knjige`;
CREATE TABLE IF NOT EXISTS `knjige` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) NOT NULL,
  `pisac` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knjige`
--

INSERT INTO `knjige` (`id`, `naziv`, `pisac`) VALUES
(1, 'noz', 'Vuk Draskovic'),
(2, 'Hajduci', 'Branislav Nusic');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
