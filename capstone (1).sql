-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 03:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `panes`
--

CREATE TABLE `panes` (
  `PaneID` int(11) NOT NULL,
  `Datum` varchar(255) DEFAULT NULL,
  `PostID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `PlaceID` int(11) NOT NULL,
  `Pname` varchar(255) DEFAULT NULL,
  `Lat` varchar(255) DEFAULT NULL,
  `Lot` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostID` int(11) NOT NULL,
  `PostTitle` varchar(55) DEFAULT NULL,
  `Cont` varchar(255) DEFAULT NULL,
  `Tag` varchar(55) DEFAULT NULL,
  `Rating` int(11) NOT NULL DEFAULT 0,
  `UserID` int(11) DEFAULT NULL,
  `Username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostID`, `PostTitle`, `Cont`, `Tag`, `Rating`, `UserID`, `Username`) VALUES
(12, 'eqwewqe', 'weqeqwewqewq', 'temp', 3, 10, 'Wander123'),
(13, 'dupli?', 'wqeqwe', 'temp', 3, 10, 'Wander123'),
(14, 'What', 'weqwee', 'temp', 5, 10, 'Wander123'),
(15, 'Mine', 'weqweqewqe', 'temp', 1, 1, 'Deocer');

-- --------------------------------------------------------

--
-- Table structure for table `wuser`
--

CREATE TABLE `wuser` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(25) DEFAULT NULL,
  `Pass` varchar(25) DEFAULT NULL,
  `Lat` varchar(25) DEFAULT NULL,
  `Lot` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wuser`
--

INSERT INTO `wuser` (`UserID`, `UserName`, `Pass`, `Lat`, `Lot`) VALUES
(1, 'Deocer', 'Morales', '14.5995', '120.9842'),
(2, 'Deoce', 'Morales', '14.5995', '120.9842'),
(3, 'Deo', 'Morales', '14.5995', '120.9842'),
(4, 'Ignition', 'deocer', '0', '0'),
(5, 'wewqeqweeqwe', 'ewewqeweeqe', '0', '0'),
(6, 'Jorahtheandal', 'dedeocer', '0', '0'),
(7, 'KhalDrogo', 'daenerystargeyan', '0', '0'),
(8, 'Helena123', 'deocer', '0', '0'),
(9, 'Lorenz123', 'deocer', '0', '0'),
(10, 'Wander123', 'deocer', '0', '0'),
(11, 'Ronda123', 'eqweqwewqe', '0', '0'),
(12, 'Ronda321', 'deocer', '0', '0'),
(13, 'Ronda213', 'deocer', '0', '0'),
(20, 'ewqewqeqeqeqweeq', 'ewqeqewq', '15.708776', '121.105041'),
(21, 'weqeweqweqqqqq', 'weqeqwewqe', '14.633108', '121.099354'),
(22, 'wqeqeqqqqqqqqqq', 'ewqewqwe', '14.633108', '121.099354'),
(23, 'wqewqeqeq', 'ewqewqeqe', '7.063976', '125.60831'),
(24, 'ewqewqeq', 'ewqewqe', '0', '0'),
(25, 'ewewqeeeqewqewqe', 'eweewewewewe', '16.716802', '121.683293'),
(26, 'Barathna', '12234221', '16.412007', '120.593394');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panes`
--
ALTER TABLE `panes`
  ADD PRIMARY KEY (`PaneID`),
  ADD KEY `PostID` (`PostID`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`PlaceID`),
  ADD UNIQUE KEY `Pname` (`Pname`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `wuser`
--
ALTER TABLE `wuser`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panes`
--
ALTER TABLE `panes`
  MODIFY `PaneID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `PlaceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wuser`
--
ALTER TABLE `wuser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `panes`
--
ALTER TABLE `panes`
  ADD CONSTRAINT `panes_ibfk_1` FOREIGN KEY (`PostID`) REFERENCES `post` (`PostID`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `wuser` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
