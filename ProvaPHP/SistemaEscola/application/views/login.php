
<?php

?>
<html>
<head>
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<br><br><br><br>
	<div class = "container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h3 class="text-center">Login</h3>
				<form method ="POST" action="<?=base_url();?>index.php/Usuario/validarLogin/"> 
					<div class ="form-group">
						<label>Nome</label>
						<input type="text" class="form-control" placeholder="Digite seu nome" name="nome" required="" >
					</div>
					<div class= "form-group">
						<label>Senha</label>
						<input type="password" class="form-control" placeholder="Digite sua senha" name="senha" required="">
					</div>
					<label>Nivel</label>
					<select class="browser-default custom-select" name="tabela" required>
						<option value "" >Selecione o usuario</option>
						<option value="alunos" >Aluno</option>
						<option value="professores">Professor</option>
						<option value="administradores">Administrador</option>
					</select><br><br><br><br><br><br>
					<div class="form-row">
						<div class="col-md-3"></div>
						<div class="form-group col-md-6 ">
							<button type="submit" class="btn btn-success form-control">Entrar</button>
						</div>
						<div class="col-md-3"></div>
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>