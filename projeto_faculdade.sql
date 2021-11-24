-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projeto_faculdade
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `cadastro_atividades`
--

DROP TABLE IF EXISTS `cadastro_atividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro_atividades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `descricao` longtext NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_atividades`
--

LOCK TABLES `cadastro_atividades` WRITE;
/*!40000 ALTER TABLE `cadastro_atividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `cadastro_atividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credenciamento_feirantes`
--

DROP TABLE IF EXISTS `credenciamento_feirantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credenciamento_feirantes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `senha` longtext NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` varchar(18) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `telefone` varchar(18) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cadastro_atividade_id` int NOT NULL,
  `pagamento` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cadastro_atividade_id` (`cadastro_atividade_id`),
  CONSTRAINT `credenciamento_feirantes_ibfk_1` FOREIGN KEY (`cadastro_atividade_id`) REFERENCES `cadastro_atividades` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credenciamento_feirantes`
--

LOCK TABLES `credenciamento_feirantes` WRITE;
/*!40000 ALTER TABLE `credenciamento_feirantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `credenciamento_feirantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fiscal`
--

DROP TABLE IF EXISTS `fiscal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fiscal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` varchar(18) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `telefone` varchar(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fiscal`
--

LOCK TABLES `fiscal` WRITE;
/*!40000 ALTER TABLE `fiscal` DISABLE KEYS */;
/*!40000 ALTER TABLE `fiscal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setores_feira`
--

DROP TABLE IF EXISTS `setores_feira`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setores_feira` (
  `id` int NOT NULL AUTO_INCREMENT,
  `distrito` varchar(45) DEFAULT NULL,
  `quadras` varchar(45) DEFAULT NULL,
  `lotes` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setores_feira`
--

LOCK TABLES `setores_feira` WRITE;
/*!40000 ALTER TABLE `setores_feira` DISABLE KEYS */;
/*!40000 ALTER TABLE `setores_feira` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` varchar(18) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nivel` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'projeto_faculdade'
--

--
-- Dumping routines for database 'projeto_faculdade'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-02 16:21:55
