 <?php
 include('conexao.php');
if (isset($_POST['enviar'])) {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $query_id = "SELECT id FROM endereco AS E WHERE E.endereco = {$_POST['endereco']}";
    $endereco_id = mysqli_query($con, $query_id);

    $query_procedure = "CALL inserir_cliente({$nome}, {$sobrenome}, {$email}, {$cpf}, {$endereco_id}";
    $exec = mysqli_query($con, $query_procedure);
}
 