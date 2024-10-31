-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jan-2020 às 22:53
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dados_sgdo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_dispensa`
--

CREATE TABLE `dados_dispensa` (
  `id` int(11) NOT NULL,
  `requerente` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `processo` varchar(9) NOT NULL,
  `situacao` varchar(20) NOT NULL,
  `localizacao` varchar(30) NOT NULL,
  `dispensa` varchar(9) DEFAULT NULL,
  `atividade` varchar(40) DEFAULT NULL,
  `municipio` varchar(20) DEFAULT NULL,
  `coordenadas` varchar(50) DEFAULT NULL,
  `pa` varchar(25) DEFAULT NULL,
  `bacia` varchar(20) DEFAULT NULL,
  `captacao` varchar(20) DEFAULT NULL,
  `lamina` varchar(9) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `obs` varchar(500) DEFAULT NULL,
  `excluido` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados_dispensa`
--

INSERT INTO `dados_dispensa` (`id`, `requerente`, `cpf`, `processo`, `situacao`, `localizacao`, `dispensa`, `atividade`, `municipio`, `coordenadas`, `pa`, `bacia`, `captacao`, `lamina`, `data`, `obs`, `excluido`) VALUES
(42, 'Luis Carlos Cruz da Silva', '', '0030/2017', 'ASSINADO', 'Caixa 10-4', '0004/2017', 'Consumo Humano', 'TarauÃ¡ca', 'S 10Âº20&#39;30', NULL, 'Rio JuruÃ¡', NULL, '2,90', '2017-07-05', 'Enviado Via CI 30/2017', 'N'),
(47, 'AbrÃ£o Paiva de Azevedo', '', '0627/2019', 'ASSINADO', 'Nucleo', '0555/2019', 'DessedentaÃ§Ã£o Animal', 'EpitaciolÃ¢ndia', 'S 10Âº59&#39;57.76', '', 'Rio Acre', '', '0,53', '2019-04-30', 'Memorando 011, 03/05/2019', 'N'),
(48, 'Maria Luiza Marques da Silva', '', '0668/2019', 'ASSINADO', 'Setor de Entrega', '0588/2019', 'DessedentaÃ§Ã£o Animal', 'PlÃ¡cido de Castro', 'S 10Âº00\'47,56\" O 67Âº03\'04.02\"', NULL, 'Rio AbunÃ£', NULL, '0,25', '2019-05-07', '', 'N'),
(50, 'Dorian Lessa Pinheiro do Vale', '', '0944/2019', 'ASSINADO', 'Caixa 2019-20', '0708/2019', 'DessedentaÃ§Ã£o Animal', 'AcrelÃ¢ndia', 'S 09Âº59&#39;7.10', NULL, 'Rio AbunÃ£', NULL, '2,01', '2019-05-29', 'Dispensa Entregue em 05/06/2019', 'N'),
(51, 'Deuzivan Feitosa de Queiroz', '60228121272', '0197/2018', 'EM ANALISE', 'Encaminhado para DGT', '0195/2018', 'DessedentaÃ§Ã£o', 'EpitaciolÃ¢ndia', 'S 11Âº01&#39;16.64&#39;&#39; O 68Âº38&#39;11.08&#3', '', 'Rio Acre', '', 'IgarapÃ©', '2018-03-07', '', 'N'),
(52, 'Lucio CÃ©sar Da Cunha', '', '0253/2018', 'ASSINADO', 'Setor de Entrega', '0542/2018', 'DessedentaÃ§Ã£o', 'Capixaba', 'S 10Âº36\'98.8\'\' O 68Âº41\'43.2\'\'', NULL, 'Rio Acre', NULL, '1,0', '2018-06-04', '', 'N'),
(53, 'Raimundo Nonato Mendes De Lima', '', '0305/2018', 'ASSINADO', 'Setor de Entrega', '0298/2018', 'DessedentaÃ§Ã£o', 'Rio Branco', 'S 09Âº49\'35.83\'\' O 67Âº42\'26.42\'\'', NULL, 'Rio Acre', NULL, '', '2018-03-27', '', 'N'),
(54, 'Antonio Vieira Lira', '', '0375/2018', 'ASSINADO', 'Setor de Entrega', '0300/2018', 'DessedentaÃ§Ã£o', 'Rio Branco', 'S 10Âº11\'34\'\' O 67Âº56\'36\'\'', NULL, 'Rio Acre', NULL, '0,16', '2018-03-23', '', 'N'),
(55, 'Alcione Nascimento de SÃ¡ ', '', '0478/2018', 'ASSINADO', 'Setor de Entrega', '0399/2018', 'DessedentaÃ§Ã£o', 'Bujari', 'S 09Âº47&#39;22.63&#39;&#39; O 68Âº15&#39;13.47&#3', 'P.A Balanceio', 'Rio Acre', '', '1,11', '2018-04-23', '', 'N'),
(56, 'Maria InÃªs Barboza de Oliveira de Almeida', '', '1822/2017', 'ASSINADO', 'Caixa 5-4', '0627/2017', 'DessedentaÃ§Ã£o', 'PlÃ¡cido de Castro', 'S 10Âº13\'34.37\'\' O 67Âº05\'34.03\'\'', NULL, 'Rio AbunÃ£', NULL, '0,25', '2017-10-27', 'Processo entregue', 'N'),
(57, 'Lucas Martins de Brito', '', '1875/2017', 'ASSINADO', 'Caixa 8-1', '0708/2017', 'DessedentaÃ§Ã£o', 'Porto Acre', 'S 09Âº37\'58\'\' O 67Âº31\'07\'\'', NULL, 'Rio Acre', NULL, '0,5', '2017-11-01', 'Processo entregue', 'N'),
(58, 'Ayris Lengruber Machado', '', '1943/2017', 'FALTA DADOS', 'Caixa 11-2', '', '', '', '', NULL, '', NULL, '', '0000-00-00', '', 'N'),
(59, 'Marta Milena do Nascimento Aguiar', '', '1998/2017', 'FALTA DADOS', 'Caixa 11-1', '', '', '', '', NULL, '', NULL, '', '0000-00-00', '', 'N'),
(60, 'Celso Garcia Lima', '', '2058/2017', 'ASSINADO', 'Caixa 8-2', '0849/2017', 'Psicultura', 'Porto Acre', 'S 09Âº41\'11.43\'\' O 67Âº38\'24.4\'\'', NULL, 'Rio Acre', NULL, '3,61', '2017-11-30', 'Processo entregue', 'N'),
(61, 'Eliene da Silva Lima', '', '0523/2016', 'ASSINADO', 'caixa 4', '0057/2016', 'Psicultura', 'Rio Branco', 'S 09Âº58\'16.91\'\' O 68Âº14\'1.87\'\'', NULL, 'Rio Acre', NULL, '0,9', '2016-04-11', 'Processo entregue', 'N'),
(62, 'Jaime Ribeiro de Oliveira', '', '1047/2016', 'ASSINADO', 'Setor de Entrega', '0149/2016', 'Psicultura', 'Porto Acre', '09Âº55\'21.80\" O 67Âº46\'13.70\"', NULL, 'Rio Acre', NULL, '0,30', '2016-07-21', '', 'N'),
(63, 'Igor Vinicius Oliveira da Silva', '', '1520/2016', 'ASSINADO', 'Setor de Entrega', '0255/2016', 'DessedentaÃ§Ã£o Animal', 'EpitaciolÃ¢ndia', 'S 11Âº01\'30.01\" O 68Âº40\'48.17\"', NULL, 'RIo Acre', NULL, '0,10', '2016-11-11', '', 'N'),
(65, 'Kevin Rimet', '', '2424/2021', 'EM ANALISE', 'Mesa de Analise', '', '', 'ACRELÃ‚NDIA', '', '', '', 'SELECIONE O TIPO DE ', '', '0000-00-00', '', 'N'),
(67, 'Luiz Henrique', '', '0001/2015', 'FALTA DADOS', 'Caixa 10-4', '', '', 'XAPURI', '', '', '', 'SELECIONE O TIPO DE ', '', '0000-00-00', '', 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_outorga`
--

CREATE TABLE `dados_outorga` (
  `id` int(9) NOT NULL,
  `requerente` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `processo` varchar(9) NOT NULL,
  `situacao` varchar(20) NOT NULL,
  `caixa` varchar(15) NOT NULL,
  `coordenadas` varchar(100) DEFAULT 'NULL',
  `outorga` varchar(9) DEFAULT NULL,
  `atividade` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `municipio` varchar(20) CHARACTER SET utf16 DEFAULT NULL,
  `bacia` varchar(30) DEFAULT NULL,
  `rio` varchar(20) DEFAULT NULL,
  `captacao` varchar(50) DEFAULT NULL,
  `zona` varchar(7) DEFAULT NULL,
  `volume_a` varchar(15) DEFAULT NULL,
  `volume_d` varchar(15) DEFAULT NULL,
  `vazao_h` varchar(15) DEFAULT NULL,
  `hora_d` varchar(15) DEFAULT NULL,
  `dia_m` varchar(20) DEFAULT NULL,
  `meses_a` varchar(20) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `validade` varchar(30) DEFAULT NULL,
  `excluido` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados_outorga`
--

INSERT INTO `dados_outorga` (`id`, `requerente`, `cpf`, `processo`, `situacao`, `caixa`, `coordenadas`, `outorga`, `atividade`, `municipio`, `bacia`, `rio`, `captacao`, `zona`, `volume_a`, `volume_d`, `vazao_h`, `hora_d`, `dia_m`, `meses_a`, `data`, `validade`, `excluido`) VALUES
(2, 'FlÃ¡vio Maia Cardoso', '01924963280', '0333/2015', 'ASSINADO', 'Caixa 10', '10Â°16&#39;23,58&#34;S e 67Â°39&#39;52,64&#34;W', '0001/2015', 'IrrigaÃ§Ã£o', 'Senador Guiomard', 'Rio Acre', 'Rio Iquiri', 'CaptaÃ§Ã£o Superficial', 'RURAL', '10', '5.784,8', '289,24', '20', '30', 'Janeiro a Dezembro', '2015-05-05', '2 (dois) anos', 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'luizhenrique.almeida', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'rodrigo.henning', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados_dispensa`
--
ALTER TABLE `dados_dispensa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `processo` (`processo`);

--
-- Índices para tabela `dados_outorga`
--
ALTER TABLE `dados_outorga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `processo` (`processo`),
  ADD UNIQUE KEY `coordenadas` (`coordenadas`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_dispensa`
--
ALTER TABLE `dados_dispensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `dados_outorga`
--
ALTER TABLE `dados_outorga`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
