-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2020 às 00:19
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbmve`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbart`
--

CREATE TABLE `tbart` (
  `codArt` int(11) NOT NULL,
  `descArt` varchar(500) NOT NULL,
  `codPeriod` int(11) NOT NULL,
  `codCategory` int(11) NOT NULL,
  `codAuthor` int(11) NOT NULL,
  `titleArt` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbart`
--

INSERT INTO `tbart` (`codArt`, `descArt`, `codPeriod`, `codCategory`, `codAuthor`, `titleArt`) VALUES
(17, 'Astrônomos do MIT registraram um sinal repetido a 500 milhões de anos-luz de distância chamados de rajadas rápidas de rádio. Ninguém sabe quais são suas fontes. Pode ser um quasar giratório ou um buraco negro supermassivo, mas uma tecnologia alienígena também não está fora de cogitação.', 5, 2, 13, 'Registro de Rajadas'),
(18, 'A Missão Gaia vem trabalhando na produção de um modelo 3D da nossa galáxia e em obter um número mais apurado da quantidade de estrelas que ela tem. Antes, acreditava-se que havia 1 bilhão, mas pode haver entre 400 e 700 bilhões delas!', 5, 1, 12, 'Missão Gaia'),
(19, 'Um planeta foi descoberto na missão Kepler pela NASA, o planeta gira ao redor de dois sóis. O par de estrelas está a 200 anos-luz de distância da Terra. O planeta que as orbita se chama Kepler 16b.', 5, 4, 11, 'Planeta Kepler 16B'),
(20, 'O planeta Júpiter é maior que todos os outros planetas do sistema solar juntos, esse planeta tem uma tempestade massiva conhecida por grande mancha vermelha e atualmente caberia uma terra dentro dessa mancha.', 4, 4, 11, 'Mancha Vermelha de Júpiter'),
(21, 'O algoritmo que foi capaz de contabilizar os dados obtidos pelos telescópios e gerar a imagem do buraco negro foi criado, em 2016, é chamado de CHIRP que foi capaz de sobrepor todos os 5pentabytes de dados copilados pelos oito radiotelescópios potentes ao redor do mundo. ', 5, 2, 14, 'Imagem do Buraco Negro'),
(22, 'É a teoria que coloca o Sol, em sua apresentação inicial, estacionário no centro do universo; ou em sentido estrito, situado aproximadamente no centro do Sistema Solar, no caso do heliocentrismo renascentista. Àquela época, Nicolau Copérnico foi o primeiro a apresentar um modelo consistente e completo de um sistema heliocêntrico. O modelo foi mais tarde aprimorado', 4, 5, 15, 'Sistema Heliocentrico'),
(23, 'Considerado figura-chave da revolução científica do século XVII. Kepler provou o movimento elíptico dos planetas em torno do sol. Leis de Kepler:\r\n<br>\r\n1° “Lei das Órbitas”: onde os planetas descrevem órbitas elípticas em torno do Sol.\r\n<br>\r\n2° “Lei das Áreas”: os segmentos (raio vetor) que unem o sol aos planetas correspondem a áreas e intervalos de tempo iguais.\r\n<br>\r\n3°: “Lei dos Períodos”: aponta a existência da relação entre a distância de cada planeta e seu período de Translação', 4, 5, 16, 'Leis de Kepler'),
(24, 'Hubble estudou nebulosas dentro da Via Láctea.  Em 1923, Hubble descobriu estrelas cefeidas na nebulosa de Andrómeda. As flutuações na luz dessas estrelas permitiram que determinasse a distância da nebulosa, usando a relação entre o período das flutuações das cefeides e a sua luminosidade. A estimativa colocou a Andrómeda a cerca de 900000 anos-luz de distância (atualmente, sabe-se que Andrómeda ainda está mais distante de nós). ', 5, 4, 17, 'Descoberta Nebulosas'),
(25, 'Os Anéis de Saturno foram observados pela primeira vez em julho de 1610, sendo o mérito de Galileu Galilei. Aqueles apêndices estranhos não variaram sua posição em relação a Saturno de uma noite para outra.\r\nInicialmente, os astrônomos propuseram que seriam asas com satélites naturais de Saturno, mais tarde, foi sugerido que os apêndices eram o sinal visível de um disco da matéria finamente e lisos, separado do planeta e tinham no plano equatorial.', 4, 7, 18, 'Anéis de Saturno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbauthor`
--

CREATE TABLE `tbauthor` (
  `codAuthor` int(11) NOT NULL,
  `nameAuthor` varchar(50) NOT NULL,
  `nationalityAuthor` varchar(30) NOT NULL,
  `bornDate` date NOT NULL,
  `deathDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbauthor`
--

INSERT INTO `tbauthor` (`codAuthor`, `nameAuthor`, `nationalityAuthor`, `bornDate`, `deathDate`) VALUES
(1, 'Mariana Santos', 'Armênia', '1987-10-20', NULL),
(2, 'David Avenue', 'Ilhas Malvinas', '1980-05-08', NULL),
(3, 'Jackeline Paula', 'Bahamas', '1983-03-24', NULL),
(4, 'Samuel Guerra', 'Arábia Saudita', '1970-02-17', '2003-05-08'),
(5, 'Matheus Borges', 'Azerbaijão', '1910-11-03', '1945-07-11'),
(8, 'Kayan Souza', 'Brasil', '1700-06-10', '2021-04-06'),
(11, 'NASA', 'Estados Unidos', '1958-10-01', NULL),
(12, 'ESA Agência Espacial Europeia', 'França', '1975-05-30', NULL),
(13, 'MIT', 'Estados Unidos', '1861-04-10', NULL),
(14, 'Katie Bouman', 'Estados Unidos', '1989-05-09', NULL),
(15, 'Nicolau Copérnico', 'Polônia', '1473-02-19', '1543-05-24'),
(16, 'Johannes Kleper', 'Alemanha', '1571-12-27', '1630-11-15'),
(17, 'Edwin Powell Hubble', 'Estados Unidos', '1889-02-02', '1953-05-03'),
(18, 'Galileu Galilei', 'Itália', '1564-02-15', '1642-01-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategory`
--

CREATE TABLE `tbcategory` (
  `codCategory` int(11) NOT NULL,
  `nameCategory` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcategory`
--

INSERT INTO `tbcategory` (`codCategory`, `nameCategory`) VALUES
(1, 'Estrela'),
(2, 'Buraco Negro'),
(3, 'Nave Espacial'),
(4, 'Nebulosa'),
(5, 'Heliocentrismo'),
(7, 'Via Láctea');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbimage`
--

CREATE TABLE `tbimage` (
  `codImage` int(11) NOT NULL,
  `descImage` varchar(50) NOT NULL,
  `pathImage` varchar(100) NOT NULL,
  `codArt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbimage`
--

INSERT INTO `tbimage` (`codImage`, `descImage`, `pathImage`, `codArt`) VALUES
(19, 'Astrônomos do MIT registraram um sinal repetido a ', 'images/rajadas.jpg', 17),
(20, 'A Missão Gaia vem trabalhando na produção de um mo', 'images/missao gaia.jpg', 18),
(21, 'Um planeta foi descoberto na missão Kepler pela NA', 'images/planeta kepler.png', 19),
(22, 'O planeta Júpiter é maior que todos os outros plan', 'images/mancha jups.jpg', 20),
(23, 'O algoritmo que foi capaz de contabilizar os dados', 'images/buraco negro.jpg', 21),
(24, 'É a teoria que coloca o Sol, em sua apresentação i', 'images/sistemasheliocentrico.png', 22),
(25, 'Considerado figura-chave da revolução científica d', 'images/kepler.jpg', 23),
(26, 'Hubble estudou nebulosas dentro da Via Láctea.  Em', 'images/nebulosas.png', 24),
(27, 'Os Anéis de Saturno foram observados pela primeira', 'images/aneis de saturno.jpg', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbperiod`
--

CREATE TABLE `tbperiod` (
  `codPeriod` int(11) NOT NULL,
  `namePeriod` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbperiod`
--

INSERT INTO `tbperiod` (`codPeriod`, `namePeriod`) VALUES
(1, 'Pré-História'),
(2, 'Idade Antiga'),
(3, 'Idade Média'),
(4, 'Idade Moderna'),
(5, 'Idade Contemporânea');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbart`
--
ALTER TABLE `tbart`
  ADD PRIMARY KEY (`codArt`),
  ADD KEY `fk_codPeriod` (`codPeriod`),
  ADD KEY `fk_codCategory` (`codCategory`),
  ADD KEY `fk_codAuthor` (`codAuthor`);

--
-- Índices para tabela `tbauthor`
--
ALTER TABLE `tbauthor`
  ADD PRIMARY KEY (`codAuthor`);

--
-- Índices para tabela `tbcategory`
--
ALTER TABLE `tbcategory`
  ADD PRIMARY KEY (`codCategory`);

--
-- Índices para tabela `tbimage`
--
ALTER TABLE `tbimage`
  ADD PRIMARY KEY (`codImage`),
  ADD KEY `fk_codArt` (`codArt`);

--
-- Índices para tabela `tbperiod`
--
ALTER TABLE `tbperiod`
  ADD PRIMARY KEY (`codPeriod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbart`
--
ALTER TABLE `tbart`
  MODIFY `codArt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `tbauthor`
--
ALTER TABLE `tbauthor`
  MODIFY `codAuthor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tbcategory`
--
ALTER TABLE `tbcategory`
  MODIFY `codCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbimage`
--
ALTER TABLE `tbimage`
  MODIFY `codImage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tbperiod`
--
ALTER TABLE `tbperiod`
  MODIFY `codPeriod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbart`
--
ALTER TABLE `tbart`
  ADD CONSTRAINT `tbart_ibfk_1` FOREIGN KEY (`codPeriod`) REFERENCES `tbperiod` (`codPeriod`),
  ADD CONSTRAINT `tbart_ibfk_2` FOREIGN KEY (`codCategory`) REFERENCES `tbcategory` (`codCategory`),
  ADD CONSTRAINT `tbart_ibfk_3` FOREIGN KEY (`codAuthor`) REFERENCES `tbauthor` (`codAuthor`);

--
-- Limitadores para a tabela `tbimage`
--
ALTER TABLE `tbimage`
  ADD CONSTRAINT `tbimage_ibfk_1` FOREIGN KEY (`codArt`) REFERENCES `tbart` (`codArt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
