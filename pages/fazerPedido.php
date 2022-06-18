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
        <forms method="POST">
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
                        $sql =mysqli_query($con, "SELECT CONCAT(C.nome, ' ', C.sobrenome) AS nome_completo FROM cliente as C");
                        $cnt=1;
                        $row=mysqli_num_rows($sql);
                        if($row>0){
                        while ($result=mysqli_fetch_array($sql)) {           
                        ?>  
                            <option><?php echo htmlentities($result['nome_completo']);?></option>                      
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
                        $sql = mysqli_query($con, "SELECT CONCAT(V.nome, ' ', V.sobrenome) AS nome_completo FROM vendedor as V");
                        $cnt=1;
                        $row=mysqli_num_rows($sql);
                        if($row>0){
                        while ($result=mysqli_fetch_array($sql)) {           
                        ?>  
                            <option><?php echo htmlentities($result['nome_completo']);?></option>                      
                        <?php 
            
                        $cnt++;
                        } }
                    ?>
                    </select>
                </div>
            </div>
            <input id="submit" type="submit" name="cadastrar" value="Fazer pedido" />
        </forms>
    </div>
</body>
</html>