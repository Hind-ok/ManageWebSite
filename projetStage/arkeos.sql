-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 13 juin 2023 à 15:44
-- Version du serveur : 5.7.36
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `arkeos`
--

-- --------------------------------------------------------

--
-- Structure de la table `machine`
--

DROP TABLE IF EXISTS `machine`;
CREATE TABLE IF NOT EXISTS `machine` (
  `idMachine` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) NOT NULL,
  `dateCreation` date NOT NULL,
  `idMarque` int(100) NOT NULL,
  `categoryPG` int(2) NOT NULL,
  `vignette` varchar(100) NOT NULL,
  `lienDeTelechargement` varchar(255) NOT NULL,
  `formatOffiGraph` int(2) NOT NULL,
  `detai1` varchar(30) NOT NULL,
  `detai2` varchar(30) NOT NULL,
  `detai3` varchar(30) NOT NULL,
  PRIMARY KEY (`idMachine`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `machine`
--

INSERT INTO `machine` (`idMachine`, `designation`, `dateCreation`, `idMarque`, `categoryPG`, `vignette`, `lienDeTelechargement`, `formatOffiGraph`, `detai1`, `detai2`, `detai3`) VALUES
(2, 'Multifonctions bizhub C658', '2023-06-07', 6, 2, 'mach1.jpg', 'rien', 1, 'A3', 'Noir et blanc', 'Manuel service');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `idMarque` int(11) NOT NULL AUTO_INCREMENT,
  `designationMar` varchar(40) NOT NULL,
  `dateDeCreation` date NOT NULL,
  `logoImage` varchar(60) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`idMarque`, `designationMar`, `dateDeCreation`, `logoImage`) VALUES
(1, 'Canon ', '2023-06-01', 'marq1.png'),
(2, 'Intimus', '2023-06-01', 'marq6.png'),
(3, 'Roland', '2023-06-01', 'marq3.png'),
(4, 'Riso', '2023-06-01', 'marq4.png'),
(29, 'Neopost', '2023-06-13', 'marq5.png'),
(6, 'KONICA MINOLTA', '2023-06-01', 'marq2.png'),
(7, 'Kodak alaris', '2023-06-01', 'marq7.png'),
(8, 'Quadient', '2023-06-06', 'marq12.png'),
(9, 'neolt Factory ', '2023-06-01', 'marq8.png');

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `idSlider` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`idSlider`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_roles`
--

DROP TABLE IF EXISTS `tbl_roles`;
CREATE TABLE IF NOT EXISTS `tbl_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id',
  `role` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT 'role_text',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(3, 'User');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(4) NOT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(28, 'kim', 'taehyung', 'kim@gmail.com', 'KIM123kim', 674716616, 3, 0, '2023-06-13 15:42:47', '2023-06-13 15:42:47'),
(23, 'Super', 'Admin', 'superAdmin@gmail.com', 'c0378efda34a3adc1df04e7da0f5b6173fada1c7', 674716616, 1, 0, '2023-06-08 10:34:24', '2023-06-08 10:34:24'),
(27, 'Alaoua', 'Abdelilah', 'adelilahAlaoua@gmail.com', 'ALAOUA123alaoua', 666666666, 1, 0, '2023-06-10 13:59:04', '2023-06-10 13:59:04'),
(22, 'hammadi', 'hanan', 'hanan@gmail.com', 'HANAN123hanan', 646177616, 3, 0, '2023-06-08 10:15:11', '2023-06-08 10:15:11'),
(25, 'YYYY', 'Moad', 'moad@gmail.com', 'MOAD123moad', 554566676, 1, 0, '2023-06-08 14:08:55', '2023-06-08 14:08:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
