<?php 

function __autoload($nomeClasse){
	
	//var_dump($nomeClasse); //para ver o que é requirido
	require_once("$nomeClasse.php");
	
}

$carro = new DelRey();

$carro->acelerar(80);
 ?>