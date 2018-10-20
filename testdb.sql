-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 06:52 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(9, 'Aca', 'Lukas', 'alukas@gmail.com', '$2y$10$QbxvPhrvC2jRsH38WxuCTObSOhSltpYTHWzARfJDe7LgX7LTXG.Iq'),
(10, 'Sinan', 'Sakic', 'ssakic@gmail.com', '$2y$10$QbxvPhrvC2jRsH38WxuCTObSOhSltpYTHWzARfJDe7LgX7LTXG.Iq'),
(11, 'Ljuba', 'Alicic', 'ljalicic@yahoo.com', '$2y$10$QbxvPhrvC2jRsH38WxuCTObSOhSltpYTHWzARfJDe7LgX7LTXG.Iq'),
(12, 'Ipce', 'Ahmedovski', 'iahmedovski@gmail.com', '$2y$10$QbxvPhrvC2jRsH38WxuCTObSOhSltpYTHWzARfJDe7LgX7LTXG.Iq'),
(13, 'Indira', 'Radic', 'iradic@gmail.com', '$2y$10$QbxvPhrvC2jRsH38WxuCTObSOhSltpYTHWzARfJDe7LgX7LTXG.Iq'),
(14, 'Saban', 'Saulic', 'ssaulic@gmail.com', '$2y$10$QbxvPhrvC2jRsH38WxuCTObSOhSltpYTHWzARfJDe7LgX7LTXG.Iq'),
(15, 'Pedja', 'Medenica', 'pmedenica@yahoo.com', '$2y$10$QbxvPhrvC2jRsH38WxuCTObSOhSltpYTHWzARfJDe7LgX7LTXG.Iq'),
(16, 'Semsa', 'Suljakovic', 'ssuljakovic@gmail.com', '$2y$10$QbxvPhrvC2jRsH38WxuCTObSOhSltpYTHWzARfJDe7LgX7LTXG.Iq'),
(17, 'Jelena', 'Karleusa', 'jkarleusa@gmail.com', '$2y$10$5zQT0ikRJZFk32i/4tqrbOClB7cY5EQIUe/LzMMzm3C5W7d19POB2');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `userid` int(12) DEFAULT NULL,
  `adminid` int(12) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `number` varchar(15) DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `userid`, `adminid`, `fname`, `title`, `location`, `number`, `text`, `date`) VALUES
(15, NULL, 6, 'Milos', 'jabuka', 'beograd', '12365489', 'dsds', '2016-11-20'),
(16, 6, NULL, 'Baba', 'Sljive', 'Smederevo', '12365489', 'dadada', '2016-11-20'),
(17, 8, NULL, 'Pera', 'Prodajem jabuke', 'Valjevo', '060123456', 'Prodajem 10 tona jabuka 1 klase', '2016-01-01'),
(18, 8, NULL, 'Pera', 'Prodajem jabuke', 'Valjevo', '060123456', 'Prodajem 20 tona jabuka 2 klase', '2016-01-02'),
(19, 8, NULL, 'Pera', 'Prodajem jabuke', 'Valjevo', '060123456', 'Prodajem 30 tona jabuka 3 klase', '2016-01-03'),
(20, 8, NULL, 'Pera', 'Prodajem kruske', 'Valjevo', '060123456', 'Prodajem 10 tona sljive 1 klase', '2016-02-01'),
(21, 8, NULL, 'Pera', 'Prodajem kruske', 'Valjevo', '060123456', 'Prodajem 10 tona sljive 2 klase', '2016-02-02'),
(22, 8, NULL, 'Pera', 'Prodajem kruske', 'Valjevo', '060123456', 'Prodajem 10 tona sljive 3 klase', '2016-02-02'),
(23, 8, NULL, 'Pera', 'Prodajem sljive', 'Valjevo', '060123456', 'Prodajem 10 tona sljive 1 klase', '2016-03-01'),
(24, 8, NULL, 'Pera', 'Prodajem sljive', 'Valjevo', '060123456', 'Prodajem 10 tona sljive 2 klase', '2016-03-02'),
(25, 8, NULL, 'Pera', 'Prodajem sljive', 'Valjevo', '060123456', 'Prodajem 10 tona sljive 3 klase', '2016-03-03'),
(26, 8, NULL, 'Pera', 'Prodajem breskve', 'Valjevo', '060123456', 'Prodajem 10 tona breskve 1 klase', '2016-04-01'),
(27, 8, NULL, 'Pera', 'Prodajem breskve', 'Valjevo', '060123456', 'Prodajem 10 tona breskve 2 klase', '2016-04-02'),
(28, 8, NULL, 'Pera', 'Prodajem breskve', 'Valjevo', '060123456', 'Prodajem 10 tona breskve 3 klase', '2016-04-03'),
(29, 8, NULL, 'Pera', 'Prodajem kajsije', 'Valjevo', '060123456', 'Prodajem 10 tona kajsije 1 klase', '2016-05-01'),
(30, 8, NULL, 'Pera', 'Prodajem kajsije', 'Valjevo', '060123456', 'Prodajem 10 tona kajsije 2 klase', '2016-05-02'),
(31, 8, NULL, 'Pera', 'Prodajem kajsije', 'Valjevo', '060123456', 'Prodajem 10 tona kajsije 3 klase', '2016-05-03'),
(32, NULL, 6, 'Milos', 'Prodajem jabuke', 'Beograd', '12365489', 'Prodajem 10 tona jabuka 1 klase', '2016-01-01'),
(33, NULL, 6, 'Milos', 'Prodajem jabuke', 'Beograd', '12365489', 'Prodajem 20 tona jabuka 2 klase', '2016-01-02'),
(34, NULL, 6, 'Milos', 'Prodajem jabuke', 'Beograd', '12365489', 'Prodajem 30 tona jabuka 3 klase', '2016-01-03'),
(35, NULL, 6, 'Milos', 'Prodajem kruske', 'Beograd', '12365489', 'Prodajem 10 tona sljive 1 klase', '2016-02-01'),
(36, NULL, 6, 'Milos', 'Prodajem kruske', 'Beograd', '12365489', 'Prodajem 10 tona sljive 2 klase', '2016-02-02'),
(37, NULL, 6, 'Milos', 'Prodajem kruske', 'Beograd', '12365489', 'Prodajem 10 tona sljive 3 klase', '2016-02-02'),
(38, NULL, 6, 'Milos', 'Prodajem sljive', 'Beograd', '12365489', 'Prodajem 10 tona sljive 1 klase', '2016-03-01'),
(39, NULL, 6, 'Milos', 'Prodajem sljive', 'Beograd', '12365489', 'Prodajem 10 tona sljive 2 klase', '2016-03-02'),
(40, NULL, 6, 'Milos', 'Prodajem sljive', 'Beograd', '12365489', 'Prodajem 10 tona sljive 3 klase', '2016-03-03'),
(41, NULL, 6, 'Milos', 'Prodajem breskve', 'Beograd', '12365489', 'Prodajem 10 tona breskve 1 klase', '2016-04-01'),
(42, NULL, 6, 'Milos', 'Prodajem breskve', 'Beograd', '12365489', 'Prodajem 10 tona breskve 2 klase', '2016-04-02'),
(43, NULL, 6, 'Milos', 'Prodajem breskve', 'Beograd', '12365489', 'Prodajem 10 tona breskve 3 klase', '2016-04-03'),
(44, NULL, 6, 'Milos', 'Prodajem kajsije', 'Beograd', '12365489', 'Prodajem 10 tona kajsije 1 klase', '2016-05-01'),
(45, NULL, 6, 'Milos', 'Prodajem kajsije', 'Beograd', '12365489', 'Prodajem 10 tona kajsije 2 klase', '2016-05-02'),
(46, NULL, 6, 'Milos', 'Prodajem kajsije', 'Beograd', '12365489', 'Prodajem 10 tona kajsije 3 klase', '2016-05-03'),
(47, NULL, 7, 'Goran', 'Prodajem jabuke', 'Suvodol', '12365489', 'Prodajem 10 tona jabuka 1 klase', '2016-01-01'),
(48, NULL, 9, 'Aca', 'Prodajem jabuke', 'Karaburma', '12365489', 'Prodajem 20 tona jabuka 2 klase', '2016-01-02'),
(49, 9, NULL, 'Zika', 'Prodajem jabuke', 'Beograd', '23654891', 'Prodajem 10 tona jabuka 1 klase', '2016-01-01'),
(50, 10, NULL, 'Mika', 'Prodajem jabuke', 'Pirot', '12365489', 'Prodajem 20 tona jabuka 2 klase', '2016-01-02'),
(51, 11, NULL, 'Ana', 'Prodajem jabuke', 'Beograd', '12365489', 'Prodajem 30 tona jabuka 3 klase', '2016-01-03'),
(52, 12, NULL, 'Ceca', 'Prodajem kruske', 'Vranje', '12365489', 'Prodajem 10 tona sljive 1 klase', '2016-02-01'),
(53, 13, NULL, 'Jaca', 'Prodajem kruske', 'Beograd', '12365489', 'Prodajem 10 tona sljive 2 klase', '2016-02-02'),
(54, 14, NULL, 'Toma', 'Prodajem kruske', 'Priboj', '12365489', 'Prodajem 10 tona sljive 3 klase', '2016-02-02'),
(55, 15, NULL, 'Lav', 'Prodajem sljive', 'Beograd', '12365489', 'Prodajem 10 tona sljive 1 klase', '2016-03-01'),
(56, 16, NULL, 'Leopard', 'Prodajem sljive', 'Beograd', '12365489', 'Prodajem 10 tona sljive 2 klase', '2016-03-02'),
(57, 17, NULL, 'Puma', 'Prodajem sljive', 'Uzice', '12365489', 'Prodajem 10 tona sljive 3 klase', '2016-03-03'),
(58, 18, NULL, 'Soko', 'Prodajem breskve', 'Beograd', '12365489', 'Prodajem 10 tona breskve 1 klase', '2016-04-01'),
(59, 19, NULL, 'Kiza', 'Prodajem breskve', 'Beograd', '12365489', 'Prodajem 10 tona breskve 2 klase', '2016-04-02'),
(60, 20, NULL, 'Vrabac', 'Prodajem breskve', 'Nis', '12365489', 'Prodajem 10 tona breskve 3 klase', '2016-04-03'),
(61, 21, NULL, 'Orao', 'Prodajem kajsije', 'Beograd', '12365489', 'Prodajem 10 tona kajsije 1 klase', '2016-05-01'),
(62, 22, NULL, 'Ratko', 'Prodajem kajsije', 'Beograd', '2165555', 'Prodajem 10 tona kajsije 2 klase', '2016-05-02'),
(63, 24, NULL, 'Tara', 'Prodajem breskve', 'Novi Sad', '21654855', 'Prodajem 10 tona breskve 1 klase', '2016-04-01'),
(64, 25, NULL, 'Roza', 'Prodajem breskve', 'Beograd', '12365489', 'Prodajem 10 tona breskve 2 klase', '2016-04-02'),
(65, 26, NULL, 'Ovan', 'Prodajem breskve', 'Beograd', '21654831', 'Prodajem 10 tona breskve 3 klase', '2016-04-03'),
(66, 27, NULL, 'Kiki', 'Prodajem kajsije', 'Smederevo', '12365489', 'Prodajem 10 tona kajsije 1 klase', '2016-05-01'),
(67, 28, NULL, 'Koka', 'Prodajem kajsije', 'Beograd', '21654891', 'Prodajem 10 tona kajsije 2 klase', '2016-05-02'),
(68, 23, NULL, 'Suzana', 'Prodajem kajsije', 'Loznica', '12365489', 'Prodajem 10 tona kajsije 3 klase', '2016-05-03'),
(69, NULL, 7, 'Goran', 'Prodajem breskve', 'Suvodol', '123456789', 'Prodajem 20 tona breskvi 1 klase', '2016-01-02'),
(70, NULL, 9, 'Aca', 'Prodajem jabuke', 'Karaburma', '123456788', 'Prodajem 20 tona jabuka 1 klase', '2016-01-03'),
(71, NULL, 10, 'Sinan', 'Prodajem jabuke', 'Loznica', '123456787', 'Prodajem 20 tona jabuka 1 klase', '2016-01-04'),
(72, NULL, 11, 'Ljuba', 'Prodajem kruske', 'Sabac', '123456786', 'Prodajem 20 tona kruska 1 klase', '2016-01-05'),
(73, NULL, 12, 'Ipce', 'Prodajem breskve', 'Skopje', '123456785', 'Prodajem 20 tona breskvi 1 klase', '2016-01-06'),
(74, NULL, 13, 'Indira', 'Prodajem jabuke', 'Bijeljina', '123456784', 'Prodajem 20 tona jabuka 1 klase', '2016-01-07'),
(75, NULL, 14, 'Saban', 'Prodajem kruske', 'Sabac', '123456783', 'Prodajem 20 tona kruska 1 klase', '2016-01-08'),
(76, NULL, 15, 'Pedja', 'Prodajem jabuke', 'Nis', '123456782', 'Prodajem 20 tona jabuka 1 klase', '2016-01-09'),
(77, NULL, 16, 'Semsa', 'Prodajem breskve', 'Sarajevo', '123456781', 'Prodajem 20 tona breskvi 1 klase', '2016-01-10'),
(78, NULL, 17, 'Jelena', 'Prodajem kruske', 'Zemun', '123456780', 'Prodajem 20 tona kruska 1 klase', '2016-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE IF NOT EXISTS `text` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `text` varchar(10000) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `title`, `text`, `date`) VALUES
(11, 'Prskanje voca', 'Potrebno je poprskati voce.Potrebno je poprskati voce.Potrebno je poprskati voce.Potrebno je poprskati voce.Potrebno je poprskati voce.Potrebno je poprskati voce.Potrebno je poprskati voce.Potrebno je poprskati voce.Potrebno je poprskati voce.Potrebno je poprskati voce.', '2016-06-07'),
(10, 'Prskanje povrca', 'Poprskati povrce', '2016-11-06'),
(7, 'Prskanje insekata', 'Potrebno je poprskati voce insekticidima kako ga nebi pojeli crvi.', '2016-11-06'),
(12, 'Prskanje sljiva', 'Potrebno je poprskati sljive.Potrebno je poprskati sljive.Potrebno je poprskati sljive.Potrebno je poprskati sljive.Potrebno je poprskati sljive.Potrebno je poprskati sljive.Potrebno je poprskati sljive.Potrebno je poprskati sljive.Potrebno je poprskati sljive.Potrebno je poprskati sljive.Potrebno je poprskati sljive.', '2016-05-07'),
(13, 'Prskanje gljiva', 'Potrebno je poprskati gljive.Potrebno je poprskati gljive.Potrebno je poprskati gljive.Potrebno je poprskati gljive.Potrebno je poprskati gljive.Potrebno je poprskati gljive.Potrebno je poprskati gljive.Potrebno je poprskati gljive.Potrebno je poprskati gljive.Potrebno je poprskati gljive.Potrebno je poprskati gljive.', '2016-04-07'),
(14, 'Orezivanje voca', 'Potrebno je orezati voce.Potrebno je orezati voce.Potrebno je orezati voce.Potrebno je orezati voce.Potrebno je orezati voce.Potrebno je orezati voce.Potrebno je orezati voce.Potrebno je orezati voce.Potrebno je orezati voce.Potrebno je orezati voce.Potrebno je orezati voce.', '2016-03-07'),
(15, 'Branje voca', 'Potrebno je ubrati voce.Potrebno je ubrati voce.Potrebno je ubrati voce.Potrebno je ubrati voce.Potrebno je ubrati voce.Potrebno je ubrati voce.Potrebno je ubrati voce.Potrebno je ubrati voce.Potrebno je ubrati voce.Potrebno je ubrati voce.Potrebno je ubrati voce.', '2016-02-07'),
(16, 'Branje povrca', 'Potrebno je obrati povrce.Potrebno je obrati povrce.Potrebno je obrati povrce.Potrebno je obrati povrce.Potrebno je obrati povrce.Potrebno je obrati povrce.Potrebno je obrati povrce.Potrebno je obrati povrce.Potrebno je obrati povrce.Potrebno je obrati povrce.Potrebno je obrati povrce.', '2016-02-06'),
(17, 'Secenje korova', 'Potrebno je iseci korov.Potrebno je iseci korov.Potrebno je iseci korov.Potrebno je iseci korov.Potrebno je iseci korov.Potrebno je iseci korov.Potrebno je iseci korov.Potrebno je iseci korov.Potrebno je iseci korov.Potrebno je iseci korov.Potrebno je iseci korov.', '2016-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(6, 'Baba', 'Roga', 'baba@yahoo.com', '$2y$10$3uQdXyrfrE5nFn6jfjrnOeRedysFhialgg.AzIs48jvBsK2T4Lzyy'),
(8, 'Pera', 'Peric', 'pera@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(9, 'Zika', 'Zikic', 'zika@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(10, 'Mika', 'Mikic', 'mika@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(11, 'Ana', 'Anic', 'ana@yahool.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(12, 'Ceca', 'Cecic', 'ceca@yahool.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(13, 'Jaca', 'Jacic', 'jaca@yahoo.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(14, 'Toma', 'Tomic', 'toma@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(15, 'Lav', 'Lavic', 'lav@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(16, 'Leopard', 'Leopardic', 'pera@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(17, 'Puma', 'Pumic', 'puma@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(18, 'Soko', 'Sokolovic', 'soko@yahoo.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(19, 'Kiza', 'Kizic', 'kiza@yahoo.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(20, 'Vrabac', 'Podunavac', 'vrabac@yahoo.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(21, 'Orao', 'Pao', 'orao@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(22, 'Ratko', 'Svirakratko', 'ratko@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(23, 'Suzana', 'Suzanic', 'suza@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(24, 'Tara', 'Zlatibor', 'tara@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(25, 'Roza', 'Koza', 'roza@yahoo.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(26, 'Ovan', 'Rogati', 'ovan@yahoo.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(27, 'Kiki', 'Riki', 'kiki@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy'),
(28, 'Koka', 'Kola', 'koka@gmail.com', '$2y$10$u.BBrRKVTIXZwclrsXlGwOh0ar/v8DWxmwwN3NOQJcd/kwj7eX9Sy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
