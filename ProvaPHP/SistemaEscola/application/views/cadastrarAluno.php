   <script type="text/javascript">
   	function readURL(input) {
   		if (input.files && input.files[0]) {
   			var reader = new FileReader();

   			reader.onload = function (e) {
   				$('#blah')
   				.attr('src', e.target.result);
   			};

   			reader.readAsDataURL(input.files[0]);
   		}
   	}
   </script>
   <style type="text/css">
   	img{
   		max-width:100px;
   	}
   	input[type=file]{
   		padding:0px;
   		background:;}
   	</style>
   	<?php 
if (isset($_SESSION['foto'])){
   	$foto = $_SESSION['foto'];
}
   	$situacao =  $_SESSION['situacao'];
   	if (!empty($_POST) && $situacao == "cadastrar") {
   		$alu =  array(
   			'nome' => $_POST['nome'],
   			'sobrenome' => $_POST['sobrenome'],
   			'id_turma' => $_POST['id_turma'],
   			'senha' => $_POST['senha'],
   			'data' => $_POST['data'],
   			'email' => $_POST['email'], );
   	}
   	if(isset($aluno)){
         
   		foreach ($aluno as $alu) {
   		}

   	}
   	?>
   	<br><br>
   	<div class="panel" style="background-color:;">
   		<?php if( $situacao == "cadastrar"){?>
   			<h3 class="text-center">Cadastrar aluno</h3><br>
   		<?php }else {?>
   			<h3 class="text-center">Editar aluno</h3><br>
   		<?php }?>
   		<div class="row form-group justify-content-center">
   			<div class="col-md-7 justify-content-center "style="background-color: ;border-radius: 5px;border-width: 0.5px; border-style: solid;">

   				<?php if($situacao == "cadastrar"){?>
 <br><br>
   					<form method="POST" action="<?php echo base_url()?>index.php/Aluno/cadastrarAluno" enctype="multipart/form-data">
   					<?php }else {?>

   						<form method="POST" action="<?php echo base_url()?>index.php/Aluno/editarAluno/<?=$alu['id']?>" enctype="multipart/form-data">
   						<?php }?>


   						<div class="row">
   							<div class="form-group col-md-6">
   								<div class="form-row">
   									<div class="form-group col-md-12">
   										<label for="inputNome">Nome</label>
   										<input type="text" class="form-control" id="inputNome" placeholder="Nome do aluno" name="nome"  pattern="[A-Za-z]+{50}" title="Nao foi dessa vez professor Rodrigo"  value="<?= isset($alu['nome']) ? $alu['nome'] : "" ?>" required>
   									</div>
   								</div>

   								<div class="form-row">
   									<div class="form-group col-md-12">
   										<label for="inputSobrenome">Sobrenome</label>
   										<input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome do aluno" name="sobrenome" pattern="[A-Za-z]+{50}" title="Nao foi dessa vez professor Rodrigo"  value="<?= isset($alu['sobrenome']) ? $alu['sobrenome'] : "" ?>" required>
   									</div>
   								</div>
   								<div class="form-row">
   									<div class="form-group col-md-12">
   										<label for="inputNascimento">Data de Nascimento</label>
   										<?php if($situacao == "cadastrar"){?>
   											<input type="date" class="form-control" id="data" name="data" min="1980-01-01" max="2015-01-30" required> 

   										<?php }else {?>
   											<label for="inputNome">Data De Nascimento</label>
   											<input type="text" class="form-control" id="inputNome"  name="nome" value="<?= isset($alu['data']) ? $alu['data'] : "" ?>" disabled>
   										<?php }?>
   									</div>
   								</div>

   							</div>
   							<div class=" col-md-6">
   								<div class="row" style="margin-right: 0">
   									<div class="form-group col-md-12">
   										<?php if($situacao == "cadastrar"){?>
   											<img id="blah" src="http://placehold.it/100" alt="your image"style=" min-width:132px;" />
   											<br>
   											<input type='file' onchange="readURL(this);"  name="foto-aluno" value="<?= isset($alu['foto-aluno']) ? $alu['foto-aluno'] : "" ?>" required />
   										<?php }else {?>
   											<img id="blah" src="<?=$foto?>" alt="your image"style=" min-width:132px;" />
   											<input type='file' onchange="readURL(this);"  name="foto-aluno" value="<?= isset($alu['foto-aluno']) ? $alu['foto-aluno'] : "" ?>" disabled />
   										<?php }?>


   									</div>
   								</div>
   								<div class="form-row">

   									<div class="form-group col-md-12">
   										<label for="inputState">Turma/Turno</label>
   										<select id="inputState" class="form-control" name="id_turma" required>
   											<option selected value="<?= isset($alu['id_turma']) ? $alu['id_turma'] : "" ?>">Escolha...</option>
   											<?php if(isset($turmas)){ 
   												foreach ($turmas as $turma) {?>
   													<option value="<?= $turma['id']?>"> <?= $turma['nome']?>/<?= $turma['turno']?> </option>
   												<?php }
   											}  ?>
   										</select>
   									</div>
   								</div>
   							</div>
   						</div>
   						<div class="form-row">
   							<div class="form-group col-md-6">
   								<label for="email">Email</label>
   								<input type="email" class="form-control" id="email" name="email" value="<?= isset($alu['email']) ? $alu['email'] : "" ?>" required>
   							</div>

   							<div class="form-group col-md-6">
   								<label for="pwd">Senha</label>
   								<input type="password" class="form-control" id="pwd" name="senha" value="<?= isset($alu['senha']) ? $alu['senha'] : "" ?>" required>
   							</div>
   						</div>
   						<br>
   						<br>
   						<?php if( $situacao == "cadastrar"){?>
                        <br>

   							<center> <button type="submit" class="btn btn-success">Cadastrar</button> </center>
   						<?php }else {?>

   							<center> <button type="submit" class="btn btn-success">Editar</button> </center>
   						<?php }?>
                     <br><br>

   					</form>
   				</div>

   			</div>
   		</div>
         <br><br>





