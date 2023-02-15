DROP DATABASE IF EXISTS floreca;

CREATE DATABASE IF NOT EXISTS `floreca` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `floreca`;

CREATE table `cliente` (
  `idcliente` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cpf` char(14) NOT NULL,
  `datanascimento` date NOT NULL,
  `cep` char(9) NOT NULL,
  `numerocasa` smallint(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `cliente` (
    `idcliente`,
    `nome`,
    `telefone`,
    `cpf`,
    `datanascimento`,
    `cep`,
    `numerocasa`,
    `email`,
    `status`
) VALUE (
    1,
    'William Costa',
    '(21)97070-7070',
    '120157142-10',
    '1987-04-15',
    '23036-060',
    900,
    'william@gmail.com',
    'Concluído'
);

CREATE TABLE `servico` (
  `idservico` int(11) NOT NULL,
  `data` date NOT NULL,
  `horario` varchar(30) NOT NULL,
  `valor` varchar(30) NOT NULL,
  `idcliente` varchar(30) NOT NULL,
  `idfuncionario` int(11) NOT NULL,
  `idprocedimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `servico` (
    `idservico`, 
    `data`, 
    `horario`, 
    `valor`, 
    `idcliente`,
    `idfuncionario`,
    `idprocedimento`
) VALUES

(1, '2022-12-05', 'de 15:00 às 15:30h', '', '', 1, 1),
(2, '2022-12-09', 'de 08:00 às 9:00h', '', '', 1, 2),
(3, '2022-12-06', 'de 07:00 às 08:00h', '', '', 2, 2);

-- CREATE TABLE `consultacliente` (
--   `idconsultacliente` int(11) NOT NULL,
--   `cadastro` int(11) NOT NULL, 
--   `idconsulta` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- INSERT INTO `consultacliente` (`idconsultacliente`, `cadastro`, `idconsulta`) VALUES
-- (1, 1, 1),
-- (2, 1, 2),
-- (3, 2, 3);

CREATE TABLE `endereco` (
  `cep` char(9) NOT NULL,
  `rua` varchar(60) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `uf` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `endereco` (
    `cep`,
    `rua`,
    `bairro`, 
    `cidade`, 
    `uf`
) VALUES

('23085-610', 'Rua Padre Pauwels', 'Campo Grande', 'Rio de Janeiro', 'RJ'),
('26551-090', 'Travessa Elpidio', 'Cruzeiro do Sul', 'Mesquita', 'RJ');

CREATE TABLE `funcionario` (
  `cpffuncionario` char(14) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `cep` char(9) NOT NULL,
  `numerocasa` smallint(6) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `funcionario` (
  `cpffuncionario`, 
  `nome`, 
  `telefone`, 
  `rg`,
  `cep`, 
  `numerocasa`,  
  `foto`, 
  `email`
) VALUES
('123', 'Mário Silva', '(21)9999-8888', '0001', '23085-610', 40,'vazio', ''),
('456', 'Gabriel Silva', '(21)9999-7777', '0002', '26551-090', 100,'vazio',''),
('789', 'Mariana Souza', '(21)9999-5555', '1234', '23085-610', 1820,'vazio','');

CREATE TABLE `contacts` (
  `name` VARCHAR(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `message` TEXT NOT NULL,
  `status` ENUM('sended', 'readed', 'responded', 'deleted') DEFAULT 'sended'
);

