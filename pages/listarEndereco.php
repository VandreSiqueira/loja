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
    <link rel="stylesheet" type="text/css" href="../styles/btnAcoes.css" />
    <title>Endereços - Loja</title>
</head>
<body>
    <div class="container">
    <div class="content">
        <forms method="POST">
            <h2>Endereço</h2>
            <table>
            <tr>
                <th>
                    Endereço
                </th>
                <th>
                    Bairro
                </th>
                <th>
                    Cidade
                </th>
                <th>
                    CEP
                </th>
                <th>
                    Telefone
                </th>
                <th>
                    País
                </th>
                <th>
                </th>
            </tr>
            <?php 
                    $sql =mysqli_query($con, "SELECT * FROM endereco");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($result=mysqli_fetch_array($sql)) {
                    $query_cidade = mysqli_query($con, "SELECT C.cidade FROM cidade AS C WHERE C.id = {$result['cidade_id']}");
                    $cidade = $query_cidade->fetch_array()[0];
                    
                    $query_paisId = mysqli_query($con, "SELECT C.pais_id FROM cidade AS C WHERE C.id = {$result['cidade_id']}");
                    $pais_id = $query_paisId->fetch_array()[0];
                    
                    $query_pais = mysqli_query($con, "SELECT P.pais FROM pais AS P WHERE P.id = {$pais_id}");
                    $pais = $query_pais->fetch_array()[0]; 
                    ?>  
                       <tr>
                       <td>
                            <p><?php echo htmlentities($result['endereco']);?></p>
                        </td>
                        <td style="width: 15%">
                            <p><?php echo htmlentities($result['bairro']);?></p>
                        </td>
                        <td>
                            <p><?php echo $cidade;?></p>
                        </td>
                        <td style="width: 15%">
                            <p><?php echo htmlentities($result['cep']);?></p>
                        </td>
                        <td style="width: 15%">
                            <p><?php echo htmlentities($result['telefone']);?></p>
                        </td>
                        <td style="width: 15%">
                            <p><?php echo $pais;?></p>
                        </td>
                        <td class="btnAcoes">
                            <a id="edit" href="cadastrarEndereco.php?id=<?php echo htmlentities($result['id']);?>">Editar</a>
                            <a id="del" href="../control/controlEndereco.php?del=<?php echo htmlentities($result['id']);?>">Excluir</a>
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
    </div>
</body>
</html>