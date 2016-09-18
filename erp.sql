-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Set-2016 às 20:04
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id` int(5) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `sexo` char(1) NOT NULL,
  `nasc` date NOT NULL,
  `profissao` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(12) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `rg`, `sexo`, `nasc`, `profissao`, `endereco`, `cidade`, `bairro`, `estado`, `cep`, `celular`, `telefone`, `email`) VALUES
(1, 'Tiago Góes da Silva', '43420147856', '391690954', 'M', '1994-03-03', 'Analista de Sistemas', 'Campos Sales ', 'Cachoeira Paulista', 'Margem Esquerda', 'sp', '12630000', '12 981918216', '12 31032082', 'tiago.goes2009@hotmail.com'),
(2, 'Tiago Góes da Silva', '43420147856', '391690954', 'M', '1994-03-03', 'Analista de Sistemas', 'Arthur Barbosa', 'Cachoeira Paulista', 'Vila armem', 'sp', '12630000', '12 981918216', '12 31032082', 'tiago.goes2009@hotmail.com'),
(3, 'Tiago Góes da Silva', '43420147856', '391690954', 'M', '1994-03-03', 'Analista de Sistemas', 'Arthur Barbosa', 'Cachoeira Paulista', 'Vila armem', 'sp', '12630000', '12 981918216', '12 31032082', 'tiago.goes2009@hotmail.com'),
(4, 'Tiago Góes da Silva', '43420147856', '391690954', 'M', '1994-03-03', 'Analista de Sistemas', 'Arthur Barbosa', 'Cachoeira Paulista', 'Vila armem', 'sp', '12630000', '12 981918216', '12 31032082', 'tiago.goes2009@hotmail.com'),
(5, 'Priscila Aparecida Silva Couto', '43420147856', '391690954', 'M', '1994-03-03', 'Analista de Sistemas', 'Campos Sales n390', 'cachoeira Paulista', 'Vila armem', 'ce', '12630000', '12 982048075', '12 98204807', 'pricouto_2007@hotmail.com'),
(6, 'Priscila Aparecida Silva Couto', '43420147856', '391690954', 'M', '1994-03-03', 'Analista de Sistemas', 'Campos Sales n390', 'cachoeira Paulista', 'Vila armem', 'ce', '12630000', '12 982048075', '12 98204807', 'pricouto_2007@hotmail.com'),
(7, 'Priscila Aparecida Silva Couto', '43420147856', '391690954', 'M', '1994-03-03', 'Analista de Sistemas', 'Campos Sales n390', 'cachoeira Paulista', 'Vila armem', 'ce', '12630000', '12 982048075', '12 98204807', 'pricouto_2007@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(5) NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `adm` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `adm`) VALUES
(1, 'tiago.goes2009@gmail.com', 'tiago', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
