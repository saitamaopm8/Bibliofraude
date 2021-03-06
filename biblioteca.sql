-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jun-2019 às 17:49
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `nomAut` varchar(100) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `nomAut`, `nacionalidade`) VALUES
(0, '', ''),
(4, 'Eça de Queirós', 'Brasil'),
(5, 'Jules Feiffer', 'EUA'),
(6, 'Muriel Barbery', 'França'),
(7, 'Allan Massie', 'Singapura'),
(8, 'Miguel Sousa Tavares', 'Portugal'),
(9, 'José Saramago', 'Portugal'),
(10, 'Júlio Dinis', 'Portugal'),
(11, 'Mario Vargas Llosa', 'Peru'),
(12, 'J.M.G.Le Clézio', 'França'),
(13, 'John Irving', 'EUA'),
(14, 'J.M. Simmel', 'Alemanha'),
(15, 'Dany Laferrière', 'Haiti'),
(16, 'Michael Ende', 'Alemanha'),
(17, 'Camilo Castelo Branco', 'Portugal'),
(18, 'Jack Kerouac', 'Canadá'),
(19, 'William Shakespeare', 'Inglaterra'),
(20, 'Gavino Ledda', 'Itália'),
(21, 'Jean Genet', 'França'),
(22, 'Gabriel García Márquez', 'Colômbia'),
(23, 'Júlio Verne', 'França'),
(24, 'Eric Zencey', 'EUA'),
(25, 'Italo Calvino', 'Itália'),
(27, 'Fernando Pessoa', 'Portugal'),
(28, 'Ernest Hemingway', 'EUA'),
(29, 'P.G. Wodehouse', 'Inglaterra'),
(30, 'Giovanni Boccaccio', 'Itália'),
(31, 'Jonathan Swift', 'Irlanda'),
(32, 'Calderón', 'Espanha'),
(33, 'Nagib Mahfuz', 'Arábia Saudita'),
(34, 'Pablo Neruda', 'Chile'),
(35, 'Honoré de Balzac', 'França'),
(36, 'Fiódor M. Dostoiévski', 'Rússia'),
(37, 'Martins Pena', 'Brasil'),
(38, 'Juan Rulfo', 'México'),
(39, 'Émile Zola', 'França'),
(40, 'Scott Fitzgerald', 'EUA'),
(41, 'Ondjaki', 'Angola'),
(42, 'Almeida Garrett', 'Portugal'),
(43, 'Anton Tchekhov', 'Rússia'),
(44, 'Stendhal', 'França'),
(45, 'Alexandre Dumas', 'França'),
(46, 'Richard Zimler', 'EUA'),
(47, 'Leon Uris', 'EUA'),
(48, 'E. L. Doctorow', 'EUA'),
(49, 'Kazuichi Hanawa', 'Japão'),
(50, 'Edward Lear', 'Inglaterra'),
(51, 'Stephen King', 'EUA'),
(52, 'Linda Sue Park', 'EUA'),
(53, 'Voltaire', 'França'),
(55, 'Franz Kafka', 'Alemanha'),
(56, 'Ipojuca Pontes', 'Brasil'),
(57, 'Robert Louis Stevenson', 'Escócia'),
(58, 'Salman Rushdie', 'Índia'),
(60, 'Guy de Maupassant', 'França'),
(61, 'Oscar Wilde', 'França'),
(62, 'Nelson Rodrigues', 'Brasil'),
(63, 'Charles Dickens', 'Inglaterra'),
(64, 'Ronaldo Antonelli', 'Brasil'),
(65, 'Graham Greene', 'Suiça'),
(66, 'Will Eisner', 'EUA'),
(67, 'Miguel de Cervantes', 'Espanha'),
(68, 'Katherine Mansfield', 'Nova Zelândia'),
(69, 'Howard Fast', 'EUA'),
(71, 'Edgar Allan Poe', 'EUA'),
(72, 'Raymond Chandler', 'EUA'),
(73, 'Aldemir Sobreira', 'Brasil'),
(74, 'Fiódor Dostoiévski', 'Rússia'),
(75, 'Italo Svevo', 'Itália'),
(76, 'Richard Bach', 'EUA'),
(77, 'Bocage', 'Portugal'),
(78, 'George Bernard Shaw', 'Irlanda'),
(79, 'Per Abbat', 'Espanha'),
(80, 'Paulo Schiller', 'Brasil'),
(81, 'Joseph Conrad', 'Ucrânia'),
(82, 'Wellington Srbek', 'Brasil'),
(83, 'Daniel Defoe', 'Inglaterra'),
(84, 'Sófocles', 'Grécia'),
(86, 'Emily Dickinson', 'EUA'),
(87, 'Fernando Portela', 'Brasil'),
(88, 'Erri de Luca', 'Itália'),
(89, 'Bertolt Brecht', 'Alemanha'),
(90, 'Dias Gomes', 'Brasil'),
(91, 'Ana Maria Machado', 'Brasil'),
(94, 'José Eduardo Agualusa', 'Angola'),
(95, 'António Lobo Antunes', 'Portugal'),
(96, 'Claire Merleau-Ponty', 'França'),
(97, 'Eduardo Campos', 'Brasil'),
(98, 'Victor Hugo', 'França'),
(99, 'Charles Perrault', 'França'),
(100, ' Annibal Hetem Júnior', 'Brasil'),
(101, 'Michel Tournier', 'França'),
(102, 'Margarite Yourcenar', 'França'),
(104, 'Molière', 'França'),
(105, 'Gil Vicente', 'Portugal'),
(106, 'Johann Wyss', 'Suiça'),
(107, 'Eugène Ionesco', 'Romênia'),
(108, 'Marina Tenório', 'Rússia'),
(109, 'Olga Reverbel', 'Brasil'),
(110, 'Suzanne Collins', 'EUA'),
(111, 'Gustave Flaubert', 'França'),
(112, 'Eduardo Galeano', 'Uruguai'),
(113, 'Liev Tolstói', 'Rússia'),
(114, 'Nikos Kazantzakis', 'Grécia'),
(115, 'Saša Stanišić', 'Alemanha'),
(116, 'H. G. Wells', 'Inglaterra'),
(117, 'Antonieta dias de morais', 'Brasil'),
(118, 'Ruth Rocha', 'Brasil'),
(119, 'Lygia Bojunga', 'Brasil'),
(120, 'Bruno Berlendis de Carvalho', 'Brasil'),
(121, 'Nikolai Gógol', 'Rússia'),
(122, 'Gianfrancesco Guarnieri', 'Itália'),
(123, 'Hermann Hesse', 'Alemanha'),
(124, 'César Mallorquí', 'Espanha'),
(125, 'Luigi Pirandello', 'Itália'),
(126, 'Ana Alonso', 'Espanha'),
(127, 'Maria Clara Machado', 'Brasil'),
(128, 'Osmar Lins', 'Brasil'),
(130, 'George R. R. Martin', 'EUA'),
(131, 'Ruth Salles', 'Brasil'),
(133, 'Nelson Piletti', 'Brasil'),
(134, 'Sábato Magaldi', 'Brasil'),
(135, 'Ariano Suassuna', 'Brasil'),
(136, 'Regina Cazaux Haydt', 'Brasil'),
(137, 'G. Humberto Barbosa', 'Brasil'),
(138, 'Antonio Callado', 'Brasil'),
(139, 'João Valdir', 'Brasil'),
(140, 'Guilherme Veiga', 'Brasil'),
(141, 'Edileuza Penha de Sousa', 'Brasil'),
(142, 'Antônio Joaquim Severino', 'Brasil'),
(143, 'Antônio Cândido de Mello e Souza', 'Brasil'),
(144, 'Marco Bagno', 'Brasil'),
(145, 'Ubiratan Aguiar', 'Brasil'),
(146, 'Anna Camps', 'Não Identificado'),
(147, 'Adriana De Oliveira Lima', 'Brasil'),
(148, 'Domingos Pellegrini', 'Brasil'),
(149, 'Ricardo Martins', 'Brasil'),
(150, 'Carlos Aurino Barroso Guedes', 'Brasil'),
(151, 'Juan Escámez Sánchez', 'Espanha'),
(152, 'Albertina Mitjáns Martínez', 'Brasil'),
(153, 'Bernard Lahire', 'França'),
(154, 'Ramón Gil ', 'Espanha'),
(155, 'Carmen Lozza', 'Brasil'),
(156, 'Eliane Ganem', 'Brasil'),
(157, 'Vera Lúcia Sabongi de Rossi', 'Brasil'),
(158, 'Martin Carnoy', 'Polônia'),
(159, 'Maria Carmen Villeia Rosa Tacca', 'Brasil'),
(160, 'Helena Nagamine Brandão', 'Brasil'),
(161, 'Fernando de Azevedo', 'Brasil'),
(162, 'Lauro de Oliveira Lima', 'Brasil'),
(163, ' Millôr Fernandes', 'Brasil'),
(164, 'Pablo Gentili ', 'Argentina'),
(165, 'Natalino Neves da Silva', 'Brasil'),
(166, 'Isabel de Oliveira e Silva', 'Brasil'),
(167, 'Neusa Sorrenti', 'Brasil'),
(168, 'Jorge Andrade', 'Brasil'),
(169, 'Julio Groppa Aquino', 'Brasil'),
(170, 'Bruno Pucci', 'Brasil'),
(171, 'Katia Helena Pereira', 'Brasil'),
(172, 'Joan Rué', 'Espanha'),
(173, 'Fernando José de Almeida', 'Brasil'),
(174, 'Roberto Atha', 'Brasil'),
(175, 'Fernando Moraes Fonseca Júnior', 'Brasil'),
(178, 'Aracy Lopes da Silva', 'Brasil'),
(179, 'Maria Teresa Eglér Mantoan', 'Brasil'),
(180, 'Mariana Kawall Leal Ferreira', 'Brasil'),
(181, 'Júlio Conte', 'Brasil'),
(182, 'Anselm jappe', 'França'),
(183, 'Volney J. Berkenbrock', 'Brasil'),
(184, 'Paulo Freire', 'Brasil'),
(185, 'Vicente de Paula Faleiros', 'Brasil'),
(186, 'Moacir Gadotti', 'Brasil'),
(187, 'Eva Teresinha Silveira Faleiros', 'Brasil'),
(188, 'Diversos', 'Não Identificado'),
(189, 'Maria Adelaide Amaral', 'Brasil'),
(190, 'Nílson José Machado', 'Brasil'),
(191, 'Neusa Maria Mendes de Gusmão', 'Brasil'),
(192, 'Alcione Araújo', 'Brasil'),
(193, 'Marisa Ortegoza da Cunha', 'Brasil'),
(194, 'Paiva Netto', 'Brasil'),
(195, 'Maria da Glória Gohn', 'Brasil'),
(196, 'Domingos Oliveira', 'Brasil'),
(197, 'Francisco Kennedy Silva dos Santos', 'Brasil'),
(198, 'Vera Maria Candau', 'Brasil'),
(200, 'Héctor A. Palma', 'Brasil'),
(201, 'Regina Leite Garcia', 'Brasil'),
(202, 'Fátima Feitosa', 'Brasil'),
(203, 'Márcia Cristina Hipólide', 'Brasil'),
(204, 'Francisco Mário Vicencoti', 'Brasil'),
(205, 'Marco Antonio Moreira', 'Brasil'),
(206, 'Manoel José Gomes Tubino', 'Brasil'),
(207, 'Marina Lúcia Pereira', 'Brasil'),
(208, 'Cecília Rosa Lacerda', 'Brasil'),
(209, 'Elcie F. Salzano Masini', 'Brasil'),
(210, 'Ana Paula Santana', 'Brasil'),
(212, 'Marina Graziela Feldmann', 'Brasil'),
(213, 'Ilana Maria de Oliveira Maciel', 'Brasil'),
(214, 'Josephine Klein', 'Brasil'),
(215, 'Emilia Ferreiro', 'Brasil'),
(216, 'Maria Isolina Baptista Marques', 'Brasil'),
(217, 'Júlio Emílio Diniz Pereira', 'Brasil'),
(218, 'Neidson Rodrigues', 'Brasil'),
(219, 'Maria Lúcia de Arruda Aranha', 'Brasil'),
(220, 'Pedro Bloch', 'Ucrânia'),
(221, 'Kenneth M. Zeichner', 'EUA'),
(223, 'Canísio Mayer', 'Brasil'),
(224, 'Lúcia M. Teixeira Furlani', 'Brasil'),
(225, 'Lia Zanotta Machado', 'Brasil'),
(226, 'Geraldo Mattos ', 'Brasil'),
(227, 'Fernanda Lopes de Almeida', 'Brasil'),
(229, 'Maria Aparecida Bergamaschi', 'Brasil'),
(230, 'Luiz Carlos País ', 'Brasil'),
(231, 'Celestino Alves da Silva Júnior', 'Brasil'),
(232, 'Homer Lane', 'EUA'),
(233, 'José Camilo dos Santos Filho', 'Brasil'),
(234, 'J. Milton Benemann', 'Não Identificado'),
(235, 'Silvio Sánchez Gamboa', 'Brasil'),
(236, 'Maria Isabel Habckost Dalla Zen', 'Brasil'),
(237, 'Maria Luisa Merino de Freitas Xavier', 'Brasil'),
(238, 'Luís Agostinho Cadore', 'Brasil'),
(239, 'Iselda Terezinha Sausen Feil', 'Brasil'),
(240, 'José Camelo Ponte', 'Brasil'),
(241, 'Samir Yazbek', 'Brasil'),
(242, 'Gisela Wajskop', 'Brasil'),
(243, 'Miriam Abramovay', 'Brasil'),
(244, 'Sonia Kramer ', 'Brasil'),
(245, 'Nelly Carvalho', 'Brasil'),
(246, 'Joy A. Palmer', 'Inglaterra'),
(247, 'Lúcia Maria Wanderley Neves', 'Brasil'),
(248, 'Antônio A. S. Zuin', 'Brasil'),
(249, 'Pedro Bandeira', 'Brasil'),
(250, 'Maria Constança P. Pissarra', 'Brasil'),
(251, 'Gilles Brougère', 'França'),
(252, 'Telma Ferraz Leal', 'Brasil'),
(253, 'Egon de Oliveira Rangel ', 'Brasil'),
(254, 'Eliana Borges Correia de Albuquerque', 'Brasil'),
(255, 'Eurize Caldas Pessanha', 'Brasil'),
(256, 'Guaraciara Barros Leal', 'Brasil'),
(257, 'Viliberto Cavalcante Porto', 'Brasil'),
(258, 'José Teodoro Soares', 'Brasil'),
(259, 'Aurila Maia Freire ', 'Brasil'),
(260, 'Alfonso Delgado Rubio', 'Espanha'),
(261, 'Louis Legrand', 'França'),
(262, 'Lúcio Alcântara', 'Brasil'),
(263, 'Carmen Sílvia de Arruda Andaló', 'Brasil'),
(264, 'Ministério da Educação', 'Brasil'),
(265, 'Teresinha Izabel da Silva Telles', 'Brasil'),
(266, 'J.C. Alencar Araripe', 'Brasil'),
(267, 'Ribamar Furtado', 'Brasil'),
(268, 'Claudino Piletti', 'Brasil'),
(269, 'Elíane Furtado', 'Brasil'),
(270, 'Murílio de Avellar Hingel', 'Brasil'),
(271, 'Vilson Francisco de Farias', 'Brasil'),
(272, 'Ana Maria Louzada Varejão', 'Brasil'),
(273, 'Silva de Sousa Costa', 'Brasil'),
(274, 'Tanía Físcher', 'Brasil'),
(275, 'Betty Coelho', 'Brasil'),
(277, 'Eloísa Maia Vidal', 'Brasil'),
(278, 'Esther Pillar Grossi ', 'Brasil'),
(279, 'Eliane Marta Teixeira Lopes', 'Brasil'),
(280, 'Luciano Mendes Faria Filho', 'Brasil'),
(281, 'Cynthia Greive Veiga', 'Brasil'),
(282, 'Sofia Lerche Vieira', 'Brasil'),
(283, 'Isabel Sabino de Farias', 'Brasil'),
(284, 'Maria do Socorro ', 'Brasil'),
(285, 'Lima Marques França', 'Brasil'),
(286, 'Silke Weber', 'Brasil'),
(287, 'Maria José Reginato Ribeiro', 'Brasil'),
(288, 'Pedro Demo', 'Brasil'),
(289, 'Josué de Castro ', 'Espanha'),
(290, 'Maria Lúcia Castanheira', 'Brasil'),
(291, 'Hamilton Werneck', 'Brasil'),
(292, 'Alessio Costa Lima', 'Brasil'),
(293, 'Gleuso Damasceno Duarte', 'Brasil'),
(294, 'Maria Eliana Novaes', 'Brasil'),
(295, 'Selenir C.G Kronbauer', 'Brasil'),
(296, 'Margareth F. Simionato', 'Brasil'),
(297, 'J.M Álvarez Méndez', 'Espanha'),
(298, 'Rosa Margarida de Carvalho Rocha', 'Brasil'),
(299, 'Marcos Magalhães', 'Brasil'),
(300, 'Maria da Conceição Benfica Radespiel', 'Brasil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editoras`
--

CREATE TABLE `editoras` (
  `id_editora` int(11) NOT NULL,
  `nomEdi` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `editoras`
--

INSERT INTO `editoras` (`id_editora`, `nomEdi`) VALUES
(0, ''),
(42, 'Albatroz/Loqüi'),
(16, 'Alínea Editora'),
(40, 'Artmed'),
(29, 'Aslegis'),
(13, 'Autêntica'),
(41, 'Brasil Tropical'),
(33, 'Casa da Qualidade'),
(34, 'Ceará Governo do Estado'),
(6, 'Cortez Editora'),
(35, 'Edelbra'),
(25, 'Edições Bagaço'),
(36, 'Edições Demócrito Rocha'),
(4, 'Editora Ática'),
(22, 'Editora Autores Associados'),
(8, 'Editora FTD'),
(3, 'Editora Garcia'),
(7, 'Editora Moderna'),
(2, 'Editora Planeta'),
(12, 'Editora SM'),
(14, 'Editora Vozes'),
(5, 'IBRASA'),
(43, 'IEMAR'),
(30, 'Kuarup'),
(15, 'Maza Edições'),
(24, 'MEC'),
(27, 'MS'),
(38, 'Não Identificado'),
(28, 'Odorizzi'),
(37, 'Papirus Editora'),
(9, 'Paulus'),
(23, 'Positivo'),
(19, 'Professor Aprendiz'),
(39, 'Puc-Sp'),
(11, 'Revic Editoral'),
(31, 'Salesiana'),
(1, 'Saraiva'),
(17, 'Secretaria de Educação'),
(32, 'Senac'),
(26, 'Tipogresso'),
(10, 'Zahar Editores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id_emp` int(11) NOT NULL,
  `ven_dia` int(11) DEFAULT NULL,
  `id_livro` int(11) DEFAULT NULL,
  `idUsu` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id_emp`, `ven_dia`, `id_livro`, `idUsu`, `STATUS`) VALUES
(4, 182, 1, 13, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `nomGen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`id_genero`, `nomGen`) VALUES
(0, ''),
(22, ' Educação Infantil'),
(19, ' Sociolinguística'),
(24, 'Antropologia'),
(23, 'Arte'),
(4, 'Aventura'),
(10, 'Biografia'),
(37, 'Ceará Governo do Estado'),
(33, 'Ciências Humanas e Sociais'),
(6, 'Comédia'),
(13, 'Conto'),
(8, 'Drama'),
(18, 'Educação'),
(29, 'Esportes'),
(3, 'Ficção'),
(34, 'Folclore'),
(15, 'Infanto-Juvenil'),
(25, 'Literatura'),
(9, 'Literatura Infantil'),
(30, 'Neurolingüísticas'),
(21, 'Pedagogia'),
(5, 'Poesia'),
(31, 'Política'),
(27, 'Psicologia'),
(16, 'Quadrinhos'),
(35, 'Religião'),
(2, 'Romance'),
(36, 'Sustentabilidade'),
(12, 'Teatro'),
(32, 'Teatro-Infantil'),
(11, 'Terror'),
(14, 'Tragédia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `obras`
--

CREATE TABLE `obras` (
  `id_obra` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `genero` int(11) NOT NULL,
  `genero2` int(11) NOT NULL,
  `qt` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `autor` int(11) DEFAULT NULL,
  `autor2` int(11) NOT NULL,
  `autor3` int(11) NOT NULL,
  `editora` int(11) NOT NULL DEFAULT '0',
  `link_img` varchar(1000) NOT NULL,
  `capasVar` int(11) NOT NULL,
  `edicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `obras`
--

INSERT INTO `obras` (`id_obra`, `titulo`, `genero`, `genero2`, `qt`, `status`, `autor`, `autor2`, `autor3`, `editora`, `link_img`, `capasVar`, `edicao`) VALUES
(1, 'Os Maias-Vol 2', 2, 0, 0, 1, 4, 0, 0, 0, 'https://thrivethemes.com/wp-content/uploads/2018/05/sadface-PNG-version.png', 0, 1),
(2, 'Os Maias-Vol 1', 2, 0, 1, 1, 4, 0, 0, 0, '', 0, 1),
(3, 'O Homem no Teto', 2, 0, 1, 1, 5, 0, 0, 0, '', 0, 1),
(4, 'A elegância do ouriço', 2, 0, 1, 1, 6, 0, 0, 0, '', 0, 1),
(5, 'Tibério', 3, 0, 1, 1, 7, 0, 0, 0, '', 0, 1),
(6, 'Equador', 2, 0, 1, 1, 8, 0, 0, 0, '', 0, 1),
(7, 'As Pupilas do Senhor Reitor', 2, 0, 2, 1, 10, 0, 0, 0, '', 0, 1),
(8, 'A jangada da pedra', 2, 0, 1, 1, 9, 0, 0, 0, '', 0, 1),
(9, 'Tia Julia e o Escrevinhador', 2, 0, 1, 1, 11, 0, 0, 0, '', 0, 1),
(10, 'A Ilustre Casa de Ramires', 2, 0, 2, 1, 4, 0, 0, 0, '', 0, 1),
(11, 'Um Filho do Circo', 2, 0, 1, 1, 13, 0, 0, 0, '', 0, 1),
(12, 'A Quarentena', 2, 0, 1, 1, 12, 0, 0, 0, '', 0, 1),
(13, 'É Proibido Chorar', 2, 0, 1, 1, 14, 0, 0, 0, '', 0, 1),
(14, 'País sem Chapéu', 2, 0, 1, 1, 15, 0, 0, 0, '', 0, 1),
(15, 'A Cidade e as serras', 2, 0, 3, 1, 4, 0, 0, 0, '', 0, 1),
(16, 'MOMO e o Senhor do Tempo', 2, 0, 2, 1, 16, 0, 0, 0, '', 0, 1),
(17, 'Amor de salvação', 2, 0, 1, 1, 17, 0, 0, 0, '', 0, 1),
(18, 'Os Subterrâneos', 2, 0, 1, 1, 18, 0, 0, 0, '', 0, 1),
(19, 'Romeu e Julieta', 2, 0, 1, 1, 19, 0, 0, 0, '', 0, 1),
(20, 'Pai Patrão e Recanto', 2, 0, 1, 1, 20, 0, 0, 0, '', 0, 1),
(21, 'Nossa senhora das flores', 2, 0, 1, 1, 21, 0, 0, 0, '', 0, 1),
(22, 'Cem Anos de Solidão', 2, 0, 1, 1, 22, 0, 0, 0, '', 0, 1),
(23, 'Panamá', 2, 0, 1, 1, 24, 0, 0, 0, '', 0, 1),
(24, 'Cinco Semanas em um Balão', 4, 0, 1, 1, 23, 0, 0, 0, '', 0, 1),
(25, 'O Cavaleiro Inexistente', 2, 0, 1, 1, 25, 0, 0, 0, '', 0, 1),
(26, 'Tabacaria e Outros Poemas', 5, 0, 1, 1, 27, 0, 0, 0, '', 0, 1),
(27, 'O Sol Também Se Levanta', 2, 0, 1, 1, 28, 0, 0, 0, '', 0, 1),
(28, 'Decamerão', 2, 0, 1, 1, 30, 0, 0, 0, '', 0, 1),
(29, 'A Vida É Sonho', 5, 0, 1, 1, 32, 0, 0, 0, '', 0, 1),
(30, 'As Viagens de Gulliver', 2, 0, 1, 1, 31, 0, 0, 0, '', 0, 1),
(31, 'Cem Sonetos de Amor', 5, 0, 1, 1, 34, 0, 0, 0, '', 0, 1),
(32, 'Entre Dois Palácios', 2, 0, 1, 1, 33, 0, 0, 0, '', 0, 1),
(33, 'Os irmãos Karamázovi', 2, 0, 1, 1, 36, 0, 0, 0, '', 0, 1),
(34, 'A Mulher de Trinta Anos', 3, 0, 1, 1, 35, 0, 0, 0, '', 0, 1),
(35, 'As melhores comédias de Martins Pena', 6, 0, 1, 1, 37, 0, 0, 0, '', 0, 1),
(39, 'Germinal', 2, 0, 1, 1, 39, 0, 0, 0, '', 0, 1),
(40, 'Jeeves ao Largo', 6, 0, 1, 1, 29, 0, 0, 0, '', 0, 1),
(41, 'Suave é a noite', 2, 0, 1, 1, 40, 0, 0, 0, '', 0, 1),
(42, 'Há Prendisajens com o Xão', 5, 0, 1, 1, 41, 0, 0, 0, '', 0, 1),
(43, 'Viagens Na Minha Terra', 3, 0, 1, 1, 42, 0, 0, 0, '', 0, 1),
(44, 'O Noviço. Edição 1948', 6, 0, 3, 1, 37, 0, 0, 0, '', 0, 1),
(45, 'As Três Irmãs', 8, 0, 1, 1, 43, 0, 0, 0, '', 0, 1),
(46, 'Vermelho negro', 2, 0, 1, 1, 44, 0, 0, 0, '', 0, 1),
(47, 'Pedro Páramo', 2, 0, 1, 1, 38, 0, 0, 0, '', 0, 1),
(48, 'O primo Basílio', 2, 0, 1, 1, 4, 0, 0, 0, '', 0, 1),
(49, 'O Último Cabalista de Lisboa', 2, 0, 1, 1, 46, 0, 0, 0, '', 0, 1),
(50, 'Os Três Mosqueteiros', 9, 0, 1, 1, 45, 0, 0, 0, '', 0, 1),
(51, 'Grito de Guerra', 3, 0, 1, 1, 47, 0, 0, 0, '', 0, 1),
(52, 'Adeus, Ponta do meu Nariz!', 5, 0, 1, 1, 50, 0, 0, 0, '', 0, 1),
(53, 'Poesias Ocultistas', 5, 0, 1, 1, 27, 0, 0, 0, '', 0, 1),
(54, 'Ragtime', 8, 0, 1, 1, 48, 0, 0, 0, '', 0, 1),
(55, 'Na Prisão', 10, 0, 1, 1, 49, 0, 0, 0, '', 0, 1),
(56, 'Por um Simples Pedaço de Ser Humano', 3, 0, 1, 1, 52, 0, 0, 0, '', 0, 1),
(57, 'Christine', 11, 0, 1, 1, 51, 0, 0, 0, '', 0, 1),
(58, 'Cândido, ou O Otimista', 2, 0, 1, 1, 53, 0, 0, 0, '', 0, 1),
(59, 'Desista!', 3, 0, 1, 1, 55, 0, 0, 0, '', 0, 1),
(60, 'Eugênia Grandet', 3, 0, 1, 1, 35, 0, 0, 0, '', 0, 1),
(61, 'O Conto da Ilha Desconhecida', 3, 0, 1, 1, 9, 0, 0, 0, '', 0, 1),
(62, 'A manha do barão', 12, 0, 1, 1, 56, 0, 0, 0, '', 0, 1),
(63, 'O Médico e o Monstro', 2, 0, 1, 1, 57, 0, 0, 0, '', 0, 1),
(64, 'Histórias de Shakespeare', 2, 0, 1, 1, 19, 0, 0, 0, '', 0, 1),
(65, 'O Retrato de Dorian Gray', 2, 0, 1, 1, 61, 0, 0, 0, '', 0, 1),
(68, 'Os Melhores Contos de Guy de Maupassant', 13, 0, 1, 1, 60, 0, 0, 0, '', 0, 1),
(69, 'Haroun e o Mar de Histórias', 3, 0, 1, 1, 58, 0, 0, 0, '', 0, 1),
(70, 'Contos de Tchekhov', 13, 0, 1, 1, 64, 0, 0, 0, '', 0, 1),
(71, 'Uma História de Natal', 13, 0, 1, 1, 63, 0, 0, 0, '', 0, 1),
(72, 'O Americano Tranquilo', 2, 0, 1, 1, 65, 0, 0, 0, '', 0, 1),
(73, 'O Crime Do Padre Amaro', 3, 0, 1, 1, 4, 0, 0, 0, '', 0, 1),
(74, 'Teatro Completo de Nelson Rodrigues - Peças psicológicas', 12, 0, 2, 1, 62, 0, 0, 0, '', 0, 1),
(75, 'Felicidade e outros contos', 3, 0, 1, 1, 68, 0, 0, 0, '', 0, 1),
(76, 'Espártaco', 3, 0, 1, 1, 69, 0, 0, 0, '', 0, 1),
(77, 'O Nome do Jogo', 2, 0, 1, 1, 66, 0, 0, 0, '', 0, 1),
(78, 'Teatro Completo de Nelson Rodrigues - Peças míticas', 12, 0, 2, 1, 62, 0, 0, 0, '', 0, 1),
(80, 'Dom Quixote', 2, 0, 5, 1, 67, 0, 0, 0, '', 0, 1),
(81, 'Civilização e outros contos', 13, 0, 1, 1, 4, 0, 0, 0, '', 0, 1),
(82, 'O Enterro Prematuro ', 3, 0, 1, 1, 71, 0, 0, 0, '', 0, 1),
(83, 'A Força da Vida', 2, 0, 1, 1, 66, 0, 0, 0, '', 0, 1),
(85, 'O Longo Adeus', 2, 0, 1, 1, 72, 0, 0, 0, '', 0, 1),
(86, 'Os Melhores Contos', 13, 0, 2, 1, 4, 0, 0, 0, '', 0, 1),
(87, 'Mensagem', 5, 0, 2, 1, 27, 0, 0, 0, '', 0, 1),
(88, 'O Sonhador', 3, 0, 1, 1, 66, 0, 0, 0, '', 0, 1),
(89, 'O Jogador', 3, 0, 1, 1, 74, 0, 0, 0, '', 0, 1),
(90, 'Pequenos Milagres', 3, 0, 1, 1, 66, 0, 0, 0, '', 0, 1),
(91, 'O cavalo do cão', 12, 0, 2, 1, 73, 0, 0, 0, '', 0, 1),
(92, 'Argo e seu dono', 13, 0, 1, 1, 75, 0, 0, 0, '', 0, 1),
(93, 'Fernão Capelo Gaivota', 3, 0, 1, 1, 76, 0, 0, 0, '', 0, 1),
(94, 'Pigmaleão', 6, 0, 1, 1, 78, 0, 0, 0, '', 0, 1),
(95, 'Sonetos e Outros Poemas', 5, 0, 2, 1, 77, 0, 0, 0, '', 0, 1),
(96, 'A Flecha de Ouro', 3, 0, 1, 1, 81, 0, 0, 0, '', 0, 1),
(97, 'As Aventuras de El Cid Campeador', 2, 0, 1, 1, 79, 0, 0, 0, '', 0, 1),
(98, 'Contos Húngaros', 13, 0, 1, 1, 80, 0, 0, 0, '', 0, 1),
(99, 'O Colar de Veludo', 3, 0, 1, 1, 45, 0, 0, 0, '', 0, 1),
(100, 'Estórias Gerais', 2, 0, 1, 1, 82, 0, 0, 0, '', 0, 1),
(101, 'Robinson Crusoé', 2, 0, 6, 1, 83, 0, 0, 0, '', 0, 1),
(104, 'Na Colônia Penal', 3, 0, 1, 1, 55, 0, 0, 0, '', 0, 1),
(105, 'Livro de Consolação', 2, 0, 1, 1, 17, 0, 0, 0, '', 0, 1),
(106, 'O Visconde Partido ao Meio', 2, 0, 1, 1, 25, 0, 0, 0, '', 0, 1),
(107, 'Alguns Poemas', 5, 0, 1, 1, 86, 0, 0, 0, '', 0, 1),
(109, 'Três Cavalos', 3, 0, 1, 1, 88, 0, 0, 0, '', 0, 1),
(110, 'O rei de ramos', 6, 0, 1, 1, 90, 0, 0, 0, '', 0, 1),
(111, 'A Relíquia', 3, 0, 1, 1, 4, 0, 0, 0, '', 0, 1),
(112, 'Poemas 1913-1956', 5, 0, 1, 1, 89, 0, 0, 0, '', 0, 1),
(113, 'História dos Treze', 2, 0, 1, 1, 35, 0, 0, 0, '', 0, 1),
(115, '42 Sonetos', 5, 0, 1, 1, 19, 0, 0, 0, '', 0, 1),
(116, 'China', 9, 0, 1, 1, 87, 0, 0, 0, '', 0, 1),
(117, 'Nação Críoula', 3, 0, 1, 1, 94, 0, 0, 0, '', 0, 1),
(118, 'Os Cus de Judas', 2, 0, 1, 1, 95, 0, 0, 0, '', 0, 1),
(119, 'Histórias dos Jawi, um povo da Tailândia', 9, 0, 1, 1, 96, 0, 0, 0, '', 0, 1),
(120, 'As Viagens de Marco Polo', 15, 0, 1, 1, 91, 0, 0, 0, '', 0, 1),
(121, 'Domínio público: literatura em quadrinhos Vol. 2', 9, 0, 2, 1, 60, 0, 0, 0, '', 0, 1),
(122, 'Três peças escolhidas', 12, 0, 1, 1, 97, 0, 0, 0, '', 0, 1),
(123, 'Os Miseráveis', 2, 0, 1, 1, 98, 0, 0, 0, '', 0, 1),
(124, 'Édipo Rei (Editora Ediouro)', 14, 0, 1, 1, 84, 0, 0, 0, '', 0, 1),
(125, 'Histórias ou Contos de Outrora', 3, 0, 1, 1, 99, 0, 0, 0, '', 0, 1),
(126, 'Édipo Rei (Editora Difel)', 14, 0, 1, 1, 84, 0, 0, 0, '', 0, 1),
(127, 'O Rei Lear', 14, 0, 1, 1, 19, 0, 0, 0, '', 0, 1),
(128, 'Memórias de Adriano', 3, 0, 1, 1, 102, 0, 0, 0, '', 0, 1),
(129, 'Sexta-Feira Ou A Vida Selvagem', 3, 0, 1, 1, 101, 0, 0, 0, '', 0, 1),
(130, 'Ombros de Gigantes', 16, 0, 1, 1, 100, 0, 0, 0, '', 0, 1),
(131, 'Don Juan', 12, 0, 1, 1, 104, 0, 0, 0, '', 0, 1),
(132, 'O Velho e o Mar', 3, 0, 1, 1, 28, 0, 0, 0, '', 0, 1),
(134, 'A Ilha do Tesouro', 4, 0, 1, 1, 57, 0, 0, 0, '', 0, 1),
(135, 'A Cantora Careca', 12, 0, 1, 1, 107, 0, 0, 0, '', 0, 1),
(136, 'Ivan filho-de-boi', 13, 0, 1, 1, 108, 0, 0, 0, '', 0, 1),
(137, 'A chave perdida', 12, 0, 1, 1, 109, 0, 0, 0, '', 0, 1),
(139, 'Jogos Vorazes', 3, 0, 1, 1, 110, 0, 0, 0, '', 0, 1),
(140, 'Gothica', 13, 0, 1, 1, 111, 0, 0, 0, '', 0, 1),
(141, 'Em Chamas', 3, 0, 1, 1, 110, 0, 0, 0, '', 0, 1),
(142, 'Auto da Barca do Inferno(Editora FTD)', 12, 0, 1, 1, 105, 0, 0, 0, '', 0, 1),
(143, 'Os Robinsons Suíços', 4, 0, 1, 1, 106, 0, 0, 0, '', 0, 1),
(144, 'Auto da barca do inferno (Editora Saraiva)', 12, 0, 1, 1, 105, 0, 0, 0, '', 0, 1),
(145, 'As Palavras Andantes', 3, 0, 1, 1, 112, 0, 0, 0, '', 0, 1),
(146, 'A morte de Ivan Ilitch', 2, 0, 1, 1, 113, 0, 0, 0, '', 0, 1),
(147, 'A Guerra dos Mundos', 3, 0, 1, 1, 116, 0, 0, 0, '', 0, 1),
(148, 'O tesouro da nau catarineta', 12, 0, 1, 1, 117, 0, 0, 0, '', 0, 1),
(149, 'Como O Soldado Conserta o Gramofone', 3, 0, 1, 1, 115, 0, 0, 0, '', 0, 1),
(150, 'Kouros', 12, 0, 1, 1, 114, 0, 0, 0, '', 0, 1),
(151, 'Tom Sawyer', 15, 0, 1, 1, 118, 0, 0, 0, '', 0, 1),
(152, 'O pintor', 12, 0, 1, 1, 119, 0, 0, 0, '', 0, 1),
(153, 'Sonho de uma Noite de Verão', 6, 0, 1, 1, 19, 0, 0, 0, '', 0, 1),
(154, 'A Trilogia Tebana', 14, 0, 1, 1, 84, 0, 0, 0, '', 0, 1),
(155, 'Tarás Bulba', 2, 0, 1, 1, 121, 0, 0, 0, '', 0, 1),
(156, 'Antologia do Vampiro Literário ', 3, 0, 1, 1, 120, 0, 0, 0, '', 0, 1),
(157, 'Eles não usam Black-Tie', 12, 0, 1, 1, 122, 0, 0, 0, '', 0, 1),
(158, 'Demian', 2, 0, 1, 1, 123, 0, 0, 0, '', 0, 1),
(159, 'As Lágrima de Shiva', 3, 0, 1, 1, 124, 0, 0, 0, '', 0, 1),
(160, 'Teatro de Gianfrancesco Guarnieri/Textos para televisão', 12, 0, 1, 1, 122, 0, 0, 0, '', 0, 1),
(161, 'Dona Mimma', 3, 0, 1, 1, 125, 0, 0, 0, '', 0, 1),
(162, 'Memorial Do Convento', 2, 0, 1, 1, 9, 0, 0, 0, '', 0, 1),
(165, 'A Cidade Transparente', 3, 0, 1, 1, 126, 0, 0, 0, '', 0, 1),
(166, 'Os Chefes', 3, 0, 1, 1, 11, 0, 0, 0, '', 0, 1),
(167, 'Teatro I', 12, 0, 1, 1, 127, 0, 0, 0, '', 0, 1),
(168, 'Bola de Sebo e Outros Contos', 3, 0, 1, 1, 60, 0, 0, 0, '', 0, 1),
(169, 'Lisbela e o Prisioneiro', 12, 0, 1, 1, 128, 0, 0, 0, '', 0, 1),
(170, 'A Fúria dos Reis e As Crônicas de Gelo e Fogo', 3, 0, 1, 1, 130, 0, 0, 0, '', 0, 1),
(171, 'Teatro na escola 1', 12, 0, 1, 1, 131, 0, 0, 0, '', 0, 1),
(172, 'Teatro na escola 2', 12, 0, 1, 1, 131, 0, 0, 0, '', 0, 1),
(173, 'Teatro na escola 3', 12, 0, 1, 1, 131, 0, 0, 0, '', 0, 1),
(174, 'Teatro na escola 4', 12, 0, 1, 1, 131, 0, 0, 0, '', 0, 1),
(175, 'Teatro na escola 5', 12, 0, 1, 1, 131, 0, 0, 0, '', 0, 1),
(182, '100 Jogos Drámaticos', 12, 0, 1, 1, 127, 0, 0, 0, '', 0, 1),
(183, 'Panorama do Teatro Brasileiro', 12, 0, 4, 1, 134, 0, 0, 0, '', 0, 1),
(184, 'Estrutura e Funcionamento do Ensino Médio', 18, 0, 3, 1, 133, 0, 0, 0, '', 0, 1),
(185, 'O Casamento Suspeitoso', 3, 0, 1, 1, 135, 0, 0, 0, '', 0, 1),
(186, 'Teatro da ruptura : Oswald de Andrade', 12, 0, 1, 1, 134, 0, 0, 0, '', 0, 1),
(187, 'Avaliação do Processo Ensino-Aprendizagem', 18, 0, 1, 1, 136, 0, 0, 0, '', 0, 1),
(188, 'Teatro da obsessão : Nelson Rodrigues', 12, 0, 2, 1, 134, 0, 0, 0, '', 0, 1),
(189, 'Formação de Professores para a Educação Básica', 18, 0, 1, 1, 139, 0, 0, 0, '', 0, 1),
(190, 'Breviário de Legislação Federal da Educação e Cultura', 18, 0, 1, 1, 137, 0, 0, 0, '', 0, 1),
(191, 'Pedro Mico', 8, 0, 1, 1, 138, 0, 0, 0, '', 0, 1),
(192, 'Teatro e Teoria na Grécia Antiga', 12, 0, 1, 1, 140, 0, 0, 0, '', 0, 1),
(193, 'Negritude, Cinema e Educação - Volume 1', 18, 0, 2, 1, 141, 0, 0, 0, '', 0, 1),
(194, 'Negritude, Cinema e Educação - Volume 2', 18, 0, 2, 1, 141, 0, 0, 0, '', 0, 1),
(195, 'Um Caminho do Teatro Na Escola', 12, 0, 2, 1, 109, 0, 0, 0, '', 1, 1),
(196, 'Metodologia do Trabalho Científico', 18, 0, 1, 1, 142, 0, 0, 0, '', 0, 1),
(197, 'Vestido de Noiva', 8, 0, 1, 1, 62, 0, 0, 0, '', 0, 1),
(198, 'Debate & Crítica', 18, 0, 1, 1, 143, 0, 0, 0, '', 0, 1),
(199, 'Avaliação Escolar', 18, 0, 1, 1, 147, 0, 0, 0, '', 0, 1),
(200, 'Uma Mulher Vestida de Sol', 12, 0, 2, 1, 135, 0, 0, 0, '', 0, 1),
(201, 'Família Composta', 12, 0, 6, 1, 148, 0, 0, 0, '', 0, 1),
(202, 'O Santo e a Porca', 12, 0, 7, 1, 135, 0, 0, 0, '', 0, 1),
(204, 'Ao Jovem do Novo Milênio', 18, 0, 1, 1, 150, 0, 0, 0, '', 0, 1),
(205, 'Farsa da Boa Preguiça', 12, 0, 1, 1, 135, 0, 0, 0, '', 0, 1),
(206, 'Lei de Diretrizes e Bases da Educação Nacional', 18, 0, 1, 1, 145, 149, 0, 0, '', 0, 1),
(207, 'O Tesouro de Chica da Silva', 12, 0, 1, 1, 138, 0, 0, 0, '', 0, 1),
(208, 'Propostas Didáticas Para Aprender a Escrever', 18, 0, 1, 1, 146, 0, 0, 0, '', 0, 1),
(209, 'O Protagonismo na Educação', 18, 0, 1, 1, 151, 154, 0, 0, '', 0, 1),
(210, 'Escritos Sobre Jornal e Educação', 18, 0, 1, 1, 155, 0, 0, 0, '', 0, 1),
(211, 'Sucesso Escolar nos Meios Populares', 18, 0, 1, 1, 153, 0, 0, 0, '', 0, 1),
(212, 'Preconceito linguistico', 19, 0, 1, 1, 144, 144, 0, 0, '', 0, 1),
(213, 'Faustino Um Fausto Nordestino', 12, 0, 1, 1, 156, 0, 0, 0, '', 0, 1),
(214, 'A Vantagem Acadêmica de Cuba', 18, 0, 1, 1, 158, 0, 0, 0, '', 0, 1),
(215, 'Para Que Servem as Escolas?', 18, 0, 1, 1, 162, 0, 0, 0, '', 0, 1),
(216, 'Possibilidades de Aprendizagem', 18, 0, 1, 1, 152, 159, 0, 16, '', 0, 1),
(217, 'Gênero do Discurso na Escola', 18, 0, 1, 1, 160, 0, 0, 0, '', 0, 1),
(218, 'O Homem do Princípio ao Fim', 12, 3, 1, 1, 163, 0, 0, 0, '', 0, 1),
(219, 'Neoliberalismo, Qualidade Total e Educação', 18, 0, 1, 1, 164, 0, 0, 0, '', 0, 1),
(220, 'GESTÃO DO PROJETO POLÍTICO-PEDAGÓGICO Entre Corações e Mentes', 21, 0, 2, 1, 157, 0, 0, 0, '', 0, 1),
(221, 'Manifesto dos Pioneiros da Educação', 18, 0, 2, 1, 161, 0, 0, 0, '', 0, 1),
(222, 'A Poesia Vai à Escola', 5, 0, 1, 1, 167, 0, 0, 0, '', 0, 1),
(223, 'A Moratória', 12, 0, 1, 1, 168, 0, 0, 0, '', 0, 1),
(225, 'Prfissionais de Educação Infantil', 22, 0, 1, 1, 166, 0, 0, 0, '', 0, 1),
(226, 'Pedagogia da Exclusão', 18, 0, 1, 1, 164, 0, 0, 0, '', 0, 1),
(227, 'O Noviço. Edição 1996', 12, 0, 1, 1, 37, 0, 0, 0, '', 0, 1),
(228, 'INDISCIPLINA O Contraponto das Escolas Democráticas', 21, 0, 2, 1, 169, 0, 0, 0, '', 0, 1),
(229, 'O Que Ensinar e Por Quê?', 18, 0, 1, 1, 172, 0, 0, 0, '', 0, 1),
(230, 'A Pena e a Lei', 3, 0, 2, 1, 135, 0, 0, 0, '', 0, 1),
(231, 'Carlota Rainha', 12, 0, 2, 1, 174, 0, 0, 0, '', 0, 1),
(232, 'Como Usar Artes Visuais na Sala de Aula', 23, 18, 1, 1, 171, 0, 0, 0, '', 0, 1),
(233, 'Projetos e Ambientes Inovadores', 18, 0, 1, 1, 173, 175, 0, 24, '', 0, 1),
(234, 'Teoria Crítica e Educação', 18, 0, 1, 1, 170, 0, 0, 0, '', 0, 1),
(235, 'INCLUSÃO ESCOLAR O que é? Por que? Como fazer?', 21, 0, 2, 1, 179, 0, 0, 0, '', 0, 1),
(236, 'Bailei na Curva', 8, 12, 1, 1, 181, 0, 0, 0, '', 0, 1),
(237, 'Práticas Pedagógicas na Escola Indígena', 24, 18, 1, 1, 178, 180, 0, 0, '', 0, 1),
(238, 'Brincadeiras e dinâmicas para grupos', 18, 0, 1, 1, 183, 0, 0, 14, '', 0, 1),
(239, 'A Importância do Ato de Ler', 25, 0, 1, 1, 184, 0, 0, 0, '', 0, 1),
(240, 'Ó Abre Alas', 12, 0, 1, 1, 189, 0, 0, 0, '', 0, 1),
(241, 'Escola Que Protege: enfrentando a violência contra crianças e adolescentes', 18, 0, 1, 1, 185, 187, 0, 0, '', 0, 1),
(242, 'Educação Especial: Tendências Atuais', 18, 0, 1, 1, 188, 0, 0, 0, '', 0, 1),
(243, 'O Pagador de Promessas', 12, 8, 1, 1, 90, 0, 0, 0, '', 0, 1),
(244, 'Educar para a Sustentabilidade', 18, 0, 1, 1, 186, 0, 0, 0, '', 0, 1),
(245, 'A Caravana da Ilusão', 8, 0, 1, 1, 192, 0, 0, 0, '', 0, 1),
(246, 'Os Filhos da África em Portugal', 24, 18, 1, 1, 191, 0, 0, 0, '', 0, 1),
(247, 'É Urgente Reeducar!', 18, 21, 1, 1, 194, 0, 0, 0, '', 0, 1),
(248, 'Movimentos Sociais e Educação', 18, 0, 1, 1, 195, 0, 0, 0, '', 0, 1),
(249, 'Lógica e linguagem cotidiana: Verdade, coerência, comunicação, argumentação ', 18, 0, 1, 1, 193, 190, 0, 13, '', 0, 1),
(250, 'Melhor Teatro', 12, 0, 1, 1, 196, 0, 0, 0, '', 0, 1),
(252, 'Metáforas e modelos científicos', 18, 0, 1, 1, 200, 0, 0, 12, '', 0, 1),
(253, 'Professores Em Formação: A Escola Como Lugar de Pesquisa', 18, 0, 2, 1, 197, 0, 0, 19, '', 0, 1),
(254, 'Magistério', 18, 0, 1, 1, 198, 0, 0, 0, '', 0, 1),
(256, 'Alfabetização dos Alunos das Classes Populares', 18, 0, 1, 1, 201, 0, 0, 0, '', 0, 1),
(257, 'Literatura Brasileira a arte da palavra ', 18, 0, 1, 1, 204, 0, 0, 11, '', 0, 1),
(258, 'Contextualizar é Reconhecer o Significado do Conhecimento Científico', 18, 0, 1, 1, 203, 0, 0, 0, '', 0, 1),
(259, 'O Poder Legislativo', 18, 0, 1, 1, 202, 0, 0, 0, '', 0, 1),
(260, 'A construção do livramento na educação de jovens e adultos', 18, 0, 1, 1, 207, 0, 0, 13, '', 0, 1),
(261, 'Feira Brasileira de Opinião', 12, 0, 1, 1, 188, 0, 0, 0, '', 0, 1),
(262, 'Interdisciplinaridade na educação básica: conhecimento e realidade', 18, 0, 1, 1, 197, 0, 0, 17, '', 0, 1),
(263, 'Aprendizagem Significativa', 18, 27, 1, 1, 205, 209, 0, 0, '', 0, 1),
(264, 'Educar Para Cooperar', 18, 0, 1, 1, 208, 213, 0, 0, '', 0, 1),
(265, 'Dimensões Sociais do Esporte', 29, 0, 1, 1, 206, 0, 0, 0, '', 0, 1),
(266, 'O Santo Inquérito', 12, 0, 2, 1, 90, 0, 0, 0, '', 0, 1),
(267, 'Surdez e linguagem', 30, 0, 1, 1, 210, 0, 0, 0, '', 0, 1),
(268, 'Reflexões Sobre Alfabetização', 18, 0, 1, 1, 215, 0, 0, 0, '', 0, 1),
(269, 'Formação de Professores e Escola na Contemporaneidade', 18, 0, 1, 1, 212, 0, 0, 0, '', 0, 1),
(270, 'O Teste de Pirâmides Coloridas de Max Pfister', 27, 0, 1, 1, 216, 0, 0, 0, '', 0, 1),
(271, 'O trabalho de grupo', 18, 0, 1, 1, 214, 0, 0, 10, '', 0, 1),
(272, 'Lições do Príncipe e Outras Lições', 18, 0, 1, 1, 218, 0, 0, 0, '', 0, 1),
(273, 'Concepção Dialética da Educação', 18, 0, 1, 1, 186, 0, 0, 0, '', 0, 1),
(274, 'As Mãos de Eurídice', 12, 0, 2, 1, 220, 0, 0, 0, '', 0, 1),
(275, 'As Aventuras da Mercadoria', 19, 0, 1, 1, 182, 182, 0, 0, '', 0, 1),
(276, 'Viver e conviver', 18, 0, 1, 1, 223, 0, 0, 9, '', 0, 1),
(277, 'O Desafio das Diferenças nas Escolas', 18, 0, 1, 1, 179, 0, 0, 0, '', 0, 1),
(278, 'Os Judas em Sábado de Aleluia', 12, 0, 1, 1, 37, 0, 0, 0, '', 0, 1),
(279, 'Juventude Negra na EJA: O Direito á Diferença ', 18, 0, 1, 1, 165, 0, 0, 15, '', 0, 1),
(280, 'A Pesquisa na Formação e no Trabalho Docente', 18, 0, 1, 1, 217, 221, 0, 0, '', 0, 1),
(281, 'AUTORIDADE DO PROFESSOR: Meta, mito ou nada disso?', 18, 0, 1, 1, 224, 0, 0, 0, '', 0, 1),
(282, 'História da Educação e da Pedagogia', 18, 0, 1, 1, 219, 0, 0, 0, '', 0, 1),
(283, 'Estado, Escola e Ideologia', 18, 31, 1, 1, 225, 0, 0, 0, '', 0, 1),
(284, 'Teoria e prática de língua e literatura', 18, 0, 1, 1, 226, 0, 0, 8, '', 0, 1),
(285, 'Por Uma Nova Escola o transitório e o permanente na educação', 18, 0, 2, 1, 218, 0, 0, 0, '', 0, 1),
(286, 'A Escola Pública como Local de Trabalho', 18, 21, 1, 1, 231, 0, 0, 0, '', 0, 1),
(287, 'A Fada Que Tinha Ideias', 3, 32, 1, 1, 227, 0, 0, 0, '', 0, 1),
(289, 'Conversas com pais e mestres', 18, 0, 1, 1, 232, 0, 0, 5, '', 0, 1),
(290, 'Alfabetização - Um Desafio Novo para Um Novo Tempo', 18, 0, 1, 1, 239, 0, 0, 0, '', 0, 1),
(291, 'Estudo Dirigido de Português', 18, 0, 1, 1, 234, 238, 0, 0, '', 0, 1),
(292, 'PESQUISA EDUCACIONAL: quantidade-qualidade', 18, 0, 1, 1, 233, 235, 0, 0, '', 0, 1),
(293, 'Educação Escolar e as Tecnologias da Informática ', 22, 0, 1, 1, 230, 0, 0, 0, '', 0, 1),
(294, 'Leitura - Identidade e Inserção Social', 18, 0, 1, 1, 240, 0, 0, 0, '', 0, 1),
(295, 'O Fingidor', 12, 15, 1, 1, 241, 0, 0, 0, '', 0, 1),
(296, 'Povos Indígenas e Educação', 18, 0, 1, 1, 229, 236, 237, 0, '', 0, 1),
(297, 'Brincar na Pré-Escola', 22, 0, 1, 1, 242, 0, 0, 0, '', 0, 1),
(298, 'Escolas de Paz', 18, 0, 1, 1, 243, 0, 0, 0, '', 0, 1),
(299, 'Por entre as pedras: arma e sonho na escola ', 18, 0, 1, 1, 244, 0, 0, 4, '', 0, 1),
(300, 'Hoje Tem Espetáculo: No País dos Prequetés', 15, 12, 1, 1, 91, 0, 0, 0, '', 0, 1),
(301, 'Um Legado de Esperança', 18, 0, 1, 1, 186, 0, 0, 0, '', 0, 1),
(302, '50 Grandes Educadores', 18, 0, 1, 1, 246, 0, 0, 0, '', 0, 1),
(303, 'O Diamante do Grão-Mogol', 12, 15, 1, 1, 127, 0, 0, 0, '', 0, 1),
(304, 'O TROTE NA UNIVERSIDADE Passagens de um rito de iniciação', 18, 0, 1, 1, 248, 0, 0, 0, '', 0, 1),
(305, 'Educação e Política no Limiar do Século XXI', 18, 0, 1, 1, 247, 0, 0, 0, '', 0, 1),
(306, 'O Fantástico Mistério de Feiurinha', 12, 15, 2, 1, 249, 0, 0, 0, '', 0, 1),
(307, 'Empréstimos Linguísticos  na Língua portuguesa ', 18, 0, 1, 1, 245, 0, 0, 0, '', 0, 1),
(308, 'Mediação pedagógica de jovens e adultos: Ciências Humanas', 18, 0, 1, 1, 188, 0, 0, 23, '', 0, 1),
(309, 'Democracia e participação escolar', 18, 0, 1, 1, 188, 0, 0, 7, '', 0, 1),
(310, 'Com Direito à Palavra: Dicionários em Sala de Aula', 18, 0, 1, 1, 253, 0, 0, 0, '', 0, 1),
(311, 'Brinquedo e Cultura', 18, 0, 1, 1, 251, 0, 0, 0, '', 0, 1),
(312, 'Alfabetização de Jovens e Adultos', 18, 0, 1, 1, 254, 252, 0, 13, '', 0, 1),
(313, 'Escola de tempo integral: desafio para o ensino público', 18, 0, 1, 1, 188, 0, 0, 22, '', 0, 1),
(314, 'Educação e sociedade', 18, 0, 1, 1, 188, 0, 0, 6, '', 0, 1),
(315, 'Ascensão e Queda do Professor', 18, 0, 1, 1, 255, 0, 0, 0, '', 0, 1),
(316, 'Professor Antônio Martins Filho: O Eterno Reitor', 10, 0, 1, 1, 258, 0, 0, 0, '', 0, 1),
(317, 'Rousseau a Política como Exercício Pedagógia', 33, 0, 1, 1, 250, 0, 0, 0, '', 0, 1),
(318, 'O Conselho Estadual de Educação e o Sistema de Ensino', 18, 0, 1, 1, 256, 257, 259, 0, '', 0, 1),
(319, '96 respostas sobre a AIDS', 18, 0, 1, 1, 260, 0, 0, 0, '', 0, 1),
(320, 'A Didática da Reforma', 21, 0, 1, 1, 261, 0, 0, 0, '', 0, 1),
(321, 'O Ceará que Ler e Conta', 18, 0, 1, 1, 262, 0, 0, 0, '', 0, 1),
(322, 'Fala, Professora!', 18, 0, 1, 1, 263, 0, 0, 0, '', 0, 1),
(323, 'Eixos Cognitivos do ENEM', 18, 0, 1, 1, 264, 0, 0, 0, '', 0, 1),
(324, 'AIDS e Escola', 18, 0, 1, 1, 265, 0, 0, 0, '', 0, 1),
(333, 'Didática Geral', 18, 0, 1, 1, 268, 0, 0, 4, '', 0, 24),
(334, 'Abrindo Trilhas para os Saberes', 18, 0, 1, 1, 197, 0, 0, 15, '', 0, -1),
(335, 'A Intervenção Participativa dos Atores - INPA', 18, 0, 1, 1, 267, 269, 0, 0, '', 0, 0),
(336, 'Plano Decenal de Educação para Todos ', 18, 0, 2, 1, 270, 0, 0, 24, '', 0, 1),
(337, 'Gestão Escolar e Qualidade da Educação', 18, 0, 1, 1, 0, 0, 0, 24, '', 0, 1),
(338, 'A Gestão Pedagógica e o Desempenho Escolar', 18, 0, 1, 1, 0, 0, 0, 26, '', 0, 1),
(339, 'Pactos Pela Vida Em Defesa do SUS e De Gestão', 18, 0, 1, 1, 0, 0, 0, 27, '', 0, 1),
(340, 'Itapema', 34, 35, 1, 1, 271, 0, 0, 28, '', 0, 1),
(341, 'Perspectivas e Debates para 2011', 18, 31, 1, 1, 0, 0, 0, 29, '', 0, 39),
(342, 'Atividades Diversificadas no Processo de Alfabetização Pré-Escolar', 18, 0, 1, 1, 272, 0, 0, 30, '', 0, 1),
(343, 'Gestão Escolar, Processo em Movimento', 18, 0, 1, 1, 0, 0, 0, 31, '', 0, 144),
(344, 'Lixo Mínimo', 18, 36, 1, 1, 273, 0, 0, 32, '', 0, 1),
(345, 'Gestão de Desenvolvimento e Poderes Locais: Marcos Teóricos e Avaliação', 18, 31, 1, 1, 274, 0, 0, 33, '', 0, 1),
(346, 'Contar histórias: uma arte sem idade', 18, 0, 1, 1, 275, 0, 0, 4, '', 0, 10),
(347, 'Estrutura e funcionamento do ensino fundamental', 18, 0, 1, 1, 133, 0, 0, 4, '', 0, 26),
(348, 'Experiências do Trabalho Intersetorial no Ceará', 18, 31, 1, 1, 0, 0, 0, 24, '', 0, 1),
(349, 'Gestão escolar, recursos financeiros e patrimoniais', 18, 0, 1, 1, 277, 0, 0, 34, '', 0, 1),
(350, 'Identidade e Grupo', 18, 0, 1, 1, 278, 0, 0, 35, '', 0, 1),
(351, '500 Anos de Educação no Brasil', 18, 0, 1, 1, 279, 280, 281, 13, '', 0, 4),
(352, 'História da educação do Ceará: sobre promessas, fatos e feitos', 18, 0, 1, 1, 282, 283, 0, 36, '', 0, 1),
(353, 'Coletânea - Indagações sobre currículo', 18, 33, 5, 1, 0, 0, 0, 24, '', 0, 1),
(354, 'O professor e a leitura: histórias de formação', 18, 0, 1, 1, 284, 285, 0, 17, '', 0, 1),
(355, 'Democratização, educação e cidadania', 18, 0, 1, 1, 286, 0, 0, 6, '', 0, 1),
(356, 'A Escola e sua Função Social', 22, 0, 1, 1, 287, 0, 0, 35, '', 0, 1),
(357, 'Gente da Gente', 18, 0, 1, 1, 266, 0, 0, 38, '', 0, 1),
(358, 'Iniciação à competência reconstrutiva do professor básico', 18, 0, 1, 1, 288, 0, 0, 37, '', 0, 1),
(359, 'REMINISCÊNCIAS - A História de um Professor Em Cinco Vivências', 18, 0, 1, 1, 289, 0, 0, 35, '', 0, 3),
(360, 'Aprendizagem contextualizada: discurso e inclusão na sala de aula', 18, 0, 1, 1, 290, 0, 0, 13, '', 0, 1),
(361, 'Prova, Provão, Camisa de Força da Educação', 18, 0, 1, 1, 291, 0, 0, 14, '', 0, 1),
(362, 'A psicanálise escuta a educação', 18, 0, 2, 1, 188, 0, 0, 13, '', 0, 2),
(363, 'Sistema Permanente de Avaliação da Educação Básica do Ceará ', 22, 0, 1, 1, 292, 0, 0, 35, '', 0, 1),
(365, 'Salto para o Futuro: Ensino Fundamental', 18, 0, 1, 1, 188, 0, 0, 24, '', 0, 2),
(366, 'Regimento: a cara de cada escola', 18, 0, 1, 1, 188, 0, 0, 34, '', 0, 1),
(367, 'A Educação Nas Constituições: Brasil e Ceará ', 18, 0, 1, 1, 282, 0, 0, 35, '', 0, 1),
(368, 'TV e informática na educação', 18, 0, 1, 1, 188, 0, 0, 24, '', 0, 1),
(369, 'Conjuntura Atual', 18, 0, 1, 1, 293, 0, 0, 38, '', 0, 1),
(370, 'Educação & Sociedade', 18, 0, 1, 1, 188, 0, 0, 6, '', 0, 1),
(371, 'Professora Primária - Mestra ou Tia', 18, 0, 1, 1, 294, 0, 0, 6, '', 0, 1),
(372, 'Trabalho com famílias', 18, 0, 1, 1, 188, 0, 0, 39, '', 0, 1),
(373, 'Programa Nacional de Fortalecimento dos Conselhos Escolares: Conselho escolar e a aprendizagem na escola', 18, 0, 1, 1, 188, 0, 0, 24, '', 0, 2),
(374, 'Formação de Professores', 18, 0, 1, 1, 295, 296, 0, 9, '', 0, 1),
(377, 'Avaliar para Conhecer, Examinar para Excluir', 18, 0, 1, 1, 297, 0, 0, 40, '', 0, 1),
(378, 'Educação Africanidades Brasil', 18, 0, 1, 1, 188, 0, 0, 24, '', 0, 1),
(379, 'Ensino de Ciências', 18, 0, 1, 1, 188, 0, 0, 41, '', 0, 1),
(380, 'Almanaque pedagógico afro-brasileiro', 18, 0, 1, 1, 298, 0, 0, 15, '', 0, 2),
(381, 'Indicadores da qualidade na educação', 18, 0, 1, 1, 188, 0, 0, 24, '', 0, 3),
(382, 'A juventude brasileira ganha uma nova escola de Ensino Médio', 18, 0, 2, 1, 299, 0, 0, 42, '', 0, 1),
(383, 'Alfabetização Sem Segredos ', 22, 0, 1, 1, 300, 0, 0, 43, '', 0, 1),
(384, '	Programa Nacional de Fortalecimento dos Conselhos Escolares: Conselho escolar e a educação no campo', 18, 0, 1, 1, 188, 0, 0, 24, '', 0, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `matricula` int(11) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `telefone1` varchar(20) DEFAULT NULL,
  `telefone2` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whats` varchar(20) DEFAULT NULL,
  `tipo` int(11) NOT NULL DEFAULT '2',
  `stt` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`matricula`, `senha`, `nome`, `telefone1`, `telefone2`, `email`, `whats`, `tipo`, `stt`) VALUES
(1, '12', 'Pedro', '(85) 99276-4449', '(85) 76676-7676', '2732@dwjdwn.com', '(43) 44343-4343', 2, 1),
(2, '4', '', '', '', 'a', '', 1, 1),
(13, '1', 'AA', '(13) 11331-3113', '', 'eqwdwqadw@gmail.com', '(12) 31332-3232', 2, 2),
(14, '3242', 'Pedro', '4344', '', '424242@gmail.com', '424442', 2, 1),
(15, '', 'K', '', '', '', '', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`),
  ADD UNIQUE KEY `nomAut` (`nomAut`);

--
-- Indexes for table `editoras`
--
ALTER TABLE `editoras`
  ADD PRIMARY KEY (`id_editora`),
  ADD UNIQUE KEY `nomEdi` (`nomEdi`);

--
-- Indexes for table `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id_emp`),
  ADD UNIQUE KEY `idUsu` (`idUsu`),
  ADD KEY `fk_idBra` (`id_livro`) USING BTREE,
  ADD KEY `fk_usu` (`idUsu`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`),
  ADD UNIQUE KEY `nomGen` (`nomGen`);

--
-- Indexes for table `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id_obra`),
  ADD UNIQUE KEY `titulo` (`titulo`),
  ADD KEY `fk_idq` (`autor`),
  ADD KEY `fk_gends` (`genero`),
  ADD KEY `fk_gen2` (`genero2`),
  ADD KEY `fk_aut2` (`autor2`),
  ADD KEY `fk_aut3` (`autor3`),
  ADD KEY `fk_editora` (`editora`),
  ADD KEY `titulo_2` (`titulo`);
ALTER TABLE `obras` ADD FULLTEXT KEY `titulo_3` (`titulo`);
ALTER TABLE `obras` ADD FULLTEXT KEY `titulo_4` (`titulo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT for table `editoras`
--
ALTER TABLE `editoras`
  MODIFY `id_editora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `obras`
--
ALTER TABLE `obras`
  MODIFY `id_obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD CONSTRAINT `fk_idBra` FOREIGN KEY (`id_livro`) REFERENCES `obras` (`id_obra`),
  ADD CONSTRAINT `fk_usu` FOREIGN KEY (`idUsu`) REFERENCES `usuarios` (`matricula`);

--
-- Limitadores para a tabela `obras`
--
ALTER TABLE `obras`
  ADD CONSTRAINT `fk_aut2` FOREIGN KEY (`autor2`) REFERENCES `autor` (`id_autor`),
  ADD CONSTRAINT `fk_aut3` FOREIGN KEY (`autor3`) REFERENCES `autor` (`id_autor`),
  ADD CONSTRAINT `fk_editora` FOREIGN KEY (`editora`) REFERENCES `editoras` (`id_editora`),
  ADD CONSTRAINT `fk_gen` FOREIGN KEY (`genero`) REFERENCES `generos` (`id_genero`),
  ADD CONSTRAINT `fk_gen2` FOREIGN KEY (`genero2`) REFERENCES `generos` (`id_genero`),
  ADD CONSTRAINT `fk_idq` FOREIGN KEY (`autor`) REFERENCES `autor` (`id_autor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
