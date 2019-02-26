<?php 
	
	//nome cadeira
	class Cadeira
	{
		//lista de atributos
		public $cor;
		public $peso;
		public $material;
		public $durabilidade;
		public $custo;
		public $tamanho;
		public $encosto;
		public $regulagem_minima;
		public $regulagem_maxima;

		//método construtor. Parâmetros Obrigatorios 
		public function __construct($cor,$peso,$material,$durabilidade,$custo,$encosto,$regulagem_minima,$regulagem_maxima){

			$this->cor = $cor;
			$this->peso = $peso;
			$this->material = $material;
			$this->durabilidade = $durabilidade;
			$this->custo = $custo;
			$this->tamanho = $regulagem_minima;
			$this->encosto = $encosto;
			$this->regulagem_maxima = $regulagem_maxima;
			$this->regulagem_minima = $regulagem_minima;
		}

		//lista de metodos
		public function aumentar($medida){
			$this->tamanho = $this->tamanho + $medida;
			if ($this->tamanho>$this->regulagem_maxima) {
				$this->tamanho = $this->regulagem_maxima;
			}
		}

		public function abaixar($medida){
			$this->tamanho = $this->tamanho - $medida;
			if ($this->tamanho<$this->regulagem_minima) {
				$this->tamanho = $this->regulagem_minima;
			}
		}

		public function escreve_linha(){
			echo "<tr>
 				<td>$this->cor</td>
 				<td>$this->peso</td>
 				<td>$this->material</td>
 				<td>$this->durabilidade</td>
 				<td>$this->tamanho</td>
 				<td>$this->encosto</td>
 				<td>$this->regulagem_minima</td>
 				<td>$this->regulagem_maxima</td>
 				<td>$this->custo</td>

 	    	</tr>";
		}

	}

 ?>