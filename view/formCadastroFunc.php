<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="../css/styleCadastroFunc.css">
</head>
<body>
    <h1>
        Cadastro de Funcionários
    </h1>
    <br>

    <img src="../css/worker.png" alt="Trabalhadores" id="worker">

    <main>
        <div class="conteiner">
            <form action="../controller/cadastroFuncControl.php" method="post">
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" maxlength="30" required class="inputs">
                <br>
                <input type="text" name="telefone" id="telefone" placeholder="Telefone" required class="inputs">
                <br>
                <input type="email" name="email" id="email" placeholder="seunome@email.com" maxlength="30" required class="inputs">
                <br>

                <input type="text" name="usuario" id="usuario" placeholder="Seu nome de Usuário" maxlength="20" required class="inputs">
                <br>
                <input type="password" name="senha" id="senha" placeholder="Sua senha" maxlength="15" required class="inputs">
                <br>

                <select name="perfil" class="input2">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                </select>

                <p>Sexo:</p>
                <input type="radio" name="sexo" id="masculino" value="M" required> 
                <label>Masculino</label>

                <input type="radio" name="sexo" id="feminino" value="F">
                <label>Feminino</label>
                
                <p>Data de nascimento:</p>
                <input type="date" name="datanasc" id="datanasc" required class="input2">
                <br>

                <input type="submit" value="Cadastrar" class="submit">

            </form>
        </div>
        <br><br>
        
        <div>
            <form action="../index.php">
                <input type="submit" value="Voltar" id="cadastro" class="submit2">
            </form>
        </div>
        
    </main>

</body>


</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


        
<script type="text/javascript">
    $("#telefone").mask("(00) 0000-00000");
</script>