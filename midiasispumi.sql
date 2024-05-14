-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/04/2024 às 21:22
-- Versão do servidor: 8.0.37
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `midiasispumi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `id_adm` int NOT NULL,
  `login_adm` varchar(60) NOT NULL,
  `senha_adm` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrossel`
--

CREATE TABLE `carrossel` (
  `id_carrossel` int NOT NULL,
  `titulo_carrossel` varchar(60) DEFAULT NULL,
  `subtitulo_carrossel` varchar(60) DEFAULT NULL,
  `imagem_carrossel` text NOT NULL,
  `link_carrossel` text NOT NULL,
  `status_carrossel` int NOT NULL,
  `id_adm` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `carrossel`
--

INSERT INTO `carrossel` (`id_carrossel`, `titulo_carrossel`, `subtitulo_carrossel`, `imagem_carrossel`, `link_carrossel`, `status_carrossel`, `id_adm`) VALUES
(2, 'UMA IMPRESSIONANTE COISA', 'Atualizações direto da nuvem para nossos usuários', 'https://i.pinimg.com/564x/b4/ea/e7/b4eae7b2b0cd369aafc42530cf328a43.jpg', 'fsdafsdaf', 1, NULL),
(3, 'O que tem além das estrelas', 'Nossos especialistas descubriram coisas incriveis sobre isso', 'https://i.pinimg.com/564x/d6/99/fc/d699fceb840d20b1963cca0772275691.jpg', 'dsfasfdaf', 1, NULL),
(4, 'Por que jovens vivem menos', 'Tantos idosos nas ruas só podem significar uma coisa', 'https://i.pinimg.com/564x/80/56/7b/80567bc09dce90f23a5716f2ce969c36.jpg', 'fdsafsdafsdaf', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int NOT NULL,
  `titulo_noticia` varchar(45) NOT NULL,
  `texto_noticia` text NOT NULL,
  `imagem_noticia` text NOT NULL,
  `link_noticia` text,
  `status_noticia` int NOT NULL,
  `adm_id_adm` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo_noticia`, `texto_noticia`, `imagem_noticia`, `link_noticia`, `status_noticia`, `adm_id_adm`) VALUES
(1, 'Notica de agora', 'havia uma barata na careca do vovo assim que el a me viu bateu asas e voou 1233 casas, sem asas perderam seus maos agora nao tem como voltar , ar dfadfdasf da ulta masdtasd agora perderam seu pao.', 'https://i.pinimg.com/564x/cc/02/49/cc02498409e5a21e6ebee880d43e6cb6.jpg', 'https://br.pinterest.com/pin/1337074887489127/', 1, NULL),
(2, 'Carro pacota e fica fofo', 'Carro em auta velocidade perde controle e fica todo fofinho quando se envergonha, as autoridades disseram que o fato de ser um carro rosa influencia bastante já que o rosa é uma cor que tras delicadeza e feminilidade', 'https://i.pinimg.com/564x/f5/47/2f/f5472fa56bc13f239ead616d64decbef.jpg', 'https://br.pinterest.com/pin/13440498880657310/', 1, NULL),
(3, 'Morreu hoje, Relampago MCqueen', 'Nesta sextafeira de abril morre dia 21 relampago marquinhos amigo da vizinhança, o  carro ja estava passando por dificuldades na sua saude e tava tendo problemas para ligar o motor, os vizinhos alegam que toda noite pedia para fazer chupeta e manter seu motor aquecido, mas não foi suficiente', 'https://i.pinimg.com/564x/40/28/5d/40285d01f9cc54e2493ae3dcd6acad72.jpg', 'https://br.pinterest.com/pin/2955556000521802/', 1, NULL),
(4, 'Protese braçal', 'Uma nova moda na área da tecnologia da superação de deficiencias comuns, o braço de tubarão é uma nova customisação corporal  e está disponivel em diferentes lojas, pode ser uma nova era meus amigos.', 'https://i.pinimg.com/564x/06/1a/44/061a44aa6a3471513aa5189bb6dd9eac.jpg', 'https://br.pinterest.com/pin/703756185210651/', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `servico`
--

CREATE TABLE `servico` (
  `id_servico` int NOT NULL,
  `nm_servico` varchar(45) NOT NULL,
  `desc_servico` varchar(255) NOT NULL,
  `imagem_servico` text,
  `link_servico` text,
  `status_servico` int NOT NULL,
  `adm_id_adm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices de tabela `carrossel`
--
ALTER TABLE `carrossel`
  ADD PRIMARY KEY (`id_carrossel`),
  ADD KEY `id_adm` (`id_adm`);

--
-- Índices de tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `adm_id_adm` (`adm_id_adm`);

--
-- Índices de tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_servico`),
  ADD KEY `adm_id_adm` (`adm_id_adm`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `carrossel`
--
ALTER TABLE `carrossel`
  MODIFY `id_carrossel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `carrossel`
--
ALTER TABLE `carrossel`
  ADD CONSTRAINT `carrossel_ibfk_1` FOREIGN KEY (`id_adm`) REFERENCES `adm` (`id_adm`);

--
-- Restrições para tabelas `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`adm_id_adm`) REFERENCES `adm` (`id_adm`);

--
-- Restrições para tabelas `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`adm_id_adm`) REFERENCES `adm` (`id_adm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
