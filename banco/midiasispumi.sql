-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Maio-2024 às 01:33
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
CREATE DATABASE IF NOT EXISTS `midiasispumi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `carrossel`
--

INSERT INTO `carrossel` (`id_carrossel`, `titulo_carrossel`, `subtitulo_carrossel`, `imagem_carrossel`, `link_carrossel`, `status_carrossel`, `id_adm`) VALUES
(2, 'UMA IMPRESSIONANTE COISA', 'Atualizações direto da nuvem para nossos usuários', 'https://i.pinimg.com/564x/b4/ea/e7/b4eae7b2b0cd369aafc42530cf328a43.jpg', 'fsdafsdaf', 1, NULL),
(3, 'Hinata e Tobio', 'Sem brigas e agora parceiros', 'https://i.pinimg.com/564x/d6/99/fc/d699fceb840d20b1963cca0772275691.jpg', 'pudim.com.br', 1, NULL),
(9, 'Adote um Gato!', 'Visite nosso local de adoção novo em Itanhaém!!', 'https://i.pinimg.com/564x/6a/6a/b0/6a6ab0085553d784988068c7f458ef9b.jpg', 'adote.com.br', 1, NULL),
(10, 'slide 4', 'slide pra quebrar o site', 'https://i.pinimg.com/564x/35/e5/42/35e5420a775520d404da63c8efbf31b2.jpg', 'https://www.adote.com.br', 0, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo_noticia`, `texto_noticia`, `imagem_noticia`, `link_noticia`, `status_noticia`, `adm_id_adm`) VALUES
(2, 'Carro pacota e fica fofo', 'Carro em auta velocidade perde controle e fica todo fofinho quando se envergonha, as autoridades disseram que o fato de ser um carro rosa influencia bastante já que o rosa é uma cor que tras delicadeza e feminilidade', 'https://i.pinimg.com/564x/f5/47/2f/f5472fa56bc13f239ead616d64decbef.jpg', 'https://br.pinterest.com/pin/13440498880657310/', 1, NULL),
(3, 'Morreu hoje, Relampago MCqueen', 'Nesta sextafeira de abril morre dia 21 relampago marquinhos amigo da vizinhança, o  carro ja estava passando por dificuldades na sua saude e tava tendo problemas para ligar o motor, os vizinhos alegam que toda noite pedia para fazer chupeta e manter seu motor aquecido, mas não foi suficiente', 'https://i.pinimg.com/564x/40/28/5d/40285d01f9cc54e2493ae3dcd6acad72.jpg', 'https://br.pinterest.com/pin/2955556000521802/', 1, NULL),
(4, 'Protese braçal', 'Uma nova moda na área da tecnologia da superação de deficiencias comuns, o braço de tubarão é uma nova customisação corporal  e está disponivel em diferentes lojas, pode ser uma nova era meus amigos.', 'https://i.pinimg.com/564x/06/1a/44/061a44aa6a3471513aa5189bb6dd9eac.jpg', 'https://br.pinterest.com/pin/703756185210651/', 1, NULL),
(5, 'Nova empresa de Ônibus em Itanhaém', '<p>Uma nova frota de veículos foi avistada vindo para Itanhaém pelas montanhas, testemunhas dizem ter visto o que se parece com uma frota de pelo menos 15 veiculos de grande porte se locomovendo na florensta adentro em direção a baixada santista, foi dito que a devastação da flora nessa rota forma um rastro que pode ser visto inclusive no google maps. </p><p>A prefeitura nao se manifestou quanto a isso mas garantiu nas suas publicações que a empresa não especificava se os onibus viriam pela estrada ou não.</p>', 'https://i.pinimg.com/564x/1e/16/2d/1e162dce35232ecfc6283166c7411cd0.jpg', 'https://facebook.com.br', 1, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `nm_servico`, `desc_servico`, `imagem_servico`, `link_servico`, `status_servico`, `adm_id_adm`) VALUES
(3, 'Serviço muito específico ', 'Um serviço diferenciado ta ligado', 'https://i.pinimg.com/564x/f6/1f/dd/f61fddc1cfb370c34d674b52341da8b2.jpg', 'https://www.google.com.br', 1, NULL),
(4, 'Dentista Genérico', 'Para você que gosta de ter um lindo sorriso! Aqui você encontra as melhores promoções do mercato.', 'https://i.pinimg.com/564x/a9/1c/26/a91c26531f82b59eb77222c4e2f75980.jpg', 'https://sorridents.com.br/', 1, NULL),
(5, 'OEM Condom - Forneçimento de Camisinhas', 'Pra você que trabalha no cabaré ou precisa de muitas camisinhas durante o mês, temos um fornecimento', 'https://condomssupplier.com/wp-content/uploads/elementor/thumbs/OEM-Condom-ptbt9cqj38dw2mgiaou40s472edi2b4f6hveej8gc8.png', 'https://condomssupplier.com/oem-condom/?gad_source=1&gclid=Cj0KCQjw6auyBhDzARIsALIo6v-z7o-9qAVFn2LslvZ-sdA_GNKildqgn_xJbWRFmm1vaHRAgB4hJdgaAiDuEALw_wcB', 1, NULL);

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
