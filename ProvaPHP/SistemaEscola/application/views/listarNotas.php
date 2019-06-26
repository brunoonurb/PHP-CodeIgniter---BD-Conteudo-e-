


<?php if (isset($notas)) { ?>
	<div style="min-height: 100%; display: flex; flex-direction: column;">
		<div class="container ">
			<br><br><br>
			<div class="row ">
				
				<h3 style="margin-left: 40%;" >Notas semestral</h3>
				<br><br><br>

				

				<div class="col-md-0"></div><!--Decidir se width fica com 10 ou 12 -->
				<div class="col-md-12 "> <div class="panel panel-default"> <div
					class="panel-body"> <table class="table table-hover text-center"> <thead
						class=" text-center" style="background-color:black;opacity:;
						color:white"> <th class="text-center">Materia</th> <th
						class="text-center">Professor</th>
						<th class="text-center">Nota</th>
						
					</thead>
					<tbody>
						<?php $soma=0;$cont=0; foreach($notas as $nota){ $cont++; $soma+=$nota['nota']; ?>
							<tr style="background-color:<?php if ($cont % 2==0){echo "Silver";}else {echo "Gainsboro";}?>;">
								<td ><?= $nota['materia'] ?></td>
								<td ><?= $nota['prof'] ?></td>
								<td ><?= $nota['nota'] ?></td>
								
							<?php  } ?>
							<tr><td></td><td></td><td></td></tr>
						</tbody>
						<tr style="border-width:2px;border-style: solid;" ><td><b style="margin-left:20">Matricula <?= $_SESSION['id']?></b></td><td><b style="margin-left:20">Aluno: <?= $_SESSION['nome']?> <?=$_SESSION['sobrenome']?></b></td><td> <b style="margin-left:20"> MEDIA FINAL: <?php if ($cont!=0) {
							echo $soma/$cont;
						}else{
							echo "0.0";
						}?></b></td></tr>
						
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