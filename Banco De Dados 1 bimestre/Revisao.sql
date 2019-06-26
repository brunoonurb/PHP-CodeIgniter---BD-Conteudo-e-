create database Revisao;
use Revisao;

create table Alunos (
Id int(10) auto_increment,
Nome varchar(30) not null,
Telefone Varchar(30) not null,
Id_Endereco int(10),
primary key(Id)

);
select * from Alunos;

ALTER TABLE Alunos ADD Id_Curso int(10);

UPDATE Alunos SET Id_Curso =1 WHERE Id = 1;
UPDATE Alunos SET Id_Curso =2 WHERE Id = 2;
UPDATE Alunos SET Id_Curso =2 WHERE Id = 3;
UPDATE Alunos SET Id_Curso =3 WHERE Id = 4;
UPDATE Alunos SET Id_Curso =4 WHERE Id = 5;

create table Enderecos (
Id int(10) auto_increment,
Rua Varchar(30) not null,
Bairro Varchar(30) not null,
Cidade varchar(30) not null,
primary key(Id)

);

select * from Enderecos;




create table Cursos (
Id int(10) auto_increment,
Nome varchar(30) not null,
Turno varchar(30) not null,
Valor float(20) not null,
primary key(Id)

);
select * from Cursos;

create table Professores (
Id int(10) auto_increment,
Nome varchar(30) not null,
Telefone Varchar(30) not null,
Id_Endereco int(10),
primary key(Id)

);

insert into Alunos (Nome,Telefone,Id_Endereco) values ("Joao","12345",1);
insert into Alunos (Nome,Telefone,Id_Endereco) values ("Maria","22347",2);
insert into Alunos (Nome,Telefone,Id_Endereco) values ("Amauri","32348",3);
insert into Alunos (Nome,Telefone,Id_Endereco) values ("Zeca","4234",4);
insert into Alunos (Nome,Telefone,Id_Endereco) values ("Holanda","52349",5);

insert into Enderecos (Rua,Bairro,Cidade) values ("Goiania","Cajuru","Curitiba");
insert into Enderecos (Rua,Bairro,Cidade) values ("AV Paulista","Merces","Pinhais");
insert into Enderecos (Rua,Bairro,Cidade) values ("felicia","Batel","Pirtaquara");
insert into Enderecos (Rua,Bairro,Cidade) values ("Raroima","Taruma","Pinhais");
insert into Enderecos (Rua,Bairro,Cidade) values ("Fortaleza","Barigui","Curitiba");

insert into Cursos (Nome,Turno,Valor) values ("Analise","Noite",900);
insert into Cursos (Nome,Turno,Valor) values ("Geografia","Noite",700);
insert into Cursos (Nome,Turno,Valor) values ("Historia","Manha",120);
insert into Cursos (Nome,Turno,Valor) values ("Veterinario","Tarde",1350);
insert into Cursos (Nome,Turno,Valor) values ("Medicina","MAnha",1500);

insert into Professores (Nome,Telefone,Id_Endereco) values ("Juca","2345",3);
insert into Professores (Nome,Telefone,Id_Endereco) values ("Mario","347",3);
insert into Professores (Nome,Telefone,Id_Endereco) values ("Aline","348",1);
insert into Professores (Nome,Telefone,Id_Endereco) values ("Zequina","34",5);
insert into Professores (Nome,Telefone,Id_Endereco) values ("Horinda","549",5);

/*WHeRE // like listar alunos com telefone teermine em 0*/

select * from Alunos where Telefone like"%9";



/*WHeRE  listar nome  telefone alunos com nome comece com Vogal*/

select Nome,Telefone from Alunos where Nome like"a%";

/*WHeRE // mostra curso com valorea de valor x a y*/

select * from Cursos where Valor between 1000 and 1500;

/*LIMIT // mostra 2 curso com maiores valores*/

select * from Cursos order by valor desc limit 2;

/*LLIMIT MOSTRA valore s mais baixo de 900 a 1200*/

select * from Cursos where Valor between 900 and 1500 Order by Valor asc limit 2 ;



/*DISTINT todos o s enderco sem repetir cidade*/

select distinct(Cidade) from Enderecos;

/*GROUP BY todos o s enderco sem repetir cidade*/

select * from Enderecos GROUP BY Cidade;

/*COUNT // mostra qauntos cursoexistem com valor de 100 a 1000*/

select count(id) from Cursos where Valor between 100 and 1000;

/*MAX // valor maior*/

select max(Valor)as 'VAlor maior' from Cursos; 

/*Min //  menor letra contando a primeira só*/

select min(Nome)as 'MAIS BAIXA' from Cursos; 

/*SUM //  somar todos os cursos*/

select SUM(Valor)as 'SOma' from Cursos; 

/*AVG //  Mostra a media*/

select AVG(Valor)as 'MAIS BAIXA' from Cursos; 

/*CASE // printar quem mora em pinhais e ricao else pobre/// BUSCA SIMPLES tem (condicao) */

select * , case(Cidade)
when 'Curitiba' then 'Rica'
else 'Pobre' end as 'Frase' from Enderecos; 

/*CASE // muito caro esta media esta barato  //BUSCA COMPOSTA NAO tem (condicao)*/

select * , case
when Valor>1400 then 'Caro'
when Valor <1400 and Valor >1000 then 'media'
when Valor<1000 then 'Barato'
end as 'MediaValor'  from Cursos ;


/*HAVING //como se fosse um IF  Valida TAMBEM nao estatica coluna criada no select */
select Cidade as 'cid' from Enderecos having cid = "Pinhais";

/*HAVING //todos os nomes dos alunos como id moiar que 3*/
select * from Alunos having Id >3 ;
select * from Alunos having Id >3 and Id<5;
select * from Alunos having Id !=3 ;/*dif <> tbm*/


/*Inner JOIn // nome dos alunos e emdereço*/

select Alunos.Nome,Enderecos.* from Alunos 
inner join Enderecos where Alunos.Id_Endereco=Enderecos.Id;

/*Inner JOIn/CASE // mostra do aluno e cidade cade curitba CIDADEGRANDE caso cidade nedia senao cidade pequena*/

select Alunos.Nome,Enderecos.Cidade,case(Cidade) 
when 'Curitiba' then 'cidade grande'
 when 'Pinhais' then 'cidade media'
 else 'ciade pequena' end as 'tamanho ' from Alunos 
inner join Enderecos where Alunos.Id_Endereco=Enderecos.Id ;

/*Inner JOIn//ALuno q fazen de analise e que e a cidade */

select Alunos.Nome,Cursos.Nome,Enderecos.Cidade from Alunos
inner join Cursos on Cursos.Id = Alunos.Id_Curso 
inner join Enderecos on Enderecos.Id = Alunos.Id_Endereco where Cursos.Nome="Historia";

select Alunos.Nome,Cursos.Nome,Enderecos.Cidade from Alunos
inner join Cursos on Cursos.Id = Alunos.Id_Curso 
inner join Enderecos on Enderecos.Id = Alunos.Id_Endereco order by Cursos.Nome;

select Alunos.Nome,Cursos.Nome,Enderecos.Cidade from Alunos
inner join Cursos on Cursos.Id = Alunos.Id_Curso 
inner join Enderecos on Enderecos.Id = Alunos.Id_Endereco where Cursos.Nome="Medicina";

use revisao;
 
 alter table enderecos add Pais varchar(30);/*criar nova tabela */
 alter table enderecos change Pais paiiis varchar(50);/*alterar nome da tabela */
 rename table Ende to  Enderecos; 
 
 /*UNION SELECT  para unir cada um com sua condiçoes (where)*/
 
 select "Alunos"as tipo ,Nome from Alunos  where id between 1 and 6 union select   "Professores",Nome from Professores where Id_Endereco = 3;





