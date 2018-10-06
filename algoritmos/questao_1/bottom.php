	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<button class='enviar btn btn-success' id='enviar'>Enviar</button>
			</div>
		</div>
	</div>
	
	
	<script>
		//ajax
		
		var url = "handler.php";
		var info = {};
		
		
		$(document).ready(function(){
			
			$("#enviar").click(function(){
				$.post(url, info, function(data, status){alert(data);});
				document.location.href="index.php";
			});
			
			$(".botao").on("click", function(){
				
				var produto = $(this).attr('produto');
				var quant = $('.' + produto).val();
				info[produto] = quant;
			});
			
			$(".remove").on("click", function(){
				
				var produto = $(this).attr('produto');
				var quant = $('.' + produto).val();
				delete info[produto];
			});
			
		});
		

	</script>
</body>