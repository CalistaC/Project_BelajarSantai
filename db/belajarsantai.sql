-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 06:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajarsantai`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `instructor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `instructor`) VALUES
('1', 'Statistika', 'Justin Thames');

-- --------------------------------------------------------

--
-- Table structure for table `statistika`
--

CREATE TABLE `statistika` (
  `topic_num` int(20) NOT NULL,
  `topic_name` varchar(100) NOT NULL,
  `courseid` varchar(50) NOT NULL,
  `video` varchar(2048) NOT NULL,
  `topic_file` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistika`
--

INSERT INTO `statistika` (`topic_num`, `topic_name`, `courseid`, `video`, `topic_file`) VALUES
(1, 'Pengenalan Statistika', '1', 'https://drive.google.com/file/d/1UzSrZtcS6TXHmVHiG1orTdlgnEQ_rie1/preview', 'https://docs.google.com/presentation/d/1zXcs8uCIivJaO1vC5v2cqdWJTq2eR6g6/edit?usp=share_link&ouid=107454760171132006031&rtpof=true&sd=true'),
(2, 'Dasar Statistika', '1', 'https://drive.google.com/file/d/169L38ZebNWUB0m0g3LKHxySvhts97iH3/preview', 'https://docs.google.com/presentation/d/1zXcs8uCIivJaO1vC5v2cqdWJTq2eR6g6/edit?usp=share_link&ouid=107454760171132006031&rtpof=true&sd=true'),
(3, 'Permutasi dan Kombinasi', '1', 'https://drive.google.com/file/d/1old5dUKrXpZWWQIlLylZcPEq6wtoUpoh/preview', 'https://docs.google.com/presentation/d/1XSfbJwkleusL3qIcijEfcOMd3Pujy00T/edit?usp=share_link&ouid=107454760171132006031&rtpof=true&sd=true'),
(4, 'Distribusi Peluang', '1', 'https://drive.google.com/file/d/15QWGAHya_lCMD2MOt33918oe-00W6cxO/preview', 'https://docs.google.com/presentation/d/10JxKC2t1NidwO4HYeUdcnW9MnePRGQdB/edit?usp=share_link&ouid=107454760171132006031&rtpof=true&sd=true'),
(5, 'Hipotesis', '1', 'https://drive.google.com/file/d/1lUlr4FLhufVuQK-PIhRH-q1D3M6NE5EV/preview', 'https://docs.google.com/presentation/d/1sIIDK-64pbHgbtsmu6hT9mKwul-dI3Z5/edit?usp=share_link&ouid=107454760171132006031&rtpof=true&sd=true'),
(6, 'Uji Hipotesis', '1', 'https://drive.google.com/file/d/1TTVfMCX4xAYDNXgbp7bfnGzBtSEldt2I/preview', 'https://docs.google.com/presentation/d/1mzEKycfYkYpCDfLNyy8Nsm-WWpwRGxMN/edit?usp=share_link&ouid=107454760171132006031&rtpof=true&sd=true');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`) VALUES
('1', 'PangsitHebat', 'pangsit@gmail.com', 'c9e99c10f42cf9f0e1997890723dd55550de1255');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `statistika`
--
ALTER TABLE `statistika`
  ADD PRIMARY KEY (`topic_num`),
  ADD KEY `FK_courseid` (`courseid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `statistika`
--
ALTER TABLE `statistika`
  ADD CONSTRAINT `FK_courseid` FOREIGN KEY (`courseid`) REFERENCES `course` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
