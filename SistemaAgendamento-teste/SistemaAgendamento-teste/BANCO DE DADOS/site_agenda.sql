-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Tempo de geração: 21-Jul-2022 às 18:48
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
-- Banco de dados: `site_agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `cod_agendamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(20) NOT NULL,
  `nome_cliente` varchar(45) DEFAULT NULL,
  `telefone_cliente` bigint(11) DEFAULT NULL,
  `email_cliente` varchar(45) DEFAULT NULL,
  `senha_cliente` varchar(6) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `endereco_cliente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dia`
--

CREATE TABLE `dia` (
  `cod_dia` int(11) NOT NULL,
  `dia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_func` int(11) NOT NULL,
  `nome_func` varchar(45) DEFAULT NULL,
  `telefone_func` bigint(11) DEFAULT NULL,
  `endereco_func` varchar(45) DEFAULT NULL,
  `data_nasc_func` date DEFAULT NULL,
  `senha_func` varchar(6) DEFAULT NULL,
  `email_func` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hora`
--

CREATE TABLE `hora` (
  `cod_hora` int(11) NOT NULL,
  `horario` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jornada`
--

CREATE TABLE `jornada` (
  `cod_jornada` int(11) NOT NULL,
  `entrada_jornada` time DEFAULT NULL,
  `saida_intervalo_jornada` time DEFAULT NULL,
  `entrada_intervalo_jornada` time DEFAULT NULL,
  `saida_jornada` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `cod_servico` int(11) NOT NULL,
  `nome_servico` varchar(45) DEFAULT NULL,
  `descricao_servico` varchar(200) DEFAULT NULL,
  `valor_servico` float(5,2) DEFAULT NULL,
  `duracao_servico` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico_agendamento`
--

CREATE TABLE `servico_agendamento` (
  `servico_agendamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`cod_agendamento`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`cod_dia`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_func`);

--
-- Índices para tabela `hora`
--
ALTER TABLE `hora`
  ADD PRIMARY KEY (`cod_hora`);

--
-- Índices para tabela `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`cod_jornada`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`cod_servico`);

--
-- Índices para tabela `servico_agendamento`
--
ALTER TABLE `servico_agendamento`
  ADD PRIMARY KEY (`servico_agendamento`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `cod_agendamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `dia`
--
ALTER TABLE `dia`
  MODIFY `cod_dia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `hora`
--
ALTER TABLE `hora`
  MODIFY `cod_hora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jornada`
--
ALTER TABLE `jornada`
  MODIFY `cod_jornada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `cod_servico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico_agendamento`
--
ALTER TABLE `servico_agendamento`
  MODIFY `servico_agendamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `agendamento_ibfk_1` FOREIGN KEY (`cod_agendamento`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `agendamento_ibfk_2` FOREIGN KEY (`cod_agendamento`) REFERENCES `dia` (`cod_dia`),
  ADD CONSTRAINT `agendamento_ibfk_3` FOREIGN KEY (`cod_agendamento`) REFERENCES `hora` (`cod_hora`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `FK_CodServico` FOREIGN KEY (`id_func`) REFERENCES `servico` (`cod_servico`),
  ADD CONSTRAINT `FK_JornadaCod` FOREIGN KEY (`id_func`) REFERENCES `jornada` (`cod_jornada`);

--
-- Limitadores para a tabela `servico_agendamento`
--
ALTER TABLE `servico_agendamento`
  ADD CONSTRAINT `servico_agendamento_ibfk_1` FOREIGN KEY (`servico_agendamento`) REFERENCES `servico` (`cod_servico`),
  ADD CONSTRAINT `servico_agendamento_ibfk_2` FOREIGN KEY (`servico_agendamento`) REFERENCES `agendamento` (`cod_agendamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
