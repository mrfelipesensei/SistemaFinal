<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Pedido</title>
</head>
<body>
    
    <h1>Preencha com seu email:</h1>
    

    <div class="conteiner">
        <form action="" method="get">
            <input type="email" placeholder="" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>">
            <br><br>
            <button type="submit">Buscar</button>
            <h2>Atenção: Deve ser o mesmo email do pedido</h2>
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
                                <input type="text" value="<?= $row['proteina']; ?>">
                                <br>
                                <label>Quantidade:</label>
                                <input type="text" value="<?= $row['quantidade1']; ?>">
                                <br>
                                <label>Carboidrato:</label>
                                <input type="text" value="<?= $row['carboidrato']; ?>">
                                <br>
                                <label>Quantidade:</label>
                                <input type="text" value="<?= $row['quantidade2']; ?>">
                                <br>
                                <label>Endereço de Entrega:</label>
                                <input type="text" value="<?= $row['endereco']; ?>">
                                <br>
                                <label>Horário:</label>
                                <input type="text" value="<?= $row['horario']; ?>"



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