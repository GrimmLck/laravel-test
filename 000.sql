-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.29-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk perpustakaan
CREATE DATABASE IF NOT EXISTS `perpustakaan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `perpustakaan`;

-- membuang struktur untuk table perpustakaan.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel perpustakaan.migrations: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- membuang struktur untuk table perpustakaan.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(157) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel perpustakaan.password_resets: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- membuang struktur untuk table perpustakaan.tb_anggota
CREATE TABLE IF NOT EXISTS `tb_anggota` (
  `kd_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `no_anggota` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` int(1) DEFAULT '1',
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`kd_anggota`),
  UNIQUE KEY `no_anggota` (`no_anggota`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpustakaan.tb_anggota: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_anggota` DISABLE KEYS */;
INSERT INTO `tb_anggota` (`kd_anggota`, `no_anggota`, `nama`, `tempat`, `tgl_lahir`, `jk`, `alamat`, `kota`, `telp`, `email`, `foto`) VALUES
	(7, 'A-0000023', 'Kimi Hime', 'Jekarda', '1907-07-18', 2, 'Gang Salak ,', 'Madiun', '35', 'kabapexim@gmail.com', NULL),
	(9, 'A-0000025', 'Sri Atun', 'Madiun', '2019-01-14', 2, 'afasf', 'agag', '2424', 'ardi@gmail.com', ''),
	(11, 'A-0000026', 'Fitri', 'Madiun', '1970-01-01', 1, 'Jl Thamrin 35 A', 'Madiun', '000', 'aryo4143@gmail.com', NULL),
	(13, 'A-0000027', 'Imas', 'Madiun', '2019-01-30', 1, 'Jl Thamrin 35 A', 'Madiun', '435345', 'aa@a.com', '05-2019-mina-twice-min.jpg'),
	(24, 'A-0000028', 'Siti', 'Madiun', '1990-03-17', 1, 'Madiun', 'Madiun', '070', 'siti@gmail.com', NULL),
	(27, 'A-0000029', 'Aken', 'Magetan', '2019-07-19', 2, 'Barat', 'Magetan', '089172723475', 'aken@ken.com', NULL),
	(28, 'A-19062019030', 'Nanas', 'Wonogiri', '2000-07-19', 1, 'Selogiri', 'Wonogiri', '08563284362', 'na@nas.id', NULL),
	(32, 'A-19062019031', 'Tzuyu', 'Madiun', '1988-07-29', 2, 'Soul Society', 'Soul', '1337', 'tzu@yu.com', '07-05-2019-tzuyu.jpg'),
	(33, 'A-19062019032', 'Sana', 'Soul', '1987-09-09', 2, 'Soul Society', 'Metropop', '1337404', 'san@na.com', '07-05-2019-sana.jpg'),
	(34, 'A-19062019033', 'Sagiri', 'Surabya', '1998-07-29', 2, 'Balong Gobang', 'Magetan', '08934672', 'sagi@ri.com', NULL),
	(38, 'A-19062019034', 'Rem Kun', 'Isekai', '2000-01-17', 2, 'Isekai', 'Isekai', '12543', 'rem@i.com', NULL),
	(39, 'A-19062019038', 'Ram', 'Isekai', '2000-01-17', 2, 'Isekai', 'Isekai', '11234', 'ram@i.com', NULL),
	(40, 'A-19062019039', 'Sri', 'Caruban', '1970-02-22', 2, 'Caruban', 'Caruban', '1234', 'sri@i.com', NULL),
	(41, 'A-19062019040', 'Nisa Nikita', 'Tasik', '1999-07-29', 2, 'Sidomulyo', 'Madiun', '24364', 'nis@a.com', NULL),
	(42, 'A-19062019041', 'Karnoto', 'Madiun', '1981-12-01', 1, 'Barat', 'Magetan', '123132', 'kar@no.com', '26-06-2019-maxresdefault.jpg');
/*!40000 ALTER TABLE `tb_anggota` ENABLE KEYS */;

-- membuang struktur untuk table perpustakaan.tb_buku
CREATE TABLE IF NOT EXISTS `tb_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_buku` varchar(50) NOT NULL,
  `judul` longtext,
  `kd_pengarang` int(11) DEFAULT '0',
  `kd_penerbit` int(11) DEFAULT '0',
  `tempat_terbit` varchar(50) DEFAULT '0',
  `tahun_terbit` varchar(50) DEFAULT '0',
  `kd_kategori` int(11) DEFAULT '0',
  `halaman` varchar(50) DEFAULT '0',
  `edisi` varchar(50) DEFAULT '0',
  `ISBN` varchar(50) DEFAULT '0',
  `cover` longtext,
  `status` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpustakaan.tb_buku: ~12 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_buku` DISABLE KEYS */;
INSERT INTO `tb_buku` (`id`, `kd_buku`, `judul`, `kd_pengarang`, `kd_penerbit`, `tempat_terbit`, `tahun_terbit`, `kd_kategori`, `halaman`, `edisi`, `ISBN`, `cover`, `status`) VALUES
	(9, 'BK-01', 'Tanaman Beracun', 3, 3, 'Amazon', '2019', 3, '787', '12', '223', NULL, 'Ada'),
	(10, 'BK-02', 'Berkenalan Dengan Hewan Herbivor, Karnivor, & Omnivor', 6, 5, 'Bali', '2017', 5, '120', 'Edisi 1', '9786024074661', '05-19-hewan.jpg', 'Ada'),
	(11, 'BK-03', 'Fight Like A Tiger Win Like A Champion', 6, 3, 'Surabaya', '2018', 5, '25', 'Edisi 7', '52352525', '05-19-manusia macan.png', 'Ada'),
	(12, 'BK-04', 'Misteri Napoleon', 6, 5, 'Surabaya', '2009', 9, '56', 'hafk', '5647564', '05-19-sh.jpg', 'Ada'),
	(13, 'BK-05', 'Soekarno Hatta', 3, 2, 'Madiun', '2019', 9, '900', '1', '234234234234', '05-19-soe.jpg', 'Ada'),
	(14, 'BK-06', 'Cara Cepat Belajar Menulis', 3, 2, 'Barat', '2012', 2, '300', '2', '212452421852182181', '05-19-Belajar-Menulis-Huruf-dan-Angka-untuk-Balita.jpg', 'Ada'),
	(15, 'BK-07', 'Belajar Bahasa Endonesia', 3, 5, 'Jakarta', '2018', 2, '300', '2', '212452421852182181', '05-19-belajar BI.jpg', 'Ada'),
	(18, 'BK-08', 'Belajar Ngaji', 3, 3, 'Madiun', '2019', 9, '11', '1', '1', '05-19-bukuiqro.jpg', 'Ada'),
	(19, 'BK-09', 'Power Point 2007', 6, 5, 'Madiun', '2019', 9, '787', '12', '223', NULL, 'Ada'),
	(21, 'BK-10', 'Pintar Belajar Excel 2018', 6, 5, 'Madiun', '2019', 9, '787', '12', '223', NULL, 'Ada'),
	(22, 'BK-11', 'Hewan Karnivora', 3, 3, 'Zimbabwe', '190', 5, '313', '33', '786', NULL, 'Ada'),
	(23, 'BK-12', 'Tanaman Bau Banget', 6, 5, 'Isekai', '1900', 9, '123', '321', '12576453746', NULL, 'Ada');
/*!40000 ALTER TABLE `tb_buku` ENABLE KEYS */;

-- membuang struktur untuk table perpustakaan.tb_kategori
CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `kd_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  `singkatan` varchar(3) NOT NULL,
  PRIMARY KEY (`kd_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpustakaan.tb_kategori: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_kategori` DISABLE KEYS */;
INSERT INTO `tb_kategori` (`kd_kategori`, `nama_kategori`, `singkatan`) VALUES
	(1, 'Komputer', 'KOM'),
	(2, 'Belajar', 'BLJ'),
	(3, 'Tanaman', 'TAN'),
	(5, 'Hewan', 'HWN'),
	(9, 'Novel', 'NOV');
/*!40000 ALTER TABLE `tb_kategori` ENABLE KEYS */;

-- membuang struktur untuk table perpustakaan.tb_koleksi_buku
CREATE TABLE IF NOT EXISTS `tb_koleksi_buku` (
  `kd_koleksi` int(11) NOT NULL AUTO_INCREMENT,
  `no_induk_buku` varchar(50) NOT NULL,
  `kd_buku` varchar(50) DEFAULT NULL,
  `kd_user` int(11) DEFAULT NULL,
  `tgl_pengadaan` date DEFAULT NULL,
  `akses` varchar(50) DEFAULT NULL,
  `kd_rak` int(11) DEFAULT '0',
  `sumber` varchar(50) DEFAULT '0',
  `status` int(1) DEFAULT '0',
  PRIMARY KEY (`kd_koleksi`),
  UNIQUE KEY `no_induk_buku` (`no_induk_buku`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpustakaan.tb_koleksi_buku: ~21 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_koleksi_buku` DISABLE KEYS */;
INSERT INTO `tb_koleksi_buku` (`kd_koleksi`, `no_induk_buku`, `kd_buku`, `kd_user`, `tgl_pengadaan`, `akses`, `kd_rak`, `sumber`, `status`) VALUES
	(1, 'B-0001-KOM-000001', 'BK-01', 1, '2019-01-09', 'Boleh Dipinjam', 1, '-', 1),
	(2, 'B-0001-KOM-000002', 'BK-01', 1, '2019-01-09', 'Boleh Dipinjam', 1, '-', 1),
	(3, 'B-0001-KOM-000003', 'BK-01', 1, '2019-01-09', 'Boleh Dipinjam', 1, '-', 0),
	(4, 'B-0001-KOM-000004', 'BK-01', 1, '2019-01-09', 'Boleh Dipinjam', 1, '-', 1),
	(5, 'B-0001-KOM-000005', 'BK-01', 1, '2019-01-09', 'Boleh Dipinjam', 1, '-', 1),
	(6, 'B-0002-BLJ-000006', 'BK-02', 1, '2019-01-08', 'Boleh Dipinjam', 1, '-', 1),
	(7, 'B-0002-BLJ-000007', 'BK-02', 1, '2019-01-08', 'Boleh Dipinjam', 1, '-', 1),
	(8, 'B-0002-BLJ-000008', 'BK-02', 1, '2019-01-08', 'Boleh Dipinjam', 1, '-', 1),
	(9, 'B-0002-BLJ-000009', 'BK-02', 1, '2019-01-08', 'Boleh Dipinjam', 1, '-', 1),
	(10, 'B-0003-TAN-000010', 'BK-03', 1, '2019-01-10', 'Boleh Dipinjam', 2, '-', 0),
	(11, 'B-0003-TAN-000011', 'BK-03', 1, '2019-01-10', 'Boleh Dipinjam', 2, '-', 1),
	(12, 'B-0003-TAN-000012', 'BK-03', 1, '2019-01-10', 'Boleh Dipinjam', 2, '-', 0),
	(13, 'B-0003-TAN-000013', 'BK-03', 1, '2019-01-10', 'Boleh Dipinjam', 2, '-', 0),
	(14, 'B-0003-TAN-000014', 'BK-03', 1, '2019-01-10', 'Boleh Dipinjam', 2, '-', 1),
	(15, 'B-0003-TAN-000015', 'BK-03', 1, '2019-01-10', 'Boleh Dipinjam', 2, '-', 0),
	(16, 'B-0005-HWN-000016', 'BK-05', 1, '2019-01-18', 'Boleh Dipinjam', 1, '-', 0),
	(17, 'B-0005-HWN-000017', 'BK-05', 1, '2019-01-18', 'Boleh Dipinjam', 1, '-', 1),
	(18, 'B-0005-HWN-000018', 'BK-05', 1, '2019-01-18', 'Boleh Dipinjam', 1, '-', 0),
	(19, 'B-0005-HWN-000019', 'BK-05', 1, '2019-01-18', 'Boleh Dipinjam', 1, '-', 0),
	(22, 'B-0009-HWN-000020', 'BK-09', 1, '2019-06-17', 'Boleh Dipinjam', 1, '-', 1),
	(23, 'B-0009-HWN-000021', 'BK-09', 1, '2019-06-17', 'Boleh Dipinjam', 2, '-', 1);
/*!40000 ALTER TABLE `tb_koleksi_buku` ENABLE KEYS */;

-- membuang struktur untuk table perpustakaan.tb_peminjaman
CREATE TABLE IF NOT EXISTS `tb_peminjaman` (
  `kd_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `kd_buku` varchar(50) NOT NULL DEFAULT '0',
  `no_pinjam` varchar(50) NOT NULL DEFAULT '0',
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `no_induk_buku` varchar(50) DEFAULT '0',
  `no_anggota` varchar(50) DEFAULT '0',
  `denda` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`kd_pinjam`),
  KEY `no_induk_buku` (`no_induk_buku`),
  KEY `no_anggota` (`no_anggota`),
  KEY `no_pinjam_2` (`no_pinjam`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpustakaan.tb_peminjaman: ~61 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_peminjaman` DISABLE KEYS */;
INSERT INTO `tb_peminjaman` (`kd_pinjam`, `kd_buku`, `no_pinjam`, `tgl_pinjam`, `tgl_kembali`, `no_induk_buku`, `no_anggota`, `denda`, `status`) VALUES
	(1, '0', 'P000001', '2019-01-28', '2019-01-31', 'B-0001-KOM-000003', 'A0007012019', 0, 1),
	(2, '0', 'P000001', '2019-01-28', '2019-01-31', 'B-0003-KOM-000010', 'A0007012019', 0, 1),
	(3, '0', 'P000001', '2019-01-28', '2019-01-31', 'B-0004-KOM-000016', 'A0007012019', 0, 1),
	(4, '0', 'P000004', '2019-01-28', '2019-01-31', 'B-0002-TNM-000006', 'A0007012019', 0, 1),
	(5, '0', 'P000004', '2019-01-28', '2019-01-31', 'B-0001-KOM-000001', 'A0007012019', 0, 1),
	(6, '0', 'P000004', '2019-01-28', '2019-01-31', 'B-0004-KOM-000018', 'A0007012019', 0, 1),
	(7, '0', 'P000007', '2019-01-28', '2019-01-31', 'B-0001-KOM-000002', 'A0007012019', 0, 1),
	(8, '0', 'P000008', '2019-01-28', '2019-01-31', 'B-0001-KOM-000002', 'A0007012019', 0, 1),
	(9, '0', 'P000008', '2019-01-28', '2019-01-31', 'B-0002-TNM-000008', 'A0007012019', 0, 1),
	(10, '0', 'P000008', '2019-01-28', '2019-01-31', 'B-0004-KOM-000019', 'A0007012019', 0, 1),
	(11, '0', 'P000011', '2019-01-28', '2019-01-31', 'B-0002-TNM-000009', 'A0007012019', 0, 1),
	(12, '0', 'P000011', '2019-01-28', '2019-01-31', 'B-0001-KOM-000004', 'A0007012019', 0, 1),
	(13, '0', 'P000013', '2019-01-28', '2019-01-31', 'B-0002-TNM-000007', 'A0011012019', 0, 1),
	(14, '0', 'P000013', '2019-01-28', '2019-01-31', 'B-0003-KOM-000014', 'A0011012019', 0, 1),
	(15, '0', 'P000013', '2019-01-28', '2019-01-31', 'B-0004-KOM-000017', 'A0011012019', 0, 1),
	(16, '0', 'P000016', '2019-01-28', '2019-01-31', 'B-0001-KOM-000005', 'A0009012019', 0, 1),
	(17, '0', 'P000016', '2019-01-28', '2019-01-31', 'B-0003-KOM-000011', 'A0009012019', 0, 1),
	(18, '0', 'P000016', '2019-01-28', '2019-01-31', 'B-0003-KOM-000012', 'A0009012019', 0, 1),
	(19, '0', 'P000016', '2019-01-28', '2019-01-31', 'B-0003-KOM-000013', 'A0009012019', 0, 1),
	(20, '0', 'P000016', '2019-01-28', '2019-01-31', 'B-0003-KOM-000015', 'A0009012019', 0, 1),
	(21, 'BK-01', 'P000021', '2019-01-28', '2019-01-31', 'B-0001-KOM-000001', 'A0007012019', 36000, 1),
	(22, '0', 'P000022', '2019-01-28', '2019-01-31', 'B-0001-KOM-000002', 'A0008012019', 0, 1),
	(23, '0', 'P000022', '2019-01-28', '2019-01-31', 'B-0003-KOM-000010', 'A0008012019', 0, 1),
	(24, '0', 'P000024', '2019-01-28', '2019-01-31', 'B-0002-TNM-000008', 'A0008012019', 0, 0),
	(25, '0', 'P000025', '2019-01-28', '2019-01-31', 'B-0002-TNM-000008', 'A0008012019', 0, 0),
	(26, '0', 'P000026', '2019-01-28', '2019-01-31', 'B-0002-TNM-000008', 'A0008012019', 0, 0),
	(27, '0', 'P000027', '2019-01-28', '2019-01-31', 'B-0002-TNM-000008', 'A0008012019', 0, 0),
	(28, '0', 'P000028', '2019-01-28', '2019-01-31', 'B-0001-KOM-000004', 'A0008012019', 0, 0),
	(29, '0', 'P000028', '2019-01-28', '2019-01-31', 'B-0002-TNM-000009', 'A0008012019', 0, 0),
	(30, '0', 'P000030', '2019-01-28', '2019-01-31', 'B-0001-KOM-000004', 'A0008012019', 0, 0),
	(31, '0', 'P000030', '2019-01-28', '2019-01-31', 'B-0002-TNM-000009', 'A0008012019', 0, 0),
	(32, '0', 'P000032', '2019-01-28', '2019-02-05', 'B-0001-KOM-000005', 'A0007012019', 0, 1),
	(33, '0', 'P000032', '2019-01-28', '2019-02-05', 'B-0002-TNM-000007', 'A0007012019', 0, 1),
	(34, '0', 'P000032', '2019-01-28', '2019-02-05', 'B-0004-KOM-000016', 'A0007012019', 0, 1),
	(35, '0', 'P000035', '2019-01-30', '2019-02-02', 'B-0003-KOM-000011', 'A0013012019', 0, 0),
	(36, 'BK-01', 'P000035', '2019-01-30', '2019-02-02', 'B-0004-KOM-000017', 'A0013012019', 0, 0),
	(37, '0', 'P000037', '2019-01-30', '2019-02-02', 'B-0003-KOM-000013', 'A0011012019', 4000, 1),
	(38, '0', 'P000037', '2019-01-30', '2019-02-02', 'B-0004-KOM-000019', 'A0011012019', 4000, 1),
	(39, '0', 'P000037', '2019-01-30', '2019-02-02', 'B-0001-KOM-000002', 'A0011012019', 4000, 1),
	(40, '0', 'P06d', '2019-02-04', '2019-02-07', 'B-0001-KOM-000005', 'A0007012019', 0, 1),
	(41, '0', 'P000041', '2019-02-04', '2019-02-07', 'B-0001-KOM-000005', 'A0007012019', 0, 1),
	(42, '0', 'P000042', '2019-02-04', '2019-02-07', 'B-0001-KOM-000005', 'A0007012019', 0, 1),
	(43, '0', 'P000043', '2019-02-04', '2019-02-07', 'B-0001-KOM-000005', 'A0007012019', 0, 1),
	(44, '0', 'P000044', '2019-02-04', '2019-02-07', 'B-0001-KOM-000005', 'A0007012019', 0, 1),
	(45, '0', 'P000045', '2019-02-04', '2019-02-07', 'B-0001-KOM-000005', 'A0007012019', 0, 1),
	(46, '0', 'P000046', '2019-02-04', '2019-02-07', 'B-0001-KOM-000005', 'A0007012019', 0, 1),
	(47, '0', 'P000047', '2019-02-04', '2019-02-07', 'B-0002-TNM-000007', 'A0007012019', 0, 1),
	(48, '0', 'P000047', '2019-02-04', '2019-02-07', 'B-0003-KOM-000014', 'A0007012019', 0, 1),
	(55, '0', 'P000055', '2019-03-18', '2019-03-21', 'B-0002-TNM-000006', 'A0023032019', 0, 2),
	(56, 'BK-01', 'P000055', '2019-03-18', '2019-03-21', 'B-0001-KOM-000002', 'A0023032019', 0, 2),
	(69, 'BK-02', 'P000056', '2019-06-17', '2019-06-20', '0', 'A0001016019', 0, 0),
	(70, 'BK-09', 'P000069', '2019-06-17', '2019-06-20', 'BK-09', 'A0001016019', 2000, 1),
	(71, 'BK-02', 'P000070', '2019-06-17', '2019-06-20', NULL, 'A0001016019', 0, 0),
	(72, 'BK-05', 'P000071', '2019-06-17', '2019-06-20', '0', 'A0001016019', 0, 0),
	(73, 'BK-01', 'P000072', '2019-06-19', '2019-06-22', NULL, 'A0001016019', 0, 0),
	(74, 'BK-09', 'P000073', '2019-06-19', '2019-06-22', '0', '1', 0, 0),
	(75, 'BK-03', 'P000074', '2019-06-24', '2019-06-27', '0', 'A-19062019031', 4000, 1),
	(76, 'BK-03', 'P000075', '2019-06-24', '2019-06-27', '0', 'A-19062019031', 4000, 1),
	(77, 'BK-05', 'P000075', '2019-06-24', '2019-06-27', '0', 'A-19062019031', 4000, 1),
	(78, 'BK-01', 'P000077', '2019-06-24', '2019-06-27', '0', 'A-19062019031', 4000, 1),
	(79, 'BK-02', 'P000077', '2019-06-24', '2019-06-27', '0', 'A-19062019031', 4000, 1);
/*!40000 ALTER TABLE `tb_peminjaman` ENABLE KEYS */;

-- membuang struktur untuk table perpustakaan.tb_penerbit
CREATE TABLE IF NOT EXISTS `tb_penerbit` (
  `kd_penerbit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penerbit` varchar(50) NOT NULL,
  `kota` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`kd_penerbit`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpustakaan.tb_penerbit: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_penerbit` DISABLE KEYS */;
INSERT INTO `tb_penerbit` (`kd_penerbit`, `nama_penerbit`, `kota`) VALUES
	(2, 'V Media', 'Magetun'),
	(3, 'Air', 'Madiun'),
	(5, 'Erlangg', 'Madiun');
/*!40000 ALTER TABLE `tb_penerbit` ENABLE KEYS */;

-- membuang struktur untuk table perpustakaan.tb_pengarang
CREATE TABLE IF NOT EXISTS `tb_pengarang` (
  `kd_pengarang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengarang` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_pengarang`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpustakaan.tb_pengarang: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_pengarang` DISABLE KEYS */;
INSERT INTO `tb_pengarang` (`kd_pengarang`, `nama_pengarang`, `kota`) VALUES
	(1, 'Hendra Wijaya', 'Sumatera'),
	(2, 'Pudji Rahardjo', 'Ngawi'),
	(3, 'Rohmat', 'Madiun'),
	(6, 'Pudji', 'Magetan');
/*!40000 ALTER TABLE `tb_pengarang` ENABLE KEYS */;

-- membuang struktur untuk table perpustakaan.tb_rak
CREATE TABLE IF NOT EXISTS `tb_rak` (
  `kd_rak` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rak` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kd_rak`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpustakaan.tb_rak: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_rak` DISABLE KEYS */;
INSERT INTO `tb_rak` (`kd_rak`, `nama_rak`) VALUES
	(1, 'Komputer 1'),
	(2, 'Tanaman 1');
/*!40000 ALTER TABLE `tb_rak` ENABLE KEYS */;

-- membuang struktur untuk table perpustakaan.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(157) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lv` int(11) DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel perpustakaan.users: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `jk`, `alamat`, `kota`, `telp`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `lv`, `avatar`) VALUES
	(1, 'Nanas', '1', 'Isekai', 'Wonogiri', '2453', 'na@nas.com', NULL, '$2y$10$SbpQzeA8HjT3u8VIQ5FjKODtpp1bkLvtQ3bHYHJg52cJVI5tn9K/C', NULL, '2019-06-19 08:21:12', '2019-06-19 08:21:12', NULL, NULL),
	(3, 'Rohmat', '1', 'Sawahan', 'Madiun', '08560891', 'roh@ty.com', NULL, '$2y$10$QVS6up2bgxLrXsnvGMauuuoxkfpj1jAEbdyI6rpmbFsVifk08Ump.', NULL, '2019-05-14 13:16:09', '2019-05-14 13:16:09', 1, '14-05-2019-levi.png'),
	(4, 'Nancy', '2', 'Jl Ciliwung', 'Jekarda', '089218418', 'nan@cy.com', NULL, '$2y$10$Y9Yg8lZUIArG17PUZa2j9e3eaLJl6gil2/mmID0vXMQ5i7jBpF6/y', 'nqWiJQfji92MNo6RKfdhzrEXXHCNtg0YYBsb546t', '2019-06-26 08:04:47', '2019-06-26 08:04:47', 1, '13-05-2019-nancy.jpg'),
	(5, 'Aken', '2', 'Barat', 'Magetan', '0928371284', 'ken@li.com', NULL, '$2y$10$QVS6up2bgxLrXsnvGMauuuoxkfpj1jAEbdyI6rpmbFsVifk08Ump.', NULL, '2019-05-14 13:01:17', '2019-05-14 13:01:17', 2, '14-05-2019-YeonwooQUE.jpg'),
	(6, 'Nanas Adhi', '1', 'Wonogokil', 'Wonogiri', '08128290381', 'nas@a.com', NULL, '$2y$10$QVS6up2bgxLrXsnvGMauuuoxkfpj1jAEbdyI6rpmbFsVifk08Ump.', NULL, '2019-05-14 13:24:55', '2019-05-14 13:24:55', 2, '14-05-2019-rem.jpg'),
	(7, 'Atho', NULL, NULL, NULL, NULL, 'at@o.com', NULL, '$2y$10$QVS6up2bgxLrXsnvGMauuuoxkfpj1jAEbdyI6rpmbFsVifk08Ump.', NULL, '2019-05-20 13:31:07', '2019-05-20 13:31:07', 1, NULL),
	(8, 'Skipper', NULL, NULL, NULL, NULL, 'ski@p.com', NULL, '$2y$10$39iXy/qdZdC/D0ZI6Gorz.qfrTmEROrIvZZEoxo3wPcxo3exURNZ2', NULL, '2019-06-26 07:19:45', '2019-06-26 07:19:45', 2, NULL),
	(9, 'Kowalski', '1', 'Madagaskar', NULL, NULL, 'kow@p.com', NULL, '$2y$10$.LVojla.MJtyt1q5Ck1Wo.UgpmzQnrP.N5ND/XzXIZoGZ7BtmNZxq', 'nqWiJQfji92MNo6RKfdhzrEXXHCNtg0YYBsb546t', '2019-06-26 08:03:14', '2019-06-26 08:03:14', 1, '26-06-2019-kowalski.png');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
