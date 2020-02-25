-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 12 Février 2020 à 18:02
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `forteroche`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapters`
--

CREATE TABLE IF NOT EXISTS `chapters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Contenu de la table `chapters`
--

INSERT INTO `chapters` (`id`, `title`, `content`, `created_date`) VALUES
(33, 'Le dernier caribou de la montagne sud.', 'rem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget purus vitae nisl dignissim eleifend. Vestibulum porttitor nulla pharetra nisi venenatis, non tempus leo condimentum. Cras sit amet neque tincidunt, mollis ante eget, porta odio. Aenean pharetra justo suscipit nisl semper vehicula. Aliquam euismod orci non dolor hendrerit, sed tincidunt mi tincidunt. Aliquam vulputate suscipit purus vitae pulvinar. Phasellus et nibh eu risus porttitor sodales. Integer accumsan ornare hendrerit. Maecenas sed sagittis ex. Maecenas maximus auctor massa, quis dignissim metus faucibus non. Suspendisse at dignissim turpis. Sed sed viverra metus, eu efficitur felis. Quisque id libero sed mi maximus pretium eu nec urna. Mauris in velit ac ex pharetra sagittis luctus ac elit.', '2020-02-11 10:00:00'),
(44, 'Règles officielles du cul de chouette', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\nLes plus téméraires d’entre vous (ou les plus fous ça se discute) sont venus jusqu’ici pour apprendre ou redécouvrir les règles du cul de chouette. Il est important de noter que les règles du CC ne sont pas faciles , pour ne pas dire compliqué ( pour ne pas dire chiantes , emmerdantes ,bordel de règle à la con, fait chier ce jeu de...). C’est donc tout à votre honneur de vous essayer à ce défi de taille, surtout si vous ne connaissez pas le CC . Nous proposons aux simples curieux de rebrousser chemin , et aux plus courageux et inconscients d’entre vous de vous lancer à corps perdu dans la lecture des dites ( piaf? hum hum...) règles.<br />Le CC se joue à 2 joueurs minimum ( sans limite de joueur meme si pour des raisons évidentes de gestions il est peu recommandé d’organiser des parties de plus de 64 joueurs). Pour débuter une partie il faut vous munir de 3 dés à 6 faces ( il serait éventuellement possible de jouer avec des dès à plus de face , mais ça serait ajouter du vice à la chianteur). Le but du jeu est d’atteindre 343 points en effectuant différentes combinaisons avec les dés. Inutile de préciser que chaque joueur à le droit à un lancer de 3 dés par tour.\r\n</body>\r\n</html>', '2020-02-11 09:38:43'),
(45, 'Le prince', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\nUn jour mon prince viendra\r\n</body>\r\n</html>', '2020-02-11 10:00:32'),
(46, 'Chapiteau', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Carambar elit. Sed mattis condimentum aliquet. Morbi lacinia interdum lacus, ac dignissim sem dapibus ut. Morbi tempor rutrum lobortis. Aenean elit ante, vulputate vitae est ullamcorper, tempus fermentum tortor. Nulla in tempus magna. Sed et commodo est, eget ornare mauris. Cras faucibus, erat et condimentum dignissim, velit velit volutpat odio, ut tincidunt nisi massa et ipsum. Pellentesque eget ante sit amet quam bibendum interdum ac eget libero. Nullam id sollicitudin purus. Nullam eget felis sit amet tellus faucibus condimentum. Phasellus molestie imperdiet augue.</p>\r\n<p>Aenean sed nisi at nisi ullamcorper tincidunt a non lorem. Cras id dolor ut diam tincidunt facilisis consequat nec turpis. Nulla eget elit neque. Sed euismod interdum mauris, ut hendrerit ex tincidunt non. Proin elit nisi, lobortis et sem quis, porta feugiat est. Donec commodo et orci non mollis. Nunc nisi diam, varius in erat et, pharetra ultrices arcu. Morbi pretium placerat neque sit amet tempus. Integer suscipit urna suscipit diam rhoncus, vitae malesuada ex laoreet. Pellentesque tincidunt enim sit amet lacus finibus ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris tempor elit non justo euismod, vitae condimentum nisi aliquam. Praesent id purus quis lectus rutrum semper. Morbi finibus ante eu nibh faucibus consectetur. Maecenas pellentesque dolor quis arcu ultrices, a tincidunt nisl gravida.</p>\r\n<p>Integer feugiat justo quis commodo malesuada. Quisque nec arcu consequat, malesuada arcu sed, mollis ex. Vestibulum est metus, imperdiet vitae rhoncus ac, cursus at ex. Nam scelerisque ligula nisl. Sed ut ex et tortor consectetur finibus. Sed nulla mauris, tempor tincidunt iaculis sed, ornare sit amet mauris. Suspendisse consectetur arcu diam, varius scelerisque arcu viverra a.</p>\r\n<p>Fusce at iaculis quam. Suspendisse commodo erat tincidunt nisi scelerisque porttitor. Suspendisse potenti. Duis cursus pellentesque risus, quis mattis justo tristique in. Proin nec pulvinar orci, ut tincidunt lacus. Aliquam erat volutpat. Pellentesque tortor ligula, imperdiet ut ipsum sed, euismod mollis velit. Nunc sed velit auctor, pulvinar leo at, mattis quam. Phasellus euismod tincidunt fringilla. Morbi ligula lorem, cursus at mauris ut, fermentum congue urna. Duis eu interdum sem. Etiam viverra leo quam, sed scelerisque nulla condimentum ac. Morbi dictum magna orci, vitae sollicitudin nisl porta nec. Praesent nec felis sit amet lectus gravida pellentesque. Donec at faucibus metus, nec blandit sapien. In non diam pellentesque, interdum ipsum sed, mollis dolor.</p>\r\n<p>Proin ac turpis tempor, fermentum sem sed, blandit lorem. Suspendisse tincidunt magna metus, sed vehicula tortor imperdiet quis. Mauris nec lorem luctus, hendrerit massa ac, ullamcorper nibh. Integer pellentesque eleifend blandit. Sed metus lorem, elementum aliquet velit ut, vestibulum accumsan enim. Integer sodales venenatis magna vitae tincidunt. Pellentesque molestie facilisis semper. Aliquam sit amet rhoncus arcu.</p>\r\n</body>\r\n</html>', '2020-02-12 17:38:31');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `comment_date` datetime NOT NULL,
  `signaled` tinyint(1) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `author`, `comment`, `comment_date`, `signaled`, `post_id`) VALUES
(3, 'Joel', 'C''est cool moi aussi', '2020-02-10 10:33:13', 0, 27),
(6, 'Joel', 'c''est cool', '2020-02-11 08:13:18', 0, 35),
(12, 'august', 'ok girl', '2020-02-11 11:10:25', 0, 45),
(22, 'Perceval', 'Faut pas jeter des cailloux aux pigeons.', '2020-02-12 07:49:24', 1, 33),
(24, 'arthur', 'Au bout d''un moment, il est vraiment druide, c''mec-là, ou ça fait quinze ans qu''il me prend pour un con ?', '2020-02-12 15:11:09', 0, 44);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `user`, `password`, `email`, `date_inscription`) VALUES
(34, 'breezango', '$2y$10$q4BlPyC0esSM8lJKgyEDDOMyXFXfng8qw0tArUe.YgR8mjgAVSv6W', 'forteroche@sfr.com', '2020-02-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
