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
    <link rel="stylesheet" type="text/css" href="../styles/pedido.css" />
    <title>Fazer Pedido - Loja</title>
</head>
<body>
    <div class="content">
        <form method="post" action="../control/controlPedido.php">
            <h2>Fazer pedido</h2>
            <table>
            <?php 
                    $sql =mysqli_query($con, "SELECT * FROM produto as P");
                    $cnt=1;
                    $row=mysqli_num_rows($sql);
                    if($row>0){
                    while ($result=mysqli_fetch_array($sql)) {           
                    ?> 
                       <input type="hidden" name="id[]"/> 
                       <tr>

                        <td id="col1" style="width: 6%;">
                            <img src="<?php echo htmlentities($result['link']);?>" />
                            <p><?php echo htmlentities($result['nome']);?></p>
                        </td>
                        <td style="width: 10%">
                            <input type="number" name="qnt[]"/>
                        </td>
                        <td style="width: 10%">
                            <p>Preço: R$ <?php echo htmlentities($result['preco']);?></p>
                        </td>
                    </tr>
                    <tr>                      
                    <?php 
                    $cnt++;
                    } }
            ?>
            </table>
            <div id="secao">
                <div>
                    <label>Cliente</label>
                    <select name="cliente">
                    <?php 
                        $sql =mysqli_query($con, "SELECT * FROM cliente as C");
                        $cnt=1;
                        $row=mysqli_num_rows($sql);
                        if($row>0){
                        while ($resultado=mysqli_fetch_array($sql)) {           
                        ?>  
                            <option value="<?php echo htmlentities($resultado['id']);?>"><?php echo $resultado['nome'] . " " . $resultado['sobrenome'];?></option>                      
                        <?php 
            
                        $cnt++;
                        } }
                    ?>
                    </select>
                </div>
                <div>
                    <label>Vendedor</label>
                    <select name="vendedor">
                    <?php 
                        $sql = mysqli_query($con, "SELECT * FROM vendedor as V");
                        $cnt=1;
                        $row=mysqli_num_rows($sql);
                        if($row>0){
                        while ($resultado1=mysqli_fetch_array($sql)) {           
                        ?>  
                            <option value="<?php echo htmlentities($resultado1['id']);?>"><?php echo $resultado1['nome'] . " " . $resultado1['sobrenome'];?></option>                      
                        <?php 
            
                        $cnt++;
                        } }
                    ?>
                    </select>
                </div>
            </div>
            <input id="submit" type="submit" name="cadastrar" value="Fazer pedido" />
        </form>
    </div>
</body>
</html>