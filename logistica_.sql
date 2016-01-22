-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2016 a las 22:01:19
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
  `precio` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`Des_id`, `pais`, `lugar`, `descrip`, `precio`) VALUES
(54, 1, 'Caribe', 'kra 8 8cu', '99'),
(55, 0, '', '', '0'),
(56, 0, '', '', '0'),
(57, 2, 'CIudad Perdida', 'Aquí es posible tenerlo todo, encontrando ecosistemas únicos y vestigios arqueológicos de una de las culturas más importantes de América, además de las playas enmarcadas por una naturaleza virgen y exuberante reconocidas entre las más bellas del mundo', '99'),
(58, 2, 'dfdsf', 'fdgdfgdfg', '99'),
(59, 2, 'dfdsf', 'fdgdfgdfg', '99'),
(60, 2, 'dfgdfg', 'sdfsdfdf', '99'),
(61, 2, 'fdfsd', 'dfsdfds', '99'),
(62, 1, 'qwe', 'gdfgdfgfdg', '99'),
(63, 1, 'qwe', 'gdfgdfgfdg', '99'),
(64, 1, 'qwe', 'gdfgdfgfdg', '99'),
(65, 1, 'qwe', 'gdfgdfgfdg', '99'),
(66, 1, 'qwe', 'gdfgdfgfdg', '99'),
(67, 1, 'qwe', 'gdfgdfgfdg', '99'),
(68, 1, 'qwe', 'gdfgdfgfdg', '99'),
(69, 1, 'qwe', 'gdfgdfgfdg', '99'),
(70, 2, 'dsfdf', 'dfgdfgdf', '99'),
(71, 2, '2333', 'dfsdf', '99'),
(72, 2, 'fdfsf', 'gfhgfh', '99'),
(73, 2, 'colomiba', 'asasdasd', '99'),
(74, 1, 'sdfsdf', 'sdfsdfdf', '99'),
(75, 1, 'sdfsdf', 'sdfsdfdf', '99'),
(76, 2, 'dsfsdf', 'dsfsdfdsfsdf', '99');

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
(1, '', '', 1),
(2, '', '', 2),
(3, '', '', 3),
(4, '', '', 4),
(5, '', '', 5),
(6, '', '', 6),
(7, '1453324171', '', 20),
(8, '1453324250me encontraron.jpg', '', 21),
(9, '1453402227', '', 22),
(10, '1453402307', '', 23),
(11, '1453402412', '', 24),
(12, '1453402496', '', 25),
(13, '1453402530', '', 26),
(14, '1453402547', '', 27),
(15, '1453402568', '', 28),
(16, '1453402577', '', 29),
(17, '1453402582', '', 30),
(18, '1453402676', '', 31),
(19, '1453402695', '', 32),
(20, '1453402761', '', 33),
(21, '1453402795', '', 34),
(22, '1453403689', '', 35),
(23, '1453403752', '', 36),
(24, '1453405881', '', 37),
(25, '1453411599chat.png', '', 38),
(26, '1453411978cha1.png', '', 39),
(27, '1453475246', '', 40),
(28, '1453475371cha1.png', '', 41),
(29, '1453475447cha1.png', '', 42),
(30, '1453475521cha1.png', '', 43),
(31, '1453476964chat2.png', '', 44),
(32, '1453477197chat2.png', '', 45),
(33, '1453477340bereber-lipstick-martha-bolanos.jpg', '', 46),
(34, '1453477465Pagina_Servicios.pdf', '', 47),
(35, '1453478022carrito martha..gif', '', 48),
(36, '1453478084bereber-lipstick-martha-bolanos.jpg', '', 49),
(37, '1453478231Bereber-Foto-Web.jpg', '', 50),
(38, '1453478312', '', 51),
(39, '1453478361', '', 52),
(40, '1453478427', '', 53),
(41, '1453478675Bereber-Foto-Web.jpg', '', 54),
(42, '1453478980', '', 55),
(43, '1453479040', '', 56),
(44, '1453479537Bereber-Foto-Web.jpg', '', 57),
(45, '1453479963Bereber-Foto-Web.jpg', '', 58),
(46, '1453479974Bereber-Foto-Web.jpg', '', 59),
(47, '1453480161Bereber-Foto-Web.jpg', '', 60),
(48, '1453480297Bereber-Foto-Web.jpg', '', 61),
(49, '1453480429asdasda.png', '', 62),
(50, '1453480432asdasda.png', '', 63),
(51, '1453480432asdasda.png', '', 64),
(52, '1453480432asdasda.png', '', 65),
(53, '1453480432asdasda.png', '', 66),
(54, '1453480433asdasda.png', '', 67),
(55, '1453480433asdasda.png', '', 68),
(56, '1453480433asdasda.png', '', 69),
(57, '1453480622logo velasquez.jpg', '', 70),
(58, '1453480710carrito martha..png', '', 71),
(59, '1453480775bereber-lipstick-martha-bolanos.jpg', '', 72),
(60, '1453480908ford-pickups_0035_capa-4.jpg', '', 73),
(61, '1453480946asdasda.png', '', 74),
(62, '1453480954asdasda.png', '', 75),
(63, '1453481028Bereber-Foto-Web.jpg', '', 76);

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
(15, 'buenaventura', 'puerto nuevo', ' hermoso lugar turistico lleno de explendor', '', 54),
(16, 'buenaventura 1', 'puerto nuevo 23', ' hermoso lugar turistico lleno de explendor', '', 54),
(17, 'CIUDAD PERDIDA', '', 'El lugar comprende un complejo sistema de construcciones en piedra, caminos empedrados, escaleras y muros intercomunicados por una serie de terrazas y plataformas sobre las cuales se construyeron los centros ceremoniales de civiliza', 'imgasdasda.png', 57);

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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_cedu_` int(11) NOT NULL,
  `User_Nomb_` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `User_apelli_` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `User_Pais_` int(5) NOT NULL,
  `User_Correo_` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `User_Password_` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  MODIFY `Des_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `Foto_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `Luga_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `Pa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
