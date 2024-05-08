-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 08 mai 2024 à 10:18
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `abouts`
--

INSERT INTO `abouts` (`id`, `telephone`, `annee_experience`, `title`, `short_description`, `text1`, `img1`, `text2`, `img2`, `full_description`, `about_img`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><span style=\"font-weight: bolder;\">Email</span><br><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>info@grincodrc.com<br><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>sales@grincodrc.com</p><p style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><span class=\"fa fa-phone-alt me-2\" style=\"margin-right: 0.5rem !important;\"></span><span style=\"font-weight: bolder;\">Appel</span><br><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>+243990485866<br><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>+243812897965<br></p><p style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\"><i class=\"bi bi-whatsapp me-2\" style=\"margin-right: 0.5rem !important;\"></i><span style=\"font-weight: bolder;\">Whatsapp</span><br><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>+243990485866<br><span class=\"fa fa-angle-right me-2\" style=\"margin-right: 0.5rem !important;\"></span>+8613241687801</p>', '10', 'votre partenaire financier pour la croissance et le développement', 'Nous aspirons à créer un monde où chaque individu a les moyens de réaliser son plein potentiel économique.', 'Donner du pouvoir aux entrepreneurs', 'fas fa-wheelchair', 'Promouvoir la création d\'emplois', 'fas fa-hospital-alt', 'Nous sommes une organisation de microfinance de premier plan qui fournit des services financiers abordables et adaptés aux entrepreneurs et aux familles à faibles revenus. Nous sommes présents dans X pays et avons servi plus de 20 000 clients.', '1715015878.jpg', '2023-07-30 12:46:45', '2024-05-06 15:19:21');

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
(1, 'Deo', 'deo@gmail.com', 'Test Obj', 'Message', '2023-08-10 07:47:16', '2023-08-10 07:47:16'),
(2, 'Jon Doe', 'john@gmail.com', 'Contact', 'Message', '2023-08-10 08:08:11', '2023-08-10 08:08:11'),
(3, 'Christelle', 'chris@gmail.com', 'Demande Patenariat', 'Messag de demande de partenariat', '2023-08-10 11:14:49', '2023-08-10 11:14:49'),
(4, 'Deo', 'deo@gmail.com', 'Test Obj', 'Message', '2023-08-10 07:47:16', '2023-08-10 07:47:16'),
(5, 'Jon Doe', 'john@gmail.com', 'Contact', 'Message', '2023-08-10 08:08:11', '2023-08-10 08:08:11'),
(6, 'Christelle', 'chris@gmail.com', 'Demande Patenariat', 'Messag de demande de partenariat', '2023-08-12 11:14:49', '2023-08-10 11:14:49');

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
(19, '2023_08_11_141451_create_subscibers_table', 15);

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
(1, 'GRINCO', 'Votre partenaire de confiance pour la microfinance et le développement communautaire', '1691933373.png', '123 Street, New York, USA', '243978333654', 'info@example.com', 'https://facebook.com', NULL, NULL, NULL, NULL, '2023-08-10 17:29:42', '2024-05-08 06:14:58');

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
(2, 'Microcrédit pour Entrepreneurs', 'microcredit-pour-entrepreneurs', 'Notre programme de microcrédit offre un soutien financier aux entrepreneurs à faible revenu pour démarrer ou développer leurs entreprises. Découvrez comment nous aidons les visionnaires à transformer leurs idées en réalité.', '1715160689.jpg', 2, '2023-08-04 11:23:55', '2024-05-08 07:33:13'),
(3, 'Épargne Responsable', 'epargne-responsable', 'Encouragez une culture d\'épargne responsable avec notre programme d\'épargne flexible. Découvrez comment nos options d\'épargne sécurisées aident nos clients à planifier pour l\'avenir et à construire une base financière solide.', '1715153973.jpg', 1, '2023-08-04 13:17:25', '2024-05-08 07:33:57'),
(4, 'Services de Paiement Accessibles', 'services-de-paiement-accessibles', 'Simplifiez les transactions financières avec nos services de paiement pratiques et abordables. Explorez nos solutions de paiement innovantes qui facilitent les échanges monétaires pour nos clients, où qu\'ils se trouvent.', '1715160553.jpg', 2, '2023-08-04 13:19:16', '2024-05-08 07:34:35'),
(5, 'Formation et Accompagnement', 'formation-et-accompagnement', 'Au-delà des services financiers, nous offrons des programmes de formation et d\'accompagnement pour renforcer les compétences entrepreneuriales et financières de nos clients. Découvrez comment nous investissons dans le développement personnel et professionnel de ceux que nous servons.', '1715153801.jpg', 1, '2024-05-08 03:44:07', '2024-05-08 07:35:20'),
(6, 'Sensibilisation Communautaire', 'sensibilisation-communautaire', '<p>Engagez-vous avec notre initiative de sensibilisation communautaire, où nous organisons des événements et des ateliers pour éduquer et inspirer les membres de la communauté sur les sujets liés à la finance et à l\'entrepreneuriat. Découvrez comment nous renforçons les liens au sein des communautés que nous servons.<br></p>', '1715161817.jpg', 1, '2024-05-08 07:50:17', '2024-05-08 07:50:17'),
(7, 'Partenariats Stratégiques', 'partenariats-strategiques', '<p>&nbsp;Collaborer avec d\'autres acteurs clés dans le domaine du développement pour maximiser notre impact. Découvrez comment nos partenariats stratégiques nous permettent d\'étendre notre portée et d\'offrir des solutions financières novatrices à un public plus large.<br></p>', '1715161890.jpg', 2, '2024-05-08 07:51:30', '2024-05-08 07:51:30'),
(8, 'Suivi et Évaluation', 'suivi-et-evaluation', '<p>Nous nous engageons à évaluer constamment l\'efficacité de nos programmes et à apporter des améliorations continues. Découvrez comment notre processus de suivi et d\'évaluation garantit que nous répondons aux besoins changeants de nos clients et des communautés que nous servons.<br></p>', '1715163305.jpg', 2, '2024-05-08 08:15:05', '2024-05-08 08:15:05');

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
(1, 'Pourquoi nous choisir ?', 'En choisissant notre organisation de microfinance, vous optez pour un partenaire financier qui va au-delà des simples transactions pour créer un réel impact positif dans la vie des individus et des communautés', 'Nous avons une expérience éprouvée dans le secteur de la microfinance', 'fab fa-product-hunt', 'Nous sommes engagés à fournir des services de qualité à nos clients', 'fab fa-accusoft', 'Nous avons un impact positif sur les communautés que nous servons', 'fab fa-fonticons-fi', 'Nous sommes une organisation responsable et transparente', 'far fa-money-bill-alt', '17151603271.jpg', 0, '2023-08-03 20:19:54', '2024-05-08 07:25:27');

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
(1, 'Prêts à la création d\'entreprise', 'prets-a-la-creation-dentreprise', 'Accédez à des financements abordables pour concrétiser vos rêves entrepreneuriaux. Nos prêts à la création d\'entreprise s\'adaptent à vos besoins spécifiques, vous permettant de démarrer ou de développer votre activité', 'fas fa-ankh', '2023-08-04 07:51:36', '2024-05-06 15:34:24'),
(2, 'Micro-crédits pour particuliers', 'micro-credits-pour-particuliers', 'Financez vos projets personnels ou familiaux grâce à nos micro-crédits à des taux d\'intérêt compétitifs. Que vous ayez besoin d\'argent pour rénover votre maison, acheter du matériel ou faire face à des dépenses imprévues, nos solutions de micro-crédit vous soutiennent', 'fab fa-accessible-icon', '2023-08-04 07:52:34', '2024-05-06 15:34:59'),
(3, 'Comptes d\'épargne et de dépôt', 'comptes-depargne-et-de-depot', 'Sécurisez votre argent et fructifiez votre épargne grâce à nos comptes d\'épargne et de dépôt. Nous vous proposons une gamme de produits adaptés à vos besoins et à vos objectifs financiers', 'fas fa-anchor', '2023-08-04 07:52:58', '2024-05-06 15:35:31'),
(4, 'Services de transfert d\'argent', 'services-de-transfert-dargent', 'Envoyez et recevez de l\'argent de manière simple, sécurisée et économique avec nos services de transfert d\'argent. Restez connectés avec vos proches, où qu\'ils soient dans le monde', 'fas fa-car', '2023-08-04 07:53:28', '2024-05-06 15:36:06'),
(5, 'Assurances', 'assurances', 'Protégez vos biens, votre famille et votre activité contre les imprévus grâce à nos contrats d\'assurance adaptés aux besoins des entrepreneurs et des particuliers', 'fas fa-money-check', '2023-08-04 07:53:52', '2024-05-06 15:36:44'),
(6, 'Formations en gestion financière et entrepreneuriale', 'formations-en-gestion-financiere-et-entrepreneuriale', 'Renforcez vos compétences et développez vos connaissances en gestion financière et entrepreneuriale grâce à nos formations complètes et dispensées par des experts qualifiés', 'fas fa-procedures', '2023-08-04 07:54:29', '2024-05-06 15:37:18');

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
(1, 'Notre Mission et Nos Valeurs', 'Explorez notre mission de fournir un accès équitable aux services financiers et nos valeurs d\'inclusion, de responsabilité et d\'innovation qui guident chacune de nos actions.', '1690589610.jpg', '2023-07-28 23:13:31', '2024-05-08 06:26:28'),
(2, 'Nos Produits et Services', 'Découvrez notre gamme de produits et services, y compris des options de microcrédit, d\'épargne et de services de paiement, conçues pour répondre aux besoins financiers variés de nos clients.', '1690589836.jpg', '2023-07-28 23:17:16', '2024-05-08 06:27:35'),
(8, 'Processus de Prêt Simplifié', 'Apprenez-en davantage sur notre processus de prêt transparent et équitable, de l\'éligibilité à la demande jusqu\'au désengagement, pour vous aider à obtenir le soutien financier dont vous avez besoin.', '1691971598.jpg', '2023-08-13 23:06:39', '2024-05-08 06:28:48');

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
(2, 'yves@gmail.com', '2023-08-13 10:33:00', '2023-08-13 10:33:00');

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
(1, 'Impact Social et Communautaire', 'Découvrez comment notre organisation crée un impact social et communautaire positif en autonomisant les individus et en favorisant le développement économique dans les communautés à faible revenu.', 'Entrepreneurs Autonomisés', 10000, 'Prêts Déboursés', 5000000, 'Taux de Remboursement', 80, 'Taux Augmentation Revenus des Ménages', 30, '17151599211.jpg', '17151600612.jpg', 0, '2023-08-03 16:29:32', '2024-05-08 07:21:02');

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
(1, 'Full Name', 'Designation', '1691538459.jpg', '2023-08-08 22:47:40', '2023-08-08 22:47:40'),
(2, 'Full Name', 'Designation', '1691538525.jpg', '2023-08-08 22:48:45', '2023-08-08 22:48:45'),
(4, 'Full Name', 'Designation', '1691538561.jpg', '2023-08-08 22:49:21', '2023-08-08 22:49:21'),
(5, 'Full Name', 'CEO', '1715017377.jpg', '2024-05-06 15:42:57', '2024-05-06 15:42:57');

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
(1, 'Blade', 'CEO Ict', '1691652410.jpg', '2023-08-10 06:26:50', '2023-08-10 06:26:50', 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.'),
(2, 'Joe Do', 'IT Manager', '1691652436.jpg', '2023-08-10 06:27:16', '2023-08-10 06:27:16', 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.'),
(3, 'Bertille', 'Docter', '1691652457.jpg', '2023-08-10 06:27:37', '2023-08-10 06:27:37', 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.'),
(4, 'Matiaba', 'CEO Bralima', '1691654142.jpg', '2023-08-10 06:55:42', '2023-08-10 06:55:42', 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `organisations`
--
ALTER TABLE `organisations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `successes`
--
ALTER TABLE `successes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `temoignages`
--
ALTER TABLE `temoignages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
