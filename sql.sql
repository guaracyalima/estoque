-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Ago 04, 2016 as 08:32 PM
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bi_server`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `srs_category`
--

CREATE TABLE IF NOT EXISTS `srs_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `srs_category`
--

INSERT INTO `srs_category` (`id`, `nome`) VALUES
(1, 'Frios'),
(2, 'Bebidas'),
(3, 'GrÃ£os'),
(4, 'Doces');

-- --------------------------------------------------------

--
-- Estrutura da tabela `srs_input`
--

CREATE TABLE IF NOT EXISTS `srs_input` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `produto` int(10) unsigned NOT NULL,
  `fornecedor` int(10) unsigned NOT NULL,
  `quantidade` int(10) unsigned NOT NULL,
  `obs` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `srs_input`
--

INSERT INTO `srs_input` (`id`, `data`, `categoria`, `produto`, `fornecedor`, `quantidade`, `obs`) VALUES
(1, '2016-08-01 15:21:27', '1', 1, 4, 500, 'Frangos pra fitrar'),
(2, '2016-08-02 15:21:34', '3', 3, 4, 300, ''),
(3, '2016-08-04 15:50:24', '1', 1, 4, 500, 'Frangos pra fitrar'),
(4, '2016-08-04 15:56:44', '1', 5, 4, 1, 'cerveja'),
(5, '2016-08-04 15:57:06', '1', 5, 4, 1, 'cerveja');

-- --------------------------------------------------------

--
-- Estrutura da tabela `srs_output`
--

CREATE TABLE IF NOT EXISTS `srs_output` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `produto` int(10) unsigned NOT NULL,
  `retirante` int(10) unsigned NOT NULL,
  `quantidade` int(10) unsigned NOT NULL,
  `obs` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `srs_output`
--

INSERT INTO `srs_output` (`id`, `data`, `categoria`, `produto`, `retirante`, `quantidade`, `obs`) VALUES
(1, '2016-08-01 16:22:55', '1', 1, 1, 500, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `srs_product`
--

CREATE TABLE IF NOT EXISTS `srs_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` text,
  `nome` text NOT NULL,
  `estoque_minimo` int(10) unsigned NOT NULL DEFAULT '1',
  `estoque_atual` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `srs_product`
--

INSERT INTO `srs_product` (`id`, `categoria`, `nome`, `estoque_minimo`, `estoque_atual`) VALUES
(1, '1', 'Frango', 0, 500),
(2, '2', 'Itaipava', 0, 0),
(3, '3', 'Soja', 0, 300),
(4, '4', 'Doce de noz moscada', 0, 0),
(5, '2', 'Skol', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `srs_requester`
--

CREATE TABLE IF NOT EXISTS `srs_requester` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `empresa` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `srs_requester`
--

INSERT INTO `srs_requester` (`id`, `nome`, `empresa`) VALUES
(1, 'Amando Pinto', 'Raio X');

-- --------------------------------------------------------

--
-- Estrutura da tabela `srs_supplier`
--

CREATE TABLE IF NOT EXISTS `srs_supplier` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `telefone` text,
  `estado` text,
  `cidade` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `srs_supplier`
--

INSERT INTO `srs_supplier` (`id`, `nome`, `telefone`, `estado`, `cidade`) VALUES
(4, 'Guaracy Araujo Lima', '8999220097', 'PiauÃ­', 'Corrente');
