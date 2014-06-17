-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 17 Juin 2014 à 14:39
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
  `qty` int(11) NOT NULL,
  `vintage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `cellars`
--

INSERT INTO `cellars` (`id`, `created`, `updated`, `user_id`, `wine_id`, `qty`, `vintage`) VALUES
(17, '2014-05-13 21:53:10', '2014-05-13 21:53:10', 7, 2, 2, 1234),
(18, '2014-05-14 08:35:24', '2014-05-14 08:35:24', 7, 3, 3, 1456),
(19, '2014-05-15 18:24:11', '2014-05-15 18:24:11', 7, 1, 54, 1987),
(20, '2014-06-15 14:14:30', '2014-06-15 14:14:30', 7, 4, 5, 1238),
(21, '2014-06-15 14:21:30', '2014-06-15 14:21:30', 7, 1, 1, 1992),
(22, '2014-06-15 14:21:30', '2014-06-15 14:21:30', 7, 4, 3, 1345),
(23, '2014-06-15 14:22:07', '2014-06-15 14:22:07', 7, 4, 6, 1754),
(24, '2014-06-15 14:22:07', '2014-06-15 14:22:07', 7, 3, 8, 1234),
(25, '2014-06-15 14:30:46', '2014-06-15 14:30:46', 7, 4, 13, 1798),
(26, '2014-06-15 14:53:48', '2014-06-15 14:53:48', 7, 1, 32, 2003),
(27, '2014-06-15 14:55:11', '2014-06-15 14:55:11', 7, 2, 12, 1953),
(28, '2014-06-15 14:55:11', '2014-06-15 14:55:11', 7, 4, 13, 1953),
(29, '2014-06-15 14:55:46', '2014-06-15 14:55:46', 7, 1, 10, 1987),
(30, '2014-06-15 14:56:08', '2014-06-15 14:56:08', 7, 1, 2, 1992),
(31, '2014-06-15 15:40:46', '2014-06-15 15:40:46', 7, 1, -32, 1987),
(32, '2014-06-15 15:43:08', '2014-06-15 15:43:08', 7, 2, 0, 2010),
(33, '2014-06-15 15:43:44', '2014-06-15 15:43:44', 7, 2, 12, 2010),
(34, '2014-06-15 15:43:51', '2014-06-15 15:43:51', 7, 2, 13, 2012),
(35, '2014-06-15 15:44:06', '2014-06-15 15:44:06', 7, 1, 2, 1992),
(36, '2014-06-15 16:01:18', '2014-06-15 16:01:18', 7, 1, -32, 2003),
(37, '2014-06-15 16:24:53', '2014-06-15 16:24:53', 7, 1, -32, 1987),
(38, '2014-06-15 16:24:59', '2014-06-15 16:24:59', 7, 1, -5, 1992),
(39, '2014-06-15 16:25:12', '2014-06-15 16:25:12', 7, 1, 32, 1563),
(40, '2014-06-16 14:22:29', '2014-06-16 14:22:29', 7, 5, 32, 1990),
(41, '2014-06-16 15:57:59', '2014-06-16 15:57:59', 7, 1, -20, 1563);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

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
(36, '2014-05-12 17:16:37', '2014-05-12 17:16:37', 'Yeah !', 7, 132),
(37, '2014-05-13 09:47:03', '2014-05-13 09:47:03', 'zqdqzd', 7, 135),
(38, '2014-05-13 09:47:07', '2014-05-13 09:47:07', 'qzdqzqz', 7, 134),
(39, '2014-05-13 11:20:52', '2014-05-13 11:20:52', 'LOLILOL', 7, 138),
(40, '2014-05-13 16:17:47', '2014-05-13 16:17:47', 'LOOOOl', 7, 142),
(41, '2014-05-14 15:38:38', '2014-05-14 15:38:38', 'j;h;j;', 7, 144),
(42, '2014-05-15 16:37:55', '2014-05-15 16:37:55', '&lt;script&gt;alert(''coucou'')&lt;/script&gt;', 7, 147),
(43, '2014-05-15 16:50:11', '2014-05-15 16:50:11', 'vintage', 7, 146),
(44, '2014-06-16 18:07:33', '2014-06-16 18:07:33', 'Coucou !', 7, 121),
(45, '2014-06-16 20:16:43', '2014-06-16 20:16:43', 'Comm'' swag', 7, 165);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `private` int(11) NOT NULL,
  `where` varchar(300) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(500) NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `created`, `updated`, `private`, `where`, `name`, `slug`, `date`, `description`, `author_id`) VALUES
(1, '2014-04-08 00:00:00', '2014-04-09 00:00:00', 0, '', 'La foire aux vins', 'La-foire-aux-vins', '2014-04-23 00:00:00', 'Une foire comme on les aime !', 1),
(2, '2014-04-18 00:00:00', '2014-04-25 00:00:00', 0, '', 'Degustation de Chateau-Lapompe', 'Degustation-de-Chateau-Lapompe', '2014-04-22 00:00:00', 'Venez nombreux', 1),
(3, '2014-04-09 00:00:00', '2014-04-17 00:00:00', 0, '', 'Viens boire un vin', 'Viens-boire-un-vin', '2014-04-17 00:00:00', 'Amenez vos vins !', 1),
(4, '2014-04-18 00:00:00', '2014-04-12 00:00:00', 0, '', 'Le salon du vin', 'Le-salon-du-vin', '2014-04-30 00:00:00', 'Venez au salon du vin !', 1),
(5, '2014-04-09 00:00:00', '2014-04-09 00:00:00', 0, '', 'La traditionnelle St Vincent', 'La-traditionnelle-St-Vincent', '2014-04-26 00:00:00', 'La traditionnelle St Vincent', 2),
(6, '2014-04-09 00:00:00', '2014-04-17 00:00:00', 0, '', 'La Route des Vins', 'La-Route-des-Vins', '2014-04-24 00:00:00', 'La Route des Vins', 1),
(7, '2014-04-08 00:00:00', '2014-05-08 13:51:00', 0, '', 'Vinitech', 'Vinitech', '2014-04-30 00:00:00', 'Vinitech', 3),
(8, '2014-04-07 00:00:00', '2014-04-09 00:00:00', 0, '', 'Jazz and Wine', 'Jazz-and-Wine', '2014-04-04 00:00:00', 'Jazz and Win', 1),
(9, '2014-04-08 00:00:00', '2014-04-02 00:00:00', 0, '', 'Week-end des Grands Crus', 'Week-end-des-Grands-Crus', '2014-04-08 00:00:00', 'Week-end des Grands Crus', 1),
(10, '2014-04-08 00:00:00', '2014-04-01 00:00:00', 0, '', 'Salon des vins des vignerons independants', 'Salon-des-vins-des-vignerons-independants', '2014-04-08 00:00:00', 'Salon des vins des vignerons independants', 1),
(11, '2014-05-06 00:00:00', '2014-05-15 00:00:00', 0, '', 'Test1', 'unet', '2014-05-22 00:00:00', 'une', 3),
(12, '2014-05-13 00:00:00', '2014-05-08 00:00:00', 0, '', 'Vinmania', 'deuzet', '2014-05-22 00:00:00', 'desc', 3),
(13, '2014-05-06 00:00:00', '2014-05-15 00:00:00', 0, '', 'Trinquons', 'uner', '2014-05-22 00:00:00', 'une', 3),
(14, '2014-05-13 00:00:00', '2014-05-08 00:00:00', 0, '', 'Vinparty', 'deuzre', '2014-05-22 00:00:00', 'desc', 3),
(15, '2014-05-06 00:00:00', '2014-05-15 00:00:00', 0, '', 'Vin a moi', 'unez', '2014-05-22 00:00:00', 'une', 3),
(16, '2014-05-13 00:00:00', '2014-05-08 00:00:00', 0, '', 'Open rose', 'deuzez', '2014-05-22 00:00:00', 'desc', 3),
(17, '2014-05-06 00:00:00', '2014-05-15 00:00:00', 0, '', 'Open blanc', 'uneu', '2014-05-22 00:00:00', 'une', 3),
(18, '2014-05-13 00:00:00', '2014-05-08 00:00:00', 0, '', 'Open rouge', 'deuzeu', '2014-05-22 00:00:00', 'desc', 3),
(19, '2014-05-06 00:00:00', '2014-05-15 00:00:00', 0, '', 'Open all', 'unenh', '2014-05-22 00:00:00', 'une', 3),
(20, '2014-05-13 00:00:00', '2014-05-08 00:00:00', 0, '', 'Projet wine', 'deuzenh', '2014-05-22 00:00:00', 'desc', 3),
(21, '2014-05-27 00:00:00', '2014-05-09 00:00:00', 0, '', 'Wine me !', 'load-me', '2014-05-07 00:00:00', 'dddddd', 1),
(22, '2014-06-16 15:54:21', '2014-06-16 15:54:21', 1, 'LÃ ', 'COUOU', 'COUOU', '2012-12-12 00:00:00', 'desc', 7),
(23, '2014-06-17 13:50:43', '2014-06-17 13:50:43', 1, 'Paris', 'Projet W', 'Projet-W', '0000-00-00 00:00:00', 'BrÃ»lons ma maison', 7);

-- --------------------------------------------------------

--
-- Structure de la table `events_invitations`
--

CREATE TABLE `events_invitations` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 1, 7),
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
-- Structure de la table `events_wines`
--

CREATE TABLE `events_wines` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

-- --------------------------------------------------------

--
-- Structure de la table `friendshipsrequests`
--

CREATE TABLE `friendshipsrequests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `link_id` int(11) NOT NULL,
  `link_object` text NOT NULL,
  `type` varchar(200) NOT NULL COMMENT 'post, event, ...',
  `msg` text NOT NULL,
  `attach_user_id` int(11) DEFAULT NULL,
  `attach_event_id` int(11) DEFAULT NULL,
  `attach_wine_id` int(11) DEFAULT NULL,
  `attach_post_id` int(11) DEFAULT NULL,
  `author_event_id` int(11) DEFAULT NULL,
  `author_user_id` int(11) DEFAULT NULL,
  `author_wine_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `created`, `updated`, `link_id`, `link_object`, `type`, `msg`, `attach_user_id`, `attach_event_id`, `attach_wine_id`, `attach_post_id`, `author_event_id`, `author_user_id`, `author_wine_id`) VALUES
(1, '2014-06-03 00:00:00', '2014-06-11 00:00:00', 7, 'User', 'post_mention', '&agrave; &eacute;crit en vous mentionnant', NULL, NULL, NULL, 121, 0, 2, 0),
(2, '2014-06-04 00:00:00', '2014-06-12 00:00:00', 7, 'User', 'event_join', '&agrave; rejoins un &eacute;v&egrave;nement', NULL, 4, NULL, NULL, 0, 7, 0),
(3, '2014-06-12 00:00:00', '2014-06-19 00:00:00', 7, 'User', 'wine_add', '&agrave; ajout&eacute; un vin &agrave; sa cave', NULL, NULL, 5, NULL, 0, 7, 0),
(4, '2014-06-16 19:31:57', '2014-06-16 19:31:57', 1, 'User', 'post', '', NULL, NULL, NULL, 154, NULL, 7, NULL),
(5, '2014-06-16 19:42:00', '2014-06-16 19:42:00', 11, 'Event', 'post', '', NULL, NULL, NULL, 155, NULL, 7, NULL),
(6, '2014-06-16 19:43:20', '2014-06-16 19:43:20', 11, 'Event', 'post', '', NULL, NULL, NULL, 156, NULL, 7, NULL),
(7, '2014-06-16 19:43:32', '2014-06-16 19:43:32', 11, 'Event', 'post', '', NULL, NULL, NULL, 157, NULL, 7, NULL),
(8, '2014-06-16 19:43:43', '2014-06-16 19:43:43', 11, 'Event', 'post', '', NULL, NULL, NULL, 158, NULL, 7, NULL),
(9, '2014-06-16 19:44:09', '2014-06-16 19:44:09', 11, 'Event', 'post', '', NULL, NULL, NULL, 159, NULL, 7, NULL),
(10, '2014-06-16 19:45:26', '2014-06-16 19:45:26', 11, 'Event', 'post', '', NULL, NULL, NULL, 160, NULL, 7, NULL),
(11, '2014-06-16 19:47:50', '2014-06-16 19:47:50', 11, 'Event', 'post', '', NULL, NULL, NULL, 161, NULL, 7, NULL),
(12, '2014-06-16 19:49:25', '2014-06-16 19:49:25', 11, 'Event', 'post', '', NULL, NULL, NULL, 162, NULL, 7, NULL),
(13, '2014-06-16 19:49:48', '2014-06-16 19:49:48', 11, 'Event', 'post', '', NULL, NULL, NULL, 163, NULL, 7, NULL),
(14, '2014-06-16 19:51:35', '2014-06-16 19:51:35', 11, 'Event', 'post', '', NULL, NULL, NULL, 164, NULL, 7, NULL),
(15, '2014-06-16 19:51:54', '2014-06-16 19:51:54', 11, 'Event', 'post', '', NULL, NULL, NULL, 165, NULL, 7, NULL),
(16, '2014-06-17 10:51:09', '2014-06-17 10:51:09', 1, 'Wine', 'post', '', NULL, NULL, NULL, 166, NULL, 7, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `author_id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1:post;2:actus',
  `text` text NOT NULL,
  `link_id` int(11) NOT NULL,
  `link_object` varchar(100) NOT NULL,
  `attach_wine_id` int(11) NOT NULL,
  `attach_user_id` int(11) NOT NULL,
  `attach_event_id` int(11) NOT NULL,
  `link_user_id` int(11) NOT NULL,
  `link_wine_id` int(11) NOT NULL,
  `link_event_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `created`, `updated`, `author_id`, `type`, `text`, `link_id`, `link_object`, `attach_wine_id`, `attach_user_id`, `attach_event_id`, `link_user_id`, `link_wine_id`, `link_event_id`) VALUES
(1, '2014-05-08 00:00:00', '2014-05-15 00:00:00', 1, 0, 'Coucou, regarde ce vin !! <3', 1, 'Event', 1, 0, 0, 0, 0, 0),
(2, '2014-05-09 00:00:00', '2014-05-07 00:00:00', 1, 0, 'YOOO', 1, 'User', 0, 0, 0, 0, 0, 0),
(3, '2014-05-07 00:00:00', '2014-05-16 00:00:00', 7, 0, 'Testons moussaillons !', 1, 'Event', 0, 0, 2, 0, 0, 0),
(4, '2014-05-11 16:11:16', '2014-05-11 16:11:16', 7, 0, 'POULE', 1, 'User', 0, 0, 0, 0, 0, 0),
(5, '2014-05-11 16:24:24', '2014-05-11 16:24:24', 7, 0, 'LOL', 1, 'User', 0, 0, 0, 0, 0, 0),
(6, '2014-05-11 16:24:35', '2014-05-11 16:24:35', 7, 0, 'LOL', 1, 'User', 0, 0, 0, 0, 0, 0),
(7, '2014-05-11 16:25:10', '2014-05-11 16:25:10', 7, 0, 'POULE', 1, 'User', 0, 0, 0, 0, 0, 0),
(8, '2014-05-11 16:26:44', '2014-05-11 16:26:44', 7, 0, 'CANARD', 1, 'User', 0, 0, 0, 0, 0, 0),
(9, '2014-05-11 16:27:50', '2014-05-11 16:27:50', 7, 0, 'POULET', 1, 'User', 0, 0, 0, 0, 0, 0),
(10, '2014-05-11 16:29:29', '2014-05-11 16:29:29', 7, 0, 'CANARI', 1, 'User', 0, 0, 0, 0, 0, 0),
(11, '2014-05-11 16:30:59', '2014-05-11 16:30:59', 7, 0, 'KOALA', 1, 'User', 0, 0, 0, 0, 0, 0),
(12, '2014-05-11 16:31:27', '2014-05-11 16:31:27', 7, 0, 'GIRAFE', 1, 'User', 0, 0, 0, 0, 0, 0),
(13, '2014-05-11 16:33:59', '2014-05-11 16:33:59', 7, 0, 'Nouveau comm'' ;)', 1, 'User', 0, 0, 0, 0, 0, 0),
(14, '2014-05-11 16:34:11', '2014-05-11 16:34:11', 7, 0, 'Nouveau comm'' ;)', 1, 'User', 0, 0, 0, 0, 0, 0),
(15, '2014-05-11 16:34:36', '2014-05-11 16:34:36', 7, 0, 'Un commentaire utile :)', 1, 'User', 0, 0, 0, 0, 0, 0),
(16, '2014-05-11 16:35:13', '2014-05-11 16:35:13', 7, 0, 'Laisser un commentaire', 1, 'User', 0, 0, 0, 0, 0, 0),
(17, '2014-05-11 16:36:04', '2014-05-11 16:36:04', 7, 0, 'Laisser un commentaire', 1, 'User', 0, 0, 0, 0, 0, 0),
(18, '2014-05-11 16:36:21', '2014-05-11 16:36:21', 7, 0, 'Laisser un commentaire', 1, 'User', 0, 0, 0, 0, 0, 0),
(19, '2014-05-11 16:36:25', '2014-05-11 16:36:25', 7, 0, 'Laisser un commentaire', 1, 'User', 0, 0, 0, 0, 0, 0),
(20, '2014-05-11 16:36:30', '2014-05-11 16:36:30', 7, 0, 'Laisser un commentairerr', 1, 'User', 0, 0, 0, 0, 0, 0),
(21, '2014-05-11 16:36:45', '2014-05-11 16:36:45', 7, 0, 'de', 1, 'User', 0, 0, 0, 0, 0, 0),
(22, '2014-05-11 16:37:11', '2014-05-11 16:37:11', 7, 0, 'DEUTCH', 1, 'User', 0, 0, 0, 0, 0, 0),
(23, '2014-05-11 16:37:18', '2014-05-11 16:37:18', 7, 0, 'YOOOO', 1, 'User', 0, 0, 0, 0, 0, 0),
(24, '2014-05-11 16:37:22', '2014-05-11 16:37:22', 7, 0, 'YOOOO', 1, 'User', 0, 0, 0, 0, 0, 0),
(25, '2014-05-11 16:37:24', '2014-05-11 16:37:24', 7, 0, 'YOOOO', 1, 'User', 0, 0, 0, 0, 0, 0),
(26, '2014-05-11 16:37:25', '2014-05-11 16:37:25', 7, 0, 'YOOOO', 1, 'User', 0, 0, 0, 0, 0, 0),
(27, '2014-05-11 16:37:26', '2014-05-11 16:37:26', 7, 0, 'YOOOO', 1, 'User', 0, 0, 0, 0, 0, 0),
(28, '2014-05-11 16:37:27', '2014-05-11 16:37:27', 7, 0, 'YOOOO', 1, 'User', 0, 0, 0, 0, 0, 0),
(29, '2014-05-11 16:38:14', '2014-05-11 16:38:14', 7, 0, 'BOUUUUUUUUUUH !!', 1, 'User', 0, 0, 0, 0, 0, 0),
(30, '2014-05-11 16:40:34', '2014-05-11 16:40:34', 7, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 'User', 0, 0, 0, 0, 0, 0),
(31, '2014-05-11 16:40:59', '2014-05-11 16:40:59', 7, 0, 'Non, je pense pas.\nSaut de ligne swaggy !\nb.', 1, 'User', 0, 0, 0, 0, 0, 0),
(32, '2014-05-11 16:41:27', '2014-05-11 16:41:27', 7, 0, 'YOOOOOO', 1, 'User', 0, 0, 0, 0, 0, 0),
(33, '2014-05-11 16:41:48', '2014-05-11 16:41:48', 7, 0, '', 1, 'User', 0, 0, 0, 0, 0, 0),
(34, '2014-05-11 16:45:36', '2014-05-11 16:45:36', 7, 0, 'coucou           Ã§a va ?', 1, 'User', 0, 0, 0, 0, 0, 0),
(35, '2014-05-11 16:47:09', '2014-05-11 16:47:09', 7, 0, 'Laisser un commentaire', 1, 'User', 0, 0, 0, 0, 0, 0),
(36, '2014-05-11 16:47:28', '2014-05-11 16:47:28', 7, 0, 'Laisser un commentaire', 1, 'User', 0, 0, 0, 0, 0, 0),
(37, '2014-05-11 16:55:13', '2014-05-11 16:55:13', 7, 0, 'Coucou', 1, 'User', 0, 0, 0, 0, 0, 0),
(38, '2014-05-11 16:57:01', '2014-05-11 16:57:01', 7, 0, 'Coucou', 1, 'User', 0, 0, 0, 0, 0, 0),
(39, '2014-05-11 17:04:45', '2014-05-11 17:04:45', 7, 0, 'Je peux laisser un comm ? :D', 1, 'Event', 0, 0, 0, 0, 0, 0),
(40, '2014-05-11 17:05:33', '2014-05-11 17:05:33', 7, 0, 'Un new comm'' bro !', 1, 'Wine', 0, 0, 0, 0, 0, 0),
(41, '2014-05-11 17:07:17', '2014-05-11 17:07:17', 7, 0, 'PETROUUUUUUUS <3', 4, 'Wine', 0, 0, 0, 0, 0, 0),
(42, '2014-05-11 17:43:01', '2014-05-11 17:43:01', 7, 0, 'Un post coolissimement cool :)', 1, 'User', 0, 0, 0, 0, 0, 0),
(43, '2014-05-11 17:45:06', '2014-05-11 17:45:06', 7, 0, 'Testou', 1, 'User', 0, 0, 0, 0, 0, 0),
(44, '2014-05-11 18:32:14', '2014-05-11 18:32:14', 7, 0, 'Coucou les petits vins !', 1, 'Event', 0, 0, 0, 0, 0, 0),
(45, '2014-05-11 18:36:45', '2014-05-11 18:36:45', 7, 0, 'coucou', 1, 'Event', 0, 0, 0, 0, 0, 0),
(46, '2014-05-11 18:41:05', '2014-05-11 18:41:05', 7, 0, 'Hello', 1, 'Event', 0, 0, 0, 0, 0, 0),
(47, '2014-05-11 18:41:45', '2014-05-11 18:41:45', 7, 0, 'Pouet', 1, 'Event', 0, 0, 0, 0, 0, 0),
(48, '2014-05-11 19:03:53', '2014-05-11 19:03:53', 7, 0, 'Coucou !', 1, 'User', 0, 0, 0, 0, 0, 0),
(49, '2014-05-11 20:51:10', '2014-05-11 20:51:10', 7, 0, '1', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(50, '2014-05-11 20:51:12', '2014-05-11 20:51:12', 7, 0, '2', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(51, '2014-05-11 20:51:15', '2014-05-11 20:51:15', 7, 0, '3', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(52, '2014-05-11 20:51:18', '2014-05-11 20:51:18', 7, 0, '4', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(53, '2014-05-11 20:51:20', '2014-05-11 20:51:20', 7, 0, '5', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(54, '2014-05-11 20:51:25', '2014-05-11 20:51:25', 7, 0, '6', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(55, '2014-05-11 20:51:28', '2014-05-11 20:51:28', 7, 0, '7', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(56, '2014-05-11 20:51:31', '2014-05-11 20:51:31', 7, 0, '8', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(57, '2014-05-11 20:51:49', '2014-05-11 20:51:49', 7, 0, '1', 7, 'Event', 0, 0, 0, 0, 0, 0),
(58, '2014-05-11 20:52:01', '2014-05-11 20:52:01', 7, 0, '1', 2, 'User', 0, 0, 0, 0, 0, 0),
(59, '2014-05-11 20:52:07', '2014-05-11 20:52:07', 7, 0, '2', 2, 'User', 0, 0, 0, 0, 0, 0),
(60, '2014-05-11 20:52:10', '2014-05-11 20:52:10', 7, 0, '3', 2, 'User', 0, 0, 0, 0, 0, 0),
(61, '2014-05-11 20:54:21', '2014-05-11 20:54:21', 7, 0, '4', 2, 'User', 0, 0, 0, 0, 0, 0),
(62, '2014-05-11 20:54:24', '2014-05-11 20:54:24', 7, 0, '5', 2, 'User', 0, 0, 0, 0, 0, 0),
(63, '2014-05-11 20:54:26', '2014-05-11 20:54:26', 7, 0, '6', 2, 'User', 0, 0, 0, 0, 0, 0),
(64, '2014-05-11 20:54:29', '2014-05-11 20:54:29', 7, 0, '7', 2, 'User', 0, 0, 0, 0, 0, 0),
(65, '2014-05-11 20:54:36', '2014-05-11 20:54:36', 7, 0, '8', 2, 'User', 0, 0, 0, 0, 0, 0),
(66, '2014-05-11 20:54:39', '2014-05-11 20:54:39', 7, 0, '9', 2, 'User', 0, 0, 0, 0, 0, 0),
(67, '2014-05-11 20:54:45', '2014-05-11 20:54:45', 7, 0, '10', 2, 'User', 0, 0, 0, 0, 0, 0),
(68, '2014-05-11 20:54:54', '2014-05-11 20:54:54', 7, 0, '11', 2, 'User', 0, 0, 0, 0, 0, 0),
(69, '2014-05-11 20:55:09', '2014-05-11 20:55:09', 7, 0, '12', 2, 'User', 0, 0, 0, 0, 0, 0),
(70, '2014-05-11 20:55:12', '2014-05-11 20:55:12', 7, 0, '13', 2, 'User', 0, 0, 0, 0, 0, 0),
(71, '2014-05-11 20:55:16', '2014-05-11 20:55:16', 7, 0, '14', 2, 'User', 0, 0, 0, 0, 0, 0),
(72, '2014-05-11 20:55:19', '2014-05-11 20:55:19', 7, 0, '15', 2, 'User', 0, 0, 0, 0, 0, 0),
(73, '2014-05-11 20:58:45', '2014-05-11 20:58:45', 7, 0, 'COUCOU !', 1, 'User', 0, 0, 0, 0, 0, 0),
(74, '2014-05-11 22:40:28', '2014-05-11 22:40:28', 7, 0, 'Test User', 7, 'User', 0, 0, 0, 0, 0, 0),
(75, '2014-05-11 22:42:07', '2014-05-11 22:42:07', 7, 0, 'd', 7, 'User', 0, 0, 0, 0, 0, 0),
(76, '2014-05-11 22:42:31', '2014-05-11 22:42:31', 7, 0, 'coucou', 7, 'User', 0, 0, 0, 0, 0, 0),
(77, '2014-05-11 22:43:54', '2014-05-11 22:43:54', 7, 0, 'Message', 7, 'User', 0, 2, 0, 0, 0, 0),
(78, '2014-05-11 22:45:06', '2014-05-11 22:45:06', 7, 0, 'dd', 7, 'User', 0, 0, 0, 0, 0, 0),
(79, '2014-05-11 22:49:04', '2014-05-11 22:49:04', 7, 0, 'YO !', 1, 'User', 0, 0, 0, 0, 0, 0),
(80, '2014-05-11 22:49:44', '2014-05-11 22:49:44', 7, 0, 'qzdqz', 1, 'User', 0, 0, 0, 0, 0, 0),
(81, '2014-05-11 22:49:52', '2014-05-11 22:49:52', 7, 0, 'd', 1, 'User', 0, 0, 0, 0, 0, 0),
(82, '2014-05-11 22:50:23', '2014-05-11 22:50:23', 7, 0, 'dddd', 1, 'User', 0, 0, 0, 0, 0, 0),
(83, '2014-05-11 22:50:40', '2014-05-11 22:50:40', 7, 0, 'zqddzqd', 1, 'User', 0, 0, 0, 0, 0, 0),
(84, '2014-05-11 22:51:49', '2014-05-11 22:51:49', 7, 0, 'COOL :D', 1, 'User', 0, 2, 0, 0, 0, 0),
(85, '2014-05-11 22:52:23', '2014-05-11 22:52:23', 7, 0, 'qzdq', 1, 'User', 0, 2, 0, 0, 0, 0),
(86, '2014-05-11 22:53:28', '2014-05-11 22:53:28', 7, 0, 'dqzdzd', 1, 'User', 0, 2, 0, 0, 0, 0),
(87, '2014-05-11 22:53:58', '2014-05-11 22:53:58', 7, 0, 'zqdzqd', 1, 'User', 0, 2, 0, 0, 0, 0),
(88, '2014-05-11 22:58:01', '2014-05-11 22:58:01', 7, 0, 'YOOOOO !', 1, 'User', 0, 1, 0, 0, 0, 0),
(89, '2014-05-11 22:58:20', '2014-05-11 22:58:20', 7, 0, 'FRE', 1, 'User', 0, 8, 0, 0, 0, 0),
(90, '2014-05-12 09:51:42', '2014-05-12 09:51:42', 7, 0, 'Test !', 1, 'User', 0, 1, 0, 0, 0, 0),
(91, '2014-05-12 09:52:50', '2014-05-12 09:52:50', 7, 0, 'I''m friend with him ! ;)', 1, 'User', 0, 3, 0, 0, 0, 0),
(92, '2014-05-12 09:57:16', '2014-05-12 09:57:16', 7, 0, 'Cool !', 3, 'User', 0, 1, 0, 0, 0, 0),
(93, '2014-05-12 10:06:29', '2014-05-12 10:06:29', 7, 0, 'Come here !', 3, 'User', 0, 0, 1, 0, 0, 0),
(94, '2014-05-12 10:07:37', '2014-05-12 10:07:37', 7, 0, 'LOL', 3, 'User', 0, 0, 2, 0, 0, 0),
(95, '2014-05-12 10:11:06', '2014-05-12 10:11:06', 7, 0, 'Boire !', 3, 'User', 1, 0, 0, 0, 0, 0),
(96, '2014-05-12 10:13:33', '2014-05-12 10:13:33', 7, 0, 'Coucou bro !', 3, 'User', 2, 0, 0, 0, 0, 0),
(97, '2014-05-12 10:16:37', '2014-05-12 10:16:37', 7, 0, 'Coucou !', 3, 'User', 0, 2, 0, 0, 0, 0),
(98, '2014-05-12 10:17:33', '2014-05-12 10:17:33', 7, 0, 'C', 3, 'User', 0, 2, 0, 0, 0, 0),
(99, '2014-05-12 10:27:33', '2014-05-12 10:27:33', 7, 0, 'Yoh !', 3, 'User', 0, 0, 0, 0, 0, 0),
(100, '2014-05-12 10:28:35', '2014-05-12 10:28:35', 7, 0, 'PLOP', 3, 'User', 0, 0, 0, 0, 0, 0),
(101, '2014-05-12 10:28:37', '2014-05-12 10:28:37', 7, 0, 'sss', 3, 'User', 0, 0, 0, 0, 0, 0),
(102, '2014-05-12 10:29:10', '2014-05-12 10:29:10', 7, 0, 'PLOP', 3, 'User', 0, 2, 0, 0, 0, 0),
(103, '2014-05-12 10:29:13', '2014-05-12 10:29:13', 7, 0, 'ddd', 3, 'User', 0, 0, 0, 0, 0, 0),
(104, '2014-05-12 10:32:45', '2014-05-12 10:32:45', 7, 0, 'Couou', 3, 'User', 0, 2, 0, 0, 0, 0),
(105, '2014-05-12 10:32:53', '2014-05-12 10:32:53', 7, 0, 'xx', 3, 'User', 0, 1, 0, 0, 0, 0),
(106, '2014-05-12 10:34:33', '2014-05-12 10:34:33', 7, 0, 'ddd', 1, 'User', 0, 3, 0, 0, 0, 0),
(107, '2014-05-12 10:46:31', '2014-05-12 10:46:31', 7, 0, 'Coucou !', 1, 'User', 1, 0, 0, 0, 0, 0),
(108, '2014-05-12 10:50:18', '2014-05-12 10:50:18', 7, 0, 'mm', 1, 'User', 3, 0, 0, 0, 0, 0),
(109, '2014-05-12 11:31:10', '2014-05-12 11:31:10', 7, 0, 'Yop', 1, 'User', 0, 8, 0, 0, 0, 0),
(110, '2014-05-12 11:31:30', '2014-05-12 11:31:30', 7, 0, 'r', 1, 'User', 0, 0, 1, 0, 0, 0),
(111, '2014-05-12 12:06:57', '2014-05-12 12:06:57', 7, 0, 'Test', 1, 'User', 0, 0, 1, 0, 0, 0),
(112, '2014-05-12 12:08:23', '2014-05-12 12:08:23', 7, 0, 'fff', 1, 'User', 0, 0, 1, 0, 0, 0),
(113, '2014-05-12 12:09:31', '2014-05-12 12:09:31', 7, 0, 'fzfqzzqf', 1, 'User', 0, 0, 1, 0, 0, 0),
(114, '2014-05-12 12:09:59', '2014-05-12 12:09:59', 7, 0, 'qzdzqd', 1, 'User', 0, 0, 1, 0, 0, 0),
(115, '2014-05-12 12:11:19', '2014-05-12 12:11:19', 7, 0, 'ddd', 1, 'User', 0, 0, 1, 0, 0, 0),
(116, '2014-05-12 12:12:45', '2014-05-12 12:12:45', 7, 0, 'C', 1, 'User', 0, 0, 10, 0, 0, 0),
(117, '2014-05-12 12:14:48', '2014-05-12 12:14:48', 7, 0, 'Him !', 1, 'User', 0, 1, 0, 0, 0, 0),
(118, '2014-05-12 12:21:49', '2014-05-12 12:21:49', 7, 0, 'qzqdqz', 1, 'User', 0, 2, 0, 0, 0, 0),
(119, '2014-05-12 12:22:19', '2014-05-12 12:22:19', 7, 0, 'zdzd', 1, 'User', 0, 8, 0, 0, 0, 0),
(120, '2014-05-12 12:25:27', '2014-05-12 12:25:27', 7, 0, 'WIIIINE !!', 1, 'User', 1, 0, 0, 0, 0, 0),
(121, '2014-05-12 12:36:42', '2014-05-12 12:36:42', 3, 0, 'LOL', 1, 'User', 0, 7, 0, 2, 0, 0),
(122, '2014-05-12 12:52:41', '2014-05-12 12:52:41', 7, 0, 'JOPM', 1, 'User', 0, 3, 0, 0, 0, 0),
(123, '2014-05-12 12:53:08', '2014-05-12 12:53:08', 7, 0, 'Different types of response to $.ajax() call are subjected to different kinds of pre-processing before being passed to the success handler. The type of pre-processing depends by default upon the Content-Type of the response, but can be set explicitly using the dataType option. If the dataType option is provided, the Content-Type header of the response will be disregarded.\n\nThe available data types are text, html, xml, json, jsonp, and script.\n\nIf text or html is specified, no pre-processing occurs. The data is simply passed on to the success handler, and made available through the responseText property of the jqXHR object.\n\nIf xml is specified, the response is parsed using jQuery.parseXML before being passed, as an XMLDocument, to the success handler. The XML document is made available through the responseXML property of the jqXHR object.\n\nIf json is specified, the response is parsed using jQuery.parseJSON before being passed, as an object, to the success handler. The parsed JSON object is made available through the responseJSON property of the jqXHR object.\n\nIf script is specified, $.ajax() will execute the JavaScript that is received from the server before passing it on to the success handler as a string.\n\nIf jsonp is specified, $.ajax() will automatically append a query string parameter of (by default) callback=? to the URL. The jsonp and jsonpCallback properties of the settings passed to $.ajax() can be used to specify, respectively, the name of the query string parameter and the name of the JSONP callback function. The server should return valid JavaScript that passes the JSON response into the callback function. $.ajax() will execute the returned JavaScript, calling the JSONP callback function, before passing the JSON object contained in the response to the $.ajax() success handler.', 1, 'User', 0, 2, 0, 0, 0, 0),
(124, '2014-05-12 16:12:20', '2014-05-12 16:12:20', 7, 0, 'coucou', 1, 'User', 0, 0, 0, 0, 0, 0),
(125, '2014-05-12 16:12:34', '2014-05-12 16:12:34', 7, 0, 'fff', 1, 'User', 0, 0, 0, 0, 0, 0),
(126, '2014-05-12 16:13:10', '2014-05-12 16:13:10', 7, 0, 'dzqzdqd', 1, 'User', 0, 0, 0, 0, 0, 0),
(127, '2014-05-12 16:13:15', '2014-05-12 16:13:15', 7, 0, 'zqdzq', 1, 'User', 0, 1, 0, 0, 0, 0),
(128, '2014-05-12 16:37:38', '2014-05-12 16:37:38', 7, 0, 'Coucou toi ! ;)', 1, 'User', 3, 0, 0, 0, 0, 0),
(129, '2014-05-12 16:40:23', '2014-05-12 16:40:23', 7, 0, 'Viens !', 1, 'User', 0, 0, 2, 0, 0, 0),
(130, '2014-05-12 17:14:52', '2014-05-12 17:14:52', 7, 0, 'Un message !', 2, 'Event', 0, 0, 0, 0, 0, 0),
(131, '2014-05-12 17:16:10', '2014-05-12 17:16:10', 7, 0, 'Bois !', 2, 'Event', 3, 0, 0, 0, 0, 0),
(132, '2014-05-12 17:16:25', '2014-05-12 17:16:25', 7, 0, 'Look him !', 3, 'Wine', 0, 1, 0, 0, 0, 0),
(133, '2014-05-12 17:19:04', '2014-05-12 17:19:04', 7, 0, 'Cool !', 3, 'Wine', 0, 0, 2, 0, 0, 0),
(134, '2014-05-12 18:15:22', '2014-05-12 18:15:22', 7, 0, 'Beuverie !', 1, 'User', 3, 0, 0, 0, 0, 0),
(135, '2014-05-13 09:47:00', '2014-05-13 09:47:00', 7, 0, 'LOL', 1, 'User', 2, 0, 0, 0, 0, 0),
(136, '2014-05-13 09:49:04', '2014-05-13 09:49:04', 7, 0, 'POULE !', 4, 'Event', 0, 0, 0, 0, 0, 0),
(137, '2014-05-13 09:49:15', '2014-05-13 09:49:15', 7, 0, 'COOL !', 4, 'Event', 2, 0, 0, 0, 0, 0),
(138, '2014-05-13 11:20:37', '2014-05-13 11:20:37', 7, 0, 'LOL', 1, 'User', 0, 0, 3, 0, 0, 0),
(139, '2014-05-13 12:46:59', '2014-05-13 12:46:59', 7, 0, 'LOL', 1, 'User', 0, 2, 0, 0, 0, 0),
(140, '2014-05-13 13:45:06', '2014-05-13 13:45:06', 7, 0, 'LOL', 3, 'Wine', 0, 2, 0, 0, 0, 0),
(141, '2014-05-13 13:45:21', '2014-05-13 13:45:21', 7, 0, 'COUL', 3, 'Wine', 0, 0, 1, 0, 0, 0),
(142, '2014-05-13 16:16:33', '2014-05-13 16:16:33', 7, 0, 'LOOOOOOL', 11, 'Event', 0, 2, 0, 0, 0, 0),
(143, '2014-05-13 21:52:21', '2014-05-13 21:52:21', 7, 0, 'Regarde Ã§a ! ;-)', 1, 'User', 6, 0, 0, 0, 0, 0),
(144, '2014-05-14 15:38:14', '2014-05-14 15:38:14', 7, 0, 'Viens !', 1, 'Wine', 0, 0, 1, 0, 0, 0),
(145, '2014-05-15 16:31:08', '2014-05-15 16:31:08', 7, 0, 'lol', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(146, '2014-05-15 16:36:40', '2014-05-15 16:36:40', 7, 0, 'lol', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(147, '2014-05-15 16:37:29', '2014-05-15 16:37:29', 7, 0, '&lt;script&gt;alert(''coucou'')&lt;/script&gt;', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(148, '2014-05-16 10:57:15', '2014-05-16 10:57:15', 7, 0, 'LOL', 1, 'Wine', 0, 2, 0, 0, 0, 0),
(149, '2014-05-16 11:00:18', '2014-05-16 11:00:18', 7, 0, 'http://fozeek.fr', 2, 'Wine', 0, 0, 0, 0, 0, 0),
(150, '2014-05-26 10:26:19', '2014-05-26 10:26:19', 7, 0, 'LOL', 1, 'Event', 0, 0, 1, 0, 0, 0),
(151, '2014-06-16 18:14:16', '2014-06-16 18:14:16', 7, 0, 'Je te laisse un message :)', 1, 'User', 0, 0, 1, 0, 0, 0),
(152, '2014-06-16 18:15:28', '2014-06-16 18:15:28', 7, 0, 'Je te laisse encore un message', 1, 'User', 0, 0, 1, 0, 0, 0),
(153, '2014-06-16 18:16:00', '2014-06-16 18:16:00', 7, 0, 'Try again !', 1, 'User', 0, 0, 0, 3, 0, 0),
(154, '2014-06-16 19:31:57', '2014-06-16 19:31:57', 7, 0, 'Je test un message ;)', 1, 'User', 0, 0, 5, 1, 0, 0),
(155, '2014-06-16 19:42:00', '2014-06-16 19:42:00', 7, 0, 'Coucou test 1, trop mimi !', 11, 'Event', 0, 0, 3, 0, 0, 11),
(156, '2014-06-16 19:43:20', '2014-06-16 19:43:20', 7, 0, 'Encore un ? ;)', 11, 'Event', 0, 0, 0, 0, 0, 11),
(157, '2014-06-16 19:43:32', '2014-06-16 19:43:32', 7, 0, 'Encore un ? :)', 11, 'Event', 0, 0, 1, 0, 0, 11),
(158, '2014-06-16 19:43:43', '2014-06-16 19:43:43', 7, 0, 'dzqd', 11, 'Event', 0, 0, 0, 0, 0, 11),
(159, '2014-06-16 19:44:09', '2014-06-16 19:44:09', 7, 0, 'Coucou', 11, 'Event', 0, 0, 0, 0, 0, 11),
(160, '2014-06-16 19:45:26', '2014-06-16 19:45:26', 7, 0, 'Coucu de l&ocirc; ! ;)', 11, 'Event', 0, 0, 0, 0, 0, 11),
(161, '2014-06-16 19:47:50', '2014-06-16 19:47:50', 7, 0, 'coucou', 11, 'Event', 0, 0, 0, 0, 0, 11),
(162, '2014-06-16 19:49:25', '2014-06-16 19:49:25', 7, 0, 'Coucou toi ;)', 11, 'Event', 0, 0, 0, 0, 0, 11),
(163, '2014-06-16 19:49:48', '2014-06-16 19:49:48', 7, 0, 'Encore un !!!!!', 11, 'Event', 0, 0, 0, 0, 0, 11),
(164, '2014-06-16 19:51:35', '2014-06-16 19:51:35', 7, 0, 'Test again ! yeah ! ;)', 11, 'Event', 0, 0, 0, 0, 0, 11),
(165, '2014-06-16 19:51:54', '2014-06-16 19:51:54', 7, 0, 'THE ELEVEN !!!!!', 11, 'Event', 0, 0, 0, 0, 0, 11),
(166, '2014-06-17 10:51:09', '2014-06-17 10:51:09', 7, 0, 'Un p''tit message ;)', 1, 'Wine', 0, 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `wine_id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `comment` text NOT NULL,
  `vintage` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `reviews`
--

INSERT INTO `reviews` (`id`, `created`, `updated`, `wine_id`, `note`, `comment`, `vintage`, `author_id`) VALUES
(1, '2014-06-05 00:00:00', '2014-06-05 00:00:00', 1, 3, 'YEAH !', 1993, 7),
(2, '2014-06-05 00:00:00', '2014-06-05 00:00:00', 1, 4, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1993, 7),
(3, '2014-06-15 21:34:50', '2014-06-15 21:34:50', 1, 3, 'Comm !', 0, 7),
(4, '2014-06-16 14:18:56', '2014-06-16 14:18:56', 1, 5, 'LOl', 0, 7),
(5, '2014-06-16 14:19:07', '2014-06-16 14:19:07', 1, 5, 'Peut etre cool !', 1324, 7),
(6, '2014-06-16 14:19:18', '2014-06-16 14:19:18', 2, 2, 'Coucou', 1234, 7),
(7, '2014-06-17 10:52:37', '2014-06-17 10:52:37', 5, 5, 'Parfait ! :)', 1423, 7);

-- --------------------------------------------------------

--
-- Structure de la table `reviews_joins`
--

CREATE TABLE `reviews_joins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` text NOT NULL,
  `valid` int(11) NOT NULL,
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

INSERT INTO `users` (`id`, `code`, `valid`, `pseudo`, `slug`, `password`, `firstname`, `lastname`, `email`, `address`, `zip`, `city`, `created`, `updated`, `image`, `description`) VALUES
(1, '0', 0, 'qdeneuve', 'qdeneuve', '', 'Quentin', 'Deneuve', 'dark.quent@free.fr', '', 0, '', '2014-03-23 00:00:00', '2014-03-23 00:00:00', '', ''),
(2, '0', 0, 'luc', 'luc', '', 'Luc', 'Notsnad', '', '', 0, '', '2014-03-23 00:00:00', '2014-03-23 00:00:00', '', 'Bounjour'),
(3, '0', 0, 'HappyLo', 'HappyLo', '', 'Happy', 'Lo', '', '', 0, '', '2014-03-17 00:00:00', '2014-03-23 00:00:00', '', 'Whesh !'),
(7, '0', 0, 'fozeek', 'fozeek', '0e70432396ff578620a055f76d4773a0', 'Quentin', 'Deneuve', 'dark_kul@hotmail.fr', '90 rue Charles Godin', 91640, 'Briis sous Forges', '2014-04-08 22:22:16', '2014-04-08 22:22:16', '', ''),
(8, '0', 0, 'dqzdzqdzq', 'dqzdzqdzq', '0e70432396ff578620a055f76d4773a0', 'Quentin', 'Deneuve', 'dark_kul@hotmail.fr', '90 rue Charles Godin', 74924, 'Briis sous Forges', '2014-04-09 09:28:02', '2014-04-09 09:28:02', '', ''),
(9, '0', 0, 'TESTPOURMOI', 'TESTPOURMOI', '86f6fe02007a8a8949383549ca7186b7', 'Quentin', 'Deneuve', 'dark_kul@hotmail.fr', '90 rue Charles Godin', 36472, 'Briis sous Forges', '2014-04-09 09:28:28', '2014-04-09 09:28:28', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `wishlists`
--

INSERT INTO `wishlists` (`id`, `created`, `updated`, `user_id`, `wine_id`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 4),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 5),
(9, '2014-05-14 08:35:23', '2014-05-14 08:35:23', 7, 3),
(14, '2014-05-17 18:42:32', '2014-05-17 18:42:32', 7, 1);
