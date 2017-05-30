-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mai 2017 la 21:43
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
  `currDate` datetime DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `answers`
--

INSERT INTO `answers` (`answerId`, `questionId`, `answer`, `currDate`, `userID`) VALUES
(14, 69, 'religie?', '2017-05-30 22:07:44', 9),
(15, 69, 'religie?', '2017-05-30 22:08:20', 9),
(16, 70, 'ggg', '2017-05-30 22:15:55', 9),
(17, 70, 'gggdddd', '2017-05-30 22:16:13', 9),
(18, 78, 'fff', '2017-05-30 22:24:50', 9),
(19, 79, 'ddd', '2017-05-30 22:26:44', 10);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `currDate` datetime DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `questions`
--

INSERT INTO `questions` (`id`, `question`, `category`, `currDate`, `userID`) VALUES
(69, 'Religie', 'Religie', '2017-05-30 21:27:29', 10),
(70, 'a', 'Sport', '2017-05-30 21:30:40', 10),
(71, 'aaa', 'Scoala', '2017-05-30 21:31:16', 10),
(72, 'dasdad', 'Religie', '2017-05-30 21:31:44', 10),
(73, 'aaa', 'Tehnologie', '2017-05-30 21:32:35', 9),
(74, 'aaaff', 'Tehnologie', '2017-05-30 21:40:42', 9),
(75, 'aaaaa', 'Religie', '2017-05-30 21:46:30', 9),
(76, 'aaaaaa', 'Religie', '2017-05-30 21:49:44', 9),
(77, 'Tttttt', 'Scoala', '2017-05-30 21:53:52', 9),
(78, 'hhhhh', 'Sport', '2017-05-30 22:06:08', 9),
(79, 'Intrebare', 'Sport', '2017-05-30 22:26:36', 10),
(80, 'Intrebare', 'Diverse', '2017-05-30 22:34:52', 10);

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
  MODIFY `answerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
