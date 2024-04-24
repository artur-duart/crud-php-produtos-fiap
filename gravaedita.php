<?php
include("conecta.php");

$recid = $_POST["fid"];
$recnome = $_POST["fnome"];
$recunidade = $_POST["funidade"];
$recquantidade = $_POST["fquantidade"];
$recpreco = $_POST["fpreco"];
$reccodigo = $_POST["fcodigo"];

$query = "UPDATE tbl_produto SET
            nome_produto = '$recnome',
            unidade = '$recunidade',
            quantidade_estoque = $recquantidade,
            preco = $recpreco,
            codigo_fornecedor = '$reccodigo'
          WHERE id_produto = $recid";

if (mysqli_query($conn, $query)) {
    header("location:lista.php");
} else {
    echo "Erro ao atualizar o produto: " . mysqli_error($conn);
}
