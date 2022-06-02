<?php
require_once '../dao/clienteDAO.php';

$telefone = $_GET['telefone'];
$clienteDAO = new ClienteDAO();
$cliente = $clienteDAO->getClienteByTel($telefone);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="../css/styleAltCliente.css">
</head>
<body>
        <h1>Popeye Foods</h1>
            <div>
                <img src="../css/popeye.png" alt="Personagem Popeye" id="popeye">
            </div>
    <main>
        <div class="conteiner">
            <form action="../controller/alterarClienteControl.php" method="post">
                <input type="text" name="nome" id="nome" class="inputs" placeholder="Nome Completo" maxlength="30" required value="<?php echo $cliente['nome'] ?>">
                <br>
                <input type="text" name="telefone" id="telefone" class="inputs" placeholder="Telefone" required value="<?php echo $cliente['telefone'] ?>">
                <br>
                <input type="email" name="email" id="email" class="inputs" placeholder="seunome@email.com" maxlength="30" required value="<?php echo $cliente['email'] ?>">

                <p>Sexo:</p>
                <label>Masculino</label>
                <input type="radio" name="sexo" id="masculino" value="M" required <?php echo $cliente['sexo'] == 'M'? 'checked':''  ?>> 

                <label>Feminino</label>
                <input type="radio" name="sexo" id="feminino" value="F" <?php echo $cliente['sexo'] == 'F'? 'checked':''  ?>>
                
                <p>Data de nascimento:</p>
                <input type="date" name="datanasc" id="datanasc" class="input2" required value="<?php echo $cliente['datanasc'] ?>">
                <br><br>

                <input type="submit" value="Alterar" class="submit">

            </form>
        </div>
        <br><br>
        <div>
            <form action="formListarAllCliente.php">
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
