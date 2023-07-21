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
('1', 'Gabriela Mendes da Silva', '32773365901', '1998-04-19', '(74) 3675-7401', '2022101009', '01/2022', 'Análise e Desenvolvimento de Sistemas', FALSE),
('2', 'Pedro Augusto Oliveira', '44930449342', '1998-12-31', '(44) 3557-2462', '2020098765', '02/2020', 'Análise e Desenvolvimento de Sistemas', TRUE),
('3', 'Mariela Gonçalves Freitas', '77583750493', '2003-01-02', '(51) 3415-3631', '2022000876', '01/2022', 'Redes de Computadores', FALSE), 
('4', 'Fernando Nicácio Lacerda', '83171707055', '2004-11-30', '(53) 98765-8877', '2023009728', '01/2023', 'Enfermagem', FALSE),
('5', 'Ana Luíza Pereira', '15305851041', '2000-09-02', '(65) 2260-0438', '2022008345', '02/2022', 'Gestão de TI', FALSE),
('6', 'Ulisses Silva da Rocha', '41890390552', '1993-06-07', '(27) 2766-7089', '2022084356', '02/2022', 'Pedagogia', FALSE),
('7', 'Sabrina Timm Soares', '36540457073', '2000-11-03', '(63) 3323-4216', '2022078653', '02/2020', 'Publicidade e Propaganda', TRUE),
('8', 'Mariano Corrêa Silveira', '76463079049', '1999-03-20', '(84) 2559-7622', '2022100954', '01/2023', 'Direito', FALSE),
('9', 'Kênia Rodrigues Vargas', '35980514090', '1999-12-19', '(55) 2921-9169', '2022090987', '02/2021', 'Gestão de TI', FALSE),
('10', 'Luciana Silva da Silva', '89973897005', '1999-02-28', '(48) 3236-1453', '2022084568', '01/2021', 'Gastronomia', FALSE),
('11', 'Paula Amorim Dias', '85987629039', '2001-01-01', '(51) 2964-3231', '2022082341', '02/2020', 'Redes de Computadores', TRUE),
('12', 'Francisco Ferdinando Marques', '72678698076', '2002-10-02', '(24) 3123-1438', '2022102267', '02/2022', 'Publicidade e Propaganda', FALSE),
('13', 'Natália Mendes Ribeiro', '72228607037', '2003-05-17', '(54) 2852-6676', '2022091123', '02/2021', 'Pedagogia', FALSE),
('14', 'Diogo Fonseca da Silva', '35774030040', '1989-09-09', '(53) 2167-5152', '2022101876', '01/2023', 'Redes de Computadores', FALSE),
('15', 'Pablo Farias da Costa', '22639506056', '1990-07-23', '(88) 3145-8910', '2022096745', '02/2020', 'Análise e Desenvolvimento de Sistemas', TRUE);

-- Alterando a estrutura da tabela para alterar o nome de uma das colunas.

-- Escolhendo e manupulando tuplas.