<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_model{


	public function verificarCadastro ($nome,$senha,$tabela){

		return $this->db->query("SELECT * FROM {$tabela} WHERE nome = '{$nome}' AND senha = '{$senha}' LIMIT 1")->result_array();

	}

	public function inserirCadastro($nome,$senha){

		if ($senha == "admin"){
			$nivel = 3;
		} else {
			$nivel = 1;
		}
		$status =1;
		$dados = array(
			'nome' =>$nome ,
			'senha' =>$senha, 
			'nivel' => $nivel,
		);

		$this->db->insert('cadastro',$dados);


	}


}