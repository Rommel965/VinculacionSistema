-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 03:22:30
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroempresanuevo`
--

CREATE TABLE `registroempresanuevo` (
  `id` int(10) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `representante` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registroempresanuevo`
--

INSERT INTO `registroempresanuevo` (`id`, `nombre`, `representante`, `ciudad`, `estado`) VALUES
(2, 'Manuel Puch', 'Lira', 'Calkini', 'Campeche'),
(3, 'Rommel Chable', 'Lira', 'Calkini', 'Campeche'),
(5, 'Manuel Puch', 'Yaki', 'Campeche', 'Calkini'),
(6, 'Armando Paredes', 'Jose Manuel Lira Turriza', 'Campeche', 'Calkini');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registroempresanuevo`
--
ALTER TABLE `registroempresanuevo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registroempresanuevo`
--
ALTER TABLE `registroempresanuevo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
