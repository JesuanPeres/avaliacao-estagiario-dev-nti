<?php


	
	include_once "produto.php";
	include_once "item_venda.php";
	include_once "venda.php";
	include_once "usuario.php";
	include_once "conect.php";
	
	include_once "head.php";
	
	$conect =  new Conect();
	
	$produtosBanco = $conect->listarProdutos();
	
	$produtosObj = array();
	
	

	foreach($produtosBanco as $p){
		$novoProduto = new Produto();
		$novoProduto->setCodigo($p["codigo"]);
		$novoProduto->setNome($p["nome"]);
		$novoProduto->setValor($p["valor"]);
		
		array_push($produtosObj, $novoProduto);
	}
	
	echo "<div class='row'>";
	
	foreach($produtosObj as $produto){
		echo "<div class='col-md-4 produto prod'>
				<div class='card' style='width: 18rem; display:inline;'>
					<div class='card-body'>
						<h5 class='card-title'>".$produto->getNome()."</h5>
						<p class='card-text'>".
							$produto->getValor()
						."</p>
						<input class='".$produto->getCodigo()."' type='number' value='1' min='1' max='999'> 
						<button type='button' produto = '".$produto->getCodigo()."' class='botao btn btn-info'>Adicionar</button>
						<button type='button' produto = '".$produto->getCodigo()."' class='remove btn btn-danger'>Remover</button>
					</div>
				</div>
			</div>";
	}

	echo "</div>";
	
	include_once "bottom.php";

?>

