-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2021 a las 19:07:23
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ingreso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idusuario` int(10) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `contraseña` varchar(40) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `tipodeusuario` varchar(20) DEFAULT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `cedula` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idusuario`, `usuario`, `contraseña`, `correo`, `direccion`, `tipodeusuario`, `Nombre`, `Apellido`, `Telefono`, `cedula`) VALUES
(18, 'daniel', '3d0f3b9ddcacec30c4008c5e030e6c13a478cb4f', 'danielyo1997@hotmail', 'Calle45c#5b-60', 'Administrador', 'jesus daniel', ' herrera martinez', '3013090077', 1045747576),
(20, 'jesusDHM', 'b697f00c25b835a01edb8eb85bc1e29e35ded43b', 'danielyo1997@hotmail', 'Calle45c#5b-60', 'Asesor', 'jesus daniel', 'herrera martinez', '3002481501', 1045747576);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroarriendo`
--

CREATE TABLE `registroarriendo` (
  `iddelestadoA` int(50) NOT NULL,
  `idarriendoa` int(10) NOT NULL,
  `tipoarriendo` varchar(50) DEFAULT NULL,
  `tipolistado` tinytext DEFAULT NULL,
  `precioarriendo` varchar(50) DEFAULT NULL,
  `vistaarriendo` varchar(50) DEFAULT NULL,
  `dormitorios` varchar(50) DEFAULT NULL,
  `antiguedad` varchar(50) DEFAULT NULL,
  `terrenos` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `piso` varchar(50) DEFAULT NULL,
  `longitud` varchar(50) DEFAULT NULL,
  `latitud` varchar(50) DEFAULT NULL,
  `caracteristica1` varchar(50) DEFAULT NULL,
  `caracteristica2` varchar(50) DEFAULT NULL,
  `caracteristica3` varchar(50) DEFAULT NULL,
  `caracteristica4` varchar(50) DEFAULT NULL,
  `caracteristica5` varchar(50) DEFAULT NULL,
  `cercania1` varchar(50) DEFAULT NULL,
  `cercania2` varchar(50) DEFAULT NULL,
  `cercania3` varchar(50) DEFAULT NULL,
  `cercania4` varchar(50) DEFAULT NULL,
  `cercania5` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registroarriendo`
--

INSERT INTO `registroarriendo` (`iddelestadoA`, `idarriendoa`, `tipoarriendo`, `tipolistado`, `precioarriendo`, `vistaarriendo`, `dormitorios`, `antiguedad`, `terrenos`, `ciudad`, `piso`, `longitud`, `latitud`, `caracteristica1`, `caracteristica2`, `caracteristica3`, `caracteristica4`, `caracteristica5`, `cercania1`, `cercania2`, `cercania3`, `cercania4`, `cercania5`) VALUES
(8, 20, '1', 'NO PAGO', '45000000', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', '---', '---', '---', '---', '---', '---', '---', '---', '---', '---');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroventa`
--

CREATE TABLE `registroventa` (
  `iddelestadoP` int(50) NOT NULL,
  `idarriendov` int(10) NOT NULL,
  `tipoPropiedad` varchar(50) DEFAULT NULL,
  `tipolistado` tinytext DEFAULT NULL,
  `preciopropiedad` varchar(50) DEFAULT NULL,
  `vistapropiedad` varchar(50) DEFAULT NULL,
  `dormitorios` varchar(50) DEFAULT NULL,
  `antiguedad` varchar(50) DEFAULT NULL,
  `terrenos` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `piso` varchar(50) DEFAULT NULL,
  `longitud` varchar(50) DEFAULT NULL,
  `latitud` varchar(50) DEFAULT NULL,
  `caracteristica1` varchar(50) DEFAULT NULL,
  `caracteristica2` varchar(50) DEFAULT NULL,
  `caracteristica3` varchar(50) DEFAULT NULL,
  `caracteristica4` varchar(50) DEFAULT NULL,
  `caracteristica5` varchar(50) DEFAULT NULL,
  `cercania1` varchar(50) DEFAULT NULL,
  `cercania2` varchar(50) DEFAULT NULL,
  `cercania3` varchar(50) DEFAULT NULL,
  `cercania4` varchar(50) DEFAULT NULL,
  `cercania5` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registroventa`
--

INSERT INTO `registroventa` (`iddelestadoP`, `idarriendov`, `tipoPropiedad`, `tipolistado`, `preciopropiedad`, `vistapropiedad`, `dormitorios`, `antiguedad`, `terrenos`, `ciudad`, `piso`, `longitud`, `latitud`, `caracteristica1`, `caracteristica2`, `caracteristica3`, `caracteristica4`, `caracteristica5`, `cercania1`, `cercania2`, `cercania3`, `cercania4`, `cercania5`) VALUES
(10, 18, 'Casa', 'NO PAGO', '45000000', 'Calle', '2', '4 años', '280 m2', 'Barranquilla', '2', 'E1*1*1', 'N1*1*1', '---', '---', '---', '---', '---', '---', '---', '---', '---', '---'),
(11, 18, 'Casa', 'PAGO', '30000000', '1', '1', '1', '1', '1', '1', '1', '1', '---', '---', '---', '---', '---', '---', '---', '---', '---', '---'),
(12, 20, 'Casa', 'NO PAGO', '35000000', 'Calle', '4', '5 años', '230', 'Barranquilla', '2', 'E1*1*1', 'N1*1*1', 'JARDIN', 'VISTA', 'BALCON', 'SEGURIDAD', 'PATIO', 'CENTRO COMERCIAL', 'HOSPITAL', 'POLICIA', 'CINE', 'CINE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `registroarriendo`
--
ALTER TABLE `registroarriendo`
  ADD PRIMARY KEY (`iddelestadoA`),
  ADD KEY `iddelusuario` (`idarriendoa`);

--
-- Indices de la tabla `registroventa`
--
ALTER TABLE `registroventa`
  ADD PRIMARY KEY (`iddelestadoP`),
  ADD KEY `iddelusuario` (`idarriendov`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idusuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `registroarriendo`
--
ALTER TABLE `registroarriendo`
  MODIFY `iddelestadoA` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `registroventa`
--
ALTER TABLE `registroventa`
  MODIFY `iddelestadoP` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registroarriendo`
--
ALTER TABLE `registroarriendo`
  ADD CONSTRAINT `registroarriendo_ibfk_1` FOREIGN KEY (`idarriendoa`) REFERENCES `login` (`idusuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `registroventa`
--
ALTER TABLE `registroventa`
  ADD CONSTRAINT `registroventa_ibfk_1` FOREIGN KEY (`idarriendov`) REFERENCES `login` (`idusuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
