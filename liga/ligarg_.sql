-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2025 a las 17:30:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ligarg_`
--
CREATE DATABASE IF NOT EXISTS `ligarg_` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ligarg_`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emparejamientos`
--

DROP TABLE IF EXISTS `emparejamientos`;
CREATE TABLE `emparejamientos` (
  `id` int(11) NOT NULL,
  `jornada` int(3) NOT NULL,
  `liga_id` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `goles_local` int(11) DEFAULT NULL,
  `id_visitante` int(11) NOT NULL,
  `goles_visitante` int(11) DEFAULT NULL,
  `fecha_partido` datetime NOT NULL DEFAULT current_timestamp(),
  `resultado` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `emparejamientos`
--

INSERT INTO `emparejamientos` (`id`, `jornada`, `liga_id`, `id_local`, `goles_local`, `id_visitante`, `goles_visitante`, `fecha_partido`, `resultado`) VALUES
(1, 1, 2, 1, NULL, 3, NULL, '2025-03-31 17:16:19', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

DROP TABLE IF EXISTS `equipos`;
CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `nombre_equipo` varchar(100) NOT NULL,
  `equipo_correo` varchar(100) NOT NULL,
  `equipo_imagen` varchar(50) NOT NULL,
  `puntos` int(3) NOT NULL DEFAULT 0,
  `partidos_jugados` int(3) NOT NULL DEFAULT 0,
  `goles_a_favor` int(3) NOT NULL DEFAULT 0,
  `goles_en_contra` int(3) NOT NULL DEFAULT 0,
  `id_liga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre_equipo`, `equipo_correo`, `equipo_imagen`, `puntos`, `partidos_jugados`, `goles_a_favor`, `goles_en_contra`, `id_liga`) VALUES
(1, 'Nottingham Miedo', 'NM@iesruizgijon.com', 'Nottingham.png', 5, 0, 0, 0, 1),
(2, 'equipo novato 2', 'novato2@iesruizgijon.com', 'novato2.png', 10, 0, 0, 0, 1),
(3, 'equipo Juvenil 1', 'juvenil@iesruizgijon.com', 'juvenil.png', 8, 0, 0, 0, 2),
(4, 'equipo veterano 1', 'veterano@iesruizgijon.com', 'veterano1.png', 15, 0, 0, 0, 3),
(5, 'equipo Veterano 2', 'veterano2@iesruizgijon.com', 'veterano2.png', 3, 0, 0, 0, 4),
(6, 'equipo veterano 3', 'veterano3@iesruizgijon.com', 'veterano3.png', 5, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

DROP TABLE IF EXISTS `jugadores`;
CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `jugador_nombre` varchar(100) NOT NULL,
  `id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

DROP TABLE IF EXISTS `ligas`;
CREATE TABLE `ligas` (
  `id` int(11) NOT NULL,
  `nombre_liga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`id`, `nombre_liga`) VALUES
(1, 'Liga Novato'),
(2, 'Liga Juvenil'),
(3, 'Liga Veterano Grupo A'),
(4, 'Liga Veterano Grupo B');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `emparejamientos`
--
ALTER TABLE `emparejamientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `liga_id` (`liga_id`,`id_local`,`id_visitante`),
  ADD KEY `id_local` (`id_local`),
  ADD KEY `id_visitante` (`id_visitante`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_liga` (`id_liga`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- Indices de la tabla `ligas`
--
ALTER TABLE `ligas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `emparejamientos`
--
ALTER TABLE `emparejamientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `emparejamientos`
--
ALTER TABLE `emparejamientos`
  ADD CONSTRAINT `emparejamientos_ibfk_1` FOREIGN KEY (`id_local`) REFERENCES `equipos` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `emparejamientos_ibfk_2` FOREIGN KEY (`id_visitante`) REFERENCES `equipos` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `emparejamientos_ibfk_3` FOREIGN KEY (`liga_id`) REFERENCES `ligas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`id_liga`) REFERENCES `ligas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
