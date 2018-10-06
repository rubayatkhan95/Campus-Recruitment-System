-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 10:56 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `person_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `dob` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `gender`, `dob`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', 'male', '17/11/1995');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `job_title` varchar(70) NOT NULL,
  `job_nature` varchar(70) NOT NULL,
  `education` varchar(70) NOT NULL,
  `job_requirments` varchar(70) NOT NULL,
  `salary` int(11) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `benifits` varchar(100) NOT NULL,
  `cv_address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job_title`, `job_nature`, `education`, `job_requirments`, `salary`, `location`, `benifits`, `cv_address`) VALUES
(27, 'software engineer', 'Full time', 'BSc in CSE', 'PHP frameworks', 0, 'Banani,Dhaka', 'Friendly Environments', 'career.build@gmail.com'),
(30, 'Developer', 'Full time', 'Bsc in CS', 'HTML CSS', 15000, NULL, 'BANANI', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  `mobile_no` varchar(70) DEFAULT NULL,
  `user_name` varchar(70) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `gender` varchar(70) NOT NULL,
  `nationality` varchar(70) NOT NULL,
  `job_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `username`, `email`, `password`, `userType`, `mobile_no`, `user_name`, `address`, `gender`, `nationality`, `job_title`) VALUES
(19, 'shamim', 'shamim', 'shamimpercy@gmail.com', 'ee', 'ORGANIZATION', '', 'SHAMIM', 'aaaa', '', '', ''),
(25, 'organization', 'organization', 'shamimpercy@gmail.com', 'ee', 'ORGANIZATION', '', 'SHAMIM', 'aaaa', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `userType` varchar(70) NOT NULL,
  `mothers_name` varchar(70) DEFAULT NULL,
  `fathers_name` varchar(70) DEFAULT NULL,
  `dob` varchar(70) DEFAULT NULL,
  `gender` varchar(70) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `permanent_address` varchar(70) DEFAULT NULL,
  `present_address` varchar(70) DEFAULT NULL,
  `nationality` varchar(70) DEFAULT NULL,
  `maritial_status` varchar(70) DEFAULT NULL,
  `religion` varchar(70) DEFAULT NULL,
  `mobile_no` varchar(70) DEFAULT NULL,
  `degree_1` varchar(70) DEFAULT NULL,
  `institute_1` varchar(70) DEFAULT NULL,
  `year_of_passing_1` varchar(70) DEFAULT NULL,
  `garde_1` varchar(70) DEFAULT NULL,
  `degree_2` varchar(70) DEFAULT NULL,
  `institute_2` varchar(70) DEFAULT NULL,
  `year_of_passing_2` varchar(70) DEFAULT NULL,
  `garde_2` varchar(70) DEFAULT NULL,
  `degree_3` varchar(70) DEFAULT NULL,
  `institute_3` varchar(70) DEFAULT NULL,
  `year_of_passing_3` varchar(70) DEFAULT NULL,
  `garde_3` varchar(70) DEFAULT NULL,
  `degree_4` varchar(70) DEFAULT NULL,
  `institute_4` varchar(70) DEFAULT NULL,
  `year_of_passing_4` varchar(70) DEFAULT NULL,
  `garde_4` varchar(70) DEFAULT NULL,
  `skills` varchar(70) DEFAULT NULL,
  `experience` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `username`, `password`, `userType`, `mothers_name`, `fathers_name`, `dob`, `gender`, `email`, `permanent_address`, `present_address`, `nationality`, `maritial_status`, `religion`, `mobile_no`, `degree_1`, `institute_1`, `year_of_passing_1`, `garde_1`, `degree_2`, `institute_2`, `year_of_passing_2`, `garde_2`, `degree_3`, `institute_3`, `year_of_passing_3`, `garde_3`, `degree_4`, `institute_4`, `year_of_passing_4`, `garde_4`, `skills`, `experience`) VALUES
(15, 'peasha', 'peasha', '1234', 'STUDENT', 'asia', 'habibur', '27', 'female', 'peasha', 'aaaa', 'aaa', 'aaa', 'aaaa', 'aa', 'aa', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HTML<CSS', 'HTML,CSS'),
(27, 'student', 'student', '1234', 'STUDENT', 'abc', 'abc', '1995', 'male', 'abc@gmail.com', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
