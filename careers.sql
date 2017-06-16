-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 06:34 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careers`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `url` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `location`, `experience`, `url`) VALUES
(5, 'PHP Developer', 'Infopark, Koch', '4 - 7 years', 'https://www.indeed.co.in/viewjob?cmp=Ignitho-Technologies&t=PHP+Developer&jk=ae7a11e8d1dbe5e9&q=PHP+Developer+company%3A%28Ignitho+Technologies%29'),
(4, 'Technical Lead - Open Source', 'Infopark, Kochi', '7 – 9 years', 'https://www.indeed.co.in/cmp/Ignitho-Technologies/jobs/Technical-Lead-aa26f74a5831014b?q=Ignitho'),
(52, 'Junior Visual Designer', 'Infopark, Kochi', '6 Months – 1 year', 'https://www.indeed.co.in/cmp/Ignitho-Technologies/jobs/Junior-Visual-Designer-6c121746d9bdf475?q=Junior+Visual+Designer'),
(54, 'Front - Desk Associate', 'Infopark, Kochi', '1 - 2 years & Freshe', 'https://www.indeed.co.in/cmp/Ignitho-Technologies/jobs/Front-Desk-Associate-8a6d2ea3343e439b');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
(0, 'jo', 'jo@gmail.com', 'f970e2767d0cfe75876ea857f92e319b', 'Male', '78', '2017-06-16 05:19:50', '2017-06-16 05:19:50', '1'),
(0, 'jo', 'jose@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'Male', '97', '2017-06-16 05:22:38', '2017-06-16 05:22:38', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
