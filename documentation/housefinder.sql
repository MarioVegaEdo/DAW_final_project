-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-06-2020 a las 09:34:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `housefinder`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `idDireccion` int(11) NOT NULL,
  `codPosta` int(5) NOT NULL,
  `tipoVia` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `provincia` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `numero` int(2) NOT NULL,
  `piso` int(2) DEFAULT NULL,
  `letra` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`idDireccion`, `codPosta`, `tipoVia`, `nombre`, `municipio`, `provincia`, `numero`, `piso`, `letra`) VALUES
(1, 44, '***', '***', '***', '***', 0, 0, '**'),
(2, 28983, 'plaza', 'la sal', 'Getafe', 'Madrid', 2, 1, 'c'),
(3, 28982, 'plaza', 'el agua', 'Getafe', 'Madrid', 2, 1, 'c'),
(4, 22222, 'travesia', 'sol', 'Valladolid', 'Valladolid', 5, 5, 'b'),
(5, 28982, 'plaza', 'mercurio', 'Leganes', 'Madrid', 2, 2, 'c'),
(6, 28982, 'plaza', 'venus', 'Leganes', 'Madrid', 2, 2, 'c'),
(7, 28982, 'travesia', 'tierra', 'Valencia', 'Valencia', 23, 3, '3'),
(8, 28982, 'travesia', 'marte', 'illescas', 'Madrid', 23, 3, '3'),
(9, 28982, 'travesia', 'saturno', 'Torrejon', 'Madrid', 23, 3, '3'),
(10, 27890, 'calle', 'jupiter', 'segovia', 'segovia', 4, 1, ''),
(11, 28982, 'calle', 'urano', 'getafe', 'Madrid', 23, 1, 'so'),
(12, 28978, 'plaza', 'neptuno', 'Leganés', 'Madrid', 7, 2, 'X'),
(13, 28982, 'avenida', 'las estrellas', 'Parla', 'Madrid', 3, 6, 'a'),
(14, 28982, 'calle', 'pluton', 'Getafe', 'Madrid', 23, 1, 'so'),
(15, 28982, 'calle', 'menor', 'Parla', 'Madrid', 23, 1, 'so'),
(16, 28982, 'calle', 'mayor', 'Parla', 'Madrid', 23, 1, 's'),
(17, 28982, 'calle', 'alta', 'Parla', 'Madrid', 23, 1, 's'),
(18, 11111, 'calle', 'baja', 'Valencia', 'Valencia', 1, 1, 'v'),
(19, 28982, 'calle', 'ramon y cajal', 'Valladolid', 'Valladolid', 23, 2, 'X'),
(20, 28982, 'plaza', 'abutarda', 'Parla', 'Madrid', 23, 1, 'q'),
(21, 20982, 'travesia', 'los planetas', 'vinaroz', 'Castellon', 8, 2, 'c'),
(22, 29837, 'plaza', 'los amores', 'barcelona', 'Barcelona', 2, 7, 'c'),
(23, 23687, 'calle', 'platon', 'Getafe', 'Madrid', 2, 3, ''),
(24, 33333, 'calle', 'socrates', 'Getafe', 'Madrid', 3, 3, ''),
(25, 22222, 'calle', 'aristoteles', 'Getafe', 'Madrid', 4, 4, ''),
(26, 3, 'calle', 'asdf', 'asdf', 'asdf', 2, 5, ''),
(27, 38982, 'travesia', 'calle badajoz', 'badajoz', 'Badajoz', 28, 8, 's'),
(28, 28982, 'calle', 'asdf', 'asdf', 'sda', 23, 3, 's'),
(29, 28982, 'calle', 'nombreVia1', 'Municipio1', 'Parla', 7, 1, 'X'),
(30, 28982, 'calle', 'nombre de vía', 'Municipio1', 'Parla', 23, 1, 'X'),
(31, 28982, 'calle', 'nombre de vía', 'Leganés', 'Parla', 23, 1, 'X'),
(32, 28982, 'calle', 'nombreVia1', 'Municipio1', 'Parla', 23, 1, 's'),
(33, 28982, 'calle', 'nombre de vía', 'Municipio1', 'Parla', 7, 1, 'c'),
(34, 28982, 'calle', 'nombre de vía', 'Parla', 'provincia2', 23, 2, 'c'),
(35, 28982, 'avenida', 'valencia', 'municipio2', 'Parla', 23, 1, 'X'),
(36, 28982, 'calle', 'nombreVia1', 'Leganés', 'Parla', 7, 2, 'c'),
(37, 28982, 'calle', 'nombreVia1', 'Municipio1edit', 'Parla', 7, 1, 'c'),
(38, 28982, 'calle', 'nombreVia1', 'Municipio1', 'provincia2', 23, 1, 'X'),
(39, 28982, 'calle', 'nombre de vía', 'Municipio1', 'Parla', 23, 1, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `email` text COLLATE utf8_spanish2_ci NOT NULL,
  `telefono1` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono2` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido1` text COLLATE utf8_spanish2_ci NOT NULL,
  `apellido2` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contrasenna` text COLLATE utf8_spanish2_ci NOT NULL,
  `codigoCookie` text COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `email`, `telefono1`, `telefono2`, `apellido1`, `apellido2`, `contrasenna`, `codigoCookie`) VALUES
(2, 'Mario1', 'mario1@gmail.com', '916986138', '638857508', 'Vega', 'edo', 'abcd', NULL),
(8, 'mario', 'Mariovegaedo1@gamil.com', '916986137', '', 'vega ', 'edo', '1234', NULL),
(12, '***', '***', '***', '***', '***', '***', '***', NULL),
(18, 'patata', 'patata@gmail', '', '', 'perez', '', 'qwer', 'Q0qSIXOTpNuM8FegtV9JOcwTHmQWJRAD'),
(19, 'asdf', 'mvega@gamil.com', '', '', 'asf', '', '1234', NULL),
(20, '***', '***', '***', '***', '***', '***', '***', NULL),
(21, '***', '***', '***', '***', '***', '***', '***', '7fhRKdS2zb3PxwV1arIfrPcFFs1zu73w'),
(22, '***', '***', '***', '***', '***', '***', '***', 'lah9tq8BTPKOE9B6HX83qJ3hLJtIm5kh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `idVivienda` int(11) NOT NULL,
  `idDireccion` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `superficie` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `tipo` text COLLATE utf8_spanish2_ci NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `bannos` int(11) NOT NULL,
  `estado` text COLLATE utf8_spanish2_ci NOT NULL,
  `planta` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `caracteristicas` text COLLATE utf8_spanish2_ci NOT NULL,
  `portada` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `construida` int(4) NOT NULL,
  `operacion` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `imagenes` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`idVivienda`, `idDireccion`, `descripcion`, `superficie`, `precio`, `tipo`, `habitaciones`, `bannos`, `estado`, `planta`, `idUsuario`, `caracteristicas`, `portada`, `construida`, `operacion`, `imagenes`) VALUES
(7, 1, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 72, 0, '***', 1, 1, 'ObraNueva', '0', 2, '4', 'bano6.jpg', 0, '', '|bano6.jpg|bano7.jpg|casa2.jpg|casa3.jpg'),
(8, 1, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 80, 0, '***', 0, 0, '***', '0', 2, '***', 'q', 0, '', ''),
(9, 1, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 57, 0, '***', 0, 0, '***', '0', 2, '***', 'q', 0, '', ''),
(10, 1, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 75, 0, '***', 0, 0, '***', '***', 2, '***', '', 0, '', ''),
(11, 1, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 60, 0, '***', 0, 0, '***', '***', 2, '***', 'casa3.jpg', 0, '', ''),
(12, 1, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 100, 0, '***', 0, 0, '***', '***', 2, '***', 'bano6.jpg', 0, '', ''),
(13, 1, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 40, 0, '***', 0, 0, '***', '***', 2, '***', 'bano6.jpg', 0, '', ''),
(14, 4, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 40, 45000, 'piso', 3, 3, 'BuenEstado', 'Intermedia', 2, '/Aireacondicionado/Piscina/Jardin/CocinaEquipada', 'casa8.jpg', 1967, 'alquiler', '|bano8.jpg|hab2.jpg'),
(15, 5, 'fsdf', 54, 500, 'chalet', 5, 5, '5', '5', 2, '/Jardin', 'casa6.jpg', 1938, 'venta', '|hab2.jpg|casa9.jpg|casa10.jpg'),
(16, 5, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 52, 60000, 'chalet', 5, 5, '5', '5', 2, '', 'casa1.jpg', 1950, 'venta', '|bano2.jpg|hab2.jpg'),
(17, 1, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 90, 0, '***', 0, 0, '***', '***', 2, '***', 'casa9.jpg', 0, '', ''),
(18, 1, '***', 0, 0, '***', 0, 0, '***', '***', 2, '***', 'casa3.jpg', 2000, 'venta', '|bano3.jpg|hab3.jpg'),
(19, 1, '***', 0, 0, '***', 0, 0, '***', '***', 2, '***', 'casa9.jpg', 1990, 'venta', '|bano4.jpg|hab4.jpg'),
(20, 2, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 35, 350000, 'chalet', 1, 1, 'ObraNueva', '0', 2, '/ZComunitaria', 'casa10.jpg', 2020, 'venta', '|bano5.jpg|hab5.jpg'),
(21, 1, '***', 0, 0, '***', 0, 0, '***', '***', 2, '***', 'piso1.jpg', 1980, 'alquiler', '|bano10.jpg|hab10.jpg'),
(22, 7, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 45, 34534, 'chalet', 2, 2, 'BuenEstado', '0', 2, '/Piscina/Terraza', 'casa4.jpg', 2000, 'alquiler', '|bano6.jpg|hab6.jpg'),
(23, 10, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 56, 100000, 'piso', 1, 1, 'ObraNueva', 'Ultima', 2, '', 'piso2.jpg', 1980, 'venta', '|banno1.jpg|hab1.jpg'),
(24, 12, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 20, 22222, 'chalet', 3, 3, 'Reforma', 'Baja', 2, '', 'casa5.jpg', 1900, 'alquiler', '|bano7.jpg|hab7.jpg'),
(25, 13, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 44, 123, 'piso', 3, 3, 'BuenEstado', 'Intermedia', 2, '/Jardin/Amueblado/ZComunitaria', 'piso3.jpg', 1923, 'alquiler', '|banno10.jpg|hab10.jpg'),
(26, 16, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 21, 200000, 'piso', 1, 1, 'BuenEstado', 'Ultima', 2, '', 'piso4.jpg', 1980, 'venta', '|banno7.jpg|hab2.jpg'),
(27, 1, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 94, 0, '***', 0, 0, '***', '***', 2, '***', '56963_5e8f59e164087.jpg', 0, 'venta', ''),
(28, 18, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 65, 0, 'atico', 1, 1, 'ObraNueva', 'Ultima', 2, '', 'piso5.jpg', 1980, 'venta', '|bano1.jpg|hab1.jpg'),
(29, 1, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 80, 0, '***', 0, 0, '***', '***', 2, '***', '', 0, 'venta', ''),
(30, 20, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 45, 1234, 'chalet', 2, 1, 'BuenEstado', 'Ultima', 2, '/Aireacondicionado/Ascensor/Calefaccion/Piscina/Terraza/Trastero/Jardin/Amueblado/ZComunitaria/CocinaEquipada', 'casa2.jpg', 1990, 'alquiler', '|bano8.jpg|hab8.jpg'),
(31, 21, 'Sed est eros, lacinia eget neque nec, iaculis auctor lectus. Nulla eu sapien pharetra magna volutpat fringilla a quis lorem. Phasellus accumsan ante vitae ex facilisis mollis. Mauris scelerisque lacus eu dui sodales, sed molestie nulla porttitor. Aenean dapibus mauris vel dignissim gravida. Suspendisse potenti. Maecenas convallis convallis venenatis. Maecenas vel mauris hendrerit, fringilla arcu eget, sollicitudin quam. Ut tincidunt, turpis non maximus interdum, ipsum orci varius odio, id ultricies risus magna eu leo. Vivamus sagittis sapien eget lorem luctus, ut pharetra orci faucibus. Integer ornare erat non diam suscipit, et gravida dui volutpat. Sed dignissim, velit ac cursus faucibus, justo nibh interdum enim, id mollis nisi ex non lectus. Nullam consectetur feugiat neque, sit amet commodo erat lacinia vitae. Vestibulum ornare, lectus in tincidunt mattis, dui lorem rhoncus enim, non feugiat metus nisl in metus. Curabitur in lorem malesuada, blandit sem id, feugiat odio. Quisque consectetur libero et elit auctor maximus a id augue.', 44, 600, 'piso', 2, 1, 'BuenEstado', 'Intermedia', 2, '/Ascensor/Amueblado', 'piso6.jpg', 1965, 'alquiler', '|banno2.jpg|hab3.jpg'),
(32, 22, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id tortor in urna imperdiet luctus. Praesent placerat elit lacus. Pellentesque aliquet rhoncus ornare. Curabitur eu euismod arcu, lacinia sodales ligula. Morbi fermentum velit elementum, cursus urna a, tincidunt diam. Mauris enim nulla, tempor vel nisl blandit, hendrerit auctor dui. Phasellus leo nisi, accumsan a tristique et, blandit quis lectus. Nulla non sem ex. Donec consectetur ante sit amet maximus fringilla. Sed eu diam sit amet leo placerat pulvinar. In a commodo velit. Pellentesque gravida elit nisl, nec auctor ex efficitur id. Vivamus dapibus leo vel leo viverra, quis vulputate magna tempus. Suspendisse sed fermentum enim. Maecenas non bibendum lorem, hendrerit volutpat lorem.', 60, 600, 'chalet', 3, 2, 'BuenEstado', 'Intermedia', 2, '/Terraza/Amueblado/CocinaEquipada', 'casa7.jpg', 1950, 'alquiler', '|bano10.jpg|hab1.jpg'),
(33, 23, 'fr tuf gh ', 23, 1234, 'piso', 1, 1, 'ObraNueva', 'Ultima', 18, '/Aireacondicionado/Terraza', 'piso7.jpg', 2000, 'venta', '|hab3.jpg|hab4.jpg|hab5.jpg'),
(34, 24, 'asfsa', 34, 2334, 'casa', 3, 3, 'ObraNueva', 'Ultima', 18, '/Terraza/Jardin', 'casa1.jpg', 2343, 'venta', '|bano8.jpg|bano9.jpg|hab3.jpg|hab4.jpg'),
(35, 25, 'dfgs', 333, 3444, 'casa', 1, 1, 'ObraNueva', 'Ultima', 18, '/Jardin', 'casa2.jpg', 2000, 'venta', '|hab8.jpg|bano9.jpg|hab10.jpg'),
(36, 26, 'asdfas', 33, 22222, 'casa', 1, 1, 'ObraNueva', 'Ultima', 18, '/Terraza', 'casa9.jpg', 2000, 'venta', '|hab6.jpg|hab9.jpg'),
(37, 1, '***', 0, 0, '***', 0, 0, '***', '***', 20, '***', '67899778_392553391451212_3378355446925590967_n.jpg', 1980, 'alquiler', '|q.jpg|qq.jpg'),
(38, 1, '***', 0, 0, '***', 0, 0, '***', '***', 20, '***', '22017.jpg', 2020, 'alquiler', '|q.jpg|qq.jpg'),
(39, 1, '***', 0, 0, '***', 0, 0, '***', '***', 20, '***', '22017.jpg', 1933, 'venta', '|q.jpg|qq.jpg'),
(41, 1, '***', 0, 0, '***', 0, 0, '***', '***', 21, '***', '22017.jpg', 1900, 'venta', '|q.jpg|qq.jpg'),
(42, 1, '***', 0, 0, '***', 0, 0, '***', '***', 21, '***', '66053425_117310496244443_7982728038993979436_n.jpg', 1900, 'venta', '|75202031_p0_master1200.jpg|dcssgic-40f924e9-949b-4ee0-9bcf-6afdcf0fcb55.png'),
(43, 1, '***', 0, 0, '***', 0, 0, '***', '***', 21, '***', '22017.jpg', 1900, 'venta', '|q.jpg|qq.jpg'),
(44, 1, '***', 0, 0, '***', 0, 0, '***', '***', 21, '***', '22017.jpg', 1900, 'venta', '|q.jpg|qq.jpg'),
(45, 1, '***', 0, 0, '***', 0, 0, '***', '***', 21, '***', '22017.jpg', 1900, 'venta', '|q.jpg|qq.jpg'),
(46, 1, '***', 0, 0, '***', 0, 0, '***', '***', 21, '***', '22017.jpg', 1900, 'venta', '|q.jpg|qq.jpg'),
(47, 1, '***', 0, 0, '***', 0, 0, '***', '***', 22, '***', '71866797_p0_square1200.jpg', 2000, 'venta', '|Winter-Wonder-Neeko-by-Han-10-HD-Wallpaper-Background-Fan-Art-Artwork-League-of-Legends-lol-400x400.jpg|Winter-Wonder-Soraka-Neeko-Lulu-by-しまった-HD-Wallpaper-Background-Fan-Art-Artwork-League-of-Legends-lol-400x569.jpg'),
(48, 1, '***', 0, 0, '***', 0, 0, '***', '***', 22, '***', '1.jpg', 1900, 'venta', '|o.jpg|oo.jpg'),
(49, 1, '***', 0, 0, '***', 0, 0, '***', '***', 12, '***', 'EEzfRyRVUAAX2er.jpg', 1980, 'venta', '|q.jpg|qq.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`idDireccion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`idVivienda`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idDireccion` (`idDireccion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `idDireccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `idVivienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD CONSTRAINT `vivienda_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `vivienda_ibfk_2` FOREIGN KEY (`idDireccion`) REFERENCES `direccion` (`idDireccion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
