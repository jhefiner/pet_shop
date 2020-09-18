-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Set-2020 às 20:01
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `animais`
--
CREATE DATABASE `animais`;
use `animais`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE IF NOT EXISTS `animais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `idade` int(11) NOT NULL,
  `nome_dono` varchar(40) NOT NULL,
  `telefone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`id`, `nome`, `tipo`, `idade`, `nome_dono`, `telefone`) VALUES
(1, 'Panqueca', '2', 1, 'Rafaelly Camargo', 33300904),
(3, 'Perebas', '1', 1, 'Rony Wesley', 12456789),
(4, 'Bichento', '4', 4, 'Hermione Granger', 87654321),
(5, 'Edwiges', '2', 2, 'Harry Potter', 98765432),
(6, 'Edwiges', '6', 6, 'Jhenifer', 33372022);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
