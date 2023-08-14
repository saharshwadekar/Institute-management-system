-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2023 at 02:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Institute-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE `allotment` (
  `teacherid` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allotment`
--

INSERT INTO `allotment` (`teacherid`, `yearid`, `departmentid`, `sectionid`, `subjectid`) VALUES
(1000001, 3, 2, 1, 201),
(1000002, 2, 1, 2, 101),
(1000003, 4, 2, 1, 202),
(2000001, 2, 1, 2, 103),
(2000002, 2, 1, 2, 102),
(3000001, 1, 3, 2, 302),
(3000002, 1, 3, 2, 301);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `No` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `Status` varchar(11) NOT NULL,
  `Date` date NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`No`, `studentid`, `yearid`, `departmentid`, `sectionid`, `subjectid`, `Status`, `Date`, `month`, `year`) VALUES
(1, 1020201, 2, 1, 2, 101, 'P', '2023-06-01', 'Jun', '2023'),
(2, 1020201, 2, 1, 2, 101, 'P', '2023-06-02', 'Jun', '2023'),
(4, 1020201, 2, 1, 2, 101, 'P', '2023-06-06', 'Jun', '2023'),
(5, 1020201, 2, 1, 2, 101, 'P', '2023-06-08', 'Jun', '2023'),
(6, 1020201, 2, 1, 2, 101, 'P', '2023-06-09', 'Jun', '2023'),
(7, 1020201, 2, 1, 2, 101, 'P', '2023-06-10', 'Jun', '2023'),
(9, 1020201, 2, 1, 2, 101, 'P', '2023-06-13', 'Jun', '2023'),
(10, 1020201, 2, 1, 2, 101, 'P', '2023-06-15', 'Jun', '2023'),
(11, 1020201, 2, 1, 2, 101, 'P', '2023-06-16', 'Jun', '2023'),
(12, 1020201, 2, 1, 2, 101, 'P', '2023-06-17', 'Jun', '2023'),
(14, 1020201, 2, 1, 2, 101, 'A', '2023-06-20', 'Jun', '2023'),
(15, 1020201, 2, 1, 2, 101, 'P', '2023-06-22', 'Jun', '2023'),
(16, 1020201, 2, 1, 2, 101, 'P', '2023-06-23', 'Jun', '2023'),
(17, 1020201, 2, 1, 2, 101, 'P', '2023-06-24', 'Jun', '2023'),
(19, 1020201, 2, 1, 2, 101, 'P', '2023-06-27', 'Jun', '2023'),
(20, 1020201, 2, 1, 2, 101, 'P', '2023-06-29', 'Jun', '2023'),
(21, 1020201, 2, 1, 2, 101, 'A', '2023-06-30', 'Jun', '2023'),
(22, 1020201, 2, 1, 2, 103, 'P', '2023-06-01', 'Jun', '2023'),
(23, 1020201, 2, 1, 2, 102, 'P', '2023-06-01', 'Jun', '2023'),
(24, 1020201, 2, 1, 2, 103, 'P', '2023-06-02', 'Jun', '2023'),
(25, 1020201, 2, 1, 2, 102, 'P', '2023-06-02', 'Jun', '2023'),
(28, 1020201, 2, 1, 2, 103, 'P', '2023-06-06', 'Jun', '2023'),
(29, 1020201, 2, 1, 2, 102, 'P', '2023-06-06', 'Jun', '2023'),
(30, 1020201, 2, 1, 2, 103, 'P', '2023-06-08', 'Jun', '2023'),
(31, 1020201, 2, 1, 2, 102, 'P', '2023-06-08', 'Jun', '2023'),
(32, 1020201, 2, 1, 2, 103, 'P', '2023-06-09', 'Jun', '2023'),
(33, 1020201, 2, 1, 2, 102, 'P', '2023-06-09', 'Jun', '2023'),
(34, 1020201, 2, 1, 2, 103, 'P', '2023-06-10', 'Jun', '2023'),
(35, 1020201, 2, 1, 2, 102, 'P', '2023-06-10', 'Jun', '2023'),
(38, 1020201, 2, 1, 2, 103, 'P', '2023-06-13', 'Jun', '2023'),
(39, 1020201, 2, 1, 2, 102, 'P', '2023-06-13', 'Jun', '2023'),
(40, 1020201, 2, 1, 2, 103, 'P', '2023-06-15', 'Jun', '2023'),
(41, 1020201, 2, 1, 2, 102, 'P', '2023-06-15', 'Jun', '2023'),
(42, 1020201, 2, 1, 2, 103, 'P', '2023-06-16', 'Jun', '2023'),
(43, 1020201, 2, 1, 2, 102, 'P', '2023-06-16', 'Jun', '2023'),
(44, 1020201, 2, 1, 2, 103, 'P', '2023-06-17', 'Jun', '2023'),
(45, 1020201, 2, 1, 2, 102, 'P', '2023-06-17', 'Jun', '2023'),
(48, 1020201, 2, 1, 2, 103, 'A', '2023-06-20', 'Jun', '2023'),
(49, 1020201, 2, 1, 2, 102, 'A', '2023-06-20', 'Jun', '2023'),
(50, 1020201, 2, 1, 2, 103, 'P', '2023-06-22', 'Jun', '2023'),
(51, 1020201, 2, 1, 2, 102, 'P', '2023-06-22', 'Jun', '2023'),
(52, 1020201, 2, 1, 2, 103, 'P', '2023-06-23', 'Jun', '2023'),
(53, 1020201, 2, 1, 2, 102, 'P', '2023-06-23', 'Jun', '2023'),
(54, 1020201, 2, 1, 2, 103, 'P', '2023-06-24', 'Jun', '2023'),
(55, 1020201, 2, 1, 2, 102, 'P', '2023-06-24', 'Jun', '2023'),
(58, 1020201, 2, 1, 2, 103, 'P', '2023-06-27', 'Jun', '2023'),
(59, 1020201, 2, 1, 2, 102, 'P', '2023-06-27', 'Jun', '2023'),
(60, 1020201, 2, 1, 2, 103, 'P', '2023-06-29', 'Jun', '2023'),
(61, 1020201, 2, 1, 2, 102, 'P', '2023-06-29', 'Jun', '2023'),
(62, 1020201, 2, 1, 2, 103, 'A', '2023-06-30', 'Jun', '2023'),
(63, 1020201, 2, 1, 2, 102, 'A', '2023-06-30', 'Jun', '2023'),
(64, 1020202, 2, 1, 2, 101, 'P', '2023-06-01', 'Jun', '2023'),
(65, 1020202, 2, 1, 2, 101, 'P', '2023-06-02', 'Jun', '2023'),
(67, 1020202, 2, 1, 2, 101, 'P', '2023-06-06', 'Jun', '2023'),
(68, 1020202, 2, 1, 2, 101, 'P', '2023-06-08', 'Jun', '2023'),
(69, 1020202, 2, 1, 2, 101, 'P', '2023-06-09', 'Jun', '2023'),
(70, 1020202, 2, 1, 2, 101, 'P', '2023-06-10', 'Jun', '2023'),
(72, 1020202, 2, 1, 2, 101, 'P', '2023-06-13', 'Jun', '2023'),
(73, 1020202, 2, 1, 2, 101, 'P', '2023-06-15', 'Jun', '2023'),
(74, 1020202, 2, 1, 2, 101, 'P', '2023-06-16', 'Jun', '2023'),
(75, 1020202, 2, 1, 2, 101, 'P', '2023-06-17', 'Jun', '2023'),
(77, 1020202, 2, 1, 2, 101, 'A', '2023-06-20', 'Jun', '2023'),
(78, 1020202, 2, 1, 2, 101, 'P', '2023-06-22', 'Jun', '2023'),
(79, 1020202, 2, 1, 2, 101, 'P', '2023-06-23', 'Jun', '2023'),
(80, 1020202, 2, 1, 2, 101, 'P', '2023-06-24', 'Jun', '2023'),
(82, 1020202, 2, 1, 2, 101, 'P', '2023-06-27', 'Jun', '2023'),
(83, 1020202, 2, 1, 2, 101, 'P', '2023-06-29', 'Jun', '2023'),
(84, 1020202, 2, 1, 2, 101, 'A', '2023-06-30', 'Jun', '2023'),
(85, 1020202, 2, 1, 2, 103, 'P', '2023-06-01', 'Jun', '2023'),
(86, 1020202, 2, 1, 2, 102, 'P', '2023-06-01', 'Jun', '2023'),
(87, 1020202, 2, 1, 2, 103, 'P', '2023-06-02', 'Jun', '2023'),
(88, 1020202, 2, 1, 2, 102, 'P', '2023-06-02', 'Jun', '2023'),
(91, 1020202, 2, 1, 2, 103, 'P', '2023-06-06', 'Jun', '2023'),
(92, 1020202, 2, 1, 2, 102, 'P', '2023-06-06', 'Jun', '2023'),
(93, 1020202, 2, 1, 2, 103, 'P', '2023-06-08', 'Jun', '2023'),
(94, 1020202, 2, 1, 2, 102, 'P', '2023-06-08', 'Jun', '2023'),
(95, 1020202, 2, 1, 2, 103, 'P', '2023-06-09', 'Jun', '2023'),
(96, 1020202, 2, 1, 2, 102, 'P', '2023-06-09', 'Jun', '2023'),
(97, 1020202, 2, 1, 2, 103, 'P', '2023-06-10', 'Jun', '2023'),
(98, 1020202, 2, 1, 2, 102, 'P', '2023-06-10', 'Jun', '2023'),
(101, 1020202, 2, 1, 2, 103, 'P', '2023-06-13', 'Jun', '2023'),
(102, 1020202, 2, 1, 2, 102, 'P', '2023-06-13', 'Jun', '2023'),
(103, 1020202, 2, 1, 2, 103, 'P', '2023-06-15', 'Jun', '2023'),
(104, 1020202, 2, 1, 2, 102, 'P', '2023-06-15', 'Jun', '2023'),
(105, 1020202, 2, 1, 2, 103, 'P', '2023-06-16', 'Jun', '2023'),
(106, 1020202, 2, 1, 2, 102, 'P', '2023-06-16', 'Jun', '2023'),
(107, 1020202, 2, 1, 2, 103, 'P', '2023-06-17', 'Jun', '2023'),
(108, 1020202, 2, 1, 2, 102, 'P', '2023-06-17', 'Jun', '2023'),
(111, 1020202, 2, 1, 2, 103, 'A', '2023-06-20', 'Jun', '2023'),
(112, 1020202, 2, 1, 2, 102, 'A', '2023-06-20', 'Jun', '2023'),
(113, 1020202, 2, 1, 2, 103, 'P', '2023-06-22', 'Jun', '2023'),
(114, 1020202, 2, 1, 2, 102, 'P', '2023-06-22', 'Jun', '2023'),
(115, 1020202, 2, 1, 2, 103, 'P', '2023-06-23', 'Jun', '2023'),
(116, 1020202, 2, 1, 2, 102, 'P', '2023-06-23', 'Jun', '2023'),
(117, 1020202, 2, 1, 2, 103, 'P', '2023-06-24', 'Jun', '2023'),
(118, 1020202, 2, 1, 2, 102, 'P', '2023-06-24', 'Jun', '2023'),
(121, 1020202, 2, 1, 2, 103, 'P', '2023-06-27', 'Jun', '2023'),
(122, 1020202, 2, 1, 2, 102, 'P', '2023-06-27', 'Jun', '2023'),
(123, 1020202, 2, 1, 2, 103, 'P', '2023-06-29', 'Jun', '2023'),
(124, 1020202, 2, 1, 2, 102, 'P', '2023-06-29', 'Jun', '2023'),
(125, 1020202, 2, 1, 2, 103, 'A', '2023-06-30', 'Jun', '2023'),
(126, 1020202, 2, 1, 2, 102, 'A', '2023-06-30', 'Jun', '2023'),
(127, 1020203, 2, 1, 2, 101, 'P', '2023-06-01', 'Jun', '2023'),
(128, 1020203, 2, 1, 2, 101, 'P', '2023-06-02', 'Jun', '2023'),
(130, 1020203, 2, 1, 2, 101, 'P', '2023-06-06', 'Jun', '2023'),
(131, 1020203, 2, 1, 2, 101, 'P', '2023-06-08', 'Jun', '2023'),
(132, 1020203, 2, 1, 2, 101, 'P', '2023-06-09', 'Jun', '2023'),
(133, 1020203, 2, 1, 2, 101, 'P', '2023-06-10', 'Jun', '2023'),
(135, 1020203, 2, 1, 2, 101, 'P', '2023-06-13', 'Jun', '2023'),
(136, 1020203, 2, 1, 2, 101, 'P', '2023-06-15', 'Jun', '2023'),
(137, 1020203, 2, 1, 2, 101, 'P', '2023-06-16', 'Jun', '2023'),
(138, 1020203, 2, 1, 2, 101, 'P', '2023-06-17', 'Jun', '2023'),
(140, 1020203, 2, 1, 2, 101, 'P', '2023-06-20', 'Jun', '2023'),
(141, 1020203, 2, 1, 2, 101, 'P', '2023-06-22', 'Jun', '2023'),
(142, 1020203, 2, 1, 2, 101, 'P', '2023-06-23', 'Jun', '2023'),
(143, 1020203, 2, 1, 2, 101, 'P', '2023-06-24', 'Jun', '2023'),
(145, 1020203, 2, 1, 2, 101, 'P', '2023-06-27', 'Jun', '2023'),
(146, 1020203, 2, 1, 2, 101, 'P', '2023-06-29', 'Jun', '2023'),
(147, 1020203, 2, 1, 2, 101, 'P', '2023-06-30', 'Jun', '2023'),
(148, 1020203, 2, 1, 2, 103, 'P', '2023-06-01', 'Jun', '2023'),
(149, 1020203, 2, 1, 2, 102, 'P', '2023-06-01', 'Jun', '2023'),
(150, 1020203, 2, 1, 2, 103, 'P', '2023-06-02', 'Jun', '2023'),
(151, 1020203, 2, 1, 2, 102, 'P', '2023-06-02', 'Jun', '2023'),
(154, 1020203, 2, 1, 2, 103, 'P', '2023-06-06', 'Jun', '2023'),
(155, 1020203, 2, 1, 2, 102, 'P', '2023-06-06', 'Jun', '2023'),
(156, 1020203, 2, 1, 2, 103, 'P', '2023-06-08', 'Jun', '2023'),
(157, 1020203, 2, 1, 2, 102, 'P', '2023-06-08', 'Jun', '2023'),
(158, 1020203, 2, 1, 2, 103, 'P', '2023-06-09', 'Jun', '2023'),
(159, 1020203, 2, 1, 2, 102, 'P', '2023-06-09', 'Jun', '2023'),
(160, 1020203, 2, 1, 2, 103, 'P', '2023-06-10', 'Jun', '2023'),
(161, 1020203, 2, 1, 2, 102, 'P', '2023-06-10', 'Jun', '2023'),
(164, 1020203, 2, 1, 2, 103, 'P', '2023-06-13', 'Jun', '2023'),
(165, 1020203, 2, 1, 2, 102, 'P', '2023-06-13', 'Jun', '2023'),
(166, 1020203, 2, 1, 2, 103, 'P', '2023-06-15', 'Jun', '2023'),
(167, 1020203, 2, 1, 2, 102, 'P', '2023-06-15', 'Jun', '2023'),
(168, 1020203, 2, 1, 2, 103, 'P', '2023-06-16', 'Jun', '2023'),
(169, 1020203, 2, 1, 2, 102, 'P', '2023-06-16', 'Jun', '2023'),
(170, 1020203, 2, 1, 2, 103, 'P', '2023-06-17', 'Jun', '2023'),
(171, 1020203, 2, 1, 2, 102, 'P', '2023-06-17', 'Jun', '2023'),
(174, 1020203, 2, 1, 2, 103, 'P', '2023-06-20', 'Jun', '2023'),
(175, 1020203, 2, 1, 2, 102, 'P', '2023-06-20', 'Jun', '2023'),
(176, 1020203, 2, 1, 2, 103, 'P', '2023-06-22', 'Jun', '2023'),
(177, 1020203, 2, 1, 2, 102, 'P', '2023-06-22', 'Jun', '2023'),
(178, 1020203, 2, 1, 2, 103, 'P', '2023-06-23', 'Jun', '2023'),
(179, 1020203, 2, 1, 2, 102, 'P', '2023-06-23', 'Jun', '2023'),
(180, 1020203, 2, 1, 2, 103, 'P', '2023-06-24', 'Jun', '2023'),
(181, 1020203, 2, 1, 2, 102, 'P', '2023-06-24', 'Jun', '2023'),
(184, 1020203, 2, 1, 2, 103, 'P', '2023-06-27', 'Jun', '2023'),
(185, 1020203, 2, 1, 2, 102, 'P', '2023-06-27', 'Jun', '2023'),
(186, 1020203, 2, 1, 2, 103, 'P', '2023-06-29', 'Jun', '2023'),
(187, 1020203, 2, 1, 2, 102, 'P', '2023-06-29', 'Jun', '2023'),
(188, 1020203, 2, 1, 2, 103, 'P', '2023-06-30', 'Jun', '2023'),
(189, 1020203, 2, 1, 2, 102, 'P', '2023-06-30', 'Jun', '2023'),
(190, 1020204, 2, 1, 2, 101, 'P', '2023-06-01', 'Jun', '2023'),
(191, 1020204, 2, 1, 2, 101, 'P', '2023-06-02', 'Jun', '2023'),
(193, 1020204, 2, 1, 2, 101, 'P', '2023-06-06', 'Jun', '2023'),
(194, 1020204, 2, 1, 2, 101, 'P', '2023-06-08', 'Jun', '2023'),
(195, 1020204, 2, 1, 2, 101, 'P', '2023-06-09', 'Jun', '2023'),
(196, 1020204, 2, 1, 2, 101, 'P', '2023-06-10', 'Jun', '2023'),
(198, 1020204, 2, 1, 2, 101, 'P', '2023-06-13', 'Jun', '2023'),
(199, 1020204, 2, 1, 2, 101, 'P', '2023-06-15', 'Jun', '2023'),
(200, 1020204, 2, 1, 2, 101, 'P', '2023-06-16', 'Jun', '2023'),
(201, 1020204, 2, 1, 2, 101, 'P', '2023-06-17', 'Jun', '2023'),
(203, 1020204, 2, 1, 2, 101, 'A', '2023-06-20', 'Jun', '2023'),
(204, 1020204, 2, 1, 2, 101, 'P', '2023-06-22', 'Jun', '2023'),
(205, 1020204, 2, 1, 2, 101, 'P', '2023-06-23', 'Jun', '2023'),
(206, 1020204, 2, 1, 2, 101, 'P', '2023-06-24', 'Jun', '2023'),
(208, 1020204, 2, 1, 2, 101, 'P', '2023-06-27', 'Jun', '2023'),
(209, 1020204, 2, 1, 2, 101, 'P', '2023-06-29', 'Jun', '2023'),
(210, 1020204, 2, 1, 2, 101, 'A', '2023-06-30', 'Jun', '2023'),
(211, 1020204, 2, 1, 2, 103, 'P', '2023-06-01', 'Jun', '2023'),
(212, 1020204, 2, 1, 2, 102, 'P', '2023-06-01', 'Jun', '2023'),
(213, 1020204, 2, 1, 2, 103, 'P', '2023-06-02', 'Jun', '2023'),
(214, 1020204, 2, 1, 2, 102, 'P', '2023-06-02', 'Jun', '2023'),
(217, 1020204, 2, 1, 2, 103, 'P', '2023-06-06', 'Jun', '2023'),
(218, 1020204, 2, 1, 2, 102, 'P', '2023-06-06', 'Jun', '2023'),
(219, 1020204, 2, 1, 2, 103, 'P', '2023-06-08', 'Jun', '2023'),
(220, 1020204, 2, 1, 2, 102, 'P', '2023-06-08', 'Jun', '2023'),
(221, 1020204, 2, 1, 2, 103, 'P', '2023-06-09', 'Jun', '2023'),
(222, 1020204, 2, 1, 2, 102, 'P', '2023-06-09', 'Jun', '2023'),
(223, 1020204, 2, 1, 2, 103, 'P', '2023-06-10', 'Jun', '2023'),
(224, 1020204, 2, 1, 2, 102, 'P', '2023-06-10', 'Jun', '2023'),
(227, 1020204, 2, 1, 2, 103, 'P', '2023-06-13', 'Jun', '2023'),
(228, 1020204, 2, 1, 2, 102, 'P', '2023-06-13', 'Jun', '2023'),
(229, 1020204, 2, 1, 2, 103, 'P', '2023-06-15', 'Jun', '2023'),
(230, 1020204, 2, 1, 2, 102, 'P', '2023-06-15', 'Jun', '2023'),
(231, 1020204, 2, 1, 2, 103, 'P', '2023-06-16', 'Jun', '2023'),
(232, 1020204, 2, 1, 2, 102, 'P', '2023-06-16', 'Jun', '2023'),
(233, 1020204, 2, 1, 2, 103, 'P', '2023-06-17', 'Jun', '2023'),
(234, 1020204, 2, 1, 2, 102, 'P', '2023-06-17', 'Jun', '2023'),
(237, 1020204, 2, 1, 2, 103, 'A', '2023-06-20', 'Jun', '2023'),
(238, 1020204, 2, 1, 2, 102, 'A', '2023-06-20', 'Jun', '2023'),
(239, 1020204, 2, 1, 2, 103, 'P', '2023-06-22', 'Jun', '2023'),
(240, 1020204, 2, 1, 2, 102, 'P', '2023-06-22', 'Jun', '2023'),
(241, 1020204, 2, 1, 2, 103, 'P', '2023-06-23', 'Jun', '2023'),
(242, 1020204, 2, 1, 2, 102, 'P', '2023-06-23', 'Jun', '2023'),
(243, 1020204, 2, 1, 2, 103, 'P', '2023-06-24', 'Jun', '2023'),
(244, 1020204, 2, 1, 2, 102, 'P', '2023-06-24', 'Jun', '2023'),
(247, 1020204, 2, 1, 2, 103, 'P', '2023-06-27', 'Jun', '2023'),
(248, 1020204, 2, 1, 2, 102, 'P', '2023-06-27', 'Jun', '2023'),
(249, 1020204, 2, 1, 2, 103, 'P', '2023-06-29', 'Jun', '2023'),
(250, 1020204, 2, 1, 2, 102, 'P', '2023-06-29', 'Jun', '2023'),
(251, 1020204, 2, 1, 2, 103, 'A', '2023-06-30', 'Jun', '2023'),
(252, 1020204, 2, 1, 2, 102, 'P', '2023-06-30', 'Jun', '2023'),
(253, 1020201, 2, 1, 2, 101, 'P', '2023-06-05', 'Jun', '2023'),
(254, 1020202, 2, 1, 2, 101, 'P', '2023-06-05', 'Jun', '2023'),
(255, 1020203, 2, 1, 2, 101, 'P', '2023-06-05', 'Jun', '2023'),
(256, 1020204, 2, 1, 2, 101, 'P', '2023-06-05', 'Jun', '2023'),
(257, 1020201, 2, 1, 2, 101, 'P', '2023-06-14', 'Jun', '2023'),
(258, 1020202, 2, 1, 2, 101, 'P', '2023-06-14', 'Jun', '2023'),
(259, 1020203, 2, 1, 2, 101, 'P', '2023-06-14', 'Jun', '2023'),
(260, 1020204, 2, 1, 2, 101, 'P', '2023-06-14', 'Jun', '2023'),
(261, 1020201, 2, 1, 2, 101, 'P', '2023-06-21', 'Jun', '2023'),
(262, 1020202, 2, 1, 2, 101, 'P', '2023-06-21', 'Jun', '2023'),
(263, 1020203, 2, 1, 2, 101, 'P', '2023-06-21', 'Jun', '2023'),
(264, 1020204, 2, 1, 2, 101, 'P', '2023-06-21', 'Jun', '2023'),
(265, 1020201, 2, 1, 2, 101, 'P', '2023-06-28', 'Jun', '2023'),
(266, 1020202, 2, 1, 2, 101, 'P', '2023-06-28', 'Jun', '2023'),
(267, 1020203, 2, 1, 2, 101, 'P', '2023-06-28', 'Jun', '2023'),
(268, 1020204, 2, 1, 2, 101, 'P', '2023-06-28', 'Jun', '2023'),
(269, 1020201, 2, 1, 2, 101, 'P', '2023-06-26', 'Jun', '2023'),
(270, 1020202, 2, 1, 2, 101, 'P', '2023-06-26', 'Jun', '2023'),
(271, 1020203, 2, 1, 2, 101, 'P', '2023-06-26', 'Jun', '2023'),
(272, 1020204, 2, 1, 2, 101, 'P', '2023-06-26', 'Jun', '2023'),
(273, 1020201, 2, 1, 2, 101, 'P', '2023-06-12', 'Jun', '2023'),
(274, 1020202, 2, 1, 2, 101, 'P', '2023-06-12', 'Jun', '2023'),
(275, 1020203, 2, 1, 2, 101, 'P', '2023-06-12', 'Jun', '2023'),
(276, 1020204, 2, 1, 2, 101, 'P', '2023-06-12', 'Jun', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'Computer Engineering'),
(2, 'Data Science'),
(3, 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `examname` text NOT NULL,
  `totalmarks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `examname`, `totalmarks`) VALUES
(1, 'CAT - 1', 15),
(2, 'CAT - 2', 15),
(3, 'End Semester', 70);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `genderid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genderid`, `name`) VALUES
(202, 'Female'),
(201, 'Male'),
(203, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `No` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  `examid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`No`, `studentid`, `yearid`, `examid`, `subjectid`, `mark`) VALUES
(1, 1020201, 2, 1, 101, 3),
(2, 1020202, 2, 1, 101, 4),
(3, 1020201, 2, 2, 101, 32),
(4, 1020202, 2, 2, 101, 19);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`) VALUES
(1, 'Section A'),
(2, 'Section B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `rollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `departmentid`, `yearid`, `sectionid`, `rollno`) VALUES
(1020201, 1, 2, 2, 1),
(1020202, 1, 2, 2, 2),
(1020203, 1, 2, 2, 3),
(1020204, 1, 2, 2, 4),
(2030101, 2, 3, 1, 1),
(2040101, 2, 4, 1, 1),
(3010201, 3, 1, 2, 1),
(3010202, 3, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `departmentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `departmentid`) VALUES
(101, 'Database management system', 1),
(102, 'Data Communication', 1),
(103, 'Object Oriented Programing', 1),
(201, 'Computer Networking', 2),
(202, 'Neural Networking', 2),
(301, 'Information Technology', 3),
(302, 'Software Engineering', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `qualification` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `departmentid`, `qualification`, `experience`, `salary`) VALUES
(1000001, 1, 'NULL', 'NULL', 30000),
(1000002, 1, 'NULL', 'NULL', 131231),
(1000003, 1, 'NULL', 'NULL', 200000),
(2000001, 2, 'NULL', 'NULL', 40000),
(2000002, 2, 'NULL', 'NULL', 20000),
(3000001, 3, 'NULL', 'NULL', 40000),
(3000002, 3, 'NULL', 'NULL', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `genderid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type`, `firstname`, `lastname`, `email`, `password`, `address`, `city`, `state`, `phone`, `genderid`) VALUES
(1000001, 'teacher', 'Aarav', 'Patel', 'Aarav@teacher.com', '123', 'NULL', 'NULL', 'NULL', 12, 201),
(1000002, 'teacher', 'Riya', 'Sharma', 'riya@teacher.com', '123', 'NULL', 'NULL', 'NULL', 1231231231, 202),
(1000003, 'teacher', 'kabir', 'desai', 'kabir@teacher.com', '123', 'NULL', 'NULL', 'NULL', 1231231231, 201),
(1020201, 'student', 'Sarvesh', 'Pidurkar', 'sarvesh@admin.com', '123', 'wardha', 'Nagpur', 'Maharashtra', 1231231231, 201),
(1020202, 'student', 'tejas', 'thawkar', 'tejas@student.com', '123', 'NULL', 'NULL', 'NULL', 1231231231, 201),
(1020203, 'student', 'Mohit', 'Raut', 'mohit@student.com', '123', 'NULL', 'NULL', 'NULL', 123123123, 201),
(1020204, 'student', 'Anika', 'Reddy', 'anika@student.com', '123', 'NULL', 'NULL', 'NULL', 123123123, 202),
(2000001, 'teacher', 'ishita ', 'Gupta', 'ishita@gmail.com', '123', 'NULL', 'NULL', 'NULL', 1231231, 202),
(2000002, 'teacher', 'Arjun', 'singh', 'arjun@teacher.com', '123', 'NULL', 'NULL', 'NULL', 12312312, 201),
(2030101, 'student', 'Dev', 'Sharma', 'dev@student.com', '123', 'NULL', 'NULL', 'NULL', 12323232, 201),
(2040101, 'student', 'Krish', 'Kapoor', 'Krish@student.com', '1231', 'NULL', 'NULL', 'NULL', 232, 201),
(3000001, 'teacher', 'Aanya', 'Joshi', 'Aanya@teacher.com', '123', 'NULL', 'NULL', 'NULL', 1231232, 202),
(3000002, 'teacher', 'Advait', 'Shah', 'Advait@teacher.com', '123', 'NULL', 'NULL', 'NULL', 123123, 201),
(3010201, 'student', 'Esha ', 'Joshi', 'Joshi@student.com', '123', 'NULL', 'NULL', 'NULL', 12312333, 202),
(3010202, 'student', 'Mohan', 'Rana', 'Mohan@student.com', '123', 'NULL', 'NULL', 'NULL', 1232323, 201),
(41470001, 'admin', 'saharsh', 'wadekar', 'admin@admin.com', '123', NULL, NULL, NULL, 892545345, 201),
(41470002, 'admin', 'Sahil', 'Tiwaskar', 'sahil@admin.com', '123', 'NULL', 'NULL', 'NULL', 1234567890, 201);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`, `sem`) VALUES
(1, '1st year', 'SEMESTER - 1'),
(2, '2nd year', 'SEMESTER - 2'),
(3, '3rd year', 'SEMESTER - 3'),
(4, '4th year', 'SEMESTER - 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allotment`
--
ALTER TABLE `allotment`
  ADD UNIQUE KEY `teacherid` (`teacherid`,`yearid`,`departmentid`,`sectionid`,`subjectid`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`genderid`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`No`),
  ADD UNIQUE KEY `studentid` (`studentid`,`yearid`,`examid`,`subjectid`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `years` (`year`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
