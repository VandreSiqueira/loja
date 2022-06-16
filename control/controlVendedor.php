<?php

include('../conexao.php');
if(isset($_POST['cadastrar'])){
   
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
}
?>