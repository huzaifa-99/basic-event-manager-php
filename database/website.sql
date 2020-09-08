-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 06:25 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Id` int(11) NOT NULL,
  `Gallery_Of` varchar(50) NOT NULL,
  `Image_Name` varchar(250) NOT NULL,
  `Status` int(10) NOT NULL,
  `Activation_Time` varchar(100) NOT NULL,
  `Uploader_Id` int(100) NOT NULL,
  `Uploader_Email` varchar(100) NOT NULL,
  `Uploader_Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Gallery_Of`, `Image_Name`, `Status`, `Activation_Time`, `Uploader_Id`, `Uploader_Email`, `Uploader_Status`) VALUES
(65, 'Opening Ceremony', '19276300811.jpg', 1, '2020-01-28 16:40:22', 2, 'testuser2@gmail.com', 0),
(66, 'Opening Ceremony', '7624800092.jpg', 1, '2020-01-28 16:40:27', 2, 'testuser2@gmail.com', 0),
(67, 'Opening Ceremony', '3513723443.jpg', 1, '2020-01-28 16:40:32', 2, 'testuser2@gmail.com', 0),
(68, 'Opening Ceremony', '17805229974.jpg', 1, '2020-01-28 16:40:40', 2, 'testuser2@gmail.com', 0),
(69, 'Opening Ceremony', '13726057575.jpg', 1, '2020-01-28 16:40:45', 2, 'testuser2@gmail.com', 0),
(70, 'Opening Ceremony', '14517912416.jpg', 1, '2020-01-28 16:40:49', 2, 'testuser2@gmail.com', 0),
(71, 'Opening Ceremony', '10198706837.jpg', 1, '2020-01-28 16:40:54', 2, 'testuser2@gmail.com', 0),
(72, 'Opening Ceremony', '14422313028.jpg', 1, '2020-01-28 16:40:59', 2, 'testuser2@gmail.com', 0),
(73, 'Opening Ceremony', '18214547199.jpg', 1, '2020-01-28 16:41:03', 2, 'testuser2@gmail.com', 0),
(74, 'Opening Ceremony', '20129427110.jpg', 1, '2020-01-28 16:41:08', 2, 'testuser2@gmail.com', 0),
(75, 'Opening Ceremony', '207530574511.jpg', 1, '2020-01-28 16:41:12', 2, 'testuser2@gmail.com', 0),
(76, 'Opening Ceremony', '128574959212.jpg', 1, '2020-01-28 16:41:17', 2, 'testuser2@gmail.com', 0),
(77, 'Opening Ceremony', '208544219413.jpg', 1, '2020-01-28 16:41:21', 2, 'testuser2@gmail.com', 0),
(78, 'Opening Ceremony', '196977273915.jpg', 1, '2020-01-28 16:41:27', 2, 'testuser2@gmail.com', 0),
(79, 'Opening Ceremony', '14981506index.jpg', 1, '2020-01-28 16:41:31', 2, 'testuser2@gmail.com', 0),
(80, 'Bussiness', '21020144121.jpg', 1, '2020-01-28 16:42:08', 2, 'testuser2@gmail.com', 0),
(81, 'Bussiness', '11990975562.jpg', 1, '2020-01-28 16:42:12', 2, 'testuser2@gmail.com', 0),
(82, 'Bussiness', '19030976133.jpg', 1, '2020-01-28 16:42:15', 2, 'testuser2@gmail.com', 0),
(83, 'Bussiness', '7602914444.jpg', 1, '2020-01-28 16:42:19', 2, 'testuser2@gmail.com', 0),
(84, 'Bussiness', '7401763705.jpg', 1, '2020-01-28 16:42:24', 2, 'testuser2@gmail.com', 0),
(85, 'Bussiness', '17402278726.jpg', 1, '2020-01-28 16:42:28', 2, 'testuser2@gmail.com', 0),
(86, 'Bussiness', '17085166597.jpg', 1, '2020-01-28 16:42:31', 2, 'testuser2@gmail.com', 0),
(87, 'Bussiness', '1052112858.jpg', 1, '2020-01-28 16:42:36', 2, 'testuser2@gmail.com', 0),
(88, 'Bussiness', '6975731289.jpg', 1, '2020-01-28 16:42:40', 2, 'testuser2@gmail.com', 0),
(89, 'Bussiness', '118009184510.jpg', 1, '2020-01-28 16:42:46', 2, 'testuser2@gmail.com', 0),
(90, 'Bussiness', '2114787311.jpg', 1, '2020-01-28 16:42:51', 2, 'testuser2@gmail.com', 0),
(91, 'Bussiness', '4331302312.jpg', 1, '2020-01-28 16:42:55', 2, 'testuser2@gmail.com', 0),
(92, 'Bussiness', '116380034813.jpg', 1, '2020-01-28 16:42:59', 2, 'testuser2@gmail.com', 0),
(93, 'Bussiness', '169615277514.jpg', 1, '2020-01-28 16:43:07', 2, 'testuser2@gmail.com', 0),
(94, 'Bussiness', '123295294315.jpg', 1, '2020-01-28 16:43:11', 2, 'testuser2@gmail.com', 0),
(95, 'Bussiness', '14897626016.jpg', 1, '2020-01-28 16:43:16', 2, 'testuser2@gmail.com', 0),
(96, 'Bussiness', '102742255217.jpg', 1, '2020-01-28 16:43:24', 2, 'testuser2@gmail.com', 0),
(97, 'Bussiness', '107544713218.jpg', 1, '2020-01-28 16:43:30', 2, 'testuser2@gmail.com', 0),
(98, 'Bussiness', '69569652519.jpg', 1, '2020-01-28 16:43:36', 2, 'testuser2@gmail.com', 0),
(99, 'Bussiness', '28426937020.jpg', 1, '2020-01-28 16:43:42', 2, 'testuser2@gmail.com', 0),
(100, 'Bussiness', '15482272621.jpg', 1, '2020-01-28 16:45:56', 2, 'testuser2@gmail.com', 0),
(101, 'Bussiness', '190856326922.jpg', 1, '2020-01-28 16:46:02', 2, 'testuser2@gmail.com', 0),
(102, 'Bussiness', '154104237523.jpg', 1, '2020-01-28 16:46:08', 2, 'testuser2@gmail.com', 0),
(103, 'Bussiness', '85668762724.jpg', 1, '2020-01-28 16:46:12', 2, 'testuser2@gmail.com', 0),
(104, 'Bussiness', '106635401725.jpg', 1, '2020-01-28 16:46:17', 2, 'testuser2@gmail.com', 0),
(105, 'Bussiness', '263281649index.jpg', 1, '2020-01-28 16:46:21', 2, 'testuser2@gmail.com', 0),
(106, 'Trips', '9511711371.jpg', 1, '2020-01-28 16:46:53', 2, 'testuser2@gmail.com', 0),
(107, 'Trips', '20455344272.jpg', 1, '2020-01-28 16:46:57', 2, 'testuser2@gmail.com', 0),
(108, 'Trips', '14816839513.jpg', 1, '2020-01-28 16:47:10', 2, 'testuser2@gmail.com', 0),
(109, 'Trips', '14292309854.jpg', 1, '2020-01-28 16:47:17', 2, 'testuser2@gmail.com', 0),
(110, 'Trips', '15104298635.jpg', 1, '2020-01-28 16:47:24', 2, 'testuser2@gmail.com', 0),
(111, 'Trips', '658140746.jpg', 1, '2020-01-28 16:47:30', 2, 'testuser2@gmail.com', 0),
(112, 'Trips', '6236997047.jpg', 1, '2020-01-28 16:47:34', 2, 'testuser2@gmail.com', 0),
(113, 'Trips', '9521119898.jpg', 1, '2020-01-28 16:47:39', 2, 'testuser2@gmail.com', 0),
(114, 'Trips', '19251510639.jpg', 1, '2020-01-28 16:47:43', 2, 'testuser2@gmail.com', 0),
(115, 'Trips', '24503858410.jpg', 1, '2020-01-28 16:47:47', 2, 'testuser2@gmail.com', 0),
(116, 'Trips', '154570617711.jpg', 1, '2020-01-28 16:47:51', 2, 'testuser2@gmail.com', 0),
(117, 'Trips', '22812811512.jpg', 1, '2020-01-28 16:47:54', 2, 'testuser2@gmail.com', 0),
(118, 'Trips', '124883634612.jpg', 1, '2020-01-28 16:48:04', 2, 'testuser2@gmail.com', 0),
(119, 'Trips', '55682885813.jpg', 1, '2020-01-28 16:48:08', 2, 'testuser2@gmail.com', 0),
(120, 'Trips', '158483477014.jpg', 1, '2020-01-28 16:48:12', 2, 'testuser2@gmail.com', 0),
(121, 'Trips', '43452668615.jpg', 1, '2020-01-28 16:48:15', 2, 'testuser2@gmail.com', 0),
(122, 'Trips', '26295367516.jpg', 1, '2020-01-28 16:48:19', 2, 'testuser2@gmail.com', 0),
(123, 'Trips', '135500677217.jpg', 1, '2020-01-28 16:48:23', 2, 'testuser2@gmail.com', 0),
(124, 'Trips', '18236300718.jpg', 1, '2020-01-28 16:48:26', 2, 'testuser2@gmail.com', 0),
(125, 'Weddings', '1863567411.jpg', 1, '2020-01-28 16:48:53', 2, 'testuser2@gmail.com', 0),
(126, 'Weddings', '5724705292.jpg', 1, '2020-01-28 16:48:56', 2, 'testuser2@gmail.com', 0),
(127, 'Weddings', '17620912063.jpg', 1, '2020-01-28 16:49:00', 2, 'testuser2@gmail.com', 0),
(128, 'Weddings', '3909049304.jpg', 1, '2020-01-28 16:49:03', 2, 'testuser2@gmail.com', 0),
(129, 'Weddings', '20445860325.jpg', 1, '2020-01-28 16:49:06', 2, 'testuser2@gmail.com', 0),
(130, 'Weddings', '11409980456.jpg', 1, '2020-01-28 16:49:09', 2, 'testuser2@gmail.com', 0),
(131, 'Weddings', '4218327117.jpg', 1, '2020-01-28 16:49:13', 2, 'testuser2@gmail.com', 0),
(132, 'Weddings', '4233073518.jpg', 1, '2020-01-28 16:49:16', 2, 'testuser2@gmail.com', 0),
(133, 'Weddings', '10330900509.jpg', 1, '2020-01-28 16:49:20', 2, 'testuser2@gmail.com', 0),
(134, 'Weddings', '188665608210.jpg', 1, '2020-01-28 16:49:24', 2, 'testuser2@gmail.com', 0),
(135, 'Weddings', '161423783711.jpg', 1, '2020-01-28 16:49:28', 2, 'testuser2@gmail.com', 0),
(136, 'Weddings', '58845984012.jpg', 1, '2020-01-28 16:49:32', 2, 'testuser2@gmail.com', 0),
(137, 'Weddings', '118206857013.jpg', 1, '2020-01-28 16:49:35', 2, 'testuser2@gmail.com', 0),
(138, 'Weddings', '191063413914.jpg', 1, '2020-01-28 16:49:38', 2, 'testuser2@gmail.com', 0),
(139, 'Weddings', '87422738315.jpg', 1, '2020-01-28 16:49:41', 2, 'testuser2@gmail.com', 0),
(140, 'Weddings', '23468266916.jpg', 1, '2020-01-28 16:49:46', 2, 'testuser2@gmail.com', 0),
(141, 'Weddings', '68201336017.jpg', 1, '2020-01-28 16:49:50', 2, 'testuser2@gmail.com', 0),
(142, 'Weddings', '61713636519.jpg', 1, '2020-01-28 16:49:54', 2, 'testuser2@gmail.com', 0),
(143, 'Weddings', '175817662920.jpg', 1, '2020-01-28 16:49:58', 2, 'testuser2@gmail.com', 0),
(144, 'Weddings', '81474624321.jpg', 1, '2020-01-28 16:50:01', 2, 'testuser2@gmail.com', 0),
(145, 'Weddings', '9525396322.jpg', 1, '2020-01-28 16:50:05', 2, 'testuser2@gmail.com', 0),
(146, 'Weddings', '211802977723.jpg', 1, '2020-01-28 16:50:08', 2, 'testuser2@gmail.com', 0),
(147, 'Weddings', '35441652024.jpg', 1, '2020-01-28 16:50:13', 2, 'testuser2@gmail.com', 0),
(148, 'Weddings', '104168929825.jpg', 1, '2020-01-28 16:50:17', 2, 'testuser2@gmail.com', 0),
(149, 'Weddings', '180559360426.jpg', 1, '2020-01-28 16:50:20', 2, 'testuser2@gmail.com', 0),
(150, 'Weddings', '211987455627.jpg', 1, '2020-01-28 16:50:23', 2, 'testuser2@gmail.com', 0),
(151, 'Weddings', '22844001728.jpg', 1, '2020-01-28 16:50:27', 2, 'testuser2@gmail.com', 0),
(152, 'Weddings', '206005455629.jpg', 1, '2020-01-28 16:50:30', 2, 'testuser2@gmail.com', 0),
(153, 'Weddings', '1395213524index18.jpg', 1, '2020-01-28 16:50:35', 2, 'testuser2@gmail.com', 0),
(154, 'Birthdays', '2465005911.jpg', 1, '2020-01-28 16:51:21', 2, 'testuser2@gmail.com', 0),
(155, 'Birthdays', '4363400952.jpg', 1, '2020-01-28 16:51:27', 2, 'testuser2@gmail.com', 0),
(156, 'Birthdays', '13300829913.jpg', 1, '2020-01-28 16:51:31', 2, 'testuser2@gmail.com', 0),
(157, 'Birthdays', '17898794004.jpg', 1, '2020-01-28 16:51:36', 2, 'testuser2@gmail.com', 0),
(158, 'Birthdays', '8048835125.jpg', 1, '2020-01-28 16:51:41', 2, 'testuser2@gmail.com', 0),
(159, 'Birthdays', '15439159286.jpg', 1, '2020-01-28 16:51:45', 2, 'testuser2@gmail.com', 0),
(160, 'Birthdays', '17509936967.jpg', 1, '2020-01-28 16:51:49', 2, 'testuser2@gmail.com', 0),
(161, 'Birthdays', '9207734318.jpg', 1, '2020-01-28 16:51:54', 2, 'testuser2@gmail.com', 0),
(162, 'Birthdays', '19341851329.jpg', 1, '2020-01-28 16:51:58', 2, 'testuser2@gmail.com', 0),
(163, 'Birthdays', '130875553110.jpg', 1, '2020-01-28 16:52:00', 2, 'testuser2@gmail.com', 0),
(164, 'Birthdays', '110345989911.jpg', 1, '2020-01-28 16:52:03', 2, 'testuser2@gmail.com', 0),
(165, 'Birthdays', '134001795812.jpg', 1, '2020-01-28 16:52:06', 2, 'testuser2@gmail.com', 0),
(166, 'Birthdays', '52121498913.jpg', 1, '2020-01-28 16:52:10', 2, 'testuser2@gmail.com', 0),
(167, 'Birthdays', '213765813714.jpg', 1, '2020-01-28 16:52:13', 2, 'testuser2@gmail.com', 0),
(168, 'Birthdays', '14301725315.jpg', 1, '2020-01-28 16:52:17', 2, 'testuser2@gmail.com', 0),
(169, 'Birthdays', '30305684216.jpg', 1, '2020-01-28 16:52:21', 2, 'testuser2@gmail.com', 0),
(170, 'Birthdays', '161526410617.jpg', 1, '2020-01-28 16:52:25', 2, 'testuser2@gmail.com', 0),
(171, 'Birthdays', '202836519918.jpg', 1, '2020-01-28 16:52:28', 2, 'testuser2@gmail.com', 0),
(172, 'Birthdays', '96911667520.jpg', 1, '2020-01-28 16:52:31', 2, 'testuser2@gmail.com', 0),
(173, 'Birthdays', '3923012022.jpg', 1, '2020-01-28 16:52:38', 2, 'testuser2@gmail.com', 0),
(174, 'Birthdays', '132651882index.jpg', 1, '2020-01-28 16:52:41', 2, 'testuser2@gmail.com', 0),
(175, 'Opening Ceremony', '846156898IMG_20180614_000048_607.jpg', 1, '2020-01-28 19:37:55', 2, 'testuser2@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mailing_done`
--

CREATE TABLE `mailing_done` (
  `Id` int(11) NOT NULL,
  `Letter_Id` int(11) NOT NULL,
  `Recipent_Id` int(11) NOT NULL,
  `Recipent_Email` varchar(100) NOT NULL,
  `Sent_Bool` int(11) NOT NULL,
  `Sent_Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mailing_letter`
--

CREATE TABLE `mailing_letter` (
  `Id` int(11) NOT NULL,
  `Letter_Body` text NOT NULL,
  `Upload_Time` varchar(100) NOT NULL,
  `Publish_Time` varchar(100) NOT NULL,
  `Author_Email` varchar(50) NOT NULL,
  `Status` int(10) NOT NULL,
  `is_sent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mailing_letter`
--

INSERT INTO `mailing_letter` (`Id`, `Letter_Body`, `Upload_Time`, `Publish_Time`, `Author_Email`, `Status`, `is_sent`) VALUES
(64, '<p>csjkbcdbcdkcb</p>\r\n', '2020-02-07 17:06:24', '2020-02-07 17:06:24', 'testuser2@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mailing_list`
--

CREATE TABLE `mailing_list` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Signup_Time` varchar(100) NOT NULL,
  `Status` int(10) NOT NULL,
  `Is_User` int(10) NOT NULL,
  `mail_bool` int(11) NOT NULL,
  `mail_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Id` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Reserver_Name` varchar(100) NOT NULL,
  `Reserver_Email` varchar(200) NOT NULL,
  `Reserver_Phone` varchar(20) NOT NULL,
  `Reservation_Status` int(10) NOT NULL,
  `Time_Posted` varchar(50) NOT NULL,
  `Time_Accepted` varchar(50) NOT NULL,
  `Time_Completed` varchar(50) NOT NULL,
  `mail_bool` int(11) NOT NULL,
  `mail_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Id`, `Subject`, `Message`, `Reserver_Name`, `Reserver_Email`, `Reserver_Phone`, `Reservation_Status`, `Time_Posted`, `Time_Accepted`, `Time_Completed`, `mail_bool`, `mail_time`) VALUES
(28, 'm,ax x, ', 'sjkosclnkcsj', 'klaxlnkb', '1@gmail.com', 'klanxklsnxl', 1, '2020-01-28 18:37:38', '2020-01-28 18:39:54', '', 1, '2020-01-28 19:16:47'),
(29, 'Trip', 'a message', 'user', 'bilalgtx750@gmail.com', '03155334531', 1, '2020-01-28 19:42:43', '2020-01-29 15:46:01', '', 1, '2020-01-28 19:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Profile_Image` varchar(250) NOT NULL,
  `User_Type` int(10) NOT NULL,
  `Signup_Time` varchar(100) NOT NULL,
  `Status` int(10) NOT NULL,
  `mail_bool` int(11) NOT NULL,
  `mail_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`, `Profile_Image`, `User_Type`, `Signup_Time`, `Status`, `mail_bool`, `mail_time`) VALUES
(1, 'TestUser1', 'testuser1@gmail.com', 'testuser1', '119643136person_1.jpg', 0, '2020-01-18 21:31:09', 0, 1, '2020-01-25 14:21:20'),
(2, 'TestUser2', 'testuser2@gmail.com', 'testuser2', '991169628person_2.jpg', 1, '2020-01-18 21:31:09', 0, 1, '2020-01-25 14:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `User_Email` varchar(150) NOT NULL,
  `Login_Time` varchar(50) NOT NULL,
  `Status` int(10) NOT NULL,
  `Logout_Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`Id`, `Username`, `User_Email`, `Login_Time`, `Status`, `Logout_Time`) VALUES
(1, 'TestUser2', 'testuser2@gmail.com', '2020-02-11 00:35:50', 1, ''),
(2, 'TestUser1', 'testuser1@gmail.com', '2020-03-02 10:48:28', 0, '2020-03-02 10:48:32'),
(3, 'TestUser2', 'testuser2@gmail.com', '2020-03-02 10:48:52', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mailing_done`
--
ALTER TABLE `mailing_done`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mailing_letter`
--
ALTER TABLE `mailing_letter`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mailing_list`
--
ALTER TABLE `mailing_list`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `mailing_done`
--
ALTER TABLE `mailing_done`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mailing_letter`
--
ALTER TABLE `mailing_letter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `mailing_list`
--
ALTER TABLE `mailing_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
