-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12-Dez-2021 às 03:36
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testevaga`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(6) NOT NULL,
  `user_id` int(6) DEFAULT NULL,
  `buy_date` date NOT NULL,
  `buy_hour` time NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `category` varchar(100) NOT NULL,
  `perishable` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `user_id`, `buy_date`, `buy_hour`, `product_name`, `price`, `category`, `perishable`) VALUES
(1, 1, '2021-12-09', '00:00:00', 'Ane', 10.4, 'Alimentação', 'Sim'),
(10, 1, '2021-12-10', '05:14:36', 'Thiago', 10.75, 'Limpeza', 'Não'),
(11, 1, '2021-12-10', '05:15:36', 'feijão', 10.5, 'Alimentação', 'Sim'),
(12, 1, '2021-12-10', '05:18:38', 'Camiseta', 29.9, 'Vestuario', 'Não'),
(13, 1, '2021-12-10', '05:30:56', 'Arroz', 19.99, 'Alimentação', 'Sim'),
(14, 1, '2021-12-10', '05:31:24', 'abacate', 3.99, 'Alimentação', 'Sim'),
(15, 1, '2021-12-10', '05:35:07', 'testemsg', 15, 'Alimentação', 'Sim'),
(16, 1, '2021-12-10', '05:35:56', 'VEJA', 1, 'Limpeza', 'Não'),
(23, 1, '2021-12-11', '17:32:05', 'macarrao', 3.98, 'Alimentação', 'Sim'),
(25, 2, '2021-12-11', '18:41:19', 'User1', 150.55, 'Vestuario', 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `is_admin`) VALUES
(1, 'Admin', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'admin@teste.com.br', 1),
(2, 'User1', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'user1@teste.com.br', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cons_user_buy` (`user_id`) USING BTREE;

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
