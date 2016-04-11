
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 07 Avril 2016 à 12:01
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
  `contenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `image`, `categorie`) VALUES
(1, 'lignesnazca', 'Découverts en 1927 dans le sud du Pérou, les géoglyphes de Nazca sont de grandes figures tracées sur le sol souvent d''animaux stylisés, parfois simples lignes longues de plusieurs kilomètres, qui se trouvent dans le désert de Nazca.Le sol sur lequel ils s', '', 'mysteres'),
(2, 'peintures_sw', 'Comme de nombreux autistes, Stephen Wiltshire a développer des facultés impressionnantes dans un domaine particulier. Surnommé « l’homme caméra » il est capable de reproduire un paysage, ou un ville entière avec une similitude impressionante juste en la s', '', 'mysteres'),
(3, 'lasbolas', 'Les sphères mégalithiques du Costa Rica sont des boules de pierre ou pétrosphères, souvent de gabbro, une sorte de granit, qui ont été découvertes à différents endroits de la jungle du Costa Rica, on en compte environ 300 exemplaires de différentes taille', '', 'mysteres'),
(4, 'damier', 'Pour comprendre pourquoi, sur ce damier d''Adelson nous ne pouvons croire au fait que les deux zones grises sont identiques il faut identifier les éléments inducteurs qui créent l''illusion : - D''une part il y a ici un effet bien connu d''illusion de couleur', '', 'illusions'),
(5, 'lignespiano', 'Vous êtes persuadés que les lignes sont courbées, et bien détrompez vous, elles sont bien rectilignes. Vérifiez par vous même, en apposant une règle au dessous de la ligne.  Explication: L''image physique formée au fond de l''oeil sur la rétine, analysée po', '', 'illusions');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `nom`, `texte`, `mail`) VALUES
(1, 'TEST', 'COUCOUCCCCCCCC', 'dodompa@live.fr'),
(2, 'GILOOOOOOO', 'ca va vieille brancheeeeeeeeee', 'gilooooo@yahoo.fr'),
(3, 'GILOOOOOOO', 'ca va vieille brancheeeeeeeeee', 'gilooooo@yahoo.fr'),
(4, 'GILOOOOOOO', 'ca va vieille brancheeeeeeeeee', 'gilooooo@yahoo.fr'),
(5, 'DESERRRRRR', 'cfsdqjfdsfhjsdhuh', 'deseriwi@gmail.com'),
(6, 'EVAN', 'ca va toi', 'dodompa@live.fr'),
(7, 'DD', 'dd', 'dodompa@live.fr'),
(8, 'EZE', 'ezez', 'dodompa@live.fr'),
(9, 'FRANCIS', 'ddd', 'dodompa@live.fr'),
(10, 'H', 'h', 'dodompa@live.fr'),
(11, 'FRANCIS', 'ffsdfdsf', 'dodompa@live.fr'),
(12, 'FF', 'ghdghdtrhr', 'franckmancion@gmail.com'),
(13, 'FRANCIS', 'eeee', 'dodompa@live.fr'),
(14, 'BONNOUR', 'cccc', 'dodompa@live.fr'),
(15, 'FRANCKY', 'c moi le maitre des temps', 'stillin33@hotmail.com'),
(16, 'FF', 'fff', 'dodompa@live.fr'),
(17, 'FF', 'fff', 'dodompa@live.fr'),
(18, 'G', 'g', 'dodompa@live.fr'),
(19, 'D', 'dddd', 'dodompa@live.fr'),
(20, 'D', 'ddddd', 'dodompa@live.fr'),
(21, 'D', 'ddd', 'dodompa@live.fr'),
(22, 'HH', 'hhhhh', 'dodompa@live.fr'),
(23, 'H', 'hhhh', 'dodompa@live.fr'),
(24, 'H', 'hhhh', 'dodompa@live.fr'),
(25, 'H', 'hhhh', 'dodompa@live.fr'),
(26, 'DD', 'ddd', 'dodompa@live.fr'),
(27, 'DD', 'ddd', 'dodompa@live.fr'),
(28, 'DD', 'ddd', 'dodompa@live.fr'),
(29, 'DD', 'ddd', 'dodompa@live.fr'),
(30, 'DD', 'ddd', 'dodompa@live.fr'),
(31, 'F', 'ff', 'dodompa@live.fr'),
(32, 'F', 'ffffff', 'dodompa@live.fr'),
(33, 'JUJUUUUU', 'vsdivjisodhfiohfiohio^zerhfh', 'dodompa@live.fr'),
(34, 'FFF ', 'fdsqfsdfq', 'dodompa@live.fr'),
(35, 'MANCION', 'Slt hdjdjsjss', 'dodompa@live.fr'),
(36, 'FRAAAA', 'fdfferfzerfzer', 'dodompa@live.fr'),
(37, 'ERIKA', 'slt franck pas mal ton siote', 'erika@gmail.com'),
(38, 'KLEVANN', 'Koulash', 'levann@hotmail.fr'),
(39, 'HGHH', 'Hsjejejje', 'dodompa@live.com'),

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `typecompte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `typecompte`) VALUES
(1, 'dodompa', 'pacmak', 'A'),
(2, 'philippe', 'Phil-2016', 'A'),
(3, 'levanball', 'dragon', 'U');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
