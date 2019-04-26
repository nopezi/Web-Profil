-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2019 at 08:08 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1354976_apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE `data_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `harga_obat` decimal(15,0) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_obat`
--

INSERT INTO `data_obat` (`id_obat`, `nama_obat`, `harga_obat`, `keterangan`) VALUES
(5, 'A-B VASK TABLET 10 MG', '363000', 'TABLET 10 MG X 30 BIJI.'),
(6, 'A-B VASK TABLET 5 MG', '208725', 'TABLET 5 MG X 30 BIJI.'),
(7, 'A-D PLEX ORAL DROPS', '10286', 'TETES 15 ML.	'),
(9, 'ABAJOS CAPSULE', '110286', 'KAPSUL 10 X 10 S	'),
(10, 'ABBOTIC DRY SYRUP 125 MG/5 ML 30 ML', '124630', 'DRY SIRUP 125 MG/5 ML X 30 ML'),
(11, 'ABBOTIC DRY SYRUP 125 MG/5 ML 60 ML', '199529', 'DRY SIRUP 125 MG/5 ML X 60 ML.'),
(12, 'ABBOTIC GRANULES 250MG', '260513', '50 ML\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `jk` char(10) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tgl_lhr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nama_pegawai`, `jk`, `alamat`, `tgl_lhr`) VALUES
(1, 'habibi', 'lelaki', 'gunung kidul', '1994-12-01'),
(2, 'putra', 'Laki-laki', 'bantul. jogjakarta', '1994-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`id_transaksi`, `nama_pelanggan`, `nama_obat`, `harga_obat`, `jumlah_obat`, `alamat`) VALUES
(1, 'kholid', 'betadin', 10000, 5, 'jogjakarta'),
(2, 'sugiono', 'oralit', 15000, 2, 'sleman, yogyakarta'),
(22, 'paijo', 'A-B VASK TABLET 10 MG', 363000, 15, 'bantul, yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_file`, `nama_file`, `judul`, `isi`, `kategori`) VALUES
(19, 'a.jpg', 'Sistem Informasi Laporan Keuangan.', '<p><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">sistem informasi ini berisi tentang laporan keuangan karyawan pada perusahaan jasa sewa proyektor, dimana disediakan halaman khusus karyawan yang terdapat fitur untuk mengisi data profil lengkap serta pencatatan setiap dari transaksi penyewaan proyektor yang dilakukan, untuk demo nya, silahkan klik</span></span> <a href=\"http://nopezi.ga/kahyangan/\">DISINI</a></p>\r\n', 'Project'),
(20, 'b.JPG', 'Sistem Informasi apotek sederhana', '<p><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">sistem informasi ini berisi tentang data apotek, dari data obat, harga, hingga transaksi yang dilakukan. aplikasi ini masih sederhana yang hanya dalam bentuk halaman admin, untuk demo nya, silahkan klik <a href=\"http://nopezi.ga/apotek/\">DISINI</a></span></span></p>\r\n', 'Project'),
(21, 'c.JPG', 'Sistem Informasi Geografis Kabupaten Rembang', '<p><span style=\"font-size:14px\"><span style=\"font-family:Comic Sans MS,cursive\">sistem informasi ini berisi tentang data lokasi suatu daerah beserta map nya. sistem informasi ini masih terintergasi dengan google map dan google spreatsheet dimana data yang ditampilkan disimpan pada google drive, untuk demo nya, silahkan klik <a href=\"http://nopezi.ga/gis/\">DISINI</a></span></span></p>\r\n', 'Project'),
(22, '5ZRU4T6-fairy-tail-wallpaper-hd.jpg', 'contoh', '<p>contoh</p>\r\n', 'Artikel'),
(23, 'pas foto.jpg', 'About Me', '<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>Name&nbsp;:</strong>&nbsp;</span></p>\r\n\r\n<p style=\"text-align:center\">Nopezi Saputra Pratama</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>Place, Date of Birth :</strong></span></p>\r\n\r\n<p style=\"text-align:center\">Bengkulu 7 November 1994</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>Gender :</strong>&nbsp;</span></p>\r\n\r\n<p style=\"text-align:center\">Male</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>Marital Status :</strong></span></p>\r\n\r\n<p style=\"text-align:center\">Unmarried</p>\r\n\r\n<p style=\"text-align:center\"><strong><span style=\"font-size:16px\">Religion :</span></strong></p>\r\n\r\n<p style=\"text-align:center\">Islam</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I graduated from STMIK El Rahma Yogyakarta Department of Information Engineering with level Bachelor Degree in Computer Science. I was active in KSL (Kelompok Study Linux) activity unit focused on technology at my campus, and also active in various organizations on my campus such as, member on ICC (Informatic Computer Club) and&nbsp;EIC (El rahma Islamic Center).</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Profil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_file`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
