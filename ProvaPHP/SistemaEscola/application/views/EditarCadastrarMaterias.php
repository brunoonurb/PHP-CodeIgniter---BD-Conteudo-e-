<?php
$situacao =  $_SESSION['situacao'];

?>

<br><br>
<?php if( $situacao == "cadastrar"){?>

	<h3 class="text-center">Cadastrar Materia</h3><br>
<?php }else {?>
	<h3 class="text-center">Editar Materia</h3><br>
<?php }

?>

<div class="row form-group justify-content-center">
	<div class="col-md-7 justify-content-center "style="background-color: ;border-radius: 5px;border-width: 0.5px; border-style: solid;">
		<br><br>
		<?php if($situacao == "cadastrar"){?>

			<form method="POST" action="<?php echo base_url()?>index.php/Materias/cadastrarMateria" >
			<?php }else {?>
				<form method="POST" action="<?php echo base_url()?>index.php/Materias/editarMateria/<?$materia['id']?>" >
				<?php }?>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputNome">Nome</label>
						<input type="text" class="form-control" id="inputNome" placeholder="Nome da materia" name="nome" pattern="[A-Za-z]+{10}" title="Nao foi dessa vez professor Rodrigo"  value="<?= isset($materia['nome']) ? $materia['nome'] : "" ?>" required>
					</div>
					<div class="form-group col-md-6">
						<label for="inputState">Professor</label>
						<select id="inputState" class="form-control" name="id_professor" required>
							<option selected value="" >Selecione o professor</option>
							<?php if(isset($professor)){ 
								foreach ($professor as $professor) { ?>
									<?php if (isset($materia['id_professor'])) {?>
										<option  value="<?= $professor['id']?>" <?php if ($materia['id_professor']==$professor['id']){ ?> style="background-color: green;color:white"  <?php } ?> > <?=  $professor['nome']  ?></option>
									<?php } else { ?>
										<?php if ($professor['status']==1){ ?>
											<option  value="<?= $professor['id']?>"  > <?=  $professor['nome']  ?></option>
										<?php } } ?>
									<?php }
								}  ?>
							</select>
						</div>
					</div>
					<br><br>
					<?php if( $situacao == "cadastrar"){?>
						<br>
						<center> <button type="submit" class="btn btn-success">Cadastrar</button> </center>
					<?php }else {?>
						<input type="hidden" name="id" value="<?= $materia['id'] ?>">
						<center> <button type="submit" class="btn btn-success">Editar</button> </center>
					<?php }?>
				</form>


				<br><br>
			</div>
		</div>