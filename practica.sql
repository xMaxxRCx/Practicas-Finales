-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2023 a las 04:45:42
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `Id_L` int(11) NOT NULL,
  `NombreL` varchar(55) NOT NULL,
  `Descripcion` text NOT NULL,
  `Telefono` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Facebook` varchar(55) NOT NULL,
  `Horario` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`Id_L`, `NombreL`, `Descripcion`, `Telefono`, `Email`, `Facebook`, `Horario`) VALUES
(1, 'Museo Templo Mayor', 'Seminario 8, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, 06060 Ciudad de México, CDMX', '5540405600', 'templomayor@gob.mx', 'templomayor', 'jueves, 9:00–17:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantel`
--

CREATE TABLE `plantel` (
  `Id_Plantel` int(11) NOT NULL,
  `NombrePlantel` varchar(55) NOT NULL,
  `ClaveP` varchar(55) NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Responsable` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plantel`
--

INSERT INTO `plantel` (`Id_Plantel`, `NombrePlantel`, `ClaveP`, `Direccion`, `Telefono`, `Responsable`) VALUES
(1, 'Naucalpan1', '12371239dmad', 'Calle Miguel Negrete S/N, San Rafael Chamapa,Naucalpan de Juárez, Méx.', '5553122277', 'Director');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_Usuarios` int(11) NOT NULL,
  `Nombre` varchar(55) NOT NULL,
  `Apellidos` varchar(55) NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono` varchar(55) NOT NULL,
  `FechaN` date NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_Usuarios`, `Nombre`, `Apellidos`, `Direccion`, `Telefono`, `FechaN`, `Email`) VALUES
(1, 'felipe', 'ramirez', 'naucalpan', '55102030', '2007-06-05', 'feliramirez2020@gmail.com'),
(3, 'luis', 'carlos', 'mi casa', '1215238261', '2023-03-20', 'yo@tu.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`Id_L`);

--
-- Indices de la tabla `plantel`
--
ALTER TABLE `plantel`
  ADD PRIMARY KEY (`Id_Plantel`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_Usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `Id_L` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `plantel`
--
ALTER TABLE `plantel`
  MODIFY `Id_Plantel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
