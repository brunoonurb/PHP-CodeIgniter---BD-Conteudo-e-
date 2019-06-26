<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professor_model extends CI_model{


	public function verificarProfessor ($nome,$senha){
		/*return $this->db->query("SELECT * FROM professor WHERE nome = '{$nome}' AND email = '{$email}' LIMIT 1")->result_array(); 
*/

		return $this->db->query("SELECT * FROM professores WHERE nome = '{$nome}' AND senha = '{$senha}' LIMIT 1")->result_array();

	}

	public function cadastrarProfessor ($professor){

		$this->db->insert('professores', $professor);

	}


	public function cadastrarFotoprofessor ($foto){

		$this->db->insert('fotos', $foto);

	}
	public function endrecoFotoprofessor ($id){

		return $this->db->query("SELECT * FROM fotos WHERE id_usuario = '{$id}'  LIMIT 1")->result_array();

	}

	public function listarProfessor (){

		return $this->db->query("SELECT * FROM professores ")->result_array();

	}

	public function busca ($busca,$conteudo){
		
		$this->db->like($busca,$conteudo);
		return $this->db->get('professores')->result_array();
		
		


	}

	public function verificarProfessorEditar ($id){
		return $this->db->query("SELECT * FROM professores WHERE id = '{$id}' LIMIT 1")->result_array();

	}
	public function editarProfessor ($professor,$id){
		#var_dump($professor);

		$this->db->where('id', $id);
		$this->db->set('nome', $professor['nome']);
		$this->db->set('sobrenome', $professor['sobrenome']);
		$this->db->set('senha', $professor['senha']);
		$this->db->set('email', $professor['email']);
		$this->db->update('professores');


	}
	public function desativarProfessor ($id){

		$this->db->set('status', 0);
		$this->db->where('id', $id);
		$this->db->update('professores');		

	}
	public function ativarProfessor ($id){

		$this->db->set('status', 1);
		$this->db->where('id', $id);
		$this->db->update('professores');		

	}
	public function buscaProfessor ($id){

		return $this->db->query("SELECT * FROM professores WHERE id = '{$id}' LIMIT 1")->result_array();

	}

	public function turmas ($id){


		$this->db->select('turma.nome as turma,turma.status as status,materias.nome as materia,professores.nome as professor');
		$this->db->from('turma');
		$this->db->join('grade', 'grade.id_turma = turma.id');
		$this->db->join('materias', ' materias.id = grade.id_materia');
		$this->db->join('professores', 'professores.id = materias.id_professor');
		$this->db->where('professores.id',$id);
		$this->db->group_by('turma');
		$query=$this->db->get();

		return $query->result_array();
		
	}

	public function materias ($turma,$id){
		
		$this->db->select('materias.*,materias.id as id,materias.status as status,materias.nome as nome,professores.nome as professor');
		$this->db->from('turma');
		$this->db->join('grade', 'grade.id_turma = turma.id');
		$this->db->join('materias', ' materias.id = grade.id_materia');
		$this->db->join('professores', 'professores.id = materias.id_professor');
		$this->db->where('turma.nome',$turma);
		$this->db->where('professores.id',$id);
		$query=$this->db->get();

		return $query->result_array();
		
	}

	public function alunos ($materia_id,$id){

		/*select * from listaAlunos where id_professor =2 and id_materia = 2 ;

		return $this->db->query("SELECT * FROM listaAluno WHERE id_professor = '{$id}' and id_materia = '{$materia_id}'")->result_array();*/

		
		$this->db->select('materias.id as id_materia,alunos.nome as nome,alunos.id as id_aluno,alunos.status as status,professores.id as id_professor, notas.nota as nota');
		$this->db->from('turma');
		$this->db->join('grade', 'grade.id_turma = turma.id');
		$this->db->join('materias', ' materias.id = grade.id_materia');
		$this->db->join('professores', 'professores.id = materias.id_professor');
		$this->db->join('alunos', 'alunos.id_turma = turma.id');
		 $this->db->join("notas","notas.id_aluno = alunos.id", 'left');
		$this->db->where('materias.id',$materia_id);
		$this->db->where('professores.id',$id);
		$query=$this->db->get();

		return $query->result_array();
		
	}
	public function inserirNotaAluno ($nota){
		
		$this->db->insert('notas', $nota);
		
	}
	public function atualizarNotaAluno ($nota,$id_aluno){
	
		$this->db->set($nota);
		$this->db->where('id_aluno',$id_aluno);
		$this->db->update('notas');
		
	}
	

}
