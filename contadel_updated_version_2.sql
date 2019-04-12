-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 05:01 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contadel`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(8, '', '', 0),
(9, '', '', 0),
(10, '', '', 0),
(11, '', '', 0),
(12, '', '', 0),
(13, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userId` int(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwdUsers` varchar(255) NOT NULL,
  `dateJoined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `selfIntro` longtext,
  `workExperience` longtext,
  `education` longtext,
  `contactNumber` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `otherHobbies` longtext,
  `country` varchar(255) DEFAULT NULL,
  `greeting` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userId`, `username`, `firstname`, `surname`, `email`, `pwdUsers`, `dateJoined`, `selfIntro`, `workExperience`, `education`, `contactNumber`, `dob`, `otherHobbies`, `country`, `greeting`) VALUES
(8, 0, 'testUser01', 'Potato', 'Salad', 'potatoSalad001@contadel.co.uk', 'password', '2019-04-06 18:27:21', 'Hello this is test user 001', 'a:2:{i:0;a:5:{i:0;s:5:\"Job 1\";i:1;s:7:\"Place 1\";i:2;s:10:\"2019-04-06\";i:3;s:10:\"2019-04-06\";i:4;s:17:\"Job 1 description\";}i:1;a:5:{i:0;s:5:\"Job 2\";i:1;s:7:\"Place 2\";i:2;s:10:\"2019-04-06\";i:3;s:10:\"2019-04-06\";i:4;s:17:\"Job 2 description\";}}', 'a:2:{i:0;a:5:{i:0;s:11:\"Education 1\";i:1;s:7:\"Place 1\";i:2;s:10:\"2019-04-06\";i:3;s:10:\"2019-04-06\";i:4;s:23:\"Education 1 description\";}i:1;a:5:{i:0;s:11:\"Education 2\";i:1;s:7:\"Place 2\";i:2;s:10:\"2019-04-06\";i:3;s:10:\"2019-04-06\";i:4;s:23:\"Education 2 description\";}}', '123456789', '2019-04-06', 'Hobbies and stuff', 'UK', 'Hello world'),
(9, NULL, 'test123', 'test123', 'test123', 'test123@mail.com', '$2y$10$gzRgfa6WjAWzwkFtvYGmPulKDzao0E42qrptCfyK6sKDD4hDJVJHK', '2019-04-07 14:17:26', 'otherHobbies', 'otherHobbies', 'otherHobbies', 'otherHobbies', NULL, 'Design', 'otherHobbies', NULL),
(10, NULL, 'test1234', 'test1234', 'test1234', 'test1234@abv.bg', '$2y$10$KHvD39qWxFdYkR1QQ9jxLekxXdC332MWizrG6Ew8vA6lcecFhdLWK', '2019-04-07 14:26:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, 'test321', 'test321', 'test321', 'test321@gmail.com', '$2y$10$4DYHY5apOw5TlJsprTpbSu9HaN3eYFgxpxKQa7oaZOxlbDR.N1dcy', '2019-04-07 14:32:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 'testUser', 'testUser', 'testUser', 'testUser@email.com', '$2y$10$n9eKwTrSs1VWmRH5LXL3POTkhZsI3zVHzM2qt3Q8E3lil0CxXa6Sa', '2019-04-07 16:04:59', 'fsdfsafsa', 'dsfdsadassd', 'dsfafdas', 'sdfdsfsda', NULL, 'Design', 'dsfsdfa', NULL),
(13, NULL, 'testsecond', 'Test', 'Second', 'testsecond@mail.com', '$2y$10$kHMKcSXpyne5ozQkOhNbyO3BPzEmhTZ3ILaX6/6EOH1joibQOVty2', '2019-04-12 10:29:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 'testthree', 'test', 'three', 'testthree@mail.com', '$2y$10$Q3lUwTdVn2cpx3Wr0vBDD.gxI4PvqoulLmAI97li4zQrWr7wYqSPW', '2019-04-12 14:15:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
