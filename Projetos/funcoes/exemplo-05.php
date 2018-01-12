<?php 	

$a = 10;

function trocaValor(&$a){

	$a = 50;
	return $a;

}

echo $a; //10
echo "<br>";
echo trocaValor($a); //50
echo "<br>";
echo $a; //50 por causa do &



 ?>

