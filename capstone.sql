-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 11:44 AM
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
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `PlaceID` int(11) NOT NULL,
  `PlaceName` varchar(255) DEFAULT NULL,
  `Des` varchar(255) NOT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lot` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`PlaceID`, `PlaceName`, `Des`, `lat`, `lot`, `img`, `UserID`) VALUES
(6, 'Victims of Martial Law Memorial Wall, Manila', 'Victims of Martial Law (Memorial Wall) is a memorial in Metro Manila. Victims of Martial Law (Memorial Wall) is situated in 659, close to Bonifacio Shrine.', '14.5912034', '120.9814083', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2Y5HXtePhbYNI_jYF0g2F9uZF9mY4uw2hm0yjVguJqA', 1);

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
  `Rating` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `UserName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostID`, `PostTitle`, `Cont`, `Tag`, `Rating`, `UserID`, `UserName`) VALUES
(1, 'ewewqe', 'qweqweqweqwe', 'temp', 4, 1, 'Deocer');

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
(1, 'Deocer', 'Morales', '14.590607', '120.979901');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`PlaceID`),
  ADD KEY `UserID` (`UserID`);

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
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `PlaceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wuser`
--
ALTER TABLE `wuser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD CONSTRAINT `itinerary_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `wuser` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `panes`
--
ALTER TABLE `panes`
  ADD CONSTRAINT `panes_ibfk_1` FOREIGN KEY (`PostID`) REFERENCES `post` (`PostID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `wuser` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
