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
    <title>Clientes - Loja</title>
</head>
<body>
    <div class="content">
        <forms method="POST">
            <h2>Clientes</h2>
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
                    Endereço
                </th>
                <th>
                </th>
            </tr>
            <?php 
                    $sql =mysqli_query($con, "SELECT * FROM cliente");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($result=mysqli_fetch_array($sql)) {
                    $query_endereco = mysqli_query($con, "SELECT E.endereco FROM endereco AS E WHERE E.id = {$result['endereco_id']}");
                    $endereco = $query_endereco->fetch_array()[0];        
                    ?>  
                       <tr>
                       <td>
                            <p><?php echo htmlentities($result['nome']) . ' ' . htmlentities($result['sobrenome']);?></p>
                        </td>
                        <td style="width: 14%">
                            <p><?php echo htmlentities($result['cpf']);?></p>
                        </td>
                        <td>
                            <p><?php echo htmlentities($result['email']);?></p>
                        </td>
                        <td style="width: 15%">
                            <p><?php echo $endereco;?></p>
                        </td>
                        <td class="btnAcoes">
                            <a id="edit" href="cadastrarCliente.php?id=<?php echo htmlentities($result['id']);?>">Editar</a>
                            <a id="del" href="../control/controlCliente.php?del=<?php echo htmlentities($result['id']);?>">Excluir</a>
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