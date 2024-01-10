

--Criar banco e tabela Produtos
CREATE DATABASE IF NOT EXISTS sistema_web;
USE sistema_web;
CREATE TABLE IF NOT EXISTS Produtos (
    ProdutoId INT NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    Qtde INT NOT NULL,
    Valor FLOAT NOT NULL,
    PRIMARY KEY (ProdutoId)
);

-- Criar colunas e a tabela Login
USE sistema_web;
Create TABLE IF NOT EXISTS login(
    LoginId INT NOT NULL AUTO_INCREMENT,
    Usuario VARCHAR(255) NOT NULL, 
    Senha INT NOT NULL,
    PRIMARY KEY (LoginId)
);

-- inserir dados na tabela Login
USE sistema_web;
INSERT INTO login (LoginId, Usuario, Senha) VALUES (1,'admin', 1234);
