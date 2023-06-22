<?php 
require_once("config.php");
//$sql = new Sql();
//$usuarios= $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(13);
//echo $root;


//Carrega uma lista de usuarios
//$lista=Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("root");
//echo json_encode($search);


//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario -> login("user","12345");
//echo $usuario;


//Insert
//$aluno = new Usuario("Nicolas","admin");
//$aluno->insert();
//echo $aluno;


//Update 
//$usuario = new Usuario();
//$usuario-> loadById(8);
//$usuario -> update("dwdwwd","admin")


$usuario = new Usuario();
$usuario->loadById(9);
$usuario->delete();  
echo "$usuario";
?>