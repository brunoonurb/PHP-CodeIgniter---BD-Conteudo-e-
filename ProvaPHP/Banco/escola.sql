create database EscolaEnsinoMedio;
use EscolaEnsinoMedio;

/*alterar
alter table alunos add email varchar(50) not null;
alter table alunos add data varchar(50) not null; 
alter table professores add nivel int(15);
alter table professores add status int(15);
*/

create table alunos (
id int (15) auto_increment,
nome varchar (50) not null,
sobrenome varchar (50) not null,
idade varchar (50) not null,
senha varchar (50) not null,
id_turma int (15) not null,
status int (15) not null,
nivel int (15) not null,
email varchar (50) not null,
data varchar (50) not null,
primary key (id)
);

create table turma (
id int (15) auto_increment,
nome varchar (50) not null,
turno varchar (50) not null,
status int (15) not null,
primary key (id)
);

create table grade (
id int (15) auto_increment,
id_turma int (15) not null,
id_materia int (15) not null,
primary key (id)
);
create table fotos (
id int (15) auto_increment,
endereco varchar (255) not null,
id_usuario int (15),
 nivel int (15),
 primary key (id)
);
create table materias (
id int (15) auto_increment,
nome varchar (50) not null,
id_professor int (15) not null,
status int (15) not null,
primary key (id)
);

create table professores (
id int (15) auto_increment,
nome varchar (50) not null,
sobrenome varchar (50) not null,
idade varchar (50) not null,
senha varchar(50) not null,
email varchar (50) not null,
status int (15) not null,
nivel int (15) not null,
data varchar (50) not null,
primary key (id)
);
create table notas (
id int (15) auto_increment,
id_aluno int (15) not null,
id_materia int (15) not null,
nota float (15) not null,
primary key (id)
);

