-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2018 a las 08:08:39
-- Versión del servidor: 10.0.10-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `battlefield_1_armas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `armas_clases`
--

CREATE TABLE `armas_clases` (
  `Arma` varchar(20) NOT NULL,
  `DMG` int(11) NOT NULL,
  `Cargador` int(11) NOT NULL,
  `Clase` varchar(20) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `armas_clases`
--

INSERT INTO `armas_clases` (`Arma`, `DMG`, `Cargador`, `Clase`, `Id`) VALUES
('Automatico', 29, 20, 'Asalto', 3),
('MG15', 27, 100, 'Apoyo', 4),
('ChauChat', 45, 30, 'Apoyo', 5),
('BAR', 51, 20, 'Apoyo', 6),
('Mondragon', 60, 10, 'Medico', 7),
('TheFinale', 65, 5, 'Medico', 8),
('CellRigotti', 58, 7, 'Medico', 9),
('LeeEnfield', 90, 5, 'Explorador', 10),
('Carcano', 95, 2, 'Explorador', 11),
('MartinyHenry', 106, 1, 'Explorador', 12),
('MP40', 25, 30, 'Asalto', 13),
('MG148', 42, 120, 'Apoyo', 14);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `armas_clases`
--
ALTER TABLE `armas_clases`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `armas_clases`
--
ALTER TABLE `armas_clases`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
