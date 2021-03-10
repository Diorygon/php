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

echo json_encode($pessoas);

?>