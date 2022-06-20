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
    <link rel="stylesheet" type="text/css" href="../styles/estoque.css" />
    <title>Estoque - Loja</title>
</head>
<body>
    <div class="content">
        <forms method="POST">
            <h2>Estoque</h2>
            <table>
            <tr>
                <th style="width: 50%;">
                    Fruta
                </th>
                <th style="width: 16%;">
                    Qnt
                </th>
                <th style="width: 16%;">
                    Valor Uni.
                </th>
                <th style="width: 16%;">
                    Total
                </th>
            </tr>
            <?php 
                    $sql =mysqli_query($con, "SELECT * FROM view_estoque");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($result=mysqli_fetch_array($sql)) {           
                    ?>  
                       <tr>

                        <td id="col1" style="width: 6%;">
                            <img src="<?php echo htmlentities($result['link']);?>" />
                            <p><?php echo htmlentities($result['nome']);?></p>
                        </td>
                        <td style="width: 10%">
                            <p><?php echo htmlentities($result['quantidade']);?></p>
                        </td>
                        <td style="width: 6%;">
                            <p><?php echo htmlentities($result['preco_unitario']);?></p>
                        </td>
                        <td style="width: 6%;">
                            <p><?php echo htmlentities($result['preco_total']);?></p>
                        </td>
                    </tr>
                    <tr>                      
                    <?php 
                    $cnt++;
                    } }
            ?>
            </table>
        </forms>
    </div>
</body>
</html>