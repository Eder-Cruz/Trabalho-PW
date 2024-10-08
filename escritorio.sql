CREATE DATABASE escritorio;

CREATE TABLE orcamento(
cpf varchar(11),
nome varchar(255),
email varchar(255), 
telefone varchar(15), 
turno varchar(60),
varaprocessual varchar(30),
descricaoprocesso text
);

CREATE TABLE conta(
oab varchar(8),
nome varchar(255),
email varchar(255), 
cpf varchar(11)
);