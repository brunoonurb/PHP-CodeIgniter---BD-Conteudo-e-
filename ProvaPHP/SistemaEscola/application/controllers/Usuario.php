<?php
defined('BASEPATH') OR exit('No direct script access allowed');
			//$this->session->set_userdata('id',$result['id']);

class Usuario extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function cadastro(){
		$this->load->view("cadastro");
	}

	public function cadastrarUsuario(){
		$this->load->model("Usuario_model");
		$result = $this->Usuario_model->verificarCadastro($_POST["nome"],$_POST["senha"]);
		if($result){
			echo "Ja existe usuario com esses dados.";
		} else {
			$this->Usuario_model->inserirCadastro($_POST["nome"],$_POST["senha"]);
			$this->load->view("login");
		}
	}

	public function validarLogin()
	{
		if (($_POST['nome']=="admin")&&($_POST["senha"]=="admin")&&($_POST['tabela']=="administradores")){
			$this->session->set_userdata('nivel',3);
			$this->session->set_userdata('nome','Administrador');
			$this->load->view("topo");
			$this->load->view("index");
			$this->load->view("rodape");
		} else if ($_POST['tabela']!="administradores"){

			$this->load->model("Login_model");
			$result = $this->Login_model->verificarCadastro($_POST["nome"],$_POST["senha"],$_POST['tabela']);
			if($result){
			//var_dump($result);
				$nome = $result[0]['nome'];
				$nivel = $result[0]['nivel'];
				$id = $result[0]['id'];
				$sobrenome = $result[0]['sobrenome'];
			//echo "USUARIOOOO: ".$usuario;
			//$dados2 = mysqli_fetch_array($result);
			//var_dump($dados2);
			//$id = $dados2;
			//echo "dados2 ".$dados2;
			//echo "id ".$id;
			//echo $dados2['nome'];
			//foreach($result as $dados){
			//	$id =  $dados['id'];
			//	$nivel = $dados['nivel'];
			//	$nome = $dados['nome'];
			//}
				$this->session->set_userdata('id',$id);
				$this->session->set_userdata('nivel',$nivel);
				$this->session->set_userdata('nome',$nome);
				$this->session->set_userdata('sobrenome',$sobrenome);

				$this->load->view("topo");
				$this->load->view("index");
				$this->load->view("rodape");
			}else{
				$this->load->view("login");
				echo  "<script>alert('Cadastro não existe');</script>";
			}
		} else {
			$this->load->view("login");
			echo  "<script>alert('Cadastro não existe');</script>";
			
		}
	}
	}//Fim controller
