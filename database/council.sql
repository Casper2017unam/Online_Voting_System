-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 01:53 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `council`
--

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE IF NOT EXISTS `poll` (
`id` int(3) NOT NULL,
  `question` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `question`) VALUES
(39, 'joshua'),
(40, 'cindy'),
(41, 'roman'),
(42, 'patterson'),
(43, 'joshua'),
(44, 'joshua'),
(45, 'cindy'),
(46, 'cindy'),
(47, 'cindy'),
(48, 'patterson'),
(49, 'roman'),
(50, 'roman'),
(51, 'other'),
(52, 'joshua'),
(53, 'joshua'),
(54, 'joshua'),
(55, 'joshua'),
(56, 'joshua'),
(57, 'joshua'),
(58, 'joshua'),
(59, 'joshua'),
(60, 'joshua'),
(61, 'joshua'),
(62, 'joshua'),
(63, 'joshua'),
(64, 'joshua'),
(65, 'joshua'),
(66, 'joshua'),
(67, 'joshua'),
(68, 'joshua'),
(69, 'joshua'),
(70, 'joshua'),
(71, 'joshua'),
(72, 'joshua'),
(73, 'joshua'),
(74, 'joshua'),
(75, 'joshua'),
(76, 'joshua'),
(77, 'joshua'),
(78, 'joshua'),
(79, 'joshua'),
(80, 'joshua'),
(81, 'joshua'),
(82, 'joshua'),
(83, 'joshua'),
(84, 'joshua'),
(85, 'joshua'),
(86, 'patterson'),
(87, 'cindy'),
(88, 'cindy'),
(89, 'cindy'),
(90, 'cindy'),
(91, 'cindy'),
(92, 'cindy'),
(93, 'cindy'),
(94, 'patterson'),
(95, 'patterson'),
(96, 'patterson'),
(97, 'patterson'),
(98, 'patterson'),
(99, 'patterson'),
(100, 'patterson'),
(101, 'other'),
(102, 'cindy'),
(103, 'joshua'),
(104, 'roman'),
(105, 'joshua'),
(106, 'joshua'),
(107, 'joshua'),
(108, 'joshua'),
(109, 'joshua'),
(110, 'joshua'),
(111, 'joshua'),
(112, 'joshua'),
(113, 'joshua'),
(114, 'joshua'),
(115, 'joshua'),
(116, 'joshua'),
(117, 'joshua'),
(118, 'joshua'),
(119, 'joshua'),
(120, 'joshua'),
(121, 'joshua'),
(122, 'joshua'),
(123, 'joshua'),
(124, 'joshua'),
(125, 'joshua'),
(126, 'joshua'),
(127, 'joshua'),
(128, 'joshua'),
(129, 'joshua'),
(130, 'joshua'),
(131, 'joshua'),
(132, 'joshua'),
(133, 'joshua'),
(134, 'joshua'),
(135, 'joshua'),
(136, 'joshua'),
(137, 'joshua'),
(138, 'joshua'),
(139, 'joshua'),
(140, 'joshua'),
(141, 'joshua'),
(142, 'joshua'),
(143, 'joshua'),
(144, 'joshua'),
(145, 'joshua'),
(146, 'joshua'),
(147, 'joshua'),
(148, 'cindy'),
(149, 'cindy'),
(150, 'joshua'),
(151, 'patterson'),
(152, 'joshua'),
(153, 'joshua'),
(154, 'joshua'),
(155, 'joshua'),
(156, 'joshua'),
(157, 'cindy'),
(158, 'joshua'),
(159, 'patterson'),
(160, 'cindy'),
(161, 'roman'),
(162, 'roman'),
(163, 'roman'),
(164, 'roman'),
(165, 'joshua'),
(166, 'patterson'),
(167, 'roman'),
(168, 'joshua'),
(169, 'joshua'),
(170, 'joshua'),
(171, 'cindy'),
(172, 'joshua'),
(173, 'joshua'),
(174, 'patterson'),
(175, 'roman'),
(176, 'joshua'),
(177, 'joshua'),
(178, 'patterson'),
(179, 'roman'),
(180, 'roman'),
(181, 'patterson'),
(182, 'patterson'),
(183, 'patterson'),
(184, 'roman'),
(185, 'cindy'),
(186, 'roman'),
(187, 'roman'),
(188, 'roman'),
(189, 'cindy'),
(190, NULL),
(191, 'joshua'),
(192, 'joshua'),
(193, 'joshua'),
(194, 'joshua'),
(195, 'joshua'),
(196, 'joshua'),
(197, 'joshua'),
(198, 'joshua'),
(199, 'joshua'),
(200, 'joshua'),
(201, 'joshua'),
(202, 'joshua'),
(203, 'joshua'),
(204, 'patterson'),
(205, 'roman'),
(206, 'roman'),
(207, 'roman'),
(208, 'joshua'),
(209, 'patterson');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `faculty` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
`student_id` int(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=201409246 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `student_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201409246;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
