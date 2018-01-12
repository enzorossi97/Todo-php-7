<?php 	

function soma(int ...$valores): String{

	return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo var_dump(soma(25, 33));
echo "<br>";
echo var_dump(soma(3.2, 3.2));


 ?>

