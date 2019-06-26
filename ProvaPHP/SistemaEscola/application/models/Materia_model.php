<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materia_model extends CI_model{


	public function verificarMateria ($nome){
		return $this->db->query("SELECT * FROM materias WHERE nome = '{$nome}' LIMIT 1")->result_array();
	}



	public function cadastrarMateria ($materia){


		$this->db->insert('materias', $materia);

	}


	public function listarMateria (){

		return $this->db->query("SELECT * FROM materias ")->result_array();

	}

	public function verificarMateriaEditar ($id){
		return $this->db->query("SELECT * FROM materias WHERE id = '{$id}' LIMIT 1")->row_array();

	}

	public function editarMateria ($materia){
		
		$dados = array('nome' => $materia['nome'] ,
			'id_professor' => $materia['id_professor'],
		);
		$this->db->set($dados);
		$this->db->where('id',$materia['id']);
		$this->db->update('materias');

	}

	public function desativarMateria ($id){

		$this->db->set('status', 0);
		$this->db->where('id', $id);
		$this->db->update('materias');		

	}

	public function ativarMateria ($id){

		$this->db->set('status', 1);
		$this->db->where('id', $id);
		$this->db->update('materias');		

	}
	public function busca ($busca,$conteudo){
		
		$this->db->like($busca,$conteudo);
		return $this->db->get('materias')->result_array();
			
	}

	public function verificarMateriaNaGrade($id){


				return $this->db->query("SELECT * FROM grade WHERE id_materia = '{$id}'")->result_array();

	}
	




}
