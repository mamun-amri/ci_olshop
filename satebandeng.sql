-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2020 at 07:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satebandeng`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `batas_bayar` date NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `tanggal_pesan`, `batas_bayar`, `status`) VALUES
(58, '2020-07-29', '2020-07-30', 'pending'),
(59, '2020-07-30', '2020-07-31', 'pending'),
(60, '2020-07-30', '2020-07-31', 'pending'),
(61, '2020-07-30', '2020-07-31', 'pending'),
(62, '2020-07-30', '2020-07-31', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `stok` int(100) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `harga`, `stok`, `gambar`) VALUES
(26, 'Sate bandeng', 'sate bandeng nikmat khas banten', '15000', 95, 'sate-bandeng.png'),
(27, 'Sate bandeng spesial', 'Sate bandeng spesial dengan tambahan bumbu ekstra', '20000', 98, 'satebandeng2.jpeg'),
(28, 'Sate bandeng dingin', 'Sate bandeng dengan sensasi dingin', '25000', 50, 'satebandeng4.jpeg'),
(29, 'Bekakak Ayam Pedas', 'Bekakak ayam khas banten', '60000', 97, 'satebandeng5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `distrik` varchar(128) NOT NULL,
  `type` varchar(128) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_invoice`, `id_user`, `id_transaksi`, `nama_penerima`, `telepon`, `alamat`, `provinsi`, `distrik`, `type`, `kodepos`, `catatan`) VALUES
(58, 58, 1, 35, 'Ahmad', '1231', 'jl. xxx, xxx', 'Kalimantan Tengah', 'Kotawaringin Timur', 'Kabupaten', 74364, 'Ukuran Baju L warna biru'),
(59, 59, 1, 36, 'Dodi irawan', '083812347898', 'jl. xxx, xxx', 'Banten', 'Lebak', 'Kabupaten', 42319, 'bekakak balado'),
(60, 60, 1, 37, 'Ibrohim', '23132123', 'jl. xxx, xxx', 'Banten', 'Serang', 'Kabupaten', 42182, 'sambel'),
(61, 61, 1, 0, 'asdasd', '1231233', 'jl. xxx, xxx', 'Jambi', 'Merangin', 'Kabupaten', 37319, 'asdasd'),
(62, 62, 5, 38, 'beny', '009890', 'serang cipocok', 'Banten', 'Serang', 'Kota', 42111, 'aha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan_detail`
--

CREATE TABLE `tb_pesanan_detail` (
  `id_pesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `kurir` varchar(12) NOT NULL,
  `paket` varchar(12) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `estimasi_pengiriman` varchar(20) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan_detail`
--

INSERT INTO `tb_pesanan_detail` (`id_pesanan`, `id_barang`, `id_invoice`, `qty`, `price`, `berat`, `kurir`, `paket`, `ongkir`, `estimasi_pengiriman`, `total_bayar`) VALUES
(55, 26, 55, 1, 15000, 1200, 'tiki', 'REG', 61000, '3', 76000),
(56, 26, 56, 1, 15000, 1200, 'pos', 'Paket Kilat ', 25000, '2-3 HARI', 40000),
(58, 26, 58, 1, 15000, 1200, 'tiki', 'REG', 51000, '3', 66000),
(59, 27, 59, 2, 20000, 1200, 'tiki', 'REG', 16000, '3', 236000),
(59, 29, 59, 3, 60000, 1200, 'tiki', 'REG', 16000, '3', 236000),
(60, 26, 60, 3, 15000, 1200, 'jne', 'REG', 9000, '2-3', 54000),
(61, 29, 61, 1, 60000, 1200, 'pos', 'Paket Kilat ', 46000, '4-5 HARI', 106000),
(62, 26, 62, 1, 15000, 1200, 'jne', 'OKE', 8000, '2-3', 23000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `status_code` int(11) NOT NULL,
  `status_message` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `gross_amount` int(255) NOT NULL,
  `payment_type` varchar(155) NOT NULL,
  `payment_code` int(255) NOT NULL,
  `transaction_time` varchar(255) NOT NULL,
  `transaction_status` varchar(255) NOT NULL,
  `fraud_status` varchar(100) NOT NULL,
  `bill_key` varchar(255) NOT NULL,
  `biller_code` varchar(255) NOT NULL,
  `pdf_url` text NOT NULL,
  `finish_redirect_url` text NOT NULL,
  `bank` varchar(100) NOT NULL,
  `va_number` varchar(100) NOT NULL,
  `bca_va_number` varchar(100) NOT NULL,
  `permata_va_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `status_code`, `status_message`, `transaction_id`, `order_id`, `gross_amount`, `payment_type`, `payment_code`, `transaction_time`, `transaction_status`, `fraud_status`, `bill_key`, `biller_code`, `pdf_url`, `finish_redirect_url`, `bank`, `va_number`, `bca_va_number`, `permata_va_number`) VALUES
(35, 201, 'Transaksi sedang diproses', '730d3160-b8a9-4f57-a46f-2dd093210db3', 733676339, 66000, 'bank_transfer', 0, '2020-07-29 14:11:00', 'Barang Telah di Terima', 'accept', '-', '-', 'https://app.sandbox.midtrans.com/snap/v1/transactions/6c40d20b-5805-49fa-97c5-a6b821cfd64a/pdf', 'http://example.com?order_id=733676339&status_code=201&transaction_status=pending', 'bca', '15731339365', '15731339365', '-'),
(36, 200, 'Success, transaction is found', 'f6eaee4a-ee9b-4bb1-938e-a15ff25fc4d9', 1034958773, 236000, 'bank_transfer', 0, '2020-07-30 08:09:06', 'Barang Telah di Terima', 'accept', '-', '-', 'https://app.sandbox.midtrans.com/snap/v1/transactions/54156bcf-29ac-44ea-bb93-e8ebdd4a1833/pdf', 'http://example.com?order_id=1034958773&status_code=201&transaction_status=pending', 'bni', '9881573105978825', '-', '-'),
(37, 200, 'Success, transaction is found', 'cdf5dc47-30e6-4b3e-95da-d241e721b852', 1760185966, 54000, 'bank_transfer', 0, '2020-07-30 10:33:29', 'Barang Telah di Terima', 'accept', '-', '-', 'https://app.sandbox.midtrans.com/snap/v1/transactions/c7a87b27-5080-497d-8317-238a027a1d7b/pdf', 'http://example.com?order_id=1760185966&status_code=201&transaction_status=pending', 'bca', '87017251311', '87017251311', '-'),
(38, 200, 'Success, transaction is found', '06f0db07-3c91-4b53-bb4b-55d276001540', 1262507115, 23000, 'bank_transfer', 0, '2020-07-30 11:17:14', 'Barang Telah di Terima', 'accept', '-', '-', 'https://app.sandbox.midtrans.com/snap/v1/transactions/a35cbe1b-28a0-41b1-8782-fc11878d519c/pdf', 'http://example.com?order_id=1262507115&status_code=201&transaction_status=pending', 'bca', '87017673496', '87017673496', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `gambar`, `password`, `role_id`) VALUES
(1, 'Dodi', 'dodiwkwk@gmail.com', 'kadal3_400x400.jpg', '$2y$10$Ir9nSql4XXLBDFJ2S8yUtuT2nx1TokAqzHklO1Z94YS1diEzZ9JWy', 1),
(4, 'Ahmad daruin', 'ahmadwkwk@gmail.com', 'default1.jpg', '$2y$10$PZ7HtKN52IjMh1Rz0GOPc.9uTut3nU20UOBA/FJSQcmWf2KgI04Pm', 2),
(5, 'darpi', 'dodi@gmail.com', 'default.jpg', '$2y$10$iQrBqpA52H2PQWrWEDLYZuv99TTFnEZMUvJ4n1qawgjqvK..2Mt4O', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_invoice` (`id_invoice`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_transaksi_2` (`id_transaksi`);

--
-- Indexes for table `tb_pesanan_detail`
--
ALTER TABLE `tb_pesanan_detail`
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_invoice` (`id_invoice`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
