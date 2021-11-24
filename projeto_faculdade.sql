-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2021 às 00:38
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `recfeira`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `codAtiv` int(11) NOT NULL,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`codAtiv`, `descricao`, `valor`) VALUES
(8, 'Plantas e hortaliças', 5.5),
(13, 'Carnes', 15),
(15, 'Frutas', 5.5),
(16, 'Roupas e confecções', 5.5),
(17, 'Temperos', 5.5),
(18, 'Alimentação', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `feirante`
--

CREATE TABLE `feirante` (
  `codFeirante` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tel1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tel2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cep` int(11) NOT NULL,
  `rua` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uf` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `feirante`
--

INSERT INTO `feirante` (`codFeirante`, `cpf`, `nome`, `rg`, `tel1`, `tel2`, `email`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `complemento`) VALUES
(5, 2147483647, 'Aldenize Morais Silva Viana', '654987', '81819181321', '', 'alenize@gmail.com', 55021265, 'Avenida Gonçalo Nunes de Olive', '84', 'Cidade Jardim', 'Caruaru', 'PE', 'Casa'),
(11, 2147483647, 'José Iclair Viana Silva Filho', '6896793', '81981911500', '', 'iclair1@hotmail.com', 55021265, 'Rua Gon', '84', 'Cidade Jardim', 'Caruaru', 'PE', 'Casa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`codAtiv`);

--
-- Índices para tabela `feirante`
--
ALTER TABLE `feirante`
  ADD PRIMARY KEY (`codFeirante`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `codAtiv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `feirante`
--
ALTER TABLE `feirante`
  MODIFY `codFeirante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
