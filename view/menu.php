<?php

$perfil = $_SESSION['perfil'];

switch ($perfil) {
    case 'Administrador':
        echo "<a href='view/formCadastroCliente.php'>Cadastrar Cliente</a> <br><br>";
        echo "<a href='view/formListarAllCliente.php'>Listar Clientes</a> <br><br>";
        echo "<a href='view/formCadastroFunc.php'>Cadastrar Funcionário</a> <br><br>";
        echo "<a href='view/formListarAllFunc.php'>Listar Funcionário</a> <br><br>";
        break;

    case 'Funcionário':
        echo "<a href='view/formCadastroCliente.php'>Cadastrar Cliente</a> <br><br>";
        echo "<a href='view/formListarAllCliente.php'>Listar Clientes</a> <br><br>";
        break;
    
    case 'Cliente':
        echo "<a href='view/formListarAllCliente.php'>Listar Pedidos</a> <br><br>";
        break;
        
}




?>