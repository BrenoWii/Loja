<?php
function insereVenda($conexao,$id,$quantidade,$preco){
    $query="insert into vendas(prod_id,quantidade,preco, data ) values($id,$quantidade,'$preco','now()')";
    return mysqli_query($conexao,$query);
}
function updateEstoque($conexao,$id,$quantidade){
    $query="UPDATE produtos SET estoque=estoque-{$quantidade} WHERE id=$id";
    return mysqli_query($conexao,$query);
}