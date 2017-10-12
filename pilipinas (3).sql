-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 04:29 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pilipinas`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertiser`
--

CREATE TABLE `advertiser` (
  `advertiser_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `regions` varchar(10) NOT NULL,
  `number` varchar(11) NOT NULL,
  `tel` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertiser`
--

INSERT INTO `advertiser` (`advertiser_id`, `name`, `locality`, `province`, `regions`, `number`, `tel`, `email`, `username`, `password`) VALUES
(1, 'Mark Mercado', 'Kawit', 'Manila', '4a', '09178075904', 1, '05markmercado@gmail.com', '', ''),
(2, 'Katrina Curbi', 'Mactan', 'Cebu', '7', '09232323343', 454353, 'kat@gmail.com', 'kat', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `festival`
--

CREATE TABLE `festival` (
  `festival_id` int(20) NOT NULL,
  `name` text NOT NULL,
  `place_id` int(50) NOT NULL,
  `month` int(2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `festival`
--

INSERT INTO `festival` (`festival_id`, `name`, `place_id`, `month`, `image`) VALUES
(1, 'Pagoda Festival', 1, 10, 'img/places/region_3/festival/3_2_1.jpg'),
(2, 'Masskara Festival', 2, 10, 'img/places/region_6/festival/6_2_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` int(1) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `region` varchar(10) NOT NULL,
  `rating` float NOT NULL,
  `rating_total` int(11) NOT NULL,
  `vote` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumbs` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `name`, `description`, `category`, `locality`, `province`, `region`, `rating`, `rating_total`, `vote`, `image`, `thumbs`) VALUES
(1, 'Baluarte Zoo', 'The Baluarte Zoo was established by local politician and businessman, Chavit Singson. Singson, who cites his hunting hobby as his motive in setting up Baluarte only considered opening a zoo when his hunting trophy collection grew too big. He thought that a zoo would serve to edify it patrons aside from promoting conservation and protection of endangered species.[1] Described as a interactive wildlife sanctuary, the facility was designed and developed by Singson himself', 1, 'Vigan', 'Ilocos Sur', '1', 3.5, 21, 6, 'img/1place/1200x800/R1_1_1.jpg', 'img/1place/300x200/R1_1_1_1.jpg'),
(2, 'Bangui Wind Farm ', 'Bangui Wind Farm is a wind farm in Bangui, Ilocos Norte, Philippines. The wind farm uses 20 units of 70-metre (230 ft) high Vestas V82 1.65 MW wind turbines, arranged on a single row stretching along a nine-kilometer shoreline off Bangui Bay, facing the West Philippine Sea.\r\nPhase I of the NorthWind power project in Bangui Bay consists of 15 wind turbines, each capable of producing electricity up to a maximum capacity of 1.65 MW, for a total of 24.75 MW. The 15 on-shore turbines are spaced 326 metres (1,070 ft) apart, each 70 metres (230 ft) high, with 41 metres (135 ft) long blades, with a rotor diameter of 82 metres (269 ft) and a wind swept area of 5,281 square metres (56,840 sq ft).\r\nPhase II, was completed on August 2008, and added 5 more wind turbines with the same capacity, and brought the total capacity to 33 MW. All 20 turbines describes a graceful arc reflecting the shoreline of Bangui Bay, facing the West Philippine Sea.', 2, 'Bangui', 'Ilocos Norte', '1', 3.54545, 39, 11, 'img/1place/1200x800/R1_1_2.jpg', 'img/1place/300x200/R1_1_1_2.jpg'),
(3, 'Lungsod ng Vigan', ' Officially the City of Vigan, is a 4th class component city and capital of the province of Ilocos Sur, Philippines.\r\nLocated on the western coast of the large island of Luzon, facing the South China Sea, is a UNESCO World Heritage Site in that it is one of the few towns left in the Philippines whose old structures have mostly remained intact, and it is well known for its cobblestone streets and a unique architecture of the Philippine colonial era which fuses Native Philippine and Oriental building designs and construction, with colonial Spanish architectur\r\n', 3, 'Vigan', 'Ilocos Sur', '1', 4, 4, 1, 'img/1place/1200x800/R1_1_3.jpg', 'img/1place/300x200/R1_1_1_3.jpg'),
(4, 'Cape Bojeador Lighthouse', 'also known as Burgos Lighthouse, is a cultural heritage structure in Burgos, Ilocos Norte, that was established during the Spanish Colonial period in the Philippines. The lighthouse was first lit on March 30, 1892, and is set high on Vigia de Nagpartian Hill overlooking the scenic Cape Bojeador where early galleons used to sail by. After over 100 years, it still functions and serves ships that enter the Philippine Archipelago from the north and guide them safely away from the rocky coast of the town.[3]\r\nThe light marks the northwestern-most point in Luzon. The northeastern-most being Cape Engaño Lighthouse on Palaui Island, Santa Ana, Cagayan.\r\n', 3, 'Palaui Island, Santa Ana,', 'Cagayan', '1', 3, 3, 1, 'img/1place/1200x800/R1_1_4.jpg', 'img/1place/300x200/R1_1_1_4.jpg'),
(5, 'Pagudpod Beaches', 'Pagudpud, officially the Municipality of Pagudpud, is a 4th class municipality in the province of Ilocos Norte, Philippines.\r\nIt is the northernmost settlement on Luzon Island and a popular tourist destination because of its resorts and beaches.\r\nPagudpud was made a municipality on July 5, 1954. Unlike Laoag City, the province\'s only autonomous city, Pagudpud derives its authority from the provincial government. It had previously been a part of the neighboring town of Bangui.\r\n', 1, 'Pagudpod', 'Ilocos Norte', '1', 5, 5, 1, 'img/1place/1200x800/R1_1_5.jpg', 'img/1place/300x200/R1_1_1_5.jpg'),
(6, 'Anguib beach ', 'Santa Ana is also known as one of the sites for Kiteboarding and Windsurfing. In 2015, the Philippine Windsurfing Association and the Philippine Kiteboarding Association organized a Kiteboarding and Windsurfing competition in Anguib Beach, known as the paradise for kiteboarders and windsurfers.', 1, 'Santa Ana', 'Santa Ana', '2', 3, 3, 1, 'img/1place/1200x800/R2_1_6.jpg', 'img/1place/300x200/R2_1_1_6.jpg'),
(7, 'Basco Light house', 'Basco Lighthouse is a lighthouse in the town of Basco in Batanes, the northernmost province in the Philippines. Located in Naidi Hills in Barangay San Antonio, the lush green hills and the open sea provide a beautiful backdrop for the lighthouse. The place can easily be reached by a 1.2-km (3/4 mile) hike from the Port of Basco.', 3, 'Basco', 'Batanes', '2', 4, 4, 1, 'img/1place/1200x800/R2_1_7.jpg', 'img/1place/300x200/R2_1_1_7.jpg\r\n'),
(8, 'Callao Cave', 'Callao Cave is one of the limestone caves located in the municipality of Peñablanca, Cagayan province, in the Philippines. The seven-chamber show cave is one of 300 caves that dot the area and the best known natural tourist attractions of the province. The town is named as Peñablanca (Spanish for white rocks) for the presence of white limestone rocks in the area.[2] Callao Cave is located in the Barangays of Magdalo and Quibal in Peñablanca about 24 km (15 mi) northeast of Tuguegarao City, the capital of the Province of Cagayan.', 1, 'Peñablanca,', 'Cagayan', '2', 5, 5, 1, 'img/1place/1200x800/R2_1_8.jpg', 'img/1place/300x200/R2_1_1_8.jpg\r\n'),
(9, 'Marlboro Country', ' A mysterious island', 1, 'Uyugan', 'Batanes', '2', 4, 4, 1, 'img/1place/1200x800/R2_1_9.jpg', 'img/1place/300x200/R2_1_1_9.jpg'),
(10, 'Palaui Island  ', 'Palaui Island is one of the islands in the Philippines, located off the northeastern extremity of Luzon Island, the largest island in the country. Palaui Island lies off the northwestern part of a large promontory in San Vicente, in the municipality of Santa Ana, Cagayan province.', 1, 'Santa Ana', 'Cagayan', '2', 4, 4, 1, 'img/1place/1200x800/R2_1_10.jpg', 'img/1place/300x200/R2_1_1_10.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `region` varchar(255) NOT NULL,
  `business_license_no` varchar(20) NOT NULL,
  `advertiser_id` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumbs` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `region`, `business_license_no`, `advertiser_id`, `image`, `thumbs`) VALUES
(1, 'Coconut ni Nat', 'Fresh Coconut', '1', '1332342', 1, 'img/3product/1200x800/R1_3_1.jpg', 'img/3product/300x200/R1_3_3_1.jpg'),
(2, 'Mais ng Ilocos', 'Fresh sweet corn', '1', '33453453', 2, 'img/3product/1200x800/R1_3_2.jpg', 'img/3product/300x200/R1_3_3_2.jpg'),
(3, 'Patatas ni Maria', 'Fresh Patatas', '1', '223332424', 1, 'img/3product/1200x800/R1_3_3.jpg', 'img/3product/300x200/R1_3_3_3.jpg'),
(4, 'Rice thrice a day', 'Local healthy rice', '1', '232423432', 1, 'img/3product/1200x800/R1_3_4.jpg', 'img/3product/300x200/R1_3_3_4.jpg'),
(5, 'Tomato ni Yamato', 'The most tomato-est ever', '1', '43534353', 2, 'img/3product/1200x800/R1_3_5.jpg', 'img/3product/300x200/R1_3_3_5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_request`
--

CREATE TABLE `product_request` (
  `request_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `business_license_no` varchar(20) NOT NULL,
  `advertiser_id` int(20) NOT NULL,
  `region` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumbs` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertiser`
--
ALTER TABLE `advertiser`
  ADD PRIMARY KEY (`advertiser_id`);

--
-- Indexes for table `festival`
--
ALTER TABLE `festival`
  ADD PRIMARY KEY (`festival_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
