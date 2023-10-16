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
  `type` enum('Cash','Bank') NOT NULL DEFAULT 'Cash',
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
INSERT INTO `kas` VALUES (1,'Cash','Cash',NULL,'24204539','Jarrod Labadie','2023-10-16 04:43:47','2023-10-16 04:43:47'),(2,'Cash','BCA',NULL,'4264325','Dessie Connelly','2023-10-16 04:43:47','2023-10-16 04:43:47'),(3,'Bank','BNI',NULL,'17263639','Felipa Reilly','2023-10-16 04:43:47','2023-10-16 04:43:47'),(4,'Bank','BNI',NULL,'17487576','Bethany Schneider','2023-10-16 04:43:47','2023-10-16 04:43:47'),(5,'Cash','Mandiri',NULL,'8354834','Guiseppe Conroy','2023-10-16 04:43:47','2023-10-16 04:43:47');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Bar & Kichen','Pengeluaran','2023-10-16 04:43:47','2023-10-16 04:43:47'),(2,'Operasional','Pengeluaran','2023-10-16 04:43:47','2023-10-16 04:43:47'),(3,'Asset','Pengeluaran','2023-10-16 04:43:47','2023-10-16 04:43:47'),(4,'Band','Pengeluaran','2023-10-16 04:43:47','2023-10-16 04:43:47'),(5,'Komisi Supir','Pengeluaran','2023-10-16 04:43:47','2023-10-16 04:43:47'),(6,'Penjualan','Pemasukan','2023-10-16 04:43:47','2023-10-16 04:43:47'),(7,'Sponsor','Pemasukan','2023-10-16 04:43:47','2023-10-16 04:43:47'),(8,'Pemasukan Lain','Pemasukan','2023-10-16 04:43:47','2023-10-16 04:43:47');
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
INSERT INTO `nota_bon` VALUES (1,'2003-01-19','Freda Spinka',496559,'Sudah Bayar','2023-10-16 04:43:48','2023-10-16 04:43:48'),(2,'2001-12-31','Mona Gleichner PhD',352713,'Belum Bayar','2023-10-16 04:43:48','2023-10-16 04:43:48'),(3,'1982-09-01','Johnathan Dicki V',246280,'Sudah Bayar','2023-10-16 04:43:48','2023-10-16 04:43:48'),(4,'2011-04-13','Dr. Eldon Ortiz',212817,'Belum Bayar','2023-10-16 04:43:48','2023-10-16 04:43:48'),(5,'2012-03-02','Macie Gottlieb',309539,'Belum Bayar','2023-10-16 04:43:48','2023-10-16 04:43:48'),(6,'1972-01-25','Dora Kuhic III',233138,'Belum Bayar','2023-10-16 04:43:48','2023-10-16 04:43:48'),(7,'2007-02-09','Genesis Dibbert',208221,'Belum Bayar','2023-10-16 04:43:48','2023-10-16 04:43:48'),(8,'1983-11-06','Manley Hoppe',378241,'Sudah Bayar','2023-10-16 04:43:48','2023-10-16 04:43:48'),(9,'1996-12-11','Mr. Dudley Becker',267787,'Sudah Bayar','2023-10-16 04:43:48','2023-10-16 04:43:48'),(10,'1971-11-10','Elyse Flatley',251363,'Sudah Bayar','2023-10-16 04:43:48','2023-10-16 04:43:48');
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pajak`
--

LOCK TABLES `pajak` WRITE;
/*!40000 ALTER TABLE `pajak` DISABLE KEYS */;
INSERT INTO `pajak` VALUES (1,'08','2020',218193,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(2,'05','2021',106797,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(3,'08','2023',286752,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(4,'07','2019',408077,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(5,'12','2021',639269,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(6,'07','2023',257568,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(7,'08','2021',317187,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(8,'09','2021',200981,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(9,'04','2021',309609,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(10,'05','2022',511720,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(11,'11','2022',277623,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(12,'12','2021',555081,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(13,'01','2022',419848,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(14,'09','2018',692478,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(15,'05','2019',158105,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(16,'04','2019',689038,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(17,'11','2019',360676,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(18,'12','2018',491938,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(19,'07','2020',612462,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(20,'05','2020',549615,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(21,'08','2018',309329,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(22,'03','2022',739818,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(23,'08','2023',680904,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(24,'10','2019',387070,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(25,'04','2023',144899,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(26,'04','2021',639507,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(27,'09','2019',241479,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(28,'08','2023',317338,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(29,'03','2020',607910,'2023-10-16 04:43:48','2023-10-16 04:43:48'),(30,'01','2022',745169,'2023-10-16 04:43:48','2023-10-16 04:43:48');
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
INSERT INTO `setting` VALUES (1,'logo','','2023-10-16 04:43:50','2023-10-16 04:43:50'),(2,'nama_perusahaan','','2023-10-16 04:43:50','2023-10-16 04:43:50'),(3,'alamat','','2023-10-16 04:43:50','2023-10-16 04:43:50');
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
INSERT INTO `transaksi` VALUES (1,'2023-01-16','Pemasukan',167842,'Qui animi.',6,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(2,'2023-01-16','Pengeluaran',38773,'Dolorem.',4,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(3,'2023-01-16','Pengeluaran',16212,'Molestias.',5,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(4,'2023-01-16','Pengeluaran',21820,'Minus.',3,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(5,'2023-01-16','Pemasukan',388356,'Quo.',6,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(6,'2023-01-16','Pengeluaran',33746,'Ut dicta.',2,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(7,'2023-01-16','Pemasukan',166239,'Qui.',7,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(8,'2023-01-16','Pemasukan',351532,'Corrupti.',7,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(9,'2023-01-16','Pengeluaran',23822,'Ut et.',2,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(10,'2023-01-16','Pemasukan',372016,'Id enim.',8,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(11,'2023-01-16','Pengeluaran',29434,'Eius.',2,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(12,'2023-01-16','Pemasukan',319238,'Excepturi.',7,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(13,'2023-01-16','Pengeluaran',32182,'Aliquam.',5,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(14,'2023-01-16','Pengeluaran',19621,'Quam aut.',3,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(15,'2023-01-16','Pemasukan',256275,'Nisi.',6,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(16,'2023-01-16','Pengeluaran',19834,'Est aut.',4,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(17,'2023-01-16','Pemasukan',365466,'Saepe.',8,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(18,'2023-01-16','Pengeluaran',30528,'Fugit.',3,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(19,'2023-01-16','Pemasukan',123301,'Soluta.',8,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(20,'2023-01-16','Pengeluaran',30425,'Est.',5,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(21,'2023-02-16','Pengeluaran',19978,'Minima.',1,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(22,'2023-02-16','Pengeluaran',32584,'At.',1,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(23,'2023-02-16','Pengeluaran',31423,'Dolore.',1,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(24,'2023-02-16','Pengeluaran',16000,'Et est.',4,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(25,'2023-02-16','Pengeluaran',33339,'Neque est.',1,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(26,'2023-02-16','Pengeluaran',22345,'Rerum.',3,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(27,'2023-02-16','Pemasukan',144452,'Molestiae.',6,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(28,'2023-02-16','Pengeluaran',32350,'Est.',3,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(29,'2023-02-16','Pemasukan',351788,'Quod.',6,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(30,'2023-02-16','Pengeluaran',25018,'Minus.',3,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(31,'2023-02-16','Pengeluaran',13766,'Quis.',4,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(32,'2023-02-16','Pemasukan',207063,'Tenetur.',6,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(33,'2023-02-16','Pengeluaran',38976,'Voluptas.',5,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(34,'2023-02-16','Pengeluaran',34779,'Et veniam.',2,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(35,'2023-02-16','Pengeluaran',21589,'Dolorem.',2,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(36,'2023-02-16','Pengeluaran',34008,'Natus et.',2,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(37,'2023-02-16','Pemasukan',337864,'Tempore.',8,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(38,'2023-02-16','Pengeluaran',25134,'Ea iusto.',3,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(39,'2023-02-16','Pemasukan',278591,'Modi.',8,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(40,'2023-02-16','Pengeluaran',10193,'Quisquam.',4,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(41,'2023-03-16','Pengeluaran',30977,'Quam.',1,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(42,'2023-03-16','Pemasukan',137555,'Earum.',6,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(43,'2023-03-16','Pengeluaran',25197,'Ipsa aut.',4,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(44,'2023-03-16','Pemasukan',355629,'Harum.',7,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(45,'2023-03-16','Pemasukan',256644,'Eligendi.',7,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(46,'2023-03-16','Pengeluaran',26765,'Ullam eum.',5,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(47,'2023-03-16','Pengeluaran',30472,'Qui.',4,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(48,'2023-03-16','Pengeluaran',34057,'Esse.',3,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(49,'2023-03-16','Pengeluaran',36448,'In.',3,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(50,'2023-03-16','Pengeluaran',26557,'Quasi.',3,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(51,'2023-03-16','Pengeluaran',13203,'Ut.',2,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(52,'2023-03-16','Pemasukan',275267,'Sapiente.',7,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(53,'2023-03-16','Pengeluaran',31272,'Tempora.',3,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(54,'2023-03-16','Pemasukan',143981,'Est.',7,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(55,'2023-03-16','Pemasukan',399926,'Sit.',8,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(56,'2023-03-16','Pemasukan',136945,'Mollitia.',7,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(57,'2023-03-16','Pengeluaran',36763,'Sed neque.',2,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(58,'2023-03-16','Pemasukan',248278,'Vero.',8,1,2,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(59,'2023-03-16','Pengeluaran',28426,'Aut alias.',3,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(60,'2023-03-16','Pengeluaran',24550,'Dolore et.',5,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(61,'2023-04-16','Pengeluaran',28648,'Nihil.',2,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(62,'2023-04-16','Pengeluaran',39456,'Autem.',3,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(63,'2023-04-16','Pengeluaran',19024,'Vero sed.',3,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(64,'2023-04-16','Pemasukan',103179,'Veritatis.',8,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(65,'2023-04-16','Pengeluaran',36059,'Veritatis.',2,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(66,'2023-04-16','Pengeluaran',39809,'Rerum.',1,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(67,'2023-04-16','Pengeluaran',20305,'Eaque eum.',3,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(68,'2023-04-16','Pemasukan',170754,'Harum.',8,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(69,'2023-04-16','Pengeluaran',32236,'Aut sed.',4,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(70,'2023-04-16','Pengeluaran',12104,'Et.',1,1,3,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(71,'2023-04-16','Pengeluaran',34528,'In.',2,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(72,'2023-04-16','Pengeluaran',37924,'Qui.',3,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(73,'2023-04-16','Pengeluaran',37356,'Quisquam.',2,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(74,'2023-04-16','Pemasukan',305785,'Cumque.',7,1,4,'bank','2023-10-16 04:43:47','2023-10-16 04:43:47'),(75,'2023-04-16','Pemasukan',334783,'At enim.',7,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(76,'2023-04-16','Pengeluaran',36665,'Quis non.',2,1,1,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(77,'2023-04-16','Pemasukan',346296,'Omnis.',8,1,5,'cash','2023-10-16 04:43:47','2023-10-16 04:43:47'),(78,'2023-04-16','Pemasukan',336715,'Sapiente.',8,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(79,'2023-04-16','Pengeluaran',15328,'Nihil.',4,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(80,'2023-04-16','Pengeluaran',18556,'Quo culpa.',4,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(81,'2023-05-16','Pengeluaran',11662,'Debitis.',2,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(82,'2023-05-16','Pengeluaran',19998,'Dicta ex.',2,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(83,'2023-05-16','Pengeluaran',28236,'Modi.',4,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(84,'2023-05-16','Pengeluaran',22809,'Quia et.',4,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(85,'2023-05-16','Pengeluaran',15640,'Veritatis.',1,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(86,'2023-05-16','Pengeluaran',16800,'Ut.',3,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(87,'2023-05-16','Pengeluaran',15046,'Dolorem.',1,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(88,'2023-05-16','Pemasukan',196468,'Quis.',7,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(89,'2023-05-16','Pengeluaran',13142,'Est illum.',3,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(90,'2023-05-16','Pemasukan',108215,'Non sit.',8,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(91,'2023-05-16','Pemasukan',218171,'Dolorum.',7,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(92,'2023-05-16','Pengeluaran',15624,'Non omnis.',2,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(93,'2023-05-16','Pemasukan',272216,'Fugit.',6,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(94,'2023-05-16','Pengeluaran',28684,'Eum.',1,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(95,'2023-05-16','Pemasukan',199126,'Voluptas.',7,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(96,'2023-05-16','Pemasukan',373502,'Id itaque.',8,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(97,'2023-05-16','Pemasukan',179316,'Velit et.',8,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(98,'2023-05-16','Pengeluaran',26392,'Qui.',4,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(99,'2023-05-16','Pemasukan',248676,'Non odio.',8,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(100,'2023-05-16','Pengeluaran',26960,'Saepe non.',4,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(101,'2023-06-16','Pemasukan',362250,'Dolore.',7,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(102,'2023-06-16','Pengeluaran',24882,'Voluptas.',4,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(103,'2023-06-16','Pengeluaran',15139,'Enim est.',5,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(104,'2023-06-16','Pemasukan',207986,'Minus.',6,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(105,'2023-06-16','Pengeluaran',38514,'Id fuga.',5,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(106,'2023-06-16','Pengeluaran',20501,'Beatae.',5,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(107,'2023-06-16','Pemasukan',140668,'Est.',8,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(108,'2023-06-16','Pengeluaran',12080,'Ea dicta.',4,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(109,'2023-06-16','Pengeluaran',26313,'Vero.',5,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(110,'2023-06-16','Pengeluaran',25230,'Enim.',4,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(111,'2023-06-16','Pengeluaran',15372,'Vitae.',1,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(112,'2023-06-16','Pemasukan',162693,'Qui.',7,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(113,'2023-06-16','Pengeluaran',37423,'Quam ex.',3,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(114,'2023-06-16','Pemasukan',159915,'Est iusto.',8,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(115,'2023-06-16','Pengeluaran',20738,'Quisquam.',3,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(116,'2023-06-16','Pengeluaran',19599,'Maiores.',1,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(117,'2023-06-16','Pengeluaran',27661,'Rerum.',4,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(118,'2023-06-16','Pengeluaran',21671,'Aut.',3,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(119,'2023-06-16','Pemasukan',215555,'Eaque.',6,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(120,'2023-06-16','Pengeluaran',17027,'Ea.',2,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(121,'2023-07-16','Pengeluaran',11800,'Harum.',4,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(122,'2023-07-16','Pemasukan',131696,'Itaque.',7,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(123,'2023-07-16','Pengeluaran',19667,'Doloribus.',5,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(124,'2023-07-16','Pengeluaran',10760,'Qui.',3,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(125,'2023-07-16','Pemasukan',260337,'Vel eum.',6,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(126,'2023-07-16','Pengeluaran',29361,'Magni.',3,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(127,'2023-07-16','Pengeluaran',20923,'Ipsam.',3,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(128,'2023-07-16','Pengeluaran',24264,'Optio.',1,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(129,'2023-07-16','Pengeluaran',30393,'Ut eum.',5,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(130,'2023-07-16','Pengeluaran',29692,'Libero.',1,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(131,'2023-07-16','Pengeluaran',23233,'Voluptas.',2,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(132,'2023-07-16','Pemasukan',152696,'Rerum.',6,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(133,'2023-07-16','Pengeluaran',14657,'Dicta eos.',1,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(134,'2023-07-16','Pengeluaran',13886,'Dolorem.',1,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(135,'2023-07-16','Pemasukan',104499,'Sunt.',8,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(136,'2023-07-16','Pengeluaran',23417,'Earum.',1,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(137,'2023-07-16','Pemasukan',276799,'Debitis.',6,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(138,'2023-07-16','Pengeluaran',13820,'Et libero.',5,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(139,'2023-07-16','Pengeluaran',38365,'Ratione.',3,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(140,'2023-07-16','Pemasukan',136129,'Omnis qui.',7,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(141,'2023-08-16','Pemasukan',262856,'Odit eius.',8,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(142,'2023-08-16','Pemasukan',391293,'Illum.',8,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(143,'2023-08-16','Pengeluaran',10332,'Error.',3,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(144,'2023-08-16','Pengeluaran',11586,'Numquam.',3,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(145,'2023-08-16','Pengeluaran',22654,'Voluptas.',1,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(146,'2023-08-16','Pengeluaran',15350,'Sit est.',4,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(147,'2023-08-16','Pengeluaran',15567,'Incidunt.',3,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(148,'2023-08-16','Pengeluaran',28894,'Quam.',2,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(149,'2023-08-16','Pengeluaran',32347,'Veniam.',1,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(150,'2023-08-16','Pengeluaran',24542,'Rerum ea.',3,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(151,'2023-08-16','Pengeluaran',12876,'Suscipit.',5,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(152,'2023-08-16','Pemasukan',288255,'Nam.',8,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(153,'2023-08-16','Pemasukan',311074,'Nam ea.',6,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(154,'2023-08-16','Pengeluaran',15532,'In ipsam.',3,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(155,'2023-08-16','Pengeluaran',14651,'Aut velit.',1,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(156,'2023-08-16','Pemasukan',390637,'Similique.',8,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(157,'2023-08-16','Pengeluaran',38934,'Quo.',5,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(158,'2023-08-16','Pemasukan',128822,'Soluta.',6,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(159,'2023-08-16','Pemasukan',390442,'Quas.',8,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(160,'2023-08-16','Pemasukan',293065,'Autem.',7,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(161,'2023-09-16','Pengeluaran',31862,'Iure.',4,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(162,'2023-09-16','Pengeluaran',16755,'Dolores.',1,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(163,'2023-09-16','Pemasukan',240701,'Rerum.',7,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(164,'2023-09-16','Pemasukan',353744,'Molestiae.',7,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(165,'2023-09-16','Pemasukan',158210,'Quae.',8,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(166,'2023-09-16','Pengeluaran',13685,'Quod eius.',1,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(167,'2023-09-16','Pengeluaran',37758,'Debitis.',3,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(168,'2023-09-16','Pengeluaran',32245,'Iste.',1,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(169,'2023-09-16','Pengeluaran',17765,'Omnis.',3,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(170,'2023-09-16','Pengeluaran',30375,'Eum quod.',5,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(171,'2023-09-16','Pengeluaran',30148,'Dolores.',4,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(172,'2023-09-16','Pemasukan',292353,'Aperiam.',7,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(173,'2023-09-16','Pemasukan',295842,'Quod.',6,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(174,'2023-09-16','Pemasukan',225210,'Est omnis.',8,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(175,'2023-09-16','Pengeluaran',35650,'Quia.',1,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(176,'2023-09-16','Pengeluaran',29216,'Quibusdam.',2,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(177,'2023-09-16','Pemasukan',128416,'Quis.',8,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(178,'2023-09-16','Pemasukan',239767,'Et culpa.',6,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(179,'2023-09-16','Pengeluaran',19904,'Veniam.',3,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(180,'2023-09-16','Pengeluaran',37530,'Inventore.',4,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(181,'2023-10-16','Pemasukan',107027,'Possimus.',8,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(182,'2023-10-16','Pemasukan',235662,'Sed earum.',6,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(183,'2023-10-16','Pengeluaran',16106,'Rerum.',4,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(184,'2023-10-16','Pengeluaran',13419,'Rerum.',4,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(185,'2023-10-16','Pemasukan',310929,'Soluta.',7,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(186,'2023-10-16','Pengeluaran',36487,'Magni ut.',1,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(187,'2023-10-16','Pemasukan',208190,'Aliquam.',7,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(188,'2023-10-16','Pengeluaran',33540,'Itaque.',2,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(189,'2023-10-16','Pengeluaran',33354,'Et ut.',4,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(190,'2023-10-16','Pemasukan',123760,'Inventore.',8,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(191,'2023-10-16','Pengeluaran',19991,'Id autem.',2,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(192,'2023-10-16','Pengeluaran',33070,'Aut in.',4,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(193,'2023-10-16','Pengeluaran',23663,'Qui quasi.',4,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(194,'2023-10-16','Pengeluaran',13887,'Est.',1,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(195,'2023-10-16','Pengeluaran',13996,'Aperiam.',1,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(196,'2023-10-16','Pemasukan',392380,'Velit.',7,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(197,'2023-10-16','Pengeluaran',18961,'Ex.',5,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(198,'2023-10-16','Pengeluaran',22589,'Quaerat.',2,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(199,'2023-10-16','Pengeluaran',24216,'Id quia.',5,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(200,'2023-10-16','Pengeluaran',16441,'Aut.',5,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(201,'2023-11-16','Pengeluaran',10639,'Quae.',5,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(202,'2023-11-16','Pemasukan',131335,'Qui.',8,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(203,'2023-11-16','Pengeluaran',23755,'Omnis.',3,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(204,'2023-11-16','Pemasukan',157068,'Assumenda.',6,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(205,'2023-11-16','Pengeluaran',24829,'Nisi quo.',4,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(206,'2023-11-16','Pemasukan',144523,'Vel nihil.',7,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(207,'2023-11-16','Pemasukan',381534,'Amet.',7,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(208,'2023-11-16','Pemasukan',189196,'Id.',8,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(209,'2023-11-16','Pengeluaran',15902,'Excepturi.',4,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(210,'2023-11-16','Pengeluaran',38212,'Ex est.',4,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(211,'2023-11-16','Pengeluaran',37055,'Et iste.',1,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(212,'2023-11-16','Pemasukan',134510,'Similique.',7,1,2,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(213,'2023-11-16','Pemasukan',211379,'Dolor qui.',7,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(214,'2023-11-16','Pengeluaran',29624,'Maxime.',2,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(215,'2023-11-16','Pemasukan',103435,'Quo.',8,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(216,'2023-11-16','Pengeluaran',15901,'Atque.',2,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(217,'2023-11-16','Pengeluaran',38091,'Fuga id.',1,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(218,'2023-11-16','Pengeluaran',14886,'Fuga et.',1,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(219,'2023-11-16','Pengeluaran',11785,'Inventore.',5,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(220,'2023-11-16','Pemasukan',291100,'Excepturi.',7,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(221,'2023-12-16','Pengeluaran',19665,'Ullam.',2,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(222,'2023-12-16','Pengeluaran',15587,'Corporis.',5,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(223,'2023-12-16','Pemasukan',223777,'Accusamus.',6,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(224,'2023-12-16','Pengeluaran',22801,'Nihil ex.',1,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(225,'2023-12-16','Pengeluaran',30975,'Iste.',4,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(226,'2023-12-16','Pengeluaran',23986,'Eos.',4,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(227,'2023-12-16','Pengeluaran',19907,'Eligendi.',3,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(228,'2023-12-16','Pengeluaran',20149,'Culpa ea.',5,1,1,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(229,'2023-12-16','Pemasukan',180096,'Porro.',8,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(230,'2023-12-16','Pengeluaran',11432,'Facilis.',1,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(231,'2023-12-16','Pengeluaran',39044,'Nemo non.',1,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(232,'2023-12-16','Pemasukan',198603,'Velit.',6,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(233,'2023-12-16','Pengeluaran',34048,'Pariatur.',3,1,4,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(234,'2023-12-16','Pemasukan',219325,'Autem.',7,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(235,'2023-12-16','Pengeluaran',10038,'Iste eum.',2,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(236,'2023-12-16','Pengeluaran',31463,'Dicta ex.',5,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(237,'2023-12-16','Pengeluaran',24004,'Quia.',4,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(238,'2023-12-16','Pengeluaran',26563,'Eius sint.',1,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48'),(239,'2023-12-16','Pengeluaran',27322,'Omnis non.',2,1,5,'cash','2023-10-16 04:43:48','2023-10-16 04:43:48'),(240,'2023-12-16','Pemasukan',173455,'Et.',8,1,3,'bank','2023-10-16 04:43:48','2023-10-16 04:43:48');
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
  `type` varchar(255) NOT NULL DEFAULT 'Kasir',
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
INSERT INTO `users` VALUES (1,'Admin','admin@example.com','2023-10-16 04:43:47','$2y$10$Y05PI522YGXfKKkn90R/KO4Y.DnQuML.R1ElR8JXN/BZhaveuh8wG','Administrator','D68TFtIlCp','2023-10-16 04:43:47','2023-10-16 04:43:47');
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

-- Dump completed on 2023-10-16 18:45:38
