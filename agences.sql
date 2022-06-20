-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 juin 2022 à 12:49
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agences`
--

-- --------------------------------------------------------

--
-- Structure de la table `agences`
--

CREATE TABLE `agences` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lon` decimal(10,8) NOT NULL,
  `description` varchar(100) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `agences`
--

INSERT INTO `agences` (`id`, `nom`, `lat`, `lon`, `description`, `adresse`, `type`) VALUES
(1, 'protection civile De chlef', '36.17175595', '1.34842077', '', 'chlef', 'protection civile'),
(2, 'protection civile De tenes', '36.50987026', '1.30621384', '', 'tenes', 'protection civile'),
(3, 'protection civile De sendjas', '36.07014969', '1.39476997', '', 'Sendjas', 'protection civile'),
(4, 'protection civile De Ouled Ben Abdelkader', '36.01879506', '1.27469238', '', 'Ouled Ben Abdelkader', 'protection civile'),
(5, 'protection civile De  OuadFooda', '36.18640128', '1.52731352', '', 'OuadFooda', 'protection civile '),
(6, 'protection civile De Abu El Hassan', '36.41448089', '1.19480513', '', 'Abu El Hassan', 'protection civile'),
(7, 'protection civile de Ouled Fares', '36.23531945', '1.24688319', '', 'Ouled Fares', 'protection civile'),
(8, 'protection civile de Beni Rached', '36.27847243', '1.51733552', '', 'Beni Rached', 'protection civile'),
(9, 'protection civile de Sidi Akkacha', '36.46572643', '1.30922602', '', 'Sidi Akkacha', 'protection civile'),
(10, 'protection civile de Ain merrane', '36.16052975', '0.97338434', '', ' Ain merrane', 'protection civile'),
(11, '  protection civile de Beni houa', '36.53691131', '1.59258732', '', 'Beni houa', 'protection civile'),
(12, 'protection civile de  Bouzeghaia', '36.33176480', '1.24235805', '', 'Bouzeghaia', 'protection civile'),
(13, 'protection civile De Taougrit', '36.24483265', '0.92404865', '', 'Taougrit', 'protection civile'),
(14, 'Hôpital Ouled Mohammed', '36.15772463', '1.36209814', '', 'Ouled Mohammed', 'Hôpital '),
(15, 'Hôpital  Sisters Bedj', '36.15921600', '1.32106800', '', 'Ben souna ,chlef', 'Hôpital '),
(16, 'Hôpital  Hay El Badr-Chorfa', '36.14601742', '1.31332013', '', 'Chorfa', 'Hôpital '),
(17, 'Hôpital de Sobha', '36.10561800', '1.10460400', '', 'Sobha', 'Hôpital '),
(18, 'Hôpital D\'aïn Merane', '36.15950200', '0.96590400', '', 'Ain merane', ' Hôpital'),
(19, ' Hôpital Merouane abed', '36.20423812', '1.26119895', '', 'Chettia', ' Hôpital'),
(20, ' Hôpital Zirout youcef', '36.50316200', '1.29401900', '', 'Tenes', 'Hôpital'),
(21, 'Hôpital Ahmed Bouras', '36.51245375', '1.30680667', '', ' Ténès ', 'Hôpital'),
(22, 'Pharmacie Mr CHEMAMI', '36.16624908', '1.33406177', '', 'chlef', 'pharmacie'),
(23, 'Pharmacie ABBOURA', '36.16314531', '1.32079481', '', 'Hay Bensounna ,Chlef', 'pharmacie'),
(24, 'Azhari Pharmacie', '36.15531897', '1.32576763', '', 'chlef', 'pharmacie'),
(25, 'PHARMACIE AOUAK ABDERRAHIM', '36.17582952', '1.32422268', '', 'Hay El Houria ,Chlef', 'pharmacie'),
(26, 'Pharmacie Meknassi Fouad', '36.16734671', '1.33217149', '', 'Hotel El-Wancharissi', 'pharmacie'),
(27, 'PHARMACIE TARFAOUI NABIL', '36.19208981', '1.24894932', '', 'Rte tenes ,Chettia', 'pharmaice'),
(28, 'Pharmcie boubkeur Mohamed', '36.32596521', '1.14296435', '', 'Hay lycee n° 54 Tadjena', 'pharmacie'),
(29, 'Pharmacie Madjid Mossadek', '36.35505840', '1.00733724', '', 'Moussadek', 'pharmacie'),
(30, 'Pharmacie Dr BOUTHELDJA Kh', '36.18079998', '1.49063808', '', 'Zebabdja Oued Fodda', 'pharmacie');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(11) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `fname`, `sname`, `email`, `password`, `contact`) VALUES
(1, ' ahmed ', ' Allergologie ', ' ahmed@gmail.com  ', '', 647487432);

-- --------------------------------------------------------

--
-- Structure de la table `agentp`
--

CREATE TABLE `agentp` (
  `id_agent` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(11) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `agentp`
--

INSERT INTO `agentp` (`id_agent`, `fname`, `email`, `password`, `contact`) VALUES
(1, 'mohammed', 'mohammed@gmail.com ', '', 7172782);

-- --------------------------------------------------------

--
-- Structure de la table `cat`
--

CREATE TABLE `cat` (
  `id_cat` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cat`
--

INSERT INTO `cat` (`id_cat`, `nom`, `status`) VALUES
(3, 'cas Maladie', 1);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `usermsg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `incident`
--

CREATE TABLE `incident` (
  `id` int(5) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `dsc` varchar(250) NOT NULL,
  `repair` varchar(100) NOT NULL,
  `nbrvctm` int(3) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lon` decimal(10,8) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `incident`
--

INSERT INTO `incident` (`id`, `cat`, `dsc`, `repair`, `nbrvctm`, `lat`, `lon`, `status`) VALUES
(0, 'maladie', 'huasgfkasjd', 'pkjoikjmlk', 4, '36.08989680', '1.79843300', 0);

-- --------------------------------------------------------

--
-- Structure de la table `rate`
--

CREATE TABLE `rate` (
  `id` int(5) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_rating` int(6) NOT NULL,
  `user_review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'amal', 'chich.nour@gmail.com', 'amalmad2002'),
(2, 'oumaimaf', 'jjjhg09@jhuyf.jyg', '0000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agences`
--
ALTER TABLE `agences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agentp`
--
ALTER TABLE `agentp`
  ADD PRIMARY KEY (`id_agent`);

--
-- Index pour la table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agences`
--
ALTER TABLE `agences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `agentp`
--
ALTER TABLE `agentp`
  MODIFY `id_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cat`
--
ALTER TABLE `cat`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
