-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 13 Mai 2014 à 09:36
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
  `wine_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `cellars`
--

INSERT INTO `cellars` (`id`, `created`, `updated`, `user_id`, `wine_id`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 2);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `text` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `created`, `updated`, `text`, `author_id`, `post_id`) VALUES
(1, '2014-05-14 00:00:00', '2014-05-23 00:00:00', 'Je me reponds a moi meme !! Psychopate !!', 1, 1),
(2, '2014-05-11 17:29:08', '2014-05-11 17:29:08', 'Oh oui !', 7, 1),
(3, '2014-05-11 17:30:09', '2014-05-11 17:30:09', 'Ã‡A VA ?', 7, 1),
(4, '2014-05-11 17:30:18', '2014-05-11 17:30:18', 'Non :(', 7, 1),
(5, '2014-05-11 17:31:31', '2014-05-11 17:31:31', 'Oh :D', 7, 1),
(6, '2014-05-11 17:32:13', '2014-05-11 17:32:13', 'Oui biensur :3', 7, 39),
(7, '2014-05-11 17:32:38', '2014-05-11 17:32:38', 'COOOL !', 7, 39),
(8, '2014-05-11 17:32:55', '2014-05-11 17:32:55', 'YEP', 7, 39),
(9, '2014-05-11 17:33:44', '2014-05-11 17:33:44', 'e', 7, 39),
(10, '2014-05-11 17:33:57', '2014-05-11 17:33:57', 'e', 7, 39),
(11, '2014-05-11 17:34:10', '2014-05-11 17:34:10', 'COOL', 7, 39),
(12, '2014-05-11 17:35:21', '2014-05-11 17:35:21', 'Ah bon ?', 7, 3),
(13, '2014-05-11 17:36:16', '2014-05-11 17:36:16', 'rrr', 7, 3),
(14, '2014-05-11 17:36:43', '2014-05-11 17:36:43', 'zzz', 7, 3),
(15, '2014-05-11 17:37:26', '2014-05-11 17:37:26', 'yoh !', 7, 3),
(16, '2014-05-11 17:38:19', '2014-05-11 17:38:19', 'rrrrr', 7, 3),
(17, '2014-05-11 17:39:53', '2014-05-11 17:39:53', 'trousse', 7, 3),
(18, '2014-05-11 17:40:37', '2014-05-11 17:40:37', 'Papier', 7, 3),
(19, '2014-05-11 17:40:45', '2014-05-11 17:40:45', 'Crayon', 7, 3),
(20, '2014-05-11 17:41:04', '2014-05-11 17:41:04', 'Salutation ! :)', 7, 38),
(21, '2014-05-11 17:43:57', '2014-05-11 17:43:57', 'Cool :)', 7, 42),
(22, '2014-05-11 18:00:58', '2014-05-11 18:00:58', 'HEY !', 7, 38),
(23, '2014-05-11 18:41:49', '2014-05-11 18:41:49', 'YO', 7, 47),
(24, '2014-05-11 18:58:57', '2014-05-11 18:58:57', 'Yop !', 7, 40),
(25, '2014-05-11 19:04:00', '2014-05-11 19:04:00', 'yop !', 7, 48),
(26, '2014-05-11 20:58:50', '2014-05-11 20:58:50', 'YOH !', 7, 73),
(27, '2014-05-11 22:58:29', '2014-05-11 22:58:29', 'YEAHHHH !', 7, 89),
(28, '2014-05-12 09:55:12', '2014-05-12 09:55:12', 'Cool !', 7, 56),
(29, '2014-05-12 10:33:10', '2014-05-12 10:33:10', 'mmmm', 7, 105),
(30, '2014-05-12 10:50:05', '2014-05-12 10:50:05', 'TRUE !', 7, 107),
(31, '2014-05-12 16:14:25', '2014-05-12 16:14:25', 'azdazzd', 7, 127),
(32, '2014-05-12 16:36:36', '2014-05-12 16:36:36', 'Ok ! :)', 7, 19),
(33, '2014-05-12 16:37:57', '2014-05-12 16:37:57', 'GoÃ»te Ã§a !', 7, 128),
(34, '2014-05-12 16:39:55', '2014-05-12 16:39:55', 'LOULE', 7, 127),
(35, '2014-05-12 16:41:12', '2014-05-12 16:41:12', 'Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.', 7, 128),
(36, '2014-05-12 17:16:37', '2014-05-12 17:16:37', 'Yeah !', 7, 132);

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
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `created`, `updated`, `name`, `slug`, `date`, `description`, `author_id`) VALUES
(1, '2014-04-08 00:00:00', '2014-04-09 00:00:00', 'La foire aux vins', 'La-foire-aux-vins', '2014-04-23 00:00:00', 'Une foire comme on les aime !', 1),
(2, '2014-04-18 00:00:00', '2014-04-25 00:00:00', 'Degustation de Chateau-Lapompe', 'Degustation-de-Chateau-Lapompe', '2014-04-22 00:00:00', 'Venez nombreux', 1),
(3, '2014-04-09 00:00:00', '2014-04-17 00:00:00', 'Viens boire un vin', 'Viens-boire-un-vin', '2014-04-17 00:00:00', 'Amenez vos vins !', 1),
(4, '2014-04-18 00:00:00', '2014-04-12 00:00:00', 'Le salon du vin', 'Le-salon-du-vin', '2014-04-30 00:00:00', 'Venez au salon du vin !', 1),
(5, '2014-04-09 00:00:00', '2014-04-09 00:00:00', 'La traditionnelle St Vincent', 'La-traditionnelle-St-Vincent', '2014-04-26 00:00:00', 'La traditionnelle St Vincent', 2),
(6, '2014-04-09 00:00:00', '2014-04-17 00:00:00', 'La Route des Vins', 'La-Route-des-Vins', '2014-04-24 00:00:00', 'La Route des Vins', 1),
(7, '2014-04-08 00:00:00', '2014-05-08 13:51:00', 'Vinitech', 'Vinitech', '2014-04-30 00:00:00', 'Vinitech', 3),
(8, '2014-04-07 00:00:00', '2014-04-09 00:00:00', 'Jazz and Wine', 'Jazz-and-Wine', '2014-04-04 00:00:00', 'Jazz and Win', 1),
(9, '2014-04-08 00:00:00', '2014-04-02 00:00:00', 'Week-end des Grands Crus', 'Week-end-des-Grands-Crus', '2014-04-08 00:00:00', 'Week-end des Grands Crus', 1),
(10, '2014-04-08 00:00:00', '2014-04-01 00:00:00', 'Salon des vins des vignerons independants', 'Salon-des-vins-des-vignerons-independants', '2014-04-08 00:00:00', 'Salon des vins des vignerons independants', 1);

-- --------------------------------------------------------

--
-- Structure de la table `events_joins`
--

CREATE TABLE `events_joins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `events_joins`
--

INSERT INTO `events_joins` (`id`, `event_id`, `user_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `events_likes`
--

CREATE TABLE `events_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `events_likes`
--

INSERT INTO `events_likes` (`id`, `event_id`, `user_id`) VALUES
(1, 1, 1);

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
-- Structure de la table `friendships`
--

CREATE TABLE `friendships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Contenu de la table `friendships`
--

INSERT INTO `friendships` (`id`, `user_id`, `friend_id`, `created`) VALUES
(1, 7, 2, '0000-00-00 00:00:00'),
(2, 7, 8, '0000-00-00 00:00:00'),
(48, 7, 3, '2014-05-12 10:12:27'),
(49, 7, 1, '2014-05-12 10:46:10');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `author_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `link_id` int(11) NOT NULL,
  `link_object` varchar(100) NOT NULL,
  `attach_wine_id` int(11) NOT NULL,
  `attach_user_id` int(11) NOT NULL,
  `attach_event_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `created`, `updated`, `author_id`, `text`, `link_id`, `link_object`, `attach_wine_id`, `attach_user_id`, `attach_event_id`) VALUES
(1, '2014-05-08 00:00:00', '2014-05-15 00:00:00', 1, 'Coucou, regarde ce vin !! <3', 1, 'Event', 1, 0, 0),
(2, '2014-05-09 00:00:00', '2014-05-07 00:00:00', 1, 'YOOO', 1, 'User', 0, 0, 0),
(3, '2014-05-07 00:00:00', '2014-05-16 00:00:00', 7, 'Testons moussaillons !', 1, 'Event', 0, 0, 2),
(4, '2014-05-11 16:11:16', '2014-05-11 16:11:16', 7, 'POULE', 1, 'User', 0, 0, 0),
(5, '2014-05-11 16:24:24', '2014-05-11 16:24:24', 7, 'LOL', 1, 'User', 0, 0, 0),
(6, '2014-05-11 16:24:35', '2014-05-11 16:24:35', 7, 'LOL', 1, 'User', 0, 0, 0),
(7, '2014-05-11 16:25:10', '2014-05-11 16:25:10', 7, 'POULE', 1, 'User', 0, 0, 0),
(8, '2014-05-11 16:26:44', '2014-05-11 16:26:44', 7, 'CANARD', 1, 'User', 0, 0, 0),
(9, '2014-05-11 16:27:50', '2014-05-11 16:27:50', 7, 'POULET', 1, 'User', 0, 0, 0),
(10, '2014-05-11 16:29:29', '2014-05-11 16:29:29', 7, 'CANARI', 1, 'User', 0, 0, 0),
(11, '2014-05-11 16:30:59', '2014-05-11 16:30:59', 7, 'KOALA', 1, 'User', 0, 0, 0),
(12, '2014-05-11 16:31:27', '2014-05-11 16:31:27', 7, 'GIRAFE', 1, 'User', 0, 0, 0),
(13, '2014-05-11 16:33:59', '2014-05-11 16:33:59', 7, 'Nouveau comm'' ;)', 1, 'User', 0, 0, 0),
(14, '2014-05-11 16:34:11', '2014-05-11 16:34:11', 7, 'Nouveau comm'' ;)', 1, 'User', 0, 0, 0),
(15, '2014-05-11 16:34:36', '2014-05-11 16:34:36', 7, 'Un commentaire utile :)', 1, 'User', 0, 0, 0),
(16, '2014-05-11 16:35:13', '2014-05-11 16:35:13', 7, 'Laisser un commentaire', 1, 'User', 0, 0, 0),
(17, '2014-05-11 16:36:04', '2014-05-11 16:36:04', 7, 'Laisser un commentaire', 1, 'User', 0, 0, 0),
(18, '2014-05-11 16:36:21', '2014-05-11 16:36:21', 7, 'Laisser un commentaire', 1, 'User', 0, 0, 0),
(19, '2014-05-11 16:36:25', '2014-05-11 16:36:25', 7, 'Laisser un commentaire', 1, 'User', 0, 0, 0),
(20, '2014-05-11 16:36:30', '2014-05-11 16:36:30', 7, 'Laisser un commentairerr', 1, 'User', 0, 0, 0),
(21, '2014-05-11 16:36:45', '2014-05-11 16:36:45', 7, 'de', 1, 'User', 0, 0, 0),
(22, '2014-05-11 16:37:11', '2014-05-11 16:37:11', 7, 'DEUTCH', 1, 'User', 0, 0, 0),
(23, '2014-05-11 16:37:18', '2014-05-11 16:37:18', 7, 'YOOOO', 1, 'User', 0, 0, 0),
(24, '2014-05-11 16:37:22', '2014-05-11 16:37:22', 7, 'YOOOO', 1, 'User', 0, 0, 0),
(25, '2014-05-11 16:37:24', '2014-05-11 16:37:24', 7, 'YOOOO', 1, 'User', 0, 0, 0),
(26, '2014-05-11 16:37:25', '2014-05-11 16:37:25', 7, 'YOOOO', 1, 'User', 0, 0, 0),
(27, '2014-05-11 16:37:26', '2014-05-11 16:37:26', 7, 'YOOOO', 1, 'User', 0, 0, 0),
(28, '2014-05-11 16:37:27', '2014-05-11 16:37:27', 7, 'YOOOO', 1, 'User', 0, 0, 0),
(29, '2014-05-11 16:38:14', '2014-05-11 16:38:14', 7, 'BOUUUUUUUUUUH !!', 1, 'User', 0, 0, 0),
(30, '2014-05-11 16:40:34', '2014-05-11 16:40:34', 7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'User', 0, 0, 0),
(31, '2014-05-11 16:40:59', '2014-05-11 16:40:59', 7, 'Non, je pense pas.\nSaut de ligne swaggy !\nb.', 1, 'User', 0, 0, 0),
(32, '2014-05-11 16:41:27', '2014-05-11 16:41:27', 7, 'YOOOOOO', 1, 'User', 0, 0, 0),
(33, '2014-05-11 16:41:48', '2014-05-11 16:41:48', 7, '', 1, 'User', 0, 0, 0),
(34, '2014-05-11 16:45:36', '2014-05-11 16:45:36', 7, 'coucou           Ã§a va ?', 1, 'User', 0, 0, 0),
(35, '2014-05-11 16:47:09', '2014-05-11 16:47:09', 7, 'Laisser un commentaire', 1, 'User', 0, 0, 0),
(36, '2014-05-11 16:47:28', '2014-05-11 16:47:28', 7, 'Laisser un commentaire', 1, 'User', 0, 0, 0),
(37, '2014-05-11 16:55:13', '2014-05-11 16:55:13', 7, 'Coucou', 1, 'User', 0, 0, 0),
(38, '2014-05-11 16:57:01', '2014-05-11 16:57:01', 7, 'Coucou', 1, 'User', 0, 0, 0),
(39, '2014-05-11 17:04:45', '2014-05-11 17:04:45', 7, 'Je peux laisser un comm ? :D', 1, 'Event', 0, 0, 0),
(40, '2014-05-11 17:05:33', '2014-05-11 17:05:33', 7, 'Un new comm'' bro !', 1, 'Wine', 0, 0, 0),
(41, '2014-05-11 17:07:17', '2014-05-11 17:07:17', 7, 'PETROUUUUUUUS <3', 4, 'Wine', 0, 0, 0),
(42, '2014-05-11 17:43:01', '2014-05-11 17:43:01', 7, 'Un post coolissimement cool :)', 1, 'User', 0, 0, 0),
(43, '2014-05-11 17:45:06', '2014-05-11 17:45:06', 7, 'Testou', 1, 'User', 0, 0, 0),
(44, '2014-05-11 18:32:14', '2014-05-11 18:32:14', 7, 'Coucou les petits vins !', 1, 'Event', 0, 0, 0),
(45, '2014-05-11 18:36:45', '2014-05-11 18:36:45', 7, 'coucou', 1, 'Event', 0, 0, 0),
(46, '2014-05-11 18:41:05', '2014-05-11 18:41:05', 7, 'Hello', 1, 'Event', 0, 0, 0),
(47, '2014-05-11 18:41:45', '2014-05-11 18:41:45', 7, 'Pouet', 1, 'Event', 0, 0, 0),
(48, '2014-05-11 19:03:53', '2014-05-11 19:03:53', 7, 'Coucou !', 1, 'User', 0, 0, 0),
(49, '2014-05-11 20:51:10', '2014-05-11 20:51:10', 7, '1', 2, 'Wine', 0, 0, 0),
(50, '2014-05-11 20:51:12', '2014-05-11 20:51:12', 7, '2', 2, 'Wine', 0, 0, 0),
(51, '2014-05-11 20:51:15', '2014-05-11 20:51:15', 7, '3', 2, 'Wine', 0, 0, 0),
(52, '2014-05-11 20:51:18', '2014-05-11 20:51:18', 7, '4', 2, 'Wine', 0, 0, 0),
(53, '2014-05-11 20:51:20', '2014-05-11 20:51:20', 7, '5', 2, 'Wine', 0, 0, 0),
(54, '2014-05-11 20:51:25', '2014-05-11 20:51:25', 7, '6', 2, 'Wine', 0, 0, 0),
(55, '2014-05-11 20:51:28', '2014-05-11 20:51:28', 7, '7', 2, 'Wine', 0, 0, 0),
(56, '2014-05-11 20:51:31', '2014-05-11 20:51:31', 7, '8', 2, 'Wine', 0, 0, 0),
(57, '2014-05-11 20:51:49', '2014-05-11 20:51:49', 7, '1', 7, 'Event', 0, 0, 0),
(58, '2014-05-11 20:52:01', '2014-05-11 20:52:01', 7, '1', 2, 'User', 0, 0, 0),
(59, '2014-05-11 20:52:07', '2014-05-11 20:52:07', 7, '2', 2, 'User', 0, 0, 0),
(60, '2014-05-11 20:52:10', '2014-05-11 20:52:10', 7, '3', 2, 'User', 0, 0, 0),
(61, '2014-05-11 20:54:21', '2014-05-11 20:54:21', 7, '4', 2, 'User', 0, 0, 0),
(62, '2014-05-11 20:54:24', '2014-05-11 20:54:24', 7, '5', 2, 'User', 0, 0, 0),
(63, '2014-05-11 20:54:26', '2014-05-11 20:54:26', 7, '6', 2, 'User', 0, 0, 0),
(64, '2014-05-11 20:54:29', '2014-05-11 20:54:29', 7, '7', 2, 'User', 0, 0, 0),
(65, '2014-05-11 20:54:36', '2014-05-11 20:54:36', 7, '8', 2, 'User', 0, 0, 0),
(66, '2014-05-11 20:54:39', '2014-05-11 20:54:39', 7, '9', 2, 'User', 0, 0, 0),
(67, '2014-05-11 20:54:45', '2014-05-11 20:54:45', 7, '10', 2, 'User', 0, 0, 0),
(68, '2014-05-11 20:54:54', '2014-05-11 20:54:54', 7, '11', 2, 'User', 0, 0, 0),
(69, '2014-05-11 20:55:09', '2014-05-11 20:55:09', 7, '12', 2, 'User', 0, 0, 0),
(70, '2014-05-11 20:55:12', '2014-05-11 20:55:12', 7, '13', 2, 'User', 0, 0, 0),
(71, '2014-05-11 20:55:16', '2014-05-11 20:55:16', 7, '14', 2, 'User', 0, 0, 0),
(72, '2014-05-11 20:55:19', '2014-05-11 20:55:19', 7, '15', 2, 'User', 0, 0, 0),
(73, '2014-05-11 20:58:45', '2014-05-11 20:58:45', 7, 'COUCOU !', 1, 'User', 0, 0, 0),
(74, '2014-05-11 22:40:28', '2014-05-11 22:40:28', 7, 'Test User', 7, 'User', 0, 0, 0),
(75, '2014-05-11 22:42:07', '2014-05-11 22:42:07', 7, 'd', 7, 'User', 0, 0, 0),
(76, '2014-05-11 22:42:31', '2014-05-11 22:42:31', 7, 'coucou', 7, 'User', 0, 0, 0),
(77, '2014-05-11 22:43:54', '2014-05-11 22:43:54', 7, 'Message', 7, 'User', 0, 2, 0),
(78, '2014-05-11 22:45:06', '2014-05-11 22:45:06', 7, 'dd', 7, 'User', 0, 0, 0),
(79, '2014-05-11 22:49:04', '2014-05-11 22:49:04', 7, 'YO !', 1, 'User', 0, 0, 0),
(80, '2014-05-11 22:49:44', '2014-05-11 22:49:44', 7, 'qzdqz', 1, 'User', 0, 0, 0),
(81, '2014-05-11 22:49:52', '2014-05-11 22:49:52', 7, 'd', 1, 'User', 0, 0, 0),
(82, '2014-05-11 22:50:23', '2014-05-11 22:50:23', 7, 'dddd', 1, 'User', 0, 0, 0),
(83, '2014-05-11 22:50:40', '2014-05-11 22:50:40', 7, 'zqddzqd', 1, 'User', 0, 0, 0),
(84, '2014-05-11 22:51:49', '2014-05-11 22:51:49', 7, 'COOL :D', 1, 'User', 0, 2, 0),
(85, '2014-05-11 22:52:23', '2014-05-11 22:52:23', 7, 'qzdq', 1, 'User', 0, 2, 0),
(86, '2014-05-11 22:53:28', '2014-05-11 22:53:28', 7, 'dqzdzd', 1, 'User', 0, 2, 0),
(87, '2014-05-11 22:53:58', '2014-05-11 22:53:58', 7, 'zqdzqd', 1, 'User', 0, 2, 0),
(88, '2014-05-11 22:58:01', '2014-05-11 22:58:01', 7, 'YOOOOO !', 1, 'User', 0, 1, 0),
(89, '2014-05-11 22:58:20', '2014-05-11 22:58:20', 7, 'FRE', 1, 'User', 0, 8, 0),
(90, '2014-05-12 09:51:42', '2014-05-12 09:51:42', 7, 'Test !', 1, 'User', 0, 1, 0),
(91, '2014-05-12 09:52:50', '2014-05-12 09:52:50', 7, 'I''m friend with him ! ;)', 1, 'User', 0, 3, 0),
(92, '2014-05-12 09:57:16', '2014-05-12 09:57:16', 7, 'Cool !', 3, 'User', 0, 1, 0),
(93, '2014-05-12 10:06:29', '2014-05-12 10:06:29', 7, 'Come here !', 3, 'User', 0, 0, 1),
(94, '2014-05-12 10:07:37', '2014-05-12 10:07:37', 7, 'LOL', 3, 'User', 0, 0, 2),
(95, '2014-05-12 10:11:06', '2014-05-12 10:11:06', 7, 'Boire !', 3, 'User', 1, 0, 0),
(96, '2014-05-12 10:13:33', '2014-05-12 10:13:33', 7, 'Coucou bro !', 3, 'User', 2, 0, 0),
(97, '2014-05-12 10:16:37', '2014-05-12 10:16:37', 7, 'Coucou !', 3, 'User', 0, 2, 0),
(98, '2014-05-12 10:17:33', '2014-05-12 10:17:33', 7, 'C', 3, 'User', 0, 2, 0),
(99, '2014-05-12 10:27:33', '2014-05-12 10:27:33', 7, 'Yoh !', 3, 'User', 0, 0, 0),
(100, '2014-05-12 10:28:35', '2014-05-12 10:28:35', 7, 'PLOP', 3, 'User', 0, 0, 0),
(101, '2014-05-12 10:28:37', '2014-05-12 10:28:37', 7, 'sss', 3, 'User', 0, 0, 0),
(102, '2014-05-12 10:29:10', '2014-05-12 10:29:10', 7, 'PLOP', 3, 'User', 0, 2, 0),
(103, '2014-05-12 10:29:13', '2014-05-12 10:29:13', 7, 'ddd', 3, 'User', 0, 0, 0),
(104, '2014-05-12 10:32:45', '2014-05-12 10:32:45', 7, 'Couou', 3, 'User', 0, 2, 0),
(105, '2014-05-12 10:32:53', '2014-05-12 10:32:53', 7, 'xx', 3, 'User', 0, 1, 0),
(106, '2014-05-12 10:34:33', '2014-05-12 10:34:33', 7, 'ddd', 1, 'User', 0, 3, 0),
(107, '2014-05-12 10:46:31', '2014-05-12 10:46:31', 7, 'Coucou !', 1, 'User', 1, 0, 0),
(108, '2014-05-12 10:50:18', '2014-05-12 10:50:18', 7, 'mm', 1, 'User', 3, 0, 0),
(109, '2014-05-12 11:31:10', '2014-05-12 11:31:10', 7, 'Yop', 1, 'User', 0, 8, 0),
(110, '2014-05-12 11:31:30', '2014-05-12 11:31:30', 7, 'r', 1, 'User', 0, 0, 1),
(111, '2014-05-12 12:06:57', '2014-05-12 12:06:57', 7, 'Test', 1, 'User', 0, 0, 1),
(112, '2014-05-12 12:08:23', '2014-05-12 12:08:23', 7, 'fff', 1, 'User', 0, 0, 1),
(113, '2014-05-12 12:09:31', '2014-05-12 12:09:31', 7, 'fzfqzzqf', 1, 'User', 0, 0, 1),
(114, '2014-05-12 12:09:59', '2014-05-12 12:09:59', 7, 'qzdzqd', 1, 'User', 0, 0, 1),
(115, '2014-05-12 12:11:19', '2014-05-12 12:11:19', 7, 'ddd', 1, 'User', 0, 0, 1),
(116, '2014-05-12 12:12:45', '2014-05-12 12:12:45', 7, 'C', 1, 'User', 0, 0, 10),
(117, '2014-05-12 12:14:48', '2014-05-12 12:14:48', 7, 'Him !', 1, 'User', 0, 1, 0),
(118, '2014-05-12 12:21:49', '2014-05-12 12:21:49', 7, 'qzqdqz', 1, 'User', 0, 2, 0),
(119, '2014-05-12 12:22:19', '2014-05-12 12:22:19', 7, 'zdzd', 1, 'User', 0, 8, 0),
(120, '2014-05-12 12:25:27', '2014-05-12 12:25:27', 7, 'WIIIINE !!', 1, 'User', 1, 0, 0),
(121, '2014-05-12 12:36:42', '2014-05-12 12:36:42', 7, 'LOL', 1, 'User', 3, 0, 0),
(122, '2014-05-12 12:52:41', '2014-05-12 12:52:41', 7, 'JOPM', 1, 'User', 0, 3, 0),
(123, '2014-05-12 12:53:08', '2014-05-12 12:53:08', 7, 'Different types of response to $.ajax() call are subjected to different kinds of pre-processing before being passed to the success handler. The type of pre-processing depends by default upon the Content-Type of the response, but can be set explicitly using the dataType option. If the dataType option is provided, the Content-Type header of the response will be disregarded.\n\nThe available data types are text, html, xml, json, jsonp, and script.\n\nIf text or html is specified, no pre-processing occurs. The data is simply passed on to the success handler, and made available through the responseText property of the jqXHR object.\n\nIf xml is specified, the response is parsed using jQuery.parseXML before being passed, as an XMLDocument, to the success handler. The XML document is made available through the responseXML property of the jqXHR object.\n\nIf json is specified, the response is parsed using jQuery.parseJSON before being passed, as an object, to the success handler. The parsed JSON object is made available through the responseJSON property of the jqXHR object.\n\nIf script is specified, $.ajax() will execute the JavaScript that is received from the server before passing it on to the success handler as a string.\n\nIf jsonp is specified, $.ajax() will automatically append a query string parameter of (by default) callback=? to the URL. The jsonp and jsonpCallback properties of the settings passed to $.ajax() can be used to specify, respectively, the name of the query string parameter and the name of the JSONP callback function. The server should return valid JavaScript that passes the JSON response into the callback function. $.ajax() will execute the returned JavaScript, calling the JSONP callback function, before passing the JSON object contained in the response to the $.ajax() success handler.', 1, 'User', 0, 2, 0),
(124, '2014-05-12 16:12:20', '2014-05-12 16:12:20', 7, 'coucou', 1, 'User', 0, 0, 0),
(125, '2014-05-12 16:12:34', '2014-05-12 16:12:34', 7, 'fff', 1, 'User', 0, 0, 0),
(126, '2014-05-12 16:13:10', '2014-05-12 16:13:10', 7, 'dzqzdqd', 1, 'User', 0, 0, 0),
(127, '2014-05-12 16:13:15', '2014-05-12 16:13:15', 7, 'zqdzq', 1, 'User', 0, 1, 0),
(128, '2014-05-12 16:37:38', '2014-05-12 16:37:38', 7, 'Coucou toi ! ;)', 1, 'User', 3, 0, 0),
(129, '2014-05-12 16:40:23', '2014-05-12 16:40:23', 7, 'Viens !', 1, 'User', 0, 0, 2),
(130, '2014-05-12 17:14:52', '2014-05-12 17:14:52', 7, 'Un message !', 2, 'Event', 0, 0, 0),
(131, '2014-05-12 17:16:10', '2014-05-12 17:16:10', 7, 'Bois !', 2, 'Event', 3, 0, 0),
(132, '2014-05-12 17:16:25', '2014-05-12 17:16:25', 7, 'Look him !', 3, 'Wine', 0, 1, 0),
(133, '2014-05-12 17:19:04', '2014-05-12 17:19:04', 7, 'Cool !', 3, 'Wine', 0, 0, 2),
(134, '2014-05-12 18:15:22', '2014-05-12 18:15:22', 7, 'Beuverie !', 1, 'User', 3, 0, 0);

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
(1, 'qdeneuve', 'qdeneuve', '', 'Quentin', 'Deneuve', 'dark.quent@free.fr', '', 0, '', '2014-03-23 00:00:00', '2014-03-23 00:00:00', '', ''),
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
(3, '2014-04-15 00:00:00', '2014-04-17 00:00:00', 'Domaine Leflaive Montrachet Grand Cru', 'Domaine-Leflaive-Montrachet-Grand-Cru', 'Domaine Leflaive Montrachet Grand Cru', 'http://www.docdunet.fr/wp-content/uploads/2012/02/Vin-rouge-hypertension.jpg'),
(4, '2014-04-16 00:00:00', '2014-04-11 00:00:00', 'Petrus', 'Petrus', 'Pomerol, France', 'http://static.wine-searcher.net/images/labels/71/27/petrus-pomerol-france-10187127.jpg'),
(5, '2014-04-10 00:00:00', '2014-04-10 00:00:00', 'Chateau Margaux', 'Chateau-Margaux', 'Margaux, France', 'http://static.wine-searcher.net/images/labels/47/28/chateau-margaux-margaux-france-10474728.jpg'),
(6, '2014-04-10 00:00:00', '2014-04-11 00:00:00', 'Vignobles Andre Lurton Chateau de Cruzeau', 'Vignobles-Andre-Lurton-Chateau-de-Cruzeau', 'Pessac-Leognan, France', 'http://static.wine-searcher.net/images/labels/10/89/vignobles-andre-lurton-chateau-de-cruzeau-pessac-leognan-france-10311089.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `wine_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `wishlists`
--

INSERT INTO `wishlists` (`id`, `created`, `updated`, `user_id`, `wine_id`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 4),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 5);
