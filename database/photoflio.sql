-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 09:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photoflio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `website` varchar(300) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(300) NOT NULL,
  `phone` int(11) NOT NULL,
  `freelance` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `birthday`, `website`, `age`, `city`, `phone`, `freelance`) VALUES
(2, '2003-10-03', 'admin.photoflio.im', 21, 'tartous', 999, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'Admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'yt@dg.fded', 'yuyefwwdaS', 'etewrgtrwfefreefeeaddsx', 'iuguigukgig'),
(2, 'yt@dg.fded', 'yuyefwwdaS', 'etewrgtrwfefreefeeaddsx', 'iuguigukgig'),
(3, 'yt@dg.fded', 'yuyefwwdaS', 'etewrgtrwfefreefeeaddsx', 'iuguigukgig'),
(4, 'dsf@ff.f', 'dewded', 'edeqwddedw', 'dsdsds');

-- --------------------------------------------------------

--
-- Table structure for table `contpages`
--

CREATE TABLE `contpages` (
  `id` int(9) NOT NULL,
  `loction` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contpages`
--

INSERT INTO `contpages` (`id`, `loction`, `email`, `phone`, `date_added`, `date_update`) VALUES
(1, 'tartous/syria', 'admin@gmail.com', 999, '2024-10-21 17:50:49', '2024-10-21 18:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(9) NOT NULL,
  `images` varchar(900) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `images`, `date_added`) VALUES
(1, 'images//gallery-1.jpg', '2024-10-21 17:21:09'),
(2, 'images//gallery-2.jpg', '2024-10-21 17:21:15'),
(3, 'images//gallery-3.jpg', '2024-10-21 17:21:21'),
(4, 'images//gallery-5.jpg', '2024-10-21 17:21:26'),
(5, 'images//gallery-11.jpg', '2024-10-21 17:21:37'),
(6, 'images//gallery-15.jpg', '2024-10-21 17:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `homeimage`
--

CREATE TABLE `homeimage` (
  `id` int(9) NOT NULL,
  `image` varchar(900) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homeimage`
--

INSERT INTO `homeimage` (`id`, `image`, `date_added`) VALUES
(2, 'images//gallery-9.jpg', '2024-10-21 17:16:58'),
(3, 'images//gallery-10.jpg', '2024-10-21 17:17:03'),
(4, 'images//gallery-6.jpg', '2024-10-21 17:17:13'),
(5, 'images//gallery-16.jpg', '2024-10-21 17:22:31'),
(6, 'images//gallery-7.jpg', '2024-10-21 17:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `date_added`) VALUES
(1, 'user1@gmail.com', 'user1', '81dc9bdb52d04dc20036dbd8313ed055', '2024-10-21 18:16:04'),
(2, 'user2@gmail.com', 'user2', '81dc9bdb52d04dc20036dbd8313ed055', '2024-10-21 18:16:28'),
(3, 'user3@gmail.com', 'user3', '827ccb0eea8a706c4c34a16891f84e7b', '2024-10-21 18:16:47'),
(4, 'user4@gmail.com', 'user4', '827ccb0eea8a706c4c34a16891f84e7b', '2024-10-21 18:18:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contpages`
--
ALTER TABLE `contpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeimage`
--
ALTER TABLE `homeimage`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contpages`
--
ALTER TABLE `contpages`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `homeimage`
--
ALTER TABLE `homeimage`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
