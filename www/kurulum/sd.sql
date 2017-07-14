-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2014 at 02:47 AM
-- Server version: 5.1.62
-- PHP Version: 5.4.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `belirtiler`
--

CREATE TABLE IF NOT EXISTS `belirtiler` (
  `adi` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `belirtiler`
--

INSERT INTO `belirtiler` (`adi`) VALUES
('asd'),
('aÄŸrÄ±');

-- --------------------------------------------------------

--
-- Table structure for table `durum`
--

CREATE TABLE IF NOT EXISTS `durum` (
  `adi` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `durum`
--

INSERT INTO `durum` (`adi`) VALUES
('aasd');

-- --------------------------------------------------------

--
-- Table structure for table `hastaliklar`
--

CREATE TABLE IF NOT EXISTS `hastaliklar` (
  `adi` text CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `belirtileri` text COLLATE utf8_bin NOT NULL,
  `bilgi` text COLLATE utf8_bin NOT NULL,
  `gorulmeyeri` text COLLATE utf8_bin NOT NULL,
  `resim` text COLLATE utf8_bin NOT NULL,
  `kategori` text COLLATE utf8_bin NOT NULL,
  `gosterilme` text COLLATE utf8_bin NOT NULL,
  `yas` text COLLATE utf8_bin NOT NULL,
  `zaman` text COLLATE utf8_bin NOT NULL,
  `durum` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `hastaliklar`
--

INSERT INTO `hastaliklar` (`adi`, `belirtileri`, `bilgi`, `gorulmeyeri`, `resim`, `kategori`, `gosterilme`, `yas`, `zaman`, `durum`) VALUES
('a', 'asd,aÄŸrÄ±,', 'Asdcvgbnnnv', 'ayak,', '../resim/resimyok.png', '', '0', '', '', 'aasd,');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori`) VALUES
('#*#*#'),
('#*#*#');

-- --------------------------------------------------------

--
-- Table structure for table `sure`
--

CREATE TABLE IF NOT EXISTS `sure` (
  `adi` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sure`
--

INSERT INTO `sure` (`adi`) VALUES
('qwerrce');

-- --------------------------------------------------------

--
-- Table structure for table `vucutbolgeleri`
--

CREATE TABLE IF NOT EXISTS `vucutbolgeleri` (
  `bolge` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `vucutbolgeleri`
--

INSERT INTO `vucutbolgeleri` (`bolge`) VALUES
('ayak');

-- --------------------------------------------------------

--
-- Table structure for table `yas`
--

CREATE TABLE IF NOT EXISTS `yas` (
  `yas` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `yas`
--

INSERT INTO `yas` (`yas`) VALUES
('asszxxdcsxc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
