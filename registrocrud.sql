CREATE DATABASE registrocrud
USE registrocrud

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2022 a las 21:14:33
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrocrud`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `spBuscar` (IN `Id` VARCHAR(11))   BEGIN 
	Select * From tblusuarios Where IdUsuario = id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `Idusuario` int(11) NOT NULL,
  `NmbUsuario` varchar(30) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `Passwd` varchar(30) NOT NULL,
  `Tipouser` char(1) NOT NULL,
  `Estado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblusuarios`
--

INSERT INTO `tblusuarios` (`Idusuario`, `NmbUsuario`, `Login`, `Passwd`, `Tipouser`, `Estado`) VALUES
(1, 'Administrador', 'admin', '0000', '0', '1'),
(2, 'Edd', 'edd', '1234', '0', '1'),
(11, 'Usuario', 'user', '12345', '1', '2'),
(12, 'Daniel', 'daniel', '1234', '1', '1'),
(13, 'Mariana Arango', 'mae', '3312', '0', '1'),
(14, 'Anderson', 'ander', '1425', '1', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`Idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `Idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
