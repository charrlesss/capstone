-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 05:28 PM
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
-- Database: `fms_integ`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-employe-accounts`
--

CREATE TABLE `admin-employe-accounts` (
  `account_id` bigint(6) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `birthdate` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `contact_number` varchar(200) NOT NULL,
  `position_id` varchar(200) NOT NULL,
  `department_id` varchar(200) NOT NULL,
  `employee_id` varchar(200) NOT NULL,
  `archive` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `createdAt_account` varchar(200) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-employe-accounts`
--

INSERT INTO `admin-employe-accounts` (`account_id`, `firstname`, `lastname`, `middlename`, `gender`, `email`, `address`, `birthdate`, `country`, `contact_number`, `position_id`, `department_id`, `employee_id`, `archive`, `active`, `createdAt_account`, `profile`, `password`) VALUES
(22001, 'charles', 'palencia', 'andrecoso', 'male', 'charlespalencia21@gmail.com', 'bagong silang', '2023-02-28', 'Philippines', '09072147761', '2', '8', '3A52321', 0, 0, '2023-03-02 5:51:15', 'e1d3dbac-efe5-413b-a125-21feafc37ec5.jpg', '$2y$10$D3Glx9z.lP.kYpomjYX87OIq.b348IEwomd0Q4Ds13j79.Qy7aJcO'),
(22010, 'log1', 'log1log1', 'andrecoso', 'male', 'log1@gmail.com', 'bagong silang', '03/24/2005', 'Philippines', '09087246651', '1', '5', '2192313A', 0, 0, '2023-03-19 1:56:21', '5d7717ab-738e-414c-a1be-8aae1674fb98.webp', '$2y$10$Wa5QBKGwdDiNXZGRanLZK.A4W69IxaChX1V/h3JvYITYJSDh0P/yK'),
(22011, 'log2', 'log2log2', 'andrecoso', 'male', 'log1@gmail.com', 'bagong silang', '03/24/2005', 'Philippines', '09087246651', '1', '6', '33A19329', 0, 0, '2023-03-19 1:56:39', '35b3f190-58df-481f-9992-e67fd1cf1457.jpg', '$2y$10$CBDJ2H0WEq2WDY5dLKdhouOjV8wU8K4pH6oG7vtMGqSY5retJTu.C'),
(22012, 'dar', 'darly', 'andrecoso', 'male', 'darly@gmail.com', 'bagong silang', '03/16/2005', 'Philippines', '09072148812', '1', '7', '33A29261', 0, 0, '2023-03-19 2:05:26', '4a0eb2da-0799-40e9-9227-1518d7805b1c.jpg', '$2y$10$YV..BkQHn2Vn.3C9JF8KUuIvLVu2L3uZodrukxGfaCibsdJ.Qti8S'),
(22013, 'cor1', 'cor1', 'andrecoso', 'male', 'core1@gmail.com', 'bagong silang', '03/18/2005', 'Philippines', '09072148812', '1', '1', '39A63120', 0, 0, '2023-03-19 2:06:06', '9d836894-a038-48fe-b9ec-86e11c5d4dec.jpg', '$2y$10$MpI4crxZQ2fLAgUJwo6AZ.8MdcgrfIl5VclmvSorizKp2zHDmqE9e'),
(22014, 'cor2', 'cor2', 'andrecoso', 'male', 'core1@gmail.com', 'bagong silang', '03/18/2005', 'Philippines', '09072148812', '1', '2', '52319A31', 0, 0, '2023-03-19 2:06:15', '2368d247-8b4e-456e-b7fd-de35707f8acd.jpg', '$2y$10$E2z/1UX2QC3Sb.iiN7GzDOjSv440z3EYpbDgrHM4dAps8/AdLJoUu'),
(22015, 'super_admin', 'super suepr', 'andrecoso', 'male', 'superadmin@gmial.com', 'manok', '03/16/2005', 'Philippines', '09082746651', '3', '1', '393182A0', 0, 0, '2023-03-19 2:43:08', 'b0e71636-93ea-45af-8edc-584b4e276b45.jpg', '$2y$10$otS2podA8mmtBPVhgl/n9uHuIX3Mxvn5mvW0GWyu4FHeUZOVTS82C'),
(22016, 'hr2', 'hr2', 'andrecoso', 'male', 'hr1@gmail.com', 'bagong silang', '03/25/2010', 'Philippines', '09072147762', '1', '4', '223123A0', 0, 0, '2023-03-20 10:28:21', '767a0109-12dc-4fc7-98b4-704e5db1133e.webp', '$2y$10$MlcyYasjo70pFJKX.jvNYuErj0a9fal4w7w5A9yzLJjz5sAF1rcOK'),
(22017, 'hr1', 'hr1', 'andrecoso', 'male', 'hr2@gmail.com', 'bagong silang', '03/25/2010', 'Philippines', '09072147762', '1', '3', 'A3035022', 0, 0, '2023-03-20 10:28:50', '1a237a10-a23b-4864-b381-170c81cae7ce.webp', '$2y$10$2Rrs46sSSICsAPEAxZBmT.zzNAjoLwuwO.MZBFBUrMArWcE.fR25a');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `cover_letter` text NOT NULL,
  `position_id` int(30) NOT NULL,
  `resume_path` text NOT NULL,
  `process_id` tinyint(30) NOT NULL DEFAULT 0 COMMENT '0=for review\r\n',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `email`, `contact`, `address`, `cover_letter`, `position_id`, `resume_path`, `process_id`, `date_created`) VALUES
(54, 'Timothy James', 'S', 'Bartolome', 'Male', 'timothyJames@gmail.com', '323232321', 'lot16 capricorn st., carmel v tandang sora q.c', 'dsadosadoksa', 13, '1653066060_Kami Export - LEHANN JAY PANGANIBAN - ELS - Final Module for Second Quarter.pdf', 12, '2022-05-21 01:01:03'),
(55, 'master', 'a', 'pogi', 'Male', 'dscdd', '12334466', 'dskdmslos', 'dksjdldwpk', 2, '1653111480_Kami Export - LEHANN JAY PANGANIBAN - ELS - Final Module for Second Quarter.pdf', 12, '2022-05-21 13:38:23'),
(58, 'marjon', 'tactacon', 'esaga', 'Male', 'jonesaga26@gmail.com', '42423411', 'lot16 capricorn st., carmel v tandang sora quezon city', 'dsfs', 4, '', 13, '2022-05-21 19:59:31'),
(59, 'Daniel', 'C', 'Padilla', 'Male', 'padilla@gmail.com', '09292567521', 'deparo caloocan city', '', 2, '1653141060_Kami Export - LEHANN JAY PANGANIBAN - ELS - Final Module for Second Quarter.pdf', 12, '2022-05-21 21:51:56'),
(60, 'Dhin Zon', 'Nabor', 'Mahinay', 'Male', 'dhinzon@gmail.com', '09298397327', 'sdsd', 'sdsd', 2, '', 8, '2022-05-26 01:49:13'),
(61, 'Abaya', 'C', 'Elmera', 'Female', 'elmera@gmail.com', '123232', 'sads', 'sadsads', 2, '6761-', 13, '2022-05-26 02:50:52'),
(62, 'Mhyles', 'C', 'Agramon', 'Female', 'sdsd@gmail.com', '1322131', 'sdsa', 'asdsad', 4, '40158-', 0, '2022-05-26 03:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `appointment-log`
--

CREATE TABLE `appointment-log` (
  `log_id` int(11) NOT NULL,
  `req_id` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment-log`
--

INSERT INTO `appointment-log` (`log_id`, `req_id`, `time`) VALUES
(1, ' 42', ' 1678250562'),
(2, ' 43', ' 1678250576'),
(3, ' 44', ' 1678250644'),
(4, ' 45', ' 1678250731'),
(5, ' 45', ' 1678250849'),
(6, '42', '1678250943'),
(7, '43', '1678250970'),
(8, '46', '1678250985'),
(9, '47', '1678260357'),
(10, '48', '1678261065'),
(11, '48', '1678261287'),
(12, '49', '1678261899'),
(13, '50', '1678261970'),
(14, '46', '1678262435'),
(15, '50', '1678262466'),
(16, '50', '1678262481'),
(17, '51', '1678268011'),
(18, '51', '1678268040'),
(19, '49', '1678324461'),
(20, '22', '1678324530'),
(21, '22', '1678324538'),
(22, '48', '1678324780'),
(23, '52', '1678324808'),
(24, '53', '1678324808'),
(25, '54', '1678324860'),
(26, '55', '1678324860'),
(27, '56', '1678324876'),
(28, '53', '1678324888'),
(29, '55', '1678324888'),
(30, '22', '1678324986'),
(31, '54', '1678324986'),
(32, '52', '1678326094'),
(33, '57', '1678456471'),
(34, '57', '1678456837'),
(35, '57', '1678456964'),
(36, '57', '1678457087'),
(37, '58', '1678457274'),
(38, '58', '1678457280'),
(39, '58', '1678457324'),
(40, '58', '1678457328'),
(41, '58', '1678457350'),
(42, '58', '1678457356'),
(43, '58', '1678457790'),
(44, '58', '1678457796'),
(45, '', '1678457796'),
(46, '58', '1678457823'),
(47, '58', '1678457831'),
(48, '', '1678457831'),
(49, '58', '1678457897'),
(50, '58', '1678457902'),
(51, '', '1678457903'),
(52, '58', '1678457955'),
(53, '58', '1678457962'),
(54, '', '1678457962'),
(55, '58', '1678457982'),
(56, '58', '1678457991'),
(57, '', '1678457991'),
(58, '58', '1678458060'),
(59, '58', '1678458067'),
(60, '', '1678458067'),
(61, '58', '1678458081'),
(62, '58', '1678458088'),
(63, '', '1678458088'),
(64, '58', '1678458131'),
(65, '58', '1678458137'),
(66, '', '1678458137'),
(67, '58', '1678458289'),
(68, '58', '1678458295'),
(69, '58', '1678458479'),
(70, '58', '1678458485'),
(71, '58', '1678458496'),
(72, '58', '1678458503'),
(73, '58', '1678458587'),
(74, '58', '1678458590'),
(75, '58', '1678458712'),
(76, '58', '1678458717'),
(77, '58', '1678458922'),
(78, '58', '1678458933'),
(79, '58', '1678459113'),
(80, '58', '1678459120'),
(81, '59', '1678590367'),
(82, '59', '1678591393'),
(83, '59', '1678591443'),
(84, '59', '1678591539'),
(85, '59', '1678591544'),
(86, '59', '1678591554'),
(87, '59', '1678591559'),
(88, '59', '1678592404'),
(89, '59', '1678592409'),
(90, '59', '1678592431'),
(91, '59', '1678592454'),
(92, '59', '1678592488'),
(93, '59', '1678592504'),
(94, '59', '1678592544'),
(95, '59', '1678592773'),
(96, '59', '1678592777'),
(97, '59', '1678592784'),
(98, '59', '1678592802'),
(99, '59', '1678593039'),
(100, '59', '1678593048'),
(101, '59', '1678593081'),
(102, '59', '1678593127'),
(103, '59', '1678593141'),
(104, '59', '1678593274'),
(105, '59', '1678593280'),
(106, '59', '1678593823'),
(107, '59', '1678593830'),
(108, '59', '1678593842'),
(109, '59', '1678593853'),
(110, '59', '1678593889'),
(111, '59', '1678593903'),
(112, '59', '1678594092'),
(113, '59', '1678594100'),
(114, '59', '1678594502'),
(115, '59', '1678594511'),
(116, '59', '1678596009'),
(117, '59', '1678596018'),
(118, '59', '1678596055'),
(119, '59', '1678596067'),
(120, '59', '1678596106'),
(121, '59', '1678596116'),
(122, '60', '1678668935');

-- --------------------------------------------------------

--
-- Table structure for table `asset_auditing`
--

CREATE TABLE `asset_auditing` (
  `item_num` int(11) NOT NULL,
  `item` varchar(100) DEFAULT NULL,
  `good_item` int(100) DEFAULT NULL,
  `bad_item` int(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asset_auditing`
--

INSERT INTO `asset_auditing` (`item_num`, `item`, `good_item`, `bad_item`, `date`) VALUES
(1, 'paper', 22, 11, '2023-02-07'),
(2, 'ballpen', 32, 10, '2023-02-07'),
(9, 'yeah', 22, 11, '02-2023'),
(10, 'kopiko', 25, 13, '02-2023'),
(11, 'shampoo', 23, 14, '02-2023'),
(12, 'safeguard', 21, 10, '02-2023'),
(13, 'milo', 24, 12, '02-2023');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `empoyee_id` int(20) NOT NULL,
  `log_type` tinytext NOT NULL COMMENT '	1 = AM IN,2 = AM out, 3= PM IN, 4= PM out',
  `datetime_log` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `empoyee_id`, `log_type`, `datetime_log`, `date_updated`) VALUES
(1, 54, '1', '2023-03-10 00:00:00', '2023-03-10 00:00:00'),
(2, 54, '1', '2023-03-17 19:09:46', '2023-03-17 19:09:46'),
(3, 54, '2', '2023-03-17 19:10:06', '2023-03-17 19:10:06'),
(4, 54, '3', '2023-03-17 19:10:16', '2023-03-17 19:10:16'),
(5, 54, '4', '2023-03-17 19:10:23', '2023-03-17 19:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `available_list`
--

CREATE TABLE `available_list` (
  `item_num` int(11) NOT NULL,
  `Driver` varchar(100) DEFAULT NULL,
  `Vehicle_Types` varchar(100) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `Reserve` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `available_list`
--

INSERT INTO `available_list` (`item_num`, `Driver`, `Vehicle_Types`, `Status`, `Reserve`) VALUES
(1, 'Victor Goyhi', 'Raptor', 'Active', 'Available'),
(2, 'Christina Capitle', 'L300', 'Active', 'Available'),
(3, 'El Capits', 'Raptor', 'Active', 'Available'),
(4, 'Daryl Estolonio', 'Innova', 'Active', 'Available'),
(5, 'Maria Pablo', 'Vios', 'Active', 'Available'),
(6, 'Philip Gomera', 'Vios ', 'Active', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `awardingsocial`
--

CREATE TABLE `awardingsocial` (
  `awardId` int(11) NOT NULL,
  `id` int(30) NOT NULL,
  `Awards` varchar(250) NOT NULL,
  `dateawards` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awardingsocial`
--

INSERT INTO `awardingsocial` (`awardId`, `id`, `Awards`, `dateawards`) VALUES
(9, 54, '        PASSED TRAINING', 'May 21, 2022'),
(10, 54, '      95% rating for the works', 'May 21, 2022'),
(11, 54, '      95% rating for the works', ''),
(12, 54, 'panget mo', 'May 21, 2022'),
(13, 58, '           Completed Training', 'May 21, 2022'),
(14, 54, '       Employee of the Month', 'May 21, 2022'),
(15, 54, '       employee of the month', 'March 14, 2023');

-- --------------------------------------------------------

--
-- Table structure for table `cargo_items`
--

CREATE TABLE `cargo_items` (
  `cargo_id` int(30) NOT NULL,
  `cargo_type_id` int(30) NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `weight` double NOT NULL DEFAULT 0,
  `total` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cargo_items`
--

INSERT INTO `cargo_items` (`cargo_id`, `cargo_type_id`, `price`, `weight`, `total`) VALUES
(1, 1, 550, 3, 1650),
(1, 2, 450, 10, 4500),
(1, 3, 800, 5, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `cargo_list`
--

CREATE TABLE `cargo_list` (
  `id` int(30) NOT NULL,
  `ref_code` varchar(100) NOT NULL,
  `shipping_type` int(1) NOT NULL DEFAULT 1 COMMENT '1 = city to city,\r\n2 = state to state,\r\n3 = country to country',
  `total_amount` double NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending,\r\n1 = In-Transit,\r\n2 = Arrived at Station,\r\n3 = Out for Delivery,\r\n4 = Delivered',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cargo_list`
--

INSERT INTO `cargo_list` (`id`, `ref_code`, `shipping_type`, `total_amount`, `status`, `date_created`, `date_updated`) VALUES
(1, '20220200001', 3, 10150, 2, '2022-02-22 13:12:50', '2022-02-22 14:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `cargo_meta`
--

CREATE TABLE `cargo_meta` (
  `cargo_id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cargo_meta`
--

INSERT INTO `cargo_meta` (`cargo_id`, `meta_field`, `meta_value`) VALUES
(1, 'sender_name', 'Mark Cooper'),
(1, 'sender_contact', '09123456789'),
(1, 'sender_address', 'Sample Address Only'),
(1, 'sender_provided_id_type', 'TIN'),
(1, 'sender_provided_id', '456789954'),
(1, 'receiver_name', 'Samantha Jane Miller'),
(1, 'receiver_contact', '096547892213'),
(1, 'receiver_address', 'This a sample address only'),
(1, 'from_location', 'This is a sample From Location'),
(1, 'to_location', 'This is a sample of Cargo\'s Destination.');

-- --------------------------------------------------------

--
-- Table structure for table `cargo_type_list`
--

CREATE TABLE `cargo_type_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `city_price` double NOT NULL DEFAULT 0,
  `state_price` double NOT NULL DEFAULT 0,
  `country_price` double NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinytext NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cargo_type_list`
--

INSERT INTO `cargo_type_list` (`id`, `name`, `description`, `city_price`, `state_price`, `country_price`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, 'Electronic Devices', 'Mobile/Smartphones, Tv, Computer/Laptop, etc.', 150, 250, 550, 1, '0', '2022-02-22 10:15:41', NULL),
(2, 'Dry Foods', 'Dry Foods', 100, 200, 450, 1, '0', '2022-02-22 10:16:17', NULL),
(3, 'Fragile', 'Easy to break such as glasses.', 200, 400, 800, 1, '0', '2022-02-22 10:18:55', NULL),
(4, 'test', 'test', 1, 2, 3, 0, '1', '2022-02-22 10:19:07', '2022-02-22 10:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `claimId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dateReimbursment` date NOT NULL,
  `amt` double NOT NULL,
  `note` varchar(255) NOT NULL,
  `statu_claims` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `claims`
--

INSERT INTO `claims` (`claimId`, `id`, `title`, `dateReimbursment`, `amt`, `note`, `statu_claims`) VALUES
(1, 54, '', '0000-00-00', 0, '', 'approved'),
(2, 54, '', '0000-00-00', 0, '', 'approved'),
(3, 54, 'sdsd', '2023-03-14', 0, '', 'approved'),
(4, 54, 'sadsad', '2023-03-14', 1444, 'dsdsd', 'pending'),
(5, 0, '', '0000-00-00', 0, '0', 'pending'),
(6, 0, '', '0000-00-00', 0, '0', 'pending'),
(7, 0, '', '0000-00-00', 0, '0', 'pending'),
(8, 54, 'rfsdfsdfdsf', '2023-03-14', 1444, 'fdndghfgdhdf', 'approved'),
(9, 61, 'nagabono', '2023-03-14', 1444, 'hgfhhjfhjlklkjjkl', 'approved'),
(10, 54, 'sabog', '2023-03-21', 123, 'manok', 'pending'),
(11, 54, 'sabomng', '2023-03-23', 1233, 'sadas', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `compensation`
--

CREATE TABLE `compensation` (
  `comId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ss` double NOT NULL,
  `pagIbg` double NOT NULL,
  `phlhealth` double NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `compensation`
--

INSERT INTO `compensation` (`comId`, `id`, `ss`, `pagIbg`, `phlhealth`, `salary`) VALUES
(1, 54, 0, 0, 0, 0),
(2, 54, 2111, 0, 0, 0),
(3, 54, 23, 0, 31, 111),
(4, 54, 111, 111, 111, 111),
(5, 61, 119, 76, 80, 570),
(6, 54, 12, 123, 1234, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Core 1 Deparment'),
(2, 'Core 2 Department'),
(3, 'HR 1 Department'),
(4, 'HR 2 Deparment'),
(5, 'Logistic 1 Deparment'),
(6, 'Logistic 2 Deparment'),
(7, 'Finanacial Department'),
(8, 'Administrative Department');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `deptId` int(11) NOT NULL,
  `departmentName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`deptId`, `departmentName`) VALUES
(1, 'Information Technology '),
(2, 'Mechanical Engineering Dept'),
(3, 'Accounting Department'),
(4, 'Logistic'),
(5, 'Core Department'),
(6, 'Human Resources Department'),
(7, 'Financial Department');

-- --------------------------------------------------------

--
-- Table structure for table `document_request`
--

CREATE TABLE `document_request` (
  `item_num` int(11) NOT NULL,
  `Fname` varchar(100) DEFAULT NULL,
  `Dtype` varchar(100) DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Details` varchar(100) DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL,
  `Department` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document_request`
--

INSERT INTO `document_request` (`item_num`, `Fname`, `Dtype`, `Status`, `Details`, `Date`, `Department`) VALUES
(0, 'John Vergara ', 'Subcontract', 'Pending', 'wdahbacjkadcbwackjsaca', 'nov 14 2025', '12321312');

-- --------------------------------------------------------

--
-- Table structure for table `document_track`
--

CREATE TABLE `document_track` (
  `item_num` int(11) NOT NULL,
  `tracking` varchar(100) DEFAULT NULL,
  `to` varchar(100) DEFAULT NULL,
  `D_type` varchar(100) DEFAULT NULL,
  `A_needed` varchar(100) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `P_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document_track`
--

INSERT INTO `document_track` (`item_num`, `tracking`, `to`, `D_type`, `A_needed`, `details`, `status`, `P_time`) VALUES
(0, '202020-111', 'Admin', 'Request Letter', 'For Approval', 'Supplier', 'Ongoing', 'Apr/11/2023');

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `empdetailsid` int(30) NOT NULL,
  `id` int(30) NOT NULL,
  `statusDesc` varchar(200) NOT NULL,
  `date_created_stat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`empdetailsid`, `id`, `statusDesc`, `date_created_stat`) VALUES
(27, 2, 'HIRED', '2022-05-16 19:59:08'),
(28, 2, 'WEB DEVELOPER', '2022-05-16 19:59:09'),
(29, 46, 'HIRED', '2022-05-16 20:00:45'),
(30, 46, 'Receptionist', '2022-05-16 20:00:45'),
(31, 47, 'HIRED', '2022-05-16 20:05:48'),
(32, 47, 'Receptionist', '2022-05-16 20:05:49'),
(33, 5, 'HIRED', '2022-05-16 20:06:20'),
(34, 5, 'Software Engineering', '2022-05-16 20:06:20'),
(35, 6, 'HIRED', '2022-05-16 21:33:26'),
(36, 6, 'Software Engineering', '2022-05-16 21:33:26'),
(37, 48, 'HIRED', '2022-05-19 18:47:53'),
(38, 48, 'Business Process Outsourcing', '2022-05-19 18:47:53'),
(39, 49, 'HIRED', '2022-05-19 19:54:51'),
(40, 49, 'WEB DEVELOPER', '2022-05-19 19:54:51'),
(41, 52, 'HIRED', '2022-05-19 20:50:18'),
(42, 52, 'Receptionist', '2022-05-19 20:50:18'),
(43, 50, 'HIRED', '2022-05-19 21:00:00'),
(44, 50, 'Vacancy', '2022-05-19 21:00:00'),
(45, 51, 'HIRED', '2022-05-19 21:00:09'),
(46, 51, 'WEB DEVELOPER', '2022-05-19 21:00:09'),
(47, 53, 'HIRED', '2022-05-19 21:11:09'),
(48, 53, 'WEB DEVELOPER', '2022-05-19 21:11:10'),
(49, 52, 'HIRED', '2022-05-21 00:41:13'),
(50, 52, 'Receptionist', '2022-05-21 00:41:14'),
(51, 54, 'HIRED', '2022-05-21 01:02:39'),
(52, 54, 'Business Process Outsourcing', '2022-05-21 01:02:39'),
(53, 55, 'HIRED', '2022-05-21 14:48:48'),
(54, 55, 'WEB DEVELOPER', '2022-05-21 14:48:48'),
(55, 56, 'HIRED', '2022-05-21 15:07:43'),
(56, 56, 'Vacancy', '2022-05-21 15:07:43'),
(57, 56, 'HIRED', '2022-05-21 15:07:44'),
(58, 56, 'Vacancy', '2022-05-21 15:07:44'),
(59, 57, 'HIRED', '2022-05-21 15:42:04'),
(60, 57, 'Vacancy', '2022-05-21 15:42:04'),
(61, 58, 'HIRED', '2022-05-21 20:06:30'),
(62, 58, 'Core Human Resource Management', '2022-05-21 20:06:30'),
(63, 59, 'HIRED', '2022-05-21 21:55:19'),
(64, 59, 'WEB DEVELOPER', '2022-05-21 21:55:20'),
(65, 61, 'HIRED', '2023-03-14 03:05:43'),
(66, 61, 'WEB DEVELOPER', '2023-03-14 03:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `emptask`
--

CREATE TABLE `emptask` (
  `emptask` int(11) NOT NULL,
  `id` int(30) NOT NULL,
  `taskdesc` varchar(250) NOT NULL,
  `datetask` date NOT NULL,
  `prioritytask` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emptask`
--

INSERT INTO `emptask` (`emptask`, `id`, `taskdesc`, `datetask`, `prioritytask`, `status`) VALUES
(2, 54, 'to build build build', '2022-05-21', 'Low', 'Done'),
(3, 54, 'To create project of Payroll in Web base', '2022-05-21', 'High', 'In Progress'),
(4, 58, '6days Training for new Hired Employee ', '2022-05-21', 'Medium', 'To Start'),
(5, 54, '6 days Training for New Employee', '2022-05-21', 'Medium', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `item_num` int(11) NOT NULL,
  `Events` varchar(100) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL,
  `Client` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`item_num`, `Events`, `Date`, `Time`, `Client`) VALUES
(1, 'Meeting', '2023-02-25', '8:00 AM', 'Supplier'),
(2, 'Meeting', '2023-02-21', '10:00 AM', 'Subcontractor'),
(3, 'Meeting', '2023-03-08', '7:00 AM', 'Supplier'),
(4, 'Meeting', '2023-02-15', '3:00 PM', 'Supplier'),
(5, 'Christmas', '2022-12-13', '10:00 AM', 'Employee'),
(6, 'Partnership', '2023-07-11', '9:00 AM', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `facility_id` int(11) NOT NULL,
  `facility_name` varchar(200) NOT NULL,
  `availability_id` varchar(200) NOT NULL,
  `capacity` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `rules_id` varchar(200) NOT NULL,
  `facility_image` varchar(200) NOT NULL,
  `archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facility_id`, `facility_name`, `availability_id`, `capacity`, `location`, `rules_id`, `facility_image`, `archive`) VALUES
(2, 'conference room', '1', '16', 'P2HR+CMV, Quirino Hwy, Novaliches, Quezon City, Metro Manila', '1', '07299746-c714-4272-8f43-db655e6de560.jpg', 0),
(3, 'Interview', '2', '6', 'P2HR+CMV, Quirino Hwy, Novaliches, Quezon City, Metro Manila', '1', 'cd0212a5-62c4-4e62-963d-412846034e72.jpg', 0),
(4, 'boardroom', '2', '50', 'P2HR+CMV, Quirino Hwy, Novaliches, Quezon City, Metro Manila', '1', '811de5b7-dbd3-4740-8e4a-7cfaf1f3afc1.jpg', 0),
(5, 'Cafeterias', '2', '100', 'P2HR+CMV, Quirino Hwy, Novaliches, Quezon City, Metro Manila', '1', 'abb5c195-61f7-4047-8112-dea4793fcdb1.jpg', 0),
(6, 'Executive Offices', '2', '5', 'P2HR+CMV, Quirino Hwy, Novaliches, Quezon City, Metro Manila', '1', '86f0310c-1e65-4e61-8999-b9409adcc4f2.jpeg', 0),
(7, 'Computer Lab', '2', '100', 'P2HR+CMV, Quirino Hwy, Novaliches, Quezon City, Metro Manila', '1', 'cac7d6cf-0f45-4f0b-b4ce-a5960dafbf41.jpg', 0),
(8, 'warehouse', '1', '1500', 'P2HR+CMV, Quirino Hwy, Novaliches, Quezon City, Metro Manila', '1', '4c9e1919-1fba-460b-88c0-f42edd5854aa.jpg', 0),
(9, 'Training Room', '1', '200', 'P2HR+CMV, Quirino Hwy, Novaliches, Quezon City, Metro Manila', '1', '0f60a3b3-c2bf-4f34-8464-6983c0099395.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facility_availability`
--

CREATE TABLE `facility_availability` (
  `facility_availability_id` int(11) NOT NULL,
  `availability` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility_availability`
--

INSERT INTO `facility_availability` (`facility_availability_id`, `availability`) VALUES
(1, '24/7- weekdays'),
(2, '8am-5pm weekdays'),
(3, '24/7 - Any days if available ');

-- --------------------------------------------------------

--
-- Table structure for table `hiretbl`
--

CREATE TABLE `hiretbl` (
  `hireId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `deptId` int(11) NOT NULL,
  `process_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hiretbl`
--

INSERT INTO `hiretbl` (`hireId`, `id`, `deptId`, `process_id`) VALUES
(16, 2, 2, 12),
(28, 54, 1, 15),
(29, 55, 1, 12),
(30, 56, 2, 13),
(31, 56, 2, 13),
(32, 57, 2, 12),
(33, 58, 5, 13),
(34, 59, 4, 12),
(35, 61, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `hr2_competency`
--

CREATE TABLE `hr2_competency` (
  `employee_info` int(11) NOT NULL,
  `admin_comp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comm_comp` int(11) NOT NULL,
  `supervisory_comp` int(11) NOT NULL,
  `cognitive_comp` int(11) NOT NULL,
  `total_competency` int(11) NOT NULL,
  `competency_date_evaluate` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr2_competency`
--

INSERT INTO `hr2_competency` (`employee_info`, `admin_comp`, `comm_comp`, `supervisory_comp`, `cognitive_comp`, `total_competency`, `competency_date_evaluate`) VALUES
(54, '12', 20, 12, 25, 69, '2022-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `hr3tanda`
--

CREATE TABLE `hr3tanda` (
  `atid` int(11) NOT NULL,
  `id` int(30) NOT NULL,
  `datehr3` date NOT NULL,
  `daydesc` varchar(250) NOT NULL,
  `timeIn` time NOT NULL,
  `timeOut` time NOT NULL,
  `totalTime` time NOT NULL,
  `descstatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr3tanda`
--

INSERT INTO `hr3tanda` (`atid`, `id`, `datehr3`, `daydesc`, `timeIn`, `timeOut`, `totalTime`, `descstatus`) VALUES
(1, 54, '2022-05-21', 'Saturday', '08:01:31', '05:02:21', '08:03:52', 'Attend'),
(2, 54, '0000-00-00', 'n/a', '00:00:00', '00:00:00', '00:00:00', 'Leave');

-- --------------------------------------------------------

--
-- Table structure for table `hr4_employee_salary_plan`
--

CREATE TABLE `hr4_employee_salary_plan` (
  `salary_id` int(11) NOT NULL,
  `id` int(30) NOT NULL,
  `status` varchar(255) NOT NULL,
  `allowance` double NOT NULL,
  `rate` double NOT NULL,
  `ssNo` int(30) NOT NULL,
  `pagibigNo` int(30) NOT NULL,
  `philHealthNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr4_employee_salary_plan`
--

INSERT INTO `hr4_employee_salary_plan` (`salary_id`, `id`, `status`, `allowance`, `rate`, `ssNo`, `pagibigNo`, `philHealthNo`) VALUES
(1, 54, 'approved', 100, 537, 14010670, 14010671, 14010672);

-- --------------------------------------------------------

--
-- Table structure for table `inquirers`
--

CREATE TABLE `inquirers` (
  `inquirers_id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `from_id` varchar(200) NOT NULL,
  `createdAt` varchar(200) NOT NULL,
  `visitor_sender` tinyint(1) NOT NULL,
  `seen` tinyint(1) NOT NULL,
  `to_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquirers`
--

INSERT INTO `inquirers` (`inquirers_id`, `message`, `from_id`, `createdAt`, `visitor_sender`, `seen`, `to_id`) VALUES
(134, 'hi', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678066828', 1, 1, NULL),
(135, 'hi', '22001', '1678066907', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(136, 'hello', '22001', '1678066916', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(137, 'hello', '22001', '1678066930', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(138, 'hello', '22001', '1678067019', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(139, 'hello', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678067023', 1, 1, NULL),
(140, 'why', '22001', '1678067027', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(141, 'why not', '22001', '1678067032', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(142, 'asd', '22001', '1678067034', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(143, 'helloasdasd', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678067038', 1, 1, NULL),
(144, 'helloasdasd', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678067078', 1, 1, NULL),
(145, 'how are you today', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678067085', 1, 1, NULL),
(146, 'how are you today', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678067087', 1, 1, NULL),
(147, 'im fine how about you', '22001', '1678067094', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(148, 'im fine thank you', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678067102', 1, 1, NULL),
(149, 'okay', '22001', '1678067111', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(150, 'nice', '22001', '1678067113', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(151, 'asd', '22001', '1678067118', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(152, 'its nice', '22001', '1678067121', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(153, 'wow', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678067128', 1, 1, NULL),
(154, 'nice one', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678067146', 1, 1, NULL),
(155, 'hello', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678067167', 1, 1, NULL),
(156, 'hi', '22001', '1678067170', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(157, 'hloe', '22001', '1678067172', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(158, 'qw', '22001', '1678067173', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(159, 'qw', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678067180', 1, 1, NULL),
(160, 'qwe', '22001', '1678067181', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(161, 'hi', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678067230', 1, 1, NULL),
(162, 'hi', '22001', '1678067359', 1, 0, '1229042c-b2de-4e84-bdc9-322dc171634d'),
(163, 'hi', '22001', '1678068183', 1, 0, '1229042c-b2de-4e84-bdc9-322dc171634d'),
(164, 'whas', '22001', '1678068187', 1, 0, '1229042c-b2de-4e84-bdc9-322dc171634d'),
(165, 'nge', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068190', 1, 1, NULL),
(166, 'qwe', '22001', '1678068226', 1, 0, '1229042c-b2de-4e84-bdc9-322dc171634d'),
(167, 'nge', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068230', 1, 1, NULL),
(168, 'nge', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068255', 1, 1, NULL),
(169, 'qw', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068258', 1, 1, NULL),
(170, 'w', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068278', 1, 1, NULL),
(171, 'hi', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068355', 1, 1, NULL),
(172, 'ngek', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068374', 1, 1, NULL),
(173, 'ngek ka rin', '22001', '1678068381', 1, 0, '1229042c-b2de-4e84-bdc9-322dc171634d'),
(174, 'okay', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068396', 1, 1, NULL),
(175, 's', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068459', 1, 1, NULL),
(176, 'manok', '22001', '1678068642', 1, 0, '1229042c-b2de-4e84-bdc9-322dc171634d'),
(177, 'manok moto', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068650', 1, 1, NULL),
(178, 'qwe', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678068954', 1, 1, NULL),
(179, 'hoy', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678069196', 1, 1, NULL),
(180, 'hoy', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678069219', 1, 1, NULL),
(181, 'qwe', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678069270', 1, 1, NULL),
(182, 'qwe', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678069316', 1, 1, NULL),
(183, 'qwe', '22001', '1678070287', 1, 0, '1229042c-b2de-4e84-bdc9-322dc171634d'),
(184, 'im back men', 'a97598ce-7ef4-4b69-a692-3fab29eec775', '1678071344', 1, 1, NULL),
(185, 'ho', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071403', 1, 1, NULL),
(186, 'hisa', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071412', 1, 1, NULL),
(187, 'hello', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071425', 1, 1, NULL),
(188, 'im back', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071435', 1, 1, NULL),
(189, 'hees', '22001', '1678071439', 1, 0, '1229042c-b2de-4e84-bdc9-322dc171634d'),
(190, 'hoy', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071463', 1, 1, NULL),
(191, 'why nan', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071468', 1, 1, NULL),
(192, 'hi', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071497', 1, 1, NULL),
(193, 'hello', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071504', 1, 1, NULL),
(194, 'w', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071512', 1, 1, NULL),
(195, 'wqe', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071570', 1, 1, NULL),
(196, 'qwe', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071600', 1, 1, NULL),
(197, 'qwe', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071608', 1, 1, NULL),
(198, 'we', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071682', 1, 1, NULL),
(199, 'qwe', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071686', 1, 1, NULL),
(200, 'qwe', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071692', 1, 1, NULL),
(201, 'qweqw', '1229042c-b2de-4e84-bdc9-322dc171634d', '1678071699', 1, 0, NULL),
(202, 'heeey', '22001', '1678077747', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(203, 'your back again', '22001', '1678077752', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775'),
(204, 'haha', '22001', '1678077757', 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775');

-- --------------------------------------------------------

--
-- Table structure for table `leavetbl`
--

CREATE TABLE `leavetbl` (
  `leaveId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `leaveStartDate` date NOT NULL,
  `leaveEndDate` date NOT NULL,
  `leaveType` varchar(255) NOT NULL,
  `leaveReason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `leavetbl`
--

INSERT INTO `leavetbl` (`leaveId`, `id`, `leaveStartDate`, `leaveEndDate`, `leaveType`, `leaveReason`) VALUES
(1, 54, '2023-03-09', '2023-03-16', 'CL', 'Operation Tuli'),
(2, 0, '0000-00-00', '0000-00-00', '', 'sdsd'),
(3, 0, '2023-03-09', '0000-00-00', '', 'hehehe'),
(4, 0, '2023-03-09', '0000-00-00', '', 'dsdsd'),
(5, 0, '2023-03-09', '0000-00-00', '', 'dsdsd'),
(6, 0, '2023-03-09', '0000-00-00', '', 'dsdsd'),
(7, 0, '2023-03-09', '0000-00-00', '', 'dsds'),
(8, 54, '2023-03-09', '0000-00-00', '', 'fdfd'),
(9, 54, '2023-03-09', '2023-03-30', 'PL', 'sndsjd'),
(10, 54, '2000-11-01', '0000-00-00', 'CL', ''),
(11, 54, '2023-03-20', '2023-03-21', 'LWP', 'sakit');

-- --------------------------------------------------------

--
-- Table structure for table `log-all-visitors`
--

CREATE TABLE `log-all-visitors` (
  `log_all_visitors_id` int(11) NOT NULL,
  `log_fullname` varchar(200) NOT NULL,
  `log_purpose` varchar(200) NOT NULL,
  `log_id_picture` varchar(200) NOT NULL,
  `log_date` varchar(200) NOT NULL,
  `log_timein` varchar(200) NOT NULL,
  `log_timeout` varchar(200) DEFAULT NULL,
  `log_archive` tinyint(1) NOT NULL,
  `log_visitor_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Pass` varchar(100) DEFAULT NULL,
  `Fname` varchar(100) DEFAULT NULL,
  `Mobilenum` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Role` varchar(100) DEFAULT NULL,
  `Profile` varchar(300) DEFAULT NULL,
  `Date_Added` varchar(100) DEFAULT NULL,
  `Access_Level` varchar(100) DEFAULT NULL,
  `ConfirmPassword` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Email`, `Pass`, `Fname`, `Mobilenum`, `Address`, `Department`, `Role`, `Profile`, `Date_Added`, `Access_Level`, `ConfirmPassword`) VALUES
(180144, 'arnold@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'arnold', '', '', '', 'Admin', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(180145, 'kyron@gmail.com', 'c4b653745d32d49b1109ff1c5bb79b93', 'kyron', '', '', '', 'Admin', 'ayee.png', '', '', 'c4b653745d32d49b1109ff1c5bb79b93'),
(180146, 'ivan@gmail.com', 'c4b653745d32d49b1109ff1c5bb79b93', 'ivan amolar', '', '', '', 'Admin', 'download.png', '', '', 'c4b653745d32d49b1109ff1c5bb79b93'),
(180147, 'aeron@gmail.com', 'c4b653745d32d49b1109ff1c5bb79b93', 'Hans Aeron', '', '', '', 'Admin', 'ayee.png', '', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(180148, 'aeron@gmail.com', 'c4b653745d32d49b1109ff1c5bb79b93', 'Hans Aeron', '', '', '', 'Admin', 'ayee.png', '', '', 'c4b653745d32d49b1109ff1c5bb79b93'),
(180149, 'christian@gmail.com', 'c4b653745d32d49b1109ff1c5bb79b93', 'christian capitle', '', '', '', 'Admin', '', '', '', 'c4b653745d32d49b1109ff1c5bb79b93'),
(180150, 'daryl@gmail.com', 'c4b653745d32d49b1109ff1c5bb79b93', 'daryl estolonio', '', '', '', 'Admin', '302092842_1422880628189066_7895414788373378592_n.jpg', '', '', 'c4b653745d32d49b1109ff1c5bb79b93');

-- --------------------------------------------------------

--
-- Table structure for table `logs-log`
--

CREATE TABLE `logs-log` (
  `logs_id` int(11) NOT NULL,
  `visitor_id` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `createdAt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs-log`
--

INSERT INTO `logs-log` (`logs_id`, `visitor_id`, `purpose`, `createdAt`) VALUES
(138, '5', 'Remove Visitor Log.', '1678350874'),
(139, '5', 'Remove Visitor Log.', '1678350887'),
(140, '6', 'Remove Visitor Log.', '1678350887'),
(141, '5', 'Remove Visitor Log.', '1678350914'),
(142, '5', 'Remove Visitor Log.', '1678350929'),
(143, '6', 'Remove Visitor Log.', '1678350943'),
(144, '6', 'Remove Visitor Log.', '1678351039'),
(145, '6', 'Remove Visitor Log.', '1678351039'),
(146, '6', 'Remove Visitor Log.', '1678351060'),
(147, '6', 'Remove Visitor Log.', '1678351060'),
(148, '6', 'Remove Visitor Log.', '1678351060'),
(149, '6', 'Remove Visitor Log.', '1678351060'),
(150, '6', 'Remove Visitor Log.', '1678351060'),
(151, '6', 'Remove Visitor Log.', '1678351060'),
(152, '6', 'Remove Visitor Log.', '1678351070'),
(153, '6', 'Remove Visitor Log.', '1678351070'),
(154, '6', 'Remove Visitor Log.', '1678351071'),
(155, '6', 'Remove Visitor Log.', '1678351071'),
(156, '6', 'Remove Visitor Log.', '1678351078'),
(157, '6', 'Remove Visitor Log.', '1678351078'),
(158, '6', 'Remove Visitor Log.', '1678351078'),
(159, '6', 'Remove Visitor Log.', '1678351078'),
(160, '6', 'Remove Visitor Log.', '1678351078'),
(161, '6', 'Remove Visitor Log.', '1678351078'),
(162, '6', 'Remove Visitor Log.', '1678351078'),
(163, '6', 'Remove Visitor Log.', '1678351078'),
(164, '6', 'Remove Visitor Log.', '1678351318'),
(165, '7', 'New Visitor Log.', '1678356739'),
(166, '8', 'New Visitor Log.', '1678356791'),
(167, '9', 'New Visitor Log.', '1678357142'),
(168, '10', 'New Visitor Log.', '1678357259'),
(169, '10', 'Remove Visitor Log.', '1678358223'),
(170, '10', 'Remove Visitor Log.', '1678358223'),
(171, '10', 'Remove Visitor Log.', '1678358248'),
(172, '9', 'Remove Visitor Log.', '1678358698'),
(173, '9', 'Remove Visitor Log.', '1678358713'),
(174, '9', 'Remove Visitor Log.', '1678358713'),
(175, '8', 'Remove Visitor Log.', '1678358742'),
(176, '8', 'Remove Visitor Log.', '1678358757'),
(177, '8', 'Remove Visitor Log.', '1678358757'),
(178, '8', 'Remove Visitor Log.', '1678358775'),
(179, '8', 'Remove Visitor Log.', '1678358775'),
(180, '7', 'Remove Visitor Log.', '1678358812'),
(181, '7', 'Remove Visitor Log.', '1678358812'),
(182, '11', 'New Visitor Log.', '1678358853'),
(183, '11', 'Remove Visitor Log.', '1678358865'),
(184, '11', 'Remove Visitor Log.', '1678358865'),
(185, '11', 'Remove Visitor Log.', '1678358919'),
(186, '11', 'Remove Visitor Log.', '1678358928'),
(187, '11', 'Remove Visitor Log.', '1678358970'),
(188, '11', 'Remove Visitor Log.', '1678358970'),
(189, '11', 'Remove Visitor Log.', '1678359077'),
(190, '11', 'Remove Visitor Log.', '1678359083'),
(191, '11', 'Remove Visitor Log.', '1678359098'),
(192, '11', 'Remove Visitor Log.', '1678359098'),
(193, '11', 'Remove Visitor Log.', '1678359110'),
(194, '11', 'Remove Visitor Log.', '1678359110'),
(195, '11', 'Remove Visitor Log.', '1678359110'),
(196, '11', 'Remove Visitor Log.', '1678359124'),
(197, '12', 'New Visitor Log.', '1678359261'),
(198, '11', 'Remove Visitor Log.', '1678359322'),
(199, '11', 'Remove Visitor Log.', '1678359332'),
(200, '11', 'Remove Visitor Log.', '1678359332'),
(201, '12', 'Remove Visitor Log.', '1678359332'),
(202, '11', 'Remove Visitor Log.', '1678359432'),
(203, '11', 'Remove Visitor Log.', '1678359432'),
(204, '12', 'Remove Visitor Log.', '1678359433'),
(205, '12', 'Remove Visitor Log.', '1678359433'),
(206, '12', 'Remove Visitor Log.', '1678359444'),
(207, '12', 'Remove Visitor Log.', '1678359444'),
(208, '11', 'Remove Visitor Log.', '1678359450'),
(209, '12', 'Remove Visitor Log.', '1678359451'),
(210, '12', 'Remove Visitor Log.', '1678359451'),
(211, '12', 'Remove Visitor Log.', '1678359494'),
(212, '12', 'Remove Visitor Log.', '1678359494'),
(213, '11', 'Remove Visitor Log.', '1678359520'),
(214, '12', 'Time out Visitor Log.', '1678360120'),
(215, '11', 'Time out Visitor Log.', '1678360124'),
(216, '13', 'New Visitor Log.', '1678412379'),
(217, '111509', 'Update Account Successfully.', '1678429531'),
(218, '111514', 'Create Account Successfully.', '1678459120'),
(219, '111515', 'Create Account Successfully.', '1678591393'),
(220, '111516', 'Create Account Successfully.', '1678591443'),
(221, '111517', 'Create Account Successfully.', '1678591544'),
(222, '', 'Create Account Successfully.', '1678591559'),
(223, '', 'Create Account Successfully.', '1678594516'),
(224, '', 'Create Account Successfully.', '1678596022'),
(225, '111517', 'Create Account Successfully.', '1678596070'),
(226, '111517', 'Create Account Successfully.', '1678596119'),
(227, '41', 'Time out Successfully.', '1678685797');

-- --------------------------------------------------------

--
-- Table structure for table `loguser`
--

CREATE TABLE `loguser` (
  `id` int(11) NOT NULL,
  `usern` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `deptRo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loguser`
--

INSERT INTO `loguser` (`id`, `usern`, `passw`, `rol`, `deptRo`) VALUES
(1, 'moyty', 'moyty', 'Admin', 'HR1'),
(2, 'joy', 'joy', 'Admin', 'HR1'),
(3, 'suan', 'suan', 'Admin', 'HR1\r\n'),
(4, 'marjon', 'marjon', 'Admin', 'HR1'),
(5, 'rowen', 'rowen', 'Admin', 'HR1');

-- --------------------------------------------------------

--
-- Table structure for table `log_history_admin`
--

CREATE TABLE `log_history_admin` (
  `log_id` int(11) NOT NULL,
  `log_action` varchar(200) NOT NULL,
  `log_time` varchar(200) NOT NULL,
  `account_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_history_admin`
--

INSERT INTO `log_history_admin` (`log_id`, `log_action`, `log_time`, `account_id`) VALUES
(2, 'login', '2023-03-03 8:51:49', '22001'),
(3, 'logout', '2023-03-03 8:52:08', '22001'),
(4, 'login', '2023-03-03 8:53:28', '22001'),
(5, 'logout', '2023-03-03 8:53:32', '22001'),
(6, 'login', '2023-03-03 8:53:50', '22001'),
(7, 'logout', '2023-03-03 8:58:03', '22001'),
(8, 'login', '2023-03-03 8:58:08', '22001'),
(9, 'logout', '2023-03-03 8:58:22', '22001'),
(10, 'login', '2023-03-03 8:59:43', '22001'),
(11, 'logout', '2023-03-03 9:00:49', '22001'),
(12, 'login', '2023-03-03 9:01:11', '22001'),
(13, 'logout', '2023-03-03 9:01:21', '22001'),
(14, 'login', '2023-03-03 9:08:10', '22001'),
(15, 'logout', '2023-03-03 9:30:28', '22001'),
(16, 'login', '2023-03-03 9:30:45', '22001'),
(17, 'logout', '2023-03-03 9:30:53', '22001'),
(18, 'login', '2023-03-03 9:32:12', '22001'),
(19, 'logout', '2023-03-03 9:32:17', '22001'),
(20, 'login', '2023-03-03 9:32:29', '22001'),
(21, 'logout', '2023-03-03 9:33:43', '22001'),
(22, 'login', '2023-03-03 9:36:58', '22001'),
(23, 'logout', '2023-03-03 10:01:32', '22001'),
(24, 'login', '2023-03-03 10:05:50', '22001'),
(25, 'logout', '2023-03-03 10:05:55', '22001'),
(26, 'login', '2023-03-03 10:06:14', '22001'),
(27, 'logout', '2023-03-03 10:30:58', '22001'),
(28, 'login', '2023-03-03 10:31:27', '22001'),
(29, 'logout', '2023-03-03 10:31:40', '22001'),
(30, 'login', '2023-03-03 10:37:47', '22001'),
(31, 'logout', '2023-03-03 10:38:09', '22001'),
(32, 'login', '2023-03-03 10:39:39', '22001'),
(33, 'logout', '2023-03-03 10:49:34', '22001'),
(34, 'login', '2023-03-03 10:51:03', '22001'),
(35, 'logout', '2023-03-03 10:57:32', '22001'),
(36, 'login', '2023-03-03 11:03:39', '22001'),
(37, 'logout', '2023-03-03 11:15:04', '22001'),
(38, 'login', '2023-03-03 11:15:10', '22001'),
(39, 'logout', '2023-03-03 11:17:17', '22001'),
(40, 'login', '2023-03-03 11:22:28', '22001'),
(41, 'logout', '2023-03-03 12:43:48', '22001'),
(42, 'login', '2023-03-03 5:15:05', '22001'),
(43, 'logout', '2023-03-03 5:50:48', '22001'),
(44, 'login', '2023-03-03 6:57:35', '22001'),
(45, 'logout', '2023-03-03 7:09:07', '22001'),
(46, 'login', '2023-03-03 7:20:21', '22001'),
(47, 'logout', '2023-03-03 8:33:40', '22001'),
(48, 'login', '2023-03-03 8:33:45', '22001'),
(49, 'logout', '2023-03-03 9:32:12', '22001'),
(50, 'login', '2023-03-03 9:32:15', '22001'),
(51, 'logout', '2023-03-03 9:36:22', '22001'),
(52, 'login', '2023-03-03 9:36:26', '22001'),
(53, 'login', '2023-03-03 9:55:11', '22001'),
(54, 'login', '2023-03-03 9:59:53', '22001'),
(55, 'login', '2023-03-03 10:02:28', '22001'),
(56, 'login', '2023-03-05 12:07:32', '22001'),
(57, 'logout', '2023-03-05 12:36:07', '22001'),
(58, 'login', '2023-03-05 12:36:14', '22001'),
(59, 'logout', '2023-03-05 12:57:23', '22001'),
(60, 'login', '2023-03-05 12:57:29', '22001'),
(61, 'logout', '2023-03-05 1:09:02', '22001'),
(62, 'login', '2023-03-05 1:34:52', '22001'),
(63, 'logout', '2023-03-05 2:35:06', '22001'),
(64, 'login', '2023-03-05 2:35:21', '22001'),
(65, 'login', '2023-03-05 2:36:17', '22001'),
(66, 'login', '2023-03-05 2:41:24', '22001'),
(67, 'login', '2023-03-05 2:41:53', '22001'),
(68, 'login', '2023-03-05 3:11:01', '22001'),
(69, 'logout', '2023-03-05 3:12:02', '22001'),
(70, 'login', '2023-03-05 3:15:09', '22001'),
(71, 'login', '2023-03-05 3:15:47', '22001'),
(72, 'login', '2023-03-05 3:20:12', '22001'),
(73, 'logout', '2023-03-05 3:35:02', '22001'),
(74, 'login', '2023-03-05 3:38:50', '22001'),
(75, 'login', '2023-03-05 3:39:40', '22001'),
(76, 'logout', '2023-03-05 3:39:50', '22001'),
(77, 'login', '2023-03-05 3:39:54', '22001'),
(78, 'logout', '2023-03-05 3:44:45', '22001'),
(79, 'login', '2023-03-05 3:44:49', '22001'),
(80, 'login', '2023-03-05 3:54:23', '22001'),
(81, 'login', '2023-03-05 4:16:13', '22001'),
(82, 'login', '2023-03-05 5:12:03', '22001'),
(83, 'logout', '2023-03-05 5:13:13', '22001'),
(84, 'logout', '2023-03-05 5:36:57', '22001'),
(85, 'login', '2023-03-05 5:37:03', '22001'),
(86, 'logout', '2023-03-05 6:09:03', '22001'),
(87, 'login', '2023-03-05 6:09:09', '22001'),
(88, 'login', '2023-03-05 7:07:03', '22001'),
(89, 'login', '2023-03-05 7:07:38', '22001'),
(90, 'logout', '2023-03-05 7:39:41', '22001'),
(91, 'login', '2023-03-05 8:34:27', '22001'),
(92, 'logout', '2023-03-05 9:14:36', '22001'),
(93, 'login', '2023-03-05 9:19:00', '22001'),
(94, 'logout', '2023-03-05 9:23:15', '22001'),
(95, 'login', '2023-03-06 8:44:27', '22001'),
(96, 'logout', '2023-03-06 9:51:02', '22001'),
(97, 'login', '2023-03-06 9:51:05', '22001'),
(98, 'logout', '2023-03-06 10:02:07', '22001'),
(99, 'login', '2023-03-06 10:02:11', '22001'),
(100, 'logout', '2023-03-06 10:22:14', '22001'),
(101, 'login', '2023-03-06 10:22:46', '22001'),
(102, 'login', '2023-03-06 10:29:00', '22001'),
(103, 'login', '2023-03-06 10:29:55', '22001'),
(104, 'logout', '2023-03-06 10:35:49', '22001'),
(105, 'login', '2023-03-06 10:37:55', '22001'),
(106, 'logout', '2023-03-06 10:55:29', '22001'),
(107, 'login', '2023-03-06 10:55:54', '22001'),
(108, 'login', '2023-03-06 11:05:11', '22001'),
(109, 'logout', '2023-03-06 12:03:13', '22001'),
(110, 'login', '2023-03-06 12:37:55', '22001'),
(111, 'login', '2023-03-06 2:02:33', '22001'),
(112, 'login', '2023-03-06 8:11:50', '22001'),
(113, 'logout', '2023-03-06 9:12:46', '22001'),
(114, 'login', '2023-03-06 9:13:32', '22001'),
(115, 'logout', '2023-03-06 9:15:46', '22001'),
(116, 'login', '2023-03-06 9:16:53', '22001'),
(117, 'logout', '2023-03-06 9:21:35', '22001'),
(118, 'login', '2023-03-06 9:44:18', '22001'),
(119, 'logout', '2023-03-06 10:26:36', '22001'),
(120, 'login', '2023-03-07 8:55:47', '22001'),
(121, 'logout', '2023-03-07 8:56:21', '22001'),
(122, 'login', '2023-03-07 9:30:31', '22001'),
(123, 'logout', '2023-03-07 2:17:36', '22001'),
(124, 'login', '2023-03-07 2:18:04', '22001'),
(125, 'login', '2023-03-07 7:36:52', '22001'),
(126, 'login', '2023-03-07 8:32:09', '22001'),
(127, 'login', '2023-03-08 9:37:28', '22001'),
(128, 'login', '2023-03-08 11:24:55', '22001'),
(129, 'logout', '2023-03-08 11:50:44', '22001'),
(130, 'login', '2023-03-08 11:50:46', '22001'),
(131, 'logout', '2023-03-08 11:51:06', '22001'),
(132, 'login', '2023-03-08 11:51:19', '22001'),
(133, 'login', '2023-03-08 11:51:50', '22001'),
(134, 'logout', '2023-03-08 7:09:46', '22001'),
(135, 'login', '2023-03-08 7:14:40', '22001'),
(136, 'login', '2023-03-09 9:04:56', '22001'),
(137, 'login', '2023-03-09 2:16:29', '22001'),
(138, 'login', '2023-03-09 5:55:10', '22001'),
(139, 'login', '2023-03-10 8:23:49', '22001'),
(140, 'logout', '2023-03-10 9:28:25', '22001'),
(141, 'login', '2023-03-10 9:28:50', '22001'),
(142, 'login', '2023-03-10 12:48:53', '22001'),
(143, 'login', '2023-03-10 7:10:33', '22001'),
(144, 'login', '2023-03-10 9:10:37', '22001'),
(145, 'login', '2023-03-12 11:06:33', '22001'),
(146, 'login', '2023-03-12 11:10:49', '22001'),
(147, 'logout', '2023-03-12 12:46:13', '22001'),
(148, 'login', '2023-03-12 3:51:08', '22001'),
(149, 'login', '2023-03-12 5:30:23', '22001'),
(150, 'login', '2023-03-12 8:11:29', '22001'),
(151, 'login', '2023-03-13 8:21:27', '22001'),
(152, 'logout', '2023-03-13 8:54:58', '22001'),
(153, 'login', '2023-03-13 8:58:02', '22001'),
(154, 'login', '2023-03-13 11:08:24', '22001'),
(155, 'login', '2023-03-13 3:31:59', '22001'),
(156, 'login', '2023-03-14 7:26:33', '22001'),
(157, 'login', '2023-03-14 9:16:39', '22001'),
(158, 'login', '2023-03-14 4:44:44', '22001'),
(159, 'login', '2023-03-16 6:30:17', '22001'),
(160, 'login', '2023-03-17 8:38:02', '22001'),
(161, 'login', '2023-03-19 7:04:02', '22001'),
(162, 'logout', '2023-03-19 7:04:30', '22001'),
(163, 'login', '2023-03-19 7:22:43', '22001'),
(164, 'logout', '2023-03-19 7:23:23', '22001'),
(165, 'login', '2023-03-19 7:23:46', '22001'),
(166, 'logout', '2023-03-19 7:24:12', '22001'),
(167, 'login', '2023-03-19 7:24:36', '22001'),
(168, 'logout', '2023-03-19 7:25:07', '22001'),
(169, 'login', '2023-03-19 7:26:50', '22001'),
(170, 'logout', '2023-03-19 7:26:55', '22001'),
(171, 'logout', '2023-03-19 7:42:26', '22001'),
(172, 'login', '2023-03-19 7:51:44', '22001'),
(173, 'logout', '2023-03-19 8:03:26', '22001'),
(174, 'login', '2023-03-19 8:10:05', '22001'),
(175, 'login', '2023-03-19 8:29:26', '22001'),
(176, 'logout', '2023-03-19 9:44:02', '22001'),
(177, 'login', '2023-03-19 9:44:56', '22001'),
(178, 'logout', '2023-03-19 9:49:49', '22001'),
(179, 'login', '2023-03-19 9:52:33', '22001'),
(180, 'logout', '2023-03-19 9:58:43', '22001'),
(181, 'login', '2023-03-19 9:58:58', '22004'),
(182, 'login', '2023-03-19 10:06:59', '22001'),
(183, 'logout', '2023-03-19 10:08:31', '22001'),
(184, 'login', '2023-03-19 10:08:53', '22005'),
(185, 'logout', '2023-03-19 10:10:26', '22005'),
(186, 'login', '2023-03-19 10:10:52', '22001'),
(187, 'logout', '2023-03-19 10:12:24', '22001'),
(188, 'login', '2023-03-19 10:12:40', '22006'),
(189, 'logout', '2023-03-19 10:16:34', '22006'),
(190, 'login', '2023-03-19 10:16:56', '22001'),
(191, 'logout', '2023-03-19 10:18:12', '22001'),
(192, 'login', '2023-03-19 10:18:29', '22007'),
(193, 'logout', '2023-03-19 10:18:54', '22007'),
(194, 'login', '2023-03-19 10:29:18', '22001'),
(195, 'login', '2023-03-19 1:26:40', '22007'),
(196, 'login', '2023-03-19 1:41:31', '22001'),
(197, 'logout', '2023-03-19 1:56:50', '22001'),
(198, 'login', '2023-03-19 1:57:11', '22011'),
(199, 'logout', '2023-03-19 1:57:28', '22011'),
(200, 'login', '2023-03-19 1:57:58', '22010'),
(201, 'logout', '2023-03-19 2:00:22', '22010'),
(202, 'login', '2023-03-19 2:00:51', '22010'),
(203, 'logout', '2023-03-19 2:00:57', '22010'),
(204, 'login', '2023-03-19 2:01:23', '22011'),
(205, 'logout', '2023-03-19 2:01:58', '22011'),
(206, 'login', '2023-03-19 2:02:20', '22011'),
(207, 'logout', '2023-03-19 2:02:35', '22011'),
(208, 'login', '2023-03-19 2:03:51', '22001'),
(209, 'logout', '2023-03-19 2:37:47', '22001'),
(210, 'login', '2023-03-19 2:38:13', '22001'),
(211, 'logout', '2023-03-19 2:43:55', '22001'),
(212, 'login', '2023-03-19 2:44:12', '22015'),
(213, 'logout', '2023-03-19 2:46:56', '22015'),
(214, 'login', '2023-03-19 2:47:26', '22012'),
(215, 'logout', '2023-03-19 2:48:01', '22012'),
(216, 'login', '2023-03-19 2:48:44', '22011'),
(217, 'logout', '2023-03-19 2:48:57', '22011'),
(218, 'login', '2023-03-19 3:04:17', '22001'),
(219, 'login', '2023-03-19 3:57:16', '22001'),
(220, 'login', '2023-03-19 4:04:04', '22001'),
(221, 'login', '2023-03-19 4:06:36', '22001'),
(222, 'logout', '2023-03-19 4:08:41', '22001'),
(223, 'login', '2023-03-19 4:08:58', '22001'),
(224, 'logout', '2023-03-19 4:11:45', '22001'),
(225, 'login', '2023-03-19 4:12:07', '22001'),
(226, 'logout', '2023-03-19 4:17:43', '22001'),
(227, 'login', '2023-03-19 4:18:16', '22010'),
(228, 'logout', '2023-03-19 4:34:08', '22010'),
(229, 'login', '2023-03-19 4:34:45', '22001'),
(230, 'login', '2023-03-19 4:57:05', '22001'),
(231, 'login', '2023-03-19 4:57:33', '22001'),
(232, 'logout', '2023-03-19 4:58:07', '22001'),
(233, 'login', '2023-03-19 4:58:15', '22001'),
(234, 'logout', '2023-03-19 4:59:39', '22001'),
(235, 'login', '2023-03-19 4:59:52', '22001'),
(236, 'login', '2023-03-19 5:16:08', '22001'),
(237, 'login', '2023-03-19 5:17:26', '22001'),
(238, 'logout', '2023-03-19 5:33:45', '22001'),
(239, 'login', '2023-03-19 5:35:02', '22011'),
(240, 'logout', '2023-03-19 5:48:04', '22011'),
(241, 'login', '2023-03-19 5:49:48', '22010'),
(242, 'logout', '2023-03-19 6:09:43', '22010'),
(243, 'login', '2023-03-19 6:10:06', '22011'),
(244, 'logout', '2023-03-19 6:10:55', '22011'),
(245, 'login', '2023-03-19 6:11:04', '22011'),
(246, 'logout', '2023-03-19 6:14:30', '22011'),
(247, 'login', '2023-03-19 6:14:51', '22010'),
(248, 'logout', '2023-03-19 6:20:44', '22010'),
(249, 'login', '2023-03-19 6:29:59', '22001'),
(250, 'logout', '2023-03-19 6:39:30', '22001'),
(251, 'login', '2023-03-19 6:42:14', '22001'),
(252, 'logout', '2023-03-19 6:45:22', '22001'),
(253, 'login', '2023-03-19 6:45:37', '22001'),
(254, 'logout', '2023-03-19 6:45:50', '22001'),
(255, 'login', '2023-03-19 6:46:03', '22001'),
(256, 'logout', '2023-03-19 6:47:23', '22001'),
(257, 'login', '2023-03-19 6:48:00', '22001'),
(258, 'logout', '2023-03-19 6:48:19', '22001'),
(259, 'login', '2023-03-19 6:48:50', '22001'),
(260, 'logout', '2023-03-19 6:48:57', '22001'),
(261, 'login', '2023-03-19 6:49:18', '22001'),
(262, 'logout', '2023-03-19 6:49:40', '22001'),
(263, 'login', '2023-03-19 6:50:05', '22012'),
(264, 'logout', '2023-03-19 6:55:04', '22012'),
(265, 'login', '2023-03-19 6:56:17', '22001'),
(266, 'login', '2023-03-19 7:00:52', '22012'),
(267, 'login', '2023-03-19 7:29:25', '22001'),
(268, 'login', '2023-03-19 7:34:27', '22012'),
(269, 'login', '2023-03-19 8:35:21', '22012'),
(270, 'logout', '2023-03-19 8:48:33', '22012'),
(271, 'login', '2023-03-19 8:49:17', '22001'),
(272, 'logout', '2023-03-19 8:52:45', '22001'),
(273, 'login', '2023-03-19 8:53:05', '22012'),
(274, 'logout', '2023-03-19 9:03:37', '22012'),
(275, 'login', '2023-03-19 9:03:59', '22010'),
(276, 'logout', '2023-03-19 9:04:53', '22010'),
(277, 'login', '2023-03-19 9:05:19', '22012'),
(278, 'logout', '2023-03-19 9:05:58', '22012'),
(279, 'login', '2023-03-19 9:06:10', '22012'),
(280, 'logout', '2023-03-19 9:18:24', '22012'),
(281, 'login', '2023-03-19 9:18:42', '22001'),
(282, 'logout', '2023-03-19 9:22:29', '22001'),
(283, 'login', '2023-03-19 9:22:58', '22011'),
(284, 'logout', '2023-03-19 9:24:50', '22011'),
(285, 'login', '2023-03-20 10:01:15', '22001'),
(286, 'login', '2023-03-20 10:04:57', '22001'),
(287, 'login', '2023-03-20 10:21:27', '22001'),
(288, 'logout', '2023-03-20 10:22:11', '22001'),
(289, 'login', '2023-03-20 10:27:11', '22001'),
(290, 'login', '2023-03-20 10:31:20', '22016'),
(291, 'login', '2023-03-20 10:32:21', '22017'),
(292, 'login', '2023-03-20 10:33:05', '22016'),
(293, 'login', '2023-03-20 10:33:36', '22017'),
(294, 'login', '2023-03-20 10:44:22', '22013'),
(295, 'login', '2023-03-20 10:45:34', '22013'),
(296, 'login', '2023-03-20 10:46:12', '22013'),
(297, 'login', '2023-03-20 10:47:09', '22014'),
(298, 'login', '2023-03-20 10:54:57', '22014'),
(299, 'login', '2023-03-20 10:58:33', '22014'),
(300, 'login', '2023-03-20 11:01:42', '22014'),
(301, 'login', '2023-03-20 11:05:49', '22014'),
(302, 'logout', '2023-03-20 11:13:15', '22014'),
(303, 'login', '2023-03-20 11:15:19', '22014'),
(304, 'logout', '2023-03-20 11:15:22', '22014'),
(305, 'login', '2023-03-20 11:16:51', '22014'),
(306, 'login', '2023-03-20 11:19:05', '22016'),
(307, 'login', '2023-03-20 11:30:04', '22017'),
(308, 'login', '2023-03-20 11:37:50', '22017'),
(309, 'login', '2023-03-20 11:39:55', '22016'),
(310, 'login', '2023-03-20 11:51:09', '22011'),
(311, 'logout', '2023-03-20 11:51:44', '22011'),
(312, 'login', '2023-03-20 11:52:01', '22017'),
(313, 'login', '2023-03-20 11:52:31', '22016'),
(314, 'login', '2023-03-20 11:53:11', '22011'),
(315, 'login', '2023-03-21 12:02:27', '22001'),
(316, 'logout', '2023-03-21 12:02:58', '22001'),
(317, 'login', '2023-03-21 12:05:34', '22014'),
(318, 'logout', '2023-03-21 12:15:56', '22014');

-- --------------------------------------------------------

--
-- Table structure for table `log_visitor_status_table`
--

CREATE TABLE `log_visitor_status_table` (
  `log_visitor_status_id` int(11) NOT NULL,
  `log_visitor_status_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_visitor_status_table`
--

INSERT INTO `log_visitor_status_table` (`log_visitor_status_id`, `log_visitor_status_name`) VALUES
(1, 'appointment'),
(2, 'applicant'),
(3, 'trainee'),
(4, 'employee'),
(5, 'walkin');

-- --------------------------------------------------------

--
-- Table structure for table `pagibig`
--

CREATE TABLE `pagibig` (
  `pagibigNo` int(11) NOT NULL,
  `pagibig_amount_contribution` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pagibig`
--

INSERT INTO `pagibig` (`pagibigNo`, `pagibig_amount_contribution`) VALUES
(14010671, 120);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(30) NOT NULL,
  `ref_no` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1 = monthly ,2 semi-monthly',
  `status` tinyint(1) DEFAULT 0 COMMENT '0 =New,1 = computed',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `ref_no`, `date_from`, `date_to`, `type`, `status`, `date_created`) VALUES
(0, '2023-4706\r\n', '2023-03-11', '2023-03-25', 2, 1, '2023-03-17 14:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `philhealth`
--

CREATE TABLE `philhealth` (
  `philHealthNo` int(11) NOT NULL,
  `phil_amount_contribution` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `philhealth`
--

INSERT INTO `philhealth` (`philHealthNo`, `phil_amount_contribution`) VALUES
(14010672, 200);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(200) NOT NULL,
  `controll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`, `controll`) VALUES
(1, 'stuff', 0),
(2, 'manager', 1),
(3, 'super admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projectlist`
--

CREATE TABLE `projectlist` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `Starteddate` varchar(255) NOT NULL,
  `targetdate` varchar(255) NOT NULL,
  `stage` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectlist`
--

INSERT INTO `projectlist` (`id`, `subject`, `Starteddate`, `targetdate`, `stage`, `status`, `budget`, `description`, `time`, `created_at`) VALUES
(13, 'New Branch of Company', '2023-04-18', '2024-01-18', 'Pasay', 'In Progress', '900,000', 'To expand our branches to successfully process', '10:05:20', '2023-03-18'),
(14, 'Meeting Room', '2023-03-24', '2023-07-21', 'Makati', '', '800,000', 'Staff room for meeting', '14:35:51', '2023-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment_status`
--

CREATE TABLE `recruitment_status` (
  `id` int(30) NOT NULL,
  `status_label` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruitment_status`
--

INSERT INTO `recruitment_status` (`id`, `status_label`, `status`) VALUES
(1, 'For Initial Interview', 1),
(2, 'PASSED II', 1),
(3, 'FAILED II', 1),
(4, 'For Final Interview', 1),
(5, 'PASSED FI', 1),
(6, 'FAILED FI', 1),
(7, 'FOR POOLING', 1),
(8, 'Job Offer', 1),
(9, 'Hired', 1),
(10, 'Withdraw Application', 1),
(11, 'Training', 1),
(12, 'Seasonal', 1),
(13, 'Regularization', 1),
(14, 'Probationary', 1),
(15, 'Part-Time', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_facility`
--

CREATE TABLE `schedule_facility` (
  `schedule_facility_id` int(11) NOT NULL,
  `facility_id` varchar(200) NOT NULL,
  `recipient_name` varchar(200) NOT NULL,
  `start_date` varchar(200) NOT NULL,
  `end_date` varchar(200) NOT NULL,
  `start_time` varchar(200) NOT NULL,
  `end_time` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `participants` varchar(200) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `pending` tinyint(1) NOT NULL,
  `declined` tinyint(1) NOT NULL,
  `archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_facility`
--

INSERT INTO `schedule_facility` (`schedule_facility_id`, `facility_id`, `recipient_name`, `start_date`, `end_date`, `start_time`, `end_time`, `purpose`, `participants`, `approved`, `pending`, `declined`, `archive`) VALUES
(1, '2', 'Charles Palencia', '03/22/2023', '03/26/2023', '10:33', '12:33', 'meeting', '6', 1, 0, 0, 0),
(3, '4', 'Charles Palencia', '03/11/2023', '03/24/2023', '10:39', '15:33', 'meeting', '6', 0, 1, 0, 0),
(4, '7', 'Charles Palencia', '03/27/2023', '03/27/2023', '08:36', '20:33', 'training', '15', 0, 1, 0, 0),
(5, '6', 'Charles Palencia', '03/31/2023', '03/31/2023', '09:00', '16:33', 'meeting', '2', 0, 1, 0, 0),
(6, '2', 'sabong', '03/25/2023', '03/26/2023', '08:30', '12:33', 'meeting', '12', 0, 1, 0, 0),
(7, '2', 'yakult', '03/27/2023', '03/27/2023', '10:34', '21:33', 'meeting', '2', 0, 1, 0, 0),
(8, '3', 'Charles Palencia', '03/18/2023', '03/20/2023', '07:11', '19:11', 'party', '15', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sss`
--

CREATE TABLE `sss` (
  `ssNo` int(11) NOT NULL,
  `ss_amount_contribution` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sss`
--

INSERT INTO `sss` (`ssNo`, `ss_amount_contribution`) VALUES
(14010670, 120);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company_deparment` varchar(255) NOT NULL,
  `types_of_supply` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `firstname`, `lastname`, `company_deparment`, `types_of_supply`, `contact_number`, `email`, `address`, `time`, `date`, `purpose`) VALUES
(1, 'David', 'Peter', 'Freight Company', 'Standard', '09682378976', 'david.peter@gmail.com', 'Malabon', '9:31', '2023-05-21', 'To build a product high quality');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_company`
--

CREATE TABLE `supplier_company` (
  `item_num` int(11) NOT NULL,
  `supplier_requestor_id` int(11) NOT NULL,
  `Company` varchar(100) DEFAULT NULL,
  `Fname` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Price` varchar(100) DEFAULT NULL,
  `Bidding_date` varchar(100) DEFAULT NULL,
  `Item` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier_company`
--

INSERT INTO `supplier_company` (`item_num`, `supplier_requestor_id`, `Company`, `Fname`, `Email`, `Address`, `Price`, `Bidding_date`, `Item`) VALUES
(1, 0, '313213', '13123213', '3123213', '3313', '313123', '31312', '313131'),
(3, 0, 'company', 'Company', 'company@email.com', 'company address', '45000', '2023-03-02', 'Secret item');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_requestor`
--

CREATE TABLE `supplier_requestor` (
  `item_num` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `supply` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `purpose` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier_requestor`
--

INSERT INTO `supplier_requestor` (`item_num`, `first_name`, `last_name`, `company`, `supply`, `time`, `date`, `purpose`) VALUES
(1, 'Angelo', 'Talap', 'Air21', 'Ballpen', '08:58 AM', '02/24/23', 'company needed'),
(42, 'Alden', 'Higoy', 'IT department', 'Ballpen', '21:31', '2023-03-04', '     \r\n sadwadwadsa'),
(43, 'claude', '1321', 'asda', 'Ballpen', '10:14', '2023-03-07', '     sadasdwa\r\n '),
(44, 'charles', 'palencia', 'Human Resource', 'langis', '18:16', '2023-03-08', 'panghilot\r\n ');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Freight - Core Transaction 2'),
(6, 'short_name', 'Core 2'),
(11, 'logo', 'uploads/logo-1645494239.jpg'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover-1645494240.jpg?v=1645494240');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'PhilTrunsure', 'info@sample.com', '+6948 8542 623', '1601264160_recruitment-cover.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;ABOUT US&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;b style=&quot;margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/b&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;h2 style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;Where does it come from?&lt;/h2&gt;&lt;p style=&quot;text-align: center; margin-bottom: 15px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400;&quot;&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.&lt;/p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `time-in-table`
--

CREATE TABLE `time-in-table` (
  `time_in_id` int(11) NOT NULL,
  `visitors_id` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time-in-table`
--

INSERT INTO `time-in-table` (`time_in_id`, `visitors_id`, `date`, `time`) VALUES
(40, '111508', '2023-03-10', '21:50'),
(41, '111517', '2023-03-13', '13:22'),
(42, '111507', '2023-03-13', '13:31');

-- --------------------------------------------------------

--
-- Table structure for table `time-out-table`
--

CREATE TABLE `time-out-table` (
  `time_out_table_id` int(11) NOT NULL,
  `time_in_id` varchar(200) DEFAULT NULL,
  `time_out` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time-out-table`
--

INSERT INTO `time-out-table` (`time_out_table_id`, `time_in_id`, `time_out`) VALUES
(40, '40', '21:51'),
(41, '41', '13:36'),
(42, '42', '');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_list`
--

CREATE TABLE `tracking_list` (
  `id` int(30) NOT NULL,
  `cargo_id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tracking_list`
--

INSERT INTO `tracking_list` (`id`, `cargo_id`, `title`, `description`, `date_added`) VALUES
(1, 1, 'Pending', ' Shipment created.', '2022-02-22 14:39:09'),
(2, 1, 'In-Transit', 'Cargo has been departed.', '2022-02-22 14:42:18'),
(3, 1, 'Arrive at Station', 'Cargo has arrived at the station', '2022-02-22 14:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/avatars/1.png?v=1645064505', NULL, 1, '2021-01-20 14:02:37', '2022-02-17 10:21:45'),
(5, 'John', 'Smith', 'jsmith', '1254737c076cf867dc53d60a0364f38e', 'uploads/avatars/5.png?v=1645514943', NULL, 2, '2022-02-22 15:29:03', '2022-02-22 15:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `userssadasda`
--

CREATE TABLE `userssadasda` (
  `id` int(30) NOT NULL,
  `doctor_id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userssadasda`
--

INSERT INTO `userssadasda` (`id`, `doctor_id`, `name`, `address`, `contact`, `username`, `password`, `type`) VALUES
(1, 0, 'Administrator', '', '', 'admin', 'admin123', 1),
(2, 0, 'Dhin Zon N. Mahinay', '', '', 'dhinzon', 'dhinzon', 2),
(3, 0, 'John Carl Dometita', '', '', 'dometita', 'dometita', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(30) NOT NULL,
  `position` varchar(200) NOT NULL,
  `availability` int(30) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `position`, `availability`, `description`, `status`, `date_created`) VALUES
(2, 'WEB DEVELOPER', 10, '&lt;h2 style=&quot;background: transparent; position: relative;&quot;&gt;URGENT HIRING!!&lt;/h2&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Our company is looking for 10 new Web developer.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3 style=&quot;background: transparent; position: relative;&quot;&gt;Requirements:&lt;/h3&gt;&lt;p&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;PHP Knowledgeable&lt;/li&gt;&lt;li&gt;Wordpress Knowledgeable&lt;/li&gt;&lt;li&gt;node.js Knowledgeable&lt;/li&gt;&lt;li&gt;reactjs Knowledgeable&lt;/li&gt;&lt;li&gt;MySQL Knowledgeable&lt;/li&gt;&lt;/ul&gt;', 1, '2020-09-28 11:24:52'),
(3, 'Sample', 20, '&lt;h1 style=&quot;background: transparent; position: relative;&quot;&gt;Job Description&lt;/h1&gt;&lt;p&gt;&lt;b style=&quot;margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/b&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;h2&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Requirements:&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;ul style=&quot;background: transparent; position: relative;&quot;&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 1&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 2&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 3&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 4&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 5&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 6&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 0, '2020-09-28 11:28:38'),
(4, 'Core Human Resource Management', 5, '&lt;h1 style=&quot;background: transparent; position: relative;&quot;&gt;Job Description&lt;/h1&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; margin: 0px; padding: 0px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/span&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;h2&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Requirements:&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;ul style=&quot;background: transparent; position: relative;&quot;&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 1&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 2&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 3&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 4&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 5&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 6&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/span&gt;&lt;/p&gt;', 1, '2020-09-28 11:28:50'),
(5, 'Receptionist', 2, '&lt;h1 style=&quot;background: transparent; position: relative;&quot;&gt;Job Description&lt;/h1&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; margin: 0px; padding: 0px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/span&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;h2&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Requirements:&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;ul style=&quot;background: transparent; position: relative;&quot;&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 1&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 2&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 3&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 4&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 5&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 6&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/span&gt;&lt;/p&gt;', 1, '2020-09-28 11:29:20'),
(13, 'Business Process Outsourcing', 8, 'Job DescriptionLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Requirements:Sample Requirement 1,Sample Requirement 2,Sample Requirement 3,Sample Requirement 4,Sample Requirement 5,Sample Requirement 6,The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, '2022-05-19 05:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_inbound`
--

CREATE TABLE `vehicle_inbound` (
  `item_num` int(11) DEFAULT NULL,
  `Driver` varchar(100) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Destination` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_inbound`
--

INSERT INTO `vehicle_inbound` (`item_num`, `Driver`, `Location`, `Date`, `Destination`) VALUES
(NULL, 'Ivan Amolar', 'Quezon City', '2023-02-23', '0'),
(NULL, 'Edloy Amolar', 'Quezon City', '2023-02-24', '0'),
(NULL, 'Daryl Estolonio', 'Pasay City', '2023-02-27', 'Quezon City'),
(NULL, 'Victor Hans', 'Albay', '2023-02-26', 'Quezon City');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_list`
--

CREATE TABLE `vehicle_list` (
  `item_num` int(11) NOT NULL,
  `Driver` varchar(100) DEFAULT NULL,
  `Vehicle_Types` varchar(100) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `Reserve` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_list`
--

INSERT INTO `vehicle_list` (`item_num`, `Driver`, `Vehicle_Types`, `Status`, `Reserve`) VALUES
(1, 'Victor Goyhi', 'Raptor', 'Active', 'Available'),
(2, 'Banghays Aerons', 'Vios', 'Unactive', 'Unavailable'),
(3, 'Christina Capitle', 'L300', 'Active', 'Available'),
(4, 'El Chapits', 'Raptor', 'Active', 'Available'),
(5, 'Daryl Estolonio', 'Innova', 'Active', 'Available'),
(6, 'Maria Pablo', 'L300', 'Active', 'Available'),
(7, 'Ronnie Castro', 'Vios', 'Unactive', 'Unavailable'),
(8, 'Philip Gomera', 'Vios', 'Active', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_outbound`
--

CREATE TABLE `vehicle_outbound` (
  `item_num` int(11) DEFAULT NULL,
  `Driver` varchar(100) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Destination` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_outbound`
--

INSERT INTO `vehicle_outbound` (`item_num`, `Driver`, `Location`, `Date`, `Destination`) VALUES
(NULL, 'Bangay Amolar', 'Pasig City', '2023-02-28', '0'),
(NULL, 'Ivan Hans', 'San Pedro Laguna', '2023-02-28', '0'),
(NULL, 'Ivan Amolar', 'Quezon City', '2023-02-15', 'San Pedro Laguna'),
(NULL, 'Bangay H2hans', 'Quezon City', '2023-02-27', 'Pasig City');

-- --------------------------------------------------------

--
-- Table structure for table `visitor-account`
--

CREATE TABLE `visitor-account` (
  `visitor_account_id` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `profile_link` varchar(200) NOT NULL,
  `visitor_account_createdAt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor-account`
--

INSERT INTO `visitor-account` (`visitor_account_id`, `email`, `fullname`, `profile_link`, `visitor_account_createdAt`) VALUES
('1229042c-b2de-4e84-bdc9-322dc171634d', 'lendonpalencia50@gmail.com', 'Lendon Palencia', '1c629073-7ee9-4626-b5e3-10b876de8462.jpg', '03/05/2023'),
('1ad11e26-99a7-4fea-9dc8-66b005d8fe24', 'andrecoso09@gmail.com', '3215 - Oliverio Catherine', '53d82770-fb95-4223-ae7f-5749891c4c3e.jpg', '03/01/2023'),
('a97598ce-7ef4-4b69-a692-3fab29eec775', 'charlespalencia21@gmail.com', 'Charles Palencia', '2c1201b4-b1b5-4dd1-a3b8-9926fdcdcd64.jpg', '02/27/2023');

-- --------------------------------------------------------

--
-- Table structure for table `visitor-appointment-request`
--

CREATE TABLE `visitor-appointment-request` (
  `visitor_req_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `id_picture` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `declined` tinyint(1) NOT NULL,
  `pending` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `visitor_id` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `req_createdAt` varchar(200) NOT NULL,
  `qr_code_filename` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor-appointment-request`
--

INSERT INTO `visitor-appointment-request` (`visitor_req_id`, `fullname`, `id_picture`, `date`, `time`, `email`, `approved`, `declined`, `pending`, `deleted`, `visitor_id`, `purpose`, `req_createdAt`, `qr_code_filename`) VALUES
(58, '3215 - Oliverio Catherine', 'dc6d1d6d-b9ca-4655-aa2b-f7e244227789.jpg', '03/25/2023', '22:10', 'andrecoso09@gmail.com', 1, 0, 0, 0, '1ad11e26-99a7-4fea-9dc8-66b005d8fe24', 'qwe', '1678457274', ''),
(59, 'Charles Palencia', '11b064f4-ffa0-4272-a238-861dfc5fa4f8.jpg', '03/28/2023', '11:09', 'charlespalencia21@gmail.com', 1, 0, 0, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775', 'qwe', '1678590367', '2f50417c-f7ed-4457-9385-763b08fd0441.png'),
(60, 'Charles Palencia', 'f6022534-870e-4d5c-a85a-efc216b140de.jpg', '03/31/2023', '08:57', 'charlespalencia21@gmail.com', 0, 0, 1, 0, 'a97598ce-7ef4-4b69-a692-3fab29eec775', 'qw', '1678668935', '');

-- --------------------------------------------------------

--
-- Table structure for table `visitors-account`
--

CREATE TABLE `visitors-account` (
  `visitors_account_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `status_id` varchar(200) NOT NULL,
  `IDpicture_filename` varchar(200) NOT NULL,
  `qrcode_filename` varchar(200) DEFAULT NULL,
  `createdAt` varchar(200) NOT NULL,
  `archive` tinyint(1) NOT NULL,
  `register` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors-account`
--

INSERT INTO `visitors-account` (`visitors_account_id`, `fullname`, `status_id`, `IDpicture_filename`, `qrcode_filename`, `createdAt`, `archive`, `register`) VALUES
(111507, 'Lao Christian', '3', '15b589a0-27e6-4b68-b4ef-000df7c27b76.jpg', '5dd4370f-eaa4-4008-aaa5-dbefb2dcfe24.png', '1678417167', 0, ''),
(111508, 'docot argie', '1', '5ef23a3b-920f-4b55-ad9b-bb8fe0570562.jpg', 'bbd174ad-443f-4554-9894-ea6c8b03c02e.png', '1678424125', 0, ''),
(111514, '3215 - Oliverio Catherine', '1', 'dc6d1d6d-b9ca-4655-aa2b-f7e244227789.jpg', '787bed66-03b6-4a0e-8a0c-4fbf32fa5d61.png', '1678459120', 0, ''),
(111517, 'Charles Palencia', '1', '11b064f4-ffa0-4272-a238-861dfc5fa4f8.jpg', '0030e0d4-24fe-4b98-a681-5a8051345ee5.png', '1678591544', 0, '59');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_auditing`
--

CREATE TABLE `warehouse_auditing` (
  `item_num` int(11) NOT NULL,
  `item` varchar(100) DEFAULT NULL,
  `good_item` int(100) DEFAULT NULL,
  `bad_item` int(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouse_auditing`
--

INSERT INTO `warehouse_auditing` (`item_num`, `item`, `good_item`, `bad_item`, `date`) VALUES
(0, 'ballpen', 21, 21, 'nov 1 2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-employe-accounts`
--
ALTER TABLE `admin-employe-accounts`
  ADD UNIQUE KEY `filename` (`account_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment-log`
--
ALTER TABLE `appointment-log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `asset_auditing`
--
ALTER TABLE `asset_auditing`
  ADD PRIMARY KEY (`item_num`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `available_list`
--
ALTER TABLE `available_list`
  ADD PRIMARY KEY (`item_num`);

--
-- Indexes for table `awardingsocial`
--
ALTER TABLE `awardingsocial`
  ADD PRIMARY KEY (`awardId`);

--
-- Indexes for table `cargo_items`
--
ALTER TABLE `cargo_items`
  ADD KEY `cargo_id` (`cargo_id`),
  ADD KEY `cargo_type_list` (`cargo_type_id`);

--
-- Indexes for table `cargo_list`
--
ALTER TABLE `cargo_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargo_meta`
--
ALTER TABLE `cargo_meta`
  ADD KEY `cargo_id` (`cargo_id`);

--
-- Indexes for table `cargo_type_list`
--
ALTER TABLE `cargo_type_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`claimId`);

--
-- Indexes for table `compensation`
--
ALTER TABLE `compensation`
  ADD PRIMARY KEY (`comId`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`deptId`);

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`empdetailsid`);

--
-- Indexes for table `emptask`
--
ALTER TABLE `emptask`
  ADD PRIMARY KEY (`emptask`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`item_num`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `facility_availability`
--
ALTER TABLE `facility_availability`
  ADD PRIMARY KEY (`facility_availability_id`);

--
-- Indexes for table `hiretbl`
--
ALTER TABLE `hiretbl`
  ADD PRIMARY KEY (`hireId`);

--
-- Indexes for table `hr2_competency`
--
ALTER TABLE `hr2_competency`
  ADD PRIMARY KEY (`employee_info`);

--
-- Indexes for table `hr3tanda`
--
ALTER TABLE `hr3tanda`
  ADD PRIMARY KEY (`atid`);

--
-- Indexes for table `hr4_employee_salary_plan`
--
ALTER TABLE `hr4_employee_salary_plan`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `inquirers`
--
ALTER TABLE `inquirers`
  ADD PRIMARY KEY (`inquirers_id`);

--
-- Indexes for table `leavetbl`
--
ALTER TABLE `leavetbl`
  ADD PRIMARY KEY (`leaveId`);

--
-- Indexes for table `log-all-visitors`
--
ALTER TABLE `log-all-visitors`
  ADD PRIMARY KEY (`log_all_visitors_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logs-log`
--
ALTER TABLE `logs-log`
  ADD PRIMARY KEY (`logs_id`);

--
-- Indexes for table `loguser`
--
ALTER TABLE `loguser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_history_admin`
--
ALTER TABLE `log_history_admin`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `log_visitor_status_table`
--
ALTER TABLE `log_visitor_status_table`
  ADD PRIMARY KEY (`log_visitor_status_id`);

--
-- Indexes for table `pagibig`
--
ALTER TABLE `pagibig`
  ADD PRIMARY KEY (`pagibigNo`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `philhealth`
--
ALTER TABLE `philhealth`
  ADD PRIMARY KEY (`philHealthNo`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `recruitment_status`
--
ALTER TABLE `recruitment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_facility`
--
ALTER TABLE `schedule_facility`
  ADD PRIMARY KEY (`schedule_facility_id`);

--
-- Indexes for table `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`ssNo`);

--
-- Indexes for table `supplier_company`
--
ALTER TABLE `supplier_company`
  ADD PRIMARY KEY (`item_num`);

--
-- Indexes for table `supplier_requestor`
--
ALTER TABLE `supplier_requestor`
  ADD PRIMARY KEY (`item_num`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time-in-table`
--
ALTER TABLE `time-in-table`
  ADD PRIMARY KEY (`time_in_id`);

--
-- Indexes for table `time-out-table`
--
ALTER TABLE `time-out-table`
  ADD PRIMARY KEY (`time_out_table_id`);

--
-- Indexes for table `tracking_list`
--
ALTER TABLE `tracking_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo_id` (`cargo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userssadasda`
--
ALTER TABLE `userssadasda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_list`
--
ALTER TABLE `vehicle_list`
  ADD PRIMARY KEY (`item_num`);

--
-- Indexes for table `visitor-account`
--
ALTER TABLE `visitor-account`
  ADD PRIMARY KEY (`visitor_account_id`);

--
-- Indexes for table `visitor-appointment-request`
--
ALTER TABLE `visitor-appointment-request`
  ADD PRIMARY KEY (`visitor_req_id`);

--
-- Indexes for table `visitors-account`
--
ALTER TABLE `visitors-account`
  ADD PRIMARY KEY (`visitors_account_id`);

--
-- Indexes for table `warehouse_auditing`
--
ALTER TABLE `warehouse_auditing`
  ADD PRIMARY KEY (`item_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-employe-accounts`
--
ALTER TABLE `admin-employe-accounts`
  MODIFY `account_id` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22018;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `appointment-log`
--
ALTER TABLE `appointment-log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `awardingsocial`
--
ALTER TABLE `awardingsocial`
  MODIFY `awardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cargo_list`
--
ALTER TABLE `cargo_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cargo_type_list`
--
ALTER TABLE `cargo_type_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `claimId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `compensation`
--
ALTER TABLE `compensation`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `deptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `empdetails`
--
ALTER TABLE `empdetails`
  MODIFY `empdetailsid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `emptask`
--
ALTER TABLE `emptask`
  MODIFY `emptask` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `facility_availability`
--
ALTER TABLE `facility_availability`
  MODIFY `facility_availability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hiretbl`
--
ALTER TABLE `hiretbl`
  MODIFY `hireId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `hr2_competency`
--
ALTER TABLE `hr2_competency`
  MODIFY `employee_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `hr3tanda`
--
ALTER TABLE `hr3tanda`
  MODIFY `atid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hr4_employee_salary_plan`
--
ALTER TABLE `hr4_employee_salary_plan`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquirers`
--
ALTER TABLE `inquirers`
  MODIFY `inquirers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `leavetbl`
--
ALTER TABLE `leavetbl`
  MODIFY `leaveId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `log-all-visitors`
--
ALTER TABLE `log-all-visitors`
  MODIFY `log_all_visitors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logs-log`
--
ALTER TABLE `logs-log`
  MODIFY `logs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `loguser`
--
ALTER TABLE `loguser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_history_admin`
--
ALTER TABLE `log_history_admin`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `log_visitor_status_table`
--
ALTER TABLE `log_visitor_status_table`
  MODIFY `log_visitor_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pagibig`
--
ALTER TABLE `pagibig`
  MODIFY `pagibigNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14010672;

--
-- AUTO_INCREMENT for table `philhealth`
--
ALTER TABLE `philhealth`
  MODIFY `philHealthNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14010673;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recruitment_status`
--
ALTER TABLE `recruitment_status`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `schedule_facility`
--
ALTER TABLE `schedule_facility`
  MODIFY `schedule_facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sss`
--
ALTER TABLE `sss`
  MODIFY `ssNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14010671;

--
-- AUTO_INCREMENT for table `supplier_company`
--
ALTER TABLE `supplier_company`
  MODIFY `item_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier_requestor`
--
ALTER TABLE `supplier_requestor`
  MODIFY `item_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `time-in-table`
--
ALTER TABLE `time-in-table`
  MODIFY `time_in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `time-out-table`
--
ALTER TABLE `time-out-table`
  MODIFY `time_out_table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tracking_list`
--
ALTER TABLE `tracking_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userssadasda`
--
ALTER TABLE `userssadasda`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `visitor-appointment-request`
--
ALTER TABLE `visitor-appointment-request`
  MODIFY `visitor_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `visitors-account`
--
ALTER TABLE `visitors-account`
  MODIFY `visitors_account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111518;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cargo_items`
--
ALTER TABLE `cargo_items`
  ADD CONSTRAINT `cargo_id_FK` FOREIGN KEY (`cargo_id`) REFERENCES `cargo_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `cargo_type_id_FK` FOREIGN KEY (`cargo_type_id`) REFERENCES `cargo_type_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cargo_meta`
--
ALTER TABLE `cargo_meta`
  ADD CONSTRAINT `cargo_meta_id_FK` FOREIGN KEY (`cargo_id`) REFERENCES `cargo_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tracking_list`
--
ALTER TABLE `tracking_list`
  ADD CONSTRAINT `cargo_id_FK2` FOREIGN KEY (`cargo_id`) REFERENCES `cargo_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
