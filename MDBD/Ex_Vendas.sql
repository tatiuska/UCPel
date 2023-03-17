-- ####################################################################
-- # Basic CREATE TABLE statement
-- # See https://www.ibm.com/docs/en/db2-for-zos/13?topic=statements-create-table for complete syntax.
-- ####################################################################
CREATE TABLE Vendas (
    ID_Venda INT,
    Curso VARCHAR(100),
    Aluno VARCHAR(100),
    Estado VARCHAR(200),
    Valor DECIMAL(10, 2)
);

INSERT INTO Vendas(ID_Venda, Curso, Aluno, Estado, Valor)
VALUES
    (1, 'Excel', 'João', 'SP', 100),
    (2, 'VBA', 'Lucas', 'RJ', 100), 
    (3, 'Excel', 'Alice', 'SP', 100), 
    (4, 'Excel', 'Pedro', 'PE', 100), 
    (5, 'VBA', 'Amanda', 'BA', 50), 
    (6, 'Power BI', 'Rita', 'RS', 80), 
    (7, 'Excel', 'Julia', 'RJ', 100), 
    (8, 'Power BI', 'Caio', 'SP', 80), 
    (9, 'Power BI', 'Lara', 'MG', 80), 
    (10, 'Excel', 'Rogério', 'AC', 100);

-- Inserindo nova linha à tabela
INSERT INTO Vendas(ID_Venda, Curso, Aluno, Estado, Valor)
VALUES
    (11, 'Power BI', 'Alessandra', 'PR', 100);

-- Atualizando o nome do curso para a aluna Rita
UPDATE Vendas SET Curso = 'Excel' WHERE Aluno = 'Rita';

-- Deletando uma linha da tabela
DELETE FROM Vendas WHERE ID_Venda = 3;

-- Adicionando coluna à tabela
ALTER FROM Vendas ADD Finalizado VARCHAR(10);
INSERT INTO Vendas(Finalizado)
VALUES
    (1, 'SIM'), 
    (2, 'NÃO'),
    (3, 'NÃO'),
    (4, 'SIM'),
    (5, 'SIM'), 
    (6, 'SIM'), 
    (7, 'NÃO'),
    (8, 'SIM'), 
    (9, 'NÃO'), 
    (10, 'NÃO'), 
    (11, 'SIM');

