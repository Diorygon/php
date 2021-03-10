<?php

$condicao = true;

while($condicao){

	$numero = rand(1,10);

	if($numero === 3){

		echo" Bingo! o número foi sorteado: ";
		$condicao = false;
	}

	echo $numero . " ";
}

?>