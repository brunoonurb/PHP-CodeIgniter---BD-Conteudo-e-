<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Turma_model extends CI_model{


	public function verificarTurma ($nome,$turno){
		return $this->db->query("SELECT * FROM turma WHERE nome = '{$nome}' AND turno = '{$turno}' LIMIT 1")->result_array();
	}



	public function cadastrarTurma ($turma){


		$this->db->insert('turma', $turma);

	}

	public function cadastrarGrade ($materias){

		$this->db->insert('grade', $materias);

	}


	public function listarTurma (){

		return $this->db->query("SELECT * FROM turma ")->result_array();

	}


	public function verificarTurmaEditar ($id){
		return $this->db->query("SELECT * FROM atualizarTurma WHERE id ='{$id}'")->result_array();

	}

	public function editarTurma ($turma){
		
		
		$this->db->set($turma);
		$this->db->where('id',$turma['id']);
		$this->db->update('turma');

	}

	public function desativarTurma ($id){

		$this->db->set('status', 0);
		$this->db->where('id', $id);
		$this->db->update('turma');		

	}

	public function ativarTurma ($id){

		$this->db->set('status', 1);
		$this->db->where('id', $id);
		$this->db->update('turma');		

	}
	public function busca ($busca,$conteudo){
		
		$this->db->like($busca,$conteudo);
		return $this->db->get('turma')->result_array();
		
		


	}


	function deletarTurma($id)
{
   $this->db->where('id', $id);
   $this->db->delete('turma'); 
}

	function deletarGrade($id)
{
   $this->db->where('id_turma', $id);
   $this->db->delete('grade'); 
}
	function selectGrade($id)//eu sei q vc vai ler essa mensagem bruno, perdaoooo n vou mexerrr ta, muita coisa...
{
   return $this->db->query("SELECT * FROM grade WHERE id_turma = '{$id}' ")->result_array(); 
}	




}
