<?php
$situacao =  $_SESSION['situacao'];

?>

<br><br>
<?php if( $situacao == "cadastrar"){?>

	<h3 class="text-center">Cadastrar Turma</h3><br>
<?php }else {?>
	<h3 class="text-center">Editar Turma</h3><br>
<?php }

?>

<div class="row form-group justify-content-center">
	<div class="col-md-7 justify-content-center "style="background-color: ;border-radius: 5px;border-width: 0.5px; border-style: solid;">
		<br><br>
		<?php if($situacao == "cadastrar"){?>

			<form method="POST" action="<?php echo base_url()?>index.php/Turmas2/cadastrarTurma" >
			<?php }else {?>
				<form method="POST" action="<?php echo base_url()?>index.php/Turmas2/editarTurma/<?$turma['id']?>" >
				<?php }?>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputNome">Nome</label>
						<input type="text" class="form-control" id="inputNome" placeholder="Nome da Turma" name="nome" value="<?= isset($turma['nome']) ? $turma['nome'] : "" ?>" required>
					</div>
					<div class="form-group col-md-6">
						<label for="inputState">Turno</label>
						<select id="inputState" class="form-control" name="turno" required>
							<option selected value="" >Selecione o turno</option>
							<option <?php if (!empty($turma['turno'])) { if($turma['turno']=="Manha"){ ?>style="background-color: green;color:white"  <?php } } ?>  value="Manha"  >Manhã</option>
							<option <?php if (!empty($turma['turno'])) { if($turma['turno']=="Tarde"){ ?>style="background-color: green;color:white"  <?php } } ?>  value="Tarde"  >Tarde</option>
							<option <?php if (!empty($turma['turno'])) { if($turma['turno']=="Noite"){ ?>style="background-color: green;color:white"  <?php } }?>  value="Noite"  >Noite</option>
						</select>
					</div>
				</div>
				<br><br>
				<?php if( $situacao == "cadastrar"){?>
					<br>
					<center> <button type="submit" class="btn btn-success">Cadastrar</button> </center>
				<?php }else {?>
					<input type="hidden" name="id" value="<?= $turma['id'] ?>">
					<center> <button type="submit" class="btn btn-success">Salvar</button> </center>
				<?php }?>
			</form>
			<br><br>
		</div>
	</div>