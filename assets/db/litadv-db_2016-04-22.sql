-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 04:56 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `litadv`
--

-- --------------------------------------------------------

--
-- Table structure for table `attorneys`
--

CREATE TABLE IF NOT EXISTS `attorneys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `position` varchar(500) DEFAULT NULL,
  `note` text,
  `social1` text,
  `social2` text,
  `social3` text,
  `proimage` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `attorneys`
--

INSERT INTO `attorneys` (`id`, `name`, `phone`, `email`, `position`, `note`, `social1`, `social2`, `social3`, `proimage`) VALUES
(7, 'Amulya Chandra Debnath', '01715266639', 'admin@fbdc.edu.bd', 'Asst. Professor', 'Its a test message for testing purpose.', '', '', '', 'user-placeholder-91d3ebd91068769eadc2080eeb42ab78.png'),
(15, 'Amulya Chandra Debnath', '01715266639', 'admin@fbdc.edu.bd', 'Asst. Professor', 'Its a nothing message.', '', '', '', 'user-placeholder-91d3ebd91068769eadc2080eeb42ab78.png');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fday` text,
  `badi` text,
  `side` text,
  `lday` text,
  `type` text,
  `thana` text,
  `event` text,
  `court` text,
  `details` text,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `fday`, `badi`, `side`, `lday`, `type`, `thana`, `event`, `court`, `details`, `status`) VALUES
(1, '2016-03-16', 'Doni Vai', 'Asami', '2016-03-26', 'Warrent', 'Faridgonj', 'Murder', 'chandpur', 'It is a demo details for testing purpose.', 'active'),
(2, '2016-03-16', 'Doni Vai', 'Asami', '2016-03-26', 'Warrent', 'Faridgonj', 'Murder', 'chandpur', 'It is a demo details for testing purpose.', 'active'),
(3, '2016-03-16', 'Doni Vai', 'Asami', '2016-03-26', 'Warrent', 'Faridgonj', 'Murder', 'chandpur', 'It is a demo details for testing purpose.', 'active'),
(5, '2016-03-16', 'Doni Vai', 'Asami', '2016-03-26', 'Warrent', 'Faridgonj', 'Murder', 'chandpur', 'It is a demo details for testing purpose.', 'active'),
(6, '2016-03-16', 'Doni Vai', 'Asami', '2016-03-26', 'Warrent', 'Faridgonj', 'Murder', 'chandpur', 'It is a demo details for testing purpose.', 'active'),
(8, '2016-03-16', 'Doni Vai', 'Asami', '2016-03-26', 'Warrent', 'Faridgonj', 'Murder', 'chandpur', 'It is a demo details for testing purpose.', 'inactive'),
(9, '2016-03-16', 'Doni Vai', 'Asami', '2016-03-26', 'Warrent', 'Faridgonj', 'Murder', 'chandpur', 'It is a demo details for testing purpose.', 'inactive'),
(10, '2016-03-16', 'Doni Vai', 'Asami', '2016-03-26', 'Warrent', 'Faridgonj', 'Murder', 'chandpur', 'It is a demo details for testing purpose.', 'active'),
(11, '2016-03-16', 'Doni Vai', 'Asami', '2016-03-26', 'Warrent', 'Faridgonj', 'Murder', 'chandpur', 'It is a demo details for testing purpose.', 'active'),
(12, '2016-03-26', 'Doni Vai', 'Asami', '2016-03-30', 'Warrent', 'Faridgonj', 'Murder', 'chandpur', 'It is a demo details for testing purpose.', 'active'),
(13, 'à§§à§¨/à§§à§¨/à§§à§¨', 'à¦®à¦¾à¦¹à¦¬à§à¦¬ à¦­à¦¾à¦‡', 'à¦†à¦¸à¦¾à¦®à§€', 'à§§à§«/à§§à§¨/à§§à§¨', 'à¦à¦°à§‡à¦¸à§à¦Ÿ à¦“à§Ÿà¦¾à¦°à§‡à¦¨à§à¦Ÿ', 'à¦«à¦°à¦¿à¦¦à¦—à¦žà§à¦œ', 'à§§à§¨à§§à§¨', 'à¦œà¦°à§à¦œ à¦•à§‹à¦°à§à¦Ÿ', 'à¦†à¦®à¦¿ à¦•à¦¿à¦›à§ à¦œà¦¾à¦¨à¦¿ à¦¨à¦¾ à¦†à¦®à¦¾à¦•à§‡ à¦•à§‡à¦¨ à¦à¦‡ à¦•à§‡à¦¸ à¦ à¦†à¦¸à¦¾à¦®à§€ à¦à¦° à¦ªà¦•à§à¦· à¦¨à¦¿à¦¤à§‡ à¦¬à¦²à¦¾ à¦¹à§Ÿà§‡à¦›à§‡à¥¤', 'inactive'),
(14, 'à§§à§§/à§§à§§/à§§à§¨', 'à¦®à¦¾à¦¹à¦«à§à¦œ à¦­à¦¾à¦‡', 'à¦†à¦¸à¦¾à¦®à§€', 'à§¨à§¦/à§§à§§/à§§à§¨', 'à¦à¦°à§‡à¦¸à§à¦Ÿ à¦“à§Ÿà¦¾à¦°à§‡à¦¨à§à¦Ÿ', 'à¦šà¦¾à¦à¦¦à¦ªà§à¦°', 'à§©à§¨à§¨', 'à¦œà¦°à§à¦œ à¦•à§‹à¦°à§à¦Ÿ', 'à¦®à§à¦² à¦†à¦¸à¦¾à¦®à§€à¥¤ ', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE IF NOT EXISTS `edu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `year` text,
  `ins` text,
  `gread` varchar(10) DEFAULT NULL,
  `point` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `edu`
--

INSERT INTO `edu` (`id`, `name`, `year`, `ins`, `gread`, `point`) VALUES
(1, 'BSc in CSE', '2013-2016', 'Northern University Bangladesh', 'CGPA', '3.75'),
(2, 'HSC', '2012', 'Faridgonj Bangabandhu Degree College', 'GPA', '4.30'),
(3, 'SSC', '2010', 'Faridgonj A. R. Pilot High School', 'GPA', '4.94'),
(4, 'JSC', '2008', 'Faridgonj A. R. Pilot High School', 'GPA', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `literature`
--

CREATE TABLE IF NOT EXISTS `literature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `author` text,
  `date` text,
  `image` text,
  `post` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `literature`
--

INSERT INTO `literature` (`id`, `name`, `author`, `date`, `image`, `post`) VALUES
(1, 'à¦†à¦®à¦¾à¦¦à§‡à¦° à¦—à§à¦°à¦¾à¦®', 'à¦°à¦¾à¦¹à§à¦² à¦†à¦¶à§', 'à§¨à§®/à§¦à§©/à§ªà§¦à§ªà§¦', NULL, 'à¦ à¦¦à§‡à¦–à¦¾ à¦¯à¦¾à§Ÿ à¦¤à¦¾à¦² à¦—à¦¾à¦›, à¦ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦—à¦¾à¦, <br>\nà¦“à¦‡à¦–à¦¾à¦¨à§‡à¦¤à§‡ à¦¬à¦¾à¦¸ à¦•à¦°à§‡ à¦•à¦¾à¦¨à¦¾ à¦¬à¦—à¦¿à¦° à¦›à¦¾à¥¤'),
(2, 'à¦†à¦® à¦ªà¦¾à¦¤à¦¾', 'à¦°à¦¾à¦¹à§à¦²', 'à§¨à§­/à§¦à§©/à§¨à§¦à§§à§¬', 'Hydrangeas.jpg', 'à¦†à¦® à¦ªà¦¾à¦¤à¦¾ à¦œà§‹à¦°à¦¾ à¦œà§‹à¦°à¦¾ à¦®à¦¾à¦°à¦¬à§‹ à¦šà¦¾à¦¬à§à¦• à¦šà¦°à¦¬à§‹ à¦˜à§‹à§œà¦¾ <br>\r\nà¦“à¦°à§‡ à¦¬à§à¦¬à§ à¦«à¦¿à¦°à§‡ à¦¦à¦¾à¦°à¦¾, à¦†à¦¸à¦›à§‡ à¦†à¦®à¦¾à¦° à¦ªà¦¾à¦—à¦²à¦¾ à¦˜à§‹à§œà¦¾, <br>\r\nà¦ªà¦¾à¦—à¦²à¦¾ à¦˜à§‹à§œà¦¾ à¦–à§‡à¦ªà§‡à¦›à§‡, à¦šà¦¾à¦¬à§à¦• à¦›à§à¦°à§‡ à¦®à§‡à¦°à§‡à¦›à§‡à¥¤');

-- --------------------------------------------------------

--
-- Table structure for table `lnews`
--

CREATE TABLE IF NOT EXISTS `lnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `posted` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `news` text,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lnews`
--

INSERT INTO `lnews` (`id`, `name`, `posted`, `date`, `news`, `image`) VALUES
(1, 'Every One Can Use This.', 'Admin', '2016-03-19', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.lley of type and scrambled it to make a type specimen book.', 'BrainLockerLtd.jpg'),
(4, 'à¦‰à¦šà§à¦š à¦®à¦¾à¦§à§à¦¯à¦®à¦¿à¦• à¦ªà¦°à§€à¦•à§à¦·à¦¾ à§¨à§¦à§§à§«', 'à¦à¦¡à¦®à¦¿à¦¨', '2016-03-27', 'à¦‰à¦šà§à¦š à¦®à¦¾à¦§à§à¦¯à¦®à¦¿à¦• à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦­à¦¾à¦² à¦­à¦¾à¦¬à§‡ à¦¸à¦®à§à¦ªà¦¨à§à¦¨ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ <br>à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à§‡ à¦†à¦‡à¦¨ à¦à¦° à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯ à¦¨à¦¿à¦¤à§‡ à¦¹à¦¬à§‡à¥¤', 'Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` text,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `date`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, '0000-00-00 00:00:00', 'RaHuL AsHu', 'ashutoshdebnath17@gmail.com', '01685282060', 'FTP Problem', 'sdfgfgdgfdbdb dghd hdfgh'),
(2, '0000-00-00 00:00:00', 'ashu', 'ashutosh_dn@yahoo.com', '01550501212', 'test ', 'Its a test message...'),
(3, '0000-00-00 00:00:00', 'asdas', 'ashutoshdebnath17@gmail.com', '+8801685282060', '', 'asdasdsadasd'),
(4, '0000-00-00 00:00:00', 'admin@fbdc.edu.bd', 'admin@fbdc.edu.bd', '01715266639', 'Thank You Message.', 'itsd a asdfasfh dfhsduhf sgds gs'),
(5, '2016-03-18 20:48:58', 'RaHuL AsHu', 'nono@gmail.com', '15151515424', 'no no ', 'aofj dofjsd mfogm gomfgomdf '),
(6, '2016-03-25 14:03:27', 'karim ', 'dsrd@drd.uh', '899', 'gr ', 'hii rfrfxr ttct t t tb ');

-- --------------------------------------------------------

--
-- Table structure for table `parea`
--

CREATE TABLE IF NOT EXISTS `parea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(100) DEFAULT NULL,
  `name` text,
  `details` text,
  `location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `parea`
--

INSERT INTO `parea` (`id`, `icon`, `name`, `details`, `location`) VALUES
(1, 'user', 'à¦ªà¦¾à¦°à¦¿à¦¬à¦¾à¦°à¦¿à¦• à¦†à¦‡à¦¨', 'à¦¸à¦²à¦¿à¦® à¦¬à¦¿à¦¬à¦¾à¦¹ à¦“ à¦¤à¦¾à¦²à¦¾à¦• à¦°à§‡à¦œà¦¿à¦·à§à¦Ÿà§à¦°à§€à¦•à¦°à¦£ à¦¸à¦®à§à¦ªà¦°à§à¦•à¦¿à¦¤ à¦†à¦‡à¦¨ à¦à¦•à§€à¦•à¦°à¦£ à¦“ à¦¸à¦‚à¦¶à§‹à¦§à¦¨ à¦•à¦°à¦¿à¦¬à¦¾à¦° à¦œà¦¨à§à¦¯ à¦†à¦‡à¦¨ <br>\nà¦¯à§‡à¦¹à§‡à¦¤à§ à¦®à§à¦¸à¦²à¦¿à¦® à¦¬à¦¿à¦¬à¦¾à¦¹ à¦“ à¦¤à¦¾à¦²à¦¾à¦• à¦°à§‡à¦œà¦¿à¦·à§à¦Ÿà§à¦°à§€à¦•à¦°à¦£ à¦¸à¦®à§à¦ªà¦°à§à¦•à¦¿à¦¤ à¦†à¦‡à¦¨ à¦à¦•à§€à¦•à¦°à¦£ à¦“ à¦¸à¦‚à¦¶à§‹à¦§à¦¨ à¦•à¦°à¦¾ à¦¸à¦®à§€à¦šà§€à¦¨; à¦¸à§‡à¦¹à§‡à¦¤à§ à¦‰à¦¹à¦¾ à¦à¦¤à¦¦à§à¦¬à¦¾à¦°à¦¾ à¦¨à¦¿à¦®à§à¦¨à¦°à§‚à¦ª à¦¬à¦¿à¦§à¦¿à¦¬à¦¦à§à¦§ à¦•à¦°à¦¾ à¦¹à¦‡à¦²à¦ƒ<br>\nà§§à¥¤ à¦¸à¦‚à¦•à§à¦·à¦¿à¦ªà§à¦¤ à¦¶à¦¿à¦°à§‡à¦¾à¦£à¦¾à¦® à¦“ à¦ªà§à¦°à§Ÿà§‹à¦— :<br>\n(à§§) à¦à¦‡ à¦†à¦‡à¦¨ à¦®à§à¦¸à¦²à¦¿à¦® à¦¬à¦¿à¦¬à¦¾à¦¹ à¦“ à¦¤à¦¾à¦²à¦¾à¦• (à¦°à§‡à¦œà¦¿à¦·à§à¦Ÿà§à¦°à§€à¦•à¦°à¦£) à¦†à¦‡à¦¨, à§§à¦Œà§­à§ª à¦¬à¦²à¦¿à§Ÿà¦¾ à¦…à¦­à¦¿à¦¹à¦¿à¦¤ à¦•à¦°à¦¾ à¦¯à¦¾à¦‡à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¥¤<br>\n(à§¨) à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡à¦° à¦¸à¦•à¦² à¦®à§à¦¸à¦²à¦¿à¦® à¦¨à¦¾à¦—à¦°à¦¿à¦•à¦¦à§‡à¦° à¦‰à¦ªà¦° à¦¯à§‡à¦–à¦¾à¦¨à§‡à¦‡ à¦¤à¦¾à¦¹à¦¾à¦°à¦¾ à¦¥à¦¾à¦•à§à¦• à¦¨à¦¾ à¦•à§‡à¦¨, à¦‡à¦¹à¦¾ à¦ªà§à¦°à¦¯à§‹à¦œà§à¦¯ à¦¹à¦‡à¦¬à§‡à¥¤<br>', 'index'),
(2, 'home', 'à¦­à§‚à¦®à¦¿ à¦“ à¦¸à¦®à§à¦ªà¦¦ à¦†à¦‡à¦¨', NULL, 'index'),
(3, 'female', 'à¦¨à¦¾à¦°à¦¿ à¦“ à¦¶à¦¿à¦¶à§ à¦¨à¦¿à¦°à§à¦¯à¦¾à¦¤à¦¨ à¦¦à¦®à¦¨ à¦†à¦‡à¦¨', NULL, 'index'),
(4, 'legal', 'à¦«à§Œà¦œà¦¦à¦¾à¦°à¦¿ à¦†à¦‡à¦¨', NULL, 'index'),
(5, 'briefcase', 'à¦¬à§à¦¯à¦¬à¦¸à¦¾ à¦†à¦‡à¦¨', NULL, 'default'),
(6, 'flask', 'à¦…à§à¦¯à¦¾à¦²à¦•à§‹à¦¹à¦² à¦†à¦‡à¦¨', NULL, 'index'),
(7, 'cog', 'à¦¶à¦¿à¦²à§à¦ª à¦†à¦‡à¦¨', NULL, 'index'),
(8, 'money', 'à¦«à¦¾à¦‡à¦¨à§à¦¯à¦¾à¦¨à§à¦¸ à¦†à¦‡à¦¨', NULL, 'default'),
(9, 'anchor', 'à¦¨à¦¿à¦°à§à¦®à¦¾à¦£ à¦†à¦‡à¦¨', NULL, 'default'),
(10, 'tag', 'à¦¦à§‡à¦“à§Ÿà¦¾à¦¨à§€ à¦†à¦‡à¦¨', 'à§§) à¦…à¦¸à§à¦¥à¦¾à¦¬à¦° à¦¸à¦®à§à¦ªà¦¤à§à¦¤à¦¿ à¦¹à§à¦•à§à¦®à¦¦à¦–à¦² à¦†à¦‡à¦¨, à§§à§¯à§®à§®<br>\nà§¨) à¦­à§‚à¦®à¦¿ à¦¸à¦‚à¦¸à§à¦•à¦¾à¦° à¦¬à§‹à¦°à§à¦¡ à¦†à¦‡à¦¨, à§§à§¯à§®à§¯<br>\nà§©) à¦­à§‚à¦®à¦¿ à¦†à¦ªà§€à¦² à¦¬à§‹à¦°à§à¦¡ à¦†à¦‡à¦¨, à§§à§¯à§®à§¯<br>\nà§ª) à¦¬à¦¾à§œà§€ à¦­à¦¾à§œà¦¾ à¦¨à¦¿à§Ÿà¦¨à§à¦¤à§à¦°à¦£ à¦†à¦‡à¦¨, à§§à§¯à§¯à§§<br>', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `phone` text,
  `email` text,
  `address` text,
  `facebook` text,
  `proimage` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `phone`, `email`, `address`, `facebook`, `proimage`) VALUES
(1, NULL, '01685282060', ' support@brainlockerltd.com', 'Road #17, Nikunja 2, Dhaka-1229, Bangladesh', 'LockersITSolution', 'SKULL1_PXF-500x500.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` text,
  `addressr` text,
  `address` text,
  `phone` text,
  `email` text,
  `iemail` text,
  `fax` text,
  `skype` text,
  `fb` text,
  `tw` text,
  `gplus` text,
  `link` text,
  `about` text,
  `exp` text,
  `success` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `addressr`, `address`, `phone`, `email`, `iemail`, `fax`, `skype`, `fb`, `tw`, `gplus`, `link`, `about`, `exp`, `success`) VALUES
(1, 'logo.png', 'Raod #17', 'Nikunja 2, Dhaka - 1229', '01685282060', 'admin@brainlockerltd.com', 'info@brainlockerltd.com', '', 'ashutoshdebnath', 'LockersITSolution', 'LockersIT', '+BrainLockerLtd', '#', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.', '50 Years Of Experienced', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `si1` text,
  `si2` text,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `si1`, `si2`, `text`) VALUES
(1, 'bg-3.jpg', 'man4.png', 'Lockers IT Solution is a creative IT Company, you can use it for<br>business, corporate, portfolio, shop events, personal and more...	');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `pin` int(4) NOT NULL,
  PRIMARY KEY (`id`,`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `usertype`, `name`, `email`, `password`, `pin`) VALUES
(1, 'lockersitsolution', 'admin', 'LockersITSolution', 'it@brainlockerltd.com', 'Brain~123', 0),
(2, 'admin', 'admin', 'Mahbub Alam', 'demo@demo.com', '1234', 1111),
(5, 'lockers', 'author', 'Lockers Test', 'test@brainlockerltd.com', '1111', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
