<?php
	include_once "produto.php";
	include_once "item_venda.php";
	include_once "venda.php";
	include_once "usuario.php";
	include_once "conect.php";

	
	$conect =  new Conect();
	
	$produtosBanco = $conect->listarProdutos();
	
	$produtosObj = array();
	
	$venda = new Venda();

	foreach($_POST as $chave => $quant){
		$p = $conect->selecionaProduto($chave);
		
		$novoProduto = new Produto();
		$novoProduto->setCodigo($p["codigo"]);
		$novoProduto->setNome($p["nome"]);
		$novoProduto->setValor($p["valor"]);
		
		$venda->addItem($novoProduto, (int)$quant);
	}
	$conect->gravarVenda($venda);
	
	echo "Venda bem sucedida\nValor total: R$" .$venda->GetValorTotal();


?>