-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26/04/2025 às 21:54
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `client`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_prod` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nome` varchar(75) DEFAULT NULL COMMENT 'Nome do Produto',
  `valor` float DEFAULT NULL COMMENT 'Valor do Produto',
  `qtdestoque` int DEFAULT NULL COMMENT 'Quantidade em Estoque',
  `imagem` varchar(100) NOT NULL COMMENT 'Imagem do Produto',
  PRIMARY KEY (`id_prod`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabela de Produtos';

--
-- Despejando dados para a tabela `produtos`
--
TRUNCATE TABLE `produtos`;
INSERT INTO `produtos` (`id_prod`, `nome`, `valor`, `qtdestoque`, `imagem`) VALUES
(1, 'Classic Burger', 20, 1, 'img/produtos/produto1.png'),
(2, 'Avocacheese Burguer', 31, 3, 'img/produtos/produto2.png'),
(3, 'Mushroom Swiss Burger', 40, 7, 'img/produtos/produto3.png'),
(4, 'Spicy Jalapeño Burger', 55, 20, 'img/produtos/produto4.png'),
(5, 'Bacon BBQ Burger', 62, 66, 'img/produtos/produto5.png');



COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
