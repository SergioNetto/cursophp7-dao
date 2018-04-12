<?php 

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/*carrega um usuario especifico
$root = new Usuario()
$root->loadById(3);
echo $root;*/

// carrega a lista
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ser");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("joao", "1212");
echo $usuario;*/

// INSERIR USUARIO NOVO
/*$aluno = new Usuario("aluno2","@alun0dois");

$aluno->insert();

echo $aluno;*/

// Atualiza  o usuario

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("professor", "#prof001");
echo $usuario;

 ?>