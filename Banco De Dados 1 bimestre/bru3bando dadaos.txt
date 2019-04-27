
create database bru3;
use bru3;
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
insert into produtos (id_produto,nome,preco,dept) VALUES (null,"Concha",50.50,"Utilidades");

INSERT INTO compras (id_clientes,id_produto) VALUES (3,20);
INSERT INTO compras (id_clientes,id_produto) VALUES (3,2);
INSERT INTO compras (id_clientes,id_produto) VALUES (3,5);
INSERT INTO compras (id_clientes,id_produto) VALUES (3,9);
INSERT INTO compras (id_clientes,id_produto) VALUES (3,7);
INSERT INTO compras (id_clientes,id_produto) VALUES (3,15);
INSERT INTO compras (id_clientes,id_produto) VALUES (3,18);
INSERT INTO compras (id_clientes,id_produto) VALUES (3,19);
INSERT INTO compras (id_clientes,id_produto) VALUES (3,3);
INSERT INTO compras (id_clientes,id_produto) VALUES (3,6);
INSERT INTO compras (id_clientes,id_produto) VALUES (3,1);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,20);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,2);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,5);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,9);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,7);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,15);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,18);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,19);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,3);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,6);
INSERT INTO compras (id_clientes,id_produto) VALUES (1,1);

INSERT INTO compras (id_clientes,id_produto) VALUES (2,20);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,2);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,5);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,9);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,7);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,15);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,18);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,19);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,3);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,6);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,1);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,20);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,2);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,5);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,9);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,7);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,15);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,18);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,19);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,3);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,6);
INSERT INTO compras (id_clientes,id_produto) VALUES (2,1);


INSERT INTO compras (id_clientes,id_produto) VALUES (4,20);
INSERT INTO compras (id_clientes,id_produto) VALUES (4,2);
INSERT INTO compras (id_clientes,id_produto) VALUES (4,5);
INSERT INTO compras (id_clientes,id_produto) VALUES (4,9);
INSERT INTO compras (id_clientes,id_produto) VALUES (4,7);
INSERT INTO compras (id_clientes,id_produto) VALUES (415);
INSERT INTO compras (id_clientes,id_produto) VALUES (4,18);
INSERT INTO compras (id_clientes,id_produto) VALUES (4,19);
INSERT INTO compras (id_clientes,id_produto) VALUES (4,3);
INSERT INTO compras (id_clientes,id_produto) VALUES (4,6);
INSERT INTO compras (id_clientes,id_produto) VALUES (4,1);

INSERT INTO compras (id_clientes,id_produto) VALUES (5,20);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,2);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,5);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,9);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,7);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,15);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,18);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,19);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,3);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,6);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,1);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,20);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,2);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,5);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,9);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,7);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,15);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,18);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,19);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,3);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,6);
INSERT INTO compras (id_clientes,id_produto) VALUES (5,1);

select * from produtos;
select * from clientes;
select *from clientes where nome="joao";

select *from clientes where nome like "jo%";   /*quero nome começe com 0*/
select *from clientes where telefone like "%0"; /*quero telefone termine com 0*/
select *from clientes where rg like "%5";       /*quero rg termine com 5*/
select *from clientes where rg like "1%";     /*quero rg começe com 1*/

select *from produtos where preco<6.00 and preco <=100.00;
select *from produtos order by preco desc;
select *from produtos order by preco asc ;

select *from produtos where preco between 20 and 150 order by dept asc ; /*ordenar por dept como o preco de 20 ate 150 */




select distinct dept from produtos;                  /*nao reptir dept */
select distinct count(dept) from produtos ;          /*saber quantidade de dept*/
select count(*) from produtos where dept ="Adega";   /*saber quantidade do dept adega*/
select count(*) from produtos where dept ="Eletrodomesticos";

select * from produtos where dept ="Eletrodomesticos" and preco between 2.00 and 50.00;

select * from produtos where preco between 2.00 and 10.00 and (dept ="Eletrodomesticos"  or dept="Matinais")  order by nome asc; /* encontra no preco de 2 ate 10 nos dept */
select * from produtos where (dept ="Eletrodomesticos"  or dept="Matinais") and preco between 2.00 and 10.00 order by nome asc;

select * from produtos order by nome desc;

INSERT INTO compras (id_clientes,id_produto) VALUES (1,20);





select * from compras where id_clientes="1";
select sum(id_produto) from compras where id_clientes="1";

select sum(preco)  from produtos ;/* somar produtos*/


select *,sum(preco)  from produtos where nome like "b%" and preco between 1 and 100 and (dept="frutaria" or dept="matinais" or dept="eletrodomesticos") order by nome asc ;

select * from clientes order by id_cliente desc limit 3 ;


select nome,count(*) from produtos group by dept;
select dept,count(*) from produtos group by dept;

select max(dept) from produtos group by dept;

select max(dept) from produtos order by max(dept) ;

select max(dept),nome from produtos ;
select max(nome) from produtos ;
select min(nome) from produtos ;

select id_cliente as "Matricula", nome as "Nome completo", Endereco as "Endereço", rg as "RG", telefone as"Telefone"from clientes;



/*soma preco de compras de todos os produtos comprado por clientes*/
select clientes.nome, clientes.endereco, sum(produtos.preco) as total
from clientes 
inner join compras on clientes.Id_cliente = compras.id_clientes
inner join produtos on produtos.Id_produto = compras.Id_produto
group by clientes.nome;


INSERT INTO compras (id_clientes,id_produto) VALUES (9,2);
commit;

select count(compras.id_clientes)from compras; /*where compras.id_clientes=1;*/


select * from produtos;
select * from compras;

select * from departamento;

create table departamento(
id_departamento int(10) auto_increment,
nome varchar(50) not null,
primary key(id_departamento)
);

insert into departamento (nome) values ("Eletrodommestico");
insert into departamento (nome) values ("Matinais");
insert into departamento (nome) values ("Adega");
insert into departamento (nome) values ("Panificadora");
insert into departamento (nome) values ("Loja");
insert into departamento (nome) values ("Utilitarios");
insert into departamento (nome) values ("Moveis");
insert into departamento (nome) values ("Utilidades");
insert into departamento (nome) values ("Frutaria");

alter table produtos change Id_departamento Id_departamento varchar(50);

update produtos set id_departamento=1 where id_departamento="Eletrodomesticos"; 
update produtos set id_departamento=2 where id_departamento="matinais"; 
update produtos set id_departamento=3 where id_departamento="Adega";
update produtos set id_departamento=4 where id_departamento="panificadora";  
update produtos set id_departamento=5 where id_departamento="loja";
update produtos set id_departamento=6 where id_departamento="utilitarios"; 
update produtos set id_departamento=7 where id_departamento="moveis"; 
update produtos set id_departamento=8 where id_departamento="utilidades";
update produtos set id_departamento=9 where id_departamento="frutaria";   
update produtos set id_departamento=9 where id_produto=17;   


select produtos.nome,departamento.nome from departamento inner join produtos where departamento.id_departamento=produtos.id_produto; 

select  clientes.nome,sum(produtos.preco) from compras inner join clientes  on compras.id_clientes=clientes.id_cliente inner join produtos on compras.id_produto=produtos.id_produto; 






/*marcelo seleccao somando por grupo*/
select clientes.noclientesme, produtos.nome,produtos.preco
from clientes 
inner join compras on clientes.Id_cliente = compras.id_clientes
inner join produtos on produtos.Id_produto = compras.Id_produto
where clientes.Id_cliente = 2;







