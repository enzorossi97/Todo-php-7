<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sin");
$cad->setEmail("djalma@hotmail.com");
$cad->setSenha("123456");

echo $cad->registrarVenda();
 ?>