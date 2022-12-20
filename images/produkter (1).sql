-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2022 at 04:38 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krage`
--

-- --------------------------------------------------------

--
-- Table structure for table `produkter`
--

DROP TABLE IF EXISTS `produkter`;
CREATE TABLE IF NOT EXISTS `produkter` (
  `prodId` int(11) NOT NULL AUTO_INCREMENT,
  `prodNavn` varchar(100) COLLATE utf8mb4_danish_ci NOT NULL,
  `prodBeskrivelse` text COLLATE utf8mb4_danish_ci,
  `prodPris` decimal(9,0) NOT NULL,
  `prodKategori` varchar(100) COLLATE utf8mb4_danish_ci DEFAULT NULL,
  `prodBilled` varchar(100) COLLATE utf8mb4_danish_ci DEFAULT NULL,
  PRIMARY KEY (`prodId`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_danish_ci;

--
-- Dumping data for table `produkter`
--

INSERT INTO `produkter` (`prodId`, `prodNavn`, `prodBeskrivelse`, `prodPris`, `prodKategori`, `prodBilled`) VALUES
(2, 'Grønt 5stk', 'Grøntsager & frugt', '25', 'grønt', 'Grønt 1.webp'),
(3, 'Grønt 10stk', 'Grøntsager & frugt', '40', 'grønt', 'Grønt 3.2.webp'),
(7, '125g Kanel', '125g Frisk kardemomme', '80', 'krydderier', 'krydderiprod1fin.webp'),
(8, '125g Karry', '125g Stødt karry pulver', '55', 'krydderier', 'krydderiprod2fin.webp'),
(9, '125g Paprika', '125g Sødt paprika', '80', 'krydderier', 'krydderiprod3fin.webp'),
(10, '25g Safran', '25g Frisk safran', '950', 'krydderier', 'krydderiprod4fin.webp'),
(11, '1l Mælk', '1l Frisk malket mælk', '15', 'mejeri', 'milkproductfin.webp'),
(12, 'Ost 5stk', 'Kurv med hjemmelavet ost', '125', 'mejeri', 'ostproductfin.webp'),
(13, 'Ost 10 stk', 'Kurv med hjemmelavet ost', '200', 'mejeri', 'ostproductfin1.webp'),
(14, '1.5l Æble juice', 'Frisk presset æble juice', '30', 'saft', 'Produkterjuice2fin.webp'),
(15, '1.5l Kiwi juice', 'Frisk presset juice af kiwi', '30', 'saft', 'Produkterjuice1fin.webp'),
(16, '1.5l Multi juice', 'Frisk presset appelsin juice', '30', 'saft', 'Produkterjuice3fin.webp'),
(17, '1.5l Tomat juice', 'Frisk presset rødbede juice', '30', 'saft', 'Produkterjuice4fin.webp'),
(18, 'Grønt 25stk', 'Grøntsager & frugt', '80', 'grønt', 'Grønt 2.2.webp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
