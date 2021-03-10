<?php

	/*for($i=0; $i<=10; $i++){

		echo $i. "<br>";

	}*/

	//Conta até 1000 pulando de 5 em 5, mas pula de 200 a 800 tb...

	for($i=0; $i<1000; $i+=5){
		
		if ($i >= 200 && $i <=800) continue;

		if ($i === 900) break;

		echo $i. "<br>";

	}


?>