<?php

	include_once "animal.php";
	include_once "mamifero.php";
	include_once "ave.php";
	include_once "voo.php";
	include_once "elefante.php";
	include_once "cao.php";
	include_once "gato.php";
	include_once "andorinha.php";
	include_once "pato.php";
	include_once "galinha.php";
	
	
	
	$elefante = new Elefante();
	$cao = new Cao();
	$gato = new Gato();
	$andorinha = new Andorinha();
	$pato = new Pato();
	$galinha = new Galinha();
	
	
	if(isset($_POST["acao"])){
		$acao = $_POST["acao"];
		switch($acao){
			case "caoandar":
				$cao->andar();
				break;
			case "caocomer":
				$cao->comer();
				break;
			case "caoatacar":
				$cao->atacar();
				break;
				
			case "gatoandar":
				$gato->andar();
				break;
			case "gatocomer":
				$gato->comer();
				break;
				
			case "elefanteandar":
				$elefante->andar();
				break;
			case "elefantecomer":
				$elefante->comer();
				break;
				
			case "patoandar":
				$pato->andar();
				break;
			case "patocomer":
				$pato->comer();
				break;
			case "patovoar":
				$pato->voar();
				break;
				
			case "andorinhaandar":
				$andorinha->andar();
				break;
			case "andorinhacomer":
				$andorinha->comer();
				break;
			case "andorinhavoar":
				$andorinha->voar();
				break;
				
			case "galinhaandar":
				$galinha->andar();
				break;
			case "galinhacomer":
				$galinha->comer();
				break;	
		}
	}
	
?>