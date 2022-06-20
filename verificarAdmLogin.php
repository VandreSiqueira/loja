<?php
session_start();
if (!isset($_SESSION['administrador'])){
	session_destroy();
	header('location: ../index.php');
}
?>