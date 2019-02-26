<?php 


	class Pessoa
	{
		public $nome;
		public $email;
		public $cpf;
		public $sexo;
		public $data_nasc;

		function __construct($nome,$email,$cpf,$sexo,$data_nasc)
		{
			$this->nome = $nome;
			$this->email = $email;
			$this->cpf = $cpf;
			$this->sexo = $sexo;
			$this->data_nasc = $data_nasc;
		}

		public function escreve_linha(){
		
			echo "<tr>
 				<td>$this->nome</td>
 				<td>$this->email</td>
 				<td>$this->cpf</td>
 				<td>$this->sexo</td>
 				<td>$this->data_nasc</td>
 	    	</tr>";
		}
	}



 ?>