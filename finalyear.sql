-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 07:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `email`, `mobile_no`, `position`, `created_at`, `updated_at`) VALUES
(1, 'rohit borse', 'rohitborse2004@gmail.com', '9527081664', 'student', '2024-03-10 08:02:35', '2024-03-10 08:02:35'),
(2, 'd.m marathe', 'dmmarathe@gmail.com', '2547862123', 'professor', '2024-03-10 08:02:35', '2024-03-10 08:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `event_tag` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `location` varchar(300) NOT NULL,
  `organizer` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL,
  `register_from` date NOT NULL,
  `register_before` date NOT NULL,
  `register_end_date` date NOT NULL,
  `register_end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_type`, `event_tag`, `description`, `location`, `organizer`, `start_date`, `start_time`, `end_date`, `end_time`, `register_from`, `register_before`, `register_end_date`, `register_end_time`) VALUES
(6, 'conference', 'Conference', 'kjnsnjs', 'this is research paper conference', 'imrd shirpur', 2, '2024-04-01', '15:00:00', '2024-04-02', '15:00:00', '2024-03-30', '2024-03-31', '2024-03-31', '15:00:00'),
(9, 'google event', 'Hackathon', 'google', 'this is event organized by rcp imrd with collaburation with google.', 'seminar hall', 0, '2024-04-10', '20:00:00', '2024-04-10', '20:00:00', '2024-04-04', '2024-04-06', '2024-04-06', '20:00:00'),
(15, 'afads', 'Hackathon', 'dfdgd', 'sdfgdfgv', 'adf', 0, '2024-04-01', '21:35:00', '2024-04-01', '21:35:00', '2024-04-01', '2024-04-01', '2024-04-01', '21:36:00'),
(16, 'afads', 'Hackathon', 'dfdgd', 'sdfgdfgv', 'adf', 0, '2024-04-01', '21:35:00', '2024-04-01', '21:35:00', '2024-04-01', '2024-04-01', '2024-04-01', '21:36:00'),
(17, 'afads', 'Hackathon', 'dfdgd', 'sdfgdfgv', 'adf', 0, '2024-04-01', '21:35:00', '2024-04-01', '21:35:00', '2024-04-01', '2024-04-01', '2024-04-01', '21:36:00'),
(18, 'zsdas', 'Hackathon', 'ardff', 'sdfgvd', 'asfd', 0, '2024-04-01', '21:47:00', '2024-04-01', '21:47:00', '2024-04-01', '2024-04-01', '2024-04-01', '21:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_gallery`
--

CREATE TABLE `event_gallery` (
  `image_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `image_name` varchar(300) NOT NULL,
  `image_url` varchar(400) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_gallery`
--

INSERT INTO `event_gallery` (`image_id`, `event_id`, `image_name`, `image_url`, `created_at`) VALUES
(1, 9, 'Google Event', 'Screenshot 2024-03-09 144005.png', '2024-04-01 17:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `register_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `register_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_registration`
--

INSERT INTO `event_registration` (`register_id`, `event_id`, `name`, `email`, `mobile`, `register_at`) VALUES
(1, 6, 'rohit borse', 'rohitborse0203@gmail.com', '9527081664', '2024-04-01 16:03:39'),
(2, 9, 'gaurav behere', 'gauravbehere58@gmail.com', '9607549517', '2024-04-01 16:03:39'),
(3, 6, 'coding Rohit', 'codingwithrb@gmail.com', '123456987', '2024-04-01 16:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `event_snapshot`
--

CREATE TABLE `event_snapshot` (
  `photo_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `photo_tag` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `meeting_id` int(11) NOT NULL,
  `meet_name` varchar(200) NOT NULL,
  `meet_type` varchar(100) NOT NULL,
  `meet_duration` int(11) NOT NULL,
  `meet_location` varchar(400) NOT NULL,
  `meet_org` varchar(200) NOT NULL,
  `meet_agenda` varchar(500) NOT NULL,
  `meet_notes` varchar(500) NOT NULL,
  `meet_link` varchar(300) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`meeting_id`, `meet_name`, `meet_type`, `meet_duration`, `meet_location`, `meet_org`, `meet_agenda`, `meet_notes`, `meet_link`, `start_date`, `start_time`, `end_date`, `end_time`, `created_at`, `updated_at`) VALUES
(2, 'dicussion', 'Board Meeting', 2, 'rcp seminar hall', '1', 'some discussion', 'be patient during meeting', 'https://meet.google.com/ngd-dfds-fed', '2024-03-13', '15:41:00', '2024-03-13', '15:41:00', '2024-03-11 10:12:51', '2024-03-11 10:12:51'),
(3, 'Exam Schedule', 'Faculty Meeting', 1, 'Exam Hall , RCPIMRD', 'Dr. Tushar Patel', 'This meeting conducted to discuss the exam schedule for ug department.', 'be patient while in meeting.', 'https://meet.google.com/ngd-dfds-fed', '2024-03-14', '03:00:00', '2024-03-14', '04:00:00', '2024-03-12 10:54:05', '2024-03-12 10:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `org_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `rno` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_gallery`
--
ALTER TABLE `event_gallery`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD PRIMARY KEY (`register_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `event_snapshot`
--
ALTER TABLE `event_snapshot`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `organizers`
--
ALTER TABLE `organizers`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `event_gallery`
--
ALTER TABLE `event_gallery`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_registration`
--
ALTER TABLE `event_registration`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_snapshot`
--
ALTER TABLE `event_snapshot`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organizers`
--
ALTER TABLE `organizers`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_gallery`
--
ALTER TABLE `event_gallery`
  ADD CONSTRAINT `event_gallery_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

--
-- Constraints for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD CONSTRAINT `event_registration_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

--
-- Constraints for table `event_snapshot`
--
ALTER TABLE `event_snapshot`
  ADD CONSTRAINT `event_snapshot_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
