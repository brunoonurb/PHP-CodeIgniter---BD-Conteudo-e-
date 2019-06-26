
<br><br><br>

<?php if (isset($materia)) { ?>


	<div class="container ">
		<div class="col-md-12 ">
			<div class="row justify-content-center">
				<div class=" col-md-2 form-group">
					<form method="POST" action="<?= base_url(); ?>/index.php/Materias/busca">
						<select  id="busca" class=" btn btn-info " style="height: 34px;margin-top: 3px;"name="busca">
							<option selected value="nome" ><h6>Buscar</h6></option>
							<option value="id">Id</option>
							<option value="nome">Nome</option>
							<option value="id_professor">id professor</option>
							<option value="status">Status</option>

						</select>
					</div>
					<div class="col-md-8 form-group">
						<div class="form-group">
							<div class="input-group">
								<input id="txtSearch" class="form-control input-lg" type="text" placeholder="Selecione Região e busque por Nome..." name="conteudo" />
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-search"></i>
								</div>
							</div>
						</div>
					</form> 
				</div>
			</div>
		</div>

	</div>

<?php } ?>
<br>

<?php if (isset($materia)) { ?>
	<div style="min-height: 100%; display: flex; flex-direction: column;">
		<div class="container ">
			<div class="row ">
				<h3 style="margin-left: 40%;" >Materias cadastradas </h3>
				<br><br><br>

				<div class="col-md-0"></div><!--Decidir se width fica com 10 ou 12 -->
				<div class="col-md-12 ">
					<div class="panel panel-default">
						<div class="panel-body">
							<table class="table text-center">
								<thead class=" text-center" style="background-color:black;color:white">
									<th class="text-center">Id</th>
									<th class="text-center">Nome</th>
									<th class="text-center">Professor</th>
									<th class="text-center">Status</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</thead>
								<tbody>
									<?php foreach($materia as $materia){  ?>
										<tr>
											<td ><?= $materia['id'] ?></td>
											<td ><?= $materia['nome'] ?></td>
											<td ><?php foreach ($professor as $prof) { 
												if($materia['id_professor']==$prof['id']){ 
													echo $prof['nome']." ".$prof['sobrenome']; 
												} 

											}?></td>
											<td><?php if( $materia['status']==0){ ?>
												<a style="color:red; font-family:">INATIVO</a>  
											<?php	}else{ ?>
												<a style="color:green; font-family:">ATIVO</a> 
												<?php	} ?></td>
												<td > 
													<a href="<?php if($materia['status']==1) { ?><?= base_url(); ?>/index.php/Materias/editarMateria/<?= $materia['id']?><?php } else { ?><?= base_url(); ?>/index.php/Materias/editarMateria/<?= $materia['id']?> <?php } ?>">     
														<button style="width: 100%;height: 30px;line-height:10px;" class="btn btn-success " >Editar</button></a>
													</td>
													<td>

														<a href="<?php if($materia['status'] == 1) { ?><?=base_url()?>/index.php/Materias/desativarMateria/<?=$materia['id'] ?><?php } else { ?>#<?php } ?>"> <button style="width: 80%;height: 30px;line-height:10px;" class="btn btn-danger" >Desativar</button></a>



													</td>
													<td>

														
														<a href="<?php if($materia['status'] == 0) { ?><?=base_url()?>/index.php/Materias/ativarMateria/<?=$materia['id'] ?><?php } else { ?>#<?php } ?>"><button style="width: 80%;height: 30px;line-height:10px;" class="btn btn-info">Reativar</button></a>
													</td>
												</tr>
												
											<?php  } ?>
										</tbody>
									</table>
								</div>
							</div>  
						</div>
						<div class="col-md-0"></div>
					</div>
				</div>
			</div>
		<?php }else{
			echo "<script>alert('Nenhuma materia cadastrada')</script>";
echo "<script> window.location.href = '".base_url()."/index.php/Inicio/comeco' </script>";		} ?>