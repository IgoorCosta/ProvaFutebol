-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Abr-2024 às 21:45
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `futebol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `arquibancada` varchar(50) NOT NULL,
  `vagas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`vagas`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `data`, `arquibancada`, `vagas`) VALUES
(1, 'São Paulo x Corinthians', '23/04/2024', 'A1', '[{\"vaga\":\"01\",\"usuario\":\"NULL\"},{\"vaga\":\"02\",\"usuario\":\"NULL\"},{\"vaga\":\"03\",\"usuario\":\"NULL\"},{\"vaga\":\"04\",\"usuario\":\"NULL\"},{\"vaga\":\"05\",\"usuario\":\"3412\"},{\"vaga\":\"06\",\"usuario\":\"NULL\"},{\"vaga\":\"07\",\"usuario\":\"NULL\"},{\"vaga\":\"08\",\"usuario\":\"34234\"},{\"vaga\":\"09\",\"usuario\":\"NULL\"},{\"vaga\":\"10\",\"usuario\":\"NULL\"},{\"vaga\":\"11\",\"usuario\":\"NULL\"},{\"vaga\":\"12\",\"usuario\":\"NULL\"},{\"vaga\":\"13\",\"usuario\":\"NULL\"},{\"vaga\":\"14\",\"usuario\":\"NULL\"},{\"vaga\":\"15\",\"usuario\":\"NULL\"}]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `evento` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`evento`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `evento`) VALUES
(3412, 'Lucas Rodrigues', 'lucas@usp.br', 'asdf', NULL),
(34234, 'Igor Costa', 'igoor.costa@usp.br', 'asdf', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
