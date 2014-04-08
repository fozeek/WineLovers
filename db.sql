-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 08 Avril 2014 à 11:02
-- Version du serveur: 5.5.33
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `winelovers`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `created`, `updated`, `name`, `slug`, `date`, `description`) VALUES
(1, '2014-04-08 00:00:00', '2014-04-09 00:00:00', 'Pouet', 'Pouet', '2014-04-23 00:00:00', 'Ça va ?'),
(2, '2014-04-18 00:00:00', '2014-04-25 00:00:00', 'Go go go !', 'Go-go-go', '2014-04-22 00:00:00', 'Coucou');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `zip` int(5) NOT NULL,
  `city` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `slug`, `password`, `firstname`, `lastname`, `email`, `address`, `zip`, `city`, `created`, `updated`, `image`, `description`) VALUES
(1, 'qdeneuve', 'qdeneuve', '', 'Quentin', 'Deneuve', '', '', 0, '', '2014-03-23 00:00:00', '2014-03-23 00:00:00', '', ''),
(2, 'luc', 'luc', '', 'Luc', 'Notsnad', '', '', 0, '', '2014-03-23 00:00:00', '2014-03-23 00:00:00', '', 'Bounjour'),
(3, 'HappyLo', 'HappyLo', '', 'Happy', 'Lo', '', '', 0, '', '2014-03-17 00:00:00', '2014-03-23 00:00:00', '', 'Whesh !');

-- --------------------------------------------------------

--
-- Structure de la table `wines`
--

CREATE TABLE `wines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `wines`
--

INSERT INTO `wines` (`id`, `created`, `updated`, `name`, `slug`, `description`) VALUES
(1, '2014-04-09 00:00:00', '2014-04-10 00:00:00', 'Un vin', 'Un-Vin', 'De bourgeois !'),
(2, '2014-04-25 00:00:00', '2014-04-30 00:00:00', 'Deux vin', 'Deux-Vin', 'Qui pique !');
