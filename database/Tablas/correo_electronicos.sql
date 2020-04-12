-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2020 a las 19:51:46
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
-- Estructura de tabla para la tabla `correo_electronicos`
--

CREATE TABLE `correo_electronicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evento_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tipoCorreo` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correoElectronico` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `correo_electronicos`
--

INSERT INTO `correo_electronicos` (`id`, `evento_id`, `tipoCorreo`, `correoElectronico`, `created_at`, `updated_at`) VALUES
(1, 2, 'personal', 'esteban.r.901@gmail.com', '2020-04-11 02:51:12', '2020-04-11 03:27:16'),
(2, 2, 'personal', 'esteban.r.901@gmail.com', '2020-04-11 03:07:02', '2020-04-11 03:27:16'),
(3, 2, 'personal', 'esteban.r.901@gmail.com', '2020-04-11 03:07:27', '2020-04-11 03:27:16'),
(4, 3, 'asfdsg', 'afdsf', '2020-04-11 04:06:26', '2020-04-11 22:40:04'),
(5, 4, 'dasgfg', 'gsdafhg', '2020-04-11 22:39:43', '2020-04-11 22:52:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `correo_electronicos`
--
ALTER TABLE `correo_electronicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `correo_electronicos_evento_id_foreign` (`evento_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `correo_electronicos`
--
ALTER TABLE `correo_electronicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `correo_electronicos`
--
ALTER TABLE `correo_electronicos`
  ADD CONSTRAINT `correo_electronicos_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
