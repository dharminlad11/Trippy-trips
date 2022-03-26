-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 12:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `code`, `email`) VALUES
(1, '289205', 'dharminlad1199@gmail.com'),
(2, '256373', 'dharminlad1199@gmail.com'),
(3, '396686', 'dharminlad1199@gmail.com'),
(4, '406173', 'dharminlad1199@gmail.com'),
(5, '700811', 'krishnagandhi1001@gmail.com'),
(6, '324204', 'dharminlad1199@gmail.com'),
(7, '471279', 'vaishnavigandhi8564@gmail.com'),
(8, '237781', 'dharminlad1199@gmail.com'),
(9, '352124', 'dharminlad1199@gmail.com'),
(10, '14018', 'dharminlad1199@gmail.com'),
(11, '180432', 'dharminlad1199@gmail.com'),
(12, '832581', 'dharminlad1199@gmail.com'),
(13, '133667', 'dharminlad1199@gmail.com'),
(14, '840067', 'dharminlad1199@gmail.com'),
(15, '941935', 'dharminlad1199@gmail.com'),
(16, '137216', 'dharminlad1199@gmail.com'),
(17, '166343', 'dharminlad1199@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `resetpasswords`
--

CREATE TABLE `resetpasswords` (
  `id` int(11) NOT NULL,
  `code` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resetpasswords`
--

INSERT INTO `resetpasswords` (`id`, `code`, `email`) VALUES
(10, '160335ae02f6aa', 'dharminlad1199@gmail.com'),
(11, '160335ae2640b5', 'dharminlad1199@gmail.com'),
(12, '160335ae3545ab', 'dharminlad1199@gmail.com'),
(13, '160335ae69520d', 'dharminlad1199@gmail.com'),
(14, '160335ae6cafdc', 'dharminlad1199@gmail.com'),
(15, '160335b103faa1', ''),
(16, '160335b573994d', 'dharminlad1199@gmail.com'),
(17, '160335b973f143', 'dharminlad1199@gmail.com'),
(18, '160335ca209924', 'dharminlad1199@gmail.com'),
(19, '160335cc5c0137', 'dharminlad1199@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tour_admin`
--

CREATE TABLE `tour_admin` (
  `t_a_id` int(11) NOT NULL,
  `t_a_name` varchar(70) NOT NULL,
  `t_a_email` varchar(70) NOT NULL,
  `t_a_gender` varchar(100) NOT NULL,
  `t_a_contactno` varchar(100) NOT NULL,
  `t_a_pwd` text NOT NULL,
  `t_a_status` int(10) NOT NULL,
  `t_a_cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_admin`
--

INSERT INTO `tour_admin` (`t_a_id`, `t_a_name`, `t_a_email`, `t_a_gender`, `t_a_contactno`, `t_a_pwd`, `t_a_status`, `t_a_cdate`) VALUES
(1, 'Krishna', '18bmiit001@gmail.com', 'F', '7069938308', '123', 1, '0000-00-00'),
(2, 'Admin', 'admin@gmail.com', 'F', '7069938308', 'admin', 1, '0000-00-00'),
(3, 'Vaishnavi', 'vaishnavi1011@gmail.com', 'F', '9825408880', '123', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tour_feedback`
--

CREATE TABLE `tour_feedback` (
  `t_f_id` int(11) NOT NULL,
  `t_f_name` varchar(70) NOT NULL,
  `t_f_email` varchar(70) NOT NULL,
  `t_f_desc` text NOT NULL,
  `t_f_cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_book_person_detail`
--

CREATE TABLE `t_book_person_detail` (
  `t_b_p_d_id` int(11) NOT NULL,
  `t_p_b_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact` varchar(70) NOT NULL,
  `b_p_cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_city`
--

CREATE TABLE `t_city` (
  `t_c_id` int(11) NOT NULL,
  `t_s_id` int(11) NOT NULL,
  `t_c_name` varchar(70) NOT NULL,
  `t_c_status` int(10) NOT NULL,
  `t_c_cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_city`
--

INSERT INTO `t_city` (`t_c_id`, `t_s_id`, `t_c_name`, `t_c_status`, `t_c_cdate`) VALUES
(1, 1, 'Surat', 1, '2021-02-20'),
(2, 1, 'Ahmedabad', 1, '2021-02-20'),
(3, 1, 'Rajkot', 1, '2021-02-20'),
(4, 2, 'Mumbai', 1, '2021-02-20'),
(5, 2, 'Nashik', 1, '2021-02-20'),
(6, 2, 'Pune', 1, '2021-02-20'),
(7, 3, 'Kochi', 1, '2021-02-20'),
(8, 3, 'Munnar', 1, '2021-02-20'),
(9, 3, 'Kovalam', 1, '2021-02-20'),
(10, 4, 'Lucknow', 1, '2021-02-20'),
(11, 4, 'Agra', 1, '2021-02-20'),
(12, 4, 'Ayodhya', 1, '2021-02-20'),
(13, 5, 'Amritsar', 1, '2021-02-20'),
(14, 5, 'Chandigarh', 1, '2021-02-20'),
(15, 5, 'Ludhiana', 1, '2021-02-20'),
(16, 6, 'Kolkata', 1, '2021-02-20'),
(17, 6, 'Howrah', 1, '2021-02-20'),
(18, 6, 'Darjeeling', 1, '2021-02-20'),
(19, 0, 'Bardoli', 1, '0000-00-00'),
(22, 1, 'Vadodara', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_hotel`
--

CREATE TABLE `t_hotel` (
  `t_h_id` int(11) NOT NULL,
  `t_h_name` varchar(70) NOT NULL,
  `t_h_desc` text NOT NULL,
  `t_h_pic` text NOT NULL,
  `t_h_status` int(10) NOT NULL,
  `t_o_id` int(11) NOT NULL,
  `t_h_cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_hotel`
--

INSERT INTO `t_hotel` (`t_h_id`, `t_h_name`, `t_h_desc`, `t_h_pic`, `t_h_status`, `t_o_id`, `t_h_cdate`) VALUES
(1, 'Harborlights', '5 star', 'C:xampphtdocs	ours_v5	ours/uploads/', 1, 1, '0000-00-00'),
(2, 'fsdf', 'fgdsfg', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (8).png', 1, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_operator`
--

CREATE TABLE `t_operator` (
  `t_o_id` int(11) NOT NULL,
  `t_o_name` varchar(70) NOT NULL,
  `t_o_email` varchar(70) NOT NULL,
  `t_o_pwd` text NOT NULL,
  `t_o_phone` varchar(30) NOT NULL,
  `t_o_address` text NOT NULL,
  `t_o_city` int(10) NOT NULL,
  `t_o_state` int(10) NOT NULL,
  `t_o_pic` varchar(500) NOT NULL,
  `t_o_b_name` varchar(70) NOT NULL,
  `t_o_b_contact` varchar(30) NOT NULL,
  `t_o_status` int(10) NOT NULL,
  `t_o_cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_operator`
--

INSERT INTO `t_operator` (`t_o_id`, `t_o_name`, `t_o_email`, `t_o_pwd`, `t_o_phone`, `t_o_address`, `t_o_city`, `t_o_state`, `t_o_pic`, `t_o_b_name`, `t_o_b_contact`, `t_o_status`, `t_o_cdate`) VALUES
(1, 'Krishna', 'krishnagandhi1001@gmail.com', '123', '7069938308', 'Parvat Patia', 0, 0, 'C:xampphtdocs	ours	ours/uploads/logo.png', 'TRIPPY TRIPS', '9825289955', 1, '0000-00-00'),
(3, 'Vaishnavi', 'vg123@gmail.com', '123', '7418529630', 'Adajan', 0, 1, 'C:xampphtdocs	ours_v5	ours/uploads/', 'New Tours', '78945611230', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_package`
--

CREATE TABLE `t_package` (
  `t_pa_id` int(11) NOT NULL,
  `t_o_id` int(11) NOT NULL,
  `t_p_name` varchar(70) NOT NULL,
  `t_p_pic` text NOT NULL,
  `t_p_desc` text NOT NULL,
  `t_p_sdate` date NOT NULL,
  `t_p_edate` date NOT NULL,
  `t_p_price` varchar(70) NOT NULL,
  `t_p_duration` varchar(70) NOT NULL,
  `t_p_traveling_mode` varchar(70) NOT NULL,
  `t_p_theme` varchar(70) NOT NULL,
  `t_places` varchar(100) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `t_p_status` int(10) NOT NULL,
  `t_p_cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_package`
--

INSERT INTO `t_package` (`t_pa_id`, `t_o_id`, `t_p_name`, `t_p_pic`, `t_p_desc`, `t_p_sdate`, `t_p_edate`, `t_p_price`, `t_p_duration`, `t_p_traveling_mode`, `t_p_theme`, `t_places`, `hotel`, `t_p_status`, `t_p_cdate`) VALUES
(1, 0, 'fsfgdfg', 'C:xampphtdocs	ours_v5	ours/uploads/', 'hgj', '2021-04-08', '2021-03-29', '5000', 'ffd', 'Flight', 'dfds', '', '', 1, '0000-00-00'),
(2, 0, 'dsfsf', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (5).png', 'hjhj', '2021-03-24', '2021-03-31', '5000', 'fv', 'Flight', 'sadaSD', '', '', 1, '0000-00-00'),
(3, 1, 'rgdg', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (9).png', 'rtre', '2021-03-24', '2021-03-31', '234566', 'rref', 'Train', 'erf', '', '', 1, '0000-00-00'),
(4, 1, 'fdfs', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (9).png', 'eer', '2021-03-24', '2021-04-01', '2354456', 'fsd', 'Car', 'fdf', '', '', 1, '0000-00-00'),
(5, 1, 'HELLO', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (10).png', 'ere', '2021-03-24', '2021-04-02', '70000', 'fsdf', 'Flight', 'fds', '', '', 1, '0000-00-00'),
(6, 1, 'dsfsf', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (8).png', 'dfas', '2021-03-24', '2021-03-31', '5667', 'dsfs', 'Flight', 'df', '', '', 1, '0000-00-00'),
(7, 1, 'dsfsf', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (8).png', 'efsaf', '2021-03-24', '2021-03-31', '67890', 'dsf', 'Car', 'fsadf', '', '', 1, '0000-00-00'),
(8, 1, 'fsfgdfg', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (9).png', 'erf', '2021-03-31', '2021-04-09', '98765', 'fgdf', 'Flight', 'sfsdf', '', '', 1, '0000-00-00'),
(9, 1, 'testing', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (8).png', 'fsf', '2021-03-31', '2021-04-09', '87655', 'fdf', 'Flight,Train', 'OK', '11,19', '', 1, '0000-00-00'),
(10, 1, 'Hill Station - Saputara', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (9).png', 'good place', '2021-03-20', '2021-03-31', '8000', '5 days', 'Car', 'Climbing', '20', '1', 1, '0000-00-00'),
(11, 1, 'Punjab ', '/uploads/Screenshot (8).png', 'Good', '2021-03-24', '2021-04-01', '5000', '3 days', 'Train', 'Religious', '121', '2', 0, '0000-00-00'),
(12, 1, 'Punjab ', '/uploads/Screenshot (8).png', 'Good', '2021-03-24', '2021-04-01', '5000', '3 days', 'Train', 'Religious', '121', '2', 0, '0000-00-00'),
(13, 1, 'New Test', '/uploads/Screenshot (8).png', 'Refresh', '2021-03-31', '2021-04-08', '8500', '8 days', 'Train', 'Business Place', '120,121', '1', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_place`
--

CREATE TABLE `t_place` (
  `t_p_id` int(11) NOT NULL,
  `t_p_name` varchar(70) NOT NULL,
  `t_c_id` int(11) NOT NULL,
  `t_s_id` int(100) NOT NULL,
  `t_p_desc` text NOT NULL,
  `t_p_preference` varchar(100) NOT NULL,
  `t_p_pic` text NOT NULL,
  `t_o_id` int(11) NOT NULL,
  `t_p_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_place`
--

INSERT INTO `t_place` (`t_p_id`, `t_p_name`, `t_c_id`, `t_s_id`, `t_p_desc`, `t_p_preference`, `t_p_pic`, `t_o_id`, `t_p_status`) VALUES
(1, 'Dumas ', 0, 0, 'Beach', 'Winter', 'C:xampphtdocs	ours_v5	ours/uploads/', 0, 1),
(11, 'grdg', 4, 2, 'fggf', 'dfg', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (8).png', 1, 1),
(19, 'Dumas egdfg', 10, 4, 'fdgd', 'fgdf', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (9).png', 1, 1),
(20, 'Saputara', 1, 1, 'Mountains', 'Winter', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (7).png', 1, 1),
(21, 'Amritsar', 13, 5, 'Historic', 'Anytime', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (8).png', 1, 1),
(26, 'vb', 7, 3, 'dfgh', 'nm', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (8).png', 1, 1),
(28, 'testt', 1, 1, 'vgh', 'g', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (8).png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_p_book`
--

CREATE TABLE `t_p_book` (
  `t_p_b_id` int(11) NOT NULL,
  `t_u_id` int(11) NOT NULL,
  `t_pa_id` int(11) NOT NULL,
  `t_p_person` int(10) NOT NULL,
  `t_b_date` varchar(100) NOT NULL,
  `t_t_amount` varchar(70) NOT NULL,
  `t_p_b_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_p_book`
--

INSERT INTO `t_p_book` (`t_p_b_id`, `t_u_id`, `t_pa_id`, `t_p_person`, `t_b_date`, `t_t_amount`, `t_p_b_status`) VALUES
(1, 9, 10, 3, '0000-00-00', '24000', 0),
(2, 9, 10, 8, '-2005', '64000', 0),
(3, 9, 10, 1, '-2005', '8000', 0),
(4, 9, 10, 2, '-2005', '16000', 0),
(5, 9, 10, 1, '-2005', '8000', 0),
(6, 9, 10, 3, '19-03-2021', '24000', 1),
(7, 9, 11, 1, '19-03-2021', '5000', 1),
(8, 9, 11, 1, '19-03-2021', '5000', 1),
(9, 9, 11, 1, '19-03-2021', '5000', 1),
(10, 9, 11, 1, '19-03-2021', '5000', 1),
(11, 9, 11, 1, '19-03-2021', '5000', 1),
(12, 9, 11, 1, '19-03-2021', '5000', 1),
(13, 9, 11, 1, '19-03-2021', '5000', 1),
(14, 9, 11, 1, '19-03-2021', '5000', 1),
(15, 9, 11, 1, '19-03-2021', '5000', 1),
(16, 9, 11, 1, '19-03-2021', '5000', 1),
(17, 9, 11, 1, '19-03-2021', '5000', 1),
(18, 9, 11, 1, '19-03-2021', '5000', 1),
(19, 9, 11, 1, '19-03-2021', '5000', 1),
(20, 9, 11, 1, '19-03-2021', '5000', 1),
(21, 9, 11, 1, '19-03-2021', '5000', 1),
(22, 9, 11, 1, '19-03-2021', '5000', 1),
(23, 9, 11, 4, '20-03-2021', '20000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_p_hotel`
--

CREATE TABLE `t_p_hotel` (
  `t_p_h_id` int(11) NOT NULL,
  `t_pa_id` int(11) NOT NULL,
  `t_h_id` int(11) NOT NULL,
  `t_h_cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_p_place`
--

CREATE TABLE `t_p_place` (
  `t_p_p_id` int(11) NOT NULL,
  `t_pa_id` int(11) NOT NULL,
  `t_p_id` int(11) NOT NULL,
  `t_p_cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_state`
--

CREATE TABLE `t_state` (
  `t_s_id` int(11) NOT NULL,
  `t_s_name` varchar(70) NOT NULL,
  `t_s_status` int(10) NOT NULL,
  `t_s_cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_state`
--

INSERT INTO `t_state` (`t_s_id`, `t_s_name`, `t_s_status`, `t_s_cdate`) VALUES
(1, 'Gujarat', 1, '2021-02-20'),
(2, 'Maharashtra', 1, '2021-02-20'),
(3, 'Kerela', 1, '2021-02-20'),
(4, 'Uttar Pradesh', 1, '2021-02-20'),
(5, 'Punjab', 1, '2021-02-20'),
(6, 'West Bengal', 1, '2021-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `t_user_info`
--

CREATE TABLE `t_user_info` (
  `t_u_id` int(11) NOT NULL,
  `t_u_name` varchar(70) NOT NULL,
  `t_u_email` varchar(70) NOT NULL,
  `t_u_pwd` text NOT NULL,
  `t_u_contact` varchar(20) NOT NULL,
  `t_u_gender` varchar(10) NOT NULL,
  `t_u_address` varchar(300) NOT NULL,
  `t_u_city` varchar(30) NOT NULL,
  `t_u_state` varchar(30) NOT NULL,
  `t_u_pic` varchar(500) NOT NULL,
  `t_u_status` int(10) NOT NULL,
  `t_u_rdate` date NOT NULL,
  `t_u_udate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user_info`
--

INSERT INTO `t_user_info` (`t_u_id`, `t_u_name`, `t_u_email`, `t_u_pwd`, `t_u_contact`, `t_u_gender`, `t_u_address`, `t_u_city`, `t_u_state`, `t_u_pic`, `t_u_status`, `t_u_rdate`, `t_u_udate`) VALUES
(9, 'Krishna', 'krishna1011@gmail.com', '123', '9825289955', 'Male', 'Adajan', 'Surat', 'West Bengal', 'C:xampphtdocs	ours_v3	ours/uploads/Screenshot (4).png', 1, '0000-00-00', '0000-00-00'),
(10, 'Vaishnavi', 'vaishnavi100@gmail.com', '123', '9825289955', 'Female', 'adajan', 'Bardoli', 'West Bengal', 'C:xampphtdocs	ours_v3	ours/uploads/Screenshot (25).png', 1, '0000-00-00', '0000-00-00'),
(12, 'Rinku', 'rinku123@gmail.com', '123', '7418529630', 'Male', 'Adajan', 'Kolkata', 'Gujarat', 'C:xampphtdocs	ours_v3	ours/uploads/Screenshot (7).png', 1, '0000-00-00', '0000-00-00'),
(14, 'asdfgb', 'dfbn@g.c', '123', 'dfbgnh', 'Male', 'dfg', 'Kochi', 'Kerela', 'C:xampphtdocs	ours_v3	ours/uploads/Screenshot (8).png', 1, '0000-00-00', '0000-00-00'),
(15, 'Ferin', 'ferin@gmail.com', '123', '7894561230', 'Male', 'Pal', 'Munnar', 'Kerela', 'C:xampphtdocs	ours_v3	ours/uploads/Screenshot (1).png', 1, '0000-00-00', '0000-00-00'),
(54, 'DHARMIN', 'dharminlad11@gmail.com', '123', '9825289955', 'Male', 'fgh', 'Surat', 'Gujarat', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (9).png', 1, '0000-00-00', '0000-00-00'),
(59, 'DHARMIN', '', '123', '9825289955', 'Male', 'CM residency', 'Surat', 'Gujarat', 'C:xampphtdocs	ours_v5	ours/uploads/Screenshot (10).png', 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_user_info_delete`
--

CREATE TABLE `t_user_info_delete` (
  `d_u_id` int(11) NOT NULL,
  `d_u_name` varchar(300) NOT NULL,
  `d_u_email` varchar(300) NOT NULL,
  `d_u_contact` varchar(300) NOT NULL,
  `d_u_address` varchar(300) NOT NULL,
  `d_u_city` varchar(300) NOT NULL,
  `d_u_state` varchar(300) NOT NULL,
  `d_u_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user_info_delete`
--

INSERT INTO `t_user_info_delete` (`d_u_id`, `d_u_name`, `d_u_email`, `d_u_contact`, `d_u_address`, `d_u_city`, `d_u_state`, `d_u_status`) VALUES
(1, '', 'dharminlad1199@gmail.com', '9825289955', 'Pal', 'Surat', 'Gujarat', 1),
(2, 'Jemini', 'jemini1101@gmail.com', '7046708880', 'Adajan', 'Surat', 'Gujarat', 1),
(3, 'Priyank', '', '9427881450', 'Pal Gaam', 'Surat', 'Gujarat', 1),
(4, 'Vaishnavi Gandhi', '', '7043898488', 'vasai,manan mandir', 'Mumbai', 'Maharashtra', 1),
(5, 'Vaishnavi Gandhi', '', '7043898488', 'vasai,manan mandir', 'Mumbai', 'Maharashtra', 1),
(6, 'Vaishnavi Gandhi', '', '7043898488', 'vasai,manan mandir', 'Mumbai', 'Maharashtra', 1),
(7, 'DHARMIN', '', '9825289955', '123', 'Lucknow', 'Uttar Pradesh', 1),
(8, 'DHARMIN', '', '9825289955', 'ss', 'Kochi', 'Kerela', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resetpasswords`
--
ALTER TABLE `resetpasswords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_admin`
--
ALTER TABLE `tour_admin`
  ADD PRIMARY KEY (`t_a_id`);

--
-- Indexes for table `tour_feedback`
--
ALTER TABLE `tour_feedback`
  ADD PRIMARY KEY (`t_f_id`);

--
-- Indexes for table `t_book_person_detail`
--
ALTER TABLE `t_book_person_detail`
  ADD PRIMARY KEY (`t_b_p_d_id`),
  ADD KEY `t_p_b_id` (`t_p_b_id`);

--
-- Indexes for table `t_city`
--
ALTER TABLE `t_city`
  ADD PRIMARY KEY (`t_c_id`),
  ADD KEY `t_s_id` (`t_s_id`);

--
-- Indexes for table `t_hotel`
--
ALTER TABLE `t_hotel`
  ADD PRIMARY KEY (`t_h_id`),
  ADD KEY `t_o_id` (`t_o_id`);

--
-- Indexes for table `t_operator`
--
ALTER TABLE `t_operator`
  ADD PRIMARY KEY (`t_o_id`);

--
-- Indexes for table `t_package`
--
ALTER TABLE `t_package`
  ADD PRIMARY KEY (`t_pa_id`),
  ADD KEY `t_o_id` (`t_o_id`);

--
-- Indexes for table `t_place`
--
ALTER TABLE `t_place`
  ADD PRIMARY KEY (`t_p_id`);

--
-- Indexes for table `t_p_book`
--
ALTER TABLE `t_p_book`
  ADD PRIMARY KEY (`t_p_b_id`),
  ADD KEY `t_u_id` (`t_u_id`),
  ADD KEY `t_pa_id` (`t_pa_id`);

--
-- Indexes for table `t_p_hotel`
--
ALTER TABLE `t_p_hotel`
  ADD PRIMARY KEY (`t_p_h_id`),
  ADD KEY `t_pa_id` (`t_pa_id`),
  ADD KEY `t_h_id` (`t_h_id`);

--
-- Indexes for table `t_p_place`
--
ALTER TABLE `t_p_place`
  ADD PRIMARY KEY (`t_p_p_id`),
  ADD KEY `t_pa_id` (`t_pa_id`),
  ADD KEY `t_p_id` (`t_p_id`);

--
-- Indexes for table `t_state`
--
ALTER TABLE `t_state`
  ADD PRIMARY KEY (`t_s_id`);

--
-- Indexes for table `t_user_info`
--
ALTER TABLE `t_user_info`
  ADD PRIMARY KEY (`t_u_id`);

--
-- Indexes for table `t_user_info_delete`
--
ALTER TABLE `t_user_info_delete`
  ADD PRIMARY KEY (`d_u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `resetpasswords`
--
ALTER TABLE `resetpasswords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tour_admin`
--
ALTER TABLE `tour_admin`
  MODIFY `t_a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour_feedback`
--
ALTER TABLE `tour_feedback`
  MODIFY `t_f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_book_person_detail`
--
ALTER TABLE `t_book_person_detail`
  MODIFY `t_b_p_d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_city`
--
ALTER TABLE `t_city`
  MODIFY `t_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `t_hotel`
--
ALTER TABLE `t_hotel`
  MODIFY `t_h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_operator`
--
ALTER TABLE `t_operator`
  MODIFY `t_o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_package`
--
ALTER TABLE `t_package`
  MODIFY `t_pa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_place`
--
ALTER TABLE `t_place`
  MODIFY `t_p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `t_p_book`
--
ALTER TABLE `t_p_book`
  MODIFY `t_p_b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `t_p_hotel`
--
ALTER TABLE `t_p_hotel`
  MODIFY `t_p_h_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_p_place`
--
ALTER TABLE `t_p_place`
  MODIFY `t_p_p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_state`
--
ALTER TABLE `t_state`
  MODIFY `t_s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_user_info`
--
ALTER TABLE `t_user_info`
  MODIFY `t_u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `t_user_info_delete`
--
ALTER TABLE `t_user_info_delete`
  MODIFY `d_u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
