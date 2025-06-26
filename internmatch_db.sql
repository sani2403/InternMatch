-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 07:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internmatch_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`msg_id`, `name`, `email`, `subject`, `msg`) VALUES
(7, 'Surbhi', 'sur112@gmail.com', 'hiii', 'Hello'),
(8, 'Company List', 'xyz@gmail.com', 'Get in Touch', 'Have questions or need support navigating your internship search Have questions or need support navigating your internship search');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(11) NOT NULL,
  `c_tit` varchar(100) NOT NULL,
  `c_instr_name` varchar(100) NOT NULL,
  `c_categ` varchar(100) NOT NULL,
  `c_dur` varchar(100) NOT NULL,
  `c_startd` date NOT NULL,
  `c_desp` varchar(100) NOT NULL,
  `c_req` varchar(100) NOT NULL,
  `c_ben` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_tit`, `c_instr_name`, `c_categ`, `c_dur`, `c_startd`, `c_desp`, `c_req`, `c_ben`) VALUES
(1, 'Postman API Fundamentals Student Expert', 'Postman', 'API', 'Self Placed', '0000-00-00', '', '', ''),
(2, 'IBM Full Stack Software Developer Professional Certificate', 'IBM ', 'Software Developer', '4 Months', '2024-09-16', 'Prepare for a career in the high-growth field of software development. In this program, you’ll learn', 'No prior requisites required ', 'You’ll learn how to build, deploy, test, run, and manage full stack cloud native applications. Techn');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `int_id` int(11) NOT NULL,
  `int_tit` varchar(100) NOT NULL,
  `int_com_name` varchar(100) NOT NULL,
  `int_loc` varchar(100) NOT NULL,
  `int_dur` varchar(100) NOT NULL,
  `int_deadine` date NOT NULL,
  `int_desp` varchar(100) NOT NULL,
  `int_req` varchar(100) NOT NULL,
  `int_ben` varchar(100) NOT NULL,
  `int_contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`int_id`, `int_tit`, `int_com_name`, `int_loc`, `int_dur`, `int_deadine`, `int_desp`, `int_req`, `int_ben`, `int_contact`) VALUES
(1, 'Flipkart Grid 6.0', 'Flipkart', 'Delhi', '6 Months', '2024-08-02', 'GRiD is Flipkart’s Flagship Engineering Campus Challenge which provides you with the opportunity to ', 'Students pursuing B.Tech/B.E./M.Tech/M.S', 'Certificates \r\nPlacement Opportunity\r\nStipend ', '+91 9533568578'),
(2, 'UNICEF Internship', 'UNICEF', 'Bangalore', 'Between 6-26 weeks', '2024-09-23', 'Our Internship Programme offers students and recent graduates the opportunity to gain direct practic', '• At least 18 years old.\r\n• Enrolled in an undergraduate, graduate or PhD programme, or have graduat', '-UNICEF provides a monthly stipend to interns. \r\n-A one-time lump sum, as a contribution towards tra', '+91 7834654795'),
(3, 'JPMorganChase Software Engineer Internship', 'JPMorganChase', 'Hyderabad ', '1 month', '2024-09-01', 'Your responsibilities will vary based on your location and team assignment. You could be developing ', 'You should have excellent coding skills, be able to manage relationships with clients, and have exce', '-Stipend\r\n-Certification', '+91 6573857382');

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `sch_id` int(11) NOT NULL,
  `sch_tit` varchar(100) NOT NULL,
  `sch_spon_name` varchar(100) NOT NULL,
  `sch_amt` varchar(100) NOT NULL,
  `sch_deadline` date NOT NULL,
  `sch_desp` varchar(100) NOT NULL,
  `sch_eligiblity` varchar(100) NOT NULL,
  `sch_contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`sch_id`, `sch_tit`, `sch_spon_name`, `sch_amt`, `sch_deadline`, `sch_desp`, `sch_eligiblity`, `sch_contact`) VALUES
(1, 'Kotak Kanya Scholarships 2024-2025', 'Kotak Mahindra Group companies and Kotak Education Foundation', 'INR 1.5 lakh* per year', '2024-09-30', 'Kotak Kanya Scholarship is a collaborative CSR Project of Kotak Mahindra Group companies and Kotak E', 'Open for meritorious girl students across India.\r\nApplicants must have scored 75% or more marks or e', '+91 7635482957'),
(2, 'Schaeffler India Social Innovator Fellowship Program 2024', 'Schaeffler India', 'INR 15 Lakh', '2024-08-20', 'The Schaeffler India Social Innovator Fellowship Program is a future-forward initiative of Schaeffle', 'Applicants should belong to the age group of 18 to 35 years (as on 1st July 2024).\r\nShould be a resi', '+91 6552847294');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_role` varchar(100) NOT NULL,
  `u_fname` varchar(100) NOT NULL,
  `u_lname` varchar(100) NOT NULL,
  `u_phone` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_country` varchar(100) NOT NULL,
  `u_language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_password`, `u_role`, `u_fname`, `u_lname`, `u_phone`, `u_email`, `u_address`, `u_country`, `u_language`) VALUES
(2067, 'surbhi_123', 'sur1418', 'admin', 'Surbhi', 'Agrawal', '9301682504', 'surbhiagrawal1112@gmail.com ', 'Qtr. No. 2/C Street No. 4B Sector 9 Bhilai', 'India', 'hindi'),
(2068, 'av_123', 'av123', 'user', 'Avika', 'Mittal', '9303412504', 'Qtr. No. 2/C ', 'Qtr. No. 2/C ', 'India', 'en');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`int_id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`sch_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `int_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5253;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2075;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
