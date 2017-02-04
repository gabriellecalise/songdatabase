-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2017 at 04:52 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `songdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `artist` text NOT NULL,
  `genre` text NOT NULL,
  `mood` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `genre`, `mood`) VALUES
(3, 'Golden Days', 'Whitney', 'folk-rock', 'chill'),
(4, 'Golden Girls', 'Devendra Banhart', 'indie rock', 'relaxing'),
(5, 'Cut Your Bangs', 'Girlpool', 'indie rock', 'nostalgic'),
(6, 'Money Trees', 'Kendrick Lamar', 'rap', 'fun'),
(7, 'Seaside', 'The Kooks', 'indie rock', 'relaxing'),
(8, '15 Step', 'Radiohead', 'rock', 'upbeat'),
(9, 'American Smile', 'Creepoid', 'grunge', 'contemplative '),
(10, 'Pretty Girl From Michigan', 'The Avett Brothers', 'folk', 'fun'),
(11, 'How Soon Is Now?', 'The Smiths', 'rock', 'mysterious'),
(12, 'Bury Our Friends', 'Sleater-Kinney', 'rock', 'fun'),
(13, 'Act Nice and Gentle', 'The Black Keys', 'blues', 'cool'),
(14, 'Chicken Bill', 'Daniel Romano', 'country', 'whimsical');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
