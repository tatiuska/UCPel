-- PExt Tarefa Semana 8
-- Criação da base de dados alunos_cad com especificações de caracteres para UTF-8
CREATE DATABASE alunos_cad
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_0900_ai_ci;

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

-- Alterando a estrutura da tabela para alterar o nome de uma das colunas.

-- Escolhendo e manupulando tuplas.