<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'loja';

$con = new mysqli($host, $user, $pass, $database) or die('Não foi possivel conectar ao banco de dados');
