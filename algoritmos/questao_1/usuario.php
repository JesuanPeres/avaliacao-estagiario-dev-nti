<?php

	class Usuario{
		public static function geraProduto($nome, $valor){
			$produto = new Produto();
			$produto->setNome($nome);
			$produto->setValor($valor);
			/*
				setar o codigo do novo produto
			*/
			return $produto;
		}
		
		
	}

?>