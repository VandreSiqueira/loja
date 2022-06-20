<?php
session_start();
if (!isset($_SESSION['administrador']) && !isset($_SESSION['vendedor'])){
	session_destroy();
	header('location: ../index.php');
}
?>