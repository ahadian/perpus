/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : perpus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-15 13:27:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Budi', 'Admin', null);

-- ----------------------------
-- Table structure for agama
-- ----------------------------
DROP TABLE IF EXISTS `agama`;
CREATE TABLE `agama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agama
-- ----------------------------
INSERT INTO `agama` VALUES ('1', 'Islam');
INSERT INTO `agama` VALUES ('2', 'Protestan');
INSERT INTO `agama` VALUES ('3', 'Katholik');
INSERT INTO `agama` VALUES ('4', 'Hindu');
INSERT INTO `agama` VALUES ('5', 'Budha');
INSERT INTO `agama` VALUES ('6', 'Lain-lain');

-- ----------------------------
-- Table structure for anggota
-- ----------------------------
DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha') NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jenis` enum('Mahasiswa','Dosen') NOT NULL,
  `stat` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of anggota
-- ----------------------------
INSERT INTO `anggota` VALUES ('1', 'Budi Aryadiningrat', 'Desa Lengkong Rt 004/001 Bojongsoang Bandung', '', 'Islam', 'Bandung', '1986-09-22', '', '2015-05-24', 'Mahasiswa', '1');
INSERT INTO `anggota` VALUES ('2', 'Siska Fitriani', 'Cibiru', '', 'Islam', 'Bandung', '1990-05-17', '', '2015-05-24', 'Mahasiswa', '1');
INSERT INTO `anggota` VALUES ('3', 'Ajeng', 'Permata Biru', '', 'Islam', 'Bandung', '1988-05-03', '', '2015-05-24', 'Mahasiswa', '1');
INSERT INTO `anggota` VALUES ('4', 'Dadang Conelo', 'Cicaheum', '', 'Islam', 'Bandung', '2014-07-08', '', '2016-05-14', 'Mahasiswa', '1');

-- ----------------------------
-- Table structure for authors
-- ----------------------------
DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of authors
-- ----------------------------
INSERT INTO `authors` VALUES ('1', 'Asfa Solution', '<p>-</p>\r\n', '');
INSERT INTO `authors` VALUES ('2', 'Budi Suryana', '<p>-</p>\r\n', '');
INSERT INTO `authors` VALUES ('3', 'John Due', '', '');
INSERT INTO `authors` VALUES ('4', 'Muhammad Rizal', '', '');
INSERT INTO `authors` VALUES ('5', 'Angga Nurfauzi', '', '');
INSERT INTO `authors` VALUES ('6', 'Erik Andriyatna', '', '');
INSERT INTO `authors` VALUES ('7', 'Akbar Suprayogi', '', '');
INSERT INTO `authors` VALUES ('8', 'Sendythias Pratama Putra', '', '');
INSERT INTO `authors` VALUES ('9', 'Rendra Yudha', '', '');
INSERT INTO `authors` VALUES ('10', 'Hendra Jatnika', '', '');
INSERT INTO `authors` VALUES ('11', 'Chandra Mecca', '', '');
INSERT INTO `authors` VALUES ('12', 'Dwi Robiul Rachmawati', '', '');

-- ----------------------------
-- Table structure for buku
-- ----------------------------
DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_kelas` varchar(6) NOT NULL,
  `id_jenis` int(2) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `th_terbit` year(4) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `jml_hal` int(6) NOT NULL,
  `asal_perolehan` varchar(100) NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `id_lokasi` int(2) NOT NULL,
  `stat` int(11) NOT NULL,
  `stat_pinjam` int(11) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `tgl_input` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buku
-- ----------------------------
INSERT INTO `buku` VALUES ('1', '', '6', 'Membuat CMS Multifitur', '2', '1', '2010', '978-602-02-6115-7', '0', '', '50000.00', '1', '1', '1', '<p>Buku ini menjelaskan bagaimana mengembangkan sebuah CMS yang tadinya berfungsi untuk keperluan blogging menjadi sebuah CMS multifitur dengan tambahan fungsi e-commerce.</p>\r\n', '0000-00-00 00:00:00');
INSERT INTO `buku` VALUES ('2', '', '2', 'Tauhid', '7', '2', '2015', '12345678910', '0', '', '48000.00', '2', '1', '1', '<p>Buku yang membahas masalah ilmu tauhid.</p>\r\n', '0000-00-00 00:00:00');
INSERT INTO `buku` VALUES ('3', '', '8', 'Sejarah Bangsa Yahudi', '5', '2', '2011', '9786028758888', '0', '', '100000.00', '3', '1', '2', '<p>-</p>\r\n', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ci_sessions
-- ----------------------------
INSERT INTO `ci_sessions` VALUES ('d4180b8ec41901774ab3670b69642adb', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', '1463293490', '');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `pimpinan` varchar(100) NOT NULL,
  `pimpinan_nip` varchar(100) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `petugas_nip` varchar(100) NOT NULL,
  `profil` longtext NOT NULL,
  `denda` int(9) NOT NULL,
  `maks_buku` int(2) NOT NULL,
  `maks_hari` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('0', 'Perpustakaan Politeknik Piksi Ganesha Bandung', 'Jl. Gatot Subroto No. 20 Bandung', 'piksi2.png', 'Budi', '19900326 201501 1 001', '', '', '<p>Kemajuan teknologi informasi, telah menuntut perpustakaan baik milik sekolah atau instansi untuk bertransformasi menjadi perpustakaan berbasis teknologi informasi dalam hal pelayanannya.</p>\r\n\r\n<p>Mau tidak mau, teknologi informasi harus diterapkan dalam semua proses bisnis pelayanan perpustakaan. Salah satu penggunaanya adalah dengan menerapkan Sistem Informasi Perpustakaan. Sistem Informasi Perpustakaan adalah sistem aplikasi/software yang digunakan dalam pengelolaan perpustakaan, seperti manajemen data buku, manajemen data anggota, manajemen data transaksi peminjaman, dan lain sebagainya.&nbsp;</p>\r\n', '1000', '3', '3');

-- ----------------------------
-- Table structure for gender
-- ----------------------------
DROP TABLE IF EXISTS `gender`;
CREATE TABLE `gender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `createddate` date DEFAULT NULL,
  `createduserid` int(11) DEFAULT NULL,
  `modifieddate` date DEFAULT NULL,
  `modifieduserid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gender
-- ----------------------------
INSERT INTO `gender` VALUES ('3', 'Man', '0000-00-00', '0', null, null);
INSERT INTO `gender` VALUES ('4', 'Woman', '0000-00-00', '0', null, null);

-- ----------------------------
-- Table structure for jenis
-- ----------------------------
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE `jenis` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenis
-- ----------------------------
INSERT INTO `jenis` VALUES ('1', 'Ekonomi');
INSERT INTO `jenis` VALUES ('2', 'Agama');
INSERT INTO `jenis` VALUES ('3', 'Elektronik');
INSERT INTO `jenis` VALUES ('4', 'Bahasa Inggris');
INSERT INTO `jenis` VALUES ('5', 'Kebudayaan');
INSERT INTO `jenis` VALUES ('6', 'Komputer');
INSERT INTO `jenis` VALUES ('7', 'Kesehatan');
INSERT INTO `jenis` VALUES ('8', 'Sejarah');
INSERT INTO `jenis` VALUES ('9', 'Sains');

-- ----------------------------
-- Table structure for kondisi
-- ----------------------------
DROP TABLE IF EXISTS `kondisi`;
CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kondisi
-- ----------------------------
INSERT INTO `kondisi` VALUES ('1', 'Baik');
INSERT INTO `kondisi` VALUES ('2', 'Rusak Ringan');
INSERT INTO `kondisi` VALUES ('3', 'Rusak Berat');
INSERT INTO `kondisi` VALUES ('4', 'Hilang');

-- ----------------------------
-- Table structure for libur
-- ----------------------------
DROP TABLE IF EXISTS `libur`;
CREATE TABLE `libur` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of libur
-- ----------------------------
INSERT INTO `libur` VALUES ('2', '2013-03-29', 'Hari Wafat Isa Al Masih');
INSERT INTO `libur` VALUES ('4', '2015-08-17', 'Hari Kemerdekaan Republik Indonesia');
INSERT INTO `libur` VALUES ('5', '2015-05-26', 'Hari Pahlawan');
INSERT INTO `libur` VALUES ('6', '2015-05-30', 'Hari Buruh Nasional');

-- ----------------------------
-- Table structure for lokasi
-- ----------------------------
DROP TABLE IF EXISTS `lokasi`;
CREATE TABLE `lokasi` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of lokasi
-- ----------------------------
INSERT INTO `lokasi` VALUES ('1', 'Rak 1');
INSERT INTO `lokasi` VALUES ('2', 'Rak 2');
INSERT INTO `lokasi` VALUES ('3', 'Rak 3');
INSERT INTO `lokasi` VALUES ('4', 'Rak 4');

-- ----------------------------
-- Table structure for pengunjung
-- ----------------------------
DROP TABLE IF EXISTS `pengunjung`;
CREATE TABLE `pengunjung` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `jenis` enum('Mahasiswa','Dosen') NOT NULL,
  `perlu` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pengunjung
-- ----------------------------
INSERT INTO `pengunjung` VALUES ('1', 'Ajeng', 'P', '', '#Pinjam Buku###', '', '2015-05-24 18:04:40');
INSERT INTO `pengunjung` VALUES ('2', 'Budi Aryadiningrat', 'L', '', '#Pinjam Buku###', '', '2015-05-24 18:04:50');
INSERT INTO `pengunjung` VALUES ('3', 'Budi Suryana', 'L', '', '###Baca Buku#', '', '2016-05-15 13:08:10');

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(75) NOT NULL,
  `address` varchar(150) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('10', 'Aksara', 'Open Source & Free Library Software', 'Antapani', '40291', 'Bandung', '14', '1', '123456789', 'f4013-Untitled.jpeg');

-- ----------------------------
-- Table structure for publishers
-- ----------------------------
DROP TABLE IF EXISTS `publishers`;
CREATE TABLE `publishers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of publishers
-- ----------------------------
INSERT INTO `publishers` VALUES ('1', 'Gramediana');
INSERT INTO `publishers` VALUES ('2', 'PT. Elex Media Komputindo');
INSERT INTO `publishers` VALUES ('3', 'Lokomedia');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `createddate` date DEFAULT NULL,
  `createduserid` int(11) DEFAULT NULL,
  `modifieddate` date DEFAULT NULL,
  `modifieduserid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', 'Admin', '2015-05-18', '1', '2015-05-18', '1');
INSERT INTO `role` VALUES ('2', 'Member', '2015-05-18', '1', '2015-05-18', '1');

-- ----------------------------
-- Table structure for trans
-- ----------------------------
DROP TABLE IF EXISTS `trans`;
CREATE TABLE `trans` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_buku` int(6) NOT NULL,
  `id_anggota` int(6) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `stat` int(11) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `telat` int(2) NOT NULL,
  `denda` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of trans
-- ----------------------------
INSERT INTO `trans` VALUES ('1', '3', '2', '2015-05-24', '2015-06-04', '1', '', '0', '0.00');
INSERT INTO `trans` VALUES ('2', '1', '1', '2015-05-24', '2015-06-04', '1', '', '0', '0.00');
INSERT INTO `trans` VALUES ('3', '2', '3', '2015-05-24', '2015-05-29', '1', '', '0', '0.00');
INSERT INTO `trans` VALUES ('4', '3', '3', '2015-03-27', '2015-04-01', '1', '', '410', '410000.00');
INSERT INTO `trans` VALUES ('5', '1', '1', '2015-03-02', '2015-03-06', '1', '', '436', '436000.00');
INSERT INTO `trans` VALUES ('6', '3', '4', '2016-05-14', '2016-05-18', '2', '', '0', '0.00');
