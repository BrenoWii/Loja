<?php include ("cabecalho.php") ?>
<?php include("banco-produto.php") ?>
<?php include ("conecta.php");
include ("logica-usuario.php");
include ("banco-venda.php");
?>
<?php
$id = $_POST["id"];
$quantidade = $_POST['quantidade'];

$produto= buscaProduto($conexao,$id);
if(insereVenda($conexao,$id, $quantidade,$produto["preco"])){ updateEstoque($conexao,$id,$quantidade);?>
    <p class="text-success">A venda foi realizada com sucesso!</p>

<?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">A Venda nao foi realizada : <?= $msg ?></p>
    <?php
}

?>
<?php include("rodape.php"); ?>
