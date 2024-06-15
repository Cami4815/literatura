-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2024 a las 21:01:49
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `literatura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor1` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor1`, `nombre`, `apellido`, `nacimiento`) VALUES
(6, 'Paulo', 'Cohelo', '2024-06-19'),
(7, 'Jane', 'Austen', '2024-06-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `genero` varchar(100) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `cantidad_pag` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `nombre`, `fecha_publicacion`, `genero`, `precio`, `cantidad_pag`, `id_autor`) VALUES
(13, 'hola', '2024-06-19', 'holaaa', 10000.00, 2000, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario` int(200) NOT NULL,
  `name` varchar(250) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `rol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `name`, `contraseña`, `rol`) VALUES
(1, 'webadmin', '$2y$10$8vzo4FuX9BlgWOe4YwAave1CL6B7XTlNmBBBIaTtEHeCIPuSGNmGe$2y$10$/niutmarJJ2Ka14XeAyEO.qnNgjW3repNJDIXQSiOu/5HMwasZyIK', 'administrador'),
(2, 'usuario', '$2y$10$NcsvK0McCreZrk3tocWRteuPtoLQ.mR3pXSK4XcdryICuaT/l1u5u$2y$10$92c/FvK2fpkTJUJuFVP43.2FrHaCrXgOd.o4HRj1YvgvqC2tf2vZi', 'usuario'),
(3, 'admin', '$2y$10$utKQi13b2d7yAiGHS4rNbuX9GT8DSAqzlHyb3PDGiNLjx8NwAaexK$2y$10$GFz/U.IPJNci21rPw0sz3uSefMua4L0SOpCRyBLwFLKQb93ftVJQO', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor1`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `libro_autor` (`id_autor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
