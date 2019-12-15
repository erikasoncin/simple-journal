-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: Journal
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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
-- Table structure for table `Article`
--

DROP TABLE IF EXISTS `Article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Article` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) NOT NULL,
  `Subheading` varchar(100) NOT NULL,
  `Body` text NOT NULL,
  `Date` datetime NOT NULL,
  `Author` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Author` (`Author`),
  CONSTRAINT `Article_ibfk_1` FOREIGN KEY (`Author`) REFERENCES `User` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Article`
--

LOCK TABLES `Article` WRITE;
/*!40000 ALTER TABLE `Article` DISABLE KEYS */;
INSERT INTO `Article` VALUES (1,'Mezza Italia allagata fiumi oltre gli argini','Trovata morta la 52enne dispersa nell\'alessandrino.L\'ondata di maltempo non è ancora fatta','Non da tregua l\'ondata di maltempo che nelle ultime ore ha flagellato soprattutto Liguria e Piemonte.','2019-11-25 07:36:49',1),(2,'Contro Trump ora in pista c\'è Bloomberg','Ex sindaco di New York contro Trump','Micheal Bloomber ha annunciato ufficialmente la sua candidatura alla Casa Bianca con i Democratici per le prossime elezioni','2019-11-25 07:36:49',1),(3,'Test Titolo','Test sottotitolo','bla bla bla','2019-11-25 07:36:51',1),(4,'Tre meriti delle proteste libanesi','Una manifestazione a Beirut, Libano, il 24 novembre 2019. (Anwar Amro, Afp/Getty Images)','Il Libano, piccolo paese con una superficie di appena 10.452 chilometri quadrati, sta cercando di risolvere tutti i problemi del mondo. Da più di un mese centinaia di migliaia di libanesi protestano, danzano, cantano e resistono in modo assolutamente pacifico e gioioso. I manifestanti chiedono l’impossibile, e non è detto che alla fine non lo ottengano.','2019-11-25 07:45:32',1),(5,'L’ufficiale e la spia e gli altri film del weekend','L’ufficiale e la spia. (01 Distribution)','In sala, ancora per qualche ora c’è Storia di un matrimonio di Noah Baumbach, presentato a Venezia. È uscito in pochi cinema perché il film è prodotto da Netflix e sarà a disposizione degli abbonati a partire dal 6 dicembre. Senza entrare nella diatriba “Se i film vanno visti in sala oppure no” mi faccio molte domande sulla distribuzione, in generale. Il film è bello ed è tra quelli “da vedere”, non solo perché Baumbach è l’autore di Il calamaro e la balena, film in cui non ancora quarantenne ha spaccato in due la commedia sentimentale. Ma anche perché ci sono Scarlett Johansson e Adam Driver che fanno una supercoppia in cui ci si può facilmente immedesimare, nel bene e nel male.','2019-11-25 07:56:27',1);
/*!40000 ALTER TABLE `Article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(30) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'enricozimuel@gmail.com','Enrico','FDD4163C93AB01557F331649882FB250F11A619F7883410BA64AD4BDBDF2FABB'),(2,'test@gmail.com','Gang','9F86D081884C7D659A2FEAA0C55AD015A3BF4F1B2B0B822CD15D6C15B0F00A08'),(3,'erika@gmail.com','Erika','12345678');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-29  2:19:43
