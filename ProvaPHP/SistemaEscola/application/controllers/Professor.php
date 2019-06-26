<?php
defined('BASEPATH') OR exit('No direct script access allowed');
			//$this->session->set_userdata('id',$result['id']); 
$usuario = 'alunos';
$nivel = 1;
class Professor extends CI_Controller {
	

	/*

	 */
	public function cadastrarProfessor(){



		if (!empty($_POST)) {
			$inserido=0;

			$this->load->model("Professor_model");

			$existe = $this->Professor_model->verificarProfessor($_POST["nome"],$_POST["senha"]);
			#var_dump($dados);

			if (empty($existe)) {
				$data = $_POST['data'];
				list($ano, $mes, $dia) = explode('-', $data);
				$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
				$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
				$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
				

				$Professor = array(
					'nome' => $_POST['nome'],
					'sobrenome' => $_POST['sobrenome'],
					'idade' => $idade,
					'senha' => $_POST['senha'],
					'data' => $_POST['data'],
					'email' => $_POST['email'],
					'nivel' => 2,
					'status'=> 1,

				);

				$this->Professor_model->cadastrarProfessor($Professor);
				
				/*adicionar fotos*/
				#var_dump( $_FILES['foto-aluno']);

				$nome_temporario = $_FILES["foto-professor"]["tmp_name"];
				$nome_real = $_FILES["foto-professor"]["name"]; 
				$destino = base_url()."images/".$nome_real;/* local q ficara as fotos */
				$destinoLocal = "/xampp/htdocs/ProjetoPHP/ProvaPHP/SistemaEscola/images/".$nome_real;/* local q ficara as fotos */

				copy($nome_temporario,$destinoLocal);/*para copiar na pasta*/

				$result = $this->Professor_model->verificarProfessor($_POST["nome"],$_POST["senha"]);
				

				foreach ($result  as $linha):
					$id = $linha['id'];
				endforeach;

				$foto = array(
					'endereco' => $destino,
					'id_usuario' => $id,
					'nivel' => 1,
				);
				$this->Professor_model->cadastrarFotoProfessor($foto);


				echo "<script>alert('Professor com nome ".$_POST['nome']." cadastrado com sucesso')</script>";
				$inserido=1;
				$this->load->view("topo");      /*Professor tira rever .. */
				$this->load->view("index");
				$this->load->view("rodape");

			}else{
				
				echo "<script>alert('Professor com nome ".$_POST['nome']." e senha ".$_POST['senha']." ja existe')</script>";
			}

			if ($inserido != 1) {
				$situacao = "cadastrar";
				$this->session->set_userdata('situacao',$situacao);

				$this->load->view("topo");
				$this->load->view("cadastrarProfessor");
				$this->load->view("rodape");
			}


		}else {
			$situacao = "cadastrar";
			$this->session->set_userdata('situacao',$situacao);

			$this->load->view("topo");
			$this->load->view("cadastrarProfessor");
			$this->load->view("rodape");
		}
	}

	public function listarProfessor(){

		$this->load->model("Professor_model");
		$result = $this->Professor_model->ListarProfessor();
		$dadosProfessor = array('professor' => $result, );
		#var_dump($dadosAlunos);

		$this->load->view("topo");
		$this->load->view("listarProfessor",$dadosProfessor);
		$this->load->view("rodape");
	}

	public function busca(){

		$busca = $_POST['busca'];
		$conteudo = $_POST['conteudo'];
		if ($conteudo == "inativo" || $conteudo == "INATIVO" || $conteudo == "ina" || $conteudo == "INA") {
			$conteudo=0;
		}else if ($conteudo == "ativo" || $conteudo == "ATIVO" || $conteudo == "ati" || $conteudo == "ATI") {
			$conteudo=1;
		}

		$this->load->model("Professor_model");
		$result = $this->Professor_model->busca($busca,$conteudo);
		if (empty($result)) {
			$result = $this->Professor_model->ListarProfessor();
		}
		$dadosProfessor = array('professor' => $result, );

		$this->load->view("topo");
		$this->load->view("listarProfessor",$dadosProfessor);
		$this->load->view("rodape");
	}

	public function editarProfessor($id){
		if (!empty($_POST)) {

			$professor = array(
				'nome' => $_POST['nome'],
				'sobrenome' => $_POST['sobrenome'],
				'senha' => $_POST['senha'],
				'email' => $_POST['email'],
			);


			$this->load->model("Professor_model");
			$result = $this->Professor_model->editarProfessor($professor,$id);


			$this->load->model("Professor_model");
			$result = $this->Professor_model->ListarProfessor();
			$dadosProfessor = array('professor' => $result, );

			$this->load->view("topo");
			$this->load->view("listarProfessor",$dadosProfessor);
			$this->load->view("rodape");

		}else{
			$this->load->model("Professor_model");
			$result = $this->Professor_model->verificarProfessorEditar($id);
			$dadosProfessor = array('professor' => $result, );


			$this->load->model("Professor_model");
			$resultFoto = $this->Professor_model->endrecoFotoProfessor($id);
			foreach ($resultFoto  as $foto):
				$foto = $foto['endereco'];
			endforeach;
			if (empty($resultFoto)) {
				$foto = base_url()."images/ultimoRecurso.jpg";
			}

			$situacao = "editar";
			$this->session->set_userdata('foto',$foto);
			$this->session->set_userdata('situacao',$situacao);

			$this->load->view("topo",$dadosProfessor);
			$this->load->view("cadastrarProfessor");
			$this->load->view("rodape");
		}
	}

	public function desativarProfessor($id){


		$this->load->model("Professor_model");
		$result = $this->Professor_model->desativarProfessor($id);

		$this->load->model("Aluno_model");
		$result = $this->Professor_model->ListarProfessor();
		$dadosProfessor = array('professor' => $result, );
		

		$this->load->view("topo");
		$this->load->view("listarProfessor",$dadosProfessor);
		$this->load->view("rodape");
	}

	public function ativarProfessor($id){



		$this->load->model("Professor_model");
		$result = $this->Professor_model->ativarProfessor($id);

		$this->load->model("Professor_model");
		$result = $this->Professor_model->ListarProfessor();
		$dadosProfessor = array('professor' => $result, );
		#var_dump($dadosAlunos);

		$this->load->view("topo");
		$this->load->view("listarProfessor",$dadosProfessor);
		$this->load->view("rodape");
	}

	/*================================== aqui funco para o usuario  ========================================*/
	public function verificarTurmasNotas (){
		if(empty($_POST)){
			$situacao = "turma";
			$this->session->set_userdata('situacao',$situacao);
			$id = $_SESSION['id'];

			$this->load->model("Professor_model");
			$result = $this->Professor_model->turmas($id);
			$turma['turma'] = $result;

			$this->load->view("topo");
			$this->load->view("escolherTurmaMateriaAlunos",$turma);
			$this->load->view("rodape");
		} else if ($_SESSION['situacao']=="turma"){
			$situacao = "materia";
			$this->session->set_userdata('situacao',$situacao);
			$turma = $_POST['turma'];
			$id = $_SESSION['id'];


			$this->load->model("Professor_model");
			$result = $this->Professor_model->materias($turma,$id);
			$materia['materia'] = $result;

			$this->load->view("topo");
			$this->load->view("escolherTurmaMateriaAlunos",$materia);
			$this->load->view("rodape");
		} else if ($_SESSION['situacao']=="materia"){
			$situacao = "aluno";
			$this->session->set_userdata('situacao',$situacao);
			$materia_id = $_POST['materia'];
			$id = $_SESSION['id'];


			$this->load->model("Professor_model");
			$result = $this->Professor_model->alunos($materia_id,$id);
			$aluno['aluno'] = $result;

			$this->load->view("topo");
			$this->load->view("escolherTurmaMateriaAlunos",$aluno);
			$this->load->view("rodape");


		}
	}

	public function lancarNotas(){

		if (empty($_POST['atualizar_nota'])) {

			$nota = array('id_materia' => $_POST['materia'],
					 'id_aluno' => $_POST['id_aluno'],
					 'nota' => $_POST['nota'],
		 );

		$this->load->model("Professor_model");
		$this->Professor_model->inserirNotaAluno($nota);

		echo "<script>alert('Nota lancada com sucesso')</script>";

		}else{
			$nota = array('id_materia' => $_POST['materia'],
					 'id_aluno' => $_POST['id_aluno'],
					 'nota' => $_POST['atualizar_nota'],
		 );

			$id_aluno = $_POST['id_aluno'];
			$this->load->model("Professor_model");
			$this->Professor_model->atualizarNotaAluno($nota,$id_aluno);

		echo "<script>alert('Nota atualizada com sucesso')</script>";

		}

		$situacao = "materia";
		$this->session->set_userdata('situacao',$situacao);

		$this->verificarTurmasNotas();


	}







	}//Fim controller
