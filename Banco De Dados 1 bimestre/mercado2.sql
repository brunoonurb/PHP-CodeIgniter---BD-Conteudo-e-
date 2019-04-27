CREATE DATABASE Mercado;
use Mercado;

CREATE TABLE Empregados(
Id_Empregado int AUTO_INCREMENT,
Nome varchar(30) NOT NULL,
Sobrenome varchar(30) NOT NULL,
RG varchar(30) NOT NULL,
Telefone int(30) NOT NULL,
Setor varchar(30) NOT NULL,
Salario float (30) NOT NULL,
PRIMARY KEY (Id_Empregado)
) ;
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Thiago","Andrade","12345678912","97989596","Padaria",1.200);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Ricardo","Oliveira","34567891234","66335544","Acouque",1.900);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Clarice","Ribeira","45678912345","87456630","Frutaria",2.300);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Jeronimo","Cadiz","56789123650","91223366","Caixa",3.200);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Jaoo","Camargo","67891234567","97923589","Estoquista",1.000);

INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Maria","Holanda","7894561230","96874563","Padaria",1.800);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Kessy","Ricker","89456123786","693568975","Acouque",1.500);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Antonia","Maria","10235698745","874805145","Frutaria",3.300);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Jeronimo","Duarte","9865321478","92859645","Caixa",1.400);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Hugo","Silva","89652347952","95201135","Estoquista",4.000);

INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Patricia","Antunes","10235698743","97668892","Padaria",1.600);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Ygor","Garcia","32658421369","9875620","Acouque",2.100);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Carla","Lima","98754237951","874967820","Frutaria",3.300);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Karine","Moreira","8952245121","95767820","Frutaria",3.300);
INSERT Empregados (Nome,Sobrenome,RG,Telefone,Setor,Salario) VALUES ("Jose","Mariano","89452193473","91894562","Caixa",5.200);

CREATE TABLE Fornecedores(
Id_Fornecedor int AUTO_INCREMENT,
Empresa varchar(30) NOT NULL,
Endereco varchar(30) NOT NULL,
Segmento varchar(30) NOT NULL,
PRIMARY KEY (Id_Fornecedor)
) ;
INSERT Fornecedores (Empresa,Endereco,Segmento) VALUES ("Friboi","Rua Camelitas","Carne");
INSERT Fornecedores (Empresa,Endereco,Segmento) VALUES ("Sadia","Rua Rondonia","Frios");
INSERT Fornecedores (Empresa,Endereco,Segmento) VALUES ("Danone","Rua Barao","Laticidios");
INSERT Fornecedores (Empresa,Endereco,Segmento) VALUES ("Sugrilio","Av Brasilia","Cereais");
INSERT Fornecedores (Empresa,Endereco,Segmento) VALUES ("Genius","Av Palmital","Refrigerantes");
INSERT Fornecedores (Empresa,Endereco,Segmento) VALUES ("Mega Pao","Rua Romero Brito","Paes");
INSERT Fornecedores (Empresa,Endereco,Segmento) VALUES ("Campo Largo","Rua Campo Largo","Vinhos");
INSERT Fornecedores (Empresa,Endereco,Segmento) VALUES ("Nestle","Rua Ribeirao","Cholates");
INSERT Fornecedores (Empresa,Endereco,Segmento) VALUES ("Passa Tempo","Av Cristal","Biscoitos");
INSERT Fornecedores (Empresa,Endereco,Segmento) VALUES ("Codoninmhas","Rua Limeira","Ovos");


CREATE TABLE Compras(
Id_Compra int AUTO_INCREMENT,
Id_Fornecedor int(30) NOT NULL,
Valor float(30) NOT NULL,
Produto varchar(30) NOT NULL,
PRIMARY KEY (Id_Compra)
) ;


INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,50.50,"Coxao Mole");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,520.60,"Alcatra");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,320.89,"Posta Vermelha");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,350.90,"Pernil");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,300.50,"Picanha");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,46.50,"Maminha");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,25.60,"Copim");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,200.00,"Posta Vermelha");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,89.50,"Patinho");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,60.50,"Acem");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (1,130.30,"Lombo Agulha");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (2,78.99,"Hamburger");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (2,230.80,"Lasanha");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (2,120.50,"Coxinha");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (3,99.50,"Yorgute");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (3,160.00,"Leite Fementado");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (3,50.50,"Danone");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (4,35.50,"Sugrilhos Aveia");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (4,59.50,"Sugrilhos Chocolate");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (4,53.50,"Sugrilhos Letrinhas");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (5,20.50,"600ml");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (5,63.89,"Refri 1l");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (5,20.670,"Refri 2l");

INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (6,20.50,"Pao de Mel");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (6,20.50,"Pao Caseiro");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (7,20.50,"Campo Largo");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (7,20.50,"Vinho 89");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (8,20.50,"Bis");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (8,20.50,"Barra Chocalate");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (8,70.50,"Chocalate Branco");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (8,20.50,"Barrinha");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (9,20.50,"Bolacha Recheada");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (9,20.50,"Bolacha sem Recheio");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (10,20.50,"Ovinhos Pintados");
INSERT Compras (Id_Fornecedor,Valor,Produto) VALUES (10,20.50,"Ovinhos Dourados");


CREATE TABLE Estoque(
Id_Compra int(30) NOT NULL,
Data_de_Entrada varchar(30) NOT NULL,
Data_de_Saida varchar(30) NOT NULL
) ;

INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (1,"01/02/2019","01/03/2019");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (2,"02/10/2011","31/02/2018");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (3,"03/11/2015","21/03/2018");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (4,"04/12/2017","21/08/2018");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (5,"05/18/2011","11/03/2016");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (6,"06/07/2008","01/07/2012");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (7,"07/03/2007","01/08/2011");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (8,"08/05/2005","03/02/2015");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (9,"09/11/2004","04/12/2014");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (12,"12/02/2012","21/10/2015");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (11,"10/01/2018","15/10/2016");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (12,"11/05/2017","17/11/2018");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (13,"13/06/2016","19/09/2017");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (14,"25/09/2015","20/03/2016");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (15,"26/08/2014","08/08/2015");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (16,"30/07/2013","01/02/2016");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (17,"12/04/2011","03/03/2017");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (18,"18/02/2010","08/04/2018");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (19,"15/0/2009","15/06/2019");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (20,"23/02/2017","18/07/2018");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (21,"22/11/2017","12/09/2018");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (22,"18/12/2018","11/08/2019");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (23,"19/11/2014","09/08/2017");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (24,"17/10/2013","07/06/2015");
INSERT Estoque (Id_Compra,Data_de_Entrada,Data_de_Saida) VALUES (25,"14/11/2012","12/05/2014");





CREATE TABLE Orcamentos(
Id_Orcamento int AUTO_INCREMENT,
Id_Fornecedor int(30) NOT NULL,
Segmento varchar(30) NOT NULL,
Valor float(30) NOT NULL,
Produto varchar(30) NOT NULL,
PRIMARY KEY (Id_Orcamento)
) ;


INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (1,"Carne",3.300,"Alcatra");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (1,"Carne",700,"Posta Branca");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (2,"Frios",800,"Lasanha");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (2,"Frios",530,"Hamburger");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (3,"Laticidios",230,"Yourte");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (3,"Laticidios",560,"Leite Fermentado");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (4,"Cereais",100,"Sugrilhos Aveia");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (4,"Cereais",80,"Sugrilhos Chocolate");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (5,"Refrigerantes",950,"Refri 1l");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (5,"Refrigerantes",660,"Refri 600ml");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (6,"Paes",263.60,"Pao caseiro");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (6,"Paes",180,"Pao de Mel");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (7,"Vinhos",999.99,"Campo Largo");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (7,"Vinhos",2.500,"Vinho");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (8,"Cholates",395,"Bis");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (8,"Cholates",1.200,"Chocolate Branco");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (9,"Biscoitos",425,"Bolacha Recheada");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (9,"Biscoitos",692,"Balacha sem Recheio");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (10,"Ovos",136,"Ovos Capira");
INSERT Orcamentos (Id_Fornecedor,Segmento,Valor,Produto) VALUES (10,"Ovos",58,"Ovinhos Dourados");


SELECT * FROM Empregados;

SELECT Nome , RG FROM Empregados ORDER BY RG DESC ;

SELECT * FROM Empregados ORDER BY Salario DESC LIMIT 5;

SELECT DISTINCT(Setor)  FROM Empregados;

SELECT Telefone FROM Empregados WHERE Telefone LIKE "%5";

SELECT * FROM Fornecedores ORDER BY Segmento ASC;

SELECT Empresa FROM Fornecedores WHERE Empresa LIKE "C%";

SELECT * FROM Orcamentos WHERE Valor BETWEEN 15 AND 1000;

SELECT * FROM Orcamentos INNER JOIN Fornecedores ON Fornecedores.Id_Fornecedor = Orcamentos.Id_Fornecedor ORDER BY Fornecedores.Empresa ;

SELECT Fornecedores.Empresa,SUM(Compras.Valor) FROM Compras INNER JOIN Fornecedores ON Compras.Id_Fornecedor = Fornecedores.Id_Fornecedor GROUP BY Fornecedores.Empresa ;

SELECT Estoque.Data_De_Entrada,Compras.Produto,Compras.valor FROM Compras INNER JOIN Estoque ON Compras.Id_Compra = Estoque.Id_Compra ;

SELECT Fornecedores.Empresa,Compras.Produto  FROM Compras INNER JOIN Fornecedores ON Compras.Id_Fornecedor = Fornecedores.Id_Fornecedor ;

SELECT Segmento,SUM(Valor) FROM Orcamentos GROUP BY segmento ;










