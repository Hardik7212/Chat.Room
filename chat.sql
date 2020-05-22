-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 04:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(11) NOT NULL,
  `msg_text` varchar(5000) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `msg_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `msg_text`, `sender_name`, `msg_time`) VALUES
(76, 'hiiii', 'hardik', '2020-04-22 14:23:42'),
(77, 'hello', 'hardik', '2020-04-22 14:23:55'),
(78, 'hiii', 'hardik', '2020-04-22 14:25:19'),
(79, 'how are you?', 'hardik', '2020-04-22 14:25:30'),
(80, 'whatsap bro', 'hardik', '2020-04-22 14:25:49'),
(81, 'jjj', 'hardik', '2020-04-22 14:25:55'),
(82, 'hii', 'hardik', '2020-04-22 14:26:19'),
(83, 'hhjf', 'hardik', '2020-04-22 14:26:26'),
(84, 'ooo', 'hardik', '2020-04-22 14:26:59'),
(85, 'hello bruh', 'hardik', '2020-04-22 14:33:34'),
(86, 'gbn', 'hardik', '2020-04-22 14:34:03'),
(87, 'hello hardik', 'yash', '2020-04-22 14:37:19'),
(88, 'fghj', 'yash', '2020-04-22 14:42:58'),
(89, 'hiiiii', 'yash', '2020-04-22 14:43:18'),
(90, 'how are you?', 'hardik', '2020-04-22 14:43:29'),
(91, 'How are you?', 'hardik', '2020-04-22 14:43:54'),
(92, 'fgh', 'hardik', '2020-04-22 14:44:00'),
(93, 'hooo', 'hardik', '2020-04-22 14:44:27'),
(94, 'hooo', 'hardik', '2020-04-22 14:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `age`, `mobile`, `gender`, `password`) VALUES
(28, 'hardik', '12', '88', 'male', '123'),
(29, 'hardik', '12', '55', 'male', '123'),
(30, 'kaushik', '20', '888', 'male', '123'),
(31, 'yash', '18', '845', 'male', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
