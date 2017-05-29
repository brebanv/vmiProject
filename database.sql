-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mai 2017 la 19:34
-- Versiune server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logintest`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `answers`
--

CREATE TABLE `answers` (
  `answerId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `currDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `answers`
--

INSERT INTO `answers` (`answerId`, `questionId`, `answer`, `currDate`) VALUES
(1, 37, 'dsad', '2017-05-27 17:16:25'),
(2, 37, 'dsad', '2017-05-27 17:16:43'),
(3, 37, 'Nimic', '2017-05-27 17:39:38'),
(4, 37, 'ce?', '2017-05-27 17:40:50'),
(5, 37, 'dsad', '2017-05-27 17:41:15'),
(6, 37, 'Bine, tu?', '2017-05-27 17:41:38'),
(7, 38, 'Bine', '2017-05-27 17:42:53'),
(8, 43, 'Daaaa', '2017-05-28 11:28:04'),
(9, 42, 'Da', '2017-05-28 11:28:26'),
(10, 43, 'Nimic', '2017-05-28 11:29:17');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `currDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `questions`
--

INSERT INTO `questions` (`id`, `question`, `category`, `currDate`) VALUES
(38, 'Ce faci?', 'Religie', '2017-05-27 14:59:26'),
(43, 'da?', 'Diverse', '2017-05-27 18:48:02'),
(46, 'dsad', '0', '2017-05-28 11:58:37');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pwd` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `pwd`) VALUES
(8, 'Maxim', 'Ionut', 'mi@g.com', '$2y$10$oyfxBN64QBrfPFJoYl2IQOCf44kB6YwYtdlA7PLSyFScMrDnAC5H6'),
(9, 'abc', 'def', 'a@b.c', '$2y$10$fwxRaXaSZ6h4dbQNsvdE8.pTdtWuQP/LSgDA.94t64pY2sjoSc8uO'),
(10, 'Breban', 'Vlad', 'bv@g.com', '$2y$10$4OjLIKVMe030zIbqV12BzuRj1VvjjFMOfv8b15yyTDQO2h.qE94BK'),
(11, 'Vlad', 'Breban', 'v@m.i', '$2y$10$q.GgWaIf676xLaH/od2BaeGTmR91AI43UXhccJ/VZLBbyfA847ii2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answerId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
