-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: db_crud
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `fornecedor`
--

LOCK TABLES `fornecedor` WRITE;
/*!40000 ALTER TABLE `fornecedor` DISABLE KEYS */;
INSERT INTO `fornecedor` VALUES (5,'José da Silva','josesilva@email.com','06.098.243/0001-90','SUPERMERCADO MAXIMO DA VILA LTDA','SUPERMERCADO MAXIMO','(12) 9999-9999','(12) 9 9999-9999'),(6,'Mariana de Oliveira','marianaoliveira@email.com','05.868.574/0011-71','COMERCIAL ZARAGOZA IMPORTACAO E EXPORTACAO LIMITADA','SPANI ATACADISTA','(12) 9999-9999','(12) 9 9999-9999'),(7,'Adailton Gonçalves','adailton.gonçalves@email.com','45.543.915/0036-01','CARREFOUR COMERCIO E INDUSTRIA LTDA','CARREFOUR','(12) 9999-9999','(12) 9 9999-9999'),(8,'Neide dos Santos','neidesantos@email.com','60.186.376/0001-64','MERCADINHO PIRATININGA LTDA','PIRATININGA','(12) 3947-2732','(12) 9 9999-9999'),(9,'Rodrigo Paiva Neto','rodrigoneto@email.com','07.722.158/0009-71','REDE SIMPATIA COMERCIO DE ALIMENTOS LTDA','SIMPATIA','(12) 9999-9999','(12) 9 9999-9999');
/*!40000 ALTER TABLE `fornecedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (5,5,'Feijão Carioca Saboroso',8.69,1000,3000),(6,5,'Pasta de Amenduim Mandubim',15.9,450,7000),(7,5,'Milho de Pipoca Yoki Premium',7.39,500,5000),(8,6,'Leite Em Pó Ninho Integral',17.7,380,7800),(9,6,'Leite Condensado Italac',4.99,395,7809),(10,6,'Requeijão Danone Tradicional',5.98,200,3000),(11,7,'Requeijão Cremoso Président',10.5,220,20000),(12,7,'Cereja Importada',2.69,100,1500),(13,7,'Tira Manchas Vanish',34.9,1000,25000),(14,8,'Tomate Pelado Pomarola Inteiro',5.98,400,3900),(15,8,'Biscoito Bono Recheado Sabores',3.29,200,5600),(16,8,'Chocolate Em Tablete Netlé Sabores',5.79,80,4567),(17,9,'Maça Gala Granel',9.49,1000,35000),(18,9,'Leite Condensado Italac',5.99,395,20900),(19,9,'Creme de Leite Italac',3.29,200,20789);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-18 21:28:18
