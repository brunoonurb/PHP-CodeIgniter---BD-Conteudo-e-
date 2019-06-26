<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Aluno_model extends CI_model{


	public function verificarAluno ($nome,$senha){
		/*return $this->db->query("SELECT * FROM aluno WHERE nome = '{$nome}' AND email = '{$email}' LIMIT 1")->result_array(); 
*/

		return $this->db->query("SELECT * FROM alunos WHERE nome = '{$nome}' AND senha = '{$senha}' LIMIT 1")->result_array();

	}

	public function cadastrarAluno ($aluno){

		$this->db->insert('alunos', $aluno);

	}


	public function cadastrarFotoAluno ($foto){

		$this->db->insert('fotos', $foto);

	}
	public function endrecoFotoAluno ($id){

		return $this->db->query("SELECT * FROM fotos WHERE id_usuario = '{$id}'  LIMIT 1")->result_array();

	}

	public function listarAlunos (){

		return $this->db->query("SELECT * FROM alunos ")->result_array();

	}

public function busca ($busca,$conteudo){

		 $this->db->like($busca,$conteudo);
		return $this->db->get('alunos')->result_array();
		
		


	}

	public function verificarAlunoEditar ($id){
		return $this->db->query("SELECT * FROM alunos WHERE id = '{$id}' LIMIT 1")->result_array();

	}
	public function editarAluno ($aluno,$id){
		
		var_dump($aluno);

		$this->db->set($aluno);
		$this->db->where('id', $id);
		$this->db->update('alunos');

	}
	public function desativarAluno ($id){

		$this->db->set('status', 0);
		$this->db->where('id', $id);
		$this->db->update('alunos');		

	}
	public function ativarAluno ($id){

		$this->db->set('status', 1);
		$this->db->where('id', $id);
		$this->db->update('alunos');		

	}
	public function buscaAluno ($id){

		return $this->db->query("SELECT * FROM alunos WHERE id = '{$id}' LIMIT 1")->result_array();

	}

}
