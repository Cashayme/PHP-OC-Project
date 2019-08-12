-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 12 août 2019 à 08:13
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

DROP TABLE IF EXISTS `billets`;
CREATE TABLE IF NOT EXISTS `billets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `title`, `content`, `picture`, `description`) VALUES
(1, 'Chapitre I - La mer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque laoreet dapibus sem vitae malesuada. Donec pretium aliquet vehicula. Aliquam posuere nibh vitae fermentum lobortis. Nam vitae lorem at erat tempor laoreet. Curabitur interdum dictum egestas. Etiam maximus orci a libero auctor, sed sagittis risus ornare. Mauris sed risus diam. Nulla eget tincidunt nunc. Sed id interdum elit, quis tempor dui. Integer quis aliquet orci, vitae pretium sem. Quisque in laoreet enim. Aliquam bibendum dolor quis nisi faucibus pharetra. Aenean mollis erat ullamcorper, tincidunt felis non, pretium risus. Aenean congue tincidunt ultrices. Donec sodales nisl vestibulum, condimentum ligula sodales, efficitur arcu.\r\n\r\nMorbi id ultricies ligula, eget scelerisque nibh. Pellentesque commodo nibh quis enim egestas rutrum. Nam in quam ligula. Integer et nisi ut lacus cursus mattis ut et purus. Praesent molestie enim sed neque auctor, et rhoncus lectus pulvinar. Aliquam ut maximus felis, quis egestas quam. Nullam scelerisque eu neque id tempus. Sed eleifend est vitae enim rutrum varius. Morbi blandit mauris consequat sagittis faucibus. Etiam tortor metus, feugiat eu pharetra non, tincidunt vel augue. Nullam id laoreet libero, eu suscipit ex. Aenean sit amet malesuada augue, nec vulputate orci.\r\n\r\nFusce ut ante a sem sollicitudin tincidunt. Pellentesque in elementum nisl. Nulla id viverra dolor, sed tincidunt eros. Morbi enim velit, mollis et sem ac, pulvinar suscipit dui. Suspendisse in lectus viverra, sollicitudin lacus a, rhoncus nulla. Quisque massa leo, porttitor vitae ipsum et, aliquet euismod mauris. Ut a dapibus dolor.\r\n\r\nDonec rutrum dui vel rhoncus fringilla. In nec rutrum mauris. Maecenas mollis ullamcorper feugiat. Cras pretium condimentum sem. Donec gravida odio sit amet est auctor ornare. Pellentesque tincidunt urna in arcu malesuada, in maximus nisl feugiat. Duis porttitor felis ut volutpat iaculis. Morbi vitae posuere quam, sit amet convallis sem. Integer maximus eros eu erat iaculis, nec maximus est pretium. Nullam ante dui, mattis feugiat nisi sed, condimentum gravida arcu. Suspendisse tellus libero, fringilla et faucibus eget, dignissim eget turpis. Suspendisse eget enim egestas, fermentum metus vel, auctor massa. Mauris sit amet gravida mi. Nam porttitor a mauris eget dictum. Nunc rhoncus varius nulla, et imperdiet orci ultrices at.\r\n\r\nPraesent at tortor eu urna faucibus dictum. Sed eget neque quis metus ornare luctus eget ornare erat. Mauris metus mi, porta in hendrerit viverra, tempor eu risus. Nam dictum, purus eget pellentesque molestie, nisl magna euismod enim, in sagittis orci lectus vel justo. Pellentesque ultrices nisl dui, blandit rutrum nibh luctus eu. Nullam et laoreet libero. Cras porta lectus nisl, eget luctus turpis dictum eget. Duis et pharetra nibh, et volutpat ipsum. Maecenas rutrum sagittis velit a fringilla.\r\n\r\nProin vestibulum pretium suscipit. Cras in pellentesque urna. Fusce justo diam, venenatis at dolor at, semper lobortis ex. Nam porttitor lorem eu lectus vestibulum ullamcorper. Aenean pretium mattis convallis. Aliquam dictum velit quis finibus posuere. Pellentesque ac nunc in libero sollicitudin ullamcorper. Duis vel imperdiet dolor. Aenean vel tellus vulputate ante aliquam viverra.\r\n\r\nVestibulum mi turpis, porta in erat a, tincidunt sagittis dolor. In hac habitasse platea dictumst. Phasellus orci arcu, gravida sit amet metus non, ornare ornare lorem. Ut massa nisl, cursus nec elit et, laoreet efficitur diam. Nam pellentesque egestas gravida. Quisque diam mi, ultrices nec gravida ut, lacinia eget massa. Fusce eros urna, iaculis id nulla vel, posuere laoreet odio.\r\n\r\nSuspendisse sed magna ut ipsum tincidunt sollicitudin. Proin lorem ligula, sodales in rhoncus sit amet, imperdiet in orci. In eget dapibus nulla. Pellentesque pharetra leo in tristique facilisis. Duis placerat libero sit amet dui consectetur, eu vestibulum dolor tristique. Nulla feugiat vulputate ullamcorper. Etiam ut eros nisl. Mauris at risus ac nunc pellentesque fermentum. Sed at nulla lorem. Donec ut enim erat.', 'public/media/alaska-winter-nights-1920x1080.jpg', 'Quisque maximus efficitur vestibulum. Fusce quis porta enim.'),
(2, 'Chapitre II - La neige', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque laoreet dapibus sem vitae malesuada. Donec pretium aliquet vehicula. Aliquam posuere nibh vitae fermentum lobortis. Nam vitae lorem at erat tempor laoreet. Curabitur interdum dictum egestas. Etiam maximus orci a libero auctor, sed sagittis risus ornare. Mauris sed risus diam. Nulla eget tincidunt nunc. Sed id interdum elit, quis tempor dui. Integer quis aliquet orci, vitae pretium sem. Quisque in laoreet enim. Aliquam bibendum dolor quis nisi faucibus pharetra. Aenean mollis erat ullamcorper, tincidunt felis non, pretium risus. Aenean congue tincidunt ultrices. Donec sodales nisl vestibulum, condimentum ligula sodales, efficitur arcu.\r\n\r\nMorbi id ultricies ligula, eget scelerisque nibh. Pellentesque commodo nibh quis enim egestas rutrum. Nam in quam ligula. Integer et nisi ut lacus cursus mattis ut et purus. Praesent molestie enim sed neque auctor, et rhoncus lectus pulvinar. Aliquam ut maximus felis, quis egestas quam. Nullam scelerisque eu neque id tempus. Sed eleifend est vitae enim rutrum varius. Morbi blandit mauris consequat sagittis faucibus. Etiam tortor metus, feugiat eu pharetra non, tincidunt vel augue. Nullam id laoreet libero, eu suscipit ex. Aenean sit amet malesuada augue, nec vulputate orci.\r\n\r\nFusce ut ante a sem sollicitudin tincidunt. Pellentesque in elementum nisl. Nulla id viverra dolor, sed tincidunt eros. Morbi enim velit, mollis et sem ac, pulvinar suscipit dui. Suspendisse in lectus viverra, sollicitudin lacus a, rhoncus nulla. Quisque massa leo, porttitor vitae ipsum et, aliquet euismod mauris. Ut a dapibus dolor.\r\n\r\nDonec rutrum dui vel rhoncus fringilla. In nec rutrum mauris. Maecenas mollis ullamcorper feugiat. Cras pretium condimentum sem. Donec gravida odio sit amet est auctor ornare. Pellentesque tincidunt urna in arcu malesuada, in maximus nisl feugiat. Duis porttitor felis ut volutpat iaculis. Morbi vitae posuere quam, sit amet convallis sem. Integer maximus eros eu erat iaculis, nec maximus est pretium. Nullam ante dui, mattis feugiat nisi sed, condimentum gravida arcu. Suspendisse tellus libero, fringilla et faucibus eget, dignissim eget turpis. Suspendisse eget enim egestas, fermentum metus vel, auctor massa. Mauris sit amet gravida mi. Nam porttitor a mauris eget dictum. Nunc rhoncus varius nulla, et imperdiet orci ultrices at.\r\n\r\nPraesent at tortor eu urna faucibus dictum. Sed eget neque quis metus ornare luctus eget ornare erat. Mauris metus mi, porta in hendrerit viverra, tempor eu risus. Nam dictum, purus eget pellentesque molestie, nisl magna euismod enim, in sagittis orci lectus vel justo. Pellentesque ultrices nisl dui, blandit rutrum nibh luctus eu. Nullam et laoreet libero. Cras porta lectus nisl, eget luctus turpis dictum eget. Duis et pharetra nibh, et volutpat ipsum. Maecenas rutrum sagittis velit a fringilla.\r\n\r\nProin vestibulum pretium suscipit. Cras in pellentesque urna. Fusce justo diam, venenatis at dolor at, semper lobortis ex. Nam porttitor lorem eu lectus vestibulum ullamcorper. Aenean pretium mattis convallis. Aliquam dictum velit quis finibus posuere. Pellentesque ac nunc in libero sollicitudin ullamcorper. Duis vel imperdiet dolor. Aenean vel tellus vulputate ante aliquam viverra.\r\n\r\nVestibulum mi turpis, porta in erat a, tincidunt sagittis dolor. In hac habitasse platea dictumst. Phasellus orci arcu, gravida sit amet metus non, ornare ornare lorem. Ut massa nisl, cursus nec elit et, laoreet efficitur diam. Nam pellentesque egestas gravida. Quisque diam mi, ultrices nec gravida ut, lacinia eget massa. Fusce eros urna, iaculis id nulla vel, posuere laoreet odio.\r\n\r\nSuspendisse sed magna ut ipsum tincidunt sollicitudin. Proin lorem ligula, sodales in rhoncus sit amet, imperdiet in orci. In eget dapibus nulla. Pellentesque pharetra leo in tristique facilisis. Duis placerat libero sit amet dui consectetur, eu vestibulum dolor tristique. Nulla feugiat vulputate ullamcorper. Etiam ut eros nisl. Mauris at risus ac nunc pellentesque fermentum. Sed at nulla lorem. Donec ut enim erat.', 'public/media/2miwqOX.jpg', 'Quisque maximus efficitur vestibulum. Fusce quis porta enim. '),
(3, 'Chapitre III - Les ours', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque laoreet dapibus sem vitae malesuada. Donec pretium aliquet vehicula. Aliquam posuere nibh vitae fermentum lobortis. Nam vitae lorem at erat tempor laoreet. Curabitur interdum dictum egestas. Etiam maximus orci a libero auctor, sed sagittis risus ornare. Mauris sed risus diam. Nulla eget tincidunt nunc. Sed id interdum elit, quis tempor dui. Integer quis aliquet orci, vitae pretium sem. Quisque in laoreet enim. Aliquam bibendum dolor quis nisi faucibus pharetra. Aenean mollis erat ullamcorper, tincidunt felis non, pretium risus. Aenean congue tincidunt ultrices. Donec sodales nisl vestibulum, condimentum ligula sodales, efficitur arcu.\r\n\r\nMorbi id ultricies ligula, eget scelerisque nibh. Pellentesque commodo nibh quis enim egestas rutrum. Nam in quam ligula. Integer et nisi ut lacus cursus mattis ut et purus. Praesent molestie enim sed neque auctor, et rhoncus lectus pulvinar. Aliquam ut maximus felis, quis egestas quam. Nullam scelerisque eu neque id tempus. Sed eleifend est vitae enim rutrum varius. Morbi blandit mauris consequat sagittis faucibus. Etiam tortor metus, feugiat eu pharetra non, tincidunt vel augue. Nullam id laoreet libero, eu suscipit ex. Aenean sit amet malesuada augue, nec vulputate orci.\r\n\r\nFusce ut ante a sem sollicitudin tincidunt. Pellentesque in elementum nisl. Nulla id viverra dolor, sed tincidunt eros. Morbi enim velit, mollis et sem ac, pulvinar suscipit dui. Suspendisse in lectus viverra, sollicitudin lacus a, rhoncus nulla. Quisque massa leo, porttitor vitae ipsum et, aliquet euismod mauris. Ut a dapibus dolor.\r\n\r\nDonec rutrum dui vel rhoncus fringilla. In nec rutrum mauris. Maecenas mollis ullamcorper feugiat. Cras pretium condimentum sem. Donec gravida odio sit amet est auctor ornare. Pellentesque tincidunt urna in arcu malesuada, in maximus nisl feugiat. Duis porttitor felis ut volutpat iaculis. Morbi vitae posuere quam, sit amet convallis sem. Integer maximus eros eu erat iaculis, nec maximus est pretium. Nullam ante dui, mattis feugiat nisi sed, condimentum gravida arcu. Suspendisse tellus libero, fringilla et faucibus eget, dignissim eget turpis. Suspendisse eget enim egestas, fermentum metus vel, auctor massa. Mauris sit amet gravida mi. Nam porttitor a mauris eget dictum. Nunc rhoncus varius nulla, et imperdiet orci ultrices at.\r\n\r\nPraesent at tortor eu urna faucibus dictum. Sed eget neque quis metus ornare luctus eget ornare erat. Mauris metus mi, porta in hendrerit viverra, tempor eu risus. Nam dictum, purus eget pellentesque molestie, nisl magna euismod enim, in sagittis orci lectus vel justo. Pellentesque ultrices nisl dui, blandit rutrum nibh luctus eu. Nullam et laoreet libero. Cras porta lectus nisl, eget luctus turpis dictum eget. Duis et pharetra nibh, et volutpat ipsum. Maecenas rutrum sagittis velit a fringilla.\r\n\r\nProin vestibulum pretium suscipit. Cras in pellentesque urna. Fusce justo diam, venenatis at dolor at, semper lobortis ex. Nam porttitor lorem eu lectus vestibulum ullamcorper. Aenean pretium mattis convallis. Aliquam dictum velit quis finibus posuere. Pellentesque ac nunc in libero sollicitudin ullamcorper. Duis vel imperdiet dolor. Aenean vel tellus vulputate ante aliquam viverra.\r\n\r\nVestibulum mi turpis, porta in erat a, tincidunt sagittis dolor. In hac habitasse platea dictumst. Phasellus orci arcu, gravida sit amet metus non, ornare ornare lorem. Ut massa nisl, cursus nec elit et, laoreet efficitur diam. Nam pellentesque egestas gravida. Quisque diam mi, ultrices nec gravida ut, lacinia eget massa. Fusce eros urna, iaculis id nulla vel, posuere laoreet odio.\r\n\r\nSuspendisse sed magna ut ipsum tincidunt sollicitudin. Proin lorem ligula, sodales in rhoncus sit amet, imperdiet in orci. In eget dapibus nulla. Pellentesque pharetra leo in tristique facilisis. Duis placerat libero sit amet dui consectetur, eu vestibulum dolor tristique. Nulla feugiat vulputate ullamcorper. Etiam ut eros nisl. Mauris at risus ac nunc pellentesque fermentum. Sed at nulla lorem. Donec ut enim erat.', 'public/media/polar-bear-roar-waves-dark-sky-sea.jpg', 'libero, eget fringilla mi rutrum id. Pellentesque erat purus, rhoncus vitae lacinia sagittis, sollicitudin a magna'),
(5, 'Chapitre IV - Le froid', 'Donec eu neque fringilla, dapibus urna ac, posuere justo. Mauris vestibulum neque id neque maximus feugiat. Maecenas ac lobortis odio, eu rutrum lacus. Sed faucibus feugiat libero. Vestibulum non velit diam. Phasellus vel sem commodo, aliquet metus sit amet, iaculis enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean egestas purus eu tortor iaculis, non pharetra neque aliquet. Integer sapien nisi, feugiat et efficitur a, suscipit id mauris. Phasellus fermentum et nisi ut pellentesque. Duis in nulla at purus cursus interdum. Fusce in sem eu nisi gravida convallis vel semper ligula. Mauris ac lectus tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nInteger tincidunt mollis tristique. Cras risus lacus, hendrerit quis porttitor at, efficitur a magna. Nullam libero odio, tempor in tortor non, facilisis feugiat dui. Aenean ultricies eget ligula lacinia cursus. Morbi imperdiet, leo fermentum vestibulum pretium, mauris leo posuere massa, eu suscipit nunc libero eu felis. Nunc elementum congue purus, vel placerat mi vestibulum non. Duis ullamcorper massa quis urna convallis, vel convallis ex tempor. Nulla eros ligula, pharetra ut ultricies et, porttitor eget ligula. Vestibulum tristique felis odio, vel cursus nibh malesuada vel. In id placerat eros. Aenean volutpat ante nec nibh tincidunt lobortis.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et egestas lectus. Sed ut sapien sed mi tristique posuere eu at sapien. Quisque quis nulla malesuada, sollicitudin orci sit amet, pulvinar urna. Vivamus nibh sapien, tempor finibus augue id, malesuada rhoncus diam. Donec pharetra eros at arcu dictum, vel pretium ex ullamcorper. Pellentesque et felis vitae erat ultrices fringilla sit amet id massa. Suspendisse sed semper arcu. Curabitur elementum imperdiet justo, vitae dignissim nisl mattis eget. Etiam molestie metus id sapien auctor, eget fermentum tellus gravida.\r\n\r\nUt aliquet, mauris et pharetra laoreet, mi quam volutpat lorem, eget volutpat dolor ipsum ut lorem. Integer accumsan nulla a tortor aliquet facilisis. Morbi interdum nulla nec odio lacinia lobortis. Quisque finibus massa eget porta egestas. Suspendisse potenti. Aliquam egestas sit amet libero nec pharetra. Vivamus sit amet orci ac turpis rhoncus posuere sit amet sed libero. Nullam lacus nibh, porta eget lorem sit amet, vestibulum tempus tortor. In venenatis lacinia metus, ut volutpat neque fringilla vitae.', 'public/media/amusement-park-fair-rides-fun.jpg', 'haretra laoreet, mi quam volutpat lorem, eget volutpat dolor ipsum ut lorem. Integer accumsan nulla a tortor aliquet facilisis. ');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `commentaires_ibfk_1` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'Jean-michel', 'Chapitre intéressant !', '2019-08-02 00:00:00'),
(2, 3, 'Marcus', 'Bonjour', '2019-08-02 12:45:01'),
(3, 3, 'Lucky Luke', '<strong> Pan pan ! </strong>', '2019-08-02 12:45:47'),
(4, 2, 'Uncle sam', 'Distinguished puppets-of-State, dictators, presidents, and kings; sheiks and various clerics; large landholders, primary commodity-exporters, and other emerging business elites; peasants, neo-surfs, and other underlings of the developing world and Middle East. It is my intention today to inform you of the way things ARE, plain and simple, and in English, plain English.', '2019-08-02 12:47:47'),
(5, 2, '<a>Joe</a>', 'test', '2019-08-03 06:19:25'),
(6, 3, 'Norman', 'Amazing !', '2019-08-03 06:22:24'),
(7, 3, 'Test', 'test', '2019-08-03 06:28:26'),
(8, 3, 'testss', 'test', '2019-08-03 06:29:04'),
(9, 3, 'Baudelaire', 'De retour à Paris, Charles s’éprend de Jeanne Duval, une « jeune mulâtresse » avec laquelle il connaîtra les charmes et les amertumes de la passion. Une passion au sujet de laquelle, toutefois, certains de ses contemporains, comme Nadar, se sont interrogés, en s’appuyant sur les déclarations d’un amant de Jeanne Duval et de prostituées connues, qui témoignent au contraire de la chasteté surprenante de Baudelaire12. Dandy endetté, il est placé sous tutelle judiciaire et mène dès 1842 une vie dissolue. Il commence alors à composer plusieurs poèmes des Fleurs du mal. Critique d’art et journaliste, il défend Delacroix comme représentant du romantisme en peinture, mais aussi Balzac lorsque l’auteur de La Comédie humaine est attaqué et caricaturé pour sa passion des chiffres13 ou sa perversité présumée14. En 1843, il découvre les « paradis artificiels » dans le grenier de l’appartement familial de son ami Louis Ménard, où il goûte à la confiture verte. Même s’il contracte une colique à cette occasion, cette expérience semble décupler sa créativité (il dessine son autoportrait en pied, très démesuré). Il renouvellera cette expérience occasionnellement, et sous contrôle médical, en participant aux réunions du « club des Haschischins ». En revanche, sa pratique de l’opium est plus longue : il fait d’abord, dès 1847, un usage thérapeutique du laudanum15, prescrit pour combattre des maux de tête et des douleurs intestinales consécutives à une syphilis, probablement contractée vers 1840 durant sa relation avec la prostituée Sarah la Louchette. Comme De Quincey avant lui, l’accoutumance lui fait augmenter progressivement les doses. Croyant y trouver un adjuvant créatif, il en décrira les enchantements et les tortures', '2019-08-03 06:29:59'),
(10, 3, 'Charles', 'Excellent chapitre !', '2019-08-03 07:24:57'),
(11, 1, 'Igloo', 'froid', '2019-08-06 10:30:13'),
(12, 1, 'Marcus', 'dgfdg', '2019-08-08 17:13:00'),
(13, 1, 'ezrzer', 'ezrrzer', '2019-08-09 09:58:36'),
(14, 5, 'Marcus', 'Enfin un nouvel article !', '2019-08-09 12:24:17');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'jean-forteroche@admin.fr', '$2y$10$wNg8YapKgV5w9yT2dyj.AOHoq5vsGAq4UnopkV3.FdAxmk6j1yTEO');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `billets` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
