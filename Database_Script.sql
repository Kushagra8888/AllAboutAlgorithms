-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2014 at 05:21 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allaboutalgorithms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `e_mail_2` (`E_mail`),
  KEY `e_mail` (`E_mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `E_mail`) VALUES
(1, 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `algorithm`
--

CREATE TABLE IF NOT EXISTS `algorithm` (
  `Algorithm_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Algorithm_Name` varchar(100) NOT NULL,
  `Algorithm_Description` varchar(500) DEFAULT NULL,
  `Algorithm_Process` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Algorithm_ID`),
  UNIQUE KEY `Algorithm_Name` (`Algorithm_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `algorithm`
--

INSERT INTO `algorithm` (`Algorithm_ID`, `Algorithm_Name`, `Algorithm_Description`, `Algorithm_Process`) VALUES
(1, 'Algorithm1', 'Description of Algorithm 1', 'Process of Algorithm 1'),
(2, 'Algorithm2', 'Description of Algorithm 2', 'Process of Algorithm 2'),
(3, 'Algorithm3', 'Description of Algorithm 3', 'Process of Algorithm 3'),
(4, 'test-algo', '								Write description here....\r\n							', '								Write process here....\r\n							'),
(5, 'Dijkstra''s algorithm', 'Dijkstra''s algorithm solves the single-source shortest-paths problem on a weighted,directed graph G = (V, E) for the case in which all edge weights are non-negative.\r\n							', 'DIJKSTRA(G,w, s)\r\n1 INITIALIZE-SINGLE-SOURCE(G, s)\r\n2 S â† âˆ…\r\n3 Q â† V[G]\r\n4 while Q = âˆ…\r\n5 do u â† EXTRACT-MIN(Q)\r\n6 S â† S âˆª {u}\r\n7 for each vertex v âˆˆ Adj[u]\r\n8 do RELAX(u, v,w)				'),
(6, 'sample', 'sample descroption								Write description here....\r\n							', '	sample process							Write process here....\r\n							');

-- --------------------------------------------------------

--
-- Table structure for table `algorithm_analysis`
--

CREATE TABLE IF NOT EXISTS `algorithm_analysis` (
  `algorithm_id` int(11) NOT NULL,
  `analysis_id` int(11) NOT NULL AUTO_INCREMENT,
  `analysis_type` int(11) NOT NULL,
  `analysis_content` text NOT NULL,
  PRIMARY KEY (`analysis_id`),
  KEY `algorithm_id` (`algorithm_id`),
  KEY `analysis_type` (`analysis_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `algorithm_analysis`
--

INSERT INTO `algorithm_analysis` (`algorithm_id`, `analysis_id`, `analysis_type`, `analysis_content`) VALUES
(1, 1, 1, 'Time complexity analysis of algorithm 1');

-- --------------------------------------------------------

--
-- Table structure for table `algorithm_category`
--

CREATE TABLE IF NOT EXISTS `algorithm_category` (
  `algorithm_ID` int(11) NOT NULL,
  `category_ID` int(11) NOT NULL,
  KEY `algorithm_id` (`algorithm_ID`),
  KEY `category_id` (`category_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `algorithm_category`
--

INSERT INTO `algorithm_category` (`algorithm_ID`, `category_ID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(1, 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `algorithm_category_names`
--
CREATE TABLE IF NOT EXISTS `algorithm_category_names` (
`algorithm_id` int(5)
,`Algorithm_Name` varchar(100)
,`category_ID` int(5)
,`category_name` varchar(500)
);
-- --------------------------------------------------------

--
-- Table structure for table `analysis_types`
--

CREATE TABLE IF NOT EXISTS `analysis_types` (
  `analysis_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `analysis_type_name` varchar(100) NOT NULL,
  `analysis_type_description` text NOT NULL,
  PRIMARY KEY (`analysis_type_id`),
  UNIQUE KEY `analysis_type_name` (`analysis_type_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `analysis_types`
--

INSERT INTO `analysis_types` (`analysis_type_id`, `analysis_type_name`, `analysis_type_description`) VALUES
(1, 'Time complexity analysis', 'The efficiency or running time of an algorithm is stated as a function relating the input length to the number of steps '),
(2, 'space complexity analysis', ' the efficiency or running time of an algorithm is stated as a function relating the input length to the amount of storage required.'),
(4, 'Probabilistic analysis', 'Probabilistic analysis is the use of probability in the analysis of problems. Most commonly, we use probabilistic analysis to analyze the running time of an algorithm.\r\n							');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Category_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Category_name` varchar(500) DEFAULT NULL,
  `Category_description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Category_ID`),
  UNIQUE KEY `Category_name` (`Category_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_name`, `Category_description`) VALUES
(1, 'Category 1', 'Description of Category 1'),
(2, 'Category 2', 'Description of Category 2'),
(3, 'Category 3', 'Description of Category 3');

-- --------------------------------------------------------

--
-- Table structure for table `forum_discussion`
--

CREATE TABLE IF NOT EXISTS `forum_discussion` (
  `discussion_ID` int(5) NOT NULL AUTO_INCREMENT,
  `discussion_name` varchar(100) NOT NULL,
  `discussion_description` varchar(1000) NOT NULL,
  `discussion_date` datetime NOT NULL,
  `discussion_author` int(5) NOT NULL,
  PRIMARY KEY (`discussion_ID`),
  KEY `discussion_author` (`discussion_author`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `forum_discussion`
--

INSERT INTO `forum_discussion` (`discussion_ID`, `discussion_name`, `discussion_description`, `discussion_date`, `discussion_author`) VALUES
(1, 'discussion 1', 'description of discussion 1', '2014-05-07 00:00:00', 1),
(2, 'discussion 2', 'description of discussion 2', '2014-05-08 00:00:00', 2),
(3, 'New Topic', 'this is a new topic', '2014-05-08 08:29:41', 1),
(4, 'new topic', 'testing', '2014-05-09 06:20:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE IF NOT EXISTS `forum_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `discussion_id` int(11) NOT NULL,
  `post_title` varchar(500) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_author` int(5) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `discussion_id` (`discussion_id`),
  KEY `discussion_author` (`post_author`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`post_id`, `discussion_id`, `post_title`, `post_content`, `post_date`, `post_author`) VALUES
(6, 1, 'title of post 1', 'contents of post 1', '0000-00-00 00:00:00', 1),
(7, 1, 'title of post 2', 'content of post 2', '2014-05-08 00:00:00', 2),
(8, 1, 'Testing', 'This post id for testing purposes...', '2014-05-08 00:00:00', 1),
(9, 1, 'New post', 'some random text', '2014-05-07 07:55:30', 1),
(10, 1, 'yet another post', 'some more random text', '2014-05-08 01:29:54', 1),
(11, 1, 'testing', 'this is for testing', '2014-05-09 06:20:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `implementations`
--

CREATE TABLE IF NOT EXISTS `implementations` (
  `implementation_id` int(11) NOT NULL AUTO_INCREMENT,
  `implementation_name` varchar(100) NOT NULL,
  `implementation_description` text NOT NULL,
  `algorithm_name` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `implementation` text NOT NULL,
  PRIMARY KEY (`implementation_id`),
  KEY `algorithm_id` (`algorithm_name`),
  KEY `language_id` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `implementations`
--

INSERT INTO `implementations` (`implementation_id`, `implementation_name`, `implementation_description`, `algorithm_name`, `language`, `implementation`) VALUES
(2, 'test', 'for testing purpose', 'Algorithm1', 'C', 'void main(){\r\n//some code\r\n}				'),
(3, 'Dijkstra- a C implementation', 'A simple program in C to implement Dijkstra''s algorithm	\r\n							', 'Algorithm1', 'C', '#include "stdio.h"\r\n#include "conio.h"\r\n#define infinity 999\r\n \r\nvoid dij(int n,int v,int cost[10][10],int dist[])\r\n{\r\n int i,u,count,w,flag[10],min;\r\n for(i=1;i<=n;i++)\r\n  flag[i]=0,dist[i]=cost[v][i];\r\n count=2;\r\n while(count<=n)\r\n {\r\n  min=99;\r\n  for(w=1;w<=n;w++)\r\n   if(dist[w]<min && !flag[w])\r\n    min=dist[w],u=w;\r\n  flag[u]=1;\r\n  count++;\r\n  for(w=1;w<=n;w++)\r\n   if((dist[u]+cost[u][w]<dist[w]) && !flag[w])\r\n    dist[w]=dist[u]+cost[u][w];\r\n }\r\n}\r\n \r\nvoid main()\r\n{\r\n int n,v,i,j,cost[10][10],dist[10];\r\n clrscr();\r\n printf("\\n Enter the number of nodes:");\r\n scanf("%d",&n);\r\n printf("\\n Enter the cost matrix:\\n");\r\n for(i=1;i<=n;i++)\r\n  for(j=1;j<=n;j++)\r\n  {\r\n   scanf("%d",&cost[i][j]);\r\n   if(cost[i][j]==0)\r\n    cost[i][j]=infinity;\r\n  }\r\n printf("\\n Enter the source matrix:");\r\n scanf("%d",&v);\r\n dij(n,v,cost,dist);\r\n printf("\\n Shortest path:\\n");\r\n for(i=1;i<=n;i++)\r\n  if(i!=v)\r\n   printf("%d->%d,cost=%d\\n",v,i,dist[i]);\r\n getch();\r\n}\r\n							');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `Language_id` int(11) NOT NULL AUTO_INCREMENT,
  `Language_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Language_id`),
  UNIQUE KEY `Language_Name` (`Language_Name`),
  KEY `Language_Name_2` (`Language_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`Language_id`, `Language_Name`) VALUES
(2, 'C'),
(3, 'C++'),
(1, 'Java'),
(5, 'Perl'),
(6, 'PHP'),
(4, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(5) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `E_mail` varchar(40) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`User_ID`),
  UNIQUE KEY `E_mail` (`E_mail`),
  KEY `E_mail_2` (`E_mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `First_Name`, `Last_Name`, `E_mail`, `Password`) VALUES
(1, 'abc', 'def', 'abc@xyz.com', 'pass1'),
(2, 'test', 'user', 'test_user@gmail.com', 'password'),
(3, 'Kushagra', 'Sharma', 'kushagra8888@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_algorithm_analysis`
--
CREATE TABLE IF NOT EXISTS `view_algorithm_analysis` (
`algorithm_id` int(11)
,`analysis_type_name` varchar(100)
,`analysis_content` text
);
-- --------------------------------------------------------

--
-- Structure for view `algorithm_category_names`
--
DROP TABLE IF EXISTS `algorithm_category_names`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`mysql114.000webhost.com` SQL SECURITY DEFINER VIEW `algorithm_category_names` AS select `algorithm`.`Algorithm_ID` AS `algorithm_id`,`algorithm`.`Algorithm_Name` AS `Algorithm_Name`,`category`.`Category_ID` AS `category_ID`,`category`.`Category_name` AS `category_name` from ((`algorithm` join `algorithm_category`) join `category`) where ((`algorithm`.`Algorithm_ID` = `algorithm_category`.`algorithm_ID`) and (`category`.`Category_ID` = `algorithm_category`.`category_ID`));

-- --------------------------------------------------------

--
-- Structure for view `view_algorithm_analysis`
--
DROP TABLE IF EXISTS `view_algorithm_analysis`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_algorithm_analysis` AS select `algorithm_analysis`.`algorithm_id` AS `algorithm_id`,`analysis_types`.`analysis_type_name` AS `analysis_type_name`,`algorithm_analysis`.`analysis_content` AS `analysis_content` from (`algorithm_analysis` join `analysis_types`) where (`algorithm_analysis`.`analysis_id` = `analysis_types`.`analysis_type_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `algorithm_analysis`
--
ALTER TABLE `algorithm_analysis`
  ADD CONSTRAINT `analysis_algorithm_fk` FOREIGN KEY (`algorithm_id`) REFERENCES `algorithm` (`Algorithm_ID`),
  ADD CONSTRAINT `analysis_type_id_fk` FOREIGN KEY (`analysis_type`) REFERENCES `analysis_types` (`analysis_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `algorithm_category`
--
ALTER TABLE `algorithm_category`
  ADD CONSTRAINT `algorithm_id_fk` FOREIGN KEY (`algorithm_id`) REFERENCES `algorithm` (`Algorithm_ID`),
  ADD CONSTRAINT `alogrithm_ID_algorithm_ID_fk` FOREIGN KEY (`algorithm_ID`) REFERENCES `algorithm` (`Algorithm_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_ID_category_ID_fk` FOREIGN KEY (`category_ID`) REFERENCES `category` (`Category_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`Category_ID`);

--
-- Constraints for table `forum_discussion`
--
ALTER TABLE `forum_discussion`
  ADD CONSTRAINT `discussion_author_user_id_fk` FOREIGN KEY (`discussion_author`) REFERENCES `user` (`User_ID`);

--
-- Constraints for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD CONSTRAINT `discussion_id_fk` FOREIGN KEY (`discussion_id`) REFERENCES `forum_discussion` (`discussion_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_author_user_id_fk` FOREIGN KEY (`post_author`) REFERENCES `user` (`User_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `implementations`
--
ALTER TABLE `implementations`
  ADD CONSTRAINT `algorithm_name_fk` FOREIGN KEY (`algorithm_name`) REFERENCES `algorithm` (`Algorithm_Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `language_name_fk` FOREIGN KEY (`language`) REFERENCES `languages` (`Language_Name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
