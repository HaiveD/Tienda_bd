-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 01:28:27
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ingreso`
--

CREATE TABLE `detalle_ingreso` (
  `id_detalle_ingreso` int(20) NOT NULL,
  `id_ingreso` int(20) NOT NULL,
  `id_articulo` int(20) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_detalle_venta` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `cantidad` int(250) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descuento` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_categoria`
--

INSERT INTO `tb_categoria` (`id_categoria`, `nombre`) VALUES
(1, 'gaseosa'),
(2, 'papas'),
(3, 'sopas'),
(4, 'cola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cientes`
--

CREATE TABLE `tb_cientes` (
  `tipo_documento` int(11) NOT NULL,
  `num_documento` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `direccion` int(11) NOT NULL,
  `celular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empleados`
--

CREATE TABLE `tb_empleados` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `apellidos` varchar(55) NOT NULL,
  `correo` varchar(55) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `direccion` text NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_empleados`
--

INSERT INTO `tb_empleados` (`id`, `nombre`, `apellidos`, `correo`, `celular`, `direccion`, `rol`) VALUES
(113336723, 'Antury', 'Garcia', 'antury112@gmail.com', 3116453478, 'calle 2 #34-34', 2),
(1005877292, 'Germán', 'Aguirre Martínez', 'aandres060916@gmail.com', 3163404450, 'Mz S Casa No. 4-84 Barrio La Paz', 1),
(1122236018, 'Haiver', 'Rueda', 'haibest.12345@gmail.com', 3114746847, 'Mnz M Casa#337', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ingreso`
--

CREATE TABLE `tb_ingreso` (
  `id_ingreso` int(20) NOT NULL,
  `id_proveedor` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `tipo_comprobante` varchar(20) NOT NULL,
  `serie_comprobante` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `impuestos` decimal(10,2) NOT NULL,
  `total` varchar(20) NOT NULL,
  `estados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_login`
--

CREATE TABLE `tb_login` (
  `user` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_login`
--

INSERT INTO `tb_login` (`user`, `password`, `id`) VALUES
('Andres', '071070068071077075070068073077', 1005877292);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_productos`
--

CREATE TABLE `tb_productos` (
  `id_producto` int(20) NOT NULL,
  `id_categoria` int(20) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_productos`
--

INSERT INTO `tb_productos` (`id_producto`, `id_categoria`, `codigo`, `nombre`, `precio_unitario`, `fecha`, `descripcion`) VALUES
(1, 1, '123456789', 'Coca-Cola', '2000.00', '2021-12-03', '400 ml botella');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `IdRol` int(11) NOT NULL,
  `Rol` varchar(55) NOT NULL,
  `Abrir_Caja` int(11) NOT NULL,
  `Facturar` int(11) NOT NULL,
  `Cerrar_Caja` int(11) NOT NULL,
  `Generar_ReporteV` int(11) NOT NULL,
  `Generar_Pedido` int(11) NOT NULL,
  `Asignar_PGanancia` int(11) NOT NULL,
  `Registrar_Productos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`IdRol`, `Rol`, `Abrir_Caja`, `Facturar`, `Cerrar_Caja`, `Generar_ReporteV`, `Generar_Pedido`, `Asignar_PGanancia`, `Registrar_Productos`) VALUES
(1, 'ADMIN', 1, 1, 1, 1, 1, 1, 1),
(2, 'CAJA', 1, 1, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `usuLong` varchar(250) NOT NULL,
  `pasLog` varchar(300) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuLong`, `pasLog`, `id_rol`) VALUES
(2, 'gabriela', 'hola', 2),
(3, 'yerli', 'mundo', 1),
(4, 'jean', 'gaby', 4),
(5, 'juan', 'celular', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_venta`
--

CREATE TABLE `tb_venta` (
  `id_venta` int(20) NOT NULL,
  `id_cliente` int(20) NOT NULL,
  `id` int(11) NOT NULL,
  `tipo_comprobante` varchar(20) NOT NULL,
  `serie_comprobante` varchar(10) NOT NULL,
  `numero-comprobate` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `impuestos` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  ADD PRIMARY KEY (`id_detalle_ingreso`),
  ADD KEY `id_ingreso_fk` (`id_ingreso`),
  ADD KEY `id_articulo_fk` (`id_articulo`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_detalle_venta`),
  ADD KEY `id_articulo_fk` (`id_articulo`),
  ADD KEY `id_venta_fk` (`id_venta`);

--
-- Indices de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `tb_cientes`
--
ALTER TABLE `tb_cientes`
  ADD PRIMARY KEY (`num_documento`),
  ADD KEY `num_documento_fk` (`num_documento`);

--
-- Indices de la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ingreso`
--
ALTER TABLE `tb_ingreso`
  ADD PRIMARY KEY (`id_ingreso`),
  ADD KEY `id_fk` (`id`);

--
-- Indices de la tabla `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`user`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria_fk` (`id_categoria`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `tb_venta`
--
ALTER TABLE `tb_venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_fk` (`id`) USING BTREE,
  ADD KEY `id_cliente_fk` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  MODIFY `id_detalle_ingreso` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_detalle_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_cientes`
--
ALTER TABLE `tb_cientes`
  MODIFY `num_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_ingreso`
--
ALTER TABLE `tb_ingreso`
  MODIFY `id_ingreso` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  MODIFY `id_producto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `IdRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_venta`
--
ALTER TABLE `tb_venta`
  MODIFY `id_venta` int(20) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  ADD CONSTRAINT `detalle_ingreso_ibfk_1` FOREIGN KEY (`id_ingreso`) REFERENCES `tb_ingreso` (`id_ingreso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_ingreso_ibfk_2` FOREIGN KEY (`id_articulo`) REFERENCES `tb_productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `tb_venta` (`id_venta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`id_articulo`) REFERENCES `tb_productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_ingreso`
--
ALTER TABLE `tb_ingreso`
  ADD CONSTRAINT `tb_ingreso_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `tb_login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD CONSTRAINT `tb_productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_venta`
--
ALTER TABLE `tb_venta`
  ADD CONSTRAINT `tb_venta_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_venta_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `tb_cientes` (`num_documento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
