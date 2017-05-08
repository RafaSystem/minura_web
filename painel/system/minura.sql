-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2017 às 19:37
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_nome` varchar(20) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '0',
  `categoria` int(11) NOT NULL,
  `parente` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `menus`
--

INSERT INTO `menus` (`id`, `menu_nome`, `tipo`, `categoria`, `parente`) VALUES
(1, 'Inicio', 0, 0, 0),
(2, 'Utilizadores', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '1',
  `isDeleted` int(11) NOT NULL DEFAULT '0',
  `isBanned` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `tipo`, `isDeleted`, `isBanned`, `status`) VALUES
(1, 'NuG', 'nuno123', 'nuno@minura.com', 2, 0, 0, 1),
(2, 'Joo', 'joo123', 'joo@minura.com', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `webconfig`
--

CREATE TABLE `webconfig` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) CHARACTER SET latin1 NOT NULL,
  `proprietario` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rodape` text NOT NULL,
  `manutencao` int(11) NOT NULL DEFAULT '0',
  `temaCss` varchar(20) NOT NULL DEFAULT 'default',
  `isDeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `webconfig`
--

INSERT INTO `webconfig` (`id`, `nome`, `proprietario`, `rodape`, `manutencao`, `temaCss`, `isDeleted`) VALUES
(1, 'Minura', 'Minura', 'Minura 2017', 0, 'default', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `webconfig`
--
ALTER TABLE `webconfig`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);
ALTER TABLE `webconfig` ADD FULLTEXT KEY `rodape` (`rodape`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `webconfig`
--
ALTER TABLE `webconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
