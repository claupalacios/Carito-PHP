-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2020 a las 23:55:10
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(10) NOT NULL,
  `tipo` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(20,0) NOT NULL,
  `detalle` varchar(50) NOT NULL,
  `stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `tipo`, `imagen`, `nombre`, `precio`, `detalle`, `stock`) VALUES
(1, 1, 'https://www.edgar.com.ar/7597-large_default/boligrafo-filgo-stick-026-medium-azul.jpg', 'Boligrafo Azul', '235', 'Bolígrafo color azu', 3),
(3, 1, 'https://tiendatintatoner.com/630/boligrafo-bic-cristal-rojo.jpg', 'Boligrafo Rojo', '155', 'Bolígrafo color rojo, marca Sarasa', 0),
(4, 1, 'https://tiendatintatoner.com/629-home_default/boligrafo-bic-cristal-verde.jpg', 'Boligrafo Verde', '185', 'Bolígrafo color verde, marca Sarasa', 0),
(5, 1, 'https://www.casa-segal.com/wp-content/uploads/2019/02/boligrafo-faber-castell-trilux-media-violeta-libreria-mendoza-casa-segal.jpg', 'Boligrafo Violeta', '185', 'Bolígrafo color violeta, marca Sarasa', 0),
(6, 1, 'https://m.media-amazon.com/images/I/61CyY9HHC5L._AC_SS350_.jpg', 'Crayon Negro', '165', 'Crayon negro, marca Sarasa', 4),
(7, 1, 'https://m.media-amazon.com/images/I/51WzQGWKeKL._AC_SS350_.jpg', 'Crayon Azul', '185', 'Crayon azul, marca Sarasa', 1),
(8, 1, 'https://www.milan.es/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/0/7/0724149_01.jpg', 'Lapiz Azul', '175', 'Lápiz azul, marca Sarasa', 0),
(9, 1, 'https://www.milan.es/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/0/7/0724130_01.jpg', 'Lapiz Rojo', '165', 'Lápiz rojo, marca Sarasa', 0),
(11, 2, 'https://www.milan.es/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/0/7/0724161_01.jpg', 'Lapiz Verde', '24', 'Lápiz verde, marca Sarasa', 1),
(12, 2, 'https://d26lpennugtm8s.cloudfront.net/stores/001/196/825/products/938381-d23fee1b3337f721d315914441396367-1024-1024.jpg', 'Acrilico Azul', '24', 'Acrílico azul, apto para niños, marca AD', 1),
(13, 2, 'https://s.fenicio.app/f/pintuy/catalogo/articulos/058727080-1_460x460_1545250420_07b.jpg', 'Acrílico Rojo', '24', 'Acrílico rojo, apto', 0),
(14, 2, 'https://d26lpennugtm8s.cloudfront.net/stores/001/196/825/products/973781-b34dc0a431336c8a5115913052207122-640-0.jpg', 'Acrilico Verde', '24', 'Acrílico verde, apto para niños, marca AD', 0),
(15, 2, 'https://d26lpennugtm8s.cloudfront.net/stores/989/800/products/31713-0-35825c3c82d19eb0b415734960809644-640-0.', 'Acrilico Violeta', '24', 'Acrílico violeta, apto para niños, marca AD', 0),
(16, 2, 'https://http2.mlstatic.com/D_NQ_NP_861574-MLA42526498960_072020-O.jpg', 'Acrilico Amarillo', '24', 'Acrílico amarillo, apto para niños, marca AD', 0),
(17, 3, 'https://www.elauditor.com.ar/media/catalog/product/cache/2/image/9df78eab33525d08d6e5fb8d27136e95/1/4/14511_1.jpg', 'Cuaderno Tapa Dura', '130', 'Cuaderno tapa dura, marca Rivadavia.', 0),
(18, 3, 'https://http2.mlstatic.com/cuaderno-rivadavia-24-hojas-liso-tapa-blanda-excelente-D_NQ_NP_637422-MLA32460006582_102019-Q.jpg', 'Cuadernillo', '130', 'Cuadernillo tapa blanda, marca Rivadavia.', 0),
(19, 3, 'https://alotar.vteximg.com.br/arquivos/ids/166952-1000-1000/CUESSA4RR_2.jpg?v=637405444466830000', 'Cuaderno Rayado', '160', 'Cuaderno rallado A4 marca Sarasa', 0),
(20, 4, 'https://www.planetoffice.com.ar/images_prg/abrochadoras/mit/00001090-1373048896_std.jpg', 'Abrochadora', '110', 'Abrochadora marca MIT 64', 0),
(21, 4, 'https://www.n1express.com.ar/images/70405.jpg', 'Regla', '110', 'Regla de 20cm marca Maped.', 0),
(22, 4, 'https://d26lpennugtm8s.cloudfront.net/stores/001/261/715/products/final-dessck-satbilo1-795ba1f434918b571715957694512347-1024-1024.jpg', 'Resaltador', '130', 'Resaltadores Estabilo múltiples colores', 0),
(23, 4, 'https://http2.mlstatic.com/D_NQ_NP_629195-MLA30518528586_052019-V.jpg', 'Sobre', '130', 'Sobre de papel color blanco', 3),
(24, 3, 'https://d26lpennugtm8s.cloudfront.net/stores/601/518/products/721940-mla25717662270_062017-o-391e0d5fb79367aa4615393772286132-640-0.jpg', 'Notas', '2', 'Post-it para pegar notas marca Post-it', 10),
(25, 1, 'https://libreriakoky.com/wp-content/uploads/2019/07/lapicera_bic_celeste.jpg', 'Lapicera Celeste', '180', 'Lapicera color celeste, marca Sarasa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `tipo` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`tipo`, `descripcion`) VALUES
(1, 'Escritura'),
(2, 'Artistica'),
(3, 'Escolar'),
(4, 'Oficina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `id_pedido` int(10) NOT NULL,
  `id_articulo` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `contrasena` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellido`, `dni`, `localidad`, `mail`, `telefono`, `contrasena`) VALUES
(1, 'jennifer', 'zorat', '36589621', 'Ramos Mejia', 'jenniferzorat@gmail.com', '112458785', 'jenny123'),
(2, 'juan ', 'puente', '29635214', 'Merlo', 'juanpuente@gmail.com', '1145875412', 'juan222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `despachado` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id_sucursal` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id_sucursal`, `imagen`, `nombre`, `direccion`, `telefono`) VALUES
(1, 'https://bucket2.glanacion.com/Club.LN/anexos/fotos/25/B771325w500.jpeg', 'Sucursal Buenos Aires', 'Peribebuy 2063', 1133929442),
(3, 'https://bucket2.glanacion.com/Club.LN/anexos/fotos/24/B771324w500.jpeg', 'Sucursal Entre Rios', 'Lil Xan 2042', 45223232);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`tipo`);

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`id_pedido`,`id_articulo`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
