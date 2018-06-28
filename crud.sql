CREATE SCHEMA crud;
USE crud;

CREATE TABLE Cliente
(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	Nome VARCHAR(60) NOT NULL,
	Email VARCHAR(150) NOT NULL,
	Cidade VARCHAR(100),
	UF VARCHAR(2)
);