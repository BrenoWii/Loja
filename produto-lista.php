<?php include("cabecalho.php") ?>
<?php include("banco-produto.php") ?>
<?php include ("conecta.php");
include ("logica-usuario.php");


$produtos=listaProdutos($conexao);


 ?>
<table class="table table-striped table-bordered">
   <tr>
       <td>Nome </td>
    <td>Preço</td>
    <td>Estoque</td>
    <td>Descrição</td>
    <td>Categoria</td>
    
  </tr>
<?php
foreach ($produtos as $produto) {

?>

    <tr>
        <td><?= $produto['nome'] ?> </td>
        <td>R$ <?= $produto['preco'] ?> </td>
        <td><?= $produto['estoque'] ?> </td>
        <td><?= substr($produto ['descricao'], 0, 40) ?></td>
        <td><?= $produto ['categoria_nome'] ?></td>

        <?php
        if ($_SESSION["user"] == "admin") {
            ?>
            <td><a class="btn btn-primary" href="produto-alt-form.php?id=<?= $produto['id'] ?>">Alterar</a></td>
            <td>
                <form action="remove-produto.php" method="post">
                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                    <button class="btn btn-danger">Remover</button>

                </form>
            </td>

            <?php
        }else{
            ?>
        <td><a class="btn btn-primary" style="background-color: #4cae4c"
                     href="produto-compra-form.php?id=<?= $produto['id'] ?>">Comprar</a></td>
        <?php
        }

        ?>

    </tr>
<?php
}
?>
</table>


<?php include("rodape.php") ?>
