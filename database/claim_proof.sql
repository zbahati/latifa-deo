-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 03:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `claim_proof`
--

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `claim_id` int(11) NOT NULL,
  `rollnumber` int(11) NOT NULL,
  `exam_title` varchar(50) NOT NULL,
  `exam_name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `phone` text NOT NULL,
  `description` text NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claim`
--

INSERT INTO `claim` (`claim_id`, `rollnumber`, `exam_title`, `exam_name`, `date`, `phone`, `description`, `status`) VALUES
(1, 202320001, 'ALGORITHM', 'CAT 2', '2023-07-12', '0736067272', 'Dear  Sir, \r\nMy name is Bahati , \r\nI am writing this Message explaining that I have done exam but when the marks comes I did not get mine. \r\nPlease consider my message and help me to get them \r\n\r\nLooking forward to hear from you.\r\n\r\nThanks.\r\nSincerely , \r\nBahati zirimwabagabo', 'Pending'),
(2, 202320001, 'ALGORITHM', 'CAT 2', '2023-07-12', '0786253449', 'hhhhh', 'Approved'),
(3, 2020300, 'RDBMS', 'FAT', '2023-08-10', '0784719291', 'I have done the exam but i did not get my marks for it. \r\nso I was claiming that you can give me my marks because I have the proof of exam', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_title` varchar(20) NOT NULL,
  `exam_name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `rollnumber` int(11) NOT NULL,
  `supervisor` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_title`, `exam_name`, `date`, `rollnumber`, `supervisor`, `id`) VALUES
('Acountant tips', 'CAT 2', '2023-07-13', 202320001, 32, 8);

-- --------------------------------------------------------

--
-- Table structure for table `no_proof`
--

CREATE TABLE `no_proof` (
  `no_proof_id` int(11) NOT NULL,
  `rollnumber` int(11) NOT NULL,
  `exam_title` varchar(20) NOT NULL,
  `exam_name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `supervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_proof`
--

INSERT INTO `no_proof` (`no_proof_id`, `rollnumber`, `exam_title`, `exam_name`, `date`, `supervisor`) VALUES
(1, 202320001, 'Math', 'RETAKE', '2023-07-27', 33),
(3, 2020003, 'Lawyer case', 'CAT 2', '2023-07-13', 34),
(4, 202320001, 'English', 'FAT', '2023-07-20', 33);

-- --------------------------------------------------------

--
-- Table structure for table `proof_archive`
--

CREATE TABLE `proof_archive` (
  `proof_id` int(11) NOT NULL,
  `rollnumber` int(11) NOT NULL,
  `exam_title` varchar(20) NOT NULL,
  `exam_name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `supervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proof_archive`
--

INSERT INTO `proof_archive` (`proof_id`, `rollnumber`, `exam_title`, `exam_name`, `date`, `supervisor`) VALUES
(3, 202320001, 'ALGORITHM', 'CAT 2', '2023-07-12', 33),
(4, 202320001, 'Financial statement', 'CAT 2', '2023-07-27', 32),
(5, 2020300, 'RDBMS', 'FAT', '2023-08-10', 32);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Rollnumber` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Rollnumber`, `Fname`, `Lname`, `Password`, `Department`, `Year`, `phone`) VALUES
(2020002, 'Latifa', 'Uwiduhaye', 'latifa', 'Finance', 'y2', '0787959242'),
(2020003, 'Olive', 'umukundwa', '1234', 'Law', 'y1', '0787959242'),
(2020300, 'Latifa', 'Nyiramahirwe', 'latifa', 'CS', 'Y3', '0784719291'),
(202320001, 'Deo', 'Gratien', 'deo', 'Cs', 'y3', '0787959242');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Username`, `Password`, `Role`) VALUES
(29, 'Deo', '1234', 'Admin'),
(31, 'latifa', 'latifa', 'Admin'),
(32, 'librarian', '1234', 'Supervisor'),
(33, 'Eric', '1234', 'Supervisor'),
(34, 'secretary', '1234', 'Supervisor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`claim_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rollnumber` (`rollnumber`),
  ADD KEY `supervisor` (`supervisor`);

--
-- Indexes for table `no_proof`
--
ALTER TABLE `no_proof`
  ADD PRIMARY KEY (`no_proof_id`);

--
-- Indexes for table `proof_archive`
--
ALTER TABLE `proof_archive`
  ADD PRIMARY KEY (`proof_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Rollnumber`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `claim`
--
ALTER TABLE `claim`
  MODIFY `claim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `no_proof`
--
ALTER TABLE `no_proof`
  MODIFY `no_proof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proof_archive`
--
ALTER TABLE `proof_archive`
  MODIFY `proof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`rollnumber`) REFERENCES `student` (`Rollnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`supervisor`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
