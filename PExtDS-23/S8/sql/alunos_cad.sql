-- PExt Tarefa Semana 8
-- Criação da base de dados alunos_cad com especificações de caracteres para UTF-8
CREATE DATABASE alunos_cad
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_unicode_ci;

-- Criação da tabela Alunos, com a chave primária id, e os campos nome, cpf, data de nascimento, telefone, matrícula, semestre de ingresso, curso e formando.
CREATE TABLE `alunos` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(50) NOT NULL,
    `cpf` bigint,
    `d_nasc` date,
    `telefone` char(15),
    `matr` int,
    `s_ingresso` varchar(10),
    `curso` varchar(50),
    `formando` bit, -- O campo formando é para o aluno informar se está no último semestre do curso ou não.
    PRIMARY KEY(`id`)
) DEFAULT CHARSET = utf8mb4; -- Especificação de caracteres para a tabela alunos.

-- Cadastrando 15 alunos para o Banco de Dados.
SELECT * FROM alunos;

INSERT INTO `alunos` VALUES 
('1', 'Gabriela Mendes da Silva', '03277336590', '1998-04-19', '(74) 3675-7401', '2022101009', '01/2022', 'Análise e Desenvolvimento de Sistemas', '0'),
('2', 'Pedro Augusto Oliveira', '04493044934', '1998-12-31', '(44) 3557-2462', '2022098765', '02/2020', 'Análise e Desenvolvimento de Sistemas', '1'),
('3', 'Mariela Gonçalves Freitas', '07758375049', '2003-01-02', '(51) 3415-3631', '2022101876', '01/2022', 'Redes de Computadores', '0'), 
('4', 'Fernando Nicácio Lacerda', '83171707055', '2004-11-30', '', '', '01/2023', 'Enfermagem', '0'),
('5', 'Ana Luíza Pereira', '', '', '', '', '', 'Gestão de TI', '1'),
('6', 'Ulisses Silva da Rocha', '', '', '', '', '', '', ''),
('7', 'Sabrina Timm Soares', '', '', '', '', '', '', ''),
('8', 'Mariano Corrêa Silveira', '', '', '', '', '', '', ''),
('9', 'Kênia Rodrigues Vargas', '', '', '', '', '', '', ''),
('10', 'Luciana Silva da Silva', '', '', '', '', '', '', ''),
('11', 'Paula Apolinario Dias', '', '', '', '', '', '', ''),
('12', 'Francisco Ferdinando Franco', '', '', '', '', '', '', ''),
('13', 'Natália Mendes Ribeiro', '', '', '', '', '', '', ''),
('14', 'Diogo Fonseca da Silva', '', '', '', '', '', '', ''),
('15', 'Pablo Farias da Costa', '', '', '', '', '', '', '');

-- Alterando a estrutura da tabela para alterar o nome de uma das colunas.

-- Escolhendo e manupulando tuplas.