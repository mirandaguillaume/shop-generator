-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: shop-generator
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Current Database: `shop-generator`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `shop-generator` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `shop-generator`;

--
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `armor`
--

DROP TABLE IF EXISTS `armor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `armor` (
  `id` int(11) NOT NULL,
  `defense_points` int(11) NOT NULL,
  `penality` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_BF27FEFCBF396750` FOREIGN KEY (`id`) REFERENCES `item` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `armor`
--

LOCK TABLES `armor` WRITE;
/*!40000 ALTER TABLE `armor` DISABLE KEYS */;
INSERT INTO `armor` VALUES (5,0,0),(12,1,0),(13,2,-1),(14,3,-3);
/*!40000 ALTER TABLE `armor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrier`
--

DROP TABLE IF EXISTS `carrier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrier` (
  `id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_4739F11CBF396750` FOREIGN KEY (`id`) REFERENCES `animal` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrier`
--

LOCK TABLES `carrier` WRITE;
/*!40000 ALTER TABLE `carrier` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clothing`
--

DROP TABLE IF EXISTS `clothing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clothing` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_139C38B1BF396750` FOREIGN KEY (`id`) REFERENCES `item` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clothing`
--

LOCK TABLES `clothing` WRITE;
/*!40000 ALTER TABLE `clothing` DISABLE KEYS */;
INSERT INTO `clothing` VALUES (16),(17),(18),(19),(20),(21),(22),(23),(24),(25),(26),(27),(28),(29),(30),(31),(32),(33),(34),(35),(36);
/*!40000 ALTER TABLE `clothing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `common`
--

DROP TABLE IF EXISTS `common`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `common` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_E5EC7051BF396750` FOREIGN KEY (`id`) REFERENCES `item` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `common`
--

LOCK TABLES `common` WRITE;
/*!40000 ALTER TABLE `common` DISABLE KEYS */;
INSERT INTO `common` VALUES (37),(38),(39),(40),(41),(42),(43),(44),(45),(46),(47),(48),(49),(50),(51),(52),(53),(54),(55),(56),(57),(58),(59),(60),(61),(62),(63),(64),(65),(66),(67),(68),(69);
/*!40000 ALTER TABLE `common` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `container`
--

DROP TABLE IF EXISTS `container`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `container` (
  `id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_C7A2EC1BBF396750` FOREIGN KEY (`id`) REFERENCES `item` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `container`
--

LOCK TABLES `container` WRITE;
/*!40000 ALTER TABLE `container` DISABLE KEYS */;
INSERT INTO `container` VALUES (70,0),(71,0),(72,0),(73,3),(74,2),(75,15),(76,10),(77,5),(78,10);
/*!40000 ALTER TABLE `container` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_D338D583BF396750` FOREIGN KEY (`id`) REFERENCES `item` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
INSERT INTO `equipment` VALUES (5,'Chest'),(6,'1 hand'),(7,'1 hand'),(8,'2 hands'),(9,'1 hand'),(10,'2 hands'),(11,'1 hand'),(12,'Chest'),(13,'Chest'),(14,'Chest'),(15,'1 hand'),(16,'Shoes'),(17,'Capes'),(18,'Shoes'),(19,'Shoes'),(20,'Shoes'),(21,'Shoes'),(22,'Shoes'),(23,'Capes'),(24,'Capes'),(25,'Capes'),(26,'Capes'),(27,'Capes'),(28,'Staff'),(29,'Staff'),(30,'Staff'),(31,'Hats'),(32,'Hats'),(33,'Hats'),(34,'Hats'),(35,'Accessories'),(36,'Accessories');
/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `herb`
--

DROP TABLE IF EXISTS `herb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `herb` (
  `id` int(11) NOT NULL,
  `effect` longtext COLLATE utf8_unicode_ci NOT NULL,
  `part` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `terrain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_2F7F123BBF396750` FOREIGN KEY (`id`) REFERENCES `item` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `herb`
--

LOCK TABLES `herb` WRITE;
/*!40000 ALTER TABLE `herb` DISABLE KEYS */;
INSERT INTO `herb` VALUES (79,'Soigne la douleur et rend 2 PV','Fruit',1,'Plaine'),(80,'En tisant, il favorise le sommeil. Le test de condition suivant est considéré comme un 6.','Fleur',1,'Lande'),(81,'Poison. Dose pour une flèche. Ajoute 2 aux dégâts si la pointe est enduite à l\'avance.','Sève',2,'Bois'),(82,'Soigne les jambes lourdes. Annule les dégâts occasionnés par un test de déplacement.','Feuille',2,'Rocaille'),(83,'Revitalise l’énergie du corps. Autorise un test de condition immédiat pour guérir un état physique avec un bonus de +1.','Tige',3,'Marais');
/*!40000 ALTER TABLE `herb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instance_features`
--

DROP TABLE IF EXISTS `instance_features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instance_features` (
  `instance_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  PRIMARY KEY (`instance_id`,`feature_id`),
  KEY `IDX_BD6ADBD43A51721D` (`instance_id`),
  KEY `IDX_BD6ADBD460E4B879` (`feature_id`),
  CONSTRAINT `FK_BD6ADBD43A51721D` FOREIGN KEY (`instance_id`) REFERENCES `specified_item` (`id`),
  CONSTRAINT `FK_BD6ADBD460E4B879` FOREIGN KEY (`feature_id`) REFERENCES `spe` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instance_features`
--

LOCK TABLES `instance_features` WRITE;
/*!40000 ALTER TABLE `instance_features` DISABLE KEYS */;
INSERT INTO `instance_features` VALUES (1,1),(1,2),(1,3);
/*!40000 ALTER TABLE `instance_features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (5,'Vêtements',50,'Vêtements normaux. Résistants et favorisés par les voyageurs. Généralement en laine filée.','armor'),(6,'Epée courte',400,'Une épée qui peut être tenue dans la main. Peut être utile hors combat, dans la préparation de la nourriture, la récolte d\'herbes, etc...','weapon'),(7,'Epée longue',700,'Une arme avec une longue lame plate. Acclamée dans le monde entier, avec un tranchant c\'est un sabre et avec 2 tranchants, une épée.','weapon'),(8,'Lance',350,'Une arme constituée d\'un bout de bois avec une pointe à l\'extrémité. Peut être utilisée pour percer avec le bout pointu ou pour assommer avec le manche, ce qui en fait une arme polyvalente. Son prix en fait aussi une arme facile à se procurer.','weapon'),(9,'Hache',500,'Un outil utilisé pour couper les arbres. A cause de son poids, utilisable seulement avec de la force brute.','weapon'),(10,'Arc',750,'Arme à projectiles utilisée par les chasseurs et leurs pairs. Aussi populaire avec les nobles et les soldats pour sa capacité à attaquer à distance. (Note: Pas de gestion des flèches)','weapon'),(11,'Bouclier léger',400,'Un bouclier qui peut être tenu d\'une seule main. Fait de bois et de branchages, son poids léger lui évite de gêner durant le combat.','shield'),(12,'Armure légère',900,'Armure faite du cuir d\'animaux avec des plaques de métal qui protègent les points vitaux. Seul la poitrine est protégée, mais se porte facilement de par sa légèreté.','armor'),(13,'Armure moyenne',2000,'Armure constituée de plaques de métal. En plus de la poitrine les jambes et les bras sont protégés, mais le poids augmente en conséquence ...','armor'),(14,'Armure lourde',100000,'Une armure lourde constituée de plaque qui recouvre entièrement le corps. Les mouvements sont restreints lorsqu\'elle est equipée.','armor'),(15,'Bouclier lourd',1200,'Un bouclier assez large pour recouvrir la totalité du corps. La plupart d\'entre eux sont fait de métal. Leur poids les rends difficile à transporter.','shield'),(16,'Chaussures de pluie',300,'Ces bottes on été recouvertes d\'un enduit qui les rends résistantes à l\'eau. Elles sont efficaces pour garder vos pieds au sec.','clothing'),(17,'Coupe-vent',120,'Une cape avec une capuche qui recouvre le corps. Des poids sont cousus dans la cape pour l\'empêcher de balloter avec le vent','clothing'),(18,'Chaussures de marche',350,'Ces chaussures sont faites de cuir souple ce qui permet de marcher avec plus d\'aisance sur des pavements. Très légères, elles n\'encombrent absolument pas dans le déplacement.','clothing'),(19,'Chaussure de montagne',450,'Chaussures aux semelles épaisses, faites pour éviter de glisser et de se blesser dans les rocailles.','clothing'),(20,'Chaussures pour la jungle',600,'Bottes solides faites pour marcher dans les ronces. Elles protègent complètement les pieds.','clothing'),(21,'Chaussures pour les marais',500,'Chaussures très larges avec des semelles antidérapantes pour ne pas s\'enfoncer dans la boue.','clothing'),(22,'Raquettes de neiges',500,'Elles ont été spécialement modifiées pour éviter les engelures et les assauts du froid.','clothing'),(23,'Cape anti-feu',700,'Faite avec la dépouille d\'un monstre résistant au feu. Perd toutes ses propriétés si elle est mouillée.','clothing'),(24,'Cape de camouflage',400,'Recouvre tout le corps et permet de se fondre dans un paysage choisi à l\'achat.','clothing'),(25,'Cape de fourrure',160,'La fourrure permet de retenir la chaleur. Peut aussi servir de couverture.','clothing'),(26,'Djellaba',400,'Confectionnée à partir de matériaux légers. Bien aérée pour ne pas souffrir de la chaleur.','clothing'),(27,'Manteau de pluie',400,'Fait en cuir et imperméabilisé. Protège de la pluie, mais exige des soins fréquents.','clothing'),(28,'Bâton de marche',50,'Ne sert qu\'aux voyageurs avec 4 ou moins en VIG, ou subissant des malus dûs à l\'encombrement.','clothing'),(29,'Canne des neiges',280,'Utile pour avancer dans la neige. Sa pointe en métal est renforcée pour briser la glace.','clothing'),(30,'Dévale-pente',100,'Utilisé pour garder son allure sur les pentes. Sa longueur est réglable.','clothing'),(31,'Chapeau',120,'Chapeau particulièrement banal, dont les formes et les couleurs peuvent varier. Censé protéger du mal.','clothing'),(32,'Chapeau à large bords',180,'Protège de l\'éclat du soleil et de la chaleur. En coton, lin ou paille afin de laisser passer l\'air.','clothing'),(33,'Chèche',340,'Protège les yeux du vent et du sable. L\'étoffe est épaisse et lourde mais évite d\'être éblouie par le soleil.','clothing'),(34,'Toque en fourrure',200,'La fourrure permet de garder la tête bien au chaud. Recouvre aussi les oreilles afin qu\'elles ne gèlent pas.','clothing'),(35,'Accessoires',100,'Anneaux, boucles d\'oreilles, colliers, etc. Faits dans divers matériaux locaux.','clothing'),(36,'Lunettes de protection',4000,'Protègent les yeux de la pluie et du vent. Très difficiles à confectionner et donc extrêmement chères.','clothing'),(37,'Alcools',10,'Consommés avec une condition inférieure à 4, ils provoquent l\'état Surexcité (4)','common'),(38,'Aliments frais',5,'Légumes et viandes de première fraîcheur. Ne peuvent se conserver plus de 24h.','common'),(39,'Mauvaises rations',5,'Goût répugnant. Les consommer avec une condition inférieure à 4 coûte la moitié de ses PV actuels.','common'),(40,'Nourriture pour animaux',5,'Vivres pour animaux. Indispensable pour le désert ou la montagne.','common'),(41,'Rations',10,'Vivres dont on ne peut se passer en voyage. Goût quelconque.','common'),(42,'Rations de choix',70,'Vraiment succulentes. +1 au test de condition du lendemain.','common'),(43,'Boussole',1500,'Indique le nord. +1 aux tests d\'orientation.','common'),(44,'Briquet',20,'Fer, silex et amadou. Permet d\'allumer des feux de camp.','common'),(45,'Cahier en cuir',100,'Cahier renforcé dont la couverture en cuir permet un transport plus facile.','common'),(46,'Corde',50,'Peut être utilisée dans de nombreuses situations. Se vend par longueurs de 10 mètres.','common'),(47,'Couverts',10,'De la vaisselles dont les formes, tailles et couleurs varient.','common'),(48,'Instrument',300,'Tambourins, trompettes, lyres, violons, flûtes, cymbales, etc.','common'),(49,'Lanterne',80,'Éclaire comme une torche, mais est protégée du vent et ne s\'éteint pas facilement.','common'),(50,'Miroir',300,'Petit miroir qui se tiens dans la main.','common'),(51,'Nécessaire à lessive',15,'Savon et planche à laver le linge.','common'),(52,'Nécessaire de cuisine',100,'Ensemble d\'ustensiles permettant de faire à manger.','common'),(53,'Parapluie/Ombrelle',50,'Requiert une main libre. +1 aux tests de déplacement si le climat est Chaleur ou Pluie.','common'),(54,'Parchemin',2,'Papier confectionné à partir de cuir animal. Solide et ne se déchire pas facilement.','common'),(55,'Parfum',500,'Flacon de liquide à l\'odeur agréable. Cache la spécificité fétide pendant 12 heures.','common'),(56,'Plume',2,'Plume dont la pointe à été biseauté pour pouvoir écrire.','common'),(57,'Pointe de verre',120,'Pointe en verre de haute qualité permettant d\'écrire.','common'),(58,'Savon',5,'Indispensable aux soins du corps. Mousse au contact de l\'eau.','common'),(59,'Torche',5,'Bout de bois préparé de façon à être enflammé. Permet d\'éclairer les lieux obscurs.','common'),(60,'Baquet',450,'Baignoire transportable.','common'),(61,'Couvertures',40,'Couettes et couvertures légères et faciles à transporter.','common'),(62,'Oreiller',10,'Rend le sommeil plus agréable. Très personnel : certains ne peuvent pas dormir sans le leur.','common'),(63,'Peluche',100,'Jouet ayant généralement la forme d\'un animal et dont les formes et couleurs varient.','common'),(64,'Pierre de bain',20,'Pierre pouvant réchauffer un baquet d\'eau à 40 degrés. Une seule utilisation.','common'),(65,'Repousse-insecte',10,'Sorte d\'encens fait d\'herbes odorantes et éloignant les insectes pendant 12 heures.','common'),(66,'Sac de couchage',50,'Permet de dormir n\'importe où. Utilisable par une seule personne à la fois.','common'),(67,'Tente',120,'Jusqu\'à 3 personnes peuvent y passer la nuit.','common'),(68,'Tente d\'hiver',300,'Indispensable par temps de froid. +2 aux tests de campement si le climat est Froid.','common'),(69,'Yourte',500,'Tente pouvant abriter jusqu\'à 10 personnes. Plébiscitée par les peuples nomades.','common'),(70,'Bouteille d\'herboriste',100,'Bouteille ayant reçu un traitement spécial et qui peut contenir jusqu\'à 10 herbes de soins. Elle pert ses propriétés 7 jours après ouverture, mais son contenu peut être transversé.','container'),(71,'Outre',30,'Faite en cuir ou en écorce traitée, elle contient de l\'eau pour la journée.','container'),(72,'Thermos',2000,'Bouteille magique qui préserve la température de ce qu\'elle contient. +1 aux tests de déplacement en cas de Chaleur ou de Froid','container'),(73,'Sac',10,'Sac simple sans décoration. Requiert une main libre.','container'),(74,'Sac de ceinture',30,'On ne peut en porter qu\'un à la fois. Idéal pour les petits objets dont on veut pouvoir se servir immédiatement.','container'),(75,'Caisse',10,'Permet de transporter beaucoup de choses, mais n\'est vraiment pas pratique. -1 aux tests de déplacement si elle n\'est pas portée par un animal.','container'),(76,'Grand sac à dos',40,'Sa grande capacité permet d\'avoir toujours sur soi ce dont on a besoin.','container'),(77,'Sac à dos',20,'Sac à dos tout ce qu\'il y a de plus normal. Toujours utile pour les voyages.','container'),(78,'Tonneau',10,'Contient de l\'eau pour 15 jours. Sinon, c\'est un contenant de capacité 10.','container'),(79,'Pomme du couchant',100,'Arbre à feuillage persistant ressemblant à un pommier. Son fruit à la couleur du crépuscule. Il est tonique et nutritif.','herb'),(80,'Volubilis couronné',100,'Plante dont les fleurs forment une couronne très colorée dont la teinte vire selon la météo entre le rouge, le bleu, le blanc et le violet.','herb'),(81,'Laque de l\'ogre',300,'Arbre à feuilles caduques faisant entre 4 et 5 mètres de haut. Son écorce est gris cendré et une sève noire visqueuse en suinte si on perce cette dernière.','herb'),(82,'Paume du géant',300,'Plante vivace dont les grandes feuilles sont recouvertes d\'un liquide collant vert pâle. Prolifère dans les environnements humides.','herb'),(83,'Carthame de l\'aube',800,'Sorte de chardon aux fleurs d\'un rouge aussi vif que le sang. Ses tiges contiennent un puissant stupéfiant et il faut donc les manipuler avec précaution.','herb');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20160204122058'),('20160204142729'),('20160204143134'),('20160204143334'),('20160204145420'),('20160204165143'),('20160204165259'),('20160208225530'),('20160208225706'),('20160208225734'),('20160209154907');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mount`
--

DROP TABLE IF EXISTS `mount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mount` (
  `id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_3AE9FA03BF396750` FOREIGN KEY (`id`) REFERENCES `animal` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mount`
--

LOCK TABLES `mount` WRITE;
/*!40000 ALTER TABLE `mount` DISABLE KEYS */;
/*!40000 ALTER TABLE `mount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pet`
--

DROP TABLE IF EXISTS `pet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_E4529B85BF396750` FOREIGN KEY (`id`) REFERENCES `animal` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pet`
--

LOCK TABLES `pet` WRITE;
/*!40000 ALTER TABLE `pet` DISABLE KEYS */;
/*!40000 ALTER TABLE `pet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shield`
--

DROP TABLE IF EXISTS `shield`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shield` (
  `id` int(11) NOT NULL,
  `defense_points` int(11) NOT NULL,
  `penality` int(11) DEFAULT NULL,
  `dodge_value` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_1E93D2E8BF396750` FOREIGN KEY (`id`) REFERENCES `item` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shield`
--

LOCK TABLES `shield` WRITE;
/*!40000 ALTER TABLE `shield` DISABLE KEYS */;
INSERT INTO `shield` VALUES (11,1,0,7),(15,2,-1,9);
/*!40000 ALTER TABLE `shield` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop`
--

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_items`
--

DROP TABLE IF EXISTS `shop_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_items` (
  `shop_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`shop_id`,`item_id`),
  KEY `IDX_2608B31F4D16C4DD` (`shop_id`),
  KEY `IDX_2608B31F126F525E` (`item_id`),
  CONSTRAINT `FK_2608B31F126F525E` FOREIGN KEY (`item_id`) REFERENCES `specified_item` (`id`),
  CONSTRAINT `FK_2608B31F4D16C4DD` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_items`
--

LOCK TABLES `shop_items` WRITE;
/*!40000 ALTER TABLE `shop_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spe`
--

DROP TABLE IF EXISTS `spe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feature` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `operation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spe`
--

LOCK TABLES `spe` WRITE;
/*!40000 ALTER TABLE `spe` DISABLE KEYS */;
INSERT INTO `spe` VALUES (1,'Mignon',2,'Un objet mignon','Multiply','item'),(2,'Cool',3,'Objet cool','addition','item'),(3,'Cool2',3,'Objet cool','addition','item');
/*!40000 ALTER TABLE `spe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spe_animal`
--

DROP TABLE IF EXISTS `spe_animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spe_animal` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_98A82005BF396750` FOREIGN KEY (`id`) REFERENCES `spe` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spe_animal`
--

LOCK TABLES `spe_animal` WRITE;
/*!40000 ALTER TABLE `spe_animal` DISABLE KEYS */;
/*!40000 ALTER TABLE `spe_animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spe_item`
--

DROP TABLE IF EXISTS `spe_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spe_item` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_77B0A5C0BF396750` FOREIGN KEY (`id`) REFERENCES `spe` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spe_item`
--

LOCK TABLES `spe_item` WRITE;
/*!40000 ALTER TABLE `spe_item` DISABLE KEYS */;
INSERT INTO `spe_item` VALUES (1),(2),(3);
/*!40000 ALTER TABLE `spe_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specified_item`
--

DROP TABLE IF EXISTS `specified_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specified_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_875E98EE126F525E` (`item_id`),
  CONSTRAINT `FK_875E98EE126F525E` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specified_item`
--

LOCK TABLES `specified_item` WRITE;
/*!40000 ALTER TABLE `specified_item` DISABLE KEYS */;
INSERT INTO `specified_item` VALUES (1,11,'Un objet lambda');
/*!40000 ALTER TABLE `specified_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `weapon`
--

DROP TABLE IF EXISTS `weapon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weapon` (
  `id` int(11) NOT NULL,
  `accuracy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `damage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_6933A7E6BF396750` FOREIGN KEY (`id`) REFERENCES `item` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weapon`
--

LOCK TABLES `weapon` WRITE;
/*!40000 ALTER TABLE `weapon` DISABLE KEYS */;
INSERT INTO `weapon` VALUES (6,'AGI+INT+1','INT-1'),(7,'AGI+VIG','VIG'),(8,'AGI+VIG','VIG+1'),(9,'VIG+VIG+1','VIG'),(10,'INT+AGI-2','AGI');
/*!40000 ALTER TABLE `weapon` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-09 16:05:58
