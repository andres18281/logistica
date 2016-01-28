-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2016 a las 23:06:12
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
(151, 2, 'erer', 'fhfghgfhgf', '0'),
(152, 1, 'Parque cafetero', 'Al llegar a este paraÃ­so terrenal, el mar de 7 colores, le darÃ¡ la bienvenida siendo su principal anfitriÃ³n, cuenta la leyenda que PoseidÃ³n vive en estas aguas logrando cautivar a sus visitantes con un abanico de belleza exuberante.\r\nEn esta joya del atlÃ¡ntico podrÃ¡ disfrutar de multiplex actividades acuÃ¡ticas, tours de compras y paseos a diferentes escenarios naturales.', '230000'),
(155, 1, 'ghgh', 'asddddddddddd', '45000'),
(156, 1, 'dsd', 'dsfffff', '23000'),
(159, 1, 'ertert', 'ertertert', '23000'),
(160, 0, '', '', '0'),
(161, 0, '', '', '0'),
(162, 0, '', '', '0'),
(164, 0, '', '', '0');

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
(144, '1454003240chat2.jpg', '', 152),
(147, '1453915521logostratecsa.png', '', 155),
(148, '', '', 156),
(151, '1453922369chat2.jpg', '', 159),
(152, '1453930423', '', 160),
(153, '1453930541', '', 161),
(154, '1453930574', '', 162),
(156, '1453993159', '', 164);

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
(90, 'ACUARIO JOHNNY CAY', '', 'Al llegar a este paraíso terrenal, el mar de 7 colores, le dará la bienvenida siendo su principal anfitrión, cuenta la leyenda que Poseidón vive en estas aguas logrando cautivar a sus visitantes con un abanico de belleza exuberante.\nEn esta joya del atlántico podrá disfrutar de multiplex actividades acuáticas, tours de compras y paseos a diferentes escenarios naturales.', 'florida.jpg', 152),
(91, 'LA CUEVA DE MORGAN', 'LA LEYENDA DEL PIRATA', 'La cueva de Morgan, uno de los sitios más visitado de la isla, atraídos por la leyenda del pirata más famoso del Caribe, en esta cueva, se puede visitar y conocer 5 paradas temáticas que contaran la historia de los ancestros piratas.', 'florida.jpg', 152),
(92, 'PROVIDENCIA Y SANTA ', '', 'Providencia y Santa Catalina deslumbran un arcoíris marino de siete azules, que han hecho famosas a estas islas, gracias a su origen volcánico, multiplex arrecifes y paisajes submarinos.\n \nUna de las mejores experiencias del viaje es conocer a los habitantes de esta isla. Son gente amable, sonriente, amante de la música y la gastronomía y dispuesta a compartir los secretos de la vida isleña con los turistas.', 'florida.jpg', 152),
(94, 'trytry', 'tyutyutyu', ' tyyyyyyyyyyyyyyyyyyy', '145392238311105846_829945847084806_615250059_o.jpg', 159),
(96, '', '', ' ', '', 152);

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
(1144, 'andres', 'giraldo', 1, 'andres18281@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'qwqwsa123423@!'),
(324234, 'joselito', 'alvares', 1, 'joselito@velasquez.com', '12345', 'asdqweasd5654184'),
(2347656, 'carlos', 'Vasquez', 1, 'andres@hotmail.com', '12212', 'asdqweasd5654184');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `Des_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `Foto_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `Luga_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
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
