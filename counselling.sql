-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2022 at 07:32 AM
-- Server version: 5.7.29-log
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `counselor`
--

CREATE TABLE `counselor` (
  `counselor_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ph_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `counselor`
--

INSERT INTO `counselor` (`counselor_id`, `full_name`, `email`, `ph_number`, `address`, `password`, `about`, `role_id`) VALUES
(1, 'Lily', 'lily@gmail.com', '09764321543', 'yangon', '1234', 'She has done masters in psychology in 2015, with a specialization in Clinical Psychology. She is committed, dedicated and passionate to transform human life using psychological processes and techniques and training undertaken by her over the years. ', 1),
(4, 'John', 'john@gmail.com', '09439876532', 'yangon', '1234', 'asdfHe is currently working as a Clinical Psychologist at Apollo Hospitals and as a consultant Child Psychologist at Merryspell. Formerly worked as an Assistant Professor and Psychologist at KL University. ', 1),
(5, 'Isla', 'isla@gmail.com', '09439876532', 'mdy', '1234', 'I am a Graduate in Psychology Honours from Asutosh College, Kolkata and a Post Graduate in Clinical Psychology from Indian Institute of Psychology and Research, Bangalore University. ', 1),
(6, 'Ryan', 'ryan@gmail.com', '09439876532', 'mdy', '1234', 'Counselling Psychologist intersted in human behaviour and Psychological disorders. Giving insight and practical solutions to day to day problems with mindfulness is my objective.', 1),
(7, 'Scott', 'scott@gmail.com', '09439876532', 'ygn', 'ef36ce0e10fea40301fd3a49a5e45941', 'I have been passionate about psychology since my school days. I enjoy doing therapy as it gives me an immense opportunity to uderstand the human behaviour, thoughts, feelings or emotions and learn from the interactions during the sessions.', 1),
(9, 'Jack', 'jack@gmail.com', '09439876532', 'mdy', '81dc9bdb52d04dc20036dbd8313ed055', 'I have done Masters in Psychology. I am passionate to transform young children who are having behavioural issues, neurological challenges (ADHD, Autism etc.). I have an experience in developing the personality of young children and adolescence.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cu`
--

CREATE TABLE `cu` (
  `cu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `userd_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'counselor'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ph_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `ph_number`, `address`, `password`, `role_id`) VALUES
(2, 'moe sat', 'moe@gmail.com', '09439876532', 'hledan', 'qwer', 2),
(3, 'ki ki', 'ki@gmail.com', '09439876532', 'hledan', 'qwer', 2),
(4, 'aung aung', 'aung@gmail.com', '09439876532', 'ygn', 'zxcv', 2),
(5, 'kaung thu', 'kaung@gmail.com', '09439876532', 'ygn', '1234', 2),
(6, 'echo', 'echo@gmail.com', '09439876532', 'mdy', '1234', 2),
(7, 'myat kyaw', 'kyaw@gmail.com', '09439876532', 'mdy', 'onondj12', 2),
(8, 'Peter', 'peter@gmail.com', '09439876532', 'ygn', '81dc9bdb52d04dc20036dbd8313ed055', 2);

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `userd_id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fav_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hobby` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `career` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feeling` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`userd_id`, `date`, `fav_color`, `hobby`, `career`, `feeling`) VALUES
(1, '1/2/2022', 'blue', 'tennis', 'designer', 'depression'),
(2, '4/2/2022', 'white', 'football', 'Accountant', 'stress'),
(3, '5/2/2022', 'black', 'tennis', 'Engineer', 'Relationship Issues'),
(4, '7/2/2022', 'orange', 'painting', 'Interpreter', 'Anxiety'),
(5, '10/2/2022', 'blue', 'football', 'admin staff', 'sad'),
(6, '11/2/2022', 'black', 'drawing', 'Executive Officer ', 'Depression'),
(7, '13/2/2022', 'white', 'tennis', 'Business Development Executive', 'Stress Management'),
(8, '14/2/2022', 'gray', 'digital painting', 'web design ', 'Troubling Emotions'),
(9, '15/2/2022', 'blue', 'football', 'Senior Accountant', 'Self-Esteem Issues'),
(10, '12/3/2022', 'black', 'tennis', 'Hospital Admin ', 'Sleep Issues');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counselor`
--
ALTER TABLE `counselor`
  ADD PRIMARY KEY (`counselor_id`),
  ADD KEY `counselor_ibfk_1` (`role_id`);

--
-- Indexes for table `cu`
--
ALTER TABLE `cu`
  ADD PRIMARY KEY (`cu_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `userd_id` (`userd_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_ibfk_1` (`role_id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`userd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counselor`
--
ALTER TABLE `counselor`
  MODIFY `counselor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cu`
--
ALTER TABLE `cu`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `userd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `counselor`
--
ALTER TABLE `counselor`
  ADD CONSTRAINT `counselor_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `counselor` (`counselor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cu`
--
ALTER TABLE `cu`
  ADD CONSTRAINT `cu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `counselor` (`counselor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cu_ibfk_2` FOREIGN KEY (`userd_id`) REFERENCES `counselor` (`counselor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
