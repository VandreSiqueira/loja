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
        <?php
        if(isset($_GET['id'])){
            $userId=intval($_GET['id']);
            $sql = mysqli_query($con, "SELECT * FROM produto WHERE id = $userId");
            while ($result=mysqli_fetch_array($sql)) {
            ?>
                <input type="hidden" name="id" value="<?php echo htmlentities($result['id']);?>"/>
                <h2>Atualizar produto</h2>
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo htmlentities($result['nome']);?>"/>
                <label>Icon <small>(Link)</small></label>
                <input type="link" name="icon" value="<?php echo htmlentities($result['link']);?>"/>
                <label>Preço</label>
                <input type="number" name="preco" value="<?php echo htmlentities($result['preco']);?>"/>
                <label>Quantidade</label>
                <input type="number" name="quantidade" value="<?php echo htmlentities($result['quantidade']);?>"/>

            <?php } 
            } else { ?>
                <h2>Cadastrar produto</h2>
                <label>Nome</label>
                <input type="text" name="nome" />
                <label>Icon <small>(Link)</small></label>
                <input type="link" name="icon" />
                <label>Preço</label>
                <input type="number" name="preco" />
                <label>Quantidade</label>
                <input type="number" name="quantidade" />
            <?php } ?>
            <input id="submit" type="submit" name="cadastrar" value="<?php echo (isset($_GET['id']) ? "Atualizar" : "Cadastrar"); ?>" />
        </form>
    </div>
</body>
</html>