<?php

	class Venda{
		private $codigo;
		private $dataHora;
		private $valorTotal;
		private $itens;
		
		public function Venda(){
			$this->valorTotal = 0.0;
			$this->itens = array();
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getValorTotal(){
			return $this->valorTotal;
		}
		
		public function setDataHora($dataHora){
			$this->dataHora = $dataHora;
		}
		
		public function getDataHora(){
			return $this->dataHora;
		}
		
		public function getItens(){
			return $this->itens;
		}
		
		
		
		public function addItem($produto, $quantidade){
			$item = new ItemVenda();
			$item->setProduto($produto);
			$item->setQuantidade($quantidade);
			$this->valorTotal += $item->calculaValorFinal();
			array_push($this->itens, $item);
		}
	}

?>