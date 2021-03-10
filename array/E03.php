<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Joao',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Diego',
	'idade'=>24
));

array_push($pessoas, array(
	'nome'=>'Luelen',
	'idade'=>27
));

var_dump($pessoas);

print_r($pessoas[0]['nome']);


?>