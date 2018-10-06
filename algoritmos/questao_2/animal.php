<?php

	class Animal{
		private $peso;
		private $quantPatas;
		
		public function setPeso($peso){
			$this->peso = $peso;
		}
		
		public function getPeso(){
			return $this.peso;
		}
		
		public function setQuantPatas($quantPatas){
			$this->quantPatas = $quantPatas;
		}
		
		public function getQuantPatas(){
			return $this->quantPatas;
		}
		
		public function comer(){
			echo "Estou comendo\n";
		}
		
		public function andar(){
			echo "Estou andando\n";
		}
	}

?>