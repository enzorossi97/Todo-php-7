<?php 

$file = fopen("log.txt", "a+");

fwrite($file, "Olá mundo, sua hóra é: " . date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "O arquivo $file foi criado com sucesso.";

 ?>