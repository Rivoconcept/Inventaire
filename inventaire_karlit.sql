-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 30 sep. 2021 à 16:31
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `inventaire_karlit`
--

-- --------------------------------------------------------

--
-- Structure de la table `ecran`
--

CREATE TABLE `ecran` (
  `id` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Marque` varchar(50) NOT NULL,
  `Annee` varchar(50) NOT NULL,
  `Etat` varchar(50) NOT NULL,
  `Matricule` varchar(20) NOT NULL,
  `Utilisateur` varchar(50) NOT NULL,
  `Affectation` varchar(50) NOT NULL,
  `Supervision` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ecran`
--

INSERT INTO `ecran` (`id`, `Code`, `Marque`, `Annee`, `Etat`, `Matricule`, `Utilisateur`, `Affectation`, `Supervision`) VALUES
(6, '1', '1', '1', '1', '1', '1', '12', '10'),
(7, '2', '3', '3', '2', '2', '2', '2', '4');

-- --------------------------------------------------------

--
-- Structure de la table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Nom_PC` varchar(50) NOT NULL,
  `Marque` varchar(50) NOT NULL,
  `CPU` varchar(20) NOT NULL,
  `RAM` int(2) NOT NULL,
  `Annee` varchar(20) NOT NULL,
  `Etat` varchar(50) NOT NULL,
  `Matricule` varchar(50) NOT NULL,
  `Nom_utilisateur` varchar(100) NOT NULL,
  `Affectation` varchar(50) NOT NULL,
  `Supervision` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `laptop`
--

INSERT INTO `laptop` (`id`, `Code`, `Nom_PC`, `Marque`, `CPU`, `RAM`, `Annee`, `Etat`, `Matricule`, `Nom_utilisateur`, `Affectation`, `Supervision`) VALUES
(162, '1', '2', '3', '4', 0, '5', '6', '7', '8', '9', '5'),
(165, '1', '2', '3', '3', 0, '1', '5', '5', '3', '1', '7'),
(172, '1', '2', '3', '4', 0, '5', '6', '7', '8', '9', '7'),
(173, '10', '9', '8', '7', 0, '4', '5', '6', '1', '2', '3'),
(178, '9', '8', '7', '4', 7, '5', '6', '1', '3', '2', '0'),
(179, '1', '2', '3', '1', 2, '1', '3', '2', '1', '3', '1'),
(180, '2', '1', '3', '1', 2, '1', '31', '32', '131', '31', '1'),
(181, '321', '31', '231', '31', 2, '313', '13', '1', '321', '31', '3'),
(182, '1', '2', '3', '1', 2, '1', '', '1', '', '', '3'),
(183, '4', '5', '2', '1', 3, '1', '2', '1', '3', '1', '2'),
(184, '1', '2', '3', '1', 52, '4', '', '6', '4', '65', '56'),
(185, '21', '21', '321', '2313', 213, '213', '213', '132', '13', '1', '21'),
(195, '1', '2', '3', '4', 5, '6', '7', '8', '9', '10', '11'),
(196, '1', '2', '3', '1', 3, '1', '2', '1', '3', '1', '1'),
(197, '1', '2', '3', '1', 2, '3', '1', '3', '1', '2', '1'),
(201, '', '', '', '', 0, '', '', '', '', '', ''),
(202, '1', '1', '1', '1', 1, '1', '1', '1', '1', '1', '1'),
(203, '1', '', '1', '', 0, '', '1', '1', '', '1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `idaccess` int(11) NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `mdp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`idaccess`, `login`, `mdp`) VALUES
(18, 'rivoinfo.karlit@gmail.com', '$argon2i$v=19$m=1024,t=2,p=2$dnpoc3BxcENCLkg3VG1VNg$vKWpkZw4cVYdWFBn6Mk7lh4gS5+Yg4Z++dDnZOEtTIE'),
(19, 'stooherou2@gmail.d', '$argon2i$v=19$m=1024,t=2,p=2$MWVLSWFSN05Yb2VrODlvbQ$zrBzz4z8hkD8rm7BjoUYB60xlEUemoSF8IPc2tSwZVQ'),
(20, 'harivel.rivo@gmail.com', '$argon2i$v=19$m=1024,t=2,p=2$YUZZMVR4VTlVOFJXVlA1Yg$e6aPYgPiJAZIzyFT8FAsRS1EMDGNBWOrzCwLj1uhGN4'),
(21, 'harivel.rivo@gmail.com', '$argon2i$v=19$m=1024,t=2,p=2$VWtrWUVCZkV3REFkay52Rg$nMYBFJqOoRbWgrmN9Xds+BnThCACz0nlnq2xzQs/5YY'),
(22, 'stooherou2@gmail.d', '$argon2i$v=19$m=1024,t=2,p=2$bS8ybUpLbnlrbDE0cm0wLw$lObR/qPJlrjwaXB6yruLZh0wSfFu75Afk0/oN2viXD0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ecran`
--
ALTER TABLE `ecran`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`idaccess`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ecran`
--
ALTER TABLE `ecran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `idaccess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
