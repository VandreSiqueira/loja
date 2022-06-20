<?php
include('conexao.php');
session_start();
if(empty($_POST['login']) || empty($_POST['senha'])){
    header('location: index.html');
    exit;
}
$login = $_POST['login'];
$senha = $_POST['senha'];

$query = "SELECT email, senha FROM vendedor WHERE email = {$login} and senha = {$senha}";

$result = mysqli_query($con, $query);
$row=mysqli_num_rows($result);

if($row == 1){
    $_SESSION['vendedor'] = $login;
    header('location: menu.html');
    exit;
} else {
    header('location: index.html');
    exit;
}
