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
            <tr>
                <td>
                    <p>Pedro Vinícius Alcântara Oliveira</p>
                </td>
                <td style="width: 14%">
                    <p>242.424.242-24</p>
                </td>
                <td>
                    <p>pvao@discente.ifpe.edu.br</p>
                </td>
                <td style="width: 15%">
                    <p>Rua Sargento de Moura</p>
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