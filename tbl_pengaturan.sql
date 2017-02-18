-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2016 at 10:40 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaturan`
--

CREATE TABLE IF NOT EXISTS `tbl_pengaturan` (
  `id_pengaturan` int(3) NOT NULL AUTO_INCREMENT,
  `website` varchar(100) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `deskripsi` varchar(768) NOT NULL,
  `deskripsi_pendek` varchar(160) NOT NULL,
  `string_nota` varchar(320) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `email` varchar(360) NOT NULL,
  `pesan` text NOT NULL,
  `tlp` varchar(160) NOT NULL,
  `fax` varchar(160) NOT NULL,
  `cust_service` varchar(360) NOT NULL,
  `banner_show` enum('TRUE','FALSE') NOT NULL,
  `keyword` text NOT NULL,
  `logo` longtext NOT NULL,
  `google_verification` varchar(360) NOT NULL,
  `alexa_id` varchar(360) NOT NULL,
  `fb` varchar(160) NOT NULL,
  `gplus` varchar(160) NOT NULL,
  `twit` varchar(160) NOT NULL,
  `ppn` int(11) NOT NULL,
  `ymket` varchar(160) NOT NULL,
  `bbket` varchar(160) NOT NULL,
  PRIMARY KEY (`id_pengaturan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_pengaturan`
--

INSERT INTO `tbl_pengaturan` (`id_pengaturan`, `website`, `judul`, `deskripsi`, `deskripsi_pendek`, `string_nota`, `alamat`, `email`, `pesan`, `tlp`, `fax`, `cust_service`, `banner_show`, `keyword`, `logo`, `google_verification`, `alexa_id`, `fb`, `gplus`, `twit`, `ppn`, `ymket`, `bbket`) VALUES
(1, 'http://localhost/resto/', 'RM Padang "Kota Baru"', 'Kami adalah produsen tas dan aksesoris National Geographic terbaik di Indonesia yang berlokasi di Jawa Tengah, Semarang.\n\nKami memberikan jaminan kepuasan barang untuk memastikan konsumen-konsumen kami mendapatkan yang terbaik dari NGSPECIALIST.\n\nHubungi kami di:\n085883086838 (Call, SMS, Whatsapp)\nNGSPECIALIST (Line)\n57374ef4 (BBM)', 'Selain memproduksi Tas National Geographic terbaik di Indonesia, kami juga melayani pembuatan tas custom murah untuk berbagai event penting Anda.', 'RESTO.INV', '', '', 'Produsen Tas National Geographic Terbaik di Indonesia', '085883086838', '', 'Silahkan hubungi CS jika terdapat kesulitan, keluhan, saran, kritik, pembelian grosir, atau ajakan kerjasama.\n\nMicheal H, SS.\n08989000859', '', '', '', '', '', 'http://www.facebook.com/ngspecialistindo', '+nationalgeographicspecialist', '@ng_specialist', 10, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
