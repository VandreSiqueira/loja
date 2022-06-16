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
            <tr>
                <td id="col1" style="width: 6%;">
                    <img src="https://cdn-icons-png.flaticon.com/512/812/812900.png" />
                    <p>Maçã</p>
                </td>
                <td style="width: 10%">
                    <p>100</p>
                </td>
                <td style="width: 6%;">
                    <p>R$ 3,00</p>
                </td>
                <td class="btnAcoes">
                    <a id="edit" href="#">Editar</a>
                    <a id="del" href="#">Excluir</a>
                </td>
            </tr>
            <tr>
                <td id="col1" style="width: 6%;">
                    <img src="https://cdn-icons-png.flaticon.com/512/3616/3616072.png" />
                    <p>Laranja</p>
                </td>
                <td style="width: 10%">
                    <p>50</p>
                </td>
                <td style="width: 6%;">
                    <p>R$ 2,00</p>
                </td>
                <td class="btnAcoes">
                    <a id="edit" href="#">Editar</a>
                    <a id="del" href="#">Excluir</a>
                </td>
            </tr>
            </table>
        </forms>
    </div>
</body>
</html>