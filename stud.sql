-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 01:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stud`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `date` date NOT NULL,
  `year` text NOT NULL,
  `work_type` text NOT NULL,
  `team` text NOT NULL,
  `detail` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `sid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `title`, `location`, `date`, `year`, `work_type`, `team`, `detail`, `name`, `sid`) VALUES
(1, 'NPTl', 'dhule', '0000-00-00', '2nd Year', '', '', 'werrsrt', 'modi_poojan', 645654546),
(2, 'social', 'dhule', '0000-00-00', '2nd Year', 'work', 'team', 'was established in 2016, with a vision of changing the narrative around leadership and management in the social sector by facilitating the creation of an entire ecosystem for Development Management. Working closely with leading social sector leaders, academicians and researchers, we have made significant progress towards creating and curating a Body of Knowledge for Development Management along with developing leadership talent for the social sector through our 1 Year Post Graduate Programme and Continuing Education Programmes.', 'modi_poojan', 645654546),
(3, 'local', 'dhule', '0000-00-00', '2nd Year', 'work', 'team', 'was established in 2016, with a vision of changing the narrative around leadership and management in the social sector by facilitating the creation of an entire ecosystem for Development Management. Working closely with leading social sector leaders, academicians and researchers, we have made significant progress towards creating and curating a Body of Knowledge for Development Management along with developing leadership talent for the social sector through our 1 Year Post Graduate Programme and Continuing Education Programmes.', 'modi_poojan', 645654546),
(4, 'C-coder exam', 'SVKM Dhule', '0000-00-00', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'C-codder fnlasdkgfsdgfdsg sdfdsf gsdfgdf  gsdfgdfgsd\r\nfd gdsfgdfgdsfgdfg dfs gdf gdsf g sdg dfgdsfg sdf gds\r\nd fgdsf gsdfgdsfgdf gdfg\r\n dfgd fsdfsgdfgrtgydfhgfh fg hd dfhghdf ghfd ghdfghdfg\r\n fdghdf ghfghfghfd ghdf gh fgh df ghfgh', 'Tilesh Deshmukh', 88888888),
(5, 'Dance Copm', 'SVKM Dhule', '2019-07-10', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'asfdsv sdgsdf gdsf gfdhgg hdf hg', 'Tilesh Deshmukh', 88888888),
(6, 'c title', 'SVKM Dhule', '2020-05-01', '2nd Year', 'Persnal Work', 'tilesh harsh saurab yogesh rohit', ' cvfcg', 'Tilesh Deshmukh', 88888888),
(7, 'Dance Copm', 'SVKM Dhule', '2020-05-30', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'sdghddhfsdf', 'Tilesh Deshmukh', 88888888),
(8, 'Dance Copm', 'SVKM Dhule', '2020-05-30', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'sdghddhfsdf', 'Tilesh Deshmukh', 88888888),
(9, 'Dance Copm', 'SVKM Dhule', '2020-05-30', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'sdghddhfsdf', 'Tilesh Deshmukh', 88888888),
(10, 'Dance Copm', 'SVKM Dhule', '2020-05-30', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'sdghddhfsdf', 'Tilesh Deshmukh', 88888888),
(11, 'Dance Copm', 'SVKM Dhule', '2020-05-30', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'sdghddhfsdf', 'Tilesh Deshmukh', 88888888),
(12, 'we', 'SVKM Dhule', '2020-05-07', '3rd Year', 'Persnal Work', 'tilesh', 'awdfasfd', 'Tilesh Deshmukh', 88888888),
(13, 'C-coder exam', 'SVKM Dhule', '2020-05-21', '3rd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'hdfhfx  sd fh dfdfx hf', 'Tilesh Deshmukh', 645654546),
(14, 'ngh', 'hjk', '2020-03-22', '4rd Year', 'Team Work', 'sanket', 'yes', 'Sanket Chaudhari', 1400217001),
(15, 'Sanket Kishor Chaudhari', 'hjk', '2020-06-10', '3rd Year', 'Persnal Work', 'sanket', 'yrjh', 'Tilesh Deshmukh', 645654546);
-- --------------------------------------------------------

--
-- Table structure for table `checking`
--

CREATE TABLE `checking` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checking`
--

INSERT INTO `checking` (`fname`, `lname`, `email`, `gender`) VALUES
('damini', 'marathe', 'damini@gmail.com', 'f'),
('tilesh', 'deshmukh', 'dtilesh@gmail.com', 'm'),
('sanket', 'deshmukh', 'sanket@gmail.com', 'm'),
('sayali', 'chaudhari', 'sayali@gmail.com', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `marks` double NOT NULL,
  `cid` text NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL,
  `path` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `sid` int(40) NOT NULL,
  `year` text NOT NULL,
  `email` text NOT NULL,
  `file` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `cname`, `sub_name`, `marks`, `cid`, `date`, `status`, `path`, `name`, `sid`, `year`, `email`, `file`, `msg`) VALUES
(70, 'NPTEL', 'IOT', 0, '101', '2020-06-10', 'runing', 'https://nptel.ac.in/', 'Tilesh Deshmukh', 645654546, '3rd Year', 'dtilesh@gmail.com', 'null', 'read'),
(71, 'NPTEL', 'ML', 0, '102', '2020-06-11', 'runing', 'https://nptel.ac.in/', 'Tilesh Deshmukh', 645654546, '3rd Year', 'dtilesh@gmail.com', 'null', 'read'),
(72, 'Spoken', 'Latex', 70, '201', '2020-06-19', 'Completed', 'https://spoken-tutorial.org/', 'Tilesh Deshmukh', 645654546, '3rd Year', 'dtilesh@gmail.com', 'tileshcertificate.JPG', 'read'),
(73, 'NPTEL', 'CAO', 0, '201', '2020-06-23', 'runing', 'https://nptel.ac.in/', 'Sanket Chaudhari', 1400217001, '3rd Year', 'sanket22499@gmail.com', 'null', 'read'),
(74, 'Coursera', 'Industry 4.0', 75, '202', '2020-06-17', 'Completed', 'https://www.coursera.org/?cartId=69140335', 'Sanket Chaudhari', 1400217001, '3rd Year', 'sanket22499@gmail.com', 'sanketcertificate.JPG', 'read'),
(75, 'Coursera', 'Python for Data Science', 90, '301', '2020-06-16', 'Completed', 'https://www.coursera.org/?cartId=69140335', 'Varsha Joshi', 1400217026, '3rd Year', 'varshasharadjoshi@gmail.com', 'varshacertificate.JPG', 'unread'),
(76, 'NPTEL', 'DBMS', 0, '304', '2020-06-17', 'runing', 'https://nptel.ac.in/', 'Varsha Joshi', 1400217026, '3rd Year', 'varshasharadjoshi@gmail.com', 'null', 'unread');


-- --------------------------------------------------------

--
-- Table structure for table `c_stud`
--

CREATE TABLE `c_stud` (
  `id` int(10) NOT NULL,
  `sid` bigint(100) NOT NULL,
  `year` text NOT NULL,
  `status` text NOT NULL,
  `select_c` varchar(100) NOT NULL,
  `e_course` text NOT NULL,
  `comp` text NOT NULL,
  `link` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `c_stud` (`id`, `sid`, `year`, `status`, `select_c`, `e_course`, `comp`, `link`, `date`) VALUES
(29, 645654546, '3rd Year', 'unok', 'NPTEL ', '', 'yes', '', '2005-06-20'),
(30, 1400217001, '3rd Year', 'unok', 'NPTEL ', '', 'yes', '', '2005-06-20'),
(31, 1400217026, '3rd Year', 'unok', 'NPTEL ', '', 'yes', '', '2005-06-20'),
(32, 1400217025, '3rd Year', 'unok', 'NPTEL ', '', 'yes', '', '2005-06-20'),
(33, 1400217017, '3rd Year', 'unok', 'NPTEL ', '', 'yes', '', '2005-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `id` int(11) NOT NULL,
  `prn` bigint(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`id`, `prn`, `name`, `email`) VALUES
(74, 21544920172, 'Tilesh Deshmukh', 'dtilesh@gmail.com'),
(75, 21544920173, 'Sanket Chaudhari', 'sanket22499@gmail.com'),
(76, 21544920175, 'Jacky Galani', 'jackiegalani40@gmail.com'),
(77, 21544920174, 'Dipali Patil', 'dbpatil959@gmail.com'),
(78, 21544920176, 'Ketan Mahajan', 'ketan664464@gmail.com'),
(79, 21544920177, 'Mohini Khedkar', 'mohinikhedkar2@gmail.com'),
(80, 21544920178, 'Varsha Joshi', 'varshasharadjoshi@gmail.com'),
(81, 21544920171, 'krushnna Baviskar', 'krushnnabaviskar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `sender` text NOT NULL,
  `sid` int(60) NOT NULL,
  `stud_name` text NOT NULL,
  `msg` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `sender`, `sid`, `stud_name`, `msg`, `status`, `date`, `time`) VALUES
(117, 'TXTLCL', 11144455, 'siddhu bhadak', 'welcome to tilesh side', 'unread', '2028-05-20', '0000-00-00 00:00:00'),
(118, 'TXTLCL', 645654546, 'Tilesh Deshmukh', 'hello', 'read', '2028-05-20', '0000-00-00 00:00:00'),
(119, 'ALERT FOR Marketing', 645654546, 'Tilesh Deshmukh', 'Pliz Completed you are runing course Marketing ', 'read', '2030-05-20', '0000-00-00 00:00:00'),
(120, 'ALERT FOR NPTl', 645654546, 'Tilesh Deshmukh', 'Pliz Completed you are runing course NPTl ', 'read', '2030-05-20', '0000-00-00 00:00:00'),
(121, 'ALERT FOR NPTl', 645654546, 'Tilesh Deshmukh', 'Pliz Completed you are runing course NPTl ', 'read', '2003-06-20', '0000-00-00 00:00:00'),
(122, 'ALERT FOR NPTl', 645654546, 'Tilesh Deshmukh', 'Pliz Completed you are runing course NPTl ', 'read', '2003-06-20', '2002-01-08 18:30:00');
-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` bigint(100) NOT NULL,
  `address` text NOT NULL,
  `bdate` date NOT NULL,
  `dept` varchar(40) NOT NULL,
  `year` text NOT NULL,
  `sid` int(50) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `number`, `address`, `bdate`, `dept`, `year`, `sid`, `email`, `pass`, `img`) VALUES
(1, 'Tilesh Deshmukh', 8308283380, ' dhule', '2020-05-13', 'Computer', '3rd Year', 645654546, 'dtilesh@gmail.com', '123456', 'IMG_20200402_001019.jpg'),
(18, 'Sanket Chaudhari', 9678658656, 'shahada', '1999-04-22', 'Computer', '3rd Year', 1400217001, 'sanket22499@gmail.com', '123', 'IMG_20190308_140826_2 (3).jpg'),
(19, 'Varsha Joshi', 9856481219, ' dhule', '1999-03-22', 'Computer', '3rd Year', 1400217026, 'varshasharadjoshi@gmail.com', '123', 'varsha.jpeg'),
(20, 'Mohini Khedkar', 6546789678, ' Dhule', '1999-04-12', 'Computer', '3rd Year', 1400217025, 'mohinikhedkar2@gmail.com', '123', 'mohini.JPG'),
(21, 'Jacky Galani', 9898484654, ' Dhule', '1999-03-14', 'Computer', '3rd Year', 1400217017, 'jackiegalani40@gmail.com', '123', 'jacky.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checking`
--
ALTER TABLE `checking`
  ADD PRIMARY KEY (`email`(100));

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_stud`
--
ALTER TABLE `c_stud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`,`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `c_stud`
--
ALTER TABLE `c_stud`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
