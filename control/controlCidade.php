<?php

include('../conexao.php');
if(isset($_POST['cadastrar'])){

    if ($_POST['id'] == "" || $_POST['id'] == "0") {
        $cidade=$_POST['cidade'];
        $pais = $_POST['pais'];
        $query_pais = mysqli_query($con, "SELECT P.id FROM pais AS P WHERE P.pais = '{$pais}'");
        $pais_id = $query_pais->fetch_array()[0];

        $exec=mysqli_query($con,"CALL inserir_cidade('$cidade','$pais_id')");

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
        $cidade=$_POST['cidade'];
        $pais = $_POST['pais'];
        $query_pais = mysqli_query($con, "SELECT P.id FROM pais AS P WHERE P.pais = '{$pais}'");
        $pais_id = $query_pais->fetch_array()[0];

        $exec=mysqli_query($con,"CALL atualizar_cidade('$id','$cidade','$pais_id')");

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
    $sql =mysqli_query($con,"CALL deletar_cidade('$rid')");
    echo "<script>alert('Cidade deletada');</script>";
    echo "<script>window.location.href='../pages/listarCidade.php'</script>"; 
}
?>