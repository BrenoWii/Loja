<?php
function usuarioestalogado(){
  return isset($_COOKIE["usuario_logado"]);
}
function verificaUsuario(){
if (!usuarioestalogado()) {
  header("location: index.php?falhaDeSegurança=true");
  die();
  }
}
function usuarioLogado(){
  return $_COOKIE["usuario_logado"];

}
function logaUsuario($email){
  setcookie ("usuario_logado", $email, time() + 60);
}
