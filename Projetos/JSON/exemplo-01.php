<?php 

$pessoas = array();

array_push($pessoas, array(
		'nome' => 'Glaucio',
		'idade' => 25
));

array_push($pessoas, array(
		'nome' => 'Carlos',
		'idade' => 45
));

echo json_encode($pessoas);

 ?>