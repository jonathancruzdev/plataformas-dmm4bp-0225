-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2025 a las 14:38:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `detalle` varchar(512) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `fecha`, `detalle`, `id_pelicula`, `id_usuario`) VALUES
(1, '2025-10-29', 'Muy buena Pelicula', 4, 1),
(2, '2025-10-29', 'Comentario de Prueba', 4, 1),
(3, '2025-10-28', 'Prueba 1', 1, 1),
(4, '2025-10-29', 'otro comentario', 4, 1),
(5, '2025-10-29', 'Prueba tres\r\n', 4, 1),
(6, '2025-10-29', 'dsdsds', 4, 1),
(7, '2025-10-29', 'Hola', 4, 1),
(8, '2025-10-29', 'genial!', 4, 1),
(9, '2025-10-29', ':D', 2, 1),
(10, '2025-10-29', 'Muy buena', 2, 1),
(11, '2025-10-29', 'dsdasd', 2, 1),
(12, '2025-10-29', 'pruebe 4', 2, 1),
(13, '2025-10-29', 'aaaaaaaaaaaaaa', 4, 1),
(14, '2025-11-12', 'Muy buena Peli 👌', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `detalle` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_genero`, `detalle`) VALUES
(1, 'Acción'),
(2, 'Aventura'),
(3, 'Ciencia Ficción'),
(4, 'Comedia'),
(5, 'Documental'),
(6, 'Drama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelicula` int(11) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `fecha` int(4) NOT NULL,
  `detalle` varchar(2048) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `titulo`, `foto`, `fecha`, `detalle`, `id_genero`) VALUES
(1, 'Spiderman', 'images/pelicula1.jpg', 2005, 'Spider-Man, traducido en ocasiones como Hombre Araña,[11]​[12]​ es un superhéroe de los cómics estadounidenses publicados por Marvel Comics. Creado por el guionista y editor Stan Lee y el artista Steve Ditko, apareció por primera vez en la antología Amazing Fantasy #15 (agosto de 1962) durante la Edad de Plata del Cómic. Considerado uno de los superhéroes más populares y de mayor éxito comercial, ha aparecido en cómics, series de televisión, películas, videojuegos, novelas y obras de teatro.[13]​\r\n\r\nSu creación se remonta a principios de la década de 1960 como respuesta al creciente interés del público adolescente en los cómics y el éxito de Los 4 Fantásticos.[14]​ Tras su primera aparición en Amazing Fantasy,[15]​ Marvel decidió producir una serie individual titulada The Amazing Spider-Man, cuyo ejemplar inicial salió a la venta en marzo de 1963.[16]​ Desde entonces se han distribuido otros varios cómics relacionados con el personaje, así como otros productos que han derivado en el establecimiento de una franquicia de medios.', 3),
(2, 'The Truman Show ', 'images/pelicula2.jpg', 2014, 'The Truman Show es unapelícula estadounidense de comedia dramática psicológica de 1998 [ 2 ] escrita y coproducida por Andrew Niccol y dirigida por Peter Weir . La película representa la historia de Truman Burbank (interpretado por Jim Carrey ), un hombre que no sabe que está viviendo toda su vida en un colosal estudio de sonido , y que está siendo filmado y transmitido como un reality show que tiene un gran número de seguidores internacionales. Todos sus amigos, familiares y miembros de su comunidad son actores pagados cuyo trabajo es mantener la ilusión y mantener a Truman inconsciente del mundo falso en el que habita. El elenco de apoyo de la película incluye a Laura Linney , Ed Harris , Noah Emmerich , Natascha McElhone , Holland Taylor , Paul Giamatti y Brian Delate.\r\n\r\nEl guion original de Niccol era más bien un thriller de ciencia ficción , ambientado en la ciudad de Nueva York. El productor Scott Rudin compró el guion y estableció la producción en Paramount Pictures . Brian De Palma iba a dirigir antes de que Weir firmara como director, lo que costó 60 millones de dólares, 20 millones menos que el presupuesto original. Niccol reescribió el guion mientras el equipo esperaba el contrato de Carrey. La mayor parte del rodaje se llevó a cabo en Seaside, Florida , una comunidad planificada ubicada en el Panhandle de Florida .', 4),
(3, 'Top Gun', 'images/top_gun.jpg', 1986, 'La Marina de los Estados Unidos ha creado una escuela de élite para pilotos con el fin de sacar una promoción de expertos en técnicas de combate. En la academia, más conocida como Top Gun, a los mejores se les entrena para ser intrépidos y fríos al mismo tiempo, capaces de no perder los nervios en situaciones extremas y de no inmutarse al romper la barrera del sonido a los mandos de un F-14. A la escuela llega el joven Maverick, famoso por su temeraria aunque brillante forma de pilotar.', 1),
(4, 'Superman', 'images/superman.jpg', 2025, 'Superman es una película estadounidense de superhéroes de 2025 basada en el personaje homónimo de DC Comics. Escrita y dirigida por James Gunn, la cinta inaugura el Universo DC (UDC) y marca un reinicio del héroe en el cine. David Corenswet interpreta a Clark Kent / Superman, acompañado por Rachel Brosnahan, Nicholas Hoult, Edi Gathegi, Anthony Carrigan, Nathan Fillion e Isabela Merced. La trama sigue al protagonista cuando enfrenta las consecuencias de su intervención en un conflicto internacional provocad', 1),
(5, 'Misión Rescate', 'images/mision-rescate.jpg', 2023, 'pelicula', 1),
(6, 'iron man', 'images/iron_man.jpg', 2025, 'un detalle de la pelicual', 1),
(9, 'Frankenstein', 'images/Frankenstein.webp', 2025, 'Un científico brillante y obsesivo, Victor Frankenstein, en su ambición por desafiar a la muerte, da vida a una criatura ensamblada con partes de cadáveres. Pese a tratarse de una proeza científica, Frankenstein considera que la criatura carece de inteligencia y la rechaza. Dolida, esta se rebela contra su creador.', 3),
(10, '', 'images/', 0, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `detalle` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `detalle`) VALUES
(1, 'admin'),
(2, 'visitante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`, `id_rol`) VALUES
(1, 'juan', 'juan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'Carlos', 'carlos@dv.edu.ar', '81dc9bdb52d04dc20036dbd8313ed055', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_pelicula` (`id_pelicula`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
