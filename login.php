<?php
include('conexao.php');
session_start();
if(empty($_POST['login']) || empty($_POST['senha'])){
    header('location: index.php');
    exit;
}
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = mysqli_query($con, "SELECT * FROM vendedor AS V WHERE V.email = '$login' AND V.senha = '$senha'");
$row=mysqli_num_rows($sql);
if($row == 1){
    $_SESSION['vendedor'] = $login;
    header('location: pages/menu.php');
    exit;
} else if($login == "admin" && $senha == "admin"){
    $_SESSION['administrador'] = $login;
    header('location: pages/menu.php');
    exit;
}else {
    header('location: index.php');
    exit;
}

?>