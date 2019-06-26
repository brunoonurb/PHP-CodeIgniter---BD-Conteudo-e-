
<br><br><br>

<?php if (isset($alunos)) {
} ?>
<h3 style="margin-left: 40%;" >Alunos Cadastrado no sistema </h3><br>
<div class="row ">
	<div class="col-md-3"></div><!--Decidir se width fica com 10 ou 12 -->
	<div class="col-md-1">
		<form method="POST" action="<?= base_url(); ?>/index.php/Aluno/busca">
			<select  id="busca" class=" btn btn-info " style="height: 34px;"name="busca">
				<option selected value="nome" ><h6>Buscar</h6></option>
				<option value="id">Id</option>
				<option value="nome">Nome</option>
				<option value="sobrenome">Sobrenome</option>
				<option value="email">Email</option>
				<option value="nivel">Nivel</option>
				<option value="Status">Status</option>
			</select>
		</div>
	<div class="col-md-5 ">
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
	<div class="col-md-3"></div>
</div>


<br><br>

<?php if (isset($alunos)) { ?>
	<div style="min-height: 100%; display: flex; flex-direction: column;">
		<div class="container ">
			<div class="row ">
				
				<br><br><br>

				<div class="col-md-0"></div><!--Decidir se width fica com 10 ou 12 -->
				<div class="col-md-12 ">
					<div class="panel panel-default">
						<div class="panel-body">
							<table class="table text-center">
								<thead class=" text-center" style="background-color:black;color:white">
									<th class="text-center">Id</th>
									<th class="text-center">Nome</th>
									<th class="text-center">Sobrenome</th>
									<th class="text-center">E-mail</th>
									<th class="text-center">Nivel</th>
									<th class="text-center">Status</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</thead>
								<tbody>
									<?php foreach($alunos as $aluno){  ?>
										<tr>
											<td ><?= $aluno['id'] ?></td>
											<td ><?= $aluno['nome'] ?></td>
											<td ><?= $aluno['sobrenome'] ?></td>
											<td ><?= $aluno['email'] ?></td>
											<td ><?= $aluno['nivel'] ?></td>
											<td><?php if( $aluno['status']==0){ ?>
												<a style="color:red; font-family:">INATIVO</a>  
											<?php	}else{ ?>
												<a style="color:green; font-family:">ATIVO</a> 
												<?php	} ?></td>
												<td > 
													<a href="<?= base_url(); ?>/index.php/Aluno/editarAluno/<?= $aluno['id']?>">     
														<button style="width: 100%;height: 30px;line-height:10px;" class="btn btn-success " >Editar</button></a>
													</td>
													<td>
														<a href="<?php if($aluno['status'] == 1) { ?><?=base_url()?>/index.php/Aluno/desativarAluno/<?=$aluno['id'] ?><?php } else { ?>#<?php } ?>"> <button style="width: 80%;height: 30px;line-height:10px;" class="btn btn-danger" >Desativar</button></a>

													</td>
													<td>

														
														<a href="<?php if($aluno['status']==0) { ?><?= base_url();?>/index.php/Aluno/ativarAluno/<?= $aluno['id']?><?php}else {?>#<?php }?>"><button style="width: 80%;height: 30px;line-height:10px;" class="btn btn-info">Reativar</button></a>
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
			echo "<script>alert('Nenhum usuario cadastrado')</script>";
			echo "<script> window.location.href = '".base_url()."/index.php/Inicio/comeco' </script>";		
		} ?>