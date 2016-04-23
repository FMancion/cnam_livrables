-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 15 Avril 2016 à 17:49
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `u128572442_myst`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `nom`, `texte`, `mail`) VALUES
(1, 'TEST', 'COUCOUCCCCCCCC', 'dodompa@live.fr'),
(4, 'GILOOOOOOO', 'ca va vieille brancheeeeeeeeee', 'gilooooo@yahoo.fr'),
(5, 'DESERRRRRR', 'cfsdqjfdsfhjsdhuh', 'deseriwi@gmail.com'),
(15, 'FRANCKY', 'c moi le maitre des temps', 'stillin33@hotmail.com'),
(35, 'MANCION', 'Slt hdjdjsjss', 'dodompa@live.fr'),
(36, 'FRAAAA', 'fdfferfzerfzer', 'dodompa@live.fr'),
(37, 'ERIKA', 'slt franck pas mal ton siote', 'erika@gmail.com'),
(38, 'KLEVANN', 'Koulash', 'levann@hotmail.fr'),
(46, 'franck', 'test au niveau du phpmyadmin', 'dodompa@live.fr');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `adresse` varchar(25) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`id`, `login`, `adresse`, `tel`, `mail`) VALUES
(1, 'dodompa', '19 rue coursarlon', 664060606, 'dodompa@live.fr');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `typecompte` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `typecompte`) VALUES
(1, 'dodompa', 'pacmak', 'admin'),
(2, 'philippe', 'Phil-2016', 'admin'),
(3, 'levanball', 'dragon', 'user'),
(4, 'admin', 'admin', 'admin'),
(5, 'user', 'user', 'user'),
(6, 'gilou', 'gilou', 'user'),
(7, 'franck', 'admin', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mail` (`mail`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login` (`login`),
  ADD KEY `mail` (`mail`),
  ADD KEY `login_2` (`login`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
