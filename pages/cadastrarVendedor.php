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
    <title>Cadastrar Vendedor - Loja</title>
</head>
<body>
    <div class="content">
        <form method="POST" action="../control/controlVendedor.php">
            <h2>Cadastrar vendedor</h2>
            <label>Nome</label>
            <input type="first-name" name="nome" />
            <label>Sobrenome</label>
            <input type="last-name" name="sobrenome" />
            <label>CPF</label>
            <input type="text" name="cpf" maxlength="11" />
            <label>Email</label>
            <input type="email" name="email" />
            <label>Salário</label>
            <input type="number" name="salario" />
            <input id="submit" type="submit" name="cadastrar" value="Cadastrar" />
        </form>
    </div>
</body>
</html>