-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2023 a las 19:54:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cyhdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marca` varchar(50) NOT NULL,
  `sistema` varchar(255) DEFAULT NULL,
  `definicion` text NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `descripcionEspecifica` text DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `fotoDescriptiva` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `marca`, `sistema`, `definicion`, `referencia`, `cantidad`, `comentarios`, `descripcionEspecifica`, `peso`, `fotoDescriptiva`, `created_at`, `updated_at`) VALUES
(1, 'CATERPILLAR', NULL, 'Tornillo', 'Tornillo-34d', NULL, 'Tornillo', 'Tornillo rosca fina', 1, '1687104494_R (5).jpeg', '2023-06-18 16:08:14', '2023-09-11 01:28:13'),
(4, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, 'Diente', 200, '1688252347_1U3452RC-ATBR_1_1.png', '2023-07-01 22:59:07', '2023-07-01 22:59:07'),
(6, 'VEMA TEC', NULL, 'PASADOR', '8E0468', NULL, 'Sin comentarios', 'Pasador', 100, 'no-imagen.jpg', '2023-07-01 23:08:58', '2023-08-13 14:52:01'),
(7, 'VEMA TEC', NULL, 'ARANDELA', '8E0469', NULL, '1', 'Arandela', 100, 'no-imagen.jpg', '2023-07-01 23:09:40', '2023-08-13 15:28:00'),
(8, 'CTP', NULL, 'SOPORTE', '1189935', NULL, '1', 'Soporte', 1, 'no-imagen.jpg', '2023-07-01 23:11:37', '2023-07-01 23:11:37'),
(9, 'CTP', NULL, 'SOPORTE', '1189936', NULL, NULL, 'Soporte', 200, 'no-imagen.jpg', '2023-07-01 23:13:16', '2023-08-13 15:28:20'),
(10, 'Caterpillar', NULL, 'Diente', 'dasd33', NULL, NULL, 'Sello', 100, 'no-imagen.jpg', '2023-07-02 01:38:03', '2023-08-13 15:28:54'),
(11, 'COSTEX', NULL, 'BEARING SLEEVE', '9R6515', NULL, NULL, 'Bearing sleeve', 300, '1688838688_37-768x768.jpg', '2023-07-08 17:51:28', '2023-08-13 15:29:06'),
(12, 'ITR', NULL, 'RUEDA TENSORA', 'VA1821', NULL, NULL, 'Rueda tensora', NULL, '1688857725_37-768x768.jpg', '2023-07-08 23:08:45', '2023-07-08 23:08:45'),
(13, 'CTP', NULL, 'SOPORTE', '1189935', NULL, NULL, 'Soporte', NULL, 'no-imagen.jpg', '2023-07-08 23:33:21', '2023-07-08 23:33:21'),
(14, 'KOMATSU', NULL, 'THRUST WASHE(0923313820)', '144-15-22561', NULL, NULL, 'thrust', NULL, '1688859552_thrust-komatsu.jpg', '2023-07-08 23:39:12', '2023-07-08 23:39:12'),
(15, 'KOMATSU', NULL, 'GEAR', '60235A', NULL, NULL, 'Gear', NULL, 'no-imagen.jpg', '2023-07-08 23:49:57', '2023-07-08 23:49:57'),
(16, 'OEM', NULL, 'COUPLING', '121900', NULL, NULL, 'Coupling', NULL, 'no-imagen.jpg', '2023-07-08 23:51:47', '2023-07-08 23:51:47'),
(17, 'OEM', NULL, 'ARANDELA T35', '8E6359', NULL, NULL, 'ARANDELA T35', NULL, 'no-imagen.jpg', '2023-07-15 17:58:33', '2023-07-15 17:58:33'),
(20, 'PERKINS REMAN', NULL, 'EMPAQUE DE CULATA', '36812134', NULL, NULL, NULL, NULL, NULL, '2023-08-12 13:55:39', '2023-08-12 13:55:39'),
(21, 'Caterpillar', NULL, 'BEAARING SLEEVE (2602552)', 'dasd33', NULL, NULL, 'Bearing sleeve', NULL, '1691849056_OIP (12).jpeg', '2023-08-12 14:04:16', '2023-08-12 14:04:16'),
(22, 'Caterpillar', NULL, 'SOPORTE', 'Tornillo-34d', NULL, 'Tornillo', NULL, NULL, NULL, '2023-08-13 14:10:14', '2023-08-13 14:10:14'),
(23, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, NULL, 100, NULL, '2023-08-13 14:35:23', '2023-08-13 14:35:23'),
(24, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, NULL, 100, NULL, '2023-08-13 14:39:41', '2023-08-13 14:39:41'),
(25, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, NULL, 100, NULL, '2023-08-13 14:39:56', '2023-08-13 14:39:56'),
(26, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, NULL, 100, NULL, '2023-08-13 14:41:51', '2023-08-13 14:41:51'),
(27, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, NULL, 2, NULL, '2023-08-13 14:41:58', '2023-08-13 14:41:58'),
(28, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, NULL, NULL, NULL, '2023-08-13 14:42:50', '2023-08-13 14:42:50'),
(29, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, NULL, NULL, NULL, '2023-08-13 14:43:09', '2023-08-13 14:43:09'),
(30, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, NULL, NULL, NULL, '2023-08-13 14:43:56', '2023-08-13 14:43:56'),
(31, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, NULL, NULL, NULL, '2023-08-13 14:44:10', '2023-08-13 14:44:10'),
(32, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, '1', NULL, NULL, NULL, '2023-08-13 14:44:21', '2023-08-13 14:44:21'),
(33, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, '1', NULL, NULL, NULL, '2023-08-13 14:45:05', '2023-08-13 14:45:05'),
(34, 'VEMA TEC', NULL, 'Diente', '1U3452RCV', NULL, NULL, NULL, 200, NULL, '2023-08-13 14:47:43', '2023-08-13 14:47:43'),
(35, 'VEMA TEC', NULL, 'PASADOR', '8E0468', NULL, '1', NULL, 100, NULL, '2023-08-13 14:48:03', '2023-08-13 14:48:03'),
(36, 'VEMA TEC', NULL, 'PASADOR', '8E0468', NULL, 'qwqw', NULL, 233, NULL, '2023-08-13 14:48:44', '2023-08-13 14:48:44'),
(37, 'ITR', NULL, 'RUEDA TENSORA', 'VA1821', NULL, NULL, NULL, 100, NULL, '2023-08-13 14:49:32', '2023-08-13 14:49:32'),
(38, 'IPD', NULL, 'ARANDELA AXIAL', 'DS14', NULL, NULL, 'ARANDELA AXIAL', 0.4, '1693884065_arandelas-axiales.jpg', '2023-09-05 03:21:05', '2023-09-05 03:21:05'),
(39, 'CTP', NULL, 'CASQUETE BIELA', '3050', NULL, NULL, 'CASQUETE DE BIELA', 0.1, '1693884195_19270.jpg', '2023-09-05 03:23:15', '2023-09-05 03:23:15'),
(40, 'CTP', NULL, 'CASQUETE BANCADA', '1617163 U', NULL, NULL, 'CASQUETE BANCADA', 0.1, '1693884285_S_848015-MCO25198138852_12016-O.jpg', '2023-09-05 03:24:46', '2023-09-05 03:24:46'),
(41, 'KOMATSU', NULL, 'Diente', 'ljklkll', NULL, NULL, 'Seal', 1, '1694282105_S_848015-MCO25198138852_12016-O.jpg', '2023-09-09 17:55:05', '2023-09-09 17:55:05'),
(42, 'CTP', NULL, 'SHIM', '3088785', NULL, 'REVISAR PESO, SE COLOCÓ UNO APROXIMADO', 'SHIM', 0.5, '1694307724_2V7390.jpg', '2023-09-10 01:02:04', '2023-09-10 01:02:04'),
(43, 'COSTEX', NULL, 'GOBERNADOR', '567878B', NULL, NULL, 'GOBERNADOR', 0.2, 'no-imagen.jpg', '2023-09-11 02:11:30', '2023-09-11 02:11:30'),
(44, 'CTP', NULL, 'Diente', 'arandela', NULL, NULL, 'Sello', 200, 'no-imagen.jpg', '2023-09-14 02:41:15', '2023-09-14 02:41:15'),
(45, 'OEM', NULL, 'O-RING (KIT)', '15080', NULL, NULL, NULL, 0.5, 'no-imagen.jpg', '2023-09-14 02:48:54', '2023-09-14 02:48:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_juegos`
--

CREATE TABLE `articulos_juegos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `articulo_id` bigint(20) UNSIGNED NOT NULL,
  `juego_por_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulos_juegos`
--

INSERT INTO `articulos_juegos` (`id`, `articulo_id`, `juego_por_id`, `created_at`, `updated_at`) VALUES
(4, 42, 1, '2023-09-11 02:05:54', '2023-09-11 02:05:54'),
(5, 41, 7, '2023-09-11 02:06:39', '2023-09-11 02:06:39'),
(6, 1, 4, '2023-09-11 02:06:58', '2023-09-11 02:06:58'),
(8, 43, 4, '2023-09-11 02:12:17', '2023-09-11 02:12:17'),
(9, 45, 6, '2023-09-14 02:48:54', '2023-09-14 02:48:54'),
(10, 45, 7, '2023-09-14 02:48:54', '2023-09-14 02:48:54'),
(11, 45, 8, '2023-09-14 02:48:54', '2023-09-14 02:48:54'),
(12, 45, 9, '2023-09-14 02:48:54', '2023-09-14 02:48:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_medida`
--

CREATE TABLE `articulo_medida` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `articulo_id` bigint(20) UNSIGNED NOT NULL,
  `medida_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulo_medida`
--

INSERT INTO `articulo_medida` (`id`, `articulo_id`, `medida_id`, `created_at`, `updated_at`) VALUES
(105, 6, 11, NULL, NULL),
(115, 4, 21, NULL, NULL),
(117, 42, 23, NULL, NULL),
(118, 41, 24, NULL, NULL),
(119, 1, 25, NULL, NULL),
(122, 43, 28, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_pedido`
--

CREATE TABLE `articulo_pedido` (
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `articulo_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulo_pedido`
--

INSERT INTO `articulo_pedido` (`pedido_id`, `articulo_id`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 7, 3, '2023-09-02 15:48:50', '2023-09-02 15:48:50'),
(2, 6, 1, '2023-09-02 15:52:28', '2023-09-02 15:52:28'),
(3, 38, 2, '2023-09-05 03:26:20', '2023-09-05 03:26:20'),
(3, 39, 4, '2023-09-05 03:26:20', '2023-09-05 03:26:20'),
(3, 40, 4, '2023-09-05 03:26:20', '2023-09-05 03:26:20'),
(4, 39, 4, '2023-09-05 03:50:49', '2023-09-05 03:50:49'),
(4, 40, 5, '2023-09-05 03:50:49', '2023-09-05 03:50:49'),
(4, 38, 2, '2023-09-05 03:50:49', '2023-09-05 03:50:49'),
(5, 39, 4, '2023-09-05 03:57:47', '2023-09-05 03:57:47'),
(5, 40, 5, '2023-09-05 03:57:47', '2023-09-05 03:57:47'),
(5, 38, 1, '2023-09-05 03:57:47', '2023-09-05 03:57:47'),
(6, 39, 4, '2023-09-05 04:02:51', '2023-09-05 04:02:51'),
(6, 40, 5, '2023-09-05 04:02:51', '2023-09-05 04:02:51'),
(6, 38, 2, '2023-09-05 04:02:51', '2023-09-05 04:02:51'),
(7, 1, 1, '2023-09-09 17:18:35', '2023-09-09 17:18:35'),
(8, 42, 1, '2023-09-11 02:24:40', '2023-09-11 02:24:40'),
(9, 14, 1, '2023-09-14 02:52:41', '2023-09-14 02:52:41'),
(12, 1, 1, '2023-09-14 02:56:24', '2023-09-14 02:56:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_temporal`
--

CREATE TABLE `articulo_temporal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `definicion` varchar(255) DEFAULT NULL,
  `sistema` varchar(255) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `comentarios` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulo_temporal`
--

INSERT INTO `articulo_temporal` (`id`, `referencia`, `definicion`, `sistema`, `cantidad`, `comentarios`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 2, 'emaque para el motor', '2023-09-14 02:53:44', '2023-09-14 02:53:44'),
(2, NULL, NULL, NULL, 2, 'emaque para el motor', '2023-09-14 02:53:44', '2023-09-14 02:53:44'),
(3, '121900', NULL, NULL, 4, NULL, '2023-09-14 02:54:49', '2023-09-14 02:54:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `CiudadID` int(11) NOT NULL,
  `CiudadNombre` char(35) NOT NULL DEFAULT '',
  `PaisCodigo` char(3) NOT NULL DEFAULT '',
  `CiudadDistrito` char(20) NOT NULL DEFAULT '',
  `CiudadPoblacion` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`CiudadID`, `CiudadNombre`, `PaisCodigo`, `CiudadDistrito`, `CiudadPoblacion`) VALUES
(1, 'Kabul', 'AFG', 'Kabol', 1780000),
(2, 'Qandahar', 'AFG', 'Qandahar', 237500),
(3, 'Herat', 'AFG', 'Herat', 186800),
(4, 'Mazar-e-Sharif', 'AFG', 'Balkh', 127800),
(5, 'Amsterdam', 'NLD', 'Noord-Holland', 731200),
(6, 'Rotterdam', 'NLD', 'Zuid-Holland', 593321),
(7, 'Haag', 'NLD', 'Zuid-Holland', 440900),
(8, 'Utrecht', 'NLD', 'Utrecht', 234323),
(9, 'Eindhoven', 'NLD', 'Noord-Brabant', 201843),
(10, 'Tilburg', 'NLD', 'Noord-Brabant', 193238),
(11, 'Groningen', 'NLD', 'Groningen', 172701),
(12, 'Breda', 'NLD', 'Noord-Brabant', 160398),
(13, 'Apeldoorn', 'NLD', 'Gelderland', 153491),
(14, 'Nijmegen', 'NLD', 'Gelderland', 152463),
(15, 'Enschede', 'NLD', 'Overijssel', 149544),
(16, 'Haarlem', 'NLD', 'Noord-Holland', 148772),
(17, 'Almere', 'NLD', 'Flevoland', 142465),
(18, 'Arnhem', 'NLD', 'Gelderland', 138020),
(19, 'Zaanstad', 'NLD', 'Noord-Holland', 135621),
(20, '´s-Hertogenbosch', 'NLD', 'Noord-Brabant', 129170),
(21, 'Amersfoort', 'NLD', 'Utrecht', 126270),
(22, 'Maastricht', 'NLD', 'Limburg', 122087),
(23, 'Dordrecht', 'NLD', 'Zuid-Holland', 119811),
(24, 'Leiden', 'NLD', 'Zuid-Holland', 117196),
(25, 'Haarlemmermeer', 'NLD', 'Noord-Holland', 110722),
(26, 'Zoetermeer', 'NLD', 'Zuid-Holland', 110214),
(27, 'Emmen', 'NLD', 'Drenthe', 105853),
(28, 'Zwolle', 'NLD', 'Overijssel', 105819),
(29, 'Ede', 'NLD', 'Gelderland', 101574),
(30, 'Delft', 'NLD', 'Zuid-Holland', 95268),
(31, 'Heerlen', 'NLD', 'Limburg', 95052),
(32, 'Alkmaar', 'NLD', 'Noord-Holland', 92713),
(33, 'Willemstad', 'ANT', 'Curaçao', 2345),
(34, 'Tirana', 'ALB', 'Tirana', 270000),
(35, 'Alger', 'DZA', 'Alger', 2168000),
(36, 'Oran', 'DZA', 'Oran', 609823),
(37, 'Constantine', 'DZA', 'Constantine', 443727),
(38, 'Annaba', 'DZA', 'Annaba', 222518),
(39, 'Batna', 'DZA', 'Batna', 183377),
(40, 'Sétif', 'DZA', 'Sétif', 179055),
(41, 'Sidi Bel Abbès', 'DZA', 'Sidi Bel Abbès', 153106),
(42, 'Skikda', 'DZA', 'Skikda', 128747),
(43, 'Biskra', 'DZA', 'Biskra', 128281),
(44, 'Blida (el-Boulaida)', 'DZA', 'Blida', 127284),
(45, 'Béjaïa', 'DZA', 'Béjaïa', 117162),
(46, 'Mostaganem', 'DZA', 'Mostaganem', 115212),
(47, 'Tébessa', 'DZA', 'Tébessa', 112007),
(48, 'Tlemcen (Tilimsen)', 'DZA', 'Tlemcen', 110242),
(49, 'Béchar', 'DZA', 'Béchar', 107311),
(50, 'Tiaret', 'DZA', 'Tiaret', 100118),
(51, 'Ech-Chleff (el-Asnam)', 'DZA', 'Chlef', 96794),
(52, 'Ghardaïa', 'DZA', 'Ghardaïa', 89415),
(53, 'Tafuna', 'ASM', 'Tutuila', 5200),
(54, 'Fagatogo', 'ASM', 'Tutuila', 2323),
(55, 'Andorra la Vella', 'AND', 'Andorra la Vella', 21189),
(56, 'Luanda', 'AGO', 'Luanda', 2022000),
(57, 'Huambo', 'AGO', 'Huambo', 163100),
(58, 'Lobito', 'AGO', 'Benguela', 130000),
(59, 'Benguela', 'AGO', 'Benguela', 128300),
(60, 'Namibe', 'AGO', 'Namibe', 118200),
(61, 'South Hill', 'AIA', '–', 961),
(62, 'The Valley', 'AIA', '–', 595),
(63, 'Saint John´s', 'ATG', 'St John', 24000),
(64, 'Dubai', 'ARE', 'Dubai', 669181),
(65, 'Abu Dhabi', 'ARE', 'Abu Dhabi', 398695),
(66, 'Sharja', 'ARE', 'Sharja', 320095),
(67, 'al-Ayn', 'ARE', 'Abu Dhabi', 225970),
(68, 'Ajman', 'ARE', 'Ajman', 114395),
(69, 'Buenos Aires', 'ARG', 'Distrito Federal', 2982146),
(70, 'La Matanza', 'ARG', 'Buenos Aires', 1266461),
(71, 'Córdoba', 'ARG', 'Córdoba', 1157507),
(72, 'Rosario', 'ARG', 'Santa Fé', 907718),
(73, 'Lomas de Zamora', 'ARG', 'Buenos Aires', 622013),
(74, 'Quilmes', 'ARG', 'Buenos Aires', 559249),
(75, 'Almirante Brown', 'ARG', 'Buenos Aires', 538918),
(76, 'La Plata', 'ARG', 'Buenos Aires', 521936),
(77, 'Mar del Plata', 'ARG', 'Buenos Aires', 512880),
(78, 'San Miguel de Tucumán', 'ARG', 'Tucumán', 470809),
(79, 'Lanús', 'ARG', 'Buenos Aires', 469735),
(80, 'Merlo', 'ARG', 'Buenos Aires', 463846),
(81, 'General San Martín', 'ARG', 'Buenos Aires', 422542),
(82, 'Salta', 'ARG', 'Salta', 367550),
(83, 'Moreno', 'ARG', 'Buenos Aires', 356993),
(84, 'Santa Fé', 'ARG', 'Santa Fé', 353063),
(85, 'Avellaneda', 'ARG', 'Buenos Aires', 353046),
(86, 'Tres de Febrero', 'ARG', 'Buenos Aires', 352311),
(87, 'Morón', 'ARG', 'Buenos Aires', 349246),
(88, 'Florencio Varela', 'ARG', 'Buenos Aires', 315432),
(89, 'San Isidro', 'ARG', 'Buenos Aires', 306341),
(90, 'Tigre', 'ARG', 'Buenos Aires', 296226),
(91, 'Malvinas Argentinas', 'ARG', 'Buenos Aires', 290335),
(92, 'Vicente López', 'ARG', 'Buenos Aires', 288341),
(93, 'Berazategui', 'ARG', 'Buenos Aires', 276916),
(94, 'Corrientes', 'ARG', 'Corrientes', 258103),
(95, 'San Miguel', 'ARG', 'Buenos Aires', 248700),
(96, 'Bahía Blanca', 'ARG', 'Buenos Aires', 239810),
(97, 'Esteban Echeverría', 'ARG', 'Buenos Aires', 235760),
(98, 'Resistencia', 'ARG', 'Chaco', 229212),
(99, 'José C. Paz', 'ARG', 'Buenos Aires', 221754),
(100, 'Paraná', 'ARG', 'Entre Rios', 207041),
(101, 'Godoy Cruz', 'ARG', 'Mendoza', 206998),
(102, 'Posadas', 'ARG', 'Misiones', 201273),
(103, 'Guaymallén', 'ARG', 'Mendoza', 200595),
(104, 'Santiago del Estero', 'ARG', 'Santiago del Estero', 189947),
(105, 'San Salvador de Jujuy', 'ARG', 'Jujuy', 178748),
(106, 'Hurlingham', 'ARG', 'Buenos Aires', 170028),
(107, 'Neuquén', 'ARG', 'Neuquén', 167296),
(108, 'Ituzaingó', 'ARG', 'Buenos Aires', 158197),
(109, 'San Fernando', 'ARG', 'Buenos Aires', 153036),
(110, 'Formosa', 'ARG', 'Formosa', 147636),
(111, 'Las Heras', 'ARG', 'Mendoza', 145823),
(112, 'La Rioja', 'ARG', 'La Rioja', 138117),
(113, 'San Fernando del Valle de Cata', 'ARG', 'Catamarca', 134935),
(114, 'Río Cuarto', 'ARG', 'Córdoba', 134355),
(115, 'Comodoro Rivadavia', 'ARG', 'Chubut', 124104),
(116, 'Mendoza', 'ARG', 'Mendoza', 123027),
(117, 'San Nicolás de los Arroyos', 'ARG', 'Buenos Aires', 119302),
(118, 'San Juan', 'ARG', 'San Juan', 119152),
(119, 'Escobar', 'ARG', 'Buenos Aires', 116675),
(120, 'Concordia', 'ARG', 'Entre Rios', 116485),
(121, 'Pilar', 'ARG', 'Buenos Aires', 113428),
(122, 'San Luis', 'ARG', 'San Luis', 110136),
(123, 'Ezeiza', 'ARG', 'Buenos Aires', 99578),
(124, 'San Rafael', 'ARG', 'Mendoza', 94651),
(125, 'Tandil', 'ARG', 'Buenos Aires', 91101),
(126, 'Yerevan', 'ARM', 'Yerevan', 1248700),
(127, 'Gjumri', 'ARM', 'Širak', 211700),
(128, 'Vanadzor', 'ARM', 'Lori', 172700),
(129, 'Oranjestad', 'ABW', '–', 29034),
(130, 'Sydney', 'AUS', 'New South Wales', 3276207),
(131, 'Melbourne', 'AUS', 'Victoria', 2865329),
(132, 'Brisbane', 'AUS', 'Queensland', 1291117),
(133, 'Perth', 'AUS', 'West Australia', 1096829),
(134, 'Adelaide', 'AUS', 'South Australia', 978100),
(135, 'Canberra', 'AUS', 'Capital Region', 322723),
(136, 'Gold Coast', 'AUS', 'Queensland', 311932),
(137, 'Newcastle', 'AUS', 'New South Wales', 270324),
(138, 'Central Coast', 'AUS', 'New South Wales', 227657),
(139, 'Wollongong', 'AUS', 'New South Wales', 219761),
(140, 'Hobart', 'AUS', 'Tasmania', 126118),
(141, 'Geelong', 'AUS', 'Victoria', 125382),
(142, 'Townsville', 'AUS', 'Queensland', 109914),
(143, 'Cairns', 'AUS', 'Queensland', 92273),
(144, 'Baku', 'AZE', 'Baki', 1787800),
(145, 'Gäncä', 'AZE', 'Gäncä', 299300),
(146, 'Sumqayit', 'AZE', 'Sumqayit', 283000),
(147, 'Mingäçevir', 'AZE', 'Mingäçevir', 93900),
(148, 'Nassau', 'BHS', 'New Providence', 172000),
(149, 'al-Manama', 'BHR', 'al-Manama', 148000),
(150, 'Dhaka', 'BGD', 'Dhaka', 3612850),
(151, 'Chittagong', 'BGD', 'Chittagong', 1392860),
(152, 'Khulna', 'BGD', 'Khulna', 663340),
(153, 'Rajshahi', 'BGD', 'Rajshahi', 294056),
(154, 'Narayanganj', 'BGD', 'Dhaka', 202134),
(155, 'Rangpur', 'BGD', 'Rajshahi', 191398),
(156, 'Mymensingh', 'BGD', 'Dhaka', 188713),
(157, 'Barisal', 'BGD', 'Barisal', 170232),
(158, 'Tungi', 'BGD', 'Dhaka', 168702),
(159, 'Jessore', 'BGD', 'Khulna', 139710),
(160, 'Comilla', 'BGD', 'Chittagong', 135313),
(161, 'Nawabganj', 'BGD', 'Rajshahi', 130577),
(162, 'Dinajpur', 'BGD', 'Rajshahi', 127815),
(163, 'Bogra', 'BGD', 'Rajshahi', 120170),
(164, 'Sylhet', 'BGD', 'Sylhet', 117396),
(165, 'Brahmanbaria', 'BGD', 'Chittagong', 109032),
(166, 'Tangail', 'BGD', 'Dhaka', 106004),
(167, 'Jamalpur', 'BGD', 'Dhaka', 103556),
(168, 'Pabna', 'BGD', 'Rajshahi', 103277),
(169, 'Naogaon', 'BGD', 'Rajshahi', 101266),
(170, 'Sirajganj', 'BGD', 'Rajshahi', 99669),
(171, 'Narsinghdi', 'BGD', 'Dhaka', 98342),
(172, 'Saidpur', 'BGD', 'Rajshahi', 96777),
(173, 'Gazipur', 'BGD', 'Dhaka', 96717),
(174, 'Bridgetown', 'BRB', 'St Michael', 6070),
(175, 'Antwerpen', 'BEL', 'Antwerpen', 446525),
(176, 'Gent', 'BEL', 'East Flanderi', 224180),
(177, 'Charleroi', 'BEL', 'Hainaut', 200827),
(178, 'Liège', 'BEL', 'Liège', 185639),
(179, 'Bruxelles [Brussel]', 'BEL', 'Bryssel', 133859),
(180, 'Brugge', 'BEL', 'West Flanderi', 116246),
(181, 'Schaerbeek', 'BEL', 'Bryssel', 105692),
(182, 'Namur', 'BEL', 'Namur', 105419),
(183, 'Mons', 'BEL', 'Hainaut', 90935),
(184, 'Belize City', 'BLZ', 'Belize City', 55810),
(185, 'Belmopan', 'BLZ', 'Cayo', 7105),
(186, 'Cotonou', 'BEN', 'Atlantique', 536827),
(187, 'Porto-Novo', 'BEN', 'Ouémé', 194000),
(188, 'Djougou', 'BEN', 'Atacora', 134099),
(189, 'Parakou', 'BEN', 'Borgou', 103577),
(190, 'Saint George', 'BMU', 'Saint George´s', 1800),
(191, 'Hamilton', 'BMU', 'Hamilton', 1200),
(192, 'Thimphu', 'BTN', 'Thimphu', 22000),
(193, 'Santa Cruz de la Sierra', 'BOL', 'Santa Cruz', 935361),
(194, 'La Paz', 'BOL', 'La Paz', 758141),
(195, 'El Alto', 'BOL', 'La Paz', 534466),
(196, 'Cochabamba', 'BOL', 'Cochabamba', 482800),
(197, 'Oruro', 'BOL', 'Oruro', 223553),
(198, 'Sucre', 'BOL', 'Chuquisaca', 178426),
(199, 'Potosí', 'BOL', 'Potosí', 140642),
(200, 'Tarija', 'BOL', 'Tarija', 125255),
(201, 'Sarajevo', 'BIH', 'Federaatio', 360000),
(202, 'Banja Luka', 'BIH', 'Republika Srpska', 143079),
(203, 'Zenica', 'BIH', 'Federaatio', 96027),
(204, 'Gaborone', 'BWA', 'Gaborone', 213017),
(205, 'Francistown', 'BWA', 'Francistown', 101805),
(206, 'São Paulo', 'BRA', 'São Paulo', 9968485),
(207, 'Rio de Janeiro', 'BRA', 'Rio de Janeiro', 5598953),
(208, 'Salvador', 'BRA', 'Bahia', 2302832),
(209, 'Belo Horizonte', 'BRA', 'Minas Gerais', 2139125),
(210, 'Fortaleza', 'BRA', 'Ceará', 2097757),
(211, 'Brasília', 'BRA', 'Distrito Federal', 1969868),
(212, 'Curitiba', 'BRA', 'Paraná', 1584232),
(213, 'Recife', 'BRA', 'Pernambuco', 1378087),
(214, 'Porto Alegre', 'BRA', 'Rio Grande do Sul', 1314032),
(215, 'Manaus', 'BRA', 'Amazonas', 1255049),
(216, 'Belém', 'BRA', 'Pará', 1186926),
(217, 'Guarulhos', 'BRA', 'São Paulo', 1095874),
(218, 'Goiânia', 'BRA', 'Goiás', 1056330),
(219, 'Campinas', 'BRA', 'São Paulo', 950043),
(220, 'São Gonçalo', 'BRA', 'Rio de Janeiro', 869254),
(221, 'Nova Iguaçu', 'BRA', 'Rio de Janeiro', 862225),
(222, 'São Luís', 'BRA', 'Maranhão', 837588),
(223, 'Maceió', 'BRA', 'Alagoas', 786288),
(224, 'Duque de Caxias', 'BRA', 'Rio de Janeiro', 746758),
(225, 'São Bernardo do Campo', 'BRA', 'São Paulo', 723132),
(226, 'Teresina', 'BRA', 'Piauí', 691942),
(227, 'Natal', 'BRA', 'Rio Grande do Norte', 688955),
(228, 'Osasco', 'BRA', 'São Paulo', 659604),
(229, 'Campo Grande', 'BRA', 'Mato Grosso do Sul', 649593),
(230, 'Santo André', 'BRA', 'São Paulo', 630073),
(231, 'João Pessoa', 'BRA', 'Paraíba', 584029),
(232, 'Jaboatão dos Guararapes', 'BRA', 'Pernambuco', 558680),
(233, 'Contagem', 'BRA', 'Minas Gerais', 520801),
(234, 'São José dos Campos', 'BRA', 'São Paulo', 515553),
(235, 'Uberlândia', 'BRA', 'Minas Gerais', 487222),
(236, 'Feira de Santana', 'BRA', 'Bahia', 479992),
(237, 'Ribeirão Preto', 'BRA', 'São Paulo', 473276),
(238, 'Sorocaba', 'BRA', 'São Paulo', 466823),
(239, 'Niterói', 'BRA', 'Rio de Janeiro', 459884),
(240, 'Cuiabá', 'BRA', 'Mato Grosso', 453813),
(241, 'Juiz de Fora', 'BRA', 'Minas Gerais', 450288),
(242, 'Aracaju', 'BRA', 'Sergipe', 445555),
(243, 'São João de Meriti', 'BRA', 'Rio de Janeiro', 440052),
(244, 'Londrina', 'BRA', 'Paraná', 432257),
(245, 'Joinville', 'BRA', 'Santa Catarina', 428011),
(246, 'Belford Roxo', 'BRA', 'Rio de Janeiro', 425194),
(247, 'Santos', 'BRA', 'São Paulo', 408748),
(248, 'Ananindeua', 'BRA', 'Pará', 400940),
(249, 'Campos dos Goytacazes', 'BRA', 'Rio de Janeiro', 398418),
(250, 'Mauá', 'BRA', 'São Paulo', 375055),
(251, 'Carapicuíba', 'BRA', 'São Paulo', 357552),
(252, 'Olinda', 'BRA', 'Pernambuco', 354732),
(253, 'Campina Grande', 'BRA', 'Paraíba', 352497),
(254, 'São José do Rio Preto', 'BRA', 'São Paulo', 351944),
(255, 'Caxias do Sul', 'BRA', 'Rio Grande do Sul', 349581),
(256, 'Moji das Cruzes', 'BRA', 'São Paulo', 339194),
(257, 'Diadema', 'BRA', 'São Paulo', 335078),
(258, 'Aparecida de Goiânia', 'BRA', 'Goiás', 324662),
(259, 'Piracicaba', 'BRA', 'São Paulo', 319104),
(260, 'Cariacica', 'BRA', 'Espírito Santo', 319033),
(261, 'Vila Velha', 'BRA', 'Espírito Santo', 318758),
(262, 'Pelotas', 'BRA', 'Rio Grande do Sul', 315415),
(263, 'Bauru', 'BRA', 'São Paulo', 313670),
(264, 'Porto Velho', 'BRA', 'Rondônia', 309750),
(265, 'Serra', 'BRA', 'Espírito Santo', 302666),
(266, 'Betim', 'BRA', 'Minas Gerais', 302108),
(267, 'Jundíaí', 'BRA', 'São Paulo', 296127),
(268, 'Canoas', 'BRA', 'Rio Grande do Sul', 294125),
(269, 'Franca', 'BRA', 'São Paulo', 290139),
(270, 'São Vicente', 'BRA', 'São Paulo', 286848),
(271, 'Maringá', 'BRA', 'Paraná', 286461),
(272, 'Montes Claros', 'BRA', 'Minas Gerais', 286058),
(273, 'Anápolis', 'BRA', 'Goiás', 282197),
(274, 'Florianópolis', 'BRA', 'Santa Catarina', 281928),
(275, 'Petrópolis', 'BRA', 'Rio de Janeiro', 279183),
(276, 'Itaquaquecetuba', 'BRA', 'São Paulo', 270874),
(277, 'Vitória', 'BRA', 'Espírito Santo', 270626),
(278, 'Ponta Grossa', 'BRA', 'Paraná', 268013),
(279, 'Rio Branco', 'BRA', 'Acre', 259537),
(280, 'Foz do Iguaçu', 'BRA', 'Paraná', 259425),
(281, 'Macapá', 'BRA', 'Amapá', 256033),
(282, 'Ilhéus', 'BRA', 'Bahia', 254970),
(283, 'Vitória da Conquista', 'BRA', 'Bahia', 253587),
(284, 'Uberaba', 'BRA', 'Minas Gerais', 249225),
(285, 'Paulista', 'BRA', 'Pernambuco', 248473),
(286, 'Limeira', 'BRA', 'São Paulo', 245497),
(287, 'Blumenau', 'BRA', 'Santa Catarina', 244379),
(288, 'Caruaru', 'BRA', 'Pernambuco', 244247),
(289, 'Santarém', 'BRA', 'Pará', 241771),
(290, 'Volta Redonda', 'BRA', 'Rio de Janeiro', 240315),
(291, 'Novo Hamburgo', 'BRA', 'Rio Grande do Sul', 239940),
(292, 'Caucaia', 'BRA', 'Ceará', 238738),
(293, 'Santa Maria', 'BRA', 'Rio Grande do Sul', 238473),
(294, 'Cascavel', 'BRA', 'Paraná', 237510),
(295, 'Guarujá', 'BRA', 'São Paulo', 237206),
(296, 'Ribeirão das Neves', 'BRA', 'Minas Gerais', 232685),
(297, 'Governador Valadares', 'BRA', 'Minas Gerais', 231724),
(298, 'Taubaté', 'BRA', 'São Paulo', 229130),
(299, 'Imperatriz', 'BRA', 'Maranhão', 224564),
(300, 'Gravataí', 'BRA', 'Rio Grande do Sul', 223011),
(301, 'Embu', 'BRA', 'São Paulo', 222223),
(302, 'Mossoró', 'BRA', 'Rio Grande do Norte', 214901),
(303, 'Várzea Grande', 'BRA', 'Mato Grosso', 214435),
(304, 'Petrolina', 'BRA', 'Pernambuco', 210540),
(305, 'Barueri', 'BRA', 'São Paulo', 208426),
(306, 'Viamão', 'BRA', 'Rio Grande do Sul', 207557),
(307, 'Ipatinga', 'BRA', 'Minas Gerais', 206338),
(308, 'Juazeiro', 'BRA', 'Bahia', 201073),
(309, 'Juazeiro do Norte', 'BRA', 'Ceará', 199636),
(310, 'Taboão da Serra', 'BRA', 'São Paulo', 197550),
(311, 'São José dos Pinhais', 'BRA', 'Paraná', 196884),
(312, 'Magé', 'BRA', 'Rio de Janeiro', 196147),
(313, 'Suzano', 'BRA', 'São Paulo', 195434),
(314, 'São Leopoldo', 'BRA', 'Rio Grande do Sul', 189258),
(315, 'Marília', 'BRA', 'São Paulo', 188691),
(316, 'São Carlos', 'BRA', 'São Paulo', 187122),
(317, 'Sumaré', 'BRA', 'São Paulo', 186205),
(318, 'Presidente Prudente', 'BRA', 'São Paulo', 185340),
(319, 'Divinópolis', 'BRA', 'Minas Gerais', 185047),
(320, 'Sete Lagoas', 'BRA', 'Minas Gerais', 182984),
(321, 'Rio Grande', 'BRA', 'Rio Grande do Sul', 182222),
(322, 'Itabuna', 'BRA', 'Bahia', 182148),
(323, 'Jequié', 'BRA', 'Bahia', 179128),
(324, 'Arapiraca', 'BRA', 'Alagoas', 178988),
(325, 'Colombo', 'BRA', 'Paraná', 177764),
(326, 'Americana', 'BRA', 'São Paulo', 177409),
(327, 'Alvorada', 'BRA', 'Rio Grande do Sul', 175574),
(328, 'Araraquara', 'BRA', 'São Paulo', 174381),
(329, 'Itaboraí', 'BRA', 'Rio de Janeiro', 173977),
(330, 'Santa Bárbara d´Oeste', 'BRA', 'São Paulo', 171657),
(331, 'Nova Friburgo', 'BRA', 'Rio de Janeiro', 170697),
(332, 'Jacareí', 'BRA', 'São Paulo', 170356),
(333, 'Araçatuba', 'BRA', 'São Paulo', 169303),
(334, 'Barra Mansa', 'BRA', 'Rio de Janeiro', 168953),
(335, 'Praia Grande', 'BRA', 'São Paulo', 168434),
(336, 'Marabá', 'BRA', 'Pará', 167795),
(337, 'Criciúma', 'BRA', 'Santa Catarina', 167661),
(338, 'Boa Vista', 'BRA', 'Roraima', 167185),
(339, 'Passo Fundo', 'BRA', 'Rio Grande do Sul', 166343),
(340, 'Dourados', 'BRA', 'Mato Grosso do Sul', 164716),
(341, 'Santa Luzia', 'BRA', 'Minas Gerais', 164704),
(342, 'Rio Claro', 'BRA', 'São Paulo', 163551),
(343, 'Maracanaú', 'BRA', 'Ceará', 162022),
(344, 'Guarapuava', 'BRA', 'Paraná', 160510),
(345, 'Rondonópolis', 'BRA', 'Mato Grosso', 155115),
(346, 'São José', 'BRA', 'Santa Catarina', 155105),
(347, 'Cachoeiro de Itapemirim', 'BRA', 'Espírito Santo', 155024),
(348, 'Nilópolis', 'BRA', 'Rio de Janeiro', 153383),
(349, 'Itapevi', 'BRA', 'São Paulo', 150664),
(350, 'Cabo de Santo Agostinho', 'BRA', 'Pernambuco', 149964),
(351, 'Camaçari', 'BRA', 'Bahia', 149146),
(352, 'Sobral', 'BRA', 'Ceará', 146005),
(353, 'Itajaí', 'BRA', 'Santa Catarina', 145197),
(354, 'Chapecó', 'BRA', 'Santa Catarina', 144158),
(355, 'Cotia', 'BRA', 'São Paulo', 140042),
(356, 'Lages', 'BRA', 'Santa Catarina', 139570),
(357, 'Ferraz de Vasconcelos', 'BRA', 'São Paulo', 139283),
(358, 'Indaiatuba', 'BRA', 'São Paulo', 135968),
(359, 'Hortolândia', 'BRA', 'São Paulo', 135755),
(360, 'Caxias', 'BRA', 'Maranhão', 133980),
(361, 'São Caetano do Sul', 'BRA', 'São Paulo', 133321),
(362, 'Itu', 'BRA', 'São Paulo', 132736),
(363, 'Nossa Senhora do Socorro', 'BRA', 'Sergipe', 131351),
(364, 'Parnaíba', 'BRA', 'Piauí', 129756),
(365, 'Poços de Caldas', 'BRA', 'Minas Gerais', 129683),
(366, 'Teresópolis', 'BRA', 'Rio de Janeiro', 128079),
(367, 'Barreiras', 'BRA', 'Bahia', 127801),
(368, 'Castanhal', 'BRA', 'Pará', 127634),
(369, 'Alagoinhas', 'BRA', 'Bahia', 126820),
(370, 'Itapecerica da Serra', 'BRA', 'São Paulo', 126672),
(371, 'Uruguaiana', 'BRA', 'Rio Grande do Sul', 126305),
(372, 'Paranaguá', 'BRA', 'Paraná', 126076),
(373, 'Ibirité', 'BRA', 'Minas Gerais', 125982),
(374, 'Timon', 'BRA', 'Maranhão', 125812),
(375, 'Luziânia', 'BRA', 'Goiás', 125597),
(376, 'Macaé', 'BRA', 'Rio de Janeiro', 125597),
(377, 'Teófilo Otoni', 'BRA', 'Minas Gerais', 124489),
(378, 'Moji-Guaçu', 'BRA', 'São Paulo', 123782),
(379, 'Palmas', 'BRA', 'Tocantins', 121919),
(380, 'Pindamonhangaba', 'BRA', 'São Paulo', 121904),
(381, 'Francisco Morato', 'BRA', 'São Paulo', 121197),
(382, 'Bagé', 'BRA', 'Rio Grande do Sul', 120793),
(383, 'Sapucaia do Sul', 'BRA', 'Rio Grande do Sul', 120217),
(384, 'Cabo Frio', 'BRA', 'Rio de Janeiro', 119503),
(385, 'Itapetininga', 'BRA', 'São Paulo', 119391),
(386, 'Patos de Minas', 'BRA', 'Minas Gerais', 119262),
(387, 'Camaragibe', 'BRA', 'Pernambuco', 118968),
(388, 'Bragança Paulista', 'BRA', 'São Paulo', 116929),
(389, 'Queimados', 'BRA', 'Rio de Janeiro', 115020),
(390, 'Araguaína', 'BRA', 'Tocantins', 114948),
(391, 'Garanhuns', 'BRA', 'Pernambuco', 114603),
(392, 'Vitória de Santo Antão', 'BRA', 'Pernambuco', 113595),
(393, 'Santa Rita', 'BRA', 'Paraíba', 113135),
(394, 'Barbacena', 'BRA', 'Minas Gerais', 113079),
(395, 'Abaetetuba', 'BRA', 'Pará', 111258),
(396, 'Jaú', 'BRA', 'São Paulo', 109965),
(397, 'Lauro de Freitas', 'BRA', 'Bahia', 109236),
(398, 'Franco da Rocha', 'BRA', 'São Paulo', 108964),
(399, 'Teixeira de Freitas', 'BRA', 'Bahia', 108441),
(400, 'Varginha', 'BRA', 'Minas Gerais', 108314),
(401, 'Ribeirão Pires', 'BRA', 'São Paulo', 108121),
(402, 'Sabará', 'BRA', 'Minas Gerais', 107781),
(403, 'Catanduva', 'BRA', 'São Paulo', 107761),
(404, 'Rio Verde', 'BRA', 'Goiás', 107755),
(405, 'Botucatu', 'BRA', 'São Paulo', 107663),
(406, 'Colatina', 'BRA', 'Espírito Santo', 107354),
(407, 'Santa Cruz do Sul', 'BRA', 'Rio Grande do Sul', 106734),
(408, 'Linhares', 'BRA', 'Espírito Santo', 106278),
(409, 'Apucarana', 'BRA', 'Paraná', 105114),
(410, 'Barretos', 'BRA', 'São Paulo', 104156),
(411, 'Guaratinguetá', 'BRA', 'São Paulo', 103433),
(412, 'Cachoeirinha', 'BRA', 'Rio Grande do Sul', 103240),
(413, 'Codó', 'BRA', 'Maranhão', 103153),
(414, 'Jaraguá do Sul', 'BRA', 'Santa Catarina', 102580),
(415, 'Cubatão', 'BRA', 'São Paulo', 102372),
(416, 'Itabira', 'BRA', 'Minas Gerais', 102217),
(417, 'Itaituba', 'BRA', 'Pará', 101320),
(418, 'Araras', 'BRA', 'São Paulo', 101046),
(419, 'Resende', 'BRA', 'Rio de Janeiro', 100627),
(420, 'Atibaia', 'BRA', 'São Paulo', 100356),
(421, 'Pouso Alegre', 'BRA', 'Minas Gerais', 100028),
(422, 'Toledo', 'BRA', 'Paraná', 99387),
(423, 'Crato', 'BRA', 'Ceará', 98965),
(424, 'Passos', 'BRA', 'Minas Gerais', 98570),
(425, 'Araguari', 'BRA', 'Minas Gerais', 98399),
(426, 'São José de Ribamar', 'BRA', 'Maranhão', 98318),
(427, 'Pinhais', 'BRA', 'Paraná', 98198),
(428, 'Sertãozinho', 'BRA', 'São Paulo', 98140),
(429, 'Conselheiro Lafaiete', 'BRA', 'Minas Gerais', 97507),
(430, 'Paulo Afonso', 'BRA', 'Bahia', 97291),
(431, 'Angra dos Reis', 'BRA', 'Rio de Janeiro', 96864),
(432, 'Eunápolis', 'BRA', 'Bahia', 96610),
(433, 'Salto', 'BRA', 'São Paulo', 96348),
(434, 'Ourinhos', 'BRA', 'São Paulo', 96291),
(435, 'Parnamirim', 'BRA', 'Rio Grande do Norte', 96210),
(436, 'Jacobina', 'BRA', 'Bahia', 96131),
(437, 'Coronel Fabriciano', 'BRA', 'Minas Gerais', 95933),
(438, 'Birigui', 'BRA', 'São Paulo', 94685),
(439, 'Tatuí', 'BRA', 'São Paulo', 93897),
(440, 'Ji-Paraná', 'BRA', 'Rondônia', 93346),
(441, 'Bacabal', 'BRA', 'Maranhão', 93121),
(442, 'Cametá', 'BRA', 'Pará', 92779),
(443, 'Guaíba', 'BRA', 'Rio Grande do Sul', 92224),
(444, 'São Lourenço da Mata', 'BRA', 'Pernambuco', 91999),
(445, 'Santana do Livramento', 'BRA', 'Rio Grande do Sul', 91779),
(446, 'Votorantim', 'BRA', 'São Paulo', 91777),
(447, 'Campo Largo', 'BRA', 'Paraná', 91203),
(448, 'Patos', 'BRA', 'Paraíba', 90519),
(449, 'Ituiutaba', 'BRA', 'Minas Gerais', 90507),
(450, 'Corumbá', 'BRA', 'Mato Grosso do Sul', 90111),
(451, 'Palhoça', 'BRA', 'Santa Catarina', 89465),
(452, 'Barra do Piraí', 'BRA', 'Rio de Janeiro', 89388),
(453, 'Bento Gonçalves', 'BRA', 'Rio Grande do Sul', 89254),
(454, 'Poá', 'BRA', 'São Paulo', 89236),
(455, 'Águas Lindas de Goiás', 'BRA', 'Goiás', 89200),
(456, 'London', 'GBR', 'England', 7285000),
(457, 'Birmingham', 'GBR', 'England', 1013000),
(458, 'Glasgow', 'GBR', 'Scotland', 619680),
(459, 'Liverpool', 'GBR', 'England', 461000),
(460, 'Edinburgh', 'GBR', 'Scotland', 450180),
(461, 'Sheffield', 'GBR', 'England', 431607),
(462, 'Manchester', 'GBR', 'England', 430000),
(463, 'Leeds', 'GBR', 'England', 424194),
(464, 'Bristol', 'GBR', 'England', 402000),
(465, 'Cardiff', 'GBR', 'Wales', 321000),
(466, 'Coventry', 'GBR', 'England', 304000),
(467, 'Leicester', 'GBR', 'England', 294000),
(468, 'Bradford', 'GBR', 'England', 289376),
(469, 'Belfast', 'GBR', 'North Ireland', 287500),
(470, 'Nottingham', 'GBR', 'England', 287000),
(471, 'Kingston upon Hull', 'GBR', 'England', 262000),
(472, 'Plymouth', 'GBR', 'England', 253000),
(473, 'Stoke-on-Trent', 'GBR', 'England', 252000),
(474, 'Wolverhampton', 'GBR', 'England', 242000),
(475, 'Derby', 'GBR', 'England', 236000),
(476, 'Swansea', 'GBR', 'Wales', 230000),
(477, 'Southampton', 'GBR', 'England', 216000),
(478, 'Aberdeen', 'GBR', 'Scotland', 213070),
(479, 'Northampton', 'GBR', 'England', 196000),
(480, 'Dudley', 'GBR', 'England', 192171),
(481, 'Portsmouth', 'GBR', 'England', 190000),
(482, 'Newcastle upon Tyne', 'GBR', 'England', 189150),
(483, 'Sunderland', 'GBR', 'England', 183310),
(484, 'Luton', 'GBR', 'England', 183000),
(485, 'Swindon', 'GBR', 'England', 180000),
(486, 'Southend-on-Sea', 'GBR', 'England', 176000),
(487, 'Walsall', 'GBR', 'England', 174739),
(488, 'Bournemouth', 'GBR', 'England', 162000),
(489, 'Peterborough', 'GBR', 'England', 156000),
(490, 'Brighton', 'GBR', 'England', 156124),
(491, 'Blackpool', 'GBR', 'England', 151000),
(492, 'Dundee', 'GBR', 'Scotland', 146690),
(493, 'West Bromwich', 'GBR', 'England', 146386),
(494, 'Reading', 'GBR', 'England', 148000),
(495, 'Oldbury/Smethwick (Warley)', 'GBR', 'England', 145542),
(496, 'Middlesbrough', 'GBR', 'England', 145000),
(497, 'Huddersfield', 'GBR', 'England', 143726),
(498, 'Oxford', 'GBR', 'England', 144000),
(499, 'Poole', 'GBR', 'England', 141000),
(500, 'Bolton', 'GBR', 'England', 139020),
(501, 'Blackburn', 'GBR', 'England', 140000),
(502, 'Newport', 'GBR', 'Wales', 139000),
(503, 'Preston', 'GBR', 'England', 135000),
(504, 'Stockport', 'GBR', 'England', 132813),
(505, 'Norwich', 'GBR', 'England', 124000),
(506, 'Rotherham', 'GBR', 'England', 121380),
(507, 'Cambridge', 'GBR', 'England', 121000),
(508, 'Watford', 'GBR', 'England', 113080),
(509, 'Ipswich', 'GBR', 'England', 114000),
(510, 'Slough', 'GBR', 'England', 112000),
(511, 'Exeter', 'GBR', 'England', 111000),
(512, 'Cheltenham', 'GBR', 'England', 106000),
(513, 'Gloucester', 'GBR', 'England', 107000),
(514, 'Saint Helens', 'GBR', 'England', 106293),
(515, 'Sutton Coldfield', 'GBR', 'England', 106001),
(516, 'York', 'GBR', 'England', 104425),
(517, 'Oldham', 'GBR', 'England', 103931),
(518, 'Basildon', 'GBR', 'England', 100924),
(519, 'Worthing', 'GBR', 'England', 100000),
(520, 'Chelmsford', 'GBR', 'England', 97451),
(521, 'Colchester', 'GBR', 'England', 96063),
(522, 'Crawley', 'GBR', 'England', 97000),
(523, 'Gillingham', 'GBR', 'England', 92000),
(524, 'Solihull', 'GBR', 'England', 94531),
(525, 'Rochdale', 'GBR', 'England', 94313),
(526, 'Birkenhead', 'GBR', 'England', 93087),
(527, 'Worcester', 'GBR', 'England', 95000),
(528, 'Hartlepool', 'GBR', 'England', 92000),
(529, 'Halifax', 'GBR', 'England', 91069),
(530, 'Woking/Byfleet', 'GBR', 'England', 92000),
(531, 'Southport', 'GBR', 'England', 90959),
(532, 'Maidstone', 'GBR', 'England', 90878),
(533, 'Eastbourne', 'GBR', 'England', 90000),
(534, 'Grimsby', 'GBR', 'England', 89000),
(535, 'Saint Helier', 'GBR', 'Jersey', 27523),
(536, 'Douglas', 'GBR', '–', 23487),
(537, 'Road Town', 'VGB', 'Tortola', 8000),
(538, 'Bandar Seri Begawan', 'BRN', 'Brunei and Muara', 21484),
(539, 'Sofija', 'BGR', 'Grad Sofija', 1122302),
(540, 'Plovdiv', 'BGR', 'Plovdiv', 342584),
(541, 'Varna', 'BGR', 'Varna', 299801),
(542, 'Burgas', 'BGR', 'Burgas', 195255),
(543, 'Ruse', 'BGR', 'Ruse', 166467),
(544, 'Stara Zagora', 'BGR', 'Haskovo', 147939),
(545, 'Pleven', 'BGR', 'Lovec', 121952),
(546, 'Sliven', 'BGR', 'Burgas', 105530),
(547, 'Dobric', 'BGR', 'Varna', 100399),
(548, 'Šumen', 'BGR', 'Varna', 94686),
(549, 'Ouagadougou', 'BFA', 'Kadiogo', 824000),
(550, 'Bobo-Dioulasso', 'BFA', 'Houet', 300000),
(551, 'Koudougou', 'BFA', 'Boulkiemdé', 105000),
(552, 'Bujumbura', 'BDI', 'Bujumbura', 300000),
(553, 'George Town', 'CYM', 'Grand Cayman', 19600),
(554, 'Santiago de Chile', 'CHL', 'Santiago', 4703954),
(555, 'Puente Alto', 'CHL', 'Santiago', 386236),
(556, 'Viña del Mar', 'CHL', 'Valparaíso', 312493),
(557, 'Valparaíso', 'CHL', 'Valparaíso', 293800),
(558, 'Talcahuano', 'CHL', 'Bíobío', 277752),
(559, 'Antofagasta', 'CHL', 'Antofagasta', 251429),
(560, 'San Bernardo', 'CHL', 'Santiago', 241910),
(561, 'Temuco', 'CHL', 'La Araucanía', 233041),
(562, 'Concepción', 'CHL', 'Bíobío', 217664),
(563, 'Rancagua', 'CHL', 'O´Higgins', 212977),
(564, 'Arica', 'CHL', 'Tarapacá', 189036),
(565, 'Talca', 'CHL', 'Maule', 187557),
(566, 'Chillán', 'CHL', 'Bíobío', 178182),
(567, 'Iquique', 'CHL', 'Tarapacá', 177892),
(568, 'Los Angeles', 'CHL', 'Bíobío', 158215),
(569, 'Puerto Montt', 'CHL', 'Los Lagos', 152194),
(570, 'Coquimbo', 'CHL', 'Coquimbo', 143353),
(571, 'Osorno', 'CHL', 'Los Lagos', 141468),
(572, 'La Serena', 'CHL', 'Coquimbo', 137409),
(573, 'Calama', 'CHL', 'Antofagasta', 137265),
(574, 'Valdivia', 'CHL', 'Los Lagos', 133106),
(575, 'Punta Arenas', 'CHL', 'Magallanes', 125631),
(576, 'Copiapó', 'CHL', 'Atacama', 120128),
(577, 'Quilpué', 'CHL', 'Valparaíso', 118857),
(578, 'Curicó', 'CHL', 'Maule', 115766),
(579, 'Ovalle', 'CHL', 'Coquimbo', 94854),
(580, 'Coronel', 'CHL', 'Bíobío', 93061),
(581, 'San Pedro de la Paz', 'CHL', 'Bíobío', 91684),
(582, 'Melipilla', 'CHL', 'Santiago', 91056),
(583, 'Avarua', 'COK', 'Rarotonga', 11900),
(584, 'San José', 'CRI', 'San José', 339131),
(585, 'Djibouti', 'DJI', 'Djibouti', 383000),
(586, 'Roseau', 'DMA', 'St George', 16243),
(587, 'Santo Domingo de Guzmán', 'DOM', 'Distrito Nacional', 1609966),
(588, 'Santiago de los Caballeros', 'DOM', 'Santiago', 365463),
(589, 'La Romana', 'DOM', 'La Romana', 140204),
(590, 'San Pedro de Macorís', 'DOM', 'San Pedro de Macorís', 124735),
(591, 'San Francisco de Macorís', 'DOM', 'Duarte', 108485),
(592, 'San Felipe de Puerto Plata', 'DOM', 'Puerto Plata', 89423),
(593, 'Guayaquil', 'ECU', 'Guayas', 2070040),
(594, 'Quito', 'ECU', 'Pichincha', 1573458),
(595, 'Cuenca', 'ECU', 'Azuay', 270353),
(596, 'Machala', 'ECU', 'El Oro', 210368),
(597, 'Santo Domingo de los Colorados', 'ECU', 'Pichincha', 202111),
(598, 'Portoviejo', 'ECU', 'Manabí', 176413),
(599, 'Ambato', 'ECU', 'Tungurahua', 169612),
(600, 'Manta', 'ECU', 'Manabí', 164739),
(601, 'Duran [Eloy Alfaro]', 'ECU', 'Guayas', 152514),
(602, 'Ibarra', 'ECU', 'Imbabura', 130643),
(603, 'Quevedo', 'ECU', 'Los Ríos', 129631),
(604, 'Milagro', 'ECU', 'Guayas', 124177),
(605, 'Loja', 'ECU', 'Loja', 123875),
(606, 'Ríobamba', 'ECU', 'Chimborazo', 123163),
(607, 'Esmeraldas', 'ECU', 'Esmeraldas', 123045),
(608, 'Cairo', 'EGY', 'Kairo', 6789479),
(609, 'Alexandria', 'EGY', 'Aleksandria', 3328196),
(610, 'Giza', 'EGY', 'Giza', 2221868),
(611, 'Shubra al-Khayma', 'EGY', 'al-Qalyubiya', 870716),
(612, 'Port Said', 'EGY', 'Port Said', 469533),
(613, 'Suez', 'EGY', 'Suez', 417610),
(614, 'al-Mahallat al-Kubra', 'EGY', 'al-Gharbiya', 395402),
(615, 'Tanta', 'EGY', 'al-Gharbiya', 371010),
(616, 'al-Mansura', 'EGY', 'al-Daqahliya', 369621),
(617, 'Luxor', 'EGY', 'Luxor', 360503),
(618, 'Asyut', 'EGY', 'Asyut', 343498),
(619, 'Bahtim', 'EGY', 'al-Qalyubiya', 275807),
(620, 'Zagazig', 'EGY', 'al-Sharqiya', 267351),
(621, 'al-Faiyum', 'EGY', 'al-Faiyum', 260964),
(622, 'Ismailia', 'EGY', 'Ismailia', 254477),
(623, 'Kafr al-Dawwar', 'EGY', 'al-Buhayra', 231978),
(624, 'Assuan', 'EGY', 'Assuan', 219017),
(625, 'Damanhur', 'EGY', 'al-Buhayra', 212203),
(626, 'al-Minya', 'EGY', 'al-Minya', 201360),
(627, 'Bani Suwayf', 'EGY', 'Bani Suwayf', 172032),
(628, 'Qina', 'EGY', 'Qina', 171275),
(629, 'Sawhaj', 'EGY', 'Sawhaj', 170125),
(630, 'Shibin al-Kawm', 'EGY', 'al-Minufiya', 159909),
(631, 'Bulaq al-Dakrur', 'EGY', 'Giza', 148787),
(632, 'Banha', 'EGY', 'al-Qalyubiya', 145792),
(633, 'Warraq al-Arab', 'EGY', 'Giza', 127108),
(634, 'Kafr al-Shaykh', 'EGY', 'Kafr al-Shaykh', 124819),
(635, 'Mallawi', 'EGY', 'al-Minya', 119283),
(636, 'Bilbays', 'EGY', 'al-Sharqiya', 113608),
(637, 'Mit Ghamr', 'EGY', 'al-Daqahliya', 101801),
(638, 'al-Arish', 'EGY', 'Shamal Sina', 100447),
(639, 'Talkha', 'EGY', 'al-Daqahliya', 97700),
(640, 'Qalyub', 'EGY', 'al-Qalyubiya', 97200),
(641, 'Jirja', 'EGY', 'Sawhaj', 95400),
(642, 'Idfu', 'EGY', 'Qina', 94200),
(643, 'al-Hawamidiya', 'EGY', 'Giza', 91700),
(644, 'Disuq', 'EGY', 'Kafr al-Shaykh', 91300),
(645, 'San Salvador', 'SLV', 'San Salvador', 415346),
(646, 'Santa Ana', 'SLV', 'Santa Ana', 139389),
(647, 'Mejicanos', 'SLV', 'San Salvador', 138800),
(648, 'Soyapango', 'SLV', 'San Salvador', 129800),
(649, 'San Miguel', 'SLV', 'San Miguel', 127696),
(650, 'Nueva San Salvador', 'SLV', 'La Libertad', 98400),
(651, 'Apopa', 'SLV', 'San Salvador', 88800),
(652, 'Asmara', 'ERI', 'Maekel', 431000),
(653, 'Madrid', 'ESP', 'Madrid', 2879052),
(654, 'Barcelona', 'ESP', 'Katalonia', 1503451),
(655, 'Valencia', 'ESP', 'Valencia', 739412),
(656, 'Sevilla', 'ESP', 'Andalusia', 701927),
(657, 'Zaragoza', 'ESP', 'Aragonia', 603367),
(658, 'Málaga', 'ESP', 'Andalusia', 530553),
(659, 'Bilbao', 'ESP', 'Baskimaa', 357589),
(660, 'Las Palmas de Gran Canaria', 'ESP', 'Canary Islands', 354757),
(661, 'Murcia', 'ESP', 'Murcia', 353504),
(662, 'Palma de Mallorca', 'ESP', 'Balears', 326993),
(663, 'Valladolid', 'ESP', 'Castilla and León', 319998),
(664, 'Córdoba', 'ESP', 'Andalusia', 311708),
(665, 'Vigo', 'ESP', 'Galicia', 283670),
(666, 'Alicante [Alacant]', 'ESP', 'Valencia', 272432),
(667, 'Gijón', 'ESP', 'Asturia', 267980),
(668, 'L´Hospitalet de Llobregat', 'ESP', 'Katalonia', 247986),
(669, 'Granada', 'ESP', 'Andalusia', 244767),
(670, 'A Coruña (La Coruña)', 'ESP', 'Galicia', 243402),
(671, 'Vitoria-Gasteiz', 'ESP', 'Baskimaa', 217154),
(672, 'Santa Cruz de Tenerife', 'ESP', 'Canary Islands', 213050),
(673, 'Badalona', 'ESP', 'Katalonia', 209635),
(674, 'Oviedo', 'ESP', 'Asturia', 200453),
(675, 'Móstoles', 'ESP', 'Madrid', 195351),
(676, 'Elche [Elx]', 'ESP', 'Valencia', 193174),
(677, 'Sabadell', 'ESP', 'Katalonia', 184859),
(678, 'Santander', 'ESP', 'Cantabria', 184165),
(679, 'Jerez de la Frontera', 'ESP', 'Andalusia', 182660),
(680, 'Pamplona [Iruña]', 'ESP', 'Navarra', 180483),
(681, 'Donostia-San Sebastián', 'ESP', 'Baskimaa', 179208),
(682, 'Cartagena', 'ESP', 'Murcia', 177709),
(683, 'Leganés', 'ESP', 'Madrid', 173163),
(684, 'Fuenlabrada', 'ESP', 'Madrid', 171173),
(685, 'Almería', 'ESP', 'Andalusia', 169027),
(686, 'Terrassa', 'ESP', 'Katalonia', 168695),
(687, 'Alcalá de Henares', 'ESP', 'Madrid', 164463),
(688, 'Burgos', 'ESP', 'Castilla and León', 162802),
(689, 'Salamanca', 'ESP', 'Castilla and León', 158720),
(690, 'Albacete', 'ESP', 'Kastilia-La Mancha', 147527),
(691, 'Getafe', 'ESP', 'Madrid', 145371),
(692, 'Cádiz', 'ESP', 'Andalusia', 142449),
(693, 'Alcorcón', 'ESP', 'Madrid', 142048),
(694, 'Huelva', 'ESP', 'Andalusia', 140583),
(695, 'León', 'ESP', 'Castilla and León', 139809),
(696, 'Castellón de la Plana [Castell', 'ESP', 'Valencia', 139712),
(697, 'Badajoz', 'ESP', 'Extremadura', 136613),
(698, '[San Cristóbal de] la Laguna', 'ESP', 'Canary Islands', 127945),
(699, 'Logroño', 'ESP', 'La Rioja', 127093),
(700, 'Santa Coloma de Gramenet', 'ESP', 'Katalonia', 120802),
(701, 'Tarragona', 'ESP', 'Katalonia', 113016),
(702, 'Lleida (Lérida)', 'ESP', 'Katalonia', 112207),
(703, 'Jaén', 'ESP', 'Andalusia', 109247),
(704, 'Ourense (Orense)', 'ESP', 'Galicia', 109120),
(705, 'Mataró', 'ESP', 'Katalonia', 104095),
(706, 'Algeciras', 'ESP', 'Andalusia', 103106),
(707, 'Marbella', 'ESP', 'Andalusia', 101144),
(708, 'Barakaldo', 'ESP', 'Baskimaa', 98212),
(709, 'Dos Hermanas', 'ESP', 'Andalusia', 94591),
(710, 'Santiago de Compostela', 'ESP', 'Galicia', 93745),
(711, 'Torrejón de Ardoz', 'ESP', 'Madrid', 92262),
(712, 'Cape Town', 'ZAF', 'Western Cape', 2352121),
(713, 'Soweto', 'ZAF', 'Gauteng', 904165),
(714, 'Johannesburg', 'ZAF', 'Gauteng', 756653),
(715, 'Port Elizabeth', 'ZAF', 'Eastern Cape', 752319),
(716, 'Pretoria', 'ZAF', 'Gauteng', 658630),
(717, 'Inanda', 'ZAF', 'KwaZulu-Natal', 634065),
(718, 'Durban', 'ZAF', 'KwaZulu-Natal', 566120),
(719, 'Vanderbijlpark', 'ZAF', 'Gauteng', 468931),
(720, 'Kempton Park', 'ZAF', 'Gauteng', 442633),
(721, 'Alberton', 'ZAF', 'Gauteng', 410102),
(722, 'Pinetown', 'ZAF', 'KwaZulu-Natal', 378810),
(723, 'Pietermaritzburg', 'ZAF', 'KwaZulu-Natal', 370190),
(724, 'Benoni', 'ZAF', 'Gauteng', 365467),
(725, 'Randburg', 'ZAF', 'Gauteng', 341288),
(726, 'Umlazi', 'ZAF', 'KwaZulu-Natal', 339233),
(727, 'Bloemfontein', 'ZAF', 'Free State', 334341),
(728, 'Vereeniging', 'ZAF', 'Gauteng', 328535),
(729, 'Wonderboom', 'ZAF', 'Gauteng', 283289),
(730, 'Roodepoort', 'ZAF', 'Gauteng', 279340),
(731, 'Boksburg', 'ZAF', 'Gauteng', 262648),
(732, 'Klerksdorp', 'ZAF', 'North West', 261911),
(733, 'Soshanguve', 'ZAF', 'Gauteng', 242727),
(734, 'Newcastle', 'ZAF', 'KwaZulu-Natal', 222993),
(735, 'East London', 'ZAF', 'Eastern Cape', 221047),
(736, 'Welkom', 'ZAF', 'Free State', 203296),
(737, 'Kimberley', 'ZAF', 'Northern Cape', 197254),
(738, 'Uitenhage', 'ZAF', 'Eastern Cape', 192120),
(739, 'Chatsworth', 'ZAF', 'KwaZulu-Natal', 189885),
(740, 'Mdantsane', 'ZAF', 'Eastern Cape', 182639),
(741, 'Krugersdorp', 'ZAF', 'Gauteng', 181503),
(742, 'Botshabelo', 'ZAF', 'Free State', 177971),
(743, 'Brakpan', 'ZAF', 'Gauteng', 171363),
(744, 'Witbank', 'ZAF', 'Mpumalanga', 167183),
(745, 'Oberholzer', 'ZAF', 'Gauteng', 164367),
(746, 'Germiston', 'ZAF', 'Gauteng', 164252),
(747, 'Springs', 'ZAF', 'Gauteng', 162072),
(748, 'Westonaria', 'ZAF', 'Gauteng', 159632),
(749, 'Randfontein', 'ZAF', 'Gauteng', 120838),
(750, 'Paarl', 'ZAF', 'Western Cape', 105768),
(751, 'Potchefstroom', 'ZAF', 'North West', 101817),
(752, 'Rustenburg', 'ZAF', 'North West', 97008),
(753, 'Nigel', 'ZAF', 'Gauteng', 96734),
(754, 'George', 'ZAF', 'Western Cape', 93818),
(755, 'Ladysmith', 'ZAF', 'KwaZulu-Natal', 89292),
(756, 'Addis Abeba', 'ETH', 'Addis Abeba', 2495000),
(757, 'Dire Dawa', 'ETH', 'Dire Dawa', 164851),
(758, 'Nazret', 'ETH', 'Oromia', 127842),
(759, 'Gonder', 'ETH', 'Amhara', 112249),
(760, 'Dese', 'ETH', 'Amhara', 97314),
(761, 'Mekele', 'ETH', 'Tigray', 96938),
(762, 'Bahir Dar', 'ETH', 'Amhara', 96140),
(763, 'Stanley', 'FLK', 'East Falkland', 1636),
(764, 'Suva', 'FJI', 'Central', 77366),
(765, 'Quezon', 'PHL', 'National Capital Reg', 2173831),
(766, 'Manila', 'PHL', 'National Capital Reg', 1581082),
(767, 'Kalookan', 'PHL', 'National Capital Reg', 1177604),
(768, 'Davao', 'PHL', 'Southern Mindanao', 1147116),
(769, 'Cebu', 'PHL', 'Central Visayas', 718821),
(770, 'Zamboanga', 'PHL', 'Western Mindanao', 601794),
(771, 'Pasig', 'PHL', 'National Capital Reg', 505058),
(772, 'Valenzuela', 'PHL', 'National Capital Reg', 485433),
(773, 'Las Piñas', 'PHL', 'National Capital Reg', 472780),
(774, 'Antipolo', 'PHL', 'Southern Tagalog', 470866),
(775, 'Taguig', 'PHL', 'National Capital Reg', 467375),
(776, 'Cagayan de Oro', 'PHL', 'Northern Mindanao', 461877),
(777, 'Parañaque', 'PHL', 'National Capital Reg', 449811),
(778, 'Makati', 'PHL', 'National Capital Reg', 444867),
(779, 'Bacolod', 'PHL', 'Western Visayas', 429076),
(780, 'General Santos', 'PHL', 'Southern Mindanao', 411822),
(781, 'Marikina', 'PHL', 'National Capital Reg', 391170),
(782, 'Dasmariñas', 'PHL', 'Southern Tagalog', 379520),
(783, 'Muntinlupa', 'PHL', 'National Capital Reg', 379310),
(784, 'Iloilo', 'PHL', 'Western Visayas', 365820),
(785, 'Pasay', 'PHL', 'National Capital Reg', 354908),
(786, 'Malabon', 'PHL', 'National Capital Reg', 338855),
(787, 'San José del Monte', 'PHL', 'Central Luzon', 315807),
(788, 'Bacoor', 'PHL', 'Southern Tagalog', 305699),
(789, 'Iligan', 'PHL', 'Central Mindanao', 285061),
(790, 'Calamba', 'PHL', 'Southern Tagalog', 281146),
(791, 'Mandaluyong', 'PHL', 'National Capital Reg', 278474),
(792, 'Butuan', 'PHL', 'Caraga', 267279),
(793, 'Angeles', 'PHL', 'Central Luzon', 263971),
(794, 'Tarlac', 'PHL', 'Central Luzon', 262481),
(795, 'Mandaue', 'PHL', 'Central Visayas', 259728),
(796, 'Baguio', 'PHL', 'CAR', 252386),
(797, 'Batangas', 'PHL', 'Southern Tagalog', 247588),
(798, 'Cainta', 'PHL', 'Southern Tagalog', 242511),
(799, 'San Pedro', 'PHL', 'Southern Tagalog', 231403),
(800, 'Navotas', 'PHL', 'National Capital Reg', 230403),
(801, 'Cabanatuan', 'PHL', 'Central Luzon', 222859),
(802, 'San Fernando', 'PHL', 'Central Luzon', 221857),
(803, 'Lipa', 'PHL', 'Southern Tagalog', 218447),
(804, 'Lapu-Lapu', 'PHL', 'Central Visayas', 217019),
(805, 'San Pablo', 'PHL', 'Southern Tagalog', 207927),
(806, 'Biñan', 'PHL', 'Southern Tagalog', 201186),
(807, 'Taytay', 'PHL', 'Southern Tagalog', 198183),
(808, 'Lucena', 'PHL', 'Southern Tagalog', 196075),
(809, 'Imus', 'PHL', 'Southern Tagalog', 195482),
(810, 'Olongapo', 'PHL', 'Central Luzon', 194260),
(811, 'Binangonan', 'PHL', 'Southern Tagalog', 187691),
(812, 'Santa Rosa', 'PHL', 'Southern Tagalog', 185633),
(813, 'Tagum', 'PHL', 'Southern Mindanao', 179531),
(814, 'Tacloban', 'PHL', 'Eastern Visayas', 178639),
(815, 'Malolos', 'PHL', 'Central Luzon', 175291),
(816, 'Mabalacat', 'PHL', 'Central Luzon', 171045),
(817, 'Cotabato', 'PHL', 'Central Mindanao', 163849),
(818, 'Meycauayan', 'PHL', 'Central Luzon', 163037),
(819, 'Puerto Princesa', 'PHL', 'Southern Tagalog', 161912),
(820, 'Legazpi', 'PHL', 'Bicol', 157010),
(821, 'Silang', 'PHL', 'Southern Tagalog', 156137),
(822, 'Ormoc', 'PHL', 'Eastern Visayas', 154297),
(823, 'San Carlos', 'PHL', 'Ilocos', 154264),
(824, 'Kabankalan', 'PHL', 'Western Visayas', 149769),
(825, 'Talisay', 'PHL', 'Central Visayas', 148110),
(826, 'Valencia', 'PHL', 'Northern Mindanao', 147924),
(827, 'Calbayog', 'PHL', 'Eastern Visayas', 147187),
(828, 'Santa Maria', 'PHL', 'Central Luzon', 144282),
(829, 'Pagadian', 'PHL', 'Western Mindanao', 142515),
(830, 'Cadiz', 'PHL', 'Western Visayas', 141954),
(831, 'Bago', 'PHL', 'Western Visayas', 141721),
(832, 'Toledo', 'PHL', 'Central Visayas', 141174),
(833, 'Naga', 'PHL', 'Bicol', 137810),
(834, 'San Mateo', 'PHL', 'Southern Tagalog', 135603),
(835, 'Panabo', 'PHL', 'Southern Mindanao', 133950),
(836, 'Koronadal', 'PHL', 'Southern Mindanao', 133786),
(837, 'Marawi', 'PHL', 'Central Mindanao', 131090),
(838, 'Dagupan', 'PHL', 'Ilocos', 130328),
(839, 'Sagay', 'PHL', 'Western Visayas', 129765),
(840, 'Roxas', 'PHL', 'Western Visayas', 126352),
(841, 'Lubao', 'PHL', 'Central Luzon', 125699),
(842, 'Digos', 'PHL', 'Southern Mindanao', 125171),
(843, 'San Miguel', 'PHL', 'Central Luzon', 123824),
(844, 'Malaybalay', 'PHL', 'Northern Mindanao', 123672),
(845, 'Tuguegarao', 'PHL', 'Cagayan Valley', 120645),
(846, 'Ilagan', 'PHL', 'Cagayan Valley', 119990),
(847, 'Baliuag', 'PHL', 'Central Luzon', 119675),
(848, 'Surigao', 'PHL', 'Caraga', 118534),
(849, 'San Carlos', 'PHL', 'Western Visayas', 118259),
(850, 'San Juan del Monte', 'PHL', 'National Capital Reg', 117680),
(851, 'Tanauan', 'PHL', 'Southern Tagalog', 117539),
(852, 'Concepcion', 'PHL', 'Central Luzon', 115171),
(853, 'Rodriguez (Montalban)', 'PHL', 'Southern Tagalog', 115167),
(854, 'Sariaya', 'PHL', 'Southern Tagalog', 114568),
(855, 'Malasiqui', 'PHL', 'Ilocos', 113190),
(856, 'General Mariano Alvarez', 'PHL', 'Southern Tagalog', 112446),
(857, 'Urdaneta', 'PHL', 'Ilocos', 111582),
(858, 'Hagonoy', 'PHL', 'Central Luzon', 111425),
(859, 'San Jose', 'PHL', 'Southern Tagalog', 111009),
(860, 'Polomolok', 'PHL', 'Southern Mindanao', 110709),
(861, 'Santiago', 'PHL', 'Cagayan Valley', 110531),
(862, 'Tanza', 'PHL', 'Southern Tagalog', 110517),
(863, 'Ozamis', 'PHL', 'Northern Mindanao', 110420),
(864, 'Mexico', 'PHL', 'Central Luzon', 109481),
(865, 'San Jose', 'PHL', 'Central Luzon', 108254),
(866, 'Silay', 'PHL', 'Western Visayas', 107722),
(867, 'General Trias', 'PHL', 'Southern Tagalog', 107691),
(868, 'Tabaco', 'PHL', 'Bicol', 107166),
(869, 'Cabuyao', 'PHL', 'Southern Tagalog', 106630),
(870, 'Calapan', 'PHL', 'Southern Tagalog', 105910),
(871, 'Mati', 'PHL', 'Southern Mindanao', 105908),
(872, 'Midsayap', 'PHL', 'Central Mindanao', 105760),
(873, 'Cauayan', 'PHL', 'Cagayan Valley', 103952),
(874, 'Gingoog', 'PHL', 'Northern Mindanao', 102379),
(875, 'Dumaguete', 'PHL', 'Central Visayas', 102265),
(876, 'San Fernando', 'PHL', 'Ilocos', 102082),
(877, 'Arayat', 'PHL', 'Central Luzon', 101792),
(878, 'Bayawan (Tulong)', 'PHL', 'Central Visayas', 101391),
(879, 'Kidapawan', 'PHL', 'Central Mindanao', 101205),
(880, 'Daraga (Locsin)', 'PHL', 'Bicol', 101031),
(881, 'Marilao', 'PHL', 'Central Luzon', 101017),
(882, 'Malita', 'PHL', 'Southern Mindanao', 100000),
(883, 'Dipolog', 'PHL', 'Western Mindanao', 99862),
(884, 'Cavite', 'PHL', 'Southern Tagalog', 99367),
(885, 'Danao', 'PHL', 'Central Visayas', 98781),
(886, 'Bislig', 'PHL', 'Caraga', 97860),
(887, 'Talavera', 'PHL', 'Central Luzon', 97329),
(888, 'Guagua', 'PHL', 'Central Luzon', 96858),
(889, 'Bayambang', 'PHL', 'Ilocos', 96609),
(890, 'Nasugbu', 'PHL', 'Southern Tagalog', 96113),
(891, 'Baybay', 'PHL', 'Eastern Visayas', 95630),
(892, 'Capas', 'PHL', 'Central Luzon', 95219),
(893, 'Sultan Kudarat', 'PHL', 'ARMM', 94861),
(894, 'Laoag', 'PHL', 'Ilocos', 94466),
(895, 'Bayugan', 'PHL', 'Caraga', 93623),
(896, 'Malungon', 'PHL', 'Southern Mindanao', 93232),
(897, 'Santa Cruz', 'PHL', 'Southern Tagalog', 92694),
(898, 'Sorsogon', 'PHL', 'Bicol', 92512),
(899, 'Candelaria', 'PHL', 'Southern Tagalog', 92429),
(900, 'Ligao', 'PHL', 'Bicol', 90603),
(901, 'Tórshavn', 'FRO', 'Streymoyar', 14542),
(902, 'Libreville', 'GAB', 'Estuaire', 419000),
(903, 'Serekunda', 'GMB', 'Kombo St Mary', 102600),
(904, 'Banjul', 'GMB', 'Banjul', 42326),
(905, 'Tbilisi', 'GEO', 'Tbilisi', 1235200),
(906, 'Kutaisi', 'GEO', 'Imereti', 240900),
(907, 'Rustavi', 'GEO', 'Kvemo Kartli', 155400),
(908, 'Batumi', 'GEO', 'Adzaria [Atšara]', 137700),
(909, 'Sohumi', 'GEO', 'Abhasia [Aphazeti]', 111700),
(910, 'Accra', 'GHA', 'Greater Accra', 1070000),
(911, 'Kumasi', 'GHA', 'Ashanti', 385192),
(912, 'Tamale', 'GHA', 'Northern', 151069),
(913, 'Tema', 'GHA', 'Greater Accra', 109975),
(914, 'Sekondi-Takoradi', 'GHA', 'Western', 103653),
(915, 'Gibraltar', 'GIB', '–', 27025),
(916, 'Saint George´s', 'GRD', 'St George', 4621),
(917, 'Nuuk', 'GRL', 'Kitaa', 13445),
(918, 'Les Abymes', 'GLP', 'Grande-Terre', 62947),
(919, 'Basse-Terre', 'GLP', 'Basse-Terre', 12433),
(920, 'Tamuning', 'GUM', '–', 9500),
(921, 'Agaña', 'GUM', '–', 1139),
(922, 'Ciudad de Guatemala', 'GTM', 'Guatemala', 823301),
(923, 'Mixco', 'GTM', 'Guatemala', 209791),
(924, 'Villa Nueva', 'GTM', 'Guatemala', 101295),
(925, 'Quetzaltenango', 'GTM', 'Quetzaltenango', 90801),
(926, 'Conakry', 'GIN', 'Conakry', 1090610),
(927, 'Bissau', 'GNB', 'Bissau', 241000),
(928, 'Georgetown', 'GUY', 'Georgetown', 254000),
(929, 'Port-au-Prince', 'HTI', 'Ouest', 884472),
(930, 'Carrefour', 'HTI', 'Ouest', 290204),
(931, 'Delmas', 'HTI', 'Ouest', 240429),
(932, 'Le-Cap-Haïtien', 'HTI', 'Nord', 102233),
(933, 'Tegucigalpa', 'HND', 'Distrito Central', 813900),
(934, 'San Pedro Sula', 'HND', 'Cortés', 383900),
(935, 'La Ceiba', 'HND', 'Atlántida', 89200),
(936, 'Kowloon and New Kowloon', 'HKG', 'Kowloon and New Kowl', 1987996),
(937, 'Victoria', 'HKG', 'Hongkong', 1312637),
(938, 'Longyearbyen', 'SJM', 'Länsimaa', 1438),
(939, 'Jakarta', 'IDN', 'Jakarta Raya', 9604900),
(940, 'Surabaya', 'IDN', 'East Java', 2663820),
(941, 'Bandung', 'IDN', 'West Java', 2429000),
(942, 'Medan', 'IDN', 'Sumatera Utara', 1843919),
(943, 'Palembang', 'IDN', 'Sumatera Selatan', 1222764),
(944, 'Tangerang', 'IDN', 'West Java', 1198300),
(945, 'Semarang', 'IDN', 'Central Java', 1104405),
(946, 'Ujung Pandang', 'IDN', 'Sulawesi Selatan', 1060257),
(947, 'Malang', 'IDN', 'East Java', 716862),
(948, 'Bandar Lampung', 'IDN', 'Lampung', 680332),
(949, 'Bekasi', 'IDN', 'West Java', 644300),
(950, 'Padang', 'IDN', 'Sumatera Barat', 534474),
(951, 'Surakarta', 'IDN', 'Central Java', 518600),
(952, 'Banjarmasin', 'IDN', 'Kalimantan Selatan', 482931),
(953, 'Pekan Baru', 'IDN', 'Riau', 438638),
(954, 'Denpasar', 'IDN', 'Bali', 435000),
(955, 'Yogyakarta', 'IDN', 'Yogyakarta', 418944),
(956, 'Pontianak', 'IDN', 'Kalimantan Barat', 409632),
(957, 'Samarinda', 'IDN', 'Kalimantan Timur', 399175),
(958, 'Jambi', 'IDN', 'Jambi', 385201),
(959, 'Depok', 'IDN', 'West Java', 365200),
(960, 'Cimahi', 'IDN', 'West Java', 344600),
(961, 'Balikpapan', 'IDN', 'Kalimantan Timur', 338752),
(962, 'Manado', 'IDN', 'Sulawesi Utara', 332288),
(963, 'Mataram', 'IDN', 'Nusa Tenggara Barat', 306600),
(964, 'Pekalongan', 'IDN', 'Central Java', 301504),
(965, 'Tegal', 'IDN', 'Central Java', 289744),
(966, 'Bogor', 'IDN', 'West Java', 285114),
(967, 'Ciputat', 'IDN', 'West Java', 270800),
(968, 'Pondokgede', 'IDN', 'West Java', 263200),
(969, 'Cirebon', 'IDN', 'West Java', 254406),
(970, 'Kediri', 'IDN', 'East Java', 253760),
(971, 'Ambon', 'IDN', 'Molukit', 249312),
(972, 'Jember', 'IDN', 'East Java', 218500),
(973, 'Cilacap', 'IDN', 'Central Java', 206900),
(974, 'Cimanggis', 'IDN', 'West Java', 205100),
(975, 'Pematang Siantar', 'IDN', 'Sumatera Utara', 203056),
(976, 'Purwokerto', 'IDN', 'Central Java', 202500),
(977, 'Ciomas', 'IDN', 'West Java', 187400),
(978, 'Tasikmalaya', 'IDN', 'West Java', 179800),
(979, 'Madiun', 'IDN', 'East Java', 171532),
(980, 'Bengkulu', 'IDN', 'Bengkulu', 146439),
(981, 'Karawang', 'IDN', 'West Java', 145000),
(982, 'Banda Aceh', 'IDN', 'Aceh', 143409),
(983, 'Palu', 'IDN', 'Sulawesi Tengah', 142800),
(984, 'Pasuruan', 'IDN', 'East Java', 134019),
(985, 'Kupang', 'IDN', 'Nusa Tenggara Timur', 129300),
(986, 'Tebing Tinggi', 'IDN', 'Sumatera Utara', 129300),
(987, 'Percut Sei Tuan', 'IDN', 'Sumatera Utara', 129000),
(988, 'Binjai', 'IDN', 'Sumatera Utara', 127222),
(989, 'Sukabumi', 'IDN', 'West Java', 125766),
(990, 'Waru', 'IDN', 'East Java', 124300),
(991, 'Pangkal Pinang', 'IDN', 'Sumatera Selatan', 124000),
(992, 'Magelang', 'IDN', 'Central Java', 123800),
(993, 'Blitar', 'IDN', 'East Java', 122600),
(994, 'Serang', 'IDN', 'West Java', 122400),
(995, 'Probolinggo', 'IDN', 'East Java', 120770),
(996, 'Cilegon', 'IDN', 'West Java', 117000),
(997, 'Cianjur', 'IDN', 'West Java', 114300),
(998, 'Ciparay', 'IDN', 'West Java', 111500),
(999, 'Lhokseumawe', 'IDN', 'Aceh', 109600),
(1000, 'Taman', 'IDN', 'East Java', 107000),
(1001, 'Depok', 'IDN', 'Yogyakarta', 106800),
(1002, 'Citeureup', 'IDN', 'West Java', 105100),
(1003, 'Pemalang', 'IDN', 'Central Java', 103500),
(1004, 'Klaten', 'IDN', 'Central Java', 103300),
(1005, 'Salatiga', 'IDN', 'Central Java', 103000),
(1006, 'Cibinong', 'IDN', 'West Java', 101300),
(1007, 'Palangka Raya', 'IDN', 'Kalimantan Tengah', 99693),
(1008, 'Mojokerto', 'IDN', 'East Java', 96626),
(1009, 'Purwakarta', 'IDN', 'West Java', 95900),
(1010, 'Garut', 'IDN', 'West Java', 95800),
(1011, 'Kudus', 'IDN', 'Central Java', 95300),
(1012, 'Kendari', 'IDN', 'Sulawesi Tenggara', 94800),
(1013, 'Jaya Pura', 'IDN', 'West Irian', 94700),
(1014, 'Gorontalo', 'IDN', 'Sulawesi Utara', 94058),
(1015, 'Majalaya', 'IDN', 'West Java', 93200),
(1016, 'Pondok Aren', 'IDN', 'West Java', 92700),
(1017, 'Jombang', 'IDN', 'East Java', 92600),
(1018, 'Sunggal', 'IDN', 'Sumatera Utara', 92300),
(1019, 'Batam', 'IDN', 'Riau', 91871),
(1020, 'Padang Sidempuan', 'IDN', 'Sumatera Utara', 91200),
(1021, 'Sawangan', 'IDN', 'West Java', 91100),
(1022, 'Banyuwangi', 'IDN', 'East Java', 89900),
(1023, 'Tanjung Pinang', 'IDN', 'Riau', 89900),
(1024, 'Mumbai (Bombay)', 'IND', 'Maharashtra', 10500000),
(1025, 'Delhi', 'IND', 'Delhi', 7206704),
(1026, 'Calcutta [Kolkata]', 'IND', 'West Bengali', 4399819),
(1027, 'Chennai (Madras)', 'IND', 'Tamil Nadu', 3841396),
(1028, 'Hyderabad', 'IND', 'Andhra Pradesh', 2964638),
(1029, 'Ahmedabad', 'IND', 'Gujarat', 2876710),
(1030, 'Bangalore', 'IND', 'Karnataka', 2660088),
(1031, 'Kanpur', 'IND', 'Uttar Pradesh', 1874409),
(1032, 'Nagpur', 'IND', 'Maharashtra', 1624752),
(1033, 'Lucknow', 'IND', 'Uttar Pradesh', 1619115),
(1034, 'Pune', 'IND', 'Maharashtra', 1566651),
(1035, 'Surat', 'IND', 'Gujarat', 1498817),
(1036, 'Jaipur', 'IND', 'Rajasthan', 1458483),
(1037, 'Indore', 'IND', 'Madhya Pradesh', 1091674),
(1038, 'Bhopal', 'IND', 'Madhya Pradesh', 1062771),
(1039, 'Ludhiana', 'IND', 'Punjab', 1042740),
(1040, 'Vadodara (Baroda)', 'IND', 'Gujarat', 1031346),
(1041, 'Kalyan', 'IND', 'Maharashtra', 1014557),
(1042, 'Madurai', 'IND', 'Tamil Nadu', 977856),
(1043, 'Haora (Howrah)', 'IND', 'West Bengali', 950435),
(1044, 'Varanasi (Benares)', 'IND', 'Uttar Pradesh', 929270),
(1045, 'Patna', 'IND', 'Bihar', 917243),
(1046, 'Srinagar', 'IND', 'Jammu and Kashmir', 892506),
(1047, 'Agra', 'IND', 'Uttar Pradesh', 891790),
(1048, 'Coimbatore', 'IND', 'Tamil Nadu', 816321),
(1049, 'Thane (Thana)', 'IND', 'Maharashtra', 803389),
(1050, 'Allahabad', 'IND', 'Uttar Pradesh', 792858),
(1051, 'Meerut', 'IND', 'Uttar Pradesh', 753778),
(1052, 'Vishakhapatnam', 'IND', 'Andhra Pradesh', 752037),
(1053, 'Jabalpur', 'IND', 'Madhya Pradesh', 741927),
(1054, 'Amritsar', 'IND', 'Punjab', 708835),
(1055, 'Faridabad', 'IND', 'Haryana', 703592),
(1056, 'Vijayawada', 'IND', 'Andhra Pradesh', 701827),
(1057, 'Gwalior', 'IND', 'Madhya Pradesh', 690765),
(1058, 'Jodhpur', 'IND', 'Rajasthan', 666279),
(1059, 'Nashik (Nasik)', 'IND', 'Maharashtra', 656925);
INSERT INTO `ciudad` (`CiudadID`, `CiudadNombre`, `PaisCodigo`, `CiudadDistrito`, `CiudadPoblacion`) VALUES
(1060, 'Hubli-Dharwad', 'IND', 'Karnataka', 648298),
(1061, 'Solapur (Sholapur)', 'IND', 'Maharashtra', 604215),
(1062, 'Ranchi', 'IND', 'Jharkhand', 599306),
(1063, 'Bareilly', 'IND', 'Uttar Pradesh', 587211),
(1064, 'Guwahati (Gauhati)', 'IND', 'Assam', 584342),
(1065, 'Shambajinagar (Aurangabad)', 'IND', 'Maharashtra', 573272),
(1066, 'Cochin (Kochi)', 'IND', 'Kerala', 564589),
(1067, 'Rajkot', 'IND', 'Gujarat', 559407),
(1068, 'Kota', 'IND', 'Rajasthan', 537371),
(1069, 'Thiruvananthapuram (Trivandrum', 'IND', 'Kerala', 524006),
(1070, 'Pimpri-Chinchwad', 'IND', 'Maharashtra', 517083),
(1071, 'Jalandhar (Jullundur)', 'IND', 'Punjab', 509510),
(1072, 'Gorakhpur', 'IND', 'Uttar Pradesh', 505566),
(1073, 'Chandigarh', 'IND', 'Chandigarh', 504094),
(1074, 'Mysore', 'IND', 'Karnataka', 480692),
(1075, 'Aligarh', 'IND', 'Uttar Pradesh', 480520),
(1076, 'Guntur', 'IND', 'Andhra Pradesh', 471051),
(1077, 'Jamshedpur', 'IND', 'Jharkhand', 460577),
(1078, 'Ghaziabad', 'IND', 'Uttar Pradesh', 454156),
(1079, 'Warangal', 'IND', 'Andhra Pradesh', 447657),
(1080, 'Raipur', 'IND', 'Chhatisgarh', 438639),
(1081, 'Moradabad', 'IND', 'Uttar Pradesh', 429214),
(1082, 'Durgapur', 'IND', 'West Bengali', 425836),
(1083, 'Amravati', 'IND', 'Maharashtra', 421576),
(1084, 'Calicut (Kozhikode)', 'IND', 'Kerala', 419831),
(1085, 'Bikaner', 'IND', 'Rajasthan', 416289),
(1086, 'Bhubaneswar', 'IND', 'Orissa', 411542),
(1087, 'Kolhapur', 'IND', 'Maharashtra', 406370),
(1088, 'Kataka (Cuttack)', 'IND', 'Orissa', 403418),
(1089, 'Ajmer', 'IND', 'Rajasthan', 402700),
(1090, 'Bhavnagar', 'IND', 'Gujarat', 402338),
(1091, 'Tiruchirapalli', 'IND', 'Tamil Nadu', 387223),
(1092, 'Bhilai', 'IND', 'Chhatisgarh', 386159),
(1093, 'Bhiwandi', 'IND', 'Maharashtra', 379070),
(1094, 'Saharanpur', 'IND', 'Uttar Pradesh', 374945),
(1095, 'Ulhasnagar', 'IND', 'Maharashtra', 369077),
(1096, 'Salem', 'IND', 'Tamil Nadu', 366712),
(1097, 'Ujjain', 'IND', 'Madhya Pradesh', 362266),
(1098, 'Malegaon', 'IND', 'Maharashtra', 342595),
(1099, 'Jamnagar', 'IND', 'Gujarat', 341637),
(1100, 'Bokaro Steel City', 'IND', 'Jharkhand', 333683),
(1101, 'Akola', 'IND', 'Maharashtra', 328034),
(1102, 'Belgaum', 'IND', 'Karnataka', 326399),
(1103, 'Rajahmundry', 'IND', 'Andhra Pradesh', 324851),
(1104, 'Nellore', 'IND', 'Andhra Pradesh', 316606),
(1105, 'Udaipur', 'IND', 'Rajasthan', 308571),
(1106, 'New Bombay', 'IND', 'Maharashtra', 307297),
(1107, 'Bhatpara', 'IND', 'West Bengali', 304952),
(1108, 'Gulbarga', 'IND', 'Karnataka', 304099),
(1109, 'New Delhi', 'IND', 'Delhi', 301297),
(1110, 'Jhansi', 'IND', 'Uttar Pradesh', 300850),
(1111, 'Gaya', 'IND', 'Bihar', 291675),
(1112, 'Kakinada', 'IND', 'Andhra Pradesh', 279980),
(1113, 'Dhule (Dhulia)', 'IND', 'Maharashtra', 278317),
(1114, 'Panihati', 'IND', 'West Bengali', 275990),
(1115, 'Nanded (Nander)', 'IND', 'Maharashtra', 275083),
(1116, 'Mangalore', 'IND', 'Karnataka', 273304),
(1117, 'Dehra Dun', 'IND', 'Uttaranchal', 270159),
(1118, 'Kamarhati', 'IND', 'West Bengali', 266889),
(1119, 'Davangere', 'IND', 'Karnataka', 266082),
(1120, 'Asansol', 'IND', 'West Bengali', 262188),
(1121, 'Bhagalpur', 'IND', 'Bihar', 253225),
(1122, 'Bellary', 'IND', 'Karnataka', 245391),
(1123, 'Barddhaman (Burdwan)', 'IND', 'West Bengali', 245079),
(1124, 'Rampur', 'IND', 'Uttar Pradesh', 243742),
(1125, 'Jalgaon', 'IND', 'Maharashtra', 242193),
(1126, 'Muzaffarpur', 'IND', 'Bihar', 241107),
(1127, 'Nizamabad', 'IND', 'Andhra Pradesh', 241034),
(1128, 'Muzaffarnagar', 'IND', 'Uttar Pradesh', 240609),
(1129, 'Patiala', 'IND', 'Punjab', 238368),
(1130, 'Shahjahanpur', 'IND', 'Uttar Pradesh', 237713),
(1131, 'Kurnool', 'IND', 'Andhra Pradesh', 236800),
(1132, 'Tiruppur (Tirupper)', 'IND', 'Tamil Nadu', 235661),
(1133, 'Rohtak', 'IND', 'Haryana', 233400),
(1134, 'South Dum Dum', 'IND', 'West Bengali', 232811),
(1135, 'Mathura', 'IND', 'Uttar Pradesh', 226691),
(1136, 'Chandrapur', 'IND', 'Maharashtra', 226105),
(1137, 'Barahanagar (Baranagar)', 'IND', 'West Bengali', 224821),
(1138, 'Darbhanga', 'IND', 'Bihar', 218391),
(1139, 'Siliguri (Shiliguri)', 'IND', 'West Bengali', 216950),
(1140, 'Raurkela', 'IND', 'Orissa', 215489),
(1141, 'Ambattur', 'IND', 'Tamil Nadu', 215424),
(1142, 'Panipat', 'IND', 'Haryana', 215218),
(1143, 'Firozabad', 'IND', 'Uttar Pradesh', 215128),
(1144, 'Ichalkaranji', 'IND', 'Maharashtra', 214950),
(1145, 'Jammu', 'IND', 'Jammu and Kashmir', 214737),
(1146, 'Ramagundam', 'IND', 'Andhra Pradesh', 214384),
(1147, 'Eluru', 'IND', 'Andhra Pradesh', 212866),
(1148, 'Brahmapur', 'IND', 'Orissa', 210418),
(1149, 'Alwar', 'IND', 'Rajasthan', 205086),
(1150, 'Pondicherry', 'IND', 'Pondicherry', 203065),
(1151, 'Thanjavur', 'IND', 'Tamil Nadu', 202013),
(1152, 'Bihar Sharif', 'IND', 'Bihar', 201323),
(1153, 'Tuticorin', 'IND', 'Tamil Nadu', 199854),
(1154, 'Imphal', 'IND', 'Manipur', 198535),
(1155, 'Latur', 'IND', 'Maharashtra', 197408),
(1156, 'Sagar', 'IND', 'Madhya Pradesh', 195346),
(1157, 'Farrukhabad-cum-Fatehgarh', 'IND', 'Uttar Pradesh', 194567),
(1158, 'Sangli', 'IND', 'Maharashtra', 193197),
(1159, 'Parbhani', 'IND', 'Maharashtra', 190255),
(1160, 'Nagar Coil', 'IND', 'Tamil Nadu', 190084),
(1161, 'Bijapur', 'IND', 'Karnataka', 186939),
(1162, 'Kukatpalle', 'IND', 'Andhra Pradesh', 185378),
(1163, 'Bally', 'IND', 'West Bengali', 184474),
(1164, 'Bhilwara', 'IND', 'Rajasthan', 183965),
(1165, 'Ratlam', 'IND', 'Madhya Pradesh', 183375),
(1166, 'Avadi', 'IND', 'Tamil Nadu', 183215),
(1167, 'Dindigul', 'IND', 'Tamil Nadu', 182477),
(1168, 'Ahmadnagar', 'IND', 'Maharashtra', 181339),
(1169, 'Bilaspur', 'IND', 'Chhatisgarh', 179833),
(1170, 'Shimoga', 'IND', 'Karnataka', 179258),
(1171, 'Kharagpur', 'IND', 'West Bengali', 177989),
(1172, 'Mira Bhayandar', 'IND', 'Maharashtra', 175372),
(1173, 'Vellore', 'IND', 'Tamil Nadu', 175061),
(1174, 'Jalna', 'IND', 'Maharashtra', 174985),
(1175, 'Burnpur', 'IND', 'West Bengali', 174933),
(1176, 'Anantapur', 'IND', 'Andhra Pradesh', 174924),
(1177, 'Allappuzha (Alleppey)', 'IND', 'Kerala', 174666),
(1178, 'Tirupati', 'IND', 'Andhra Pradesh', 174369),
(1179, 'Karnal', 'IND', 'Haryana', 173751),
(1180, 'Burhanpur', 'IND', 'Madhya Pradesh', 172710),
(1181, 'Hisar (Hissar)', 'IND', 'Haryana', 172677),
(1182, 'Tiruvottiyur', 'IND', 'Tamil Nadu', 172562),
(1183, 'Mirzapur-cum-Vindhyachal', 'IND', 'Uttar Pradesh', 169336),
(1184, 'Secunderabad', 'IND', 'Andhra Pradesh', 167461),
(1185, 'Nadiad', 'IND', 'Gujarat', 167051),
(1186, 'Dewas', 'IND', 'Madhya Pradesh', 164364),
(1187, 'Murwara (Katni)', 'IND', 'Madhya Pradesh', 163431),
(1188, 'Ganganagar', 'IND', 'Rajasthan', 161482),
(1189, 'Vizianagaram', 'IND', 'Andhra Pradesh', 160359),
(1190, 'Erode', 'IND', 'Tamil Nadu', 159232),
(1191, 'Machilipatnam (Masulipatam)', 'IND', 'Andhra Pradesh', 159110),
(1192, 'Bhatinda (Bathinda)', 'IND', 'Punjab', 159042),
(1193, 'Raichur', 'IND', 'Karnataka', 157551),
(1194, 'Agartala', 'IND', 'Tripura', 157358),
(1195, 'Arrah (Ara)', 'IND', 'Bihar', 157082),
(1196, 'Satna', 'IND', 'Madhya Pradesh', 156630),
(1197, 'Lalbahadur Nagar', 'IND', 'Andhra Pradesh', 155500),
(1198, 'Aizawl', 'IND', 'Mizoram', 155240),
(1199, 'Uluberia', 'IND', 'West Bengali', 155172),
(1200, 'Katihar', 'IND', 'Bihar', 154367),
(1201, 'Cuddalore', 'IND', 'Tamil Nadu', 153086),
(1202, 'Hugli-Chinsurah', 'IND', 'West Bengali', 151806),
(1203, 'Dhanbad', 'IND', 'Jharkhand', 151789),
(1204, 'Raiganj', 'IND', 'West Bengali', 151045),
(1205, 'Sambhal', 'IND', 'Uttar Pradesh', 150869),
(1206, 'Durg', 'IND', 'Chhatisgarh', 150645),
(1207, 'Munger (Monghyr)', 'IND', 'Bihar', 150112),
(1208, 'Kanchipuram', 'IND', 'Tamil Nadu', 150100),
(1209, 'North Dum Dum', 'IND', 'West Bengali', 149965),
(1210, 'Karimnagar', 'IND', 'Andhra Pradesh', 148583),
(1211, 'Bharatpur', 'IND', 'Rajasthan', 148519),
(1212, 'Sikar', 'IND', 'Rajasthan', 148272),
(1213, 'Hardwar (Haridwar)', 'IND', 'Uttaranchal', 147305),
(1214, 'Dabgram', 'IND', 'West Bengali', 147217),
(1215, 'Morena', 'IND', 'Madhya Pradesh', 147124),
(1216, 'Noida', 'IND', 'Uttar Pradesh', 146514),
(1217, 'Hapur', 'IND', 'Uttar Pradesh', 146262),
(1218, 'Bhusawal', 'IND', 'Maharashtra', 145143),
(1219, 'Khandwa', 'IND', 'Madhya Pradesh', 145133),
(1220, 'Yamuna Nagar', 'IND', 'Haryana', 144346),
(1221, 'Sonipat (Sonepat)', 'IND', 'Haryana', 143922),
(1222, 'Tenali', 'IND', 'Andhra Pradesh', 143726),
(1223, 'Raurkela Civil Township', 'IND', 'Orissa', 140408),
(1224, 'Kollam (Quilon)', 'IND', 'Kerala', 139852),
(1225, 'Kumbakonam', 'IND', 'Tamil Nadu', 139483),
(1226, 'Ingraj Bazar (English Bazar)', 'IND', 'West Bengali', 139204),
(1227, 'Timkur', 'IND', 'Karnataka', 138903),
(1228, 'Amroha', 'IND', 'Uttar Pradesh', 137061),
(1229, 'Serampore', 'IND', 'West Bengali', 137028),
(1230, 'Chapra', 'IND', 'Bihar', 136877),
(1231, 'Pali', 'IND', 'Rajasthan', 136842),
(1232, 'Maunath Bhanjan', 'IND', 'Uttar Pradesh', 136697),
(1233, 'Adoni', 'IND', 'Andhra Pradesh', 136182),
(1234, 'Jaunpur', 'IND', 'Uttar Pradesh', 136062),
(1235, 'Tirunelveli', 'IND', 'Tamil Nadu', 135825),
(1236, 'Bahraich', 'IND', 'Uttar Pradesh', 135400),
(1237, 'Gadag Betigeri', 'IND', 'Karnataka', 134051),
(1238, 'Proddatur', 'IND', 'Andhra Pradesh', 133914),
(1239, 'Chittoor', 'IND', 'Andhra Pradesh', 133462),
(1240, 'Barrackpur', 'IND', 'West Bengali', 133265),
(1241, 'Bharuch (Broach)', 'IND', 'Gujarat', 133102),
(1242, 'Naihati', 'IND', 'West Bengali', 132701),
(1243, 'Shillong', 'IND', 'Meghalaya', 131719),
(1244, 'Sambalpur', 'IND', 'Orissa', 131138),
(1245, 'Junagadh', 'IND', 'Gujarat', 130484),
(1246, 'Rae Bareli', 'IND', 'Uttar Pradesh', 129904),
(1247, 'Rewa', 'IND', 'Madhya Pradesh', 128981),
(1248, 'Gurgaon', 'IND', 'Haryana', 128608),
(1249, 'Khammam', 'IND', 'Andhra Pradesh', 127992),
(1250, 'Bulandshahr', 'IND', 'Uttar Pradesh', 127201),
(1251, 'Navsari', 'IND', 'Gujarat', 126089),
(1252, 'Malkajgiri', 'IND', 'Andhra Pradesh', 126066),
(1253, 'Midnapore (Medinipur)', 'IND', 'West Bengali', 125498),
(1254, 'Miraj', 'IND', 'Maharashtra', 125407),
(1255, 'Raj Nandgaon', 'IND', 'Chhatisgarh', 125371),
(1256, 'Alandur', 'IND', 'Tamil Nadu', 125244),
(1257, 'Puri', 'IND', 'Orissa', 125199),
(1258, 'Navadwip', 'IND', 'West Bengali', 125037),
(1259, 'Sirsa', 'IND', 'Haryana', 125000),
(1260, 'Korba', 'IND', 'Chhatisgarh', 124501),
(1261, 'Faizabad', 'IND', 'Uttar Pradesh', 124437),
(1262, 'Etawah', 'IND', 'Uttar Pradesh', 124072),
(1263, 'Pathankot', 'IND', 'Punjab', 123930),
(1264, 'Gandhinagar', 'IND', 'Gujarat', 123359),
(1265, 'Palghat (Palakkad)', 'IND', 'Kerala', 123289),
(1266, 'Veraval', 'IND', 'Gujarat', 123000),
(1267, 'Hoshiarpur', 'IND', 'Punjab', 122705),
(1268, 'Ambala', 'IND', 'Haryana', 122596),
(1269, 'Sitapur', 'IND', 'Uttar Pradesh', 121842),
(1270, 'Bhiwani', 'IND', 'Haryana', 121629),
(1271, 'Cuddapah', 'IND', 'Andhra Pradesh', 121463),
(1272, 'Bhimavaram', 'IND', 'Andhra Pradesh', 121314),
(1273, 'Krishnanagar', 'IND', 'West Bengali', 121110),
(1274, 'Chandannagar', 'IND', 'West Bengali', 120378),
(1275, 'Mandya', 'IND', 'Karnataka', 120265),
(1276, 'Dibrugarh', 'IND', 'Assam', 120127),
(1277, 'Nandyal', 'IND', 'Andhra Pradesh', 119813),
(1278, 'Balurghat', 'IND', 'West Bengali', 119796),
(1279, 'Neyveli', 'IND', 'Tamil Nadu', 118080),
(1280, 'Fatehpur', 'IND', 'Uttar Pradesh', 117675),
(1281, 'Mahbubnagar', 'IND', 'Andhra Pradesh', 116833),
(1282, 'Budaun', 'IND', 'Uttar Pradesh', 116695),
(1283, 'Porbandar', 'IND', 'Gujarat', 116671),
(1284, 'Silchar', 'IND', 'Assam', 115483),
(1285, 'Berhampore (Baharampur)', 'IND', 'West Bengali', 115144),
(1286, 'Purnea (Purnia)', 'IND', 'Jharkhand', 114912),
(1287, 'Bankura', 'IND', 'West Bengali', 114876),
(1288, 'Rajapalaiyam', 'IND', 'Tamil Nadu', 114202),
(1289, 'Titagarh', 'IND', 'West Bengali', 114085),
(1290, 'Halisahar', 'IND', 'West Bengali', 114028),
(1291, 'Hathras', 'IND', 'Uttar Pradesh', 113285),
(1292, 'Bhir (Bid)', 'IND', 'Maharashtra', 112434),
(1293, 'Pallavaram', 'IND', 'Tamil Nadu', 111866),
(1294, 'Anand', 'IND', 'Gujarat', 110266),
(1295, 'Mango', 'IND', 'Jharkhand', 110024),
(1296, 'Santipur', 'IND', 'West Bengali', 109956),
(1297, 'Bhind', 'IND', 'Madhya Pradesh', 109755),
(1298, 'Gondiya', 'IND', 'Maharashtra', 109470),
(1299, 'Tiruvannamalai', 'IND', 'Tamil Nadu', 109196),
(1300, 'Yeotmal (Yavatmal)', 'IND', 'Maharashtra', 108578),
(1301, 'Kulti-Barakar', 'IND', 'West Bengali', 108518),
(1302, 'Moga', 'IND', 'Punjab', 108304),
(1303, 'Shivapuri', 'IND', 'Madhya Pradesh', 108277),
(1304, 'Bidar', 'IND', 'Karnataka', 108016),
(1305, 'Guntakal', 'IND', 'Andhra Pradesh', 107592),
(1306, 'Unnao', 'IND', 'Uttar Pradesh', 107425),
(1307, 'Barasat', 'IND', 'West Bengali', 107365),
(1308, 'Tambaram', 'IND', 'Tamil Nadu', 107187),
(1309, 'Abohar', 'IND', 'Punjab', 107163),
(1310, 'Pilibhit', 'IND', 'Uttar Pradesh', 106605),
(1311, 'Valparai', 'IND', 'Tamil Nadu', 106523),
(1312, 'Gonda', 'IND', 'Uttar Pradesh', 106078),
(1313, 'Surendranagar', 'IND', 'Gujarat', 105973),
(1314, 'Qutubullapur', 'IND', 'Andhra Pradesh', 105380),
(1315, 'Beawar', 'IND', 'Rajasthan', 105363),
(1316, 'Hindupur', 'IND', 'Andhra Pradesh', 104651),
(1317, 'Gandhidham', 'IND', 'Gujarat', 104585),
(1318, 'Haldwani-cum-Kathgodam', 'IND', 'Uttaranchal', 104195),
(1319, 'Tellicherry (Thalassery)', 'IND', 'Kerala', 103579),
(1320, 'Wardha', 'IND', 'Maharashtra', 102985),
(1321, 'Rishra', 'IND', 'West Bengali', 102649),
(1322, 'Bhuj', 'IND', 'Gujarat', 102176),
(1323, 'Modinagar', 'IND', 'Uttar Pradesh', 101660),
(1324, 'Gudivada', 'IND', 'Andhra Pradesh', 101656),
(1325, 'Basirhat', 'IND', 'West Bengali', 101409),
(1326, 'Uttarpara-Kotrung', 'IND', 'West Bengali', 100867),
(1327, 'Ongole', 'IND', 'Andhra Pradesh', 100836),
(1328, 'North Barrackpur', 'IND', 'West Bengali', 100513),
(1329, 'Guna', 'IND', 'Madhya Pradesh', 100490),
(1330, 'Haldia', 'IND', 'West Bengali', 100347),
(1331, 'Habra', 'IND', 'West Bengali', 100223),
(1332, 'Kanchrapara', 'IND', 'West Bengali', 100194),
(1333, 'Tonk', 'IND', 'Rajasthan', 100079),
(1334, 'Champdani', 'IND', 'West Bengali', 98818),
(1335, 'Orai', 'IND', 'Uttar Pradesh', 98640),
(1336, 'Pudukkottai', 'IND', 'Tamil Nadu', 98619),
(1337, 'Sasaram', 'IND', 'Bihar', 98220),
(1338, 'Hazaribag', 'IND', 'Jharkhand', 97712),
(1339, 'Palayankottai', 'IND', 'Tamil Nadu', 97662),
(1340, 'Banda', 'IND', 'Uttar Pradesh', 97227),
(1341, 'Godhra', 'IND', 'Gujarat', 96813),
(1342, 'Hospet', 'IND', 'Karnataka', 96322),
(1343, 'Ashoknagar-Kalyangarh', 'IND', 'West Bengali', 96315),
(1344, 'Achalpur', 'IND', 'Maharashtra', 96216),
(1345, 'Patan', 'IND', 'Gujarat', 96109),
(1346, 'Mandasor', 'IND', 'Madhya Pradesh', 95758),
(1347, 'Damoh', 'IND', 'Madhya Pradesh', 95661),
(1348, 'Satara', 'IND', 'Maharashtra', 95133),
(1349, 'Meerut Cantonment', 'IND', 'Uttar Pradesh', 94876),
(1350, 'Dehri', 'IND', 'Bihar', 94526),
(1351, 'Delhi Cantonment', 'IND', 'Delhi', 94326),
(1352, 'Chhindwara', 'IND', 'Madhya Pradesh', 93731),
(1353, 'Bansberia', 'IND', 'West Bengali', 93447),
(1354, 'Nagaon', 'IND', 'Assam', 93350),
(1355, 'Kanpur Cantonment', 'IND', 'Uttar Pradesh', 93109),
(1356, 'Vidisha', 'IND', 'Madhya Pradesh', 92917),
(1357, 'Bettiah', 'IND', 'Bihar', 92583),
(1358, 'Purulia', 'IND', 'Jharkhand', 92574),
(1359, 'Hassan', 'IND', 'Karnataka', 90803),
(1360, 'Ambala Sadar', 'IND', 'Haryana', 90712),
(1361, 'Baidyabati', 'IND', 'West Bengali', 90601),
(1362, 'Morvi', 'IND', 'Gujarat', 90357),
(1363, 'Raigarh', 'IND', 'Chhatisgarh', 89166),
(1364, 'Vejalpur', 'IND', 'Gujarat', 89053),
(1365, 'Baghdad', 'IRQ', 'Baghdad', 4336000),
(1366, 'Mosul', 'IRQ', 'Ninawa', 879000),
(1367, 'Irbil', 'IRQ', 'Irbil', 485968),
(1368, 'Kirkuk', 'IRQ', 'al-Tamim', 418624),
(1369, 'Basra', 'IRQ', 'Basra', 406296),
(1370, 'al-Sulaymaniya', 'IRQ', 'al-Sulaymaniya', 364096),
(1371, 'al-Najaf', 'IRQ', 'al-Najaf', 309010),
(1372, 'Karbala', 'IRQ', 'Karbala', 296705),
(1373, 'al-Hilla', 'IRQ', 'Babil', 268834),
(1374, 'al-Nasiriya', 'IRQ', 'DhiQar', 265937),
(1375, 'al-Amara', 'IRQ', 'Maysan', 208797),
(1376, 'al-Diwaniya', 'IRQ', 'al-Qadisiya', 196519),
(1377, 'al-Ramadi', 'IRQ', 'al-Anbar', 192556),
(1378, 'al-Kut', 'IRQ', 'Wasit', 183183),
(1379, 'Baquba', 'IRQ', 'Diyala', 114516),
(1380, 'Teheran', 'IRN', 'Teheran', 6758845),
(1381, 'Mashhad', 'IRN', 'Khorasan', 1887405),
(1382, 'Esfahan', 'IRN', 'Esfahan', 1266072),
(1383, 'Tabriz', 'IRN', 'East Azerbaidzan', 1191043),
(1384, 'Shiraz', 'IRN', 'Fars', 1053025),
(1385, 'Karaj', 'IRN', 'Teheran', 940968),
(1386, 'Ahvaz', 'IRN', 'Khuzestan', 804980),
(1387, 'Qom', 'IRN', 'Qom', 777677),
(1388, 'Kermanshah', 'IRN', 'Kermanshah', 692986),
(1389, 'Urmia', 'IRN', 'West Azerbaidzan', 435200),
(1390, 'Zahedan', 'IRN', 'Sistan va Baluchesta', 419518),
(1391, 'Rasht', 'IRN', 'Gilan', 417748),
(1392, 'Hamadan', 'IRN', 'Hamadan', 401281),
(1393, 'Kerman', 'IRN', 'Kerman', 384991),
(1394, 'Arak', 'IRN', 'Markazi', 380755),
(1395, 'Ardebil', 'IRN', 'Ardebil', 340386),
(1396, 'Yazd', 'IRN', 'Yazd', 326776),
(1397, 'Qazvin', 'IRN', 'Qazvin', 291117),
(1398, 'Zanjan', 'IRN', 'Zanjan', 286295),
(1399, 'Sanandaj', 'IRN', 'Kordestan', 277808),
(1400, 'Bandar-e-Abbas', 'IRN', 'Hormozgan', 273578),
(1401, 'Khorramabad', 'IRN', 'Lorestan', 272815),
(1402, 'Eslamshahr', 'IRN', 'Teheran', 265450),
(1403, 'Borujerd', 'IRN', 'Lorestan', 217804),
(1404, 'Abadan', 'IRN', 'Khuzestan', 206073),
(1405, 'Dezful', 'IRN', 'Khuzestan', 202639),
(1406, 'Kashan', 'IRN', 'Esfahan', 201372),
(1407, 'Sari', 'IRN', 'Mazandaran', 195882),
(1408, 'Gorgan', 'IRN', 'Golestan', 188710),
(1409, 'Najafabad', 'IRN', 'Esfahan', 178498),
(1410, 'Sabzevar', 'IRN', 'Khorasan', 170738),
(1411, 'Khomeynishahr', 'IRN', 'Esfahan', 165888),
(1412, 'Amol', 'IRN', 'Mazandaran', 159092),
(1413, 'Neyshabur', 'IRN', 'Khorasan', 158847),
(1414, 'Babol', 'IRN', 'Mazandaran', 158346),
(1415, 'Khoy', 'IRN', 'West Azerbaidzan', 148944),
(1416, 'Malayer', 'IRN', 'Hamadan', 144373),
(1417, 'Bushehr', 'IRN', 'Bushehr', 143641),
(1418, 'Qaemshahr', 'IRN', 'Mazandaran', 143286),
(1419, 'Qarchak', 'IRN', 'Teheran', 142690),
(1420, 'Qods', 'IRN', 'Teheran', 138278),
(1421, 'Sirjan', 'IRN', 'Kerman', 135024),
(1422, 'Bojnurd', 'IRN', 'Khorasan', 134835),
(1423, 'Maragheh', 'IRN', 'East Azerbaidzan', 132318),
(1424, 'Birjand', 'IRN', 'Khorasan', 127608),
(1425, 'Ilam', 'IRN', 'Ilam', 126346),
(1426, 'Bukan', 'IRN', 'West Azerbaidzan', 120020),
(1427, 'Masjed-e-Soleyman', 'IRN', 'Khuzestan', 116883),
(1428, 'Saqqez', 'IRN', 'Kordestan', 115394),
(1429, 'Gonbad-e Qabus', 'IRN', 'Mazandaran', 111253),
(1430, 'Saveh', 'IRN', 'Qom', 111245),
(1431, 'Mahabad', 'IRN', 'West Azerbaidzan', 107799),
(1432, 'Varamin', 'IRN', 'Teheran', 107233),
(1433, 'Andimeshk', 'IRN', 'Khuzestan', 106923),
(1434, 'Khorramshahr', 'IRN', 'Khuzestan', 105636),
(1435, 'Shahrud', 'IRN', 'Semnan', 104765),
(1436, 'Marv Dasht', 'IRN', 'Fars', 103579),
(1437, 'Zabol', 'IRN', 'Sistan va Baluchesta', 100887),
(1438, 'Shahr-e Kord', 'IRN', 'Chaharmahal va Bakht', 100477),
(1439, 'Bandar-e Anzali', 'IRN', 'Gilan', 98500),
(1440, 'Rafsanjan', 'IRN', 'Kerman', 98300),
(1441, 'Marand', 'IRN', 'East Azerbaidzan', 96400),
(1442, 'Torbat-e Heydariyeh', 'IRN', 'Khorasan', 94600),
(1443, 'Jahrom', 'IRN', 'Fars', 94200),
(1444, 'Semnan', 'IRN', 'Semnan', 91045),
(1445, 'Miandoab', 'IRN', 'West Azerbaidzan', 90100),
(1446, 'Qomsheh', 'IRN', 'Esfahan', 89800),
(1447, 'Dublin', 'IRL', 'Leinster', 481854),
(1448, 'Cork', 'IRL', 'Munster', 127187),
(1449, 'Reykjavík', 'ISL', 'Höfuðborgarsvæði', 109184),
(1450, 'Jerusalem', 'ISR', 'Jerusalem', 633700),
(1451, 'Tel Aviv-Jaffa', 'ISR', 'Tel Aviv', 348100),
(1452, 'Haifa', 'ISR', 'Haifa', 265700),
(1453, 'Rishon Le Ziyyon', 'ISR', 'Ha Merkaz', 188200),
(1454, 'Beerseba', 'ISR', 'Ha Darom', 163700),
(1455, 'Holon', 'ISR', 'Tel Aviv', 163100),
(1456, 'Petah Tiqwa', 'ISR', 'Ha Merkaz', 159400),
(1457, 'Ashdod', 'ISR', 'Ha Darom', 155800),
(1458, 'Netanya', 'ISR', 'Ha Merkaz', 154900),
(1459, 'Bat Yam', 'ISR', 'Tel Aviv', 137000),
(1460, 'Bene Beraq', 'ISR', 'Tel Aviv', 133900),
(1461, 'Ramat Gan', 'ISR', 'Tel Aviv', 126900),
(1462, 'Ashqelon', 'ISR', 'Ha Darom', 92300),
(1463, 'Rehovot', 'ISR', 'Ha Merkaz', 90300),
(1464, 'Roma', 'ITA', 'Latium', 2643581),
(1465, 'Milano', 'ITA', 'Lombardia', 1300977),
(1466, 'Napoli', 'ITA', 'Campania', 1002619),
(1467, 'Torino', 'ITA', 'Piemonte', 903705),
(1468, 'Palermo', 'ITA', 'Sisilia', 683794),
(1469, 'Genova', 'ITA', 'Liguria', 636104),
(1470, 'Bologna', 'ITA', 'Emilia-Romagna', 381161),
(1471, 'Firenze', 'ITA', 'Toscana', 376662),
(1472, 'Catania', 'ITA', 'Sisilia', 337862),
(1473, 'Bari', 'ITA', 'Apulia', 331848),
(1474, 'Venezia', 'ITA', 'Veneto', 277305),
(1475, 'Messina', 'ITA', 'Sisilia', 259156),
(1476, 'Verona', 'ITA', 'Veneto', 255268),
(1477, 'Trieste', 'ITA', 'Friuli-Venezia Giuli', 216459),
(1478, 'Padova', 'ITA', 'Veneto', 211391),
(1479, 'Taranto', 'ITA', 'Apulia', 208214),
(1480, 'Brescia', 'ITA', 'Lombardia', 191317),
(1481, 'Reggio di Calabria', 'ITA', 'Calabria', 179617),
(1482, 'Modena', 'ITA', 'Emilia-Romagna', 176022),
(1483, 'Prato', 'ITA', 'Toscana', 172473),
(1484, 'Parma', 'ITA', 'Emilia-Romagna', 168717),
(1485, 'Cagliari', 'ITA', 'Sardinia', 165926),
(1486, 'Livorno', 'ITA', 'Toscana', 161673),
(1487, 'Perugia', 'ITA', 'Umbria', 156673),
(1488, 'Foggia', 'ITA', 'Apulia', 154891),
(1489, 'Reggio nell´ Emilia', 'ITA', 'Emilia-Romagna', 143664),
(1490, 'Salerno', 'ITA', 'Campania', 142055),
(1491, 'Ravenna', 'ITA', 'Emilia-Romagna', 138418),
(1492, 'Ferrara', 'ITA', 'Emilia-Romagna', 132127),
(1493, 'Rimini', 'ITA', 'Emilia-Romagna', 131062),
(1494, 'Syrakusa', 'ITA', 'Sisilia', 126282),
(1495, 'Sassari', 'ITA', 'Sardinia', 120803),
(1496, 'Monza', 'ITA', 'Lombardia', 119516),
(1497, 'Bergamo', 'ITA', 'Lombardia', 117837),
(1498, 'Pescara', 'ITA', 'Abruzzit', 115698),
(1499, 'Latina', 'ITA', 'Latium', 114099),
(1500, 'Vicenza', 'ITA', 'Veneto', 109738),
(1501, 'Terni', 'ITA', 'Umbria', 107770),
(1502, 'Forlì', 'ITA', 'Emilia-Romagna', 107475),
(1503, 'Trento', 'ITA', 'Trentino-Alto Adige', 104906),
(1504, 'Novara', 'ITA', 'Piemonte', 102037),
(1505, 'Piacenza', 'ITA', 'Emilia-Romagna', 98384),
(1506, 'Ancona', 'ITA', 'Marche', 98329),
(1507, 'Lecce', 'ITA', 'Apulia', 98208),
(1508, 'Bolzano', 'ITA', 'Trentino-Alto Adige', 97232),
(1509, 'Catanzaro', 'ITA', 'Calabria', 96700),
(1510, 'La Spezia', 'ITA', 'Liguria', 95504),
(1511, 'Udine', 'ITA', 'Friuli-Venezia Giuli', 94932),
(1512, 'Torre del Greco', 'ITA', 'Campania', 94505),
(1513, 'Andria', 'ITA', 'Apulia', 94443),
(1514, 'Brindisi', 'ITA', 'Apulia', 93454),
(1515, 'Giugliano in Campania', 'ITA', 'Campania', 93286),
(1516, 'Pisa', 'ITA', 'Toscana', 92379),
(1517, 'Barletta', 'ITA', 'Apulia', 91904),
(1518, 'Arezzo', 'ITA', 'Toscana', 91729),
(1519, 'Alessandria', 'ITA', 'Piemonte', 90289),
(1520, 'Cesena', 'ITA', 'Emilia-Romagna', 89852),
(1521, 'Pesaro', 'ITA', 'Marche', 88987),
(1522, 'Dili', 'TMP', 'Dili', 47900),
(1523, 'Wien', 'AUT', 'Wien', 1608144),
(1524, 'Graz', 'AUT', 'Steiermark', 240967),
(1525, 'Linz', 'AUT', 'North Austria', 188022),
(1526, 'Salzburg', 'AUT', 'Salzburg', 144247),
(1527, 'Innsbruck', 'AUT', 'Tiroli', 111752),
(1528, 'Klagenfurt', 'AUT', 'Kärnten', 91141),
(1529, 'Spanish Town', 'JAM', 'St. Catherine', 110379),
(1530, 'Kingston', 'JAM', 'St. Andrew', 103962),
(1531, 'Portmore', 'JAM', 'St. Andrew', 99799),
(1532, 'Tokyo', 'JPN', 'Tokyo-to', 7980230),
(1533, 'Jokohama [Yokohama]', 'JPN', 'Kanagawa', 3339594),
(1534, 'Osaka', 'JPN', 'Osaka', 2595674),
(1535, 'Nagoya', 'JPN', 'Aichi', 2154376),
(1536, 'Sapporo', 'JPN', 'Hokkaido', 1790886),
(1537, 'Kioto', 'JPN', 'Kyoto', 1461974),
(1538, 'Kobe', 'JPN', 'Hyogo', 1425139),
(1539, 'Fukuoka', 'JPN', 'Fukuoka', 1308379),
(1540, 'Kawasaki', 'JPN', 'Kanagawa', 1217359),
(1541, 'Hiroshima', 'JPN', 'Hiroshima', 1119117),
(1542, 'Kitakyushu', 'JPN', 'Fukuoka', 1016264),
(1543, 'Sendai', 'JPN', 'Miyagi', 989975),
(1544, 'Chiba', 'JPN', 'Chiba', 863930),
(1545, 'Sakai', 'JPN', 'Osaka', 797735),
(1546, 'Kumamoto', 'JPN', 'Kumamoto', 656734),
(1547, 'Okayama', 'JPN', 'Okayama', 624269),
(1548, 'Sagamihara', 'JPN', 'Kanagawa', 586300),
(1549, 'Hamamatsu', 'JPN', 'Shizuoka', 568796),
(1550, 'Kagoshima', 'JPN', 'Kagoshima', 549977),
(1551, 'Funabashi', 'JPN', 'Chiba', 545299),
(1552, 'Higashiosaka', 'JPN', 'Osaka', 517785),
(1553, 'Hachioji', 'JPN', 'Tokyo-to', 513451),
(1554, 'Niigata', 'JPN', 'Niigata', 497464),
(1555, 'Amagasaki', 'JPN', 'Hyogo', 481434),
(1556, 'Himeji', 'JPN', 'Hyogo', 475167),
(1557, 'Shizuoka', 'JPN', 'Shizuoka', 473854),
(1558, 'Urawa', 'JPN', 'Saitama', 469675),
(1559, 'Matsuyama', 'JPN', 'Ehime', 466133),
(1560, 'Matsudo', 'JPN', 'Chiba', 461126),
(1561, 'Kanazawa', 'JPN', 'Ishikawa', 455386),
(1562, 'Kawaguchi', 'JPN', 'Saitama', 452155),
(1563, 'Ichikawa', 'JPN', 'Chiba', 441893),
(1564, 'Omiya', 'JPN', 'Saitama', 441649),
(1565, 'Utsunomiya', 'JPN', 'Tochigi', 440353),
(1566, 'Oita', 'JPN', 'Oita', 433401),
(1567, 'Nagasaki', 'JPN', 'Nagasaki', 432759),
(1568, 'Yokosuka', 'JPN', 'Kanagawa', 430200),
(1569, 'Kurashiki', 'JPN', 'Okayama', 425103),
(1570, 'Gifu', 'JPN', 'Gifu', 408007),
(1571, 'Hirakata', 'JPN', 'Osaka', 403151),
(1572, 'Nishinomiya', 'JPN', 'Hyogo', 397618),
(1573, 'Toyonaka', 'JPN', 'Osaka', 396689),
(1574, 'Wakayama', 'JPN', 'Wakayama', 391233),
(1575, 'Fukuyama', 'JPN', 'Hiroshima', 376921),
(1576, 'Fujisawa', 'JPN', 'Kanagawa', 372840),
(1577, 'Asahikawa', 'JPN', 'Hokkaido', 364813),
(1578, 'Machida', 'JPN', 'Tokyo-to', 364197),
(1579, 'Nara', 'JPN', 'Nara', 362812),
(1580, 'Takatsuki', 'JPN', 'Osaka', 361747),
(1581, 'Iwaki', 'JPN', 'Fukushima', 361737),
(1582, 'Nagano', 'JPN', 'Nagano', 361391),
(1583, 'Toyohashi', 'JPN', 'Aichi', 360066),
(1584, 'Toyota', 'JPN', 'Aichi', 346090),
(1585, 'Suita', 'JPN', 'Osaka', 345750),
(1586, 'Takamatsu', 'JPN', 'Kagawa', 332471),
(1587, 'Koriyama', 'JPN', 'Fukushima', 330335),
(1588, 'Okazaki', 'JPN', 'Aichi', 328711),
(1589, 'Kawagoe', 'JPN', 'Saitama', 327211),
(1590, 'Tokorozawa', 'JPN', 'Saitama', 325809),
(1591, 'Toyama', 'JPN', 'Toyama', 325790),
(1592, 'Kochi', 'JPN', 'Kochi', 324710),
(1593, 'Kashiwa', 'JPN', 'Chiba', 320296),
(1594, 'Akita', 'JPN', 'Akita', 314440),
(1595, 'Miyazaki', 'JPN', 'Miyazaki', 303784),
(1596, 'Koshigaya', 'JPN', 'Saitama', 301446),
(1597, 'Naha', 'JPN', 'Okinawa', 299851),
(1598, 'Aomori', 'JPN', 'Aomori', 295969),
(1599, 'Hakodate', 'JPN', 'Hokkaido', 294788),
(1600, 'Akashi', 'JPN', 'Hyogo', 292253),
(1601, 'Yokkaichi', 'JPN', 'Mie', 288173),
(1602, 'Fukushima', 'JPN', 'Fukushima', 287525),
(1603, 'Morioka', 'JPN', 'Iwate', 287353),
(1604, 'Maebashi', 'JPN', 'Gumma', 284473),
(1605, 'Kasugai', 'JPN', 'Aichi', 282348),
(1606, 'Otsu', 'JPN', 'Shiga', 282070),
(1607, 'Ichihara', 'JPN', 'Chiba', 279280),
(1608, 'Yao', 'JPN', 'Osaka', 276421),
(1609, 'Ichinomiya', 'JPN', 'Aichi', 270828),
(1610, 'Tokushima', 'JPN', 'Tokushima', 269649),
(1611, 'Kakogawa', 'JPN', 'Hyogo', 266281),
(1612, 'Ibaraki', 'JPN', 'Osaka', 261020),
(1613, 'Neyagawa', 'JPN', 'Osaka', 257315),
(1614, 'Shimonoseki', 'JPN', 'Yamaguchi', 257263),
(1615, 'Yamagata', 'JPN', 'Yamagata', 255617),
(1616, 'Fukui', 'JPN', 'Fukui', 254818),
(1617, 'Hiratsuka', 'JPN', 'Kanagawa', 254207),
(1618, 'Mito', 'JPN', 'Ibaragi', 246559),
(1619, 'Sasebo', 'JPN', 'Nagasaki', 244240),
(1620, 'Hachinohe', 'JPN', 'Aomori', 242979),
(1621, 'Takasaki', 'JPN', 'Gumma', 239124),
(1622, 'Shimizu', 'JPN', 'Shizuoka', 239123),
(1623, 'Kurume', 'JPN', 'Fukuoka', 235611),
(1624, 'Fuji', 'JPN', 'Shizuoka', 231527),
(1625, 'Soka', 'JPN', 'Saitama', 222768),
(1626, 'Fuchu', 'JPN', 'Tokyo-to', 220576),
(1627, 'Chigasaki', 'JPN', 'Kanagawa', 216015),
(1628, 'Atsugi', 'JPN', 'Kanagawa', 212407),
(1629, 'Numazu', 'JPN', 'Shizuoka', 211382),
(1630, 'Ageo', 'JPN', 'Saitama', 209442),
(1631, 'Yamato', 'JPN', 'Kanagawa', 208234),
(1632, 'Matsumoto', 'JPN', 'Nagano', 206801),
(1633, 'Kure', 'JPN', 'Hiroshima', 206504),
(1634, 'Takarazuka', 'JPN', 'Hyogo', 205993),
(1635, 'Kasukabe', 'JPN', 'Saitama', 201838),
(1636, 'Chofu', 'JPN', 'Tokyo-to', 201585),
(1637, 'Odawara', 'JPN', 'Kanagawa', 200171),
(1638, 'Kofu', 'JPN', 'Yamanashi', 199753),
(1639, 'Kushiro', 'JPN', 'Hokkaido', 197608),
(1640, 'Kishiwada', 'JPN', 'Osaka', 197276),
(1641, 'Hitachi', 'JPN', 'Ibaragi', 196622),
(1642, 'Nagaoka', 'JPN', 'Niigata', 192407),
(1643, 'Itami', 'JPN', 'Hyogo', 190886),
(1644, 'Uji', 'JPN', 'Kyoto', 188735),
(1645, 'Suzuka', 'JPN', 'Mie', 184061),
(1646, 'Hirosaki', 'JPN', 'Aomori', 177522),
(1647, 'Ube', 'JPN', 'Yamaguchi', 175206),
(1648, 'Kodaira', 'JPN', 'Tokyo-to', 174984),
(1649, 'Takaoka', 'JPN', 'Toyama', 174380),
(1650, 'Obihiro', 'JPN', 'Hokkaido', 173685),
(1651, 'Tomakomai', 'JPN', 'Hokkaido', 171958),
(1652, 'Saga', 'JPN', 'Saga', 170034),
(1653, 'Sakura', 'JPN', 'Chiba', 168072),
(1654, 'Kamakura', 'JPN', 'Kanagawa', 167661),
(1655, 'Mitaka', 'JPN', 'Tokyo-to', 167268),
(1656, 'Izumi', 'JPN', 'Osaka', 166979),
(1657, 'Hino', 'JPN', 'Tokyo-to', 166770),
(1658, 'Hadano', 'JPN', 'Kanagawa', 166512),
(1659, 'Ashikaga', 'JPN', 'Tochigi', 165243),
(1660, 'Tsu', 'JPN', 'Mie', 164543),
(1661, 'Sayama', 'JPN', 'Saitama', 162472),
(1662, 'Yachiyo', 'JPN', 'Chiba', 161222),
(1663, 'Tsukuba', 'JPN', 'Ibaragi', 160768),
(1664, 'Tachikawa', 'JPN', 'Tokyo-to', 159430),
(1665, 'Kumagaya', 'JPN', 'Saitama', 157171),
(1666, 'Moriguchi', 'JPN', 'Osaka', 155941),
(1667, 'Otaru', 'JPN', 'Hokkaido', 155784),
(1668, 'Anjo', 'JPN', 'Aichi', 153823),
(1669, 'Narashino', 'JPN', 'Chiba', 152849),
(1670, 'Oyama', 'JPN', 'Tochigi', 152820),
(1671, 'Ogaki', 'JPN', 'Gifu', 151758),
(1672, 'Matsue', 'JPN', 'Shimane', 149821),
(1673, 'Kawanishi', 'JPN', 'Hyogo', 149794),
(1674, 'Hitachinaka', 'JPN', 'Tokyo-to', 148006),
(1675, 'Niiza', 'JPN', 'Saitama', 147744),
(1676, 'Nagareyama', 'JPN', 'Chiba', 147738),
(1677, 'Tottori', 'JPN', 'Tottori', 147523),
(1678, 'Tama', 'JPN', 'Ibaragi', 146712),
(1679, 'Iruma', 'JPN', 'Saitama', 145922),
(1680, 'Ota', 'JPN', 'Gumma', 145317),
(1681, 'Omuta', 'JPN', 'Fukuoka', 142889),
(1682, 'Komaki', 'JPN', 'Aichi', 139827),
(1683, 'Ome', 'JPN', 'Tokyo-to', 139216),
(1684, 'Kadoma', 'JPN', 'Osaka', 138953),
(1685, 'Yamaguchi', 'JPN', 'Yamaguchi', 138210),
(1686, 'Higashimurayama', 'JPN', 'Tokyo-to', 136970),
(1687, 'Yonago', 'JPN', 'Tottori', 136461),
(1688, 'Matsubara', 'JPN', 'Osaka', 135010),
(1689, 'Musashino', 'JPN', 'Tokyo-to', 134426),
(1690, 'Tsuchiura', 'JPN', 'Ibaragi', 134072),
(1691, 'Joetsu', 'JPN', 'Niigata', 133505),
(1692, 'Miyakonojo', 'JPN', 'Miyazaki', 133183),
(1693, 'Misato', 'JPN', 'Saitama', 132957),
(1694, 'Kakamigahara', 'JPN', 'Gifu', 131831),
(1695, 'Daito', 'JPN', 'Osaka', 130594),
(1696, 'Seto', 'JPN', 'Aichi', 130470),
(1697, 'Kariya', 'JPN', 'Aichi', 127969),
(1698, 'Urayasu', 'JPN', 'Chiba', 127550),
(1699, 'Beppu', 'JPN', 'Oita', 127486),
(1700, 'Niihama', 'JPN', 'Ehime', 127207),
(1701, 'Minoo', 'JPN', 'Osaka', 127026),
(1702, 'Fujieda', 'JPN', 'Shizuoka', 126897),
(1703, 'Abiko', 'JPN', 'Chiba', 126670),
(1704, 'Nobeoka', 'JPN', 'Miyazaki', 125547),
(1705, 'Tondabayashi', 'JPN', 'Osaka', 125094),
(1706, 'Ueda', 'JPN', 'Nagano', 124217),
(1707, 'Kashihara', 'JPN', 'Nara', 124013),
(1708, 'Matsusaka', 'JPN', 'Mie', 123582),
(1709, 'Isesaki', 'JPN', 'Gumma', 123285),
(1710, 'Zama', 'JPN', 'Kanagawa', 122046),
(1711, 'Kisarazu', 'JPN', 'Chiba', 121967),
(1712, 'Noda', 'JPN', 'Chiba', 121030),
(1713, 'Ishinomaki', 'JPN', 'Miyagi', 120963),
(1714, 'Fujinomiya', 'JPN', 'Shizuoka', 119714),
(1715, 'Kawachinagano', 'JPN', 'Osaka', 119666),
(1716, 'Imabari', 'JPN', 'Ehime', 119357),
(1717, 'Aizuwakamatsu', 'JPN', 'Fukushima', 119287),
(1718, 'Higashihiroshima', 'JPN', 'Hiroshima', 119166),
(1719, 'Habikino', 'JPN', 'Osaka', 118968),
(1720, 'Ebetsu', 'JPN', 'Hokkaido', 118805),
(1721, 'Hofu', 'JPN', 'Yamaguchi', 118751),
(1722, 'Kiryu', 'JPN', 'Gumma', 118326),
(1723, 'Okinawa', 'JPN', 'Okinawa', 117748),
(1724, 'Yaizu', 'JPN', 'Shizuoka', 117258),
(1725, 'Toyokawa', 'JPN', 'Aichi', 115781),
(1726, 'Ebina', 'JPN', 'Kanagawa', 115571),
(1727, 'Asaka', 'JPN', 'Saitama', 114815),
(1728, 'Higashikurume', 'JPN', 'Tokyo-to', 111666),
(1729, 'Ikoma', 'JPN', 'Nara', 111645),
(1730, 'Kitami', 'JPN', 'Hokkaido', 111295),
(1731, 'Koganei', 'JPN', 'Tokyo-to', 110969),
(1732, 'Iwatsuki', 'JPN', 'Saitama', 110034),
(1733, 'Mishima', 'JPN', 'Shizuoka', 109699),
(1734, 'Handa', 'JPN', 'Aichi', 108600),
(1735, 'Muroran', 'JPN', 'Hokkaido', 108275),
(1736, 'Komatsu', 'JPN', 'Ishikawa', 107937),
(1737, 'Yatsushiro', 'JPN', 'Kumamoto', 107661),
(1738, 'Iida', 'JPN', 'Nagano', 107583),
(1739, 'Tokuyama', 'JPN', 'Yamaguchi', 107078),
(1740, 'Kokubunji', 'JPN', 'Tokyo-to', 106996),
(1741, 'Akishima', 'JPN', 'Tokyo-to', 106914),
(1742, 'Iwakuni', 'JPN', 'Yamaguchi', 106647),
(1743, 'Kusatsu', 'JPN', 'Shiga', 106232),
(1744, 'Kuwana', 'JPN', 'Mie', 106121),
(1745, 'Sanda', 'JPN', 'Hyogo', 105643),
(1746, 'Hikone', 'JPN', 'Shiga', 105508),
(1747, 'Toda', 'JPN', 'Saitama', 103969),
(1748, 'Tajimi', 'JPN', 'Gifu', 103171),
(1749, 'Ikeda', 'JPN', 'Osaka', 102710),
(1750, 'Fukaya', 'JPN', 'Saitama', 102156),
(1751, 'Ise', 'JPN', 'Mie', 101732),
(1752, 'Sakata', 'JPN', 'Yamagata', 101651),
(1753, 'Kasuga', 'JPN', 'Fukuoka', 101344),
(1754, 'Kamagaya', 'JPN', 'Chiba', 100821),
(1755, 'Tsuruoka', 'JPN', 'Yamagata', 100713),
(1756, 'Hoya', 'JPN', 'Tokyo-to', 100313),
(1757, 'Nishio', 'JPN', 'Chiba', 100032),
(1758, 'Tokai', 'JPN', 'Aichi', 99738),
(1759, 'Inazawa', 'JPN', 'Aichi', 98746),
(1760, 'Sakado', 'JPN', 'Saitama', 98221),
(1761, 'Isehara', 'JPN', 'Kanagawa', 98123),
(1762, 'Takasago', 'JPN', 'Hyogo', 97632),
(1763, 'Fujimi', 'JPN', 'Saitama', 96972),
(1764, 'Urasoe', 'JPN', 'Okinawa', 96002),
(1765, 'Yonezawa', 'JPN', 'Yamagata', 95592),
(1766, 'Konan', 'JPN', 'Aichi', 95521),
(1767, 'Yamatokoriyama', 'JPN', 'Nara', 95165),
(1768, 'Maizuru', 'JPN', 'Kyoto', 94784),
(1769, 'Onomichi', 'JPN', 'Hiroshima', 93756),
(1770, 'Higashimatsuyama', 'JPN', 'Saitama', 93342),
(1771, 'Kimitsu', 'JPN', 'Chiba', 93216),
(1772, 'Isahaya', 'JPN', 'Nagasaki', 93058),
(1773, 'Kanuma', 'JPN', 'Tochigi', 93053),
(1774, 'Izumisano', 'JPN', 'Osaka', 92583),
(1775, 'Kameoka', 'JPN', 'Kyoto', 92398),
(1776, 'Mobara', 'JPN', 'Chiba', 91664),
(1777, 'Narita', 'JPN', 'Chiba', 91470),
(1778, 'Kashiwazaki', 'JPN', 'Niigata', 91229),
(1779, 'Tsuyama', 'JPN', 'Okayama', 91170),
(1780, 'Sanaa', 'YEM', 'Sanaa', 503600),
(1781, 'Aden', 'YEM', 'Aden', 398300),
(1782, 'Taizz', 'YEM', 'Taizz', 317600),
(1783, 'Hodeida', 'YEM', 'Hodeida', 298500),
(1784, 'al-Mukalla', 'YEM', 'Hadramawt', 122400),
(1785, 'Ibb', 'YEM', 'Ibb', 103300),
(1786, 'Amman', 'JOR', 'Amman', 1000000),
(1787, 'al-Zarqa', 'JOR', 'al-Zarqa', 389815),
(1788, 'Irbid', 'JOR', 'Irbid', 231511),
(1789, 'al-Rusayfa', 'JOR', 'al-Zarqa', 137247),
(1790, 'Wadi al-Sir', 'JOR', 'Amman', 89104),
(1791, 'Flying Fish Cove', 'CXR', '–', 700),
(1792, 'Beograd', 'YUG', 'Central Serbia', 1204000),
(1793, 'Novi Sad', 'YUG', 'Vojvodina', 179626),
(1794, 'Niš', 'YUG', 'Central Serbia', 175391),
(1795, 'Priština', 'YUG', 'Kosovo and Metohija', 155496),
(1796, 'Kragujevac', 'YUG', 'Central Serbia', 147305),
(1797, 'Podgorica', 'YUG', 'Montenegro', 135000),
(1798, 'Subotica', 'YUG', 'Vojvodina', 100386),
(1799, 'Prizren', 'YUG', 'Kosovo and Metohija', 92303),
(1800, 'Phnom Penh', 'KHM', 'Phnom Penh', 570155),
(1801, 'Battambang', 'KHM', 'Battambang', 129800),
(1802, 'Siem Reap', 'KHM', 'Siem Reap', 105100),
(1803, 'Douala', 'CMR', 'Littoral', 1448300),
(1804, 'Yaoundé', 'CMR', 'Centre', 1372800),
(1805, 'Garoua', 'CMR', 'Nord', 177000),
(1806, 'Maroua', 'CMR', 'Extrême-Nord', 143000),
(1807, 'Bamenda', 'CMR', 'Nord-Ouest', 138000),
(1808, 'Bafoussam', 'CMR', 'Ouest', 131000),
(1809, 'Nkongsamba', 'CMR', 'Littoral', 112454),
(1810, 'Montréal', 'CAN', 'Québec', 1016376),
(1811, 'Calgary', 'CAN', 'Alberta', 768082),
(1812, 'Toronto', 'CAN', 'Ontario', 688275),
(1813, 'North York', 'CAN', 'Ontario', 622632),
(1814, 'Winnipeg', 'CAN', 'Manitoba', 618477),
(1815, 'Edmonton', 'CAN', 'Alberta', 616306),
(1816, 'Mississauga', 'CAN', 'Ontario', 608072),
(1817, 'Scarborough', 'CAN', 'Ontario', 594501),
(1818, 'Vancouver', 'CAN', 'British Colombia', 514008),
(1819, 'Etobicoke', 'CAN', 'Ontario', 348845),
(1820, 'London', 'CAN', 'Ontario', 339917),
(1821, 'Hamilton', 'CAN', 'Ontario', 335614),
(1822, 'Ottawa', 'CAN', 'Ontario', 335277),
(1823, 'Laval', 'CAN', 'Québec', 330393),
(1824, 'Surrey', 'CAN', 'British Colombia', 304477),
(1825, 'Brampton', 'CAN', 'Ontario', 296711),
(1826, 'Windsor', 'CAN', 'Ontario', 207588),
(1827, 'Saskatoon', 'CAN', 'Saskatchewan', 193647),
(1828, 'Kitchener', 'CAN', 'Ontario', 189959),
(1829, 'Markham', 'CAN', 'Ontario', 189098),
(1830, 'Regina', 'CAN', 'Saskatchewan', 180400),
(1831, 'Burnaby', 'CAN', 'British Colombia', 179209),
(1832, 'Québec', 'CAN', 'Québec', 167264),
(1833, 'York', 'CAN', 'Ontario', 154980),
(1834, 'Richmond', 'CAN', 'British Colombia', 148867),
(1835, 'Vaughan', 'CAN', 'Ontario', 147889),
(1836, 'Burlington', 'CAN', 'Ontario', 145150),
(1837, 'Oshawa', 'CAN', 'Ontario', 140173),
(1838, 'Oakville', 'CAN', 'Ontario', 139192),
(1839, 'Saint Catharines', 'CAN', 'Ontario', 136216),
(1840, 'Longueuil', 'CAN', 'Québec', 127977),
(1841, 'Richmond Hill', 'CAN', 'Ontario', 116428),
(1842, 'Thunder Bay', 'CAN', 'Ontario', 115913),
(1843, 'Nepean', 'CAN', 'Ontario', 115100),
(1844, 'Cape Breton', 'CAN', 'Nova Scotia', 114733),
(1845, 'East York', 'CAN', 'Ontario', 114034),
(1846, 'Halifax', 'CAN', 'Nova Scotia', 113910),
(1847, 'Cambridge', 'CAN', 'Ontario', 109186),
(1848, 'Gloucester', 'CAN', 'Ontario', 107314),
(1849, 'Abbotsford', 'CAN', 'British Colombia', 105403),
(1850, 'Guelph', 'CAN', 'Ontario', 103593),
(1851, 'Saint John´s', 'CAN', 'Newfoundland', 101936),
(1852, 'Coquitlam', 'CAN', 'British Colombia', 101820),
(1853, 'Saanich', 'CAN', 'British Colombia', 101388),
(1854, 'Gatineau', 'CAN', 'Québec', 100702),
(1855, 'Delta', 'CAN', 'British Colombia', 95411),
(1856, 'Sudbury', 'CAN', 'Ontario', 92686),
(1857, 'Kelowna', 'CAN', 'British Colombia', 89442),
(1858, 'Barrie', 'CAN', 'Ontario', 89269),
(1859, 'Praia', 'CPV', 'São Tiago', 94800),
(1860, 'Almaty', 'KAZ', 'Almaty Qalasy', 1129400),
(1861, 'Qaraghandy', 'KAZ', 'Qaraghandy', 436900),
(1862, 'Shymkent', 'KAZ', 'South Kazakstan', 360100),
(1863, 'Taraz', 'KAZ', 'Taraz', 330100),
(1864, 'Astana', 'KAZ', 'Astana', 311200),
(1865, 'Öskemen', 'KAZ', 'East Kazakstan', 311000),
(1866, 'Pavlodar', 'KAZ', 'Pavlodar', 300500),
(1867, 'Semey', 'KAZ', 'East Kazakstan', 269600),
(1868, 'Aqtöbe', 'KAZ', 'Aqtöbe', 253100),
(1869, 'Qostanay', 'KAZ', 'Qostanay', 221400),
(1870, 'Petropavl', 'KAZ', 'North Kazakstan', 203500),
(1871, 'Oral', 'KAZ', 'West Kazakstan', 195500),
(1872, 'Temirtau', 'KAZ', 'Qaraghandy', 170500),
(1873, 'Qyzylorda', 'KAZ', 'Qyzylorda', 157400),
(1874, 'Aqtau', 'KAZ', 'Mangghystau', 143400),
(1875, 'Atyrau', 'KAZ', 'Atyrau', 142500),
(1876, 'Ekibastuz', 'KAZ', 'Pavlodar', 127200),
(1877, 'Kökshetau', 'KAZ', 'North Kazakstan', 123400),
(1878, 'Rudnyy', 'KAZ', 'Qostanay', 109500),
(1879, 'Taldyqorghan', 'KAZ', 'Almaty', 98000),
(1880, 'Zhezqazghan', 'KAZ', 'Qaraghandy', 90000),
(1881, 'Nairobi', 'KEN', 'Nairobi', 2290000),
(1882, 'Mombasa', 'KEN', 'Coast', 461753),
(1883, 'Kisumu', 'KEN', 'Nyanza', 192733),
(1884, 'Nakuru', 'KEN', 'Rift Valley', 163927),
(1885, 'Machakos', 'KEN', 'Eastern', 116293),
(1886, 'Eldoret', 'KEN', 'Rift Valley', 111882),
(1887, 'Meru', 'KEN', 'Eastern', 94947),
(1888, 'Nyeri', 'KEN', 'Central', 91258),
(1889, 'Bangui', 'CAF', 'Bangui', 524000),
(1890, 'Shanghai', 'CHN', 'Shanghai', 9696300),
(1891, 'Peking', 'CHN', 'Peking', 7472000),
(1892, 'Chongqing', 'CHN', 'Chongqing', 6351600),
(1893, 'Tianjin', 'CHN', 'Tianjin', 5286800),
(1894, 'Wuhan', 'CHN', 'Hubei', 4344600),
(1895, 'Harbin', 'CHN', 'Heilongjiang', 4289800),
(1896, 'Shenyang', 'CHN', 'Liaoning', 4265200),
(1897, 'Kanton [Guangzhou]', 'CHN', 'Guangdong', 4256300),
(1898, 'Chengdu', 'CHN', 'Sichuan', 3361500),
(1899, 'Nanking [Nanjing]', 'CHN', 'Jiangsu', 2870300),
(1900, 'Changchun', 'CHN', 'Jilin', 2812000),
(1901, 'Xi´an', 'CHN', 'Shaanxi', 2761400),
(1902, 'Dalian', 'CHN', 'Liaoning', 2697000),
(1903, 'Qingdao', 'CHN', 'Shandong', 2596000),
(1904, 'Jinan', 'CHN', 'Shandong', 2278100),
(1905, 'Hangzhou', 'CHN', 'Zhejiang', 2190500),
(1906, 'Zhengzhou', 'CHN', 'Henan', 2107200),
(1907, 'Shijiazhuang', 'CHN', 'Hebei', 2041500),
(1908, 'Taiyuan', 'CHN', 'Shanxi', 1968400),
(1909, 'Kunming', 'CHN', 'Yunnan', 1829500),
(1910, 'Changsha', 'CHN', 'Hunan', 1809800),
(1911, 'Nanchang', 'CHN', 'Jiangxi', 1691600),
(1912, 'Fuzhou', 'CHN', 'Fujian', 1593800),
(1913, 'Lanzhou', 'CHN', 'Gansu', 1565800),
(1914, 'Guiyang', 'CHN', 'Guizhou', 1465200),
(1915, 'Ningbo', 'CHN', 'Zhejiang', 1371200),
(1916, 'Hefei', 'CHN', 'Anhui', 1369100),
(1917, 'Urumtši [Ürümqi]', 'CHN', 'Xinxiang', 1310100),
(1918, 'Anshan', 'CHN', 'Liaoning', 1200000),
(1919, 'Fushun', 'CHN', 'Liaoning', 1200000),
(1920, 'Nanning', 'CHN', 'Guangxi', 1161800),
(1921, 'Zibo', 'CHN', 'Shandong', 1140000),
(1922, 'Qiqihar', 'CHN', 'Heilongjiang', 1070000),
(1923, 'Jilin', 'CHN', 'Jilin', 1040000),
(1924, 'Tangshan', 'CHN', 'Hebei', 1040000),
(1925, 'Baotou', 'CHN', 'Inner Mongolia', 980000),
(1926, 'Shenzhen', 'CHN', 'Guangdong', 950500),
(1927, 'Hohhot', 'CHN', 'Inner Mongolia', 916700),
(1928, 'Handan', 'CHN', 'Hebei', 840000),
(1929, 'Wuxi', 'CHN', 'Jiangsu', 830000),
(1930, 'Xuzhou', 'CHN', 'Jiangsu', 810000),
(1931, 'Datong', 'CHN', 'Shanxi', 800000),
(1932, 'Yichun', 'CHN', 'Heilongjiang', 800000),
(1933, 'Benxi', 'CHN', 'Liaoning', 770000),
(1934, 'Luoyang', 'CHN', 'Henan', 760000),
(1935, 'Suzhou', 'CHN', 'Jiangsu', 710000),
(1936, 'Xining', 'CHN', 'Qinghai', 700200),
(1937, 'Huainan', 'CHN', 'Anhui', 700000),
(1938, 'Jixi', 'CHN', 'Heilongjiang', 683885),
(1939, 'Daqing', 'CHN', 'Heilongjiang', 660000),
(1940, 'Fuxin', 'CHN', 'Liaoning', 640000),
(1941, 'Amoy [Xiamen]', 'CHN', 'Fujian', 627500),
(1942, 'Liuzhou', 'CHN', 'Guangxi', 610000),
(1943, 'Shantou', 'CHN', 'Guangdong', 580000),
(1944, 'Jinzhou', 'CHN', 'Liaoning', 570000),
(1945, 'Mudanjiang', 'CHN', 'Heilongjiang', 570000),
(1946, 'Yinchuan', 'CHN', 'Ningxia', 544500),
(1947, 'Changzhou', 'CHN', 'Jiangsu', 530000),
(1948, 'Zhangjiakou', 'CHN', 'Hebei', 530000),
(1949, 'Dandong', 'CHN', 'Liaoning', 520000),
(1950, 'Hegang', 'CHN', 'Heilongjiang', 520000),
(1951, 'Kaifeng', 'CHN', 'Henan', 510000),
(1952, 'Jiamusi', 'CHN', 'Heilongjiang', 493409),
(1953, 'Liaoyang', 'CHN', 'Liaoning', 492559),
(1954, 'Hengyang', 'CHN', 'Hunan', 487148),
(1955, 'Baoding', 'CHN', 'Hebei', 483155),
(1956, 'Hunjiang', 'CHN', 'Jilin', 482043),
(1957, 'Xinxiang', 'CHN', 'Henan', 473762),
(1958, 'Huangshi', 'CHN', 'Hubei', 457601),
(1959, 'Haikou', 'CHN', 'Hainan', 454300),
(1960, 'Yantai', 'CHN', 'Shandong', 452127),
(1961, 'Bengbu', 'CHN', 'Anhui', 449245),
(1962, 'Xiangtan', 'CHN', 'Hunan', 441968),
(1963, 'Weifang', 'CHN', 'Shandong', 428522),
(1964, 'Wuhu', 'CHN', 'Anhui', 425740),
(1965, 'Pingxiang', 'CHN', 'Jiangxi', 425579),
(1966, 'Yingkou', 'CHN', 'Liaoning', 421589),
(1967, 'Anyang', 'CHN', 'Henan', 420332),
(1968, 'Panzhihua', 'CHN', 'Sichuan', 415466),
(1969, 'Pingdingshan', 'CHN', 'Henan', 410775),
(1970, 'Xiangfan', 'CHN', 'Hubei', 410407),
(1971, 'Zhuzhou', 'CHN', 'Hunan', 409924),
(1972, 'Jiaozuo', 'CHN', 'Henan', 409100),
(1973, 'Wenzhou', 'CHN', 'Zhejiang', 401871),
(1974, 'Zhangjiang', 'CHN', 'Guangdong', 400997),
(1975, 'Zigong', 'CHN', 'Sichuan', 393184),
(1976, 'Shuangyashan', 'CHN', 'Heilongjiang', 386081),
(1977, 'Zaozhuang', 'CHN', 'Shandong', 380846),
(1978, 'Yakeshi', 'CHN', 'Inner Mongolia', 377869),
(1979, 'Yichang', 'CHN', 'Hubei', 371601),
(1980, 'Zhenjiang', 'CHN', 'Jiangsu', 368316),
(1981, 'Huaibei', 'CHN', 'Anhui', 366549),
(1982, 'Qinhuangdao', 'CHN', 'Hebei', 364972),
(1983, 'Guilin', 'CHN', 'Guangxi', 364130),
(1984, 'Liupanshui', 'CHN', 'Guizhou', 363954),
(1985, 'Panjin', 'CHN', 'Liaoning', 362773),
(1986, 'Yangquan', 'CHN', 'Shanxi', 362268),
(1987, 'Jinxi', 'CHN', 'Liaoning', 357052),
(1988, 'Liaoyuan', 'CHN', 'Jilin', 354141),
(1989, 'Lianyungang', 'CHN', 'Jiangsu', 354139),
(1990, 'Xianyang', 'CHN', 'Shaanxi', 352125),
(1991, 'Tai´an', 'CHN', 'Shandong', 350696),
(1992, 'Chifeng', 'CHN', 'Inner Mongolia', 350077),
(1993, 'Shaoguan', 'CHN', 'Guangdong', 350043),
(1994, 'Nantong', 'CHN', 'Jiangsu', 343341),
(1995, 'Leshan', 'CHN', 'Sichuan', 341128),
(1996, 'Baoji', 'CHN', 'Shaanxi', 337765),
(1997, 'Linyi', 'CHN', 'Shandong', 324720),
(1998, 'Tonghua', 'CHN', 'Jilin', 324600),
(1999, 'Siping', 'CHN', 'Jilin', 317223),
(2000, 'Changzhi', 'CHN', 'Shanxi', 317144),
(2001, 'Tengzhou', 'CHN', 'Shandong', 315083),
(2002, 'Chaozhou', 'CHN', 'Guangdong', 313469),
(2003, 'Yangzhou', 'CHN', 'Jiangsu', 312892),
(2004, 'Dongwan', 'CHN', 'Guangdong', 308669),
(2005, 'Ma´anshan', 'CHN', 'Anhui', 305421),
(2006, 'Foshan', 'CHN', 'Guangdong', 303160),
(2007, 'Yueyang', 'CHN', 'Hunan', 302800),
(2008, 'Xingtai', 'CHN', 'Hebei', 302789),
(2009, 'Changde', 'CHN', 'Hunan', 301276),
(2010, 'Shihezi', 'CHN', 'Xinxiang', 299676),
(2011, 'Yancheng', 'CHN', 'Jiangsu', 296831),
(2012, 'Jiujiang', 'CHN', 'Jiangxi', 291187),
(2013, 'Dongying', 'CHN', 'Shandong', 281728),
(2014, 'Shashi', 'CHN', 'Hubei', 281352),
(2015, 'Xintai', 'CHN', 'Shandong', 281248),
(2016, 'Jingdezhen', 'CHN', 'Jiangxi', 281183),
(2017, 'Tongchuan', 'CHN', 'Shaanxi', 280657),
(2018, 'Zhongshan', 'CHN', 'Guangdong', 278829),
(2019, 'Shiyan', 'CHN', 'Hubei', 273786),
(2020, 'Tieli', 'CHN', 'Heilongjiang', 265683),
(2021, 'Jining', 'CHN', 'Shandong', 265248),
(2022, 'Wuhai', 'CHN', 'Inner Mongolia', 264081),
(2023, 'Mianyang', 'CHN', 'Sichuan', 262947),
(2024, 'Luzhou', 'CHN', 'Sichuan', 262892),
(2025, 'Zunyi', 'CHN', 'Guizhou', 261862),
(2026, 'Shizuishan', 'CHN', 'Ningxia', 257862),
(2027, 'Neijiang', 'CHN', 'Sichuan', 256012),
(2028, 'Tongliao', 'CHN', 'Inner Mongolia', 255129),
(2029, 'Tieling', 'CHN', 'Liaoning', 254842),
(2030, 'Wafangdian', 'CHN', 'Liaoning', 251733),
(2031, 'Anqing', 'CHN', 'Anhui', 250718),
(2032, 'Shaoyang', 'CHN', 'Hunan', 247227),
(2033, 'Laiwu', 'CHN', 'Shandong', 246833),
(2034, 'Chengde', 'CHN', 'Hebei', 246799),
(2035, 'Tianshui', 'CHN', 'Gansu', 244974),
(2036, 'Nanyang', 'CHN', 'Henan', 243303),
(2037, 'Cangzhou', 'CHN', 'Hebei', 242708),
(2038, 'Yibin', 'CHN', 'Sichuan', 241019),
(2039, 'Huaiyin', 'CHN', 'Jiangsu', 239675),
(2040, 'Dunhua', 'CHN', 'Jilin', 235100),
(2041, 'Yanji', 'CHN', 'Jilin', 230892),
(2042, 'Jiangmen', 'CHN', 'Guangdong', 230587),
(2043, 'Tongling', 'CHN', 'Anhui', 228017),
(2044, 'Suihua', 'CHN', 'Heilongjiang', 227881),
(2045, 'Gongziling', 'CHN', 'Jilin', 226569),
(2046, 'Xiantao', 'CHN', 'Hubei', 222884),
(2047, 'Chaoyang', 'CHN', 'Liaoning', 222394),
(2048, 'Ganzhou', 'CHN', 'Jiangxi', 220129),
(2049, 'Huzhou', 'CHN', 'Zhejiang', 218071),
(2050, 'Baicheng', 'CHN', 'Jilin', 217987),
(2051, 'Shangzi', 'CHN', 'Heilongjiang', 215373),
(2052, 'Yangjiang', 'CHN', 'Guangdong', 215196),
(2053, 'Qitaihe', 'CHN', 'Heilongjiang', 214957),
(2054, 'Gejiu', 'CHN', 'Yunnan', 214294),
(2055, 'Jiangyin', 'CHN', 'Jiangsu', 213659),
(2056, 'Hebi', 'CHN', 'Henan', 212976),
(2057, 'Jiaxing', 'CHN', 'Zhejiang', 211526),
(2058, 'Wuzhou', 'CHN', 'Guangxi', 210452),
(2059, 'Meihekou', 'CHN', 'Jilin', 209038),
(2060, 'Xuchang', 'CHN', 'Henan', 208815),
(2061, 'Liaocheng', 'CHN', 'Shandong', 207844),
(2062, 'Haicheng', 'CHN', 'Liaoning', 205560),
(2063, 'Qianjiang', 'CHN', 'Hubei', 205504),
(2064, 'Baiyin', 'CHN', 'Gansu', 204970),
(2065, 'Bei´an', 'CHN', 'Heilongjiang', 204899),
(2066, 'Yixing', 'CHN', 'Jiangsu', 200824),
(2067, 'Laizhou', 'CHN', 'Shandong', 198664),
(2068, 'Qaramay', 'CHN', 'Xinxiang', 197602),
(2069, 'Acheng', 'CHN', 'Heilongjiang', 197595),
(2070, 'Dezhou', 'CHN', 'Shandong', 195485),
(2071, 'Nanping', 'CHN', 'Fujian', 195064),
(2072, 'Zhaoqing', 'CHN', 'Guangdong', 194784),
(2073, 'Beipiao', 'CHN', 'Liaoning', 194301),
(2074, 'Fengcheng', 'CHN', 'Jiangxi', 193784),
(2075, 'Fuyu', 'CHN', 'Jilin', 192981),
(2076, 'Xinyang', 'CHN', 'Henan', 192509),
(2077, 'Dongtai', 'CHN', 'Jiangsu', 192247),
(2078, 'Yuci', 'CHN', 'Shanxi', 191356),
(2079, 'Honghu', 'CHN', 'Hubei', 190772),
(2080, 'Ezhou', 'CHN', 'Hubei', 190123),
(2081, 'Heze', 'CHN', 'Shandong', 189293),
(2082, 'Daxian', 'CHN', 'Sichuan', 188101),
(2083, 'Linfen', 'CHN', 'Shanxi', 187309),
(2084, 'Tianmen', 'CHN', 'Hubei', 186332),
(2085, 'Yiyang', 'CHN', 'Hunan', 185818),
(2086, 'Quanzhou', 'CHN', 'Fujian', 185154),
(2087, 'Rizhao', 'CHN', 'Shandong', 185048),
(2088, 'Deyang', 'CHN', 'Sichuan', 182488),
(2089, 'Guangyuan', 'CHN', 'Sichuan', 182241),
(2090, 'Changshu', 'CHN', 'Jiangsu', 181805),
(2091, 'Zhangzhou', 'CHN', 'Fujian', 181424),
(2092, 'Hailar', 'CHN', 'Inner Mongolia', 180650),
(2093, 'Nanchong', 'CHN', 'Sichuan', 180273),
(2094, 'Jiutai', 'CHN', 'Jilin', 180130),
(2095, 'Zhaodong', 'CHN', 'Heilongjiang', 179976),
(2096, 'Shaoxing', 'CHN', 'Zhejiang', 179818),
(2097, 'Fuyang', 'CHN', 'Anhui', 179572),
(2098, 'Maoming', 'CHN', 'Guangdong', 178683),
(2099, 'Qujing', 'CHN', 'Yunnan', 178669),
(2100, 'Ghulja', 'CHN', 'Xinxiang', 177193),
(2101, 'Jiaohe', 'CHN', 'Jilin', 176367),
(2102, 'Puyang', 'CHN', 'Henan', 175988),
(2103, 'Huadian', 'CHN', 'Jilin', 175873),
(2104, 'Jiangyou', 'CHN', 'Sichuan', 175753),
(2105, 'Qashqar', 'CHN', 'Xinxiang', 174570),
(2106, 'Anshun', 'CHN', 'Guizhou', 174142),
(2107, 'Fuling', 'CHN', 'Sichuan', 173878),
(2108, 'Xinyu', 'CHN', 'Jiangxi', 173524),
(2109, 'Hanzhong', 'CHN', 'Shaanxi', 169930),
(2110, 'Danyang', 'CHN', 'Jiangsu', 169603),
(2111, 'Chenzhou', 'CHN', 'Hunan', 169400),
(2112, 'Xiaogan', 'CHN', 'Hubei', 166280),
(2113, 'Shangqiu', 'CHN', 'Henan', 164880),
(2114, 'Zhuhai', 'CHN', 'Guangdong', 164747),
(2115, 'Qingyuan', 'CHN', 'Guangdong', 164641),
(2116, 'Aqsu', 'CHN', 'Xinxiang', 164092),
(2117, 'Jining', 'CHN', 'Inner Mongolia', 163552),
(2118, 'Xiaoshan', 'CHN', 'Zhejiang', 162930),
(2119, 'Zaoyang', 'CHN', 'Hubei', 162198),
(2120, 'Xinghua', 'CHN', 'Jiangsu', 161910),
(2121, 'Hami', 'CHN', 'Xinxiang', 161315),
(2122, 'Huizhou', 'CHN', 'Guangdong', 161023),
(2123, 'Jinmen', 'CHN', 'Hubei', 160794),
(2124, 'Sanming', 'CHN', 'Fujian', 160691),
(2125, 'Ulanhot', 'CHN', 'Inner Mongolia', 159538),
(2126, 'Korla', 'CHN', 'Xinxiang', 159344),
(2127, 'Wanxian', 'CHN', 'Sichuan', 156823),
(2128, 'Rui´an', 'CHN', 'Zhejiang', 156468),
(2129, 'Zhoushan', 'CHN', 'Zhejiang', 156317),
(2130, 'Liangcheng', 'CHN', 'Shandong', 156307),
(2131, 'Jiaozhou', 'CHN', 'Shandong', 153364),
(2132, 'Taizhou', 'CHN', 'Jiangsu', 152442),
(2133, 'Suzhou', 'CHN', 'Anhui', 151862),
(2134, 'Yichun', 'CHN', 'Jiangxi', 151585),
(2135, 'Taonan', 'CHN', 'Jilin', 150168),
(2136, 'Pingdu', 'CHN', 'Shandong', 150123),
(2137, 'Ji´an', 'CHN', 'Jiangxi', 148583),
(2138, 'Longkou', 'CHN', 'Shandong', 148362),
(2139, 'Langfang', 'CHN', 'Hebei', 148105),
(2140, 'Zhoukou', 'CHN', 'Henan', 146288),
(2141, 'Suining', 'CHN', 'Sichuan', 146086),
(2142, 'Yulin', 'CHN', 'Guangxi', 144467),
(2143, 'Jinhua', 'CHN', 'Zhejiang', 144280),
(2144, 'Liu´an', 'CHN', 'Anhui', 144248),
(2145, 'Shuangcheng', 'CHN', 'Heilongjiang', 142659),
(2146, 'Suizhou', 'CHN', 'Hubei', 142302),
(2147, 'Ankang', 'CHN', 'Shaanxi', 142170),
(2148, 'Weinan', 'CHN', 'Shaanxi', 140169),
(2149, 'Longjing', 'CHN', 'Jilin', 139417),
(2150, 'Da´an', 'CHN', 'Jilin', 138963),
(2151, 'Lengshuijiang', 'CHN', 'Hunan', 137994),
(2152, 'Laiyang', 'CHN', 'Shandong', 137080),
(2153, 'Xianning', 'CHN', 'Hubei', 136811),
(2154, 'Dali', 'CHN', 'Yunnan', 136554),
(2155, 'Anda', 'CHN', 'Heilongjiang', 136446),
(2156, 'Jincheng', 'CHN', 'Shanxi', 136396),
(2157, 'Longyan', 'CHN', 'Fujian', 134481),
(2158, 'Xichang', 'CHN', 'Sichuan', 134419),
(2159, 'Wendeng', 'CHN', 'Shandong', 133910),
(2160, 'Hailun', 'CHN', 'Heilongjiang', 133565),
(2161, 'Binzhou', 'CHN', 'Shandong', 133555),
(2162, 'Linhe', 'CHN', 'Inner Mongolia', 133183);
INSERT INTO `ciudad` (`CiudadID`, `CiudadNombre`, `PaisCodigo`, `CiudadDistrito`, `CiudadPoblacion`) VALUES
(2163, 'Wuwei', 'CHN', 'Gansu', 133101),
(2164, 'Duyun', 'CHN', 'Guizhou', 132971),
(2165, 'Mishan', 'CHN', 'Heilongjiang', 132744),
(2166, 'Shangrao', 'CHN', 'Jiangxi', 132455),
(2167, 'Changji', 'CHN', 'Xinxiang', 132260),
(2168, 'Meixian', 'CHN', 'Guangdong', 132156),
(2169, 'Yushu', 'CHN', 'Jilin', 131861),
(2170, 'Tiefa', 'CHN', 'Liaoning', 131807),
(2171, 'Huai´an', 'CHN', 'Jiangsu', 131149),
(2172, 'Leiyang', 'CHN', 'Hunan', 130115),
(2173, 'Zalantun', 'CHN', 'Inner Mongolia', 130031),
(2174, 'Weihai', 'CHN', 'Shandong', 128888),
(2175, 'Loudi', 'CHN', 'Hunan', 128418),
(2176, 'Qingzhou', 'CHN', 'Shandong', 128258),
(2177, 'Qidong', 'CHN', 'Jiangsu', 126872),
(2178, 'Huaihua', 'CHN', 'Hunan', 126785),
(2179, 'Luohe', 'CHN', 'Henan', 126438),
(2180, 'Chuzhou', 'CHN', 'Anhui', 125341),
(2181, 'Kaiyuan', 'CHN', 'Liaoning', 124219),
(2182, 'Linqing', 'CHN', 'Shandong', 123958),
(2183, 'Chaohu', 'CHN', 'Anhui', 123676),
(2184, 'Laohekou', 'CHN', 'Hubei', 123366),
(2185, 'Dujiangyan', 'CHN', 'Sichuan', 123357),
(2186, 'Zhumadian', 'CHN', 'Henan', 123232),
(2187, 'Linchuan', 'CHN', 'Jiangxi', 121949),
(2188, 'Jiaonan', 'CHN', 'Shandong', 121397),
(2189, 'Sanmenxia', 'CHN', 'Henan', 120523),
(2190, 'Heyuan', 'CHN', 'Guangdong', 120101),
(2191, 'Manzhouli', 'CHN', 'Inner Mongolia', 120023),
(2192, 'Lhasa', 'CHN', 'Tibet', 120000),
(2193, 'Lianyuan', 'CHN', 'Hunan', 118858),
(2194, 'Kuytun', 'CHN', 'Xinxiang', 118553),
(2195, 'Puqi', 'CHN', 'Hubei', 117264),
(2196, 'Hongjiang', 'CHN', 'Hunan', 116188),
(2197, 'Qinzhou', 'CHN', 'Guangxi', 114586),
(2198, 'Renqiu', 'CHN', 'Hebei', 114256),
(2199, 'Yuyao', 'CHN', 'Zhejiang', 114065),
(2200, 'Guigang', 'CHN', 'Guangxi', 114025),
(2201, 'Kaili', 'CHN', 'Guizhou', 113958),
(2202, 'Yan´an', 'CHN', 'Shaanxi', 113277),
(2203, 'Beihai', 'CHN', 'Guangxi', 112673),
(2204, 'Xuangzhou', 'CHN', 'Anhui', 112673),
(2205, 'Quzhou', 'CHN', 'Zhejiang', 112373),
(2206, 'Yong´an', 'CHN', 'Fujian', 111762),
(2207, 'Zixing', 'CHN', 'Hunan', 110048),
(2208, 'Liyang', 'CHN', 'Jiangsu', 109520),
(2209, 'Yizheng', 'CHN', 'Jiangsu', 109268),
(2210, 'Yumen', 'CHN', 'Gansu', 109234),
(2211, 'Liling', 'CHN', 'Hunan', 108504),
(2212, 'Yuncheng', 'CHN', 'Shanxi', 108359),
(2213, 'Shanwei', 'CHN', 'Guangdong', 107847),
(2214, 'Cixi', 'CHN', 'Zhejiang', 107329),
(2215, 'Yuanjiang', 'CHN', 'Hunan', 107004),
(2216, 'Bozhou', 'CHN', 'Anhui', 106346),
(2217, 'Jinchang', 'CHN', 'Gansu', 105287),
(2218, 'Fu´an', 'CHN', 'Fujian', 105265),
(2219, 'Suqian', 'CHN', 'Jiangsu', 105021),
(2220, 'Shishou', 'CHN', 'Hubei', 104571),
(2221, 'Hengshui', 'CHN', 'Hebei', 104269),
(2222, 'Danjiangkou', 'CHN', 'Hubei', 103211),
(2223, 'Fujin', 'CHN', 'Heilongjiang', 103104),
(2224, 'Sanya', 'CHN', 'Hainan', 102820),
(2225, 'Guangshui', 'CHN', 'Hubei', 102770),
(2226, 'Huangshan', 'CHN', 'Anhui', 102628),
(2227, 'Xingcheng', 'CHN', 'Liaoning', 102384),
(2228, 'Zhucheng', 'CHN', 'Shandong', 102134),
(2229, 'Kunshan', 'CHN', 'Jiangsu', 102052),
(2230, 'Haining', 'CHN', 'Zhejiang', 100478),
(2231, 'Pingliang', 'CHN', 'Gansu', 99265),
(2232, 'Fuqing', 'CHN', 'Fujian', 99193),
(2233, 'Xinzhou', 'CHN', 'Shanxi', 98667),
(2234, 'Jieyang', 'CHN', 'Guangdong', 98531),
(2235, 'Zhangjiagang', 'CHN', 'Jiangsu', 97994),
(2236, 'Tong Xian', 'CHN', 'Peking', 97168),
(2237, 'Ya´an', 'CHN', 'Sichuan', 95900),
(2238, 'Jinzhou', 'CHN', 'Liaoning', 95761),
(2239, 'Emeishan', 'CHN', 'Sichuan', 94000),
(2240, 'Enshi', 'CHN', 'Hubei', 93056),
(2241, 'Bose', 'CHN', 'Guangxi', 93009),
(2242, 'Yuzhou', 'CHN', 'Henan', 92889),
(2243, 'Kaiyuan', 'CHN', 'Yunnan', 91999),
(2244, 'Tumen', 'CHN', 'Jilin', 91471),
(2245, 'Putian', 'CHN', 'Fujian', 91030),
(2246, 'Linhai', 'CHN', 'Zhejiang', 90870),
(2247, 'Xilin Hot', 'CHN', 'Inner Mongolia', 90646),
(2248, 'Shaowu', 'CHN', 'Fujian', 90286),
(2249, 'Junan', 'CHN', 'Shandong', 90222),
(2250, 'Huaying', 'CHN', 'Sichuan', 89400),
(2251, 'Pingyi', 'CHN', 'Shandong', 89373),
(2252, 'Huangyan', 'CHN', 'Zhejiang', 89288),
(2253, 'Bishkek', 'KGZ', 'Bishkek shaary', 589400),
(2254, 'Osh', 'KGZ', 'Osh', 222700),
(2255, 'Bikenibeu', 'KIR', 'South Tarawa', 5055),
(2256, 'Bairiki', 'KIR', 'South Tarawa', 2226),
(2257, 'Bogotá', 'COL', 'Santafé de Bogotá', 6260862),
(2258, 'Cali', 'COL', 'Valle', 2077386),
(2259, 'Medellín', 'COL', 'Antioquia', 1861265),
(2260, 'Barranquilla', 'COL', 'Atlántico', 1223260),
(2261, 'Cartagena', 'COL', 'Bolívar', 805757),
(2262, 'Cúcuta', 'COL', 'Norte de Santander', 606932),
(2263, 'Bucaramanga', 'COL', 'Santander', 515555),
(2264, 'Ibagué', 'COL', 'Tolima', 393664),
(2265, 'Pereira', 'COL', 'Risaralda', 381725),
(2266, 'Santa Marta', 'COL', 'Magdalena', 359147),
(2267, 'Manizales', 'COL', 'Caldas', 337580),
(2268, 'Bello', 'COL', 'Antioquia', 333470),
(2269, 'Pasto', 'COL', 'Nariño', 332396),
(2270, 'Neiva', 'COL', 'Huila', 300052),
(2271, 'Soledad', 'COL', 'Atlántico', 295058),
(2272, 'Armenia', 'COL', 'Quindío', 288977),
(2273, 'Villavicencio', 'COL', 'Meta', 273140),
(2274, 'Soacha', 'COL', 'Cundinamarca', 272058),
(2275, 'Valledupar', 'COL', 'Cesar', 263247),
(2276, 'Montería', 'COL', 'Córdoba', 248245),
(2277, 'Itagüí', 'COL', 'Antioquia', 228985),
(2278, 'Palmira', 'COL', 'Valle', 226509),
(2279, 'Buenaventura', 'COL', 'Valle', 224336),
(2280, 'Floridablanca', 'COL', 'Santander', 221913),
(2281, 'Sincelejo', 'COL', 'Sucre', 220704),
(2282, 'Popayán', 'COL', 'Cauca', 200719),
(2283, 'Barrancabermeja', 'COL', 'Santander', 178020),
(2284, 'Dos Quebradas', 'COL', 'Risaralda', 159363),
(2285, 'Tuluá', 'COL', 'Valle', 152488),
(2286, 'Envigado', 'COL', 'Antioquia', 135848),
(2287, 'Cartago', 'COL', 'Valle', 125884),
(2288, 'Girardot', 'COL', 'Cundinamarca', 110963),
(2289, 'Buga', 'COL', 'Valle', 110699),
(2290, 'Tunja', 'COL', 'Boyacá', 109740),
(2291, 'Florencia', 'COL', 'Caquetá', 108574),
(2292, 'Maicao', 'COL', 'La Guajira', 108053),
(2293, 'Sogamoso', 'COL', 'Boyacá', 107728),
(2294, 'Giron', 'COL', 'Santander', 90688),
(2295, 'Moroni', 'COM', 'Njazidja', 36000),
(2296, 'Brazzaville', 'COG', 'Brazzaville', 950000),
(2297, 'Pointe-Noire', 'COG', 'Kouilou', 500000),
(2298, 'Kinshasa', 'COD', 'Kinshasa', 5064000),
(2299, 'Lubumbashi', 'COD', 'Shaba', 851381),
(2300, 'Mbuji-Mayi', 'COD', 'East Kasai', 806475),
(2301, 'Kolwezi', 'COD', 'Shaba', 417810),
(2302, 'Kisangani', 'COD', 'Haute-Zaïre', 417517),
(2303, 'Kananga', 'COD', 'West Kasai', 393030),
(2304, 'Likasi', 'COD', 'Shaba', 299118),
(2305, 'Bukavu', 'COD', 'South Kivu', 201569),
(2306, 'Kikwit', 'COD', 'Bandundu', 182142),
(2307, 'Tshikapa', 'COD', 'West Kasai', 180860),
(2308, 'Matadi', 'COD', 'Bas-Zaïre', 172730),
(2309, 'Mbandaka', 'COD', 'Equateur', 169841),
(2310, 'Mwene-Ditu', 'COD', 'East Kasai', 137459),
(2311, 'Boma', 'COD', 'Bas-Zaïre', 135284),
(2312, 'Uvira', 'COD', 'South Kivu', 115590),
(2313, 'Butembo', 'COD', 'North Kivu', 109406),
(2314, 'Goma', 'COD', 'North Kivu', 109094),
(2315, 'Kalemie', 'COD', 'Shaba', 101309),
(2316, 'Bantam', 'CCK', 'Home Island', 503),
(2317, 'West Island', 'CCK', 'West Island', 167),
(2318, 'Pyongyang', 'PRK', 'Pyongyang-si', 2484000),
(2319, 'Hamhung', 'PRK', 'Hamgyong N', 709730),
(2320, 'Chongjin', 'PRK', 'Hamgyong P', 582480),
(2321, 'Nampo', 'PRK', 'Nampo-si', 566200),
(2322, 'Sinuiju', 'PRK', 'Pyongan P', 326011),
(2323, 'Wonsan', 'PRK', 'Kangwon', 300148),
(2324, 'Phyongsong', 'PRK', 'Pyongan N', 272934),
(2325, 'Sariwon', 'PRK', 'Hwanghae P', 254146),
(2326, 'Haeju', 'PRK', 'Hwanghae N', 229172),
(2327, 'Kanggye', 'PRK', 'Chagang', 223410),
(2328, 'Kimchaek', 'PRK', 'Hamgyong P', 179000),
(2329, 'Hyesan', 'PRK', 'Yanggang', 178020),
(2330, 'Kaesong', 'PRK', 'Kaesong-si', 171500),
(2331, 'Seoul', 'KOR', 'Seoul', 9981619),
(2332, 'Pusan', 'KOR', 'Pusan', 3804522),
(2333, 'Inchon', 'KOR', 'Inchon', 2559424),
(2334, 'Taegu', 'KOR', 'Taegu', 2548568),
(2335, 'Taejon', 'KOR', 'Taejon', 1425835),
(2336, 'Kwangju', 'KOR', 'Kwangju', 1368341),
(2337, 'Ulsan', 'KOR', 'Kyongsangnam', 1084891),
(2338, 'Songnam', 'KOR', 'Kyonggi', 869094),
(2339, 'Puchon', 'KOR', 'Kyonggi', 779412),
(2340, 'Suwon', 'KOR', 'Kyonggi', 755550),
(2341, 'Anyang', 'KOR', 'Kyonggi', 591106),
(2342, 'Chonju', 'KOR', 'Chollabuk', 563153),
(2343, 'Chongju', 'KOR', 'Chungchongbuk', 531376),
(2344, 'Koyang', 'KOR', 'Kyonggi', 518282),
(2345, 'Ansan', 'KOR', 'Kyonggi', 510314),
(2346, 'Pohang', 'KOR', 'Kyongsangbuk', 508899),
(2347, 'Chang-won', 'KOR', 'Kyongsangnam', 481694),
(2348, 'Masan', 'KOR', 'Kyongsangnam', 441242),
(2349, 'Kwangmyong', 'KOR', 'Kyonggi', 350914),
(2350, 'Chonan', 'KOR', 'Chungchongnam', 330259),
(2351, 'Chinju', 'KOR', 'Kyongsangnam', 329886),
(2352, 'Iksan', 'KOR', 'Chollabuk', 322685),
(2353, 'Pyongtaek', 'KOR', 'Kyonggi', 312927),
(2354, 'Kumi', 'KOR', 'Kyongsangbuk', 311431),
(2355, 'Uijongbu', 'KOR', 'Kyonggi', 276111),
(2356, 'Kyongju', 'KOR', 'Kyongsangbuk', 272968),
(2357, 'Kunsan', 'KOR', 'Chollabuk', 266569),
(2358, 'Cheju', 'KOR', 'Cheju', 258511),
(2359, 'Kimhae', 'KOR', 'Kyongsangnam', 256370),
(2360, 'Sunchon', 'KOR', 'Chollanam', 249263),
(2361, 'Mokpo', 'KOR', 'Chollanam', 247452),
(2362, 'Yong-in', 'KOR', 'Kyonggi', 242643),
(2363, 'Wonju', 'KOR', 'Kang-won', 237460),
(2364, 'Kunpo', 'KOR', 'Kyonggi', 235233),
(2365, 'Chunchon', 'KOR', 'Kang-won', 234528),
(2366, 'Namyangju', 'KOR', 'Kyonggi', 229060),
(2367, 'Kangnung', 'KOR', 'Kang-won', 220403),
(2368, 'Chungju', 'KOR', 'Chungchongbuk', 205206),
(2369, 'Andong', 'KOR', 'Kyongsangbuk', 188443),
(2370, 'Yosu', 'KOR', 'Chollanam', 183596),
(2371, 'Kyongsan', 'KOR', 'Kyongsangbuk', 173746),
(2372, 'Paju', 'KOR', 'Kyonggi', 163379),
(2373, 'Yangsan', 'KOR', 'Kyongsangnam', 163351),
(2374, 'Ichon', 'KOR', 'Kyonggi', 155332),
(2375, 'Asan', 'KOR', 'Chungchongnam', 154663),
(2376, 'Koje', 'KOR', 'Kyongsangnam', 147562),
(2377, 'Kimchon', 'KOR', 'Kyongsangbuk', 147027),
(2378, 'Nonsan', 'KOR', 'Chungchongnam', 146619),
(2379, 'Kuri', 'KOR', 'Kyonggi', 142173),
(2380, 'Chong-up', 'KOR', 'Chollabuk', 139111),
(2381, 'Chechon', 'KOR', 'Chungchongbuk', 137070),
(2382, 'Sosan', 'KOR', 'Chungchongnam', 134746),
(2383, 'Shihung', 'KOR', 'Kyonggi', 133443),
(2384, 'Tong-yong', 'KOR', 'Kyongsangnam', 131717),
(2385, 'Kongju', 'KOR', 'Chungchongnam', 131229),
(2386, 'Yongju', 'KOR', 'Kyongsangbuk', 131097),
(2387, 'Chinhae', 'KOR', 'Kyongsangnam', 125997),
(2388, 'Sangju', 'KOR', 'Kyongsangbuk', 124116),
(2389, 'Poryong', 'KOR', 'Chungchongnam', 122604),
(2390, 'Kwang-yang', 'KOR', 'Chollanam', 122052),
(2391, 'Miryang', 'KOR', 'Kyongsangnam', 121501),
(2392, 'Hanam', 'KOR', 'Kyonggi', 115812),
(2393, 'Kimje', 'KOR', 'Chollabuk', 115427),
(2394, 'Yongchon', 'KOR', 'Kyongsangbuk', 113511),
(2395, 'Sachon', 'KOR', 'Kyongsangnam', 113494),
(2396, 'Uiwang', 'KOR', 'Kyonggi', 108788),
(2397, 'Naju', 'KOR', 'Chollanam', 107831),
(2398, 'Namwon', 'KOR', 'Chollabuk', 103544),
(2399, 'Tonghae', 'KOR', 'Kang-won', 95472),
(2400, 'Mun-gyong', 'KOR', 'Kyongsangbuk', 92239),
(2401, 'Athenai', 'GRC', 'Attika', 772072),
(2402, 'Thessaloniki', 'GRC', 'Central Macedonia', 383967),
(2403, 'Pireus', 'GRC', 'Attika', 182671),
(2404, 'Patras', 'GRC', 'West Greece', 153344),
(2405, 'Peristerion', 'GRC', 'Attika', 137288),
(2406, 'Herakleion', 'GRC', 'Crete', 116178),
(2407, 'Kallithea', 'GRC', 'Attika', 114233),
(2408, 'Larisa', 'GRC', 'Thessalia', 113090),
(2409, 'Zagreb', 'HRV', 'Grad Zagreb', 706770),
(2410, 'Split', 'HRV', 'Split-Dalmatia', 189388),
(2411, 'Rijeka', 'HRV', 'Primorje-Gorski Kota', 167964),
(2412, 'Osijek', 'HRV', 'Osijek-Baranja', 104761),
(2413, 'La Habana', 'CUB', 'La Habana', 2256000),
(2414, 'Santiago de Cuba', 'CUB', 'Santiago de Cuba', 433180),
(2415, 'Camagüey', 'CUB', 'Camagüey', 298726),
(2416, 'Holguín', 'CUB', 'Holguín', 249492),
(2417, 'Santa Clara', 'CUB', 'Villa Clara', 207350),
(2418, 'Guantánamo', 'CUB', 'Guantánamo', 205078),
(2419, 'Pinar del Río', 'CUB', 'Pinar del Río', 142100),
(2420, 'Bayamo', 'CUB', 'Granma', 141000),
(2421, 'Cienfuegos', 'CUB', 'Cienfuegos', 132770),
(2422, 'Victoria de las Tunas', 'CUB', 'Las Tunas', 132350),
(2423, 'Matanzas', 'CUB', 'Matanzas', 123273),
(2424, 'Manzanillo', 'CUB', 'Granma', 109350),
(2425, 'Sancti-Spíritus', 'CUB', 'Sancti-Spíritus', 100751),
(2426, 'Ciego de Ávila', 'CUB', 'Ciego de Ávila', 98505),
(2427, 'al-Salimiya', 'KWT', 'Hawalli', 130215),
(2428, 'Jalib al-Shuyukh', 'KWT', 'Hawalli', 102178),
(2429, 'Kuwait', 'KWT', 'al-Asima', 28859),
(2430, 'Nicosia', 'CYP', 'Nicosia', 195000),
(2431, 'Limassol', 'CYP', 'Limassol', 154400),
(2432, 'Vientiane', 'LAO', 'Viangchan', 531800),
(2433, 'Savannakhet', 'LAO', 'Savannakhet', 96652),
(2434, 'Riga', 'LVA', 'Riika', 764328),
(2435, 'Daugavpils', 'LVA', 'Daugavpils', 114829),
(2436, 'Liepaja', 'LVA', 'Liepaja', 89439),
(2437, 'Maseru', 'LSO', 'Maseru', 297000),
(2438, 'Beirut', 'LBN', 'Beirut', 1100000),
(2439, 'Tripoli', 'LBN', 'al-Shamal', 240000),
(2440, 'Monrovia', 'LBR', 'Montserrado', 850000),
(2441, 'Tripoli', 'LBY', 'Tripoli', 1682000),
(2442, 'Bengasi', 'LBY', 'Bengasi', 804000),
(2443, 'Misrata', 'LBY', 'Misrata', 121669),
(2444, 'al-Zawiya', 'LBY', 'al-Zawiya', 89338),
(2445, 'Schaan', 'LIE', 'Schaan', 5346),
(2446, 'Vaduz', 'LIE', 'Vaduz', 5043),
(2447, 'Vilnius', 'LTU', 'Vilna', 577969),
(2448, 'Kaunas', 'LTU', 'Kaunas', 412639),
(2449, 'Klaipeda', 'LTU', 'Klaipeda', 202451),
(2450, 'Šiauliai', 'LTU', 'Šiauliai', 146563),
(2451, 'Panevezys', 'LTU', 'Panevezys', 133695),
(2452, 'Luxembourg [Luxemburg/Lëtzebuerg]', 'LUX', 'Luxembourg', 80700),
(2453, 'El-Aaiún', 'ESH', 'El-Aaiún', 169000),
(2454, 'Macao', 'MAC', 'Macau', 437500),
(2455, 'Antananarivo', 'MDG', 'Antananarivo', 675669),
(2456, 'Toamasina', 'MDG', 'Toamasina', 127441),
(2457, 'Antsirabé', 'MDG', 'Antananarivo', 120239),
(2458, 'Mahajanga', 'MDG', 'Mahajanga', 100807),
(2459, 'Fianarantsoa', 'MDG', 'Fianarantsoa', 99005),
(2460, 'Skopje', 'MKD', 'Skopje', 444299),
(2461, 'Blantyre', 'MWI', 'Blantyre', 478155),
(2462, 'Lilongwe', 'MWI', 'Lilongwe', 435964),
(2463, 'Male', 'MDV', 'Maale', 71000),
(2464, 'Kuala Lumpur', 'MYS', 'Wilayah Persekutuan', 1297526),
(2465, 'Ipoh', 'MYS', 'Perak', 382853),
(2466, 'Johor Baharu', 'MYS', 'Johor', 328436),
(2467, 'Petaling Jaya', 'MYS', 'Selangor', 254350),
(2468, 'Kelang', 'MYS', 'Selangor', 243355),
(2469, 'Kuala Terengganu', 'MYS', 'Terengganu', 228119),
(2470, 'Pinang', 'MYS', 'Pulau Pinang', 219603),
(2471, 'Kota Bharu', 'MYS', 'Kelantan', 219582),
(2472, 'Kuantan', 'MYS', 'Pahang', 199484),
(2473, 'Taiping', 'MYS', 'Perak', 183261),
(2474, 'Seremban', 'MYS', 'Negeri Sembilan', 182869),
(2475, 'Kuching', 'MYS', 'Sarawak', 148059),
(2476, 'Sibu', 'MYS', 'Sarawak', 126381),
(2477, 'Sandakan', 'MYS', 'Sabah', 125841),
(2478, 'Alor Setar', 'MYS', 'Kedah', 124412),
(2479, 'Selayang Baru', 'MYS', 'Selangor', 124228),
(2480, 'Sungai Petani', 'MYS', 'Kedah', 114763),
(2481, 'Shah Alam', 'MYS', 'Selangor', 102019),
(2482, 'Bamako', 'MLI', 'Bamako', 809552),
(2483, 'Birkirkara', 'MLT', 'Outer Harbour', 21445),
(2484, 'Valletta', 'MLT', 'Inner Harbour', 7073),
(2485, 'Casablanca', 'MAR', 'Casablanca', 2940623),
(2486, 'Rabat', 'MAR', 'Rabat-Salé-Zammour-Z', 623457),
(2487, 'Marrakech', 'MAR', 'Marrakech-Tensift-Al', 621914),
(2488, 'Fès', 'MAR', 'Fès-Boulemane', 541162),
(2489, 'Tanger', 'MAR', 'Tanger-Tétouan', 521735),
(2490, 'Salé', 'MAR', 'Rabat-Salé-Zammour-Z', 504420),
(2491, 'Meknès', 'MAR', 'Meknès-Tafilalet', 460000),
(2492, 'Oujda', 'MAR', 'Oriental', 365382),
(2493, 'Kénitra', 'MAR', 'Gharb-Chrarda-Béni H', 292600),
(2494, 'Tétouan', 'MAR', 'Tanger-Tétouan', 277516),
(2495, 'Safi', 'MAR', 'Doukkala-Abda', 262300),
(2496, 'Agadir', 'MAR', 'Souss Massa-Draâ', 155244),
(2497, 'Mohammedia', 'MAR', 'Casablanca', 154706),
(2498, 'Khouribga', 'MAR', 'Chaouia-Ouardigha', 152090),
(2499, 'Beni-Mellal', 'MAR', 'Tadla-Azilal', 140212),
(2500, 'Témara', 'MAR', 'Rabat-Salé-Zammour-Z', 126303),
(2501, 'El Jadida', 'MAR', 'Doukkala-Abda', 119083),
(2502, 'Nador', 'MAR', 'Oriental', 112450),
(2503, 'Ksar el Kebir', 'MAR', 'Tanger-Tétouan', 107065),
(2504, 'Settat', 'MAR', 'Chaouia-Ouardigha', 96200),
(2505, 'Taza', 'MAR', 'Taza-Al Hoceima-Taou', 92700),
(2506, 'El Araich', 'MAR', 'Tanger-Tétouan', 90400),
(2507, 'Dalap-Uliga-Darrit', 'MHL', 'Majuro', 28000),
(2508, 'Fort-de-France', 'MTQ', 'Fort-de-France', 94050),
(2509, 'Nouakchott', 'MRT', 'Nouakchott', 667300),
(2510, 'Nouâdhibou', 'MRT', 'Dakhlet Nouâdhibou', 97600),
(2511, 'Port-Louis', 'MUS', 'Port-Louis', 138200),
(2512, 'Beau Bassin-Rose Hill', 'MUS', 'Plaines Wilhelms', 100616),
(2513, 'Vacoas-Phoenix', 'MUS', 'Plaines Wilhelms', 98464),
(2514, 'Mamoutzou', 'MYT', 'Mamoutzou', 12000),
(2515, 'Ciudad de México', 'MEX', 'Distrito Federal', 8591309),
(2516, 'Guadalajara', 'MEX', 'Jalisco', 1647720),
(2517, 'Ecatepec de Morelos', 'MEX', 'México', 1620303),
(2518, 'Puebla', 'MEX', 'Puebla', 1346176),
(2519, 'Nezahualcóyotl', 'MEX', 'México', 1224924),
(2520, 'Juárez', 'MEX', 'Chihuahua', 1217818),
(2521, 'Tijuana', 'MEX', 'Baja California', 1212232),
(2522, 'León', 'MEX', 'Guanajuato', 1133576),
(2523, 'Monterrey', 'MEX', 'Nuevo León', 1108499),
(2524, 'Zapopan', 'MEX', 'Jalisco', 1002239),
(2525, 'Naucalpan de Juárez', 'MEX', 'México', 857511),
(2526, 'Mexicali', 'MEX', 'Baja California', 764902),
(2527, 'Culiacán', 'MEX', 'Sinaloa', 744859),
(2528, 'Acapulco de Juárez', 'MEX', 'Guerrero', 721011),
(2529, 'Tlalnepantla de Baz', 'MEX', 'México', 720755),
(2530, 'Mérida', 'MEX', 'Yucatán', 703324),
(2531, 'Chihuahua', 'MEX', 'Chihuahua', 670208),
(2532, 'San Luis Potosí', 'MEX', 'San Luis Potosí', 669353),
(2533, 'Guadalupe', 'MEX', 'Nuevo León', 668780),
(2534, 'Toluca', 'MEX', 'México', 665617),
(2535, 'Aguascalientes', 'MEX', 'Aguascalientes', 643360),
(2536, 'Querétaro', 'MEX', 'Querétaro de Arteaga', 639839),
(2537, 'Morelia', 'MEX', 'Michoacán de Ocampo', 619958),
(2538, 'Hermosillo', 'MEX', 'Sonora', 608697),
(2539, 'Saltillo', 'MEX', 'Coahuila de Zaragoza', 577352),
(2540, 'Torreón', 'MEX', 'Coahuila de Zaragoza', 529093),
(2541, 'Centro (Villahermosa)', 'MEX', 'Tabasco', 519873),
(2542, 'San Nicolás de los Garza', 'MEX', 'Nuevo León', 495540),
(2543, 'Durango', 'MEX', 'Durango', 490524),
(2544, 'Chimalhuacán', 'MEX', 'México', 490245),
(2545, 'Tlaquepaque', 'MEX', 'Jalisco', 475472),
(2546, 'Atizapán de Zaragoza', 'MEX', 'México', 467262),
(2547, 'Veracruz', 'MEX', 'Veracruz', 457119),
(2548, 'Cuautitlán Izcalli', 'MEX', 'México', 452976),
(2549, 'Irapuato', 'MEX', 'Guanajuato', 440039),
(2550, 'Tuxtla Gutiérrez', 'MEX', 'Chiapas', 433544),
(2551, 'Tultitlán', 'MEX', 'México', 432411),
(2552, 'Reynosa', 'MEX', 'Tamaulipas', 419776),
(2553, 'Benito Juárez', 'MEX', 'Quintana Roo', 419276),
(2554, 'Matamoros', 'MEX', 'Tamaulipas', 416428),
(2555, 'Xalapa', 'MEX', 'Veracruz', 390058),
(2556, 'Celaya', 'MEX', 'Guanajuato', 382140),
(2557, 'Mazatlán', 'MEX', 'Sinaloa', 380265),
(2558, 'Ensenada', 'MEX', 'Baja California', 369573),
(2559, 'Ahome', 'MEX', 'Sinaloa', 358663),
(2560, 'Cajeme', 'MEX', 'Sonora', 355679),
(2561, 'Cuernavaca', 'MEX', 'Morelos', 337966),
(2562, 'Tonalá', 'MEX', 'Jalisco', 336109),
(2563, 'Valle de Chalco Solidaridad', 'MEX', 'México', 323113),
(2564, 'Nuevo Laredo', 'MEX', 'Tamaulipas', 310277),
(2565, 'Tepic', 'MEX', 'Nayarit', 305025),
(2566, 'Tampico', 'MEX', 'Tamaulipas', 294789),
(2567, 'Ixtapaluca', 'MEX', 'México', 293160),
(2568, 'Apodaca', 'MEX', 'Nuevo León', 282941),
(2569, 'Guasave', 'MEX', 'Sinaloa', 277201),
(2570, 'Gómez Palacio', 'MEX', 'Durango', 272806),
(2571, 'Tapachula', 'MEX', 'Chiapas', 271141),
(2572, 'Nicolás Romero', 'MEX', 'México', 269393),
(2573, 'Coatzacoalcos', 'MEX', 'Veracruz', 267037),
(2574, 'Uruapan', 'MEX', 'Michoacán de Ocampo', 265211),
(2575, 'Victoria', 'MEX', 'Tamaulipas', 262686),
(2576, 'Oaxaca de Juárez', 'MEX', 'Oaxaca', 256848),
(2577, 'Coacalco de Berriozábal', 'MEX', 'México', 252270),
(2578, 'Pachuca de Soto', 'MEX', 'Hidalgo', 244688),
(2579, 'General Escobedo', 'MEX', 'Nuevo León', 232961),
(2580, 'Salamanca', 'MEX', 'Guanajuato', 226864),
(2581, 'Santa Catarina', 'MEX', 'Nuevo León', 226573),
(2582, 'Tehuacán', 'MEX', 'Puebla', 225943),
(2583, 'Chalco', 'MEX', 'México', 222201),
(2584, 'Cárdenas', 'MEX', 'Tabasco', 216903),
(2585, 'Campeche', 'MEX', 'Campeche', 216735),
(2586, 'La Paz', 'MEX', 'México', 213045),
(2587, 'Othón P. Blanco (Chetumal)', 'MEX', 'Quintana Roo', 208014),
(2588, 'Texcoco', 'MEX', 'México', 203681),
(2589, 'La Paz', 'MEX', 'Baja California Sur', 196708),
(2590, 'Metepec', 'MEX', 'México', 194265),
(2591, 'Monclova', 'MEX', 'Coahuila de Zaragoza', 193657),
(2592, 'Huixquilucan', 'MEX', 'México', 193156),
(2593, 'Chilpancingo de los Bravo', 'MEX', 'Guerrero', 192509),
(2594, 'Puerto Vallarta', 'MEX', 'Jalisco', 183741),
(2595, 'Fresnillo', 'MEX', 'Zacatecas', 182744),
(2596, 'Ciudad Madero', 'MEX', 'Tamaulipas', 182012),
(2597, 'Soledad de Graciano Sánchez', 'MEX', 'San Luis Potosí', 179956),
(2598, 'San Juan del Río', 'MEX', 'Querétaro', 179300),
(2599, 'San Felipe del Progreso', 'MEX', 'México', 177330),
(2600, 'Córdoba', 'MEX', 'Veracruz', 176952),
(2601, 'Tecámac', 'MEX', 'México', 172410),
(2602, 'Ocosingo', 'MEX', 'Chiapas', 171495),
(2603, 'Carmen', 'MEX', 'Campeche', 171367),
(2604, 'Lázaro Cárdenas', 'MEX', 'Michoacán de Ocampo', 170878),
(2605, 'Jiutepec', 'MEX', 'Morelos', 170428),
(2606, 'Papantla', 'MEX', 'Veracruz', 170123),
(2607, 'Comalcalco', 'MEX', 'Tabasco', 164640),
(2608, 'Zamora', 'MEX', 'Michoacán de Ocampo', 161191),
(2609, 'Nogales', 'MEX', 'Sonora', 159103),
(2610, 'Huimanguillo', 'MEX', 'Tabasco', 158335),
(2611, 'Cuautla', 'MEX', 'Morelos', 153132),
(2612, 'Minatitlán', 'MEX', 'Veracruz', 152983),
(2613, 'Poza Rica de Hidalgo', 'MEX', 'Veracruz', 152678),
(2614, 'Ciudad Valles', 'MEX', 'San Luis Potosí', 146411),
(2615, 'Navolato', 'MEX', 'Sinaloa', 145396),
(2616, 'San Luis Río Colorado', 'MEX', 'Sonora', 145276),
(2617, 'Pénjamo', 'MEX', 'Guanajuato', 143927),
(2618, 'San Andrés Tuxtla', 'MEX', 'Veracruz', 142251),
(2619, 'Guanajuato', 'MEX', 'Guanajuato', 141215),
(2620, 'Navojoa', 'MEX', 'Sonora', 140495),
(2621, 'Zitácuaro', 'MEX', 'Michoacán de Ocampo', 137970),
(2622, 'Boca del Río', 'MEX', 'Veracruz-Llave', 135721),
(2623, 'Allende', 'MEX', 'Guanajuato', 134645),
(2624, 'Silao', 'MEX', 'Guanajuato', 134037),
(2625, 'Macuspana', 'MEX', 'Tabasco', 133795),
(2626, 'San Juan Bautista Tuxtepec', 'MEX', 'Oaxaca', 133675),
(2627, 'San Cristóbal de las Casas', 'MEX', 'Chiapas', 132317),
(2628, 'Valle de Santiago', 'MEX', 'Guanajuato', 130557),
(2629, 'Guaymas', 'MEX', 'Sonora', 130108),
(2630, 'Colima', 'MEX', 'Colima', 129454),
(2631, 'Dolores Hidalgo', 'MEX', 'Guanajuato', 128675),
(2632, 'Lagos de Moreno', 'MEX', 'Jalisco', 127949),
(2633, 'Piedras Negras', 'MEX', 'Coahuila de Zaragoza', 127898),
(2634, 'Altamira', 'MEX', 'Tamaulipas', 127490),
(2635, 'Túxpam', 'MEX', 'Veracruz', 126475),
(2636, 'San Pedro Garza García', 'MEX', 'Nuevo León', 126147),
(2637, 'Cuauhtémoc', 'MEX', 'Chihuahua', 124279),
(2638, 'Manzanillo', 'MEX', 'Colima', 124014),
(2639, 'Iguala de la Independencia', 'MEX', 'Guerrero', 123883),
(2640, 'Zacatecas', 'MEX', 'Zacatecas', 123700),
(2641, 'Tlajomulco de Zúñiga', 'MEX', 'Jalisco', 123220),
(2642, 'Tulancingo de Bravo', 'MEX', 'Hidalgo', 121946),
(2643, 'Zinacantepec', 'MEX', 'México', 121715),
(2644, 'San Martín Texmelucan', 'MEX', 'Puebla', 121093),
(2645, 'Tepatitlán de Morelos', 'MEX', 'Jalisco', 118948),
(2646, 'Martínez de la Torre', 'MEX', 'Veracruz', 118815),
(2647, 'Orizaba', 'MEX', 'Veracruz', 118488),
(2648, 'Apatzingán', 'MEX', 'Michoacán de Ocampo', 117849),
(2649, 'Atlixco', 'MEX', 'Puebla', 117019),
(2650, 'Delicias', 'MEX', 'Chihuahua', 116132),
(2651, 'Ixtlahuaca', 'MEX', 'México', 115548),
(2652, 'El Mante', 'MEX', 'Tamaulipas', 112453),
(2653, 'Lerdo', 'MEX', 'Durango', 112272),
(2654, 'Almoloya de Juárez', 'MEX', 'México', 110550),
(2655, 'Acámbaro', 'MEX', 'Guanajuato', 110487),
(2656, 'Acuña', 'MEX', 'Coahuila de Zaragoza', 110388),
(2657, 'Guadalupe', 'MEX', 'Zacatecas', 108881),
(2658, 'Huejutla de Reyes', 'MEX', 'Hidalgo', 108017),
(2659, 'Hidalgo', 'MEX', 'Michoacán de Ocampo', 106198),
(2660, 'Los Cabos', 'MEX', 'Baja California Sur', 105199),
(2661, 'Comitán de Domínguez', 'MEX', 'Chiapas', 104986),
(2662, 'Cunduacán', 'MEX', 'Tabasco', 104164),
(2663, 'Río Bravo', 'MEX', 'Tamaulipas', 103901),
(2664, 'Temapache', 'MEX', 'Veracruz', 102824),
(2665, 'Chilapa de Alvarez', 'MEX', 'Guerrero', 102716),
(2666, 'Hidalgo del Parral', 'MEX', 'Chihuahua', 100881),
(2667, 'San Francisco del Rincón', 'MEX', 'Guanajuato', 100149),
(2668, 'Taxco de Alarcón', 'MEX', 'Guerrero', 99907),
(2669, 'Zumpango', 'MEX', 'México', 99781),
(2670, 'San Pedro Cholula', 'MEX', 'Puebla', 99734),
(2671, 'Lerma', 'MEX', 'México', 99714),
(2672, 'Tecomán', 'MEX', 'Colima', 99296),
(2673, 'Las Margaritas', 'MEX', 'Chiapas', 97389),
(2674, 'Cosoleacaque', 'MEX', 'Veracruz', 97199),
(2675, 'San Luis de la Paz', 'MEX', 'Guanajuato', 96763),
(2676, 'José Azueta', 'MEX', 'Guerrero', 95448),
(2677, 'Santiago Ixcuintla', 'MEX', 'Nayarit', 95311),
(2678, 'San Felipe', 'MEX', 'Guanajuato', 95305),
(2679, 'Tejupilco', 'MEX', 'México', 94934),
(2680, 'Tantoyuca', 'MEX', 'Veracruz', 94709),
(2681, 'Salvatierra', 'MEX', 'Guanajuato', 94322),
(2682, 'Tultepec', 'MEX', 'México', 93364),
(2683, 'Temixco', 'MEX', 'Morelos', 92686),
(2684, 'Matamoros', 'MEX', 'Coahuila de Zaragoza', 91858),
(2685, 'Pánuco', 'MEX', 'Veracruz', 90551),
(2686, 'El Fuerte', 'MEX', 'Sinaloa', 89556),
(2687, 'Tierra Blanca', 'MEX', 'Veracruz', 89143),
(2688, 'Weno', 'FSM', 'Chuuk', 22000),
(2689, 'Palikir', 'FSM', 'Pohnpei', 8600),
(2690, 'Chisinau', 'MDA', 'Chisinau', 719900),
(2691, 'Tiraspol', 'MDA', 'Dnjestria', 194300),
(2692, 'Balti', 'MDA', 'Balti', 153400),
(2693, 'Bender (Tîghina)', 'MDA', 'Bender (Tîghina)', 125700),
(2694, 'Monte-Carlo', 'MCO', '–', 13154),
(2695, 'Monaco-Ville', 'MCO', '–', 1234),
(2696, 'Ulan Bator', 'MNG', 'Ulaanbaatar', 773700),
(2697, 'Plymouth', 'MSR', 'Plymouth', 2000),
(2698, 'Maputo', 'MOZ', 'Maputo', 1018938),
(2699, 'Matola', 'MOZ', 'Maputo', 424662),
(2700, 'Beira', 'MOZ', 'Sofala', 397368),
(2701, 'Nampula', 'MOZ', 'Nampula', 303346),
(2702, 'Chimoio', 'MOZ', 'Manica', 171056),
(2703, 'Naçala-Porto', 'MOZ', 'Nampula', 158248),
(2704, 'Quelimane', 'MOZ', 'Zambézia', 150116),
(2705, 'Mocuba', 'MOZ', 'Zambézia', 124700),
(2706, 'Tete', 'MOZ', 'Tete', 101984),
(2707, 'Xai-Xai', 'MOZ', 'Gaza', 99442),
(2708, 'Gurue', 'MOZ', 'Zambézia', 99300),
(2709, 'Maxixe', 'MOZ', 'Inhambane', 93985),
(2710, 'Rangoon (Yangon)', 'MMR', 'Rangoon [Yangon]', 3361700),
(2711, 'Mandalay', 'MMR', 'Mandalay', 885300),
(2712, 'Moulmein (Mawlamyine)', 'MMR', 'Mon', 307900),
(2713, 'Pegu (Bago)', 'MMR', 'Pegu [Bago]', 190900),
(2714, 'Bassein (Pathein)', 'MMR', 'Irrawaddy [Ayeyarwad', 183900),
(2715, 'Monywa', 'MMR', 'Sagaing', 138600),
(2716, 'Sittwe (Akyab)', 'MMR', 'Rakhine', 137600),
(2717, 'Taunggyi (Taunggye)', 'MMR', 'Shan', 131500),
(2718, 'Meikhtila', 'MMR', 'Mandalay', 129700),
(2719, 'Mergui (Myeik)', 'MMR', 'Tenasserim [Tanintha', 122700),
(2720, 'Lashio (Lasho)', 'MMR', 'Shan', 107600),
(2721, 'Prome (Pyay)', 'MMR', 'Pegu [Bago]', 105700),
(2722, 'Henzada (Hinthada)', 'MMR', 'Irrawaddy [Ayeyarwad', 104700),
(2723, 'Myingyan', 'MMR', 'Mandalay', 103600),
(2724, 'Tavoy (Dawei)', 'MMR', 'Tenasserim [Tanintha', 96800),
(2725, 'Pagakku (Pakokku)', 'MMR', 'Magwe [Magway]', 94800),
(2726, 'Windhoek', 'NAM', 'Khomas', 169000),
(2727, 'Yangor', 'NRU', '–', 4050),
(2728, 'Yaren', 'NRU', '–', 559),
(2729, 'Kathmandu', 'NPL', 'Central', 591835),
(2730, 'Biratnagar', 'NPL', 'Eastern', 157764),
(2731, 'Pokhara', 'NPL', 'Western', 146318),
(2732, 'Lalitapur', 'NPL', 'Central', 145847),
(2733, 'Birgunj', 'NPL', 'Central', 90639),
(2734, 'Managua', 'NIC', 'Managua', 959000),
(2735, 'León', 'NIC', 'León', 123865),
(2736, 'Chinandega', 'NIC', 'Chinandega', 97387),
(2737, 'Masaya', 'NIC', 'Masaya', 88971),
(2738, 'Niamey', 'NER', 'Niamey', 420000),
(2739, 'Zinder', 'NER', 'Zinder', 120892),
(2740, 'Maradi', 'NER', 'Maradi', 112965),
(2741, 'Lagos', 'NGA', 'Lagos', 1518000),
(2742, 'Ibadan', 'NGA', 'Oyo & Osun', 1432000),
(2743, 'Ogbomosho', 'NGA', 'Oyo & Osun', 730000),
(2744, 'Kano', 'NGA', 'Kano & Jigawa', 674100),
(2745, 'Oshogbo', 'NGA', 'Oyo & Osun', 476800),
(2746, 'Ilorin', 'NGA', 'Kwara & Kogi', 475800),
(2747, 'Abeokuta', 'NGA', 'Ogun', 427400),
(2748, 'Port Harcourt', 'NGA', 'Rivers & Bayelsa', 410000),
(2749, 'Zaria', 'NGA', 'Kaduna', 379200),
(2750, 'Ilesha', 'NGA', 'Oyo & Osun', 378400),
(2751, 'Onitsha', 'NGA', 'Anambra & Enugu & Eb', 371900),
(2752, 'Iwo', 'NGA', 'Oyo & Osun', 362000),
(2753, 'Ado-Ekiti', 'NGA', 'Ondo & Ekiti', 359400),
(2754, 'Abuja', 'NGA', 'Federal Capital Dist', 350100),
(2755, 'Kaduna', 'NGA', 'Kaduna', 342200),
(2756, 'Mushin', 'NGA', 'Lagos', 333200),
(2757, 'Maiduguri', 'NGA', 'Borno & Yobe', 320000),
(2758, 'Enugu', 'NGA', 'Anambra & Enugu & Eb', 316100),
(2759, 'Ede', 'NGA', 'Oyo & Osun', 307100),
(2760, 'Aba', 'NGA', 'Imo & Abia', 298900),
(2761, 'Ife', 'NGA', 'Oyo & Osun', 296800),
(2762, 'Ila', 'NGA', 'Oyo & Osun', 264000),
(2763, 'Oyo', 'NGA', 'Oyo & Osun', 256400),
(2764, 'Ikerre', 'NGA', 'Ondo & Ekiti', 244600),
(2765, 'Benin City', 'NGA', 'Edo & Delta', 229400),
(2766, 'Iseyin', 'NGA', 'Oyo & Osun', 217300),
(2767, 'Katsina', 'NGA', 'Katsina', 206500),
(2768, 'Jos', 'NGA', 'Plateau & Nassarawa', 206300),
(2769, 'Sokoto', 'NGA', 'Sokoto & Kebbi & Zam', 204900),
(2770, 'Ilobu', 'NGA', 'Oyo & Osun', 199000),
(2771, 'Offa', 'NGA', 'Kwara & Kogi', 197200),
(2772, 'Ikorodu', 'NGA', 'Lagos', 184900),
(2773, 'Ilawe-Ekiti', 'NGA', 'Ondo & Ekiti', 184500),
(2774, 'Owo', 'NGA', 'Ondo & Ekiti', 183500),
(2775, 'Ikirun', 'NGA', 'Oyo & Osun', 181400),
(2776, 'Shaki', 'NGA', 'Oyo & Osun', 174500),
(2777, 'Calabar', 'NGA', 'Cross River', 174400),
(2778, 'Ondo', 'NGA', 'Ondo & Ekiti', 173600),
(2779, 'Akure', 'NGA', 'Ondo & Ekiti', 162300),
(2780, 'Gusau', 'NGA', 'Sokoto & Kebbi & Zam', 158000),
(2781, 'Ijebu-Ode', 'NGA', 'Ogun', 156400),
(2782, 'Effon-Alaiye', 'NGA', 'Oyo & Osun', 153100),
(2783, 'Kumo', 'NGA', 'Bauchi & Gombe', 148000),
(2784, 'Shomolu', 'NGA', 'Lagos', 147700),
(2785, 'Oka-Akoko', 'NGA', 'Ondo & Ekiti', 142900),
(2786, 'Ikare', 'NGA', 'Ondo & Ekiti', 140800),
(2787, 'Sapele', 'NGA', 'Edo & Delta', 139200),
(2788, 'Deba Habe', 'NGA', 'Bauchi & Gombe', 138600),
(2789, 'Minna', 'NGA', 'Niger', 136900),
(2790, 'Warri', 'NGA', 'Edo & Delta', 126100),
(2791, 'Bida', 'NGA', 'Niger', 125500),
(2792, 'Ikire', 'NGA', 'Oyo & Osun', 123300),
(2793, 'Makurdi', 'NGA', 'Benue', 123100),
(2794, 'Lafia', 'NGA', 'Plateau & Nassarawa', 122500),
(2795, 'Inisa', 'NGA', 'Oyo & Osun', 119800),
(2796, 'Shagamu', 'NGA', 'Ogun', 117200),
(2797, 'Awka', 'NGA', 'Anambra & Enugu & Eb', 111200),
(2798, 'Gombe', 'NGA', 'Bauchi & Gombe', 107800),
(2799, 'Igboho', 'NGA', 'Oyo & Osun', 106800),
(2800, 'Ejigbo', 'NGA', 'Oyo & Osun', 105900),
(2801, 'Agege', 'NGA', 'Lagos', 105000),
(2802, 'Ise-Ekiti', 'NGA', 'Ondo & Ekiti', 103400),
(2803, 'Ugep', 'NGA', 'Cross River', 102600),
(2804, 'Epe', 'NGA', 'Lagos', 101000),
(2805, 'Alofi', 'NIU', '–', 682),
(2806, 'Kingston', 'NFK', '–', 800),
(2807, 'Oslo', 'NOR', 'Oslo', 508726),
(2808, 'Bergen', 'NOR', 'Hordaland', 230948),
(2809, 'Trondheim', 'NOR', 'Sør-Trøndelag', 150166),
(2810, 'Stavanger', 'NOR', 'Rogaland', 108848),
(2811, 'Bærum', 'NOR', 'Akershus', 101340),
(2812, 'Abidjan', 'CIV', 'Abidjan', 2500000),
(2813, 'Bouaké', 'CIV', 'Bouaké', 329850),
(2814, 'Yamoussoukro', 'CIV', 'Yamoussoukro', 130000),
(2815, 'Daloa', 'CIV', 'Daloa', 121842),
(2816, 'Korhogo', 'CIV', 'Korhogo', 109445),
(2817, 'al-Sib', 'OMN', 'Masqat', 155000),
(2818, 'Salala', 'OMN', 'Zufar', 131813),
(2819, 'Bawshar', 'OMN', 'Masqat', 107500),
(2820, 'Suhar', 'OMN', 'al-Batina', 90814),
(2821, 'Masqat', 'OMN', 'Masqat', 51969),
(2822, 'Karachi', 'PAK', 'Sindh', 9269265),
(2823, 'Lahore', 'PAK', 'Punjab', 5063499),
(2824, 'Faisalabad', 'PAK', 'Punjab', 1977246),
(2825, 'Rawalpindi', 'PAK', 'Punjab', 1406214),
(2826, 'Multan', 'PAK', 'Punjab', 1182441),
(2827, 'Hyderabad', 'PAK', 'Sindh', 1151274),
(2828, 'Gujranwala', 'PAK', 'Punjab', 1124749),
(2829, 'Peshawar', 'PAK', 'Nothwest Border Prov', 988005),
(2830, 'Quetta', 'PAK', 'Baluchistan', 560307),
(2831, 'Islamabad', 'PAK', 'Islamabad', 524500),
(2832, 'Sargodha', 'PAK', 'Punjab', 455360),
(2833, 'Sialkot', 'PAK', 'Punjab', 417597),
(2834, 'Bahawalpur', 'PAK', 'Punjab', 403408),
(2835, 'Sukkur', 'PAK', 'Sindh', 329176),
(2836, 'Jhang', 'PAK', 'Punjab', 292214),
(2837, 'Sheikhupura', 'PAK', 'Punjab', 271875),
(2838, 'Larkana', 'PAK', 'Sindh', 270366),
(2839, 'Gujrat', 'PAK', 'Punjab', 250121),
(2840, 'Mardan', 'PAK', 'Nothwest Border Prov', 244511),
(2841, 'Kasur', 'PAK', 'Punjab', 241649),
(2842, 'Rahim Yar Khan', 'PAK', 'Punjab', 228479),
(2843, 'Sahiwal', 'PAK', 'Punjab', 207388),
(2844, 'Okara', 'PAK', 'Punjab', 200901),
(2845, 'Wah', 'PAK', 'Punjab', 198400),
(2846, 'Dera Ghazi Khan', 'PAK', 'Punjab', 188100),
(2847, 'Mirpur Khas', 'PAK', 'Sind', 184500),
(2848, 'Nawabshah', 'PAK', 'Sind', 183100),
(2849, 'Mingora', 'PAK', 'Nothwest Border Prov', 174500),
(2850, 'Chiniot', 'PAK', 'Punjab', 169300),
(2851, 'Kamoke', 'PAK', 'Punjab', 151000),
(2852, 'Mandi Burewala', 'PAK', 'Punjab', 149900),
(2853, 'Jhelum', 'PAK', 'Punjab', 145800),
(2854, 'Sadiqabad', 'PAK', 'Punjab', 141500),
(2855, 'Jacobabad', 'PAK', 'Sind', 137700),
(2856, 'Shikarpur', 'PAK', 'Sind', 133300),
(2857, 'Khanewal', 'PAK', 'Punjab', 133000),
(2858, 'Hafizabad', 'PAK', 'Punjab', 130200),
(2859, 'Kohat', 'PAK', 'Nothwest Border Prov', 125300),
(2860, 'Muzaffargarh', 'PAK', 'Punjab', 121600),
(2861, 'Khanpur', 'PAK', 'Punjab', 117800),
(2862, 'Gojra', 'PAK', 'Punjab', 115000),
(2863, 'Bahawalnagar', 'PAK', 'Punjab', 109600),
(2864, 'Muridke', 'PAK', 'Punjab', 108600),
(2865, 'Pak Pattan', 'PAK', 'Punjab', 107800),
(2866, 'Abottabad', 'PAK', 'Nothwest Border Prov', 106000),
(2867, 'Tando Adam', 'PAK', 'Sind', 103400),
(2868, 'Jaranwala', 'PAK', 'Punjab', 103300),
(2869, 'Khairpur', 'PAK', 'Sind', 102200),
(2870, 'Chishtian Mandi', 'PAK', 'Punjab', 101700),
(2871, 'Daska', 'PAK', 'Punjab', 101500),
(2872, 'Dadu', 'PAK', 'Sind', 98600),
(2873, 'Mandi Bahauddin', 'PAK', 'Punjab', 97300),
(2874, 'Ahmadpur East', 'PAK', 'Punjab', 96000),
(2875, 'Kamalia', 'PAK', 'Punjab', 95300),
(2876, 'Khuzdar', 'PAK', 'Baluchistan', 93100),
(2877, 'Vihari', 'PAK', 'Punjab', 92300),
(2878, 'Dera Ismail Khan', 'PAK', 'Nothwest Border Prov', 90400),
(2879, 'Wazirabad', 'PAK', 'Punjab', 89700),
(2880, 'Nowshera', 'PAK', 'Nothwest Border Prov', 89400),
(2881, 'Koror', 'PLW', 'Koror', 12000),
(2882, 'Ciudad de Panamá', 'PAN', 'Panamá', 471373),
(2883, 'San Miguelito', 'PAN', 'San Miguelito', 315382),
(2884, 'Port Moresby', 'PNG', 'National Capital Dis', 247000),
(2885, 'Asunción', 'PRY', 'Asunción', 557776),
(2886, 'Ciudad del Este', 'PRY', 'Alto Paraná', 133881),
(2887, 'San Lorenzo', 'PRY', 'Central', 133395),
(2888, 'Lambaré', 'PRY', 'Central', 99681),
(2889, 'Fernando de la Mora', 'PRY', 'Central', 95287),
(2890, 'Lima', 'PER', 'Lima', 6464693),
(2891, 'Arequipa', 'PER', 'Arequipa', 762000),
(2892, 'Trujillo', 'PER', 'La Libertad', 652000),
(2893, 'Chiclayo', 'PER', 'Lambayeque', 517000),
(2894, 'Callao', 'PER', 'Callao', 424294),
(2895, 'Iquitos', 'PER', 'Loreto', 367000),
(2896, 'Chimbote', 'PER', 'Ancash', 336000),
(2897, 'Huancayo', 'PER', 'Junín', 327000),
(2898, 'Piura', 'PER', 'Piura', 325000),
(2899, 'Cusco', 'PER', 'Cusco', 291000),
(2900, 'Pucallpa', 'PER', 'Ucayali', 220866),
(2901, 'Tacna', 'PER', 'Tacna', 215683),
(2902, 'Ica', 'PER', 'Ica', 194820),
(2903, 'Sullana', 'PER', 'Piura', 147361),
(2904, 'Juliaca', 'PER', 'Puno', 142576),
(2905, 'Huánuco', 'PER', 'Huanuco', 129688),
(2906, 'Ayacucho', 'PER', 'Ayacucho', 118960),
(2907, 'Chincha Alta', 'PER', 'Ica', 110016),
(2908, 'Cajamarca', 'PER', 'Cajamarca', 108009),
(2909, 'Puno', 'PER', 'Puno', 101578),
(2910, 'Ventanilla', 'PER', 'Callao', 101056),
(2911, 'Castilla', 'PER', 'Piura', 90642),
(2912, 'Adamstown', 'PCN', '–', 42),
(2913, 'Garapan', 'MNP', 'Saipan', 9200),
(2914, 'Lisboa', 'PRT', 'Lisboa', 563210),
(2915, 'Porto', 'PRT', 'Porto', 273060),
(2916, 'Amadora', 'PRT', 'Lisboa', 122106),
(2917, 'Coímbra', 'PRT', 'Coímbra', 96100),
(2918, 'Braga', 'PRT', 'Braga', 90535),
(2919, 'San Juan', 'PRI', 'San Juan', 434374),
(2920, 'Bayamón', 'PRI', 'Bayamón', 224044),
(2921, 'Ponce', 'PRI', 'Ponce', 186475),
(2922, 'Carolina', 'PRI', 'Carolina', 186076),
(2923, 'Caguas', 'PRI', 'Caguas', 140502),
(2924, 'Arecibo', 'PRI', 'Arecibo', 100131),
(2925, 'Guaynabo', 'PRI', 'Guaynabo', 100053),
(2926, 'Mayagüez', 'PRI', 'Mayagüez', 98434),
(2927, 'Toa Baja', 'PRI', 'Toa Baja', 94085),
(2928, 'Warszawa', 'POL', 'Mazowieckie', 1615369),
(2929, 'Lódz', 'POL', 'Lodzkie', 800110),
(2930, 'Kraków', 'POL', 'Malopolskie', 738150),
(2931, 'Wroclaw', 'POL', 'Dolnoslaskie', 636765),
(2932, 'Poznan', 'POL', 'Wielkopolskie', 576899),
(2933, 'Gdansk', 'POL', 'Pomorskie', 458988),
(2934, 'Szczecin', 'POL', 'Zachodnio-Pomorskie', 416988),
(2935, 'Bydgoszcz', 'POL', 'Kujawsko-Pomorskie', 386855),
(2936, 'Lublin', 'POL', 'Lubelskie', 356251),
(2937, 'Katowice', 'POL', 'Slaskie', 345934),
(2938, 'Bialystok', 'POL', 'Podlaskie', 283937),
(2939, 'Czestochowa', 'POL', 'Slaskie', 257812),
(2940, 'Gdynia', 'POL', 'Pomorskie', 253521),
(2941, 'Sosnowiec', 'POL', 'Slaskie', 244102),
(2942, 'Radom', 'POL', 'Mazowieckie', 232262),
(2943, 'Kielce', 'POL', 'Swietokrzyskie', 212383),
(2944, 'Gliwice', 'POL', 'Slaskie', 212164),
(2945, 'Torun', 'POL', 'Kujawsko-Pomorskie', 206158),
(2946, 'Bytom', 'POL', 'Slaskie', 205560),
(2947, 'Zabrze', 'POL', 'Slaskie', 200177),
(2948, 'Bielsko-Biala', 'POL', 'Slaskie', 180307),
(2949, 'Olsztyn', 'POL', 'Warminsko-Mazurskie', 170904),
(2950, 'Rzeszów', 'POL', 'Podkarpackie', 162049),
(2951, 'Ruda Slaska', 'POL', 'Slaskie', 159665),
(2952, 'Rybnik', 'POL', 'Slaskie', 144582),
(2953, 'Walbrzych', 'POL', 'Dolnoslaskie', 136923),
(2954, 'Tychy', 'POL', 'Slaskie', 133178),
(2955, 'Dabrowa Górnicza', 'POL', 'Slaskie', 131037),
(2956, 'Plock', 'POL', 'Mazowieckie', 131011),
(2957, 'Elblag', 'POL', 'Warminsko-Mazurskie', 129782),
(2958, 'Opole', 'POL', 'Opolskie', 129553),
(2959, 'Gorzów Wielkopolski', 'POL', 'Lubuskie', 126019),
(2960, 'Wloclawek', 'POL', 'Kujawsko-Pomorskie', 123373),
(2961, 'Chorzów', 'POL', 'Slaskie', 121708),
(2962, 'Tarnów', 'POL', 'Malopolskie', 121494),
(2963, 'Zielona Góra', 'POL', 'Lubuskie', 118182),
(2964, 'Koszalin', 'POL', 'Zachodnio-Pomorskie', 112375),
(2965, 'Legnica', 'POL', 'Dolnoslaskie', 109335),
(2966, 'Kalisz', 'POL', 'Wielkopolskie', 106641),
(2967, 'Grudziadz', 'POL', 'Kujawsko-Pomorskie', 102434),
(2968, 'Slupsk', 'POL', 'Pomorskie', 102370),
(2969, 'Jastrzebie-Zdrój', 'POL', 'Slaskie', 102294),
(2970, 'Jaworzno', 'POL', 'Slaskie', 97929),
(2971, 'Jelenia Góra', 'POL', 'Dolnoslaskie', 93901),
(2972, 'Malabo', 'GNQ', 'Bioko', 40000),
(2973, 'Doha', 'QAT', 'Doha', 355000),
(2974, 'Paris', 'FRA', 'Île-de-France', 2125246),
(2975, 'Marseille', 'FRA', 'Provence-Alpes-Côte', 798430),
(2976, 'Lyon', 'FRA', 'Rhône-Alpes', 445452),
(2977, 'Toulouse', 'FRA', 'Midi-Pyrénées', 390350),
(2978, 'Nice', 'FRA', 'Provence-Alpes-Côte', 342738),
(2979, 'Nantes', 'FRA', 'Pays de la Loire', 270251),
(2980, 'Strasbourg', 'FRA', 'Alsace', 264115),
(2981, 'Montpellier', 'FRA', 'Languedoc-Roussillon', 225392),
(2982, 'Bordeaux', 'FRA', 'Aquitaine', 215363),
(2983, 'Rennes', 'FRA', 'Haute-Normandie', 206229),
(2984, 'Le Havre', 'FRA', 'Champagne-Ardenne', 190905),
(2985, 'Reims', 'FRA', 'Nord-Pas-de-Calais', 187206),
(2986, 'Lille', 'FRA', 'Rhône-Alpes', 184657),
(2987, 'St-Étienne', 'FRA', 'Bretagne', 180210),
(2988, 'Toulon', 'FRA', 'Provence-Alpes-Côte', 160639),
(2989, 'Grenoble', 'FRA', 'Rhône-Alpes', 153317),
(2990, 'Angers', 'FRA', 'Pays de la Loire', 151279),
(2991, 'Dijon', 'FRA', 'Bourgogne', 149867),
(2992, 'Brest', 'FRA', 'Bretagne', 149634),
(2993, 'Le Mans', 'FRA', 'Pays de la Loire', 146105),
(2994, 'Clermont-Ferrand', 'FRA', 'Auvergne', 137140),
(2995, 'Amiens', 'FRA', 'Picardie', 135501),
(2996, 'Aix-en-Provence', 'FRA', 'Provence-Alpes-Côte', 134222),
(2997, 'Limoges', 'FRA', 'Limousin', 133968),
(2998, 'Nîmes', 'FRA', 'Languedoc-Roussillon', 133424),
(2999, 'Tours', 'FRA', 'Centre', 132820),
(3000, 'Villeurbanne', 'FRA', 'Rhône-Alpes', 124215),
(3001, 'Metz', 'FRA', 'Lorraine', 123776),
(3002, 'Besançon', 'FRA', 'Franche-Comté', 117733),
(3003, 'Caen', 'FRA', 'Basse-Normandie', 113987),
(3004, 'Orléans', 'FRA', 'Centre', 113126),
(3005, 'Mulhouse', 'FRA', 'Alsace', 110359),
(3006, 'Rouen', 'FRA', 'Haute-Normandie', 106592),
(3007, 'Boulogne-Billancourt', 'FRA', 'Île-de-France', 106367),
(3008, 'Perpignan', 'FRA', 'Languedoc-Roussillon', 105115),
(3009, 'Nancy', 'FRA', 'Lorraine', 103605),
(3010, 'Roubaix', 'FRA', 'Nord-Pas-de-Calais', 96984),
(3011, 'Argenteuil', 'FRA', 'Île-de-France', 93961),
(3012, 'Tourcoing', 'FRA', 'Nord-Pas-de-Calais', 93540),
(3013, 'Montreuil', 'FRA', 'Île-de-France', 90674),
(3014, 'Cayenne', 'GUF', 'Cayenne', 50699),
(3015, 'Faaa', 'PYF', 'Tahiti', 25888),
(3016, 'Papeete', 'PYF', 'Tahiti', 25553),
(3017, 'Saint-Denis', 'REU', 'Saint-Denis', 131480),
(3018, 'Bucuresti', 'ROM', 'Bukarest', 2016131),
(3019, 'Iasi', 'ROM', 'Iasi', 348070),
(3020, 'Constanta', 'ROM', 'Constanta', 342264),
(3021, 'Cluj-Napoca', 'ROM', 'Cluj', 332498),
(3022, 'Galati', 'ROM', 'Galati', 330276),
(3023, 'Timisoara', 'ROM', 'Timis', 324304),
(3024, 'Brasov', 'ROM', 'Brasov', 314225),
(3025, 'Craiova', 'ROM', 'Dolj', 313530),
(3026, 'Ploiesti', 'ROM', 'Prahova', 251348),
(3027, 'Braila', 'ROM', 'Braila', 233756),
(3028, 'Oradea', 'ROM', 'Bihor', 222239),
(3029, 'Bacau', 'ROM', 'Bacau', 209235),
(3030, 'Pitesti', 'ROM', 'Arges', 187170),
(3031, 'Arad', 'ROM', 'Arad', 184408),
(3032, 'Sibiu', 'ROM', 'Sibiu', 169611),
(3033, 'Târgu Mures', 'ROM', 'Mures', 165153),
(3034, 'Baia Mare', 'ROM', 'Maramures', 149665),
(3035, 'Buzau', 'ROM', 'Buzau', 148372),
(3036, 'Satu Mare', 'ROM', 'Satu Mare', 130059),
(3037, 'Botosani', 'ROM', 'Botosani', 128730),
(3038, 'Piatra Neamt', 'ROM', 'Neamt', 125070),
(3039, 'Râmnicu Vâlcea', 'ROM', 'Vâlcea', 119741),
(3040, 'Suceava', 'ROM', 'Suceava', 118549),
(3041, 'Drobeta-Turnu Severin', 'ROM', 'Mehedinti', 117865),
(3042, 'Târgoviste', 'ROM', 'Dâmbovita', 98980),
(3043, 'Focsani', 'ROM', 'Vrancea', 98979),
(3044, 'Târgu Jiu', 'ROM', 'Gorj', 98524),
(3045, 'Tulcea', 'ROM', 'Tulcea', 96278),
(3046, 'Resita', 'ROM', 'Caras-Severin', 93976),
(3047, 'Kigali', 'RWA', 'Kigali', 286000),
(3048, 'Stockholm', 'SWE', 'Lisboa', 750348),
(3049, 'Gothenburg [Göteborg]', 'SWE', 'West Götanmaan län', 466990),
(3050, 'Malmö', 'SWE', 'Skåne län', 259579),
(3051, 'Uppsala', 'SWE', 'Uppsala län', 189569),
(3052, 'Linköping', 'SWE', 'East Götanmaan län', 133168),
(3053, 'Västerås', 'SWE', 'Västmanlands län', 126328),
(3054, 'Örebro', 'SWE', 'Örebros län', 124207),
(3055, 'Norrköping', 'SWE', 'East Götanmaan län', 122199),
(3056, 'Helsingborg', 'SWE', 'Skåne län', 117737),
(3057, 'Jönköping', 'SWE', 'Jönköpings län', 117095),
(3058, 'Umeå', 'SWE', 'Västerbottens län', 104512),
(3059, 'Lund', 'SWE', 'Skåne län', 98948),
(3060, 'Borås', 'SWE', 'West Götanmaan län', 96883),
(3061, 'Sundsvall', 'SWE', 'Västernorrlands län', 93126),
(3062, 'Gävle', 'SWE', 'Gävleborgs län', 90742),
(3063, 'Jamestown', 'SHN', 'Saint Helena', 1500),
(3064, 'Basseterre', 'KNA', 'St George Basseterre', 11600),
(3065, 'Castries', 'LCA', 'Castries', 2301),
(3066, 'Kingstown', 'VCT', 'St George', 17100),
(3067, 'Saint-Pierre', 'SPM', 'Saint-Pierre', 5808),
(3068, 'Berlin', 'DEU', 'Berliini', 3386667),
(3069, 'Hamburg', 'DEU', 'Hamburg', 1704735),
(3070, 'Munich [München]', 'DEU', 'Baijeri', 1194560),
(3071, 'Köln', 'DEU', 'Nordrhein-Westfalen', 962507),
(3072, 'Frankfurt am Main', 'DEU', 'Hessen', 643821),
(3073, 'Essen', 'DEU', 'Nordrhein-Westfalen', 599515),
(3074, 'Dortmund', 'DEU', 'Nordrhein-Westfalen', 590213),
(3075, 'Stuttgart', 'DEU', 'Baden-Württemberg', 582443),
(3076, 'Düsseldorf', 'DEU', 'Nordrhein-Westfalen', 568855),
(3077, 'Bremen', 'DEU', 'Bremen', 540330),
(3078, 'Duisburg', 'DEU', 'Nordrhein-Westfalen', 519793),
(3079, 'Hannover', 'DEU', 'Niedersachsen', 514718),
(3080, 'Leipzig', 'DEU', 'Saksi', 489532),
(3081, 'Nürnberg', 'DEU', 'Baijeri', 486628),
(3082, 'Dresden', 'DEU', 'Saksi', 476668),
(3083, 'Bochum', 'DEU', 'Nordrhein-Westfalen', 392830),
(3084, 'Wuppertal', 'DEU', 'Nordrhein-Westfalen', 368993),
(3085, 'Bielefeld', 'DEU', 'Nordrhein-Westfalen', 321125),
(3086, 'Mannheim', 'DEU', 'Baden-Württemberg', 307730),
(3087, 'Bonn', 'DEU', 'Nordrhein-Westfalen', 301048),
(3088, 'Gelsenkirchen', 'DEU', 'Nordrhein-Westfalen', 281979),
(3089, 'Karlsruhe', 'DEU', 'Baden-Württemberg', 277204),
(3090, 'Wiesbaden', 'DEU', 'Hessen', 268716),
(3091, 'Münster', 'DEU', 'Nordrhein-Westfalen', 264670),
(3092, 'Mönchengladbach', 'DEU', 'Nordrhein-Westfalen', 263697),
(3093, 'Chemnitz', 'DEU', 'Saksi', 263222),
(3094, 'Augsburg', 'DEU', 'Baijeri', 254867),
(3095, 'Halle/Saale', 'DEU', 'Anhalt Sachsen', 254360),
(3096, 'Braunschweig', 'DEU', 'Niedersachsen', 246322),
(3097, 'Aachen', 'DEU', 'Nordrhein-Westfalen', 243825),
(3098, 'Krefeld', 'DEU', 'Nordrhein-Westfalen', 241769),
(3099, 'Magdeburg', 'DEU', 'Anhalt Sachsen', 235073),
(3100, 'Kiel', 'DEU', 'Schleswig-Holstein', 233795),
(3101, 'Oberhausen', 'DEU', 'Nordrhein-Westfalen', 222349),
(3102, 'Lübeck', 'DEU', 'Schleswig-Holstein', 213326),
(3103, 'Hagen', 'DEU', 'Nordrhein-Westfalen', 205201),
(3104, 'Rostock', 'DEU', 'Mecklenburg-Vorpomme', 203279),
(3105, 'Freiburg im Breisgau', 'DEU', 'Baden-Württemberg', 202455),
(3106, 'Erfurt', 'DEU', 'Thüringen', 201267),
(3107, 'Kassel', 'DEU', 'Hessen', 196211),
(3108, 'Saarbrücken', 'DEU', 'Saarland', 183836),
(3109, 'Mainz', 'DEU', 'Rheinland-Pfalz', 183134),
(3110, 'Hamm', 'DEU', 'Nordrhein-Westfalen', 181804),
(3111, 'Herne', 'DEU', 'Nordrhein-Westfalen', 175661),
(3112, 'Mülheim an der Ruhr', 'DEU', 'Nordrhein-Westfalen', 173895),
(3113, 'Solingen', 'DEU', 'Nordrhein-Westfalen', 165583),
(3114, 'Osnabrück', 'DEU', 'Niedersachsen', 164539),
(3115, 'Ludwigshafen am Rhein', 'DEU', 'Rheinland-Pfalz', 163771),
(3116, 'Leverkusen', 'DEU', 'Nordrhein-Westfalen', 160841),
(3117, 'Oldenburg', 'DEU', 'Niedersachsen', 154125),
(3118, 'Neuss', 'DEU', 'Nordrhein-Westfalen', 149702),
(3119, 'Heidelberg', 'DEU', 'Baden-Württemberg', 139672),
(3120, 'Darmstadt', 'DEU', 'Hessen', 137776),
(3121, 'Paderborn', 'DEU', 'Nordrhein-Westfalen', 137647),
(3122, 'Potsdam', 'DEU', 'Brandenburg', 128983),
(3123, 'Würzburg', 'DEU', 'Baijeri', 127350),
(3124, 'Regensburg', 'DEU', 'Baijeri', 125236),
(3125, 'Recklinghausen', 'DEU', 'Nordrhein-Westfalen', 125022),
(3126, 'Göttingen', 'DEU', 'Niedersachsen', 124775),
(3127, 'Bremerhaven', 'DEU', 'Bremen', 122735),
(3128, 'Wolfsburg', 'DEU', 'Niedersachsen', 121954),
(3129, 'Bottrop', 'DEU', 'Nordrhein-Westfalen', 121097),
(3130, 'Remscheid', 'DEU', 'Nordrhein-Westfalen', 120125),
(3131, 'Heilbronn', 'DEU', 'Baden-Württemberg', 119526),
(3132, 'Pforzheim', 'DEU', 'Baden-Württemberg', 117227),
(3133, 'Offenbach am Main', 'DEU', 'Hessen', 116627),
(3134, 'Ulm', 'DEU', 'Baden-Württemberg', 116103),
(3135, 'Ingolstadt', 'DEU', 'Baijeri', 114826),
(3136, 'Gera', 'DEU', 'Thüringen', 114718),
(3137, 'Salzgitter', 'DEU', 'Niedersachsen', 112934),
(3138, 'Cottbus', 'DEU', 'Brandenburg', 110894),
(3139, 'Reutlingen', 'DEU', 'Baden-Württemberg', 110343),
(3140, 'Fürth', 'DEU', 'Baijeri', 109771),
(3141, 'Siegen', 'DEU', 'Nordrhein-Westfalen', 109225),
(3142, 'Koblenz', 'DEU', 'Rheinland-Pfalz', 108003),
(3143, 'Moers', 'DEU', 'Nordrhein-Westfalen', 106837),
(3144, 'Bergisch Gladbach', 'DEU', 'Nordrhein-Westfalen', 106150),
(3145, 'Zwickau', 'DEU', 'Saksi', 104146),
(3146, 'Hildesheim', 'DEU', 'Niedersachsen', 104013),
(3147, 'Witten', 'DEU', 'Nordrhein-Westfalen', 103384),
(3148, 'Schwerin', 'DEU', 'Mecklenburg-Vorpomme', 102878),
(3149, 'Erlangen', 'DEU', 'Baijeri', 100750),
(3150, 'Kaiserslautern', 'DEU', 'Rheinland-Pfalz', 100025),
(3151, 'Trier', 'DEU', 'Rheinland-Pfalz', 99891),
(3152, 'Jena', 'DEU', 'Thüringen', 99779),
(3153, 'Iserlohn', 'DEU', 'Nordrhein-Westfalen', 99474),
(3154, 'Gütersloh', 'DEU', 'Nordrhein-Westfalen', 95028),
(3155, 'Marl', 'DEU', 'Nordrhein-Westfalen', 93735),
(3156, 'Lünen', 'DEU', 'Nordrhein-Westfalen', 92044),
(3157, 'Düren', 'DEU', 'Nordrhein-Westfalen', 91092),
(3158, 'Ratingen', 'DEU', 'Nordrhein-Westfalen', 90951),
(3159, 'Velbert', 'DEU', 'Nordrhein-Westfalen', 89881),
(3160, 'Esslingen am Neckar', 'DEU', 'Baden-Württemberg', 89667),
(3161, 'Honiara', 'SLB', 'Honiara', 50100),
(3162, 'Lusaka', 'ZMB', 'Lusaka', 1317000),
(3163, 'Ndola', 'ZMB', 'Copperbelt', 329200),
(3164, 'Kitwe', 'ZMB', 'Copperbelt', 288600),
(3165, 'Kabwe', 'ZMB', 'Central', 154300),
(3166, 'Chingola', 'ZMB', 'Copperbelt', 142400),
(3167, 'Mufulira', 'ZMB', 'Copperbelt', 123900),
(3168, 'Luanshya', 'ZMB', 'Copperbelt', 118100),
(3169, 'Apia', 'WSM', 'Upolu', 35900),
(3170, 'Serravalle', 'SMR', 'Serravalle/Dogano', 4802),
(3171, 'San Marino', 'SMR', 'San Marino', 2294),
(3172, 'São Tomé', 'STP', 'Aqua Grande', 49541),
(3173, 'Riyadh', 'SAU', 'Riyadh', 3324000),
(3174, 'Jedda', 'SAU', 'Mekka', 2046300),
(3175, 'Mekka', 'SAU', 'Mekka', 965700),
(3176, 'Medina', 'SAU', 'Medina', 608300),
(3177, 'al-Dammam', 'SAU', 'al-Sharqiya', 482300),
(3178, 'al-Taif', 'SAU', 'Mekka', 416100),
(3179, 'Tabuk', 'SAU', 'Tabuk', 292600),
(3180, 'Burayda', 'SAU', 'al-Qasim', 248600),
(3181, 'al-Hufuf', 'SAU', 'al-Sharqiya', 225800),
(3182, 'al-Mubarraz', 'SAU', 'al-Sharqiya', 219100),
(3183, 'Khamis Mushayt', 'SAU', 'Asir', 217900),
(3184, 'Hail', 'SAU', 'Hail', 176800),
(3185, 'al-Kharj', 'SAU', 'Riad', 152100),
(3186, 'al-Khubar', 'SAU', 'al-Sharqiya', 141700),
(3187, 'Jubayl', 'SAU', 'al-Sharqiya', 140800),
(3188, 'Hafar al-Batin', 'SAU', 'al-Sharqiya', 137800),
(3189, 'al-Tuqba', 'SAU', 'al-Sharqiya', 125700),
(3190, 'Yanbu', 'SAU', 'Medina', 119800),
(3191, 'Abha', 'SAU', 'Asir', 112300),
(3192, 'Ara´ar', 'SAU', 'al-Khudud al-Samaliy', 108100),
(3193, 'al-Qatif', 'SAU', 'al-Sharqiya', 98900),
(3194, 'al-Hawiya', 'SAU', 'Mekka', 93900),
(3195, 'Unayza', 'SAU', 'Qasim', 91100),
(3196, 'Najran', 'SAU', 'Najran', 91000),
(3197, 'Pikine', 'SEN', 'Cap-Vert', 855287),
(3198, 'Dakar', 'SEN', 'Cap-Vert', 785071),
(3199, 'Thiès', 'SEN', 'Thiès', 248000),
(3200, 'Kaolack', 'SEN', 'Kaolack', 199000),
(3201, 'Ziguinchor', 'SEN', 'Ziguinchor', 192000),
(3202, 'Rufisque', 'SEN', 'Cap-Vert', 150000),
(3203, 'Saint-Louis', 'SEN', 'Saint-Louis', 132400),
(3204, 'Mbour', 'SEN', 'Thiès', 109300),
(3205, 'Diourbel', 'SEN', 'Diourbel', 99400),
(3206, 'Victoria', 'SYC', 'Mahé', 41000),
(3207, 'Freetown', 'SLE', 'Western', 850000),
(3208, 'Singapore', 'SGP', '–', 4017733),
(3209, 'Bratislava', 'SVK', 'Bratislava', 448292),
(3210, 'Košice', 'SVK', 'Východné Slovensko', 241874),
(3211, 'Prešov', 'SVK', 'Východné Slovensko', 93977),
(3212, 'Ljubljana', 'SVN', 'Osrednjeslovenska', 270986),
(3213, 'Maribor', 'SVN', 'Podravska', 115532),
(3214, 'Mogadishu', 'SOM', 'Banaadir', 997000),
(3215, 'Hargeysa', 'SOM', 'Woqooyi Galbeed', 90000),
(3216, 'Kismaayo', 'SOM', 'Jubbada Hoose', 90000),
(3217, 'Colombo', 'LKA', 'Western', 645000),
(3218, 'Dehiwala', 'LKA', 'Western', 203000),
(3219, 'Moratuwa', 'LKA', 'Western', 190000),
(3220, 'Jaffna', 'LKA', 'Northern', 149000),
(3221, 'Kandy', 'LKA', 'Central', 140000),
(3222, 'Sri Jayawardenepura Kotte', 'LKA', 'Western', 118000),
(3223, 'Negombo', 'LKA', 'Western', 100000),
(3224, 'Omdurman', 'SDN', 'Khartum', 1271403),
(3225, 'Khartum', 'SDN', 'Khartum', 947483),
(3226, 'Sharq al-Nil', 'SDN', 'Khartum', 700887),
(3227, 'Port Sudan', 'SDN', 'al-Bahr al-Ahmar', 308195),
(3228, 'Kassala', 'SDN', 'Kassala', 234622);
INSERT INTO `ciudad` (`CiudadID`, `CiudadNombre`, `PaisCodigo`, `CiudadDistrito`, `CiudadPoblacion`) VALUES
(3229, 'Obeid', 'SDN', 'Kurdufan al-Shamaliy', 229425),
(3230, 'Nyala', 'SDN', 'Darfur al-Janubiya', 227183),
(3231, 'Wad Madani', 'SDN', 'al-Jazira', 211362),
(3232, 'al-Qadarif', 'SDN', 'al-Qadarif', 191164),
(3233, 'Kusti', 'SDN', 'al-Bahr al-Abyad', 173599),
(3234, 'al-Fashir', 'SDN', 'Darfur al-Shamaliya', 141884),
(3235, 'Juba', 'SDN', 'Bahr al-Jabal', 114980),
(3236, 'Helsinki [Helsingfors]', 'FIN', 'Newmaa', 555474),
(3237, 'Espoo', 'FIN', 'Newmaa', 213271),
(3238, 'Tampere', 'FIN', 'Pirkanmaa', 195468),
(3239, 'Vantaa', 'FIN', 'Newmaa', 178471),
(3240, 'Turku [Åbo]', 'FIN', 'Varsinais-Suomi', 172561),
(3241, 'Oulu', 'FIN', 'Pohjois-Pohjanmaa', 120753),
(3242, 'Lahti', 'FIN', 'Päijät-Häme', 96921),
(3243, 'Paramaribo', 'SUR', 'Paramaribo', 112000),
(3244, 'Mbabane', 'SWZ', 'Hhohho', 61000),
(3245, 'Zürich', 'CHE', 'Zürich', 336800),
(3246, 'Geneve', 'CHE', 'Geneve', 173500),
(3247, 'Basel', 'CHE', 'Basel-Stadt', 166700),
(3248, 'Bern', 'CHE', 'Bern', 122700),
(3249, 'Lausanne', 'CHE', 'Vaud', 114500),
(3250, 'Damascus', 'SYR', 'Damascus', 1347000),
(3251, 'Aleppo', 'SYR', 'Aleppo', 1261983),
(3252, 'Hims', 'SYR', 'Hims', 507404),
(3253, 'Hama', 'SYR', 'Hama', 343361),
(3254, 'Latakia', 'SYR', 'Latakia', 264563),
(3255, 'al-Qamishliya', 'SYR', 'al-Hasaka', 144286),
(3256, 'Dayr al-Zawr', 'SYR', 'Dayr al-Zawr', 140459),
(3257, 'Jaramana', 'SYR', 'Damaskos', 138469),
(3258, 'Duma', 'SYR', 'Damaskos', 131158),
(3259, 'al-Raqqa', 'SYR', 'al-Raqqa', 108020),
(3260, 'Idlib', 'SYR', 'Idlib', 91081),
(3261, 'Dushanbe', 'TJK', 'Karotegin', 524000),
(3262, 'Khujand', 'TJK', 'Khujand', 161500),
(3263, 'Taipei', 'TWN', 'Taipei', 2641312),
(3264, 'Kaohsiung', 'TWN', 'Kaohsiung', 1475505),
(3265, 'Taichung', 'TWN', 'Taichung', 940589),
(3266, 'Tainan', 'TWN', 'Tainan', 728060),
(3267, 'Panchiao', 'TWN', 'Taipei', 523850),
(3268, 'Chungho', 'TWN', 'Taipei', 392176),
(3269, 'Keelung (Chilung)', 'TWN', 'Keelung', 385201),
(3270, 'Sanchung', 'TWN', 'Taipei', 380084),
(3271, 'Hsinchuang', 'TWN', 'Taipei', 365048),
(3272, 'Hsinchu', 'TWN', 'Hsinchu', 361958),
(3273, 'Chungli', 'TWN', 'Taoyuan', 318649),
(3274, 'Fengshan', 'TWN', 'Kaohsiung', 318562),
(3275, 'Taoyuan', 'TWN', 'Taoyuan', 316438),
(3276, 'Chiayi', 'TWN', 'Chiayi', 265109),
(3277, 'Hsintien', 'TWN', 'Taipei', 263603),
(3278, 'Changhwa', 'TWN', 'Changhwa', 227715),
(3279, 'Yungho', 'TWN', 'Taipei', 227700),
(3280, 'Tucheng', 'TWN', 'Taipei', 224897),
(3281, 'Pingtung', 'TWN', 'Pingtung', 214727),
(3282, 'Yungkang', 'TWN', 'Tainan', 193005),
(3283, 'Pingchen', 'TWN', 'Taoyuan', 188344),
(3284, 'Tali', 'TWN', 'Taichung', 171940),
(3285, 'Taiping', 'TWN', '', 165524),
(3286, 'Pate', 'TWN', 'Taoyuan', 161700),
(3287, 'Fengyuan', 'TWN', 'Taichung', 161032),
(3288, 'Luchou', 'TWN', 'Taipei', 160516),
(3289, 'Hsichuh', 'TWN', 'Taipei', 154976),
(3290, 'Shulin', 'TWN', 'Taipei', 151260),
(3291, 'Yuanlin', 'TWN', 'Changhwa', 126402),
(3292, 'Yangmei', 'TWN', 'Taoyuan', 126323),
(3293, 'Taliao', 'TWN', '', 115897),
(3294, 'Kueishan', 'TWN', '', 112195),
(3295, 'Tanshui', 'TWN', 'Taipei', 111882),
(3296, 'Taitung', 'TWN', 'Taitung', 111039),
(3297, 'Hualien', 'TWN', 'Hualien', 108407),
(3298, 'Nantou', 'TWN', 'Nantou', 104723),
(3299, 'Lungtan', 'TWN', 'Taipei', 103088),
(3300, 'Touliu', 'TWN', 'Yünlin', 98900),
(3301, 'Tsaotun', 'TWN', 'Nantou', 96800),
(3302, 'Kangshan', 'TWN', 'Kaohsiung', 92200),
(3303, 'Ilan', 'TWN', 'Ilan', 92000),
(3304, 'Miaoli', 'TWN', 'Miaoli', 90000),
(3305, 'Dar es Salaam', 'TZA', 'Dar es Salaam', 1747000),
(3306, 'Dodoma', 'TZA', 'Dodoma', 189000),
(3307, 'Mwanza', 'TZA', 'Mwanza', 172300),
(3308, 'Zanzibar', 'TZA', 'Zanzibar West', 157634),
(3309, 'Tanga', 'TZA', 'Tanga', 137400),
(3310, 'Mbeya', 'TZA', 'Mbeya', 130800),
(3311, 'Morogoro', 'TZA', 'Morogoro', 117800),
(3312, 'Arusha', 'TZA', 'Arusha', 102500),
(3313, 'Moshi', 'TZA', 'Kilimanjaro', 96800),
(3314, 'Tabora', 'TZA', 'Tabora', 92800),
(3315, 'København', 'DNK', 'København', 495699),
(3316, 'Århus', 'DNK', 'Århus', 284846),
(3317, 'Odense', 'DNK', 'Fyn', 183912),
(3318, 'Aalborg', 'DNK', 'Nordjylland', 161161),
(3319, 'Frederiksberg', 'DNK', 'Frederiksberg', 90327),
(3320, 'Bangkok', 'THA', 'Bangkok', 6320174),
(3321, 'Nonthaburi', 'THA', 'Nonthaburi', 292100),
(3322, 'Nakhon Ratchasima', 'THA', 'Nakhon Ratchasima', 181400),
(3323, 'Chiang Mai', 'THA', 'Chiang Mai', 171100),
(3324, 'Udon Thani', 'THA', 'Udon Thani', 158100),
(3325, 'Hat Yai', 'THA', 'Songkhla', 148632),
(3326, 'Khon Kaen', 'THA', 'Khon Kaen', 126500),
(3327, 'Pak Kret', 'THA', 'Nonthaburi', 126055),
(3328, 'Nakhon Sawan', 'THA', 'Nakhon Sawan', 123800),
(3329, 'Ubon Ratchathani', 'THA', 'Ubon Ratchathani', 116300),
(3330, 'Songkhla', 'THA', 'Songkhla', 94900),
(3331, 'Nakhon Pathom', 'THA', 'Nakhon Pathom', 94100),
(3332, 'Lomé', 'TGO', 'Maritime', 375000),
(3333, 'Fakaofo', 'TKL', 'Fakaofo', 300),
(3334, 'Nuku´alofa', 'TON', 'Tongatapu', 22400),
(3335, 'Chaguanas', 'TTO', 'Caroni', 56601),
(3336, 'Port-of-Spain', 'TTO', 'Port-of-Spain', 43396),
(3337, 'N´Djaména', 'TCD', 'Chari-Baguirmi', 530965),
(3338, 'Moundou', 'TCD', 'Logone Occidental', 99500),
(3339, 'Praha', 'CZE', 'Hlavní mesto Praha', 1181126),
(3340, 'Brno', 'CZE', 'Jizní Morava', 381862),
(3341, 'Ostrava', 'CZE', 'Severní Morava', 320041),
(3342, 'Plzen', 'CZE', 'Zapadní Cechy', 166759),
(3343, 'Olomouc', 'CZE', 'Severní Morava', 102702),
(3344, 'Liberec', 'CZE', 'Severní Cechy', 99155),
(3345, 'Ceské Budejovice', 'CZE', 'Jizní Cechy', 98186),
(3346, 'Hradec Králové', 'CZE', 'Východní Cechy', 98080),
(3347, 'Ústí nad Labem', 'CZE', 'Severní Cechy', 95491),
(3348, 'Pardubice', 'CZE', 'Východní Cechy', 91309),
(3349, 'Tunis', 'TUN', 'Tunis', 690600),
(3350, 'Sfax', 'TUN', 'Sfax', 257800),
(3351, 'Ariana', 'TUN', 'Ariana', 197000),
(3352, 'Ettadhamen', 'TUN', 'Ariana', 178600),
(3353, 'Sousse', 'TUN', 'Sousse', 145900),
(3354, 'Kairouan', 'TUN', 'Kairouan', 113100),
(3355, 'Biserta', 'TUN', 'Biserta', 108900),
(3356, 'Gabès', 'TUN', 'Gabès', 106600),
(3357, 'Istanbul', 'TUR', 'Istanbul', 8787958),
(3358, 'Ankara', 'TUR', 'Ankara', 3038159),
(3359, 'Izmir', 'TUR', 'Izmir', 2130359),
(3360, 'Adana', 'TUR', 'Adana', 1131198),
(3361, 'Bursa', 'TUR', 'Bursa', 1095842),
(3362, 'Gaziantep', 'TUR', 'Gaziantep', 789056),
(3363, 'Konya', 'TUR', 'Konya', 628364),
(3364, 'Mersin (Içel)', 'TUR', 'Içel', 587212),
(3365, 'Antalya', 'TUR', 'Antalya', 564914),
(3366, 'Diyarbakir', 'TUR', 'Diyarbakir', 479884),
(3367, 'Kayseri', 'TUR', 'Kayseri', 475657),
(3368, 'Eskisehir', 'TUR', 'Eskisehir', 470781),
(3369, 'Sanliurfa', 'TUR', 'Sanliurfa', 405905),
(3370, 'Samsun', 'TUR', 'Samsun', 339871),
(3371, 'Malatya', 'TUR', 'Malatya', 330312),
(3372, 'Gebze', 'TUR', 'Kocaeli', 264170),
(3373, 'Denizli', 'TUR', 'Denizli', 253848),
(3374, 'Sivas', 'TUR', 'Sivas', 246642),
(3375, 'Erzurum', 'TUR', 'Erzurum', 246535),
(3376, 'Tarsus', 'TUR', 'Adana', 246206),
(3377, 'Kahramanmaras', 'TUR', 'Kahramanmaras', 245772),
(3378, 'Elâzig', 'TUR', 'Elâzig', 228815),
(3379, 'Van', 'TUR', 'Van', 219319),
(3380, 'Sultanbeyli', 'TUR', 'Istanbul', 211068),
(3381, 'Izmit (Kocaeli)', 'TUR', 'Kocaeli', 210068),
(3382, 'Manisa', 'TUR', 'Manisa', 207148),
(3383, 'Batman', 'TUR', 'Batman', 203793),
(3384, 'Balikesir', 'TUR', 'Balikesir', 196382),
(3385, 'Sakarya (Adapazari)', 'TUR', 'Sakarya', 190641),
(3386, 'Iskenderun', 'TUR', 'Hatay', 153022),
(3387, 'Osmaniye', 'TUR', 'Osmaniye', 146003),
(3388, 'Çorum', 'TUR', 'Çorum', 145495),
(3389, 'Kütahya', 'TUR', 'Kütahya', 144761),
(3390, 'Hatay (Antakya)', 'TUR', 'Hatay', 143982),
(3391, 'Kirikkale', 'TUR', 'Kirikkale', 142044),
(3392, 'Adiyaman', 'TUR', 'Adiyaman', 141529),
(3393, 'Trabzon', 'TUR', 'Trabzon', 138234),
(3394, 'Ordu', 'TUR', 'Ordu', 133642),
(3395, 'Aydin', 'TUR', 'Aydin', 128651),
(3396, 'Usak', 'TUR', 'Usak', 128162),
(3397, 'Edirne', 'TUR', 'Edirne', 123383),
(3398, 'Çorlu', 'TUR', 'Tekirdag', 123300),
(3399, 'Isparta', 'TUR', 'Isparta', 121911),
(3400, 'Karabük', 'TUR', 'Karabük', 118285),
(3401, 'Kilis', 'TUR', 'Kilis', 118245),
(3402, 'Alanya', 'TUR', 'Antalya', 117300),
(3403, 'Kiziltepe', 'TUR', 'Mardin', 112000),
(3404, 'Zonguldak', 'TUR', 'Zonguldak', 111542),
(3405, 'Siirt', 'TUR', 'Siirt', 107100),
(3406, 'Viransehir', 'TUR', 'Sanliurfa', 106400),
(3407, 'Tekirdag', 'TUR', 'Tekirdag', 106077),
(3408, 'Karaman', 'TUR', 'Karaman', 104200),
(3409, 'Afyon', 'TUR', 'Afyon', 103984),
(3410, 'Aksaray', 'TUR', 'Aksaray', 102681),
(3411, 'Ceyhan', 'TUR', 'Adana', 102412),
(3412, 'Erzincan', 'TUR', 'Erzincan', 102304),
(3413, 'Bismil', 'TUR', 'Diyarbakir', 101400),
(3414, 'Nazilli', 'TUR', 'Aydin', 99900),
(3415, 'Tokat', 'TUR', 'Tokat', 99500),
(3416, 'Kars', 'TUR', 'Kars', 93000),
(3417, 'Inegöl', 'TUR', 'Bursa', 90500),
(3418, 'Bandirma', 'TUR', 'Balikesir', 90200),
(3419, 'Ashgabat', 'TKM', 'Ahal', 540600),
(3420, 'Chärjew', 'TKM', 'Lebap', 189200),
(3421, 'Dashhowuz', 'TKM', 'Dashhowuz', 141800),
(3422, 'Mary', 'TKM', 'Mary', 101000),
(3423, 'Cockburn Town', 'TCA', 'Grand Turk', 4800),
(3424, 'Funafuti', 'TUV', 'Funafuti', 4600),
(3425, 'Kampala', 'UGA', 'Central', 890800),
(3426, 'Kyiv', 'UKR', 'Kiova', 2624000),
(3427, 'Harkova [Harkiv]', 'UKR', 'Harkova', 1500000),
(3428, 'Dnipropetrovsk', 'UKR', 'Dnipropetrovsk', 1103000),
(3429, 'Donetsk', 'UKR', 'Donetsk', 1050000),
(3430, 'Odesa', 'UKR', 'Odesa', 1011000),
(3431, 'Zaporizzja', 'UKR', 'Zaporizzja', 848000),
(3432, 'Lviv', 'UKR', 'Lviv', 788000),
(3433, 'Kryvyi Rig', 'UKR', 'Dnipropetrovsk', 703000),
(3434, 'Mykolajiv', 'UKR', 'Mykolajiv', 508000),
(3435, 'Mariupol', 'UKR', 'Donetsk', 490000),
(3436, 'Lugansk', 'UKR', 'Lugansk', 469000),
(3437, 'Vinnytsja', 'UKR', 'Vinnytsja', 391000),
(3438, 'Makijivka', 'UKR', 'Donetsk', 384000),
(3439, 'Herson', 'UKR', 'Herson', 353000),
(3440, 'Sevastopol', 'UKR', 'Krim', 348000),
(3441, 'Simferopol', 'UKR', 'Krim', 339000),
(3442, 'Pultava [Poltava]', 'UKR', 'Pultava', 313000),
(3443, 'Tšernigiv', 'UKR', 'Tšernigiv', 313000),
(3444, 'Tšerkasy', 'UKR', 'Tšerkasy', 309000),
(3445, 'Gorlivka', 'UKR', 'Donetsk', 299000),
(3446, 'Zytomyr', 'UKR', 'Zytomyr', 297000),
(3447, 'Sumy', 'UKR', 'Sumy', 294000),
(3448, 'Dniprodzerzynsk', 'UKR', 'Dnipropetrovsk', 270000),
(3449, 'Kirovograd', 'UKR', 'Kirovograd', 265000),
(3450, 'Hmelnytskyi', 'UKR', 'Hmelnytskyi', 262000),
(3451, 'Tšernivtsi', 'UKR', 'Tšernivtsi', 259000),
(3452, 'Rivne', 'UKR', 'Rivne', 245000),
(3453, 'Krementšuk', 'UKR', 'Pultava', 239000),
(3454, 'Ivano-Frankivsk', 'UKR', 'Ivano-Frankivsk', 237000),
(3455, 'Ternopil', 'UKR', 'Ternopil', 236000),
(3456, 'Lutsk', 'UKR', 'Volynia', 217000),
(3457, 'Bila Tserkva', 'UKR', 'Kiova', 215000),
(3458, 'Kramatorsk', 'UKR', 'Donetsk', 186000),
(3459, 'Melitopol', 'UKR', 'Zaporizzja', 169000),
(3460, 'Kertš', 'UKR', 'Krim', 162000),
(3461, 'Nikopol', 'UKR', 'Dnipropetrovsk', 149000),
(3462, 'Berdjansk', 'UKR', 'Zaporizzja', 130000),
(3463, 'Pavlograd', 'UKR', 'Dnipropetrovsk', 127000),
(3464, 'Sjeverodonetsk', 'UKR', 'Lugansk', 127000),
(3465, 'Slovjansk', 'UKR', 'Donetsk', 127000),
(3466, 'Uzgorod', 'UKR', 'Taka-Karpatia', 127000),
(3467, 'Altševsk', 'UKR', 'Lugansk', 119000),
(3468, 'Lysytšansk', 'UKR', 'Lugansk', 116000),
(3469, 'Jevpatorija', 'UKR', 'Krim', 112000),
(3470, 'Kamjanets-Podilskyi', 'UKR', 'Hmelnytskyi', 109000),
(3471, 'Jenakijeve', 'UKR', 'Donetsk', 105000),
(3472, 'Krasnyi Lutš', 'UKR', 'Lugansk', 101000),
(3473, 'Stahanov', 'UKR', 'Lugansk', 101000),
(3474, 'Oleksandrija', 'UKR', 'Kirovograd', 99000),
(3475, 'Konotop', 'UKR', 'Sumy', 96000),
(3476, 'Kostjantynivka', 'UKR', 'Donetsk', 95000),
(3477, 'Berdytšiv', 'UKR', 'Zytomyr', 90000),
(3478, 'Izmajil', 'UKR', 'Odesa', 90000),
(3479, 'Šostka', 'UKR', 'Sumy', 90000),
(3480, 'Uman', 'UKR', 'Tšerkasy', 90000),
(3481, 'Brovary', 'UKR', 'Kiova', 89000),
(3482, 'Mukatševe', 'UKR', 'Taka-Karpatia', 89000),
(3483, 'Budapest', 'HUN', 'Budapest', 1811552),
(3484, 'Debrecen', 'HUN', 'Hajdú-Bihar', 203648),
(3485, 'Miskolc', 'HUN', 'Borsod-Abaúj-Zemplén', 172357),
(3486, 'Szeged', 'HUN', 'Csongrád', 158158),
(3487, 'Pécs', 'HUN', 'Baranya', 157332),
(3488, 'Györ', 'HUN', 'Györ-Moson-Sopron', 127119),
(3489, 'Nyiregyháza', 'HUN', 'Szabolcs-Szatmár-Ber', 112419),
(3490, 'Kecskemét', 'HUN', 'Bács-Kiskun', 105606),
(3491, 'Székesfehérvár', 'HUN', 'Fejér', 105119),
(3492, 'Montevideo', 'URY', 'Montevideo', 1236000),
(3493, 'Nouméa', 'NCL', '–', 76293),
(3494, 'Auckland', 'NZL', 'Auckland', 381800),
(3495, 'Christchurch', 'NZL', 'Canterbury', 324200),
(3496, 'Manukau', 'NZL', 'Auckland', 281800),
(3497, 'North Shore', 'NZL', 'Auckland', 187700),
(3498, 'Waitakere', 'NZL', 'Auckland', 170600),
(3499, 'Wellington', 'NZL', 'Wellington', 166700),
(3500, 'Dunedin', 'NZL', 'Dunedin', 119600),
(3501, 'Hamilton', 'NZL', 'Hamilton', 117100),
(3502, 'Lower Hutt', 'NZL', 'Wellington', 98100),
(3503, 'Toskent', 'UZB', 'Toskent Shahri', 2117500),
(3504, 'Namangan', 'UZB', 'Namangan', 370500),
(3505, 'Samarkand', 'UZB', 'Samarkand', 361800),
(3506, 'Andijon', 'UZB', 'Andijon', 318600),
(3507, 'Buhoro', 'UZB', 'Buhoro', 237100),
(3508, 'Karsi', 'UZB', 'Qashqadaryo', 194100),
(3509, 'Nukus', 'UZB', 'Karakalpakistan', 194100),
(3510, 'Kükon', 'UZB', 'Fargona', 190100),
(3511, 'Fargona', 'UZB', 'Fargona', 180500),
(3512, 'Circik', 'UZB', 'Toskent', 146400),
(3513, 'Margilon', 'UZB', 'Fargona', 140800),
(3514, 'Ürgenc', 'UZB', 'Khorazm', 138900),
(3515, 'Angren', 'UZB', 'Toskent', 128000),
(3516, 'Cizah', 'UZB', 'Cizah', 124800),
(3517, 'Navoi', 'UZB', 'Navoi', 116300),
(3518, 'Olmalik', 'UZB', 'Toskent', 114900),
(3519, 'Termiz', 'UZB', 'Surkhondaryo', 109500),
(3520, 'Minsk', 'BLR', 'Horad Minsk', 1674000),
(3521, 'Gomel', 'BLR', 'Gomel', 475000),
(3522, 'Mogiljov', 'BLR', 'Mogiljov', 356000),
(3523, 'Vitebsk', 'BLR', 'Vitebsk', 340000),
(3524, 'Grodno', 'BLR', 'Grodno', 302000),
(3525, 'Brest', 'BLR', 'Brest', 286000),
(3526, 'Bobruisk', 'BLR', 'Mogiljov', 221000),
(3527, 'Baranovitši', 'BLR', 'Brest', 167000),
(3528, 'Borisov', 'BLR', 'Minsk', 151000),
(3529, 'Pinsk', 'BLR', 'Brest', 130000),
(3530, 'Orša', 'BLR', 'Vitebsk', 124000),
(3531, 'Mozyr', 'BLR', 'Gomel', 110000),
(3532, 'Novopolotsk', 'BLR', 'Vitebsk', 106000),
(3533, 'Lida', 'BLR', 'Grodno', 101000),
(3534, 'Soligorsk', 'BLR', 'Minsk', 101000),
(3535, 'Molodetšno', 'BLR', 'Minsk', 97000),
(3536, 'Mata-Utu', 'WLF', 'Wallis', 1137),
(3537, 'Port-Vila', 'VUT', 'Shefa', 33700),
(3538, 'Città del Vaticano', 'VAT', '–', 455),
(3539, 'Caracas', 'VEN', 'Distrito Federal', 1975294),
(3540, 'Maracaíbo', 'VEN', 'Zulia', 1304776),
(3541, 'Barquisimeto', 'VEN', 'Lara', 877239),
(3542, 'Valencia', 'VEN', 'Carabobo', 794246),
(3543, 'Ciudad Guayana', 'VEN', 'Bolívar', 663713),
(3544, 'Petare', 'VEN', 'Miranda', 488868),
(3545, 'Maracay', 'VEN', 'Aragua', 444443),
(3546, 'Barcelona', 'VEN', 'Anzoátegui', 322267),
(3547, 'Maturín', 'VEN', 'Monagas', 319726),
(3548, 'San Cristóbal', 'VEN', 'Táchira', 319373),
(3549, 'Ciudad Bolívar', 'VEN', 'Bolívar', 301107),
(3550, 'Cumaná', 'VEN', 'Sucre', 293105),
(3551, 'Mérida', 'VEN', 'Mérida', 224887),
(3552, 'Cabimas', 'VEN', 'Zulia', 221329),
(3553, 'Barinas', 'VEN', 'Barinas', 217831),
(3554, 'Turmero', 'VEN', 'Aragua', 217499),
(3555, 'Baruta', 'VEN', 'Miranda', 207290),
(3556, 'Puerto Cabello', 'VEN', 'Carabobo', 187722),
(3557, 'Santa Ana de Coro', 'VEN', 'Falcón', 185766),
(3558, 'Los Teques', 'VEN', 'Miranda', 178784),
(3559, 'Punto Fijo', 'VEN', 'Falcón', 167215),
(3560, 'Guarenas', 'VEN', 'Miranda', 165889),
(3561, 'Acarigua', 'VEN', 'Portuguesa', 158954),
(3562, 'Puerto La Cruz', 'VEN', 'Anzoátegui', 155700),
(3563, 'Ciudad Losada', 'VEN', '', 134501),
(3564, 'Guacara', 'VEN', 'Carabobo', 131334),
(3565, 'Valera', 'VEN', 'Trujillo', 130281),
(3566, 'Guanare', 'VEN', 'Portuguesa', 125621),
(3567, 'Carúpano', 'VEN', 'Sucre', 119639),
(3568, 'Catia La Mar', 'VEN', 'Distrito Federal', 117012),
(3569, 'El Tigre', 'VEN', 'Anzoátegui', 116256),
(3570, 'Guatire', 'VEN', 'Miranda', 109121),
(3571, 'Calabozo', 'VEN', 'Guárico', 107146),
(3572, 'Pozuelos', 'VEN', 'Anzoátegui', 105690),
(3573, 'Ciudad Ojeda', 'VEN', 'Zulia', 99354),
(3574, 'Ocumare del Tuy', 'VEN', 'Miranda', 97168),
(3575, 'Valle de la Pascua', 'VEN', 'Guárico', 95927),
(3576, 'Araure', 'VEN', 'Portuguesa', 94269),
(3577, 'San Fernando de Apure', 'VEN', 'Apure', 93809),
(3578, 'San Felipe', 'VEN', 'Yaracuy', 90940),
(3579, 'El Limón', 'VEN', 'Aragua', 90000),
(3580, 'Moscow', 'RUS', 'Moscow (City)', 8389200),
(3581, 'St Petersburg', 'RUS', 'Pietari', 4694000),
(3582, 'Novosibirsk', 'RUS', 'Novosibirsk', 1398800),
(3583, 'Nizni Novgorod', 'RUS', 'Nizni Novgorod', 1357000),
(3584, 'Jekaterinburg', 'RUS', 'Sverdlovsk', 1266300),
(3585, 'Samara', 'RUS', 'Samara', 1156100),
(3586, 'Omsk', 'RUS', 'Omsk', 1148900),
(3587, 'Kazan', 'RUS', 'Tatarstan', 1101000),
(3588, 'Ufa', 'RUS', 'Baškortostan', 1091200),
(3589, 'Tšeljabinsk', 'RUS', 'Tšeljabinsk', 1083200),
(3590, 'Rostov-na-Donu', 'RUS', 'Rostov-na-Donu', 1012700),
(3591, 'Perm', 'RUS', 'Perm', 1009700),
(3592, 'Volgograd', 'RUS', 'Volgograd', 993400),
(3593, 'Voronez', 'RUS', 'Voronez', 907700),
(3594, 'Krasnojarsk', 'RUS', 'Krasnojarsk', 875500),
(3595, 'Saratov', 'RUS', 'Saratov', 874000),
(3596, 'Toljatti', 'RUS', 'Samara', 722900),
(3597, 'Uljanovsk', 'RUS', 'Uljanovsk', 667400),
(3598, 'Izevsk', 'RUS', 'Udmurtia', 652800),
(3599, 'Krasnodar', 'RUS', 'Krasnodar', 639000),
(3600, 'Jaroslavl', 'RUS', 'Jaroslavl', 616700),
(3601, 'Habarovsk', 'RUS', 'Habarovsk', 609400),
(3602, 'Vladivostok', 'RUS', 'Primorje', 606200),
(3603, 'Irkutsk', 'RUS', 'Irkutsk', 593700),
(3604, 'Barnaul', 'RUS', 'Altai', 580100),
(3605, 'Novokuznetsk', 'RUS', 'Kemerovo', 561600),
(3606, 'Penza', 'RUS', 'Penza', 532200),
(3607, 'Rjazan', 'RUS', 'Rjazan', 529900),
(3608, 'Orenburg', 'RUS', 'Orenburg', 523600),
(3609, 'Lipetsk', 'RUS', 'Lipetsk', 521000),
(3610, 'Nabereznyje Tšelny', 'RUS', 'Tatarstan', 514700),
(3611, 'Tula', 'RUS', 'Tula', 506100),
(3612, 'Tjumen', 'RUS', 'Tjumen', 503400),
(3613, 'Kemerovo', 'RUS', 'Kemerovo', 492700),
(3614, 'Astrahan', 'RUS', 'Astrahan', 486100),
(3615, 'Tomsk', 'RUS', 'Tomsk', 482100),
(3616, 'Kirov', 'RUS', 'Kirov', 466200),
(3617, 'Ivanovo', 'RUS', 'Ivanovo', 459200),
(3618, 'Tšeboksary', 'RUS', 'Tšuvassia', 459200),
(3619, 'Brjansk', 'RUS', 'Brjansk', 457400),
(3620, 'Tver', 'RUS', 'Tver', 454900),
(3621, 'Kursk', 'RUS', 'Kursk', 443500),
(3622, 'Magnitogorsk', 'RUS', 'Tšeljabinsk', 427900),
(3623, 'Kaliningrad', 'RUS', 'Kaliningrad', 424400),
(3624, 'Nizni Tagil', 'RUS', 'Sverdlovsk', 390900),
(3625, 'Murmansk', 'RUS', 'Murmansk', 376300),
(3626, 'Ulan-Ude', 'RUS', 'Burjatia', 370400),
(3627, 'Kurgan', 'RUS', 'Kurgan', 364700),
(3628, 'Arkangeli', 'RUS', 'Arkangeli', 361800),
(3629, 'Sotši', 'RUS', 'Krasnodar', 358600),
(3630, 'Smolensk', 'RUS', 'Smolensk', 353400),
(3631, 'Orjol', 'RUS', 'Orjol', 344500),
(3632, 'Stavropol', 'RUS', 'Stavropol', 343300),
(3633, 'Belgorod', 'RUS', 'Belgorod', 342000),
(3634, 'Kaluga', 'RUS', 'Kaluga', 339300),
(3635, 'Vladimir', 'RUS', 'Vladimir', 337100),
(3636, 'Mahatškala', 'RUS', 'Dagestan', 332800),
(3637, 'Tšerepovets', 'RUS', 'Vologda', 324400),
(3638, 'Saransk', 'RUS', 'Mordva', 314800),
(3639, 'Tambov', 'RUS', 'Tambov', 312000),
(3640, 'Vladikavkaz', 'RUS', 'North Ossetia-Alania', 310100),
(3641, 'Tšita', 'RUS', 'Tšita', 309900),
(3642, 'Vologda', 'RUS', 'Vologda', 302500),
(3643, 'Veliki Novgorod', 'RUS', 'Novgorod', 299500),
(3644, 'Komsomolsk-na-Amure', 'RUS', 'Habarovsk', 291600),
(3645, 'Kostroma', 'RUS', 'Kostroma', 288100),
(3646, 'Volzski', 'RUS', 'Volgograd', 286900),
(3647, 'Taganrog', 'RUS', 'Rostov-na-Donu', 284400),
(3648, 'Petroskoi', 'RUS', 'Karjala', 282100),
(3649, 'Bratsk', 'RUS', 'Irkutsk', 277600),
(3650, 'Dzerzinsk', 'RUS', 'Nizni Novgorod', 277100),
(3651, 'Surgut', 'RUS', 'Hanti-Mansia', 274900),
(3652, 'Orsk', 'RUS', 'Orenburg', 273900),
(3653, 'Sterlitamak', 'RUS', 'Baškortostan', 265200),
(3654, 'Angarsk', 'RUS', 'Irkutsk', 264700),
(3655, 'Joškar-Ola', 'RUS', 'Marinmaa', 249200),
(3656, 'Rybinsk', 'RUS', 'Jaroslavl', 239600),
(3657, 'Prokopjevsk', 'RUS', 'Kemerovo', 237300),
(3658, 'Niznevartovsk', 'RUS', 'Hanti-Mansia', 233900),
(3659, 'Naltšik', 'RUS', 'Kabardi-Balkaria', 233400),
(3660, 'Syktyvkar', 'RUS', 'Komi', 229700),
(3661, 'Severodvinsk', 'RUS', 'Arkangeli', 229300),
(3662, 'Bijsk', 'RUS', 'Altai', 225000),
(3663, 'Niznekamsk', 'RUS', 'Tatarstan', 223400),
(3664, 'Blagoveštšensk', 'RUS', 'Amur', 222000),
(3665, 'Šahty', 'RUS', 'Rostov-na-Donu', 221800),
(3666, 'Staryi Oskol', 'RUS', 'Belgorod', 213800),
(3667, 'Zelenograd', 'RUS', 'Moscow (City)', 207100),
(3668, 'Balakovo', 'RUS', 'Saratov', 206000),
(3669, 'Novorossijsk', 'RUS', 'Krasnodar', 203300),
(3670, 'Pihkova', 'RUS', 'Pihkova', 201500),
(3671, 'Zlatoust', 'RUS', 'Tšeljabinsk', 196900),
(3672, 'Jakutsk', 'RUS', 'Saha (Jakutia)', 195400),
(3673, 'Podolsk', 'RUS', 'Moskova', 194300),
(3674, 'Petropavlovsk-Kamtšatski', 'RUS', 'Kamtšatka', 194100),
(3675, 'Kamensk-Uralski', 'RUS', 'Sverdlovsk', 190600),
(3676, 'Engels', 'RUS', 'Saratov', 189000),
(3677, 'Syzran', 'RUS', 'Samara', 186900),
(3678, 'Grozny', 'RUS', 'Tšetšenia', 186000),
(3679, 'Novotšerkassk', 'RUS', 'Rostov-na-Donu', 184400),
(3680, 'Berezniki', 'RUS', 'Perm', 181900),
(3681, 'Juzno-Sahalinsk', 'RUS', 'Sahalin', 179200),
(3682, 'Volgodonsk', 'RUS', 'Rostov-na-Donu', 178200),
(3683, 'Abakan', 'RUS', 'Hakassia', 169200),
(3684, 'Maikop', 'RUS', 'Adygea', 167300),
(3685, 'Miass', 'RUS', 'Tšeljabinsk', 166200),
(3686, 'Armavir', 'RUS', 'Krasnodar', 164900),
(3687, 'Ljubertsy', 'RUS', 'Moskova', 163900),
(3688, 'Rubtsovsk', 'RUS', 'Altai', 162600),
(3689, 'Kovrov', 'RUS', 'Vladimir', 159900),
(3690, 'Nahodka', 'RUS', 'Primorje', 157700),
(3691, 'Ussurijsk', 'RUS', 'Primorje', 157300),
(3692, 'Salavat', 'RUS', 'Baškortostan', 156800),
(3693, 'Mytištši', 'RUS', 'Moskova', 155700),
(3694, 'Kolomna', 'RUS', 'Moskova', 150700),
(3695, 'Elektrostal', 'RUS', 'Moskova', 147000),
(3696, 'Murom', 'RUS', 'Vladimir', 142400),
(3697, 'Kolpino', 'RUS', 'Pietari', 141200),
(3698, 'Norilsk', 'RUS', 'Krasnojarsk', 140800),
(3699, 'Almetjevsk', 'RUS', 'Tatarstan', 140700),
(3700, 'Novomoskovsk', 'RUS', 'Tula', 138100),
(3701, 'Dimitrovgrad', 'RUS', 'Uljanovsk', 137000),
(3702, 'Pervouralsk', 'RUS', 'Sverdlovsk', 136100),
(3703, 'Himki', 'RUS', 'Moskova', 133700),
(3704, 'Balašiha', 'RUS', 'Moskova', 132900),
(3705, 'Nevinnomyssk', 'RUS', 'Stavropol', 132600),
(3706, 'Pjatigorsk', 'RUS', 'Stavropol', 132500),
(3707, 'Korolev', 'RUS', 'Moskova', 132400),
(3708, 'Serpuhov', 'RUS', 'Moskova', 132000),
(3709, 'Odintsovo', 'RUS', 'Moskova', 127400),
(3710, 'Orehovo-Zujevo', 'RUS', 'Moskova', 124900),
(3711, 'Kamyšin', 'RUS', 'Volgograd', 124600),
(3712, 'Novotšeboksarsk', 'RUS', 'Tšuvassia', 123400),
(3713, 'Tšerkessk', 'RUS', 'Karatšai-Tšerkessia', 121700),
(3714, 'Atšinsk', 'RUS', 'Krasnojarsk', 121600),
(3715, 'Magadan', 'RUS', 'Magadan', 121000),
(3716, 'Mitšurinsk', 'RUS', 'Tambov', 120700),
(3717, 'Kislovodsk', 'RUS', 'Stavropol', 120400),
(3718, 'Jelets', 'RUS', 'Lipetsk', 119400),
(3719, 'Seversk', 'RUS', 'Tomsk', 118600),
(3720, 'Noginsk', 'RUS', 'Moskova', 117200),
(3721, 'Velikije Luki', 'RUS', 'Pihkova', 116300),
(3722, 'Novokuibyševsk', 'RUS', 'Samara', 116200),
(3723, 'Neftekamsk', 'RUS', 'Baškortostan', 115700),
(3724, 'Leninsk-Kuznetski', 'RUS', 'Kemerovo', 113800),
(3725, 'Oktjabrski', 'RUS', 'Baškortostan', 111500),
(3726, 'Sergijev Posad', 'RUS', 'Moskova', 111100),
(3727, 'Arzamas', 'RUS', 'Nizni Novgorod', 110700),
(3728, 'Kiseljovsk', 'RUS', 'Kemerovo', 110000),
(3729, 'Novotroitsk', 'RUS', 'Orenburg', 109600),
(3730, 'Obninsk', 'RUS', 'Kaluga', 108300),
(3731, 'Kansk', 'RUS', 'Krasnojarsk', 107400),
(3732, 'Glazov', 'RUS', 'Udmurtia', 106300),
(3733, 'Solikamsk', 'RUS', 'Perm', 106000),
(3734, 'Sarapul', 'RUS', 'Udmurtia', 105700),
(3735, 'Ust-Ilimsk', 'RUS', 'Irkutsk', 105200),
(3736, 'Štšolkovo', 'RUS', 'Moskova', 104900),
(3737, 'Mezduretšensk', 'RUS', 'Kemerovo', 104400),
(3738, 'Usolje-Sibirskoje', 'RUS', 'Irkutsk', 103500),
(3739, 'Elista', 'RUS', 'Kalmykia', 103300),
(3740, 'Novošahtinsk', 'RUS', 'Rostov-na-Donu', 101900),
(3741, 'Votkinsk', 'RUS', 'Udmurtia', 101700),
(3742, 'Kyzyl', 'RUS', 'Tyva', 101100),
(3743, 'Serov', 'RUS', 'Sverdlovsk', 100400),
(3744, 'Zelenodolsk', 'RUS', 'Tatarstan', 100200),
(3745, 'Zeleznodoroznyi', 'RUS', 'Moskova', 100100),
(3746, 'Kinešma', 'RUS', 'Ivanovo', 100000),
(3747, 'Kuznetsk', 'RUS', 'Penza', 98200),
(3748, 'Uhta', 'RUS', 'Komi', 98000),
(3749, 'Jessentuki', 'RUS', 'Stavropol', 97900),
(3750, 'Tobolsk', 'RUS', 'Tjumen', 97600),
(3751, 'Neftejugansk', 'RUS', 'Hanti-Mansia', 97400),
(3752, 'Bataisk', 'RUS', 'Rostov-na-Donu', 97300),
(3753, 'Nojabrsk', 'RUS', 'Yamalin Nenetsia', 97300),
(3754, 'Balašov', 'RUS', 'Saratov', 97100),
(3755, 'Zeleznogorsk', 'RUS', 'Kursk', 96900),
(3756, 'Zukovski', 'RUS', 'Moskova', 96500),
(3757, 'Anzero-Sudzensk', 'RUS', 'Kemerovo', 96100),
(3758, 'Bugulma', 'RUS', 'Tatarstan', 94100),
(3759, 'Zeleznogorsk', 'RUS', 'Krasnojarsk', 94000),
(3760, 'Novouralsk', 'RUS', 'Sverdlovsk', 93300),
(3761, 'Puškin', 'RUS', 'Pietari', 92900),
(3762, 'Vorkuta', 'RUS', 'Komi', 92600),
(3763, 'Derbent', 'RUS', 'Dagestan', 92300),
(3764, 'Kirovo-Tšepetsk', 'RUS', 'Kirov', 91600),
(3765, 'Krasnogorsk', 'RUS', 'Moskova', 91000),
(3766, 'Klin', 'RUS', 'Moskova', 90000),
(3767, 'Tšaikovski', 'RUS', 'Perm', 90000),
(3768, 'Novyi Urengoi', 'RUS', 'Yamalin Nenetsia', 89800),
(3769, 'Ho Chi Minh City', 'VNM', 'Ho Chi Minh City', 3980000),
(3770, 'Hanoi', 'VNM', 'Hanoi', 1410000),
(3771, 'Haiphong', 'VNM', 'Haiphong', 783133),
(3772, 'Da Nang', 'VNM', 'Quang Nam-Da Nang', 382674),
(3773, 'Biên Hoa', 'VNM', 'Dong Nai', 282095),
(3774, 'Nha Trang', 'VNM', 'Khanh Hoa', 221331),
(3775, 'Hue', 'VNM', 'Thua Thien-Hue', 219149),
(3776, 'Can Tho', 'VNM', 'Can Tho', 215587),
(3777, 'Cam Pha', 'VNM', 'Quang Binh', 209086),
(3778, 'Nam Dinh', 'VNM', 'Nam Ha', 171699),
(3779, 'Quy Nhon', 'VNM', 'Binh Dinh', 163385),
(3780, 'Vung Tau', 'VNM', 'Ba Ria-Vung Tau', 145145),
(3781, 'Rach Gia', 'VNM', 'Kien Giang', 141132),
(3782, 'Long Xuyen', 'VNM', 'An Giang', 132681),
(3783, 'Thai Nguyen', 'VNM', 'Bac Thai', 127643),
(3784, 'Hong Gai', 'VNM', 'Quang Ninh', 127484),
(3785, 'Phan Thiêt', 'VNM', 'Binh Thuan', 114236),
(3786, 'Cam Ranh', 'VNM', 'Khanh Hoa', 114041),
(3787, 'Vinh', 'VNM', 'Nghe An', 112455),
(3788, 'My Tho', 'VNM', 'Tien Giang', 108404),
(3789, 'Da Lat', 'VNM', 'Lam Dong', 106409),
(3790, 'Buon Ma Thuot', 'VNM', 'Dac Lac', 97044),
(3791, 'Tallinn', 'EST', 'Harjumaa', 403981),
(3792, 'Tartu', 'EST', 'Tartumaa', 101246),
(3793, 'New York', 'USA', 'New York', 8008278),
(3794, 'Los Angeles', 'USA', 'California', 3694820),
(3795, 'Chicago', 'USA', 'Illinois', 2896016),
(3796, 'Houston', 'USA', 'Texas', 1953631),
(3797, 'Philadelphia', 'USA', 'Pennsylvania', 1517550),
(3798, 'Phoenix', 'USA', 'Arizona', 1321045),
(3799, 'San Diego', 'USA', 'California', 1223400),
(3800, 'Dallas', 'USA', 'Texas', 1188580),
(3801, 'San Antonio', 'USA', 'Texas', 1144646),
(3802, 'Detroit', 'USA', 'Michigan', 951270),
(3803, 'San Jose', 'USA', 'California', 894943),
(3804, 'Indianapolis', 'USA', 'Indiana', 791926),
(3805, 'San Francisco', 'USA', 'California', 776733),
(3806, 'Jacksonville', 'USA', 'Florida', 735167),
(3807, 'Columbus', 'USA', 'Ohio', 711470),
(3808, 'Austin', 'USA', 'Texas', 656562),
(3809, 'Baltimore', 'USA', 'Maryland', 651154),
(3810, 'Memphis', 'USA', 'Tennessee', 650100),
(3811, 'Milwaukee', 'USA', 'Wisconsin', 596974),
(3812, 'Boston', 'USA', 'Massachusetts', 589141),
(3813, 'Washington', 'USA', 'District of Columbia', 572059),
(3814, 'Nashville-Davidson', 'USA', 'Tennessee', 569891),
(3815, 'El Paso', 'USA', 'Texas', 563662),
(3816, 'Seattle', 'USA', 'Washington', 563374),
(3817, 'Denver', 'USA', 'Colorado', 554636),
(3818, 'Charlotte', 'USA', 'North Carolina', 540828),
(3819, 'Fort Worth', 'USA', 'Texas', 534694),
(3820, 'Portland', 'USA', 'Oregon', 529121),
(3821, 'Oklahoma City', 'USA', 'Oklahoma', 506132),
(3822, 'Tucson', 'USA', 'Arizona', 486699),
(3823, 'New Orleans', 'USA', 'Louisiana', 484674),
(3824, 'Las Vegas', 'USA', 'Nevada', 478434),
(3825, 'Cleveland', 'USA', 'Ohio', 478403),
(3826, 'Long Beach', 'USA', 'California', 461522),
(3827, 'Albuquerque', 'USA', 'New Mexico', 448607),
(3828, 'Kansas City', 'USA', 'Missouri', 441545),
(3829, 'Fresno', 'USA', 'California', 427652),
(3830, 'Virginia Beach', 'USA', 'Virginia', 425257),
(3831, 'Atlanta', 'USA', 'Georgia', 416474),
(3832, 'Sacramento', 'USA', 'California', 407018),
(3833, 'Oakland', 'USA', 'California', 399484),
(3834, 'Mesa', 'USA', 'Arizona', 396375),
(3835, 'Tulsa', 'USA', 'Oklahoma', 393049),
(3836, 'Omaha', 'USA', 'Nebraska', 390007),
(3837, 'Minneapolis', 'USA', 'Minnesota', 382618),
(3838, 'Honolulu', 'USA', 'Hawaii', 371657),
(3839, 'Miami', 'USA', 'Florida', 362470),
(3840, 'Colorado Springs', 'USA', 'Colorado', 360890),
(3841, 'Saint Louis', 'USA', 'Missouri', 348189),
(3842, 'Wichita', 'USA', 'Kansas', 344284),
(3843, 'Santa Ana', 'USA', 'California', 337977),
(3844, 'Pittsburgh', 'USA', 'Pennsylvania', 334563),
(3845, 'Arlington', 'USA', 'Texas', 332969),
(3846, 'Cincinnati', 'USA', 'Ohio', 331285),
(3847, 'Anaheim', 'USA', 'California', 328014),
(3848, 'Toledo', 'USA', 'Ohio', 313619),
(3849, 'Tampa', 'USA', 'Florida', 303447),
(3850, 'Buffalo', 'USA', 'New York', 292648),
(3851, 'Saint Paul', 'USA', 'Minnesota', 287151),
(3852, 'Corpus Christi', 'USA', 'Texas', 277454),
(3853, 'Aurora', 'USA', 'Colorado', 276393),
(3854, 'Raleigh', 'USA', 'North Carolina', 276093),
(3855, 'Newark', 'USA', 'New Jersey', 273546),
(3856, 'Lexington-Fayette', 'USA', 'Kentucky', 260512),
(3857, 'Anchorage', 'USA', 'Alaska', 260283),
(3858, 'Louisville', 'USA', 'Kentucky', 256231),
(3859, 'Riverside', 'USA', 'California', 255166),
(3860, 'Saint Petersburg', 'USA', 'Florida', 248232),
(3861, 'Bakersfield', 'USA', 'California', 247057),
(3862, 'Stockton', 'USA', 'California', 243771),
(3863, 'Birmingham', 'USA', 'Alabama', 242820),
(3864, 'Jersey City', 'USA', 'New Jersey', 240055),
(3865, 'Norfolk', 'USA', 'Virginia', 234403),
(3866, 'Baton Rouge', 'USA', 'Louisiana', 227818),
(3867, 'Hialeah', 'USA', 'Florida', 226419),
(3868, 'Lincoln', 'USA', 'Nebraska', 225581),
(3869, 'Greensboro', 'USA', 'North Carolina', 223891),
(3870, 'Plano', 'USA', 'Texas', 222030),
(3871, 'Rochester', 'USA', 'New York', 219773),
(3872, 'Glendale', 'USA', 'Arizona', 218812),
(3873, 'Akron', 'USA', 'Ohio', 217074),
(3874, 'Garland', 'USA', 'Texas', 215768),
(3875, 'Madison', 'USA', 'Wisconsin', 208054),
(3876, 'Fort Wayne', 'USA', 'Indiana', 205727),
(3877, 'Fremont', 'USA', 'California', 203413),
(3878, 'Scottsdale', 'USA', 'Arizona', 202705),
(3879, 'Montgomery', 'USA', 'Alabama', 201568),
(3880, 'Shreveport', 'USA', 'Louisiana', 200145),
(3881, 'Augusta-Richmond County', 'USA', 'Georgia', 199775),
(3882, 'Lubbock', 'USA', 'Texas', 199564),
(3883, 'Chesapeake', 'USA', 'Virginia', 199184),
(3884, 'Mobile', 'USA', 'Alabama', 198915),
(3885, 'Des Moines', 'USA', 'Iowa', 198682),
(3886, 'Grand Rapids', 'USA', 'Michigan', 197800),
(3887, 'Richmond', 'USA', 'Virginia', 197790),
(3888, 'Yonkers', 'USA', 'New York', 196086),
(3889, 'Spokane', 'USA', 'Washington', 195629),
(3890, 'Glendale', 'USA', 'California', 194973),
(3891, 'Tacoma', 'USA', 'Washington', 193556),
(3892, 'Irving', 'USA', 'Texas', 191615),
(3893, 'Huntington Beach', 'USA', 'California', 189594),
(3894, 'Modesto', 'USA', 'California', 188856),
(3895, 'Durham', 'USA', 'North Carolina', 187035),
(3896, 'Columbus', 'USA', 'Georgia', 186291),
(3897, 'Orlando', 'USA', 'Florida', 185951),
(3898, 'Boise City', 'USA', 'Idaho', 185787),
(3899, 'Winston-Salem', 'USA', 'North Carolina', 185776),
(3900, 'San Bernardino', 'USA', 'California', 185401),
(3901, 'Jackson', 'USA', 'Mississippi', 184256),
(3902, 'Little Rock', 'USA', 'Arkansas', 183133),
(3903, 'Salt Lake City', 'USA', 'Utah', 181743),
(3904, 'Reno', 'USA', 'Nevada', 180480),
(3905, 'Newport News', 'USA', 'Virginia', 180150),
(3906, 'Chandler', 'USA', 'Arizona', 176581),
(3907, 'Laredo', 'USA', 'Texas', 176576),
(3908, 'Henderson', 'USA', 'Nevada', 175381),
(3909, 'Arlington', 'USA', 'Virginia', 174838),
(3910, 'Knoxville', 'USA', 'Tennessee', 173890),
(3911, 'Amarillo', 'USA', 'Texas', 173627),
(3912, 'Providence', 'USA', 'Rhode Island', 173618),
(3913, 'Chula Vista', 'USA', 'California', 173556),
(3914, 'Worcester', 'USA', 'Massachusetts', 172648),
(3915, 'Oxnard', 'USA', 'California', 170358),
(3916, 'Dayton', 'USA', 'Ohio', 166179),
(3917, 'Garden Grove', 'USA', 'California', 165196),
(3918, 'Oceanside', 'USA', 'California', 161029),
(3919, 'Tempe', 'USA', 'Arizona', 158625),
(3920, 'Huntsville', 'USA', 'Alabama', 158216),
(3921, 'Ontario', 'USA', 'California', 158007),
(3922, 'Chattanooga', 'USA', 'Tennessee', 155554),
(3923, 'Fort Lauderdale', 'USA', 'Florida', 152397),
(3924, 'Springfield', 'USA', 'Massachusetts', 152082),
(3925, 'Springfield', 'USA', 'Missouri', 151580),
(3926, 'Santa Clarita', 'USA', 'California', 151088),
(3927, 'Salinas', 'USA', 'California', 151060),
(3928, 'Tallahassee', 'USA', 'Florida', 150624),
(3929, 'Rockford', 'USA', 'Illinois', 150115),
(3930, 'Pomona', 'USA', 'California', 149473),
(3931, 'Metairie', 'USA', 'Louisiana', 149428),
(3932, 'Paterson', 'USA', 'New Jersey', 149222),
(3933, 'Overland Park', 'USA', 'Kansas', 149080),
(3934, 'Santa Rosa', 'USA', 'California', 147595),
(3935, 'Syracuse', 'USA', 'New York', 147306),
(3936, 'Kansas City', 'USA', 'Kansas', 146866),
(3937, 'Hampton', 'USA', 'Virginia', 146437),
(3938, 'Lakewood', 'USA', 'Colorado', 144126),
(3939, 'Vancouver', 'USA', 'Washington', 143560),
(3940, 'Irvine', 'USA', 'California', 143072),
(3941, 'Aurora', 'USA', 'Illinois', 142990),
(3942, 'Moreno Valley', 'USA', 'California', 142381),
(3943, 'Pasadena', 'USA', 'California', 141674),
(3944, 'Hayward', 'USA', 'California', 140030),
(3945, 'Brownsville', 'USA', 'Texas', 139722),
(3946, 'Bridgeport', 'USA', 'Connecticut', 139529),
(3947, 'Hollywood', 'USA', 'Florida', 139357),
(3948, 'Warren', 'USA', 'Michigan', 138247),
(3949, 'Torrance', 'USA', 'California', 137946),
(3950, 'Eugene', 'USA', 'Oregon', 137893),
(3951, 'Pembroke Pines', 'USA', 'Florida', 137427),
(3952, 'Salem', 'USA', 'Oregon', 136924),
(3953, 'Pasadena', 'USA', 'Texas', 133936),
(3954, 'Escondido', 'USA', 'California', 133559),
(3955, 'Sunnyvale', 'USA', 'California', 131760),
(3956, 'Savannah', 'USA', 'Georgia', 131510),
(3957, 'Fontana', 'USA', 'California', 128929),
(3958, 'Orange', 'USA', 'California', 128821),
(3959, 'Naperville', 'USA', 'Illinois', 128358),
(3960, 'Alexandria', 'USA', 'Virginia', 128283),
(3961, 'Rancho Cucamonga', 'USA', 'California', 127743),
(3962, 'Grand Prairie', 'USA', 'Texas', 127427),
(3963, 'East Los Angeles', 'USA', 'California', 126379),
(3964, 'Fullerton', 'USA', 'California', 126003),
(3965, 'Corona', 'USA', 'California', 124966),
(3966, 'Flint', 'USA', 'Michigan', 124943),
(3967, 'Paradise', 'USA', 'Nevada', 124682),
(3968, 'Mesquite', 'USA', 'Texas', 124523),
(3969, 'Sterling Heights', 'USA', 'Michigan', 124471),
(3970, 'Sioux Falls', 'USA', 'South Dakota', 123975),
(3971, 'New Haven', 'USA', 'Connecticut', 123626),
(3972, 'Topeka', 'USA', 'Kansas', 122377),
(3973, 'Concord', 'USA', 'California', 121780),
(3974, 'Evansville', 'USA', 'Indiana', 121582),
(3975, 'Hartford', 'USA', 'Connecticut', 121578),
(3976, 'Fayetteville', 'USA', 'North Carolina', 121015),
(3977, 'Cedar Rapids', 'USA', 'Iowa', 120758),
(3978, 'Elizabeth', 'USA', 'New Jersey', 120568),
(3979, 'Lansing', 'USA', 'Michigan', 119128),
(3980, 'Lancaster', 'USA', 'California', 118718),
(3981, 'Fort Collins', 'USA', 'Colorado', 118652),
(3982, 'Coral Springs', 'USA', 'Florida', 117549),
(3983, 'Stamford', 'USA', 'Connecticut', 117083),
(3984, 'Thousand Oaks', 'USA', 'California', 117005),
(3985, 'Vallejo', 'USA', 'California', 116760),
(3986, 'Palmdale', 'USA', 'California', 116670),
(3987, 'Columbia', 'USA', 'South Carolina', 116278),
(3988, 'El Monte', 'USA', 'California', 115965),
(3989, 'Abilene', 'USA', 'Texas', 115930),
(3990, 'North Las Vegas', 'USA', 'Nevada', 115488),
(3991, 'Ann Arbor', 'USA', 'Michigan', 114024),
(3992, 'Beaumont', 'USA', 'Texas', 113866),
(3993, 'Waco', 'USA', 'Texas', 113726),
(3994, 'Macon', 'USA', 'Georgia', 113336),
(3995, 'Independence', 'USA', 'Missouri', 113288),
(3996, 'Peoria', 'USA', 'Illinois', 112936),
(3997, 'Inglewood', 'USA', 'California', 112580),
(3998, 'Springfield', 'USA', 'Illinois', 111454),
(3999, 'Simi Valley', 'USA', 'California', 111351),
(4000, 'Lafayette', 'USA', 'Louisiana', 110257),
(4001, 'Gilbert', 'USA', 'Arizona', 109697),
(4002, 'Carrollton', 'USA', 'Texas', 109576),
(4003, 'Bellevue', 'USA', 'Washington', 109569),
(4004, 'West Valley City', 'USA', 'Utah', 108896),
(4005, 'Clarksville', 'USA', 'Tennessee', 108787),
(4006, 'Costa Mesa', 'USA', 'California', 108724),
(4007, 'Peoria', 'USA', 'Arizona', 108364),
(4008, 'South Bend', 'USA', 'Indiana', 107789),
(4009, 'Downey', 'USA', 'California', 107323),
(4010, 'Waterbury', 'USA', 'Connecticut', 107271),
(4011, 'Manchester', 'USA', 'New Hampshire', 107006),
(4012, 'Allentown', 'USA', 'Pennsylvania', 106632),
(4013, 'McAllen', 'USA', 'Texas', 106414),
(4014, 'Joliet', 'USA', 'Illinois', 106221),
(4015, 'Lowell', 'USA', 'Massachusetts', 105167),
(4016, 'Provo', 'USA', 'Utah', 105166),
(4017, 'West Covina', 'USA', 'California', 105080),
(4018, 'Wichita Falls', 'USA', 'Texas', 104197),
(4019, 'Erie', 'USA', 'Pennsylvania', 103717),
(4020, 'Daly City', 'USA', 'California', 103621),
(4021, 'Citrus Heights', 'USA', 'California', 103455),
(4022, 'Norwalk', 'USA', 'California', 103298),
(4023, 'Gary', 'USA', 'Indiana', 102746),
(4024, 'Berkeley', 'USA', 'California', 102743),
(4025, 'Santa Clara', 'USA', 'California', 102361),
(4026, 'Green Bay', 'USA', 'Wisconsin', 102313),
(4027, 'Cape Coral', 'USA', 'Florida', 102286),
(4028, 'Arvada', 'USA', 'Colorado', 102153),
(4029, 'Pueblo', 'USA', 'Colorado', 102121),
(4030, 'Sandy', 'USA', 'Utah', 101853),
(4031, 'Athens-Clarke County', 'USA', 'Georgia', 101489),
(4032, 'Cambridge', 'USA', 'Massachusetts', 101355),
(4033, 'Westminster', 'USA', 'Colorado', 100940),
(4034, 'San Buenaventura', 'USA', 'California', 100916),
(4035, 'Portsmouth', 'USA', 'Virginia', 100565),
(4036, 'Livonia', 'USA', 'Michigan', 100545),
(4037, 'Burbank', 'USA', 'California', 100316),
(4038, 'Clearwater', 'USA', 'Florida', 99936),
(4039, 'Midland', 'USA', 'Texas', 98293),
(4040, 'Davenport', 'USA', 'Iowa', 98256),
(4041, 'Mission Viejo', 'USA', 'California', 98049),
(4042, 'Miami Beach', 'USA', 'Florida', 97855),
(4043, 'Sunrise Manor', 'USA', 'Nevada', 95362),
(4044, 'New Bedford', 'USA', 'Massachusetts', 94780),
(4045, 'El Cajon', 'USA', 'California', 94578),
(4046, 'Norman', 'USA', 'Oklahoma', 94193),
(4047, 'Richmond', 'USA', 'California', 94100),
(4048, 'Albany', 'USA', 'New York', 93994),
(4049, 'Brockton', 'USA', 'Massachusetts', 93653),
(4050, 'Roanoke', 'USA', 'Virginia', 93357),
(4051, 'Billings', 'USA', 'Montana', 92988),
(4052, 'Compton', 'USA', 'California', 92864),
(4053, 'Gainesville', 'USA', 'Florida', 92291),
(4054, 'Fairfield', 'USA', 'California', 92256),
(4055, 'Arden-Arcade', 'USA', 'California', 92040),
(4056, 'San Mateo', 'USA', 'California', 91799),
(4057, 'Visalia', 'USA', 'California', 91762),
(4058, 'Boulder', 'USA', 'Colorado', 91238),
(4059, 'Cary', 'USA', 'North Carolina', 91213),
(4060, 'Santa Monica', 'USA', 'California', 91084),
(4061, 'Fall River', 'USA', 'Massachusetts', 90555),
(4062, 'Kenosha', 'USA', 'Wisconsin', 89447),
(4063, 'Elgin', 'USA', 'Illinois', 89408),
(4064, 'Odessa', 'USA', 'Texas', 89293),
(4065, 'Carson', 'USA', 'California', 89089),
(4066, 'Charleston', 'USA', 'South Carolina', 89063),
(4067, 'Charlotte Amalie', 'VIR', 'St Thomas', 13000),
(4068, 'Harare', 'ZWE', 'Harare', 1410000),
(4069, 'Bulawayo', 'ZWE', 'Bulawayo', 621742),
(4070, 'Chitungwiza', 'ZWE', 'Harare', 274912),
(4071, 'Mount Darwin', 'ZWE', 'Harare', 164362),
(4072, 'Mutare', 'ZWE', 'Manicaland', 131367),
(4073, 'Gweru', 'ZWE', 'Midlands', 128037),
(4074, 'Gaza', 'PSE', 'Gaza', 353632),
(4075, 'Khan Yunis', 'PSE', 'Khan Yunis', 123175),
(4076, 'Hebron', 'PSE', 'Hebron', 119401),
(4077, 'Jabaliya', 'PSE', 'North Gaza', 113901),
(4078, 'Nablus', 'PSE', 'Nablus', 100231),
(4079, 'Rafah', 'PSE', 'Rafah', 92020),
(4080, 'Otra', 'ABW', 'Otra', 0),
(4081, 'Otra', 'AFG', 'Otra', 0),
(4082, 'Otra', 'AGO', 'Otra', 0),
(4083, 'Otra', 'AIA', 'Otra', 0),
(4084, 'Otra', 'ALB', 'Otra', 0),
(4085, 'Otra', 'AND', 'Otra', 0),
(4086, 'Otra', 'ANT', 'Otra', 0),
(4087, 'Otra', 'ARE', 'Otra', 0),
(4088, 'Otra', 'ARG', 'Otra', 0),
(4089, 'Otra', 'ARM', 'Otra', 0),
(4090, 'Otra', 'ASM', 'Otra', 0),
(4091, 'Otra', 'ATA', 'Otra', 0),
(4092, 'Otra', 'ATF', 'Otra', 0),
(4093, 'Otra', 'ATG', 'Otra', 0),
(4094, 'Otra', 'AUS', 'Otra', 0),
(4095, 'Otra', 'AUT', 'Otra', 0),
(4096, 'Otra', 'AZE', 'Otra', 0),
(4097, 'Otra', 'BDI', 'Otra', 0),
(4098, 'Otra', 'BEL', 'Otra', 0),
(4099, 'Otra', 'BEN', 'Otra', 0),
(4100, 'Otra', 'BFA', 'Otra', 0),
(4101, 'Otra', 'BGD', 'Otra', 0),
(4102, 'Otra', 'BGR', 'Otra', 0),
(4103, 'Otra', 'BHR', 'Otra', 0),
(4104, 'Otra', 'BHS', 'Otra', 0),
(4105, 'Otra', 'BIH', 'Otra', 0),
(4106, 'Otra', 'BLR', 'Otra', 0),
(4107, 'Otra', 'BLZ', 'Otra', 0),
(4108, 'Otra', 'BMU', 'Otra', 0),
(4109, 'Otra', 'BOL', 'Otra', 0),
(4110, 'Otra', 'BRA', 'Otra', 0),
(4111, 'Otra', 'BRB', 'Otra', 0),
(4112, 'Otra', 'BRN', 'Otra', 0),
(4113, 'Otra', 'BTN', 'Otra', 0),
(4114, 'Otra', 'BVT', 'Otra', 0),
(4115, 'Otra', 'BWA', 'Otra', 0),
(4116, 'Otra', 'CAF', 'Otra', 0),
(4117, 'Otra', 'CAN', 'Otra', 0),
(4118, 'Otra', 'CCK', 'Otra', 0),
(4119, 'Otra', 'CHE', 'Otra', 0),
(4120, 'Otra', 'CHL', 'Otra', 0),
(4121, 'Otra', 'CHN', 'Otra', 0),
(4122, 'Otra', 'CIV', 'Otra', 0),
(4123, 'Otra', 'CMR', 'Otra', 0),
(4124, 'Otra', 'COD', 'Otra', 0),
(4125, 'Otra', 'COG', 'Otra', 0),
(4126, 'Otra', 'COK', 'Otra', 0),
(4127, 'Otra', 'COL', 'Otra', 0),
(4128, 'Otra', 'COM', 'Otra', 0),
(4129, 'Otra', 'CPV', 'Otra', 0),
(4130, 'Otra', 'CRI', 'Otra', 0),
(4131, 'Otra', 'CUB', 'Otra', 0),
(4132, 'Otra', 'CXR', 'Otra', 0),
(4133, 'Otra', 'CYM', 'Otra', 0),
(4134, 'Otra', 'CYP', 'Otra', 0),
(4135, 'Otra', 'CZE', 'Otra', 0),
(4136, 'Otra', 'DEU', 'Otra', 0),
(4137, 'Otra', 'DJI', 'Otra', 0),
(4138, 'Otra', 'DMA', 'Otra', 0),
(4139, 'Otra', 'DNK', 'Otra', 0),
(4140, 'Otra', 'DOM', 'Otra', 0),
(4141, 'Otra', 'DZA', 'Otra', 0),
(4142, 'Otra', 'ECU', 'Otra', 0),
(4143, 'Otra', 'EGY', 'Otra', 0),
(4144, 'Otra', 'ERI', 'Otra', 0),
(4145, 'Otra', 'ESH', 'Otra', 0),
(4146, 'Otra', 'ESP', 'Otra', 0),
(4147, 'Otra', 'EST', 'Otra', 0),
(4148, 'Otra', 'ETH', 'Otra', 0),
(4149, 'Otra', 'FIN', 'Otra', 0),
(4150, 'Otra', 'FJI', 'Otra', 0),
(4151, 'Otra', 'FLK', 'Otra', 0),
(4152, 'Otra', 'FRA', 'Otra', 0),
(4153, 'Otra', 'FRO', 'Otra', 0),
(4154, 'Otra', 'FSM', 'Otra', 0),
(4155, 'Otra', 'GAB', 'Otra', 0),
(4156, 'Otra', 'GBR', 'Otra', 0),
(4157, 'Otra', 'GEO', 'Otra', 0),
(4158, 'Otra', 'GHA', 'Otra', 0),
(4159, 'Otra', 'GIB', 'Otra', 0),
(4160, 'Otra', 'GIN', 'Otra', 0),
(4161, 'Otra', 'GLP', 'Otra', 0),
(4162, 'Otra', 'GMB', 'Otra', 0),
(4163, 'Otra', 'GNB', 'Otra', 0),
(4164, 'Otra', 'GNQ', 'Otra', 0),
(4165, 'Otra', 'GRC', 'Otra', 0),
(4166, 'Otra', 'GRD', 'Otra', 0),
(4167, 'Otra', 'GRL', 'Otra', 0),
(4168, 'Otra', 'GTM', 'Otra', 0),
(4169, 'Otra', 'GUF', 'Otra', 0),
(4170, 'Otra', 'GUM', 'Otra', 0),
(4171, 'Otra', 'GUY', 'Otra', 0),
(4172, 'Otra', 'HKG', 'Otra', 0),
(4173, 'Otra', 'HMD', 'Otra', 0),
(4174, 'Otra', 'HND', 'Otra', 0),
(4175, 'Otra', 'HRV', 'Otra', 0),
(4176, 'Otra', 'HTI', 'Otra', 0),
(4177, 'Otra', 'HUN', 'Otra', 0),
(4178, 'Otra', 'IDN', 'Otra', 0),
(4179, 'Otra', 'IND', 'Otra', 0),
(4180, 'Otra', 'IOT', 'Otra', 0),
(4181, 'Otra', 'IRL', 'Otra', 0),
(4182, 'Otra', 'IRN', 'Otra', 0),
(4183, 'Otra', 'IRQ', 'Otra', 0),
(4184, 'Otra', 'ISL', 'Otra', 0),
(4185, 'Otra', 'ISR', 'Otra', 0),
(4186, 'Otra', 'ITA', 'Otra', 0),
(4187, 'Otra', 'JAM', 'Otra', 0),
(4188, 'Otra', 'JOR', 'Otra', 0),
(4189, 'Otra', 'JPN', 'Otra', 0),
(4190, 'Otra', 'KAZ', 'Otra', 0),
(4191, 'Otra', 'KEN', 'Otra', 0),
(4192, 'Otra', 'KGZ', 'Otra', 0),
(4193, 'Otra', 'KHM', 'Otra', 0),
(4194, 'Otra', 'KIR', 'Otra', 0),
(4195, 'Otra', 'KNA', 'Otra', 0),
(4196, 'Otra', 'KOR', 'Otra', 0),
(4197, 'Otra', 'KWT', 'Otra', 0),
(4198, 'Otra', 'LAO', 'Otra', 0),
(4199, 'Otra', 'LBN', 'Otra', 0),
(4200, 'Otra', 'LBR', 'Otra', 0),
(4201, 'Otra', 'LBY', 'Otra', 0),
(4202, 'Otra', 'LCA', 'Otra', 0),
(4203, 'Otra', 'LIE', 'Otra', 0),
(4204, 'Otra', 'LKA', 'Otra', 0),
(4205, 'Otra', 'LSO', 'Otra', 0),
(4206, 'Otra', 'LTU', 'Otra', 0),
(4207, 'Otra', 'LUX', 'Otra', 0),
(4208, 'Otra', 'LVA', 'Otra', 0),
(4209, 'Otra', 'MAC', 'Otra', 0),
(4210, 'Otra', 'MAR', 'Otra', 0),
(4211, 'Otra', 'MCO', 'Otra', 0),
(4212, 'Otra', 'MDA', 'Otra', 0),
(4213, 'Otra', 'MDG', 'Otra', 0),
(4214, 'Otra', 'MDV', 'Otra', 0),
(4215, 'Otra', 'MEX', 'Otra', 0),
(4216, 'Otra', 'MHL', 'Otra', 0),
(4217, 'Otra', 'MKD', 'Otra', 0),
(4218, 'Otra', 'MLI', 'Otra', 0),
(4219, 'Otra', 'MLT', 'Otra', 0),
(4220, 'Otra', 'MMR', 'Otra', 0),
(4221, 'Otra', 'MNG', 'Otra', 0),
(4222, 'Otra', 'MNP', 'Otra', 0),
(4223, 'Otra', 'MOZ', 'Otra', 0),
(4224, 'Otra', 'MRT', 'Otra', 0),
(4225, 'Otra', 'MSR', 'Otra', 0),
(4226, 'Otra', 'MTQ', 'Otra', 0),
(4227, 'Otra', 'MUS', 'Otra', 0),
(4228, 'Otra', 'MWI', 'Otra', 0),
(4229, 'Otra', 'MYS', 'Otra', 0),
(4230, 'Otra', 'MYT', 'Otra', 0),
(4231, 'Otra', 'NAM', 'Otra', 0),
(4232, 'Otra', 'NCL', 'Otra', 0),
(4233, 'Otra', 'NER', 'Otra', 0),
(4234, 'Otra', 'NFK', 'Otra', 0),
(4235, 'Otra', 'NGA', 'Otra', 0),
(4236, 'Otra', 'NIC', 'Otra', 0),
(4237, 'Otra', 'NIU', 'Otra', 0),
(4238, 'Otra', 'NLD', 'Otra', 0),
(4239, 'Otra', 'NOR', 'Otra', 0),
(4240, 'Otra', 'NPL', 'Otra', 0),
(4241, 'Otra', 'NRU', 'Otra', 0),
(4242, 'Otra', 'NZL', 'Otra', 0),
(4243, 'Otra', 'OMN', 'Otra', 0),
(4244, 'Otra', 'PAK', 'Otra', 0),
(4245, 'Otra', 'PAN', 'Otra', 0),
(4246, 'Otra', 'PCN', 'Otra', 0),
(4247, 'Otra', 'PER', 'Otra', 0),
(4248, 'Otra', 'PHL', 'Otra', 0),
(4249, 'Otra', 'PLW', 'Otra', 0),
(4250, 'Otra', 'PNG', 'Otra', 0),
(4251, 'Otra', 'POL', 'Otra', 0),
(4252, 'Otra', 'PRI', 'Otra', 0),
(4253, 'Otra', 'PRK', 'Otra', 0),
(4254, 'Otra', 'PRT', 'Otra', 0),
(4255, 'Otra', 'PRY', 'Otra', 0),
(4256, 'Otra', 'PSE', 'Otra', 0),
(4257, 'Otra', 'PYF', 'Otra', 0),
(4258, 'Otra', 'QAT', 'Otra', 0),
(4259, 'Otra', 'REU', 'Otra', 0),
(4260, 'Otra', 'ROM', 'Otra', 0),
(4261, 'Otra', 'RUS', 'Otra', 0),
(4262, 'Otra', 'RWA', 'Otra', 0),
(4263, 'Otra', 'SAU', 'Otra', 0),
(4264, 'Otra', 'SDN', 'Otra', 0),
(4265, 'Otra', 'SEN', 'Otra', 0),
(4266, 'Otra', 'SGP', 'Otra', 0),
(4267, 'Otra', 'SGS', 'Otra', 0),
(4268, 'Otra', 'SHN', 'Otra', 0),
(4269, 'Otra', 'SJM', 'Otra', 0),
(4270, 'Otra', 'SLB', 'Otra', 0),
(4271, 'Otra', 'SLE', 'Otra', 0),
(4272, 'Otra', 'SLV', 'Otra', 0),
(4273, 'Otra', 'SMR', 'Otra', 0),
(4274, 'Otra', 'SOM', 'Otra', 0),
(4275, 'Otra', 'SPM', 'Otra', 0),
(4276, 'Otra', 'STP', 'Otra', 0),
(4277, 'Otra', 'SUR', 'Otra', 0),
(4278, 'Otra', 'SVK', 'Otra', 0),
(4279, 'Otra', 'SVN', 'Otra', 0),
(4280, 'Otra', 'SWE', 'Otra', 0),
(4281, 'Otra', 'SWZ', 'Otra', 0),
(4282, 'Otra', 'SYC', 'Otra', 0),
(4283, 'Otra', 'SYR', 'Otra', 0),
(4284, 'Otra', 'TCA', 'Otra', 0),
(4285, 'Otra', 'TCD', 'Otra', 0),
(4286, 'Otra', 'TGO', 'Otra', 0),
(4287, 'Otra', 'THA', 'Otra', 0),
(4288, 'Otra', 'TJK', 'Otra', 0),
(4289, 'Otra', 'TKL', 'Otra', 0),
(4290, 'Otra', 'TKM', 'Otra', 0),
(4291, 'Otra', 'TMP', 'Otra', 0),
(4292, 'Otra', 'TON', 'Otra', 0),
(4293, 'Otra', 'TTO', 'Otra', 0),
(4294, 'Otra', 'TUN', 'Otra', 0),
(4295, 'Otra', 'TUR', 'Otra', 0),
(4296, 'Otra', 'TUV', 'Otra', 0),
(4297, 'Otra', 'TWN', 'Otra', 0),
(4298, 'Otra', 'TZA', 'Otra', 0),
(4299, 'Otra', 'UGA', 'Otra', 0),
(4300, 'Otra', 'UKR', 'Otra', 0),
(4301, 'Otra', 'UMI', 'Otra', 0),
(4302, 'Otra', 'URY', 'Otra', 0),
(4303, 'Otra', 'USA', 'Otra', 0),
(4304, 'Otra', 'UZB', 'Otra', 0),
(4305, 'Otra', 'VAT', 'Otra', 0),
(4306, 'Otra', 'VCT', 'Otra', 0),
(4307, 'Otra', 'VEN', 'Otra', 0),
(4308, 'Otra', 'VGB', 'Otra', 0),
(4309, 'Otra', 'VIR', 'Otra', 0),
(4310, 'Otra', 'VNM', 'Otra', 0),
(4311, 'Otra', 'VUT', 'Otra', 0),
(4312, 'Otra', 'WLF', 'Otra', 0),
(4313, 'Otra', 'WSM', 'Otra', 0),
(4314, 'Otra', 'YEM', 'Otra', 0),
(4315, 'Otra', 'YUG', 'Otra', 0),
(4316, 'Otra', 'ZAF', 'Otra', 0),
(4317, 'Otra', 'ZMB', 'Otra', 0),
(4318, 'Otra', 'ZWE', 'Otra', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `pais` varchar(250) NOT NULL,
  `codigo_iso2` varchar(255) NOT NULL,
  `codigo_iso3` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Margarita Osorio', '3016490698', 'margarita.osorio@gmail.com', '2023-06-24 14:49:23', '2023-06-24 14:49:23'),
(2, 'Nicolas Osorio', '3137038949', 'nicolas.osorio@gmail.com', '2023-06-24 14:49:23', '2023-06-24 14:49:23'),
(3, 'contacto de proveedor5', '8786678', 'proveedor@gmail.com', '2023-06-24 19:46:44', '2023-06-24 19:46:44'),
(4, 'contacto de cliente 5', '3016490698', 'w@q', '2023-07-08 18:21:31', '2023-07-08 18:21:31'),
(5, 'Contacto de proveedor nacional 2', '3242423423', 'w@q', '2023-07-15 16:35:06', '2023-07-15 16:35:06'),
(6, 'Contacto de proveedor nacional 3', '3016490698', 'email@factura', '2023-07-15 16:41:52', '2023-07-15 16:41:52'),
(7, 'contacto de cliente 1', '6578676', 'w@q', '2023-08-06 15:48:02', '2023-08-06 15:48:02'),
(8, 'contacto de cliente 1', '6578676', 'email@fact', '2023-08-06 15:49:12', '2023-08-06 15:49:12'),
(9, 'contacto 1', '6578676', 'wilfranr@gmail.com', '2023-08-06 16:14:07', '2023-08-06 16:14:07'),
(10, 'contacto 2', '6578676', 'email@fact', '2023-08-06 16:14:07', '2023-08-06 16:14:07'),
(11, 'contacto 1', '6578676', 'email@fact', '2023-08-06 16:14:41', '2023-08-06 16:14:41'),
(12, 'contacto 1', '6578676', 'email@fact', '2023-08-07 00:28:31', '2023-08-07 00:28:31'),
(13, 'contacto 2', '6578676', 'wilfranr@gmail.com', '2023-08-07 00:28:31', '2023-08-07 00:28:31'),
(14, 'contacto 1', '6578676', 'email@fact', '2023-08-07 00:30:22', '2023-08-07 00:30:22'),
(15, 'contacto 1', '6578676', 'email@fact', '2023-08-07 00:31:03', '2023-08-07 00:31:03'),
(16, 'contacto 2', '6578676', 'email@fact', '2023-08-07 00:31:03', '2023-08-07 00:31:03'),
(17, 'contacto 1', '6578676', 'email@fact', '2023-08-07 00:31:41', '2023-08-07 00:31:41'),
(18, 'contacto 2', '6578676', 'wilfranr@gmail.com', '2023-08-07 00:31:41', '2023-08-07 00:31:41'),
(19, 'contacto 3', '6578676', 'email@fact', '2023-08-07 00:31:41', '2023-08-07 00:31:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_tercero`
--

CREATE TABLE `contacto_tercero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contacto_id` bigint(20) UNSIGNED NOT NULL,
  `tercero_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto_tercero`
--

INSERT INTO `contacto_tercero` (`id`, `contacto_id`, `tercero_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(4, 4, 5, NULL, NULL),
(6, 6, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `tercero_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`id`, `estado`, `pedido_id`, `tercero_id`, `created_at`, `updated_at`) VALUES
(1, 'pendiente', 1, 1, '2023-09-02 21:43:32', '2023-09-02 21:43:32'),
(2, 'pendiente', 1, 1, '2023-09-03 12:57:52', '2023-09-03 12:57:52'),
(3, 'pendiente', 2, 5, '2023-09-03 15:12:35', '2023-09-03 15:12:35'),
(4, 'pendiente', 3, 1, '2023-09-05 03:30:26', '2023-09-05 03:30:26'),
(5, 'pendiente', 4, 1, '2023-09-05 03:52:57', '2023-09-05 03:52:57'),
(6, 'pendiente', 5, 1, '2023-09-05 03:59:53', '2023-09-05 03:59:53'),
(7, 'pendiente', 6, 1, '2023-09-05 04:04:32', '2023-09-05 04:04:32'),
(8, 'pendiente', 7, 1, '2023-09-09 17:19:43', '2023-09-09 17:19:43'),
(9, 'pendiente', 8, 1, '2023-09-11 02:25:27', '2023-09-11 02:25:27'),
(10, 'pendiente', 6, 1, '2023-09-14 03:20:52', '2023-09-14 03:20:52'),
(11, 'pendiente', 6, 1, '2023-09-14 03:23:56', '2023-09-14 03:23:56'),
(12, 'pendiente', 6, 1, '2023-09-14 03:27:01', '2023-09-14 03:27:01'),
(13, 'pendiente', 6, 1, '2023-09-14 03:27:25', '2023-09-14 03:27:25'),
(14, 'pendiente', 6, 1, '2023-09-14 03:32:06', '2023-09-14 03:32:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_pedido`
--

CREATE TABLE `cotizacion_pedido` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cotizacion_id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `pais_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `nit` varchar(255) NOT NULL,
  `representante` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `direccion`, `telefono`, `celular`, `email`, `logo`, `nit`, `representante`, `ciudad`, `pais`, `created_at`, `updated_at`) VALUES
(1, 'IMPORTACIONES E INVERSIONES CYH S.A.S', 'CRA 69D NO. 1-45 SUR - TORRE 2 APTO 1214', '8012642', '3103311634', 'importacioneseinversionescyh@gmail.com', 'logos/El6EuqE0FiYdllgRTpHtx9Idoq0g3DJ4I4xnrwNF.png', '901.377.993-5', '', 'Bogotá', 'Colombia', '2023-09-02 23:42:05', '2023-09-03 12:40:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_articulo_temporal`
--

CREATE TABLE `fotos_articulo_temporal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `articulo_temporal_id` bigint(20) UNSIGNED NOT NULL,
  `foto_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fotos_articulo_temporal`
--

INSERT INTO `fotos_articulo_temporal` (`id`, `articulo_temporal_id`, `foto_path`, `created_at`, `updated_at`) VALUES
(1, 1, '650275b856796.jpg', '2023-09-14 02:53:44', '2023-09-14 02:53:44'),
(2, 2, '650275b89ed52.jpg', '2023-09-14 02:53:44', '2023-09-14 02:53:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto_articulo`
--

CREATE TABLE `foto_articulo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `IdArticulo` int(11) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `articulo_temporal_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_articulo`
--

CREATE TABLE `imagenes_articulo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `articulo_id` bigint(20) UNSIGNED NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE `listas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `definicion` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `fotoMedida` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `listas`
--

INSERT INTO `listas` (`id`, `tipo`, `nombre`, `definicion`, `foto`, `fotoMedida`, `created_at`, `updated_at`) VALUES
(2, 'Marca', 'CATERPILLAR', 'CATERPILLAR', '1687104103_cat.jpg', 'no-imagen.jpg', '2023-06-18 16:01:43', '2023-08-21 11:17:48'),
(3, 'Marca', 'KOMATSU', 'Komatsu', '1687614788_R (3).png', 'no-imagen.jpg', '2023-06-24 13:53:08', '2023-06-24 13:53:08'),
(4, 'Tipo Maquina', 'Bulldozer', 'Es una máquina de construcción usada para la expansión y movimiento de tierras', '1687614897_OIP (4).jpeg', 'no-imagen.jpg', '2023-06-24 13:54:57', '2023-06-24 13:54:57'),
(5, 'Sistema', 'Transmisión', 'Es un mecanismo encargado de transmitir potencia entre dos o más elementos dentro de una máquina.', '1687614992_tap-149-las-transmisiones-y-las-nuevas-tecnicas-04.jpg', 'no-imagen.jpg', '2023-06-24 13:56:32', '2023-06-24 13:56:32'),
(6, 'Descripción común', 'Seal O Ring', 'Junta de forma tiroidal, cuya función es la de asegurar la estanqueidad de los fluidos.', '1687615092_R.jpg', 'no-imagen.jpg', '2023-06-24 13:58:12', '2023-07-24 16:33:23'),
(20, 'Definición', 'Piston', 'Piston', '1690051312_pistondimensions1_textimage.png', '1687641748_OIP.jpg', '2023-06-24 21:22:28', '2023-08-05 21:13:40'),
(41, 'Tipo Medida', 'Diametro', 'Diametro', 'no-imagen.jpg', 'no-imagen.jpg', '2023-07-01 16:45:52', '2023-07-01 22:25:26'),
(45, 'Tipo Medida', 'Ancho', 'Ancho', 'no-imagen.jpg', 'no-imagen.jpg', '2023-07-01 17:08:06', '2023-07-01 17:08:06'),
(48, 'Tipo Medida', 'Volumen', 'Volumen', 'no-imagen.jpg', 'no-imagen.jpg', '2023-07-01 17:11:32', '2023-07-01 17:11:32'),
(49, 'Modelo Maquina', 'Modelo de prueba', 'Modelo de prueba', 'no-imagen.jpg', 'no-imagen.jpg', '2023-07-01 17:24:53', '2023-07-01 17:24:53'),
(50, 'Definición', 'Diente', 'Diente', '1690124819_E16.png', 'no-imagen.jpg', '2023-07-01 22:15:00', '2023-07-23 15:06:59'),
(51, 'Definición', 'PASADOR', 'PASADOR', NULL, NULL, NULL, NULL),
(52, 'Definición', 'ARANDELA', 'ARANDELA', NULL, NULL, NULL, NULL),
(53, 'Definición', 'SOPORTE', 'SOPORTE', NULL, NULL, NULL, NULL),
(54, 'Definición', 'HOSE', 'HOSE', NULL, NULL, NULL, NULL),
(55, 'Definición', 'BEARING SLEEVE', 'BEARING SLEEVE', NULL, NULL, NULL, NULL),
(56, 'Definición', 'PIN', 'PIN', NULL, NULL, NULL, NULL),
(57, 'Definición', 'WASHER', 'WASHER', NULL, NULL, NULL, NULL),
(58, 'Definición', 'RING SNAP', 'RING SNAP', NULL, NULL, NULL, NULL),
(59, 'Definición', 'SEAL RING', 'SEAL RING', NULL, NULL, NULL, NULL),
(61, 'Definición', 'KIT', 'KIT', NULL, NULL, NULL, NULL),
(62, 'Definición', 'RING -KOMATSU', 'RING -KOMATSU', NULL, NULL, NULL, NULL),
(63, 'Definición', 'CAGE', 'CAGE', NULL, NULL, NULL, NULL),
(64, 'Definición', 'THRUST WASHE(0923313820)', 'THRUST WASHE(0923313820)', NULL, NULL, NULL, NULL),
(65, 'Definición', 'PINION', 'PINION', NULL, NULL, NULL, NULL),
(66, 'Definición', 'SEAL', 'SEAL', NULL, NULL, NULL, NULL),
(67, 'Definición', 'BEARING (42215)', 'BEARING (42215)', NULL, NULL, NULL, NULL),
(68, 'Definición', 'BEARING TAP', 'BEARING TAP', NULL, NULL, NULL, NULL),
(69, 'Definición', 'GEAR', 'GEAR', NULL, NULL, NULL, NULL),
(70, 'Definición', 'GASKET', 'GASKET', NULL, NULL, NULL, NULL),
(71, 'Definición', 'BUSHING', 'BUSHING', NULL, NULL, NULL, NULL),
(72, 'Definición', 'PUMP GP HYD', 'PUMP GP HYD', NULL, NULL, NULL, NULL),
(73, 'Definición', 'PUNTA MARTILLO', 'PUNTA MARTILLO', NULL, NULL, NULL, NULL),
(74, 'Definición', 'CAMISA', 'CAMISA', NULL, NULL, NULL, NULL),
(75, 'Definición', 'PISTON', 'PISTON', NULL, NULL, NULL, NULL),
(76, 'Definición', 'ANILLOS', 'ANILLOS', NULL, NULL, NULL, NULL),
(77, 'Definición', 'EMPAQUETADURA', 'EMPAQUETADURA', NULL, NULL, NULL, NULL),
(78, 'Definición', 'RETEN DELANTERO', 'RETEN DELANTERO', NULL, NULL, NULL, NULL),
(79, 'Definición', 'RETEN TRASERO', 'RETEN TRASERO', NULL, NULL, NULL, NULL),
(80, 'Definición', 'CASQUETE BIELA', 'CASQUETE BIELA', NULL, NULL, NULL, NULL),
(81, 'Definición', 'CASQUETE BANCADA', 'CASQUETE BANCADA', NULL, NULL, NULL, NULL),
(82, 'Definición', 'ARANDELA AXIAL', 'ARANDELA AXIAL', NULL, NULL, NULL, NULL),
(83, 'Definición', 'BUJE BIELA', 'BUJE BIELA', NULL, NULL, NULL, NULL),
(84, 'Definición', 'BUJE LEVAS', 'BUJE LEVAS', NULL, NULL, NULL, NULL),
(85, 'Definición', 'VALVULAS ADMISION', 'VALVULAS ADMISION', NULL, NULL, NULL, NULL),
(86, 'Definición', 'VALVULAS ESCAPE', 'VALVULAS ESCAPE', NULL, NULL, NULL, NULL),
(87, 'Definición', 'GUIAS ADMISION', 'GUIAS ADMISION', NULL, NULL, NULL, NULL),
(88, 'Definición', 'GUIAS ESCAPE', 'GUIAS ESCAPE', NULL, NULL, NULL, NULL),
(89, 'Definición', 'BOMBA ACEITE', 'BOMBA ACEITE', NULL, NULL, NULL, NULL),
(90, 'Definición', 'EJE', 'EJE', NULL, NULL, NULL, NULL),
(91, 'Definición', 'COUPLING', 'COUPLING', NULL, NULL, NULL, NULL),
(92, 'Definición', 'SHIM', 'SHIM', '1694307099_2807-0811-1000-Schematic.png', NULL, NULL, '2023-09-10 00:51:39'),
(93, 'Definición', 'SHIMM', 'SHIMM', NULL, NULL, NULL, NULL),
(94, 'Definición', 'PIN AS', 'PIN AS', NULL, NULL, NULL, NULL),
(95, 'Definición', 'PASADOR', 'PASADOR', NULL, NULL, NULL, NULL),
(96, 'Definición', 'PIN A CHROME', 'PIN A CHROME', NULL, NULL, NULL, NULL),
(97, 'Definición', 'SEAL LIP', 'SEAL LIP', NULL, NULL, NULL, NULL),
(98, 'Definición', 'BEARING', 'BEARING', NULL, NULL, NULL, NULL),
(99, 'Definición', 'SEAL LIP TYPE', 'SEAL LIP TYPE', NULL, NULL, NULL, NULL),
(100, 'Definición', 'BRG-SLEEVE (5287159)', 'BRG-SLEEVE (5287159)', NULL, NULL, NULL, NULL),
(101, 'Definición', 'ESPACIADOR', 'ESPACIADOR', NULL, NULL, NULL, NULL),
(102, 'Definición', 'SEAL 20Y7023230', 'SEAL 20Y7023230', NULL, NULL, NULL, NULL),
(103, 'Definición', 'BEAARING SLEEVE (2602552)', 'BEAARING SLEEVE (2602552)', NULL, NULL, NULL, NULL),
(104, 'Definición', 'RUEDA TENSORA', 'RUEDA TENSORA', '1688857628_8198_0.jpg_0.jpg', NULL, NULL, '2023-07-08 23:07:08'),
(105, 'Definición', 'GOBERNADOR', 'GOBERNADOR', NULL, NULL, NULL, NULL),
(107, 'Marca', 'CTP', 'CTP', NULL, NULL, NULL, NULL),
(109, 'Marca', 'COSTEX', 'COSTEX', NULL, NULL, NULL, NULL),
(111, 'Marca', 'ITR', 'ITR', NULL, NULL, NULL, NULL),
(112, 'Marca', 'HB30', 'HB30', NULL, NULL, NULL, NULL),
(113, 'Marca', 'ATS', 'ATS', NULL, NULL, NULL, NULL),
(114, 'Marca', 'EMMARK', 'EMMARK', NULL, NULL, NULL, NULL),
(115, 'Marca', 'OEM', 'OEM', NULL, NULL, NULL, NULL),
(116, 'Marca', 'DOOSAN', 'DOOSAN', NULL, NULL, NULL, NULL),
(117, 'Marca', 'PERKINS REMAN', 'PERKINS REMAN', NULL, NULL, NULL, NULL),
(118, 'Marca', 'BLUMAQ', 'BLUMAQ', NULL, NULL, NULL, NULL),
(119, 'Marca', 'SKU', 'SKU', NULL, NULL, NULL, NULL),
(120, 'Marca', 'KOREANA', 'KOREANA', NULL, NULL, NULL, NULL),
(121, 'Marca', 'WPS', 'WPS', NULL, NULL, NULL, NULL),
(122, 'Marca', 'CUMMINS', 'CUMMINS', NULL, NULL, NULL, NULL),
(124, 'Marca', 'JEIL', 'JEIL', NULL, NULL, NULL, NULL),
(125, 'Marca', 'NOK', 'NOK', NULL, NULL, NULL, NULL),
(126, 'Marca', 'VEMA', 'VEMA', NULL, NULL, NULL, NULL),
(127, 'Marca', 'TRACK LINK', 'TRACK LINK', NULL, NULL, NULL, NULL),
(128, 'Marca', 'BLACK CAT', 'BLACK CAT', NULL, NULL, NULL, NULL),
(129, 'Marca', 'KSK', 'KSK', NULL, NULL, NULL, NULL),
(130, 'Marca', 'ETP', 'ETP', NULL, NULL, NULL, NULL),
(131, 'Marca', 'TRASTEEL', 'TRASTEEL', NULL, NULL, NULL, NULL),
(132, 'Marca', 'VMT', 'VMT', NULL, NULL, NULL, NULL),
(133, 'Definición', 'ARANDELA T35', 'ARANDELA T35', '1690050387_R (7).jpeg', 'no-imagen.jpg', '2023-07-15 17:57:35', '2023-07-22 18:26:27'),
(134, 'Definición', 'EMPAQUE DE CULATA', 'Empaque que va entre la culata y el bloque del motor', '1691845635_A4420160420MBB.jpg', '1689465002_empaque-de-culata.jpg', '2023-07-15 23:50:02', '2023-08-12 13:07:16'),
(135, 'Definición', 'BEARING', 'BEARING', '1690043577_miniature-bearing-dimensions-mr84zz.jpg', NULL, '2023-07-22 16:30:46', '2023-07-22 18:25:06'),
(136, 'Tipo Medida', 'Largo', 'Largo', 'no-imagen.jpg', NULL, '2023-07-22 18:47:14', '2023-07-22 18:47:14'),
(141, 'Tipo Medida', 'Alto', 'Alto', 'no-imagen.jpg', NULL, '2023-07-24 15:50:44', '2023-07-24 15:50:44'),
(143, 'Tipo Medida', 'Largo2', 'Largo2', '1690221725_E16.png', NULL, '2023-07-24 18:02:05', '2023-07-24 18:02:05'),
(151, 'Tipo Maquina', 'Excavadora', 'Una excavadora es una máquina empleada para la excavación y movimiento de tierras u otros materiales. La excavadora se considera un vehículo autopropulsado porque se puede desplazar de un lugar a otro pero esta no es su función …', '1691325397_OIP (12).jpeg', NULL, '2023-08-06 12:36:38', '2023-08-06 12:36:38'),
(152, 'Modelo Maquina', 'PC1250', 'Excavadora de Komatsu', '1691325879_OIP (12).jpeg', NULL, '2023-08-06 12:44:39', '2023-08-06 12:44:39'),
(153, 'Marca', 'VEMA TEC', 'VEMA TEC', 'no-imagen.jpg', NULL, '2023-08-21 11:09:17', '2023-08-21 11:09:17'),
(155, 'Sistema', 'Sistema de prueba', 'Sistema de prueba', '1693075164_OIP (11).jpeg', NULL, '2023-08-26 18:33:49', '2023-08-26 18:39:24'),
(156, 'Marca', 'IPD', 'IPD', 'no-imagen.jpg', NULL, '2023-09-05 03:14:36', '2023-09-05 03:14:36'),
(157, 'Definición', 'Tornillo', 'Tornillo', 'no-imagen.jpg', NULL, '2023-09-09 16:45:19', '2023-09-09 16:45:19'),
(158, 'Definición', 'Tornillo de prueba', 'Tornillo de prueba', '1694278655_S_848015-MCO25198138852_12016-O.jpg', NULL, '2023-09-09 16:57:35', '2023-09-09 16:57:35'),
(159, 'Definición', 'Tornillo de prueba 2', 'Tornillo de prueba 2', '1694278742_arandelas-axiales.jpg', NULL, '2023-09-09 16:59:02', '2023-09-09 16:59:02'),
(160, 'Definición', 'Tornillo de prueba 3', 'Tornillo de prueba 3', 'no-imagen.jpg', NULL, '2023-09-09 17:00:15', '2023-09-09 17:00:15'),
(161, 'Definición', 'Tornillo de prueba 4', 'Tornillo de prueba 4', 'no-imagen.jpg', NULL, '2023-09-09 17:01:58', '2023-09-09 17:01:58'),
(162, 'Definición', 'Tornillo de prueba 5', 'Tornillo de prueba 5', 'no-imagen.jpg', NULL, '2023-09-09 17:02:22', '2023-09-09 17:02:22'),
(163, 'Definición', 'Diente 2', 'Diente 2', '1694279384_S_848015-MCO25198138852_12016-O.jpg', NULL, '2023-09-09 17:09:44', '2023-09-09 17:09:44'),
(164, 'Definición', 'Pasador 2', 'Pasador 2', '1694279422_S_848015-MCO25198138852_12016-O.jpg', NULL, '2023-09-09 17:10:22', '2023-09-09 17:10:22'),
(165, 'Unidad medida', 'mm', 'Milímetros', 'no-imagen.jpg', NULL, '2023-09-10 00:58:55', '2023-09-10 00:58:55'),
(166, 'Unidad medida', 'cc', 'Centímetros', 'no-imagen.jpg', NULL, '2023-09-10 00:59:09', '2023-09-10 00:59:09'),
(167, 'Unidad medida', 'lb', 'Libras', 'no-imagen.jpg', NULL, '2023-09-10 00:59:27', '2023-09-10 00:59:27'),
(168, 'Unidad medida', 'm', 'metros', 'no-imagen.jpg', NULL, '2023-09-10 00:59:49', '2023-09-10 00:59:49'),
(169, 'Definición', 'definicion de prueba', 'Definicion de prueba', '1694658667_19270.jpg', NULL, '2023-09-14 02:31:08', '2023-09-14 02:31:08'),
(170, 'Definición', 'O-RING (KIT)', 'analista@ejemplo.com', 'no-imagen.jpg', NULL, '2023-09-14 02:48:07', '2023-09-14 02:48:07'),
(171, 'Sistema', 'Todos', 'Todos', 'no-imagen.jpg', NULL, '2023-09-14 03:14:40', '2023-09-14 03:14:40'),
(172, 'Marca', 'Todos', 'Todos', 'no-imagen.jpg', NULL, '2023-09-14 03:16:41', '2023-09-14 03:16:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_padres`
--

CREATE TABLE `lista_padres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lista_padres`
--

INSERT INTO `lista_padres` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(2, 'Sistema', '2023-04-29 09:29:56', '2023-05-01 23:06:29'),
(6, 'Descripción común', '2023-04-29 09:30:36', '2023-04-29 09:30:36'),
(7, 'Tipo Maquina', '2023-04-29 09:31:22', '2023-04-29 09:31:22'),
(8, 'Modelo Maquina', '2023-04-29 09:31:38', '2023-04-29 09:31:38'),
(9, 'Marca', '2023-05-01 22:47:53', '2023-05-01 22:47:53'),
(12, 'Unidad medida', '2023-05-01 23:56:48', '2023-05-01 23:56:48'),
(13, 'Definición', '2023-05-31 07:09:10', '2023-05-31 07:09:10'),
(14, 'Tipo Medida', '2023-06-24 14:09:18', '2023-06-24 14:09:18'),
(21, 'Sistema de prueba', '2023-08-05 13:26:10', '2023-08-05 13:26:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinas`
--

CREATE TABLE `maquinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `marca` varchar(250) DEFAULT NULL,
  `modelo` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `arreglo` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `fotoId` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `maquinas`
--

INSERT INTO `maquinas` (`id`, `tipo`, `marca`, `modelo`, `serie`, `arreglo`, `foto`, `fotoId`, `created_at`, `updated_at`) VALUES
(15, 'Bulldozer', 'KOMATSU', 'Modelo de prueba', 'Serie de prueba 3', 'Arreglo de prueba 3', '1692627074_R (8).jpeg', NULL, '2023-08-21 13:02:13', '2023-08-21 14:11:14'),
(16, 'Bulldozer', 'CATERPILLAR', 'PC1250', 'xjr00210', 'N/A222', '1692626921_OIP (4).jpeg', '1692626921_OIP (11).jpeg', '2023-08-21 14:08:41', '2023-08-21 14:08:41'),
(17, 'Excavadora', 'KOMATSU', 'Modelo de prueba', '12345', 'N/A', '1692626990_OIP (12).jpeg', NULL, '2023-08-21 14:09:50', '2023-08-21 14:09:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinas_pedido`
--

CREATE TABLE `maquinas_pedido` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maquina_id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `maquinas_pedido`
--

INSERT INTO `maquinas_pedido` (`id`, `maquina_id`, `pedido_id`, `created_at`, `updated_at`) VALUES
(1, 17, 1, '2023-09-02 15:40:15', '2023-09-02 15:40:15'),
(2, 17, 1, '2023-09-02 15:48:50', '2023-09-02 15:48:50'),
(3, 16, 2, '2023-09-02 15:52:28', '2023-09-02 15:52:28'),
(4, 16, 3, '2023-09-05 03:26:20', '2023-09-05 03:26:20'),
(5, 16, 4, '2023-09-05 03:50:49', '2023-09-05 03:50:49'),
(6, 16, 5, '2023-09-05 03:57:47', '2023-09-05 03:57:47'),
(7, 16, 6, '2023-09-05 04:02:51', '2023-09-05 04:02:51'),
(8, 16, 7, '2023-09-09 17:18:35', '2023-09-09 17:18:35'),
(9, 16, 8, '2023-09-11 02:24:40', '2023-09-11 02:24:40'),
(10, 17, 9, '2023-09-14 02:52:41', '2023-09-14 02:52:41'),
(11, 17, 10, '2023-09-14 02:53:44', '2023-09-14 02:53:44'),
(12, 17, 11, '2023-09-14 02:53:44', '2023-09-14 02:53:44'),
(13, 15, 12, '2023-09-14 02:56:24', '2023-09-14 02:56:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina_articulo`
--

CREATE TABLE `maquina_articulo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maquina_id` bigint(20) UNSIGNED NOT NULL,
  `articulo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina_marca`
--

CREATE TABLE `maquina_marca` (
  `maquina_id` bigint(20) UNSIGNED NOT NULL,
  `marca_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `maquina_marca`
--

INSERT INTO `maquina_marca` (`maquina_id`, `marca_id`, `created_at`, `updated_at`) VALUES
(15, 2, NULL, NULL),
(16, 1, NULL, NULL),
(17, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'CATERPILLAR', '0000-00-00 00:00:00', NULL),
(2, 'KOMATSU', '2023-05-28 16:45:14', '2023-05-28 05:00:00'),
(3, 'HITACHI', '2023-05-27 16:44:43', '2023-05-27 16:44:43'),
(4, 'PERKINS', '2023-08-21 10:56:09', '2023-08-21 05:00:00'),
(6, 'CTP', '2023-08-21 11:11:40', '2023-08-21 11:11:40'),
(7, 'COSTEX', '2023-08-21 11:12:06', '2023-08-21 11:12:06'),
(8, 'ITR', '2023-08-21 11:12:13', '2023-08-21 11:12:13'),
(9, 'HB30', '2023-08-21 11:12:22', '2023-08-21 11:12:22'),
(10, 'ATS', '2023-08-21 11:12:33', '2023-08-21 11:12:33'),
(11, 'EMMARK', '2023-08-21 11:12:39', '2023-08-21 11:12:39'),
(12, 'OEM', '2023-08-21 11:12:51', '2023-08-21 11:12:51'),
(13, 'DOOSAN', '2023-08-21 11:13:00', '2023-08-21 11:13:00'),
(14, 'PERKINS REMAN', '2023-08-21 11:13:08', '2023-08-21 11:13:08'),
(15, 'BLUMAQ', '2023-08-21 11:13:21', '2023-08-21 11:13:21'),
(16, 'SKU', '2023-08-21 11:14:35', '2023-08-21 11:14:35'),
(17, 'KOREANA', '2023-08-21 11:14:42', '2023-08-21 11:14:42'),
(18, 'WPS', '2023-08-21 11:14:49', '2023-08-21 11:14:49'),
(19, 'CUMMINS', '2023-08-21 11:14:59', '2023-08-21 11:14:59'),
(20, 'JEIL', '2023-08-21 11:15:06', '2023-08-21 11:15:06'),
(21, 'NOK', '2023-08-21 11:15:15', '2023-08-21 11:15:15'),
(22, 'VEMA', '2023-08-21 11:15:38', '2023-08-21 11:15:38'),
(23, 'TRACK LINK', '2023-08-21 11:15:50', '2023-08-21 11:15:50'),
(24, 'BLACK CAT', '2023-08-21 11:16:07', '2023-08-21 11:16:07'),
(25, 'KSK', '2023-08-21 11:16:14', '2023-08-21 11:16:14'),
(27, 'ETP', '2023-08-21 11:16:47', '2023-08-21 11:16:47'),
(28, 'TRASTEEL', '2023-08-21 11:16:55', '2023-08-21 11:16:55'),
(29, 'VMT', '2023-08-21 11:17:03', '2023-08-21 11:17:03'),
(30, 'VEMA TEC', '2023-08-21 11:17:17', '2023-08-21 11:17:17'),
(32, 'IPD', '2023-09-05 03:14:36', '2023-09-05 03:14:36'),
(33, 'Todos', '2023-09-14 03:16:41', '2023-09-14 03:16:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas`
--

CREATE TABLE `medidas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `unidad` varchar(255) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `idMedida` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `medidas`
--

INSERT INTO `medidas` (`id`, `nombre`, `unidad`, `valor`, `tipo`, `idMedida`, `foto`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 23:57:15', '2023-07-15 23:57:15'),
(11, NULL, NULL, NULL, NULL, NULL, 'no-imagen.jpg', '2023-09-11 01:35:01', '2023-09-11 01:35:01'),
(21, NULL, NULL, NULL, NULL, NULL, 'no-imagen.jpg', '2023-09-11 02:03:04', '2023-09-11 02:03:04'),
(23, NULL, NULL, NULL, NULL, NULL, 'no-imagen.jpg', '2023-09-11 02:05:54', '2023-09-11 02:05:54'),
(24, NULL, NULL, NULL, NULL, NULL, 'no-imagen.jpg', '2023-09-11 02:06:39', '2023-09-11 02:06:39'),
(25, NULL, NULL, NULL, NULL, NULL, 'no-imagen.jpg', '2023-09-11 02:06:58', '2023-09-11 02:06:58'),
(28, NULL, NULL, NULL, NULL, NULL, 'no-imagen.jpg', '2023-09-11 02:12:17', '2023-09-11 02:12:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2023_04_06_215815_create_paises_table', 2),
(14, '2023_04_06_215946_create_ciudads_table', 2),
(15, '2023_04_06_220326_create_departamentos_table', 2),
(16, '2023_04_06_222424_tercero', 3),
(17, '2023_04_06_223332_pedido', 4),
(18, '2023_04_07_172559_add_tipo_column_to_terceros_table', 5),
(19, '2023_04_14_022049_create_maquinas_table', 6),
(20, '2023_04_14_023001_create_tercero_maquina_table', 7),
(21, '2023_04_14_034655_create_contactos_table', 8),
(22, '2023_04_15_062817_create_listas_table', 9),
(23, '2023_04_15_084542_create_articulos_table', 10),
(24, '2023_04_15_085237_create_foto_articulo_table', 11),
(25, '2023_04_24_231413_create_maquina_articulo_table', 12),
(26, '2023_04_29_032054_create_lista_padres_table', 13),
(27, '2023_05_01_190203_create_medidas_table', 14),
(28, '2023_05_01_190713_create_articulo_medida_table', 15),
(29, '2023_05_01_192659_drop_table_articulo_medida', 16),
(30, '2023_05_01_192936_create_articulo_medida_table', 17),
(31, '2023_05_14_041205_create_imagenes_articulo_table', 18),
(32, '2023_05_14_163917_create_maquinas_pedido_table', 19),
(33, '2023_05_14_210635_create_articulo_temporal_table', 20),
(34, '2023_05_16_021614_create_pedidos_articulos_temporales_table', 21),
(35, '2023_05_28_163134_create_marcas_table', 22),
(37, '2023_05_28_163813_create_terceros_marcas_table', 23),
(38, '2023_05_28_192729_create_sistemas_table', 24),
(39, '2023_06_02_235815_create_fotos_articulo_temporal_table', 25),
(40, '2023_06_10_122428_create_articulo_pedido_table', 26),
(41, '2023_08_19_070423_create_trm_table', 27),
(42, '2023_08_21_072033_create_maquina_marca_table', 28),
(43, '2023_08_26_203842_create_pedido_marca_table', 29),
(44, '2023_08_27_100208_create_pedido_sistema_table', 30),
(45, '2023_09_02_121135_create_cotizaciones_table', 31),
(46, '2023_09_02_182937_create_empresa_table', 32),
(47, '2023_09_03_075532_create_cotizacion_pedido_table', 33),
(48, '2023_09_09_123911_create_relacion_suplencia_table', 34),
(49, '2023_09_10_162450_create_articulos_juegos_table', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `PaisNombre` varchar(100) NOT NULL,
  `PaisCodigo` varchar(10) NOT NULL,
  `phone_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`PaisNombre`, `PaisCodigo`, `phone_code`) VALUES
('Aruba', 'ABW', '297'),
('Afganistan', 'AFG', '93'),
('Angola', 'AGO', '244'),
('Anguila', 'AIA', '1 264'),
('Islas de Islandia', 'ALA', '358'),
('Albania', 'ALB', '355'),
('Andorra', 'AND', '376'),
('Emiratos Arabes Unidos', 'ARE', '971'),
('Argentina', 'ARG', '54'),
('Armenia', 'ARM', '374'),
('Samoa Americana', 'ASM', '1 684'),
('Antartida', 'ATA', '672'),
('Territorios Australes y Antarticas Franceses', 'ATF', NULL),
('Antigua y Barbuda', 'ATG', '1 268'),
('Australia', 'AUS', '61'),
('Austria', 'AUT', '43'),
('Azerbaiyan', 'AZE', '994'),
('Burundi', 'BDI', '257'),
('Belgica', 'BEL', '32'),
('Benin', 'BEN', '229'),
('Burkina Faso', 'BFA', '226'),
('Bangladesh', 'BGD', '880'),
('Bulgaria', 'BGR', '359'),
('Bahrein', 'BHR', '973'),
('Bahamas', 'BHS', '1 242'),
('Bosnia y Herzegovina', 'BIH', '387'),
('San Bartolome', 'BLM', '590'),
('Bielorrusia', 'BLR', '375'),
('Belice', 'BLZ', '501'),
('Islas Bermudas', 'BMU', '1 441'),
('Bolivia', 'BOL', '591'),
('Brasil', 'BRA', '55'),
('Barbados', 'BRB', '1 246'),
('Brunei', 'BRN', '673'),
('Bhutan', 'BTN', '975'),
('Isla Bouvet', 'BVT', NULL),
('Botsuana', 'BWA', '267'),
('Republica Centroafricana', 'CAF', '236'),
('Canada', 'CAN', '1'),
('Islas Cocos (Keeling)', 'CCK', '61'),
('Suiza', 'CHE', '41'),
('Chile', 'CHL', '56'),
('China', 'CHN', '86'),
('Costa de Marfil', 'CIV', '225'),
('Camerun', 'CMR', '237'),
('Republica Democratica del Congo', 'COD', '243'),
('Republica del Congo', 'COG', '242'),
('Islas Cook', 'COK', '682'),
('Colombia', 'COL', '57'),
('Comoras', 'COM', '269'),
('Cabo Verde', 'CPV', '238'),
('Costa Rica', 'CRI', '506'),
('Cuba', 'CUB', '53'),
('Curazao', 'CWU', '5999'),
('Isla de Navidad', 'CXR', '61'),
('Islas Caiman', 'CYM', '1 345'),
('Chipre', 'CYP', '357'),
('Republica Checa', 'CZE', '420'),
('Alemania', 'DEU', '49'),
('Yibuti', 'DJI', '253'),
('Dominica', 'DMA', '1 767'),
('Dinamarca', 'DNK', '45'),
('Republica Dominicana', 'DOM', '1 809'),
('Argelia', 'DZA', '213'),
('Ecuador', 'ECU', '593'),
('Egipto', 'EGY', '20'),
('Eritrea', 'ERI', '291'),
('Sahara Occidental', 'ESH', '212'),
('Espana', 'ESP', '34'),
('Estonia', 'EST', '372'),
('Etiopia', 'ETH', '251'),
('Finlandia', 'FIN', '358'),
('Fiyi', 'FJI', '679'),
('Islas Malvinas', 'FLK', '500'),
('Francia', 'FRA', '33'),
('Islas Feroe', 'FRO', '298'),
('Micronesia', 'FSM', '691'),
('Gabon', 'GAB', '241'),
('Reino Unido', 'GBR', '44'),
('Georgia', 'GEO', '995'),
('Guernsey', 'GGY', '44'),
('Ghana', 'GHA', '233'),
('Gibraltar', 'GIB', '350'),
('Guinea', 'GIN', '224'),
('Guadalupe', 'GLP', '590'),
('Gambia', 'GMB', '220'),
('Guinea-Bissau', 'GNB', '245'),
('Guinea Ecuatorial', 'GNQ', '240'),
('Grecia', 'GRC', '30'),
('Granada', 'GRD', '1 473'),
('Groenlandia', 'GRL', '299'),
('Guatemala', 'GTM', '502'),
('Guayana Francesa', 'GUF', '594'),
('Guam', 'GUM', '1 671'),
('Guyana', 'GUY', '592'),
('Hong Kong', 'HKG', '852'),
('Islas Heard y McDonald', 'HMD', NULL),
('Honduras', 'HND', '504'),
('Croacia', 'HRV', '385'),
('Haiti', 'HTI', '509'),
('Hungria', 'HUN', '36'),
('Indonesia', 'IDN', '62'),
('Isla de Man', 'IMN', '44'),
('India', 'IND', '91'),
('Territorio Britanico del Oceano Indico', 'IOT', '246'),
('Irlanda', 'IRL', '353'),
('Iran', 'IRN', '98'),
('Irak', 'IRQ', '964'),
('Islandia', 'ISL', '354'),
('Israel', 'ISR', '972'),
('Italia', 'ITA', '39'),
('Jamaica', 'JAM', '1 876'),
('Jersey', 'JEY', '44'),
('Jordania', 'JOR', '962'),
('Japon', 'JPN', '81'),
('Kazajistan', 'KAZ', '7'),
('Kenia', 'KEN', '254'),
('Kirguistan', 'KGZ', '996'),
('Camboya', 'KHM', '855'),
('Kiribati', 'KIR', '686'),
('San Cristobal y Nieves', 'KNA', '1 869'),
('Corea del Sur', 'KOR', '82'),
('Kuwait', 'KWT', '965'),
('Laos', 'LAO', '856'),
('Libano', 'LBN', '961'),
('Liberia', 'LBR', '231'),
('Libia', 'LBY', '218'),
('Santa Lucia', 'LCA', '1 758'),
('Liechtenstein', 'LIE', '423'),
('Sri Lanka', 'LKA', '94'),
('Lesoto', 'LSO', '266'),
('Lituania', 'LTU', '370'),
('Luxemburgo', 'LUX', '352'),
('Letonia', 'LVA', '371'),
('Macao', 'MAC', '853'),
('San Martin (Francia)', 'MAF', '1 599'),
('Marruecos', 'MAR', '212'),
('Monaco', 'MCO', '377'),
('Moldavia', 'MDA', '373'),
('Madagascar', 'MDG', '261'),
('Islas Maldivas', 'MDV', '960'),
('Mexico', 'MEX', '52'),
('Islas Marshall', 'MHL', '692'),
('Macedonia', 'MKD', '389'),
('Mali', 'MLI', '223'),
('Malta', 'MLT', '356'),
('Birmania', 'MMR', '95'),
('Montenegro', 'MNE', '382'),
('Mongolia', 'MNG', '976'),
('Islas Marianas del Norte', 'MNP', '1 670'),
('Mozambique', 'MOZ', '258'),
('Mauritania', 'MRT', '222'),
('Montserrat', 'MSR', '1 664'),
('Martinica', 'MTQ', '596'),
('Mauricio', 'MUS', '230'),
('Malawi', 'MWI', '265'),
('Malasia', 'MYS', '60'),
('Mayotte', 'MYT', '262'),
('Namibia', 'NAM', '264'),
('Nueva Caledonia', 'NCL', '687'),
('Niger', 'NER', '227'),
('Isla Norfolk', 'NFK', '672'),
('Nigeria', 'NGA', '234'),
('Nicaragua', 'NIC', '505'),
('Niue', 'NIU', '683'),
('Paises Bajos', 'NLD', '31'),
('Noruega', 'NOR', '47'),
('Nepal', 'NPL', '977'),
('Nauru', 'NRU', '674'),
('Nueva Zelanda', 'NZL', '64'),
('Oman', 'OMN', '968'),
('Pakistan', 'PAK', '92'),
('Panama', 'PAN', '507'),
('Islas Pitcairn', 'PCN', '870'),
('Peru', 'PER', '51'),
('Filipinas', 'PHL', '63'),
('Palau', 'PLW', '680'),
('Papua Nueva Guinea', 'PNG', '675'),
('Polonia', 'POL', '48'),
('Puerto Rico', 'PRI', '1'),
('Corea del Norte', 'PRK', '850'),
('Portugal', 'PRT', '351'),
('Paraguay', 'PRY', '595'),
('Palestina', 'PSE', '970'),
('Polinesia Francesa', 'PYF', '689'),
('Qatar', 'QAT', '974'),
('Reunion', 'REU', '262'),
('Rumania', 'ROU', '40'),
('Rusia', 'RUS', '7'),
('Ruanda', 'RWA', '250'),
('Arabia Saudita', 'SAU', '966'),
('Sudan', 'SDN', '249'),
('Senegal', 'SEN', '221'),
('Singapur', 'SGP', '65'),
('Islas Georgias del Sur y Sandwich del Sur', 'SGS', '500'),
('Santa Elena', 'SHN', '290'),
('Svalbard y Jan Mayen', 'SJM', '47'),
('Islas Salomon', 'SLB', '677'),
('Sierra Leona', 'SLE', '232'),
('El Salvador', 'SLV', '503'),
('San Marino', 'SMR', '378'),
('Sint Maarten', 'SMX', '1 721'),
('Somalia', 'SOM', '252'),
('San Pedro y Miquelon', 'SPM', '508'),
('Serbia', 'SRB', '381'),
('Republica de Sudan del Sur', 'SSD', '211'),
('Santo Tome y Principe', 'STP', '239'),
('Surinam', 'SUR', '597'),
('Eslovaquia', 'SVK', '421'),
('Eslovenia', 'SVN', '386'),
('Suecia', 'SWE', '46'),
('Swazilandia', 'SWZ', '268'),
('Seychelles', 'SYC', '248'),
('Siria', 'SYR', '963'),
('Islas Turcas y Caicos', 'TCA', '1 649'),
('Chad', 'TCD', '235'),
('Togo', 'TGO', '228'),
('Tailandia', 'THA', '66'),
('Tayikistan', 'TJK', '992'),
('Tokelau', 'TKL', '690'),
('Turkmenistan', 'TKM', '993'),
('Timor Oriental', 'TLS', '670'),
('Tonga', 'TON', '676'),
('Trinidad y Tobago', 'TTO', '1 868'),
('Tunez', 'TUN', '216'),
('Turquia', 'TUR', '90'),
('Tuvalu', 'TUV', '688'),
('Taiwan', 'TWN', '886'),
('Tanzania', 'TZA', '255'),
('Uganda', 'UGA', '256'),
('Ucrania', 'UKR', '380'),
('Islas Ultramarinas Menores de Estados Unidos', 'UMI', '246'),
('Uruguay', 'URY', '598'),
('Estados Unidos de America', 'USA', '1'),
('Uzbekistan', 'UZB', '998'),
('Ciudad del Vaticano', 'VAT', '39'),
('San Vicente y las Granadinas', 'VCT', '1 784'),
('Venezuela', 'VEN', '58'),
('Islas Virgenes Britanicas', 'VGB', '1 284'),
('Islas Virgenes de los Estados Unidos', 'VIR', '1 340'),
('Vietnam', 'VNM', '84'),
('Vanuatu', 'VUT', '678'),
('Wallis y Futuna', 'WLF', '681'),
('Samoa', 'WSM', '685'),
('Yemen', 'YEM', '967'),
('Sudafrica', 'ZAF', '27'),
('Zambia', 'ZMB', '260'),
('Zimbabue', 'ZWE', '263');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `codigo_iso2` varchar(20) NOT NULL,
  `codigo_iso3` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre`, `codigo_iso2`, `codigo_iso3`, `created_at`, `updated_at`) VALUES
(1, 'Colombia', 'CO', 'COL', NULL, NULL),
(2, 'Estados Unidos', 'US', 'USA', NULL, NULL),
(3, 'España', 'ES', 'ESP', NULL, NULL),
(4, 'Argentina', 'AR', 'ARG', NULL, NULL),
(5, 'Bolivia', 'BO', 'BOL', NULL, NULL),
(6, 'Brasil', 'BR', 'BRA', NULL, NULL),
(7, 'Chile', 'CL', 'CHL', NULL, NULL),
(8, 'Costa Rica', 'CR', 'CRI', NULL, NULL),
(9, 'Cuba', 'CU', 'CUB', NULL, NULL),
(10, 'Ecuador', 'EC', 'ECU', NULL, NULL),
(11, 'El Salvador', 'SV', 'SLV', NULL, NULL),
(12, 'Guatemala', 'GT', 'GTM', NULL, NULL),
(13, 'Honduras', 'HN', 'HND', NULL, NULL),
(14, 'México', 'MX', 'MEX', NULL, NULL),
(15, 'Nicaragua', 'NI', 'NIC', NULL, NULL),
(16, 'Panamá', 'PA', 'PAN', NULL, NULL),
(17, 'Paraguay', 'PY', 'PRY', NULL, NULL),
(18, 'Perú', 'PE', 'PER', NULL, NULL),
(19, 'Puerto Rico', 'PR', 'PRI', NULL, NULL),
(20, 'República Dominicana', 'DO', 'DOM', NULL, NULL),
(21, 'Uruguay', 'URY', 'UY', NULL, NULL),
(22, 'Venezuela', 'VE', 'VEN', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wilfranr@gmail.com', '$2y$10$8SDkdx98Og3B28kDgSdKX.nxkF2Xe5WtE371NkdyGOVUU/90b/tda', '2023-06-18 14:01:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tercero_id` int(11) NOT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  `contacto_id` int(11) DEFAULT NULL,
  `estado` varchar(11) NOT NULL DEFAULT 'Nuevo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `user_id`, `tercero_id`, `comentario`, `contacto_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 1, 'Costeo', '2023-09-02 15:48:50', '2023-09-02 21:12:32'),
(2, 1, 5, NULL, NULL, 'Costeo', '2023-09-02 15:52:28', '2023-09-02 15:52:48'),
(3, 1, 1, NULL, 1, 'Costeo', '2023-09-05 03:26:20', '2023-09-05 03:27:41'),
(4, 1, 1, NULL, 2, 'Costeo', '2023-09-05 03:50:49', '2023-09-05 03:51:11'),
(5, 1, 1, NULL, 2, 'Costeo', '2023-09-05 03:57:47', '2023-09-05 03:58:05'),
(6, 1, 1, NULL, 1, 'Costeo', '2023-09-05 04:02:51', '2023-09-05 04:03:11'),
(7, 1, 1, NULL, 2, 'Costeo', '2023-09-09 17:18:35', '2023-09-09 17:19:10'),
(8, 1, 1, NULL, 1, 'Costeo', '2023-09-11 02:24:40', '2023-09-11 02:24:59'),
(9, 1, 1, NULL, 1, 'Nuevo', '2023-09-14 02:52:41', '2023-09-14 02:52:41'),
(10, 1, 1, NULL, 2, 'Nuevo', '2023-09-14 02:53:44', '2023-09-14 02:53:44'),
(11, 1, 1, NULL, 2, 'Costeo', '2023-09-14 02:53:44', '2023-09-14 02:54:49'),
(12, 1, 5, NULL, NULL, 'Costeo', '2023-09-14 02:56:24', '2023-09-14 02:56:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_articulos_temporales`
--

CREATE TABLE `pedidos_articulos_temporales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `articulo_temporal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos_articulos_temporales`
--

INSERT INTO `pedidos_articulos_temporales` (`id`, `pedido_id`, `articulo_temporal_id`, `created_at`, `updated_at`) VALUES
(1, 10, 1, '2023-09-14 02:53:44', '2023-09-14 02:53:44'),
(3, 11, 3, '2023-09-14 02:54:49', '2023-09-14 02:54:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_marca`
--

CREATE TABLE `pedido_marca` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `marca_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedido_marca`
--

INSERT INTO `pedido_marca` (`id`, `pedido_id`, `marca_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 2, NULL, NULL),
(4, 3, 1, NULL, NULL),
(5, 4, 1, NULL, NULL),
(6, 5, 1, NULL, NULL),
(7, 6, 1, NULL, NULL),
(8, 7, 1, NULL, NULL),
(9, 8, 1, NULL, NULL),
(10, 11, 2, NULL, NULL),
(11, 12, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_sistema`
--

CREATE TABLE `pedido_sistema` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `sistema_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedido_sistema`
--

INSERT INTO `pedido_sistema` (`id`, `pedido_id`, `sistema_id`, `created_at`, `updated_at`) VALUES
(1, 8, 3, '2023-09-11 02:24:40', '2023-09-11 02:24:40'),
(2, 12, 3, '2023-09-14 02:56:24', '2023-09-14 02:56:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencias`
--

CREATE TABLE `referencias` (
  `id` int(11) NOT NULL,
  `referencia` int(11) NOT NULL,
  `articulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencias_articulos`
--

CREATE TABLE `referencias_articulos` (
  `id` int(11) NOT NULL,
  `articulo_id` bigint(20) NOT NULL,
  `referencia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_suplencia`
--

CREATE TABLE `relacion_suplencia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `articulo_id` bigint(20) UNSIGNED NOT NULL,
  `suplido_por_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `relacion_suplencia`
--

INSERT INTO `relacion_suplencia` (`id`, `articulo_id`, `suplido_por_id`, `created_at`, `updated_at`) VALUES
(12, 4, 6, '2023-09-11 02:03:04', '2023-09-11 02:03:04'),
(15, 42, 37, '2023-09-11 02:05:54', '2023-09-11 02:05:54'),
(16, 42, 39, '2023-09-11 02:05:54', '2023-09-11 02:05:54'),
(17, 41, 4, '2023-09-11 02:06:39', '2023-09-11 02:06:39'),
(18, 41, 8, '2023-09-11 02:06:39', '2023-09-11 02:06:39'),
(22, 43, 7, '2023-09-11 02:12:16', '2023-09-11 02:12:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(3, 'Motor', '2023-05-01 20:23:09', '2023-05-01 20:23:09'),
(4, 'Bomba hidráulica', '2023-05-21 20:23:09', '2023-05-21 20:23:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terceros`
--

CREATE TABLE `terceros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipo_documento` varchar(255) NOT NULL,
  `numero_documento` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dv` varchar(255) DEFAULT NULL,
  `CiudadID` int(11) DEFAULT 2257,
  `PaisCodigo` char(3) DEFAULT 'COL',
  `codigo_postal` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT 'activo',
  `forma_pago` varchar(255) DEFAULT NULL,
  `email_factura_electronica` varchar(255) DEFAULT NULL,
  `rut` varchar(255) DEFAULT NULL,
  `certificacion_bancaria` varchar(255) DEFAULT NULL,
  `camara_comercio` varchar(255) DEFAULT NULL,
  `cedula_representante_legal` varchar(255) DEFAULT NULL,
  `sitio_web` varchar(255) DEFAULT NULL,
  `puntos` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `Indicativo` varchar(4) NOT NULL DEFAULT '+57'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `terceros`
--

INSERT INTO `terceros` (`id`, `nombre`, `tipo_documento`, `numero_documento`, `direccion`, `telefono`, `email`, `dv`, `CiudadID`, `PaisCodigo`, `codigo_postal`, `estado`, `forma_pago`, `email_factura_electronica`, `rut`, `certificacion_bancaria`, `camara_comercio`, `cedula_representante_legal`, `sitio_web`, `puntos`, `created_at`, `updated_at`, `tipo`, `Indicativo`) VALUES
(1, 'Carlos Osorio', 'CC', '3456778', 'Dirección123', '6578676', 'carlos.osorio@gmail.com', NULL, 2260, 'COL', NULL, 'activo', NULL, 'facturacion@gmail.com', 'rut/pa5Rt6aYqLGxjKwE32OdNchA0YbCtbTlQI7ikhtr.pdf', 'certificacion_bancaria/rjKMgdUjFgXf2IAIR4irQUZkoKcOrb5L3IjE15EJ.pdf', 'camara_comercio/icHeP6kG611d2CdH713Rf16XC0WlwLbZUo36awOA.pdf', 'cedula_representante_legal/nRSjhGNvE0uFjfJ1oahdd6hkJGysLcEY6lyyKtMy.pdf', NULL, NULL, '2023-06-24 14:49:23', '2023-08-21 23:56:11', 'Cliente', '+57'),
(5, 'Maira Perez', 'CC', '545345', 'asdf', '3016490698', 'w@q', NULL, 2260, 'COL', NULL, 'activo', NULL, 'w@q', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 18:21:31', '2023-08-12 14:39:32', 'Cliente', '+57'),
(6, 'Proveedor nacional 1', 'NIT', '123', 'asdf', '6578676', 'wilfranr@gmail.com', '4', 2260, 'COL', NULL, 'activo', NULL, 'wilfranr@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 16:33:52', '2023-08-06 12:27:49', 'Proveedor', '+57'),
(9, 'Proveedor internacional 1', 'NIT', '645645', 'asdf', '6578676', 'w@q', '3', 2515, 'MEX', NULL, 'activo', NULL, 'w@q', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 16:38:13', '2023-07-15 16:38:13', 'Proveedor', '+57'),
(10, 'Proveedor internacional 2', 'NIT', '645645', 'asdf', '6578676', 'w@q', '3', 2515, 'MEX', NULL, 'activo', NULL, 'w@q', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 16:39:04', '2023-08-05 21:12:14', 'Proveedor', '+57'),
(11, 'Proveedor nacional 2', 'NIT', '657677', 'asdf', '6578676', 'w@q', '3', 2260, 'COL', NULL, 'activo', NULL, 'w@q', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 16:39:36', '2023-07-15 16:39:36', 'Proveedor', '+57'),
(12, 'Proveedor Nacional 3', 'NIT', '98797987', 'asdf', '6578676', 'w@q', '5', 2257, 'COL', NULL, 'activo', NULL, 'w@q', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 16:41:52', '2023-07-15 16:41:52', 'Proveedor', '+57'),
(13, 'proveedor internacional 3', 'CE', '7865765756', 'asdf', '6578676', 'w@q', NULL, 653, 'ESP', NULL, 'activo', NULL, 'w@q', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 16:42:53', '2023-07-15 16:42:53', 'Proveedor', '+57'),
(72, 'Proveedor Perkins', 'CC', '6456546456', 'asdf', '6578676', 'wilfranr@gmail.com', NULL, 2257, 'COL', NULL, 'activo', NULL, 'wilfranr@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-21 11:03:33', '2023-08-21 11:03:33', 'Proveedor', '+57'),
(73, 'cliente con marca', 'CC', '80896995', 'Counting objects: 100% (439/439), done.', '6578676', 'wilfranr@gmail.com', NULL, 3173, 'SAU', NULL, 'activo', NULL, 'wilfranr@gmail.com', NULL, NULL, NULL, NULL, 'www.provvedor.com', NULL, '2023-08-26 20:38:15', '2023-08-26 20:38:15', 'Cliente', '+57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terceros_sistemas`
--

CREATE TABLE `terceros_sistemas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tercero_id` bigint(20) UNSIGNED NOT NULL,
  `sistema_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tercero_maquina`
--

CREATE TABLE `tercero_maquina` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tercero_id` bigint(20) UNSIGNED NOT NULL,
  `maquina_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tercero_maquina`
--

INSERT INTO `tercero_maquina` (`id`, `tercero_id`, `maquina_id`, `created_at`, `updated_at`) VALUES
(19, 1, 17, NULL, NULL),
(20, 5, 15, NULL, NULL),
(21, 5, 16, NULL, NULL),
(22, 73, 15, NULL, NULL),
(23, 73, 16, NULL, NULL),
(24, 73, 17, NULL, NULL),
(25, 1, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tercero_marca`
--

CREATE TABLE `tercero_marca` (
  `tercero_id` bigint(20) UNSIGNED NOT NULL,
  `marca_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tercero_marca`
--

INSERT INTO `tercero_marca` (`tercero_id`, `marca_id`, `created_at`, `updated_at`) VALUES
(1, 15, NULL, NULL),
(6, 1, NULL, NULL),
(6, 2, NULL, NULL),
(9, 2, NULL, NULL),
(9, 3, NULL, NULL),
(10, 1, NULL, NULL),
(11, 1, NULL, NULL),
(11, 3, NULL, NULL),
(12, 1, NULL, NULL),
(13, 3, NULL, NULL),
(72, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tercero_sistema`
--

CREATE TABLE `tercero_sistema` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tercero_id` bigint(20) UNSIGNED NOT NULL,
  `sistema_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tercero_sistema`
--

INSERT INTO `tercero_sistema` (`id`, `tercero_id`, `sistema_id`, `created_at`, `updated_at`) VALUES
(25, 10, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trm`
--

CREATE TABLE `trm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trm` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `trm`
--

INSERT INTO `trm` (`id`, `trm`, `created_at`, `updated_at`) VALUES
(1, 3900.00, NULL, '2023-09-14 02:11:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `foto` varchar(300) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `role`, `foto`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yoseth Rivera', '3137038949', 'wilfranr@gmail.com', NULL, 'superadmin', 'user1-128x128.jpg', '$2y$10$uCj6u2QsheieL8U2GyXc/u27B5BOVBuvnDGjGB130W5LUp6gfv.LK', 'AfzQwsASvZXogFYiAMxfs70ldbAdo2tPuzKvjBwMHlxox2hNF2rqUJH5SzAf', '2023-06-19 13:46:04', '2023-06-19 13:46:04'),
(3, 'Maira Perez', '3137038949', 'm@q.com', NULL, 'admin', 'user3-128x128.jpg', '$2y$10$etQHot3WhyNT.da5I0EIEOdUL9KKOgRwpk.TB7YDe82RU1ZXo9g6y', NULL, '2023-06-28 03:45:53', '2023-06-28 03:45:53'),
(4, 'Analista de partes', '3137038949', 'analista@ejemplo.com', NULL, 'partes', 'user4-128x128.jpg', '$2y$10$RMo1vLBppgxsjkhYW2pm4.Pupth.sYv5LOFAklLKWGySugRcYIj/O', NULL, '2023-07-01 17:34:45', '2023-07-01 17:34:45'),
(5, 'Vendedor', '3137038949', 'vendedor@ejemplo.com', NULL, 'vendedor', 'user7-128x128.jpg', '$2y$10$4kZaNzrbcHv37tnBDeVWieohTFpRfEQ8SiaEZXD0vhJ8aMkLqxFfG', NULL, '2023-07-01 18:07:09', '2023-07-01 18:07:09'),
(6, 'auxiliar 1', '3137038949', 'auxiliar@ejemplo.com', NULL, 'logistica', 'user8-128x128.jpg', '$2y$10$3XChWYBXNHhx61tHwa1cpuuQZdl/aJioj0qOPdvexQi3RCb/Qzrj2', NULL, '2023-07-01 18:25:00', '2023-07-01 18:25:00'),
(7, 'Vendedor2', '3137038949', 'vendedor2@ejemplo.com', NULL, 'vendedor', NULL, '$2y$10$0ruNVg99r3/WtZKUzVvu3.MfKsZUAA7KCg4Fuhao/L16vyzQv6HQ.', NULL, '2023-07-01 18:43:10', '2023-07-01 18:43:10'),
(8, 'auxiliar2', '3137038949', 'auxiliar2@ejemplo.com', NULL, 'logistica', NULL, '$2y$10$5fL2v0rt.DKN0MT20opJleqe7soJKTP2AKNYHkZI/006j3vZ3ZSvO', NULL, '2023-07-01 18:44:39', '2023-07-01 18:44:39'),
(9, 'vendedor3', '3137038949', 'vendedor3@ejemplo.com', NULL, 'vendedor', NULL, '$2y$10$X30AAN5WJLlFwEcrHAbqE.qoN3N0FzZ/UN0W5TSgAks5i0vAkhHs.', NULL, '2023-07-01 18:45:26', '2023-07-01 18:45:26'),
(10, 'Miguel Hernandez', '3137038949', 'miguel@gmail.com', NULL, 'superadmin', 'user2-160x160.jpg', '$2y$10$ACgvhShamd1aKyA/e0UpuO4NCzwqrm6FhO5ip2cKBuKCa5lQwz7xO', NULL, '2023-07-13 02:41:45', '2023-07-13 02:41:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articulos_juegos`
--
ALTER TABLE `articulos_juegos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulos_juegos_articulo_id_foreign` (`articulo_id`),
  ADD KEY `articulos_juegos_juego_por_id_foreign` (`juego_por_id`);

--
-- Indices de la tabla `articulo_medida`
--
ALTER TABLE `articulo_medida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulo_medida_articulo_id_foreign` (`articulo_id`),
  ADD KEY `articulo_medida_medida_id_foreign` (`medida_id`);

--
-- Indices de la tabla `articulo_pedido`
--
ALTER TABLE `articulo_pedido`
  ADD KEY `articulo_pedido_pedido_id_foreign` (`pedido_id`),
  ADD KEY `articulo_pedido_articulo_id_foreign` (`articulo_id`);

--
-- Indices de la tabla `articulo_temporal`
--
ALTER TABLE `articulo_temporal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`CiudadID`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto_tercero`
--
ALTER TABLE `contacto_tercero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacto_tercero_contacto_id_foreign` (`contacto_id`),
  ADD KEY `contacto_tercero_tercero_id_foreign` (`tercero_id`);

--
-- Indices de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cotizaciones_pedido_id_foreign` (`pedido_id`),
  ADD KEY `cotizaciones_tercero_id_foreign` (`tercero_id`);

--
-- Indices de la tabla `cotizacion_pedido`
--
ALTER TABLE `cotizacion_pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cotizacion_pedido_cotizacion_id_foreign` (`cotizacion_id`),
  ADD KEY `cotizacion_pedido_pedido_id_foreign` (`pedido_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamentos_pais_id_foreign` (`pais_id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `fotos_articulo_temporal`
--
ALTER TABLE `fotos_articulo_temporal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fotos_articulo_temporal_articulo_temporal_id_foreign` (`articulo_temporal_id`);

--
-- Indices de la tabla `foto_articulo`
--
ALTER TABLE `foto_articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes_articulo`
--
ALTER TABLE `imagenes_articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_padres`
--
ALTER TABLE `lista_padres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `maquinas_pedido`
--
ALTER TABLE `maquinas_pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maquinas_pedido_maquina_id_foreign` (`maquina_id`),
  ADD KEY `maquinas_pedido_pedido_id_foreign` (`pedido_id`);

--
-- Indices de la tabla `maquina_articulo`
--
ALTER TABLE `maquina_articulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maquina_articulo_maquina_id_foreign` (`maquina_id`),
  ADD KEY `maquina_articulo_articulo_id_foreign` (`articulo_id`);

--
-- Indices de la tabla `maquina_marca`
--
ALTER TABLE `maquina_marca`
  ADD PRIMARY KEY (`maquina_id`,`marca_id`),
  ADD KEY `maquina_marca_marca_id_foreign` (`marca_id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medidas`
--
ALTER TABLE `medidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`PaisCodigo`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos_articulos_temporales`
--
ALTER TABLE `pedidos_articulos_temporales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_articulos_temporales_pedido_id_foreign` (`pedido_id`),
  ADD KEY `pedidos_articulos_temporales_articulo_temporal_id_foreign` (`articulo_temporal_id`);

--
-- Indices de la tabla `pedido_marca`
--
ALTER TABLE `pedido_marca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_marca_pedido_id_foreign` (`pedido_id`),
  ADD KEY `pedido_marca_marca_id_foreign` (`marca_id`);

--
-- Indices de la tabla `pedido_sistema`
--
ALTER TABLE `pedido_sistema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_sistema_pedido_id_foreign` (`pedido_id`),
  ADD KEY `pedido_sistema_sistema_id_foreign` (`sistema_id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `referencias`
--
ALTER TABLE `referencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulo_id` (`articulo_id`);

--
-- Indices de la tabla `referencias_articulos`
--
ALTER TABLE `referencias_articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referencia` (`referencia_id`),
  ADD KEY `articulo_id` (`articulo_id`) USING BTREE;

--
-- Indices de la tabla `relacion_suplencia`
--
ALTER TABLE `relacion_suplencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relacion_suplencia_articulo_id_foreign` (`articulo_id`),
  ADD KEY `relacion_suplencia_suplido_por_id_foreign` (`suplido_por_id`);

--
-- Indices de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `terceros`
--
ALTER TABLE `terceros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `terceros_sistemas`
--
ALTER TABLE `terceros_sistemas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tercero_maquina`
--
ALTER TABLE `tercero_maquina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tercero_maquina_tercero_id_foreign` (`tercero_id`),
  ADD KEY `tercero_maquina_maquina_id_foreign` (`maquina_id`);

--
-- Indices de la tabla `tercero_marca`
--
ALTER TABLE `tercero_marca`
  ADD PRIMARY KEY (`tercero_id`,`marca_id`),
  ADD KEY `tercero_marca_marca_id_foreign` (`marca_id`);

--
-- Indices de la tabla `tercero_sistema`
--
ALTER TABLE `tercero_sistema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `terceros_sistemas_tercero_id_foreign` (`tercero_id`),
  ADD KEY `terceros_sistemas_sistema_id_foreign` (`sistema_id`);

--
-- Indices de la tabla `trm`
--
ALTER TABLE `trm`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `articulos_juegos`
--
ALTER TABLE `articulos_juegos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `articulo_medida`
--
ALTER TABLE `articulo_medida`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `articulo_temporal`
--
ALTER TABLE `articulo_temporal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `contacto_tercero`
--
ALTER TABLE `contacto_tercero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cotizacion_pedido`
--
ALTER TABLE `cotizacion_pedido`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotos_articulo_temporal`
--
ALTER TABLE `fotos_articulo_temporal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `foto_articulo`
--
ALTER TABLE `foto_articulo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes_articulo`
--
ALTER TABLE `imagenes_articulo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT de la tabla `lista_padres`
--
ALTER TABLE `lista_padres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `maquinas_pedido`
--
ALTER TABLE `maquinas_pedido`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `maquina_articulo`
--
ALTER TABLE `maquina_articulo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `medidas`
--
ALTER TABLE `medidas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pedidos_articulos_temporales`
--
ALTER TABLE `pedidos_articulos_temporales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedido_marca`
--
ALTER TABLE `pedido_marca`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pedido_sistema`
--
ALTER TABLE `pedido_sistema`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `referencias`
--
ALTER TABLE `referencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `referencias_articulos`
--
ALTER TABLE `referencias_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `relacion_suplencia`
--
ALTER TABLE `relacion_suplencia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `terceros`
--
ALTER TABLE `terceros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `terceros_sistemas`
--
ALTER TABLE `terceros_sistemas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tercero_maquina`
--
ALTER TABLE `tercero_maquina`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tercero_sistema`
--
ALTER TABLE `tercero_sistema`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `trm`
--
ALTER TABLE `trm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos_juegos`
--
ALTER TABLE `articulos_juegos`
  ADD CONSTRAINT `articulos_juegos_articulo_id_foreign` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`),
  ADD CONSTRAINT `articulos_juegos_juego_por_id_foreign` FOREIGN KEY (`juego_por_id`) REFERENCES `articulos` (`id`);

--
-- Filtros para la tabla `articulo_medida`
--
ALTER TABLE `articulo_medida`
  ADD CONSTRAINT `articulo_medida_articulo_id_foreign` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articulo_medida_medida_id_foreign` FOREIGN KEY (`medida_id`) REFERENCES `medidas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `articulo_pedido`
--
ALTER TABLE `articulo_pedido`
  ADD CONSTRAINT `articulo_pedido_articulo_id_foreign` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articulo_pedido_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `contacto_tercero`
--
ALTER TABLE `contacto_tercero`
  ADD CONSTRAINT `contacto_tercero_contacto_id_foreign` FOREIGN KEY (`contacto_id`) REFERENCES `contactos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contacto_tercero_tercero_id_foreign` FOREIGN KEY (`tercero_id`) REFERENCES `terceros` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD CONSTRAINT `cotizaciones_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `cotizaciones_tercero_id_foreign` FOREIGN KEY (`tercero_id`) REFERENCES `terceros` (`id`);

--
-- Filtros para la tabla `cotizacion_pedido`
--
ALTER TABLE `cotizacion_pedido`
  ADD CONSTRAINT `cotizacion_pedido_cotizacion_id_foreign` FOREIGN KEY (`cotizacion_id`) REFERENCES `cotizaciones` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cotizacion_pedido_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `departamentos_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`);

--
-- Filtros para la tabla `fotos_articulo_temporal`
--
ALTER TABLE `fotos_articulo_temporal`
  ADD CONSTRAINT `fotos_articulo_temporal_articulo_temporal_id_foreign` FOREIGN KEY (`articulo_temporal_id`) REFERENCES `articulo_temporal` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `maquinas_pedido`
--
ALTER TABLE `maquinas_pedido`
  ADD CONSTRAINT `maquinas_pedido_maquina_id_foreign` FOREIGN KEY (`maquina_id`) REFERENCES `maquinas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `maquinas_pedido_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `maquina_articulo`
--
ALTER TABLE `maquina_articulo`
  ADD CONSTRAINT `maquina_articulo_articulo_id_foreign` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `maquina_articulo_maquina_id_foreign` FOREIGN KEY (`maquina_id`) REFERENCES `maquinas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `maquina_marca`
--
ALTER TABLE `maquina_marca`
  ADD CONSTRAINT `maquina_marca_maquina_id_foreign` FOREIGN KEY (`maquina_id`) REFERENCES `maquinas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `maquina_marca_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedidos_articulos_temporales`
--
ALTER TABLE `pedidos_articulos_temporales`
  ADD CONSTRAINT `pedidos_articulos_temporales_articulo_temporal_id_foreign` FOREIGN KEY (`articulo_temporal_id`) REFERENCES `articulo_temporal` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedidos_articulos_temporales_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedido_marca`
--
ALTER TABLE `pedido_marca`
  ADD CONSTRAINT `pedido_marca_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedido_marca_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedido_sistema`
--
ALTER TABLE `pedido_sistema`
  ADD CONSTRAINT `pedido_sistema_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedido_sistema_sistema_id_foreign` FOREIGN KEY (`sistema_id`) REFERENCES `sistemas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `relacion_suplencia`
--
ALTER TABLE `relacion_suplencia`
  ADD CONSTRAINT `relacion_suplencia_articulo_id_foreign` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`),
  ADD CONSTRAINT `relacion_suplencia_suplido_por_id_foreign` FOREIGN KEY (`suplido_por_id`) REFERENCES `articulos` (`id`);

--
-- Filtros para la tabla `tercero_maquina`
--
ALTER TABLE `tercero_maquina`
  ADD CONSTRAINT `tercero_maquina_maquina_id_foreign` FOREIGN KEY (`maquina_id`) REFERENCES `maquinas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tercero_maquina_tercero_id_foreign` FOREIGN KEY (`tercero_id`) REFERENCES `terceros` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tercero_marca`
--
ALTER TABLE `tercero_marca`
  ADD CONSTRAINT `tercero_marca_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tercero_marca_tercero_id_foreign` FOREIGN KEY (`tercero_id`) REFERENCES `terceros` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tercero_sistema`
--
ALTER TABLE `tercero_sistema`
  ADD CONSTRAINT `terceros_sistemas_sistema_id_foreign` FOREIGN KEY (`sistema_id`) REFERENCES `sistemas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `terceros_sistemas_tercero_id_foreign` FOREIGN KEY (`tercero_id`) REFERENCES `terceros` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
