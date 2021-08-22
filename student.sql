-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 01:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(32) DEFAULT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `pswd` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `pswd`) VALUES
(6, 'Ishimwe', 'Eric', 'hakiz@gmail.com', '$2y$10$xkoikVn8fv5DPSI1ivqmeu9to9aLAO1OTzU.aJ9ABZEr/oq/zLAiO'),
(7, 'Ishimwe', 'Jean Bosco', 'jeanishimwe9@gmail.com', '$2y$10$LbprA6SOwlwF8dwS/Zwq/emHSRe.aPMsSVXq3dzUyAUangjvQihlS'),
(8, 'Akim', 'Agnes', 'akimana@gmail.com', NULL),
(9, 'Aki', 'Agnes', 'akimana@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(255) NOT NULL,
  `attendance_status` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `attendance_status`, `date_created`) VALUES
(73, 1, 'present', '0000-00-00 00:00:00'),
(74, 2, 'present', '0000-00-00 00:00:00'),
(75, 3, 'absent', '0000-00-00 00:00:00'),
(76, 4, 'absent', '0000-00-00 00:00:00'),
(77, 5, 'absent', '0000-00-00 00:00:00'),
(78, 6, 'absent', '0000-00-00 00:00:00'),
(79, 7, 'absent', '0000-00-00 00:00:00'),
(80, 8, 'absent', '0000-00-00 00:00:00'),
(81, 9, 'absent', '0000-00-00 00:00:00'),
(82, 10, 'absent', '0000-00-00 00:00:00'),
(83, 11, 'absent', '0000-00-00 00:00:00'),
(84, 12, 'absent', '0000-00-00 00:00:00'),
(85, 13, 'absent', '0000-00-00 00:00:00'),
(86, 14, 'absent', '0000-00-00 00:00:00'),
(87, 15, 'absent', '0000-00-00 00:00:00'),
(88, 16, 'absent', '0000-00-00 00:00:00'),
(89, 17, 'absent', '0000-00-00 00:00:00'),
(90, 18, 'absent', '0000-00-00 00:00:00'),
(91, 19, 'absent', '0000-00-00 00:00:00'),
(92, 20, 'absent', '0000-00-00 00:00:00'),
(93, 21, 'absent', '0000-00-00 00:00:00'),
(94, 22, 'absent', '0000-00-00 00:00:00'),
(95, 23, 'absent', '0000-00-00 00:00:00'),
(96, 1, '', '0000-00-00 00:00:00'),
(97, 2, '', '0000-00-00 00:00:00'),
(98, 3, '', '0000-00-00 00:00:00'),
(99, 4, '', '0000-00-00 00:00:00'),
(100, 5, '', '0000-00-00 00:00:00'),
(101, 6, '', '0000-00-00 00:00:00'),
(102, 7, '', '0000-00-00 00:00:00'),
(103, 8, '', '0000-00-00 00:00:00'),
(104, 9, '', '0000-00-00 00:00:00'),
(105, 10, '', '0000-00-00 00:00:00'),
(106, 11, '', '0000-00-00 00:00:00'),
(107, 12, '', '0000-00-00 00:00:00'),
(108, 13, '', '0000-00-00 00:00:00'),
(109, 14, '', '0000-00-00 00:00:00'),
(110, 15, '', '0000-00-00 00:00:00'),
(111, 16, '', '0000-00-00 00:00:00'),
(112, 17, '', '0000-00-00 00:00:00'),
(113, 18, '', '0000-00-00 00:00:00'),
(114, 19, '', '0000-00-00 00:00:00'),
(115, 20, '', '0000-00-00 00:00:00'),
(116, 21, '', '0000-00-00 00:00:00'),
(117, 22, '', '0000-00-00 00:00:00'),
(118, 23, '', '0000-00-00 00:00:00'),
(119, 1, 'present', '0000-00-00 00:00:00'),
(120, 2, 'present', '0000-00-00 00:00:00'),
(121, 3, 'absent', '0000-00-00 00:00:00'),
(122, 4, 'absent', '0000-00-00 00:00:00'),
(123, 5, 'absent', '0000-00-00 00:00:00'),
(124, 6, 'absent', '0000-00-00 00:00:00'),
(125, 7, 'absent', '0000-00-00 00:00:00'),
(126, 8, 'absent', '0000-00-00 00:00:00'),
(127, 9, 'absent', '0000-00-00 00:00:00'),
(128, 10, 'absent', '0000-00-00 00:00:00'),
(129, 11, 'absent', '0000-00-00 00:00:00'),
(130, 12, 'absent', '0000-00-00 00:00:00'),
(131, 13, 'absent', '0000-00-00 00:00:00'),
(132, 14, 'absent', '0000-00-00 00:00:00'),
(133, 15, 'absent', '0000-00-00 00:00:00'),
(134, 16, 'absent', '0000-00-00 00:00:00'),
(135, 17, 'absent', '0000-00-00 00:00:00'),
(136, 18, 'absent', '0000-00-00 00:00:00'),
(137, 19, 'absent', '0000-00-00 00:00:00'),
(138, 20, 'absent', '0000-00-00 00:00:00'),
(139, 21, 'absent', '0000-00-00 00:00:00'),
(140, 22, 'absent', '0000-00-00 00:00:00'),
(141, 23, 'absent', '0000-00-00 00:00:00'),
(142, 24, '', '0000-00-00 00:00:00'),
(143, 26, '', '0000-00-00 00:00:00'),
(144, 27, '', '0000-00-00 00:00:00'),
(145, 28, '', '0000-00-00 00:00:00'),
(146, 29, '', '0000-00-00 00:00:00'),
(147, 30, '', '0000-00-00 00:00:00'),
(148, 31, '', '0000-00-00 00:00:00'),
(149, 32, '', '0000-00-00 00:00:00'),
(150, 33, '', '0000-00-00 00:00:00'),
(151, 34, '', '0000-00-00 00:00:00'),
(152, 35, '', '0000-00-00 00:00:00'),
(153, 36, '', '0000-00-00 00:00:00'),
(154, 37, '', '0000-00-00 00:00:00'),
(155, 38, '', '0000-00-00 00:00:00'),
(156, 39, '', '0000-00-00 00:00:00'),
(157, 40, '', '0000-00-00 00:00:00'),
(158, 41, '', '0000-00-00 00:00:00'),
(159, 42, '', '0000-00-00 00:00:00'),
(160, 43, '', '0000-00-00 00:00:00'),
(161, 44, '', '0000-00-00 00:00:00'),
(162, 45, '', '0000-00-00 00:00:00'),
(163, 46, '', '0000-00-00 00:00:00'),
(164, 47, '', '0000-00-00 00:00:00'),
(165, 48, '', '0000-00-00 00:00:00'),
(166, 49, '', '0000-00-00 00:00:00'),
(167, 50, 'present', '0000-00-00 00:00:00'),
(168, 51, 'absent', '0000-00-00 00:00:00'),
(169, 52, 'absent', '0000-00-00 00:00:00'),
(170, 53, 'absent', '0000-00-00 00:00:00'),
(171, 54, 'absent', '0000-00-00 00:00:00'),
(172, 55, 'absent', '0000-00-00 00:00:00'),
(173, 56, 'absent', '0000-00-00 00:00:00'),
(174, 57, 'absent', '0000-00-00 00:00:00'),
(175, 58, 'absent', '0000-00-00 00:00:00'),
(176, 59, 'absent', '0000-00-00 00:00:00'),
(177, 60, 'absent', '0000-00-00 00:00:00'),
(178, 61, 'absent', '0000-00-00 00:00:00'),
(179, 62, 'absent', '0000-00-00 00:00:00'),
(180, 63, 'absent', '0000-00-00 00:00:00'),
(181, 64, 'absent', '0000-00-00 00:00:00'),
(182, 65, 'absent', '0000-00-00 00:00:00'),
(183, 66, 'absent', '0000-00-00 00:00:00'),
(184, 67, 'absent', '0000-00-00 00:00:00'),
(185, 68, 'absent', '0000-00-00 00:00:00'),
(186, 69, 'absent', '0000-00-00 00:00:00'),
(187, 70, 'absent', '0000-00-00 00:00:00'),
(188, 71, 'absent', '0000-00-00 00:00:00'),
(189, 72, 'absent', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(225) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `email` varchar(40) NOT NULL,
  `comment` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `comment`) VALUES
(9, 'Nizeyimana', 'Nizeyimana@gmail.com', 'System is now out'),
(10, 'vvf', 'fvdvds', 'fvcx dfcv');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(32) DEFAULT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `class` text DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `class`, `age`) VALUES
(1, 'Kayiranga', 'Emanuel', 'S1', 13),
(2, 'Kalinda', 'Eric', 'S1', 20),
(3, 'Mugwiza', 'Chartain', 'S1', 13),
(4, 'Musoni', 'John', 'S1', 14),
(5, 'Ishimwe', 'Grace', 'S1', 14),
(6, 'Ishimwe', 'Grace', 'S1', 14),
(7, 'Mukamana', 'Chantal', 'S1', 13),
(8, 'MUNEZERO', 'Elias', 'S1', 12),
(9, '	Mizero', '	Diane', 'S1', 12),
(10, 'Gwiza', '		Allain', 'S1', 12),
(11, '	Amizero', 'Ange', 'S1', 13),
(12, '.	Irakoze', '	ologa', 'S1', 13),
(13, 'Gwiza', '	Fareque', 'S1', 13),
(14, 'Ishimwe', 'Canisius', 'S1', 13),
(15, 'Twahirwa', 'Jean', 'S1', 13),
(16, 'Nyigena', 'patrick', 'S1', 13),
(17, 'Mukara', 'Allain', 'S1', 14),
(18, '	Ganza', 'Crispian', 'S1', 14),
(19, '	Cyuzuzo', '	Theogene', 'S1', 14),
(20, 'Iganze', 'Benni', 'S1', 13),
(21, 'Kamikazi', 'Diane', 'S1', 13),
(22, 'Izola', '	Ibrahim', 'S1', 12),
(23, '	Izere', 'Albert', 'S1', 14),
(24, '		Gisa', '	Fred', 'S2', 14),
(26, 'Niyonzima', 'Christian', 'S2', 14),
(27, 'Twiringiyimana	', 'Clement', 'S2', 14),
(28, '	Keza', 'Chartine', 'S2', 15),
(29, 'Ingabire', 'Diane', 'S2', 15),
(30, 'Ngabo', 'Hugues', 'S2', 14),
(31, 'Uwibwjije', 'Chretien', 'S2', 14),
(32, 'Shema', 'Matie', 'S2', 14),
(33, 'Cyuhira', 'Derick', 'S2', 14),
(34, 'Tuyishimire', 'Angeline', 'S2', 14),
(35, 'Nshimiyimana', 'Cyprien', 'S2', 14),
(36, '	Ikirezi', 'Jeanne', 'S2', 14),
(37, 'Bwiza', '	Gloria', 'S2', 14),
(38, 'Ngabo', '	Soloneil', 'S2', 14),
(39, 'Gisubizo', '		Anne', 'S2', 14),
(40, '	Niyonzima', 'Christian', 'S2', 14),
(41, 'Niyonzima', 'Christian', 'S2', 14),
(42, 'Niyonzima', 'Christian', 'S2', 14),
(43, 'Twiringiyimana	', 'Christian', 'S2', 14),
(44, 'Twiringiyimana	', 'Christian', 'S2', 14),
(45, 'uwimana	', 'peter', 'S2', 14),
(46, 'uwimana	', 'peter', 'S2', 14),
(47, 'Keza', 'Chartine', 'S2', 14),
(48, '	Ingabire', 'Diane', 'S2', 14),
(49, 'Ngabo', 'Hugues', 'S2', 14),
(50, 'Uwibwjije', 'Chretien', 'S2', 14),
(51, 'Shema', 'Matie', 'S2', 14),
(52, 'Cyuhira', 'Derick', 'S2', 14),
(53, '	tuyishimire', 'Angeline', 'S2', 14),
(54, 'Nshimiyimana', 'Cyprien', 'S2', 14),
(55, '	Ikirezi', '	Jeanne', 'S2', 14),
(56, 'Bwiza', '	Gloria', 'S2', 14),
(57, 'Ngabo', '	Soloneil', 'S2', 14),
(58, '	Gisubizo', 'Anne', 'S2', 14),
(59, 'Mpano', 'Deo', 'S2', 14),
(60, 'Nizeyimana', 'Donatha', 'S2', 14),
(61, 'Mugabo', 'Daniel', 'S2', 14),
(62, 'Niyitanga', 'Jean Remmy', 'S2', 14),
(63, 'CYizere', '	Claire', 'S2', 14),
(64, 'Muneza', '	Nancy', 'S2', 14),
(65, 'Tuyishime', 'Aime', 'S2', 14),
(66, 'Bizimana', 'Egide', 'S2', 14),
(67, 'Kijyambere', 'Clarisse', 'S2', 14),
(68, '	Kwizera', '	Jean Baptiste', 'S2', 14),
(69, 'Ndagijimana', '	Eric', 'S2', 14),
(70, 'cyiza', '	Christian', 'S2', 14),
(71, 'Mugemana', '	Mike', 'S2', 14),
(72, 'Kayigi', '	Aimable', 'S2', 14),
(73, 'marcelle', 'lola', 'S3', 15),
(74, 'habimana', 'cedric', 'S3', 15),
(75, 'Mugisha', '	Mike', 'S3', 15),
(76, 'Ishimwe', 'Falek', 'S3', 15),
(77, 'Kwihangana', 'Emile', 'S3', 15),
(78, 'Munezero', '	Elizabeth', 'S3', 15),
(79, 'Mukarubuga', '	Albertine', 'S3', 15),
(80, '	Kwibuka', '	Alex', 'S3', 15),
(81, '	Uwibwjije', '	Chretien', 'S3', 16),
(82, 'Shema', 'Matie', 'S3', 16),
(83, '	Cyuhira', '	Derick', 'S3', 15),
(84, 'Tuyishimire', 'Angeline', 'S3', 15),
(85, 'Nshimiyimana', 'Cyprien', 'S3', 15),
(86, 'Ikirezi', '	Jeanne', 'S3', 15),
(87, 'Bwiza', '	Gloria', 'S3', 15),
(88, '	Nkubana', '	Braise', 'S3', 15),
(89, 'Nsegiyumva Joshua	', 'Ghislain', 'S3', 15),
(90, 'Nshimiyimana	', 'Emmanuel', 'S3', 15),
(91, 'Niyonkuru', '	Tresor', 'S3', 15),
(92, 'Kayiranga', '	Emanuel', 'S3', 15),
(93, 'Mugwiza', 'Chartain', 'S3', 15),
(94, 'Musoni', 'John', 'S3', 15),
(95, '	Ishimwe', 'Grace', 'S3', 15),
(96, 'Mukamana', 'Chantal', 'S3', 15),
(97, '	Kageruka', '	Simeon', 'S4', 16),
(98, 'Cyubahiro', 'Christian', 'S4', 16),
(99, '	Byiringiro', '	Desire', 'S4', 16),
(100, '	Mangara', 'Joshua', 'S4', 16),
(101, 'Mugabo', '	Theoneste', 'S4', 16),
(102, 'Nyiraminani', '	Cecile', 'S4', 16),
(103, 'Mukarubuga', 'Albertine', 'S4', 16),
(104, 'Kwibuka', '	Alex', 'S4', 16),
(105, 'Amizero', 'Ange', 'S4', 16),
(106, 'Irakoze', 'Ologa', 'S4', 16),
(107, '	Gwiza', '	Fareque', 'S4', 16),
(108, 'Ishimwe', 'Canisius', 'S4', 16),
(109, 'Twahirwa', 'Jean', 'S4', 16),
(110, 'Nyigena', '	patrick', 'S4', 16),
(111, '	Mukara', 'Allain', 'S4', 16),
(112, 'Ganza', 'Crispian', 'S4', 16),
(113, '	Nsegiyumva Joshua	', 'Ghislain', 'S4', 16),
(114, 'Nshimiyimana	', '	Emmanuel', 'S4', 16),
(115, 'Niyonkuru', '	Tresor', 'S4', 16),
(116, 'Izere', '	Albert', 'S4', 16),
(117, 'Gisa', '	Fred', 'S4', 16),
(118, 'Higiro', 'Hubert', 'S4', 16),
(119, 'Niyonzima', '	Christian', 'S4', 16),
(120, 'Twiringiyimana	', 'Clement', 'S4', 16),
(121, 'Keza	', '	Chartine', 'S4', 16),
(122, '	Ingabire', 'Diane', 'S4', 16),
(123, 'Ngabo', 'Hugues', 'S4', 16),
(124, 'Abayisenga', '	Jeanne', 'S5', 17),
(125, 'Bizimana', 'Chartain', 'S5', 17),
(126, 'Mukeshimana', 'Gorreth', 'S5', 17),
(127, 'Kwizera', '	Pacifique', 'S5', 17),
(128, '	Ganza', 'Christian', 'S5', 17),
(129, 'Mugabekazi', 'Claudette', 'S5', 17),
(130, '	Karangwa', 'Alfred', 'S5', 17),
(131, 'Mukunzi', '	Fiston', 'S5', 17),
(132, 'Munezero', '	Elias', 'S5', 17),
(133, 'Mizero', 'Diane', 'S5', 17),
(134, 'Gwiza', 'Allain', 'S5', 17),
(135, '	Amizero', '	Ange', 'S5', 17),
(136, '	Irakoze', 'Ologa', 'S5', 17),
(137, 'Ishimwe', 'Canisius', 'S5', 17),
(138, 'Twahirwa', 'Jean', 'S5', 17),
(139, 'Nyigena', 'patrick', 'S5', 17),
(140, '	Mukara', 'Allain', 'S5', 17),
(141, '	Ganza', 'Crispian', 'S5', 17),
(142, 'Cyuzuzo', '	Theogene', 'S5', 17),
(143, 'Rusaro', 'Deborah', 'S5', 17),
(144, '	Shimwamana', 'Didier', 'S5', 17),
(145, 'Umurutasate', 'Cecile', 'S5', 17),
(146, 'Nikwibishaka', 'Abikis', 'S5', 17),
(147, 'Hategekimana', 'Jean De dieu', 'S5', 17),
(148, '	Akuzwe Nibyobyiza', '	Aline', 'S6', 18),
(149, '	Ashimwe Aime', 'Nancy', 'S6', 18),
(150, 'Bizimana', 'Ignace', 'S6', 18),
(151, '	Bitonda Tuyizere', '	Elie', 'S6', 18),
(152, '	Cyubahiro', '	Innocent', 'S6', 18),
(153, '	Irabaruta', 'Albertine', 'S6', 18),
(154, 'Iradukunda', '	Sammuel', 'S6', 18),
(155, 'Iradukunda', '	Sammuel', 'S6', 18),
(156, '.	Hategekimana', '	Jean De dieu', 'S6', 18),
(157, 'Imanishimwe', '	Cynthia', 'S6', 18),
(158, 'Ishimwe', '	Diane', 'S6', 18),
(159, 'Ishimwe', '	Claude', 'S6', 18),
(160, 'Ishimwe', 'Jean Bosco', 'S6', 18),
(161, 'Kamali', '	Pacifique', 'S6', 18),
(162, 'Kirezi', '	Landine', 'S6', 18),
(163, 'Mahoro', 'Nadine', 'S6', 18),
(164, 'Munezero', 'Elizabeth', 'S6', 18),
(165, 'Nkubana', '	Braise', 'S6', 18),
(166, '	Nsengiyumva Joshua	', '	Ghislain', 'S6', 18),
(167, 'Nshimiyimana	', 'Emmanuel', 'S6', 18),
(168, '	Niyonshuti', '	Sylvain', 'S6', 18),
(169, 'Kasine', 'Frola', 'S6', 18),
(170, 'Mutambyi', 'David', 'S6', 18),
(171, 'Rusaro', '	Deborah', 'S6', 18),
(172, '	Shimwamana', '	Didier', 'S6', 18),
(173, '	Umurutasate', 'Cecile', 'S6', 18),
(174, '	Nikwibishaka', '	Abikis', 'S6', 18),
(175, 'Shema', 'Hugues', 'S6', 18),
(176, 'Shema', 'Diane', 'S4', 18),
(177, 'habimana', 'etienne', 'S1', 13);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `fname` varchar(32) DEFAULT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `pwd` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fname`, `lname`, `email`, `pwd`) VALUES
(3, 'Mukunzi', 'jean', 'mukunzj@gmail.com', '$2y$10$L2r0z5ZblBqwuCcjzwxiXeOIx2O7kfs9KvmzpZjEZRL0n/xNGF1ka'),
(4, 'Ishimwe ', 'Christian', 'ishimwe@gmail.com', '$2y$10$0wRiNmOkLC5XJ16tCe8kDebMji7HF008gFY1rtHMZ4bCKSZ/eiuJu'),
(7, 'hirwa ', 'Christian', 'hakiz@gmail.com', '$2y$10$RWe4m/pO.9eKiN0QC/DFzuMlDGWvhMI7tRpGkh.yBHhEyECEJbIVa'),
(8, 'Ishimwe', 'Eric', 'student@gmail.com', '$2y$10$VDmHOankIgxtmkw2KK7QZ.QagkhYg5WN4/RiSHb8ykfkAYyz9LE0S'),
(10, 'habimana', 'etienne', 'haba@gmail.com', '$2y$10$k6hnNfWJf2g6RUiov5wsXOu5Em4jVZQShlWLDosgtNXVjyd0xGxWO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
