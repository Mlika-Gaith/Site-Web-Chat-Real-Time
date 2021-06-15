-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 06 juin 2021 à 10:42
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chat_app`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `sender_msg_id` int(11) NOT NULL,
  `destination_msg_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `sender_msg_id`, `destination_msg_id`, `message`) VALUES
(1, 1, 2, 'hello'),
(2, 1, 2, 'hi'),
(3, 2, 1, 'hey there !'),
(4, 1, 2, 'ddd'),
(5, 2, 1, 'nothing mush'),
(6, 2, 1, 'ok '),
(7, 1, 2, 'i was about to ask where ere you last night ?'),
(8, 2, 1, 'nowhere'),
(9, 2, 1, 'why u askin ?'),
(10, 1, 2, 'fff'),
(11, 1, 2, 'hi'),
(12, 1, 2, 'hello'),
(13, 2, 1, 'why u askin ?'),
(14, 1, 2, 'hi'),
(15, 1, 2, 'hi'),
(16, 2, 1, 'ooh opppa'),
(17, 0, 2, 'stupid '),
(18, 0, 2, 'stupid '),
(19, 0, 2, 'stupid'),
(20, 0, 2, 'nah'),
(21, 1, 2, 'ddd'),
(22, 2, 1, 'stupid'),
(23, 0, 2, 'whatever'),
(24, 0, 2, 'whatever'),
(25, 0, 2, 'whatever'),
(26, 0, 2, 'whatever'),
(27, 0, 2, 'whatever'),
(28, 0, 2, 'whatever'),
(29, 2, 1, 'hey'),
(30, 1, 2, 'fff'),
(31, 2, 1, 'nothing'),
(32, 2, 1, 'o'),
(33, 2, 1, 'oo'),
(34, 2, 1, 'ooo'),
(35, 1, 2, 'why u being wierd'),
(36, 2, 1, 'oppa'),
(37, 1, 2, 'ppp'),
(38, 1, 2, 'ppp'),
(39, 1, 2, 'k'),
(40, 1, 2, 'g'),
(41, 1, 2, 'glklgf'),
(42, 1, 2, 'hey'),
(43, 1, 2, 'hi'),
(44, 1, 2, 'hi'),
(45, 1, 2, 'hipp'),
(46, 1, 2, 'l'),
(47, 1, 2, 'fff'),
(48, 1, 2, 'hi'),
(49, 1, 2, 'm'),
(50, 1, 2, 'p'),
(51, 1, 2, 'j'),
(52, 1, 2, 'jjjj'),
(53, 1, 2, 'hi'),
(54, 1, 2, 'hht'),
(55, 1, 2, 'htthth'),
(56, 1, 2, 'ggg'),
(57, 1, 2, 'd'),
(58, 1, 2, 'd'),
(59, 1, 2, 'm'),
(60, 1, 2, 'lll'),
(61, 1, 2, 'd'),
(62, 1, 2, 'd'),
(63, 1, 2, 'dd'),
(64, 1, 2, 'jjjjjjj'),
(65, 1, 2, '6444444444444444444444444444'),
(66, 2, 1, 'f'),
(67, 6, 2, 'hi'),
(68, 8, 6, 'bb'),
(69, 6, 8, 'hhh');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `image`, `status`) VALUES
(6, 'gaith', 'mlika', 'gaith@email.com', '123', 'avatar3.jpg', 'Active Now'),
(7, 'gaith', '123', 'gaith1@email.com', '123', 'gps.png', 'Offline Now');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
