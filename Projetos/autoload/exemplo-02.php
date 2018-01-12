<?php 

function incluirClasses($nomeClasse){
	//função que procura o arquivo e captura ele
	if (file_exists($nomeClasse . ".php") === true) {
		//se o arquivo $nomeClasse = nome do arquivo requerido.php for igual a verdade
		require_once($nomeClasse. ".php");
		//faz o requerimento do arquivo
	}
	
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

	if (file_exists("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
		require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
	}

});

$carro = new DelRey();

$carro->acelerar(80);
 ?>