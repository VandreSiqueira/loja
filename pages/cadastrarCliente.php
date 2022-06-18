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
    <title>Cadastrar Cliente - Loja</title>
</head>
<body>
    <div class="content">
        <?php
        $userId=intval($_GET['id']);
        $sql = mysqli_query($con, "SELECT * FROM cliente WHERE id = $userId");
        while ($result=mysqli_fetch_array($sql)) {
        ?>
        <form method="POST" action="../control/controlCliente.php">
            <input type="hidden" name="id" value="<?php echo (isset($_GET['id']) ? $_GET['id'] : "0"); ?>" />
            <h2><?php echo (isset($_GET['id']) ? "Atualizar" : "Cadastrar"); ?> cliente</h2>
            <label>Nome</label>
            <input type="first-name" name="nome" value="<?php echo htmlentities($result['nome']);?>" />
            <label>Sobrenome</label>
            <input type="last-name" name="sobrenome" value="<?php echo htmlentities($result['sobrenome']);?>" />
            <label>CPF</label>
            <input type="text" name="cpf" maxlength="11" value="<?php echo htmlentities($result['cpf']);?>" />
            <label>Email</label>
            <input type="email" name="email" value="<?php echo htmlentities($result['email']);?>" /> 
            <label>Endereço</label>
            <select name="endereco">
            
            <?php
                    $query_endereco = mysqli_query($con, "SELECT E.endereco FROM endereco as E WHERE E.id = '{$result['endereco_id']}'");
                    $endereco = $query_endereco->fetch_array()[0];
                    ?><option selected> <?php echo $endereco; ?> </option><?php
                    $sql =mysqli_query($con, "SELECT E.endereco FROM endereco as E");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($resultado=mysqli_fetch_array($sql)) {           
                    ?>  
                        <option><?php echo htmlentities($resultado['endereco']);?></option>                      
                    <?php 
        
                    $cnt++;
                    }

                    /**/
                    }
                    
            ?>
            </select>
            <?php } ?>
            <input id="submit" type="submit" name="cadastrar" value="<?php echo (isset($_GET['id']) ? "Atualizar" : "Cadastrar"); ?>" />
        </form>
    </div>
</body>
</html>