<?php
require_once '../dao/funcionarioDAO.php';
$telefone = $_GET['telefone'];

$funcionarioDAO = new funcionarioDAO();
$ok = $funcionarioDAO->excluirFunc($telefone);

if ($ok) {
    echo "<script> alert('Funcionário Excluído') 
            window.location='../view/formListarAllFunc.php'
    </script>";
} else {
    echo "Deu ruim";
}

?>