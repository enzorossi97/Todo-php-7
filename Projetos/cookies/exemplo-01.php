<?php 

$data = array(
	"empresa"=>"CATISet",
	"nome do dono"=>"Antonio"
	);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "Ok";
?>

