<?php

	class ItemVenda{
		private $produto;
		private $quantidade;
		
		public function setProduto($produto){
			$this->produto = $produto;
		}
		
		public function getProduto(){
			return $this->produto;
		}
		
		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade;
		}
		
		public function getQuantidade(){
			return $this->quantidade;
		}

		public function calculaDesconto(){
			$desconto = 0.0;
			if($this->quantidade > 30){
				$desconto = 0.2;
			}elseif($this->quantidade > 20){
				$desconto = 0.1;
			}elseif($this->quantidade > 10){
				$desconto = 0.05;
			}
			return $desconto;
		}
		
		public function calculaValorFinal(){
			$valorProduto = $this->produto->getValor();
			return ($valorProduto * $this->quantidade)- ($valorProduto * $this->calculaDesconto());
		}
		
	}

?>