-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 07:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendedor`
--

-- --------------------------------------------------------

--
-- Table structure for table `instaladores`
--

CREATE TABLE `instaladores` (
  `id_instalador` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `estado` text NOT NULL,
  `calle` text NOT NULL,
  `numero` int(11) NOT NULL,
  `colonia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instaladores`
--

INSERT INTO `instaladores` (`id_instalador`, `usuario`, `estado`, `calle`, `numero`, `colonia`) VALUES
(4, 'hugos', 'juarez', 'calle tal', 100, 'colonia'),
(23, 'not y et baby', '', '', 0, ''),
(24, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `instalador_producto`
--

CREATE TABLE `instalador_producto` (
  `id_instalador` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `computadora` int(1) NOT NULL,
  `cajon` int(1) NOT NULL,
  `impresora` int(1) NOT NULL,
  `lector` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_producto`, `computadora`, `cajon`, `impresora`, `lector`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 1, 0),
(3, 0, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instaladores`
--
ALTER TABLE `instaladores`
  ADD PRIMARY KEY (`id_instalador`);

--
-- Indexes for table `instalador_producto`
--
ALTER TABLE `instalador_producto`
  ADD KEY `id_instalador` (`id_instalador`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instaladores`
--
ALTER TABLE `instaladores`
  MODIFY `id_instalador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `instalador_producto`
--
ALTER TABLE `instalador_producto`
  ADD CONSTRAINT `instalador_producto_ibfk_1` FOREIGN KEY (`id_instalador`) REFERENCES `instaladores` (`id_instalador`),
  ADD CONSTRAINT `instalador_producto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
