Integrantes: Figueroa, Camila (acamilafigueroa@gmail.com)
             Gimenez, Jessica (jessigimenez91.jg@gmail.com)


Temática del TPE: Autores y libros

Breve descripción de la temática
En la siguiente base de datos se mostrarán diversos autores de la literatura universal con algunas de sus obras detallando nombres, apellidos y fecha de nacimiento de estos autores; y nombre, fecha de publicación, género, precio y cantidad de hojas de cada libro mencionado.
Además se agregó una tabla con datos sobre los inicios de sesión que realizan los lectores y que servirá para diferenciar usuarios comunes de administradores.




CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `libro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `genero` varchar(100) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `cantidad_pag` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libro_autor` (`id_autor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id`);
