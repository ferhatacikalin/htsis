-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2015 at 09:41 ÖS
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--

Database: `sistemdb`
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
('her'),
('belirti');

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
('her');

-- --------------------------------------------------------

--
-- Table structure for table `hastaliklar`
--

CREATE TABLE IF NOT EXISTS `hastaliklar` (
  `adi` text COLLATE utf8_bin NOT NULL,
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
('asd', 'her,belirti,', 'asd', 'ayak,', '../resim/resimyok.png', 'nb,', '0', 'genç,', 'asd,', 'her,');

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
('#*#*#'),
('nb');

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
('asd');

-- --------------------------------------------------------

--
-- Table structure for table `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
`id` int(11) NOT NULL,
  `kullanici_adi` varchar(60) CHARACTER SET latin5 NOT NULL,
  `parola` varchar(60) CHARACTER SET latin5 NOT NULL,
  `eposta` varchar(60) CHARACTER SET latin5 NOT NULL,
  `tarih` date DEFAULT NULL,
  `yetki` varchar(60) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uyeler`
--

INSERT INTO `uyeler` (`id`, `kullanici_adi`, `parola`, `eposta`, `tarih`, `yetki`) VALUES
(3, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'info@celalyurtcu.com', '2009-11-04', '1'),
(4, 'celal', '5f39e1238c3d4adb95e91cb5b0971f2c', 'admin@celalyurtcu.com', '2009-11-05', '0'),
(6, 'deneme', '994fd428a06b4523a6ff23d50ab17b07', 'deneme@123.com', '2009-11-05', '0'),
(7, 'ferhat', '65d145bc919c8044738954832a834d8d', 'ferhat@ferhat.com', '2015-01-02', '0'),
(8, 'eda', '754c7d5dc008519b93589006857a5fe0', 'eda@eda.com', '2015-01-02', '0');

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
('genç');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hastaliklar`
--
ALTER TABLE `hastaliklar`
 ADD FULLTEXT KEY `adi` (`adi`,`belirtileri`,`bilgi`,`gorulmeyeri`,`resim`,`kategori`,`gosterilme`,`yas`,`zaman`,`durum`), ADD FULLTEXT KEY `adi_2` (`adi`);

--
-- Indexes for table `uyeler`
--
ALTER TABLE `uyeler`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uyeler`
--
ALTER TABLE `uyeler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
