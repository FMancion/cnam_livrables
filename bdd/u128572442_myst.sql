
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 20 Avril 2016 à 20:26
-- Version du serveur: 10.0.20-MariaDB
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `u128572442_myst`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `image`, `categorie`) VALUES
(1, 'lignesnazca', 'Découverts en 1927 dans le sud du Pérou, les géoglyphes de Nazca sont de grandes figures tracées sur le sol souvent d''animaux stylisés, parfois simples lignes longues de plusieurs kilomètres, qui se trouvent dans le désert de Nazca.Le sol sur lequel ils se dessinent est couvert de cailloux que l''oxyde de fer a colorés en rouge. \r\nUn géoglyphe est un grand dessin, un grand motif à même le sol. Les géoglyphes peuvent être réalisés en positif par entassement de pierres, de gravier ou de terre ; ils peuvent être réalisés en négatif par enlèvement des pierres, de la végétation ou de la terre .\r\nEn les ôtant, les Nazcas ont fait apparaître un sol gypseux grisâtre, découpant les contours de leurs figures.Ces géoglyphes sont le fait de la civilisation Nazca, une culture pré-incaïque du Sud du Pérou qui se développa entre 300 av. J.-C. et 800 de notre ère.Ils ont été majoritairement réalisés entre 400 et 6501. Les lignes et géoglyphes de Nazca et de Pampas de Jumana sont inscrits sur la liste du patrimoine mondial de l’Unesco depuis 19942.', '', 'mysteres'),
(2, 'peintures_sw', 'Stephen Wiltshire, né le 24 avril 1974 à Londres, est un artiste britannique. Autiste doté d''une mémoire eidétique, il est connu pour sa capacité à dessiner un paysage dans les moindres détails . Comme de nombreux autistes,Stephen Wiltshire  a développer des facultés impressionnantes dans un domaine particulier. \r\n      Surnommé « l’homme caméra » il est capable de reproduire un paysage, ou un ville entière avec une similitude impressionante juste en la survolant pendant quelques minutes…\r\n      En avril dernier, à la demande de la banque UBS, et pour le compte de leur campagne « We will not rest », Stephen Wiltshire est retourné a New York (il l’avait déjà dessiné il ya quelques années) pour réaliser un panorama de Manhattan. Celui-ci est désormais exposé sur un billboard de 78m à l’aéroport de JFK.\r\n      Voyez avec quelle facilité il arrive à reproduire, avec une similitude ahurissante les immeubles qu’il n’a survolé que quelques instants, c’est impressionnant !\r\n', '', 'mysteres'),
(3, 'lasbolas', 'Les sphères mégalithiques du Costa Rica sont des boules de pierre ou pétrosphères, souvent de gabbro, une sorte de granit, qui ont été découvertes à différents endroits de la jungle du Costa Rica, on en compte environ 300 exemplaires de différentes tailles mais les plus grosses atteignent un poids de 16 tonnes pour un diamètre de 2,5 mètres. Localement, elles sont appelées Las Bolas.\r\n  La quasi-perfection de leur forme, l''éloignement parfois d''environ 100 km des premières carrières possibles d''où elles pourraient provenir, la difficulté de leur datation, des moyens inconnus employés pour les confectionner et leur isolation d''un contexte archéologique certain en font une véritable énigme mégalithique.\r\n    Rattachées plus certainement à la période précolombienne, une datation incertaine les rattacheraient à la culture Aguas Buenas entre 200 av.J.C. et 600 de notre ère. Le mystère qui les entoure donne lieu à de nombreuses interprétations ésotériques ou mystérieuses plus ou moins farfelue,\r\n    cet aspect est notamment exploité dans les livres écrits par l''explorateur suisse Erich von Däniken. Pourtant, des recherches apportent aujourd''hui une idée de leur fabrication sous un angle beaucoup plus sérieux.\r\n    D''autre exemples de pétrosphères ont été retrouvées à travers le monde, soit d''origine naturelle, soit taillées et sculptées comme les exemples retrouvés en Écosse et datant de l''Âge du bronze. Mais aucune n''atteignent le gigantisme de celles du Costa Rica.\r\n', '', 'mysteres'),
(4, 'damier', 'Pour comprendre pourquoi, sur ce damier d''Adelson nous ne pouvons croire au fait que les deux zones grises sont identiques il faut identifier les éléments inducteurs qui créent l''illusion : \r\n  - D''une part il y a ici un effet bien connu d''illusion de couleur : Le cerveau distingue les couleurs par rapport au milieu environnant, ainsi la zone A parait plus foncé car elle est entourée de carreaux clairs et à l''inverse la zone B parait plus claire du fait des carreaux plus foncés autour d''elle. \r\n    - Un autre facteur accentue fortement.l''illusion, notre vécu joue sur notre perception, en effet nous connaissons bien les damiers : un damier est un ensemble de cases alternativement d''une couleur foncé puis d''une autre claire. Ainsi, dans l''ordre logique du damier, la zone B appartient à la suite des carreaux clairs. Pourtant, du fait de l''ombre, la zone B est bien plus foncé que les autres carreaux clairs, le cerveau corrige donc la nuance apporté par l''ombre et "éclaircie" la zone B.\r\n    L''addition de ces deux facteurs crée une illusion impressionnante est impossible à contourner : vous savez bien que c''est une illusion mais pourtant vous n''arrivez pas à vous convaincre que les deux zones sont rigoureusement identiques.\r\n', '', 'illusions'),
(5, 'lignespiano', 'Vous êtes persuadés que les lignes sont courbées, et bien détrompez vous, elles sont bien rectilignes. Vérifiez par vous même, en apposant une règle au dessous de la ligne.</p>\r\n Explication: L''image physique formée au fond de l''oeil sur la rétine, analysée point par point, est transmise fidélement au cerveau sous forme de messages codés. Ceci est en principe pareil pour tous. \r\n  Mais ce sont les zones visuelles du cerveau qui analysent ces signaux et nous donnent une représentation de l''objet perçu.\r\n      L''interprétation qu''en fait le cerveau peut parfois être ambiguë. Ces "erreurs" d''interprétation sont des illusions d''optique, qui ne sont pas perçues de la même façon par chacun d''entre nous (nous n''avons pas tous le même "vécu", ni les mêmes images en mémoire)...\r\n      Les illusions sont les témoins des mécanismes de la vision. Elles confirment que notre perception du monde est assez éloignée de la photographie. Elle est le résultat :\r\n      - d''une stimulation des photorécepteurs rétiniens, qui peuvent subir des phénomènes de fatigue.\r\n      - et surtout d''une construction mentale, à partir des messages nerveux reçus, parfois erronés. Le cerveau cherche à mettre du sens partout, même là où il n''y en a pas. Alors, il en fait trop, amplifiant les contrastes, créant contours, couleurs, perspectives,\r\n      reliefs, mouvements, en fonction de ce qu''il connaît. En effet, malgré une organisation générale commune du cortex visuel, les apprentissages et le vécu diffèrent d''une personne à l''autre, d''où une sensibilité variable à certaines illusions.\r\n      Le cortex visuel occupe le lobe occipital du cerveau et est chargé de traiter les informations visuelles. Le cortex visuel couvre le lobe occipital, sur les faces latérales et internes, et empiète sur le lobe pariétal et le lobe temporal.\r\n', '', 'illusions');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mail` (`mail`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `nom`, `texte`, `mail`) VALUES
(15, 'FRANCKY', 'c moi le maitre des temps', 'stillin33@hotmail.com'),
(37, 'ERIKA', 'slt franck pas mal ton siote', 'erika@gmail.com'),
(38, 'KLEVANN', 'Koulash', 'levann@hotmail.fr'),
(46, 'franck', 'test au niveau du phpmyadmin', 'dodompa@live.fr'),
(47, 'GILOU', 'coucou', 'dodompa@live.Fr');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `adresse` varchar(25) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `login` (`login`),
  KEY `mail` (`mail`),
  KEY `login_2` (`login`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`id`, `login`, `adresse`, `tel`, `mail`) VALUES
(1, 'dodompa', '19 rue coursarlon', 664060606, 'dodompa@live.fr');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `typecompte` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `login` (`login`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `typecompte`) VALUES
(2, 'philippe', 'Phil-2016', 'admin'),
(3, 'levanball', 'dragon', 'user'),
(5, 'user', 'user', 'user'),
(6, 'gilou', 'gilou', 'user'),
(8, 'admin', 'admin1', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
