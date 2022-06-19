<?php

include('../conexao.php');
if(isset($_POST['cadastrar'])){
    if ($_POST['id'] == "" || $_POST['id'] == "0") {
        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];
        $cpf=$_POST['cpf'];
        $email=$_POST['email'];
        $salario = $_POST['salario'];

        $exec=mysqli_query($con,"CALL inserir_vendedor('$nome','$sobrenome','$cpf','$email','$salario')");

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
        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];
        $cpf=$_POST['cpf'];
        $email=$_POST['email'];
        $salario = $_POST['salario'];

        $exec=mysqli_query($con,"CALL atualizar_vendedor('$id','$nome','$sobrenome','$cpf','$email','$salario')");

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
    $sql =mysqli_query($con,"CALL deletar_vendedor('$rid')");
    echo "<script>alert('Vendedor deletado');</script>";
    echo "<script>window.location.href='../pages/listarVendedor.php'</script>"; 
}
?>