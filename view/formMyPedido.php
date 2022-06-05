<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Pedido</title>

    <link rel="stylesheet" href="../css/styleMyPedido.css">
</head>
<body>
    <div>
        <form action="../index.php">
            <input type="submit" value="Voltar" class="submit2">
        </form>
    </div>
    <h1>Popeye Foods</h1>
    <div>
        <img src="../css/popeye.png" alt="Personagem Popeye" id="popeye">
    </div>
    <h2>Preencha com seu email:</h2>
    

    <div class="conteiner">
        <form action="" method="get">
            <input type="email" placeholder="seunome@email.com" maxlength="30" required class="inputs" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>">
            <br>
            <button type="submit" class="submit">Buscar</button>
            <h3>Atenção: Deve ser o mesmo email do pedido</h3>
            <br>
            
        </form>

        <div>
            <?php

                $con = mysqli_connect("localhost","root","","projetophp");

                if(isset($_GET['email'])){

                    $email = $_GET['email'];

                    $query = "SELECT * FROM pedido WHERE email='$email' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0){
                        
                        foreach ($query_run as $row) {
                            
                            ?>
                                
                                <label>Proteína:</label>
                                <input type="text" class="inputs" value="<?= $row['proteina']; ?>">
                                <br>
                                <label>Quantidade:</label>
                                <input type="text" class="input2" value="<?= $row['quantidade1']; ?>">
                                <br><br>
                                <label>Carboidrato:</label>
                                <input type="text" class="inputs" value="<?= $row['carboidrato']; ?>">
                                <br>
                                <label>Quantidade:</label>
                                <input type="text" class="input2" value="<?= $row['quantidade2']; ?>">
                                <br><br>
                                <label>Endereço de Entrega:</label>
                                <input type="text" class="inputs" value="<?= $row['endereco']; ?>">
                                <br>
                                <label>Horário:</label>
                                <input type="text" class="input3" value="<?= $row['horario']; ?>"



                            <?php   

                        }

                    } else {
                        echo "Não foi possível resgatar suas informações, verifique seus dados.";
                    }

                }

            ?>


        </div>
        
    </div>
</body>
</html>