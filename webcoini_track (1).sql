-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2017 at 11:25 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webcoini_track`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userphoto` varchar(3000) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `userphoto`, `email`) VALUES
(2, 'admin', 'admin', 'background_spice.pngvedio_uploadWebcoinInfotech-logo.pngWebcoinInfotech-logo.pngvedio_uploadWebcoinInfotech-logo.pngWebcoinInfotech-logo.png7_80.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_comment`
--

CREATE TABLE IF NOT EXISTS `admin_comment` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `tutor_id` varchar(255) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `tutor_id` varchar(255) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `tutor_id`, `school_id`, `admin_id`, `date`, `time1`) VALUES
(1, 'ttttt', 'admin@admin.com', '', '', '', '2017/03/14', '12:51:19'),
(2, 'ttrt', 'admin@admin.com', '', '', '', '2017/03/14', '12:51:25'),
(3, '543535353453', 'admin@admin.com', '', '', '', '2017/03/14', '12:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursename`, `user_id`) VALUES
(1, 'Course', ''),
(2, 'Course 1', ''),
(3, 'Course 2', ''),
(4, 'Course 3', ''),
(5, 'Course 4', '');

-- --------------------------------------------------------

--
-- Table structure for table `docfile`
--

CREATE TABLE IF NOT EXISTS `docfile` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `datetime` varchar(2255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `docfile`
--

INSERT INTO `docfile` (`id`, `filename`, `user_id`, `datetime`, `status`) VALUES
(1, 'praja mandal.pdf', 'admin@admin.com', '2017/03/14 01:00:45pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `location_info`
--

CREATE TABLE IF NOT EXISTS `location_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cartridder_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`latitude`,`longitude`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(255) NOT NULL,
  `school-Id` varchar(225) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `userphoto` varchar(4000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Roll_No` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Principal` varchar(255) NOT NULL,
  `Seceretary` varchar(233) NOT NULL,
  `Contact_Email` varchar(255) NOT NULL,
  `totalPlacement` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `last_date` varchar(255) NOT NULL,
  `Teacher` varchar(255) NOT NULL,
  `Level` varchar(255) NOT NULL,
  `Communication` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `userphoto`, `email`, `password`, `Roll_No`, `Name`, `Address`, `Phone`, `Principal`, `Seceretary`, `Contact_Email`, `totalPlacement`, `start_date`, `last_date`, `Teacher`, `Level`, `Communication`, `Message`) VALUES
(1, '../profile/NoPhotoIcon.gif7_80.png', 'mahendra4@webcoin.in', '12345', '##1', 'mahendra singh', '5757', '665654654', 'mahesh', 'mahi', '', '654', '656', '65465', '767', '6765', 'Walk', '767'),
(2, '../profile/NoPhotoIcon.gif7_80.png', 'mahendra6@webcoin.in', '12345', '##2', 'mahendra', '56655', '6565656', 'mahesh', 'mahi', '', '655', '65', '656', '6565', '66', 'Walk', '6');

-- --------------------------------------------------------

--
-- Table structure for table `student_allocate`
--

CREATE TABLE IF NOT EXISTS `student_allocate` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `placement` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_status` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_address` varchar(255) NOT NULL,
  `principal` varchar(255) NOT NULL,
  `secretary` varchar(255) NOT NULL,
  `school_contact` varchar(255) NOT NULL,
  `school_email` varchar(255) NOT NULL,
  `class_teacher` varchar(255) NOT NULL,
  `class_level` varchar(255) NOT NULL,
  `supervisor_1` varchar(255) NOT NULL,
  `supervisor_1_address` varchar(255) NOT NULL,
  `supervisor_2` varchar(255) NOT NULL,
  `supervisor_2_address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `placement_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student_allocate`
--

INSERT INTO `student_allocate` (`id`, `placement`, `student_id`, `course`, `fname`, `lname`, `stu_email`, `stu_status`, `roll_no`, `type`, `school_name`, `school_address`, `principal`, `secretary`, `school_contact`, `school_email`, `class_teacher`, `class_level`, `supervisor_1`, `supervisor_1_address`, `supervisor_2`, `supervisor_2_address`, `status`, `placement_date`) VALUES
(1, '2', '##2', 'Course 1', 'mahendra', 'baghel', 'admin@admin.com', 'Confirmed', '##1', '', 'mahendra singh', '5757', 'mahesh', 'mahi', '665654654', 'mahendra4@webcoin.in', '767', '6765', 'mahendra singh', '6546r', 'mahendra singh', '6546r', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `userphoto` varchar(5000) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `travel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `userphoto`, `fname`, `lname`, `address`, `phone`, `travel`, `email`, `password`, `msg`, `type`) VALUES
(1, '../profile/NoPhotoIcon.gif7_80.png', 'mahendra singh', 'baghel', '6546r', '6565656', 'Van', 'mahendra6@webcoin.in', '12345', '4', 'Tutor'),
(2, '../profile/NoPhotoIcon.giffill.gif', 'mahendra singh', 'baghel', '645ertryr', '6565656', 'Van', 'mahendra1@webcoin.in', '12345', '546546', 'University Tutor');

-- --------------------------------------------------------

--
-- Table structure for table `twitter`
--

CREATE TABLE IF NOT EXISTS `twitter` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `image` varchar(266) NOT NULL,
  `followers` varchar(255) NOT NULL,
  `follows` varchar(255) NOT NULL,
  `update_date` varchar(255) NOT NULL,
  `scote` varchar(255) NOT NULL,
  `suc_rate` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `userphoto` varchar(4000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(244) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `rg_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `travel` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userphoto`, `email`, `password`, `fname`, `lname`, `course`, `phone`, `rg_no`, `address`, `travel`, `status`) VALUES
(1, '../profile/NoPhotoIcon.gifChrysanthemum.jpg', 'mahendra@webcoin.in', '12345', 'mahendra singh', 'baghel', 'Course 1', '6565656', '##1', '5443534645', '65654', ''),
(2, '../profile/NoPhotoIcon.gifASUSZENSELFIE31.png', 'admin@admin.com', '12345', 'mahendra', 'baghel', 'Course 1', '776767657', '##2', '6565', '76576', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` int(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`username`,`password`,`type`),
  KEY `create_time` (`create_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE IF NOT EXISTS `visit` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `visit` varchar(255) NOT NULL,
  `visit1` varchar(255) NOT NULL,
  `visit2` varchar(255) NOT NULL,
  `visit3` varchar(255) NOT NULL,
  `visit4` varchar(255) NOT NULL,
  `tutor_id` varchar(255) NOT NULL,
  `visit_date` varchar(255) NOT NULL,
  `placement` varchar(2545) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_status` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_address` varchar(255) NOT NULL,
  `principal` varchar(255) NOT NULL,
  `secretary` varchar(255) NOT NULL,
  `school_contact` varchar(255) NOT NULL,
  `school_email` varchar(255) NOT NULL,
  `super` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
