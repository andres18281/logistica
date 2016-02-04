-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2016 a las 23:14:20
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logistica_`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat_mensajes_`
--

CREATE TABLE `chat_mensajes_` (
  `Id_chat` int(11) NOT NULL,
  `Chat_origen` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Chat_destin` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Chat_msn` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Chat_read` enum('si','no') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `chat_mensajes_`
--

INSERT INTO `chat_mensajes_` (`Id_chat`, `Chat_origen`, `Chat_destin`, `Chat_msn`, `Chat_read`) VALUES
(5, 'msn@logistica.com', 'joselito@velasquez.com', 'dsfsd', 'si'),
(4, 'joselito@velasquez.com', 'msn@logistica.com', 'dfsdf', 'si'),
(6, 'joselito@velasquez.com', 'msn@logistica.com', 'Gracias', 'si'),
(7, 'msn@logistica.com', 'joselito@velasquez.com', 'kkmkm', 'si'),
(8, 'joselito@velasquez.com', 'msn@logistica.com', 'ssdsd', 'si'),
(9, 'msn@logistica.com', 'joselito@velasquez.com', 'Hola, gracias por comunicarse con nosotros', 'si'),
(10, 'msn@logistica.com', 'joselito@velasquez.com', 'si si como no', 'si'),
(11, 'andres@hotmail.com', 'msn@logistica.com', 'hola mi chunchu', 'si'),
(12, 'msn@logistica.com', 'andres@hotmail.com', 'gh', 'no'),
(13, 'joselito@velasquez.com', 'msn@logistica.com', 'jaja', 'si'),
(14, 'joselito@velasquez.com', 'msn@logistica.com', 'esto es una prueba, yo soy un cliente', 'si'),
(15, 'msn@logistica.com', 'joselito@velasquez.com', 'si vale', 'si'),
(16, 'msn@logistica.com', 'joselito@velasquez.com', 'si vale', 'si'),
(17, 'msn@logistica.com', 'joselito@velasquez.com', 'si valefdf', 'si'),
(18, 'msn@logistica.com', 'joselito@velasquez.com', 'yo soy un administrador', 'si'),
(19, 'joselito@velasquez.com', 'msn@logistica.com', 'dfdfd', 'si'),
(20, 'joselito@velasquez.com', 'msn@logistica.com', 'hola como estas', 'si'),
(21, 'msn@logistica.com', 'joselito@velasquez.com', 'bien, cuentame en que te puedo servit', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `Des_id` int(5) NOT NULL,
  `pais` int(2) NOT NULL,
  `lugar` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`Des_id`, `pais`, `lugar`, `descrip`, `precio`) VALUES
(151, 2, 'Aguas blancas', 'El agua es uno de los compuestos más abundantes de la naturaleza y cubre aproximadamente las tres cuartas partes de la superficie de la tierra. Sin embargo, en contra de lo que pudiera parecer, diversos factores limitan la disponibilidad de agua para uso humano. Mas del 97% del agua total del planeta se encuentra en los océanos y otras masas salinas, y no están disponibles para casi ningún propósito. Del 3% restante, por encima del 2% se encuentra en estado sólido, hielo, resultando prácticamente inaccesible. Por tanto, podemos terminar diciendo que para el hombre y sus actividades industriales y agrícolas, sólo resta un 0,62 % que se encuentra en lagos, ríos y agua subterráneas. La cantidad de agua disponible es ciertamente escasa, aunque mayor problema es aún su distribución irregular en el planeta.', '60000'),
(152, 1, 'Parque cafetero', 'Se conoce como ciclo hidrológico al sistema integrado de generación, circulación y distribución del agua en sus tres medios distribuidos en la atmósfera, los océanos y los continentes. Estas tres etapas, pueden constituirse según demostramos en la figura; deduciéndose que la primera constituida por la evaporación de la agua desde los océanos es el mayor aporte de humedad a la atmósfera, la segunda constituida por la devolución del agua de la atmósfera a la tierra, mediante las lluvias y la tercera constituida por la circulación del agua atreves de la tierra hasta los océanos.', '230000'),
(155, 1, 'Aguas Claras', 'De igual forma, mediante el ciclo hidrológico se realiza una serie de intercambios de humedad entre la atmósfera, la tierra y el mar, que conlleva un cambio de estado del agua en sus tres formas: liquida, sólida y gaseosa. De toda esta agua que cae en los continentes en forma de lluvia, un 25% aproximadamente regresa a los océanos por canales naturales tales como quebradas y ríos, los cuales constituyen la mayor fuente de abastecimiento para el consumo humano, industria y agricultura.', '45000'),
(156, 1, 'Parque Ecologico', 'SEDIMENTACION: Dependiendo de las características del agua cruda, encontraremos presente sólidos que van desde los materiales gruesos que sedimentan rápidamente hasta la materia suspendidas de naturaleza coloidal que viene a constituir en gran parte los elementos que producen color y turbiedad. Este material coloidal se mantiene en suspensión en virtud de su carga eléctrica negativa.', '23000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `Foto_id` int(5) NOT NULL,
  `Foto1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Foto2` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_desti` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`Foto_id`, `Foto1`, `Foto2`, `id_desti`) VALUES
(144, 'florida.jpg', '', 152),
(147, 'paisaje2.jpg', '', 155),
(148, 'paisaje3.jpg', '', 156),
(152, 'Paisaje-Natural.jpg', '', 160),
(153, 'paisaje4.jpg', '', 161),
(154, 'florida.jpg', '', 162),
(156, 'florida.jpg', '', 164);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_lugares`
--

CREATE TABLE `fotos_lugares` (
  `Fotos_id` int(11) NOT NULL,
  `Foto_nomb` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `Luga_Id` int(10) NOT NULL,
  `Luga_title` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Luga_sub_title` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Luga_descri` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_desti` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`Luga_Id`, `Luga_title`, `Luga_sub_title`, `Luga_descri`, `Foto`, `id_desti`) VALUES
(90, 'ACUARIO JOHNNY CAY', '', 'Al llegar a este paraíso terrenal, el mar de 7 colores, le dará la bienvenida siendo su principal anfitrión, cuenta la leyenda que Poseidón vive en estas aguas logrando cautivar a sus visitantes con un abanico de belleza exuberante.\nEn esta joya del atlántico podrá disfrutar de multiplex actividades acuáticas, tours de compras y paseos a diferentes escenarios naturales.', 'playa.jpg', 152),
(91, 'LA CUEVA DE MORGAN', 'LA LEYENDA DEL PIRATA', 'La cueva de Morgan, uno de los sitios más visitado de la isla, atraídos por la leyenda del pirata más famoso del Caribe, en esta cueva, se puede visitar y conocer 5 paradas temáticas que contaran la historia de los ancestros piratas.', 'paisaje3.jpg', 152),
(92, 'PROVIDENCIA Y SANTA ', '', 'Providencia y Santa Catalina deslumbran un arcoíris marino de siete azules, que han hecho famosas a estas islas, gracias a su origen volcánico, multiplex arrecifes y paisajes submarinos.\n \nUna de las mejores experiencias del viaje es conocer a los habitantes de esta isla. Son gente amable, sonriente, amante de la música y la gastronomía y dispuesta a compartir los secretos de la vida isleña con los turistas.', 'maxresdefault.jpg', 152);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `Pa_id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`Pa_id`, `Nombre`) VALUES
(1, 'Colombia'),
(2, 'Panama'),
(3, 'EEUU'),
(4, 'ESPAÑA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblreseteopass`
--

CREATE TABLE `tblreseteopass` (
  `id` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `username` varchar(15) NOT NULL,
  `token` varchar(64) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_cedu_` int(11) NOT NULL,
  `User_Nomb_` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `User_apelli_` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `User_Pais_` int(5) NOT NULL,
  `User_Correo_` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `User_Password_` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `users_tipo` enum('asdqweasd5654184','qwqwsa123423@!') COLLATE utf8_spanish_ci NOT NULL COMMENT '''asdqweasd5654184'' - usuarios , qwqwsa123423@! administrador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_cedu_`, `User_Nomb_`, `User_apelli_`, `User_Pais_`, `User_Correo_`, `User_Password_`, `users_tipo`) VALUES
(1144, 'andres', 'giraldo', 1, 'msn@logistica.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'qwqwsa123423@!'),
(324234, 'joselito', 'alvares', 1, 'joselito@velasquez.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asdqweasd5654184'),
(2347656, 'carlos', 'Vasquez', 1, 'andres@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asdqweasd5654184');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat_mensajes_`
--
ALTER TABLE `chat_mensajes_`
  ADD PRIMARY KEY (`Id_chat`);

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`Des_id`),
  ADD KEY `pais` (`pais`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`Foto_id`),
  ADD UNIQUE KEY `id_desti` (`id_desti`),
  ADD KEY `id_desti_2` (`id_desti`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`Luga_Id`),
  ADD KEY `id_desti` (`id_desti`),
  ADD KEY `id_desti_2` (`id_desti`),
  ADD KEY `id_desti_3` (`id_desti`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`Pa_id`);

--
-- Indices de la tabla `tblreseteopass`
--
ALTER TABLE `tblreseteopass`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_cedu_`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat_mensajes_`
--
ALTER TABLE `chat_mensajes_`
  MODIFY `Id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `Des_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `Foto_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `Luga_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `Pa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tblreseteopass`
--
ALTER TABLE `tblreseteopass`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
