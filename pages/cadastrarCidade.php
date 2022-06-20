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
    <title><?php echo (isset($_GET['id']) ? "Atualizar" : "Cadastrar"); ?> Cidade - Loja</title>
</head>
<body>
    <div class="content">
    <form method="POST" action="../control/controlCidade.php">
    <?php
    if(isset($_GET['id'])){
        $userId=intval($_GET['id']);
        $sql = mysqli_query($con, "SELECT * FROM cidade WHERE id = $userId");
        while ($result=mysqli_fetch_array($sql)) {
        ?>
            <input type="hidden" name="id" value="<?php echo htmlentities($result['id']);?>" />
            <h2>Atualizar cidade</h2>
            <label>Cidade</label>
            <input type="text" name="cidade" value="<?php echo htmlentities($result['cidade']);?>"/>
            <label>Pais</label>
            <select name="pais">
            <?php
                    $query_endereco = mysqli_query($con, "SELECT P.pais FROM pais AS P WHERE P.id = '{$result['pais_id']}'");
                    $pais = $query_endereco->fetch_array()[0];
                    ?><option selected> <?php echo $pais; ?> </option><?php

                    $sql =mysqli_query($con, "SELECT * FROM pais");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($resultado=mysqli_fetch_array($sql)) {           
                    ?>
                    <?php if($result['pais_id'] != $resultado['id']) {?>
                        <option><?php echo htmlentities($resultado['pais']);?></option>                      
                    <?php 
                    }
                    $cnt++;
                    } }
            ?>
            </select>
            <?php } 
            } else { ?>
                <h2>Cadastrar cidade</h2>
                <label>Cidade</label>
                <input type="text" name="cidade"/>
                <label>Pais</label>
                <select name="pais">
                <?php
                        $query_endereco = mysqli_query($con, "SELECT P.pais FROM pais AS P WHERE P.id = '{$result['pais_id']}'");
                        $pais = $query_endereco->fetch_array()[0];
                

                        $sql =mysqli_query($con, "SELECT * FROM pais");
                        $cnt=1;
                        $row=mysqli_num_rows($sql);
                        if($row>0){
                        while ($resultado=mysqli_fetch_array($sql)) {           
                        ?>
        <option><?php echo htmlentities($resultado['pais']);?></option>
                        <?php                   }
                        $cnt++;
      
                                      } }
                ?>
                </select>
            <?php } ?>
            <input id="submit" type="submit" name="cadastrar" value="<?php echo (isset($_GET['id']) ? "Atualizar" : "Cadastrar"); ?>" />
        </form>
    </div>
</body>
</html>