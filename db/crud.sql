-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2022 a las 00:38:51
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
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `fecha_nac` date NOT NULL,
  `sexo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `movil` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`cedula`, `nombre`, `apellido`, `edad`, `fecha_nac`, `sexo`, `email`, `movil`, `direccion`, `observaciones`, `id`) VALUES
(25655489, 'Maria', 'Sanchez', 20, '1999-01-01', 'Femenino', 'mariasanechez@gmail.com', '04162475698', 'SECTOR LA FLORIDA', 'TRAUMATOLOGIA', 35),
(26356987, 'JOSE', 'PEREZ', 25, '1994-01-01', 'Masculino', 'joseperez@gmail.com', '0246547898', 'URBANIZACION LA FLORESTA', 'CARDIOLOGIA', 36),
(9854632, 'raul', 'huraccahua', 18, '2022-11-23', 'Masculino', 'capavif299@ilusale.com', '985682368', 'av_Ga', 'nda q decir', 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sercliente`
--

CREATE TABLE `sercliente` (
  `idSerCli` int(10) NOT NULL,
  `idCliente` int(10) NOT NULL,
  `idServicio` int(10) NOT NULL,
  `fechaEntrega` date NOT NULL,
  `fechaRegistro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sercliente`
--

INSERT INTO `sercliente` (`idSerCli`, `idCliente`, `idServicio`, `fechaEntrega`, `fechaRegistro`) VALUES
(15, 36, 1, '2022-12-04', '2022-11-04'),
(32, 36, 3, '2022-12-04', '2022-11-04'),
(33, 35, 1, '2022-12-04', '2022-11-04'),
(34, 39, 1, '2022-12-04', '2022-11-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idServicio` int(10) NOT NULL,
  `nombre` text NOT NULL,
  `costo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicio`, `nombre`, `costo`) VALUES
(1, 'Farmacia', 30),
(3, 'odontologia', 20);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sercliente`
--
ALTER TABLE `sercliente`
  ADD PRIMARY KEY (`idSerCli`),
  ADD KEY `FK_idCliente` (`idCliente`),
  ADD KEY `FK_idServicio` (`idServicio`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `sercliente`
--
ALTER TABLE `sercliente`
  MODIFY `idSerCli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idServicio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sercliente`
--
ALTER TABLE `sercliente`
  ADD CONSTRAINT `FK_idCliente` FOREIGN KEY (`idCliente`) REFERENCES `estudiantes` (`id`),
  ADD CONSTRAINT `FK_idServicio` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
