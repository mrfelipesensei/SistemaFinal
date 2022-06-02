<?php
include 'login/validaLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <link rel="stylesheet" href="css/styleIndex.css">

</head>
<body>
    <div class="conteiner1">
        <?php
            echo "Usuário: ", $_SESSION['usuario'];
            echo "<br>";
            echo "Perfil: ", $_SESSION['perfil'];
        ?>
    </div>
    <br><br>
    
    <div class="conteiner2">
        <?php
            include 'view/menu.php';
        ?>
    </div>
    
    <div id="submit">
        <a href="controller/logoffControl.php">Logout</a>
    </div>
</body>
</html>