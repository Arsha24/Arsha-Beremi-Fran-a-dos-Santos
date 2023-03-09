-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Mar-2023 às 11:58
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `anime`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `opiniao`
--

CREATE TABLE `opiniao` (
  `id_vilao` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `nota` varchar(25) NOT NULL,
  `opiniao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `protagonista`
--

CREATE TABLE `protagonista` (
  `id_prota` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `prota` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `protagonista`
--

INSERT INTO `protagonista` (`id_prota`, `nome`, `prota`) VALUES
(1, 'Gojo', NULL),
(2, 'Yuta', NULL),
(3, 'Yuji', NULL),
(4, 'Megumi', NULL),
(1, 'Gojo', NULL),
(2, 'Yuta', NULL),
(3, 'Yuji', NULL),
(4, 'Megumi', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vilao`
--

CREATE TABLE `vilao` (
  `id_vilao` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vilao`
--

INSERT INTO `vilao` (`id_vilao`, `nome`) VALUES
(1, 'Kenjaku'),
(2, 'Sukuna'),
(3, 'Mahito');
COMMIT;
ALTER TABLE `protagonista`
  ADD PRIMARY KEY (`id_prota`);


ALTER TABLE `vilao`
  ADD PRIMARY KEY (`id_vilao`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
