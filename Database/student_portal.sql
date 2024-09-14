-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2024 at 06:29 AM
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int NOT NULL,
  `schName` varchar(110) NOT NULL,
  `schCategory` varchar(100) NOT NULL,
  `schMoto` varchar(100) NOT NULL,
  `schPhone` varchar(1000) NOT NULL,
  `schEmail` varchar(100) NOT NULL,
  `schAddress` varchar(100) NOT NULL,
  `schCity` varchar(100) NOT NULL,
  `schCountry` varchar(100) NOT NULL,
  `schWebsite` varchar(100) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int DEFAULT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `uptime` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `schName`, `schCategory`, `schMoto`, `schPhone`, `schEmail`, `schAddress`, `schCity`, `schCountry`, `schWebsite`, `logo`, `password`, `status`, `date`, `uptime`) VALUES
(1, 'Kano State Polytechnic', 'Polytechnic', 'Giving on-demand skills to the masses', '08050404966', 'gwaji@gmail.com', 'Matan Fada, Nasarawa GRA, Kano', 'Kano', 'Nigeria', 'https://ksp.edu.ng', 'img/Uploads/LG120220713 095718pm1657749438.png', 'b9eb1a6e514c644f196d6fbf9077760b', 1, '2022-07-11 04:48:25.238426', '2022-08-23 10:56:43.330237');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int NOT NULL,
  `account_id` int NOT NULL,
  `title` varchar(1000) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` int DEFAULT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `uptime` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `account_id`, `title`, `code`, `status`, `date`, `uptime`) VALUES
(1, 1, 'NCE 1', 'CLS/22/375971D', 1, '2022-07-20 08:23:19.221659', '2022-10-31 17:21:57.361136'),
(2, 1, 'NCE 2', 'CLS/22/80E235', 1, '2022-07-20 08:24:24.963640', '2022-10-31 18:41:14.886743'),
(4, 1, 'Level 300', 'FUD/CLS/001', 3, '2022-07-27 01:16:46.250176', '2022-11-26 05:44:55.631810'),
(7, 0, 'Level 200', 'KSP/22/518BDED', 1, '2022-10-29 09:32:58.085967', '2022-11-26 05:43:32.775208'),
(8, 0, 'Level 100', 'KSP/22/805C98', 1, '2022-10-31 17:12:51.181377', NULL),
(9, 0, 'NCE 3', 'CLS/22/11784FB', 1, '2022-10-31 18:41:23.118387', NULL),
(10, 0, 'ND 1', 'CLS/22/726D584', 1, '2022-10-31 18:41:29.756181', NULL),
(11, 0, 'ND 2', 'CLS/22/190ABAD', 1, '2022-10-31 18:41:34.115199', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `title`, `code`, `status`) VALUES
(1, 'Cyber Security', 'KSP/22/593346', 1),
(3, 'Software Engineering', 'KSP/22/1535315', 1),
(4, 'Information Technology', 'KSP/22/3192EC9', 1),
(5, 'Video Editing', 'CRS/22/7089182', 1),
(6, 'Graphics Design', 'CRS/22/1884B86', 1),
(7, 'Cryptography', 'CRS/22/202740E', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `title`, `code`, `status`) VALUES
(1, 'Software Engineering', 'KSP/22/162D2CA', 1),
(2, 'Information Technology', 'KSP/22/131E68D', 1),
(4, 'Video Editing', 'DPT/22/65313C8', 1),
(5, 'Graphics Design', 'DPT/22/3066D76', 1),
(6, 'Cryptography', 'DPT/22/5909405', 1),
(7, 'Cyber Security', 'DPT/22/653144D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `faculty_id` int NOT NULL,
  `facultyTitle` varchar(100) NOT NULL,
  `facultyCode` varchar(100) NOT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`faculty_id`, `facultyTitle`, `facultyCode`, `status`) VALUES
(1, 'Computer Sciences', 'KSP/22/1687047', 1),
(2, 'Engineering', 'KSP/22/287889F', 1),
(4, 'Life Sciences', 'FCT/22/2703CDB', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `student_id`, `picture`, `description`, `created_at`, `updated_at`) VALUES
(1, 9, 'uploads/logo.png', 'scbcscscbscscbscscscsbcs c scbscbcbs', '2024-09-13 19:13:26', '2024-09-13 19:13:26'),
(2, 9, 'uploads/logo.png', 'scbcscscbscscbscscscsbcs c scbscbcbs', '2024-09-13 19:14:29', '2024-09-13 19:14:29'),
(3, 9, 'uploads/1717428061431.jpg', 'scbcscscbscscbscscscsbcs c scbscbcbs', '2024-09-13 20:15:38', '2024-09-13 20:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` int NOT NULL,
  `date` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `uptime` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `title`, `status`, `date`, `uptime`) VALUES
(1, '2018/2019', 1, '2022-10-31 18:11:57.125820', '2022-10-31 18:15:58.481703'),
(3, '2019/2020', 1, '2022-10-31 18:16:07.944359', NULL),
(4, '2020/2021', 1, '2022-10-31 18:16:17.739952', NULL),
(5, '2021/2022', 1, '2022-10-31 18:16:23.025850', NULL),
(6, '2022/2023', 1, '2022-10-31 18:16:31.679796', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int NOT NULL,
  `regnum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gender` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `state` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lga` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `level` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `faculty` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `department` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `picture` varchar(10000) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `sclass_id` int NOT NULL,
  `student_id` int NOT NULL,
  `class_id` int NOT NULL,
  `session` varchar(100) NOT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`sclass_id`, `student_id`, `class_id`, `session`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 8, '2021/2022', 1, '2022-11-26 00:32:40.070057', '2022-11-26 05:45:59.465287'),
(2, 7, 7, '2021/2022', 1, '2022-11-26 00:50:49.579629', '2022-11-26 05:45:29.846292');

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE `student_courses` (
  `scourse_id` int NOT NULL,
  `sclass_id` int NOT NULL,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL,
  `semester` varchar(100) NOT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`scourse_id`, `sclass_id`, `student_id`, `course_id`, `semester`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 7, 6, '1st Semester', 1, '2022-11-26 05:18:21.910795', NULL),
(6, 2, 7, 7, '1st Semester', 1, '2022-11-26 05:27:37.358487', NULL),
(7, 2, 7, 5, '1st Semester', 1, '2022-11-26 05:27:45.599079', NULL),
(8, 2, 7, 4, '1st Semester', 1, '2022-11-26 05:27:55.931154', NULL),
(9, 2, 7, 3, '1st Semester', 1, '2022-11-26 05:28:07.314897', NULL),
(10, 2, 7, 1, '2nd Semester', 1, '2022-11-26 05:28:20.464736', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`sclass_id`);

--
-- Indexes for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`scourse_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `faculty_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `sclass_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_courses`
--
ALTER TABLE `student_courses`
  MODIFY `scourse_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
