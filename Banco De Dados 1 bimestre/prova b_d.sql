create database loja ;

use loja;

create table Clientes(
id int auto_increment,
nome varchar(30) not null,
sobrenome varchar(30) not null,
rg varchar(30) not null,
primary key(id)
);

create table produtos(
id int auto_increment,
nome varchar(30) not null,
preco float(30) not null,
fabricante varchar(30) not null,
primary key(id)
);

insert into clientes (nome,sobrenome,rg) values ("je","br","25"); 

select * from clientes where rg like "%5";

insert into produtos (nome,preco,fabricante) values ("M R",200,"INTEL");


insert into produtos (nome,preco,fabricante) values ("MO",35.5,"FORTREK");
insert into produtos (nome,preco,fabricante) values ("T",67.9,"PLASTIPUTER");
insert into produtos (nome,preco,fabricante) values ("MON R",1400,"SONY");
insert into produtos (nome,preco,fabricante) values ("GA",145,"PLASTIPUTER");
insert into produtos (nome,preco,fabricante) values ("NO",5600,"SONY");
insert into produtos (nome,preco,fabricante) values ("FON",49.9,"PLASTIPUTER");
insert into produtos (nome,preco,fabricante) values ("HDSD",349,"KINSGTON");
insert into produtos (nome,preco,fabricante) values ("PV",1800,"SONY");
insert into produtos (nome,preco,fabricante) values ("PM",590,"PLASTIPUTER");
insert into produtos (nome,preco,fabricante) values ("PRO",780,"INTEL");
insert into produtos (nome,preco,fabricante) values ("COO",12.5,"PLASTIPUTER");
insert into produtos (nome,preco,fabricante) values ("PEND",25,"KINSGTON");
insert into produtos (nome,preco,fabricante) values ("IMP",436.9,"SONY");
insert into produtos (nome,preco,fabricante) values ("SC",200,"PLASTIPUTER");

select fabricante,Sum(preco)as 'total' from produtos
group by fabricante;



