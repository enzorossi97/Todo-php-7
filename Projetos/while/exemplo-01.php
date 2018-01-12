<?php 

	$condicao = true;

	while ($condicao) {

		$numero  = rand(1, 10);
		echo "<br>";
		echo "Número sorteado: " .$numero;

		if ($numero === 3) {
			echo "Três!!!";
			$condicao = false;
		}
		
	}

 ?>