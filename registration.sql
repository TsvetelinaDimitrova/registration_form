-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 дек 2020 в 19:18
-- Версия на сървъра: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--
CREATE DATABASE IF NOT EXISTS `registration` DEFAULT CHARACTER SET utf8mb4;

USE `registration`;
-- --------------------------------------------------------

--
-- Структура на таблица `users`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `anrede` varchar(100) DEFAULT NULL,
  `titel` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `postcode` char(5) DEFAULT NULL,
  `city` varchar(168) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `anrede`, `titel`, `email`, `password`, `firstname`, `lastname`, `birthday`, `street`, `postcode`, `city`) VALUES
(1, 'lina', '', '', 'test@test.de', '79ed6fa21c4e02cc9990c78098cf592c', 'test', 'test', '0000-00-00', '', '', ''),
(2, 'goscho', '', '', 'test1@test.de', '16113eb532ec9f29389260932a2e640d', 'test1', 'test1', '0000-00-00', '', '', ''),
(3, 'toni', '', '', 'rtsrha@dsff.ds', '7ef1df417bae3d23e909015b0bb08008', 'test2', 'test2', '0000-00-00', '', '', 'Berlin'),
(4, 'bubu', '', 'chkl', 'brtg@de.de', '06055d7b6f41b5f4605d2896339512f6', 'test3', 'test3', '0000-00-00', '', '', ''),
(5, 'Marko', '', '', 'mark_sof@abv.bg', '57cf2245600530ab1dd359c5e717cca1', 'test4', 'Markov', '0000-00-00', '', '', 'Sofia'),
(6, 'Kar', 'Herr', '', 'klkl@kjk.de', '3eed5359be59ae56a23f6654b6634533', 'Kral', 'Karl', '0000-00-00', '', 'Dorfp', ''),
(7, 'Bam-bam', '', '', 'bam@bam.de', '04499f2f1cdc061222b38c10723fd792', 'Bam', 'Bam', '0000-00-00', '', '12526', ''),
(8, 'Olmo', 'Frau', '', 'olmo@test.com', '33f78dee19d8069a339403c24d7ed5c1', 'Olaf', 'Molaf', '1938-02-15', 'Kammila Str.2', '12526', ''),
(9, 'ENda', 'Frau', '', 'edna.mode@outlook.com', '888c6fc9652246c4b3ae2f0553455723', 'Edna', 'Mode', '0000-00-00', '', '', ''),
(10, 'Lina', '', '', 'ts.svetlozarova@gmail.com', '919b64c7ba0c836fbc754cde891bd213', 'Tsvetelina', 'Dimitrova', '0000-00-00', 'Glienickerstr. 519', '12526', 'Berlin'),
(11, 'DimDim', 'Herr', '', 'dim@varna.bg', '973771f5d8c757928cc497ffd92aaae8', 'Dimitar', 'Dimitrov', '0000-00-00', 'Katya Paskaleva 2', '9025', 'VARNA'),
(12, 'Lidi', 'Herr', '', 'ts.svetlozarova@avjfw.com', '79ed6fa21c4e02cc9990c78098cf592c', 'Lina', 'Dim', '0000-00-00', '', '', ''),
(13, 'sand', '', '', 'sand@jdhdh.com', '21a7bf60c9f3547a300efe3116b4f8a1', 'Sandi', 'dafa', '0000-00-00', '', '', ''),
(14, 'Sap', 'Frau', '', 'kam@jndj.bg', '2d49e26c406a251e9fed305feae50670', 'Sandi', 'Man', '0000-00-00', '', '', ''),
(15, 'Kumpum', 'Herr', '', 'dim1@varna.bg', '69c911b2c60630092b17803187ba873c', 'Pum', 'Kum', '0000-00-00', 'Katya Paskaleva 2', '9025', 'VARNA'),
(16, 'Kuku', 'Herr', '', 'dim2@varna.bg', '69c911b2c60630092b17803187ba873c', 'Pum', 'Kum', '0000-00-00', 'Katya Paskaleva 2', '9025', 'VARNA'),
(17, 'Banana', 'Frau', '', 'dim3@varna.bg', 'd02d7eac3daf18e3de612079d2ab5a7f', 'Pum', 'Kum', '0000-00-00', 'Katya Paskaleva 2', '9025', 'VARNA'),
(18, 'Kon', 'Herr', '', 'dim6@varna.bg', 'cd0bd031fc19b295b7d1cebce30ea1a9', 'Pum', 'Kum', '0000-00-00', 'Katya Paskaleva 2', '9025', 'VARNA'),
(19, 'lava', 'Frau', '', 'dim5@varna.bg', '0e4812054cec068439e5af96988c6320', 'Pum', 'Kum', '0000-00-00', 'Katya Paskaleva 2', '9025', 'VARNA'),
(20, 'marinov_bau', 'Herr', 'Dipl.-Ing.,Prof.,Dr.,', 'ts.svetlozarova4@gmail.com', '7f1d6a2ce9ea2d5554d03c965c3d2ade', 'Tsvetelina', 'Dimitrova', '0000-00-00', 'Glienickerstr. 519', '12526', 'Berlin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
