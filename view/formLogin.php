<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/styleLogin.css">
</head>
<body>

    <h1>Popeye Foods</h1>
    <div>
        <img src="../css/popeye.png" alt="Personagem Popeye" id="popeye">
    </div>

    <div class="conteiner">
        <form action="../controller/loginControl.php" method="post">
            <h2>Bem-vindo!</h2>
            <input type="text" name="usuario" id="usuario" placeholder="Nome de Usuário" maxlength="20" required class="inputs">
            <br>
            <input type="password" name="senha" id="senha" placeholder="Insira sua Senha" maxlength="15" required class="inputs">
            <br><br>

            <input type="submit" value="Login" id="submit" class="submit">
            <br>

        </form>
    </div>
    <br><br>
    <h3>Ainda não é cadastrado?</h3>
    <form action="formCadastroCliente.php">
        <input type="submit" value="Cadastre-se" id="cadastro" class="submit2">
    </form>
    
    <form action="sobre.php">
        <input type="submit" value="Sobre o Autor" id="sobre" class="botao">
    </form>
    <br><br>


</body>
<footer>

</footer>
</html>