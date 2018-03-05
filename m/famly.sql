-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 05 Décembre 2017 à 23:08
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `famly`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `Mail` varchar(30) COLLATE utf8_bin NOT NULL,
  `Mdp` varchar(20) COLLATE utf8_bin NOT NULL,
  `Nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `DateNaissance` date NOT NULL,
  `Adresse` varchar(80) COLLATE utf8_bin NOT NULL,
  `CP` int(5) NOT NULL,
  `Ville` varchar(40) COLLATE utf8_bin NOT NULL,
  `Pays` varchar(20) COLLATE utf8_bin NOT NULL,
  `Tel` int(8) NOT NULL,
  `ID_Utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_Utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Mail`, `Mdp`, `Nom`, `Prenom`, `DateNaissance`, `Adresse`, `CP`, `Ville`, `Pays`, `Tel`, `ID_Utilisateur`) VALUES
('gregmalaud@hotmail.com', 'mdp', 'MALAUD', 'Grégoire', '1983-11-22', '60 rue HAXO', 75020, 'PARIS', 'FRANCE', 622017429, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
