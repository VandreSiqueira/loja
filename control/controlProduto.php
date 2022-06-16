<?php

include('../conexao.php');
if(isset($_POST['cadastrar'])){
   
    $nome=$_POST['nome'];
    $link=$_POST['icon'];
    $preco=$_POST['preco'];
    $quantidade=$_POST['quantidade'];

    $exec=mysqli_query($con,"CALL inserir_produto('$nome','$preco','$quantidade', '$link')");
    
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
    $sql =mysqli_query($con,"CALL deletar_produto('$rid')");
    echo "<script>alert('Produto deletado');</script>";
    echo "<script>window.location.href='../pages/listarProduto.php'</script>"; 
}
?>