<?php include ("cabecalho.php");
include("logica-usuario.php");

if(isset($_GET["login"]) && $_GET["login"]==true) {  ?>
  <p class="alert-success">Logado com sucesso</p>

<?php
}
if(isset($_GET["login"]) && $_GET["login"]==false) {  ?>
  <p class="alert-danger">Email ou senha invalida</p>
<?php } ?>
<?php if(isset($_GET["falhaDeSegurança"]) && $_GET["falhaDeSegurança"]==true) {  ?>
  <p class="alert-danger">Voce nao tem acesso a essa funcionalidade</p>
<?php } ?>


<h1>Bem vindo!!</h1>

<?php if (usuarioestalogado())   {?>
  <p class="text-success">Voce esta logado como <?= usuarioLogado()?></p>
<?php }else { ?>
<h2>Login</h2>
<form action="login.php" method="post">
    <table class="table">
      <tr>
        <td>Email</td>
        <td><input class="form-control" type="email" name="email" ></td>
      </tr>
      <tr>
        <td>Senha</td>
        <td><input class="form-control" type="password" name="senha"></td>
      </tr>
      <tr>
        <td><button class="btn btn-primary">Login</button></td>
      </tr>

    </table>
</form>
<?php } ?>
<?php include ("rodape.php"); ?>
