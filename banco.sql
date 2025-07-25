--TRABALHO COM A LINGUAGEM DE BANCO SQL
--  DDL - Linguagem de definição de dados
-- SQL, linguagem de consulta estrutura
-- Criação de tabela
CREATE TABLE usuario(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(45),
    cpf VARCHAR(15),
    email VARCHAR(45),
    senha VARCHAR(45)   
);
--ALTERANDO TABELA, adicionando coluna idade
ALTER TABLE usuario ADD idade INT;

--ALTERANDO TABELA, remover coluna idade
ALTER TABLE usuario DROP COLUMN idade;

--EXCLUIR TABELA INTEIRA
DROP TABLE usuario;

-- DML - linguagem de manipulação de dados
--inserir dados na tabela
INSERT INTO usuario (nome, cpf, email, senha) VALUES
('Joaquim', '123.123.123.12', 'joaquim@gmail.com', '123'),
('Marlon', '111.111.111.11', 'marlon@gmail.com', '321');

--alterar dados na tabela
UPDATE usuario SET nome ="Alice", email="alice@gmail.com" WHERE id =2;

--deletar dados na tabela
DELETE FROM usuario WHERE id =3;

--SELECIONAR TODOS OS REGISTROS DA TABELA
--seleciona a coluna nome e cpf em todos os registros
SELECT nome, cpf FROM usuario;
SELECT * FROM usuario;
--seleciona todas as colunas onde os nomes for igual a marlon
SELECT * FROM usuario WHERE nome LIKE 'Marlon';
--
SELECT * FROM usuario WHERE id BETWEEN 1 AND 3 ORDER BY nome;
