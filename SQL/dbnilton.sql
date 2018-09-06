-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Set-2018 às 20:40
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
  `func_salario` decimal(5,0) NOT NULL,
  `func_idturno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`func_id`, `func_tipo`, `func_user`, `func_pass`, `func_email`, `func_nome`, `func_morada`, `func_idnacio`, `func_idnatur`, `func_bi`, `func_nif`, `func_nib`, `func_niss`, `func_contacto`, `func_salario`, `func_idturno`) VALUES
(1, 1, 'admin', 'admin', 'admin@corckexpress.com', 'Nilton Fontes', 'Rua Admin nºAdmin R/C Admin', 1, 1, 99999999, 999999999, '99999999999999999999', '99999999999', 999999999, '5000', 1),
(3, 2, 'emmar', '111', 'ines.schamberg@gmail.com', 'Emma M Reed', 'Lynnwood, Washington(WA), 98037', 2, 2, 538821220, 538821220, '538821220', '538821220', 360301133, '56025', 3),
(4, 2, 'jaqline', '11111', 'maribel_smi@yahoo.com', 'Jacqueline A Pond', '4703 West Street Wyoming, Michigan(MI), 49548', 2, 2, 366682542, 366682542, '366682542', '366682542', 517360445, '56528', 3),
(5, 2, 'sthparker', '111', 'alvena.dibbe@yahoo.com', 'Stephen H Parker', '1716 Jarvisville Road New York, New York(NY), 10010', 2, 3, 65806589, 65806589, '065806589', '065806589', 917748957, '5875', 2),
(6, 2, 'gmd', '111', 'jeica1977@hotmail.com', 'Gregory M Desjardins', '892 Lamberts Branch Road Doral, Florida(FL), 33166', 2, 2, 286524873, 286524873, '286524873', '286524873', 286524873, '5471', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nacionalidade`
--

CREATE TABLE `nacionalidade` (
  `paisId` tinyint(3) UNSIGNED NOT NULL,
  `paisNome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nacionalidade`
--

INSERT INTO `nacionalidade` (`paisId`, `paisNome`) VALUES
(1, 'AFEGANISTÃO'),
(2, 'ACROTÍRI E DECELIA'),
(3, 'ÁFRICA DO SUL'),
(4, 'ALBÂNIA'),
(5, 'ALEMANHA'),
(6, 'AMERICAN SAMOA'),
(7, 'ANDORRA'),
(8, 'ANGOLA'),
(9, 'ANGUILLA'),
(10, 'ANTÍGUA E BARBUDA'),
(11, 'ANTILHAS NEERLANDESAS'),
(12, 'ARÁBIA SAUDITA'),
(13, 'ARGÉLIA'),
(14, 'ARGENTINA'),
(15, 'ARMÉNIA'),
(16, 'ARUBA'),
(17, 'AUSTRÁLIA'),
(18, 'ÁUSTRIA'),
(19, 'AZERBAIJÃO'),
(20, 'BAHAMAS'),
(21, 'BANGLADECHE'),
(22, 'BARBADOS'),
(23, 'BARÉM'),
(24, 'BASSAS DA ÍNDIA'),
(25, 'BÉLGICA'),
(26, 'BELIZE'),
(27, 'BENIM'),
(28, 'BERMUDAS'),
(29, 'BIELORRÚSSIA'),
(30, 'BOLÍVIA'),
(31, 'BÓSNIA E HERZEGOVINA'),
(32, 'BOTSUANA'),
(33, 'BRASIL'),
(34, 'BRUNEI DARUSSALAM'),
(35, 'BULGÁRIA'),
(36, 'BURQUINA FASO'),
(37, 'BURUNDI'),
(38, 'BUTÃO'),
(39, 'CABO VERDE'),
(40, 'CAMARÕES'),
(41, 'CAMBOJA'),
(42, 'CANADÁ'),
(43, 'CATAR'),
(44, 'CAZAQUISTÃO'),
(45, 'CENTRO-AFRICANA REPÚBLICA'),
(46, 'CHADE'),
(47, 'CHILE'),
(48, 'CHINA'),
(49, 'CHIPRE'),
(50, 'COLÔMBIA'),
(51, 'COMORES'),
(52, 'CONGO'),
(53, 'CONGO REPÚBLICA DEMOCRÁTICA'),
(54, 'COREIA DO NORTE'),
(55, 'COREIA DO SUL'),
(56, 'COSTA DO MARFIM'),
(57, 'COSTA RICA'),
(58, 'CROÁCIA'),
(59, 'CUBA'),
(60, 'DINAMARCA'),
(61, 'DOMÍNICA'),
(62, 'EGIPTO'),
(63, 'EMIRADOS ÁRABES UNIDOS'),
(64, 'EQUADOR'),
(65, 'ERITREIA'),
(66, 'ESLOVÁQUIA'),
(67, 'ESLOVÉNIA'),
(68, 'ESPANHA'),
(69, 'ESTADOS UNIDOS'),
(70, 'ESTÓNIA'),
(71, 'ETIÓPIA'),
(72, 'FAIXA DE GAZA'),
(73, 'FIJI'),
(74, 'FILIPINAS'),
(75, 'FINLÂNDIA'),
(76, 'FRANÇA'),
(77, 'GABÃO'),
(78, 'GÂMBIA'),
(79, 'GANA'),
(80, 'GEÓRGIA'),
(81, 'GIBRALTAR'),
(82, 'GRANADA'),
(83, 'GRÉCIA'),
(84, 'GRONELÂNDIA'),
(85, 'GUADALUPE'),
(86, 'GUAM'),
(87, 'GUATEMALA'),
(88, 'GUERNSEY'),
(89, 'GUIANA'),
(90, 'GUIANA FRANCESA'),
(91, 'GUINÉ'),
(92, 'GUINÉ EQUATORIAL'),
(93, 'GUINÉ-BISSAU'),
(94, 'HAITI'),
(95, 'HONDURAS'),
(96, 'HONG KONG'),
(97, 'HUNGRIA'),
(98, 'IÉMEN'),
(99, 'ILHA BOUVET'),
(100, 'ILHA CHRISTMAS'),
(101, 'ILHA DE CLIPPERTON'),
(102, 'ILHA DE JOÃO DA NOVA'),
(103, 'ILHA DE MAN'),
(104, 'ILHA DE NAVASSA'),
(105, 'ILHA EUROPA'),
(106, 'ILHA NORFOLK'),
(107, 'ILHA TROMELIN'),
(108, 'ILHAS ASHMORE E CARTIER'),
(109, 'ILHAS CAIMAN'),
(110, 'ILHAS COCOS (KEELING)'),
(111, 'ILHAS COOK'),
(112, 'ILHAS DO MAR DE CORAL'),
(113, 'ILHAS FALKLANDS (ILHAS MALVINAS)'),
(114, 'ILHAS FEROE'),
(115, 'ILHAS GEÓRGIA DO SUL E SANDWICH DO SUL'),
(116, 'ILHAS MARIANAS DO NORTE'),
(117, 'ILHAS MARSHALL'),
(118, 'ILHAS PARACEL'),
(119, 'ILHAS PITCAIRN'),
(120, 'ILHAS SALOMÃO'),
(121, 'ILHAS SPRATLY'),
(122, 'ILHAS VIRGENS AMERICANAS'),
(123, 'ILHAS VIRGENS BRITÂNICAS'),
(124, 'ÍNDIA'),
(125, 'INDONÉSIA'),
(126, 'IRÃO'),
(127, 'IRAQUE'),
(128, 'IRLANDA'),
(129, 'ISLÂNDIA'),
(130, 'ISRAEL'),
(131, 'ITÁLIA'),
(132, 'JAMAICA'),
(133, 'JAN MAYEN'),
(134, 'JAPÃO'),
(135, 'JERSEY'),
(136, 'JIBUTI'),
(137, 'JORDÂNIA'),
(138, 'KIRIBATI'),
(139, 'KOWEIT'),
(140, 'LAOS'),
(141, 'LESOTO'),
(142, 'LETÓNIA'),
(143, 'LÍBANO'),
(144, 'LIBÉRIA'),
(145, 'LÍBIA'),
(146, 'LISTENSTAINE'),
(147, 'LITUÂNIA'),
(148, 'LUXEMBURGO'),
(149, 'MACAU'),
(150, 'MACEDÓNIA'),
(151, 'MADAGÁSCAR'),
(152, 'MALÁSIA'),
(153, 'MALAVI'),
(154, 'MALDIVAS'),
(155, 'MALI'),
(156, 'MALTA'),
(157, 'MARROCOS'),
(158, 'MARTINICA'),
(159, 'MAURÍCIA'),
(160, 'MAURITÂNIA'),
(161, 'MAYOTTE'),
(162, 'MÉXICO'),
(163, 'MIANMAR'),
(164, 'MICRONÉSIA'),
(165, 'MOÇAMBIQUE'),
(166, 'MOLDÁVIA'),
(167, 'MÓNACO'),
(168, 'MONGÓLIA'),
(169, 'MONTENEGRO'),
(170, 'MONTSERRAT'),
(171, 'NAMÍBIA'),
(172, 'NAURU'),
(173, 'NEPAL'),
(174, 'NICARÁGUA'),
(175, 'NÍGER'),
(176, 'NIGÉRIA'),
(177, 'NIUE'),
(178, 'NORUEGA'),
(179, 'NOVA CALEDÓNIA'),
(180, 'NOVA ZELÂNDIA'),
(181, 'OMÃ'),
(182, 'PAÍSES BAIXOS'),
(183, 'PALAU'),
(184, 'PALESTINA'),
(185, 'PANAMÁ'),
(186, 'PAPUÁSIA-NOVA GUINÉ'),
(187, 'PAQUISTÃO'),
(188, 'PARAGUAI'),
(189, 'PERU'),
(190, 'POLINÉSIA FRANCESA'),
(191, 'POLÓNIA'),
(192, 'PORTO RICO'),
(193, 'PORTUGAL'),
(194, 'QUÉNIA'),
(195, 'QUIRGUIZISTÃO'),
(196, 'REINO UNIDO'),
(197, 'REPÚBLICA CHECA'),
(198, 'REPÚBLICA DOMINICANA'),
(199, 'ROMÉNIA'),
(200, 'RUANDA'),
(201, 'RÚSSIA'),
(202, 'SAHARA OCCIDENTAL'),
(203, 'SALVADOR'),
(204, 'SAMOA'),
(205, 'SANTA HELENA'),
(206, 'SANTA LÚCIA'),
(207, 'SANTA SÉ'),
(208, 'SÃO CRISTÓVÃO E NEVES'),
(209, 'SÃO MARINO'),
(210, 'SÃO PEDRO E MIQUELÃO'),
(211, 'SÃO TOMÉ E PRÍNCIPE'),
(212, 'SÃO VICENTE E GRANADINAS'),
(213, 'SEICHELES'),
(214, 'SENEGAL'),
(215, 'SERRA LEOA'),
(216, 'SÉRVIA'),
(217, 'SINGAPURA'),
(218, 'SÍRIA'),
(219, 'SOMÁLIA'),
(220, 'SRI LANCA'),
(221, 'SUAZILÂNDIA'),
(222, 'SUDÃO'),
(223, 'SUÉCIA'),
(224, 'SUÍÇA'),
(225, 'SURINAME'),
(226, 'SVALBARD'),
(227, 'TAILÂNDIA'),
(228, 'TAIWAN'),
(229, 'TAJIQUISTÃO'),
(230, 'TANZÂNIA'),
(231, 'TERRITÓRIO BRITÂNICO DO OCEANO ÍNDICO'),
(232, 'TERRITÓRIO DAS ILHAS HEARD E MCDONALD'),
(233, 'TIMOR-LESTE'),
(234, 'TOGO'),
(235, 'TOKELAU'),
(236, 'TONGA'),
(237, 'TRINDADE E TOBAGO'),
(238, 'TUNÍSIA'),
(239, 'TURKS E CAICOS'),
(240, 'TURQUEMENISTÃO'),
(241, 'TURQUIA'),
(242, 'TUVALU'),
(243, 'UCRÂNIA'),
(244, 'UGANDA'),
(245, 'URUGUAI'),
(246, 'USBEQUISTÃO'),
(247, 'VANUATU'),
(248, 'VENEZUELA'),
(249, 'VIETNAME'),
(250, 'WALLIS E FUTUNA'),
(251, 'ZÂMBIA'),
(252, 'ZIMBABUÉ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `naturalidade`
--

CREATE TABLE `naturalidade` (
  `idNatur` int(11) NOT NULL,
  `nomeNatur` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `naturalidade`
--

INSERT INTO `naturalidade` (`idNatur`, `nomeNatur`) VALUES
(1, 'Porto'),
(2, 'Lisboa'),
(3, 'Guarda'),
(4, 'Madrid');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turno`
--

CREATE TABLE `turno` (
  `turno_id` int(11) NOT NULL,
  `turno_nome` varchar(10) NOT NULL,
  `turno_perc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turno`
--

INSERT INTO `turno` (`turno_id`, `turno_nome`, `turno_perc`) VALUES
(1, 'Manha', 1),
(2, 'Tarde', 1.5),
(3, 'Noite', 3);

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
-- Indexes for table `nacionalidade`
--
ALTER TABLE `nacionalidade`
  ADD PRIMARY KEY (`paisId`);

--
-- Indexes for table `naturalidade`
--
ALTER TABLE `naturalidade`
  ADD PRIMARY KEY (`idNatur`);

--
-- Indexes for table `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`turno_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `func_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nacionalidade`
--
ALTER TABLE `nacionalidade`
  MODIFY `paisId` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
--
-- AUTO_INCREMENT for table `naturalidade`
--
ALTER TABLE `naturalidade`
  MODIFY `idNatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `turno`
--
ALTER TABLE `turno`
  MODIFY `turno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
