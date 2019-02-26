<?php
	
	include_once("pessoa.php");

	class Secretario extends Pessoa{
		public $salario;

		public function __construct($nome,$email,$telefone,$idade,$sexo,$cpf,$salario)
		{

			parent::__construct($nome,$email,$telefone,$idade,$sexo,$cpf);

			$this->salario = $salario;
				
		}

		public function exibir_secretario(){

			$this->exibir_pessoa();
			echo "

 				<td>$this->salario</td>
 			
 	
 	    	</tr>";
		}
	}
 ?>