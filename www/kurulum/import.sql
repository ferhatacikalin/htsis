-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 Kasım 2009 saat 10:36:31
-- Sunucu sürümü: 5.1.33
-- PHP Sürümü: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `uye`
--

-- --------------------------------------------------------

--
-- Tablo yapısı: `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(60) CHARACTER SET latin5 NOT NULL,
  `parola` varchar(60) CHARACTER SET latin5 NOT NULL,
  `eposta` varchar(60) CHARACTER SET latin5 NOT NULL,
  `tarih` date DEFAULT NULL,
  `yetki` varchar(60) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `kullanici_adi`, `parola`, `eposta`, `tarih`, `yetki`) VALUES
(3, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'info@celalyurtcu.com', '2009-11-04', '1'),
(4, 'celal', '5f39e1238c3d4adb95e91cb5b0971f2c', 'admin@celalyurtcu.com', '2009-11-05', '0'),
(6, 'deneme', '994fd428a06b4523a6ff23d50ab17b07', 'deneme@123.com', '2009-11-05', '0');
