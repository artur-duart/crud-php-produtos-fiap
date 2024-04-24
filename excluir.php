<?php
include("conecta.php");

if (isset($_GET["id_produto"])) {
    $recid = $_GET["id_produto"];

    $query = "DELETE FROM tbl_produto WHERE id_produto = $recid";

    if (mysqli_query($conn, $query)) {
        header("location:lista.php");
    } else {
        echo "Erro ao excluir o produto: " . mysqli_error($conn);
    }
} else {
    echo "ID do produto não foi fornecido na URL.";
}
