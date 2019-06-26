CREATE ALGORITHM = UNDEFINED VIEW `atualizarTurma` (id,nome,turno,materias) AS select turma.id, turma.nome, turma.turno,materias.nome as materias from  
grade inner join materias on materias.id = grade.id_materia inner join turma on turma.id = grade.id_turma;

/*u, view*/
SELECT * FROM atualizarTurma WHeRE id =
14;



/*     

select turma.id, turma.nome, turma.turno,materias.nome as materias from grade
inner join materias on materias.id = grade.id_materia
inner join turma on turma.id = grade.id_turma
where grade.id_turma = 14;


CREATE ALGORITHM = UNDEFINED VIEW `listarAlunoNotas` (id_materia,nome,status,id_aluno,professor,nota) AS select materias.id as id_materia,alunos.nome as nome,alunos.status as status,alunos.id as id_aluno,professores.nome as professor,professores.id as id_professor, notas.nota from turma inner join grade on grade.id_turma = turma.id inner join materias on materias.id = grade.id_materia inner join professores on professores.id = materias.id_professor inner join alunos on alunos.id_turma = turma.id left join notas on notas.id_aluno = alunos.id group by alunos.nome

*/

/*nao esta funcionando*/
CREATE ALGORITHM = UNDEFINED VIEW `listarAlunos` (id_materia,nome,status,id_aluno,nota) AS select materias.id as id_materia,alunos.nome as nome,alunos.status as status,alunos.id as id_aluno, notas.nota as nota from turma inner join grade on grade.id_turma = turma.id inner join materias on materias.id = grade.id_materia inner join professores on professores.id = materias.id_professor inner join alunos on alunos.id_turma = turma.id left join notas on notas.id_aluno = alunos.id group by alunos.nome
  
  
  /* testsss*/
  
  select materias.id as id_materia,alunos.nome as nome,alunos.status as status,alunos.id as id_aluno, notas.nota,professores.id as id_professor 
from turma 
inner join grade on grade.id_turma = turma.id 
inner join materias on materias.id = grade.id_materia 
inner join professores on professores.id = materias.id_professor
 inner join alunos on alunos.id_turma = turma.id 
 left join notas on notas.id_aluno = alunos.id  /*where professores.id =6 and materias.id = 8*/ group by alunos.nome;