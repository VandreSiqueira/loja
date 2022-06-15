<?php 
include('../conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../styles/menu.css" />
    <link rel="stylesheet" type="text/css" href="../styles/style.css" />
    <title>Cadastrar Produto - Loja</title>
</head>
<body>
    <div class="content">
        <form method="POST" action="../control/controlProduto.php">
            <h2>Cadastrar produto</h2>
            <label>Nome</label>
            <input type="text" name="nome" />
            <label>Icon <small>(Link)</small></label>
            <input type="link" name="icon" />
            <label>Preço</label>
            <input type="number" name="preco" />
            <label>Quantidade</label>
            <input type="number" name="quantidade" />
            <input id="submit" type="submit" name="cadastrar" value="Cadastrar" />
        </form>
    </div>
</body>
</html>