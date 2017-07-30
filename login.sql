-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 01/07/2017 às 15:18
-- Versão do servidor: 5.7.18-0ubuntu0.16.04.1
-- Versão do PHP: 5.6.30-10+deb.sury.org~xenial+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `nivel_acessos`
--

CREATE TABLE `nivel_acessos` (
  `id` int(11) NOT NULL,
  `nome_nivel` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `nivel_acessos`
--

INSERT INTO `nivel_acessos` (`id`, `nome_nivel`, `created`, `modified`) VALUES
(1, 'Administrador', '2017-04-10 00:00:00', NULL),
(2, 'Psicologa', '2017-04-15 00:00:00', NULL),
(3, 'Cliente', '2017-04-15 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(520) NOT NULL,
  `descricao_curta` text NOT NULL,
  `descricao_longa` text NOT NULL,
  `preco` varchar(20) NOT NULL,
  `tag` varchar(520) NOT NULL,
  `description` varchar(520) NOT NULL,
  `imagem` varchar(220) DEFAULT NULL,
  `situacao_id` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao_curta`, `descricao_longa`, `preco`, `tag`, `description`, `imagem`, `situacao_id`, `modified`, `created`, `categoria_id`) VALUES
(1, 'Teclado', 'Teclado', 'Teclado ABNT', '80,00', 'teclado, teclado abnt', '', 'teclado.jpg', 1, NULL, '2017-04-29 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `setor`
--

CREATE TABLE `setor` (
  `id` int(11) NOT NULL,
  `nome` varchar(520) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `setor`
--

INSERT INTO `setor` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Informatica', '2017-04-25 22:21:52', NULL),
(3, 'Eletrodomestico', '2017-04-25 22:23:53', NULL),
(7, 'Cama', '2017-04-25 23:18:05', NULL),
(8, 'Mesa', '2017-04-25 23:18:15', NULL),
(9, 'Banho', '2017-04-25 23:18:27', '2017-04-25 23:19:05'),
(10, 'Gabinete', '2017-06-08 21:06:05', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `situacoes`
--

CREATE TABLE `situacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `situacoes`
--

INSERT INTO `situacoes` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativado', '2017-04-29 00:00:00', NULL),
(2, 'Desativado', '2017-04-29 00:00:00', NULL),
(3, 'Falta em Estoque', '2017-04-29 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`, `nivel_acesso_id`, `created`, `modified`, `cpf`) VALUES
(1, 'pedro aurelio', 'admin@bol.com.br', 'admin', '123', 1, '2017-04-10 00:00:00', NULL, 755),
(2, 'Jaqueline', 'jaqueline@bol.com.br', 'jaqueline', '123456', 2, '2017-05-01 00:00:00', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `visita`
--

CREATE TABLE `visita` (
  `id_visita` int(11) NOT NULL,
  `id_visitante` int(11) DEFAULT NULL,
  `id_usuarios` int(11) DEFAULT NULL,
  `entrada` datetime DEFAULT NULL,
  `saida` datetime DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `objetivo` varchar(200) DEFAULT NULL,
  `setor` varchar(50) DEFAULT NULL,
  `visita_em_andamento` tinyint(1) DEFAULT NULL,
  `habilitado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `visita`
--

INSERT INTO `visita` (`id_visita`, `id_visitante`, `id_usuarios`, `entrada`, `saida`, `empresa`, `objetivo`, `setor`, `visita_em_andamento`, `habilitado`) VALUES
(1, 1, 4, '2013-06-01 10:56:00', '2013-06-01 18:20:48', NULL, 'carregamento de cerveja', NULL, 1, 1),
(5, 11, 4, '2013-11-07 10:18:00', '2013-11-07 16:41:00', NULL, 'venda de mercadoria', NULL, 1, 1),
(6, 9, 8, '2013-10-23 11:13:00', '2013-10-23 19:23:00', NULL, 'venda de mercadoria', NULL, 1, 1),
(8, 9, 4, '2013-10-07 11:11:00', '2013-10-07 19:14:00', NULL, 'transporte de cadeiras', NULL, 1, 1),
(9, 11, 3, '2013-09-01 07:41:00', '2013-09-01 17:23:00', NULL, 'carregamento de cerveja', NULL, 1, 1),
(10, 1, 3, '2013-10-24 08:43:00', '2013-10-24 14:19:00', NULL, 'carregamento de cerveja', NULL, 1, 1),
(11, 1, 4, '2013-12-05 08:30:00', '2013-12-05 09:05:02', NULL, 'carregamento de cerveja', NULL, 1, 1),
(12, 12, 1, '2013-11-22 10:46:45', '2013-11-22 11:50:30', NULL, 'inspeÃ§Ã£o', NULL, 1, 0),
(13, 13, 1, '2013-11-22 11:10:09', '2013-11-22 22:52:33', NULL, 'Dominar a terra', NULL, 1, 1),
(14, 14, 7, '2013-12-05 11:52:02', '2013-12-05 15:36:56', NULL, 'asdf', NULL, 1, 1),
(15, 15, 6, '2013-12-05 11:53:40', '2013-12-05 18:13:14', NULL, 'entrevista', NULL, 1, 1),
(16, 16, 1, '2013-12-05 11:55:05', '2013-12-05 15:10:26', NULL, '', NULL, 1, 1),
(17, 17, 1, '2013-12-11 08:49:54', '2017-06-05 21:30:52', NULL, 'Cavocar', NULL, 1, 1),
(18, 18, 2, '2014-01-07 09:20:21', '2017-06-26 22:33:06', NULL, 'conserto de encamento', NULL, 1, 1),
(19, 19, 4, '2013-08-07 10:15:58', '2013-08-07 17:00:00', NULL, 'Carregamento de cerveja', NULL, 1, 1),
(20, 20, 3, '2014-01-07 10:23:00', '2014-01-14 21:04:48', NULL, 'envio de equipamentos para a filial', NULL, 1, 1),
(21, 21, 2, '2014-01-07 10:25:05', '2014-01-07 10:50:50', NULL, 'conserto', NULL, 1, 1),
(23, NULL, NULL, '2015-02-12 14:45:21', '2015-02-12 13:35:31', 'rp informaitca', 'reuniao', '7', 1, NULL),
(24, NULL, NULL, '2017-02-03 08:45:20', '2017-02-03 09:15:40', 'j marketing', 'apresentacao', '10', 1, NULL),
(25, 1, NULL, '2014-05-08 14:20:45', '2014-05-08 15:33:45', 'auto pecas franca', 'preco', '1', 1, NULL),
(26, 3, NULL, '2017-06-21 22:11:34', '2017-06-29 21:15:11', 'fulano de tal', 'corte', '8', 1, NULL),
(27, 18, NULL, '2017-06-21 22:46:59', '2017-06-26 22:29:59', 'rp informatica', 'congresso', '3', 1, NULL),
(28, 1, NULL, '2017-06-24 02:12:54', '2017-06-26 21:43:03', 'teste', 'teste da data', '1', 1, NULL),
(29, 17, NULL, '2017-06-24 02:13:33', '2017-06-26 22:29:54', 'data 2', 'teste da data 2', '10', 1, NULL),
(30, 1, NULL, '2017-06-26 22:33:57', NULL, 'auto pecas franca', 'reuniao', '8', 1, NULL),
(31, 1, NULL, '2017-06-26 22:34:19', NULL, 'auto pecas franca', 'teste', '3', 1, NULL),
(32, 1, NULL, '2017-06-26 22:34:38', '2017-06-26 22:39:35', 'auto pecas franca', 'terceira reuniao', '10', 1, NULL),
(33, 19, NULL, '2017-06-26 22:47:05', NULL, 'teste de espaco', 'reuniao', '10', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `visitante`
--

CREATE TABLE `visitante` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) DEFAULT NULL,
  `nome_mae` varchar(220) DEFAULT NULL,
  `nome_pai` varchar(220) DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `data_nascimento` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cep` int(10) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(20) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `visitante`
--

INSERT INTO `visitante` (`id`, `nome`, `nome_mae`, `nome_pai`, `empresa`, `sexo`, `data_nascimento`, `email`, `cep`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `telefone`) VALUES
(1, 'Francisco FIgueiredo', 'Cleuza Marinho', 'Pedro Sabatine', NULL, 'Femininno', '1945-12-05', 'francisco@bol.com.br', 0, 'rua das casas', '', '', '', '', '6932216516'),
(2, 'Jaqueline', 'Ilizabet', 'Jaco', NULL, 'Feminino', '1937-05-02', 'jaqueline@bol.com.br', 0, 'rua das casas', '', '', '', '', '69993068050'),
(3, 'Oneida Guzman', 'Luizinha Guzman', 'Francisco Figueiredo', NULL, 'Femininno', '1971-10-03', 'glenda@bol.com.br', 0, 'rua flores', '', '', '', '', '9232381697'),
(4, 'Adrano Figueiredo', 'Luizinha Guzman', 'Francisco Figueiredo', NULL, 'Masculino', '1973-19-12', 'adriano@bol.com.br', 0, 'rua sul', '', '', '', '', '693214521'),
(17, 'pedro aurelio', 'Luizinha Guzman', 'Francisco Figueiredo', NULL, 'Masculino', '1964-05-24', 'pedro@bol.com.br', 0, 'salgado filho', '', '', '', '', '6932216515'),
(18, 'maria da silva', 'joaquina da silva', 'joao maria', 'rp informatica', 'masculino', '19/09/1983', 'pero@htoamil.com', 76820464, 'Rua Silas Shockness', '', 'Flodoaldo Pontes Pinto', 'Porto Velho', 'RO', '(69)3221-6516');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `situacoes`
--
ALTER TABLE `situacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`id_visita`),
  ADD KEY `fk_visita_visitante_idx` (`id_visitante`),
  ADD KEY `fk_visita_funcionario1_idx` (`id_usuarios`);

--
-- Índices de tabela `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `situacoes`
--
ALTER TABLE `situacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `visita`
--
ALTER TABLE `visita`
  MODIFY `id_visita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de tabela `visitante`
--
ALTER TABLE `visitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
