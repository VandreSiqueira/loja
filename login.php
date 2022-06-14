<?php
include('conexao.php');
session_start();
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('location: index.html');
    exit;
}
$email = mysqli_real_escape_string($con, empty($_POST['email']));
$senha = mysqli_real_escape_string($con, empty($_POST['senha']));

$query = "SELECT email, senha FROM vendedor WHERE email = {$email} and senha = {$senha}";

$result = mysqli_query($con, $query);
echo $result;
/*
if($row == 1){
    $_SESSION['vendedor'] = $email;
    exit;
} else {
    header('location: index.html');
    exit;
}
*/