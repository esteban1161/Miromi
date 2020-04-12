-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2020 a las 19:49:47
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
-- Estructura de tabla para la tabla `datos_identificacions`
--

-- CREATE TABLE `datos_identificacions` (
  -- `id` bigint(20) UNSIGNED NOT NULL,
  -- `evento_id` bigint(20) UNSIGNED DEFAULT NULL,
  -- `primerNombre` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  -- `segundoNombre` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  -- `primerApellido` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  -- `segundoApellido` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  -- `tipoDocumento` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  -- `numeroIdentificacion` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  -- `sexo` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  -- `fechaNacimiento` date DEFAULT NULL,
  -- `created_at` timestamp NULL DEFAULT NULL,
  -- `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `datos_identificacions`
--

INSERT INTO `datos_identificacions` (`id`, `evento_id`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `tipoDocumento`, `numeroIdentificacion`, `sexo`, `fechaNacimiento`, `created_at`, `updated_at`) VALUES

(1, 1, 'Paola', 'Mariana', 'Arias', 'Ortiz', 'CC', '53177660', 'F', '1985-09-03', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(2, 2, 'Blanca', 'Celene', 'Alzugarate', 'Acuña', 'CC', '39787898', 'F', '1971-03-16', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(3, 3, 'Carmen', 'Elisa', 'Ardila', 'Ardila', 'CC', '52309542', 'F', '1974-10-09', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(4, 4, 'Carmen', 'Elisa', 'Ardila', 'De Caballero', 'CC', '20249393', 'F', '1938-01-18', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(5, 5, 'Maria ', 'Clara', 'Torres', '', 'CC', '39710930', 'F', '1961-10-15', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(6, 6, 'Ana', 'Claudia', 'Faustino', 'Da Silva', 'PA ', 'GA116650', 'F', '1969-12-08', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(7, 7, 'Cesar', 'Augusto', 'Bolivar', 'Galindo', 'CC', '19324292', 'M', '1958-09-21', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(8, 8, 'Ana', 'Claudia', 'Faustino', 'Da Silva', 'PA ', 'GA116650', '', '1969-12-08', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(9, 9, 'Cesar', 'Augusto', 'Bolivar', 'Galindo', 'CC', '19324292', 'M', '1958-09-21', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(10, 10, 'Luz', 'Bertha', 'León', 'Chavez', 'CC', '41410111', 'F', '1948-06-28', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(11, 11, 'Luis', 'Alfonso', 'Chaves', '', 'CC', '17169820', 'M', '1947-04-12', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(12, 12, 'Luz', 'Bertha', 'León', 'Chavez', 'CC', '41410111', 'F', '1948-06-28', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(13, 13, 'Blanca', 'Celene', 'Alzugarate', 'Acuña', 'CC', '39787898', 'F', '1971-03-16', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(14, 14, 'Aida', 'Stella', 'Lopez', 'Moreno', 'CC', '51628092', 'F', '1961-09-26', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(15, 15, 'Martha', 'Patricia', 'Eslava', 'Quintero', 'CC', '51909448', 'F', '1968-05-31', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(16, 16, 'Juan', 'Ricardo', 'Fernandez', 'Russi', 'CC', '79641838', 'M', '1972-09-17', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(17, 17, 'Sofia', 'Del Carmen', 'Baquero', 'Urquijo', 'CC', '1018506620', 'F', '1998-07-21', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(18, 18, 'Armando', '', 'Turca', 'Sierra ', 'CC', '19139409', 'M', '1950-10-12', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(19, 19, 'Rosalba', '', 'Sandino', 'Alfaro', 'CC', '35321272', 'F', '1955-09-30', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(20, 20, 'Lida', 'Esperanza', 'Aguilar', 'Pulido', 'CC', '52420523', 'F', '1977-06-11', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(21, 21, 'Leidy', 'Johana', 'Rincon', 'Ayala', 'CC', '1101755103', 'F', '1989-04-29', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(22, 22, 'Liliana', 'Judith', 'Rodriguez', 'Fajardo', 'CC', '40918954', 'F', '1965-11-18', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(23, 23, 'Juan ', 'Felipe', 'Castro', 'Lopéz', 'CC', '1015403758', 'M', '1988-02-13', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(24, 24, 'Bertilda', '', 'Velasquez', ' De Montaño', 'CC', '21164984', 'F', '1943-11-09', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(25, 25, 'Blanca ', 'Nelly ', 'Pinto', 'Socha', 'CC', '24116663', 'F', '1948-08-05', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(26, 26, 'Gloria', 'Stella', 'Gonzalez ', 'De Quiroga', 'CC', '41680926', 'F', '1952-05-20', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(27, 27, 'Teresa', '', 'Castro', 'Salcedo', 'CC', '41450602', 'F', '1948-05-20', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(28, 28, 'Mariela', '', 'Gomez', 'De Galvis', 'CC', '20947316', 'F', '1954-01-25', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(29, 29, 'Victor ', 'Manuel', 'Garzon', 'Cañas', 'CC', '11377911', 'M', '1959-11-07', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(30, 30, 'Marta', 'Mireya', 'Molano', 'Medina', 'CC', '46366582', 'F', '1970-01-30', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(31, 31, 'Johana', '', 'Martinez', 'Vega', 'CC', '52700774', 'F', '1980-10-31', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(32, 32, 'Mónica', 'Lorena', 'Ariza', 'Fonteche', 'CC', '52809415', 'F', '1981-02-21', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(33, 33, 'Monica', 'Lorena', 'Ariza', 'Fontecha', 'CC', '52809415', 'F', '1981-02-21', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(34, 34, 'Carmen', 'Elisa', 'Ardila', 'Ardila', 'CC', '52309542', 'F', '1974-10-09', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(35, 35, 'Alvaro', '', 'Clavijo', 'Gutierrez', 'CC', '351814', 'M', '1960-05-29', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(36, 36, 'Ingrid', 'Paola ', 'Salamanca ', 'Leon', 'CC', '1014177852', 'F', '1986-03-28', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(37, 37, 'Renzo', '', 'Garcia', 'Navarro', 'CC', '88263449', 'M', '1983-03-07', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(38, 38, 'Fryseth', '', 'Mena ', 'Parra', 'CC', '52526379', 'F', '1978-12-07', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(39, 39, 'Maria', 'Bisitación', 'Ruiz', 'Nieto', 'CC', '20536533', 'F', '1928-09-02', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(40, 40, 'Jenny', 'Hansbleidy', 'Martinez', '', 'CC', '524889264', 'F', '1977-06-12', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(41, 41, 'Rocio', '', 'Ortiz', 'Pizza', 'CC', '39557936', 'F', '1964-08-02', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(42, 42, 'Maria', 'De Las Mercedes', 'Gaona', '', 'CC', '35317664', 'F', '1953-04-28', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(43, 43, 'Isabela', '', 'Sanchez', 'Bolivar', 'CC', '1016059327', 'F', '1993-08-20', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(44, 44, 'Isabela', '', 'Sanchez', '', 'CC', '', 'F', '', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(45, 45, 'Carlos', 'Fabian', 'Diaz', 'Rivera', 'CC', '1020754081', 'M', '1990-07-14', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(46, 46, 'Marisol', '', 'Cardenas', 'Castro', 'CC', '52182182', 'F', '1974-04-20', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(47, 47, 'Maria', 'Naiza', 'León', 'De Guzman', 'CC', '41689013', 'F', '1953-04-18', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(48, 48, 'Ana', 'Irma', 'Hurtado', 'Maldonado', 'CC', '39682948', 'F', '1962-05-15', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(49, 49, 'Jose', 'Andres', 'Gonzalez', 'Gaona', 'CC', '80011054', 'M', '1980-01-05', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(50, 50, 'Augustin', '', 'Castro', 'Lopez', 'CC', '1015430555', 'M', '1992-03-16', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(51, 51, 'Cristina', '', 'Montaño', 'Castro', 'CC', '52824628', 'F', '1979-10-10', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(52, 52, 'German', 'Andres', 'Mendez', 'Giraldo', 'CC', '79297396', 'M', '1964-03-08', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(53, 53, 'Maria ', 'Dive', 'Sanchez', 'Rangel', 'CC', '39007848', 'F', '1956-02-12', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(54, 54, 'Rebeca ', '', 'Copete', 'Sandoval', 'CC', '39530517', 'F', '1962-09-23', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(55, 55, 'Maria ', 'Stella ', 'Cespedes ', 'Cuellar', 'CC', '39649387', 'F', '1967-09-08', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(56, 56, 'Ana ', 'Ofelia', 'Joya ', 'Veloza', 'CC', '51890407', 'F', '1968-03-16', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(57, 57, 'Carmenza', '', 'Gomez', 'Garzon', 'CC', '20758864', 'F', '1965-09-01', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(58, 58, 'Mercedes', '', 'Camargo', 'Ramirez', 'CC', '51601568', 'F', '1961-04-04', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(59, 59, 'Gladys', '', 'Quevedo', 'De Pachón', 'CC', '20471073', 'F', '1960-02-20', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(60, 60, 'Francy', 'Stella', 'Puerto', 'Meneses', 'CC', '41494594', 'F', '1950-10-11', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(61, 61, 'Elvira', '', 'Caranton', '', 'CC', '20303975', 'F', '1941-08-11', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(62, 62, 'Blanca ', 'Gilma', 'Rojas', 'Copete', 'CC', '41711580', 'F', '1957-09-22', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(63, 63, 'Bertha', 'Ediia', 'Diaz', '', 'CC', '33449698', 'F', '1956-09-29', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(64, 64, 'Maria', 'Amanda', 'Gutierrez', 'Jimenez', 'CC', '41664620', 'F', '1955-11-17', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(65, 65, 'Gilma', 'Carolina', 'Juez', 'Rojas', 'CC', '1032376444', 'F', '1986-12-16', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(66, 66, 'Maria', 'Delfina', 'Soler', 'De Galindo', 'CC', '24232195', 'F', '1931-03-30', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(67, 67, 'Amelia', 'Maria', 'Garzón', 'De Gomez', 'CC', '41305744', 'F', '1940-02-20', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(68, 68, 'Arturo', '', 'Peñalosa', 'Bernal', 'CC', '80422262', 'M', '1971-08-26', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(69, 69, 'Bertha', 'Cecilia', 'Salamanca', 'Ramirez', 'CC', '51893381', 'F', '1966-11-14', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(70, 70, 'Manuel', 'Ricardo', 'Torres', 'Encizo', 'CC', '1015469326', 'M', '1997-06-13', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(71, 71, 'Amalia', '', 'Caro', '', 'CC', '41305744', 'F', '', '2020-04-11 02:51:11',  '2020-04-11 02:51:11'),
(72,72, 'Victor', 'Manuel', 'Barrera', 'Rozo', 'RC', '17140215', 'M', '1945-01-28', '2020-04-11 02:51:11',  '2020-04-11 02:51:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_identificacions`
--
-- ALTER TABLE `datos_identificacions`
  -- ADD PRIMARY KEY (`id`),
  -- ADD KEY `datos_identificacions_evento_id_foreign` (`evento_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_identificacions`
--
-- ALTER TABLE `datos_identificacions`
  -- MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- --
-- -- Restricciones para tablas volcadas
-- --

-- --
-- -- Filtros para la tabla `datos_identificacions`
-- --
-- ALTER TABLE `datos_identificacions`
  -- ADD CONSTRAINT `datos_identificacions_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
