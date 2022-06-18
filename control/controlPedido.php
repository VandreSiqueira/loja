<?php

$mysqli = new mysqli("localhost", "root", "", "loja");

if(isset($_POST['cadastrar'])){
    $cliente_id = $_POST['cliente'];
    $vendedor_id = $_POST['vendedor'];

    $mysqli->query("CALL inserir_pedido('$cliente_id','$vendedor_id', @ult_id)");
    $res = $mysqli->query("SELECT @ult_id as _p_out");
    $query_pedido_id = $res->fetch_assoc();
    $pedido_id = $query_pedido_id['_p_out'];

    for ($i = 0; $i < count($_POST['id']); $i++) {
        $produto_id = $_POST['id'][$i];
        $qnt = $_POST['qnt'][$i];
        if($qnt > 0){
            $mysqli->query("CALL inserir_venda('$pedido_id','$produto_id', '$qnt')");
        }
        
    }
    
    if($res){
        echo "<script>alert('Pedido realizado!');</script>";
        echo "<script>window.location.href='../pages/menu.php'</script>"; 
    }
    else {
        echo "<script>alert('Houve algum erro! Tente novamente');</script>";
        echo "<script>window.location.href='../pages/menu.php'</script>"; 
    }
}
?>