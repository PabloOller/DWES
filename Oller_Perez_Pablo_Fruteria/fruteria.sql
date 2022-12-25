-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 16-12-2022 a las 17:17:55
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fruteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruta`
--

CREATE TABLE `fruta` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `precioKg` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descatalogado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `fruta`
--

INSERT INTO `fruta` (`ID`, `nombre`, `precioKg`, `cantidad`, `descatalogado`) VALUES
(6, 'Platano', 3, 471, 0),
(7, 'Manzana', 4, 191, 0),
(9, 'Pera', 2, 300, 0),
(10, 'Higo', 5, 120, 0),
(11, 'Quandile Dingle', 6, 1, 0),
(12, 'Naranjas', 4, 290, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_compra` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ID_fruta` int(11) NOT NULL,
  `nombreFruta` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cantidadFruta` float NOT NULL,
  `precioCompra` float NOT NULL,
  `devuelto` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_compra`, `fecha`, `ID_fruta`, `nombreFruta`, `cantidadFruta`, `precioCompra`, `devuelto`) VALUES
(14, '2022-12-16', 7, 'Manzana', 45, 180, 0),
(15, '2022-12-16', 11, 'Quandile Dingle', 1, 6, 1),
(16, '2022-12-16', 11, 'Quandile Dingle', -1, -6, 1),
(17, '2022-12-16', 12, 'Naranjas', 21, 84, 0),
(18, '2022-12-16', 9, 'Pera', 42, 84, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fruta`
--
ALTER TABLE `fruta`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_compra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fruta`
--
ALTER TABLE `fruta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
