-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 10:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rabbittask`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `doj` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `doj`) VALUES
(1, 'Abrar', 'abrarhussain12911@gmail.com', '12911', '2020-12-11 12:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `bid_id` bigint(20) NOT NULL,
  `job_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `freelancer_id` bigint(20) DEFAULT NULL,
  `job_approval` varchar(20) DEFAULT 'pending',
  `intro_of_frln` varchar(1000) DEFAULT NULL,
  `doc` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bid_id`, `job_id`, `client_id`, `freelancer_id`, `job_approval`, `intro_of_frln`, `doc`) VALUES
(21, 17, 4, 30, 'approved', 'I have seen your posted job on Freelancer and I feel very much interested to work with you. I have read the things that you want. I consider myself perfect match for this job because I am working as a Web Developer since the last four years.', '2021-03-05 16:01:40'),
(22, 17, 4, 23, 'cancel', 'I have studied in Computer Science and I can assure you that my skills will not let you down. I have learnt almost all the languages such as the languages such as HTML, CSS, JS, PHP, ASP, JSP etc. and gathered some excellent skills on Web Developing.', '2021-03-05 16:09:15'),
(23, 17, 4, 5, 'cancel', 'I believe that what will take me far from my competitors is my experience. I have been working as a web developer for the last four years and have proved myself many times. You can search work histories and their ratings to be sure. Beside that I have worked on some mobile projects too by using Objective-C and Swift.', '2021-03-05 19:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `bid_status`
--

CREATE TABLE `bid_status` (
  `bidstatus_id` bigint(20) NOT NULL,
  `project_id` bigint(20) DEFAULT NULL,
  `bsclient_id` bigint(20) DEFAULT NULL,
  `freelancer_id` bigint(20) DEFAULT NULL,
  `bid_request` varchar(10) DEFAULT 'open',
  `boj` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_status`
--

INSERT INTO `bid_status` (`bidstatus_id`, `project_id`, `bsclient_id`, `freelancer_id`, `bid_request`, `boj`) VALUES
(10, 17, 4, 5, 'close', '2021-03-05 15:50:08'),
(11, 17, 4, 23, 'close', '2021-03-05 15:50:16'),
(12, 17, 4, 30, 'close', '2021-03-05 15:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` bigint(20) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL,
  `doa` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `doa`) VALUES
(3, 'Software Development', '2021-02-05 15:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `cid` bigint(20) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cpass` varchar(100) NOT NULL,
  `cname` varchar(30) NOT NULL DEFAULT 'N/A',
  `address` varchar(40) NOT NULL DEFAULT 'N/A',
  `gender` varchar(6) NOT NULL DEFAULT 'N/A',
  `phno` varchar(13) NOT NULL DEFAULT 'N/A',
  `country` varchar(30) NOT NULL DEFAULT 'N/A',
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `pic` varchar(200) NOT NULL,
  `doj` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`cid`, `cemail`, `cpass`, `cname`, `address`, `gender`, `phno`, `country`, `status`, `pic`, `doj`) VALUES
(1, 'junaid@gmail.com', '$2y$10$UA8f/Azu9yywx8Oz43UKNuSsDGd9gBnmSr8I475317S0jsA.BtDS6', 'Junaid', 'Srinagar', 'male', '9988776655', 'india', 'approved', '../images/client1.jpg', '2021-01-14 11:05:00'),
(2, 'azan@gmail.com', '$2y$10$bGDKhT6Q8MQFCAXzfz4XHOthgrTXA.VnEk/rNyJkkP//RhsaM9aeG', 'azan bashir', 'Srinagar', 'male', '9906555555', 'India', 'approved', '../images/client2.jpg', '2021-01-14 13:26:53'),
(3, 'azhar@gmail.com', '$2y$10$3TwxppuOiZchAP1Nds9eu.5bUrV8W3ZWSVHAyKp3rGpqFpz2O8zUa', 'Azhar Shafeeq', 'Delhi', 'male', '7733449921', 'india', 'blocked', '', '2021-01-15 11:06:47'),
(4, 'basharat@gmail.com', '$2y$10$vyzvDrKnvD3ixUr24Yq6aeQhPJqIoqfVmtUGsqDovJ4wILn6pxxze', 'basharat mehdi', 'budgam', 'male', '9906775533', 'India', 'approved', '../images/client3.jpg', '2021-01-15 12:28:00'),
(9, 'Owais@gmail.com', '$2y$10$0lfU9yW.W0PDNeXNT6VKYe.vbxyyYE3lfNNlAG1zakWxUyFIGMd.W', 'Owais Amin', 'Bemina', 'male', '9906240244', 'Pakistan', 'blocked', '../images/client4.jpg', '2021-01-17 22:30:11'),
(10, 'Majid@gmail.com', '$2y$10$Gm8/HlDMPVkcj0B4V.X0rufx9feddPvpuVw55Y1QO60C6KLMBirjm', 'Majid Ali', 'Magam', 'male', '9906123456', 'England', 'blocked', '../images/client5.jpg', '2021-01-17 22:37:18'),
(11, 'ubaid@gmail.com', '$2y$10$Yuqfoixw8l.lGI/dYNqHC.txU2GGmvBydhEJJER.XZnbFSE81PD.q', 'ubaid allaie', 'Srinagar', 'male', '9907765537', 'India', 'approved', '../images/client6.jpg', '2021-01-17 22:47:54'),
(12, 'hamid@gmail.com', '$2y$10$SL0qgkZiJ0xM42oxYhjzbORA3Cw0271gCBo6i.HOduwl.P7Ihj8bm', 'Hamid Abbass', 'Magam', 'male', '9906555555', 'India', 'approved', '../images/client7.jpg', '2021-01-17 23:06:27'),
(13, 'mehdi@gmail.com', '$2y$10$LRP3c0ZIQJYEPwaiyEV0O.grzNy41C9.i3EBPi.X3/uSy39mPxaYq', 'Mehdi Ali', 'Bemina', 'male', '9906240244', 'India', 'pending', '../images/client8.jpg', '2021-01-17 23:10:15'),
(14, 'abrarali@gmail.com', '$2y$10$7aUiLf0Ck8O1XkQULQI3rO3CVFXhuEXL1qGfmL7o8nmJAJeg.DvYa', 'abrar ali', 'sopore', 'male', '9906374823', 'Bangladesh', 'approved', '../images/client9.jpg', '2021-01-17 23:15:02'),
(15, 'azanazan@gmail.com', '$2y$10$XoPQ82Exn0HE25l5.1BTo.SjdLoS54Vm2JAfdY1LZK3tmk5/7cCS.', 'azan azan', 'srinagar', 'male', '9906555555', 'England', 'approved', '../images/client10.jpg', '2021-01-17 23:23:02'),
(16, 'Akhtar@gmail.com', '$2y$10$3gilA53eGFx7gVTA9KpDiuklEFSKTTbrttq3E.kdPj829M1aq/spK', 'akhtar ahmad', 'budgam', 'male', '7006382536', 'India', 'approved', '../images/client11.jpg', '2021-01-17 23:27:00'),
(17, 'mohd@gmail.com', '$2y$10$/V.1Os4944dric.Tzwk/EulebUmDrGu6CLG7DS8yU4bf8OX8rndrS', 'Mohammad    Ishfaq', 'Lahore', 'male', '6647329377', 'pakistan', 'approved', '../images/client13.jpg', '2021-01-17 23:32:12'),
(18, 'taseer@gmail.com', '$2y$10$jtpLK83HF2XOosnuQ9Q6Eev6wU/99iBxA6LKxx9jKKf7ywGAlWfIK', 'Taseer', 'Srinagar', 'male', '9906240244', 'India', 'pending', '../images/client12.jpg', '2021-01-18 12:37:44'),
(23, 'naveedaliforever@gmail.com', '$2y$10$xi8Ws1g97PqQQjlmBjCAbOXFgPa6mn35Wl.6FlcIoOdxOeLimUrs2', 'Zameer ul Amin', 'Punjab', 'male', '3427863549', 'Pakistan', 'approved', '../images/client14.jpg', '2021-02-09 16:56:45'),
(26, 'shaikhaadil00@gmail.com', '$2y$10$bqJQlVAYIecISfpsARECj.jdsJRMIOWQYB9GHU0B392CBJhoVoT.S', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'blocked', '', '2021-02-10 13:06:14'),
(27, 'hamidabs@gmail.com', '$2y$10$fQefG0Dw647hrtwkc.pl0utrJdgAe2dNfx5xh1OCiNvRaGesFhudO', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'pending', '', '2021-04-11 20:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contract_id` bigint(20) NOT NULL,
  `project_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `freelancer_id` bigint(20) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `budget` varchar(20) DEFAULT NULL,
  `files` varchar(500) NOT NULL,
  `payment` varchar(20) DEFAULT 'Not Paid',
  `progress` varchar(5) DEFAULT '0',
  `project_status` varchar(15) DEFAULT 'incomplete',
  `assign` varchar(5) NOT NULL DEFAULT 'no',
  `deadline` varchar(50) NOT NULL,
  `delivery_date` datetime NOT NULL,
  `date_of_contract` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`contract_id`, `project_id`, `client_id`, `freelancer_id`, `duration`, `budget`, `files`, `payment`, `progress`, `project_status`, `assign`, `deadline`, `delivery_date`, `date_of_contract`) VALUES
(4, 17, 4, 30, 7, '12', '', 'Not Paid', '0', 'incomplete', 'no', '', '0000-00-00 00:00:00', '2021-03-05 19:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, '	India'),
(2, 'Pakistan'),
(3, '	United States'),
(4, '	Russia'),
(5, '	Mexico'),
(6, 'Japan'),
(7, '	Philippines'),
(8, 'Germany'),
(9, 'Thailand'),
(10, '	France'),
(11, '	Italy'),
(12, '	Spain'),
(13, 'South Korea'),
(14, '	Hungary'),
(16, '	Hungary'),
(17, 'Bangladesh'),
(18, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `freelancers`
--

CREATE TABLE `freelancers` (
  `fid` bigint(20) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `fpass` varchar(100) NOT NULL,
  `fname` varchar(40) NOT NULL DEFAULT 'N/A',
  `address` varchar(50) NOT NULL DEFAULT 'N/A',
  `phone` varchar(13) NOT NULL DEFAULT 'N/A',
  `qualification` varchar(20) NOT NULL DEFAULT 'N/A',
  `gender` varchar(6) NOT NULL DEFAULT 'N/A',
  `expertise` varchar(30) NOT NULL DEFAULT 'N/A',
  `pic` varchar(100) NOT NULL DEFAULT 'N/A',
  `prjt_completed` int(11) NOT NULL DEFAULT 0,
  `working_prjt` int(11) NOT NULL DEFAULT 0,
  `prjt_notcompleted` int(11) NOT NULL DEFAULT 0,
  `category` varchar(50) NOT NULL DEFAULT 'N/A',
  `sub_category` varchar(50) NOT NULL DEFAULT 'N/A',
  `country` varchar(30) NOT NULL DEFAULT 'N/A',
  `amount_earned` varchar(20) NOT NULL DEFAULT 'Rs0',
  `doj` datetime DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancers`
--

INSERT INTO `freelancers` (`fid`, `femail`, `fpass`, `fname`, `address`, `phone`, `qualification`, `gender`, `expertise`, `pic`, `prjt_completed`, `working_prjt`, `prjt_notcompleted`, `category`, `sub_category`, `country`, `amount_earned`, `doj`, `status`) VALUES
(4, 'tariq@gmail.com', '$2y$10$j3oq4PHZrhYcMJfQBebjEeYdcmteEk.DNjnjBUpl9Yz469FWiRoHG', 'Tariq Ahmad', 'Srinagar', '9906746318', 'Msc IT', 'Male', 'Full Stack Developer', 'images/freelancer1.jpg', 0, 0, 0, 'Software Development', 'Game Development', 'India', 'Rs0', '2021-02-07 14:27:29', 'approved'),
(5, 'Adnan@gmail.com', '$2y$10$aowHwFcYzyMlwNf435KDKuJDdIFUtCJLgzupd.xMVGxAndZconQzi', 'Adnan Shafi', 'Srinagar', '99882653421', 'Mca', 'on', 'Full Stack Developer', 'images/freelancer4.jpg', 0, 0, 0, 'Software Development', 'Web Development', 'India', 'Rs0', '2021-02-10 11:17:56', 'approved'),
(7, '', '$2y$10$6B2.iaG2M99steKAh0QojO4wYek/dWIhNYPYqz9m8Y9ZYd6qimIla', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 0, 0, 0, 'N/A', 'Web Development', 'N/A', 'Rs0', '2021-02-12 11:50:24', 'blocked'),
(9, 'jhik', '$2y$10$Weyn0aUDsDPfnP5qLPNUMezRM1RdMXnqEk36rg3NfnuUvBRuZ0nCK', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 0, 0, 0, 'N/A', 'Web Development', 'N/A', 'Rs0', '2021-02-12 11:51:10', 'blocked'),
(17, 'zameer@gmail.com', '$2y$10$Qx0zYMSDvVcSDEmqPFuBlepptdLqDN8LrDHU8XJcRxSunAfEVgypO', 'Zameer Ul Amin', 'Jammu', '9947582923', 'Bca', 'on', 'Full Stack Developer', 'images/freelancer3.jpg', 0, 0, 0, 'Software Development', 'Game Development', 'India', 'Rs0', '2021-02-13 15:37:41', 'approved'),
(18, 'john@gmail.com', '$2y$10$bZRkbWih.DxZeYU.weD9ZOnxYlmwZfdhzymZAb1DiaBDl8p0QR0Ie', 'John Smilga', 'Los Angeles', '983456183654', 'Phd ', 'Male', 'Front End Developer', 'images/124789302291.jpg', 0, 0, 0, 'Software Development', 'Ecommerce Development', 'America', 'Rs0', '2021-02-28 16:03:00', 'approved'),
(19, 'Niyamat@gmail.com', '$2y$10$RIXFOJc73hQkUWaaYP6.VuZs50b3HDTIKvxAif95haAzgYvIzw6VO', 'Niyamat Ali', 'Chandigarh', '53628453678', 'Bca', 'Male', 'Full Stack Developer', 'images/73268652720.jpg', 0, 0, 0, 'Software Development', 'Ecommerce Development', 'India', 'Rs0', '2021-03-02 14:14:43', 'approved'),
(20, 'hifazat@gmail.com', '$2y$10$.at6qnlYDf5WnbFiJKElxuhWhCpP9A7m6dWinMZpfZyHjKsVe5.9K', 'Mohammad Hifazat', 'Delhi', '8374882356', 'Msc IT', 'Male', 'Front End Developer', 'images/182011206611.jpg', 0, 0, 0, 'Software Development', 'Ecommerce Development', 'India', 'Rs0', '2021-03-02 14:17:37', 'approved'),
(21, 'rishi@gmail.com', '$2y$10$4ul/bMx1mFQGuSglVFu/ReYZZ52fNf.9mqV9TDGPBMDwaoUX/f/XG', 'Rishi Kumar', 'Banglore', '8854273953', 'BE In Computers', 'Male', 'Back End Developer', 'images/155276294317.jpg', 0, 0, 0, 'Software Development', 'Mobile App Development', 'India', 'Rs0', '2021-03-02 14:21:00', 'approved'),
(22, 'vivek@gmail.com', '$2y$10$do9cTBueCSggVAZhrrHlpODVuoa1eBdAa4eN0cXIz8BmlUDkerDHK', 'Vivek Thapa', 'Bihar', '7766943567', 'Bsc IT', 'Male', 'Front End Developer', 'images/freelancer2.jpg', 0, 0, 0, 'Software Development', 'Web & Mobile Design', 'India', 'Rs0', '2021-03-02 14:24:49', 'approved'),
(23, 'uzair@gmail.com', '$2y$10$n3QsC5lSP/9nbPUFDWUIOui/Hb1SBhRN2Lrc41W3Ab4XvMUDLF7PC', 'Uzair Bashir', 'Karachi', '9274830076', 'Phd ', 'Male', 'Full Stack Developer', 'images/2744056211.jpg', 0, 0, 0, 'Software Development', 'Web Development', 'Pakistan', 'Rs0', '2021-03-02 19:20:30', 'approved'),
(24, 'tehseen@gmail.com', '$2y$10$i1yPjW4cfAV4r.RU7Zi3su4O8iqkO//PpmqivJFmj4YW8jKLxTvey', 'Tehneen', 'Haryana', '9935627283', 'Bca', 'Male', 'Full Stack Developer', 'images/237814349.jpg', 0, 0, 0, 'Software Development', 'Desktop Software Development', 'India', 'Rs0', '2021-03-04 10:38:36', 'approved'),
(25, 'jose@gmail.com', '$2y$10$i60HiADSA9gM1cP/.oyVsOjLNDPZ5OEayLP9FGxXbOdBwNTS4Ddyq', 'Jose Portilla', 'Juneau Alaska', '6755438723', 'Msc IT', 'Male', 'Front End Developer', 'images/1135671526.jpg', 0, 0, 0, 'Software Development', 'Desktop Software Development', 'America', 'Rs0', '2021-03-04 10:43:20', 'approved'),
(26, 'phil@gmail.com', '$2y$10$7S7B/14I62iDcJUDxvvGWeQD/eCllcGsS5vPGLTA9ZCXaNHz6TuRu', 'Phil Ebiner', 'Moscow', '8765997863', 'Phd in Computer Scie', 'Male', 'Back End Developer', 'images/15449653329.jpg', 0, 0, 0, 'Software Development', 'Desktop Software Development', 'Moscow', 'Rs0', '2021-03-04 10:50:16', 'approved'),
(27, 'ben@gmail.com', '$2y$10$JjYfM7uM3bnv8le1h/txZO2eM27ufkszCCBtcjKdeY5hfeBuRHwqe', 'Ben Tristem', 'Pretoria', '8876453267', 'Mca', 'Male', 'Expertise', 'images/185791113055.jpg', 100, 45, 100, 'Software Development', 'Mobile App Development', 'South Aferica', '1000', '2021-03-04 10:53:57', 'approved'),
(28, 'daragh@gmail.com', '$2y$10$mvOmYeXsXGCS4vJJMXsp8OrIaAVIxblkRoboOOmoYrnqCGFq/CMnK', 'Daragh Walsh', 'Bangkok', '67542121345', 'BE In Computer Scien', 'Male', 'Front End Developer', 'images/6058066290.jpg', 0, 0, 0, 'Software Development', 'Web & Mobile Design', 'Thailand', 'Rs0', '2021-03-04 11:02:51', 'approved'),
(29, 'kirill@gmail.com', '$2y$10$ui4oFnXgCDvWMZJo1MgIbu73XSBmZWj7Kna0ySJIUj.iV4UWQhKrW', 'Kirill Eremenko', 'Seoul', '6790009785', 'Mca', 'Male', 'Front End Developer', 'images/18694620879.jpg', 0, 0, 0, 'Software Development', 'Web & Mobile Design', 'South Korea', 'Rs0', '2021-03-04 11:07:04', 'approved'),
(30, 'colt@gmail.com', '$2y$10$D/nAbl5gdn4b3zZtNvZosu2kqMGszCeBYp4vMgyCfqvS5RMIUMoYe', 'Colt Steele', 'Moscow', '9906372637', 'Phd', 'male', 'Full Stack Developer', 'images/145911246179.jpg', 342, 300, 675, 'Software Development', 'Web Development', 'Russia', 'Rs12000', '2021-03-04 12:09:52', 'approved'),
(31, 'tim@gmail.com', '$2y$10$P3MRzQqYO70mSkw4U8x6h.Bm6HcOQkRshMK64IMufkh4BWgzIEuO6', 'Tim Buchalka', 'Paris', '5644389742', 'Bca', 'Male', 'Full Stack Developer', 'images/19849651960.jpg', 0, 0, 0, 'Software Development', 'Game Development', 'France', 'Rs0', '2021-03-04 12:21:23', 'approved'),
(32, 'rafeeq@gmail.com', '$2y$10$MlGvafKMkstCRS3I3TdrOOjbQASJbLqkyy4j2v9wfVXksGFFnkn7W', 'Rafeeq Ahmad ', 'Karachi', '6574890237', 'Mca', 'Male', 'Full Stack Developer', 'images/15193425528.jpg', 0, 0, 0, '', 'Android Development', 'Pakistan', 'Rs0', '2021-03-13 17:00:54', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `pid` bigint(20) NOT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `project_category` varchar(50) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `budget` varchar(20) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `project_subcategory` varchar(50) DEFAULT NULL,
  `is_active` int(11) DEFAULT 0,
  `pstatus` varchar(20) NOT NULL DEFAULT 'pending',
  `db` varchar(50) DEFAULT NULL,
  `dop` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`pid`, `project_name`, `project_category`, `client_id`, `duration`, `budget`, `details`, `project_subcategory`, `is_active`, `pstatus`, `db`, `dop`) VALUES
(3, 'Website', 'Software Devlopment', 3, 2, '18000', 'Website for my private coaching Institute', 'Web devlopment', 0, 'pending', 'my sql', '0000-00-00'),
(13, 'COVID-19 Online Test Results & availability bookin', 'Software Devlopment', 2, 5, '100000', 'Online Registration System (ORS)  to link various hospitals across the country for Aadhaar based online registration and appointment system, where counter based OPD registration and appointment system through Hospital Management Information System (HMIS).', 'Android Development', 0, 'pending', NULL, '2021-03-02'),
(14, 'Toll Gate Application', 'Software Devlopment', 4, 3, '50000', 'Toll gate payment system assistance in lessening the over congestion that allows to manage the great rum of traffic.', 'Android Development', 0, 'pending', NULL, '2021-03-03'),
(17, 'Online Complaint Registration', 'Software Devlopment', 4, 7, '120000', 'Online complaint registration management system : street lights, water pipes leakage, rain water drainage, road.', 'Web Development', 1, 'approved', NULL, '2021-03-05'),
(18, '', 'Software Devlopment', 4, 1, '', '', '--Select Sub Category--', 0, 'blocked', NULL, '2021-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `freelancer_id` bigint(20) DEFAULT NULL,
  `review_txt` varchar(200) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `dor` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rid` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `freelancer_id` bigint(20) DEFAULT NULL,
  `review` varchar(100) DEFAULT NULL,
  `rating` varchar(1) DEFAULT NULL,
  `dor` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` bigint(20) NOT NULL,
  `sub_cat_name` varchar(100) DEFAULT NULL,
  `p_cat_id` bigint(20) DEFAULT NULL,
  `doa_sub` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `sub_cat_name`, `p_cat_id`, `doa_sub`) VALUES
(5, 'Android Development', 3, '2021-02-05 15:36:58'),
(6, 'Desktop Software Development', 3, '2021-02-05 15:37:40'),
(7, 'Game Development', 3, '2021-02-05 15:38:06'),
(8, 'Web & Mobile Design', 3, '2021-02-05 15:38:44'),
(9, 'Web Development', 3, '2021-02-05 15:39:08'),
(10, 'Ecommerce Development', 3, '2021-02-05 15:39:38'),
(11, 'Mobile App Development', 3, '2021-02-05 15:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `item_number` varchar(255) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency_code` varchar(55) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `job_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `name`, `email`, `phone`, `address`, `item_number`, `amount`, `currency_code`, `txn_id`, `payment_status`, `payment_response`, `create_at`, `job_id`, `user_id`) VALUES
(25, 'basharat mehdi', 'basharat@gmail.com', '9906746318', 'budgam', '4', 12.00, 'usd', 'txn_1IkQzCH66YQsWaFDG4ZtVUGW', 'succeeded', '{\"id\":\"ch_1IkQzBH66YQsWaFDfTk3hgZ8\",\"object\":\"charge\",\"amount\":1200,\"amount_captured\":1200,\"amount_refunded\":0,\"application\":null,\"application_fee\":null,\"application_fee_amount\":null,\"balance_transaction\":\"txn_1IkQzCH66YQsWaFDG4ZtVUGW\",\"billing_details\":{\"address\":{\"city\":null,\"country\":null,\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null},\"email\":null,\"name\":null,\"phone\":null},\"calculated_statement_descriptor\":\"Stripe\",\"captured\":true,\"created\":1619430253,\"currency\":\"usd\",\"customer\":\"cus_JNBLkI6tUfrboO\",\"description\":\"4\",\"destination\":null,\"dispute\":null,\"disputed\":false,\"failure_code\":null,\"failure_message\":null,\"fraud_details\":[],\"invoice\":null,\"livemode\":false,\"metadata\":{\"order_id\":\"4\"},\"on_behalf_of\":null,\"order\":null,\"outcome\":{\"network_status\":\"approved_by_network\",\"reason\":null,\"risk_level\":\"normal\",\"risk_score\":40,\"seller_message\":\"Payment complete.\",\"type\":\"authorized\"},\"paid\":true,\"payment_intent\":null,\"payment_method\":\"card_1IkQz9H66YQsWaFDIGmabSVs\",\"payment_method_details\":{\"card\":{\"brand\":\"visa\",\"checks\":{\"address_line1_check\":null,\"address_postal_code_check\":null,\"cvc_check\":\"pass\"},\"country\":\"US\",\"exp_month\":1,\"exp_year\":2022,\"fingerprint\":\"SpQdguWEI2qZjnVz\",\"funding\":\"credit\",\"installments\":null,\"last4\":\"4242\",\"network\":\"visa\",\"three_d_secure\":null,\"wallet\":null},\"type\":\"card\"},\"receipt_email\":null,\"receipt_number\":null,\"receipt_url\":\"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1HITChH66YQsWaFD\\/ch_1IkQzBH66YQsWaFDfTk3hgZ8\\/rcpt_JNBL2eCHn1mK31FK1gYDxHfxDJ3uk3g\",\"refunded\":false,\"refunds\":{\"object\":\"list\",\"data\":[],\"has_more\":false,\"total_count\":0,\"url\":\"\\/v1\\/charges\\/ch_1IkQzBH66YQsWaFDfTk3hgZ8\\/refunds\"},\"review\":null,\"shipping\":null,\"source\":{\"id\":\"card_1IkQz9H66YQsWaFDIGmabSVs\",\"object\":\"card\",\"address_city\":null,\"address_country\":null,\"address_line1\":null,\"address_line1_check\":null,\"address_line2\":null,\"address_state\":null,\"address_zip\":null,\"address_zip_check\":null,\"brand\":\"Visa\",\"country\":\"US\",\"customer\":\"cus_JNBLkI6tUfrboO\",\"cvc_check\":\"pass\",\"dynamic_last4\":null,\"exp_month\":1,\"exp_year\":2022,\"fingerprint\":\"SpQdguWEI2qZjnVz\",\"funding\":\"credit\",\"last4\":\"4242\",\"metadata\":[],\"name\":null,\"tokenization_method\":null},\"source_transfer\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2021-04-26 09:44:11', '4', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `freelancer_id` (`freelancer_id`);

--
-- Indexes for table `bid_status`
--
ALTER TABLE `bid_status`
  ADD PRIMARY KEY (`bidstatus_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `client_id` (`bsclient_id`),
  ADD KEY `freelancer_id` (`freelancer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cemail` (`cemail`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `user_email` (`femail`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `freelancer_id` (`freelancer_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `p_cat_id` (`p_cat_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `bid_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bid_status`
--
ALTER TABLE `bid_status`
  MODIFY `bidstatus_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `cid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `contract_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `fid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job_post` (`pid`) ON DELETE CASCADE,
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`cid`),
  ADD CONSTRAINT `bid_ibfk_3` FOREIGN KEY (`freelancer_id`) REFERENCES `freelancers` (`fid`);

--
-- Constraints for table `bid_status`
--
ALTER TABLE `bid_status`
  ADD CONSTRAINT `bid_status_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `job_post` (`pid`) ON DELETE CASCADE,
  ADD CONSTRAINT `bid_status_ibfk_2` FOREIGN KEY (`bsclient_id`) REFERENCES `clients` (`cid`),
  ADD CONSTRAINT `bid_status_ibfk_3` FOREIGN KEY (`freelancer_id`) REFERENCES `freelancers` (`fid`);

--
-- Constraints for table `job_post`
--
ALTER TABLE `job_post`
  ADD CONSTRAINT `job_post_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`cid`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`cid`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`freelancer_id`) REFERENCES `freelancers` (`fid`) ON DELETE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`p_cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
