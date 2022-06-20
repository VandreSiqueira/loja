<?php
if(!$_SESSION['vendedor']){
	header('Location : index.php');
	exit();
} else if(!$_SESSION['administrador']) {
    header('Location : index.php');
	exit();
}
?>