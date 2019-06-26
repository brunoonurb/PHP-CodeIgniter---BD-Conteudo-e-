<?<?php if (isset($materias)) { ?>
	<div style="min-height: 100%; display: flex; flex-direction: column;">
		<div class="container ">
			<br><br><br>
			<div class="row ">
				
				<h3 style="margin-left: 40%;" >Grade Escolar do ano</h3>
				<br><br><br>

				

				<div class="col-md-0"></div><!--Decidir se width fica com 10 ou 12 -->
				<div class="col-md-12 "> <div class="panel panel-default"> <div
					class="panel-body"> <table class="table table-hover text-center"> <thead
						class=" text-center" style="background-color:black;opacity:;
						color:white"> <th class="text-center">Turma</th> <th
						class="text-center">Materias</th>
						<th class="text-center">Professores</th>

					</thead>
					<tbody>
						<?php $cont=0; foreach($materias as $materia){ $cont++; ?>
							<tr style="background-color:<?php if ($cont % 2==0){echo "Silver";}else {echo "Gainsboro";}?>;">
								<td ><?= $materia['turma'] ?></td>
								<td ><?= $materia['materia'] ?></td>
								<td ><?= $materia['prof'] ?></td>
							</tr>

						<?php  } ?>
						<tr><td></td><td></td><td></td></tr>
					</tbody>
					<tr style="border-width:2px;border-style: solid;" ><td><b style="margin-left:20">Matricula <?= $_SESSION['id']?></b></td><td><b style="margin-left:20">Aluno: <?= $_SESSION['nome']?> <?=$_SESSION['sobrenome']?></b></td><td> <b style="margin-left:20">TOTAL DE MATERIAS <?=$cont?></b></td></tr>
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
	echo "<script> window.location.href = '".base_url()."/index.php/Inicio/comeco' </script>";} ?>