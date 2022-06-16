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
    <link rel="stylesheet" type="text/css" href="../styles/estoque.css" />
    <link rel="stylesheet" type="text/css" href="../styles/btnAcoes.css" />
    <title>Produtos - Loja</title>
</head>
<body>
    <div class="content">
        <forms method="POST">
            <h2>Produtos</h2>
            <table>
            <tr>
                <th style="width: 50%;">
                    Fruta
                </th>
                <th style="width: 16%;">
                    Quantidade
                </th>
                <th style="width: 16%;">
                    Preço
                </th>
            </tr>
            <?php 
                    $sql =mysqli_query($con, "SELECT * FROM produto as P");
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
                            <p><?php echo htmlentities($result['preco']);?></p>
                        </td>

                        <td class="btnAcoes">
                            <a id="edit" href="#">Editar</a>
                            <a id="del" href="../control/controlProduto.php?del=<?php echo htmlentities($result['id']);?>">Excluir</a>
                        </td>
                    </tr>
                    <tr>                      
                    <?php 
                    $cnt++;
                    } }
            ?>
            </tr>
            </table>
        </forms>
    </div>
</body>
</html>