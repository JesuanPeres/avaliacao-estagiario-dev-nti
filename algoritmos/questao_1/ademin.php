<?php
	include_once "produto.php";
	include_once "item_venda.php";
	include_once "venda.php";
	include_once "usuario.php";
	include_once "conect.php";
	include_once "head.php";
	
	if(isset($_POST["nome"]) && isset($_POST["valor"])){
		$conect = new Conect();
		$novoProduto = new Produto();
		$novoProduto->setNome($_POST["nome"]);
		$novoProduto->setValor($_POST["valor"]);
		$conect->gravaProduto($novoProduto);
		
		echo "<div class='alert alert-success'>
				<strong>Success!</strong> Produto inserido com sucesso.
			</div>";
		echo "<script>
			setTimeout(function(){
				location.href='ademin.php';
			},2000);
			
			
			</script>";
	}
?>


		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<form method="post" action="">
						<div class="form-group">
							<label for="exampleInputEmail1">Nome do produto</label>
							<input type="text" class="form-control" id="nome" name="nome">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Preço</label>
							<input type="text" class="form-control" id="valor" name="valor">
						</div>
						
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
		
</body>