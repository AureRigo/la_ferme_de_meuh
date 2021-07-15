-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 15 Juin 2021 à 15:29
-- Version du serveur :  5.7.34-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `la_ferme_de_meuh`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `login_admin` varchar(10) NOT NULL,
  `password_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login_admin`, `password_admin`) VALUES
(1, 'Jacky', 'XT67hX6yg'),
(2, 'Michel', '3D4etYS9d');

-- --------------------------------------------------------

--
-- Structure de la table `Fermes`
--

CREATE TABLE `Fermes` (
  `ID_Ferme` int(2) NOT NULL,
  `Adresse` varchar(200) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `Mail` varchar(40) NOT NULL,
  `FK_vache` int(4) NOT NULL,
  `FK_fermier` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Fermes`
--

INSERT INTO `Fermes` (`ID_Ferme`, `Adresse`, `Telephone`, `Mail`, `FK_vache`, `FK_fermier`) VALUES
(1, '144 route des Lanches 73400 Marthod', '0479554664', 'meuhdemarthod@gmail.com', 3, 1),
(2, '125 route du Tuyé 25650 La Chaud de Gilley', '0381235689', 'meuhdegilley@gmail.com', 3, 2),
(3, '165 rue du fromage, 61120 Camembert', '0212345678', 'meuhdecamembert@gmail.com', 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `Ferminer`
--

CREATE TABLE `Ferminer` (
  `ID_fermier` int(2) NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `FK_ferme` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Ferminer`
--

INSERT INTO `Ferminer` (`ID_fermier`, `Nom`, `Prenom`, `FK_ferme`) VALUES
(1, 'Peiraz', 'André', 1),
(2, 'Quenot', 'Jacques', 2),
(3, 'Dupont', 'Julie', 3);

-- --------------------------------------------------------

--
-- Structure de la table `Goodies`
--

CREATE TABLE `Goodies` (
  `ID_goodies` int(4) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Nombres` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Goodies`
--

INSERT INTO `Goodies` (`ID_goodies`, `Type`, `Nombres`) VALUES
(1, 'Peluche', 1234),
(2, 'stylo', 2345),
(3, 'tee-shirt', 3456);

-- --------------------------------------------------------

--
-- Structure de la table `Parrain`
--

CREATE TABLE `Parrain` (
  `ID_parrain` int(4) NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(40) NOT NULL,
  `Telephone` varchar(10) DEFAULT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `FK_vache` int(4) DEFAULT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cgu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Parrain`
--

INSERT INTO `Parrain` (`ID_parrain`, `Nom`, `Prenom`, `adresse`, `cp`, `ville`, `Telephone`, `mail`, `FK_vache`, `login`, `password`, `cgu`) VALUES
(1, 'Durand', 'Jacqueline', '123 Monté de Fourevière 69000 ', '69000', 'Lyon', NULL, 'jacqueline.durand@gmail.com', 1, 'JackyD', '9iSKi6F6z', 1),
(2, 'Fournier', 'Alain', '3 rue Battant, ', '25000', 'Besançon', NULL, 'alainfournier25@gmail.com', 2, 'fournira', '7cjP9QeH7', 1),
(3, 'Dufour', 'Marie', '3 place de la Cathédrale', '67000', 'Strasbourg', NULL, 'marie.dufour@gmail.com', 2, 'Marie', '5vXh3Ue9R', 1),
(4, 'Petit', 'Jean-Paul', '25 rue du Pastis ', '13000', 'Marseille', NULL, 'jp.petit@gmail.com', 3, 'JPP', 'B77zSga6C', 1),
(5, 'Gros', 'Roger', '25 Faubourg Saint-Honoré', '75000', 'Paris', '0123456789', 'gros.roger@gmail.com', 4, 'Rogercampagnard', 'Mb83GgkV7', 1),
(6, 'Dummoulin', 'Pierre', '15 rue du moulin', '25100', 'Pont-les-Moulins', '0123456789', 'dumoulin@yopmail.com', 2, 'Pierrot', '4Sg5VA4BqknLmnX7', 1),
(7, 'Dupré', 'Gertrude', '45 Route Nationale', '61240', 'Lignères', '0231456789', 'gertrude.dupre@yopmail', NULL, 'Dupreg', '4h5Js563BbXvtJFt', 1),
(8, 'Madou', 'Jean-Girard', '5 Rue Centrale', '73000', 'Bassens', '0479854613', 'madou@yopmail.com', NULL, 'JGM', 'QUmS65bMCfCgNr82', 1),
(9, 'Crosse', 'Berthe', '25 Avennue Anatole France', '93000', 'Saint-Denis', '0132456789', 'berthe@yopmail.com', NULL, 'Bertha', '3nwn6YTAmSnJSdap', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vaches`
--

CREATE TABLE `vaches` (
  `Nom` varchar(20) NOT NULL,
  `Race` varchar(20) NOT NULL,
  `Age` int(2) NOT NULL,
  `Descriptif` varchar(200) NOT NULL,
  `Photo` varchar(40) DEFAULT NULL,
  `fk_Ferme` int(2) NOT NULL,
  `id_vache` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `vaches`
--

INSERT INTO `vaches` (`Nom`, `Race`, `Age`, `Descriptif`, `Photo`, `fk_Ferme`, `id_vache`) VALUES
('Marguerite', 'Montbéliarde', 12, 'Marguerite est une vahce Montbéliarde de 12 ans', 'Marguerite.jpg', 1, 1),
('Noirreaude', 'Angus', 13, 'Noireaude est une vache Angus de 13 ans qui a échappé à l’abattoir.', 'Noiraude.jpg', 1, 2),
('Noisette', 'Tarrine', 12, 'Noisette est une vache tarrine de 12 ans.', 'Noisette.jpeg', 1, 3),
('Réglisse', 'Holstein', 13, 'Réglisse est une vache Holstein de 13 ans qui a produit du camembert.', 'Réglisse.jpeg', 2, 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `Fermes`
--
ALTER TABLE `Fermes`
  ADD PRIMARY KEY (`ID_Ferme`);

--
-- Index pour la table `Ferminer`
--
ALTER TABLE `Ferminer`
  ADD PRIMARY KEY (`ID_fermier`);

--
-- Index pour la table `Goodies`
--
ALTER TABLE `Goodies`
  ADD PRIMARY KEY (`ID_goodies`);

--
-- Index pour la table `Parrain`
--
ALTER TABLE `Parrain`
  ADD PRIMARY KEY (`ID_parrain`);

--
-- Index pour la table `vaches`
--
ALTER TABLE `vaches`
  ADD PRIMARY KEY (`id_vache`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Fermes`
--
ALTER TABLE `Fermes`
  MODIFY `ID_Ferme` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Ferminer`
--
ALTER TABLE `Ferminer`
  MODIFY `ID_fermier` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Goodies`
--
ALTER TABLE `Goodies`
  MODIFY `ID_goodies` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Parrain`
--
ALTER TABLE `Parrain`
  MODIFY `ID_parrain` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `vaches`
--
ALTER TABLE `vaches`
  MODIFY `id_vache` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
