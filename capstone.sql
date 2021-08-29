-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 08:54 AM
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
  `PlcID` int(11) NOT NULL,
  `PlaceName` varchar(255) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `Pname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`PlcID`, `PlaceName`, `UserID`, `Pname`) VALUES
(11, 'Mary Grace Cafe | SM Manila', 61, 'Mary Grace Cafe | SM Manila'),
(12, '9 SPOONS - The Bayleaf Intramuros', 61, '9 SPOONS - The Bayleaf Intramuros'),
(13, 'Jose P. Laurel Ancestral House', 61, 'Jose P. Laurel Ancestral House'),
(14, 'Eat All You Can Food Corporation', 61, 'Eat All You Can Food Corporation'),
(15, 'Victims of Martial Law Memorial Wall, Manila', 61, 'Victims of Martial Law Memorial Wall, Manila');

-- --------------------------------------------------------

--
-- Table structure for table `panes`
--

CREATE TABLE `panes` (
  `PaneID` int(11) NOT NULL,
  `Datum` varchar(255) DEFAULT NULL,
  `PostID` int(11) DEFAULT NULL,
  `PostName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panes`
--

INSERT INTO `panes` (`PaneID`, `Datum`, `PostID`, `PostName`) VALUES
(40, '../../uploads/612308bb3b10f8.61855279.jpeg', 68, 'deocer123'),
(41, '../../uploads/612308bb4d0274.14033495.jpeg', 68, 'deocer123'),
(42, '../../uploads/612308bb5d4cb6.66501655.jpg', 68, 'deocer123'),
(43, '../../uploads/612308bb759907.08029065.jpg', 68, 'deocer123'),
(44, '../../uploads/61230bbfe294a0.90672871.jpeg', 69, 'deocer123'),
(45, '../../uploads/61230bc030cc27.73246453.jpeg', 69, 'deocer123'),
(46, '../../uploads/6126e317c73899.24631223.jpeg', 70, 'deocer123'),
(47, '../../uploads/6126e318218bb0.99099521.jpg', 70, 'deocer123');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `PlaceID` int(11) NOT NULL,
  `Pname` varchar(255) NOT NULL,
  `Des` varchar(255) DEFAULT NULL,
  `Lat` varchar(255) DEFAULT NULL,
  `Lot` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `Rating` float NOT NULL,
  `type` varchar(55) NOT NULL,
  `price` varchar(3) NOT NULL,
  `hours` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`PlaceID`, `Pname`, `Des`, `Lat`, `Lot`, `img`, `Rating`, `type`, `price`, `hours`, `address`) VALUES
(230, 'Mary Grace Cafe | SM Manila', '', '14.5898206', '120.9829552', 'https://lh5.googleusercontent.com/p/AF1QipPSQFT-F_DEr3ONk2nM6HUQaxdt3-4N8AI9-oxJ=w163-h92-k-no', 4.4, 'Restaurant', '$$', 'Closing soon: 9:00 PM', 'SM City Manila, 1000 San Marcelino St, Tondo, Manila, Metro Manila, Philippines'),
(233, '9 SPOONS - The Bayleaf Intramuros', '', '14.589926', '120.978776', 'https://lh5.googleusercontent.com/p/AF1QipPVVBStGshorREttHUri8LbLYvx0fKPoWfxYKho=w122-h92-k-no', 4.3, 'Restaurant', '$', 'Open until 10:30 PM', 'The Bayleaf Intramuros, 9/F Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines'),
(235, 'Jose P. Laurel Ancestral House', '', '14.5797128', '120.9971983', 'https://lh5.googleusercontent.com/p/AF1QipMuivqA2nhe1gXPm_IoXugpguuerEJMGVSY3dpm=w117-h92-k-no', 4.3, 'Historical landmark', '$', '', '1515 Penafrancia, Paco, Manila, Metro Manila, Philippines'),
(236, 'Sanu Eatery', '', '14.5882501', '120.9770209', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=kZE63d4D9jNI8P4wbIXKGQ', 0, 'Restaurant', '$', 'Opens at 7:00 AM', '729 Victoria St, Bgy 658, Zone 070 Intramuros, Manila, Philippines'),
(237, 'Victims of Martial Law Memorial Wall, Manila', '', '14.5912034', '120.9814083', 'https://lh5.googleusercontent.com/p/AF1QipNmKj7JuHVuKhMa3VJ7bulk7PD6mrImF_7jac9t=w80-h139-k-no', 0, 'Historical landmark', '$', 'Open 24 hours', 'Heroes Park, 1000 Cecilia Muñoz St, Ermita, Manila, 1000 Metro Manila, Philippines'),
(239, 'Eat All You Can Food Corporation', '', '14.5897958', '120.983067', 'https://lh5.googleusercontent.com/p/AF1QipNlD0Pi3HMt9QZcfJXKryeb9ilNc4E5zWzIOWcn=w80-h106-k-no', 4.3, 'Restaurant', '$', '', 'SM City Manila, 2nd Flr Bgy 659, Zone 071, San Marcelino St, Ermita, Manila, Metro Manila, Philippines'),
(269, 'The Landmark - Makati', 'Modern department store ', '14.5518805', '121.023298', 'https://lh5.googleusercontent.com/p/AF1QipPgUi0LR-mF5ZLcK1vnN2LHi9o3OL2zyBBog5Ls=w80-h106-k-no', 4.4, 'Shopping mall', '$', 'Open until 8:30 PM', '6751 Makati Ave, Ayala Center, Makati, Metro Manila, Philippines');

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
  `UserID` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostID`, `PostTitle`, `Cont`, `Tag`, `Rating`, `UserID`, `UserName`) VALUES
(68, 'Jojo: Stone Ocean', 'Stone Ocean is the sixth story arc of the Japanese manga series JoJo\'s Bizarre Adventure, written and illustrated by Hirohiko Araki. It was serialized in Weekly Shōnen Jump from January 1, 2000 to April 21, 2003 and was collected into 17 tankōbon volumes', '', 5, 61, 'deocer123'),
(69, 'Nebula', 'A nebula is a distinct body of interstellar clouds. Originally, the term was used to describe any diffused astronomical object, including galaxies beyond the Milky Way', '', 3, 61, 'deocer123'),
(70, 'Manila Ocean Park', 'The Manila Ocean Park is a oceanarium in Manila, Philippines. It is owned by China Oceanis Philippines Inc., a subsidiary of China Oceanis Inc., a Singaporean-registered firm. It is located behind the Quirino Grandstand at Rizal Park.', 'Manila Ocean Park', 5, 61, 'deocer123');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewID` int(11) NOT NULL,
  `ReviewTitle` varchar(55) DEFAULT NULL,
  `Cont` varchar(255) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `UserName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wuser`
--

CREATE TABLE `wuser` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `Lat` varchar(25) DEFAULT NULL,
  `Lot` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wuser`
--

INSERT INTO `wuser` (`UserID`, `UserName`, `Pass`, `Lat`, `Lot`) VALUES
(5, 'WonderofU', 'deocer', '14.556885', '121.023532'),
(44, 'ewqewqeweqw', '$2y$10$.tWR5ViIdlO7WghONPYfD.ZkYyfd5ljCa4viEnj29ZaVEvpEIwtBO', '0', '0'),
(47, 'deocer1234', '$2y$10$BuGJnV/QlA2rEqegSIaUIO12NfuhXq1kyZBsNMqEmK5n2W1iTDAB2', '0', '0'),
(48, 'olyy111223', '$2y$10$S3qTqDiCnOjDnoE724tg0el/74qAIHTd6hw/LgyqlnYMAIUVR7cK6', '43.97842', '4.91962'),
(50, 'deocer321', '$2y$10$jZmhuAMnUBUTNJcpVoPlWOYq9GC3yqgklRp/yUiEp1lsgjF0R.CcG', '14.630607', '120.979901'),
(51, 'rororo123', '$2y$10$Cn/JGDoZ2bAhv4UzWsGYTuT9/sY5KjZxhF7Ak/AlYLba.whIFRzNG', '0', '0'),
(52, 'deocer3231', '$2y$10$ZbjP72zkDx44Wcf3FVMGteKYpGKK5fQSzJI202rz9EaB90Jwv8M2a', '0', '0'),
(53, 'deocer32312', '$2y$10$pcHKuIMSH7pa47VTlHGz8uvNYuzwkrJl7q9tt27/uRdw7xPyeNF6u', '13.12448', '123.869703'),
(54, 'deocer444', '$2y$10$neIhJ.gcE9VqaE6KcaNArud8B0W.dtQ9ihORd3ced.EyXsKKIQsRi', '14.590607', '120.979901'),
(55, 'deocer555', '$2y$10$AY8ZZOlwn5tKxtth.8xZYum9UkOUDZopQm7/ZdeU9XZcMefi39tw.', NULL, NULL),
(56, 'Jojolion', '$2y$10$GvT9QZAgYIJdWKv4orKIbOZv30J/q1iuPtlFsg3cCj0RtvKdQedlu', '16.027818', '120.74472'),
(57, 'rwqrwqrrrwqrq', '$2y$10$k6WxZcGFa7oq/QzWZUJPD.W..yMQ96uDRIMFN8cdCcqBzDtxoh2iO', '43.97842', '4.91962'),
(58, 'ewqewweeeewwwwwwee', '$2y$10$cEZaWB8RM7icv20Rj.TJJegB.HrckG.47cEtZIPDdXkTE5P65.PUi', '14.57061', '121.01691'),
(59, 'Pizza123', '$2y$10$KtJowEaH26YG/KNdxrgTouw1uWOx6qkShR6RcUL11.OjnEPV0SxB6', '14.590607', '120.979901'),
(60, 'dedelion', '$2y$10$BvoYZQCNLwrkAfSnfkyPruwDNIMwPzDC5gN54kInWsQhE93IL.x2y', '14.580607', '120.979901'),
(61, 'deocer123', '$2y$10$S2UapU3N.t5xXP3mXA/0HO8u1g8IRKAIFyz35dyFnoSBKNEhwGi3y', '14.590607', '120.979901'),
(62, 'admin123', '$2y$10$JsW4zURwGg6PlYZr3KJ7men/YGpULfOBpEdQF4IR6Zj9TV7eCE7C2', '14.633108', '121.099354'),
(63, 'Jolyn123', '$2y$10$7lD6ffZfY3GvCRrfvsggBetHnivh2dU4zEnj.y28XsDNr5amej6.i', '16.027818', '120.74472'),
(64, 'yoyoyo123', '$2y$10$PvrMb/svZpk3LDPXD3OQEuKRVIJZcGwrx6UKlO9KAKLMhYFeq/HFm', '0', '0'),
(65, 'yoyoyo1232312', '$2y$10$Qoi8EmfTNi5jkxkI2duWZe4WNHhswWL8pm08p1Ags8p/sMhg8sQXW', '8.1792', '126.25006'),
(66, 'eqweqeqweqewqeqwe', '$2y$10$cHgjBUycygJdi9JmMGratO6ePnYuTCfkPsm8VJXtWGD0ZSoqi25e.', '7.063976', '125.60831'),
(67, 'NewUser1', '$2y$10$PbZxpsnzXZ3uLA4zjXhxMeuLEK9FMnhFBMScRbH7IVkd0QIFCx2dK', '14.590607', '120.979901');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`PlcID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `Pname` (`Pname`);

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
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewID`),
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
  MODIFY `PlcID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `panes`
--
ALTER TABLE `panes`
  MODIFY `PaneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `PlaceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wuser`
--
ALTER TABLE `wuser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD CONSTRAINT `itinerary_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `wuser` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itinerary_ibfk_2` FOREIGN KEY (`Pname`) REFERENCES `places` (`Pname`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `wuser` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
