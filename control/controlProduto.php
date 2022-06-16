<?php

include('../conexao.php');
if(isset($_POST['cadastrar'])){
   
    $nome=$_POST['nome'];
    $link=$_POST['link'];
    $preco=$_POST['preco'];
    $quantidade=$_POST['quantidade'];

    $exec=mysqli_query($con,"CALL inserir_produto('$nome','$link','$preco','$quantidade')");

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