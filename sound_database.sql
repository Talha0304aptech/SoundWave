-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: talha_database
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

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
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(255) DEFAULT NULL,
  `album_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES (1,'Atif Aslam','download.jpg'),(2,'Shawn Mendes','Shawn_Mendes_-_Stitches 5 may 2015.png');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album_rating_video`
--

DROP TABLE IF EXISTS `album_rating_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album_rating_video` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `album_videos_id` int(11) DEFAULT NULL,
  `rating` text DEFAULT NULL,
  `review` varchar(200) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`rating_id`),
  KEY `album_videos_id` (`album_videos_id`),
  CONSTRAINT `album_rating_video_ibfk_1` FOREIGN KEY (`album_videos_id`) REFERENCES `album_videos` (`album_videos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album_rating_video`
--

LOCK TABLES `album_rating_video` WRITE;
/*!40000 ALTER TABLE `album_rating_video` DISABLE KEYS */;
INSERT INTO `album_rating_video` VALUES (2,'Iqbal',2,'4','Overall good job\". \"Nice idea! Very good piano improv! \" \"You have the voice of the legendary singer/songwriter, Johny Cash, and I loved his  ...','2023-12-15 10:32:58'),(3,'Shahbaz',5,'5','Music is in your blood, and I find it quite inspiring..','2023-12-16 01:36:57'),(4,'Alishbah ',2,'4','That was great! I loved how you acted throughout the song..','2023-12-16 01:38:10');
/*!40000 ALTER TABLE `album_rating_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album_videos`
--

DROP TABLE IF EXISTS `album_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album_videos` (
  `album_videos_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `filepath` varchar(255) DEFAULT NULL,
  `trailer` varchar(255) DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`album_videos_id`),
  KEY `album_id` (`album_id`),
  CONSTRAINT `album_videos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album_videos`
--

LOCK TABLES `album_videos` WRITE;
/*!40000 ALTER TABLE `album_videos` DISABLE KEYS */;
INSERT INTO `album_videos` VALUES (1,'Rafta Rafta','Atif Aslam',2021,'Lyrics','Tarish Music presents Atif Aslam’s Rafta Rafta featuring  Sajal Ali, a tale of romance that’ll stay with you forever. ','rafta rafta.jpg','https://www.youtube.com/embed/B-J_PuEhyOM?si=meXnfzx2j4v8719Z',1),(2,'Jeene Laga Hoon','Atif Aslam',2013,'Indian pop',' Atif Aslam & Shreya Ghoshal\r\nMusic Director: Sachin - Jigar\r\nLyricist: Priya Panchal                                                                                                        ','jeeny lga hu.jpg','https://www.youtube.com/embed/-JuzneLzN_I?si=DET_Nul-XB42-QLy',1),(3,'Tere Sang Yaara','Atif Aslam',2016,'Lyrics','Tere Sang Yaara Khush Rang Bahara Full Song (Lyrics) - Atif Aslam | Lyrics Tube','tery sang yara 6 july 2016.jpg','https://www.youtube.com/embed/9fnOPoBBqp4?si=rCY9RCGlZuCUwEQa',1),(4,'Never Be Alone','Shawn Mendes',2015,'Pop ','Shawn Mendes - Never Be Alone','never be alone.jpg','https://www.youtube.com/embed/N7VCLNBNJQs?si=pJZEjXwiqpLp7yg5',2),(5,'Senorita','Shawn Mendes',2019,'Latin Pop','                                                        Music video by Shawn Mendes, Camila Cabello performing Señorita. © 2019 Island Records, a division of UMG Recordings, Inc.                                                     ','senorita video.jpg','https://www.youtube.com/embed/Pkh8UtuejGw?si=xn-2XrNuDmwlRCTJ',2),(6,'Handwritten','Shawn Mendes',2015,'Pop Rock','Music video by Shawn Mendes performing Running Low. (C) 2015 Island Records, a division of UMG Recordings, Inc.','Shawn_Mendes_-_Handwritten image april 14 2015.png','https://www.youtube.com/embed/mT36HTUDRoA?si=5CIGVW-__qp0Brv_',2);
/*!40000 ALTER TABLE `album_videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'ARTIST'),(2,'YEAR'),(3,'GENRE'),(4,'LANGUAGE ');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `music`
--

DROP TABLE IF EXISTS `music`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `music` (
  `music_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `filepath` varchar(255) DEFAULT NULL,
  `trailer` varchar(255) DEFAULT NULL,
  `ctg_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`music_id`),
  KEY `ctg_id` (`ctg_id`),
  CONSTRAINT `music_ibfk_1` FOREIGN KEY (`ctg_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `music`
--

LOCK TABLES `music` WRITE;
/*!40000 ALTER TABLE `music` DISABLE KEYS */;
INSERT INTO `music` VALUES (1,'Heeriye ','Arijit Singh',2023,'Indian FilmPop',' Heeriye (Official Video) Jasleen Royal ft Arijit Singh| Dulquer Salmaan| Aditya Sharma |Taani Tanvir                                                    ','heriya.jpg','https://www.youtube.com/embed/RLzC55ai0eo?si=nqXs2ozWxjQMgyHU',3),(2,'PSYCHO','Anne Marie',2022,'Pop',' Anne-Marie x Aitch - PSYCHO (Official Video)                                                                                                        ','anne maria.jpg','https://www.youtube.com/embed/tZKhv1KJCEc?si=4OZHxdJ764vMKqUU',1),(3,'Baby don\'t hurt me','Anne-Marie',2023,'Electro House','   David Guetta, Anne-Marie, Coi Leray - Baby Don’t Hurt Me (Lyrics)                                                                                                                                                                                          ','baby dont hurt me.jpg','https://www.youtube.com/embed/3RJTau2o_GY?si=swSGStis7anbpfE5',3),(4,'Call Out My Name','The Weeknd',2018,'R&B','                                                                                                                The Weeknd - Call Out My Name (Official Video)                                                                                                 ','call out my name.jpg','https://www.youtube.com/embed/1xda50Ije_Q?si=gOJdczJqXjSV8Wfm',2),(5,' Ghost','Justin Bieber ',2021,'Pop','Justin Bieber - Ghost (Lyrics)','ghost 2021 september 10.jpg','https://www.youtube.com/embed/p6U7zIY6zkA?si=CfOMj-s74w6js9pE',1),(6,'Sorry','Justin Bieber ',2015,'Pop','Justin Bieber - Sorry','sorry 2015 october  22.jpg','https://www.youtube.com/embed/BerNfXSuvJ0?si=bDLZkMZXBOpN-Kpb\" title=\"YouTube video player\"',2),(7,'Hindi ','Arijit Singh',2017,'Indian Film Pop','Naina Lyrics | Arijit Singh | Pritam | Amitabh Bhattacharya |','naina.jpg','https://www.youtube.com/embed/80QJqq1udec?si=xFq62-8DtsfmcCqu',4),(8,'English','Justin Bieber ',2016,'Pop','is a song by Canadian singer-songwriter Shawn Mendes, released through Island Records on June 3, 2016, as the lead single from his second ...','Treat_You_Better_.png','https://www.youtube.com/embed/0xgaqhe5QiM?si=f_o79p8o7tSmGmPj',4),(9,'Spanish','Daddy Yankee',2005,'pop','\"Gasolina\" (\"Gasoline\") is a song on Puerto Rican rapper Daddy Yankee\'s                                  ','downloadss.jpeg','https://www.youtube.com/embed/3sDLMktfqFM?si=iEs994qKFy261qB0',4),(10,'KHAIRIYAT ','Arijit Singh',2019,'Indian Film Pop','Full Song: KHAIRIYAT (BONUS TRACK) | CHHICHHORE | Sushant, Shraddha | Pritam, Amitabh B|Arijit Singh','khairiyat 2019 31 aug ,indian film pop.jpg','https://www.youtube.com/embed/hoNb6HuNmU0?si=HAEG6cEsg3ggg6Op',1),(11,'Blinding Lights','The Weeknd ',2019,'Synth Pop','\"Blinding Lights\" is a song by Canadian singer-songwriter the Weeknd. It was released on November 29, 2019, through XO and Republic Records, as the second ','blinding light.jpg','https://www.youtube.com/embed/XwxLwG2_Sxk?si=kYDXQx2QNdz0E4q_',2),(12,'Mercy ','Shawn Mendes',2016,'Rock','\"Mercy\" is a song by Canadian singer-songwriter Shawn Mendes. It was co-written by Mendes with Ilsey Juber, Danny Parker and Teddy Geiger, with the latter ...','Mercy_-_Single video.jpg','https://www.youtube.com/embed/A8Qgwi2NZEw?si=htYeXAhuNyybp4dd',3),(13,'Tere Sang','Atif Aslam',2016,'Indian Film Pop','\"Tere Sang Yaara\" ( transl. With you, friend) is a romantic song written by Manoj Muntashir, composed by Arko Pravo Mukherjee, and sung by Atif Aslam.','tery sang yara 6 july 2016.jpg','https://www.youtube.com/embed/9fnOPoBBqp4?si=Xgw0Wxm8WQum6AKQ',2),(14,'Attention ','Justin Bieber ',2022,'Afrobeat','\"Attention\" is an afrobeats song that is set in the key of F minor with a tempo of 120 beats per minute. ... Bieber opens the song up with the first verse, which ...','Attention_Omah_Lay 2022 march 4.jpg','https://www.youtube.com/embed/6QYcd7RggNU?si=TxNgjbFjyyyj4mZG',3);
/*!40000 ALTER TABLE `music` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating_music`
--

DROP TABLE IF EXISTS `rating_music`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rating_music` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `music_id` int(11) DEFAULT NULL,
  `rating` text DEFAULT NULL,
  `review` varchar(200) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`rating_id`),
  KEY `music_id` (`music_id`),
  CONSTRAINT `rating_music_ibfk_1` FOREIGN KEY (`music_id`) REFERENCES `music` (`music_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating_music`
--

LOCK TABLES `rating_music` WRITE;
/*!40000 ALTER TABLE `rating_music` DISABLE KEYS */;
INSERT INTO `rating_music` VALUES (2,'Junaid',10,'5','Very smooth sound...really matches the theme...This is your best recording...Some really cool lyrics...very unusual...Perfect fade out...loved','2023-12-15 09:20:14'),(3,'Ahmed',3,'3','Some really cool lyrics...very unusual...Perfect fade out...loved .','2023-12-15 10:13:09'),(6,'Muhammad Talha',5,'4','The transition between songs is just great....','2023-12-15 23:26:44'),(7,'Anees',14,'4','The song selection was too good, and it matches your personality so well...','2023-12-16 01:41:26');
/*!40000 ALTER TABLE `rating_music` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating_video`
--

DROP TABLE IF EXISTS `rating_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rating_video` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `rating` text DEFAULT NULL,
  `review` varchar(200) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`rating_id`),
  KEY `video_id` (`video_id`),
  CONSTRAINT `rating_video_ibfk_1` FOREIGN KEY (`video_id`) REFERENCES `video` (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating_video`
--

LOCK TABLES `rating_video` WRITE;
/*!40000 ALTER TABLE `rating_video` DISABLE KEYS */;
INSERT INTO `rating_video` VALUES (1,'Alishba',4,'4','I love the way each of your songs tells a unique story along...','2023-12-15 16:28:47'),(3,'Muhammad Talha',1,'4','You have lots of potential and superb power in your singing...','2023-12-16 01:34:58'),(4,'Areeba ',3,'5','I want to listen to your song till my last breath...','2023-12-16 01:39:55'),(5,'Sameer',4,'3','A great choice of song, and you did a great job of singing it! Read more: https://www.tuko.co.ke/facts-lifehacks/messages-quotes/454899-awesome-comments-singing-videos-instagram-facebook/','2023-12-16 01:43:19');
/*!40000 ALTER TABLE `rating_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Muhammad Talha','mr.talha0316@gmail.com','$2y$10$Uj53YKC8BVuAUXpSWTjitupgaVVmYL5sMbDs93DqCMC17D.RZV1Q6'),(3,'Talha','mr.talha0304@gmail.com','$2y$10$SUQE.281cgZzmdDzz5Jq8euPa33MlGWBex2FmBwCLcuWX12YKMk.K'),(5,'Alishbah shah','Alishbahshah@gmail.com','$2y$10$1zImimj/io93mVmnCNzlLuf4vmJzaRIartMYdl6arURK2LltvuFdS');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `filepath` varchar(255) DEFAULT NULL,
  `trailer` varchar(255) DEFAULT NULL,
  `ctg_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`video_id`),
  KEY `ctg_id` (`ctg_id`),
  CONSTRAINT `video_ibfk_1` FOREIGN KEY (`ctg_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'bury a friend','Billie Eilish',2019,'Synth Pop','“bury a friend” is literally from the perspective of the monster under my bed. If you put yourself in that mindset, what is this creature doing or feeling? I ...','bury a friend 30 jan 2019 synth pop.jpg','https://www.youtube.com/embed/mveSunIhTZY?si=Y5eMZuXxNTw03pwm',1),(2,'Happier Than Ever','Billie Eilish',2021,'Electro Pop',' An emo and pop-punk song with elements of jazz, it is about Eilish\'s anger towards a former partner due to a toxic relationship. It opens with soft vocals ...                                                                                             ','happier than ever.jpg','https://www.youtube.com/embed/UVQREpxmN_U?si=XjWJj9DUCUQSSjT-',3),(3,'Physical','Dua Lipa ',2020,'Dance Pop','\"Physical\" is a song recorded by British-Australian singer Olivia Newton-John for her 1981 eleventh studio album of the same name.','physical.jpg','https://www.youtube.com/embed/SRdlnO9gMIY?si=SP5NzcZnNhgcaJ_4',1),(4,'lovely ','Billie Eilish',2018,'Chamber Pop','The song has been described as a chamber pop ballad whose lyrics recount Eilish and Khalid trying to overcome serious depression together. The song also appears .','lovely 19 april 2018.jpg','https://www.youtube.com/embed/V1Pl8CzNzCw?si=ipzprpp8Wf8oOL_9\" title=\"YouTube video player',3),(5,'English','Ben Adams',2017,'Pop','Adams also co-wrote the Lisa Scott-Lee single \"Electric\" with Guy Chambers, as well as a song called \"Get Off My Girl\" with Har Mar Superstar. Adams has his ...','220px-Ben_Adams_2010.jpg','https://www.youtube.com/embed/BYNPLwL5mc8?si=oHoHEU_Ba4IDjp89',4),(6,'Ocean Eyes','Billie Eilish',2016,'Pop Dream','The poem is a love song which acknowledges the dangers of falling in love. The person to whom Eilish sings the song has blue eyes that she can get lost in, like ...','Billie_Eilish_-_Ocean_Eyes 18 nov 2016 Popdream popsynth-popindie popR&B.png','https://www.youtube.com/embed/viimfQi_pUw?si=YviPxswxrz8dDuoT',1),(7,' Desi Kalakaar','Honey Singh',2018,'Indian pop','                                                                                                                Desi Kalakaar is a song sung, written, produced & story and screen play by Yo Yo Honey Singh. The album features Sonakshi Sinha, Yo Yo Honey Si','desi kalakar.jpg','https://www.youtube.com/embed/gw7s-GwKPLQ?si=ugbDFETA9z3wEGAt',2),(8,'hindhi','Honey Singh',2019,'Indian pop',' Song Title \"Makhna\" Meaning in English​​ Makhna is a Punjabi slang word','makhna.jpg','https://www.youtube.com/embed/KFj7DSjsYNw?si=qSJOfjRzgF2SIDXy',4),(9,'Stay ','Justin Bieber',2021,'Pop Rock','                                                        Composition and lyrics​​ \"Stay\" is a fast-paced pop rap, pop rock, and synth-pop song. It is set in the key of D♭ major and incorporates piano keys, heavy drums,                                      ','stay 9 july 2021,pop rap ,pop rock.jpg','https://www.youtube.com/embed/yWHrYNP6j4k?si=PzBDCMjHZfiXA_6Y',2),(10,'Juctice','justin bieber',2023,'pop','                                                                                                                \"In a time when there\'s so much wrong with this broken planet, we all crave healing and justice for humanity. In creating this album my goal is','justics 2021 march 19.jpg','https://www.youtube.com/embed/kffacxfA7G4?si=HqJxfcxjdrQxqGhJ',3),(11,'Company','justin bieber',2016,'popup','\"Company\" is a song by Canadian singer Justin Bieber from his fourth studio album Purpose (2015). Written by Bieber, Poo Bear, James Abrahart, Andreas Schuller ..','company 2016 march 8.jpg','https://www.youtube.com/embed/DsoDYUMz6QY?si=H-hBQr1rMHqruMoc',2);
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-17  2:49:14
