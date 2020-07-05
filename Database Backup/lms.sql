-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 04:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `B_ID` int(255) NOT NULL,
  `BOOK_IMAGE` varchar(255) DEFAULT NULL,
  `TITLE` varchar(255) NOT NULL,
  `AUTHOR` varchar(255) NOT NULL,
  `PUBLISHER` varchar(255) DEFAULT NULL,
  `PRICE` int(11) DEFAULT NULL,
  `AVAILABLE` tinyint(1) NOT NULL DEFAULT '0',
  `DATE_PUBLISHED` date DEFAULT NULL,
  `CATEGORY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`B_ID`, `BOOK_IMAGE`, `TITLE`, `AUTHOR`, `PUBLISHER`, `PRICE`, `AVAILABLE`, `DATE_PUBLISHED`, `CATEGORY`) VALUES
(52, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 1, '2018-01-17', 'Math'),
(53, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(55, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(56, 'Math.jpg', 'Mathematics       ', 'NCERT     ', 'NCERT        ', 520, 0, '2018-02-07', '                Math        '),
(57, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(58, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(59, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(60, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(61, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(62, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(63, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(64, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(65, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(66, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(67, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(68, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(69, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(70, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(71, 'Math.jpg', 'Mathematics', 'NCERT', 'NCERT', 140, 0, '2018-01-17', 'Math'),
(72, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(73, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(74, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(75, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(76, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(77, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(78, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(79, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(80, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(81, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(82, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(83, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(84, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(85, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(86, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(87, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(88, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(89, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(90, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(91, 'Math2.jpg', ' Mathematics ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 392, 0, '2018-01-17', 'Math'),
(92, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(93, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(94, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(95, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(96, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(97, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(98, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(99, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(100, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(101, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(102, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(103, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(104, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(105, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(106, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(107, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(108, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(109, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(110, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(111, 'physcis_lab_manual-x_icse_.jpg', 'Lab Manual ICSE Physics-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 212, 0, '2018-01-17', 'Physics'),
(112, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(113, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(114, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(115, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(116, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(117, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(118, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(119, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(120, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(121, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(122, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(123, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(124, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(125, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(126, 'Chemistry.jpg', 'Chemistry ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Chemistry'),
(127, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(128, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(129, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(130, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(131, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(132, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(133, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(134, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(135, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(136, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(137, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(138, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(139, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(140, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(141, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(142, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(143, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(144, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(145, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(146, 'Biology.jpg', 'Biology ICSE-10', 'Rachna Sagar ', 'Rachna Sagar Pvt.Ltd.-New Delhi', 320, 0, '2018-01-17', 'Biology'),
(147, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(148, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(149, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(150, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(151, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(152, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(153, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(154, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(155, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(156, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(157, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(158, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(159, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(160, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(161, 'Histry.jpg', 'History for Class 10', 'NCERT', 'NCERT', 130, 0, '2018-01-17', 'History'),
(162, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(163, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(164, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(165, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(166, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(167, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(168, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(169, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(170, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(171, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(172, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(173, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(174, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(175, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(176, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(177, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(178, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(179, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(180, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(181, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(182, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(183, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(184, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(185, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(186, 'icse_geography_10_.jpg', 'Rachna Sagar Together With Geography ICSE-10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'Geography'),
(187, 'hindi.jpg', 'Arya Publishing Company Perfect Sample Papers Hindi Course A Class X (SA-II)', 'Arya', 'Arya Publishing Company', 130, 0, '2018-01-17', 'Hindi'),
(188, 'hindi.jpg', 'Arya Publishing Company Perfect Sample Papers Hindi Course A Class X (SA-II)', 'Arya', 'Arya Publishing Company', 130, 0, '2018-01-17', 'Hindi'),
(189, 'hindi.jpg', 'Arya Publishing Company Perfect Sample Papers Hindi Course A Class X (SA-II)', 'Arya', 'Arya Publishing Company', 130, 0, '2018-01-17', 'Hindi'),
(190, 'hindi.jpg', 'Arya Publishing Company Perfect Sample Papers Hindi Course A Class X (SA-II)', 'Arya', 'Arya Publishing Company', 130, 0, '2018-01-17', 'Hindi'),
(191, 'hindi.jpg', 'Arya Publishing Company Perfect Sample Papers Hindi Course A Class X (SA-II)', 'Arya', 'Arya Publishing Company', 130, 0, '2018-01-17', 'Hindi'),
(192, 'hindi.jpg', 'Arya Publishing Company Perfect Sample Papers Hindi Course A Class X (SA-II)', 'Arya', 'Arya Publishing Company', 130, 0, '2018-01-17', 'Hindi'),
(193, 'hindi.jpg', 'Arya Publishing Company Perfect Sample Papers Hindi Course A Class X (SA-II)', 'Arya', 'Arya Publishing Company', 130, 0, '2018-01-17', 'Hindi'),
(194, 'hindi.jpg', 'Arya Publishing Company Perfect Sample Papers Hindi Course A Class X (SA-II)', 'Arya', 'Arya Publishing Company', 130, 0, '2018-01-17', 'Hindi'),
(195, 'hindi.jpg', 'Arya Publishing Company Perfect Sample Papers Hindi Course A Class X (SA-II)', 'Arya', 'Arya Publishing Company', 130, 0, '2018-01-17', 'Hindi'),
(196, 'hindi.jpg', 'Arya Publishing Company Perfect Sample Papers Hindi Course A Class X (SA-II)', 'Arya', 'Arya Publishing Company', 130, 0, '2018-01-17', 'Hindi'),
(197, 'eng.jpg', 'Rachna Sagar Together With English Literature ICSE - 10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'English'),
(198, 'eng.jpg', 'Rachna Sagar Together With English Literature ICSE - 10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'English'),
(199, 'eng.jpg', 'Rachna Sagar Together With English Literature ICSE - 10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'English'),
(200, 'eng.jpg', 'Rachna Sagar Together With English Literature ICSE - 10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'English'),
(201, 'eng.jpg', 'Rachna Sagar Together With English Literature ICSE - 10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'English'),
(202, 'eng.jpg', 'Rachna Sagar Together With English Literature ICSE - 10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'English'),
(203, 'eng.jpg', 'Rachna Sagar Together With English Literature ICSE - 10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'English'),
(204, 'eng.jpg', 'Rachna Sagar Together With English Literature ICSE - 10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'English'),
(205, 'eng.jpg', 'Rachna Sagar Together With English Literature ICSE - 10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'English'),
(206, 'eng.jpg', 'Rachna Sagar Together With English Literature ICSE - 10', 'Rachna Sagar', 'Rachna Sagar Pvt.Ltd.-New Delhi', 230, 0, '2018-01-17', 'English'),
(207, '', ' Mathematics ', ' NCERT ', ' NCERT ', 140, 0, '0000-00-00', '  Math '),
(208, '', ' Mathematics ', ' NCERT 2018 ', ' NCERT ', 140, 0, '0000-00-00', '  Math '),
(209, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(210, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(211, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(212, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(213, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(214, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(215, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(216, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(217, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(218, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(219, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(220, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(221, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(222, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(223, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(224, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(225, 'no-pic-avl.gif', ' Kshitij ', ' Hazari Prashad ', ' NCERT ', 160, 0, '1994-12-28', 'Hindi'),
(226, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(227, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi'),
(228, 'no-pic-avl.gif', 'Kshitij', 'Hazari Prashad', 'NCERT', 230, 0, '1995-04-01', 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `book_borrow`
--

CREATE TABLE `book_borrow` (
  `BW_ID` int(11) NOT NULL,
  `B_ID` int(255) NOT NULL,
  `BORROWED_BY` varchar(11) NOT NULL,
  `ISSUED_BY` varchar(11) NOT NULL,
  `ISSUE_DATE` date NOT NULL,
  `OUT_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_borrow`
--

INSERT INTO `book_borrow` (`BW_ID`, `B_ID`, `BORROWED_BY`, `ISSUED_BY`, `ISSUE_DATE`, `OUT_DATE`) VALUES
(16, 52, 'lib0121', 'lib0121', '2018-04-18', '2018-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `book_request`
--

CREATE TABLE `book_request` (
  `REQ_ID` int(11) NOT NULL,
  `M_ID` varchar(255) NOT NULL,
  `B_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `NOS` int(11) NOT NULL,
  `propic` varchar(255) DEFAULT NULL,
  `M_ID` varchar(11) DEFAULT NULL,
  `TYPE` varchar(10) DEFAULT NULL,
  `FNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PHONE_NUMBER` varchar(12) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `MEMBER_TYPE` varchar(50) NOT NULL,
  `MEMBER_DATE` date NOT NULL,
  `EXPIRY_DATE` date DEFAULT NULL,
  `ACTIVE` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='MEMBER TABLE';

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`NOS`, `propic`, `M_ID`, `TYPE`, `FNAME`, `LNAME`, `PASSWORD`, `EMAIL`, `PHONE_NUMBER`, `ADDRESS`, `MEMBER_TYPE`, `MEMBER_DATE`, `EXPIRY_DATE`, `ACTIVE`) VALUES
(120, NULL, 'fac0120', 'Faculty', 'Rahul', 'Singh', '123456', 'singhrash23@gmail.com', '7003442572', 'Kanchrapara, North 24 P.', 'fac', '2018-01-17', '2021-01-17', 0),
(121, '63737_608464899263514_5392286219156277640_n.jpg', 'lib0121', 'Librarian', 'Suman', 'Das', '123456', 'suman.sus@gmail.com', '9804075669', 'Kanchrapara, North 24 P.', 'lib', '2018-01-17', '2021-01-17', 0),
(122, NULL, 'admin', 'Admin', 'LMS', '-ADM', 'admin', 'no-reply@lms.xyz', '8961664471', 'Kolkata', 'admin', '2018-01-17', '2019-04-13', 0),
(123, 'DSC_9772.JPG', 'stu0123', 'Student', 'Abhishek', 'Yadav', '123456', 'abhishek.yadav1398@gmail.com', '8961664471', 'Jadabpur,Kolkata-32', 'stu', '2018-01-20', '2021-01-20', 0),
(124, NULL, 'stu0124', 'Student', 'Anshul', 'Gupta', '123456', 'anshulgupta@lms.xyz', '0000000000', 'Kolkata', 'stu', '2018-01-20', '2021-01-20', 0),
(125, NULL, 'fac0125', 'Faculty', 'Md Shaha', 'Alam', '123456', 'shaha@lmz.xyz', '0000000000', 'Kolkata', 'fac', '2018-01-20', '2021-01-20', 0),
(127, '10644576_855882977810081_5054410888477308435_n.jpg', 'lib0127', 'Librarian', 'Sonali', 'Singh', '123456', 'sonali@lms.xyz', '8745962415', 'Sodepur', 'lib', '2018-04-10', '2021-04-10', 0),
(128, NULL, 'lib0128', 'Librarian', 'NEW', 'LIB', '123', 'mew@lms.xyz', '6381234567', 'Kolkata', 'lib', '2018-04-18', '2021-04-18', 2),
(129, NULL, 'lib0129', 'Librarian', 'Yadav', 'Ahbishek', '123', 'yadav.abhishek@lms.xyz', '8961664471', 'Kolkata', 'lib', '2018-04-18', '2021-04-18', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`B_ID`);

--
-- Indexes for table `book_borrow`
--
ALTER TABLE `book_borrow`
  ADD PRIMARY KEY (`BW_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `book_request`
--
ALTER TABLE `book_request`
  ADD PRIMARY KEY (`REQ_ID`),
  ADD KEY `M_ID` (`M_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`NOS`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `M_ID` (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `B_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
--
-- AUTO_INCREMENT for table `book_borrow`
--
ALTER TABLE `book_borrow`
  MODIFY `BW_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `book_request`
--
ALTER TABLE `book_request`
  MODIFY `REQ_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `NOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_request`
--
ALTER TABLE `book_request`
  ADD CONSTRAINT `book_request_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `members` (`M_ID`),
  ADD CONSTRAINT `book_request_ibfk_2` FOREIGN KEY (`B_ID`) REFERENCES `books` (`B_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
