CREATE database alunos_cad;
USE alunos_cad;
CREATE table alunos(
	nome varchar(30),
    cpf int,
    data_nasc date,
    num_matr int,
    sem_ingresso varchar(8),
    curso varchar(50)
);
DESCRIBE table alunos;
