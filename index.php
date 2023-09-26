
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Página de Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="valida_login.php" method="post">
            <div class="form-group">
                <label for="email">E-mail: </label>
                <input type="text" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>

            

            <? if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                <div class='text-danger'>
                    Usuário ou senha inválidos(s)
                </div>
            <? } ?>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
