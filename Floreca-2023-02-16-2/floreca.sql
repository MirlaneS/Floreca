CREATE DATABASE IF NOT EXISTS `floreca` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `floreca`;

CREATE TABLE `cliente` (
  `idcliente` int(15) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cpf` char(14) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `datanascimento` date NOT NULL,
  `cep` char(9) NOT NULL,
  `numerocasa` smallint(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `cliente` (`idcliente`, `nome`, `telefone`, `cpf`, `rg`, `datanascimento`, `cep`, `numerocasa`, `email`, `status`) VALUES
(1, 'William Costa', '(21)97070-7070', '120157142-10', '15425798', '1987-04-15', '23036-060', 900, 'william@gmail.com', 'C'),
(2, 'Sue Costa', '21989247323', '17548215745', '12578954', '1994-02-15', '23036060', 96, 'sue@gmail.com', ''),
(3, 'Caio Luiz', '21980804545', '12315942012', '15632478', '2001-02-13', '23036060', 14, 'caio@outlook.com', '');

CREATE TABLE `contacts` (
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('sended','readed','responded','deleted') DEFAULT 'sended'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `cep` char(9) NOT NULL,
  `rua` varchar(60) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `uf` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`cep`, `rua`, `bairro`, `cidade`, `uf`) VALUES
('23085-610', 'Rua Padre Pauwels', 'Campo Grande', 'Rio de Janeiro', 'RJ'),
('26551-090', 'Travessa Elpidio', 'Cruzeiro do Sul', 'Mesquita', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(15) NOT NULL,
  `cpffuncionario` char(14) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `datanascimento` date DEFAULT NULL,
  `telefone` varchar(15) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `cep` char(9) NOT NULL,
  `numerocasa` smallint(6) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `cpffuncionario`, `nome`, `datanascimento`, `telefone`, `rg`, `cep`, `numerocasa`, `foto`, `email`) VALUES
(1, '14715412470', 'João Santos', '1990-09-06', '21985746525', '15425798', '21512170', 11, NULL, 'joaosantos@gmail.com'),
(2, '13215716310', 'Paula Luz', '1981-12-08', '21978495424', '12034587', '23036060', 10, NULL, 'paula@outlook.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemservico`
--

CREATE TABLE `itemservico` (
  `iditem` int(11) NOT NULL,
  `idservico` int(11) NOT NULL,
  `idprodecimento` int(11) NOT NULL,
  `data` date NOT NULL,
  `horario` varchar(30) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `itemservico`
--

INSERT INTO `itemservico` (`iditem`, `idservico`, `idprodecimento`, `data`, `horario`, `valor`) VALUES
(1, 2, 3, '2023-03-20', 'de 15:00 às 15:30h', 1000),
(2, 3, 1, '2023-04-25', 'de 15:00 às 15:30h', 500);

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimento`
--

CREATE TABLE `procedimento` (
  `idprocedimento` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `nomeprocedimento` varchar(60) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `procedimento`
--

INSERT INTO `procedimento` (`idprocedimento`, `nomeprocedimento`, `descricao`) VALUES
(1, 'Preenchimento Facial', 'É realizado com a aplicação do ácido hialurônico na pele.'),
(2, 'Radiofrequência', 'Tratamento eficaz contra flacidez e estimula o colágeno da pele.');

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nomecategoria` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categoria` (`idcategoria`, `nomecategoria`) VALUES
(1, 'Facial'),
(2, 'Corporal');


CREATE TABLE `servico` (
  `idservico` int(15) NOT NULL,
  `data` date NOT NULL,
  `horario` varchar(30) NOT NULL,
  `valor` double NOT NULL,
  `idcliente` int(15) NOT NULL,
  `idfuncionario` int(11) NOT NULL,
  `idprocedimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`idservico`, `data`, `horario`, `valor`, `idcliente`, `idfuncionario`, `idprocedimento`) VALUES
(1, '2022-12-05', 'de 15:00 às 15:30h', 0, 0, 1, 1),
(2, '2022-12-09', 'de 08:00 às 9:00h', 0, 0, 1, 2),
(3, '2022-12-06', 'de 07:00 às 08:00h', 0, 0, 2, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Índices para tabela `itemservico`
--
ALTER TABLE `itemservico`
  ADD PRIMARY KEY (`iditem`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idservico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `itemservico`
--
ALTER TABLE `itemservico`
  MODIFY `iditem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `idservico` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
