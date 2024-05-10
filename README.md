Integrantes: Figueroa, Camila (acamilafigueroa@gmail.com)
             Gimenez, Jessica (jessigimenez91.jg@gmail.com)


Temática del TPE: Autores y libros

Breve descripción de la temática
En la siguiente base de datos se mostrarán diversos autores de la literatura universal con algunas de sus obras detallando nombres, apellidos y fecha de nacimiento de estos autores; y nombre, fecha de publicación, género, precio y cantidad de hojas de cada libro mencionado.
Además se agregó una tabla con datos sobre los inicios de sesión que realizan los lectores y que servirá para diferenciar usuarios comunes de administradores.




CREATE TABLE autor (
    id int  NOT NULL,
    nombre varchar(100)  NOT NULL,
    apellido varchar(100)  NOT NULL,
    nacimiento date  NOT NULL,
    CONSTRAINT pk_autor PRIMARY KEY (id)
);

-- Table: libro
CREATE TABLE libro (
    id int  NOT NULL,
    nombre varchar(100)  NOT NULL,
    fecha_publicacion date  NOT NULL,
    genero varchar(100)  NOT NULL,
    precio double(10,2)  NOT NULL,
    cantidad_pag int  NOT NULL,
    id_autor int  NOT NULL,
    CONSTRAINT pk_libro PRIMARY KEY (id)
);

-- foreign keys
-- Reference: libro_autor (table: libro)
ALTER TABLE libro ADD CONSTRAINT libro_autor FOREIGN KEY libro_autor (id_autor)
    REFERENCES autor (id);

    -- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2024 a las 21:25:47
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
-- Estructura de tabla para la tabla `inicio_sesion`
--

CREATE TABLE `inicio_sesion` (
  `id_usuario` int(100) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `rol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inicio_sesion`
--

INSERT INTO `inicio_sesion` (`id_usuario`, `nombre`, `contraseña`, `rol`) VALUES
(1, 'camila', 'alfonso', 'administrador'),
(2, 'jessica', 'nala123', 'administrador'),
(3, 'henry', 'cavilante123', 'usuario'),
(4, 'tabare', 'cardosito444', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

