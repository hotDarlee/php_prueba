g-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2024 a las 00:26:37
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
-- Base de datos: `practica_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `matricula` varchar(15) NOT NULL,
  `fechaingreso` date NOT NULL,
  `cantidadpasajeros` int(4) NOT NULL,
  `anovehiculo` year(4) NOT NULL,
  `color` varchar(15) NOT NULL,
  `tipocombustible` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `descripcion`, `matricula`, `fechaingreso`, `cantidadpasajeros`, `anovehiculo`, `color`, `tipocombustible`) VALUES
(15, 'vehiculo de viajes para gran cantidad de personas', '9887PEQ', '2024-04-26', 10, '2012', 'azul', 'Gasolina'),
(16, 'vehiculo de transporte', '0987ytr', '2024-04-20', 21, '2013', 'rojo', 'Gasolina'),
(17, 'vehiculo de viajes para gran cantidad de personas', '9090POI', '2024-04-12', 12, '0000', 'verde', 'DiÃ©sel'),
(18, 'vehiculo con ruedad oversized', '9887PEQ', '2024-04-27', 14, '2019', 'azul', 'ElÃ©ctrico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
