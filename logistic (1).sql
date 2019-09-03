-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2019 at 08:43 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistic`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

CREATE TABLE `beneficiary` (
  `beneficiary_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `imageurl` text NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `woreda` varchar(20) NOT NULL,
  `kebele` varchar(30) NOT NULL,
  `village` varchar(40) NOT NULL,
  `contact` mediumint(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nos_of_fam` int(11) NOT NULL,
  `nos_of_m` int(11) NOT NULL,
  `nos_of_f` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `date_registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`beneficiary_id`, `user_id`, `first_name`, `last_name`, `imageurl`, `birth_date`, `gender`, `category`, `woreda`, `kebele`, `village`, `contact`, `email`, `nos_of_fam`, `nos_of_m`, `nos_of_f`, `username`, `password`, `status`, `date_registered`) VALUES
(1, 0, 'gdf', 'df', 'BeautyPlus_20190323132919339_save.jpg', '0000-00-00', 'male', 'new', 'Jimma', 'Agaro', 'newv', 8388607, 'asda@d.dd', 3, 2, 3, 'sdsd', 'sd', 0, '0000-00-00 00:00:00'),
(2, 0, 'fgdf', 'fhfg', 'IMG_20160605_121710.jpg', '0000-00-00', 'male', 'goods', 'Jimma', 'Agaro', 'were', 8388607, 'asdf@gm.as', 4, 2, 2, 'mikebede<br>', 'dfg', 0, '0000-00-00 00:00:00'),
(6, 0, 'ete', 'sdf', 'IMG_20160605_121737.jpg', '0000-00-00', 'male', 'best', 'Jimma', 'Agaro', 'werwerw', 8388607, 'asda@d.dd', 8, 4, 4, 'best', 'best', 0, '0000-00-00 00:00:00'),
(7, 7, 'jhgf', 'hgf', 'IMG_20181025_060913_145.jpg', '0000-00-00', 'male', 'were', 'Addis', 'Ayer Tena', 'wered', 8388607, 'ddsd@fd.ff', 3, 2, 1, 'qwerty', 'qwerty', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `confirmed`
--

CREATE TABLE `confirmed` (
  `confirmed_id` int(11) NOT NULL,
  `beneficiary_id` int(11) NOT NULL,
  `confirmed_by` int(11) NOT NULL,
  `validation_date` varchar(20) NOT NULL,
  `expiry_date` varchar(20) NOT NULL,
  `card_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmed`
--

INSERT INTO `confirmed` (`confirmed_id`, `beneficiary_id`, `confirmed_by`, `validation_date`, `expiry_date`, `card_number`) VALUES
(1, 1, 4, '06-06-2019', '06-06-2020', '998511'),
(2, 2, 0, '09-06-2019', '09-06-2020', '998502'),
(3, 6, 4, '09-06-2019', '09-06-2020', '976337');

-- --------------------------------------------------------

--
-- Table structure for table `disproved`
--

CREATE TABLE `disproved` (
  `disp_id` int(11) NOT NULL,
  `beneficiary_id` int(11) NOT NULL,
  `disproved_by` int(11) NOT NULL,
  `date_disproved` date NOT NULL,
  `cause` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disproved`
--

INSERT INTO `disproved` (`disp_id`, `beneficiary_id`, `disproved_by`, `date_disproved`, `cause`) VALUES
(2, 7, 4, '0000-00-00', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `good_id` int(11) NOT NULL,
  `good_code` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `donor_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `quantity_sold` int(11) NOT NULL,
  `unit_measure` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `product_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`good_id`, `good_code`, `name`, `donor_name`, `quantity`, `quantity_sold`, `unit_measure`, `price`, `product_date`, `expiry_date`, `description`) VALUES
(1, '1', 'good', 'mine', 1234, 0, 'Quintal', 23.4, '2019-06-06', '2019-06-29', ''),
(3, '23', 'newgood', '', 2345, 0, 'Quintal', 23, '2010-12-12', '2010-12-12', ''),
(4, '23', 'newgood', '', 2345, 0, 'Quintal', 23, '2010-12-12', '2010-12-12', ''),
(6, '23', 'fghf', 'dfghjk', 23, 0, 'Quintal', 345, '2019-12-12', '2020-11-11', ''),
(7, '23', 'fghf', 'dfghjk', 23, 0, 'Quintal', 345, '2019-12-12', '2020-11-11', ''),
(8, '1', 'good', 'mine mine', 1234, 0, 'Quintal', 23.4, '2019-06-06', '2019-06-29', ''),
(9, '343', '234', 'mine', 345, 0, '', 435, '2000-12-10', '2020-12-12', '');

-- --------------------------------------------------------

--
-- Table structure for table `issued`
--

CREATE TABLE `issued` (
  `issue_id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `issued_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL DEFAULT 'Uknown',
  `last_name` varchar(50) NOT NULL DEFAULT 'Unknown',
  `user_name` varchar(50) NOT NULL,
  `pass_word` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `user_name`, `pass_word`, `type`) VALUES
(1, 'Uknown', 'Unknown', 'silu', 'silu12', 'admin'),
(2, 'Uknown', 'Unknown', 'beri', '1234', 'skeeper'),
(4, 'Chaltu', 'Chala', 'mine', 'mine', 'manager'),
(6, 'fgdf', 'fhfg', 'sdfsd', 'dfg', 'beneficiary'),
(8, 'fgdf', 'fhfg', 'fgfhfg', 'X9l0ir5', 'beneficiary'),
(9, 'ete', 'sdf', 'best', 'best', 'beneficiary'),
(10, 'jhgf', 'hgf', 'qwerty', 'qwerty', 'beneficiary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD PRIMARY KEY (`beneficiary_id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `confirmed`
--
ALTER TABLE `confirmed`
  ADD PRIMARY KEY (`confirmed_id`),
  ADD UNIQUE KEY `card_number` (`card_number`);

--
-- Indexes for table `disproved`
--
ALTER TABLE `disproved`
  ADD PRIMARY KEY (`disp_id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`good_id`);

--
-- Indexes for table `issued`
--
ALTER TABLE `issued`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `pass_word` (`pass_word`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiary`
--
ALTER TABLE `beneficiary`
  MODIFY `beneficiary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `confirmed`
--
ALTER TABLE `confirmed`
  MODIFY `confirmed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `disproved`
--
ALTER TABLE `disproved`
  MODIFY `disp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `good_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `issued`
--
ALTER TABLE `issued`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
