-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 09:58 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zvikri`
--

-- --------------------------------------------------------

--
-- Table structure for table `activty_log`
--

CREATE TABLE IF NOT EXISTS `activty_log` (
  `id_activity` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `action` varchar(500) NOT NULL,
  PRIMARY KEY (`id_activity`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=198 ;

--
-- Dumping data for table `activty_log`
--

INSERT INTO `activty_log` (`id_activity`, `username`, `date`, `action`) VALUES
(1, 'admin', '2017-02-27', 'Admin Login berhasil'),
(2, 'admin', '2017-02-27', 'Admin Login berhasil'),
(3, 'admin', '2017-02-28', 'Admin Login berhasil'),
(4, 'admin', '2017-02-28', 'Admin Login berhasil'),
(5, 'admin', '2017-02-28', 'Admin Login berhasil'),
(6, 'admin', '2017-03-01', 'Admin Login berhasil'),
(7, 'admin', '2017-03-01', 'Admin Login berhasil'),
(8, 'admin', '2017-03-01', 'Admin Login berhasil'),
(9, 'admin', '2017-03-01', 'Admin Login berhasil'),
(10, 'vikri', '2017-03-01', 'Pegawai Login berhasil'),
(11, 'admin', '2017-03-01', 'Admin Login berhasil'),
(12, 'admin', '2017-03-01', 'Admin Login berhasil'),
(13, 'admin', '2017-03-01', 'Admin Login berhasil'),
(14, 'admin', '2017-03-01', 'Admin Login berhasil'),
(15, 'admin', '2017-03-01', 'Admin Login berhasil'),
(16, 'admin', '2017-03-01', 'barang dengan id 1 selesai di edit'),
(17, 'admin', '2017-03-01', 'menambah barang dengan no seri fffffff'),
(18, 'admin', '2017-03-02', 'Admin Login berhasil'),
(19, 'admin', '2017-03-02', 'menambah barang dengan no seri eeee'),
(20, 'vikri', '2017-03-02', 'Pegawai Login berhasil'),
(21, 'admin', '2017-03-02', 'menambah barang dengan no seri aaaa'),
(22, 'admin', '2017-03-02', 'status barang dengan id 1 diubah menjadi rusak'),
(23, 'admin', '2017-03-02', 'status barang dengan id 1 diubah menjadi rusak'),
(24, 'admin', '2017-03-02', 'status barang dengan id 2 diubah menjadi rusak'),
(25, 'admin', '2017-03-02', 'barang dengan id 2 dibuang'),
(26, 'admin', '2017-03-02', 'barang dengan id 2 dibuang'),
(27, 'admin', '2017-03-02', 'barang dengan id 2 di repair oleh admin'),
(28, 'admin', '2017-03-02', 'barang dengan id 2 selesai di repair'),
(29, 'admin', '2017-03-02', 'barang dengan id 2 selesai di repair'),
(30, 'admin', '2017-03-02', 'barang dengan id 2 selesai di repair'),
(31, 'vikri', '2017-03-02', 'Pegawai Login berhasil'),
(32, 'vikri', '2017-03-02', 'Pegawai Login berhasil'),
(33, 'admin', '2017-03-02', 'Admin Login berhasil'),
(34, 'admin', '2017-03-02', 'Admin Login berhasil'),
(35, 'admin', '2017-03-13', 'Admin Login berhasil'),
(36, 'admin', '2017-03-13', 'Admin Login berhasil'),
(37, 'admin', '2017-03-14', 'Admin Login berhasil'),
(38, 'admin', '2017-03-14', 'Admin Login berhasil'),
(39, 'admin', '2017-03-14', 'status barang dengan id 2 diubah menjadi rusak'),
(40, 'admin', '2017-03-14', 'status barang dengan id 1 diubah menjadi rusak'),
(41, 'admin', '2017-03-14', 'menambah barang dengan no seri asas'),
(42, 'admin', '2017-03-15', 'menambah barang dengan no seri hh'),
(43, 'admin', '2017-03-15', 'menambah barang dengan no seri kkk'),
(44, 'admin', '2017-03-15', 'menambah barang dengan no seri aaa'),
(45, 'admin', '2017-03-15', 'menambah barang dengan no seri sss'),
(46, 'admin', '2017-03-15', 'barang dengan id 9 selesai di edit'),
(47, 'admin', '2017-03-15', 'barang dengan id 1 dibuang'),
(48, 'admin', '2017-03-15', 'barang dengan id 1 dibuang'),
(49, 'admin', '2017-03-15', 'barang dengan id 1 di repair oleh admin'),
(50, 'admin', '2017-03-15', 'barang dengan id 1 selesai di repair'),
(51, 'admin', '2017-03-15', 'barang dengan id 2 dibuang'),
(52, 'admin', '2017-03-15', 'barang dengan id 2 dibuang'),
(53, 'admin', '2017-03-15', 'barang dengan id 2 dibuang'),
(54, 'admin', '2017-03-15', 'menambah barang dengan no seri '),
(55, 'admin', '2017-03-15', 'menambah lokasi lab b'),
(56, 'admin', '2017-03-15', 'Admin Login berhasil'),
(57, 'admin', '2017-03-15', 'menambah lokasi lab meka'),
(58, 'admin', '2017-03-15', 'Admin Login berhasil'),
(59, 'admin', '2017-03-15', 'menambah barang dengan no seri 11'),
(60, 'admin', '2017-03-15', 'status barang dengan id 3 diubah menjadi rusak'),
(61, 'admin', '2017-03-15', 'Admin Login berhasil'),
(62, 'admin', '2017-03-15', 'barang dengan id 3 di repair oleh admin'),
(63, 'admin', '2017-03-15', 'status barang dengan id 9 diubah menjadi rusak'),
(64, 'admin', '2017-03-17', 'Admin Login berhasil'),
(65, 'admin', '2017-03-19', 'Admin Login berhasil'),
(66, 'admin', '2017-03-19', 'Admin Login berhasil'),
(67, 'admin', '2017-03-19', 'Admin Login berhasil'),
(68, 'admin', '2017-03-19', 'menambah lokasi lab c'),
(69, 'admin', '2017-03-19', 'Admin Login berhasil'),
(70, 'admin', '2017-03-19', 'barang dengan id 4 selesai di edit'),
(71, 'admin', '2017-03-19', 'menambah barang dengan no seri ssasa'),
(72, 'admin', '2017-03-21', 'Admin Login berhasil'),
(73, 'admin', '2017-03-21', 'Admin Login berhasil'),
(74, 'vikri', '2017-03-21', 'Pegawai Login berhasil'),
(75, 'admin', '2017-03-21', 'Admin Login berhasil'),
(76, 'admin', '2017-03-25', 'Admin Login berhasil'),
(77, 'admin', '2017-03-25', 'Admin Login berhasil'),
(78, 'admin', '2017-03-26', 'Admin Login berhasil'),
(79, 'admin', '2017-03-26', 'Admin Login berhasil'),
(80, 'admin', '2017-03-27', 'Admin Login berhasil'),
(81, 'admin', '2017-03-27', 'menambah lokasi kelas seni'),
(82, 'admin', '2017-03-27', 'lokasi dengan id 1 selesai di ubah jadi laboran a'),
(83, 'admin', '2017-03-27', 'lokasi dengan id 2 selesai di ubah jadi laboran b'),
(84, 'admin', '2017-03-27', 'lokasi dengan id 3 selesai di ubah jadi laboran meka'),
(85, 'admin', '2017-03-27', 'lokasi dengan id 4 selesai di ubah jadi laboran c'),
(86, 'admin', '2017-03-28', 'Admin Login berhasil'),
(87, 'admin', '2017-03-28', 'Admin Login berhasil'),
(88, 'admin', '2017-03-28', 'Admin Login berhasil'),
(89, 'admin', '2017-03-28', 'Admin Login berhasil'),
(90, 'admin', '2017-03-28', 'Admin Login berhasil'),
(91, 'admin', '2017-03-29', 'Admin Login berhasil'),
(92, 'vikri', '2017-03-29', 'Pegawai Login berhasil'),
(93, 'admin', '2017-03-29', 'Admin Login berhasil'),
(94, 'admin', '2017-03-30', 'Admin Login berhasil'),
(95, 'admin', '2017-03-30', 'Admin Login berhasil'),
(96, 'admin', '2017-03-30', 'Admin Login berhasil'),
(97, 'admin', '2017-03-31', 'Admin Login berhasil'),
(98, 'admin', '2017-04-03', 'Admin Login berhasil'),
(99, 'admin', '2017-04-03', 'menambah barang dengan no seri 11234st56'),
(100, 'admin', '2017-04-03', 'menambah barang dengan no seri 45hhh7eg'),
(101, 'admin', '2017-04-03', 'Admin Login berhasil'),
(102, 'admin', '2017-04-04', 'Admin Login berhasil'),
(103, 'admin', '2017-04-05', 'Admin Login berhasil'),
(104, 'admin', '2017-04-05', 'Admin Login berhasil'),
(105, 'admin', '2017-04-05', 'Admin Login berhasil'),
(106, 'admin', '2017-04-05', 'Admin Login berhasil'),
(107, 'admin', '2017-04-06', 'Admin Login berhasil'),
(108, 'vikri', '2017-04-06', 'Admin Login berhasil'),
(109, 'admin', '2017-04-06', 'Admin Login berhasil'),
(110, 'admin', '2017-04-06', 'Admin Login berhasil'),
(111, 'admin', '2017-04-07', 'Admin Login berhasil'),
(112, 'vikri', '2017-04-07', 'Admin Login berhasil'),
(113, 'admin', '2017-04-07', 'Admin Login berhasil'),
(114, 'vikri', '2017-04-07', 'Admin Login berhasil'),
(115, 'vikri', '2017-04-07', 'menambah barang dengan no seri asdasd'),
(116, 'vikri', '2017-04-07', 'status barang dengan id 2 diubah menjadi rusak'),
(117, 'vikri', '2017-04-07', 'barang dengan id 2 di repair oleh vikri'),
(118, 'vikri', '2017-04-07', 'barang dengan id 2 selesai di repair'),
(119, 'admin', '2017-04-07', 'Admin Login berhasil'),
(120, 'vikri', '2017-04-07', 'Admin Login berhasil'),
(121, 'admin', '2017-04-08', 'Admin Login berhasil'),
(122, 'vikri', '2017-04-08', 'Admin Login berhasil'),
(123, 'vikri', '2017-04-08', 'menambah barang dengan no seri 223345678'),
(124, 'vikri', '2017-04-08', 'menambah barang dengan no seri oajah'),
(125, 'vikri', '2017-04-08', 'menambah barang dengan no seri 34gt56y'),
(126, 'vikri', '2017-04-08', 'status barang dengan id 4 diubah menjadi rusak'),
(127, 'vikri', '2017-04-08', 'status barang dengan id 5 diubah menjadi rusak'),
(128, 'vikri', '2017-04-08', 'status barang dengan id 6 diubah menjadi rusak'),
(129, 'vikri', '2017-04-08', 'status barang dengan id 3 diubah menjadi rusak'),
(130, 'vikri', '2017-04-08', 'barang dengan id 6 di repair oleh vikri'),
(131, 'vikri', '2017-04-08', 'barang dengan id 4 dibuang'),
(132, 'vikri', '2017-04-08', 'barang dengan id 5 dibuang'),
(133, 'vikri', '2017-04-08', 'barang dengan id 3 di repair oleh vikri'),
(134, 'vikri', '2017-04-08', 'barang dengan id 6 selesai di repair'),
(135, 'vikri', '2017-04-08', 'status barang dengan id 2 diubah menjadi rusak'),
(136, 'vikri', '2017-04-08', 'menambah barang dengan no seri asas'),
(137, 'vikri', '2017-04-08', 'menambah barang dengan no seri ss'),
(138, 'vikri', '2017-04-08', 'menambah barang dengan no seri k'),
(139, 'vikri', '2017-04-08', 'menambah barang dengan no seri dsd'),
(140, 'vikri', '2017-04-08', 'menambah barang dengan no seri asdasds'),
(141, 'vikri', '2017-04-08', 'menambah barang dengan no seri ewf'),
(142, 'vikri', '2017-04-08', 'menambah barang dengan no seri lm'),
(143, 'admin', '2017-04-09', 'Admin Login berhasil'),
(144, 'admin', '2017-04-10', 'Admin Login berhasil'),
(145, 'sarah', '2017-04-10', 'barang dengan id 2 di repair oleh sarah'),
(146, 'admin', '2017-04-10', 'Admin Login berhasil'),
(147, 'admin', '2017-04-10', 'Admin Login berhasil'),
(148, 'sarah', '2017-04-10', 'menambah barang dengan no seri 2345124'),
(149, 'VIKRI', '2017-04-10', 'Admin Login berhasil'),
(150, 'vikri', '2017-04-10', 'menambah barang dengan no seri '),
(151, 'admin', '2017-04-10', 'Admin Login berhasil'),
(152, 'sarah', '2017-04-10', 'menambah barang dengan kode barang BRG002'),
(153, 'sarah', '2017-04-10', 'menambah barang dengan kode barang BRG002'),
(154, 'vikri', '2017-04-12', 'Admin Login berhasil'),
(155, 'vikri', '2017-04-12', 'menambah barang dengan kode barang BRG002'),
(156, 'vikri', '2017-04-12', 'Admin Login berhasil'),
(157, 'vikri', '2017-04-12', 'Admin Login berhasil'),
(158, 'vikri', '2017-04-13', 'Admin Login berhasil'),
(159, 'vikri', '2017-04-13', 'menambah barang dengan kode barang KB002'),
(160, 'vikri', '2017-04-13', 'menambah barang dengan kode barang KB003'),
(161, 'admin', '2017-04-13', 'Admin Login berhasil'),
(162, 'vikri', '2017-04-14', 'Admin Login berhasil'),
(163, 'vikri', '2017-04-14', 'Admin Login berhasil'),
(164, 'vikri', '2017-04-14', 'menambah barang dengan kode barang KB004'),
(165, 'vikri', '2017-04-15', 'Admin Login berhasil'),
(166, 'vikri', '2017-04-15', 'status barang dengan id 31 diubah menjadi rusak'),
(167, 'vikri', '2017-04-15', 'status barang dengan id 30 diubah menjadi rusak'),
(168, 'vikri', '2017-04-15', 'barang dengan id 31 di repair oleh vikri'),
(169, 'vikri', '2017-04-15', 'barang dengan id 30 di repair oleh vikri'),
(170, 'vikri', '2017-04-15', 'barang dengan id 31 selesai di repair'),
(171, 'vikri', '2017-04-15', 'barang dengan id 30 selesai di repair'),
(172, 'vikri', '2017-04-15', 'lokasi dengan id 1" selesai di ubah jadi labi a'),
(173, 'vikri', '2017-04-15', 'Admin Login berhasil'),
(174, 'vikri', '2017-04-15', 'status barang dengan id 33 diubah menjadi rusak'),
(175, 'vikri', '2017-04-15', 'barang dengan id 33 dibuang'),
(176, 'vikri', '2017-04-15', 'Admin Login berhasil'),
(177, 'vikri', '2017-04-15', 'lokasi dengan id 1" selesai di ubah jadi lab a'),
(178, 'admin', '2017-04-24', 'Admin Login berhasil'),
(179, 'vikri', '2017-04-24', 'Admin Login berhasil'),
(180, 'vikri', '2017-04-25', 'Admin Login berhasil'),
(181, 'vikri', '2017-04-25', 'Admin Login berhasil'),
(182, 'vikri', '2017-04-25', 'Admin Login berhasil'),
(183, 'vikri', '2017-04-25', 'menambah barang dengan kode barang KB005'),
(184, 'vikri', '2017-04-25', 'menambah lokasi lab rpl'),
(185, 'vikri', '2017-04-25', 'status barang dengan id 34 diubah menjadi rusak'),
(186, 'vikri', '2017-04-25', 'barang dengan id 34 dibuang'),
(187, 'vikri', '2017-04-25', 'Admin Login berhasil'),
(188, 'vikri', '2017-04-25', 'Admin Login berhasil'),
(189, 'vikri', '2017-04-25', 'lokasi dengan id 8" selesai di ubah jadi Pos'),
(190, 'admin', '2017-04-26', 'Admin Login berhasil'),
(191, 'vikri', '2017-04-26', 'Admin Login berhasil'),
(192, 'vikri', '2017-04-26', 'Admin Login berhasil'),
(193, 'vikri', '2017-04-26', 'menambah kategori '),
(194, 'vikri', '2017-04-26', 'menambah kategori '),
(195, 'vikri', '2017-04-26', 'menambah kategori Alat Kebersihan'),
(196, 'vikri', '2017-04-27', 'Admin Login berhasil'),
(197, 'vikri', '2017-04-28', 'Admin Login berhasil');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(120) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `no_telepon` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_depan`, `nama_belakang`, `no_telepon`) VALUES
(1, 'admin', 'admin', 'sarah', 'sophia', 0),
(2, 'vikri', 'srh', 'vikri', 'ramdhani', 2147483647),
(6, 'agus', 'salim', 'agus', 'farid', 55555);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis` varchar(30) NOT NULL,
  `deskripsi_brg` text NOT NULL,
  `kode_brg` varchar(10) NOT NULL,
  `merk_brg` varchar(20) NOT NULL,
  `no_seri` varchar(30) NOT NULL,
  `status_brg` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_jenis`, `deskripsi_brg`, `kode_brg`, `merk_brg`, `no_seri`, `status_brg`) VALUES
(29, '3', '-', 'BRG001', 'Canon', 'cnn6fhvfdqw', 'terpakai'),
(30, '3', '-', 'BRG002', 'Canon', 'cnn6fhvfdqw', 'terpakai'),
(31, '1', '-', 'BRG003', 'LG', '1223', 'terpakai'),
(32, '1', '-', 'BRG004', 'LG', '1223', 'terpakai'),
(33, '3', '-', 'BRG005', 'Canon', 'cnn6fhvfdqw', 'terbuang'),
(34, '3', '-', 'BRG006', 'Canon', 'cnn6fhvfdqw', 'terbuang'),
(35, '3', '-', 'BRG007', 'Canon', 'cnn6fhvfdqw', 'terpakai');

-- --------------------------------------------------------

--
-- Table structure for table `barang_detail`
--

CREATE TABLE IF NOT EXISTS `barang_detail` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(11) NOT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `merk_brg` varchar(50) NOT NULL,
  `no_seri` varchar(30) NOT NULL,
  `deskripsi` varchar(70) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `barang_detail`
--

INSERT INTO `barang_detail` (`id_barang`, `id_jenis`, `kode_brg`, `merk_brg`, `no_seri`, `deskripsi`) VALUES
(1, 2, 'KB001', 'LG 12 P LED', 'jfnkw', ''),
(5, 1, 'KB002', 'SIMBADA-X', 'sm670hbg', '-'),
(6, 3, 'KB003', 'Canon', 'cnn6fhvfdqw', '-'),
(7, 1, 'KB004', 'LG', '1223', '-'),
(8, 3, 'KB005', 'Canon', '2erqwdfqw-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_brg`
--

CREATE TABLE IF NOT EXISTS `jenis_brg` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jenis_brg`
--

INSERT INTO `jenis_brg` (`id_jenis`, `nama`, `keterangan`) VALUES
(1, 'CPU', ''),
(2, 'Monitor', ''),
(3, 'Printer', ''),
(6, 'Alat Kebersihan', '-');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lok` varchar(40) NOT NULL,
  `tambahan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lok`, `tambahan`) VALUES
(1, 'lab a', ''),
(2, 'lab b', 'aaa'),
(3, 'lab meka', '-'),
(4, 'lab c', 'bagusss'),
(5, 'kelas seni', 'dijaga baik baik eaa'),
(6, 'lab rpl', '-'),
(7, 'TU', '-'),
(9, 'a', ''),
(10, 'gudang', ''),
(11, 'gudang', '');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_detail`
--

CREATE TABLE IF NOT EXISTS `lokasi_detail` (
  `Id_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lokasi` int(11) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`Id_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `lokasi_detail`
--

INSERT INTO `lokasi_detail` (`Id_id`, `id_lokasi`, `date`, `id`) VALUES
(4, 1, '2017-04-14', 32),
(6, 2, '2017-04-15', 31),
(7, 2, '2017-04-15', 30),
(8, 1, '2017-04-15', 29),
(9, 4, '2017-04-25', 35);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id_notif` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `notif` text NOT NULL,
  `link` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `status_notif` varchar(50) NOT NULL,
  PRIMARY KEY (`id_notif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `no_telepon` int(15) NOT NULL,
  `pertayaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `username`, `password`, `nama_depan`, `nama_belakang`, `no_telepon`, `pertayaan`, `jawaban`) VALUES
(1, 'vikri', 'vikri', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE IF NOT EXISTS `pengadaan` (
  `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT,
  `no_pengadaan` varchar(50) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_suplier` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `jenis_pengadaan` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_pengadaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`id_pengadaan`, `no_pengadaan`, `id_barang`, `id_suplier`, `id_petugas`, `jenis_pengadaan`, `tanggal`, `harga`, `jumlah`, `keterangan`) VALUES
(16, 'PB001', 6, 1, 2, '0', '2017-04-13', 50000, 2, '-'),
(17, 'PB002', 7, 1, 2, 'pembelian', '2017-04-14', 20000, 2, '-'),
(18, 'PB003', 6, 1, 2, 'pembelian', '2017-04-15', 3000000, 1, '-'),
(19, 'PB004', 6, 1, 2, 'pembelian', '2017-04-24', 40000, 2, '-');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE IF NOT EXISTS `suplier` (
  `id_suplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sup` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` int(15) NOT NULL,
  PRIMARY KEY (`id_suplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_sup`, `alamat`, `no_telepon`) VALUES
(1, 'CV.Patah Semangat', 'jl.kalidam no. 15', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `id_log` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `login_date` int(11) NOT NULL,
  `logout_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
