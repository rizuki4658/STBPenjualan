-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 12:31 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--
CREATE DATABASE IF NOT EXISTS `db_penjualan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_penjualan`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `email`, `foto`) VALUES
('pria', '12345', 'pria ghotama', 'pria@ghotam.com', 'Koala.jpg'),
('rilfahmi', '123', 'ril fahmi', 'rilfahmi@gmail.com', 'Capture.PNG'),
('rizki', '1234', 'rizki khair', 'rizki@gmail.com', 'logo hi res4.png');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_brg` int(11) NOT NULL,
  `nm_brg` varchar(30) NOT NULL,
  `merk_brg` varchar(30) NOT NULL,
  `spek_brg` varchar(150) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `harga_brg` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_brg`, `nm_brg`, `merk_brg`, `spek_brg`, `satuan`, `harga_brg`) VALUES
(1, 'abc', 'abc', 'abc', 'abc', '5000'),
(2, 'qwert', 'qwer', 'qwer', 'qwer', '4000'),
(3, 'ad', 'asd', 'adasdzxcx', '123', '3000000'),
(4, '2', '2', '2', 'Unit', '120000'),
(5, '5', '5', '5', '5', '550000'),
(6, '6', '6', '6', '6', '66000000'),
(8, '8', '8', '8', '8', '8000000'),
(9, '9', '9', '9', '9', '90000000');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `no_do` varchar(30) NOT NULL,
  `tgl_do` date NOT NULL,
  `id_k` int(11) NOT NULL,
  `nm_k` longtext NOT NULL,
  `alamat_k` longtext NOT NULL,
  `telp_k` varchar(15) NOT NULL,
  `email_k` varchar(30) NOT NULL,
  `no_po` int(11) NOT NULL,
  `kode_brg` int(11) NOT NULL,
  `nm_brg` varchar(30) NOT NULL,
  `jml_brg` varchar(20) NOT NULL,
  `satuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `no_do`, `tgl_do`, `id_k`, `nm_k`, `alamat_k`, `telp_k`, `email_k`, `no_po`, `kode_brg`, `nm_brg`, `jml_brg`, `satuan`) VALUES
(4, '1', '2018-03-09', 1, 'Pria Ghotam', 'Ciamis', '0838256667180', 'priaghotam@batman.com', 1, 3, 'ad', '2', '123'),
(5, '1', '2018-03-10', 1, 'Pria Ghotam', 'Ciamis', '0838256667180', 'priaghotam@batman.com', 1, 3, 'ad', '2', '123'),
(6, '1', '2018-03-11', 1, 'Pria Ghotam', 'Ciamis', '0838256667180', 'priaghotam@batman.com', 1, 3, 'ad', '2', '123'),
(7, '1', '2018-03-12', 1, 'Pria Ghotam', 'Ciamis', '0838256667180', 'priaghotam@batman.com', 1, 3, 'ad', '2', '123'),
(8, '2', '2018-03-14', 1, 'Pria Ghotam', 'Ciamis', '0838256667180', 'priaghotam@batman.com', 1, 3, 'ad', '2', '123');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_filter`
--

CREATE TABLE `delivery_filter` (
  `nomor_do` varchar(30) NOT NULL,
  `do` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_filter`
--

INSERT INTO `delivery_filter` (`nomor_do`, `do`) VALUES
('1', 1),
('2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_po`
--

CREATE TABLE `delivery_po` (
  `nomor_po` varchar(30) NOT NULL,
  `PO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_po`
--

INSERT INTO `delivery_po` (`nomor_po`, `PO`) VALUES
('1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `no_inv` varchar(30) NOT NULL,
  `tgl_inv` date NOT NULL,
  `no_po` int(11) NOT NULL,
  `id_k` int(11) NOT NULL,
  `nm_k` varchar(30) NOT NULL,
  `alamat_k` longtext NOT NULL,
  `telp_k` varchar(15) NOT NULL,
  `email_k` varchar(30) NOT NULL,
  `nm_pekerjaan` varchar(100) NOT NULL,
  `kode_brg` int(11) NOT NULL,
  `nm_brg` varchar(30) NOT NULL,
  `merk_brg` varchar(30) NOT NULL,
  `spek_brg` longtext NOT NULL,
  `qty` varchar(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jml` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `ppn` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `no_inv`, `tgl_inv`, `no_po`, `id_k`, `nm_k`, `alamat_k`, `telp_k`, `email_k`, `nm_pekerjaan`, `kode_brg`, `nm_brg`, `merk_brg`, `spek_brg`, `qty`, `satuan`, `harga_satuan`, `jml`, `sub_total`, `ppn`, `total`) VALUES
(2, '1', '2018-03-01', 1, 1, 'Pria Ghotam', 'Ciamis', '0838256667180', 'priaghotam@batman.com', 'Proyek Skripsi', 3, 'ad', 'asd', 'adasdzxcx', '2', '123', 3000000, 6000000, 6000000, 600000, 5400000),
(3, '1', '2018-03-08', 3, 13, 'Rizki Khair', 'Garut', '082128956608', 'rizkikhair@gmail.com', 'Proyek Skripsi', 6, '6', '6', '6', '1', '6', 66000000, 66000000, 66000000, 6600000, 59400000),
(4, '1', '2018-03-10', 1, 1, 'Pria Ghotam', 'Ciamis', '0838256667180', 'priaghotam@batman.com', 'Proyek Skripsi', 3, 'ad', 'asd', 'adasdzxcx', '2', '123', 3000000, 6000000, 6000000, 600000, 5400000),
(5, '4', '2018-03-06', 2, 2, 'Ril Fahmi', 'Kalimantan', '081237897707', 'fahmi@pupuk.com', 'Proyek Skripsi', 8, '8', '8', '8', '1', '8', 8000000, 8000000, 8000000, 800000, 7200000);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_filter`
--

CREATE TABLE `invoice_filter` (
  `nomor_inv` varchar(30) NOT NULL,
  `INV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_filter`
--

INSERT INTO `invoice_filter` (`nomor_inv`, `INV`) VALUES
('1', 1),
('4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_po`
--

CREATE TABLE `invoice_po` (
  `nomor_po` varchar(30) NOT NULL,
  `PO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_po`
--

INSERT INTO `invoice_po` (`nomor_po`, `PO`) VALUES
('1', 1),
('2', 1),
('3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_k` int(11) NOT NULL,
  `nm_k` varchar(30) NOT NULL,
  `alamat_k` varchar(100) NOT NULL,
  `telp_k` varchar(15) NOT NULL,
  `email_k` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_k`, `nm_k`, `alamat_k`, `telp_k`, `email_k`) VALUES
(1, 'Pria Ghotam', 'Ciamis', '0838256667180', 'priaghotam@batman.com'),
(2, 'Ril Fahmi', 'Kalimantan', '081237897707', 'fahmi@pupuk.com'),
(13, 'Rizki Khair', 'Garut', '082128956608', 'rizkikhair@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE `kwitansi` (
  `no_kw` int(11) NOT NULL,
  `no_referensi` int(11) NOT NULL,
  `tgl_kw` date NOT NULL,
  `id_k` int(11) NOT NULL,
  `nm_k` varchar(30) NOT NULL,
  `nm_pekerjaan` varchar(100) NOT NULL,
  `jml_byr` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kwitansi`
--

INSERT INTO `kwitansi` (`no_kw`, `no_referensi`, `tgl_kw`, `id_k`, `nm_k`, `nm_pekerjaan`, `jml_byr`) VALUES
(1, 23, '2018-02-01', 1, 'Pria Ghotam', 'Proyek Skripsi', '5400000'),
(3, 3, '2018-04-28', 13, 'Rizki Khair', 'Proyek Skripsi', '59400000'),
(12, 12, '2018-03-15', 2, 'Ril Fahmi', 'Proyek Empat', '990000');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `no_po` int(11) NOT NULL,
  `tgl_po` date NOT NULL,
  `tgl_deadline` date NOT NULL,
  `id_k` int(11) NOT NULL,
  `nm_k` varchar(30) NOT NULL,
  `alamat_k` varchar(100) NOT NULL,
  `telp_k` varchar(15) NOT NULL,
  `email_k` varchar(30) NOT NULL,
  `nm_pekerjaan` varchar(100) NOT NULL,
  `kode_brg` int(11) NOT NULL,
  `nm_brg` varchar(30) NOT NULL,
  `merk_brg` varchar(30) NOT NULL,
  `spek_brg` varchar(150) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga_satuan` decimal(11,0) NOT NULL,
  `jml` decimal(10,0) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `ppn` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`no_po`, `tgl_po`, `tgl_deadline`, `id_k`, `nm_k`, `alamat_k`, `telp_k`, `email_k`, `nm_pekerjaan`, `kode_brg`, `nm_brg`, `merk_brg`, `spek_brg`, `qty`, `satuan`, `harga_satuan`, `jml`, `sub_total`, `ppn`, `total`) VALUES
(1, '2018-03-09', '2018-03-22', 1, 'Pria Ghotam', 'Ciamis', '0838256667180', 'priaghotam@batman.com', 'Proyek Skripsi', 3, 'ad', 'asd', 'adasdzxcx', '2', '123', '3000000', '6000000', '6000000', '600000', '5400000'),
(2, '2018-03-09', '2018-03-30', 2, 'Ril Fahmi', 'Kalimantan', '081237897707', 'fahmi@pupuk.com', 'Proyek Skripsi', 3, '8', '8', '8', '1', '8', '8000000', '8000000', '8000000', '800000', '7200000'),
(3, '2018-04-09', '2018-03-30', 13, 'Rizki Khair', 'Garut', '082128956608', 'rizkikhair@gmail.com', 'Proyek Skripsi', 6, '6', '6', '6', '1', '6', '66000000', '66000000', '66000000', '6600000', '59400000'),
(4, '2018-03-02', '2018-03-16', 2, 'Ril Fahmi', 'Kalimantan', '081237897707', 'fahmi@pupuk.com', 'Proyek Empat', 5, '5', '5', '5', '2', '5', '550000', '1100000', '1100000', '110000', '990000');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `no_referensi` int(11) NOT NULL,
  `no_inv` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jml_bayar` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`no_referensi`, `no_inv`, `tanggal`, `jml_bayar`) VALUES
(1, 123, '2018-02-16', '1200000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama`, `email`, `foto`) VALUES
('aaa', 'aaaa1', 'aaaaa', 'aaaaa', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_filter`
--
ALTER TABLE `delivery_filter`
  ADD PRIMARY KEY (`nomor_do`);

--
-- Indexes for table `delivery_po`
--
ALTER TABLE `delivery_po`
  ADD PRIMARY KEY (`nomor_po`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_filter`
--
ALTER TABLE `invoice_filter`
  ADD PRIMARY KEY (`nomor_inv`);

--
-- Indexes for table `invoice_po`
--
ALTER TABLE `invoice_po`
  ADD PRIMARY KEY (`nomor_po`);

--
-- Indexes for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`no_kw`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`no_po`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`no_referensi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
