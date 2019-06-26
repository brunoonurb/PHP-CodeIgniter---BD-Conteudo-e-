create database bruno;
use bruno;
create table clientes(
Id_cliente int(10) auto_increment,
nome varchar(40) NOT NULL,
endereco varchar(30) NOT NULL,
rg int(10) NOT NULL,
telefone int(10), 
PRIMARY KEY(id_cliente)
);

create table produtos(
Id_produto int(10) auto_increment,
nome varchar(40) NOT NULL,
preco float(10) NOT NULL,
dept varchar(20),
PRIMARY KEY(id_produto)
);
create table compras(
Id_produto int(10) ,
id_clientes int(10) 
);

DELETE FROM `bruno`.`clientes` WHERE (`Id_cliente` = '6');

INSERT INTO clientes (id_cliente,nome,endereco,rg,telefone) VALUES (null,"Romero","Rua Pitanga",11223344,99663300);
INSERT INTO clientes (id_cliente,nome,endereco,rg,telefone) VALUES (null,"Joao","Rua Arvorada",22222222,33333333);
INSERT INTO clientes (id_cliente,nome,endereco,rg,telefone) VALUES (null,"Joao Pedro","Av Brasilia",8983535,36546543);

INSERT INTO clientes (id_cliente,nome,endereco,rg,telefone) VALUES (null,"Jucelino","Rua Roraima",5555555,44444444);
INSERT INTO clientes (id_cliente,nome,endereco,rg,telefone) VALUES (null,"Alberto","Av Tibagi",6666666,7777777);
INSERT INTO clientes (id_cliente,nome,endereco,rg,telefone) VALUES (null,"Fabricio","Av Guaruva",9999999,8888888);

insert into produtos (id_produto,nome,preco,dept) VALUES (null,"afe",9.30,"matinais");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Leite",5.50,"Matinais");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Cerial",7.50,"Matinais");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Pao",11.30,"Panificadora");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Mortadela",6.30,"Panificadora");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Calça",21.30,"loja");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Oculos",15.80,"loja");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Vassoura",18.30,"utilitarios");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Bateteira",45.30,"Eletrodomesticos");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Panela Eletrica",68.30,"Eletrodomesticos");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Liquidificador",38.30,"Eletrodomesticos");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Geladeira",38.30,"Eletrodomesticos");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Mesa",112.30,"Moveis");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Poltrona",220.30,"Moveis");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Tomate",1.30,"Frutaria");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Banana",4.30,"Frutaria");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Beteraba",6.30,"Frutaria");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Vinho Compo Largo",59.30,"Adega");
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Vinho 1982",500.50,"Adega");

select * from produtos;
select * from clientes;
select *from clientes where nome="joao";
select *from clientes where nome like "jo%";
select *from clientes where telefone like "%6";
select *from clientes where rg like "1%";
select *from clientes where rg like "1%";

select *from produtos where preco<6.00 and preco <=100.00;
select *from produtos order by preco desc;
select *from produtos order by preco asc ;

select *from produtos where preco between 20 and 150 order by dept asc ;




