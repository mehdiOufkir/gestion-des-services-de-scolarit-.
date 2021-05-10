-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 mai 2021 à 07:04
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(30) NOT NULL,
  `cin` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `date_inscription` date NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `modules` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom_complet`, `cin`, `date_naissance`, `filiere`, `date_inscription`, `niveau`, `modules`) VALUES
(48, 'fouzia darif', 'T256398', '1971-02-09', 'smp', '2018-02-09', 'bac +2', 'programmation 1, economie'),
(49, 'hamza lkhder', 'B268444', '1996-03-09', 'sma', '2018-02-09', 'bac+3', 'AI, deep learning'),
(50, 'mohcine raki', 'c236522', '1996-02-09', 'smc', '2019-01-09', 'bac+5', 'optique 1 , architecture'),
(51, 'adil fahmi', 'B26548', '1999-02-09', 'smi', '2017-02-09', 'bac+3', 'structure ,electronique');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `nom_module` varchar(50) NOT NULL,
  `coefficient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id`, `nom_module`, `coefficient`) VALUES
(7, 'statistique', 4),
(8, 'deep learning', 4),
(9, 'analyse', 3),
(10, 'structure', 3),
(11, 'physique', 4);

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

CREATE TABLE `professeurs` (
  `id` int(11) NOT NULL,
  `matricule` int(50) NOT NULL,
  `nom_complet` varchar(50) NOT NULL,
  `date_inscription` date DEFAULT NULL,
  `modules_enseigne` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `professeurs`
--

INSERT INTO `professeurs` (`id`, `matricule`, `nom_complet`, `date_inscription`, `modules_enseigne`) VALUES
(8, 23541258, 'othman salamat', '2018-01-09', 'gestion , statistique '),
(9, 5413158, 'mehdi alby', '2017-02-09', 'économie , structure'),
(10, 5423654, 'Mouhcine dahsis', '2019-07-11', 'deep learning ,AI'),
(11, 326597, 'chahine', '2017-08-09', 'electronique, programmation'),
(12, 564262, 'said daghlouf', '2012-03-09', 'programmation 1, analyse'),
(13, 3221486, 'aziz barakate', '2013-02-09', 'architecture , integration'),
(14, 235449, 'hayat nahid', '2015-04-09', 'optique 1 , les matrices'),
(17, 454652, 'said filali', '2018-02-10', 'gestion , AI');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professeurs`
--
ALTER TABLE `professeurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricule` (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `professeurs`
--
ALTER TABLE `professeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
