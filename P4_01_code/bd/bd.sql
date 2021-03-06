-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 26 fév. 2020 à 14:35
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forteroche`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapters`
--

INSERT INTO `chapters` (`id`, `title`, `content`, `created_date`) VALUES
(54, 'Au pays des haricots', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eleifend, tortor in tincidunt commodo, eros est tincidunt risus, id dignissim nibh nisl hendrerit ex. Phasellus viverra sem in massa auctor, a luctus orci eleifend. Donec quis nibh arcu. Nulla molestie ullamcorper orci, ac finibus dui dapibus eu. Phasellus dictum risus eget ipsum aliquet, a venenatis orci pulvinar. Curabitur id aliquam lectus, quis placerat risus. Sed diam ante, porttitor vitae fringilla a, convallis id metus. Proin venenatis congue metus ut mattis. Suspendisse at ligula in mi sollicitudin tempor ac eget nulla. Nullam ultricies ante et dolor iaculis, at ornare orci lacinia. Cras vestibulum odio ac mauris interdum, sed consequat urna semper.</p>\r\n<p>Praesent at fermentum leo. Curabitur malesuada arcu non erat consectetur, sed dignissim enim tempus. Vivamus vel metus ante. In eleifend non velit at eleifend. Duis malesuada elit mauris, in ullamcorper lacus lacinia quis. Proin eu congue neque. Pellentesque ut lectus vel sapien tincidunt commodo sed sodales augue.</p>\r\n<p>Etiam tempor diam mi, non pharetra tortor accumsan ullamcorper. Donec dapibus risus vel tellus bibendum, vel laoreet nulla scelerisque. Vestibulum fringilla magna libero, eu ultricies ligula consequat non. Maecenas ligula odio, dictum a dolor eget, feugiat venenatis quam. Nam quis ornare ligula, et viverra lacus. Curabitur rhoncus, mauris nec dignissim molestie, ante lacus congue leo, non condimentum turpis mi eu metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque vel velit lacus. Duis consequat nisi dui, non tempor erat pulvinar interdum. Morbi euismod tellus eu orci pellentesque, in elementum odio porttitor.</p>\r\n<p>Fusce vitae malesuada enim, eget hendrerit neque. Vivamus id metus commodo, feugiat neque id, elementum elit. Pellentesque a volutpat metus. Nunc venenatis enim non elit gravida dignissim. Nulla congue nisl nibh, at dignissim est aliquam nec. Maecenas facilisis dignissim varius. Vestibulum sed egestas dolor, sit amet viverra tortor.</p>\r\n<p>Nullam et dapibus nisi. Praesent consequat porttitor magna ut placerat. Quisque blandit sem sit amet metus maximus, blandit scelerisque augue volutpat. Mauris nec facilisis libero. Nam ac urna id massa sollicitudin interdum. Quisque elit lorem, feugiat sit amet scelerisque sit amet, accumsan in urna. Nulla ut felis fringilla, finibus arcu eu, tincidunt nisi. Vestibulum ut aliquet purus. Curabitur eget tellus ac est volutpat lacinia non aliquam ex. Duis tempor ipsum ante, vitae convallis risus blandit et. Vestibulum vulputate tellus vel nisl porta, eu malesuada risus viverra. Mauris non congue nunc, ut fermentum risus. Integer ac orci non velit pulvinar porta et at turpis. Etiam sit amet laoreet nulla. Vivamus mi ipsum, scelerisque sed feugiat at, accumsan nec orci.</p>\r\n</body>\r\n</html>', '2020-02-25 07:25:06'),
(55, ' Par où t’es rentré j’tai pas vu sortir ?', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec augue a augue egestas dapibus. Proin efficitur augue venenatis convallis aliquam. Suspendisse potenti. Duis et gravida erat. Praesent vitae pellentesque neque. Nam euismod nulla vitae mattis ultricies. Etiam orci quam, egestas sed viverra et, imperdiet in quam. Nam mollis scelerisque felis vel pretium. Etiam commodo aliquam libero, imperdiet sodales dolor. Vestibulum vitae sem ut lectus tempor accumsan. Fusce volutpat convallis lectus, ut venenatis augue mollis eget. Nam ac pulvinar enim, dignissim placerat elit. Nulla congue felis vestibulum, tempor justo sodales, ullamcorper est. Praesent fermentum magna nec feugiat mollis. Integer pretium odio ultricies, iaculis neque ac, pulvinar augue.</p>\r\n<p>Cras non tincidunt magna, sit amet elementum justo. Integer congue orci eleifend scelerisque consectetur. Nunc eu sodales nibh, ut viverra nisi. Vivamus vel metus sollicitudin, aliquet elit eu, tempor sapien. Etiam elementum ipsum metus, ac posuere diam sodales vel. Maecenas dapibus scelerisque nulla, vitae placerat nunc interdum sed. Ut mollis nec nulla et finibus. Sed ac est ipsum. Nam nec euismod est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque vitae vestibulum ligula, sed semper tellus.</p>\r\n</body>\r\n</html>', '2020-02-25 07:26:02'),
(57, 'Lettre à la République', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\nLettre à la République<br />À tous ces racistes à la tolérance hypocrite<br />Qui ont bâti leur nation sur le sang<br />Maintenant s\'érigent en donneurs de leçons<br />Pilleurs de richesses, tueurs d\'africains<br />Colonisateurs, tortionnaires d\'algériens<br />Ce passé colonial c\'est le vôtre<br />C\'est vous qui avez choisi de lier votre histoire à la nôtre<br />Maintenant vous devez assumer<br />L\'odeur du sang vous poursuit même si vous vous parfumez<br />Nous les Arabes et les Noirs<br />On est pas là par hasard<br />Toute arrivée a son départ!<br />Vous avez souhaité l\'immigration<br />Grâce à elle vous vous êtes gavés, jusqu\'à l\'indigestion<br />Je crois que la France n\'a jamais fait la charité<br />Les immigrés c\'n\'est que la main d\'oeuvre bon marché<br />Gardez pour vous votre illusion républicaine<br />De la douce France bafouée par l\'immigration africaine<br />Demandez aux tirailleurs sénégalais et aux harkis<br />Qui a profité d\'qui?<br />La République n\'est innocente que dans vos songes<br />Et vous n\'avez les mains blanches que de vos mensonges<br />Nous les Arabes et les Noirs<br />On est pas là par hasard<br />Toute arrivée a son départ!<br />Mais pensez vous qu\'avec le temps<br />Les Négros muteraient, finiraient par devenir Blancs?<br />Mais la nature humaine a balayé vos projets<br />On ne s\'intègre pas dans le rejet<br />On ne s\'intègre pas dans les ghettos français, parqués<br />Entre immigrés, faut être sensés<br />Comment pointer du doigt le replie communautaire<br />Que vous avez initié depuis les bidonvilles de Nanterre<br />Pyromane et pompier, votre mémoire est sélective<br />On n\'est pas venu en paix, votre histoire est agressive<br />Ici, on est mieux que là-bas, on le sait<br />Parce que décoloniser pour vous c\'est déstabiliser<br />Et plus j\'observe l\'histoire ben moins j\'me sens redevable<br />Je sais c\'que c\'est d\'être Noir depuis l\'époque du cartable<br />Bien que je n\'sois pas ingrat, j\'n\'ai pas envie de vous dire merci<br />Parce qu\'au fond c\'que j\'ai, ici, je l\'ai conquis<br />J\'ai grandi à Orly dans les favelas de France<br />J\'ai fleuri dans les maquis j\'suis en guerre depuis mon enfance<br />Narcotrafic, braquage, violence, crimes!<br />Que font mes frères si c\'n\'est des sous comme dans Clearstream?<br />Qui peut leur faire la leçon? Vous?<br />Abuseurs de biens sociaux, détourneurs de fond<br />De vrais voyous en costard, bande d\'hypocrites!<br />Est-ce que les Français ont les dirigeants qu\'ils méritent?<br />Au cœur de débats, des débats sans cœur<br />Toujours les mêmes qu\'on pointe du doigt dans votre France des rancœurs<br />En pleine crise économique, il faut un coupable<br />Et c\'est en direction des musulmans que tous vos coups partent<br />J\'n\'ai pas peur de l\'écrire, la France est islamophobe<br />D\'ailleurs plus personne ne s\'en cache dans la France des xénophobes<br />Vous nous traitez comme des moins que rien sur vos chaînes publiques<br />Et vous attendez de nous qu\'on s\'écrie \"vive la République!\"<br />Mon respect s\'fait violer au pays dit des Droits de l\'Homme<br />Difficile de se sentir Français sans le syndrome de Stockholm<br />Parce que moi je suis Noir, musulman, banlieusard et fier de l\'être<br />Quand tu m\'vois tu mets un visage sur c\'que l\'autre France déteste<br />Ce sont les mêmes hypocrites qui nous parlent de diversité<br />Qui expriment le racisme sous couvert de laïcité<br />Rêvent d\'un français unique, avec une seule identité<br />S\'acharnent à discriminer, les mêmes minorités<br />Face aux mêmes électeurs, les mêmes peurs sont agitées<br />On oppose les communautés, pour cacher la précarité<br />Que personne ne s\'étonne si demain ça finit par péter<br />Comment aimer un pays, qui refuse de nous respecter<br />Loin des artistes transparents, j\'écris c\'texte comme un miroir<br />Que la France s\'y regarde si elle veut s\'y voir<br />Elle verra s\'envoler l\'illusion qu\'elle se fait d\'elle-même<br />J\'suis pas en manque d\'affection<br />Comprends que j\'n\'attends plus qu\'elle m\'aime!\r\n</body>\r\n</html>', '2020-02-25 07:29:43'),
(58, 'La singulière tristesse du gâteau au citron', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut bibendum ligula. Suspendisse ut sem in sapien volutpat ultricies. Nullam cursus eros id libero hendrerit vulputate. Pellentesque tincidunt faucibus iaculis. Pellentesque fermentum risus felis, gravida tristique enim molestie eu. Sed a scelerisque purus. Vivamus eu tincidunt mi, at porttitor metus. Proin euismod venenatis ipsum luctus blandit. Sed sit amet porttitor quam. Nunc libero purus, malesuada et finibus eget, eleifend dapibus purus. Donec eget leo a enim convallis dignissim quis sit amet est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam imperdiet rutrum justo, sed blandit velit efficitur vitae. Sed finibus eros ut nisi dapibus, eu dictum metus aliquet. Etiam ullamcorper ligula in hendrerit aliquet.</p>\r\n<p>Nulla libero arcu, suscipit at commodo sit amet, fermentum eget turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed at tortor et nisi ultrices tristique. Pellentesque porta luctus rutrum. Nulla facilisi. Nam posuere molestie felis non tincidunt. Vestibulum maximus odio consectetur arcu viverra tempor. Sed tincidunt congue sapien ac dictum. Integer bibendum arcu sit amet diam tincidunt aliquam.</p>\r\n<p>Mauris efficitur lacinia justo, et consectetur metus. Sed sagittis pellentesque quam. Nullam tempor massa vitae commodo auctor. Curabitur lectus mi, accumsan at consectetur dictum, lacinia vel nibh. Donec nec ante eleifend, pharetra nisl ut, dapibus metus. Sed sem nibh, maximus rutrum sollicitudin eu, porttitor vitae erat. In hac habitasse platea dictumst. Duis ultrices faucibus odio vel euismod. Cras sed magna nisl. Vivamus ac dolor pharetra, tempus tellus eu, aliquet ipsum. Suspendisse potenti.</p>\r\n<p>Nulla ante justo, maximus vitae scelerisque sed, lacinia a elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris augue orci, interdum id mattis vitae, lobortis et orci. Nulla ligula felis, venenatis vitae felis id, ultrices finibus ex. Sed nunc purus, finibus at consequat ac, efficitur eget ipsum. Nulla feugiat diam nec vestibulum malesuada. Mauris facilisis, arcu vel pharetra facilisis, nibh felis sodales augue, a commodo purus ante sit amet ipsum. Phasellus dignissim porttitor metus. Donec molestie mi urna, nec interdum lorem aliquet eget. Proin commodo felis sed erat dapibus, vel varius felis vulputate. Donec bibendum ex ut leo bibendum varius. Vestibulum facilisis efficitur scelerisque.</p>\r\n<p>Nulla vitae augue volutpat, aliquet nibh eget, euismod massa. Nam posuere, augue ac convallis euismod, metus odio mollis augue, eu dignissim nisl ante eu elit. Integer eu rutrum metus. Donec fringilla quam malesuada ligula mattis eleifend vel accumsan ipsum. Suspendisse blandit augue efficitur ipsum sollicitudin blandit. Curabitur aliquam velit non mi scelerisque pellentesque. Nunc dignissim, diam eget tempus ornare, arcu ante venenatis magna, tincidunt elementum quam justo eu ex. Nulla facilisi. Nunc finibus, ex eu porttitor porta, turpis ante suscipit lacus, non varius ipsum diam quis odio. Suspendisse egestas scelerisque velit et placerat. Integer sed eleifend nunc. Morbi quis convallis justo. Aliquam euismod nisl sapien, a maximus urna varius sed.</p>\r\n<p>Vestibulum in maximus purus. Praesent euismod ante id lectus ultricies, ut posuere diam posuere. Curabitur velit odio, consectetur non iaculis sed, dignissim eu magna. Nam vel ultrices lorem, ultricies ultricies nulla. Sed sed tincidunt massa, eu feugiat diam. Curabitur lacinia, turpis vitae posuere posuere, est nisi varius massa, non aliquet mi quam quis urna. Mauris lacinia diam arcu, non bibendum lacus ornare sed. Integer maximus dui dolor, id vulputate massa fringilla et. Integer ultricies est sit amet nisi sollicitudin, quis malesuada nunc placerat. Sed vel sollicitudin augue. Nulla cursus odio at blandit ultricies. Quisque felis est, pulvinar vitae justo et, pellentesque volutpat eros. Cras suscipit, ligula at semper accumsan, orci augue condimentum massa, gravida tincidunt turpis libero hendrerit nisl.</p>\r\n<p>Aenean id lacinia dolor. Aliquam erat volutpat. Phasellus euismod eu orci sed iaculis. Mauris porta turpis nibh, vel luctus sapien viverra sed. Nulla quis euismod orci, et iaculis mauris. Proin malesuada id massa ut sagittis. Donec vitae justo a leo tincidunt interdum. Nunc tincidunt convallis arcu volutpat sagittis. Nam ultricies, turpis eget fermentum egestas, justo felis ornare lectus, a hendrerit neque purus sit amet lacus. Nam massa mauris, varius vel velit a, blandit commodo tellus.</p>\r\n<p>Donec commodo fringilla ipsum, sit amet lobortis ligula ornare ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus mollis condimentum nunc, a consectetur nulla consectetur a. Nullam id felis pulvinar, scelerisque ex sed, cursus augue. Maecenas at ex nunc. Curabitur non bibendum leo. Duis ut erat ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vehicula libero et leo iaculis, vitae sodales mi gravida. Suspendisse interdum ligula sed orci semper, quis scelerisque libero venenatis. Quisque euismod semper quam sit amet viverra. Nulla quis tellus id magna malesuada tincidunt id nec augue. Vestibulum gravida libero eu nulla scelerisque, id euismod lorem consequat. Duis commodo risus eget imperdiet sagittis. Morbi nec justo elementum quam condimentum suscipit nec aliquam nisi.</p>\r\n<p>Vivamus sagittis lobortis est. Aenean gravida dolor ligula, vel finibus dolor rhoncus non. Sed vel maximus ex. Phasellus eu porttitor diam. Vivamus pellentesque elit sed consequat elementum. Ut mattis dolor ut lacus vulputate, in dictum libero placerat. Quisque fringilla blandit leo non facilisis. Maecenas dignissim mi magna, mattis vestibulum urna tincidunt in.</p>\r\n<p>Quisque accumsan sem at nisi elementum, vel auctor massa maximus. Sed sed porttitor ipsum. Donec diam nunc, interdum sed lectus vitae, dictum accumsan eros. Phasellus tempor justo non elit semper, ut consequat metus vehicula. Cras ex metus, porttitor volutpat sodales ut, sodales id ante. Praesent tortor dui, rutrum non libero sit amet, convallis porta est. Pellentesque tortor libero, facilisis at fermentum at, hendrerit nec elit. Nullam ut euismod eros, ut malesuada elit. Donec pretium diam ac velit cursus, in viverra lectus porttitor. Praesent eu hendrerit massa. Fusce luctus massa augue, sed congue ante porta in. Mauris nec convallis neque. Proin dapibus nisi ullamcorper, mattis risus sed, convallis arcu. Cras quis erat ut quam tempor tristique ac ut turpis. Pellentesque interdum arcu fermentum pharetra condimentum. Nam auctor a metus vitae suscipit.</p>\r\n</body>\r\n</html>', '2020-02-25 07:52:14'),
(59, 'Pêche à la carpe ', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\nJ\'écrire ce texte pour vous partager ma passion pour la pêche à la carpe.<br />Je ne pêche pas le gardon, le brochet.\r\n</body>\r\n</html>', '2020-02-25 11:24:00'),
(61, 'vélo de course', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<strong>Je fait juste se texte en disent que le vélo c est trop bien vener au club craon renazé entennte cicliste craon renazé</strong>\r\n</body>\r\n</html>', '2020-02-25 18:36:12');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `comment_date` datetime NOT NULL,
  `signaled` tinyint(1) DEFAULT 0,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `author`, `comment`, `comment_date`, `signaled`, `post_id`) VALUES
(23, 'lena', 'rien', '0000-00-00 00:00:00', 0, 46),
(24, 'arthur', 'Au bout d\'un moment, il est vraiment druide, c\'mec-là, ou ça fait quinze ans qu\'il me prend pour un con ?', '2020-02-12 15:11:09', 0, 44),
(28, 'Lénaïk', 'On dirait un texte de Kery James?????????', '2020-02-25 07:43:43', 0, 57),
(29, 'Mick', 'C\'est intéressant!', '2020-02-25 08:15:24', 0, 58),
(30, 'Axel', 'Merci pour cette aide ', '2020-02-25 11:19:48', 0, 58),
(31, 'Axel', 'C\'est bien', '2020-02-25 11:20:58', 0, 57),
(33, 'Jean-Bertrand', 'c\'est c\'la..oui', '2020-02-25 17:40:42', 0, 58),
(35, 'Breezango', 'Je c est tres bien ', '2020-02-25 18:38:52', 0, 61),
(36, 'lenaik', 'C est cool', '2020-02-26 09:12:38', 0, 61),
(37, 'geraldine', 'tu as fait trop de fautes\r\n', '2020-02-26 09:28:08', 0, 61),
(38, 'jean ', 'c\'est bien\r\n', '2020-02-26 10:07:58', 0, 61);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `user`, `password`, `email`) VALUES
(34, 'breezango', '$2y$10$q4BlPyC0esSM8lJKgyEDDOMyXFXfng8qw0tArUe.YgR8mjgAVSv6W', 'forteroche@sfr.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
