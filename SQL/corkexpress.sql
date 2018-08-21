-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Ago-2018 às 03:31
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 1, 'admin', 'admin', 'admin@admin.admin', 'Nilton Fontes', 'Rua Admin nºAdmin R/C Admin', 1, 1, 99999999, 999999999, '99999999999999999999', '99999999999', 999999999, '5000'),
(3, 2, 'emmar', '111', 'ines.schamberg@gmail.com', 'Emma M Reed', 'Lynnwood, Washington(WA), 98037', 2, 2, 538821220, 538821220, '538821220', '538821220', 360301133, '56025'),
(4, 2, 'jaqline', '11111', 'maribel_smi@yahoo.com', 'Jacqueline A Pond', '4703 West Street Wyoming, Michigan(MI), 49548', 2, 2, 366682542, 366682542, '366682542', '366682542', 517360445, '56528'),
(5, 2, 'sthparker', '111', 'alvena.dibbe@yahoo.com', 'Stephen H Parker', '1716 Jarvisville Road New York, New York(NY), 10010', 2, 3, 65806589, 65806589, '065806589', '065806589', 917748957, '5875'),
(6, 2, 'gmd', '111', 'jeica1977@hotmail.com', 'Gregory M Desjardins', '892 Lamberts Branch Road Doral, Florida(FL), 33166', 2, 2, 286524873, 286524873, '286524873', '286524873', 286524873, '5471'),
(11, 2, 'cwl', '111', 'maurine1999@gmail.com', 'Carl W Langer', '4306 Stonecoal Road Bucyrus, Ohio(OH), 44820', 2, 2, 353598444, 353598444, '353598444', '353598444', 353598444, '7845'),
(12, 2, 'dcf', '111', 'chad.ohar7@hotmail.com', 'Daniel C Friley', '1215 Charles Street Plymouth, Michigan(MI), 48170', 2, 2, 705365382, 705365382, '705365382', '705365382', 705365382, '784'),
(14, 2, 'mah', '111', 'rebecca.goyet@gmail.com', 'Margaret A Hanson', '4289 Driftwood Road Fremont, California(CA), 94539', 2, 2, 408702317, 408702317, '408702317', '408702317', 408702317, '1568'),
(15, 2, 'epc', '111', 'helga1989@hotmail.com', 'Eileen P Cashin', '2206 Badger Pond Lane Tampa, Florida(FL), 33602', 2, 2, 864107007, 864107007, '864107007', '864107007', 864107007, '2356');

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
  MODIFY `func_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
