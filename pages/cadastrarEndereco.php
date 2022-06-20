<?php 
include('../conexao.php');
include('../verificarLogin.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../styles/menu.css" />
    <link rel="stylesheet" type="text/css" href="../styles/style.css" />
    <title><?php echo (isset($_GET['id']) ? "Atualizar" : "Cadastrar"); ?> Endereço - Loja</title>
</head>
<body>
    <div class="content">
    <form method="POST" action="../control/controlEndereco.php">
    <?php
    if(isset($_GET['id'])){
        $userId=intval($_GET['id']);
        $sql = mysqli_query($con, "SELECT * FROM endereco WHERE id = $userId");
        while ($result=mysqli_fetch_array($sql)) {
        ?>
            <input type="hidden" name="id" value="<?php echo htmlentities($result['id']);?>"/>
            <h2>Atualizar endereço</h2>
            <label>Endereço</label>
            <input type="text" name="endereco" value="<?php echo htmlentities($result['endereco']);?>" />
            <label>Bairro</label>
            <input type="text" name="bairro" value="<?php echo htmlentities($result['bairro']);?>"/>
            <label>Telefone</label>
            <input type="text" name="telefone" maxlength="20" value="<?php echo htmlentities($result['telefone']);?>"/>
            <label>CEP</label>
            <input type="text" name="cep" maxlength="10" value="<?php echo htmlentities($result['cep']);?>"/>
            <label>Cidade</cidade>
            <select name="cidade">
            <?php
                    $query_endereco = mysqli_query($con, "SELECT C.cidade FROM cidade AS C WHERE C.id = '{$result['cidade_id']}'");
                    $endereco = $query_endereco->fetch_array()[0];
                    ?><option selected> <?php echo $endereco; ?> </option><?php

                    $sql =mysqli_query($con, "SELECT * FROM cidade");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($resultado=mysqli_fetch_array($sql)) {           
                    ?>
                    <?php if($result['cidade_id'] != $resultado['id']) {?>
                        <option><?php echo htmlentities($resultado['cidade']);?></option>                      
                    <?php 
                    }
                    $cnt++;
                    } }
            ?>
            </select>
        <?php } 
        } else { ?>
            <h2>Cadastrar Endereço</h2>
            <label>Endereço</label>
            <input type="text" name="endereco"/>
            <label>Bairro</label>
            <input type="text" name="bairro"/>
            <label>Telefone</label>
            <input type="text" name="telefone" maxlength="20"/>
            <label>CEP</label>
            <input type="text" name="cep" maxlength="10"/>
            <label>Cidade</cidade>
            <select name="cidade">
            <?php
                $query_endereco = mysqli_query($con, "SELECT C.cidade FROM cidade AS C WHERE C.id = '{$result['cidade_id']}'");
                $endereco = $query_endereco->fetch_array()[0];
                $sql =mysqli_query($con, "SELECT * FROM cidade");
                $cnt=1;
                $row=mysqli_num_rows($sql);
                if($row>0){
                while ($resultado=mysqli_fetch_array($sql)) {           
                    ?>
                    <option><?php echo htmlentities($resultado['cidade']);?></option>                      
                    <?php 
                }
                $cnt++;
                } 
            ?>
            </select>
        <?php } ?>
        <input id="submit" type="submit" name="cadastrar" value="<?php echo (isset($_GET['id']) ? "Atualizar" : "Cadastrar"); ?>" />
        </form>
    </div>
</body>
</html>


