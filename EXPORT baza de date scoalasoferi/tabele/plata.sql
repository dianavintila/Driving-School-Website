-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 09:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scoalasoferi`
--

-- --------------------------------------------------------

--
-- Table structure for table `plata`
--

CREATE TABLE `plata` (
  `Plata_ID` int(11) NOT NULL,
  `Total` float NOT NULL,
  `Cod_Fiscal` varchar(16) NOT NULL,
  `Tip_Plata` varchar(200) DEFAULT NULL,
  `Data_Plata` date DEFAULT NULL,
  `Durata` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plata`
--

INSERT INTO `plata` (`Plata_ID`, `Total`, `Cod_Fiscal`, `Tip_Plata`, `Data_Plata`, `Durata`) VALUES
(1, 150, '43784378', 'cash', '2020-03-01', 1.5),
(2, 300, '12567893', 'card', '2020-03-08', 3),
(3, 300, '12563893', 'card', '2020-03-15', 3),
(4, 300, '67463893', 'card', '2020-03-22', 1.5),
(5, 300, '128994478', 'cash', '2020-04-08', 3),
(6, 300, '21055289', 'cash', '2020-04-09', 3),
(7, 150, '71091512', 'card', '2020-04-12', 1.5),
(8, 300, '58819871', 'cash', '2020-04-18', 3),
(9, 300, '40235301', 'card', '2020-04-20', 3),
(10, 150, '47984378', 'cash', '2020-04-22', 1.5),
(11, 300, '47904478', 'card', '2020-04-25', 3),
(12, 300, '26894329', 'cash', '2020-04-29', 3),
(13, 150, '58259444', 'card', '2019-01-04', 1.5),
(14, 300, '32567893', 'card', '2019-01-11', 3),
(15, 300, '42563893', 'card', '2019-01-18', 3),
(16, 300, '68463893', 'card', '2019-01-25', 3),
(17, 300, '138994478', 'cash', '2019-02-08', 3),
(18, 300, '21355289', 'cash', '2019-02-09', 3),
(19, 150, '71691512', 'card', '2019-02-12', 1.5),
(20, 300, '58839871', 'cash', '2019-02-28', 3),
(21, 300, '40265301', 'card', '2019-03-20', 3),
(22, 150, '47974378', 'cash', '2019-03-22', 1.5),
(23, 300, '47904578', 'card', '2019-04-05', 3),
(24, 300, '26894326', 'cash', '2019-04-19', 3),
(25, 150, '73784378', 'cash', '2018-12-01', 1.5),
(26, 100, '10184378', 'cash', '2014-06-21', 1),
(27, 150, '53584378', 'cash', '2021-01-10', 1.5),
(28, 300, '53584678', 'card', '2021-01-11', 3),
(29, 300, '42563393', 'cash', '2021-01-12', 3),
(30, 300, '87463893', 'card', '2021-01-25', 1.5),
(31, 300, '90783567', 'cash', '2020-01-05', 3),
(32, 200, '63784378', 'cash', '2014-03-05', 2),
(33, 200, '62564893', 'card', '2014-03-09', 2),
(34, 200, '62563893', 'card', '2014-03-16', 2),
(35, 200, '66463893', 'card', '2014-03-23', 2),
(36, 200, '628994478', 'cash', '2014-04-05', 2),
(37, 200, '61055289', 'cash', '2014-04-07', 2),
(38, 200, '61091512', 'card', '2014-04-17', 2),
(39, 200, '68819871', 'cash', '2014-04-19', 2),
(40, 200, '60235301', 'card', '2014-04-20', 2),
(41, 200, '67984378', 'cash', '2014-04-22', 2),
(42, 200, '67904478', 'card', '2014-05-15', 2),
(43, 200, '66894326', 'cash', '2014-05-29', 2),
(44, 200, '68259444', 'card', '2014-06-14', 2),
(45, 200, '62567893', 'card', '2014-06-17', 2),
(46, 200, '62563842', 'card', '2014-06-18', 2),
(47, 150, '8784378', 'cash', '2017-01-05', 1.5),
(48, 150, '82567893', 'card', '2017-01-09', 1.5),
(49, 150, '82583893', 'card', '2017-02-16', 1.5),
(50, 150, '86463893', 'card', '2017-03-23', 1.5),
(51, 150, '878994478', 'cash', '2017-04-05', 1.5),
(52, 150, '87955289', 'cash', '2017-04-27', 1.5),
(53, 150, '88091512', 'card', '2017-06-17', 1.5),
(54, 150, '88819871', 'cash', '2017-06-19', 1.5),
(55, 200, '97843789', 'cash', '2020-04-23', 2),
(56, 300, '11783378', 'cash', '2021-01-07', 3),
(57, 200, '12567493', 'card', '2014-01-17', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plata`
--
ALTER TABLE `plata`
  ADD PRIMARY KEY (`Plata_ID`),
  ADD UNIQUE KEY `Cod_Fiscal` (`Cod_Fiscal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plata`
--
ALTER TABLE `plata`
  MODIFY `Plata_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
