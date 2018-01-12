<?php 

$nome = "Enzo";

function teste(){

	global $nome;
	echo $nome;
}

function teste2(){

echo $nome;

}

teste(); 
teste2();

?>