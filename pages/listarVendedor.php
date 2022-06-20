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
    <title>Vendedor - Loja</title>
</head>
<body>
    <div class="content">
        <forms method="POST">
            <h2>Vendedores</h2>
            <table>
            <tr>
                <th>
                    Nome completo
                </th>
                <th>
                    CPF
                </th>
                <th>
                    Email
                </th>
                <th>
                    Salário
                </th>
                <th>
                </th>
            </tr>
            <?php 
                    $sql =mysqli_query($con, "SELECT * FROM vendedor");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($result=mysqli_fetch_array($sql)) {        
                    ?>  
                       <tr>
                       <td>
                            <p><?php echo htmlentities($result['nome']) . ' ' . htmlentities($result['sobrenome']);?></p>
                        </td>
                        <td>
                            <p><?php echo htmlentities($result['cpf']);?></p>
                        </td>
                        <td>
                            <p><?php echo htmlentities($result['email']);?></p>
                        </td>
                        <td>
                            <p><?php echo htmlentities($result['salario']);?></p>
                        </td>
                        <td class="btnAcoes">
                            <a id="edit" href="cadastrarVendedor.php?id=<?php echo htmlentities($result['id']);?>">Editar</a>
                            <a id="del" href="../control/controlVendedor.php?del=<?php echo htmlentities($result['id']);?>">Excluir</a>
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