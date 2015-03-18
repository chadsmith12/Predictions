-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2015 at 08:13 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `predictions`
--

-- --------------------------------------------------------

--
-- Table structure for table `hitter_predictions`
--

CREATE TABLE IF NOT EXISTS `hitter_predictions` (
`id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `player` varchar(50) NOT NULL,
  `average` float NOT NULL,
  `rbis` int(11) NOT NULL,
  `home_runs` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hitter_predictions`
--

INSERT INTO `hitter_predictions` (`id`, `user`, `player`, `average`, `rbis`, `home_runs`) VALUES
(1, 'twigman08', 'Prince  Fielder', 0.279, 95, 30);

-- --------------------------------------------------------

--
-- Table structure for table `pitcher_predictions`
--

CREATE TABLE IF NOT EXISTS `pitcher_predictions` (
`id` tinyint(4) NOT NULL,
  `user` varchar(50) NOT NULL COMMENT 'who submitted the prediction',
  `player` varchar(50) NOT NULL COMMENT 'the pitcher ',
  `wins` int(11) NOT NULL COMMENT 'how many wins the pitcher will have',
  `strikeouts` int(11) NOT NULL COMMENT 'how many strikeouts the pitcher will have',
  `era` float NOT NULL COMMENT 'the pitchers ERA'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pitcher_predictions`
--

INSERT INTO `pitcher_predictions` (`id`, `user`, `player`, `wins`, `strikeouts`, `era`) VALUES
(1, 'twigman08', 'Yu Darvish', 16, 259, 2.68);

-- --------------------------------------------------------

--
-- Table structure for table `team_predictions`
--

CREATE TABLE IF NOT EXISTS `team_predictions` (
`id` tinyint(5) NOT NULL,
  `user` varchar(50) NOT NULL COMMENT 'who submitted this prediction',
  `team_wins` smallint(5) NOT NULL COMMENT 'how many wins the team will have',
  `finish_position` smallint(5) NOT NULL COMMENT 'where will the team finish in the standings'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hitter_predictions`
--
ALTER TABLE `hitter_predictions`
 ADD PRIMARY KEY (`id`), ADD KEY `user` (`user`,`player`);

--
-- Indexes for table `pitcher_predictions`
--
ALTER TABLE `pitcher_predictions`
 ADD PRIMARY KEY (`id`), ADD KEY `user` (`user`,`player`);

--
-- Indexes for table `team_predictions`
--
ALTER TABLE `team_predictions`
 ADD PRIMARY KEY (`id`), ADD KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hitter_predictions`
--
ALTER TABLE `hitter_predictions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pitcher_predictions`
--
ALTER TABLE `pitcher_predictions`
MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `team_predictions`
--
ALTER TABLE `team_predictions`
MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
