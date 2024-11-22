-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2024 at 03:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lala`
--

-- --------------------------------------------------------

--
-- Table structure for table `carta_porte`
--

CREATE TABLE `carta_porte` (
  `id` int(11) NOT NULL,
  `operador` varchar(100) NOT NULL,
  `placa_de_transporte` varchar(21) NOT NULL,
  `modelo` varchar(21) NOT NULL,
  `ciudad_origen` varchar(21) NOT NULL,
  `fecha_de_salida` date NOT NULL,
  `hora_de_salida_de_transporte` text NOT NULL,
  `direccion_de_destino` varchar(50) NOT NULL,
  `numero_de_contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carta_porte`
--

INSERT INTO `carta_porte` (`id`, `operador`, `placa_de_transporte`, `modelo`, `ciudad_origen`, `fecha_de_salida`, `hora_de_salida_de_transporte`, `direccion_de_destino`, `numero_de_contacto`) VALUES
(1, 'abe', 'nsas15', 'mazda', 'salama', '2024-11-21', '22:11', 'irapua 105', 12321412),
(2, 'lola', 'jajaj66', 'Versa', 'mexico', '2024-11-28', '22:00', 'acapulco', 278371283);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(21) NOT NULL,
  `password` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'abe', 'yoabe'),
(2, 'abe', 'yoabe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carta_porte`
--
ALTER TABLE `carta_porte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carta_porte`
--
ALTER TABLE `carta_porte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
