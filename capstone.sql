-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 07:22 AM
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
(14, 'Greenbelt Park', 'Greenbelt Park is a park in Greenbelt, Maryland, that is managed by the National Park Service. The forested park lies approximately 10 miles (16 km) ...', '14.5527276', '121.0222429', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0h7V_e-3W9ml6eler4Z6lBpK_7zyNvhrHnRQZYFu89A', 5),
(15, 'Victims of Martial Law Memorial Wall, Manila', 'Victims of Martial Law (Memorial Wall) is a memorial in Metro Manila. Victims of Martial Law (Memorial Wall) is situated northwest of Tanque.', '14.5912034', '120.9814083', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2Y5HXtePhbYNI_jYF0g2F9uZF9mY4uw2hm0yjVguJqA', 60),
(16, 'Luneta Park', 'Rizal Park, also known as Luneta Park or simply Luneta, is a historic urban park located in Ermita, Manila, Philippines. It is considered one of the largest urban parks in Asia, covering an area of 58 hectares.', '14.5831', '120.9794', 'https://faq.ph/wp-content/uploads/2015/08/Rizal-Monument-Rizal-park.jpg', 60),
(17, 'Victims of Martial Law Memorial Wall, Manila', 'Victims of Martial Law (Memorial Wall) is a memorial in Metro Manila. Victims of Martial Law (Memorial Wall) is situated northwest of Tanque.', '14.5912034', '120.9814083', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2Y5HXtePhbYNI_jYF0g2F9uZF9mY4uw2hm0yjVguJqA', 60),
(18, 'Manila Ocean Park', 'The Manila Ocean Park is a oceanarium in Manila, Philippines. It is owned by China Oceanis Philippines Inc., a subsidiary of China Oceanis Inc., a Singaporean-registered firm. It is located behind the Quirino Grandstand at Rizal Park', '14.5792', '120.9726', 'https://lh3.googleusercontent.com/proxy/U4KAK9QgRdz39HzBKWp5OEjwjjGSyjwIPaE0INIzIY6J3exzRDAmWiT7cVliefcz8GJSwofmvJFuyODBnHHxKyj4udNQfCt5u-T2B9JkTwPzJqZytokBUqhEv-9dCQ1S5zNOVxhkx2Xs0OJpMmpkcA', 60),
(19, 'Manila Ocean Park', 'The Manila Ocean Park is a oceanarium in Manila, Philippines. It is owned by China Oceanis Philippines Inc., a subsidiary of China Oceanis Inc., a Singaporean-registered firm. It is located behind the Quirino Grandstand at Rizal Park', '14.5792', '120.9726', 'https://lh3.googleusercontent.com/proxy/U4KAK9QgRdz39HzBKWp5OEjwjjGSyjwIPaE0INIzIY6J3exzRDAmWiT7cVliefcz8GJSwofmvJFuyODBnHHxKyj4udNQfCt5u-T2B9JkTwPzJqZytokBUqhEv-9dCQ1S5zNOVxhkx2Xs0OJpMmpkcA', 61),
(20, 'Sunset Point', 'Sunset Point. Bryce Canyon National Park. Red and white rock fins stand among distant spires and forested landscape Sunset Point provides views of narrow ...', '14.4393355', '120.4537027', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaytNkBYcBJ749Fr27t-NZL8W3uc8kRDQT532V_7Gy1g', 61),
(21, 'People\'s Park in the Sky', 'People\'s Park in the Sky, formerly known as the Palace in the Sky, is an incomplete mansion ...', '14.1416667', '121.0219444', 'https://serpapi.com/searches/6123042e359e99cf36064168/images/c94eb7a192b84b912dd0afb35eceaabc62aa6df787229fb4ec3dfec72764ae73.jpeg', 61);

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
(45, '../../uploads/61230bc030cc27.73246453.jpeg', 69, 'deocer123');

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
(5, 'Bellissima Fattoria', 'Bellissima Fattoria (beautiful farm in English) is a private vacation farm in Brgy. Bonbon, Cebu City. The farm is owned and developed by J.Lim Business Ventures & Development Inc. To know more, check our pages or message us, we\'ll be glad to accommodate.', '10.3651121', '123.8300916', 'https://media-cdn.tripadvisor.com/media/photo-s/1b/fa/09/c2/la-nostra-struttura-vista.jpg'),
(7, 'Heroes Square', 'Heroes\' Square ... Heroes\' Sq is the largest and most symbolic square in Budapest. It is dominated by the Millenary Monument (Ezeréves emlékmű), a 36m-high pillar ...', '14.592327', '120.971818', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNrBG8QUbtcNSRU8ubZEA4xRri9uJRhNIpC-ovBzYKnw'),
(8, 'The Breakfast Haven', '189 Followers, 231 Following, 33 Posts - See Instagram photos and videos from The Breakfast Haven (@thebreakfasthaven)', '14.4845327', '120.8944765', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKC_w3Q3VU-a76nhOikLPKTLtYSX8CW6vMsioCJwYN'),
(9, 'Puerta De Isabela II', 'Puerta de Isabel II ... This north entrance to Intramuros was the last gate built by the Spanish, in 1863. Suggest an Edit. Related tour ...', '14.5941886', '120.9762076', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAhdddGsKjC_Gxokxk9DoYMmGWCHS6e0QCvnxXyaSWIQ'),
(10, 'People\'s Park in the Sky', 'People\'s Park in the Sky, formerly known as the Palace in the Sky, is an incomplete mansion ...', '14.1416667', '121.0219444', 'https://serpapi.com/searches/611cd62e5b54ef8b0471b1de/images/c94eb7a192b84b912dd0afb35eceaabc62aa6df787229fb4ec3dfec72764ae73.jpeg'),
(12, 'Greenbelt Park', 'Greenbelt Park is a park in Greenbelt, Maryland, that is managed by the National Park Service. The forested park lies approximately 10 miles (16 km) ...', '14.5527276', '121.0222429', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0h7V_e-3W9ml6eler4Z6lBpK_7zyNvhrHnRQZYFu89A'),
(13, 'Ilustrado Restaurant', 'Traditional Filipino cuisine served in an old-school, Spanish-style venue with antique decor.', '14.5875418', '120.9770326', 'https://b.zmtcdn.com/data/pictures/7/6305557/53f8435f91df642c36cc927964c599ad.jpg?fit=around|750:500&crop=750:500;*,*'),
(14, 'Trails to Antartica', 'The first penguin park facility in the country. Trails to Antarctica: The Penguin Quest brings you closer to the coldest and most mysterious place on earth. Take a journey to discover a world like no other. It features a walk-through exhibit where you can', '14.5796375', '120.9722185', 'https://cmsapi.manilaoceanpark.com/storage/uploads/TTA1_1554349008.jpg'),
(16, 'San Diego Gardens', 'San Diego is a garden bonanza, especially botanical gardens. These are some of the best places to take in the abundance of plants that call San Diego ...', '14.585814', '120.9757118', 'https://www.sandiego.org/-/media/images/sdta-site/things-to-do/parks-and-gardens/japanesefriendshipgarden-727x545-1.jpg?h=545&la=en&w=727'),
(18, 'Luneta Park', 'Rizal Park, also known as Luneta Park or simply Luneta, is a historic urban park located in Ermita, Manila, Philippines. It is considered one of the largest urban parks in Asia, covering an area of 58 hectares.', '14.5831', '120.9794', 'https://faq.ph/wp-content/uploads/2015/08/Rizal-Monument-Rizal-park.jpg'),
(19, 'Manila Ocean Park', 'The Manila Ocean Park is a oceanarium in Manila, Philippines. It is owned by China Oceanis Philippines Inc., a subsidiary of China Oceanis Inc., a Singaporean-registered firm. It is located behind the Quirino Grandstand at Rizal Park', '14.5792', '120.9726', 'https://lh3.googleusercontent.com/proxy/U4KAK9QgRdz39HzBKWp5OEjwjjGSyjwIPaE0INIzIY6J3exzRDAmWiT7cVliefcz8GJSwofmvJFuyODBnHHxKyj4udNQfCt5u-T2B9JkTwPzJqZytokBUqhEv-9dCQ1S5zNOVxhkx2Xs0OJpMmpkcA'),
(20, 'Victims of Martial Law Memorial Wall, Manila', 'Victims of Martial Law (Memorial Wall) is a memorial in Metro Manila. Victims of Martial Law (Memorial Wall) is situated northwest of Tanque.', '14.5912034', '120.9814083', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2Y5HXtePhbYNI_jYF0g2F9uZF9mY4uw2hm0yjVguJqA'),
(23, 'Sunset Point', 'Sunset Point. Bryce Canyon National Park. Red and white rock fins stand among distant spires and forested landscape Sunset Point provides views of narrow ...', '14.4393355', '120.4537027', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaytNkBYcBJ749Fr27t-NZL8W3uc8kRDQT532V_7Gy1g'),
(34, 'Spanish Gate', 'The Subic Spanish Gate, located at the corner of Dewey Avenue and Samson Road in the City of Olongapo, Zambales province, Philippines, was built in 1885 when the Spanish Navy authorized the construction ', '14.8174623', '120.2834326', 'https://live.staticflickr.com/227/465013485_6c9e9cb456_b.jpg');

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
(68, 'Jojo: Stone Ocean', 'Stone Ocean is the sixth story arc of the Japanese manga series JoJo\'s Bizarre Adventure, written and illustrated by Hirohiko Araki. It was serialized in Weekly Shōnen Jump from January 1, 2000 to April 21, 2003 and was collected into 17 tankōbon volumes', '', 5, 61, 'deocer123'),
(69, 'Nebula', 'A nebula is a distinct body of interstellar clouds. Originally, the term was used to describe any diffused astronomical object, including galaxies beyond the Milky Way', '', 3, 61, 'deocer123');

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
(62, 'admin123', '$2y$10$JsW4zURwGg6PlYZr3KJ7men/YGpULfOBpEdQF4IR6Zj9TV7eCE7C2', '14.633108', '121.099354');

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
  MODIFY `PlaceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `panes`
--
ALTER TABLE `panes`
  MODIFY `PaneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `PlaceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `wuser`
--
ALTER TABLE `wuser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
