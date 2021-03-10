<?php 

$idade = 25;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

	if($idade < $idadeCrianca){

		echo "Você é uma criança!";

	}else if($idade < $idadeMaior){

		echo "Você é um Adolescente!";

	}else if($idade < $idadeMelhor){

		echo "Você é um Adulto!";
	}else{

		echo "Você está na melhor idade!";
	}

	echo "<br>";

	echo ($idade > $idadeMaior)?"Você pode tirar carteira de motorista!":"Você ainda não pode dirigir!"

?>