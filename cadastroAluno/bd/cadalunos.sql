-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2022 às 22:46
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadalunos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `cpf` bigint(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `telefone` int(10) NOT NULL,
  `nascimento` text NOT NULL,
  `endereco` text NOT NULL,
  `bairro` text NOT NULL,
  `escolaridade` text NOT NULL,
  `estuda` text NOT NULL,
  `instituicao` text NOT NULL,
  `curso` text NOT NULL,
  `motivo` longtext NOT NULL,
  `razao` longtext NOT NULL,
  `experiencia` longtext NOT NULL,
  `expectativa` longtext NOT NULL,
  `urlFoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`cpf`, `nome`, `email`, `telefone`, `nascimento`, `endereco`, `bairro`, `escolaridade`, `estuda`, `instituicao`, `curso`, `motivo`, `razao`, `experiencia`, `expectativa`, `urlFoto`) VALUES
(5663254477, 'Cláudio Filgueira', 'claudiofilgueira@gmail.com', 0, '1916-10-08', 'Rua Araras', 'Trindade', 'emc', 'nao', 'Senac RJ', 'Cadastro de Alunos', 'aaaaaaaa', 'bbbbbbbbbb', 'cccccccc', 'ddddddddd', ''),
(5663255534, 'Cláudio Filgueira', 'claudiofilgueira@gmail.com', 0, '1916-10-08', 'Rua Araras', 'Trindade', 'emc', 'nao', 'Senac RJ', 'Cadastro de Alunos', 'aaaaaaaa', 'bbbbbbbbbb', 'cccccccc', 'ddddddddd', ''),
(6567432155, 'Cláudio Filgueira', 'claudiofilgueira@gmail.com', 0, '1916-10-08', 'Rua Araras', 'Trindade', 'emc', 'nao', 'Senac RJ', 'Cadastro de Alunos', 'aaaaaaaa', 'bbbbbbbbbb', 'cccccccc', 'ddddddddd', ''),
(6577434343, 'Cláudio Filgueira', 'claudiofilgueira@gmail.com', 0, '1916-10-08', 'Rua Araras', 'Trindade', 'emc', 'nao', 'Senac RJ', 'Cadastro de Alunos', 'aaaaaaaa', 'bbbbbbbbbb', 'cccccccc', 'ddddddddd', 'imgalunos/6297930bf2560.png'),
(6577777755, 'Cláudio Filgueira', 'claudiofilgueira@gmail.com', 0, '1916-10-08', 'Rua Araras', 'Trindade', 'emc', 'nao', 'Senac RJ', 'Cadastro de Alunos', 'aaaaaaaa', 'bbbbbbbbbb', 'cccccccc', 'ddddddddd', ''),
(12345678911, 'Rodrigo amaral jr', 'ramaral@gmail.com', 2147483647, '2222-10-22', 'rua b', 'Botafogo', 'emi', 'nao', 'Senac RJ', 'Cadastro de Alunos', 'fasdfasd', 'fasdfa', 'dsfasdfsd', 'afasd', 'imgalunos/6297cda794526.png'),
(68765432155, 'Cláudio Filgueira', 'claudiofilgueira@gmail.com', 0, '1916-10-08', 'Rua Araras', 'Trindade', 'emc', 'nao', 'Senac RJ', 'Cadastro de Alunos', 'aaaaaaaa', 'bbbbbbbbbb', 'cccccccc', 'ddddddddd', ''),
(412341233255534, 'Cláudio Filgueira', 'claudiofilgueira@gmail.com', 0, '1916-10-08', 'Rua Araras', 'Trindade', 'emc', 'nao', 'Senac RJ', 'Cadastro de Alunos', 'aaaaaaaa', 'bbbbbbbbbb', 'cccccccc', 'ddddddddd', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
