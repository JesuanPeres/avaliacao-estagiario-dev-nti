<!doctype HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php $titulo; ?></title>

		<!-- Bootstrap links -->

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta name="viewport" content="width=device-width, initial-scale=1">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		
		<div id="cao" class="container">
			<h2>Cão<h2>
			<button class="btn btn-info" animal="cao" acao="andar">Andar</button> 
			<button class="btn btn-info" animal="cao" acao="comer">Comer</button> 
			<button class="btn btn-info" animal="cao" acao="atacar">Atacar</button> 
		</div>
		<div id="gato" class="container">
			<h2>Gato<h2>
			<button class="btn btn-info" animal="gato" acao="andar">Andar</button> 
			<button class="btn btn-info" animal="gato" acao="comer">Comer</button>  
		</div>
		<div id="elefante" class="container">
			<h2>Elefante<h2>
			<button class="btn btn-info" animal="elefante" acao="andar">Andar</button> 
			<button class="btn btn-info" animal="elefante" acao="comer">Comer</button> 
		</div>
		<div id="pato" class="container">
			<h2>Pato<h2>
			<button class="btn btn-info" animal="pato" acao="andar">Andar</button> 
			<button class="btn btn-info" animal="pato" acao="comer">Comer</button> 
			<button class="btn btn-info" animal="pato" acao="voar">Voar</button> 
		</div>
		<div id="andorinha" class="container">
			<h2>Andorinha<h2>
			<button class="btn btn-info" animal="andorinha" acao="andar">Andar</button> 
			<button class="btn btn-info" animal="andorinha" acao="comer">Comer</button>  
			<button class="btn btn-info" animal="andorinha" acao="voar">Voar</button> 
		</div>
		<div id="galinha" class="container">
			<h2>Galinha<h2>
			<button class="btn btn-info" animal="galinha" acao="andar">Andar</button> 
			<button class="btn btn-info" animal="galinha" acao="comer">Comer</button> 
		</div>
		
		<script>
		
			$(document).ready(function(){
				
				$(".btn").click(function(){
					
					
					var animal = $(this).attr("animal");
					var acao = $(this).attr("acao");
					
					$.post("handler.php", {acao: animal+acao}, function(data, status){
						alert(data);
					});
				});
			});
		</script>
	
	</body>
</html>
