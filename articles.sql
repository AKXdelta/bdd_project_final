-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2026 at 08:45 PM
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
-- Database: `db_articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `fText` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `author`, `date`, `image`, `excerpt`, `fText`) VALUES
(1, 'Notre Café: De la Graine à la Tasse', 'Laila', 'Janvier 8, 2026', 'images/La tasse et les graines.jpg', 'Découvrez le voyage fascinant de nos grains de café, depuis les plantations éthiopiennes jusqu\'à votre tasse...', 'Le café que vous dégustez chez Daily Dose a parcouru un long chemin avant d\'arriver dans votre tasse.\r\n\r\nL\'origine: Nous travaillons directement avec des coopératives de petits producteurs en Éthiopie, en Colombie et au Brésil. Chaque ferme est sélectionnée pour la qualité exceptionnelle de ses grains et ses pratiques durables.\r\n\r\nLa récolte: Les cerises de café sont récoltées à la main au moment optimal de maturité. Cette méthode traditionnelle garantit que seuls les meilleurs grains sont sélectionnés.\r\n\r\nLa torréfaction: Dans notre torréfaction locale, nous développons des profils de torréfaction uniques pour chaque origine. Ce processus artisanal révèle les arômes naturels des grains.\r\n\r\nLa préparation: Enfin, nos baristas experts transforment ces grains premium en la boisson que vous aimez.\r\n\r\nC\'est cette attention à chaque étape qui fait la différence dans votre tasse'),
(2, 'L\'Art du Cappuccino Parfait', 'Nouhaila', 'Janvier 15, 2026', 'images/cappuchino.jpg', 'Découvrez les secrets pour créer un cappuccino parfait à la maison. La clé réside dans trois éléments essentiels...', ' Découvrez les secrets pour créer un cappuccino parfait à la maison. La clé réside dans trois éléments essentiels: un espresso bien extrait, du lait parfaitement texturé, et la bonne température.Le cappuccino est l\'une des boissons les plus appréciées dans le monde du café. Son équilibre parfait entre espresso, lait chaud et mousse de lait en fait une expérience gustative unique.>Les étapes essentielles: Commencez par préparer un espresso de qualité - utilisez environ 18-20g de café fraîchement moulu.2. Faites chauffer votre lait à environ 65°C tout en créant une micro-mousse onctueuse.3. Versez le lait texturé sur l\'espresso en créant les proportions classiques: 1/3 espresso, 1/3 lait chaud, 1/3 mousse.La pratique est la clé du succès. N\'hésitez pas à expérimenter jusqu\'à trouver votre technique parfaite!'),
(4, 'Atelier Latte Art ce Weekend', 'asmaa', '2026-01-19 18:19:43', 'uploads/696e67afef6a7.jpg', 'Rejoignez-nous samedi prochain pour un atelier pratique de Latte Art. Apprenez à créer des rosettes, cœurs et tulipes...', 'Vous avez toujours voulu apprendre à créer ces magnifiques dessins dans votre cappuccino ? C’est votre chance !\r\n\r\nProgramme de l’atelier :\r\n• 10h00 – Accueil et introduction au Latte Art\r\n• 10h30 – Techniques de texturage du lait\r\n• 11h30 – Pratique des formes de base (cœur, rosette)\r\n• 13h00 – Pause déjeuner avec dégustation\r\n• 14h00 – Techniques avancées (tulipe, cygne)\r\n• 16h00 – Session libre et questions\r\n\r\nCe qui est inclus :\r\nTout le matériel nécessaire, café illimité, déjeuner léger et un certificat de participation.\r\n\r\nPrix :\r\n450 DH par personne\r\n\r\nPlaces limitées :\r\nMaximum 10 participants pour garantir une attention personnalisée.\r\n\r\nRéservez votre place dès maintenant en appelant le 08255555 ou en passant au café !');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
