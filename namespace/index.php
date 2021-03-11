<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Diego mello");
$cad->setEmail("diegomll4@gmail.com");
$cad->setSenha("123456");

echo $cad;
echo "<br>";

$cad->registrarVenda();

?>