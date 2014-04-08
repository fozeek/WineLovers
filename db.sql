-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 08 Avril 2014 à 10:04
-- Version du serveur: 5.5.33
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `winelovers`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `firstname`, `lastname`, `created`, `updated`, `image`, `description`) VALUES
(1, 'qdeneuve', '', 'Quentin', 'Deneuve', '2014-03-23 00:00:00', '2014-03-23 00:00:00', '', ''),
(2, 'luc', '', 'Luc', 'Notsnad', '2014-03-23 00:00:00', '2014-03-23 00:00:00', '', 'Bounjour'),
(3, 'HappyLo', '', 'Happy', 'Lo', '2014-03-17 00:00:00', '2014-03-23 00:00:00', '', 'Whesh !');

-- --------------------------------------------------------

--
-- Structure de la table `wines`
--

CREATE TABLE `wines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `wines`
--

INSERT INTO `wines` (`id`, `created`, `updated`, `name`, `description`) VALUES
(1, '2014-04-09 00:00:00', '2014-04-10 00:00:00', 'Un vin', 'De bourgeois !'),
(2, '2014-04-25 00:00:00', '2014-04-30 00:00:00', 'Un vin', 'Qui pique !');
