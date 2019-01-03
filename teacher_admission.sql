-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 08:25 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jayschool_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher_admission`
--

CREATE TABLE `teacher_admission` (
  `application_id` int(11) NOT NULL,
  `acknowledgement_no` text,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `post_for` varchar(20) DEFAULT NULL,
  `subject_1` varchar(20) DEFAULT NULL,
  `subject_2` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile_no` bigint(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `religion` varchar(30) DEFAULT NULL,
  `caste` text,
  `community_category` varchar(5) DEFAULT NULL,
  `aadhar_no` bigint(20) DEFAULT NULL,
  `pan_no` varchar(11) DEFAULT NULL,
  `nationality` text,
  `marital_status` varchar(20) DEFAULT NULL,
  `driving_license_no` text,
  `blood_group` text,
  `resident_address` text,
  `permanent_address` text,
  `father_name` varchar(30) DEFAULT NULL,
  `father_occupation` varchar(30) DEFAULT NULL,
  `mother_name` varchar(30) DEFAULT NULL,
  `mother_occupation` varchar(30) DEFAULT NULL,
  `date_of_marriage` date DEFAULT NULL,
  `spouse_name` varchar(30) DEFAULT NULL,
  `spouse_job_transferrable` varchar(30) DEFAULT NULL,
  `spouse_mobile` bigint(20) DEFAULT NULL,
  `spouse_qualification` varchar(20) DEFAULT NULL,
  `spouse_profession` varchar(30) DEFAULT NULL,
  `spouse_designation` varchar(30) DEFAULT NULL,
  `spouse_organization` varchar(30) DEFAULT NULL,
  `children_information` text,
  `highest_qualification` varchar(30) DEFAULT NULL,
  `ed_tech` varchar(5) DEFAULT NULL,
  `details_highschool` text,
  `details_inter` text,
  `details_graduation` text,
  `details_post_graduation` text,
  `details_mphil` text,
  `details_phd` text,
  `details_bed` text,
  `details_med` text,
  `details_ctet` text,
  `details_other` text,
  `years_of_work_experience` decimal(10,0) DEFAULT NULL,
  `experience_details` text,
  `lang_speak` text,
  `lang_read` text,
  `lang_write` text,
  `award_certification` text,
  `proficiency_computer` text,
  `non_academic_interest` text,
  `reference` text,
  `description` text,
  `criminal_conviction` varchar(5) DEFAULT NULL,
  `work_rights` text,
  `cover_letter` text,
  `photo` text,
  `resume` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher_admission`
--
ALTER TABLE `teacher_admission`
  ADD PRIMARY KEY (`application_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher_admission`
--
ALTER TABLE `teacher_admission`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
