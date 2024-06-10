-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 10 juin 2024 à 20:49
-- Version du serveur : 8.0.30
-- Version de PHP : 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cms_laravel`
--
CREATE DATABASE IF NOT EXISTS `cms_laravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cms_laravel`;

-- --------------------------------------------------------

--
-- Structure de la table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `telephone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `annee_experience` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projets` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `abouts`
--

INSERT INTO `abouts` (`id`, `telephone`, `annee_experience`, `title`, `short_description`, `text1`, `img1`, `text2`, `img2`, `full_description`, `about_img`, `projets`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><span style=\"font-weight: bolder;\">Email</span><br><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>coopabubumba@gmail.com<br><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>info@coopabubumba.com</p><p style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><span class=\"fa fa-phone-alt me-2\" style=\"margin-right: 0.5rem !important;\"></span><span style=\"font-weight: bolder;\">Appel</span><br><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>+243978267048</p><p style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>+243817202666<br></p><p style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><span style=\"font-weight: 700;\">Youtube</span><br></p><p style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>coopabu Malinde</p>', '10', 'Mission de la COOPABU', 'Leader de référence pour la promotion de l\'entrepreneuriat agricole dans le monde rural à travers l\'exploitation de m\'agriculture, élevage, la pêche, l\'agroforesterie, la protection de l\'environnement et le Warrantage', 'Donner du pouvoir aux menages', 'fas fa-wheelchair', 'Révolutionner le système de production pour une économie durable.', 'fas fa-hospital-alt', 'Coopérative Agricole de Bumba, COOPABU en sigle, est une entreprise agricole créée à Malinde dans le Territoire de Fizi depuis 2005 par l\'initiative d\'un ancien Chef de collectivité de MUTAMBALA et fermier agricole, feu KASUKULU KILOZO Charles. Elle intervient dans plusieurs secteurs à savoir l\'agriculture, pêche, élevage, l\'agroforesterie, l’éducation, la santé, l’environnement, la paix et la promotion du genre et enfant et la lutte contre le changement climatique.', '1715941949.jpg', '<p></p><h1 class=\"display-6 mb-5\" style=\"font-family: Poppins, sans-serif; color: rgb(21, 35, 60); text-align: center;\">Nos projets en cours</h1><ul><li style=\"text-align: left;\">Elevage des bovins </li><li style=\"text-align: left;\">50 tetes des caprins </li><li style=\"text-align: left;\">250 poules pondeuses et locales </li><li style=\"text-align: left;\">3 Etangs piscoles </li><li style=\"text-align: left;\">10 Has des maniocs pour la multiplication des semences améliorées </li><li style=\"text-align: left;\">20 Has de Maïs pour le vivre et la semence </li><li style=\"text-align: left;\">5 Has de Haricot </li><li style=\"text-align: left;\">15 Has du riz </li><li style=\"text-align: left;\">Nous cultivons aussi la Patate, le riz pour la lutte contre le changement climatique </li><li style=\"text-align: left;\">Aménagement de trois pépinières de 30000 plantules d’eucalyptus, caliandra et leucaena à distribuer aux petits exploitants </li><li style=\"text-align: left;\">Plantation des arbres fruitiers (manguiers, agrumes, palmier à l’huile) dans les diversités du territoire de Fizi. </li><li style=\"text-align: left;\">Plantations de Moringa en association avec les cultures saisonnières telles que le Maïs et le Manioc </li><li style=\"text-align: left;\">Aménagement hydroagricole de 50 Has dans le site de BUBAMBA/MALINDE par SMARTVALLEY/PICAGL</li></ul><p style=\"text-align: left;\"><br></p><p></p><h1 class=\"display-6 mb-5\" style=\"font-family: Poppins, sans-serif; color: rgb(21, 35, 60); text-align: center;\">Nos projets à venir</h1><ul><li style=\"text-align: left;\">Exploitation de la culture de BACHOULI, Citronnier, Tournesol pour la fabrication des huiles essentielles </li><li style=\"text-align: left;\">Réintroduction de la culture du caféier et cacaoyer dans les moyens et plateaux de Fizi afin de restaurer les terres déboisées. </li><li style=\"text-align: left;\">Transformation de la farine panifiable du manioc pour la promotion de l’emploi aux jeunes </li><li style=\"text-align: left;\">Intensification de la culture de l’ananas et fabrication du jus.\r\n</li></ul>', '2023-07-30 12:46:45', '2024-06-10 07:58:55');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Lancement', 'vehicule', '2023-08-04 09:48:22', '2023-08-04 09:48:22'),
(2, 'Assemblé générale', 'tracteur', '2023-08-04 09:48:47', '2023-08-04 09:48:47');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `object` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `object`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Jon Doe', 'john@gmail.com', 'Contact', 'Un email en plain-text, ou texte brut, est une version simplifiée du message HTML, car il contient uniquement du texte (pas d’images, de polices, de graphiques, de liens, ni autres formatages particuliers). Il ressemble donc fortement à un email classique que vous envoyez depuis votre boîte mail personnelle, un peu à la façon d’une conversation en tête-à-tête.', '2023-08-10 08:08:11', '2023-08-10 08:08:11'),
(3, 'Christelle', 'chris@gmail.com', 'Demande Patenariat', 'Qu’est-ce qu’un email au format HTML ?\nLe HTML signifie HyperText Markup Language. Il s’agit d’un langage codé utilisé pour la création de pages sur le web. Ce codage va ensuite être restitué par un lecteur HTML sous la forme d’un visuel avec texte, images, etc.', '2023-08-10 11:14:49', '2023-08-10 11:14:49'),
(4, 'Deo', 'deo@gmail.com', 'Test Obj', 'Parmi les différents choix à faire pour construire votre campagne d’emailing, vient la question du format, à savoir si vous choisissez d’opter pour le HTML ou le plain-text. Il est en effet bon de comprendre un minimum tout ce qui a trait au back-end afin de pouvoir ensuite choisir l’option la plus pertinente pour votre envoi d’email. HTML ou texte brut ? Captain Verify vous propose de faire le point sur chacun de ces formats afin de mieux savoir lequel utiliser selon la situation.', '2023-08-10 07:47:16', '2023-08-10 07:47:16'),
(5, 'Jon Doe', 'john@gmail.com', 'Contact', 'Sachez enfin que la majorité des experts en marketing choisissent de mélanger HTML et texte brut dans leurs emails, permettant de bénéficier ainsi du meilleur des deux mondes.', '2023-08-10 08:08:11', '2023-08-10 08:08:11'),
(6, 'Christelle', 'chris@gmail.com', 'Demande Patenariat', 'Concernant le texte brut, il répondra mieux à vos attentes si vous souhaitez un affichage simple, une compatibilité avec tous les appareils, une excellente délivrabilité, ainsi qu’un contenu particulièrement personnalisé. Il convient surtout au B2B. Vous pourrez l’utiliser pour des contacts plus personnels et pour les emails ne demandant pas une mise en page trop pointue : email transactionnel, prospection, sondage, prise de rendez-vous, fidélisation, etc.', '2023-08-12 11:14:49', '2023-08-10 11:14:49'),
(7, 'Test User', 'test@gmail.com', 'Test Objet', 'Bien que le HTML soit aujourd’hui majoritairement prisé et utilisé, le texte brut ne doit pas être abandonné pour autant. En effet, chacun a son utilité et sera plus adapté dans telle ou telle situation (public ciblé, secteur d’activité, type d’email).\n\nSi l’on résume, le format HTML est conseillé si vous avez besoin d’une analyse et d’un suivi précis, si vous recherchez la créativité et l’attrait visuel pour vous démarquer. Il marche aussi bien pour le B2C que le B2B. Utilisez-le pour les emails marketing qui doivent attirer l’œil, se distinguer, être particulièrement attirants en termes de design : newsletters, emails promotionnels, emails de bienvenue, de relance, d’anniversaire, invitation à un événement, etc.', '2024-06-06 06:18:15', '2024-06-06 06:18:15');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `galeries`
--

INSERT INTO `galeries` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '1718036570.jpg', '2024-06-10 14:22:50', '2024-06-10 14:22:50'),
(3, NULL, '1718036653.jpg', '2024-06-10 14:24:13', '2024-06-10 14:24:13'),
(4, NULL, '1718036665.jpg', '2024-06-10 14:24:25', '2024-06-10 14:24:25'),
(5, NULL, '1718036678.jpg', '2024-06-10 14:24:38', '2024-06-10 14:24:38'),
(6, NULL, '1718036690.jpg', '2024-06-10 14:24:50', '2024-06-10 14:24:50'),
(7, NULL, '1718036701.jpg', '2024-06-10 14:25:01', '2024-06-10 14:25:01'),
(8, 'Matériels agricoles de la COOPABU remis aux agriculteurs du village de Malinde en territoire de Fizi en RDC en janvier 2023', '1718038356.jpg', '2024-06-10 14:52:36', '2024-06-10 14:52:36'),
(9, NULL, '1718038415.jpg', '2024-06-10 14:53:35', '2024-06-10 14:53:35'),
(10, 'Champ de 10 has de manioc pour la multiplication des semences améliorées', '1718038425.jpg', '2024-06-10 14:53:45', '2024-06-10 14:53:45');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_28_154543_add_is_admin_to_users', 1),
(6, '2023_07_28_160228_create_slides_table', 2),
(7, '2023_07_29_103238_create_abouts_table', 3),
(8, '2023_08_03_161552_create_successes_table', 4),
(9, '2023_08_03_201433_create_reasons_table', 5),
(10, '2023_08_04_081737_create_services_table', 6),
(11, '2023_08_04_082658_create_services_table', 7),
(12, '2023_08_04_100643_create_categories_table', 8),
(13, '2023_08_04_110126_create_products_table', 9),
(14, '2023_08_08_221057_create_teams_table', 10),
(15, '2023_08_10_070130_create_temoignages_table', 11),
(16, '2023_08_10_074344_add_description_to_temoignages', 12),
(17, '2023_08_10_082256_create_contacts_table', 13),
(18, '2023_08_10_123702_create_organisations_table', 14),
(19, '2023_08_11_141451_create_subscibers_table', 15),
(20, '2024_04_26_164036_create_partenaires_table', 16),
(21, '2024_06_10_155519_create_galeries_table', 17);

-- --------------------------------------------------------

--
-- Structure de la table `organisations`
--

CREATE TABLE `organisations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `organisations`
--

INSERT INTO `organisations` (`id`, `name`, `slogan`, `logo`, `adress`, `phone`, `email`, `facebook`, `twitter`, `youtube`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'COOPABU', 'Devenir une entreprise agricole de référence pour le développement du monde rural  en modernisant leur secteur : agriculture, élevage,  pêche, agroforest.', '1715941882.jpg', 'Av. Bumba,  village Malinde,  Groupement de Basimukuma sud, secteur de MUTAMBALA en territoire de Fizi en RDC.', '243978267048', 'coopabubumba@gmail.com', 'https://facebook.com', NULL, NULL, NULL, NULL, '2023-08-10 17:29:42', '2024-06-10 18:17:58');

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` bigint UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1718049121.png', '2024-06-10 10:41:00', '2024-06-10 17:52:01'),
(2, '1718048881.png', '2024-06-10 10:43:39', '2024-06-10 17:48:01'),
(4, '1718049143.png', '2024-06-10 10:48:43', '2024-06-10 17:52:23'),
(5, '1718049164.png', '2024-06-10 10:48:52', '2024-06-10 17:52:44');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Membres du CA de la COOPABU', 'membres-du-ca-de-la-coopabu', 'Membres du CA de la COOPABU', '1715942562.jpg', 2, '2023-08-04 11:23:55', '2024-05-17 08:53:08'),
(3, 'COOPABU (Zéro Faim et Zéro Pauvrété)', 'coopabu-zero-faim-et-zero-pauvrete', 'COOPABU (Zéro Faim et Zéro Pauvrété)', '1715942598.jpg', 1, '2023-08-04 13:17:25', '2024-05-17 08:54:09'),
(4, 'Fourniture de semences vivières', 'fourniture-de-semences-vivieres', 'Fourniture de semences vivières (Mais, Arachides, Haricot, Riz, ...)', '1715942504.jpg', 2, '2023-08-04 13:19:16', '2024-05-17 08:56:42'),
(5, 'Évaluation des tubercules de manioc par le tricycle de la COOPABU, Tricycle subvention du PICAGL', 'evaluation-des-tubercules-de-manioc-par-le-tricycle-de-la-coopabu-tricycle-subvention-du-picagl', '<p>Évaluation des tubercules de manioc par le tricycle de la COOPABU, Tricycle subvention du PICAGL</p><p><br></p>\r\n\r\n<iframe width=\"914\" height=\"514\" src=\"https://www.youtube.com/embed/Agtd_ycfcNI\" title=\"Évaluation des tubercules de manioc par le tricycle de la COOPABU, Tricycle subvention du PICAGL.\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen=\"\"></iframe>', '1715942739.jpg', 1, '2024-05-08 03:44:07', '2024-06-10 18:05:00');

-- --------------------------------------------------------

--
-- Structure de la table `reasons`
--

CREATE TABLE `reasons` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_full` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reasons`
--

INSERT INTO `reasons` (`id`, `title`, `description`, `text1`, `img1`, `text2`, `img2`, `text3`, `img3`, `text4`, `img4`, `image_full`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Pourquoi nous choisir ?', 'En choisissant COOPABU, vous optez pour un partenaire crédible et intègre', 'Nous avons une expérience éprouvée dans le secteur agricole', 'fab fa-product-hunt', 'Nous sommes engagés à fournir des services de qualité à nos bénéficiaires', 'fab fa-accusoft', 'Nous avons un impact positif sur les communautés que nous servons', 'fab fa-fonticons-fi', 'Nous sommes une organisation responsable et transparente', 'far fa-money-bill-alt', '17159420071.jpg', 0, '2023-08-03 20:19:54', '2024-06-06 05:41:57');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Prêts à la création d\'entreprise', 'prets-a-la-creation-dentreprise', 'Accédez à des financements abordables pour concrétiser vos rêves entrepreneuriaux des services professionnels à temps réel.', 'fas fa-ankh', '2023-08-04 07:51:36', '2024-06-06 05:51:59'),
(2, 'Micro-crédits pour particuliers', 'micro-credits-pour-particuliers', 'Financez vos projets personnels ou familiaux grâce à nos micro-crédits à des taux d\'intérêt compétitifs. Que vous ayez besoin d\'argent pour faire vivre votre projet agricole.', 'fab fa-accessible-icon', '2023-08-04 07:52:34', '2024-06-06 05:50:19'),
(3, 'Compte mutuels agricole local (MAL)', 'compte-mutuels-agricole-local-mal', 'Sécurisez votre argent et fructifiez votre épargne grâce à nos comptes mutuels agricole local', 'fas fa-anchor', '2023-08-04 07:52:58', '2024-06-06 05:55:27'),
(4, 'Services de transfert des produits agricoles', 'services-de-transfert-des-produits-agricoles', 'Système d\'information et de transfert des produits agricoles. Envoyez et recevez des produits agricoles avec notre service de transfert de manière simple, sécurisée et économique', 'fas fa-car', '2023-08-04 07:53:28', '2024-06-06 05:58:20'),
(5, 'Assurances', 'assurances', 'Protégez vos biens, votre famille et votre activité contre les imprévus grâce à nos contrats d\'assurance adaptés aux besoins des entrepreneurs et des particuliers', 'fas fa-money-check', '2023-08-04 07:53:52', '2024-05-06 15:36:44'),
(6, 'Formations en gestion financière, entrepreneuriale et agricole', 'formations-en-gestion-financiere-entrepreneuriale-et-agricole', 'Renforcez vos compétences et développez vos connaissances en gestion financière, entrepreneuriale et agricole grâce à nos formations complètes et dispensées par des experts qualifiés', 'fas fa-procedures', '2023-08-04 07:54:29', '2024-06-06 05:59:50');

-- --------------------------------------------------------

--
-- Structure de la table `slides`
--

CREATE TABLE `slides` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Membres du Staff Technique de la COOPABU', 'Les membres du Staff Technique de la Coopérative Agricole de Bumba (COOPABU)', '1715942184.jpg', '2023-07-28 23:13:31', '2024-06-06 05:23:02'),
(2, 'COOPABU Zéro Faim et Pauvrété', 'COOPABU s\'engage à lutter contre la famine et la pauvrété', '1715942214.jpg', '2023-07-28 23:17:16', '2024-05-17 09:00:08'),
(8, 'Nouveau Bureau de la COOPABU', 'Nouveau Bureau de la COOPABU construit à Malinde avec appui du PICAGEL 2020', '1715942254.jpg', '2023-08-13 23:06:39', '2024-05-17 09:01:29');

-- --------------------------------------------------------

--
-- Structure de la table `subscibers`
--

CREATE TABLE `subscibers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subscibers`
--

INSERT INTO `subscibers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', '2023-08-11 13:38:39', '2023-08-11 13:38:39'),
(2, 'yves@gmail.com', '2023-08-13 10:33:00', '2023-08-13 10:33:00'),
(3, 'test@gmail.com', '2024-06-06 06:13:24', '2024-06-06 06:13:24');

-- --------------------------------------------------------

--
-- Structure de la table `successes`
--

CREATE TABLE `successes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count1` int DEFAULT NULL,
  `text2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count2` int DEFAULT NULL,
  `text3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count3` int DEFAULT NULL,
  `text4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count4` int DEFAULT NULL,
  `img1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `successes`
--

INSERT INTO `successes` (`id`, `title`, `description`, `text1`, `count1`, `text2`, `count2`, `text3`, `count3`, `text4`, `count4`, `img1`, `img2`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Impact Social et Communautaire', 'Découvrez comment notre organisation crée un impact social et communautaire positif en autonomisant les individus et en favorisant le développement économique dans les communautés à faible revenu.', 'Bénéficiaires', 10000, 'Semence octroyées', 5000000, 'Warrantage', 80, 'Taux Augmentation Revenus des Ménages', 20, '17159420761.jpg', '17159420802.jpg', 0, '2023-08-03 16:29:32', '2024-06-06 05:39:38');

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teams`
--

INSERT INTO `teams` (`id`, `name`, `role`, `image`, `created_at`, `updated_at`) VALUES
(1, 'M\'UNDABATU KASUKULU Dalton', 'V/P  et chargé des projets agricoles et lutte contre le changement climatique', '1718007477.jpg', '2023-08-08 22:47:40', '2024-06-10 06:17:58'),
(6, 'ASSUKULU MWASSA François', 'délégué de la COOPABU Malinde dans la ville de Bukavu', '1718008590.jpg', '2024-06-10 06:19:21', '2024-06-10 06:36:30'),
(7, 'ILOKO ABALE Abale innocent', 'Chargé des infrastructures', '1718008724.jpg', '2024-06-10 06:38:44', '2024-06-10 06:38:44'),
(8, 'BYAOMBE ESSE DIDIER', 'Chargé de Manioc', '1718008797.jpg', '2024-06-10 06:39:57', '2024-06-10 06:39:57'),
(9, 'NJAY SAMBA', 'Délégué de la COOPABU au Burundi', '1718008832.jpg', '2024-06-10 06:40:32', '2024-06-10 06:40:32'),
(10, 'MWASITI MWASSA Justine', 'Gérante', '1718008858.jpg', '2024-06-10 06:40:58', '2024-06-10 06:40:58'),
(11, 'SHUKURANI ÉTIENNE ANNE MARIE', 'Déléguée de la COOPABU Malinde dans le territoire et Ville d\'Uvira', '1718009146.jpg', '2024-06-10 06:41:38', '2024-06-10 06:45:46'),
(12, 'IBUCWA KASUKULU Benjamin', 'Secrétaire Exécutif', '1718009206.jpg', '2024-06-10 06:46:46', '2024-06-10 06:46:46'),
(13, 'ALI KILOZO Léonard', 'Président du CA', '1718009235.jpg', '2024-06-10 06:47:15', '2024-06-10 06:47:15'),
(14, 'KIZA SALEHE Girafe', 'Chargé du Riz et Approche Smartvally', '1718009562.jpg', '2024-06-10 06:47:50', '2024-06-10 06:52:42'),
(15, 'MAALE WILONJA', 'Chargé de Biofertilisant et Biopesticide', '1718009307.jpg', '2024-06-10 06:48:27', '2024-06-10 06:48:27'),
(16, 'KABIKA BUNDUKI', 'Mobilisateur communautaire', '1718009332.jpg', '2024-06-10 06:48:52', '2024-06-10 14:41:53'),
(17, 'BAELE K Charlotte', 'Chargée de la Coupe et Couture à la COOPABU', '1718009700.jpg', '2024-06-10 06:49:30', '2024-06-10 06:55:01'),
(18, 'AOCI  KITAMBALA ALUBA. NATHAN', 'Chargé de l\'éducation professionnelle', '1718009427.jpg', '2024-06-10 06:50:27', '2024-06-10 06:50:27');

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

CREATE TABLE `temoignages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `temoignages`
--

INSERT INTO `temoignages` (`id`, `name`, `title`, `image`, `created_at`, `updated_at`, `description`) VALUES
(5, 'Mama Safi', 'Agriculteur', '1715944090.jpg', '2024-05-17 09:08:10', '2024-05-17 09:08:10', 'Merci beaucoup à COOPABU pour leur soutien de mon champ des arachides'),
(6, 'Mama Kika', 'Eleveur', '1715944163.jpg', '2024-05-17 09:09:23', '2024-05-17 09:50:55', 'Merci beaucoup à COOPABU pour leur soutien de mon poulailler');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$dTIcfdr3HByZwecFCA7MC.xamjoBPCfwi8Ju7SyaPSMVyrMTtpe9W', NULL, '2023-07-28 14:50:49', '2023-07-28 14:50:49', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `organisations`
--
ALTER TABLE `organisations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Index pour la table `reasons`
--
ALTER TABLE `reasons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Index pour la table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subscibers`
--
ALTER TABLE `subscibers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `successes`
--
ALTER TABLE `successes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoignages`
--
ALTER TABLE `temoignages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `organisations`
--
ALTER TABLE `organisations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `reasons`
--
ALTER TABLE `reasons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `subscibers`
--
ALTER TABLE `subscibers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `successes`
--
ALTER TABLE `successes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `temoignages`
--
ALTER TABLE `temoignages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
