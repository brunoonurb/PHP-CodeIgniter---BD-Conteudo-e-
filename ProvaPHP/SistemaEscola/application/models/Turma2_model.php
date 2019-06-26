<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turma2_model extends CI_model{


	public function verificarTurma ($nome,$turno){
		return $this->db->query("SELECT * FROM turma WHERE nome = '{$nome}' AND turno = '{$turno}' LIMIT 1")->result_array();
	}



	public function cadastrarTurma ($turma){


		$this->db->insert('turma', $turma);

	}


	public function listarTurma (){

		return $this->db->query("SELECT * FROM turma ")->result_array();

	}

	public function verificarTurmaEditar ($id){
		return $this->db->query("SELECT * FROM turma WHERE id = '{$id}' LIMIT 1")->row_array();

	}

	public function editarMateria ($materia){
		
		$dados = array('nome' => $materia['nome'] ,
			'id_professor' => $materia['id_professor'],
		);
		$this->db->set($dados);
		$this->db->where('id',$materia['id']);
		$this->db->update('materias');

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
	




}
