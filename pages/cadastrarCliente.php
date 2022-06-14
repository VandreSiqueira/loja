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
        <forms method="POST" action="control/controlCliente.php">
            <h2>Cadastrar cliente</h2>
            <label>Nome</label>
            <input type="first-name" name="nome" />
            <label>Sobrenome</label>
            <input type="last-name" name="sobrenome" />
            <label>CPF</label>
            <input type="text" name="cpf" maxlength="11" />
            <label>Email</label>
            <input type="email" name="email" /> 
            <label>Endereço</label>
            <select name="endereco">
            <?php 
                    $sql =mysqli_query($con, "SELECT E.endereco FROM endereco as E");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($result=mysqli_fetch_array($sql)) {           
                    ?>  
                        <option><?php echo htmlentities($result['endereco']);?></option>                      
                    <?php 
        
                    $cnt++;
                    } }
            ?>
            </select>
            <input id="submit" type="submit" name="cadastrar" value="Cadastrar" />
        </forms>
    </div>
</body>
</html>