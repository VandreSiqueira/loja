<?php
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
    <title>Menu - Loja</title>
</head>
<body>
    <div class="container">
    <div class="content" style="margin-top: 10rem;margin-bottom: 10rem">
        <h2>Menu</h2>
        <div id="op">
            <div id="opcoes">
                <a id="op1" href="cadastrarCliente.php">Cadastrar Cliente</a>
                <a id="op2" href="fazerPedido.php">Fazer Pedido</a>
                <a id="op3" href="verEstoque.php">Ver Estoque</a>
                <a id="op4" href="cadastrarCidade.php">Cadastrar Cidade</a>
            </div>
            <div id="opcoes">
                <a id="op5" href="cadastrarEndereco.php">Cadastrar Endereço</a>
                <a id="op6" href="cadastrarProduto.php">Cadastrar Produto</a>
                <a id="op7" href="listarCidade.php">Listar Cidade</a>
                <a id="op8" href="listarCliente.php">Listar Cliente</a>
            </div>
            <div id="opcoes">
                <a id="op9" href="listarEndereco.php">Listar Endereço</a>
                <a id="op10" href="listarProduto.php">Listar Produto</a>
                <a id="op11" href="listarVendas.php">Listar Vendas</a>
                <?php 
                    if(isset($_SESSION['administrador'])){ ?>
                    <a id="op12" href="cadastrarVendedor.php">Cadastrar Vendedor</a> 
                <?php
                    }
                ?>
            </div>
            <div id="opcoes">
                
                <?php 
                    if(isset($_SESSION['administrador'])){ ?>
                    <a id="op13" href="listarVendedor.php">Listar Vendedor</a>  
                <?php
                    }
                ?>
                <a id="op14" href="../sair.php">Sair</a>
            </div>
            
        </div>
        
    </div>
    </div>
</body>
</html>