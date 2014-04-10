-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 10 Avril 2014 à 15:31
-- Version du serveur: 5.5.33
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `winelovers`
--

-- --------------------------------------------------------

--
-- Structure de la table `cellars`
--

CREATE TABLE `cellars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cellar_wine`
--

CREATE TABLE `cellar_wine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cellar_id` int(11) NOT NULL,
  `wine_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `created`, `updated`, `name`, `slug`, `date`, `description`) VALUES
(1, '2014-04-08 00:00:00', '2014-04-09 00:00:00', 'La foire aux vins', 'La-foire-aux-vins', '2014-04-23 00:00:00', 'Une foire comme on les aime !'),
(2, '2014-04-18 00:00:00', '2014-04-25 00:00:00', 'Degustation de Chateau-Lapompe', 'Degustation-de-Chateau-Lapompe', '2014-04-22 00:00:00', 'Venez nombreux'),
(3, '2014-04-09 00:00:00', '2014-04-17 00:00:00', 'Viens boire un vin', 'Viens-boire-un-vin', '2014-04-17 00:00:00', 'Amenez vos vins !'),
(4, '2014-04-18 00:00:00', '2014-04-12 00:00:00', 'Le salon du vin', 'Le-salon-du-vin', '2014-04-30 00:00:00', 'Venez au salon du vin !'),
(5, '2014-04-09 00:00:00', '2014-04-09 00:00:00', 'La traditionnelle St Vincent', 'La-traditionnelle-St-Vincent', '2014-04-26 00:00:00', 'La traditionnelle St Vincent'),
(6, '2014-04-09 00:00:00', '2014-04-17 00:00:00', 'La Route des Vins', 'La-Route-des-Vins', '2014-04-24 00:00:00', 'La Route des Vins'),
(7, '2014-04-08 00:00:00', '2014-04-25 00:00:00', 'Vinitech', 'Vinitech', '2014-04-30 00:00:00', 'Vinitech'),
(8, '2014-04-07 00:00:00', '2014-04-09 00:00:00', 'Jazz and Wine', 'Jazz-and-Wine', '2014-04-04 00:00:00', 'Jazz and Win'),
(9, '2014-04-08 00:00:00', '2014-04-02 00:00:00', 'Week-end des Grands Crus', 'Week-end-des-Grands-Crus', '2014-04-08 00:00:00', 'Week-end des Grands Crus'),
(10, '2014-04-08 00:00:00', '2014-04-01 00:00:00', 'Salon des vins des vignerons indépendants', 'Salon-des-vins-des-vignerons-indépendants', '2014-04-08 00:00:00', 'Salon des vins des vignerons indépendants');

-- --------------------------------------------------------

--
-- Structure de la table `event_post`
--

CREATE TABLE `event_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `event_user`
--

CREATE TABLE `event_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `event_wine`
--

CREATE TABLE `event_wine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `wine_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `post_wine`
--

CREATE TABLE `post_wine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `wine_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `slug`, `password`, `firstname`, `lastname`, `email`, `address`, `zip`, `city`, `created`, `updated`, `image`, `description`) VALUES
(1, 'qdeneuve', 'qdeneuve', '', 'Quentin', 'Deneuve', '', '', 0, '', '2014-03-23 00:00:00', '2014-03-23 00:00:00', '', ''),
(2, 'luc', 'luc', '', 'Luc', 'Notsnad', '', '', 0, '', '2014-03-23 00:00:00', '2014-03-23 00:00:00', '', 'Bounjour'),
(3, 'HappyLo', 'HappyLo', '', 'Happy', 'Lo', '', '', 0, '', '2014-03-17 00:00:00', '2014-03-23 00:00:00', '', 'Whesh !'),
(7, 'fozeek', 'fozeek', '0e70432396ff578620a055f76d4773a0', 'Quentin', 'Deneuve', 'dark_kul@hotmail.fr', '90 rue Charles Godin', 91640, 'Briis sous Forges', '2014-04-08 22:22:16', '2014-04-08 22:22:16', '', ''),
(8, 'dqzdzqdzq', 'dqzdzqdzq', '0e70432396ff578620a055f76d4773a0', 'Quentin', 'Deneuve', 'dark_kul@hotmail.fr', '90 rue Charles Godin', 74924, 'Briis sous Forges', '2014-04-09 09:28:02', '2014-04-09 09:28:02', '', ''),
(9, 'TESTPOURMOI', 'TESTPOURMOI', '86f6fe02007a8a8949383549ca7186b7', 'Quentin', 'Deneuve', 'dark_kul@hotmail.fr', '90 rue Charles Godin', 36472, 'Briis sous Forges', '2014-04-09 09:28:28', '2014-04-09 09:28:28', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `user_post`
--

CREATE TABLE `user_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user_user`
--

CREATE TABLE `user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `whishlists`
--

CREATE TABLE `whishlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `whishlist_wine`
--

CREATE TABLE `whishlist_wine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wine_id` int(11) NOT NULL,
  `whishlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `wines`
--

INSERT INTO `wines` (`id`, `created`, `updated`, `name`, `slug`, `description`, `image`) VALUES
(1, '2014-04-09 00:00:00', '2014-04-10 00:00:00', 'Santa Rita Reserva Sauvignon Blanc', 'Santa-Rita-Reserva-Sauvignon-Blanc', 'Santa Rita Reserva Sauvignon Blanc', 'http://static.wine-searcher.net/images/labels/29/14/santa-rita-reserva-sauvignon-blanc-casablanca-valley-chile-10122914.jpg'),
(2, '2014-04-25 00:00:00', '2014-04-30 00:00:00', 'Penfolds Koonunga Hill Chardonnay', 'Penfolds-Koonunga-Hill-Chardonnay', 'Penfolds Koonunga Hill Chardonnay', 'http://static.wine-searcher.net/images/labels/54/76/penfolds-koonunga-hill-chardonnay-south-australia-10365476.jpg'),
(3, '2014-04-15 00:00:00', '2014-04-17 00:00:00', 'Domaine Leflaive Montrachet Grand Cru', 'Domaine-Leflaive-Montrachet-Grand-Cru', 'Domaine Leflaive Montrachet Grand Cru', 'http://static.wine-searcher.net/images/labels/05/83/domaine-leflaive-montrachet-grand-cru-cote-de-beaune-france-10580583.jpg'),
(4, '2014-04-16 00:00:00', '2014-04-11 00:00:00', 'Petrus', 'Petrus', 'Pomerol, France', 'http://static.wine-searcher.net/images/labels/71/27/petrus-pomerol-france-10187127.jpg'),
(5, '2014-04-10 00:00:00', '2014-04-10 00:00:00', 'Chateau Margaux', 'Chateau-Margaux', 'Margaux, France', 'http://static.wine-searcher.net/images/labels/47/28/chateau-margaux-margaux-france-10474728.jpg'),
(6, '2014-04-10 00:00:00', '2014-04-11 00:00:00', 'Vignobles Andre Lurton Chateau de Cruzeau', 'Vignobles-Andre-Lurton-Chateau-de-Cruzeau', 'Pessac-Leognan, France', 'http://static.wine-searcher.net/images/labels/10/89/vignobles-andre-lurton-chateau-de-cruzeau-pessac-leognan-france-10311089.jpg');
