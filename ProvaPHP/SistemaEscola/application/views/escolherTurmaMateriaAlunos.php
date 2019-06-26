<?php
$situacao =  $_SESSION['situacao'];
?>

<br><br>

<h3 class="text-center">Lançamento de notas</h3><br>



<?php if ($situacao == "turma"){ ?>
	<div class="row form-group justify-content-center">
		<div class="col-md-7 justify-content-center "style="background-color: ;border-radius: 5px;border-width: 0.5px; border-style: solid;">
			<br><br>
			<form method="POST" action="<?php echo base_url()?>index.php/Professor/verificarTurmasNotas" >
				<div class="row ">
					<div class="col-md-3"></div>
					<div class="form-group col-md-6 ">
						<label for="inputState">Turma</label>
						<select id="inputState" class="form-control" name="turma" required>
							<option selected value="" >Selecione a turma</option>
							<?php foreach($turma as $turma){  ?>	
								<option value="<?=$turma['turma'] ?>" > <?= $turma['turma'] ?></option>
							<?php }  ?>
						</select>
					</div>
				</div>
				<br><br><br>
				<center> <button type="submit" class="btn btn-success">Avancar</button> </center><br><br>
			</form>
		</div>
	</div>
<?php } else if ($situacao == "materia") { ?>

	<div class="row form-group justify-content-center">
		<div class="col-md-7 justify-content-center "style="background-color: ;border-radius: 5px;border-width: 0.5px; border-style: solid;">
			<br><br>
			<form method="POST" action="<?php echo base_url()?>index.php/Professor/verificarTurmasNotas" >
				<div class="row ">
					<div class="col-md-3"></div>
					<div class="form-group col-md-6 ">
						<label for="inputState">Materia</label>
						<select id="inputState" class="form-control" name="materia" required>
							<option selected value="" >Selecione a materia</option>
							<?php foreach($materia as $materia){  ?>	
								<option value="<?=$materia['id'] ?>" > <?= $materia['nome'] ?></option>
							<?php }  ?>
						</select>
					</div>
				</div>
				<br><br><br>
				<center> <button type="submit" class="btn btn-success">Avancar</button> </center><br><br>
			</form>
		</div>
	</div>
<?php } else if ($situacao == "aluno") { ?>


	<div class="row form-group justify-content-center">
		<div class="col-md-7 justify-content-center "style="background-color: ;border-radius: 5px;border-width: 0.5px; border-style: solid;">
			<br><br>
				<div class="row ">
					<div class="col-md-2"></div>
					<div class="form-group col-md-8 ">
						<h3 class="text-center">Alunos</h3><br>
								<table class="table text-center">
									<thead class=" text-center" style="background-color:black;color:white">
										<th class="text-center">Nome</th>
										<th class="text-center">Status</th>
										<th  class="text-center"> Nota</th>
										<th  class="text-center"></th>
									</thead>
									<tbody>
										<?php if (isset($aluno)) {

										 foreach($aluno as $aluno){  ?>
											<form method="POST" action="<?= base_url(); ?>/index.php/Professor/lancarNotas">
												<input type="hidden" name="materia" value="<?= $aluno['id_materia'] ?>">
												<input type="hidden" name="id" value="<?= $aluno['id_professor'] ?>">
												<tr>
													<td>
														<?= $aluno['nome'] ?>
														<input type="hidden" name="id_aluno" value="<?= $aluno['id_aluno'] ?>">
													</td>
													<td><?php if( $aluno['status']==0){ ?>
														<a style="color:red; font-family:">INATIVO</a>  
													<?php	}else{ ?>
														<a style="color:green; font-family:">ATIVO</a> 
													<?php	} ?>
												</td>
												<td>
													<?php if(isset($aluno['nota'])) { ?>
														<input type="number" step="any" max="10" min="0" name="atualizar_nota" value="<?= isset($aluno['nota']) ? $aluno['nota'] : "" ?>" required>
													<?php } else{ ?>
													<input type="number" step="any" max="10" min="0" name="nota" placeholder="Nota Aluno" value="<?= isset($aluno['nota']) ? $aluno['nota'] : "" ?>" required>
													<?php } ?>

												</td>
												

												<td > 

													<?php if( $aluno['status']==0){ ?>
														<button style="width: 100%;height: 30px;line-height:10px;" type="submit" class="btn btn-success " disabled>Lancar Not</button>  
													<?php	}else{ ?>
														<button style="width: 100%;height: 30px;line-height:10px;" type="submit" class="btn btn-success " >Lancar Nota</button> 
													<?php	} ?>

													
												</td>

												
											</tr>
										</form>

									<?php  }
									}else{
										echo "<tr><td>";
										echo "<br><br>";
										echo "<h4 class='text-center'>lista vazia</h4>";
										echo "<br><br>";
										echo "</td></tr>";
									} ?>
								</tbody>
							</table>
				</div>
			</div>
			<br><br><br>
	</div>
</div>






<?php } ?>
