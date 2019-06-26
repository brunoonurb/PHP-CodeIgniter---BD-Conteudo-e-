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

			<form method="POST" action="<?php echo base_url()?>index.php/Turmas/cadastrarTurma" >
			<?php }else {?>
				<form method="POST" action="<?php echo base_url()?>index.php/Turmas/editarTurma/<?$turma['id']?>" >
				<?php }?> 
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputNome">Nome</label>
						<input type="text" class="form-control" id="inputNome" placeholder="Nome da turma" name="nome" pattern="[A-Za-z1-3°º]+{5}" title="Nao foi dessa vez professor Rodrigo"  value="<?= isset($turma[0]['nome']) ? $turma[0]['nome'] : "" ?>" required>
						
						<label for="inputState">Turno</label>
						<select id="inputState" class="form-control" name="turno" required>
							<option selected value="">Selecione o turno</option>
							<option <?php if (!empty($turma[0]['turno'])) { if($turma[0]['turno']=="Manha"){ ?>style="background-color: green;color:white"  <?php } } ?>  value="Manha"  >Manhã</option>
							<option <?php if (!empty($turma[0]['turno'])) { if($turma[0]['turno']=="Tarde"){ ?>style="background-color: green;color:white"  <?php } } ?>  value="Tarde"  >Tarde</option>
							<option <?php if (!empty($turma[0]['turno'])) { if($turma[0]['turno']=="Noite"){ ?>style="background-color: green;color:white"  <?php } }?>  value="Noite"  >Noite</option>
						</select>	
					</div>
					<div class="form-group col-md-6 text-center">
						<br><br>
						<label for="inputState">Adicionar Materias</label><br>
						<button type="button" style="background: LimeGreen " class="btn btn-primary" data-toggle="modal" data-target="#adicionar_materia">Adicionar
					</button>
						
					</div>
				</div>
				<br><br>
				<?php if( $situacao == "cadastrar"){?>
					<br>
					<center> <button type="submit" class="btn btn-success">Cadastrar</button> </center>
				<?php }else {?>
							<input type="hidden" name="id" value="<?= $turma[0]['id'] ?>">
					<center> <button type="submit" class="btn btn-success">Editar</button> </center>
				<?php }?>
			


			<br><br>
		</div>
	</div>

<!--================ modal =========================================-->
	<div class="modal fade" id="adicionar_materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"> Adicicionar materias</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body " style="background: Gainsboro; color: black">

							<center><label >Materias</label></center>
							<div class="panel panel-default " style="background: white; color: black">
								<div class="panel-body">
									<?php
									if(is_null($materia)){?>
										<div class="top-margin">
											Materias nao cadastradas por favar adicione materias antes
										</div>
									<?php }ELSE{/*ABRE PARA MOSTRA CASO TENHA ALGO*/
										foreach($materia as $materia){     /*repetir os produoss*/
											
											if ($materia['status']==1){
											?>	

											<div class="checkbox" <?php if (!empty($turma[0]['materias'])) { 
														foreach ($turma as $tur) {
													if($tur['materias'] == $materia['nome']){ ?>style="background-color: green;color:white; border-style: solid;border-width: 5px"  <?php }} } ?> >
												<label><input type="checkbox" <?php if ($situacao == "editar"){echo "disabled";} ?> name="materias[]" value="<?=$materia['id']?>"><?=$materia['nome']?></label>
											</div>

										<?php } }
									}?><!--fecha else-->
								</div>
							</div>

						</div>
						<div class="modal-footer text-center">
							<?php if ($situacao == "cadastrar"){?>
							<button type="button" class="btn btn-secondary " data-dismiss="modal">Adicionar</button>
						<?php }else{ ?>
<button type="button" class="btn btn-secondary " data-dismiss="modal">fechar</button>
						<?php } ?>

							<!-- <button type="button" class="btn btn-primary">vazio</button> -->
						</div>
					</div>
				</div>
			</div>
			</form>