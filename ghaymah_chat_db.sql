-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2022 at 02:51 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghaymah_chat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `read_sms` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `read_sms`) VALUES
(93, 1407379879, 1429310234, 'اهلا ', 1),
(94, 1407379879, 1429310234, 'هل فى اشعار عندك ؟', 1),
(95, 1429310234, 1407379879, 'لا بيظهرلى علامة سؤال بس ع الشات ', 0),
(96, 1407379879, 1429310234, 'تمام حلو بردو شغال ', 1),
(97, 1407379879, 1348630001, 'مرحباً', 1),
(98, 1407379879, 1348630001, 'How are You?', 1),
(99, 1348630001, 1407379879, 'fine & U ?', 0),
(100, 1407379879, 1348630001, 'all good', 1),
(101, 1348630001, 1407379879, 'wish all the best ', 0),
(102, 1407379879, 1348630001, 'Thanks', 1),
(103, 1348630001, 1407379879, 'ok', 0),
(104, 1407379879, 1348630001, 'Hi', 1),
(105, 1407379879, 1348630001, 'aa', 1),
(106, 1407379879, 1348630001, 'asa', 1),
(107, 1348630001, 1407379879, 'أهلين بك اخي', 0),
(108, 1407379879, 1348630001, 'كيف حالك', 1),
(109, 512245502, 1407379879, 'اهلا ريم ', 0),
(110, 512245502, 1407379879, 'كيف حالك ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'user.png',
  `status` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `email`, `password`, `img`, `status`, `role`) VALUES
(1, 1407379879, 'Ghema', 'admin@ghema.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.png', 'Active now', 1),
(11, 512245502, 'reem', 'reemalharbi167@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'user.png', 'Active now', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
