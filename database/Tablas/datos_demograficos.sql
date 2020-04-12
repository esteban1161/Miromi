-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2020 a las 19:50:31
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miromi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_demograficos`
--

CREATE TABLE `datos_demograficos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evento_id` bigint(20) UNSIGNED DEFAULT NULL,
  `paisNacimiento` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ciudadNacimiento` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `estadoCivil` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `escolaridad` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ocupacion` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `credoReligioso` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `paisResidencia` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `departamentoResidencia` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ciudadResidencia` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `localidadResidencia` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `direccionResidencia` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `zonaResidencia` char(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `datos_demograficos`
--

INSERT INTO `datos_demograficos` (`id`, `evento_id`, `paisNacimiento`, `ciudadNacimiento`, `estadoCivil`, `escolaridad`, `ocupacion`, `credoReligioso`, `paisResidencia`, `departamentoResidencia`, `ciudadResidencia`, `localidadResidencia`, `direccionResidencia`, `zonaResidencia`, `created_at`, `updated_at`) VALUES
(1, 2, '9', '2', 'C', 'PR', 'estudiante', 'catolico', 'colombia', 'cundinamarca', 'bogota', NULL, 'calle 80', 'U', '2020-04-11 02:51:11', '2020-04-11 03:27:16'),
(2, 2, '9', '2', 'C', 'PR', 'estudiante', 'catolico', 'colombia', 'cundinamarca', 'bogota', NULL, 'calle 80', 'U', '2020-04-11 03:07:02', '2020-04-11 03:27:16'),
(3, 2, '9', '2', 'C', 'PR', 'estudiante', 'catolico', 'colombia', 'cundinamarca', 'bogota', NULL, 'calle 80', 'U', '2020-04-11 03:07:27', '2020-04-11 03:27:16'),
(4, 3, NULL, '2', 'UL', 'T', 'ASFDSGF', 'SAFDG', 'AFDS', 'AFDGSFD', 'fadgsf', NULL, 'afdsgfg', 'U', '2020-04-11 04:06:25', '2020-04-11 22:40:04'),
(5, 4, '10', '2', 'C', 'PR', 'sdafsg', 'afdg', 'afdsg', 'dsag', 'afsdf', NULL, 'gsd', 'R', '2020-04-11 22:39:42', '2020-04-11 22:52:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_demograficos`
--
ALTER TABLE `datos_demograficos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_demograficos_evento_id_foreign` (`evento_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_demograficos`
--
ALTER TABLE `datos_demograficos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_demograficos`
--
ALTER TABLE `datos_demograficos`
  ADD CONSTRAINT `datos_demograficos_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
