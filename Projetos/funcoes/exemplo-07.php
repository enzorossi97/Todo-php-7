<?php 	

function soma(int ...$valores){

	return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(3.2, 3.2);


 ?>

