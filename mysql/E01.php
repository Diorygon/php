<?php 

$conn = new mysqli("localhost","root","","dbphp7");

if ($conn->connect_error){

    echo "Erro:".$conn->connect_error;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $senha);

$login = "teste";
$senha = "456789";
$stmt->execute();

$login = "teste2";
$senha = "456789";
$stmt->execute();

?>