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
            <tr>
                <td style="width: 50%">
                    <p>Afogados da Ingazeira</p>
                </td>
                <td style="width: 50%">
                    <p>Brasil</p>
                </td>
                <td>
                    <a id="edit" href="#">Editar</a>
                    <a id="del" href="#">Excluir</a>
                </td>
            </tr>
            </table>
        </forms>
    </div>
</body>
</html>