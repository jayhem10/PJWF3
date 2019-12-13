-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 13 déc. 2019 à 17:04
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bethenext`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Mail` text NOT NULL,
  `Message` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`Nom`, `Prenom`, `Mail`, `Message`) VALUES
('Deschamps', 'Didier', 'dd@deschamps.fr', 'Bonjour, c\'est un test de message'),
('Pedro', 'Almodovar', 'pedro@live.fr', 'C\'est une question que je vous pose aujourd\'hui, repondez-moi !!'),
('fassi', 'yassine', 'carrefour69100@gmail.com', 'message de contact'),
('Utilisateur', 'user', 'aaa@aaa.fr', 'aaaaaaaaaaaaa'),
('fass', 'yass', 'carrefour69100@gmail.com', 'azaazzazazezra');

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE `player` (
  `p_nom` text NOT NULL,
  `p_prenom` text NOT NULL,
  `p_birth` date NOT NULL,
  `p_club` text NOT NULL,
  `p_img` text NOT NULL,
  `p_sport` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `player`
--

INSERT INTO `player` (`p_nom`, `p_prenom`, `p_birth`, `p_club`, `p_img`, `p_sport`, `p_id`, `s_id`) VALUES
('Cristiano', 'Ronaldo', '1985-02-05', 'Juventus Football Club', '', 0, 2, 2),
('LeBron', 'James', '1984-12-30', 'Los Angeles Lakers', '', 0, 3, 1),
('LeBron', 'James', '1984-12-30', 'Los Angeles Lakers', '', 0, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

CREATE TABLE `sport` (
  `s_id` int(11) NOT NULL,
  `nom_sport` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_sport` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sport`
--

INSERT INTO `sport` (`s_id`, `nom_sport`, `img_sport`) VALUES
(1, 'Basketball', 'https://www.nbcsports.com/northwest/sites/csnnw/files/2016/06/19/usatsi_9339553.jpg'),
(2, 'Football', 'https://www.etftrends.com/wp-content/uploads/2019/09/ETF-Provider-SoFi-Purchases-Naming-Rights-for-LA-Football-Stadium.jpg'),
(3, 'NHL', 'https://ocn-media.s3.amazonaws.com/1bf237cf-ebaa-4999-85ea-e759e2fa8b40.jpg'),
(4, 'NFL', 'https://assets.bwbx.io/images/users/iqjWHBFdfxIU/icA33Mne9RPk/v1/-1x-1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL,
  `usr_prenom` varchar(50) NOT NULL,
  `usr_nom` varchar(50) NOT NULL,
  `usr_email` varchar(100) NOT NULL,
  `usr_password` varchar(100) NOT NULL,
  `usr_status` int(1) NOT NULL,
  `id_sport` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`usr_id`, `usr_prenom`, `usr_nom`, `usr_email`, `usr_password`, `usr_status`, `id_sport`) VALUES
(2, 'Jérémy', 'Noble', 'noble.jka@gmail.com', '$2y$10$Yd.XxrGU9L7sAb8TDHHWw.BCxOCBlrWIoCWNhdmG0Ykmg5wLFmPW.', 1, 1),
(3, 'Jérôme', 'Brovedani', 'jerome.brovedani@gmail.com', '$2y$10$GI/ceNZue82u3ws5AswU3Of9DPvmnWK.RFX3upM2Mv2vFNFdNtwKO', 1, 2),
(4, 'Yassine', 'Fassi', 'yassine.fassi@gmail.com', '$2y$10$K6DKig037mbJfK/H9zgcMO6312PzlQgO3hmZkwrRpnRJIOuaL9WqO', 1, 3),
(5, 'Anthony', 'Debuire', 'anthony.debuire@gmail.com', '$2y$10$J/2pfRSaWsz0.Nw4vCtvv.lCk1wYlDwHZL1HjMY0NK8hBA0R5Hgt2', 1, 4),
(6, 'Jean', 'René', 'j.rene@gmail.com', 'admin', 0, 3),
(7, 'Jean', 'Nnnn', 'ffres@qsefsf.v', 'admin', 0, 1),
(8, 'Thomas', 'Champenois', 'th.champenois@gmail.com', 'admin', 0, 2),
(9, 'Jean', 'Reno', 'jean.reno@gmail.com', '$2y$10$BKCy4N8iqKdJTrJrWIcyhu4IqCoS56dPLsSHWSFA9n3Bbjrx3F92u', 0, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`p_id`);

--
-- Index pour la table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`s_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `player`
--
ALTER TABLE `player`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sport`
--
ALTER TABLE `sport`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
