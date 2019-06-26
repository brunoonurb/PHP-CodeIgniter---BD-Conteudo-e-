<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grades extends CI_Controller {

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

	public function cadastrarGrade(){
		$situacao = "cadastrar";
		$this->session->set_userdata('situacao',$situacao);


		if (empty($_POST)){
			$this->load->model("Materia_model");
			$materia= $this->Materia_model->ListarMateria();

			$this->load->model("Turma2_model");
			$turma= $this->Turma2_model->listarTurma();
			$dados['materia']= $materia;
			$dados['turma']= $turma;

			$this->load->view("topo");
			$this->load->view("editarCadastrarGrade",$dados);
			$this->load->view("rodape");
		} else {
			$this->load->model("Turma2_model");
			$existe = $this->Turma2_model->verificarTurma($_POST["nome"],$_POST["turno"]);
			if (empty($existe)) {
				$Turma = array(
					'nome' => $_POST['nome'],
					'turno' => $_POST['turno'],
					'status' => 1,
				);
				$this->Turma2_model->cadastrarTurma($Turma);
				echo "<script>alert('A turma com o nome ".$_POST['nome']." do turno da ".$_POST['turno']." foi cadastrada com sucesso')</script>";
				$this->load->view("topo");      
				$this->load->view("index");
				$this->load->view("rodape");
			} else {
				echo "<script>alert('A turma com o nome ".$_POST['nome']." e com o turno da ".$_POST['turno']." ja existe')</script>";
				$this->load->view("topo");
				$this->load->view("editarCadastrarTurmas2");
				$this->load->view("rodape");
			}
		}
	}

	public function listarTurmas(){

		$this->load->model("Turma2_model");
		$turma= $this->Turma2_model->listarTurma();
		$dados['turma']=$turma;
		$this->load->view("topo");
		$this->load->view("listarTurmas2",$dados);
		$this->load->view("rodape");
	}

	public function editarTurma($id){	

		if (!empty($_POST)) {

			$turma = array(
				'id' => $_POST['id'],
				'nome' => $_POST['nome'],
				'turno' => $_POST['turno'],
			);

			$this->load->model("Turma2_model");
			$this->Materia_model->editarTurma($turma);

			$this->listarTurmas();

		} else {
			$situacao = "editar";
			$this->session->set_userdata('situacao',$situacao);

			
			$this->load->model("Turma2_model");
			$turma = $this->Turma2_model->verificarTurmaEditar($id);
			$dados['turma'] = $turma;

			$this->load->view("topo");
			$this->load->view("editarCadastrarTurmas2",$dados);
			$this->load->view("rodape");

		}
	}

	public function desativarTurma($id){

		$this->load->model("Turma2_model");
		$result = $this->Turma2_model->desativarTurma($id);

		$this->listarTurmas();
	}

	public function ativarTurma($id){
		$this->load->model("Turma2_model");
		$result = $this->Turma2_model->ativarTurma($id);
		$this->listarTurmas();
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

			$this->load->model("Turma2_model");
			$turma = $this->Turma2_model->busca($busca,$conteudo);
			if (empty($turma)) {
				$turma = $this->Turma2_model->listarTurma();
			}
			$dados['turma'] = $turma;
			$this->load->view("topo");
			$this->load->view("listarTurmas2",$dados);
			$this->load->view("rodape");
		}
	}
}
