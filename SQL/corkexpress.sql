-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jul-2018 às 22:33
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corkexpress`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `func_id` int(11) NOT NULL,
  `func_tipo` int(11) NOT NULL,
  `func_user` varchar(70) NOT NULL,
  `func_pass` varchar(70) NOT NULL,
  `func_email` varchar(70) NOT NULL,
  `func_nome` varchar(70) NOT NULL,
  `func_morada` varchar(200) NOT NULL,
  `func_idnacio` int(11) NOT NULL,
  `func_idnatur` int(11) NOT NULL,
  `func_bi` int(8) NOT NULL,
  `func_nif` int(9) NOT NULL,
  `func_nib` varchar(21) NOT NULL,
  `func_niss` varchar(11) NOT NULL,
  `func_contacto` int(9) NOT NULL,
  `func_salario` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`func_id`, `func_tipo`, `func_user`, `func_pass`, `func_email`, `func_nome`, `func_morada`, `func_idnacio`, `func_idnatur`, `func_bi`, `func_nif`, `func_nib`, `func_niss`, `func_contacto`, `func_salario`) VALUES
(1, 1, 'admin', 'admin', 'admin@admin.admin', 'Admin', 'Rua Admin nºAdmin R/C Admin', 1, 1, 99999999, 999999999, '99999999999999999999', '99999999999', 999999999, '5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`func_id`),
  ADD UNIQUE KEY `func_nib` (`func_nib`),
  ADD UNIQUE KEY `func_nif` (`func_nif`),
  ADD UNIQUE KEY `func_bi` (`func_bi`),
  ADD UNIQUE KEY `func_niss` (`func_niss`),
  ADD UNIQUE KEY `func_email` (`func_email`),
  ADD UNIQUE KEY `func_user` (`func_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `func_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
