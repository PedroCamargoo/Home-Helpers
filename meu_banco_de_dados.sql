-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/11/2023 às 20:09
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meu_banco_de_dados`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `user_sex` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `phone`, `user_sex`) VALUES
('luis', 'teste@teste.com', '$2y$10$jIdRPUmuc2p/qlrK287UEu.8lZ85pq.d1zS9uI252bgcygJbbX1dC', '11930371720', 'masculino');

-- --------------------------------------------------------

--
-- Estrutura para tabela `workers`
--

CREATE TABLE `workers` (
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(14) NOT NULL,
  `user_sex` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `workers`
--

INSERT INTO `workers` (`username`, `email`, `password`, `phone`, `user_sex`) VALUES
('Pedro Camargo', 'teste@gmail.com', '$2y$10$SGTM4lsD4BKRsYS8P13uGe2vTwdBfUq6HY2403h6EeSiWlEkoYa2G', '1234', 'masculino'),
('worker', 'worker', '$2y$10$EpjARVqJQoCIphpB1UQF9.rhNUHgtEe.GUMHfGN1zIR7zbJpkxgHa', '1234', 'masculino');

-- --------------------------------------------------------

--
-- Estrutura para tabela `workers_atributes`
--

CREATE TABLE `workers_atributes` (
  `workers_key` varchar(255) NOT NULL,
  `experiencia` varchar(25) NOT NULL,
  `tipo_trabalho` varchar(255) NOT NULL,
  `caracteristicas` varchar(255) NOT NULL,
  `trabalhos_passado` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `workers_atributes`
--

INSERT INTO `workers_atributes` (`workers_key`, `experiencia`, `tipo_trabalho`, `caracteristicas`, `trabalhos_passado`) VALUES
('Pedro Camargo', 'Profissional', 'Lavagem de Cortinas, Persianas e Tapetes', 'Desenvolvedor', 'aa'),
('Pedro Camargo', 'Profissional', 'Lavagem de Cortinas, Persianas e Tapetes', 'ServiçoCasa', 'aa');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_key` (`username`) USING BTREE;

--
-- Índices de tabela `workers`
--
ALTER TABLE `workers`
  ADD UNIQUE KEY `workers_key` (`username`);

--
-- Índices de tabela `workers_atributes`
--
ALTER TABLE `workers_atributes`
  ADD KEY `fk_worker` (`workers_key`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `workers_atributes`
--
ALTER TABLE `workers_atributes`
  ADD CONSTRAINT `fk_worker` FOREIGN KEY (`workers_key`) REFERENCES `workers` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
