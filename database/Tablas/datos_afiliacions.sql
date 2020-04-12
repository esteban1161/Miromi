-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2020 a las 19:51:08
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
-- Estructura de tabla para la tabla `datos_afiliacions`
--

CREATE TABLE `datos_afiliacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evento_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tipoVinculacion` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `aseguradora` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `responsableMedico` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `parentescoResponsable` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `telefonoResponsable` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `datos_afiliacions`
--

INSERT INTO `datos_afiliacions` (`id`, `evento_id`, `tipoVinculacion`, `aseguradora`, `responsableMedico`, `parentescoResponsable`, `telefonoResponsable`, `created_at`, `updated_at`) VALUES
(1, 2, '2', 'famisanar', 'roberto', 'papa', '3016346242', '2020-04-11 02:51:11', '2020-04-11 03:27:16'),
(2, 2, '2', 'famisanar', 'roberto', 'papa', '3016346242', '2020-04-11 03:07:02', '2020-04-11 03:27:16'),
(3, 2, '2', 'famisanar', 'roberto', 'papa', '3016346242', '2020-04-11 03:07:27', '2020-04-11 03:27:16'),
(4, 3, '7', 'fsadsgf', 'asfdsfd', 'asfds', 'asdfds', '2020-04-11 04:06:25', '2020-04-11 22:40:04'),
(5, 4, '3', 'agfhdg', 'dhdhsg', 'gsadfhg', 'sfhd', '2020-04-11 22:39:42', '2020-04-11 22:52:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_afiliacions`
--
ALTER TABLE `datos_afiliacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_afiliacions_evento_id_foreign` (`evento_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_afiliacions`
--
ALTER TABLE `datos_afiliacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_afiliacions`
--
ALTER TABLE `datos_afiliacions`
  ADD CONSTRAINT `datos_afiliacions_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
