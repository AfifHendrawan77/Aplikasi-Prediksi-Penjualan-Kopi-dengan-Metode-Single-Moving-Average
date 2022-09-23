-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2022 at 05:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedai_kamyusi`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan_peramalan`
--

CREATE TABLE `aturan_peramalan` (
  `id` int(20) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `tahun_peramalan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aturan_peramalan`
--

INSERT INTO `aturan_peramalan` (`id`, `nama_barang`, `tahun_peramalan`) VALUES
(3, 'Signature (Light)', '2022'),
(4, 'Signature (Bold)', '2022'),
(5, 'Signature (Mint)', '2022'),
(6, 'Signature (Sobad)', '2022'),
(7, 'Chocolate Latte', '2022'),
(8, 'Greentea Latte', '2022'),
(9, 'Redvelvet Latte', '2022'),
(10, 'Random', '2022'),
(11, 'Americano', '2022'),
(12, 'Longblack', '2022'),
(13, 'Coffe Latte', '2022'),
(14, 'Cappucino', '2022'),
(15, 'V60 / Japanese', '2022'),
(16, 'Vietnam Drip', '2022'),
(17, 'American Mix Meals', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `id` int(5) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`id`, `nama_produk`, `harga`, `berkas`, `deskripsi_produk`) VALUES
(1, 'Signature (Light)	', '18000', 'signature1.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(2, 'Signature (Bold)', '18000', 'signature1.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(3, 'Signature (Mint)', '18000', 'signature1.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(4, 'Signature (Sobad)', '20000', 'signature1.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(5, 'Chocolate Latte', '18000', 'chocolate.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(6, 'Greentea Latte', '18000', '1660823867_12a49c1ef091ab218ddb.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(28, 'Redvelvet Latte', '18000', 'Redvelvet.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(29, 'Random', '20000', 'random.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(30, 'Americano', '18000', 'Americano.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(31, 'Longblack', '18000', 'longblack.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(32, 'Coffe Latte', '18000', 'Coffe Latte.jpg', 'Dibuat dari 100% biji kopi pilihan yang masih fresh sesuai pesanan untuk kamu yang suka aroma khas dari kopi terbaik.'),
(33, 'Cappucino', '18000', 'capucino.jpg', 'Dibuat Dari 100% Biji Kopi Pilihan Yang Masih Fresh Sesuai Pesanan Untuk Kamu Yang Suka Aroma Khas Dari Kopi Terbaik.'),
(34, 'V60 / Japanese', '20000', 'v60.jpg', 'Dibuat Dari 100% Biji Kopi Pilihan Yang Masih Fresh Sesuai Pesanan Untuk Kamu Yang Suka Aroma Khas Dari Kopi Terbaik.'),
(35, 'Vietnam Drip', '18000', 'vietnamdrip.jpg', 'Dibuat Dari 100% Biji Kopi Pilihan Yang Masih Fresh Sesuai Pesanan Untuk Kamu Yang Suka Aroma Khas Dari Kopi Terbaik.'),
(36, 'American Mix Meals', '25000', 'american.jpg', 'Dibuat Dari 100% Biji Kopi Pilihan Yang Masih Fresh Sesuai Pesanan Untuk Kamu Yang Suka Aroma Khas Dari Kopi Terbaik.');

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE `investor` (
  `id` int(20) NOT NULL,
  `nama_investor` varchar(255) NOT NULL,
  `nohp_investor` varchar(255) NOT NULL,
  `alamat_investor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investor`
--

INSERT INTO `investor` (`id`, `nama_investor`, `nohp_investor`, `alamat_investor`) VALUES
(3, 'Munir Setiawan', '085281972517', 'Pabean Udik Indramayu'),
(7, 'Rizky Saputraaaaa', '0882127436604555', 'Indramayu');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(20) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `berkas`, `created_at`) VALUES
(1, 'Signature', 'signature.png', '2022-06-15 07:08:19'),
(2, 'Non-Coffe', 'non-coffe.png', '2022-06-15 07:08:34'),
(3, 'Moctails', 'moctails.png', '2022-06-15 07:10:31'),
(4, 'Coffe Again', 'coffeagain.png', '2022-06-15 07:11:11'),
(5, 'Manual Style', 'manual.png', '2022-06-15 07:11:30'),
(6, 'Food', 'cat-2.png', '2022-06-15 07:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `peramalan`
--

CREATE TABLE `peramalan` (
  `id` int(20) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `terjual` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peramalan`
--

INSERT INTO `peramalan` (`id`, `nama_barang`, `bulan`, `tahun`, `terjual`) VALUES
(15, 'Signature (Light)', 'Januari', '2022', '66'),
(19, 'Signature (Bold)', 'Januari', '2022', '60'),
(20, 'Signature (Mint)', 'Januari', '2022', '80'),
(21, 'Signature (Light)', 'Februari', '2022', '91'),
(22, 'Signature (Bold)', 'Februari', '2022', '78'),
(23, 'Signature (Mint)', 'Februari', '2022', '56'),
(24, 'Signature (Light)', 'Maret', '2022', '67'),
(25, 'Signature (Bold)', 'Maret', '2022', '76'),
(26, 'Signature (Mint)', 'Maret', '2022', '77'),
(27, 'Signature (Light)', 'April', '2022', '87'),
(28, 'Signature (Bold)', 'April', '2022', '78'),
(29, 'Signature (Mint)', 'April', '2022', '66'),
(31, 'Signature (Light)', 'Mei', '2022', '89'),
(32, 'Signature (Light)', 'Juni', '2022', '76'),
(33, 'Signature (Light)', 'Juli', '2022', '92'),
(34, 'Signature (Bold)', 'Mei', '2022', '89'),
(35, 'Signature (Bold)', 'Juni', '2022', '78'),
(37, 'Signature (Mint)', 'Mei', '2022', '78'),
(38, 'Signature (Mint)', 'Juni', '2022', '61'),
(41, 'Signature (Sobad)', 'Januari', '2022', '65'),
(42, 'Signature (Sobad)', 'Februari', '2022', '68'),
(43, 'Signature (Sobad)', 'Maret', '2022', '87'),
(44, 'Signature (Sobad)', 'April', '2022', '75'),
(45, 'Signature (Sobad)', 'Mei', '2022', '88'),
(46, 'Signature (Sobad)', 'Juni', '2022', '99'),
(47, 'Signature (Sobad)', 'Juli', '2022', '67'),
(48, 'Chocolate Latte', 'Januari', '2022', '68'),
(49, 'Chocolate Latte', 'Februari', '2022', '72'),
(50, 'Chocolate Latte', 'Maret', '2022', '85'),
(51, 'Chocolate Latte', 'April', '2022', '66'),
(52, 'Chocolate Latte', 'Mei', '2022', '88'),
(53, 'Chocolate Latte', 'Juni', '2022', '89'),
(54, 'Chocolate Latte', 'Juli', '2022', '78'),
(55, 'Greentea Latte', 'Januari', '2022', '68'),
(56, 'Greentea Latte', 'Februari', '2022', '73'),
(57, 'Greentea Latte', 'Maret', '2022', '76'),
(58, 'Greentea Latte', 'April', '2022', '79'),
(59, 'Greentea Latte', 'Mei', '2022', '83'),
(60, 'Greentea Latte', 'Juni', '2022', '68'),
(61, 'Greentea Latte', 'Juli', '2022', '75'),
(62, 'Redvelvet Latte', 'Januari', '2022', '65'),
(63, 'Redvelvet Latte', 'Februari', '2022', '78'),
(64, 'Redvelvet Latte', 'Maret', '2022', '74'),
(65, 'Redvelvet Latte', 'April', '2022', '89'),
(66, 'Redvelvet Latte', 'Mei', '2022', '88'),
(67, 'Redvelvet Latte', 'Juni', '2022', '83'),
(68, 'Redvelvet Latte', 'Juli', '2022', '84'),
(69, 'Random', 'Januari', '2022', '77'),
(70, 'Random', 'Februari', '2022', '67'),
(71, 'Random', 'Maret', '2022', '54'),
(72, 'Random', 'April', '2022', '83'),
(73, 'Random', 'Mei', '2022', '88'),
(74, 'Random', 'Juni', '2022', '69'),
(75, 'Random', 'Juli', '2022', '76'),
(76, 'Americano', 'Januari', '2022', '89'),
(77, 'Americano', 'Februari', '2022', '73'),
(78, 'Americano', 'Maret', '2022', '54'),
(79, 'Americano', 'April', '2022', '79'),
(80, 'Americano', 'Mei', '2022', '88'),
(81, 'Americano', 'Juni', '2022', '83'),
(82, 'Americano', 'Juli', '2022', '84'),
(83, 'Longblack', 'Januari', '2022', '78'),
(84, 'Longblack', 'Februari', '2022', '89'),
(85, 'Longblack', 'Maret', '2022', '85'),
(86, 'Longblack', 'April', '2022', '67'),
(87, 'Longblack', 'Mei', '2022', '99'),
(88, 'Longblack', 'Juni', '2022', '81'),
(89, 'Longblack', 'Juli', '2022', '67'),
(90, 'Coffe Latte', 'Januari', '2022', '67'),
(91, 'Coffe Latte', 'Februari', '2022', '78'),
(92, 'Coffe Latte', 'Maret', '2022', '74'),
(93, 'Coffe Latte', 'April', '2022', '83'),
(94, 'Coffe Latte', 'Mei', '2022', '99'),
(95, 'Coffe Latte', 'Juni', '2022', '87'),
(96, 'Coffe Latte', 'Juli', '2022', '88'),
(97, 'Cappucino', 'Januari', '2022', '67'),
(98, 'Cappucino', 'Februari', '2022', '67'),
(99, 'Cappucino', 'Maret', '2022', '89'),
(100, 'Cappucino', 'April', '2022', '77'),
(101, 'Cappucino', 'Mei', '2022', '89'),
(102, 'Cappucino', 'Juni', '78', '77'),
(103, 'Cappucino', 'Juli', '2022', '75'),
(104, 'V60 / Japanese', 'Januari', '2022', '89'),
(105, 'V60 / Japanese', 'Februari', '2022', '78'),
(106, 'V60 / Japanese', 'Maret', '2022', '76'),
(107, 'V60 / Japanese', 'April', '2022', '67'),
(108, 'V60 / Japanese', 'Mei', '2022', '83'),
(109, 'V60 / Japanese', 'Juni', '2022', '68'),
(110, 'V60 / Japanese', 'Juli', '2022', '84'),
(111, 'Vietnam Drip', 'Januari', '2022', '67'),
(112, 'Vietnam Drip', 'Februari', '2022', '78'),
(113, 'Vietnam Drip', 'Maret', '2022', '85'),
(114, 'Vietnam Drip', 'April', '2022', '89'),
(115, 'Vietnam Drip', 'Mei', '2022', '88'),
(116, 'Vietnam Drip', 'Juni', '2022', '83'),
(117, 'Vietnam Drip', 'Juli', '2022', '84'),
(118, 'American Mix Meals', 'Januari', '2022', '40'),
(119, 'American Mix Meals', 'Februari', '2022', '73'),
(120, 'American Mix Meals', 'Maret', '2022', '76'),
(121, 'American Mix Meals', 'April', '2022', '67'),
(122, 'American Mix Meals', 'Mei', '2022', '83'),
(123, 'American Mix Meals', 'Juni', '2022', '68'),
(124, 'American Mix Meals', 'Juli', '2022', '84');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(20) NOT NULL,
  `nama_produk` varchar(40) NOT NULL,
  `stok` int(20) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga`) VALUES
(1, 'Signature (Light)', 37, 25000),
(2, 'Signature (Bold)', 15, 25000),
(3, 'Signature (Mint)', 0, 25000),
(4, 'Signature (Sobad)', 10, 25000),
(5, 'Chocolate Latte', 0, 18000),
(6, 'Greentea Latte', 0, 18000),
(7, 'Redvelvet Latte', 0, 18000),
(8, 'Random', 0, 20000),
(9, 'Americano', 0, 18000),
(10, 'Longblack', 0, 18000),
(11, 'Coffe Latte', 0, 18000),
(12, 'Cappucino', 0, 18000),
(13, 'V60 / Japanese', 0, 20000),
(14, 'Vietnam Drip', 0, 18000),
(15, 'American Mix Meals', 0, 25000),
(26, 'Kopi Espresso test', 0, 18000),
(27, 'Americanoaa', 0, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `produk_masuk`
--

CREATE TABLE `produk_masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_supplier` varchar(100) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `stok_masuk` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk_masuk`
--

INSERT INTO `produk_masuk` (`id_masuk`, `id_produk`, `id_supplier`, `penerima`, `stok_masuk`, `created_at`) VALUES
(27, 1, '22', 'ilham karyawan', 10, '2022-08-18 02:24:31'),
(30, 4, '24', 'Wahyu', 10, '2022-08-18 02:44:06'),
(31, 2, '25', 'Wahyu', 15, '2022-08-18 15:13:33');

--
-- Triggers `produk_masuk`
--
DELIMITER $$
CREATE TRIGGER `delete` AFTER DELETE ON `produk_masuk` FOR EACH ROW UPDATE produk SET produk.stok = produk.stok - old.stok_masuk WHERE produk.id_produk = old.id_produk
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `j]` BEFORE UPDATE ON `produk_masuk` FOR EACH ROW UPDATE produk SET produk.stok = produk.stok + new.stok_masuk WHERE produk.id_produk = new.id_produk
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah` AFTER INSERT ON `produk_masuk` FOR EACH ROW BEGIN
	UPDATE produk SET stok = stok+NEW.stok_masuk
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update1` AFTER UPDATE ON `produk_masuk` FOR EACH ROW UPDATE produk SET produk.stok = produk.stok - old.stok_masuk WHERE produk.id_produk = old.id_produk
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `promosi`
--

CREATE TABLE `promosi` (
  `id` int(5) NOT NULL,
  `berkas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promosi`
--

INSERT INTO `promosi` (`id`, `berkas`) VALUES
(1, 'gambar1.jpg'),
(2, 'gambar2.jpg'),
(3, 'gambar3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(20) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `nohp_supplier` varchar(255) NOT NULL,
  `alamat_supplier` varchar(255) NOT NULL,
  `deskripsi_supplier` varchar(255) NOT NULL,
  `stok` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `supplier`
--
DELIMITER $$
CREATE TRIGGER `delete_stok_barang` AFTER DELETE ON `supplier` FOR EACH ROW UPDATE produk SET produk.stok = produk.stok - old.stok WHERE produk.id_produk = old.id_produk
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_stok_supplier` AFTER INSERT ON `supplier` FOR EACH ROW BEGIN
	UPDATE produk SET stok = stok+NEW.stok
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_barang` AFTER UPDATE ON `supplier` FOR EACH ROW UPDATE produk SET produk.stok = produk.stok - old.stok WHERE produk.id_produk = old.id_produk
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_barang2` BEFORE UPDATE ON `supplier` FOR EACH ROW UPDATE produk SET produk.stok = produk.stok + new.stok WHERE produk.id_produk = new.id_produk
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `supplierr`
--

CREATE TABLE `supplierr` (
  `id_supplier` int(20) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `nohp_supplier` varchar(20) NOT NULL,
  `alamat_supplier` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplierr`
--

INSERT INTO `supplierr` (`id_supplier`, `nama_supplier`, `nohp_supplier`, `alamat_supplier`, `tanggal`) VALUES
(22, 'Ilham Irwansyah', '08817717910', 'Jakarta', '2022-08-18 02:08:30'),
(23, 'Muhammad Iqbal', '085694334049', 'Yogyakarta', '2022-08-18 02:30:31'),
(24, 'Faris Ardiansyah', '088512738476', 'Bandung', '2022-08-18 02:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `kasir` varchar(100) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `qty` int(20) NOT NULL,
  `harga_awal` int(20) NOT NULL,
  `total_harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kasir`, `nama_pembeli`, `tgl_transaksi`, `nama_produk`, `qty`, `harga_awal`, `total_harga`) VALUES
(1, 'Afif Hendrawan', 'Iqbal', '2022-03-31', 'Americano', 2, 18000, 36000),
(14, 'Karyawan Kamyusi', 'afif hendrawan', '2022-04-01', 'Moctails', 2, 18000, 36000),
(15, 'Karyawan Kamyusi', 'afif hendrawan', '2022-04-01', 'Espresso', 2, 18000, 36000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_penjualan`
--

CREATE TABLE `transaksi_penjualan` (
  `id` int(11) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `kasir` varchar(100) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_awal` int(20) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_penjualan`
--

INSERT INTO `transaksi_penjualan` (`id`, `id_produk`, `kasir`, `nama_pembeli`, `jumlah`, `harga_awal`, `total_harga`, `created_at`) VALUES
(25, 0, 'Karyawan Kamyusi', 'ilham budiman', 2, 18000, 0, '2022-06-23 06:39:47'),
(26, 0, 'Karyawan Kamyusi', 'ilham budiman', 2, 5000, 12000, '2022-06-23 15:31:38'),
(27, 2, 'Karyawan Kamyusi', 'ilham budiman', 2, 5000, 10000, '2022-06-23 07:15:53'),
(28, 1, 'Karyawan Kamyusi', 'ilham budiman', 2, 18000, 36000, '2022-06-23 07:07:14'),
(29, 14, 'Karyawan Kamyusi', 'ilham budiman', 2, 18000, 36000, '2022-06-23 09:47:50'),
(30, 8, 'Karyawan Kamyusi', 'test', 2, 18000, 36000, '2022-06-23 09:49:37'),
(33, 1, 'Karyawan Kamyusi', 'afif', 2, 18000, 36000, '2022-07-20 03:51:47'),
(34, 1, 'Karyawan Kamyusi', 'ilham budiman', 2, 25000, 50000, '2022-01-12 06:10:44'),
(35, 1, 'Karyawan Kamyusi', 'Raja ', 64, 25000, 1650000, '2022-01-21 06:13:29'),
(36, 1, 'Karyawan Kamyusi', 'Raja ', 51, 25000, 1275000, '2022-02-18 06:18:24'),
(37, 1, 'Karyawan Kamyusi', 'afifah', 40, 25000, 1000000, '2022-02-19 06:19:11'),
(38, 1, 'Karyawan Kamyusi', 'ageng', 20, 25000, 500000, '2022-03-24 06:21:05'),
(39, 1, 'Karyawan Kamyusi', 'ali', 20, 25000, 500000, '2022-03-26 06:21:22'),
(40, 1, 'Karyawan Kamyusi', 'rapi', 2, 25000, 50000, '2022-03-27 06:21:39');

--
-- Triggers `transaksi_penjualan`
--
DELIMITER $$
CREATE TRIGGER `delete_transaksi` AFTER DELETE ON `transaksi_penjualan` FOR EACH ROW UPDATE produk SET produk.stok = produk.stok + old.jumlah WHERE produk.id_produk = old.id_produk
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `stok_barang` AFTER INSERT ON `transaksi_penjualan` FOR EACH ROW BEGIN
	UPDATE produk SET stok = stok-NEW.jumlah
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `phone_no` varchar(120) DEFAULT NULL,
  `role` enum('owner','karyawan') NOT NULL,
  `password` varchar(120) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_no`, `role`, `password`, `created_at`) VALUES
(1, 'Owner Kamyusi', 'ownerkamyusi@gmail.com', '088212743660', 'owner', '$2y$10$RqTArB7OriNDs5FEqJcu3uarL16H4mG.haBHaU7asYaQsLLUE17I2', '2022-03-19 01:51:06'),
(2, 'Karyawan Kamyusi', 'karyawankamyusi@gmail.com', '088212743661', 'karyawan', '$2y$10$RqTArB7OriNDs5FEqJcu3uarL16H4mG.haBHaU7asYaQsLLUE17I2', '2022-03-19 01:51:06'),
(3, 'afifhendr', 'afifhendrawan77@gmail.com', '088212343660', 'owner', '$2y$10$NL9mfE/DYoodXvtV8EkGS.rc8Sk8bt5CSTE8Jlc9OWXOdE3d/VfsG', '2022-03-19 07:39:55'),
(8, 'Adam', 'iqbalmm@gmail.com', '088212343660', 'karyawan', '$2y$10$Pj/0y2a6a1UhnfN8ilBHI.Fbvxj40yXG8TRYPaASN.Vu7bFiHIrfe', '2022-03-22 13:52:19'),
(13, 'Aditya Rachman123', 'adityakamyusi123@gmail.com', '088212343660', 'owner', '$2y$10$fgZRCb3E2SBTIGnXesedcuhX6wgxEwYdUfImlj8k/.4Qo9vTBqJv2', '2022-07-25 15:05:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan_peramalan`
--
ALTER TABLE `aturan_peramalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peramalan`
--
ALTER TABLE `peramalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produk_masuk`
--
ALTER TABLE `produk_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplierr`
--
ALTER TABLE `supplierr`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aturan_peramalan`
--
ALTER TABLE `aturan_peramalan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `investor`
--
ALTER TABLE `investor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `peramalan`
--
ALTER TABLE `peramalan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `produk_masuk`
--
ALTER TABLE `produk_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `promosi`
--
ALTER TABLE `promosi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `supplierr`
--
ALTER TABLE `supplierr`
  MODIFY `id_supplier` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
