-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 06:14 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phoenixcinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `password`, `email`, `phone`) VALUES
(1, 'rumu', '123', 'rumu.biswas10@yahoo.com', '0167'),
(2, 'rumu', '123', 'rumu.biswas10@yahoo.com', '0167'),
(3, 'richie', '123', 'risi', '01673'),
(4, 'anni', '456', 'anni', '0152'),
(5, 'sanju', '456', 'sanju', '01526'),
(20, 'sbr', '123', 'sbr', '01673356546'),
(19, 'cc', '123', 'cc', '0125'),
(18, 'bb', '123', 'bb', '078'),
(17, 'aa', '123', 'aaa', '0147'),
(16, 'labiba', '123', 'labi', '01526'),
(21, 'aa', '123', 'aa', '254555');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `genre` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `director` varchar(50) NOT NULL,
  `cast` varchar(60) NOT NULL,
  `release_date` varchar(50) NOT NULL,
  `runtime` varchar(50) NOT NULL,
  `imdb` varchar(50) NOT NULL,
  `ShowTime` varchar(20) NOT NULL,
  `Theatre` varchar(20) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `status`, `genre`, `image`, `director`, `cast`, `release_date`, `runtime`, `imdb`, `ShowTime`, `Theatre`, `video`) VALUES
(1, 'Boss 2', 'Now Showing', 'Genre:Action', 'images/boss2.jpg', 'Director: Rajiv Datta', 'Cast: Jeet,Koel', 'Release Date:2 June 2017 (Bangladesh) ', 'Runtime: 140min', 'IMDB Rating: 9', '2:30', 'Apollo Theatre', 'https://www.youtube.com/embed/1Q8fG0TtVAY'),
(2, 'Spider Man', 'Now Showing', 'Genre:Action', 'images/spidermansmall.jpg', 'Director: Patty Jenkins', 'Cast: Gal Gadot, Chris Pine', 'Release Date:4 June 2017 (Bangladesh) ', 'Runtime: 140min', 'IMDB Rating: 9', '', '', ''),
(3, 'Baywatch', 'Archive', 'Genre:Action', 'images/baywatch_small.png', 'Director:Nikolas Sparkel', 'Cast: Jenifer Lopez, Chris Pine', 'Release Date:2 June 2018 (Bangladesh) ', 'Runtime: 120min', 'IMDB Rating: 8', '', '', 'https://www.youtube.com/embed/1Q8fG0TtVAY'),
(4, 'Baywatch2', 'Now Showing', 'Genre:Action', 'images/baywatch_small.png', 'Director: Patty Jenkins', 'Cast: Gal Gadot, Chris Pine', 'Release Date:2 June 2017 (Bangladesh) ', 'Runtime: 140min', 'IMDB Rating: 9', '', '', ''),
(5, 'Wonder Woman', 'Next Arrival', 'Genre:Action', 'images/wonderwomansmall.png', 'Director: Jon Kim', 'Cast: Nicol kidman,Bad Prit', 'Release Date:4 June 2017 (Bangladesh) ', 'Runtime: 110min', 'IMDB Rating: 10*', '', '', 'https://www.youtube.com/embed/1Q8fG0TtVAY'),
(6, 'Ascendant', 'Now Showing', 'Genre:Action', 'images/ascendant_small.png', 'Director: Patty Jenkins', 'Cast: Gal Gadot, Chris Pine', 'Release Date:2 June 2017 (Bangladesh) ', 'Runtime: 140min', 'IMDB Rating: 9', '', '', ''),
(11, 'Logan', 'Archive', 'Genre:Action', 'images/logan.jpg', 'Director: Patty Jenkins', 'Cast: Gal Gadot, Chris Pine', 'Release Date:2 June 2017 (Bangladesh) ', 'Runtime: 140min', 'IMDB Rating: 9', '', '', ''),
(12, 'Avater', 'Archive', 'Genre:Action', 'images/avater.jpg', 'Director: Patty Jenkins', 'Cast: Gal Gadot, Chris Pine', 'Release Date:2 June 2017 (Bangladesh) ', 'Runtime: 140min', 'IMDB Rating: 9', '', '', ''),
(13, 'Super Bean', 'Archive', 'Genre:Action', 'images/superbean.jpg', 'Director: Patty Jenkins', 'Cast: Gal Gadot, Chris Pine', 'Release Date:2 June 2017 (Bangladesh) ', 'Runtime: 140min', 'IMDB Rating: 9', '', '', ''),
(14, 'War of Planet', 'Next Arrival', 'Genre:Action', 'images/War_for_the_Planet_of_the_Apes_poster.jpg', 'Director: Patty Jenkins', 'Cast: Gal Gadot, Chris Pine', 'Release Date:2 June 2017 (Bangladesh) ', 'Runtime: 140min', 'IMDB Rating: 9', '', '', ''),
(15, 'Justice Legue', 'Next Arrival', 'Genre:Action', 'images/Justice_League_film_poster.jpg', 'Director: Patty Jenkins', 'Cast: Gal Gadot, Chris Pine', 'Release Date:2 June 2017 (Bangladesh) ', 'Runtime: 140min', 'IMDB Rating: 9', '', '', ''),
(16, 'Car 3', 'Next Arrival', 'Genre:Action', 'images/Cars_3_poster.jpg', 'Director: Patty Jenkins', 'Cast: Gal Gadot, Chris Pine', 'Release Date:2 June 2017 (Bangladesh) ', 'Runtime: 140min', 'IMDB Rating: 9', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `ShowTime` varchar(50) NOT NULL,
  `Theatre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`movie_id`, `movie_name`, `ShowTime`, `Theatre`) VALUES
(1, 'Wonder Woman', '2:30', 'Apollo Thatre'),
(2, 'Wonder Woman', '5:30', 'apollo Thatre'),
(3, 'Wonder Woman', '5:30', 'Apollo Thatre'),
(4, 'Baywatch', '2:30', 'Apollo Thatre'),
(5, 'Baywatch', '5:30', 'Royal Thatre'),
(6, 'Baywatch', '7:30', 'Apollo Thatre');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Now Showing'),
(2, 'Next Arrival'),
(6, 'Archive');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `3D` varchar(40) NOT NULL,
  `2D` varchar(30) NOT NULL,
  `exclusive` varchar(30) NOT NULL,
  `business` varchar(30) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `3D`, `2D`, `exclusive`, `business`, `class`) VALUES
(1, 'E-FRONT : BDT 300', 'E-FRONT : BDT 250', 'E-FRONT : BDT 400', 'E-FRONT : BDT 500', 'general'),
(2, 'E-REAR : BDT 200', 'E-REAR : BDT 300', 'E-REAR : BDT 600', 'E-REAR : BDT 700', 'general'),
(3, 'E-REAR : BDT 200', 'E-REAR : BDT 300', 'E-REAR : BDT 600', 'E-REAR : BDT 700', 'executive'),
(4, 'E-REAR : BDT 200', 'E-REAR : BDT 300', 'E-REAR : BDT 600', 'E-REAR : BDT 700', 'business'),
(6, 'E-FRONT : BDT 300', 'E-FRONT : BDT 250', 'E-FRONT : BDT 400', 'E-FRONT : BDT 500', 'executive'),
(7, 'E-FRONT : BDT 300', 'E-FRONT : BDT 250', 'E-FRONT : BDT 400', 'E-FRONT : BDT 500', 'business');

-- --------------------------------------------------------

--
-- Table structure for table `ticketbuy`
--

CREATE TABLE `ticketbuy` (
  `c_id` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `showtime` time NOT NULL,
  `category` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketbuy`
--

INSERT INTO `ticketbuy` (`c_id`, `m_name`, `showtime`, `category`, `quantity`) VALUES
(20, 'Boss 2', '01:30:00', 'E-REAR', 2),
(16, 'Logan', '05:30:00', 'E-FRONT', 2),
(20, 'Spider Man', '03:30:00', 'E-FRONT', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ticketcategory`
--

CREATE TABLE `ticketcategory` (
  `tc_id` int(11) NOT NULL,
  `tc_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketcategory`
--

INSERT INTO `ticketcategory` (`tc_id`, `tc_name`) VALUES
(1, 'E-REAR'),
(2, 'E-FRONT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `ticketbuy`
--
ALTER TABLE `ticketbuy`
  ADD PRIMARY KEY (`m_name`);

--
-- Indexes for table `ticketcategory`
--
ALTER TABLE `ticketcategory`
  ADD PRIMARY KEY (`tc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `showtime`
--
ALTER TABLE `showtime`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
