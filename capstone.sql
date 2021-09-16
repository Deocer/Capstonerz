-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 05:07 PM
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
(54, 'Rizal Park', 61, 'Rizal Park'),
(55, 'Fort Santiago', 61, 'Fort Santiago'),
(56, 'Market Cafe - New Coast Hotel Manila', 61, 'Market Cafe - New Coast Hotel Manila');

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
(68, '../../uploads/6132f9bb07f2f3.75894397.jpg', 97, 'deocer123');

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
  `reviews` int(5) NOT NULL,
  `type` varchar(55) NOT NULL,
  `price` varchar(3) NOT NULL,
  `hours` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `City` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`PlaceID`, `Pname`, `Des`, `Lat`, `Lot`, `img`, `Rating`, `reviews`, `type`, `price`, `hours`, `address`, `City`) VALUES
(1335, 'Raffaele Woodfired Pizza, The Bayleaf Hotel', '', '14.5900112', '120.978804', 'https://lh5.googleusercontent.com/p/AF1QipNTP4tb0DITLYYLouzs7yfFxHAl7wFyoCEciLS9=w122-h92-k-no', 4.6, 81, 'Italian restaurant', '$', 'Temporarily closed', 'The Bayleaf Intramuros, 1002 Muralla St, Intramuros, Manila, Metro Manila, Philippines', 'Manila'),
(1336, 'Ilustrado Restaurant', 'Filipino meals in nostalgic surrounds. Traditional Filipino cuisine served in an old-school, Spanish-style venue with antique decor.', '14.5875418', '120.9770326', 'https://lh5.googleusercontent.com/p/AF1QipNBMhjRwbeTWVpe2JGT1D79vWjo5wH_YMcsEdyC=w122-h92-k-no', 4.2, 304, 'Filipino restaurant', '$$', 'Open until 7:00 PM', '744 General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1337, 'Ilustrado - General Luna', '', '14.587596', '120.976987', 'https://lh5.googleusercontent.com/p/AF1QipMcjgM6saSct0rew1EjdPG8d8xY4CABnZUoy0XS=w80-h106-k-no', 4.2, 203, 'Asian restaurant', '$$', 'Open until 11:00 PM', '744 General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1338, 'The Aristocrat Restaurant, SM Manila', '', '14.5910375', '120.9818902', 'https://lh5.googleusercontent.com/p/AF1QipMJK0f4RWfYM83_pa9AyRdHzCaCzh7tm_HqYpaL=w122-h92-k-no', 3.6, 11, 'Restaurant', '$$', 'Open until 6:00 PM', 'Concepcion cor. Arroceros and San Miguel Sts, Ermita, Manila, Philippines', 'Manila'),
(1339, 'Cafe Ilang-Ilang', '', '14.582938', '120.9740848', 'https://lh5.googleusercontent.com/p/AF1QipOLt1Xt3mtJ0WKjhQzLhCQZPeQupUdjQ-LW-ZXG=w163-h92-k-no', 4.6, 732, 'Buffet restaurant', '$$$', 'Closing soon: 2:30 PM', 'Manila Hotel, 1 Rizal Park, Ermita, Manila, 0913 Metro Manila, Philippines', 'Manila'),
(1340, 'Harbor View Restaurant', '', '14.5778275', '120.9743613', 'https://lh5.googleusercontent.com/p/AF1QipOwkQhxK7T4CWTB1fiUncv1iwQNL1C1Rl_Ov7fx=w122-h92-k-no', 4.2, 1010, 'Restaurant', '$$', 'Open until 10:00 PM', 'South Dr, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1341, 'Barbara\'s Heritage Restaurant', '', '14.5894156', '120.9752694', 'https://lh5.googleusercontent.com/p/AF1QipPZHSSz8rCvyik-3YJoVeEzMoFPFmFkvrssAlfE=w163-h92-k-no', 4.2, 511, 'Filipino restaurant', '$$', 'Closing soon: 2:30 PM', 'HXQG+V52, plaza sans luis complex, General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1342, 'Plaza San Luis Complex', '', '14.5896306', '120.9753879', 'https://lh5.googleusercontent.com/p/AF1QipMYStR32cYoVH40T5H46sRpUUx5kLSKJCdzZ1ck=w163-h92-k-no', 4.4, 277, 'Restaurant', '$', 'Open until 5:00 PM', 'General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1343, '9 SPOONS - The Bayleaf Intramuros', '', '14.589926', '120.978776', 'https://lh5.googleusercontent.com/p/AF1QipOO5iIkhcGyBOAcH0mThVL0kdSanSTRznCcWxw_=w163-h92-k-no', 4.3, 224, 'Restaurant', '$', 'Open until 10:30 PM', 'The Bayleaf Intramuros, 9/F Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1344, 'Sky Deck View Bar - The Bayleaf Intramuros', '', '14.5900225', '120.978795', 'https://lh5.googleusercontent.com/p/AF1QipOJJY0Ejmmb_z-P4ebll9cosAr5zgh8gIyvDVoB=w80-h106-k-no', 4.4, 795, 'Restaurant', '$$', 'Opens at 3:00 PM', 'The Bayleaf Intramuros, Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1345, 'Ristorante delle Mitre', '', '14.589485', '120.9746813', 'https://lh5.googleusercontent.com/p/AF1QipMcl1CKqyrQulciEFtLRnjvFSSkb8bRn2HW0c1l=w122-h92-k-no', 4.2, 294, 'Restaurant', '$$', 'Open until 8:00 PM', 'Opposite San Agustin Church, Real St, Intramuros, Manila, Metro Manila, Philippines', 'Manila'),
(1346, 'Chibz Restobar', '', '14.5906407', '120.9761587', 'https://lh5.googleusercontent.com/p/AF1QipNA_ZUQE6OdOrg3sVGgPLgdDaivKETli_2KUv7x=w122-h92-k-no', 4.6, 32, 'Bar', '$', 'Open until 2:00 AM', 'Real St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1347, 'Bistro Remedios', '', '14.5698672', '120.9861935', 'https://lh5.googleusercontent.com/p/AF1QipNUySYApDLFCxBI0uGwrXI54looIs4177fhj4yd=w122-h92-k-no', 4.4, 252, 'Filipino restaurant', '$$', 'Open until 3:00 PM', '1911 M. Adriatico St, Malate, Manila, 1004 Metro Manila, Philippines', 'Manila'),
(1348, 'Caruso Ristorante Italiano', '', '14.5653662', '121.0229127', 'https://lh5.googleusercontent.com/p/AF1QipMvHZxwrkyl-Dz6fqgSz66R--xO-BMiqikvJccA=w80-h106-k-no', 4.5, 286, 'Italian restaurant', '$', 'Closing soon: 2:30 PM', 'Ground floor, LRI Design Plaza, 210 Nicanor Garcia, Makati, 1209 Metro Manila, Philippines', 'Manila'),
(1349, 'Ying Ying Tea House', '', '14.59797', '120.976713', 'https://lh5.googleusercontent.com/p/AF1QipNJrCOhZG2DgiiMRtEzLw_P2HQO58lsnqbZztsK=w163-h92-k-no', 4.3, 1718, 'Lechon restaurant', '$$', 'Open until 6:00 PM', '233-235 Yuchengco St, Binondo, Manila, 1006 Metro Manila, Philippines', 'Manila'),
(1350, 'Oody\'s Bar and Restaurant', '', '14.57536', '120.984737', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=ElH15SIEMXVG6U2SQXTHyg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=25.532736&pitch=0&thumbfov=100', 0, 0, 'Restaurant', '$', 'Open until 9:00 PM', 'Robinsons Place Manila 1st Level, Pedro Gil, corner M. Adriatico St, Ermita, Manila City, 1000 Metro Manila, Philippines', 'Manila'),
(1351, 'Sisig restaurant', '', '14.6028184', '120.9854452', 'https://lh5.googleusercontent.com/p/AF1QipOs3yF4S54AQranXeAO6R0mBDPXOAnJYATLbxX2=w122-h92-k-no', 0, 0, 'Restaurant', '$', 'Open until 8:00 PM', '1802, 1008 Recto Ave, Quiapo, Manila, Metro Manila, Philippines', 'Manila'),
(1352, 'G-Point Smörgåsbord & Bar', '', '14.5774784', '120.9817085', 'https://lh5.googleusercontent.com/p/AF1QipMyc42ieHd190Y7IjizvATwsuG-vhuy3e72mCYq=w122-h92-k-no', 4, 353, 'Restaurant', '$$', 'Open until 4:00 AM', '510 Padre Faura St, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1353, 'Market Cafe - New Coast Hotel Manila', '', '14.5732996', '120.98254', 'https://lh5.googleusercontent.com/p/AF1QipPWZa2f5E2US5VUgxyp6Q2pi2K9pzJ7OhHOc2Bp=w122-h92-k-no', 4.3, 302, 'Restaurant', '$', 'Open until 10:00 PM', '3rd Floor New Coast Hotel Manila 1588 Pedro Gil, corner M. H. Del Pilar St, Malate, Manila, 1004 Metro Manila, Philippines', 'Manila'),
(1354, 'Casa Manila', 'Museum depicting Spanish colonial life. This restored 1850s house is now a museum displaying Spanish colonial furniture, art & architecture.', '14.5894444', '120.9752778', 'https://lh5.googleusercontent.com/p/AF1QipPM7XdM1WFZjNPVB7jaFrP_lB0yvYsK0U-Ovrq4=w138-h92-k-no', 4.6, 287, 'Museum', '$', 'Closed ⋅ Opens 9AM Tue', 'HXQG+V52, plaza sans luis complex, General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1355, 'Manila Baywalk', 'Waterfront walkway for sunset views. Bordered by open-air cafes, this long, bayside walkway is a popular place to watch the sunset.', '14.568052', '120.982999', 'https://lh5.googleusercontent.com/p/AF1QipMxmFUXNbKgWIBqXyMFwNYS7EYdVODtPrlbL90=w122-h92-k-no', 4.1, 2357, 'Tourist attraction', '$', 'Open until 12:30 AM', 'Roxas Blvd, Malate, Manila, 1004 Metro Manila, Philippines', 'Manila'),
(1356, 'Rizal Park', 'Large park for strolling & public events. Grand 140-acre park featuring lawns, gardens, outdoor events & a monument to hero José Rizal.', '14.5831177', '120.9794171', 'https://lh5.googleusercontent.com/p/AF1QipMVMi36DchOf8QEpfiz1-EY3PoJLOwGge1Kvge2=w122-h92-k-no', 4.5, 20422, 'Park', '$', 'Open until 9:00 PM', 'Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1357, 'Fort Santiago', 'Iconic citadel & with a hero\'s memorial. This landmark defensive fortress features a museum commemorating the national hero José Rizal.', '14.5942337', '120.970412', '//lh4.googleusercontent.com/proxy/WDJmT4O53bizFTZF8OgnAX-dMRT-YX0ShFPKbCx8DP4LFkZ6s6-WQ-n3h5Wbbw4JbaCdSZvW7Zoc-367CFa_1ZRoHWp9tCoG-9q_ZmTyiulk3qUqc5p__8v33i1pVY3NsAbrXpmYEfGjQY71P0l0Xl0Jj0Nnrw=w138-h92-k-no', 4.4, 6560, 'Historical landmark', '$', 'Open until 7:00 PM', 'HXVC+M5V, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1358, 'National Museum of Anthropology', 'Museum devoted to Filipino heritage. Stately, neoclassical museum housing a broad collection of Filipino cultural materials & artifacts.', '14.5856808', '120.9811664', 'https://lh5.googleusercontent.com/p/AF1QipO3-kD2MY8g9jt8qZiQIyd2nBdkgeDsD0w_3yC-=w122-h92-k-no', 4.6, 662, 'National museum', '$', 'Closed ⋅ Opens 10AM Tue', 'Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1359, 'The Minor Basilica and Metropolitan Cathedral of the Immaculate Conception', 'Historic basilica known for papal visits. Built in 1571, this historic church is known for its ornate architecture & visits by several popes.', '14.5916543', '120.9734594', 'https://lh5.googleusercontent.com/p/AF1QipN-e2lF9K8QqFFZJ6BGLJsQfX4oURsJszhegOWN=w138-h92-k-no', 4.6, 4542, 'Catholic cathedral', '$', '', 'Beaterio St, Cabildo St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1360, 'Baluarte de San Diego', '16th-century fortified bastion. Built in 1586 in the shape of an ace of spades, this stone fort now features a bonsai display.', '14.5853806', '120.9755667', 'https://lh5.googleusercontent.com/p/AF1QipOAEwyIWZ-mkqjF32QtcWGUdFN3l1keL2Urqd8f=w122-h92-k-no', 4.4, 376, 'Historical landmark', '$', 'Open until 5:00 PM', 'Sta. Lucia St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1361, 'Bahay Tsinoy, Museum of Chinese in Philippine Life', 'Museum of Chinese history in Philippines. Museum & heritage center exploring contributions & influences of the Chinese in Philippine culture.', '14.5909036', '120.9750258', 'https://lh5.googleusercontent.com/p/AF1QipMQdOhNGmhOBRrH8n1Pl29BsMnqjkoEq5E2YxRg=w145-h92-k-no', 4.4, 208, 'History museum', '$', 'Opens at 2:00 PM', '32 Anda St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1362, 'Manila Ocean Park', 'Live shows & displays about marine life. Aquatic theme park & educational facility featuring hands-on activities, an oceanarium & live shows.', '14.5792001', '120.9725638', 'https://lh5.googleusercontent.com/p/AF1QipPuBMxm91Y1nm1Gza3CaE1RE8uAWRDEvZep_ZKn=w137-h92-k-no', 4.2, 10750, 'Water park', '$', 'Open until 6:00 PM', 'Quirino Grandstand, 666 Behind, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1363, 'Intramuros', '', '14.5916001', '120.9717729', 'https://lh5.googleusercontent.com/p/AF1QipOu47UJQEyvT0jwmPbP2R-urZO0E4x63FIvOZ7T=w80-h106-k-no', 4.7, 354, 'Tourist attraction', '$', '', '470, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1364, 'Paco Park and Cemetery', 'Tranquil park on former burial grounds. Serene urban park built on a walled cemetery site with shaded paths & garden areas.', '14.5809649', '120.9884237', 'https://lh5.googleusercontent.com/p/AF1QipNSAkHjgJSsk2AAExpwBzPQgkO0XdMz3_HMiPDu=w122-h92-k-no', 4.4, 778, 'Park', '$', 'Open until 11:00 PM', 'Belen, Paco, Manila, Metro Manila, Philippines', 'Manila'),
(1365, 'National Museum of Natural History', 'Gallery of animal & plant exhibits. Zoological, botanical & geological specimens displayed in an elegant venue with a soaring atrium.', '14.583505', '120.9820883', 'https://lh5.googleusercontent.com/p/AF1QipMtzsfqX-LGZUQvreXrn10-qOc7z9g-SG4eN1Q8=w122-h92-k-no', 4.7, 2169, 'Museum', '$', 'Closed ⋅ Opens 10AM Tue', 'Teodoro F. Valencia Cir, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1366, 'Arroceros Forest Park', 'Tree & plant-filled spot by the river. Small urban park with a vast array of trees & plants, plus a fishpond & riverside walkway.', '14.5942352', '120.9817192', 'https://lh5.googleusercontent.com/p/AF1QipNRzWYslmXmoBm0h0ve994SDjZXvxD8m45Tc6tM=w122-h92-k-no', 4.4, 386, 'City park', '$', 'Open 24 hours', '659 A Antonio Villegas St, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1367, 'Star City', 'Amusement park with diverse attractions. Popular amusement park offering rides, paint ball, laser tag, an indoor snow area & a haunted house.', '14.5568331', '120.9854453', 'https://lh5.googleusercontent.com/p/AF1QipMd7jCVuYkJmMUpq9fhLb0pNYqoD-vtcyLr2Fyf=w122-h92-k-no', 4.2, 5639, 'Amusement park', '$', 'Opens at 4:00 PM', 'Sotto Corner Jalandoni Street CCP Complex, 1300 Roxas Blvd, Pasay, Philippines', 'Manila'),
(1368, 'Manila Zoo', 'Small zoo with basic exhibit areas. 5.5-hectare zoo & garden featuring diverse animals in modest, old-fashioned enclosures.', '14.565137', '120.988525', 'https://lh5.googleusercontent.com/p/AF1QipMGSFF3a_UhDbjuN02S7zXpkhM9a5_BpUDAE0kx=w122-h92-k-no', 3.4, 2266, 'Zoo', '$', 'Open until 6:00 PM', 'M. Adriatico St, Malate, Manila, 1004 Metro Manila, Philippines', 'Manila'),
(1369, 'Manila Sightseeing Tours', '', '14.580027', '120.9804297', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=YxDYLWFQt7HGG23lg2VZGA&cb_client=search.gws-prod.gps&w=80&h=92&yaw=122.626396&pitch=0&thumbfov=100', 0, 0, 'Travel agency', '$', '', '500 United Nations Ave, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1370, 'Bambike Ecotours Intramuros, Manila', '', '14.5896472', '120.975067', 'https://lh5.googleusercontent.com/p/AF1QipOt2mEJR3tsVMVdiH_EJOpYK5-jQSnbb33YnWo0=w163-h92-k-no', 4.7, 272, 'Sightseeing tour agency', '$', 'Open until 6:00 PM', 'Bambike HQ, Plaza San Luis Complex. Real St .cor, M General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1371, 'San Agustin Church', 'Landmark 16th century Baroque church. Historic church constructed starting in the 16th century with vaulted ceilings & detailed frescoes.', '14.5886384', '120.974881', '//lh4.googleusercontent.com/proxy/PS7QMN4vnHwoxnrXoDpPSa35Gn0ctI9L-7GcntNepykEP7k8jExX6PzhjEdLtRYSYZdGP8w_e1icPQ-SD3Uc1XTrYxTyRlA0ZwXJXvYHwMrMMAsg9OvptImEPBuWETR8j55eFwwQI89m3J08-e3AtJL9SQeMiT0=w131-h92-k-no', 4.6, 2863, 'Catholic church', '$', '', 'General Luna St, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1372, 'Ayala Triangle Gardens', 'Green space with paths & nearby cafes. Serene, triangle-shaped park with jogging paths, adjacent eateries & seasonal light shows.', '14.5570948', '121.0229594', 'https://lh5.googleusercontent.com/p/AF1QipM55my16KM2fIpywu6pkZNcVi8q0xc3Ys5Fol_0=w159-h92-k-no', 4.5, 7775, 'Park', '$', 'Open until 10:00 PM', 'Paseo De Roxas St Cor Makati Ave, Cor Ayala Ave, Makati, 1209 Metro Manila, Philippines', 'Manila'),
(1373, 'Memorare - Manila 1945 Monument and Memorare - Manila 1945 Historical Marker', '', '14.5904387', '120.9744057', 'https://lh5.googleusercontent.com/p/AF1QipOxCh_gNT7nh2Gv2PS__H5yAE-RAZdo-6B0wCvT=w122-h92-k-no', 4.2, 67, 'Historical landmark', '$', 'Open 24 hours', 'General Luna St, Intramuros, 658 Zone 70, Maynila, 1002 Kalakhang Maynila, Philippines', 'Manila'),
(1374, 'Victims of Martial Law Memorial Wall, Manila', '', '14.5912034', '120.9814083', 'https://lh5.googleusercontent.com/p/AF1QipNmKj7JuHVuKhMa3VJ7bulk7PD6mrImF_7jac9t=w80-h139-k-no', 0, 0, 'Historical landmark', '$', 'Open 24 hours', 'Heroes Park, 1000 Cecilia Muñoz St, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1375, 'Gusali ng Lungsod ng Maynila Historical Marker', '', '14.5897', '120.98162', 'https://lh5.googleusercontent.com/p/AF1QipMvOcEZmhEGSJppI-IsOjVKn0V4gMh6NvXQsaRh=w80-h137-k-no', 0, 0, 'Historical landmark', '$', '', '659, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1376, 'Jose P. Laurel Historical Marker - Intramuros', '', '14.5920001', '120.9780101', 'https://lh5.googleusercontent.com/p/AF1QipPuZ-iJn8887who7I2Zx6OgdHqxSVIQvxgG-dKm=w80-h137-k-no', 0, 0, 'Historical landmark', '$', '', '658, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1377, 'Manila High School Historical Marker', '', '14.5893734', '120.9786422', 'https://lh5.googleusercontent.com/p/AF1QipPH01OkCS3gCj2pauXojTNYard6X9elrbcp6qlo=w80-h140-k-no', 0, 0, 'Historical landmark', '$', '', '1002 Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1378, 'The Life and Heroism of Gat Andres Bonifacio Historical Marker', '', '14.5906426', '120.9810919', 'https://lh5.googleusercontent.com/p/AF1QipN2osE9oBygLWZVnbFDEcEjjIq-VnDD0Lhf_zJX=w80-h106-k-no', 0, 0, 'Historical landmark', '$', '', 'Unnamed Road, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1379, 'Kartilya ng Katipunan', '', '14.590932', '120.981097', 'https://lh5.googleusercontent.com/p/AF1QipNbfA1OF04UNz3XJ7Krbep2nhJJuyNQXEsZmFAt=w163-h92-k-no', 4.8, 58, 'Historical landmark', '$', '', 'HXRJ+9CH, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1380, 'Emilio Jacinto Monument - Manila', '', '14.5906782', '120.9816823', 'https://lh5.googleusercontent.com/p/AF1QipOyvoi4JZ2Qc3sktm2s4mpMOHptAbCM_VPDZOSn=w80-h137-k-no', 4.5, 6, 'Historical landmark', '$', 'Open 24 hours', 'Antonio Villegas St, 659 Ermita, Maynila, 1000 Kalakhang Maynila, Philippines', 'Manila'),
(1381, 'Sa Mga Bayani ng Lungsod ng Maynila Historical Marker', '', '14.5878018', '120.9819023', 'https://lh5.googleusercontent.com/p/AF1QipPyeOLWIw62wLriPkQpS9l5OZUqHpjIO_ciZlru=w151-h92-k-no', 0, 0, 'Historical landmark', '$', '', '659, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1382, 'Philippine Normal College Historical Marker', '', '14.5867299', '120.9829101', 'https://lh5.googleusercontent.com/p/AF1QipOxzyp6k1BEdkNXFPyeUEgSR5neKlHkAAUQW0Iy=w80-h122-k-no', 0, 0, 'Historical landmark', '$', '', '1901 Ayala Blvd, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1383, 'Philippine Normal University (1901-2001) Historical Marker', '', '14.5868009', '120.9830717', 'https://lh5.googleusercontent.com/p/AF1QipM9o2QtsXfpIrsMf4Oe3yuxENDXN8QZudobaXYO=w80-h139-k-no', 0, 0, 'Historical landmark', '$', '', 'Philippine Normal University, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1384, 'Dr. José Rizal National Monument', 'Prominent statue of a historical figure. Bronze sculpture with an obelisk memorializing José Rizal, a Filipino nationalist who was executed.', '14.5817765', '120.9770485', '//lh4.googleusercontent.com/proxy/JXbbJe0u4KAVe3azj9bgZxXassUpt7pz86Vhvw2yiIDKiXeh52eeXp5NQzuKVVDuHWb3dj1wrqaSjhfjD2l5hvyyCjOfFpD-CILkOCZGeUMVn31_jC54NwQCNrplaUrudGiW6MIaaGV0fPP_ori1G06jX6q2JA=w138-h92-k-no', 4.5, 1375, 'Historical landmark', '$', 'Open 24 hours', '1225 Roxas Blvd, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1385, 'Simbahan at Kumbento ng Recoletos Historical Marker', '', '14.5886101', '120.9787101', 'https://lh5.googleusercontent.com/p/AF1QipPv5X7PgrUikp0CwEVxfZaH_6EBpIFkkRg-WUcz=w80-h142-k-no', 0, 0, 'Historical landmark', '$', '', 'Recoletos St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1386, 'Ang Pagpapalaya ng Maynila Historical Marker', '', '14.5910099', '120.97248', 'https://lh5.googleusercontent.com/p/AF1QipO8sQZ7H_JH39OGeps5Zq7vZXPRKjBfRLTZWtDP=w135-h92-k-no', 0, 0, 'Historical landmark', '$', '', 'Sta. Lucia St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1387, 'Fernanda Balboa Historical Marker', '', '14.5868201', '120.9780101', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=PSfB9t0hjZqlcmJoPDi-Eg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=340.64877&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', 'Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1388, 'Andres Bonifacio \" Ama Nang Himagsikang Filipino \" statue', '', '14.5927813', '120.9815629', 'https://lh5.googleusercontent.com/p/AF1QipMOf4K4fj1sbP3D5BClQyiYSo1dFf71wwYn6Cpg=w80-h141-k-no', 0, 0, 'Historical landmark', '$', '', 'LRT-1 Central Terminal Station, Manila, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1389, 'Jose P. Laurel Monument and Jose P. Laurel Historical Marker', '', '14.5729544', '120.9812928', 'https://lh5.googleusercontent.com/p/AF1QipPXQrSYHyDGaOa0pDBksEtQaIbLiza7LlRFeM0C=w80-h136-k-no', 3.3, 3, 'Historical landmark', '$', 'Open 24 hours', '517 Roxas Blvd, Malate, Manila, 1004 Metro Manila, Philippines', 'Manila'),
(1390, 'Diamond Hotel Philippines', 'Posh lodging with elegant dining. Refined rooms & suites in a polished tower-style hotel with 6 restaurant/bars, plus a spa.', '14.572442', '120.982176', 'https://lh5.googleusercontent.com/p/AF1QipPGOMK4qF7c27wFz2OtIIUeQ5v64AsXQHPfl68N=w114-h120-k-no-pi0-ya160-ro0-fo100', 4.5, 3526, 'Hotel', '$10', '', 'Roxas Boulevard, Corner Dr. J. Quintos Street, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1391, 'Chowking', 'Quick stop for familiar Chinese fare. Casual counter-serve chain serving Chinese dishes, including breakfast, soups & dim sum.', '14.5765208', '121.035185', 'https://lh5.googleusercontent.com/p/AF1QipMjqUVECT_n4PKS17pganIAN0lSU2ZbUrUUYaoQ=w92-h92-k-no', 3.8, 306, 'Fast food restaurant', '$', 'Open 24 hours', 'Boni Ave, corner Sto Rosario, St, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1392, 'Andok\'s Litson', '', '14.5782501', '121.0346224', 'https://lh5.googleusercontent.com/p/AF1QipNytBf2rAOVvV8Cp--2BHsH2aV0idk0tQ9CvhuO=w122-h92-k-no', 4.1, 30, 'Takeout Restaurant', '$', 'Open 24 hours', 'Maysilo Cir, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1393, 'ClickTheCity', '', '14.5604561', '121.0172487', 'https://lh5.googleusercontent.com/p/AF1QipOtKdxzhyNRZC69fSiG6G9W0j2yw-cX8a2Ijs9u=w92-h92-k-no', 4.4, 12, 'Publisher', '$', 'Open until 5:00 PM', '156 H. V. Dela Costa Street, Salcedo, Village, Makati, 1226 Metro Manila, Philippines', 'Mandaluyong'),
(1394, 'SM Megamall', '', '14.5846851', '121.0573023', 'https://lh5.googleusercontent.com/p/AF1QipOHixTgo_lTqMwuoSZUBQbStnhqLjbwqw09vjfW=w122-h92-k-no', 4.4, 36886, 'Shopping mall', '$', 'Open until 7:00 PM', 'EDSA, corner Doña Julia Vargas Ave, Ortigas Center, Mandaluyong, 1555 Metro Manila, Philippines', 'Mandaluyong'),
(1395, 'Shakey\'s Pizza Parlor', 'Casual pizza chain with a kids\' fun zone. Pizza chain offering pies, fried chicken & lunch buffets in relaxed digs with a kids\' game area.', '14.5711448', '121.0478566', 'https://lh5.googleusercontent.com/p/AF1QipN8TR0pjeYE5I6RMCEadOkMeK8pO4MqBhmC-CAF=w138-h92-k-no', 4.1, 125, 'Pizza restaurant', '$$', 'Open until 7:00 PM', 'Level 2, Forum Robinsons, 30 Edsa corner, Pioneer St, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1396, 'Wildflour Café + Bakery - Podium', '', '14.5854544', '121.0589905', 'https://lh5.googleusercontent.com/p/AF1QipM-5gpy7kTlsSBGlYLHLeL_eMtLAadLASeYgxKI=w80-h106-k-no', 4.3, 548, 'Restaurant', '$$$', 'Open until 9:30 PM', 'Ground Floor, The Podium, 18 ADB Ave, Ortigas Center, Mandaluyong, 1550 Kalakhang Maynila, Philippines', 'Mandaluyong'),
(1397, 'Morelli\'s Gelato', '', '14.581651', '121.056081', 'https://lh5.googleusercontent.com/p/AF1QipMx8NUD2RAYreWo_e9Y18Ub_4wLz2vwTzmmsjm2=w122-h92-k-no', 4, 7, 'Cafe', '$', 'Open until 9:00 PM', '2337, East Wing Bldg Shangri - La Mall, EDSA Cor. Shaw Blvd, Ortigas Center, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1398, 'Tim Ho Wan', '', '14.5831899', '121.0563212', 'https://lh5.googleusercontent.com/p/AF1QipNzKqQyQM9IIjWOd42HTFHoHgHv2KvruudHVgqX=w122-h92-k-no', 4.1, 139, 'Chinese restaurant', '$', 'Open until 10:00 PM', 'L1 , SM Megamall , EDSA Corner J.Vargas Avenue , 1550 Mandaluyong City , Metro Manila, Philippines', 'Mandaluyong'),
(1399, 'Kuya J Restaurant', '', '14.585477', '121.0580969', 'https://lh5.googleusercontent.com/p/AF1QipNvQxTeaydYLv_6AKQGr-vAp6I7zZy9kSTPQ0Bf=w122-h92-k-no', 4, 230, 'Restaurant', '$$', 'Open until 10:00 PM', 'SM Megamall Lower Ground Floor, Mega A, Doña Julia Vargas Ave, Ortigas Center, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1400, 'Cinnabon', 'Chain for cinnamon buns & frozen drinks. Counter-serve chain serving cinnamon rolls plus other baked goods & specialty frozen beverages.', '14.5858061', '121.0595081', 'https://lh5.googleusercontent.com/p/AF1QipN3zvpN6ETpLov0czeG-FUIiP1yiwkLf6l8tXzW=w122-h92-k-no', 4, 7, 'Bakery', '$', 'Open until 9:00 PM', '18 ADB Ave, Ortigas Center, Mandaluyong, 1554 Metro Manila, Philippines', 'Mandaluyong'),
(1401, 'Dads Saisaki Kamayan', '', '14.5777778', '120.9816667', 'https://lh5.googleusercontent.com/p/AF1QipN-hTVXkcB8SnmxQA6gI57HyORD111arpAfePZ_=w122-h92-k-no', 4.3, 570, 'Filipino restaurant', '$$', 'Closing soon: 2:30 PM', '523 Merchant Building Padre Faura cor. Adriatico St.,, Padre Faura St, Ermita, Maynila, Kalakhang Maynila, Philippines', 'Mandaluyong'),
(1402, 'Dambana ng Alaala: Alay sa mga Dakilang Anak ng Mandaluyong', '', '14.5780426', '121.0331382', 'https://lh5.googleusercontent.com/p/AF1QipMz9Mlt6HTJ7zXkooTQRWGndGO09uGRRlQgjxy3=w80-h139-k-no', 5, 1, 'Historical landmark', '$', '', '479 Boni Ave, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1403, 'Mandaluyong City Hall', 'Blue-glass building with a tiger icon. Modern municipal building clad in blue glass, with a landmark roaring tiger logo over the entryway.', '14.5777334', '121.0336589', 'https://lh5.googleusercontent.com/p/AF1QipOZLKGOvz9TXH_37C9TIRCoddphDnx0sLfOcl1M=w139-h92-k-no', 4.1, 527, 'City Hall', '$', 'Open until 5:00 PM', '315 Maysilo Cir, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1404, 'San Felipe Neri Parish Church', '', '14.5859588', '121.0265477', 'https://lh5.googleusercontent.com/p/AF1QipP23ergVAo7Jg_UMyZVuqZ8XyXYgATKFjwobRQR=w127-h92-k-no', 4.6, 487, 'Catholic church', '$', 'Open 24 hours', 'Corner, Boni Avenue, 1550 Rt. Rev. G. Aglipay, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1405, 'R&J Bulalohan', '', '14.5762726', '121.0348642', 'https://lh5.googleusercontent.com/p/AF1QipOiT477Mk6cSmLXGLFtcn1w7k_OmDa6OWVFDaql=w122-h92-k-no', 4.2, 1261, 'Filipino restaurant', '$', 'Open 24 hours', '602 Boni Ave, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1406, 'Edsa Shangri-La, Manila', 'Upscale hotel with international dining. Sophisticated quarters with free Wi-Fi, plus international restaurants, an outdoor pool & a spa.', '14.5813906', '121.0570799', 'https://lh5.googleusercontent.com/p/AF1QipNhdZ2td6lPhaKrExIBsvO2tc2T0jFbhVVEg69p=w137-h92-k-no', 4.5, 7489, 'Hotel', '$88', '', '1 Garden Way, Ortigas Center, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1407, 'Kanto Freestyle Breakfast', '', '14.5811386', '121.0311661', 'https://lh5.googleusercontent.com/p/AF1QipPwpPRea3fpS2ZCE2iP528i14MNEWghzTS5_-mI=w80-h106-k-no', 4.3, 817, 'Restaurant', '$', 'Open 24 hours', '549 San Joaquin, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1408, 'Caffera Photo + Café', '', '14.5816022', '121.0290376', 'https://lh5.googleusercontent.com/p/AF1QipOYEAhXyyh-Rt7_5pFtwtODsXPmjG884V0GTmlf=w138-h92-k-no', 4.6, 186, 'Coffee shop', '$', 'Open until 9:00 PM', '480 Boni Ave, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1409, 'Eris court', '', '14.5782409', '121.0358063', 'IMAGE NOT AVAILABLE', 0, 0, 'Condominium complex', '$', '', 'H2HP+78V, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1410, 'Bargo Bar & Restaurant, Inc.', '', '14.5762774', '121.039042', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=X4ik7Z8_t5yZUAYbxc9QHg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=161.60693&pitch=0&thumbfov=100', 1, 1, 'Restaurant', '$', '', '833 Sheridan cor. Reliance St., Mandaluyong City Mandaluyong NCR, Philippines', 'Mandaluyong'),
(1411, 'Club Mwah', '', '14.5761357', '121.0382327', 'https://lh5.googleusercontent.com/p/AF1QipPi3-sLyTt1L6QZxG_XN0KQLZG5hDgCSi4evIcs=w122-h92-k-no', 4.4, 24, 'Club', '$', '', '3rd Floor, The Venue Tower, 652 Boni Ave, Mandaluyong, Kalakhang Maynila, Philippines', 'Mandaluyong'),
(1412, 'RedDoorz Plus @ Boni Avenue Mandaluyong', '', '14.5759702', '121.0352829', '//lh5.googleusercontent.com/proxy/_vNzo90yVIduier4G1didQP6MCXTgy_osIPuAC_UBIl8_Lfxo473PyWuWUUn9-VNjYxcxPdypWC90IhAUtQxewqzxFuAOuXlmDLNEbTMgUQhHBQNYCl9LHd42sVWaa5boX0LqXXnIlxzBzGI_2jYtz6yWXzcEA=w138-h92-k-no', 3.4, 18, 'Hotel', '$18', '', '604 Boni Ave, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1413, 'Rooms498 Events and Party Venue, Seminar & Corporate Venue, Videoke Party', '', '14.5807517', '121.0297138', 'https://lh5.googleusercontent.com/p/AF1QipN-jIxdIj_do6KZyGRfSy0kCp58HW1q0MsNVuGp=w80-h120-k-no', 4.5, 43, 'Function room facility', '$', '', 'Unit 7 - Rooms498 Building Yellow Building, 498 Boni Ave, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1414, 'Galileo Enoteca Deli', '', '14.579555', '121.04977', 'https://lh5.googleusercontent.com/p/AF1QipMrin1MCm2AxSj1RqewZmaXjnpoCTfSrMJwrLdL=w122-h92-k-no', 4.6, 480, 'Italian restaurant', '$$', 'Closed ⋅ Opens 9AM Tue', '80 Malinao, corner Calbayog St, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1415, 'Celebrity Lounge', '', '14.5888477', '121.0431549', 'https://lh5.googleusercontent.com/p/AF1QipOwHPjjYbv3tftmGQn7ZZArUGCrWs0RUFnEaD6d=w122-h92-k-no', 4.2, 240, 'Karaoke bar', '$$', 'Opens at 3:00 PM', '431 Shaw Blvd, Pleasant Hills, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1416, 'Zoomoov Philippines Corporation', '', '14.574097', '121.045669', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=_nOTqQFfEC9GLSWSdWyXyw&cb_client=search.gws-prod.gps&w=80&h=92&yaw=325.51855&pitch=0&thumbfov=100', 3, 1, 'Corporate office', '$', 'Open until 5:00 PM', '31 Mayon St, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1417, 'Forum Robinsons', 'Everyday shopping mall with a cinema. Modest retail center with down-to-earth stores, informal eateries & a basic movie theater.', '14.5712583', '121.0474813', 'https://lh5.googleusercontent.com/p/AF1QipPXWKN4qg7z-2itjsygNcNW7eepTKRfgdQo_LhV=w138-h92-k-no', 4.1, 5747, 'Shopping mall', '$', 'Open until 6:00 PM', '30 Edsa, corner Pioneer St, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1418, 'EDSA People Power Monument and Historical Marker', 'Iconic commemorative statue made in 1993. Landmark monument by Eduardo Castrillo honoring the People Power Revolution of 1986.', '14.5999684', '121.0601117', 'https://lh5.googleusercontent.com/p/AF1QipOIdnF1VSt-jWQ1_1DWQveFt_ug5u5jziCwrz2F=w122-h92-k-no', 4, 366, 'Historical landmark', '$', 'Open 24 hours', 'Epifanio de los Santos Ave, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1419, 'SM Light Mall', 'Modern retail hub with dining & theater. Contemporary mall featuring retail shops for fashion & home goods, restaurants & a movie theater.', '14.5743146', '121.0492401', 'https://lh5.googleusercontent.com/p/AF1QipNnMJt7EOFhpSt-RWKY-bIZi9Df8CaVKvdUM21W=w122-h92-k-no', 4.1, 3475, 'Shopping mall', '$', 'Open until 10:00 PM', 'Madison, Mandaluyong, 1560 Metro Manila, Philippines', 'Mandaluyong'),
(1420, 'I Love Mandaluyong Signage', '', '14.5778405', '121.0339274', 'https://lh5.googleusercontent.com/p/AF1QipNRvB3Wvyu2XVDmI-snds0Z_XHBxaBO1N5fo2G6=w137-h92-k-no', 0, 0, 'Historical landmark', '$', '', 'H2HM+4HM, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1421, 'Senator Neptali Gonzales Monument and Historical Marker', '', '14.5780553', '121.0342345', 'https://lh5.googleusercontent.com/p/AF1QipMJPPVYlQ0ut_AcvAq_uSj4i3R_dmMIJ9DViFaf=w80-h106-k-no', 0, 0, 'Historical landmark', '$', '', 'MDA, G/F UNIT 102, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1422, 'NCMH Historical Marker', '', '14.5808601', '121.0424699', 'IMAGE NOT AVAILABLE', 0, 0, 'Historical landmark', '$', '', 'H2JR+8XX, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1423, 'Tatlong Bayani Monument and Historical Marker', '', '14.5882427', '121.0327229', 'https://lh5.googleusercontent.com/p/AF1QipNFg6QFmZT7fsqLZOC3wn28YeVlX0Wr9FEMeyiV=w80-h106-k-no', 0, 0, 'Historical landmark', '$', 'Temporarily closed', '312, 1550 A. Bonifacio, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1424, 'Liwasang Katubusan (WWII Liberation Plaza)', '', '14.5910677', '121.0251266', 'https://lh5.googleusercontent.com/p/AF1QipN9cGsDx_AqasjZjhSUMIscoUjAGLpSGUuNaPo6=w80-h139-k-no', 0, 0, 'Historical landmark', '$', '', '104, 1550 Gen. Kalentong, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1425, 'Jose Rizal University Historical Marker', '', '14.59298', '121.02816', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=Fc_tBqxRrdMAqHIvoYSOnA&cb_client=search.gws-prod.gps&w=80&h=92&yaw=213.0891&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', '74 Shaw Blvd, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1426, 'Jose P. Laurel Residence Historical Marker', '', '14.5883201', '121.0452899', 'https://lh5.googleusercontent.com/p/AF1QipNJZu78lnZayqy5XJW8rE6A_OvOTY_EsuSKZWwF=w80-h140-k-no', 0, 0, 'Historical landmark', '$', '', 'H2QW+84F, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1427, 'Sisa Monument', '', '14.581584', '121.0440561', 'https://lh5.googleusercontent.com/p/AF1QipOJbFaX5G-UZfQFNdY6qZ28oFKsg879JdOvFRdf=w80-h106-k-no', 0, 0, 'Historical landmark', '$', '', 'NCMH Entrance/Exit, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1428, 'Old PNR Guadalupe Station', '', '14.5689634', '121.0457019', 'https://lh5.googleusercontent.com/p/AF1QipP--KSRn5RcHUZ25F-B9-mJRfJ75ycH5E3l4q8k=w122-h92-k-no', 5, 1, 'Historical landmark', '$', '', 'Mayor Neptali M. Gonzales II Gymnasium, Simeon Cruz, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1429, 'Kanto Boholano', '', '14.58673', '121.04082', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=PijMNgmT7unT30h87qWmHA&cb_client=search.gws-prod.gps&w=80&h=92&yaw=240.89761&pitch=0&thumbfov=100', 5, 1, 'Historical landmark', '$', '', '606 Nueve de Febrero, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1430, 'Kaban ng Hiyas: Cultural Center, Historical Museum and Convention Hall', '', '14.5780124', '121.0341753', 'https://lh5.googleusercontent.com/p/AF1QipMZD58joLFAXOdmapYmsJ2pchEx5J8SOXgky0ZU=w122-h92-k-no', 4.9, 24, 'Tourist attraction', '$', 'Open until 5:00 PM', 'Maysilo Cir, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1431, 'Casa Asilo de Nuestra Señora de la Consolacion de Mandaloya', '', '14.590469', '121.0257795', 'IMAGE NOT AVAILABLE', 0, 0, 'Historical landmark', '$', '', 'Pag-Asa, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1432, 'Ortigas Center Plaza', '', '14.5827072', '121.0614584', 'https://lh5.googleusercontent.com/p/AF1QipN3qv6-eTggYnKdcCfuWqkKv926d0hb56ikwFFl=w189-h92-k-no', 0, 0, 'Historical landmark', '$', '', 'Barangay San Antonio, Ortigas Center, Pasig, Philippines', 'Mandaluyong'),
(1433, 'San Miguel Brewery Historical Marker', '', '14.582978', '121.0592254', 'IMAGE NOT AVAILABLE', 0, 0, 'Historical landmark', '$', '', 'Unnamed Road, San Antonio, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1434, 'Greenfield Water Tower', '', '14.5779654', '121.0536072', 'https://lh5.googleusercontent.com/p/AF1QipPqOm-De_f7GVD34I8z5LYmMUVDJ0qhNAbGrg2x=w92-h92-k-no', 0, 0, 'Historical landmark', '$', '', '1627, 1554 United St, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1435, 'angel', '', '14.5900238', '121.0241471', 'https://lh5.googleusercontent.com/p/AF1QipMh9GQoaDrX2Er6o85Pxj_yk4Wq5LxwY2iFfP5y=w122-h92-k-no', 5, 1, 'Historical landmark', '$', 'Open 24 hours', '14 San Roque St, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1436, 'Andres Bonifacio Bust - A. Bonifacio Integrated School', '', '14.5862493', '121.0347633', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=lw06FrIhKqkU1QM7aqlsTQ&cb_client=search.gws-prod.gps&w=80&h=92&yaw=283.2376&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', '35, 1550 Acacia Ln, Mandaluyong, Metro Manila, Philippines', 'Mandaluyong'),
(1437, 'Garv\'s Boutique Hotel', '', '14.5759533', '121.0352629', '//lh6.googleusercontent.com/proxy/CR9HZd7_qEwSekYEv3UDBpVfmiWAZwdVhcXoAHw83TOr3QYE5YDR3XKRCIvZGAjUmn4ZP1Xnky9ayLC-OmhsQprkZLt1fk5OFfls7ujcI1mxj5oxulip9Qf_7yO5txzjX3G1prX7flU3G-9q05Fpq74A1KI4Tg=w80-h93-k-no', 4, 31, 'Hotel', '$19', '', '604 Boni Ave, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1438, 'Go Hotels Mandaluyong', 'Unfussy lodging with free breakfast. Down-to-earth rooms with TVs in a modest property featuring complimentary breakfast.', '14.5701306', '121.0468679', '//lh6.googleusercontent.com/proxy/7N7bTRfmdwmJNHUo7NnDL_u6Y6zT8grmyEOChnTSW7ZP2Pb-cfSFgUUD2jXD4IxujKxdewy8tetSw62Fh5gALKydzrR3slWs1StxuJemNkrVunwUegrTfsjkYly5xSmLOyb1sihBcQAH1cSi3WIzQTt_8Jv2y6A=w138-h92-k-no', 4, 568, 'Hotel', '$', '', 'UG/F Robinsons Cybergate Plaza, EDSA cor, Pioneer St, Mandaluyong, 1550 Metro Manila, Philippines', 'Mandaluyong'),
(1439, 'Lancaster Hotel Manila', 'Relaxed quarters & a rooftop pool. Streamlined rooms with kitchenettes in a casual hotel with a restaurant/bar, a gym & a rooftop pool.', '14.5839579', '121.0502249', 'https://lh5.googleusercontent.com/p/AF1QipOueghKUTy9GhEYx3TsHktXFOjr-bhAIy2SBd0-=w160-h92-k-no', 3.5, 566, 'Hotel', '$', '', '622 Shaw Blvd, Mandaluyong, 1552 Metro Manila, Philippines', 'Mandaluyong'),
(1440, 'Marikina River Park', 'Massive riverside recreation complex. Expansive recreation hub along the river, with a rollerskating rink, ball fields & camping areas.', '14.63314', '121.093097', 'https://lh5.googleusercontent.com/p/AF1QipOLtRMNdsPPuTvewwnB-H5GaeoWRhHOTXUscFJr=w163-h92-k-no', 4.5, 1603, 'Park', '$', 'Open 24 hours', '300 Shoe Ave, Sto. Nino, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1441, 'Marikina Clock Tower Arch', '', '14.6353618', '121.0976916', 'https://lh5.googleusercontent.com/p/AF1QipN1TVmFh5qye06YHityD2e24Q9536nIsYakccu3=w122-h92-k-no', 4.6, 382, 'Historical landmark', '$', 'Open 24 hours', '41 Sumulong Hwy, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1442, 'Diocesan Shrine and Parish of Our Lady of the Abandoned - Marikina City (Diocese of Antipolo)', '', '14.6307406', '121.0961884', 'https://lh5.googleusercontent.com/p/AF1QipO_5qTfSzj4JBOvxHKgxeJbgst9nb7n-448krfP=w131-h92-k-no', 4.7, 919, 'Catholic church', '$', 'Reopens at 2:00 PM', 'J.P. Rizal, Corner V. Gomez St, Marikina, 1801 Metro Manila, Philippines', 'Marikina'),
(1443, 'Book Museum cum Ethnology Center', 'Colorful book & ethnology museum & café. Quirky museum containing global books, regional artifacts & a James Dean–themed café.', '14.6505968', '121.1195973', 'https://lh5.googleusercontent.com/p/AF1QipN99zJj_gAU-q7IaSFVOVmw4PWD6aDUCSUmBlVJ=w80-h106-k-no', 4.2, 85, 'Museum', '$', 'Open until 5:00 PM', '127, SE Dao, Marikina, 1810 Metro Manila, Philippines', 'Marikina'),
(1444, 'Marikina Fil-Chinese Chamber of Commerce', '', '14.6330483', '121.0975953', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=uKEmWb4yBmWcm6iJKV0P7Q&cb_client=search.gws-prod.gps&w=80&h=92&yaw=65.611664&pitch=0&thumbfov=100', 3, 1, 'Government office', '$', '', '471 E Jacinto St, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1445, 'Marikina Sports Center', '', '14.6345177', '121.0983782', 'https://lh5.googleusercontent.com/p/AF1QipP9rOizQfAmnFaC8NTQRfzH8S58TseJhTFNaOY_=w123-h92-k-no', 4.5, 3953, 'Sports complex', '$', 'Open until 7:00 PM', '24 Sumulong Hwy, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1446, 'Jesús dela Peña Chapel', '', '14.634127', '121.091872', 'https://lh5.googleusercontent.com/p/AF1QipMr3y0t-LiAQKWPwTwSFkIWptR3RnHCXUqByHOO=w122-h92-k-no', 4.5, 23, 'Catholic church', '$', '', '62 P. Zamora St, Marikina, 1804 Metro Manila, Philippines', 'Marikina'),
(1447, 'Teatro Marikina', '', '14.63', '121.0977778', 'https://lh5.googleusercontent.com/p/AF1QipMstKig2l4cf0xGmwZapM0nJuc9RnCFfao_AK6B=w122-h92-k-no', 4.1, 118, 'Performing arts theater', '$', '', 'Shoe Ave, Marikina, 1801 Metro Manila, Philippines', 'Marikina'),
(1448, 'Marikina', '', '14.65073', '121.1028546', 'https://lh5.googleusercontent.com/p/AF1QipNvYFWqR-1dZbZf63rEBBINifcI8CwQRQ1Niqhi=w122-h92-k-no', 0, 0, 'Tourist Attraction', '$', '', 'Metro Manila, Philippines', 'Marikina'),
(1449, 'Pan De Amerikana - Marikina', '', '14.64437', '121.114283', 'https://lh5.googleusercontent.com/p/AF1QipN22MXnPScb85TIN2l-bUnVB0lScc3Gtj4b7SxV=w122-h92-k-no', 4.4, 618, 'Restaurant', '$', 'Opens at 6:00 AM', '92 Gen. Ordoñez Ave, Marikina, 1811 Metro Manila, Philippines', 'Marikina'),
(1450, 'Garden Mirror Events Place', '', '14.6260271', '121.1024094', 'https://lh5.googleusercontent.com/p/AF1QipNz4G-52hdzZvzZz1N7-Slv3pFsSy5U-mwy5qjU=w80-h106-k-no', 4.2, 116, 'Event venue', '$', '', '1801, 76 Mayor Gil Fernando Ave, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1451, 'Kapitan Moy Residence', '', '14.6307099', '121.0956799', 'https://lh5.googleusercontent.com/p/AF1QipNToexxWNlwD8-fdhiBNbyGDeybIV23lHzphmOg=w138-h92-k-no', 5, 2, 'Historical place museum', '$', 'Open 24 hours', '323 J. P. Rizal St, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1452, 'Defenders of Bataan and Corregidor, Marikina Chapter Memorial', '', '14.6328891', '121.0978894', 'https://lh5.googleusercontent.com/p/AF1QipO3v0RpLo6hrqCdy9NlP67TMG2BgqRuZpwK-_nc=w163-h92-k-no', 4.7, 3, 'Historical landmark', '$', '', 'J3MX+552, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1453, 'Lamp Quarters', '', '14.6414422', '121.1041943', 'https://lh5.googleusercontent.com/p/AF1QipMgdkVMGHjj_SglO0d9QDoOgrkWLJUdeNQaKgH-=w92-h92-k-no', 4.4, 314, 'Restaurant', '$$', 'Open until 10:00 PM', 'Mayor Gil Fernando Avenue Centro De Buenviaje Sto. Nino, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1454, 'San Antonio De Padua', '', '14.62589', '121.0705776', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=h-xjhzLUwLPsldWcydPlbw&cb_client=search.gws-prod.gps&w=80&h=92&yaw=318.55038&pitch=0&thumbfov=100', 0, 0, 'Church', '$', '', 'JP Rizal Street Kalumpang, Marikina, Metro Manila, Philippines', 'Marikina'),
(1455, 'Industriya Marikina', '', '14.623146', '121.088225', 'https://lh5.googleusercontent.com/p/AF1QipPX8Ccf56KNzhZo1PXMqDRO6wt8_iLWbk4XaKij=w122-h92-k-no', 4, 215, 'Restaurant', '$$', 'Open until 10:00 PM', '23 M. A. Roxas St, Marikina, 1801 Kalakhang Maynila, Philippines', 'Marikina'),
(1456, 'Miguel & Maria Restaurant', '', '14.6379265', '121.1218063', 'https://lh5.googleusercontent.com/p/AF1QipOrLrJQkMkcNHUKSkmr3JRVnKYjBMLMwGlcd7Fh=w163-h92-k-no', 4.5, 391, 'Western restaurant', '$$', 'Open until 10:00 PM', '89 Lilac St, Marikina, 1811 Metro Manila, Philippines', 'Marikina'),
(1457, 'Marikina - 영도 ( Yeongdo ) Friendship Park', '', '14.6506586', '121.1164926', 'https://lh5.googleusercontent.com/p/AF1QipNGrMdAX_HDIIzGLsFeJOTjBuus2WLWKVNgjCBB=w122-h92-k-no', 4.4, 103, 'Park', '$', 'Open 24 hours', 'M428+7H9, Marikina, 1810 Metro Manila, Philippines', 'Marikina'),
(1458, 'SM City Marikina', '', '14.6260403', '121.0837833', 'https://lh5.googleusercontent.com/p/AF1QipOhNXoY2K4TWjO6EV402XM6qYIiRvu1-LrIFCXd=w204-h92-k-no', 4.3, 6177, 'Shopping mall', '$', 'Open until 7:00 PM', 'Marikina-Infanta Hwy, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1459, 'Kapitan Moy Monument', '', '14.6304147', '121.0957983', 'https://lh5.googleusercontent.com/p/AF1QipMCAhRT9LedhUjcCq4oaeXXkT5sEp8s46AyyTd2=w80-h130-k-no', 5, 1, 'Historical landmark', '$', '', 'Deguanco St, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1460, 'Marikina River Park Grotto', '', '14.6319767', '121.0942667', 'https://lh5.googleusercontent.com/p/AF1QipPeCzaHXNeVlDajp971ijTm3LgUhdkrofDtNSNk=w196-h92-k-no', 0, 0, 'Historical landmark', '$', '', 'J3JV+QPR, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1461, 'Simbahan ng Nuestra Señora de los Desemparados Historical Marker', '', '14.6303598', '121.0962801', 'https://lh5.googleusercontent.com/p/AF1QipOF2Eu8ekVyRfrFppDrfas0x7dJfLnFfVPjuMaK=w158-h92-k-no', 0, 0, 'Historical landmark', '$', '', 'J3JW+4GR, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1462, 'Busts of Marikina City Mayors', '', '14.6330871', '121.0993478', 'https://lh5.googleusercontent.com/p/AF1QipMXZT9nfGMJuBbkxSgkOM9yIp6CQPIQo3yYXpbA=w122-h92-k-no', 4, 1, 'Historical landmark', '$', '', 'J. Chanyungco St, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1463, 'GerolagA store', '', '14.635781', '121.0883491', 'IMAGE NOT AVAILABLE', 0, 0, 'Historical landmark', '$', '', '77 Lopez Jaena St, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1464, 'SSS Village Water Tower', '', '14.6406033', '121.1189548', 'https://lh5.googleusercontent.com/p/AF1QipOrcgJ72h3HJEKLD_sEC5Vcy1FnmEv9RTUl50DM=w92-h92-k-no', 0, 0, 'Historical landmark', '$', '', '12, 1800 Umber St, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1465, 'Talisay Tree', '', '14.6546931', '121.1001347', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=EzIrYMA6fNgxbnq9KwOZBA&cb_client=search.gws-prod.gps&w=80&h=92&yaw=21.321615&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', 'M432+V3C, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1466, 'Marikorea Monument', '', '14.6502645', '121.116894', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=xYft3UDfvk2_JD_7Qi0W8w&cb_client=search.gws-prod.gps&w=80&h=92&yaw=56.73482&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', 'M428+4Q2, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1467, 'Shrine Of MAMA MARY', '', '14.629603', '121.0799038', 'https://lh5.googleusercontent.com/p/AF1QipNznMlb-ZgmI_aAHAwdiIhLolq1iKxDNZ1aLefQ=w80-h106-k-no', 0, 0, 'Historical landmark', '$', '', 'J3HH+RXR, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1468, 'Fil-Jap Historical Landmark Pasig', '', '14.6150591', '121.0819222', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=ss9OtgoNTk9cM54HdirqNg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=11.700044&pitch=0&thumbfov=100', 4.3, 10, 'Historical landmark', '$', '', '128 Evangelista Ave, Pasig, 1610 Metro Manila, Philippines', 'Marikina'),
(1469, 'CANTARILLA CREEK', '', '14.6109953', '121.0924485', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=xRAn3qRLpR6oNjEd6o7lSQ&cb_client=search.gws-prod.gps&w=80&h=92&yaw=95.25692&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', '1610 Eulogio Amang Rodriguez Ave, Pasig, Metro Manila, Philippines', 'Marikina'),
(1470, 'Jose Rizal Monument - Cainta', '', '14.5798357', '121.1144638', 'https://lh5.googleusercontent.com/p/AF1QipMFojcwom3k7rClN0B9-5Y0kW_RKGgcWxTrcNf7=w122-h92-k-no', 0, 0, 'Historical landmark', '$', 'Open 24 hours', 'Municipal Jail, BJMP, Alfredo Sta. Ana St, Santo Domingo, Cainta, Rizal, Philippines', 'Marikina'),
(1471, 'OYO 400 La Trinidad Pension House', 'Humble budget hotel with low-key rooms. Simply furnished rooms with TVs & a/c in a down-to-earth budget hotel offering Wi-Fi.', '14.6302724', '121.0970289', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=urievuRPol5S4Ruidp6tLA&cb_client=search.gws-prod.gps&w=211&h=120&yaw=38.85691&pitch=0&thumbfov=100', 3.6, 19, 'Hotel', '$23', '', '3 1801 V. Gomez St, Marikina, 1800 Metro Manila, Philippines', 'Marikina'),
(1472, 'Kainan Sa Kapasigan', '', '14.5633455', '121.07603', 'https://lh5.googleusercontent.com/p/AF1QipOqybNG13bk3nJ8HCMh8Dd0MCxq89e0Qe2neDnN=w122-h92-k-no', 4.5, 2, 'Restaurant', '$', 'Open until 10:00 PM', '62 A. Mabini Street, Pasig, 1600 Metro Manila, Philippines', 'Pasig'),
(1473, 'Papa\'s Favorite Restaurant', '', '14.5628596', '121.0941434', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=GzG_5fPFUbCeSn9mg199eg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=103.45722&pitch=0&thumbfov=100', 0, 0, 'Restaurant', '$', 'Open until 7:00 PM', '88 A. Sandoval Ave, Pasig, Metro Manila, Philippines', 'Pasig'),
(1474, 'Steak Project 122', '', '14.56155', '121.0752421', 'https://lh5.googleusercontent.com/p/AF1QipMgfuuTXRnpydtNi8V1I1cs9yJGvGis-YDbuWwl=w122-h92-k-no', 4.3, 12, 'Restaurant', '$', 'Open until 9:00 PM', '1600, 27 Alcalde Jose, Pasig, Metro Manila, Philippines', 'Pasig'),
(1475, 'Enzo\'s Burger', '', '14.5615135', '121.0758211', 'https://lh5.googleusercontent.com/p/AF1QipPzrslR8PHjHdpZwWXc1qPUBcAdc_jVEfAhDkjq=w122-h92-k-no', 4.3, 3, 'Restaurant', '$', 'Open until 9:00 PM', '12 Alcalde Jose, Pasig, 1600 Metro Manila, Philippines', 'Pasig'),
(1476, 'Irving\'s', '', '14.5728966', '121.0608903', 'https://lh5.googleusercontent.com/p/AF1QipNFvpSRLCK9FzXt6vtOawXSHoBEwfJa3n7RDHZZ=w122-h92-k-no', 4.6, 75, 'Filipino restaurant', '$', 'Open until 9:00 PM', '17 W Capitol Dr, Pasig, Metro Manila, Philippines', 'Pasig'),
(1477, 'The Vintage Kitchen', '', '14.5615569', '121.0753009', 'https://lh5.googleusercontent.com/p/AF1QipPju-zo4kPuoKxy439QgGk5enrQ_RGsKFuMUgKo=w122-h92-k-no', 5, 1, 'Restaurant', '$', 'Open until 10:00 PM', '20 Alcalde Jose, Pasig, 1600 Metro Manila, Philippines', 'Pasig'),
(1478, 'Tipsy Pig', '', '14.5767981', '121.0626188', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=XvZ-0PhQRsUOUnkiH9Rqyg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=39.37972&pitch=0&thumbfov=100', 0, 0, 'Restaurant', '$', '', '1 Meralco Ave, San Antonio, Pasig, Metro Manila, Philippines', 'Pasig'),
(1479, 'Daddy\'s Eatery', '', '14.560701', '121.067845', 'https://lh5.googleusercontent.com/p/AF1QipNeSKB1byKfgUGUiwFUOypYCqvTsU15-wAnfPz-=w122-h92-k-no', 4, 4, 'Restaurant', '$', 'Open until 8:00 PM', '41 Pvt. Aurellana Rd, Pasig, 1605 Metro Manila, Philippines', 'Pasig'),
(1480, 'Cafe Juanita', 'Funky spot serving classic Filipino food. Warm restaurant with eclectic decor offering traditional Filipino dishes & a weekend brunch buffet.', '14.5727778', '121.0608333', 'https://lh5.googleusercontent.com/p/AF1QipNKIghDUh-23JKORAnThOaHKpmIHWFHoGCRy5Lb=w80-h106-k-no', 4.5, 395, 'Filipino restaurant', '$$', 'Closing soon: 2:30 PM', '19 W Capitol Dr, Pasig, 1603 Metro Manila, Philippines', 'Pasig'),
(1481, 'Inapuyan Resto Grill', '', '14.5669228', '121.0944138', 'https://lh5.googleusercontent.com/p/AF1QipN--TlCbZgUH2sVAbag2K7ag2JxVLo2hXCJ-rTG=w122-h92-k-no', 4.3, 117, 'Filipino restaurant', '$', 'Open until 2:00 AM', '1 Alfonso Sandoval Ave corner Mercedes Ave, San Miguel, Pasig City, 1600 Metro Manila, Philippines', 'Pasig');
INSERT INTO `places` (`PlaceID`, `Pname`, `Des`, `Lat`, `Lot`, `img`, `Rating`, `reviews`, `type`, `price`, `hours`, `address`, `City`) VALUES
(1482, 'Leonard Restaurant', '', '14.5447121', '121.0982819', 'IMAGE NOT AVAILABLE', 0, 0, 'Restaurant', '$', 'Open until 9:00 PM', 'Avocado St, Pasig, Metro Manila, Philippines', 'Pasig'),
(1483, 'Emilio\'s Cafe', '', '14.5644308', '121.0805112', 'https://lh5.googleusercontent.com/p/AF1QipOP747CS9JYX29oMxcpd8xM0-N9rW0L5UhBsoHU=w80-h106-k-no', 4, 2, 'Restaurant', '$', 'Open until 11:00 PM', 'H37J+Q6C, Pasig, Metro Manila, Philippines', 'Pasig'),
(1484, 'Locavore Kitchen x Drinks', '', '14.5716667', '121.0563889', 'https://lh5.googleusercontent.com/p/AF1QipOu--yWS1NLuOCLEkLpN6Iz4Xz9jZptpOV_Y78x=w92-h92-k-no', 4.5, 911, 'Filipino restaurant', '$$', 'Open until 9:00 PM', '10 Brixton St, Pasig, 1603 Metro Manila, Philippines', 'Pasig'),
(1485, 'Tittos Latin BBQ & Brew - Kapitolyo', '', '14.5717412', '121.0608814', 'https://lh5.googleusercontent.com/p/AF1QipOwS2PgRh-_ugeNacBt0BCzoPCP2YNzJYrrL4DC=w92-h92-k-no', 4.4, 405, 'Restaurant', '$$', 'Open until 8:00 PM', '16 E Capitol Dr, Pasig, 1603 Metro Manila, Philippines', 'Pasig'),
(1486, 'Publing\'s Eatery', '', '14.5549389', '121.0918785', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=7hCp-bqCxjHqL0vh9gT0kA&cb_client=search.gws-prod.gps&w=80&h=92&yaw=169.22531&pitch=0&thumbfov=100', 0, 0, 'Restaurant', '$', 'Open until 10:00 PM', 'Urbano Velasco Ave, Pasig, 1602 Kalakhang Maynila, Philippines', 'Pasig'),
(1487, 'Tipsy Pig Gastropub', '', '14.5746417', '121.0627056', 'https://lh5.googleusercontent.com/p/AF1QipNacgqxPY3R0nNl6E73BokFPwlWQh5HjkWImwJT=w163-h92-k-no', 4.3, 466, 'Gastropub', '$$', 'Open until 10:00 PM', 'Capitol Commons, Camino Verde Rd, Pasig, Kalakhang Maynila, Philippines', 'Pasig'),
(1488, 'Bueno Tapas & Wine Restaurant', '', '14.5861921', '121.0804367', 'https://lh5.googleusercontent.com/p/AF1QipOYHWDla7QdA40Dw_3Z0QBi7GI55yQzIfK2wLl2=w138-h92-k-no', 4.5, 177, 'Spanish restaurant', '$', 'Open until 2:00 AM', 'Retail Row, The Grove by Rockwell, E. Rodriguez Jr. Ave., Ugong, Pasig City, 1604 Metro Manila, Philippines', 'Pasig'),
(1489, 'Restaurant 5', '', '14.5858235', '121.0601767', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=08G1CwXZF31ZVArscrRcvg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=69.44795&pitch=0&thumbfov=100', 0, 0, 'Restaurant', '$', 'Open until 9:30 PM', 'Discovery Suites Hotel,, ADB Ave, San Antonio, Pasig, Metro Manila, Philippines', 'Pasig'),
(1490, 'Little Bear', '', '14.5709091', '121.0608669', 'https://lh5.googleusercontent.com/p/AF1QipNRRQKUjF-iweEXXzqGLrWcoKzTUOXhPwqXkQ9n=w122-h92-k-no', 4.5, 14, 'Restaurant', '$', 'Closed ⋅ Opens 1:30PM Fri', '23 E Capitol Dr, Pasig, 1603 Metro Manila, Philippines', 'Pasig'),
(1491, 'Ortigas Park', '', '14.5867233', '121.0611114', 'https://lh5.googleusercontent.com/p/AF1QipNPanXvpPwZSFIsq7JSdRny-j29qnlDMaMual4J=w80-h106-k-no', 4.2, 714, 'Park', '$', 'Open 24 hours', 'Emerald Ave, San Antonio, Pasig, Metro Manila, Philippines', 'Pasig'),
(1492, 'Pasig Rainforest Park', 'Recreation site with an adventure park. City park with sports facilities & a variety of attractions, including an adventure park & zoo.', '14.5738401', '121.0976382', 'https://lh5.googleusercontent.com/p/AF1QipOSkTQG2j71krLYiZo0sm3rVdIC7eWYWNTOPhQ=w80-h106-k-no', 4.2, 2292, 'Park', '$', '', 'Francisco Legaspi, Pasig, Metro Manila, Philippines', 'Pasig'),
(1493, 'Pasig City Museum', 'Mansion & museum of city history. Historic mansion & museum tracing city history & development, plus art, music & literary events.', '14.5609655', '121.0763305', 'https://lh5.googleusercontent.com/p/AF1QipNlr0zJ8unvxuALicXIy5oZMDp9UUW_q97taV0Q=w129-h92-k-no', 4.4, 24, 'Local history museum', '$', 'Open until 6:00 PM', 'Plaza Rizal, F. Concepcion, Pasig, 1600 Metro Manila, Philippines', 'Pasig'),
(1494, 'Fun Ranch', '', '14.5872173', '121.0781648', 'https://lh5.googleusercontent.com/p/AF1QipNtVOtkJgfrwBKCawsEKIWUrtJOzkYCA-gTQETg=w122-h92-k-no', 4.1, 229, 'Event venue', '$', 'Open until 9:00 PM', 'Ortigas East, Ortigas Avenue, corner C5, Pasig, Metro Manila, Philippines', 'Pasig'),
(1495, 'Bitukang Manok Historical Marker', '', '14.5613341', '121.0764264', 'https://lh5.googleusercontent.com/p/AF1QipOawu4C-XMNTiHAUC3Ayyy4-dJohH7xHFGNn1r4=w80-h119-k-no', 5, 1, 'Historical landmark', '$', '', 'Acacia, Pasig, Metro Manila, Philippines', 'Pasig'),
(1496, 'Ark Avilon Zoo', 'Ark-shaped interactive indoor zoo. Interactive indoor zoo featuring a python, an orangutan, birds & more in an ark-shaped building.', '14.5882199', '121.0779212', 'https://lh5.googleusercontent.com/p/AF1QipN37wKpSO0MOXxaD31cfLcStyJdseAUHOBJiNE7=w122-h92-k-no', 3.8, 148, 'Zoo', '$', 'Open until 6:00 PM', 'Rd D, Pasig, Metro Manila, Philippines', 'Pasig'),
(1497, 'Bahay na Tisa', '', '14.5606877', '121.0742688', 'https://lh5.googleusercontent.com/p/AF1QipMzMldk-nUZFJrL6Di8PHeiu4rwmR0dLn4PclrA=w80-h142-k-no', 4.6, 29, 'Historical landmark', '$', '', 'P. Gomez St, Pasig, 1600 Metro Manila, Philippines', 'Pasig'),
(1498, 'Ace Water Spa', '', '14.5733678', '121.0592461', 'https://lh5.googleusercontent.com/p/AF1QipOE67Zr9gefYXzT6cyAauYcBXwVCP-e0LzCnLyI=w122-h92-k-no', 4.4, 2084, 'Spa', '$', 'Open until 10:00 PM', 'United St, Pasig, Metro Manila, Philippines', 'Pasig'),
(1499, 'Las Farolas the Fish World', '', '14.588312', '121.077779', 'https://lh5.googleusercontent.com/p/AF1QipNgVjXDWvEEmpFQg7zW4ufy9r3b87THSPHGjRAx=w167-h92-k-no', 4, 7, 'Maritime museum', '$', 'Open 24 hours', 'Frontera Drive Corner Road D, Pasig, 1604 Kalakhang Maynila, Philippines', 'Pasig'),
(1500, 'Old Rizal Provincial Capitol Ruins', '', '14.5569672', '121.0717335', 'https://lh5.googleusercontent.com/p/AF1QipNzGoMScRbsQjYEPwMucmxhu77cH3JLLm2uJwAO=w129-h92-k-no', 4.3, 16, 'Historical landmark', '$', '', '516-519 Lopez Jaena, Pasig, 1600 Metro Manila, Philippines', 'Pasig'),
(1501, 'Metrowalk Commercial Complex', '', '14.5870658', '121.0647396', 'https://lh5.googleusercontent.com/p/AF1QipM-PjCFnPiSa03KsSJpSg4mtuBIoRtr13HmMeS6=w129-h92-k-no', 4.1, 4061, 'Shopping mall', '$', 'Open 24 hours', 'Meralco Ave, Pasig, Metro Manila, Philippines', 'Pasig'),
(1502, 'Lopez Museum and Library', 'Private collection of art, books & maps. Museum housing a private collection of Filipino paintings, personal artifacts, books & maps.', '12.8543042', '121.6537732', 'https://lh5.googleusercontent.com/p/AF1QipMdoA6nCjUnIn0Zj4udwhhn0RWoqx8Pejfx-QzI=w199-h92-k-no', 4, 19, 'Exhibit', '$', 'Open until 5:00 PM', '', 'Pasig'),
(1503, 'Hop on , Hop Off Travel Inc.', '', '14.5763769', '121.0851059', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=aPXLT3hJqWfxYNQMACYP2A&cb_client=search.gws-prod.gps&w=80&h=92&yaw=193.15501&pitch=0&thumbfov=100', 0, 0, 'Travel agency', '$', '', 'U 2609 Medical Plaza Bldg., San Miguel Ave., Ortigas Center, Pasig, Metro Manila, Philippines', 'Pasig'),
(1504, 'Cuartel del Guardia Civil (Guanio House)', '', '14.56009', '121.075791', 'https://lh5.googleusercontent.com/p/AF1QipOQqfLtenDtqTX5d3U7s8EixOQ0QqkJgi3lPoZ4=w122-h92-k-no', 0, 0, 'Historical landmark', '$', '', '4 P. Burgos, Pasig, Metro Manila, Philippines', 'Pasig'),
(1505, 'Immaculate Conception Cathedral - Diocese of Pasig', '', '14.5603347', '121.0774897', 'https://lh5.googleusercontent.com/p/AF1QipPxsfBlpj92PgefiNkzxoL-EFSuZFRg7B6jIO1n=w80-h92-k-no', 4.6, 710, 'Catholic cathedral', '$', 'Closed ⋅ Opens 8AM Tue', 'Jabson St, Pasig, 1600 Metro Manila, Philippines', 'Pasig'),
(1506, 'Capitol Commons Information Center', '', '14.5756621', '121.0635425', 'https://lh5.googleusercontent.com/p/AF1QipNdejFcxVFiON0li35foyKbCpM_PwMmaJIv2kfd=w122-h92-k-no', 4.4, 2023, 'Information services', '$', 'Open until 6:00 PM', 'Information Center, Capitol Commons, Meralco Ave, Ortigas Center, Pasig, 1600 Metro Manila, Philippines', 'Pasig'),
(1507, '22 Prime', '', '14.5857751', '121.0601738', 'https://lh5.googleusercontent.com/p/AF1QipN5MarIBz9o2ZoPKPpoG9VKPPS8qD_MgEK3lWZg=w122-h92-k-no', 4.2, 54, 'Restaurant', '$', 'Open until 11:00 PM', '22nd Level Discovery Suites, 25 ADB Avenue, Ortigas Avenue, Ortigas Center, Pasig City, Pasig, 1600 Metro Manila, Philippines', 'Pasig'),
(1508, 'Cai Events Place', '', '14.5776751', '121.0741778', 'https://lh5.googleusercontent.com/p/AF1QipNwMu1AUv4OwkpK2cblnScWQ2rmuuYaJLFDXQ8y=w163-h92-k-no', 4.2, 31, 'Event venue', '$', '', '7th Floor, Reliance Center, #99 E. Rodriguez Jr. Avenue, Barrio Ugong, Pasig City, Metro Manila, Philippines', 'Pasig'),
(1509, 'Pang-Alaalang Bantayog Historical Marker', '', '14.56064', '121.0782999', 'https://lh5.googleusercontent.com/p/AF1QipPffDpHaRpaWaHxM6WHKEA-57OLXLSLmc06F9be=w80-h139-k-no', 2, 1, 'Historical landmark', '$', '', 'Caruncho Ave, Pasig, Metro Manila, Philippines', 'Pasig'),
(1510, 'Jose Rizal Monument - Pasig City', '', '14.5606421', '121.0762002', 'https://lh5.googleusercontent.com/p/AF1QipMQeRIsI745xikj2xE8NlvVBZL0MOA71HwBIxI_=w122-h92-k-no', 5, 1, 'Historical landmark', '$', '', '1 P. Burgos, Pasig, Metro Manila, Philippines', 'Pasig'),
(1511, 'Church of Pasig Historical Marker', '', '14.5605401', '121.0770701', 'https://lh5.googleusercontent.com/p/AF1QipOXCsexVPi3VOja9qNgTWcrcFnnmmg6YDAOKI4l=w80-h139-k-no', 0, 0, 'Historical landmark', '$', '', 'H36G+6R8, Pasig, Metro Manila, Philippines', 'Pasig'),
(1512, 'Andres Bonifacio Monument - Pasig', '', '14.5612478', '121.0764264', 'https://lh5.googleusercontent.com/p/AF1QipPG7pLRf1gUUFr-NQ_rjPpjsWsHyTLD1hlZ5Uue=w80-h131-k-no', 4.6, 5, 'Historical landmark', '$', '', '59 Dr. Sixto Antonio Avenue, Pasig, 1600 Kalakhang Maynila, Philippines', 'Pasig'),
(1513, 'Asamblea Magna - General Valentin Cruz Historical Marker', '', '14.5620059', '121.0779143', 'https://lh5.googleusercontent.com/p/AF1QipN2f34RxjK-7oz0i-R25oCpLKti6EPuEAwdpLax=w80-h106-k-no', 5, 1, 'Historical landmark', '$', '', '23, 1600 M.H. del Pilar St, Pasig, Metro Manila, Philippines', 'Pasig'),
(1514, 'Bahay Kuwago Historical Marker', '', '14.5790093', '121.0675184', 'https://lh5.googleusercontent.com/p/AF1QipP0HDo4eoHbYH_JkA4EwsP5a5QFWHLGnDnXg1A=w137-h92-k-no', 0, 0, 'Historical landmark', '$', '', 'PSC Driveway, Pasig, Metro Manila, Philippines', 'Pasig'),
(1515, 'Colegio De Madres Agustinas Historical Marker', '', '14.55983', '121.0763901', 'https://lh5.googleusercontent.com/p/AF1QipMdLhcy_Df0eJwN5JGk_XrurOeai-3qqhz-Tztf=w80-h139-k-no', 0, 0, 'Historical landmark', '$', '', '152-194 A. Luna St, Pasig, Metro Manila, Philippines', 'Pasig'),
(1516, 'BANTAYOG NG KAGITINGAN', '', '14.5589401', '121.0808043', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=OC4WJYToWvPLY6inAiRCbg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=332.58286&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', 'Caruncho Ave, Pasig, Metro Manila, Philippines', 'Pasig'),
(1517, 'Sta Rosa de Lima Bridge', '', '14.5598794', '121.0722223', 'https://lh5.googleusercontent.com/p/AF1QipM1qDxXCXnByzy7dddevKXpLSmUXgyKTSJFnUDZ=w80-h139-k-no', 0, 0, 'Historical landmark', '$', 'Open 24 hours', 'H35C+XV5, Pasig, Metro Manila, Philippines', 'Pasig'),
(1518, 'Katarungan Ruins', '', '14.568686', '121.0773255', 'IMAGE NOT AVAILABLE', 0, 0, 'Historical landmark', '$', '', '170-H, 1606 Katarungan, Pasig, Metro Manila, Philippines', 'Pasig'),
(1519, 'Colegio Del Buen Consejo Historical Marker', '', '14.5602', '121.0763901', 'https://lh5.googleusercontent.com/p/AF1QipMaMojEHDHDxjtc2CskcfXNEqdzi_6Py2Xa_3PA=w80-h130-k-no', 0, 0, 'Historical landmark', '$', '', 'P. Burgos, Pasig, Metro Manila, Philippines', 'Pasig'),
(1520, 'Richard Kim Talavera', '', '14.5655917', '121.0805117', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=ZnUwfkjGwsv5jAntiHs6WQ&cb_client=search.gws-prod.gps&w=80&h=92&yaw=140.20236&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', 'Dr Pilapil St, Pasig, Metro Manila, Philippines', 'Pasig'),
(1521, 'Privato Hotel Ortigas', 'Modest lodging offering rooftop dining. Streamlined rooms & suites in a relaxed hotel with a rooftop bar/restaurant & an outdoor pool.', '14.5729258', '121.0630542', 'https://lh5.googleusercontent.com/p/AF1QipNaXzwIM2yckpzZA63jZXCnbbNoV86v_d4dZYu-=w138-h92-k-no', 4, 904, 'Hotel', '$34', '', '706 1603 Shaw Blvd, Pasig, 1603 Metro Manila, Philippines', 'Pasig'),
(1522, 'Victoria Court Hillcrest Pasig', 'Funky drive-in hotel with themed rooms. A unique drive-in hotel offering eclectic rooms & suites with fun, funky elements & free Wi-Fi.', '14.5711846', '121.0668278', '//lh3.googleusercontent.com/proxy/jmLRHJTD8D3A9pUJugilwRQXe_lo97ErSQLDvhGruv2UBYQnNWc7xKVqQbUGl8A6IPcW2cZzdI5OmiW94-kOOYoIkz-Gjy00uJjPPaqkpyzubnf3hlW70q7YpyzxMZHjOxFlIr-QQ6Kh9W2e7QxHe9Z2B4-s8KE=w135-h92-k-no', 4.1, 192, 'Motel', '$', '', 'Escarpment Rd, Pasig, Metro Manila, Philippines', 'Pasig'),
(1523, 'Lola Ote Bar & Grill', '', '14.6364874', '121.0399071', 'https://lh5.googleusercontent.com/p/AF1QipNybmI_U-VWiHez01QQVJVH71lqnhejWxxUhfzN=w122-h92-k-no', 4.3, 227, 'Bar & grill', '$$', 'Closing soon: 2:30 PM', '26 Sgt. Esguerra Ave, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1524, 'Thrams Bar and Restaurant', '', '14.650703', '121.028676', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=LrKnP5Co7oOBpW00Iehxxw&cb_client=search.gws-prod.gps&w=80&h=92&yaw=194.76387&pitch=0&thumbfov=100', 0, 0, 'Filipino restaurant', '$', '', '107, Westlife Building, West Avenue, Quezon City, 1100 Metro Manila, Philippines', 'Quezon_City'),
(1525, 'Little Quiapo', '', '14.6395753', '121.0486854', 'https://lh5.googleusercontent.com/p/AF1QipMGJce8m-aBaFZhGO0lbk6i0TJfzQM312lg7cOx=w146-h92-k-no', 4.4, 653, 'Filipino restaurant', '$$', 'Open until 8:00 PM', '90 Malakas St, Diliman, Quezon City, 1100 Metro Manila, Philippines', 'Quezon_City'),
(1526, 'Trellis', '', '14.6453056', '121.0528118', 'https://lh5.googleusercontent.com/p/AF1QipM5BHSuRQz2M9a0IXuP0GPZmnfE8w_392U5PyUI=w80-h106-k-no', 4.4, 244, 'Restaurant', '$$', 'Open until 10:00 PM', 'Kalayaan Ave, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1527, 'Sangkalan Restaurant', '', '14.660305', '121.044314', 'https://lh5.googleusercontent.com/p/AF1QipPpE8LOuOsadh-zT55tjk6WPkwrcxwfIImHMHIZ=w80-h106-k-no', 4.4, 280, 'Filipino restaurant', '$$', 'Open until 10:00 PM', '37 Visayas Ave, Lungsod Quezon, Kalakhang Maynila, Philippines', 'Quezon_City'),
(1528, 'Gerry\'s Jeepney', '', '14.6517767', '121.0543947', 'https://lh5.googleusercontent.com/p/AF1QipNcurGlSiig2HcQzGrJzlIIT5A5bFxHK4VJj0rV=w122-h92-k-no', 4.1, 305, 'Filipino restaurant', '$$', 'Open until 2:00 AM', '7 Maginhawa, Diliman, Lungsod Quezon, 1101 Kalakhang Maynila, Philippines', 'Quezon_City'),
(1529, 'Relish', '', '14.6333225', '121.0343185', 'https://lh5.googleusercontent.com/p/AF1QipOW7dIGC1-iaLG7lUwIZZoF41y1pg5I2jfyVx8a=w80-h141-k-no', 4.4, 336, 'Mediterranean restaurant', '$$', 'Open until 10:00 PM', '74 Scout Limbaga Street, 1103, Sct. Limbaga St, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1530, 'Oliva Bistro Cafe', '', '14.6637992', '121.0436213', 'https://lh5.googleusercontent.com/p/AF1QipOPNJZ9B21qgiszB_OB7i58De8L6T9iPrQm_N-g=w163-h92-k-no', 4.7, 84, 'Restaurant', '$', 'Open until 10:00 PM', 'Unit 101, 77 Visayas Ave, Quezon City, 1100 Metro Manila, Philippines', 'Quezon_City'),
(1531, 'Livestock', '', '14.6376702', '121.0391054', 'https://lh5.googleusercontent.com/p/AF1QipOmjOl3sj-680FLOIiCVlPgxyssNx8gSrxreF8f=w122-h92-k-no', 4.4, 558, 'Restaurant', '$$', 'Open until 2:00 AM', 'El Jardin Del Presidente 1, 41 Sgt. Esguerra Ave, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1532, 'Likha Diwa', '', '14.6474852', '121.0644409', 'https://lh5.googleusercontent.com/p/AF1QipPs-CggNZmEfil7UE_OKVpUnKt2RakuxBwz08_2=w122-h92-k-no', 4.4, 107, 'Vegan restaurant', '$$', 'Open until 10:00 PM', '1 Lt. J. Francisco, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1533, 'Annabel\'s Restaurant', '', '14.6302374', '121.0345408', 'https://lh5.googleusercontent.com/p/AF1QipNtp00cI-agW4OFYs0VW8oiobjvpX1WPA-ZvkK9=w194-h92-k-no', 4.4, 238, 'Restaurant', '$$$', 'Open until 4:00 PM', '194 Tomas Morato Ave, Diliman, Quezon City, 1100 Metro Manila, Philippines', 'Quezon_City'),
(1534, 'The Frazzled Cook', '', '14.6318589', '121.0331472', 'https://lh5.googleusercontent.com/p/AF1QipMWyD1w-_9meDvG07dIRzlS8AZawmqrE03_Scu6=w122-h92-k-no', 4.4, 836, 'Italian restaurant', '$$', 'Open until 10:00 PM', '78 Sct. Gandia St, Diliman, Quezon City, 1103 Metro Manila, Philippines', 'Quezon_City'),
(1535, 'Gourmet Gypsy Maginhawa', '', '14.6506771', '121.056424', 'https://lh5.googleusercontent.com/p/AF1QipOnNzLFXPgIoJnh0YfKckDWxottURtqQWVD7B0P=w122-h92-k-no', 4.5, 207, 'Restaurant', '$', 'Open until 9:00 PM', '28 Maginhawa, Diliman, Quezon City, 1101 Metro Manila, Philippines', 'Quezon_City'),
(1536, 'Tablo Kitchen x Cafe Timog QC', '', '14.63754', '121.032341', 'https://lh5.googleusercontent.com/p/AF1QipMYWxlQ3l7J6CzibAAla5JHaATltQuEOeMz0ASh=w163-h92-k-no', 4.7, 87, 'Restaurant', '$', 'Open until 10:00 PM', '14a Scout Borromeo St, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1537, 'Ninyo Fusion Cuisine', '', '14.6384805', '121.0733673', 'https://lh5.googleusercontent.com/p/AF1QipNm7cU75qxQd47Cr2NBLmZKBqHAVkIqPf8vSxTH=w80-h106-k-no', 4.6, 245, 'Fine dining restaurant', '$$$', 'Open until 9:00 PM', '66 Esteban Abada St, Quezon City, 1108 Metro Manila, Philippines', 'Quezon_City'),
(1538, 'Vittorio\'s Steakhouse', '', '14.6369286', '121.0349316', 'https://lh5.googleusercontent.com/p/AF1QipPFmaYFhwEOmf5NSn_hh2D0Jvze9ygSiCiX-5Sg=w122-h92-k-no', 4.4, 79, 'Restaurant', '$', 'Open until 11:00 PM', '32 Scout Borromeo St, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1539, 'Victorino\'s Restaurant', '', '14.6325905', '121.0412992', 'https://lh5.googleusercontent.com/p/AF1QipNl2FUM4h1gFk5CfyZhWGsePUEbhNqrc9wPAayE=w163-h92-k-no', 4.4, 603, 'Restaurant', '$$', 'Open until 10:00 PM', '11th Jamboree, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1540, 'Provenciano', '', '14.6455984', '121.0606537', 'https://lh5.googleusercontent.com/p/AF1QipOPth0k520joZaPXkrNVXdvDStzt2zFaaZJvl23=w80-h106-k-no', 4.5, 777, 'Filipino restaurant', '$$', 'Open until 9:00 PM', '110 Maginhawa, Diliman, Quezon City, 1101 Metro Manila, Philippines', 'Quezon_City'),
(1541, 'Chili\'s Tomas Morato', 'Lively chain for Tex-Mex & American eats. Family-friendly chain serving classic Tex-Mex & American fare in a Southwestern-style setting', '14.6329296', '121.0347609', 'https://lh5.googleusercontent.com/p/AF1QipPIW3bQTqhGu2iFNN9_BwYY43HTWFbzz0BhIjIH=w163-h92-k-no', 4.4, 686, 'American restaurant', '$', 'Open until 9:00 PM', '199 Tomas Morato Ave, cor Scout Fernandez, Quezon City, 1103 Metro Manila, Philippines', 'Quezon_City'),
(1542, 'Quezon Memorial Circle', 'Green space with a presidential monument. Bustling urban park with recreational activities & monument honoring a former Philippine president.', '14.6516074', '121.0493183', 'https://lh5.googleusercontent.com/p/AF1QipMWZ6_OTF7Ex5cGlhAGqMD6C9LpNUZQ2oqYGTAm=w80-h106-k-no', 4.3, 10347, 'National park', '$', 'Open 24 hours', 'Elliptical Rd, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1543, 'Quezon Memorial Shrine', 'Towering monument with a museum. 217-ft. memorial & shrine dedicated to former President Manuel Quezon, with a museum at its base.', '14.6507679', '121.0482122', 'https://lh5.googleusercontent.com/p/AF1QipPB3ZO9l9IiB4X9AV0lO711TY1IcBYk0-aZFgGv=w80-h142-k-no', 4.5, 52, 'Historical landmark', '$', '', 'Quezon Ave, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1544, 'Ninoy Aquino Parks and Wildlife Center', 'Tranquil city zoological park & gardens. Serene urban park with a wildlife rescue center, a playground, a lagoon & botanical gardens.', '14.6509444', '121.0440136', 'https://lh5.googleusercontent.com/p/AF1QipMtIUDlwMbhqT6C_RRAf9vNf4zxrd9DZwlF-lgN=w122-h92-k-no', 4.2, 1759, 'Park', '$', 'Open until 5:00 PM', 'Elliptical Rd, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1545, 'QCX: Quezon City Experience', 'Interactive cultural & history exhibits. Unique museum with interactive exhibits on local history & culture, including a futuristic film.', '14.6515919', '121.0513906', 'https://lh5.googleusercontent.com/p/AF1QipMvtxRjUEGWVOGY9mZhv7MieVFEzmG2JW8IgPay=w122-h92-k-no', 4.5, 181, 'Local history museum', '$', 'Open until 4:00 PM', 'Quezon Memorial Circle, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1546, 'Quezon Heritage House', 'Museum & former president\'s residence. Historic house museum focusing on former president & family, with early-1900s decor & furnishings.', '14.649543', '121.0503298', 'https://lh5.googleusercontent.com/p/AF1QipP1Xm5flzYXhpKEQdHWtIPlkTxM0peJxCvr6KM1=w122-h92-k-no', 4.1, 18, 'Heritage museum', '$', 'Open until 4:00 PM', 'J3X2+R48, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1547, 'Peace Bell', '', '14.6499959', '121.0492059', 'https://lh5.googleusercontent.com/p/AF1QipPRbsNUZvoMMiTF2YguzqB5MUbHkdog3XBu_qVa=w80-h138-k-no', 4.1, 32, 'Historical place', '$', 'Open 24 hours', 'J2XX+XMW, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1548, 'Sining Kamalig', '', '14.619164', '121.056411', '//lh4.googleusercontent.com/proxy/xqbncVenHAhQTB3XVMURwoABTEYhFSuO9TTbrd5RQjTB3HH6Zh0S2ar1jKTOkrzP7kGLwA32SsXXoyMYWMIZCn5e0OlRzBrjT0xzZgIt3xQ1Gh90slyH_wldvgBxsB18toRAjd4oqi3slrUFNn5Dffe_gJTTfhSh9uv92W9bVxJg=w122-h92-k-no', 3.4, 7, 'Art gallery', '$', '', 'Ali Mall, General Romulo Ave, Cubao, Quezon City, 1109 Metro Manila, Philippines', 'Quezon_City'),
(1549, 'Art In Island', '3D art museum with interactive works. Family-friendly art museum where visitors pose & take photos within 3D paintings & murals.', '14.622624', '121.0576357', 'https://lh5.googleusercontent.com/p/AF1QipOX0cPawCZv_Mc3bip48e_qDITgReNQUO3L77QS=w80-h106-k-no', 4.5, 1581, 'Art center', '$', 'Closed ⋅ Opens 9:30AM Tue', '175 15th Ave, Cubao, Quezon City, 1109 Metro Manila, Philippines', 'Quezon_City'),
(1550, 'StrEat Maginhawa Food Park', '', '14.6467093', '121.0587811', 'https://lh5.googleusercontent.com/p/AF1QipN_HMFcfOp2unRZxue9nAZTSJwq5InReTEmZnfA=w122-h92-k-no', 4.1, 854, 'Food court', '$$', 'Opens at 3:00 PM', '91 Maginhawa, Diliman, Quezon City, 1101 Metro Manila, Philippines', 'Quezon_City'),
(1551, 'La Mesa Ecopark', 'Natural space with diverse attractions. Green area with tropical plants, ponds & paths, along with a butterfly garden & swimming pools.', '14.711977', '121.075058', 'https://lh5.googleusercontent.com/p/AF1QipP9QiRwNhAMBGpMFayuSGnIjqO8SrTqx1IHl8-H=w122-h92-k-no', 4.4, 1273, 'Park', '$', 'Open until 5:00 PM', 'Novaliches, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1552, 'Andres Bonifacio Monument - Quezon City Hall', '', '14.6471439', '121.0495862', 'https://lh5.googleusercontent.com/p/AF1QipNtS7uOO1Zyv0H4Jd0GDQ0Twz4h8TBMWZCfEAo_=w129-h92-k-no', 0, 0, 'Historical landmark', '$', '', 'J2WX+VR4, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1553, 'Dove of Peace Monument', '', '14.6518899', '121.0473787', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=1IAfU-zdydz4rSqX7csbJg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=78.58359&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', 'Unnamed Road, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1554, 'Manuel L. Quezon Monument - QCity Hall', '', '14.646695', '121.0499647', 'https://lh5.googleusercontent.com/p/AF1QipNSPpXyT0215h8pI4IEcJKqAWWitfheb8iUWz8H=w138-h92-k-no', 0, 0, 'Historical landmark', '$', '', 'Quezon City Hall, East Ave, Central Diliman, Lungsod Quezon, 1101 Kalakhang Maynila, Philippines', 'Quezon_City'),
(1555, 'Jose Rizal Monument - QC Hall', '', '14.6472198', '121.0505772', 'https://lh5.googleusercontent.com/p/AF1QipMCvSL6fsmb8yvKTvMRX6eqEQs0uhuDQPla8y85=w80-h106-k-no', 0, 0, 'Historical landmark', '$', '', 'J3W2+V6P, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1556, 'UP Stone Markers', '', '14.655055', '121.0581418', 'https://lh5.googleusercontent.com/p/AF1QipNeXCnIqDf0P8WAjRPPOcht5-RekNNKSCiJIf0T=w125-h92-k-no', 4.2, 5, 'Historical landmark', '$', 'Open 24 hours', 'M345+27C, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1557, 'Krus Na Ligas Arch', '', '14.647576', '121.0642384', 'https://lh5.googleusercontent.com/p/AF1QipNWUQ-5kxeYYv0azueRSbNOAgUhFEkUkMzPHVeQ=w122-h92-k-no', 4.1, 82, 'Historical landmark', '$', 'Open 24 hours', '1 Lt. J. Francisco, Diliman, Quezon City, 1101 Metro Manila, Philippines', 'Quezon_City'),
(1558, 'Unang Brodkast sa Telebisyon sa Pilipinas Historical Marker', '', '14.6398099', '121.0372198', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=On8nudhlSahbDzklYE8FKQ&cb_client=search.gws-prod.gps&w=80&h=92&yaw=246.52586&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', 'J2QP+WVH, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1559, 'Tandang Sora Memorial Shrine', '', '14.684181', '121.053483', 'https://lh5.googleusercontent.com/p/AF1QipMjr7276zY2aRsbNE9eu6m4bnmAE8s5inHZBKsl=w138-h92-k-no', 0, 0, 'Historical landmark', '$', '', '30 Rd 6, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1560, 'The Oblation', '', '14.6549069', '121.0648694', 'https://lh5.googleusercontent.com/p/AF1QipPHfz4L8xMgbDOMIi02k5ZlDVUykMSISbPYbAPt=w138-h92-k-no', 4.7, 489, 'Historical landmark', '$', '', 'University Ave, Diliman, Quezon City, 1101 Metro Manila, Philippines', 'Quezon_City'),
(1561, 'VMMC Historical Marker', '', '14.65619', '121.04012', 'IMAGE NOT AVAILABLE', 0, 0, 'Historical landmark', '$', '', 'M24R+F2H, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1562, 'Ang Nayon ng Krus na Ligas Historical Marker', '', '14.6442825', '121.0636949', 'https://lh5.googleusercontent.com/p/AF1QipMN0GNvTabqxcY2BFZ0-dZwxl5ED63zsJEjNKvS=w80-h140-k-no', 0, 0, 'Historical landmark', '$', '', 'J3V7+PF8, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1563, 'New Cry of Pugadlawin Monument', '', '14.6542999', '121.0732298', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=8GBSNTXpMu8TPpU6GpnRGg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=233.6484&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', 'Unnamed Road, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1564, 'University of The Philippines Historical Marker', '', '14.6549201', '121.0648801', 'https://lh5.googleusercontent.com/p/AF1QipMTAb-fPI2v3L3F9bvTYBTiceiP671AWjsEeOol=w80-h160-k-no', 0, 0, 'Historical landmark', '$', '', 'Unnamed Road, Diliman, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1565, 'Mira-Nila House Historical Marker', '', '14.61154', '121.0500599', 'https://lh5.googleusercontent.com/p/AF1QipPpey3KuosrE7og1rL71kPkWpmFHJ_r36D4pWl9=w122-h92-k-no', 5, 1, 'Historical landmark', '$', '', 'J362+J27, Quezon City, Metro Manila, Philippines', 'Quezon_City'),
(1566, 'Cocoon Boutique Hotel, Quezon City - Best Hotel in QC', 'Sophisticated hotel with a rooftop pool. Polished hotel offering a spa & a gym, plus a rooftop terrace with an outdoor pool, a bar & a cafe.', '14.6348314', '121.0308212', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=M03JrEOnvexq6rPvkCyJ5Q&cb_client=search.gws-prod.gps&w=211&h=120&yaw=281.35043&pitch=0&thumbfov=100', 4.3, 450, 'Hotel', '$$', '', '61 Scout Rallos St, cor Sct. Tobias St, Diliman, Quezon City, 1103 Metro Manila, Philippines', 'Quezon_City');

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
(70, 'Manila Ocean Park', 'The Manila Ocean Park is a oceanarium in Manila, Philippines. It is owned by China Oceanis Philippines Inc., a subsidiary of China Oceanis Inc., a Singaporean-registered firm. It is located behind the Quirino Grandstand at Rizal Park.', 'Manila Ocean Park', 5, 61, 'deocer123'),
(74, 'Manila', 'Manila, the capital of the Philippines, is a densely populated bayside city on the island of Luzon, which mixes Spanish colonial architecture with modern skyscrapers. Intramuros, a walled city in colonial times, is the heart of Old Manila. It’s home to th', '', 1, 61, 'deocer123'),
(75, 'Manila', 'Manila, the capital of the Philippines, is a densely populated bayside city on the island of Luzon, which mixes Spanish colonial architecture with modern skyscrapers. Intramuros, a walled city in colonial times, is the heart of Old Manila. It’s home to th', '', 3, 61, 'deocer123'),
(76, 'Baguio', 'Baguio, on the Philippines’ Luzon island, is a mountain town of universities and resorts. Called the “City of Pines,” it’s particularly popular in summer due to unusually cooler weather. At its center is Burnham Park, with gardens and a lake. Nearby, Bagu', '', 1, 61, 'deocer123'),
(77, 'Baguio', 'Baguio, on the Philippines’ Luzon island, is a mountain town of universities and resorts. Called the “City of Pines,” it’s particularly popular in summer due to unusually cooler weather. At its center is Burnham Park, with gardens and a lake. Nearby, Bagu', '', 1, 61, 'deocer123'),
(78, 'Tagaytay', 'Tagaytay is a popular holiday town south of Manila on the Philippine island Luzon. Known for its mild climate, it sits on a ridge above Taal Volcano Island, an active volcano surrounded by Taal Lake', '', 1, 61, 'deocer123'),
(79, 'Taal Volcano', 'Taal Volcano is a large caldera filled by Taal Lake in the Philippines. Located in the province of Batangas, the volcano is one of the most active volcanoes in the country, with 34 recorded historical eruptions, all of which were concentrated on Volcano I', '', 2, 61, 'deocer123'),
(80, 'Taal Volcano', 'Taal Volcano is a large caldera filled by Taal Lake in the Philippines. Located in the province of Batangas, the volcano is one of the most active volcanoes in the country, with 34 recorded historical eruptions, all of which were concentrated on Volcano I', '', 1, 61, 'deocer123'),
(81, 'Batangas', 'Batangas, officially the Province of Batangas is a province in the Philippines located in the Calabarzon region on Luzon. Its capital is the city of Batangas, and is bordered by the provinces of Cavite and Laguna to the north, and Quezon to the east', '', 2, 61, 'deocer123'),
(82, 'Batangas', 'Batangas, officially the Province of Batangas is a province in the Philippines located in the Calabarzon region on Luzon. Its capital is the city of Batangas, and is bordered by the provinces of Cavite and Laguna to the north, and Quezon to the east', '9 SPOONS - The Bayleaf Intramuros', 2, 61, 'deocer123'),
(83, 'Tagaytay', 'Tagaytay is a popular holiday town south of Manila on the Philippine island Luzon. Known for its mild climate, it sits on a ridge above Taal Volcano Island, an active volcano surrounded by Taal Lake.', '', 1, 61, 'deocer123'),
(84, 'a popular ', 'Tagaytay is a popular holiday town south of Manila on the Philippine island Luzon. Known for its mild climate, it sits on a ridge above Taal Volcano Island, an active volcano surrounded by Taal Lake.', '', 1, 61, 'deocer123'),
(85, 'Tagaytay is a popular holiday town south of Manila ', 'Tagaytay is a popular holiday town south of Manila on the Philippine island Luzon. Known for its mild climate, it sits on a ridge above Taal Volcano Island, an active volcano surrounded by Taal Lake. Overlooking the area, People’s Park in the Sky occupies', '', 2, 61, 'deocer123'),
(86, 'Holiday town south of Manila ', 'Tagaytay is a popular holiday town south of Manila ', '', 1, 61, 'deocer123'),
(87, 'Tagaytay holiday ', 'Tagaytay is a popular holiday town south of Manila ', '', 2, 61, 'deocer123'),
(88, 'Tagaytay is a popular ', 'Tagaytay is a popular holiday town south of Manila ', '', 1, 61, 'deocer123'),
(89, 'Tagaytay town south of Manila ', 'Tagaytay is a popular holiday town south of Manila ', '', 2, 61, 'deocer123'),
(90, 'South of Manila ', 'Tagaytay is a popular holiday town south of Manila ', '', 2, 61, 'deocer123'),
(92, 'Hiking!', '', '9 SPOONS - The Bayleaf Intramuros', 3, 61, 'deocer123'),
(93, 'Hiking', '', 'Eat All You Can Food Corporation', 2, 61, 'deocer123'),
(94, 'Luneta', 'The Luneta Park tagalog draws its name from the word lunette, meaning “crescent-shaped structure for defense used in fortifications in the 17th to 18th centuries.” The original name of Luneta Park is Bagumbayan.', 'Rizal Park', 5, 61, 'deocer123'),
(95, ' Rizal Park', 'Rizal Park is one of the largest urban parks in Asia. At 140 acres, the park is home to the National Museum Complex, the Rizal Monument, a series of gardens, public art and event venues. The National Museum Complex consists of the National Museums of Fine', 'Rizal Park', 3, 61, 'deocer123'),
(97, 'The National Museum, a Trust of the Government', 'Is an educational, scientific and cultural institution that acquires, documents, preserves, exhibits, and fosters scholarly study and public appreciation of works of art, specimens, and cultural and historical artifacts', 'National Museum of the Philippines', 4, 61, 'deocer123');

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
(10, 'National Museum of Natural History', 'very good!', 4, 61, 'deocer123');

-- --------------------------------------------------------

--
-- Table structure for table `wuser`
--

CREATE TABLE `wuser` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `Lat` varchar(25) DEFAULT NULL,
  `Lot` varchar(25) DEFAULT NULL,
  `Location` varchar(25) NOT NULL,
  `Budget` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wuser`
--

INSERT INTO `wuser` (`UserID`, `UserName`, `Pass`, `Lat`, `Lot`, `Location`, `Budget`) VALUES
(61, 'deocer123', '$2y$10$S2UapU3N.t5xXP3mXA/0HO8u1g8IRKAIFyz35dyFnoSBKNEhwGi3y', '14.650991', '121.048616', 'Manila', '$$'),
(62, 'admin123', '$2y$10$JsW4zURwGg6PlYZr3KJ7men/YGpULfOBpEdQF4IR6Zj9TV7eCE7C2', '14.633108', '121.099354', 'Manila', ''),
(73, 'deocer321', '$2y$10$8TkKLpHqpwwiMLaiEuRe7.7hXkINnsOq7zGSMRKMl6glpIGVTbUVm', '14.590607', '120.979901', 'Manila', '$$$'),
(75, 'deocer345', '$2y$10$MLRDNBQ2qn80KBqb68coQeIpMZcWNud6DWY0ZGx7OURHF9k5BG0XW', '14.590607', '120.979901', 'Manila', '$'),
(76, 'eliz123445', '$2y$10$gnDKS.OJorX3icNIfELIK.ChU5x4RpjTxbufq6v/puXRmT19dLfDu', '14.590607', '120.979901', 'Manila', '$$'),
(77, 'marikina123', '$2y$10$QLHR1hnnQsAMXTngn1xvM./UXpzvUEU0xMTato5fvtMBDBAcTUQLi', '14.633108', '121.099354', 'Marikina', '$$'),
(78, 'ewewqewewqewqe', '$2y$10$DZ./UVVbXSRplm/8gd2f.uXBa.pEvNRnTKNfW.TLAFzu0ly9bmDo.', '14.633108', '121.099354', 'Marikina', '$'),
(79, 'ewqewqeqwe', '$2y$10$S5l.GobxeRG7cU3GIjqfAuSBs/GuoMMcVP2xsB5rjYJs.NP7GsyTq', '14.590607', '120.979901', 'Manila', '$'),
(80, 'eweqqwewqeewqe', '$2y$10$1KmvL8M27kjR7.4rrw99c.ZMrXttXC4nFA/bR9KI0dYCwT9R269Ia', '14.55938', '121.08193', 'Pasig', '$$'),
(81, 'rwewqewqeqwe', '$2y$10$JdNcKHozYY.ovPTKyvyE.O.wE4UMRhe/oAGcyAUPbrHJYQ/GJ6RVG', '14.650991', '121.048616', 'Quezon_City', '$'),
(82, 'ewqewqeqewqewqe', '$2y$10$8lGyFbFswIx0W7cTqu/h2u.zBuPRlcjeraQ2tVUuSr3jkksKIdms.', '14.48086', '120.981822', 'Las_Pinas', '$'),
(83, 'wewewqewqewqess', '$2y$10$Wjuwb5lYiMY..E3Jq0SZy.iJB4wnBlnoKcQrXhvCBFjmuyydCnN4S', '14.57746', '121.033469', 'Mandaluyong', '$'),
(84, 'weqwewqeqeqwe', '$2y$10$k1wFNtkHsqCYmpL35qbhyu9e2ENhIUtYZbVDBMJpswplKKH/GB/S6', '14.590607', '120.979901', 'Manila', '$'),
(85, 'ewqewqewqewewqewq', '$2y$10$tsOkULkEppHRymsP.GTlp.w7.jktG1L4.JVlDBLoUuXr06gbpZMKC', '14.590607', '120.979901', 'Manila', '$'),
(86, 'ewqeqeqewqeqwewq', '$2y$10$IWp8hw6P9tMVoq3i1jzlwO3iehqjzsaVQGns3SRkXTK4fcf92/wDe', '14.590607', '120.979901', 'Manila', '$'),
(87, 'wdwdwwwwwew', '$2y$10$CCWy1N6V.XiSjhMKpQ6yCegdrLL/pppmLWWXw3AFXRk1SrX..aXY.', '14.590607', '120.979901', 'Manila', '$'),
(88, 'ewqewqewqewqewqe', '$2y$10$7Auy0dztBdG1QAmBhQnyo.VamfZW7DrezmsGbDQpYxvoAuM.Iq.oO', '14.590607', '120.979901', 'Manila', '$'),
(89, 'wqeqwewqeqeqe', '$2y$10$md4Hwfm11fvLFLvyoRoBkOY71atLf3hRem96WDH0ZV2NCgQf.5Bum', '0', '0', '', ''),
(90, 'ewqewqewqe', '$2y$10$gkno7c2jighWk5AQZyqn8.NOF1dMxBYGCsMVmoQUWElXZKTqgdFFK', '14.590607', '120.979901', 'Manila', '$'),
(91, 'startre123', '$2y$10$cskBBKFGiio93BJYzKZ5Jeu0zjohvxWlRRooRocWFlO2QhX9DTXzy', '0', '0', '', ''),
(92, 'tryme69420', '$2y$10$SkAKoPf0FgFgnLIGeBf5tupnyR.VhzieFxzDaeTqX0EGpp5Q8nVFy', '14.633108', '121.099354', 'Marikina', '$$'),
(93, 'ewqewqeqeqwewqeq', '$2y$10$ZAWEr4qSOtxuWS.Lx96LfOZ3h/0EyMbdXeITtjizTy0wlXyW489p.', '14.590607', '120.979901', 'Manila', 'Res');

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
  MODIFY `PlcID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `panes`
--
ALTER TABLE `panes`
  MODIFY `PaneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `PlaceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1567;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wuser`
--
ALTER TABLE `wuser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

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
