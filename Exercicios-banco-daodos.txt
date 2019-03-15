
SELECT * FROM Empregados;

		Id,  Nome,     Sobrenome, RG,           Telefone,  Setor,     Salario
		1,  Thiago,    Andrade,   12345678912,  97989596,  Padaria,    1.2
		2,  Ricardo,   Oliveira,  34567891234,  66335544,  Acouque,    1.9
		3,  Clarice,   Ribeira,   45678912345,  87456630,  Frutaria,   2.3
		4,  Jeronimo,  Cadiz,     56789123650,  91223366,  Caixa,      3.2
		5,  Jaoo,      Camargo,   67891234567,  97923589,  Estoquista, 1
		6,  Maria,     Holanda,   7894561230,   96874563,  Padaria,    1.8
		7,  Kessy,     Ricker,    89456123786,  693568975, Acouque,    1.5
		8,  Antonia,   Maria,     10235698745,  874805145, Frutaria,   3.3
		9,  Jeronimo,  Duarte,    9865321478,   92859645,  Caixa,      1.4
		10, Hugo,      Silva,     89652347952,  95201135,  Estoquista, 4
		11, Patricia,  Antunes,   10235698743,  97668892,  Padaria,    1.6
		12, Ygor,      Garcia,    32658421369,  9875620,   Acouque,    2.1
		13, Carla,     Lima,      98754237951,  874967820, Frutaria,   3.3
		14, Jose,      Mariano,   89452193473,  91894562,  Caixa,      5.2
		15, Karine,    Moreira,   8952245121,   95767820,  Frutaria,   3.3



SELECT Nome , RG FROM Empregados ORDER BY RG DESC ;

		# Nome,    RG
		Carla,    98754237951
		Jeronimo, 9865321478
		Hugo,     89652347952
		Karine,   8952245121
		Kessy,    89456123786
		Jose,     89452193473
		Maria,    7894561230
		Jaoo,     67891234567
		Jeronimo, 56789123650
		Clarice,  45678912345
		Ricardo,  34567891234
		Ygor,     32658421369
		Thiago,   12345678912
		Antonia,  10235698745
		Patricia, 10235698743
		
SELECT * FROM Empregados ORDER BY Salario DESC LIMIT 5;

		Id, Nome,    Sobrenome, RG,          Telefone,  Setor,      Salario
		14, Jose,    Mariano,   89452193473, 91894562,  Caixa,      5.2
		10, Hugo,    Silva,     89652347952, 95201135,  Estoquista, 4
		8,  Antonia, Maria,     10235698745, 874805145, Frutaria,   3.3
		13, Carla,   Lima,      98754237951, 874967820, Frutaria,   3.3
		15, Karine,  Moreira,   8952245121,  95767820,  Frutaria,   3.3

SELECT DISTINCT(Setor)  FROM Empregados;

		Setor
		Padaria
		Acouque
		Frutaria
		Caixa
		Estoquista
		
SELECT Telefone FROM Empregados WHERE Telefone LIKE "%5";

		Telefone
		693568975
		874805145
		92859645
		95201135

SELECT * FROM Fornecedores ORDER BY Segmento ASC;

		Id, Empresa, Endereco, Segmento
		9,  Passa Tempo, Av Cristal, Biscoitos
		1,  Friboi, Rua Camelitas, Carne
		4,  Sugrilio, Av Brasilia, Cereais
		8,  Nestle, Rua Ribeirao, Cholates
		2,  Sadia, Rua Rondonia, Frios
		3,  Danone, Rua Barao, Laticidios
		10, Codoninmhas, Rua Limeira, Ovos
		6,  Mega Pao, Rua Romero Brito, Paes
		5,  Genius, Av Palmital, Refrigerantes
		7,  Campo Largo, Rua Campo Largo, Vinhos
		
SELECT Empresa FROM Fornecedores WHERE Empresa LIKE "C%";

		Empresa
		Campo Largo
		Codoninmhas

SELECT * FROM Orcamentos WHERE Valor BETWEEN 15 AND 1000;

		# Id_Orcamento, Id_Fornecedor, Segmento, Valor, Produto
		2, 1, Carne, 700, Posta Branca
		3, 2, Frios, 800, Lasanha
		4, 2, Frios, 530, Hamburger
		5, 3, Laticidios, 230, Yourte
		6, 3, Laticidios, 560, Leite Fermentado
		7, 4, Cereais, 100, Sugrilhos Aveia
		8, 4, Cereais, 80, Sugrilhos Chocolate
		9, 5, Refrigerantes, 950, Refri 1l
		10, 5, Refrigerantes, 660, Refri 600ml
		11, 6, Paes, 263.6, Pao caseiro
		12, 6, Paes, 180, Pao de Mel
		13, 7, Vinhos, 999.99, Campo Largo
		15, 8, Cholates, 395, Bis
		17, 9, Biscoitos, 425, Bolacha Recheada
		18, 9, Biscoitos, 692, Balacha sem Recheio
		19, 10, Ovos, 136, Ovos Capira
		20, 10, Ovos, 58, Ovinhos Dourados

SELECT * FROM Orcamentos INNER JOIN Fornecedores ON Fornecedores.Id_Fornecedor = Orcamentos.Id_Fornecedor ORDER BY Fornecedores.Empresa ;

		# Id_Orcamento, Id_Fornecedor, Segmento, Valor, Produto, Id_Fornecedor, Empresa, Endereco, Segmento
		13, 7, Vinhos, 999.99, Campo Largo, 7, Campo Largo, Rua Campo Largo, Vinhos
		14, 7, Vinhos, 2.5, Vinho, 7, Campo Largo, Rua Campo Largo, Vinhos
		20, 10, Ovos, 58, Ovinhos Dourados, 10, Codoninmhas, Rua Limeira, Ovos
		19, 10, Ovos, 136, Ovos Capira, 10, Codoninmhas, Rua Limeira, Ovos
		6, 3, Laticidios, 560, Leite Fermentado, 3, Danone, Rua Barao, Laticidios
		5, 3, Laticidios, 230, Yourte, 3, Danone, Rua Barao, Laticidios
		2, 1, Carne, 700, Posta Branca, 1, Friboi, Rua Camelitas, Carne
		1, 1, Carne, 3.3, Alcatra, 1, Friboi, Rua Camelitas, Carne
		10, 5, Refrigerantes, 660, Refri 600ml, 5, Genius, Av Palmital, Refrigerantes
		9, 5, Refrigerantes, 950, Refri 1l, 5, Genius, Av Palmital, Refrigerantes
		12, 6, Paes, 180, Pao de Mel, 6, Mega Pao, Rua Romero Brito, Paes
		11, 6, Paes, 263.6, Pao caseiro, 6, Mega Pao, Rua Romero Brito, Paes
		16, 8, Cholates, 1.2, Chocolate Branco, 8, Nestle, Rua Ribeirao, Cholates
		15, 8, Cholates, 395, Bis, 8, Nestle, Rua Ribeirao, Cholates
		18, 9, Biscoitos, 692, Balacha sem Recheio, 9, Passa Tempo, Av Cristal, Biscoitos
		17, 9, Biscoitos, 425, Bolacha Recheada, 9, Passa Tempo, Av Cristal, Biscoitos
		3, 2, Frios, 800, Lasanha, 2, Sadia, Rua Rondonia, Frios
		4, 2, Frios, 530, Hamburger, 2, Sadia, Rua Rondonia, Frios
		8, 4, Cereais, 80, Sugrilhos Chocolate, 4, Sugrilio, Av Brasilia, Cereais
		7, 4, Cereais, 100, Sugrilhos Aveia, 4, Sugrilio, Av Brasilia, Cereais
		
SELECT Fornecedores.Empresa,SUM(Compras.Valor) FROM Compras INNER JOIN Fornecedores ON Compras.Id_Fornecedor = Fornecedores.Id_Fornecedor GROUP BY Fornecedores.Empresa ;

		# Empresa, SUM(Compras.Valor)
		Campo Largo, 41
		Codoninmhas, 41
		Danone, 310
		Friboi, 2095.79
		Genius, 105.06
		Mega Pao, 41
		Nestle, 132
		Passa Tempo, 41
		Sadia, 430.29
		Sugrilio, 148.5


SELECT Estoque.Data_De_Entrada,Compras.Produto,Compras.valor FROM Compras INNER JOIN Estoque ON Compras.Id_Compra = Estoque.Id_Compra ;

		# Data_De_Entrada, Produto, valor
		01/02/2019, Coxao Mole, 50.5
		02/10/2011, Alcatra, 520.6
		03/11/2015, Posta Vermelha, 320.89
		04/12/2017, Pernil, 350.9
		05/18/2011, Picanha, 300.5
		06/07/2008, Maminha, 46.5
		07/03/2007, Copim, 25.6
		08/05/2005, Posta Vermelha, 200
		09/11/2004, Patinho, 89.5
		12/02/2012, Hamburger, 78.99
		10/01/2018, Lombo Agulha, 130.3
		11/05/2017, Hamburger, 78.99
		13/06/2016, Lasanha, 230.8
		25/09/2015, Coxinha, 120.5
		26/08/2014, Yorgute, 99.5
		30/07/2013, Leite Fementado, 160
		12/04/2011, Danone, 50.5
		18/02/2010, Sugrilhos Aveia, 35.5
		15/0/2009, Sugrilhos Chocolate, 59.5
		23/02/2017, Sugrilhos Letrinhas, 53.5
		22/11/2017, 600ml, 20.5
		18/12/2018, Refri 1l, 63.89
		19/11/2014, Refri 2l, 20.67
		17/10/2013, Pao de Mel, 20.5
		14/11/2012, Pao Caseiro, 20.5

SELECT Fornecedores.Empresa,Compras.Produto  FROM Compras INNER JOIN Fornecedores ON Compras.Id_Fornecedor = Fornecedores.Id_Fornecedor ;

		# Empresa, Produto
		Friboi, Coxao Mole
		Friboi, Alcatra
		Friboi, Posta Vermelha
		Friboi, Pernil
		Friboi, Picanha
		Friboi, Maminha
		Friboi, Copim
		Friboi, Posta Vermelha
		Friboi, Patinho
		Friboi, Acem
		Friboi, Lombo Agulha
		Sadia, Hamburger
		Sadia, Lasanha
		Sadia, Coxinha
		Danone, Yorgute
		Danone, Leite Fementado
		Danone, Danone
		Sugrilio, Sugrilhos Aveia
		Sugrilio, Sugrilhos Chocolate
		Sugrilio, Sugrilhos Letrinhas
		Genius, 600ml
		Genius, Refri 1l
		Genius, Refri 2l
		Mega Pao, Pao de Mel
		Mega Pao, Pao Caseiro
		Campo Largo, Campo Largo
		Campo Largo, Vinho 89
		Nestle, Bis
		Nestle, Barra Chocalate
		Nestle, Barrinha
		Passa Tempo, Bolacha Recheada
		Passa Tempo, Bolacha sem Recheio
		Codoninmhas, Ovinhos Pintados
		Codoninmhas, Ovinhos Dourados
		Nestle, Chocalate Branco
		
SELECT Segmento,SUM(Valor) FROM Orcamentos GROUP BY segmento ;

# Segmento, SUM(Valor)
Biscoitos, 1117
Carne, 703.3
Cereais, 180
Cholates, 396.2
Frios, 1330
Laticidios, 790
Ovos, 194
Paes, 443.6
Refrigerantes, 1610
Vinhos, 1002.49
		



































	