-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 03:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `task` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `date`, `task`, `description`, `location`, `name`, `email`, `phone`) VALUES
(2, '2023-04-05', 'Clean the house', 'Apartment 70 sq m, full cleaning including the bathroom and windows', 'West End', 'Helena', 'lela@gmail.com', 2147483647),
(3, '2023-04-05', 'Repair my laptop', 'HP laptop, 2 years old. The screen is blank and nothing helps. ', 'Richmond', 'Ben', 'ben892@gmail.com', 2147483647),
(4, '2023-04-05', 'Plant flowers', 'In my garden in 2 weeks', 'Surrey', 'Kate', 'kate9393@gmail.com', 2147483647),
(5, '2023-04-09', 'Teach French', 'I know a bit and would like to get to Intermediate level. Would like to have 1-2 lessons a week', 'online', 'Rebecca', 'rebecca.green@gmail.com', 1236524367),
(6, '2023-04-09', 'Help to move ', 'I\'m moving to a different apartment and need someone to transport my furniture. It\'s just from my bedroom', 'East Vancouver', 'Fiona', 'fi813@outlook.com', 2147483647),
(7, '2023-04-09', 'Babysit', 'My kids of 7 and 10 y.o. need a nanny after school Mon-Fri', 'Delta', 'Robin', 'robin1984@outlook.com', 2147483647),
(8, '2023-04-09', 'Translate papers to Spanish', '10 pages, details when you contact me.', 'online', 'Tommy', 'tokhg@outlook.com', 2147483647),
(48, '2023-04-10', 'Haircut for my dog', 'Mini poodle, 2 years old', 'West Vancouver', 'Audrey', 'audreyei@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `ID` int(11) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`ID`, `reason`, `name`, `email`, `phone`, `message`) VALUES
(3, 'cooperation', 'Lily', 'lily39@gmail.com', 0, 'Please call me'),
(4, 'cooperation', 'Ren', 'ren009@gmail.com', 0, 'Let\'s cooperate'),
(17, 'genquestion', 'Jack', 'jack7@gmail.com', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
