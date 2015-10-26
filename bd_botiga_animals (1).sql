-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2015 a las 13:55:24
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_botiga_animals`
--
CREATE DATABASE IF NOT EXISTS `bd_botiga_animals` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_botiga_animals`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_anunci`
--

CREATE TABLE IF NOT EXISTS `tbl_anunci` (
  `anu_id` int(11) NOT NULL,
  `anu_contingut` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `anu_nom` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_data` date NOT NULL,
  `anu_foto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `raca_id` int(11) NOT NULL,
  `mun_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `anu_tipus` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_anunci`
--

INSERT INTO `tbl_anunci` (`anu_id`, `anu_contingut`, `anu_nom`, `anu_data`, `anu_foto`, `raca_id`, `mun_id`, `contact_id`, `anu_tipus`) VALUES
(1, 'Perdut gos de raça beagle a la platja de El Prat de Llobregat (zona aeroport) l''11 d''octubre al matí. Respon al nom de Tacat.', 'Perdut beagle a El Prat', '2015-10-11', '23.jpg', 14, 4, 2, 0),
(2, 'Desaparegut gat amb collar i placa amb el nom de Ratlletes. És de tipus comú, ratllat de colors taronges. Rambla Badal, Barcelona.', 'Perdut gat', '2015-10-15', '15.jpg', 17, 1, 6, 0),
(7, 'Boxer de color marrón perdido. Se llama Tyson.', 'Boxer perdido', '2015-10-05', '19.jpg', 8, 2, 3, 0),
(8, 'Hámster color canela encontrado. Tiene las orejas negras.', 'Hámster encontrado', '2015-10-19', '6.jpg', 24, 2, 3, 1),
(14, 'Tejón encontrado cerca del metro', 'Tejón doméstico', '2015-10-01', '4.jpg', 25, 6, 5, 1),
(17, 'Pastor alemán encontrado con arnés negro.', 'Pastor alemán grande', '2015-10-06', '17.jpg', 9, 2, 3, 1),
(18, 'Periquito azul y blanco perdido', 'Periquito perdido', '2015-10-21', '7.jpg', 21, 13, 7, 0),
(20, 'Se me ha escapado mi cachorro de 4 meses', 'Golden perdido', '2015-10-22', '16.jpg', 10, 5, 2, 0),
(21, 'Border collie negro y blanco encontrado. Es muy bueno.', 'Border collie encontrado', '2015-10-19', '18.jpg', 12, 5, 8, 1),
(22, 'Gato persa blanco de nombre Whiskies', 'Gato perdido', '2015-10-13', '10.jpg', 15, 3, 9, 1),
(23, 'Gato marrón siamés encontrado', 'Gato encontrado', '2015-10-08', '8.jpg', 16, 3, 3, 1),
(24, 'Mi conejo Tom se ha escapado.', 'Conejo perdido', '2015-10-10', '1.jpg', 23, 1, 7, 0),
(25, 'Hurón encontrado. Tiene mal carácter', 'Hurón salvaje encontrado', '2015-10-16', '2.jpg', 22, 2, 3, 0),
(26, 'Mi pato se ha escapado. Es de color verde.', 'Pato perdido', '2015-10-22', '3.jpg', 26, 13, 2, 0),
(27, 'Se me ha escapado mi canario amarillo.', 'Canario desaparecido', '2015-10-05', '5.jpg', 20, 13, 5, 1),
(28, 'Gato abisinio muy bonito.', 'Gato encontrado', '2015-10-22', '9.jpg', 18, 10, 4, 1),
(29, 'Gato bobtail tricolor perdido. Muy miedoso.', 'Bobtail tricolor', '2015-10-23', '13.jpg', 19, 4, 3, 0),
(30, 'Perro sin raza negro encontrado', 'Perro encontrado', '2015-10-15', '20.jpg', 13, 6, 9, 1),
(32, 'Husky grande encontrado. Muy sociable.', 'Husky encontrado', '2015-10-22', '22.jpg', 11, 1, 4, 0),
(33, 'Gato común perdido. Muy bueno.', 'Gato perdido', '2015-10-04', '14.jpg', 17, 3, 7, 0),
(34, 'Gato encontrado. No es muy sociable', 'Gato exótico encontrado', '2015-10-22', '11.jpg', 19, 9, 3, 1),
(35, 'Cachorro de gato encontrado. Está muy delgado.', 'Cachorro de gato', '2015-10-22', '12.jpg', 17, 15, 2, 1),
(38, 'He perdido mi perro. No es de raza.', 'Perro perdido', '2015-10-22', '21.jpg', 13, 2, 2, 0),
(39, 'Pastor alemán perdido. Muy noble', 'Pastor perdido', '2015-10-22', '24.jpg', 9, 6, 14, 0),
(40, 'Boxer musculoso encontrado.', 'Boxer joven encontrado', '2015-10-22', '25.jpg', 8, 2, 13, 1),
(55, 'Boxer adulto perdido', 'Boxer perdido', '2015-10-23', '26.jpg', 8, 9, 9, 0),
(56, 'Cachorro husky encontrado', 'Husky perdido', '2015-10-23', '27.jpg', 11, 5, 11, 1),
(57, 'Golden joven encontrado', 'Golden encontrado', '2015-10-23', '28.jpg', 10, 7, 14, 1),
(58, 'Golden grande encontrado', 'Golden encontrado', '2015-10-23', '29.jpg', 10, 3, 12, 1),
(59, 'Beagle dominante perdido', 'Beagle perdido', '2015-10-23', '30.jpg', 14, 10, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contacte`
--

CREATE TABLE IF NOT EXISTS `tbl_contacte` (
  `contact_id` int(11) NOT NULL,
  `contact_nom` varchar(25) CHARACTER SET latin1 NOT NULL,
  `contact_telf` varchar(9) CHARACTER SET latin1 NOT NULL,
  `contact_adre` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_contacte`
--

INSERT INTO `tbl_contacte` (`contact_id`, `contact_nom`, `contact_telf`, `contact_adre`) VALUES
(1, 'Carles Martín', '934534236', ''),
(2, 'Antonio Gámez', '667542343', 'Carrer del Mig, 76 3r 1a'),
(3, 'Carlos Martínez', '654583454', ''),
(4, 'Isabel Vázquez', '698722284', ''),
(5, 'Pedro Santiesteban', '656989931', 'Avinguda Carrilet, 54 3r'),
(6, 'Sònia Gómez', '688341009', 'Gran Via de les Corts Catalanes, 12 Esc. A 3r 2a'),
(7, 'Patricia Martín', '932124654', ''),
(8, 'Mateo Hermosilla', '933333333', 'Calle falsa 123'),
(9, 'Marti', '934444444', 'Calle Falsa 345'),
(10, 'Jose Lopez Lopez', '936548752', 'Calle llobregat, 21'),
(11, 'Patricia Del Pino', '936226587', 'Calle del hierro, 51, 3, 2'),
(12, 'Maria Rodriguez Lopez', '695378594', 'Calle del cobre, 54,2,1'),
(13, 'Lucí­a Martí­nez', '666589142', 'Calle Ametller, 30,1,3'),
(14, 'Mario Mejí­as', '685124795', 'Calle Pallars, 28,3,4'),
(15, 'Raul Lopez', '622584932', 'Calle Industria,152,2,3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_municipi`
--

CREATE TABLE IF NOT EXISTS `tbl_municipi` (
  `municipi_id` int(11) NOT NULL,
  `municipi_nom` varchar(25) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_municipi`
--

INSERT INTO `tbl_municipi` (`municipi_id`, `municipi_nom`) VALUES
(1, 'Barcelona'),
(2, 'Sant Feliu de Llobregat'),
(3, 'Sant Joan d''Espí'),
(4, 'El Prat de Llobregat'),
(5, 'L''Hospitalet de Llobregat'),
(6, 'Martorell'),
(7, 'Cornellà de Llobregat'),
(8, 'Castelldefels'),
(9, 'Viladecans'),
(10, 'Begues'),
(11, 'Castellbisbal'),
(12, 'Sant Sadurní d''Anoia'),
(13, 'Rubí'),
(14, 'Sant Cugat del Vallès'),
(15, 'Sitges');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_raca`
--

CREATE TABLE IF NOT EXISTS `tbl_raca` (
  `raca_id` int(11) NOT NULL,
  `raca_nom` varchar(25) CHARACTER SET latin1 NOT NULL,
  `tipus_anim_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_raca`
--

INSERT INTO `tbl_raca` (`raca_id`, `raca_nom`, `tipus_anim_id`) VALUES
(8, 'Bóxer', 1),
(9, 'Pastor alemán', 1),
(10, 'Golden retriever', 1),
(11, 'Husky', 1),
(12, 'Border collie', 1),
(13, 'Cruce', 1),
(14, 'Beagle', 1),
(15, 'Persa', 2),
(16, 'Siamés', 2),
(17, 'Común', 2),
(18, 'Abisinio', 2),
(19, 'Bobtail', 2),
(20, 'Canario', 3),
(21, 'Periquito', 3),
(22, 'Hurón', 4),
(23, 'Conejo', 4),
(24, 'Hámster', 4),
(25, 'Tejón', 4),
(26, 'Pato', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipus_animal`
--

CREATE TABLE IF NOT EXISTS `tbl_tipus_animal` (
  `tipus_anim_id` int(11) NOT NULL,
  `tipus_anim_nom` varchar(25) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_tipus_animal`
--

INSERT INTO `tbl_tipus_animal` (`tipus_anim_id`, `tipus_anim_nom`) VALUES
(1, 'Gos'),
(2, 'Gat'),
(3, 'Ocell'),
(4, 'Altres');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  ADD PRIMARY KEY (`anu_id`),
  ADD KEY `FK_ANU_RACA` (`raca_id`),
  ADD KEY `FK_MUN_ANU` (`mun_id`),
  ADD KEY `FK_CONTACT_ANU` (`contact_id`);

--
-- Indices de la tabla `tbl_contacte`
--
ALTER TABLE `tbl_contacte`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indices de la tabla `tbl_municipi`
--
ALTER TABLE `tbl_municipi`
  ADD PRIMARY KEY (`municipi_id`);

--
-- Indices de la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  ADD PRIMARY KEY (`raca_id`),
  ADD KEY `FK_RACA_TIPUS_A` (`tipus_anim_id`);

--
-- Indices de la tabla `tbl_tipus_animal`
--
ALTER TABLE `tbl_tipus_animal`
  ADD PRIMARY KEY (`tipus_anim_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  MODIFY `anu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `tbl_contacte`
--
ALTER TABLE `tbl_contacte`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tbl_municipi`
--
ALTER TABLE `tbl_municipi`
  MODIFY `municipi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  MODIFY `raca_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `tbl_tipus_animal`
--
ALTER TABLE `tbl_tipus_animal`
  MODIFY `tipus_anim_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  ADD CONSTRAINT `RELACIO_ANU_CONTACT` FOREIGN KEY (`contact_id`) REFERENCES `tbl_contacte` (`contact_id`),
  ADD CONSTRAINT `RELACIO_ANU_MUN` FOREIGN KEY (`mun_id`) REFERENCES `tbl_municipi` (`municipi_id`),
  ADD CONSTRAINT `RELACIO_ANU_RACA` FOREIGN KEY (`raca_id`) REFERENCES `tbl_raca` (`raca_id`);

--
-- Filtros para la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  ADD CONSTRAINT `tbl_raca_ibfk_1` FOREIGN KEY (`tipus_anim_id`) REFERENCES `tbl_tipus_animal` (`tipus_anim_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
