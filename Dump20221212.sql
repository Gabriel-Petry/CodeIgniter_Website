-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: lojinha
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco_promo` decimal(8,2) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `quantidade_fotos` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `descricao_simples` text DEFAULT NULL,
  `destaque` int(11) DEFAULT NULL,
  `quantidade_estoque` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,4000.00,'Iphone 13',3000.00,'celulares',5,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',1,22),(2,3000.00,'Galaxy A53',1000.00,'celulares',4,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',0,14),(3,1000.00,'Moto G 32',NULL,'celulares',5,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',0,35),(4,1000.00,'Nokia G21',NULL,'celulares',4,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',1,5),(5,9000.00,'Xiaomi 12',8000.00,'celulares',5,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',0,84),(6,10000.00,'MacBook Pro',NULL,'computadores',1,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',1,76),(7,6700.00,'Avell A70',NULL,'computadores',2,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',1,55),(8,499.00,'Haylou GT7',NULL,'fones',3,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',1,22),(9,120.00,'Cx 150 BT',80.00,'fones',2,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',0,13),(10,1400.00,'Nikon D 3100',1200.00,'cameras',5,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',0,27),(11,799.00,'Canon Eos 550',NULL,'cameras',3,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',1,54),(12,349.00,'Technos 2039CK',NULL,'relogios',1,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',0,20),(13,2199.00,'Apple Watch',1999.00,'relogios',2,'Produto de excelente qualidade, com bateria duradoura','Produto show de bola',1,17);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `idReview` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text DEFAULT NULL,
  `nome_revisor` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `data_hora` date DEFAULT NULL,
  `estrelas` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  PRIMARY KEY (`idReview`),
  KEY `id_produto_idx` (`id_produto`),
  CONSTRAINT `id_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`idProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'robson@gmail.com','1234','robson'),(2,'carlos@gmail.com','2345','carlos'),(3,'lolozinha@gmail.com','3456','lorrana');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-12 15:12:11
