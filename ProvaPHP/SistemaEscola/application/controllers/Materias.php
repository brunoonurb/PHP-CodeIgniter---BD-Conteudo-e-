<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Controller {

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

	public function cadastrarMateria(){
		$situacao = "cadastrar";
		$this->session->set_userdata('situacao',$situacao);

		if (empty($_POST)){
			$this->load->model("Professor_model");
			$result = $this->Professor_model->listarProfessor();
			$dadosProfessor = array('professor' => $result, );

			$this->load->view("topo");
			$this->load->view("editarCadastrarMaterias",$dadosProfessor);
			
			$this->load->view("rodape");
		} else {
			$this->load->model("Materia_model");
			$existe = $this->Materia_model->verificarMateria($_POST["nome"]);
			if (empty($existe)) {
				$Materia = array(
					'nome' => $_POST['nome'],
					'id_professor' => $_POST['id_professor'],
					'status' => 1,
				);
				$this->Materia_model->cadastrarMateria($Materia);
				echo "<script>alert('A materia com o nome ".$_POST['nome']." foi cadastrada com sucesso')</script>";
				$this->load->view("topo");      /*Professor tira rever .. */
				$this->load->view("index");
				$this->load->view("rodape");
			} else {
				echo "<script>alert('A materia com o nome ".$_POST['nome']." ja existe')</script>";
				$this->load->model("Professor_model");
			$result = $this->Professor_model->listarProfessor();
			$dadosProfessor = array('professor' => $result, );

				$this->load->view("topo");
				$this->load->view("editarCadastrarMaterias",$dadosProfessor);
				$this->load->view("rodape");

			}


		}

	}

	public function listarMaterias(){
		$this->load->model("Professor_model");
		$professor = $this->Professor_model->listarProfessor();

		$this->load->model("Materia_model");
		$materia= $this->Materia_model->ListarMateria();
		$dados['professor'] = $professor;
		$dados['materia'] = $materia;
		$this->load->view("topo");
		$this->load->view("listarMaterias",$dados);
		$this->load->view("rodape");
	}

	public function editarMateria($id){	

		if (!empty($_POST)) {

			$materia = array(
				'id' => $_POST['id'],
				'nome' => $_POST['nome'],
				'id_professor' => $_POST['id_professor'],
			);

			$this->load->model("Materia_model");
			$this->Materia_model->editarMateria($materia);

			$this->listarMaterias();

		} else {
			$situacao = "editar";
			$this->session->set_userdata('situacao',$situacao);

			$this->load->model("Professor_model");
			$professor = $this->Professor_model->listarProfessor();

			$this->load->model("Materia_model");
			$materia = $this->Materia_model->verificarMateriaEditar($id);
			$dados['professor'] = $professor;
			$dados['materia'] = $materia;

			$this->load->view("topo");
			$this->load->view("editarCadastrarMaterias",$dados);
			$this->load->view("rodape");

		}
	}

	public function desativarMateria($id){



		$this->load->model("Materia_model");
		$result = $this->Materia_model->verificarMateriaNaGrade($id);

		if(empty($result)){
			$this->Materia_model->desativarMateria($id);
		}else {
			echo "<script>alert('A materia não pode ser deletada pois esta vinculada a uma grade')</script>";

		}
		$this->listarMaterias();
	}

	public function ativarMateria($id){



		$this->load->model("Materia_model");
		$result = $this->Materia_model->ativarMateria($id);

		$this->listarMaterias();
	}

	public function busca(){
		if(!empty($_POST)){
			$busca = $_POST['busca'];
			$conteudo = $_POST['conteudo'];
			if ($conteudo == "inativo" || $conteudo == "INATIVO" || $conteudo == "ina" || $conteudo == "INA") {
				$conteudo=0;
			}else if ($conteudo == "ativo" || $conteudo == "ATIVO" || $conteudo == "ati" || $conteudo == "ATI") {
				$conteudo=1;
			}

			$this->load->model("Materia_model");
			$materia = $this->Materia_model->busca($busca,$conteudo);
			if (empty($materia)) {
				$materia = $this->Materia_model->ListarMateria();
			}
			$this->load->model("Professor_model");
			$professor = $this->Professor_model->listarProfessor();

			$dados['professor'] = $professor;
			$dados['materia'] = $materia;
			$this->load->view("topo");
			$this->load->view("listarMaterias",$dados);
			$this->load->view("rodape");
		}
	}
}
