-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql305.infinityfree.com
-- Tiempo de generación: 23-05-2025 a las 03:02:02
-- Versión del servidor: 10.6.19-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_38874267_ligarg_`
--
CREATE DATABASE IF NOT EXISTS `if0_38874267_ligarg_` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `if0_38874267_ligarg_`;

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
  `resultado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `emparejamientos`
--

INSERT INTO `emparejamientos` (`id`, `jornada`, `liga_id`, `id_local`, `goles_local`, `id_visitante`, `goles_visitante`, `fecha_partido`, `resultado`) VALUES
(211, 1, 4, 5, NULL, 14, NULL, '0000-00-00', NULL),
(212, 1, 4, 12, NULL, 13, NULL, '0000-00-00', NULL),
(213, 2, 4, 5, NULL, 13, NULL, '0000-00-00', NULL),
(214, 2, 4, 14, NULL, 12, NULL, '0000-00-00', NULL),
(215, 3, 4, 5, NULL, 12, NULL, '0000-00-00', NULL),
(216, 3, 4, 13, NULL, 14, NULL, '0000-00-00', NULL),
(217, 1, 1, 1, NULL, 1, NULL, '0000-00-00', NULL),
(218, 1, 1, 2, 2, 9, 2, '2025-05-09', 1),
(219, 1, 1, 7, 3, 8, 1, '2025-05-14', 1),
(220, 2, 1, 1, 4, 9, 1, '2025-05-12', 1),
(221, 2, 1, 8, NULL, 8, NULL, '0000-00-00', NULL),
(222, 2, 1, 2, 1, 7, 3, '2025-05-13', 1),
(223, 3, 1, 1, 1, 8, 1, '2025-05-16', 1),
(224, 3, 1, 9, 2, 7, 2, '2025-05-15', 1),
(225, 3, 1, 2, NULL, 2, NULL, '0000-00-00', NULL),
(226, 4, 1, 1, 5, 7, 2, '2025-05-17', 1),
(227, 4, 1, 8, 2, 2, 6, '2025-05-18', 1),
(228, 4, 1, 9, NULL, 9, NULL, '0000-00-00', NULL),
(229, 5, 1, 1, 1, 2, 2, '2025-05-19', 1),
(230, 5, 1, 7, NULL, 7, NULL, '0000-00-00', NULL),
(231, 5, 1, 8, 1, 9, 1, '2025-05-20', 1),
(247, 1, 3, 4, NULL, 4, NULL, '0000-00-00', 0),
(248, 1, 3, 6, 2, 17, 3, '2025-05-09', 1),
(249, 1, 3, 10, 1, 11, 1, '2025-05-12', 1),
(250, 2, 3, 4, 2, 17, 2, '2025-05-13', 1),
(251, 2, 3, 11, NULL, 11, NULL, '0000-00-00', 0),
(252, 2, 3, 6, 1, 10, 3, '2025-05-14', 1),
(253, 3, 3, 4, 2, 11, 2, '2025-05-16', 1),
(254, 3, 3, 17, 0, 10, 0, '2025-05-15', 1),
(255, 3, 3, 6, NULL, 6, NULL, '0000-00-00', 0),
(256, 4, 3, 4, 1, 10, 2, '2025-05-19', 1),
(257, 4, 3, 11, 2, 6, 1, '2025-05-20', 1),
(258, 4, 3, 17, NULL, 17, NULL, '0000-00-00', 0),
(259, 5, 3, 4, 4, 6, 4, '2025-05-21', 1),
(260, 5, 3, 10, NULL, 10, NULL, '0000-00-00', 0),
(261, 5, 3, 11, 2, 17, 5, '2025-05-22', 1);

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
(1, 'Nottingham Miedo', 'NM@iesruizgijon.com', 'default.png', 7, 4, 11, 6, 1),
(2, 'equipo novato 2 mod', 'novato2@iesruizgijon.com', 'default.png', 7, 4, 11, 8, 1),
(4, 'equipo veterano 1', 'veterano@iesruizgijon.com', 'default.png', 3, 4, 9, 10, 3),
(5, 'FR1', 'veterano2@iesruizgijon.com', 'default.png', 0, 0, 0, 0, 4),
(6, 'FC Barcelo', 'veterano3@iesruizgijon.com', 'default.png', 1, 4, 8, 12, 3),
(7, 'Equipo novato 3', 'novato3@iesruizgijon.com', 'default.png', 7, 4, 10, 9, 1),
(8, 'Equipo Novato 4', 'novato4@iesruizgijon.com', 'default.png', 2, 4, 5, 11, 1),
(9, 'equipo Novato 5', 'Novato5@iesruizgijon.com', 'default.png', 3, 4, 6, 9, 1),
(10, 'Rayo Vaticano', 'RayoVaticano@iesruizgijon.com', 'default.png', 8, 4, 6, 3, 3),
(11, 'Biofrutas', 'Biofrutas@iesruizgijon.com', 'default.png', 5, 4, 7, 9, 3),
(12, 'San Marino', 'Marino@iesruizgijon.com', 'default.png', 0, 0, 0, 0, 4),
(13, 'Los parguelas', 'parguelas@iesruizgijon.com', 'default.png', 0, 0, 0, 0, 4),
(14, 'Los Kukos', 'kukos@iesruizgijon.com', 'default.png', 0, 0, 0, 0, 4),
(17, 'Prueba Equipo', 'juanmanuel.ferrera-berlanga@iesruizgijon.com', 'default.png', 8, 4, 10, 6, 3),
(21, 'Las Pistolas de Fogueo', 'Alejandro.Bornes-Perez@iesruizgijon.com', 'PES United.png', 0, 0, 0, 0, 2),
(22, 'West London Blue', 'West.London-Blue@iesruizgijon.com', 'London_Blue.png', 0, 0, 0, 0, 2),
(23, 'Sevilla Triana VB', 'Sevilla.Triana-VB@iesruizgijon.com', 'Sevilla_triana.png', 0, 0, 0, 0, 2),
(24, 'FC Internazionale', 'Inter.Nazio-Nale@iesruizgijon.com', 'Internazionale.png', 0, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

DROP TABLE IF EXISTS `jugadores`;
CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `jugador_nombre` varchar(100) NOT NULL,
  `jugador_correo` varchar(150) DEFAULT NULL,
  `jugador_curso` varchar(150) DEFAULT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_liga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `jugador_nombre`, `jugador_correo`, `jugador_curso`, `id_equipo`, `id_liga`) VALUES
(1, 'Juanmi', 'juanmi2-ferrera.berlanga@iesruizgijon.com', '2 DAW', 2, 1),
(19, 'jugador jugador', 'j.j-j@iesruizgijon.com', '2 SMR', 17, 3),
(20, 'jugador2 jugador2', 'j2.j2-j2@iesruizgijon.com', '1 DAW', 17, 3),
(21, 'jugador3 jugador3', 'jugador3.3-3@iesruizgijon.com', '2 DAW', 17, 3),
(22, 'jugador4 jugador4', 'jugador4.4-4@iesruizgijon.com', '2 DAW', 17, 3),
(39, 'Castolo Da Silva', 'Castolo.Da-Silva@iesruizgijon.com', '1 DAW', 21, 2),
(40, 'NicolÃ¡s Ordaz Silva', 'Nicolas.Ordaz-Silva@iesruizgijon.com', '1 DAW', 21, 2),
(41, 'Xavier Minanda Gonzales', 'Xaviewr.Minanda-Gonzales@iesruizgijon.com', '1 DAW', 21, 2),
(42, 'Dominic Iouga Peres', 'Dominic.Iouga-Peres@iesruizgijon.com', '1 DAW', 21, 2),
(43, 'Ricardo Dodo Barella', 'Ricardo.Dodo-Barella@iesruizgijon.com', '1 DAW', 21, 2),
(44, 'Jugador Prueba', 'jp.jp-jp@iesruizgijon.com', '2 DAW', 1, 1),
(45, 'Ronaldo Nazario', 'Ron.Aldo-Nazario@iesruizgijon.com', '2 Bach', 14, 4),
(46, 'Mesut Ozil', 'Mesut.Oz-il@iesruizgijon.com', '2 Bach', 14, 4),
(47, 'Petr Cech', 'Pe.tr-Cech@iesruizgijon.com', '4 ESO', 22, 2),
(48, 'Arjen Robben', 'Arjen.Rob-Ben@iesruizgijon.com', '2 ESO', 22, 2),
(49, 'Frank Lampard', 'Frank.Lam-Pard@iesruizgijon.com', '2 SMR', 22, 2),
(50, 'Didier Drogba', 'Di.Dier-Drogba@iesruizgijon.com', '2 SMR', 22, 2),
(51, 'Claude Makelele', 'Claude.Make-Lele@iesruizgijon.com', '2 DAW', 22, 2),
(52, 'Ruben Castro Martin', 'Ruben.Castro-Martin@iesruizgijon.com', '3 ESO', 23, 2),
(53, 'Toni Doblas Santana', 'Toni.Doblas-Santana@iesruizgijon.com', '1 SMR', 23, 2),
(54, 'Finidi George', 'Fini.Di-George@iesruizgijon.com', '1 DAW', 23, 2),
(55, 'BeÃ±at Etxebarria Urkiaga', 'Benat.Etxebarria-Urkiaga@iesruizgijon.com', '4 ESO', 23, 2),
(56, 'Marc Bartra Aregall', 'Marc.Bartra-Aregall@iesruizgijon.com', '1 SMR', 23, 2),
(57, 'Julio Cesar Soares', 'Julio.Cesar-Soares@iesruizgijon.com', '1 DAW', 24, 2),
(58, 'Ivan Ramiro CÃ³rdoba', 'Ivan.Ramiro-Cordoba@iesruizgijon.com', '1 DAW', 24, 2),
(59, 'Zlatan Ibrahimovic', 'Zlatan.Ibra-Himovic@iesruizgijon.com', '1 DAW', 24, 2),
(60, 'Adriano Leite Ribeiro', 'Adriano.Leite-Ribeiro@iesruizgijon.com', '2 SMR', 24, 2),
(61, 'Luis Figo', 'Luis.Filipe-Figo@iesruizgijon.com', '1 DAW', 24, 2);

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
(2, 'Liga Leyendas'),
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
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `rol`, `id_jugador`, `id_equipo`, `id_liga`) VALUES
(2, 'juanmanuel.ferrera-berlanga@iesruizgijon.com', 'juanmi', 'AdministradorGeneral', NULL, NULL, NULL),
(3, 'juanmi2-ferrera.berlanga@iesruizgijon.com', 'juanmi', 'Usuario', 1, 2, 1),
(6, 'j.j-j@iesruizgijon.com', 'eRX7u9#&A2iYX#3u', 'Usuario', 19, 17, 3),
(7, 'j2.j2-j2@iesruizgijon.com', 'sYQ3q0%@H9qLZ$3n', 'Usuario', 20, 17, 3),
(8, 'jugador3.3-3@iesruizgijon.com', 'mKP2r3@@S4rPX#7b', 'Usuario', 21, 17, 3),
(9, 'jugador4.4-4@iesruizgijon.com', 'wNQ3z9&#S5lHB&5u', 'Usuario', 22, 17, 3),
(31, 'Castolo.Da-Silva@iesruizgijon.com', 'yZI4j2$&Q0dSF$6t', 'Usuario', 39, 21, 3),
(32, 'Nicolas.Ordaz-Silva@iesruizgijon.com', 'aTJ1o5@%Q6zRH#3s', 'Usuario', 40, 21, 3),
(33, 'Xaviewr.Minanda-Gonzales@iesruizgijon.com', 'dTS9m5$&C1eIN$8y', 'Usuario', 41, 21, 3),
(34, 'Dominic.Iouga-Peres@iesruizgijon.com', 'sTY9w2%&I0zPP%6w', 'Usuario', 42, 21, 3),
(35, 'Ricardo.Dodo-Barella@iesruizgijon.com', 'sLL6k1&#E4xEB%0i', 'Usuario', 43, 21, 3),
(36, 'jp.jp-jp@iesruizgijon.com', 'qCM4h4@@F2tFH%2w', 'Usuario', 44, 1, 1),
(37, 'Ron.Aldo-Nazario@iesruizgijon.com', 'oAQ6g1$%X9lNX@6n', 'Usuario', 45, 14, 4),
(41, 'juanmanuel.berlanga-ferrera@gmail.com', 'juanmanuel', 'AdministradorLigas', NULL, NULL, NULL),
(45, 'Mesut.Oz-il@iesruizgijon.com', 'ozil', 'Usuario', 46, 14, 4),
(47, 'Pe.tr-Cech@iesruizgijon.com', 'fXF7o4%#X1jCR#1m', 'Usuario', 47, 22, 2),
(48, 'Arjen.Rob-Ben@iesruizgijon.com', 'oDI4k0&$Q9bMB&8h', 'Usuario', 48, 22, 2),
(49, 'Frank.Lam-Pard@iesruizgijon.com', 'mXZ6m3@#Q4nSR%5y', 'Usuario', 49, 22, 2),
(50, 'Di.Dier-Drogba@iesruizgijon.com', 'rAT3j7#$Z8jLK&8e', 'Usuario', 50, 22, 2),
(51, 'Claude.Make-Lele@iesruizgijon.com', 'iHP1s4@#Y2oTH%7e', 'Usuario', 51, 22, 2),
(52, 'Ruben.Castro-Martin@iesruizgijon.com', 'wTC2c6%#X5uQX&2q', 'Usuario', 52, 23, 1),
(53, 'Toni.Doblas-Santana@iesruizgijon.com', 'uBP5c2#$Q5wCT&7n', 'Usuario', 53, 23, 1),
(54, 'Fini.Di-George@iesruizgijon.com', 'aQA3w3$$L4hYI#4c', 'Usuario', 54, 23, 1),
(55, 'Benat.Etxebarria-Urkiaga@iesruizgijon.com', 'bZE2s1@#L4mHP$2c', 'Usuario', 55, 23, 1),
(56, 'Marc.Bartra-Aregall@iesruizgijon.com', 'sGN8i2&&L6mOH@2w', 'Usuario', 56, 23, 1),
(57, 'Julio.Cesar-Soares@iesruizgijon.com', 'kET6u1%%E7fPP@3a', 'Usuario', 57, 24, 2),
(58, 'Ivan.Ramiro-Cordoba@iesruizgijon.com', 'gGA5w9#@Q8aIR#5v', 'Usuario', 58, 24, 2),
(59, 'Zlatan.Ibra-Himovic@iesruizgijon.com', 'xST3r1%@Y4cTH%9f', 'Usuario', 59, 24, 2),
(60, 'Adriano.Leite-Ribeiro@iesruizgijon.com', 'lAG9b5@$M9cMP@4e', 'Usuario', 60, 24, 2),
(61, 'Luis.Filipe-Figo@iesruizgijon.com', 'oTI7r9$&G0vKE$4b', 'Usuario', 61, 24, 2);

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
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_liga` (`id_liga`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
