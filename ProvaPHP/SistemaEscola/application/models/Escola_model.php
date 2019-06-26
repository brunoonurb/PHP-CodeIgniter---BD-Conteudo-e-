<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escola_model extends CI_model{

	public function listaTurmas (){

		return $this->db->query("SELECT * FROM turma ")->result_array();

	}

	public function listaMaterias ($id){

		$this->db->select('materias.nome AS materia ,turma.nome AS turma , professores.nome AS prof');
		$this->db->from('grade');
		$this->db->join('materias', 'materias.id = grade.id_materia');
		$this->db->join('turma', ' turma.id = grade.id_turma');
		$this->db->join('professores', 'professores.id = materias.id_professor');
		$this->db->where('grade.id_turma',$id);
		$query=$this->db->get();

		return $query->result_array();


	}

	public function listaNotas ($id){
		

		$this->db->select('materias.nome AS materia ,notas.nota, professores.nome AS prof');
		$this->db->from('notas');
		$this->db->join('materias', 'materias.id = notas.id_materia');
		$this->db->join('professores', 'professores.id = materias.id_professor');
		$this->db->where('notas.id_aluno',$id);
		$query=$this->db->get();

		return $query->result_array();

	}
	


}
