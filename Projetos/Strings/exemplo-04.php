<?php 

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, "mãe");

var_dump($q);

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
?>