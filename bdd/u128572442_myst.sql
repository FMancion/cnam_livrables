-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 09 Mai 2016 à 12:14
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
  `contenu` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `image`, `categorie`) VALUES
(1, 'lignesnazca', 'Découverts en 1927 dans le sud du Pérou, les géoglyphes de Nazca sont de grandes figures tracées sur le sol souvent d''animaux stylisés, parfois simples lignes longues de plusieurs kilomètres, qui se trouvent dans le désert de Nazca.Le sol sur lequel ils se dessinent est couvert de cailloux que l''oxyde de fer a colorés en rouge. Un géoglyphe est un grand dessin, un grand motif à même le sol. Les géoglyphes peuvent être réalisés en positif par entassement de pierres, de gravier ou de terre ; ils peuvent être réalisés en négatif par enlèvement des pierres, de la végétation ou de la terre . En les ôtant, les Nazcas ont fait apparaître un sol gypseux grisâtre, découpant les contours de leurs figures. Ces géoglyphes sont le fait de la civilisation Nazca, une culture pré-incaïque du Sud du Pérou qui se développa entre 300 av. J.-C. et 800 de notre ère.Ils ont été majoritairement réalisés entre 400 et 6501. Les lignes et géoglyphes de Nazca et de Pampas de Jumana sont inscrits sur la liste du patrimoine mondial de l’Unesco depuis 19942. ', '', 'mysteres'),
(2, 'peintures_sw', '      Stephen Wiltshire, né le 24 avril 1974 à Londres, est un artiste britannique. Autiste doté d''une mémoire eidétique, il est connu pour sa capacité à dessiner un paysage dans les moindres détails . Comme de nombreux autistes,Stephen Wiltshire  a développer des facultés impressionnantes dans un domaine particulier. \r\n      Surnommé « l’homme caméra » il est capable de reproduire un paysage, ou un ville entière avec une similitude impressionante juste en la survolant pendant quelques minutes…\r\n      En avril dernier, à la demande de la banque UBS, et pour le compte de leur campagne « We will not rest », Stephen Wiltshire est retourné a New York (il l’avait déjà dessiné il ya quelques années) pour réaliser un panorama de Manhattan. Celui-ci est désormais exposé sur un billboard de 78m à l’aéroport de JFK.\r\n      Voyez avec quelle facilité il arrive à reproduire, avec une similitude ahurissante les immeubles qu’il n’a survolé que quelques instants, c’est impressionnant !\r\n', '', 'mysteres'),
(3, 'lasbolas', '    Les sphères mégalithiques du Costa Rica sont des boules de pierre ou pétrosphères, souvent de gabbro, une sorte de granit, qui ont été découvertes à différents endroits de la jungle du Costa Rica, on en compte environ 300 exemplaires de différentes tailles mais les plus grosses atteignent un poids de 16 tonnes pour un diamètre de 2,5 mètres. Localement, elles sont appelées Las Bolas.\r\n    La quasi-perfection de leur forme, l''éloignement parfois d''environ 100 km des premières carrières possibles d''où elles pourraient provenir, la difficulté de leur datation, des moyens inconnus employés pour les confectionner et leur isolation d''un contexte archéologique certain en font une véritable énigme mégalithique.\r\n    Rattachées plus certainement à la période précolombienne, une datation incertaine les rattacheraient à la culture Aguas Buenas entre 200 av.J.C. et 600 de notre ère. Le mystère qui les entoure donne lieu à de nombreuses interprétations ésotériques ou mystérieuses plus ou moins farfelue,\r\n    cet aspect est notamment exploité dans les livres écrits par l''explorateur suisse Erich von Däniken. Pourtant, des recherches apportent aujourd''hui une idée de leur fabrication sous un angle beaucoup plus sérieux.\r\n    D''autre exemples de pétrosphères ont été retrouvées à travers le monde, soit d''origine naturelle, soit taillées et sculptées comme les exemples retrouvés en Écosse et datant de l''Âge du bronze. Mais aucune n''atteignent le gigantisme de celles du Costa Rica.\r\n', '', 'mysteres'),
(4, 'damier', '    Pour comprendre pourquoi, sur ce damier d''Adelson nous ne pouvons croire au fait que les deux zones grises sont identiques il faut identifier les éléments inducteurs qui créent l''illusion : \r\n    - D''une part il y a ici un effet bien connu d''illusion de couleur : Le cerveau distingue les couleurs par rapport au milieu environnant, ainsi la zone A parait plus foncé car elle est entourée de carreaux clairs et à l''inverse la zone B parait plus claire du fait des carreaux plus foncés autour d''elle. \r\n    - Un autre facteur accentue fortement.l''illusion, notre vécu joue sur notre perception, en effet nous connaissons bien les damiers : un damier est un ensemble de cases alternativement d''une couleur foncé puis d''une autre claire. Ainsi, dans l''ordre logique du damier, la zone B appartient à la suite des carreaux clairs. Pourtant, du fait de l''ombre, la zone B est bien plus foncé que les autres carreaux clairs, le cerveau corrige donc la nuance apporté par l''ombre et "éclaircie" la zone B.\r\n    L''addition de ces deux facteurs crée une illusion impressionnante est impossible à contourner : vous savez bien que c''est une illusion mais pourtant vous n''arrivez pas à vous convaincre que les deux zones sont rigoureusement identiques.\r\n', '', 'illusions'),
(5, 'lignespiano', '      Vous êtes persuadés que les lignes sont courbées, et bien détrompez vous, elles sont bien rectilignes. Vérifiez par vous même, en apposant une règle au dessous de la ligne.\r\n      Explication: L''image physique formée au fond de l''oeil sur la rétine, analysée point par point, est transmise fidélement au cerveau sous forme de messages codés. Ceci est en principe pareil pour tous. \r\n      Mais ce sont les zones visuelles du cerveau qui analysent ces signaux et nous donnent une représentation de l''objet perçu.\r\n      L''interprétation qu''en fait le cerveau peut parfois être ambiguë. Ces "erreurs" d''interprétation sont des illusions d''optique, qui ne sont pas perçues de la même façon par chacun d''entre nous (nous n''avons pas tous le même "vécu", ni les mêmes images en mémoire)...\r\n      Les illusions sont les témoins des mécanismes de la vision. Elles confirment que notre perception du monde est assez éloignée de la photographie. Elle est le résultat :\r\n      - d''une stimulation des photorécepteurs rétiniens, qui peuvent subir des phénomènes de fatigue.\r\n      - et surtout d''une construction mentale, à partir des messages nerveux reçus, parfois erronés. Le cerveau cherche à mettre du sens partout, même là où il n''y en a pas. Alors, il en fait trop, amplifiant les contrastes, créant contours, couleurs, perspectives,\r\n      reliefs, mouvements, en fonction de ce qu''il connaît. En effet, malgré une organisation générale commune du cortex visuel, les apprentissages et le vécu diffèrent d''une personne à l''autre, d''où une sensibilité variable à certaines illusions.\r\n      Le cortex visuel occupe le lobe occipital du cerveau et est chargé de traiter les informations visuelles. Le cortex visuel couvre le lobe occipital, sur les faces latérales et internes, et empiète sur le lobe pariétal et le lobe temporal.\r\n', '', 'illusions'),
(7, 'le cube fou', 'ce cube rend vraiment fou .... http://www.google.fr', '', 'mysteres');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(10) NOT NULL,
  `mail` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `nom`, `texte`, `tel`, `mail`) VALUES
(1, 'JEFF', 'coucou super ton site', 664068263, 'dodompa@live.fr'),
(2, 'LE HACKER', 'delete * from message ;', 0, 'dodompa@live.fr');

-- --------------------------------------------------------

--
-- Structure de la table `modifier`
--

CREATE TABLE `modifier` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `modifier`
--

INSERT INTO `modifier` (`id`, `date`, `id_article`, `id_user`) VALUES
(65, '2016-05-18 00:00:00', 2, 8),
(66, '2016-05-11 00:00:00', 1, 8),
(73, '2016-05-08 09:55:31', 7, 8),
(82, '2016-05-09 11:32:06', 7, 8),
(83, '2016-05-09 11:44:22', 7, 9);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `typecompte` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `abonnement` tinyint(1) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `typecompte`, `abonnement`, `avatar`) VALUES
(2, 'philippe', 'Phil-2016', 'admin', 1, 'tournesol.png'),
(3, 'levanball', 'dragon', 'user', 0, ''),
(5, 'user', 'user', 'user', 0, 'no-ava.png'),
(6, 'gilou', 'gilou', 'user', 0, ''),
(8, 'admin', 'admin1', 'admin', 0, 'tournesol.png'),
(9, 'franck', 'dragon', 'admin', 0, 'haddock.png'),
(10, 'l''enflure', '&é"''(-', 'user', 0, ''),
(11, 'la crêpe', '123456', 'user', 0, ''),
(14, 'le "fou"', '123456', 'user', 0, ''),
(18, 'l&#039;enpafer', '&amp;é&quot;&#039;(-', 'admin', 0, ''),
(31, 'francky', '', 'user', 0, 'me.png'),
(44, 'tintin', 'dragon', 'admin', 1, 'tintin.png'),
(46, 'titi', 'Bonjour33', 'user', 0, 'no-ava.png'),
(47, 'loulou', 'Bonjour33', 'user', 0, 'no-ava.png'),
(48, 'levann', 'Dragon18', 'admin', 0, 'tournesol.png');

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
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modifier`
--
ALTER TABLE `modifier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `modifier`
--
ALTER TABLE `modifier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `modifier`
--
ALTER TABLE `modifier`
  ADD CONSTRAINT `rel_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rel_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
