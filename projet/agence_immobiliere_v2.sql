-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 05:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agence_immobiliere`
--

-- --------------------------------------------------------

--
-- Table structure for table `biens_immobilier`
--

CREATE TABLE `biens_immobilier` (
  `bien_id` int(11) NOT NULL,
  `type_bien` varchar(25) NOT NULL,
  `prix` int(11) NOT NULL,
  `addresse` varchar(25) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `disponibilite` varchar(25) NOT NULL,
  `titre_annonce` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biens_immobilier`
--

INSERT INTO `biens_immobilier` (`bien_id`, `type_bien`, `prix`, `addresse`, `ville`, `description`, `disponibilite`, `titre_annonce`) VALUES
(1, 'Appartement', 123000, 'Yacoub Mansour', 'Casablanca', 'kdshfgkjdsha', 'Disponible', 'Appartement bd yacoub'),
(2, 'maison', 120000000, 'oulfa', 'Casablanca', 'gdajhkGFuyebfkjhsdgk', 'indisponible', 'Maison Maarif'),
(3, 'Terrain', 142000, 'Yacoub Mansour', 'Casablanca', 'jlfgkhjdsljg', 'Disponible', 'terrain oulfa');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `commentaire_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `bien_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contrat`
--

CREATE TABLE `contrat` (
  `contrat_id` int(11) NOT NULL,
  `bien_id` int(11) NOT NULL,
  `locataire_id` int(11) NOT NULL,
  `vendeur_id` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `montant` int(11) NOT NULL,
  `statut_contrat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `images_id` int(11) NOT NULL,
  `bien_id` int(11) NOT NULL,
  `URL` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `expediteur_id` int(11) NOT NULL,
  `destinataire_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `passwd` varchar(25) NOT NULL,
  `type_user` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biens_immobilier`
--
ALTER TABLE `biens_immobilier`
  ADD PRIMARY KEY (`bien_id`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`commentaire_id`),
  ADD KEY `user` (`utilisateur_id`),
  ADD KEY `bien` (`bien_id`);

--
-- Indexes for table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`contrat_id`),
  ADD KEY `tesst` (`bien_id`),
  ADD KEY `loc` (`locataire_id`),
  ADD KEY `vend` (`vendeur_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`images_id`),
  ADD KEY `test` (`bien_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `test2` (`expediteur_id`),
  ADD KEY `test3` (`destinataire_id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biens_immobilier`
--
ALTER TABLE `biens_immobilier`
  MODIFY `bien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `commentaire_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `bien` FOREIGN KEY (`bien_id`) REFERENCES `biens_immobilier` (`bien_id`),
  ADD CONSTRAINT `user` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`user_id`);

--
-- Constraints for table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `loc` FOREIGN KEY (`locataire_id`) REFERENCES `utilisateurs` (`user_id`),
  ADD CONSTRAINT `tesst` FOREIGN KEY (`bien_id`) REFERENCES `biens_immobilier` (`bien_id`),
  ADD CONSTRAINT `vend` FOREIGN KEY (`vendeur_id`) REFERENCES `utilisateurs` (`user_id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `test` FOREIGN KEY (`bien_id`) REFERENCES `biens_immobilier` (`bien_id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `test2` FOREIGN KEY (`expediteur_id`) REFERENCES `utilisateurs` (`user_id`),
  ADD CONSTRAINT `test3` FOREIGN KEY (`destinataire_id`) REFERENCES `utilisateurs` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
