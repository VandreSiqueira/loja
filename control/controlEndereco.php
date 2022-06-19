<?php

include('../conexao.php');
if(isset($_POST['cadastrar'])){
    if ($_POST['id'] == "" || $_POST['id'] == "0") {
        $endereco=$_POST['endereco'];
        $bairro=$_POST['bairro'];
        $cep=$_POST['cep'];
        $telefone=$_POST['telefone'];
        $cidade = $_POST['cidade'];
        $query_cidade = mysqli_query($con, "SELECT C.id FROM cidade AS C WHERE C.cidade = '{$cidade}'");
        $cidade_id = $query_cidade->fetch_array()[0];

        $exec=mysqli_query($con,"CALL inserir_endereco('$endereco','$bairro','$cidade_id','$cep','$telefone')");

        if($exec){
            echo "<script>alert('Cadastrado com sucesso!');</script>";
            echo "<script>window.location.href='../pages/menu.php'</script>"; 
        }
        else {
            echo "<script>alert('Houve algum erro! Tente novamente');</script>";
            echo "<script>window.location.href='../pages/menu.php'</script>"; 
        }
    } else {
        $id = $_POST['id'];
        $endereco=$_POST['endereco'];
        $bairro=$_POST['bairro'];
        $cep=$_POST['cep'];
        $telefone=$_POST['telefone'];
        $cidade = $_POST['cidade'];
        $query_cidade = mysqli_query($con, "SELECT C.id FROM cidade AS C WHERE C.cidade = '{$cidade}'");
        $cidade_id = $query_cidade->fetch_array()[0];

        $exec=mysqli_query($con,"CALL atualizar_endereco('$id','$endereco','$bairro','$cidade_id','$cep','$telefone')");

        if($exec){
            echo "<script>alert('Atualizado com sucesso!');</script>";
            echo "<script>window.location.href='../pages/menu.php'</script>"; 
        }
        else {
            echo "<script>alert('Houve algum erro! Tente novamente');</script>";
            echo "<script>window.location.href='../pages/menu.php'</script>"; 
        }
    }    
}

if(isset($_REQUEST['del'])){
    $rid=intval($_GET['del']);
    $sql =mysqli_query($con,"CALL deletar_endereco('$rid')");
    echo "<script>alert('Endereço deletado');</script>";
    echo "<script>window.location.href='../pages/listarEndereco.php'</script>"; 
}
?>