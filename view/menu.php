<?php

$perfil = $_SESSION['perfil'];

switch ($perfil) {
    case 'Administrador':
        echo "<a href='view/formCadastroCliente.php'>Cadastrar Cliente</a> <br><br>";
        echo "<a href='view/formListarAllCliente.php'>Listar Clientes</a> <br><br>";
        echo "<a href='view/formCadastroFunc.php'>Cadastrar Funcionário</a> <br><br>";
        break;

    case 'Funcionário':
        echo "<a href='view/formCadastroCliente.php'>Cadastrar Cliente</a> <br><br>";
        echo "<a href='view/formListarAllCliente.php'>Listar Clientes</a> <br><br>";
        break;
        
}




?>