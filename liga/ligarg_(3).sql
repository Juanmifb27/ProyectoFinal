-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2025 a las 10:39:09
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
  `fecha_partido` date NOT NULL DEFAULT current_timestamp(),
  `resultado` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `emparejamientos`
--

INSERT INTO `emparejamientos` (`id`, `jornada`, `liga_id`, `id_local`, `goles_local`, `id_visitante`, `goles_visitante`, `fecha_partido`, `resultado`) VALUES
(178, 1, 1, 2, NULL, 2, NULL, '2025-04-07', NULL),
(179, 1, 1, 1, 4, 9, 2, '2025-04-09', NULL),
(180, 1, 1, 7, 5, 8, 6, '2025-04-08', NULL),
(181, 2, 1, 2, NULL, 9, NULL, '2025-04-10', NULL),
(182, 2, 1, 8, NULL, 8, NULL, '2025-04-11', NULL),
(183, 2, 1, 1, NULL, 7, NULL, '2025-04-14', NULL),
(184, 3, 1, 2, NULL, 8, NULL, '2025-04-17', NULL),
(185, 3, 1, 9, NULL, 7, NULL, '2025-04-16', NULL),
(186, 3, 1, 1, NULL, 1, NULL, '2025-04-15', NULL),
(187, 4, 1, 2, NULL, 7, NULL, '2025-04-18', NULL),
(188, 4, 1, 8, NULL, 1, NULL, '2025-04-22', NULL),
(189, 4, 1, 9, NULL, 9, NULL, '2025-04-21', NULL),
(190, 5, 1, 2, NULL, 1, NULL, '2025-04-23', NULL),
(191, 5, 1, 7, NULL, 7, NULL, '2025-04-24', NULL),
(192, 5, 1, 8, NULL, 9, NULL, '2025-04-25', NULL);

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
(4, 'equipo veterano 1', 'veterano@iesruizgijon.com', 'veterano1.png', 15, 0, 0, 0, 3),
(5, 'FR1', 'veterano2@iesruizgijon.com', 'veterano2.png', 3, 0, 0, 0, 4),
(6, 'FC Barcelo', 'veterano3@iesruizgijon.com', 'veterano3.png', 5, 0, 0, 0, 3),
(7, 'Equipo novato 3', 'novato3@iesruizgijon.com', 'novato3.png', 0, 0, 0, 0, 1),
(8, 'Equipo Novato 4', 'novato4@iesruizgijon.com', 'juvenil.png', 0, 0, 0, 0, 1),
(9, 'equipo Novato 5', 'Novato5@iesruizgijon.com', 'novato5.png', 0, 0, 0, 0, 1),
(10, 'Rayo Vaticano', 'RayoVaticano@iesruizgijon.com', 'Rayo.png', 3, 0, 0, 0, 3),
(11, 'Biofrutas', 'Biofrutas@iesruizgijon.com', 'Bio.png', 0, 0, 0, 0, 3),
(12, 'San Marino', 'Marino@iesruizgijon.com', 'Marino.png', 0, 0, 0, 0, 4),
(13, 'Los parguelas', 'parguelas@iesruizgijon.com', 'parguelas.png', 0, 0, 0, 0, 4),
(14, 'Los Kukos', 'kukos@iesruizgijon.com', 'kukos.png', 0, 0, 0, 0, 4);

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
(3, 'Liga Veterano'),
(4, 'Liga Veterano Grupo B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `rol` enum('AdministradorGeneral','AdministradorLigas','Usuario','') NOT NULL,
  `id_jugador` int(11) DEFAULT NULL,
  `id_equipo` int(11) DEFAULT NULL,
  `id_liga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jugador` (`id_jugador`,`id_equipo`,`id_liga`),
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_liga` (`id_liga`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `emparejamientos`
--
ALTER TABLE `emparejamientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`id_liga`) REFERENCES `ligas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
