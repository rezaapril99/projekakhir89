-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 01:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survei`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `frekuensi` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `nama`, `umur`, `jk`, `kategori`, `frekuensi`, `tgl`) VALUES
(12, 'reza', 23, 'Perempuan', 'Retail', 'Sering', '2023-01-02'),
(13, 'april', 23, 'Perempuan', 'Retail', 'Sering', '2023-01-02'),
(14, 'dimas', 25, 'Laki-Laki', 'Grosir', 'Sering', '2023-01-05'),
(15, 'eko', 32, 'Laki-Laki', 'Grosir', 'Sering', '2023-01-11'),
(16, 'eko', 0, 'Laki-Laki', 'Retail', 'Pertama Kali', '2023-01-03'),
(17, 'lina', 23, 'Perempuan', 'Grosir', 'Sering', '2023-01-11'),
(18, 'ika', 25, 'Perempuan', 'Grosir', 'Sering', '2023-01-11'),
(19, 'dina', 24, 'Perempuan', 'Grosir', 'Sering', '2023-01-12'),
(20, 'intan', 23, 'Perempuan', 'Grosir', 'Sering', '2023-01-13'),
(21, 'indah', 24, 'Perempuan', 'Retail', 'Sering', '2023-01-13'),
(22, 'dimas', 24, 'Perempuan', 'Grosir', 'Sering', '2023-01-13'),
(23, 'haki', 20, 'Perempuan', 'Grosir', 'Pertama Kali', '2023-01-13'),
(24, 'dani', 21, 'Perempuan', 'Grosir', 'Sering', '2023-01-13'),
(25, 'akbar', 21, 'Perempuan', 'Grosir', 'Sering', '2023-01-13'),
(26, 'dika', 21, 'Perempuan', 'MiniMarket', 'Pertama Kali', '2023-01-13'),
(27, '', 23, 'Perempuan', 'Retail', 'Pertama Kali', '2023-01-13'),
(28, 'bayu', 25, 'Perempuan', 'Grosir', 'Sering', '2023-01-22'),
(29, 'bima', 26, 'Perempuan', 'Retail', 'Pertama Kali', '2023-01-22'),
(30, '', 0, '', '', '', '0000-00-00'),
(31, 'hakim', 23, 'Perempuan', 'Grosir', 'Sering', '2023-01-22'),
(32, 'haki', 21, 'Perempuan', 'Grosir', 'Sering', '2023-01-22'),
(33, 'teyung', 25, 'Perempuan', 'Grosir', 'Sering', '2023-01-22'),
(34, 'arsa', 23, 'Laki-Laki', 'Retail', 'Pertama Kali', '2023-01-23'),
(35, 'diana', 25, 'Perempuan', 'Retail', 'Pertama Kali', '2023-01-25'),
(36, 'dude', 25, 'Laki-Laki', 'Retail', 'Pertama Kali', '2023-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deskripsi`
--

CREATE TABLE `tbl_deskripsi` (
  `id` int(11) NOT NULL,
  `nama_deskripsi` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_deskripsi`
--

INSERT INTO `tbl_deskripsi` (`id`, `nama_deskripsi`, `id_kategori`) VALUES
(1, 'Pegawai sigap dalam melayani konsumen', 1),
(2, 'Pegawai dapat memberikan layanan sesuai dengan kebutuhan konsumen', 1),
(7, 'Pengiriman barang tepat waktu', 1),
(8, 'Pelayanan pembayaran pada kasir dilakukan dengan baik dan cepat', 2),
(9, 'Sales menginformasikan atau menawarkan promo-promo yang ada pada pelanggan', 2),
(10, 'Sales tanggap dalam mejelaskan produk yang tidak diketahui oleh pelanggan', 2),
(11, 'Pelanggan merasa aman dan nyaman dalam bertransaksi di PT. Mitra Gemilang Inti Perkasa Pekalongan', 3),
(12, 'Semua kebutuhan yang dicari pelanggan pasti tersedia di PT. Mitra Gemilang Inti Perkasa Pekalongan', 3),
(13, 'Pegawai dan sales tidak pernah lupa memberika bukti nota ketika nota sudah lunas', 3),
(14, 'Pihak distributor bersedia menerima pengembalian barang apabila terdapat barang yang cacat atau barang tidak dalam kondisi baik', 3),
(15, 'Pihak distributor selalu mengirimkan barang dalam kondisi yang baik', 3),
(16, 'Pihak distributor bersedia mengganti apabila ada barang yang salah kirim', 3),
(17, 'Pegawai melayani pelanggan dengan ramah', 4),
(18, 'Sales selalu bertanya tentang barang yang dibutuhkan pelanggan', 4),
(19, 'Kondisi distributor tertata dengan rapi dan bersih', 5),
(20, 'Produk yang dikirimkan dalam kondisi baik dan tidak cacat', 5),
(21, 'Penampilan pegawai rapi dan bersih', 5),
(22, 'Produk-produk yang dijual lengkap', 5),
(23, 'Produk-produk yang dijual dalam keadaan baik dan tidak cacat', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Kehandalan'),
(2, 'Daya Tanggap'),
(3, 'Jaminan'),
(4, 'Empati'),
(5, 'Bukti Fisik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuesioner_harapan`
--

CREATE TABLE `tbl_kuesioner_harapan` (
  `id` int(11) NOT NULL,
  `id_responden` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p6` int(11) NOT NULL,
  `p7` int(11) NOT NULL,
  `p8` int(11) NOT NULL,
  `p9` int(11) NOT NULL,
  `p10` int(11) NOT NULL,
  `p11` int(11) NOT NULL,
  `p12` int(11) NOT NULL,
  `p13` int(11) NOT NULL,
  `p14` int(11) NOT NULL,
  `p15` int(11) NOT NULL,
  `p16` int(11) NOT NULL,
  `p17` int(11) NOT NULL,
  `p18` int(11) NOT NULL,
  `p19` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kuesioner_harapan`
--

INSERT INTO `tbl_kuesioner_harapan` (`id`, `id_responden`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`) VALUES
(1, 12, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(2, 13, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(3, 14, 4, 3, 4, 3, 3, 3, 3, 3, 3, 4, 4, 3, 3, 4, 3, 4, 4, 4, 4),
(4, 15, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(5, 16, 3, 4, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(6, 17, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(7, 18, 4, 3, 4, 4, 4, 4, 3, 3, 4, 4, 3, 4, 4, 3, 4, 4, 4, 4, 4),
(8, 19, 3, 3, 3, 4, 4, 3, 3, 3, 3, 3, 4, 3, 3, 3, 4, 3, 4, 3, 4),
(9, 20, 4, 3, 4, 4, 4, 4, 4, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 3, 3),
(10, 21, 4, 4, 4, 4, 4, 3, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3),
(11, 22, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(12, 23, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(13, 24, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(14, 25, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 3, 3, 3),
(15, 26, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(16, 27, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(17, 28, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(18, 29, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(19, 30, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(20, 31, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(21, 32, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(22, 33, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(23, 34, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(24, 35, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(25, 36, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuesioner_kenyataan`
--

CREATE TABLE `tbl_kuesioner_kenyataan` (
  `id` int(11) NOT NULL,
  `id_responden` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p6` int(11) NOT NULL,
  `p7` int(11) NOT NULL,
  `p8` int(11) NOT NULL,
  `p9` int(11) NOT NULL,
  `p10` int(11) NOT NULL,
  `p11` int(11) NOT NULL,
  `p12` int(11) NOT NULL,
  `p13` int(11) NOT NULL,
  `p14` int(11) NOT NULL,
  `p15` int(11) NOT NULL,
  `p16` int(11) NOT NULL,
  `p17` int(11) NOT NULL,
  `p18` int(11) NOT NULL,
  `p19` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kuesioner_kenyataan`
--

INSERT INTO `tbl_kuesioner_kenyataan` (`id`, `id_responden`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`) VALUES
(1, 12, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(2, 13, 3, 3, 2, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 3, 3, 3, 3, 3),
(3, 14, 3, 3, 4, 3, 3, 3, 3, 3, 3, 4, 4, 3, 3, 4, 3, 4, 4, 4, 3),
(4, 15, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(5, 16, 2, 3, 4, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 17, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(7, 18, 3, 3, 4, 4, 3, 3, 3, 4, 3, 3, 4, 3, 3, 3, 4, 4, 4, 3, 4),
(8, 19, 3, 3, 3, 4, 4, 3, 3, 3, 3, 3, 4, 3, 3, 3, 4, 3, 4, 3, 4),
(9, 20, 4, 3, 4, 4, 4, 4, 4, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 3, 3),
(10, 21, 4, 4, 4, 4, 4, 3, 4, 4, 3, 4, 3, 3, 3, 4, 3, 4, 3, 4, 4),
(11, 22, 3, 4, 3, 4, 4, 3, 4, 4, 3, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4),
(12, 23, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 3, 3, 3, 3, 4, 4, 3, 4, 4),
(13, 24, 3, 4, 4, 4, 3, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4),
(14, 25, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 3, 3, 3),
(15, 26, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(16, 27, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(17, 28, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(18, 29, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(19, 30, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(20, 31, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(21, 32, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(22, 33, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(23, 34, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(24, 35, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(25, 36, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pernyataan`
--

CREATE TABLE `tbl_pernyataan` (
  `id` int(11) NOT NULL,
  `pernyataan` varchar(50) NOT NULL,
  `skor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pernyataan`
--

INSERT INTO `tbl_pernyataan` (`id`, `pernyataan`, `skor`) VALUES
(1, 'Sangat Tidak Memuaskan', 1),
(2, 'Tidak Memuaskan', 2),
(3, 'Cukup Memuaskan', 3),
(4, 'Memuaskan', 4),
(5, 'Sangat Memuaskan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`, `email`) VALUES
(7, 'Reza Apriliani', 'reza', '$2y$10$xUTgZ.BMT9LcbIrG74KfOuw4pm4yzgoLhx1qyMGlFyXBaTj5nKNAe', 'reza12345@gmail.com'),
(8, 'Reza April', 'april', '$2y$10$ljYvxLJSkiw9FeP81rL7B.bbT7QdWvBJXoltXtEm6CBXGNvdLnQ8O', 'april12345@gmail.com'),
(11, 'coba', 'coba', '$2y$10$UsDuezSBRxowiVa.2b1jFexrbCxroL5KFe1HVAsFKUxLKFO/Vkw7C', 'coba@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_deskripsi`
--
ALTER TABLE `tbl_deskripsi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`id_kategori`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kuesioner_harapan`
--
ALTER TABLE `tbl_kuesioner_harapan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_responden`);

--
-- Indexes for table `tbl_kuesioner_kenyataan`
--
ALTER TABLE `tbl_kuesioner_kenyataan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer` (`id_responden`);

--
-- Indexes for table `tbl_pernyataan`
--
ALTER TABLE `tbl_pernyataan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_deskripsi`
--
ALTER TABLE `tbl_deskripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_kuesioner_harapan`
--
ALTER TABLE `tbl_kuesioner_harapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_kuesioner_kenyataan`
--
ALTER TABLE `tbl_kuesioner_kenyataan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_pernyataan`
--
ALTER TABLE `tbl_pernyataan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_deskripsi`
--
ALTER TABLE `tbl_deskripsi`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id`);

--
-- Constraints for table `tbl_kuesioner_harapan`
--
ALTER TABLE `tbl_kuesioner_harapan`
  ADD CONSTRAINT `id_customer` FOREIGN KEY (`id_responden`) REFERENCES `tbl_customer` (`id`);

--
-- Constraints for table `tbl_kuesioner_kenyataan`
--
ALTER TABLE `tbl_kuesioner_kenyataan`
  ADD CONSTRAINT `customer` FOREIGN KEY (`id_responden`) REFERENCES `tbl_customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
