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
</head>
<body>
    <?php
        echo "Usuário: ", $_SESSION['usuario'];
        echo "<br>";
        echo "Perfil: ", $_SESSION['perfil'];
    ?>
    <br><br>
    
    <?php
        include 'view/menu.php';
    ?>
    
    <a href="controller/logoffControl.php">Logout</a>

</body>
</html>