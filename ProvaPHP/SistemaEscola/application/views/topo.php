


<html>
<head>


	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" type = "text/css"  href = "<?= base_url(); ?>/css/style.css"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<?php
	$permissao = $this->session->userdata('nivel');
	
	if(	$this->session->userdata('nivel')==1){?>

		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url(); ?>/index.php/inicio/comeco">Home</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="<?= base_url(); ?>/index.php/Aluno/listarNotas">Notas</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="<?= base_url(); ?>/index.php/Aluno/listarMaterias">Materias</a>
					</li>
				</ul>
			</div>
			<div class="mx-auto order-0">
				<span class="navbar-text "><?php $logado = $_SESSION['nome'];echo "Bem&nbsp;Vindo&nbsp;";echo"$logado";?></</span>
			</div>
			<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
				<ul class="navbar-nav ml-auto"> 
					<li class="nav-item ">
						<a class="btn btn-secondary btn-sm" href="<?= base_url(); ?>/index.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
	<?php }else if ($permissao == 2){ ?>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url(); ?>/index.php/inicio/comeco">Home</a>
					</li>
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Notas</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url(); ?>/index.php/Professor/verificarTurmasNotas">Lançar Notas</a>
						</div>
					</li>
					
				</ul>
			</div>
			<div class="mx-auto order-0">
				<span class="navbar-text "><?php $logado = $_SESSION['nome'];echo "Bem&nbsp;Vindo&nbsp;";echo"$logado";?></</span>
			</div>
			<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
				<ul class="navbar-nav ml-auto"> 
					<li class="nav-item ">
						<a class="btn btn-secondary btn-sm" href="<?= base_url(); ?>/index.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
	<?php }else if ($permissao==3){ ?>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url(); ?>/index.php/inicio/comeco">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Alunos</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url(); ?>/index.php/Aluno/listarAlunos">Visualizar Alunos</a>
							<a class="dropdown-item" href="<?= base_url(); ?>/index.php/Aluno/cadastrarAluno">Cadastrar Alunos</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Professores</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url(); ?>/index.php/Professor/listarProfessor">Visualizar Professores</a>
							<a class="dropdown-item" href="<?= base_url(); ?>/index.php/Professor/cadastrarProfessor">Cadastrar Professores</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Materias</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url(); ?>/index.php/Materias/listarMaterias">Visualizar Materias</a>
							<a class="dropdown-item" href="<?= base_url(); ?>/index.php/Materias/cadastrarMateria">Cadastrar Materias</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Turmas</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url(); ?>/index.php/Turmas/listarTurma">Visualizar Turmas</a>
							<a class="dropdown-item" href="<?= base_url(); ?>/index.php/Turmas/cadastrarTurma">Cadastrar Turmas</a>
						</div>
					</li>
				</ul>

			</div>
			<div class="mx-auto order-0">

				<span class="navbar-text ">	 <?php $logado = $_SESSION['nome'];echo "Bem&nbsp;Vindo&nbsp;";echo"$logado";?></span>
			</div>
			<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
				<ul class="navbar-nav ml-auto"> 
					<li class="nav-item ">
						<a class="btn btn-secondary btn-sm" href="<?= base_url(); ?>/index.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
		
		
	<?php }	

	?>