-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 07:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_menagment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `taskID` int(11) NOT NULL,
  `taskTitle` varchar(100) NOT NULL,
  `taskDescription` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskID`, `taskTitle`, `taskDescription`, `status`, `user_id`) VALUES
(14, 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'InProgress', 5),
(16, 'albe', 'niyti\r\n', 'ToDo', 20),
(17, 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', 'ToDo', 20),
(18, 'albnit', 'baba', 'Done', 28),
(19, 'aaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa', 'ToDo', 28),
(22, 'a', 'a', 'ToDo', 26),
(24, 'aaaaa', 'aaaaa', 'Done', 25),
(25, 'aaaa', 'aaa', 'InProgress', 29);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password`) VALUES
(5, 'Albe', 'niti5@live.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(20, 'aaaa', 'dren@gmail.com', 'd7d8f3c43329f1a7ab1afb37b0a6dad1'),
(25, 'Albenit', 'albenit44@gmail.com', 'd7d8f3c43329f1a7ab1afb37b0a6dad1'),
(26, 'Niti', 'ee@gmail.com', 'd7d8f3c43329f1a7ab1afb37b0a6dad1'),
(27, 'hhhh', 'ni@gmail.com', 'd7d8f3c43329f1a7ab1afb37b0a6dad1'),
(28, 'aaaa', 'aaaaaaaa@gmail.com', 'd7d8f3c43329f1a7ab1afb37b0a6dad1'),
(29, 'Albenit', 'albenit33@gmail.com', 'd7d8f3c43329f1a7ab1afb37b0a6dad1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`taskID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `taskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
