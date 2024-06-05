-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2024 at 12:26 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jour9`
--

-- --------------------------------------------------------

--
-- Table structure for table `etage`
--

CREATE TABLE `etage` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `numero` int NOT NULL,
  `superficie` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etage`
--

INSERT INTO `etage` (`id`, `nom`, `numero`, `superficie`) VALUES
(1, 'rdc', 0, 500),
(2, 'r+1', 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `prenom`, `nom`, `naissance`, `sexe`, `email`) VALUES
(1, 'cyril', 'zimmerman', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
(2, 'jessica', 'soriano', '1995-09-08', 'femme', 'jessica@laplateforme.io'),
(3, 'roxan ', 'roumegas', '2016-09-08', 'homme', 'roxan@laplateforme.io'),
(4, 'pascal', 'assens', '1999-12-31', 'homme', 'pascal@laplateforme.io'),
(5, 'terry', 'cristilleni', '2005-02-01', 'homme', 'terry@laplateforme.io'),
(6, 'ruben ', 'habib', '1993-05-26', 'homme', 'ruben.habib@laplateforme.io'),
(7, 'toto', 'dupont', '2019-11-07', 'homme', 'toto@laplateforme.io');

-- --------------------------------------------------------

--
-- Table structure for table `salles`
--

CREATE TABLE `salles` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_etage` int NOT NULL,
  `capacite` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salles`
--

INSERT INTO `salles` (`id`, `nom`, `id_etage`, `capacite`) VALUES
(1, 'lounge', 1, 100),
(2, 'studio son', 1, 5),
(3, 'broadcasting', 2, 50),
(4, 'bocal peda', 2, 4),
(5, 'coworking', 2, 80),
(6, 'studio video ', 2, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etage`
--
ALTER TABLE `etage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etage`
--
ALTER TABLE `etage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `salles`
--
ALTER TABLE `salles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
