<?php 

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("w");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user", "12345");
//echo $usuario;


//Criando um novo usuário
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;


//Alterar um usuário
//$usuario = new Usuario();
//$usuario->loadById(12);
//$usuario->update("professor", "!@#$%¨&*");
//echo $usuario;



$usuario = new Usuario();

$usuario->loadById(11);

$usuario->delete();

echo $usuario;


?>