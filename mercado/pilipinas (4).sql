-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 06:50 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `visitors` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`visitors`) VALUES
(61);

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
  `thumbs` varchar(255) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL,
  `map` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `name`, `description`, `category`, `locality`, `province`, `region`, `rating`, `rating_total`, `vote`, `image`, `thumbs`, `image2`, `image3`, `map`) VALUES
(1, 'Baluarte Zoo', 'The Baluarte Zoo was established by local politician and businessman, Chavit Singson. Singson, who cites his hunting hobby as his motive in setting up Baluarte only considered opening a zoo when his hunting trophy collection grew too big. He thought that a zoo would serve to edify it patrons aside from promoting conservation and protection of endangered species.[1] Described as a interactive wildlife sanctuary, the facility was designed and developed by Singson himself', 1, 'Vigan', 'Ilocos Sur', '1', 3.5, 21, 6, 'R1_1_1.jpg', 'img/1place/300x200/R1_1_1_1.jpg', 'R1_1_1.jpg', 'R1_1_1.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.075691801058!2d120.37486861441324!3d17.551582602669512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338e6f8f37f94ac1%3A0x797c037847ff2f31!2sBaluarte+Zoo!5e0!3m2!1sen!2sph!4v1507988583267"style = "border-radius: 5px; "width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(2, 'Bangui Wind Farm ', 'Bangui Wind Farm is a wind farm in Bangui, Ilocos Norte, Philippines. The wind farm uses 20 units of 70-metre (230 ft) high Vestas V82 1.65 MW wind turbines, arranged on a single row stretching along a nine-kilometer shoreline off Bangui Bay, facing the West Philippine Sea.Phase I of the NorthWind power project in Bangui Bay consists of 15 wind turbines, each capable of producing electricity up to a maximum capacity of 1.65 MW, for a total of 24.75 MW. The 15 on-shore turbines are spaced 326 metres (1,070 ft) apart, each 70 metres (230 ft) high, with 41 metres (135 ft) long blades, with a rotor diameter of 82 metres (269 ft) and a wind swept area of 5,281 square metres (56,840 sq ft).Phase II, was completed on August 2008, and added 5 more wind turbines with the same capacity, and brought the total capacity to 33 MW. All 20 turbines describes a graceful arc reflecting the shoreline of Bangui Bay, facing the West Philippine Sea.', 4, 'Bangui City', 'Ilocos Norte', '1', 3.53333, 53, 15, 'r1_1_233.jpg', 'r1_1_233.jpg', 'r1_1_23.jpg', 'R1_1_2.jpg', ''),
(3, 'Lungsod ng Vigan', ' Officially the City of Vigan, is a 4th class component city and capital of the province of Ilocos Sur, Philippines.\r\nLocated on the western coast of the large island of Luzon, facing the South China Sea, is a UNESCO World Heritage Site in that it is one of the few towns left in the Philippines whose old structures have mostly remained intact, and it is well known for its cobblestone streets and a unique architecture of the Philippine colonial era which fuses Native Philippine and Oriental building designs and construction, with colonial Spanish architectur\r\n', 4, 'Vigan', 'Ilocos Sur', '1', 4.35, 87, 20, 'R1_1_3.jpg', 'img/1place/300x200/R1_1_1_3.jpg', 'r1_1_3_b.jpg', 'R1_1_3.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d897.1145870318933!2d120.3862143838855!3d17.5751883838082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDM0JzMwLjciTiAxMjDCsDIzJzEyLjUiRQ!5e1!3m2!1sen!2sph!4v1507989245438" style = "border-radius: 5px; "width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>\r\n'),
(4, 'Cape Bojeador Lighthouse', 'also known as Burgos Lighthouse, is a cultural heritage structure in Burgos, Ilocos Norte, that was established during the Spanish Colonial period in the Philippines. The lighthouse was first lit on March 30, 1892, and is set high on Vigia de Nagpartian Hill overlooking the scenic Cape Bojeador where early galleons used to sail by. After over 100 years, it still functions and serves ships that enter the Philippine Archipelago from the north and guide them safely away from the rocky coast of the town.[3]\r\nThe light marks the northwestern-most point in Luzon. The northeastern-most being Cape Engaño Lighthouse on Palaui Island, Santa Ana, Cagayan.\r\n', 4, 'Palaui Island, Santa Ana,', 'Cagayan', '1', 3.22222, 29, 9, 'R1_1_4.jpg', 'R1_1_1_4.jpg', 'R1_1_4.jpg', 'R1_1_4.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52721.82844669936!2d122.10119925519471!3d18.54100025109117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338644fc1a52e5db%3A0xb5a14db84cd6f55f!2sPalaui+Island!5e1!3m2!1sen!2sph!4v1508047568628" style = "border-radius: 5px; "width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>\r\n'),
(5, 'Pagudpod Beaches', 'Pagudpud, officially the Municipality of Pagudpud, is a 4th class municipality in the province of Ilocos Norte, Philippines.\r\nIt is the northernmost settlement on Luzon Island and a popular tourist destination because of its resorts and beaches.\r\nPagudpud was made a municipality on July 5, 1954. Unlike Laoag City, the province\'s only autonomous city, Pagudpud derives its authority from the provincial government. It had previously been a part of the neighboring town of Bangui.\r\n', 2, 'Pagudpod', 'Ilocos Norte', '1', 2.21429, 31, 14, 'R1_1_5.jpg', 'img/1place/300x200/R1_1_1_5.jpg', 'R1_1_5.jpg', 'R1_1_5.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3294.136504801701!2d120.78533091442716!3d18.59162547185066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33892439420201f3%3A0x267bdfecf4e08ea2!2sPalm+Grove+Saud+Holiday+Complex!5e1!3m2!1sen!2sph!4v1507989551574" style = "border-radius: 5px; "width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(6, 'Anguib beach ', 'Santa Ana is also known as one of the sites for Kiteboarding and Windsurfing. In 2015, the Philippine Windsurfing Association and the Philippine Kiteboarding Association organized a Kiteboarding and Windsurfing competition in Anguib Beach, known as the paradise for kiteboarders and windsurfers.', 2, 'Santa Ana', 'Santa Ana', '2', 4.85714, 34, 7, 'R2_1_6.jpg', 'img/1place/300x200/R2_1_1_6.jpg', 'R2_1_6.jpg', 'R2_1_6.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87984.6802339523!2d122.1598512801455!3d18.523657313032277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33865b0cb853c3ed%3A0x89425b136c014e47!2sAnguib+Beach!5e0!3m2!1sen!2sph!4v1508047736598" style = "border-radius: 5px; "width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(7, 'Basco Light house', 'Basco Lighthouse is a lighthouse in the town of Basco in Batanes, the northernmost province in the Philippines. Located in Naidi Hills in Barangay San Antonio, the lush green hills and the open sea provide a beautiful backdrop for the lighthouse. The place can easily be reached by a 1.2-km (3/4 mile) hike from the Port of Basco.', 4, 'Basco', 'Batanes', '2', 4, 4, 1, 'R2_1_7.jpg', 'img/1place/300x200/R2_1_1_7.jpg\r\n', 'R2_1_7.jpg', 'R2_1_7.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24688.933785556663!2d121.95687585686905!3d20.44957982525877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3479c044a0abe137%3A0x432bca0d0e779658!2sBasco+Lighthouse%2C+Basco%2C+Batanes!5e0!3m2!1sen!2sph!4v1508047899246"style = "border-radius: 5px; "width="100%" height="400"frameborder="0" style="border:0" allowfullscreen></iframe>'),
(8, 'Callao Cave', 'Callao Cave is one of the limestone caves located in the municipality of Peñablanca, Cagayan province, in the Philippines. The seven-chamber show cave is one of 300 caves that dot the area and the best known natural tourist attractions of the province. The town is named as Peñablanca (Spanish for white rocks) for the presence of white limestone rocks in the area.[2] Callao Cave is located in the Barangays of Magdalo and Quibal in Peñablanca about 24 km (15 mi) northeast of Tuguegarao City, the capital of the Province of Cagayan.', 3, 'Peñablanca,', 'Cagayan', '2', 3.5, 28, 8, 'R2_1_8.jpg', 'img/1place/300x200/R2_1_1_8.jpg\r\n', 'R2_1_8.jpg', 'R2_1_8.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6481.523927805601!2d121.8160456559328!3d17.707682466952576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338591e77f137b6d%3A0xf7f98065a6b1f6f5!2sCallao+Cave!5e0!3m2!1sen!2sph!4v1508048010164" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(9, 'Racuh-A-Payaman', 'Racuh-A-Payaman is a protected location in the island of Batan in Batanes. The breath-taking view from the hills makes it a photographer’s dream location: even the most inexperienced photographer can probably come up with awesome photos just because the place is incredibly beautiful already by itself. Dubbed as the “Marlboro Country” of Batanes, Racuh-A-Payaman makes you wonder that such a place still exists in the Philippines.', 3, 'Uyugan', 'Batanes', '2', 3.5, 42, 12, 'R2_1_9.jpg', 'img/1place/300x200/R2_1_1_9.jpg', 'R2_1_9.jpg', 'R2_1_9.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75756.69926002224!2d121.9482049680822!3d20.415617307497275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3479c74a41a8678d%3A0x9b008fe9fc251d32!2sRacuh+a+Payaman!5e0!3m2!1sen!2sph!4v1508048163367" style = "border-radius: 5px; "width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(10, 'Palaui Island  ', 'Palaui Island is one of the islands in the Philippines, located off the northeastern extremity of Luzon Island, the largest island in the country. Palaui Island lies off the northwestern part of a large promontory in San Vicente, in the municipality of Santa Ana, Cagayan province.', 2, 'Santa Ana', 'Cagayan', '2', 3, 12, 4, 'R2_1_10.jpg', 'img/1place/300x200/R2_1_1_10.jpg\r\n', 'R2_1_10.jpg', 'R2_1_10.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52721.82844669936!2d122.10119925519471!3d18.54100025109117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338644fc1a52e5db%3A0xb5a14db84cd6f55f!2sPalaui+Island!5e1!3m2!1sen!2sph!4v1508047568628" style = "border-radius: 5px; "width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(11, 'Rizal Park', 'Rizal Park (Filipino: Liwasang Rizal), also known as Luneta Park or simply Luneta, is a historical urban park in the Philippines. Located along Roxas Boulevard, Manila, adjacent to the old walled city of Intramuros, it is one of the largest urban parks in Asia. It has been a favorite leisure spot, and is frequented on Sundays and national holidays. Rizal Park is one of the major tourist attractions of Manila. Situated by the Manila Bay, it is an important site in Philippine history. The execution of national hero José Rizal on December 30, 1896 fanned the flames of the 1896 Philippine Revolution against the Kingdom of Spain. The area was officially renamed Rizal Park in his honor, and the monument enshrining his remains serves as the park\'s symbolic focal point. The Declaration of Philippine Independence from the United States was held here on July 4, 1946 as were later political rallies including those of Ferdinand Marcos and Corazon Aquino in 1986 that culminated in the EDSA Revolution.', 4, 'Ermita', 'Manila', 'NCR', 3, 3, 1, 'ncr-1-19.jpg', 'ncr-1-19.jpg', 'rizal2.jpg', 'rizal.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.28203774498!2d120.97732497390311!3d14.582998283109779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca255e7e133f%3A0xb72a3487b6759a32!2sRizal+Park!5e0!3m2!1sen!2sph!4v1508151988430"style = "border-radius: 5px; "width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>');

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

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rating` int(10) NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `place_id` int(50) NOT NULL,
  `review_id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rating`, `reviewer`, `review`, `place_id`, `review_id`) VALUES
(2, 'Jm', 'Ayoko Dyan', 5, 1),
(5, 'markkkk', 'an ganda ganda', 5, 2),
(2, 'cel', 'eew', 5, 3),
(3, 'Josh', 'ok lang di gaan kaganda dito', 4, 5),
(5, 'Secret', 'I LOVE YOU TUNGAKS XD', 4, 4),
(3, 'Josh', 'ok lang di gaan kaganda dito', 4, 6),
(3, 'Mark', 'Oemgee its amazing here', 10, 7),
(5, '', '', 3, 8),
(3, 'Mark', 'It\'s nice here. Peaceful and relaxing! I recommend visiting this park!', 11, 9),
(5, 'Oli', 'It\'s nice to be here', 6, 10),
(5, 'kekay', 'Ganda dito! parang ibang bansa', 6, 11),
(5, 'japan', 'Sugoi ne!', 6, 12),
(5, 'japan', 'Sugoi ne!', 6, 13),
(5, 'japan', 'Sugoi ne!', 6, 14),
(5, 'japan', 'Sugoi ne!', 6, 15),
(4, 'Doofy', 'This is insanely good!', 6, 16),
(3, 'Sese', 'It\'s ok', 3, 17),
(5, 'ola', 'It\'s really eco friendly', 2, 18),
(5, 'laf', 'This is amazing', 9, 19),
(3, 'Joana', 'I can\'t believe my eyes!', 9, 20),
(3, 'Joana', 'I can\'t believe my eyes!', 9, 21),
(3, 'Joana', 'I can\'t believe my eyes!', 9, 22),
(3, 'Joana', 'I can\'t believe my eyes!', 9, 23),
(3, 'Joana', 'I can\'t believe my eyes!', 9, 24),
(2, 'jm', 'Ayoko na beh', 9, 25),
(4, 'mark', 'hays sayang sa oras', 9, 26),
(4, 'mark', 'hays sayang sa oras', 9, 27),
(4, 'mark', 'hays sayang sa oras', 9, 28),
(4, 'mark', 'hays sayang sa oras', 9, 29),
(5, 'jm', 'Sugoi!', 4, 30),
(2, 'sya', 'hays galing ', 4, 31),
(4, '', '', 2, 32),
(4, 'Joana', ' Saya dito yay jejejje kya kya', 3, 33);

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

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
