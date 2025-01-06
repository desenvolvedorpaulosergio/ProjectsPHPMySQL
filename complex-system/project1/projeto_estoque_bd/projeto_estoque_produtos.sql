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
  `quantidade` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Leite - 1L',200,'Alimentos',3.25,6.75,'30/12/2025',5.50,'estoque médio.','icone-padrao.png'),(2,'Biscoito - 400g',180,'Alimentos',2.10,5.50,'10/05/2026',4.75,'estoque médio.','icone-padrao.png'),(3,'Cerveja - 600ml',0,'Bebidas',4.30,9.20,'12/11/2025',20.85,'estoque vazio.','icone-padrao.png'),(4,'Vinho - 750ml',0,'Bebidas',12.50,25.99,'15/09/2026',22.35,'estoque vazio.','icone-padrao.png'),(5,'Geladeira - Unidade',30,'Eletrodomésticos',1200.50,2200.99,'20/07/2027',45.10,'estoque baixo.','icone-padrao.png'),(6,'Micro-ondas - Unidade',50,'Eletrodomésticos',400.75,900.35,'15/05/2026',15.85,'estoque médio.','icone-padrao.png'),(7,'Arroz - 2k',100,'Alimentos',10.55,25.75,'28/02/2026',6.25,'estoque médio.','icone-padrao.png'),(8,'Óleo de Coco - 1L',150,'Alimentos',15.90,35.40,'05/12/2025',8.75,'estoque médio.','icone-padrao.png'),(9,'Fogão 4 Bocas - Unidade',40,'Eletrodomésticos',800.35,1500.65,'10/10/2026',30.50,'estoque médio.','icone-padrao.png'),(10,'Refrigerante - 2L',200,'Bebidas',3.80,8.35,'05/01/2026',10.25,'estoque médio.','icone-padrao.png'),(11,'Macarrão - 1k',250,'Alimentos',3.15,7.45,'01/11/2025',5.10,'estoque cheio.','icone-padrao.png'),(12,'Frango Congelado - 2k',0,'Alimentos',18.20,40.80,'20/07/2025',12.55,'estoque vazio.','icone-padrao.png'),(13,'Sardinha - Lata 200g',0,'Alimentos',2.30,4.75,'18/12/2026',5.20,'estoque vazio.','icone-padrao.png'),(14,'Cachaça - 1L',80,'Bebidas',15.55,30.70,'08/08/2026',25.10,'estoque médio.','icone-padrao.png'),(15,'Suco de Laranja - 2L',0,'Bebidas',5.45,12.20,'30/12/2025',9.85,'estoque vazio.','icone-padrao.png'),(16,'Roupas - Camiseta',255,'Roupas',10.20,25.90,'31/12/2026',8.55,'estoque cheio.','icone-padrao.png'),(17,'Perfume - 100ml',120,'Cosméticos',50.75,120.99,'20/08/2025',15.95,'estoque médio.','icone-padrao.png'),(18,'Notebook - Unidade',0,'Eletrônicos',1500.00,3000.00,'10/12/2026',40.00,'estoque vazio.','icone-padrao.png'),(19,'Celular - Unidade',90,'Eletrônicos',800.50,1500.99,'25/07/2026',25.10,'estoque médio.','icone-padrao.png'),(20,'Mesa de Jantar - Unidade',25,'Móveis',500.45,1100.75,'12/10/2026',18.75,'estoque médio.','icone-padrao.png'),(21,'Cadeira de Escritório - Unidade',0,'Móveis',250.00,500.00,'08/09/2026',10.50,'estoque vazio.','icone-padrao.png'),(22,'Brinquedo Educativo - Unidade',120,'Brinquedos',20.75,50.99,'30/05/2026',12.30,'estoque médio.','icone-padrao.png'),(23,'Jogo de Panelas - Unidade',80,'Ferramentas',100.00,200.00,'15/08/2026',15.00,'estoque médio.','icone-padrao.png'),(24,'Livro - Romance',60,'Livros',30.00,60.00,'20/01/2027',7.50,'estoque médio.','icone-padrao.png'),(25,'Livros - História',90,'Livros',25.00,50.00,'18/03/2027',6.50,'estoque médio.','icone-padrao.png'),(26,'Creme Hidratante - 200ml',0,'Cosméticos',20.00,45.00,'25/11/2026',8.00,'estoque vazio.','icone-padrao.png'),(27,'Toalha de Banho - Unidade',70,'Roupas',12.00,25.00,'22/08/2026',6.00,'estoque médio.','icone-padrao.png'),(28,'Ventilador - Unidade',50,'Eletrônicos',100.00,250.00,'30/11/2027',20.00,'estoque médio.','icone-padrao.png'),(29,'Luminária - Unidade',40,'Móveis',30.00,70.00,'15/07/2026',10.00,'estoque baixo.','icone-padrao.png'),(30,'Colchão - Unidade',20,'Móveis',500.00,1000.00,'12/09/2026',25.00,'estoque baixo.','icone-padrao.png'),(31,'Bola de Futebol - Unidade',100,'Brinquedos',25.00,60.00,'10/06/2027',7.50,'estoque médio.','icone-padrao.png'),(32,'Roteador - Unidade',80,'Eletrônicos',150.00,300.00,'20/12/2026',15.00,'estoque médio.','icone-padrao.png'),(33,'Capa de Celular - Unidade',250,'Eletrônicos',10.00,30.00,'18/05/2027',5.00,'estoque cheio.','icone-padrao.png'),(34,'Chá Verde - Caixa 100g',180,'Alimentos',4.50,12.00,'15/08/2026',5.00,'estoque médio.','icone-padrao.png'),(35,'Água Mineral - 500ml',255,'Bebidas',1.50,3.00,'25/09/2025',3.50,'estoque cheio.','icone-padrao.png'),(36,'Chocolate - 200g',90,'Alimentos',8.00,18.00,'30/04/2026',7.50,'estoque médio.','icone-padrao.png'),(37,'Queijo Mussarela - 1k',50,'Alimentos',28.00,55.00,'12/01/2026',10.00,'estoque médio.','icone-padrao.png'),(38,'Refrigerante Diet - 1L',0,'Bebidas',2.50,6.00,'01/11/2025',8.00,'estoque vazio.','icone-padrao.png'),(39,'Cortador de Grama - Unidade',10,'Ferramentas',350.00,800.00,'20/06/2027',20.00,'estoque baixo.','icone-padrao.png'),(40,'Chave de Fenda - Unidade',120,'Ferramentas',5.50,15.00,'05/09/2026',3.00,'estoque médio.','icone-padrao.png'),(41,'Espelho Decorativo - Unidade',35,'Móveis',150.00,350.00,'15/12/2026',18.50,'estoque médio.','icone-padrao.png'),(42,'Shampoo - 250ml',220,'Cosméticos',10.00,25.00,'22/07/2026',5.75,'estoque cheio.','icone-padrao.png'),(43,'Condicionador - 250ml',200,'Cosméticos',10.00,25.00,'22/07/2026',5.75,'estoque cheio.','icone-padrao.png'),(44,'Toalha de Mesa - Unidade',60,'Roupas',12.00,30.00,'30/09/2026',6.00,'estoque médio.','icone-padrao.png'),(45,'Ferro de Passar - Unidade',70,'Eletrodomésticos',50.00,120.00,'15/02/2027',10.00,'estoque médio.','icone-padrao.png'),(46,'Guarda-Roupa - Unidade',15,'Móveis',700.00,1500.00,'01/08/2027',30.00,'estoque baixo.','icone-padrao.png'),(47,'Bola de Vôlei - Unidade',80,'Brinquedos',30.00,75.00,'10/03/2027',8.00,'estoque médio.','icone-padrao.png'),(48,'Patinete - Unidade',25,'Brinquedos',150.00,300.00,'20/10/2027',12.50,'estoque médio.','icone-padrao.png'),(49,'Cafeteira Elétrica - Unidade',40,'Eletrodomésticos',100.00,250.00,'12/12/2027',15.00,'estoque médio.','icone-padrao.png'),(50,'Tablet - Unidade',35,'Eletrônicos',800.00,1500.00,'15/05/2027',25.00,'estoque médio.','icone-padrao.png'),(51,'Teclado Mecânico - Unidade',90,'Eletrônicos',120.00,250.00,'25/11/2026',7.50,'estoque médio.','icone-padrao.png'),(52,'Ração para Cães - 10k',200,'Alimentos',85.00,180.00,'10/06/2026',15.00,'estoque cheio.','icone-padrao.png'),(53,'Ração para Gatos - 10k',180,'Alimentos',95.00,200.00,'08/07/2026',17.50,'estoque médio.','icone-padrao.png');
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

-- Dump completed on 2025-01-06 12:14:54
