-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2016 at 06:01 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookingsek`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminbs`
--

CREATE TABLE IF NOT EXISTS `adminbs` (
  `id` int(1) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminbs`
--

INSERT INTO `adminbs` (`id`, `UserName`, `Password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bookingbs`
--

CREATE TABLE IF NOT EXISTS `bookingbs` (
  `id_booking` int(10) NOT NULL AUTO_INCREMENT,
  `id_member` int(10) NOT NULL,
  `id_tamu` int(10) NOT NULL,
  `waktu_reservasi` datetime NOT NULL,
  `tanggal_booking` date NOT NULL,
  `jam_booking` time NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `jumlah_orang` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bookingbs`
--

INSERT INTO `bookingbs` (`id_booking`, `id_member`, `id_tamu`, `waktu_reservasi`, `tanggal_booking`, `jam_booking`, `tempat`, `jumlah_orang`, `status`) VALUES
(1, 0, 3, '2015-12-29 05:08:44', '2016-01-01', '01:00:00', 'outdoor', 50, 2),
(2, 17, 3, '2015-12-29 05:11:51', '2016-12-31', '12:59:00', 'outdoor', 100, 0),
(3, 17, 4, '2015-12-29 03:13:38', '2015-01-01', '01:00:00', 'outdoor', 10000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `u` varchar(15) NOT NULL,
  `p` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `u`, `p`, `nama`, `email`) VALUES
(9, 'Restoran', 'b23613b2556a45cc783f72072b2445a8', 'booking', 'isfinariyani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `makananbs`
--

CREATE TABLE IF NOT EXISTS `makananbs` (
  `id_makanan` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_makanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `makananbs`
--

INSERT INTO `makananbs` (`id_makanan`, `nama`, `keterangan`, `foto`, `status`) VALUES
(1, 'lumpia', 'terbuat dari bung dan dibalut dengan selimut yang krispi', '../../images/upload/makanan/2554.jpg', 0),
(2, 'Tahu Bakso', 'Bakso dibungkus dengan tahu yang kaya dengan protein', '../../images/upload/makanan/32720.jpg', 0),
(3, 'Tahu Gimbal', 'Makanan Khas semarang', '../../images/upload/makanan/76132.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `memberbs`
--

CREATE TABLE IF NOT EXISTS `memberbs` (
  `id_member` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `memberbs`
--

INSERT INTO `memberbs` (`id_member`, `nama`, `username`, `password`, `alamat`, `no_telp`, `email`, `foto`, `status`) VALUES
(17, 'sate pak widodo ', 'widodo', 'widodo1', 'inggris', '085641542123', 'adf@gmail.com', '../../images/upload/member/43896.jpg', 0),
(18, 'sate pak widodo 2', 'widodo', 'widodo1', 'as', '085641542123', 'adf@gmail.com', '../../images/upload/member/22027.jpg', 1),
(19, 'nglaras rasa', 'nglaras', 'nglaras', 'dasdakja jl thamrin', '1209049104', 'add@gmal.com', '../../images/upload/member/12677.jpg', 0),
(20, 'Mbok Berek', 'k', 'k', 'lkl', '08361387318', 'add@gmal.com', '../../''images/upload/member/66516.jpg', 0),
(21, 'Mbok Berek', 'mbok', 'mbok', 'jl kalibanteng  no 12 semarang', '08361387318', 'keke@gmail.com', '../../images/upload/member/94256.jpg', 0),
(22, 'yfcguvhbjnk', 'yfcguvhbjlnk;', 'yfcuvhjbl;k', 'ycvuibjkm;l''', '08361387318', 'add@gmal.com', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservasibs`
--

CREATE TABLE IF NOT EXISTS `reservasibs` (
  `IDReservasi` varchar(10) NOT NULL,
  `ID_Tamu` varchar(10) NOT NULL,
  `ID_Resto` varchar(10) NOT NULL,
  `ID_Member` varchar(10) NOT NULL,
  `JumOrg` int(11) NOT NULL,
  `TglReservasi` date NOT NULL,
  `TanggalBooking` date NOT NULL,
  `JamBooking` time NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restobs`
--

CREATE TABLE IF NOT EXISTS `restobs` (
  `ID_Resto` varchar(10) NOT NULL,
  `NamaResto` varchar(50) NOT NULL,
  `AlamatResto` varchar(50) NOT NULL,
  `UsernameResto` varchar(10) NOT NULL,
  `PasswordResto` varchar(50) NOT NULL,
  `MaxOrg` int(11) NOT NULL,
  `EmailREsto` varchar(30) NOT NULL,
  `NoTelp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tamubs`
--

CREATE TABLE IF NOT EXISTS `tamubs` (
  `id_tamu` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tamubs`
--

INSERT INTO `tamubs` (`id_tamu`, `nama`, `no_telp`, `email`, `username`, `password`, `lastlogin`, `status`) VALUES
(2, 'nasi goreng kita', '085641542129', 'adf@gmail.com', 'widodo', 'poppo', '2015-12-27 12:19:36', 0),
(3, 'slawittan', '0908', 'widodo@gmail.com', 'slawi', 'slawi', '2015-12-27 12:14:45', 0),
(4, 'kekepunya', '083918924724', 'keke@gmail.com', 'keke', 'kekegering', '2015-12-29 12:07:00', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
