create database LocadoraCar;
use LocadoraCar;

/*  Cliente Carro Seotr Funcionario   Nome qtd f Horario de expendireente,  */


create table Cliente (
Id int AUTO_INCREMENT,
Nome varchar(50) NOT NULL,
Sobrenome varchar(50) not null,
idade int(15) not null,
TipoCnh varchar(50)not null,
Rg varchar(50) not null,	
PRIMARY KEY(Id)
);

create table Funcionario (
Id int AUTO_INCREMENT,
Nome varchar(50) NOT NULL,
Sobrenome varchar(50) not null,
idade int(15) not null,
Rg varchar(50) not null,
Telefone varchar(50) not null,	
PRIMARY KEY(Id)
);

create table Carro (
Id int AUTO_INCREMENT,
Marca varchar(50) NOT NULL,
Ano int(15) not null,
Renavam int(15) not null,
Tipo_Direcao varchar(50)not null,
Tipo_cambio varchar(50) not null,	
PRIMARY KEY(Id)
);


create table Setor (
Id int AUTO_INCREMENT,
Nome varchar(50) NOT NULL,
QtdFuncionarios int(15) not null,
HorarioEntrada varchar(50) not null,
HorarioSaida varchar(50)not null,
Lider varchar(50) not null,	
PRIMARY KEY(Id)
);





