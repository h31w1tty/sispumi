-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 19-Jun-2024 às 22:01
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `login_adm`, `senha_adm`) VALUES
(2, 'admin', 'admin');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `carrossel`
--

INSERT INTO `carrossel` (`id_carrossel`, `titulo_carrossel`, `subtitulo_carrossel`, `imagem_carrossel`, `link_carrossel`, `status_carrossel`, `id_adm`) VALUES
(14, 'Orla do Cibratel 2 ', 'Ganha novo trecho revitalizado!', './img/obras.jpg', 'www2.itanhaem.sp.gov.br/2024/05/21/orla-do-cibratel-2-ganha-novo-trecho-revitalizado/', 1, NULL),
(18, 'Avenida Flácides Ferreira começa a ganhar novo asfalto', 'A via será recuperada no trecho entre a Orla da Praia a Rodovia', './img/desc1.png', 'https://www2.itanhaem.sp.gov.br/2024/06/07/avenida-flacides-ferreira-comeca-a-ganhar-novo-asfalto/', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_noticia` varchar(60) NOT NULL,
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
(1, 'Itanhaém utiliza Beach Tennis como ferramenta', 'O Beach Tennis, esporte que combina elementos do tênis e do vôlei de praia, será utilizado como ferramenta terapêutica para promover a melhora da autoestima, o desenvolvimento da coordenação motora e a socialização dos alunos.\r\n\r\nAs aulas serão ministradas por profissionais qualificados e experientes no trabalho com crianças e adolescentes, garantindo um ambiente acolhedor e seguro.\r\n\r\nO programa Paradesporto, que atende crianças com deficiência oriundas das escolas municipais por meio de encaminhamentos realizados pelos professores de educação física, contará com a modalidade de beach tennis uma vez na semana.', './img/tenis.jpg', '', 1, NULL),
(2, 'Itanhaém reforça rondas escolares com novas viaturas', 'A Prefeitura de Itanhaém deu um importante passo para reforçar a segurança nas escolas do município com a entrega de duas novas viaturas modelo Mitsubishi L200 Triton à Guarda Civil Municipal (GCM).\r\n\r\nAs novas viaturas, destinadas pelo Governo Federal para o serviço de Ronda Escolar, fortalecerão as ações de patrulhamento, principalmente nos horários de entrada e saída dos alunos e servidores. As viaturas também servem de apoio para as atividades desenvolvidas pela GCM junto aos alunos das escolas municipais\r\n\r\nCom a entrega das novas viaturas, o total de veículos entregues para as atividades de segurança no município chega a 15 desde 2021.', './img/policia.jpg', '', 1, NULL),
(3, 'Nova Notícia', '<p>A 10ª edição da Semana Municipal do Brincar deste ano tem como tema “Vem pra roda no ritmo do brincar” e acontece até sábado (25). </p><p>O tema visa despertar a consciência coletiva para criar um mundo onde as crianças possam desfrutar do brincar de forma plena.</p>\r\n\r\n<P>O evento acontece anualmente desde 2015, sempre na última semana do mês de maio. Na programação deste ano haverá atividades nas escolas (confira a programação completa neste link ), oficinas e palestra.</p> O encerramento acontece no sábado (25), das 13 às 16 horas, na Boca da Barra, com a Arena Brincar, um espaço com diversas atividades para toda família.', './img/brincar.jpg', '', 1, NULL),
(5, 'Inauguração do Parque Turístico de Itanhaém!', 'O Parque Turístico e Multiuso será voltado para o lazer e entretenimento. Tera palco para eventos musicais e culturais, pista e amplo espaço para atividades físicas, playground, banheiros e salas administrativas, bancos, lixeiras, paisagismo e iluminação em LED.\r\n\r\nO Centro de Pesquisas e Educação Ambiental e o Banco de Mudas Nativas também estarão sediados no parque, disponibilizando mudas de árvores nativas da região para a população.\r\n\r\nA Feira Ambiental é uma oportunidade para os munícipes conhecerem mais sobre práticas sustentáveis.\r\n\r\nA programação de aniversário de Itanhaém também inclui outras atividades, como shows, apresentações culturais, torneios esportivos e atividades para crianças. A programação completa pode ser consultada no site da Prefeitura de Itanhaém.', './img/amazonia.jpg', '', 1, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `nm_servico`, `desc_servico`, `imagem_servico`, `link_servico`, `status_servico`, `adm_id_adm`) VALUES
(1, 'Óticas em Itanhaém ', 'Confira os descontos disponibilizados pela ótica, através do site a seguir!', './img/otica.jpg', 'https://www.oticasmarina.com.br/', 1, NULL),
(2, 'Plano de saúde', 'Confira os serviços disponibilizados, através do site a seguir!', './img/plano-saude.jpg', 'https://www.unimed.coop.br/site/', 1, NULL),
(3, 'Plano Odontologico   ', 'Confira os descontos disponibilizados pela clínica odontologica, através do site a seguir!', './img/dentista.jpg', 'https://sorridents.com.br/unidade/itanhaem', 1, NULL);

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
