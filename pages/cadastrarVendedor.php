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
        <?php
        if(isset($_GET['id'])){
            $userId=intval($_GET['id']);
            $sql = mysqli_query($con, "SELECT * FROM vendedor WHERE id = $userId");
            while ($result=mysqli_fetch_array($sql)) {
            ?>
                <input type="hidden" name="id" value="<?php echo htmlentities($result['id']);?>"/>
                <h2>Atualizar vendedor</h2>
                <label>Nome</label>
                <input type="first-name" name="nome" value="<?php echo htmlentities($result['nome']);?>"/>
                <label>Sobrenome</label>
                <input type="last-name" name="sobrenome" value="<?php echo htmlentities($result['sobrenome']);?>"/>
                <label>CPF</label>
                <input type="text" name="cpf" maxlength="11" value="<?php echo htmlentities($result['cpf']);?>"/>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo htmlentities($result['email']);?>"/>
                <label>Salário</label>
                <input type="number" name="salario" value="<?php echo htmlentities($result['salario']);?>"/>
            <?php } 
            } else { ?>
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
            <?php } ?>
            <input id="submit" type="submit" name="cadastrar" value="<?php echo (isset($_GET['id']) ? "Atualizar" : "Cadastrar"); ?>" />
        </form>
    </div>
</body>
</html>