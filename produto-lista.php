<?php include("cabecalho.php") ?>
<?php include("banco-produto.php") ?>
<?php include ("conecta.php");
include ("logica-usuario.php");


$produtos=listaProdutos($conexao);


 ?>
<table class="table table-striped table-bordered">
<?php
foreach ($produtos as $produto) {
?>
  <tr>
    <td><?= $produto['nome']?> </td>
    <td>R$ <?= $produto ['preco']?> </td>
    <td> <?= substr($produto ['descricao'], 0,40)?></td>
    <td><?=$produto ['categoria_nome']?></td>
    <td><a class="btn btn-primary" href="produto-alt-form.php?id=<?=$produto['id']?>">Alterar</a></td>
    <td>
      <form action="remove-produto.php"method="post" >
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <button class="btn btn-danger">Remover</button>

      </form>
    </td>
  </tr>
<?php
}
?>
</table>


<?php include("rodape.php") ?>
