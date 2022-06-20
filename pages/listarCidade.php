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
    <title>Cidades - Loja</title>
</head>
<body>
    <div class="content">
        <forms method="POST">
            <h2>Cidades</h2>
            <table>
            <tr>
                <th>
                    Cidade
                </th>
                <th>
                    País
                </th>
                <th>
                </th>
            </tr>
            <?php 
                    $sql =mysqli_query($con, "SELECT * FROM cidade");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($result=mysqli_fetch_array($sql)) {  
                    $query_pais = mysqli_query($con, "SELECT P.pais FROM pais AS P WHERE P.id = {$result['pais_id']}");
                    $pais = $query_pais->fetch_array()[0]; 
                    ?>  
                       <tr>
                       <td style="width: 50%">
                            <p><?php echo htmlentities($result['cidade']);?></p>
                        </td>
                        <td style="width: 50%">
                            <p><?php echo $pais;?></p>
                        </td>
                        <td class="btnAcoes">
                            <a id="edit" href="cadastrarCidade.php?id=<?php echo htmlentities($result['id']);?>">Editar</a>
                            <a id="del" href="../control/controlCidade.php?del=<?php echo htmlentities($result['id']);?>">Excluir</a>
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