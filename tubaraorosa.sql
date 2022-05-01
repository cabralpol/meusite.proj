-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Abr-2022 às 21:28
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tubaraorosa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_groups`
--

DROP TABLE IF EXISTS `permission_groups`;
CREATE TABLE IF NOT EXISTS `permission_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `name`) VALUES
(1, 'Super Administrador'),
(2, 'Administrador'),
(3, 'Gerente'),
(5, 'Vendedor'),
(22, 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_groups_permission_params`
--

DROP TABLE IF EXISTS `permission_groups_permission_params`;
CREATE TABLE IF NOT EXISTS `permission_groups_permission_params` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_permission_groups` int(11) NOT NULL,
  `id_permissions_params` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Extraindo dados da tabela `permission_groups_permission_params`
--

INSERT INTO `permission_groups_permission_params` (`id`, `id_permission_groups`, `id_permissions_params`) VALUES
(2, 5, 1),
(57, 1, 1),
(58, 1, 2),
(59, 1, 3),
(47, 22, 3),
(46, 22, 2),
(45, 22, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_params`
--

DROP TABLE IF EXISTS `permission_params`;
CREATE TABLE IF NOT EXISTS `permission_params` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL COMMENT 'Lowercase name, no special characters, no space',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `permission_params`
--

INSERT INTO `permission_params` (`id`, `name`, `slug`) VALUES
(1, 'Permissão de adicionar', 'add'),
(2, 'Permissão de excluir', 'del'),
(3, 'Permissão de ver', 'view'),
(5, 'Permissão de teste', 'Permissão de teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `img_url` varchar(50) NOT NULL,
  `project_url` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `portfolios`
--

INSERT INTO `portfolios` (`id`, `project_name`, `description`, `img_url`, `project_url`) VALUES
(1, 'clear sky', 'O site <strong>Clean Sky</strong> é produzido em estrutura MVC, com as seguintes tecnologias:\r\nPhp 7.4, JavaScript, Bootstrap 5.1, Html 5, Css 3. Possui sistema de envio de e-mail integrado com resposta autómática para os clientes.', 'portfolio-02.png', 'clear_sky'),
(2, 'clear sky', 'O site <strong>Clean Sky</strong> é produzido em estrutura MVC, com as seguintes tecnologias:\r\nPhp 7.4, JavaScript, Bootstrap 5.1, Html 5, Css 3. Possui sistema de envio de e-mail integrado com resposta autómática para os clientes.', 'portfolio-02.png', 'clear_sky'),
(3, 'clear sky', 'O site <strong>Clean Sky</strong> é produzido em estrutura MVC, com as seguintes tecnologias:\r\nPhp 7.4, JavaScript, Bootstrap 5.1, Html 5, Css 3. Possui sistema de envio de e-mail integrado com resposta autómática para os clientes.', 'portfolio-02.png', 'clear_sky');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(70) NOT NULL,
  `name` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(32) DEFAULT NULL,
  `id_permission_groups` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `admin`, `token`, `id_permission_groups`) VALUES
(1, 'cabralpol@hotmail.com', '$2y$10$LRqbv4nu7kROF/X4kSfwoOeV56M2C2KEaX0F6osnVy8vPCuAaEQMS', 'Daniel', 1, '9b3ff051236cb9dc1fde1abde819c465', 1),
(2, 'cabralpol22@hotmail.com', '$10$IYtQasyvI.6RSBJrnmVyOOwzOVdED/swK6eUA/RXThTNwcdBVCj82', 'Daniel22', 0, NULL, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
