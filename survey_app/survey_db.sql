-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 05:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tanswer`
--

CREATE TABLE `tanswer` (
  `Id` int(11) NOT NULL,
  `descriptionId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `companyId` varchar(50) NOT NULL,
  `jawaban` varchar(1) NOT NULL,
  `jawabanA` int(11) NOT NULL,
  `jawabanB` int(11) NOT NULL,
  `jawabanC` int(11) NOT NULL,
  `jawabanD` int(11) NOT NULL,
  `jawabanE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanswer`
--

INSERT INTO `tanswer` (`Id`, `descriptionId`, `groupId`, `companyId`, `jawaban`, `jawabanA`, `jawabanB`, `jawabanC`, `jawabanD`, `jawabanE`) VALUES
(20, 23, 7, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(21, 24, 7, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(22, 25, 7, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(23, 29, 8, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(24, 30, 8, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(25, 31, 8, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(26, 26, 9, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(27, 27, 9, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(28, 28, 9, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(29, 35, 9, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(30, 36, 9, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(31, 41, 9, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(32, 32, 10, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(33, 37, 10, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(34, 33, 11, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(35, 34, 11, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(36, 38, 11, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(37, 39, 11, '20221116 051435', 'A', 1, 0, 0, 0, 0),
(38, 40, 11, '20221116 051435', 'A', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tcompany`
--

CREATE TABLE `tcompany` (
  `companyId` varchar(50) NOT NULL,
  `companyName` varchar(30) NOT NULL,
  `companyAddress` text NOT NULL,
  `companyPhoneHP` varchar(30) NOT NULL,
  `dateSurvey` varchar(30) NOT NULL,
  `suggestion` text NOT NULL,
  `product` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcompany`
--

INSERT INTO `tcompany` (`companyId`, `companyName`, `companyAddress`, `companyPhoneHP`, `dateSurvey`, `suggestion`, `product`) VALUES
('20221116 051435', 'Yuli', 'Grogolan', ' / 08960388888', '2022-11-16', '', 'Retail');

-- --------------------------------------------------------

--
-- Table structure for table `tdescription`
--

CREATE TABLE `tdescription` (
  `descriptionId` int(11) NOT NULL,
  `description` text NOT NULL,
  `groupId` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `CreatedUser` int(11) NOT NULL,
  `ModifiedDate` datetime NOT NULL,
  `ModifiedUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tdescription`
--

INSERT INTO `tdescription` (`descriptionId`, `description`, `groupId`, `CreatedDate`, `CreatedUser`, `ModifiedDate`, `ModifiedUser`) VALUES
(23, 'Pegawai / sales sigap dalam melayani konsumen						', 7, '2016-05-02 03:15:43', 1, '2022-11-13 05:12:13', 1),
(24, 'Pegawai / sales dapat memberikan layanan sesuai dengan kebutuhan konsumen				', 7, '2016-05-02 03:16:02', 1, '2022-11-13 05:12:51', 1),
(25, 'Pengiriman barang tepat waktu 			', 7, '2016-05-02 03:16:25', 1, '2022-11-13 05:13:34', 1),
(26, 'Merasa aman dan nyaman dalam bertransaksi di PT. Mitra Gemilang Inti Perkasa Pekalongan				', 9, '2016-05-02 03:17:27', 1, '2022-11-13 05:18:18', 1),
(27, 'Semua Kebutuhan yang dicari pelanggan pasti selalu tersedia					', 9, '2016-05-02 03:17:48', 1, '2022-11-13 05:19:11', 1),
(28, 'Pegawai / sales tidak pernah lupa memberikan nota ketika nota sudah lunas						', 9, '2016-05-02 03:18:44', 1, '2022-11-13 05:20:03', 1),
(29, 'Pelayanan pembayaran pada kasir dilakukan dengan cepat			', 8, '2016-05-02 03:20:12', 1, '2022-11-13 05:15:20', 1),
(30, 'Pegawai / sales menginformasikan atau menawarkan promo-promo yang ada				', 8, '2016-05-02 03:20:50', 1, '2022-11-13 05:16:14', 1),
(31, 'Pegawai / sales tanggap dalam menjelaskan produk yang tidak diketahui oleh pelanggan', 8, '2016-05-02 03:21:20', 1, '2022-11-13 05:17:19', 1),
(32, 'Pegawai / sales melayani dengan ramah		', 10, '2016-05-02 03:21:44', 1, '2022-11-13 05:22:30', 1),
(33, 'Kondisi distributor tertata dengan rapi dan bersih', 11, '2016-05-02 03:22:00', 1, '2022-11-13 05:23:55', 1),
(34, 'Produk yang dikirimkan dalam kondisi baik dan tidak cacat			', 11, '2016-05-02 03:22:31', 1, '2022-11-13 05:29:02', 1),
(35, 'Pihak distributor bersedia menerima pengembalian barang jika barang tidak baik atau cacat					', 9, '2016-05-02 03:23:18', 1, '2022-11-13 05:33:10', 1),
(36, 'Pihak distributor selalu mengirimkan barang dalam kondisi yang baik				', 9, '2016-05-02 03:23:41', 1, '2022-11-13 05:34:02', 1),
(37, 'Pegawai / sales selalu bertanya tentang barang yang dibutuhkan pelanggan		', 10, '2016-05-02 03:24:02', 1, '2022-11-13 05:35:34', 1),
(38, 'Penampilan dari pegawai rapi					', 11, '2016-05-02 03:24:55', 1, '2022-11-13 05:24:40', 1),
(39, 'Produk-produk yang dijual lengkap		', 11, '2016-05-02 03:25:04', 1, '2022-11-13 05:25:09', 1),
(40, 'Produk-produk yang dijual dalam keadaan baik dan tidak cacat				', 11, '2016-05-02 03:25:20', 1, '2022-11-13 05:25:39', 1),
(41, 'Pihak distributor bersedia mengganti jika ada barang yang salah kirim				', 9, '2016-09-29 16:28:53', 1, '2022-11-13 05:21:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tgroup`
--

CREATE TABLE `tgroup` (
  `groupId` int(11) NOT NULL,
  `groupName` varchar(255) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `CreatedUser` int(11) NOT NULL,
  `ModifiedDate` datetime NOT NULL,
  `ModifiedUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tgroup`
--

INSERT INTO `tgroup` (`groupId`, `groupName`, `CreatedDate`, `CreatedUser`, `ModifiedDate`, `ModifiedUser`) VALUES
(7, 'Keandalan', '2016-05-02 03:11:42', 1, '2022-11-13 05:05:55', 1),
(8, 'Daya Tanggap', '2016-05-02 03:12:03', 1, '2022-11-13 05:06:32', 1),
(9, 'Jaminan', '2016-05-02 03:12:26', 1, '2022-11-13 05:09:43', 1),
(10, 'Perhatian', '2016-05-02 03:12:38', 1, '2022-11-13 05:10:03', 1),
(11, 'Bukti Fisik', '2016-05-02 03:19:35', 1, '2022-11-13 05:10:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `userId` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`userId`, `username`, `password`, `fullname`, `email`, `level`) VALUES
(2, 'rezaapril', 'a0bd6b3b9cadd92608f258a75d92eb9b', 'Reza Apriliani', 'rezaapriliani307@gmail.com', 'Super');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tanswer`
--
ALTER TABLE `tanswer`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `descriptionId` (`descriptionId`),
  ADD KEY `groupId` (`groupId`),
  ADD KEY `groupId_2` (`groupId`),
  ADD KEY `companyId` (`companyId`),
  ADD KEY `groupId_3` (`groupId`),
  ADD KEY `companyId_2` (`companyId`);

--
-- Indexes for table `tcompany`
--
ALTER TABLE `tcompany`
  ADD PRIMARY KEY (`companyId`);

--
-- Indexes for table `tdescription`
--
ALTER TABLE `tdescription`
  ADD PRIMARY KEY (`descriptionId`),
  ADD KEY `groupId` (`groupId`);

--
-- Indexes for table `tgroup`
--
ALTER TABLE `tgroup`
  ADD PRIMARY KEY (`groupId`),
  ADD KEY `CreatedUser` (`CreatedUser`,`ModifiedUser`),
  ADD KEY `CreatedUser_2` (`CreatedUser`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tanswer`
--
ALTER TABLE `tanswer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tdescription`
--
ALTER TABLE `tdescription`
  MODIFY `descriptionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tgroup`
--
ALTER TABLE `tgroup`
  MODIFY `groupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tanswer`
--
ALTER TABLE `tanswer`
  ADD CONSTRAINT `tanswer_ibfk_1` FOREIGN KEY (`companyId`) REFERENCES `tcompany` (`companyId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanswer_ibfk_3` FOREIGN KEY (`groupId`) REFERENCES `tgroup` (`groupId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanswer_ibfk_4` FOREIGN KEY (`descriptionId`) REFERENCES `tdescription` (`descriptionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tdescription`
--
ALTER TABLE `tdescription`
  ADD CONSTRAINT `tdescription_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `tgroup` (`groupId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
