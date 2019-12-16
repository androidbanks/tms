-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 04:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_task`
--

CREATE TABLE `admin_task` (
  `username` varchar(50) NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_title`
--

CREATE TABLE `group_title` (
  `group_name` varchar(50) NOT NULL,
  `group_leader` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_title`
--

INSERT INTO `group_title` (`group_name`, `group_leader`) VALUES
('admin', 'admin'),
('server', 'philip'),
('computer_lab_tech', 'reintje'),
('telephone_tech', 'brian'),
('admin_tech', 'lyndon'),
('audit', ''),
('nwe', '');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `phone_contact` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `username`, `password`, `address`, `position`, `phone_contact`, `date_of_birth`, `email`) VALUES
('', 'admin', 'edge', 'admin', 'admin', '', '0000-00-00', '0'),
('Phillip Ayinomujuni', 'philip', '1234', 'server', 'leader', 'server_maintena', '0000-00-00', '0'),
('', 'amoy', '1234', 'computer_lab_tech', 'member', '', '0000-00-00', '100'),
('', 'boyit', '1234', 'computer_lab_tech', 'member', '', '0000-00-00', '60'),
('', 'alex', 'admin', 'admin', 'admin', '', '0000-00-00', '0'),
('Mangeni Joseph', 'lyndon', '1234', 'admin_tech', 'leader', 'admin_task', '0000-00-00', '0'),
('Albert Mario Baloteli', 'reintje', '1234', 'computer_lab_tech', 'leader', 'networking', '0000-00-00', '0'),
('Lutaaya Paddy', 'brian', '1234', 'telephone_tech', 'leader', 'resolve_telepho', '0000-00-00', '0'),
('', 'rex', '1234', 'telephone_tech', 'member', '', '0000-00-00', '0'),
('', 'smith', '1234', 'admin_tech', 'member', '', '0000-00-00', '0'),
('', 'bryan', '1234', 'server', 'member', '', '0000-00-00', '100'),
('', 'mendoza', '1234', 'admin_tech', 'member', '', '0000-00-00', '0'),
('', 'liberty', '1234', 'server', 'member', '', '0000-00-00', '20'),
('', 'ad', 'ad', 'computer_lab_tech', 'member', '', '0000-00-00', '0'),
('', 'uybgsdi', '22333', 'admin_tech', 'member', '', '0000-00-00', '0'),
('kizito Andrew', 'android', 'bakawa', 'nyanama', 'member', '07789009909', '1995-09-04', 'ka1@muni.ac.ug'),
('', '', '', '', '', '', '0000-00-00', ''),
('jo', 'john', 'john', 'kabowa', 'Member', '088987654', '0000-00-00', 'ka1@muni.ac.ug'),
('Basaija David', 'davido', 'davido', 'Kibuli', 'admin', '07777777', '1995-04-09', 'bd@edgetec.com');

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE `messaging` (
  `ctrl_no` int(255) NOT NULL,
  `date_send` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to_receiver` varchar(50) NOT NULL,
  `from_sender` varchar(50) NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT '0',
  `mail_subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messaging`
--

INSERT INTO `messaging` (`ctrl_no`, `date_send`, `to_receiver`, `from_sender`, `opened`, `mail_subject`, `message`) VALUES
(298, '2018-02-06 14:34:59', 'philip', 'liberty', 0, '', 'yvuhvhyuiviyvuiy'),
(297, '2018-02-06 14:34:26', 'philip', 'liberty', 0, 'agency cnt complete work i am sick ', 'sick cnt do task \r\ncan i do after my recovery ,,,,,'),
(295, '2018-02-05 20:00:43', 'brian', 'admin', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(296, '2018-02-06 11:42:33', 'brian', 'admin', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(258, '2009-10-15 18:13:45', 'brian', 'alex', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(259, '2009-10-15 18:26:19', 'amoy', 'reintje', 0, ' notification', 'Your leader give you task. Go to TASK to know your task.'),
(262, '2018-02-05 11:43:45', 'lyndon', 'admin', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(263, '2018-02-05 11:44:07', 'lyndon', 'admin', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(266, '2018-02-05 11:48:26', 'admin', 'philip', 1, 'task noted', 'thankx on progress now'),
(271, '2018-02-05 18:25:48', 'liberty', 'philip', 1, 'work in progress', 'notfy mi when u finish the task'),
(268, '2018-02-05 11:58:42', 'brian', 'admin', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(269, '2018-02-05 13:39:18', 'reintje', 'admin', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(270, '2018-02-05 18:23:32', 'philip', 'liberty', 1, 'task noted', 'i got it sir '),
(299, '2018-02-08 20:43:25', 'lyndon', 'admin', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(300, '2018-02-08 20:43:32', 'philip', 'admin', 1, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(301, '2018-02-08 20:44:54', 'admin', 'philip', 1, 'task noted sir', 'uyuuuuuu'),
(294, '2017-10-02 03:33:59', 'liberty', 'philip', 0, ' notification', 'Your leader give you task. Go to TASK to know your task.'),
(293, '2018-02-05 19:28:13', 'bryan', 'philip', 0, ' notification', 'Your leader give you task. Go to TASK to know your task.');

-- --------------------------------------------------------

--
-- Table structure for table `networking`
--

CREATE TABLE `networking` (
  `username` varchar(50) NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0',
  `network_simlab` varchar(255) NOT NULL,
  `network_ict_dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `networking`
--

INSERT INTO `networking` (`username`, `accepted`, `network_simlab`, `network_ict_dept`) VALUES
('boyit', 1, 'working', ''),
('amoy', 1, '', 'working');

-- --------------------------------------------------------

--
-- Table structure for table `resolve_telephone`
--

CREATE TABLE `resolve_telephone` (
  `username` varchar(50) NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sent_items`
--

CREATE TABLE `sent_items` (
  `ctrl_no` int(255) NOT NULL,
  `date_send` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to_receiver` varchar(50) NOT NULL,
  `from_sender` varchar(50) NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT '0',
  `mail_subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sent_items`
--

INSERT INTO `sent_items` (`ctrl_no`, `date_send`, `to_receiver`, `from_sender`, `opened`, `mail_subject`, `message`) VALUES
(59, '2009-10-15 18:26:20', 'boyit', 'reintje', 0, ' notification', 'Your leader give you task. Go to TASK to know your task.'),
(58, '2009-10-15 18:26:19', 'amoy', 'reintje', 0, ' notification', 'Your leader give you task. Go to TASK to know your task.'),
(56, '2009-10-15 18:13:44', 'philip', 'alex', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(57, '2009-10-15 18:13:45', 'brian', 'alex', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(54, '2009-10-15 18:13:43', 'lyndon', 'alex', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(55, '2009-10-15 18:13:44', 'reintje', 'alex', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(61, '2018-02-05 11:43:45', 'lyndon', 'admin', 1, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(62, '2018-02-05 11:44:07', 'lyndon', 'admin', 1, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(63, '2018-02-05 11:46:26', 'philip', 'admin', 1, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(64, '2018-02-05 11:46:29', 'philip', 'admin', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(65, '2018-02-05 11:48:26', 'admin', 'philip', 1, 'task noted', 'thankx on progress now'),
(66, '2018-02-05 11:58:39', 'philip', 'admin', 1, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(69, '2018-02-05 18:23:32', 'philip', 'liberty', 0, 'task noted', 'i got it sir '),
(70, '2018-02-05 18:25:48', 'liberty', 'philip', 0, 'work in progress', 'notfy mi when u finish the task'),
(100, '2018-02-08 20:44:54', 'admin', 'philip', 0, 'task noted sir', 'uyuuuuuu'),
(92, '2018-02-05 19:28:13', 'bryan', 'philip', 0, ' notification', 'Your leader give you task. Go to TASK to know your task.'),
(98, '2018-02-08 20:43:26', 'lyndon', 'admin', 1, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(96, '2018-02-06 14:34:26', 'philip', 'liberty', 0, 'agency cnt complete work i am sick ', 'sick cnt do task \r\ncan i do after my recovery ,,,,,');

-- --------------------------------------------------------

--
-- Table structure for table `server_maintenace`
--

CREATE TABLE `server_maintenace` (
  `username` varchar(50) NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0',
  `backup_all_files` varchar(255) NOT NULL,
  `gfg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_maintenace`
--

INSERT INTO `server_maintenace` (`username`, `accepted`, `backup_all_files`, `gfg`) VALUES
('', 0, 'pending', ''),
('', 0, '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `task_leader`
--

CREATE TABLE `task_leader` (
  `Task_leader_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `task_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_leader`
--

INSERT INTO `task_leader` (`Task_leader_id`, `username`, `task_id`, `description`) VALUES
(1, 'philip', 1, 'Tonner should be delivered and  then but the gear need to be changed because of compatibility reasons'),
(2, 'philip', 1, 'Tonner should be delivered and  then but the gear need to be changed because of compatibility reasons'),
(3, 'philip', 1, 'Tonner should be delivered and  then but the gear need to be changed because of compatibility reasons'),
(4, 'papercut installatio', 0, 'voucher printer installation \r\nbut there are four faulty voucher printer at Centenary Bank Mbale branch'),
(5, 'Phillip Ayinomujuni', 0, 'hhhhhhhhh'),
(6, 'Phillip Ayinomujuni', 0, 'hhhhhhhhh'),
(7, 'Mangeni Joseph', 0, 'hhhhhhhhhh'),
(8, 'Mangeni Joseph', 0, 'hhhhhhhhhh'),
(9, 'Mangeni Joseph', 0, 'hhhhhhhhhh'),
(10, 'Lutaaya Paddy', 0, 'ggggggggggg'),
(11, 'Albert Mario Balotel', 0, 'dooooo');

-- --------------------------------------------------------

--
-- Table structure for table `task_list`
--

CREATE TABLE `task_list` (
  `task_id` int(11) NOT NULL,
  `task_number` varchar(10) NOT NULL,
  `task_name` varchar(30) NOT NULL,
  `task_type` varchar(20) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_list`
--

INSERT INTO `task_list` (`task_id`, `task_number`, `task_name`, `task_type`, `time_added`, `username`, `description`) VALUES
(1, 'cop001', 'Catrigde delivery', 'copier', '2018-12-29 13:37:49', '1', 'sadfgjkl;poyrewqsxcvbnm,.poiuyfdvbklkll,l'),
(2, 'IT001', 'papercut installation', 'IT support', '2018-12-31 04:06:24', 'kizito Andrew', 'dkjjkjji'),
(3, 'IT002', 'papercut re-installation', 'IT support', '2019-01-01 20:08:11', 'kizito Andrew', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `groups` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`email`, `username`, `password`, `groups`, `position`, `fname`, `lname`) VALUES
('ka1@muni.ac.ug', 'admin', 'admin', '', '', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group_title`
--
ALTER TABLE `group_title`
  ADD PRIMARY KEY (`group_name`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `messaging`
--
ALTER TABLE `messaging`
  ADD PRIMARY KEY (`ctrl_no`);

--
-- Indexes for table `sent_items`
--
ALTER TABLE `sent_items`
  ADD PRIMARY KEY (`ctrl_no`);

--
-- Indexes for table `task_leader`
--
ALTER TABLE `task_leader`
  ADD PRIMARY KEY (`Task_leader_id`);

--
-- Indexes for table `task_list`
--
ALTER TABLE `task_list`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messaging`
--
ALTER TABLE `messaging`
  MODIFY `ctrl_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `sent_items`
--
ALTER TABLE `sent_items`
  MODIFY `ctrl_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `task_leader`
--
ALTER TABLE `task_leader`
  MODIFY `Task_leader_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `task_list`
--
ALTER TABLE `task_list`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
