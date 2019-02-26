<?php 
	
	include("cadeira.php");

	$c1 = new Cadeira("Azul","5.3","ACO","10","120",true,"0.4","0.85");

	$c2 = new Cadeira("Preto","0.9","Plastico","5","40",FALSE,"0.4","0.4");
/*
	//print_r($c1);
/*
	$c1->cor = "Azul";
	$c1->peso = "5.3";
	$c1->material = "ACO";
	$c1->durabilidade = "10";
	$c1->custo = "120";
	$c1->tamanho = "0.4";
	$c1->encosto = true;
	$c1->regulagem_minima = "0.4";
	$c1->regulagem_maxima = "0.85";


	echo "<br/><br/>";
	print_r($c1);

	$c1->aumentar(0.5);
	echo "<br/><br/
	>";
	print_r($c1);

	

	
	//print_r($c1);

	$c2->cor = "Preto";
	$c2->peso = "0.9";
	$c2->material = "Plastico";
	$c2->durabilidade = "5";
	$c2->custo = "40";
	$c2->tamanho = "0.4";
	$c2->encosto = false;
	$c2->regulagem_minima = "0.4";
	$c2->regulagem_maxima = "0.4";*/
 ?>

 <table border="1">
 	<tr>
 		<td>cor</td>
 		<td>peso</td>
 		<td>material</td>
 		<td>durabilidade</td>
 		<td>tamanho</td>
 		<td>encosto</td>
 		<td>regulagem_minima</td>
 		<td>regulagem_maxima</td>
 		<td>custo</td>
 	</tr>


 <?php 

 	$c1->escreve_linha();
 	$c2->escreve_linha();


  ?>
   </table>