-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 26, 2020 at 04:22 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgis_tegal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buah_margadana`
--

CREATE TABLE `tb_buah_margadana` (
  `id_buah` int(11) NOT NULL,
  `nama_buah` varchar(100) NOT NULL,
  `jumlah_panen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buah_margadana`
--

INSERT INTO `tb_buah_margadana` (`id_buah`, `nama_buah`, `jumlah_panen`) VALUES
(1, 'Mangga', 17371),
(2, 'Belimbing', 1050),
(3, 'Pepaya', 777),
(4, 'Pisang', 4645),
(5, 'Jambu Air', 1213),
(6, 'Jambu', 2315);

-- --------------------------------------------------------

--
-- Table structure for table `tb_buah_tb`
--

CREATE TABLE `tb_buah_tb` (
  `id_buah` int(11) NOT NULL,
  `nama_buah` varchar(100) NOT NULL,
  `jumlah_panen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buah_tb`
--

INSERT INTO `tb_buah_tb` (`id_buah`, `nama_buah`, `jumlah_panen`) VALUES
(1, 'Mangga', 1086),
(2, 'Belimbing', 490),
(3, 'Pepaya', 410),
(4, 'Pisang', 301),
(5, 'Jambu Air', 33),
(6, 'Jambu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_buah_tegaltimur`
--

CREATE TABLE `tb_buah_tegaltimur` (
  `id_buah` int(11) NOT NULL,
  `nama_buah` varchar(100) NOT NULL,
  `jumlah_panen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buah_tegaltimur`
--

INSERT INTO `tb_buah_tegaltimur` (`id_buah`, `nama_buah`, `jumlah_panen`) VALUES
(1, 'Mangga', 681),
(2, 'Belimbing', 170),
(3, 'Apel', 20),
(4, 'Pepaya', 70),
(5, 'Pisang', 3801),
(6, 'Jambu Air', 55),
(7, 'Jambu', 65),
(8, 'Kresem', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_buah_ts`
--

CREATE TABLE `tb_buah_ts` (
  `id_buah` int(11) NOT NULL,
  `nama_buah` varchar(100) NOT NULL,
  `jumlah_panen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buah_ts`
--

INSERT INTO `tb_buah_ts` (`id_buah`, `nama_buah`, `jumlah_panen`) VALUES
(1, 'Mangga', 865),
(2, 'Belimbing', 98),
(3, 'Pepaya', 12),
(4, 'Pisang', 1190),
(5, 'Jambu Air', 45),
(6, 'Jambu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lahan_kc`
--

CREATE TABLE `tb_lahan_kc` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `lahan_sawah` double NOT NULL,
  `lahan_bukansawah` double NOT NULL,
  `jumlah` double NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lahan_kc`
--

INSERT INTO `tb_lahan_kc` (`id_kecamatan`, `nama_kecamatan`, `lahan_sawah`, `lahan_bukansawah`, `jumlah`, `warna`) VALUES
(1, 'Tegal Selatan', 108, 20, 107, '#0077c3'),
(2, 'Tegal Timur', 19, 0, 19, '#006400'),
(3, 'Tegal Barat', 49, 0, 49, '#FF7F50'),
(4, 'margadana', 531, 0, 531, '#dc143c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produksipadi_kc`
--

CREATE TABLE `tb_produksipadi_kc` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `luas_panen` double NOT NULL,
  `rata_produksi_ha` double NOT NULL,
  `rata_produksi_ton` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produksipadi_kc`
--

INSERT INTO `tb_produksipadi_kc` (`id_kecamatan`, `nama_kecamatan`, `luas_panen`, `rata_produksi_ha`, `rata_produksi_ton`) VALUES
(1, 'Tegal Selatan', 100, 72.32, 694.272),
(2, 'Tegal Timur', 28, 82.56, 231.168),
(3, 'Tegal Barat', 58, 92.8, 538.24),
(4, 'Margadana', 302, 75.2, 2271.04);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produksipadi_margadana`
--

CREATE TABLE `tb_produksipadi_margadana` (
  `id_kelurahan` int(11) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL,
  `luas_panen` double NOT NULL,
  `rata_produksi_ha` double NOT NULL,
  `rata_produksi_ton` double NOT NULL,
  `lahan_sawah` double NOT NULL,
  `lahan_bukan_sawah` double NOT NULL,
  `jumlah` double NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produksipadi_margadana`
--

INSERT INTO `tb_produksipadi_margadana` (`id_kelurahan`, `nama_kelurahan`, `luas_panen`, `rata_produksi_ha`, `rata_produksi_ton`, `lahan_sawah`, `lahan_bukan_sawah`, `jumlah`, `warna`) VALUES
(1, 'Kaligangsa', 0, 0, 0, 114.17, 45.5, 69, ' 	#0000FF '),
(2, 'Krandon', 0, 0, 0, 39.96, 43.55, 56.05, ' 	#000080 '),
(3, 'Cabawan', 0, 0, 0, 59.22, 53.5, 280, ' 	#00FFFF'),
(4, 'Margadanakl', 0, 0, 0, 22.78, 217.22, 240, ' 	#964B00 '),
(5, 'Kalinyamat Kulon', 0, 0, 0, 0, 51.91, 153, ' 	#FFD700 '),
(6, 'Sumurpanggang', 0, 0, 0, 6.56, 93.4, 100, ' 	#00FF00 '),
(7, 'Pesurungan Lor', 0, 0, 0, 18.26, 163.74, 182, ' 	#FF00FF');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produksipadi_tb`
--

CREATE TABLE `tb_produksipadi_tb` (
  `id_kelurahan` int(11) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL,
  `luas_panen` double NOT NULL,
  `rata_produksi_ha` double NOT NULL,
  `rata_produksi_ton` double NOT NULL,
  `lahan_sawah` double NOT NULL,
  `lahan_bukan_sawah` double NOT NULL,
  `jumlah` double NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produksipadi_tb`
--

INSERT INTO `tb_produksipadi_tb` (`id_kelurahan`, `nama_kelurahan`, `luas_panen`, `rata_produksi_ha`, `rata_produksi_ton`, `lahan_sawah`, `lahan_bukan_sawah`, `jumlah`, `warna`) VALUES
(1, 'Pesurungan Kidul', 52, 69.23, 346.15, 25.5, 45.5, 95, ' 	#FF007F '),
(2, 'Debong Lor', 14, 69.07, 103.61, 12.5, 43.55, 56.05, ' 	#800000'),
(3, 'Kemandungan', 8, 69.03, 34.52, 2.5, 53.5, 56, ' 	#FFC0CB'),
(4, 'Pekauman', 0, 0, 0, 0, 0, 0, ' 	#6F00FF '),
(5, 'Kraton', 8, 69.35, 90.15, 6.91, 116.9, 123, ' 	#FF7F00 '),
(6, 'Tegalsari', 0, 0, 0, 0, 218.99, 218.99, ' 		#C0C0C0'),
(7, 'Muarareja', 0, 0, 0, 0, 893.96, 893.96, ' 	#BF00FF ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produksipadi_tegaltimur`
--

CREATE TABLE `tb_produksipadi_tegaltimur` (
  `id_kelurahan` int(11) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL,
  `luas_panen` varchar(100) NOT NULL,
  `rata_produksi_ha` double NOT NULL,
  `rata_produksi_ton` double NOT NULL,
  `lahan_sawah` double NOT NULL,
  `lahan_bukan_sawah` double NOT NULL,
  `jumlah` double NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produksipadi_tegaltimur`
--

INSERT INTO `tb_produksipadi_tegaltimur` (`id_kelurahan`, `nama_kelurahan`, `luas_panen`, `rata_produksi_ha`, `rata_produksi_ton`, `lahan_sawah`, `lahan_bukan_sawah`, `jumlah`, `warna`) VALUES
(1, 'Kejambon', '0', 0, 0, 2, 86, 88, ' 	#8F00FF '),
(2, 'Slerok', '0', 0, 0, 15, 119, 84, ' 	#808000 '),
(3, 'Panggung', '0', 0, 0, 2, 218, 123, ' 	#0000FF'),
(4, 'Mangkukusuman', '0', 0, 0, 0, 47, 40, ' 	#000080 '),
(5, 'Mintaragen', '0', 0, 0, 0, 142, 142, ' 	#00FFFF ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produksi_tegalselatan`
--

CREATE TABLE `tb_produksi_tegalselatan` (
  `id_kelurahan` int(11) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL,
  `luas_panen` double NOT NULL,
  `rata_produksi_ha` double NOT NULL,
  `rata_produksi_ton` double NOT NULL,
  `lahan_sawah` double NOT NULL,
  `lahan_bukan_sawah` double NOT NULL,
  `jumlah` double NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produksi_tegalselatan`
--

INSERT INTO `tb_produksi_tegalselatan` (`id_kelurahan`, `nama_kelurahan`, `luas_panen`, `rata_produksi_ha`, `rata_produksi_ton`, `lahan_sawah`, `lahan_bukan_sawah`, `jumlah`, `warna`) VALUES
(1, 'Kalinyamat Wetan', 150, 300, 4000, 27, 62, 89, '#808000 '),
(2, 'Bandung', 0, 0, 0, 13, 47.2, 53, ' 	#8F00FF '),
(3, 'Debong Kidul', 0, 0, 0, 0, 35, 35, ' 	#BF00FF '),
(4, 'Tunon', 0, 0, 0, 0, 75, 75, ' #FF7F00'),
(5, 'Keturen', 0, 0, 0, 33, 29, 62, ' 	#FF0000'),
(6, 'Debong Kulon', 0, 0, 0, 52, 22, 74, ' 	#800000'),
(7, 'Debong Tengah', 0, 0, 0, 8, 101, 111, ' 	#00FF00'),
(8, 'Randugunting', 0, 0, 0, 2, 136, 138, '#00FFFF');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sayuran_margadana`
--

CREATE TABLE `tb_sayuran_margadana` (
  `id_sayuran` int(11) NOT NULL,
  `nama_sayuran` varchar(100) NOT NULL,
  `luas_panen_sayuran` double NOT NULL,
  `produksi_sayuran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sayuran_margadana`
--

INSERT INTO `tb_sayuran_margadana` (`id_sayuran`, `nama_sayuran`, `luas_panen_sayuran`, `produksi_sayuran`) VALUES
(1, 'Bawang Merah', 290, 3283.5),
(2, 'Kangkung', 0, 0),
(3, 'Cesim/Bayam', 17, 1308),
(4, 'Terong', 6, 856);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sayuran_tegalbarat`
--

CREATE TABLE `tb_sayuran_tegalbarat` (
  `id_sayuran` int(11) NOT NULL,
  `nama_sayuran` varchar(100) NOT NULL,
  `luas_panen_sayuran` double NOT NULL,
  `produksi_sayuran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sayuran_tegalbarat`
--

INSERT INTO `tb_sayuran_tegalbarat` (`id_sayuran`, `nama_sayuran`, `luas_panen_sayuran`, `produksi_sayuran`) VALUES
(1, 'Bawang Merah', 0, 0),
(2, 'Kangkung', 0, 0),
(3, 'Cesim/bayam', 0, 0),
(4, 'Terong', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sayuran_tegalselatan`
--

CREATE TABLE `tb_sayuran_tegalselatan` (
  `id_sayuran` int(11) NOT NULL,
  `nama_sayuran` varchar(100) NOT NULL,
  `luas_panen_sayuran` double NOT NULL,
  `produksi_sayuran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sayuran_tegalselatan`
--

INSERT INTO `tb_sayuran_tegalselatan` (`id_sayuran`, `nama_sayuran`, `luas_panen_sayuran`, `produksi_sayuran`) VALUES
(1, 'Bawang Merah', 70, 805),
(2, 'Kangkung', 18, 90),
(3, 'Cesim/Bayam', 0, 0),
(4, 'Terong', 0, 0),
(5, 'Timun', 20, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sayuran_tegaltimur`
--

CREATE TABLE `tb_sayuran_tegaltimur` (
  `id_sayuran` int(11) NOT NULL,
  `nama_sayuran` varchar(100) NOT NULL,
  `luas_panen_sayuran` double NOT NULL,
  `produksi_sayuran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sayuran_tegaltimur`
--

INSERT INTO `tb_sayuran_tegaltimur` (`id_sayuran`, `nama_sayuran`, `luas_panen_sayuran`, `produksi_sayuran`) VALUES
(1, 'Bawang Merah', 0, 0),
(2, 'Kangkung', 0, 0),
(3, 'Cesim/Bayam', 0, 0),
(4, 'Terong', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `nama`, `username`, `password`) VALUES
(1, 'setiadi', 'setiadi', '1eb03fdef652095eb20668ecf9ee6ab5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buah_margadana`
--
ALTER TABLE `tb_buah_margadana`
  ADD PRIMARY KEY (`id_buah`);

--
-- Indexes for table `tb_buah_tb`
--
ALTER TABLE `tb_buah_tb`
  ADD PRIMARY KEY (`id_buah`);

--
-- Indexes for table `tb_buah_tegaltimur`
--
ALTER TABLE `tb_buah_tegaltimur`
  ADD PRIMARY KEY (`id_buah`);

--
-- Indexes for table `tb_buah_ts`
--
ALTER TABLE `tb_buah_ts`
  ADD PRIMARY KEY (`id_buah`);

--
-- Indexes for table `tb_lahan_kc`
--
ALTER TABLE `tb_lahan_kc`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tb_produksipadi_kc`
--
ALTER TABLE `tb_produksipadi_kc`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tb_produksipadi_margadana`
--
ALTER TABLE `tb_produksipadi_margadana`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `tb_produksipadi_tb`
--
ALTER TABLE `tb_produksipadi_tb`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `tb_produksipadi_tegaltimur`
--
ALTER TABLE `tb_produksipadi_tegaltimur`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `tb_produksi_tegalselatan`
--
ALTER TABLE `tb_produksi_tegalselatan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `tb_sayuran_margadana`
--
ALTER TABLE `tb_sayuran_margadana`
  ADD PRIMARY KEY (`id_sayuran`);

--
-- Indexes for table `tb_sayuran_tegalbarat`
--
ALTER TABLE `tb_sayuran_tegalbarat`
  ADD PRIMARY KEY (`id_sayuran`);

--
-- Indexes for table `tb_sayuran_tegalselatan`
--
ALTER TABLE `tb_sayuran_tegalselatan`
  ADD PRIMARY KEY (`id_sayuran`);

--
-- Indexes for table `tb_sayuran_tegaltimur`
--
ALTER TABLE `tb_sayuran_tegaltimur`
  ADD PRIMARY KEY (`id_sayuran`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buah_margadana`
--
ALTER TABLE `tb_buah_margadana`
  MODIFY `id_buah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_buah_tb`
--
ALTER TABLE `tb_buah_tb`
  MODIFY `id_buah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_buah_tegaltimur`
--
ALTER TABLE `tb_buah_tegaltimur`
  MODIFY `id_buah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_buah_ts`
--
ALTER TABLE `tb_buah_ts`
  MODIFY `id_buah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_lahan_kc`
--
ALTER TABLE `tb_lahan_kc`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_produksipadi_kc`
--
ALTER TABLE `tb_produksipadi_kc`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_produksipadi_margadana`
--
ALTER TABLE `tb_produksipadi_margadana`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_produksipadi_tb`
--
ALTER TABLE `tb_produksipadi_tb`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_produksipadi_tegaltimur`
--
ALTER TABLE `tb_produksipadi_tegaltimur`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_produksi_tegalselatan`
--
ALTER TABLE `tb_produksi_tegalselatan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_sayuran_margadana`
--
ALTER TABLE `tb_sayuran_margadana`
  MODIFY `id_sayuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_sayuran_tegalbarat`
--
ALTER TABLE `tb_sayuran_tegalbarat`
  MODIFY `id_sayuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_sayuran_tegalselatan`
--
ALTER TABLE `tb_sayuran_tegalselatan`
  MODIFY `id_sayuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_sayuran_tegaltimur`
--
ALTER TABLE `tb_sayuran_tegaltimur`
  MODIFY `id_sayuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
