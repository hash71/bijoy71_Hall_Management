-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2014 at 07:08 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bijoy`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE IF NOT EXISTS `allocation` (
  `id` int(11) NOT NULL,
  `room` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `seat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`room`,`seat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `dname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `dname` (`dname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dname`) VALUES
('Accounting & Information Systems'),
('Anthropology'),
('Applied Chemistry & Chemical Engineering'),
('Applied Physics Electronics and Communication Engineering'),
('Arabic'),
('Banking and Insurance'),
('Bengali'),
('Biochemistry and Molecular Biology'),
('Biomedical Physics & Technology'),
('Botany'),
('Ceramics'),
('Chemistry'),
('Clinical Pharmacy and Pharmacology'),
('Clinical Psychology'),
('Computer Science and Engineering'),
('Crafts'),
('Criminology'),
('Development Studies'),
('Disaster Science and Management'),
('Drawing and Painting'),
('Economics'),
('Educational and Counselling Psychology'),
('English'),
('Finance'),
('Fisheries'),
('Genetic Engineering and Bio-Technology'),
('Geography & Environment'),
('Geology'),
('Graphic Design'),
('History'),
('History of Art'),
('Information Science & Library Management'),
('Institute of Business Administration'),
('Institute of Disaster Management and Vulnerability Studies'),
('Institute of Education and Research (IER)'),
('Institute of Energy'),
('Institute of Health Economics'),
('Institute of Information Technology'),
('Institute of Leather Engineering and Technology'),
('Institute of Modern Languages'),
('Institute of Nutrition and Food Science'),
('Institute of Social Welfare and Research'),
('Institute of Statistical Research and Training'),
('International Business'),
('International Relations'),
('Islamic History & Culture'),
('Islamic Studies'),
('Law'),
('Linguistics'),
('Management Information Systems'),
('Management Studies'),
('Marketing'),
('Mass Communication and Journalism'),
('Mathematics'),
('Microbiology'),
('Music'),
('Nuclear Engineering'),
('Oceanography'),
('Oriental Art'),
('Pali & Buddist Studies'),
('Peace and Conflict Studies'),
('Persian Language & Literature'),
('Pharmaceutical Chemistry'),
('Pharmaceutical Technology'),
('Philosophy'),
('Physics'),
('Political Science'),
('Population Sciences'),
('Printmaking'),
('Psychology'),
('Public Administration'),
('Sanskrit'),
('Sculpture'),
('Sociology'),
('Soil Water & Environment'),
('Statistics'),
('Television and Film Studies'),
('Theatre & Performance Studies'),
('Theoretical Physics'),
('Tourism and Hospitality Management'),
('Urdu'),
('Women''s and Gender Studies'),
('World Religions and Culture'),
('Zoology');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameE` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Student''s Name in English',
  `nameB` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Student''s Name in English',
  `fnameE` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Father''s Name in English',
  `fnameB` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Father''s Name in Bangla',
  `fphone` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Father''s Phone',
  `mnameE` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mother''s Name in English',
  `mnameB` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mother''s Name in Bangla',
  `mphone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mother''s Phone',
  `class` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Class',
  `year` int(4) DEFAULT NULL,
  `semester` int(4) DEFAULT NULL,
  `dept` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Department',
  `roll` int(11) NOT NULL COMMENT 'Roll No.',
  `acyear` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Academic Year',
  `regno` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Registration Number',
  `session` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Session',
  `praddress` varchar(2000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Present Address',
  `pmaddress` varchar(2000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Permanent Address',
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mobile Number',
  `bgroup` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Blood Group',
  `dob` date NOT NULL COMMENT 'DOB',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'email',
  `lgname` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Local Guardina Name',
  `lgaddress` varchar(2000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Local Guardina Address',
  `lgphone` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Local Guardina Phone',
  `icname` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Emergency Contact Name',
  `icaddress` varchar(2000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Emergency Contact Address',
  `icphone` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Emergency Contact Phone',
  `reason` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Special Reson for applying',
  `edog` date NOT NULL COMMENT 'Expected Date of Graduation or Result',
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `appno` int(11) DEFAULT NULL COMMENT 'Application Number',
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `regno` (`regno`,`session`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `mail`, `password`, `role`) VALUES
(1, 'nazmul', 'nazmul@gmail.com', '$2y$10$tlB5gsYzNWtrI86CUIyvWuVRLYmgwbc/kMUBulfMsXYCjnFdzjSBW', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
