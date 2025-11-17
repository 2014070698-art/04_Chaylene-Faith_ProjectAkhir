-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 02:15 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `artist` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `genre` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `song` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `album` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `why` text COLLATE utf8mb4_general_ci,
  `many` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`artist`, `genre`, `song`, `album`, `why`, `many`) VALUES
('Bruno Mars', 'Soul', 'Rewrite The Stars', 'Talking to The Moon', 'relaxing', 787097),
('soobin', 'kpop', 'terserah', 'trsrh', 'menarik', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `waktu_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama_lengkap`, `waktu_login`) VALUES
(5, 'boby', NULL, 'bob', '2025-11-13 11:05:01'),
(6, 'boby', NULL, 'bob', '2025-11-13 11:29:15'),
(7, 'spa', NULL, 'paps', '2025-11-13 11:50:18'),
(8, 'boby', NULL, 'bob', '2025-11-13 14:13:42'),
(9, 'css', NULL, 'html', '2025-11-14 14:47:26'),
(10, 'css', NULL, 'html', '2025-11-14 15:17:16'),
(11, 'boby', NULL, 'bob', '2025-11-14 15:20:04'),
(12, 'boby', NULL, 'bob', '2025-11-14 15:22:15'),
(13, 'boby', NULL, 'bob', '2025-11-16 03:56:50'),
(14, 'boby', NULL, 'bob', '2025-11-16 04:14:55'),
(15, 'sad', NULL, 'slay', '2025-11-16 04:25:35'),
(16, 'sad', NULL, 'slay', '2025-11-16 05:07:28'),
(17, 'boby', NULL, 'bob', '2025-11-16 05:23:26'),
(18, 'cegil', NULL, 'gisella maqdeline', '2025-11-16 11:39:19'),
(19, 'boby', NULL, 'bob', '2025-11-16 11:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `no` int NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(80) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`no`, `nama_lengkap`, `username`, `tanggal_lahir`, `email`, `password`) VALUES
(14, 'chay', 'lolii', '2025-12-02', 'ppp@gmail.com', '$2y$10$2RevHtVle52asTke0.0DFefn4teJg.xU7u9qA53xIF.p5rKvAEP36'),
(15, 'bob', 'boby', '2025-10-26', 'boby@gmail.com', '$2y$10$urYamth9/5XiTm755jLreu3jNxF7JIJSyWmLg2SpM8zJIe7rM8/kG'),
(16, 'paps', 'spa', '2025-11-06', 'ps@gmail.com', '$2y$10$ezpTW6ZBYODYPAoG.Wshj.SWKetdVlkTVgItUrIENVJw.E/fmq0Ja'),
(17, 'html', 'css', '2025-10-29', 'php@gmail.com', '$2y$10$f88GTQtotaFslJ0djkt1COO3KY5EHJPf4PtIrhyDg99BKcWevzQxO'),
(18, 'slay', 'sad', '2025-11-15', 'slayin@gmail.com', '$2y$10$Z7FFx2iBeSqJ3MJLSVQXouJ19Jz4vUryG.aH6ietjkJ.9CWnz8bvC'),
(19, 'gisella maqdeline', 'cegil', '2007-09-17', 'gis@gmail.com', '$2y$10$TNpr3/eaZaO/Z9bw8amSsOxTXnxglrF9/ASb0OBv4Tl0Srcd3h7dS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
