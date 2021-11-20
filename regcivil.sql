-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2021 a las 04:31:01
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `regcivil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta_nac`
--

CREATE TABLE `acta_nac` (
  `id` int(11) NOT NULL,
  `nombreCompleto` varchar(40) NOT NULL,
  `fechaNac` date NOT NULL,
  `nombrePadre` varchar(40) NOT NULL,
  `nombreMadre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acta_nac`
--

INSERT INTO `acta_nac` (`id`, `nombreCompleto`, `fechaNac`, `nombrePadre`, `nombreMadre`) VALUES
(2, 'Juan Aristeo Esparza', '2021-09-17', 'Julian Aristeo Malaga', 'Veronica Esparza Guerrero'),
(3, 'Jessica Carpintero Rodriguez', '2021-02-18', 'Ramon Carpintero Indigo', 'Claudia Hernandez Rodriguez'),
(4, 'Lizbeth Esparza Guerrero', '2020-09-24', 'Victor Esparza Talamantes', 'Olivia Guerrero Montreal'),
(5, 'Camila Florentino Perez', '2020-01-10', 'Roberto Florentino Alba', 'Jolie Perez Sanchez'),
(6, 'Jose Saucedo Salas', '2021-09-23', 'Hugo Saucedo Viñedo', 'Elizabeth Salas Hernandez'),
(7, 'Fernando Luna Smith', '2021-01-08', 'Felipe Luna Portillo', 'Megan Smith Fox');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta_nac`
--
ALTER TABLE `acta_nac`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta_nac`
--
ALTER TABLE `acta_nac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
