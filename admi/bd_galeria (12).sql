-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2019 a las 03:14:07
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
  `idl_cliente` int(11) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `tarjeta` int(40) NOT NULL,
  `cvc` varchar(50) NOT NULL,
  `fecha_vencimiento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`idl_cliente`, `correo`, `telefono`, `estado`, `cedula`, `nombre`, `apellido`, `tarjeta`, `cvc`, `fecha_vencimiento`) VALUES
(1, 'CLIENTE DE CONTADO', 0, 0, 12345678, 'CLIENTE DE CONTADO', 'CLIENTE DE CONTADO', 0, '000', '000'),
(2, 'yoel1202@hotmail.com', 87109682, 0, 604140385, 'YOEL ANDREY                   ', 'CERDAS VILLALOBOS', 0, '', ''),
(4, 'marlene170264@hotmail.com', 62007980, 0, 601730695, 'MARLENE                       ', 'CERDAS VILLALOBOS', 0, '', ''),
(5, 'byron@gmail.com', 88085665, 0, 603800355, 'BAYRON                        ', 'SIBAJA ALVARADO', 0, '', ''),
(6, 'uuyyui', 86221169, 0, 702530963, 'DIDIER                        ', 'ARIAS GOMEZ', 0, '', ''),
(7, '', 88467295, 0, 603120184, 'LEINER GERARDO ', 'TREJOS CHAVARRIA', 0, '', '');

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
(1, 'PINTO', 'ACTIVADO', 2500, NULL, '2019-04-15'),
(2, 'pescado', 'ACTIVADO', 402.25, NULL, '2019-04-17'),
(3, 'PANCAKE', 'ACTIVADO', 0, NULL, '2019-04-18'),
(4, 'ENSALADA DE FRUTAS', 'ACTIVADO', 0, NULL, '2019-04-18'),
(5, 'PUPUSA CON CAFE', 'ACTIVADO', 0, NULL, '2019-04-18'),
(6, 'TAMAL CON CAFE', 'ACTIVADO', 0, NULL, '2019-04-18'),
(7, 'DESAYUNO EJECUTIVO', 'ACTIVADO', 0, NULL, '2019-04-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_entradas`
--

CREATE TABLE `tbl_entradas` (
  `id_entrada` int(11) NOT NULL,
  `precio` double DEFAULT NULL,
  `cantidad` double DEFAULT NULL,
  `cantidad_predeterminada` double NOT NULL,
  `numero_factura` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `descripcion` longtext,
  `total` double DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `fk_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_entradas`
--

INSERT INTO `tbl_entradas` (`id_entrada`, `precio`, `cantidad`, `cantidad_predeterminada`, `numero_factura`, `fecha`, `descripcion`, `total`, `estado`, `tipo`, `fk_producto`) VALUES
(3, 100, 5, 5, '223', '2019-04-17 00:00:00', '32', NULL, '', 'REVENTA', 22),
(4, 3500, 3000, 3000, '00100002010000004919', '2019-04-17 00:00:00', 'WED', NULL, 'IDEAL', 'REVENTA', 21),
(5, 150, 20, 20, '00100002010000004919', '2019-04-17 00:00:00', 'SD\r\n', NULL, 'IDEAL', 'REVENTA', 27);

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
  `descripcion` varchar(300) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_habitaciones`
--

INSERT INTO `tbl_habitaciones` (`id_habitacion`, `numero_habitacion`, `nombre`, `estado`, `cantidad`, `descripcion`, `imagen`) VALUES
(3, 1, 'PETITE', 'ACTIVADO', 4, 'Adultos: 4 Categoria: Familiar Facilidades: Closet, Tv con cable, Picsina, Wifi gratis, Parqueo Gratuito Tamaño: 20m2 Tipo de cama: Matrimonial', 'images/img_2.jpg'),
(4, 3, 'OSA NATURA', 'ACTIVADO', 5, 'Adultos: 2 Categoria: Parejas Facilidades: Tv con cable, Picsina, Wifi gratis, Parqueo Gratuito Tamaño: 20m2 Tipo de cama: Matrimonial', 'images/img_1.jpg'),
(5, 4, 'OSA NATURA', 'ACTIVADO', 5, '', 'images/img_1.jpg'),
(6, 2, 'PETITE', 'ACTIVADO', 2, '', 'images/img_2.jpg'),
(7, 5, 'OSA NATURA', 'ACTIVADO', 4, '', '');

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
-- Estructura de tabla para la tabla `tbl_lista_orden`
--

CREATE TABLE `tbl_lista_orden` (
  `id_lista` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `fk_producto` int(11) NOT NULL,
  `fk_orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_lista_orden`
--

INSERT INTO `tbl_lista_orden` (`id_lista`, `precio`, `cantidad`, `fk_producto`, `fk_orden`) VALUES
(1, 0, 2, 4, 1),
(2, 0, 3, 1, 1),
(3, 0, 3, 3, 1),
(4, 0, 2, 2, 1),
(5, 0, 4, 7, 1),
(6, 0, 2, 8, 1),
(7, 0, 4, 6, 1),
(8, 0, 3, 10, 1),
(9, 0, 3, 9, 1),
(10, 0, 3, 11, 1),
(11, 0, 3, 12, 1),
(12, 0, 2, 15, 1),
(13, 0, 2, 14, 1),
(14, 0, 5, 16, 1),
(15, 0, 10, 17, 1);

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
(1, 'yoel', '1234', 'ACTIVADO', 'Yoel Cerdas Villalobos (604140385)', 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_orden_compra`
--

CREATE TABLE `tbl_orden_compra` (
  `id_orden` int(11) NOT NULL,
  `numero_orden` int(11) NOT NULL,
  `condicion` varchar(11) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `sub_total` double NOT NULL,
  `total` double NOT NULL,
  `iva` double NOT NULL,
  `plazo` varchar(20) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fk_provedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_orden_compra`
--

INSERT INTO `tbl_orden_compra` (`id_orden`, `numero_orden`, `condicion`, `fecha_pedido`, `fecha_entrega`, `sub_total`, `total`, `iva`, `plazo`, `fk_usuario`, `fk_provedor`) VALUES
(1, 1, 'Contado', '2019-03-26', '2019-03-26', 0, 0, 0, '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pagina`
--

CREATE TABLE `tbl_pagina` (
  `id_pagina` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  `texto` varchar(200) NOT NULL,
  `segmento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pagina`
--

INSERT INTO `tbl_pagina` (`id_pagina`, `ruta`, `texto`, `segmento`) VALUES
(1, '', ' cama', 'cama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedidos`
--

CREATE TABLE `tbl_pedidos` (
  `id_pedido` int(11) NOT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `observacion` text,
  `fecha` date DEFAULT NULL,
  `estado` varchar(15) NOT NULL,
  `fk_comida` int(11) NOT NULL,
  `fk_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pedidos`
--

INSERT INTO `tbl_pedidos` (`id_pedido`, `cantidad`, `hora`, `observacion`, `fecha`, `estado`, `fk_comida`, `fk_cliente`) VALUES
(3, '10', '8:30 AM', '9 ADULTOS Y UNA NIÑA CON TODO HABITACIÓN 4 Y 3', '2019-04-18', 'PROCESANDO', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedido_aprovados`
--

CREATE TABLE `tbl_pedido_aprovados` (
  `id_aprovado` int(11) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` double NOT NULL,
  `fecha` date NOT NULL,
  `fk_pedido` int(11) NOT NULL,
  `fk_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_precio_habitaciones`
--

CREATE TABLE `tbl_precio_habitaciones` (
  `id_precio` int(11) NOT NULL,
  `fecha_desde` date NOT NULL,
  `fecha_hasta` date NOT NULL,
  `precio` double NOT NULL,
  `adicional` double NOT NULL,
  `estado` varchar(30) NOT NULL,
  `fk_habitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_precio_habitaciones`
--

INSERT INTO `tbl_precio_habitaciones` (`id_precio`, `fecha_desde`, `fecha_hasta`, `precio`, `adicional`, `estado`, `fk_habitacion`) VALUES
(1, '2019-04-01', '2019-04-30', 18000, 6000, 'SIN DESAYUNO', 3),
(2, '2019-04-01', '2019-04-30', 18000, 6000, 'SIN DESAYUNO', 6),
(3, '2019-04-01', '2019-04-30', 22000, 6000, 'SIN DESAYUNO', 4),
(4, '2019-04-01', '2019-04-30', 22000, 6000, 'SIN DESAYUNO', 5),
(5, '2019-04-01', '2019-04-30', 22000, 6000, 'SIN DESAYUNO', 7),
(6, '2019-04-01', '2019-04-30', 26000, 8500, 'CON DESAYUNO', 4),
(7, '2019-04-01', '2019-04-30', 26000, 8500, 'CON DESAYUNO', 5),
(8, '2019-04-01', '2019-04-30', 22000, 8500, 'CON DESAYUNO', 6),
(9, '2019-04-01', '2019-04-30', 26000, 8500, 'CON DESAYUNO', 7),
(10, '2019-04-01', '2019-04-30', 22000, 8500, 'SIN DESAYUNO', 3),
(11, '2019-04-15', '2019-04-21', 30000, 10000, 'CON DESAYUNO', 3),
(12, '2019-04-15', '2019-04-21', 25000, 10000, 'SIN DESAYUNO', 3),
(13, '2019-04-15', '2019-04-21', 30000, 10000, 'CON DESAYUNO', 6),
(14, '2019-04-15', '2019-04-21', 25000, 8000, 'SIN DESAYUNO', 6),
(15, '2019-04-15', '2019-04-21', 30000, 10000, 'CON DESAYUNO', 4),
(16, '2019-04-15', '2019-04-21', 30000, 10000, 'CON DESAYUNO', 5),
(17, '2019-04-15', '2019-04-21', 30000, 10000, 'CON DESAYUNO', 7),
(18, '2019-04-15', '2019-04-21', 25000, 8000, 'SIN DESAYUNO', 4),
(19, '2019-04-15', '2019-04-21', 25000, 8000, 'SIN DESAYUNO', 5),
(20, '2019-04-15', '2019-04-21', 25000, 8000, 'SIN DESAYUNO', 7);

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
(2, 0.5, 3.75, '2019-04-17', 27, 2),
(3, 333, 388.5, '2019-04-17', 21, 2),
(4, 0.5, 10, '2019-04-17', 22, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `unidad` varchar(15) DEFAULT NULL,
  `cantidad` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`id_producto`, `codigo`, `nombre`, `estado`, `unidad`, `cantidad`) VALUES
(21, '0', 'Pescado entero', 'ACTIVADO', 'GRAMOS', 5000),
(22, 'G-002', 'CONSOME CAMARON', 'ACTIVADO', 'UNIDAD', 10),
(23, 'G-003', 'patacones', 'ACTIVADO', 'GRAMOS', 10),
(24, 'G-004', 'PAPAS', 'ACTIVADO', 'GRAMOS', 10),
(25, 'G-005', 'VERDURAS', 'ACTIVADO', 'GRAMOS', 10),
(26, 'g-006', 'FRESCO', 'ACTIVADO', 'GRAMOS', 10),
(27, 'G-007', 'PLATANO', 'ACTIVADO', 'UNIDAD', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_provedores`
--

CREATE TABLE `tbl_provedores` (
  `id_provedor` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula_juridica` int(11) NOT NULL,
  `numero_cuenta` varchar(500) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_provedores`
--

INSERT INTO `tbl_provedores` (`id_provedor`, `codigo`, `nombre`, `cedula_juridica`, `numero_cuenta`, `correo`, `telefono`) VALUES
(1, '001', 'EXTREMETECH', 1, '0', 'adonis.v@extremetechcr.com', 40014991),
(2, '002', 'Multitec Mayorista S.A', 3, 'Cuenta Colones 200-01-064-014678-8 Cc 15106420010146781 Cuenta Dólares 200-02-064-002968-0 CC 15106420020029689   BCR Cuenta Colones 001-1878357-0  Cc 15202001187835704 Cuenta Dólares 001-1986396-9 $ Cc 15202001198639691', 'multitecmayorista@hotmail.com ', 27716550);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reservaciones`
--

CREATE TABLE `tbl_reservaciones` (
  `id_reservacion` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `desayuno` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_desde` date NOT NULL,
  `fecha_hasta` date NOT NULL,
  `cantidad_personas` int(11) NOT NULL,
  `total` double NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `tbl_login_idl_login` int(11) NOT NULL,
  `tbl_habitaciones_id_habitacion` int(11) NOT NULL,
  `tbl_clientes_idl_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_reservaciones`
--

INSERT INTO `tbl_reservaciones` (`id_reservacion`, `tipo`, `desayuno`, `fecha`, `fecha_desde`, `fecha_hasta`, `cantidad_personas`, `total`, `descripcion`, `tbl_login_idl_login`, `tbl_habitaciones_id_habitacion`, `tbl_clientes_idl_cliente`) VALUES
(1, 'Llamada Local', 'CON DESAYUNO', '2019-04-20', '2019-04-20', '2019-04-24', 1, 24000, '', 1, 3, 2),
(3, 'SITIOWEB', 'SIN DESAYUNO', '2019-04-14', '2019-04-16', '2019-04-17', 1, 24000, 'ninguna', 1, 3, 4),
(4, 'SITIOWEB', 'SIN DESAYUNO', '2019-04-14', '2019-04-17', '2019-04-18', 1, 24000, 'ninguna', 1, 3, 5),
(5, 'SITIOWEB', 'SIN DESAYUNO', '2019-04-14', '2019-04-16', '2019-04-17', 1, 24000, 'ninguna', 1, 6, 5),
(6, 'SITIOWEB', 'SIN DESAYUNO', '2019-04-14', '2019-04-16', '2019-04-17', 1, 24000, 'ninguna', 1, 6, 5);

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
-- Indices de la tabla `tbl_lista_orden`
--
ALTER TABLE `tbl_lista_orden`
  ADD PRIMARY KEY (`id_lista`);

--
-- Indices de la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `tbl_orden_compra`
--
ALTER TABLE `tbl_orden_compra`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `tbl_pagina`
--
ALTER TABLE `tbl_pagina`
  ADD PRIMARY KEY (`id_pagina`);

--
-- Indices de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_tbl_pedidos_tbl_comidas1_idx` (`fk_comida`),
  ADD KEY `fk_tbl_pedidos_tbl_habitaciones1_idx` (`fk_cliente`);

--
-- Indices de la tabla `tbl_pedido_aprovados`
--
ALTER TABLE `tbl_pedido_aprovados`
  ADD PRIMARY KEY (`id_aprovado`),
  ADD KEY `fk_producto` (`fk_producto`),
  ADD KEY `fk_pedido` (`fk_pedido`);

--
-- Indices de la tabla `tbl_precio_habitaciones`
--
ALTER TABLE `tbl_precio_habitaciones`
  ADD PRIMARY KEY (`id_precio`),
  ADD KEY `on delete` (`fk_habitacion`);

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
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `tbl_provedores`
--
ALTER TABLE `tbl_provedores`
  ADD PRIMARY KEY (`id_provedor`),
  ADD UNIQUE KEY `codigo` (`codigo`);

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
  MODIFY `idl_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_comidas`
--
ALTER TABLE `tbl_comidas`
  MODIFY `id_comida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_entradas`
--
ALTER TABLE `tbl_entradas`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_habitaciones`
--
ALTER TABLE `tbl_habitaciones`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_lista_orden`
--
ALTER TABLE `tbl_lista_orden`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_orden_compra`
--
ALTER TABLE `tbl_orden_compra`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_pagina`
--
ALTER TABLE `tbl_pagina`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_pedido_aprovados`
--
ALTER TABLE `tbl_pedido_aprovados`
  MODIFY `id_aprovado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_precio_habitaciones`
--
ALTER TABLE `tbl_precio_habitaciones`
  MODIFY `id_precio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tbl_produccion`
--
ALTER TABLE `tbl_produccion`
  MODIFY `id_produccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `tbl_provedores`
--
ALTER TABLE `tbl_provedores`
  MODIFY `id_provedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_reservaciones`
--
ALTER TABLE `tbl_reservaciones`
  MODIFY `id_reservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `ONDELETE` FOREIGN KEY (`fk_cliente`) REFERENCES `tbl_clientes` (`idl_cliente`),
  ADD CONSTRAINT `fk_tbl_pedidos_tbl_comidas1` FOREIGN KEY (`fk_comida`) REFERENCES `tbl_comidas` (`id_comida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_pedido_aprovados`
--
ALTER TABLE `tbl_pedido_aprovados`
  ADD CONSTRAINT `tbl_pedido_aprovados_ibfk_1` FOREIGN KEY (`fk_producto`) REFERENCES `tbl_productos` (`id_producto`),
  ADD CONSTRAINT `tbl_pedido_aprovados_ibfk_2` FOREIGN KEY (`fk_pedido`) REFERENCES `tbl_pedidos` (`id_pedido`);

--
-- Filtros para la tabla `tbl_precio_habitaciones`
--
ALTER TABLE `tbl_precio_habitaciones`
  ADD CONSTRAINT `on delete` FOREIGN KEY (`fk_habitacion`) REFERENCES `tbl_habitaciones` (`id_habitacion`);

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
