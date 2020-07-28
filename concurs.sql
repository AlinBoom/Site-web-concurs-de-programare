-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 10:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concurs`
--

-- --------------------------------------------------------

--
-- Table structure for table `anunturi`
--

CREATE TABLE `anunturi` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `continut` varchar(500) NOT NULL,
  `dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anunturi`
--

INSERT INTO `anunturi` (`id`, `nume`, `continut`, `dates`) VALUES
(1, 'Alin', 'Vedeti lista Participantilor', '2020-03-19 23:56:11'),
(2, 'Florin', 'Vedeti lista Organizatorilor', '2020-04-02 07:36:21'),
(3, 'Daiana', '1 martie-1aprilie-inscrierea proiectelor in curs,\r\n1 aprilie-1 mai-definitivarea proiectelor si transmiterea lor,\r\n1 mai-1 iunie-jurizarea proiectelor,\r\n2 iunie – anuntarea premiilor,\r\n2 iunie-6 iunie-termen contestatii,\r\n6 iunie-7 iunie-transmiterea premiilor', '2020-03-07 07:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `participanti`
--

CREATE TABLE `participanti` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `varsta` int(100) NOT NULL,
  `clasa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participanti`
--

INSERT INTO `participanti` (`id`, `nume`, `prenume`, `email`, `varsta`, `clasa`) VALUES
(1, 'Popescu', 'Alin', 'popescu.alin12@yahoo.com', 17, 'a 5-a'),
(2, 'Smeada', 'Gabriel', 'smeada.gabi98@yahoo.com', 18, 'a-XII-a'),
(3, 'Stanga', 'Mihaela', 'stanga.mihaela17@yahoo.com', 18, 'a XII-A'),
(5, 'Cruceru', 'Bianca', 'cruceru.bianca78@yahoo.com', 17, 'a XII-D');

-- --------------------------------------------------------

--
-- Table structure for table `rezultate`
--

CREATE TABLE `rezultate` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `nota` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rezultate`
--

INSERT INTO `rezultate` (`id`, `nume`, `prenume`, `nota`) VALUES
(1, 'Popescu', 'Alin', 78),
(2, 'Smeada', 'Gabriel', 62),
(3, 'Stanga', 'Mihaela', 86),
(4, 'Voiculescu ', 'George', 94),
(5, 'Cruceru', 'Bianca', 80);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `parola` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nume`, `parola`) VALUES
(1, 'Alin', '4fba276c3bb2719464fe24eae512feed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anunturi`
--
ALTER TABLE `anunturi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participanti`
--
ALTER TABLE `participanti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezultate`
--
ALTER TABLE `rezultate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anunturi`
--
ALTER TABLE `anunturi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `participanti`
--
ALTER TABLE `participanti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rezultate`
--
ALTER TABLE `rezultate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
