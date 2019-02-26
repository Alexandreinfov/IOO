<?php
	
	include_once("pessoa.php");

	class Professor extends Pessoa{
		public $salario;
		public $disciplina;


		public function __construct($nome,$email,$telefone,$idade,$sexo,$cpf,$salario,$disciplina)
		{

			parent::__construct($nome,$email,$telefone,$idade,$sexo,$cpf);

			$this->salario = $salario;
			$this->disciplina = $disciplina;
			
		}


		public function exibir_professor(){

			$this->exibir_pessoa();
			echo "

 				<td>$this->salario</td>
 				<td>$this->disciplina</td>
 	
 	    	</tr>";
		}

	}
 ?>

 