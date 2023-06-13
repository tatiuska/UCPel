CREATE database alunos_cad;
USE alunos_cad;
CREATE table alunos(
	nome varchar(30),
    cpf int,
    d_nasc date,
    matr int,
    s_ingresso varchar(8),
    curso varchar(50)
);
DESCRIBE table alunos;
