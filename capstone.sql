-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 06:36 AM
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
(47, 'National Museum of Natural History', 90, 'National Museum of Natural History');

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
(965, 'Raffaele Woodfired Pizza, The Bayleaf Hotel', '', '14.5900112', '120.978804', 'https://lh5.googleusercontent.com/p/AF1QipNTP4tb0DITLYYLouzs7yfFxHAl7wFyoCEciLS9=w122-h92-k-no', 4.6, 81, 'Italian restaurant', '$', 'Temporarily closed', 'The Bayleaf Intramuros, 1002 Muralla St, Intramuros, Manila, Metro Manila, Philippines', 'Manila'),
(966, 'Ilustrado Restaurant', 'Filipino meals in nostalgic surrounds. Traditional Filipino cuisine served in an old-school, Spanish-style venue with antique decor.', '14.5875418', '120.9770326', 'https://lh5.googleusercontent.com/p/AF1QipNBMhjRwbeTWVpe2JGT1D79vWjo5wH_YMcsEdyC=w122-h92-k-no', 4.2, 304, 'Filipino restaurant', '$$', 'Open until 7:00 PM', '744 General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(967, 'Ilustrado - General Luna', '', '14.587596', '120.976987', 'https://lh5.googleusercontent.com/p/AF1QipMcjgM6saSct0rew1EjdPG8d8xY4CABnZUoy0XS=w80-h106-k-no', 4.2, 203, 'Asian restaurant', '$$', 'Open until 11:30 PM', '744 General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(968, 'The Aristocrat Restaurant, SM Manila', '', '14.5910375', '120.9818902', 'https://lh5.googleusercontent.com/p/AF1QipMJK0f4RWfYM83_pa9AyRdHzCaCzh7tm_HqYpaL=w122-h92-k-no', 3.6, 11, 'Restaurant', '$$', 'Open until 6:00 PM', 'Concepcion cor. Arroceros and San Miguel Sts, Ermita, Manila, Philippines', 'Manila'),
(969, 'Cafe Ilang-Ilang', '', '14.582938', '120.9740848', 'https://lh5.googleusercontent.com/p/AF1QipOLt1Xt3mtJ0WKjhQzLhCQZPeQupUdjQ-LW-ZXG=w163-h92-k-no', 4.6, 732, 'Buffet restaurant', '$$$', 'Reopens at 5:00 PM', 'Manila Hotel, 1 Rizal Park, Ermita, Manila, 0913 Metro Manila, Philippines', 'Manila'),
(970, 'Harbor View Restaurant', '', '14.5778275', '120.9743613', 'https://lh5.googleusercontent.com/p/AF1QipOwkQhxK7T4CWTB1fiUncv1iwQNL1C1Rl_Ov7fx=w122-h92-k-no', 4.2, 1009, 'Restaurant', '$$', 'Open until 10:00 PM', 'South Dr, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(971, 'Barbara\'s Heritage Restaurant', '', '14.5894156', '120.9752694', 'https://lh5.googleusercontent.com/p/AF1QipPZHSSz8rCvyik-3YJoVeEzMoFPFmFkvrssAlfE=w163-h92-k-no', 4.2, 511, 'Filipino restaurant', '$$', 'Reopens at 5:00 PM', 'HXQG+V52, plaza sans luis complex, General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(972, 'Ristorante delle Mitre', '', '14.589485', '120.9746813', 'https://lh5.googleusercontent.com/p/AF1QipMcl1CKqyrQulciEFtLRnjvFSSkb8bRn2HW0c1l=w122-h92-k-no', 4.2, 294, 'Restaurant', '$$', 'Open until 8:00 PM', 'Opposite San Agustin Church, Real St, Intramuros, Manila, Metro Manila, Philippines', 'Manila'),
(973, 'Sky Deck View Bar - The Bayleaf Intramuros', '', '14.5900225', '120.978795', 'https://lh5.googleusercontent.com/p/AF1QipOJJY0Ejmmb_z-P4ebll9cosAr5zgh8gIyvDVoB=w80-h106-k-no', 4.4, 795, 'Restaurant', '$$', 'Open until 9:00 PM', 'The Bayleaf Intramuros, Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(974, '9 SPOONS - The Bayleaf Intramuros', '', '14.589926', '120.978776', 'https://lh5.googleusercontent.com/p/AF1QipOO5iIkhcGyBOAcH0mThVL0kdSanSTRznCcWxw_=w163-h92-k-no', 4.3, 224, 'Restaurant', '$', 'Open until 10:30 PM', 'The Bayleaf Intramuros, 9/F Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(975, 'Plaza San Luis Complex', '', '14.5896306', '120.9753879', 'https://lh5.googleusercontent.com/p/AF1QipMYStR32cYoVH40T5H46sRpUUx5kLSKJCdzZ1ck=w163-h92-k-no', 4.4, 277, 'Restaurant', '$', 'Opens at 8:00 AM', 'General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(976, 'Chibz Restobar', '', '14.5906407', '120.9761587', 'https://lh5.googleusercontent.com/p/AF1QipNA_ZUQE6OdOrg3sVGgPLgdDaivKETli_2KUv7x=w122-h92-k-no', 4.6, 32, 'Bar', '$', 'Open until 10:00 PM', 'Real St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(977, 'Bistro Remedios', '', '14.5698672', '120.9861935', 'https://lh5.googleusercontent.com/p/AF1QipNUySYApDLFCxBI0uGwrXI54looIs4177fhj4yd=w122-h92-k-no', 4.4, 251, 'Filipino restaurant', '$$', 'Reopens at 6:00 PM', '1911 M. Adriatico St, Malate, Manila, 1004 Metro Manila, Philippines', 'Manila'),
(978, 'Caruso Ristorante Italiano', '', '14.5653662', '121.0229127', 'https://lh5.googleusercontent.com/p/AF1QipMvHZxwrkyl-Dz6fqgSz66R--xO-BMiqikvJccA=w80-h106-k-no', 4.5, 286, 'Italian restaurant', '$', 'Reopens at 6:00 PM', 'Ground floor, LRI Design Plaza, 210 Nicanor Garcia, Makati, 1209 Metro Manila, Philippines', 'Manila'),
(979, 'Ying Ying Tea House', '', '14.59797', '120.976713', 'https://lh5.googleusercontent.com/p/AF1QipNJrCOhZG2DgiiMRtEzLw_P2HQO58lsnqbZztsK=w163-h92-k-no', 4.3, 1717, 'Lechon restaurant', '$$', 'Open until 6:00 PM', '233-235 Yuchengco St, Binondo, Manila, 1006 Metro Manila, Philippines', 'Manila'),
(980, 'Oody\'s Bar and Restaurant', '', '14.57536', '120.984737', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=ElH15SIEMXVG6U2SQXTHyg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=25.532736&pitch=0&thumbfov=100', 0, 0, 'Restaurant', '$', 'Open until 9:00 PM', 'Robinsons Place Manila 1st Level, Pedro Gil, corner M. Adriatico St, Ermita, Manila City, 1000 Metro Manila, Philippines', 'Manila'),
(981, 'Sisig restaurant', '', '14.6028184', '120.9854452', 'https://lh5.googleusercontent.com/p/AF1QipOs3yF4S54AQranXeAO6R0mBDPXOAnJYATLbxX2=w122-h92-k-no', 0, 0, 'Restaurant', '$', 'Open until 8:00 PM', '1802, 1008 Recto Ave, Quiapo, Manila, Metro Manila, Philippines', 'Manila'),
(982, 'G-Point Smörgåsbord & Bar', '', '14.5774784', '120.9817085', 'https://lh5.googleusercontent.com/p/AF1QipMyc42ieHd190Y7IjizvATwsuG-vhuy3e72mCYq=w122-h92-k-no', 4, 353, 'Restaurant', '$$', 'Open until 4:00 AM', '510 Padre Faura St, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(983, 'Market Cafe - New Coast Hotel Manila', '', '14.5732996', '120.98254', 'https://lh5.googleusercontent.com/p/AF1QipPWZa2f5E2US5VUgxyp6Q2pi2K9pzJ7OhHOc2Bp=w122-h92-k-no', 4.3, 302, 'Restaurant', '$', 'Open until 10:00 PM', '3rd Floor New Coast Hotel Manila 1588 Pedro Gil, corner M. H. Del Pilar St, Malate, Manila, 1004 Metro Manila, Philippines', 'Manila'),
(984, 'Manila Baywalk', 'Waterfront walkway for sunset views. Bordered by open-air cafes, this long, bayside walkway is a popular place to watch the sunset.', '14.568052', '120.982999', 'https://lh5.googleusercontent.com/p/AF1QipMxmFUXNbKgWIBqXyMFwNYS7EYdVODtPrlbL90=w122-h92-k-no', 4.1, 2357, 'Tourist attraction', '$', 'Open until 12:00 am', 'Roxas Blvd, Malate, Manila, 1004 Metro Manila, Philippines', 'Manila'),
(985, 'Casa Manila', 'Museum depicting Spanish colonial life. This restored 1850s house is now a museum displaying Spanish colonial furniture, art & architecture.', '14.5894444', '120.9752778', 'https://lh5.googleusercontent.com/p/AF1QipPM7XdM1WFZjNPVB7jaFrP_lB0yvYsK0U-Ovrq4=w138-h92-k-no', 4.6, 287, 'Museum', '$', 'Closing soon: 5:00 pm', 'HXQG+V52, plaza sans luis complex, General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(986, 'Rizal Park', 'Large park for strolling & public events. Grand 140-acre park featuring lawns, gardens, outdoor events & a monument to hero José Rizal.', '14.5831177', '120.9794171', 'https://lh5.googleusercontent.com/p/AF1QipMVMi36DchOf8QEpfiz1-EY3PoJLOwGge1Kvge2=w122-h92-k-no', 4.5, 20424, 'Park', '$', 'Open until 9:00 pm', 'Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(987, 'Fort Santiago', 'Iconic citadel & with a hero\'s memorial. This landmark defensive fortress features a museum commemorating the national hero José Rizal.', '14.5942337', '120.970412', '//lh4.googleusercontent.com/proxy/WDJmT4O53bizFTZF8OgnAX-dMRT-YX0ShFPKbCx8DP4LFkZ6s6-WQ-n3h5Wbbw4JbaCdSZvW7Zoc-367CFa_1ZRoHWp9tCoG-9q_ZmTyiulk3qUqc5p__8v33i1pVY3NsAbrXpmYEfGjQY71P0l0Xl0Jj0Nnrw=w138-h92-k-no', 4.4, 6559, 'Historical landmark', '$', 'Open until 7:00 pm', 'HXVC+M5V, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(988, 'National Museum of the Philippines', 'National art, science & history exhibits. Massive museum with collections of Filipino fine art, archaeology, botany, natural history & more.', '14.5869356', '120.9812491', '//lh4.googleusercontent.com/proxy/toKt8Rc0VTA7vl9dNgHe-0-c5LizfCLq1vQ7YPWU9t0pFy31uPRl2wjJe2k9aLZDKJiDZ-k9GOd4tQ86LjBvkLmLl2ldWrUdP4R4Jjj67cpj-xtedM5ViPHuknSEYV5Cr4pb4hPO2TweqMwfUfwaNUgmSls0BA=w138-h92-k-no', 4.6, 4574, 'National museum', '$', 'Closed ⋅ Opens 9AM Tue', 'Padre Burgos Ave, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(989, 'Manila Ocean Park', 'Live shows & displays about marine life. Aquatic theme park & educational facility featuring hands-on activities, an oceanarium & live shows.', '14.5792001', '120.9725638', 'https://lh5.googleusercontent.com/p/AF1QipPuBMxm91Y1nm1Gza3CaE1RE8uAWRDEvZep_ZKn=w137-h92-k-no', 4.2, 10751, 'Water park', '$', 'Open until 6:00 pm', 'Quirino Grandstand, 666 Behind, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(990, 'Star City', 'Amusement park with diverse attractions. Popular amusement park offering rides, paint ball, laser tag, an indoor snow area & a haunted house.', '14.5568331', '120.9854453', 'https://lh5.googleusercontent.com/p/AF1QipMd7jCVuYkJmMUpq9fhLb0pNYqoD-vtcyLr2Fyf=w122-h92-k-no', 4.2, 5639, 'Amusement park', '$', 'Open until 10:30 pm', 'Sotto Corner Jalandoni Street CCP Complex, 1300 Roxas Blvd, Pasay, Philippines', 'Manila'),
(991, 'Baluarte de San Diego', '16th-century fortified bastion. Built in 1586 in the shape of an ace of spades, this stone fort now features a bonsai display.', '14.5853806', '120.9755667', 'https://lh5.googleusercontent.com/p/AF1QipOAEwyIWZ-mkqjF32QtcWGUdFN3l1keL2Urqd8f=w122-h92-k-no', 4.4, 376, 'Historical landmark', '$', 'Closing soon: 5:00 pm', 'Sta. Lucia St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(992, 'The Minor Basilica and Metropolitan Cathedral of the Immaculate Conception', 'Historic basilica known for papal visits. Built in 1571, this historic church is known for its ornate architecture & visits by several popes.', '14.5916543', '120.9734594', 'https://lh5.googleusercontent.com/p/AF1QipN-e2lF9K8QqFFZJ6BGLJsQfX4oURsJszhegOWN=w138-h92-k-no', 4.6, 4542, 'Catholic cathedral', '$', '', 'Beaterio St, Cabildo St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(993, 'Paco Park and Cemetery', 'Tranquil park on former burial grounds. Serene urban park built on a walled cemetery site with shaded paths & garden areas.', '14.5809649', '120.9884237', 'https://lh5.googleusercontent.com/p/AF1QipNSAkHjgJSsk2AAExpwBzPQgkO0XdMz3_HMiPDu=w122-h92-k-no', 4.4, 777, 'Park', '$', 'Open until 11:00 pm', 'Belen, Paco, Manila, Metro Manila, Philippines', 'Manila'),
(994, 'Manila Zoo', 'Small zoo with basic exhibit areas. 5.5-hectare zoo & garden featuring diverse animals in modest, old-fashioned enclosures.', '14.565137', '120.988525', 'https://lh5.googleusercontent.com/p/AF1QipMGSFF3a_UhDbjuN02S7zXpkhM9a5_BpUDAE0kx=w122-h92-k-no', 3.4, 2266, 'Zoo', '$', 'Open until 6:00 pm', 'M. Adriatico St, Malate, Manila, 1004 Metro Manila, Philippines', 'Manila'),
(995, 'Intramuros', '', '14.5916001', '120.9717729', 'https://lh5.googleusercontent.com/p/AF1QipOu47UJQEyvT0jwmPbP2R-urZO0E4x63FIvOZ7T=w80-h106-k-no', 4.7, 354, 'Tourist attraction', '$', '', '470, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(996, 'National Museum of Natural History', 'Gallery of animal & plant exhibits. Zoological, botanical & geological specimens displayed in an elegant venue with a soaring atrium.', '14.583505', '120.9820883', 'https://lh5.googleusercontent.com/p/AF1QipMtzsfqX-LGZUQvreXrn10-qOc7z9g-SG4eN1Q8=w122-h92-k-no', 4.7, 2169, 'Museum', '$', 'Closing soon: 5:00 pm', 'Teodoro F. Valencia Cir, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(997, 'Bahay Tsinoy, Museum of Chinese in Philippine Life', 'Museum of Chinese history in Philippines. Museum & heritage center exploring contributions & influences of the Chinese in Philippine culture.', '14.5909036', '120.9750258', 'https://lh5.googleusercontent.com/p/AF1QipMQdOhNGmhOBRrH8n1Pl29BsMnqjkoEq5E2YxRg=w145-h92-k-no', 4.4, 208, 'History museum', '$', 'Open until 6:00 pm', '32 Anda St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(998, 'Manila Sightseeing Tours', '', '14.580027', '120.9804297', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=YxDYLWFQt7HGG23lg2VZGA&cb_client=search.gws-prod.gps&w=80&h=92&yaw=122.626396&pitch=0&thumbfov=100', 0, 0, 'Travel agency', '$', '', '500 United Nations Ave, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(999, 'Arroceros Forest Park', 'Tree & plant-filled spot by the river. Small urban park with a vast array of trees & plants, plus a fishpond & riverside walkway.', '14.5942352', '120.9817192', 'https://lh5.googleusercontent.com/p/AF1QipNRzWYslmXmoBm0h0ve994SDjZXvxD8m45Tc6tM=w122-h92-k-no', 4.4, 386, 'City park', '$', 'Open 24 hours', '659 A Antonio Villegas St, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1000, 'Ayala Museum', 'Exhibits of Filipino history & artifacts. Modern museum for Filipino archeological artifacts, history & culture exhibits & a research library.', '14.5536226', '121.0232446', 'https://lh5.googleusercontent.com/p/AF1QipPT4aw8OnPTM8EF23R1EtL-nB8sHOm38hY2xN1h=w122-h92-k-no', 4.5, 668, 'Museum', '$', '', 'Greenbelt Park, Makati Avenue, corner Dela Rosa Street, Ayala Center, Makati, Metro Manila, Philippines', 'Manila'),
(1001, 'Cultural Center of the Philippines', 'Government-run performance venue. A wide range of cultural events are staged at this major government-run institution.', '14.558412', '120.985911', 'https://lh5.googleusercontent.com/p/AF1QipNU_8Cv2fUBA23noukdWGBPjkz_ratzcFYdxAs-=w80-h106-k-no', 4.5, 3267, 'Cultural center', '$', 'Open until 10:00 pm', 'CCP Complex, Roxas Blvd, Pasay, 1300 Metro Manila, Philippines', 'Manila'),
(1002, 'Bambike Ecotours Intramuros, Manila', '', '14.5896472', '120.975067', 'https://lh5.googleusercontent.com/p/AF1QipOt2mEJR3tsVMVdiH_EJOpYK5-jQSnbb33YnWo0=w163-h92-k-no', 4.7, 272, 'Sightseeing tour agency', '$', 'Open until 6:00 pm', 'Bambike HQ, Plaza San Luis Complex. Real St .cor, M General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1003, 'Memorare - Manila 1945 Monument and Memorare - Manila 1945 Historical Marker', '', '14.5904387', '120.9744057', 'https://lh5.googleusercontent.com/p/AF1QipOxCh_gNT7nh2Gv2PS__H5yAE-RAZdo-6B0wCvT=w122-h92-k-no', 4.2, 67, 'Historical landmark', '$', 'Open 24 hours', 'General Luna St, Intramuros, 658 Zone 70, Maynila, 1002 Kalakhang Maynila, Philippines', 'Manila'),
(1004, 'Victims of Martial Law Memorial Wall, Manila', '', '14.5912034', '120.9814083', 'https://lh5.googleusercontent.com/p/AF1QipNmKj7JuHVuKhMa3VJ7bulk7PD6mrImF_7jac9t=w80-h139-k-no', 0, 0, 'Historical landmark', '$', 'Open 24 hours', 'Heroes Park, 1000 Cecilia Muñoz St, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1005, 'Gusali ng Lungsod ng Maynila Historical Marker', '', '14.5897', '120.98162', 'https://lh5.googleusercontent.com/p/AF1QipMvOcEZmhEGSJppI-IsOjVKn0V4gMh6NvXQsaRh=w80-h137-k-no', 0, 0, 'Historical landmark', '$', '', '659, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1006, 'Jose P. Laurel Historical Marker - Intramuros', '', '14.5920001', '120.9780101', 'https://lh5.googleusercontent.com/p/AF1QipPuZ-iJn8887who7I2Zx6OgdHqxSVIQvxgG-dKm=w80-h137-k-no', 0, 0, 'Historical landmark', '$', '', '658, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1007, 'Manila High School Historical Marker', '', '14.5893734', '120.9786422', 'https://lh5.googleusercontent.com/p/AF1QipPH01OkCS3gCj2pauXojTNYard6X9elrbcp6qlo=w80-h140-k-no', 0, 0, 'Historical landmark', '$', '', '1002 Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1008, 'The Life and Heroism of Gat Andres Bonifacio Historical Marker', '', '14.5906426', '120.9810919', 'https://lh5.googleusercontent.com/p/AF1QipN2osE9oBygLWZVnbFDEcEjjIq-VnDD0Lhf_zJX=w80-h106-k-no', 0, 0, 'Historical landmark', '$', '', 'Unnamed Road, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1009, 'Kartilya ng Katipunan', '', '14.590932', '120.981097', 'https://lh5.googleusercontent.com/p/AF1QipNbfA1OF04UNz3XJ7Krbep2nhJJuyNQXEsZmFAt=w163-h92-k-no', 4.8, 58, 'Historical landmark', '$', '', 'HXRJ+9CH, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1010, 'Emilio Jacinto Monument - Manila', '', '14.5906782', '120.9816823', 'https://lh5.googleusercontent.com/p/AF1QipOyvoi4JZ2Qc3sktm2s4mpMOHptAbCM_VPDZOSn=w80-h137-k-no', 4.5, 6, 'Historical landmark', '$', 'Open 24 hours', 'Antonio Villegas St, 659 Ermita, Maynila, 1000 Kalakhang Maynila, Philippines', 'Manila'),
(1011, 'Sa Mga Bayani ng Lungsod ng Maynila Historical Marker', '', '14.5878018', '120.9819023', 'https://lh5.googleusercontent.com/p/AF1QipPyeOLWIw62wLriPkQpS9l5OZUqHpjIO_ciZlru=w151-h92-k-no', 0, 0, 'Historical landmark', '$', '', '659, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1012, 'Dr. José Rizal National Monument', 'Prominent statue of a historical figure. Bronze sculpture with an obelisk memorializing José Rizal, a Filipino nationalist who was executed.', '14.5817765', '120.9770485', '//lh4.googleusercontent.com/proxy/JXbbJe0u4KAVe3azj9bgZxXassUpt7pz86Vhvw2yiIDKiXeh52eeXp5NQzuKVVDuHWb3dj1wrqaSjhfjD2l5hvyyCjOfFpD-CILkOCZGeUMVn31_jC54NwQCNrplaUrudGiW6MIaaGV0fPP_ori1G06jX6q2JA=w138-h92-k-no', 4.5, 1375, 'Historical landmark', '$', 'Open 24 hours', '1225 Roxas Blvd, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1013, 'Philippine Normal College Historical Marker', '', '14.5867299', '120.9829101', 'https://lh5.googleusercontent.com/p/AF1QipOxzyp6k1BEdkNXFPyeUEgSR5neKlHkAAUQW0Iy=w80-h122-k-no', 0, 0, 'Historical landmark', '$', '', '1901 Ayala Blvd, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1014, 'Philippine Normal University (1901-2001) Historical Marker', '', '14.5868009', '120.9830717', 'https://lh5.googleusercontent.com/p/AF1QipM9o2QtsXfpIrsMf4Oe3yuxENDXN8QZudobaXYO=w80-h139-k-no', 0, 0, 'Historical landmark', '$', '', 'Philippine Normal University, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1015, 'Andres Bonifacio \" Ama Nang Himagsikang Filipino \" statue', '', '14.5927813', '120.9815629', 'https://lh5.googleusercontent.com/p/AF1QipMOf4K4fj1sbP3D5BClQyiYSo1dFf71wwYn6Cpg=w80-h141-k-no', 0, 0, 'Historical landmark', '$', '', 'LRT-1 Central Terminal Station, Manila, Ermita, Manila, 1000 Metro Manila, Philippines', 'Manila'),
(1016, 'Simbahan at Kumbento ng Recoletos Historical Marker', '', '14.5886101', '120.9787101', 'https://lh5.googleusercontent.com/p/AF1QipPv5X7PgrUikp0CwEVxfZaH_6EBpIFkkRg-WUcz=w80-h142-k-no', 0, 0, 'Historical landmark', '$', '', 'Recoletos St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1017, 'Fernanda Balboa Historical Marker', '', '14.5868201', '120.9780101', 'https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=PSfB9t0hjZqlcmJoPDi-Eg&cb_client=search.gws-prod.gps&w=80&h=92&yaw=340.64877&pitch=0&thumbfov=100', 0, 0, 'Historical landmark', '$', '', 'Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1018, 'Ang Pagpapalaya ng Maynila Historical Marker', '', '14.5910099', '120.97248', 'https://lh5.googleusercontent.com/p/AF1QipO8sQZ7H_JH39OGeps5Zq7vZXPRKjBfRLTZWtDP=w135-h92-k-no', 0, 0, 'Historical landmark', '$', '', 'Sta. Lucia St, Intramuros, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1019, 'GOMBURZA Monument - Intramuros', '', '14.5871981', '120.9803335', 'https://lh5.googleusercontent.com/p/AF1QipML8oORZHStkwJa9yQ_fPCHdEfieAVYIJ_KrvoC=w138-h92-k-no', 5, 4, 'Historical landmark', '$', '', 'Padre Burgos Ave, Ermita, Manila, 1002 Metro Manila, Philippines', 'Manila'),
(1020, 'Diamond Hotel Philippines', 'Posh lodging with elegant dining. Refined rooms & suites in a polished tower-style hotel with 6 restaurant/bars, plus a spa.', '14.572442', '120.982176', 'https://lh5.googleusercontent.com/p/AF1QipPGOMK4qF7c27wFz2OtIIUeQ5v64AsXQHPfl68N=w114-h120-k-no-pi0-ya160-ro0-fo100', 4.5, 3526, 'Hotel', '$95', '', 'Roxas Boulevard, Corner Dr. J. Quintos Street, Manila, 1000 Metro Manila, Philippines', 'Manila');

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
(9, 'Sanu Eatery', 'test', 2, 61, 'deocer123');

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
(61, 'deocer123', '$2y$10$S2UapU3N.t5xXP3mXA/0HO8u1g8IRKAIFyz35dyFnoSBKNEhwGi3y', '14.650991', '121.048616', 'Quezon_City', '$$'),
(62, 'admin123', '$2y$10$JsW4zURwGg6PlYZr3KJ7men/YGpULfOBpEdQF4IR6Zj9TV7eCE7C2', '14.633108', '121.099354', '', ''),
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
(90, 'ewqewqewqe', '$2y$10$gkno7c2jighWk5AQZyqn8.NOF1dMxBYGCsMVmoQUWElXZKTqgdFFK', '14.590607', '120.979901', 'Manila', '$');

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
  MODIFY `PlcID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `panes`
--
ALTER TABLE `panes`
  MODIFY `PaneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `PlaceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wuser`
--
ALTER TABLE `wuser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

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
