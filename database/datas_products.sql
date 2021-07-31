-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: datas
-- ------------------------------------------------------
-- Server version	8.0.23

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `quantity` int NOT NULL,
  `weight` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Milk Chocolates','<p> Milk chocolate is perhaps the most popular type of chocolate. </p>\n                        <ul> <li>It actually contains only 10 to 40 percent cacao mixed with sugar and milk</li>\n                            <li> It is much, much sweeter than dark or bitttersweet chocolate </li>\n                            <li> It has a lighter color and less-pronounced chocolate taste </li>\n                            <li>However, milk chocolate is not great for baking because it is prone to overheating.</li>\n                        </ul>',99.99,30,5),(2,'White Chocolates','<p>White chocolate has the most creamy flavour of all. </p>\n                <ul> <li>It does not contain chocolate liquor or any other cocoa products besides cocoa butter </li>\n                     <li>It does not have a very chocolatey taste, but resembles smooth vanilla</li>\n                     <li>It contains a minimum 20 percent cocoa butter, a max of 55 percent sugar, and about 15 percent milk solids.</li>\n                </ul>',129.99,25,7),(3,'Dark Chocolates','<p>Dark chocolate contains chocolate liquor, sugar, and cocoa butter.</p>\n                    <ul><li> It also commonly includes lecithin as an emulsifier and vanilla for flavor</li>\n                    <li>Dark chocolate does not contain any milk solids</li>\n                    <li>The amount of cocoa in dark chocolate bars ranges from 30 percent all the way up to 80 percent</li> \n                    </ul>',119.99,40,10),(4,'Sweet German Chocolate','<p>Sweet German chocolate is a dark baking chocolate created by a man named Samuel German.</p>\n                     <ul> <li>This chocolate to be convenient for bakers and added sugar directly to it</li>\n                      <li>It is sweeter than semisweet chocolate</li> \n                      <li>This type of chocolate is most commonly used in German Chocolate Cake</li>\n                    </ul>',199.99,20,5),(5,'Bitter Sweet Chocolate','<p>Bittersweet chocolate is used where there is required deep,intense chocolate flavour.</p>\n                    <p>It must contain at least 35 percent cocoa according to the FDA. but most bittersweet bars contain 50 percent, with others having as much as 80 percent cocoa. This type of chocolate often has a deeper, more bitter flavor than other types of chocolate</p>',189.99,20,5);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-31 13:09:03
