<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="conteiner">
        <form action="../controller/loginControl.php" method="post">
            <h2>Bem-vindo!</h2>
            <input type="text" name="usuario" id="usuario" placeholder="Nome de Usuário" maxlength="20" required>
            <br><br>
            <input type="password" name="senha" id="senha" placeholder="Insira sua Senha" maxlength="15" required>
            <br><br>

            <input type="submit" value="Login" id="submit">

        </form>
    </div>


</body>
</html>