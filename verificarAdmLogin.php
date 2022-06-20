<?php
if(!$_SESSION['administrador']){
	header('Location : index.php');
	exit();
}
?>