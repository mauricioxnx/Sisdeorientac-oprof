-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Jan-2024 às 04:31
-- Versão do servidor: 5.5.45
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `orientacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comedio1`
--

DROP TABLE IF EXISTS `comedio1`;
CREATE TABLE IF NOT EXISTS `comedio1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `idCurso` int(255) NOT NULL,
  `mensalidade` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comedio1`
--

INSERT INTO `comedio1` (`id`, `nome`, `endereco`, `email`, `telefone`, `idCurso`, `mensalidade`) VALUES
(1, 'Mauricio', 'viana', 'mauriciomigue.mdm@gmail.com', '+244931038225', 1, '27.000kzs'),
(2, 'Nuno Mendes', 'viana', 'nunuo.mendes@gmail.com', '98765432345', 1, '37.000kzs'),
(3, 'Miguel123', 'maianga', 'miguel@gmail.com', '98765432345', 1, '37.000kzs'),
(4, 'Miguel123', 'cazenga', 'miguel@gmail.com', '+2449310354674', 4, '37.000kzs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `couniver1`
--

DROP TABLE IF EXISTS `couniver1`;
CREATE TABLE IF NOT EXISTS `couniver1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `idCurso` int(255) NOT NULL,
  `idmed` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `couniver1`
--

INSERT INTO `couniver1` (`id`, `nome`, `endereco`, `email`, `telefone`, `idCurso`, `idmed`) VALUES
(1, 'Mauricio', 'maianga', 'mauriciomigue.mdm@gmail.com', '+244931038225', 1, 1),
(2, 'Miguel123', 'viana', 'miguel@gmail.com', '+244931038225', 4, 2),
(3, 'Mauricio123', 'maianga', 'miguel@gmail.com', '+244931038225', 3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`idCurso`, `nome`) VALUES
(1, 'Informatica'),
(2, 'Saude'),
(3, 'Gestão'),
(4, 'Contabilidade'),
(5, 'Ciencia fisicas e biologias');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medio`
--

DROP TABLE IF EXISTS `medio`;
CREATE TABLE IF NOT EXISTS `medio` (
  `idmed` int(11) NOT NULL AUTO_INCREMENT,
  `instituicao` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `proprina` varchar(255) NOT NULL,
  `idCurso` int(11) NOT NULL,
  PRIMARY KEY (`idmed`),
  KEY `fk_medio_curso` (`idCurso`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medio`
--

INSERT INTO `medio` (`idmed`, `instituicao`, `endereco`, `proprina`, `idCurso`) VALUES
(1, 'intituto medio de viana', 'viana', '50000', 1),
(2, 'intituto medio de cazenga', 'cazenga', '50000', 1),
(3, 'intituto medio de cacuaco', 'cazenga', '50000', 1),
(4, 'intituto medio de maianga', 'maianga', '50000', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prof1`
--

DROP TABLE IF EXISTS `prof1`;
CREATE TABLE IF NOT EXISTS `prof1` (
  `idprof` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `idunver` int(11) NOT NULL,
  PRIMARY KEY (`idprof`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prof1`
--

INSERT INTO `prof1` (`idprof`, `nome`, `endereco`, `email`, `telefone`, `idCurso`, `idunver`) VALUES
(1, 'Mauricio', 'viana', 'mauriciomigue.mdm@gmail.com', '+244931038225', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `universidade`
--

DROP TABLE IF EXISTS `universidade`;
CREATE TABLE IF NOT EXISTS `universidade` (
  `idunver` int(11) NOT NULL AUTO_INCREMENT,
  `instituicao` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `idCurso` int(255) NOT NULL,
  `proprina` varchar(255) NOT NULL,
  PRIMARY KEY (`idunver`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `universidade`
--

INSERT INTO `universidade` (`idunver`, `instituicao`, `endereco`, `idCurso`, `proprina`) VALUES
(1, 'Universidade Jean piaget', 'viana', 1, '42500'),
(4, 'Unvirsidade Catolica de Angola', 'Maianga', 1, '50000'),
(5, 'Unvirsidade independente de angola', 'Benfica', 1, '37000'),
(6, 'Unvirsidade oscar riba', 'Belas', 1, '300000'),
(8, 'Unvirsidade Metodista', 'Belas', 1, '59000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `use_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `use_type`) VALUES
(1, 'Mauricio', 'mauriciomigue.mdm@gmail.com', '4297f44b13955235245b2497399d7a93', 'admin'),
(3, 'Miguel', 'miguel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(5, 'Fraternidade Mendes', 'fraternidade@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'user'),
(6, 'Miguel123', 'miguel@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(7, 'Mauricio123', 'mauriciomigue123.mdm@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(8, 'Miguel123', 'miguel@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', ''),
(9, 'Mauricio123', 'mauriciomiguel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `medio`
--
ALTER TABLE `medio`
  ADD CONSTRAINT `fk_medio_curso` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
