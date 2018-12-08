-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2018 às 14:32
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `idAdm` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `matricula` int(11) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`idAdm`, `nome`, `email`, `senha`, `matricula`, `telefone`) VALUES
(1, 'IF Goiano', 'adm@gmail.com', '123', 333131, '123456789');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `idAlunos` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `data` date NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `curso` varchar(25) NOT NULL,
  `matricula` int(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `sexo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`idAlunos`, `nome`, `email`, `senha`, `data`, `cpf`, `curso`, `matricula`, `telefone`, `sexo`) VALUES
(1, 'Bruno Geovane', 'bruno@gmail.com', '123', '1999-12-25', 8888, 'Sistemas de InformaÃ§Ã£o', 111367362, '72878424', 'masculino'),
(2, 'debora rosa', 'debora@gmail.com', '123', '1958-02-02', 536152361, 'quimica', 6736271, 'telefone', 'feminino'),
(6, 'wagner', 'wagner@gmail.com', '123', '1955-04-05', 7482734, 'Sistemas de InformaÃ§Ã£o', 42423, '4324234', 'masculino'),
(7, 'Leo', 'leo@gmail.com', '123', '1953-03-04', 526352, 'Sistemas de InformaÃ§Ã£o', 366725382, '6273628', 'masculino'),
(8, 'eu', 'eu@gmail.com', '123', '1956-04-06', 627343, 'Sistemas de InformaÃ§Ã£o', 467427842, '336247843', 'masculino'),
(9, ' lucas faria', 'lucas@gmail.com', '123', '1954-03-04', 562632563, 'Sistemas de InformaÃ§Ã£o', 62874323, '2763783', 'masculino'),
(10, 'lucass', 'lucas@gmail.com', '123', '1953-03-04', 56567, 'Sistemas de InformaÃ§Ã£o', 677567567, '5675', 'masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela`
--

CREATE TABLE `tabela` (
  `idTabela` int(11) NOT NULL,
  `alunotabela` int(11) NOT NULL,
  `viagemtabela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabela`
--

INSERT INTO `tabela` (`idTabela`, `alunotabela`, `viagemtabela`) VALUES
(2, 1, 8),
(5, 7, 8),
(8, 9, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagem`
--

CREATE TABLE `viagem` (
  `idViagem` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `local` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `localsaida` varchar(30) NOT NULL,
  `horasaida` varchar(5) NOT NULL,
  `horachegada` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `viagem`
--

INSERT INTO `viagem` (`idViagem`, `descricao`, `local`, `data`, `localsaida`, `horasaida`, `horachegada`) VALUES
(8, 'lÃ¡ Ã© frio', 'russia', '2019-06-03', 'if goiano', '00:00', '00:00'),
(10, 'test', 'rialma', '2018-04-04', 'ceres', '13:00', '00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`idAdm`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`idAlunos`);

--
-- Indexes for table `tabela`
--
ALTER TABLE `tabela`
  ADD PRIMARY KEY (`idTabela`);

--
-- Indexes for table `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`idViagem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `idAlunos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabela`
--
ALTER TABLE `tabela`
  MODIFY `idTabela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `viagem`
--
ALTER TABLE `viagem`
  MODIFY `idViagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
