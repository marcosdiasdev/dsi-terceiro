-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2016 às 12:36
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `terceiro`
--
CREATE DATABASE IF NOT EXISTS `terceiro` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `terceiro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `idaluno` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `matricula` varchar(11) NOT NULL,
  `nascimento` date NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `observacao` text,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`idaluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `cpf`, `rg`, `nome`, `matricula`, `nascimento`, `telefone`, `endereco`, `observacao`, `data_cadastro`) VALUES
(1, '65412378988', '123456789112', 'Chuck Norris', '20160507081', '1958-01-01', '551188990011', 'Times Square', '', '2016-10-30 22:27:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;