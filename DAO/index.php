<?php

require_once("config.php");

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);

//Carrega um usuário
//$root = new Usuario();
//$root->loadByID(4);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("sa");
//echo json_encode($search);

//Carrega uma usuário usando um login e a senha
//$usuario = new Usuario();
//$usuario->login("root","root");
//echo $usuario;

//Cria um novo usuário e apresenta os dados na tela
//$aluno = new Usuario("Dio","rygon");
//$aluno->insert();
//echo $aluno;

//Faz o Update em um usuário do banco
//$usuario = new Usuario();
//$usuario->loadByID(11);
//$usuario->update("Cragg","!@#$%");
//echo $usuario;

//Deleta um usuário
//$usuario = new Usuario();
//$usuario->loadByID(5);
//$usuario->delete();
//echo $usuario;





?>