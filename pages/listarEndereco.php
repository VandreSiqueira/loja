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
    <title>Endereços - Loja</title>
</head>
<body>
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
            <tr>
                <td>
                    <p>Rua Inocêncio Nobelino Alves</p>
                </td>
                <td style="width: 15%">
                    <p>São Bráz</p>
                </td>
                <td>
                    <p>Afogados da Ingazeira</p>
                </td>
                <td style="width: 15%">
                    <p>56800-000</p>
                </td>
                <td style="width: 15%">
                    <p>(87)9 9808-9989</p>
                </td>
                <td style="width: 15%">
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