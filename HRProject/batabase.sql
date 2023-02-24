-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 05:41 AM
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
-- Database: `batabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `degree` varchar(200) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `upload_resume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `degree`, `profile`, `phone_no`, `email`, `upload_resume`) VALUES
(2, 'abhishek kumar chaubey', 'b.tech', 'developer', '9457764803', 'abhishek.chaubey@nimittech.com', 'Naukri_Abhishek 2023.pdf'),
(3, 'abhishek kumar chaubey', 'b.tch', 'developer', '5465767656', 'divya.singh@nimittech.com', 'Naukri_Abhishek 2023.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date`) VALUES
(1, 'admin', 'admin', '2023-02-22 07:11:44'),
(2, 'admin', 'aa', '0000-00-00 00:00:00'),
(3, '', 'aa', '0000-00-00 00:00:00'),
(4, 'admin', 'aa', '0000-00-00 00:00:00'),
(5, 'admin', 'aa', '0000-00-00 00:00:00'),
(6, '', 'aa', '0000-00-00 00:00:00'),
(7, '', 'aa', '0000-00-00 00:00:00'),
(8, ' admin', 'aa', '0000-00-00 00:00:00'),
(9, ' admin', 'aa', '2023-02-22 12:35:32'),
(10, 'abhikuchaubey@gmail.com', 'qqqqqqq', '2023-02-22 12:35:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
