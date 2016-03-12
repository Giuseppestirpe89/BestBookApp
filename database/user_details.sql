-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2016 at 08:25 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(18, 'Pats test', 'etyhth', 53.354240, -6.283836, 'bar'),
(17, 'Dons test', 'fthdtbd', 53.360901, -6.271477, 'restaurant'),
(15, 'pats bar', 'sldcmmc', 53.347477, -6.271820, 'bar'),
(16, 'Shane test', 'fbrtbetb', 53.358543, -6.248302, 'bar'),
(13, 'Dons burgers', 'wewed', 53.350960, -6.258774, 'restaurant'),
(12, 'Peps place', 'Mayor square', 53.349392, -6.243056, 'bar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` char(25) DEFAULT NULL,
  `summery` varchar(150) NOT NULL,
  `hours` varchar(150) NOT NULL,
  `menu` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `summery`, `hours`, `menu`) VALUES
(3, 'testA', '098f6bcd4621d373cade4e832627b4f6', 'public', '', '', ''),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', ''),
(8, 'testB', '098f6bcd4621d373cade4e832627b4f6', 'business', '', '', ''),
(9, 'peps pizza', '5f4dcc3b5aa765d61d8327deb882cf99', 'business', 'ddd', 'aaaaaaaaa', 'ddd'),
(10, 'Dons Burgers', '5f4dcc3b5aa765d61d8327deb882cf99', 'business', 'Best Burgers in town!! try the beef', 'all day', 'Dons Burgers Menus Lorem ipsum dolor sit amet, eam invenire reformidans no, vim te soluta nostrud ancillae. Ut qui civibus consequat honestatis. Est dolor electram ad. Wisi iudicabit in pri, labitur accusamus ne pro, omnis nemore latine et vel. Liber regione perpetua sit cu, pri et tation impedit sadipscing. Ex sumo consul veritus eum, ea nec odio facer.\r\n\r\nOfficiis democritum ea est, usu ne dicat pericula scribentur. Eius perfecto an cum. Et constituto posidonium eum, at duis sententiae nam. Sale graeci deleniti ea per, omittam molestiae no qui, unum erat summo cu pro. Pro tation voluptua cu.\r\n\r\nErant officiis splendide ei his, pri et eirmod option copiosae, ignota singulis dissentiet duo ut. An nobis dolor pro, cu cum everti voluptatibus. At quo deserunt praesent, ex usu doming vidisse lucilius. Per an tation scripta.\r\n\r\nFacilis temporibus quo at. Dicit legendos has cu, homero percipitur te usu. Ius affert latine at, alia regione euripidis ex mel. Eu eos exerci placerat repudiare. His ne odio stet, dicit graece mea te. Id habeo error imperdiet vel, quo ex vidit sensibus.\r\n'),
(11, 'Shanes Sambos', '5f4dcc3b5aa765d61d8327deb882cf99', 'business', 'all local all fair trade, irish owned and ran', 'mon-friday 11am to 6pm', 'shanes sambos menu est, usu ne dicat pericula scribentur. Eius perfecto an cum. Et constituto posidonium eum, at duis sententiae nam. Sale graeci deleniti ea per, omittam molestiae no qui, unum erat summo cu pro. Pro tation voluptua cu.\n\nErant officiis splendide ei his, pri et eirmod option copiosae, ignota singulis dissentiet duo ut. An nobis dolor pro, cu cum everti voluptatibus. At quo deserunt praesent, ex usu doming vidisse lucilius. Per an tation scripta.\n\nFacilis temporibus quo at. Dicit legendos has cu, homero percipitur te usu. Ius affert latine at, alia regione euripidis ex mel. Eu eos exerci placerat repudiare. His ne odio stet, dicit graece mea te. Id habeo error imperdiet vel, quo ex vidit sensibus.\n\nDetracto interpretaris has eu. Usu id propriae atomorum. Vel menandri conceptam eu. Ius te facer sonet quaestio, no labore fabellas mea. Delenit pericula ea sed. Nam ferri viris alterum ea, et sea agam nibh fabellas, pri et nonumy alienum.'),
(19, 'testdon', 'don-whelan', NULL, '', '', ''),
(20, 'don-whelan2', 'don-whelan2', NULL, '', '', ''),
(21, 'don-whelan2', 'don-whelan2', NULL, '', '', ''),
(22, 'don-whelan', 'don-whelan', NULL, '', '', ''),
(23, 'don-whelan', 'don-whelan', NULL, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
