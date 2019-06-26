<?php
$situacao =  $_SESSION['situacao'];

?>

<br><br>
<?php if( $situacao == "cadastrar"){?>

	<h3 class="text-center">Cadastrar Grade</h3><br>
<?php }else {?>
	<h3 class="text-center">Editar Grade</h3><br>
<?php }

?>

<div class="row form-group justify-content-center">
	<div class="col-md-7 justify-content-center "style="background-color: ;border-radius: 5px;border-width: 0.5px; border-style: solid;">
		<br><br>
		<?php if($situacao == "cadastrar"){?>

			<form method="POST" action="<?php echo base_url()?>index.php/Grade/cadastrarGrade" >
			<?php }else {?>
				<form method="POST" action="<?php echo base_url()?>index.php/Grade/editarGrade/<?$grade['id']?>" >
				<?php }?>
				<div class="row ">
					<div class="form-group col-md-6 text-center">
						<br><br>
						<label for="inputState">Adicionar Turma</label><br>
						<button type="button" style="background: LimeGreen " class="btn btn-primary" data-toggle="modal" data-target="#adicionar_turma	">Adicionar</button>
					</div>
					<div class="form-group col-md-6 text-center">
						<br><br>
						<label for="inputState">Adicionar Materias</label><br>
						<button type="button" style="background: LimeGreen " class="btn btn-primary" data-toggle="modal" data-target="#adicionar_materia">Adicionar</button>
						
					</div>
				</div>

				<br><br>
				<?php if( $situacao == "cadastrar"){?>
					<br>
					<center> <button type="submit" class="btn btn-success">Cadastrar</button> </center>
				<?php }else {?>
					<input type="hidden" name="id" value="<?= $turma['id'] ?>">
					<center> <button type="submit" class="btn btn-success">Editar</button> </center>
				<?php }?>

				<br><br>
			</div>
		</div>

		<!--================ Modal Materias=========================================-->
		<div class="modal fade" id="adicionar_materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header bg-dark">
						<h5 class="modal-title text-white " id="exampleModalLabel"> Escolha a(s) materia(s) da turma</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
							<!--<span aria-hidden="true">&times;</span>-->
						</button>
					</div>
					<div class="modal-body " >

						<center><label class="text-white">Materias</label></center>
						<div class="panel panel-default " style="background: white; color: black">
							<div class="panel-body">
								<?php
								if(is_null($materia)){?>
									<div class="top-margin">
										<center>Nenhuma materia cadastrada</center>
									</div>
								<?php } else {
									foreach($materia as $materia){  ?>	
										<div class="custom-control-lg custom-control custom-checkbox">
											<?php if ($materia['status']==1) { ?>
												<input  class="custom-control-input" id="<?=$materia['id']?>" type="checkbox" name="materias[]" value="<?=$materia['id']?>" > 
											<?php } else { ?>
												<input disabled class="custom-control-input" id="checkbox-large" disabled type="checkbox" name="materias[]" value="<?=$materia['id']?>" > 
											<?php } ?>
											<label class="custom-control-label" for="<?=$materia['id']?>">
												<?=$materia['nome']?>
											</label>
										</div>
									<?php }
								}?>
							</div>
						</div>
					</div>
					<div class="modal-footer ">
						<button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		<!--================ Modal Materias=========================================-->

		<!--================ Modal Turma============================================-->

			<div class="modal fade" id="adicionar_turma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header bg-dark">
						<h5 class="modal-title text-white " id="exampleModalLabel"> Escolha a Turma da grade</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
							<!--<span aria-hidden="true">&times;</span>-->
						</button>
					</div>
					<div class="modal-body " >

						<center><label class="text-white">Materias</label></center>
						<div class="panel panel-default " style="background: white; color: black">
							<div class="panel-body">
								<?php
								if(is_null($materia)){?>
									<div class="top-margin">
										<center>Nenhuma turma cadastrada</center>
									</div>
								<?php } else {
									foreach($turma as $turma){  ?>	
										<div >
											<?php if ($turma['status']==1) { ?>
												<input  style="height:20px; width:20px; vertical-align: middle;" name="turma" value="<?=$turma['id']?>" type="radio"> 
											<?php } else { ?>
												<input disabled  style="height:20px; width:20px; vertical-align: middle;" name="turma" value="<?=$turma['id']?>" type="radio"> 
											<?php } ?>
										
												<?=$turma['nome']?>
										
										</div>
									<?php }
								}?>
							</div>
						</div>
					</div>
					<div class="modal-footer ">
						<button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>

		<!--================ Modal Turma============================================-->


	</form>