<?php include ("cabecalho.php") ?>
<?php include ("conecta.php");
include ("banco-usuario.php");

?>
<?php


$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo= $_POST['tipo'];

if(insereUsuario($conexao,$email, $senha, $tipo)){?>
  <p class="text-success">O Usuario <?= $email; ?>,foi adicionado com sucesso!</p>
<?php } else {
  $msg = mysqli_error($conexao);
?>
  <p class="text-danger">O Usuario <?= $email ?>,nao foi adicionado:<?= $msg ?></p>
<?php
}

include ("rodape.php"); ?>
