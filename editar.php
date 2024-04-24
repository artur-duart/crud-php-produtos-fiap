<?php
include("conecta.php");

if (isset($_GET["id_produto"])) {
    $recid = $_GET["id_produto"];
    $seleciona = mysqli_query($conn, "SELECT * FROM tbl_produto WHERE id_produto = $recid");

    if ($seleciona) {
        $campo = mysqli_fetch_array($seleciona);
        if ($campo) {
?>
            <!DOCTYPE html>
            <html lang="pt-br">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Formulário de edição</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
            </head>

            <body>
                <div class="container">
                    <h1>Formulário de edição</h1>
                    <form method="post" action="gravaedita.php">
                        <input type="hidden" name="fid" value="<?= $campo["id_produto"] ?>">
                        <div class="mb-3">
                            <label for="fnome" class="form-label">Nome do Produto</label>
                            <input type="text" class="form-control" id="fnome" name="fnome" placeholder="Nome do Produto" required value="<?= $campo["nome_produto"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="funidade" class="form-label">Unidade de Medida</label>
                            <input type="text" class="form-control" id="funidade" name="funidade" placeholder="Unidade de Medida" required value="<?= $campo["unidade"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="fquantidade" class="form-label">Quantidade em Estoque</label>
                            <input type="number" class="form-control" id="fquantidade" name="fquantidade" placeholder="Quantidade em Estoque" required value="<?= $campo["quantidade_estoque"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="fpreco" class="form-label">Preço</label>
                            <input type="number" step="0.01" class="form-control" id="fpreco" name="fpreco" placeholder="Preço" required value="<?= $campo["preco"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="fcodigo" class="form-label">Código do Fornecedor</label>
                            <input type="text" class="form-control" id="fcodigo" name="fcodigo" placeholder="Código do Fornecedor" required value="<?= $campo["codigo_fornecedor"] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Gravar</button>
                    </form>
                </div>
            </body>

            </html>
<?php
        } else {
            echo "Produto não encontrado.";
        }
    } else {
        echo "Erro na consulta SQL: " . mysqli_error($conn);
    }
} else {
    echo "ID do produto não foi fornecido na URL.";
}
?>
