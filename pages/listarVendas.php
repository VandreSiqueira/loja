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
    <title>Listar Vendas - Loja</title>
</head>
<body>
    <div class="content">
        <forms method="POST">
            <h2>Listar Vendas</h2>
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
             
            <tr>
                <td style="width: 6%">
                    1
                </td>
                <td style="width: 10%">
                    Banana
                </td>
                <td style="width: 6%;">
                    5
                </td>
                <td class="btnAcoes">
                    <a id="edit" href="cadastrarVenda.php?id=<?php echo htmlentities($result['id']);?>">Editar</a>
                    <a id="del" href="../control/controlVenda.php?del=<?php echo htmlentities($result['id']);?>">Excluir</a>
                </td>
            </tr>
            </table>
        </forms>
    </div>
</body>
</html>