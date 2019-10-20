/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.5-10.1.31-MariaDB : Database - persuratan_hkln
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `ph_ms_disposisi` */

DROP TABLE IF EXISTS `ph_ms_disposisi`;

CREATE TABLE `ph_ms_disposisi` (
  `id_ms_disposisi` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipe` varchar(50) DEFAULT 'Bagian',
  `nama_disposisi` varchar(191) NOT NULL,
  PRIMARY KEY (`id_ms_disposisi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `ph_ms_disposisi` */

insert  into `ph_ms_disposisi`(`id_ms_disposisi`,`tipe`,`nama_disposisi`) values (4,'Bagian','Bagian TU'),(5,'Kepala Biro','Kepala Biro TU');

/*Table structure for table `ph_role` */

DROP TABLE IF EXISTS `ph_role`;

CREATE TABLE `ph_role` (
  `id_role` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ph_role` */

insert  into `ph_role`(`id_role`,`nama`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (1,'Admin','2019-10-20 13:31:18',NULL,NULL,NULL),(2,'Staff TU','2019-10-20 20:36:34',NULL,NULL,NULL);

/*Table structure for table `ph_surat_disposisi` */

DROP TABLE IF EXISTS `ph_surat_disposisi`;

CREATE TABLE `ph_surat_disposisi` (
  `id_surat_disposisi` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_surat` bigint(20) NOT NULL,
  `id_ms_disposisi` bigint(20) NOT NULL,
  PRIMARY KEY (`id_surat_disposisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ph_surat_disposisi` */

/*Table structure for table `ph_surat_masuk` */

DROP TABLE IF EXISTS `ph_surat_masuk`;

CREATE TABLE `ph_surat_masuk` (
  `id_surat` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `barcode` varchar(100) NOT NULL,
  `nomor_surat` varchar(191) NOT NULL,
  `sifat_surat` varchar(50) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `perihal` varchar(191) NOT NULL,
  `nama_pengirim` varchar(191) NOT NULL,
  `nama_tujuan` varchar(191) NOT NULL,
  `ringkasan` text,
  `tindak_lanjut` tinyint(2) DEFAULT '0',
  `id_ms_disposisi` bigint(20) DEFAULT NULL,
  `bagian_disposisi` varchar(191) DEFAULT NULL,
  `isi_disposisi` text,
  `catatan_disposisi` text,
  `tanggal_penyelesaian` date DEFAULT NULL,
  `tanggal_terima` date NOT NULL,
  `tanggal_surat` date NOT NULL,
  `disposisi_print` tinyint(2) DEFAULT '0',
  `disposisi_arsip_print` tinyint(2) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `ph_surat_masuk` */

insert  into `ph_surat_masuk`(`id_surat`,`barcode`,`nomor_surat`,`sifat_surat`,`jenis_surat`,`perihal`,`nama_pengirim`,`nama_tujuan`,`ringkasan`,`tindak_lanjut`,`id_ms_disposisi`,`bagian_disposisi`,`isi_disposisi`,`catatan_disposisi`,`tanggal_penyelesaian`,`tanggal_terima`,`tanggal_surat`,`disposisi_print`,`disposisi_arsip_print`,`created_at`,`updated_at`,`created_by`) values (4,'99861665541','ASDF','Biasa','Surat Biasa','Undangan','Reres','Erer','asdasdasd',0,5,'Bagian TU','Teliti','','2019-11-04','2019-10-01','2019-10-01',1,1,'2019-10-20 17:00:22','0000-00-00 00:00:00',NULL);

/*Table structure for table `ph_user` */

DROP TABLE IF EXISTS `ph_user`;

CREATE TABLE `ph_user` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(191) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_role` bigint(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ph_user` */

insert  into `ph_user`(`id_user`,`username`,`password`,`nama`,`id_role`,`updated_at`,`created_at`,`updated_by`,`created_by`) values (1,'rere','997ab1536cd440d2daec3e26f96853e0','Rere',1,NULL,'2019-10-20 15:16:50',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
