<?php

$mysqli = new mysqli("localhost", "root", "", "loja");

if(isset($_POST['cadastrar'])){
    $cliente_id = $_POST['cliente'];
    $vendedor_id = $_POST['vendedor'];

    $mysqli->query("CALL inserir_pedido('$cliente_id','$vendedor_id', @ult_id)");
    $res = $mysqli->query("SELECT @ult_id as _p_out");
    
    $row = $res->fetch_assoc();
    echo $row['_p_out'];
    

/*
    if($exec){
        echo "<script>alert('Cadastrado com sucesso!');</script>";
        echo "<script>window.location.href='../pages/menu.php'</script>"; 
    }
    else {
        echo "<script>alert('Houve algum erro! Tente novamente');</script>";
        echo "<script>window.location.href='../pages/menu.php'</script>"; 
    }
*/
}
?>