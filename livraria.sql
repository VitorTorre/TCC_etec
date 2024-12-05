-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 05/12/2024 às 21h40min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de Dados: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

DROP TABLE IF EXISTS `livros`;
CREATE TABLE IF NOT EXISTS `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `livros`
--

INSERT DELAYED IGNORE INTO `livros` (`id`, `titulo`, `autor`, `preco`, `descricao`) VALUES
(1, 'tal', 'tal', 0.00, ''),
(2, 'tal', 'tal', 0.00, ''),
(3, 'tal', 'tal', 0.00, ''),
(4, 'tal', 'tal', 0.00, ''),
(5, 'Uns Broocos', 'M. DE Assis', 0.00, ''),
(6, 'Uns Broocos', 'M. DE Assis', 0.00, ''),
(7, 'Uns Broocos', 'M. DE Assis', 0.00, '25'),
(8, 'Uns Broocos', 'M. DE Assis', 0.00, '45'),
(9, 'Uns Broocos', 'M. DE Assis', 45.00, '23'),
(10, 'Uns Broocos', 'M. DE Assis', 45.00, 'essa'),
(11, 'tal', 'tal', 34.00, 'tal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(255) DEFAULT NULL,
  `endereco_cliente` text,
  `livro_id` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `data_pedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `livro_id` (`livro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Confirmar senha` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`livro_id`) REFERENCES `livros` (`id`);
