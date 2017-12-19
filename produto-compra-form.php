<?php include ("cabecalho.php");
include ("conecta.php");
include ('banco-categoria.php');
include ("banco-produto.php");

$id =$_GET['id'];
$produto = buscaProduto($conexao,$id);
$categorias = listacategorias($conexao);
$usado = $produto['Usado'] ? "checked='checked'": "";
?>


<h1>Alteração de produto</h1>
<form action="adiciona-venda.php" method="post">
    <input type="hidden" name="id" value="<?=$produto['id']?>">


    <table class="table">
        <tr>
            <td>Nome:</td>
            <td ><h1 class="text-justify"><?= $produto['nome']?></h1></td>
        </tr>
        <tr>
            <td >Preço:</td>
            <td ><h1 class="text-justify"><?= $produto['preco']?></h1></td>
        </tr>
        <tr>
            <td >Descrição:</td>
            <td ><p class="text-justify"><?= $produto['descricao']?></p></td>
        </tr>

        <tr>
            <td>Quantidade</td>
            <td>
                <input type="number" name="quantidade" >
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" style="background-color: #4cae4c" type="submit">Comprar</button>
            </td>
        </tr>
    </table>
</form>
<?php include("rodape.php") ?>
