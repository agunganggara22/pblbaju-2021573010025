-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_baju.tb_daftar_menu
CREATE TABLE IF NOT EXISTS `tb_daftar_menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) DEFAULT NULL,
  `nama_menu` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `stok` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kategori` (`kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table db_baju.tb_daftar_menu: ~7 rows (approximately)
/*!40000 ALTER TABLE `tb_daftar_menu` DISABLE KEYS */;
REPLACE INTO `tb_daftar_menu` (`id`, `foto`, `nama_menu`, `keterangan`, `kategori`, `harga`, `stok`, `code`) VALUES
	(1, 'kemeja.png', 'Cardinal', 'Keren dan Mewah', 1, '170000', '8', 'JSS'),
	(2, 'gamis.png', 'Gamis', 'Islami', 1, '200000', '10', 'AS'),
	(3, 'kaos.jpeg', 'Kaos', 'Nyaman di pakai Sehari Hari', 1, '90000', '24', 'HS'),
	(4, 'kulott.jpg', 'Jeans', 'Desain Bagus', 3, '120000', '15', NULL),
	(5, 'rok3.jpg', 'katun sutra', 'ngembang', 4, '130000', '12', NULL),
	(7, 'jeans.jpg', 'lee', 'bahan hangat dan tebal', 3, '210000', '9', NULL),
	(8, 'kemeja2.png', 'kemeja', 'keren', 1, '130', '2', NULL);
/*!40000 ALTER TABLE `tb_daftar_menu` ENABLE KEYS */;

-- Dumping structure for table db_baju.tb_kategori_menu
CREATE TABLE IF NOT EXISTS `tb_kategori_menu` (
  `id_kat_menu` int(10) NOT NULL AUTO_INCREMENT,
  `jenis_menu` varchar(1) DEFAULT NULL,
  `kategori_menu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kat_menu`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_baju.tb_kategori_menu: ~5 rows (approximately)
/*!40000 ALTER TABLE `tb_kategori_menu` DISABLE KEYS */;
REPLACE INTO `tb_kategori_menu` (`id_kat_menu`, `jenis_menu`, `kategori_menu`) VALUES
	(1, '1', 'Kaos'),
	(2, '1', 'Kemeja'),
	(3, '2', 'Lee'),
	(4, '2', 'Rok'),
	(5, '1', 'Jas');
/*!40000 ALTER TABLE `tb_kategori_menu` ENABLE KEYS */;

-- Dumping structure for table db_baju.tb_list_order
CREATE TABLE IF NOT EXISTS `tb_list_order` (
  `id_list_order` bigint(20) NOT NULL DEFAULT '0',
  `menu` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_list_order`),
  KEY `menu` (`menu`),
  KEY `order` (`order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_baju.tb_list_order: ~7 rows (approximately)
/*!40000 ALTER TABLE `tb_list_order` DISABLE KEYS */;
REPLACE INTO `tb_list_order` (`id_list_order`, `menu`, `order`, `jumlah`) VALUES
	(1, 1, 1, 1),
	(2, 2, 2, 2),
	(3, 4, 3, 2),
	(4, 7, 7, 5),
	(5, 5, 6, 2),
	(6, 4, 5, 3),
	(7, 4, 4, 2);
/*!40000 ALTER TABLE `tb_list_order` ENABLE KEYS */;

-- Dumping structure for table db_baju.tb_order
CREATE TABLE IF NOT EXISTS `tb_order` (
  `id_order` bigint(20) NOT NULL DEFAULT '0',
  `pelanggan` varchar(50) DEFAULT NULL,
  `meja` int(10) DEFAULT NULL,
  `pelayan` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `waktu_order` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `catatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_order`) USING BTREE,
  KEY `kategori` (`pelayan`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_baju.tb_order: ~7 rows (approximately)
/*!40000 ALTER TABLE `tb_order` DISABLE KEYS */;
REPLACE INTO `tb_order` (`id_order`, `pelanggan`, `meja`, `pelayan`, `status`, `waktu_order`, `catatan`) VALUES
	(1, 'Rina', 1, 1, '1', '2022-01-02 00:00:00', '001'),
	(2, 'Rani', 1, 2, '2', '2022-01-02 00:00:00', '002'),
	(3, 'Tia', 2, 3, '3', '2022-01-02 00:00:00', '003'),
	(4, 'Nisa', 2, 2, '4', '2022-01-02 00:00:00', '004'),
	(5, 'Astuti', 2, 1, '5', '2022-01-02 00:00:00', '005'),
	(6, 'Tyfani', 3, 1, '6', '2022-01-02 00:00:00', '006'),
	(7, 'Tirani', 1, 2, '7', '2022-01-02 00:00:00', '007');
/*!40000 ALTER TABLE `tb_order` ENABLE KEYS */;

-- Dumping structure for table db_baju.tb_pelanggan
CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `jk` enum('P','W') DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table db_baju.tb_pelanggan: ~6 rows (approximately)
/*!40000 ALTER TABLE `tb_pelanggan` DISABLE KEYS */;
REPLACE INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `username`, `jk`, `alamat`, `nohp`) VALUES
	(1, 'AsepTian', 'Tian@gmail.com', 'P', 'suka jadi', '08224455'),
	(5, 'lia', 'lia@gmail.com', 'W', 'kuala lumpur', '08124554'),
	(7, 'Lylia', 'lilia@gmail.com', 'W', 'Kota Banjar', '024567890'),
	(8, 'Rina', 'Rina@gmail.com', 'W', 'lola', '09812'),
	(11, 'susi', 'susi@gmail.com', 'W', 'paya bedi', '0823456'),
	(12, 'tio', 'tio@gmail.com', 'P', 'babo', '0845665');
/*!40000 ALTER TABLE `tb_pelanggan` ENABLE KEYS */;

-- Dumping structure for table db_baju.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table db_baju.tb_user: ~12 rows (approximately)
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
REPLACE INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`, `nohp`, `alamat`) VALUES
	(1, 'andi', 'abc@abc.com', '0c6d4afa882f2b88efccc99d6acaea41', 1, '0908981', 'di sini'),
	(2, 'ali', 'abc1@abc.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '09876711', 'di sana'),
	(5, 'nia', 'nia@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3, '08525544', 'karang baru'),
	(6, '123', '123@123.com', '202cb962ac59075b964b07152d234b70', 3, '08535221234', 'blang pulo'),
	(7, 'rani', 'rani@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3, '98765432', 'rantau'),
	(8, 'andinia', 'andini@gmail.com', '8479c86c7afcb56631104f5ce5d6de62', 3, '08522255', 'lampung'),
	(9, 'apsah', 'apsah@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '08225566', 'lampung\r\n'),
	(10, 'karyawan', 'karyawan@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '08221212', 'rantau'),
	(11, 'pelanggan', 'pelanggan@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3, '08224554', 'kuala namu\r\n'),
	(12, 'admin', 'admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '08221012', 'di desa'),
	(14, 'susi', 'susi@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3, '08224567', 'paya bedi'),
	(15, 'tio', 'tio@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3, '082225678', 'babo');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
