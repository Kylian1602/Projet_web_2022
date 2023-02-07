-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 fév. 2023 à 23:04
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `espece` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `poids` varchar(100) NOT NULL,
  `nourriture` varchar(300) NOT NULL,
  `origine` varchar(100) NOT NULL,
  `emplacement` varchar(100) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `parraineur` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `espece`, `prenom`, `age`, `poids`, `nourriture`, `origine`, `emplacement`, `photo`, `parraineur`) VALUES
(1, 'griffon', 'gilda', '5', '200', 'graine', 'espagne', 'allee 2B', 'https://p0.storage.canalblog.com/05/04/1177178/103330877.jpg', '2'),
(2, 'griffon', 'gerome', '7', '500', 'souris', 'portugal', 'allee 2B', 'https://lagbt.wiwiland.net/images/e/ef/ON-azur-griffon.jpg', ''),
(3, 'griffon', 'albert', '4', '90', 'viande', 'france', 'allee 5A', 'https://i.pinimg.com/600x315/f5/03/2c/f5032c1e2df1181f79f7247eb66d73d1.jpg', ''),
(4, 'griffon', 'albert', '12', '350', 'viande', 'allemagne', 'allee 5A', 'http://youppiyeah.com/wp-content/uploads/2018/05/griffon-1024x636.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `article` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `description`, `date`, `article`) VALUES
(1, 'Le mode de vie des griffons', 'Les griffons ont modifi\\é leur mode a cause de l\'activité de l`\'homme', '2022-04-12', 'Nos amis à plume et à poil ont encore eu des complications suite aux nouveaux travaux initialisés par les êtres humains proche de leur territoire vaporisant toute l\'eau du lac. Fortheureusment, l\'alimentation des griffons ne se limite pas qu\'au poisson et ceux-ci ce sont vite rabattu sur les oiseaux des proches montagnes pour survivre. À noter que ce nouveau mode de vie risque de poser de prochains problèmes sur la faune locale et la régulation des espèces.'),
(2, 'Bientot Pacques', 'Nos lapins peuvent avoir des oeufs', '2022-04-11', 'Une transmutation à permis de créer une chimère réunissant un lapin et un ornithorinque. Le résultat est moins excitant que ce que l\'on pourrait imaginer, la chimère ressemble bel et bien à un lapin... Ovipare. C\'est donc le premier spécimen ressemblant à un animal réel qui est listé chez les animaux extraordinaire. À suivre...'),
(5, 'La vie rêver des chats Perrons', 'Nous avons reçu une nouvelles espèce hybride issue d\'une transmutation de chat', '2022-04-23', 'est fière de vous présenter une nouvelle espèce de chat entièrement rouge, d\'où leur appeletation Chat Perron.');

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

DROP TABLE IF EXISTS `boutique`;
CREATE TABLE IF NOT EXISTS `boutique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prix` varchar(250) NOT NULL,
  `stock` varchar(250) NOT NULL,
  `date_ajout` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `boutique`
--

INSERT INTO `boutique` (`id`, `nom`, `prix`, `stock`, `date_ajout`, `image`, `type`) VALUES
(1, 'article1', '10', '0', '2020-05-06', '../image/image1.jpg', 'souvenir'),
(2, 'article2', '20', '0', '2020-05-06', '../image/image1.jpg', 'souvenir'),
(3, 'article3', '20', '0', '2020-05-06', '../image/image1.jpg', 'souvenir'),
(4, 'article4', '20', '2', '2020-05-06', '../image/image1.jpg', 'souvenir'),
(5, 'article', '10', '8', '2018-05-06', '../image/image1.jpg', 'souvenir'),
(6, 'article', '10', '8', '2015-10-05', '../image/jouetAnimaux.jpg', 'animaux'),
(7, 'article', '10', '8', '2015-10-05', '../image/jouetAnimaux.jpg', 'animaux'),
(8, 'article', '10', '8', '2015-10-05', '../image/jouetAnimaux.jpg', 'animaux'),
(9, 'article', '10', '8', '2015-10-05', '../image/jouetAnimaux.jpg', 'animaux'),
(10, 'article', '10', '8', '2015-10-05', '../image/donuts.jpg', 'nourriture'),
(11, 'article', '10', '8', '2015-10-05', '../image/donuts.jpg', 'nourriture'),
(12, 'article', '10', '8', '2015-10-05', '../image/donuts.jpg', 'nourriture'),
(16, 'articleAjouter', '25', '40', '2020-01-02', '../image/image1.jpg', 'souvenir'),
(17, 'test', '10', '5', '2022-08-22', '../image/image1.jpg', 'souvenir');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `commentaire` varchar(2000) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `id_article`, `pseudo`, `commentaire`, `date`) VALUES
(1, 1, 'test', 'un commentaire', '2022-04-22'),
(2, 1, 'pseudotest', 'com=test', '2022-04-22'),
(3, 1, 'pseudotest', '', '2022-04-22'),
(4, 1, 'pseudotest', '', '2022-04-22'),
(5, 1, 'pseudotest', '', '2022-04-22'),
(6, 1, 'pseudotest', 'sdf', '2022-04-22'),
(7, 1, 'pseudotest', 'Ã©Ã©Ã©', '2022-04-22'),
(8, 5, 'pseudotest', 'test', '2022-05-09');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `droit` varchar(250) NOT NULL,
  `date_naissance` varchar(250) NOT NULL,
  `parrainage` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `pseudo`, `email`, `mdp`, `droit`, `date_naissance`, `parrainage`) VALUES
(2, 'a', 'b@c', 'c', 'visiteur', '2018-07-22', '1'),
(3, 'a', 'b@h', 'b', 'visiteur', '2018-07-22', ''),
(4, 'test', 'test@test', '123', 'visiteur', '2019-08-10', ''),
(5, 'test2', 'test2@test2', '123', 'visiteur', '2017-08-20', ''),
(6, 'test3', 'test3@test3', '1230', 'visiteur', '2018-07-22', ''),
(7, 'galo', 'galo@gmail', 'galo', 'visiteur', '2018-07-22', ''),
(8, 'admin', 'admin@admin', 'admin', 'admin', '2018-07-22', '1');

-- --------------------------------------------------------

--
-- Structure de la table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` varchar(250) NOT NULL,
  `montant` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `donation`
--

INSERT INTO `donation` (`id`, `id_client`, `montant`) VALUES
(1, '0', '10'),
(2, '0', '10'),
(3, '0', '10'),
(4, '', '10'),
(5, '8', '10'),
(6, '0', '10');

-- --------------------------------------------------------

--
-- Structure de la table `espece`
--

DROP TABLE IF EXISTS `espece`;
CREATE TABLE IF NOT EXISTS `espece` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `espece`
--

INSERT INTO `espece` (`id`, `type`, `nom`) VALUES
(1, 'aquatique', 'sirene'),
(2, 'aquatique', 'hippocampe'),
(3, 'volatile', 'griffon');

-- --------------------------------------------------------

--
-- Structure de la table `panierclient`
--

DROP TABLE IF EXISTS `panierclient`;
CREATE TABLE IF NOT EXISTS `panierclient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prix` varchar(250) NOT NULL,
  `datevente` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panierclient`
--

INSERT INTO `panierclient` (`id`, `id_client`, `nom`, `prix`, `datevente`) VALUES
(33, 8, 'article4', '20', '2022-05-09'),
(25, 2, 'article3', '20', '2022-05-07');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_reservation` date NOT NULL,
  `nb_personne` varchar(50) NOT NULL,
  `type_visite` varchar(50) NOT NULL,
  `id_visiteur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `date_reservation`, `nb_personne`, `type_visite`, `id_visiteur`) VALUES
(1, '2018-07-22', '1', 'Visite', 2),
(2, '2018-07-22', '1', 'Visite', 2),
(3, '2023-12-31', '', 'Visite', 2),
(4, '2023-07-22', '1', 'Visite', 2),
(5, '2023-07-22', '1', 'Visite', 8),
(6, '2023-07-22', '1', 'Spectacle', 8),
(7, '2023-07-22', '1', 'Safarie', 8);

-- --------------------------------------------------------

--
-- Structure de la table `venteboutique`
--

DROP TABLE IF EXISTS `venteboutique`;
CREATE TABLE IF NOT EXISTS `venteboutique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prix` varchar(200) NOT NULL,
  `datevente` varchar(200) NOT NULL,
  `acheteur` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `venteboutique`
--

INSERT INTO `venteboutique` (`id`, `nom`, `prix`, `datevente`, `acheteur`) VALUES
(1, 'test', '20', '2018-05-20', 'test'),
(2, 'test', '30', '2018-05-20', 'test'),
(3, 'article1', '10', '22-03-23', 'admin@admin'),
(4, 'article1', '10', '22-03-23', 'admin@admin'),
(5, 'article1', '10', '22-03-23', 'admin@admin'),
(6, 'article1', '10', '22-03-23', 'admin@admin'),
(7, 'article1', '10', '22-03-23', 'admin@admin'),
(8, 'article1', '10', '22-03-23', 'admin@admin'),
(9, 'article', '10', '22-03-23', 'admin@admin'),
(10, 'article', '10', '22-03-23', 'admin@admin'),
(11, 'article1', '10', '22-03-23', 'admin@admin'),
(12, 'article1', '10', '22-05-07', 'b@c'),
(13, 'article2', '20', '22-05-07', 'b@c'),
(14, 'article2', '20', '22-05-07', 'b@c'),
(15, 'article2', '20', '22-05-07', 'b@c'),
(16, 'article2', '20', '22-05-07', 'b@c'),
(17, 'article2', '20', '22-05-07', 'b@c'),
(18, 'article3', '20', '22-05-07', 'admin@admin'),
(19, 'article3', '20', '22-05-07', 'admin@admin'),
(20, 'article3', '20', '22-05-07', 'admin@admin'),
(21, 'article3', '20', '22-05-07', 'admin@admin'),
(22, 'article3', '20', '22-05-07', 'admin@admin'),
(23, 'article4', '20', '2022-05-07', 'admin@admin'),
(24, 'article4', '20', '2022-05-07', 'admin@admin'),
(25, 'article4', '20', '2022-05-07', 'admin@admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
