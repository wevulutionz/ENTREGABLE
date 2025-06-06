-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2025 a las 20:25:45
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
-- Base de datos: `gestiondb`
--

-- --------------------------------------------------------
create database gestiondb;
use gestiondb;
--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombre`, `email`, `telefono`) VALUES
(12, 'Laura Fernández', 'laurafernandez@gamil.com', '911 234 789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `idproyecto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fechainicio` datetime DEFAULT current_timestamp(),
  `idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idproyecto`, `nombre`, `descripcion`, `fechainicio`, `idcliente`) VALUES
(9, 'Rediseño Web', 'Proyecto enfocado en modernizar el sitio web institucional de la empresa de Laura, incluyendo lo que pide el cliente, optimizacion SEO y migracion a una plataforma CMS autogestionable.', '2025-05-30 00:48:46', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `username`, `password`) VALUES
(1, 'wz', '$2y$10$LBd9.X7oZp1RegIGQnhf1O0ebs6LK8o3YUPnmIQfaHZtN9a7wiRN6'),
(2, 'lol', '$2y$10$2d03jJ8ZPFAfxBfAaGgIluNusJZS901zcJqb9mGip78Q5SLwVxx6.'),
(3, 'eqwe', '$2y$10$KeRIC0CnXl527yCHc6s5uehL3sFE/QgImx3qXss/fM.sI8RTtW/N6'),
(4, 'manuel', '$2y$10$CMqNshDzwtV.huDVoRaY3Oqf5xYfdv5hgqtRNa3ee0fC6014rNyT2'),
(5, 'fabio', '$2y$10$EIAxgMxi2M9wl642gzCTL.HK9fI0v2v0xSQ4rvuCruO9/VQ0MKvIy'),
(6, 'conocido', '$2y$10$cEW2REfKcKFOlkW1g3GsT.lX9SOijW4wM28tyav4D1GUbBUvyLecO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`idproyecto`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `idproyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
