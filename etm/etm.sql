-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2020 at 05:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_fname` varchar(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_fname`, `a_name`, `a_email`, `a_password`) VALUES
(3, 'admin1', 'admin1', '123@456.com', 'admin@123456'),
(4, 'admin2', 'admin2', '123@456.com', '123@456'),
(5, 'admin3', 'admin3', '123@456.com', '123@456'),
(6, 'user', 'user1', '123@456.com', '123@456');

-- --------------------------------------------------------

--
-- Table structure for table `officetime`
--

CREATE TABLE `officetime` (
  `d_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `d_date` varchar(255) NOT NULL,
  `clock_in` varchar(255) NOT NULL,
  `clock_out` text NOT NULL,
  `o_hours` int(11) NOT NULL,
  `o_hours_string` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officetime`
--

INSERT INTO `officetime` (`d_id`, `e_id`, `d_date`, `clock_in`, `clock_out`, `o_hours`, `o_hours_string`) VALUES
(31, 39, '03-09-2020', '21:29:50', '21:39:37', 587, '0 hours, 9 minutes'),
(32, 41, '03-09-2020', '21:38:51', '21:40:48', 117, '0 hours, 1 minutes');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `t_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `task` text NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `t_hours` int(11) NOT NULL,
  `t_hours_string` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`t_id`, `e_id`, `task`, `start_time`, `end_time`, `t_hours`, `t_hours_string`) VALUES
(32, 39, 'Create database', '21:30:03', '', 0, ''),
(33, 41, 'Update database', '', '', 0, ''),
(34, 39, 'Choose a Database Administrator Authentication Method', '21:34:09', '21:34:55', 46, '0 hours, 0 minutes'),
(35, 39, 'Design the tables', '21:30:50', '21:34:11', 201, '0 hours, 3 minutes'),
(36, 39, 'Use the right data types effectively', '21:34:18', '', 0, ''),
(37, 41, 'Analyze Business requirements', '21:38:55', '21:40:42', 107, '0 hours, 1 minutes'),
(38, 41, 'Organize in a Hierarchical Structure', '21:40:39', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(39, 'user1', 'user1@user.com', 'user1@newuser'),
(41, 'user2', 'user2@user.com', 'user2@user.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `officetime`
--
ALTER TABLE `officetime`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `officetime`
--
ALTER TABLE `officetime`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
