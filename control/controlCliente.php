<?php

include('../conexao.php');
if(isset($_POST['cadastrar'])){
   
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $cpf=$_POST['cpf'];
    $email=$_POST['email'];

    $endereco = $_POST['endereco'];
    $query_endereco = mysqli_query($con, "SELECT E.id FROM endereco AS E WHERE E.endereco LIKE '%$endereco%'");
    $endereco_id = $query_endereco->fetch_array()[0];

    $exec=mysqli_query($con,"CALL inserir_cliente('$nome','$sobrenome','$cpf','$email','$endereco_id')");

    if($exec){
        echo "<script>alert('Cadastrado com sucesso!');</script>";
        echo "<script>window.location.href='../pages/menu.php'</script>"; 
    }
    else {
        echo "<script>alert('Houve algum erro! Tente novamente');</script>";
        echo "<script>window.location.href='../pages/menu.php'</script>"; 
    }
}

if(isset($_REQUEST['del'])){
    $rid=intval($_GET['del']);
    $sql =mysqli_query($con,"CALL deletar_cliente('$rid')");
    echo "<script>alert('Cliente deletado');</script>";
    echo "<script>window.location.href='../pages/listarCliente.php'</script>"; 
}
?>
?>