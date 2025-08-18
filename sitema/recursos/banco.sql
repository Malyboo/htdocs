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

--criar tabela de regiao
CREATE TABLE regiao(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45)
);

INSERT INTO regiao (nome) VALUES
('Noroeste'),
('Sul');

--criar tabela de cidade
CREATE TABLE cidade(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    CEP VARCHAR(15),
    estado CHAR(2),
    id_regiao_fk INT,
    FOREIGN KEY (id_regiao_fk) REFERENCES regiao(id)
);
INSERT INTO cidade (nome, cep, estado, id_regiao_fk) VALUES
('Nova Londrina', '97970-000', 'RP', 1),
('Marilena', '87960-000', 'PR', 1),
('Palmas', '85555-000', 'PR', 2);

SELECT cidade,nome, regiao.nome
FROM cidade INNER JOIN regiao
ON cidade.id_regiao_fk = regiao.id;


CREATE TABLE ponto_focal (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45),
    razao_social VARCHAR(45),
    tipo VARCHAR(45),
    cnpj_cpf VARCHAR(45),
    endereco VARCHAR(255),
    telefone VARCHAR(45),
    celular VARCHAR(45),
    email VARCHAR(45),
    id_cidade_fk INT,
    FOREIGN KEY (id_cidade_fk) REFERENCES cidade(id)
);

INSERT INTO ponto_focal (nome, razao_social, tipo, cnpj_cpf, endereco,
telefone, celular, email, id_cidade_fk) VALUES 
('Feclopes','Feclopes LTDA', 'Privada','12.345.111/0001-99', 'Rua das Flores, 123',
'(44) 1234-5678','(44)98823-4977','feclopes@gmail.com', 1),
('Assistência Social', 'Assistencia LTDA', 'Pública', '11.222.333/0001-01',
'Av. Central, 456', '(44)4002-8922', '(44)98844-5623', 'assistencia@gmail.com', 2);

CREATE TABLE area(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(15) NOT NULL,
    numero INT
);
INSERT INTO area(nome, numero) VALUES
('Tecnologia', 010101),
('Gastronomia', 123123),
('Gestão', 111111);

CREATE TABLE venda(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data DATE,
    origem VARCHAR(255),
    obs VARCHAR(255),
    id_ponto_focal_fk INT,
    id_area_fk INT,
    FOREIGN KEY (id_ponto_focal_fk) REFERENCES ponto_focal(id),
    FOREIGN KEY (id_area_fk) REFERENCES area(id)
);

INSERT INTO venda (data, origem, obs, id_ponto_focal_fk, id_area_fk) VALUES
('2025-07-30', 'Instagram', 'Vendida a vista', 1, 3),
('2025-07-28', 'Evento da prefeitura', 'vendido para meu prefeito', 2, 1);

SELECT cidade.nome, area.nome 
FROM cidade
INNER JOIN ponto_focal
ON cidade.id = ponto_focal.id_cidade_fk
INNER JOIN venda
ON ponto_focal.id = venda.id_ponto_focal_fk
INNER JOIN area
ON area.id = venda.id_area_fk;

SELECT * FROM ponto_focal
WHERE tipo = 'Privada'; 
