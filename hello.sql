-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2017 at 05:14 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1572186_hello`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mobile_number` bigint(11) UNSIGNED NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `usrname` varchar(20) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `age` tinyint(3) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `proffession` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`first_name`, `last_name`, `mobile_number`, `email_id`, `usrname`, `pswd`, `age`, `sex`, `proffession`) VALUES
('Sourabh', 'Roy', 1111111111, 'srbhroy5@gmail.com', 'srbhroy5', '99dragonball66', 26, 'Male', 'Working'),
('rik', 'Roy', 2222222222, 'rik@gmail.com', 'rikroy', '99dragonball66', 23, 'Female', 'Student'),
('shyama', 'Roy', 5555555555, 'shyama@gmail.com', 'shyama1', '123456', 50, 'Female', 'Working'),
('samar', 'roy', 9231929536, 'samarbabla@gmail.com', 'samarbabla123', '66', 56, 'Male', 'Working'),
('gaurav', 'Roy', 5516512, 'gaurav22@gmail.com', 'kkkk', '1234567956', 6, 'Male', 'Working'),
('swarup', 'roy', 1234567890, 'swarup1@gmail.com', 'swarup4', '1234', 24, 'Male', 'Student'),
('Koushiki', 'Dutta', 9999999999, 'koushikiroy96@gmail.com', 'koushiki96', '99dragonball66', 20, 'Female', 'Student'),
('tirtha', 'banerjee', 2223336665, 'tirtho@gmail.com', 'tirtho', '0203040514', 17, 'Male', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `ans_bank`
--

CREATE TABLE `ans_bank` (
  `ques_id` int(10) UNSIGNED NOT NULL,
  `ans` longtext NOT NULL,
  `usrname` varchar(20) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans_bank`
--

INSERT INTO `ans_bank` (`ques_id`, `ans`, `usrname`, `id`) VALUES
(20, 'cardemom-in hindi called elaichi.is a flavour enhancing food condiment.', 'srbhroy5', 1),
(28, 'Leonardo Wilhelm DiCaprio is an American actor and film producer. DiCaprio began his career by appearing in television commercials in the early 1990s, after which he had recurring roles', 'koushiki96', 2),
(14, 'we are homosapien,close relative of Homo floresiensis.', 'srbhroy5', 3),
(20, 'Cardamom, sometimes Cardamon or Cardamum, is a spice made from the seeds of several plants in the genera Elettaria and Amomum in the family Zingiberaceae. Both genera are native to India, Pakistan, Bangladesh, Bhutan, Indonesia and Nepal.', 'koushiki96', 15),
(20, 'As a spice, cardamom is extremely versatile, and is used all over the world in coffee, sausage, and in savory meat and fish recipes. You can buy it already ground, but the entire pod, opened to release the tiny black seeds inside for fresh grinding, offers the most intense, spicy-sweet, and completely unique flavor.\r\n', 'rikroy', 16),
(20, 'its a food condiment for having flavour in food.	', 'shyama1', 17),
(15, 'Leonardo di ser Piero da Vinci, more commonly Leonardo da Vinci or simply Leonardo, was an Italian polymath whose areas of interest included invention, painting, sculpting, architecture, science, music\r\n', 'srbhroy5', 20),
(15, 'he is a painter', 'srbhroy5', 21),
(28, 'Born in 1974 in Los Angeles, California, Leonardo DiCaprio is an actor known for his edgy, unconventional roles. He started out in television before moving on to film, scoring an Oscar nomination for his role in What''s Eating Gilbert Grape (1993).', 'kkkk', 22),
(15, 'Leonardo da Vinci was a genius in many fields. He excelled at painting, drawing, sculpture, architecture, and engineering. He was a leading figure of the Italian Renaissance, a period of great achievement in the arts and sciences. Leonardo’s paintings Mona Lisa and Last Supper won him great fame. But he is also well known for his scientific studies.', 'kkkk', 23),
(30, 'Intro: Candle Powered Hot Air Balloon. ...\r\nCut the plastic and heat-seal the edges. ...\r\nMelt candles together and attach them to balsa. ...\r\nAssemble the balsa frame. ...\r\nTape the balloon to the balsa frame.\r\nUse a stick inside the balloon to hold the plastic away from the candles and light them.\r\nMelt candles together and attach them to balsa. Again, an electric hot knife makes this step a breeze. A heated fork can achieve the same results. Make sure to do both sides. \r\n\r\nOnce the candles are attached together, melt them to the middle of a piece of balsa wood 3/16 x 1/8 x 36 inches.', 'shyama1', 24),
(33, 'Best hotels:\r\n\r\nHotel Il Pellicano\r\nPorto Ercole, Tuscany, Italy\r\n\r\nHotel Santa Caterina\r\nAmalfi, Campania, Italy\r\n\r\nBelmond Hotel Splendido\r\nPortofino, Liguria, Italy\r\n\r\nJ.K. Place Capri\r\nCapri, Italy\r\n\r\nLe Dune Piscinas\r\nSardinia, Italy', 'tirtho', 25),
(13, 'The theory that everyone and everything on Earth contains minuscule star particles dates back further than Mobys popular 2002 song We Are All Made of Stars.\r\nIn the early 1980s, astronomer Carl Sagan hosted and narrated a 13-part television series called Cosmos that aired on PBS. On the show, Sagan thoroughly explained many science-related topics, including Earths history, evolution, the origin of life and the solar system.', 'srbhroy5', 29);

-- --------------------------------------------------------

--
-- Table structure for table `ques_bank`
--

CREATE TABLE `ques_bank` (
  `ques_id` int(10) UNSIGNED NOT NULL,
  `ques_topic` varchar(20) NOT NULL,
  `ques` mediumtext NOT NULL,
  `usrname` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_bank`
--

INSERT INTO `ques_bank` (`ques_id`, `ques_topic`, `ques`, `usrname`) VALUES
(20, 'food', 'what is cardemom?', 'srbhroy5'),
(14, 'science', 'who are we?', 'srbhroy5'),
(15, 'arts', 'who is leonardo da vinci?', 'soura4'),
(13, 'science', 'Are we made of sun dust?', 'koushiki96'),
(1, 'travel', 'Is uk safe for holiday trip?', 'koushiki96'),
(28, 'arts', 'who is Leonardo Decaprio?', 'tirtho'),
(29, 'travel', 'Is Madrid is safe for holiday?', 'srbhroy5'),
(30, 'science', 'how to make a toy hot air balloon?', 'kkkk'),
(32, 'food', 'how to make lemon chicken????????', 'srbhroy5'),
(33, 'travel', 'Any good hotels in itally?????', 'swarup4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`usrname`),
  ADD UNIQUE KEY `c` (`mobile_number`);

--
-- Indexes for table `ans_bank`
--
ALTER TABLE `ans_bank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ans_id` (`ques_id`),
  ADD KEY `ans_id_2` (`ques_id`);

--
-- Indexes for table `ques_bank`
--
ALTER TABLE `ques_bank`
  ADD PRIMARY KEY (`ques_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ans_bank`
--
ALTER TABLE `ans_bank`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `ques_bank`
--
ALTER TABLE `ques_bank`
  MODIFY `ques_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
