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
        <form method="POST" action="../control/controlCidade.php">
            <h2>Cadastrar cidade</h2>
            <label>Cidade</label>
            <input type="text" name="cidade" />
            <label>Pais</label>
            <select name="pais">
            <?php 
                    $sql =mysqli_query($con, "SELECT P.pais FROM pais as P");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($result=mysqli_fetch_array($sql)) {           
                    ?>  
                        <option><?php echo htmlentities($result['pais']);?></option>                      
                    <?php 
        
                    $cnt++;
                    } }
            ?>
            </select>
            <input id="submit" type="submit" name="cadastrar" value="Cadastrar" />
        </form>
    </div>
</body>
</html>