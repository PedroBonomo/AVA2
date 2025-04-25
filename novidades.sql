-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/04/2025 às 18:59
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `novidades`
--

CREATE TABLE `novidades` (
  `id_nov` int(11) NOT NULL,
  `resumo` varchar(40) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `novidades`
--

INSERT INTO `novidades` (`id_nov`, `resumo`, `descricao`, `imagem`) VALUES
(19, 'Cria’s Supreme', 'Um hambúrguer duplo com cheddar, bacon crocante, cebola caramelizada e o toque especial do molho Cria’s.', 'supreme.png'),
(20, 'Combo Picante', 'Para quem gosta de fogo! Hambúrguer com jalapeño, batata canoa e molho de pimenta artesanal.', 'combo-picante.png'),
(21, 'Cria’s Veggie', 'Opção 100% vegetariana com hambúrguer de grão-de-bico, alface americana e maionese de alho.', 'veggie.png'),
(22, 'Festival do Queijo', '4 tipos de queijo no mesmo lanche: cheddar, prato, muçarela e catupiry — é de derreter o coração!', 'festival-queijo.png'),
(23, 'Nuggets do Cria', 'Crocantes, suculentos e servidos com 2 molhos à sua escolha. Ideal pra compartilhar!', 'nuggets.png'),
(24, 'Shake de Paçoca', 'Nosso novo milkshake com sorvete cremoso de baunilha e muuuita paçoca. Doce na medida certa!', 'shake-pacoca.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `novidades`
--
ALTER TABLE `novidades`
  ADD PRIMARY KEY (`id_nov`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `novidades`
--
ALTER TABLE `novidades`
  MODIFY `id_nov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
