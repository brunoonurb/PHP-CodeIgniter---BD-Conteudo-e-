create database escola;
use escola;

create table alunos(
id_aluno int auto_increment,
nome varchar(30) not null,
idade int(15) not null,
cidade varchar(30) not null,
estado varchar(30) not null,
pais varchar(30) not null,
telefone int(15) not null,
PRIMARY KEY (id_aluno)
);

create table professores(
id_professor int auto_increment,
nome varchar(30) not null,
idade int(15) not null,
cidade varchar(30) not null,
estado varchar(30) not null,
pais varchar(30) not null,
telefone int(15) not null,
PRIMARY KEY (id_professor)
);
Alter table alunos add salario float(30);
Alter table professores add salario float(30);



insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Joao",23,"Curitiba","Parana","Brasil",12345678);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Alex",29,"Pinhais","Parana","Brasil",23456789);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Paulo",48,"Richo","Holister","Holanda",1234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Ze Antonio",52,"Grandes Rios","Santa Catarina","Brasil",1234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Reinaldo",35,"City Ville","Los Angeles","Estados Unidos",1234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Marcelo",46,"Caisara","Guiana","Italia",15454234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Juliano",22,"Queirense","Lester","Canada",541541234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Ygor",18,"Estancia Alegre","Joao Pessoa","Brasil",54541234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Kaique",26,"Fazenda Rio Grande","Parana","Brasil",5248574);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Erik",12,"Monte Leste","Beam","Uruguai",145234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Leila",15,"Cidade Rochuosa","Guiana","Panana",241541234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Mariete",64,"Cairuram","Moçambique","Africa",7878234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Digao",09,"Goiania","Goias","Brasil",97871234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Thais",27,"Goiania","Gois","Brasil",354541234);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Otavio",36,"Sao Paulo","Sao Paulo","Brasil",12324414);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Jessica",45,"Chigago","New York","Estados Unidos",5465464);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Queiroz",85,"City Well","New York","Estados Unidos",54545);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Gustavo",65,"City Union","New York","Estados Unidos",1264545);
insert into alunos (nome,idade,cidade,estado,pais,telefone) values ("Italo",23,"Queirense","Lester","Canada",1287654);

insert into professores (nome,idade,cidade,estado,pais,telefone) values ("Taty",23,"Curitiba","Parana","Brasil",4154554);
insert into professores (nome,idade,cidade,estado,pais,telefone) values ("Mathes",29,"Pinhais","Parana","Brasil",54655);
insert into professores (nome,idade,cidade,estado,pais,telefone) values ("Marcos",09,"Goiania","Goias","Brasil",5455545);
insert into professores (nome,idade,cidade,estado,pais,telefone) values ("Jessica",27,"Goiania","Gois","Brasil",54654684);
insert into professores (nome,idade,cidade,estado,pais,telefone) values ("Olivia",36,"Sao Paulo","Sao Paulo","Brasil",684874);
insert into professores (nome,idade,cidade,estado,pais,telefone) values ("Isabele",85,"City Well","New York","Estados Unidos",5465465);
insert into professores (nome,idade,cidade,estado,pais,telefone) values ("Maria Helena",18,"Estancia Alegre","Joao Pessoa","Brasil",9748545);
insert into professores (nome,idade,cidade,estado,pais,telefone) values ("Joao Paulo",26,"Fazenda Rio Grande","Parana","Brasil",4859784);

UPDATE professores SET salario=5000.00 WHERE id_professor=1;
UPDATE professores SET salario=52000.00 WHERE id_professor=2;
UPDATE professores SET salario=4500.00 WHERE id_professor=3;
UPDATE professores SET salario=7500.00 WHERE id_professor=4;
UPDATE professores SET salario=6200.00 WHERE id_professor=5;
UPDATE professores SET salario=5800.00 WHERE id_professor=6;
UPDATE professores SET salario=9000.00 WHERE id_professor=7;
UPDATE professores SET salario=4900.00 WHERE id_professor=8;

UPDATE alunos SET salario=1.200 WHERE id_aluno=1;
UPDATE alunos SET salario=1.000 WHERE id_aluno=2;
UPDATE alunos SET salario=500 WHERE id_aluno=3;
UPDATE alunos SET salario=2.000 WHERE id_aluno=4;
UPDATE alunos SET salario=2.000 WHERE id_aluno=5;
UPDATE alunos SET salario=1.100 WHERE id_aluno=6;
UPDATE alunos SET salario=997 WHERE id_aluno=7;
UPDATE alunos SET salario=1.500 WHERE id_aluno=8;
UPDATE alunos SET salario=3.000 WHERE id_aluno=9;
UPDATE alunos SET salario=5.000 WHERE id_aluno=10;
UPDATE alunos SET salario=400 WHERE id_aluno=11;
UPDATE alunos SET salario=5.000 WHERE id_aluno=12;
UPDATE alunos SET salario=3.000 WHERE id_aluno=13;
UPDATE alunos SET salario=2.100 WHERE id_aluno=14;
UPDATE alunos SET salario=1.600 WHERE id_aluno=15;
UPDATE alunos SET salario=1.300 WHERE id_aluno=17;




select cidade from alunos union select cidade from professores;

select cidade from alunos union all select cidade from professores;

select Nome from alunos where nome like"M%" union select nome from professores where nome like"M%" ;

select "alunos"as tipo,nome,cidade,idade from alunos where nome like"M%" union select "professores",nome,cidade,estado from professores where nome like"M%";


select "alunos"as tipo,alunos.* from alunos where idade<20 and cidade="Goiania" union select "professores",professores.* from professores where telefone like"%4" and cidade="Curitiba" 
order by estado asc;


SELECT * FROM alunos where salario > 3000;

SELECT nome , idade , salario from alunos , (SELECT avg(salario) as Msalario from alunos) as Media where alunos.salario > media.Msalario;

SELECT nome , idade , salario from alunos , (SELECT avg(salario) as Msalario from professores) as Media where alunos.salario < media.Msalario;

SELECT nome , idade , salario from alunos , (SELECT avg(salario) as Msalario from professores) as Media where alunos.salario < media.Msalario;





select "alunos"as tipo,nome from alunos ,(select avg(alunos.salario) from alunos) as soma union select all "professores",nome from professores,(select avg(professores.salario) from professores)as soma;




select "alunos"as tipo,nome from alunos union select all "professores",nome from professores;


select alunos.nome,alunos.salario from alunos,
(select avg(salario) as salario from ( (select salario from professores) 
union all (select salario from alunos)) as temp )as temp where alunos.salario>temp.salariob;



