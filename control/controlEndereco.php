<?php

include('../conexao.php');
if(isset($_POST['cadastrar'])){
   
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
}
?>