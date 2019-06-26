<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turmas extends CI_Controller {

	public function index()
	{ 
		$this->load->view('login');
	}

	public function cadastrarTurma(){
		

	

		$situacao = "cadastrar";
		$this->session->set_userdata('situacao',$situacao);

		if (empty($_POST)){

			$this->load->model("Materia_model");
			$result= $this->Materia_model->ListarMateria();

			$dadosmaterias = array('materia' => $result, );

			$this->load->view("topo");
			$this->load->view("editarCadastrarturmas",$dadosmaterias);
			$this->load->view("rodape");

		} else {
			if (empty($_POST['materias'])) {
			echo "<script>alert('nao foi possivel criar a turma".$_POST['nome']." É necessario selecionar materias')</script>";

			$situacao = "cadastrar";
			$this->session->set_userdata('situacao',$situacao);

			$this->load->model("Materia_model");
			$result= $this->Materia_model->ListarMateria();
			$dadosmaterias = array('materia' => $result, );

			$turma =array( array('nome' => $_POST['nome'],
							'turno' => $_POST['turno'], ));

			$dados['turma'] = $turma;


			$this->load->view("topo",$dados);
			$this->load->view("editarCadastrarturmas",$dadosmaterias);
			$this->load->view("rodape");
		}else{


			$this->load->model("Turma_model");
			$existe = $this->Turma_model->verificarTurma($_POST["nome"],$_POST["turno"]);
			if (empty($existe)) {
				$turma = array(
					'nome' => $_POST['nome'],
					'turno' => $_POST['turno'],
					'status' => 1,
				);
				$this->Turma_model->cadastrarTurma($turma);
				/*------- adiciona grade   */
				$this->load->model("Materia_model");
				$result=$this->Turma_model->verificarTurma($_POST["nome"],$_POST["turno"]);

				foreach ($result  as $linha):
					$id_turma = $linha['id'];
				endforeach;

				$materias_post = $_POST["materias"];
				
				$cont = 0;
				foreach ($materias_post as $mat) {

					$materias = array('id_turma' => $id_turma, 
						'id_materia' => $mat,);

					$this->Turma_model->cadastrarGrade($materias);
				}

				echo "<script>alert('A turma com o nome ".$_POST['nome']." foi cadastrada com sucesso')</script>";
				$this->load->view("topo");      /*Professor tira rever .. */
				$this->load->view("index");
				$this->load->view("rodape");
			} else {
				echo "<script>alert('A Turma com o nome ".$_POST['nome']." ja existe')</script>";

				$this->load->model("Materia_model");
				$result= $this->Materia_model->ListarMateria();

				$dadosmaterias = array('materia' => $result, );

				$this->load->view("topo");
				$this->load->view("editarCadastrarturmas",$dadosmaterias);
				$this->load->view("rodape");

			}


		}
	}
	}

	public function listarTurma(){

		$this->load->model("Turma_model");
		$turma= $this->Turma_model->listarTurma();
		$dados['turma']=$turma;
		$this->load->view("topo");
		$this->load->view("listarTurma",$dados);
		$this->load->view("rodape");
	}

	public function editarTurma($id){	

		if (!empty($_POST)) {

			$turma = array(
				'id' => $_POST['id'],
				'nome' => $_POST['nome'],
				'turno' => $_POST['turno'],
			);
			$this->load->model("Turma_model");
			$this->Turma_model->editarTurma($turma);

			$this->listarTurma();

		} else {
			$situacao = "editar";
			$this->session->set_userdata('situacao',$situacao);

			$this->load->model("Materia_model");
			$result= $this->Materia_model->ListarMateria();

			$dadosmaterias = array('materia' => $result, );

			$this->load->model("Turma_model");
			$turma = $this->Turma_model->verificarTurmaEditar($id);
			$dados['turma'] = $turma;


			$this->load->view("topo",$dadosmaterias);
			$this->load->view("editarCadastrarTurmas",$dados);
			$this->load->view("rodape");

		}
	}

	public function desativarTurma($id){

		$this->load->model("Turma_model");
		$result = $this->Turma_model->desativarTurma($id);

		$this->listarTurma();
	}

	public function ativarTurma($id){
		$this->load->model("Turma_model");
		$result = $this->Turma_model->ativarTurma($id);
		$this->listarTurma();
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

			$this->load->model("Turma_model");
			$turma = $this->Turma_model->busca($busca,$conteudo);
			if (empty($turma)) {
				$turma = $this->Turma_model->listarTurma();
			}
			$dados['turma'] = $turma;
			$this->load->view("topo");
			$this->load->view("listarTurma",$dados);
			$this->load->view("rodape");
		}
	}


	public function excluirTurma($id){
		$this->load->model("Turma_model");
		$this->Turma_model->deletarTurma($id);

		$result = $this->Turma_model->selectGrade($id);

		foreach ($result as $grade) {
		$this->Turma_model->deletarGrade($id);	
		}

		$this->listarTurma();
	}

}
