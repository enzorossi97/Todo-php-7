<?php 

$file = fopen("teste.img", "w+");

fclose($file);


unlink("teste.txt");

echo "arquivo removido";

 ?>
