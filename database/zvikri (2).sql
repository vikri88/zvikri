-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 12:56 PM
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
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `action` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_activity`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `activty_log`
--

INSERT INTO `activty_log` (`id_activity`, `id`, `date`, `action`, `status`) VALUES
(1, 2, '2017-05-17 00:02:37', ' suplier CV. Kerjasama berhasil ditambahkan', 'admin'),
(2, 2, '2017-05-17 00:03:38', 'kategori Komputer ditambahkan', 'admin'),
(3, 2, '2017-05-17 00:04:44', 'kategori Monitor ditambahkan', 'admin'),
(4, 2, '2017-05-17 00:05:18', ' ditambahkan dengan merk Lg & kode KB001', 'admin'),
(5, 2, '2017-05-17 00:05:58', '  berhasil ditambahkan sebanyak 5', 'admin'),
(6, 2, '2017-05-17 02:29:46', 'lokasi Ruang A berhasil ditambahkan', 'admin'),
(7, 2, '2017-05-17 03:35:02', 'lokasi Ruang B berhasil ditambahkan', 'admin'),
(8, 2, '2017-05-17 03:35:15', 'lokasi Ruang C berhasil ditambahkan', 'admin'),
(9, 2, '2017-05-17 03:35:28', 'lokasi Ruang D berhasil ditambahkan', 'admin'),
(10, 2, '2017-05-17 03:35:53', 'lokasi Ruang E berhasil ditambahkan', 'admin'),
(11, 2, '2017-05-17 04:29:49', ' suplier CV. Gotong Royong berhasil ditambahkan', 'admin'),
(12, 2, '2017-05-17 04:39:06', 'barang dengan kode BRG005 dilokasikan ke Ruang A', 'admin'),
(13, 2, '2017-05-17 04:39:19', 'barang dengan kode BRG005 dilokasikan ke Ruang B', 'admin'),
(14, 2, '2017-05-17 04:49:03', 'barang dengan kode BRG005 dipindahkan dari Ruang B ke Ruang D', 'admin'),
(15, 2, '2017-05-17 05:00:36', 'Monitor Lg berhasil ditambahkan sebanyak 2', 'admin'),
(16, 9, '2017-05-17 05:04:38', 'Monitor Lg berhasil ditambahkan sebanyak 2', 'admin'),
(17, 9, '2017-05-17 05:06:13', 'barang dengan kode BRG009 dilokasikan ke Ruang A', 'admin'),
(18, 9, '2017-05-17 05:06:21', 'barang dengan kode BRG009 sekarang berstatus rusak', 'admin'),
(19, 9, '2017-05-17 05:26:52', 'Monitor Lg berhasil ditambahkan sebanyak 2', 'admin'),
(20, 2, '2017-05-17 08:06:22', 'barang dengan kode BRG011 dilokasikan ke Ruang E', 'admin'),
(21, 2, '2017-05-17 08:10:48', 'barang dengan kode BRG005 dipindahkan dari Ruang D ke Ruang B', 'admin'),
(22, 2, '2017-05-17 08:32:12', ' suplier Cv. Kngn berhasil ditambahkan', 'admin'),
(23, 2, '2017-05-17 08:32:27', 'kategori CPU ditambahkan', 'admin'),
(24, 2, '2017-05-17 08:32:59', ' ditambahkan dengan merk Asus & kode KB002', 'admin'),
(25, 2, '2017-05-17 10:09:59', 'barang dengan nama Lg di repair', 'admin'),
(26, 2, '2017-05-19 09:30:02', 'Monitor Lg berhasil ditambahkan sebanyak 1', 'admin'),
(27, 2, '2017-05-19 09:31:58', '  berhasil ditambahkan sebanyak 2', 'admin'),
(28, 2, '2017-05-19 09:32:38', 'CPU Asus berhasil ditambahkan sebanyak 1', 'admin'),
(29, 2, '2017-05-19 09:34:50', 'CPU Asus berhasil ditambahkan sebanyak 1', 'admin'),
(30, 2, '2017-05-19 11:28:24', 'CPU Asus berhasil ditambahkan sebanyak 1', 'admin'),
(31, 2, '2017-05-19 11:45:20', 'barang dengan kode SMKN02/00/2-001 dilokasikan ke Ruang A', 'admin');

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
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `nama_gambar` varchar(50) NOT NULL,
  `ukuruan` int(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_depan`, `nama_belakang`, `no_telepon`, `email`, `umur`, `alamat`, `nama_gambar`, `ukuruan`, `tipe`) VALUES
(2, 'vikri', 'srh', 'vikri', 'ramdhani', '081322158319', 'desta_ramdani@ymail.com', 17, 'jl.mawar sakti', 'IMG_20170129_162110.jpg', 65592, 'image/jpeg'),
(3, 'admin', 'admin', 'natsume', 'koi', '0897645626', 'natsun@gmail.com', 20, 'Jl. yu ke cimol', 'IMG_20170122_235231.jpg', 65592, 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis` varchar(30) NOT NULL,
  `deskripsi_brg` text NOT NULL,
  `kode_brg` varchar(50) NOT NULL,
  `merk_brg` varchar(20) NOT NULL,
  `no_seri` varchar(30) NOT NULL,
  `status_brg` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_jenis`, `deskripsi_brg`, `kode_brg`, `merk_brg`, `no_seri`, `status_brg`) VALUES
(18, '2', '-', 'SMKN02/1/2-001', 'Asus', '234knk', 'terpakai');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `barang_detail`
--

INSERT INTO `barang_detail` (`id_barang`, `id_jenis`, `kode_brg`, `merk_brg`, `no_seri`, `deskripsi`) VALUES
(1, 1, 'KB001', 'Lg', 'mntrLg56728', '-'),
(2, 2, 'KB002', 'Asus', '234knk', '-');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_brg`
--

CREATE TABLE IF NOT EXISTS `jenis_brg` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jenis_brg`
--

INSERT INTO `jenis_brg` (`id_jenis`, `nama`, `keterangan`) VALUES
(1, 'Monitor', '-'),
(2, 'CPU', '-');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_karyawan` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `kode_karyawan`, `nama_karyawan`, `no_telp`, `email`, `alamat`, `status`) VALUES
(1, 'KRYWN0001', 'Eugene Clay', '089776167', 'clay_eu@gmail.com', 'jl. padasuka indah no 1', 'kosong'),
(2, 'KRYWN0001', 'Eugene Clay', '089776167', 'clay_eu@gmail.com', 'jl. padasuka indah no 1', 'kosong'),
(3, 'KRYWN0001', 'Eugene Clay', '089776167', 'clay_eu@gmail.com', 'jl. padasuka indah no 1', 'kosong');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lok` varchar(40) NOT NULL,
  `tambahan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lok`, `tambahan`) VALUES
(1, 'Ruang A', '-'),
(2, 'Ruang B', '-'),
(3, 'Ruang C', '-'),
(4, 'Ruang D', '-'),
(5, 'Ruang E', '-');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_detail`
--

CREATE TABLE IF NOT EXISTS `lokasi_detail` (
  `Id_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lokasi` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`Id_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lokasi_detail`
--

INSERT INTO `lokasi_detail` (`Id_id`, `id_lokasi`, `date`, `id`) VALUES
(3, 1, '2017-05-19 11:45:20', 18);

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
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `pertayaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `nama_gambar` varchar(70) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `username`, `password`, `nama_depan`, `nama_belakang`, `no_telepon`, `email`, `umur`, `alamat`, `pertayaan`, `jawaban`, `nama_gambar`, `ukuran`, `tipe`) VALUES
(9, 'haha', 'haha', 'agungo', 'prodomono', '89324897', 'klnknfew@gmail.com', 23, 'jl. ah', 'siapa nama hewan peliharaan anda?', 'sahaaweh', 'IMG_20170122_235231.jpg', 234886, 'image/jpeg'),
(10, 'agus', 'agus ajah', 'agus', 'bie', '089863734', 'zzz@gmail.com', 39, '-', 'siapa nama hewan peliharaan anda?', 'sahawe', 'tumblr_static_tumblr_static_c834wfdqrcowgkcw0ogwwso4w_640.jpg', 213550, 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `kode_peminjaman` varchar(50) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`id_pengadaan`, `no_pengadaan`, `id_barang`, `id_suplier`, `id_petugas`, `jenis_pengadaan`, `tanggal`, `harga`, `jumlah`, `keterangan`) VALUES
(1, 'PB001', 1, 1, 2, 'pembelian', '2017-05-17', 530000, 5, '-'),
(2, 'PB002', 1, 1, 2, 'sumbangan', '2017-05-17', 0, 2, '-'),
(3, 'PB003', 1, 1, 9, 'pembelian', '2017-05-17', 100000, 2, '-'),
(4, 'PB004', 1, 1, 9, 'pembelian', '2017-05-17', 450000, 2, ''),
(5, 'PB005', 1, 3, 2, 'pembelian', '2017-05-19', 500000, 1, '-'),
(6, 'PB006', 2, 1, 2, 'pembelian', '2017-05-19', 60000, 2, ''),
(7, 'PB007', 2, 1, 2, 'pembelian', '2017-05-19', 20000, 1, '-'),
(8, 'PB008', 2, 1, 2, 'pembelian', '2017-05-19', 70000, 1, '-'),
(9, 'PB009', 2, 1, 2, 'pembelian', '2017-05-19', 120000, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE IF NOT EXISTS `suplier` (
  `id_suplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sup` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_suplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_sup`, `alamat`, `no_telepon`, `email`) VALUES
(1, 'CV. Kerjasama', 'Jl. aqua', '081322158319', 'desta_ramdani@ymail.com'),
(2, 'CV. Gotong Royong', '-', '08679839826', 'gg@ymail.com'),
(3, 'Cv. Kngn', 'jl. jln', '0908498720', 'deffggf@yahoo.cp.id');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `login_date` datetime NOT NULL,
  `logout_date` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id_log`, `id`, `login_date`, `logout_date`, `status`) VALUES
(1, 9, '2017-05-17 05:03:10', '2017-05-17 05:28:41', 'pegawai'),
(2, 2, '2017-05-17 05:28:54', '0000-00-00 00:00:00', 'admin'),
(3, 2, '2017-05-17 08:00:58', '2017-05-17 08:01:46', 'admin'),
(4, 2, '2017-05-17 08:05:11', '2017-05-17 10:12:37', 'admin'),
(5, 2, '2017-05-19 08:12:19', '0000-00-00 00:00:00', 'admin'),
(6, 2, '2017-05-19 08:12:19', '0000-00-00 00:00:00', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
