-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 04:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pid`, `did`, `date`, `time`, `status`) VALUES
(57, 2, 30, '2022-06-02', '09:0:00_to_09:15:00am', '0'),
(58, 3, 30, '2022-06-02', '09:45:00_to_10:15:00am', '0'),
(59, 4, 30, '02-06-2022', '10:30:00_to_10:45:00am', '1'),
(60, 7, 30, '02-06-2022', '', '1'),
(61, 7, 30, '02-06-2022', '', 'pid=7'),
(62, 7, 30, '02-06-2022', '', 'pid=7'),
(63, 7, 30, '08-06-2022', '', '08/06/2022-30'),
(64, 7, 30, '08-06-2022', '', '08/06/2022-30'),
(65, 7, 30, '08-06-2022', '', '08/06/2022-30'),
(66, 7, 30, '02-06-2022', '', '0'),
(67, 7, 30, '06-06-2022', '', '1'),
(68, 7, 30, '06-06-2022', '', '0'),
(69, 0, 30, '09-06-2022', '09:45:00_to_10:00:00am', '09/06/2022-30'),
(70, 0, 30, '09-06-2022', '09:0:00_to_09:15:00am', '09/06/2022-30'),
(71, 7, 30, '21-06-2022', '16:20:00_to_04:35:00pm', '0'),
(72, 0, 30, '19-06-2022', '16:20:00_to_04:35:00pm', '0'),
(73, 0, 30, '19-06-2022', '10:20:00_to_10:35:00am', '0'),
(74, 0, 37, '09-06-2022', '15:20:00_to_03:35:00pm', '0'),
(75, 0, 37, '10-06-2022', '15:0:00_to_03:15:00pm', '0'),
(76, 0, 35, '10-06-2022', '15:15:00_to_03:30:00pm', '0'),
(77, 0, 35, '10-06-2022', '9:15:00_to_09:30:00am', '0'),
(78, 0, 35, '10-06-2022', '9:30:00_to_09:45:00am', '0'),
(79, 0, 30, '19-06-2022', '09:15:00_to_09:30:00am', '19/06/2022-30'),
(80, 0, 30, '19-06-2022', '9:0:00_to_09:15:00am', '19/06/2022-30'),
(81, 22, 30, '19-06-2022', '9:30:00_to_09:45:00am', '19/06/2022-30'),
(82, 72, 30, '22-06-2022', '09:0:00_to_09:15:00am', '1'),
(83, 72, 30, '22-06-2022', '17:0:00_to_05:15:00pm', '0'),
(84, 10, 30, '22-06-2022', '11:45:00_to_12:00:00pm', 'pid=84'),
(85, 10, 30, '22-06-2022', '09:15:00_to_09:30:00am', '0'),
(86, 10, 30, '22-06-2022', '16:30:00_to_04:45:00pm', 'patient_id=86'),
(87, 10, 30, '23-06-2022', '15:15:00_to_03:30:00pm', '1'),
(88, 10, 30, '23-06-2022', '15:0:00_to_03:15:00pm', '0'),
(89, 10, 30, '22-06-2022', '09:30:00_to_09:45:00am', '0'),
(90, 10, 30, '23-06-2022', '09:30:00_to_09:45:00am', '1'),
(91, 10, 30, '16-06-2022', '09:15:00_to_09:30:00am', '0'),
(92, 10, 30, '16-06-2022', '09:30:00_to_09:45:00am', '0'),
(93, 10, 30, '23-06-2022', '09:15:00_to_09:30:00am', '0'),
(94, 10, 35, '23-06-2022', '9:30:00_to_09:45:00am', '0'),
(95, 10, 35, '23-06-2022', '9:45:00_to_10:00:00am', '0'),
(96, 10, 30, '22-06-2022', '11:0:00_to_11:15:00am', '0'),
(97, 10, 30, '22-06-2022', '09:45:00_to_10:00:00am', '0'),
(98, 72, 30, '23-06-2022', '10:15:00_to_10:30:00am', '0'),
(99, 11, 30, '22-06-2022', '10:0:00_to_10:15:00am', '0'),
(100, 73, 30, '23-06-2022', '09:45:00_to_10:00:00am', 'patient_id=100'),
(101, 11, 30, '23-06-2022', '10:0:00_to_10:15:00am', '0'),
(102, 11, 30, '23-06-2022', '09:0:00_to_09:15:00am', '0'),
(103, 11, 30, '23-06-2022', '15:30:00_to_03:45:00pm', '0'),
(104, 11, 30, '23-06-2022', '15:45:00_to_04:00:00pm', '0'),
(105, 73, 30, '23-06-2022', '16:15:00_to_04:30:00pm', '0'),
(106, 11, 30, '23-06-2022', '10:30:00_to_10:45:00am', '0'),
(107, 11, 30, '23-06-2022', '10:30:00_to_10:45:00am', '0'),
(108, 11, 30, '23-06-2022', '16:0:00_to_04:15:00pm', '0'),
(109, 11, 30, '23-06-2022', '16:30:00_to_04:45:00pm', '0'),
(110, 11, 30, '23-06-2022', '16:45:00_to_05:00:00pm', '0'),
(111, 11, 30, '23-06-2022', '17:0:00_to_05:15:00pm', '0');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `id` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pincode` int(20) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`id`, `name`, `pincode`, `location`) VALUES
(1, '', 1234, 'gafsg'),
(2, 'jhj', 879879, '7979'),
(3, '', 797, '99'),
(4, '', 97979, '7979'),
(5, '0980', 808, '08'),
(6, 'jhj', 0, 'jhfcjd'),
(7, 'test', 123456, 'sedfghj'),
(8, 'bbb', 123456, 'sedrfghj'),
(9, 'adad', 45678, 'edrftghj'),
(10, 'adad', 45678, 'chd'),
(11, '', 988910, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `email1` varchar(20) NOT NULL,
  `username1` varchar(20) NOT NULL,
  `address1` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`email1`, `username1`, `address1`) VALUES
('$email_val', '$username_val', '$address_val');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `specialist` varchar(50) NOT NULL,
  `workingdays` varchar(15) NOT NULL,
  `morning` varchar(15) NOT NULL,
  `m_stime` varchar(15) NOT NULL,
  `m_etime` varchar(15) NOT NULL,
  `evening` varchar(15) NOT NULL,
  `e_stime` varchar(15) NOT NULL,
  `e_etime` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `address`, `gender`, `specialist`, `workingdays`, `morning`, `m_stime`, `m_etime`, `evening`, `e_stime`, `e_etime`, `time`) VALUES
(30, 'kajal', 'yteytr nfh', 'female', 'Gastroenterology', 'Mon/Wed/Thu', '', '09', '12', '', '15', '18', '15'),
(35, 'rahul', 'hghfgh', 'male', 'Dermatology', 'Mon/Fri/Thu', 'Morning', '9', '12', '', '15', '18', '15'),
(37, 'abc', 'bdchgcvgdhjdch', 'male', 'Radiology', 'Tue/Fri/Thu', 'Morning', '', '', 'Evening', '15', '16', '20'),
(38, 'alisha', '3448/2 45D,chandigarh', '', '', '', '', '09', '09', '', '15', '15', '05'),
(39, 'jhj', '3448/2 45D,chandigarh', 'female', 'Mon', 'Anesthesiology', '', '11', '12', '', '15', '15', '05'),
(40, 'Pankaj Kumar', 'test', 'male', 'Mon', 'Anesthesiology', 'Morning', '09', '09', '', '15', '15', '10'),
(41, 'test', 'tet test', 'male', 'Mon', 'Allergy and ast', 'Morning', '09', '09', '', '15', '15', '10'),
(42, 'test', 'tet test', 'male', 'Mon', 'Allergy and ast', 'Morning', '09', '09', '', '15', '15', '10'),
(43, 'qqqqqqqqqqqqqqq', 'h.no 969 Vikash nagar Mauli jagran Chand', 'male', 'Thu', 'Immunology', 'Morning', '09', '09', '', '15', '15', '05'),
(44, 'qqqqqqqqqqqqqqq', 'h.no 969 Vikash nagar Mauli jagran Chand', 'male', 'Thu', 'Immunology', 'Morning', '09', '09', '', '15', '15', '05'),
(45, 'qqqqqqqqqqqqqqq', 'h.no 969 Vikash nagar Mauli jagran Chand', 'male', 'Thu', 'Immunology', 'Morning', '09', '09', '', '15', '15', '05'),
(46, 'qqqqqqqqqqqqqqq', 'h.no 969 Vikash nagar Mauli jagran Chand', 'male', 'Thu', 'Immunology', 'Morning', '09', '09', '', '15', '15', '05'),
(47, 'qqqqqqqqqqqqqqq', 'h.no 969 Vikash nagar Mauli jagran Chand', 'male', 'Thu', 'Immunology', 'Morning', '09', '09', '', '15', '15', '05'),
(48, 'qqqqqqqqqqqqqqq', 'h.no 969 Vikash nagar Mauli jagran Chand', 'male', 'Thu', 'Immunology', 'Morning', '09', '09', '', '15', '15', '05'),
(49, 'ankaj Kumar', 'FSEFSfs', '', '', '', '', '09', '09', '', '15', '15', '05'),
(50, 'ankaj Kumar', 'FSEFSfs', '', '', '', '', '09', '09', '', '15', '15', '05'),
(51, 'errarR', '', '', '', '', '', '09', '09', '', '15', '15', '05'),
(52, 'errarR', '', '', '', '', '', '09', '09', '', '15', '15', '05'),
(53, 'hello pankaj', 'fasfaFa', '', '', 'Cardiology', '', '09', '09', '', '15', '15', '05'),
(54, 'hello pankaj', 'fasfaFa', '', '', 'Cardiology', '', '09', '09', '', '15', '15', '05'),
(55, 'jflsdjflsdfj', 'l heello', 'male', 'Mon', 'Cardiology', '', '09', '09', 'Evening', '15', '15', '15');

-- --------------------------------------------------------

--
-- Table structure for table `doc_pre`
--

CREATE TABLE `doc_pre` (
  `id` int(11) NOT NULL,
  `apid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `illness` varchar(100) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `restriction` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_pre`
--

INSERT INTO `doc_pre` (`id`, `apid`, `pid`, `illness`, `diagnosis`, `restriction`, `status`) VALUES
(4, 59, 4, '9879', '9789', '879', '0'),
(5, 60, 7, '098', '908', '098', '0'),
(6, 67, 7, 'yhtgktjkjhr', 'kjhjhg', 'mhgjhr', '0'),
(7, 71, 7, '', '', '', '0'),
(8, 82, 72, 'helo ', 'book', 'book', '0'),
(9, 90, 10, 'fjsdljfl', 'jl', 'jl', '0'),
(10, 87, 10, '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `insert1`
--

CREATE TABLE `insert1` (
  `id` int(11) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insert1`
--

INSERT INTO `insert1` (`id`, `email_id`, `username`, `gender`) VALUES
(2, 'amit@gmail.com', 'amit', ''),
(3, 'amit@gmail.com', 'amit', ''),
(4, 'alisha@gmail.com', 'alisha', 'male'),
(5, 'gurcharanit@gmail.com', 'gurcharan singh', 'male'),
(6, 'gurcharanit@gmail.com', 'gurcharan singh', 'male'),
(7, 'gurcharanit@gmail.com', 'gurcharan singh', 'male'),
(8, 'gurcharanit@gmail.com', 'gurcharan singh', 'male'),
(9, '987', '987', 'male'),
(10, '987', '987', 'male'),
(11, 'test123@gmail.com', '987', 'male'),
(12, 'test2@gmail.com', 'sad', 'male'),
(13, 'jhgjg', '', 'male'),
(14, 'ds', 'df', 'male'),
(15, '987997', '', 'male'),
(16, '908', '098', 'male'),
(17, '908', '0980', 'male'),
(18, '987', '987', 'male'),
(19, '9879', '978', 'male'),
(20, 'alisha@gmail.com', '987', 'male'),
(21, 'o879', '987', 'male'),
(22, '', '', 'male'),
(23, '', '', 'male'),
(24, 'alisha@gmail.com', '', 'male'),
(25, '', '', 'male'),
(26, 'alisha@gmail.com', 'njjj', 'female'),
(27, '', '', 'male'),
(28, '', '', 'male'),
(29, '', '', 'male'),
(30, '', '', 'male'),
(31, '', '', 'male'),
(32, '', '', 'male'),
(33, '', '', 'male'),
(34, '', '', 'male'),
(35, '', '', 'male'),
(36, '', '', 'male'),
(37, '', '', 'male'),
(38, '', '', 'male'),
(39, '', '', 'male'),
(40, '', '', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `bloodg` varchar(15) NOT NULL,
  `treatment` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `address`, `gender`, `dob`, `code`, `city`, `bloodg`, `treatment`) VALUES
(2, 'alisha', '3448/2 45D,chandigarh', 'female', '2022-05-05', '44565', 'Chandigarh', 'B+', 'Cardiology'),
(3, 'jhj', '3448/2 45D,chandigarh', 'female', '2022-05-05', '', 'Chandigarh', 'A+', 'Allergy and asthma'),
(4, 'jhj', '3448/2 45D,chandigarh', 'male', '2022-06-22', '', 'Chandigarh', 'A+', 'Allergy and asthma'),
(5, 'test', 'lkuoiuio', 'male', '2022-05-23', '10002455', 'Chandigarh', 'A+', 'Allergy and asthma'),
(6, '987', '798', 'male', '0007-09-08', '987', 'Chandigarh', 'A+', 'Allergy and asthma'),
(7, 'kajal', '', 'female', '03-01-2000', '', 'Chandigarh', 'A+', 'Allergy and asthma'),
(8, '', '', 'male', '', '', 'Chandigarh', 'A+', 'Allergy and asthma'),
(9, '', '', 'male', '', '', 'Chandigarh', 'A+', 'Allergy and asthma'),
(10, '', '', 'male', '', '', 'Chandigarh', 'A+', 'Allergy and asthma'),
(11, '', '', 'male', '', '', 'Chandigarh', 'A+', 'Allergy and asthma'),
(12, 'amit', 'hgd hdf', 'male', '2022-06-02', '76789', 'Delhi', 'AB+', 'Hematology'),
(13, '', '', 'male', '--', '', 'Chandigarh', 'A+', 'Allergy and asthma'),
(14, '', '', 'male', '--', '', 'Chandigarh', 'A+', 'Allergy and asthma'),
(15, '', '', 'male', '--', '', 'Chandigarh', 'A+', 'Allergy and asthma'),
(16, 'jhj', '3448/2 45D,chandigarh', 'male', '10-06-2022', '234567', 'Chandigarh', 'A+', 'Allergy and asthma'),
(17, 'jhj', '3448/2 45D,chandigarh', 'male', '10-06-2022', '234567', 'Chandigarh', 'A+', 'Allergy and asthma'),
(18, 'jhj', '3448/2 45D,chandigarh', 'male', '10-06-2022', '234567', 'Chandigarh', 'A+', 'Allergy and asthma'),
(19, 'jhj', '3448/2 45D,chandigarh', 'male', '10-06-2022', '234567', 'Chandigarh', 'A+', 'Allergy and asthma'),
(20, 'jhj', '3448/2 45D,chandigarh', 'male', '10-06-2022', '234567', 'Chandigarh', 'A+', 'Allergy and asthma'),
(21, 'test', 'fdgsxhsgc', 'male', '09-06-2022', '432635', 'Chandigarh', 'A+', 'Allergy and asthma'),
(22, 'acac', 'wsedrfgh', 'hello', '23-06-2022', '0987', 'Chandigarh', 'A+', 'Allergy and asthma'),
(72, 'Pankaj Kumar', 'fsdfdsfh', 'male', '--', 'h', 'Chandigarh', 'A+', 'Hematology -- blood disorders'),
(73, 'Pankaj Kumar', '696', 'male', '23-06-2022', '160102', 'Chandigarh', 'A+', 'Allergy and asthma');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(4) DEFAULT NULL,
  `stu_name` varchar(10) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `marks` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `class`, `marks`) VALUES
(101, 'meha', 'BCA', '98'),
(102, 'amit', 'BBA', '75'),
(103, 'kajal', 'BCA', '88'),
(104, 'palak', 'MSC IT', '80'),
(105, 'aryan', 'BCA', '92');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ref_id` int(20) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `phoneno`, `password`, `ref_id`, `usertype`, `status`) VALUES
(38, 'kl@gmail.com', 0, '123', 55, 'doctor', 0),
(39, 'gjkdk@gmail.com', 123456789, '123', 11, 'clinic', 0),
(40, '123456@gmail.com', 123456111, '123', 73, 'patient', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_pre`
--
ALTER TABLE `doc_pre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insert1`
--
ALTER TABLE `insert1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `doc_pre`
--
ALTER TABLE `doc_pre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `insert1`
--
ALTER TABLE `insert1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
