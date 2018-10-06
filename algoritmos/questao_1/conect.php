<?php

	class Conect{
		
		private static $dsn = "mysql:host=localhost;dbname=teste;charset=utf8";
		private static $user = "root";
		private static $pass = "";
		private $pdo;
		
		public function Conect(){
			
			try{
				$this->pdo = new PDO($this::$dsn, $this::$user, $this::$pass);
			}catch(PDOException $ex){
				echo $ex;
			}			
		}
		
		public function gravaProduto($produto){
			$sql = "INSERT INTO produto(nome, valor) VALUES(:nome, :valor)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(":nome", $produto->getNome());
			$stmt->bindValue(":valor", $produto->getValor());
			$stmt->execute();
			$produto->setCodigo($this->pdo->lastInsertID());
		}
		
		public function gravarVenda($venda){
			$sql = "INSERT INTO venda(valor, data_hora) VALUES(:valor, :data_hora)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(":valor", $venda->getValorTotal());
			$stmt->bindValue(":data_hora", $venda->getDataHora());
			$stmt->execute();
			$venda->setCodigo($this->pdo->lastInserteID());
		}
		
		public function gravarItensVenda($venda){
			$sql = "INSERT INTO iten_venda(:codigo_venda, :codigo_produto, :quantidade)";
			$stmt = $this->pdo->prepare($sql);
			$codVenda = $venda->getCodigo();
			$itens = $venda->getItens();
			
			foreach($itens as $item){
				$codProd = $item->getProduto()->getCodigo();
				$quant = $item->getQuantidade();
				
				$stmt->bindValue(":codigo_venda", $codVenda);
				$stmt->bindValue(":codigo_produto", $codProd);
				$stmt->bindValue(":quantidade", $quant);
				
				$stmt->execute();
			}
		}
		
		public function listarProdutos(){
			$sql = "SELECT * FROM produto";
			$stmt = $this->pdo->query($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		
		public function selecionaProduto($chave){
			$sql = "SELECT * FROM produto p WHERE p.codigo = ".$chave;
			$stmt = $this->pdo->query($sql);
			$stmt->execute();
			return $stmt->fetchAll()["0"];//não deu tempo de pesquisar outra forma
		}
	
	}

?>