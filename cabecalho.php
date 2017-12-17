<?php
error_reporting(E_ALL ^ E_NOTICE);
include ("mostra-alerta.php");

 ?>
<html>
  <head>
    
    <title>Minha loja</title>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/loja.css">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Minha loja</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li><a href="produto-formulario.php">Adciona Produto</a></li>
            <li><a href="usuario-form.php">Adciona Usuario</a></li>
            <li><a href="produto-lista.php">Lista produtos</a></li>
            <li><a href="produto-lista.php">Comprar</a></li>
            <li><a href="sobre.php">Sobre</a></li>

          </ul>

        </div>

      </div>

    </div>

    <div class="container">
      <div class="principal">
        <?php
        mostraalerta("success");
        mostraalerta("danger");
         ?>
