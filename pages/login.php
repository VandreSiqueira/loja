<?php
include('conexao.php');
session_start();
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('location: index.html');
    exit();
}
$email = mysqli_real_escape_string($con, empty($_POST['email']));
$senha = mysqli_real_escape_string($con, empty($_POST['senha']));

$query = "SELECT email, senha FROM vendedor WHERE email = {$email} and senha = {$senha}";

$result = mysqli_query($con, $query);

$row = mysqli_num_rows($result);

if($rows == 1){
    $_SESSION['vendedor'] = $email
    exit();
}{
    header('location: index.html');
    exit();
}