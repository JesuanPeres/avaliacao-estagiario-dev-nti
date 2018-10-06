<?php	
	
	class Produto{
		private $codigo;
		private $nome;
		private $valor;
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}		
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setValor($valor){
			$this->valor = $valor;
		}
		
		public function getValor(){
			return $this->valor;
		}
	}
?>