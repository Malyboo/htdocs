-- SQL, linguagem de consulta estrutura
-- Criação de tabela
CREATE TABLE usuario(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(45),
    cpf VARCHAR(15),
    email VARCHAR(45),
    senha VARCHAR(45)   
);

--inserir dados na tabela
INSERT INTO usuario (nome, cpf, email, senha) VALUES
('Joaquim', '123.123.123.12', 'joaquim@gmail.com', '123'),
('Marlon', '111.111.111.11', 'marlon@gmail.com', '321');
