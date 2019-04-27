use escola;
/*busca*/
select nome ,salario, case 
 When salario < 5000 then "menor que salario minimo"  
 When salario = 5000 then "salario minimo"
  When salario > 5000 then "maiorr que salario minimo" 
  end as 'Media salarial' 
  from professores;

select nome, cidade , salario,case 
when cidade = "Pinhais" then salario *0.1
  else "Nao merrece um aumento"
  end as 'Aumento de salario' 
  from professores;


select concat(nome, cidade , salario),case 
when cidade = "Pinhais" then salario *0.1
  else "Nao merrece um aumento"
  end as 'Aumento de salario' 
  from professores;
  
  select nome ,case(cidade)
  when "Pinhais" then "Nativo"
  else "Estrageiro" 
  end as 'naturalidade'from alunos;
  
  
  /*reverva quen serve o exercito /pode votar*/
  
  select nome ,case 
  when idade < 18 then "nao tem idade para servi o exercito"
  when idade = 18 then "Teve servi o exercito"
  when idade > 18 then "Esta na reservista"
 end as 'servico',
 case 
  when idade >= 18 then "devera votar"
  when idade < 18 and idade > 16 then "devera votar"
  when idade < 16 then "nao pode voatar"
 end as 'Voto' from alunos;
  
  /*reverva quen serve o exercito /pode votar com a idade*/
    select nome , idade,case 
  when idade < 18 then "nao tem idade para servi o exercito"
  when idade = 18 then "Teve servi o exercito"
  when idade > 18 then "Esta na reservista"
 end as 'servico',
 case 
  when idade >= 18 then "devera votar"
  when idade < 18 and idade > 16 then "devera votar"
  when idade < 16 then "nao pode voatar"
 end as 'Voto' from alunos;
