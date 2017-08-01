<?php
session_start();
function usuarioestalogado(){
  return isset($_SESSION["usuario_logado"]);
}
function verificaUsuario(){
if (!usuarioestalogado()) {
  $_SESSION["danger"]= " Você nao tem acesso a esta funcionalidade";
  header("location: index.php");
  die();
  }
}
function usuarioLogado(){
  return $_SESSION["usuario_logado"];

}
function logaUsuario($email){
  $_SESSION["usuario_logado"]=$email;
}
function logout(){
  session_destroy();
  session_start();
}
