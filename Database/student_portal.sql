-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2024 at 08:02 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int NOT NULL,
  `student_id` int DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `student_id`, `picture`, `description`, `created_at`, `updated_at`) VALUES
(1, 9, 'uploads/logo.png', 'scbcscscbscscbscscscsbcs c scbscbcbs', '2024-09-13 19:13:26', '2024-09-13 19:13:26'),
(2, 9, 'uploads/logo.png', 'scbcscscbscscbscscscsbcs c scbscbcbs', '2024-09-13 19:14:29', '2024-09-13 19:14:29'),
(3, 9, 'uploads/1717428061431.jpg', 'scbcscscbscscbscscscsbcs c scbscbcbs', '2024-09-13 20:15:38', '2024-09-13 20:15:38'),
(4, 11, 'uploads/66e52e639ea6e.png', 'scbcscscbscscbscscscsbcs c scbscbcbs', '2024-09-14 06:34:11', '2024-09-14 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int NOT NULL,
  `regnum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lga` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `faculty` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `picture` varchar(10000) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `regnum`, `fname`, `lname`, `dob`, `gender`, `state`, `lga`, `phone`, `email`, `password`, `address`, `level`, `faculty`, `department`, `picture`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KSP/ND/COM/19/001', 'First Student', '', '', '', '', '', '', '', '', '', '', '', 'Computer Science', NULL, NULL, '2022-10-29 06:24:29.721728', NULL),
(2, 'KSP/ND/COM/19/002', 'Abdullahi ', 'Aminu', '2022-12-31', 'Male', 'Kano', 'Kano Munincipal', '09000000000', 'abdul@example.com', '', '000 Shahuci Global Resources Shahuci Global Resources ', 'ND1', 'Computer Sciences', 'Software Engineering', NULL, 1, '2022-10-29 06:24:29.721728', NULL),
(3, 'KSP/ND/COM/19/003', 'Salim Kabir', '', '', '', '', '', '', '', '', '', '', '', 'Computer Science', NULL, 1, '2022-10-29 06:24:29.721728', NULL),
(5, 'KSP/ND/COM/22/001', 'Abdullahi', 'Mudi', '', '', '', '', '', '', '1e99a24df4edf90e11db28abe315b1a6', '', '', '', '', NULL, NULL, '2022-10-29 06:39:18.330284', '2022-10-29 08:41:28.595746'),
(6, 'KSP/ND/COM/22/001', 'Abdullahi', 'Mudi', '', 'Male', 'Kano', 'Kano Municipal', '08030630270', 'abdullahimudi2018@gmail.com', '1e99a24df4edf90e11db28abe315b1a6', '000 Shahuci Global Resources Shahuci Global Resources ', 'ND1', 'Computer Sciences', 'Software Engineering', NULL, 1, '2022-10-29 06:42:10.292219', '2022-10-29 06:50:38.399888'),
(7, 'FUD/COM/22/001', 'Abdul', 'Abdul', '2021-11-30', 'Male', 'Kano', 'Kano Municipal', '09000000000', 'abdul@fud.edu.ng', '82027888c5bb8fc395411cb6804a066c', '000 Shahuci Global Resources Shahuci Global Resources ', '8', 'Computer Sciences', 'Information Technology', NULL, 1, '2022-11-25 23:45:34.994206', '2022-11-26 03:18:36.652311'),
(8, 'FUD/COM/22/002', 'Abdul1', 'Abdul', '', '', '', '', '09000000000', 'abdul1@gmail.com', '7706e268aad4a1a7a952564bfe95d408', '', '', '', '', NULL, 1, '2022-11-26 03:17:26.295700', NULL),
(11, 'UG22ICT1012', 'Abdullahi', 'Aminu', '2024-09-21', 'Male', 'Abia', 'Aba North', '08067456793', 'abdul@abdulfortech.com', '$2y$10$hzPn/mCE0GtjH.itVYDgHuatunD6LDl3FNMSlqzU02qsDRMxOMTFC', '000 Anyware In Nigeria', 'Level 000', 'Computing', 'ICT', NULL, 1, '2024-09-14 05:55:29.805601', '2024-09-14 06:11:10.667953');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
