CREATE DATABASE  IF NOT EXISTS `projeto_estoque` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `projeto_estoque`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projeto_estoque
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `quantidade` int(10) unsigned NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `preco_custo` decimal(8,2) unsigned NOT NULL,
  `preco_venda` decimal(8,2) unsigned NOT NULL,
  `validade` varchar(10) NOT NULL,
  `impostos` decimal(5,2) unsigned NOT NULL,
  `observacao` text DEFAULT 'nada a declarar',
  `icon_img` varchar(100) NOT NULL,
  PRIMARY KEY (`cod`),
  UNIQUE KEY `cod` (`cod`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (4,'Vinho - 750ml',90,'Bebidas',12.50,25.99,'15/09/2026',22.35,'estoque baixo.','icone-padrao.png'),(5,'Geladeira - Unidade',30,'Eletrodomésticos',1200.50,2200.99,'20/07/2027',45.10,'estoque baixo.','icone-padrao.png'),(7,'Arroz - 2k',100,'Alimentos',10.55,25.75,'28/02/2026',6.25,'estoque médio.','icon-clock.png'),(8,'Óleo de Coco - 1L',150,'Alimentos',15.90,35.40,'05/12/2025',8.75,'estoque médio.','icone-padrao.png'),(9,'Fogão 4 Bocas - Unidade',40,'Eletrodomésticos',800.35,1500.65,'10/10/2026',30.50,'estoque médio.','icone-padrao.png'),(10,'Refrigerante - 2L',200,'Bebidas',3.80,8.35,'05/01/2026',10.25,'estoque médio.','icone-padrao.png'),(11,'Macarrão - 1k',250,'Alimentos',3.15,7.45,'01/11/2025',5.10,'estoque cheio.','icone-padrao.png'),(12,'Frango Congelado - 2k',100,'Alimentos',18.20,40.80,'20/07/2025',12.55,'estoque médio.','icone-padrao.png'),(13,'Sardinha - Lata 200g',180,'Alimentos',2.30,4.75,'18/12/2026',5.20,'estoque médio.','icone-padrao.png'),(14,'Cachaça - 1L',80,'Bebidas',15.55,30.70,'08/08/2026',25.10,'estoque médio.','icone-padrao.png'),(15,'Suco de Laranja - 2L',150,'Bebidas',5.45,12.20,'30/12/2025',9.85,'estoque médio.','icone-padrao.png'),(16,'Roupas - Camiseta',300,'Roupas',10.20,25.90,'31/12/2026',8.55,'estoque cheio.','icone-padrao.png'),(17,'Perfume - 100ml',120,'Cosméticos',50.75,120.99,'20/08/2025',15.95,'estoque médio.','icone-padrao.png'),(18,'Sabonete - 90g',500,'Cosméticos',0.75,2.99,'10/11/2026',2.30,'estoque cheio.','icone-padrao.png'),(19,'Celular - Smartphone',40,'Eletrônicos',700.35,1500.99,'05/05/2026',45.90,'estoque baixo.','icone-padrao.png'),(20,'Smart TV - 50\"',30,'Eletrônicos',1500.99,2500.45,'20/08/2025',50.30,'estoque baixo.','icone-padrao.png'),(21,'Ferro Elétrico',60,'Eletrodomésticos',80.25,190.30,'15/06/2026',20.70,'estoque médio.','icone-padrao.png'),(22,'Aspirador de Pó',90,'Eletrodomésticos',150.90,350.65,'10/03/2025',30.10,'estoque médio.','icone-padrao.png'),(23,'Tênis - Casual',120,'Roupas',50.90,120.50,'10/07/2026',18.60,'estoque médio.','icone-padrao.png'),(24,'Camisa - Polo',180,'Roupas',25.30,75.80,'15/09/2025',10.50,'estoque cheio.','icone-padrao.png'),(25,'Cadeira de Escritório',80,'Móveis',120.99,250.90,'28/02/2027',40.70,'estoque médio.','icone-padrao.png'),(26,'Sofá 3 Lugares',40,'Móveis',800.50,1600.75,'15/12/2026',45.30,'estoque baixo.','icone-padrao.png'),(27,'Cama Box Casal',30,'Móveis',550.00,1300.00,'10/10/2027',35.80,'estoque médio.','icone-padrao.png'),(28,'Brinquedo - Carrinho',500,'Brinquedos',10.30,35.40,'01/09/2025',3.50,'estoque cheio.','icone-padrao.png'),(29,'Boneca - 30cm',350,'Brinquedos',20.75,55.90,'12/05/2026',7.65,'estoque médio.','icone-padrao.png'),(30,'Jogo de Tabuleiro',200,'Brinquedos',15.00,40.90,'25/06/2027',10.25,'estoque médio.','icone-padrao.png'),(32,'Coca Cola - lata 1L',17,'Bebidas',0.75,3.15,'23/12/2028',39.00,'estoque baixo.','icon-padrao.png');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-03  9:01:26
