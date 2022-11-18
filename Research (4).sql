-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2022 at 04:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Research`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `userid` varchar(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `userid`, `username`, `password`) VALUES
(1, 'ISE123', 'Ashwini', 'e89c0925132c5e3a0996eb308315884e12d80c1b');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Id` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `join_year` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `userid`, `username`, `designation`, `join_year`, `email`, `password`) VALUES
(1, 'ISE1243', 'Hema', 'Professor', '2022-06-16', 'hemabpatil2001@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(2, 'ISE1243', 'Hema Patil', 'Assistant Professor', '2022-06-15', 'hemabpatil2001@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(3, 'ISE1243', 'Danu', 'Professor', '2022-06-16', 'hemabpatil2001@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(4, 'ISE9986', 'Hema', 'Professor', '2022-06-30', 'hemabpatil2001@gmail.com', 'cf99f3364a6b093588de3d95bc33ba6bd3cb1f40'),
(5, 'ISE2345', 'ashwini', 'Associate Professor', '2022-07-22', 'ashwinitengale007@gmail.com', 'cf99f3364a6b093588de3d95bc33ba6bd3cb1f40'),
(6, 'ISE999', 'daneshwari', '', '2022-07-22', 'daneshwari2001@gmail.com', '7e4f11ca4ac4530740b12597387b47a0f69134ff'),
(7, 'ISE123', 'deepa', 'Professor', '2022-07-22', 'pkDeshpande21@gmail.com', '71631204bc513828d5c3851779c33e0549f6e5cf'),
(8, 'CSE', 'varsha', 'Assistant Professor', '2022-06-28', 'varshakumar2001@gmail.com', 'a562ad5349ac548e44f1ae24e8f75bcf737c0194'),
(9, 'ISE9986', 'Hema Patil', 'Assistant Professor', '2022-07-12', 'sadhana2000@gmail.com', '5828b06c411197c3f9b877f4e58d9ae553c3838e');

-- --------------------------------------------------------

--
-- Table structure for table `facultyDetails2`
--

CREATE TABLE `facultyDetails2` (
  `Id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `type_of_activity` varchar(255) NOT NULL,
  `faculty_member` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `application_no` varchar(255) DEFAULT NULL,
  `Referance_no` varchar(255) DEFAULT NULL,
  `Yearly` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `Award_ref_no` varchar(255) DEFAULT NULL,
  `Research_scholor` varchar(255) DEFAULT NULL,
  `thesis_title` varchar(255) DEFAULT NULL,
  `guide_name` varchar(255) DEFAULT NULL,
  `co_guide_name` varchar(255) DEFAULT NULL,
  `Research_center` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultyDetails2`
--

INSERT INTO `facultyDetails2` (`Id`, `faculty_id`, `type_of_activity`, `faculty_member`, `title`, `application_no`, `Referance_no`, `Yearly`, `status`, `Award_ref_no`, `Research_scholor`, `thesis_title`, `guide_name`, `co_guide_name`, `Research_center`, `subject`, `university`, `department`, `country`) VALUES
(3, 2, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, '6', NULL, NULL, NULL, NULL, '2018-08-27', NULL, NULL, 'sanjana', 'vlsi', 'ashwini', 'bhumika', 'bec', NULL, NULL, NULL, NULL),
(10, 2, '4', 'bhumi', 'qwert', '123456', NULL, '2022-07-22', NULL, '345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 2, '7', NULL, NULL, NULL, NULL, '2015-07-16', NULL, NULL, 'sanjana Patil', 'vlsi', NULL, NULL, NULL, 'field Theory', 'BEC', 'EC', 'Swizerland'),
(15, 4, '4', ' Hema', 'title98', '123456', '', '2022-07-30', '', '345678', '', '', '', ' ', ' ', '', '', '', ' '),
(16, 4, '4', ' Hema', 'title98', '123456', '', '2000-07-30', '', '345678', '', '', '', ' ', ' ', '', '', '', ' '),
(19, 4, '5', 'Hema', 'python', '123456', '765432', '2001-06-05', 'Published', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 4, '5', 'Hema', 'ADSA', '123456', '765432', '2019-07-11', 'Awarded', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 4, '7', NULL, NULL, NULL, NULL, '2013-05-11', NULL, NULL, 'Hema', 'part2SE', NULL, NULL, NULL, 'software Engineering', 'BEC', 'ISE', 'Swizerland'),
(25, 8, '4', 'varsha', 'qasdfgh', '9000', NULL, '1999-07-14', NULL, '345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 4, '4', 'Hema', 'qwerty', '123456', NULL, '2022-07-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_Details`
--

CREATE TABLE `faculty_Details` (
  `Id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `type_of_activity` int(11) NOT NULL,
  `Authors` varchar(255) NOT NULL,
  `Yearly` date NOT NULL,
  `Title_name1` varchar(255) NOT NULL,
  `Title_name2` varchar(255) NOT NULL,
  `vol_issue_no` varchar(20) DEFAULT NULL,
  `conductBy_venue` varchar(255) DEFAULT NULL,
  `page_no` varchar(20) NOT NULL,
  `url` varchar(255) NOT NULL,
  `scopus_index` varchar(10) NOT NULL,
  `web_of_science` varchar(10) NOT NULL,
  `ISSN` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_Details`
--

INSERT INTO `faculty_Details` (`Id`, `faculty_id`, `type_of_activity`, `Authors`, `Yearly`, `Title_name1`, `Title_name2`, `vol_issue_no`, `conductBy_venue`, `page_no`, `url`, `scopus_index`, `web_of_science`, `ISSN`, `category`, `level`) VALUES
(27, 2, 1, 'HemaPatil', '2022-07-01', 'book1', 'book2', 'volume 100', NULL, '100', 'http://www.google.com', 'No', 'No', '1234', 'ST', 'National'),
(35, 4, 3, 'Hema', '2022-07-22', 'book1', 'journal of acm', 'volu190', '', '333', 'http://www.google.com', 'No', 'yes', '345-567', 'GEN', 'National'),
(39, 4, 1, 'Hema', '2022-07-22', 'book1', 'journal of acm', 'volu190', '', '333', 'http://www.google.com', 'No', 'yes', '345-567', 'GEN', 'National'),
(40, 8, 1, 'varsha', '2020-07-14', 'paper2', 'qqqqq', '456', NULL, '450', 'http://www.google.com', 'yes', 'No', '1234', 'ST', 'National'),
(41, 8, 2, 'varsha', '2022-07-14', 'book1', 'journal of acm', '200', NULL, '100-200', 'http://www.google.com', 'yes', 'yes', '345', 'ST', 'International'),
(42, 8, 3, 'varsha', '2022-07-14', 'book1', 'journal of acm', NULL, 'bijapur', '100', 'http://www.google.com', 'No', 'No', '1234', 'SC', 'National');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `facultyDetails2`
--
ALTER TABLE `facultyDetails2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty_Details`
--
ALTER TABLE `faculty_Details`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `facultyDetails2`
--
ALTER TABLE `facultyDetails2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `faculty_Details`
--
ALTER TABLE `faculty_Details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
