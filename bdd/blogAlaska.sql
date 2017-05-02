-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 02 Mai 2017 à 17:53
-- Version du serveur :  10.0.30-MariaDB-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `blogAlaska`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
`id` int(10) unsigned NOT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `niveau` int(2) unsigned DEFAULT NULL,
  `idCommentaire` int(11) DEFAULT NULL,
  `idEpisode` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `auteur`, `contenu`, `date`, `niveau`, `idCommentaire`, `idEpisode`) VALUES
(3, 'Titi', 'Une réponse à un commentaire !!!!', '2017-05-02 08:27:25', NULL, NULL, 1),
(4, 'toto', 'tseiturnas', NULL, NULL, NULL, 5),
(5, 'tutu', 'stenraueirnaietrsn', '2017-05-02 17:48:59', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Structure de la table `episode`
--

CREATE TABLE IF NOT EXISTS `episode` (
`id` int(10) unsigned NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `episode`
--

INSERT INTO `episode` (`id`, `titre`, `contenu`, `date`) VALUES
(1, 'Episode TEST', '<p>emiuetmiauetsiuaeriauetiuagh.ihetisraetuinaetisurnaetiuanretiuaretiaueui</p>\r\n<p>iuts<em>eiauretmiauetisunaetisaurneiune</em></p>\r\n<p>uiaeiutes<strong>nriuameuimaeiuteusai</strong></p>', '2017-04-10 00:00:00'),
(2, 'Episode 2', '<p>Nouveau test de fonctionnement avec l''affichage d''une alerte pour la modification de cet &eacute;pisode.</p>', '2017-04-19 12:25:11'),
(5, 'Nouvel épisode', '<p>sr,tem,etuim,tiusaeuitraeuitaegiuheuirnteruiseiunareiua</p>\r\n<p>ietsauireiunaestiaumesiauteruinatr</p>', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
 ADD PRIMARY KEY (`id`), ADD KEY `idEpisode` (`idEpisode`);

--
-- Index pour la table `episode`
--
ALTER TABLE `episode`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `episode`
--
ALTER TABLE `episode`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`idEpisode`) REFERENCES `episode` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
