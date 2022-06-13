 <?php
 include('conexao.php');
if (isset($_POST['enviar'])) {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $query = "SELECT id FROM endereco WHERE endereco = {}";
    $endereco_id = mysqli_query($con, $query);
 ("CALL inserir_cliente(?, ?, ?, ?, ?)
   
}
 ?>