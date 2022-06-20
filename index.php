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
    <div class="container">
    <div class="content" style="margin-top: 10rem;margin-bottom: 10rem;">
        <form method="post" action="login.php">
            <h2>Login</h2>
            <label>Email: </label>
            <input type="text" name="login" placeholder="vendedor@loja.com" />
            <label>Senha: </label>
            <input type="password" name="senha" />
            <input id="submit" type="submit" value="Entrar" />
        </form>
    </div>
    <div>
</body>
</html>