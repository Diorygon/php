<?php

function ola($texto = "mundo", $periodo="Bom dia"){

	return "Olá $texto, $periodo!<br>";

}

echo ola();
echo ola("Diego");
echo ola("Universo","Boa Noite");
echo ola("","Boa Tarde")

?>