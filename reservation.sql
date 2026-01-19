-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 16 jan. 2026 à 22:47
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
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `reservation_time` time DEFAULT NULL,
  `message` text DEFAULT NULL,
  `temp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `phone`, `reservation_date`, `reservation_time`, `message`, `temp`) VALUES
(11, 'alaa', 'jabri', '55555555', '2026-02-26', '12:00:00', 'kykvy', '2026-01-16 12:10:42'),
(12, 'alaa', 'jabri', '55555555', '2026-02-26', '14:58:00', 'k', '2026-01-16 13:55:02'),
(13, 'alaa', 'jabri', '55555555', '2026-02-26', '12:00:00', 'm', '2026-01-16 14:31:28'),
(14, 'Alaa', 'Jabri', '0674529413', '2026-02-20', '18:00:00', 'uu', '2026-01-16 14:32:47'),
(15, 'Alaa', 'Jabri', '0674529413', '2026-02-20', '10:22:00', 'h', '2026-01-16 14:59:28'),
(16, 'Alaa', 'Jabri', '0674529413', '2026-02-20', '12:00:00', 'I', '2026-01-16 19:04:01'),
(17, 'ikram', 'loki', '065469846', '2026-02-20', '12:00:00', 'l', '2026-01-16 21:36:15'),
(18, 'Alaa', 'Jabri', '06745555', '2026-02-22', '12:00:00', 'm', '2026-01-16 21:43:15');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
