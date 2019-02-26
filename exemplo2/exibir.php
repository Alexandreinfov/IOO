<?php 

include("professor.php");
include("aluno.php");
include("Secretario.php");


$p1 = new Professor("Marcio","alex@lima.com","3335689","70","M","636.658.987-85","40.000","S.I");
$a1 = new Aluno("Pedro","pedro@lima.com","3335689","15","M","636.658.987-85","3568","20");
$s1 = new Secretario("Souza","sda@ffsd.com","46786753","20","M","123.458.987-85","1.500");

 ?>

<table border="1">
 	<tr>
 		<th rowspan="2">Professor</th>
 		<td>nome</td>
 		<td>email</td>
 		<td>telefone</td>
 		<td>idade</td>
 		<td>sexo</td>
 		<td>cpf</td>
 		<td>salario</td>
 		<td>disciplina</td>
 	</tr>

<br/><br/>
 <?php 

 	$p1->exibir_professor();

  ?>
   </table>

   <table border="1">
 	<tr>
 		<th rowspan="2">Aluno</th>
 		<td>nome</td>
 		<td>email</td>
 		<td>telefone</td>
 		<td>idade</td>
 		<td>sexo</td>
 		<td>cpf</td>
 		<td>matricula</td>
 		<td>nota</td>
 	</tr>
 	<br/><br/>

 <?php 

 	$a1->exibir_aluno();

  ?>
   </table>

   <table border="1">
 	<tr>
 		<th rowspan="2">Secretario</th>
 		<td>nome</td>
 		<td>email</td>
 		<td>telefone</td>
 		<td>idade</td>
 		<td>sexo</td>
 		<td>cpf</td>
 		<td>salario</td>
 		
 	</tr>
<br/><br/>

 <?php 

 	$s1->exibir_secretario();

  ?>
   </table>