-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2018 at 01:10 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mm`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobileno` bigint(225) NOT NULL,
  `date` date NOT NULL,
  `q1` varchar(500) NOT NULL,
  `q2` varchar(500) NOT NULL,
  `q3` varchar(500) NOT NULL,
  `q4` varchar(500) NOT NULL,
  `q5` varchar(500) NOT NULL,
  `q6` varchar(500) NOT NULL,
  `q7` varchar(500) NOT NULL,
  `q8` varchar(500) NOT NULL,
  `q9` varchar(500) NOT NULL,
  `q10` varchar(500) NOT NULL,
  `q11` varchar(500) NOT NULL,
  `q12` varchar(500) NOT NULL,
  `q13` varchar(500) NOT NULL,
  `q14` varchar(500) NOT NULL,
  `q15` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mobileno` (`mobileno`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `name`, `email`, `mobileno`, `date`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`) VALUES
(1, 'JAGANNATH  PANDIT', 'jagannath@gmail.com', 8847878187, '2018-06-06', 'The institute is not completely safe against hazards', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'needs to upgrade the safety measures', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute is not completely safe against hazards', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(2, 'JAGANNATH  PANDIT', 'jfjjnkn@hk', 9040522520, '2018-06-09', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'needs to upgrade the safety measures', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'JAGANNATH  PANDIT', 'emailjaga@gmail.com', 7327893450, '2018-06-21', 'I have no knowledge of any safety measures', 'needs to upgrade the safety measures', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute is not completely safe against hazards', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute is not completely safe against hazards', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute is not completely safe against hazards', 'The institute is not completely safe against hazards', 'needs to upgrade the safety measures', 'needs to upgrade the safety measures'),
(4, 'JAGANNATH  PANDIT', 'emailjaga34@gmail.com', 7327893451, '2018-06-21', 'I have no knowledge of any safety measures', 'needs to upgrade the safety measures', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute is not completely safe against hazards', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute is not completely safe against hazards', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute is not completely safe against hazards', 'The institute is not completely safe against hazards', 'needs to upgrade the safety measures', 'needs to upgrade the safety measures'),
(5, 'JAGANNATH  PANDIT', 'jagannathe@gmail.com', 9040522511, '2018-06-08', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'I have no knowledge of any safety measures'),
(6, 'jagannath ', '98jagannath@gmail.com', 8847878167, '2018-06-28', 'The institute is not completely safe against hazards', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'needs to upgrade the safety measures', 'needs to upgrade the safety measures', 'needs to upgrade the safety measures'),
(7, 'cc', 'jagannathhgfh@gmail.com', 732789345878, '2018-06-20', 'jagannath', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'needs to upgrade the safety measures'),
(8, 'pintu', 'agudgag@gmail.com', 8908570572, '2018-06-15', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', '', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(9, 'soumya', 'skjoh@gmail.com', 78258152, '2018-06-21', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `tag` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(225) NOT NULL,
  `body` text NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `tag`, `date`, `author`, `image`, `body`, `user_id`) VALUES
(17, 'dsglasn', 'mainpost', '2018-06-08', 'jagannath', 'atop.jpg', 'twytqeye', 3),
(18, 'carosel', 'carosel', '2018-06-13', 'kanhu', 'mainpost.jpg', 'jagannath pandit', 2),
(19, 'carosel', 'carosel', '2018-06-13', 'jgjhgjh', 'election.jpg', 'rtre', 1),
(25, 'Rewinding The Episodes: IMUNC, Roots and TechX', 'campus buzz', '2018-06-08', 'jaga', 'imun.jpg', 'With the amendments in the fest culture of NIT Rourkela, the students were asked to remain content with the reduction in the', 1),
(26, 'Atop NITR', 'photo jounalism', '2018-06-02', 'jaga', 'atop.jpg', '...', 1),
(24, 'The Election Conundrum', 'poll analysis', '2018-06-02', 'jaga', 'election.jpg', 'Read on to find out how the NITR Junta responded to the question : How responsibly do you vote for SAC Elections?', 1),
(10, 'electrical', 'roots', '2018-06-07', 'kanhu', 'roots.jpg', 'ssfsdgdfg', 2),
(11, 'Fortifying Technology: Electronics and Communication/ Electronics and Instrumentation', 'department-1', '2018-06-08', 'jaga', 'health.jpg', 'Read on to know about the unparalleled and ', 1),
(12, 'Building creative communities: Department of Planning and Architecture', 'department-2', '2018-06-07', 'jaga', 'cs.jpg', 'Team Monday Morning brings you a brief and comprehensive review of the Department of Architecture and Planning , ', 1),
(13, 'Welcome to a Biologist\'s Hub: Department of Life Sciences', 'department-3', '2018-06-07', 'jaga', 'jossa.jpg', 'Team Monday Morning brings you an overview of the Department of Life Sciences, to aide the prospective students make an informed choice for the session 2018-19.', 1),
(14, 'physics', 'cvxvxfb', '2018-06-07', 'jaga', '471d8f6ee0939f4a8d13dfc6002eb67b.jpg', 'gfdghfgz', 1),
(15, 'what is your name', 'mbvmmv', '2018-06-16', 'jaga', '4-5-million-lamborghini-veneno-970x647-c.jpg', 'mnkjgf', 1),
(16, 'Shining Through The Murk', 'picofweek', '2018-06-08', 'jaga', 'picofweek.jpg', 'this is the most beautiful picture of the nitr.come nitr get these type of picture!!', 1),
(27, 'Acknowledging Queries: Ask a Question 16.0', 'carosel', '2018-05-31', 'jaga', 'askaquestion.jpg', 'This week, Team MM brings to you the 16th edition of ask a question. Read on to find out the replies to your queries provided by the authority itself.', 1),
(23, 'Acknowledging Queries: Ask a Question 16.0', 'ask a question', '2018-05-31', 'jaga', 'askaquestion.jpg', 'This week, Team MM brings to you the 16th edition of ask a question. Read on to find out the replies to your queries provided by the authority itself.', 1),
(28, 'article-1', 'sdkjass', '2018-06-08', '', '', 'jaag', 0),
(29, 'electrical', '\';gk;', '2018-06-13', '', '', 'jaga', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `article_id` int(225) NOT NULL,
  `article_tag` varchar(255) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `user_id` int(225) NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `article_id`, `article_tag`, `article_title`, `user_id`, `answer`) VALUES
(1, 'hay', 4, 'mainpost', 'The Election Conundrum', 2, 'hna kaha'),
(2, 'kanhu', 4, 'mainpost', 'The Election Conundrum', 2, 'jaa'),
(3, 'come here', 4, 'mainpost', 'The Election Conundrum', 2, 'qwertyu'),
(4, 'come here', 4, 'mainpost', 'The Election Conundrum', 2, ''),
(5, 'come here', 4, 'mainpost', 'The Election Conundrum', 2, ''),
(6, 'come here', 4, 'mainpost', 'The Election Conundrum', 2, ''),
(9, 'hdhff', 4, 'mainpost', 'The Election Conundrum', 2, ''),
(10, 'nice pic', 17, 'mainpost', 'dsglasn', 1, ''),
(11, 'give your comment', 17, 'mainpost', 'dsglasn', 1, ''),
(12, 'nice pic', 5, 'ask a question', 'Redefining the Traces: ASK A QUESTION 17.0', 2, 'good job');

-- --------------------------------------------------------

--
-- Table structure for table `cz`
--

DROP TABLE IF EXISTS `cz`;
CREATE TABLE IF NOT EXISTS `cz` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `subject` varchar(1000) NOT NULL,
  `user_id` int(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cz`
--

INSERT INTO `cz` (`id`, `subject`, `user_id`) VALUES
(1, 'Do you have anything to share? Let your voice be heard. Express your opinions and be a citizen journalist.??', 1),
(2, 'https://www.youtube.com/embed/Awizw6pM63g', 1);

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

DROP TABLE IF EXISTS `poll`;
CREATE TABLE IF NOT EXISTS `poll` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `option` varchar(255) NOT NULL,
  `ip` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `option`, `ip`) VALUES
(1, 'option1', ''),
(2, 'option1', ''),
(3, 'option2', ''),
(4, 'option3', ''),
(5, 'option3', ''),
(6, 'option3', ''),
(7, 'option4', ''),
(8, 'option4', ''),
(9, 'option4', ''),
(10, 'option4', ''),
(11, 'option4', ''),
(12, 'option1', ''),
(13, 'option4', ''),
(14, 'option3', ''),
(15, 'option3', ''),
(16, 'option1', ''),
(17, 'option1', ''),
(18, 'option4', ''),
(19, 'option4', '::1'),
(20, 'option4', '::1'),
(21, 'option4', '::1'),
(22, 'option4', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobileno` varchar(225) NOT NULL,
  `question` text NOT NULL,
  `type` text NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `name`, `email`, `mobileno`, `question`, `type`, `answer`) VALUES
(1, 'JAGANNATH  PANDIT', 'jagannath@gmail.com', '9040522520', 'how are you', 'department', 'hna kaha'),
(2, 'JAGANNATH  PANDIT', 'jagannath@gmail.com', '9040522520', 'how much marrk?', 'examination', 'tu jaa'),
(3, 'JAGANNATH  PANDIT', 'jagannath@gmail.com', '9040522520', 'go there', 'safety', ''),
(4, 'JAGANNATH  PANDIT', 'jagannath@gmail.com', '7327893450', 'which is best', 'clubs', ''),
(5, 'pintu', 'jagannath@gmail.com', '9040522520', 'why it is so popular', 'department', '');

-- --------------------------------------------------------

--
-- Table structure for table `squiggles`
--

DROP TABLE IF EXISTS `squiggles`;
CREATE TABLE IF NOT EXISTS `squiggles` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `para1` varchar(1000) NOT NULL,
  `link1` varchar(225) NOT NULL,
  `para2` varchar(1000) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `para3` varchar(1000) NOT NULL,
  `link3` varchar(225) NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `squiggles`
--

INSERT INTO `squiggles` (`id`, `para1`, `link1`, `para2`, `link2`, `para3`, `link3`, `user_id`) VALUES
(1, 'where are you now?', 'come here!!!', 'where are you now?', 'come here', 'where are you now', 'come here', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(500) NOT NULL,
  `option2` varchar(500) NOT NULL,
  `option3` varchar(500) NOT NULL,
  `option4` varchar(500) NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'jagannath', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(2, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(3, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(4, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(5, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(6, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(7, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(8, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(9, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(10, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(11, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(12, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(13, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(14, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.'),
(15, 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'needs to upgrade the safety measures', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.', 'I have no knowledge of any safety measures', 'How safe is the institute to protect itself from various unforseen hazards(fire, construction etc)?', 'The institute has sufficient safety measures and equipments to protect in such scenarios and I am aware of them.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(225) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobileno` bigint(255) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `status` int(225) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mobileno` (`mobileno`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `image` (`image`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `mobileno`, `image`, `status`) VALUES
(1, 'jaga', 'jaga@123', '99jagannath@gmail.com', 8847878187, 'jaga.jpg', 1),
(2, 'kanhu', 'kanhu@123', 'kanhupandit@gmail.com', 7809738066, 'kanhu.jpg', 0),
(3, 'jagannath', 'jagannath@123', 'jagannath@gmail.com', 9040522520, '1983373.jpg', 1),
(4, '117EE0381', 'Jaga@117EE0381', 'jagannathp@gmail.com', 7327893450, '4-5-million-lamborghini-veneno-970x647-c.jpg', 0),
(5, 'jhjhg', 'jfndjf', 'emailjaga@gmail.com', 0, 'atop.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
