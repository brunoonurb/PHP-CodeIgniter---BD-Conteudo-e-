use bru3;

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