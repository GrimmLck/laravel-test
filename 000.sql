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


-- Membuang struktur basisdata untuk hotel
CREATE DATABASE IF NOT EXISTS `hotel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hotel`;

-- membuang struktur untuk table hotel.aktivitas_karyawan
CREATE TABLE IF NOT EXISTS `aktivitas_karyawan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_kary` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktivitas` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel hotel.aktivitas_karyawan: ~1 rows (lebih kurang)
DELETE FROM `aktivitas_karyawan`;
/*!40000 ALTER TABLE `aktivitas_karyawan` DISABLE KEYS */;
INSERT INTO `aktivitas_karyawan` (`id`, `nama_kary`, `info_kary`, `aktivitas`, `created_at`, `updated_at`) VALUES
	(1, 'Nanas Sultan Sagiri', 'wbm 08989', 'Menambahkan Blok: Blok Jati', '2019-08-27 06:12:14', '2019-08-27 06:12:14');
/*!40000 ALTER TABLE `aktivitas_karyawan` ENABLE KEYS */;

-- membuang struktur untuk table hotel.blok
CREATE TABLE IF NOT EXISTS `blok` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_blok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel hotel.blok: ~1 rows (lebih kurang)
DELETE FROM `blok`;
/*!40000 ALTER TABLE `blok` DISABLE KEYS */;
INSERT INTO `blok` (`id`, `nama_blok`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'Blok Jati', 'Sebelah Hutan Jati', '2019-08-27 06:12:13', '2019-08-27 06:12:13');
/*!40000 ALTER TABLE `blok` ENABLE KEYS */;

-- membuang struktur untuk table hotel.bookings
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_kamar` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `id_pelanggan` int(10) unsigned NOT NULL,
  `checkin_time` datetime DEFAULT NULL,
  `checkout_time` datetime DEFAULT NULL,
  `total` double NOT NULL,
  `lama_menginap` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel hotel.bookings: ~0 rows (lebih kurang)
DELETE FROM `bookings`;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;

-- membuang struktur untuk table hotel.kamar
CREATE TABLE IF NOT EXISTS `kamar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blok_id` int(11) NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `fasilitas` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel hotel.kamar: ~0 rows (lebih kurang)
DELETE FROM `kamar`;
/*!40000 ALTER TABLE `kamar` DISABLE KEYS */;
/*!40000 ALTER TABLE `kamar` ENABLE KEYS */;

-- membuang struktur untuk table hotel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel hotel.migrations: ~7 rows (lebih kurang)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(42, '2014_10_12_000000_create_users_table', 1),
	(43, '2014_10_12_100000_create_password_resets_table', 1),
	(44, '2019_08_08_071825_create_kamar_table', 1),
	(45, '2019_08_08_071916_create_bookings_table', 1),
	(46, '2019_08_10_051339_create_aktivitas_karyawan_table', 1),
	(47, '2019_08_14_040129_create_blok_table', 1),
	(48, '2019_08_20_040920_create_pelanggan_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- membuang struktur untuk table hotel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel hotel.password_resets: ~0 rows (lebih kurang)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- membuang struktur untuk table hotel.pelanggan
CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_ktp` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel hotel.pelanggan: ~0 rows (lebih kurang)
DELETE FROM `pelanggan`;
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;

-- membuang struktur untuk table hotel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Superuser','Admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel hotel.users: ~1 rows (lebih kurang)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `fullname`, `email`, `email_verified_at`, `password`, `jenis_kelamin`, `telp`, `alamat`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Nanas Sultan Sagiri', 'nss@email.com', NULL, '$2y$10$gOSvvU5B2VLi47SL9BBvuuslMRcIhakWlKXE4OqiHRx9igJykHFmS', 'laki-laki', '08989', 'wbm', 'Admin', NULL, '2019-08-27 06:11:33', '2019-08-27 06:11:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
