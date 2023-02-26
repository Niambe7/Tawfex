-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 fév. 2023 à 00:19
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hopital1`
--

-- --------------------------------------------------------

--
-- Structure de la table `constantes`
--

CREATE TABLE `constantes` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `poids` double NOT NULL,
  `taille` double NOT NULL,
  `temperature` varchar(50) NOT NULL,
  `tension` varchar(50) NOT NULL,
  `poul` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `medecin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `constantes`
--

INSERT INTO `constantes` (`id`, `login`, `poids`, `taille`, `temperature`, `tension`, `poul`, `date`, `medecin`) VALUES
(9, 'falilou', 86, 186, '35', '14/07', 32, '19 / octobre / 2022', 'Dr GUEYE'),
(10, 'falilou', 86, 186, '35', '15/08', 32, '19 / octobre / 2022', 'Dr GUEYE'),
(11, 'falilou', 86, 186, '35', '15/08', 32, '19 / octobre / 2022', 'Dr GUEYE'),
(13, 'falilou', 86, 186, '35', '14/08', 15, '19 / octobre / 2022', 'Dr GUEYE'),
(14, 'falilou', 78, 186, '35', '15/08', 32, '20 / octobre / 2022', 'Dr GUEYE'),
(18, 'falilou', 90, 184, '35', '16/12', 12, '20 / octobre / 2022', 'Dr GUEYE'),
(26, 'falilou', 85, 186, '35', '15/09', 12, '20 / octobre / 2022', 'Dr GUEYE'),
(39, 'falilou', 86, 186, '35', '13/08', 12, '09 / novembre / 2022', 'Dr GUEYE'),
(40, 'falilou', 86, 186, '35', '13/08', 12, '09 / novembre / 2022', 'Dr GUEYE'),
(43, 'falilou', 86, 186, '35', '12/07', 12, '09 / novembre / 2022', 'Dr GUEYE'),
(50, 'falilou', 86, 186, '35', '13/07', 12, '12 / novembre / 2022', 'Dr Ka'),
(51, 'falilou', 86, 186, '35', '12/07', 12, '12 / novembre / 2022', 'Dr CISSE'),
(55, 'falilou', 86, 186, '37', '12/06', 70, '22 / December / 2022', 'Dr GUEYE'),
(56, 'falilou', 86, 186, '36', '12/08', 70, '22 / December / 2022', 'Dr GUEYE');

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `id` int(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `dateC` varchar(50) NOT NULL,
  `diagnosticprincipal` varchar(50) NOT NULL,
  `diagnosticassocie` varchar(50) NOT NULL,
  `examenafaire` varchar(50) NOT NULL,
  `infomedical` varchar(50) NOT NULL,
  `resume` varchar(50) NOT NULL,
  `conduiteatenir` varchar(50) NOT NULL,
  `medecin` varchar(50) NOT NULL,
  `services` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `consultation`
--

INSERT INTO `consultation` (`id`, `login`, `dateC`, `diagnosticprincipal`, `diagnosticassocie`, `examenafaire`, `infomedical`, `resume`, `conduiteatenir`, `medecin`, `services`) VALUES
(39, 'falilou', '09 / novembre / 2022', 'grippe', 'céphalées', 'radio', 'asthmatique', 'bien consulté', 'hors de la poussière', 'Dr GUEYE', 'Cardiologie'),
(46, 'falilou', '12 / novembre / 2022', 'conjonctive', 'myopie', 'progression', 'neant', 'consultation de conjonctivite', 'bien prendre les medicaments', 'Dr Ka', 'Ophtalmologie'),
(47, 'falilou', '12 / novembre / 2022', 'carie dentaire', 'neant', 'pas obligatoire', 'neant', 'consultation dentiste', 'diminuer le sucre', 'Dr CISSE', 'Odontologie'),
(51, 'falilou', '22 / December / 2022', 'grippe', 'cephalée', 'radio', 'neant', 'consultation de grippe', 'etre hors de la poussiere', 'Dr GUEYE', 'Cardiologie'),
(52, 'falilou', '22 / December / 2022', 'grippe', 'cephalée', 'radio', 'asthmatique', 'bien consulté', 'hors de la poussiere', 'Dr GUEYE', 'Cardiologie');

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

CREATE TABLE `dossier` (
  `id` int(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `diagnostic` varchar(50) NOT NULL,
  `medocs` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `jour` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dossier`
--

INSERT INTO `dossier` (`id`, `login`, `diagnostic`, `medocs`, `service`, `jour`) VALUES
(1, 'falilou', 'Diabete', 'diamicron', 'medecine generale', '21/05/2022'),
(3, 'mbagnick', 'Myopie', 'correctol', 'ophtalmologie', '17/05/2022'),
(9, 'gallobamba', 'Courbature', 'felden', 'medecine generale', '18/05/2022'),
(10, 'patient-SK', 'Diarrhee', 'Eucarbon', 'Medecine generale', '18/05/2022');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id` int(11) NOT NULL,
  `codeMedecin` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`, `codeMedecin`, `prenom`, `nom`, `password`, `service`) VALUES
(1, 'FS1234', 'Ndiambe', 'GUEYE', 'passer123', 'Cardiologie'),
(2, 'FS342', 'Aly', 'Ka', '123Passer', 'Ophtalmologie'),
(3, 'FS1212', 'Falilou', 'CISSE', 'soukeye', 'Odontologie'),
(4, 'FS2222', 'Thierno', 'SECK', 'adji', 'Radiologie'),
(5, 'FS3333', 'Rosalie', 'FAYE', 'maurice', 'Pediatrie');

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id` int(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `dateR` varchar(50) NOT NULL DEFAULT 'A fixer par la secretaire',
  `heure` varchar(50) NOT NULL DEFAULT 'a preciser par la secretaire',
  `service` varchar(50) NOT NULL,
  `conditions` varchar(50) NOT NULL DEFAULT 'a remplir par la secrétaire',
  `status` varchar(50) NOT NULL DEFAULT 'en cours',
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`id`, `login`, `dateR`, `heure`, `service`, `conditions`, `status`, `email`) VALUES
(29, 'falilou', '2022-12-14', '16H-30', 'Cardiologie', 'A Jeun', 'validé', 'cissefalilou8@gmail.com'),
(31, 'falilou', 'A fixer par la secretaire', 'a preciser par la secretaire', 'Odontologie', 'a remplir par la secrétaire', 'en cours', 'cissefalilou8@gmail.com'),
(33, 'patient-sg', 'A fixer par la secretaire', 'a preciser par la secretaire', 'Cardiologie', 'neant', 'en cours', 'cissefalilou8@gmail.com'),
(34, 'falilou', 'A fixer par la secretaire', 'a preciser par la secretaire', 'Cardiologie', 'a jeun', 'ok', 'cissefalilou8@gmail.com'),
(35, 'falilou', 'A fixer par la secretaire', 'a preciser par la secretaire', 'Ophtalmologie', 'a remplir par la secrétaire', 'en cours', 'cissefalilou8@gmail.com'),
(36, 'falilou', 'A fixer par la secretaire', 'a preciser par la secretaire', 'Consultation generale', 'a remplir par la secrétaire', 'ok', 'cissefalilou8@gmail.com'),
(38, 'patient-sk', 'A fixer par la secretaire', 'a preciser par la secretaire', 'Consultation generale', 'a jeun', 'en cours', 'cissefalilou8@gmail.com'),
(39, 'falilou', 'A fixer par la secretaire', 'a preciser par la secretaire', 'Ophtalmologie', 'a jeun', 'en cours', 'cissefalilou8@gmail.com'),
(40, 'falilou', 'A fixer par la secretaire', 'a preciser par la secretaire', 'Cardiologie', 'a remplir par la secrétaire', 'en cours', 'cissefalilou8@gmail.com'),
(41, 'falilou', 'A fixer par la secretaire', 'a preciser par la secretaire', 'Cardiologie', 'a remplir par la secrétaire', 'en cours', 'cissefalilou8@gmail.com'),
(42, 'falilou', 'A fixer par la secretaire', 'a preciser par la secretaire', 'Cardiologie', 'a remplir par la secrétaire', 'en cours', 'cissefalilou8@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `requete`
--

CREATE TABLE `requete` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `anciennedate` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `requete` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `requete`
--

INSERT INTO `requete` (`id`, `login`, `anciennedate`, `service`, `requete`) VALUES
(1, 'falilou', 'A fixer par la secretaire', 'Cardiologie', 'annulation'),
(5, 'falilou', 'A fixer par la secretaire', 'Cardiologie', 'annulation'),
(6, 'falilou', 'A fixer par la secretaire', 'Cardiologie', 'annulation');

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

CREATE TABLE `secretaire` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `secretaire`
--

INSERT INTO `secretaire` (`id`, `prenom`, `nom`, `email`, `login`, `password`) VALUES
(1, 'amina', 'ndiaye', 'amina@tawfekh.com', 'amina@7', 'amina');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `firstname`, `lastname`, `sexe`, `age`, `email`) VALUES
(3, 'falilou', 'soukeye', 'Serigne falilou mbacke', 'CISSE', 'M', '24', 'cissefalilou8@gmail.com'),
(12, 'ndiambe@', 'kikia2', 'Ndiambe', 'GUEYE', '', '22', 'cissefalilou8@gmail.com'),
(31, '@morgueye4', 'ibou', 'Mor', 'Gueye', 'M', '32', 'morgui04@gmail.com'),
(32, 'ibou', 'passer123', 'Iboulaye', 'Cisse', 'M', '26', 'iboulaye280@gmail.com'),
(33, 'mouha7', 'moussa', 'Mouhamed', 'Haidara', 'M', '27', 'mouhahaidar7@gmail.com'),
(34, 'ibou', 'passer123', 'Iboulaye', 'Mane', 'M', '26', 'iboulaye280@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `constantes`
--
ALTER TABLE `constantes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `requete`
--
ALTER TABLE `requete`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `secretaire`
--
ALTER TABLE `secretaire`
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
-- AUTO_INCREMENT pour la table `constantes`
--
ALTER TABLE `constantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `dossier`
--
ALTER TABLE `dossier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `requete`
--
ALTER TABLE `requete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `secretaire`
--
ALTER TABLE `secretaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
