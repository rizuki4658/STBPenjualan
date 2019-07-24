-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 10:01 AM
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
('admin', 'admin', 'admin', 'admin', 'admin'),
('aku', 'aku', 'aku', 'aku', 'bpjs.jpg');

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
(3, '3', '3', '3', '3', '3');

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
(1, '1', '2018-03-07', 2, 'qwert', 'sdfa', 'dsa', 'we', 2, 2, 'qwert', '12', '12');

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
  `harga_satuan` decimal(10,0) NOT NULL,
  `jml` decimal(10,0) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `ppn` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `no_inv`, `tgl_inv`, `no_po`, `id_k`, `nm_k`, `alamat_k`, `telp_k`, `email_k`, `nm_pekerjaan`, `kode_brg`, `nm_brg`, `merk_brg`, `spek_brg`, `qty`, `satuan`, `harga_satuan`, `jml`, `sub_total`, `ppn`, `total`) VALUES
(2, '0310/STB-DO/II/2018', '2018-03-02', 1, 1, 'ddd', 'ddd', '999', 'ddd', 'ggg', 1, 'abc', 'abc', 'abc', '5000', 'unnn', '100', '10', '19', '19', '10'),
(3, '0310/STB-DO/II/2018', '2018-03-03', 2, 2, 'asad', 'sdfa', 'dsa', 'we', 'asdfgh', 2, 'qwert', 'qwer', 'qwer', '4000', '12', '12', '12', '12', '12', '12'),
(4, '0310/STB-DO/II/2018', '2018-03-04', 3, 3, '3', '3', '3', '3', 'eee', 3, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3');

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
(1, 'ddd', 'ddd', '999', 'ddd'),
(2, 'asad', 'sdfa', 'dsa', 'we'),
(3, '3', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE `kwitansi` (
  `no_kw` varchar(30) NOT NULL,
  `no_referensi` varchar(30) NOT NULL,
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
('1', '1', '2018-02-28', 3, '3', 'eee', '3'),
('kw02', '02', '2018-03-02', 1, 'ddd', 'ggg', '10'),
('kw03', '03', '2018-03-03', 2, 'asad', 'asdfgh', '12'),
('kw04', '04', '2018-03-05', 3, '3', 'eee', '3');

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
(1, '2018-03-01', '2018-03-15', 1, 'ddd', 'ddd', '999', 'ddd', 'ggg', 1, 'abc', 'abc', 'abc', '5000', 'unnn', '100', '10', '19', '19', '10'),
(2, '2018-03-01', '2018-03-05', 2, 'asad', 'sdfa', 'dsa', 'we', 'asdfgh', 2, 'qwert', 'qwer', 'qwer', '4000', '12', '12', '12', '12', '12', '12'),
(3, '2018-03-02', '2018-03-05', 3, '3', '3', '3', '3', 'eee', 3, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3');

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
(1, 12, '2018-03-04', '12000');

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
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
