-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: symfony
-- ------------------------------------------------------
-- Server version	5.7.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `analitic_data`
--

DROP TABLE IF EXISTS `analitic_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analitic_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_target_rent_list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_rent_length_list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_rent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_people` int(11) NOT NULL,
  `trunk_capacity` int(11) NOT NULL,
  `soundbar` int(11) NOT NULL,
  `box_type_list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_type_list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior_material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `by_100` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ower` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analitic_data`
--

LOCK TABLES `analitic_data` WRITE;
/*!40000 ALTER TABLE `analitic_data` DISABLE KEYS */;
INSERT INTO `analitic_data` VALUES (1,'1,2,3','1,2','1,2',4,800,1,'1,2','1,2,3','кожа','0','9','120'),(2,'1,2','1','1,2,3',5,1000,0,'1','1,2,3','ткань','1','6','150');
/*!40000 ALTER TABLE `analitic_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `automobile_marks`
--

DROP TABLE IF EXISTS `automobile_marks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `automobile_marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mark_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `automobile_marks`
--

LOCK TABLES `automobile_marks` WRITE;
/*!40000 ALTER TABLE `automobile_marks` DISABLE KEYS */;
INSERT INTO `automobile_marks` VALUES (1,'Peugeot'),(2,'Mercedes'),(3,'Lada'),(4,'Renault'),(5,'Audi'),(6,'Kia'),(7,'Toyota'),(8,'Skoda'),(9,'Lexus'),(10,'Mazda'),(11,'Subaru'),(12,'Nissan'),(13,'Mitsubishi');
/*!40000 ALTER TABLE `automobile_marks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `automobiles`
--

DROP TABLE IF EXISTS `automobiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `automobiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mark_id` int(11) NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_link` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `automobiles`
--

LOCK TABLES `automobiles` WRITE;
/*!40000 ALTER TABLE `automobiles` DISABLE KEYS */;
INSERT INTO `automobiles` VALUES (36,1,'206','https://avatars.mds.yandex.net/i?id=7857906819ebbbad63bd22f8e9356ee6-5877456-images-thumbs&n=13&exp=1'),(37,1,'306','https://avatars.mds.yandex.net/i?id=0cd4964133f8b227637c467d194974d9-5869507-images-thumbs&n=13&exp=1'),(38,2,'Benz','https://avatars.mds.yandex.net/i?id=13d689b6d56ec78e1444c397b448ad84-5490768-images-thumbs&n=13&exp=1'),(39,2,'E-class','https://avatars.mds.yandex.net/get-autoru-vos/1662038/e5b5c9c7e8597bca5b4bb227ee2bba34/1200x900'),(40,3,'Granta','https://avatars.mds.yandex.net/i?id=4908ab583ee583f5039ca992385d4880-5665620-images-thumbs&n=13&exp=1'),(41,3,'Priora','https://avatars.mds.yandex.net/i?id=9567a636aaeb546910cfab36ad8390a8-5904474-images-thumbs&n=13&exp=1'),(42,3,'Vesta','https://yandex-images.clstorage.net/4GrzU9203/260f95h5S/TdQu6_IIU9oARhBBKLSuG5MBoaje2z82xnYaQI9VTapW7T8HNURUtMvtr08Mqcy9kQb3z--1tkMWX4QhA6Z6NyjVY-rCZCrmKEIQTRyQwj-PLYGU_stvKs8XRiyHcR2nE9A_JyGh5CRLcBaj3UQBfGF7rq6_rcYuC04hlTYnvwYBbHKjqlgmeghavaHwVPYXK2TFCNYOR_s2ujOQ45F84ze06gpBEZSsY-DaAwlMsfwFLwZSAx0fklM6ETgya4N6qZj6ax7IGvZcNlV9-HBCx8NE0bR-pq_zmv6nHCdZmGvvkM7egfFIZPdIrrfxzLncSV-2vothu07rfmlA5q_7RtnQsnOS4NrqhJ7pkehwAhezuF10IkKfR_5aw6jL3fij27xqjlmReJRDVE4PNXSRwGXTprq3ac-2lxK9qNYj67b9CM6_NhhKJhSO5bUkZLrbL8ChwM7S169m3r9sG11Uc--cus5VGVAMn1SOm4HA1bz5E7Kaz7GHstd6xViK-3tOZZSGgyaEPlIE5lH1kKA6p4-k-axqxjunFmZrlMcldBtP2DIKLQmUEMvILgMRqD0AXb8Gts9dY1oHnmnYsv_HdlnEsr9WUNaCqEZ5PZDYQhvjeFVAxrZLm9LiD_AvDbSLX4Ba2j2BnLTzQN6rOcRdTIUrCjJj-ffe-w55JJZnh1qpTHYr_tTOong2hRGk2BoPL8A5yFYeo5f-fleQZ3UAI0MI1mapEXDE62CKK014qWT9e4qe-yETEivOiWDW04-GmUiK-15gQm6EAj1BeKi2J7PY0VyOOl9bptoXeI-lgEfbGDpuRY0M8C_8oi8lqMGQRRvKEgt5v97TpoWk8uu3Qi1A7g-mfKrujG5RWZg0Clsv1PmkVs6zxyKerxC_IZSroyRqNmnJSDjz0FY7ddTBiBmP7trrBRs2X_q1PH6_M3rN2I63MqDOBrge8SV4ZLaHA9gRCE4yuzf2fsM4s31E'),(43,3,'X-Ray','https://avatars.mds.yandex.net/i?id=4c9f328764b20642b70955c515ac9d08-5668913-images-thumbs&n=13&exp=1'),(44,4,'Logan','https://avatars.mds.yandex.net/i?id=cf97c7a85ba3554891bf86d91f8db123-5884156-images-thumbs&n=13&exp=1'),(45,4,'Duster','https://avatars.mds.yandex.net/i?id=0b0ac7af9f837d8e53c9e9e3f33aaa9c-5695151-images-thumbs&n=13&exp=1'),(46,4,'Sandero','https://avatars.mds.yandex.net/i?id=7b622130488a218f94db85fef79cce38-5539996-images-thumbs&n=13&exp=1'),(47,5,'E-Tron','https://trashbox.ru/ifiles/1014915_d3ffc5_small-audi-e-tron-gt-concept-5131/audi-pokazala-konkurenta-tesla-model-s-1.jpg'),(48,5,'A3','https://avatars.mds.yandex.net/i?id=f30ae51b42fb8dd1fa03f65009c159ee-5171950-images-thumbs&n=13&exp=1'),(49,5,'A4','https://avatars.mds.yandex.net/i?id=2767c923ca322daee05c27e2dc93cae2-5878909-images-thumbs&n=13&exp=1'),(50,5,'A5','https://avatars.mds.yandex.net/i?id=ea27ebfb5da76ccfa7e07cc4076b5a5c-5482341-images-thumbs&n=13&exp=1'),(51,6,'Rio','https://avatars.mds.yandex.net/i?id=94312b9838c1b03ae3b4822fe5809432-5234533-images-thumbs&n=13&exp=1'),(52,7,'Camry','https://yandex-images.clstorage.net/4GrzU9203/260f95h5S/TdQu6_IIU9oARhBBKLSuG5MBoaje2z82xnYaQI9MEN5ToTcfABRV8YPg_08ArciBjRb3x-bxqlMSQ5QpA6Z2KxTdS9rCZCrmKEIQTRyQwj-PLYGU_stvKs8XRiyHcR2nE9A_JyGh5CRLcBaj3UQBfGF7rq6_rcYuC04hlTYnvwYBbHKjqlgmeghavaHwVPYXK2TFCNYOR_s2ujOQ45F84ze06gpBEZSsY-DaAwlMsfwFLwZSAx0fklM6ETgya4N6qZj6ax7IGvZcNlV9-HBCx8NE0bR-pq_zmv6nHCdZmGvvkM7egfFIZPdIrrfxzLncSV-2vothu07rfmlA5q_7RtnQsnOS4NrqhJ7pkehwAhezuF10IkKfR_5aw6jL3fij27xqjlmReJRDVE4PNXSRwGXTprq3ac-2lxK9qNYj67b9CM6_NhhKJhSO5bUkZLrbL8ChwM7S169m3r9sG11Uc--cus5VGVAMn1SOm4HA1bz5E7Kaz7GHstd6xViK-3tOZZSGgyaEPlIE5lH1kKA6p4-k-axqxjunFmZrlMcldBtP2DIKLQmUEMvILgMRqD0AXb8Gts9dY1oHnmnYsv_HdlnEsr9WUNaCqEZ5PZDYQhvjeFVAxrZLm9LiD_AvDbSLX4Ba2j2BnLTzQN6rOcRdTIUrCjJj-ffe-w55JJZnh1qpTHYr_tTOong2hRGk2BoPL8A5yFYeo5f-fleQZ3UAI0MI1mapEXDE62CKK014qWT9e4qe-yETEivOiWDW04-GmUiK-15gQm6EAj1BeKi2J7PY0VyOOl9bptoXeI-lgEfbGDpuRY0M8C_8oi8lqMGQRRvKEgt5v97TpoWk8uu3Qi1A7g-mfKrujG5RWZg0Clsv1PmkVs6zxyKerxC_IZSroyRqNmnJSDjz0FY7ddTBiBmP7trrBRs2X_q1PH6_M3rN2I63MqDOBrge8SV4ZLaHA9gRCE4yuzf2fsM4s31E'),(53,7,'Corolla','https://avatars.mds.yandex.net/i?id=fde984ddb8825f568c0c1f928bc96489-5709069-images-thumbs&n=13&exp=1'),(54,7,'RAV4','https://avatars.mds.yandex.net/i?id=7e0d28147ddece4f221fbf5f1ef4e1d7-5865925-images-thumbs&n=13&exp=1'),(55,7,'Land Cruiser Prado','https://avatars.mds.yandex.net/i?id=40e9461d9f128acabc5449dc867d702b-5650733-images-thumbs&n=13&exp=1'),(56,8,'Rapid','https://avatars.mds.yandex.net/i?id=66d6fe0924e6c3cdad2a5c8b9e4f4dcd-5662296-images-thumbs&n=13&exp=1'),(57,8,'Octavia','https://avatars.mds.yandex.net/i?id=28dffc858c729e0d4d7ad5e039f215f1-5910407-images-thumbs&n=13&exp=1'),(58,8,'SuperB','https://avatars.mds.yandex.net/i?id=4bbf95c032e2ae00120608dd645fdf23-5331627-images-thumbs&n=13&exp=1'),(59,9,'LX','https://avatars.mds.yandex.net/i?id=ad5784d29c2d25f01021c286584bfe49-5584797-images-thumbs&n=13&exp=1'),(60,9,'GX','https://avatars.mds.yandex.net/i?id=9db1d49402f2be7f35a6956242e2f609-5336899-images-thumbs&n=13&exp=1'),(61,10,'CX-5','https://yandex-images.clstorage.net/4GrzU9203/260f95h5S/TdQu6_IIU9oARhBBKLSuG5MBoaje2z82xnYaQJNAHZMO-Gc3BVkJ6a6hi0pArIiZvELzy_e84xMCfsQ5A6Z2KxzFb_rCZCrmKEIQTRyQwj-PLYGU_stvKs8XRiyHcR2nE9A_JyGh5CRLcBaj3UQBfGF7rq6_rcYuC04hlTYnvwYBbHKjqlgmeghavaHwVPYXK2TFCNYOR_s2ujOQ45F84ze06gpBEZSsY-DaAwlMsfwFLwZSAx0fklM6ETgya4N6qZj6ax7IGvZcNlV9-HBCx8NE0bR-pq_zmv6nHCdZmGvvkM7egfFIZPdIrrfxzLncSV-2vothu07rfmlA5q_7RtnQsnOS4NrqhJ7pkehwAhezuF10IkKfR_5aw6jL3fij27xqjlmReJRDVE4PNXSRwGXTprq3ac-2lxK9qNYj67b9CM6_NhhKJhSO5bUkZLrbL8ChwM7S169m3r9sG11Uc--cus5VGVAMn1SOm4HA1bz5E7Kaz7GHstd6xViK-3tOZZSGgyaEPlIE5lH1kKA6p4-k-axqxjunFmZrlMcldBtP2DIKLQmUEMvILgMRqD0AXb8Gts9dY1oHnmnYsv_HdlnEsr9WUNaCqEZ5PZDYQhvjeFVAxrZLm9LiD_AvDbSLX4Ba2j2BnLTzQN6rOcRdTIUrCjJj-ffe-w55JJZnh1qpTHYr_tTOong2hRGk2BoPL8A5yFYeo5f-fleQZ3UAI0MI1mapEXDE62CKK014qWT9e4qe-yETEivOiWDW04-GmUiK-15gQm6EAj1BeKi2J7PY0VyOOl9bptoXeI-lgEfbGDpuRY0M8C_8oi8lqMGQRRvKEgt5v97TpoWk8uu3Qi1A7g-mfKrujG5RWZg0Clsv1PmkVs6zxyKerxC_IZSroyRqNmnJSDjz0FY7ddTBiBmP7trrBRs2X_q1PH6_M3rN2I63MqDOBrge8SV4ZLaHA9gRCE4yuzf2fsM4s31E'),(62,10,'CX-6','https://avatars.mds.yandex.net/i?id=43ac680305554d90b6e55907b8d3628d-5578456-images-thumbs&n=13&exp=1'),(63,11,'Forester','https://yandex-images.clstorage.net/4GrzU9203/260f95h5S/TdQu6_IIU9oARhBBKLSuG5MBoaje2z82xnYaQeNUEN5G7S8bAVRB9Ma9t35R9IiU3ErjxqbttlpWWsVxA6Z-JwTNf_7CZCrmKEIQTRyQwj-PLYGU_stvKs8XRiyHcR2nE9A_JyGh5CRLcBaj3UQBfGF7rq6_rcYuC04hlTYnvwYBbHKjqlgmeghavaHwVPYXK2TFCNYOR_s2ujOQ45F84ze06gpBEZSsY-DaAwlMsfwFLwZSAx0fklM6ETgya4N6qZj6ax7IGvZcNlV9-HBCx8NE0bR-pq_zmv6nHCdZmGvvkM7egfFIZPdIrrfxzLncSV-2vothu07rfmlA5q_7RtnQsnOS4NrqhJ7pkehwAhezuF10IkKfR_5aw6jL3fij27xqjlmReJRDVE4PNXSRwGXTprq3ac-2lxK9qNYj67b9CM6_NhhKJhSO5bUkZLrbL8ChwM7S169m3r9sG11Uc--cus5VGVAMn1SOm4HA1bz5E7Kaz7GHstd6xViK-3tOZZSGgyaEPlIE5lH1kKA6p4-k-axqxjunFmZrlMcldBtP2DIKLQmUEMvILgMRqD0AXb8Gts9dY1oHnmnYsv_HdlnEsr9WUNaCqEZ5PZDYQhvjeFVAxrZLm9LiD_AvDbSLX4Ba2j2BnLTzQN6rOcRdTIUrCjJj-ffe-w55JJZnh1qpTHYr_tTOong2hRGk2BoPL8A5yFYeo5f-fleQZ3UAI0MI1mapEXDE62CKK014qWT9e4qe-yETEivOiWDW04-GmUiK-15gQm6EAj1BeKi2J7PY0VyOOl9bptoXeI-lgEfbGDpuRY0M8C_8oi8lqMGQRRvKEgt5v97TpoWk8uu3Qi1A7g-mfKrujG5RWZg0Clsv1PmkVs6zxyKerxC_IZSroyRqNmnJSDjz0FY7ddTBiBmP7trrBRs2X_q1PH6_M3rN2I63MqDOBrge8SV4ZLaHA9gRCE4yuzf2fsM4s31E'),(64,11,'Outback','https://avatars.mds.yandex.net/i?id=208ef828332438fc6ac1d9641a8d53de-5294211-images-thumbs&n=13&exp=1'),(65,12,'Almera','https://avatars.mds.yandex.net/i?id=9dd9cd5d8dce65a46f033004bf00fafe-5480282-images-thumbs&n=13&exp=1'),(66,12,'Primera','https://avatars.mds.yandex.net/i?id=4d383b1c0ffdb4534ce87f2d7a36c533-4077925-images-thumbs&n=13&exp=1'),(67,12,'X-Trail','https://avatars.mds.yandex.net/i?id=8d2e72728bae3e9a08fb8d1277785f28-5666476-images-thumbs&n=13&exp=1'),(68,13,'Lancer','https://avatars.mds.yandex.net/i?id=2ffbf48baece436758a6577ed01d764e-5876973-images-thumbs&n=13&exp=1'),(69,13,'Outlander','https://avatars.mds.yandex.net/i?id=6964f95115e476be3b906de41bcc7a4b-3924636-images-thumbs&n=13&exp=1'),(70,13,'PajeroSport','https://avatars.mds.yandex.net/i?id=df31d43ffc68a1bd1f9af53a8d836926-5246752-images-thumbs&n=13&exp=1');
/*!40000 ALTER TABLE `automobiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20220323111114','2022-03-23 14:11:42',260),('DoctrineMigrations\\Version20220325080020','2022-03-25 11:00:29',232),('DoctrineMigrations\\Version20220325081200','2022-03-25 11:12:06',79),('DoctrineMigrations\\Version20220412173351','2022-04-12 20:34:17',187),('DoctrineMigrations\\Version20220413064646','2022-04-13 09:46:59',281),('DoctrineMigrations\\Version20220413065614','2022-04-13 09:56:24',197);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `target_list`
--

DROP TABLE IF EXISTS `target_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `target_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `target_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `target_list`
--

LOCK TABLES `target_list` WRITE;
/*!40000 ALTER TABLE `target_list` DISABLE KEYS */;
INSERT INTO `target_list` VALUES (1,'Городская поездка'),(2,'Поездка по пересечённой местности'),(3,'Дальняя поездка');
/*!40000 ALTER TABLE `target_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types_boxes`
--

DROP TABLE IF EXISTS `types_boxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `types_boxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types_boxes`
--

LOCK TABLES `types_boxes` WRITE;
/*!40000 ALTER TABLE `types_boxes` DISABLE KEYS */;
INSERT INTO `types_boxes` VALUES (1,'Механика'),(2,'Робот'),(3,'Автомат');
/*!40000 ALTER TABLE `types_boxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types_length_rent`
--

DROP TABLE IF EXISTS `types_length_rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `types_length_rent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types_length_rent`
--

LOCK TABLES `types_length_rent` WRITE;
/*!40000 ALTER TABLE `types_length_rent` DISABLE KEYS */;
INSERT INTO `types_length_rent` VALUES (1,'В пределах одного дня'),(2,'До 5 дней'),(3,'Более 5 дней');
/*!40000 ALTER TABLE `types_length_rent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types_status_rent`
--

DROP TABLE IF EXISTS `types_status_rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `types_status_rent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types_status_rent`
--

LOCK TABLES `types_status_rent` WRITE;
/*!40000 ALTER TABLE `types_status_rent` DISABLE KEYS */;
INSERT INTO `types_status_rent` VALUES (1,'Бизнес-поездка'),(2,'Путешествие'),(3,'Грузоперевозка');
/*!40000 ALTER TABLE `types_status_rent` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-23 15:00:28
