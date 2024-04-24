<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container">
        <h1>Listagem de produtos</h1>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Unidade</th>
                    <th>Quantidade em Estoque</th>
                    <th>Preço</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conecta.php");
                $seleciona = mysqli_query($conn, "SELECT * FROM tbl_produto");
                while ($campo = mysqli_fetch_array($seleciona)) {
                ?>
                    <tr>
                        <td><?= $campo["id_produto"] ?></td>
                        <td><?= $campo["nome_produto"] ?></td>
                        <td><?= $campo["unidade"] ?></td>
                        <td><?= $campo["quantidade_estoque"] ?></td>
                        <td><?= $campo["preco"] ?></td>
                        <td><a class="btn btn-primary" href="editar.php?id_produto=<?= $campo["id_produto"] ?>">Editar</a></td>
                        <td><a class="btn btn-danger" href="excluir.php?id_produto=<?= $campo["id_produto"] ?>">Excluir</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
