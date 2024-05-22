-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 22-Maio-2024 às 01:32
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `midiasispumi`
--
CREATE DATABASE IF NOT EXISTS `midiasispumi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `midiasispumi`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `login_adm` varchar(60) NOT NULL,
  `senha_adm` varchar(60) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrossel`
--

CREATE TABLE IF NOT EXISTS `carrossel` (
  `id_carrossel` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_carrossel` varchar(60) DEFAULT NULL,
  `subtitulo_carrossel` varchar(100) DEFAULT NULL,
  `imagem_carrossel` text NOT NULL,
  `link_carrossel` text NOT NULL,
  `status_carrossel` int(11) NOT NULL,
  `id_adm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_carrossel`),
  KEY `id_adm` (`id_adm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `carrossel`
--

INSERT INTO `carrossel` (`id_carrossel`, `titulo_carrossel`, `subtitulo_carrossel`, `imagem_carrossel`, `link_carrossel`, `status_carrossel`, `id_adm`) VALUES
(13, 'Noticia!', 'Notícia referente ao município!', './img/artesao.jpg', 'www2.itanhaem.sp.gov.br/2024/05/13/casa-do-artesao-esta-com-inscricoes-abertas-para-curso-de-customizacao-de-chinelos/#altoContraste', 1, NULL),
(14, 'Orla do Cibratel 2 ', 'Ganha novo trecho revitalizado!', './img/obras.jpg', 'www2.itanhaem.sp.gov.br/2024/05/21/orla-do-cibratel-2-ganha-novo-trecho-revitalizado/', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_noticia` varchar(45) NOT NULL,
  `texto_noticia` text NOT NULL,
  `imagem_noticia` text NOT NULL,
  `link_noticia` text,
  `status_noticia` int(11) NOT NULL,
  `adm_id_adm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_noticia`),
  KEY `adm_id_adm` (`adm_id_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE IF NOT EXISTS `servico` (
  `id_servico` int(11) NOT NULL AUTO_INCREMENT,
  `nm_servico` varchar(45) NOT NULL,
  `desc_servico` varchar(255) NOT NULL,
  `imagem_servico` text,
  `link_servico` text,
  `status_servico` int(11) NOT NULL,
  `adm_id_adm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_servico`),
  KEY `adm_id_adm` (`adm_id_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `carrossel`
--
ALTER TABLE `carrossel`
  ADD CONSTRAINT `carrossel_ibfk_1` FOREIGN KEY (`id_adm`) REFERENCES `adm` (`id_adm`);

--
-- Limitadores para a tabela `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`adm_id_adm`) REFERENCES `adm` (`id_adm`);

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`adm_id_adm`) REFERENCES `adm` (`id_adm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
