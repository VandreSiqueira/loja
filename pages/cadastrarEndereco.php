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
    <title>Cadastrar Endereço - Loja</title>
</head>
<body>
    <div class="content">
        <form method="POST" action="../control/controlEndereco.php">
            <h2>Cadastrar endereço</h2>
            <label>Endereço</label>
            <input type="text" name="endereco" />
            <label>Bairro</label>
            <input type="text" name="bairro" />
            <label>Cidade</cidade>
            <select name="cidade">
            <?php 
                    $sql =mysqli_query($con, "SELECT C.cidade FROM cidade as C");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($result=mysqli_fetch_array($sql)) {           
                    ?>  
                        <option><?php echo htmlentities($result['cidade']);?></option>                      
                    <?php 
        
                    $cnt++;
                    } }
            ?>
            </select>
            <label>CEP</label>
            <input type="text" name="cep" maxlength="10" />
            <label>Telefone</label>
            <input type="text" name="telefone" maxlength="20" />
            <input id="submit" type="submit" name="cadastrar" value="Cadastrar" />
        </form>
    </div>
</body>
</html>