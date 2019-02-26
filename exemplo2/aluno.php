<?php
	
	include_once("pessoa.php");

	class Aluno extends Pessoa{
		public $matricula;
		public $nota;

		public function __construct($nome,$email,$telefone,$idade,$sexo,$cpf,$matricula,$nota)
		{

			parent::__construct($nome,$email,$telefone,$idade,$sexo,$cpf);

			$this->matricula = $matricula;
			$this->nota = $nota;
			
		}

		public function exibir_aluno(){

			$this->exibir_pessoa();
			echo "

 				<td>$this->matricula</td>
 				<td>$this->nota</td>
 	
 	    	</tr>";
		}

	}
 ?>