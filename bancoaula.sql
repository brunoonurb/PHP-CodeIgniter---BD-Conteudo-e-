-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/05/2019 às 23:26
-- Versão do servidor: 10.1.30-MariaDB
-- Versão do PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancoaula`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(15) NOT NULL,
  `nome` varchar(15) DEFAULT NULL,
  `sobrenome` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `idade` int(15) DEFAULT NULL,
  `profissao` varchar(15) NOT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sobrenome`, `telefone`, `email`, `idade`, `profissao`, `cpf`, `data`) VALUES
(1, 'bruno', 'pedroso', '12231155', 'bruno@gmail.com', 23, 'operador', '00112233', '2019-05-08 20:10:18'),
(2, 'thiago', 'andrade', '5553333', 'thia@gmail.com', 31, 'confeiteiro', '2222222', '2019-05-08 20:13:08'),
(3, 'andre', 'macedo', '8888888', 'AN@gmail.com', 55, 'PEDREIRO', '45454545', '2019-05-08 20:13:08'),
(4, 'andre', 'macedo', '8888888', 'AN@gmail.com', 55, 'PEDREIRO', '45454545', '2019-05-08 20:13:11'),
(5, 'matheus', 'viana', '1212121', 'ma@gmail.com', 12, 'nada', '555654', '2019-05-08 20:16:52'),
(6, 'eric', 'rodrigues', '66565656', 'eric@gmail.com', 45, 'motorista', '55555', '2019-05-08 20:16:52'),
(7, 'joao', 'maria', '896633', 'joao@gmail.com', 32, 'padeiro', '4567878', '2019-05-08 20:18:15'),
(8, 'maria', 'jose', '5331000', 'maria@gmail.com', 23, 'dona de casa', '30015898', '2019-05-08 20:18:15'),
(9, 'holanda', 'garcia', '449890', 'holan@gmail.com', 25, 'atendente', '44900099', '2019-05-08 20:21:07'),
(10, 'marian ', 'oliveira ', '5500100', 'miri@gmail.com', 35, 'secretaria', '7799333', '2019-05-08 20:21:07'),
(11, 'holanda', 'garcia', '449890', 'holan@gmail.com', 25, 'atendente', '44900099', '2019-05-08 20:21:48'),
(12, 'juca', 'bala', '8933111', 'juca@gmail.com', 45, 'comediante', '8898133', '2019-05-08 20:31:08'),
(13, 'arlete', 'aparecida', '79898932', 'lete@gmail.com', 35, 'dona de casa', '566584877', '2019-05-08 20:31:08'),
(14, 'jose', 'onei', '8898844', 'nei@gmail.com', 49, 'carpinteiro', '990909778', '2019-05-08 20:31:08'),
(15, 'daniel', 'silva', '55646866', 'dani@gmail.com', 29, 'motorista', '884982323', '2019-05-08 20:31:08'),
(16, 'rodrigo', 'nemes', '7878223', 'ro@gmail.com', 20, 'colhedor', '7879985', '2019-05-08 20:31:08'),
(17, 'jessica', 'penasek', '67673432', 'jessi@gmail.com', 24, 'protetica', '545646587', '2019-05-08 20:31:08'),
(18, 'juliana', 'souza', '465456565', 'juli@gmail.com', 26, 'professora', '45566', '2019-05-08 20:31:08'),
(20, 'robson', 'souza', '456611', 'rob@gmail.com', 27, 'soldador', '544655454', '2019-05-08 20:31:08'),
(21, 'maria', 'heloisa', '78786855', 'he@gmail.com', 45, 'dentista', '4564654649', '2019-05-08 20:31:08'),
(22, 'carla', 'luz', '544549', 'car@gmail.com', 32, 'protetica', '454633431', '2019-05-08 20:31:08'),
(23, 'juca', 'bala', '8933111', 'juca@gmail.com', 45, 'comediante', '8898133', '2019-05-08 20:31:11'),
(24, 'arlete', 'aparecida', '79898932', 'lete@gmail.com', 35, 'dona de casa', '566584877', '2019-05-08 20:31:11'),
(25, 'jose', 'onei', '8898844', 'nei@gmail.com', 49, 'carpinteiro', '990909778', '2019-05-08 20:31:11'),
(26, 'daniel', 'silva', '55646866', 'dani@gmail.com', 29, 'motorista', '884982323', '2019-05-08 20:31:11'),
(31, 'rodrigo', 'nemes', '7878223', 'ro@gmail.com', 20, 'colhedor', '7879985', '2019-05-08 20:31:11'),
(32, 'jessica', 'penasek', '67673432', 'jessi@gmail.com', 24, 'protetica', '545646587', '2019-05-08 20:31:11'),
(33, 'juliana', 'souza', '465456565', 'juli@gmail.com', 26, 'professora', '45566', '2019-05-08 20:31:11'),
(34, 'robson', 'souza', '456611', 'rob@gmail.com', 27, 'soldador', '544655454', '2019-05-08 20:31:11'),
(35, 'maria', 'heloisa', '78786855', 'he@gmail.com', 45, 'dentista', '4564654649', '2019-05-08 20:31:11'),
(36, 'carla', 'luz', '544549', 'car@gmail.com', 32, 'protetica', '454633431', '2019-05-08 20:31:11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cliente` int(11) DEFAULT NULL,
  `id_jogo` int(11) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `compras`
--

INSERT INTO `compras` (`id`, `data`, `id_cliente`, `id_jogo`, `id_vendedor`, `quantidade`) VALUES
(1, '2019-05-08 20:37:20', 1, 2, 3, 1),
(2, '2019-05-08 20:37:20', 5, 20, 12, 8),
(3, '2019-05-08 20:37:20', 2, 19, 6, 2),
(4, '2019-05-08 20:37:20', 5, 7, 18, 3),
(5, '2019-05-08 20:37:20', 5, 3, 16, 1),
(6, '2019-05-08 20:37:20', 17, 4, 13, 2),
(7, '2019-05-08 20:37:20', 7, 16, 12, 2),
(8, '2019-05-08 20:37:20', 20, 2, 6, 1),
(9, '2019-05-08 20:37:20', 14, 1, 17, 5),
(10, '2019-05-08 20:37:20', 5, 6, 10, 2),
(11, '2019-05-08 20:37:20', 16, 18, 5, 3),
(12, '2019-05-08 20:37:20', 3, 4, 6, 3),
(13, '2019-05-08 20:37:20', 6, 8, 9, 4),
(14, '2019-05-08 20:37:20', 11, 11, 14, 2),
(15, '2019-05-08 20:37:20', 3, 5, 9, 3),
(16, '2019-05-08 20:37:20', 9, 7, 6, 3),
(17, '2019-05-08 20:37:20', 7, 8, 16, 4),
(18, '2019-05-08 20:37:20', 14, 14, 6, 3),
(19, '2019-05-08 20:37:20', 17, 5, 6, 3),
(20, '2019-05-08 20:37:20', 16, 6, 2, 2),
(21, '2019-05-08 20:37:23', 1, 2, 3, 1),
(22, '2019-05-08 20:37:23', 5, 20, 12, 8),
(23, '2019-05-08 20:37:23', 2, 19, 6, 2),
(24, '2019-05-08 20:37:23', 5, 7, 18, 3),
(25, '2019-05-08 20:37:23', 5, 3, 16, 1),
(26, '2019-05-08 20:37:23', 17, 4, 13, 2),
(27, '2019-05-08 20:37:23', 7, 16, 12, 2),
(28, '2019-05-08 20:37:23', 20, 2, 6, 1),
(29, '2019-05-08 20:37:23', 14, 1, 17, 5),
(30, '2019-05-08 20:37:23', 5, 6, 10, 2),
(31, '2019-05-08 20:37:23', 16, 18, 5, 3),
(32, '2019-05-08 20:37:23', 3, 4, 6, 3),
(33, '2019-05-08 20:37:23', 6, 8, 9, 4),
(34, '2019-05-08 20:37:23', 11, 11, 14, 2),
(35, '2019-05-08 20:37:23', 3, 5, 9, 3),
(36, '2019-05-08 20:37:23', 9, 7, 6, 3),
(37, '2019-05-08 20:37:23', 7, 8, 16, 4),
(38, '2019-05-08 20:37:23', 14, 14, 6, 3),
(39, '2019-05-08 20:37:23', 17, 5, 6, 3),
(40, '2019-05-08 20:37:23', 16, 6, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `rua` varchar(15) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(15) DEFAULT NULL,
  `cidade` varchar(15) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `endereco`
--

INSERT INTO `endereco` (`id`, `rua`, `numero`, `bairro`, `cidade`, `estado`) VALUES
(1, 'Rua 444', '1545', 'Morretes', 'Itapema', 'Santa Catarina'),
(2, 'Rua Beto', '4545', 'Jardin', 'Penha', 'Santa Catarina'),
(3, 'Rua maranhao', '56', 'Gaivota', 'Busque', 'Santa Catarina'),
(4, 'Rua Piquiri', '656', 'Holinda', 'Florianopolis', 'Santa Catarina'),
(5, 'Rua Goias', '4656', 'Barigui', 'Curitiba', 'Parana'),
(6, 'Rua Umuarama', '454', 'Batel', 'Curitiba', 'Parana'),
(7, 'Rua Matheus Lem', '5889', 'Sao Lorenço', 'Curitiba', 'Parana'),
(8, 'Rua Nilo', '899', 'Abranges', 'Curitiba', 'Parana'),
(9, 'Rua Dom Joao', '52', 'Jardim', 'Curitiba', 'Parana'),
(10, 'Rua Sete', '584', 'Holanda', 'Curitiba', 'Parana'),
(11, 'Av Paulista', '565', 'Sao Andre', 'SAo Pulo', 'Sao Paulo'),
(12, 'Avenida Piaui', '5644', 'Tijucas', 'Rio Janeiro', 'Rio de Janeiro'),
(13, 'Avenida Hortis', '7884', 'Manaus', 'Campinas', 'Sao Paulo'),
(14, 'Avenida Jacare', '32', 'Irai', 'Sao Paulo', 'Sao Paulo'),
(15, 'Avenida Jardim', '898', 'Palmital', 'Colombo', 'Parana'),
(16, 'Rua uruguai', '21', 'Rio Claro', 'Rio Branco', 'Parana'),
(17, 'Avenida Umuaram', '4889', 'Macedo', 'Piraquara', 'Parana'),
(18, 'Avenida Holanda', '699', 'Natal', 'Campo Largo', 'Parana'),
(19, 'Avenida Rio Cla', '456', 'Holinda', 'Araucaria', 'Parana'),
(20, 'Avenida Tambe', '696', 'Tangua', 'Curitiba', 'Parana');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `nome` varchar(15) DEFAULT NULL,
  `genero` varchar(15) DEFAULT NULL,
  `plataforma` varchar(15) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `formato` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `jogos`
--

INSERT INTO `jogos` (`id`, `nome`, `genero`, `plataforma`, `valor`, `formato`) VALUES
(1, 'gta', 'acao', 'ks games', 120, 'digital'),
(2, 'joa e maria', 'avemtura', 'ks games', 100, 'digital'),
(3, 'voltis', 'avemtura', 'ks games', 60, 'digital'),
(4, 'fl aventuras', 'avemtura', 'ks games', 30, 'digital'),
(5, 'apex', 'tiro', 'ks games', 10, 'digital'),
(6, 'call duty', 'tiro', 'a games', 36, 'digital'),
(7, 'need for speed', 'corrida', 'r games', 54, 'digital'),
(8, 'burned', 'corrida', 'e games', 63, 'digital'),
(9, 'cars 2', 'corrida', 'd games', 85, 'digital'),
(10, 'mata o pato', 'tiro', 'b games', 150, 'digital'),
(11, 'enves', 'rpg', 'game juiz', 200, 'fisico'),
(12, 'conquiste', 'estrategia', 'game sa', 50, 'fisico'),
(13, 'caca leao', 'estrategia', 'game bus', 78, 'fisico'),
(14, 'tente se puder', 'raciocínio', 'game los', 213, 'fisico'),
(15, 'investigar ', 'estrategia', 'game nr', 12, 'fisico'),
(16, 'resolva isso', 'matematico', 'game pt', 213, 'fisico'),
(17, 'pula pula', 'passa tempo', 'game ps', 5, 'fisico'),
(18, 'olha isso', 'infantil', 'game hj', 56, 'fisico'),
(19, 'equacoes', 'matematica', 'game ppoo', 130, 'fisico'),
(20, 'ache a bola', 'infatil', 'game inf', 50, 'fisico');

-- --------------------------------------------------------

--
-- Estrutura para tabela `lojas`
--

CREATE TABLE `lojas` (
  `id` int(15) NOT NULL,
  `nome` varchar(15) DEFAULT NULL,
  `id_endereco` int(15) DEFAULT NULL,
  `cnpj` varchar(15) DEFAULT NULL,
  `telefone` int(15) DEFAULT NULL,
  `gerente` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `lojas`
--

INSERT INTO `lojas` (`id`, `nome`, `id_endereco`, `cnpj`, `telefone`, `gerente`) VALUES
(1, 'renner', 1, '4114545', 45555566, 'caio'),
(2, 'americana', 2, '21321321', 546411, 'gustavo'),
(3, 'Gamer ofice', 20, '2145465454', 45464684, 'mario'),
(4, 'Condor', 19, '12154543', 146545134, 'girson'),
(5, 'gamer black', 17, '4144643', 415415485, 'giane'),
(6, 'mercadorama', 16, '4546544', 54546546, 'robson'),
(7, 'rio verde', 17, '7989879878', 87988797, 'tais'),
(8, 'time games', 15, '12121321', 77987987, 'fabio'),
(9, 'impcto games', 14, '4655446545', 1231324787, 'basilio'),
(10, 'gamer mais', 13, '7879876', 54654543, 'kaique'),
(11, 'andre games', 2, '13214546', 97987987, 'andre'),
(12, 'joao games', 3, '41521321321', 321321321, 'joao'),
(13, 'maria games', 4, '7987879', 465465465, 'maria'),
(14, 'kauan', 5, '1231321321', 321321321, 'kauan'),
(15, 'julininho games', 6, '787879799', 464654545, 'junior'),
(16, 'juju games', 7, '21321321', 654654, 'juliana'),
(17, 'games taty', 8, '454654654', 323212, 'tatyane'),
(18, 'games rosilda', 9, '757465434', 234544854, 'rose'),
(19, 'ricardo game', 10, '21213485', 2358, 'ricardo'),
(20, 'gamer tudo', 11, '4547846545', 242222412, 'zezinho');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `id` int(15) NOT NULL,
  `nome` varchar(15) DEFAULT NULL,
  `sobrenome` varchar(15) DEFAULT NULL,
  `id_endereco` int(15) DEFAULT NULL,
  `salario` float DEFAULT NULL,
  `turno` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `vendedor`
--

INSERT INTO `vendedor` (`id`, `nome`, `sobrenome`, `id_endereco`, `salario`, `turno`) VALUES
(1, 'Joao', 'maria', 1, 899, 'Noite'),
(2, 'Joao', 'rodrigues', 2, 500, 'Noite'),
(3, 'mariana', 'hortis', 5, 2.556, 'Noite'),
(4, 'Julio', 'cessar', 20, 5.222, 'Noite'),
(5, 'ygor', 'mariano', 19, 200, 'Noite'),
(6, 'kauan', 'silva', 4, 10, 'Tarde'),
(7, 'amauri', 'fagundes', 5, 120, 'Tarde'),
(8, 'marcos', 'zinber', 17, 4.5, 'Tarde'),
(9, 'giula', 'lorena', 16, 1.02, 'Tarde'),
(10, 'eric', 'queroz', 15, 1.225, 'Tarde'),
(11, 'carlo', 'macedo', 14, 1000, 'manha'),
(12, 'juliana', 'nunes', 6, 3, 'manha'),
(13, 'zezinho', 'lemes', 7, 2.32, 'manha'),
(14, 'andre', 'borges', 8, 2.305, 'manha'),
(15, 'rodrigo', 'lemes', 8, 10, 'manha/noite'),
(16, 'jessica', 'silva', 9, 8, 'manha/noite'),
(17, 'fabricio', 'moreira', 10, 900, 'manha/noite'),
(18, 'dirceu', 'barbosa', 14, 2.13, 'manha/noite'),
(19, 'holanda', 'garcia', 12, 4260, 'manha/noite'),
(20, 'francisco', 'diniz', 13, 5020, 'manha/noite');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `lojas`
--
ALTER TABLE `lojas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `lojas`
--
ALTER TABLE `lojas`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
