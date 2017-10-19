-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2017 a las 10:05:33
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spalopia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extra`
--

CREATE TABLE `extra` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf32_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `extra`
--

INSERT INTO `extra` (`id`, `nombre`, `descripcion`) VALUES
(1, 'desayuno', 'desayuno a elegir'),
(2, 'almuerzo', 'almuerzo a legir'),
(3, 'cena', 'cena a alegir');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extra_habitacion`
--

CREATE TABLE `extra_habitacion` (
  `id_habitacion` int(11) NOT NULL,
  `id_extra` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `pvp` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `extra_habitacion`
--

INSERT INTO `extra_habitacion` (`id_habitacion`, `id_extra`, `id_hotel`, `pvp`) VALUES
(1, 1, 1, 0.00),
(1, 2, 1, 10.00),
(1, 3, 1, 15.00),
(2, 1, 1, 0.00),
(2, 2, 1, 10.00),
(2, 3, 1, 15.00),
(3, 1, 1, 0.00),
(3, 2, 1, 15.00),
(3, 3, 1, 15.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf32_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf32_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Simple', 'habitacion con una cama '),
(2, 'Doble', 'Habitacion con dos camas'),
(3, 'suite', 'habitacion de lujo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf32_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf32_spanish_ci DEFAULT NULL,
  `tlfno` int(9) NOT NULL,
  `fax` int(9) DEFAULT NULL,
  `direccion` varchar(30) COLLATE utf32_spanish_ci NOT NULL,
  `latitud` float(10,6) DEFAULT NULL,
  `longitud` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`id`, `nombre`, `descripcion`, `tlfno`, `fax`, `direccion`, `latitud`, `longitud`) VALUES
(1, 'aguamarina', 'Habitaciones y suites informales ', 922563562, 922566351, 'Calle Acuamarina 710', 40.712784, -74.005943),
(2, 'maritim', 'Elegantes habitaciones en un resort con jardín', 922563152, 922564136, 'Camino El Burgado, s/n', 28.401985, -16.568474),
(3, 'casablanca', 'Apartamentos amplios con piscina exterior', 922564896, 922564897, 'Calz. Martianez, 4', 28.413956, -16.543060);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel_habitacion`
--

CREATE TABLE `hotel_habitacion` (
  `id_hotel` int(11) NOT NULL,
  `id_habitacion` int(11) NOT NULL,
  `pvp_habitacion` float(5,2) NOT NULL,
  `capacidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `hotel_habitacion`
--

INSERT INTO `hotel_habitacion` (`id_hotel`, `id_habitacion`, `pvp_habitacion`, `capacidad`) VALUES
(1, 1, 85.00, 2),
(1, 2, 150.00, 4),
(1, 3, 250.00, 2),
(2, 1, 35.00, 2),
(2, 2, 65.00, 4),
(3, 1, 35.00, 2),
(3, 2, 55.00, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `extra_habitacion`
--
ALTER TABLE `extra_habitacion`
  ADD PRIMARY KEY (`id_habitacion`,`id_extra`,`id_hotel`),
  ADD KEY `id_habitacion` (`id_habitacion`),
  ADD KEY `id_habitacion_2` (`id_habitacion`,`id_extra`,`id_hotel`),
  ADD KEY `id_hotel` (`id_hotel`),
  ADD KEY `id_extra` (`id_extra`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hotel_habitacion`
--
ALTER TABLE `hotel_habitacion`
  ADD PRIMARY KEY (`id_hotel`,`id_habitacion`),
  ADD KEY `id_hotel` (`id_hotel`,`id_habitacion`),
  ADD KEY `id_habitacion` (`id_habitacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `extra_habitacion`
--
ALTER TABLE `extra_habitacion`
  ADD CONSTRAINT `extra_habitacion_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`),
  ADD CONSTRAINT `extra_habitacion_ibfk_2` FOREIGN KEY (`id_extra`) REFERENCES `extra` (`id`),
  ADD CONSTRAINT `extra_habitacion_ibfk_3` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id`);

--
-- Filtros para la tabla `hotel_habitacion`
--
ALTER TABLE `hotel_habitacion`
  ADD CONSTRAINT `hotel_habitacion_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`),
  ADD CONSTRAINT `hotel_habitacion_ibfk_2` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
