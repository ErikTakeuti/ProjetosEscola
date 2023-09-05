-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2023 às 00:32
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `final`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `email`, `endereco`, `bairro`, `telefone`) VALUES
(1, 'CARLOS HENRIQUE RODRIGUES DE SOUSA', '', 'carlosbv1@gmail.com', 'rua 26 de junho ', 'Alto do motor', '88999156'),
(2, 'Julio Cesar', '3030', 'julio@gmail.com', '24 DE MAIO', 'Alto do motor', '(88)99176'),
(3, 'ALAN RODRIGUES', '1515', 'alan@gmail.com', 'rua das laranjeiras ', 'Alto do motor', '8552222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem_servico`
--

CREATE TABLE `ordem_servico` (
  `id` int(11) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `cpf_cliente` varchar(15) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `nome_veiculo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ordem_servico`
--

INSERT INTO `ordem_servico` (`id`, `nome_cliente`, `cpf_cliente`, `placa`, `nome_veiculo`, `marca`) VALUES
(1, 'ALAN RODRIGUES', '1515', '', '', '@'),
(2, 'CARLOS HENRIQUE RODRIGUES DE SOUSA', '', '', '', '@'),
(3, 'CARLOS HENRIQUE RODRIGUES DE SOUSA', '', '', '', ''),
(4, 'ALAN RODRIGUES', '1515', '', '', ''),
(5, '', '', '', '', ''),
(6, 'Julio Cesar', '3030', '', '', ''),
(7, 'CARLOS HENRIQUE RODRIGUES DE SOUSA', '', '', '', ''),
(8, 'CARLOS HENRIQUE RODRIGUES DE SOUSA', '', '', '', ''),
(9, 'CARLOS HENRIQUE RODRIGUES DE SOUSA', '', '', '', ''),
(10, 'CARLOS HENRIQUE RODRIGUES DE SOUSA', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`) VALUES
(1, 'carlosbv1@gmail.com', '123'),
(2, 'renato@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ordem_servico`
--
ALTER TABLE `ordem_servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ordem_servico`
--
ALTER TABLE `ordem_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
