-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 04:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lewansys`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_job`
--

CREATE TABLE `applied_job` (
  `id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `job_status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied_job`
--

INSERT INTO `applied_job` (`id`, `student_id`, `job_id`, `job_status`) VALUES
(1, 5, 1, 4),
(2, 1, 3, 10),
(3, 1, 1, 0),
(4, 6, 1, 0),
(5, 6, 1, 0),
(6, 6, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `college_register`
--

CREATE TABLE `college_register` (
  `id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_register`
--

INSERT INTO `college_register` (`id`, `username`, `email`, `pswd`) VALUES
(1, 'superadmin', 'ab@gmail.com', '77777'),
(11, 'dineshkkg48', 'prasad@gmail.com', '2324242432'),
(14, 'admin', 'tamil@gmail.com', '44444');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `start_salary` varchar(50) NOT NULL,
  `end_salary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `company_name`, `location`, `description`, `skills`, `start_salary`, `end_salary`) VALUES
(1, 'software developer', 'Infosys', 'chennai', 'Lewansys is looking for an integration software engineer to join our team. In this role you will work as part of a small, dynamic and fast moving customer success', 'kotlin , java', '2,00,000', '4,00,000'),
(3, 'testing engineer', 'tcs', 'chennai', 'Lewansys is looking for an integration software engineer to join our team. In this role you will work as part of a small, dynamic and fast moving customer success', 'java', '3,00,000', '5,00,000'),
(4, 'app developer', 'ctc', 'chennai', 'Lewansys is looking for an integration software engineer to join our team. In this role you will work as part of a small, dynamic and fast moving customer success', 'java', '6,00,000', '8,00,000');

-- --------------------------------------------------------

--
-- Table structure for table `student_basicdetails`
--

CREATE TABLE `student_basicdetails` (
  `id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  `student_mobile` varchar(30) NOT NULL,
  `student_address` varchar(30) NOT NULL,
  `student_bio` varchar(30) NOT NULL,
  `student_degree` varchar(30) NOT NULL,
  `student_yearofpassing` varchar(10) NOT NULL,
  `student_percentage` varchar(10) NOT NULL,
  `student_skill` varchar(200) NOT NULL,
  `student_certificate` varchar(200) NOT NULL,
  `student_hobby` varchar(200) NOT NULL,
  `student_achievements` varchar(200) NOT NULL,
  `student_kl` varchar(200) NOT NULL,
  `student_project` varchar(200) NOT NULL,
  `student_internship` varchar(200) NOT NULL,
  `student_companyname` varchar(200) NOT NULL,
  `student_companyaddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_basicdetails`
--

INSERT INTO `student_basicdetails` (`id`, `student_id`, `student_name`, `student_email`, `student_mobile`, `student_address`, `student_bio`, `student_degree`, `student_yearofpassing`, `student_percentage`, `student_skill`, `student_certificate`, `student_hobby`, `student_achievements`, `student_kl`, `student_project`, `student_internship`, `student_companyname`, `student_companyaddress`) VALUES
(1, 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 2, 'JAYA PRASAD', 'jp@gmail.com', '8778624681', 'east stret', '', '', '', '75', '', '', '', '', 'tamil english', '', '', 'gm', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `id` int(10) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  `student_password` varchar(30) NOT NULL,
  `student_mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`id`, `student_name`, `student_email`, `student_password`, `student_mobile`) VALUES
(2, 'jaya prasad', 'jayaprasad356@gmail.com', '12345678', '9876543210'),
(21, 'dinesh', 'jayaprasad356@gmail.com', '12345678', '9876543210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_job`
--
ALTER TABLE `applied_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_register`
--
ALTER TABLE `college_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_basicdetails`
--
ALTER TABLE `student_basicdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_job`
--
ALTER TABLE `applied_job`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `college_register`
--
ALTER TABLE `college_register`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_basicdetails`
--
ALTER TABLE `student_basicdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_register`
--
ALTER TABLE `student_register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
