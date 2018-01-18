-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-01-2018 a las 09:37:14
-- Versión del servidor: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Battlefield_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Armas_Apoyo`
--

CREATE TABLE `Armas_Apoyo` (
  `Id` int(20) NOT NULL,
  `Arma` varchar(20) NOT NULL,
  `DMG` int(11) DEFAULT NULL,
  `Cargador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Armas_Apoyo`
--

INSERT INTO `Armas_Apoyo` (`Id`, `Arma`, `DMG`, `Cargador`) VALUES
(1, 'Lewis', 26, 31),
(2, 'BAR', 32, 20),
(3, 'Chau-Chat', 20, 55),
(4, 'Bernet', 26, 31),
(5, 'Browning', 23, 31),
(6, 'Mercie', 24, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Armas_Asalto`
--

CREATE TABLE `Armas_Asalto` (
  `Id` int(20) NOT NULL,
  `Arma` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `DMG` int(11) DEFAULT NULL,
  `Cargador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Armas_Asalto`
--

INSERT INTO `Armas_Asalto` (`Id`, `Arma`, `DMG`, `Cargador`) VALUES
(1, 'MP18', 16, 40),
(2, 'Hellrieger', 51, 89),
(3, 'Automatico', 80, 5),
(4, 'Double Barrel', 80, 5),
(5, 'Barrel', 5, 5),
(6, 'MP50', 200, 25),
(7, 'Shovel', 20, 100),
(8, 'Barnet', 25, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Armas_Explorador`
--

CREATE TABLE `Armas_Explorador` (
  `Id` int(20) NOT NULL,
  `Arma` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `DMG` int(11) DEFAULT NULL,
  `Cargador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Armas_Explorador`
--

INSERT INTO `Armas_Explorador` (`Id`, `Arma`, `DMG`, `Cargador`) VALUES
(1, 'Gewer', 90, 5),
(2, 'Martiny', 96, 5),
(3, 'Carcano', 100, 1),
(4, 'Russian', 91, 10),
(5, 'Leeenfield', 87, 5),
(6, 'Russian corta', 80, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Armas_Medico`
--

CREATE TABLE `Armas_Medico` (
  `Id` int(20) NOT NULL,
  `Arma` varchar(20) NOT NULL,
  `DMG` int(11) DEFAULT NULL,
  `Cargador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Armas_Medico`
--

INSERT INTO `Armas_Medico` (`Id`, `Arma`, `DMG`, `Cargador`) VALUES
(1, 'Carci', 25, 51),
(3, 'Fedorov', 40, 10),
(4, 'Mondragon', 26, 18),
(5, 'Karskin', 42, 10),
(6, 'Mosin nagant', 45, 5),
(7, 'Gewer20', 20, 10),
(8, 'Automat', 100, 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Armas_Apoyo`
--
ALTER TABLE `Armas_Apoyo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Armas_Asalto`
--
ALTER TABLE `Armas_Asalto`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Armas_Explorador`
--
ALTER TABLE `Armas_Explorador`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Armas_Medico`
--
ALTER TABLE `Armas_Medico`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Armas_Apoyo`
--
ALTER TABLE `Armas_Apoyo`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `Armas_Asalto`
--
ALTER TABLE `Armas_Asalto`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `Armas_Explorador`
--
ALTER TABLE `Armas_Explorador`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `Armas_Medico`
--
ALTER TABLE `Armas_Medico`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
