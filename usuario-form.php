<?php include ("cabecalho.php");
include("logica-usuario.php");
verificaUsuario();
?>

<form action="adiciona-usuario.php" method="post">
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
          <td>Tipo</td>
          <td >
              <select   name="tipo">
                  <option value="admin">Administrador</option>
                  <option value="padrao">Padrão</option>
              </select>
          </td>
      </tr>
      <tr>
        <td><button class="btn btn-primary">Cadastrar</button></td>
      </tr>

    </table>
</form>
<?php include ("rodape.php"); ?>