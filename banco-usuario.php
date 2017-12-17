<?php


function buscaUsuario($conexao,$email,$senha){
$query = "select * from usuarios where email='{$email}'and senha='{$senha}'";
$resultado = mysqli_query($conexao,$query);
$usuario = mysqli_fetch_assoc($resultado);

return $usuario;

}
function insereUsuario($conexao, $email, $senha,$tipo){
  $query="insert into usuarios(email, senha,tipo) values('{$email}', '{$senha}','{$tipo}')";
  return mysqli_query($conexao,$query);
}
