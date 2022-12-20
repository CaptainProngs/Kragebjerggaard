-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2022 at 09:17 AM
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
(2, 'Grønt 5stk', 'Grøntsager & frugt', '25', 'grønt', 'grønt 1.png'),
(3, 'Grønt 10stk', 'Grøntsager & frugt', '40', 'grønt', 'grønt 3.2.png'),
(7, '125g Kanel', '125g Frisk kardemomme', '80', 'krydderier', 'krydderiprod1fin.png'),
(8, '125g Karry', '125g Stødt karry pulver', '55', 'krydderier', 'krydderiprod2fin.png'),
(9, '125g Paprika', '125g Sødt paprika', '80', 'krydderier', 'krydderiprod3fin.png'),
(10, '25g Safran', '25g Frisk safran', '950', 'krydderier', 'krydderiprod4fin.png'),
(11, '1l Mælk', '1l Frisk malket mælk', '15', 'mejeri', 'milkproductfin.png'),
(12, 'Ost 5stk', 'Kurv med hjemmelavet ost', '125', 'mejeri', 'ostproductfin.png'),
(13, 'Ost 10 stk', 'Kurv med hjemmelavet ost', '200', 'mejeri', 'ostproductfin1.png'),
(14, '1.5l Æble juice', 'Frisk presset æble juice', '30', 'saft', 'Produkterjuice2fin.png'),
(15, '1.5l Kiwi juice', 'Frisk presset juice af kiwi', '30', 'saft', 'Produkterjuice1fin.png'),
(16, '1.5l Multi juice', 'Frisk presset appelsin juice', '30', 'saft', 'Produkterjuice3fin.png'),
(17, '1.5l Tomat juice', 'Frisk presset rødbede juice', '30', 'saft', 'Produkterjuice4fin.png'),
(18, 'Grønt 25stk', 'Grøntsager & frugt', '80', 'grønt', 'Grønt 2.2.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
