-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2021 at 05:38 AM
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
(155, 'Rizal Park', 98, 'Rizal Park'),
(169, 'Paco Park and Cemetery', 98, 'Paco Park and Cemetery'),
(172, 'Rizal Park', 62, 'Rizal Park'),
(173, 'National Museum of Natural History', 62, 'National Museum of Natural History'),
(174, 'Manila Ocean Park', 98, 'Manila Ocean Park'),
(176, 'Seng Guan Temple', 128, 'Seng Guan Temple'),
(177, 'The Minor Basilica and Metropolitan Cathedral of the Immaculate Conception', 128, 'The Minor Basilica and Metropolitan Cathedral of the Immaculate Conception'),
(179, 'Arroceros Forest Park', 131, 'Arroceros Forest Park'),
(180, 'Paco Park and Cemetery', 131, 'Paco Park and Cemetery'),
(182, '88 Fast Food', 131, '88 Fast Food');

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
(46, '../../uploads/6126e317c73899.24631223.jpeg', 70, 'deocer123'),
(47, '../../uploads/6126e318218bb0.99099521.jpg', 70, 'deocer123'),
(49, '../../uploads/612b39c44cc482.06685192.jpg', NULL, 'admin123'),
(51, '../../uploads/612de935d0a347.71054374.jpg', 74, 'deocer123'),
(52, '../../uploads/612dea582e3b78.53792039.jpg', 78, 'deocer123'),
(53, '../../uploads/612dea5842e5b8.87592052.jpg', 78, 'deocer123'),
(54, '../../uploads/612deadb322538.85115669.jpg', 79, 'deocer123'),
(55, '../../uploads/612deadc6ea2d5.45014678.jpeg', 79, 'deocer123'),
(56, '../../uploads/612deadddd49e9.75700116.jpg', 79, 'deocer123'),
(57, '../../uploads/612dec78bd4cf6.61649157.jpg', 81, 'deocer123'),
(58, '../../uploads/612decdf7392c7.10846174.jpg', 78, 'deocer123'),
(59, '../../uploads/612ded0e8ef431.78332612.jpg', 84, 'deocer123'),
(60, '../../uploads/612ded7570a159.23063582.jpg', 85, 'deocer123'),
(61, '../../uploads/612dedc457ed27.76013788.jpeg', 88, 'deocer123'),
(62, '../../uploads/612dee1e15d760.50866607.jpg', 90, 'deocer123'),
(63, '../../uploads/612f6e76359733.90237194.jpeg', 92, 'deocer123'),
(64, '../../uploads/612f6e91e1d403.60294351.jpg', 93, 'deocer123'),
(65, '../../uploads/6132f8c46592a7.86768546.jpg', 94, 'deocer123'),
(66, '../../uploads/6132f8eeb5ce19.76407838.jpg', 95, 'deocer123'),
(68, '../../uploads/6132f9bb07f2f3.75894397.jpg', 97, 'deocer123'),
(69, '../../uploads/6156bf6b2ac221.92827338.jpg', 99, 'deocer231'),
(70, '../../uploads/6156bf6b7f09f9.81483189.jpg', 99, 'deocer231'),
(71, '../../uploads/6156bfc184b976.79804660.jpg', 101, 'deocer231'),
(72, '../../uploads/61613b21147625.06528170.jpeg', 109, 'deocer231'),
(73, '../../uploads/61613b21a15b11.90431850.jpg', 109, 'deocer231'),
(77, '../../uploads/6165118f56aae1.16810281.jpg', NULL, 'admin123'),
(78, '../../uploads/6165118f81e069.34354424.jpg', NULL, 'admin123'),
(79, '../../uploads/6165118fb86ef5.87401257.jpg', NULL, 'admin123'),
(80, '../../uploads/616511abef45c2.89681166.jpg', NULL, 'admin123'),
(81, '../../uploads/616512695470b9.27083179.jpg', NULL, 'admin123'),
(82, '../../uploads/6165144da67ff8.07881188.jpg', 112, 'admin123'),
(83, '../../uploads/616514abf1deb2.98149844.jpg', 113, 'admin123'),
(84, '../../uploads/616514ac385742.86996472.jpg', 113, 'admin123'),
(85, '../../uploads/616514ac566015.65252397.jpg', 113, 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `pflags`
--

CREATE TABLE `pflags` (
  `TrnsID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `PostID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pflags`
--

INSERT INTO `pflags` (`TrnsID`, `UserID`, `PostID`) VALUES
(1, 62, 101),
(2, 62, 99),
(3, 62, 97),
(4, 62, 95),
(5, 62, 94);

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
  `img` varchar(800) DEFAULT NULL,
  `Rating` float NOT NULL,
  `reviews` int(5) NOT NULL,
  `type` varchar(55) NOT NULL,
  `price` int(1) NOT NULL DEFAULT 1,
  `hours` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `District` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`PlaceID`, `Pname`, `Des`, `Lat`, `Lot`, `img`, `Rating`, `reviews`, `type`, `price`, `hours`, `address`, `District`) VALUES
(1335, 'Raffaele Woodfired Pizza, The Bayleaf Hotel', '', '14.5900112', '120.978804', 'https://lh5.googleusercontent.com/p/AF1QipNTP4tb0DITLYYLouzs7yfFxHAl7wFyoCEciLS9=w122-h92-k-no', 4.6, 81, 'Restaurant', 2, 'Temporarily closed', 'The Bayleaf Intramuros, 1002 Muralla St, Intramuros, Manila, Metro Manila, Philippines', 'Intramuros'),
(1336, 'Ilustrado Restaurant', 'Filipino meals in nostalgic surrounds. Traditional Filipino cuisine served in an old-school, Spanish-style venue with antique decor.', '14.5875418', '120.9770326', 'https://lh5.googleusercontent.com/p/AF1QipNBMhjRwbeTWVpe2JGT1D79vWjo5wH_YMcsEdyC=w122-h92-k-no', 4.2, 304, 'Restaurant', 2, 'Open until 7:00 PM', '744 General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1337, 'Ilustrado - General Luna', '', '14.587596', '120.976987', 'https://lh5.googleusercontent.com/p/AF1QipMcjgM6saSct0rew1EjdPG8d8xY4CABnZUoy0XS=w80-h106-k-no', 4.2, 203, 'Restaurant', 2, 'Open until 11:00 PM', '744 General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1338, 'The Aristocrat Restaurant, SM Manila', '', '14.5910375', '120.9818902', 'https://lh5.googleusercontent.com/p/AF1QipMJK0f4RWfYM83_pa9AyRdHzCaCzh7tm_HqYpaL=w122-h92-k-no', 3.6, 11, 'Restaurant', 2, 'Open until 6:00 PM', 'Concepcion cor. Arroceros and San Miguel Sts, Ermita, Manila, Philippines', 'Ermita'),
(1339, 'Cafe Ilang-Ilang', '', '14.582938', '120.9740848', 'https://lh5.googleusercontent.com/p/AF1QipOLt1Xt3mtJ0WKjhQzLhCQZPeQupUdjQ-LW-ZXG=w163-h92-k-no', 4.6, 732, 'Restaurant', 2, 'Closing soon: 2:30 PM', 'Manila Hotel, 1 Rizal Park, Ermita, Manila, 0913 Metro Manila, Philippines', 'Ermita'),
(1340, 'Harbor View Restaurant', '', '14.5778275', '120.9743613', 'https://lh5.googleusercontent.com/p/AF1QipOwkQhxK7T4CWTB1fiUncv1iwQNL1C1Rl_Ov7fx=w122-h92-k-no', 4.2, 1010, 'Restaurant', 2, 'Open until 10:00 PM', 'South Dr, Ermita, Manila, 1000 Metro Manila, Philippines', 'Ermita'),
(1341, 'Barbara\'s Heritage Restaurant', '', '14.5894156', '120.9752694', 'https://lh5.googleusercontent.com/p/AF1QipPZHSSz8rCvyik-3YJoVeEzMoFPFmFkvrssAlfE=w163-h92-k-no', 4.2, 511, 'Restaurant', 2, 'Closing soon: 2:30 PM', 'HXQG+V52, plaza sans luis complex, General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1342, 'Plaza San Luis Complex', '', '14.5896306', '120.9753879', 'https://lh5.googleusercontent.com/p/AF1QipMYStR32cYoVH40T5H46sRpUUx5kLSKJCdzZ1ck=w163-h92-k-no', 4.4, 277, 'Restaurant', 2, 'Open until 5:00 PM', 'General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1343, '9 SPOONS - The Bayleaf Intramuros', '', '14.589926', '120.978776', 'https://lh5.googleusercontent.com/p/AF1QipOO5iIkhcGyBOAcH0mThVL0kdSanSTRznCcWxw_=w163-h92-k-no', 4.3, 224, 'Restaurant', 3, 'Open until 10:30 PM', 'The Bayleaf Intramuros, 9/F Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1344, 'Sky Deck View Bar - The Bayleaf Intramuros', '', '14.5900225', '120.978795', 'https://lh5.googleusercontent.com/p/AF1QipOJJY0Ejmmb_z-P4ebll9cosAr5zgh8gIyvDVoB=w80-h106-k-no', 4.4, 795, 'Restaurant', 3, 'Opens at 3:00 PM', 'The Bayleaf Intramuros, Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1345, 'Ristorante delle Mitre', '', '14.589485', '120.9746813', 'https://lh5.googleusercontent.com/p/AF1QipMcl1CKqyrQulciEFtLRnjvFSSkb8bRn2HW0c1l=w122-h92-k-no', 4.2, 294, 'Restaurant', 1, 'Open until 8:00 PM', 'Opposite San Agustin Church, Real St, Intramuros, Manila, Metro Manila, Philippines', 'Intramuros'),
(1346, 'Chibz Restobar', '', '14.5906407', '120.9761587', 'https://lh5.googleusercontent.com/p/AF1QipNA_ZUQE6OdOrg3sVGgPLgdDaivKETli_2KUv7x=w122-h92-k-no', 4.6, 32, 'Restaurant', 2, 'Open until 2:00 AM', 'Real St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1347, 'Bistro Remedios', '', '14.5698672', '120.9861935', 'https://lh5.googleusercontent.com/p/AF1QipNUySYApDLFCxBI0uGwrXI54looIs4177fhj4yd=w122-h92-k-no', 4.4, 252, 'Restaurant', 2, 'Open until 3:00 PM', '1911 M. Adriatico St, Malate, Manila, 1004 Metro Manila, Philippines', 'Malate'),
(1349, 'Ying Ying Tea House', '', '14.59797', '120.976713', 'https://lh5.googleusercontent.com/p/AF1QipNJrCOhZG2DgiiMRtEzLw_P2HQO58lsnqbZztsK=w163-h92-k-no', 4.3, 1718, 'Restaurant', 2, 'Open until 6:00 PM', '233-235 Yuchengco St, Binondo, Manila, 1006 Metro Manila, Philippines', 'Manila'),
(1350, 'Oody\'s Bar and Restaurant', '', '14.57536', '120.984737', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=ElH15SIEMXVG6U2SQXTHyg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=25.532736&pitch=0&thumbfov=100', 0, 0, 'Restaurant', 2, 'Open until 9:00 PM', 'Robinsons Place Manila 1st Level, Pedro Gil, corner M. Adriatico St, Ermita, Manila City, 1000 Metro Manila, Philippines', 'Manila'),
(1351, 'Sisig restaurant', '', '14.6028184', '120.9854452', 'https://lh5.googleusercontent.com/p/AF1QipOs3yF4S54AQranXeAO6R0mBDPXOAnJYATLbxX2=w122-h92-k-no', 0, 0, 'Restaurant', 1, 'Open until 8:00 PM', '1802, 1008 Recto Ave, Quiapo, Manila, Metro Manila, Philippines', 'Quiapo'),
(1352, 'G-Point Smörgåsbord And Bar', '', '14.5774784', '120.9817085', 'https://lh5.googleusercontent.com/p/AF1QipMyc42ieHd190Y7IjizvATwsuG-vhuy3e72mCYq=w122-h92-k-no', 4, 353, 'Restaurant', 3, 'Open until 4:00 AM', '510 Padre Faura St, Ermita, Manila, 1000 Metro Manila, Philippines', 'Ermita'),
(1353, 'Market Cafe - New Coast Hotel Manila', '', '14.5732996', '120.98254', 'https://lh5.googleusercontent.com/p/AF1QipPWZa2f5E2US5VUgxyp6Q2pi2K9pzJ7OhHOc2Bp=w122-h92-k-no', 4.3, 302, 'Restaurant', 2, 'Open until 10:00 PM', '3rd Floor New Coast Hotel Manila 1588 Pedro Gil, corner M. H. Del Pilar St, Malate, Manila, 1004 Metro Manila, Philippines', 'Malate'),
(1354, 'Casa Manila', 'Museum depicting Spanish colonial life. This restored 1850s house is now a museum displaying Spanish colonial furniture, art & architecture.', '14.5894444', '120.9752778', 'https://lh5.googleusercontent.com/p/AF1QipPM7XdM1WFZjNPVB7jaFrP_lB0yvYsK0U-Ovrq4=w138-h92-k-no', 4.6, 287, 'Museum', 2, 'Closed ⋅ Opens 9AM Tue', 'HXQG+V52, plaza sans luis complex, General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1355, 'Manila Baywalk', 'Waterfront walkway for sunset views. Bordered by open-air cafes, this long, bayside walkway is a popular place to watch the sunset.', '14.568052', '120.982999', 'https://lh5.googleusercontent.com/p/AF1QipMxmFUXNbKgWIBqXyMFwNYS7EYdVODtPrlbL90=w122-h92-k-no', 4.1, 2357, 'Tourist attraction', 1, 'Open until 12:30 AM', 'Roxas Blvd, Malate, Manila, 1004 Metro Manila, Philippines', 'Malate'),
(1356, 'Rizal Park', 'Large park for strolling & public events. Grand 140-acre park featuring lawns, gardens, outdoor events & a monument to hero José Rizal.', '14.5831177', '120.9794171', 'https://lh5.googleusercontent.com/p/AF1QipMVMi36DchOf8QEpfiz1-EY3PoJLOwGge1Kvge2=w122-h92-k-no', 4.5, 20422, 'Park', 1, 'Open until 9:00 PM', 'Ermita, Manila, 1000 Metro Manila, Philippines', 'Ermita'),
(1357, 'Fort Santiago', 'Iconic citadel & with a hero\'s memorial. This landmark defensive fortress features a museum commemorating the national hero José Rizal.', '14.5942337', '120.970412', '//lh4.googleusercontent.com/proxy/WDJmT4O53bizFTZF8OgnAX-dMRT-YX0ShFPKbCx8DP4LFkZ6s6-WQ-n3h5Wbbw4JbaCdSZvW7Zoc-367CFa_1ZRoHWp9tCoG-9q_ZmTyiulk3qUqc5p__8v33i1pVY3NsAbrXpmYEfGjQY71P0l0Xl0Jj0Nnrw=w138-h92-k-no', 4.4, 6560, 'Historical landmark', 1, 'Open until 7:00 PM', 'HXVC+M5V, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1358, 'National Museum of Anthropology', 'Museum devoted to Filipino heritage. Stately, neoclassical museum housing a broad collection of Filipino cultural materials & artifacts.', '14.5856808', '120.9811664', 'https://lh5.googleusercontent.com/p/AF1QipO3-kD2MY8g9jt8qZiQIyd2nBdkgeDsD0w_3yC-=w122-h92-k-no', 4.6, 662, 'Museum', 1, 'Closed ⋅ Opens 10AM Tue', 'Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila, Philippines', 'Ermita'),
(1359, 'The Minor Basilica and Metropolitan Cathedral of the Immaculate Conception', 'Historic basilica known for papal visits. Built in 1571, this historic church is known for its ornate architecture & visits by several popes.', '14.5916543', '120.9734594', 'https://lh5.googleusercontent.com/p/AF1QipN-e2lF9K8QqFFZJ6BGLJsQfX4oURsJszhegOWN=w138-h92-k-no', 4.6, 4542, 'Church', 1, '', 'Beaterio St, Cabildo St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1360, 'Baluarte de San Diego', '16th-century fortified bastion. Built in 1586 in the shape of an ace of spades, this stone fort now features a bonsai display.', '14.5853806', '120.9755667', 'https://lh5.googleusercontent.com/p/AF1QipOAEwyIWZ-mkqjF32QtcWGUdFN3l1keL2Urqd8f=w122-h92-k-no', 4.4, 376, 'Historical landmark', 1, 'Open until 5:00 PM', 'Sta. Lucia St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1361, 'Bahay Tsinoy, Museum of Chinese in Philippine Life', 'Museum of Chinese history in Philippines. Museum & heritage center exploring contributions & influences of the Chinese in Philippine culture.', '14.5909036', '120.9750258', 'https://lh5.googleusercontent.com/p/AF1QipMQdOhNGmhOBRrH8n1Pl29BsMnqjkoEq5E2YxRg=w145-h92-k-no', 4.4, 208, 'Museum', 2, 'Opens at 2:00 PM', '32 Anda St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1362, 'Manila Ocean Park', 'Live shows & displays about marine life. Aquatic theme park & educational facility featuring hands-on activities, an oceanarium & live shows.', '14.5792001', '120.9725638', 'https://lh5.googleusercontent.com/p/AF1QipPuBMxm91Y1nm1Gza3CaE1RE8uAWRDEvZep_ZKn=w137-h92-k-no', 4.2, 10750, 'Park', 3, 'Open until 6:00 PM', 'Quirino Grandstand, 666 Behind, Ermita, Manila, 1000 Metro Manila, Philippines', 'Ermita'),
(1363, 'Intramuros', '', '14.5916001', '120.9717729', 'https://lh5.googleusercontent.com/p/AF1QipOu47UJQEyvT0jwmPbP2R-urZO0E4x63FIvOZ7T=w80-h106-k-no', 4.7, 354, 'Tourist attraction', 2, '', '470, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1364, 'Paco Park and Cemetery', 'Tranquil park on former burial grounds. Serene urban park built on a walled cemetery site with shaded paths & garden areas.', '14.5809649', '120.9884237', 'https://lh5.googleusercontent.com/p/AF1QipNSAkHjgJSsk2AAExpwBzPQgkO0XdMz3_HMiPDu=w122-h92-k-no', 4.4, 778, 'Park', 1, 'Open until 11:00 PM', 'Belen, Paco, Manila, Metro Manila, Philippines', 'Paco'),
(1365, 'National Museum of Natural History', 'Gallery of animal & plant exhibits. Zoological, botanical & geological specimens displayed in an elegant venue with a soaring atrium.', '14.583505', '120.9820883', 'https://lh5.googleusercontent.com/p/AF1QipMtzsfqX-LGZUQvreXrn10-qOc7z9g-SG4eN1Q8=w122-h92-k-no', 4.7, 2169, 'Museum', 1, 'Closed ⋅ Opens 10AM Tue', 'Teodoro F. Valencia Cir, Ermita, Manila, 1000 Metro Manila, Philippines', 'Ermita'),
(1366, 'Arroceros Forest Park', 'Tree & plant-filled spot by the river. Small urban park with a vast array of trees & plants, plus a fishpond & riverside walkway.', '14.5942352', '120.9817192', 'https://lh5.googleusercontent.com/p/AF1QipNRzWYslmXmoBm0h0ve994SDjZXvxD8m45Tc6tM=w122-h92-k-no', 4.4, 386, 'Park', 2, 'Open 24 hours', '659 A Antonio Villegas St, Ermita, Manila, 1000 Metro Manila, Philippines', 'Ermita'),
(1368, 'Manila Zoo', 'Small zoo with basic exhibit areas. 5.5-hectare zoo & garden featuring diverse animals in modest, old-fashioned enclosures.', '14.565137', '120.988525', 'https://lh5.googleusercontent.com/p/AF1QipMGSFF3a_UhDbjuN02S7zXpkhM9a5_BpUDAE0kx=w122-h92-k-no', 3.4, 2266, 'Tourist attraction', 1, 'Open until 6:00 PM', 'M. Adriatico St, Malate, Manila, 1004 Metro Manila, Philippines', 'Malate'),
(1369, 'Manila Sightseeing Tours', '', '14.580027', '120.9804297', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=YxDYLWFQt7HGG23lg2VZGA&cb_client=search.gws-prod.gps&w=80&h=92&yaw=122.626396&pitch=0&thumbfov=100', 0, 0, 'Tourist attraction', 1, '', '500 United Nations Ave, Ermita, Manila, 1000 Metro Manila, Philippines', 'Ermita'),
(1370, 'Bambike Ecotours Intramuros, Manila', '', '14.5896472', '120.975067', 'https://lh5.googleusercontent.com/p/AF1QipOt2mEJR3tsVMVdiH_EJOpYK5-jQSnbb33YnWo0=w163-h92-k-no', 4.7, 272, 'Tourist attraction', 1, 'Open until 6:00 PM', 'Bambike HQ, Plaza San Luis Complex. Real St .cor, M General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1371, 'San Agustin Church', 'Landmark 16th century Baroque church. Historic church constructed starting in the 16th century with vaulted ceilings & detailed frescoes.', '14.5886384', '120.974881', '//lh4.googleusercontent.com/proxy/PS7QMN4vnHwoxnrXoDpPSa35Gn0ctI9L-7GcntNepykEP7k8jExX6PzhjEdLtRYSYZdGP8w_e1icPQ-SD3Uc1XTrYxTyRlA0ZwXJXvYHwMrMMAsg9OvptImEPBuWETR8j55eFwwQI89m3J08-e3AtJL9SQeMiT0=w131-h92-k-no', 4.6, 2863, 'Church', 1, '', 'General Luna St, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1373, 'Memorare - Manila 1945 Monument and Memorare - Manila 1945 Historical Marker', '', '14.5904387', '120.9744057', 'https://lh5.googleusercontent.com/p/AF1QipOxCh_gNT7nh2Gv2PS__H5yAE-RAZdo-6B0wCvT=w122-h92-k-no', 4.2, 67, 'Historical landmark', 1, 'Open 24 hours', 'General Luna St, Intramuros, 658 Zone 70, Maynila, 1002 Kalakhang Maynila, Philippines', 'Intramuros'),
(1374, 'Victims of Martial Law Memorial Wall, Manila', '', '14.5912034', '120.9814083', 'https://lh5.googleusercontent.com/p/AF1QipNmKj7JuHVuKhMa3VJ7bulk7PD6mrImF_7jac9t=w80-h139-k-no', 0, 0, 'Historical landmark', 1, 'Open 24 hours', 'Heroes Park, 1000 Cecilia Muñoz St, Ermita, Manila, 1000 Metro Manila, Philippines', 'Ermita'),
(1375, 'Gusali ng Lungsod ng Maynila Historical Marker', '', '14.5897', '120.98162', 'https://lh5.googleusercontent.com/p/AF1QipMvOcEZmhEGSJppI-IsOjVKn0V4gMh6NvXQsaRh=w80-h137-k-no', 0, 0, 'Historical landmark', 1, '', '659, Ermita, Manila, 1000 Metro Manila, Philippines', 'Ermita'),
(1376, 'Jose P. Laurel Historical Marker - Intramuros', '', '14.5920001', '120.9780101', 'https://lh5.googleusercontent.com/p/AF1QipPuZ-iJn8887who7I2Zx6OgdHqxSVIQvxgG-dKm=w80-h137-k-no', 0, 0, 'Historical landmark', 1, '', '658, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1377, 'Manila High School Historical Marker', '', '14.5893734', '120.9786422', 'https://lh5.googleusercontent.com/p/AF1QipPH01OkCS3gCj2pauXojTNYard6X9elrbcp6qlo=w80-h140-k-no', 0, 0, 'Historical landmark', 1, '', '1002 Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Intramuros'),
(1567, 'Eng Bee Tin Chinese Deli (Hopia King Bakery)', 'The best Hopia in town. Eng Bee Tin not only specializes in hopia but with all Chinese deli like rolls, jerky, breads, and a lot of more.', '14.600210877125786', '120.97510775726832', 'http://www.senyorita.net/wp-content/uploads/2011/12/Binondo-Eng-Bee-Tin.jpg', 4.6, 580, 'Restaurant', 2, '11am–7pm', '628 Ongpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1568, 'Tasty Dumplings', NULL, '14.600678445308054', '120.9748661717721', 'https://youimg1.tripcdn.com/target/100vhk1249sgpjbvlFBB5.jpg', 4.3, 174, 'Restaurant', 2, '9am–10pm', 'Wellington Building, Norberto Ty St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1569, 'Chuan Kee Chinese Fast Foods', NULL, '14.60045606543544', '120.97555852062783', 'https://fastly.4sqi.net/img/general/600x600/14063841__UDrvjQxQJmPPOPQxRwNTidpPMgsR63-RiTjv1o4jww.jpg', 4.2, 244, 'Restaurant', 1, '9am–9pm', '650 Ongpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1570, 'Quik Snack', NULL, '14.599677742445953', '120.97550050652411', 'https://b.zmtcdn.com/data/reviews_photos/5ab/ddb1c98aea564425631f80c6691c55ab_1609171589.jpg', 4.4, 92, 'Restaurant', 1, '9am–9pm', 'Carvajal St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1571, 'Sincerity Restaurant', ' Sincerity Restaurant is a sure must-try for a Binondo Food Trip because of its unique chicken (and other dishes).', '14.599420300235117', '120.9762200060462', 'https://alwayshungry.ph/wp-content/uploads/75e62a80178f89339c0cf296fed1ac98_1535990206.jpg', 4.2, 557, 'Restaurant', 1, '10am–10pm', 'Carvajal St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1572, '24 Chicken', '', '14.600119542906926', '120.97627661983353', 'https://buzzsetter.com/wp-content/uploads/2020/10/PicsArt_10-04-08.33.18-628x628.jpg', 3.9, 17, 'Restaurant', 1, '10am–10pm', '1006 Tomas Pinpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1577, 'Lords Stow', '', '14.600963446087691', '120.97585531818184', 'https://lh5.googleusercontent.com/p/AF1QipM5jzBKJaGWhRhJI4-S6IFYsQBUfZonTNTwAA7Q=w520-h240-k-no', 4.6, 19, 'Restaurant', 1, '10am–10pm', 'G/F Imperial Sky Garden, 707 Ongpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1578, 'Tea Brothers', '', '14.60019652070383', '120.97510109988352', 'https://b.zmtcdn.com/data/pictures/5/19151835/7ae7f04821926ec9c54d5ba9bf6f0210.jpg', 4.2, 1, 'Restaurant', 2, '11am–8pm', '628 Ongpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1579, 'Plaza Lorenzo Ruiz', 'Plaza San Lorenzo Ruiz or Plaza Lorenzo Ruiz is a major public square in Binondo, Manila, bounded by Quintin Paredes Street to the east and Juan Luna Street to the west, parallel to the Estero de Binondo.', '14.600333370039703', '120.97377827159895', 'https://b.zmtcdn.com/data/pictures/5/19151835/7ae7f04821926ec9c54d5ba9bf6f0210.jpg', 4, 328, 'Park', 1, '11am–8pm', 'San Lorenzo Ruiz Monument, Quintin Paredes Rd, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1583, 'Mehan Garden', '', '14.592281693232396', '120.9808766405832', 'https://thumbs.dreamstime.com/b/water-fountain-mehan-garden-manila-philippines-manila-ph-nov-water-fountain-mehan-garden-november-manila-192751061.jpg', 4.5, 160, 'Park', 1, '8am–5pm', 'Taft Ave, Ermita, Manila, 1000', 'Ermita'),
(1584, 'Chinese Garden', '', '14.58356718503381', '120.97747136757015', 'https://thumbs.dreamstime.com/b/chinese-garden-inside-rizal-park-manila-philippines-ph-dec-december-roxas-boulevard-one-major-tourist-attractions-173544664.jpg', 4.4, 25, 'Park', 1, '7:30am–6pm', 'Luneta Park, Ermita, Manila, 1000', 'Ermita'),
(1585, 'Puerta del Parian', '', '14.592454044842569', '120.97812172339277', 'https://i1.wp.com/c1.staticflickr.com/5/4531/38331543572_c38f7f1293_b.jpg?ssl=1', 4.5, 26, 'Park', 1, 'Temporary Closed', '465 Muralla St, Intramuros, Manila, 1000', 'Intramuros'),
(1586, 'Puerta Real Gardens', '', '14.586081232285485', '120.9774470982541', 'https://brideworthy.libpx.com/images/public/venuebanner/venues_1456154070_8779_8921.jpg?upscale=false&width=1024&height=768&signature=dade83c08ebc1897aa1a71807f85772707167934', 4.6, 37, 'Park', 2, 'Temporary Closed', 'Intramuros, Manila, 1000', 'Intramuros'),
(1587, 'The Dungeons', '', '14.595002843373262', '120.96959244594235', 'https://primer.com.ph/blog/wp-content/uploads/sites/14/2020/02/Dungeon-1.jpg', 4.3, 26, 'Park', 2, '2 p.m - 10 p.m.', 'Gen Mona St Cor Sta Clara St Fort Santiago Maestranza, Brgy 655 Zone 69, Manila, 1032', 'Intramuros'),
(1588, 'Plaza Roma', '', '14.592265582895202', '120.97308499640582', 'http://photos.wikimapia.org/p/00/00/50/82/75_big.jpg', 4.6, 357, 'Park', 1, '24 hrs', 'Intramuros, Manila, 1002', 'Intramuros'),
(1589, 'Plaza Lawton', '', '14.594426465666311', '120.97944607968918', 'https://i.pinimg.com/originals/27/58/f2/2758f261468caa29d5fa6b4b51f75f0f.jpg', 3.9, 357, 'Park', 1, '24 hrs', 'Magallanes Dr, Ermita, Manila, 1000', 'Ermita'),
(1596, 'Binondo Church', '', '14.599984049754239', '120.97424675592528', 'http://cdn4.zipmatch.com/blog/wp-content/uploads/2016/06/02060644/binondo-church.jpg', 4.5, 2, 'Church', 1, '9 A.M. - 5:30 P.M.', '1006 Plaza Lorenzo Ruiz, Binondo, 1006', 'Binondo'),
(1597, 'Philippine Buddhist Tibetan Palyul Center Manila', '', '14.607037010387216', '121.01033086941882', 'http://palyulph.org/wp-content/uploads/2018/09/Philippine-Palyul-Buddhist-Temple-side1-1.jpg', 4.5, 23, 'Church', 1, 'Temporarily Closed', '700 Piña Ave, Santa Mesa, Manila, 1016', 'Sta Mesa'),
(1598, 'Khalsa Diwan Temple', '', '14.585218034773163', '120.99289581359606', 'https://mithunonthe.net/wp-content/uploads/2014/01/khalsa-dewan-sikh-temple-manila-philippines.jpg', 4.9, 237, 'Church', 1, 'Temporarily Closed', 'United Nations Ave, Paco, Manila', 'Paco'),
(1599, 'Seng Guan Temple', '', '14.607814684233086', ' 120.97462040805097', 'http://photos.wikimapia.org/p/00/00/36/39/52_big.jpg', 4.3, 215, 'Church', 1, 'Temporarily Closed', 'Narra St, Tondo, Manila', 'Tondo'),
(1600, 'Manila Buddha Temple', '', '14.606386526199941', '120.97739315658232', 'https://upload.wikimedia.org/wikipedia/commons/2/2b/09962jfManila_Buddha_Temple_Masangkay_Binondo%2C_Manilafvf_14.JPG', 4.9, 7, 'Church', 1, 'Temporarily Closed', 'Masangkay St, 266 Zone 24 Tondo, Manila, 1003', 'Tondo'),
(1601, '1010cafe', '', '14.613265389802018', '120.96901719855202', 'https://lh5.googleusercontent.com/p/AF1QipMVIVH30jhHlZCd0d5GEXApqjPnfARlLc8rBfHt=w408-h548-k-no', 3.9, 45, 'Restaurant', 2, '2pm-2am', '\'1528 N Zamora St, Tondo, Manila, 1012 Metro Manila, tondo manila, 1012 Metro Manila\'', 'Tondo'),
(1602, '24k Bakery', '', '14.633083463212596', '120.96708576025947', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=uN6wO9ItSF4NxB3DSXE4ig&cb_client=search.gws-prod.gps&w=408&h=240&yaw=114.67578&pitch=0&thumbfov=100', 5, 3, 'Restaurant', 1, '7am-9pm', '\'Paulino St, Tondo, Manila, 1012 Metro Manila\'', 'Tondo'),
(1603, '88 Fast Food', '', '14.604784277432385', '120.97319089593617', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=F_t7qYz3xgI6Yhk_pCqZ_g&cb_client=search.gws-prod.gps&w=408&h=240&yaw=8.875437&pitch=0&thumbfov=100', 0, 0, 'Restaurant', 1, '8am-9pm', '\'Food Court, 999 Mall Felipe II St, Binondo, Manila, 1006 Metro Manila\'', 'Binondo'),
(1604, 'ahkis sizzling hauz', '', '14.607869411153438', '120.98082381811459', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=iatzH5wp2TJpM_dsveIqqg&cb_client=search.gws-prod.gps&w=408&h=240&yaw=166.45459&pitch=0&thumbfov=100', 3.7, 3, 'Restaurant', 1, '9am-9pm', '\'1510 Fugoso St, Santa Cruz, Manila, 1008 Metro Manila\'', 'Santa Cruz'),
(1605, 'AJ Takoyaki Express - Bambang', '', '14.610982885689237', '120.98519371372846', 'https://lh5.googleusercontent.com/p/AF1QipOQNxg_ijuUBmoPAIbxnamhyEgKKaD1xno8OF2Q=w408-h544-k-no', 3.4, 7, 'Restaurant', 1, '', '\'1749, 1008 Bambang St, Santa Cruz, Manila, 1008 Metro Manila\'', 'Santa Cruz'),
(1606, 'Ampie\'s Café & Samgyupsal', '', '14.61244078648246', '120.96752467741594', 'https://lh5.googleusercontent.com/p/AF1QipOD5bRy0vcQy5o72Fz5vfJjtB211r1cSc0NPNBv=w408-h306-k-no', 4.7, 3, 'Restaurant', 2, '3pm-12am', '\'1415 Franco Street, corner Perla St, Tondo, Manila, 1012 Metro Manila\'', 'Tondo'),
(1607, 'Angel\'s Burger Quezon st. Tondo', '', '14.614830689064892', '120.96256601896886', '\'https://b.zmtcdn.com/data/pictures/5/19316745/8800d35609628a3c5622f12d14269323.jpg?fit=around|750:500&crop=750:500;*,*\'', 4, 2, 'Restaurant', 1, '24hrs', '\'79 Quezon St, Tondo, Manila, Metro Manila\'', 'Tondo'),
(1608, 'Bambang Street Food Garage', '', '14.61107184145483', '120.9841332506978', 'https://lh5.googleusercontent.com/p/AF1QipNpPswBDFqEgNYDIFM5uDYSnRMP0vXE2SIFy2iU=w408-h721-k-no', 3.5, 4, 'Restaurant', 2, '2pm-2am', '\'1681 Bambang St, Santa Cruz, Manila, Metro Manila\'', 'Santa Cruz'),
(1609, 'Banqueta Burger and Milk Tea Shop', '', '14.61455166', '120.9634881', 'https://10619-2.s.cdn12.com/rests/original/334_508026859.jpg', 4.4, 36, 'Restaurant', 2, '2pm-12am', '\'156 Osmeña St, Tondo, Manila, 1012 Metro Manila\'', 'Tondo'),
(1610, 'Bogzki\'s Food Garage', '', '14.617054701873673', '120.96934979247546', 'https://lh5.googleusercontent.com/p/AF1QipOkNVWgJZslwpF2S7hYgluLHNbKjshc3RpxqelJ=w408-h306-k-no', 4.4, 50, 'Restaurant', 2, '2pm-9pm', '\'613 Francisco St, Tondo, Manila, 1012 Metro Manila\'', 'Tondo'),
(1611, 'Bubble Kada', '', '14.611159038009063', '120.97591857785547', 'https://lh5.googleusercontent.com/p/AF1QipNAuGuJ8FpGc1W037_UBIORjcxB5yeLGbjM3ipg=w408-h306-k-no', 4, 11, 'Restaurant', 2, '', '\'1463 Abad Santos Ave, Tondo, Manila, Metro Manila\'', 'Tondo'),
(1612, 'Café Primero', '', '14.61425962625931', '120.96377924670392', 'https://lh5.googleusercontent.com/p/AF1QipNoi1gZGoY-1dc4s-eiQeidY6sr67uim4NEVcZd=w408-h306-k-no', 0, 0, 'Restaurant', 2, '2pm-11pm', '\'I / II, 111 Pacheco St, Tondo, Manila, 1013 Metro Manila\'', 'Tondo'),
(1613, 'Chai Cafe Binondo', '', '14.60426099490516', '120.97272627636686', '\'https://b.zmtcdn.com/data/pictures/2/6304302/5556396d69f7cc0725e8de43a628b429_featured_v2.jpg?fit=around|771.75:416.25&crop=771.75:416.25;*,*\'', 0, 0, 'Restaurant', 2, '10am-9pm', '\'Lucky Chinatown Mall 3 (Cityplace Square) 3rd Floor Cityplace Square, Binondo, Manila Operating Hours, Dela Reina St, Binondo, Maynila, Kalakhang Maynila\'', 'Binondo'),
(1614, 'Chef-O Pizza Shop', '', '14.615175609929386', '120.9664218593452', 'https://lh5.googleusercontent.com/p/AF1QipNq0fwtstUuHARqopn5NW-_3XpT_JFoD3zCyFqn=w408-h306-k-no', 3.9, 36, 'Restaurant', 2, '2pm-2am', '\'1611 Peñalosa St, Tondo, Manila, Metro Manila\'', 'Tondo'),
(1615, 'Chowking Binondo', '', '14.601398137223939', '120.97350157170476', 'https://lh5.googleusercontent.com/p/AF1QipOJIggKJQlAfE84hWZuT0PhrbkkosYliF1y7fKn=w408-h544-k-no', 3.5, 83, 'Restaurant', 1, '24hrs', '\'703 Reina Regente St, Binondo, Manila, 1006 Metro Manila\'', 'Binondo'),
(1616, 'CuP HaP Coral Milk Tea Store', '', '14.613399296477835', '120.96612118186665', 'https://lh5.googleusercontent.com/p/AF1QipNuckFNRqxAqcqohOXy5Ag0A-779S2MYiROWFEn=w408-h593-k-no', 4.7, 3, 'Restaurant', 1, '', '\'Coral St, Varona St, Tondo, Manila, Metro Manila\'', 'Tondo'),
(1617, 'DonJar Big Burgers Balut Tondo', '', '14.629995856601807', '120.96607189655172', 'https://lh5.googleusercontent.com/p/AF1QipNe5dswWZGfkii8eyInxL0gFRT8ddKbqrwOqPbi=w408-h272-k-no', 4.4, 45, 'Restaurant', 1, '12pm-11pm', 'Salonga St, Tondo, Manila, Metro Manila\'', 'Tondo'),
(1618, 'Ethan King\'s Restaurant', '', '14.625296154601541', '120.96745017291681', 'https://lh5.googleusercontent.com/p/AF1QipP4fhhI_hIVL8cva2Lf_P9396jOsXa9wZqsb69j=w408-h306-k-no', 4.6, 7, 'Restaurant', 1, '10am-10pm', '\'451 Honorio Lopez Blvd, Tondo, Manila, Metro Manila\'', 'Tondo'),
(1619, 'Excelente Chinese Cooked Ham', '', '14.597779291040924', '120.98267657358879', 'https://lh5.googleusercontent.com/p/AF1QipMFgUt9pUKwlpKqvvoTNB_whvmC714ej0zPNdAI=w408-h306-k-no', 4.4, 469, 'Restaurant', 3, '8am-6pm', '\'Quiapo, Manila, 1001 Metro Manila\'', 'Quiapo'),
(1620, 'Food Trip', '', '14.619052382762325', '120.96580547188091', 'https://lh5.googleusercontent.com/p/AF1QipM70RXOLfc5FdaMLk5we9A4dX-a4HR3qqZLGoQ8=w424-h240-k-no', 3, 2, 'Restaurant', 1, '7am-8:30pm', '\'1872 Velasquez St, Tondo 95, Manila, 1012 Metro Manila\'', 'Tondo'),
(1621, 'Ilang-Ilang Restaurant', '', '14.600158312362641', '120.971596043157', 'https://lh5.googleusercontent.com/p/AF1QipO76ZQCpNSZodwxtB2roZpLGo1XES4uzFRfJAQE=w408-h544-k-no', 3.6, 104, 'Restaurant', 1, '8am-9:30pm', '\'551 Ilang-Ilang St, Binondo, Manila, Metro Manila\'', 'Binondo'),
(1622, 'Janby\'s Restaurant', '', '14.628983182751266', '120.96451672912441', 'https://lh5.googleusercontent.com/p/AF1QipPUxywU7ZnreukY3aP3e1BYndmsQeVl97GH_T73=w426-h240-k-no', 4.4, 30, 'Restaurant', 1, '8am-12pm', '\'Zone 011, Balut, 2179 Buendia St, Tondo, Manila\'', 'Tondo'),
(1623, 'Jollibee Padre Rada', '\'Philippines-based chain known for its burgers, fried chicken, spaghetti & Filipino dishes.\'', '14.606413034484945', '120.97015316229086', 'https://lh5.googleusercontent.com/p/AF1QipPz4nRFzBsWV-PUSsWiktB7mXy4om9S97JhHuEA=w408-h544-k-no', 4.4, 211, 'Fast Food', 1, '6am-9pm', '\'Padre Rada, cor Juan Luna St, Tondo, Manila City, Metro Manila\'', 'Tondo'),
(1624, 'Jollibee Plaza Lorenzo Ruiz', '\'Philippines-based chain known for its burgers, fried chicken, spaghetti & Filipino dishes.\'', '14.601027092324312', '120.97341586422942', 'https://lh5.googleusercontent.com/p/AF1QipOF-48PQCxl9TCWkD70GfKH3LvIX9GJeyWR7F08=w408-h272-k-no', 3.8, 200, 'Fast Food', 1, '6am-11pm', '\'WELLHOUSE bldg J. LUNA STREET CORNER R. REGENTE STREET, Manila Manila City, Metro Manila\'', 'Binondo'),
(1625, 'Just Get in Restaurant', '', '14.597235867145377', '120.98310328972028', 'https://lh5.googleusercontent.com/p/AF1QipPT5dXZW9JM0uwNGcO8NwqsSyU7IAthh7PEkkIH=w408-h306-k-no', 4, 1, 'Restaurant', 1, '9am-9pm', '\'208, 1001 Villalobos St, Quiapo, Manila, 1001 Metro Manila\'', 'Quiapo'),
(1626, 'Kaely\'s Sweet\'s', '', '14.632046865972745', '120.97123200665646', 'https://lh5.googleusercontent.com/p/AF1QipNeQaShOq7mUt-koU3dqNGqb61P9h5Hkn-3jpeD=w408-h272-k-no', 5, 1, 'Cake Shop', 2, '', '\'571 L . Ramirez street gagalangin, Tondo, Manila\'', 'Tondo'),
(1627, 'King\'s Bakeshop', '', '14.610102141769909', '120.97953610827646', 'https://lh5.googleusercontent.com/proxy/sIxQPJTzqIlJh6_gt9c36BM5GQX-LQtUUxbYASUw88lfPtJhq6ww4CR0PhDgirqA4jJ5Evt8lf2s4Z7oTzrfs5_L_IyYxdq0NuLAzM-WjK9ZcNXVeadWmXh3WTTnG3TgV2KiyGJqFe4jQbbn2FbNcQpLBaiSi2KcIGKT-tAaO9kI=w426-h240-k-no', 4.4, 23, 'Bakery', 2, '8am-8pm', '\'1417 Masangkay St, Santa Cruz, Manila City, 1003 Metro Manila\'', 'Santa Cruz'),
(1628, 'Krushed Tea Krab Cafe', '', '14.615044799299806', '120.9632619470231', 'https://lh5.googleusercontent.com/p/AF1QipMOeYwoVwCddv2b5BonLigzCkEVM-5lphjgN4IP=w408-h547-k-no', 0, 0, 'Restaurant', 2, '2pm-10pm', '\'A, 154, 1012 Osmeña St, Tondo, Manila, 1012 Metro Manila\'', 'Tondo'),
(1629, 'Kurt Clyde Canteen', '', '14.613108283282662', '120.97998004414958', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=OpNQIffXLlIbbwHgLesSkg&cb_client=search.gws-prod.gps&w=408&h=240&yaw=250.78714&pitch=0&thumbfov=100', 0, 0, 'Restaurant', 3, '', '\'1657 Ipil St, Santa Cruz, Manila, 1003 Metro Manila\'', 'Santa Cruz'),
(1630, 'Liberty Food Mart', '', '14.611636995763492', '120.96882960967815', 'https://lh5.googleusercontent.com/p/AF1QipM3t411HQWPceTzKg0qgi-g-Ua6CXSYZZJEBtzy=w408-h306-k-no', 4.4, 54, 'Restaurant', 2, '6am-9pm', '\'1401 Nicolas Zamora St, Tondo, Manila City, 1013 Metro Manila\'', 'Tondo'),
(1631, 'Mae San Cakes & Pastries', '', '14.60793612894245', '120.9828987798333', 'https://lh5.googleusercontent.com/p/AF1QipOFyRgpm4l5GU3RPQoHeugGfDIY0o_NnN333jc1=w426-h240-k-no', 4.3, 406, 'Restaurant', 2, '7am-10pm', '\'1641 Fugoso St, Santa Cruz, Manila, 1008 Metro Manila\'', 'Santa Cruz'),
(1632, 'McDonald\'s KP Tower', '\'Classic, long-running fast-food chain known for its burgers & fries.\'', '14.605671290003778', '120.97073237183281', 'https://divisoriaguide.files.wordpress.com/2014/04/kp-tower.png?w=676', 4, 268, 'Restaurant', 1, '6am-2am', '\'Juan Luna St, San Nicolas, Manila, 1800 Metro Manila\'', 'San Nicolas'),
(1633, 'McDonald\'s Recto Santa Cruz', '\'Classic, long-running fast-food chain known for its burgers & fries.\'', '14.603662973480054', '120.9818251841177', 'https://lh5.googleusercontent.com/p/AF1QipNW-X9mOVGZxJLtLq9GTP8ds_OO_hujC6yzy19O=w426-h240-k-no', 4, 228, 'Restaurant', 1, '6am-2am', '\'1552 Recto Ave, Santa Cruz, Manila, 1003 Metro Manila\'', 'Santa Cruz'),
(1634, 'MLR Bakery', '', '14.63230601573759', '120.96976760250499', 'https://lh3.googleusercontent.com/proxy/C8_T9byGlZy7Msv5viZBER3AkxXqsqigcO6cCdnHipVdXUtg3O8A_IjxCg-ctbq_XARlD_sjb4mc53tQEyROUNl3OQXLhxeIESfO8xXsOZx90EohsZes79hOUIiLnjJrRuCJ7KKWFVJpEtTY0HMcZWVHBAVBEEDwb7q8w5H-vXAn=w408-h725-k-no', 4.3, 4, 'Bakery', 1, '24hrs', '\'266 Rodriguez St, 145 Zone 12, Manila, 1013 Metro Manila\'', 'Tondo'),
(1635, 'My Cha Tea Lounge', '', '14.614846261603049', '120.96269476500376', '\'https://b.zmtcdn.com/data/pictures/7/19482417/e7a79d269bfd9c75095a12090ccbcfa6.jpg?fit=around|750:500&crop=750:500;*,*\'', 4.2, 5, 'Restaurant', 2, '', '\'79 Quezon St, Tondo, Manila, Metro Manila\'', 'Tondo'),
(1636, 'New Po Heng Lumpia House', '', '14.599684777609838', '120.975490887213', 'https://lh5.googleusercontent.com/p/AF1QipPLVK0Pda2VvmhikpnEKt2zSCsN8PPrudvKTEfZ=w408-h544-k-no', 4.3, 305, 'Restaurant', 1, '8:30-5:30pm', '\'621, 1006 Carvajal St, Binondo, Manila, 1006 Metro Manila\'', 'Binondo'),
(1637, 'Ninik\'s Lechon Manok', '', '14.631626167645265', '120.9685119020446', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=o6Fj70lbJ_tZVjLXEJUV9g&cb_client=search.gws-prod.gps&w=408&h=240&yaw=333.3923&pitch=0&thumbfov=100', 5, 2, 'Restaurant', 1, '', '\'Rodriguez St, 146 Zone 12, Manila, 1013 Metro Manila\'', 'Tondo'),
(1638, 'Ongpin Mañosa Restaurant Co.', '', '14.60142018782319', '120.97888770298411', 'https://lh5.googleusercontent.com/p/AF1QipM_mh6P-G_O6kYzcPKciaMY-C13e5clYq_5lo1I=w426-h240-k-no', 4, 199, 'Restaurant', 1, '8am-9pm', '\'1003, 926 Ongpin St, Santa Cruz, Maynila, 1003 Kalakhang Maynila\'', 'Santa Cruz'),
(1639, 'Pacheco Corner', '', '14.614282574243378', '120.96522599285566', 'https://lh5.googleusercontent.com/p/AF1QipNLr7thB4rT6pmLgaLuhBqhu3MgMxvXtbNoTZlC=w408-h306-k-no', 4.8, 8, 'Restaurant', 1, '5pm-12am', '\'417 Pacheco St, Tondo, Manila, Metro Manila\'', 'Tondo'),
(1640, 'Paluto Nga Po Sizzling', '', '14.613790240926576', '120.96653192082465', 'https://lh5.googleusercontent.com/p/AF1QipMHDQVzIhQpSAJRGEu3Cq1ltTBMhCAABPTEeT_U=w408-h544-k-no', 3.7, 62, 'Restaurant', 1, '8am-11pm', '\'1538 Velasquez St, 74-Zone 6, Manila, 1013 Metro Manila\'', 'Tondo'),
(1641, 'Pastora Pancit Palabok', '', '14.596301771040968', '120.98274870765428', 'https://lh5.googleusercontent.com/p/AF1QipPUTsrjNcnAl5nf4GvahLrUIf6RIDhgpFQJaYNP=w408-h408-k-no', 4.7, 33, 'Restaurant', 1, '10am-6pm', '\'Carlos Palanca, Quiapo, Manila, 1001 Metro Manila\'', 'Quiapo'),
(1642, 'Pa-Wok Manila', '', '14.610762226415945', '120.97114527035912', 'https://lh5.googleusercontent.com/p/AF1QipPKjqwxhOtUDAGkRzCe16e6GDP1Pjr6wv22TQ41=w486-h240-k-no', 0, 0, 'Restaurant', 2, '3pm-11pm', '\'788 pavia, Juan Luna St, Tondo, Manila, 1012 Metro Manila\'', 'Tondo'),
(1643, 'Plato Rustico', '', '14.612731476840874', '120.96909108750695', 'https://lh5.googleusercontent.com/p/AF1QipNNRbQQswzHdwfMaYmM68lAvVrh8Tre_qdbPAwe=w426-h240-k-no', 5, 6, 'Restaurant', 2, '', '\'Zone 5, 1502 Nicolas Zamora St, Tondo, Manila, 1013 Metro Manila\'', 'Tondo'),
(1644, 'Rosas Pancitan', '', '14.598189022358342', '120.9830934402224', 'https://lh5.googleusercontent.com/p/AF1QipOe9cZIv2Z1mgJywmRBQqxtBS2NuuT_rqAzaULB=w408-h306-k-no', 5, 1, 'Restaurant', 1, '10am-9pm', '\'738 B, R. Hidalgo Street, Quiapo, 1001 Metro Manila\'', 'Quiapo'),
(1645, 'santeano milk tea & burger house', '', '14.61427496738424', '120.96816606181821', 'ax9e-hero.jpg (4000×2925) (deliveryhero.io)', 4.3, 3, 'Restaurant', 1, '5pm-12am', '\'1594 franco st, corner Pitong Gatang St\'', 'Tondo'),
(1646, 'Selah 1st Cafe', '', '14.632597310049917', '120.96723788292948', 'https://lh5.googleusercontent.com/p/AF1QipP7J0LJgoFbeig1LaLY6t8e1Pw98I4SxNnTtKas=w426-h240-k-no', 4.7, 9, 'Café', 2, '1pm-11pm', '\'142 Zone 12, 181 Nepa Street, 142 Zone 12, Manila, 1013 Metro Manila\'', 'Tondo'),
(1647, 'Serves Well Food Center', '', '14.604506427827683', '120.9709816122564', 'https://lh5.googleusercontent.com/p/AF1QipNMVbzFCMzxWgWfdkVvjwSiM7QLLd_tt_fZMQDZ=w408-h408-k-no', 4.1, 28, 'Restaurant', 1, '7am-7pm', '\'782 Juan Luna St, Binondo, Manila, Metro Manila\'', 'Binondo'),
(1648, 'Shi Lin Binondo', '', '14.60381023395169', '120.97429549239838', 'https://lh5.googleusercontent.com/p/AF1QipNM80eJ4K2SP70Z0TBWsGk4_-FuJIiiDv2KszcK=w408-h306-k-no', 4.1, 105, 'Restaurant', 3, '10am-5:30pm', '\'Lucky Chinatown Mall, Reina Regente St, Binondo, Manila, 1006 Metro Manila\'', 'Binondo'),
(1649, 'Shugs Palutan', '', '14.615708493158255', '120.96261883174864', 'https://lh5.googleusercontent.com/p/AF1QipOD2HV0whsymDI2XMyP7hfUUV7RzA12gkNLQUEK=w408-h302-k-no', 5, 1, 'Restaurant', 1, '', '\'Quezon St, Tondo, Manila, Metro Manila\'', 'Tondo'),
(1650, 'Steak & Roll', '', '14.615982032247107', '120.9659318578212', 'https://lh5.googleusercontent.com/p/AF1QipOqJKl2UA5Nqi5MR33CJRW_ngcjVYx2AXy0A0WQ=w426-h240-k-no', 4, 3, 'Restaurant', 2, '4pm-12am', '\'1676, 1013 Varona St, Tondo, Manila, Metro Manila\'', 'Tondo'),
(1651, 'Sushi Hub', '', '14.629617887330818', '120.9674649138207', 'https://lh5.googleusercontent.com/p/AF1QipOQHTQK9bdva5wu9rjOxNJl6yLmwnXWls7CqzMN=w408-h544-k-no', 5, 2, 'Restaurant', 1, '11am-8pm', '\'Tondo, Manila, Metro Manila\'', 'Tondo'),
(1652, 'Tea Time', '', '14.633440339085583', '120.96739857966047', 'https://lh5.googleusercontent.com/p/AF1QipPdWQd1bduBUPvnMOqeGgoyfUoOwTikj7QpAi7b=w408-h306-k-no', 4.7, 7, 'Café', 2, '3pm-12am', '\'147 san pedro street, corner Paulino St, balut tondo, Manila\'', 'Tondo'),
(1653, 'the aTEAlier', '', '14.615767634819058', '120.96202689495794', 'https://lh5.googleusercontent.com/p/AF1QipMf4wWc8XPkIzfLanYQe-16cBW5CWzYZl5WafEA=w408-h342-k-no', 0, 0, 'Restaurant', 2, '2pm-10pm', '\'124 Laurel St, Tondo, Manila, 1012 Metro Manila\'', 'Tondo'),
(1654, 'Tumbungan sa tondo', '', '14.619073145747297', '120.96529048774143', 'https://lh5.googleusercontent.com/p/AF1QipNvl_GRRhIrddSxdcagKqb0oTk8DKE5jJ9F_Wzl=w408-h306-k-no', 4.9, 15, 'Restaurant', 1, '5pm-2am', '\'1871 F.varona, corner February St, Tondo, Manila, 1012\'', 'Tondo'),
(1655, 'UCC Coffee', '', '14.60324185923654', '120.97313026668922', 'https://lh5.googleusercontent.com/p/AF1QipOS9Rc9vHD8ZsanZ0U2sMBFUfmLqzFbksUSrlCP=w408-h306-k-no', 4.2, 23, 'Restaurant', 1, '10am-10pm', '\'Ground Floor, Lucky China Town, Lachambre St, Binondo, Manila, 1202 Metro Manila\'', 'Binondo'),
(1665, '1199 Wellness and Cafe', '', '14.60740846', '120.9637402', 'https://lh5.googleusercontent.com/p/AF1QipPoZ0LchwWd4cNm4XM4asaZYHVh7kFVdeiwjdqh=w408-h906-k-no', 4.9, 15, 'Restaurant', 2, '', '1199 Wagas St, Tondo, 1012 Metro Manila', 'Tondo'),
(1666, '1919 Grand Cafe', '', '14.59680861', '120.9755044', 'https://lh5.googleusercontent.com/p/AF1QipMRGGQk5BVwP6VCTEInqlerDQifb4QD4h6gIJte=w408-h264-k-no', 4.4, 497, 'Café', 2, '7am-9pm', '117 Juan Luna St, Binondo, Manila 1006 Metro Manila', 'Binondo'),
(1667, '24 Chicken T.pinpin - Binondo', '', '14.60006836', '120.9763155', 'https://lh5.googleusercontent.com/p/AF1QipP4DJ9tdVoeDSi9xpePJEFY3sJYWXxFhzLCEFKB=w408-h544-k-no', 3.9, 17, 'Restaurant', 1, '10am-7pm', '1006 Tomas Pinpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1668, 'Ambos Mundos Restaurant', '', '14.60366814', '120.9812769', 'https://lh5.googleusercontent.com/p/AF1QipOJyD6RiWbx4hgO_EE4aMzEZPSRbBubWa0CwRdK=w408-h305-k-no', 4.3, 61, 'Restaurant', 3, '7:30am-10pm', '750 F. Torres St, Santa Cruz, Manila, 1008 Metro Manila', 'Santa Cruz'),
(1669, 'Amis Restaurant', '', '14.5993491', '120.9824785', 'https://lh5.googleusercontent.com/p/AF1QipM8fHScbWXbxsNpY4TxkYugKGdR4B19-NJGYnF_=w408-h408-k-no', 4.1, 51, 'Restaurant', 2, '9am-8pm', '672 Carriedo St, Quiapo, Manila, 1001 Metro Manila', 'Quiapo'),
(1670, 'Ang Tunay Beef House', '', '14.60119898', '120.9771417', 'https://lh5.googleusercontent.com/p/AF1QipPZwr814JGfl_PLIHWkhWoo00fK3aZrmeaZnpKL=w426-h240-k-no', 4.3, 179, 'Eatery', 1, '10am-10pm', '825 Sabino Padilla St, Santa Cruz, Manila, 1003 Metro Manila', 'Santa Cruz'),
(1671, 'Basement Cafe', '', '14.61376265', '120.9668569', 'https://lh5.googleusercontent.com/p/AF1QipMXZugs1jykheeN20GTVzLl9YYj05tLjKtSYu9N=w426-h240-k-no', 4.2, 102, 'Café', 2, '2pm-10:30pm', '1531 Sta. Maria St, Tondo, Manila, Metro Manila', 'Tondo'),
(1672, 'Big Bowl Noodle', '', '14.59945602', '120.9762896', 'https://lh5.googleusercontent.com/p/AF1QipPc6X7t-MQCtZcETGPoVnzXR5DQN57cD1TJYO4Y=w408-h306-k-no', 4.5, 13, 'Restaurant', 1, '9am-9pm', '517 Yuchengco St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1673, 'Big Scoop ice Cream', '', '14.59752202', '120.9783405', 'https://lh5.googleusercontent.com/p/AF1QipOBX3T1rtWtvh5oABLhTKUb2CQ3esiCe1MF6LhM=w408-h544-k-no', 4.8, 5, 'Desert Shop', 2, '10am-9pm', '282 Escolta St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1674, 'Bon Appetea Escolta Manila', '', '14.59700134', '120.9777932', 'https://lh5.googleusercontent.com/p/AF1QipMeYK-54mvc5SAXNP0Y8bIDI5bjGgC-8GrgYuc=w408-h306-k-no', 4.2, 22, 'Café', 2, '9am-9pm', 'Escolta St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1675, 'Bulalord Manila', '', '14.60687324', '120.9658891', 'https://lh5.googleusercontent.com/p/AF1QipNk81HfyD4yDMHvDBEQmt2FT4ubQqg9-T3S8Qb8=w408-h305-k-no', 4.1, 27, 'Restaurant', 1, '12pm-10pm', '515 Lakandula St, Tondo, Metro Manila', 'Tondo'),
(1676, 'Burger Machine Binondo', '', '14.59785011', '120.9785376', 'https://lh5.googleusercontent.com/p/AF1QipODElWlk3VUHozXgh6nCuw5BYpetn3D4I_6IH61=w408-h306-k-no', 4.5, 2, 'Fast Food', 1, '8am-10pm', 'Escolta St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1677, 'Café Mezzanine', '', '14.60068127', '120.9753756', 'https://lh5.googleusercontent.com/p/AF1QipOnMiXU46t7-xusgj6zjHBixaCXGp3G-tDhCKG-=w408-h544-k-no', 4.2, 369, 'Café', 2, '8am-9pm', '650 Ongpin St, Binondo, 1006 Metro Manila', 'Tondo'),
(1678, 'Café Tribu', '', '14.61132906', '120.9665864', 'https://lh5.googleusercontent.com/p/AF1QipOhZ-0DEOQ0GzUJnFEFIP4AY4QSS8Q6xLxPUd6_=w408-h816-k-no', 4.1, 31, 'Café', 2, '', '1361 Sta. Maria St, Tondo, Metro Manila', 'Tondo'),
(1679, 'Causeway Seafood Restaurant ??????', '', '14.60772967', '120.978619', 'https://lh5.googleusercontent.com/p/AF1QipOIpaIWVw7mT_Affrgw9u3oqsj7g3JDMSEOOo_P=w408-h306-k-no', 4.3, 337, 'Restaurant', 2, '9am-11pm', '1261 Benavidez St, Tondo, 1008 Metro Manila', 'Tondo'),
(1680, 'Chades Tapsilog', '', '14.6122738', '120.9819394', 'https://lh5.googleusercontent.com/p/AF1QipOWosSTuhLNO5MOFg_PlWLi8ctAgswDGK4_bqZI=w408-h306-k-no', 4.2, 254, 'Restaurant', 1, '24hrs', '1566 Alvarez St, 334 Zone 33, Santa Cruz, 1003 Metro Manila', 'Santa Cruz'),
(1681, 'Chic-Boy (Intramuros)', '', '14.59354847', '120.9736376', 'https://lh5.googleusercontent.com/p/AF1QipMlK6013V0pwaVIDhms54P38tvgyaXAXZx6X3n5=w408-h306-k-no', 3.8, 183, 'Restaurant', 1, '9am-11pm', 'Dante Ang Bldg, No. 409 A. Soriano Ave, 656 Zone 69, Intramuros, 1002 Metro Manila', 'Intramuros'),
(1682, 'Chowking Plaza Leon', '', '14.6080273', '120.9667184', 'https://lh5.googleusercontent.com/p/AF1QipM6Ya6AFr6ExwfryT3mXxSVqOaJKA1XixHIZ9ed=w408-h725-k-no', 3.7, 121, 'Fast Food', 1, '7am-11pm', '1112 Soliman, Tondo, Metro Manila', 'Tondo'),
(1683, 'Chuan Kee Chinese Fast Food', '', '14.60042173', '120.975652', 'https://lh5.googleusercontent.com/p/AF1QipOMvQGd5XbP8AMyDXTzgsp20e7UsekBIG16C-AE=w426-h240-k-no', 4.2, 244, 'Fast Food', 1, '9am-9pm', '650 Ongpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1684, 'Cool-In Coffee Shop', '', '14.59834262', '120.9776419', 'https://lh5.googleusercontent.com/p/AF1QipPwfNyhnBISyOLhtENJ4EGfZWaFZ0BX_ypnj9gR=w408-h271-k-no', 4.3, 9, 'Café', 2, '7:30am-6pm', 'Marquina St, Binondo, 1006 Metro Manila', 'Binondo'),
(1685, 'Cupsilove', '', '14.60580626', '120.9643275', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=eyatY897W8IUusxCY9k4Yw&cb_client=search.gws-prod.gps&w=408&h=240&yaw=249.79927&pitch=0&thumbfov=100', 4.4, 8, 'Restaurant', 2, '', 'Lakandula St, Wagas St, Tondo, Metro Manila', 'Tondo'),
(1686, 'Curried Away - Juan Luna', '', '14.6124757', '120.9699031', 'https://lh5.googleusercontent.com/p/AF1QipO9uMbH_tnpmLbHpNXClfkGX0cvvKJmc9cPEvkv=w408-h306-k-no', 4.4, 23, 'Restaurant', 3, '9am-11pm', '1350 1012 Juan Luna St, Tondo,Metro Manila', 'Tondo'),
(1687, 'D Salas Kainan', '', '14.62022', '120.9742491', 'https://lh5.googleusercontent.com/p/AF1QipOsnVRzUhaqZgWRV1Tetn5C6tGI16Fhi6ABr_j1=w408-h306-k-no', 4.5, 153, 'Eatery', 1, '6am-11pm', 'Bgy 159, Zone 014, 2039 Dagupan Ext, Tondo, Manila, Metro Manila', 'Tondo'),
(1688, 'David\'s Tea House Frozen Dimsum - Factory Sale', '', '14.60699365', '120.9809546', 'https://lh5.googleusercontent.com/p/AF1QipN4prbM5w3K7oAdqquXOGjH7ORmJ4VhV_3U5ekI=w426-h240-k-no', 4.8, 4, 'Restaurant', 1, '9am-9pm', 'Tomas Mapua St, Santa Cruz, Manila, 1007 Metro Manila', 'Santa Cruz'),
(1689, 'Dedey\'s', '', '14.60993938', '120.9653659', 'https://lh5.googleusercontent.com/p/AF1QipMBcHOFNHRv19o6354LUq1lLlAa9CPUXDSjsMLW=w408-h306-k-no', 0, 0, 'Restaurant', 1, '10am-11pm', '298 Moriones St, Tondo, Manila, 1012 Metro Manila', 'Tondo'),
(1690, 'Delicious Restaurant', '', '14.60123153', '120.9809975', 'https://lh5.googleusercontent.com/p/AF1QipOQfR7Ax7EWCh4TJtA2bpKjKGEJpk7lZp_yzOUI=w408-h306-k-no', 4.2, 549, 'Restaurant', 2, '10am-2am', '550 F. Torres St, Santa Cruz, Manila, 1008 Metro Manila', 'Santa Cruz'),
(1691, 'DENNIS THE GRILLBOY- carriedo', '', '14.59917582', '120.9819631', 'https://lh5.googleusercontent.com/p/AF1QipNwpRoCax9bx5rFFGUeUcEaAMqUYWRLKUs20sdh=w408-h306-k-no', 4.2, 26, 'Restaurant', 1, '9:30am-7pm', 'Carriedo St, Quiapo, Manila, 1001 Metro Manila', 'Quiapo'),
(1692, 'Diner\'s Cafe Tondo', '', '14.61449975', '120.9641962', 'https://lh5.googleusercontent.com/p/AF1QipOlXt93_rAOEvdGbBik1y8viwikf-uMzT-j3g-Q=w581-h240-k-no', 4.3, 9, 'Café', 2, '2pm-3am', '180 Pacheco St, Tondo, Manila, 1004 Metro Manila', 'Tondo'),
(1693, 'Dong Bei Dumplings', '', '14.60148071', '120.9750538', 'https://lh5.googleusercontent.com/p/AF1QipPll-f5BRYut8div4WQOI7WlT475KW5oi-wnq8H=w506-h240-k-no', 4.1, 405, 'Restaurant', 1, '9am-9pm', '642 Yuchengco St, Binondo, 1006 Metro Manila', 'Binondo'),
(1694, 'Eng Bee Tin Chinese Deli (Hopia King Bakery) - Binondo', '', '14.60050477', '120.975161', 'https://lh5.googleusercontent.com/p/AF1QipNqsZMr1BmiHy5THBJiDIBqT7557sZ8l4fccDyD=w408-h305-k-no', 4.6, 581, 'Bakery', 2, '7am-6pm', '628 Ongpin St, Binondo, 1006 Metro Manila', 'Binondo'),
(1695, 'Escolta Ice Cream And Snacks', '', '14.5979571', '120.9786629', 'https://lh5.googleusercontent.com/p/AF1QipONc1qjh4knL7pmOoQXWCT3IZZ2u-7LcO17lN8=w408-h544-k-no', 4.2, 30, 'Desert Shop', 2, '10am-6pm', '275 Escolta St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1696, 'Golden Baboy - Morayta', '', '14.6014786', '120.9893106', 'https://lh5.googleusercontent.com/p/AF1QipPCLMPZKW4MD-9awi-pacM-JPul673cuiJYII9v=w408-h544-k-no', 4.2, 42, 'Restaurant', 2, '10am-10pm', '884 Nicanor Reyes St, Sampaloc, Manila, 1008 Metro Manila', 'Sampaloc'),
(1697, 'Golden Fortune Seafood Restaurant', '', '14.60377147', '120.9778523', 'https://lh5.googleusercontent.com/p/AF1QipNiXrzFlP_8mlihHmAvxj5YRaChVcmH0HGGd1i0=w408-h306-k-no', 4.2, 533, 'Restaurant', 3, '10am-9pm', 'Peace Hotel, G/F, 1283 Soler St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1698, 'Goldilocks Bakeshop', '', '14.60791359', '120.9666051', 'https://lh5.googleusercontent.com/proxy/2jFNlTD7MWnpI6LhxBXe9YXTVyTNMDPb7D2l_CUVxlllD739ajoyEhxftGOyqWDbFQXo-PJN2PgsMmm66ynm1MKk9D2-6ttSPY4k03Cn2fP3rHdDuGbIB60RDcoWiddr_5xi4qGUH8rLAEpWKd2vuNjAPDk-LzVJRvrFnj35xpAp=w408-h306-k-no', 4.7, 7, 'Cake Shop', 2, '9am-8pm', 'Soliman Streettondo, Ortega St, Tondo, Metro Manila', 'Tondo'),
(1699, 'Hideout House of Unlimeated', '', '14.6088043', '120.9649664', 'https://lh5.googleusercontent.com/p/AF1QipPuBK4dvedXdPnZV1OqBLBKhGPUZN5SxR2OYWVC=w439-h240-k-no', 4.5, 14, 'Restaurant', 2, '4pm-2am', 'Tuazon St, Tondo, Metro Manila', 'Tondo'),
(1700, 'House of DG', '', '14.62334479', '120.9645395', 'https://lh5.googleusercontent.com/p/AF1QipMiL0010yvMHnP2T2c8DIj_wNBS62HZEs-T2w7-=w408-h306-k-no', 4.4, 202, 'Restaurant', 1, '4pm-12am', 'Varona St, Tondo, Manila, Metro Manila', 'Tondo'),
(1701, 'Ikura Ramen Samgyup on Top', '', '14.62263886', '120.9611814', 'https://lh5.googleusercontent.com/p/AF1QipNHVlzFlagWTOlbH0oKRVf9AVDF0g2r9VW-VN--=w427-h240-k-no', 3.8, 19, 'Restaurant', 2, '2pm-2am', '102 Roxas St, Tondo, Manila, 1013 Metro Manila', 'Tondo'),
(1702, 'It\'s Time! Unliwings - Jacinto St.', '', '14.62332403', '120.9611599', 'https://lh5.googleusercontent.com/p/AF1QipPgeocPc8p49W7zFHap42TJOzJOu6oMXkp2Jzq-=w426-h240-k-no', 4.8, 28, 'Restaurant', 2, '12pm-9pm', 'Roxas Street, corner Jacinto St, Tondo, Manila, Metro Manila', 'Tondo'),
(1703, 'Jmb Hot Pandesal', '', '14.6067813', '120.9635022', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=YpMyEaJHBqTTdOnavnTAJw&cb_client=search.gws-prod.gps&w=408&h=240&yaw=345.89746&pitch=0&thumbfov=100', 0, 0, 'Bakery', 1, '', 'Ibarra St, Tondo, Metro Manila', 'Tondo'),
(1704, 'Jollibee - Intramuros', '\'Philippines-based chain known for its burgers, fried chicken, spaghetti & Filipino dishes.\'', '14.59407799', '120.9741633', 'https://lh5.googleusercontent.com/p/AF1QipOcv_SFIRXaR5rfLLx417xw60CdMWtlkbx021JW=w408-h306-k-no', 3.9, 236, 'Fast Food', 1, '6am-10pm', 'Muralla St, Intramuros, 1002 Metro Manila', 'Intramuros'),
(1705, 'Jollibee Masangkay', '\'Philippines-based chain known for its burgers, fried chicken, spaghetti & Filipino dishes.\'', '14.60740139', '120.9782595', 'https://lh5.googleusercontent.com/proxy/zV-QMigOjtvIs2cjBCYWpchzjYiUfnl0cH6i0xpdPQB-PfjBCIEkwHOkfFkD_7prITpgxQA1OPz4jqXwBkxYUdLXHfz80ffBXzTfR3sotSNbzpA3T8Q7reuqdWXzVwwrcFz6GY8MjzqHfh6zldAZimfkQINTyPgZzzsn2JXf7-eS=w408-h271-k-no', 4.2, 87, 'Fast Food', 1, '6am-9pm', '1222 Masangkay St, Binondo, 1008 Metro Manila', 'Binondo'),
(1706, 'Jollibee North Harbour', '', '14.60242183', '120.9622429', 'https://lh5.googleusercontent.com/p/AF1QipOmdgejH1UrhWSeT9CXXemhPcjoY6yrqgc15LRu=w487-h240-k-no', 4, 658, 'Fast Food', 1, '6am-9pm', 'MARCOS HIGHWAY CORNER ZARRAGOZA STREET MANILA CITY Manila City, Zaragoza St, Tondo, Manila, Metro Manila', 'Tondo'),
(1707, 'Jollibee Quintin Paredes', '', '14.59823075', '120.9760485', 'https://lh5.googleusercontent.com/p/AF1QipOSOWCXfTP5sLXtvRITQ_jHto_V6DSm7mAypnnJ=w408-h306-k-no', 3.9, 85, 'Fast Food', 1, '7am-9pm', '440 Quintin Paredes Rd, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1708, 'Kim Hiong Food Garden', '', '14.6008993', '120.98015', 'https://lh5.googleusercontent.com/p/AF1QipMeJXTuWv0f7VFVNNnH_GZIVgL91jANX-lYnGWj=w408-h306-k-no', 3.8, 98, 'Restaurant', 2, '10am-9pm', '1028, 1003 Ongpin St, Santa Cruz, Manila, 1008 Metro Manila', 'Santa Cruz'),
(1709, 'Korean Style Korean Food Restaurant', '', '14.6016796', '120.9893473', 'https://lh5.googleusercontent.com/p/AF1QipPVm13K_HmhFoQmtQ7lXAQ61pb0yzUv1C1DTjYL=w408-h306-k-no', 4.4, 51, 'Restaurant', 1, '9am-9pm', 'Recto Ave, Quiapo, Manila, 1008 Metro Manila', 'Quiapo');
INSERT INTO `places` (`PlaceID`, `Pname`, `Des`, `Lat`, `Lot`, `img`, `Rating`, `reviews`, `type`, `price`, `hours`, `address`, `District`) VALUES
(1710, 'LaPRATO commissary', '', '14.61546525', '120.9647219', 'https://lh5.googleusercontent.com/p/AF1QipMLB_3E6o9CNsLIGDxswCcNllKdYzx4kyNvI2lb=w408-h305-k-no', 4.2, 21, 'Restaurant', 2, '', '223, 1012 Romualdez St, Tondo, Manila, Metro Manila', 'Tondo'),
(1711, 'LGA Fastfood', '', '14.60143408', '120.977168', 'https://lh5.googleusercontent.com/p/AF1QipO2_bYom0t6MfZpHj-xkfi67l9rx2ZBBTZKhi68=w408-h306-k-no', 4.3, 595, 'Fast Food', 1, '9am-7:30pm', '847-F Sabino Padilla St, Santa Cruz, Manila, 1003 Metro Manila', 'Santa Cruz'),
(1712, 'Ling Nam Noodle Factory And Wanton Parlor', '', '14.60244626', '120.979356', 'https://lh5.googleusercontent.com/p/AF1QipMuL7YdXt7aFIpmIk0iQV85L3ZVwIx95lnsdd9A=w408-h306-k-no', 4.4, 266, 'Restaurant', 3, '6am-9pm', '616 T Alonzo Streetsanta Cruz, Metro Manila, Kipuja St, Santa Cruz, Manila, Metro Manila', 'Santa Cruz'),
(1713, 'Lola Ely\'s Tapsilog Atbp.', '', '14.61104875', '120.9846108', 'https://lh5.googleusercontent.com/p/AF1QipP1uVCvHTk_dPOYpj8zI0XlOZMxvO6zQ_rwwJic=w408-h725-k-no', 3.8, 257, 'Restaurant', 1, '24hrs', 'Bambang St, Sta. Cruz 318, 1003 Metro Manila', 'Sta. Cruz'),
(1714, 'Lord\'s Stow Ongpin Binondo', '', '14.60092539', '120.9759503', 'https://lh5.googleusercontent.com/p/AF1QipMkas4tzcTo_TikICjgvZYUoHc_Ddr80ES5Y9GB=w426-h240-k-no', 4.7, 10, 'Bakery', 2, '7am-8:30pm', 'G/F Imperial Sky Garden, 707 Ongpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1715, 'Lotsa Pizza', '', '14.60742485', '120.9654934', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=SJ1sd30VYo-tCQWgp79LZg&cb_client=search.gws-prod.gps&w=408&h=240&yaw=140.31601&pitch=0&thumbfov=100', 3.9, 46, 'Restaurant', 2, '9am-5pm', '1178 B Asuncion St, 4 Tondo, 1012 Metro Manila', 'Tondo'),
(1716, 'Mami Pares House Tondo', '', '14.61930643', '120.9626083', 'https://lh5.googleusercontent.com/p/AF1QipPV1uv1Q9oXkyAe2z0VelCsBsDv6LR5PHVVtEjm=w408-h306-k-no', 4.5, 61, 'Restaurant', 1, '24hrs', 'Almond, Tondo, Manila, Metro Manila', 'Tondo'),
(1717, 'Marishem Carinderia', '', '14.59894027', '120.9790701', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=GSIdeCAV1pZVNeh8c0rRIQ&cb_client=search.gws-prod.gps&w=408&h=240&yaw=301.55988&pitch=0&thumbfov=100', 0, 0, 'Eatery', 1, '', '308 Gil Puyat Bldg William Burke St, Bgy 291, Zone 027 Binondo, Manila Metro Manila', 'Binondo'),
(1718, 'Master Lamon', '', '14.61318166', '120.969077', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=eHPj02gTO6SMXtkrDXUGFQ&cb_client=search.gws-prod.gps&w=408&h=240&yaw=88.7409&pitch=0&thumbfov=100', 3.4, 8, 'Restaurant', 2, '', '1528 Nicolas Zamora St, Tondo, Metro Manila', 'Tondo'),
(1719, 'Masuki', '', '14.60316264', '120.9765558', 'https://lh5.googleusercontent.com/p/AF1QipN98b6HVJmVWdI9RounvsQ640ENUzDKRaqewenm=w408-h306-k-no', 4.2, 307, 'Restaurant', 2, '7am-10pm', '931 Benavidez St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1720, 'Max\'s Restaurant - Intramuros', 'Filipino restaurant chain popular for its fried chicken served with banana ketchup.', '14.59370421', '120.9739058', 'https://lh5.googleusercontent.com/p/AF1QipNuqPvuhJadV7ITLnGczHOYkNaEvCSCtWA1Loy-=w426-h240-k-no', 4.1, 255, 'Restaurant', 2, '9am-9pm', 'Commerce Building, 409 A Soriano Ave, Intramuros, 1002 Kalakhang Maynila', 'Intramuros'),
(1721, 'McDonald\'s Bambang', '\'Classic, long-running fast-food chain known for its burgers & fries.\'', '14.61299479', '120.9766945', 'https://lh5.googleusercontent.com/p/AF1QipP1ccClgTn6MSqSvO6MfXHIq94S11zE_4ZMgKf_=w408-h451-k-no', 4.2, 514, 'Fast Food', 1, '24hrs', 'Abad Santos Ave, corner Bambang St, Tondo, Metro Manila', 'Tondo'),
(1722, 'Mr. Ube Rice & Noodle House', '', '14.60095116', '120.9760583', 'https://lh5.googleusercontent.com/p/AF1QipPfbzjWufTCOLDTNADP16fWjuXhICx-iX_M1I2c=w408-h306-k-no', 4.2, 144, 'Restaurant', 2, '8am-10:30pm', 'G/F Imperial Sky Garden, 707 Ongpin St, Binondo, Maynila, 1006 Kalakhang Maynila', 'Binondo'),
(1723, 'Mr.kim\'s samgyeopsal & Unli Wings / Señor K resto bar', '', '14.60993788', '120.9700304', 'https://lh5.googleusercontent.com/p/AF1QipPemKgg_LwKQHHa6TN-MzCFIYswpraKPmx-xWqM=w520-h240-k-no', 3.9, 63, 'Restaurant', 2, '3pm-2am', '737 Moriones St, Tondo, 1012 Metro Manila', 'Tondo'),
(1724, '\'MukbangMama Unli Samgyup, Chicken, and Beef\'', '', '14.62396767', '120.9607737', 'https://lh5.googleusercontent.com/p/AF1QipPNW_OXXoQkBK8BzDzTdGSlhy4IGk6BslxNOgdt=w533-h240-k-no', 4.3, 3, 'Restaurant', 2, '', 'JXF6+F5R, Tondo, Manila, Metro Manila', 'Tondo'),
(1725, 'Mutsarap Fried Chicken', '', '14.59850274', '120.9789743', 'https://lh5.googleusercontent.com/p/AF1QipNQwLZ_9Bf5LTZY4BzWPX5XLcuzDZfAV6V-5iQv=w408-h306-k-no', 4.7, 13, 'Eatery', 1, '9am-5pm', 'Tomas Pinpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1726, 'New Eastern Garden Restaurant', '', '14.6013665', '120.9796672', 'https://lh5.googleusercontent.com/p/AF1QipOWw3sdGP8ES1Ro1Re7lhTv6TBmVheUPf_nm6gS=w408-h544-k-no', 4.4, 39, 'Restaurant', 1, '9am-9:30pm', '954 Ongpin St, Santa Cruz, Manila, 1003 Metro Manila', 'Santa Cruz'),
(1727, 'Paluto Nga Po', '', '14.60996014', '120.9657843', 'https://lh5.googleusercontent.com/p/AF1QipNiA5kV7g8x51pboTkOV7hyF-L6grVwoG-8TYpz=w408-h544-k-no', 4.3, 32, 'Restaurant', 2, '8am-10pm', '402 Moriones St, Tondo, Manila, Metro Manila', 'Tondo'),
(1728, 'Pan Delicious - Pastry & Breadshop', '', '14.60003126', '120.9789266', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=Z18Q0PU7uTFb7Ekyxc1srA&cb_client=search.gws-prod.gps&w=408&h=240&yaw=88.61859&pitch=0&thumbfov=100', 0, 0, 'Bakery', 1, '', '915 Tetuan St, Santa Cruz, Manila, 1003 Metro Manila', 'Santa Cruz'),
(1729, 'PARDS PARES', '', '14.61066707', '120.9744489', 'https://lh5.googleusercontent.com/p/AF1QipPV9_rpQUF36_fFAkjft-hOBG9fBB4ZwB5QLrg_=w408-h544-k-no', 4.7, 12, 'Eatery', 1, '24hrs', 'Mayhaligue St, Tondo, Metro Manila', 'Tondo'),
(1730, 'Pastea Tondo', '', '14.60777104', '120.9626617', 'https://lh5.googleusercontent.com/p/AF1QipOFnP3QH9T2CLBWYmFivB1FQiV5nQyIxIDLQZqw=w408-h725-k-no', 5, 4, 'Bubble Tea Store', 2, '24hrs', '1255, 1012 Lualhati St, Tondo, Metro Manila', 'Tondo'),
(1731, 'Po Chuan Tin Bakery', '', '14.60177275', '120.9759505', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=1Xu10_1m9gPGjTPektYRpA&cb_client=search.gws-prod.gps&w=408&h=240&yaw=293.1369&pitch=0&thumbfov=100', 0, 0, 'Bakery', 1, '7am-8pm', '827 Salazar St, Binondo, 1006 Metro Manila', 'Binondo'),
(1732, 'Polland Binondo', '', '14.5969939', '120.977246', 'https://lh5.googleusercontent.com/p/AF1QipPXPt8-tkU5Yafafeng4CLRmlYYlLydKoY1WAYl=w408-h306-k-no', 4, 24, 'Café', 2, '8am-9pm', '209 Escolta St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1733, 'Polland Hopia And Bakery', '', '14.60305494', '120.9764484', 'https://lh5.googleusercontent.com/p/AF1QipM6F76JBoyNZXXFA0RNdJ6vlCazYZcetv1Oqx3o=w426-h240-k-no', 4.1, 24, 'Bakery', 2, '6am-10pm', 'Binondo, 1008 Metro Manila', 'Binondo'),
(1734, 'President Grand Palace', '', '14.60152546', '120.9764141', 'https://lh5.googleusercontent.com/p/AF1QipN9IdvRuBcNHKqB7Fj0vVGxjHm2PnrwFUz4hW2q=w408-h272-k-no', 4, 343, 'Restaurant', 2, '8am-10pm', '746-750 Ongpin St, Binondo, 1006 Metro Manila', 'Binondo'),
(1735, 'R. Ma Mon Luk Restaurant', '', '14.59954959', '120.9841089', 'https://lh5.googleusercontent.com/p/AF1QipPYC9TBnH4bNLJMLlpPLnOm001vflyBhwWw596a=w426-h240-k-no', 4.1, 414, 'Restaurant', 2, '9am-9pm', '545-549 Quezon Blvd, Quiapo, Manila, 1001 Metro Manila', 'Quiapo'),
(1736, 'Rado\'s Lechon', '', '14.62296068', '120.9642605', 'https://lh5.googleusercontent.com/p/AF1QipOjTKqIBD_PZHLttfQniD4Xxh1-0-dE8-pf9w7h=w408-h306-k-no', 4.5, 83, 'Restaurant', 1, '2pm-10pm', '2137 simon st.cor.f, Varona St, Tondo, Manila, Metro Manila', 'Tondo'),
(1737, 'Ramon Lee Panciteria', '', '14.60051515', '120.9809224', 'https://lh5.googleusercontent.com/p/AF1QipN1IMz5ASY0waeHFcRw72GeCSrl6PNxkSQ97UTY=w408-h306-k-no', 4.2, 208, 'Eatery', 3, '10am-9pm', '1003, 540 Ronquillo St, Santa Cruz, Maynila, 1003 Kalakhang Maynila', 'Santa Cruz'),
(1738, 'Romantic Baboy - Masangkay', '', '14.60839198', '120.9786876', 'https://lh5.googleusercontent.com/p/AF1QipMq2HKe8JnSBjtzxhNySyMMlyij8ru7m3U0yrEv=w408-h545-k-no', 4.1, 39, 'Restaurant', 1, '11am-2am', '263 Zone, 24, 1276 Masangkay St, Tondo, 1003 Metro Manila', 'Tondo'),
(1739, 'Salazar Bakery', '', '14.60193289', '120.9769578', 'https://lh5.googleusercontent.com/p/AF1QipOB-BLhBElxfIezFS6W33B4AdK5xPlh2wcTkvU=w408-h306-k-no', 4.3, 251, 'Bakery', 1, '6am-10pm', '783 Ongpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1740, 'Savory Escolta', '', '14.5969939', '120.9770169', 'https://lh5.googleusercontent.com/p/AF1QipMUjiWb65fUvzp2c-rd1tPFlxP3BWIptt0cqDb9=w408-h271-k-no', 4.1, 30, 'Restaurant', 2, '9am-9pm', '201 Escolta St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1741, 'Shake Avenue', '', '14.6140222', '120.9671037', 'https://lh5.googleusercontent.com/p/AF1QipNxY6Yq2FvXi9XeWd1dEwXFm25gaBB73-Zw1gKn=w408-h306-k-no', 4.2, 5, 'Café', 1, '10am-10pm', '1012, 516 Pacheco St, Tondo, Manila, 1012 Metro Manila', 'Tondo'),
(1742, 'Shanghai Fried Siopao', '', '14.601657', '120.9780109', 'https://lh5.googleusercontent.com/p/AF1QipM4IhUH_E6tU1tSfvGYZzt65iGhBrSMqyIQB_KQ=w408-h306-k-no', 4.6, 269, 'Eatery', 1, '7am-6pm', '828 Ongpin St, Santa Cruz, Manila, 1008 Metro Manila', 'Santa Cruz'),
(1743, '\'Sher\'s Coffee, Cakes, Pastries Etc.\'', '', '14.60000613', '120.9769606', 'https://lh5.googleusercontent.com/p/AF1QipMhi5cqgeHhamcmNUtqCx74CsoecGMseqVvG50X=w426-h240-k-no', 4.2, 5, 'Café', 2, '10am-9pm', '715 Sabino Padilla St, Binondo 1008 Metro Manila', 'Binondo'),
(1745, 'Soju Queen Korean Food Mart', '', '14.61351962', '120.9843855', 'https://lh5.googleusercontent.com/p/AF1QipN3Eo4v8kvnL6JxEgblCzFGLJjaUpTu4iwbflbn=w408-h306-k-no', 5, 2, 'Shopping', 1, '9am-6pm', '1609 Felix Huertas Rd, Santa Cruz, 1003 Metro Manila', 'Santa Cruz'),
(1798, 'Sophies Sausage Haus', '', '14.59263479', '120.9743671', 'https://lh5.googleusercontent.com/p/AF1QipNSrpcNZL9M9pgxbE4nNcNeqXo51NOP0SNvea9h=w408-h408-k-no', 4.2, 14, 'Restaurant', 2, '5am-10pm', 'Magallanes St, Intramuros, 1002 Metro Manila', 'Intramuros'),
(1799, 'Starbucks - Herald Building ', '', '14.59322661', '120.9781329', 'https://lh5.googleusercontent.com/p/AF1QipO6wCSiVT3mrlFfkPLu6EDwNvCGIXpE8BMx5ESr=w408-h725-k-no', 4.5, 50, 'Café', 3, '7am-9pm', '61 Muralla St, Intramuros, Manila, 1002 Metro Manila', 'Intramuros'),
(1800, 'Sushi Yum Japanese Restaurant', '', '14.60273374', '120.9775218', 'https://lh5.googleusercontent.com/p/AF1QipMjj5h24h9v21lWovAWvuU_l3xl3OX50ZIDZMW6=w426-h240-k-no', 4.2, 53, 'Restaurant', 3, '10am-7pm', '829 Benavidez St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1803, 'Tea Party', '', '14.60827502', '120.9655307', 'https://lh5.googleusercontent.com/p/AF1QipOE7hl96vSODHe8mMI8vNIScfewvVqcNZAzxkjZ=w428-h240-k-no', 4.6, 49, 'Bubble Tea Store', 2, '10am-9pm', '1220 Asuncion St, Tondo, 1012 Metro Manila', 'Tondo'),
(1804, 'Tenny\'s Coffee Corner', '', '14.5990719', '120.9751569', 'https://lh3.googleusercontent.com/proxy/gW-NAShiltiCfgyZo1TEixsaLWyIoHF20Ypi_ko0W6NyFwyD1CwvFnApuy0L9nV2sN_LHfVC3BOVWzceKYzNbJPzustsTHIXN1s9dv7gVBh2jfYT7cBuy51YsM5o61XoZRzjssIv-iKa-XprF55qlQxNi9KTyimU-KU6B2Sfl4QO=w408-h543-k-no', 0, 0, 'Café', 1, '6am-5pm', '579 Hormiga St, Binondo, 1006 Metro Manila', 'Binondo'),
(1805, 'The Den', '', '14.5988676', '120.9795931', 'https://lh5.googleusercontent.com/p/AF1QipMkLAe-wSD5ZWIMcTZjrL4bHEoVFEAtsplLK4cA=w408-h301-k-no', 4.7, 128, 'Café', 2, '10am-5pm', 'HUB Make Lab, First United Building, 413 Escolta St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1806, 'Tropical Hut Escolta', '', '14.59735411', '120.9781542', 'https://lh5.googleusercontent.com/p/AF1QipNc2_2drz3gcKbBOCorLE96fOVYZ7iXHZ6UnLeV=w408-h306-k-no', 4.1, 42, 'Fast Food', 1, '7am-9pm', '266 Escolta St, Santa Cruz, Manila, 1006 Metro Manila', 'Santa Cruz'),
(1807, 'Ugbo Street Food Shops and Takeaways', '', '14.6235628', '120.9647112', '\'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGBxQUExYUFBQWFxYWGRgcGRkYGBkYGRwYFxkYGR8XGRgcHyoiGR8nIRwYIzQjJysuMTExGSI2OzYwOiowMS4BCwsLDw4PHRERHTooIiczLjgwMDgwLi4wMjIzMTAwMjAwMjAwOC4wMDAwMDIwMjAuMC4wMDAwMDAwMDAwMDAwMP/AABEIAMIBBAMBIgACEQEDEQH', 4.5, 191, 'Eatery', 1, '', 'JXF7+9P3, Tondo, Manila, Metro Manila', 'Tondo'),
(1808, 'Uno Seafood Wharf Palace', '', '14.59741146', '120.9782244', 'https://lh5.googleusercontent.com/p/AF1QipNs1lmJlVyhk3v1Pr-2RMRvh_z_64w_BPqp826C=w408-h270-k-no', 4.3, 378, 'Restaurant', 2, '\'11am-2:30pm, 5pm-2am\'', '270 Escolta St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1809, 'URBAN MILK TEA', '', '14.61319166', '120.9671681', 'https://lh5.googleusercontent.com/p/AF1QipOtedzq9nfLG0Sja4xhG76JKOUD2y5SS9sz5VWQ=w493-h240-k-no', 3, 2, 'Milk Tea Shop', 1, '11am-8pm', '504 Coral St, Tondo, Manila, Metro Manila', 'Tondo'),
(1810, 'Vege Select', '', '14.601276', '120.9762217', 'https://lh5.googleusercontent.com/p/AF1QipN_L6wAPKpW6lgHrDFdGTzYNhIE643aczKwAItQ=w408-h306-k-no', 4.4, 211, 'Restaurant', 2, '7am-7pm', '739 Ongpin St, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1811, 'Wai Ying Fast Food', '', '14.60232499', '120.975987', 'https://lh5.googleusercontent.com/p/AF1QipNs3tIMrA2Nj_KFuIipBQySCH5axEco-p0CvxaN=w408-h306-k-no', 4.3, 1481, 'Fast Food', 2, '7am-2am', '810 Benavidez St, Binondo, 1006 Metro Manila', 'Binondo'),
(1812, 'Wai Ying', '', '14.60766855', '120.9783448', 'https://lh5.googleusercontent.com/p/AF1QipPu07NgUTTOIyiboXXmvjYFyKJ4azPcwLhdvW19=w408-h408-k-no', 4.2, 437, 'Restaurant', 2, '7am-9am', '832 Benavidez St, Binondo, 1006 Metro Manila', 'Binondo'),
(1813, 'X-Bistro Laboratory', '', '14.59920374', '120.9755906', 'https://lh5.googleusercontent.com/p/AF1QipMDT6pDMVXqlwLHOHIPN55DNhkhuPf0HE4pGxmw=w408-h306-k-no', 5, 12, 'Restaurant', 3, '11am-9pm', '493, 1006 Quintin Paredes Rd, Binondo, Manila, 1006 Metro Manila', 'Binondo'),
(1814, 'Yan\'s Foodhauz & Paluto', '', '14.61386685', '120.9775099', 'https://lh6.googleusercontent.com/proxy/-SJoyP7Opt_Esb8k_W6RvIEsjIbUgWnpj20VlPvHGuEoKldatUlHpPizyp8RuCiFG0HGQt4Es9j8RiQVfG2_R3lq-Gd0Pll32eCRjjU16Htmvp9yMoODxVPepvi5nbFu_1f4sZt8hFd_J4Z40KPlBWs8eEtoFjK0jLApbpdbXejx=w426-h240-k-no', 4.1, 30, 'Restaurant', 1, '8am-10pm', 'Quiricada St, Santa Cruz, Tondo, 1003 Metro Manila', 'Tondo'),
(1816, 'ZCT Delicious Restaurant', '', '14.60071241', '120.9813087', 'https://lh5.googleusercontent.com/p/AF1QipP9eh_smWO6ZHPC4tLA6qq5TGrQ34qIRDG33Sg_=w408-h328-k-no', 5, 2, 'Restaurant', 1, '10am-9pm', 'Zone 029, 580 F. Torres St, Santa Cruz, Manila, 1008 Metro Manila', 'Santa Cruz'),
(1817, 'Ongpin North Bridge Arch', 'AKA the Filipino-Chinese Friendship Bridge', '14.6025120181285', '120.976719676354', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=M1n3R_P_0XlcbTNI5QfE6Q&cb_client=search.gws-prod.gps&w=408&h=240&yaw=238.94952&pitch=0&thumbfov=100', 0, 0, 'Tourist Attraction', 1, '', '762-768, 1008 Ongpin St., Binondo', 'Binondo'),
(1818, '品福小火鍋pinfu hot pot', '', '14.56323444781215', '120.99842617903349', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/158698386_101699998665746_7618157256384943620_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeH1lzRf_od1mbnsvgJ4wj7323cfOIj_FQvbdx84iP8VCz3oaSCwpaBPBmeAzx__9c8jUTZqEHF7Ovm8qG70hNuF&_nc_ohc=SonPfNNIAUwAX8b9ioU&_nc_ht=scontent.fmnl6-1.fna&oh=ff55defba78bd3c8ca8c3b11f6847153&oe=6192CE22', 0, 0, 'Restaurant', 1, '11am-9pm', '2641 Arellano Ave, San Andres Bukid, Manila, 1004 Metro Manila', 'San Andres'),
(1819, 'Yoshimeatsu Taft', '', '14.564210453194848', '120.9983248782064', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t1.6435-9/60462512_2461380160797470_836472098103754752_n.png?_nc_cat=104&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeFhlHks4iSst119rC1OGHJw94llZL5lgJv3iWVkvmWAmzesxom3RRVeBJ2TH0OxXil1jdPUS7MCbXTPkmwPhSTE&_nc_ohc=BJhnmQRwg1EAX9fygfd&_nc_ht=scontent.fmnl6-2.fna&oh=41e49034638a833f79e02937905b9a8d&oe=619299F4', 0, 0, 'Restaurant', 3, '12pm-10pm', '1021 Pablo Ocampo Street, cor Arellano Ave, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1820, 'Wow! Binalot', '', '14.570592565491438', '120.99931645510524', 'http://surl.li/akull', 0, 0, 'Eatery', 2, '', '2229-B Alejo Aquino St. Singalong Manila', 'San Andres'),
(1821, 'Vito Cruz St. Pizza', '', '14.56060407918891, ', '120.9912793349128', 'https://lh5.googleusercontent.com/p/AF1QipOz_uyJ5yDOb1HzWw5E2TO-70r54eZxDyws1qkS=w408-h510-k-no', 0, 0, 'Fast Food', 2, '10:30am-6pm', 'P Ocampo St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1822, 'Unionbank of the Philippines MALATE', '', '14.56208728028453', '120.99522660895985', 'https://lh3.googleusercontent.com/proxy/jNAxUax2M6Uz6XNjPdYZOTZXWS9LKtoBdoo6TK8qm2TxGzmZcs6QdHWuNKP3BhDk0ST-iZxOmNILMbNemL65cXWwcN9-gmMABrOxkbrJPtDx6ry0AOmnofybKdLNMKa2_DZcQlnbSxGT5tJbgIvW4_s-ndKv2EjNleDRam001O_c=w408-h306-k-no', 0, 0, 'Bank', 2, '', '952 Juan Luna St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1823, 'Uncle Cheffy Malate ', 'The hottest Veranda in Manila. Restaurant, Bar, Cafe, and Shisha lounge. Daily live band. Awesome International cuisine, dishes from over 15 countries!', '14.57449937342203', '120.98393366817302', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/192342708_4583926348304012_1260214783787551865_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeE28A0LkF1uBKoJDkvcf-4AvkNIAe0IvhS-Q0gB7Qi-FDt3kvFT7UizPfm9RWCNuM-HTDKFf780YPUSoro8CgjM&_nc_ohc=f06WHcfKZJwAX86oLsp&_nc_ht=scontent.fmnl6-1.fna&oh=346641b7fe808750555176d59355f4c7&oe=61903E17', 0, 0, 'Restaurant', 2, '7am-12am', 'Pedro Gil Street, Ermita, Manila 1000 Manila, Philippines', 'Malate'),
(1824, 'Tuks\' Hobby Shop', '', '14.563919698722582', '120.99929047346383', 'https://lh3.googleusercontent.com/p/AF1QipNcfgmsdnqN0_L1dhLZs3fZA7xjY4Zi6vjB520P=s1600-w2436', 0, 0, 'Store', 2, '10am-7pm', '2617 Bautista St, Bgy 756, Zone 082 STA Ana, Manila, Bautista St, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1825, 'Toys for your Tots', 'We sell a wide range of educational toys and kids furniture that can boost child\'s knowledge while coupled with fun and play!', '14.56507147637788', '120.99918416337137', 'http://surl.li/akulo', 0, 0, 'Store', 2, '9am-5pm', '1078 Consuelo St, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1826, 'The New Remedios Circle Historical Marker', '', '14.570231241220908', '120.98630075468162', 'https://images.summitmedia-digital.com/spotph/images/2020/03/14/remedios-circle1-1584197163.jpg', 0, 0, 'Historical Landmark', 1, '', '1004 Remedios Circle, Malate, Maynila, 1004 Kalakhang Maynila', 'Malate'),
(1827, 'The Aristocrat Restaurant MALATE', '', '14.568255786238758', '120.98413071180295', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.18169-9/17629904_1506187956058135_7918490522036446740_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeFmslBPCbYbJ-sWdT4v5FU_w_OXgieNAjrD85eCJ40COnhZdFUdKtb7Vz-9EQ10qGhcxUnYPf7WRDi5Fd2oYREj&_nc_ohc=Q5IN1nBinLEAX91xKxo&_nc_ht=scontent.fmnl6-1.fna&oh=2e52282d73418884a595b9de4b048282&oe=6192B6C8', 0, 0, 'Restaurant', 3, '6am-10pm', '423 San Andres St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1828, 'Tako-Motto San Andres Manila', 'Authentic Japanese taste with a Pinoy twist', '14.576272589825228', '121.01085055468182', 'http://surl.li/akulq', 0, 0, 'Fast Food', 2, '', '2155 Mabuhay St. San Andres Manila', 'San Andres'),
(1829, 'Ta Ramen Na', '', '14.573328343622066', '121.00232248291731', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t1.6435-9/135852122_105831424795368_7139379883126694621_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeG6egGLebAxn-tLdHNIXszv2IPaGBqAD6nYg9oYGoAPqaMmvq1MhKhS-x03Q9f0ARYjNp2vmfZ3AnsprkVd5bSk&_nc_ohc=rzAyYS9vguMAX9fTdSd&_nc_ht=scontent.fmnl6-2.fna&oh=bd5425c0fab002b47068399ff534de89&oe=61923175', 0, 0, 'Restaurant', 3, '2pm-10pm', '2263 Topacio, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1830, 'Sunflower Bakery', '', '14.575480115465178', '121.00794262746513', 'https://thesunflowerbakeryandcafe.com/wp-content/uploads/2019/11/logo-newest-300.jpg', 0, 0, 'Bakery', 2, '', '1946 Florentino Torres, San Andres Bukid, Manila, 1017 Metro Manila', 'San Andres'),
(1831, 'St. Scholastica\'s College', '', '14.563971304370446', '120.99650502483891', 'https://ssc.edu.ph/wp-content/uploads/2013/11/St.-Cecilias-Building1-624x415.jpg', 0, 0, 'College', 1, '', '2560 Leon Guinto St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1832, 'St. Paul University Manila - Graduate Programs', '', '14.573825571092721', '120.98634907432542', 'https://s3.eu-north-1.amazonaws.com/images.free-apply.com/uni/gallery/lg/1060800138/4459c4df312b5d74c699e15e87ab835fdad5672b.jpg', 0, 0, 'University', 1, '', '680 Pedro Gil St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1833, 'St. Casimir Learning Center', '', '14.574363421587508', '121.00042850809591', 'https://img4.findglocal.com/581/552/1276800245815522.jpg', 0, 0, 'Daycare Center', 1, '', '2162 Zafiro, 798 San Andres Bukid, Manila, 1017 Metro Manila', 'San Andres'),
(1834, 'St. Athanasius Memorial Chapel', '', '14.572361775681635', '121.00173653122103', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX_O9aT4jKLCzJNf7qrZbPXqiJdp_4iOiQP8csoNdmQ9qfUWfoZVGTnaLgJPLqyXXrK68&usqp=CAU', 0, 0, 'Memorial Chapel', 1, '3pm-8pm', '2284 San Andres St, San Andres Bukid, Manila, 1017 Metro Manila', 'San Andres'),
(1835, 'St. Anthony of Padua Parish, Singalong Church', '', '14.571623712714981', '120.99571899134534', 'https://pinoybyahero.files.wordpress.com/2012/04/p1030295.jpg', 0, 0, 'Church', 1, '', '2126 San Andres, cor Angel Linao St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1836, 'Something healthy', 'When life gives you lemon .. make LEMONADE ', '14.576131146980368', '121.0047768412398', 'http://surl.li/akulr', 0, 0, 'Café', 2, '2pm-1am', '2262 road 15 corner road 5 fabie state sta.ana manila 1009 Manila, Philippines', 'San Andres'),
(1837, 'SM Hypermarket Adriatico', '', '14.563806838595438', '120.99003192300819', 'http://www.whiteportinc.com/wp-content/uploads/2016/07/01_SM-HYPERMART-ADRIATICO-MALATE.jpg', 4, 370, 'Supermarket', 1, '', 'SMDC Condominium (Formerly Harrison Plaza), M. Adriatico St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1838, 'Sky Garden By The Bay Restaurant', 'The very first outdoor-garden samgyupsal place in the Metro! With the most delightful view and best Korean-Filipino cuisine are here with us.', '14.559411920875727', '120.984884226033', 'https://b.zmtcdn.com/data/pictures/0/18525850/bdd03b21f42ed833fa849661a023201e.jpg?fit=around|750:500&crop=750:500;*,*', 4.3, 249, 'Restaurant', 3, '11am-10pm', 'Metro Manila, Manila, Malate, PH Metro Manila Manila Brgy 719 Zone78 Trellis 2 Asean Promenade', 'Malate'),
(1839, 'Singalong Seventh-day Adventist Church', '', '14.572257359426192', '120.99880516826744', 'https://lh3.googleusercontent.com/p/AF1QipPKmjlF2FdFh7D6gIoJ_OnZmsnua6jrYEWkLSxh=w1024-k', 0, 0, 'Church', 1, '', '2109 Taal, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1840, 'Silong Restobar', '', '120.98271086817316', '14.57913693969482', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t31.18172-8/25542453_153732462018797_1651833571241701019_o.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeHPc2oymDPdr2tNrsWXs0-GgFPmXWD9mTSAU-ZdYP2ZNEJWC8wyCryFwwgR3nCi9ka_H-Eofsz7iYI2r6iqgMWd&_nc_ohc=GEjXlChfqdQAX-KQUXk&_nc_ht=scontent.fmnl6-2.fna&oh=6aef3b130bd73822fc9d7e49acf0660a&oe=6190704D', 0, 0, 'Restaurant', 2, '11am-12am', '1199 Ma. Orosa St, Ermita, Manila, 1000 Metro Manila', 'Malate'),
(1841, 'Sibs Next Door', '', '14.569941465655411', '121.00022781022908', 'https://lh5.googleusercontent.com/p/AF1QipOk_f8IuLEg9Loa0K1O4_C04I1tZiljVPVz0X7S=w408-h306-k-no', 0, 0, 'Restaurant', 2, '1-11pm', '2333 G.Del Pilar, San Andres Bukid, Manila, 1017 Metro Manila', 'San Andres'),
(1842, 'Sedum Tea', '', '14.573557754985787', '121.00751309973393', 'https://lh5.googleusercontent.com/p/AF1QipMYW4thZXf7L7QO5A0KwcLGDAamss0saUj3Vb9O=w408-h288-k-no', 5, 1, 'Café', 2, '10am-8pm', '2458 1017 Oro-A, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1843, 'Savemore Pedro Gil', '', '14.577590541528958', '120.99192713075364', 'https://lh5.googleusercontent.com/p/AF1QipNFqnmmeFGJKd3V4PBwu6KUHMODnAziDGY68QLI=w1080-k-no', 0, 0, 'Supermarket', 1, '', 'Pedro Gil St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1844, 'SASES Basketball Court', '', '14.57166627212572', '121.00066044382292', 'https://ph.top10place.com/img_files/878210705547738', 0, 0, 'Basketball Court', 1, '', 'Perlita, San Andres Bukid, Maynila, Kalakhang Maynila', 'San Andres'),
(1845, 'Santisima Trinidad Parish Church', '', '14.566629930637196', '120.9993333888061', 'https://www.schedules.ph/wp-content/uploads/2020/04/Santisima-Trinidad-Parish.jpg', 0, 0, 'Church', 1, '8am-5pm', '1127 Estrada St, San Andres Bukid, Manila, 1000 Metro Manila', 'San Andres'),
(1846, 'Sancent Scullery', '', '14.574935756630316', '121.00206638277797', 'http://surl.li/akult', 0, 0, 'Restaurant', 2, '', '1649, 1017 Diamante, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1847, 'San Andres Sports Complex', '', '14.569115182512947', '120.98747458589409', 'https://lh5.googleusercontent.com/p/AF1QipN8rbvnYsfwjQBmJKK97r-dE1alot-UhpcWj7bq=w408-h306-k-no', 4.1, 16, 'Sports Complex', 1, '', '704, Malate, Manila, 1004, Metro Manila', 'Malate'),
(1848, 'San Andres Public Market', '', '14.56983421864563', '120.98902155389585', 'https://lh5.googleusercontent.com/p/AF1QipMi5ZdP7_o1m2pZdR-nteYhypOZG3Lclxk-Eqqj=w452-h240-k-no', 0, 0, 'Market', 1, '', 'Leveriza St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1849, 'Samgyupkana - Malate Main Branch', 'Samgyupkana is here to take Korean BBQ-lovers to your happiest place with three kinds of meat to choose from and side dishes that will surely whet your appetite!', '14.570766917136247', '120.98595661228623', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t1.6435-9/86479054_2974240099273614_3946999860405731328_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeERKkTHuFmxT71qIzoW7VQPsFWjGgIy5p6wVaMaAjLmnuLhoHoJ6yqVsqFDEBlebYsh3GR_yUxNJD5g_N2TBSQS&_nc_ohc=gV624h1PoLMAX-Z8hi4&_nc_ht=scontent.fmnl6-2.fna&oh=8746feee3ebaabbf612bf637d55e8ec9&oe=6190C03B', 0, 0, 'Restaurant', 2, '11am-12am', '1776 Adriatico Street 1004 Manila, Philippines', 'Malate'),
(1850, 'Salud\'s Bakery & Grocery', '', '14.568414663343097', '120.98919136678674', 'http://surl.li/akulx', 0, 0, 'Bakery', 1, '', '2089 Leveriza St, Malate, Manila, 1002 Metro Manila', 'Malate'),
(1851, 'Rizal Memorial Tennis Court', 'Rizal Memorial Tennis Court is a private tennis establishment located at Adriatico St, Manila, Metro Manila, Philippines. There are 6 private tennis courts at this tennis facility. ', '14.563103915416159', '120.9914122643889', 'https://fastly.4sqi.net/img/general/600x600/214841266_h_oAlqRyOhLElEDzl5EoEe7Znxr8A5-OQwM1vSKPQE0.jpg', 0, 0, 'Tennis Court', 1, '', '1004 M. Adriatico St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1852, 'Rizal Memorial Sports Complex', '', '14.56381', '120.990623', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Rizal_Memorial_Sports_Complex_birdseye.jpg/413px-Rizal_Memorial_Sports_Complex_birdseye.jpg', 0, 0, 'Sports Complex', 1, '', '1750 M. Adriatico St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1853, 'Rizal Memorial Coliseum', '', '14.56182682768421', '120.99413391207433', 'https://upload.wikimedia.org/wikipedia/commons/3/39/Rizal_Memorial_Coliseum_-_sign_%28Malate%2C_Manila%3B_11-23-2019%29.jpg', 0, 0, 'Stadium', 1, '', 'Ocampo St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1854, 'RELX San Andres Manila', '', '14.571553371162977', '121.00325206817308', 'http://surl.li/akume', 0, 0, 'Store', 2, '', 'Zafiro St 1009 Manila, Philippines', 'San Andres'),
(1855, 'rapsa corner', '', '14.5752030720204', '121.00510372584561', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t1.6435-9/234512188_105185671886489_2459391043724616135_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeFM1X9GzOXDpS7uDkaaFlzubbZQ9lLvXeNttlD2Uu9d4zcj9kuhTswb2XWa_pf4BSnBk7IrEz2Sg-0AJG_o1WB-&_nc_ohc=QcWABax9oFkAX_b3RII&_nc_ht=scontent.fmnl6-2.fna&oh=78690ecc7bb8e709fc6f49c570939a20&oe=6191C552', 0, 0, 'Restaurant', 2, '', 'A. Francisco, Mercurio St. San Andres Bukid, Manila', 'San Andres'),
(1856, 'Ramon Magsaysay Center', '', '14.571835024490909', '120.982073821933', 'https://bluprint.onemega.com/wp-content/uploads/2018/05/RM-Center-feat.jpg', 4.2, 180, 'Tourist Attraction', 1, '', 'Quintos St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1857, 'Quirino Bakery', '', '14.572226780479628', '120.9971973543739', 'https://lh4.googleusercontent.com/proxy/_N6zL15qKWD77F-erdmKlO96rQfyMN8tIGdmurWXPcyQc65hi6mMeIOCDtSz-EF5vqBSRd52YKe-07KrlgtZmqqhiFy8N-IErGIpKJkX1lA1_832Sx6cKAI7i6oWIjjI9ZWXZY12zME5n1dKG8Ux0WJt3nuNfpTkUAQLvvWZu-V0=w426-h240-k-no', 0, 0, 'Bakery', 1, '6am-9pm', '1232 San Andres St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1858, 'Qualitea Milk Tea San Andres Malate', '', '14.572208373531428', '120.99797172584556', 'http://surl.li/akumb', 0, 0, 'Store', 2, '', '2113 San Andres St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1859, 'Puregold - San Andres', '', '14.570430968631726', '120.98893654793802', 'http://photos.wikimapia.org/p/00/01/43/21/23_big.jpg', 0, 0, 'Supermarket', 1, '9am-9pm', '673 San Andres St, corner Leon Ma Guerrero Street, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1860, 'Puchu Bikes', '', '14.572791238628305', '121.00054188388226', 'http://surl.li/akuma', 0, 0, 'Store', 3, '9am-6pm', '1427 San Andres St, San Andres Bukid, Manila, 1017 Metro Manila', 'Malate'),
(1861, 'Premier The Samgyupsal', 'Korean BBQ dishes are served in a warehouse-style restaurant with tabletop grills.', '14.57150743757985', '120.98430753776411', 'https://b.zmtcdn.com/data/pictures/chains/8/18160128/52aa9025a9c08befca854b7f8f9012f5.jpg?fit=around|771.75:416.25&crop=771.75:416.25;*,*', 0, 0, 'Restaurant', 3, '24hrs', 'PH Metro Manila Manila Malate 1720 Mabini Street, Cor Alonzo St, Malate, Manila, Metro Manila', 'Malate'),
(1862, 'Pot Pot Bulalohan', '', '14.56541342152632', '121.00009126131413', 'https://lh5.googleusercontent.com/p/AF1QipM3ypax82t_ZgRH59pRRh_t3juqOvXB_FnhhogY=w1080-k-no', 0, 0, 'Restaurant', 2, '11am-10pm', '2571 Dian Street, Consuelo St, San Andres Bukid, Manila, 1014 Metro Manila', 'San Andres'),
(1863, 'PNB MANILA-CENTURY PARK HOTEL', '', '14.56135420966174', '120.98998184425854', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=mE29AwDeKfy2F5vgPImeGQ&cb_client=search.gws-prod.gps&w=408&h=240&yaw=165.43687&pitch=0&thumbfov=100', 0, 0, 'Bank', 2, '10am-5:30pm', 'G/F Century Park Hotel P. Ocampo cor. M. Adriatico Sts Malate Manila City, 1004 Metro Manila', 'Malate'),
(1864, 'Ping Yang Hot Pot and Dimsum Restaurant', 'PingYangHotPot - Best HOTPOT/SHABUSHABU in town,Corner J NAKPIL&ADRIATICO ST MALATE. Open for more than 30 years and still going strong!', '14.571423627826062', '120.98557820486384', 'https://10619-2.s.cdn12.com/rests/original/803_184157997.jpg', 0, 0, 'Restaurant', 3, '10am-10pm', '556 J Nakpil Street Corner Adriatico Street 1004 Manila, Philippines', 'Malate'),
(1865, 'Philippine Women\'s University', '', '14.574598926156122', '120.98973851324858', 'https://static1.eyellowpages.ph/uploads/yp_business_photo/photo/360192/large_PWU.jpg', 0, 0, 'University', 1, '', '1743 Taft Ave, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1866, 'Philippine Christian University', '', '14.576025144369057', '120.9886859107724', 'https://lh3.googleusercontent.com/p/AF1QipMQfwQTrKsYfzp5QdLb7j6YN9vlFZuYOmuLOf3a=w1024-k', 0, 0, 'University', 1, '', '1648 Taft Ave, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1867, 'Pepper\'s Platter', 'Your ultimate comfort food!', '14.575178014297498', '121.00474765407941', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t39.30808-6/227495732_109995457996641_8550011432424685045_n.png?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeF1A-A7-J-t_0ln7YQcDRZDfpp8iywCgUB-mnyLLAKBQLQYHjZjUF7EybmlXUGXxrOD6URI7imO79vtnry_aESg&_nc_ohc=_5aLN6H-V5MAX_IQv4A&_nc_ht=scontent.fmnl6-2.fna&oh=01239b261b35f929cc3bc3bdb8169a98&oe=616FFFF1', 0, 0, 'Restaurant', 2, '', '2290 Raymundo San Andres Bukid, Manila', 'San Andres'),
(1868, 'Paydaze Clothing', '', '14.573809266608476', '120.99978758479004', 'https://img4.fashiongloba.com/426/328/372692174263284.jpg', 0, 0, 'Clothing Store', 2, '', '1516B Aviadores, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1869, 'Paraiso ng Batang Maynila', '', '14.566320688568284', '120.98919014085749', 'http://images.metronewscentral.net/izGDYq1usi6-paraiso-ng-batang-maynila.jpg', 0, 0, 'Park', 1, '', 'Quirino Ave, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1870, 'PALACIO DE MAYNILA', '', '14.570692812221528', '120.98270682327112', 'http://palaciomaynila.com/images/Home_image.jpg', 0, 0, 'Tourist Attraction', 1, '', '1809, 1813 M. H. Del Pilar St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1871, 'Pablo Ocampo Monument and Historical Marker', '', '14.5610649150141', '120.99227851275369', 'http://photos.wikimapia.org/p/00/08/41/49/31_big.jpg', 0, 0, 'Historical Landmark', 1, '', '1004 M. Adriatico St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1872, 'Our Lady of the Assumption Parish - Malate', '', '14.566430357276863', '120.9900043004528', 'https://www.schedules.ph/wp-content/uploads/2020/04/Our-Lady-of-the-Assumption-Parish-Malate-750x600.jpg', 0, 0, 'Church', 1, '', 'Leveriza St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1873, 'Ospital ng Maynila Medical Center', '', '14.564253971457779', '120.98641813144202', 'http://images.metronewscentral.net/8tD654ml599-new-ospital-ng-maynila.jpg', 0, 0, 'Hospital', 3, '24hrs', '719 Quirino Avenue, corner Roxas Blvd, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1874, 'Ortega Sports Complex', '', '14.574322512844724', '120.99732618361907', 'https://lh5.googleusercontent.com/p/AF1QipO4RTjJr9PODahYpsbtncCpMw4wNakRSpUr9U-b=w408-h306-k-no', 0, 0, 'Basketball Court', 1, '', 'Texas, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1875, 'Original Pares Mami House', '', '14.572557942949663', '121.00170704937466', 'https://lh4.googleusercontent.com/proxy/D8QMQ_yfNqHpt_-ly4R3AU2G_l_v3m9vBZytqujgMIcgama17GKeafVGI7LaFAZgHWeNrEcDiu2NtZQqiNtrD0P0csEASfsmnh2CWhMaCd5_SrA6odR_OvAM4aHhNnx63Io63P5G0qvwarsgX6cwuE99WVUqWG8Cpc0MCA6SE1yG=w426-h240-k-no', 0, 0, 'Restaurant', 2, '24hrs', 'San Andres Ext, 805 San Andres Bukid, Manila, 1017 Metro Manila', 'San Andres'),
(1876, 'Onyx Day Care and Learning School', '', '14.575720415497747', '121.00174208246138', 'https://monetdt.tripod.com//sitebuildercontent/sitebuilderpictures/onyxlogo.jpg', 0, 0, 'Daycare Center', 1, '', '2155 Onyx, Santa Ana, Maynila, Kalakhang Maynila', 'Sta. Ana'),
(1877, 'Nok-Nok Fried Flavored Chicken', '', '14.568168774476698', '121.00399070572315', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t1.6435-9/117283044_649834052299952_3770529161673755722_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeG0yNoqXHdPJBAwIKveB7THhjeadnprmCWGN5p2emuYJXfSprRXYDxnY_Rv69eS000EVxnsnrDWUX4v52ZfdsjJ&_nc_ohc=mcNjhKeZ3c0AX9mKuzi&_nc_ht=scontent.fmnl6-2.fna&oh=e755ccac376899bb1ac4e547568332be&oe=61909F98', 0, 0, 'Restaurant', 2, '', '2540 Opalo, San Andres Bukid, Manila, 1017 Metro Manila', 'San Andres'),
(1878, 'Ninoy Aquino Stadium', '', '14.564337728881036', '120.99129170276719', 'https://lh5.googleusercontent.com/p/AF1QipP8BBCmphmQKY3N8MqpjPTG9db6UajPqSq5lLCV', 0, 0, 'Arena', 2, '', 'Rizal Memorial Sports Complex, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1879, 'Nanay Mely\'s Kitchenette', '', '14.575963850725213', '121.00584726210752', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/fr/cp0/e15/q65/120284411_186142979797671_4176067578709641170_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=85a577&efg=eyJpIjoidCJ9&_nc_eui2=AeGwHFsQFP6fbcFb-IDIpTGdz98GJa7-CPTP3wYlrv4I9EkkzHWI2KFHqHTMJkot8Ja9Ud2acA4o6dR9p6aC2ipO&_nc_ohc=YtlzkvzRpqcAX-lXIqm&_nc_ht=scontent.fmnl6-1.fna&oh=1ad3cf45d61d702f9f0fbe2695caf3cb&oe=618F6C33 http://tny.im/q8x', 0, 0, 'Restaurant', 2, '9am-2pm', '1840 Tenorio Street, Agusto Francisco, Santa Ana, Manila, Metro Manila', 'Sta. Ana'),
(1880, 'Museum of Contemporary Art and Design', 'College gallery for modern art housing innovative exhibits, workshops & avant-garde pieces.', '14.562737082846686', '120.9966224908128', 'https://sothebys-com.brightspotcdn.com/dims4/default/683fdea/2147483647/strip/true/crop/4096x2458+0+0/resize/800x480!/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fdotcom%2Feb%2F21%2F7a45a6b6465682c7b11310b15553%2Fmcad-manila.jpg', 0, 0, 'Museum', 1, '', 'Ground Floor, Benilde School of Design and Arts Campus, Dominga Street, Malate, Maynila, 1004 Kalakhang Maynila', 'Malate'),
(1881, 'Mob Bang Café', 'COFFEE | MILK TEA | TAKOYAKI | FOOD TRIP All you need in one place!', '', '', 'https://scontent.fmnl8-1.fna.fbcdn.net/v/t1.6435-9/116875052_325180432184679_5542338540515589137_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeGg1m6-A51XUaDHyPn7H7ea4d7tAYshmCDh3u0BiyGYIGHoJMFW7Btx1hIq7efOuMRayyMN3BhJwQsYCy569333&_nc_ohc=ujYrm9Mbvw0', 0, 0, 'Café', 2, '10am-8pm', '2223, 1004 Fidel A.Reyes, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1882, 'Mj\'s Cafe Bar', '', '14.569493649203741', '120.98313985614745', 'https://b.zmtcdn.com/data/pictures/2/6311972/bae35e6f8550d44591eb42f1daf6fcb9_featured_v2.jpg?fit=around|771.75:416.25&crop=771.75:416.25;*,*', 0, 0, 'Café/Bar', 3, '9am-9pm', 'Roxas Boulevard, Malate, Baypark, Manila City, 1004 Metro Manila', 'Malate'),
(1883, 'MGC Eatery', '', '14.570095888133283', '120.98787772235968', 'https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.6435-9/cp0/e15/q65/s320x320/72267829_114202699989738_646285006297104384_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=dd9801&efg=eyJpIjoiYiJ9&_nc_eui2=AeHxETHA27jav3ixSMvtfXN5Xgkv9hAEP3xeCS_2EAQ_fE2vliLPEKEMNjBed5TW-jWw-XSd', 0, 0, 'Eatery', 1, '', '1671 Maria Orosa St, Bgy 698, Zone 076 Malate, Manila', 'Malate'),
(1884, 'Metropolitan Museum of Manila', 'Built in 1976, this museum features contemporary Filipino art, plus some historical artifacts.', '14.562315712347715', '120.98650425355697', 'http://ikotmnl.com/wp-content/uploads/2018/11/Vito-Cruz-4-Metropolitan-Museum-of-Art-and-Design-Manila.jpg', 0, 0, 'Museum', 1, '', 'BSP Complex, Roxas Blvd, Malate, Manila, Metro Manila', 'Malate'),
(1885, 'Mercy\'s Eatery', '', '14.568178485939349', '120.99644168977038', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=e49HJ6kir0T7nylKtcRqvQ&cb_client=search.gws-prod.gps&w=408&h=240&yaw=131.05612&pitch=0&thumbfov=100', 0, 0, 'Eatery', 1, '', '2254-2205 Cong. A. Francisco, Malate, Maynila, 1004 Kalakhang Maynila', 'Malate'),
(1886, 'MANZ Pet Supply', '', '14.57038495475009', '121.00515385643469', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/119126264_3333156080099994_5060875594443687292_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeE4eJ1u1u8oTm1xSKxryyDY4tXSA_bw56bi1dID9vDnpr5p3dKpM9BdMGmPs49NslZifNb4PXYWD5_4JxK3dOaz&_nc_ohc=QaugNkPvGAYAX_Kxqfc&_nc_ht=scontent.fmnl6-1.fna&oh=4e154b4db77f45d54ecefc71096e5948&oe=61902336', 0, 0, 'Store', 2, '7:30am-8pm', '2502 Alabastro St. Cor. Sagrada Familia St, San Andres Bukid Manila, Manila, 1017 Metro Manila', 'San Andres'),
(1887, 'Manuel Acuña Roxas Monument and Historical Marker', '', '14.573370438883204', '120.98108158351799', 'https://2.bp.blogspot.com/-IHoWDG27jQ8/WORh-3hmupI/AAAAAAAABNc/tD4ByzIhosQnPrv91KhxxnKfszY8WFwEwCLcB/s1600/Remembering%2BManuel%2BManoling%2BRoxas.jpg', 0, 0, 'Historical Landmark', 1, '', '517 Roxas Boulevard, Malate, Maynila, 1004 Kalakhang Maynila', 'Malate'),
(1888, 'Manila Vice', '', '14.569723386194129', '120.98298521743135', 'https://www.flickr.com/photos/69261971@N00/542042809', 0, 0, 'Bar', 3, '4pm-4am', 'Across, Roxas Blvd, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1889, 'Manila Fitness', '', '14.57184493866859', '121.00269126817308', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/67474317_1768912526544937_4234453281268563968_n.png?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeFDVlWP5MJUX_QpLolItmvGHvND0RoQo68e80PRGhCjr5jlWXIJo2HSa7XGEgbuAGAHhUDJA_UQHFEho00YkFak&_nc_ohc=2B57E04ErHgAX8sxNEt&_nc_ht=scontent.fmnl6-1.fna&oh=d7dac7f2a5d972159abf96995692d6e8&oe=61921A47', 0, 0, 'Gym', 2, '', '2335 Zafiro St., San Andres 1017 Manila, Philippines', 'San Andres'),
(1890, 'MANGCHAI CAFE', '', '14.573022658768979', '121.0029513449852', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/201313822_1308210916247434_5206611675129878556_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeHb7cDP7F7kzUcrkV4AxOQcfMsYBoIVtlF8yxgGghW2UU7qVPO0m38wW7hmf3L5uN37iF58lN0bzOmcHrd9AnXi&_nc_ohc=XcP341Err7cAX8MNYzP&_nc_oc=AQl2T8sV1UvyQIXLXEhV5N5LBcjITlx-VULxwdrCpGnZG9zTcQJ0JiIIvB8QZxXZasY&_nc_ht=scontent.fmnl6-1.fna&oh=6d8a98ba9757eb4026a7c47dc4745a35&oe=6191A81F', 0, 0, 'Café', 2, '10am-9:30pm', '1624 Agusto Francisco, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1891, 'Malate Catholic School', '', '14.568623720040975', '120.98629861531502', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/05592jfMalate_Catholic_School_Barangays_Streets_Buildings_Manilafvf_03.jpg/220px-05592jfMalate_Catholic_School_Barangays_Streets_Buildings_Manilafvf_03.jpg', 0, 0, 'School', 1, '', '2115 Madre Ignacia St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1892, 'Lugawan ni Mang Kanor', '', '14.567850616466895', '120.9963895727139', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=f_Tkhm7_duPJJ1e-lHyF7A&cb_client=search.gws-prod.gps&w=408&h=240&yaw=102.42987&pitch=0&thumbfov=100', 0, 0, 'Eatery', 1, '7am-9pm', '1149 F. Torres Singalong Zapanta, Malate, Maynila, 1004 Kalakhang Maynila', 'Malate'),
(1893, 'Lugaw One Project', '', '14.56906246751985', '121.0018979657182', 'https://lh5.googleusercontent.com/p/AF1QipOS56dglbS5Z3NfRM4fk4hzDsRF02WcgCQ71bq-=w408-h306-k-no', 0, 0, 'Restaurant', 1, '', '2414 Perlita, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1894, 'Landbank Plaza MALATE', '', '14.57267428636942', '120.98276432908361', 'https://lh5.googleusercontent.com/p/AF1QipPSD4ZoJhbdcPGcEyHigIjnIFLJLgXSjo5xIrRz=w426-h240-k-no', 0, 0, 'Bank', 2, '', '1598, 1004 M. H. Del Pilar St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1895, 'Lala\'s Pizza', '', '14.56789096965601', '120.99699413027979', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=4ZFA9KQa_p18MPoe8yF8ww&cb_client=search.gws-prod.gps&w=408&h=240&yaw=95.7485&pitch=0&thumbfov=100', 0, 0, 'Fast Food', 2, '', 'Malate, Manila, 1004 Metro Manila', 'Malate'),
(1896, 'KALOSph MANILA', '', '14.568588224938761', '121.00306927543123', 'https://lh5.googleusercontent.com/p/AF1QipPlRZ5vlapGGdPx6Bf2jP3GRo18tJGydj_C8SlW=w408-h306-k-no', 0, 0, 'Clothing Store', 2, '9am-6pm', '1391 Sagrada Familia St, corner Agata, Santa Ana, Manila, Metro Manila', 'San Andres'),
(1897, 'Kain Na Chinese Carinderia', '', '14.563667298573991', '120.99951218293724', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t1.6435-9/47393164_305936060257538_8664443753370484736_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeFmyOr8A1Q9GIUngDorv39iUE3KxjneV9dQTcrGOd5X17Ed_maxRcakHcnp67MYvFGY2qRPKFr2mUZUgRHWv00H&_nc_ohc=N-eVvW83q-YAX-IKZvx&_nc_ht=scontent.fmnl6-2.fna&oh=ec3d446138ec2c080996a08602ca9ca6&oe=619217B2', 0, 0, 'Fast Food', 2, '8am-3pm', '2637 Bautista Cor a Roxas St, Santa Ana, Manila, 1009 Metro Manila', 'Sta. Ana'),
(1898, 'JUNA Luxury Lounge', '', '14.570147299551438', '120.98285916367928', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/123194795_191686902455833_4218614733714414918_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeGzdc6_np7oaADQ5tfAgz6otTBhPaC1fwe1MGE9oLV_B1oH2k5oinmOF3dahygUdtxtV9m_uuolVd0IFspWTJn2&_nc_ohc=VuVM9r1HbDsAX-4wC9A&_nc_ht=scontent.fmnl6-1.fna&oh=a2c115d0b65d00b3adfa1fb35fc1a039&oe=618F944A', 0, 0, 'Bar', 3, '7pm-3am', 'PH, 1140 Roxas Blvd, Malate, Manila, 1000 Metro Manila', 'Malate'),
(1899, 'Jose P. Laurel Monument and Jose P. Laurel Historical Marker', '', '14.572985540829896', '120.98131425468176', 'http://gallery.freeworldcreations.com/images/ManuelAcunaRoxas_495_2.jpg', 0, 0, 'Historical Landmark', 1, '', '517 Roxas Blvd, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1900, 'Jim\'s Pares & Mami', '', '120.98638122446583', '14.572472033034247', 'https://cdn.rcimg.net/rapsantos/images/c1430710/58ea207521cc9edebaca105671117c81.jpg', 0, 0, 'Restaurant', 3, '', '1739 Maria Orosa St, Malate, Manila, 1004 Metro Manila, Philippines', 'Malate'),
(1901, 'Jeny Store', '', '14.567418375014347', '120.98982576774752', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=BiXjnlic8GzzTAXvg8gNpQ&cb_client=search.gws-prod.gps&w=408&h=240&yaw=214.154&pitch=0&thumbfov=100', 0, 0, 'Convenience Store', 1, '', '2164 Leveriza St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1902, 'Jaz Rock Burger Aviadores', 'We offer mouth watering Burgers, Fries, Sandwiches, Nacho, Quesadilla, Pasta, Shakes, Chills etc', '14.57462710137906', '120.9997625270543', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/118234828_100174091825070_4715749954078890686_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeFJrHoFxQP8aFVkSZAB51v69MU4aF8w7-v0xThoXzDv6w0-aLwxgejoPg43dI26y7wYQ8I_0uIp8YzhwikvurFF&_nc_ohc=7Prmj4PUsr0AX-L1AQA&_nc_ht=scontent.fmnl6-1.fna&oh=59dfdcefc02a48b866927e7fb32fc50c&oe=6190EB07', 0, 0, 'Restaurant', 2, '3am-1am', '1564 Aviadores, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1903, 'J. Lunar\'s Bakery', '', '14.573435082328968', '120.9972661902526', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t1.6435-9/37370025_1572926749484969_918434573921026048_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeGmkuK-zHtstzgYWNqVnebHGuWgu_8KRTUa5aC7_wpFNRdNeMLjGTamvFrS-wYR7D4bmpDAjLtcnQtAKolnbKu-&_nc_ohc=BFbTiCu9Vu0AX-3knYt&_nc_ht=scontent.fmnl6-2.fna&oh=c20661ba5f53f3bd13b7e8a5396aaa2d&oe=61914325', 0, 0, 'Bakery', 1, '', '2034 F. Munoz St, Malate, Manila, 1000 Metro Manila', 'Malate'),
(1904, 'J & D Snacks & Goodies Hub', '', '14.566403328461618', '121.00257653082602', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t31.18172-8/27368634_144772972843715_5931336894504088861_o.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeFaz4Ht6sAufjvjCRRaIMK35BvTV2voJVzkG9NXa-glXOjACPN0Rqui-vWHGDBMOgMLGCcmANj5_UJFj4obxKIA&_nc_ohc=kkV9fKJD25oAX8987f5&_nc_ht=scontent.fmnl6-2.fna&oh=cba3c53d078180532eb5b891247cc729&oe=618F7ED6', 0, 0, 'Store', 2, '12pm-9:20pm', '1303 Lemery st. Vito Cruz ext. Cor, Osmeña Hwy, Manila', 'San Andres'),
(1905, 'Ignacio Villamor Senior High School', '', '14.576235047040754', '121.0085451865514', 'https://lh3.googleusercontent.com/p/AF1QipMinwjYKvwBj-4eg7sxM_Tatp7GFEUWfviD7sss=s1600-w400', 0, 0, 'School', 1, '', '2150 San Andres Ext, San Andres Bukid, Manila, 1017 Metro Manila', 'San Andres'),
(1906, 'Hungree Burgers Zobel', '', '14.567397890455107', '121.00435771611176', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t31.18172-8/30921747_1000827060069074_5370635429496008262_o.png?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeG_skvAb31glJgA2aHn0Dk_gcuJ6AdFeQ2By4noB0V5DbuTqNDp7fnC6zCyuKWuPDgw2H5Fgx118xmqbSdW8ycn&_nc_ohc=Chu0xDbAs0wAX9OpiDO&_nc_ht=scontent.fmnl6-2.fna&oh=1a0a93c39748c221a40eaf6772a1bd0b&oe=61929FC4', 0, 0, 'Fast Food', 2, '', '1421-B Zobel Roxas St, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1907, 'Holy Family Parish Church', '', '14.572455415597913', '121.00745084524844', 'https://brideworthy.libpx.com/images/public/churchbanners/churches_1457272923_8793_4756.jpg?upscale=false&width=1024&height=768&signature=72c3e7aae15b5180c9155544198bcea2a28bb96b', 0, 0, 'Church', 1, '', 'Sagrada Familia, San Andres Bukid, Maynila, Kalakhang Maynila', 'San Andres'),
(1908, 'HGHMNDS MALATE', '', '14.56561229955441', '120.99812103031785', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.18169-9/21764840_1468685749834096_6271107100823762421_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeGkKx2dScuxe1uMcxAtGdGEkAY5o2pTbs2QBjmjalNuzXsK-mz_YQaWxA7OhKoSDtZjB8b2S-UCqYuj9_ebcL-e&_nc_ohc=6msCVHgpfvYAX9TFyH0&_nc_ht=scontent.fmnl6-1.fna&oh=52b0feffc9d56af07834795a7f4c62a9&oe=618FCFF0', 0, 0, 'Store', 3, '10am-7pm', '1049 Unit 3C, Ayala Street corner Manila City PH, Arellano Ave, Malate, Manila, Metro Manila', 'Malate'),
(1909, 'Harbour Square', 'Harbour Square is a compound with a collection of restaurants, bars and cafes. A perfect place to have dinner or coffee after attending shows from the Cultural Center of the Philippines (CCP), Folk Arts Theater or even Aliw Theater.', '14.558819795603053', '120.98410726940175', 'http://photos.wikimapia.org/p/00/00/57/08/32_big.jpg', 4.3, 1151, 'Park', 1, '', '1202 Bukaneg St, Malate, Manila, 1307 Metro Manila', 'Malate'),
(1910, 'Hanzala Rice And Halal Chicken Store', '', '14.57182378324779', '121.00399514360187', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=yfcn_1F_BHI9EBMmj9OGAA&cb_client=search.gws-prod.gps&w=408&h=240&yaw=200.65224&pitch=0&thumbfov=100', 0, 0, 'Restaurant', 2, '', '2389 Topacio, San Andres Bukid, Manila, 1017 Metro Manila', 'San Andres'),
(1911, 'gratuiTEA', '', '14.568157437966464', '121.00303413613722', 'https://lh5.googleusercontent.com/p/AF1QipNWywCN3hZmTcGRMHhY_RUfjEkuJc0jM8Y_QEbc=w408-h306-k-no', 0, 0, 'Bubble Tea Store', 2, '3pm-9pm', '2502 Madre Perla, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1912, 'GRAIL MANILA Clothing Store', '', '14.569694850025169', '121.00050139555317', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=Puxo3VyC-TQn_K9SRgx-Zg&cb_client=search.gws-prod.gps&w=408&h=240&yaw=67.909904&pitch=0&thumbfov=100', 0, 0, 'Store', 2, '', '2342 G.Del Pilar, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1913, 'GDeng\'s Tapsilugan', '', '14.574531293819172', '121.0042596606333', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=eQVuJ8tCXltZQaeP-pf3lg&cb_client=search.gws-prod.gps&w=408&h=240&yaw=317.18765&pitch=0&thumbfov=100', 0, 0, 'Eatery', 1, '', '1729 Radium St, cor Agusto Francisco, San Andres Bukid, Manila, 1017 Metro Manila', 'San Andres');
INSERT INTO `places` (`PlaceID`, `Pname`, `Des`, `Lat`, `Lot`, `img`, `Rating`, `reviews`, `type`, `price`, `hours`, `address`, `District`) VALUES
(1914, 'Gabinete\'s Eatery', '', '14.570338353420473', '120.98775587976205', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=FYdHBwmGyu2RIAuORWG2Xw&cb_client=search.gws-prod.gps&w=408&h=240&yaw=260.42587&pitch=0&thumbfov=100', 0, 0, 'Eatery', 1, '', '1695 MA Orosa St Cor Malvar St, Bgy 698, Zone 076 Malate Manila', 'Malate'),
(1915, 'Fo Guang Shan Mabuhay Temple', 'Fo Guang Shan Mabuhay Temple offers free meditation sessions, lectures and other activities that nourish the mind and body.', '14.560591678834088', '120.99190686840637', 'https://www.travelmyglobe.com/images/Uploaded/philippines/Philippine_Fo%20Guang%20Shan1.jpg', 0, 0, 'Church', 1, '9am-9pm', '656 Ocampo St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1916, 'Evan\'s Goto', '', '14.569363373667287', '120.9879444546817', 'https://d1sag4ddilekf6.azureedge.net/compressed/merchants/2-C2LBLULVVUKAR2/hero/3c35f3fd0f034efba3664df5083023b2_1614154582720165061.jpeg', 0, 0, 'Fast Food', 1, '', '620 San Andres St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1917, 'Ellinwood Malate Church Historical Marker', '', '14.574869222670978', '120.98730155468179', 'http://3.bp.blogspot.com/-gkDZFvFy294/TrPynQ9JnaI/AAAAAAAAC4k/79JmJ_xx6vg/s1600/Elinwood+Malate+Church+%25281%2529.jpg', 0, 0, 'Historical Landmark', 1, '', '1660 Dr Antonio Vasquez, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1918, 'Dolora\'s Hauz Of Pancit Malabon (Dian Branch)', '', '14.564413172998098', '121.00075779970292', 'https://doloras.com/live/upload/1604831697-Branch-14.jpg', 0, 0, 'Fast Food', 2, '8:30-7pm', '2640 Dian St, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1919, 'Dear Self Aesthetic and Wellness Spa', '', '14.57226765492915', '120.99139273845242', 'https://lh5.googleusercontent.com/p/AF1QipMgeR2_l6ZNLlMhe0cNi1qNkJF65gY6MXoyT2hi=w1080-k-no', 0, 0, 'Spa', 3, '', '1928, 1004 Leon Guinto St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1920, 'De La Salle University Manila', '', '14.56445279857318', '120.9940279069287', 'https://lh5.googleusercontent.com/p/AF1QipPvC-lecQ8iG6DXX9vr9l5nYcyYlKwt5e7tcDk=w408-h245-k-no', 0, 0, 'University', 1, '6am-9pm', '2401 Taft Ave, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1921, 'Datablitz MALATE', '', '14.574884380880338', '120.99000281598575', 'https://datablitz.com.ph/userfiles/image/obhs.jpg', 0, 0, 'Store', 2, '', '1004 Leon Guinto St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1922, 'Dangs Tapsihan', '', '14.570386378450966', '120.98786115646764', 'https://lh3.googleusercontent.com/proxy/MzswTHDZ4I-XOGkULDIHFzmVdGqLkq7-BVSsjN0dw-b8K0YW77ITV3RNvGwqRkFiR6jtJPQ6o-WgislehogyFhuoeLIlbdll5xa1Q7Q-lWwBjaLDdHssPtKCdAH1XSFYpxnPZnTTjL8Y4FI1XdpiGfVuUwsZb5FFp8ooHQ0XDBmO=w408-h306-k-no', 0, 0, 'Eatery', 1, '', '1924 Maria Orosa, Malate, Manila, 1004 Metro Manila, Philippines', 'Malate'),
(1923, 'Dagonoy Public Market', '', '14.572325851201269', '121.00478742448442', 'https://mapio.net/images-p/106077105.jpg', 0, 0, 'Market', 2, '6am-9pm', 'Florentino Torres, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1924, 'cyrinTEAna Milktea and Sandwich', 'CyrinTeana Milktea & Sandwich offer great products and services. It\'s a crowd favorite even it is a little bit expensive but it is worth it for the price. - have some cup of Milktea for your immuniTEA system', '14.57066675738192', '121.00739629700935', 'https://scontent.fmnl8-1.fna.fbcdn.net/v/t39.30808-6/245424247_122305076835012_1913388894760461301_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeFWWhh3_g8ZyJ91REsSvPCl9wMXCbSPv3P3AxcJtI-_cz6YoQhpcSpA-cVefKnbTFwlWxn_rxuwTF2ccyup3T8n&_nc_ohc=csun6lFG3', 0, 0, 'Bubble Tea Store', 2, '', '2584 Onyx St Corner Zobel Roxas San Andres Bukid Manila 1204 Manila, Philippines', 'San Andres'),
(1925, 'Cup of Tea by Kaitley', '', '14.57059386202725', '120.99955658338224', 'https://lh5.googleusercontent.com/p/AF1QipPi9P2F5RdjMEbPhkYEas9d_de8KanpjUg0R8iw=w1080-k-no', 0, 0, 'Café', 2, '', '1251 Agusto Francisco, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1926, 'Cratefull Manila', '', '14.566824398508436', '120.99813537458559', 'https://lh5.googleusercontent.com/p/AF1QipNimiNMRJaCa0UwPHgOYT0GqkI00ckYcnzjr8Mn=w408-h408-k-no', 0, 0, 'Store', 2, '', '2460 Arellano Luxury Pad bldg, 1004 Arellano Ave, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1927, 'Church Of Malate Historical Marker', '', '14.56921400898838', '120.98430325897102', 'http://triptheislands.com/wp-content/uploads/2014/06/Malate_Church_facade.jpg', 0, 0, 'Historical Landmark', 1, '', '542 Remedios St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1928, 'Christian Bible Baptist Church', '', '14.571266524613286', '121.00348796641374', 'https://lh5.googleusercontent.com/p/AF1QipPska4bCtRhC7GYibl5s6GjXVmhD-LBpd8Bpwz0=w408-h272-k-no', 0, 0, 'Church', 1, '', '2391 Zafiro, San Andres Bukid, Manila, Metro Manila', 'San Andres'),
(1929, 'Chris Chicken Chicken Canteen', '', '14.566368159849349', '120.99864961940871', 'https://10619-2.s.cdn12.com/rests/original/104_501135064.jpg', 0, 0, 'Eatery', 1, '', '1085 Estrada St., Singalong, Malate, Manila, Estrada St, San Andres Bukid, Manila, 1004 Metro Manila', 'Malate'),
(1930, 'Chowking San Andres', '', '14.571843789827978', '120.99503312584558', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp-cYlsrC3XQXhHHMKcTcwiiMMdf5U8mIhIBN6xHEiae9AnhW3eixlt4rQQBDWJnRlNVM&usqp=CAU', 0, 0, 'Fast Food', 2, '', '1119 singalong st. san andres bukid malate manila 1004 Manila, Philippines', 'San Andres'),
(1931, 'Casino Filipino - Malate', '', '14.573016560780188', '120.9824910525504', 'https://choicecasino.com/media/ground_casino_photo/0001/51/thumb_50685_ground_casino_photo_retina.jpeg', 0, 0, 'Casino', 3, '24hrs', '1330 Roxas Blvd, Ermita, Manila, 1004 Metro Manila', 'Malate'),
(1932, 'Cafe Chizon\'s MLK & TEA', '', '14.564988412481023', '120.99039459344765', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/119734466_604835560209551_6762994573919428798_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeEABv0ebExCm85p01Z3z_3adY2gMMfCmKN1jaAwx8KYoxWoLzqWKjWdrGWW3Fuvlr4xAbHGkk41ez3yfcZpc7If&_nc_ohc=WX3bo4XWG_YAX-Q2ZkR&_nc_ht=scontent.fmnl6-1.fna&oh=7a590eb3c1f8c89aba088434efc8a3ed&oe=61900259', 0, 0, 'Café', 2, '9:4am-11pm', '2312 M. Adriatico St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1933, 'Cafe Alicia', '', '14.560630692066088', '120.99163529326603', 'https://b.zmtcdn.com/data/pictures/0/18136770/204e633821e7ded551e3d01d2f2c0610.jpg', 0, 0, 'Restaurant', 2, '8am-11pm', '634 Ocampo St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1934, 'But First, Coffee - Malate (BFC Malate, Manila Branch)', 'Great coffee for as low as 60php, delivered to your doorstep.', '14.571355371116407', '120.98337862584553', 'https://scontent.fmnl6-2.fna.fbcdn.net/v/t1.6435-9/178855999_1062599964262380_3876544214514251923_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeEGwvIm27xjicLSX82A_0HLEUgdDhIs4HYRSB0OEizgdmpJZQ-TTxS0GlMgDGDgUZwfHEKgvOrMg_nH9fvUw8GH&_nc_ohc=stoQqqTHLvUAX9OM4jN&_nc_ht=scontent.fmnl6-2.fna&oh=3af6acf1454309190bde46a1e299ec22&oe=6191F6A3', 0, 0, 'Cafe', 2, '', 'Alpha Grandview Condominium, M.H. Del Pilar St., Malate, Manila 1004 Manila, Philippines', 'Malate'),
(1935, 'Brew that Kape MNL', '', '14.570436691701373', '120.9984040434507', 'https://lh5.googleusercontent.com/p/AF1QipPi9P2F5RdjMEbPhkYEas9d_de8KanpjUg0R8iw=w1080-k-no', 5, 3, 'Café', 2, '', 'San Andres Bukid, Manila, 1004 Metro Manila', 'San Andres'),
(1936, 'Bounti Gym', '', '14.568338822056191', '121.00266126921048', 'https://lh5.googleusercontent.com/p/AF1QipOUdY54QW8e7_Mm1DHttLYNPZVDx4E1NsFHtMIH=w408-h544-k-no', 0, 0, 'Gym', 2, '6am-11pm', 'St, 2471 Madre Perla, San Andres Bukid, Manila City, 1017 Metro Manila', 'San Andres'),
(1937, 'BigBrew San Andres', 'Big in taste, Bit in price', '14.57316737348564', '121.00541665468184', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/158933621_108413154652225_9183865977526850806_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeEdhGUFe2AlUE6kzwNqgb3raQAzm5lrbw5pADObmWtvDj_txcdYm5bnWM1pxs6YH1lc5t3NUSY91e6B_iQnwx7m&_nc_ohc=6dLvlnVT4IYAX9zyJ2T&tn=5qgQoNliJ2ProirS&_nc_ht=scontent.fmnl6-1.fna&oh=271069c724dc9087d2c6c4a4d497f97c&oe=6192DCA4', 0, 0, 'Take out', 2, '', '1757 Florentino Torres Street San Andres Bukid 1017 Manila, Philippines', 'San Andres'),
(1938, 'Becky\'s Kitchen', '', '14.564548673137622', '120.99898192792675', 'https://b.zmtcdn.com/data/reviews_photos/381/8b3bb8eb8233a968bc4b17c6e7219381_1437121067.jpg?output-format=webp&fit=around|300:273&crop=300:273;*,*', 0, 0, 'Eatery', 1, '7am-9pm', '1061 Ocampo St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1939, 'Bangko Sentral ng Pilipinas MAIN, Gate 6', '', '14.561832348255829', '120.98655041724815', 'http://images.gmanews.tv/webpics/2017/08/640_malate-bsp_2017_08_07_12_19_14.jpg', 0, 0, 'Bank', 2, '8am-5pm', '2335 Roxas Blvd, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1940, 'Babe Mike Shawarma', '', '14.56111255458082', '120.9943051556161', 'https://fastly.4sqi.net/img/general/600x600/22604975_0v90XqaY9chOTyWMf9Cc8JMW1wqbY2RxwAZwJrOZJD4.jpg', 0, 0, 'Fast Food', 1, '', '770 Ocampo St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1941, 'Aurora A. Quezon Elementary School', '', '14.57013832704623', '120.9890979148203', 'https://lh5.googleusercontent.com/p/AF1QipPzCnZD7imcib3wpmtx9IiCYovP3YSa7IA2uhvd=w426-h240-k-no', 0, 0, 'School', 1, '', 'R, San Andres St, Malate, Manila, Metro Manila', 'Malate'),
(1942, 'ASEAN Garden', '', '14.559643204856764', '120.98642311330035', 'https://www.travelmyglobe.com/images/Uploaded/philippines/Ph_ASEAN%20Garden1.jpg', 0, 0, 'Park', 1, '24hrs', 'HX5P+VHF, Malate, Maynila, 1004 Kalakhang Maynila', 'Malate'),
(1943, 'Annyeong Corndog- Sta. Ana, Manila', 'A South Korean street snack that gained attention and fame lately is now in Sta. Ana, Manila! A stick dipped snack in heavy batter with our signature annyeong corndog flavors will bring you an experience worth coming back for.', '14.568554132915816', '121.00388436531765', 'http://surl.li/akulj', 0, 0, 'Fast Food', 1, '', '2525 Esmeralda St. San Andres, Manila', 'San Andres'),
(1944, 'Andy\'S Famous Batangas Lomi & Bulalo', '', '14.571821555604783', '120.99488860225665', 'https://lh5.googleusercontent.com/p/AF1QipO7CDgwfZN9YFAtRlptOnfOkyuAOAHwBThiLYgA=w408-h306-k-no', 0, 0, 'Restaurant', 2, '10am-9:30pm', '1119 Singalong St, Malate, Manila, 1004 Metro Manila', 'Malate'),
(1945, 'Andok\'s San Andres Bukid', '', '14.57294791732722', '121.00028836294966', 'https://lh5.googleusercontent.com/p/AF1QipNO1RxdygQc8uwCo68ABNSU6x0jI8gO7v3jmxk=w408-h306-k-no', 0, 0, 'Take out', 2, '', 'San Andres Ext., 803, San Andres Bukid, 1017 Metro Manila', 'San Andres'),
(1946, 'Akik Goto', '', '14.574684849945577', '121.00431813453696', 'https://fastly.4sqi.net/img/general/600x600/5970298_vhwBmWbtFL_tPSoK28qT1GY_SIGYLGmWFkVjI239sO0.jpg', 0, 0, 'Restaurant', 2, '24hrs', 'Radium, Manila City, Manila, Metro Manila', 'San Andres'),
(1947, 'Ahzel’s Cafe', '', '14.569258173672333', '120.98584795468176', 'https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.6435-9/167914232_111830911003951_5935105618373731477_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeHXjHc5Hxwoh-fpjPY81-GDFK3xB354WsMUrfEHfnhaw-7skHtGDtmulXLweAAeatNNQlucStuTWpSmAFyiIsWj&_nc_ohc=0Hzus1QhrggAX-WTgTK&_nc_ht=scontent.fmnl6-1.fna&oh=4240080be7aa19f686e37b5090fc52b2&oe=619258ED', 0, 0, 'Café', 2, '2pm-2am', '1956 madre ignacia malate manila', 'San Andres'),
(1948, 'ACM GENERAL MERCHANDISE', '', '14.574394850660283', '121.00384274155233', 'https://lh5.googleusercontent.com/p/AF1QipOw4z6GckmJ_hvZstBL2b8GfciIRQ_IxPMgm0-P=w408-h725-k-no', 0, 0, 'Store', 2, '', '2327 Agua Marina, San Andres Bukid, Manila, 1017 Metro Manila', 'San Andres'),
(1949, '7-Eleven Harrison st. Malate', 'Convenience chain offering grab-&-go bites & beverages, plus assorted newsstand items.', '14.559990172387637', '120.98961632317987', 'https://lh5.googleusercontent.com/p/AF1QipNUQOhhoqSAtAmuG-Ryx36pFR3gan3BmxOUdmtw=w493-h240-k-no', 0, 0, 'Store', 1, '24hrs', 'F.B. Harrison St, Malate, Manila, 1004 Metro Manila', 'Malate');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostID` int(11) NOT NULL,
  `PostTitle` varchar(55) DEFAULT NULL,
  `Cont` varchar(255) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostID`, `PostTitle`, `Cont`, `UserID`, `UserName`, `Status`) VALUES
(70, 'Manila Ocean Park', 'The Manila Ocean Park is a oceanarium in Manila, Philippines. It is owned by China Oceanis Philippines Inc., a subsidiary of China Oceanis Inc., a Singaporean-registered firm. It is located behind the Quirino Grandstand at Rizal Park.', 61, 'deocer123', 'Active'),
(74, 'Manila', 'Manila, the capital of the Philippines, is a densely populated bayside city on the island of Luzon, which mixes Spanish colonial architecture with modern skyscrapers. Intramuros, a walled city in colonial times, is the heart of Old Manila. It’s home to th', 61, 'deocer123', 'Active'),
(75, 'Manila', 'Manila, the capital of the Philippines, is a densely populated bayside city on the island of Luzon, which mixes Spanish colonial architecture with modern skyscrapers. Intramuros, a walled city in colonial times, is the heart of Old Manila. It’s home to th', 61, 'deocer123', 'Active'),
(76, 'Baguio', 'Baguio, on the Philippines’ Luzon island, is a mountain town of universities and resorts. Called the “City of Pines,” it’s particularly popular in summer due to unusually cooler weather. At its center is Burnham Park, with gardens and a lake. Nearby, Bagu', 61, 'deocer123', 'Active'),
(77, 'Baguio', 'Baguio, on the Philippines’ Luzon island, is a mountain town of universities and resorts. Called the “City of Pines,” it’s particularly popular in summer due to unusually cooler weather. At its center is Burnham Park, with gardens and a lake. Nearby, Bagu', 61, 'deocer123', 'Active'),
(78, 'Tagaytay', 'Tagaytay is a popular holiday town south of Manila on the Philippine island Luzon. Known for its mild climate, it sits on a ridge above Taal Volcano Island, an active volcano surrounded by Taal Lake', 61, 'deocer123', 'Active'),
(79, 'Taal Volcano', 'Taal Volcano is a large caldera filled by Taal Lake in the Philippines. Located in the province of Batangas, the volcano is one of the most active volcanoes in the country, with 34 recorded historical eruptions, all of which were concentrated on Volcano I', 61, 'deocer123', 'Active'),
(80, 'Taal Volcano', 'Taal Volcano is a large caldera filled by Taal Lake in the Philippines. Located in the province of Batangas, the volcano is one of the most active volcanoes in the country, with 34 recorded historical eruptions, all of which were concentrated on Volcano I', 61, 'deocer123', 'Active'),
(81, 'Batangas', 'Batangas, officially the Province of Batangas is a province in the Philippines located in the Calabarzon region on Luzon. Its capital is the city of Batangas, and is bordered by the provinces of Cavite and Laguna to the north, and Quezon to the east', 61, 'deocer123', 'Active'),
(84, 'a popular ', 'Tagaytay is a popular holiday town south of Manila on the Philippine island Luzon. Known for its mild climate, it sits on a ridge above Taal Volcano Island, an active volcano surrounded by Taal Lake.', 61, 'deocer123', 'Active'),
(85, 'Tagaytay is a popular holiday town south of Manila ', 'Tagaytay is a popular holiday town south of Manila on the Philippine island Luzon. Known for its mild climate, it sits on a ridge above Taal Volcano Island, an active volcano surrounded by Taal Lake. Overlooking the area, People’s Park in the Sky occupies', 61, 'deocer123', 'Active'),
(86, 'Holiday town south of Manila ', 'Tagaytay is a popular holiday town south of Manila ', 61, 'deocer123', 'Active'),
(87, 'Tagaytay holiday ', 'Tagaytay is a popular holiday town south of Manila ', 61, 'deocer123', 'Active'),
(88, 'Tagaytay is a popular ', 'Tagaytay is a popular holiday town south of Manila ', 61, 'deocer123', 'Active'),
(89, 'Tagaytay town south of Manila ', 'Tagaytay is a popular holiday town south of Manila ', 61, 'deocer123', 'Active'),
(90, 'South of Manila ', 'Tagaytay is a popular holiday town south of Manila ', 61, 'deocer123', 'Active'),
(92, 'Hiking!', '', 61, 'deocer123', 'Active'),
(93, 'Hiking', '', 61, 'deocer123', 'Active'),
(94, 'Luneta', 'The Luneta Park tagalog draws its name from the word lunette, meaning “crescent-shaped structure for defense used in fortifications in the 17th to 18th centuries.” The original name of Luneta Park is Bagumbayan.', 61, 'deocer123', 'Active'),
(95, ' Rizal Park', 'Rizal Park is one of the largest urban parks in Asia. At 140 acres, the park is home to the National Museum Complex, the Rizal Monument, a series of gardens, public art and event venues. The National Museum Complex consists of the National Museums of Fine', 61, 'deocer123', 'Archived'),
(97, 'The National Museum, a Trust of the Government', 'Is an educational, scientific and cultural institution that acquires, documents, preserves, exhibits, and fosters scholarly study and public appreciation of works of art, specimens, and cultural and historical artifacts', 61, 'deocer123', 'Archived'),
(99, 're', 'rerer', 98, 'deocer231', 'Active'),
(101, 'Post with Pic', 'w', 98, 'deocer231', 'Archived'),
(105, 'ewqeqw', 'eqewqeqwe', 62, 'admin123', 'Archived'),
(106, 'ewewqeq', 'eqwewqeqe', 98, 'deocer231', 'Active'),
(107, 'ewqeqwe', 'eqwewqewqe', 98, 'deocer231', 'Active'),
(108, 'w', 'w', 98, 'deocer231', 'Active'),
(109, 'e', 'e', 98, 'deocer231', 'Active'),
(110, 'weqw', 'eewqewq', 98, 'deocer231', 'Active'),
(112, 'wewqe', 'ewqewqeq', 62, 'admin123', 'Archived'),
(113, 'ewqewqewqe', 'qewqeqeqeqw', 62, 'admin123', 'Archived'),
(114, 'eweqwewq', 'eweweeqwe', 62, 'admin123', 'Deleted'),
(115, 'w', 'w', 62, 'admin123', 'Deleted'),
(116, 'eweqweqw', 'eqweqe', 62, 'admin123', 'Deleted'),
(117, 'Demo Post', 'A post demo', 130, 'DemoUser', 'Deleted'),
(118, 'A demo post', 'Demo post', 131, 'ToolUser', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewID` int(11) NOT NULL,
  `Place` varchar(55) DEFAULT NULL,
  `Cont` varchar(255) DEFAULT NULL,
  `Rating` int(11) DEFAULT 0,
  `UserID` int(11) DEFAULT NULL,
  `UserName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ReviewID`, `Place`, `Cont`, `Rating`, `UserID`, `UserName`) VALUES
(1, 'The Landmark - Makati', 'try', 2, 61, 'deocer123'),
(2, 'The Landmark - Makati', 'Hellpoint is an action role-playing game developed by Cradle Games and published by tinyBuild, released for Microsoft Windows, Linux, MacOS, PlayStation 4, and Xbox One on July 30, 2020.', 3, 61, 'deocer123'),
(3, 'Mary Grace Cafe | SM Manila', 'Very nice coffee', 3, 61, 'deocer123'),
(4, 'Mary Grace Cafe | SM Manila', 'Nice Cofefe', 4, 62, 'admin123'),
(5, 'Sanu Eatery', 'Sanu Food Hub, Las Piñas, Nueva Ecija, Philippines. 518 likes · 5 talking about this · 42 were here. Healthier options of refreshing drinks from freshly.', 3, 61, 'deocer123'),
(6, 'The Landmark - Makati', 'w', 3, 61, 'deocer123'),
(7, 'The Landmark - Makati', 'q', 3, 61, 'deocer123'),
(9, 'Sanu Eatery', 'test', 2, 61, 'deocer123'),
(10, 'National Museum of Natural History', 'very good!', 4, 61, 'deocer123'),
(13, 'Binondo Church', 'Very good', 3, 98, 'deocer231'),
(14, 'Rizal Park', 'Good', 3, 98, 'deocer231');

-- --------------------------------------------------------

--
-- Table structure for table `uflags`
--

CREATE TABLE `uflags` (
  `TrnsID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wuser`
--

CREATE TABLE `wuser` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `Status` varchar(25) NOT NULL,
  `Budget` varchar(3) NOT NULL,
  `destype` varchar(30) NOT NULL DEFAULT 'Park',
  `district` varchar(25) NOT NULL DEFAULT 'Ermita',
  `Auth` varchar(15) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wuser`
--

INSERT INTO `wuser` (`UserID`, `UserName`, `Pass`, `Status`, `Budget`, `destype`, `district`, `Auth`) VALUES
(61, 'deocer123', '$2y$10$S2UapU3N.t5xXP3mXA/0HO8u1g8IRKAIFyz35dyFnoSBKNEhwGi3y', 'Flagged', '2', 'Park', 'Ermita', 'User'),
(62, 'admin123', '$2y$10$JsW4zURwGg6PlYZr3KJ7men/YGpULfOBpEdQF4IR6Zj9TV7eCE7C2', 'Normal', '3', 'Park', 'Ermita', 'Admin'),
(98, 'deocer231', '$2y$10$BuEvCu7oZgrT4pG1HoilVe385TqR4qvgHeMpfVAy4cdwaQ7egAWB2', 'Normal', '1', 'Park', 'Ermita', 'User'),
(118, 'eqweqwew', '$2y$10$j93cOIXrpTbOeeV6Sf.3peo6/cTs7oXefFMhyZ2SUSGXqS2Iauata', 'Normal', '$$', 'Park', 'Ermita', 'User'),
(119, 'wwwwwwwweee', '$2y$10$0TzeVKbaLyMGNv/ne1M1A.ecPJL5QxLf6uKNQZlJdUwiqWEViIkBe', 'Normal', '$', 'Park', 'Ermita', 'User'),
(120, 'eweqweqq', '$2y$10$9gGEXj9sXKEHEqf9.05qHen2y8sdzzH.NzfQeZL04WLm96nCOoO.i', 'Normal', '$$', 'Park', 'San Miguel', 'User'),
(121, 'ewqewqeq', '$2y$10$KGHVKAFQCHkmdC1Dmj9MduDNWVFS9zjmSHiKkOKnqdZ/FPswePA1q', 'Normal', '$', 'Restaurants', 'Tondo', 'User'),
(122, 'wweqweqwewq', '$2y$10$FmfR7aPIMEho7EmFmxuvF.PoQ4T2am2EaRF9O4/CBo.r9DSCMzYs6', 'Normal', '$$', 'Art gallery', 'Santa Ana', 'User'),
(123, 'eqweqweqweqeq', '$2y$10$NtjAb9UPDOfuQCXBxLtFp.jU41WtJMtQISY1vzvfETE9VtY6BAZV.', 'Normal', '$', 'Art gallery', 'Port Area', 'User'),
(124, 'deocer321', '$2y$10$4RYPFiSwbQ5G2PBhohtdLOV8k3DVIiSD1pclz.WNmnlicsc8ikDU.', 'Normal', '$$$', 'Park', 'Ermita', 'User'),
(125, 'CapstoneMock2', '$2y$10$qfvVz90XkI74IWQ9SIbxNuDh9PnvOapLPS6BpKaK8Bi0M10wzfdb6', 'Normal', '$', 'Park', 'Ermita', 'User'),
(126, 'dwqewqeewqewqe', '$2y$10$jUNW46pKsFM0QC13NbkA/.A4nYZjAOnG8kHlmRlkRsFfxCF6svuO6', 'Normal', '$', 'Restaurants', 'Tondo', 'User'),
(127, 'ewqewqewqeqw', '$2y$10$UabObTAFAMnLXPwhLdWHR.a8JhmAA18ISG8ApUpoK0xfayJWqlKwa', 'Normal', '1', 'Restaurants', 'Tondo', 'User'),
(128, 'qeqweqweqeqwe', '$2y$10$KPRoXMt5SMx6vyUaECTrXOT5iy38yb4sIB1R6CZlUCA3OlXlnzjA6', 'Normal', '1', 'Restaurants', 'Sta. Mesa', 'User'),
(129, 'Demo22334', '$2y$10$HIauYq7g9cUS75NDos/V/.Mj5.MvDDaAw6R03GK75Xn5tjNPzTNeW', 'Normal', '3', 'Park', 'Ermita', 'User'),
(130, 'DemoUser', '$2y$10$wrt9gEf7A2HLw5tMAlrQ/upBFzZeJLd3AFaft/BYg52.6ubl8US7i', 'Normal', '3', 'Park', 'Ermita', 'User'),
(131, 'ToolUser', '$2y$10$OT7E6GElLX5jL31q/tvCn.csaXd9T7fJgaSAy4DB5S9PeU06siVIK', 'Normal', '2', 'Park', 'Ermita', 'User');

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
-- Indexes for table `pflags`
--
ALTER TABLE `pflags`
  ADD PRIMARY KEY (`TrnsID`),
  ADD KEY `UserID` (`UserID`),
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
-- Indexes for table `uflags`
--
ALTER TABLE `uflags`
  ADD PRIMARY KEY (`TrnsID`),
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
  MODIFY `PlcID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `panes`
--
ALTER TABLE `panes`
  MODIFY `PaneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `pflags`
--
ALTER TABLE `pflags`
  MODIFY `TrnsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `PlaceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1950;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `uflags`
--
ALTER TABLE `uflags`
  MODIFY `TrnsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wuser`
--
ALTER TABLE `wuser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

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
-- Constraints for table `pflags`
--
ALTER TABLE `pflags`
  ADD CONSTRAINT `pflags_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `wuser` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pflags_ibfk_2` FOREIGN KEY (`PostID`) REFERENCES `post` (`PostID`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `uflags`
--
ALTER TABLE `uflags`
  ADD CONSTRAINT `uflags_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `wuser` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
