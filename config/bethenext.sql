-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 16 déc. 2019 à 10:36
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
('fass', 'yass', 'carrefour69100@gmail.com', 'azaazzazazezra'),
('Jules', 'Lelouche', 'j.l@gmail.com', 'Je teste ta BDD'),
('Noble', 'Jérémy', 'pat.moboutou@gmail.com', 'papapapapapaaaaapapapapapa'),
('aaaaa', 'Jérémy', 'pat.moboutou@gmail.com', 'cul'),
('aaaaa', 'aaaaaaaaaaaa', 'pat.moboutou@gmail.com', 'aa'),
('Noble', 'Jérémy', 'paul.pierce@gmail.com', 'zzzzzzzzzzzz');

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
  `p_full` varchar(255) NOT NULL,
  `p_hover` varchar(500) NOT NULL,
  `p_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `player`
--

INSERT INTO `player` (`p_nom`, `p_prenom`, `p_birth`, `p_club`, `p_img`, `p_full`, `p_hover`, `p_id`, `s_id`) VALUES
('Cristiano', 'Ronaldo', '1985-02-05', 'Juventus Football Club', 'https://media2.woopic.com/api/v1/images/504%2Fmedia365-sport-news%2F2f1%2F409%2F1140a462f378290263df97002b%2Fcristiano-ronaldo-frappe-son-enfant-avec-un-trophee%7C9116488_cristiano-ronaldo-1-1024x425_ext.jpg?format=980x450&facedetect=1&quality=85', 'https://img.pngio.com/cristiano-ronaldo-png-transparent-images-pictures-photos-png-arts-cristiano-ronaldo-pngs-hd-1280_1080.png', 'https://amp.thenational.ae/image/policy:1.801169:1544442749/sp11-Cristiano-Ronaldo.jpg?f=16x9&w=1200&$p$f$w=2a62836', 2, 2),
('LeBron', 'James', '1984-12-30', 'Los Angeles Lakers', 'https://cdn.vox-cdn.com/thumbor/G8Vty8xReaUMC3xLti_ysvwDf4g=/0x0:4150x2767/1200x800/filters:focal(1226x679:1890x1343)/cdn.vox-cdn.com/uploads/chorus_image/image/65163856/GettyImages_1094200282.0.jpg', 'https://retohercules.com/images/allen-iverson-png-7.png', 'https://images.radio-canada.ca/q_auto,w_1250/v1/ici-info/sports/16x9/lebron-james-basketball-lakers-los-angeles.jpg', 3, 1),
('Da Silva Santos Jr', 'Neymar', '1992-02-05', 'Paris Saint Germain', 'https://footradio.com/wp-content/uploads/2019/09/Icon_BAP_220919_93_75.jpg', 'https://www.freeiconspng.com/uploads/neymar-png-athlete-24.png', 'https://images.daznservices.com/di/library/GOAL/63/1a/neymar-psg-liverpool-uefa-champions-league-28112018_uy6anrxcvr8r12m3bxqs0v4vm.jpg?t=1540878583&quality=100', 5, 2),
('Harden', 'James', '1989-08-26', 'Houston Rockets', 'http://www.sport24info.ma/wp-content/uploads/2019/03/James-Harden.jpg', 'https://www.stickpng.com/assets/images/58456780869fe441e3fadea7.png', 'https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F191008151032-james-harden.jpg', 6, 1),
('Brady', 'Tom', '1977-08-03', 'Patriots', 'https://usatftw.files.wordpress.com/2019/11/ap-patriots-eagles-football-4.jpg?w=1000&h=600&crop=1', 'http://pluspng.com/img-png/tom-brady-png-download-1195x1593-png-450.png', 'https://sportshub.cbsistatic.com/i/r/2019/12/09/0b5280c8-1952-414d-adfd-44e035727f64/thumbnail/1200x675/aa2301a2601854d24782ab14c59512ac/tom-brady-patriots.jpg', 7, 4),
('Mbappé', 'Kylian', '1998-12-20', 'Paris Saint Germain', 'http://www.allpaname.fr/wp-content/uploads/2018/10/i-1.jpg', 'https://paris-supporters.fr/wp-content/uploads/2019/07/mbappe-champion.jpg', 'https://footradio.com/wp-content/uploads/2019/01/Kylian-Mbappe.jpg', 8, 2),
('Antetokoúnmpo', 'Giannis', '1994-12-06', 'Milwaukee Bucks', 'https://img.bleacherreport.net/img/images/photos/003/830/747/hi-res-9ec52efc79e349bfb3ca48aff3bdc458_crop_north.jpg?h=533&w=800&q=70&crop_x=center&crop_y=top', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPElh4xGE4nX5EoqGOo0-vJROnSikYvXbWP6LE7kzUpVb2sNMR', 'https://www.parlons-basket.com/wp-content/uploads/2019/12/incroyable-stat-giannis-antetokounmpo.jpg', 10, 1),
('Rodgers', 'Aaron', '1983-12-02', 'Green Bay Packers', 'https://lasueur.com/wp-content/uploads/2017/12/Aaron-Rodgers.jpg', 'https://usathss.files.wordpress.com/2019/09/xxx-a01-rodgers-e1567705706252.jpg', 'https://skystatement.com/wp-content/uploads/2019/11/44937/aaron-rodgers-is-the-49ers-biggest-mistake.jpeg-26', 11, 4),
('Gronkowski', 'Rob', '1989-05-14', 'New England Patriots', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Rob_Gronkowski.JPG/800px-Rob_Gronkowski.JPG', 'https://lasueur.com/wp-content/uploads/2018/04/Rob-Gronkowski-NFL-patriots.jpg', 'https://answersafrica.com/wp-content/uploads/2018/09/Rob-Gronk-111-640x421.jpeg', 12, 4),
('Crosby', 'Sidney ', '1987-08-07', 'Pittsburgh Penguins', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Sidney_Crosby_1_2017-05-25_%28Edited%29.jpg/220px-Sidney_Crosby_1_2017-05-25_%28Edited%29.jpg', 'https://rdsimages.cookieless.ca/polopoly_fs/1.7010825.1573743327!/img/httpImage/image.jpg_gen/derivatives/main-xxxhdpi/image.jpg', 'https://i.ytimg.com/vi/MqQeVzhrS0k/maxresdefault.jpg', 13, 3),
('Kane', 'Patrick', '1988-11-19', 'Chicago Blackhawks', 'https://img.s-msn.com/tenant/amp/entityid/BBgzGRT.img?x=1&y=1&f=PNG&h=336&w=320&m=5&q=60&b=white', 'https://cdn.vox-cdn.com/thumbor/7iqQmqhyzyhL6FGW2Uv2SZedTyM=/0x0:2308x2668/1200x800/filters:focal(861x663:1229x1031)/cdn.vox-cdn.com/uploads/chorus_image/image/62803675/1076441838.jpg.0.jpg', 'https://blackhawkup.com/wp-content/uploads/usat-images/2017/03/9928675-nhl-anaheim-ducks-at-chicago-blackhawks.jpeg', 14, 3),
('Ovetchkine ', 'Aleksandr ', '1985-09-17', 'Washington Capitals', 'https://s.yimg.com/ny/api/res/1.2/gdhG3QtFD.rmlV24GkeIiw--~A/YXBwaWQ9aGlnaGxhbmRlcjtzbT0xO3c9NzQ0O2g9NDk2/http://media.zenfs.com/en/homerun/feed_manager_auto_publish_494/bff536b0e7b7527d4f21b3ea4c4f10bb', 'https://arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/J556GPQSJQI6VESMWNGQTO6JJA.jpg', 'http://images.4ever.eu/data/download/gens/athletes/aleksandr-ovetchkine,-joueur-de-hockey-229488.jpg?no-logo', 15, 3);

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
  `usr_slug` text NOT NULL,
  `usr_email` varchar(100) NOT NULL,
  `usr_password` varchar(100) NOT NULL,
  `usr_status` int(1) NOT NULL,
  `id_sport` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`usr_id`, `usr_prenom`, `usr_nom`, `usr_slug`, `usr_email`, `usr_password`, `usr_status`, `id_sport`) VALUES
(2, 'Jérémy', 'Noble', '', 'noble.jka@gmail.com', '$2y$10$Yd.XxrGU9L7sAb8TDHHWw.BCxOCBlrWIoCWNhdmG0Ykmg5wLFmPW.', 1, 1),
(3, 'Jérôme', 'Brovedani', '', 'jerome.brovedani@gmail.com', '$2y$10$GI/ceNZue82u3ws5AswU3Of9DPvmnWK.RFX3upM2Mv2vFNFdNtwKO', 1, 2),
(4, 'Yassine', 'Fassi', '', 'yassine.fassi@gmail.com', '$2y$10$K6DKig037mbJfK/H9zgcMO6312PzlQgO3hmZkwrRpnRJIOuaL9WqO', 1, 3),
(5, 'Anthony', 'Debuire', '', 'anthony.debuire@gmail.com', '$2y$10$J/2pfRSaWsz0.Nw4vCtvv.lCk1wYlDwHZL1HjMY0NK8hBA0R5Hgt2', 1, 4),
(9, 'Jean', 'Reno', '', 'jean.reno@gmail.com', '$2y$10$BKCy4N8iqKdJTrJrWIcyhu4IqCoS56dPLsSHWSFA9n3Bbjrx3F92u', 0, 4),
(10, 'Neymar', 'Da Silva Santos', '', 'neymar@psg.fr', '$2y$10$Q.lLNzNDDZIZ/YwK2bBOHuOKveAKNOXd.akUUWURCWvIF5QbX2Msy', 0, 2),
(14, 'test', 'test', 'test', 'test@test.fr', '$2y$10$hTqEXZ5WV1iIHhlKEFD.rugEvJBvbMGAPEtGYUPyrCtdyDGerdE2m', 1, 2);

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
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `sport`
--
ALTER TABLE `sport`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
