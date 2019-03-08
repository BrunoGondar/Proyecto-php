-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2019 a las 14:45:07
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compras` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_detalle`
--

CREATE TABLE `compras_detalle` (
  `id_detalle` int(11) NOT NULL,
  `cod_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion_us`
--

CREATE TABLE `direccion_us` (
  `id_direccion_us` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cod_proveedor` int(11) DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_compras_detalle`
--

CREATE TABLE `productos_compras_detalle` (
  `id_compra_producto` int(11) NOT NULL,
  `cod_producto` int(11) DEFAULT NULL,
  `cod_compra_detalle` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedores` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_prov`
--

CREATE TABLE `telefono_prov` (
  `id_telefono_prov` int(11) NOT NULL,
  `cod_proveedor` int(11) NOT NULL,
  `telefono` char(9) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_us`
--

CREATE TABLE `telefono_us` (
  `id_telefono_us` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `telefono` char(9) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nk_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pass` char(32) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compras`),
  ADD KEY `fk_usuarios_compras` (`cod_usuario`);

--
-- Indices de la tabla `compras_detalle`
--
ALTER TABLE `compras_detalle`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `fk_compras_compra_detalle` (`cod_compra`);

--
-- Indices de la tabla `direccion_us`
--
ALTER TABLE `direccion_us`
  ADD PRIMARY KEY (`id_direccion_us`),
  ADD KEY `fk_direccion_us_usuarios` (`cod_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_proveedores_productos` (`cod_proveedor`);

--
-- Indices de la tabla `productos_compras_detalle`
--
ALTER TABLE `productos_compras_detalle`
  ADD PRIMARY KEY (`id_compra_producto`),
  ADD KEY `fk_compra_detalle_producto` (`cod_producto`),
  ADD KEY `fk_producto_compra_detalle` (`cod_compra_detalle`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedores`);

--
-- Indices de la tabla `telefono_prov`
--
ALTER TABLE `telefono_prov`
  ADD PRIMARY KEY (`id_telefono_prov`),
  ADD KEY `fk_proveedores_telefono_prov` (`cod_proveedor`);

--
-- Indices de la tabla `telefono_us`
--
ALTER TABLE `telefono_us`
  ADD PRIMARY KEY (`id_telefono_us`),
  ADD KEY `fk_telefono_us_usuarios` (`cod_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nk_usuario` (`nk_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compras` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compras_detalle`
--
ALTER TABLE `compras_detalle`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direccion_us`
--
ALTER TABLE `direccion_us`
  MODIFY `id_direccion_us` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos_compras_detalle`
--
ALTER TABLE `productos_compras_detalle`
  MODIFY `id_compra_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefono_prov`
--
ALTER TABLE `telefono_prov`
  MODIFY `id_telefono_prov` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefono_us`
--
ALTER TABLE `telefono_us`
  MODIFY `id_telefono_us` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_usuarios_compras` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `compras_detalle`
--
ALTER TABLE `compras_detalle`
  ADD CONSTRAINT `fk_compras_compra_detalle` FOREIGN KEY (`cod_compra`) REFERENCES `compras` (`id_compras`);

--
-- Filtros para la tabla `direccion_us`
--
ALTER TABLE `direccion_us`
  ADD CONSTRAINT `fk_direccion_us_usuarios` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_proveedores_productos` FOREIGN KEY (`cod_proveedor`) REFERENCES `proveedores` (`id_proveedores`);

--
-- Filtros para la tabla `productos_compras_detalle`
--
ALTER TABLE `productos_compras_detalle`
  ADD CONSTRAINT `fk_compra_detalle_producto` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `fk_producto_compra_detalle` FOREIGN KEY (`cod_compra_detalle`) REFERENCES `compras_detalle` (`id_detalle`);

--
-- Filtros para la tabla `telefono_prov`
--
ALTER TABLE `telefono_prov`
  ADD CONSTRAINT `fk_proveedores_telefono_prov` FOREIGN KEY (`cod_proveedor`) REFERENCES `proveedores` (`id_proveedores`);

--
-- Filtros para la tabla `telefono_us`
--
ALTER TABLE `telefono_us`
  ADD CONSTRAINT `fk_telefono_us_usuarios` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
