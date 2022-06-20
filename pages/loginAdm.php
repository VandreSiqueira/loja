<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <title>Login - Loja</title>
</head>
<body>
    <div class="content">
        <form method="POST" action="login.php">
            <h2>Administrador</h2>
            <label>Login: </label>
            <input type="text" name="login" />
            <label>Senha: </label>
            <input type="password" name="senha" />
            <input id="submit" type="submit" value="Entrar" />
        </form>
    </div>
</body>
</html>