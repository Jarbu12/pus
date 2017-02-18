-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2016 at 02:47 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bankjurnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admdata`
--

CREATE TABLE IF NOT EXISTS `tb_admdata` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(160) NOT NULL,
  `nama` varchar(160) NOT NULL,
  `fakultas` varchar(160) NOT NULL,
  `progdi` varchar(160) NOT NULL,
  `alamat` varchar(160) NOT NULL,
  `status` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datauser`
--

CREATE TABLE IF NOT EXISTS `tb_datauser` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(160) NOT NULL,
  `nim` varchar(160) NOT NULL,
  `fakultas` varchar(160) NOT NULL,
  `progdi` varchar(160) NOT NULL,
  `nama` varchar(160) NOT NULL,
  `status` varchar(160) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE IF NOT EXISTS `tb_dosen` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nip` varchar(320) NOT NULL,
  `dosen` varchar(320) NOT NULL,
  `jk` varchar(320) NOT NULL,
  `alamat` varchar(320) NOT NULL,
  `no_hp` varchar(160) NOT NULL,
  `kd_fakultas` varchar(160) NOT NULL,
  `foto` varchar(160) NOT NULL,
  `jabatan` varchar(320) NOT NULL,
  `status` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nip`, `dosen`, `jk`, `alamat`, `no_hp`, `kd_fakultas`, `foto`, `jabatan`, `status`) VALUES
(1, '0601078502', 'Fajriannoor Fanani, S.Sos., M.I.Kom.', 'L', 'Jl Prambanan TImur No.87', '', 'G', '', '', ''),
(2, '0602107202', 'Sri Handayani, S.T., M.T.', 'P', 'Jl Kemayoran TImur No.76', '', 'G', 'sri.jpg', '', ''),
(3, '0602117801', 'Nursanti Irliana, S.Kom., M.Kom.', 'P', 'Jl Gajah Raya No.7', '', 'G', 'nursanti.jpg', '', ''),
(4, '0603068301', 'Henny Indrayati S.Kom.,M.Kom', 'P', 'Jl Simpang Lima 2', '', 'G', '', '', ''),
(5, '0605118203', 'Errika Dwi Setya Watie, S.Sos., M.I.Kom.', 'P', 'Jl Menoreh Raya No.5', '', 'G', '', '', ''),
(6, '0606058203', 'Hetty Catur Ellyawati, S.S., M.Hum.', 'P', 'Jl Tengaran Timur No.2', '', 'G', '', '', ''),
(7, '0606077501', 'Atmoko Nugroho, S.T., M.Eng.', 'L', 'Jl Soekarno Hatta No 5', '', 'G', '', '', ''),
(8, '0607047801', 'Rastri Prathivi', 'P', 'Jl Candigama Timur No 7', '', 'G', '', '', ''),
(9, '0609078203', 'Edi Nurwahyu Julianto, S.Sos., M.I.Kom.', 'L', 'Jl Malangsari TImur no 5', '', 'G', '', '', ''),
(10, '0611078401', 'Yuliyanto Budi Setiawan, S.Sos., M.Si.', 'L', 'Jl Kanggguru Barat No.8', '', 'G', '', '', ''),
(11, '0612117602', 'Whisnumurti Adhiwibowo, S.T., M.Kom.', 'L', 'Jl Salak Utara No.14', '', 'G', '', '', ''),
(12, '0613087801', 'Vensy Vydia, S.Kom., M.Kom.', 'P', 'Jl Tengiri Raya No.4', '', 'G', '', '', ''),
(13, '0614028901', 'Kharisma Ayu Febriana, S.I.Kom., M.I.Kom.', 'P', 'Jl Srikandi Timur No', '', 'G', '', '', ''),
(14, '0614047901', 'Titis Handayani, S.Kom., M.Cs.', 'P', 'Jl Rusa Raya No.789', '', 'G', '', '', ''),
(15, '0615098202', 'Bernadus Very Christioko, S.Kom., M.Kom.', 'L', 'Jl Mangga No.16', '', 'G', '', '', ''),
(16, '0621027601', 'Susanto, S.Kom., M.Kom.', 'L', 'Jl Candi Timur No.5', '', 'G', '', '', ''),
(17, '0621038501', 'Aria Hendrawan, S.T., M.Kom.', 'L', 'Jl Kemang Timur No.7', '', 'G', '', '', ''),
(18, '0623058402', 'Mohammad Sani Suprayogi, S.Kom., M.Cs.', 'L', 'Jl Bayu Prasetya No ', '', 'G', '', '', ''),
(19, '0623066002', 'Mochamad Chaerul Latief, S.Sos., M.Si.', 'L', 'Jl Singosari Raya No.13', '', 'G', '', '', ''),
(20, '0624047901', 'Gita Aprinta E.B, S.Sos., M.Si.', 'P', 'Jl Jeruk Barat No.98', '', 'G', '', '', ''),
(21, '0624057605', 'April Firman Daru, S.Kom.,M.Kom.', 'L', 'Jl Simpang Lima 1', '089669197189', 'G', 'firman.jpg', 'Lecturer Dosen', 'tetap'),
(22, '0626047901', 'Nur Wakhidah, S.Kom., M.Cs.', 'P', 'Jl Tegalsari Barat No.17', '', 'G', '', '', ''),
(23, '0627048303', 'Prind Triajeng Pungkasanti, S.Kom., M.Kom.', 'P', 'Jl Manggis Raya No.5', '', 'G', '', '', ''),
(24, '0627116901', 'Titin Winarti, S.Kom., MM.', 'P', 'Jl Sidodadi Selatan No.76', '', 'G', '', '', ''),
(25, '0628128202', 'Basworo Ardi Pramono, S.T., M.T.', 'L', 'Jl Koja Barat No.43', '', 'G', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE IF NOT EXISTS `tb_fakultas` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `kd_fakultas` varchar(160) NOT NULL,
  `fakultas` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`id`, `kd_fakultas`, `fakultas`) VALUES
(1, 'G', 'Fakultas Teknologi Informasi dan Komunikasi'),
(2, 'A', 'Fakultas Manajemen'),
(3, 'D', 'Fakultas Kedokteran'),
(4, 'B', 'S1-Manajemen');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurnal`
--

CREATE TABLE IF NOT EXISTS `tb_jurnal` (
  `id_jurnal` int(5) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(160) NOT NULL,
  `judul` varchar(160) NOT NULL,
  `pembuat` varchar(160) NOT NULL,
  `tema` varchar(160) NOT NULL,
  `publish` varchar(160) NOT NULL,
  `ket` varchar(320) NOT NULL,
  `nama_file` varchar(160) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kd_fakultas` varchar(160) NOT NULL,
  `dosbing` varchar(160) NOT NULL,
  `status` int(12) NOT NULL,
  PRIMARY KEY (`id_jurnal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_jurnal`
--

INSERT INTO `tb_jurnal` (`id_jurnal`, `id_user`, `judul`, `pembuat`, `tema`, `publish`, `ket`, `nama_file`, `waktu`, `kd_fakultas`, `dosbing`, `status`) VALUES
(4, 'G211130088', 'Dendam Suzana 3', 'Fajar  buwana Eka Paksi', 'Horor', 'Fajar Buwana ', 'Mantap', '00041_(1).pdf', '2016-04-10 08:47:06', 'G', '0615098202', 1),
(5, 'G211130088', 'Beranak Dalam Kubur', 'Fajar Jarbu', 'Horor', 'Fajar Buwana Eka P', 'Serem Gan Asli', '3612ijsea02.pdf', '2016-04-10 09:05:12', 'G', '0615098202', 1),
(6, 'G211130088', 'Pocong Seger', 'Fajar Buwana Eka P', 'Horor', 'Fajar Buwana Eka P', 'Upload', 'RESUME_hukuman.pdf', '2016-04-20 08:25:59', 'G', '0615098202', 1),
(7, 'G211130088', 'Rekayasa Web', 'Fajar  buwana Eka Paksi', 'TIK', 'Fajar ', 'joosss', '00041_(1).pdf', '2016-04-28 02:48:47', 'G', '0615098202', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(160) NOT NULL,
  `password` varchar(160) NOT NULL,
  `nama` varchar(160) NOT NULL,
  `foto` varchar(160) NOT NULL,
  `level` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `foto`, `level`) VALUES
(1, 'admin', 'admin', 'admin', '', '1'),
(2, 'user', 'user', 'user', '', '2'),
(3, 'G211130088', 'fajar', 'Fajar Buwana Eka Paksi', 'fotoku.jpg', '2'),
(4, '0615098202', 'pakver', 'Bernadus Very Christioko, S.Kom.,M.Kom', 'bernard.jpg', '1'),
(5, 'G211130088_root', 'fajar_root', 'Fajar Jarbu', 'fotoku.jpg', 'root');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
