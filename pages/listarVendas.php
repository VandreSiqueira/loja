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
    <title>Relatorio de Vendas - Loja</title>
</head>
<body>
    <div class="content">
        <form method="POST">
            <h2>Relatório de Vendas</h2>
            <table>
            <tr>
                <th style="width: 50%;">
                    Cod Pedido
                </th>
                <th style="width: 50%;">
                    Produto
                </th>
                <th style="width: 50%;">
                    Quantidade
                </th>
            </tr>
            <?php 
            $sql =mysqli_query($con, "SELECT * FROM venda");
            $cnt=1;
            $row=mysqli_num_rows($sql);
            if($row>0){
            while ($result=mysqli_fetch_array($sql)) { 
            $query_nome_produto = mysqli_query($con, "SELECT P.nome FROM produto AS P WHERE P.id = {$result['produto_id']}");
            $nome = $query_nome_produto->fetch_array()[0];        
            ?>  
                <tr>
                <td style="width: 6%">
                    <p><?php echo htmlentities($result['pedido_id']);?></p>
                </td>
                <td style="width: 10%">
                    <p><?php echo $nome;?></p>
                </td>
                <td style="width: 6%;">
                    <p><?php echo htmlentities($result['qnt']);?></p>
                </td>
            </tr>
            <tr>                      
            <?php 
            $cnt++;
            } }
            ?>
            </table>
        </form>
    </div>
</body>
</html>