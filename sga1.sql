-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2020 às 14:19
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sga1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimentos`
--

CREATE TABLE `atendimentos` (
  `id` bigint(20) NOT NULL,
  `unidade_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `usuario_tri_id` int(11) NOT NULL,
  `servico_id` int(11) NOT NULL,
  `prioridade_id` int(11) NOT NULL,
  `atendimento_id` bigint(20) DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `sigla_senha` varchar(1) NOT NULL,
  `num_senha` int(11) NOT NULL,
  `num_senha_serv` int(11) NOT NULL,
  `nm_cli` varchar(100) DEFAULT NULL,
  `num_local` smallint(6) NOT NULL,
  `dt_cheg` datetime NOT NULL,
  `dt_cha` datetime DEFAULT NULL,
  `dt_ini` datetime DEFAULT NULL,
  `dt_fim` datetime DEFAULT NULL,
  `ident_cli` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atend_codif`
--

CREATE TABLE `atend_codif` (
  `atendimento_id` bigint(20) NOT NULL,
  `servico_id` int(11) NOT NULL,
  `valor_peso` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atend_meta`
--

CREATE TABLE `atend_meta` (
  `atendimento_id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `esquerda` int(11) NOT NULL,
  `direita` int(11) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id`, `nome`, `descricao`, `esquerda`, `direita`, `nivel`) VALUES
(1, 'Administrador', 'Administrador geral do sistema', 1, 4, 0),
(2, 'Secretária', 'Secretária', 2, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos_mod_perm`
--

CREATE TABLE `cargos_mod_perm` (
  `cargo_id` int(11) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `permissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargos_mod_perm`
--

INSERT INTO `cargos_mod_perm` (`cargo_id`, `modulo_id`, `permissao`) VALUES
(1, 1, 3),
(1, 2, 3),
(1, 3, 3),
(1, 4, 3),
(1, 5, 3),
(1, 6, 3),
(1, 7, 3),
(1, 8, 3),
(1, 9, 3),
(1, 10, 3),
(1, 11, 3),
(1, 12, 3),
(1, 13, 3),
(1, 14, 3),
(2, 2, 3),
(2, 4, 3),
(2, 7, 3),
(2, 8, 3),
(2, 9, 3),
(2, 11, 3),
(2, 14, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE `config` (
  `chave` varchar(150) NOT NULL,
  `valor` text NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`chave`, `valor`, `tipo`) VALUES
('auth', 'a:3:{s:4:\"type\";s:2:\"db\";s:2:\"db\";a:0:{}s:4:\"ldap\";a:7:{s:4:\"host\";s:0:\"\";s:4:\"port\";s:0:\"\";s:6:\"baseDn\";s:0:\"\";s:14:\"loginAttribute\";s:0:\"\";s:8:\"username\";s:0:\"\";s:8:\"password\";s:0:\"\";s:6:\"filter\";s:0:\"\";}}', 3),
('numeracao', '1', 2),
('version', '1.5.0', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contador`
--

CREATE TABLE `contador` (
  `unidade_id` int(11) NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contador`
--

INSERT INTO `contador` (`unidade_id`, `total`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `esquerda` int(11) NOT NULL,
  `direita` int(11) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id`, `nome`, `descricao`, `esquerda`, `direita`, `nivel`) VALUES
(1, 'Raíz', 'Grupo Raíz', 1, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_atendimentos`
--

CREATE TABLE `historico_atendimentos` (
  `id` bigint(20) NOT NULL,
  `unidade_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `usuario_tri_id` int(11) NOT NULL,
  `servico_id` int(11) NOT NULL,
  `prioridade_id` int(11) NOT NULL,
  `atendimento_id` bigint(20) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `sigla_senha` varchar(1) NOT NULL,
  `num_senha` int(11) NOT NULL,
  `num_senha_serv` int(11) NOT NULL,
  `nm_cli` varchar(100) DEFAULT NULL,
  `num_local` smallint(6) NOT NULL,
  `dt_cheg` datetime NOT NULL,
  `dt_cha` datetime DEFAULT NULL,
  `dt_ini` datetime DEFAULT NULL,
  `dt_fim` datetime DEFAULT NULL,
  `ident_cli` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historico_atendimentos`
--

INSERT INTO `historico_atendimentos` (`id`, `unidade_id`, `usuario_id`, `usuario_tri_id`, `servico_id`, `prioridade_id`, `atendimento_id`, `status`, `sigla_senha`, `num_senha`, `num_senha_serv`, `nm_cli`, `num_local`, `dt_cheg`, `dt_cha`, `dt_ini`, `dt_fim`, `ident_cli`) VALUES
(1, 1, 2, 1, 1, 1, NULL, 5, 'A', 1, 1, '', 2, '2020-12-02 16:24:02', '2020-12-02 16:25:49', NULL, '2020-12-02 16:25:56', ''),
(2, 1, 2, 1, 1, 4, NULL, 5, 'A', 2, 2, '', 2, '2020-12-02 16:24:10', '2020-12-02 16:26:47', NULL, '2020-12-02 16:26:53', ''),
(3, 1, 2, 1, 1, 1, NULL, 5, 'A', 3, 3, '', 2, '2020-12-02 16:24:16', '2020-12-02 16:25:57', NULL, '2020-12-02 16:26:41', ''),
(4, 1, 2, 1, 1, 1, NULL, 5, 'A', 4, 4, '', 2, '2020-12-02 16:24:22', '2020-12-02 16:26:42', NULL, '2020-12-02 16:26:46', ''),
(5, 1, 2, 1, 1, 3, NULL, 2, 'A', 5, 5, '', 2, '2020-12-02 16:24:32', '2020-12-02 16:26:55', NULL, NULL, ''),
(6, 1, NULL, 1, 1, 1, NULL, 1, 'A', 6, 6, '', 0, '2020-12-02 16:27:01', NULL, NULL, NULL, ''),
(7, 1, NULL, 1, 1, 1, NULL, 1, 'A', 7, 7, '', 0, '2020-12-02 16:27:08', NULL, NULL, NULL, ''),
(8, 1, NULL, 1, 1, 3, NULL, 1, 'A', 8, 8, '', 0, '2020-12-02 16:27:15', NULL, NULL, NULL, ''),
(9, 1, NULL, 1, 1, 1, NULL, 1, 'A', 9, 9, '', 0, '2020-12-02 16:27:26', NULL, NULL, NULL, ''),
(13, 1, NULL, 1, 2, 1, NULL, 1, 'P', 4, 1, '', 0, '2020-12-03 12:21:18', NULL, NULL, NULL, ''),
(12, 1, NULL, 1, 1, 1, NULL, 1, 'A', 3, 3, '', 0, '2020-12-03 12:21:13', NULL, NULL, NULL, ''),
(11, 1, NULL, 1, 1, 1, NULL, 1, 'A', 2, 2, '', 0, '2020-12-03 12:21:09', NULL, NULL, NULL, ''),
(10, 1, NULL, 1, 1, 1, NULL, 1, 'A', 1, 1, '', 0, '2020-12-03 12:21:02', NULL, NULL, NULL, ''),
(17, 1, NULL, 1, 2, 1, NULL, 1, 'P', 4, 2, '', 0, '2020-12-03 12:31:13', NULL, NULL, NULL, ''),
(18, 1, NULL, 1, 2, 1, NULL, 1, 'P', 5, 3, '', 0, '2020-12-03 12:35:38', NULL, NULL, NULL, ''),
(16, 1, 2, 1, 2, 1, NULL, 5, 'P', 3, 1, '', 2, '2020-12-03 12:25:16', '2020-12-03 12:25:42', NULL, '2020-12-03 12:25:44', ''),
(15, 1, 2, 1, 1, 1, NULL, 5, 'A', 2, 2, '', 2, '2020-12-03 12:25:11', '2020-12-03 12:25:36', NULL, '2020-12-03 12:25:40', ''),
(14, 1, 2, 1, 1, 1, NULL, 5, 'A', 1, 1, '', 2, '2020-12-03 12:23:31', '2020-12-03 12:25:28', NULL, '2020-12-03 12:25:32', ''),
(27, 1, NULL, 1, 2, 1, NULL, 1, 'P', 9, 8, '', 0, '2020-12-03 13:31:30', NULL, NULL, NULL, ''),
(26, 1, NULL, 1, 2, 1, NULL, 1, 'P', 8, 7, '', 0, '2020-12-03 13:30:42', NULL, NULL, NULL, ''),
(25, 1, NULL, 1, 2, 1, NULL, 1, 'P', 7, 6, '', 0, '2020-12-03 13:29:45', NULL, NULL, NULL, ''),
(23, 1, NULL, 1, 2, 1, NULL, 1, 'P', 5, 4, '', 0, '2020-12-03 13:17:12', NULL, NULL, NULL, ''),
(24, 1, NULL, 1, 2, 1, NULL, 1, 'P', 6, 5, '', 0, '2020-12-03 13:27:50', NULL, NULL, NULL, ''),
(20, 1, NULL, 1, 2, 1, NULL, 1, 'P', 2, 2, '', 0, '2020-12-03 13:11:48', NULL, NULL, NULL, ''),
(21, 1, 2, 1, 2, 5, NULL, 5, 'P', 3, 3, '', 2, '2020-12-03 13:12:03', '2020-12-03 13:37:44', NULL, '2020-12-03 13:37:47', ''),
(22, 1, NULL, 1, 1, 1, NULL, 1, 'A', 4, 1, '', 0, '2020-12-03 13:13:09', NULL, NULL, NULL, ''),
(19, 1, NULL, 1, 2, 1, NULL, 1, 'P', 1, 1, '', 0, '2020-12-03 13:11:40', NULL, NULL, NULL, ''),
(28, 1, NULL, 1, 2, 1, NULL, 1, 'P', 10, 9, '', 0, '2020-12-03 13:32:03', NULL, NULL, NULL, ''),
(29, 1, NULL, 1, 2, 1, NULL, 1, 'P', 11, 10, '', 0, '2020-12-03 13:32:34', NULL, NULL, NULL, ''),
(30, 1, NULL, 1, 1, 5, NULL, 1, 'A', 12, 2, '', 0, '2020-12-03 13:32:55', NULL, NULL, NULL, ''),
(31, 1, NULL, 1, 2, 1, NULL, 1, 'P', 13, 11, '', 0, '2020-12-03 13:36:08', NULL, NULL, NULL, ''),
(32, 1, NULL, 1, 1, 5, NULL, 1, 'A', 14, 3, '', 0, '2020-12-03 13:36:20', NULL, NULL, NULL, ''),
(34, 1, 2, 1, 1, 4, NULL, 5, 'A', 2, 2, '', 1, '2020-12-03 13:47:50', '2020-12-03 13:48:03', NULL, '2020-12-03 13:49:10', ''),
(33, 1, 2, 1, 1, 1, NULL, 5, 'A', 1, 1, '', 1, '2020-12-03 13:47:39', '2020-12-03 13:49:12', NULL, '2020-12-03 13:54:13', ''),
(36, 1, NULL, 1, 1, 1, NULL, 1, 'S', 2, 2, '', 0, '2020-12-03 13:59:19', NULL, NULL, NULL, ''),
(35, 1, NULL, 1, 3, 1, NULL, 1, 'S', 1, 1, '', 0, '2020-12-03 13:59:06', NULL, NULL, NULL, ''),
(41, 1, 2, 1, 3, 1, NULL, 5, 'S', 5, 5, '', 1, '2020-12-03 14:04:13', '2020-12-03 14:04:26', NULL, '2020-12-03 14:04:29', ''),
(40, 1, 2, 1, 4, 4, NULL, 5, 'S', 4, 4, '', 1, '2020-12-03 14:00:44', '2020-12-03 14:01:06', NULL, '2020-12-03 14:01:28', ''),
(38, 1, 2, 1, 4, 1, NULL, 5, 'S', 2, 2, '', 1, '2020-12-03 14:00:29', '2020-12-03 14:01:45', NULL, '2020-12-03 14:01:52', ''),
(39, 1, 2, 1, 3, 1, NULL, 5, 'S', 3, 3, '', 1, '2020-12-03 14:00:36', '2020-12-03 14:04:23', NULL, '2020-12-03 14:04:26', ''),
(37, 1, 2, 1, 1, 1, NULL, 8, 'S', 1, 1, '', 1, '2020-12-03 14:00:19', '2020-12-03 14:01:29', '2020-12-03 14:01:37', '2020-12-03 14:01:44', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_atend_codif`
--

CREATE TABLE `historico_atend_codif` (
  `atendimento_id` bigint(20) NOT NULL,
  `servico_id` int(11) NOT NULL,
  `valor_peso` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historico_atend_codif`
--

INSERT INTO `historico_atend_codif` (`atendimento_id`, `servico_id`, `valor_peso`) VALUES
(37, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_atend_meta`
--

CREATE TABLE `historico_atend_meta` (
  `atendimento_id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locais`
--

CREATE TABLE `locais` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `locais`
--

INSERT INTO `locais` (`id`, `nome`) VALUES
(1, 'Guichê'),
(3, 'Mesa'),
(2, 'Sala');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE `modulos` (
  `id` int(11) NOT NULL,
  `chave` varchar(50) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `tipo` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`id`, `chave`, `nome`, `descricao`, `tipo`, `status`) VALUES
(1, 'sga.admin', 'Administração', 'Configurações gerais do sistema', 1, 1),
(2, 'sga.atendimento', 'Atendimento', 'Efetue o atendimento às senhas distribuídas dos serviços que você atende', 0, 1),
(3, 'sga.cargos', 'Cargos', 'Gerencie os cargos do sistema', 1, 1),
(4, 'sga.estatisticas', 'Estatísticas', 'Visualize e exporte estastísticas e relatórios sobre o sistema', 1, 1),
(5, 'sga.grupos', 'Grupos', 'Gerencie os grupos do sistema', 1, 1),
(6, 'sga.locais', 'Locais', 'Gerencie os locais de atendimento', 1, 1),
(7, 'sga.modulos', 'Módulos', 'Gerencie os módulos instalados', 1, 1),
(8, 'sga.monitor', 'Monitor', 'Gerencie as senhas aguardando atendimento', 0, 1),
(9, 'sga.prioridades', 'Prioridades', 'Gerencie os prioridades do sistema', 1, 1),
(10, 'sga.servicos', 'Serviços', 'Gerencie os serviços do sistema', 1, 1),
(11, 'sga.triagem', 'Triagem', 'Gerencie a distribuíção das senhas da unidade atual', 0, 1),
(12, 'sga.unidade', 'Configuração', 'Módulo para gerenciamento da unidade atual', 0, 1),
(13, 'sga.unidades', 'Unidades', 'Gerencie as unidades do sistema', 1, 1),
(14, 'sga.usuarios', 'Usuários', 'Gerencie os usuários do sistema', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `access_token` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `scope` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`access_token`, `client_id`, `user_id`, `expires`, `scope`) VALUES
('0f81d62d6d764b5bf0763cbce3de580240b661a7', 'seap', 'admin', '2020-12-02 19:23:35', NULL),
('3a1e51c559c835c7a015f7f0b5d6327b128df269', 'seap', 'admin', '2020-12-03 16:29:11', NULL),
('5f0e5f78b255471bbddc8c73bb2a49a8cf0fece9', 'seap', 'admin', '2020-12-03 16:11:37', NULL),
('b9478467d04f353dd910895e367cb84bb31c0f0b', 'seap', 'admin', '2020-12-03 15:31:10', NULL),
('bd4f00c45db209820ed5cb0dc03968f603bac606', 'seap', 'admin', '2020-12-02 20:18:42', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `client_id` varchar(80) NOT NULL,
  `client_secret` varchar(80) NOT NULL,
  `redirect_uri` varchar(2000) NOT NULL,
  `grant_types` varchar(80) DEFAULT NULL,
  `scope` varchar(100) DEFAULT NULL,
  `user_id` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `oauth_clients`
--

INSERT INTO `oauth_clients` (`client_id`, `client_secret`, `redirect_uri`, `grant_types`, `scope`, `user_id`) VALUES
('seap', 'seap@123', 'localhost/sga/public', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `refresh_token` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `scope` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`refresh_token`, `client_id`, `user_id`, `expires`, `scope`) VALUES
('2d130fec721ac5da6a362ca0d58967262a46ae8f', 'seap', 'admin', '2020-12-17 15:29:12', NULL),
('9751a6ec1c5c0b7d60338237b21b027424d2f392', 'seap', 'admin', '2020-12-17 15:11:37', NULL),
('c2516879cabc2ea27f1fbf489d42394167acf3f1', 'seap', 'admin', '2020-12-16 19:18:42', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_scopes`
--

CREATE TABLE `oauth_scopes` (
  `scope` text DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paineis`
--

CREATE TABLE `paineis` (
  `unidade_id` int(11) NOT NULL,
  `host` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paineis_servicos`
--

CREATE TABLE `paineis_servicos` (
  `host` int(11) NOT NULL,
  `unidade_id` int(11) NOT NULL,
  `servico_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `painel_senha`
--

CREATE TABLE `painel_senha` (
  `id` int(11) NOT NULL,
  `unidade_id` int(11) NOT NULL,
  `servico_id` int(11) NOT NULL,
  `num_senha` int(11) NOT NULL,
  `sig_senha` varchar(1) NOT NULL,
  `msg_senha` varchar(20) NOT NULL,
  `local` varchar(15) NOT NULL,
  `num_local` smallint(6) NOT NULL,
  `peso` smallint(6) NOT NULL,
  `prioridade` varchar(100) DEFAULT NULL,
  `nome_cliente` varchar(100) DEFAULT NULL,
  `documento_cliente` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prioridades`
--

CREATE TABLE `prioridades` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `peso` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prioridades`
--

INSERT INTO `prioridades` (`id`, `nome`, `descricao`, `peso`, `status`) VALUES
(1, 'Sem prioridade', 'Atendimento normal', 0, 1),
(2, 'Portador de Deficiência', 'Atendimento prioritáro para portadores de deficiência', 1, 1),
(3, 'Gestante', 'Atendimento prioritáro para gestantes', 1, 1),
(4, 'Idoso', 'Atendimento prioritáro para idosos', 1, 1),
(5, 'Outros', 'Qualquer outra prioridade', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `macro_id` int(11) DEFAULT NULL,
  `descricao` varchar(100) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `status` smallint(6) NOT NULL,
  `peso` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `macro_id`, `descricao`, `nome`, `status`, `peso`) VALUES
(1, NULL, 'Setor de Recursos Tecnológicos', 'SRT', 1, 1),
(2, NULL, 'Prioridade - Encaminhamento', 'Prioridade - Encaminhamento', 0, 1),
(3, NULL, 'SAD', 'SAD', 1, 1),
(4, NULL, 'SME', 'SME', 1, 1),
(5, NULL, 'SAF', 'SAF', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `serv_meta`
--

CREATE TABLE `serv_meta` (
  `servico_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades`
--

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `status` smallint(6) NOT NULL,
  `stat_imp` smallint(6) NOT NULL,
  `msg_imp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `unidades`
--

INSERT INTO `unidades` (`id`, `grupo_id`, `codigo`, `nome`, `status`, `stat_imp`, `msg_imp`) VALUES
(1, 1, '1', 'CIAPIS', 1, 1, 'Atendimento SEAP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `uni_meta`
--

CREATE TABLE `uni_meta` (
  `unidade_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `uni_serv`
--

CREATE TABLE `uni_serv` (
  `unidade_id` int(11) NOT NULL,
  `servico_id` int(11) NOT NULL,
  `local_id` int(11) NOT NULL,
  `sigla` varchar(1) NOT NULL,
  `status` smallint(6) NOT NULL,
  `peso` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `uni_serv`
--

INSERT INTO `uni_serv` (`unidade_id`, `servico_id`, `local_id`, `sigla`, `status`, `peso`) VALUES
(1, 1, 1, 'S', 1, 1),
(1, 2, 1, 'P', 0, 1),
(1, 3, 1, 'S', 1, 1),
(1, 4, 1, 'S', 1, 1),
(1, 5, 1, 'S', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `ult_acesso` datetime DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `session_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `nome`, `sobrenome`, `senha`, `ult_acesso`, `status`, `session_id`) VALUES
(1, 'admin', 'Administrador', 'ADM', 'b567e3e927b127349cec6f549bf009c4', '2020-12-03 13:54:30', 1, 'etd98nfj53dco27cgkidntuuo5'),
(2, 'atendente', 'Atendente', '1', 'b567e3e927b127349cec6f549bf009c4', '2020-12-03 13:46:35', 1, 't6kn75tgjcfm1b8i1k0plp4cmd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usu_grup_cargo`
--

CREATE TABLE `usu_grup_cargo` (
  `usuario_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usu_grup_cargo`
--

INSERT INTO `usu_grup_cargo` (`usuario_id`, `grupo_id`, `cargo_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usu_meta`
--

CREATE TABLE `usu_meta` (
  `usuario_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usu_meta`
--

INSERT INTO `usu_meta` (`usuario_id`, `name`, `value`) VALUES
(1, 'unidade', '1'),
(1, 'atendimento.local', '100'),
(1, 'atendimento.tipo', '1'),
(2, 'unidade', '1'),
(2, 'atendimento.local', '1'),
(2, 'atendimento.tipo', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usu_serv`
--

CREATE TABLE `usu_serv` (
  `unidade_id` int(11) NOT NULL,
  `servico_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usu_serv`
--

INSERT INTO `usu_serv` (`unidade_id`, `servico_id`, `usuario_id`) VALUES
(1, 1, 2),
(1, 3, 2),
(1, 4, 2);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `view_historico_atendimentos`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `view_historico_atendimentos` (
`id` bigint(20)
,`unidade_id` int(11)
,`usuario_id` int(11)
,`usuario_tri_id` int(11)
,`servico_id` int(11)
,`prioridade_id` int(11)
,`atendimento_id` bigint(20)
,`status` int(11)
,`sigla_senha` varchar(1)
,`num_senha` int(11)
,`num_senha_serv` int(11)
,`nm_cli` varchar(100)
,`num_local` smallint(6)
,`dt_cheg` datetime
,`dt_cha` datetime
,`dt_ini` datetime
,`dt_fim` datetime
,`ident_cli` varchar(11)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `view_historico_atend_codif`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `view_historico_atend_codif` (
`atendimento_id` bigint(20)
,`servico_id` int(11)
,`valor_peso` smallint(6)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `view_historico_atend_meta`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `view_historico_atend_meta` (
`atendimento_id` bigint(20)
,`name` varchar(50)
,`value` mediumtext
);

-- --------------------------------------------------------

--
-- Estrutura para vista `view_historico_atendimentos`
--
DROP TABLE IF EXISTS `view_historico_atendimentos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`usuariosga`@`%` SQL SECURITY DEFINER VIEW `view_historico_atendimentos`  AS SELECT `atendimentos`.`id` AS `id`, `atendimentos`.`unidade_id` AS `unidade_id`, `atendimentos`.`usuario_id` AS `usuario_id`, `atendimentos`.`usuario_tri_id` AS `usuario_tri_id`, `atendimentos`.`servico_id` AS `servico_id`, `atendimentos`.`prioridade_id` AS `prioridade_id`, `atendimentos`.`atendimento_id` AS `atendimento_id`, `atendimentos`.`status` AS `status`, `atendimentos`.`sigla_senha` AS `sigla_senha`, `atendimentos`.`num_senha` AS `num_senha`, `atendimentos`.`num_senha_serv` AS `num_senha_serv`, `atendimentos`.`nm_cli` AS `nm_cli`, `atendimentos`.`num_local` AS `num_local`, `atendimentos`.`dt_cheg` AS `dt_cheg`, `atendimentos`.`dt_cha` AS `dt_cha`, `atendimentos`.`dt_ini` AS `dt_ini`, `atendimentos`.`dt_fim` AS `dt_fim`, `atendimentos`.`ident_cli` AS `ident_cli` FROM `atendimentos` ;

-- --------------------------------------------------------

--
-- Estrutura para vista `view_historico_atend_codif`
--
DROP TABLE IF EXISTS `view_historico_atend_codif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`usuariosga`@`%` SQL SECURITY DEFINER VIEW `view_historico_atend_codif`  AS SELECT `atend_codif`.`atendimento_id` AS `atendimento_id`, `atend_codif`.`servico_id` AS `servico_id`, `atend_codif`.`valor_peso` AS `valor_peso` FROM `atend_codif` ;

-- --------------------------------------------------------

--
-- Estrutura para vista `view_historico_atend_meta`
--
DROP TABLE IF EXISTS `view_historico_atend_meta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`usuariosga`@`%` SQL SECURITY DEFINER VIEW `view_historico_atend_meta`  AS SELECT `atend_meta`.`atendimento_id` AS `atendimento_id`, `atend_meta`.`name` AS `name`, `atend_meta`.`value` AS `value` FROM `atend_meta` ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atendimentos_ibfk_1` (`prioridade_id`),
  ADD KEY `atendimentos_ibfk_2` (`unidade_id`,`servico_id`),
  ADD KEY `atendimentos_ibfk_4` (`usuario_id`),
  ADD KEY `atendimentos_ibfk_5` (`usuario_tri_id`),
  ADD KEY `atendimentos_ibfk_6` (`atendimento_id`),
  ADD KEY `fki_atendimentos_ibfk_3` (`status`);

--
-- Índices para tabela `atend_codif`
--
ALTER TABLE `atend_codif`
  ADD PRIMARY KEY (`atendimento_id`,`servico_id`),
  ADD KEY `atend_codif_ibfk_2` (`servico_id`);

--
-- Índices para tabela `atend_meta`
--
ALTER TABLE `atend_meta`
  ADD PRIMARY KEY (`atendimento_id`,`name`);

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cargos_mod_perm`
--
ALTER TABLE `cargos_mod_perm`
  ADD PRIMARY KEY (`cargo_id`,`modulo_id`),
  ADD KEY `cargos_mod_perm_ibfk_2` (`modulo_id`);

--
-- Índices para tabela `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`chave`);

--
-- Índices para tabela `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`unidade_id`);

--
-- Índices para tabela `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direita` (`direita`),
  ADD KEY `esqdir` (`esquerda`,`direita`),
  ADD KEY `esquerda` (`esquerda`);

--
-- Índices para tabela `historico_atendimentos`
--
ALTER TABLE `historico_atendimentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historico_atendimentos_ibfk_1` (`prioridade_id`),
  ADD KEY `historico_atendimentos_ibfk_2` (`unidade_id`,`servico_id`),
  ADD KEY `historico_atendimentos_ibfk_4` (`usuario_id`),
  ADD KEY `historico_atendimentos_ibfk_5` (`usuario_tri_id`),
  ADD KEY `historico_atendimentos_ibfk_6` (`atendimento_id`);

--
-- Índices para tabela `historico_atend_codif`
--
ALTER TABLE `historico_atend_codif`
  ADD PRIMARY KEY (`atendimento_id`,`servico_id`),
  ADD KEY `historico_atend_codif_ibfk_2` (`servico_id`);

--
-- Índices para tabela `historico_atend_meta`
--
ALTER TABLE `historico_atend_meta`
  ADD PRIMARY KEY (`atendimento_id`,`name`);

--
-- Índices para tabela `locais`
--
ALTER TABLE `locais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `local_serv_nm` (`nome`);

--
-- Índices para tabela `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modulos_chave` (`chave`);

--
-- Índices para tabela `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`access_token`);

--
-- Índices para tabela `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Índices para tabela `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`refresh_token`);

--
-- Índices para tabela `paineis`
--
ALTER TABLE `paineis`
  ADD PRIMARY KEY (`host`),
  ADD KEY `paineis_ibfk_1` (`unidade_id`);

--
-- Índices para tabela `paineis_servicos`
--
ALTER TABLE `paineis_servicos`
  ADD PRIMARY KEY (`host`,`servico_id`),
  ADD KEY `paineis_servicos_ibfk_2` (`unidade_id`,`servico_id`);

--
-- Índices para tabela `painel_senha`
--
ALTER TABLE `painel_senha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `painel_senha_ibfk_1` (`unidade_id`),
  ADD KEY `painel_senha_ibfk_2` (`servico_id`);

--
-- Índices para tabela `prioridades`
--
ALTER TABLE `prioridades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicos_ibfk_1` (`macro_id`);

--
-- Índices para tabela `serv_meta`
--
ALTER TABLE `serv_meta`
  ADD PRIMARY KEY (`servico_id`,`name`);

--
-- Índices para tabela `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `unidades_grupo_id_fkey` (`grupo_id`);

--
-- Índices para tabela `uni_meta`
--
ALTER TABLE `uni_meta`
  ADD PRIMARY KEY (`unidade_id`,`name`);

--
-- Índices para tabela `uni_serv`
--
ALTER TABLE `uni_serv`
  ADD PRIMARY KEY (`unidade_id`,`servico_id`),
  ADD KEY `uni_serv_ibfk_2` (`servico_id`),
  ADD KEY `uni_serv_ibfk_3` (`local_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Índices para tabela `usu_grup_cargo`
--
ALTER TABLE `usu_grup_cargo`
  ADD PRIMARY KEY (`usuario_id`,`grupo_id`),
  ADD KEY `usu_grup_cargo_ibfk_2` (`grupo_id`),
  ADD KEY `usu_grup_cargo_ibfk_3` (`cargo_id`);

--
-- Índices para tabela `usu_meta`
--
ALTER TABLE `usu_meta`
  ADD PRIMARY KEY (`usuario_id`,`name`);

--
-- Índices para tabela `usu_serv`
--
ALTER TABLE `usu_serv`
  ADD PRIMARY KEY (`unidade_id`,`servico_id`,`usuario_id`),
  ADD KEY `usu_serv_ibfk_1` (`servico_id`,`unidade_id`),
  ADD KEY `usu_serv_ibfk_2` (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `atend_codif`
--
ALTER TABLE `atend_codif`
  MODIFY `atendimento_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `locais`
--
ALTER TABLE `locais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `painel_senha`
--
ALTER TABLE `painel_senha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `prioridades`
--
ALTER TABLE `prioridades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cargos_mod_perm`
--
ALTER TABLE `cargos_mod_perm`
  ADD CONSTRAINT `cargos_mod_perm_ibfk_1` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`),
  ADD CONSTRAINT `cargos_mod_perm_ibfk_2` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`);

--
-- Limitadores para a tabela `contador`
--
ALTER TABLE `contador`
  ADD CONSTRAINT `contador_ibfk_1` FOREIGN KEY (`unidade_id`) REFERENCES `unidades` (`id`);

--
-- Limitadores para a tabela `paineis`
--
ALTER TABLE `paineis`
  ADD CONSTRAINT `paineis_ibfk_1` FOREIGN KEY (`unidade_id`) REFERENCES `unidades` (`id`);

--
-- Limitadores para a tabela `paineis_servicos`
--
ALTER TABLE `paineis_servicos`
  ADD CONSTRAINT `paineis_servicos_ibfk_1` FOREIGN KEY (`host`) REFERENCES `paineis` (`host`),
  ADD CONSTRAINT `paineis_servicos_ibfk_2` FOREIGN KEY (`unidade_id`,`servico_id`) REFERENCES `uni_serv` (`unidade_id`, `servico_id`);

--
-- Limitadores para a tabela `painel_senha`
--
ALTER TABLE `painel_senha`
  ADD CONSTRAINT `painel_senha_ibfk_1` FOREIGN KEY (`unidade_id`) REFERENCES `unidades` (`id`),
  ADD CONSTRAINT `painel_senha_ibfk_2` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`macro_id`) REFERENCES `servicos` (`id`);

--
-- Limitadores para a tabela `unidades`
--
ALTER TABLE `unidades`
  ADD CONSTRAINT `unidades_grupo_id_fkey` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`);

--
-- Limitadores para a tabela `uni_serv`
--
ALTER TABLE `uni_serv`
  ADD CONSTRAINT `uni_serv_ibfk_1` FOREIGN KEY (`unidade_id`) REFERENCES `unidades` (`id`),
  ADD CONSTRAINT `uni_serv_ibfk_2` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`),
  ADD CONSTRAINT `uni_serv_ibfk_3` FOREIGN KEY (`local_id`) REFERENCES `locais` (`id`);

--
-- Limitadores para a tabela `usu_grup_cargo`
--
ALTER TABLE `usu_grup_cargo`
  ADD CONSTRAINT `usu_grup_cargo_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `usu_grup_cargo_ibfk_2` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`),
  ADD CONSTRAINT `usu_grup_cargo_ibfk_3` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`);

--
-- Limitadores para a tabela `usu_serv`
--
ALTER TABLE `usu_serv`
  ADD CONSTRAINT `usu_serv_ibfk_1` FOREIGN KEY (`servico_id`,`unidade_id`) REFERENCES `uni_serv` (`servico_id`, `unidade_id`),
  ADD CONSTRAINT `usu_serv_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
