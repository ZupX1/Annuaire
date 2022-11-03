-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 nov. 2022 à 23:02
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `annuaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `id_eleve` int(11) NOT NULL AUTO_INCREMENT,
  `nom_eleve` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom_eleve` varchar(50) COLLATE utf8_bin NOT NULL,
  `sexe_eleve` varchar(50) COLLATE utf8_bin NOT NULL,
  `mail_eleve` varchar(50) COLLATE utf8_bin NOT NULL,
  `tel_eleve` varchar(12) COLLATE utf8_bin NOT NULL,
  `specialite_eleve` varchar(40) COLLATE utf8_bin NOT NULL,
  `adresse_eleve` varchar(150) COLLATE utf8_bin NOT NULL,
  `ville_eleve` varchar(150) COLLATE utf8_bin NOT NULL,
  `etude_eleve` varchar(150) COLLATE utf8_bin NOT NULL,
  `altern_eleve` varchar(5) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_eleve`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id_eleve`, `nom_eleve`, `prenom_eleve`, `sexe_eleve`, `mail_eleve`, `tel_eleve`, `specialite_eleve`, `adresse_eleve`, `ville_eleve`, `etude_eleve`, `altern_eleve`) VALUES
(6, 'fefdfe', 'jean-bernard', 'autres', 'virgil.prevost27@gmail.com', '0658755159', 'cg', '9 parc de la risle', 'Mont-Saint-Aignan', 'license', 'Non'),
(7, 'aaaz', 'eezazea', 'Homme', 'virgil.prevost27@gmail.com', '0658755159', 'dev', '7 allÃ©e des vikings', 'val de reuil', 'doc', 'Oui'),
(9, 'prevost', 'elise', 'Homme', 'virgil.prevost27@gmail.com', '0665577366', 'Developpeur Web', '7 allÃ©e des vikings', 'val de reuil', 'Master', 'Oui'),
(10, 'prevost', 'elise', 'Homme', 'virgil.prevost27@gmail.com', '0665577366', 'Marketing', '7 allÃ©e des vikings', 'val de reuil', 'BTS/DUT', 'Oui'),
(11, 'ZE', 'elise', 'Homme', 'virgil.prevost27@gmail.com', '0665577366', 'Developpeur Web', '7 allÃ©e des vikings', 'val de reuil', 'BTS/DUT', 'Oui'),
(12, 'TERERR', 'ERRERE', 'Femme', 'virgil.prevost27@gmail.com', '0658755159', 'Communication Graphique', '7 allÃ©e des vikings', 'val de reuil', 'Baccalaureat', 'Oui'),
(13, 'prevostZEdzezfsefezfsze', 'elise', 'Homme', 'virgil.prevost27@gmail.com', '0665577366', 'Communication Graphique', '7 allÃ©e des vikings', 'val de reuil', 'Baccalaureat', 'Oui'),
(14, 'prevostZEdzezfsefezfsze', 'elise', 'Homme', 'virgil.prevost27@gmail.com', '0665577366', 'Communication Graphique', '7 allÃ©e des vikings', 'val de reuil', 'Baccalaureat', 'Oui'),
(15, 'fdfdfd', 'dffdfzefgregergzeqrhg', 'autres', 'virgil.prevost27@gmail.com', '0658755159', 'Developpeur Web', '7 allÃ©e des vikings', 'val de reuil', 'License', 'Oui'),
(16, 'fdffdfd', 'fddffdd', 'Homme', 'virgil.prevost27@gmail.com', '0658755159', 'Developpeur Web', '7 allÃ©e des vikings', 'val de reuil', 'Baccalaureat', 'Oui');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
