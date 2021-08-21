-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 10:20 AM
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
(6, 'Victims of Martial Law Memorial Wall, Manila', 'Victims of Martial Law (Memorial Wall) is a memorial in Metro Manila. Victims of Martial Law (Memorial Wall) is situated in 659, close to Bonifacio Shrine.', '14.5912034', '120.9814083', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2Y5HXtePhbYNI_jYF0g2F9uZF9mY4uw2hm0yjVguJqA', 1),
(8, 'People\'s Park in the Sky', 'People\'s Park in the Sky, formerly known as the Palace in the Sky, is an incomplete mansion ...', '14.1416667', '121.0219444', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY0ZVruJxdtsz-Qvu8mOuW6rgdlDVS3J9Ga1wHZ1e0iQ', 1),
(9, 'Puerta De Isabela II', 'Puerta de Isabel II ... This north entrance to Intramuros was the last gate built by the Spanish, in 1863. Suggest an Edit. Related tour ...', '14.5941886', '120.9762076', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAhdddGsKjC_Gxokxk9DoYMmGWCHS6e0QCvnxXyaSWIQ', 1),
(10, 'Barbara\'s Heritage Restaurant', 'Barbara\'s is the Best Heritage Restaurant in Manila, located in Intramuros in the early 90s revolutionizing the way Filipinos celebrate their own culture.', '14.5894156', '120.9752694', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMU7Z_YKBMMxgOALG-5SkuikoS5TjtodNZSUwjKRo', 1),
(12, 'Heroes Square', 'Heroes\' Square ... Heroes\' Sq is the largest and most symbolic square in Budapest. It is dominated by the Millenary Monument (Ezeréves emlékmű), a 36m-high pillar ...', '14.592327', '120.971818', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNrBG8QUbtcNSRU8ubZEA4xRri9uJRhNIpC-ovBzYKnw', 1),
(14, 'Greenbelt Park', 'Greenbelt Park is a park in Greenbelt, Maryland, that is managed by the National Park Service. The forested park lies approximately 10 miles (16 km) ...', '14.5527276', '121.0222429', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0h7V_e-3W9ml6eler4Z6lBpK_7zyNvhrHnRQZYFu89A', 5);

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
(1, '../../uploads/61208fa6411806.98641936.srt', NULL, '45'),
(2, '../../uploads/61208fdf9d2b60.97833681.srt', NULL, '45'),
(3, '../../uploads/6120900a2b1268.87910208.srt', 36, '45'),
(4, '../../uploads/612090afe24809.04249128.jpg', 38, '45'),
(5, '../../uploads/612091345697f3.01464957.srt', 18, '45'),
(6, '../../uploads/6120919cdca461.95098160.srt', 40, '45'),
(7, '../../uploads/61209264df3720.18062359.jpg', NULL, '45'),
(8, '../../uploads/61209282cf0211.36363155.srt', NULL, '45'),
(9, '../../uploads/612092a17ec4b0.76654569.jpg', NULL, '45'),
(10, '../../uploads/6120930ae33cf6.10515278.srt', 45, '45'),
(11, '../../uploads/61209375003536.68599437.srt', 46, 'deocer123'),
(12, '../../uploads/6120948c359a84.29757300.srt', 47, 'deocer123'),
(13, '../../uploads/6120948c3fec37.10726655.srt', 47, 'deocer123'),
(14, '../../uploads/612094c31d0051.99363647.srt', 48, 'deocer123'),
(15, '../../uploads/6120a4898cd009.10970531.jpg', 49, 'deocer123'),
(16, '../../uploads/6120a4ba0f82c9.25923431.jpg', 50, 'deocer123'),
(17, '../../uploads/6120a50a0f11b2.35883862.jpg', 51, 'deocer123'),
(18, '../../uploads/6120a50a25fc57.85449848.jpg', 51, 'deocer123'),
(19, '../../uploads/6120a5a87d27f7.82959394.jpg', 52, 'deocer123'),
(20, '../../uploads/6120a5a8b2ebc1.88105301.jpg', 52, 'deocer123'),
(21, '../../uploads/6120b3c35c9e72.31058763.jpg', 53, 'Pizza123');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `PlaceID` int(11) NOT NULL,
  `Pname` varchar(255) DEFAULT NULL,
  `Des` varchar(255) DEFAULT NULL,
  `Lat` varchar(255) DEFAULT NULL,
  `Lot` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`PlaceID`, `Pname`, `Des`, `Lat`, `Lot`, `img`) VALUES
(1, 'Campulabo Island', 'Previous Tulang Diot Island: White sand beach in Camotes, Cebu · Next Ultimate Guide: Venetian-inspired Food Park at J Centre Mall – Cebu ...', '10.3156992', '123.8854366', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkcSb_n4DnpunGx1Kq9NwaUDPPGhVJZ9KAzdEguL_Lyg'),
(5, 'Bellissima Fattoria', 'We are a family-owned and operated winery and cidery located in the heart of Central New York. 180 Wiltsieville Rd, Hannibal, NY 13074.', '10.3651121', '123.8300916', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTt6qeSyERX95awXE2ZlIv-84qnCgZDGmlZ_HkA56cQg'),
(7, 'Heroes Square', 'Heroes\' Square ... Heroes\' Sq is the largest and most symbolic square in Budapest. It is dominated by the Millenary Monument (Ezeréves emlékmű), a 36m-high pillar ...', '14.592327', '120.971818', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNrBG8QUbtcNSRU8ubZEA4xRri9uJRhNIpC-ovBzYKnw'),
(8, 'The Breakfast Haven', '189 Followers, 231 Following, 33 Posts - See Instagram photos and videos from The Breakfast Haven (@thebreakfasthaven)', '14.4845327', '120.8944765', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKC_w3Q3VU-a76nhOikLPKTLtYSX8CW6vMsioCJwYN'),
(9, 'Puerta De Isabela II', 'Puerta de Isabel II ... This north entrance to Intramuros was the last gate built by the Spanish, in 1863. Suggest an Edit. Related tour ...', '14.5941886', '120.9762076', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAhdddGsKjC_Gxokxk9DoYMmGWCHS6e0QCvnxXyaSWIQ'),
(10, 'People\'s Park in the Sky', 'People\'s Park in the Sky, formerly known as the Palace in the Sky, is an incomplete mansion ...', '14.1416667', '121.0219444', 'https://serpapi.com/searches/611cd62e5b54ef8b0471b1de/images/c94eb7a192b84b912dd0afb35eceaabc62aa6df787229fb4ec3dfec72764ae73.jpeg'),
(12, 'Greenbelt Park', 'Greenbelt Park is a park in Greenbelt, Maryland, that is managed by the National Park Service. The forested park lies approximately 10 miles (16 km) ...', '14.5527276', '121.0222429', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0h7V_e-3W9ml6eler4Z6lBpK_7zyNvhrHnRQZYFu89A'),
(13, 'Ilustrado Restaurant', 'Restaurant ', '14.5875418', '120.9770326', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJKo21s7Q694gvMW3j4tOjjAGydRsNzH2K4SbifBosw'),
(14, 'Trails to Antartica', 'Explore the most popular trails in Antarctica with hand-curated trail maps and driving directions as well as detailed reviews and photos from hikers, ...', '14.5796375', '120.9722185', 'IMAGE NOT AVAILABLE'),
(16, 'San Diego Gardens', 'San Diego is a garden bonanza, especially botanical gardens. These are some of the best places to take in the abundance of plants that call San Diego ...', '14.585814', '120.9757118', 'IMAGE NOT AVAILABLE');

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
(1, 'ewewqe', 'qweqweqweqwe', 'temp', 4, 1, 'Deocer'),
(3, 'Puntang baby', 'rwqewqeqwe', 'temp', 3, 1, 'Deocer'),
(5, 'rockrock paper', 'ewqeqewqeq', 'temp', 5, 1, 'Deocer'),
(7, 'ewqeqewq', 'ewqewqeqe', 'temp', 4, 48, 'olyy111223'),
(8, 'ewqewqe', 'wqqewqeq', 'temp', 4, NULL, NULL),
(9, 'rweqrwq', 'wqewqewqeq', 'temp', 3, 53, 'deocer32312'),
(10, 'this love', 'eqwewqeqeqe', 'temp', 4, 45, 'deocer123'),
(11, 'ewqewqe', 'ewqeqewq', 'temp', 3, 45, 'deocer123'),
(12, 'wewqewq', 'ewqwqeqe', 'temp', 3, 45, 'deocer123'),
(13, 'weqewqe', 'wqeqee', 'temp', 3, 45, 'deocer123'),
(14, 'ewqewqe', 'wewqewqe', 'temp', 3, 45, 'deocer123'),
(15, 'eewqewq', 'ewewqeqe', 'temp', 4, 45, 'deocer123'),
(16, 'wew', 'ww', 'temp', 1, 45, 'deocer123'),
(17, 'ewewqe', 'wewqeqe', 'temp', 3, 45, 'deocer123'),
(18, 'w', 'w', 'temp', 1, 45, 'deocer123'),
(19, 'dsadad', 'sdsadsad', 'temp', 4, 45, 'deocer123'),
(20, 'e', 'e', 'temp', 2, 45, 'deocer123'),
(21, 'ewewqe', 'qweqeqe', 'temp', 4, 45, 'deocer123'),
(22, 'w', 'w', 'temp', 3, 45, 'deocer123'),
(23, 'w', 'w', 'temp', 4, 45, 'deocer123'),
(24, 'ew', 'ewqeqe', 'temp', 3, 45, 'deocer123'),
(25, 'wqeqewq', 'ewqeqeqe', 'temp', 3, 45, 'deocer123'),
(26, 'w', 'w', 'temp', 3, 45, 'deocer123'),
(27, 'w', 'w', 'temp', 3, 45, 'deocer123'),
(28, 'eweqeqw', 'ewqewqe', 'temp', 3, 45, 'deocer123'),
(29, 'ewqeq', 'ewqewqe', 'temp', 3, 45, 'deocer123'),
(30, 'cont', 'weqwewqeewqeqe', 'temp', 4, 45, 'deocer123'),
(31, 'ewqeqe', 'weq', 'temp', 4, 45, 'deocer123'),
(32, 'ewqewqeq', 'ewqeq', 'temp', 4, 45, 'deocer123'),
(33, '', '', 'temp', 1, 45, 'deocer123'),
(34, 'e', 'e', 'temp', 3, 45, 'deocer123'),
(35, 'w', 'w', 'temp', 3, 45, 'deocer123'),
(36, 'ewe', 'wqeqeqe', 'temp', 3, 45, 'deocer123'),
(37, 'ewe', 'wqeqeqe', 'temp', 3, 45, 'deocer123'),
(38, 'trypic', 'wqeqeqe', 'temp', 3, 45, 'deocer123'),
(39, 'w', 'w', 'temp', 4, 45, 'deocer123'),
(40, 'uniwwe', 'eqwewqeqwe', 'temp', 3, 45, 'deocer123'),
(41, 'ww', 'w', 'temp', 3, 45, 'deocer123'),
(42, 'ww', 'w', 'temp', 3, 45, 'deocer123'),
(43, 'wewqewqeqeq', 'wweqwew', 'temp', 3, 45, 'deocer123'),
(44, 'e2qe224242', 'wewqe', 'temp', 3, 45, 'deocer123'),
(45, 'ewqe232', 'ewewqe', 'temp', 3, 45, 'deocer123'),
(46, 'eweqeq4r2424', 'ewqewqeq', 'temp', 3, 45, 'deocer123'),
(47, 'eweqee222233', 'eweqe', 'temp', 3, 45, 'deocer123'),
(48, 'eweq2e23232313', 'eqweqweq', 'temp', 4, 45, 'deocer123'),
(49, 'picture', 'ewqeqewe', 'temp', 4, 45, 'deocer123'),
(50, 'wqeqwe222233', 'ewqewqewqe', 'temp', 3, 45, 'deocer123'),
(51, 'ewqeqe222', 'ewqeqweq', 'temp', 3, 45, 'deocer123'),
(52, 'weewqe', 'eqwewqeqe', 'temp', 3, 45, 'deocer123'),
(53, 'Pizaa Fun', 'Pizza is an Italian dish consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients, which is then baked at a high temperature, traditionally in a wood-fired oven.', 'temp', 5, 59, 'Pizza123');

-- --------------------------------------------------------

--
-- Table structure for table `wuser`
--

CREATE TABLE `wuser` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(25) DEFAULT NULL,
  `Pass` varchar(255) DEFAULT NULL,
  `Lat` varchar(25) DEFAULT NULL,
  `Lot` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wuser`
--

INSERT INTO `wuser` (`UserID`, `UserName`, `Pass`, `Lat`, `Lot`) VALUES
(1, 'Deocer', 'Morales', '14.590607', '120.979901'),
(5, 'WonderofU', 'deocer', '14.556885', '121.023532'),
(44, 'ewqewqeweqw', '$2y$10$.tWR5ViIdlO7WghONPYfD.ZkYyfd5ljCa4viEnj29ZaVEvpEIwtBO', '0', '0'),
(45, 'deocer123', '$2y$10$sIiNmM8VFjNzGXv3jh8Eme.OHP7mbO6Gi5hAxb8fplVCZzhMdYh.q', '0', '0'),
(47, 'deocer1234', '$2y$10$BuGJnV/QlA2rEqegSIaUIO12NfuhXq1kyZBsNMqEmK5n2W1iTDAB2', '0', '0'),
(48, 'olyy111223', '$2y$10$S3qTqDiCnOjDnoE724tg0el/74qAIHTd6hw/LgyqlnYMAIUVR7cK6', '43.97842', '4.91962'),
(50, 'deocer321', '$2y$10$jZmhuAMnUBUTNJcpVoPlWOYq9GC3yqgklRp/yUiEp1lsgjF0R.CcG', '43.97842', '4.91962'),
(51, 'rororo123', '$2y$10$Cn/JGDoZ2bAhv4UzWsGYTuT9/sY5KjZxhF7Ak/AlYLba.whIFRzNG', '0', '0'),
(52, 'deocer3231', '$2y$10$ZbjP72zkDx44Wcf3FVMGteKYpGKK5fQSzJI202rz9EaB90Jwv8M2a', '0', '0'),
(53, 'deocer32312', '$2y$10$pcHKuIMSH7pa47VTlHGz8uvNYuzwkrJl7q9tt27/uRdw7xPyeNF6u', '13.12448', '123.869703'),
(54, 'deocer444', '$2y$10$neIhJ.gcE9VqaE6KcaNArud8B0W.dtQ9ihORd3ced.EyXsKKIQsRi', '14.590607', '120.979901'),
(55, 'deocer555', '$2y$10$AY8ZZOlwn5tKxtth.8xZYum9UkOUDZopQm7/ZdeU9XZcMefi39tw.', NULL, NULL),
(56, 'Jojolion', '$2y$10$GvT9QZAgYIJdWKv4orKIbOZv30J/q1iuPtlFsg3cCj0RtvKdQedlu', '16.027818', '120.74472'),
(57, 'rwqrwqrrrwqrq', '$2y$10$k6WxZcGFa7oq/QzWZUJPD.W..yMQ96uDRIMFN8cdCcqBzDtxoh2iO', '43.97842', '4.91962'),
(58, 'ewqewweeeewwwwwwee', '$2y$10$cEZaWB8RM7icv20Rj.TJJegB.HrckG.47cEtZIPDdXkTE5P65.PUi', '14.57061', '121.01691'),
(59, 'Pizza123', '$2y$10$KtJowEaH26YG/KNdxrgTouw1uWOx6qkShR6RcUL11.OjnEPV0SxB6', '14.590607', '120.979901');

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
  MODIFY `PlaceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `panes`
--
ALTER TABLE `panes`
  MODIFY `PaneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `PlaceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `wuser`
--
ALTER TABLE `wuser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
