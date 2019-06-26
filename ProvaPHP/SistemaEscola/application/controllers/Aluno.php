<?php
defined('BASEPATH') OR exit('No direct script access allowed');
			//$this->session->set_userdata('id',$result['id']); 
$usuario = 'alunos';
$nivel = 1;
class Aluno extends CI_Controller {
	

	/*

	 */
	public function cadastrarAluno(){
		$this->load->model("Escola_model");
		$result = $this->Escola_model->listaTurmas();
		$dadosTurma = array('turmas' =>$result, );

		if (!empty($_POST)) {
			$inserido=0;

			$this->load->model("Aluno_model");

			$existe = $this->Aluno_model->verificarAluno($_POST["nome"],$_POST["senha"]);
			#var_dump($dados);

			if (empty($existe)) {
				$data = $_POST['data'];
				list($ano, $mes, $dia) = explode('-', $data);
				$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
				$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
				$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
				

				$aluno = array(
					'nome' => $_POST['nome'],
					'sobrenome' => $_POST['sobrenome'],
					'idade' => $idade,
					'id_turma' => $_POST['id_turma'],
					'senha' => $_POST['senha'],
					'data' => $_POST['data'],
					'email' => $_POST['email'],
					'nivel' => 1,
					'status'=> 1,

				);

				$this->Aluno_model->cadastrarAluno($aluno);
				
				/*adicionar fotos*/
				#var_dump( $_FILES['foto-aluno']);

				$nome_temporario = $_FILES["foto-aluno"]["tmp_name"];
				$nome_real = $_FILES["foto-aluno"]["name"]; 
				$destino = base_url()."images/".$nome_real;/* local q ficara as fotos */
				$destinoLocal = "/xampp/htdocs/ProjetoPHP/ProvaPHP/SistemaEscola/images/".$nome_real;/* local q ficara as fotos */

				copy($nome_temporario,$destinoLocal);/*para copiar na pasta*/

				$result = $this->Aluno_model->verificarAluno($_POST["nome"],$_POST["senha"]);
				

				foreach ($result  as $linha):
					$id = $linha['id'];
				endforeach;

				$foto = array(
					'endereco' => $destino,
					'id_usuario' => $id,
					'nivel' => 1,
				);
				$this->Aluno_model->cadastrarFotoAluno($foto);


				echo "<script>alert('Aluno com nome ".$_POST['nome']." cadastrado com sucesso')</script>";
				$inserido=1;
				$this->load->view("topo",$aluno);
				$this->load->view("index");
				$this->load->view("rodape");

			}else{
				
				echo "<script>alert('Aluno com nome ".$_POST['nome']." e senha ".$_POST['senha']." ja existe')</script>";
			}

			if ($inserido != 1) {
				$situacao = "cadastrar";
				$this->session->set_userdata('situacao',$situacao);

				$this->load->view("topo");
				$this->load->view("cadastrarAluno",$dadosTurma);
				$this->load->view("rodape");
			}


		}else {
			$situacao = "cadastrar";
			$this->session->set_userdata('situacao',$situacao);

			$this->load->view("topo");
			$this->load->view("cadastrarAluno",$dadosTurma);
			$this->load->view("rodape");
		}
	}

	public function listarAlunos(){

		$this->load->model("Aluno_model");
		$result = $this->Aluno_model->ListarAlunos();
		$dadosAlunos = array('alunos' => $result, );
		#var_dump($dadosAlunos);

		$this->load->view("topo");
		$this->load->view("listarAlunos",$dadosAlunos);
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

		$this->load->model("Aluno_model");
		$result = $this->Aluno_model->busca($busca,$conteudo);

		if (empty($result)) {
			$result = $this->Aluno_model->ListarAlunos();
		}
		$dadosAlunos = array('alunos' => $result, );

		$this->load->view("topo");
		$this->load->view("listarAlunos",$dadosAlunos);
		$this->load->view("rodape");
	}

	public function editarAluno($id){
		if (!empty($_POST)) {

			$aluno = array(
				'nome' => $_POST['nome'],
				'sobrenome' => $_POST['sobrenome'],
				'id_turma' => $_POST['id_turma'],
				'senha' => $_POST['senha'],
				'email' => $_POST['email'],
			);


			$this->load->model("Aluno_model");
			$result = $this->Aluno_model->editarAluno($aluno,$id);


			$this->load->model("Aluno_model");
			$result = $this->Aluno_model->ListarAlunos();
			$dadosAlunos = array('alunos' => $result, );

			$this->load->view("topo");
			$this->load->view("listarAlunos",$dadosAlunos);
			$this->load->view("rodape");

		}else{
			$this->load->model("Aluno_model");
			$result = $this->Aluno_model->verificarAlunoEditar($id);
			$dadosAluno = array('aluno' => $result, );

			$this->load->model("Escola_model");
			$resultT = $this->Escola_model->listaTurmas();
			$dadosTurma = array('turmas' =>$resultT, );


			$this->load->model("Aluno_model");
			$resultFoto = $this->Aluno_model->endrecoFotoAluno($id);
			foreach ($resultFoto  as $foto):
				$foto = $foto['endereco'];
			endforeach;
			if (empty($resultFoto)) {
				$foto = base_url()."images/ultimoRecurso.jpg";
			}

			$situacao = "editar";
			$this->session->set_userdata('foto',$foto);
			$this->session->set_userdata('situacao',$situacao);

			$this->load->view("topo",$dadosAluno);
			$this->load->view("cadastrarAluno",$dadosTurma);
			$this->load->view("rodape");
		}
	}

	public function desativarAluno($id){


		$this->load->model("Aluno_model");
		$result = $this->Aluno_model->desativarAluno($id);

		$this->load->model("Aluno_model");
		$result = $this->Aluno_model->ListarAlunos();
		$dadosAlunos = array('alunos' => $result, );
		#var_dump($dadosAlunos);

		$this->load->view("topo");
		$this->load->view("listarAlunos",$dadosAlunos);
		$this->load->view("rodape");
	}

	public function ativarAluno($id){

		$this->load->model("Aluno_model");
		$result = $this->Aluno_model->ativarAluno($id);

		$this->load->model("Aluno_model");
		$result = $this->Aluno_model->ListarAlunos();
		$dadosAlunos = array('alunos' => $result, );
		#var_dump($dadosAlunos);

		$this->load->view("topo");
		$this->load->view("listarAlunos",$dadosAlunos);
		$this->load->view("rodape");
	}

	/*================================== aqui funco para o usuario  ========================================*/
	public function listarMaterias(){

		$id = $_SESSION['id'];
		$this->load->model("Aluno_model");
		$resultBusca = $this->Aluno_model->buscaAluno($id);
		var_dump($resultBusca);

		foreach ($resultBusca  as $aluno):
			$id_turma = $aluno['id_turma'];
		endforeach;
		
		$this->load->model("Escola_model");
		$result = $this->Escola_model->listaMaterias($id_turma);
		#var_dump($result);
		$dadosMaterias = array('materias' => $result, );
		

		$this->load->view("topo");
		$this->load->view("EditarCadastrarMateriasAluno",$dadosMaterias);
		$this->load->view("rodape");
		
	}
	public function listarNotas(){

		$id = $_SESSION['id'];
		
		$this->load->model("Escola_model");
		$result = $this->Escola_model->listaNotas($id);
		#var_dump($result);
		$dadosMaterias = array('notas' => $result, );
		
		

		$this->load->view("topo");
		$this->load->view("listarNotas",$dadosMaterias);
		$this->load->view("rodape");
		
	}





	}//Fim controller
