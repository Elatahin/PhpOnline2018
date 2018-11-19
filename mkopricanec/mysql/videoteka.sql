-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2018 at 11:13 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videoteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

CREATE TABLE `clanovi` (
  `id_broj` int(10) NOT NULL,
  `ime` varchar(30) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(30) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `datum_rodenja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`id_broj`, `ime`, `prezime`, `datum_rodenja`) VALUES
(1, 'Velimir Bata', 'Živojinović', '1933-06-05'),
(2, 'Ljubiša', 'Samardžić', '1936-11-19'),
(3, 'Pavle', 'Vuisić', '1926-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE `filmovi` (
  `id_broj` int(8) NOT NULL,
  `naslov` varchar(100) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `redatelj` varchar(30) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT 'Nepoznati redatelj',
  `drzava` char(2) NOT NULL,
  `godina` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`id_broj`, `naslov`, `redatelj`, `drzava`, `godina`) VALUES
(1, 'Nije kraj', 'Vinko Brešan', 'HR', 2008),
(2, 'Krugovi', 'Srdan Golubović', 'SR', 2013),
(3, 'Branio sam Mladu Bosnu', 'Srđan Koljević', 'SR', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `posudbe`
--

CREATE TABLE `posudbe` (
  `id_broj` int(15) NOT NULL,
  `id_clana` int(10) NOT NULL,
  `id_filma` int(8) NOT NULL,
  `vracen` int(1) DEFAULT '1',
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posudbe`
--

INSERT INTO `posudbe` (`id_broj`, `id_clana`, `id_filma`, `vracen`, `datum`) VALUES
(1, 3, 1, 0, '1982-09-03 10:00:00'),
(2, 2, 2, 1, '1998-11-06 15:30:00'),
(3, 1, 3, 1, '2003-03-06 07:15:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanovi`
--
ALTER TABLE `clanovi`
  ADD PRIMARY KEY (`id_broj`);

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`id_broj`);

--
-- Indexes for table `posudbe`
--
ALTER TABLE `posudbe`
  ADD PRIMARY KEY (`id_broj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanovi`
--
ALTER TABLE `clanovi`
  MODIFY `id_broj` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `id_broj` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posudbe`
--
ALTER TABLE `posudbe`
  MODIFY `id_broj` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
