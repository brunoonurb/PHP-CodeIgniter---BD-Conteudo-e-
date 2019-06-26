



/*materias*/
insert into materias (nome,id_professor,status,nivel) values ("Ciencia",1,1,2);
insert into materias (nome,id_professor,status,nivel) values ("Historia",1,1,2);
insert into materias (nome,id_professor,status,nivel) values ("Quimica",2,1,2);
insert into materias (nome,id_professor,status,nivel) values ("Artes",4,1,2);
insert into materias (nome,id_professor,status,nivel) values ("Matematica",3,1,2);
insert into materias (nome,id_professor,status,nivel) values ("Ingles",4,1,2);


/*grade*/
insert into grade (id_turma,id_materia) values ("1","1");
insert into grade (id_turma,id_materia) values ("1","2");
insert into grade (id_turma,id_materia) values ("1","3");
insert into grade (id_turma,id_materia) values ("2","3");
insert into grade (id_turma,id_materia) values ("2","2");
insert into grade (id_turma,id_materia) values ("3","3");
insert into grade (id_turma,id_materia) values ("3","4");
/*notas*/
insert into notas (id_aluno,id_materia,nota) values (3,1,10);
insert into notas (id_aluno,id_materia,nota) values (3,2,9.0);
insert into notas (id_aluno,id_materia,nota) values (3,3,8.0);