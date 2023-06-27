-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 juin 2023 à 09:17
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gkqe9145_db_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `anime`
--

CREATE TABLE `anime` (
  `Code_anime` int(11) NOT NULL,
  `Titre_anime` varchar(244) NOT NULL,
  `Nombre_episode` int(11) NOT NULL,
  `image` varchar(244) NOT NULL,
  `image_home` varchar(244) NOT NULL,
  `nombre_saison` int(11) NOT NULL,
  `image_fond` varchar(244) DEFAULT NULL,
  `image_titre` varchar(244) DEFAULT NULL,
  `Code_categorie` int(11) DEFAULT NULL,
  `Desactiver` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `anime`
--

INSERT INTO `anime` (`Code_anime`, `Titre_anime`, `Nombre_episode`, `image`, `image_home`, `nombre_saison`, `image_fond`, `image_titre`, `Code_categorie`, `Desactiver`) VALUES
(1, 'Kage no Jitsuryokusha ni Naritakute', 14, 'image_anime/Kage_no_Jitsuryokusha_ni_Naritakute/Kage_no_jitsuryokusha_ni_Naritakute.jpeg', 'image_anime/Kage_no_Jitsuryokusha_ni_Naritakute/The-eminence-shadow.jpg', 1, NULL, NULL, 1, 0),
(2, 'Angel of Death', 16, 'image_anime/Angel_of_Death/angel_of_the_death.jpeg', 'image_anime/Angel_of_Death/angel_of_the_death.jpeg', 1, NULL, NULL, NULL, 0),
(3, 'Arifureta', 26, 'image_anime/Arifureta/arifureta.jpeg', 'image_anime/Arifureta/arifureta.jpeg', 2, NULL, NULL, NULL, 0),
(4, 'My Hero Academia', 113, 'image_anime/My_Hero_Academia/my_hero_academia_s6.jpeg', 'image_anime/My_Hero_Academia/my_hero_academia_s6.jpeg', 6, 'image_anime/My_Hero_Academia/mha_fond.png', 'image_anime/My_Hero_Academia/titre_mha.png', 1, 0),
(5, 'Jujutsu Kaisen', 24, './image_anime/Jujutsu_Kaisen/Jujutsu_Kaisen.jpeg', './image_anime/Jujutsu_Kaisen/Jujutsu_Kaisen.jpeg', 1, NULL, NULL, NULL, 0),
(6, 'Blue Lock', 24, './image_anime/Blue_Lock/Blue_Lock.jpeg', './image_anime/Blue_Lock/Blue_Lock.jpeg', 1, './image_anime/Blue_Lock/blue_lock_fond.png', './image_anime/Blue_Lock/titre_blue_lock.png', NULL, 0),
(7, 'RWBY', 10, './image_anime/RWBY/rwby.jpeg', './image_anime/RWBY/rwby.jpeg', 1, NULL, NULL, NULL, 0),
(8, 'Love is War', 24, './image_anime/Love_is_War/love_is_war.png', './image_anime/Love_is_War/love_is_war.png', 2, NULL, NULL, NULL, 0),
(9, 'demon slayer', 46, './image_anime/demon_slayer/Demon_slayer.png', './image_anime/demon_slayer/Demon_slayer.png', 3, NULL, NULL, NULL, 0),
(10, 'Aharen-san', 12, './image_anime/Aharen-san/Aharen-san.jpe', './image_anime/Aharen-san/Aharen-san.jpe', 1, NULL, NULL, NULL, 0),
(11, 'Chainsaw Man', 12, './image_anime/Chainsaw_Man/Chainsaw Man.jpg', './image_anime/Chainsaw_Man/Chainsaw Man.jpg', 1, NULL, NULL, NULL, 0),
(12, 'Charlotte', 13, './image_anime/Charlotte/Charlotte.jpeg', './image_anime/Charlotte/Charlotte.jpeg', 1, NULL, NULL, NULL, 0),
(13, 'moi quand je me reincarne en slime', 49, './image_anime/moi_quand_je_me_reincarne_en_slime/moi_quand_je_me_reincarne_en_slime.jpeg', './image_anime/moi_quand_je_me_reincarne_en_slime/moi_quand_je_me_reincarne_en_slime.jpeg', 2, NULL, NULL, NULL, 0),
(14, 'Overlord', 52, './image_anime/Overlord/Overlord.jpe', './image_anime/Overlord/Overlord.jpe', 4, NULL, NULL, NULL, 0),
(15, 'Tomodachi Game', 12, './image_anime/Tomodachi_Game/Tomodachi_Game.jpeg', './image_anime/Tomodachi_Game/Tomodachi_Game.jpeg', 1, NULL, NULL, NULL, 0),
(16, 'Oshi no Ko', 11, './image_anime/Oshi_no_Ko/oshi no ko.png', './image_anime/Oshi_no_Ko/oshi no ko.png', 1, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `categorie_ID` int(11) UNSIGNED NOT NULL,
  `categorie_Name` varchar(250) NOT NULL,
  `categorie_Detail` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`categorie_ID`, `categorie_Name`, `categorie_Detail`) VALUES
(1, 'Action', ''),
(2, 'Adventure', ''),
(3, 'Arts', ''),
(4, 'Comedy', ''),
(5, 'Cyberpunk', ''),
(6, 'Demons', ''),
(7, 'Drama', ''),
(8, 'Ecchi', ''),
(9, 'Fantasy', ''),
(10, 'Game', ''),
(11, 'Harem', ''),
(13, 'Historical', ''),
(14, 'Horror', ''),
(15, 'Isekai', ''),
(16, 'Josei', ''),
(17, 'Kids', ''),
(18, 'Life', ''),
(19, 'Magic', ''),
(20, 'Martial', ''),
(21, 'Mecha', ''),
(22, 'Military', ''),
(23, 'Music', ''),
(24, 'Mystery', ''),
(25, 'Parody', ''),
(26, 'Police', ''),
(27, 'Post-Apocalyptic', ''),
(28, 'Power', ''),
(29, 'Psychological', ''),
(30, 'Reverse', ''),
(31, 'Romance', ''),
(32, 'School', ''),
(33, 'Sci-Fi', ''),
(34, 'Seinen', ''),
(35, 'Shoujo', ''),
(36, 'Shoujo-ai', ''),
(37, 'Shounen', ''),
(38, 'Shounen-ai', ''),
(39, 'Slice of life', ''),
(40, 'Space', ''),
(41, 'Sports', ''),
(42, 'Super', ''),
(43, 'Supernatural', ''),
(44, 'Tragedy', ''),
(45, 'Vampire', ''),
(46, 'Yaoi', ''),
(47, 'Yuri', '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `Code_commentaire` int(11) NOT NULL,
  `Contenue` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `episode`
--

CREATE TABLE `episode` (
  `Code_episode` int(11) NOT NULL,
  `Description_episode` varchar(244) NOT NULL,
  `episode` int(11) NOT NULL,
  `saison` int(11) NOT NULL,
  `image_episode` varchar(244) NOT NULL,
  `Titre_episode` varchar(244) NOT NULL,
  `video` varchar(244) NOT NULL,
  `Code_anime` int(11) NOT NULL,
  `Code_watchlist` int(11) NOT NULL,
  `Langue` varchar(244) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `episode`
--

INSERT INTO `episode` (`Code_episode`, `Description_episode`, `episode`, `saison`, `image_episode`, `Titre_episode`, `video`, `Code_anime`, `Code_watchlist`, `Langue`) VALUES
(785, '', 1, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode1.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode1.mp4', 1, 0, 'vostfr'),
(786, '', 2, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode2.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode2.mp4', 1, 0, 'vostfr'),
(787, '', 3, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode3.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode3.mp4', 1, 0, 'vostfr'),
(788, '', 4, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode4.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode4.mp4', 1, 0, 'vostfr'),
(789, '', 5, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode5.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode5.mp4', 1, 0, 'vostfr'),
(790, '', 6, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode6.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode6.mp4', 1, 0, 'vostfr'),
(791, '', 7, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode7.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode7.mp4', 1, 0, 'vostfr'),
(792, '', 8, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode8.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode8.mp4', 1, 0, 'vostfr'),
(793, '', 9, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode9.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode9.mp4', 1, 0, 'vostfr'),
(794, '', 10, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode10.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode10.mp4', 1, 0, 'vostfr'),
(795, '', 11, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode11.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode11.mp4', 1, 0, 'vostfr'),
(796, '', 12, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode12.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode12.mp4', 1, 0, 'vostfr'),
(797, '', 13, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode13.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode13.mp4', 1, 0, 'vostfr'),
(798, '', 14, 1, 'image_episode/Kage_no_Jitsuryokusha_ni_Naritakute_s1/episode14.PNG', '', 'Video/Kage_no_Jitsuryokusha_ni_Naritakute/saison1/vostfr/episode14.mp4', 1, 0, 'vostfr'),
(799, '', 1, 1, 'image_episode/Angel_of_Death_s1/episode1.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode1.mp4', 2, 0, 'vostfr'),
(800, '', 2, 1, 'image_episode/Angel_of_Death_s1/episode2.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode2.mp4', 2, 0, 'vostfr'),
(801, '', 3, 1, 'image_episode/Angel_of_Death_s1/episode3.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode3.mp4', 2, 0, 'vostfr'),
(802, '', 4, 1, 'image_episode/Angel_of_Death_s1/episode4.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode4.mp4', 2, 0, 'vostfr'),
(803, '', 5, 1, 'image_episode/Angel_of_Death_s1/episode5.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode5.mp4', 2, 0, 'vostfr'),
(804, '', 6, 1, 'image_episode/Angel_of_Death_s1/episode6.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode6.mp4', 2, 0, 'vostfr'),
(805, '', 7, 1, 'image_episode/Angel_of_Death_s1/episode7.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode7.mp4', 2, 0, 'vostfr'),
(806, '', 8, 1, 'image_episode/Angel_of_Death_s1/episode8.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode8.mp4', 2, 0, 'vostfr'),
(807, '', 9, 1, 'image_episode/Angel_of_Death_s1/episode9.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode9.mp4', 2, 0, 'vostfr'),
(808, '', 10, 1, 'image_episode/Angel_of_Death_s1/episode10.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode10.mp4', 2, 0, 'vostfr'),
(809, '', 11, 1, 'image_episode/Angel_of_Death_s1/episode11.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode11.mp4', 2, 0, 'vostfr'),
(810, '', 12, 1, 'image_episode/Angel_of_Death_s1/episode12.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode12.mp4', 2, 0, 'vostfr'),
(811, '', 13, 1, 'image_episode/Angel_of_Death_s1/episode13.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode13.mp4', 2, 0, 'vostfr'),
(812, '', 14, 1, 'image_episode/Angel_of_Death_s1/episode14.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode14.mp4', 2, 0, 'vostfr'),
(813, '', 15, 1, 'image_episode/Angel_of_Death_s1/episode15.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode15.mp4', 2, 0, 'vostfr'),
(814, '', 16, 1, 'image_episode/Angel_of_Death_s1/episode16.PNG', '', 'Video/Angel_of_Death/saison1/vostfr/episode16.mp4', 2, 0, 'vostfr'),
(815, '', 1, 1, 'image_episode/Arifureta_s1/episode1.PNG', '', 'Video/Arifureta/saison1/vostfr/episode1.mp4', 3, 0, 'vostfr'),
(816, '', 2, 1, 'image_episode/Arifureta_s1/episode2.PNG', '', 'Video/Arifureta/saison1/vostfr/episode2.mp4', 3, 0, 'vostfr'),
(817, '', 3, 1, 'image_episode/Arifureta_s1/episode3.PNG', '', 'Video/Arifureta/saison1/vostfr/episode3.mp4', 3, 0, 'vostfr'),
(818, '', 4, 1, 'image_episode/Arifureta_s1/episode4.PNG', '', 'Video/Arifureta/saison1/vostfr/episode4.mp4', 3, 0, 'vostfr'),
(819, '', 5, 1, 'image_episode/Arifureta_s1/episode5.PNG', '', 'Video/Arifureta/saison1/vostfr/episode5.mp4', 3, 0, 'vostfr'),
(820, '', 6, 1, 'image_episode/Arifureta_s1/episode6.PNG', '', 'Video/Arifureta/saison1/vostfr/episode6.mp4', 3, 0, 'vostfr'),
(821, '', 7, 1, 'image_episode/Arifureta_s1/episode7.PNG', '', 'Video/Arifureta/saison1/vostfr/episode7.mp4', 3, 0, 'vostfr'),
(822, '', 8, 1, 'image_episode/Arifureta_s1/episode8.PNG', '', 'Video/Arifureta/saison1/vostfr/episode8.mp4', 3, 0, 'vostfr'),
(823, '', 9, 1, 'image_episode/Arifureta_s1/episode9.PNG', '', 'Video/Arifureta/saison1/vostfr/episode9.mp4', 3, 0, 'vostfr'),
(824, '', 10, 1, 'image_episode/Arifureta_s1/episode10.PNG', '', 'Video/Arifureta/saison1/vostfr/episode10.mp4', 3, 0, 'vostfr'),
(825, '', 11, 1, 'image_episode/Arifureta_s1/episode11.PNG', '', 'Video/Arifureta/saison1/vostfr/episode11.mp4', 3, 0, 'vostfr'),
(826, '', 12, 1, 'image_episode/Arifureta_s1/episode12.PNG', '', 'Video/Arifureta/saison1/vostfr/episode12.mp4', 3, 0, 'vostfr'),
(827, '', 13, 1, 'image_episode/Arifureta_s1/episode13.PNG', '', 'Video/Arifureta/saison1/vostfr/episode13.mp4', 3, 0, 'vostfr'),
(828, '', 1, 2, 'image_episode/Arifureta_s2/episode1.PNG', '', 'Video/Arifureta/saison2/vostfr/episode1.mp4', 3, 0, 'vostfr'),
(829, '', 2, 2, 'image_episode/Arifureta_s2/episode2.PNG', '', 'Video/Arifureta/saison2/vostfr/episode2.mp4', 3, 0, 'vostfr'),
(830, '', 3, 2, 'image_episode/Arifureta_s2/episode3.PNG', '', 'Video/Arifureta/saison2/vostfr/episode3.mp4', 3, 0, 'vostfr'),
(831, '', 4, 2, 'image_episode/Arifureta_s2/episode4.PNG', '', 'Video/Arifureta/saison2/vostfr/episode4.mp4', 3, 0, 'vostfr'),
(832, '', 5, 2, 'image_episode/Arifureta_s2/episode5.PNG', '', 'Video/Arifureta/saison2/vostfr/episode5.mp4', 3, 0, 'vostfr'),
(833, '', 6, 2, 'image_episode/Arifureta_s2/episode6.PNG', '', 'Video/Arifureta/saison2/vostfr/episode6.mp4', 3, 0, 'vostfr'),
(834, '', 7, 2, 'image_episode/Arifureta_s2/episode7.PNG', '', 'Video/Arifureta/saison2/vostfr/episode7.mp4', 3, 0, 'vostfr'),
(835, '', 8, 2, 'image_episode/Arifureta_s2/episode8.PNG', '', 'Video/Arifureta/saison2/vostfr/episode8.mp4', 3, 0, 'vostfr'),
(836, '', 9, 2, 'image_episode/Arifureta_s2/episode9.PNG', '', 'Video/Arifureta/saison2/vostfr/episode9.mp4', 3, 0, 'vostfr'),
(837, '', 10, 2, 'image_episode/Arifureta_s2/episode10.PNG', '', 'Video/Arifureta/saison2/vostfr/episode10.mp4', 3, 0, 'vostfr'),
(838, '', 11, 2, 'image_episode/Arifureta_s2/episode11.PNG', '', 'Video/Arifureta/saison2/vostfr/episode11.mp4', 3, 0, 'vostfr'),
(839, '', 12, 2, 'image_episode/Arifureta_s2/episode12.PNG', '', 'Video/Arifureta/saison2/vostfr/episode12.mp4', 3, 0, 'vostfr'),
(840, '', 13, 2, 'image_episode/Arifureta_s2/episode13.PNG', '', 'Video/Arifureta/saison2/vostfr/episode13.mp4', 3, 0, 'vostfr'),
(841, '', 1, 1, 'image_episode/My_Hero_Academia_s1/episode1.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode1.mp4', 4, 0, 'vostfr'),
(842, '', 2, 1, 'image_episode/My_Hero_Academia_s1/episode2.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode2.mp4', 4, 0, 'vostfr'),
(843, '', 3, 1, 'image_episode/My_Hero_Academia_s1/episode3.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode3.mp4', 4, 0, 'vostfr'),
(844, '', 4, 1, 'image_episode/My_Hero_Academia_s1/episode4.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode4.mp4', 4, 0, 'vostfr'),
(845, '', 5, 1, 'image_episode/My_Hero_Academia_s1/episode5.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode5.mp4', 4, 0, 'vostfr'),
(846, '', 6, 1, 'image_episode/My_Hero_Academia_s1/episode6.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode6.mp4', 4, 0, 'vostfr'),
(847, '', 7, 1, 'image_episode/My_Hero_Academia_s1/episode7.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode7.mp4', 4, 0, 'vostfr'),
(848, '', 8, 1, 'image_episode/My_Hero_Academia_s1/episode8.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode8.mp4', 4, 0, 'vostfr'),
(849, '', 9, 1, 'image_episode/My_Hero_Academia_s1/episode9.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode9.mp4', 4, 0, 'vostfr'),
(850, '', 10, 1, 'image_episode/My_Hero_Academia_s1/episode10.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode10.mp4', 4, 0, 'vostfr'),
(851, '', 11, 1, 'image_episode/My_Hero_Academia_s1/episode11.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode11.mp4', 4, 0, 'vostfr'),
(852, '', 12, 1, 'image_episode/My_Hero_Academia_s1/episode12.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode12.mp4', 4, 0, 'vostfr'),
(853, '', 13, 1, 'image_episode/My_Hero_Academia_s1/episode13.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode13.mp4', 4, 0, 'vostfr'),
(854, '', 14, 1, 'image_episode/My_Hero_Academia_s1/episode14.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode14.mp4', 4, 0, 'vostfr'),
(855, '', 15, 1, 'image_episode/My_Hero_Academia_s1/episode15.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode15.mp4', 4, 0, 'vostfr'),
(856, '', 16, 1, 'image_episode/My_Hero_Academia_s1/episode16.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode16.mp4', 4, 0, 'vostfr'),
(857, '', 17, 1, 'image_episode/My_Hero_Academia_s1/episode17.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode17.mp4', 4, 0, 'vostfr'),
(858, '', 18, 1, 'image_episode/My_Hero_Academia_s1/episode18.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode18.mp4', 4, 0, 'vostfr'),
(859, '', 19, 1, 'image_episode/My_Hero_Academia_s1/episode19.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode19.mp4', 4, 0, 'vostfr'),
(860, '', 20, 1, 'image_episode/My_Hero_Academia_s1/episode20.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode20.mp4', 4, 0, 'vostfr'),
(861, '', 21, 1, 'image_episode/My_Hero_Academia_s1/episode21.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode21.mp4', 4, 0, 'vostfr'),
(862, '', 22, 1, 'image_episode/My_Hero_Academia_s1/episode22.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode22.mp4', 4, 0, 'vostfr'),
(863, '', 23, 1, 'image_episode/My_Hero_Academia_s1/episode23.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode23.mp4', 4, 0, 'vostfr'),
(864, '', 24, 1, 'image_episode/My_Hero_Academia_s1/episode24.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode24.mp4', 4, 0, 'vostfr'),
(865, '', 25, 1, 'image_episode/My_Hero_Academia_s1/episode25.PNG', '', 'Video/My_Hero_Academia/saison1/vostfr/episode25.mp4', 4, 0, 'vostfr'),
(866, '', 1, 2, 'image_episode/My_Hero_Academia_s2/episode1.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode1.mp4', 4, 0, 'vostfr'),
(867, '', 2, 2, 'image_episode/My_Hero_Academia_s2/episode2.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode2.mp4', 4, 0, 'vostfr'),
(868, '', 3, 2, 'image_episode/My_Hero_Academia_s2/episode3.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode3.mp4', 4, 0, 'vostfr'),
(869, '', 4, 2, 'image_episode/My_Hero_Academia_s2/episode4.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode4.mp4', 4, 0, 'vostfr'),
(870, '', 5, 2, 'image_episode/My_Hero_Academia_s2/episode5.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode5.mp4', 4, 0, 'vostfr'),
(871, '', 6, 2, 'image_episode/My_Hero_Academia_s2/episode6.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode6.mp4', 4, 0, 'vostfr'),
(872, '', 7, 2, 'image_episode/My_Hero_Academia_s2/episode7.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode7.mp4', 4, 0, 'vostfr'),
(873, '', 8, 2, 'image_episode/My_Hero_Academia_s2/episode8.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode8.mp4', 4, 0, 'vostfr'),
(874, '', 9, 2, 'image_episode/My_Hero_Academia_s2/episode9.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode9.mp4', 4, 0, 'vostfr'),
(875, '', 10, 2, 'image_episode/My_Hero_Academia_s2/episode10.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode10.mp4', 4, 0, 'vostfr'),
(876, '', 11, 2, 'image_episode/My_Hero_Academia_s2/episode11.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode11.mp4', 4, 0, 'vostfr'),
(877, '', 12, 2, 'image_episode/My_Hero_Academia_s2/episode12.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode12.mp4', 4, 0, 'vostfr'),
(878, '', 13, 2, 'image_episode/My_Hero_Academia_s2/episode13.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode13.mp4', 4, 0, 'vostfr'),
(879, '', 14, 2, 'image_episode/My_Hero_Academia_s2/episode14.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode14.mp4', 4, 0, 'vostfr'),
(880, '', 15, 2, 'image_episode/My_Hero_Academia_s2/episode15.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode15.mp4', 4, 0, 'vostfr'),
(881, '', 16, 2, 'image_episode/My_Hero_Academia_s2/episode16.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode16.mp4', 4, 0, 'vostfr'),
(882, '', 17, 2, 'image_episode/My_Hero_Academia_s2/episode17.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode17.mp4', 4, 0, 'vostfr'),
(883, '', 18, 2, 'image_episode/My_Hero_Academia_s2/episode18.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode18.mp4', 4, 0, 'vostfr'),
(884, '', 19, 2, 'image_episode/My_Hero_Academia_s2/episode19.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode19.mp4', 4, 0, 'vostfr'),
(885, '', 20, 2, 'image_episode/My_Hero_Academia_s2/episode20.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode20.mp4', 4, 0, 'vostfr'),
(886, '', 21, 2, 'image_episode/My_Hero_Academia_s2/episode21.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode21.mp4', 4, 0, 'vostfr'),
(887, '', 22, 2, 'image_episode/My_Hero_Academia_s2/episode22.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode22.mp4', 4, 0, 'vostfr'),
(888, '', 23, 2, 'image_episode/My_Hero_Academia_s2/episode23.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode23.mp4', 4, 0, 'vostfr'),
(889, '', 24, 2, 'image_episode/My_Hero_Academia_s2/episode24.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode24.mp4', 4, 0, 'vostfr'),
(890, '', 25, 2, 'image_episode/My_Hero_Academia_s2/episode25.PNG', '', 'Video/My_Hero_Academia/saison2/vostfr/episode25.mp4', 4, 0, 'vostfr'),
(891, '', 1, 1, 'image_episode/Jujutsu_Kaisen_s1/episode1.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode1.mp4', 5, 0, 'vostfr'),
(892, '', 2, 1, 'image_episode/Jujutsu_Kaisen_s1/episode2.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode2.mp4', 5, 0, 'vostfr'),
(893, '', 3, 1, 'image_episode/Jujutsu_Kaisen_s1/episode3.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode3.mp4', 5, 0, 'vostfr'),
(894, '', 4, 1, 'image_episode/Jujutsu_Kaisen_s1/episode4.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode4.mp4', 5, 0, 'vostfr'),
(895, '', 5, 1, 'image_episode/Jujutsu_Kaisen_s1/episode5.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode5.mp4', 5, 0, 'vostfr'),
(896, '', 6, 1, 'image_episode/Jujutsu_Kaisen_s1/episode6.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode6.mp4', 5, 0, 'vostfr'),
(897, '', 7, 1, 'image_episode/Jujutsu_Kaisen_s1/episode7.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode7.mp4', 5, 0, 'vostfr'),
(898, '', 8, 1, 'image_episode/Jujutsu_Kaisen_s1/episode8.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode8.mp4', 5, 0, 'vostfr'),
(899, '', 9, 1, 'image_episode/Jujutsu_Kaisen_s1/episode9.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode9.mp4', 5, 0, 'vostfr'),
(900, '', 10, 1, 'image_episode/Jujutsu_Kaisen_s1/episode10.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode10.mp4', 5, 0, 'vostfr'),
(901, '', 11, 1, 'image_episode/Jujutsu_Kaisen_s1/episode11.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode11.mp4', 5, 0, 'vostfr'),
(902, '', 12, 1, 'image_episode/Jujutsu_Kaisen_s1/episode12.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode12.mp4', 5, 0, 'vostfr'),
(903, '', 13, 1, 'image_episode/Jujutsu_Kaisen_s1/episode13.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode13.mp4', 5, 0, 'vostfr'),
(904, '', 14, 1, 'image_episode/Jujutsu_Kaisen_s1/episode14.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode14.mp4', 5, 0, 'vostfr'),
(905, '', 15, 1, 'image_episode/Jujutsu_Kaisen_s1/episode15.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode15.mp4', 5, 0, 'vostfr'),
(906, '', 16, 1, 'image_episode/Jujutsu_Kaisen_s1/episode16.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode16.mp4', 5, 0, 'vostfr'),
(907, '', 17, 1, 'image_episode/Jujutsu_Kaisen_s1/episode17.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode17.mp4', 5, 0, 'vostfr'),
(908, '', 18, 1, 'image_episode/Jujutsu_Kaisen_s1/episode18.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode18.mp4', 5, 0, 'vostfr'),
(909, '', 19, 1, 'image_episode/Jujutsu_Kaisen_s1/episode19.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode19.mp4', 5, 0, 'vostfr'),
(910, '', 20, 1, 'image_episode/Jujutsu_Kaisen_s1/episode20.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode20.mp4', 5, 0, 'vostfr'),
(911, '', 21, 1, 'image_episode/Jujutsu_Kaisen_s1/episode21.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode21.mp4', 5, 0, 'vostfr'),
(912, '', 22, 1, 'image_episode/Jujutsu_Kaisen_s1/episode22.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode22.mp4', 5, 0, 'vostfr'),
(913, '', 23, 1, 'image_episode/Jujutsu_Kaisen_s1/episode23.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode23.mp4', 5, 0, 'vostfr'),
(914, '', 24, 1, 'image_episode/Jujutsu_Kaisen_s1/episode24.PNG', '', 'Video/Jujutsu_Kaisen/saison1/vostfr/episode24.mp4', 5, 0, 'vostfr'),
(915, '', 1, 1, 'image_episode/Blue_Lock_s1/episode1.PNG', '', 'Video/Blue_Lock/saison1/vf/episode1.mp4', 6, 0, 'vf'),
(916, '', 2, 1, 'image_episode/Blue_Lock_s1/episode2.PNG', '', 'Video/Blue_Lock/saison1/vf/episode2.mp4', 6, 0, 'vf'),
(917, '', 3, 1, 'image_episode/Blue_Lock_s1/episode3.PNG', '', 'Video/Blue_Lock/saison1/vf/episode3.mp4', 6, 0, 'vf'),
(918, '', 4, 1, 'image_episode/Blue_Lock_s1/episode4.PNG', '', 'Video/Blue_Lock/saison1/vf/episode4.mp4', 6, 0, 'vf'),
(919, '', 5, 1, 'image_episode/Blue_Lock_s1/episode5.PNG', '', 'Video/Blue_Lock/saison1/vf/episode5.mp4', 6, 0, 'vf'),
(920, '', 6, 1, 'image_episode/Blue_Lock_s1/episode6.PNG', '', 'Video/Blue_Lock/saison1/vf/episode6.mp4', 6, 0, 'vf'),
(921, '', 7, 1, 'image_episode/Blue_Lock_s1/episode7.PNG', '', 'Video/Blue_Lock/saison1/vf/episode7.mp4', 6, 0, 'vf'),
(922, '', 8, 1, 'image_episode/Blue_Lock_s1/episode8.PNG', '', 'Video/Blue_Lock/saison1/vf/episode8.mp4', 6, 0, 'vf'),
(923, '', 9, 1, 'image_episode/Blue_Lock_s1/episode9.PNG', '', 'Video/Blue_Lock/saison1/vf/episode9.mp4', 6, 0, 'vf'),
(924, '', 10, 1, 'image_episode/Blue_Lock_s1/episode10.PNG', '', 'Video/Blue_Lock/saison1/vf/episode10.mp4', 6, 0, 'vf'),
(925, '', 11, 1, 'image_episode/Blue_Lock_s1/episode11.PNG', '', 'Video/Blue_Lock/saison1/vf/episode11.mp4', 6, 0, 'vf'),
(926, '', 12, 1, 'image_episode/Blue_Lock_s1/episode12.PNG', '', 'Video/Blue_Lock/saison1/vf/episode12.mp4', 6, 0, 'vf'),
(927, '', 13, 1, 'image_episode/Blue_Lock_s1/episode13.PNG', '', 'Video/Blue_Lock/saison1/vf/episode13.mp4', 6, 0, 'vf'),
(928, '', 14, 1, 'image_episode/Blue_Lock_s1/episode14.PNG', '', 'Video/Blue_Lock/saison1/vf/episode14.mp4', 6, 0, 'vf'),
(929, '', 15, 1, 'image_episode/Blue_Lock_s1/episode15.PNG', '', 'Video/Blue_Lock/saison1/vf/episode15.mp4', 6, 0, 'vf'),
(930, '', 16, 1, 'image_episode/Blue_Lock_s1/episode16.PNG', '', 'Video/Blue_Lock/saison1/vf/episode16.mp4', 6, 0, 'vf'),
(931, '', 17, 1, 'image_episode/Blue_Lock_s1/episode17.PNG', '', 'Video/Blue_Lock/saison1/vf/episode17.mp4', 6, 0, 'vf'),
(932, '', 18, 1, 'image_episode/Blue_Lock_s1/episode18.PNG', '', 'Video/Blue_Lock/saison1/vf/episode18.mp4', 6, 0, 'vf'),
(933, '', 19, 1, 'image_episode/Blue_Lock_s1/episode19.PNG', '', 'Video/Blue_Lock/saison1/vf/episode19.mp4', 6, 0, 'vf'),
(934, '', 20, 1, 'image_episode/Blue_Lock_s1/episode20.PNG', '', 'Video/Blue_Lock/saison1/vf/episode20.mp4', 6, 0, 'vf'),
(935, '', 21, 1, 'image_episode/Blue_Lock_s1/episode21.PNG', '', 'Video/Blue_Lock/saison1/vf/episode21.mp4', 6, 0, 'vf'),
(936, '', 22, 1, 'image_episode/Blue_Lock_s1/episode22.PNG', '', 'Video/Blue_Lock/saison1/vf/episode22.mp4', 6, 0, 'vf'),
(937, '', 23, 1, 'image_episode/Blue_Lock_s1/episode23.PNG', '', 'Video/Blue_Lock/saison1/vf/episode23.mp4', 6, 0, 'vf'),
(938, '', 1, 1, 'image_episode/Blue_Lock_s1/episode1.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode1.mp4', 6, 0, 'vostfr'),
(939, '', 2, 1, 'image_episode/Blue_Lock_s1/episode2.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode2.mp4', 6, 0, 'vostfr'),
(940, '', 3, 1, 'image_episode/Blue_Lock_s1/episode3.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode3.mp4', 6, 0, 'vostfr'),
(941, '', 4, 1, 'image_episode/Blue_Lock_s1/episode4.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode4.mp4', 6, 0, 'vostfr'),
(942, '', 5, 1, 'image_episode/Blue_Lock_s1/episode5.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode5.mp4', 6, 0, 'vostfr'),
(943, '', 6, 1, 'image_episode/Blue_Lock_s1/episode6.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode6.mp4', 6, 0, 'vostfr'),
(944, '', 7, 1, 'image_episode/Blue_Lock_s1/episode7.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode7.mp4', 6, 0, 'vostfr'),
(945, '', 8, 1, 'image_episode/Blue_Lock_s1/episode8.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode8.mp4', 6, 0, 'vostfr'),
(946, '', 9, 1, 'image_episode/Blue_Lock_s1/episode9.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode9.mp4', 6, 0, 'vostfr'),
(947, '', 10, 1, 'image_episode/Blue_Lock_s1/episode10.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode10.mp4', 6, 0, 'vostfr'),
(948, '', 11, 1, 'image_episode/Blue_Lock_s1/episode11.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode11.mp4', 6, 0, 'vostfr'),
(949, '', 12, 1, 'image_episode/Blue_Lock_s1/episode12.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode12.mp4', 6, 0, 'vostfr'),
(950, '', 13, 1, 'image_episode/Blue_Lock_s1/episode13.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode13.mp4', 6, 0, 'vostfr'),
(951, '', 14, 1, 'image_episode/Blue_Lock_s1/episode14.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode14.mp4', 6, 0, 'vostfr'),
(952, '', 15, 1, 'image_episode/Blue_Lock_s1/episode15.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode15.mp4', 6, 0, 'vostfr'),
(953, '', 16, 1, 'image_episode/Blue_Lock_s1/episode16.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode16.mp4', 6, 0, 'vostfr'),
(954, '', 17, 1, 'image_episode/Blue_Lock_s1/episode17.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode17.mp4', 6, 0, 'vostfr'),
(955, '', 18, 1, 'image_episode/Blue_Lock_s1/episode18.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode18.mp4', 6, 0, 'vostfr'),
(956, '', 19, 1, 'image_episode/Blue_Lock_s1/episode19.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode19.mp4', 6, 0, 'vostfr'),
(957, '', 20, 1, 'image_episode/Blue_Lock_s1/episode20.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode20.mp4', 6, 0, 'vostfr'),
(958, '', 21, 1, 'image_episode/Blue_Lock_s1/episode21.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode21.mp4', 6, 0, 'vostfr'),
(959, '', 22, 1, 'image_episode/Blue_Lock_s1/episode22.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode22.mp4', 6, 0, 'vostfr'),
(960, '', 23, 1, 'image_episode/Blue_Lock_s1/episode23.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode23.mp4', 6, 0, 'vostfr'),
(961, '', 24, 1, 'image_episode/Blue_Lock_s1/episode24.PNG', '', 'Video/Blue_Lock/saison1/vostfr/episode24.mp4', 6, 0, 'vostfr'),
(962, '', 1, 1, 'image_episode/RWBY_s1/episode1.PNG', '', 'Video/RWBY/saison1/vostfr/episode1.mp4', 7, 0, 'vostfr'),
(963, '', 2, 1, 'image_episode/RWBY_s1/episode2.PNG', '', 'Video/RWBY/saison1/vostfr/episode2.mp4', 7, 0, 'vostfr'),
(964, '', 3, 1, 'image_episode/RWBY_s1/episode3.PNG', '', 'Video/RWBY/saison1/vostfr/episode3.mp4', 7, 0, 'vostfr'),
(965, '', 4, 1, 'image_episode/RWBY_s1/episode4.PNG', '', 'Video/RWBY/saison1/vostfr/episode4.mp4', 7, 0, 'vostfr'),
(966, '', 5, 1, 'image_episode/RWBY_s1/episode5.PNG', '', 'Video/RWBY/saison1/vostfr/episode5.mp4', 7, 0, 'vostfr'),
(967, '', 6, 1, 'image_episode/RWBY_s1/episode6.PNG', '', 'Video/RWBY/saison1/vostfr/episode6.mp4', 7, 0, 'vostfr'),
(968, '', 7, 1, 'image_episode/RWBY_s1/episode7.PNG', '', 'Video/RWBY/saison1/vostfr/episode7.mp4', 7, 0, 'vostfr'),
(969, '', 8, 1, 'image_episode/RWBY_s1/episode8.PNG', '', 'Video/RWBY/saison1/vostfr/episode8.mp4', 7, 0, 'vostfr'),
(970, '', 9, 1, 'image_episode/RWBY_s1/episode9.PNG', '', 'Video/RWBY/saison1/vostfr/episode9.mp4', 7, 0, 'vostfr'),
(971, '', 10, 1, 'image_episode/RWBY_s1/episode10.PNG', '', 'Video/RWBY/saison1/vostfr/episode10.mp4', 7, 0, 'vostfr'),
(972, '', 1, 1, 'image_episode/Love_is_War_s1/episode1.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode1.mp4', 8, 0, 'vostfr'),
(973, '', 2, 1, 'image_episode/Love_is_War_s1/episode2.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode2.mp4', 8, 0, 'vostfr'),
(974, '', 3, 1, 'image_episode/Love_is_War_s1/episode3.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode3.mp4', 8, 0, 'vostfr'),
(975, '', 4, 1, 'image_episode/Love_is_War_s1/episode4.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode4.mp4', 8, 0, 'vostfr'),
(976, '', 5, 1, 'image_episode/Love_is_War_s1/episode5.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode5.mp4', 8, 0, 'vostfr'),
(977, '', 6, 1, 'image_episode/Love_is_War_s1/episode6.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode6.mp4', 8, 0, 'vostfr'),
(978, '', 7, 1, 'image_episode/Love_is_War_s1/episode7.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode7.mp4', 8, 0, 'vostfr'),
(979, '', 8, 1, 'image_episode/Love_is_War_s1/episode8.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode8.mp4', 8, 0, 'vostfr'),
(980, '', 9, 1, 'image_episode/Love_is_War_s1/episode9.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode9.mp4', 8, 0, 'vostfr'),
(981, '', 10, 1, 'image_episode/Love_is_War_s1/episode10.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode10.mp4', 8, 0, 'vostfr'),
(982, '', 11, 1, 'image_episode/Love_is_War_s1/episode11.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode11.mp4', 8, 0, 'vostfr'),
(983, '', 12, 1, 'image_episode/Love_is_War_s1/episode12.PNG', '', 'Video/Love_is_War/saison1/vostfr/episode12.mp4', 8, 0, 'vostfr'),
(984, '', 1, 2, 'image_episode/Love_is_War_s2/episode1.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode1.mp4', 8, 0, 'vostfr'),
(985, '', 2, 2, 'image_episode/Love_is_War_s2/episode2.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode2.mp4', 8, 0, 'vostfr'),
(986, '', 3, 2, 'image_episode/Love_is_War_s2/episode3.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode3.mp4', 8, 0, 'vostfr'),
(987, '', 4, 2, 'image_episode/Love_is_War_s2/episode4.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode4.mp4', 8, 0, 'vostfr'),
(988, '', 5, 2, 'image_episode/Love_is_War_s2/episode5.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode5.mp4', 8, 0, 'vostfr'),
(989, '', 6, 2, 'image_episode/Love_is_War_s2/episode6.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode6.mp4', 8, 0, 'vostfr'),
(990, '', 7, 2, 'image_episode/Love_is_War_s2/episode7.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode7.mp4', 8, 0, 'vostfr'),
(991, '', 8, 2, 'image_episode/Love_is_War_s2/episode8.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode8.mp4', 8, 0, 'vostfr'),
(992, '', 9, 2, 'image_episode/Love_is_War_s2/episode9.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode9.mp4', 8, 0, 'vostfr'),
(993, '', 10, 2, 'image_episode/Love_is_War_s2/episode10.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode10.mp4', 8, 0, 'vostfr'),
(994, '', 11, 2, 'image_episode/Love_is_War_s2/episode11.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode11.mp4', 8, 0, 'vostfr'),
(995, '', 12, 2, 'image_episode/Love_is_War_s2/episode12.PNG', '', 'Video/Love_is_War/saison2/vostfr/episode12.mp4', 8, 0, 'vostfr'),
(996, '', 1, 1, 'image_episode/demon_slayer_s1/episode1.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode1.mp4', 9, 0, 'vostfr'),
(997, '', 2, 1, 'image_episode/demon_slayer_s1/episode2.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode2.mp4', 9, 0, 'vostfr'),
(998, '', 3, 1, 'image_episode/demon_slayer_s1/episode3.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode3.mp4', 9, 0, 'vostfr'),
(999, '', 4, 1, 'image_episode/demon_slayer_s1/episode4.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode4.mp4', 9, 0, 'vostfr'),
(1000, '', 5, 1, 'image_episode/demon_slayer_s1/episode5.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode5.mp4', 9, 0, 'vostfr'),
(1001, '', 6, 1, 'image_episode/demon_slayer_s1/episode6.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode6.mp4', 9, 0, 'vostfr'),
(1002, '', 7, 1, 'image_episode/demon_slayer_s1/episode7.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode7.mp4', 9, 0, 'vostfr'),
(1003, '', 8, 1, 'image_episode/demon_slayer_s1/episode8.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode8.mp4', 9, 0, 'vostfr'),
(1004, '', 9, 1, 'image_episode/demon_slayer_s1/episode9.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode9.mp4', 9, 0, 'vostfr'),
(1005, '', 10, 1, 'image_episode/demon_slayer_s1/episode10.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode10.mp4', 9, 0, 'vostfr'),
(1006, '', 11, 1, 'image_episode/demon_slayer_s1/episode11.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode11.mp4', 9, 0, 'vostfr'),
(1007, '', 12, 1, 'image_episode/demon_slayer_s1/episode12.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode12.mp4', 9, 0, 'vostfr'),
(1008, '', 13, 1, 'image_episode/demon_slayer_s1/episode13.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode13.mp4', 9, 0, 'vostfr'),
(1009, '', 14, 1, 'image_episode/demon_slayer_s1/episode14.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode14.mp4', 9, 0, 'vostfr'),
(1010, '', 15, 1, 'image_episode/demon_slayer_s1/episode15.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode15.mp4', 9, 0, 'vostfr'),
(1011, '', 16, 1, 'image_episode/demon_slayer_s1/episode16.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode16.mp4', 9, 0, 'vostfr'),
(1012, '', 17, 1, 'image_episode/demon_slayer_s1/episode17.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode17.mp4', 9, 0, 'vostfr'),
(1013, '', 18, 1, 'image_episode/demon_slayer_s1/episode18.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode18.mp4', 9, 0, 'vostfr'),
(1014, '', 19, 1, 'image_episode/demon_slayer_s1/episode19.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode19.mp4', 9, 0, 'vostfr'),
(1015, '', 20, 1, 'image_episode/demon_slayer_s1/episode20.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode20.mp4', 9, 0, 'vostfr'),
(1016, '', 21, 1, 'image_episode/demon_slayer_s1/episode21.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode21.mp4', 9, 0, 'vostfr'),
(1017, '', 22, 1, 'image_episode/demon_slayer_s1/episode22.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode22.mp4', 9, 0, 'vostfr'),
(1018, '', 23, 1, 'image_episode/demon_slayer_s1/episode23.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode23.mp4', 9, 0, 'vostfr'),
(1019, '', 24, 1, 'image_episode/demon_slayer_s1/episode24.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode24.mp4', 9, 0, 'vostfr'),
(1020, '', 25, 1, 'image_episode/demon_slayer_s1/episode25.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode25.mp4', 9, 0, 'vostfr'),
(1021, '', 26, 1, 'image_episode/demon_slayer_s1/episode26.PNG', '', 'Video/demon_slayer/saison1/vostfr/episode26.mp4', 9, 0, 'vostfr'),
(1022, '', 1, 2, 'image_episode/demon_slayer_s2/episode1.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode1.mp4', 9, 0, 'vostfr'),
(1023, '', 2, 2, 'image_episode/demon_slayer_s2/episode2.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode2.mp4', 9, 0, 'vostfr'),
(1024, '', 3, 2, 'image_episode/demon_slayer_s2/episode3.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode3.mp4', 9, 0, 'vostfr'),
(1025, '', 4, 2, 'image_episode/demon_slayer_s2/episode4.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode4.mp4', 9, 0, 'vostfr'),
(1026, '', 5, 2, 'image_episode/demon_slayer_s2/episode5.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode5.mp4', 9, 0, 'vostfr'),
(1027, '', 6, 2, 'image_episode/demon_slayer_s2/episode6.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode6.mp4', 9, 0, 'vostfr'),
(1028, '', 7, 2, 'image_episode/demon_slayer_s2/episode7.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode7.mp4', 9, 0, 'vostfr'),
(1029, '', 8, 2, 'image_episode/demon_slayer_s2/episode8.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode8.mp4', 9, 0, 'vostfr'),
(1030, '', 9, 2, 'image_episode/demon_slayer_s2/episode9.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode9.mp4', 9, 0, 'vostfr'),
(1031, '', 10, 2, 'image_episode/demon_slayer_s2/episode10.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode10.mp4', 9, 0, 'vostfr'),
(1032, '', 11, 2, 'image_episode/demon_slayer_s2/episode11.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode11.mp4', 9, 0, 'vostfr'),
(1033, '', 12, 2, 'image_episode/demon_slayer_s2/episode12.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode12.mp4', 9, 0, 'vostfr'),
(1034, '', 13, 2, 'image_episode/demon_slayer_s2/episode13.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode13.mp4', 9, 0, 'vostfr'),
(1035, '', 14, 2, 'image_episode/demon_slayer_s2/episode14.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode14.mp4', 9, 0, 'vostfr'),
(1036, '', 15, 2, 'image_episode/demon_slayer_s2/episode15.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode15.mp4', 9, 0, 'vostfr'),
(1037, '', 16, 2, 'image_episode/demon_slayer_s2/episode16.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode16.mp4', 9, 0, 'vostfr'),
(1038, '', 17, 2, 'image_episode/demon_slayer_s2/episode17.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode17.mp4', 9, 0, 'vostfr'),
(1039, '', 18, 2, 'image_episode/demon_slayer_s2/episode18.PNG', '', 'Video/demon_slayer/saison2/vostfr/episode18.mp4', 9, 0, 'vostfr'),
(1040, '', 1, 1, 'image_episode/Aharen-san_s1/episode1.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode1.mp4', 10, 0, 'vostfr'),
(1041, '', 2, 1, 'image_episode/Aharen-san_s1/episode2.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode2.mp4', 10, 0, 'vostfr'),
(1042, '', 3, 1, 'image_episode/Aharen-san_s1/episode3.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode3.mp4', 10, 0, 'vostfr'),
(1043, '', 4, 1, 'image_episode/Aharen-san_s1/episode4.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode4.mp4', 10, 0, 'vostfr'),
(1044, '', 5, 1, 'image_episode/Aharen-san_s1/episode5.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode5.mp4', 10, 0, 'vostfr'),
(1045, '', 6, 1, 'image_episode/Aharen-san_s1/episode6.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode6.mp4', 10, 0, 'vostfr'),
(1046, '', 7, 1, 'image_episode/Aharen-san_s1/episode7.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode7.mp4', 10, 0, 'vostfr'),
(1047, '', 8, 1, 'image_episode/Aharen-san_s1/episode8.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode8.mp4', 10, 0, 'vostfr'),
(1048, '', 9, 1, 'image_episode/Aharen-san_s1/episode9.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode9.mp4', 10, 0, 'vostfr'),
(1049, '', 10, 1, 'image_episode/Aharen-san_s1/episode10.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode10.mp4', 10, 0, 'vostfr'),
(1050, '', 11, 1, 'image_episode/Aharen-san_s1/episode11.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode11.mp4', 10, 0, 'vostfr'),
(1051, '', 12, 1, 'image_episode/Aharen-san_s1/episode12.PNG', '', 'Video/Aharen-san/saison1/vostfr/episode12.mp4', 10, 0, 'vostfr'),
(1052, '', 1, 1, 'image_episode/Chainsaw_Man_s1/episode1.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode1.mp4', 11, 0, 'vf'),
(1053, '', 2, 1, 'image_episode/Chainsaw_Man_s1/episode2.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode2.mp4', 11, 0, 'vf'),
(1054, '', 3, 1, 'image_episode/Chainsaw_Man_s1/episode3.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode3.mp4', 11, 0, 'vf'),
(1055, '', 4, 1, 'image_episode/Chainsaw_Man_s1/episode4.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode4.mp4', 11, 0, 'vf'),
(1056, '', 5, 1, 'image_episode/Chainsaw_Man_s1/episode5.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode5.mp4', 11, 0, 'vf'),
(1057, '', 6, 1, 'image_episode/Chainsaw_Man_s1/episode6.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode6.mp4', 11, 0, 'vf'),
(1058, '', 7, 1, 'image_episode/Chainsaw_Man_s1/episode7.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode7.mp4', 11, 0, 'vf'),
(1059, '', 8, 1, 'image_episode/Chainsaw_Man_s1/episode8.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode8.mp4', 11, 0, 'vf'),
(1060, '', 9, 1, 'image_episode/Chainsaw_Man_s1/episode9.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode9.mp4', 11, 0, 'vf'),
(1061, '', 10, 1, 'image_episode/Chainsaw_Man_s1/episode10.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode10.mp4', 11, 0, 'vf'),
(1062, '', 11, 1, 'image_episode/Chainsaw_Man_s1/episode11.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode11.mp4', 11, 0, 'vf'),
(1063, '', 12, 1, 'image_episode/Chainsaw_Man_s1/episode12.PNG', '', 'Video/Chainsaw_Man/saison1/vf/episode12.mp4', 11, 0, 'vf'),
(1064, '', 1, 1, 'image_episode/Chainsaw_Man_s1/episode1.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode1.mp4', 11, 0, 'vostfr'),
(1065, '', 2, 1, 'image_episode/Chainsaw_Man_s1/episode2.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode2.mp4', 11, 0, 'vostfr'),
(1066, '', 3, 1, 'image_episode/Chainsaw_Man_s1/episode3.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode3.mp4', 11, 0, 'vostfr'),
(1067, '', 4, 1, 'image_episode/Chainsaw_Man_s1/episode4.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode4.mp4', 11, 0, 'vostfr'),
(1068, '', 5, 1, 'image_episode/Chainsaw_Man_s1/episode5.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode5.mp4', 11, 0, 'vostfr'),
(1069, '', 6, 1, 'image_episode/Chainsaw_Man_s1/episode6.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode6.mp4', 11, 0, 'vostfr'),
(1070, '', 7, 1, 'image_episode/Chainsaw_Man_s1/episode7.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode7.mp4', 11, 0, 'vostfr'),
(1071, '', 8, 1, 'image_episode/Chainsaw_Man_s1/episode8.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode8.mp4', 11, 0, 'vostfr'),
(1072, '', 9, 1, 'image_episode/Chainsaw_Man_s1/episode9.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode9.mp4', 11, 0, 'vostfr'),
(1073, '', 10, 1, 'image_episode/Chainsaw_Man_s1/episode10.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode10.mp4', 11, 0, 'vostfr'),
(1074, '', 11, 1, 'image_episode/Chainsaw_Man_s1/episode11.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode11.mp4', 11, 0, 'vostfr'),
(1075, '', 12, 1, 'image_episode/Chainsaw_Man_s1/episode12.PNG', '', 'Video/Chainsaw_Man/saison1/vostfr/episode12.mp4', 11, 0, 'vostfr'),
(1076, '', 1, 1, 'image_episode/Charlotte_s1/episode1.PNG', '', 'Video/Charlotte/saison1/vostfr/episode1.mp4', 12, 0, 'vostfr'),
(1077, '', 2, 1, 'image_episode/Charlotte_s1/episode2.PNG', '', 'Video/Charlotte/saison1/vostfr/episode2.mp4', 12, 0, 'vostfr'),
(1078, '', 3, 1, 'image_episode/Charlotte_s1/episode3.PNG', '', 'Video/Charlotte/saison1/vostfr/episode3.mp4', 12, 0, 'vostfr'),
(1079, '', 4, 1, 'image_episode/Charlotte_s1/episode4.PNG', '', 'Video/Charlotte/saison1/vostfr/episode4.mp4', 12, 0, 'vostfr'),
(1080, '', 5, 1, 'image_episode/Charlotte_s1/episode5.PNG', '', 'Video/Charlotte/saison1/vostfr/episode5.mp4', 12, 0, 'vostfr'),
(1081, '', 6, 1, 'image_episode/Charlotte_s1/episode6.PNG', '', 'Video/Charlotte/saison1/vostfr/episode6.mp4', 12, 0, 'vostfr'),
(1082, '', 7, 1, 'image_episode/Charlotte_s1/episode7.PNG', '', 'Video/Charlotte/saison1/vostfr/episode7.mp4', 12, 0, 'vostfr'),
(1083, '', 8, 1, 'image_episode/Charlotte_s1/episode8.PNG', '', 'Video/Charlotte/saison1/vostfr/episode8.mp4', 12, 0, 'vostfr'),
(1084, '', 9, 1, 'image_episode/Charlotte_s1/episode9.PNG', '', 'Video/Charlotte/saison1/vostfr/episode9.mp4', 12, 0, 'vostfr'),
(1085, '', 10, 1, 'image_episode/Charlotte_s1/episode10.PNG', '', 'Video/Charlotte/saison1/vostfr/episode10.mp4', 12, 0, 'vostfr'),
(1086, '', 11, 1, 'image_episode/Charlotte_s1/episode11.PNG', '', 'Video/Charlotte/saison1/vostfr/episode11.mp4', 12, 0, 'vostfr'),
(1087, '', 12, 1, 'image_episode/Charlotte_s1/episode12.PNG', '', 'Video/Charlotte/saison1/vostfr/episode12.mp4', 12, 0, 'vostfr'),
(1088, '', 13, 1, 'image_episode/Charlotte_s1/episode13.PNG', '', 'Video/Charlotte/saison1/vostfr/episode13.mp4', 12, 0, 'vostfr'),
(1089, '', 1, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode1.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode1.mp4', 13, 0, 'vf'),
(1090, '', 2, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode2.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode2.mp4', 13, 0, 'vf'),
(1091, '', 3, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode3.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode3.mp4', 13, 0, 'vf'),
(1092, '', 4, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode4.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode4.mp4', 13, 0, 'vf'),
(1093, '', 5, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode5.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode5.mp4', 13, 0, 'vf'),
(1094, '', 6, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode6.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode6.mp4', 13, 0, 'vf'),
(1095, '', 7, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode7.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode7.mp4', 13, 0, 'vf'),
(1096, '', 8, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode8.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode8.mp4', 13, 0, 'vf'),
(1097, '', 9, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode9.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode9.mp4', 13, 0, 'vf'),
(1098, '', 10, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode10.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode10.mp4', 13, 0, 'vf'),
(1099, '', 11, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode11.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode11.mp4', 13, 0, 'vf'),
(1100, '', 12, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode12.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode12.mp4', 13, 0, 'vf'),
(1101, '', 13, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode13.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode13.mp4', 13, 0, 'vf'),
(1102, '', 14, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode14.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode14.mp4', 13, 0, 'vf'),
(1103, '', 15, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode15.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode15.mp4', 13, 0, 'vf'),
(1104, '', 16, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode16.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode16.mp4', 13, 0, 'vf'),
(1105, '', 17, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode17.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode17.mp4', 13, 0, 'vf'),
(1106, '', 18, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode18.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode18.mp4', 13, 0, 'vf'),
(1107, '', 19, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode19.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode19.mp4', 13, 0, 'vf'),
(1108, '', 20, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode20.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode20.mp4', 13, 0, 'vf'),
(1109, '', 21, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode21.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode21.mp4', 13, 0, 'vf'),
(1110, '', 22, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode22.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode22.mp4', 13, 0, 'vf'),
(1111, '', 23, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode23.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode23.mp4', 13, 0, 'vf'),
(1112, '', 24, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode24.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode24.mp4', 13, 0, 'vf'),
(1113, '', 25, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode25.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vf/episode25.mp4', 13, 0, 'vf'),
(1114, '', 1, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode1.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode1.mp4', 13, 0, 'vf'),
(1115, '', 2, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode2.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode2.mp4', 13, 0, 'vf'),
(1116, '', 3, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode3.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode3.mp4', 13, 0, 'vf'),
(1117, '', 4, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode4.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode4.mp4', 13, 0, 'vf'),
(1118, '', 5, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode5.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode5.mp4', 13, 0, 'vf'),
(1119, '', 6, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode6.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode6.mp4', 13, 0, 'vf'),
(1120, '', 7, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode7.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode7.mp4', 13, 0, 'vf'),
(1121, '', 8, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode8.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode8.mp4', 13, 0, 'vf'),
(1122, '', 9, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode9.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode9.mp4', 13, 0, 'vf'),
(1123, '', 10, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode10.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode10.mp4', 13, 0, 'vf'),
(1124, '', 11, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode11.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode11.mp4', 13, 0, 'vf'),
(1125, '', 12, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode12.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode12.mp4', 13, 0, 'vf'),
(1126, '', 13, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode13.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode13.mp4', 13, 0, 'vf'),
(1127, '', 14, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode14.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode14.mp4', 13, 0, 'vf'),
(1128, '', 15, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode15.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode15.mp4', 13, 0, 'vf'),
(1129, '', 16, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode16.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode16.mp4', 13, 0, 'vf'),
(1130, '', 17, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode17.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode17.mp4', 13, 0, 'vf'),
(1131, '', 18, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode18.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode18.mp4', 13, 0, 'vf'),
(1132, '', 19, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode19.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode19.mp4', 13, 0, 'vf'),
(1133, '', 20, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode20.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode20.mp4', 13, 0, 'vf'),
(1134, '', 21, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode21.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode21.mp4', 13, 0, 'vf'),
(1135, '', 22, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode22.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode22.mp4', 13, 0, 'vf'),
(1136, '', 23, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode23.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode23.mp4', 13, 0, 'vf'),
(1137, '', 24, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode24.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vf/episode24.mp4', 13, 0, 'vf'),
(1138, '', 1, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode1.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode1.mp4', 13, 0, 'vostfr'),
(1139, '', 2, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode2.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode2.mp4', 13, 0, 'vostfr'),
(1140, '', 3, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode3.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode3.mp4', 13, 0, 'vostfr'),
(1141, '', 4, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode4.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode4.mp4', 13, 0, 'vostfr'),
(1142, '', 5, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode5.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode5.mp4', 13, 0, 'vostfr');
INSERT INTO `episode` (`Code_episode`, `Description_episode`, `episode`, `saison`, `image_episode`, `Titre_episode`, `video`, `Code_anime`, `Code_watchlist`, `Langue`) VALUES
(1143, '', 6, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode6.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode6.mp4', 13, 0, 'vostfr'),
(1144, '', 7, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode7.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode7.mp4', 13, 0, 'vostfr'),
(1145, '', 8, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode8.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode8.mp4', 13, 0, 'vostfr'),
(1146, '', 9, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode9.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode9.mp4', 13, 0, 'vostfr'),
(1147, '', 10, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode10.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode10.mp4', 13, 0, 'vostfr'),
(1148, '', 11, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode11.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode11.mp4', 13, 0, 'vostfr'),
(1149, '', 12, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode12.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode12.mp4', 13, 0, 'vostfr'),
(1150, '', 13, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode13.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode13.mp4', 13, 0, 'vostfr'),
(1151, '', 14, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode14.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode14.mp4', 13, 0, 'vostfr'),
(1152, '', 15, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode15.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode15.mp4', 13, 0, 'vostfr'),
(1153, '', 16, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode16.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode16.mp4', 13, 0, 'vostfr'),
(1154, '', 17, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode17.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode17.mp4', 13, 0, 'vostfr'),
(1155, '', 18, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode18.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode18.mp4', 13, 0, 'vostfr'),
(1156, '', 19, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode19.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode19.mp4', 13, 0, 'vostfr'),
(1157, '', 20, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode20.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode20.mp4', 13, 0, 'vostfr'),
(1158, '', 21, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode21.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode21.mp4', 13, 0, 'vostfr'),
(1159, '', 22, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode22.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode22.mp4', 13, 0, 'vostfr'),
(1160, '', 23, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode23.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode23.mp4', 13, 0, 'vostfr'),
(1161, '', 24, 2, 'image_episode/moi_quand_je_me_reincarne_en_slime_s2/episode24.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison2/vostfr/episode24.mp4', 13, 0, 'vostfr'),
(1162, '', 1, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode1.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode1.mp4', 13, 0, 'vostfr'),
(1163, '', 2, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode2.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode2.mp4', 13, 0, 'vostfr'),
(1164, '', 3, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode3.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode3.mp4', 13, 0, 'vostfr'),
(1165, '', 4, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode4.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode4.mp4', 13, 0, 'vostfr'),
(1166, '', 5, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode5.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode5.mp4', 13, 0, 'vostfr'),
(1167, '', 6, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode6.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode6.mp4', 13, 0, 'vostfr'),
(1168, '', 7, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode7.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode7.mp4', 13, 0, 'vostfr'),
(1169, '', 8, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode8.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode8.mp4', 13, 0, 'vostfr'),
(1170, '', 9, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode9.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode9.mp4', 13, 0, 'vostfr'),
(1171, '', 10, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode10.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode10.mp4', 13, 0, 'vostfr'),
(1172, '', 11, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode11.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode11.mp4', 13, 0, 'vostfr'),
(1173, '', 12, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode12.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode12.mp4', 13, 0, 'vostfr'),
(1174, '', 13, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode13.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode13.mp4', 13, 0, 'vostfr'),
(1175, '', 14, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode14.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode14.mp4', 13, 0, 'vostfr'),
(1176, '', 15, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode15.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode15.mp4', 13, 0, 'vostfr'),
(1177, '', 16, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode16.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode16.mp4', 13, 0, 'vostfr'),
(1178, '', 17, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode17.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode17.mp4', 13, 0, 'vostfr'),
(1179, '', 18, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode18.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode18.mp4', 13, 0, 'vostfr'),
(1180, '', 19, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode19.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode19.mp4', 13, 0, 'vostfr'),
(1181, '', 20, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode20.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode20.mp4', 13, 0, 'vostfr'),
(1182, '', 21, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode21.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode21.mp4', 13, 0, 'vostfr'),
(1183, '', 22, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode22.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode22.mp4', 13, 0, 'vostfr'),
(1184, '', 23, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode23.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode23.mp4', 13, 0, 'vostfr'),
(1185, '', 24, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode24.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode24.mp4', 13, 0, 'vostfr'),
(1186, '', 25, 1, 'image_episode/moi_quand_je_me_reincarne_en_slime_s1/episode25.PNG', '', 'Video/moi_quand_je_me_reincarne_en_slime/saison1/vostfr/episode25.mp4', 13, 0, 'vostfr'),
(1187, '', 1, 1, 'image_episode/Overlord_s1/episode1.PNG', '', 'Video/Overlord/saison1/vostfr/episode1.mp4', 14, 0, 'vostfr'),
(1188, '', 2, 1, 'image_episode/Overlord_s1/episode2.PNG', '', 'Video/Overlord/saison1/vostfr/episode2.mp4', 14, 0, 'vostfr'),
(1189, '', 3, 1, 'image_episode/Overlord_s1/episode3.PNG', '', 'Video/Overlord/saison1/vostfr/episode3.mp4', 14, 0, 'vostfr'),
(1190, '', 4, 1, 'image_episode/Overlord_s1/episode4.PNG', '', 'Video/Overlord/saison1/vostfr/episode4.mp4', 14, 0, 'vostfr'),
(1191, '', 5, 1, 'image_episode/Overlord_s1/episode5.PNG', '', 'Video/Overlord/saison1/vostfr/episode5.mp4', 14, 0, 'vostfr'),
(1192, '', 6, 1, 'image_episode/Overlord_s1/episode6.PNG', '', 'Video/Overlord/saison1/vostfr/episode6.mp4', 14, 0, 'vostfr'),
(1193, '', 7, 1, 'image_episode/Overlord_s1/episode7.PNG', '', 'Video/Overlord/saison1/vostfr/episode7.mp4', 14, 0, 'vostfr'),
(1194, '', 8, 1, 'image_episode/Overlord_s1/episode8.PNG', '', 'Video/Overlord/saison1/vostfr/episode8.mp4', 14, 0, 'vostfr'),
(1195, '', 9, 1, 'image_episode/Overlord_s1/episode9.PNG', '', 'Video/Overlord/saison1/vostfr/episode9.mp4', 14, 0, 'vostfr'),
(1196, '', 10, 1, 'image_episode/Overlord_s1/episode10.PNG', '', 'Video/Overlord/saison1/vostfr/episode10.mp4', 14, 0, 'vostfr'),
(1197, '', 11, 1, 'image_episode/Overlord_s1/episode11.PNG', '', 'Video/Overlord/saison1/vostfr/episode11.mp4', 14, 0, 'vostfr'),
(1198, '', 12, 1, 'image_episode/Overlord_s1/episode12.PNG', '', 'Video/Overlord/saison1/vostfr/episode12.mp4', 14, 0, 'vostfr'),
(1199, '', 13, 1, 'image_episode/Overlord_s1/episode13.PNG', '', 'Video/Overlord/saison1/vostfr/episode13.mp4', 14, 0, 'vostfr'),
(1200, '', 1, 2, 'image_episode/Overlord_s2/episode1.PNG', '', 'Video/Overlord/saison2/vostfr/episode1.mp4', 14, 0, 'vostfr'),
(1201, '', 2, 2, 'image_episode/Overlord_s2/episode2.PNG', '', 'Video/Overlord/saison2/vostfr/episode2.mp4', 14, 0, 'vostfr'),
(1202, '', 3, 2, 'image_episode/Overlord_s2/episode3.PNG', '', 'Video/Overlord/saison2/vostfr/episode3.mp4', 14, 0, 'vostfr'),
(1203, '', 4, 2, 'image_episode/Overlord_s2/episode4.PNG', '', 'Video/Overlord/saison2/vostfr/episode4.mp4', 14, 0, 'vostfr'),
(1204, '', 5, 2, 'image_episode/Overlord_s2/episode5.PNG', '', 'Video/Overlord/saison2/vostfr/episode5.mp4', 14, 0, 'vostfr'),
(1205, '', 6, 2, 'image_episode/Overlord_s2/episode6.PNG', '', 'Video/Overlord/saison2/vostfr/episode6.mp4', 14, 0, 'vostfr'),
(1206, '', 7, 2, 'image_episode/Overlord_s2/episode7.PNG', '', 'Video/Overlord/saison2/vostfr/episode7.mp4', 14, 0, 'vostfr'),
(1207, '', 8, 2, 'image_episode/Overlord_s2/episode8.PNG', '', 'Video/Overlord/saison2/vostfr/episode8.mp4', 14, 0, 'vostfr'),
(1208, '', 9, 2, 'image_episode/Overlord_s2/episode9.PNG', '', 'Video/Overlord/saison2/vostfr/episode9.mp4', 14, 0, 'vostfr'),
(1209, '', 10, 2, 'image_episode/Overlord_s2/episode10.PNG', '', 'Video/Overlord/saison2/vostfr/episode10.mp4', 14, 0, 'vostfr'),
(1210, '', 11, 2, 'image_episode/Overlord_s2/episode11.PNG', '', 'Video/Overlord/saison2/vostfr/episode11.mp4', 14, 0, 'vostfr'),
(1211, '', 12, 2, 'image_episode/Overlord_s2/episode12.PNG', '', 'Video/Overlord/saison2/vostfr/episode12.mp4', 14, 0, 'vostfr'),
(1212, '', 13, 2, 'image_episode/Overlord_s2/episode13.PNG', '', 'Video/Overlord/saison2/vostfr/episode13.mp4', 14, 0, 'vostfr'),
(1213, '', 1, 3, 'image_episode/Overlord_s3/episode1.PNG', '', 'Video/Overlord/saison3/vostfr/episode1.mp4', 14, 0, 'vostfr'),
(1214, '', 2, 3, 'image_episode/Overlord_s3/episode2.PNG', '', 'Video/Overlord/saison3/vostfr/episode2.mp4', 14, 0, 'vostfr'),
(1215, '', 3, 3, 'image_episode/Overlord_s3/episode3.PNG', '', 'Video/Overlord/saison3/vostfr/episode3.mp4', 14, 0, 'vostfr'),
(1216, '', 4, 3, 'image_episode/Overlord_s3/episode4.PNG', '', 'Video/Overlord/saison3/vostfr/episode4.mp4', 14, 0, 'vostfr'),
(1217, '', 5, 3, 'image_episode/Overlord_s3/episode5.PNG', '', 'Video/Overlord/saison3/vostfr/episode5.mp4', 14, 0, 'vostfr'),
(1218, '', 6, 3, 'image_episode/Overlord_s3/episode6.PNG', '', 'Video/Overlord/saison3/vostfr/episode6.mp4', 14, 0, 'vostfr'),
(1219, '', 7, 3, 'image_episode/Overlord_s3/episode7.PNG', '', 'Video/Overlord/saison3/vostfr/episode7.mp4', 14, 0, 'vostfr'),
(1220, '', 8, 3, 'image_episode/Overlord_s3/episode8.PNG', '', 'Video/Overlord/saison3/vostfr/episode8.mp4', 14, 0, 'vostfr'),
(1221, '', 9, 3, 'image_episode/Overlord_s3/episode9.PNG', '', 'Video/Overlord/saison3/vostfr/episode9.mp4', 14, 0, 'vostfr'),
(1222, '', 10, 3, 'image_episode/Overlord_s3/episode10.PNG', '', 'Video/Overlord/saison3/vostfr/episode10.mp4', 14, 0, 'vostfr'),
(1223, '', 11, 3, 'image_episode/Overlord_s3/episode11.PNG', '', 'Video/Overlord/saison3/vostfr/episode11.mp4', 14, 0, 'vostfr'),
(1224, '', 12, 3, 'image_episode/Overlord_s3/episode12.PNG', '', 'Video/Overlord/saison3/vostfr/episode12.mp4', 14, 0, 'vostfr'),
(1225, '', 13, 3, 'image_episode/Overlord_s3/episode13.PNG', '', 'Video/Overlord/saison3/vostfr/episode13.mp4', 14, 0, 'vostfr'),
(1226, '', 1, 4, 'image_episode/Overlord_s4/episode1.PNG', '', 'Video/Overlord/saison4/vostfr/episode1.mp4', 14, 0, 'vostfr'),
(1227, '', 2, 4, 'image_episode/Overlord_s4/episode2.PNG', '', 'Video/Overlord/saison4/vostfr/episode2.mp4', 14, 0, 'vostfr'),
(1228, '', 3, 4, 'image_episode/Overlord_s4/episode3.PNG', '', 'Video/Overlord/saison4/vostfr/episode3.mp4', 14, 0, 'vostfr'),
(1229, '', 4, 4, 'image_episode/Overlord_s4/episode4.PNG', '', 'Video/Overlord/saison4/vostfr/episode4.mp4', 14, 0, 'vostfr'),
(1230, '', 5, 4, 'image_episode/Overlord_s4/episode5.PNG', '', 'Video/Overlord/saison4/vostfr/episode5.mp4', 14, 0, 'vostfr'),
(1231, '', 6, 4, 'image_episode/Overlord_s4/episode6.PNG', '', 'Video/Overlord/saison4/vostfr/episode6.mp4', 14, 0, 'vostfr'),
(1232, '', 7, 4, 'image_episode/Overlord_s4/episode7.PNG', '', 'Video/Overlord/saison4/vostfr/episode7.mp4', 14, 0, 'vostfr'),
(1233, '', 8, 4, 'image_episode/Overlord_s4/episode8.PNG', '', 'Video/Overlord/saison4/vostfr/episode8.mp4', 14, 0, 'vostfr'),
(1234, '', 9, 4, 'image_episode/Overlord_s4/episode9.PNG', '', 'Video/Overlord/saison4/vostfr/episode9.mp4', 14, 0, 'vostfr'),
(1235, '', 10, 4, 'image_episode/Overlord_s4/episode10.PNG', '', 'Video/Overlord/saison4/vostfr/episode10.mp4', 14, 0, 'vostfr'),
(1236, '', 11, 4, 'image_episode/Overlord_s4/episode11.PNG', '', 'Video/Overlord/saison4/vostfr/episode11.mp4', 14, 0, 'vostfr'),
(1237, '', 12, 4, 'image_episode/Overlord_s4/episode12.PNG', '', 'Video/Overlord/saison4/vostfr/episode12.mp4', 14, 0, 'vostfr'),
(1238, '', 13, 4, 'image_episode/Overlord_s4/episode13.PNG', '', 'Video/Overlord/saison4/vostfr/episode13.mp4', 14, 0, 'vostfr'),
(1239, '', 1, 1, 'image_episode/Tomodachi_Game_s1/episode1.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode1.mp4', 15, 0, 'vostfr'),
(1240, '', 2, 1, 'image_episode/Tomodachi_Game_s1/episode2.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode2.mp4', 15, 0, 'vostfr'),
(1241, '', 3, 1, 'image_episode/Tomodachi_Game_s1/episode3.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode3.mp4', 15, 0, 'vostfr'),
(1242, '', 4, 1, 'image_episode/Tomodachi_Game_s1/episode4.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode4.mp4', 15, 0, 'vostfr'),
(1243, '', 5, 1, 'image_episode/Tomodachi_Game_s1/episode5.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode5.mp4', 15, 0, 'vostfr'),
(1244, '', 6, 1, 'image_episode/Tomodachi_Game_s1/episode6.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode6.mp4', 15, 0, 'vostfr'),
(1245, '', 7, 1, 'image_episode/Tomodachi_Game_s1/episode7.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode7.mp4', 15, 0, 'vostfr'),
(1246, '', 8, 1, 'image_episode/Tomodachi_Game_s1/episode8.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode8.mp4', 15, 0, 'vostfr'),
(1247, '', 9, 1, 'image_episode/Tomodachi_Game_s1/episode9.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode9.mp4', 15, 0, 'vostfr'),
(1248, '', 10, 1, 'image_episode/Tomodachi_Game_s1/episode10.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode10.mp4', 15, 0, 'vostfr'),
(1249, '', 11, 1, 'image_episode/Tomodachi_Game_s1/episode11.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode11.mp4', 15, 0, 'vostfr'),
(1250, '', 12, 1, 'image_episode/Tomodachi_Game_s1/episode12.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode12.mp4', 15, 0, 'vostfr'),
(1251, '', 13, 1, 'image_episode/Tomodachi_Game_s1/episode13.PNG', '', 'Video/Tomodachi_Game/saison1/vostfr/episode13.mp4', 15, 0, 'vostfr'),
(1252, '', 1, 1, 'image_episode/Tomodachi_Game_s1/episode1.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode1.mp4', 15, 0, 'vf'),
(1253, '', 2, 1, 'image_episode/Tomodachi_Game_s1/episode2.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode2.mp4', 15, 0, 'vf'),
(1254, '', 3, 1, 'image_episode/Tomodachi_Game_s1/episode3.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode3.mp4', 15, 0, 'vf'),
(1255, '', 4, 1, 'image_episode/Tomodachi_Game_s1/episode4.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode4.mp4', 15, 0, 'vf'),
(1256, '', 5, 1, 'image_episode/Tomodachi_Game_s1/episode5.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode5.mp4', 15, 0, 'vf'),
(1257, '', 6, 1, 'image_episode/Tomodachi_Game_s1/episode6.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode6.mp4', 15, 0, 'vf'),
(1258, '', 7, 1, 'image_episode/Tomodachi_Game_s1/episode7.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode7.mp4', 15, 0, 'vf'),
(1259, '', 8, 1, 'image_episode/Tomodachi_Game_s1/episode8.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode8.mp4', 15, 0, 'vf'),
(1260, '', 9, 1, 'image_episode/Tomodachi_Game_s1/episode9.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode9.mp4', 15, 0, 'vf'),
(1261, '', 10, 1, 'image_episode/Tomodachi_Game_s1/episode10.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode10.mp4', 15, 0, 'vf'),
(1262, '', 11, 1, 'image_episode/Tomodachi_Game_s1/episode11.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode11.mp4', 15, 0, 'vf'),
(1263, '', 12, 1, 'image_episode/Tomodachi_Game_s1/episode12.PNG', '', 'Video/Tomodachi_Game/saison1/vf/episode12.mp4', 15, 0, 'vf'),
(1264, '', 1, 1, 'image_episode/Overlord_s1/episode1.PNG', '', 'Video/Overlord/saison1/vf/episode1.mp4', 14, 0, 'vf'),
(1265, '', 2, 1, 'image_episode/Overlord_s1/episode2.PNG', '', 'Video/Overlord/saison1/vf/episode2.mp4', 14, 0, 'vf'),
(1266, '', 3, 1, 'image_episode/Overlord_s1/episode3.PNG', '', 'Video/Overlord/saison1/vf/episode3.mp4', 14, 0, 'vf'),
(1267, '', 4, 1, 'image_episode/Overlord_s1/episode4.PNG', '', 'Video/Overlord/saison1/vf/episode4.mp4', 14, 0, 'vf'),
(1268, '', 5, 1, 'image_episode/Overlord_s1/episode5.PNG', '', 'Video/Overlord/saison1/vf/episode5.mp4', 14, 0, 'vf'),
(1269, '', 6, 1, 'image_episode/Overlord_s1/episode6.PNG', '', 'Video/Overlord/saison1/vf/episode6.mp4', 14, 0, 'vf'),
(1270, '', 7, 1, 'image_episode/Overlord_s1/episode7.PNG', '', 'Video/Overlord/saison1/vf/episode7.mp4', 14, 0, 'vf'),
(1271, '', 8, 1, 'image_episode/Overlord_s1/episode8.PNG', '', 'Video/Overlord/saison1/vf/episode8.mp4', 14, 0, 'vf'),
(1272, '', 9, 1, 'image_episode/Overlord_s1/episode9.PNG', '', 'Video/Overlord/saison1/vf/episode9.mp4', 14, 0, 'vf'),
(1273, '', 10, 1, 'image_episode/Overlord_s1/episode10.PNG', '', 'Video/Overlord/saison1/vf/episode10.mp4', 14, 0, 'vf'),
(1274, '', 11, 1, 'image_episode/Overlord_s1/episode11.PNG', '', 'Video/Overlord/saison1/vf/episode11.mp4', 14, 0, 'vf'),
(1275, '', 12, 1, 'image_episode/Overlord_s1/episode12.PNG', '', 'Video/Overlord/saison1/vf/episode12.mp4', 14, 0, 'vf'),
(1276, '', 13, 1, 'image_episode/Overlord_s1/episode13.PNG', '', 'Video/Overlord/saison1/vf/episode13.mp4', 14, 0, 'vf'),
(1277, '', 1, 2, 'image_episode/Overlord_s2/episode1.PNG', '', 'Video/Overlord/saison2/vf/episode1.mp4', 14, 0, 'vf'),
(1278, '', 2, 2, 'image_episode/Overlord_s2/episode2.PNG', '', 'Video/Overlord/saison2/vf/episode2.mp4', 14, 0, 'vf'),
(1279, '', 3, 2, 'image_episode/Overlord_s2/episode3.PNG', '', 'Video/Overlord/saison2/vf/episode3.mp4', 14, 0, 'vf'),
(1280, '', 4, 2, 'image_episode/Overlord_s2/episode4.PNG', '', 'Video/Overlord/saison2/vf/episode4.mp4', 14, 0, 'vf'),
(1281, '', 5, 2, 'image_episode/Overlord_s2/episode5.PNG', '', 'Video/Overlord/saison2/vf/episode5.mp4', 14, 0, 'vf'),
(1282, '', 6, 2, 'image_episode/Overlord_s2/episode6.PNG', '', 'Video/Overlord/saison2/vf/episode6.mp4', 14, 0, 'vf'),
(1283, '', 7, 2, 'image_episode/Overlord_s2/episode7.PNG', '', 'Video/Overlord/saison2/vf/episode7.mp4', 14, 0, 'vf'),
(1284, '', 8, 2, 'image_episode/Overlord_s2/episode8.PNG', '', 'Video/Overlord/saison2/vf/episode8.mp4', 14, 0, 'vf'),
(1285, '', 9, 2, 'image_episode/Overlord_s2/episode9.PNG', '', 'Video/Overlord/saison2/vf/episode9.mp4', 14, 0, 'vf'),
(1286, '', 10, 2, 'image_episode/Overlord_s2/episode10.PNG', '', 'Video/Overlord/saison2/vf/episode10.mp4', 14, 0, 'vf'),
(1287, '', 11, 2, 'image_episode/Overlord_s2/episode11.PNG', '', 'Video/Overlord/saison2/vf/episode11.mp4', 14, 0, 'vf'),
(1288, '', 12, 2, 'image_episode/Overlord_s2/episode12.PNG', '', 'Video/Overlord/saison2/vf/episode12.mp4', 14, 0, 'vf'),
(1289, '', 13, 2, 'image_episode/Overlord_s2/episode13.PNG', '', 'Video/Overlord/saison2/vf/episode13.mp4', 14, 0, 'vf'),
(1290, '', 1, 3, 'image_episode/Overlord_s3/episode1.PNG', '', 'Video/Overlord/saison3/vf/episode1.mp4', 14, 0, 'vf'),
(1291, '', 2, 3, 'image_episode/Overlord_s3/episode2.PNG', '', 'Video/Overlord/saison3/vf/episode2.mp4', 14, 0, 'vf'),
(1292, '', 3, 3, 'image_episode/Overlord_s3/episode3.PNG', '', 'Video/Overlord/saison3/vf/episode3.mp4', 14, 0, 'vf'),
(1293, '', 4, 3, 'image_episode/Overlord_s3/episode4.PNG', '', 'Video/Overlord/saison3/vf/episode4.mp4', 14, 0, 'vf'),
(1294, '', 5, 3, 'image_episode/Overlord_s3/episode5.PNG', '', 'Video/Overlord/saison3/vf/episode5.mp4', 14, 0, 'vf'),
(1295, '', 6, 3, 'image_episode/Overlord_s3/episode6.PNG', '', 'Video/Overlord/saison3/vf/episode6.mp4', 14, 0, 'vf'),
(1296, '', 7, 3, 'image_episode/Overlord_s3/episode7.PNG', '', 'Video/Overlord/saison3/vf/episode7.mp4', 14, 0, 'vf'),
(1297, '', 8, 3, 'image_episode/Overlord_s3/episode8.PNG', '', 'Video/Overlord/saison3/vf/episode8.mp4', 14, 0, 'vf'),
(1298, '', 9, 3, 'image_episode/Overlord_s3/episode9.PNG', '', 'Video/Overlord/saison3/vf/episode9.mp4', 14, 0, 'vf'),
(1299, '', 10, 3, 'image_episode/Overlord_s3/episode10.PNG', '', 'Video/Overlord/saison3/vf/episode10.mp4', 14, 0, 'vf'),
(1300, '', 11, 3, 'image_episode/Overlord_s3/episode11.PNG', '', 'Video/Overlord/saison3/vf/episode11.mp4', 14, 0, 'vf'),
(1301, '', 12, 3, 'image_episode/Overlord_s3/episode12.PNG', '', 'Video/Overlord/saison3/vf/episode12.mp4', 14, 0, 'vf'),
(1302, '', 13, 3, 'image_episode/Overlord_s3/episode13.PNG', '', 'Video/Overlord/saison3/vf/episode13.mp4', 14, 0, 'vf'),
(1303, '', 1, 1, 'image_episode/Oshi_no_Ko_s1/episode1.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode1.mp4', 16, 0, 'vostfr'),
(1304, '', 2, 1, 'image_episode/Oshi_no_Ko_s1/episode2.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode2.mp4', 16, 0, 'vostfr'),
(1305, '', 3, 1, 'image_episode/Oshi_no_Ko_s1/episode3.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode3.mp4', 16, 0, 'vostfr'),
(1306, '', 4, 1, 'image_episode/Oshi_no_Ko_s1/episode4.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode4.mp4', 16, 0, 'vostfr'),
(1307, '', 5, 1, 'image_episode/Oshi_no_Ko_s1/episode5.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode5.mp4', 16, 0, 'vostfr'),
(1308, '', 6, 1, 'image_episode/Oshi_no_Ko_s1/episode6.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode6.mp4', 16, 0, 'vostfr'),
(1309, '', 7, 1, 'image_episode/Oshi_no_Ko_s1/episode7.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode7.mp4', 16, 0, 'vostfr'),
(1310, '', 8, 1, 'image_episode/Oshi_no_Ko_s1/episode8.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode8.mp4', 16, 0, 'vostfr'),
(1311, '', 9, 1, 'image_episode/Oshi_no_Ko_s1/episode9.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode9.mp4', 16, 0, 'vostfr'),
(1312, '', 10, 1, 'image_episode/Oshi_no_Ko_s1/episode10.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode10.mp4', 16, 0, 'vostfr'),
(1313, '', 11, 1, 'image_episode/Oshi_no_Ko_s1/episode11.PNG', '', 'Video/Oshi_no_Ko/saison1/vostfr/episode11.mp4', 16, 0, 'vostfr');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `codeHistorique` int(11) NOT NULL,
  `codeAnime` int(11) NOT NULL,
  `numeroEpisode` int(11) NOT NULL,
  `codeUtilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`codeHistorique`, `codeAnime`, `numeroEpisode`, `codeUtilisateur`) VALUES
(1, 16, 3, 3),
(2, 12, 4, 3),
(3, 13, 3, 3),
(4, 14, 8, 3),
(5, 1, 12, 3),
(6, 15, 8, 3),
(7, 6, 2, 3),
(8, 4, 13, 3);

-- --------------------------------------------------------

--
-- Structure de la table `populaire`
--

CREATE TABLE `populaire` (
  `codePopulaire` int(11) NOT NULL,
  `nomPopulaire` varchar(244) NOT NULL,
  `codeAnime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `populaire`
--

INSERT INTO `populaire` (`codePopulaire`, `nomPopulaire`, `codeAnime`) VALUES
(1, 'Populaire1', 4);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `Code_role` int(11) NOT NULL,
  `Nom_role` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`Code_role`, `Nom_role`) VALUES
(1, 'Admin'),
(2, 'Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

CREATE TABLE `slider` (
  `codeSlider` int(11) NOT NULL,
  `nomSlider` varchar(244) NOT NULL,
  `codeAnime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`codeSlider`, `nomSlider`, `codeAnime`) VALUES
(1, 'Slider 1', 4),
(2, 'Slider 2', 6),
(3, 'Slider 3', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Code_utilisateur` int(11) NOT NULL,
  `Prenom_utilisateur` varchar(244) NOT NULL,
  `Nom_utilisateur` varchar(244) NOT NULL,
  `Pseudo_utilisateur` varchar(244) NOT NULL,
  `AdresseEmail_utilisateur` varchar(244) NOT NULL,
  `MotdePasse_utilisateur` varchar(244) NOT NULL,
  `desactiver` int(11) DEFAULT NULL,
  `lien_image` varchar(244) NOT NULL,
  `Code_role` int(11) NOT NULL DEFAULT 2,
  `Code_watchlist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Code_utilisateur`, `Prenom_utilisateur`, `Nom_utilisateur`, `Pseudo_utilisateur`, `AdresseEmail_utilisateur`, `MotdePasse_utilisateur`, `desactiver`, `lien_image`, `Code_role`, `Code_watchlist`) VALUES
(3, 'NICOLAS', 'MAGUET', 'LorsseGame', 'lorssegame@gmail.com', '$2y$10$8LH8xjuHQApGxw5YMXt0WOg3Ycd0Qxg4oudWBPfuptRa1CRy52K6K', 0, './uploads/yoku.jpg', 1, 0),
(8, 'Nicolas', 'Maguet', 'Lorsse', 'lorsse@gmail.com', '$2y$10$TB8TI92HEknyy7UQhcAMNOZQ7/7xOyeTcQUAiPcgrW/Lx7Ux6/lr6', 0, './uploads/JavaScript-logo.png', 2, 0),
(9, 'emmanuel', 'diogo', 'hades', 'manu.diogo@yahoo.fr', '$2y$10$NbLYnQ0NdmEGKCw20v6gu.NuxkrweIZcPmn8LtMP.ZxzTb17ZBaUe', 0, './uploads/output-onlinepngtools.png', 2, 0),
(11, 'l', 'Maguet', 'lolo', 'lolo@gmail.com', '$2y$10$HZ6xJd4OonMBX300B/WOcOjA/Zhxk8fw52qiS.Y9qob0Mpd2Qh6m2', 0, './uploads/ukuu.png', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `watchlist`
--

CREATE TABLE `watchlist` (
  `Code_watchlist` int(11) NOT NULL,
  `Code_utilisateur` int(11) NOT NULL,
  `Code_anime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `watchlist`
--

INSERT INTO `watchlist` (`Code_watchlist`, `Code_utilisateur`, `Code_anime`) VALUES
(37, 3, 6),
(15, 3, 11),
(16, 3, 12),
(30, 3, 13),
(20, 3, 14),
(36, 3, 16),
(13, 8, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`Code_anime`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`categorie_ID`),
  ADD UNIQUE KEY `genre_Name` (`categorie_Name`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`Code_commentaire`);

--
-- Index pour la table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`Code_episode`),
  ADD KEY `EPISODE_Anime0_FK` (`Code_anime`),
  ADD KEY `EPISODE_WATCHLIST1_FK` (`Code_watchlist`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`codeHistorique`);

--
-- Index pour la table `populaire`
--
ALTER TABLE `populaire`
  ADD PRIMARY KEY (`codePopulaire`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Code_role`);

--
-- Index pour la table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`codeSlider`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Code_utilisateur`),
  ADD KEY `UTILISATEUR_ROLE0_FK` (`Code_role`);

--
-- Index pour la table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`Code_watchlist`),
  ADD UNIQUE KEY `contrainte_doublon` (`Code_utilisateur`,`Code_anime`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `anime`
--
ALTER TABLE `anime`
  MODIFY `Code_anime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `categorie_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `Code_commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `episode`
--
ALTER TABLE `episode`
  MODIFY `Code_episode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1363;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `codeHistorique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `populaire`
--
ALTER TABLE `populaire`
  MODIFY `codePopulaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `Code_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `slider`
--
ALTER TABLE `slider`
  MODIFY `codeSlider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Code_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `Code_watchlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `EPISODE_Anime0_FK` FOREIGN KEY (`Code_anime`) REFERENCES `anime` (`Code_anime`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `UTILISATEUR_ROLE0_FK` FOREIGN KEY (`Code_role`) REFERENCES `role` (`Code_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
