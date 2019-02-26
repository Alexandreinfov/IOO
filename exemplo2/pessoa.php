<?php 
	
	class Pessoa{
		public $nome;
		public $email;
		public $telefone;
		public $idade;
		public $sexo;
		public $cpf;
	

	public function __construct($nome,$email,$telefone,$idade,$sexo,$cpf)
		{
			$this->nome = $nome;
			$this->email = $email;
			$this->telefone = $telefone;
			$this->idade = $idade;
			$this->sexo = $sexo;
			$this->cpf = $cpf;
		}

		public function exibir_pessoa(){
			echo "<tr>
 				<td>$this->nome</td>
 				<td>$this->email</td>
 				<td>$this->telefone</td>
 				<td>$this->idade</td>
 				<td>$this->sexo</td>
 				<td>$this->cpf</td>
 	
 	    	";
		}

	}

	
 ?>