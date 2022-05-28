<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
    <main>
        <div class="conteiner">
            <form action="../controller/cadastroClienteControl.php" method="post">
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" maxlength="30" required>
                <br><br>
                <input type="text" name="telefone" id="telefone" placeholder="Telefone" required>
                <br><br>
                <input type="email" name="email" id="email" placeholder="seunome@email.com" maxlength="30" required>

                <p>Sexo:</p>
                <label>Masculino</label>
                <input type="radio" name="sexo" id="masculino" value="M" required> 

                <label>Feminino</label>
                <input type="radio" name="sexo" id="feminino" value="F">
                
                <p>Data de nascimento:</p>
                <input type="date" name="datanasc" id="datanasc" required>
                <br><br>

                <input type="submit" value="Cadastrar">

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