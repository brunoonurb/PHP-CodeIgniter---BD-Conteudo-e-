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

CREATE TABLE Orcamentos(
Id_Orcamento int AUTO_INCREMENT,
Id_Fornecedor int(30) NOT NULL,
Segmento varchar(30) NOT NULL,
Valor float(30) NOT NULL,
Produto varchar(30) NOT NULL,
PRIMARY KEY (Id_Orcamento)
) ;






