-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 19 jan. 2026 à 21:15
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `billing_details`
--

CREATE TABLE `billing_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `area` varchar(100) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `apartment` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `payment_method` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `billing_details`
--

INSERT INTO `billing_details` (`id`, `first_name`, `last_name`, `area`, `street_address`, `apartment`, `phone`, `email`, `payment_method`, `created_at`) VALUES
(1, 'sdfghj', 'dfghj', 'mjnljmq', 'mjmnoi', 'QMUMKJI', '555555', 'JJJJJJJ@gmail.com', 'bank', '2026-01-18 22:53:58'),
(2, 'sdfghj', 'dfghj', 'mjnljmq', 'mjmnoi', 'QMUMKJI', '555555', 'JJJJJJJ@gmail.com', 'bank', '2026-01-18 22:58:44'),
(3, 'sdfghj', 'dfghj', 'mjnljmq', 'mjmnoi', 'QMUMKJI', '555555', 'JJJJJJJ@gmail.com', 'bank', '2026-01-18 23:07:02'),
(4, 'sdfghj', 'dfghj', 'mjnljmq', 'mjmnoi', 'QMUMKJI', '555555', 'JJJJJJJ@gmail.com', 'bank', '2026-01-19 00:32:44');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
