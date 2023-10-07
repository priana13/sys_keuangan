-- MariaDB dump 10.19  Distrib 10.6.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sys_keuangan
-- ------------------------------------------------------
-- Server version	10.6.12-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kas`
--

DROP TABLE IF EXISTS `kas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('cash','bank') NOT NULL DEFAULT 'cash',
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `no_rek` varchar(255) DEFAULT NULL,
  `atas_nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kas`
--

LOCK TABLES `kas` WRITE;
/*!40000 ALTER TABLE `kas` DISABLE KEYS */;
INSERT INTO `kas` VALUES (1,'bank','Et.',NULL,'17452090','Juwan Crona V','2023-10-06 04:40:15','2023-10-06 04:40:15'),(2,'bank','Est.',NULL,'29182721','Osborne Schowalter','2023-10-06 04:40:15','2023-10-06 04:40:15'),(3,'bank','Et.',NULL,'5530633','Demarco Stark','2023-10-06 04:40:15','2023-10-06 04:40:15'),(4,'cash','Ea.',NULL,'22033311','Prof. Jevon Maggio II','2023-10-06 04:40:15','2023-10-06 04:40:15'),(5,'bank','Quo.',NULL,'1033803','Sydney Hamill MD','2023-10-06 04:40:15','2023-10-06 04:40:15');
/*!40000 ALTER TABLE `kas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Bar & Kichen','Pengeluaran','2023-10-06 04:40:15','2023-10-06 04:40:15'),(2,'Operasional','Pengeluaran','2023-10-06 04:40:15','2023-10-06 04:40:15'),(3,'dagadgad','Pengeluaran','2023-10-06 04:40:15','2023-10-07 02:52:42'),(4,'Band','Pengeluaran','2023-10-06 04:40:15','2023-10-06 04:40:15'),(5,'Komisi Supir','Pengeluaran','2023-10-06 04:40:15','2023-10-06 04:40:15'),(6,'Penjualan','Pemasukan','2023-10-06 04:40:15','2023-10-07 02:53:43'),(7,'Sponsor','Pemasukan','2023-10-06 04:40:15','2023-10-07 02:48:51'),(8,'Pemasukan Lain','Pemasukan','2023-10-06 04:40:15','2023-10-06 04:40:15');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_09_22_235145_create_kategoris_table',1),(6,'2023_09_22_235734_create_kas_table',1),(7,'2023_09_22_235754_create_transaksis_table',1),(8,'2023_09_22_235759_create_pajaks_table',1),(9,'2023_09_22_235806_create_settings_table',1),(10,'2023_09_22_235853_create_nota_bons_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nota_bon`
--

DROP TABLE IF EXISTS `nota_bon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nota_bon` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama_suplier` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nota_bon`
--

LOCK TABLES `nota_bon` WRITE;
/*!40000 ALTER TABLE `nota_bon` DISABLE KEYS */;
INSERT INTO `nota_bon` VALUES (1,'1977-06-12','Sydnie Lowe',450387,'Sudah Bayar','2023-10-06 04:40:15','2023-10-06 04:40:15'),(2,'2005-05-07','Anibal Predovic',246810,'Belum Bayar','2023-10-06 04:40:16','2023-10-06 04:40:16'),(3,'1999-01-08','Dion Jerde',275637,'Belum Bayar','2023-10-06 04:40:16','2023-10-06 04:40:16'),(4,'1995-04-30','Darrick Feest',387104,'Belum Bayar','2023-10-06 04:40:16','2023-10-06 04:40:16'),(5,'2000-10-11','Miss Lenna King',348237,'Belum Bayar','2023-10-06 04:40:16','2023-10-06 04:40:16'),(6,'2016-12-03','Mrs. Mertie Ebert Jr.',499488,'Sudah Bayar','2023-10-06 04:40:16','2023-10-06 04:40:16'),(7,'2007-06-02','Monserrate Schultz II',343719,'Sudah Bayar','2023-10-06 04:40:16','2023-10-06 04:40:16'),(8,'1990-11-02','Miss Dolores Abshire',211068,'Belum Bayar','2023-10-06 04:40:16','2023-10-06 04:40:16'),(9,'1996-07-23','Dr. Carley Gutmann',299943,'Sudah Bayar','2023-10-06 04:40:16','2023-10-06 04:40:16'),(10,'1979-04-18','Prof. Lilly Bechtelar',461082,'Sudah Bayar','2023-10-06 04:40:16','2023-10-06 04:40:16');
/*!40000 ALTER TABLE `nota_bon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pajak`
--

DROP TABLE IF EXISTS `pajak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pajak` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pajak`
--

LOCK TABLES `pajak` WRITE;
/*!40000 ALTER TABLE `pajak` DISABLE KEYS */;
INSERT INTO `pajak` VALUES (1,'08','2020',457870,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(2,'07','2021',206423,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(3,'11','2018',545884,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(4,'06','2018',269844,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(5,'03','2019',725461,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(6,'09','2022',231439,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(7,'02','2020',244480,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(8,'01','2019',438778,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(9,'02','2020',487597,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(10,'11','2019',120127,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(11,'11','2019',387214,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(12,'06','2022',667688,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(13,'02','2020',701102,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(14,'09','2021',394010,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(15,'10','2023',253764,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(16,'05','2020',128390,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(17,'11','2018',610558,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(18,'01','2023',660762,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(19,'03','2021',456325,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(20,'02','2019',459016,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(21,'09','2023',188402,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(22,'02','2019',268986,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(23,'01','2023',344200,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(24,'10','2022',384946,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(25,'11','2021',673274,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(26,'11','2022',410868,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(27,'11','2023',414472,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(28,'10','2020',144885,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(29,'02','2018',228406,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(30,'07','2022',106113,'2023-10-06 04:40:16','2023-10-06 04:40:16'),(31,'11','2023',450000,'2023-10-07 03:01:48','2023-10-07 03:01:48');
/*!40000 ALTER TABLE `pajak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` VALUES (1,'nama_perusahaan','PT. Berkah Berkarya','2023-10-06 15:06:28','2023-10-06 15:08:08'),(2,'alamat','Jl. Kebagusan','2023-10-06 15:08:34','2023-10-06 15:09:18'),(3,'logo','aFVwnK4sXkQgs6XGTKuJOdMKeSxAzVKu5L2qJtHX.jpg','2023-10-06 15:13:48','2023-10-06 15:20:42');
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `kategori_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `kas_id` bigint(20) unsigned NOT NULL,
  `metode_bayar` enum('cash','bank') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaksi_kategori_id_foreign` (`kategori_id`),
  KEY `transaksi_user_id_foreign` (`user_id`),
  KEY `transaksi_kas_id_foreign` (`kas_id`),
  CONSTRAINT `transaksi_kas_id_foreign` FOREIGN KEY (`kas_id`) REFERENCES `kas` (`id`),
  CONSTRAINT `transaksi_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  CONSTRAINT `transaksi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (1,'2023-01-06','Pengeluaran',18351,'Saepe sed.',2,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(2,'2023-01-06','Pemasukan',290418,'Ipsa sunt.',8,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(3,'2023-01-06','Pemasukan',373879,'Nihil.',7,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(4,'2023-01-06','Pemasukan',139583,'Quia aut.',6,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(5,'2023-01-06','Pengeluaran',13627,'Alias.',4,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(6,'2023-01-06','Pemasukan',277634,'Ullam.',6,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(7,'2023-01-06','Pemasukan',244245,'Est quos.',7,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(8,'2023-01-06','Pengeluaran',37589,'Possimus.',1,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(9,'2023-01-06','Pengeluaran',38459,'Enim.',3,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(10,'2023-01-06','Pemasukan',303691,'At animi.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(11,'2023-01-06','Pengeluaran',34169,'Beatae.',2,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(12,'2023-01-06','Pengeluaran',27967,'Sit nulla.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(13,'2023-01-06','Pengeluaran',29088,'Totam.',5,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(14,'2023-01-06','Pemasukan',278081,'Iste aut.',7,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(15,'2023-01-06','Pengeluaran',31252,'Hic in.',4,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(16,'2023-01-06','Pengeluaran',22098,'Dolores.',1,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(17,'2023-01-06','Pengeluaran',16841,'Impedit.',4,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(18,'2023-01-06','Pemasukan',234816,'Corporis.',8,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(19,'2023-01-06','Pemasukan',332481,'Dolores.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(20,'2023-01-06','Pengeluaran',16276,'Ex.',1,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(21,'2023-02-06','Pengeluaran',33149,'Libero.',4,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(22,'2023-02-06','Pengeluaran',32232,'Dolore.',1,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(23,'2023-02-06','Pemasukan',155064,'Quia aut.',8,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(24,'2023-02-06','Pengeluaran',39590,'Et.',3,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(25,'2023-02-06','Pengeluaran',24898,'Qui.',1,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(26,'2023-02-06','Pengeluaran',15638,'Occaecati.',5,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(27,'2023-02-06','Pemasukan',109516,'Sunt sit.',8,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(28,'2023-02-06','Pemasukan',275032,'Eum alias.',8,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(29,'2023-02-06','Pengeluaran',34083,'Adipisci.',5,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(30,'2023-02-06','Pemasukan',275833,'Quibusdam.',7,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(31,'2023-02-06','Pengeluaran',23802,'Voluptas.',5,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(32,'2023-02-06','Pengeluaran',14803,'Quia sit.',1,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(33,'2023-02-06','Pemasukan',380813,'Eius iure.',8,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(34,'2023-02-06','Pengeluaran',11965,'Illum.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(35,'2023-02-06','Pengeluaran',29995,'Mollitia.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(36,'2023-02-06','Pemasukan',325879,'Nobis.',8,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(37,'2023-02-06','Pemasukan',129199,'Maxime.',6,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(38,'2023-02-06','Pengeluaran',20037,'Aliquam.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(39,'2023-02-06','Pengeluaran',15786,'Labore.',4,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(40,'2023-02-06','Pengeluaran',11505,'Et.',1,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(41,'2023-03-06','Pengeluaran',39661,'Eos dolor.',5,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(42,'2023-03-06','Pengeluaran',27965,'Rerum ut.',3,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(43,'2023-03-06','Pengeluaran',35623,'Omnis.',2,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(44,'2023-03-06','Pemasukan',161371,'Ab rerum.',6,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(45,'2023-03-06','Pengeluaran',16144,'Iste.',2,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(46,'2023-03-06','Pengeluaran',29790,'Dolorem.',5,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(47,'2023-03-06','Pengeluaran',31923,'Officiis.',4,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(48,'2023-03-06','Pengeluaran',17238,'Et.',1,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(49,'2023-03-06','Pengeluaran',32369,'Error cum.',5,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(50,'2023-03-06','Pengeluaran',32575,'Ut sed ut.',5,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(51,'2023-03-06','Pengeluaran',21853,'Eos esse.',5,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(52,'2023-03-06','Pemasukan',118968,'Impedit.',8,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(53,'2023-03-06','Pengeluaran',20659,'Rem.',5,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(54,'2023-03-06','Pengeluaran',33466,'Aut.',5,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(55,'2023-03-06','Pengeluaran',39669,'Sapiente.',5,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(56,'2023-03-06','Pengeluaran',29907,'Voluptas.',3,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(57,'2023-03-06','Pemasukan',180199,'Porro.',8,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(58,'2023-03-06','Pemasukan',139740,'Explicabo.',7,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(59,'2023-03-06','Pemasukan',367364,'Aliquid.',8,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(60,'2023-03-06','Pengeluaran',25331,'Dolorum.',4,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(61,'2023-04-06','Pengeluaran',20447,'Aperiam.',5,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(62,'2023-04-06','Pengeluaran',35613,'Ut vel.',3,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(63,'2023-04-06','Pengeluaran',16990,'Totam a.',4,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(64,'2023-04-06','Pengeluaran',13487,'Porro.',2,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(65,'2023-04-06','Pemasukan',178503,'Suscipit.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(66,'2023-04-06','Pengeluaran',10183,'Occaecati.',1,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(67,'2023-04-06','Pemasukan',239562,'Sint.',8,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(68,'2023-04-06','Pengeluaran',12124,'Magni.',4,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(69,'2023-04-06','Pemasukan',353148,'Laborum.',7,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(70,'2023-04-06','Pengeluaran',25177,'Voluptas.',2,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(71,'2023-04-06','Pemasukan',263555,'Qui ipsa.',8,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(72,'2023-04-06','Pemasukan',249979,'Fugiat.',8,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(73,'2023-04-06','Pemasukan',373635,'Molestiae.',6,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(74,'2023-04-06','Pengeluaran',39785,'Aliquid.',3,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(75,'2023-04-06','Pengeluaran',35130,'Aut.',2,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(76,'2023-04-06','Pemasukan',128769,'Id.',8,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(77,'2023-04-06','Pemasukan',277260,'Quis.',7,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(78,'2023-04-06','Pengeluaran',15204,'Omnis.',4,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(79,'2023-04-06','Pengeluaran',22291,'Esse cum.',4,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(80,'2023-04-06','Pengeluaran',25699,'Voluptate.',3,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(81,'2023-05-06','Pengeluaran',24996,'Facilis.',5,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(82,'2023-05-06','Pengeluaran',13048,'Dolor.',3,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(83,'2023-05-06','Pengeluaran',12860,'Fugit.',4,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(84,'2023-05-06','Pemasukan',232496,'Ea quasi.',8,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(85,'2023-05-06','Pemasukan',317302,'Neque sit.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(86,'2023-05-06','Pengeluaran',36579,'Molestiae.',5,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(87,'2023-05-06','Pemasukan',399457,'Atque et.',7,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(88,'2023-05-06','Pengeluaran',35250,'Tenetur.',5,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(89,'2023-05-06','Pemasukan',112435,'Neque.',8,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(90,'2023-05-06','Pemasukan',317056,'Non in.',7,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(91,'2023-05-06','Pemasukan',371246,'Beatae.',8,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(92,'2023-05-06','Pengeluaran',23091,'Magnam.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(93,'2023-05-06','Pengeluaran',12564,'Delectus.',2,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(94,'2023-05-06','Pengeluaran',30241,'Dicta.',4,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(95,'2023-05-06','Pemasukan',322067,'Illo.',6,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(96,'2023-05-06','Pemasukan',251991,'Culpa ea.',7,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(97,'2023-05-06','Pemasukan',378001,'Et velit.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(98,'2023-05-06','Pemasukan',381568,'Nobis ut.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(99,'2023-05-06','Pengeluaran',32316,'Veniam.',1,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(100,'2023-05-06','Pengeluaran',21390,'Tempore.',2,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(101,'2023-06-06','Pemasukan',262715,'Soluta ad.',8,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(102,'2023-06-06','Pengeluaran',25064,'Placeat.',4,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(103,'2023-06-06','Pengeluaran',37338,'Qui.',5,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(104,'2023-06-06','Pemasukan',371872,'Animi.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(105,'2023-06-06','Pengeluaran',22931,'Quidem.',4,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(106,'2023-06-06','Pemasukan',212354,'Dolor.',8,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(107,'2023-06-06','Pengeluaran',16481,'Velit.',2,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(108,'2023-06-06','Pemasukan',296128,'Nihil.',8,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(109,'2023-06-06','Pengeluaran',15543,'Labore.',5,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(110,'2023-06-06','Pengeluaran',18031,'Aut aut.',5,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(111,'2023-06-06','Pengeluaran',34095,'Corporis.',3,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(112,'2023-06-06','Pemasukan',360428,'Deserunt.',8,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(113,'2023-06-06','Pemasukan',174578,'Qui et.',8,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(114,'2023-06-06','Pemasukan',392053,'Illo sint.',7,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(115,'2023-06-06','Pengeluaran',37915,'Accusamus.',1,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(116,'2023-06-06','Pemasukan',213497,'Porro.',8,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(117,'2023-06-06','Pengeluaran',31533,'Itaque id.',2,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(118,'2023-06-06','Pengeluaran',25432,'Est qui.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(119,'2023-06-06','Pengeluaran',16399,'Et saepe.',3,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(120,'2023-06-06','Pemasukan',395633,'Ratione.',6,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(121,'2023-07-06','Pemasukan',289817,'Ut et.',7,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(122,'2023-07-06','Pemasukan',221470,'Quia ut.',6,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(123,'2023-07-06','Pemasukan',316098,'Dolorem.',8,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(124,'2023-07-06','Pengeluaran',14495,'Modi eum.',3,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(125,'2023-07-06','Pemasukan',394494,'Quos.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(126,'2023-07-06','Pengeluaran',38232,'Velit.',5,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(127,'2023-07-06','Pengeluaran',33046,'Sapiente.',4,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(128,'2023-07-06','Pengeluaran',26151,'Ab.',5,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(129,'2023-07-06','Pengeluaran',12370,'Et.',5,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(130,'2023-07-06','Pemasukan',219531,'Facilis.',7,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(131,'2023-07-06','Pengeluaran',21867,'Nulla.',2,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(132,'2023-07-06','Pemasukan',359677,'Quisquam.',6,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(133,'2023-07-06','Pemasukan',339185,'Esse.',7,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(134,'2023-07-06','Pemasukan',320341,'Delectus.',8,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(135,'2023-07-06','Pengeluaran',21500,'Odit.',5,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(136,'2023-07-06','Pengeluaran',12210,'Hic.',2,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(137,'2023-07-06','Pemasukan',377589,'Eaque.',6,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(138,'2023-07-06','Pemasukan',207479,'Aut.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(139,'2023-07-06','Pengeluaran',30821,'Quia eos.',5,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(140,'2023-07-06','Pemasukan',254158,'Qui est.',6,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(141,'2023-08-06','Pengeluaran',29178,'Et earum.',2,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(142,'2023-08-06','Pengeluaran',23057,'Deleniti.',5,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(143,'2023-08-06','Pengeluaran',10884,'Est ut.',5,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(144,'2023-08-06','Pemasukan',107648,'Tenetur.',7,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(145,'2023-08-06','Pengeluaran',26388,'Molestias.',3,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(146,'2023-08-06','Pemasukan',156552,'Sit quo.',8,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(147,'2023-08-06','Pemasukan',270754,'Dolor sit.',6,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(148,'2023-08-06','Pengeluaran',12935,'Minus.',3,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(149,'2023-08-06','Pengeluaran',10020,'Et soluta.',1,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(150,'2023-08-06','Pemasukan',325119,'Minus in.',6,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(151,'2023-08-06','Pemasukan',136279,'Velit.',6,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(152,'2023-08-06','Pemasukan',349385,'Dolorum.',7,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(153,'2023-08-06','Pemasukan',218059,'Rem.',8,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(154,'2023-08-06','Pemasukan',178582,'Dolorem.',7,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(155,'2023-08-06','Pemasukan',120592,'Facere.',6,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(156,'2023-08-06','Pengeluaran',14934,'Et.',4,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(157,'2023-08-06','Pengeluaran',13993,'Magnam.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(158,'2023-08-06','Pemasukan',341199,'Sunt aut.',7,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(159,'2023-08-06','Pengeluaran',32769,'Iure.',2,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(160,'2023-08-06','Pengeluaran',31655,'Esse.',2,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(161,'2023-09-06','Pengeluaran',26614,'Vel cum.',2,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(162,'2023-09-06','Pengeluaran',22282,'Voluptas.',1,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(163,'2023-09-06','Pemasukan',283364,'Sapiente.',7,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(164,'2023-09-06','Pemasukan',212176,'Et rerum.',7,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(165,'2023-09-06','Pengeluaran',13983,'Dolores.',5,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(166,'2023-09-06','Pemasukan',327834,'Aut.',8,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(167,'2023-09-06','Pengeluaran',25465,'Non aut.',3,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(168,'2023-09-06','Pemasukan',332476,'Harum.',7,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(169,'2023-09-06','Pengeluaran',27536,'Tempore.',4,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(170,'2023-09-06','Pengeluaran',36562,'Labore.',3,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(171,'2023-09-06','Pengeluaran',24328,'Delectus.',5,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(172,'2023-09-06','Pengeluaran',21079,'Quia et.',1,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(173,'2023-09-06','Pemasukan',225264,'Quis hic.',6,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(174,'2023-09-06','Pengeluaran',26530,'Et.',5,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(175,'2023-09-06','Pengeluaran',22121,'Beatae.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(176,'2023-09-06','Pengeluaran',16948,'Aliquid.',2,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(177,'2023-09-06','Pengeluaran',18608,'A.',4,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(178,'2023-09-06','Pemasukan',304665,'Molestias.',6,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(179,'2023-09-06','Pemasukan',116100,'Incidunt.',6,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(180,'2023-09-06','Pengeluaran',32014,'Aperiam.',1,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(181,'2023-10-06','Pengeluaran',25659,'Eius.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(182,'2023-10-06','Pengeluaran',28468,'Omnis.',4,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(183,'2023-10-06','Pemasukan',192884,'Est.',7,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(184,'2023-10-06','Pengeluaran',21963,'Maxime.',5,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(185,'2023-10-06','Pemasukan',138499,'Occaecati.',8,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(186,'2023-10-06','Pengeluaran',16410,'Ipsam.',3,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(187,'2023-10-06','Pemasukan',250372,'Vel velit.',8,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(188,'2023-10-06','Pengeluaran',13465,'Rem.',2,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(189,'2023-10-06','Pengeluaran',27854,'Sapiente.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(190,'2023-10-06','Pengeluaran',17868,'Labore.',4,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(191,'2023-10-06','Pengeluaran',22432,'Non sit.',4,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(192,'2023-10-06','Pengeluaran',19864,'Dolorem.',3,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(193,'2023-10-06','Pemasukan',124136,'Aut.',8,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(194,'2023-10-06','Pemasukan',302923,'Incidunt.',6,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(195,'2023-10-06','Pemasukan',178235,'Dolores.',8,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(196,'2023-10-06','Pengeluaran',22989,'Eum eos.',1,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(197,'2023-10-06','Pengeluaran',35926,'Placeat.',5,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(198,'2023-10-06','Pengeluaran',27079,'Ut.',4,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(199,'2023-10-06','Pengeluaran',17588,'Quod.',2,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(200,'2023-10-06','Pengeluaran',18517,'Culpa.',3,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(201,'2023-11-06','Pemasukan',142218,'A.',8,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(202,'2023-11-06','Pemasukan',336195,'Molestiae.',6,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(203,'2023-11-06','Pengeluaran',39953,'Debitis.',1,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(204,'2023-11-06','Pengeluaran',24892,'Natus id.',1,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(205,'2023-11-06','Pengeluaran',18819,'Totam.',4,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(206,'2023-11-06','Pengeluaran',31325,'Et.',4,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(207,'2023-11-06','Pengeluaran',13344,'Quidem.',3,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(208,'2023-11-06','Pengeluaran',34794,'Hic magni.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(209,'2023-11-06','Pengeluaran',34719,'At.',4,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(210,'2023-11-06','Pengeluaran',13072,'Adipisci.',4,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(211,'2023-11-06','Pengeluaran',34916,'Eos.',4,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(212,'2023-11-06','Pengeluaran',10005,'Culpa.',4,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(213,'2023-11-06','Pemasukan',190637,'Expedita.',8,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(214,'2023-11-06','Pemasukan',396400,'Neque sit.',8,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(215,'2023-11-06','Pemasukan',284183,'Aut.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(216,'2023-11-06','Pengeluaran',37398,'Eveniet.',5,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(217,'2023-11-06','Pemasukan',105997,'Qui.',8,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(218,'2023-11-06','Pengeluaran',36519,'Ipsam.',1,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(219,'2023-11-06','Pengeluaran',38301,'Natus.',2,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(220,'2023-11-06','Pemasukan',292260,'Laborum.',7,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(221,'2023-12-06','Pengeluaran',39402,'Tempore.',4,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(222,'2023-12-06','Pengeluaran',22408,'Cum.',5,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(223,'2023-12-06','Pemasukan',373124,'Eius.',7,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(224,'2023-12-06','Pemasukan',254807,'Quia.',8,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(225,'2023-12-06','Pengeluaran',34654,'Dolorum.',2,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(226,'2023-12-06','Pengeluaran',38970,'Sed fugit.',3,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(227,'2023-12-06','Pengeluaran',30912,'Non.',1,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(228,'2023-12-06','Pengeluaran',23363,'Aliquid.',5,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(229,'2023-12-06','Pengeluaran',30883,'Eum.',3,1,4,'cash','2023-10-06 04:40:15','2023-10-06 04:40:15'),(230,'2023-12-06','Pemasukan',129015,'Vero ut.',6,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(231,'2023-12-06','Pemasukan',382029,'Molestias.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(232,'2023-12-06','Pemasukan',224098,'Corporis.',6,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(233,'2023-12-06','Pemasukan',144855,'Et.',7,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(234,'2023-12-06','Pemasukan',372722,'At.',7,1,5,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(235,'2023-12-06','Pengeluaran',10604,'Magni.',3,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(236,'2023-12-06','Pemasukan',159287,'Alias.',8,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(237,'2023-12-06','Pengeluaran',23648,'Debitis.',2,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(238,'2023-12-06','Pengeluaran',38815,'Sunt.',5,1,3,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(239,'2023-12-06','Pemasukan',329757,'Iusto.',6,1,1,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15'),(240,'2023-12-06','Pemasukan',127468,'Voluptate.',8,1,2,'bank','2023-10-06 04:40:15','2023-10-06 04:40:15');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@example.com','2023-10-06 04:40:15','$2y$10$ze0XRrfVD2E.YHLjjv.xCOmPHgSPwYNjvrbLmf3RebQrB3Nltnxy.','Administrator','1lrCAHA524','2023-10-06 04:40:15','2023-10-06 04:40:15');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-07 23:04:28
