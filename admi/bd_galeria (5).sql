-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2018 a las 23:52:01
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_galeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `idl_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comidas`
--

CREATE TABLE `tbl_comidas` (
  `id_comida` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `precio_producido` double DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_comidas`
--

INSERT INTO `tbl_comidas` (`id_comida`, `nombre`, `estado`, `total`, `precio_producido`, `fecha`) VALUES
(1, 'GALLO PINTO', 'ACTIVADO', 18, NULL, '2018-10-04'),
(7, 'OMELET', 'ACTIVADO', 0, NULL, '2018-10-04'),
(8, 'HAMBUERGUESA', 'ACTIVADO', 94.88888888888889, NULL, '2018-10-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_entradas`
--

CREATE TABLE `tbl_entradas` (
  `id_entrada` int(11) NOT NULL,
  `precio` double DEFAULT NULL,
  `cantidad` double DEFAULT NULL,
  `numero_factura` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `descripcion` longtext,
  `total` double DEFAULT NULL,
  `fk_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_entradas`
--

INSERT INTO `tbl_entradas` (`id_entrada`, `precio`, `cantidad`, `numero_factura`, `fecha`, `descripcion`, `total`, `fk_producto`) VALUES
(6, 1350, 150, '0', '2018-10-08 00:00:00', 'CAFE ESTA ABIERTO', NULL, 1),
(7, 100, 225, '0', '2018-10-08 00:00:00', '', NULL, 23),
(8, 250, 200, '0', '2018-10-08 00:00:00', '', NULL, 43),
(9, 200, 2, '0', '2018-10-08 00:00:00', '0', NULL, 44),
(10, 450, 1, '0', '2018-10-08 00:00:00', '', NULL, 27),
(11, 2500, 28, '0', '2018-10-08 00:00:00', '', NULL, 22),
(12, 1560, 1800, '0', '2018-10-08 00:00:00', '', NULL, 31),
(13, 4000, 5000, '0', '2018-10-08 00:00:00', '', NULL, 30),
(14, 200, 2, '0', '2018-10-08 00:00:00', '', NULL, 45),
(15, 2000, 500, '0', '2018-10-08 00:00:00', '', NULL, 39),
(16, 1250, 10, '0', '2018-10-08 00:00:00', '\r\n\r\n', NULL, 34),
(17, 1250, 250, '0', '2018-10-08 00:00:00', '', NULL, 12),
(19, 200, 5, '0', '2018-10-08 00:00:00', '', NULL, 8),
(20, 1500, 680, '0', '2018-10-08 00:00:00', '', NULL, 9),
(21, 300, 3, '0', '2018-10-08 00:00:00', '', NULL, 40),
(22, 300, 180, '', '2018-10-08 00:00:00', '', NULL, 50),
(23, 700, 7, '0', '2018-10-08 00:00:00', '', NULL, 48),
(24, 3200, 1500, '', '2018-10-09 00:00:00', '', NULL, 51);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_habitaciones`
--

CREATE TABLE `tbl_habitaciones` (
  `id_habitacion` int(11) NOT NULL,
  `numero_habitacion` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `precio_full` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_habitaciones`
--

INSERT INTO `tbl_habitaciones` (`id_habitacion`, `numero_habitacion`, `nombre`, `estado`, `cantidad`, `precio`, `precio_full`) VALUES
(1, 1, 'PETITE', 'Activa', 2, 16000, 18000),
(2, 2, 'PETITE', 'ACTIVA', 2, 16000, 18000),
(3, 0, 'OSA NATURA', 'ACTIVA', 4, 20000, 25000),
(4, 0, 'OSA NATURA', 'ACTIVA', 5, 20000, 25000),
(5, 0, 'OSA NATURA', 'ACTIVA', 5, 20000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventario`
--

CREATE TABLE `tbl_inventario` (
  `id_inventario` int(11) NOT NULL,
  `cantidad` double DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `observacion` text,
  `fk_usuario` int(11) NOT NULL,
  `fk_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `email`, `pass`, `estado`, `nombre`, `tipo`) VALUES
(1, 'yoel1202@hotmail.com', '1234', 'ACTIVADO', NULL, 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedidos`
--

CREATE TABLE `tbl_pedidos` (
  `id_pedido` int(11) NOT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `observacion` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `fk_comida` int(11) NOT NULL,
  `fk_habitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pedidos`
--

INSERT INTO `tbl_pedidos` (`id_pedido`, `cantidad`, `hora`, `observacion`, `fecha`, `fk_comida`, `fk_habitacion`) VALUES
(1, '2', '7:00 am', 'con todo', '2018-10-16', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedido_aprovados`
--

CREATE TABLE `tbl_pedido_aprovados` (
  `id_aprovado` int(11) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` double NOT NULL,
  `fecha` date NOT NULL,
  `fk_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_produccion`
--

CREATE TABLE `tbl_produccion` (
  `id_produccion` int(11) NOT NULL,
  `cantidad` double DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `fk_producto` int(11) NOT NULL,
  `fk_comida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_produccion`
--

INSERT INTO `tbl_produccion` (`id_produccion`, `cantidad`, `precio`, `fecha`, `fk_producto`, `fk_comida`) VALUES
(4, 60, 48, '2018-10-08', 30, 1),
(5, 60, 52, '2018-10-08', 31, 1),
(6, 1, 40, '2018-10-08', 8, 1),
(7, 1, 89.28571428571429, '2018-10-08', 22, 1),
(8, 1, 450, '2018-10-08', 27, 1),
(9, 20, 8.88888888888889, '2018-10-08', 23, 1),
(10, 40, 50, '2018-10-08', 43, 1),
(11, 1, 100, '2018-10-08', 45, 1),
(12, 1, 100, '2018-10-08', 48, 1),
(13, 2, 250, '2018-10-08', 34, 1),
(14, 0.5, 50, '2018-10-08', 40, 1),
(15, 40, 160, '2018-10-08', 39, 1),
(16, 2, 250, '2018-10-08', 34, 7),
(17, 20, 100, '2018-10-08', 12, 7),
(18, 20, 33.333333333333336, '2018-10-08', 50, 7),
(19, 20, 8.88888888888889, '2018-10-08', 23, 7),
(20, 20, 25, '2018-10-08', 43, 7),
(21, 0.5, 225, '2018-10-08', 27, 7),
(22, 40, 88.23529411764707, '2018-10-08', 9, 7),
(23, 0.3, 30, '2018-10-08', 45, 7),
(24, 11, 4.888888888888888, '2018-10-13', 23, 8),
(25, 10, 90, '2018-10-13', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `unidad` varchar(15) DEFAULT NULL,
  `cantidad` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`id_producto`, `nombre`, `estado`, `unidad`, `cantidad`) VALUES
(1, 'CAFE', 'ACTIVADO', 'GRAMOS', 11),
(2, 'TE', 'ACTIVADO', 'GRAMOS', 10),
(3, 'LECHE', 'ACTIVADO', 'LITROS', 1000),
(4, 'AZUCAR', 'ACTIVADO', 'GRAMOS', 10),
(6, 'PAN BOLILLO', 'ACTIVADO', 'GRAMOS', 12),
(8, 'PAN CUADRADO', 'ACTIVADO', 'GRAMOS', 25),
(9, 'MANTEQUILLA', 'ACTIVADO', 'GRAMOS', 10),
(10, 'MERMELADA', 'ACTIVADO', 'GRAMOS', 10),
(12, 'JAMON', 'ACTIVADO', 'UNIDAD', 0),
(13, 'QUESO', 'ACTIVADO', 'GRAMOS', 0),
(14, 'NATILLA', 'ACTIVADO', 'GRAMOS', 0),
(15, 'MIEL DE ABEJA', 'ACTIVADO', 'GRAMOS', 0),
(18, 'BISTEC DE RES', 'ACTIVADO', 'GRAMOS', 0),
(19, 'ASADO DE RES', 'ACTIVADO', 'GRAMOS', 0),
(22, 'AJO', 'ACTIVADO', 'GRAMOS', 0),
(23, 'CEBOLLA', 'ACTIVADO', 'GRAMOS', 0),
(24, 'SANDIA', 'ACTIVADO', 'GRAMOS', 0),
(25, 'PIÑA', 'ACTIVADO', 'GRAMOS', 0),
(26, 'GRANOLA', 'ACTIVADO', 'GRAMOS', 0),
(27, 'CULANTRO', 'ACTIVADO', 'GRAMOS', 0),
(29, 'FILTROS', 'ACTIVADO', 'GRAMOS', 0),
(30, 'ARROZ', 'ACTIVADO', 'GRAMOS', 0),
(31, 'FRIJOLES', 'ACTIVADO', 'GRAMOS', 0),
(32, 'SAL', 'ACTIVADO', 'GRAMOS', 0),
(33, 'HARINA', 'ACTIVADO', 'GRAMOS', 0),
(34, 'HUEVOS', 'ACTIVADO', 'UNIDAD', 0),
(35, 'ACEITE', 'ACTIVADO', 'LITROS', 0),
(36, 'FRIJOLES', 'volvo', 'GRAMOS', 0),
(37, 'CONSUME GRANDE', 'volvo', 'GRAMOS', 0),
(38, 'ARROZ', 'volvo', 'GRAMOS', 0),
(39, 'SALSA IZANO', 'volvo', 'GRAMOS', 0),
(40, 'PLATANO MADURO', 'ACTIVADO', 'UNIDAD', 0),
(41, 'CEBOLLA', 'ACTIVADO', 'GRAMOS', 0),
(42, 'BANANOS', 'ACTIVADO', 'UNIDAD', 0),
(43, 'CHILE DULCE', 'ACTIVADO', 'GRAMOS', 0),
(44, 'APIO', 'ACTIVADO', 'UNIDAD', 0),
(45, 'CONSUME SASON', 'ACTIVADO', 'UNIDAD', 0),
(46, 'CONSUME CAMARON', 'ACTIVADO', 'UNIDAD', 0),
(47, 'CONSUME GALLO PINTO', 'ACTIVADO', 'UNIDAD', 0),
(48, 'SALCHICHA', 'ACTIVADO', 'GRAMOS', 0),
(49, 'SALCHICHON', 'ACTIVADO', 'GRAMOS', 0),
(50, 'TOMATE', 'ACTIVADO', 'GRAMOS', 0),
(51, 'PECHUGA DE POLLO', 'ACTIVADO', 'GRAMOS', 0),
(52, 'SHAMPOO', 'ACTIVADO', 'GRAMOS', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reservaciones`
--

CREATE TABLE `tbl_reservaciones` (
  `id_reservacion` int(11) NOT NULL,
  `tbl_login_idl_login` int(11) NOT NULL,
  `tbl_habitaciones_id_habitacion` int(11) NOT NULL,
  `tbl_clientes_idl_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`idl_cliente`);

--
-- Indices de la tabla `tbl_comidas`
--
ALTER TABLE `tbl_comidas`
  ADD PRIMARY KEY (`id_comida`);

--
-- Indices de la tabla `tbl_entradas`
--
ALTER TABLE `tbl_entradas`
  ADD PRIMARY KEY (`id_entrada`),
  ADD KEY `fk_tbl_entradas_tbl_productos1_idx` (`fk_producto`);

--
-- Indices de la tabla `tbl_habitaciones`
--
ALTER TABLE `tbl_habitaciones`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- Indices de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `fk_tbl_inventario_tbl_login1_idx` (`fk_usuario`),
  ADD KEY `fk_tbl_inventario_tbl_productos1_idx` (`fk_producto`);

--
-- Indices de la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_tbl_pedidos_tbl_comidas1_idx` (`fk_comida`),
  ADD KEY `fk_tbl_pedidos_tbl_habitaciones1_idx` (`fk_habitacion`);

--
-- Indices de la tabla `tbl_produccion`
--
ALTER TABLE `tbl_produccion`
  ADD PRIMARY KEY (`id_produccion`),
  ADD KEY `fk_tbl_produccion_tbl_productos_idx` (`fk_producto`),
  ADD KEY `fk_tbl_produccion_tbl_comidas1_idx` (`fk_comida`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tbl_reservaciones`
--
ALTER TABLE `tbl_reservaciones`
  ADD PRIMARY KEY (`id_reservacion`),
  ADD KEY `fk_tbl_reservaciones_tbl_login1_idx` (`tbl_login_idl_login`),
  ADD KEY `fk_tbl_reservaciones_tbl_habitaciones1_idx` (`tbl_habitaciones_id_habitacion`),
  ADD KEY `fk_tbl_reservaciones_tbl_clientes1_idx` (`tbl_clientes_idl_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `idl_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_comidas`
--
ALTER TABLE `tbl_comidas`
  MODIFY `id_comida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_entradas`
--
ALTER TABLE `tbl_entradas`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tbl_habitaciones`
--
ALTER TABLE `tbl_habitaciones`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_produccion`
--
ALTER TABLE `tbl_produccion`
  MODIFY `id_produccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `tbl_reservaciones`
--
ALTER TABLE `tbl_reservaciones`
  MODIFY `id_reservacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_entradas`
--
ALTER TABLE `tbl_entradas`
  ADD CONSTRAINT `fk_tbl_entradas_tbl_productos1` FOREIGN KEY (`fk_producto`) REFERENCES `tbl_productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD CONSTRAINT `fk_tbl_inventario_tbl_login1` FOREIGN KEY (`fk_usuario`) REFERENCES `tbl_login` (`id_login`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_inventario_tbl_productos1` FOREIGN KEY (`fk_producto`) REFERENCES `tbl_productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD CONSTRAINT `fk_tbl_pedidos_tbl_comidas1` FOREIGN KEY (`fk_comida`) REFERENCES `tbl_comidas` (`id_comida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_pedidos_tbl_habitaciones1` FOREIGN KEY (`fk_habitacion`) REFERENCES `tbl_habitaciones` (`id_habitacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_produccion`
--
ALTER TABLE `tbl_produccion`
  ADD CONSTRAINT `fk_tbl_produccion_tbl_comidas1` FOREIGN KEY (`fk_comida`) REFERENCES `tbl_comidas` (`id_comida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_produccion_tbl_productos` FOREIGN KEY (`fk_producto`) REFERENCES `tbl_productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_reservaciones`
--
ALTER TABLE `tbl_reservaciones`
  ADD CONSTRAINT `fk_tbl_reservaciones_tbl_clientes1` FOREIGN KEY (`tbl_clientes_idl_cliente`) REFERENCES `tbl_clientes` (`idl_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_reservaciones_tbl_habitaciones1` FOREIGN KEY (`tbl_habitaciones_id_habitacion`) REFERENCES `tbl_habitaciones` (`id_habitacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_reservaciones_tbl_login1` FOREIGN KEY (`tbl_login_idl_login`) REFERENCES `tbl_login` (`id_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
