-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2025 at 08:24 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `mobile`, `password`, `role`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'superAdmin', 'admin@astrocures.com', '0787276821', '$2y$10$mDSP6hzSfT3Yt8c05WLhNeIwQWMylpa/8kuqlrRfbSueJwpvmjete', 'Super Admin', '2025-03-06 00:28:00', '2025-03-06 01:29:44', 0),
(2, 'Laith', 'laith@astrocures.com', '0787276822', '$2y$10$0XyRJ/GL37bsF2YMwCyDFe3q4tDHlTlkv06YcmK4a09x6gvxWYN3K', 'Admin', '2025-03-06 10:08:00', '2025-03-06 11:14:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`) VALUES
(1, 6, '2025-03-07 12:35:05'),
(2, 1, '2025-03-07 13:57:10'),
(3, 7, '2025-03-07 15:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE IF NOT EXISTS `cart_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `cart_id` (`cart_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `cart_id`, `product_id`, `quantity`) VALUES
(44, 1, 5, 2),
(45, 1, 1, 7),
(11, 2, 93, 1),
(12, 2, 1, 2),
(13, 2, 2, 12),
(14, 2, 5, 8),
(15, 2, 6, 1),
(16, 2, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'Physical Enhancements', '2025-03-01 18:12:30', '2025-03-01 18:12:30', 0),
(2, 'Elemental Control', '2025-03-01 18:12:30', '2025-03-01 18:12:30', 0),
(3, 'Mental and Psychic Abilities', '2025-03-01 18:12:30', '2025-03-01 18:12:30', 0),
(4, 'Transformation and Shapeshifting', '2025-03-01 18:12:30', '2025-03-01 18:12:30', 0),
(5, 'Dimensional and Spatial Manipulation', '2025-03-01 18:12:30', '2025-03-01 18:12:30', 0),
(6, 'Biological and Healing Powers', '2025-03-01 18:12:30', '2025-03-01 18:12:30', 0),
(7, 'Stealth and Invisibility', '2025-03-01 18:12:30', '2025-03-01 18:12:30', 0),
(8, 'Animal and Nature-Based Powers', '2025-03-01 18:12:30', '2025-03-01 18:12:30', 0),
(9, 'Memory and Knowledge-Based Powers', '2025-03-01 18:12:30', '2025-03-01 18:12:30', 0),
(10, 'Childhood Dreams', '2025-03-05 22:59:15', '2025-03-05 22:59:33', 1),
(11, 'osama', '2025-03-05 23:01:29', '2025-03-05 23:01:29', 0),
(12, 'Childhood Dreams', '2025-03-05 23:05:08', '2025-03-05 23:05:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `status` enum('pending','processing','shipped','delivered','canceled') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  `total_price` decimal(10,2) NOT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shipping_address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total_price`, `order_date`, `shipping_address`, `created_at`, `updated_at`) VALUES
(18, 6, 'canceled', 1051.00, '2025-03-07 22:53:14', 'milkyway | Mafraq | 11353', '2025-03-07 22:53:14', '2025-03-09 20:22:20'),
(17, 6, 'processing', 790.00, '2025-03-07 22:52:54', 'milkyway | Mafraq | 11353', '2025-03-07 22:52:54', '2025-03-07 23:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`) VALUES
(10, 18, 6, 1, 130.00, '2025-03-07 22:53:14'),
(9, 17, 1, 1, 100.00, '2025-03-07 22:52:54'),
(8, 17, 2, 1, 150.00, '2025-03-07 22:52:54'),
(11, 18, 11, 1, 125.00, '2025-03-07 22:53:14'),
(12, 18, 7, 2, 110.00, '2025-03-07 22:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,0) NOT NULL,
  `image_url` text,
  `stock` int DEFAULT '0',
  `category_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` tinyint(1) DEFAULT '0',
  `duration` int DEFAULT NULL,
  `power_level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image_url`, `stock`, `category_id`, `created_at`, `updated_at`, `deleted`, `duration`, `power_level`) VALUES
(1, 'Apex Force', 'Enhances physical strength, allowing the user to lift massive objects and perform extraordinary feats of power.', 100, 'apex_force.jpg', 7, 1, '2025-03-01 15:19:02', '2025-03-01 17:03:25', 0, 2, 'medium'),
(2, 'Sonic Dash', 'Grants the ability to move at supersonic speeds, making reactions and dodging nearly instantaneous.', 150, 'sonic_dash.jpg', 12, 1, '2025-03-01 15:19:02', '2025-03-01 17:03:25', 0, 3, 'low'),
(3, 'Titan Guard', 'Endows the body with impenetrable skin, reducing damage from physical and energy-based attacks.', 90, 'titan_guard.jpg', 6, 1, '2025-03-01 15:19:02', '2025-03-01 17:03:25', 0, 4, 'high'),
(4, 'Lightning Surge', 'Electrifies the body with raw lightning, enhancing speed and reflexes beyond normal limits.', 150, 'lightning_surge.jpg', 1, 1, '2025-03-01 15:19:02', '2025-03-01 17:03:25', 0, 5, 'medium'),
(5, 'Gravity Gauntlet', 'Allows the user to manipulate gravitational forces, increasing agility and strength.', 120, 'gravity_gauntlet.jpg', 8, 1, '2025-03-01 15:19:02', '2025-03-01 17:03:25', 0, 6, 'low'),
(6, 'Iron Fist', 'Hardens the user’s fists to the strength of steel, allowing for devastating punches.', 130, 'iron_fist.jpg', 10, 1, '2025-03-01 15:19:02', '2025-03-01 17:03:25', 0, 7, 'high'),
(7, 'Colossus Endurance', 'Greatly enhances stamina and durability, reducing fatigue and increasing endurance.', 110, 'colossus_endurance.jpg', 5, 1, '2025-03-01 15:19:02', '2025-03-01 17:03:25', 0, 8, 'medium'),
(8, 'Velocity Boost', 'Enhances overall acceleration and agility, improving reaction speed and reflexes.', 140, 'velocity_boost.jpg', 11, 1, '2025-03-01 15:19:02', '2025-03-01 17:03:25', 0, 9, 'low'),
(9, 'Berserker Mode', 'Temporarily enhances physical capabilities beyond normal limits, but at a cost of energy depletion.', 135, 'berserker_mode.jpg', 4, 1, '2025-03-01 15:19:02', '2025-03-01 17:03:25', 0, 1, 'high'),
(10, 'Unbreakable Shield', 'Generates a protective force field around the user, absorbing incoming attacks.', 145, 'unbreakable_shield.jpg', 6, 1, '2025-03-01 15:19:02', '2025-03-01 17:03:25', 0, 2, 'medium'),
(11, 'Inferno Mastery', 'Grants complete control over fire, allowing the user to generate and manipulate flames at will.', 125, 'inferno_mastery.jpg', 10, 2, '2025-03-01 15:21:59', '2025-03-01 17:03:25', 0, 3, 'low'),
(12, 'Tsunami Command', 'Empowers the user to manipulate water, shaping waves and even walking on its surface.', 130, 'tsunami_command.jpg', 14, 2, '2025-03-01 15:21:59', '2025-03-01 17:03:25', 0, 4, 'high'),
(13, 'Terra Titan', 'Provides mastery over earth, enabling the user to create walls, earthquakes, and manipulate terrain.', 110, 'terra_titan.jpg', 8, 2, '2025-03-01 15:21:59', '2025-03-01 17:03:25', 0, 5, 'medium'),
(14, 'Storm Caller', 'Allows the user to summon powerful gusts of wind and control air currents for flight or defense.', 140, 'storm_caller.jpg', 6, 2, '2025-03-01 15:21:59', '2025-03-01 17:03:25', 0, 6, 'low'),
(15, 'Glacier Grip', 'Enables control over ice and snow, freezing objects and enemies on command.', 125, 'glacier_grip.jpg', 9, 2, '2025-03-01 15:21:59', '2025-03-01 17:03:25', 0, 7, 'high'),
(16, 'Thunder Charge', 'Empowers the user with raw electrical energy, allowing lightning manipulation and shockwave attacks.', 150, 'thunder_charge.jpg', 7, 2, '2025-03-01 15:21:59', '2025-03-01 17:03:25', 0, 8, 'medium'),
(17, 'Plasma Storm', 'Grants the ability to harness plasma energy, creating powerful blasts of superheated energy.', 160, 'plasma_storm.jpg', 5, 2, '2025-03-01 15:21:59', '2025-03-01 17:03:25', 0, 9, 'low'),
(18, 'Volcanic Wrath', 'Bestows control over molten lava, allowing the user to generate and manipulate intense heat.', 155, 'volcanic_wrath.jpg', 12, 2, '2025-03-01 15:21:59', '2025-03-01 17:03:25', 0, 1, 'high'),
(19, 'Aether Flow', 'Manipulates cosmic energy, enabling the user to enhance attacks with celestial power.', 135, 'aether_flow.jpg', 11, 2, '2025-03-01 15:21:59', '2025-03-01 17:03:25', 0, 2, 'medium'),
(20, 'Galeforce Cyclone', 'Grants mastery over extreme wind forces, creating powerful cyclones and controlling air pressure.', 145, 'galeforce_cyclone.jpg', 8, 2, '2025-03-01 15:21:59', '2025-03-01 17:03:25', 0, 3, 'low'),
(21, 'Mind Whisper', 'Grants the ability to read minds and communicate telepathically over long distances.', 170, 'mind_whisper.jpg', 13, 3, '2025-03-01 15:23:19', '2025-03-01 17:03:25', 0, 4, 'high'),
(22, 'Telekinetic Surge', 'Empowers the user to move and manipulate objects with sheer mental focus.', 180, 'telekinetic_surge.jpg', 9, 3, '2025-03-01 15:23:19', '2025-03-01 17:03:25', 0, 5, 'medium'),
(23, 'Mind Control Mastery', 'Allows the user to influence or control the thoughts and actions of others.', 200, 'mind_control_mastery.jpg', 7, 3, '2025-03-01 15:23:19', '2025-03-01 17:03:25', 0, 6, 'low'),
(24, 'Illusionist\'s Veil', 'Enables the user to create false perceptions or hallucinations, bending reality.', 160, 'illusionists_veil.jpg', 6, 3, '2025-03-01 15:23:19', '2025-03-01 17:03:25', 0, 7, 'high'),
(25, 'Emotion Tuner', 'Grants control over emotions, enabling the user to induce fear, joy, or tranquility.', 145, 'emotion_tuner.jpg', 10, 3, '2025-03-01 15:23:19', '2025-03-01 17:03:25', 0, 8, 'medium'),
(26, 'Cognitive Expansion', 'Enhances intelligence, memory, and problem-solving abilities to superhuman levels.', 190, 'cognitive_expansion.jpg', 8, 3, '2025-03-01 15:23:19', '2025-03-01 17:03:25', 0, 9, 'low'),
(27, 'Astral Projection', 'Allows the user to separate their consciousness from their physical body and travel freely.', 195, 'astral_projection.jpg', 7, 3, '2025-03-01 15:23:19', '2025-03-01 17:03:25', 0, 1, 'high'),
(28, 'Precognition Boost', 'Gives the ability to foresee future events and react accordingly.', 210, 'precognition_boost.jpg', 9, 3, '2025-03-01 15:23:19', '2025-03-01 17:03:25', 0, 2, 'medium'),
(29, 'Psywave Pulse', 'Emits powerful psychic waves that disrupt enemy concentration and weaken their attacks.', 175, 'psywave_pulse.jpg', 5, 3, '2025-03-01 15:23:19', '2025-03-01 17:03:25', 0, 3, 'low'),
(30, 'Neural Link', 'Establishes a direct neural connection between the user and other beings for seamless communication.', 185, 'neural_link.jpg', 6, 3, '2025-03-01 15:23:19', '2025-03-01 17:03:25', 0, 4, 'high'),
(31, 'Mimic Mastery', 'Allows the user to perfectly mimic the appearance and voice of another being.', 200, 'mimic_mastery.jpg', 8, 4, '2025-03-01 15:25:27', '2025-03-01 17:03:25', 0, 5, 'medium'),
(32, 'Gigantify', 'Grants the ability to grow in size, towering over enemies and gaining immense strength.', 210, 'gigantify.jpg', 7, 4, '2025-03-01 15:25:27', '2025-03-01 17:03:25', 0, 6, 'low'),
(33, 'Liquid Morph', 'Enables the transformation into a liquid state, allowing the user to slip through tight spaces.', 190, 'liquid_morph.jpg', 6, 4, '2025-03-01 15:25:27', '2025-03-01 17:03:25', 0, 7, 'high'),
(34, 'Gaseous Drift', 'Permits the user to transform into a gas, making them nearly untouchable.', 195, 'gaseous_drift.jpg', 9, 4, '2025-03-01 15:25:27', '2025-03-01 17:03:25', 0, 8, 'medium'),
(35, 'Elemental Shift', 'Allows transformation into elemental forms such as fire, water, or stone.', 220, 'elemental_shift.jpg', 5, 4, '2025-03-01 15:25:27', '2025-03-01 17:03:25', 0, 9, 'low'),
(36, 'Beast Form', 'Grants the ability to morph into various animal forms, gaining their abilities.', 205, 'beast_form.jpg', 7, 4, '2025-03-01 15:25:27', '2025-03-01 17:03:25', 0, 1, 'high'),
(37, 'Adaptive Skin', 'Enables the user’s body to change texture and density, making it as hard as steel or soft as fabric.', 180, 'adaptive_skin.jpg', 10, 4, '2025-03-01 15:25:27', '2025-03-01 17:03:25', 0, 2, 'medium'),
(38, 'Clone Replication', 'Gives the user the ability to create multiple copies of themselves for a short duration.', 230, 'clone_replication.jpg', 4, 4, '2025-03-01 15:25:27', '2025-03-01 17:03:25', 0, 3, 'low'),
(39, 'Shadow Morph', 'Allows the user to merge with shadows, becoming unseen and intangible.', 215, 'shadow_morph.jpg', 6, 4, '2025-03-01 15:25:27', '2025-03-01 17:03:25', 0, 4, 'high'),
(40, 'Chameleon Cloak', 'Grants perfect camouflage, allowing the user to blend seamlessly into their surroundings.', 195, 'chameleon_cloak.jpg', 9, 4, '2025-03-01 15:25:27', '2025-03-01 17:03:25', 0, 5, 'medium'),
(41, 'Void Walker', 'Grants the ability to step into and travel through pocket dimensions instantly.', 250, 'void_walker.jpg', 6, 5, '2025-03-01 15:26:38', '2025-03-01 17:03:25', 0, 6, 'low'),
(42, 'Warp Drive', 'Allows the user to teleport over long distances, bypassing obstacles and barriers.', 270, 'warp_drive.jpg', 8, 5, '2025-03-01 15:26:38', '2025-03-01 17:03:25', 0, 7, 'high'),
(43, 'Portal Crafter', 'Enables the creation of stable portals for instant travel between two points.', 300, 'portal_crafter.jpg', 5, 5, '2025-03-01 15:26:38', '2025-03-01 17:03:25', 0, 8, 'medium'),
(44, 'Spatial Distortion', 'Manipulates space to stretch, compress, or warp physical locations.', 290, 'spatial_distortion.jpg', 7, 5, '2025-03-01 15:26:38', '2025-03-01 17:03:25', 0, 9, 'low'),
(45, 'Phase Shift', 'Allows the user to phase through solid objects and avoid physical attacks.', 280, 'phase_shift.jpg', 9, 5, '2025-03-01 15:26:38', '2025-03-01 17:03:25', 0, 1, 'high'),
(46, 'Gravity Flux', 'Gives control over gravitational forces, altering weight and trajectory of objects.', 260, 'gravity_flux.jpg', 6, 5, '2025-03-01 15:26:38', '2025-03-01 17:03:25', 0, 2, 'medium'),
(47, 'Time Fracture', 'Creates localized time anomalies that slow or accelerate time in a small area.', 320, 'time_fracture.jpg', 4, 5, '2025-03-01 15:26:38', '2025-03-01 17:03:25', 0, 3, 'low'),
(48, 'Astral Drift', 'Allows the user to leave their body and travel in the astral plane for reconnaissance.', 275, 'astral_drift.jpg', 7, 5, '2025-03-01 15:26:38', '2025-03-01 17:03:25', 0, 4, 'high'),
(49, 'Infinity Loop', 'Creates looping time or space corridors that trap enemies or enhance movement.', 310, 'infinity_loop.jpg', 5, 5, '2025-03-01 15:26:38', '2025-03-01 17:03:25', 0, 5, 'medium'),
(50, 'Cosmic Rift', 'Tears open a rift in space, allowing interdimensional travel or summoning cosmic energy.', 330, 'cosmic_rift.jpg', 3, 5, '2025-03-01 15:26:38', '2025-03-01 17:03:25', 0, 6, 'low'),
(51, 'Regenerative Essence', 'Enhances the body’s healing ability, rapidly repairing injuries and preventing diseases.', 250, 'regenerative_essence.jpg', 7, 6, '2025-03-01 15:27:52', '2025-03-01 17:03:25', 0, 7, 'high'),
(52, 'Cellular Rebirth', 'Triggers complete cellular regeneration, restoring youth and vitality.', 280, 'cellular_rebirth.jpg', 6, 6, '2025-03-01 15:27:52', '2025-03-01 17:03:25', 0, 8, 'medium'),
(53, 'Toxin Purge', 'Eliminates toxins and poisons from the body, rendering the user immune to harmful substances.', 230, 'toxin_purge.jpg', 9, 6, '2025-03-01 15:27:52', '2025-03-01 17:03:25', 0, 9, 'low'),
(54, 'Metabolic Surge', 'Dramatically accelerates metabolism, allowing rapid recovery and energy replenishment.', 270, 'metabolic_surge.jpg', 8, 6, '2025-03-01 15:27:52', '2025-03-01 17:03:25', 0, 1, 'high'),
(55, 'Adaptive Immunity', 'Instantly adapts to new viruses and bacteria, making the user immune to all known diseases.', 290, 'adaptive_immunity.jpg', 5, 6, '2025-03-01 15:27:52', '2025-03-01 17:03:25', 0, 2, 'medium'),
(56, 'Flesh Mend', 'Allows instant mending of wounds, including deep cuts and fractures.', 260, 'flesh_mend.jpg', 7, 6, '2025-03-01 15:27:52', '2025-03-01 17:03:25', 0, 3, 'low'),
(57, 'Longevity Serum', 'Slows down aging significantly, extending the lifespan by centuries.', 320, 'longevity_serum.jpg', 4, 6, '2025-03-01 15:27:52', '2025-03-01 17:03:25', 0, 4, 'high'),
(58, 'Pain Nullifier', 'Completely suppresses pain receptors, making the user immune to physical suffering.', 250, 'pain_nullifier.jpg', 9, 6, '2025-03-01 15:27:52', '2025-03-01 17:03:25', 0, 5, 'medium'),
(59, 'Vital Boost', 'Increases overall vitality, strengthening organs and enhancing physical endurance.', 275, 'vital_boost.jpg', 6, 6, '2025-03-01 15:27:52', '2025-03-01 17:03:25', 0, 6, 'low'),
(60, 'Phoenix Revival', 'Grants the ability to resurrect once after a fatal injury, restoring full health.', 350, 'phoenix_revival.jpg', 3, 6, '2025-03-01 15:27:52', '2025-03-01 17:03:25', 0, 7, 'high'),
(61, 'Shadow Cloak', 'Grants the ability to become completely invisible in shadows or darkness.', 260, 'shadow_cloak.jpg', 8, 7, '2025-03-01 15:28:46', '2025-03-01 17:03:25', 0, 8, 'medium'),
(62, 'Phantom Phase', 'Allows the user to pass through solid objects effortlessly.', 270, 'phantom_phase.jpg', 6, 7, '2025-03-01 15:28:46', '2025-03-01 17:03:25', 0, 9, 'low'),
(63, 'Chameleon Skin', 'Enables the user to blend perfectly into any environment.', 280, 'chameleon_skin.jpg', 7, 7, '2025-03-01 15:28:46', '2025-03-01 17:03:25', 0, 1, 'high'),
(64, 'Silent Step', 'Removes all noise made by the user, allowing for completely silent movement.', 250, 'silent_step.jpg', 9, 7, '2025-03-01 15:28:46', '2025-03-01 17:03:25', 0, 2, 'medium'),
(65, 'Ethereal Drift', 'Turns the user semi-transparent, allowing them to move undetected.', 300, 'ethereal_drift.jpg', 5, 7, '2025-03-01 15:28:46', '2025-03-01 17:03:25', 0, 3, 'low'),
(66, 'Void Presence', 'Erases the user’s presence from all detection methods, including psychic scans.', 320, 'void_presence.jpg', 4, 7, '2025-03-01 15:28:46', '2025-03-01 17:03:25', 0, 4, 'high'),
(67, 'Mirage Illusion', 'Creates multiple illusory copies of the user to distract enemies.', 280, 'mirage_illusion.jpg', 7, 7, '2025-03-01 15:28:46', '2025-03-01 17:03:25', 0, 5, 'medium'),
(68, 'Ghost Veil', 'Allows the user to temporarily fade out of existence, becoming untouchable.', 290, 'ghost_veil.jpg', 6, 7, '2025-03-01 15:28:46', '2025-03-01 17:03:25', 0, 6, 'low'),
(69, 'Spectral Shade', 'Renders the user invisible while also masking their scent and sound.', 275, 'spectral_shade.jpg', 5, 7, '2025-03-01 15:28:46', '2025-03-01 17:03:25', 0, 7, 'high'),
(70, 'Stealth Matrix', 'Creates a personal stealth field that hides the user from all forms of detection.', 310, 'stealth_matrix.jpg', 3, 7, '2025-03-01 15:28:46', '2025-03-01 17:03:25', 0, 8, 'medium'),
(71, 'Beast Whisperer', 'Grants the ability to communicate with and control animals of all kinds.', 270, 'beast_whisperer.jpg', 6, 8, '2025-03-01 15:30:35', '2025-03-01 17:03:25', 0, 9, 'low'),
(72, 'Lycan Form', 'Transforms the user into a powerful wolf-like creature with enhanced senses.', 290, 'lycan_form.jpg', 5, 8, '2025-03-01 15:30:35', '2025-03-01 17:03:25', 0, 1, 'high'),
(73, 'Aqua Kin', 'Enables the user to breathe underwater and command marine life.', 280, 'aqua_kin.jpg', 8, 8, '2025-03-01 15:30:35', '2025-03-01 17:03:25', 0, 2, 'medium'),
(74, 'Sky Sovereign', 'Grants the power of flight and control over avian creatures.', 300, 'sky_sovereign.jpg', 7, 8, '2025-03-01 15:30:35', '2025-03-01 17:03:25', 0, 3, 'low'),
(75, 'Terra Morph', 'Allows the user to fuse with and control plant life and terrain.', 275, 'terra_morph.jpg', 9, 8, '2025-03-01 15:30:35', '2025-03-01 17:03:25', 0, 4, 'high'),
(76, 'Serpent’s Grace', 'Enhances flexibility and agility to match that of a snake, enabling fluid movement.', 260, 'serpents_grace.jpg', 6, 8, '2025-03-01 15:30:35', '2025-03-01 17:03:25', 0, 5, 'medium'),
(77, 'Insectoid Command', 'Grants the ability to summon and control insects for reconnaissance and attacks.', 250, 'insectoid_command.jpg', 10, 8, '2025-03-01 15:30:35', '2025-03-01 17:03:25', 0, 6, 'low'),
(78, 'Titan Strength', 'Imbues the user with the raw strength and endurance of an apex predator.', 320, 'titan_strength.jpg', 4, 8, '2025-03-01 15:30:35', '2025-03-01 17:03:25', 0, 7, 'high'),
(79, 'Pack Instinct', 'Grants heightened awareness and the ability to coordinate perfectly with allies.', 290, 'pack_instinct.jpg', 5, 8, '2025-03-01 15:30:35', '2025-03-01 17:03:25', 0, 8, 'medium'),
(80, 'Nature’s Guardian', 'Allows the user to summon nature’s forces, from vines to storms, in defense.', 310, 'natures_guardian.jpg', 3, 8, '2025-03-01 15:30:35', '2025-03-01 17:03:25', 0, 9, 'low'),
(81, 'Hyper Recall', 'Grants the ability to instantly recall any memory with perfect accuracy.', 270, 'hyper_recall.jpg', 6, 9, '2025-03-01 15:31:35', '2025-03-01 17:03:25', 0, 1, 'high'),
(82, 'Linguistic Genius', 'Enables the user to understand and speak any language fluently.', 290, 'linguistic_genius.jpg', 5, 9, '2025-03-01 15:31:35', '2025-03-01 17:03:25', 0, 2, 'medium'),
(83, 'Strategic Foresight', 'Enhances tactical thinking, allowing the user to predict and counter opponents’ moves.', 280, 'strategic_foresight.jpg', 8, 9, '2025-03-01 15:31:35', '2025-03-01 17:03:25', 0, 3, 'low'),
(84, 'Quantum Cognition', 'Boosts cognitive speed, enabling the user to think and process information at superhuman rates.', 300, 'quantum_cognition.jpg', 7, 9, '2025-03-01 15:31:35', '2025-03-01 17:03:25', 0, 4, 'high'),
(85, 'Photographic Reflexes', 'Gives the ability to instantly replicate any physical action or skill observed.', 275, 'photographic_reflexes.jpg', 9, 9, '2025-03-01 15:31:35', '2025-03-01 17:03:25', 0, 5, 'medium'),
(86, 'Mind Vault', 'Allows the user to store and organize massive amounts of information mentally.', 260, 'mind_vault.jpg', 6, 9, '2025-03-01 15:31:35', '2025-03-01 17:03:25', 0, 6, 'low'),
(87, 'Ancient Knowledge', 'Unlocks knowledge of past civilizations and forgotten wisdom.', 250, 'ancient_knowledge.jpg', 10, 9, '2025-03-01 15:31:35', '2025-03-06 10:41:02', 1, 7, 'high'),
(88, 'Omni Calculation', 'Enables instantaneous complex calculations and problem-solving.', 320, 'omni_calculation.jpg', 4, 9, '2025-03-01 15:31:35', '2025-03-01 17:03:25', 0, 8, 'medium'),
(89, 'Neural Acceleration', 'Boosts learning speed, allowing the user to acquire new skills instantly.', 290, 'neural_acceleration.jpg', 5, 9, '2025-03-01 15:31:35', '2025-03-01 17:03:25', 0, 9, 'low'),
(90, 'Universal Insight', 'Grants deep understanding of universal truths and abstract concepts!.', 310, 'universal_insight.jpg', 3, 9, '2025-03-01 15:31:35', '2025-03-06 07:56:55', 1, 1, 'high'),
(91, 'Forest Force', 'Unleash nature’s primal power for unmatched strength and endurance!.', 150, 'Forest_Force.jpg', 23, 1, '2025-03-05 19:43:04', '2025-03-05 20:28:13', 1, 6, 'medium'),
(92, 'osama', 'layan', 1234, 'img_67ca675330ab90.73671349.jpg', 1, 12, '2025-03-07 03:26:11', '2025-03-07 03:27:08', 1, 20, 'high'),
(93, 'Osama', 'Layan', 1234, 'img_67ca69b81cf7d7.87577202.jpg', 1, 12, '2025-03-07 03:26:44', '2025-03-08 00:42:32', 1, 20, 'high'),
(94, 'Ola', 'Layan', 122, 'img_67cae4e5d06fe2.82147429.jpg', 0, 10, '2025-03-07 12:21:57', '2025-03-08 00:42:30', 1, 24, 'high');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `status` enum('pending','accepted','rejected') COLLATE utf8mb4_general_ci DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `message`, `created_at`, `status`) VALUES
(1, 'Layan Ghassan Alem', 'Great products', '0000-00-00 00:00:00', 'accepted'),
(2, 'Laith Qudah', 'I love Your Products', '0000-00-00 00:00:00', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `date_of_birth`, `password`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'Layan Ghassan Alem', 'Layan@gmail.com', '0787276821', '1998-06-22', '$2y$10$lZYqjr5rE2VaebcshLXTbew9LI8OYFfzkazLS0bUAgSo7rH6qpVZW', '2025-03-07 00:21:55', '2025-03-07 01:31:21', 0),
(2, 'Osama Khazali', 'osama@gmail.com', '0787276822', '1997-05-16', '$2y$10$Ubm3WdWs.Tlb1exgmm4Zm.tiVb1dC5550T7HVp1MzwUDuz34yd5Xq', '2025-03-07 00:25:44', '2025-03-07 00:25:44', 0),
(3, 'Ola Alawi', 'ola@gmail.com', '1234567890', '2001-12-29', '$2y$10$akXGOj4GXR1Cj2NRHy2k9uIyUxefxmdlIfOF7YlVj7gEaBHq6eKyq', '2025-03-07 12:24:25', '2025-03-07 12:24:52', 0),
(4, 'Laith Qudah', 'laith@astrocures.com', '1234567891', '1999-04-14', '$2y$10$GolXyUuMP55lzMBCa8D/Keb2xUANI6RbAOLmtWR9SUxBmj4jlCUsW', '2025-03-07 12:29:28', '2025-03-07 12:29:28', 0),
(5, 'Laith Qudah', 'laith@gmail.com', '1234567896', '1999-04-14', '$2y$10$ju3vgwhdL6z5AfGqHdFqUeuCZkft4K0hDiSQrJgiHd1.Mx4FefszC', '2025-03-07 12:30:33', '2025-03-07 12:30:33', 0),
(6, 'Laith Qudah', 'laith@xxx.com', '1234567899', '1999-04-14', '$2y$10$WqSQgu0lqFjx/J9GB7/oSO6jErdbXZPWlU54wxupOJILnPtwroXeS', '2025-03-07 12:35:05', '2025-03-07 12:35:05', 0),
(7, 'Osama Ali Salem', 'o.a.alkhazali@gmail.com', '0787132582', '2006-06-30', '$2y$10$q/iNVNlrWjj5M4O3S1j10enzXdmT8Nam2YvvWcNZcMhjQ8zg8wRa2', '2025-03-07 15:01:04', '2025-03-07 15:01:04', 0);

--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `after_user_insert_create_cart`;
DELIMITER $$
CREATE TRIGGER `after_user_insert_create_cart` AFTER INSERT ON `users` FOR EACH ROW BEGIN
    INSERT INTO carts (user_id, created_at, updated_at, deleted)
    VALUES (NEW.id, NOW(), NOW(), 0);
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `after_user_insert_create_wishlist`;
DELIMITER $$
CREATE TRIGGER `after_user_insert_create_wishlist` AFTER INSERT ON `users` FOR EACH ROW BEGIN
    INSERT INTO wishlists (user_id, created_at, updated_at, deleted)
    VALUES (NEW.id, NOW(), NOW(), 0);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `created_at`) VALUES
(1, 6, '2025-03-07 19:26:43'),
(2, 1, '2025-03-09 13:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_items`
--

DROP TABLE IF EXISTS `wishlist_items`;
CREATE TABLE IF NOT EXISTS `wishlist_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `wishlist_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wishlist_id` (`wishlist_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wishlist_items`
--

INSERT INTO `wishlist_items` (`id`, `wishlist_id`, `product_id`) VALUES
(23, 1, 4),
(25, 1, 9),
(20, 1, 12),
(26, 1, 93),
(18, 1, 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
