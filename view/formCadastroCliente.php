<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="../css/styleCadastroCliente.css">
</head>
<body>
    
    <h1>Popeye Foods</h1>
    <div>
        <img src="../css/popeye.png" alt="Personagem Popeye" id="popeye">
    </div>

    <h3>Após essa rápida etapa, você já poderá pedir!</h3>
    <main>
        <div class="conteiner">
            <form action="../controller/cadastroClienteControl.php" method="post">
                <h2>Preencha os campos:</h2>
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" maxlength="30" required class="inputs">
                <br>
                <input type="text" name="telefone" id="telefone" placeholder="Telefone" required class="inputs">
                <br>
                <input type="email" name="email" id="email" placeholder="seunome@email.com" maxlength="30" required class="inputs">

                <p>Sexo:</p>
            
                <input type="radio" name="sexo" id="masculino" value="M" required> 
                <label>Masculino</label>
                
                <input type="radio" name="sexo" id="feminino" value="F">
                <label>Feminino</label>
                
                <p>Data de nascimento:</p>
                <input type="date" name="datanasc" id="datanasc" required class="inputs">
                <br><br>

                <input type="submit" value="Cadastrar" class="submit">

            </form>
        </div>
        <br><br>
        <div>
            <form action="formLogin.php">
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