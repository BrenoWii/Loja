<?php
include ("conecta.php");
include ("banco-usuario.php");
include ("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if($usuario == null){
  $_SESSION["danger"]= "Usu�rio ou senha invalido";
  header("location:index.php");

}else {
  $_SESSION["user"]=$usuario["tipo"];
  $_SESSION["success"] = "Usu�rio logado com sucesso.";
  logaUsuario($usuario["email"]);
  header ("location: index.php");
  var_dump($usuario);
}

die();
