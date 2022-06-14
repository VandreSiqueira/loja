<?php
// include database connection file
require_once'conexao.php';
if(isset($_POST['cadastrar']))
{
// Posted Values  
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$endereco = $_POST['endereco'];
$endereco_id = mysqli_query($con,"SELECT E.id FROM endereco AS E WHERE E.endereco LIKE '%$endereco%'");
$data_criacao = date('d/m/Y H:i');

// Call the store procedure for insertion
$sql=mysqli_query($con,"call inserir_cliente('$nome','$sobrenome','$cpf','$email','$endereco_id', '$data_criacao')");

if($sql){
// Message for successfull insertion
echo "<script>alert('Cadastrado com sucesso!');</script>";
echo "<script>window.location.href='menu.php'</script>"; 
}
else {
// Message for unsuccessfull insertion
echo "<script>alert('Houve algum erro! Tente novamente');</script>";
echo "<script>window.location.href='cadastrarCliente.php'</script>"; 
}
}
?>