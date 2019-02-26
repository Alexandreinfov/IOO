<?php 
	include("pessoa.php");

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$cpf = $_POST["cpf"];
	$sexo = $_POST["sexo"];
	$data_nasc = $_POST["data_nasc"];

	$p1 = new Pessoa("$nome","$email","$cpf","$sexo","$data_nasc");
 ?>

	<table border="1">
 	<tr>
 		<td>NOME</td>
 		<td>E-MAIL</td>
 		<td>CPF</td>
 		<td>SEXO</td>
 		<td>DATA_NASC</td>
 		
 	</tr>
 <?php 
	$p1->escreve_linha();
  ?>

</table>
