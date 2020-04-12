-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2020 a las 19:30:53
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
-- Estructura de tabla para la tabla `eventos`
--

-- CREATE TABLE `eventos` (
  -- `id` bigint(20) UNSIGNED NOT NULL,
  -- `usuario_id` bigint(20) UNSIGNED NOT NULL,
  -- `rol_id` int(10) UNSIGNED NOT NULL,
  -- `usuario_r_id` int(11) DEFAULT NULL,
  -- `identificacion_id` bigint(20) DEFAULT NULL,
  -- `formulario_id` bigint(20) UNSIGNED NOT NULL,
  -- `created_at` timestamp NULL DEFAULT NULL,
  -- `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--
-- Truncate table eventos;
INSERT INTO `eventos` (`id`, `usuario_id`, `rol_id`, `usuario_r_id`, `identificacion_id`, `formulario_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, NULL, NULL, 1, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(2, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(3, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(4, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(5, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(6, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(7, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(8, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(9, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(10, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(11, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(12, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(13, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(14, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(15, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(16, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(17, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(18, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(19, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(20, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(21, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(22, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(23, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(24, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(25, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(26, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(27, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(28, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(29, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(30, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(31, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(32, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(33, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(34, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(35, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(36, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(37, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(38, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(39, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(40, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(41, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(42, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(43, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(44, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(45, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(46, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(47, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(48, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(49, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(50, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(51, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(52, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(53, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(54, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(55, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(56, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(57, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(58, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(59, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(60, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(61, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(62, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(63, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(64, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(65, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(66, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(67, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(68, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(69, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(70, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(71, 2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(72,2, 2, NULL, NULL, 2, '2020-04-11 02:51:11',  '2020-04-11 02:51:11');




--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
-- ALTER TABLE `eventos`
  -- ADD PRIMARY KEY (`id`),
  -- ADD KEY `eventos_usuario_id_foreign` (`usuario_id`),
  -- ADD KEY `eventos_formulario_id_foreign` (`formulario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
-- ALTER TABLE `eventos`
  -- MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
-- ALTER TABLE `eventos`
  -- ADD CONSTRAINT `eventos_formulario_id_foreign` FOREIGN KEY (`formulario_id`) REFERENCES `formularios` (`id`) ON UPDATE CASCADE,
  -- ADD CONSTRAINT `eventos_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
